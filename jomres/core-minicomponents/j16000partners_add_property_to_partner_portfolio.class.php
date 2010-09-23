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

class j16000partners_add_property_to_partner_portfolio
	{
	function j16000partners_add_property_to_partner_portfolio()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$default_discount = 0; // change this to change the default discount
		$property = strtolower(jomresGetParam( $_GET, 'property_name', '' ));
		$cms_userid = (int)jomresGetParam( $_GET, 'cmsuserid', 0 );
		$property_arr = explode(" : ",$property);
		//echo "Pretending to add ".$property_arr[1]." to the user's portfolio";
		
		$query = "SELECT id FROM #__jomres_partners_discounts WHERE property_id =".(int)$property_arr[1] ;
		$result = doSelectSql($query);
		if (count($result) == 0)
			{
			$query = "INSERT INTO #__jomres_partners_discounts (`partner_id`,`property_id`,`valid_from`,`valid_to`,`discount`) VALUES (".(int)$cms_userid.",".(int)$property_arr[1].",'','',".$default_discount.")";
			$result = doInsertSql($query,"");
			}
		
		$componentArgs=array();
		$componentArgs['cms_userid']=$cms_userid;
		echo $MiniComponents->specificEvent('16000','partner_list_discounts',$componentArgs);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}