<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
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


	function addItem($pathwayText,$task="",$options="")
		{
		$task=get_showtime('task');
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