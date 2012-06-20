<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
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
class j02222editguest {
	/**
	#
	 * Constructor: Constructs and displays guest details for editing
	#
	 */
	function j02222editguest()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$guestUid= intval(jomresGetParam( $_REQUEST, 'guestUid', 0 ) );
		$defaultProperty=getDefaultProperty();

		if ($guestUid !=0)
			{

			$status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
			$link =makePopupLink(JOMRES_SITEPAGE_URL_NOHTML."&task=editCreditcard&popup=1&guestUid=$guestUid",jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT,false));
			//$link="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"\">".jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT)."</a>";
			$output['CREDITCARDLINK']=$link;
			$query="SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,tel_fax,ccard_no,ccard_issued,ccard_expiry,ccard_iss_no,ccard_name,email,discount FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."'  AND property_uid = '".(int)$defaultProperty."'";
			$guestData =doSelectSql($query);
			$numberOfReturns=count($guestData);
			if ($numberOfReturns>0)
				{
				foreach ($guestData as $data)
					{
					$output['FIRSTNAME']	=jomres_decode($data->firstname);
					$output['SURNAME']		=jomres_decode($data->surname);
					$output['HOUSE']		=jomres_decode($data->house);
					$output['STREET']		=jomres_decode($data->street);
					$output['TOWN']			=jomres_decode($data->town);
					$output['REGION']		=jomres_decode($data->county);
					$output['COUNTRY']		=createSimpleCountriesDropdown($data->country);
					$output['POSTCODE']		=jomres_decode($data->postcode);
					$output['LANDLINE']		=jomres_decode($data->tel_landline);
					$output['MOBILE']		=jomres_decode($data->tel_mobile);
					$output['FAX']			=jomres_decode($data->tel_fax);
					$output['EMAIL']=$data->email;
					$output['DISCOUNT']=jomresHTML::integerSelectList( 0,100,1, 'discount','class="inputbox" size="1"', $data->discount);
					}
				}
			else $guestUid = 0;
			}
		else
			{
			$output['COUNTRY']=createSimpleCountriesDropdown("GB");
			$output['DISCOUNT']=jomresHTML::integerSelectList( 0,100,1, 'discount','class="inputbox" size="1"', $data->discount);
			}

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
		$output['HDISCOUNT']=jr_gettext('_JOMRES_AJAXFORM_BILLING_DISCOUNT',_JOMRES_AJAXFORM_BILLING_DISCOUNT);

		$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveGuest');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listguests"),'');
		if ($guestUid != 0)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteGuest".jomresURLToken()."&guestUid=$guestUid&no_html=1"),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);
		$output['GUESTUID']=$guestUid;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_guest.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
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