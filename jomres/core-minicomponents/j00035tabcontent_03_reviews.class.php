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

class j00035tabcontent_03_reviews
	{
	function j00035tabcontent_03_reviews($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$property_uid=(int)$componentArgs['property_uid'];  
		$mrConfig=getPropertySpecificSettings($property_uid);
		$output = $componentArgs['currrent_output'];  

		if ($jrConfig['use_reviews'] == "1")
			{
			$MiniComponents->specificEvent('06000',"show_property_reviews");
			$reviews_title=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,false,false);

			$anchor = jomres_generate_tab_anchor($reviews_title);
			$tab = array(
				"TAB_ANCHOR"=>$anchor,
				"TAB_TITLE"=>$reviews_title,
				"TAB_CONTENT"=>$MiniComponents->miniComponentData['06000']['show_property_reviews']
				);
			$this->retVals = $tab;
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