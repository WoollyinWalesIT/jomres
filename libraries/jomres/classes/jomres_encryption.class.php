<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

require_once(JOMRESPATH_BASE.'libraries'.JRDS.'php-encryption'.JRDS.'autoload.php');

use Defuse\Crypto\Exception\WrongKeyOrModifiedCiphertextException;
use Defuse\Crypto\Key;
use Defuse\Crypto\Crypto;
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_encryption
{
	private $encryption_key = '';
	
	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if (!isset($jrConfig['secret_key_location']) || $jrConfig['secret_key_location'] == '') {
			$this->key_location = JOMRESPATH_BASE;
		} else {
			$this->key_location = $jrConfig['secret_key_location'];
		}

		if (!file_exists($this->key_location."encryption_key.class.php")) {
			$this->generate_new_key();
		}
		
		$this->get_key();
	}
		
	/**
	 *
	 *
	 *
	 */

	private function generate_new_key()
	{
		$key = Key::createNewRandomKey();
			
		$str = '<?php
// Do NOT delete this file, otherwise you will not be able to decrypt guest data
#[AllowDynamicProperties]
class encryption_key 
{
	public function __construct()
	{
		$this->key = "'.$key->saveToAsciiSafeString().'";
	}
	
	public function get_key() 
	{
		if ( !isset($this->key) || $this->key == "" ) {
			throw new Exception("Encryption key not saved");
		}
		return $this->key;
	}
}
';

		if (!file_put_contents($this->key_location."encryption_key.class.php", $str)) {
			die("Error, unable to save encryption key file, is ".$this->key_location." writable by the web server? If it is, please ens");
		}
	}
		
	/**
	 *
	 *
	 *
	 */

	private function get_key()
	{
		try {
			require_once($this->key_location."encryption_key.class.php");
			$key_class = new encryption_key();
			$keyAscii = $key_class->get_key();
			$this->encryption_key = Key::loadFromAsciiSafeString($keyAscii);
		} catch (Exception $e) {
			throw new Exception('Cannot get encryption key');
		}
	}
		
	/**
	 *
	 *
	 *
	 */

	public function encrypt($string = '')
	{
		return Crypto::encrypt((string)trim($string), $this->encryption_key);
	}
	
	/**
	 *
	 *
	 *
	 */

	public function decrypt($ciphertext = '')
	{
		if (trim($ciphertext == '')) {
			return '';
		}
	
	/**
	 *
	 *
	 *
	 */

		if (is_null($ciphertext)) {
			return '';
		}
		try {
			return Crypto::decrypt($ciphertext, $this->encryption_key);
		} catch (WrongKeyOrModifiedCiphertextException $ex) {
			// An attack! Either the wrong key was loaded, or the ciphertext has
			// changed since it was created -- either corrupted in the database or
			// intentionally modified
			if (jomres_cmsspecific_areweinadminarea()) { // We can continue to allow Jomres to operate in admin area, but we must output a big fat warning
				if (!AJAXCALL) {
					echo '<p class="alert alert-danger">Error : unable to decrypt data. Has the encryption file been deleted/moved?</p>';
				}
			} else {
				throw new Exception('Unable to decrypt data ');
			}
		}
	}
}
