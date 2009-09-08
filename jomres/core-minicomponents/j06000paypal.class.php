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

/**
#
 * Transfers payment details to paypal
 #
* @package Jomres
#
 */
class j06000paypal {
	/**
	#
	 * Constructor: Collects booking and configuration details then passes them to paypal
	#
	 */
	function j06000paypal($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$jomresConfig_sitename = get_showtime('sitename');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$property_uid=$tmpBookingHandler->getBookingPropertyId();
		gateway_log(serialize($bookingdata));
		$bookingdata = gettempBookingdata();
		$plugin="paypal";
		$settingArray=array();

		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$bookingdata['property_uid']."' AND plugin = '".$plugin."' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}
		if ($jrConfig['useGlobalCurrency'] =="1")
			{
			$settingArray['currencycode']=$jrConfig['globalCurrencyCode'];
			}
		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();

		if ($paypal_settings->paypalConfigOptions['override'] == "1")
			{
			$settingArray['usesandbox']=$paypal_settings->paypalConfigOptions['usesandbox'];
			$settingArray['currencycode']=$paypal_settings->paypalConfigOptions['currencycode'];
			$settingArray['paypalemail']=$paypal_settings->paypalConfigOptions['email'];
			$settingArray['pendingok'] = "0";
			$settingArray['receiveIPNemail'] = "1";
			}

		$this->ipn_log_file=JOMRESCONFIG_ABSOLUTE_PATH.'/media/ipn_log_file.txt';
		if ($settingArray['usesandbox']=="1")
			{
			$this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';	// testing paypal url
			}
		else
			{
			$this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
			}

		$this_script = JOMRES_SITEPAGE_URL.'&task=completebk&Itemid='.$Itemid.'&plugin='.$plugin.'&jsid='.get_showtime('jomressession');

		$bookingDeets=gettempBookingdata();

		$deposit_required=$bookingDeets['deposit_required'];

		$transactionName='Paypal Transaction from '.$jomresConfig_sitename;
		if ($settingArray['usesandbox']=="1")
			$transactionName.=' Test payment';

		$this->add_field('rm','2');			  // Return method = POST
		$this->add_field('cmd','_xclick');
		$this->add_field('business', $settingArray['paypalemail']);
		$this->add_field('return', $this_script.'&action=success');
		$this->add_field('cancel_return', $this_script.'&action=cancel');
		$this->add_field('notify_url', $this_script.'&action=ipn');
		$this->add_field('item_name', $transactionName);
		$this->add_field('payer_id', $guests_uid);
		$this->add_field('custom', get_showtime('jomressession'));
		$this->add_field('currency_code', $settingArray['currencycode']);
		$this->add_field('amount', number_format($deposit_required,2, '.', ''));
		$this->submit_paypal_post();

		$this->log_ipn_results();
		}


	#
	/**
	#
	 * Logs results of the ipn activity
	#
	 */
	function log_ipn_results()
		{
		// Success or failure being logged?
		$text = 'MSG: Posting to paypal: '.$this->paypal_url."\n";
		// Log the POST variables
		foreach ($this->fields as $key=>$value)
			{
			$text .= "$key=$value,\n";
			}
		// Write to log
		gateway_log($text);
		}

	#
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

	#
	/**
	#
	 * Submits the booking information to paypal
	#
	 */
	function submit_paypal_post()
		{
		?>
		<script>
		toload[1]=	"document.forms['paypal_form'].submit()";
		</script>
		<?php
		echo "<center><h2>Please wait, your order is being processed and you";
		echo " will be redirected to the paypal website.</h2></center>\n";
		echo "<form method=\"post\" name=\"paypal_form\" ";
		echo "action=\"".$this->paypal_url."\">\n";
		foreach ($this->fields as $name => $value) {
			echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
		}
		echo "<center><br/><br/>If you are not automatically redirected to ";
		echo "paypal within 5 seconds...<br/><br/>\n";
		echo "<input type=\"submit\" value=\"Click Here\"></center>\n";
		echo "</form>\n";
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