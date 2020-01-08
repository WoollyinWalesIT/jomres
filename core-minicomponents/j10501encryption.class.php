<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501encryption
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
 
		$configurationPanel->startPanel(jr_gettext('ENCRYPTION_TITLE', 'ENCRYPTION_TITLE', false));

		$configurationPanel->setleft(jr_gettext('ENCRYPTION_FILE_LOCATION', 'ENCRYPTION_FILE_LOCATION', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_secret_key_location" value="'.$jrConfig[ 'secret_key_location' ].'">');
		$configurationPanel->setright(jr_gettext('ENCRYPTION_FILE_LOCATION_DESC', 'ENCRYPTION_FILE_LOCATION_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
