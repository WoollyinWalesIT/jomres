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

jr_import('dobooking');

class j02990add_tourist_tax {
	function __construct()
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		//if this is a secret key payment (for an approved booking enquiry) we don`t need to add the tourist tax again
		if (isset($_REQUEST['sk']))
			return;

		$tourist_tax = 0.00;
		
		$mrConfig=getPropertySpecificSettings();
		if (!isset($mrConfig['tourist_tax']))
			$mrConfig['tourist_tax'] = "0";
		if (!isset($mrConfig['tourist_tax_ispercentage']))
			$mrConfig['tourist_tax_ispercentage'] = "1";
		if (!isset($mrConfig['tourist_tax_wholebooking']))
			$mrConfig['tourist_tax_wholebooking'] = "0";
		
		$mrConfig['tourist_tax'] = (float)$mrConfig['tourist_tax'];
		
		$bkg=new booking();
		$this->bookingObject=$bkg;
		$bk=$this->bookingObject;
		if (strlen($bk->error_code)>0)
			$this->bookingObject=null;
		else
			unset($bk);
		
		$bkg->remove_third_party_extra("tourist_tax",0);
		
		if ($mrConfig['tourist_tax_ispercentage'] == "1")
			{
			if ($mrConfig['tourist_tax_wholebooking'] == "1")
				$base_cost = $bkg->room_total+$bkg->extrasvalue+$bkg->single_person_suppliment;
			else
				$base_cost = $bkg->room_total;
			
			$tourist_tax = ($base_cost/100)*$mrConfig['tourist_tax'];
			}
		else
			{
			$tourist_tax = $mrConfig['tourist_tax'];
			}
		
		if ($tourist_tax > 0)
			$bkg->add_third_party_extra("tourist_tax",0,jr_gettext('_JOMRES_TOURIST_TAX_TITLE','_JOMRES_TOURIST_TAX_TITLE',false),$tourist_tax,0);
		
		$bkg->generateBilling();
		$bkg->storeBookingDetails();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
	
if (!class_exists('booking'))
	{ class booking extends dobooking { } }

