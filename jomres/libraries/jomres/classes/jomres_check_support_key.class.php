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

class jomres_check_support_key
	{
	function __construct( $task, $pk = "", $plugin = "" )
		{
		$this->task      = $task;
		$this->key_valid = false;
		
		if ( isset( $_REQUEST[ 'support_key' ] ) && strlen( $_REQUEST[ 'support_key' ] ) > 0 ) 
			$this->save_key( $task );
		
		$this->check_license_key( $pk, $plugin );
		}

	function check_license_key( $pk, $plugin )
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig	= $siteConfig->get();
		
		// if (strlen(trim($jrConfig['licensekey']))==0)
		// {
		// $this->show_key_input();
		// }

		if ( trim($pk) == "" )
			{
			$this->key_hash = $jrConfig['licensekey'];
			$str            = "key=" . $jrConfig['licensekey'];
			}
		else
			{
			$this->key_hash = $pk;
			$str            = "plugin_key=" . $pk . "&plugin=" . $plugin;
			}

		$license_checked = queryUpdateServer( "check_key.php", $str, "updates" );
		$ret_result      = (int) $license_checked;
		
		if ( $ret_result == 2 ) 
			$this->key_valid = true;
		}

	function show_key_input()
		{
		?>
		<center>
			<form action="<?php echo $this->task; ?>" method="post">
				<div class="jomresinstaller_panel">
					Please enter your support number in the following field.<br/>
					<input class="inputbox" type="text" name="support_key" value="" size="35"/>
				</div>
				<button name="combo" type="submit" value="0"><strong>Save support key</strong></button>
			</form>
		</center>
		<?php
		}

	function save_key( $return_url )
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig	= $siteConfig->get();
		
		$jrConfig['licensekey'] = trim( $_REQUEST[ 'support_key' ] );
		
		file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'configuration.php', 
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' . var_export($jrConfig, true) . ';
');

		return true;
		}

	}
