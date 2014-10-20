<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000savecrate
	{
	function j16000savecrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$id           = jomresGetParam( $_REQUEST, 'id', 0 );
		$title        = jomresGetParam( $_REQUEST, 'title', '' );
		$type         = jomresGetParam( $_REQUEST, 'type', 0 );
		$value        = jomresGetParam( $_REQUEST, 'value', 0.00 );
		$currencycode = jomresGetParam( $_REQUEST, 'currencycode', '' );
		$tax_rate     = jomresGetParam( $_REQUEST, 'tax_rate', 0 );

		jr_import( 'jrportal_crate' );
		$crateObj     = new jrportal_crate();
		$crateObj->id = $id;
		if ( $id > 0 ) $crateObj->getCrate();
		$crateObj->title        = $title;
		$crateObj->type         = $type;
		$crateObj->value        = $value;
		$crateObj->currencycode = $currencycode;
		$crateObj->tax_rate     = $tax_rate;
		
		if ( $id > 0 ) $crateObj->commitUpdateCrate();
		else
		$crateObj->commitNewCrate();
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listcrates" ), '' );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}