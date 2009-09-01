<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j06000save_subscriber
	{
	function j06000save_subscriber()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$package_id		= (int)jomresGetParam( $_POST, 'package_id', 0 );
		
		$firstname		= (string)jomresGetParam( $_POST, 'firstname', '' );
		$surname		= (string)jomresGetParam( $_POST, 'surname', '' );
		$address		= (string)jomresGetParam( $_POST, 'address', '' );
		$country		= (string)jomresGetParam( $_POST, 'country', '' );
		$postcode		= (string)jomresGetParam( $_POST, 'postcode', '' );
		
		if ( strlen($firstname) ==0 || strlen($surname) ==0 ||strlen($address) ==0 ||strlen($country) ==0 || strlen($postcode) ==0 )
			{
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=subscribe&firstname=".$firstname."&surname=".$surname."&address=".$address."&country=".$country."&postcode=".$postcode."&id=".$package_id), "" );
			}

		if ( $package_id == 0 )
			{
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_subscription_packages"), "" );
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
			jr_import('jrportal_subscriptions_packages');
			$subscription = new jrportal_subscriptions();
			$subscription->cms_user_id	= $thisJRUser->id;
			
			$subscription->cms_user_id	= $thisJRUser->id;
			$subscription->name			= $package->name;
			$subscription->description	= $package->description;
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
			$this->sendNewSubscription($subscription,$subscriber,$invoice_handler->id,$invoice_handler->init_total,$invoice_handler->recur_total);
			}
		}
		
	function sendNewSubscription($subscription,$subscriber,$invoice_id,$init_total,$recur_total)
		{
		global $jomresConfig_sitename,$Itemid;

		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		$this->paypal_settings=$paypal_settings->paypalConfigOptions;
		
		$ourCallbackURL = JOMRES_SITEPAGE_URL.'&task=ospayment&no_html=1&Itemid='.$Itemid.'&subscription_id='.$subscription->id;
		
		$transactionName='Paypal Subscription from '.$jomresConfig_sitename;
		if ($this->paypal_settings['usesandbox']=="1")
			$transactionName   .=' Test Service';
		
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
		$this->add_field('cancel_return', JOMRES_SITEPAGE_URL.'&task=canc_subscribed');
		$this->add_field('notify_url', $ourCallbackURL.'&action=ipn');
		$this->add_field('no_note', "1");
		$this->add_field('payer_id', $subscriber->id);
		$this->add_field('currency_code', $this->paypal_settings['currencycode']);
		$this->add_field('lc', $subscriber->country);
		
		$t="M";
		switch ($subscription->frequency)
			{
			case 'M':
				if ($subscription->trial_period > 0)
					$p=$subscription->trial_period*1;
				else
					$p=1;
			break;
			case 'Q':
				if ($subscription->trial_period > 0)
					$p=$subscription->trial_period*3;
				else
					$p=1;
			break;
			case 'B':
				if ($subscription->trial_period > 0)
					$p=$subscription->trial_period*6;
				else
					$p=1;
			break;
			case 'A':
				if ($subscription->trial_period > 0)
					$p=$subscription->trial_period*12;
				else
					$p=1;
			break;
			default:
				return;
			}
		
		if ($subscription->trial_period > 0)
			{
			$this->add_field('a1', $init_total);
			$this->add_field('p1', $p);
			$this->add_field('t1',$t);
			}
		$this->add_field('a3', $recur_total);
		$this->add_field('p3', $p);
		$this->add_field('t3', $t);
		
		
		$this->add_field('src', "1");
		$this->add_field('first_name', $subscriber->firstname);
		$this->add_field('last_name', $subscriber->surname);
		$this->add_field('address1', $subscriber->address);
		$this->add_field('zip', $subscriber->postcode);
		
		echo '<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jquery-1.3.2.min.js"></script>';
		echo '<script type="text/javascript">jQuery.noConflict();</script>';
		?>

		<script>
		jQuery(document).ready(function() {
			document.forms['paypal_form'].submit();
		});
		</script>
		<?php
		
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