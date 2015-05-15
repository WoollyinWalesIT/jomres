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

class j16000getstats
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

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=showstats", jr_gettext( '_JRPORTAL_CANCEL', _JRPORTAL_CANCEL, false ) );
		$jrtb .= $jrtbar->endTable();
		echo $jrtb;

		$statoption = jomresGetParam( $_GET, 'statoption', "" );

		if ( $MiniComponents->eventSpecificlyExistsCheck( '16020', $statoption ) )
			{
			$MiniComponents->specificEvent( '16020', $statoption ); // Custom task
			}
		else
		echo "No data";
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}