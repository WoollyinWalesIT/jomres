<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005show_guest_details
	{
	function j06005show_guest_details($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!$thisJRUser->userIsRegistered)
			return;

		$guestUid= $componentArgs['guest_uid'];

		if ($thisJRUser->userIsManager)
			{
			$property_uid=getDefaultProperty();
			$query="SELECT guests_uid FROM #__jomres_guests WHERE `guests_uid`= ".(int)$guestUid." AND `property_uid` = ".(int)$property_uid." ";
			$result=doSelectSql($query);
			if (count($result)<1 || count($result)>1)
				{
				trigger_error ("Unable to view guest details, either guest id not found, or guest id tampered with.", E_USER_ERROR);
				return;
				}
			}
		else
			{
			$userid= $thisJRUser->id;
			$query="SELECT guests_uid FROM #__jomres_guests WHERE `mos_userid`= ".(int)$userid."";
			$result=doSelectSql($query);
			if (count($result)<1)
				{
				trigger_error ("Unable to view guest details, either guest id not found, or guest id tampered with.", E_USER_ERROR);
				return;
				}
			}
		$query="SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email FROM #__jomres_guests WHERE guests_uid = ".(int)$guestUid."";
		$guestData =doSelectSql($query);
		$numberOfReturns=count($guestData);
		if ($numberOfReturns>0)
			{
			foreach ($guestData as $data)
				{
				$output['FIRSTNAME']=$data->firstname;
				$output['SURNAME']=$data->surname;
				$output['HOUSE']=$data->house;
				$output['STREET']=$data->street ;
				$output['TOWN']=$data->town;
				$output['REGION']=$data->county;
				$output['COUNTRY']=getSimpleCountry($data->country);
				$output['POSTCODE']=$data->postcode ;
				$output['LANDLINE']=$data->tel_landline;
				$output['MOBILE']=$data->tel_mobile;
				$output['FAX']=$data->tel_fax;
				$output['EMAIL']=$data->email;
				}
			}
		else
			return;
		$output['TITLE']=jr_gettext('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST',_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST);
		$output['HFIRSTNAME']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME',_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME);
		$output['HSURNAME']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME',_JOMRES_COM_MR_DISPGUEST_SURNAME);
		$output['HHOUSE']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE',_JOMRES_COM_MR_DISPGUEST_HOUSE);
		$output['HSTREET']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET',_JOMRES_COM_MR_DISPGUEST_STREET);
		$output['HTOWN']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		$output['HREGION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output['HPOSTCODE']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE',_JOMRES_COM_MR_DISPGUEST_POSTCODE);
		$output['HLANDLINE']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE',_JOMRES_COM_MR_DISPGUEST_LANDLINE);
		$output['HMOBILE']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE',_JOMRES_COM_MR_DISPGUEST_MOBILE);
		$output['HFAX']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX',_JOMRES_COM_MR_DISPGUEST_FAX);
		$output['HEMAIL']=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'show_guest_details.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$this->retVals=$tmpl->getParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}	
	}