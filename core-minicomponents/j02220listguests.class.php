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
 * Constructs and displays guests list
 #
* @package Jomres
#
 */
class j02220listguests {
	/**
	#
	 * Constructor: Constructs and displays guests list
	#
	 */
	function j02220listguests()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$rows=array();
		$surnameFirstChars         = jomresGetParam( $_REQUEST, 'surnameFirstChars', '' );
		$defaultProperty=getDefaultProperty();
		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);
		$output['HTOWN']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		$output['HEDITLINK']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS',_JOMRES_COM_MR_DISPGUEST_EDITDETAILS);
		$output['HINVOICELINK']=jr_gettext('_JOMRES_MANAGER_SHOWINVOICES',_JOMRES_MANAGER_SHOWINVOICES);
		$output['HFIRSTNAME']	=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME',_JOMRES_COM_MR_DISPGUEST_FIRSTNAME);
		$output['HSURNAME']	=jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME',_JOMRES_COM_MR_DISPGUEST_SURNAME);
		$output['HHOUSE']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE',_JOMRES_COM_MR_DISPGUEST_HOUSE);
		$output['HSTREET']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET',_JOMRES_COM_MR_DISPGUEST_STREET);
		$output['HTOWN']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		
		if (!isset($_REQUEST['all_guests'])|| (int)$_REQUEST['all_guests'] != 1 )
			{
			// let's find all the historic guests (those without current bookings)
			$ids_of_not_required_guests = array();
			
			$query = "SELECT contract_uid, guest_uid, cancelled, booked_out FROM #__jomres_contracts WHERE property_uid = ".(int)$defaultProperty;
			$contractList =doSelectSql($query);
			if (count($contractList)>0)
				{
				$contracts_arr = array();
				foreach ($contractList as $contract)
					{
					$guest_uid = $contract->guest_uid;
					if ( $guest_uid > 0)
						{
						$historic = false;
						
						if ($contract->cancelled == "1" || $contract->booked_out == "1")
							$historic = true;
						$contracts_arr[$guest_uid][] = array("guest_uid"=>$guest_uid,"contract_uid"=>$contract->contract_uid,"historic"=>$historic);
						}
					}
				// Now let's do some counting of the number of historic v non-historic bookings for each guest uid
				$contracts_count = array();
				foreach ($contracts_arr as $guest_uid=>$c)
					{
					foreach ($c as $guest_contracts)
						{
						if (!isset($contracts_count[$guest_uid]))
							{
							$contracts_count[$guest_uid]=0;
							}
						if ($guest_contracts['historic'])
							$contracts_count[$guest_uid]++;
						else
							$contracts_count[$guest_uid]--;
						}
					}
				foreach ($contracts_count as $guest_uid=>$count)
					{
					if ($count>0)
						$ids_of_not_required_guests[]=$guest_uid;
					}
				}
			}
		else
			{
			$ids_of_not_required_guests = array();
			}
		
		if ($surnameFirstChars != "")
			$query="SELECT guests_uid,firstname,surname,house,street,town,mos_userid  FROM #__jomres_guests WHERE surname LIKE '$surnameFirstChars%' AND property_uid = '".(int)$defaultProperty."'";
		else
			$query="SELECT guests_uid,firstname,surname,house,street,town,mos_userid  FROM #__jomres_guests  WHERE property_uid = '".(int)$defaultProperty."' ORDER BY surname";

		$guestList =doSelectSql($query);
		if (count($guestList)==0)
			return;
		$mos_userids = array();
		foreach($guestList as $guest)
			{
			$mos_userids[]=$guest->mos_userid;
			}
		
		$invoices = array();
		$gor= genericOr($mos_userids ,'cms_user_id');
		$query = "SELECT cms_user_id,id FROM #__jomresportal_invoices WHERE ".$gor;
		$result =doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$invoices[$r->cms_user_id] = $r->id;
				}
			}
		
		$surnameFirstCharArray=array();
		$editIcon='<IMG SRC="'.JOMRES_SITEPAGE_URL.'/administrator/images/edit_f2.png" border="0" width="'.$mrConfig['editiconsize'].'" height="'.$mrConfig['editiconsize'].'">';

		$image='/jomres/images/jomresimages/small/guestEdit.png';
		$invoice_image='/jomres/images/jomresimages/small/Invoice.png';
		foreach($guestList as $guest)
			{
			if (!in_array($guest->guests_uid,$ids_of_not_required_guests))
				{
				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				
				$text=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT',_JOMRES_COM_MR_LISTTARIFF_LINKTEXT,$editable=false,$isLink=true) ;
				$link=JOMRES_SITEPAGE_URL.'&task=editGuest&guestUid='.($guest->guests_uid);
				$targetTask='bookGuestIn';
				$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$text,$submitOnClick=false,$submitTask="",$image);
				$jrtb .= $jrtbar->endTable();
				$rw['EDITLINK']=$jrtb;

				if (array_key_exists($guest->mos_userid,$invoices) )
					{
					$jrtb  = $jrtbar->startTable();
					$text=jr_gettext('_JOMRES_MANAGER_SHOWINVOICES',_JOMRES_MANAGER_SHOWINVOICES,$editable=false,$isLink=true) ;
					$link=JOMRES_SITEPAGE_URL.'&task=list_guests_invoices&id='.($guest->mos_userid);
					$targetTask='';
					$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$text,$submitOnClick=false,$submitTask="",$invoice_image);
					$jrtb .= $jrtbar->endTable();
					$rw['INVOICELINK']=$jrtb;
					}

				$rw['FIRSTNAME']=$guest->firstname;
				$rw['SURNAME']=$guest->surname;
				$rw['HOUSE']=$guest->house;
				$rw['STREET']=$guest->street;
				$rw['TOWN']=$guest->town;
				// $status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
				// $link =makePopupLink(JOMRES_SITEPAGE_URL_NOHTML."?option=com_jomres&task=editCreditcard&popup=1&guestUid=".$guest->guests_uid."",jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT,false));
				// $rw['CREDITCARDLINK']=$link;

				$rows[]=$rw;

				$surname=($guest->surname);
				$surnameFirstCharArray[]=$surname{0};
				}
			}

		$surnames=array_unique($surnameFirstCharArray);
		asort($surnames);
		$output['SURNAMEDROPDOWN']=filterForm('surnameFirstChars',$surnames,"");
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( jomresURL(JOMRES_SITEPAGE_URL."&task=listguests&all_guests=1"), _JOMRES_HISTORIC_GUESTS_SHOW );
		$yesno[] = jomresHTML::makeOption( jomresURL(JOMRES_SITEPAGE_URL."&task=listguests&all_guests=0"), _JOMRES_HISTORIC_GUESTS_NOSHOW );
		$output['HISTORIC_GUESTS_DROPDOWN']=jomresHTML::selectList( $yesno, 'all_guests','class="inputbox" size="1" onchange="window.open(this.options[this.selectedIndex].value,\'_top\')"', 'value', 'text', (int)$_REQUEST['all_guests']);
		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		
		$text=jr_gettext('_JOMRES_COM_MR_NEWGUEST',_JOMRES_COM_MR_NEWGUEST,$editable=false,$isLink=true) ;
		$link=JOMRES_SITEPAGE_URL.'&task=editGuest';
		$targetTask='editGuest';
		$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/guestAdd.png';
		$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$text,$submitOnClick=false,$submitTask="",$image);

		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_guests.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS',_JOMRES_COM_MR_DISPGUEST_EDITDETAILS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME',_JOMRES_COM_MR_DISPGUEST_FIRSTNAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME',_JOMRES_COM_MR_DISPGUEST_SURNAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE',_JOMRES_COM_MR_DISPGUEST_HOUSE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET',_JOMRES_COM_MR_DISPGUEST_STREET);
		$output[]		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);

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