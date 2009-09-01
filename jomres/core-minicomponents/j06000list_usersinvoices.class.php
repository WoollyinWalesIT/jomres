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

class j06000list_usersinvoices
	{
	function j06000list_usersinvoices()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$infoIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/SymbolInformation.jpg" border="0" alt="info">';
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
		//var_dump($invoices);exit;
			if (count($invoices)>0)
				{
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

				foreach ($invoices as $invoice)
					{
					$r=array();
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
					$r['INITTOTAL']		=$invoice['init_total'];
					$r['RECURTOTAL']	=$invoice['recur_total'];
					$r['FREQ']			=$invoice['recur_frequency'];
					$r['CURRENCYCODE']	=$invoice['currencycode'];
					if ($invoice['subscription'] == "0" && $invoice['status'] != "1")
						$r['PAYNOW']='<a href="'.JOMRES_SITEPAGE_URL.'&task=immediatepay&id='.$invoice['id'].'"><img src = "jomres/images/btn_paynow_SM.gif" /></a>';
					$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL.'&task=view_invoice&id='.$invoice['id'].'">'.$infoIcon.'</a>';
					$rows[]=$r;
					}
				$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'frontend_list_invoices.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$tmpl->displayParsedTemplate();
				}
			}
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}