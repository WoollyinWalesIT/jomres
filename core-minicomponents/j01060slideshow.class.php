<?php
/**
* Core file
 * @author Aladar Barthi <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j01060slideshow {
	/**
	#
	 * Constructor:
	#
	 */
	function j01060slideshow($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$ePointFilepath;
		
		$ePointFilepath = get_showtime('ePointFilepath');
		
		
		$output = array();
		$output['LIVE_SITE'] = $jomresConfig_live_site;
		$property_uid=$componentArgs['property_uid'];
		$thumbnail_width = 50;
		if (!isset($property_uid))
			$property_uid		= intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		if ($property_uid == 0 )
			return;
		$imagesArray=listImages($property_uid);
		if (count($imagesArray) >0)
			{
			$filecount=0;
			for ($i = 0; $i <count($imagesArray); $i++)
				{
			 	$filename= split("\.",$imagesArray[$i]);
				$numExtensions=count($filename)-1;
				$fileExt=strtoupper($filename[$numExtensions]);
				if ($fileExt== "JPG" || $fileExt== "JPEG")
					{
					$imageData[$i]['filename']=$imagesArray[$i];
					$sizes=getImagesSize(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS.$imagesArray[$i]);
					$imageData[$i]['actualwidth'] = $sizes['actualwidth'];
					$imageData[$i]['actualheight'] = $sizes['actualheight'];
					$imageData[$i]['fullwidth'] = $sizes['fullwidth'];
					$imageData[$i]['fullheight'] = $sizes['fullheight'];
					$imageData[$i]['thwidth'] = $sizes['thwidth'];
					$imageData[$i]['thheight'] = $sizes['thheight'];
					$imageData[$i]['imagelocation'] = JOMRES_IMAGELOCATION_RELPATH.$property_uid."/";
					$filecount++;
					}
				}
			}
		
		$output['PROPERTYIMAGE']=getImageForProperty("property",$property_uid,$property_uid);
		$output['PROPERTYNAME']=getPropertyName($property_uid,false);
		
		$propertyName=getPropertyNameNoTables($property_uid);
		if (isset($imageData))
			$numberOfImages=count($imageData);
		else
			$numberOfImages=0;

		if ($numberOfImages>0)
			{
			for ($i = 0; $i <$numberOfImages; $i++)
				{
				$r=array();
				$r['COUNTER']=$i;
				$cap=$imageData[$i]['filename'];
				$capAr=explode(".",$cap);
				$cap=$capAr[0];
				$cap=str_replace("-"," ",$cap);
				$cap=str_replace("_"," ",$cap);
				$cap=strtolower($cap);
				$cap=ucwords($cap);
				$r['WIDTH']=$imageData[$i]['thwidth'];
				$r['HEIGHT']=$imageData[$i]['thheight'];
				$r['IMAGETHUMB']=getThumbnailForImage($imageData[$i]['imagelocation'].$imageData[$i]['filename']);
				$r['IMAGE']=$imageData[$i]['imagelocation'].$imageData[$i]['filename'];
				$r['CAPTION'] = $cap;
				$rows[]=$r;
				}
			
			jomres_cmsspecific_addheaddata("javascript",'jomres/javascript/slideshow_themes/classic/',"galleria-1.2.5.min.js");
			jomres_cmsspecific_addheaddata("javascript",'jomres/javascript/slideshow_themes/classic/',"galleria.classic.min.js");
			jomres_cmsspecific_addheaddata("css",'jomres/javascript/slideshow_themes/classic/','galleria.classic.css',true); // Can't be cached
			
			$pageoutput[]=$output;
			$tmpl    =    new patTemplate();
			$tmpl->setRoot( $ePointFilepath."templates" );
			$tmpl->readTemplatesFromInput( 'slideshow.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$output_now=(bool)jomresGetParam( $_REQUEST, 'op', false );
			
			if ($output_now)
				$tmpl->displayParsedTemplate();
			else
				$this->retVals['slideshow']=$tmpl->getParsedTemplate();
			}
		else
			{
			$this->retVals['slideshow']=jr_gettext('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',_JOMRES_COM_A_SLIDESHOWS_NOIMAGES,'');
			}
		
		
		//$this->retVals['slideshow']=getSlideshow($property_uid);
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