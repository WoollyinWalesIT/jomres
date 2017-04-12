<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.29
 * @package Jomres
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000unsuspend_user
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
		
		$cms_user_id = intval( jomresGetParam( $_REQUEST, 'cms_user_id', 0 ) );
		
		if ( $cms_user_id == 0 )
			{
			return;
			}

		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		
		if ( $jomres_users->get_user( $cms_user_id ) )
			{
			jr_import( 'jomres_suspensions' );
			$jomres_suspensions = new jomres_suspensions();
			$jomres_suspensions->set_manager_id( $cms_user_id );
			$jomres_suspensions->unsuspend_manager();
			$jomres_suspensions->publish_managers_properties();
			}

		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=list_users" ), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
