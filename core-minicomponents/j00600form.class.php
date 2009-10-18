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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Outgoing interrupt for credit card details
 #
* @package Jomres
#
 */
class j00600form {
	/**
	#
	 * Constructor: Constructs and displays the data for collecting credit card details
	#
	 */
	function j00600form($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$plugin="form";
		$bookingdata=$componentArgs['bookingdata'];
		//$bookingdata=$componentArgs['guestdata'];
		$output=array();

		//$specialReqs=jomresGetParam( $_POST, 'specialReqs', "" );
		//$output['HIDDEN']='<input type="hidden" name="specialReqs" value="'.$specialReqs.'">';
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$bookingdata['property_uid']."' AND plugin = '$plugin' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set)
			{
			$settingArray[$set->setting]=$set->value;
			}

		$output['GATEWAY']=$plugin;
		$output['JR_GATEWAY_INTERRUPT_INFO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_INFO'.$plugin,"Please enter your creditcard details");
		$output['COM_MR_DISPGUEST_CCARDNO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNO'.$plugin,"Card number");
		$output['COM_MR_DISPGUEST_CCARDISS']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDISS'.$plugin,"Card issued");
		$output['COM_MR_DISPGUEST_CCARDEXPIRE']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDEXPIRE'.$plugin,"Card expires");
		$output['COM_MR_DISPGUEST_CCARISSNO']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARISSNO'.$plugin,"Issue number");
		$output['COM_MR_DISPGUEST_CCARDNAME']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNAME'.$plugin,"Name on card");
		$output['COM_MR_DISPGUEST_CCV']=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_'.$plugin,"Verification code (on back of card)");

		$iss_mon = jomresHTML::integerSelectList( 01, 12, 1, 'iss_mon', 'size="1" class="inputbox"', 0, "%02d" );
		$iss_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'iss_year', 'size="1" class="inputbox"', 0, "%02d" );
		$expiry_mon = jomresHTML::integerSelectList( 01, 12, 1, 'expiry_mon', 'size="1" class="inputbox"', 0, "%02d" );
		$expiry_year = jomresHTML::integerSelectList( 2005, 2020, 1, 'expiry_year', 'size="1" class="inputbox"', 0, "%02d" );
		$issueno = jomresHTML::integerSelectList( 01, 100, 1, 'issueno', 'size="1" class="inputbox"', 0, "%02d" );

		$output['CCARD_ISSUED']=$iss_mon.$iss_year;
		$output['CCARD_EXPIRY']=$expiry_mon.$expiry_year;
		$output['CCARD_ISS_NO']=$issueno;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( get_showtime('ePointFilepath') );
		$tmpl->readTemplatesFromInput( 'j00600'.$plugin.'.html' );
		$tmpl->addRows( 'interrupt_outgoing', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();
		$plugin="form";
		
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_INFO'.$plugin,"Please enter your creditcard details");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNO'.$plugin,"Card number");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDISS'.$plugin,"Card issued");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDEXPIRE'.$plugin,"Card expires");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARISSNO'.$plugin,"Issue number");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_CCARDNAME'.$plugin,"Name on card");
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_FORM_'.$plugin,"Verification code (on back of card)");

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
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