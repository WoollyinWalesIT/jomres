<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################
	#[AllowDynamicProperties]
class j06001payment_gateway_cancel_button {
	function __construct()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false; return;
			}
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', [ ['BLANK' => ''] ]); // Need this blank element here, it doesn't do anything but without it the COMMON strings won't be used in the template file.
		$tmpl->readTemplatesFromInput('payment_gateway_cancel_button.html');
		$tmpl->displayParsedTemplate();
		}

	function getRetVals()
		{
		return null;
		}
	}
