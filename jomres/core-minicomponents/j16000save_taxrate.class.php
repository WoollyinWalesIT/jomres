<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000save_taxrate {
	function j16000save_taxrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$id				= intval(jomresGetParam( $_POST, 'id', 0 ));
		$code			= jomresGetParam( $_POST, 'code', "" );
		$description	= jomresGetParam( $_POST, 'description', "" );
		$rate_val		= jomresGetParam( $_POST, 'rate', 0.00 );
		
		jr_import('jrportal_taxrate');
		$rate = new jrportal_taxrate();
		if ($id > 0)
			{
			$rate->id = $id;
			}
		$rate->code=$code;
		$rate->description=$description;
		$rate->rate=$rate_val;
		
		if ($id > 0)
			$rate->commitUpdateTaxRate();
		else
			$rate->commitTaxRate();
		//echo $rate->error;
		
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=list_taxrates"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>