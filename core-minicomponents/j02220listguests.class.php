<?php
/**
#
 * Mini-component core file: Constructs and displays guests list
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$guests_uid,$Itemid,$jomresConfig_live_site;
		$rows=array();
		$surnameFirstChars         = jomresGetParam( $_POST, 'surnameFirstChars', '' );
		$defaultProperty=getDefaultProperty();

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);
		$output['HTOWN']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);
		$output['HEDITLINK']=jr_gettext('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS',_JOMRES_COM_MR_DISPGUEST_EDITDETAILS);
		$output['HFIRSTNAME']	=jr_gettext('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME',_JOMRES_COM_MR_DISPGUEST_FIRSTNAME);
		$output['HSURNAME']	=jr_gettext('_JOMRES_COM_MR_DISPGUEST_SURNAME',_JOMRES_COM_MR_DISPGUEST_SURNAME);
		$output['HHOUSE']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_HOUSE',_JOMRES_COM_MR_DISPGUEST_HOUSE);
		$output['HSTREET']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_STREET',_JOMRES_COM_MR_DISPGUEST_STREET);
		$output['HTOWN']		=jr_gettext('_JOMRES_COM_MR_DISPGUEST_TOWN',_JOMRES_COM_MR_DISPGUEST_TOWN);

		if ($surnameFirstChars)
			$query="SELECT guests_uid,firstname,surname,house,street,town  FROM #__jomres_guests WHERE surname LIKE '$surnameFirstChars%' AND property_uid = '".(int)$defaultProperty."'";
		else
			$query="SELECT guests_uid,firstname,surname,house,street,town  FROM #__jomres_guests  WHERE property_uid = '".(int)$defaultProperty."' ORDER BY surname";
		$guestList =doSelectSql($query);
		$surnameFirstCharArray=array();
		$editIcon='<IMG SRC="'.JOMRES_SITEPAGE_URL.'/administrator/images/edit_f2.png" border="0" width="'.$mrConfig['editiconsize'].'" height="'.$mrConfig['editiconsize'].'">';

		foreach($guestList as $guest)
			{
			//$rw['EDITLINK']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=editGuest&Itemid=$Itemid&guestUid=".($guest->guests_uid) )."\">".$editIcon."</a>";
			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			
			
			$text=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT',_JOMRES_COM_MR_LISTTARIFF_LINKTEXT,$editable=false,$isLink=true) ;
			$link=JOMRES_SITEPAGE_URL.'&task=editGuest&guestUid='.($guest->guests_uid);
			$targetTask='bookGuestIn';
			$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/guestEdit.png';
			$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$text,$submitOnClick=false,$submitTask="",$image);

			$jrtb .= $jrtbar->endTable();
			$rw['EDITLINK']=$jrtb;

			$rw['FIRSTNAME']=$guest->firstname;
			$rw['SURNAME']=$guest->surname;
			$rw['HOUSE']=$guest->house;
			$rw['STREET']=$guest->street;
			$rw['TOWN']=$guest->town;
			$status = 'status=no,toolbar=20,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no';
			$link =makePopupLink(JOMRES_SITEPAGE_URL_NOHTML."?option=com_jomres&task=editCreditcard&popup=1&guestUid=".$guest->guests_uid."",jr_gettext('_JOMRES_MR_CREDITCARD_EDIT',_JOMRES_MR_CREDITCARD_EDIT,false));
			$rw['CREDITCARDLINK']=$link;

			$rows[]=$rw;

			$surname=($guest->surname);
			$surnameFirstCharArray[]=$surname{0};


			}

		$surnames=array_unique($surnameFirstCharArray);
		asort($surnames);
		$output['surnameDropdown']=filterForm('surnameFirstChars',$surnames,"");

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		
		$text=jr_gettext('_JOMRES_COM_MR_NEWGUEST',_JOMRES_COM_MR_NEWGUEST,$editable=false,$isLink=true) ;
		$link=JOMRES_SITEPAGE_URL.'&task=editGuest&Itemid='.$Itemid;
		$targetTask='editGuest';
		$image='/jomres/images/jomresimages/'.$jrtbar->imageSize.'/guestAdd.png';
		$jrtb .= $jrtbar->customToolbarItem($targetTask,$link,$text,$submitOnClick=false,$submitTask="",$image);

		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&Itemid=$Itemid"),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['PAGETITLE']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN);
		$output['ITEMID']=$Itemid;


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