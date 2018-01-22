<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000edit_user
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
		
		$cms_user_id = (int)jomresGetParam( $_REQUEST, 'cms_user_id', 0 ); //manager uid
		
		$jomres_users = jomres_singleton_abstract::getInstance('jomres_users');
		$jomres_users->get_users(); //we get all users so we can display users for each property
		
		if ( $cms_user_id > 0 && $jomres_users->get_user( $cms_user_id ) )
			{
			$id						= $jomres_users->id;
			$access_level 			= $jomres_users->access_level;
			$cms_user_id 			= $jomres_users->cms_user_id;
			$apikey 				= $jomres_users->apikey;
			$authorised_properties 	= $jomres_users->authorised_properties;
			$username				= $jomres_users->username;
			$disabled 				= 'disabled="disabled"';
			$new_api_key_link 		= '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=generate_user_api_key&cms_user_id=' . $cms_user_id . '" class="btn btn-default">' . jr_gettext( "_JOMRES_APIKEY_REMAKE", '_JOMRES_APIKEY_REMAKE', false ) . '</a>';
			$cms_user_profile_link	= '<a href="' . jomres_cmsspecific_getCmsUserProfileLink($jomres_users->id) . '" class="btn btn-default" target="_blank">' . jr_gettext( "EDIT_CMS_USER", 'EDIT_CMS_USER', false ) . '</a>';
			}
		else
			{
			//default values
			$id						= 0;
			$cms_user_id 			= 0; //no cms user id yet
			$access_level 			= 50; //receptionist by default
			$apikey 				= createNewAPIKey(); //generate a new api key
			$authorised_properties 	= array(); //no authorised properties yet
			$username 				= '';
			$disabled 				= '';
			$new_api_key_link 		= '';
			$cms_user_profile_link	= '';
			}

		$output = array();
		$pageoutput = array();
		$rows = array();
		
		//get all properties in system
		$all_properties_in_system = get_showtime('all_properties_in_system');
		
		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->get_property_name_multi( $all_properties_in_system );
		
		//user roles dropdown
		$access_levels = array ();
		//$access_levels[] = jomresHTML::makeOption( '40', 'Partner' ); //example partner access level to be added later
		$access_levels[] = jomresHTML::makeOption( '50', 'Receptionist' );
		$access_levels[] = jomresHTML::makeOption( '70', 'Property manager' );
		$access_levels[] = jomresHTML::makeOption( '90', 'Super Property Manager' );
		$output[ 'ACCESSLEVEL' ] = jomresHTML::selectList( $access_levels, 'access_level', 'class="inputbox" size="1"', 'value', 'text', $access_level );

		foreach ( $all_properties_in_system as $i )
			{
			$r = array ();
			$propertyManagers = '';
			$checked = '';
			
			if ( isset($jomres_users->properties_users_xref[ $i ]) )
				{
				if ( !empty( $jomres_users->properties_users_xref[ $i ] ) )
					{
					foreach ( $jomres_users->properties_users_xref[ $i ] as $m )
						{
						if ( $m == $cms_user_id )
							{
							$checked = "checked";
							}
						
						$propertyManagers .= $jomres_users->users[ $m ]['username'] . ", ";
						}
					$propertyManagers = rtrim( $propertyManagers, ', ' );
					}
				}
			else
				{
				$propertyManagers = '';
				}
			
			$r[ 'INPUT' ]        = '<input type="checkbox" id="cb' . count( $rows ) . '" name="authorised_properties[]" value="' . $i . '" ' . $checked . '>';
			$r[ 'PROPERTYNAME' ] = $basic_property_details->property_names[$i];
			$r[ 'MANAGERS' ]     = $propertyManagers;
			
			$rows[ ]             = $r;
			}
		
		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( JOMRES_IMAGES_RELPATH.'jomresimages/small/Save.png' );
		
		$link   = get_showtime( 'live_site' ) . "/" . JOMRES_ADMINISTRATORDIRECTORY . "/index.php?option=com_jomres";
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_users", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'saveProfile', $link, jr_gettext( "_JOMRES_COM_MR_SAVE", '_JOMRES_COM_MR_SAVE', false ), $submitOnClick = true, $submitTask = "save_user", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ '_JRPORTAL_PROPERTIES_PROPERTYNAME' ]    	= jr_gettext( "_JRPORTAL_PROPERTIES_PROPERTYNAME", '_JRPORTAL_PROPERTIES_PROPERTYNAME', false );
		$output[ '_JOMRES_SHOWPROFILES_USERSWITHACCESS' ] 	= jr_gettext( "_JOMRES_SHOWPROFILES_USERSWITHACCESS", '_JOMRES_SHOWPROFILES_USERSWITHACCESS', false );
		$output[ 'HACCESSLEVEL' ]							= jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL", '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', false );
		$output[ 'HUSERNAME' ]	 							= jr_gettext( "_JOMRES_MR_AUDIT_LISTING_USER", '_JOMRES_MR_AUDIT_LISTING_USER', false );
        if ( $id == 0 )
            $output[ 'HUSERNAME_DESC' ]							= jr_gettext( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', false );
        else
            $output[ 'HUSERNAME_DESC' ]							= '';
		$output[ 'PAGETITLE' ]	 							= jr_gettext( "_JOMRES_EDIT_PROFILE", '_JOMRES_EDIT_PROFILE', false );
		
		$output['ID'] 					= $id;
		$output['CMS_USER_ID'] 			= $cms_user_id;
		$output['USERNAME'] 			= $username;
		$output['API_KEY'] 				= $apikey;
		$output['DISABLED'] 			= $disabled;
		$output['NEWAPIKEY_LINK'] 		= $new_api_key_link;
		$output['USER_PROFILE_LINK']	= $cms_user_profile_link;
		
		$output[ 'TOTALINLISTPLUSONE' ] = count( $rows ) + 1;
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_user.html' );
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
