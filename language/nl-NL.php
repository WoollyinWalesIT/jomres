<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Verwachte aankomsten voor vandaag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Vertrekken gasten voor vandaag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Overzicht boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Overige');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Snel reserveren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Online boeken');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Profielen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Talen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICK______DESC','Moedwillig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Algemeen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Korting');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Kamer Configuratie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Hotel Configuratie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Aanbeveling Configuratie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Terug');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Terug naar online boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Configuratie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Laad voorbeeld data');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Ja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nee');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Nieuwe toevoegen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Kamer Toevoegen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Kamer Faciliteit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Nieuw kamer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Hotel toevoegen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nieuwe hotel faciliteit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Nieuwe gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Opslaan');


// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Achternaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Aankomst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Vertrek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Leeg');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Beheer gebuikers en rechten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Gebruikersnaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Geautoriseerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Standaard Hotel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Toegangsniveau');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Gebruikersrechten aangepast!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','NVT');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Verander Hotel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Verander toegangslevel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Receptie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Hotelbeheerder');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Alle boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nieuwe boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Wijzig boeking: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Aank/Vertr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Kamer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Betaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Voornaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Achternaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Deze gast(en) moet vandaag aankomen. Klik hier als de gast(en) is/zijn aangekomen .');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Aantekeningen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Speciaal verzoek');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Houdt u er rekening mee dat er voor sommige verzoeken de prijzen niet zijn inbegrepen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Aantal volwassenen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Aantal kinderen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Annuleer deze boeking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Website gebruiker');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Huisnummer of naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Straat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Plaats');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefoon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobiel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Emailadres');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Eigenschappen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Autokenteken');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Klant geAnnuleerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Hotel geAnnuleerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Annulerings reden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Dagen tot aankomst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Annulerings kosten</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Kan niet Annuleren als de klant al is aangekomen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Eenmalig betalen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Niet betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','50% betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','50% niet betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Alles betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Niet alles betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Betalings herinnering');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Voorschot niet betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Annulering geaccepteerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Boeking geAnnuleerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dagen tot aankomst');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Boekingstype');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Leeg');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Receptie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Kamernaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Kamernummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Rolstoel toegangelijk?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max personen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Kamer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Kamer type beschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Kamer overzicht');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&#8364;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','ï¿½');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Regels');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Aanbetaling betaald');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Aanbetaling boeken');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Boeking Totaal:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Referentie aanbetaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Referentie betaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Boekingnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Aanbetaling:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Aanbetaling bewaard');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Waarschuwing...</FONT></h1><BR><B>Je moet de bestanden van je taalkeuze chmod-en naar 766 om deze te updaten.</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Snel kamer type selecteren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Keuzevakje');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Aantal volwassenen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Aantal kinderen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Kinderbed vereist?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternatieven');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSdate_DESC','Vul in hoe lang de gasten blijven of wanneer deze vertrekken');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Aantal overnachtingen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Selecteer uw kamer naar keuze, de aankomst datum, aantal nachten, vertrek datum. Tenslotte aantal volwassenen en kinderen.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Beschikbare kamers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Kamernaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Kamernummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Rolstoel toegankelijk?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max personen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Hotel naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Kamer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Sorry, maar onze beschikbare kamers zijn niet geschikt voor zoveel gasten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Sorry, de accomodatie kan niet geleverd worden in deze periode.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Selecteer uit de lijst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Selecteer deze gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Bezoekerlijst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">FOUT: Er is een fout opgetreden in de keuze van datum.<br>Ga terug & vul uw datum opnieuw in.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">FOUT: U moet min. 1 persoon selecteren.<br>Ga terug en vul uw datum opnieuw in.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALdateNOTSELECTED','<font color="red" face="arial" size="4">FOUT: De datumovereenkomst is fout.<br>Ga terug en vul uw datum opnieuw in.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">FOUT: U heeft geen kamertype geselecteerd.<br>Ga terug en vul uw datum opnieuw in.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTdateD','<font color="red" face="arial" size="4">FOUT: Uw boekingsdatum is fout.<br>Ga terug en vul uw datum opnieuw in.</font>');

// Display guest form



/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Gast details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Accepteer gast details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Wijzig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Voornaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Achternaam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Huis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Straat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Plaats');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefoon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobiel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Registratienr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kaartnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Afgiftedatum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Vervaldatum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Afgiftenummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Op naam van');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Selecteer een kamer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Selecteer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarief');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Omschrijving Tarief');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min dagen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max dagen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min personen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max personen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Overnachtingen:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Kosten per nacht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Aantal gasten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Subotaal:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Aanbetaling');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Ten minste 1 datum valt op een feestdag.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Sorry, niets gevonden bij uw zoekopdracht. Probeer opnieuw.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Configuratie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Kamers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Faciliteiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Types');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Hotels');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Hotel Faciliteiten');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Actie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Soort Kamer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Kamer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Rolstoel toegankelijk');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. Pers.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Faciliteit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Kamer toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Kamer gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Klik op de kamer om deze te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Wijzig');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Actie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Omschrijving faciliteit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Klik op de kamerfaciliteit link om deze te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Kamerfaciliteit toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Kamerfaciliteit gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Wijzig');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Actie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Klik op de kamer link om deze te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Type toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Type gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Wijzig');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Actie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Straat');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Plaats');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Provincie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postcode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefoon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Faciliteiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Klik op de link om het hotel te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Hotel toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Hotel gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Wijzig');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Facilitieiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Faciliteit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Klik op de link om de faciliteit te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Faciliteit toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Faciliteit gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Wijzig');


