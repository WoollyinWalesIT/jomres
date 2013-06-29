<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j00013x_listyourproperties
	{
	function j00013x_listyourproperties()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		$task       = get_showtime( 'task' );
		if ( $thisJRUser->superPropertyManager || $thisJRUser->accesslevel == 1 ) return;

		if ( $jrConfig[ 'useSubscriptions' ] == "1" )
			{
			//if ($thisJRUser->accesslevel == 2 && (strlen($task)==0 || $task=="list_subscription_packages" || $task == "listyourproperties" || $task == "publishProperty") )
			if ( $thisJRUser->accesslevel == 2 )
				{
				$allowedProperties  = subscribers_getAvailablePropertySlots( $thisJRUser->id );
				$existingProperties = subscribers_getManagersPublishedProperties( $thisJRUser->id );
				echo jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1, false ) . $allowedProperties . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2, false );
				echo jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4, false ) . count( $existingProperties ) . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5, false );
				if ( $allowedProperties == $existingProperties ) echo jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3, false );
				}
			}
		$rows = array ();

		$query              = "SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '" . $thisJRUser->id . "'";
		$managersProperties = doSelectSql( $query );
		$mp                 = array ();
		foreach ( $managersProperties as $p )
			{
			$mp[ ] = (int) $p->property_uid;
			}
		$clause = "WHERE ";
		$clause .= genericOr( $mp, 'propertys_uid' );

		$query                 = "SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,published,apikey
		FROM #__jomres_propertys " . $clause . " LIMIT " . count( $mp );
		$jomresPropertyList    = doSelectSql( $query );
		$output[ 'PAGETITLE' ] = jr_gettext( '_JRPORTAL_CPANEL_LISTPROPERTIES', _JRPORTAL_CPANEL_LISTPROPERTIES, false );;
		$output[ 'TOTALINLISTPLUSONE' ] = count( $crateList );
		$output[ 'HPROPERTYNAME' ]      = jr_gettext( '_JRPORTAL_PROPERTIES_PROPERTYNAME', _JRPORTAL_PROPERTIES_PROPERTYNAME, false );;
		$output[ 'HPROPERTYADDRESS' ] = jr_gettext( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', _JRPORTAL_PROPERTIES_PROPERTYADDRESS, false );;
		$output[ 'HCRATE_DROPDOWN' ] = jr_gettext( '_JRPORTAL_CRATE_VALUE', _JRPORTAL_CRATE_VALUE, false );;
		$output[ 'LEGEND' ] = jr_gettext( '_JRPORTAL_PROPERTIES_LEGEND', _JRPORTAL_PROPERTIES_LEGEND, false );;
		foreach ( $jomresPropertyList as $p )
			{
			$r         = array ();
			$published = $p->published;
			$jrtbar    = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb      = $jrtbar->startTable();
			if ( !$published ) $jrtb .= $jrtbar->toolbarItem( 'unpublish', jomresURL( JOMRES_SITEPAGE_URL . '&task=publishProperty' . jomresURLToken() . '&property_uid=' . $p->propertys_uid ), jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISH', _JOMRES_COM_MR_VRCT_PUBLISH, false ) );
			else
			$jrtb .= $jrtbar->toolbarItem( 'publish', jomresURL( JOMRES_SITEPAGE_URL . '&task=publishProperty' . jomresURLToken() . '&property_uid=' . $p->propertys_uid ), jr_gettext( '_JOMRES_COM_MR_VRCT_UNPUBLISH', _JOMRES_COM_MR_VRCT_UNPUBLISH, false ) );
			$r[ 'PUBLISHLINK' ]     = $jrtb .= $jrtbar->endTable();
			$r[ 'PROPERTYNAME' ]    = jomres_decode( $p->property_name );
			$r[ 'SWITCHLINK' ]      = jomresURL( JOMRES_SITEPAGE_URL . '&thisProperty=' . $p->propertys_uid );
			$r[ 'PROPERTYADDRESS' ] = jomres_decode( $p->property_street ) . ', ' . jomres_decode( $p->property_town ) . ', ' . jomres_decode( $p->property_region ) . ', ' . jomres_decode( $p->property_country ) . ', ' . $p->property_postcode;
			$rows[ ]                = $r;
			}

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_properties.html' );
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