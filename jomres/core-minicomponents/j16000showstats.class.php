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

class j16000showstats
	{
	function j16000showstats()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$pageoutput = array ();
		$output     = array ();
		$rows       = array ();

		$MiniComponents->triggerEvent( '16010' ); // Separate stat type options
		$mcOutput = $MiniComponents->getAllEventPointsData( '16010' );
		if ( count( $mcOutput ) > 0 )
			{
			$statoptions = "";
			foreach ( $mcOutput as $key => $val )
				{
				$r           = array ();
				$r[ 'STAT' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=getstats&statoption=' . $val[ 'task' ] . '">' . $val[ 'text' ] . '</a><br/>';
				$rows[ ]     = $r;
				}
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, jr_gettext( '_JRPORTAL_CANCEL', _JRPORTAL_CANCEL, false ) );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'STATOPTIONS' ] = $statoptions;
		$output[ 'LIVESITE' ]    = get_showtime( 'live_site' );
		$output[ 'PAGETITLE' ]   = jr_gettext( '_JRPORTAL_STATS_PATETITLE', _JRPORTAL_STATS_PATETITLE, false );

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'show_stats.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );

		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}