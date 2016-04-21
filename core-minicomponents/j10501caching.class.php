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

class j10501caching
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

		$configurationPanel 		= $componentArgs[ 'configurationPanel' ];
		$lists 						= $componentArgs[ 'lists' ];

		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$configurationPanel->startPanel( jr_gettext( "_JOMRES_WORD_CACHING", '_JOMRES_WORD_CACHING', false ) );
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CACHING', '_JOMRES_COM_CACHING', false ) );
			$configurationPanel->setmiddle( $lists[ 'useArrayCaching' ] );
			$configurationPanel->setright( jr_gettext( '_JOMRES_COM_CACHING_DESC', '_JOMRES_COM_CACHING_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_WORD_PATTEMPLATE_CACHING', '_JOMRES_WORD_PATTEMPLATE_CACHING', false ) );
			$configurationPanel->setmiddle( $lists[ 'pattemplate_caching_enabled' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
		
			$configurationPanel->endPanel();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
