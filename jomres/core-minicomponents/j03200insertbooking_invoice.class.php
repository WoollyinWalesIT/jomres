<?php
/**
#
 * Mini-component core file: 
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * 
 #
* @package Jomres
#
 */
class j03200insertbooking_invoice {
	/**
	#
	 * Inserts the booking. Receives the jomressession and a flag to indicated if the deposit has been paid
	#
	 */
	function j03200insertbooking_invoice($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $tmpBookingHandler,$thisJRUser;

		$this->results=array();
		$contract_uid=$componentArgs['contract_uid'];
		
		$single_person_suppliment		= $tmpBookingHandler->getBookingFieldVal("single_person_suppliment");
		$deposit_required				= $tmpBookingHandler->getBookingFieldVal("deposit_required");
		$extras							= $tmpBookingHandler->getBookingFieldVal("extras");
		$room_total						= $tmpBookingHandler->getBookingFieldVal("room_total");
		$tax							= $tmpBookingHandler->getBookingFieldVal("tax");
		$discounts						= $tmpBookingHandler->getBookingFieldVal("discounts");
		$resource						= $tmpBookingHandler->getBookingFieldVal("resource");
		if ($resource=="1")
			$depositPaid=true;
		else
			$depositPaid=false;
		if ($mrConfig['singleRoomProperty']==1)
			$discount=$tmpBookingHandler->getBookingFieldVal("lastminutediscount");
		else
			$discount=$tmpBookingHandler->getBookingFieldVal("wisepricediscount");

		$line_items= array();
		
		$line_item_data = array (
			'tax_code_id'=>0,
			'name'=>jr_gettext('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL',_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL,false,false),
			'description'=>'',
			'init_price'=>number_format($room_total,2),
			'init_qty'=>"1",
			'init_discount'=>"0",
			'recur_price'=>"0.00",
			'recur_qty'=>"0",
			'recur_discount'=>"0.00"
			);
		$line_items[]=$line_item_data;
		
		if ($depositPaid)
			{
			$line_item_data = array (
				'tax_code_id'=>0,
				'name'=>jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED',_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED,false,false),
				'description'=>'',
				'init_price'=>"-".number_format($deposit_required,2),
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
					'init_price'=>number_format($totalDiscountForRoom,2),
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
					'init_price'=>"-".number_format($totalDiscountForRoom,2),
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
				'tax_code_id'=>0,
				'name'=>jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST',_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST,false,false),
				'description'=>'',
				'init_price'=>number_format($single_person_suppliment,2),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$line_items[]=$line_item_data;
			}
			
		$extrasArray	=	explode(",",$extras);
		foreach ($extrasArray as $extraUid)
			{
			$query="SELECT name,price FROM #__jomres_extras WHERE uid = '".(int)$extraUid."' ORDER BY name";
			$extrasList= doSelectSql($query);
			foreach ($extrasList as $theExtras)
				{
				$line_item_data = array (
					'tax_code_id'=>0,
					'name'=>$theExtras->name,
					'description'=>'',
					'init_price'=>number_format($theExtras->price,2),
					'init_qty'=>"1",
					'init_discount'=>"0",
					'recur_price'=>"0.00",
					'recur_qty'=>"0",
					'recur_discount'=>"0.00"
					);
				$line_items[]=$line_item_data;
				}
			}
			
		if ($tax > 0)
			{
			$line_item_data = array (
				'tax_code_id'=>0,
				'name'=>jr_gettext('_JOMRES_COM_FRONT_ROOMTAX',_JOMRES_COM_FRONT_ROOMTAX,false,false),
				'description'=>'',
				'init_price'=>number_format($tax,2),
				'init_qty'=>"1",
				'init_discount'=>"0",
				'recur_price'=>"0.00",
				'recur_qty'=>"0",
				'recur_discount'=>"0.00"
				);
			$line_items[]=$line_item_data;
			}
			
		$invoice_data= array();
		$invoice_data['cms_user_id']=$tmpBookingHandler->tmpguest['mos_userid'];
		$invoice_data['subscription']=false;

		$invoice_handler = new invoicehandler();
		$invoice_handler->contract_id=$contract_uid;
		$invoice_handler->create_new_invoice($invoice_data,$line_items);
		$invoice_handler->mark_invoice_pending();
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