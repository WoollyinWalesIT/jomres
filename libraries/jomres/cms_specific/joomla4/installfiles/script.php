<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
  
class com_jomresInstallerScript //http://joomla.stackexchange.com/questions/5687/script-not-running-on-plugin-installation
	{
    function preflight($type, $parent) {}
     
    function install($parent) {}
 
    function update($parent) {}
 
    function uninstall($parent) 
		{
		$jversion = new JVersion();

		if ($jversion->RELEASE == "2.5")
			$sep = DS;
		else
			$sep = DIRECTORY_SEPARATOR;
		
		define( '_JOMRES_INITCHECK', 1 );

		if (file_exists(JPATH_ROOT.$sep.'jomres_root.php')) {
			require_once JPATH_ROOT.$sep.'jomres_root.php';
		} else {
			return;
		}

		if (file_exists(JPATH_ROOT.$sep.JOMRES_ROOT_DIRECTORY.$sep.'integration.php')) {
			require_once JPATH_ROOT.$sep.JOMRES_ROOT_DIRECTORY.$sep.'integration.php';
		} else {
			return;
		}

		$jomres_uninstall = jomres_singleton_abstract::getInstance('jomres_uninstall');
		$jomres_uninstall->uninstall();
		}
 
    function postflight($type, $parent)
		{
		// Clear Joomla system cache.
		/** @var JCache|JCacheController $cache */
		$cache = JFactory::getCache();
		$cache->clean('_system');

		// Remove all compiled files from APC cache.
		if (function_exists('apc_clear_cache')) {
			@apc_clear_cache();
		}

		if ($type == 'uninstall') return true;
		
		// These lines send a message to our update server to tell us that an installation was performed through the Joomla Install from Web feature
		// We do not record any other information except the time that the request was sent, it is done purely so that we can get an understanding of 
		// how popular the Joomla web installer feature is so we can decide if there's a value in supporting this functionality.
		// We do NOT record any information about your server, IP number or any other identifying details.

		$curl_handle = curl_init();
		curl_setopt( $curl_handle, CURLOPT_URL, 'http://updates.jomres4.net/record_installation.php?');
		curl_setopt($curl_handle, CURLOPT_TIMEOUT, 1 );
		curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres Joomla web installer' );
		$response = curl_exec( $curl_handle );
		curl_close( $curl_handle );
		
		// Let's get on with the business of installing Jomres
		
		$dir_path = str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;
		define('JOMRESPATH_BASE', $dir_path );

		$jversion = new JVersion();
		
		if ($jversion->RELEASE == "2.5")
			$sep = DS;
		else
			$sep = DIRECTORY_SEPARATOR;
			
 		JFile::copy(
			JPATH_ROOT.$sep.'components'.$sep.'com_jomres'.$sep.'jomres_webinstall.php' , 
			JPATH_ROOT.$sep.'jomres_webinstall.php'
			);
		
		$jomresConfig_live_site = rtrim(str_replace('/administrator', '', JURI::base()), '/');

		if (file_exists(JPATH_ROOT.$sep.'jomres_webinstall.php') )
			{
			JFile::delete(JPATH_ROOT.$sep.'components'.$sep.'com_jomres'.$sep.'jomres_webinstall.php');
			$url=$jomresConfig_live_site.'/jomres_webinstall.php?modal=1';
			
			$app = JFactory::getApplication();
			//$app->enqueueMessage("<script>document.location.href='".$url."';</script>");
			
			if (version_compare(JVERSION, '3.0', '>')) 
				{
				$modal = 
<<<EOS
<style type="text/css">
#jomres-installation-modal .modal.fade.in {top:5%;}
#jomres-installation-modal .modal {left:5%;margin-left:0;width:90%}
#jomres-installation-modal .modal-body {max-height:700px;}
</style>
<div class="modal modal-lg hide fade" id="jomres-installation-modal">
	<div class="modal-body">
		<iframe name="jomres_home" src="$url" title="" width="100%" height="650" scrolling="yes" frameborder="0"></iframe>
	</div>
</div>
<script>jQuery('#jomres-installation-modal').remove().prependTo('body').modal({backdrop: 'static', keyboard: false})</script>
EOS;
				} 
			else 
				{
				$modal = "<script>window.addEvent('domready',function(){SqueezeBox.open('{$url}',{size:{x:530,y:140},sizeLoading:{x:530,y:140},closable:false,handler:'iframe'});});</script>";
				}
			$app->enqueueMessage('Installing Jomres... '.$modal);
			
			return true;
			}
		else
			{
			echo 'Error, couldn\'t copy '.JPATH_ROOT.$sep.'components'.$sep.'com_jomres'.$sep.'jomres_webinstall.php to '.JPATH_ROOT.$sep.'jomres_webinstall.php <br/>';
			echo 'Please manually copy the file to '.JPATH_ROOT.$sep.' then run it by visiting '.$jomresConfig_live_site.'/jomres_webinstall.php';
			}
		}
	}