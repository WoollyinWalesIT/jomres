<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Add a service the the bill of a guest with a booking
 #
* @package Jomres
#
 */
class j02150addservicetobill {
	/**
	#
	 * Constructor: Add a service the the bill of a guest with a booking
	#
	 */
	function j02150addservicetobill()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$saveMessage=_JOMRES_COM_ADDSERVICE_SAVEMESSAGE;

		$contract_uid	=	jomresGetParam( $_REQUEST, 'contract_uid', 0 );

		if (!isset($_POST['service_description']) )
			{
			$output['PAGETITLE']=jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE);

			$output['HSERVICEDESCRIPTION']=jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION',_JOMRES_COM_ADDSERVICE_DESCRIPTION);
			$output['HSERVICEVALUE']=jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE',_JOMRES_COM_ADDSERVICE_VALUE);
			$output['HTAXRATE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);
			//$output['CURRENCY']=$mrConfig['currency'];
			$output['CONTRACTUID']=$contract_uid;
			$output['TAXRATEDROPDOWN'] = taxrates_makerateDropdown( array(),1 );
			
			
			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save','','',true,'addServiceToBill');
			$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid"),'');
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'add_service_to_bill.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		else
			{
			if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
			$contract_uid			=	jomresGetParam( $_POST, 'contract_uid', 0 );
			$service_description	=	ucfirst(jomresGetParam( $_POST, 'service_description', '' ));
			$service_value			=	jomresGetParam( $_POST, 'service_value', 0.00 );
			$taxrate				=	jomresGetParam( $_POST, 'taxrate', 0 );
			
			if ($contract_uid && $service_description && $service_value != 0)
				{
				$query="INSERT INTO #__jomres_extraServices (`service_description`,`service_value`,`contract_uid`) VALUES ('$service_description','".(float)$service_value."','".(int)$contract_uid."')";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_ADDSERVICE',_JOMRES_MR_AUDIT_ADDSERVICE,FALSE)))
					trigger_error ("Unable to insert into extraServices table, mysql db failure", E_USER_ERROR);
				else
					{
					
					$invoice = invoices_getinvoicefor_contract_id($contract_uid);
					$line_items = array();
					$line_item_data = array (
						'tax_code_id'=>$taxrate,
						'name'=>$service_description,
						'description'=>'',
						'init_price'=>number_format($service_value,2, '.', ''),
						'init_qty'=>"1",
						'init_discount'=>"0",
						'recur_price'=>"0.00",
						'recur_qty'=>"0",
						'recur_discount'=>"0.00"
						);
					$line_items[]=$line_item_data;
					jr_import('invoicehandler');
					$invoice_handler = new invoicehandler();
					$invoice_handler->id = $invoice['id'];
					if ($invoice_handler->getInvoice())
						{
						$invoice_handler->add_line_item($line_item_data);
						$invoice_handler->commitUpdateInvoice();
						}
					else
						{
						echo "Error adding line item to invoice";
						return;
						}
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=$contract_uid"), $saveMessage );
					}
				}
			else
				{
				echo "Ooops, no description or value entered. ";
				trigger_error ("Adding service to bill, either  description or value not entered", E_USER_ERROR);
				}
			}
		}


	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_TITLE',_JOMRES_COM_ADDSERVICE_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_DESCRIPTION',_JOMRES_COM_ADDSERVICE_DESCRIPTION);
		$output[]		=jr_gettext('_JOMRES_COM_ADDSERVICE_VALUE',_JOMRES_COM_ADDSERVICE_VALUE);
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>