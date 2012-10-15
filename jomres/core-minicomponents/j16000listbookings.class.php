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

class j16000listbookings
	{
	function j16000listbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$pageoutput=array();
		$output=array();
		$rows=array();

		$property_uid_array=array();

		$output['HPROPERTYID']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID",_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID);
		$output['HGUESTID']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID",_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID);
		$output['HAFFILIATEID']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID",_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID);
		$output['HINVOICEID']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID",_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID);
		$output['HBOOKINGTOTAL']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL",_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL);
		$output['HCONTRACTID']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID",_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID);
		$output['HCONTRACTNUMBER']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER",_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER);
		$output['HCURRENCYCODE']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE",_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE);
		$output['HCREATED']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_CREATED",_JRPORTAL_LISTBOOKINGS_HEADER_CREATED);
		$output['HARCHIVED']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED",_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED);
		$output['HARCHIVEDDATE']=jr_gettext("_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED",_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED);
		$output['LIVESITE']=get_showtime('live_site');
		$output['_JRPORTAL_CPANEL_LISTBOOKINGS']=jr_gettext("_JRPORTAL_CPANEL_LISTBOOKINGS",_JRPORTAL_CPANEL_LISTBOOKINGS);
		
		jr_import('jrportal_booking_functions');
		$bookingsFunctions = new jrportal_booking_functions();
		$bookingsArray=$bookingsFunctions->getBookings("");
		$counter=0;
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();
		$jomresPropertyList=$propertyFunctions->getAllJomresProperties();

		$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,jr_gettext("_JRPORTAL_CANCEL",_JRPORTAL_CANCEL));
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
		return (int)!($int_str & 1);
/* 		if (strlen($int_str)>0)
			{
			if (bcmod($int_str, 2)==='0')
				return true;
			else
				return false;
			}
		else	// error
			return 0; */
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}

	}