<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Creates the slideshow
 #
* @package Jomres
#
 */
class j01060slideshow {
	/**
	#
	 * Constructor:
	#
	 */
	function j01060slideshow($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
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
				$cap=str_replace("_"," ",$cap);
				$cap=strtolower($cap);
				$cap=ucwords($cap);
				$r['IMAGE']=jomres_makeTooltip($cap,$cap,$imageData[$i]['imagelocation'].$imageData[$i]['filename'],$imageData[$i]['imagelocation'].$imageData[$i]['filename'],"","imageonly",$type_arguments=array("width"=>$imageData[$i]['thwidth'],"height"=>$imageData[$i]['thheight'],"border"=>0));
				$r['CAPTION'] = $cap;
				$rows[]=$r;
				}

			$pageoutput[]=$output;
			$tmpl    =    new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
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