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

/**
#
 * Deletes an image
#
 */
function dropImage( $defaultProperty = 0, $imageType = "", $itemUid = "", $redirectOnDone = true )
	{
	$imageType = getEscaped( jomresGetParam( $_REQUEST, 'imageType', '' ) );
	$itemUid   = getEscaped( jomresGetParam( $_REQUEST, 'itemUid', 0 ) );

	$defaultProperty = getDefaultProperty();
	$saveMessage     = jr_gettext( '_JOMRES_FILE_DELETED', _JOMRES_FILE_DELETED, false );
	$fileFullPath    = "";
	$returnTask      = "editProperty&propertyUid=" . $defaultProperty;

	switch ( $imageType )
	{
		case 'property':
			$fileFullPath                  = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_property_" . $defaultProperty . ".jpg";
			$fileFullPath_thumbnail        = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_property_" . $defaultProperty . "_thumbnail.jpg";
			$fileFullPath_thumbnail_medium = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_property_" . $defaultProperty . "_thumbnail_med.jpg";
			$returnTask                    = "editProperty&propertyUid=" . $defaultProperty;
			break;
		case 'room':
			$fileFullPath                  = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_room_" . $itemUid . ".jpg";
			$fileFullPath_thumbnail        = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_room_" . $itemUid . "_thumbnail.jpg";
			$fileFullPath_thumbnail_medium = JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . "_room_" . $itemUid . "_thumbnail_med.jpg";
			$returnTask                    = "editRoom&roomUid=" . $itemUid;
			break;
	}
	if ( strlen( $fileFullPath ) > 0 )
		{
		if ( file_exists( $fileFullPath ) )
			{
			if ( !unlink( $fileFullPath ) )
				{
				error_logging( "Error, couldn't delete " . $fileFullPath );

				return false;
				}
			else
				{
				unlink( $fileFullPath_thumbnail );
				unlink( $fileFullPath_thumbnail_medium );

				$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
				$jomres_messaging = new jomres_messages();
				$jomres_messaging->set_message( $saveMessage );
				if ( $redirectOnDone ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=$returnTask" ), $saveMessage );
				else
				return true;
				}
			}
		else
			{
			if ( $redirectOnDone ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=$returnTask" ), $saveMessage );
			else
			return false;
			}
		}
	else
		{
		$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
		$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message( "Could not discerne filename" );
		if ( $redirectOnDone ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=$returnTask" ), '' );
		else
		return false;
		}
	}

/**
#
 * Uploads an image an resizes it accoring to $jrConfig['maxwidth'] & $jrConfig['maxheight']
#
 *
 * @see images
#
 */
function uploadImageFromPost( $formelement = null, $newName = null, $saveToPath = null )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	$elementsToRemove = array ( "\\", "'", );
	$newName          = strtolower( str_replace( $elementsToRemove, "", $newName ) );
	$newName          = strtolower( str_replace( " ", "_", $newName ) );

	$slideshow_image_upload  = false;
	$batchUploadFormElements = array ( 'image0', 'image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9', 'image10', 'image11' );
	if ( in_array( $formelement, $batchUploadFormElements ) ) $slideshow_image_upload = true;

	if ( isset( $formelement ) && isset( $newName ) && isset( $saveToPath ) )
		{
		if ( !is_dir( $saveToPath ) )
			{
			if ( !mkdir( $saveToPath ) )
				{
				echo "Unable to make dir " . $saveToPath . "<br>";

				return false;
				}
			}
		if ( !defined( "JOMRES_IMAGE_MAX_SIZE" ) || !defined( "JOMRES_IMAGE_UPLOAD_PATH" ) )
			{
			define( "JOMRES_IMAGE_MAX_SIZE", $jrConfig[ 'fileSize' ] );
			define( "JOMRES_IMAGE_UPLOAD_PATH", $saveToPath );
			}
		$maxwidth  = $jrConfig[ 'maxwidth' ];
		$maxHeight = $jrConfig[ 'maxwidth' ];


		// load the class
		jr_import( 'images' );
		$img = new images();
		// open a file
		$ok_to_delete = false;
		if ( $img->getImageFromPost( $formelement ) )
			{
			// make the image fit
			// Image resizing is a security function, as well as simply resizing the image. It reduces the liklihood of malformed headers in image files.
			$img->transformToFit( $maxwidth, $maxHeight );
			if ( !$img->imageresizeresult )
				{
				@unlink( $img->fileToBeDeletedAtEnd );
				@unlink( $img->orgImage );
				trigger_error( "Unable to resize image. Poss malformed image </b> " . $_FILES[ $formelement ][ 'name' ] . " User id " . $thisJRUser->id, E_USER_ERROR );
				}
			// add a red stroke of 2 pixels to the image
			//$img->strokeImage(2,"FF0000");
			// save the image
			if ( !$img->saveImage( JOMRES_IMAGE_UPLOAD_PATH . $newName, $ok_to_delete ) )
				{
				echo "Unable to save file " . JOMRES_IMAGE_UPLOAD_PATH . $newName . " ";

				return false;
				}
			else
				{
				if ( this_cms_is_joomla() && $slideshow_image_upload ) // For Joomla plugin galleries
					{
					$joomla_dir = JOMRES_IMAGE_UPLOAD_PATH . 'joomla' . JRDS;

					if ( !is_dir( $joomla_dir ) ) mkdir( $joomla_dir );
					if ( !is_dir( $joomla_dir . 'large' ) ) mkdir( $joomla_dir . 'large' );
					$img->saveImage( $joomla_dir . 'large' . JRDS . $newName, $ok_to_delete );
					}

				// We've managed to do the upload of the image, let's now use the same functionality to create the thumbnail. Everything's worked so far so there's no need to perform the same checks so this should be much simpler.
				$ok_to_delete         = true;
				$filename             = split( "\.", $newName );
				$numExtensions        = ( count( $filename ) ) - 1;
				$fileExt              = $filename[ $numExtensions ];
				$filename             = $filename[ 0 ];
				$thumbnail_name_small = $filename . "_thumbnail." . $fileExt;
				$thumbnail_name_med   = $filename . "_thumbnail_med." . $fileExt;

				$img->openImage( JOMRES_IMAGE_UPLOAD_PATH . $newName );
				$img->transformToFit( floor( (int) $jrConfig[ 'thumbnail_property_list_max_width' ] ), floor( (int) $jrConfig[ 'thumbnail_property_list_max_height' ] ) );
				$img->saveImage( JOMRES_IMAGE_UPLOAD_PATH . $thumbnail_name_small, $ok_to_delete );

				if ( this_cms_is_joomla() && $slideshow_image_upload ) // For Joomla plugin galleries
					{
					if ( !is_dir( $joomla_dir . 'small' ) ) mkdir( $joomla_dir . 'small' );
					$img->saveImage( $joomla_dir . 'small' . JRDS . $thumbnail_name_small, $ok_to_delete );
					}

				$img->openImage( JOMRES_IMAGE_UPLOAD_PATH . $newName );
				$img->transformToFit( floor( (int) $jrConfig[ 'thumbnail_property_header_max_width' ] ), floor( (int) $jrConfig[ 'thumbnail_property_header_max_height' ] ) );
				$img->saveImage( JOMRES_IMAGE_UPLOAD_PATH . $thumbnail_name_med, $ok_to_delete );

				if ( this_cms_is_joomla() && $slideshow_image_upload ) // For Joomla plugin galleries
					{
					if ( !is_dir( $joomla_dir . 'medium' ) ) mkdir( $joomla_dir . 'medium' );
					$img->saveImage( $joomla_dir . 'medium' . JRDS . $thumbnail_name_med, $ok_to_delete );
					}
				}
			}
		else
			{
			return false;
			}
		}

	return $saveToPath . $newName;
	}