/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarief');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarief soort');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Van');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Tot');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Per Nacht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min Dgn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max Dgn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min Pers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max Pers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Kamer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Negeer PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Vakanties toestaan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekends toestaan');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Klik de link om het tarief te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarief toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarief gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Wijzig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Kopieer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Verwijder tarief');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarief verwijderd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Wijzigen tarieven');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Vakantie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Het einde van de vakantie is de laatste boekingsdatum.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Wijzig vakantie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Start');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Einde');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Nieuwe vakantie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Klik op de link om de vakantie te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Vakantie toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Vakantie gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Wijzig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Kopieer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Verwijder vakantie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Vakantie verwijderd');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Boeking bewaard');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Zorg ervoor dat het gehele formulier correct is ingevuld.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Alleen geregistreerde gebruikers kunnen online boeken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Registreer eerst');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Het reserveringssysteem van Hotel St. Joseph is momenteel; offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reserveer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Mijn Gegevens');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Mijn Boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Admin');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Reserveer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Check gast in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Check gast uit');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Toon alle boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Toon nieuwe Boekingen');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Calender Overzicht');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gastenbeheer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Hotelbeheer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN',' Tariefbeheer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Kortingsbeheer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Vakantiebeheer');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Selecteer het kamer type, het aantal personen e.d.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Voer uw details in voor ieder volgende bezoek.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Selecteer een kamer naar uw keuze.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Voer uw details in.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Controleer beschikbaarheid');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Ik wil deze kamer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Selecteer gast');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Accepteer gegevens');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Kies tarief');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Selecteer kamer type');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Voornaam');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Achternaam');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Huis nr.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Straat');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Plaats');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefoon');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobiel');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Er zijn geen kamers beschikbaar');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Voer uw gegevens in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Accepteer gegevens');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Bedankt voor uw boeking. U ontvangt direct een email met overzicht van uw bestelling.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Boeking gemaakt voor: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Boeking gemaakt voor ruimte nummer: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Aantal volwassenen: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Aantal kinderen: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Aankomst: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Vertrek: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Aantal nachten: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Gast ID: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Naam: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefoon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobiel: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarief: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Totaalbedrag: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Voorschot: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Sorry, we moeten uw gegevens updaten. Klik A.U.B. op de link "Mijn gegevens". Dank u.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Dank u, uw gegevens zijn bewaard.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Welkom bezoeker. Voor u kunt boeken moet u u registreren.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Welkom terug');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Boek gast in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Selecteer gast ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gast ingeboekt ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Er komen vandaag geen gasten aan');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gast uitchecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Gast uitgecheckt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Accepteer uitchecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Geen gasten checken uit vandaag');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Gast komt vandaag aan');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Gast vertrekt vandaag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Kamer bezet');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nieuwe boeking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETOdate','Bekijk kamer van:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Supplementen');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarief');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Korting');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Annuleringsvoorwaarden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Bestanden geupload');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Huidige waarde');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Toelichting / verklaring');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2006');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Boeking offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Zet boekingen offline als u geen boekingen meer wilt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Kortingsschema beschikbaar?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Het kortingsschema is voor feesten. Het is aanbevolen dit te doen per nacht basis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Niveau 1 drempel');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Niveau 2 drempel');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Niveau 3 drempel');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Niveau 4 drempel');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Niveau 1 kortingswaarden');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Niveau 2 kortingswaarden');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Niveau 3 kortingswaarden');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Niveau 4 kortingswaarden');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Eenpersoonstoeslag:');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zet dit op JA als u dit aan enkele personen wilt aanbieden');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Enkele personen suppliment');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Kinderbed supplementen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Zet dit op JA als u extra moet betalen voor suppl. a kinderbed');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Kinderbed suppliment kosten');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Voorschot percentage toegestaan?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Aantal procent van de totale boeking? Als NEE, voorschot is vaste waarden');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Voorschot waarde');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Per persoon, per nacht');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Selecteer JA als u een per persoon / per nacht wilt. NEE voor basis kosten');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Worden annuleringen terugbetaald?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Zet op JA als u geld wilt terugbetalen na een Annulering. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Bestand bestaat');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Bestandstype');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Wat voor bestand wilt u uploaden? Gebruik kommas. Voorbeeld: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Bestandsgrootte');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. grootte in Kilobytes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Klik voor week kamer start vandaag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Klik op een geboekte kamer om deze in te zien');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','of selecteer een datum');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Geboekt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Gratis');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Kamers met een blauwe achtergrond zijn geboekt, <br> als een kamer rood is is deze betaald.<br> Als een kamer een ster heeft "Booked" Dan komt de gast op deze datum<br> Is de kamer geel dan is de gast al in de kamer.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Accepteer brief');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Beste ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Kosten per nacht ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reserveringsdetails');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Bedankt voor het boeken op');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Hieronder staat het boekingsoverzicht. Controleer uw gegevens en neem contact met ons op, als er iets niet in orde is.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Uw kamer wordt voor u vastgehouden tot u aankomt, en u kunt inchecken na 2 uur &rsquo;s middags.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Wij verwachten u op ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY', 'en wensen u een prettig verblijf.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','U kunt deze bevestiging nu uitprinten.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','De boeking is nu definitief, bij annulering dient mogelijk het gehele bedrag te worden voldaan.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Voor niet verbruikte dagen, maaltijden, etc. wordt geen restitutie verleend. Ook wordt aanbevolen een reisverzekering af te sluiten.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Bij annulering gelden de volgende regels:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Bij 30 dagen of meer voor aankomst betaalt u ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','alleen de aanbetaling.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','Bij 15 tot 30 dagen betaalt u ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','de helft van de totaalprijs.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Bij aankomst binnen 14 dagen betaalt u ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','de gehele totaalprijs.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Alle tarieven zijn inclusief BTW.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Print deze bevestiging');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Printout');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Beste ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Kosten per nacht ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Duur van het verblijf: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Bedrag van de oorspronkelijke boeking: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Gemiddelde kosten per nacht: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','<b>Totaal voor deze factuur:</b>');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Details');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Bedankt voor uw verblijf in ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','We hopen dat u een plezierig verblijf heeft gehad.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','Alle tarieven zijn inclusief BTW.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Print Factuur');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Service toevoegen aan de factuur');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Service omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Bedrag');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Voeg toe aan de factuur');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Overige in rekening gebrachte items');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Subtotaal overige items: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item toegevoegd aan rekening');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Standaard hotel niet gevonden</h1><br>Kan niet door gaan. Neem contact op met de administrator.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Selecteer afbeelding om toe te voegen');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Afbeelding uploaden');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Upload');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Bestand Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Uw bestand kan zijn - max. size');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Verstuur een nieuw bestand voor de Upload');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','U mag alleen bestanden uploaden van de types:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Selecteer een bestand om te uploaden');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','De bestanden mogen alleen bestaan uit alphanumerische karakters en geen spaties.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Het bestand is te groot.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Een bestand bestaat al met deze naam. Geef het een andere naam.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Bestand geupload.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Bestand niet geupload.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Uw bestand is geupload.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Wilt u bij het jomres network?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Als u kiest om u aan te sluiten bij jomres.net, kan Jomres.net niet garanderen dat alles correct is en is nergen aansprakelijk voor.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Kalender taal bestand');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Kies het taal type. Zie http://sourceforge.net/ voor meer info');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Kies het CSS bestand');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Controleer vakanties ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','JA voor vakanties anders NEE.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Overigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','Foutcontrole aan');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Zet aan om fouten te bekijken.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Verwijder deze afbeelding');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Afbeelding verwijderd');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Bekijk vertrek veld');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Ze op JA om vertrek te zien. Aangeraden wordt om dit op NEE te houden.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Kies voor woning informatie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Elke');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Kamer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Woning');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Bekijk sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Zet aan om de SQL te bekijken.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Bekijk sql resultaat');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Zet aan om SQL data returned en var_dumped te bekijken.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Kies een template-pack');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Top knoppen css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Table headers css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Templates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Verwijder');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Niet mogelijk deze kamer te verwijderen, er zijn boekingen in.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Kamer verwijderd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Kamer faciliteit verwijderen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Niet mogelijk deze kamer faciliteit te verwijderen, omdat deze in gebruik is/is gebruikt.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Kamer faciliteit verwijderd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Hotel faciliteit verwijderen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Niet mogelijk deze woning te verwijderen, er zijn beschrijvingen voor aangemaakt.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Hotel faciliteit verwijderd');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Verwijder kamer type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Niet mogelijk deze kamer te verwijderen, gekoppeld aan een kamer.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Niet mogelijk deze kamer te verwijderen, gekoppeld aan Tarief.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Kamer type verwijderd');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Verwijder woning');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Niet mogelijk deze woning te verwijderen, er zijn beschrijvingen voor aangemaakt.: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Woning verwijderd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Uw heeft geen rechten om dit hotel te verwijderen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Kies woning');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Wat voor woning is het?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Selecteer een woning');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Er moet een hotel geselecteerd zijn');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Afbeeldingsbreedte kleine thumbnails');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Afbeeldingsbreedte medium thumbnails');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Volledige afbeeldingsbreedte');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','link naar kaart/plattegrond');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Beschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check In');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Activiteiten in de regio');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Routeinformatie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Vliegveld');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Overige vervoersmogelijkheden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Voorwaarden/Disclamer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Jomres Licentiecode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Als u klaar bent om uw site online te plaatsen, bezoek <a href="http://www.jomres.net" target="_blank">Jomres.net</a> voor een key.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Onze hotels');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Bezoekers kunnen online boeken');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Zet op JA om bezoekers van de site online te laten boeken.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Gebruik vaste boekingsperiodes');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Zet op JA wanneer u gebuik maakt van vaste boekingsperiodes (bijvoorbeeld een week of 10 dagen vooral handig bij het verhuren van huisjes.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Boekingsperiode: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Boeking kamers');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Randen boeking tabel');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Bepaal de kleur van de randen van de tabel in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Boeking tabelachtergrond');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Bepaal de kleur van de achtergrond van de tabel in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH',' Breedte boeking tabel');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Duur van de vaste boekings periode, eg 3x 7 boeking periodes = 21 dagen');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Aantal gasten vereist?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Zet op JA om het gebruik van gasten aantallen in te schakelen en te laten zien in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','1-kamer complex?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','De te verhuren ruimte wordt als geheel verhuurt. Bijvoorbeeld wanneer er huisjes worden verhuurd');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Max aantal volwassenen');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Bepaalt het max. aantal volwassenen dat kan worden ingegeven in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Max aantal kinderen');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Bepaalt het max. aantal kinderen dat kan worden ingegeven in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Accepteer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Controleer de boeking');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Bevestig de boeking');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Korting');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Waarschuwing...</FONT></h1><BR><B>chmod site_config.php file naar 777</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Maandag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Dinsdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Woensdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Donderdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Vrijdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Zaterdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Zondag');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Ma');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Di');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Wo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Vr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Za');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Zo');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Beschikbaarheidskal.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Lettertype voor kalender');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Lettergrootte voor kalender');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Kalender hoogte');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Kalender breedte');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Font kleur voor vandaag');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Font kleur dagen in de maand ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font kleur dagen niet in de maand');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Achtergrond kleur beschikbare dagen');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Achtergrond kleur dagen niet in weergegeven maand');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Achtergrond kleur voor dagen met boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Achtergrond kleur geboekte kamers');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour dagen in het verleden');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Kleurenlegenda:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Bezet/Niet beschikbaar');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Beschikbaar voor boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Voorlopige boekingen');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Vooraf ingestelde aankomstdag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Alleen voor sites met vaste periode boekingen. Kies een dag dat aankomst begint.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Vastgestelde aankomstdag');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Vaste verblijfsperiode (dagen)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Toon beschikbare data?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Zet op JA om de beschikbaarheidskalender weer te geven');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Bevestig selectie');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Beschikbaar?');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Te doen: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Bekijk gekozen datum ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Aantal gasten ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Details');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Kies ruimte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Beordeel ruimte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Bekijk uw bestelling. Klopt alles accepteer uw boeking');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Klik op een vrije datum om het boekingsformulier te bekijken.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Niet beschikbaar voor boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Geen Niet Beschikbare Boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nieuwe Niet Beschikbare Boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Zwartboek deze kamer');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Verwijder gast');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gast verwijderd');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Onmogelijk te verwijderen, deze gast heeft geboekt.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Adminpaneel bekijk tape view');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Zet op JA voor een wekelijkse tapeview.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Werkelijke kamer kosten: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Email is niet geldig ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Deze mail is ontvangen van');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Beste');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Bedankt voor uw boeking bij');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Een omschrijving van uw boeking:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Heeft u vragen neem dan contact met ons op.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Ons telefoonnummer is');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','U kunt contact met ons opnemen per email');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Roken');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Maakt niet uit');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Kalender outputformaat');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Dit staat de gebruiker toe wijzigingen aan te maken in Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Kalender inputformaat');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Dit staat de gebruiker toe wijzigingen aan te maken inputformaat van datums in Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Korte pauze');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Lengte van de pauze');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Actief');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Instellingen');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Gebruik paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Gebruik de Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Gebruik PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Uw paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Ga naar Paypal om uw account aan te maken (Profile/Website Payment Preferences) Zet auto terug: On, zet terug URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Error, de paypal mail is niet geaccepteerd');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Database Mutaties');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Geen Database Mutaties');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Tijd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Gebruiker (gebruikersnaam)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operatie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Rechten');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Details');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Alle</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter op datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter op gebruiker');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter op operatie');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Aankomst');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Aankomst Vandaag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Momenteel aanwezig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Vertrek Vandaag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Vertrek Vertraagd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Niet Aangekomen');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Onbekende gebruiker');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Maak kamer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Update kamer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Verwijder kamer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Kamerbeschrijving gemaakt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Kamerbeschrijving gewijzigd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Kamerbeschrijving verwijderd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Voeg Type toe');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Update Type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Verwijder Type');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Maak woning');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Update woning');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Verwijder woning');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Maak beschrijving');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Maak beschrijving');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Maak beschrijving');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Wijzig instellingen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Actieve woning.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarief Gemaakt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarief Gewijzigd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarief Verwijderd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Maak pub. vakantie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Wijzig pub. vakantie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Verwijder pub. vakantie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Dienstkosten toegevoegd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Annuleer boeking');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Check gast in');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Check gast uit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','CC details gewijzigd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Borg');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Maak gast');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Update gast');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Verwijder gast');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Nieuwe afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Andere afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Verwijder afbeelding');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Nieuwe afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Andere afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Nieuwe afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Andere afbeelding geupload');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Boek een kamer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Maak nieuwe optie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Update bestaande optie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Verwijder een optie');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publiceer een optie.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Maak nieuwe niet beschikbare periode.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Niet beschikbare periode verwijdert.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Opties');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Wijzig optie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Naam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Prijs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nieuwe optie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Klik om optie te wijzigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Optie toegevoegd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Optie gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Wijzig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Kloon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Verwijder optie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Optie verwijderd');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Optiebeheer');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Laat opties zien tijdens het boeken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','JA om opties te laten zien');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optie');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Selecteer dit');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Alles selecteren');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdatum niet beschikbaar voor boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Einddatum niet beschikbaar voor boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Niet beschikbaar voor boekingen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','1 of meer van de kamers is reeds geboekt. Als u deze periode toch wilt aanmaken moet u de bestaande reservering eerst annuleren.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Er is een fout opgetreden: tenminste 1 van de kamers is niet vrij in de geslecteerde periode');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Kamers niet beschikbaar gedurende deze periode: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Verwijder niet beschikbare periode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Bekijk niet beschikbare periodes');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Geen Niet Beschikbaar voor boekingen');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Aantal sterren');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Bekijk rook mogelijkheden?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Ze op JA voor rook mogelijkheden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Herstel');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Uw betaling is onderweg. Bij ontvangst wordt uw boeking bevestigd.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Boeking geannuleerd');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Zoek hier voor:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Zoek ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Bekijk paypal debugging informatie?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Bekijk kamernaam?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Zet op JA om de kamernamen te bekijken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Bekijk kamer types?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Zet op JA om kamertypes te bekijken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Standaard rook optie');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Let op: bij JA zijn alle kamers die niet roken zijn. Op de zwartboekings lijst.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Geldeenheidsymbool');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;eur& #59; Om het euro teken in te voegen gebruik de code: &euro; of bezoek <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Valutacode');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg EUR. Je hebt dit nodig als je paypal gebruikt. Voor een codelijst ga naar <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Klik voor meer info');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Waarschuwing: U bent ingelogd als manager, maar dit kan soms problemen veroorzaken met Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limiet aantal boekingen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Zet op JA om een limiet in te stellen');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Boekingslimiet ... dagen');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>Let op: Het is niet aanbevolen beide op JA te zetten, gebruik er maar 1. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Belasting');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Kamerbelasting');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Ontworpen voor de Amerikaanse markt. Dit zijn de belastingsprijzen die worden gevraagd.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Belasting vastgesteld bedrag');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Belastingspercentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Belasting');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Een markt die een blanco prijs accepteert gebruikt belastingwaarde UK. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Belastingspercentage');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Archiveer alle bestanden');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Bestanden zijn gearchiveerd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer gearchiveerde audit bestanden');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Onze Tarieven');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Naam');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Omschrijving');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Type');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Geldig van');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Geldig tot');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Per nacht');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Per nacht');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Exclusief weekends');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Min. dagen');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Max. dagen');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. personen');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. personen');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Voorbeeldweergave frontend boekingsvenster');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Wijzigingsmode aan?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Huidige tekst');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nieuwe tekst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Wijzig tekst.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wijzigen teksten');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Bekijk laatste 200');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Er zijn meer dan 200 resultaten gevonden in de database. Het is niet mogelijk alles te laten zien. Het wordt aanbevolen deze eerst tijdelijk te archiveren');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Woning type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Lijst woning types');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Wijzig woning type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Woning type');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Woning type omschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Woning type bewaard');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Onmogelijk woning type te wijzigen. Woning is gekoppeld aan meerdere woningen');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Woning type(s) is/zijn verwijderd');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Fout, woning heeft geen kamers.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Fout, woning heeft geen Tarief.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Fout, woning heeft geen kamer type.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Verander woning');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Totaal nog te voldoen:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Uw paypal betaling is bevestigd, de bon is naar u gemaild. U kunt inloggen op www.paypal.com om het rekeningsoverzicht te bekijken </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Geen extra diensten toegevoegd aan de rekening');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Voorschot');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Totaalbedrag');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Bedrag op moment van boeking');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Gebruik deze optie om te het berekenmoment te bepalen. Gebruik voorschot of volledigbedrag.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Te tonen aantal Kalendermaanden');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Deze kamer is beschikbaar, Hoeveel maanden moeten er worden getoond?');

