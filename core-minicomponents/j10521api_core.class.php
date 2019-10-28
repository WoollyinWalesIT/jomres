<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10521api_core
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

		$siteConfig		 = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig		   = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];

		if (!isset($jrConfig[ 'api_core_show' ]))
			$jrConfig[ 'api_core_show' ] =1;
		
		// make a standard yes/no list
		$yesno	= array ();
		$yesno[ ] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false ) );
		$yesno[ ] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false ) );

		$configurationPanel->insertHeading( jr_gettext( "_OAUTH_CONFIG", '_OAUTH_CONFIG', false ) );
			
		$configurationPanel->setleft( jr_gettext( '_OAUTH_CONFIG_SHOW', '_OAUTH_CONFIG_SHOW', false ) );
		$configurationPanel->setmiddle( jomresHTML::selectList( $yesno, 'cfg_api_core_show', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'api_core_show' ] ) );
		$configurationPanel->setright( jr_gettext( '_OAUTH_CONFIG_SHOW_DESC', '_OAUTH_CONFIG_SHOW_DESC', false ) );
		$configurationPanel->insertSetting();
		
		if (!isset($jrConfig['api_token_lifetime'])) {
			$jrConfig['api_token_lifetime'] = 31536000;// 365 days
		}

		$configurationPanel->setleft( jr_gettext( 'API_TOKEN_LIFETIME', 'API_TOKEN_LIFETIME', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_api_token_lifetime" value="'.$jrConfig[ 'api_token_lifetime' ].'" />' );
		$configurationPanel->setright( jr_gettext( 'API_TOKEN_LIFETIME_DESC', 'API_TOKEN_LIFETIME_DESC', false ) );
		$configurationPanel->insertSetting();
		
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
