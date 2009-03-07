<?php
/**
#
 * Mini-component : Includes the cron class and triggers any cron jobs
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

class j06000cron_invoice
	{
	function j06000cron_invoice ()
		{
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$items=array();
		$processed_items=array();
		$query="SELECT * FROM #__jomresportal_orphan_lineitems";
		$result=doSelectSql($query);
		$counter=0;
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$items[$r->cms_user_id][$counter]['id']=$r-> id ;
				$items[$r->cms_user_id][$counter]['name']=$r-> name ;
				$items[$r->cms_user_id][$counter]['description']=$r-> description ;
				$items[$r->cms_user_id][$counter]['init_price']=$r-> init_price ;
				$items[$r->cms_user_id][$counter]['init_qty']=$r-> init_qty ;
				$items[$r->cms_user_id][$counter]['init_discount']=$r-> init_discount ;
				$items[$r->cms_user_id][$counter]['recur_price']=$r-> recur_price ;
				$items[$r->cms_user_id][$counter]['recur_qty']=$r-> recur_qty ;
				$items[$r->cms_user_id][$counter]['recur_discount']=$r-> recur_discount ;
				$items[$r->cms_user_id][$counter]['tax_code_id']=$r-> tax_code_id ;
				$counter++;
				}
			}
		foreach ( $items as $key=>$data)
			{
			$invoice_data= array();
			$invoice_data['cms_user_id']=$key;
			$invoice_data['due']=date("Y-m-d H-i-s");
			foreach ($data as $d)
				{
				$processed_items[]=$d['id'];
				$line_item_data = array (
					'tax_code_id'=>$d['tax_code_id'],
					'name'=>$d['name'],
					'description'=>$d['description'],
					'init_price'=>$d['init_price'],
					'init_qty'=>$d['init_qty'],
					'init_discount'=>$d['init_discount'],
					'recur_price'=>$d['recur_price'],
					'recur_qty'=>$d['recur_qty'],
					'recur_discount'=>$d['recur_discount']
					);
				$line_items[]=$line_item_data;
				}
			
			$invoice_handler = new invoicehandler();
			$invoice_handler->create_new_invoice($invoice_data,$line_items);
			}
		if (count($processed_items)>0)
			{
			$clause = genericOr($processed_items,'id');
			$query = "DELETE FROM #__jomresportal_orphan_lineitems WHERE ".$clause;
			$result=doInsertSql($query,"");
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}		
	}
	
?>