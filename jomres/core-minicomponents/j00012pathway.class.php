<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$numberOfPropertiesInSystem = get_showtime('numberOfPropertiesInSystem');
		$thisJRUser=jomres_getSingleton('jr_user');
		if ($thisJRUser->userIsManager && !isset($_REQUEST['task']) )
			return;

		$property_uid = $componentArgs['property_uid'];
		
		$jomresPathway =jomres_getSingleton('jomres_pathway');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		$showJomresPathway = true; // Change this line to $showJomresPathway = false;  If you don't want to show the Jomres pathway.

		if (_JOMRES_DETECTED_CMS == "joomla15" || _JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla17")
			{
			$mainframe =& JFactory::getApplication();
			$breadcrumbs = & $mainframe->getPathWay();
			$breadcrumbs->setPathway();
			}

		$no_html			= jomresGetParam( $_REQUEST, 'no_html', 0 );
		$popup				= intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );

		if ($no_html==0 && $popup==0 && !JOMRES_SINGLEPROPERTY && $numberOfPropertiesInSystem> 1)
			{
			$pathwayArray=array();
			$pathway="";

			$arrowImgSrc='<img src="'.get_showtime('live_site').'/jomres/images/arrow_right_grey.png" border="0" alt="arrow" />';  // Change this to change the arrow

			if ($thisJRUser->userIsManager==TRUE)
				$property_uid=(int)$thisJRUser->defaultproperty;
			$task 				= get_showtime('task');
			if ($selectedProperty>0)
				$property_uid=(int)$selectedProperty;

			$query="SELECT name,link FROM #__menu WHERE `link` LIKE JOMRES_SITEPAGE_URL.'%' LIMIT 1";
			$menuNames =doSelectSql($query);
			if (count($menuNames) > 0)
				{
				foreach ($menuNames as $menuName)
					{
					$name=$menuName->name;
					$task="";
					}
				}

			$tasks =array();
			$tasks['XXXXXX']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>JOMRES_SITEPAGE_URL);
			$tasks['listProperties']=array('text'=>_JOMRES_PATHWAY_PROPERTYLIST,'url'=>JOMRES_SITEPAGE_URL);
			$tasks['viewproperty']=array('text'=>_JOMRES_PATHWAY_PROPERTYDETAILS.getPropertyName($property_uid),'url'=>JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$property_uid);
			$tasks['dobooking']=array('text'=>_JOMRES_PATHWAY_BOOKINGFORM,'url'=>JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$property_uid);

			switch ($task)
				{
				case '':
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
				if (_JOMRES_DETECTED_CMS == "joomla15" )
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