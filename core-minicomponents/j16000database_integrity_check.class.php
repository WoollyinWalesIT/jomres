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

class j16000database_integrity_check
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$jomres_version = '<p>Jomres files version: '.$jrConfig['version'].'</p>';
		$jomres_db_version = '<p>Jomres database version: '.$jrConfig['jomres_db_version'].'</p>';
		
		if ($jrConfig['version'] > $jrConfig['jomres_db_version']) {
			echo '
<div class="alert alert-warning">
	<h3>WARNING: Jomres database tables are not up to date.</h3>'
	.$jomres_version.$jomres_db_version.
	'<p>Before attempting to solve this problem, please make a full site backup, then click the button below.</p>
	<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=jomres_install').'" class="btn btn-warning">Update database tables</a>
</div>';
		} elseif ($jrConfig['version'] < $jrConfig['jomres_db_version']) {
			echo '
<div class="alert alert-danger">
	<h3>ERROR: Jomres files are older than the database version.<h3>'
	.$jomres_version.$jomres_db_version.
	'<p>To solve this problem, you`ll need to run the Jomres update again or contact support for further assistance.</p>
</div>';
		} else {
			echo '
<div class="alert alert-success">
	<h3>Congratulations! No problems detected.</h3>'
	.$jomres_version.$jomres_db_version.
'</div>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
