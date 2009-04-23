<?php
/**
#
 * Mini-component core file: Puts the colour scheme css file into the header
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mainframe,$jomresConfig_live_site;
		if (file_exists(JOMRESPATH_BASE.JRDS."temp".JRDS."jomrescss.css") )
			jomres_cmsspecific_addheaddata("css",$jomresConfig_live_site.'/jomres/temp/',"jomrescss.css");
		else
			jomres_cmsspecific_addheaddata("css",$jomresConfig_live_site.'/jomres/css/',"jomrescss.css");
		//echo '<link rel="stylesheet" type="text/css" href="'.$jomresConfig_live_site.'/jomres/css/jomrescss.css" />';
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