<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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


$bs_version = jomres_bootstrap_version();
if ($bs_version == '2') {
	jr_import('jomres_content_tabs_bootstrap');

	class jomres_content_tabs extends jomres_content_tabs_bootstrap
	{
	}
} elseif ($bs_version == '5') {
	if (this_cms_is_wordpress()) {
		jr_import('jomres_content_tabs_bootstrap5_wordpress');
		class jomres_content_tabs extends jomres_content_tabs_bootstrap5_wordpress
		{
		}
	} else {
		jr_import('jomres_content_tabs_bootstrap5');
		class jomres_content_tabs extends jomres_content_tabs_bootstrap5
		{
		}
	}
} else { // BS4
	jr_import('jomres_content_tabs_bootstrap4');
	class jomres_content_tabs extends jomres_content_tabs_bootstrap4
	{
	}
}
