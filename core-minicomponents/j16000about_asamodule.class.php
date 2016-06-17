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

class j16000about_asamodule
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
		<div class="alert alert-info">Jomres ASAModule is designed to allow you to place modules or widgets anywhere you like. The ASAModule Report page in the administrator area gives you some information about plugins that can be called through the ASAModule feature, however the best source of information on usage for individual plugins can be seen in the plugin information popup in the Jomres Plugin Manager.</div>
		<iframe src="http://www.jomres.net/manual/site-managers-guide/15-core-plugins/111-jomres-asamodule" width="100%" height="3000" id="tickets" marginheight="0" frameborder="0">You need to enable frames in your browser to view this content.</iframe> 
		
		
		
		</div></div>
		';
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}