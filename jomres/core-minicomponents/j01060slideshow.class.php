<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $MiniComponents;
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
				$cap=str_replace($captionElementsToReplace," ",$cap);
				$cap=strtolower($cap);
				$cap=ucwords($cap);
				$r['IMAGE']=jomres_makeTooltip($cap,"",$imageData[$i]['imagelocation'].$imageData[$i]['filename'],$imageData[$i]['imagelocation'].$imageData[$i]['filename'],"","imageonly",$type_arguments=array("width"=>$imageData[$i]['thwidth'],"height"=>$imageData[$i]['thheight'],"border"=>0));
				
				$rows[]=$r;
				}
			global $jrConfig;	
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
			echo jr_gettext('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',_JOMRES_COM_A_SLIDESHOWS_NOIMAGES,'');
			echo "<br />";
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