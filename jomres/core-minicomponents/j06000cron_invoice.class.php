<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

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
				$items[$r->cms_user_id][$counter]['property_uid']=$r-> property_uid ;
				$counter++;
				}
			}
		
		
		if (count($items) > 0)
			{
			foreach ( $items as $key=>$data)
				{
				$invoice_data= array();
				$invoice_data['cms_user_id']=$key;
				$invoice_data['due']=date("Y-m-d H-i-s");
				$invoice_data['is_commission']='1';
				
				
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
				$invoice_handler->mark_invoice_pending();
				
				$users_email = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($key );
				$subject = _JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT;
				$message = _JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE." ".JOMRES_SITEPAGE_URL_NOSEF."&task=view_invoice&id=".$invoice_handler->id;

				if (!jomresMailer( get_showtime('mailfrom'), get_showtime('sitename') , $users_email[$key]['email'], $subject,$message,$mode=0))
					error_logging('Failure in sending commission invoice email to property manager. Target address: '.$users_email.' Subject'.$subject);
				
				}
			}
		
		if (count($processed_items)>0)
			{
			$clause = genericOr($processed_items,'id');
			$query = "DELETE FROM #__jomresportal_orphan_lineitems WHERE ".$clause;
			$result=doInsertSql($query,"");
			}
		

		if ((int)$jrConfig['commission_autosuspend_on_overdue'] == 1 && (int)$jrConfig['commission_autosuspend_on_overdue_threashold'] > 0 )
			{
			
			// Now we need to see if we need to suspend any managers
			$pending_commission_invoices = array();
			$all_pending_invoices = invoices_getallinvoices(false,3);
			// Filter out all the non-commission invoices
			foreach ($all_pending_invoices as $inv)
				{
				if ((int)$inv['is_commission'] == 1)
					{
					$pending_commission_invoices[]=$inv;
					}
				}

			$super_property_managers = get_all_super_property_managers();
			$already_suspended_manages = get_all_suspended_managers();
			$suspended_managers = array();
			// Now to check if any of these invoices are over the threashold
			if ( count($pending_commission_invoices) > 0)
				{
				$d = getdate();
				$todays_date = date ( "Y/m/d",$d[0] );
				$threashold = (int)$jrConfig['commission_autosuspend_on_overdue_threashold']+1; // Benefit of the doubt, because we reduce date/time to just the date, so we'll add an extra day to be safe.
				foreach ($pending_commission_invoices as $inv)
					{
					// Don't do anything if this user's cms_user_id is the same as a super property manager. Super managers can create bookings on any property, we don't want to suspend a manager and properties if a super property manager created an invoice by making a booking on their property.
					if (!array_key_exists( $inv['cms_user_id'],$super_property_managers) && !in_array($inv['cms_user_id'],$suspended_managers) && !array_key_exists( $inv['cms_user_id'],$already_suspended_manages) ) 
						{
						$date = $inv['due_date'];
						$date_ex = explode(" ",$date);
						$due_date = str_replace ("-","/",$date_ex[0]);
						$interval = dateDiff(0,$due_date,$todays_date);
						if ($interval > $threashold)
							{
							//echo "suspending ".$inv['cms_user_id'];
							$this->suspend($inv['cms_user_id']);
							$suspended_managers[]=$inv['cms_user_id'];
							}
						}
						
					}
				}
			}
		}
		
	function suspend($managers_id)
		{
		if ((int)$managers_id == 0 )
			return false;
		jr_import('jomres_suspensions');
		$jomres_suspensions=new jomres_suspensions();
		$jomres_suspensions->set_manager_id((int)$managers_id);
		$jomres_suspensions->suspend_manager();
		$jomres_suspensions->unpublish_managers_properties();
		return true;
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}		
	}
	
?>