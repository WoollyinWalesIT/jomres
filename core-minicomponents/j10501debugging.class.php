<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501debugging
	{
		function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];
		$lists 							= $componentArgs[ 'lists' ];
		$production_development_dropdown= $componentArgs[ 'production_development_dropdown' ];


		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$configurationPanel->startPanel( jr_gettext( "_JOMRES_DEBUGGING_TAB", '_JOMRES_DEBUGGING_TAB', false ) );
	
			$configurationPanel->setleft( jr_gettext( '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', false ) );
			$configurationPanel->setmiddle( $production_development_dropdown );
			$configurationPanel->setright( jr_gettext( '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', '_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_CONFIG_LOG_LOCATION', '_JOMRES_CONFIG_LOG_LOCATION', false ) );
			$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_log_path" value="' . $jrConfig[ 'log_path' ] . '" />' );
			$configurationPanel->setright( jr_gettext( '_JOMRES_CONFIG_LOG_LOCATION_DESC', '_JOMRES_CONFIG_LOG_LOCATION_DESC', false )." ".jr_gettext( '_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', '_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', false ).dirname(dirname(dirname(dirname(__FILE__)))).JRDS.'monolog' );
			$configurationPanel->insertSetting();

			$configurationPanel->setleft( jr_gettext( '_JOMRES_SAFEMODE', '_JOMRES_SAFEMODE', false ) );
			$configurationPanel->setmiddle( $lists[ 'safe_mode' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_SAFEMODE_DESC', '_JOMRES_SAFEMODE_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_A_ERRORCHECKING', '_JOMRES_COM_A_ERRORCHECKING', false ) );
			$configurationPanel->setmiddle( $lists[ 'errorChecking' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_A_ERRORCHECKING_DESC', '_JOMRES_COM_A_ERRORCHECKING_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_DUMPTEMPLATEDATA', '_JOMRES_COM_DUMPTEMPLATEDATA', false ) );
			$configurationPanel->setmiddle( $lists[ 'dumpTemplate' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', false ) );
			$configurationPanel->insertSetting();
			
			
			
			/* $configurationPanel->insertDescription(jr_gettext( '_JOMRES_COM_LOGGING_WARNING', '_JOMRES_COM_LOGGING_WARNING', false ));
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LOGGING_BOOKING', '_JOMRES_COM_LOGGING_BOOKING', false ) );
			$configurationPanel->setmiddle( $lists[ 'loggingBooking' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LOGGING_GATEWAY', '_JOMRES_COM_LOGGING_GATEWAY', false ) );
			$configurationPanel->setmiddle( $lists[ 'loggingGateway' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LOGGING_SYSTEM', '_JOMRES_COM_LOGGING_SYSTEM', false ) );
			$configurationPanel->setmiddle( $lists[ 'loggingSystem' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LOGGING_REQUEST', '_JOMRES_COM_LOGGING_REQUEST', false ) );
			$configurationPanel->setmiddle( $lists[ 'loggingRequest' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_LOGGING_JRPORTAL', '_JOMRES_COM_LOGGING_JRPORTAL', false ) );
			$configurationPanel->setmiddle( $lists[ 'loggingPortal' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting(); */
		
			$configurationPanel->endPanel();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