/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Ondertekend namens');


// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Betalingsmethodes');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Annuleer');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Kies alstublieft de kamer(s) die u niet beschikbaar wilt maken, en de betreffende datums. <br>Als een kamer niet afgevinkt is, kan hij niet worden toegevoegd aan de blokkering totdat alle boekingen zijn afgelopen/geannuleerd.<br/> Als u de juiste datums hebt geselecteerd, klikt u op de blauwe "pas toe" knop om de kamerbeschikbaarheid opnieuw te controleren. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Het lijkt erop dat Joomla u heeft uitgelogd voor inactiviteit.</b> Log A.U.B. nogmaals in, en probeer het nog een keer.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Reden');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Gebruik betalingsmethodes?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Zet dit op ja als u online betalingsmiddelen wilt gepruiken. <b>Let op:</b>Dit schakelt de borgberekening niet uit tijdens het boekproces. Om dit uit te schakelen kunt u de templates die kamers tonen bewerken en de elementen die over de borg gaan verwijderen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Kies uw betalingsmethode.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Methode ingeschakeld?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin instellingen gewijzigd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin instelling toegevoegd');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Encryptie');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Gebruik mCrypt encryptie?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Zet dit op ja als u mCrypt gecompileerd in PHP hebt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Encryptiesleutel');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Encryptiemode');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Encryptiealgoritme');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Creditcard bekeken');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Creditcard gewijzigd');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','>> Bewerk creditcard');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Bewerk icoongrootte');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Gemeten in vierkante pixels.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch afbeeldingenupload');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Afbeeldingen reeds aanwezig in de Jomres afbeeldingenmap');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Diashows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Toon link naar diashows?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Toon diashow in de regel?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Zet dit op ja als u de diashow op een lijn met de beschrijving wilt tonen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Diashow volledige hoogte');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Diashow thumbnail doelhoogte');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Diashow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, geen afbeeldingen beschikbaar');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Popupvenster breedte');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Popupvenster hoogte');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Afbeeldingslocatie');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Veramder dit alleen als u een noodzaak heeft om de jomres afbeeldingen ergens anders op te slaan. Standaard als het niet is ingesteld is het \'/images/stories/jomres/\' in relatie met de joomla root.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Toon link naar tarieven?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popups toegestaan?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Als u dit op nee zet, dan worden links die normaalgesproken in een popup worden getoond, nu op dezelfde pagina geopend. EXPERIMENTEEL! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Batch afbeeldinguploads');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Gebruik dit formulier om meerdere afbeeldingen te uploaden.<br/><b>Let op:</b> Afbeeldingen met dezelfde naam worden overschreven. Let ook op dat dit formulier de afbeeldingen niet specifiek per kamer uploadt, en ook niet de hoogdafbeelding verandert. Daarvoor moet u naar het eigendommenbeheer.<br/><b>Let op:</b> AFbeeldingen die hier worden geupload worden geplaatst in de /images/stories/jomres/*property_uid* map. Als deze map niet bestaat, wordt hij aangemaakt, tenzij natuurlijk een andere map is opgegeven in de instellingen.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Overig');
/**
* @ignore
*/
define('_JOMRES_A','Site instellingen');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Gebruik globale hotel faciliteiten');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Zet dit op Ja als u alle hotels wilt dwingen om alleen de faciliteiten die de Webmaster heeft ingesteld te gebruiken.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Om een afbeelding toe te wijzen moet u eerst een hotelafbeelding uploaden naar de /images/stories/jomres/pfeatures/ map. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icoon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Selecteer de zoekplugin die u wilt gebruiken');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, uw zoekopdracht had geen resultaten. Pas AUB uw opdracht aan en probeer het nog een keer.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Weet u zeker dat u dit wilt doen?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Reserveer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Veiligheidsnummer');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Toon tarieven in de regel?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Gedetailleerde informatie');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Klik voor kamers en beschikbaarheid');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Overzicht tariefinformatie');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Toon adresinformatie onder deze link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Toon gedetaillerde beschrijving onder deze link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Toon kamers en beschikbaarheid onder deze link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Toon tariefinformatie onder deze link');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Vaste tarieven');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Gemiddelden');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Selecteer het tarievenmodel dat u wilt gebruiken');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"U heeft 2 keuzes van methodes waarop het tarief wordt berekend. De eerste, de 'vaste taruef' methode staat u toe meerder verschillende tarieven aan de gast aan te bieden en de kosten voor tijdens het verblijf blijven hetzelfde. Dit is nuttig als u meerdere tarieven wilt aanbieden voor dezelfde datum, zoals een Bed &amp; Breakfast tarief en B&amp;B met avondmaaltarief. Kies het 'gemiddelden' tarief als u wilt dat uw prijzen afhankelijk zijn van de boekingsdatum. Jomres zoekt naar alle tarieven voor elke dag van de boeking, telt ze bij elkaar op en neemt de gemiddelde prijs over de geselecteerde periode.");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Jomres portaal gebruiken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Zet dit op Ja als Jomres in samenwerking met de Jomres portalsoftware zal worden gebruikt.');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Toon invoer vertrekdatum?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Zet dit op Nee als u dit niet wilt tonen. Gebruik dit alleen als u weet wat u doet, aangezien de vertrekdatum in boekingen altijd wordt ingesteld op de dag na de aankomstdatum.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Limiet hotel beschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Dit beperkt het aantal tekens dat wordt getoond in de beschrijving.");

