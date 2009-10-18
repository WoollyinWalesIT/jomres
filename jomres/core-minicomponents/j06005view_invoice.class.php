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
		if (isset($componentArgs['internal_call']) && $componentArgs['internal_call'] == true)
			{
			$bypass_security_check = true;
			$id = $componentArgs['invoice_id'];
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
			if ((int)$invoice->contract_id > 0) // It's a guest's invoice being viewed either by the guest or a property manager for the appropriate property
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
				$output['CLIENT_DETAILS_TEMPLATE'] = $MiniComponents->specificEvent('6000','show_guest_details',array('guest_uid'=>$guest_uid));
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
		$output['INITTOTAL']=$invoice->init_total;
		$output['RECURTOTAL']=$invoice->recur_total;
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
		$output['HLI_RECUR_PRICE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE);
		$output['HLI_RECUR_QTY']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY);
		$output['HLI_RECUR_DISCOUNT']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT);
		$output['HLI_RECUR_TOTAL']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL);
		$output['HLI_TAX_CODE']=_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE;
		$output['HLI_TAX_DESCRIPTION']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION);
		$output['HLI_TAX_RATE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);

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
						$immediate_pay[]=$ip;
						}
					}
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
				$r['LI_INIT_PRICE']		=$li['init_price'];
				$r['LI_INIT_QTY']		=$li['init_qty'];
				$r['LI_INIT_DISCOUNT']	=$li['init_discount'];
				$r['LI_INIT_TOTAL']		=$li['init_total'];
				$r['LI_RECUR_PRICE']	=$li['recur_price'];
				$r['LI_RECUR_QTY']		=$li['recur_qty'];
				$r['LI_RECUR_DISCOUNT']	=$li['recur_discount'];
				$r['LI_RECUR_TOTAL']	=$li['recur_total'];
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

		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		if ($popup ==1)
			$tmpl->readTemplatesFromInput( 'printable_invoice.html' );
		else
			$tmpl->readTemplatesFromInput( 'frontend_view_invoice.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		if ($invoice->subscription == "0")
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