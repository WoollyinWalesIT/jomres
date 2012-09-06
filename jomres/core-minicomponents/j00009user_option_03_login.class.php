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
class j00009user_option_03_login {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_03_login($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		
		$login_task=jomres_cmsspecific_getlogin_task();
		
		if (!$thisJRUser->userIsRegistered)
			$this->cpanelButton=jomres_mainmenu_option(get_showtime('live_site').'/'.$login_task, '', jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login",false,false),null,jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details" ,false,false) );
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		if (isset($this->cpanelButton))
			return $this->cpanelButton;
		else
			return null;
		}
	}
?>