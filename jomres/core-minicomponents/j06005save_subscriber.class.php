<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005save_subscriber
	{
	function j06005save_subscriber()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsRegistered)
			{
			$MiniComponents->triggerEvent('02280');
			}
		else
			{
			$package_id		= (int)jomresGetParam( $_POST, 'package_id', 0 );

			$firstname		= (string)jomresGetParam( $_POST, 'firstname', '' );
			$surname		= (string)jomresGetParam( $_POST, 'surname', '' );
			$address		= (string)jomresGetParam( $_POST, 'address', '' );
			$country		= (string)jomresGetParam( $_POST, 'country', '' );
			$postcode		= (string)jomresGetParam( $_POST, 'postcode', '' );
			
			if ( strlen($firstname) ==0 || strlen($surname) ==0 ||strlen($address) ==0 ||strlen($country) ==0 || strlen($postcode) ==0 )
				{
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=subscribe&firstname=".$firstname."&surname=".$surname."&address=".$address."&country=".$country."&postcode=".$postcode."&id=".$package_id), "" );
				exit;
				}

			if ( $package_id == 0 )
				{
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message(_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID);
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_subscription_packages"), "" );
				exit;
				}
			$all_packages = subscriptions_packages_getallpackages();
			
			if (!array_key_exists($package_id,$all_packages))
				{
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message(_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID);
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_subscription_packages"), "" );
				exit;
				}
			// Now we need to check and see if there is a freebie subscription package. If so, we then need to see if the subscriber is already subscribed to it.
			$subscribing_to_freebie = false;
			// Now, do we have a trial package?
			$trial_package_exists = subscriptions_check_for_freebie_package($all_packages);
			if ($trial_package_exists && $package_id == $trial_package_exists)
				$subscribing_to_freebie = true;
			
			if (subscribers_thisUserIsASubscriber())
				{
				$users_subscriptions = subscribers_getCurrentSubscriptionsForJosId($thisJRUser->id);
				if (count($users_subscriptions)>0)
					{
					foreach ($users_subscriptions as $sub)
						{
						// Status 2 = cancelled Status 3 = eot
						if ($package_id == (int)$sub['package_id'] && (int)$sub['status'] < 2)
							{
							$jomres_messaging =jomres_getSingleton('jomres_messages');
							$jomres_messaging->set_message(_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE);
							jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_subscription_packages"), "" );
							exit;
							}
						}
					}
				}

			jr_import('jrportal_subscribers');
			$subscriber = new jrportal_subscribers();
			$user=subscribers_getSubscriberDetailsForJosId($thisJRUser->id);
			if ($user)
				{
				$subscriber->id	= $user['id'];
				$subscriber->getSubscriber();
				}
			$subscriber->cms_user_id = $thisJRUser->id;
			$subscriber->firstname = $firstname;
			$subscriber->surname = $surname;
			$subscriber->address = $address;
			$subscriber->country = $country;
			$subscriber->postcode = $postcode;
			if ($subscriber->id > 0)
				$subscriber->commitUpdateSubscriber();
			else
				$subscriber->commitSubscriber();

			jr_import('jrportal_subscriptions_packages');
			$package = new jrportal_subscriptions_packages();
			$package->id = $package_id;
			if ($package->getSubscriptionPackage() )
				{
				jr_import('jrportal_subscriptions');
				$subscription = new jrportal_subscriptions();
				$subscription->cms_user_id	= $thisJRUser->id;
				
				$subscription->cms_user_id	= $thisJRUser->id;
				$subscription->package_id	= $package->id;
				$subscription->name			= jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_NAME'.$package->id,stripslashes($package->name),false,false );
				$subscription->description	= jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_DESC'.$package->id,stripslashes($package->description),false,false );
				$subscription->frequency	= $package->frequency;
				$subscription->trial_period	= $package->trial_period;
				$subscription->trial_amount	= $package->trial_amount;
				$subscription->full_amount	= $package->full_amount;
				$subscription->rooms_limit	= $package->rooms_limit;
				$subscription->property_limit= $package->property_limit;
				$subscription->status		= 0;

				$subscription->commitSubscription();
				
				$invoice_data= array();
				$invoice_data['cms_user_id']=$thisJRUser->id;
				$invoice_data['subscription']=true;
				
				$line_item_data = array (
					'tax_code_id'=>$package->tax_code_id,
					'name'=>$package->name,
					'description'=>$package->description,
					'init_price'=>"0.00",
					'init_qty'=>"0",
					'init_discount'=>"0",
					'recur_price'=>number_format($package->full_amount,2),
					'recur_qty'=>"1",
					'recur_discount'=>"0.00"
					);
				$line_items[]=$line_item_data;
				if ($subscription->trial_amount > 0)
					{
					$line_item_data = array (
						'tax_code_id'=>$package->tax_code_id,
						'name'=>$package->name,
						'description'=>$package->description." ".$package->property_limit." "._JOMCOMP_MYUSER_PUBLISHEDPROPERTIES,
						'init_price'=>number_format($subscription->trial_amount,2),
						'init_qty'=>"1",
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"1",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;
					}
				jr_import('invoicehandler');
				$invoice_handler = new invoicehandler();
				$invoice_handler->create_new_invoice($invoice_data,$line_items);
				$invoice_handler->subscription_id=$subscription->id;
				$invoice_handler->mark_invoice_pending();
				if (!$subscribing_to_freebie)
					$this->sendNewSubscription($subscription,$subscriber,$invoice_handler->id,$invoice_handler->init_total,$invoice_handler->recur_total,$package->tax_code_id);
				else
					{
					// We need a dummy transaction it
					$keeplooking=true;
					$dummy_txn_id = "XXXXXXXX DUMMY ".mt_rand ( 10000000,99999999 );
					while ($keeplooking):
						
						$query = 'SELECT transaction_id FROM #__invoices_transactions WHERE payment_ref = "'.$dummy_txn_id.'" AND payment_result = "Payment: Completed"';
						$transaction = doSelectSql($query);
						if (count($transaction)==0)
							$keeplooking=false;
						$dummy_txn_id="XXXXXXXX DUMMY ".mt_rand ( 10000000,99999999 );
					endwhile;
						
					
					jr_import('jomres_gateway_handler');
					$transaction = new jomres_gateway_handler();
					$internal_call_arguments = array ();
					$internal_call_arguments['pp_sent_invoice_id']=$invoice_handler->id;
					$internal_call_arguments['pp_sent_receiver_email']=$transaction->paypal_settings['email'];
					$internal_call_arguments['pp_sent_txn_id']=$dummy_txn_id;
					$internal_call_arguments['pp_sent_mc_gross']=$subscription->trial_amount;
					$internal_call_arguments['pp_sent_mc_fee']="0.00";
					$internal_call_arguments['pp_sent_mc_currency']=$transaction->paypal_settings['currencycode'];
					$internal_call_arguments['pp_sent_payment_status']="Completed";
					$internal_call_arguments['pp_sent_subscr_id']="XXXX";
					$internal_call_arguments['pp_sent_subscr_effective']=""; // Not used here
					$internal_call_arguments['pp_sent_retry_at']=""; //Not used here 
					$internal_call_arguments['pp_sent_pending_reason']=""; //Not used here
					$internal_call_arguments['pp_sent_reason_code']=""; // Not used here
					$internal_call_arguments['pp_sent_txn_type']="subscr_signup";
					$internal_call_arguments['pp_sent_custom_subscription_id']=$subscription->id;

					$transaction->callback(true,$internal_call_arguments);
					
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=registerProp_step1"), "" );
					exit;
					}
				}
			}
		}
		
	function sendNewSubscription($subscription,$subscriber,$invoice_id,$init_total,$recur_total,$tax_code_id)
		{
		$jomresConfig_sitename=get_showtime('sitename');
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		$this->paypal_settings=$paypal_settings->paypalConfigOptions;
		
		$ourCallbackURL = JOMRES_SITEPAGE_URL.'&task=ospayment&no_html=1&Itemid='.$Itemid.'&subscription_id='.$subscription->id;
		
		$transactionName='Paypal Subscription from '.$jomresConfig_sitename;
		if ($this->paypal_settings['usesandbox']=="1")
			$transactionName   .=' Test Service';
		
		
		$taxrates = taxrates_getalltaxrates();
		$taxrate = $taxrates[$tax_code_id];
		$rate=(float)$taxrate['rate'];
		$this->add_field('tax_rate', $rate);

		$this->add_field('rm','2');			  // Return method = POST
		$this->add_field('cmd','_xclick-subscriptions');
		$this->add_field('business', $this->paypal_settings['email'] );
		$this->add_field('item_name', $subscription->name);
		$this->add_field('item_number', $invoice_id);
		$this->add_field('invoice', $invoice_id);
		$this->add_field('custom', $invoice_id);
		
		
		//$this->add_field('image_url', "https://www.yoursite.com/logo.gif");
		$this->add_field('no_shipping', "1");
		$this->add_field('return', JOMRES_SITEPAGE_URL);
		$this->add_field('cancel_return', JOMRES_SITEPAGE_URL.'&task=canc_subscribed&id='.$subscription->id);
		$this->add_field('notify_url', $ourCallbackURL.'&action=ipn');
		$this->add_field('no_note', "1");
		$this->add_field('payer_id', $subscriber->id);
		$this->add_field('currency_code', $this->paypal_settings['currencycode']);
		$this->add_field('lc', $subscriber->country);
		
		$t1="M";
		$t3="M";
		switch ($subscription->frequency)
			{
			case 'M':
				if ($subscription->trial_period > 0)
					$p1=$subscription->trial_period*1;
				$p3=1;
			break;
			case 'Q':
				if ($subscription->trial_period > 0)
					$p1=$subscription->trial_period;
				$p3=3;
			break;
			case 'B':
				if ($subscription->trial_period > 0)
					$p1=$subscription->trial_period;
				$p3=6;
			break;
			case 'A':
				if ($subscription->trial_period > 0)
					$p1=$subscription->trial_period;
				$p3=12;
			break;
			default:
				return;
			}
		
		if ($subscription->trial_period > 0)
			{
			$this->add_field('a1', $init_total);
			$this->add_field('p1', $p1);
			$this->add_field('t1',$t1);
			}
		$this->add_field('a3', $recur_total);
		$this->add_field('p3', $p3);
		$this->add_field('t3', $t3);
		
		
		$this->add_field('src', "1");
		$this->add_field('first_name', $subscriber->firstname);
		$this->add_field('last_name', $subscriber->surname);
		$this->add_field('address1', $subscriber->address);
		$this->add_field('zip', $subscriber->postcode);
		
		echo '<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jquery-1.4.2.min.js"></script>';
		echo '<script type="text/javascript">jQuery.noConflict();</script>';
		?>

		<script>
		jQuery(document).ready(function() {
			document.forms['paypal_form'].submit();
		});
		</script>
		<?php
		//var_dump($this);exit;
		echo "<center><h2>Please wait, your subscription is being processed and you";
		echo " will be redirected to the PayPal website.</h2></center>\n";
		echo "<form method=\"post\" name=\"paypal_form\" ";
		echo "action=\"".$this->paypal_settings['submit_url']."\">\n";
		$txt="";
		foreach ($this->fields as $name => $value)
			{
			$txt .=$name." ".$value."<br/>";
			echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
			}
		gateway_log($txt);
		echo "<center><br/><br/>If you are not automatically redirected to ";
		echo "paypal within 5 seconds...<br/><br/>\n";
		echo "<input type=\"submit\" value=\"Click Here\"></center>\n";
		echo "</form>\n";
		}
	
	/**
	#
	 * Adds a field and value to the 'fields' variable
	#
	 */
	function add_field($field, $value)
		{
		// adds a key=>value pair to the fields array, which is what will be
		// sent to paypal as POST variables.  If the value is already in the
		// array, it will be overwritten.
		$this->fields["$field"] = $value;
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}