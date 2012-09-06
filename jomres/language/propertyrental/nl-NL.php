<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Snel reserveren');
define('_JOMRES_COM_MR_SHOWPROFILES','Profielen');
define('_JOMRES_COM_MR_QUICK______DESC','Moedwillig');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Algemeen');
define('_JOMRES_COM_MR_BACK','Terug');
define('_JOMRES_COM_MR_YES','Ja');
define('_JOMRES_COM_MR_NO','Nee');
define('_JOMRES_COM_MR_NEWTARIFF','Nieuwe toevoegen');
define('_JOMRES_COM_MR_NEWPROPERTY','Hotel toevoegen');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nieuwe hotel faciliteit');
define('_JOMRES_COM_MR_NEWGUEST','Nieuwe gast');
define('_JOMRES_COM_MR_SAVE','Opslaan');
// View bookings
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Achternaam');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Aankomst');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Vertrek');
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Leeg');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Beheer gebuikers en rechten');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Naam');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Gebruikersnaam');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Geautoriseerd');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Standaard Hotel');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Wijzigen');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Toegangsniveau');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Gebruikersrechten aangepast!');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','NVT');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Receptie');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Hotelbeheerder');
// Edit bookings
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Alle boekingen');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nieuwe boekingen');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Wijzig boeking: ');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Aank/Vertr');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gast');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Kamer');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Betaling');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Voornaam');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Achternaam');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Speciaal verzoek');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Houdt u er rekening mee dat er voor sommige verzoeken de prijzen niet zijn inbegrepen.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Annuleer deze boeking');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Huisnummer of naam');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Straat');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Plaats');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefoon');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobiel');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Emailadres');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Kan niet Annuleren als de klant al is aangekomen');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Voorschot niet betaald');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Annulering geaccepteerd');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Boeking geAnnuleerd');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dagen tot aankomst');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Boekingstype');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Leeg');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Receptie');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Kamernaam');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Kamernummer');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Rolstoel toegangelijk?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max personen');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Kamer type');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Kamer type beschrijving');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Kamer overzicht');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Aanbetaling betaald');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Aanbetaling boeken');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Boeking Totaal:');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Referentie aanbetaling');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Boekingnummer');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Aanbetaling:');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Aanbetaling bewaard');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Beschikbare kamers');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Hotel naam');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Kamer type');
// Display guest form
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Wijzig');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Voornaam');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Achternaam');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Huis');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Straat');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Plaats');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postcode');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefoon');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobiel');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kaartnummer');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Afgiftedatum');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Vervaldatum');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Afgiftenummer');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Op naam van');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Selecteer een kamer');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Overnachtingen:');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Aantal gasten');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Subotaal:');
// Rooms tab
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Configuratie');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Kamers');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Faciliteiten');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Types');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Hotels');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Hotel Faciliteiten');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Actie');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Soort Kamer');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Naam');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nr.');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Rolstoel toegankelijk');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. Pers.');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Faciliteit');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Kamer toegevoegd');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Wijzig');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Actie');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Omschrijving faciliteit');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Kamerfaciliteit toegevoegd');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Kamerfaciliteit gewijzigd');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Actie');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Type');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Omschrijving');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Type toegevoegd');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Type gewijzigd');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Wijzig');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Naam');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Straat');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Plaats');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Provincie');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postcode');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefoon');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Faciliteiten');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Hotel toegevoegd');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Hotel gewijzigd');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Facilitieiten');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Faciliteit');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Omschrijving');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Faciliteit toegevoegd');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Faciliteit gewijzigd');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarief');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarief soort');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Omschrijving');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Van');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Tot');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Per Nacht');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min Dgn');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max Dgn');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min Pers');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max Pers');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Kamer type');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Negeer PPPN');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekends toestaan');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarief toegevoegd');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarief gewijzigd');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Wijzig');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Kopieer');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarief verwijderd');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Wijzigen tarieven');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Vakantie');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Boeking bewaard');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reserveer');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Check gast in');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Check gast uit');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Toon alle boekingen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Toon nieuwe Boekingen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Calender Overzicht');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gastenbeheer');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Hotelbeheer');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Controleer beschikbaarheid');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Accepteer gegevens');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Voornaam');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Achternaam');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Huis nr.');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Straat');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Plaats');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postcode');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefoon');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobiel');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Er zijn geen kamers beschikbaar');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Bedankt voor uw boeking. U ontvangt direct een email met overzicht van uw bestelling.</center>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Boeking gemaakt voor: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Boeking gemaakt voor ruimte nummer: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Aankomst: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Vertrek: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Naam: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefoon: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobiel: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Totaalbedrag: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Boek gast in');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Selecteer gast ');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gast ingeboekt ');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Er komen vandaag geen gasten aan');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gast uitchecken');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Geen gasten checken uit vandaag');
// Config panel
define('_JOMRES_COM_A_SUPPLIMENTS','Supplementen');
define('_JOMRES_COM_A_TARIFFS','Tarief');
define('_JOMRES_COM_A_DISCOUNTS','Korting');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Bestanden geupload');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Huidige waarde');
define('_JOMRES_COM_A_EXPLANATION','Toelichting / verklaring');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Eenpersoonstoeslag:');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zet dit op JA als u dit aan enkele personen wilt aanbieden');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Enkele personen suppliment');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Voorschot percentage toegestaan?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Aantal procent van de totale boeking? Als NEE, voorschot is vaste waarden');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Voorschot waarde');
define('_JOMRES_COM_A_TARIFFS_PER','Per persoon, per nacht');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Selecteer JA als u een per persoon / per nacht wilt. NEE voor basis kosten');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Bestandsgrootte');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. grootte in Kilobytes');
define('_JOMRES_FRONT_MR_BOOKED','Geboekt');
define('_JOMRES_COM_CONFIRMATION_TITLE','Accepteer brief');
define('_JOMRES_COM_CONFIRMATION_DEAR','Beste ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Kosten per nacht ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reserveringsdetails');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Bedankt voor het boeken op');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Hieronder staat het boekingsoverzicht. Controleer uw gegevens en neem contact met ons op, als er iets niet in orde is.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Uw kamer wordt voor u vastgehouden tot u aankomt, en u kunt inchecken na 2 uur &rsquo;s middags.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Wij verwachten u op ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY', 'en wensen u een prettig verblijf.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','U kunt deze bevestiging nu uitprinten.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','De boeking is nu definitief, bij annulering dient mogelijk het gehele bedrag te worden voldaan.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Voor niet verbruikte dagen, maaltijden, etc. wordt geen restitutie verleend. Ook wordt aanbevolen een reisverzekering af te sluiten.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Bij annulering gelden de volgende regels:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Bij 30 dagen of meer voor aankomst betaalt u ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','alleen de aanbetaling.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','Bij 15 tot 30 dagen betaalt u ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','de helft van de totaalprijs.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Bij aankomst binnen 14 dagen betaalt u ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','de gehele totaalprijs.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Alle tarieven zijn inclusief BTW.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Print deze bevestiging');
define('_JOMRES_COM_INVOICE_TITLE','Printout');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Duur van het verblijf: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Bedrag van de oorspronkelijke boeking: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Gemiddelde kosten per nacht: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','<b>Totaal voor deze factuur:</b>');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Bedankt voor uw verblijf in ');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','We hopen dat u een plezierig verblijf heeft gehad.');
define('_JOMRES_COM_INVOICE_PRINT','Print Factuur');
define('_JOMRES_COM_ADDSERVICE_TITLE','Service toevoegen aan de factuur');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Service omschrijving');
define('_JOMRES_COM_ADDSERVICE_VALUE','Bedrag');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Overige in rekening gebrachte items');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Subtotaal overige items: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Item toegevoegd aan rekening');
define('_JOMRES_UPLOAD_IMAGE','Afbeelding uploaden');
define('_JOMRES_FILE_UPLOAD','Bestand Upload');
define('_JOMRES_FILE_ERROR_TYPE','U mag alleen bestanden uploaden van de types:\n');
define('_JOMRES_FILE_ERROR_EMPTY','Selecteer een bestand om te uploaden');
define('_JOMRES_FILE_ERROR_NAME','De bestanden mogen alleen bestaan uit alphanumerische karakters en geen spaties.');
define('_JOMRES_FILE_ERROR_SIZE','Het bestand is te groot.');
define('_JOMRES_FILE_NOT_UPLOADED','Bestand niet geupload.');
define('_JOMRES_FILE_UPDATED','Uw bestand is geupload.');
define('_JOMRES_COM_A_JSCALENDAR','JS Kalender');
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Kalender taal bestand');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Kies het taal type. Zie http://sourceforge.net/ voor meer info');
define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS file');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Kies het CSS bestand');
define('_JOMRES_COM_A_ODDS','Overigen');
define('_JOMRES_COM_A_ERRORCHECKING','Foutcontrole aan');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Zet aan om fouten te bekijken.');
define('_JOMRES_FILE_DELETE','Verwijder deze afbeelding');
define('_JOMRES_FILE_DELETED','Afbeelding verwijderd');
define('_JOMRES_COM_MR_ROOM_DELETE','Verwijder');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Niet mogelijk deze kamer te verwijderen, er zijn boekingen in.');
define('_JOMRES_COM_MR_ROOM_DELETED','Kamer verwijderd');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Kamer faciliteit verwijderen');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Niet mogelijk deze kamer faciliteit te verwijderen, omdat deze in gebruik is/is gebruikt.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Kamer faciliteit verwijderd');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Hotel faciliteit verwijderen');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Niet mogelijk deze woning te verwijderen, er zijn beschrijvingen voor aangemaakt.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Hotel faciliteit verwijderd');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Verwijder kamer type');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Niet mogelijk deze kamer te verwijderen, gekoppeld aan een kamer.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Niet mogelijk deze kamer te verwijderen, gekoppeld aan Tarief.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Kamer type verwijderd');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Verwijder woning');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Woning verwijderd');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Uw heeft geen rechten om dit hotel te verwijderen.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Volledige afbeeldingsbreedte');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','link naar kaart/plattegrond');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Beschrijving');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check In');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Activiteiten in de regio');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Routeinformatie');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Vliegveld');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Overige vervoersmogelijkheden');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Voorwaarden/Disclamer');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Bezoekers kunnen online boeken');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Zet op JA om bezoekers van de site online te laten boeken.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Gebruik vaste boekingsperiodes');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Zet op JA wanneer u gebuik maakt van vaste boekingsperiodes (bijvoorbeeld een week of 10 dagen vooral handig bij het verhuren van huisjes.');
define('_JOMRES_COM_A_FIXEDPERIOD','Boekingsperiode: ');
define('_JOMRES_COM_A_BOOKING','Boeking kamers');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Duur van de vaste boekings periode, eg 3x 7 boeking periodes = 21 dagen');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','1-kamer complex?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','De te verhuren ruimte wordt als geheel verhuurt. Bijvoorbeeld wanneer er huisjes worden verhuurd');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Controleer de boeking');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Bevestig de boeking');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Maandag');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Dinsdag');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Woensdag');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Donderdag');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Vrijdag');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Zaterdag');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Zondag');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Ma');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Di');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Wo');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Do');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Vr');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Za');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Zo');
define('_JOMRES_COM_A_AVLCAL','Beschikbaarheidskal.');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Font kleur voor vandaag');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Font kleur dagen in de maand ');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Font kleur dagen niet in de maand');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Achtergrond kleur beschikbare dagen');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Achtergrond kleur dagen niet in weergegeven maand');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Achtergrond kleur voor dagen met boekingen');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Achtergrond kleur geboekte kamers');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour dagen in het verleden');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Bezet/Niet beschikbaar');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Beschikbaar voor boekingen');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Voorlopige boekingen');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Vooraf ingestelde aankomstdag');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Alleen voor sites met vaste periode boekingen. Kies een dag dat aankomst begint.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Vastgestelde aankomstdag');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Vaste verblijfsperiode (dagen)');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Toon beschikbare data?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Zet op JA om de beschikbaarheidskalender weer te geven');
define('_JOMRES_FRONT_AVAILABILITY','Beschikbaar?');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Klik op een vrije datum om het boekingsformulier te bekijken.');
define('_JOMRES_FRONT_BLACKBOOKING','Niet beschikbaar voor boekingen');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nieuwe Niet Beschikbare Boekingen');
define('_JOMRES_FRONT_DELETEGUEST','Verwijder gast');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gast verwijderd');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Onmogelijk te verwijderen, deze gast heeft geboekt.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Werkelijke kamer kosten: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Beste');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Bedankt voor uw boeking bij');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Een omschrijving van uw boeking:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Heeft u vragen neem dan contact met ons op.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Ons telefoonnummer is');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','U kunt contact met ons opnemen per email');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Roken');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Maakt niet uit');
define('_JOMRES_COM_CALENDAROUTPUT','Kalender outputformaat');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Dit staat de gebruiker toe wijzigingen aan te maken in Jomres');
define('_JOMRES_COM_CALENDARINPUT','Kalender inputformaat');
define('_JOMRES_COM_CALENDARINPUT_DESC','Dit staat de gebruiker toe wijzigingen aan te maken inputformaat van datums in Jomres.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Korte pauze');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Lengte van de pauze');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Actief');
define('_JOMRES_COM_A_PAYPAL','Paypal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Database Mutaties');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Tijd');
define('_JOMRES_MR_AUDIT_LISTING_USER','Gebruiker (gebruikersnaam)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operatie');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Details');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filter op datum');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filter op gebruiker');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter op operatie');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Aankomst');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Aankomst Vandaag');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Momenteel aanwezig');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Vertrek Vandaag');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Vertrek Vertraagd');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Niet Aangekomen');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Onbekende gebruiker');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Maak kamer');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Update kamer');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Verwijder kamer');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Kamerbeschrijving gemaakt');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Kamerbeschrijving gewijzigd');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Kamerbeschrijving verwijderd');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Voeg Type toe');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Update Type');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Verwijder Type');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Maak woning');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Update woning');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Verwijder woning');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Maak beschrijving');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Maak beschrijving');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Maak beschrijving');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Wijzig instellingen');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Actieve woning.');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarief Gemaakt');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarief Gewijzigd');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarief Verwijderd');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Dienstkosten toegevoegd');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Check gast in');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Check gast uit');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Borg');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Maak gast');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Update gast');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Verwijder gast');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Boek een kamer');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Maak nieuwe optie');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Update bestaande optie');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Verwijder een optie');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Publiceer een optie.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Maak nieuwe niet beschikbare periode.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Niet beschikbare periode verwijdert.');
define('_JOMRES_COM_MR_EXTRA_TITLE','Opties');
define('_JOMRES_COM_MR_EXTRA_DESC','Omschrijving');
define('_JOMRES_COM_MR_EXTRA_NAME','Naam');
define('_JOMRES_COM_MR_EXTRA_PRICE','Prijs');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Optie gewijzigd');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Wijzig');
define('_JOMRES_COM_MR_EXTRA_DELETED','Optie verwijderd');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Optiebeheer');
define('_JOMRES_COM_A_EXTRAS','Laat opties zien tijdens het boeken?');
define('_JOMRES_COM_A_EXTRAS_DESC','JA om opties te laten zien');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optie');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdatum niet beschikbaar voor boekingen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Einddatum niet beschikbaar voor boekingen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Niet beschikbaar voor boekingen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Er is een fout opgetreden: tenminste 1 van de kamers is niet vrij in de geslecteerde periode');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Kamers niet beschikbaar gedurende deze periode: ');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Bekijk niet beschikbare periodes');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Geen Niet Beschikbaar voor boekingen');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Aantal sterren');
define('_JOMRES_COM_A_SMOKING','Bekijk rook mogelijkheden?');
define('_JOMRES_COM_A_SMOKING_DESC','Ze op JA voor rook mogelijkheden.');
define('_JOMRES_COM_A_RESET','Herstel');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Boeking geannuleerd');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Zoek hier voor:');
define('_JOMRES_COM_A_SMOKING_OPTION','Standaard rook optie');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Geldeenheidsymbool');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Eg &amp;eur& #59; Om het euro teken in te voegen gebruik de code: &euro; of bezoek <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
define('_JOMRES_COM_A_CURRENCYCODE','Valutacode');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg EUR. Je hebt dit nodig als je paypal gebruikt. Voor een codelijst ga naar <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Klik voor meer info');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Limiet aantal boekingen?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Zet op JA om een limiet in te stellen');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Boekingslimiet ... dagen');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>Let op: Het is niet aanbevolen beide op JA te zetten, gebruik er maar 1. </FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','Belasting');
define('_JOMRES_COM_A_ROOMTAX','Kamerbelasting');
define('_JOMRES_COM_A_ROOMTAX_DESC','Ontworpen voor de Amerikaanse markt. Dit zijn de belastingsprijzen die worden gevraagd.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Belasting vastgesteld bedrag');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Belastingspercentage');
define('_JOMRES_COM_A_EUROTAX','Belasting');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Belastingspercentage');
define('_JOMRES_MR_AUDIT_ARCHIVE','Archiveer alle bestanden');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Bestanden zijn gearchiveerd');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer gearchiveerde audit bestanden');
define('_JOMRES_FRONT_TARIFFS','Onze Tarieven');
define('_JOMRES_FRONT_TARIFFS_TITLE','Naam');
define('_JOMRES_FRONT_TARIFFS_DESC','Omschrijving');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Type');
define('_JOMRES_FRONT_TARIFFS_STARTS','Geldig van');
define('_JOMRES_FRONT_TARIFFS_ENDS','Geldig tot');
define('_JOMRES_FRONT_TARIFFS_PPPN','Per nacht');
define('_JOMRES_FRONT_TARIFFS_PN','Per nacht');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Exclusief weekends');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Min. dagen');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Max. dagen');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. personen');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. personen');
define('_JOMRES_FRONT_PREVIEW','Voorbeeldweergave frontend boekingsvenster');
define('_JOMRES_COM_A_EDITINGMODEON','Wijzigingsmode aan?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Huidige tekst');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nieuwe tekst');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Wijzig tekst.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wijzigen teksten');
define('_JOMRES_COM_A_AUDITING_SHOWING','Bekijk laatste 200');
define('_JOMRES_FRONT_PTYPE','Woning type');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Lijst woning types');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Wijzig woning type');
define('_JOMRES_COM_PTYPES_PTYPE','Woning type');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Woning type omschrijving');
define('_JOMRES_COM_PTYPES_SAVED','Woning type bewaard');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Onmogelijk woning type te wijzigen. Woning is gekoppeld aan meerdere woningen');
define('_JOMRES_COM_PTYPES_DELETED','Woning type(s) is/zijn verwijderd');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Totaal nog te voldoen:');
define('_JOMRES_EXTRAS_NOEXTRAS','Geen extra diensten toegevoegd aan de rekening');
define('_JOMRES_COM_CHARGING_DEPOSIT','Voorschot');
define('_JOMRES_COM_CHARGING_FULLAMT','Totaalbedrag');
define('_JOMRES_COM_CHARGING_CONFIG','Bedrag op moment van boeking');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Gebruik deze optie om te het berekenmoment te bepalen. Gebruik voorschot of volledigbedrag.');
define('_JOMRES_COM_MONTHSTOSHOW','Te tonen aantal Kalendermaanden');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Deze kamer is beschikbaar, Hoeveel maanden moeten er worden getoond?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Ondertekend namens');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Betalingsmethodes');
define('_JOMRES_COM_A_CANCEL','Annuleer');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Kies alstublieft de kamer(s) die u niet beschikbaar wilt maken, en de betreffende datums. <br>Als een kamer niet afgevinkt is, kan hij niet worden toegevoegd aan de blokkering totdat alle boekingen zijn afgelopen/geannuleerd.<br/> Als u de juiste datums hebt geselecteerd, klikt u op de blauwe "pas toe" knop om de kamerbeschikbaarheid opnieuw te controleren. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Het lijkt erop dat Joomla u heeft uitgelogd voor inactiviteit.</b> Log A.U.B. nogmaals in, en probeer het nog een keer.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Reden');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Gebruik betalingsmethodes?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Zet dit op ja als u online betalingsmiddelen wilt gepruiken. <b>Let op:</b>Dit schakelt de borgberekening niet uit tijdens het boekproces. Om dit uit te schakelen kunt u de templates die kamers tonen bewerken en de elementen die over de borg gaan verwijderen.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Kies uw betalingsmethode.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Methode ingeschakeld?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin instellingen gewijzigd');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin instelling toegevoegd');
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Creditcard bekeken');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Creditcard gewijzigd');
define('_JOMRES_MR_CREDITCARD_EDIT','>> Bewerk creditcard');
define('_JOMRES_COM_A_EDITICON','Bewerk icoongrootte');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch afbeeldingenupload');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Afbeeldingen reeds aanwezig in de Jomres afbeeldingenmap');
define('_JOMRES_COM_A_SLIDESHOWS','Diashows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Toon link naar diashows?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Toon diashow in de regel?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Diashow thumbnail doelhoogte');
define('_JOMRES_FRONT_SLIDESHOW','Diashow');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, geen afbeeldingen beschikbaar');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Toon link naar tarieven?');
define('_JOMRES_COM_A_POPUPSALLOWED','Popups toegestaan?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Als u dit op nee zet, dan worden links die normaalgesproken in een popup worden getoond, nu op dezelfde pagina geopend. EXPERIMENTEEL! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Batch afbeeldinguploads');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Gebruik dit formulier om meerdere afbeeldingen te uploaden.<br/><b>Let op:</b> Afbeeldingen met dezelfde naam worden overschreven. Let ook op dat dit formulier de afbeeldingen niet specifiek per kamer uploadt, en ook niet de hoogdafbeelding verandert. Daarvoor moet u naar het eigendommenbeheer.<br/><b>Let op:</b> AFbeeldingen die hier worden geupload worden geplaatst in de /images/stories/jomres/*property_uid* map. Als deze map niet bestaat, wordt hij aangemaakt, tenzij natuurlijk een andere map is opgegeven in de instellingen.');
define('_JOMRES_A_TABS_MISC','Overig');
define('_JOMRES_A','Site instellingen');
define('_JOMRES_A_GLOBALPFEATURES','Gebruik globale hotel faciliteiten');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Zet dit op Ja als u alle hotels wilt dwingen om alleen de faciliteiten die de Webmaster heeft ingesteld te gebruiken.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Om een afbeelding toe te wijzen moet u eerst een hotelafbeelding uploaden naar de /images/stories/jomres/pfeatures/ map. ');
define('_JOMRES_A_ICON','Icoon');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Selecteer de zoekplugin die u wilt gebruiken');
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, uw zoekopdracht had geen resultaten. Pas AUB uw opdracht aan en probeer het nog een keer.</b>');
define('_JOMRES_AREYOUSURE','Weet u zeker dat u dit wilt doen?');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Reserveer');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Veiligheidsnummer');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Toon tarieven in de regel?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Gedetailleerde informatie');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Klik voor kamers en beschikbaarheid');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Overzicht tariefinformatie');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Toon adresinformatie onder deze link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Toon gedetaillerde beschrijving onder deze link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Toon kamers en beschikbaarheid onder deze link');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Toon tariefinformatie onder deze link');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Vaste tarieven');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Gemiddelden');
define('_JOMRES_COM_A_TARIFFS_MODEL','Selecteer het tarievenmodel dat u wilt gebruiken');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"U heeft 2 keuzes van methodes waarop het tarief wordt berekend. De eerste, de 'vaste taruef' methode staat u toe meerder verschillende tarieven aan de gast aan te bieden en de kosten voor tijdens het verblijf blijven hetzelfde. Dit is nuttig als u meerdere tarieven wilt aanbieden voor dezelfde datum, zoals een Bed &amp; Breakfast tarief en B&amp;B met avondmaaltarief. Kies het 'gemiddelden' tarief als u wilt dat uw prijzen afhankelijk zijn van de boekingsdatum. Jomres zoekt naar alle tarieven voor elke dag van de boeking, telt ze bij elkaar op en neemt de gemiddelde prijs over de geselecteerde periode.");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Toon invoer vertrekdatum?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Zet dit op Nee als u dit niet wilt tonen. Gebruik dit alleen als u weet wat u doet, aangezien de vertrekdatum in boekingen altijd wordt ingesteld op de dag na de aankomstdatum.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Limiet hotel beschrijving');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Dit beperkt het aantal tekens dat wordt getoond in de beschrijving.");
// v1.4g
define('_JOMRES_COM_A_DATEFORMATSTYLE','Gebruik date() formaat?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Zet dit op Ja als u datums wilt formatteren zoals date() dat aangeeft (Zie <a href="http://www.php.net/manual/nl/function.date.php">hier</a>). Zet op Nee om strftime() formattering te gebruiken (see <a href="http://www.php.net/manual/nl/function.strftime.php">Here</a> eg. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Hotel is momenteel inactief, klik om te activeren');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Hotel is momenteel actief, klik om te de-activeren');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Inputfout achtergrondskleur');
define('_JOMRES_COM_CONFIGCOUNTRIES','Standaard land in boekingsformulier');
define('_JOMRES_JAVASCRIPT_','Items gemarkeerd met een rood sterretje zijn vereist.');
define('_JOMRES_COM_SELFREGISTRATION','Kunnen gebruikers hun eigendommen registreren?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Zet dit op Ja als u wilt dat uw gebruikers hun eigen eigendommen kunnen registreren zonder tussenkomst van de beheerder.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Geef AUB het land en de Regio van uw eigendom op.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Vul de details AUB aan.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Items aangegeven met een rood sterretje zijn vereist.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Aangemaakt');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, u kunt geen eigendommen plaatsen op dit systeem. U moet een ingelogde, geregistreerde gebruiker zijn, en al eens eerder een eigendom aan hebben gemaakt.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Eigendom aangemaakt: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Voor gebruiker: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Toon kalender vanaf het begin van het jaar?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','De beschikbaarheidskalender toont alle maanden vanaf het begin van het huidige jaar.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Aantal kamers beschikbaar');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Terug naar details');
define('_JOMRES_FRONT_ROOMTYPES','Kamertypes');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Willekeurige zoeklimit');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Toon Google valuta-conversie verwijzing in de tarieventabel?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Converteer valutawaarde in :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Sta inline editing/vertaling toe?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Gebruik dit formulier om uw boeking te plaatsen. Houd uw muis over de "i" afbeeldingen voor meer informatie. Bewerk uw aankomst en vertrekdatums en gastaantallen, en selecteer dan de kamers van de lijst van beschikbare kamers. Klik op een beschikbare kamer om hem aan uw boeking toe te voegen. Als u klaar bent kunt u Opties toevoegen, en uw adres geven. Als het formulier genoeg informatie heeft wordt de verzendknop beschikbaar, en kunt u uw boeking bevestigen.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Gebruik dit formulier om uw boeking te plaatsen. Houd uw muis over de "i" afbeeldingen voor meer informatie. Bewerk uw aankomst en vertrekdatums en gastaantallen, en selecteer dan de kamers van de lijst van beschikbare kamers. Klik op een beschikbare kamer om hem aan uw boeking toe te voegen. Als u klaar bent kunt u Opties toevoegen, en uw adres geven. Als het formulier genoeg informatie heeft wordt de verzendknop beschikbaar, en kunt u uw boeking bevestigen.');
define('_JOMRES_AJAXFORM_PARTICULARS','Boekingdata ');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Selecteer de details van uw boekingsvereisten');
define('_JOMRES_AJAXFORM_AVAILABLE','Beschikbaarheid ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Selecteer de kamers die u wenst');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Kijk hier om te zien of de kamer op dit moment beschikbaar is.');
define('_JOMRES_AJAXFORM_EXTRAS','Opties ');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Selecteer Opties voor deze boeking');
define('_JOMRES_COM_PERDAY','Per nacht');
define('_JOMRES_AJAXFORM_ADDRESS','Uw adres ');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Voer alstublieft uw aresseringsdetails in. Let op dat alle velden vereist zijn, behalve uw mobiele telefoonnummer');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Beschikbare kamers:');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Geselecteerde kamers:');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>De vroegst mogelijke aankomstdatum is: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Per nacht:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Totaal kamer:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Opties:');
define('_JOMRES_AJAXFORM_BILLING_TAX','BTW:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Korting:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','<b>Totaal:</b>');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gasten:');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klik nu om deze kamer aan uw selectie toe te voegen');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klik nu om deze kamer uit uw selectie te verwijderen');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gasttypes');
define('_JOMRES_VARIANCES_TYPE','Type');
define('_JOMRES_VARIANCES_TYPE_TT','Het type gast, eg Kinderen leeftijd 5-10, of Student ');
define('_JOMRES_VARIANCES_NOTES','Notitie');
define('_JOMRES_VARIANCES_NOTES_TT','Notities die u wilt maken over dit gasttype');
define('_JOMRES_VARIANCES_MAXIMUM','Max.');
define('_JOMRES_VARIANCES_MAXIMUM_TT','De maximale hoeveelheid van dit klanttype dat kan worden geselecteerd in het boekingsformulier');
define('_JOMRES_VARIANCES_ISPERCENTAGE','In %');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Het berekende nummer is een percentage van de basiskosten berekend voor de kamer. Als dit op nee wordt gezet wordt het nummer dat u opgeeft toegevoegd of afgetrokken van de basiskosten.');
define('_JOMRES_VARIANCES_POSNEG','+/-');
define('_JOMRES_VARIANCES_POSNEG_TT','Het berekende nummer wordt opgeteld of afgetrokken van de basiskosten die voor de kamer berekend zijn. Zet dit op Nee als u wilt dat dit een korting is op de basiskosten. ');
define('_JOMRES_VARIANCES_VARIANCE','Variatie');
define('_JOMRES_VARIANCES_VARIANCE_TT','De hoeveelheid variatie');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Aangepast klanttype bestelling');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Klanttype geactiveerd');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Klanttype verwijderd');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Klanttype aangemaakt');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Klanttype gewijzigd');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Klanttype gewijzigd');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Toon link naar kamerlijst op detailspagina?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Toon <b>alleen</b> beschikbaarheidskalender/kamerlijst?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Zet dit op Ja om het tonen van de weergave van details uit te zetten, zodat alleen de kamerlijst/beschiknaarheidskalender wordt getoond. Alleen bedoeld voor gebruikers met eenkamerappartementen(eg aparttementen, huisjes etc).');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Aank-Vertr minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','De mimimale interval in het boekingsformulier tussen de aankomstdatum en de vertrekdatum.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Boekingsformulier toont kamernummer');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Boekingsformulier toont kamernaam');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Boekingsformulier toont tariefnaam');
define('_JOMRES_ORDER','Volgorde');
define('_JOMRES_REQUIREDFIELDS','Vereist');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dagen voor aankomst');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Het minimum aantal dagen dat moet verstrijken, van "vandaag" tot de aankomstdatum');
define('_JOMRES_DTV','Datum type variaties');
define('_JOMRES_DTV_DOW','Dag van de week');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Gast type standaard');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standaard hoeveelheid van het eerste gast type. Als u gasttypes gebruikt, is dit het standaardnummer waarop het eerste gasttype in het boekingsformulier wordt ingesteld.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Aleen geregistreerde leden kunnen boeken?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, u moet een geregistreerde gebruiker zijn om online te boeken. Klik hier om u te registreren. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Font kleur voor links naar huidige boekingen');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend grenzen');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Kamer is geboekt');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Zwartboekingen');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Rond borg af naar het dichtsbijzijnde hele nummer?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Aanbetaling in rekenig brengen?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Tariefkosten bewaard als wekelijkse waarden?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','U heeft de keuze om tariefkosten als dagelijkse of wekelijkse waarden te bewaren. Als u ze als wekelijkse waarden bewaart, MOET u dit op Ja zetten.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Kosten per week');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Vaste terugkeerde aankomstdata: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Als vastgestelde aankomstdatums zijn geselecteerd, het aantal datums dat kan worden getoond in de datum drop down lijst.');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Rookkeuze ongeldig');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Aankomstdatum ongeldig');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Vertrekdatum ongeldig');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','De boeking is te kort. Er moeten ten minste zoveel dagen tussen aankomst en vertrek zitten:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Uw interval is');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Gasttype variant ongeldig');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Selecteer per type het aantal gasten');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','U heeft teveel gasten voor deze tariefgroep');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','U heeft meer kamers dan gasten geselecteerd');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Er zijn te veel gasten voor de beschikbare hoeveelheid bedden');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','U moet meer kamers kiezen');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Selecteer een kamer');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Voornaam is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Achternaam is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Huisnummer is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Straat is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Plaats is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Provincie is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postcode is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefoon is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Mobiel is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Emailadres is vereist');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Emailadres is niet geldig');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Kan emaildomein niet valideren');
define('_JOMRES_SRP_WEHAVEVACANCIES','Er zijn nog kamers vrij!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nog geen kamers geselecteerd');
define('_JOMRES_BOOKING_NUMBER','Boekingnummer');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok om te boeken, tekstvak achtergrond');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump template vars?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Zet dit op Ja om een DHTML dump van template variabelen voor elk FRONTEND templatebestand aan te maken als hij wordt bekeken. Nuttig als u wilt zien of een bepaald element nog kan worden gebruikt in een template.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Getal is percentage');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Zet dit op Ja als de enkele persoonsberekingshoeveelheid een percentage is. Als dit op Nee wordt gezet wordt het gebruikt als een vast tarief.');
//Geez, I'm sure glad I finally finished this!
//Translation finished on 19-06-2006 at 18:24:27 by Thijs Haenen
//Visite my site at http://design.haenen.nl.eu.org
//Did I make a mistake? Tell me at thijsie@gmail.com!
//Aww, shucks, more were made whilst I was doing these!
define('_JOMRES_COM_LIMITROOMSLIST','Beschikbare kamers/tarievenlimiet');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Gebruik dit om het aantal beschikbare kamers en tarieven die worden getoond in het boekingsformulier te beperken. Zet op nul voor onbeperkt. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Geen kamers vrij op dit moment!');
define('_JOMRES_A_GLOBALROOMTYPES','Gebruik globale kamertypes');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Zet dit op Ja als u alle eigendommen wilt dwingen alleen de kamertypes te gebruiken die de Webmaster heeft opgegeven. Dit moet op Ja staan als u op kamertype wilt kunnen zoeken.');
// Introduced in v2.5
// Translate from here
// v2.6
define('_JOMRES_BOOKITNOW','Boek deze nu!');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Globale wijzigings mode?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','PAS OP MET DEZE FUNCTIE. Wanneer Ja, dan heeft de wijzigingsmode effect op alle properties in het systeem.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Algemeen valuta symbool');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Zet op ja om het component in een wrapper weer te geven zodat de module en header areas niet zichtbaar zijn');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Gebruik zelfde valuta');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Zet dit veld op Ja om ervoor te zorgen dat alle eigendommen dezelfde valuta gebruiken');
//
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Zet dit op Ja om ervoor te zorgen dat alle eigendommen dezelfde valuta gebruiken (bijv. & # 8 3 6 4 ;)');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Algemeen valuta symbool');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Zet op ja om het component in een wrapper weer te geven zodat de module en header areas niet zichtbaar zijn');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
define('_JOMRES_COM_WEEKENDONLY','Alleen weekends');
define('_JOMRES_COM_WEEKENDDAYS','Weekend dagen');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Kies uw weekend dagen. Tarieven die weekends wel/niet toestaan zullen met deze instelling rekening houden tijdens het maken van de kamerlijst.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Kies eerst het juiste land voordat accomodatie gegevens worden ingevoerd');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Sla eerst uw accomodatie gegevens op voordat een plaatje wordt ge-upload');
define('_JOMRES_TARIFFSFROM','Prijzen vanaf: ');
define('_JOMRES_SEARCH_ALL','Alles');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Zoek op land');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Zoek op regio');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Zoek op plaatsnaam');
define('_JOMRES_SEARCH_FEATURE_INFO','Zoek op kenmerk');
define('_JOMRES_SEARCH_BUTTON','Zoeken');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Geef uw zoekwoord in en klik op de knop.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Zoek woord(en): ');
define('_JOMRES_SEARCH_AVL_INFO','Voer gewenste aankomst en vertrek datum in en klik op de knop om beschikbare accommodaties te vinden.');
define('_JOMRES_SEARCH_PTYPES','Toon alle accomodaties per accomadatie type.');
define('_JOMRES_SEARCH_RTYPES','Toon alle accomodaties per kamer type.');
define('_JOMRES_SORTORDER_DEFAULT','Standaard');
define('_JOMRES_SORTORDER_PROPERTYNAME','Naam accomodatie');
define('_JOMRES_SORTORDER_PROPERTYREGION','Regio');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Plaatsnaam');
define('_JOMRES_SORTORDER_STARS','Aantal sterren');
define('_JOMRES_PATHWAY_PROPERTYLIST','Accomodatie lijst');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Accomodatie details - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Boekingsformulier');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update uw adres gegevens');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Hercontrole op kamer beschikbaarheid<br/>(Kamer selectie wordt gewist)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Hercontrole op beschikbaarheid');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Aanpassen van uw optionele extras');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Wijzigen van uw kamer keuze');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Bijwerken van uw adres gegevens');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, Ã©Ã©n of meer velden zijn onjuist.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
define('_JOMRES_CURRENCYFORMAT','Currency format');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
define('JOMRES_COM_A_AVAILABLELOGS','Beschikbare Logs');
define('JOMRES_COM_A_LOGS_NOENTRIES','Geen log entries. Dit is normaal, Je moet handmatig jomres.php wijzigen om logging aan te zetten');
define('JOMRES_COM_A_MESSAGE','Bericht');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normaal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Geavanceerd');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Tarief Configuratie Mode');
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
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Laat lijst met kamers zien in property details pagina?');
define('JOMRES_PROPERTYTYPE','Property type');
define('JOMRES_COM_A_SRPONLY','SRP only');
define('JOMRES_MAXPEOPLEINROOM','Max aantal personen per kamer');
define('JOMRES_MAXPEOPLEINBOOKING','Max aantal personen per boeking');
define('_JOMCOMP_BOOKINGNOTES_ADD','Notitie toevoegen');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Notitie wijzigen');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Notitie verwijderen');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Overzicht notities');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nieuwe notitie toegevoegd');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notitie gewijzigd');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notitie verwijderd');
define('_JOMCOMP_MYUSER_MENUTITLE','Mijn opties');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lijst reserveringen');
define('_JOMCOMP_MYUSER_MYBOOKINGS','Mijn reserveringen');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Bekijk reservering');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Bekijk favorieten');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','U heeft nog geen favorieten toegevoegd!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Aan favorieten toevoegen');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Verhuurobject type');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Verhuurobjecten op site');
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
define('_JOMCOMP_WISEPRICE_ACTIVE','Actief');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Deze plugin staat u toe uw tarieven dynamisch te wijzigen.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threshold (Aantal dagen tussen de aankomstdatum en vandaag)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage kamer bezetting < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage kamer bezetting < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage kamer bezetting < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage kamer bezetting < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Korting %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' is korting gegeven vanaf has been discounted from ');
define('_JOMCOMP_WISEPRICE_TO',' tot ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Kamer prijs zonder korting ');
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
define('JOMRES_COM_A_USE_SSL','Gebruik SSL in reserveringsformulier?');
define('JOMRES_COM_A_USE_SSL_DESC','Je moet een geldig SSL certificaat hebben voor ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Actief?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Zet deze op Ja als je last minute kortingen wilt hanteren.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Als een reservering is gedaan en de aankomstdag is N dagen vanaf de dag van de reservering, dan wordt de korting toegepast');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Korting');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In procenten');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Een korting is toegepast op deze reservering!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','De kosten van het verblijf zijn verminderd met ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Dit verhuurobject geeft een last minute korting van  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' procent als u aankomt voor ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' procent of meer als u aankomt voor ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Reserveer nu om dit aanbod optimaal te benutten!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tarief info');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Zet deze optie op Ja als u meer gedetailleerde tarief informatie wilt hebben in de verhuurobject details/tarieven popup');
define('JOMRES_COM_A_MINIMALCONFIG','Minimaliseer configuratie opties');
define('_JOMCOMP_AMEND','Wijzig reservering - Verhuurobject Selectie');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Selecteer Nieuw Verhuurobject');
define('_JOMCOMP_AMEND_HEADER','Origineel Contract:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Aanbetaling betaald');
define('_JOMCOMP_AMEND_DEPOSITDUE','Aanbetaling niet betaald');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Aanpassen Totaal');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Aanpassen aanbetaling');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Annuleer');
define('_JRPORTAL_CPANEL','JRPortal Configuratioe scherm');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Standaard commissie');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Kies de standaard commissie dat wordt toegepast voor het geval dat er nog geen speciefieke commissie is aangemaakt voor het verhuurobject.');
define('_JRPORTAL_CPANEL_LISTCRATES','Overzicht commissies');
define('_JRPORTAL_CPANEL_PATETITLE','Commissies');
define('_JRPORTAL_CRATE_TITLE','Titel');
define('_JRPORTAL_CRATE_TYPE','Type');
define('_JRPORTAL_CRATE_VALUE','Commissie');
define('_JRPORTAL_CRATE_CURRENCYCODE','Munteenheid code');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Overzicht verhuurobjecten');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Verhuuropbject naam');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Verhuurobject adres');
define('_JRPORTAL_PROPERTIES_LEGEND','Verhuurobjecten waarvan de achtergrond rood is, hebben nog geen commissie toegepast.');
define('_JRPORTAL_STATS_PATETITLE','Statistieken');
define('_JRPORTAL_STATS_STATTYPE','Statistieken voor: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Verhuurobjecten - Clicks');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Bekijk verhuurobejcten');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Aantal reserveringen');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Waarde van reserveringen');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Geschatte commissie');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commissie');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Overzicht reserveringen');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Verhuurobject id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gast id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Factuur id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Reservering totaal');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract nummer');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Munteenheid Code');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Aangemaakt');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Gearchiveerd');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum gearchiveerd');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Voeg item toe aan rekening');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Geassocieerd verhuurobject (mits van toepassing)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Waarde');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Omschrijving');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Overzicht orders");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodatie Totaal");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nacht(en) van");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per kamer ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Veraangenaam je verblijf Totaal ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Prijs samenvatting ");
define('_JOMRES_CONFIRMATION_ALERT',"A.u.b. Lees en ga akoord met ");
define('_JOMRES_CONFIRMATION_HEADER',"Een samenvatting van uw boeking is hieronder weergegeven.<br /> Als u iets wilt wijzigen klik dan op de Wijzig knop. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Als u bovenstaande informatie wilt wijzigen klik dan hier");
define('_JOMRES_CONFIRMATION_AMEND',"Wijzig reservering");
define('_JOMRES_CONFIRMATION_SPECIALS',"Voeg speciale aanvragen toe in onderstaande box.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I bevestig dat bovenstaande informatie correct is en ga akkoord met de ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"Per persoon per nacht ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Standaard taal bestand");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Kies het standaard taalbestand dat Jomres gebruikt als de taal niet door Joomfish wordt gezet.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','of');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Vor');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Vol');
if (!defined('_PN_END'))
	define('_PN_END','Eind');
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
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min aantal kamers al geselecteerd');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimaal aantal kamers al geselecteerd in reservering voordat tarief/kamer type combo geoffreerd kan worden. Dit zorgt ervoor dat u gekorte tariefen kunt hanteren waneer er meer dan N kamers voor geselecteerd zijn. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max aantal kamers al geselecteerd');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximaal aantal kamers al geselecteerd in reservering voordat tarief/kamer type combo geoffreerd kan worden. Dit zorgt ervoor dat u gekorte tariefen kunt hanteren waneer er meer dan N kamers voor geselecteerd zijn. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Let op dat eenpersoons toeslagen die hier gezet worden niet worden toegpast als de eenpersoonstoeslagen in de algemene instellingen op Ja staan. De instellingen hier zijn een alternatief voor het hebben van  platte tariefen eenpersoonstoeslagen, niet een toevoeging.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Beschikbaar");
define('_JOMRES_AVLCAL_QUARTER',"Bepaalde reserveringen");
define('_JOMRES_AVLCAL_HALF',"Half vol");
define('_JOMRES_AVLCAL_THREEQUARTER',"Bijna vol");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Vol");
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Bekijk verhuurobject taak alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking taak alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Zoeken taak alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Voeg land toe aan url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Voeg regio toe aan url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Voeg stad toe aan url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Voeg verhuurobject toe aan url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Voeg naam verhuurobject toe aan url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Voeg verhuurobject id toe aan verhuurobject naam');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','als verhuurobjectnaam is ingesteld op Nee dan wordt de id niet gebruikt. Wanneer op Ja dan wordt de url iets van fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Zoek URL structuur - Voeg land toe aan url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Zoek URL structuur - Standaard land');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Zoek URL structuur - Voeg regio toe aan url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Zoek URL structuur - Stadaard regio');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Als alle verhuurobjecten zich in 1 regio bevinden dan wordt regio niet in het zoeken toegepast - voeg standaard regio hier toe als u het wel weergegeven wilt hebben.');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Zoek URL structuur - Voeg stad toe aan url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Zoek URL structuur - Standaard stad');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Zoek URL structuur - verhuurobject type');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Zoek URL structuur - Standaard verhuurobject type');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Gebruikt in url wanneer zoeken geldt voor alle verhuurobject types');
define('_JOMRES_COM_SEF_NOTINSTALLED','Of she404sef is niet geinstalleerd, of '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext is nog niet gekopieerd. Wanneer sh404sef is geinstalleerd of deze bestanden hebt gekopieerd, dan kun je je sef urls hier configureren. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetecteer Javascript kalender taal');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Autodetectie van de taal voor javascript kalenders aan zetten? Als we de taal niet kunnen detecteren vallen we terug op onderstaande instelling');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dag');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per boeking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per persoon per boeking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per persoon per dag');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per persoon per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dag (min dagen)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dag X kamers geselecteerd');
define('_JOMRES_REGISTRYREBUILD','Bouw minicomponent registry opnieuw');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normaal gesproken wordt de jomres plugin registry automatisch opnieuw opgebouwd wanneer je de plugin manager bekijkt of een component verwijderd of toevoegt, echter is het mogelijk dat u deze functies niet kunt gebruiken, als dat het geval is kunt u het handmatig doen d.m.v. deze knop. Je zult de plugin registry elke keer moeten rebuilden als je handmatig een plugin installeerd, en dus geen gebruik maakt van de plugin manager.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt succesvol');
define('_JOMRES_REGISTRYREBUILD_FAILURE','Er is een error opgetreden tijdens het rebuilden van het register. Controleer het Jomres error log.');
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
define('JOMRES_WORD_SAVING','Saving...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Uw vraag...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Method');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
define('_JRPORTAL_TAXRATES_RATE',"Rate");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
define('_JRPORTAL_INVOICES_USER',"User");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Raised");
define('_JRPORTAL_INVOICES_DUE',"Due");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
define('_JOMRES_COM_GROWL','Use Jomres messaging');
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
define('_JOMRES_COM_NEWUSER','Create new user on booking');
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Control Panel');
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
define('_JOMRES_COM_YOURBUSINESS','Your business details');
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");


//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");


// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My properties');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

define('_JOMRES_SAFEMODE',"Enable safe mode?");
define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

define('COMMON_ACTION',"Action");
define('COMMON_VIEW',"View");

define('BACKTOTOP',"Back to top");

define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

define('_JOMRES_INPUTFILTERING',"Input filtering");
define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

define('COMMON_PRINT',"Print");

define('COMMON_EDIT',"Edit");
define('COMMON_COPY',"Copy");


define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");
