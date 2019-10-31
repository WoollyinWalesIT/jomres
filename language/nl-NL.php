<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.14.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################


jr_define('_JOMRES_COM_MR_QUICKRESDESC', "Snelle reservering ");
jr_define('_JOMRES_COM_MR_SHOWPROFILES', "Eigenaren verhuurobjecten ");
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', "Algemeen ");
jr_define('_JOMRES_COM_MR_BACK', "Terug");
jr_define('_JOMRES_COM_MR_YES', "Ja");
jr_define('_JOMRES_COM_MR_NO', "Nee");
jr_define('_JOMRES_COM_MR_NEWTARIFF', "Nieuw");
jr_define('_JOMRES_COM_MR_NEWPROPERTY', "Nieuw verhuurobject ");
jr_define('_JOMRES_COM_MR_NEWGUEST', "Nieuwe gast ");
jr_define('_JOMRES_COM_MR_SAVE', "Opslaan ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', "Naam");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', "Inchecken");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', "Uitchecken");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', "Gebruikersnaam");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', "Toegangsniveau");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', "Gebruiker gewijzigd ");
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', "Alle reserveringen ");
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', "Reservering bewerken ");
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', "Aank / Vertr ");
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', "Gast");
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', "Kamer");
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', "Betaling");
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', "Voornaam");
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', "Achternaam");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', "Speciale vereisten");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', "Houd er rekening mee dat sommige speciale eisen extra kosten kunnen meebrengen. ");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', "Annuleren reservering ");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', "Het huisnummer of naam ");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', "Straat");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', "Stad");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', "Postcode ");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', "Vaste telefoonnummer ");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', "Mobiel nummer");
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', "E-mailadres");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', "Kan deze reservering niet annuleren aangezien de gast al in is geboekt");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', "Borg niet betaald ");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', "Bevestig de annulering ");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', "Reservering geannuleerd ");
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', "Dagen tot aankomst ");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', "Reserveringstype ");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', "Zwart");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', "Receptie");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', "Internet ");
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', "Kamer naam");
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', "Kamer");
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', "Verdieping");
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', "Toegankelijk voor gehandicapten? ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', "Max mensen ");
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', "Kamer / accommodatie type ");
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', "Beschrijving van de kamer / eigenschap type ");
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', "Kamer kenmerk lijst ");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', "Voorschot betaald");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', "Vul de borg in ");
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', "Totaal te betalen ");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', "Aanbetaling ref ");
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', "Boeken ");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', "Aanbetaling ");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', "Aanbetaling opgeslagen ");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', "Onze kamers ");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', "Eigendom");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', "Kamer / accommodatie type ");
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', "Bewerk gastengegevens ");
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', "Voornaam");
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', "Achternaam");
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', "Huis");
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', "Straat");
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', "Stad");
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', "Postcode");
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', "Vaste telefoon");
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', "Mobile");
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', "Fax");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', "Maak je keuze");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', "Nights");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', "Totaal");
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', "Bekijk kamers en verhuurobject config ");
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', "Kamers");
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', "Kamer kenmerken ");
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', "Kamer typen ");
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', "Bedrijf");
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', "Verhuurobject kenmerken ");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', "Kamer");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', "Type");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', "Naam");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', "Aantal");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', "Verdieping");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', "Max mensen ");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', "Kenmerken");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', "Item bewerken");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', "Kamer kenmerken ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', "Omschrijving kenmerk ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', "Kamerkenmerk toegevoegd ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', "Kamerkenmerk bijgewerkt ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', "Kamer typen ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', "Kamer/eigendoms afkorting ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', "Beschrijving van de kamer/eigendoms type ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', "Kamer/eigendom type toegevoegd ");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', "Item bewerken");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', "Naam");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', "Straat");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', "Stad");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', "Regio");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', "Country ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', "Postcode ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', "Tel ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', "Fax");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', "E-mail ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', "Website");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', "Kenmerken");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', "Eigendom bijgewerkt ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', "Verhuurobject kenmerken ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', "Verhuurobject Kenmerk afkorting ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', "Verhuurobject beschikt over volledige beschrijving ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', "Verhuurobject kenmerk bijgewerkt ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', "Tarieven");
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', "Tarief titel ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', "Beschrijving");
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', "Geldig vanaf");
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', "Geldig tot");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', "Tarief per nacht ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', "Min dagen ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', "Max dagen ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', "Min mensen ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', "Max mensen ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', "Verhuurobject type ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', "Negeer PPPN ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', "Weekenden toestaan ​​");
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', "Regel bewerken");
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', "Kloon regel ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', "Tarief geschrapt ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', "Bewerk tarief ");
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', "Reservering opgeslagen ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', "Boek een gast in ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', "Boek gasten uit ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', "Lijst reserveringen ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', "Dashboard");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', "Gast admin ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', "Verhuurobject admin ");
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', "Beschikbaarheid controleren");
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', "Voornaam");
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', "Achternaam");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', "Huisnummer.");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', "Straat");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', "Stad");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', "Postcode ");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', "Vaste telefoonnummer");
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', "Mobiel nummer");
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', "Er zijn geen kamers beschikbaar die voldoen aan de opgegeven waardes");
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', "Dank u voor het maken van uw reservering bij ons en we hopen dat u van uw verblijf geniet. <br> <br>Let op: dit is slechts een voorlopige reservering en wordt niet bevestigd totdat u uw bevestigingsmail ontvangt van ons. </center> ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', "Boek gasten in ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', "Gasten ingchecken ");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', "Gasten uitchecken ");
jr_define('_JOMRES_COM_A_SUPPLIMENTS', "Supplementen");
jr_define('_JOMRES_COM_A_TARIFFS', "Tarieven & Valuta ");
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', "Bestand uploads ");
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', "Eénpersoons toeslag");
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', "Zorg ervoor dat dit is ingesteld op Ja als u éénpersoons toeslag wilt heffen");
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', "Eénpersoons toeslag ");
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', "Voorschot vereist is percentage? ");
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', "Is de borg een percentage van de totale reservering? Wanneer Nee, dan wordt de aanbetaling toegepast met een vast waarde ");
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', "Voorschot waarde");
jr_define('_JOMRES_COM_A_TARIFFS_PER', "Per persoon, per nacht");
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', "Selecteer Ja als u per persoon per nacht wilt laden. Zo nee, dan worden de kosten per kamer per nacht berekend");
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', "Bestandsgrootte");
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', "Max. Afbeelding Bestandsgrootte in Kilobyte");
jr_define('_JOMRES_FRONT_MR_BOOKED', "Kamers geboekt");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', "Reserveringsdetails");
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', "Afdrukbevestigingsbrief");
jr_define('_JOMRES_COM_INVOICE_TITLE', "Factuurafdruk ");
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', "Aantal nachten: ");
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', "Kosten per nacht: ");
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', "Eindtotaal");
jr_define('_JOMRES_COM_INVOICE_PRINT', "Factuur afdrukken");
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', "Dienst toevoegen aan factuur ");
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', "Beschrijving dienst");
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', "Prijs dienst ");
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', "Overige gefactureerde diensten ");
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', "Dienst toegevoegd aan rekening ");
jr_define('_JOMRES_UPLOAD_IMAGE', "Afbeelding uploaden");
jr_define('_JOMRES_FILE_UPLOAD', "Bestand upload");
jr_define('_JOMRES_COM_A_ODDS', "Div. ");
jr_define('_JOMRES_COM_A_ERRORCHECKING', "Minicomponent-oproepen weergeven");
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', "Zet dit op Ja om een ​​logboek te zien van de minicomponenten die onderaan de pagina worden genoemd nadat Jomres is uitgevoerd. Het schakelt ook de interne redirect functie uit. Dit is handig als u probeert te identificeren welke minicomponenten bepaalde services uitvoeren. ");
jr_define('_JOMRES_FILE_DELETE', "Verwijder deze afbeelding ");
jr_define('_JOMRES_FILE_DELETED', "Bestand(en) verwijderd ");
jr_define('_JOMRES_COM_MR_ROOM_DELETE', "Verwijderen ");
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', "Kan deze kamer niet verwijderen, er zijn lopende reserveringen. Annuler die reserveringen en probeer het opnieuw. ");
jr_define('_JOMRES_COM_MR_ROOM_DELETED', "Kamer verwijderd ");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', "Verwijder kamer functie ");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', "Kan dit kamerkenmerk niet verwijderen, het is toegewezen aan een kamer of kamers. Verwijder het kenmerk uit die kamers en probeer het opnieuw. ");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', "Kamerkenmerk is verwijderd ");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', "Verwijder kenmerk verhuurobject");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', "Kan dit verhuurobject kenmerk niet verwijderen, het is toegewezen aan een bedrijf. Verwijder het kenmerk van dit verhuurobject en probeer het opnieuw. ");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', "Verhuurobject kenmerk verwijderd ");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', "Verwijder kamer/verhuurobject type ");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', "Kamer/verhuurobject type verwijderd ");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', "Verhuurobject verwijderen ");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', "Verhuurobject verwijderd ");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', "U heeft geen rechten om dit bedrijf te verwijderen. ");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', "Afbeeldings breedte nadat Jomres de geüploade beelden heeft gewijzigd) ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', "Kaart");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', "Verhuurobject beschrijving ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', "Incheck tijden ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', "Omgevings activiteiten ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', "Routebeschrijving");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', "Luchthavens");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', "Ander vervoer ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', "Beleid & gebruiksvoorwaarden");
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', "Adres");
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', "Bezoekers kunnen online reserveren ");
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', "Zet op Ja om ervoor te zorgen dat bezoekers online kunnen reserveren. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', "Boekingen zijn voor een vaste periode ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "Als u dit op Ja zet, worden de Reserveringen voor een bepaalde periode uitgevoerd. Als dit is ingesteld op Nee, zorg er dan voor dat de gedefinieerde aankomstdag niet is ingesteld op Ja (tenzij u specifiek iemand wilt dwingen op een bepaalde dag) anders krijgt u niet veel links in de beschikbaarheidskalender. ");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', "Reserverings periode: ");
jr_define('_JOMRES_COM_A_BOOKING', "Reserveringsruimten ");
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', "Maximale perioden, bijv. 3x 7 boekingsperioden = 21 dagen ");
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', "Is dit een appartement / huisje / villa? ");
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', "Door naar betaling");
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', "Bevestig de reservering ");
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', "Maandag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', "Dinsdag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', "Woensdag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', "Donderdag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', "Vrijdag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', "Zaterdag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', "Zondag");
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', "Ma");
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', "Di ");
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', "Woe");
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', "Do ");
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', "Vr ");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', "Za");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', "Zo ");
jr_define('_JOMRES_COM_A_AVLCAL', "Kalender");
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', "Lettertype kleur voor de huidige datum ");
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', "Letterype kleur voor dagen in de display maand ");
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', "Lettertype kleur voor dagen niet in de display maand ");
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', "Cell bgcolour voor dagen wanneer bedrijf/kamer beschikbaar is");
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', "Cel bgcolour voor dagen niet in de display maand ");
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', "Cel bgcolour voor bezette dagen ");
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', "Cell bgcolour voor voorlopig geboekte kamers (boekingen waarvoor geen borg is gedaan) ");
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', "Cell bgcolour voor data in het verleden ");
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', "Bezet/Niet beschikbaar ");
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', "Beschikbaar voor boekingen ");
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', "Voorlopige boekingen ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', "Vooraf gedefinieerde aankomstdag");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', "Alleen voor sites met vaste periodeboekingen. Kies de dag waarop aankomsten moeten beginnen. ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', "Vaste aankomstdag ");
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', "Verblijf periode (dagen) ");
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', "Toon beschikbaarheidskalender inline? ");
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', "Stel dit in op Ja om de beschikbaarheidskalender's te tonen");
jr_define('_JOMRES_FRONT_AVAILABILITY', "Beschikbaarheid");
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', "Klik op een beschikbare datum om het boekingsformulier te bekijken. ");
jr_define('_JOMRES_FRONT_BLACKBOOKING', "Blokkeringen ");
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', "Nieuwe zwarte boeking ");
jr_define('_JOMRES_FRONT_DELETEGUEST', "Verwijder gast ");
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', "Gast verwijderd ");
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', "Kan deze gast niet verwijderen omdat ze reserveringen hebben openstaan ​​bij een ander bedrijf. ");
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', "Alles");
jr_define('_JOMRES_COM_CALENDAROUTPUT', "Kalenderuitvoerformaat ");
jr_define('_JOMRES_COM_CALENDARINPUT', "Kalender invoerformaat ");
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', "Hierdoor kan de gebruiker het invoerformaat van de datum binnen Jomres wijzigen. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', "Sta ​​korte pauzes toe voor vasteperiode boekingen");
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', "Lengte van de korte pauze ");
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', "Gepubliceerd ");
jr_define('_JOMRES_COM_A_PAYPAL', "Paypal ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', "Audit Trail ");
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', "Datum");
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', "Gebruiker (gebruikersnaam) ");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', "Filter op datum ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', "Status");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', "Aankomst in afwachting ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', "Komt vandaag ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', "Huidige gast ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', "Vertrekt vandaag ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', "Vertrek achterstallig ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', "Is niet aangekomen");
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', "Kamer aangemaakte");
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', "Kamer Bijgewerkt");
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', "Kamer Verwijderd");
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', "Kamer kemmerk gemaakt ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', "Kamer kemmerk bijgewerkt ");
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', "Kamer kemmerk verwijderd");
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', "Bedrijf aangemaakte");
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', "Bedrijf bijgewerkt");
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', "Bedrijf verwijderde");
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', "Bewerkte prop. instellingen");
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', "Verhuurobject gepubliceerd");
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', "Tarief aangemaakt ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', "Tarief Geactualiseerd ");
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', "Toegevoegde dienst in rekening brengen");
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', "Gast Geboekt in ");
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', "Ingevoerde aanbetaling ");
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', "Gast aangemaakt ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', "Gast bijgewerkt");
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', "Een kamer gereserveerd ");
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', "Een service gemaakt ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', "Een service bijgewerkt ");
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', "Een service gewist ");
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', "Service gepubliceerd.");
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', "Zwarte boeking ingevoerd. ");
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', "Zwarte boeking verwijderd. ");
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', "Services");
jr_define('_JOMRES_COM_MR_EXTRA_DESC', "Beschrijving");
jr_define('_JOMRES_COM_MR_EXTRA_NAME', "Naam");
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', "Prijs");
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', "Service bijgewerkt ");
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', "Service bewerken");
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', "Service verwijderd ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', "Services admin ");
jr_define('_JOMRES_COM_A_EXTRAS', "Toon services bij boekingstijd? ");
jr_define('_JOMRES_COM_A_EXTRAS_DESC', "Stel dit in op ja om services te tonen die u aan de gast wilt aanbieden ");
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', "Optionele services. ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', "Startdatum zwarte boeking");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', "Service hervat datum ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', "Blokkeringen ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', "Er is een fout opgetreden om deze kamers te boeken, een of meer van de kamers die u hebt geselecteerd is niet gratis. ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', "Kamers inbegrepen in zwarte boeking ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', "Geen blokkeringen in de lijst ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', "Aantal sterren ");
jr_define('_JOMRES_COM_A_RESET', "Reset ");
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', "Reservering geannuleerd ");
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', "Zoek hier naar: ");
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', "Symbool van munteenheid");
jr_define('_JOMRES_COM_A_CURRENCYCODE', "Valuta code");
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', "Lees verder");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', "Limiteer voorafgaande boekingen? ");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', "Zet dit op Ja als u voorafgaande boekingen wilt beperken (gebruik het volgende veld om de limiet in de vorm  van dagen in te stellen). Zet u het op ja, als de gebruiker meer dan n dagen van tevoren probeert te boeken, dan wordt de aankomstdatum hersteld naar de huidige datum ");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', "Dagen voorafgaande boekingen beperkt tot: ");
jr_define('_JOMRES_COM_FRONT_ROOMTAX', "BTW ");
jr_define('_JOMRES_COM_A_ROOMTAX', "accommodatie belasting ");
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', "Belasting vast bedrag ");
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', "Belastingspercentage ");
jr_define('_JOMRES_COM_A_EUROTAX', "BTW ");
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', "Belastingspercentage ");
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', "Archiveer alle records ");
jr_define('_JOMRES_FRONT_TARIFFS', "Onze Tarieven ");
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', "Tariefnaam ");
jr_define('_JOMRES_FRONT_TARIFFS_DESC', "Tariefbeschrijving ");
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', "Kamer/verhuurobject type ");
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', "Geldig vanaf");
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', "Geldig tot en met ");
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', "Per persoon per nacht ");
jr_define('_JOMRES_FRONT_TARIFFS_PN', "Per nacht");
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', "Niet inclusief weekenden ");
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', "Minimum dagen ");
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', "Maximum dagen ");
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', "Min mensen ");
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', "Max mensen ");
jr_define('_JOMRES_FRONT_PREVIEW', "Voorbeschouwing ");
jr_define('_JOMRES_COM_A_EDITINGMODEON', "Bewerken aan? ");
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', "Bijgewerkte aangepaste tekst. ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', "Taal bewerken ");
jr_define('_JOMRES_FRONT_PTYPE', "Verhuurobject type");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', "Type verhuurobject ");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', "Bewerk verhuurobject type ");
jr_define('_JOMRES_COM_PTYPES_PTYPE', "Verhuurobject type");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', "Beschrijving van het type verhuurobject ");
jr_define('_JOMRES_COM_PTYPES_SAVED', "Type verhuurobject opgeslagen ");
jr_define('_JOMRES_COM_PTYPES_DELETED', "Type verhuurobject verwijderd ");
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', "Restant te betalen ");
jr_define('_JOMRES_EXTRAS_NOEXTRAS', "Geen extra diensten om toe te voegen aan rekening ");
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', "Aanbetaling ");
jr_define('_JOMRES_COM_CHARGING_FULLAMT', "Volledige bedrag");
jr_define('_JOMRES_COM_CHARGING_CONFIG', "Bedrag in rekening gebracht ");
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', "Gebruik deze optie om te bepalen wat op het moment van de serververing in rekening moet worden gebracht. Kies een aanbetaling indien de aanbetaling in rekening moet worden gebracht, of volledig bedrag indien het volledige bedrag in rekening moet worden gebracht. ");
jr_define('_JOMRES_COM_MONTHSTOSHOW', "Maanden om te laten zien ");
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', "In de kamer beschikbaarheid, Hoeveel maanden van de kalender moet worden getoond? ");
jr_define('_JOMRES_COM_A_GATEWAYLIST', "Betalings gateways");
jr_define('_JOMRES_COM_A_CANCEL', "Annuleer");
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', "Selecteer de data waarop u de blokkeringen wilt toepassen voor. Wanneer u de juiste data hebt geselecteerd, klikt u op de knop 'toepassen' om de beschikbaarheid opnieuw te controleren. <br/>
<br/>
Kies de kamer(s) die u niet meer wilt gebruiken. <br> Als er geen vinkje voor het object staat, kan het niet in de zwarte boeking worden opgenomen totdat er nog een uitstaande boeking is voltooid / geannuleerd. <br/> ");
jr_define('_JOMRES_JR_NOTLOGGEDIN', "<b>U bent uitgelogd voor inactiviteit</b> Log in en probeer het opnieuw. ");
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', "Reden");
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', "Gebruik betaling gateways? ");
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', "Kies alstublieft uw betaalmethode. ");
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', "Gateway ingeschakeld? ");
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', "Aangepaste plugin instelling ");
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', "Ingevoegde plugin instelling ");
jr_define('_JOMRES_FRONT_GALLERYLINK', "Bekijk de website van dit verhuurobject");
jr_define('_JOMRES_COM_A_GALLERYLINK', "Externe link");
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', "Link hier naar uw website. ");
jr_define('_JOMRES_MR_CREDITCARD_EDIT', "Bewerk creditcard ");
jr_define('_JOMRES_COM_A_EDITICON', "Bewerk ikoon grootte ");
jr_define('_JOMRES_COM_A_SLIDESHOWS', "Slideshows");
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', "Toon link naar diavoorstellingen? ");
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', "Toon een diavoorstelling op de pagina voor verhuurobject details? ");
jr_define('_JOMRES_FRONT_SLIDESHOW', "Slideshow ");
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', "Toon link naar tarieven? ");
jr_define('_JOMRES_COM_A_POPUPSALLOWED', "Popups toegestaan? ");
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', "Upload slideshow afbeeldingen ");
jr_define('_JOMRES_A_TABS_MISC', "Diversen ");
jr_define('_JOMRES_A', "Site configuratie ");
jr_define('_JOMRES_A_GLOBALPFEATURES', "Gebruik globale kenmerken van het verhuurobject ");
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', "Als u een afbeelding wilt toewijzen aan deze functie, moet u eerst uw verhuurobject afbeeldingen uploaden naar de map'/JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/. ");
jr_define('_JOMRES_A_ICON', "Icoon");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', "Selecteer de zoekplugin die u wilt gebruiken. ");
jr_define('_JOMRES_FRONT_NORESULTS', "<b> Sorry, uw zoekopdracht heeft geen resultaten opgeleverd. Wijzig uw zoekopdracht en probeer het opnieuw. </b> ");
jr_define('_JOMRES_AREYOUSURE', "Weet u zeker dat u dit wilt? ");
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', "Boek nu!");
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', "Boek nu!");
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', "Toon tarieven inline? ");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', "Adres");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', "Gedetailleerde informatie");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', "Klik voor Kamers en beschikbaarheid ");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', "Toon adresgegevens onder deze link ");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', "Toon gedetailleerde eigenschap info onder deze link ");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', "Toon kamers en beschikbaarheid onder deze link ");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', "Vaste tarieven ");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', "Variabele ");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', "Selecteer het tariefmodel dat u wilt gebruiken ");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "U heeft twee keuzes van tariefberekeningsmethoden. De eerste, de 'flat rate' methode stelt u in staat om een ​​aantal verschillende tarieven aan te bieden aan de gast en het tarief voor het verblijf is hetzelfde voor de hele tijd. Dit is handig als u verschillende tarieven voor dezelfde datum wilt aanbieden, bijv. Bed and Breakfast tarief en B & B en Avondmaaltarief. Kies het 'gemiddelde' tarief als u uw prijzen afhankelijk van de desbetreffende datum wilt aanpassen. Jomres vindt alle tarieven voor elke dag bij de boeking, voeg ze bij elkaar en laat het gemiddelde tarief over de periode terugkomen ");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', "Toon vertrekdatum invoer? ");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Zet dit op Nee als u het invoervak ​​van de vertrekdatum niet wilt weergeven. Gebruik dit alleen als u weet wat u doet, aangezien de vertrekdatum bij boekingen altijd de dag na de aankomstdatum wordt ingesteld. ");
jr_define('_JOMRES_COM_PROPERTYLISTDESC', "Omschrijving limiet ");
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', "Dit beperkt het aantal karakters dat in de eigendomslijst wordt weergegeven wanneer u tekent uit de omschrijving van de eigenschap. ");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', "Gebruikte datum () formaatstijl? ");
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', "Publiceren");
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', "Publicatie ongedaan maken ");
jr_define('_JOMRES_A_GLOBALROOMTYPES', "Gebruik globale kamer/verhuurobject types ");
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', "Om een ​​afbeelding toe te wijzen aan deze kamer/verhuurobject type moet u eerst uw kamer/verhuurobject afbeelding opslaan in de / images / stories / jomres / rmtypes / folder. ");
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', "Invoerfout achtergrondkleur ");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', "Standaard land in boekingsformulier ");
jr_define('_JOMRES_JAVASCRIPT_', "Items gemarkeerd met een rode ster zijn verplicht. ");
jr_define('_JOMRES_COM_SELFREGISTRATION', "Gebruikers kunnen hun verhuurobject registreren? ");
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', "Stel dit in op Ja als u wilt dat gebruikers hun eigen bedrijven kunnen registreren zonder administratieve interventies. ");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', "Gemarkeerde items zijn verplicht. ");
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', "Bestaande verhuurobjecten ");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', "Toon kalender vanaf begin van jaar? ");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', "De beschikbaarheidskalender toont vanaf het begin van het huidige jaar. ");
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', "Aantal kamers beschikbaar ");
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', "Terug naar verhuurobject gegevens ");
jr_define('_JOMRES_FRONT_ROOMTYPES', "Kamer/verhuurobject types ");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', "Willekeurige zoeklimiet ");
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', "Toon valuta conversie links in tarief lijst? ");
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', "Tarief omrekenen");
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', "Gebruikers toestaan ​​te bewerken met HTML-editors? ");
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', "Gebruik dit formulier om uw boeking te plaatsen. Wijzig uw boekingsgegevens zoals aankomst- en vertrekdata en aantal personen, selecteer vervolgens de kamer(s) die u nodig heeft in de lijst met beschikbare kamers. Klik op de beschikbare kamers om ze toe te voegen aan uw boeking. Wanneer u klaar bent, kunt u extra opties toevoegen die u nodig heeft en uw adresgegevens opgeven. Wanneer het formulier voldoende informatie heeft, klik dan op de bevestig knop zodat u uw boeking kunt bevestigen. ");
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', "Gebruik dit formulier om uw boeking te plaatsen. Wijzig uw boekingsgegevens zoals aankomst- en vertrekdata en aantal gasten. Wanneer u klaar bent, kunt u extra opties toevoegen die u nodig heeft en uw adresgegevens opgeven. Wanneer het formulier voldoende informatie heeft, klik dan op de bevestig knop zodat u uw boeking kunt bevestigen.");
jr_define('_JOMRES_AJAXFORM_PARTICULARS', "Reserveringsgegevens ");
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', "Selecteer de details van uw boeking ");
jr_define('_JOMRES_AJAXFORM_AVAILABLE', "Beschikbaarheid ");
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', "Selecteer de kamers die u nodig hebt ");
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', "Kijk hier om te zien of het verhuuobject op dit moment beschikbaar is. ");
jr_define('_JOMRES_AJAXFORM_EXTRAS', "Services");
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', "Services");
jr_define('_JOMRES_COM_PERDAY', "Per nacht");
jr_define('_JOMRES_AJAXFORM_ADDRESS', "Uw gegevens");
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', "Vul alstublieft uw gegevens in. Merk op dat alle velden met een rode ster verplicht zijn. ");
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', "Beschikbare kamers");
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', "Geselecteerde kamers ");
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', "De eerste aankomstdatum is: ");
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', "Per nacht:");
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', "Accommodatie ");
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', "Extra's: ");
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', "BTW: ");
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', "Korting:");
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', "Totaal (incl. BTW): ");
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', "Gasten");
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', "Voeg toe aan uw selectie ");
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', "Verwijder uit uw selectie ");
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', "Gastypen ");
jr_define('_JOMRES_VARIANCES_TYPE', "Type");
jr_define('_JOMRES_VARIANCES_TYPE_TT', "Het type klant, bijvoorbeeld Kinderen leeftijd 5-10 jaar, of Student ");
jr_define('_JOMRES_VARIANCES_NOTES', "Notes");
jr_define('_JOMRES_VARIANCES_NOTES_TT', "Notities die u over dit klantentype wilt maken ");
jr_define('_JOMRES_VARIANCES_MAXIMUM', "Maximum");
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', "Het maximale aantal van dit klantentype dat in het boekingsformulier kan worden geselecteerd ");
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', "Is percentage ");
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', "Het berekende cijfer is een percentage van het basiscijfer berekend voor de bron. Als dit is ingesteld op nee, dan wordt de figuur die u opgeeft gewoon toegevoegd of afgetrokken van de basisbronwaarde. ");
jr_define('_JOMRES_VARIANCES_POSNEG', "Voeg variantie toe? ");
jr_define('_JOMRES_VARIANCES_POSNEG_TT', "Het berekende cijfer wordt toegevoegd aan of verwijderd uit het basiscijfer dat is berekend voor de bron. Zet dit op Nee als u wilt dat dit een korting is van de basisfiguur. ");
jr_define('_JOMRES_VARIANCES_VARIANCE', "Variance ");
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', "Het bedrag van de variantie ");
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', "Gewijzigde klant type order ");
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', "Verwijderd klant type ");
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', "Aangemaakt klant type ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', "Bijgewerkt klant type ");
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', "Bijgewerkt klant type ");
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', "Toon link naar kamerlijst pagina in pagina met verhuurobject gegevens? ");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', "Toon alleen beschikbaarheidskalender? ");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', "Schakel dit in op Ja om de weergave van de eigenschap header en details uit te schakelen, zodat alleen de beschikbaarheidskalender zichtbaar is in het gedeelte Gegevensgegevens. Alleen echt bedoeld voor gebruikers die eenhulpbronnen uitleiden (bijvoorbeeld appartementen, huisjes, enz.). ");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', "Aankomst-Vertrek minimum interval ");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', "Het minimale interval in het boekingsformulier tussen de aankomstdatum en de vertrekdatum. ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', "Boekingsformulier kamerlijst toont kamernummer ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', "Boekingsformulier kamerlijst toont kamernaam ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', "Boekingsformulier kamerlijst toont tarief titel ");
jr_define('_JOMRES_ORDER', "Bestellen");
jr_define('_JOMRES_REQUIREDFIELDS', "Vereiste ");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', "Dagen voor aankomst ");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', "Het minimale aantal dagen dat moet verlopen, vanaf 'vandaag', voor de aankomstdatum. ");
jr_define('_JOMRES_DTV', "Datum type variaties ");
jr_define('_JOMRES_DTV_DOW', "Dag van de week");
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', "Standaard gast type ");
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', "Standaardnummer van het eerste gastype dat in het reserveringsformulier wordt weergegeven. Als u gastypen gebruikt, dan is dit het standaardnummer dat het eerste gastype in het reserveringsformulier zal worden ingesteld. ");
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', "Alleen geregistreerde gebruikers kunnen online boeken? ");
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', "Sorry, je moet een geregistreerde gebruiker zijn om online te boeken. Klik hier om te registreren op deze site. ");
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', "Lettertype voor links naar huidige boekingen ");
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', "Weekend grenzen ");
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', "Kamer is geboekt ");
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', "Zwarte boeking ");
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', "Afronden tot dichtstbijzijnde gehele getal? ");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', "Aanbetaling in rekening brengen? ");
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', "Tarieven opslaan als wekelijkse waarden? ");
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', "U heeft de mogelijkheid om tarieven op te slaan in dagelijkse of wekelijkse waarden. Als u ze wekelijks opslaat, moet u deze optie instellen op Ja. ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', "per week");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', "Vaste aankomstdata herhalen: ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', "Wanneer de vaste aankomstdata is geselecteerd, kan hier de lijst met data nummers worden ingesteld. Houd er rekening mee dat de lijst met data geen data bevat als een boeking niet mogelijk is door voorafgaande boekingen en dat de lijst daadwerkelijk twee keer zo lang zal zijn als uw gekozen nummer omdat het een vergelijkbaar aantal historische data zal hebben (indien beschikbaar) ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', "Aankomstdatum niet correct ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', "Vertrekdatum onjuist ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', "De reservering is te kort. Er moet minstens deze hoeveelheid dagen tussen aankomst- en vertrekdatum zijn: ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', "Uw hoeveelheid is ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', "Gasttype variant niet correct ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', "Selecteer uw gastnummers / type ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', "Je hebt te veel gasten voor de beschikbare tarieven ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', "Je hebt meer kamers gekozen dan je gasten hebt, klik op een kamer om het uit je selectie te verwijderen ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', "Te veel gasten voor de beschikbare bedden ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', "Je moet meer kamers kiezen ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', "Selecteer een kamer ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', "Voornaam is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', "Achternaam is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', "Huisnummer / naam is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', "Straat is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', "Stad is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', "Regio is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', "Postcode is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', "Land is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', "Telefoonnummer is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', "Mobiel nummer is verplicht ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', "E-mailadres is verplicht ");
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', "<b> We hebben kamers vrij! </b> ");
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', "Er zijn nog geen kamers geselecteerd ");
jr_define('_JOMRES_BOOKING_NUMBER', "Boekings nr.");
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', "Ok om te boeken, berichtvak achtergrond ");
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', "Dump template fresh? ");
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', "Stel dit in om een ​​DHTML-dump van sjabloonvariabelen in te stellen voor elk FRONTEND sjabloonbestand als die pagina wordt bekeken. Nuttig als u wilt zien of een bepaald element beschikbaar is voor gebruik in een bepaald sjabloon. ");
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', "Getal is percentage ");
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', "Stel dit in op Ja als het getal van eenpersoon een percentage is. Wanneer nee dan wordt het als een platte som toegepast. ");
jr_define('_JOMRES_COM_LIMITROOMSLIST', "Beschikbare kamers/tarieflimiet ");
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', "Gebruik deze invoer om het aantal beschikbare kamers en tarieven te beperken die in het boekingsformulier zijn vermeld. Zet het op nul als u geen beperking wilt inschakelen. ");
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', "Geen kamers vrij op dit moment! ");
jr_define('_JOMRES_BOOKITNOW', "Boek nu");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', "Globale bewerkingsmodus? ");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', "Wees voorzichtig met deze functie. Als ingesteld op Ja, zal de bewerkingsmodus de aangepaste tekst beïnvloeden voor ALLE bedrijven in het systeem voor de constante die u bewerkt. ");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', "Gebruik globale valuta? ");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', "Stel dit in op ja om alle bedrijven te dwingen dezelfde valuta te gebruiken. ");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', "Globaal valutasymbool ");
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', "Component wrapped ");
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', "Stel dit in op Ja als u de site in de volledige paginaweergave wilt dwingen. Dit kan handig zijn als u de site wilt gebruiken via iframes. ");
jr_define('_JOMRES_COM_WEEKENDONLY', "Alleen weekend ");
jr_define('_JOMRES_COM_WEEKENDDAYS', "Weekenddagen ");
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', "Stel je weekenddagen in. Tarieven die de weekenden toestaan ​​of onbeschikbaar maken, houden rekening met deze instelling bij het genereren van de kamerslijst. ");
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', "Selecteer uw land voordat u een verhuurobject informatie toevoegt ");
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', "Sla uw verhuuobject wijzigingen op voordat u een eigendomsbeeld uploadt");
jr_define('_JOMRES_TARIFFSFROM', "Prijzen van ");
jr_define('_JOMRES_SEARCH_ALL', "Alle");
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', "Land ");
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', "Regio");
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', "Stad");
jr_define('_JOMRES_SEARCH_FEATURE_INFO', "Kenmerken");
jr_define('_JOMRES_SEARCH_BUTTON', "Zoeken");
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', "Zoekterm");
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', "Zoekwoord (en): ");
jr_define('_JOMRES_SEARCH_AVL_INFO', "Vul alstublieft uw beoogde aankomst- en vertrekdata in en druk op de knop om bedrijven te vinden die beschikken over accommodatie op uw gekozen data. ");
jr_define('_JOMRES_SEARCH_PTYPES', "Type");
jr_define('_JOMRES_SEARCH_RTYPES', "Kamertype");
jr_define('_JOMRES_SORTORDER_DEFAULT', "Standaard");
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', "Verhuurobject naam");
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', "Verhuurobject regio ");
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', "Verhuurobject Stad ");
jr_define('_JOMRES_SORTORDER_STARS', "Sterren");
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', "Verhuurobject gegevens ");
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', "Boekingsformulier");
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', "Werk adresgegevens bij");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', "Herziening van de beschikbaarheid van de kamer<br/> (Kamerkeuze wordt opnieuw ingesteld) ");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', "Controleer beschikbaarheid ");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', "Wijzigen van uw optionele extra's ");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', "Uw kamer selectie wijzigen ");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', "Uw adresgegevens bijwerken ");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', "Sorry, een of meerdere adresvelden zijn onjuist. ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', "Kamerafbeelding ");
jr_define('_JOMRES_CURRENCYFORMAT', "Valutaformaat ");
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', "Zoek opties");
jr_define('JOMRES_COM_A_AVAILABLELOGS', "Logboek bestanden");
jr_define('JOMRES_COM_A_MESSAGE', "Bericht");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', "Normaal ");
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', "Geavanceerd ");
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', "Micromanage ");
jr_define('JOMRES_COM_A_TARIFFMODE', "Tariefconfiguratiemodus ");
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Waarschuwing: het wisselen van modus kan leiden tot het verlies van data.Zie de toelichting hieronder over dit </b>.
<br/><br/>
U heeft drie opties over hoe u uw tarieven configureert. <br/>
Normale modus: U hebt één tarief voor elk kamertype dat geldig is voor de komende 10 jaar. <br/>
Micromanage: U kunt de prijs voor elke dag voor elk type kamer/verhuurobject beheren. <br/>
Geavanceerd: Iets uitgereider dan de normale modus om tarieven te beheren. <br/>
<br/>
Met de verschillende tariefmodi kunt u de methode kiezen voor het configureren van tarieven die het beste bij u passen. <br/>
De normale modus is het meest eenvoudig, maar het is het makkelijkste te begrijpen omdat het u de mogelijkheid biedt om kamers en prijzen op dezelfde pagina te configureren. <br/>
Met micromanage kunt u de tarieven dagelijks aanpassen, u kunt verschillende tarieven met elkaar combineren. Dit resulteert in een aantal tarieven die voor een periode worden gemaakt voor u, maar u kunt geen tarief over elkaar oplopen. <br/>
Met de geavanceerde modus kunt u een kamer creëren en associëren met een kamertype. U maakt dan een tarief en associeert dat met een kamertype. Met behulp van deze methode is het mogelijk om verschillende tarieven als lagen over elkaar te halen, bijvoorbeeld een kamertype. Dubbel bed kan één bed en breakfast hebben, en een ander voor bed, ontbijt en avondmaaltijd. De geavanceerde methode vereist een beetje meer aandacht voor detail, omdat het mogelijk is om een ​​kamer of tarief van een verhuurobject/kamertype te ontkoppelen, maar het geeft u configuratie opties die de andere modi niet bieden. <br/>
<br/>
Omdat de normale en Micromanage-modi een specifieke opstelling van kamers en tarieven vereisen voor de tariefmodus om te werken, moet het systeem mogelijk sommige gegevens opnieuw instellen om de huidige tariefconfiguraties compatibel te maken met de huidige tariefbewerkingsmodus. <br/>
<br/>
Normaal -> Geavanceerd. Geen verandering. Bestaande tarieven worden behouden. <br/>
Normaal -> Micromanage. Alle bestaande tarieven worden verwijderd. <br/>
Geavanceerd -> Normaal. Alle bestaande tarieven worden verwijderd. <br/>
Geavanceerd -> Micromanage. Alle bestaande tarieven worden verwijderd. <br/>
Micromanage -> Advanced. Alle bestaande kruisverwijzingen tussen tarieven worden verwijderd, maar de tarieven zelf blijven. <br/>
Micromanage -> Normaal. Alle bestaande kruisverwijzingen en tarieven worden verwijderd. <br/> ");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', "Toon kamerlijst op pagina met verhuurobjectgegevens? ");
jr_define('JOMRES_PROPERTYTYPE', "Verhuurobject type");
jr_define('JOMRES_MAXPEOPLEINROOM', "Max gasten per kamer ");
jr_define('JOMRES_MAXPEOPLEINBOOKING', "Max. gasten per boeking ");
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', "Voeg opmerking toe ");
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', "Bewerk notitie ");
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', "Verwijder notitie ");
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', "Bekijk notities ");
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', "Nieuwe notitie toegevoegd ");
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', "Bewerkte nota ");
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', "Verwijderde opmerking ");
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', "Overzicht van mijn boekingen ");
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', "Mijn boekingen ");
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', "Bekijk boeking ");
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', "Bekijk favorieten ");
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', "Je hebt nog geen favorieten toegevoegd! ");
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', "Verhuurobject type");
jr_define('_JOMCOMP_WISEPRICE_TITLE', "Stuntprijzen ");
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', "Actief");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', "Met deze plugin kunt u uw kortingen dynamisch configureren. ");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', "De meeste bedrijven zullen de bronprijzen herberekenen op basis van het aantal kamers van een vereist type dat op een bepaalde datum beschikbaar is. Dit stelt hen in staat om kortingen aan te bieden op een verhuurobject dat in een bepaalde periode niet in trek is. <br/> Met deze plugin kunt u aangepaste tariven aanbieden op basis van het aantal nog beschikbare kamers van een bepaald type dat nog beschikbaar is het verhuurobject op een speciefieke dag. <br/> De dagdrempel definieert het aantal dagen voor de aankomstdatum, voordat de bronprijzen worden aangepast aan deze functie. Het percentage dat u instelt is het percentage kamers dat beschikbaar mote zijn op de bepaalde datum voordat de korting wordt toegepast. Let wel, als meerdere kamers worden geboekt, dan wordt het huidige kortingsniveau op alle kamers toegepast en wordt het niet verminderd omdat er meer kamers zijn geselecteerd. ");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', "Drempelwaarde (aantal dagen tussen aankomstdatum en vandaag) ");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', "Percentage kamers bezet 10% of minder ");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', "Percentage kamers bezet 25% of minder ");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', "Percentage kamers bezet 50% of minder ");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', "Percentage kamers bezet 75% of minder ");
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', "Korting % ");
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', " lastminute korting ");
jr_define('_JOMCOMP_WISEPRICE_TO', " naar ");
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', " Korting niet toegepast ");
jr_define('JOMRES_COM_A_MAPSKEY', "Google Maps API-key ");
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'U kunt een Google Maps API-sleutel krijgen van <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank"> Google Maps </a>. Zodra u uw kaartcode hier hebt ingevoerd, zal Jomres de kaart tonen op uw pagina voor verhuuurobject details. ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', "Last minute");
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', "Actief?");
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', "Stel dit in op Ja als u lastminute aanbiedingen wilt aanbieden. ");
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', "Drempel");
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', "Indien een boeking is gemaakt en de aankomstdatum slechts N dagen is vanaf de boeking, dan kan de korting worden toegepast ");
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', "Korting");
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', "In procent ");
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', "Een korting is toegepast op deze boeking! ");
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', "De kosten van het verblijf zijn verminderd met ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', " ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', "% korting als u boekt om te komen voor ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', ". Boek nu om dit aanbod optimaal te gebruiken! ");
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', "% of meer korting kan beschikbaar zijn als de aankomstdatum eerder is");
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', "Uitgebreidde tarief info ");
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', "Stel dit in op Ja om gedetailleerde tariefgegevens te tonen in de eigendomsgegevens / tarief popup ");
jr_define('JOMRES_COM_A_MINIMALCONFIG', "Minimaliseer configuratieopties ");
jr_define('_JOMCOMP_AMEND', "Boeking wijzigen - verhuurobjects selectie ");
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', "Selecteer verhuurobject ");
jr_define('_JOMCOMP_AMEND_HEADER', "Oorspronkelijk contract: ");
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', "Aanbetaling betaald");
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', "Aanbetaling niet betaald ");
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', "Negeer totaal ");
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', "Negeer aanbetaling ");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', "Annuleer");
jr_define('_JRPORTAL_CPANEL', "Controlepaneel");
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', "Standaardcommissie tarief ");
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', "Kies de standaard commissie die wordt toegepast op een verhuurobject in het geval dat een andere commissie niet anders is ingesteld. ");
jr_define('_JRPORTAL_CPANEL_LISTCRATES', "Lijst commissie tarieven ");
jr_define('_JRPORTAL_CPANEL_PATETITLE', "Commissie tarieven ");
jr_define('_JRPORTAL_CRATE_TITLE', "Titel");
jr_define('_JRPORTAL_CRATE_TYPE', "Type");
jr_define('_JRPORTAL_CRATE_VALUE', "Commissie tarief ");
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', "Valuta code");
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', "Lijst verhuurobjecten ");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', "Naam verhuurobject");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', "Adres verhuurobject");
jr_define('_JRPORTAL_PROPERTIES_LEGEND', "Verhuurobjecten waarvan de achtergrondkleur rood is, hebben nog geen commissiepercentage toegepast. ");
jr_define('_JRPORTAL_STATS_PATETITLE', "Statistieken");
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', "Tarief van de commissie ");
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', "Lijst boekingen ");
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', "id verhuurobject");
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', "Factuur id ");
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', "Boeking totaal ");
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', "Datum gearchiveerd ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', "Beschrijving");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', "U kunt verhuurobject-specifieke taalbestanden hebben door de beschrijving hetzelfde te noemen als de naam van een submap, bijvoorbeeld 'yachtbrokerage' en het kopiëren van een taalbestand naar die submap. U kunt dan dat taalbestand wijzigen voor dit type woning, zodat kamers bijvoorbeeld dvd's worden, enz. ");
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', "U kunt dit verhuurobject niet verwijderen omdat het het enige verhuurobject is waar u toegang voor heeft. Als u het wilt uitschakelen, gebruikt u de functie 'Niet publiceren' in uw werkbalk. ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Accommodatie totaal ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "nacht(en) bij ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "per kamer ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Services totaal (incl. BTW) ");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', "Samenvatting ");
jr_define('_JOMRES_CONFIRMATION_ALERT', "Gelieve te lezen en akkoord te gaan met ");
jr_define('_JOMRES_CONFIRMATION_HEADER', "Een overzicht van uw boeking is hieronder weergegeven. <br /> Om eventuele wijzigingen aan te brengen, klikt u op de knop reservering wijzigen. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', "Als u iets van de bovenstaande informatie wilt veranderen, klik dan hier ");
jr_define('_JOMRES_CONFIRMATION_AMEND', "Reservering wijzigen ");
jr_define('_JOMRES_CONFIRMATION_SPECIALS', "Vul alstublieft speciale verzoeken in in het vak hieronder. ");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Ik bevestig dat de bovenstaande informatie juist is en akkoord ga met de ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "per persoon per nacht ");
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', "of");
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', "Start");
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', "Terug");
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', "Volgende");
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', "Einde");
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', "Resultaten");
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', "Vul alstublieft het bericht in wat u wilt verzenden ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', "Neem contact met ons op");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', "Aanvraag van ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', "Bedankt voor uw aanvraag, uw bericht is verzonden, en een kopie is naar uw eigen adres verstuurd. U krijgt zo snel mogelijk antwoord. ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', " met betrekking tot ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', "Vraag");
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', "Selecteer uw gewenste accommodatie uit de onderstaande lijst door op de kamer te klikken. ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', "Min kamers al geselecteerd ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', "Minimaal aantal kamers die al geselecteerd zijn in de boeking voordat de tarief/kamertype combo kunnen worden aangeboden. Hiermee kunt u kortingstarieven hebben wanneer meer dan N kamers al geselecteerd zijn. ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', "Maximale kamers al geselecteerd ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', "Maximaal aantal kamers die al geselecteerd zijn in de boeking voor tarief/kamertype combo niet meer wordt aangeboden. Hiermee kunt u voorkomen dat een kamertype/tariefcombinatie wordt aangeboden zodra er N-kamers zijn geselecteerd in het reserveringsformulier. ");
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', "Houd er rekening mee dat enkele persoons supplementen die hier zijn ingesteld, niet zullen worden gebruikt als enkele persoons supplementen zijn ingesteld op Ja in de algemene configuratie. De instellingen hier zijn een alternatief voor het hebben van platte tarieven enkele persoons supplementen, niet een aanvulling op de platte tarieven SPS. ");
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', "Beschikbaar");
jr_define('_JOMRES_AVLCAL_QUARTER', "Weinig boekingen ");
jr_define('_JOMRES_AVLCAL_HALF', "Halfvol ");
jr_define('_JOMRES_AVLCAL_THREEQUARTER', "Veel boekingen ");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', "Volgeboekt");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', "Per week");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', "Per dag");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', "Per boeking ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', "Per persoon per boeking ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', "Per persoon per dag ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', "Per persoon per week ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', "Per dagen (min dagen) ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', "Per dag geselecteerd X kamers ");
jr_define('_JOMRES_REGISTRYREBUILD', "Rebuild minicomponent register & herbouw cache ");
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normaal gesproken wordt het Jomres plugin-register automatisch herbouwd wanneer u de pluginbeheerder ziet en een plugin toevoegt of verwijderen, maar het is mogelijk dat u deze functies om een ​​of andere reden niet kunt gebruiken. Daarom kunt u deze functie handmatig gebruiken om het register te herbouwen. Als u toegang hebt tot de plug-in manager en upgrades, dan is het onwaarschijnlijk dat u deze functie moet gebruiken. U moet het plugin-register opnieuw opbouwen wanneer u een nieuw mini-onderdeel toevoegt en de plug-inbeheerder niet gebruikt om het toe te voegen. ");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', "Register is succesvol herbouwd ");
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', "Er is een fout opgetreden bij het herbouwen van het register van minicomponents. Je moet je Jomres-foutlogboek controleren om te zien of er een record is van wat de fout heeft veroorzaakt. ");
jr_define('_JOMRES_SEARCH_PRICERANGES', "Prijs");
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', "Je hebt nog geen boekingen gemaakt! ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', "Bewerk uw verhuurobject type ");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', "Selecteer uw verhuurobject type ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', "Uw aanvraag...");
jr_define('_JOMRES_COM_A_LISTLIMIT', "Verhuurobject lijst limiet ");
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', "Het aantal verhuurobjecten dat op een pagina moet worden weergegeven na een zoekopdracht ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', "Geïntegreerde zoekfunctie ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "De geïntegreerde zoekfunctie van Jomres stelt uw gebruikers in staat om via Jomres-bedrijven te zoeken naar een aantal functies. Als u alstublieft de zoekfuncties van Jomres in Joomla hebt gebruikt, zal u vertrouwd zijn met deze instellingen. <br/> Met deze functie kunnen wij zoekhandeling in Jomres aanbieden voor gebruikers die geen Joomla-zoekmodules willen gebruiken, of voor andere CMS-gebruikers die het CMS heeft, heeft u geen Jomres zoekmodules. <br/> Vergeet niet dat als u ervoor kiest om iets via een link te zoeken (dwz niet een dropdown) dan kunnen andere zoekopties zal niet geïmplementeerd worden, alleen het element dat overeenstemt met de link die u hebt geklikt. <br/> Merk op dat de lay-out van deze geïntegreerde zoekopdracht standaard niet mooi is. Dat komt omdat het sjabloonbestand dat de lay-out uitvoert alle mogelijke opties moet bevatten, waarvan sommige incompatibel zijn. Om de lay-out te verbeteren en de gewenste uitstraling te bereiken, moet u <b> srch.html </b> bewerken in de map <b> / jomres / templates / (bootstrap3 of bootstrap of jquery_ui) / frontend / </b> ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', "Activeer deze functie? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', "Als deze functie is ingeschakeld, dan zal elke oproep naar Jomres die de verhuurobjectlijst toont, betekenen dat de zoekopties ook worden weergegeven. ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', "Gebruik kolommen ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Elke zoekoptie die u hebt gedefinieerd als koppeltype (waar relevant) wordt weergegeven als kolommen (IE br aan het einde van de link) ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Zoek regio door combo dropdown te selecteren");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Bied een zoek dropdown aan om door landen / regio's / steden te filteren. Als u deze functie wilt gebruiken, kunt u het beste uit de regio / stad zoekopdrachten niet gebruiken. ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Verhuurobjectnaam");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Toon de invoer van de naam van het object. ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Toon als dropdown? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Stel dit op nee in om de lijst te tonen als links ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Stad / regio ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Toon de regio-invoer ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Toon als dropdown? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Stel dit op nee in om de lijst te tonen als links ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Zoek op type verhuurobject ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Toon de zoekopdracht op verhuurobject type invoer");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Toon als dropdown? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Stel dit op nee in om de lijst te tonen als links ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Zoek op kamertype ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Toon de zoekopdracht door middel van kamertype invoer ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Toon als dropdown? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Stel dit op nee in om de lijst te tonen als links ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Kenmerken");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Toon de zoekopdracht per kenmerk invoer ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Toon als dropdown? ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Stel dit op nee in om de lijst te tonen als tooltip afbeeldingen en selectievakjes ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Zoek op beschrijving ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Toon de zoekopdracht op de beschrijving invoer ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Zoek op beschikbaarheid ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Toon de zoekopdracht op basis van beschikbaarheid ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Zoek op prijsklassen ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Toon de zoekopdracht per prijsklasse invoer ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Prijsstijgingen ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres kijkt naar alle waarden in de tarieven en berekent vervolgens een reeks prijsklassen op basis van de waarde die u hier hebt ingesteld. ");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', "Als een eigenschap niet wordt geselecteerd in Jomres, wordt standaard een zoekopdracht uitgevoerd. Als deze zoekopdracht niet wordt geactiveerd door een zoekmodule dan zal deze zoekopdracht (willekeurig) willekeurige resultaten opleveren. Met deze optie kunt u het aantal opbrengsten in die willekeurige zoekopdracht beperken. ");
jr_define('_JOMRES_COM_A_CRON_TITLE', "Cron jobs ");
jr_define('_JOMRES_COM_A_CRON_DESC', "Pseudocron job informatie. De pseudocronfunctionaliteit is nodig door diverse functies zoals commissies, facturen en andere opruimingstaken. ");
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', "Geïnstalleerde cron minicomponents. Als u een individuele cron-baan wilt uitvoeren, gebruik dan de onderstaande koppelingen. Merk op dat de cron-taken geen output produceren, zodat u geen informatie op de pagina ziet. In plaats daarvan, verwijzen naar de jomres logs. ");
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD', "Methode");
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', "Als u geen toegang hebt tot cron-taken, stel deze in op Minicomponent, anders creëer u een cron-job en vertel het om <br /> krul -s '.JOMRES_SITEPAGE_URL_AJAX.' & Task = cronjobs & tmpl = '. ').' & no_html = 1 & secret = '. base64_encode (get_showtime (' secret ')).'> / dev / null ");
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', "Sjabloonbewerking ");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', "Aangepaste velden ");
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', "Hier kunt u eenvoudige aangepaste velden definiëren die in het boekingsformulier worden weergegeven. ");
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', "Veldnaam (geen spaties) ");
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', "Standaardwaarde");
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', "Beschrijving");
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', "Vereiste ");
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', "Maximumhoeveelheid ");
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', "Als Maximale hoeveelheid is ingesteld op meer dan 1, dan worden de gasten een dropdown aangeboden om de kwantiteit van de extra's die ze nodig hebben te kiezen. ");
jr_define('_JRPORTAL_TAXRATES_TITLE', "Belastingtarieven");
jr_define('_JRPORTAL_TAXRATES_CODE', "BTW-code");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', "Beoordeel beschrijving ");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', "U kunt dit belastingtarief niet verwijderen. ");
jr_define('_JRPORTAL_TAXRATES_RATE', "waarde ");
jr_define('_JRPORTAL_INVOICES_TITLE', "Facturen");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', "Onbetaalde");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', "Betaald");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', "Geannuleerd");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', "In afwachting");
jr_define('_JRPORTAL_INVOICES_USER', "Gebruiker");
jr_define('_JRPORTAL_INVOICES_STATUS', "Status");
jr_define('_JRPORTAL_INVOICES_RAISED', "Factuurdatum");
jr_define('_JRPORTAL_INVOICES_DUE', "Status");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', "Abonnement");
jr_define('_JRPORTAL_INVOICES_INITTOTAL', "Uitstaande totaal ");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Frequentie ");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', "Dag van de maand ");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', "Valuta code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS', "Posten ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', "Naam");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Beschrijving");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Prijs ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Aantal");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Korting ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Totaal ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "BTW-code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "BTW-omschrijving ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "BTW");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Installeer de standaard Jomres gateway instellingen? ");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', "Toon mijn facturen ");
jr_define('_JRPORTAL_COUPONS_TITLE', "Kortingsbonnen ");
jr_define('_JRPORTAL_COUPONS_DESC', "Korting codes kunnen worden gegenereerd en doorgegeven aan gasten als een stimulans om boekingen te maken. Geldig vanaf en tot datums verwijzen wij u naar de data waarop een boeking kan worden gemaakt, niet de data van de boeking zelf. ");
jr_define('_JRPORTAL_COUPONS_CODE', "Coupon code");
jr_define('_JRPORTAL_COUPONS_VALIDFROM', "Geldig vanaf");
jr_define('_JRPORTAL_COUPONS_VALIDTO', "Geldig tot");
jr_define('_JRPORTAL_COUPONS_AMOUNT', "Korting hoeveelheid");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', "Korting is een percentage ");
jr_define('_JRPORTAL_COUPONS_ROOMONLY', "Alleen kamer ");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', "Als u een couponcode hebt, vul het dan in in het ervoor beedoelde vak en klik op de link 'Bewaar coupon' om de coupongegevens op te slaan voor uw boeking. ");
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', "Coupon opslaan ");
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', "Coupon opgeslagen voor uw boeking ");
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', "Coupon nummer niet gevonden ");
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', "Coupon kortingswaarde ");
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', "Korting toegepast op reservering. Coupon code / korting waarde / coupon instellingen: ");
jr_define('_JOMRES_COM_CHOOSELANGUAGES', "Kies talen ");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', "Kies de taalopties die moeten worden weergegeven in de dropdown van de taalwisselaar. ");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', "Toon de taalkeuzemenu? ");
jr_define('_JRPORTAL_NEWUSER_DEAR', "Geachte");
jr_define('_JRPORTAL_NEWUSER_THANKYOU', "Bedankt voor het registreren ");
jr_define('_JRPORTAL_NEWUSER_USERNAME', "Uw gebruikersnaam is: ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', "Uw wachtwoord is: ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN', "Log in om uw boekingen te bekijken");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', "Coupon opgeslagen ");
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', "Coupon verwijderd ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', "Boekingsformulier kamerlijst toont gehandicapte toegang ");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', "Boekingsformulier kamerlijst toont maximale aantal gasten");
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "De volledige prijs van de boeking wordt berekend nadat u een kamer heeft toegevoegd aan uw selectie. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Abonnementen");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Naam");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Beschrijving");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Gepubliceerd ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Volledige bedrag");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Verhuurobject limiet ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Inschrijven ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', "Gebruik abonnements functionaliteit ");
jr_define('_JOMRES_COM_NEWUSER', "Maak een nieuwe gebruiker bij het boeken ");
jr_define('_JOMRES_COM_NEWUSER_DESC', "Maak een nieuw gebruikersaccount bij ongeregistreerde gebruikersboeking. (Alleen Joomla) ");
jr_define('_JOMRES_CLICKTOREGISTER', "Klik hier om je bedrijf te registreren ");
jr_define('_JRPORTAL_NEWUSER_SUBJECT', "Nieuwe gebruikersgegevens ");
jr_define('_JOMRES_LATLONG_DESC', "Gebruik je muis om de kaart te verplaatsen en sleep de aanwijzer naar de locatie van je woning om de breedtegraad en lengte te bepalen. ");
jr_define('_JOMRES_CONTROLPANEL', "Controlepaneel");
jr_define('_JOMRES_MANAGER_SHOWINVOICE', "Toon factuur ");
jr_define('_JOMRES_MANAGER_SHOWINVOICES', "Toon facturen ");
jr_define('_JOMRES_USER_LISTMYPROPERTY', "Voeg mijn verhuurobject toe aan deze site ");
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', "Te doen : ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Sorry, maar dat pakket ID wordt niet herkend. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Sorry, je bent al aangemeld voor een gratis pakket, je kunt je niet opnieuw abonneren op dat pakket. ");
jr_define('_JOMRES_COM_YOURBUSINESS', "Uw bedrijfsgegevens ");
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', "Bedrijfsnaam");
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', "Btw-nummer");
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', "Adres");
jr_define('_JOMRES_INVOICE_NUMBER', "Factuur nr. ");
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', "Selecteer de datums waarop u de zwarte boeking wilt toepassen. Wanneer u de juiste data hebt geselecteerd, klikt u op de knop 'Toepassen' om de beschikbaarheid opnieuw te controleren. <br/>
<br/>
Als de accommodatie één of meerdere boekingen heeft voor de geselecteerde periode, dan kunt u het niet boeken tot de andere boekingen/blokkeringen zijn geannuleerd/uitgechecked. ");
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', "Sorry, u kunt deze accommodatie niet voor deze datum blokkeren. ");
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', "U kunt deze accommodatie blokkeren voor die data. ");
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', "Uw woning is geconfigureerd om per persoon per nacht in rekening te brengen, maar u heeft geen gastypes gemaakt of gepubliceerd, maak alsjeblieft een of meerdere gastypen aan en publiceer deze. ");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', "Vervolgens moet u enkele tarieven toevoegen. Dit zijn uw basis kamerprijzen, u moet prijzen toevoegen voor elk kamertype dat u in uw verhuurobject heeft. ");
jr_define('_JOMRES_EDITINGMODE_ON', "Label bewerkingsmodus aan ");
jr_define('_JOMRES_EDITINGMODE_OFF', "Label bewerkingsmodus uit ");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', "Breng variabele aanbetaling in rekening? ");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', "Met variabele aanbetlingen kunt u bepalen of u het volledige bedrag wilt berekenen wanneer de aankomstdatum van de boeking binnen N dagen is voor 'vandaag'. Stel deze optie in op Ja om de functie in te schakelen en voer het aantal dagen hieronder in, bijvoorbeeld als de aankomstdag binnen 60 dagen is, dan is de in rekening gebrachte aanbetaling het volledige bedrag, anders is het bedrag gebaseerd op de aanbetaling opties die hierboven zijn geconfigureerd. ");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', "Het aantal dagen, waarin het volledige bedrag in rekening wordt gebracht als bevestiging. ");
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', "Bevestigings email is verzonden. U kunt dit venster nu sluiten. ");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', "Contact verhuurder ");
jr_define('_JOMRES_INVOICE_MARKASPAID', "Markeer factuur als betaald ");
jr_define('_JOMRES_INVOICE_MARKEDASPAID', "Factuur gemarkeerd als betaald ");
jr_define('_JOMRES_APIKEY_REMAKE', "Maak een nieuwe API-key ");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', "Is dit een éénkamer installatie? ");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', "Als deze optie is ingesteld op Ja, wordt de frontend-weergave naar niet-geautoriseerde gebruikers sterk vereenvoudigd. Standaardoproepen naar het reserveringssyeteem vanuit een menu optie, in plaats van een lijst van bedrijven, brengt de gast naar het boekingsformulier voor de eerste woning in het systeem. Managers zien ook de preview-knop niet en de knop voor het toevoegen van nieuwe verhuurobjectn. Ideaal als u slechts één woning wilt en reserveringen daarvoor kunt ontvangen. <br/> ");
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', "Betalingsbalans ");
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Opmerking, u gebruikt de bewerkingsmodus met de modus Global Editing ingeschakeld. Dit is prima als u begrijpt wat de modus Global Editing betekent, maar als u dat niet weet kunt u problemen veroorzaken. Als u niet zeker bent of u Jomres op deze manier gebruikt, raadpleeg dan <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268 -meditatie-modus "target =" _ blank "> de handmatige pagina van de bewerkingsmodus </a> voor meer informatie over dit onderwerp. ');
jr_define('_JOMRES_SUPPORTKEY', "Support key ");
jr_define('_JOMRES_SUPPORTKEY_DESC', "Uw nummer van de ondersteuningslicentiecode (ook bekend als uw licentienummer). U heeft een up-to-date licentie nodig om plugins voor Jomres te kunnen downloaden. ");
jr_define('_JOMRES_PERSONAL_DISCOUNT', "Persoonlijke korting ");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', "Registratie van verhuurobjecten beperken tot één land? ");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', "U kunt ervoor zorgen dat registraties van verhuurobjecten beperkt zijn tot slechts één land door deze optie op Ja te zetten en het land in de volgende optie in te stellen. ");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', "Bedrijven zijn gevestigd in dit land: ");
jr_define('_JOMRES_JQUERYTHEME', "Jquery thema ");
jr_define('_JOMRES_JQUERYTHEME_DESC', "Kies een jquery-thema om te gebruiken voor de tabbladen voor eigenschappen. ");
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', "Het spijt ons, maar dat verhuurobject is momenteel niet beschikbaar. ");
jr_define('_JOMRES_REVIEWS', "Reviews");
jr_define('_JOMRES_REVIEWS_TITLE', "Review titel ");
jr_define('_JOMRES_REVIEWS_DATE', "geplaatst op ");
jr_define('_JOMRES_REVIEWS_NOREVIEWS', "Er zijn nog geen reviews voor deze accommodatie. ");
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', "Wilt u de eerste zijn om dit bedrijf te beoordelen? ");
jr_define('_JOMRES_REVIEWS_IAGREE', "Ik ben het eens met deze beoordeling ");
jr_define('_JOMRES_REVIEWS_IDISAGREE', "Ik ben het niet eens met deze beoordeling ");
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', "Gemiddelde score: ");
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', "Totaal aantal stemmen: ");
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', "Voeg een nieuwe review toe. ");
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', "Je moet ingelogd zijn om een ​​review te plaatsen. ");
jr_define('_JOMRES_REVIEWS_REVIEWBODY', "Vertel ons wat u van deze accommodatie denkt: ");
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', "Deze recensent vertelde ons: ");
jr_define('_JOMRES_REVIEWS_PROS', "Voordelen: ");
jr_define('_JOMRES_REVIEWS_CONS', "Nadelen: ");
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', "Ingediend op: ");
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', "U heeft dit bedrijf al beoordeeld, u kunt niet nog een review plaatsen. ");
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', "Sorry, maar u mag geen reviews op deze site plaatsen. ");
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', "Toon reviews ");
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', " gasten gaan akkoord met deze beoordeling. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', " gasten gaan niet akkoord met deze beoordeling. ");
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', " gast stemt in met deze beoordeling. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', "gast gaat niet akkoord met deze beoordeling. ");
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', "Bedankt voor het delen van uw mening over deze recensie. ");
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', "Bedankt, maar u heeft uw mening over deze beoordeling al gedeeld. ");
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', "Zorg ervoor dat alle velden zijn ingevuld. ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', "Gelieve uw recensie samen te vatten door een titel in te vullen ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', "Vul alstublieft een vollediger overzicht in in het omschrijvingsvak ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', "Voer alstublieft uw goede ervaringen in toen u te gast was ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', "Voer alstublieft uw slechte ervaringen in toen u te gast was ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', "Gelieve de gastvrijheid die u van de medewerkers hebt ontvangen, te beoordelen");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', "Gelieve uw mening over het verhuurobject te beoordelen");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', "Geef uw mening over de netheid van het verhuurobject ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', "Gelieve de accommodatie te beoordelen. Was het comfortabel of juist niet ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', "Geef alstublieft uw mening over of het het geld waard was ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', "Gelieve de diensten te beoordelen ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', "Review samenvatting ");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', "Uw ervaring uitgebreider ");
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', "Bedankt voor het indienen van uw review. ");
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', "Bedankt voor het indienen van uw review. Het wordt binnenkort gepubliceerd door een van onze hardwerkende moderators. ");
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', "Gebruik Jomres review functionaliteit? ");
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', "Publiceer reviews automatisch? ");
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', "Als u dit op Nee instelt, moet u reviews handmatig publiceren ");
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', "Stel reviews in op testmodus? ");
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', "Normaal gesproken kunnen verhuurobject beheerders bedrijven niet beoordelen. Met de testmodus ingeschakeld, kunnen ze dat wel. Natuurlijk is dit niet ideaal in een productieomgeving. ");
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', "Dit is een lijst van alle bedrijven. Om reviews van een bedrijf te zien, klik op dat bedrijf. Van daaruit kunt u een review publiceren of verwijderen. ");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', "Aantal ongepubliceerde reviews ");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', "Totaal aantal reviews ");
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', "Publiceer/depubliceer review ");
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', "Verwijder review ");
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', "Verslag review ");
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', "Review rapporten ");
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', "Vul alstublieft uw rapport in ");
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', "Zie u iets in deze review dat niet objectief of onjuist is? Meld het aan en we zullen het voor u bekijken. ");
jr_define('_JOMRES_REVIEWS_SUBMIT', "Verzenden ");
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', "Rapport gemaakt door ");
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', "Rapporten worden door gebruikers geplaatst die het mogelijk niet eens zijn met de inhoud van een review. De enige manier om een ​​rapport te verwijderen is om de review te verwijderen. ");
jr_define('_JOMRES_REVIEWS_RATING', "Beoordelingen (1 = slecht 10 = uitstekend) ");
jr_define('_JOMRES_REVIEWS_RATING_1', "Gastvrijheid ");
jr_define('_JOMRES_REVIEWS_RATING_2', "Plaats ");
jr_define('_JOMRES_REVIEWS_RATING_3', "Hygiëne ");
jr_define('_JOMRES_REVIEWS_RATING_4', "Accommodatie ");
jr_define('_JOMRES_REVIEWS_RATING_5', "Waar voor je geld ");
jr_define('_JOMRES_REVIEWS_RATING_6', "Diensten ");
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', "Beoordeeld door : ");
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', "Beoordelingen verbergen ");
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', "Toon boekingsformulier op pagina met verhuurobjectgegevens? ");
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', "Stel dit in op Ja om het boekingsformulier op de pagina met verhuuobjectgegevens weer te geven. Als u het op Nee instelt, verschijnt er een link op de pagina met verhuurobjectgegevens, in plaats van naar het reserveringsformulier. ");
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', "Prijzen zijn bruto? ");
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', "Als de prijzen die u in het systeem invoert inclusief belasting zijn, selecteer dan Ja. Als ze dat niet zijn (dat wil zeggen Netto), selecteer Nee ");
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', "Services BTW: ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', "Met de dag van de weekvelden kunt u een tarief instellen voor een bepaalde dag van de week, zodra u op de dag van de week klikt, worden alle dagen van de week op dat tarief ingesteld. ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', "Met de datumkeuzers en de tariefinvoer kunt u een prijs instellen voor een bepaald datumbereik. Kies een start- en einddatum, voer een prijs in en klik op de knop Set Rates. ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', "Start bereik ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', "Eind bereik ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', "Tarief ");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', "Stel tarieven in");
jr_define('_JOMRES_PARTNERS_TITLE', "Partners");
jr_define('_JOMRES_CALENDAR_RTL', "fout");
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', "Kamer ");
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', "gast (en). ");
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', "Dit is hoe we uw gast aantallen hebben toegewezen aan hun kamers. Als u deze toewijzing wilt wijzigen, moet u contact opnemen met het hotel na het maken van de boeking. Extra kosten kunnen van toepassing zijn als u uw opdrachten wijzigt. ");
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Houd er rekening mee dat uw verhuuobject nog niet is gepubliceerd, alleen u kunt het verhuurobject zien, bezoekers zullen het niet zien ");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', "Standaard zoekresultaat ");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', "Verander deze optie om de volgorde te wijzigen waarin de zoekresultaten standaard worden weergegeven. ");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', "Toon zoekresultaat volgorde dropdown ");
jr_define('_JOMRES_ROOMMSLIST_STYLE', "Kamerslijst stijl ");
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', "In het reserveringsformulier, met behulp van de 'klassieke' kamerslijst stijl biedt u individuele kamers aan gasten. Met de weergave van de kamertype kiezen gasten het aantal kamers van type X (bijvoorbeeld 2 x dubbels) in plaats van ");
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', "Klassiek");
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', "Kamer typen ");
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', "Kalender week startdag, zondag of maandag ");
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', "Alleen verhuurobjecten kunnen worden beoordeeld? ");
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', "Stel dit in op Ja als u reviews wilt beperken aan alleen de gebruikers die al een gast zijn in dit bedrijf. ");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', "Per appartement");
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', "Maximum aantal gasten: ");
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', "Gasten per boeking: ");
jr_define('_JOMRES_NUMBER_OF_ROOMS', "Aantal");
jr_define('_JRPORTAL_MONTHS_LONG_0', "Januari");
jr_define('_JRPORTAL_MONTHS_LONG_1', "Februari");
jr_define('_JRPORTAL_MONTHS_LONG_2', "Maart");
jr_define('_JRPORTAL_MONTHS_LONG_3', "April");
jr_define('_JRPORTAL_MONTHS_LONG_4', "Mei");
jr_define('_JRPORTAL_MONTHS_LONG_5', "Juni");
jr_define('_JRPORTAL_MONTHS_LONG_6', "Juli");
jr_define('_JRPORTAL_MONTHS_LONG_7', "Augustus");
jr_define('_JRPORTAL_MONTHS_LONG_8', "September");
jr_define('_JRPORTAL_MONTHS_LONG_9', "Oktober");
jr_define('_JRPORTAL_MONTHS_LONG_10', "November ");
jr_define('_JRPORTAL_MONTHS_LONG_11', "December");
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', "Stel dit in op Ja om het aantal beschikbare opties voor verhuurobject beheerders te beperken in het gedeelte Algemene configuratie. Dit is handig als u niet wilt dat verhuurobject beheerders met te veel instellingen spelen, in plaats daarvan kunt u jomres_config.php bewerken om standaard eigenschappen te definiëren. ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', "Selecteer alstublieft een optie voor uw boeking ");
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Als deze optie is ingesteld op Ja, dan kunnen managers de HTML-editor die bij het CMS is geleverd, zien en HTML in de beschrijving invoeren. Dit is een potentieel beveiligingsrisico, omdat er een mogelijkheid is dat zij ongewenste HTML of Javascript kunnen invoeren. Bovendien, als ze slecht geformatteerde HTML invoeren, kan het pagina-ontwerp worden gecompromitteerd. Het is beter om deze optie op Nee te plaatsen waar mogelijk. </ P> <p> Als alle managers vertrouwde gebruikers zijn (bijvoorbeeld jezelf), dan kun je het instellen op Ja en je wijzigt de verschillende HTML-tags die ze mogen invoeren in het tabblad Input Filtering in Site Configuration. </ p> <p> Als u daarentegen Jomres gebruikt als portal waar u gebruikers uitnodigt om hun eigen eigenschappen toe te voegen en te beheren dan is dit niet de ideale configuratie . In plaats daarvan moet u deze optie instellen op Nee. Met het instellen op Geen managers zullen in plaats daarvan een markdown-editor zien die ze kunnen gebruiken om basisformattering in te voeren die voldoende zou zijn voor de meerderheid van de gebruikers. </ P> ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Volledige schermweergave ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normale weergave ");
jr_define('_JOMRES_PARTNER_DISCOUNT', "Partner korting ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Zoek gebruiker ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Vul een paar karakters in om te zoeken naar een gebruiker. <br/> Wanneer u een gebruiker selecteert, voegt u ze automatisch als een partner toe en wordt u naar de volgende pagina gebracht waar u bedrijven en kortingen aan de gebruiker kunt toewijzen. ");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Bestaande partners ");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Kies een partner die moet worden opgenomen in de partneradministratiepagina. ");
jr_define('_JOMRES_PARTNER_SHOW_TITLE', "Partner: ");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Zoek een verhuurobject ");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Vul een paar karakters in van het verhuurobject en selecteer een verhuurobject. <br/> Wanneer u het object selecteert, voegt u het toe aan de partnerportefeuille, maar ze hebben nog geen kortingen, u moet deze zelf instellen. ") ;
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Huidige verhuurobjecetn ");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Klik op een verhuurobject om de kortingsinstellingen van de partner voor dat verhuurobject te bewerken. ");
// 4.6', "
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Dit account is opgeschort, het is momenteel niet mogelijk om uw verhuurobject(en) te beheren met dit account. ");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Manager account geschorst ");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Manager account hersteld ");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Houd er rekening mee dat uw verhuurobject beheerder account is geschorst. U kunt geen verhuurobject beheerfuncties uitvoeren tot het account is hersteld. ");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Houd er rekening mee dat uw verhuurobject beheerder account nu actief is. U kunt de verhuurobject beheerfuncties verder uitvoeren. Log alstublieft in op uw account en zorg ervoor dat de goedkeurende verhuurobjecten zijn gepubliceerd. Dank je.");
jr_define('_JOMCOMP_MYUSER_REMOVE', "Verwijder favoriet ");
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', "Boeken gegevensarchief ");
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', "Het boekingsgegevensarchief is een ruwe dump van boekingsinformatie die is vastgelegd nadat de bevestigingsboek knop is geklikt. Beweeg over een datum om de ruwe data dump te zien. De informatie is opgeslagen in de tabel XXX__jomres_booking_data_archive. ");
jr_define('_JOMRES_MY_ACCOUNT_EDIT', "Bewerk account");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Om een ​​gebruiker toe te voegen als verhuurobject beheerder, voer dan eerst de eerste paar karakters van hun gebruikersnaam in het bovenstaande veld in. Wanneer de juiste gebruiker is gevonden, klik op die naam om deze te selecteren en kies vervolgens welke verhuurobject(en) ze zouden moeten beheren.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Bestaande beheerders ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Slaapplaatsen");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Toon de zoekopdracht per gast aantallen als dropdown ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Sterren");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Toon de sterren-dropdown ");
jr_define('_JOMRES_SEARCH_GUESTNUMBER', "Aantal gasten");
jr_define('_JOMRES_SEARCH_STARS', "Aantal sterren ");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Aantal verhuurobjecten ");
// 4.6.1', "
jr_define('_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery library? ");
jr_define('_JOMRES_CONFIG_JQUERY_DESC', "U kunt dit instellen op NEE als u een sjabloon hebt die jquery gebruikt. Dit kan problemen met conflictconflicten op sommige sjablonen oplossen, maar niet allemaal. ");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Als u deze optie inschakelt, kunt u de taalwisselaar zien in de fullscreen-weergave in het frontend. ");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', "Miniaturen worden automatisch gemaakt voor geuploade beelden. ");
// 4.7.1', "
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', "Kleine miniaturen maximale breedte (px). ");
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', "Kleine miniaturen worden gebruikt in de eigendomslijst, terwijl middelgrote miniatuurafbeeldingen in de eigenschapshoofd worden gebruikt. ");
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', "Kleine miniaturen maximale hoogte (px). ");
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', "Medium thumbnails maximale breedte (px). ");
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', "Medium thumbnails maximale hoogte (px). ");
jr_define('_JOMRES_TOUCHTEMPLATES', "Label vertalingen ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', "Gebruik commissie functionaliteit? ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Stel dit in op Ja om de commissie facturen weer te geven die zijn opgeheven. ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Managerboekingen maken commissie facturen? ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Als een manager een boeking maakt, creëert dat ook een commissie factuur regel? ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Automatisch opschorten van managers waar facturen gemarkeerd zijn als Pending? ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Automatisch opschorten van threashold ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Deze threasholding is het aantal dagen dat een manager een factuur moet betalen voordat ze worden geschorst en hun bedrijven ongepubliceerd zijn. ");
//4.7.2', "
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', "Taalcontext ");
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Gebruik deze optie om de taalcontext van de site te wijzigen. Met deze functie kan Jomres labels gebruiken die geschikt zijn voor uw huidige focus, dus als uw focus als een jachtmakelaar is, dan kunt u Jomres gebruiken om labels uit een ander taalbestand te presenteren. Als u bijvoorbeeld de context instelt op 'Yacht Brokerage', dan zal Jomres eerst de huidige taal vinden, en zoek dan de /'.JOMRES_ROOT_DIRECTORY.'languages ​​directory voor een sub-directory genaamd 'yachtbrokerage'. Als het bestand voor de huidige taal bestaat, dan wordt dat bestand gebruikt. Zo niet, dan zoekt Jomres naar een engels taalbestand in diezelfde map. Als dat niet kan worden gevonden, gebruikt Jomres het taalbestand voor de momenteel geselecteerde taal in de directory /'.JOMRES_ROOT_DIRECTORY.'languages. Merk op dat als u een nieuw type eigendom maakt, dan wordt een kopie van het huidige taalbestand gemaakt in een subdirectory onder /'.JOMRES_ROOT_DIRECTORY.'/taal met een naam die de beschrijving van het nieuwe eigendomsoort weerspiegelt. ");
// 4.7.3', "
jr_define('_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI-bibliotheek? ");
jr_define('_JOMRES_SORTORDER_PRICE_DESC', "Prijs (hoogste eerst) ");
jr_define('_JOMRES_SORTORDER_PRICE_ASC', "Prijs (laagste eerst) ");
// 4.7.6', "
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', "Prijsopgave en schattingen moeten worden geprijsd als per nacht / per week / per maand? ");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', "Per nacht");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', "Per week");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', "Per maand");
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', "Per persoon");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', "week(en) op ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', "maand(en) op ");
// 4.7.7', "
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', "Hoe moet de zoekoptie voor aantal gasten werken? ");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', "Heweft effect op alle zoekmodules. Als u de zoekfunctie gebruikt, moet de zoekfunctie zoeken naar verhuurobjecten waarvan de tarieven het aantal gasten zal ondersteunen en gelijk zijn aan het gekozen aantal, gelijk aan het gekozen aantal of het gekozen aantal? ");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', "Wacht even, uw reservering wordt verwerkt en u wordt doorgestuurd naar de Paypal website. ");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', "Als u niet automatisch binnen 5 seconden naar Paypal wordt doorgestuurd ... ");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', "Klik hier");
// 4.7.8
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', "Stel dit in op Nee om laden van zowel de JQuery UI javascript en CSS-bestanden uit te schakelen. ");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS-bibliotheek? ");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Stel dit in op Nee om alleen het jQuery-UI-CSS-bestand uit te schakelen. ");
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Totaal incl. BTW ");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', "Gedepubliceerd verhuurobject ");
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', "Gebruik valuta conversiefunctie ");
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Gebruik de online valuta conversiefunctie van Jomres. Dit biedt een valuta conversie dropdown naar frontend gebruikers, waar zij een valuta kunnen kiezen waar ze de prijzen voor willen zien. De prijsuitvoer wordt aangepast aan de hand van de huidige koers, gevolgd door de lokale prijs van de woning in haakjes.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "We hebben ons best gedaan om de meest accurate en tijdige wisselkoersen te verkrijgen die we kunnen. Onze online valuta conversie functie is een dienst die uitsluitend ter informatie wordt verstrekt en is niet bedoeld om exacte cijfers te verstrekken. Daarom garanderen wij niet de juistheid van de wisselkoersen. Met deze functie wordt u geacht te hebben ingestemd dat een beroep op of gebruik van de tariefomzettingsfunctie volledig op uw eigen risico is. ");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', "Valuta omzetting/valuta codes ");
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', "IP-detectie API-sleutel ");
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Om de valuta code dropdown automatisch in te stellen, kan Jomres een gratis service genaamd IPinfoDB gebruiken om het land van de bezoeker te detecteren, maar u moet zich registreren voor een API-sleutel op <a href = "http://ipinfodb.com/register .php "target =" _ blank "> IPinfoDB </a> eerst. ');
jr_define('_JOMRES_DEBUGGING_TAB', "Debugging ");
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', "Accommodatie excl. BTW ");
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', "Accomodatie incl. BTW");
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', "Accommodatie BTW ");
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', "Open het reserveringsformulier ");
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', "Terug naar verhuurobject gegevens ");
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', "Automatisch geselecteerd? ");
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', "Openstaand (na (aan)betaling) ");
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', "Filter kamers op basis van hun kenmerken. ");
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', "Laatste boeking ");
jr_define('_JOMRES_DATEPERIOD_SECOND', "tweede");
jr_define('_JOMRES_DATEPERIOD_MINUTE', "minuut");
jr_define('_JOMRES_DATEPERIOD_HOUR', "uur");
jr_define('_JOMRES_DATEPERIOD_DAY', "dag");
jr_define('_JOMRES_DATEPERIOD_WEEK', "week");
jr_define('_JOMRES_DATEPERIOD_MONTH', "maand");
jr_define('_JOMRES_DATEPERIOD_YEAR', "jaar");
jr_define('_JOMRES_DATEPERIOD_DECADE', "decennium");
jr_define('_JOMRES_DATEPERIOD_S', "en");
jr_define('_JOMRES_DATEPERIOD_AGO', "geleden");
jr_define('_JOMRES_DATEPERIOD_FROMNOW', "vanaf nu");
jr_define('_JOMRES_WHOLEDAY_TITLE', "Boekingen zijn voor hele dagen? ");
jr_define('_JOMRES_WHOLEDAY_DESC', "Standaard worden de reserveringen per nacht geboekt, dus een boeking vanaf 1 januari' .date ('Y', strtotime ('volgend jaar')). ' tot 2 januari '.date (' Y ​​', strtotime (' volgend jaar ')).' bestrijkt slechts een nacht. Als u deze optie op Ja instelt, dan zal de reservering de hele dagen betrekking hebben, dus een boeking op die dagen zou beide dagen bedekken en de klant zou twee dagen in rekening worden gebracht. ");
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', "Per dag");
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', "Per persoon per dag ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', "Aankomst");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', "Vertrek");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "dag(en) op ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', "Vertrekdatum niet correct ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', "De reservering is te kort. Er moet minstens zoveel dagen bestaan ​​tussen de aankomst- en vertrekdatum: ");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', "Aankomst/Vertrek minimum interval ");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "Het minimale interval in het boekingsformulier tussen de aankomst en de vertrekdatums. Een interval van 1 betekent dat de aankomst en vertrekdatums op dezelfde dag kunnen worden ingesteld, maar dit hangt nog steeds af van het minimuminterval dat automatisch door de boekingsmachine wordt berekend, aangezien het tarieven controleert die geldig zijn voor de boekingsperiode . ");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', "Prijsopgave en schattingen moeten per dag/per week/per maand worden aangegeven? ");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', "Per dag");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', "Dagen voor de aankomstdatum ");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', "Het minimale aantal dagen vanaf 'vandaag', vóór de aankomstdatum. ");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Stel dit in op Ja als u boekingen wilt beperken welke vlak voor aankomstdatum worden gemaakt(gebruik het volgende veld om de limiet in termen van dagen in te stellen). Als u dit op ja zet, dan wordt de datum van de gebruiker teruggezet naar de datum van vandaag, als de gebruiker meer dan n dagen van tevoren probeert te boeken.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', "Toon de datum van de vertrekdatum? ");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Zet dit op Nee als u het invoervakje van de datum van vertrek niet wilt weergeven. Gebruik dit alleen als u weet wat u doet, aangezien de vertrekdatum bij boekingen altijd de dag na de aankomstdatum wordt ingesteld. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "Als u dit op Ja instelt, worden de boekingen voor een bepaalde periode uitgevoerd. Als dit is ingesteld op Nee, zorg dan ervoor dat de 'gedefinieerde aankomstdag' niet is ingesteld op Ja (tenzij u specifiek mensen wilt dwingen op een bepaalde dag van de week aan te komen) anders krijgt u niet veel links in de beschikbaarheid kalender.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', "Vooraf gedefinieerde aankomstdag ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', "Alleen voor sites met vaste periodeboekingen. Kies de dag van de week waarop men mag aankomen.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', "Vaste aankomstdag ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', "Vaste aankomstdatums herhalen: ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', "Als er vaste datum's zijn geselecteerd, is het aantal data dat kan worden weergegeven in de vervolgkeuzelijst data. Houd er rekening mee dat de lijst met data geen data bevat als een boeking niet mogelijk is door voorafgaande boekingen en dat de lijst daadwerkelijk twee keer zo lang zal zijn als uw gekozen nummer omdat het een vergelijkbaar aantal historische data zal hebben (indien beschikbaar) . ");
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', "Per persoon, per dag ");
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', "Selecteer Ja als u per persoon per dag wilt betalen. Als nee, dan worden de kosten per per-kamer per dag berekend ");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Met variabele aanbetalingen kunt u bepalen of u het volledige bedrag in rekening wilt brenegn wanneer de boekingsdatum van de boeking binnen N dagen van 'vandaag' is. Stel deze optie in op Ja om de functie in te schakelen en voer het aantal dagen hieronder in, bijvoorbeeld als de afhalen dag binnen 60 dagen is, dan is de in rekening gebrachte aanbetaling het volledige bedrag, anders wordt het bedrag gebaseerd op de waardes die hierboven zijn geconfigureerd. ");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "De meeste bedrijven zullen de bronprijzen herberekenen op basis van het aantal kamers van een vereist type dat op een bepaalde datum beschikbaar is. Dit stelt hen in staat om kortingen aan te bieden op een verhuurobject dat in een bepaalde periode niet in trek is. <br/> Met deze plugin kunt u aangepaste tariven aanbieden op basis van het aantal nog beschikbare kamers van een bepaald type dat nog beschikbaar is het verhuurobject op een speciefieke dag. <br/> De dagdrempel definieert het aantal dagen voor de aankomstdatum, voordat de bronprijzen worden aangepast aan deze functie. Het percentage dat u instelt is het percentage kamers dat beschikbaar mote zijn op de bepaalde datum voordat de korting wordt toegepast. Let wel, als meerdere kamers worden geboekt, dan wordt het huidige kortingsniveau op alle kamers toegepast en wordt het niet verminderd omdat er meer kamers zijn geselecteerd. ");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', "Drempelwaarde (aantal dagen tussen aankomstdatum en vandaag) ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', "Aankomst in afwachting ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', "Aankomst vandaag ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', "Aangekomen");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', "Vertrekt vandaag ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', "Vertrek uitgesteld ");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', "Niet aangekomen ");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', "Dagen");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', "Markeer een boeking als aangekomen. ");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', "Markeer een boeking als vetrokken. ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', "Markeer een boeking als aangekomen ");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', "Markeer een boeking als vertrokken ");
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', "Kosten per dag: ");
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', "Aantal dagen: ");
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', "Overschrijf accommodatie totaal ");
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', "Opslaan overgeschreven totaal ");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', "E-mail nieuwe gebruikers hun inloggegevens? ");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', "Als de optie Nieuwe gebruiker aanmaken is ingesteld op Ja, kunt u deze optie instellen op Nee om ervoor te zorgen dat hun logingegevens niet worden gemaild zodra de gebruiker is aangemaakt. Dit kan handig zijn als u bijvoorbeeld nieuwe gebruikers automatisch aan een mailinglijst toevoegt, en u niet wilt dat gebruikers eigenlijk inloggen. ");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', "Toon BTW in het boekingsformulier samenvatting totaal? ");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', "Voorkom dat het boekingsformulier de BTW prijs velden in het samenvatting toataal toont door deze optie op Nee te zetten.");
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', "Annulerings drempel ");
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', "Ingelogd, geregistreerde gasten kunnen hun eigen boekingen annuleren. Hier kunt u de drempel instellen in aantal dagen, waarna de boeking niet kan worden geannuleerd voor de aankomstdatum. ");
jr_define('_JOMRES_EDIT_PROFILE', "Bewerk profiel");
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', "verhuurobject relatie ");
jr_define('_JOMRES_IMAGE', "Afbeelding");
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Klik op een karakter om alle bedrijven te laten zien met dat eerste karakter. Zodra u een lijst van verhuurobjecten hebt, kunt u commissiepercentages toewijzen aan deze verhuurobjecten, of klikken op het 'bewerken' icoon om de bedrijfsstatistieken te bekijken. ");
jr_define('_JRPORTAL_TAX_RATE_EDIT', "Wijzigen BTW tarief ");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Aangepaste veld bewerken ");
jr_define('_JOMRES_LICENSESERVER_PASSWORD', "Licentie server wachtwoord ");
jr_define('_JOMRES_LICENSESERVER_USERNAME', "Gebruikersnaam van de licentieserver ");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', "Als u een gebruikersnaam en wachtwoord op de licentieserver hebt, kunt u ze hier invoeren. Dit helpt u om toegang te krijgen tot de plugins die waar u recht op heeft. Als u een geldige licentiecode hebt ingevoerd in het bovenstaande veld, is het hier niet nodig om hier de gebruikersnaam / wachtwoord in te geven. ");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "Deze Jomres versie: ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Laatste Jomres versie ");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', "Waarschuwing: Er is een nieuwe versie van Jomres beschikbaar, u wordt aangeraden om u zo snel mogelijk te upgraden. ");
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welkom bij Jomres. Het Core-systeem is gratis, maar het kan worden verbeterd door de installatie van plugins. Om toegang te krijgen tot die plugins heb je een download- en ondersteuningslicentie nodig. Als u een Jomres Starter-, Business- of Enterprise-licentie wilt kopen, <a href="http://www.jomres.net/prices" target="_blank"> bezoek ons ​​onze website </a> voor informatie over hoe u kunt upgraden. ');
jr_define('_JOMRES_PRODUCT_INFORMATION2', "Dit systeem is ideaal voor elk scenario, of het nu een simpel boekingsformulier is voor een verhuurobject, tot een site die meerdere gebruikers heeft, in meerdere talen, met meerdere verhuurobjecten. Zie alstublieft het gedeelte 'Help' in het menu, inclusief de pagina 'Aan de slag' die u door uw eerste stappen begeleidt. ");
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Actief verhuurobject");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Email instellingen");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Stel deze optie in op Ja om alternatieve SMTP-instellingen te gebruiken. Een toenemend aantal webhosts lijken de PHP-mailfunctionaliteit te blokkeren, dus u kunt ervoor kiezen om de mailinstellingen die Jomres van uw host CMS (typisch Joomla) accepteert, over te nemen en te gebruiken. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternatieve host ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Verander dit naar uw smtp mail server ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternatieve poort ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Verander dit naar uw smtp poort ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternatief protocol ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Afhankelijk van uw smtp-serverinstellingen, moet u deze leeg laten of 'ssl' of 'tls' invoeren. Vraag uw SMTP-provider als u het niet weet. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Gebruik authenticatie ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "Als uw SMTP-server vereist dat klanten inloggen, stel deze in op Ja. De gebruikersnaam en het wachtwoord worden dan gebruikt. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternatieve gebruikersnaam ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternatief Wachtwoord ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "");
jr_define('_JOMRES_QUICK_INFO', "Kort overzicht");
jr_define('_JOMRES_MENU_SHOW', "Tonen");
jr_define('_JOMRES_MENU_HIDE', "Verbergen");
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Gebruikers met admin rechten op dit verhuurobject ");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', "Uw e-mailadres");
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', "Model");
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', "Parameters");
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', "Forceren");
jr_define('_JOMRES_METATITLE', "Meta titel ");
jr_define('_JOMRES_METADESCRIPTION', "Meta omschrijving");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Voeg uw verhuurobject toe: Stap 2 van 2 ");
jr_define('_JOMRES_CART_TITLE', "Mijn voorgestelde boekingen ");
jr_define('_JOMRES_CART_INFO', "Let op, deze boekingen zijn nog niet opgeslagen. Als u uitlogt of uw sessie verloopt, zullen ze verloren gaan. Vergeet niet uw boekingen te bevestigen! ");
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', "Bevestig boeking(en) ");
jr_define('_JOMRES_CART_OR', "of");
jr_define('_JOMRES_CART_SAVEFORLATER', "Bewaar voor later");
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', "U heeft nog geen boekingen opgeslagen.");
jr_define('_JOMRES_CART_VIEWCART', "Bekijk winkelwagen");
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', "Taalbestand subdirectory");
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', "Standaard breedtegraad startpunt");
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', "Standaard lengtegraad startpunt ");
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', "In de Google-map op de pagina voor het bewerken van het verhuurobject, voordat de markering is verplaatst, Wat moeten de standaard startpunten voor breedtegraad/lengtegraad zijn? ");
jr_define('_JOMRES_SYSTEM_EMAILS', "E-mails verzonden vanuit welk adres? ");
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Laat deze optie leeg om het uit te schakelen. Jomres zal de e-mailadres(en) van het hotel gebruiken bij het versturen van e-mails aan gasten, maar uw e-maildienst mag e-mails geen willekeurige adressen toestaan ​​(dat wil zeggen dat ze alleen e-mails van een geautoriseerd adres kunnen toestaan). Als dit het geval is, dan kunt u deze invoer gebruiken om een ​​adres in te voeren die wordt gezien als het FROM-adres voor alle systeem e-mails. ");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Lijstweergave");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Fotoweergave ");
jr_define('_JOMRES_COMPARE', "Vergelijken");
jr_define('_JOMRES_REMOVE', "Verwijderen");
jr_define('_JOMRES_RETURN_TO_RESULTS', "Ga terug naar zoekresultaten ");
jr_define('_JOMRES_ADDTOSHORTLIST', "Toevoegen aan favorieten");
jr_define('_JOMRES_REMOVEFROMSHORTLIST', "Verwijder uit favorieten ");
jr_define('_JOMRES_VIEWSHORTLIST', "Bekijk je favorieten ");
jr_define('_JOMRES_COOKIEPOLICY_1', "Belangrijk: Cookiebeleid ");
jr_define('_JOMRES_COOKIEPOLICY_2', "We gebruiken cookies om te helpen onze site relevant en makkelijk te gebruiken. ");
jr_define('_JOMRES_COOKIEPOLICY_3', "Lees verder...");
jr_define('_JOMRES_COOKIEPOLICY_4', "EU-wetgeving vereist dat alle websites duidelijk opgeven of cookies gebruikt worden en wat hun doel is. ");
jr_define('_JOMRES_COOKIEPOLICY_5', "De zoek- en boekingsmachine van deze site moet in staat zijn om de opties te onthouden die u hebt gekozen om het best te kunnen werken. Om dit te kunnen doen moet u informatie opslaan die verband houdt met een klein bestand genaamd een cookie die uw browser uniek identificeert, en voor ons zodat u het erover eens bent dat we dat kunnen. Als u dit cookiebeleid niet accepteert, zult u zwaar worden beperkt in wat u op deze site kunt doen. ");
jr_define('_JOMRES_COOKIEPOLICY_6', "Ja, ik accepteer het gebruik van cookies op deze manier. ");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', "Vereiste aanbetaling zijn de kosten van de eerste nacht? ");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', "Prijzen worden berekend per nacht. Wilt u dat de aanbetaling gelijk is aan één nacht? In dat geval kunt u de volgende opties negeren. ");
jr_define('_JOMRES_NOTHINGINSHORTLIST', "U heeft geen verhuurobjecten toegevoegd aan uw favorieten.");
jr_define('_JOMRES_SAFEMODE', "Schakel de veilige modus in? ");
jr_define('_JOMRES_SAFEMODE_DESC', "Stel dit in op Ja om de veilige modus te activeren. Dit zal alle plugins uitschakelen, zodat Jomres alleen de kernfunctionaliteit zal gebruiken. ");
jr_define('_JOMRES_PRICE_ON_APPLICATION', "POA");
jr_define('COMMON_NEXT', "Volgende");
jr_define('COMMON_CANCEL', "Annuleren");
jr_define('COMMON_SUBMIT', "Versturen");
jr_define('COMMON_SAVE', "Opslaan");
jr_define('COMMON_DELETE', "Verwijderen");
jr_define('COMMON_RETURN', "Terug");
jr_define('COMMON_CLOSE', "Sluiten");
jr_define('COMMON_BACK', "Terug");
jr_define('COMMON_HOME', "Home");
jr_define('COMMON_NEW', "Nieuw");
jr_define('COMMON_SEND', "Versturen");
jr_define('RECAPTCHA_TITLE', "reCaptcha");
jr_define('RECAPTCHA_INFO', 'Captcha is erop gericht om te controleren of de klant een mens is, en wordt gebruikt om te voorkomen dat verhuurobject beheerders door robots op het internet worden "gespammed". Om het contactformulier in Jomres te gebruiken, moet u zich registreren op de <a href="http://www.google.com/recaptcha" target="_blank"> homepage Google reCaptcha </a> en uw domein instellen om uw publieke en privé-sleutels te ontvangen. Als u die sleutels hebt ontvangen, vul ze hieronder in. De reCapcha-service is een gratis dienst van Google. ');
jr_define('RECAPTCHA_PUBLIC_KEY', "Publieke sleutel");
jr_define('RECAPTCHA_PRIVATE_KEY', "Privé sleutel ");
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile time-out ");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "Om het gevaar van dubbele boekingen te voorkomen, gebruikt Jomres een lockfile om te voorkomen dat een kamer wordt toegevoegd aan de beschikbare kamerslijst in het reserveringsformulier als iemand anders de kamer al op dezelfde datum heeft toegevoegd. Standaard wordt dit slot in 3600 seconden of een uur uitgeschakeld. U kunt de tijd wijzigen die nodig is om dit slot te verlopen door deze waarde te wijzigen. ");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Jomres 'Bootstrap sjablonen en functionaliteit inschakelen? ");
jr_define('COMMON_ACTION', "Actie");
jr_define('COMMON_VIEW', "Bekijken");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Zwak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Sterk");
jr_define('_JOMRES_INPUTFILTERING', "Input filtering ");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering niveau ");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "De meeste gegevens die in het systeem zijn ingevoerd, worden gereinigd door eerst HTML-tags te verwijderen en vervolgens gebruik te maken van de variabele filterfuncties van PHP om de gegevens veilig te maken voordat ze in de database worden ingevoerd. U kunt bepaalde invoer (bijvoorbeeld de tekstinvoer op de pagina met verhuurobjectgegevens) toestaan ​​om HTML te bevatten. Er zijn twee niveaus van filtering die u kunt gebruiken om deze invoer te filteren, ofwel Zwak of Sterk. U mag alleen de Zwakke instelling gebruiken als de gebruiker (en) die de gegevens invoert, vertrouwd zijn door uzelf, b.v. collega systeembeheerders, anders moet u het op sterk zetten. Wanneer ingesteld op sterk (aanbevolen) kunt u nog steeds opgeven welke tags u toelaat door de volgende instelling te wijzigen 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Toegestane invoer labels ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "U kunt de tags bewerken die de html-purifier door het filtersysteem toelaat. De standaardwaarde is 'p,b,strong,a[href],i' (d.w.z. paragraaf, vet, sterk, links en cursief). Voor meer informatie over toegelaten tags, lees de documentatie van HTML purifier op <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Hoewel u deze instelling kunt wijzigen, wordt u geadviseerd om deze op de standaard te laten staan. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Toegestane invoer");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "U kunt definiëren welke formulierinvoer html toestaat door deze optie te bewerken. Elke invoer die in deze lijst wordt toegevoegd, wordt door HTML Purifier geparseerd in plaats van alle html gestript te hebben. Standaard is: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Voeg meer ingangen toe door ze toe te voegen van namen, gescheiden door een spatie. ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Verhuurobject gegevens in tabbladen? ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Stel deze optie in om de verhuurobjectgegevens in tabbladen weer te geven. Zet het op nee om ze zonder tabbladen te tonen. ");
jr_define('COMMON_PRINT', "Afdrukken");
jr_define('COMMON_EDIT', "Bewerken");
jr_define('COMMON_COPY', "Kopiëren");
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Jomres is ontworpen om te werken in zowel de Bootstrap 2 of Bootstrap 3 frameworks. Zodra u een thema of sjabloon BS2 of BS3 hebt geïnstalleerd, stelt u deze schakelaar in om te kiezen met welke smaak Bootstrap u wilt werken met Jomres. ");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Gebruik Jomres Bootstrap sjablonen in het frontend? ");
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Hier zijn enkele alternatieven die u wellicht wilt overwegen. ");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Detecteer gastenland automatisch? ");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Het systeem probeert automatisch het land van de gast te detecteren als ze niet eerder hebben geboekt. U kunt deze optie instellen op Nee, en vervolgens het land te definieren wat u in het boekingsformulier wilt weergeven, dit kan in de volgende optie. ");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', "Over Jomres ");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', "Help");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', "Beginnen");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', "ontwikkelaars gereedschap");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', "Talen");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', "inkomsten genereren");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', "site structuur ");
jr_define('_JOMRES_CUSTOMCODE_MANUAL', "Handleiding (online) ");
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', "Mijn gegevens (online) ");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', "portaal functionaliteit ");
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', "Plugin manager ");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', "integraties");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', "rapporten/statistieken");
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', "Updates");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', "Betaalmethoden");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', "Standaard tarief");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', "Dit geldt alleen voor nieuwe tarieven ");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', "Jaren om te laten zien ");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', "Definieert het aantal jaren dat moet worden weergegeven bij het bewerken van een tarieftype ");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', "facturen");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', "Account");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Inloggen");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Uitloggen");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "zoeken");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', "dashboard");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', "reserveren");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', "instellingen");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', "diversen");
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', "Bewerk land ");
jr_define('_JOMRES_EDIT_COUNTRY_ID', "Land id ");
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', "Landcode");
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', "Naam van het land");
jr_define('_JOMRES_EDIT_REGION_TITLE', "Bewerk regio ");
jr_define('_JOMRES_EDIT_REGION_ID', "Regio id ");
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', "Landcode");
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', "Regio naam ");
jr_define('_JOMRES_COM_LISTCOUNTRIES', "Lijst landen ");
jr_define('_JOMRES_COM_LISTREGIONS', "Lijstregio's ");
jr_define('_JOMRES_EXPORT_DEFINITIONS', "Export definities ");
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', "Met deze functie kunt u vertalingen exporteren die zijn opgebouwd met behulp van de functie Taalvertaling. Het zal een tekstveld opbouwen met alle gegevens die nodig zijn om een ​​nieuw taalbestand te bouwen. Alles wat u hoeft te doen is, kopieer en plak deze uitvoer in een nieuw taalbestand dat u op een nieuwe Jomres-gebaseerde server kunt plaatsen of als u wilt bijdragen aan de Jomres gemeenschap. ");
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', "Vertaal locales ");
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', "Vertaal lang file strings ");
jr_define('_JOMRES_COM_NOTAMANAGER', "Fout, de gebruiker waar u mee bent aangemeld is geen supermanager binnen Jomres, kunt u deze functie niet gebruiken totdat u de verhuurobject beheerfuncties hebt gebruikt om uzelf zowel manager als supermanager te maken. Dit is een beveiligingsfunctie. ");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', "Verhuurobject lijst standaard layout ");
jr_define('_JOMRES_STAYFORAMINIMUMOF', "Minimaal verblijf van ");
jr_define('_JOMRES_NIGHTSFOR', " nachten voor ");
jr_define('_JOMRES_AGENT', "Agent");
jr_define('_JOMRES_AGENT_DETAILS', "Agent details ");
jr_define('_JOMRES_AGENT_LISTINGS', "Agent's vermeldingen ");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', "Nieuwe verhuurobjecten automatisch goedkeuren ");
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', "Als u deze optie op Nee instelt, moet u nieuwe verhuurobjecten handmatig goedkeuren. Totdat een object is goedgekeurd, kan het niet door een Manager/ Super Manager worden gepubliceerd. ");
jr_define('_JOMRES_APPROVALS_MENU_NAME', "-beleid");
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', "Deze verhuurobject is nog niet goedgekeurd. Zodra het goedgekeurd is, kunt u het publiceren. ");
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', "Sorry, u kunt dit verhuurobject niet publiceren aangezien het nog niet is goedgekeurd. ");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', "Een nieuw verhuurobject vereist goedkeuring ");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "Er is een verhuurobject toegevoegd aan het systeem dat uw goedkeuring vereist. Klik op de link om de verhuurobjecten te zien die in de keuzelijst wachten: ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', "Uw verhuurobject is goedgekeurd ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Gefeliciteerd, uw verhuurobject is goedgekeurd, klik op de volgende link om het verhuurobject paneel te bekijken: ");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', "Regio namen zijn vertaalbaar ");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Tenzij u een zeer snelle server hebt, wordt u geadviseerd dit uit te laten. Door het grote aantal regio namen neemt de vertaling van de regionaam veel geheugen op, waardoor uw zoekresultaten kunnen worden vertraagd. ");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', "Gast heeft uitgechecked. ");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', "Sorry, dat e-mailadres is al in gebruik. Als dit uw e-mailadres is, zorg er dan voor dat u ingelogd bent voordat u probeert te boeken. ");
jr_define('JOMRES_TAPTOCALL', "Tik om te bellen ");
jr_define('JOMRES_NEWREVIEW_SUBJECT', "Nieuwe review voor ");
jr_define('JOMRES_NEWREVIEW_MESSAGE', "Er is een nieuwe review achtergelaten voor ");
jr_define('JOMRES_NEWREPORT_SUBJECT', "Nieuw rapport");
jr_define('JOMRES_NEWREPORT_MESSAGE', "Er is een review gemeld voor ");
jr_define('JOMRES_SUPERIOR', "Superieur");
jr_define('JOMRES_GRANDTOTAL_EX_TAX', "Totaal (excl. BTW): ");
jr_define('JOMRES_GRANDTOTAL_INC_TAX', "Totaal (incl. BTW): ");
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', "Totaal BTW: ");
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', "Type de twee woorden: ");
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', "Voer in wat je hoort: ");
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', "Herhaal het audiofragment ");
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', "Download het fragment in MP3-formaat ");
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', "Visuele modus ");
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', "Audio modus ");
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', "Vernieuwen ");
jr_define('JOMRES_RECAPTCHA_HELP_BTN', "Help");
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', "Sorry, dat was onjuist. Probeer het opnieuw. ");
jr_define('JOMRES_GOOGLE_MAPS', "Google-kaart opties ");
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', "Gebruik transit layer? ");
jr_define('JOMRES_GOOGLE_MAPS_POIS', "Activeer Gmap Points of Interest (inclusief eventuele concurrenten)? ");
jr_define('_JOMRES_METAKEYWORDS', "Meta keywords ");
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', "Scan deze code in uw telefoon om een routebeschrijving naar ons toe te krijgen. ");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Het BTW-nummer dat u heeft ingevoerd, lijkt niet juist te zijn. Je zou zoiets moeten hebben: NL805670816B01 ");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', "Ongeldig BTW-nummer. Controleer alstublieft de geldigheid van uw btw-nummer met de Europa BTW-validatie webservice (VIES) ");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', "Hartelijk gefeliciteerd. We hebben uw btw-nummer kunnen valideren. ");
jr_define('_JOMRES_TAX_RULES_LIST', "Lijst fiscale regels ");
jr_define('_JOMRES_TAX_RULE', "Belastingregel ");
jr_define('_JOMRES_TAX_RULE_INFO', "Belastingregels worden gebruikt om verschillende fiscale regels vast te stellen voor verschillende regio's. Deze fiscale regels hebben invloed op de persoon die de boeking maakt, als ze zijn geregistreerd, ingelogd zijn en hun account hebben bewerkt met de pagina 'bewerken mijn account'. Het doel van deze regels is om boekhouders in de gebieden die vrijgesteld zijn van btw te vinden, kunt u vinden dat u niet veel regels hoeft aan te maken, indien wel. ");
jr_define('_JOMRES_TAX_RATES_IMPORT', "Belastingtarieven invoeren ");
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', "Wij kunnen de belastingtarieven voor de EU voor u invoeren, indien u dat wenst. Opmerking, als u deze functie gebruikt, worden al uw bestaande belastingtarieven verwijderd. ");
jr_define('_JRPORTAL_TAX_RULE_EDIT', "Bewerk belastingregel ");
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', "Het btw nummer voor deze woning. ");
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', "Vul het btw-nummer in voor dit verhuurobject. ");
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', "BTW-nummer gevalideerd. ");
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', "BTW nummer niet gevalideerd. ");
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', "Bedrijfsgegevens die hier worden ingevoerd, worden gebruikt op commissies en abonnementsfacturen. ");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "U lijkt uw accountgegevens nog niet ingevuld. Om uw woning op de site te vermelden, hebben we u nodig om uw accountgegevens te voltooien voordat we verder kunnen gaan. ");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', "Productie of Ontwikkeling? ");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', "Als u deze optie voor ontwikkeling instelt, zullen we foutrapportages inschakelen, anders zal de productie uitgeschakeld worden als de productie is ingesteld. Als dit een live server is, raden wij u aan deze optie aan te passen aan 'productie'. ");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', "Productie");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', "Ontwikkeling");
//v7.3.3', "
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', "Kamer details ");
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', "Tarief details ");
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', "Voor");
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', "na!");
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', "Kamer kenmerk");
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', "Kan kamerkenmerk niet verwijderen, het is toegewezen aan een kamer. Verwijder het kenmerk van deze kamer en probeer het opnieuw. ");
// v7.4', "
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', "Media Center ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', "Voeg afbeeldingen toe ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', "Kamer afbeeldingen ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', "Verhuurobject hoofdafbeelding ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', "Slideshow afbeeldingen ");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', "Maak lijst leeg");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', "Versleep files hier naartoe ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', "Kies de kamer waarvoor u abfeeldingen wilt uploaden. Als u afbeeldingen voor individuele kamers wilt uploaden (bijvoorbeeld kamers), krijgt u een tweede dropdown om de specifieke kamer te kiezen. ");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', "Als u meerdere afbeeldingen uploadt als de 'Hoofdafbeeldinmg', worden deze in de verhuurobjectlijst gebruikt. Diashowbeelden worden weergegeven op de pagina met verhuurobjectgegevens. ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', "Bekijk je afbeelding ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', "Verwijder afbeelding ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', "Afbeelding uploaden");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', "Pictogrammen voor kamertypen ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', "Verhuurobject kenmerk iconen ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', "Upload alle bestanden ");
//8.0', "
jr_define('COMMON_PREV', "Vorige ");
jr_define('COMMON_MORE', "Meer");
jr_define('_JOMRES_DASHBOARD_TODAY', "Vandaag");
jr_define('_JOMRES_DASHBOARD_YEAR', "Jaar");
jr_define('_JOMRES_DASHBOARD_MONTH', "Maand");
jr_define('_JOMRES_DASHBOARD_WEEK', "Week");
jr_define('_JOMRES_DASHBOARD_DAY', "Dag");
jr_define('_JOMRES_HLEGEND', "Legenda");
jr_define('_JOMRES_HFILTER', "Filter");
jr_define('_JOMRES_HFROM', "Van");
jr_define('_JOMRES_HTO', "Tot");
jr_define('_JOMRES_HNEW_BOOKING', "Nieuwe boeking ");
jr_define('_JOMRES_HSTATUS_DEPOSIT', "Status van aanbetaling");
jr_define('_JOMRES_HSTATUS_GUEST', "Gast status ");
jr_define('_JOMRES_HSTATUS_BOOKING', "Boekings status ");
jr_define('_JOMRES_HSTATUS_PUBLISHING', "Publicatie status ");
jr_define('_JOMRES_HSTATUS_INVOICE', "Factuur status ");
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', "Factuur type ");
jr_define('_JOMRES_HSTATUS_APPROVED', "Goedgekeurd ");
jr_define('_JOMRES_HSTATUS_CURRENT', "Huidig ​​bedrijf ");
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', "Toon boekingen voor ");
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', "Toon facturen voor ");
jr_define('_JOMRES_STATUS_ANY', "Ieder");
jr_define('_JOMRES_STATUS_PAID', "Betaald");
jr_define('_JOMRES_STATUS_NOTPAID', "Niet betaald");
jr_define('_JOMRES_STATUS_CHECKEDOUT', "Uitgechecked");
jr_define('_JOMRES_STATUS_ACTIVE', "Actief");
jr_define('_JOMRES_STATUS_CANCELLED', "Geannuleerd");
jr_define('_JOMRES_STATUS_PUBLISHED', "Gepubliceerd ");
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', "Niet gepubliceerd");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', "Gasten met actieve boekingen ");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', "Gasten met historische boekingen ");
jr_define('_JOMRES_STATUS_BOOKINGS', "Boekingen");
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', "Abonnementen");
jr_define('_JOMRES_STATUS_COMMISSIONS', "Commissies");
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', "Al mijn bedrijven ");
jr_define('_JOMRES_ACTION_SET_CURRENT', "Zet als huidig");
jr_define('_JOMRES_ACTION_CHECKIN', "Inchecken");
jr_define('_JOMRES_ACTION_CHECKOUT', "Uitchecken");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', "reserveringen");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', "verhuurobjecten");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', "gasten");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', "rapporten");
jr_define('_JOMRES_HLIST_GUESTS', "Gasten");
jr_define('_JOMRES_HLIST_GUESTS_MENU', "Lijst van gasten ");
jr_define('_JOMRES_HLIST_INVOICES_MENU', "Lijst van facturen ");
jr_define('_JOMRES_HLIST_PROPERTIES', "Verhuurobjecten");
jr_define('_JOMRES_HQUICK_BOOKING', "Snelle boeking ");
jr_define('_JOMRES_HDATE_OF_BOOKING', "Datum van boeking ");
jr_define('_JOMRES_HTWO_WEEKS', "Twee weken");
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', "Deze reservering wordt geannuleerd. Druk op OK om de reservering te annuleren. ");
jr_define('_JOMRES_HOVERVIEW_CHECKINS', "Checkins van vandaag");
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', "Checkouts van vandaag");
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', "Huidige gasten");
jr_define('_JOMRES_BOOTSTRAP_LOCATION', "Locatie navigatiebalk");
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', "Standaard (Content area)");
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', "Bovenaan vastzetten");
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', "Onderaan vastzetten");
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', "Omgekeerde navigatiebalk (kleurverandering)");
jr_define('_JOMRES_BOOKING_NUMBER', "Boekingsnummer");
jr_define('_JOMRES_BOOTSTRAP_VERSION', "Bootstrap versie ");
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Momenteel geldt dit alleen voor het frontend. Met deze optie kunt u kiezen of Jomres-sjablonen die compatibel zijn met Bootstrap 2 of Bootstrap 3 al dan niet gebruiken. Tenzij u zeker weet dat uw sjabloon werkt met Bootstrap 3, raden wij u aan deze set aan Bootstrap 2. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', "Toon gasten voor ");
jr_define('_JOMRES_HFIXED_PERIODS', "Vaste perioden ");
jr_define('_JOMRES_HDEPOSITS', "Aanbetaling");
jr_define('_JOMRES_HBOOKING_FORM', "Boekingsformulier");
jr_define('_JOMRES_HREQUIRED_FIELDS', "Verplichte velden");
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', "Jan");
jr_define('COMMON_PLACEHOLDER_SURNAME', "Jansen");
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', "110");
jr_define('COMMON_PLACEHOLDER_STREET', "Straatnaam");
jr_define('COMMON_PLACEHOLDER_TOWN', "Stad");
jr_define('COMMON_PLACEHOLDER_LANDLINE', "00000 000000 ");
jr_define('COMMON_PLACEHOLDER_MOBILE', "00000 000000 ");
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', "Mijn hotel");
jr_define('COMMON_PLACEHOLDER_POSTCODE', "XXXXNN");
jr_define('COMMON_PLACEHOLDER_EMAIL', "example@address.com");
jr_define('_JOMRES_HRESOURCE_FEATURES', "Kamer kenmerken ");
jr_define('_JOMRES_HRESOURCE_TYPE', "Kamertype");
jr_define('_JOMRES_HEDIT_GUEST_TYPE', "Bewerk type gast ");
jr_define('_JOMRES_HEDIT_COUPON', "Bewerk coupon ");
jr_define('_JOMRES_HEDIT_EXTRA', "Bewerk extra ");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', "Maak meerdere kamers ");
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', "Kamers genereren ");
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', "Hoeveel kamers?");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', "Kamertypen");
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', "Max gasten per kamer ");
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', "Verwijder alle bestaande kamers? ");
jr_define('DATATABLES_SINFO', "Toont _START_ tot _EIND_ van _TOTAAL_ vermeldingen ");
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', "Goedkeuring");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', "Weigeren boekingsaanvraag ");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', "Goedkeuren boekingsaanvraag ");
jr_define('_JOMRES_STATUS_APPROVED', "Goedgekeurd ");
jr_define('_JOMRES_STATUS_REJECTED', "Geweigerd");
jr_define('_JOMRES_STATUS_INQUIRY', "Aanvraag");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', "Boekingen vereisen goedkeuring of beschikbaarheidbevestiging? ");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "Indien ja, wanneer een boeking is gemaakt, verschijnt het niet automatisch op de beschikbaarheidskalenders (en andere gasten kunnen deze dagen en bronnen nog reserveren) totdat de verhuurmanager de beschikbaarheid voor de boeking accepteert/bevestigt. Na bevestiging wordt de reservering als voorlopig ingevoerd (als andere boekingen niet worden overschreden, andere gasten kunnen dezelfde data niet meer boeken) en er wordt een email naar de klant gestuurd om de betaling te doen. ");
jr_define('_JOMRES_ERROR', "Fout");
jr_define('_JOMRES_ERROR_MESSAGE', "Sorry! Er is een fout opgetreden tijdens het uitvoeren van deze functie. Het is gerapporteerd en we zullen er naar kijken. ");
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', "Message");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', "File");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', "Line");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', "Trace");
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', "Email sjablonen");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', "Email sjabloon bewerken ");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', "Email onderwerp");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', "Email tekst");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', "Email type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', "Email naam");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', "E-mail beschrijving");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Zie deze pagina voor hulp om de e-mailberichten aan te passen en een lijst met beschikbare uitvoeringen: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254- email-templates "target =" _ blank "> Help met e-mailsjablonen </a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', "Site Administrator Nieuwe Boekings Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', "Email sturen naar de site admin wanneer een nieuwe boeking is gemaakt en als de globale Paypal gateway is ingeschakeld ");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', "Hotel Nieuwe Boekings Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', "Email verzonden aan verhuurobject eigenaar wanneer een nieuwe boeking is gemaakt ");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', "Gast Nieuw Reserverings Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', "Email verzonden naar de gast wanneer een nieuwe boeking is gemaakt ");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', "Gastbevestigingsbrief");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', "Printbare brief of e-mail die handmatig door de eigenaar kan worden verzonden om een ​​boeking te bevestigen ");
jr_define('_JOMRES_CAN_BE_APPROVED', "Deze boeking kan worden goedgekeurd. Alle geselecteerde kamers zijn beschikbaar voor de geselecteerde data. ");
jr_define('_JOMRES_CANT_BE_APPROVED', "Deze reservering kan niet worden goedgekeurd omdat sommige kamers al voor de geselecteerde data zijn geboekt. U moet de reservering eerst wijzigen. ");
jr_define('_JOMRES_SHOW_POWEREDBY', "Toon de Powered by Jomres link in de Jomres footer. ");
jr_define('GUEST_BUDGET', "Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH', "Gebruik Budget functie? ");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Alleen bootstrapped sites! De functie Budget is een optie in de verhuurobjectlijst die een gast kan gebruiken om voor hun verhuurobjecten te markeren waarvan de prijs per nacht onder een bepaald bedrag is. De functie heeft een aantal beperkingen, omdat het misschien niet geschikt is voor sommige sites die veel verschillende valuta's gebruiken. Opmerking, als u dit gebruikt en ook de featured listings plug-in, wordt uw bijbehorende wrapping class automatisch veranderd in 'panel-primary' wanneer de verhuurobjectenlijst wordt weergegeven. ");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', "Naam: ");
jr_define('_JOMRES_FOR', "Voor");
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', "nacht");
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', "overnachtingen");
jr_define('_JOMRES_LIVE_SCROLLING', "Gebruik Live Scrolling / Infinate Scrolling in verhuurobjectenlijst? ");
jr_define('_JRPORTAL_MONTHS_SHORT_0', "Jan");
jr_define('_JRPORTAL_MONTHS_SHORT_1', "Feb");
jr_define('_JRPORTAL_MONTHS_SHORT_2', "Mar");
jr_define('_JRPORTAL_MONTHS_SHORT_3', "Apr");
jr_define('_JRPORTAL_MONTHS_SHORT_4', "Mei");
jr_define('_JRPORTAL_MONTHS_SHORT_5', "Jun");
jr_define('_JRPORTAL_MONTHS_SHORT_6', "Jul");
jr_define('_JRPORTAL_MONTHS_SHORT_7', "Aug");
jr_define('_JRPORTAL_MONTHS_SHORT_8', "Sep");
jr_define('_JRPORTAL_MONTHS_SHORT_9', "Okt");
jr_define('_JRPORTAL_MONTHS_SHORT_10', "Nov");
jr_define('_JRPORTAL_MONTHS_SHORT_11', "Dec");
jr_define('DATATABLES_SEMPTYTABLE', "Geen data beschikbaar in de tabel");
jr_define('DATATABLES_SINFO', "Toont _START_ tot _EIND_ van _TOTAAL_ vermeldingen ");
jr_define('DATATABLES_SINFOEMPTY', "Weergeven 0 tot 0 van 0 vermeldingenm ");
jr_define('DATATABLES_SINFOFILTERED', "(gefilterd uit _MAX_ totale vermeldingen) ");
jr_define('DATATABLES_SINFOPOSTFIX', "");
jr_define('DATATABLES_SINFOTHOUSANDS', ", ");
jr_define('DATATABLES_SLENGTHMENU', "Toon _MENU_ vermeldingen ");
jr_define('DATATABLES_SLOADINGRECORDS', "Laden... ");
jr_define('DATATABLES_SPROCESSING', "Verwerken...");
jr_define('DATATABLES_SSEARCH', "Zoeken:");
jr_define('DATATABLES_SZERORECORDS', "Geen overeenkomende records gevonden ");
jr_define('DATATABLES_SFIRST', "Eerste");
jr_define('DATATABLES_SLAST', "Laatste");
jr_define('DATATABLES_SNEXT', "Volgende");
jr_define('DATATABLES_SPREVIOUS', "Vorige");
jr_define('DATATABLES_SSORTASCENDING', ": activeer om de kolom oplopend te sorteren");
jr_define('DATATABLES_SSORTDESCENDING', ": activeer om de kolom aflopen te sorteren");
jr_define('DATATABLES_SHOWHIDE', "Kolommen wijzigen");
jr_define('_BOOKING_ONREQUEST', "Reserveren op aanvraag");
jr_define('_BOOKING_INSTANT', "Meteen Boeken");
jr_define('_JOMRES_COM_FONTAWESOME', "Inclusief Font Awesome icon set?");
jr_define('_JOMRES_COM_FONTAWESOME_DESC', "Stel dit in op Ja als je joomla template geen Font Awesome bevat.");
jr_define('_BOOKING_CALCQUOTE', "Aanvraag reservering");
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', "Geachte");
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', "Selecteer een site");
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', "Site ID");
jr_define('_JOMRES_IS_EU_COUNTRY', "EU-land?");
jr_define('_JOMRES_HLASTCHANGED', "Laatst gewijzigd");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', "Hotel Reservering Annulerings Email");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', "Email naar de eigenaar sturen wanneer een nieuwe boeking is geannuleerd");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', "Gast Reserverings Annulerings Email ");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', "Email verzonden naar de gast wanneer een nieuwe boeking is geannuleerd");
jr_define('_JOMRES_TEST_EMAIL_SEND', "Stuur test email");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', "Test email");
jr_define('_JOMRES_TEST_EMAIL_CONTENT', "Dit is een test email van uw boekingssysteem.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', "Test email succesvol verzonden");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', "Test email is niet verzonden");
jr_define('_INVOICE_TRANSACTIONS', "Transacties");
jr_define('_OPENEXCHANGE_API', "Open Exchange Rates API sleutel openen ");
jr_define('_OPENEXCHANGE_API_DESC', 'Om prijzen tussen diensten te converteren heeft u een API voor Open Exchange Rates API nodig. U moet een API-sleutel hebben om de prijzen correct in Jomres te tonen, maar u kunt <a href="https://openexchangerates.org/signup/free" _target="_blank"> registreren voor een gratis sleutel </a> (per uur updates, 1000 verzoeken / maand - geen HTTPS, e-mail ondersteuning of geavanceerde functies). Jomres downloadt de wisselkoersen een keer per dag, zolang u de sleutel op slechts een handvol sites gebruikt, bent u waarschijnlijk niet groter dan deze limieten. Vorig voor Jomres 8.3 hebben we een oudere, ongedocumenteerde Yahoo-functie gebruikt, maar hebben ontdekt dat het gebruik van deze functie in strijd is met de voorwaarden van Yahoo. Als gevolg hiervan moeten we ervan uitgaan dat de functie op een bepaald moment in de toekomst verdwijnt, dus de wijziging in het gebruik van Open Exchange Rates. ');
jr_define('_JOMRES_COMMISSION', "Commissie");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', "Als u meerdere afbeeldingen uploadt voor losse services, wordt alleen de eerste afbeelding gebruikt.");
jr_define('_JRPORTAL_INVOICES_PAYNOW', "Nu betalen");
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', "Deze factuur moet nu in rekening worden gebracht. Klik op de knop om de betaalmethode te selecteren.");
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Hier is een overzicht van enkele services die u kunt afnemen bij het maken van een boeking bij deze accommodatie.");
jr_define('GATEWAYS_INSTRUCTIONS', "Op deze pagina kunt u alle geïnstalleerde gateways configureren. Met deze opties kunt u betalingen ontvangen voor eventuele facturen van commissies of abonnementen. Frontend instellingen kunnen alleen door Paypal worden overschreven, alle andere gateways moeten worden geconfigureerd via het tabblad Property Configuration -> Gateways, maar als er een gateway in deze lijst voorkomt, moet het zowel de betaling van de aanbetalingen als de factuurbetalingen kunnen verwerken. ");
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', "Toon in verhuurobject details pagina? ");
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', "Verhuurobject gegevens pagina instellingen");
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', "Beheer van verhuurobjecten kan uitsluitend vanuit het frontend uitgevoerd worden. Op deze pagina kunt u alle verhuurobjecten in het systeem in een lijst zetten, zodat u commissietarieven kunt toewijzen en dezegoedkeuren/niet goedkeuren (als deze functies zijn ingeschakeld). Om een ​​nieuw verhuurobject te maken, bestaande bewerken, boekingen beheren of andere verhuurobject- boekingsgerelateerde taken, moet u zich aanmelden bij de site frontend en naar de standaardpagina van Jomres gaan. Daar zie je de Jomres frontend cpanel. ");
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', "Kamerkenmerk iconen ");
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', "Verhuurobject kenmerk categorieën ");
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', "Bewerk Verhuurobject kermerk categorie ");
jr_define('_JOMRES_HCATEGORY', "Categorie");
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', "Toon verhuurobject functies opgesplitst in categorieën? ");
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', "Stel dit in op JA om de kenmerken van het verhuurobject in categorieën opm te splitsen. Deze optie heeft alleen betrekking op de verhuurobject kenmerken die op de pagina met verhuurobjectgegevens worden weergegeven. Alle andere pagina's zullen ze worden weergeven zonder ze in categorieën te splitsen. ");
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', "Inchecken ongedaan");
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', "Uitchecken ongedaan maken");
jr_define('_JOMRES_STATUS_UNISSUED', "Niet uitgegeven");
jr_define('DEFAULT_TERMS_AND_CONDITIONS', "");
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', "Uw download- en ondersteuningscode is geldig, u kunt plugins downloaden via de plugin manager. ");
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', "Uw download- en ondersteuningscode is NIET geldig, u kunt GEEN plugins downloaden via de plugin manager. ");
jr_define('_JOMRES_SRP_RESOURCE_TYPE', "Subtype");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "U heeft uw verhuurobject subtype nog niet ingesteld. Hier definieert u het als een 5 slaapkamer villa of 4 slaapkamer huisje en het helpt gasten die zoeken met hun zoekopdrachten. ");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', "Geef uw woning een subtype ");
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', "Email sjablonen");
jr_define('_JOMRES_CONTACT_SETTINGS', "Contact instellingen");
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', "Van hieruit kunt u alle verhuurobject contactgegevens (e-mail, telefoon, fax) overschrijven zodat alle communicatie met de gasten naar u en niet aan de eigenaren van de woning zal worden verzonden. ");
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', "Contactpersonen overschrijven? ");
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Als deze optie is ingesteld op Ja, worden verhuurobject emailadressen en telefoonnummers vervangen door de instellingen die in dit tabblad zijn ingesteld. Dit zorgt ervoor dat alle mededelingen naar uw door u ingevulde emailadres worden verstuurd, zodat de gast en verhuurobject de boekingsengine niet kunnen omzeilen en de kosten die door de commissie ontstaan ​​zullen worden. Het betekent ook dat wanneer de omschrijving van een verhuurobject wordt gewijzigd, het verhuurobject wordt ingesteld op Niet-gecontroleerde (als de goedkeuringsfunctie is ingeschakeld) en moet u de beschrijving handmatig controleren om ervoor te zorgen dat de managers geen telefoon- of emailgegevens hebben ingevoerd in de tekst velden voordat u het opnieuw goedkeurt. ");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', "Wijzigingen die zijn aangebracht aan vereisen goedkeuring van de sitebeheerder. Als u nieuwe gegevens opslaat, wordt uw verhuurobject gedepubliceerd en in afwachting van de goedkeuring van de site admin weer zichtbaar voor bezoekers van de site. U kunt online boekingen niet ontvangen terwijl uw vermelding gedepubliceerd is en in afwachting van goedkeuring. ");
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', "Boekingsaanvraag controleren");
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', "Boekingsaanvraag bevestigen");
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', "Boekingsaanvraag wijzigen");
jr_define('_JOMRES_INVOICE_MARKASPENDING', "Markeer factuur in afwachting van betaling");
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', "Factuur gemarkeerd in afwachting van betaling");
jr_define('_JOMRES_TRACKING_ENABLE', "Verstuur anonieme tracking data? ");
jr_define('_JOMRES_TRACKING_ENABLE_DESC', "Selecteer Ja om anonieme tracking data te versturen naar Jomres.net om ons te helpen beter te begrijpen hoe u het systeem gebruikt. ");
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', "Zorg ervoor dat uw gegevens op de pagina 'Mijn account bewerken' zijn voltooid voordat u namens uw klanten een boeking maakt. ");
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "De contactgegevens van de gast");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', " -- Nieuwe gast -- ");
jr_define('_JOMRES_CHARTS', "Grafieken");
jr_define('_JOMRES_CHARTS_SELECT', "Selecteer grafiek ... ");
jr_define('_JOMRES_CHART_BOOKINGS_DESC', "Inkomen per jaar/maand ");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, laten we beginnen. Eerst moet u een aantal kamers maken voor dit verhuurobject. ");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', "Maak nu enkele kamers");
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', "Onderzoek heeft aangetoond dat verhuurobjecten met veel hoge kwaliteit afbeeldingen meer weergaven genereren. Upload een hoofdafbeelding en enkele afbeeldingen voor de diavoorstelling om je kansen te verbeteren om boekingen te krijgen. ");
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', "Upload een afbeelding");
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', "Maak een aantal tarieven");
jr_define('_JOMRES_PROPERTYTYPE_FLAG', "Wat zullen gasten boeken? ");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', "Is dit verhuurobject een hoteltype, waar u meerdere kamers verhuurd, of een villatype bezit, waar u het gehele pand in één boeking verhuurd? ");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', "Kamers in het verhuurobject");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', "Het gehele verhuurobject");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', "Beide"); // Dit is een tussentijdse instelling die achteruit compatibiliteit biedt voor bestaande gebruikers die hun eigendomsoorten nog niet hebben bijgewerkt. Het kan niet worden gekozen
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', "Wat zullen gasten boeken? ");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Je moet je adresgegevens invullen, zodat je gasten je kunnen vinden wanneer ze komen logeren. ");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', "Update uw adres");
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', "Oeps, het lijkt erop dat je misschien vergeten bent om alle velden te in te vullen. ");
jr_define('_JOMRES_CONTANT_US', "Neem contact met ons op");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', "Welkom bij uw nieuwe online weergave voor");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', "Hallo, en welkom bij uw nieuwe verhuurobject op ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "U heeft onlangs een nieuw verhuurobject toegevoegd aan onze website, en wij verwelkomen u graag bij de SchylgeRES familie.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', "Je kunt je nieuwe dashboard bekijken door hier te klikken op");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', " Dashboard ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Zodra u uw verhuurobject hebt ingesteld, kunt u zien hoe het er voor bezoekers van de site uitziet door een bezoek te brengen aan");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', " uw voorpagina. ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(het is niet gepubliceerd, zodat bezoekers niet het nog kunnen zien). ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Bovenaan de pagina ziet u een aantal berichten. De knoppen naast deze berichten leiden u naar de pagina's die u moet bezoeken om uw verhuurobject op onze site op te zetten. Zodra u elk van deze taken hebt uitgevoerd, is het veel gemakkelijker voor bezoekers op onze site om uw verhuurobject te vinden en online te reserveren. ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', "Als u nog vragen heeft, alstublieft ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', "neem dan contact met ons op");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "en we zullen al uw vragen beantwoorden. SchylgeRES is een onderdeel van SchylgeICT. Wanneer u hulp nodig heeft kunt u altijd contact opnemen met Ruud Boersma. We kunnen u op afstand heel goed helpen. En we kunnen uiteraard ook altijd even langskomen. We streven ernaar om SchylgeRES zo laagdrempelig als mogelijk te maken.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', "Al het beste, ons team bij ");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "U lijkt geen rondleidingen te hebben om te verkopen. Maak een tourprofiel aan en gebruik de knop genereren om enkele rondleidingen te maken. ");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Laten we enkele rondleidingen maken! ");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', "Verplaats valuta symbool locatie ");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', "Gebruik deze optie om het valutasymbool van achter naar voor de prijsstelling of vice versa te verplaatsen. ");
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', "Facebook ");
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Vul je Facebook-pagina-id in, bijvoorbeeld "schylgeict". Laat dit leeg om niets te tonen. Ga niet naar https://www.facebook.com of iets anders. ');
jr_define('COMMON_DOWNLOAD', "Download");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', "Vervolgens moet u enkele tarieven toevoegen. Dit zijn uw basisprijzen. ");
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', "Bootstrap is niet ingeschakeld! ");
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', "Waarschuwing, je hebt geen bootstrap ingeschakeld in de Jomres-siteconfiguratie -> Misc tabblad. Om sommige functionaliteit te bieden, gebruikt Jomres momenteel de oude, jQuery UI-gebaseerde sjablonen, maar deze zijn in enkele jaren niet meer bewerkt. Alle huidige ontwikkelingen en verbeteringen van Jomres templates (lay-out bestanden) worden gemaakt aan het Bootstrap 3 sjabloonbestanden. Om het beste uit Jomres te halen, raden wij u aan een Bootstrap 3-thema voor Wordpress of Joomla te installeren. Zodra u dat gedaan hebt kunt u Jomres \ 'Bootstrap templates inschakelen in Site Configuration.");
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', "Uw ondersteuningscode is geldig. Houd er rekening mee dat deze licentie geen downloads toelaat. ");
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', "Sleep boekingen naar dit gebied om ze te annuleren ");
jr_define('_JOMRES_LAT', "Lat (nn.nnnn) ");
jr_define('_JOMRES_LONG', "Long (nn.nnnn) ");
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Voordat u een kamertype kunt maken, moeten we weten of het voor een hoteltype of een villatype is. ");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', "Klik om nieuwe kamertypes toe te voegen ");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', "Waarschuwing, u hebt een of meerdere soorten verhuurobjecttypen zonder kamertypen. Verhuurobjecten hebben kamertypes nodig, zodat verhuurobjectmanagers tarieven kunnen opstellen. ");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', "Gebruik de nieuwe knop hierboven om nieuwe kamertypen te maken. ");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', "Tours");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', "Geen boekingen/Onroerend goed (eenvoudige vermelding) ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION', "Logbestand locatie ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', "Jomres logs systeemactiviteit standaard in de '.JOMRES_SYSTEMLOG_PATH.' Locatie. Omdat dit bestand gevoelige informatie bevat (api-keys, systeempaden, gateway-informatie, gastinformatie) raden wij u aan om dit pad te veranderen naar een boven uw webdocument root Als u dit niet begrijpt, vraag dan uw webhosts om advies, omdat zij kennis hebben van uw bestandssysteem.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', "Jomres legt gedetailleerde informatie over uw systeem, waaronder api-sleutels, systeempaden, gateway en gasteninformatie, die niet voor de rest van het internet zichtbaar zijn. Uw systeemlogboekpad is niet ingesteld, dus systeemlogboeken worden momenteel opgeslagen in de map '.JOMRES_SYSTEMLOG_PATH.', Die niet ideaal is. Bezoek Site Configuration -> Debugging en stel een pad in uw bestandssysteem dat buiten de webwortel staat. Als u twijfelt, kunt u contact opnemen met uw webhosts, omdat zij u kunnen adviseren. ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', "Als uw CMS is geïnstalleerd in de hoofdmap van uw website, dan is een geschikte locatie ");
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "U heeft geen <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'> Google Maps-key</a> ingesteld. Vanwege de recente wijzigingen in Google Maps hebben alle nieuwe sites een API-sleutel nodig om de functies van Google Map te kunnen gebruiken. <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'> zie onze handleiding pagina hoe u een API-sleutel </a> kunt maken en de sleutel in Jomres opslaan. Zodra u uw sleutel hebt, kunt u deze invoeren in Site Configuration> Google Map Options tab. ");
jr_define('JOMRES_GOOGLE_MAP_STYLE', "Google kaart kleurenschema ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Goed, laten we uw verhuurobject toevoegen aan de website. We moeten hier wat informatie over uw verhuurobject verzamelen. Dit stelt ons in staat om uw verhuurobject op te zetten. Zodra dat gedaan is, wordt u verder begeleid voor het toevoegen van kamers, prijzen en afbeeldingen.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', "Het type verhuurobject helpt u om te bepalen hoe het verhuurobject wordt geboekt, bijvoorbeeld een hotel waar je één of twee kamers tegelijkertijd verkoopt, en bij villa's waar u het gehele verhuurobject aanbiedt. ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Merk op dat het emailadres niet hetzelfde hoeft te zijn als die waarmee u uw account heeft geregistreerd. Hiermee kunt u verschillende adressen voor verschillende verhuurobject  hebben. ");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', "Minimale aanbetaling");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', "U kunt een minimale aanbetaling configureren die direct in rekening wordt gebracht. Als u dat doet, dan is de 'Aanbetaling de kosten van de eerste nacht?' & 'De vereiste aanbetaling is een percentage?' instellingen in verhuurobject configuratie kunnen dan niet worden geconfigureerd, in plaats daarvan zijn alle aanbetalings waarden een percentage en moet tenminste de waarde zijn die u hier definieert. ");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', "Dit cijfer kan niet minder zijn dan ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', "Syslog host ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', "Syslog Port ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Als u systeemlogboekberichten naar een syslog-server wilt verzenden, kunt u hier de hostnaam of IP (bijvoorbeeld 192.168.0.2) en poort (bijvoorbeeld 514) instellen. Opmerking, als de site is ingesteld op 'Ontwikkeling', dan worden DEBUG berichten verzonden. Als ingesteld op 'Productie', dan worden alleen INFO-niveau en hogere berichten verzonden. Om de logging op de externe server uit te schakelen, leest u de host- en poortvelden. ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP heeft geen toegang tot de 'openlog' en 'syslog' PHP functies. Dit is een server-instelling, als u wilt dat Jomres berichten naar een syslog-server stuurt, raadpleeg dan uw hosts en bevestig of PHP toegang heeft tot deze functies. Eenmaal ingeschakeld, kunt u hier de instellingen van uw syslog server configureren. ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', "Stuur een email naar de site admin wanneer er een fout optreedt? ");
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historische problemen die moeten worden onderzocht, zijn per email naar de eigenaren van de site gestuurd. Dit kan goed zijn om uw systeem in de gaten te houden, omdat het een hele hoop bewegende onderdelen heeft en het is moeilijk om hen allemaal bij te houden. Helaas kunnen Spiders en Bots die uw sites crawlen (zelfs vriendelijke) onbedoeld fatale fouten veroorzaken en dit kan ervoor zorgen dat het aantal berichten dat u ontvangt overweldigend wordt. Als dat het geval is, stel deze optie in op Nee. Jomres stuurt logboekberichten naar zowel een set logboekbestanden als een syslog-server (als uw specifieke PHP-instellingen het toelaten, als ze u niet contact opnemen met uw hoster). U kunt de bestanden handmatig analyseren als u iets specifiek zoekt (bijvoorbeeld als u een gateway ontwikkelt en de gateway_log () functieoproep wilt gebruiken.) Maar dat is veel informatie om door te trawlen, zodat het beter is om te gebruiken iets als een syslog bestand analyser. Als u op Linux bent ontwikkeld, dan zijn er veel tools beschikbaar voor u. Als u op Windows een eenvoudige tool kunt gebruiken, kunt u http://maxbelkov.github.io/visualsyslog/ op deze pagina de Syslog host instellen op '127.0.0.1' en de 'Poort' tot 514 om berichten te zien die zijn ingelogd in die tool. ");
jr_define('_JOMRES_FAQ', "FAQ");
jr_define('_JOMRES_MANAGE_PROPERTIES', "Verhuurobjecten beheren");
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "U heeft geen <a href='http://ipinfodb.com/account.php' target='_blank'> IP-detection API-key</a> ingesteld. Dit is nodig om het systeem automatisch de locatie van de gebruiker te kunnen detecteren en automatisch hun valuta en land in te stellen. Gelieve <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- tab 'target =' _ blank '> zie onze handleiding pagina over het maken van een IP-detectie API-sleutel </a> en sla de sleutel op in Jomres> Site Configuration> Currency Conversions / Currency Codes. ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "U heeft geen <a href='https://openexchangerates.org/account/apps' target='_blank'> Open Exchange Rates API Key </a> ingesteld. Dit is nodig om het systeem automatisch te kunnen downloaden en gebruiken valuta wisselkoersen. Gelieve <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- tabblad 'target =' _ blank '> zie onze handleidingpagina over hoe u een sleutel voor open wisselkoersen API maakt </a> en sla de sleutel op in Jomres> Site Configuration> Currency Conversions / Currency Codes. ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', "Vergunning nummer");
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', "Sommige landen hebben wetgeving waarbij u een vergunningnummer voor uw woning moet tonen. Als u zo'n nummer hebt, vul het hier in en het wordt toegevoegd aan de sectie van de koptekst van het verhuurobject. ");
jr_define('_JOMRES_SHORTCODES', "Shortcodes");
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "De <strong> plg_content_jomres_asamodule_mambot </ strong> plugin MOET worden geïnstalleerd en ingeschakeld om met deze shortcodes te kunnen werken. Dit is te vinden in de Jomres Plugin Manager. Als deze site is gebouwd met een van de Quickstarts, is het waarschijnlijk al geïnstalleerd. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "U moet ervoor zorgen dat de <strong> 'Jomres Shortcodes' </ strong> plugin is ingeschakeld. Dit is te vinden in de Jomres Plugin Manager. Als deze site is gebouwd met een van de Quickstarts, is het waarschijnlijk al geïnstalleerd. ");
jr_define('SHORTCODE_TASK', "Taak");
jr_define('SHORTCODE_DESCRIPTION', "Beschrijving");
jr_define('SHORTCODE_ARGUMENTS', "Argumenten");
jr_define('SHORTCODE_EXAMPLE', "Voorbeeld");
jr_define('INTEGRITY_CHECK', "Besturingssysteem Integrity Check ");
jr_define('INTEGRITY_CHECK_DESC', "Met deze functie kunt u controleren of het bestandssysteem overeenkomt met de huidige versie van Jomres. Dit is handig om ervoor te zorgen dat alle bestanden correct zijn bijgewerkt na installatie / upgrade. Bestanden in Rood ontbreken, bestanden in Oranje bestaan ​​maar verschillen van die in het huidige gebouw. Alleen filmpjes die potentiële problemen zijn, worden hier vermeld. ");
jr_define('INTEGRITY_CHECK_FILENAME', "Besturingssysteem Integrity Check ");
jr_define('INTEGRITY_CHECK_LOCALHASH', "Lokale hash ");
jr_define('INTEGRITY_CHECK_BUILDHASH', "Versie hash ");
jr_define('INTEGRITY_CHECK_NOPROBLEMS', "Geweldig! Er zijn geen problemen gevonden. ");
jr_define('_JOMRES_PROPERTYTYPE_MARKER', "Google maps marker ");
jr_define('_JOMRES_JAVASCRIPT_READMORE', "Lees verder");
jr_define('_JOMRES_JAVASCRIPT_READLESS', "Lees minder");
jr_define('_JOMRES_TOURIST_TAX_TITLE', "Toeristenbelasting ");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', "Toeristenbelasting tarief");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', "Stel het toeristenbelasting tarief in. De toeristenbelasting wordt pas berekend nadat de eerste boeking is gegenereerd, en is toegevoegd aan de boekingsbevestigingspagina, in het extra service vakje. ");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', "Is percentage?");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Stel dit in op Ja als de belasting een percentage is of Nee als het een vaste vergoeding is. ");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', "Heeft invloed op de volledige boekingswaarde? ");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Stel dit in op Ja als de belasting de volledige waarde van de boeking moet dekken, dus het is een percentage van zowel de accommodatie plus eventuele extra's, of Nee als het alleen berekend is op basis van de waarde van het totaalbedrag. Als de optie 'Is percentage' hierboven is ingesteld op Nee, wordt deze optie genegeerd. ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', "Let op dat er een toeristenbelasting wordt toegevoegd aan deze boeking. U kunt de belasting zien op de boekingspagina. ");
jr_define('NO_LICENSE_MESSAGE', "U heeft geen licentienummer opgeslagen in Site Configuration, daarom kunt u geen plugins downloaden. Zodra u een geldige licentiesleutel hebt opgeslagen, kunt u plugins installeren die zijn opgenomen als Core plugins. ");
jr_define('INVALID_LICENSE_MESSAGE', "U lijkt een licentienummer te gebruiken dat ongeldig is of is verlopen. Zodra u een geldige licentiesleutel hebt opgeslagen, kunt u plugins installeren die zijn opgenomen als Core plugins. ");
jr_define('VALID_LICENSE_MESSAGE', "Gefeliciteerd, u gebruikt een geldig licentie nummer en kan Core plugins installeren via de Jomres plugin manager. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', "Op deze pagina kunt u afbeeldingen uploaden voor uw woning en de services die u aanbiedt. Het heeft een hoofdknop en een tweede knop waarmee u specifieke kamers kunt selecteren om afbeeldingen te uploaden. Het hoofdbeeld en de diavoorstelling tonen dus alleen maar één knop, maar als u bijvoorbeeld een service of meerder kamers heeft, dan ziet u een tweede knop waar u beelden kunt uploaden voor die specifieke bronnen. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', "Op deze pagina kunt u afbeeldingen uploaden voor uw woning en de services die u aanbiedt. Het heeft een hoofdknop en een tweede knop waarmee u specifieke kamers kunt selecteren om afbeeldingen te uploaden. Het hoofdbeeld en de diavoorstelling tonen dus alleen maar één knop, maar als u extra services heeft gemaakt, ziet u een tweede knop waar u beelden kunt uploaden voor die specifieke service. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<Ol>
  <li> Kies eerst de afbeelding (en) die je wilt uploaden door op Afbeelding toevoegen of Drag en Drop te gebruiken. Deze worden weergegeven in de kolom aan de rechterkant. </ Li>
  <li> Boven dit gebied, gebruik de knop 'Kies de kamer' om te kiezen voor welke kamer u beelden wilt uploaden. U kunt de mogelijkheid krijgen om een ​​specifieke kamer hieronder te kiezen. </ Li>
  <li> Nadat u een kamer hebt gekozen, klikt u op de knop Afbeelding uploaden onder een afbeelding om deze te associëren met die kamer. Zodra een afbeelding is geüpload, verdwijnt het van de kolom aan de rechterkant en verschijnt links. </ Li>
  <li> Gebruik de prullenbak naast bestaande afbeeldingen om afbeeldingen te verwijderen die u niet langer wilt weergeven. </ li>
  <li> U kunt de volgorde wijzigen die bestanden in de diavoorstelling worden weergegeven door ze te wijzigen voordat u ze uploadt, zoals deze worden weergegeven in pagina's in alfabetische volgorde. </ li>
</ Ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Naast de knop kamer kunt u een Preview-knop zien. Als u hier klikt, ziet u een popup die u laat zien hoe de momenteel geüploadte afbeeldingen op een pagina zullen kijken. Dit helpt u een idee te geven van hoe uw klanten de afbeeldingen zien. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Er is geen limiet voor het aantal beelden dat u kunt uploaden. Afbeeldingen worden automatisch aangepast wanneer ze worden geüpload. U kunt alleen JPG- en PNG-bestanden uploaden. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideaal gezien zullen alle afbeeldingen die u uploadt minstens ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels breed zijn, anders kunnen ze wazig zijn nadat ze zijn geüpload. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alle afbeeldingen die u uploadt, kunnen niet meer zijn dan ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in grootte. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Kies de kamer waarvoor u beelden wilt uploaden voor ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifieke kamer ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Afbeeldingen die al voor deze kamer zijn geüpload ");
jr_define('_JOMRES_MARKDOWN_TITLE', "Tekst opmaak ");
jr_define('_JOMRES_MARKDOWN_DESC', "U kunt hier tekst invoeren met behulp van eenvoudige Markdown-opmaak. U hoeft geen HTML te kennen, gebruik gewoon de knoppen om de informatie te laten zien zoals u wilt, of om de tekst volgens deze voorbeelden te formatteren. ");
jr_define('_JOMRES_MARKDOWN_EMPHASIS', "Nadruk");
jr_define('_JOMRES_MARKDOWN_BOLD', "Vet");
jr_define('_JOMRES_MARKDOWN_ITALICS', "cursief");
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', "doorhaling");
jr_define('_JOMRES_MARKDOWN_HEADERS', "Koptekst");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', "Grote koptekst");
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium koptekst");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', "Kleine koptekst");
jr_define('_JOMRES_MARKDOWN_TINYHEADER', "Kleine koptekst");
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', "Generieke lijstitem");
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', "Genummerd lijst item");
jr_define('_JOMRES_MARKDOWN_LINKS', "Links");
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', "Tekst om te laten zien");
jr_define('_JOMRES_MARKDOWN_QUOTES', "Citaten");
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', "Dit is een citaat.");
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', "Het kan meerdere regels overspannen!");
jr_define('_JOMRES_MARKDOWN_IMAGES', "Afbeeldingen");
jr_define('_JOMRES_MARKDOWN_TABLE', "Tabel");
jr_define('_JOMRES_MARKDOWN_COLUMN', "Kolom");
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', "Toon verhuurobjectbeelden als een diavoorstelling in verhuurobject lijst? ");
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', "Als ingesteld op ja, wordt een diavoorstelling van de hoofdbeelden van de woning weergegeven. Als ingesteld op nee, dan wordt het eerste hoofdbeeld van de hoofdpagina weergegeven. ");
jr_define('EDIT_CMS_USER', "CMS-gebruiker bewerken");
jr_define('BOOKING_MADE_BY', "Boeking gemaakt door");
jr_define('_JOMRES_ROUTER_FEATURES', "Kenmerken");
jr_define('_JOMRES_ROUTER_ROOMTYPES', "Kamertypen ");
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', "Externe boekingsformulier URL");
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', "Hier kunt u een externe URL instellen als u een website van derden wilt gebruiken voor het maken van boekingen. Alle jomres boekingsknoppen wijzen op deze URL. Laat dit veld leeg als u het Jomres boekingsformulier wilt gebruiken. ");
jr_define('_JOMRES_ROOM_TAGLINE', "Tagline (korte kamer beschrijving/ondertiteling) ");
jr_define('_JOMRES_ROOM_DESCRIPTION', "Kamer beschrijving");
jr_define('_JOMRES_GUEST_BLACKLISTED', "Gasten blacklisted");
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', "Als deze gast zwart is, kunnen zij geen boekingen in deze accommodatie maken. ");
jr_define('_JOMRES_SESSION_HANDLER', "Session Handler ");
jr_define('_JOMRES_SESSION_HANDLER_DESC', "Save jomres sessie bestanden op disk of naar database. Aanbevolen: database ");
jr_define('_JOMRES_MAP_HEIGHT', "Kaarthoogte (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Kaart zoomniveau ");
jr_define('_JOMRES_MAP_MAPTYPE', "Kaartsoort ");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Sjabloon Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Sjabloonpakketten zijn plugins die 'override-sjablonen' voor verschillende jomres-kern sjabloonbestanden kunnen bieden. ");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Deze pagina bevat een lijst met sjabloonbestanden die kunnen worden overschreven door een sjabloonbestand van een sjabloonpakket. Als u een bepaald sjabloonbestand wilt overschrijven, klikt u op de bewerkings knop voor dat bestand. Op de volgende pagina kunt u kiezen welke versie u wilt overschrijven. Opmerking, deze overschrijvingen hebben prioriteit boven zowel Jomres Core als elke Wordpress of Joomla thema / template overrides. U kunt een overschrijving uitschakelen door het te verwijderen op de pagina Overzichtslijst sjablonen. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Sjabloonnaam ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Huidig ​​pad ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Niet overschreven");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "U kunt kiezen uit welk sjabloonbestand de Core Template-bestanden moeten overschrijven door de dropdown te wijzigen ");

jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentage kamers geboekt");
jr_define('_JOMRES_SELECT_WIDGETS', "Selecteer widgets");
jr_define('_JOMRES_INTERVAL', "Interval");
jr_define('_JOMRES_TIMELINE', "Tijdlijn");
jr_define('_JOMRES_CPANEL_GRID', "Home-layout van het dashboard ");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Selecteer de rasterlay-out van de startpagina van uw frontend verhuurobjecten beheerpaneel. ");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers ");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Stadsbeelden ");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Als u het verhuurobject type wijzigt, worden alle kamers, tarieven, verhuurobject instellingen verwijderd en de beschikbaarheid opnieuw ingesteld. ");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', "Let op, na het updaten moet u alle Jomres-plugins die al zijn geïnstalleerd, bijwerken via de Jomres plugin manager. Als u Core plugins hebt geïnstalleerd, maar geen geldige Jomres licentie heeft, raden we <em> niet </ em> aan dat u Jomres bijwerkt als oudere plugins, die vaak niet kunnen werken met nieuwere versies van Jomres. ");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', "Let op, na het updaten moet u alle Jomres-plugins die al zijn geïnstalleerd, bijwerken via de Jomres plugin manager. ");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Als u Jomres wilt bijwerken en de plugins heeft u een verlengingsvergunning nodig. Ga naar <a href='https://www.jomres.net/pricing' target='_blank'> onze site </a> voor meer informatie. In de meeste gevallen zijn deze licenties 50% van de prijs van een volledige licentie. Zorg ervoor dat u in onze winkel bent aangemeld voordat u een vernieuwing probeert te kopen. ");

