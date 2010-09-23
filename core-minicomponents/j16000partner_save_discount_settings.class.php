<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000partner_save_discount_settings
	{
	function j16000partner_save_discount_settings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		
		$discount_id	= (int)jomresGetParam( $_GET, 'discount_id', 0 );
		$valid_from		= str_replace("/","-",JSCalConvertInputDates(jomresGetParam( $_GET, 'valid_from', '' )));
		$valid_to		= str_replace("/","-",JSCalConvertInputDates(jomresGetParam( $_GET, 'valid_to', '' )));
		$discount		= (float)jomresGetParam( $_GET, 'discount', 0 );
		$partner_id		= (int)jomresGetParam( $_GET, 'partner_id', 0 );
		$property_id	= (int)jomresGetParam( $_GET, 'property_id', 0 );
		
		if ($discount_id > 0)
			$query = "UPDATE #__jomres_partners_discounts SET `valid_from`= '".$valid_from."',`valid_to`= '".$valid_to."',`discount`= ".$discount." WHERE `id` = ".(int)$discount_id;
		else
			$query = "INSERT INTO #__jomres_partners_discounts (`partner_id`,`property_id`,`valid_from`,`valid_to`,`discount`) VALUES (".(int)$partner_id.",".(int)$property_id.",'".$valid_from."','".$valid_to."',".(float)$discount.")";
		$result = doInsertSql($query,"");
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}