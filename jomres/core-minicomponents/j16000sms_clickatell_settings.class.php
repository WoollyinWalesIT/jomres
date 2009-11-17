<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Delete an optional extra
 #
* @package Jomres
#
 */
class j16000sms_clickatell_settings {
	/**
	#
	 * Constructor:  Delete an optional extra
	#
	 */
	function j16000sms_clickatell_settings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$pageoutput=array();

		jr_import('jrportal_sms_clickatell_settings');
		$sms_clickatell_settings = new jrportal_sms_clickatell_settings();
		$sms_clickatell_settings->get_sms_clickatell_settings();
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
	
		$output['PAGETITLE'] 		=_JRPORTAL_SMS_CLICKATELL_TITLE;
		$output['HUSERNAME']		=_JRPORTAL_SMS_CLICKATELL_USERNAME;
		$output['HPASSWORD']		=_JRPORTAL_SMS_CLICKATELL_PASSWORD;
		$output['HAPI_ID']			=_JRPORTAL_SMS_CLICKATELL_APIID;
		$output['INSTRUCTIONS']		=_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS;
		$output['HACTIVE']			=_JOMCOMP_WISEPRICE_ACTIVE;
		
		
		$output['ACTIVE']	= jomresHTML::selectList( $yesno, 'active','class="inputbox" size="1"', 'value', 'text', $sms_clickatell_settings->sms_clickatellConfigOptions['active']);
		
		$output['USERNAME']	= $sms_clickatell_settings->sms_clickatellConfigOptions['username'];
		$output['PASSWORD']	= $sms_clickatell_settings->sms_clickatellConfigOptions['password'];
		$output['API_ID'] 	= $sms_clickatell_settings->sms_clickatellConfigOptions['api_id'];
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_sms_clickatell_settings');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL_ADMIN),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'sms_clickatell_settings.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}
?>