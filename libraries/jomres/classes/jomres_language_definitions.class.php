<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_language_definitions
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ($jrConfig[ 'language_context' ] != '') {
			$this->ptype = $jrConfig[ 'language_context' ];
		} else {
			$this->ptype = '0';
		}

		if (get_showtime('lang') != '') {
			$this->lang = get_showtime('lang');
		} else {
			$this->lang = 'en-GB';
		}

		$this->default_lang = $this->lang;
		$this->default_ptype = $this->ptype;

		$this->definitions = array();
	}
	
	/**
	 *
	 *
	 *
	 */

	public function set_language($lang = 'en-GB')
	{
		if (is_null($lang) || $lang == '') {
			$lang = $this->default_lang;
		}

		$this->lang = $lang;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function set_property_type($ptype = '')
	{
		if (is_null($ptype) || $ptype == '') {
			$ptype = $this->default_ptype;
		}

		$this->ptype = $ptype;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function define($constant, $string)
	{
		$this->definitions[ $this->ptype ][ $constant ] = $string;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_defined($constant, $default)
	{
		$jomres_machine_translations = jomres_singleton_abstract::getInstance('jomres_machine_translations');
		
		$this->set_property_type(get_showtime('property_type'));

		if (!array_key_exists($this->ptype, $this->definitions)) {
			$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
			$jomres_language->get_language($this->ptype);
		}
 
		if (!isset($this->definitions[ $this->default_ptype ][ $constant ])) {
			$translation = $jomres_machine_translations->get_translation($default, $constant, get_showtime('lang'));
			//var_dump($translation);exit;
		}
		
		if (isset($this->definitions[ $this->ptype ][ $constant ])) {
			return $this->definitions[ $this->ptype ][ $constant ];
		} elseif (isset($this->definitions[ $this->default_ptype ][ $constant ])) {
			return $this->definitions[ $this->default_ptype ][ $constant ];
		} else {
			return false;
		}
	}
	
	/**
	 *
	 *
	 *
	 */

	public function reset_lang_and_property_type()
	{
		$this->lang = $this->default_lang;
		$this->ptype = $this->default_ptype;
	}
}
