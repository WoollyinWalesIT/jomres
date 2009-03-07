<?php
/**
#
 * JRPortal core file
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function invoices_getalllineitems_forinvoice($id)
	{
	$lineitems=array();
	$query = "SELECT * FROM #__jomresportal_lineitems WHERE `inv_id`=".(int)$id;
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$lineitems[$r->id]['id']			=$r->id;
			$lineitems[$r->id]['name']			=$r->name;
			$lineitems[$r->id]['description']	=$r->description;
			$lineitems[$r->id]['init_price']	=$r->init_price;
			$lineitems[$r->id]['init_qty']		=$r->init_qty;
			$lineitems[$r->id]['init_discount']	=$r->init_discount;
			$lineitems[$r->id]['init_total']	=$r->init_total;
			$lineitems[$r->id]['recur_price']	=$r->recur_price;
			$lineitems[$r->id]['recur_qty']		=$r->recur_qty;
			$lineitems[$r->id]['recur_discount']=$r->recur_discount;
			$lineitems[$r->id]['recur_total']	=$r->recur_total;
			$lineitems[$r->id]['tax_code']		=$r->tax_code;
			$lineitems[$r->id]['tax_description']=$r->tax_description;
			$lineitems[$r->id]['tax_rate']		=$r->tax_rate;
			$lineitems[$r->id]['inv_id']		=$r->inv_id;
			}
		}
	return $lineitems;
	
	}


function invoices_getallinvoices($dec,$status=null)
	{
	$invoices=array();
	$clause="";
	if (isset($status))
		$clause= " WHERE `status` = ".(int)$status." ";

	if ($dec)
		$clause.=" ORDER BY raised_date DESC";
	$query="SELECT * FROM #__jomresportal_invoices".$clause;
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$invoices[$r->id]['id']=$r->id;
			$invoices[$r->id]['cms_user_id']=$r->cms_user_id;
			$invoices[$r->id]['status']=$r->status;
			$invoices[$r->id]['raised_date']=$r->raised_date;
			$invoices[$r->id]['due_date']=$r->due_date;
			$invoices[$r->id]['paid']=$r->paid;
			$invoices[$r->id]['subscription']=$r->subscription;
			$invoices[$r->id]['init_total']=$r->init_total;
			$invoices[$r->id]['recur_total']=$r->recur_total;
			$invoices[$r->id]['recur_frequency']=$r->recur_frequency;
			$invoices[$r->id]['recur_dayofmonth']=$r->recur_dayofmonth;
			$invoices[$r->id]['currencycode']=$r->currencycode;
			}
		}
	return $invoices;
	}
	
function invoices_getinvoicesfor_juser($juser=0,$status=null)
	{
	$invoices=array();
	$clause="";
	if (isset($status))
		$clause= " AND `status` = ".(int)$status." ";
	$clause.=" ORDER BY raised_date DESC";
	$query="SELECT * FROM #__jomresportal_invoices WHERE `cms_user_id`='".(int)$juser."'".$clause;
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $r)
			{
			$invoices[$r->id]['id']=$r->id;
			$invoices[$r->id]['cms_user_id']=$r->cms_user_id;
			$invoices[$r->id]['status']=$r->status;
			$invoices[$r->id]['raised_date']=$r->raised_date;
			$invoices[$r->id]['due_date']=$r->due_date;
			$invoices[$r->id]['paid']=$r->paid;
			$invoices[$r->id]['subscription']=$r->subscription;
			$invoices[$r->id]['init_total']=$r->init_total;
			$invoices[$r->id]['recur_total']=$r->recur_total;
			$invoices[$r->id]['recur_frequency']=$r->recur_frequency;
			$invoices[$r->id]['recur_dayofmonth']=$r->recur_dayofmonth;
			$invoices[$r->id]['currencycode']=$r->currencycode;
			}
		}
	return $invoices;
	}
	
function invoices_makeInvoiceStatusDropdown( $selected='0' )
	{
	$statusOptions=array();
	$statusDropdown="";
	$statuses=array();
	$statuses[0]=_JRPORTAL_INVOICES_STATUS_UNPAID;
	$statuses[1]=_JRPORTAL_INVOICES_STATUS_PAID;
	$statuses[2]=_JRPORTAL_INVOICES_STATUS_CANCELLED;
	$statuses[3]=_JRPORTAL_INVOICES_STATUS_PENDING;

	foreach($statuses as $key=>$val)
		{
		$statusOptions[]=jomresHTML::makeOption( $key, $val );
		}
	$statusDropdown= jomresHTML::selectList($statusOptions, 'status', 'class="inputbox" size="1"', 'value', 'text', $selected);
	return $statusDropdown;
	}
?>