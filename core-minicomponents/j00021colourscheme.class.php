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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**
#
 * Puts the colour scheme css file into the header
 #
* @package Jomres
#
 */
class j00021colourscheme
	{
	/**
	#
	 * Constructor: Puts the colour scheme css file into the header
	#
	 */
	function j00021colourscheme()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (file_exists(JOMRESPATH_BASE.JRDS."temp".JRDS."jomrescss.css") )
			jomres_cmsspecific_addheaddata("css",get_showtime('live_site').'/jomres/temp/',"jomrescss.css");
		else
			jomres_cmsspecific_addheaddata("css",JOMRES_CSSRELPATH,"jomrescss.css");
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}
?>