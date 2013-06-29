<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000my_account
	{
	function j16000my_account()
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
			<h2 class="page-header">My Account</h2>
			<div class="' . $class . '" style="width:100%;">
			<div style="' . $style . '">
			<iframe src="http://license-server.jomres.net/index.php?wrapped=1&amp;wrapped=1" width="100%" height="1000" id="my_account" marginheight="0" frameborder="0">You need to enable frames in your browser to view this content.</iframe> 
			</div></div>
			';
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}