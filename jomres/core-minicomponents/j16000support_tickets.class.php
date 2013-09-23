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

class j16000support_tickets
	{
	function j16000support_tickets()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		jr_import( 'jomres_check_support_key' );
		$key_validation  = new jomres_check_support_key( '' );
		$this->key_valid = $key_validation->key_valid;
		if ( $this->key_valid )
			{
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
			<h2 class="page-header">Jomres Support Tickets</h2>
			<p>Here you can submit support request tickets. Please make sure you login first (create an account if you don`t already have one).</p>
			<div class="' . $class . '" style="width:100%;">
			<div style="' . $style . '">
			<iframe src="http://tickets.jomres.net" width="100%" height="1000" id="tickets" marginheight="0" frameborder="0">You need to enable frames in your browser to view this content.</iframe> 
			</div></div>
			';
			}
		else
			{
			echo '<h2>Jomres Support Tickets</h2>
			<p>Sorry, your support key has expired or is not valid, please consider purchasing a support key or renewing your existing support by visiting <a href="http://www.jomres.net/prices" target="_blank">Jomres.net</a></p>
			';
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}