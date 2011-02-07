<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Handles calls from paypal to this server
 #
* @package Jomres
#
 */
class j00610paypal {
	/**
	#
	 * Constructor: Receives paypement data from paypal, or the lack thereof
	#
	 */
	function j00610paypal()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$property_uid=$tmpBookingHandler->getBookingPropertyId();
		$plugin='paypal';
		// Email stuff
		$errorMessage="";
		$subject="";
		$settingArray=array();
		$this->last_error = "";

		$action				= jomresGetParam( $_REQUEST, 'action', '' );
		$amountPaid			= jomresGetParam( $_REQUEST, 'mc_gross', 0.00 );
		$payment_status		= jomresGetParam( $_REQUEST, 'payment_status', '' );
		$business			= jomresGetParam( $_REQUEST, 'receiver_email', '' );
		$mc_currency		= jomresGetParam( $_REQUEST, 'mc_currency', '' );

		// Let's get the settings for this property
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$property_uid."' AND plugin = '".$plugin."' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}
		$this->messagelog 	= array();
		
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		
		if ($paypal_settings->paypalConfigOptions['override'] == "1")
			{
			$this->messagelog[]="<b>Overriding old paypal settings</b>";
			$settingArray['usesandbox']=$paypal_settings->paypalConfigOptions['usesandbox'];
			$settingArray['currencycode']=$paypal_settings->paypalConfigOptions['currencycode'];
			$settingArray['paypalemail']=$paypal_settings->paypalConfigOptions['email'];
			$settingArray['pendingok'] = "0";
			$settingArray['receiveIPNemail'] = "1";
			}
		else
			$this->messagelog[]="<b>Paypal settings not overridden</b>";
			
		if ($settingArray['usesandbox']=="1")
			$this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';	// testing paypal url
		else
			$this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';

		$this->messagelog 	= array();
		$this->messagelog[] = " -- Starting script. Action: ".$action . " -- ";

		if (count($settingArray)>0)
			{
			switch ($action)
				{
				case 'ipn':
					$this->messagelog[]="<b>Paypal IPN request received</b>";
					if ($this->validate_ipn())
						{
						//$this->messagelog[]="Getting temp booking data ";
						$bookingdata = gettempBookingdata();
						$depositrequired=number_format((float)$bookingdata['deposit_required'], 2, '.', ''); // The booking system may have quite a few decimals, let's get rid of them
						if ($depositrequired == 0.00)
							$this->messagelog[]="<h2>The deposit pulled from the booking data is 0.00.</h2>";

						$this->messagelog[]="Paypal minicomponent - inserting booking.";

						
						if ( ($_POST['payment_status']=="Completed") || ($_POST['payment_status'] == "Pending" && $settingArray['pendingok'] == "1") )
							$paymentSuccessful=true;
						if (!$paymentSuccessful)
							{
							$this->messagelog[]="Paypal payment could NOT be confirmed, recorded as provisional booking";
							$subject = 'Paypal payment could NOT be confirmed, recorded as provisional booking.';
							}
						if ($depositrequired == $amountPaid && strtolower($settingArray['paypalemail']) == strtolower($business) && strtoupper($settingArray['currencycode']) == $mc_currency)
							{
							$tmpBookingHandler->updateBookingField('depositpaidsuccessfully',true);
							$subject = 'Paypal payment completed successfully.';
							$this->messagelog[]="Paypal minicomponent - inserting booking.";
							$result=insertInternetBooking(get_showtime('jomressession'),$paymentSuccessful,$confirmationPageRequired=false);
							if (!$result)
								{
								$this->messagelog[]="<b>Paypal payment completed successfully but booking insert failed</b>";
								$subject = 'Paypal payment completed successfully but booking insert failed.';
								}
							else
								{
								$this->messagelog[]="<b>Paypal booking inserted successfully</b>";
								$subject = 'Paypal payment completed successfully.';
								}
							}
						else
							{
							$subject = '<h3>Paypal payment NOT completed successfully.</h3>';
							if ($depositrequired != $amountPaid)
								$errorMessage.="<b>Dep required: ".$depositrequired." Dep paid: $amountPaid</b>\n";
							if ($settingArray['paypalemail'] != $business)
								$errorMessage.="<b>Email expected: ".$settingArray['paypalemail']." Email received: $business</b>\n";
							if ( strtoupper($settingArray['currencycode']) != $mc_currency)
								$errorMessage.="<b>Currency code expected: ".strtoupper($settingArray['currencycode'])." Currency code received: $mc_currency</b>\n";
							$this->messagelog[]=$errorMessage;
							//echo "<h3>".jr_gettext('_JOMRES_COM_A_PAYPAL_CANCELLED'.$plugin,'Booking cancelled, unable to validate data').".</h3>";
							}

						$this->messagelog[] ="------------------------------------";
						$this->messagelog[] ="------------------------------------";
						$this->messagelog[] = " REQUEST ".serialize($_REQUEST) . "  ";
						$this->messagelog[] = " GET ".serialize($_GET) . "  ";
						$this->messagelog[] = " POST ".serialize($_POST) . "  ";
						$this->messagelog[] = " -- Session id: ".session_id() . " ";
						$this->messagelog[] = " -- query: ".$query . " -- ";
						$this->messagelog[] = " -- property_uid: ".$property_uid. " ";
						$this->messagelog[] = " -- tmpBookingHandler: ".serialize($tmpBookingHandler). " ";
						$this->messagelog[] ="Paypal url retrieved from settings: ".$this->paypal_url;
						$this->messagelog[] ="Test mode = : ".$settingArray['usesandbox'];
						$this->messagelog[] ="Settings = : ".serialize($settingArray);
						$this->messagelog[] ="------------------------------------";
						$this->messagelog[] ="------------------------------------";
						}
					else
						{
						$this->messagelog[]="IPN NOT validated";
						$subject = 'Paypal IPN payment could not be confirmed.';
						}

					$this->log_ipn_results($action);
				break;
				case 'success':		// Order was successful...
					$componentArgs=array('property_uid'=>$property_uid);
					$MiniComponents->triggerEvent('03030',$componentArgs); // Booking completed message
					$this->log_ipn_results($action);
				break;
				case 'cancel': // Order was canceled
					$subject = 'Paypal payment cancelled';
					$this->messagelog[]="Paypal payment cancelled";
					echo "<h3>".jr_gettext('_JOMRES_COM_A_PAYPAL_CANCELLED'.$plugin,'Booking cancelled').".</h3>";
					$this->log_ipn_results($action);
				break;
				}
			}
		else
			{
			$subject = 'Paypal settings incomplete';
			}

