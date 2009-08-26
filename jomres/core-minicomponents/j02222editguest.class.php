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
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$guestUid= intval(jomresGetParam( $_REQUEST, 'guestUid', 0 ) );
		$defaultProperty=getDefaultProperty();

		if ($guestUid !="")
			{

			$status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
			$link =makePopupLink(JOMRES_SITEPAGE_URL_NOHTML."&task=editCreditcard&popup=1&guestUid=$guestUid",jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT,false));
			//$link="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"\">".jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT)."</a>";
			$output['CREDITCARDLINK']=$link;
			$query="SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,tel_fax,ccard_no,ccard_issued,ccard_expiry,ccard_iss_no,ccard_name,email FROM #__jomres_guests WHERE guests_uid = '".(int)$guestUid."'  AND property_uid = '".(int)$defaultProperty."'";
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
					$output['COUNTRY']=createSimpleCountriesDropdown($data->country);
					$output['POSTCODE']=$data->postcode ;
					$output['LANDLINE']=$data->tel_landline;
					$output['MOBILE']=$data->tel_mobile;
					$output['FAX']=$data->tel_fax;
					$output['EMAIL']=$data->email;
					}
				}

			}
		else
			{
			$output['COUNTRY']=createSimpleCountriesDropdown("GB");
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

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveGuest');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listguests"),'');
		if ($guestUid != 0)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteGuest".jomresURLToken()."&guestUid=$guestUid"),'');
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