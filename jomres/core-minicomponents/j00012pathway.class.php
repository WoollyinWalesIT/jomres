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
 * 
 // To prevent the trailing string "Search" showing in your Joomla pathway, open /modules/mod_breadcrumbs/mod_breadcrumbs.php and add
 
 if ($_GET['option']=="com_jomres")
	$count=$count-1;
	
after the line

$count	= count($list);
 
 so it looks like :
 
 // Get the breadcrumbs
$list	= modBreadCrumbsHelper::getList($params);
$count	= count($list);
if ($_GET['option']=="com_jomres")
	$count=$count-1;
// Set the default separator
 #
* @package Jomres
#
 */
class j00012pathway {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00012pathway($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$jomresConfig_live_site,$thisJRUser,$numberOfPropertiesInSystem;
		if ($thisJRUser->userIsManager && !isset($_REQUEST['task']) )
			return;
			
		$showJomresPathway = true; // Change this line to $showJomresPathway = false;  If you don't want to show the Jomres pathway.
		
		
		if (defined('_JOMRES_NEWJOOMLA') )
			{
			global $mainframe;
			$breadcrumbs = & $mainframe->getPathWay();
			$breadcrumbs->setPathway();
			}
			
		$no_html			= jomresGetParam( $_REQUEST, 'no_html', 0 );
		$popup				= intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
		if ($no_html==0 && $popup==0 && !JOMRES_SINGLEPROPERTY && $numberOfPropertiesInSystem> 1)
			{
			$pathwayArray=array();
			$pathway="";
			$arrowImgSrc='<img src="jomres/images/arrow_right_grey.png" border="0" alt="arrow" />';  // Change this to change the arrow
			$selectedProperty	= intval( jomresGetParam( $_REQUEST, 'selectedProperty', 0 ) );
			$property_uid		= intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
			if ($thisJRUser->userIsManager==TRUE)
				$property_uid=(int)$thisJRUser->defaultproperty;
			$task 				= jomresGetParam( $_REQUEST, 'task', "" );
			if ($selectedProperty>0)
				$property_uid=(int)$selectedProperty;

			$tasks =array();
			$tasks['XXXXXX']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>JOMRES_SITEPAGE_URL);
			$tasks['listProperties']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>JOMRES_SITEPAGE_URL);
			$tasks['viewproperty']=array('text'=>_JOMRES_PATHWAY_PROPERTYDETAILS.getPropertyName($property_uid),'url'=>JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$property_uid);
			$tasks['dobooking']=array('text'=>_JOMRES_PATHWAY_BOOKINGFORM,'url'=>JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty'.$property_uid);

			switch ($task)
				{
				case '':
					//$pathwayArray[]=$tasks['XXXXXX'];
					$pathwayArray[]=$tasks['listProperties'];
				break;
				case 'viewproperty':
					$pathwayArray[]=$tasks['XXXXXX'];
					$pathwayArray[]=$tasks['viewproperty'];
				break;
				case 'dobooking':
					$pathwayArray[]=$tasks['XXXXXX'];
					$pathwayArray[]=$tasks['viewproperty'];
					$pathwayArray[]=$tasks['dobooking'];
				break;
				}
			$pathway.='<div id="pathway_text"><span class="pathway">';
			$counter=1;
			foreach ($pathwayArray as $p)
				{
				if (defined('_JOMRES_NEWJOOMLA') )
					$breadcrumbs->addItem( $p['text'],  jomresURL(''.$p['url']) );
				if ($counter<count($pathwayArray))
					$pathway.='<a href="'.jomresValidateUrl(jomresURL(''.$p['url'])).'" class="pathway">'.$p['text'].'</a>';
				else
					$pathway.=$p['text'];
				$pathway=str_replace("https://","http://",$pathway);  
				$counter++;
				if ($counter<=count($pathwayArray))
					$pathway.=$arrowImgSrc;
				}
			$pathway.='</span></div>';
			if ($showJomresPathway)
				echo $pathway;
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
		return null;
		}
	}
?>