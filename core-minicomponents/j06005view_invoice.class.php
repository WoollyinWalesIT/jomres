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

class j06005view_invoice {
	function j06005view_invoice($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$output=array();
		$pageoutput=array();
		$rows=array();
		$this->retVals = null;
		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));
		$popup		= intval(jomresGetParam( $_REQUEST, 'popup', 0 ));
		
		// This plugin is being called by another script, typically the emailer functionality, therefore we'll bypass the access checking further down
		$bypass_security_check = false;
		$return_template = false;
		$show_paypal_link = true;
		if (isset($componentArgs['internal_call']) && $componentArgs['internal_call'] == true)
			{
			$bypass_security_check = true;
			$id = $componentArgs['invoice_id'];
			$show_paypal_link = $componentArgs['show_paypal_link'];
			$return_template = true;
			$popup		=1;
			}
		
		// a quick anti hack check
		jr_import('jrportal_invoice');
		$invoice = new jrportal_invoice();

		if ($id > 0)
			{
			$invoice->id = $id;
			$invoice->getInvoice();
			}

		if (!$bypass_security_check)
			{
			
			if ( (int)$invoice->contract_id > 0 && $invoice->is_commission == 0 ) // It's a guest's invoice being viewed either by the guest or a property manager for the appropriate property
				{
				
				if ($thisJRUser->userIsManager)
					{
					$property_uid=getDefaultProperty();
					$query = "SELECT contract_id FROM #__jomresportal_invoices WHERE id = ".$id." AND property_uid = ".(int)$property_uid;
					$result = doSelectSql($query,1);
					if (!$result)
						{
						trigger_error ("Unable to view invoice, cannot corrolate id with property uid.", E_USER_ERROR);
						return;
						}
					}
				else
					{
					$userid= $thisJRUser->id;
					$query="SELECT id FROM #__jomresportal_invoices WHERE `cms_user_id`= ".(int)$userid." AND `id` = ".(int)$id." ";
					$result=doSelectSql($query);
					if (count($result)<1 || count($result)>1)
						{
						trigger_error ("Unable to view invoice, either invoice id not found, or invoice id tampered with.", E_USER_ERROR);
						return;
						}
					}
				
				$query = "SELECT guest_uid FROM #__jomres_contracts WHERE contract_uid = ".(int)$invoice->contract_id. " LIMIT 1";
				$guestUid = doSelectSql($query,1);
	
				$query="SELECT guests_uid FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."'  AND property_uid = '".(int)$invoice->property_uid."'";
				$guest_uid =doSelectSql($query,1);

				$output['CLIENT_DETAILS_TEMPLATE'] = $MiniComponents->specificEvent('6005','show_guest_details',array('guest_uid'=>$guest_uid));
				$output['BUSINESS_DETAILS_TEMPLATE'] = $MiniComponents->specificEvent('6000','show_hotel_details',array('property_uid'=>$invoice->property_uid));
				}
			else // Let's check that this property manager can view this commission/subscription invoice
				{
				
				if ($thisJRUser->id != $invoice->cms_user_id)
					{
					trigger_error ("Unable to view invoice, either invoice id not found, or invoice id tampered with.", E_USER_ERROR);
					return;
					}
				$output['BUSINESS_DETAILS_TEMPLATE'] = $MiniComponents->specificEvent('6000','show_site_business',array());
				if (count($thisJRUser->authorisedProperties)>0)
					$output['CLIENT_DETAILS_TEMPLATE'] = $MiniComponents->specificEvent('6000','show_hotel_details',array());
				
				}
			}
		else
			{
			$property_uid = $invoice->property_uid;
			$mrConfig=getPropertySpecificSettings($property_uid);
			}
		
		if ($popup != 1)
			{
			$output['PRINTLINK'] = JOMRES_SITEPAGE_URL.'&tmpl=component&popup=1&task=view_invoice&id='.$id;
			$output['PRINTTEXT'] =jr_gettext('_JOMRES_COM_INVOICE_PRINT',_JOMRES_COM_INVOICE_PRINT);
			}

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_INVOICE_TITLE',_JOMRES_COM_INVOICE_TITLE);
		$output['LIVESITE']=get_showtime('live_site');
		$output['HUSER']=jr_gettext('_JRPORTAL_INVOICES_USER',_JRPORTAL_INVOICES_USER);
		$output['HSTATUS']=jr_gettext('_JRPORTAL_INVOICES_STATUS',_JRPORTAL_INVOICES_STATUS);
		$output['HRAISED']=jr_gettext('_JRPORTAL_INVOICES_RAISED',_JRPORTAL_INVOICES_RAISED);
		$output['HDUE']=jr_gettext('_JRPORTAL_INVOICES_DUE',_JRPORTAL_INVOICES_DUE);
		$output['HSUBSCRIPTION']=jr_gettext('_JRPORTAL_INVOICES_SUBSCRIPTION',_JRPORTAL_INVOICES_SUBSCRIPTION);
		$output['HINITTOTAL']=jr_gettext('_JRPORTAL_INVOICES_INITTOTAL',_JRPORTAL_INVOICES_INITTOTAL);
		$output['HRECURTOTAL']=jr_gettext('_JRPORTAL_INVOICES_RECUR_TOTAL',_JRPORTAL_INVOICES_RECUR_TOTAL);
		$output['HFREQ']=jr_gettext('_JRPORTAL_INVOICES_RECUR_FREQUENCY',_JRPORTAL_INVOICES_RECUR_FREQUENCY);
		$output['HDOM']=jr_gettext('_JRPORTAL_INVOICES_RECUR_DOMONTH',_JRPORTAL_INVOICES_RECUR_DOMONTH);
		$output['HCURRENCYCODE']=jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE',_JRPORTAL_INVOICES_CURRENCYCODE);
		$output['HINVOICENO']=jr_gettext('_JOMRES_INVOICE_NUMBER',_JOMRES_INVOICE_NUMBER);

		if ($thisJRUser->userIsManager && (int) $invoice->property_uid > 0 && (int) $invoice->status != 1)
			{
			$markaspaid=jr_gettext('_JOMRES_INVOICE_MARKASPAID',_JOMRES_INVOICE_MARKASPAID,false,false);
			$output['MARKASPAID_LINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=mark_booking_invoice_paid&no_html=1&id='.$invoice->id.'">'.$markaspaid.'</a>';
			}

		if ($thisJRUser->userIsManager && (int) $invoice->contract_id > 0)
			{
			$viewbooking=jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING,false,false);
			$output['VIEWBOOKING_LINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=editBooking&contract_uid='.$invoice->contract_id.'">'.$viewbooking.'</a>';
			}
			
		$output['ID']=$invoice->id;
		
		if ($invoice->status == "0")
			$output['STATUS']=jr_gettext('_JRPORTAL_INVOICES_STATUS_UNPAID',_JRPORTAL_INVOICES_STATUS_UNPAID);
		elseif ($invoice->status == "1")
			$output['STATUS']=jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID',_JRPORTAL_INVOICES_STATUS_PAID);
			elseif ($invoice->status == "2")
				$output['STATUS']=jr_gettext('_JRPORTAL_INVOICES_STATUS_CANCELLED',_JRPORTAL_INVOICES_STATUS_CANCELLED);
				else
					$output['STATUS']=jr_gettext('_JRPORTAL_INVOICES_STATUS_PENDING',_JRPORTAL_INVOICES_STATUS_PENDING);
		
		$output['USER']=jr_gettext('_JRPORTAL_INVOICES_USER',_JRPORTAL_INVOICES_USER);
		$output['RAISED']=$invoice->raised_date;
		$output['DUE']=$invoice->due_date;
		if ($invoice->subscription == "1")
			$output['SUBSCRIPTION']=_JOMRES_COM_MR_YES;
		else
			$output['SUBSCRIPTION']=_JOMRES_COM_MR_NO;
		$output['INITTOTAL']=output_price($invoice->init_total,$invoice->currencycode);
		$output['RECURTOTAL']=output_price($invoice->recur_total,$invoice->currencycode);
		$output['FREQ']=$invoice->recur_frequency;
		$output['CURRENCYCODE']=$invoice->currencycode;
		
		$output['LIPAGETITLE']	=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS',_JRPORTAL_INVOICES_LINEITEMS);
		$output['HLI_NAME']		=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_NAME',_JRPORTAL_INVOICES_LINEITEMS_NAME);
		$output['HLI_DESCRIPTION']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION);
		$output['HCURRENCYCODE']=jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE',_JRPORTAL_INVOICES_CURRENCYCODE);
		$output['HLI_INIT_PRICE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE);
		$output['HLI_INIT_QTY']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY);
		$output['HLI_INIT_DISCOUNT']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT);
		$output['HLI_INIT_TOTAL']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL);
		$output['HLI_INIT_TOTAL_INCLUSIVE']=jr_gettext('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX);
		
		$output['HLI_RECUR_PRICE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE);
		$output['HLI_RECUR_QTY']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY);
		$output['HLI_RECUR_DISCOUNT']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT);
		$output['HLI_RECUR_TOTAL']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL);
		$output['HLI_TAX_CODE']=_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE;
		$output['HLI_TAX_DESCRIPTION']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION);
		$output['HLI_TAX_RATE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);

		if ($show_paypal_link)
			{
			if (!$thisJRUser->userIsManager)
				{
				$settingArray = get_plugin_settings("paypal",$invoice->property_uid);
				if ($settingArray)
					{
					if (isset($settingArray['active']) && $settingArray['active'] == "1")
						{
						if ($invoice->subscription == "0" && $invoice->status != "1")
							{
							$ip=array();
							$immediate_pay=array();
							$ip['IMMEDIATE']	=_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY;
							$ip['INV_ID']	=$invoice->id;
							$ip['LIVESITE']=get_showtime('live_site').'/';
							$ip['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL_NOSEF;
							
							$immediate_pay[]=$ip;
							}
						}
					}
				}
			elseif ($invoice->is_commission)
				{
				$ip=array();
				$immediate_pay=array();
				$ip['IMMEDIATE']	=_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY;
				$ip['INV_ID']	=$invoice->id;
				$ip['LIVESITE']=get_showtime('live_site').'/';
				$ip['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL_NOSEF;
				$immediate_pay[]=$ip;
				}
			}
			
		$lineitems=invoices_getalllineitems_forinvoice($id);
		$counter=0;
		if (count($lineitems)>0)
			{
			foreach ($lineitems as $li)
				{
				$r=array();
				$r['ID']				=$li['id'];
				$r['LI_NAME']			=$li['name'];
				$r['LI_DESCRIPTION']	=$li['description'];
				$r['LI_INIT_PRICE']		=output_price($li['init_price'],$invoice->currencycode);
				$r['LI_INIT_QTY']		=$li['init_qty'];
				$r['LI_INIT_DISCOUNT']	=output_price($li['init_discount'],$invoice->currencycode);
				$r['LI_INIT_TOTAL']		=output_price($li['init_total'],$invoice->currencycode);
				$r['LI_INIT_TOTAL_INCLUSIVE']	=output_price($li['init_total_inclusive'],$invoice->currencycode);
				$r['LI_RECUR_PRICE']	=output_price($li['recur_price'],$invoice->currencycode);
				$r['LI_RECUR_QTY']		=$li['recur_qty'];
				$r['LI_RECUR_DISCOUNT']	=output_price($li['recur_discount'],$invoice->currencycode);
				$r['LI_RECUR_TOTAL']	=output_price($li['recur_total'],$invoice->currencycode);
				$r['LI_TAX_CODE']		=$li['tax_code'];
				$r['LI_TAX_DESCRIPTION']=$li['tax_description'];
				$r['LI_TAX_RATE']		=$li['tax_rate'];
				$r['LI_INV_ID']			=$li['inv_id'];
				$r['COUNTER']			=$counter;
				$counter++;
				$r['CURRENCYCODE']=$invoice->currencycode;
				$rows[]=$r;
				}
			}

		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL_NOSEF;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if ($popup ==1)
			$tmpl->readTemplatesFromInput( 'printable_invoice.html' );
		else
			$tmpl->readTemplatesFromInput( 'frontend_view_invoice.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		if ($invoice->subscription == "0" && $invoice->init_total > 0.00)
			{
			$tmpl->addRows( 'immediate_pay',$immediate_pay);
			}
		if (!$return_template)
			$tmpl->displayParsedTemplate();
		else
			$this->retVals=$tmpl->getParsedTemplate();
		}
		
	function touch_template_language()
		{

		$output[]=jr_gettext('_JOMRES_COM_INVOICE_PRINT',_JOMRES_COM_INVOICE_PRINT);
		$output[]=jr_gettext('_JOMRES_COM_INVOICE_TITLE',_JOMRES_COM_INVOICE_TITLE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_TITLE',_JRPORTAL_INVOICES_TITLE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_STATUS',_JRPORTAL_INVOICES_STATUS);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_RAISED',_JRPORTAL_INVOICES_RAISED);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_DUE',_JRPORTAL_INVOICES_DUE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_SUBSCRIPTION',_JRPORTAL_INVOICES_SUBSCRIPTION);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_INITTOTAL',_JRPORTAL_INVOICES_INITTOTAL);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_RECUR_TOTAL',_JRPORTAL_INVOICES_RECUR_TOTAL);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_RECUR_FREQUENCY',_JRPORTAL_INVOICES_RECUR_FREQUENCY);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_RECUR_DOMONTH',_JRPORTAL_INVOICES_RECUR_DOMONTH);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE',_JRPORTAL_INVOICES_CURRENCYCODE);
		$output[]=jr_gettext('_JOMRES_INVOICE_NUMBER',_JOMRES_INVOICE_NUMBER);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_USER',_JRPORTAL_INVOICES_USER);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS',_JRPORTAL_INVOICES_LINEITEMS);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_NAME',_JRPORTAL_INVOICES_LINEITEMS_NAME);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_CURRENCYCODE',_JRPORTAL_INVOICES_CURRENCYCODE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);
		
		$output[]=jr_gettext('_JRPORTAL_INVOICES_STATUS_UNPAID',_JRPORTAL_INVOICES_STATUS_UNPAID);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_STATUS_PAID',_JRPORTAL_INVOICES_STATUS_PAID);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_STATUS_CANCELLED',_JRPORTAL_INVOICES_STATUS_CANCELLED);
		$output[]=jr_gettext('_JRPORTAL_INVOICES_STATUS_PENDING',_JRPORTAL_INVOICES_STATUS_PENDING);
		$output[]=jr_gettext('_JOMRES_INVOICE_MARKASPAID',_JOMRES_INVOICE_MARKASPAID);
		$output[]=jr_gettext('_JOMRES_INVOICE_MARKEDASPAID',_JOMRES_INVOICE_MARKEDASPAID);
		$output[]=jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING);
		

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>