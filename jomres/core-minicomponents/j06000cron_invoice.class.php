<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06000cron_invoice
	{
	function j06000cron_invoice ()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
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
			
			jr_import('invoicehandler');
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