jr_define('_JOMRES_PAYMENT_METHOD_USED', "Betalingsmethode: ");

jr_define('_JOMRES_PRICES', "Jomres Memberships");


jr_define('_OAUTH_TITLE', "App key management ");
jr_define('_OAUTH_APPS', "REST API-client details ");
jr_define('_OAUTH_IDENTIFIER', "Identifier ");
jr_define('_OAUTH_APIKEY', "Klant identificatie");
jr_define('_OAUTH_SECRET', "Geheim");
jr_define('_OAUTH_CREATED', "Gemaakt/Bijgewerkt App ");
jr_define('_OAUTH_CLIENT_ID_INFO', "De Client ID and Secret worden voor u gemaakt. De Identifier is zodanig dat u dit key pair gemakkelijk kunt identificeren. ");
jr_define('_OAUTH_SCOPE_TITLE', "Toestemmingen (wat de klant kan doen) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "Gebruikersrechten");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Verhuurobject rechten");

jr_define('API_DOCUMENTATION_TITLE', "App REST API documentatie ");

jr_define('_OAUTH_CONFIG', "API Core configuratie ");

jr_define('_OAUTH_CONFIG_SHOW', "Toon configuratie opties voor API-clients in het hoofdmenu van Jomres? ");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "U kunt ervoor kiezen om de configuratieopties van de API-client niet te tonen in het gedeelte 'Mijn account' van het hoofdmenu van Jomres. U kunt in plaats daarvan beslissen dat u ze wilt tonen op andere pagina's met Jomres Shortcodes. ");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Geeft de API-documentatiepagina weer. De API Core stelt gebruikers in staat om API-clients te maken, die vervolgens worden gebruikt om toegang te krijgen tot de API-functionaliteit die wordt omschreven in de API Core-documentatie. ");

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Geeft de API-kernadministratiepagina weer, waar eigendomsbeheerders API-clients kunnen configureren. Houd er rekening mee dat dit alleen een geregistreerde gebruiker is, dus gebruikers moeten geregistreerd en ingelogd zijn voordat ze deze pagina kunnen zien. ");

