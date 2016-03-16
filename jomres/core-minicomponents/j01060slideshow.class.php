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

class j01060slideshow
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
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$imagesArray=array();
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance( 'jomres_media_centre_images' );
		
		if (!isset($componentArgs[ 'size' ]))
			$componentArgs[ 'size' ] = "large";
		
		$height = 0.65;
		if ( isset($componentArgs[ 'height' ]) )
			$height = $componentArgs[ 'height' ];
		
		$lightbox = 'true';
		if ( isset($componentArgs[ 'lightbox' ]) )
			$lightbox = $componentArgs[ 'lightbox' ];
		
		$autoplay = 'true';
		if ( isset($componentArgs[ 'autoplay' ]) )
			$autoplay = $componentArgs[ 'autoplay' ];
		
		$thumbnails = 'true';
		if ( isset($componentArgs[ 'thumbnails' ]) )
			$thumbnails = $componentArgs[ 'thumbnails' ];
		
		$transition = 'slide';
		if ( isset($componentArgs[ 'transition' ]) )
			$transition = $componentArgs[ 'transition' ];
		
		$showcounter = 'true';
		if ( isset($componentArgs[ 'showcounter' ]) )
			$showcounter = $componentArgs[ 'showcounter' ];
		
		$link_to_property_details = false;
		if ( isset($componentArgs[ 'link_to_property_details' ]) )
			$link_to_property_details = $componentArgs[ 'link_to_property_details' ];

		if (!isset($componentArgs[ 'images' ]))
			{
			if ( isset($componentArgs[ 'property_uid' ]) )
				$property_uid = $componentArgs[ 'property_uid' ];
			else
				{
				if( isset($_REQUEST['property_uid']) )
					$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
				else
					$property_uid = get_showtime('property_uid');
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
		$rows = array();
		$pageoutput = array();

		switch ( $componentArgs[ 'size' ] && !using_bootstrap() )
			{
			case "medium":
				$output['WIDTH'] = ',width: '.floor( (int) $jrConfig[ 'thumbnail_property_header_max_width' ]);
				break;
			
			case "small":
				$output['WIDTH'] = ',width: '.floor( (int) $jrConfig[ 'thumbnail_property_list_max_width' ]);
				break;
			
			default:
				$output['WIDTH'] = '';
				break;
			}

		$output['RANDOM_IDENTIFIER'] = generateJomresRandomString( 10 );
		$output['LIGHTBOX'] = $lightbox;
		$output['AUTOPLAY'] = $autoplay;
		$output['THUMBNAILS'] = $thumbnails;
		$output['HEIGHT'] = $height;
		$output['TRANSITION'] = $transition;
		$output['SHOWCOUNTER'] = $showcounter;

		$count = count( $imagesArray );

		if ( $count > 0 )
			{
			for ( $i = 0; $i < $count; $i++ )
				{
				$r                 	= array ();
				$r[ 'IMAGETHUMB' ] 	= $imagesArray[ $i ][ 'small' ];
				$r[ 'IMAGE' ]      	= $imagesArray[ $i ][ 'large' ];
				
				if ( $link_to_property_details && (int)$componentArgs[ 'property_uid' ] > 0 )
					$r[ 'LINK' ] 	= jomresURL( JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . (int)$componentArgs[ 'property_uid' ] );
				else
					$r[ 'LINK' ] 	= '';
				
				$rows[] = $r;
				}

			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', "galleria-1.4.2.min.js" );
			jomres_cmsspecific_addheaddata( "javascript", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', "galleria.classic.min.js" );
			jomres_cmsspecific_addheaddata( "css", JOMRES_ROOT_DIRECTORY.'/javascript/slideshow_themes/classic/', 'galleria.classic.css' );
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'slideshow.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			
			$this->retVals[ 'slideshow' ] = $tmpl->getParsedTemplate();
			}
		else
			{
			$jomres_media_centre_images->get_images($property_uid, array('property'));
			$this->retVals[ 'slideshow' ] = '<img src="'.$jomres_media_centre_images->images['property'][0][0]['medium'].'" class="responsive img-responsive" alt="property image"/>';
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
