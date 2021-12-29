<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Loads the thisJRUser object, which is used throughout the system to make decisions based on who the current user is and their status within the system. 
	 * 
	 */

class j00002usermanagement
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs = null)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		//jr_user is not ready yet
		set_showtime('jr_user_ready', false);

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		if ($thisJRUser->userIsManager && !jomres_cmsspecific_areweinadminarea()) {
			$thisJRUser->check_currentproperty();
		}

		$thisProperty = intval(jomresGetParam($_REQUEST, 'thisProperty', 0));

		if ($thisProperty > 0 && $thisJRUser->userIsManager && in_array($thisProperty, $thisJRUser->authorisedProperties) && $thisProperty != $thisJRUser->currentproperty) {
			$thisJRUser->set_currentproperty($thisProperty);
		}

		if ($thisJRUser->currentproperty == 0 && $thisJRUser->userIsManager) {
			$thisJRUser->setToAnyAuthorisedProperty();
		}

		//TODO: may not be needed
		$this->userObject = $thisJRUser;

		//jr_user is now ready
		set_showtime('jr_user_ready', true);

		//partners TODO: move to jr_user class as new access level
		if ($thisJRUser->id > 0 && !jomres_cmsspecific_areweinadminarea()) {
			jr_import('jomres_partners');
			$partners = new jomres_partners();
			$thisJRUser->is_partner = $partners->is_this_cms_user_a_partner($thisJRUser->id);
		}
	}


	public function getRetVals()
	{
		return $this->userObject;
	}
}