jr_define('API_METHODS_TITLE', "API Methoden ");
jr_define('API_METHODS_DESCRIPTION', "Deze lijst met methoden is gebaseerd op uw geïnstalleerde API-plugins en wordt automatisch gegenereerd. Als u een plugin voor API-functies installeert of verwijdert, moet u deze pagina bezoeken om deze lijst met API-methodes op uw site te herbouwen. ");

jr_define('_OAUTH_REDIRECT_URI', "Omleiding URI ");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Geef een naam die zinvol is voor jou, zoals My Phone ");

jr_define('_OAUTH_GRANT_TYPES', "Dit systeem ondersteunt twee grant types, Client Credentials en Implicit. Als u de <em> client_credentials </ em> -stroom gebruikt, heeft u zowel de client-id als de klantgeheim nodig. Als u <em> impliciet </ em> gebruikt, dan stuurt uw app alleen het klant-id en u zou inloggen om het programma expliciet toe te staan. ");

jr_define('_OAUTH_IMPLICIT_NOTES', "Om de <em>implicit</em> grant type-flowte gebruiken, moet u deze url gebruiken om uw apps te autoriseren. Wanneer deze URL is gebeld en u de app hebt geautoriseerd, geeft het systeem een ​​teken dat u apps gebruikt om deze API's API te noemen ");
jr_define('_OAUTH_AUTHORISATION_URL', "Autorisatie URL ");

