<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_input_filter_singleton
	{
	private static $configInstance;

	public function __construct() 
		{
		$this->config = array();
		$this->init();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomres_input_filter_singleton();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	private function init()
		{

		}
		
	public function purify($dirty)
		{
		$clean = RemoveXSS($dirty);
		return $clean;
		}
		
	// private function init()
		// {
		// require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'htmlpurifier'.JRDS.'htmlpurifier-4.3.0-standalone'.JRDS.'HTMLPurifier.standalone.php');
		/* Allowed Elements in HTML */
		// $HTML_Allowed_Elms = 'a, abbr, acronym, b, blockquote, br, caption, cite, code, dd, del, dfn, div, dl, dt, em, h1, h2, h3, h4, h5, h6, i, img, ins, kbd, li, ol, p, pre, span, strong, sub, sup, table, tbody, td, tfoot, th, thead, tr, tt, ul, var';

		/* Allowed Element Attributes in HTML, element must also be allowed in Allowed Elements for these attributes to work. */
		// $HTML_Allowed_Attr = 'abbr.title, acronym.title, blockquote.cite, div.style, h1.style, h2.style, h3.style, h4.style, h5.style, h6.style, img.src, img.alt, img.title, img.class, img.style, img.height, img.width, ol.style, p.style, span.style, span.class, span.id, table.class, table.id, table.border, table.cellpadding, table.cellspacing, table.style, table.width, td.abbr, td.align, td.class, td.id, td.colspan, td.rowspan, td.style, td.valign, tr.align, tr.class, tr.id, tr.style, tr.valign, th.abbr, th.align, th.class, th.id, th.colspan, th.rowspan, th.style, th.valign, ul.style';

		// $config = HTMLPurifier_Config::createDefault();

		// $config->set('Cache', 'SerializerPath', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS);
		// $config->set('HTML', 'AllowedElements', $HTML_Allowed_Elms); // sets allowed html elements that can be used.
		// $config->set('HTML', 'AllowedAttributes', $HTML_Allowed_Attr); // sets allowed html attributes that can be used.

		// $config->set('Core', 'Encoding', 'UTF-8');
		// $config->set('HTML', 'Doctype', 'XHTML 1.0 Strict');
		// $config->set('HTML', 'TidyLevel', 'heavy');
		// $config->set('AutoFormat', 'RemoveEmpty', true);
		
		// $this->purifier = new HTMLPurifier($config);
		// }
		
	// public function purify($dirty)
		// {
		// $clean = $this->purifier->purify($dirty);
		// return $clean;
		// }
	}
?>