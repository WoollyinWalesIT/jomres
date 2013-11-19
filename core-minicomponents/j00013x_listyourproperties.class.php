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
				$subs[ 'SUBSCRIPTION_STATUS' ]=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1, false ) . $allowedProperties . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2, false );
				$subs[ 'SUBSCRIPTION_STATUS' ].=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4, false ) . count( $existingProperties ) . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5, false );
				if ( $allowedProperties == $existingProperties ) 
					$subs[ 'SUBSCRIPTION_STATUS' ].=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3, false );
				}
			}

		$output[ 'PAGETITLE' ]          = jr_gettext( "_JRPORTAL_CPANEL_LISTPROPERTIES", _JRPORTAL_CPANEL_LISTPROPERTIES, false );
		$output[ 'HPROPERTYNAME' ]      = jr_gettext( "_JRPORTAL_PROPERTIES_PROPERTYNAME", _JRPORTAL_PROPERTIES_PROPERTYNAME );
		$output[ 'HPROPERTY_STREET' ]   = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET );
		$output[ 'HPROPERTY_TOWN' ]  	= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN );
		$output[ 'HPROPERTY_REGION' ]   = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
		$output[ 'HPROPERTY_COUNTRY' ]  = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY );
		$output[ 'HPROPERTY_POSTCODE' ] = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE );
		$output[ 'HPROPERTY_TEL' ] 		= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE );
		$output[ 'HPROPERTY_EMAIL' ] 	= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL );
		
		$output['AJAX_URL']=JOMRES_SITEPAGE_URL_AJAX."&task=listyourproperties_ajax";
		$pageoutput[ ] = $output;
		$subsoutput[ ] = $subs;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_properties.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'subs', $subsoutput );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}