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

class j16000about_shortcodes
	{
	function __construct()
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
			$class = "ui-widget-content ui-corner-all";
			$style = "margin-left:5px;margin-right:5px;";
			}
		else
			{
			$class = "";
			$style = "";
			}

		echo '
		<h2 class=page-header>Shortcodes</h2>
		<div class="' . $class . '" style="width:100%;">
		<div style="' . $style . '">
		<div class="alert alert-info">To use shortcodes, you will need to install the Jomres Shortcodes plugin in the Jomres plugin manager. You do not <i>need</i> to use shortcodes to access Jomres via the frontend, shortcodes are often used for outputting modules or widgets in certain sections to suit your own tastes.</div>
		<iframe src="http://www.jomres.net/manual/developers-guide/305-shortcodes" width="100%" height="3000" id="tickets" marginheight="0" frameborder="0">You need to enable frames in your browser to view this content.</iframe> 
		
		
		
		</div></div>
		';
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}