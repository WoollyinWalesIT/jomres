<?php
/**
#
 * Constructs and displays the 'overlib' slideshow
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
// ################################################################

/**
#
 * Constructs and displays the 'overlib' slideshow
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
	global $property_uid;
	if (isset($imageData))
		$numberOfImages=count($imageData);
	else
		$numberOfImages=0;
	$output['PROPERTYNAME']=$propertyName;
	$output['SLIDESHOWIMAGESRELPATH']=$slideshowImgs_RelPath;
	$output['SLIDESHOWRELPATH']=$slideshowRelpath;
	$output['HOVERNOTES']=jr_gettext('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',_JOMRES_SLIDESHOW_HOVERFORANIMAGE,'');
	$captionElementsToReplace=array("-","_");

	if (!function_exists('JomresOverlibImages') )
		{
		function JomresOverlibImages($image,$title)
			{
			global $mrConfig,$popup ;
			$title=AddSlashes($title);
			//$description=AddSlashes($description);
			if (!isset($title) || empty($title) )
				$title="Empty";
			$title=htmlentities($title);
			//$description=htmlentities($description);
			$showimage='&lt;img src='.$image.'&gt;';
			
			if ($popup=="1")
				return '<IMG SRC="'.$image.'" border="0" width="50" height="50" onMouseOver="return overlib(\''.$showimage.'\', CAPTION, \''.$title.'\',BELOW,CENTER);" onMouseOut="return nd();">';
			else
				return '<IMG SRC="'.$image.'" border="0" width="50" height="50" onMouseOver="return overlib(\''.$showimage.'\', CAPTION, \''.$title.'\',BELOW,CENTER);" onMouseOut="return nd();">';
			}
		}

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
			//$r['IMAGE']=JomresOverlibImages($slideshowImgs_RelPath.$imageData[$i]['filename'],$cap);
			$r['IMAGE']=jomres_makeTooltip($cap,"",$slideshowImgs_RelPath.$imageData[$i]['filename'],$slideshowImgs_RelPath.$imageData[$i]['filename'],"","imageonly",$type_arguments=array("width"=>50,"height"=>50,"border"=>0));
			
			$rows[]=$r;
			}
		global $jrConfig;	
		$pageoutput[]=$output;
		$tmpl    =    new patTemplate();
		$tmpl->setRoot( JOMRESPATH_BASE."/plugins/slideshows/".$jrConfig['slideshow']."/" );
		$tmpl->readTemplatesFromInput( 'slideshow.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$output_now=(bool)jomresGetParam( $_REQUEST, 'op', false );
		
		if ($output_now)
			$tmpl->displayParsedTemplate();
		else
			$result=$tmpl->getParsedTemplate();
		}
	else
		{
		//echo jr_gettext('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',_JOMRES_COM_A_SLIDESHOWS_NOIMAGES,'');
		//echo "<br />";
		}
	return $result;
	}
?>