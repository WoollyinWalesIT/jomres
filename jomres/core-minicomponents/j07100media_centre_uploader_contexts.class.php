<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j07100media_centre_uploader_contexts
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
		
		// This script will set the "context" for the media centre uploader
		// For example, frontend image uploading for properties context means that we decide if resource ids for the resource will be part of the pattern, the resource type gathering is done on trigger 3379, resource id gathering is done by 3381 and post processing is done by 3382 and that uploading allows files of type XXXX. We will also set the root of uploaded images, e.g. JOMRES_IMAGELOCATION_ABSPATH . $property_id . JRDS
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}
		
		// Here we will give other plugins the opportunity to register their own upload contexts
		$MiniComponents->triggerEvent( '07110' );
		$contexts = $MiniComponents->miniComponentData['07110'];
		
		$plugin_upload_contexts = array();
		foreach ($contexts as $context)
			{
			foreach ($context as $key=>$val)
				{
				$plugin_upload_contexts[$key]=$val;
				}
			}
		$upload_context = jomresGetParam( $_REQUEST, 'upload_context', 'properties' );
		
		if ( !isset( $plugin_upload_contexts[ $upload_context ] ) )
			{
			throw new Exception("Something is wrong, plugin_upload_contexts[ upload_context ] isn't set.");
			}
		else
			{
			set_showtime ( "upload_context" , $plugin_upload_contexts [ $upload_context ] );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>