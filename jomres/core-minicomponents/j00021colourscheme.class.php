<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Puts the colour scheme css file into the header
#
 *
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
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		if ( !using_bootstrap() )
			{
			if (!this_cms_is_wordpress())
				$css_file = "jomrescss.css";
			else
				$css_file = "jomrescss_wordpress.css";
			}
		else
			{
			if (jomres_bootstrap_version() == "2")
				{
				$css_file = "jomrescss_bootstrap.css";
				}
			else
				{
				$css_file = "jomrescss_bootstrap3.css";
				}
			}
			
		if ( file_exists( JOMRESPATH_BASE . JRDS . "temp" . JRDS . $css_file ) ) 
			{
			jomres_cmsspecific_addheaddata( "css", JOMRES_ROOT_DIRECTORY.'/temp/', $css_file );
			}
		else
			{
			jomres_cmsspecific_addheaddata( "css", JOMRES_CSSRELPATH, $css_file );
			}
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