jr_define( 'WEBHOOKS_CORE', "Webhooks");

jr_define('_WEBHOOKS_CONFIG_SHOW', "Toon webconfiguratie opties in het hoofdmenu van Jomres? ");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "U kunt ervoor kiezen om de configuratieopties van Webhook niet te tonen in het gedeelte 'Mijn account' van het hoofdmenu van Jomres. U kunt in plaats daarvan beslissen dat u ze wilt tonen op andere pagina's met Jomres Shortcodes. ");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks documentatie ");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Geeft de API-documentatiepagina weer. De API Core stelt gebruikers in staat om API-clients te maken, die vervolgens worden gebruikt om toegang te krijgen tot de API-functionaliteit die wordt omschreven in de API Core-documentatie. ");

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Geeft de API-kernadministratiepagina weer, waar verhuurobject beheerders API-clients kunnen configureren. Houd er rekening mee dat dit alleen een geregistreerde gebruiker is, dus gebruikers moeten geregistreerd en ingelogd zijn voordat ze deze pagina kunnen zien. ");

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', "Bewerk integratie ");
jr_define( 'WEBHOOKS_INTEGRATION_ID', "Integratie ID");
jr_define( 'WEBHOOKS_INTEGRATION_URL', "URL of Naam");
jr_define( 'WEBHOOKS_ENABLED', "Ingeschakeld");

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', "Authenticatie methode/Integratie ");

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', "Eventuele webhooks die u maakt, worden niet geactiveerd aangezien u niet aan verhuurobjecten bent toegewezen. Super property managers worden doorgaans niet toegewezen aan individuele verhuurobjecten, dus u heeft mogelijk een nieuwe gebruiker nodig voor de creatie van webshooks. ");
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', "Alle webkoppen die u maakt, worden geactiveerd voor de volgende verhuurobjecten: ");

