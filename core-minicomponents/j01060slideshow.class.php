<?php
/**
 * Core file
 *
 * @author Aladar Barthi <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
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

		$imagesArray=array();
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		
		if (!isset($componentArgs[ 'images' ]))
			{
			$property_uid          = $componentArgs[ 'property_uid' ];
			if ( !isset( $property_uid ) ) 
				{
				$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
				}
			if ( $property_uid == 0 ) 
				return;
			$jomres_media_centre_images->get_images($property_uid, array('slideshow'));
			$imagesArray = $jomres_media_centre_images->images ['slideshow'] [0];
			}
		else
			{
			$imagesArray = $componentArgs[ 'images' ];
			}

		$output = array ();
		$count = count( $imagesArray );

		if ( $count > 0 )
			{
			for ( $i = 0; $i < $count; $i++ )
				{
				$r                 = array ();
				$r[ 'IMAGETHUMB' ] = $imagesArray[ $i ][ 'small' ];
				$r[ 'IMAGE' ]      = $imagesArray[ $i ][ 'large' ];
				$rows[ ]           = $r;
				}

			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', "galleria-1.2.9.min.js" );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', "galleria.classic.min.js" );
			jomres_cmsspecific_addheaddata( "css", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.css' );

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'slideshow.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$output_now = (bool) jomresGetParam( $_REQUEST, 'op', false );

			if ( $output_now ) 
				$tmpl->displayParsedTemplate();
			else
				$this->retVals[ 'slideshow' ] = $tmpl->getParsedTemplate();
			}
		else
			{
			$jomres_media_centre_images->get_images($property_uid, array('property'));
			$this->retVals[ 'slideshow' ] = '<img src="'.$jomres_media_centre_images->images['property'][0][0]['medium'].'" alt="property image"/>';
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