<?php
/**
#
 * Mini-component core file: Constructs and displays the manager's menu
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00011debugging {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00011debugging($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser,$Itemid;

		if ($thisJRUser->superPropertyManager)
			{
			$currentPage=urlencode($_SERVER['REQUEST_URI']);
			$image="/jomres/images/bug_icon.png";
			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->customToolbarItem("popupBug",jomresURL(JOMRES_SITEPAGE_URL."&task=reportbug&currentPage=$currentPage&Itemid=$Itemid"),"Report Bug",false,"",$image);
			$jrtb .= $jrtbar->endTable();
			$this->returnValue=array('BUGREPORT_LINK'=>$jrtb);
			}
		else
			$this->returnValue=array();
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
		return $this->returnValue;
		}
	}
?>