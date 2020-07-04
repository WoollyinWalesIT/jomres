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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j11010towns
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
		
		$this->ret_vals = array ( 
								"resource_type" => "towns" , 
								"resource_id_required" => true , 
								"name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', '_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', false ),
								"upload_root_abs_path" => JOMRES_IMAGELOCATION_ABSPATH,
								"upload_root_rel_path" => JOMRES_IMAGELOCATION_RELPATH,
								"notes" => ''  
								);
		
		$task = get_showtime('task');
		if (
			strpos($task,"media_centre") === false
			)
			return;

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		if ( $thisJRUser->userIsManager )
			{
			if ( !AJAXCALL && !defined("MEDIACENTRE_ROOMJS") && !defined('JOMRES_API_CMS_ROOT') )
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


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
