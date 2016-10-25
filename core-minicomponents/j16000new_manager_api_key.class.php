<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000new_manager_api_key
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

		$userid = jomresGetParam( $_REQUEST, 'id', 0 );
		if ( $userid > 0 )
			{
			$apikey = createNewAPIKey();
			$query  = "UPDATE #__jomres_managers SET `apikey`='" . $apikey . "' WHERE userid = " . $userid;
			if ( doInsertSql( $query, '' ) ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=editProfile&id=" . (int) $userid ), jr_gettext( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE' ) );
			else
			echo "Erm looks like an sql failure, couldn't update the Manager's API key";
			}

		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}