// v1.4g
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Factor dagelijkse kosten');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Dit staat een gebruiker toe een vermenigvuldiging toe te voegen aan de dagelijkse kosten die het boekformulier toont tijdens het boekingsproces (handig als u alles per week wilt tonen bijvoorbeeld)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Diashow popupbreedte');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Diashow popuphoogte');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Update');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Klik op de update knop om de beschikbaarheid te controleren');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Gebruik date() formaat?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Zet dit op Ja als u datums wilt formatteren zoals date() dat aangeeft (Zie <a href="http://www.php.net/manual/nl/function.date.php">hier</a>). Zet op Nee om strftime() formattering te gebruiken (see <a href="http://www.php.net/manual/nl/function.strftime.php">Here</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Hotel is momenteel inactief, klik om te activeren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Hotel is momenteel actief, klik om te de-activeren');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Vul AUB de volgende velden in: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Dankuwel.');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Inputfout omlijningskleur');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Inputfout achtergrondskleur');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Standaard land in boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Gebruik site help?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Zet dit op Ja als u wilt dat Jomres de site help text toont boven de zoekbalk.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Wijzig uw site help boekingstext hier.');


/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Items gemarkeerd met een rood sterretje zijn vereist.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Kunnen gebruikers hun eigendommen registreren?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Zet dit op Ja als u wilt dat uw gebruikers hun eigen eigendommen kunnen registreren zonder tussenkomst van de beheerder.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Geef AUB het land en de Regio van uw eigendom op.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Vul de details AUB aan.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items aangegeven met een rood sterretje zijn vereist.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Aangemaakt');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, u kunt geen eigendommen plaatsen op dit systeem. U moet een ingelogde, geregistreerde gebruiker zijn, en al eens eerder een eigendom aan hebben gemaakt.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Eigendom aangemaakt: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Voor gebruiker: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Per dag te betalen?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Per dag');

