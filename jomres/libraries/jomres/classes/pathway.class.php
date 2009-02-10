<?php
/**
#
 * Jomres core file
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
 * Creates the pathway
 #
* @package Jomres
#
*/
class jomres_pathway
	{
	function jomres_pathway()
		{
		if (defined('_JOMRES_NEWJOOMLA') )
			{
			global $mainframe;
			$this->joomlaPathway    =& $mainframe->getPathWay();
			$this->pathWayItems = array();
			$this->pathWayLinks = array();
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
			$this->addItem($name,$task,$options="");
			}
		else
			return false;
		}

	function addItem($pathwayText,$task="",$options="")
		{
		global $itemId;
		if (defined('_JOMRES_NEWJOOMLA') )
			{
			$link=JOMRES_SITEPAGE_URL."";
			if ($task != "")
				$link.="&task=".$task.$options."&itemId=".$itemId;
			$link=jomresUrl($link);
			$this->joomlaPathway->addItem($pathwayText, $pathwayLink);
			}
		else
			return false;
		}

	}

?>