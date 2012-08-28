<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001list_property_invoices
	{
	function j06001list_property_invoices()
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		$defaultProperty=getDefaultProperty();
		$infoIcon	='<img src="'.get_showtime('live_site').'/jomres/images/SymbolInformation.png" alt="info"/>';
		$status= jomresGetParam( $_REQUEST, 'status', "" );

		if ($thisJRUser->userIsManager)
			{
			switch ($status)
				{
				case "unpaid":
					$stat=0;
				break;
				case "paid":
					$stat=1;
				break;
				case "cancelled":
					$stat=2;
				break;
				case "pending":
					$stat=3;
				break;
				}

			$invoices=invoices_getinvoicesfor_property_byproperty_uid($stat,$defaultProperty);
			
			$property_guests = array();
			$query="SELECT guests_uid,firstname,surname,mos_userid  FROM #__jomres_guests  WHERE property_uid = ".(int)$defaultProperty;
			$guestList =doSelectSql($query);
			if (count($guestList)>0)
				{
				foreach ($guestList as $guest)
					{
					$property_guests[$guest->mos_userid]['guests_uid']=$guest->guests_uid;
					$property_guests[$guest->mos_userid]['firstname']=$guest->firstname;
					$property_guests[$guest->mos_userid]['surname']=$guest->surname;
					$property_guests[$guest->mos_userid]['cms_user_id']=$guest->mos_userid;
					}
				}
			

			//if (count($invoices)>0)
				//{
				$output=array();
				$pageoutput=array();
				$rows=array();
				
				$invoice_id_array=array();
				foreach ($invoices as $invoice)
					{
					$invoice_id_array[]=$invoice['id'];
					}
				$invoices_items = invoices_getalllineitems_forinvoice_ids($invoice_id_array);


					
				$output['PAGETITLE']=_JRPORTAL_INVOICES_TITLE;
				$output['HUSER']=_JRPORTAL_INVOICES_USER;
				$output['HSTATUS']=_JRPORTAL_INVOICES_STATUS;
				$output['HRAISED']=_JRPORTAL_INVOICES_RAISED;
				$output['HDUE']=_JRPORTAL_INVOICES_DUE;
				$output['HPAID']=_JRPORTAL_INVOICES_STATUS_PAID;
				$output['HSUBSCRIPTION']=_JRPORTAL_INVOICES_SUBSCRIPTION;
				$output['HINITTOTAL']=_JRPORTAL_INVOICES_INITTOTAL;
				$output['HRECURTOTAL']=_JRPORTAL_INVOICES_RECUR_TOTAL;
				$output['HFREQ']=_JRPORTAL_INVOICES_RECUR_FREQUENCY;
				$output['HDOM']=_JRPORTAL_INVOICES_RECUR_DOMONTH;
				$output['HCURRENCYCODE']=_JRPORTAL_INVOICES_CURRENCYCODE;
				$output['_JRPORTAL_INVOICES_LINEITEMS']=_JRPORTAL_INVOICES_LINEITEMS;
				

				if ($thisJRUser->userIsManager)
					{
					$output['TASK_FILTER_ANY']=JOMRES_SITEPAGE_URL.'&task=list_property_invoices';
					$output['_JOMRES_FRONT_ROOMSMOKING_EITHER']=_JOMRES_FRONT_ROOMSMOKING_EITHER;
					$output['TASK_FILTER_UNPAID']=JOMRES_SITEPAGE_URL.'&task=list_property_invoices&status=unpaid';
					$output['_JRPORTAL_INVOICES_STATUS_UNPAID']=_JRPORTAL_INVOICES_STATUS_UNPAID;
					$output['TASK_FILTER_PAID']=JOMRES_SITEPAGE_URL.'&task=list_property_invoices&status=paid';
					$output['_JRPORTAL_INVOICES_STATUS_PAID']=_JRPORTAL_INVOICES_STATUS_PAID;
					$output['TASK_FILTER_CANCELLED']=JOMRES_SITEPAGE_URL.'&task=list_property_invoices&status=cancelled';
					$output['_JRPORTAL_INVOICES_STATUS_CANCELLED']=_JRPORTAL_INVOICES_STATUS_CANCELLED;
					$output['TASK_FILTER_PENDING']=JOMRES_SITEPAGE_URL.'&task=list_property_invoices&status=pending';
					$output['_JRPORTAL_INVOICES_STATUS_PENDING']=_JRPORTAL_INVOICES_STATUS_PENDING;
					}
				else
					{
					$output['TASK_FILTER_ANY']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices';
					$output['_JOMRES_FRONT_ROOMSMOKING_EITHER']=_JOMRES_FRONT_ROOMSMOKING_EITHER;
					$output['TASK_FILTER_UNPAID']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=unpaid';
					$output['_JRPORTAL_INVOICES_STATUS_UNPAID']=_JRPORTAL_INVOICES_STATUS_UNPAID;
					$output['TASK_FILTER_PAID']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=paid';
					$output['_JRPORTAL_INVOICES_STATUS_PAID']=_JRPORTAL_INVOICES_STATUS_PAID;
					$output['TASK_FILTER_CANCELLED']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=cancelled';
					$output['_JRPORTAL_INVOICES_STATUS_CANCELLED']=_JRPORTAL_INVOICES_STATUS_CANCELLED;
					$output['TASK_FILTER_PENDING']=JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=pending';
					$output['_JRPORTAL_INVOICES_STATUS_PENDING']=_JRPORTAL_INVOICES_STATUS_PENDING;
					}
					
				foreach ($invoices as $invoice)
					{
					$r=array();
					if ($invoice['is_commission'] != "1")
						{
						$inv_id = $invoice['id'];
						$r['ID']=$inv_id ;
						$cms_user_id = $invoice['cms_user_id'];
						if (!array_key_exists($cms_user_id,$property_guests) || (int)$cms_user_id ==0 )
							{
							$query="SELECT guest_uid FROM #__jomres_contracts WHERE contract_uid = ".(int)$invoice['contract_id']." LIMIT 1";
							$guest_uid =doSelectSql($query,1);
							$query = "SELECT firstname,surname FROM #__jomres_guests WHERE guests_uid = ".(int)$guest_uid." LIMIT 1";
							$guest_name =doSelectSql($query,2);
							$r['GUEST']=$guest_name['firstname']." ".$guest_name['surname'];
							//$r['GUEST']=_JOMRES_MR_AUDIT_UNKNOWNUSER;
							}
						else
							{
							//$r['USER']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_usersinvoices&id='.$invoice['cms_user_id'].'">'.$user_deets['name'].'</a>';
							$r['GUEST']=$property_guests[$cms_user_id]['firstname']." ".$property_guests[$cms_user_id]['surname'];
							}
						
						$invoice_items = $invoices_items[$inv_id];
						$item_name_string = "";
						foreach ($invoice_items as $invoice_item)
							{
							$item_name_string .= $invoice_item['name']."<br/>";
							}
						$r['ITEMS']=$item_name_string;
						jr_import('jrportal_user_functions');
						$user_obj = new jrportal_user_functions();
						$user_deets=$user_obj->getJoomlaUserDetailsForJoomlaId($invoice['cms_user_id']);
						$r['USER']=$user_deets['name'];
						if ($invoice['status'] == "0")
							$r['STATUS']=_JRPORTAL_INVOICES_STATUS_UNPAID;
						elseif ($invoice['status'] == "1")
							$r['STATUS']=_JRPORTAL_INVOICES_STATUS_PAID;
							elseif ($invoice['status'] == "2")
								$r['STATUS']=_JRPORTAL_INVOICES_STATUS_CANCELLED;
								else
									$r['STATUS']=_JRPORTAL_INVOICES_STATUS_PENDING;
						$r['RAISED']=$invoice['raised_date'];
						$r['DUE']=$invoice['due_date'];
						$r['PAID']=$invoice['paid'];
						if ($invoice['subscription'] == "1")
							$r['SUBSCRIPTION']=_JOMRES_COM_MR_YES;
						else
							$r['SUBSCRIPTION']=_JOMRES_COM_MR_NO;
						$r['INITTOTAL']		=output_price($invoice['init_total'],$invoice['currencycode'],false,true);
						$r['RECURTOTAL']	=output_price($invoice['recur_total'],$invoice['currencycode'],false,true);
						$r['FREQ']			=$invoice['recur_frequency'];
						$r['CURRENCYCODE']	=$invoice['currencycode'];
						$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice['id'].'">'.$editIcon.'</a>';
						$r['EDIT_TEXT']=jr_gettext('COMMON_VIEW',COMMON_VIEW,false);
						$r['EDIT_URL']=JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice['id'];
						$rows[]=$r;
						}
					}
				$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
				$output['LIVESITE']=get_showtime('live_site');
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'frontend_list_invoices.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$tmpl->displayParsedTemplate();
				//}
			}
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}