<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Creates the pathway
#
 *
 * @package Jomres
#
 */
class jomres_pathway
	{
	function __construct()
		{
		if ( _JOMRES_DETECTED_CMS == "joomla15" )
			{
			global $mainframe;
			$this->joomlaPathway =& $mainframe->getPathWay();
			$this->pathWayItems  = array ();
			$this->pathWayLinks  = array ();
			$query               = "SELECT name,link FROM #__menu WHERE `link` LIKE JOMRES_SITEPAGE_URL.'%' LIMIT 1";
			$menuNames           = doSelectSql( $query );
			if ( count( $menuNames ) > 0 )
				{
				foreach ( $menuNames as $menuName )
					{
					$name = $menuName->name;
					$task = "";
					}
				}
			$this->addItem( $name, $task, $options = "" );
			}
		}


	function addItem( $pathwayText, $task = "", $options = "" )
		{
		if ( _JOMRES_DETECTED_CMS == "joomla15" )
			{
			$task = get_showtime( 'task' );
			$link = JOMRES_SITEPAGE_URL . "";
			if ( $task != "" ) $link .= "&task=" . $task . $options;
			$link = jomresUrl( $link );
			$this->joomlaPathway->addItem( $pathwayText, $link );
			}
		}

	}

?>