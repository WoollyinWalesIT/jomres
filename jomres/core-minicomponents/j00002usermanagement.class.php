<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Manages user access rights
 #
* @package Jomres
#
 */
class j00002usermanagement {

	/**
	#
	 * Manages user access rights
	#
	 */
	function j00002usermanagement($componentArgs=null)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		//jr_import('jr_user');
		set_showtime("jr_user_ready",false);
		$thisJRUser=jomres_getSingleton('jr_user');
		//$thisJRUser= new jr_user();
		if ($thisJRUser->userIsManager==TRUE)
			$thisJRUser->check_currentproperty();
		$thisProperty = trim( jomresGetParam( $_REQUEST, 'thisProperty', 0 ) );
		if (in_array($thisProperty,$thisJRUser->authorisedProperties) && $thisProperty != $thisJRUser->currentproperty)
			{
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForUser($thisJRUser->userid);
			if ($thisJRUser->userIsManager==TRUE && $thisProperty>0)
				{
				$thisJRUser->set_currentproperty($thisProperty);
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL) );
				}
			}
		if ($thisJRUser->currentproperty == 0 && $thisJRUser->userIsManager)
			$thisJRUser->setToAnyAuthorisedProperty();
		$this->userObject=$thisJRUser;
		set_showtime("jr_user_ready",true);
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
		return $this->userObject;
		}
	}


?>