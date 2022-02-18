<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j11020towns
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
	 
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}
		
		$dropdown = '';

		//big results list on big sites...we need a better way, because grouping by property town won`t work if mysql mode is set to ONLY_FULL_GROUP_BY
		$query = "SELECT `propertys_uid`, `property_town` FROM #__jomres_propertys WHERE `property_town` != ''";
		$townsList = doSelectSql ($query);

		if (!empty($townsList))
			{
			foreach ($townsList as $t) {
				$towns[$t->propertys_uid] = $t->property_town;
			}
			
			$towns = array_unique($towns);
			
			$resource_options = array();
			foreach ( $towns as $k => $v )
				{
				set_showtime('property_uid', $k);
				$resource_options[ ] = jomresHTML::makeOption( jomres_cmsspecific_stringURLSafe($v), jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN', htmlspecialchars( trim( stripslashes( $v ) ), ENT_QUOTES ) ) );
				}
			$use_bootstrap_radios = false;
			$dropdown = jomresHTML::selectList( $resource_options, 'resource_id', ' autocomplete="off" class="btn btn-success btn-lg" size="1" ', 'value', 'text', '' , $use_bootstrap_radios );
			}
		$this->ret_vals = $dropdown;
		}


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
