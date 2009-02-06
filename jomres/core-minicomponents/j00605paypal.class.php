<?php
/**
#
 * Mini-component core file: Sends any required postage data to payment gateway, eg paypal. and redirects the user to the payment gateway's interface.
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
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
class j00605paypal {
	/**
	#
	 * Constructor: Collects booking and configuration details then passes them to paypal
	#
	 */
	function j00605paypal($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$jomressession,$Itemid,$jomresConfig_sitename,$Itemid,$jrConfig,$tmpBookingHandler;
		$property_uid=$tmpBookingHandler->getBookingPropertyId();
		gateway_log(serialize($bookingdata));
		$bookingdata=$componentArgs['bookingdata'];
		$plugin="paypal";
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid LIKE '".(int)$bookingdata['property_uid']."' AND plugin LIKE '".$plugin."' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}
		if ($jrConfig['useGlobalCurrency'] =="1")
			{
			$settingArray['currencycode']=$jrConfig['globalCurrencyCode'];
			}
		if (count($settingsList)>0)
			{
			$this->ipn_log_file=JOMRESCONFIG_ABSOLUTE_PATH.'/media/ipn_log_file.txt';
			if ($settingArray['usesandbox']=="1")
				{
				$this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';	// testing paypal url
				}
			else
				{
				$this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
				}

			$this_script = $jomresConfig_live_site.'/index.php?option=com_jomres&task=completebk&Itemid='.$Itemid.'&plugin='.$plugin.'&jsid='.$jomressession;

			$bookingDeets=gettempBookingdata();
			

			$guestDeets=getbookingguestdata();
			$guestCountry=$guestDeets['country'];
			$paypalLang="EN";

			switch ($guestCountry) 
				{
				case "NL":
					$paypalLang="NL";
					break;
				case "DE":
				case "AT":
					$paypalLang="DE";
					break;
				case "IT":
					$paypalLang="IT";
					break;
				case "FR":
				case "CH":
				case "LU":
				case "BE":
					$paypalLang="FR";
					break;
				case "PL":
					$paypalLang="PL";
					break;
				case "ES":
				case "PT":
				case "MX":
					$paypalLang="ES";
					break;
				case "GB":
				case "US":
				default:
					$paypalLang="EN";
					break;
				}
			
			$deposit_required=$bookingDeets['deposit_required'];

			$transactionName='Paypal Transaction from '.$jomresConfig_sitename;
			if ($settingArray['usesandbox']=="1")
				$transactionName.=' Test payment';

			$this->add_field('lc', $paypalLang);
			$this->add_field('rm','2');			  // Return method = POST
			$this->add_field('cmd','_xclick');
			$this->add_field('business', $settingArray['paypalemail']);
			$this->add_field('return', $this_script.'&action=success');
			$this->add_field('cancel_return', $this_script.'&action=cancel');
			$this->add_field('notify_url', $this_script.'&action=ipn');
			$this->add_field('item_name', $transactionName);
			$this->add_field('payer_id', $guests_uid);
			$this->add_field('custom', $jomressession);
			$this->add_field('currency_code', $settingArray['currencycode']);
			$this->add_field('amount', number_format($deposit_required,2));
			
			$this->submit_paypal_post();

			$this->log_ipn_results();


			}
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