jr_define( 'PORTAL_REVIEWS_LIMIT', "Recensie limiet ");
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', "Gebruik deze instelling om het aantal beoordelingen te beperken die op de pagina met verhuurobject gegevens worden weergegeven. ");
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', "Toon alle beoordelingen");

jr_define( 'JOMRES_INCOMPLETE', "Incompleet");
jr_define( 'JOMRES_WATING_APPROVAL', "In afwachting van goedkeuring ");
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', "Objectgegevens kaart");

jr_define( 'VIDEO_TUTORIALS', "Video uitleg");
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Verhuurobject categorieen' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Bewerk verhuurobject categorie' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimale aanbetaling' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Als de berekende aanbetaling lager is dan deze waarde, zet dan de aanbetaling op deze waarde. Deze waarde kan handmatig overruled worden als het niet voldoet aan de site's minimale aanbetalings waarde. Laat de waarde op 0 om het niet te gebruiken." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', "Om de snelheid van de website te bevorderen, raden we je aan om de bestaande site en verhuurobject foto's te importeren in de database");
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importeer bestaande afbeeldingen naar database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimentele feature. Als het aan staat worden afbeeldingen geupload met de media centre feature ook gekopieerd naar je Amazon S3 bucket en bediend vanaf je Amazon S3 bucket url. Wanneer je dit voor de eerste keer aan zet, wordt je gevraagd de bestaande afbeeldingen te importeren naar je S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Verander je standaard Amazon S3 domain met je CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Alleen aangeraden voor Windows and Mac OSX, als libcurl niet geboud is met Schannel of Secure Transport support (de standaard SSL libraries welke in Windows en Mac OS X zitten), dan moet je dit op nee zetten.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Wanneer je op deze knop drukt, onderbreek dan niet het proces maar wacht op een succesvolle terugmelding of foutmelding. Afhankelijk van de snelheid van de server, kan het even duren.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopieer bestaande afbeeldingen naar Amazon S3 bucket');

