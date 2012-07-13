<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
class j00009user_option_01_listbookings {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_01_listbookings($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if ($thisJRUser->userIsRegistered)
			{
			$query="SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = ".(int)$thisJRUser->id;
			$guestEntries=doSelectSql($query);
			if (count($guestEntries)>0)
				{
				$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=mulistbookings", '', jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS,false,false),null,jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details" ,false,false) );
				}
			}
		}
	
	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT',"account details");
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_LISTBOOKINGS',_JOMCOMP_MYUSER_LISTBOOKINGS);

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