<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

/**
 *
 * Installation script run by the installer when it detects that we are installing on this CMS.
 *
 * Joomla 3 insists on adding html even when tmpl = component, so we'll nip that behaviour in the bud, thankyouverymuch Cheers Nic (http://www.akeebabackup.com/). Will assume the same for Joomla 4.
 *
 * @package Jomres\Core\CMS_Specific
 *
 */

if (AJAXCALL) {
	JFactory::getApplication()->close();
}

// If Jomres is set to Development mode, it will set it's own error handler. Here we'll hand error handling back to the host CMS once Jomres has done it's thing.
// Joomla's debug mode generates a lot of data and is slow, so during dev I've been enabling/disabling it as required, but I'd prefer to handle Jomres errors independently of Joomla or Wordpress
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();
if ($jrConfig[ 'development_production' ] != 'production') {
	//restore_error_handler();
	//set_error_handler('errorHandler');
}


