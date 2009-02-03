<?php
/**
#
 * Mini-component core file: Constructs and displays the receptionist's menu
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$jomresConfig_live_site,$thisJRUser,$Itemid,$numberOfPropertiesInSystem;
		
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
			$tasks['XXXXXX']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>'index.php?option=com_jomres&Itemid='.$Itemid);
			$tasks['listProperties']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>'index.php?option=com_jomres&Itemid='.$Itemid);
			$tasks['viewproperty']=array('text'=>_JOMRES_PATHWAY_PROPERTYDETAILS.getPropertyName($property_uid),'url'=>'index.php?option=com_jomres&task=viewproperty&property_uid='.$property_uid.'&Itemid='.$Itemid);
			$tasks['dobooking']=array('text'=>_JOMRES_PATHWAY_BOOKINGFORM,'url'=>'index.php?option=com_jomres&task=dobooking&selectedProperty'.$property_uid.'&Itemid='.$Itemid);

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
					$pathway.='<a href="'.jomresURL(''.$p['url']).'" class="pathway">'.$p['text'].'</a>';
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