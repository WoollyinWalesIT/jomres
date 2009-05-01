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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000edit_invoice {
	function j16000edit_invoice()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $ePointFilepath,$jomresConfig_live_site;
		$output=array();
		$pageoutput=array();
		$rows=array();
		
		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));
		
		$invoice = new jrportal_invoice();
		if ($id > 0)
			{
			$invoice->id = $id;
			$invoice->getInvoice();
			}
		$output['PAGETITLE']=_JRPORTAL_INVOICES_TITLE;
		$output['LIVESITE']=$jomresConfig_live_site;
		$output['HUSER']=_JRPORTAL_INVOICES_USER;
		$output['HSTATUS']=_JRPORTAL_INVOICES_STATUS;
		$output['HRAISED']=_JRPORTAL_INVOICES_RAISED;
		$output['HDUE']=_JRPORTAL_INVOICES_DUE;
		$output['HSUBSCRIPTION']=_JRPORTAL_INVOICES_SUBSCRIPTION;
		$output['HINITTOTAL']=_JRPORTAL_INVOICES_INITTOTAL;
		$output['HRECURTOTAL']=_JRPORTAL_INVOICES_RECUR_TOTAL;
		$output['HFREQ']=_JRPORTAL_INVOICES_RECUR_FREQUENCY;
		$output['HDOM']=_JRPORTAL_INVOICES_RECUR_DOMONTH;
		$output['HCURRENCYCODE']=_JRPORTAL_INVOICES_CURRENCYCODE;
		
		$output['LIPAGETITLE']	=_JRPORTAL_INVOICES_LINEITEMS;
		$output['HLI_NAME']		=_JRPORTAL_INVOICES_LINEITEMS_NAME;
		$output['HLI_DESCRIPTION']=_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION;
		$output['HCURRENCYCODE']=_JRPORTAL_INVOICES_CURRENCYCODE;
		$output['HLI_INIT_PRICE']=_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE;
		$output['HLI_INIT_QTY']=_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY;
		$output['HLI_INIT_DISCOUNT']=_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT;
		$output['HLI_INIT_TOTAL']=_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL;
		$output['HLI_RECUR_PRICE']=_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE;
		$output['HLI_RECUR_QTY']=_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY;
		$output['HLI_RECUR_DISCOUNT']=_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT;
		$output['HLI_RECUR_TOTAL']=_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL;
		$output['HLI_TAX_CODE']=_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE;
		$output['HLI_TAX_DESCRIPTION']=_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION;
		$output['HLI_TAX_RATE']=_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE;
			
		if ($id>0)
			{
			$output['ID']=$invoice->id;
			
			$output['STATUS']=invoices_makeInvoiceStatusDropdown($invoice->status);
			$output['USER']=_JRPORTAL_INVOICES_USER;
			$user_obj = new jrportal_user_functions();
			$user_deets=$user_obj->getJoomlaUserDetailsForJoomlaId($invoice->cms_user_id);
			$output['USERSINVOICESLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_usersinvoices&id='.$invoice->cms_user_id.'">'.$user_deets['name'].'</a>';
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
			}
		else
			{
			$output['ID']=$invoice->id;
			
			$output['STATUS']=invoices_makeInvoiceStatusDropdown($invoice->status);
			$output['USER']=_JRPORTAL_INVOICES_USER;
			$user_obj = new jrportal_user_functions();
			$user_deets=$user_obj->getJoomlaUserDetailsForJoomlaId($invoice->cms_user_id);
			$output['USERSINVOICESLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=list_usersinvoices&id='.$invoice->cms_user_id.'">'.$user_deets['name'].'</a>';
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
			}
			
		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_invoice');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=list_invoices",'');
		//$jrtb .= $jrtbar->toolbarItem('delete',"index2.php?option=com_jomres&task=delete_invoice".jomresURLToken()."&no_html=1&id=".$id,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		
		if ($id>0)
			$tmpl->readTemplatesFromInput( 'edit_invoice.html' );
		else
			$tmpl->readTemplatesFromInput( 'new_invoice.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>