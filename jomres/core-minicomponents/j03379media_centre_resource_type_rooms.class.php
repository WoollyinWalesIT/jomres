<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j03379media_centre_resource_type_rooms
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$defaultProperty = getDefaultProperty();
		$mrConfig = getPropertySpecificSettings( $defaultProperty );
		$this->ret_vals = array();
		
		if ($mrConfig[ 'singleRoomProperty' ] != "1" && $mrConfig['is_real_estate_listing'] != "1" )
			{
			$this->ret_vals = array ( "resource_type" => "rooms" , "resource_id_required" => true , "name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', false ) );
			
			
			if ( !AJAXCALL && !defined("MEDIACENTRE_ROOMJS") )
				{
				define ("MEDIACENTRE_ROOMJS",1);
				echo '
				<script>
				jomresJquery(function () {
					jomresJquery("#resource_id_dropdown").change(function () {
						get_existing_images(); 
						});
					});
				</script>
				';
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}

?>