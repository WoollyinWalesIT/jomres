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

class j16000listLogs
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
		$logFiles = get_showtime( 'logFiles' );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$jrtb .= $jrtbar->endTable();

		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output     = array ();
		$pageoutput = array ();
		$rows       = array ();

		$output[ 'PAGETITLE' ] = jr_gettext( "JOMRES_COM_A_AVAILABLELOGS", 'JOMRES_COM_A_AVAILABLELOGS',false );
		$counter               = 0;
		if ( count( $logFiles ) > 0 )
			{
			foreach ( $logFiles as $key => $file )
				{
				//echo JOMRES_SYSTEMLOG_PATH.$file;
				if ( file_exists( JOMRES_SYSTEMLOG_PATH . $file ) )
					{
					$r       = array ( "LOGFILELINK" => '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=showLog&logfile=' . $key . '">' . ucwords( $key ) . "</a>", "LOGFILELINK_NOUPDATE" => '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=showLog&no_update=1&logfile=' . $key . '">' . ucwords( $key ) . " noupdate" . "</a>" );
					$rows[ ] = $r;
					$counter++;
					}
				}
			}

		if ( $counter == 0 ) echo jr_gettext( "JOMRES_COM_A_LOGS_NOENTRIES", 'JOMRES_COM_A_LOGS_NOENTRIES',false );
		else
			{
			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_logs.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}