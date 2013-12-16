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

class j06001listyourproperties
	{
	function j06001listyourproperties()
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
		
		$published=(int)jomresGetParam( $_POST, 'published', '2');
		$approved=(int)jomresGetParam( $_POST, 'approved', '2');

		$output=array();
		$subsoutput=array();
		$rows=array();
		$subs=array();
		
		if ( $jrConfig[ 'useSubscriptions' ] == "1" )
			{
			if ( !$thisJRUser->superPropertyManager && $thisJRUser->accesslevel == 2 )
				{
				$allowedProperties  = subscribers_getAvailablePropertySlots( $thisJRUser->id );
				$existingProperties = subscribers_getManagersPublishedProperties( $thisJRUser->id );
				$subs[ 'SUBSCRIPTION_STATUS' ]=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1, false ) . $allowedProperties . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2, false );
				$subs[ 'SUBSCRIPTION_STATUS' ].=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4, false ) . count( $existingProperties ) . jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5, false );
				if ( $allowedProperties == $existingProperties ) 
					$subs[ 'SUBSCRIPTION_STATUS' ].=jr_gettext( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3, false );
				}
			}
		
		$output[ 'PAGETITLE' ]          = jr_gettext( "_JOMRES_HLIST_PROPERTIES", _JOMRES_HLIST_PROPERTIES, false );
		$output[ 'HSTATUS' ] 			= jr_gettext( "_JRPORTAL_INVOICES_STATUS", _JRPORTAL_INVOICES_STATUS );
		$output[ 'HPROPERTYUID' ]       = 'Uid';
		$output[ 'HPROPERTYNAME' ]      = jr_gettext( "_JRPORTAL_PROPERTIES_PROPERTYNAME", _JRPORTAL_PROPERTIES_PROPERTYNAME );
		$output[ 'HPROPERTY_STREET' ]   = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET );
		$output[ 'HPROPERTY_TOWN' ]  	= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN );
		$output[ 'HPROPERTY_REGION' ]   = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
		$output[ 'HPROPERTY_COUNTRY' ]  = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY );
		$output[ 'HPROPERTY_POSTCODE' ] = jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE );
		$output[ 'HPROPERTY_TEL' ] 		= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE );
		$output[ 'HPROPERTY_EMAIL' ] 	= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL );
		$output[ 'HPROPERTY_FAX' ] 		= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX );
		$output[ 'HPROPERTY_STARS' ] 	= jr_gettext( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS", _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS );
		$output[ 'HPROPERTY_SUPERIOR' ] = jr_gettext( "JOMRES_SUPERIOR", JOMRES_SUPERIOR );
		$output[ 'HPROPERTY_LAT' ] 		= 'Lat';
		$output[ 'HPROPERTY_LONG' ] 	= 'Long';
		$output[ 'HAPPROVED' ] 			= jr_gettext( "_JOMRES_HSTATUS_APPROVED", _JOMRES_HSTATUS_APPROVED );
		$output[ 'HACTIVE' ] 			= jr_gettext( "_JOMRES_HSTATUS_CURRENT", _JOMRES_HSTATUS_CURRENT );
		$output[ 'HLEGEND' ] 			= jr_gettext( "_JOMRES_HLEGEND", _JOMRES_HLEGEND );
		
		if ($thisJRUser->accesslevel == 2)
			{
			$r=array();
			$r['HNEW_PROPERTY']= jr_gettext( '_JOMRES_COM_MR_NEWPROPERTY', _JOMRES_COM_MR_NEWPROPERTY, false );
			$r['NEW_PROPERTY_URL']=jomresUrl(JOMRES_SITEPAGE_URL.'&task=registerProp_step1');
			$rows[]=$r;
			}
		
		//filters output
		$output['HFILTER']= jr_gettext( '_JOMRES_HFILTER', _JOMRES_HFILTER, false );
		$output['HPUBLISHED_STATUS']= jr_gettext( '_JOMRES_HSTATUS_PUBLISHING', _JOMRES_HSTATUS_PUBLISHING, false );
		
		$options = array();
		$options[] = jomresHTML::makeOption( '2', jr_gettext( '_JOMRES_STATUS_ANY', _JOMRES_STATUS_ANY, false ) );
		$options[] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_STATUS_PUBLISHED', _JOMRES_STATUS_PUBLISHED, false ) );
		$options[] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_STATUS_NOT_PUBLISHED', _JOMRES_STATUS_NOT_PUBLISHED, false ) );
		$output['PUBLISHED_STATUS']=jomresHTML::selectList( $options, 'published','class="inputbox" size="1"', 'value', 'text', $published);
		
		$options = array();
		$options[] = jomresHTML::makeOption( '2', jr_gettext( '_JOMRES_STATUS_ANY', _JOMRES_STATUS_ANY, false ) );
		$options[] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false ) );
		$options[] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false ) );
		$output['APPROVED_STATUS']=jomresHTML::selectList( $options, 'approved','class="inputbox" size="1"', 'value', 'text', $approved);
		
		$output['AJAX_URL']=JOMRES_SITEPAGE_URL_AJAX."&task=listyourproperties_ajax&published=".$published."&approved=".$approved;

		$pageoutput[ ] = $output;
		$subsoutput[ ] = $subs;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_properties.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->addRows( 'subs', $subsoutput );
		$tmpl->displayParsedTemplate();
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}