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

class j16000archivecrates
	{
	function j16000archivecrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$idArray = jomresGetParam( $_REQUEST, 'idarray', array () );
		jr_import( 'jrportal_crate_functions' );
		$crateFunctions = new jrportal_crate_functions();
		if ( count( $idArray ) > 0 )
			{
			$crateFunctions->batchArchive( $idArray );
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN . "&task=listcrates" ), '' );
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}