jr_define( 'HAS_STARS_TITLE', 'Sta ster classificatie toe?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Forceer herimporteren van afbeelding details naar database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Forceer opnieuw uploaden van afbeeldingen naar S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Verwijder alle Jomres Data bij deinstallatie?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'Wanneer op ja, dan zal Jomres alle datatabellen verwijderen. Dit zal alle Jomres data verwijderen uit de database en kan niet ongedaan maken. Zorg eventueel voor een goede backup.');

jr_define( 'TRANSACTION_IDS', 'Transactie id');
jr_define( 'PAYMENT_METHOD', 'Betaalmethode');
jr_define( 'POA_DISPLAY_PRICE', 'POA Prijs');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'Wanneer de verhuurobjecten worden weergegeven in een lijst, zal het systeem trachten de juiste prijs op basis te bepalen vanaf de datum van vandaag, of wanneer datas worden opgegeven in een zoekopdracht, gebaseerd op deze opgegeven data. Als dat niet lukt dan zal het POA weeergeven, dit betekent Price on application, Waarmee wordt bedoelt dat een gast contact moet opnemen voor de juiste prijs. Als je dat wilt kun je hier een prijs opgeven ter vervanging van POA. Dit bedrag zou een terugval tarief moeten zijn wanneer er geen tarief kan worden bepaald.');

