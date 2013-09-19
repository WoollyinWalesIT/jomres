<?php
/**
 * Core file
 *
 * @author Aladar Barthi <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j01060slideshow
	{
	/**
	#
	 * Constructor:
	#
	 */
	function j01060slideshow( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		if (!isset($componentArgs[ 'images' ]))
			{
			$property_uid          = $componentArgs[ 'property_uid' ];
			if ( !isset( $property_uid ) ) 
				{
				$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
				}
			if ( $property_uid == 0 ) 
				return;
			$images = get_images($property_uid); // An array of images, 
			$imagesArray = $images ['slideshow'] [0];
			}
		else
			{
			$imagesArray = $componentArgs[ 'images' ];
			}
		
		$count = count( $imagesArray );
		if ( $count > 0 )
			{
			$filecount = 0;
			for ( $i = 0; $i < $count; $i++ )
				{
				$image_name_array =explode ( "/" , $imagesArray[ $i ] ['large'] );
				
				$filename = $image_name_array[count($image_name_array)-1];
				$fileExt = strtoupper(substr(strrchr($filename, '.'), 1));
				if ( $fileExt == "JPG" || $fileExt == "JPEG" )
					{
					$imageData[ $i ][ 'filename' ]      = $filename;
					$sizes                              = getImagesSize( $imagesArray[ $i ] ['large'] );
					$imageData[ $i ][ 'actualwidth' ]   = $sizes[ 'actualwidth' ];
					$imageData[ $i ][ 'actualheight' ]  = $sizes[ 'actualheight' ];
					$imageData[ $i ][ 'fullwidth' ]     = $sizes[ 'fullwidth' ];
					$imageData[ $i ][ 'fullheight' ]    = $sizes[ 'fullheight' ];
					$imageData[ $i ][ 'thwidth' ]       = $sizes[ 'thwidth' ];
					$imageData[ $i ][ 'thheight' ]      = $sizes[ 'thheight' ];
					$imageData[ $i ][ 'imagelocation' ] = str_replace ( $filename , "" ,$imagesArray[ $i ] ['large'] ) ;
					$filecount++;
					}
				}
			}

		$output                = array ();
		$output[ 'PROPERTYIMAGE' ] = getImageForProperty( "property", $property_uid, $property_uid );
		$output[ 'PROPERTYNAME' ]  = getPropertyName( $property_uid, false );

		$numberOfImages = 0;
		if ( isset( $imageData ) ) 
			{
			$numberOfImages = count( $imageData );
			}

		if ( $numberOfImages > 0 )
			{
			for ( $i = 0; $i < $numberOfImages; $i++ )
				{
				$r                 = array ();
				$r[ 'COUNTER' ]    = $i;
				$cap               = $imageData[ $i ][ 'filename' ];
				$capAr             = explode( ".", $cap );
				$cap               = $capAr[ 0 ];
				$cap               = str_replace( "-", " ", $cap );
				$cap               = str_replace( "_", " ", $cap );
				$cap               = strtolower( $cap );
				$cap               = ucwords( $cap );
				$r[ 'WIDTH' ]      = $imageData[ $i ][ 'thwidth' ];
				$r[ 'HEIGHT' ]     = $imageData[ $i ][ 'thheight' ];
				$r[ 'IMAGETHUMB' ] = getThumbnailForImage( $imageData[ $i ][ 'imagelocation' ] . $imageData[ $i ][ 'filename' ] );
				$r[ 'IMAGE' ]      = $imageData[ $i ][ 'imagelocation' ] . $imageData[ $i ][ 'filename' ];
				$r[ 'CAPTION' ]    = $cap;
				$rows[ ]           = $r;
				}

			jomres_cmsspecific_addheaddata( "javascript", 'jomres/javascript/slideshow_themes/classic/', "galleria-1.2.9.min.js" );
			jomres_cmsspecific_addheaddata( "javascript", 'jomres/javascript/slideshow_themes/classic/', "galleria.classic.min.js" );
			jomres_cmsspecific_addheaddata( "css", 'jomres/javascript/slideshow_themes/classic/', 'galleria.classic.css', true ); // Can't be cached

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'slideshow.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$output_now = (bool) jomresGetParam( $_REQUEST, 'op', false );

			if ( $output_now ) $tmpl->displayParsedTemplate();
			else
			$this->retVals[ 'slideshow' ] = $tmpl->getParsedTemplate();
			}
		else
			{
			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "jomres" . JRDS . "uploadedimages" . JRDS . $property_uid . "_property_" . $property_uid . ".jpg" ) ) 
				{
				$this->retVals[ 'slideshow' ] = '<img src="' . get_showtime( 'live_site' ) . '/jomres/uploadedimages/' . $property_uid . '_property_' . $property_uid . '.jpg" />';
				}
			else
				{
			//	$this->retVals[ 'slideshow' ] = jr_gettext( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', _JOMRES_COM_A_SLIDESHOWS_NOIMAGES, '' );
				$this->retVals[ 'slideshow' ] = '<img src="'.get_showtime( 'live_site' ) . "/jomres/images/noimage.gif".'" />';
				}
			}
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
		return $this->retVals;
		}
	}

?>