		if ($action != "success")
			{
			$to = $settingArray['paypalemail'];
			$body =  $errorMessage."\n\n";
			$body .= "Action recorded: ".$action."\n";
			$body .= "from ".$_POST['payer_email']." on ".date('m/d/Y');
			$body .= " at ".date('g:i A')."\n\nDetails:\n";
			$body .=$msg."\n\n\n";
			foreach ($_POST as $key => $value) { $body .= "\n$key: $value"; }
			if ($settingArray['receiveIPNemail'])
				jomresMailer( $_POST['payer_email'], $subject, $to, $subject, $body );
			}
		}

	function touch_template_language()
		{
		$output=array();
		$plugin='paypal';

		$output[]		=jr_gettext('_JOMRES_COM_A_PAYPAL_CANCELLED'.$plugin,'Booking cancelled');
		$output[]		=jr_gettext('_JOMRES_COM_A_PAYPAL_CANCELLED'.$plugin,'Booking cancelled, unable to validate data');

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	#
	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function validate_ipn()
		{
		// parse the paypal URL
		$url_parsed=parse_url($this->paypal_url);
		$host=$url_parsed['host'];
		$path=$url_parsed['path'];

		$this->messagelog[]="Attempting to validate IPN ";
		// generate the post string from the _POST vars as well as load the
		// _POST vars into an arry so we can play with them from the calling
		// script.
		$post_string = '';
		foreach ($_POST as $field=>$value)
			{
			$this->ipn_data["$field"] = $value;
			$post_string .= $field.'='.urlencode(stripslashes($value)).'&';
			}
		$post_string.="cmd=_notify-validate"; // append ipn command

		// open the connection to paypal
		$fp = fsockopen($host,"80",$err_num,$err_str,30);
		if(!$fp)
			{
			// could not open the connection.  If loggin is on, the error message
			// will be in the log.
			$this->messagelog[]="Fsockopen error ";
			$this->last_error = "fsockopen error no. $errnum: $errstr";
			return false;
			}
		else
			{
			// Post the data back to paypal
			$this->messagelog[]="Posting data back to paypal ";
			fputs($fp, "POST $path HTTP/1.1\r\n");
			fputs($fp, "Host: $host\r\n");
			fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
			fputs($fp, "Content-length: ".strlen($post_string)."\r\n");
			fputs($fp, "Connection: close\r\n\r\n");
			fputs($fp, $post_string . "\r\n\r\n");
			// loop through the response from the server and append to variable
			while(!feof($fp))
				{
				$this->ipn_response .= fgets($fp, 1024);
				}
			fclose($fp); // close connection
			}
		if (eregi("VERIFIED",$this->ipn_response))
			{
			// Valid IPN transaction.
			$this->messagelog[]="IPN Validation successful. ";
			return true;
			}
		else
			{
			// Invalid IPN transaction.  Check the log for details.
			$this->last_error = 'IPN Validation Failed.';
			return false;
			}
		}

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function log_ipn_results($action)
		{
		// Timestamp
		$text = "[".date('m/d/Y g:i A')."] - \n";
		if ($action == "ipn")
			{
			// Log the messages
			if (count($this->messagelog)>0)
				{
				foreach ($this->messagelog as $value)
					{
					$text .= "$value,<br/>";
					}
				}
			if (strlen($this->last_error)>0)
				$text .= 'Error message? --'.$this->last_error."<br/>";
			if (count($this->ipn_data)>0)
				{
				$text .= "IPN POST Vars from Paypal:\n";
				foreach ($this->ipn_data as $key=>$value)
					{
					$text .= "$key=$value,<br />";
					}
				// Log the response from the paypal server
				$text .= "\nIPN Response from Paypal Server: ".$this->ipn_response;
				}
			}
		$text .= "\n - - - \n ";
		gateway_log($text);
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>