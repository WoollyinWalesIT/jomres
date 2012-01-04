<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005list_usersinvoices
	{
	function j06005list_usersinvoices()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$infoIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/SymbolInformation.png" border="0" alt="info">';
		$status= jomresGetParam( $_REQUEST, 'status', "" );
		$id= $thisJRUser->id;

		if ($thisJRUser->userIsRegistered)
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

			$invoices=invoices_getinvoicesfor_juser($id,$stat);

			$invoice_id_array=array();
			foreach ($invoices as $invoice)
				{
				$invoice_id_array[]=$invoice['id'];
				}
			$invoices_items = invoices_getalllineitems_forinvoice_ids($invoice_id_array);

			$output=array();
			$pageoutput=array();
			$rows=array();

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

			$output['TASK_FILTER_ANY']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices">'._JOMRES_FRONT_ROOMSMOKING_EITHER.'</a>';
			$output['TASK_FILTER_UNPAID']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=unpaid">'._JRPORTAL_INVOICES_STATUS_UNPAID.'</a>';
			$output['TASK_FILTER_PAID']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=paid">'._JRPORTAL_INVOICES_STATUS_PAID.'</a>';
			$output['TASK_FILTER_CANCELLED']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=cancelled">'._JRPORTAL_INVOICES_STATUS_CANCELLED.'</a>';
			$output['TASK_FILTER_PENDING']='<a href="'.JOMRES_SITEPAGE_URL.'&task=list_usersinvoices&status=pending">'._JRPORTAL_INVOICES_STATUS_PENDING.'</a>';

			if (count($invoices)>0)
				{
				foreach ($invoices as $invoice)
					{
					$r=array();

					$inv_id = $invoice['id'];
					$invoice_items = $invoices_items[$inv_id];
					$item_name_string = "";
					foreach ($invoice_items as $invoice_item)
						{
						$item_name_string .= $invoice_item['name']."<br/>";
						}
					$r['ITEMS']=$item_name_string;
					$r['ID']=$invoice['id'];

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
					$r['INITTOTAL']		=output_price($invoice['init_total'],$invoice['currencycode']);
					$r['RECURTOTAL']	=output_price($invoice['recur_total'],$invoice['currencycode']);
					$r['FREQ']			=$invoice['recur_frequency'];
					$r['CURRENCYCODE']	=$invoice['currencycode'];
					$settingArray = get_plugin_settings("paypal",$invoice['property_uid']);
					if (isset($settingArray['active']) && $settingArray['active'] == "1")
						{
						if ($invoice['subscription'] == "0" && $invoice['status'] != "1")
							$r['PAYNOW']='<a href="'.JOMRES_SITEPAGE_URL.'&task=immediatepay&id='.$invoice['id'].'"><img src = "jomres/images/btn_paynow_SM.gif" /></a>';
						}
					$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice['id'].'">'.$infoIcon.'</a>';
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
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}