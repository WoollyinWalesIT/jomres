<?php
/**
 * Connect plugin
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
 *
 * This file is NOT open source and you are not allowed to distribute it, for any reason.
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j10501connect
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$ePointFilepath = get_showtime('ePointFilepath');
		
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();



		if (!isset($jrConfig[ 'connection_account_id' ])) {
			$jrConfig[ 'connection_account_id' ] = '';
		}
		if (!isset($jrConfig[ 'platform_connected' ])) {
			$jrConfig[ 'platform_connected' ] = 0;
		}

		if (!isset($jrConfig[ 'live_secret_key' ])) {
			$jrConfig[ 'live_secret_key' ] = '';
		}

		if (!isset($jrConfig[ 'test_secret_key' ])) {
			$jrConfig[ 'test_secret_key' ] = '';
		}

		$yesno = array();
		$yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

		if ( !isset($jrConfig[ 'admin_options_level' ]) ) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		if ( $jrConfig[ 'admin_options_level' ] < 2 ) {
			return;
		}

		$configurationPanel=$componentArgs['configurationPanel'];

		$configurationPanel->startPanel(jr_gettext('JOMRES_PLATFORM', 'JOMRES_PLATFORM', false));

		$configurationPanel->setleft( jr_gettext( 'JOMRES_PLATFORM_CONNECTED', 'JOMRES_PLATFORM_CONNECTED', false ) );
		$configurationPanel->setmiddle( jomresHTML::selectList( $yesno, 'cfg_platform_connected', 'class="inputbox" size="1"', 'value', 'text', $jrConfig[ 'platform_connected' ] ) );
		$configurationPanel->setright( jr_gettext( 'JOMRES_PLATFORM_CONNECTED_DESC', 'JOMRES_PLATFORM_CONNECTED_DESC', false ) );
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('JOMRES_PLATFORM_ACCOUNT_ID', 'JOMRES_PLATFORM_ACCOUNT_ID', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_connection_account_id" value="'.$jrConfig[ 'connection_account_id' ].'">');
		$configurationPanel->setright(jr_gettext('JOMRES_PLATFORM_ACCOUNT_ID_DESC', 'JOMRES_PLATFORM_ACCOUNT_ID_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('JOMRES_PLATFORM_LIVE_SECRET_KEY', 'JOMRES_PLATFORM_LIVE_SECRET_KEY', false));
		$configurationPanel->setmiddle('<input type="password" class="input-large" name="cfg_live_secret_key" value="'.$jrConfig[ 'live_secret_key' ].'">');
		$configurationPanel->setright(jr_gettext('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('JOMRES_PLATFORM_TEST_SECRET_KEY', 'JOMRES_PLATFORM_TEST_SECRET_KEY', false));
		$configurationPanel->setmiddle('<input type="password" class="input-large" name="cfg_test_secret_key" value="'.$jrConfig[ 'test_secret_key' ].'">');
		$configurationPanel->setright(jr_gettext('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', 'JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', false));
		$configurationPanel->insertSetting();


		$configurationPanel->endPanel();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