jr_define( 'PLUGINMANAGER_INSTALL', 'Je moet de plugin manager installeren voordat je Jomres plugins kunt installeren, wil je dat nu doen?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'Je moet de pluginmanager updaten voordat je de geinstalleerde plugins kunt updaten, wil je dat nu doen?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Laten we dat doen!");

jr_define( 'INCLUDEINFILTERS', 'Toevoegen aan filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Eigendom kenmerk filters in Ajax Composite Zoeken kunnen erg lang worden, dus kun je deze optie op nee zetten om te voorkomen dat dit kenmerk wordt weergegeven in de eigendom kenmerken lijst.');

jr_define( 'REVIEW_REMINDER_PT1', "Je hebt ");
jr_define( 'REVIEW_REMINDER_PT2', " reservering(en) welke je nog niet hebt gereviewed. Laat a.u.b. een review achter.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Reserveringen wachtend op een review");
jr_define( 'REVIEW_NAG', "Gasten lastigvallen om een review achter te laten?");
jr_define( 'REVIEW_NAG_DESC', "Wanneer gasten zijn uitgechecked, zal het systeem ze herinneren om een review te plaatsen. Zet deze optie op nee om dit uit te schakelen.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Stuur een kopie van reservering mails naar de site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Wanneer dit wordt aangezet, kopien van reserveringmails naar property managers worden ook verstuurt naar alle site admins.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Verberg adres?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "Als je deze optie op Ja zet, kunnen alleen gasten die iets hebben geboekt het adres van het verhuurobject zien. Je zou dit willen als het verhuurobject regelmatig zonder toezicht is.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "VERBORGEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Afbeeldingen optimaliseren bij upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Wanneer dit aan staat zullen afbeeldingen worden geoptimaliseerd voor web. Afhankelijk van het verstuurde bestandstype, zal je server moeten worden voorzien van ꪮ of meerdere libraries door je hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integriteits Controle');
jr_define( 'OBSOLETE_FILES_CHECK', 'Overbodige bestanden controle');
jr_define( 'DATATABLES_COLVIS', 'Kolom zichtbaarheid');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');

jr_define( 'API_TOKEN_LIFETIME_DESC', 'De geldigheids duur van het API token is geldig voor, in seconden. 86400 = 1 dag, 31536000 = 1 jaar');

jr_define( 'ENCRYPTION_TITLE', 'Versleuteling' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Versleuteld bestand lokatie' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Verwijder nooit het versleutelde bestand** <br/> Gebruikersdata is versleuteld opgeslagen in tabellen om er zeker van te zijn dat het goed is beschermd, volgens de GDPR/AVG aanbevelingen. Standaard is de beveiligingssleutel opgeslagen in het bestand "encryption_key.class.php" in de root van je Jomres installatie (meestal /public_html/jomres). Je kunt de lokatie wijzigen. Wanner je dit doet, moet je het bestand VERPLAATSEN, wacht niet tot Jomres een nieuwe versie maakt, anders ben je niet in staat de gegevens van je gasten te ontsleutelen.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'De informatie welke je hier opslaat wordt gebruikt om facturen voor dit object te genereren');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR voorwaarden' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Hier kun je configureren hoe lang een reservering of factuur blijft staan, voor deze wordt verwijderd van het systeem om te voldoen aan de GDPR/AVG.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Reservering retentie periode (in dagen)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Factuur retentie (niet-reservering) periode' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Andere facturen, zoals commissie en abonnementen, zijn niet gekoppeld aan reserveringen. Deze worden niet verwijderd wanneer reservering facturen en contracten worden verwijderd. Afhankelijk van je land, en je eigen bedrijfsbeleid, kun je een aparte retentie periode configureren. Een veelgebruikte periode zou 3653 dagen kunnen zijn, dat is 10 jaar.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Uw gegevens' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Sommige onderdelen van deze website moeten informatie opslaan over uw bezoek. Dit wordt alleen gebruikt om u van dienst te zijn, het wordt nooit gedeeld met derden en wordt verwijderd zodra het niet langer meer nodig is.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'GEEFT U ONS TOESTEMMING OM DEZE GEGEVENS OP TE SLAAN?' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'U moet ermee instemmen dat wij deze gegevens voor u bewaren om boekingen op deze site te kunnen maken. Ongeacht of u al dan niet instemt met het opslaan van uw gegevens, zullen wij een cookie op uw computer opslaan om ons te laten weten of u zich al dan niet hebt aangemeld. Dit helpt ons ervoor te zorgen dat we u niet constant vragen of u al dan niet wilt dat we gegevens van u opslaan en bevat geen persoonlijk identificeerbare informatie. Als u van gedachten verandert, kunt u op elk gewenst moment de pagina "App-machtigingen" bezoeken om u aan of uit te melden.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'De informatie wordt opgeslagen voor verschillende tijdsperioden afhankelijk van de aard van uw bezoek. Dus, als u alleen maar rondkijkt, bewaren wij informatie over de geografische locatie (op landniveau). Als u zoekopdrachten uitvoert, slaan we de laatste dingen op waarnaar u hebt gezocht om vervolgens zoekformulieren gebruiksvriendelijker te maken. Deze informatie wordt meestal maximaal 24 uur bewaard en wordt alleen gebruikt om uw bezoek aangenamer te maken.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Wanneer u bij ons boekt, wordt er noodzakelijkerwijs meer informatie opgeslagen.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'De technische details van het boekingsformulier worden vastgelegd en bewaard voor een maximum van 60 dagen. Dit is vereist, zodat reserveringen op aanvraag kunnen worden omgezet in volledige boekingen zodra een boeking is goedgekeurd en voor analyse door onze teams in het geval er een probleem is met een boeking. Als u niet was ingelogd toen u een boeking maakte, zullen wij u een gebruikersnaam en wachtwoord per e-mail toesturen, zodat u uw boekingsgeschiedenis kunt bekijken en uw Right To Be Forgotten (Recht om te worden vergeten) kunt uitoefenen als u dat wenst.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Gegevens die in het boekingsformulier zijn ingevoerd, bijvoorbeeld naam, e-mailadres, echt adres, worden maximaal 365 dagen na de vertrekdatum van de boeking opgeslagen. Deze informatie wordt in gecodeerde vorm opgeslagen in onze database, zodat alleen bevoegde personen deze kunnen bekijken. Als u een reservering maakt, moeten wij uw persoonlijke informatie tijdens de geldigheid van de reservering wettelijk opslaan. Als de boeking is voltooid, omdat deze is geannuleerd of is uitgecheckt, kunt u uw RTBF (recht om te worden vergeten) gebruiken door u aan te melden en naar de pagina "Uw gegevens" te gaan. Factuurgegevens voor voltooide boekingen worden nog steeds veilig opgeslagen in onze database om ervoor te zorgen dat we ons houden aan de relevante belastingwetten, maar u kunt alle andere persoonlijke informatie verwijderen nadat de boeking is voltooid.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Wanneer u ermee instemt dat uw informatie wordt opgeslagen zoals hierboven beschreven, zijn wij wettelijk verplicht om deze toestemming op te slaan in onze database. Deze informatie omvat uw IP-nummer en de inhoud van het aanmeldingsformulier. We zullen deze toestemmingsmelding onbeperkt behouden (dit is een wettelijke vereiste).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'U hebt ons nog niet verteld of we persoonlijk identificeerbare informatie over u kunnen verzamelen' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'U hebt ingestemd met het verzamelen van de nodige persoonlijk identificeerbare informatie om reserveringen te maken' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'U hebt ons gezegd geen persoonlijk identificeerbare informatie te verzamelen' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'U hebt ons geen toestemming gegeven om uw privꨥgevens te verzamelen' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Om bepaalde acties op deze website uit te voeren, moeten we persoonlijk identificeerbare informatie over u verzamelen, maar u hebt ons daarvoor geen toestemming gegeven.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Wijzig uw rechten' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Ga door met het bekijken van verhuurobjecten' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App rechten' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Gast gegevens' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Dit zijn de gegevens die voor u worden opgeslagen door de verschillende verhuurobjecten. Verschillende hotels kunnen verschillende records bevatten, afhankelijk van wat u hebt ingevoerd toen u de boeking maakte.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'U hebt geen gegevens opgeslagen bij hotels in dit systeem' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profielgegevens' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Dit is de belangrijkste gegevensset die we voor u bewaren, anders dan die u met verschillende verhuurobjecten heeft gedeeld.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'U hebt geen profielinformatie opgeslagen' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Hier is de persoonlijk identificeerbare informatie die wij voor u op deze website opslaan. Het is gebouwd in JSON-indeling (JavaScript Object Notation), een lichtgewicht gegevensuitwisselingsformaat. Het is gemakkelijk voor mensen om te lezen en te schrijven en het is gemakkelijk voor machines om te analyseren en te genereren.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'geanonimiseerd' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'uw gegevens' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Door akkoord te gaan met deze Gebruiksvoorwaardenovereenkomst, stemt u in met:

<ul>
	<li>
		U bent gemachtigd om hotels te boeken via deze website;
	</li>
	<li>
		Je bent minstens 18 jaar oud;
	</li>
	<li>
		U beschikt over de wettelijke bevoegdheid om een bindende wettelijke verplichting aan te gaan;
	</li>
	<li>
		U zult de Site gebruiken in overeenstemming met deze Overeenkomst;
	</li>
	<li>
		U zult de Site alleen gebruiken om legitieme reserveringen te maken voor uzelf of voor een andere persoon waarvoor u wettelijk bevoegd bent om op te treden;
	</li>
	<li>
		U zult dergelijke andere personen informeren over deze Overeenkomst die van toepassing is op de reserveringen die ik namens hen heb gemaakt, inclusief alle regels en beperkingen die daarop van toepassing zijn;
	</li>
	<li>
		Alle informatie die u zelf aan de Website verstrekt, is waar, nauwkeurig, actueel en volledig; en
	</li>
	<li>
		U bewaart uw accountgegevens en houdt toezicht op en bent volledig verantwoordelijk voor elk gebruik van uw account door uzelf en door iemand anders dan uzelf.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Beveiliging en transparantie zijn belangrijk voor ons.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We nemen onze verantwoordelijkheden met betrekking tot het opslaan van uw gegevens zeer serieus. Alle persoonlijk identificeerbare informatie (PII) wordt versleuteld opgeslagen in onze database met behulp van industriestandaardalgoritmen om ervoor te zorgen dat alleen geautoriseerde gebruikers deze informatie kunnen bekijken.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Je kunt alle persoonlijk identificeerbare informatie downloaden die we voor je bewaren.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download nu' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Recht om te worden vergeten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We zijn van mening dat u uw <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">persoonlijk identificeerbare informatie </a><a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">kan verwijderen</a>als u dat wilt en als het praktisch uitvoerbaar is. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'U bent niet geregistreerd op deze site. Uw algemene locatie (land) en IP-nummer worden maximaal 24 uur opgeslagen en vervolgens verwijderd.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'U bent niet geregistreerd op deze site en u hebt zich afgemeld voor het verzamelen van gegevens. We hebben uw PII niet opgeslagen.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'U bent geregistreerd op de site en hebt geen openstaande of actieve boekingen. We kunnen de meeste informatie die we momenteel voor u bewaren, anonimiseren. Zou je dat willen doen? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Opmerking: dit verwijdert uw account niet, het anonimiseert eenvoudigweg onze records, zodat uw account niet als persoon aan u kan worden gekoppeld. Volgens de wet moeten we uw PII blijven opslaan voor factureringsdoeleinden, maar we zullen alle gastrecords verwijderen.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'U bent geregistreerd op de site, maar u heeft nog openstaande boekingen en we kunnen uw gegevens op dit moment niet anonimiseren. Deze gegevens worden maximaal een jaar na het voltooien van de boeking bewaard en vervolgens verwijderd, als u ervoor kiest om deze voor die tijd niet te verwijderen.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Omdat u een propertymanager bent op onze site, kunnen we u niet de mogelijkheid bieden om uw gegevens automatisch te laten verwijderen. Neem in plaats hiervan rechtstreeks contact met ons op zodat we uw woning (en) kunnen toewijzen aan een andere manager. Zodra we dat hebben gedaan en uw status als property manager hebben verwijderd, kunt u uw gegevens automatisch laten verwijderen.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Vergeet mij!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Dit kan niet ongedaan worden gemaakt!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Uw gegevens zijn verwijderd!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, u kunt geen reservering maken omdat uw e-mailadres ongeldig is' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Op deze pagina kunt u alle gasten anoniem maken die hun informatie in het systeem hebben opgeslagen. Hiermee kunt u voldoen aan de GDPR, maar u kunt geen andere informatie op deze pagina bewerken. Om dat te doen, moet u als property manager inloggen op de frontend. De veronderstelling is dat een historische gast contact met u heeft opgenomen om u te vragen hun recht om te worden vergeten uit te oefenen. Als ze zich niet kunnen aanmelden bij de frontend van de site (misschien is een gebruiker niet voor hen aangemaakt toen ze boekten), dan kunt u dit gebied gebruiken om ze te anonimiseren zodra u hun identiteit hebt bevestigd.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anoniemiseer gast' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'VERWIJDERD OBJECT' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Gastgegevens anoniem gemaakt' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Kan niet anonimiseren' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We hebben uw toestemming nodig om uw gegevens op te slaan voordat u kunt boeken. KLIK HIER om ons toestemming te geven.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'GDPR-compatibele functionaliteit inschakelen?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WIJ RADEN NIET AAN DAT U DE GDPR FUNCTIONALITEIT UITSCHAKELT. Jomres heeft ingebouwde functies die u helpen ervoor te zorgen dat het gedeelte Jomres van uw site voldoet aan de GDPR. Als u deze functie uitschakelt (en dat moet u niet doen als u zich in de EU bevindt of als u zaken doet met burgers van de EU), gaat Jomres automatisch ervan uit dat elke bezoeker van de site toestemming heeft gegeven om zijn persoonlijke gegevens in te schakelen. App-machtiging en My Data-paginas worden niet getoond en gebruikers zullen niet worden gevraagd om toestemming te geven om de gegevens te verzamelen.' );


jr_define( 'EMPTY_TEMP_DIR', 'temp dir leeg maken' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Tijdelijke bestanden verwijderd' );


jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');