// v1.4i

/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Toon kalender vanaf het begin van het jaar?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','De beschikbaarheidskalender toont alle maanden vanaf het begin van het huidige jaar.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Toon gedetaillerde kamerinformatie?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Als u dit op Nee zet, dan probeert Jomres niet om alles te tonen tijdens de boeking. In plaats daarvan wordt alleen getoond dat het beschikbaar is.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Aantal kamers beschikbaar');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Selecteer AUB het aantal kamers dat u nodig heeft, van het tyoe dat u nodig hebt.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Nummer vereist');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Terug naar details');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Kamertypes');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Gebruik Jomres metadata?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Als u Ja kiest, gebruikt Jomres tekst die wordt herhaald in beschrijvingen om metadata te genereren. Scheid woorden af met een spatie.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stopwoorden');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Dit zijn stopwoorden, woorden waarvan u <i>niet</i> wilt dat ze in de metadata verschijnen.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Overige elementen om te verwijderen');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Tekens die uit de metadata moeten worden verwijderd. Bijvoorbeeld + of -.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Herhaling');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Hoe vaak iets moet worden herhaald om opgenomen te worden in de metadata.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Willekeurige zoeklimit');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Toon Google valuta-conversie verwijzing in de tarieventabel?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Converteer valutawaarde in :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Sta inline editing/vertaling toe?');


// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Gebruik dit formulier om uw boeking te plaatsen. Houd uw muis over de "i" afbeeldingen voor meer informatie. Bewerk uw aankomst en vertrekdatums en gastaantallen, en selecteer dan de kamers van de lijst van beschikbare kamers. Klik op een beschikbare kamer om hem aan uw boeking toe te voegen. Als u klaar bent kunt u Opties toevoegen, en uw adres geven. Als het formulier genoeg informatie heeft wordt de verzendknop beschikbaar, en kunt u uw boeking bevestigen.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Gebruik dit formulier om uw boeking te plaatsen. Houd uw muis over de "i" afbeeldingen voor meer informatie. Bewerk uw aankomst en vertrekdatums en gastaantallen, en selecteer dan de kamers van de lijst van beschikbare kamers. Klik op een beschikbare kamer om hem aan uw boeking toe te voegen. Als u klaar bent kunt u Opties toevoegen, en uw adres geven. Als het formulier genoeg informatie heeft wordt de verzendknop beschikbaar, en kunt u uw boeking bevestigen.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Boekingdata ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Selecteer de details van uw boekingsvereisten');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Beschikbaarheid ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Selecteer de kamers die u wenst');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Kijk hier om te zien of de kamer op dit moment beschikbaar is.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Opties ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Selecteer Opties voor deze boeking');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Per nacht');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Uw adres ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Voer alstublieft uw aresseringsdetails in. Let op dat alle velden vereist zijn, behalve uw mobiele telefoonnummer');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Beschikbare kamers:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Geselecteerde kamers:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>De vroegst mogelijke aankomstdatum is: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per nacht:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Totaal kamer:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Opties:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','BTW:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Korting:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','<b>Totaal:</b>');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gasten:');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klik nu om deze kamer aan uw selectie toe te voegen');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klik nu om deze kamer uit uw selectie te verwijderen');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gasttypes');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Het type gast, eg Kinderen leeftijd 5-10, of Student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Notitie');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Notities die u wilt maken over dit gasttype');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Max.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','De maximale hoeveelheid van dit klanttype dat kan worden geselecteerd in het boekingsformulier');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','In %');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Het berekende nummer is een percentage van de basiskosten berekend voor de kamer. Als dit op nee wordt gezet wordt het nummer dat u opgeeft toegevoegd of afgetrokken van de basiskosten.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','+/-');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Het berekende nummer wordt opgeteld of afgetrokken van de basiskosten die voor de kamer berekend zijn. Zet dit op Nee als u wilt dat dit een korting is op de basiskosten. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Variatie');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','De hoeveelheid variatie');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Aangepast klanttype bestelling');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Klanttype geactiveerd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Klanttype verwijderd');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Klanttype aangemaakt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Klanttype gewijzigd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Klanttype gewijzigd');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Toon lijst van eigenschappen op detailspagina?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Toon link naar kamerlijst op detailspagina?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Toon <b>alleen</b> beschikbaarheidskalender/kamerlijst?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Zet dit op Ja om het tonen van de weergave van details uit te zetten, zodat alleen de kamerlijst/beschiknaarheidskalender wordt getoond. Alleen bedoeld voor gebruikers met eenkamerappartementen(eg aparttementen, huisjes etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style om op de site te gebruiken');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Aank-Vertr minimum interval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','De mimimale interval in het boekingsformulier tussen de aankomstdatum en de vertrekdatum.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Boekingsformulier toont kamernummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Boekingsformulier toont kamernaam');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Boekingsformulier toont tariefnaam');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Boekingsformulier overlib toont naam');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Boekingsformulier overlib toont beschrijving');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Boekingsformulier overlib toont kosten/tarieven');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Boekingsformulier overlib toont begin');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Boekingsformulier overlib toont einde');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Boekingsformulier overlib toont minimum dagen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Boekingsformulier overlib toont maximum dagen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Boekingsformulier overlib toont minimum mensen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Boekingsformulier overlib toont maximum mensen');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Boekingsformulier overlib toont kamernummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Boekingsformulier overlib toont kamernaam');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Boekingsformulier overlib toont kamertype');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Boekingsformulier overlib toont kamer roken');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Boekingsformulier overlib toont rolstoel toegankelijk');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Boekingsformulier overlib toont verdieping');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Boekingsformulier overlib toont maximum mensen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Boekingsformulier overlib toont kamerfacitileiten');

/**
* @ignore
*/
define('_JOMRES_ORDER','Volgorde');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','U heeft Jomres ingesteld als een "single room property" (eg een apartement, huisje, villa) maar heeft meer dan 1 kamer aangemaakt. Dit kan tot foutmeldingen leiden bij het gebruik van Jomres, dus als u Jomres blijft gebruiken voor het beheren van een "single room property" moet u alle kamers op 1 na verwijderen voor dit eigendom.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Vereist');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dagen voor aankomst');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Het minimum aantal dagen dat moet verstrijken, van "vandaag" tot de aankomstdatum');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Per nacht:');

/**
* @ignore
*/
define('_JOMRES_DTV','Datum type variaties');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Dag van de week');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Datum periode');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Duur in dagen van het verblijf');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Dag van de week');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','De dag van de week');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Tariefklasse component selectie');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Deze dropdown laat u een gepersonaliseerd tariefklassobject dat u heeft gemaakt/gedownload en als een apart component in Joomla hebt geinstallerd. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Gast type standaard');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standaard hoeveelheid van het eerste gast type. Als u gasttypes gebruikt, is dit het standaardnummer waarop het eerste gasttype in het boekingsformulier wordt ingesteld.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Aleen geregistreerde leden kunnen boeken?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, u moet een geregistreerde gebruiker zijn om online te boeken. Klik hier om u te registreren. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font kleur voor links naar huidige boekingen');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend grenzen');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Welk dashboard plugin moet er worden gebruikt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Als u alternatieven op het Jomres dashboard hebt geinstalleerd, kunt u die hier kiezen.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Kamer is geboekt');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Zwartboekingen');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Rond borg af naar het dichtsbijzijnde hele nummer?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Aanbetaling in rekenig brengen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariefkosten bewaard als wekelijkse waarden?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','U heeft de keuze om tariefkosten als dagelijkse of wekelijkse waarden te bewaren. Als u ze als wekelijkse waarden bewaart, MOET u dit op Ja zetten.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Kosten per week');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Vaste terugkeerde aankomstdata: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Als vastgestelde aankomstdatums zijn geselecteerd, het aantal datums dat kan worden getoond in de datum drop down lijst.');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Rookkeuze ongeldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Aankomstdatum ongeldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Vertrekdatum ongeldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','De boeking is te kort. Er moeten ten minste zoveel dagen tussen aankomst en vertrek zitten:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Uw interval is');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Gasttype variant ongeldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Selecteer per type het aantal gasten');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','U heeft teveel gasten voor deze tariefgroep');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','U heeft meer kamers dan gasten geselecteerd');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Er zijn te veel gasten voor de beschikbare hoeveelheid bedden');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','U moet meer kamers kiezen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Selecteer een kamer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Voornaam is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Achternaam is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Huisnummer is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Straat is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Plaats is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Provincie is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefoon is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Mobiel is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Emailadres is vereist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Emailadres is niet geldig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Kan emaildomein niet valideren');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Er zijn nog kamers vrij!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nog geen kamers geselecteerd');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Boekingnummer');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok om te boeken, tekstvak achtergrond');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Zet dit op Ja om een DHTML dump van template variabelen voor elk FRONTEND templatebestand aan te maken als hij wordt bekeken. Nuttig als u wilt zien of een bepaald element nog kan worden gebruikt in een template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Getal is percentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Zet dit op Ja als de enkele persoonsberekingshoeveelheid een percentage is. Als dit op Nee wordt gezet wordt het gebruikt als een vast tarief.');
//Geez, I'm sure glad I finally finished this!
//Translation finished on 19-06-2006 at 18:24:27 by Thijs Haenen
//Visite my site at http://design.haenen.nl.eu.org
//Did I make a mistake? Tell me at thijsie@gmail.com!
//Aww, shucks, more were made whilst I was doing these!
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Beschikbare kamers/tarievenlimiet');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Gebruik dit om het aantal beschikbare kamers en tarieven die worden getoond in het boekingsformulier te beperken. Zet op nul voor onbeperkt. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Geen kamers vrij op dit moment!');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Gebruik globale kamertypes');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Zet dit op Ja als u alle eigendommen wilt dwingen alleen de kamertypes te gebruiken die de Webmaster heeft opgegeven. Dit moet op Ja staan als u op kamertype wilt kunnen zoeken.');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Winstmarge');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Winstmarge, procentueel.');


