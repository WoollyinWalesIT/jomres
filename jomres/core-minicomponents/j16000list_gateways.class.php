<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
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
		
		$MiniComponents->triggerEvent( '10509', array ( "show_anyway" => true) );
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
			$output[ '_JOMRES_COM_A_GATEWAY_ENABLED' ]	= jr_gettext( "_JOMRES_COM_A_GATEWAY_ENABLED", '_JOMRES_COM_A_GATEWAY_ENABLED', false );
			$output[ 'TOUR_ID_TAB_GATEWAYS_TITLE' ]		= jr_gettext( "_JOMRES_COM_A_GATEWAYLIST", '_JOMRES_COM_A_GATEWAYLIST', false );
			$output[ 'GATEWAYS_INSTRUCTIONS' ]			= jr_gettext( "GATEWAYS_INSTRUCTIONS", 'GATEWAYS_INSTRUCTIONS', false );
			
			$rows = array();

			foreach ( $gateway_plugins as $gateway )
				{
				$r = array();
				$settings = get_plugin_settings($gateway['name'],0);
				if ( isset($settings['active']) && $settings['active'] =="1" )
					$r['ACTIVE']=jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',false);
				else
					$r['ACTIVE']=jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',false);
				
				$r['GATEWAY_NAME'] = $gateway['friendlyname'];
				
				if (!using_bootstrap())
					{
					$editIcon = '<img src="'.get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0" alt="editicon" />';
					
					$r['EDITLINK']= '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN."&task=edit_gateway&plugin=".$gateway['name']).'">'.$editIcon.'</a>' ;
					}
				else
					{
					$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
					$toolbar->newToolbar();
					$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=edit_gateway&plugin=' . $gateway['name'] ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
					
					$r['EDITLINK'] = $toolbar->getToolbar();
					}
				
				$rows[ ] = $r;
				}

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