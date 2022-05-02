<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
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
