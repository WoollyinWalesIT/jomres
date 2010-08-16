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
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00001start {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00001start($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		
		if (!defined('JOMRES_TEMPLATEPATH_FRONTEND'))
			define('JOMRES_TEMPLATEPATH_FRONTEND',JOMRESPATH_BASE.JRDS."templates".JRDS."jomres".JRDS."frontend");
		if (!defined('JOMRES_TEMPLATEPATH_BACKEND'))
			define('JOMRES_TEMPLATEPATH_BACKEND',JOMRESPATH_BASE.JRDS."templates".JRDS."jomres".JRDS."backend");
		if (!defined('JOMRES_TEMPLATEPATH_ADMINISTRATOR'))
			define('JOMRES_TEMPLATEPATH_ADMINISTRATOR',JOMRESPATH_BASE.JRDS."templates".JRDS."jomres".JRDS."administrator");
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