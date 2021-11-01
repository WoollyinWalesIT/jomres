<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
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
	 * 
	 */

class j06002save_occupancy_level
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


		$property_uid = getDefaultProperty();

		$room_type_id				= (int) $_REQUEST['id'];
		$max_adults					= (int) $_REQUEST['max_adults'];
		$max_children				= (int) $_REQUEST['max_children'];
		//$max_occupancy				= (int) $_REQUEST['max_occupancy'];

		jr_import('jomres_occupancy_levels');
		$jomres_occupancy_levels = new jomres_occupancy_levels($property_uid);


		$jomres_occupancy_levels->set_occupancy_level ( $room_type_id , $max_adults , $max_children ,  $max_adults + $max_children );
		$jomres_occupancy_levels->save_occupancy_levels( $room_type_id );

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_occupancy_levels'), '');
	}

	public function convert_greaterthans($string)
	{
		$string = str_replace('&#38;gt;', '>', $string);

		return $string;
	}
	

	public function getRetVals()
	{
		return null;
	}
}
