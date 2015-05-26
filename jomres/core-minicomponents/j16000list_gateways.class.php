<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_gateways
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{$this->template_touchable = false;return;}
		
		$gateway_plugins = array();
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$MiniComponents->triggerEvent( '10509', $componentArgs );
		$mcOutput = $MiniComponents->getAllEventPointsData( '10509' );
		if ( count( $mcOutput ) > 0 )
			{
			foreach ( $mcOutput as $key => $val )
				{
				$gateway_plugins[] =  $val;
				}
			}
		
		if ( count ($gateway_plugins) > 0 )
			{
			$output[ '_JOMRES_COM_A_GATEWAY_ENABLED' ]	= jr_gettext( "_JOMRES_COM_A_GATEWAY_ENABLED", _JOMRES_COM_A_GATEWAY_ENABLED, false );
			$output[ 'TOUR_ID_TAB_GATEWAYS_TITLE' ]		= jr_gettext( "TOUR_ID_TAB_GATEWAYS_TITLE", TOUR_ID_TAB_GATEWAYS_TITLE, false );
			
			
			$rows = array();
			
			foreach ( $gateway_plugins as $gateway )
				{
				$r = array();
				
				$active_index = 'gateway_setting_'.$gateway['name']."_active";
				if (!isset($jrConfig[$active_index]))
					$jrConfig[$active_index] = 0;
					
				if ($jrConfig[$active_index] =="1" )
					$r['ACTIVE']=jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,false);
				else
					$r['ACTIVE']=jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,false);
				$r['GATEWAY_NAME'] = $gateway['friendlyname'];
				$r['EDIT_URL'] =  JOMRES_SITEPAGE_URL_ADMIN."&task=edit_gateway&plugin=".$gateway['name'];
				
				$rows[ ]         = $r;
				}
			
			$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb   = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
			$jrtb .= $jrtbar->toolbarItem( 'new', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=edit_gateway" ), '' );
			
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_gateways.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			echo "No gateways installed";
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}