// Translate from here

// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Toon Jomres admin opties als iconen?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Zet op nee om alle admin links als tekst weer te geven / Ja voor iconen.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Boek deze nu!');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Globale wijzigings mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','PAS OP MET DEZE FUNCTIE. Wanneer Ja, dan heeft de wijzigingsmode effect op alle properties in het systeem.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Algemeen valuta symbool');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Zet op ja om het component in een wrapper weer te geven zodat de module en header areas niet zichtbaar zijn');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Gebruik zelfde valuta');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Zet dit veld op Ja om ervoor te zorgen dat alle eigendommen dezelfde valuta gebruiken');
//
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Zet dit op Ja om ervoor te zorgen dat alle eigendommen dezelfde valuta gebruiken (bijv. & # 8 3 6 4 ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Algemeen valuta symbool');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Zet op ja om het component in een wrapper weer te geven zodat de module en header areas niet zichtbaar zijn');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Alleen weekends');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tarief geldt alleen als de verblijfperiode een weekend dag bevat (vrijdag of zaterdag) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend dagen');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Kies uw weekend dagen. Tarieven die weekends wel/niet toestaan zullen met deze instelling rekening houden tijdens het maken van de kamerlijst.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Kies eerst het juiste land voordat accomodatie gegevens worden ingevoerd');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Sla eerst uw accomodatie gegevens op voordat een plaatje wordt ge-upload');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prijzen vanaf: ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Alles');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Regio');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Kenmerken');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Omschrijving');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Beschikbaarheid');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Zoek op land');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Zoek op regio');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Zoek op plaatsnaam');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Zoek op kenmerk');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Zoeken');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Geef uw zoekwoord in en klik op de knop.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Zoek woord(en): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Voer gewenste aankomst en vertrek datum in en klik op de knop om beschikbare accommodaties te vinden.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Toon alle accomodaties per accomadatie type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Toon alle accomodaties per kamer type.');

/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Standaard');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Naam accomodatie');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Regio');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Plaatsnaam');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Aantal sterren');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Accomodatie lijst');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Accomodatie details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Boekingsformulier');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update uw adres gegevens');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Hercontrole op kamer beschikbaarheid<br/>(Kamer selectie wordt gewist)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Hercontrole op beschikbaarheid');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Aanpassen van uw optionele extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Wijzigen van uw kamer keuze');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Bijwerken van uw adres gegevens');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, Ã©Ã©n of meer velden zijn onjuist.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript language format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Beschikbare Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','Geen log entries. Dit is normaal, Je moet handmatig jomres.php wijzigen om logging aan te zetten');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Bericht');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normaal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Geavanceerd');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tarief Configuratie Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Laat lijst met kamers zien in property details pagina?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max aantal personen per kamer');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max aantal personen per boeking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Notitie toevoegen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Notitie wijzigen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Notitie verwijderen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Overzicht notities');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nieuwe notitie toegevoegd');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notitie gewijzigd');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notitie verwijderd');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Mijn opties');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','U bent niet aangemeld. Als u zich aanmeld/registreerd op deze website kunt u uw reveringsinformatie bekijken.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lijst reserveringen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Mijn reserveringen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Lijst reserveringen, geen aanbetaling betaald');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Bekijk reservering');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Bekijk favorieten');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','U heeft nog geen favorieten toegevoegd!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Aan favorieten toevoegen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Verhuurobject type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Verhuurobjecten op site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Actief');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Deze plugin staat u toe uw tarieven dynamisch te wijzigen.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threshold (Aantal dagen tussen de aankomstdatum en vandaag)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage kamer bezetting < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage kamer bezetting < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage kamer bezetting < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage kamer bezetting < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Korting %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Kamer type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' is korting gegeven vanaf has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' tot ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Kamer prijs zonder korting ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Gebruik SSL in reserveringsformulier?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Je moet een geldig SSL certificaat hebben voor ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max aantal personen dat in het object kan');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Actief?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Zet deze op Ja als je last minute kortingen wilt hanteren.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Als een reservering is gedaan en de aankomstdag is N dagen vanaf de dag van de reservering, dan wordt de korting toegepast');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Korting');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In procenten');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Een korting is toegepast op deze reservering!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','De kosten van het verblijf zijn verminderd met ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Dit verhuurobject geeft een last minute korting van  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' procent als u aankomt voor ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' procent of meer als u aankomt voor ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Reserveer nu om dit aanbod optimaal te benutten!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','Dit verhuurobject geeft een last minute korting van  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' procent als u aankomt voor ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Reserveer nu om dit aanbod optimaal te benutten!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tarief info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Zet deze optie op Ja als u meer gedetailleerde tarief informatie wilt hebben in de verhuurobject details/tarieven popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimaliseer configuratie opties');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Wijzig reservering - Verhuurobject Selectie');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Selecteer Nieuw Verhuurobject');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Origineel Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Aanbetaling betaald');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Aanbetaling niet betaald');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Aanpassen Totaal');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Aanpassen aanbetaling');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Annuleer');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Configuratioe scherm');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuratie');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Standaard commissie');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Kies de standaard commissie dat wordt toegepast voor het geval dat er nog geen speciefieke commissie is aangemaakt voor het verhuurobject.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Overzicht commissies');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commissies');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Titel');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Commissie');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Munteenheid code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Overzicht verhuurobjecten');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Verhuuropbject naam');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Verhuurobject adres');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Verhuurobjecten waarvan de achtergrond rood is, hebben nog geen commissie toegepast.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','Licentie nummer');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Uw licentie nummer voor de portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistieken');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistieken voor: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Periode: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Verhuurobjecten - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Bekijk verhuurobejcten');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','Januarie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','Februarie');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','Maart');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','Mei');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','Juni');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','Juli');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','Augustus');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','Oktober');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Aantal reserveringen');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Waarde van reserveringen');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Bezettingsgraad');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Geschatte commissie');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commissie');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Overzicht reserveringen');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Verhuurobject id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gast id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Factuur id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Reservering totaal');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract nummer');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Munteenheid Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Aangemaakt');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Gearchiveerd');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum gearchiveerd');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Verhuurobject toevoegen');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Bron : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is dit een multiroom verhuurobject?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is dit verhuurobject als een hotel/bed en breakfast/pension? Zo ja, selecteer Ja. Als het een verhuurobject is met een enkele kamer als een Bungalow/caravan kies dan Nee.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Voeg item toe aan rekening');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Geassocieerd verhuurobject (mits van toepassing)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Waarde');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Omschrijving');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Overzicht orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodatie Totaal");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nacht(en) van");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per kamer ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Veraangenaam je verblijf Totaal ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Prijs samenvatting ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"A.u.b. Lees en ga akoord met ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"Een samenvatting van uw boeking is hieronder weergegeven.<br /> Als u iets wilt wijzigen klik dan op de Wijzig knop. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Als u bovenstaande informatie wilt wijzigen klik dan hier");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Wijzig reservering");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Voeg speciale aanvragen toe in onderstaande box.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I bevestig dat bovenstaande informatie correct is en ga akkoord met de ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Beweeg de muiscursor over de thumbnail voor een groter plaatje");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Plaats de slidewhow boven of onder de verhuurobject details.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Boven");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Onder");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Beiden");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"Per persoon per nacht ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Standaard taal bestand");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Kies het standaard taalbestand dat Jomres gebruikt als de taal niet door Joomfish wordt gezet.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"Het absolute pad naar de beschikbare logs. Let wel dat loggin moet worden aangezet in jomres.php, error loggin staat standaard aan.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Pagina');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Vor');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Vol');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','Eind');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Weergeven #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Let op: dit is geen boekingsformulier, in deze plaats stuurt u een e-mial.<br/>Type het bericht dat u wilt versturen ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Verhuurobject vragen formulier ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Bedankt voor uw vraag, uw bericht is verstuue. Een kopie van het bericht is vertuurt naar uw eigen email-adres. Er wordt zo spoedig mogelijk contact met u opgenomen.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' aangaande ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type de tekst die u in de box ziet staan');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Ik kan de karakters niet lezen. Genereer een ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Verstuur');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nieuw plaatje');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Vraag');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Selecteert u a.u.b. het betreffende verhuurobject uit de lijst aan de rechterkant');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min aantal kamers al geselecteerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimaal aantal kamers al geselecteerd in reservering voordat tarief/kamer type combo geoffreerd kan worden. Dit zorgt ervoor dat u gekorte tariefen kunt hanteren waneer er meer dan N kamers voor geselecteerd zijn. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max aantal kamers al geselecteerd');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximaal aantal kamers al geselecteerd in reservering voordat tarief/kamer type combo geoffreerd kan worden. Dit zorgt ervoor dat u gekorte tariefen kunt hanteren waneer er meer dan N kamers voor geselecteerd zijn. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Let op dat eenpersoons toeslagen die hier gezet worden niet worden toegpast als de eenpersoonstoeslagen in de algemene instellingen op Ja staan. De instellingen hier zijn een alternatief voor het hebben van  platte tariefen eenpersoonstoeslagen, niet een toevoeging.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Beschikbaar");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Bepaalde reserveringen");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half vol");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Bijna vol");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Vol");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Bekijk verhuurobject taak alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking taak alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Zoeken taak alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Voeg land toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Voeg regio toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Voeg stad toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Voeg verhuurobject toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Voeg naam verhuurobject toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Voeg verhuurobject id toe aan verhuurobject naam');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','als verhuurobjectnaam is ingesteld op Nee dan wordt de id niet gebruikt. Wanneer op Ja dan wordt de url iets van fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Zoek URL structuur - Voeg land toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Zoek URL structuur - Standaard land');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Zoek URL structuur - Voeg regio toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Zoek URL structuur - Stadaard regio');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Als alle verhuurobjecten zich in 1 regio bevinden dan wordt regio niet in het zoeken toegepast - voeg standaard regio hier toe als u het wel weergegeven wilt hebben.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Zoek URL structuur - Voeg stad toe aan url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Zoek URL structuur - Standaard stad');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Zoek URL structuur - verhuurobject type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Zoek URL structuur - Standaard verhuurobject type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Gebruikt in url wanneer zoeken geldt voor alle verhuurobject types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Of she404sef is niet geinstalleerd, of '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext is nog niet gekopieerd. Wanneer sh404sef is geinstalleerd of deze bestanden hebt gekopieerd, dan kun je je sef urls hier configureren. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetecteer Javascript kalender taal');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Autodetectie van de taal voor javascript kalenders aan zetten? Als we de taal niet kunnen detecteren vallen we terug op onderstaande instelling');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dag');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per boeking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per persoon per boeking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per persoon per dag');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per persoon per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dag (min dagen)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dag X kamers geselecteerd');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Bouw minicomponent registry opnieuw');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normaal gesproken wordt de jomres plugin registry automatisch opnieuw opgebouwd wanneer je de plugin manager bekijkt of een component verwijderd of toevoegt, echter is het mogelijk dat u deze functies niet kunt gebruiken, als dat het geval is kunt u het handmatig doen d.m.v. deze knop. Je zult de plugin registry elke keer moeten rebuilden als je handmatig een plugin installeerd, en dus geen gebruik maakt van de plugin manager.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt succesvol');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','Er is een error opgetreden tijdens het rebuilden van het register. Controleer het Jomres error log.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Uw vraag...');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");


/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_TITLE','Real estate listing');

/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
/**
* @ignore
*/
define('_JOMRES_APIKEY_REMAKE','Make new API key');
