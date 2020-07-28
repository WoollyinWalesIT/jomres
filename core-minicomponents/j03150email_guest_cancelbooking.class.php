<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
     * Builds the cancellation email that is sent to guests
	 * 
	 */

class j03150email_guest_cancelbooking
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
	 
	public function __construct($componentArgs)
	{

		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$default_template = JOMRES_TEMPLATEPATH_BACKEND.JRDS.'email_guest_cancelbooking.html';

		$this->ret_vals = array('type' => 'email_guest_cancelbooking', 'name' => jr_gettext('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', '_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', false), 'desc' => jr_gettext('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', '_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', false), 'default_template' => $default_template);
	}


    /**
     * @return array
     */
    public function getRetVals()
	{
		return $this->ret_vals;
	}
}
