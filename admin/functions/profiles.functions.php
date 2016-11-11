<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


//-----------------------------
//-A S S I G N  U S E R S  ----
//-----------------------------

function editProfile()
	{
	$userid = jomresGetParam( $_REQUEST, 'id', 0 );

 	if ($userid == 0)
		{
		return;
		}
	$yesno    = array ();
	$yesno[ ] = jomresHTML::makeOption( '0', jr_gettext( "_JOMRES_COM_MR_NO", '_JOMRES_COM_MR_NO', false ) );
	$yesno[ ] = jomresHTML::makeOption( '1', jr_gettext( "_JOMRES_COM_MR_YES", '_JOMRES_COM_MR_YES', false ) );

	$accessLevels    = array ();
	$accessLevels[ ] = jomresHTML::makeOption( '1', jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION", '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', false ) );
	$accessLevels[ ] = jomresHTML::makeOption( '2', jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN", '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', false ) );

	$output[ 'INSTRUCTIONS' ]         = jr_gettext( "_JOMRES_PROFILEEDIT_INSTRUCTIONS", '_JOMRES_PROFILEEDIT_INSTRUCTIONS', false );
	$output[ 'HSUPERPROP' ]           = jr_gettext( "_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER", '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', false );
	$output[ 'HACCESSLEVEL' ]         = jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL", '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', false );
	$output[ '_JOMRES_EDIT_PROFILE' ] = jr_gettext( "_JOMRES_EDIT_PROFILE", '_JOMRES_EDIT_PROFILE', false );
	
	
	
	$query                = "SELECT access_level,pu,apikey FROM #__jomres_managers WHERE userid = " . $userid . " LIMIT 1";
	$managerDetails       = doSelectSql( $query );
	$accessLevel          = 0;
	$superPropertyManager = false;
	$apikey               = '';
	foreach ( $managerDetails as $m )
		{
		$accessLevel          = $m->access_level;
		$superPropertyManager = $m->pu;
		$apikey               = $m->apikey;
		}
	$superPropertyManagerOutput = jomresHTML::selectList( $yesno, 'superpropertymanager', 'class="inputbox" size="1"', 'value', 'text', $superPropertyManager );
	$accessLevelOutput          = jomresHTML::selectList( $accessLevels, 'accesslevel', 'class="inputbox" size="1"', 'value', 'text', $accessLevel );
	$output[ 'SUPERPROP' ]      = $superPropertyManagerOutput;
	$output[ 'ACCESSLEVEL' ]    = $accessLevelOutput;
	$output[ 'APIKEY' ]         = $apikey;
	$output[ 'NEWAPIKEY_LINK' ] = '<a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=new_manager_api_key&no_html=1&id=' . $userid . '">' . jr_gettext( "_JOMRES_APIKEY_REMAKE", '_JOMRES_APIKEY_REMAKE', false ) . '</a>';

	$output[ 'ID' ] = $userid;

	$query                    = "SELECT manager_id,property_uid FROM #__jomres_managers_propertys_xref";
	$managersToPropertysList  = doSelectSql( $query );
	$managersToPropertysArray = array ();
	foreach ( $managersToPropertysList as $x )
		{
		$managersToPropertysArray[ $x->property_uid ][ ] = (int) $x->manager_id;
		}
	$query                   = "SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '" . (int) $userid . "'";
	$managersToPropertyList  = doSelectSql( $query );
	$managersToPropertyArray = array ();
	foreach ( $managersToPropertyList as $x )
		{
		$managersToPropertyArray[ ] = (int) $x->property_uid;
		}

	$query             = "SELECT propertys_uid,property_name FROM #__jomres_propertys ORDER BY property_name";
	$propertyList      = doSelectSql( $query );
	
	$propertyIdArray   = array ();
	$propertynameArray = array ();
	foreach ( $propertyList as $property )
		{
		$propertyIdArray[ $property->propertys_uid ]   = $property->propertys_uid;
		$propertynameArray[ $property->propertys_uid ] = $property->property_name;
		}

	$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
	$basic_property_details->get_property_name_multi( $propertyIdArray );

	$query         = "SELECT userid,username FROM #__jomres_managers";
	$managerList   = doSelectSql( $query );
	$managersArray = array ();
	foreach ( $managerList as $m )
		{
		$managersArray[ $m->userid ] = $m->username;
		}
	
	$output['USERNAME'] = $managersArray[ $userid ];
	
	$rows = array ();
	foreach ( $propertyIdArray as $i )
		{
		$r                = array ();
		$propertyManagers = "";
		if (isset($managersToPropertysArray[ $i ]))
			{
			$managers         = $managersToPropertysArray[ $i ];
			if ( count( $managers ) > 0 )
				{
				foreach ( $managers as $m )
					{
					$propertyManagers .= $managersArray[ $m ] . ", ";
					}
				$propertyManagers = substr( $propertyManagers, 0, -2 );
				}
			}
		else
			{
			$propertyManagers = '';
			}
		if ( $i % 2 ) $row = "1";
		$checked = "";
		if ( in_array( $propertyIdArray[ $i ], $managersToPropertyArray ) ) $checked = "checked";
		$r[ 'INPUT' ]        = '<input type="checkbox" id="cb' . count( $rows ) . '" name="chosenHotel[]" value="' . $propertyIdArray[ $i ] . '" ' . $checked . '>';
		$r[ 'PROPERTYNAME' ] = $basic_property_details->property_names[$i];
		$r[ 'MANAGERS' ]     = $propertyManagers;
		$rows[ ]             = $r;
		}

	$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
	$jrtb   = $jrtbar->startTable();
	$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
	$link   = get_showtime( 'live_site' ) . "/" . JOMRES_ADMINISTRATORDIRECTORY . "/index.php?option=com_jomres";
	
	$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=managers_choose", '' );
	$jrtb .= $jrtbar->customToolbarItem( 'saveProfile', $link, jr_gettext( "_JOMRES_COM_MR_SAVE", '_JOMRES_COM_MR_SAVE', false ), $submitOnClick = true, $submitTask = "saveProfile", $image );
	
	$jrtb .= $jrtbar->endTable();
	$output[ 'JOMRESTOOLBAR' ] = $jrtb;

	$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ]            = JOMRES_SITEPAGE_URL_ADMIN;
	$output[ '_JRPORTAL_PROPERTIES_PROPERTYNAME' ]    = jr_gettext( "_JRPORTAL_PROPERTIES_PROPERTYNAME", '_JRPORTAL_PROPERTIES_PROPERTYNAME', false );
	$output[ '_JOMRES_SHOWPROFILES_USERSWITHACCESS' ] = jr_gettext( "_JOMRES_SHOWPROFILES_USERSWITHACCESS", '_JOMRES_SHOWPROFILES_USERSWITHACCESS', false );
	$output[ 'TOTALINLISTPLUSONE' ]                   = count( $rows ) + 1;


	$pageoutput[ ] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
	$tmpl->readTemplatesFromInput( 'edit_profile.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->addRows( 'rows', $rows );
	$tmpl->displayParsedTemplate();
	}


function saveProfile()
	{
	$userid               = jomresGetParam( $_POST, 'userid', 0 );
	$superpropertymanager = jomresGetParam( $_POST, 'superpropertymanager', 0 );
	$accesslevel          = jomresGetParam( $_POST, 'accesslevel', 0 );
	$chosenHotels         = jomresGetParam( $_POST, 'chosenHotel', array () );
	if ( count( $chosenHotels ) == 0 && $superpropertymanager == 0 )
		{
		echo "Error, you need to assign at least one property to this user";

		return;
		}
	updateManagerIdToPropertyXrefTable( $userid, $chosenHotels );
	if ( $accesslevel == 1 )
		{
		$acsLvlStr = ", pu='0'";
		$query     = "UPDATE #__jomres_managers SET `access_level` = '$accesslevel' " . $acsLvlStr . " WHERE userid = '" . (int) $userid . "'";
		}
	else
		{
		$acsLvlStr = ", pu='" . $superpropertymanager . "'";
		$query     = "UPDATE #__jomres_managers SET `access_level` = '$accesslevel' " . $acsLvlStr . " WHERE userid = '" . (int) $userid . "'";
		}
	if ( doInsertSql( $query, 'Changed access level to ' . $accesslevel ) )
		{
		// If this is a super property manager, then we can grab all the property uids, return the first one and set the default property as that property uid. If we don't, the user will bomb out on login
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();
		
		if ( $superpropertymanager == 1 )
			{
			$all_properties_in_system = get_showtime( 'all_properties_in_system');
			$property_uid = $all_properties_in_system[0];
			$query        = "UPDATE #__jomres_managers SET `currentproperty`='".(int)$property_uid."' WHERE userid = '" . $userid . "'";
			if ( !doInsertSql( $query, false ) ) 
				trigger_error( "Unable to set current property, mysql db failure", E_USER_ERROR );
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=managers_choose" ), jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', false ) );
			}
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=managers_choose" ), jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', false ) );
		}


	}

/**
#
 * Grants or removes a user's access to the system
#
 */
function grantMosUser()
	{
	$userid   = (int) jomresGetParam( $_GET, 'userid', 0 );
	$grantAct = jomresGetParam( $_GET, 'grantAct', '' );

	if ( isset( $_GET[ 'name' ] ) )
		{
		$name      = jomresGetParam( $_GET, 'name', '' );
		$all_users = jomres_cmsspecific_getCMSUsers();
		foreach ( $all_users as $user )
			{
			if ( strtolower( trim($user[ 'username' ]) ) == strtolower( trim($name)) )
				{
				$userid = (int) $user[ 'id' ];
				}
			}
		}
	else
		{
		$userid = (int) jomresGetParam( $_REQUEST, 'userid', 0 );
		}

	if ( $userid > 0 )
		{
		$userList = jomres_cmsspecific_getCMSUsers();
		$username = '';
		foreach ( $userList as $u )
			{
			if ( $u[ 'id' ] == $userid ) $username = $u[ 'username' ];
			}
		$apikey = createNewAPIKey();
		if ( $grantAct == "y" ) 
			{
			$query = "INSERT INTO #__jomres_managers (`userid`,`username`,`property_uid`,`access_level`,`currentproperty`,`apikey`)VALUES ('" . (int) $userid . "','$username','-1','1','-1','$apikey')";
			doInsertSql( $query, '' );
			}
		else
			{
			$query = "DELETE FROM #__jomres_managers WHERE `userid` = '" . (int) $userid . "'";
			doInsertSql( $query, '' );
			
			$query = "DELETE FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '" . (int) $userid . "'";
			doInsertSql( $query, '' );
			}
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();
		
		if ( $grantAct == "y" ) 
			{
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN . "&task=editProfile&id=" . (int) $userid ), jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', false ) );
			}
		else
			{
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=managers_choose" ), jr_gettext( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', false ) );
			}
		}
	else
		{
		echo "Hmm, that userid is 0";
		}
	}

