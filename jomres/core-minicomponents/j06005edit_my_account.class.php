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


/**
#
 * Constructs and displays guest details for editing
 #
* @package Jomres
#
 */
class j06005edit_my_account {
	/**
	#
	 * Constructor: Constructs and displays guest details for editing
	#
	 */
	function j06005edit_my_account()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
			
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$output = array();
		$pageoutput = array();
		
		$user_details = jomres_cmsspecific_getCMS_users_frontend_userdetails_by_id($thisJRUser->id);

		$output['FIRSTNAME']='';
		$output['SURNAME']='';
		$output['HOUSE']='';
		$output['STREET']='' ;
		$output['TOWN']='';
		$output['REGION']='';
		$output['COUNTRY']=createSimpleCountriesDropdown($jrConfig['limit_property_country_country']);
		$output['POSTCODE']='';
		$output['LANDLINE']='';
		$output['MOBILE']='';
		$output['EMAIL']=$user_details[$thisJRUser->id]['email'];

		if ($thisJRUser->id > 0)
			{
			$query="SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email FROM #__jomres_guest_profile WHERE cms_user_id = ".(int)$thisJRUser->id." LIMIT 1";
			$guestData =doSelectSql($query);
			$numberOfReturns=count($guestData);
			if ($numberOfReturns==0)
				{
				$query="SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email FROM #__jomres_guests WHERE mos_userid = ".(int)$thisJRUser->id;
				$guestData =doSelectSql($query);
				$numberOfReturns=count($guestData);
				}
			
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
					$output['COUNTRY']=createSimpleCountriesDropdown($data->country);
					$output['POSTCODE']=$data->postcode ;
					$output['LANDLINE']=$data->tel_landline;
					$output['MOBILE']=$data->tel_mobile;
					$output['FAX']=$data->tel_fax;
					$output['EMAIL']=$data->email;
					}
				}
			
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY);
			$output['_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL']=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL);


			$output['HFIRSTNAME']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME',_JOMRES_COM_MR_DISPGUEST_FIRSTNAME);
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
			
			$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
			$output['_JOMRES_REVIEWS_SUBMIT'] = _JOMRES_REVIEWS_SUBMIT;
			$output['PAGETITLE']=jr_gettext('_JOMRES_MY_ACCOUNT_EDIT',_JOMRES_MY_ACCOUNT_EDIT,false,false);

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'edit_my_account.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME',_JOMRES_COM_MR_DISPGUEST_FIRSTNAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME',_JOMRES_COM_MR_DISPGUEST_SURNAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE',_JOMRES_COM_MR_DISPGUEST_HOUSE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET',_JOMRES_COM_MR_DISPGUEST_STREET);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_POSTCODE',_JOMRES_COM_MR_DISPGUEST_POSTCODE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_LANDLINE',_JOMRES_COM_MR_DISPGUEST_LANDLINE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_MOBILE',_JOMRES_COM_MR_DISPGUEST_MOBILE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FAX',_JOMRES_COM_MR_DISPGUEST_FAX);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL',_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL);
		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);

		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY);
		$output[]		=jr_gettext('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL',_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL);

		
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