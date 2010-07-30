<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jomres_gateway_handler
	{
	function jomres_gateway_handler()
		{
		jr_import('jrportal_paypal_settings');
		$paypal_settings = new jrportal_paypal_settings();
		$paypal_settings->get_paypal_settings();
		$this->paypal_settings=$paypal_settings->paypalConfigOptions;
		}

	function callback($internal_call = false,$args = array() )
		{
		$gateway_log="";
		gateway_log('Processing callback');
		// Read the post from PayPal system and add 'cmd'
		if (!$internal_call)
			$callback_confirmed = $this-> validate_ipn();
		else
			$callback_confirmed = true;
			
		if (!$internal_call)
			{
			$pp_sent_invoice_id			=(int)		jomresGetParam( $_POST, 'invoice', 0 );
			$pp_sent_receiver_email		=(string)	jomresGetParam( $_POST, 'receiver_email', "" );
			$pp_sent_txn_id				=(string)	jomresGetParam( $_POST, 'txn_id', "" );
			$pp_sent_mc_gross			=(float)	jomresGetParam( $_POST, 'mc_gross', 0.00 );
			$pp_sent_mc_fee				=(float)	jomresGetParam( $_POST, 'mc_fee', 0.00 );
			$pp_sent_mc_currency		=(string)	jomresGetParam( $_POST, 'mc_currency', "" );
			$pp_sent_payment_status		=(string)	jomresGetParam( $_POST, 'payment_status', "" );
			$pp_sent_subscr_id			=(string)	jomresGetParam( $_POST, 'subscr_id', "" );
			$pp_sent_subscr_effective	=(string)	jomresGetParam( $_POST, 'subscr_effective', "" );
			$pp_sent_retry_at			=(string)	jomresGetParam( $_POST, 'retry_at', "" );
			$pp_sent_pending_reason		=(string)	jomresGetParam( $_POST, 'pending_reason', "" );
			$pp_sent_reason_code		=(string)	jomresGetParam( $_POST, 'reason_code', "" );
			$pp_sent_txn_type			=(string)	jomresGetParam( $_POST, 'txn_type', "" );
			$pp_sent_custom_subscription_id	=(int)jomresGetParam( $_REQUEST, 'subscription_id', 0 );
			}
		else
			{
			$pp_sent_invoice_id			=(int)		$args['pp_sent_invoice_id'];
			$pp_sent_receiver_email		=(string)	$args['pp_sent_receiver_email'];
			$pp_sent_txn_id				=(string)	$args['pp_sent_txn_id'];
			$pp_sent_mc_gross			=(float)	$args['pp_sent_mc_gross'];
			$pp_sent_mc_fee				=(float)	$args['pp_sent_mc_fee'];
			$pp_sent_mc_currency		=(string)	$args['pp_sent_mc_currency'];
			$pp_sent_payment_status		=(string)	$args['pp_sent_payment_status'];
			$pp_sent_subscr_id			=(string)	$args['pp_sent_subscr_id'];
			$pp_sent_subscr_effective	=(string)	$args['pp_sent_subscr_effective'];
			$pp_sent_retry_at			=(string)	$args['pp_sent_retry_at'];
			$pp_sent_pending_reason		=(string)	$args['pp_sent_pending_reason'];
			$pp_sent_reason_code		=(string)	$args['pp_sent_reason_code'];
			$pp_sent_txn_type			=(string)	$args['pp_sent_txn_type'];
			$pp_sent_custom_subscription_id	=$args['pp_sent_custom_subscription_id'];
			}

		if ($callback_confirmed)
			{
			$gateway_log.='Callback verified - invoice '.$pp_sent_invoice_id.'<br/>';
			


			if ($pp_sent_invoice_id > 0)
				{
				// Make sure duplicate transactions are ignored
				$query = 'SELECT transaction_id FROM #__jomresportal_invoices_transactions WHERE payment_ref = "'.$pp_sent_txn_id.'" AND payment_result = "Payment: Completed"';
				$transaction = doSelectSql($query);
				if (count($transaction)==0)
					{
					jr_import('jrportal_invoice');
					$invoice=new jrportal_invoice();
					$invoice->id=$pp_sent_invoice_id;
					if ($invoice->getInvoice())
						{
						if ( trim($pp_sent_receiver_email) != trim($this->paypal_settings['email']) )
							{
							$gateway_log.='Receiver e-mail does not match e-mail in settings : pp_sent_receiver_email '.$pp_sent_receiver_email.' - this->paypal_settings '.$this->paypal_settings['email'].'<br/>';
							}
						else
							{
							jr_import('invoicehandler');
							$invoice_handler = new invoicehandler();
							$invoice_handler->id=$pp_sent_invoice_id;
							$invoice_handler->getInvoice();
							switch ($pp_sent_payment_status)
								{
								case 'Completed':
									$invoice_handler->mark_invoice_paid();
									$gateway_log.='Status: Completed<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Completed', $pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									// Did they pay the right amount?
									if ($invoice->init_total == $pp_sent_mc_gross || $invoice->recur_total == $pp_sent_mc_gross)
										{
										$pp_sent_invoice_id=$pp_sent_custom_subscription_id;
										$gateway_log.='Paid<br/>';
										$invoice_handler->mark_invoice_paid();
										}
									else // No
										{
										$gateway_log.='Incorrect amount paid<br/>';
										}
									break;
								case 'Denied':
									$gateway_log.='Status: Denied<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Denied', $pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									break;
								case 'Failed':
									$gateway_log.='Status: Failed<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Failed', $pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									break;
								case 'Pending':
									// Convert PayPal 'pending_reason' to English
									switch ($pp_sent_pending_reason)
										{
										case 'address':
											$pending_reason = 'Customer address is not confirmed. The payment must be manually accepted.';
											break;
										case 'echeck':
											$pending_reason = 'Payment was made using a eCheck which has not yet cleared.';
											break;
										case 'intl':
											$pending_reason = 'The payment must be manually accepted.';
											break;
										case 'multi_currency':
											$pending_reason = 'Payment is in foreign currency. The payment must be manually accepted.';
											break;
										case 'unilateral':
											$pending_reason = 'Payment was made to an unconfirmed e-mail address.';
											break;
										case 'upgrade':
											$pending_reason = 'The Merchant PayPal account cannot accept this payment on the current account type.';
											break;
										case 'other':
											$pending_reason = 'Unknown reason. Contact PayPal Customer Services.';
											break;
										default:
											$pending_reason = 'Unknown reason. Contact PayPal Customer Services.';
											break;
										}
									$invoice_handler->mark_invoice_pending();
									$gateway_log.='Status: Pending ('.$pending_reason.')<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Pending ('.$pending_reason.')',$pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									break;
								case 'Refunded':
									$invoice_handler->mark_invoice_cancelled();
									$gateway_log.='Status: Refunded<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Refunded',$pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									break;
								case 'Reversed':
									// Convert PayPal 'reason_code' to English
									switch ($pp_sent_reason_code)
										{
										case 'buyer_complaint':
											$reversal_reason = 'The customer has complained.';
											break;
										case 'chargeback':
											$reversal_reason = 'The customer has issued a chargeback.';
											break;
										case 'guarantee':
											$reversal_reason = 'The customer has triggered a money back guarantee.';
											break;
										case 'refund':
											$reversal_reason = 'The customer was refunded.';
											break;
										case 'refund':
											$reversal_reason = 'Unknown reason. Contact PayPal Customer Services.';
											break;
										default:
											$reversal_reason = 'Unknown reason. Contact PayPal Customer Services.';
											break;
										}
									$invoice_handler->mark_invoice_cancelled();
									$gateway_log.='Status: Refunded<br/>';
									$this->log_transaction($pp_sent_invoice_id, 'Payment: Refunded ('.$pending_reason.')', $pp_sent_mc_currency, $pp_sent_mc_gross, $pp_sent_mc_fee, $pp_sent_txn_id, '');
									break;
								default:
									$gateway_log.=('pp_sent_payment_status "'.$pp_sent_payment_status.'" not recognised.');
									break;
								}
							// Subscription Status
							jr_import('jrportal_subscriptions');
							$subscription = new jrportal_subscriptions();
							$subscription->id=$pp_sent_custom_subscription_id;
							
							if ($subscription->getSubscription())
								{
								$gateway_log.=" Found subscription, type set to ".$pp_sent_txn_type. "<br>";
								switch ($pp_sent_txn_type)
									{
									case 'subscr_signup':
										$gateway_log.='Subscription: Created<br/>';
										// Modify the status of the subscription to 1 (created/active)
										$subscription->status=1;
										$subscription->commitUpdateSubscription();
										$invoice_handler->mark_invoice_paid();
										$this->log_transaction($pp_sent_invoice_id, 'Subscription: Created', '', 0.00, 0.00, $pp_sent_subscr_id);
										$gateway_log.="Subscription: Created, setting status to ".$subscription->status. "<br>";
										break;
									case 'subscr_cancel':
										$gateway_log.='Subscription: Cancelled<br/>';
										// Modify the status of the subscription to 1 (created/active)
										$subscription->status=2;
										$subscription->commitUpdateSubscription();
										$invoice_handler->mark_invoice_cancelled();
										$this->log_transaction($pp_sent_invoice_id, 'Subscription: Cancelled', '', 0.00, 0.00, $pp_sent_subscr_id);
										// If we're in sandbox mode we will not wait for the end of term message from paypal. Instead, we'll cancle the subscriptions right now.
										if ($this->paypal_settings['usesandbox']=="1")
											{
											$subscription->status=3;
											$subscription->commitUpdateSubscription();
											$allowedProperties = subscribers_getAvailablePropertySlots($subscription->cms_user_id);
											$existingPublishedProperties = subscribers_getManagersPublishedProperties($subscription->cms_user_id);
											$difference=count($existingPublishedProperties) - $allowedProperties;
											// Let's unpublish a few properties
											if ($allowedProperties <= count($existingPublishedProperties) && $difference > 0 )
												{
												gateway_log("Unpublishing ".$difference." properties due to unsubscribe from ".(int)$subscription->cms_user_id);
												subscribers_unpublishNproperties($difference,$subscription->cms_user_id);
												}
											}
										$gateway_log.="Subscription: Cancelled, setting status to ".$subscription->status. "<br>";

										break;
									case 'subscr_failed':
										$gateway_log.='Subscription: Failed<br/>';
										$this->log_transaction($pp_sent_invoice_id, 'Subscription: Failed', '', 0.00, 0.00, $pp_sent_subscr_id, 'Retry at: '.$pp_sent_retry_at);
										break;
										$gateway_log.="Subscription: Failed, setting status to ".$subscription->status. "<br>";

									case 'subscr_eot':
										$subscription->status=3;
										$subscription->commitUpdateSubscription();
										$allowedProperties = subscribers_getAvailablePropertySlots($subscription->cms_user_id);
										$existingPublishedProperties = subscribers_getManagersPublishedProperties($subscription->cms_user_id);
										$difference=count($existingPublishedProperties) - $allowedProperties;
										// Let's unpublish a few properties
										if ($allowedProperties <= count($existingPublishedProperties) && $difference > 0 )
											{
											gateway_log("Unpublishing ".$difference." properties due to unsubscribe from ".(int)$subscription->cms_user_id);
											subscribers_unpublishNproperties($difference,$subscription->cms_user_id);
											}
										$gateway_log.='Subscription: Ended<br/>';
										$this->log_transaction($pp_sent_invoice_id, 'Subscription: Ended', '', 0.00, 0.00, $pp_sent_subscr_id);
										$gateway_log.="Subscription: Ended, setting status to ".$subscription->status. "<br>";

										break;
									case 'subscr_modify':
										$gateway_log.='Subscription: Changed<br/>';
										$this->log_transaction($pp_sent_invoice_id, 'Subscription: Changed', '', 0.00, 0.00, $pp_sent_subscr_id, 'Effective: '.$pp_sent_subscr_effective);
										$gateway_log.="Subscription: Changed, setting status to ".$subscription->status. "<br>";

										break;
									default :
										$gateway_log.="Subscription: pp_sent_txn_type not recognised ".$pp_sent_txn_type. "<br>";

										break;
									}
								$gateway_log.='Finished<br/>';
								}
							else
								{
								$gateway_log.='Subscription ID not found';
								}
							}
						}
					else
						{
						$gateway_log.='Invoice ID not found';
						}
					}
				else
					{
					$gateway_log.='Duplicate transaction';
					}
				}
			else
				{
				$gateway_log.='Subscription ID not sent';
				}
			}
		else 
			$gateway_log.='Callback NOT verified - invoice '.$pp_sent_invoice_id.'<br/>';
		//header('HTTP/1.0 200 OK', false, 200); // Needed otherwise PayPal may give an error
		gateway_log($gateway_log);
		return true;
		}

		
	function validate_ipn()
		{
		// parse the paypal URL
		$host	=	$this->paypal_settings['callback_url'];
		$path		=	'';

		//gateway_log("Attempting to validate IPN ");
		// generate the post string from the _POST vars as well as load the
		// _POST vars into an arry so we can play with them from the calling
		// script.
		$post_string 	= 	'';
		foreach ($_POST as $field=>$value)
			{
			$this->ipn_data["$field"] 	= 	$value;
			$post_string .= $field.'='.urlencode(stripslashes($value)).'&';
			}
		$post_string	.=	"cmd=_notify-validate"; // append ipn command
		
		// open the connection to paypal
		$fp = fsockopen($this->paypal_settings['callback_url'],"80",$err_num,$err_str,30);
		if(!$fp)
			{
			if (function_exists('curl_init'))
				{
				gateway_log("Posting data back to paypal using curl");
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_URL,$host);
				curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
				curl_setopt($ch,CURLOPT_POST,count($this->ipn_data));
				curl_setopt($ch,CURLOPT_POSTFIELDS,$post_string);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  // Without this the response is true, whereas we want the actual contents of the response
				$this->ipn_response = trim(curl_exec($ch));
				curl_close($ch);
				gateway_log("Received response ".$this->ipn_response );
				}
			else
				{
				// could not open the connection.  If loggin gis on, the error message
				// will be in the log.
				gateway_log("Fsockopen error ");
				return false;
				}
			}
		else
			{
			// Post the data back to paypal
			gateway_log("Posting data back to paypal ");
			fputs($fp, "POST $path HTTP/1.1\r\n");
			fputs($fp, "Host: $host\r\n");
			fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
			fputs($fp, "Content-length: ".strlen($post_string)."\r\n");
			fputs($fp, "Connection: close\r\n\r\n");
			fputs($fp, $post_string . "\r\n\r\n");
			// loop through the response from the server and append to variable
			$this->ipn_response = "";
			while(!feof($fp))
				{
				$this->ipn_response .= fgets($fp, 1024);
				}
			fclose($fp); // close connection
			}

		if (eregi("VERIFIED",$this->ipn_response))
			{
			// Valid IPN transaction.
			gateway_log("IPN Validation successful. ");
			return true;
			}
		else
			{
			// Invalid IPN transaction.  Check the log for details.
			gateway_log('IPN Validation Failed.');
			return false;
			}
		}
		
	function log_transaction($invoice_id, $result, $currency, $amount, $fees, $ref, $notes = '')
		{
		gateway_log('Logging transaction');
		$query='INSERT INTO #__jomresportal_invoices_transactions SET
			invoice_id = "'.(int)$invoice_id.'",
			time_added = "'.date( 'Y-m-d H:i:s' ).'",
			gateway_id = "paypal",
			payment_result = "'.(string)$result.'",
			payment_currency = "'.(string)$currency.'",
			payment_amount = "'.number_format($amount, 2, '.', '').'",
			payment_fees = "'.number_format($fees, 2, '.', '').'",
			payment_ref = "'.(string)$ref.'",
			notes = "'.(string)$notes.'"';
		doInsertSql($query,"");
		gateway_log('Transaction logged '.$query);
		}
		
	}

?>