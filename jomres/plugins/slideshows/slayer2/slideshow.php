<?php
/**
#
 * Constructs and displays the 'slayer2' slideshow
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
	}
// ################################################################

/**
#
 * Constructs and displays the 'slayer2' slideshow
#
 */
 
/*
// Note: full width & full height are generated from the config settings "Slideshow full width". This MAY be larger than the actual image size,
// it's just there to find the maximum width & height. The same goes for thumbnails.
// The widths & heights are calculated to maintain the aspect of the image
// The thumbnail images aren't actually used in this script, but they're available if you want to use them elsewhere.

Variables available to this script:

$slideshowImgs_AbPath			// The absolute path to the images
$slideshowImgs_RelPath			// The relative path to the images
$slideshowBasepath				// The absolute path to this script
$slideshowRelpath				// The relative path to this script
$imageData						// An associative array of images in the given properties directory indexed by the image name 
								// and containing 'actualwidth', 'actualheight', 'fullwidth','fullheight','thwidth' & 'thheight' of the images
$propertyName					// The name of the property
*/
function constructSlideshow($imageData,$propertyName,$slideshowImgs_RelPath,$slideshowRelpath)
	{
	global $jrConfig;
	$result='';
	
	$numberOfImages=count($imageData);
	$output['PROPERTYNAME']=$propertyName;
	$output['SLIDESHOWIMAGESRELPATH']=$slideshowImgs_RelPath;
	$output['SLIDESHOWRELPATH']=$slideshowRelpath;
	$captionElementsToReplace=array("-","_");


	if ($numberOfImages>0)
		{
		for ($i = 0; $i <$numberOfImages; $i++)
			{
			$r=array();
			$r['COUNTER']=$i;
			$cap=$imageData[$i]['filename'];
			$capAr=explode(".",$cap);
			$cap=$capAr[0];
			$cap=str_replace($captionElementsToReplace," ",$cap);
			$cap=strtolower($cap);
			$cap=ucwords($cap);
			$r['THECAPTION']=$cap;
			$r['IMAGE']=$slideshowImgs_RelPath.$imageData[$i]['filename'];		
			$rows[]=$r;
			}
		global $jrConfig;	
		$pageoutput[]=$output;
		$tmpl    =    new patTemplate();
		$tmpl->setRoot( JOMRESPATH_BASE."/plugins/slideshows/".$jrConfig['slideshow']."/" );
		$tmpl->readTemplatesFromInput( 'slideshow.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );	
		if ($jrConfig['composite_property_details']!="1")
			$tmpl->displayParsedTemplate();
		else
			$result=$tmpl->getParsedTemplate();
		}
	else
		{
		//echo jr_gettext('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',_JOMRES_COM_A_SLIDESHOWS_NOIMAGES,$language);
		//echo "<br />";
		}
	return $result;
	}
?>