<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00009user_option_02_addfavourite {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_02_addfavourite($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$property_uid		= (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if ($thisJRUser->userIsRegistered)
			{
			$query="SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int)$property_uid."' AND my_id='".(int)$thisJRUser->id."'";
			$favourite=doSelectSql($query,1);
			if (jomresGetParam( $_REQUEST, 'task', '' )=='viewproperty' && !$favourite )
				{
				$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=muaddtofavourites&no_html=1&amp;property_uid=".$property_uid, '', jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES,false,false),null,jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details" ,false,false) );
				}
			}
		}
	
	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>