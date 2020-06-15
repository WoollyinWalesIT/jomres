<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000connected
{
	function __construct($componentArgs) {
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false; return;
			}
		$eLiveSite = get_showtime('eLiveSite');
		$ePointFilepath = get_showtime('ePointFilepath');

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if (isset( $_REQUEST['response'] )) {
			$connection_configuration = base64_decode( $_REQUEST['response']);
			$connection_configuration = json_decode($connection_configuration);
			if ( !isset($connection_configuration->license_key) || !isset($connection_configuration->account_id) ) {
				return;
			} else {

				$_POST['enabled'] = 1;
				savePlugin('connect');

				$MiniComponents->specificEvent('16000', 'addplugin', array('plugin' => 'connect', 'autoupgrade' => true));

				$this->siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
				$this->siteConfig->update_setting('licensekey', $connection_configuration->license_key );
				$this->siteConfig->update_setting('connection_account_id', $connection_configuration->account_id );
				$this->siteConfig->update_setting('platform_connected', 1 );
				$this->siteConfig->save_config();
				
				if (file_exists( JOMRES_TEMP_ABSPATH.'key.php') ){
					unlink(JOMRES_TEMP_ABSPATH.'key.php');
				}
				if (file_exists( JOMRES_TEMP_ABSPATH.'license_key_check_cache.php') ){
					unlink(JOMRES_TEMP_ABSPATH.'license_key_check_cache.php');
				}

				$jomres_check_support_key = jomres_singleton_abstract::getInstance('jomres_check_support_key');
				$jomres_check_support_key->check_license_key(true);
				sleep(4);
				echo '<script type="text/javascript"><!--
					setTimeout(\'self.close()\', 50);
					//--></script>';
				exit;
			}
		}
	}


	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals() {
		return null;
		}
}
