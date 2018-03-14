<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000save_user
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
		
		$id				= (int)jomresGetParam( $_POST, 'id', 0 );
		$cms_user_id 	= (int)jomresGetParam( $_POST, 'cms_user_id', 0 );
		
		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		
		if ( $id > 0 && $cms_user_id > 0 )
			{
			$jomres_users->get_user( $cms_user_id );
			}

		$jomres_users->cms_user_id				= $cms_user_id;
		$jomres_users->apikey 					= jomresGetParam( $_POST, 'apikey', '' );
		$jomres_users->authorised_properties 	= jomresGetParam( $_POST, 'authorised_properties', array() );
		$jomres_users->access_level 			= (int)jomresGetParam( $_POST, 'access_level', 0 );
		
		//some checks
		if ( empty($jomres_users->authorised_properties) && $jomres_users->access_level < 90 )
			{
			echo "Error, you need to assign at least one property to this user";
			return;
			}
		
		if ( $jomres_users->id == 0 )
			{
			$jomres_users->commit_new_user();
			}
		else
			{
			$jomres_users->commit_update_user();
			}

		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=list_users" ), jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', false ) );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
