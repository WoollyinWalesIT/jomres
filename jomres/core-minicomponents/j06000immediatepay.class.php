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

class j06000immediatepay
	{
	function j06000immediatepay()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $ePointFilepath,$jomresConfig_live_site,$thisJRUser,$Itemid;
		
		$invoice_id		= (int)jomresGetParam( $_GET, 'id', 0 );

		// a quick anti hack check
		$userid= $thisJRUser->id;
		$query="SELECT id FROM #__jomresportal_invoices WHERE `cms_user_id`= ".(int)$thisJRUser->id." AND `id` = ".(int)$invoice_id." ";
		$result=doSelectSql($query);
		if (count($result)<1 || count($result)>1)
			{
			trigger_error ("Unable to view invoice, either invoice id not found, or invoice id tampered with.", E_USER_ERROR);
			}

		jr_import('jrportal_invoice');
		$invoice = new jrportal_invoice();
		$invoice->id=$invoice_id;
		$invoice->getInvoice();

		$paypal_settings =jomres_getSingleton('jrportal_paypal_settings');
		$paypal_settings->get_paypal_settings();
		$this->paypal_settings=$paypal_settings->paypalConfigOptions;

		$ourCallbackURL = JOMRES_SITEPAGE_URL.'&task=ospayment&no_html=1&Itemid='.$Itemid.'&subscription_id='.$subscription->id;
		
		$transactionName='Paypal Invoice from '.$jomresConfig_sitename;
		if ($this->paypal_settings['usesandbox']=="1")
			$transactionName   .=' Test Service';

		$this->add_field('rm','2');			  // Return method = POST
		$this->add_field('cmd','_xclick');
		$this->add_field('business', $this->paypal_settings['email'] );
		$this->add_field('item_name', "Invoice");
		$this->add_field('item_number', $invoice_id);
		$this->add_field('invoice', $invoice_id);
		$this->add_field('custom', $invoice_id);
		//$this->add_field('image_url', "https://www.yoursite.com/logo.gif");
		$this->add_field('no_shipping', "1");
		$this->add_field('amount', number_format($invoice->init_total,2, '.', ''));
		$this->add_field('return', JOMRES_SITEPAGE_URL);
		//$this->add_field('cancel_return', JOMRES_SITEPAGE_URL.'&task=canc_subscribed&Itemid='.$Itemid);
		$this->add_field('notify_url', $ourCallbackURL.'&action=ipn');
		$this->add_field('no_note', "1");
		$this->add_field('currency_code', $this->paypal_settings['currencycode']);

		echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/jomres/javascript/jquery.js"></script>';
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