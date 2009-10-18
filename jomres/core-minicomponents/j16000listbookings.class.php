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

class j16000listbookings
	{
	function j16000listbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$pageoutput=array();
		$output=array();
		$rows=array();

		$property_uid_array=array();

		$output['LIVESITE']=get_showtime('live_site');
		$output['HPROPERTYID']=_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID;
		$output['HGUESTID']=_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID;
		$output['HAFFILIATEID']=_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID;
		$output['HINVOICEID']=_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID;
		$output['HBOOKINGTOTAL']=_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL;
		$output['HCONTRACTID']=_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID;
		$output['HCONTRACTNUMBER']=_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER;
		$output['HCURRENCYCODE']=_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE;
		$output['HCREATED']=_JRPORTAL_LISTBOOKINGS_HEADER_CREATED;
		$output['HARCHIVED']=_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED;
		$output['HARCHIVEDDATE']=_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED;

		jr_import('jrportal_booking_functions');
		$bookingsFunctions = new jrportal_booking_functions();
		$bookingsArray=$bookingsFunctions->getBookings("");
		$counter=0;
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();
		$jomresPropertyList=$propertyFunctions->getAllJomresProperties();

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		foreach ($bookingsArray as $r)
			{
			$counter++;
			$rw=array();
			$rw['STYLE']="";
			if ($this->bc_is_even($counter))
				$rw['STYLE']='class="alt"';
			$puid=$r['property_uid'];
			$rw['PROPERTY_UID']=$jomresPropertyList[$puid]["property_name"];
			$rw['GUEST_ID']=$r['guest_id'];
			$rw['AFFILIATE_ID']=$r['affiliate_id'];
			$rw['INVOICE_ID']=$r['invoice_id'];
			$rw['BOOKING_TOTAL']=$r['booking_total'];
			$rw['CONTRACT_ID']=$r['contract_id'];
			$rw['TAG']=$r['tag'];
			$rw['CURRENCY_CODE']=$r['currency_code'];
			$rw['CREATED']=$r['created'];
			$rw['ARCHIVED']=$r['archived'];
			$rw['ARCHIVED_DATE']=$r['archived_date'];
			$rows[]=$rw;
			}
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'admin_list_bookings.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);

		$tmpl->displayParsedTemplate();
		}

	function bc_is_even($int_str)
		{
		if (strlen($int_str)>0)
			{
			if (bcmod($int_str, 2)==='0')
				return true;
			else
				return false;
			}
		else	// error
			return 0;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}

	}