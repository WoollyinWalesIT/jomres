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

class j06000media_centre_handler
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

		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if (!$thisJRUser->userIsManager)
			{
			return;
			}
		
		// Let's the appropriate upload context details
		$MiniComponents->triggerEvent( '07100' );
		$upload_context = get_showtime ( "upload_context");

		$this->resource_subdirectories_used = $upload_context [ 'resource_subdirectories_used' ];

		// A security check to ensure that the user's not trying to pass a resource type that we can't handle
		$result = $MiniComponents->triggerEvent( $upload_context [ 'resource_type_gathering_trigger' ] );
		$resource_types = $MiniComponents->miniComponentData[ $upload_context [ 'resource_type_gathering_trigger' ] ];
		
		if (count($resource_types) ==0) // Do nowt.
			{
			return;
			}
		$acceptable_resouce_types = array ();
		$all_types = array();
		foreach ($resource_types as $type)
			{
			if (isset($type['resource_type']))
				{
				$all_types[ $type['resource_type'] ] = $type ;
				$acceptable_resouce_types[] = $type['resource_type'];
				}
			}
		
		$resource_type = (string) jomresGetParam( $_REQUEST, 'resource_type', 'property' );
		$resource_id = (int)    jomresGetParam( $_REQUEST, 'resource_id', 0 );
		
		if ( $this->resource_subdirectories_used )
			{
			$this->abs_path = $upload_context [ 'upload_root_abs_path' ] . $resource_type . JRDS . (int)$resource_id . JRDS;
			$this->rel_path = $upload_context [ 'upload_root_rel_path' ] . $resource_type . "/" . (int)$resource_id . "/";
			}
		else
			{
			$this->abs_path = $upload_context [ 'upload_root_abs_path' ] . $resource_type . JRDS ;
			$this->rel_path = $upload_context [ 'upload_root_rel_path' ] . $resource_type . "/" ;
			}

		if (!in_array($resource_type , $acceptable_resouce_types)) // The resource type isn't recognised, let's get the hell outta Dodge.
			{
			return;
			}
		
		if (isset($_GET['delete']) && $_GET['delete'] == "1")
			{
			$file_name = (string) jomresGetParam( $_REQUEST, 'filename', '' );
			if ($file_name == '')
				return;
			$response = $this->delete_images($file_name);
			
			echo json_encode($response);
			$MiniComponents->triggerEvent( $upload_context [ 'post_upload_processing_trigger' ] ); // Optional for post processing
			}
		else
			{
			if (count($_FILES) > 0)
				{
				$id_required = $all_types [$resource_type] [ 'resource_id_required' ];
				if ( $id_required && $resource_id == 0 ) // This resource type requires an ID, but it doesn't exist. Again, we're outta here.
					{
					return;
					}
				jr_import("jomres_media_centre_uploader");
				$upload_handler = new UploadHandler(array( 
					'accept_file_types' => '/\.'.$upload_context [ 'allowed_file_types' ].'$/i' , 
					'upload_dir' => $this->abs_path  ,
					'upload_url' => $this->rel_path  ,
					));
				$upload_handler -> url_context = $upload_context['url_context'];
				$MiniComponents->triggerEvent( $upload_context [ 'post_upload_processing_trigger' ] ); // Optional for post processing
				}
			}
		}

		
	function delete_images($file_name)
		{
		$passed = true;
		if (file_exists($this->abs_path . $file_name))
			{
			if ( !unlink( $this->abs_path . $file_name ) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . $file_name );
				$passed = false;
				}
			}
		if (file_exists($this->abs_path . "medium" . JRDS . $file_name))
			{
			if ( !unlink($this->abs_path . "medium" . JRDS . $file_name) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . "medium" . JRDS . $file_name );
				$passed = false;
				}
			}
		if (file_exists($this->abs_path . "thumbnail" . JRDS . $file_name))
			{
			if ( !unlink( $this->abs_path . "thumbnail" . JRDS . $file_name ) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . "thumbnail" . JRDS . $file_name );
				$passed = false;
				}
			}

		if ( file_exists($this->abs_path . "gif" . JRDS . 'small_thumb.gif') )
			{
			if ( !unlink( $this->abs_path . "gif" . JRDS . 'small_thumb.gif' ) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . "gif" . JRDS . 'small_thumb.gif' );
				$passed = false;
				}
			}
			
		if ( file_exists($this->abs_path . "gif" . JRDS . 'medium_thumb.gif') )
			{
			if ( !unlink( $this->abs_path . "gif" . JRDS . 'medium_thumb.gif' ) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . "gif" . JRDS . 'medium_thumb.gif' );
				$passed = false;
				}
			}
			
		if ( file_exists($this->abs_path . "gif" . JRDS . 'slideshow_lib.php') )
			{
			if ( !unlink( $this->abs_path . "gif" . JRDS . 'slideshow_lib.php' ) )
				{
				error_logging( "Error, media centre couldn't delete " . $this->abs_path . "gif" . JRDS . 'slideshow_lib.php' );
				$passed = false;
				}
			}
			
		if ($passed)
			{
			$response = array ("message" => "Yay, we'll deleted this sukka" , "success" => "1");
			}
		else
			{
			$response = array ("message" => "Boo, we couldn't delete it. I'm going to have a little cry in the corner now." , "success" => "0");
			}
		return $response;
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
		return null;
		}
	}

?>