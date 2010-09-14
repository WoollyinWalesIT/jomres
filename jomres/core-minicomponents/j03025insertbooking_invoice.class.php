<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * 
 #
* @package Jomres
#
 */
class j03025insertbooking_invoice {
	/**
	#
	 * Inserts the booking. Receives the jomressession and a flag to indicated if the deposit has been paid
	#
	 */
	function j03025insertbooking_invoice($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$this->results=array();
		$contract_uid=$componentArgs['contract_uid'];
		
		$single_person_suppliment		= $tmpBookingHandler->getBookingFieldVal("single_person_suppliment");
		$deposit_required				= $tmpBookingHandler->getBookingFieldVal("deposit_required");
		$extras							= $tmpBookingHandler->getBookingFieldVal("extras");
		$extrasquantities				= $tmpBookingHandler->getBookingFieldVal("extrasquantities");
		$third_party_extras				= unserialize($tmpBookingHandler->getBookingFieldVal("third_party_extras"));
		$room_total						= $tmpBookingHandler->getBookingFieldVal("room_total");
		$tax							= $tmpBookingHandler->getBookingFieldVal("tax");
		$discounts						= $tmpBookingHandler->getBookingFieldVal("discounts");
		$resource						= $tmpBookingHandler->getBookingFieldVal("resource");
		$property_uid					= $tmpBookingHandler->getBookingFieldVal("property_uid");
		$extrasvalues_items				= unserialize($tmpBookingHandler->getBookingFieldVal("extrasvalues_items"));
		$depositpaidsuccessfully		= $tmpBookingHandler->getBookingFieldVal("depositpaidsuccessfully");
		$additional_line_items			= unserialize($tmpBookingHandler->getBookingFieldVal("additional_line_items"));

		if ($resource=="1")
			$depositPaid=true;
		else
			$depositPaid=false;
		if ($depositpaidsuccessfully)
			$depositPaid=true;
			
		if ($mrConfig['singleRoomProperty']==1)
			$discount=$tmpBookingHandler->getBookingFieldVal("lastminutediscount");
		else
			$discount=$tmpBookingHandler->getBookingFieldVal("wisepricediscount");

		
			
		$line_items= array();
		
		if (get_showtime('include_room_booking_functionality'))
			{
			$line_item_data = array (
				'tax_code_id'=>(int)$mrConfig['accommodation_tax_code'],
				'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL,false,false),
				'description'=>'',
				'init_price'=>number_format($room_total,5, '.', ''),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$line_items[]=$line_item_data;
			}
			
		if ($depositPaid)
			{
			$line_item_data = array (
				'tax_code_id'=>0,
				'name'=>jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED,false,false),
				'description'=>'',
				'init_price'=>"-".number_format($deposit_required,5, '.', ''),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$line_items[]=$line_item_data;
			}

		if (count($discounts) > 0)
			{
			foreach ($discounts as $d)
				{
				$totalDiscountForRoom = (float)$d['discountfrom'] - (float)$d['discountto'];
				$line_item_data = array (
					'tax_code_id'=>0,
					'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT,false,false),
					'description'=>'',
					'init_price'=>number_format($totalDiscountForRoom,5, '.', ''),
					'init_qty'=>"1",
					'init_discount'=>"0",
					'recur_price'=>"0.00",
					'recur_qty'=>"0",
					'recur_discount'=>"0.00"
					);
				$line_items[]=$line_item_data;
				$line_item_data = array (
					'tax_code_id'=>0,
					'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT,false,false),
					'description'=>'',
					'init_price'=>"-".number_format($totalDiscountForRoom,5, '.', ''),
					'init_qty'=>"1",
					'init_discount'=>"0",
					'recur_price'=>"0.00",
					'recur_qty'=>"0",
					'recur_discount'=>"0.00"
					);
				$line_items[]=$line_item_data;
				}
			}
			
		if ($single_person_suppliment > 0)
			{
			$line_item_data = array (
				'tax_code_id'=>(int)$mrConfig['accommodation_tax_code'],
				'name'=>jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST,false,false),
				'description'=>'',
				'init_price'=>number_format($single_person_suppliment,5, '.', ''),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$line_items[]=$line_item_data;
			}
			
		$this->taxrates = taxrates_getalltaxrates();
		$extrasArray	=	explode(",",$extras);
		foreach ($extrasArray as $extraUid)
			{
			//$values = 
			$query="SELECT name,price,tax_rate FROM #__jomres_extras WHERE uid = '".(int)$extraUid."' ORDER BY name";
			$extrasList= doSelectSql($query);
			foreach ($extrasList as $theExtras)
				{
				
				$quantity_multiplier = (int)$extrasvalues_items[(int)$extraUid]['quantity_multiplier'];
				$quant = $extrasquantities[$extraUid];
				$quantities = $quantity_multiplier*$quant;
				$extra_price=$theExtras->price;
				if ($mrConfig['prices_inclusive'] == 1)
					{
					jr_import("jrportal_taxrate");
					$taxrate = new jrportal_taxrate();
					$taxrate->id =$theExtras->tax_rate;
					if ($taxrate->getTaxRate())
						{
						$rate = (float)$taxrate->rate;
						$divisor	= ($rate/100)+1;
						$nett_price=$extra_price/$divisor;
						$extra_price = $nett_price;
						}
					}
				$line_item_data = array (
					'tax_code_id'=>$theExtras->tax_rate,
					'name'=>$theExtras->name,
					'description'=>'',
					'init_price'=>number_format($extra_price,5, '.', ''),
					'init_qty'=>$quantities,
					'init_discount'=>"0",
					'recur_price'=>"0.00",
					'recur_qty'=>"0",
					'recur_discount'=>"0.00"
					);
				$line_items[]=$line_item_data;
				}
			}

		if (count($third_party_extras)>0)
			{
			foreach ($third_party_extras as $plugin)
				{
				foreach ($plugin as $tpe)
					{
					if (!isset($tpe['tax_code_id']))
						$tpe['tax_code_id']=0;
					$line_item_data = array (
						'tax_code_id'=>$tpe['tax_code_id'],
						'name'=>$tpe['description'],
						'description'=>$tpe['description'],
						'init_price'=>number_format($tpe['untaxed_grand_total'],5, '.', ''),
						'init_qty'=>'1',
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"0",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;
					}
				}
			}
			
		if (count($additional_line_items)>0)
			{
			foreach ($additional_line_items as $plugin)
				{
				foreach ($plugin as $tpe)
					{
					if (!isset($tpe['tax_code_id']))
						$tpe['tax_code_id']=0;
					$line_item_data = array (
						'tax_code_id'=>$tpe['tax_code_id'],
						'name'=>$tpe['description'],
						'description'=>$tpe['description'],
						'init_price'=>number_format($tpe['untaxed_grand_total'],5, '.', ''),
						'init_qty'=>'1',
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"0",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;
					}
				}
			}

		$invoice_data= array();
		$invoice_data['cms_user_id']=$tmpBookingHandler->tmpguest['mos_userid'];
		$invoice_data['subscription']=false;
		

		if ($jrConfig['useGlobalCurrency'] == "1")
			$invoice_data['currencycode'] = $jrConfig['globalCurrencyCode'];
		else
			$invoice_data['currencycode'] = $mrConfig['property_currencycode'];

		jr_import('invoicehandler');
		$invoice_handler = new invoicehandler();
		$invoice_handler->contract_id=$contract_uid;
		$invoice_handler->property_uid=$property_uid;
		$invoice_handler->create_new_invoice($invoice_data,$line_items);
		if ($mrConfig['depAmount'] == 0)
			$invoice_handler->mark_invoice_pending();
		else
			$invoice_handler->mark_invoice_paid();
		$query = "UPDATE #__jomres_contracts SET invoice_uid = ".$invoice_handler->id." WHERE contract_uid = ".$contract_uid;
		doInsertSql($query,"");
		$this->results=array("invoice_id"=>$invoice_handler->id);
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->results;
		}
	}
?>