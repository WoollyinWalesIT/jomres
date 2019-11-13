<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001save_guest_review
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$id = (int)jomresGetParam($_REQUEST, 'id', 0);
		$defaultProperty = getDefaultProperty();
		
		jr_import( 'jrportal_guests' );
		$jrportal_guests = new jrportal_guests();
		$jrportal_guests->id = $id;
		$jrportal_guests->property_uid = $defaultProperty;
		
		if ($id == 0 ) {
			return;
		}
		
		$guest = $jrportal_guests->get_guest(); // if false is returned then this guest wasn't a guest of this property
		
		if(!$guest) {
			return;
		}
		
		$guest_review = jomresGetParam($_REQUEST, 'guest_review', '');

 		jr_import( 'jrportal_guest_profile' );
		$jrportal_guest_profile = new jrportal_guest_profile();
		$jrportal_guest_profile->cms_user_id =  $jrportal_guests->cms_user_id;
		$jrportal_guest_profile->get_guest_profile();
		
		$jrportal_guest_profile->save_guest_review( $jrportal_guests->id , $defaultProperty , $guest_review  );
			
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=list_guests"), 'Guest review saved' );
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
