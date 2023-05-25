<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2022 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################
	#[AllowDynamicProperties]
class j00005stripe_standard
	{
	function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)  {
			$this->template_touchable=false; return;
			}

		if (!defined('STRIPE_API_VERSION')){
			define('STRIPE_API_VERSION' , "2022-08-01" );
		}

		require_once(JOMRES_LIBRARIES_ABSPATH.'vendor'.JRDS.'autoload.php');

	}

		
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
