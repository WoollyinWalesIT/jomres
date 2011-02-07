<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_invoices
	{
	function j16000list_invoices()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		
		$status= jomresGetParam( $_REQUEST, 'status', "" );


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
			default:
				$stat=null;
			break;
			}

		//_JRPORTAL_INVOICES_ISSUE

		$invoices=invoices_getallinvoices(true,$stat);
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

		$output['TASK_FILTER_ANY']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices">'._JOMRES_FRONT_ROOMSMOKING_EITHER.'</a>';
		$output['TASK_FILTER_UNPAID']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&status=unpaid">'._JRPORTAL_INVOICES_STATUS_UNPAID.'</a>';
		$output['TASK_FILTER_PAID']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&status=paid">'._JRPORTAL_INVOICES_STATUS_PAID.'</a>';
		$output['TASK_FILTER_CANCELLED']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&status=cancelled">'._JRPORTAL_INVOICES_STATUS_CANCELLED.'</a>';
		$output['TASK_FILTER_PENDING']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_invoices&status=pending">'._JRPORTAL_INVOICES_STATUS_PENDING.'</a>';
		
		foreach ($invoices as $invoice)
			{
			$r=array();
			$r['ID']=$invoice['id'];
			$inv_id = $invoice['id'];
			$invoice_items = $invoices_items[$inv_id];
			$item_name_string = "";
			foreach ($invoice_items as $invoice_item)
				{
				if ($item_name_string != "Commission<br/>")  // We can filter out other line items as Commission only needs to be named once in the invoices list. Also, invoices of commission should not have other items added to them.
					$item_name_string .= $invoice_item['name']."<br/>";
				}
			$r['ITEMS']=$item_name_string;
			
			jr_import('jrportal_user_functions');
			$user_obj = new jrportal_user_functions();
			
			$user_deets=$user_obj->getJoomlaUserDetailsForJoomlaId($invoice['cms_user_id']);
			
			if (strlen($user_deets['name'])==0)
				$r['USER']=_JOMRES_MR_AUDIT_UNKNOWNUSER;
			else
				$r['USER']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_usersinvoices&id='.$invoice['cms_user_id'].'">'.$user_deets['name'].'</a>';
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
			
			$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_invoice&id='.$invoice['id'].'">'.$editIcon.'</a>';
			$rows[]=$r;
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		//$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=edit_invoice"),'');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL_ADMIN),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_invoices.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}