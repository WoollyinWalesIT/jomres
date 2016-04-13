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
 * Basic function for uploading a property image
#
 */
function uploadPropertyImage()
	{
	$defaultProperty = getDefaultProperty();
	$saveMessage     = jr_gettext( '_JOMRES_FILE_UPDATED', _JOMRES_FILE_UPDATED, false );

	$uploadedImage = $_FILES[ 'image' ][ 'name' ];
	$filename      = split( "\.", $_FILES[ 'image' ][ 'name' ] );
	$numExtensions = ( count( $filename ) ) - 1;
	//$fileName=$filename[0];
	$fileExt     = $filename[ $numExtensions ];
	$newFileName = $defaultProperty . "_property_" . (int) $defaultProperty . "." . $fileExt;

	if ( $uploadedImage ) $checkedImage = uploadImageFromPost( 'image', $newFileName, JOMRES_IMAGELOCATION_ABSPATH );

	if ( $checkedImage )
		{
		$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
		$jomres_messaging = new jomres_messages();
		$jomres_messaging->set_message( $saveMessage );
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=editProperty&propertyUid=$defaultProperty" ), "" );
		}
	else
	echo "Error";
	}

/**
#
 * Basic function for uploading a room image
#
 */

function uploadRoomImage()
	{
	$defaultProperty = getDefaultProperty();
	$saveMessage     = _JOMRES_FILE_UPDATED;
	$roomUid         = intval( jomresGetParam( $_POST, 'roomUid', 0 ) );

	$query          = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = " . (int) $defaultProperty . "";
	$roomsList      = doSelectSql( $query );
	$propertysRooms = array ();

	foreach ( $roomsList as $r )
		{
		$propertysRooms[ ] = $r->room_uid;
		}
	if ( in_array( $roomUid, $propertysRooms ) )
		{
		$uploadedImage = $_FILES[ 'image' ][ 'name' ];
		$filename      = split( "\.", $_FILES[ 'image' ][ 'name' ] );
		$numExtensions = ( count( $filename ) ) - 1;
		//$fileName=$filename[0];
		$fileExt     = $filename[ $numExtensions ];
		$newFileName = $defaultProperty . "_room_" . $roomUid . "." . $fileExt;

		if ( $uploadedImage ) $checkedImage = uploadImageFromPost( 'image', $newFileName, JOMRES_IMAGELOCATION_ABSPATH );

		if ( $checkedImage )
			{
			$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
			$jomres_messaging = new jomres_messages();
			$jomres_messaging->set_message( $saveMessage );
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=editRoom&roomUid=$roomUid" ), $saveMessage );
			}
		}
	else
	trigger_error( "Unable to upload image, room uid does not match property's rooms", E_USER_ERROR );
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


/**
#
 * Gets the image sizes, refactored to the jrConfig max width value, then returns them. Allows us to return a set of sizes so that the image proportions remain valid
#
 */
function getImagesSize( $imageLocation )
	{
	$siteConfig      = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig        = $siteConfig->get();
	$thumbnail_width = $jrConfig[ 'thumbnail_width' ];
	$mysock          = getimagesize( $imageLocation );
	if ( $mysock )
		{
		// http://www.sitepoint.com/article/image-resizing-php
		//takes the larger size of the width and height and applies the formula accordingly...this is so this script will work dynamically with any size image
		$width  = $mysock[ 0 ];
		$height = $mysock[ 1 ];

		$image[ 'actualwidth' ]  = $width;
		$image[ 'actualheight' ] = $height;
		if ( $width > $height ) $percentage = ( $jrConfig[ 'maxwidth' ] / $width );
		else
		$percentage = ( $jrConfig[ 'maxwidth' ] / $height );
		//gets the new value and applies the percentage, then rounds the value
		$image[ 'fullwidth' ]  = round( $width * $percentage );
		$image[ 'fullheight' ] = round( $height * $percentage );

		if ( $width > $height ) $percentage = ( $thumbnail_width / $width );
		else
		$percentage = ( $thumbnail_width / $height );

		$image[ 'thwidth' ]  = round( $width * $percentage );
		$image[ 'thheight' ] = round( $height * $percentage );

		return $image;
		}
	else
	return false;
	}

/**
#
 * Creates the form to perform batch uploads for slideshow images
#
 */
function batchUploadForm()
	{
	$siteConfig      = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig        = $siteConfig->get();
	$defaultProperty = getDefaultProperty();

	$output[ 'PAGETITLE' ]                              = jr_gettext( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', _JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD, false );
	$output[ 'ITEMID' ]                                 = $Itemid;
	$output[ 'INFO' ]                                   = jr_gettext( '_JOMRES_FRONT_IMAGEUPLOADS_INFO', _JOMRES_FRONT_IMAGEUPLOADS_INFO, false );
	$output[ 'IMAGESALREADYINDIR' ]                     = jr_gettext( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', _JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR, false );
	$output[ '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD' ] = jr_gettext( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', _JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD, false );


	$imagesAlreadyInDirectory = listImages( $defaultProperty );
	$rows                     = array ();
	if ( count( $imagesAlreadyInDirectory ) > 0 )
		{
		foreach ( $imagesAlreadyInDirectory as $image )
			{
			$r[ 'IMAGENAME' ] = $image;
			$r[ 'IMAGEPATH' ] = JOMRES_IMAGELOCATION_RELPATH . $defaultProperty . '/';
			$thumb            = getThumbnailForImage( $r[ 'IMAGEPATH' ] . $r[ 'IMAGENAME' ] );
			if ( $thumb ) $r[ 'IMAGEOUTPUT' ] = $thumb;
			else
			$r[ 'IMAGEOUTPUT' ] = $r[ 'IMAGEPATH' ] . $r[ 'IMAGENAME' ];
			$r[ 'COUNT' ]    = count( $rows );
			$r[ 'CHECKBOX' ] = '<input type="checkbox" id="cb' . count( $rows ) . '" name="idarray[]" value="' . $r[ 'IMAGENAME' ] . '">';
			$rows[ ]         = $r;
			}
		}

	$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
	$jrtb   = $jrtbar->startTable();
	$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'bUpload' );
	$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&Itemid=$Itemid" ), '' );
	$jrtb .= $jrtbar->endTable();
	$output[ 'JOMRESTOOLBAR' ] = $jrtb;

	$output[ 'DELETEIMAGES' ] = jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', _JOMRES_COM_MR_ROOM_DELETE, false, false );

	$output[ 'JOMRES_SITEPAGE_URL' ]           = JOMRES_SITEPAGE_URL;
	$output[ 'JOMRES_SITEPAGE_URL_DELIMAGES' ] = JOMRES_SITEPAGE_URL . "&task=delslideshowimages";

	$pageoutput[ ] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'batchupload.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->addRows( 'rows', $rows );
	$tmpl->displayParsedTemplate();
	}

/**
#
 * Does the batch upload
#
 */
function batchUploadPropertyImages()
	{
	$defaultProperty = getDefaultProperty();
	$uploadedImagesArray = array ();
	for ( $i = 0; $i < 12; $i++ )
		{
		$checkedImage     = false;
		$uploadedFilename = $_FILES[ 'image' . $i ][ 'name' ];
		if ( !empty( $uploadedFilename ) ) $checkedImage = uploadImageFromPost( 'image' . $i, $uploadedFilename, JOMRES_IMAGELOCATION_ABSPATH . $defaultProperty . JRDS );
		if ( $checkedImage )
			{
			$uploadedImagesArray[ ] = $uploadedFilename;
			}
		}
	if ( count( $uploadedImagesArray ) > 0 ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=bUploadForm" ), '' );

	}

/**
#
 * Gets a list of filenames from the slideshow folder for this property
#
 */
 
// As of 7.4 this should be redundant

/* function listImages( $property_uid )
	{
	$abs  = JOMRES_IMAGELOCATION_ABSPATH . $property_uid . JRDS;
	$d    = @dir( $abs );
	$docs = array ();
	if ( $d )
		{
		while ( false !== ( $entry = $d->read() ) )
			{
			$filename = $entry;
			if ( is_file( $abs . $filename ) && substr( $entry, 0, 1 ) != '.' && strtolower( $entry ) !== 'cvs' && !strstr( $entry, '_thumbnail' ) )
				{
				$docs[ ] = $filename;
				}
			}
		$d->close();
		if ( count( $docs ) > 1 ) sort( $docs );

		}

	return $docs;
	}
 */
/**
#
 * Does a bunch of checks on the uploaded image to ensure that it's actually an image, and a few other checks
#
 */
function batchcheckImageUpload( $property_uid, $resourceType, $resourceId, $uploadedFilename, $uploadedSize, $uploadedTemp )
	{
	global $mrConfig;
	$siteConfig  = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig    = $siteConfig->get();
	$saveMessage = jr_gettext( '_JOMRES_FILE_UPDATED', _JOMRES_FILE_UPDATED, false );
	$mrp         = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_IMAGELOCATION_ABSPATH . $property_uid . '/';
	$rc          = 1; //reset return code
	if ( !is_dir( $mrp ) )
		{
		mkdir( $mrp, 0777 );
		}

	$uploadedFileLocation = "";
	$filename             = split( "\.", $uploadedFilename );
	// Now let's check that this really is an Image file
	if ( !getimagesize( $uploadedTemp ) )
		{
		echo "File " . $filename . " is not an image file. Not uploaded.";
		$rc = false;
		}
	//Change the file's name
	$numExtensions = ( count( $filename ) ) - 1;
	$filesize      = $uploadedSize;
	$fileExt       = $filename[ $numExtensions ];
	$newFileName   = $uploadedFilename;
	$newFileName   = str_replace( " ", "-", $newFileName );
	//Ensure it is a new file
	if ( file_exists( $mrp . "/$filename" ) )
		{
		if ( !unlink( $mrp . "/$uploadedFilename" ) )
			{
			echo "<script> alert('Tried to delete old file, but couldnt. Wibble!'); ; < /script>\n";
			}
		}

	//move it to the proper location
	if ( $rc )
		{
		$theFile = $uploadedTemp;
		move_uploaded_file( $theFile, $mrp . "$newFileName" );
		@chmod( $mrp . "$newFileName", 0777 );

		//Filename + proper path
		$fileLocation = $mrp . "/$newFileName";
		//numExtensions= people tend to upload malicious files using mutliple extensions like: virus.txt.vbs; we'll want to have the last extension to validate against..
		$numExtensions = ( count( $filename ) ) - 1;
		$filesize      = $uploadedSize;
		$fileExt       = $filename[ $numExtensions ];
		//check for empty file
		if ( empty( $uploadedFilename ) )
			{
			@unlink( $fileLocation );
			echo "<script> alert('" . jr_gettext( '_JOMRES_FILE_ERROR_EMPTY', _JOMRES_FILE_ERROR_EMPTY, false ) . ". " . jr_gettext( '_JOMRES_FILE_NOT_UPLOADED', _JOMRES_FILE_NOT_UPLOADED, false ) . "'); ; </script>\n";
			$rc = false;
			}
		if ( !getimagesize( $fileLocation ) )
			{
			$rc = false;
			}
		if ( $rc )
			{
			//check for allowed file types
			$allowedArray = explode( ',', strtolower( $jrConfig[ 'fileTypes' ] ) );
			$fileExt      = strtolower( $fileExt );
			if ( !in_array( $fileExt, $allowedArray ) )
				{
				unlink( $fileLocation );
				echo "<script> alert('" . jr_gettext( '_JOMRES_FILE_ERROR_TYPE', _JOMRES_FILE_ERROR_TYPE, false ) . " " . $jrConfig[ 'fileTypes' ] . ". " . jr_gettext( '_JOMRES_FILE_NOT_UPLOADED', _JOMRES_FILE_NOT_UPLOADED, false ) . "'); ; </script>\n";
				$rc = 0;
				}
			if ( $rc )
				{
				//check file name characteristics
				if ( eregi( "[^0-9a-zA-Z_-]", $filename ) )
					{
					unlink( $fileLocation );
					echo "<script> alert('" . jr_gettext( '_JOMRES_FILE_ERROR_NAME', _JOMRES_FILE_ERROR_NAME, false ) . ". " . jr_gettext( '_JOMRES_FILE_NOT_UPLOADED', _JOMRES_FILE_NOT_UPLOADED, false ) . "'); ; </script>\n";
					$rc = 0;
					}
				if ( $rc )
					{
					//check filesize
					$maxFileSize = $jrConfig[ 'fileSize' ] * 1024;
					if ( $filesize > $maxFileSize )
						{
						unlink( $fileLocation );
						echo "<script> alert('" . jr_gettext( '_JOMRES_FILE_ERROR_SIZE', _JOMRES_FILE_ERROR_SIZE, false ) . " (" . $jrConfig[ 'fileSize' ] . " Kilobytes). " . jr_gettext( '_JOMRES_FILE_NOT_UPLOADED', _JOMRES_FILE_NOT_UPLOADED, false ) . "'); ; </script>\n";
						$rc = 0;
						}
					if ( $rc )
						{
						$code                 = '[file name=' . $newFileName . ' size=' . $filesize . ']' . $mrp . $newFileName . '[/file]';
						$uploadedFileLocation = JOMRES_IMAGELOCATION_ABSPATH . $property_uid . '/' . $newFileName;
						}
					}
				}
			}
		}
	if ( $rc )
		{
		return $uploadedFileLocation;
		}
	else
	return false;
	}
