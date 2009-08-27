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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Configuration panel for gallery link input
 #
* @package Jomres
#
 */
class j00501sms_clickatell {
	/**
	#
	 * Constructor: Outputs the gallery link config inputs
	#
	 */
	function j00501sms_clickatell($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $configurationPanel,$thisJRUser;
		
		jr_import('jrportal_sms_clickatell_settings');
		$sms_clickatell_settings = new jrportal_sms_clickatell_settings();
		$sms_clickatell_settings->get_sms_clickatell_settings();
		
		if ($sms_clickatell_settings->sms_clickatellConfigOptions['active'] == "1")
			{
			$mrConfig=getPropertySpecificSettings();
			$configurationPanel->startPanel(_JRPORTAL_SMS_CLICKATELL_TABTITLE);
			$configurationPanel->setleft(_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER);
			$configurationPanel->setmiddle('<input type="text" class="inputbox"  size="50" name="cfg_sms_clickatell_notification_number" value="'.$mrConfig['sms_clickatell_notification_number'].'" />');
			$configurationPanel->setright(_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC);
			$configurationPanel->insertSetting();
			$configurationPanel->endPanel();
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