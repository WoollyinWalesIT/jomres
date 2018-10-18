<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
// German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
// German Translation Revision 2010 © Klaus Bogotz (http://klabog.de)
// Corrected tons of typos, completed and changed style to avoid - where possible - the German typical problem of formal and informal style
// I did my best to form the composed phrases in a good style but as if I'm not able to proof all responds there could be some rubbish.
// If you find anything that should be corrected (in the German language file) send it to apartment@gr7.org.
// Swissgerman Translation copied from German Translation and Revision 2018: Micha Zutter (http://konzeptplus.ch/)
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife im Rahmen, nicht als PopUp anzeigen?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adressinformation');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Kurzinformationen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Zimmer und Verf&uuml;gbarkeit anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformationen unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verf&uuml;gbarkeit unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Tarifmodell w&auml;hlen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verf&uuml;gung. "Statische Preise" bietet die M&ouml;glichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall w&auml;hrend des ganzen Aufenthalts g&uuml;ltig. Das ist n&uuml;tzlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Fr&uuml;hst&uuml;ck, Halbpension oder Arrangements.<br>"Durchnittliche Preise" w&auml;hlen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise f&uuml;r jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis f&uuml;r den Buchungszeitraum zur&uuml;ck.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Zimmer und Zeitr&auml;ume w&auml;hlen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/>Sind die entsprechenden Zeitr&auml;ume ausgew&auml;hlt, den blauen Button dr&uuml;cken um die Sperrung zu best&auml;tigen.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivit&auml;t vom System ausgeloggt.</b> Bitte neu einloggen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Online Zahlung?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise w&auml;hlen.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin-Einstellung ge&auml;ndert');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin-Einstellung eingef&uuml;gt');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Kreditkarte bearbeiten');
jr_define('_JOMRES_COM_A_EDITICON', 'Icongr&ouml;ße bearbeiten');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diaschau');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diaschau anzeigen?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diaschau in der Unterkunft eingebettet?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Diaschau');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Preisen anzeigen?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'PopUps erlaubt?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload von Bildern');
jr_define('_JOMRES_A_TABS_MISC', 'Diverses');
jr_define('_JOMRES_A', 'Konfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Allgemeine Unterk&uuml;nfteigenschaften benutzen');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Gew&uuml;nschtes Such-Plugin ausw&auml;hlen.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Die Suche zeigt leider kein Ergebnis. Eingabe &auml;ndern und erneut versuchen.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Sind Sie sicher?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage');
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Schnellreservierung');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Benutzerprofile anzeigen und Rechte setzen');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Leer lassen');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Allgemeine Einstellungen');
jr_define('_JOMRES_COM_MR_BACK', 'Zur&uuml;ck');
jr_define('_JOMRES_COM_MR_YES', 'Ja');
jr_define('_JOMRES_COM_MR_NO', 'Nein');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Neu');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Neue Unterkunft');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Neuer Gast');
jr_define('_JOMRES_COM_MR_SAVE', 'Sichern');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nachname');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ankunftsdatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Abreisedatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Leer');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Benutzername');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Zugangsrechte');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Benutzer ge&auml;ndert');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Buchungs-Administration');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Buchung &auml;ndern f&uuml;r ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Ankunft/Abreise');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gast');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Zimmer');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Bezahlung');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Vorname');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nachname');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Besondere W&uuml;nsche');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Bitte beachten Sie, dass manche Sonderw&uuml;nsche Zusatzkosten verursachen k&ouml;nnen.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Buchung stornieren');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Straße');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ort');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PLZ');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-Mail-Adresse');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Tage bis zur Ankunft');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Buchung kann nicht storniert werden, da der Gast schon eingecheckt ist.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Diese Buchung stornieren.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Stornierung best&auml;tigen');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Buchung storniert.');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Art der Buchung');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Verdeckt');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Rezeption');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Zimmername');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Zimmernummer');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Etage');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Behindertengerecht?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. Pers.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Zimmerkategorie');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Beschreibung Zimmerkategorie');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Liste Zimmereigenschaften');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Anzahlung geleistet');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Anzahlung eingeben');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Gesamtbetrag');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Anzahlung Ref.');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Buchungsnummer');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Anzahlung');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Anzahlung gespeichert');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Freie Zimmer');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Unterkunft');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Art des Zimmers');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Details Gast');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Vorname');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Nachname');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nr.');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Straße');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ort');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'PLZ');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Schnellauswahl Preise');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Anzahl Tage');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Gesamt');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Zimmer- und Unterk&uuml;nfteinstellungen anzeigen');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Zimmer');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Kategorien');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Unterkunft');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Unterkunft Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Zimmer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Art');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Name');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nummer');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Etage');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. Belegung');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Bearbeiten');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Zimmereigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Beschreibung der Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Zimmereigenschaften hinzugef&uuml;gt');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Zimmereigenschaften aktualisiert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Zimmer Kategorien');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Zimmerkategorie, Kurzfassung');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beschreibung Zimmerkategorie');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Zimmerkategorie hinzugef&uuml;gt');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Bearbeiten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Name');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Straße');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ort');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Land');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'PLZ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-Mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Unterkunft aktualisiert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Unterkunft Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Unterk&uuml;nfteigenschaften, Kurzfassung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Beschreibung  der Unterk&uuml;nfteigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Unterk&uuml;nfteigenschaften aktualisiert');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Preise');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Preis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Beschreibung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'G&uuml;ltig von');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'G&uuml;ltig bis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Preis pro Nacht');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Tage min.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Tage max.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. Belegung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. Belegung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Zimmerkategorie');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'pP/pN ignorieren');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Wochenenden erlauben');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Bearbeiten');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Duplizieren');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif gel&ouml;scht');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Tarif bearbeiten');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Buchung gespeichert');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Gast einchecken');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Gast auschecken');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Buchungen auflisten');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Dashboard');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '&Uuml;bersicht G&auml;ste');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Unterk&uuml;nfte bearbeiten');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verf&uuml;gbarkeit pr&uuml;fen');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Vorname');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nachname');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Straße');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ort');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PLZ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Leider sind keine Zimmer verf&uuml;gbar, die den Kriterien entsprechen.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Vielen Dank f&uuml;r Ihre Buchung. Wir werden Sie in K&uuml;rze kontaktieren, um Ihre Zahlungsmethode zu best&auml;tigen. <br><br> <b>Bitte beachten Sie, dass dies nur eine vorl&auml;ufige Buchung ist. Diese ist abgeschlossen, sobald Sie eine schriftliche Best&auml;tigung von uns erhalten haben. <br><br>Falls Sie Ihre Anzahlung per PayPal angewiesen haben, ist die Transaktion bereits abgeschlossen, und eine Einzahlungsbest&auml;tigung wurde an Ihre angegebene E-Mail-Adresse versandt. Sie k&ouml;nnen sich nun mit Ihren Zugangsdaten bei www.paypal.de einloggen, um die Details einzusehen. </b><br>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Gast einchecken');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gast eingecheckt');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gast auschecken');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Zuschl&auml;ge');
jr_define('_JOMRES_COM_A_TARIFFS', 'Preise');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Datei-Upload');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Einzelzimmerzuschl&auml;ge');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Hier Ja einstellen, wenn Einzelzimmerzuschl&auml;ge berechnet werden sollen.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Einzelzimmerzuschlag');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Wird die Anzahlung prozentual berechnet?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Ist die Anzahlung ein prozentualer Anteil des Gesamtbetrages? Wenn NEIN, wird ein pauschaler Anzahlungsbetrag addiert.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Preis Anzahlung');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Pro Person, pro Nacht');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Hier Ja einstellen, wenn die Preise pro Person / pro Nacht berechnet werden soll. Wenn NEIN, werden die Kosten pro Zimmer / pro Nacht berechnet.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Dateigr&ouml;ße');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maximale Dateigr&ouml;ße in Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Belegt');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservierungsdaten:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Wir m&ouml;chten Sie darauf hinweisen, dass Sie mit dieser Buchung einen rechtsg&uuml;ltigen Vertrag eingehen. Sollten Sie also - aus welchem Grund auch immer - Ihre Buchung stornieren oder den Zeitraum Ihres Aufenthalts verk&uuml;rzen m&uuml;ssen, k&ouml;nnten trotzdem die vollen Kosten f&auml;llig werden.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornierungs- und K&uuml;rzungsrichtlinien</i><br> Wenn Sie Ihren Urlaub absagen, muss diese Absage schriftlich best&auml;tigt werden. Nachfolgend finden Sie eine &Uuml;bersicht &uuml;ber die anfallenden Stornierungskosten:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Ab 14 Tagen im Voraus');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Best&auml;tigungsmail ausdrucken');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Rechnungsausdruck');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Anzahl N&auml;chte: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Preis pro Nacht: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Gesamtbetrag');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Rechnung ausdrucken');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Extras zur Rechnung hinzuf&uuml;gen');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Beschreibung der Extras');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Preis Extras');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Weitere berechnete Posten');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Posten zur Rechnung hinzugef&uuml;gt');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Bild hochladen');
jr_define('_JOMRES_FILE_UPLOAD', 'Datei hochladen');
jr_define('_JOMRES_COM_A_ODDS', 'Verschiedenes');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Fehler&uuml;berpr&uuml;fung ein?');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Hier JA einstellen, um das Script vor der Inbetriebnahme auf Fehler zu pr&uuml;fen. Bitte im laufenden Betrieb auf NEIN stellen - Besuchern wird sonst ein Datenkauderwelsch angezeigt!');
jr_define('_JOMRES_FILE_DELETE', 'Bild l&ouml;schen');
jr_define('_JOMRES_FILE_DELETED', 'Bild gel&ouml;scht');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY', 'Alle Unterk&uuml;nfte');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Zimmer l&ouml;schen');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Dieses Zimmer kann nicht gel&ouml;scht werden, da hierf&uuml;r bereits Buchungen vorliegen. Bitte diese Buchungen stornieren und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Zimmer gel&ouml;scht');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Zimmereigenschaften l&ouml;schen');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Diese Zimmereigenschaft kann nicht gel&ouml;scht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Eigenschaft bei diesen Zimmern entfernen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Zimmereigenschaften gel&ouml;scht');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Unterkunft-Eigenschaften l&ouml;schen');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Diese Unterkunft-Eigenschaft kann nicht gel&ouml;scht werden, da sie bereits einigen Unterk&uuml;nften zugeordnet wurde. Bitte diese Eigenschaft bei diesen Unterk&uuml;nften entfernen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Unterkunft-Eigenschaft gel&ouml;scht');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Zimmerkategorien l&ouml;schen');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Zimmerkategorie gel&ouml;scht');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Unterkunft l&ouml;schen');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Unterkunft gel&ouml;scht');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Sie haben nicht die erforderlichen Zugriffsrechte, um dieses Unterkunft zu l&ouml;schen.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Breite der großen Bilder');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Link zur Landkarte');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Unterkunft-Beschreibung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-In Check-Out Zeiten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivit&auml;ten in der Umgebung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Anfahrt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Flugh&auml;fen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Weitere Verkehrsanbindungen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Richtlinien, Haftungsausschluss usw.');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Besucher sollen online buchen k&ouml;nnen');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Hier JA einstellen, um sicherzustellen, dass die Besucher online Zimmer buchen k&ouml;nnen. Falls nicht erw&uuml;nscht ist, dass Zimmer &uuml;bers Internet gebucht werden k&ouml;nnen, bitte auf NEIN stellen.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Fixe Buchungszeitr&auml;ume?');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Wenn hier JA eingestellt ist, werden die Zimmer f&uuml;r voreingestellte Zeitr&auml;ume gebucht.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Buchungszeitraum: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Buchungen ');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximale Anzahl Buchungsperioden. Beispiel: 3 mal 7 Buchungsperioden = 21 Tage.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Ist dies ein Ein-Zimmer-Unterkunft?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Buchung &uuml;berpr&uuml;fen');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Buchung best&auml;tigen');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Montag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Dienstag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Mittwoch');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Donnerstag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Freitag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Samstag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Sonntag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Mo');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Di');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Do');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'So');
jr_define('_JOMRES_COM_A_AVLCAL', 'Kalender');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Schriftfarbe f&uuml;r den aktuellen Tag');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Schriftfarbe f&uuml;r Tage des aktuellen Monats');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Schriftfarbe f&uuml;r Tage des vorherigen und n&auml;chsten Monats');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Zellenfarbe f&uuml;r Tage des aktuellen Monats');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Zellenfarbe f&uuml;r Tage des vorherigen und n&auml;chsten Monats');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Zellenfarbe f&uuml;r belegte Tage');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Zellenfarbe f&uuml;r vorreservierte Zimmer (Buchungen, f&uuml;r die noch keine Anzahlung geleistet wurde)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Zellenfarbe f&uuml;r Tage in der Vergangenheit');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Belegt / nicht buchbar');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Frei und buchbar');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Vorreserviert');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Voreingestellter Ankunftstag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Nur f&uuml;r Seiten, die fixe Buchungszeitr&auml;ume anbieten. Wochentag w&auml;hlen, an dem angereist werden muss.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Voreingestellter Ankunftstag ist');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Buchungszeitraum (Tage)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Verf&uuml;gbarkeitskalender anzeigen?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Hier JA einstellen, um den Verf&uuml;gbarkeitskalender anzuzeigen.');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Verf&uuml;gbarkeit');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Um zum Buchungsformular zu kommen bitte auf ein freies Datum klicken.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Blankobuchungen');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Neue Blankobuchung');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Gast l&ouml;schen');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gast gel&ouml;scht');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Dieser Gast konnte nicht gel&ouml;scht werden, weil noch Buchungen von ihm vorliegen. Buchungen stornieren und erneut versuchen.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Egal');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Ausgabeformat Kalender');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Eingabeformat Kalender');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Eingabeformat f&uuml;r das Datum im Kalender &auml;ndern.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Bei fixen Buchungszeitr&auml;umen Kurzunterbrechungen erlauben');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'L&auml;nge der Kurzunterbrechung (Tage)');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Ver&ouml;ffentlicht');
jr_define('_JOMRES_COM_A_PAYPAL', 'PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', '&Auml;nderungsprotokoll');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Benutzer (Benutzername)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Nach Datum filtern');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ankunft steht aus');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Reist heute an');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktueller Gast, anwesend');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Reist heute ab');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Abreise &uuml;berf&auml;llig');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Ist nicht angekommen');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Erstelltes Zimmer');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualisiertes Zimmer');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Gel&ouml;schtes Zimmer');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Zimmereigenschaft erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Zimmereigenschaft aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Zimmereigenschaft gel&ouml;scht');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Unterkunft erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Unterkunft aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Unterkunft gel&ouml;scht');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Unterkunft-Einstellungen bearbeitet');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Unterkunft ver&ouml;ffentlicht');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarif erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarif aktualisiert');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Servicegeb&uuml;hren hinzugef&uuml;gt');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Gast eingecheckt');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Anzahlung eingegeben');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Gast erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Gast aktualisiert');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Zimmer gebucht');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Zuschlag erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Zuschlag aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Zuschlag gel&ouml;scht');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Zuschlag ver&ouml;ffentlicht');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Blankobuchung get&auml;tigt');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Blankobuchung gel&ouml;scht');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Zuschl&auml;ge');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Beschreibung');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Name');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Preis');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Zuschlag aktualisiert');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Zuschlag bearbeiten');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Zuschlag gel&ouml;scht');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Zuschl&auml;ge bearbeiten');
jr_define('_JOMRES_COM_A_EXTRAS', 'Zuschl&auml;ge bei der Buchung anzeigen?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Hier JA einstellen, um eventuelle Zuschl&auml;ge anzuzeigen, die dem Gast angeboten werden sollen.');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Optionale Zuschl&auml;ge.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Startdatum<br> Blankobuchnung - ab wann ist reserviert');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Enddatum<br> Blankobuchung - ab wann ist wieder frei');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Blankobuchungen bearbeiten');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Beim Versuch, dieses Zimmer zu buchen, ist ein Fehler aufgetreten. Eines oder mehrere der ausgew&auml;hlten Zimmer sind nicht frei.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Zimmer enthalten in der Blankobuchung');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Keine Blankobuchungen vorhanden');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Anzahl Sterne');
jr_define('_JOMRES_COM_A_RESET', 'Zur&uuml;cksetzen');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Buchung storniert.');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Suchen nach:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'W&auml;hrungssymbol');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'W&auml;hrungscode');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Information');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Vorausbuchungszeitraum einschr&auml;nken?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Hier JA einstellen, wenn der Vorausbuchungszeitraum einschr&auml;nkt werden soll. (Im n&auml;chsten Feld kann der maximale Vorausbuchungszeitraum in Tagen eingeben werden.) Wenn hier JA eingestellt ist, und ein Gast versucht, fr&uuml;her als x Tage im Voraus zu buchen, wird sein Ankunftsdatum auf das heutige Datum zur&uuml;ckgesetzt.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Vorausbuchungszeitraum eingeschr&auml;nkt auf Tage:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Steuern');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Steuern');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Pauschalsteuer Betrag');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Steuer Prozentsatz');
jr_define('_JOMRES_COM_A_EUROTAX', 'Pauschalsteuer');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Pauschalsteuer Betrag');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Alle Eintr&auml;ge archivieren');
jr_define('_JOMRES_FRONT_TARIFFS', 'Unsere Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifbezeichnung');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarifbeschreibung');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Zimmerkategorie');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'G&uuml;ltig von');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'G&uuml;ltig bis');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Pro Person / pro Nacht');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Pro Nacht');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'ohne Wochenenden');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Tage min.');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Tage max.');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. Belegung');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. Belegung');
jr_define('_JOMRES_FRONT_PREVIEW', 'Vorschau');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Bearbeiten ein?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Text wurde aktualisiert.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Sprache bearbeiten');
jr_define('_JOMRES_FRONT_PTYPE', 'Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Unterkunft-Kategorien auflisten');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Unterkunft-Kategorien bearbeiten');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Beschreibung Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Unterkunft-Kategorie gespeichert');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Unterkunft-Kategorie(n) gel&ouml;scht');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Zahlungserinnerung');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Keine Zuschl&auml;ge zur Rechnung hinzuf&uuml;gen');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Anzahlung');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'kompletter Betrag');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Betrag, der bei der Buchung erhoben werden soll');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Hier einstellen, welcher Betrag bei der Buchung erhoben werden soll: Anzahlung, wenn nur die Anzahlung sofort erhoben werden soll, oder kompletter Betrag, wenn gleich der komplette Zimmerpreis in Rechnung gestellt werden soll.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendermonate anzeigen');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Wie viele Kalendermonate sollen bei den verf&uuml;gbaren Zimmern angezeigt werden?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Zahlung');
jr_define('_JOMRES_COM_A_CANCEL', 'Abbrechen');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Bitte die Zimmer und Zeitr&auml;ume w&auml;hlen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn die entsprechenden Zeitr&auml;ume ausgew&auml;hlt sind, den blauen Button dr&uuml;cken um die Sperrungen zu best&auml;tigen. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivit&auml;t vom System ausgeloggt</b> Bitte erneut einloggen und erneut versuchen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Onlinezahlung akzeptieren?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise w&auml;hlen.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin Einstellung ge&auml;ndert');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin Einstellung eingef&uuml;gt');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Webseite dieser Unterkunft anzeigen');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Externer Link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Link zur eigenen Webseite hier einf&uuml;gen.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Bearbeite Kreditkartendetails');
jr_define('_JOMRES_COM_A_EDITICON', 'Icongr&ouml;ße bearbeiten');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diashows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diashow zeigen?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diashows in Unterkunft eingebettet zeigen?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Diashow');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Tarifen zeigen?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups erlaubt?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Bilder hochladen');
jr_define('_JOMRES_A_TABS_MISC', 'Verschiedenes');
jr_define('_JOMRES_A', 'Seitenkonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Die allgemeinen Einstellungen ben&uuml;tzen');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Such-Plugin w&auml;hlen das verwendet werden soll.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Leider ergibt die Suche kein Ergebnis. Bitte Eingabe &auml;ndern und erneut versuchen.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Sind Sie sicher?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife in Unterkunft eingebettet zeigen?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailinformationen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'F&uuml;r Zimmer und Verf&uuml;gbarkeit klicken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformation unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verf&uuml;gbarkeit unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'W&auml;hlen Sie das gew&uuml;nschte Tarifmodell');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verf&uuml;gung. "Statische Preise" bietet die M&ouml;glichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall w&auml;hrend des ganzen Aufenthalts g&uuml;ltig. Das ist n&uuml;tzlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Fr&uuml;hst&uuml;ck, Halbpension oder Arrangements.<br>"Durchnittliche Preise" w&auml;hlen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise f&uuml;r jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis f&uuml;r den Buchungszeitraum zur&uuml;ck.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Eingabefeld des Abreisetags anzeigen?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Auf NEIN setzen, wenn der Abreisetag nicht angezeigt werden soll. Diese Einstellung nur &auml;ndern falls wichtige Gr&uuml;nde vorliegen. Der Abreisetag in der Buchung wird dann automatisch der n&auml;chste Tag nach der Anreise sein.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limit der Beschreibung');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Maximale Anzahl der Buchstaben festlegen die in der Unterkunftbeschreibung angezeigt werden sollen.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Kalenderformatierung benutzen?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Ver&ouml;ffentlichen');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'R&uuml;ckg&auml;ngig ver&ouml;ffentlichen');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe f&uuml;r Fehler');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Standardland f&uuml;r Buchungsformular');
jr_define('_JOMRES_JAVASCRIPT_', 'Felder mit dem roten Stern, sind zwingend erforderlich.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'D&uuml;rfen Benutzer eigene Unterk&uuml;nfte ver&ouml;ffentlichen?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Hier JA einstellen, wenn den Benutzern erlaubt ist, eigene Unterk&uuml;nfte zu ver&ouml;ffentlichen. Ohne Backend Admin-Einstellungen.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Felder mit dem roten Stern, sind zwingend erforderlich.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Unterkunft erfolgreich erstellt');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Kalenderanzeige auf Jahresanfang?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Der Buchungskalender wird auf Anfang des laufenden Jahres gestellt.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Anzahl verf&uuml;gbare R&auml;ume');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Zur&uuml;ck zu den Unterkunft-Details');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Zimmer Typ');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Benutzen Sie dieses Formular, um ihre Buchung zu t&auml;tigen. Bewegen Sie die Maus &uuml;ber die i-Kn&ouml;pfe um eine genaue Erkl&auml;rung zu erhalten. W&auml;hlen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend w&auml;hlen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzuf&uuml;gen m&ouml;chten. Im n&auml;chsten Schritt k&ouml;nnen Sie noch die optionalen Zuschl&auml;ge Ihrer Buchung hinzuf&uuml;gen. Sobald Sie Ihre pers&ouml;nlichen Adressangaben vollst&auml;ndig ausgef&uuml;llt haben, k&ouml;nnen Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung die Sie noch best&auml;tigen m&uuml;ssen.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Benutzen Sie dieses Formular, um ihre Buchung zu t&auml;tigen. Bewegen Sie die Maus &uuml;ber die i-Kn&ouml;pfe um eine genaue Erkl&auml;rung zu erhalten. W&auml;hlen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend w&auml;hlen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzuf&uuml;gen m&ouml;chten. Im n&auml;chsten Schritt k&ouml;nnen Sie noch die optionalen Zuschl&auml;ge Ihrer Buchung hinzuf&uuml;gen. Sobald Sie Ihre pers&ouml;nlichen Adressangaben vollst&auml;ndig ausgef&uuml;llt haben, k&ouml;nnen Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie noch best&auml;tigen m&uuml;ssen.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Buchungsdetails');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Einzelheiten zur Buchung w&auml;hlen');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Verf&uuml;gbarkeit ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Bitte Zimmer ausw&auml;hlen/abw&auml;hlen');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Pr&uuml;fen, ob die Unterkunft w&auml;hrend dieser Zeit verf&uuml;gbar ist.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Optionale Zuschl&auml;ge');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'W&auml;hlen Sie die gew&uuml;nschten Zuschl&auml;ge, die Sie Ihrer Buchung hinzuf&uuml;gen wollen');
jr_define('_JOMRES_COM_PERDAY', 'Pro Nacht');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Ihre Adresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Ihre pers&ouml;nlichen Angaben. Beachten Sie, dass s&auml;mtliche Felder außer die Handynummer ben&ouml;tigt werden');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Verf&uuml;gbare Zimmer');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Gew&auml;hlte Zimmer');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Der fr&uuml;hest m&ouml;gliche Anreisetag ist: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Pro Nacht:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Zimmerpreis:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Zuschl&auml;ge:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Steuer:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Erm&auml;ßigung:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Gesamtpreis:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'G&auml;ste');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klicken Sie hier, um dieses Zimmer zu Ihrer Auswahl hinzuzuf&uuml;gen');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klicken Sie hier, um dieses Zimmer von Ihrer Auswahl zu entfernen');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'G&auml;stetypen');
jr_define('_JOMRES_VARIANCES_TYPE', 'Typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'G&auml;stetyp, zB. Kinder 5 bis 10 Jahre, oder Student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Notizen');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Schreiben Sie hier Ihre Bemerkungen zu den verschiedenen G&auml;stetypen');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximum der Personen, die pro Gastyp erfasst werden d&uuml;rfen');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Prozentual');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Der berechnete Betrag wird als prozentualer Anteil des Tagesbetrags f&uuml;r dieses Zimmer berechnet. Wenn auf NEIN gesetzt, wird der vorgegebene Betrag zum Grundbetrag addiert oder subtrahiert.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Addiere Abweichung?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Der berechnete Betrag wird zum Grundbetrag des Zimmers addiert oder subtrahiert. Auf /Minus/ setzen, wenn es als Rabatt vom Grundbetrag eingesetzt werden soll. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Abweichung');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Betrag der Abweichung');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'G&auml;stetyp ge&auml;ndert');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'G&auml;stetyp gel&ouml;scht');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'G&auml;stetyp erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'G&auml;stetyp aktualisiert');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'G&auml;stetyp aktualisiert');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zeige Link zu den Zimmern in den Unterkunft-Details?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zeige <b>nur</b> Verf&uuml;gbarkeitskalender?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'W&auml;hlen Sie JA, wenn Sie die Anzeige f&uuml;r Unterkunftstitel und Beschreibung deaktivieren m&ouml;chten. Es ist dann nur der Verf&uuml;gbarkeitskalender der Zimmerliste sichtbar. Diese Option ist nur f&uuml;r Benutzer gedacht die Einzimmer-Unterk&uuml;nfte anbieten (zB. Wohnungen, Chalets etc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Ankunft/Abreisetag Mindest-Intervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimale Tagesanzahl zwischen Ankunfts- und Abreisetag.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Buchungsformular Zimmerliste Nummer anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Buchungsformular Zimmerliste Name anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Buchungsformular Zimmerliste Tariftitel anzeigen');
jr_define('_JOMRES_ORDER', 'Anordnung');
jr_define('_JOMRES_REQUIREDFIELDS', 'Ben&ouml;tigt ');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Anzahl Tage vor Ankunft');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Anzahl der Tage die von "heute" bis zum Ankunftstag gesperrt sind.');
jr_define('_JOMRES_DTV', 'Datumsvariante');
jr_define('_JOMRES_DTV_DOW', 'Wochentag');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Standard G&auml;stetyp');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardwert f&uuml;r den ersten G&auml;stetyp. Wenn mehrere G&auml;stetypen verwenden werden ist dies der verwendete Standardwert im verschickten Buchungsformular falls der Gast keine Wahl getroffen hat.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'K&ouml;nnen nur registrierte Besucher online buchen?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Leider k&ouml;nnen nur registrierte Benutzer online buchen. Hier klicken um sich zu registrieren. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Schriftfarbe f&uuml;r Links der aktuellen Buchungen');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Zellenfarbe f&uuml;r die Markierung der Wochenenden');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Zimmer ist gebucht');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Verdeckte Buchung');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Anzahlung auf die n&auml;chste Ganzzahl aufrunden?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Anzahlung verlangen?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Wochenpreis erheben?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ist diese Funktion aktiviert, wird der Einheitspreis als Wochenpreis angezeigt und pro Woche statt als Tagessatz berechnet.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Preis pro Woche');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fester Ankunftstag: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Wenn feste Ankunftszeiten gew&auml;hlt sind kann das Datum in der Dropdown-Liste ausgew&auml;hlt werden');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Falsches Ankunftsdatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Falsches Abreisedatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Der Buchungszeitraum ist zu kurz. Mindestanzahl der Tage zwischen Ankunft und Abreise:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ihr Intervall ist');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Gasttyp-Variante ung&uuml;ltig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'W&auml;hlen Sie Anzahl Personen/Typ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Zu große Anzahl f&uuml;r die verf&uuml;gbaren Preise in der Gruppe');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Mehr Zimmer gebucht als G&auml;ste vorhanden');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Zu viele G&auml;ste f&uuml;r die verf&uuml;gbaren Betten');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Mehr Zimmer w&auml;hlen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Ein Zimmer w&auml;hlen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Vorname ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Nachname ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Haus Nr/Name ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Straße ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Ort ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postleitzahl ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Land ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefonnummer ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Handynummer ben&ouml;tigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-Mail-Adresse ben&ouml;tigt');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Wir haben noch freie Pl&auml;tze!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Kein Zimmer ausgew&auml;hlt');
jr_define('_JOMRES_BOOKING_NUMBER', 'Buchungs Nr.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe f&uuml;r erfolgreiche Buchung');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Template Variablen &uuml;bernehmen?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Wenn diese Funktion aktiviert ist werden die DHTML Variablen von der FRONTEND Vorlage anstelle der Variablen dieser Seite &uuml;bernommen. N&uuml;tzlich, wenn bestimmte Elemente mit den Variablen der vorhandenen Vorlagen angezeigt werden sollen.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Prozentuale Abrechnung');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Auf JA stellen wenn der Preis f&uuml;r jede Person anteilig berechnet werden soll. Falls nein, wird ein Gesamtbetrag pro Buchung angezeigt.');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Link zur W&auml;hrungs-Umrechnungstabelle in Preisliste anzeigen?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'W&auml;hrungsrechner, aktueller Tagessatz f&uuml;r:');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Einheitliche Zimmerkonfiguration');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Allgemeines Suchlimit');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Maximum Anzahl Zimmer');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Hier festlegen wie viele Zimmer pro Unterkunft zur Verf&uuml;gung stehen');
// Introduced in v2.5
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'HTML-Editor f&uuml;r Benutzer erlauben?');
// Translate from here 2.6.2
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Verf&uuml;gbare Zimmer jetzt buchen: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Einheitlicher Editiermodus?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Vorsicht mit dieser Funktion. Falls JA betrifft es alle Textkonstanten systemweit. Einzelne Unterk&uuml;nfte k&ouml;nnen dann keine eigenen Textkonstanten editieren.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Einheitliche W&auml;hrung benutzen?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Auf JA setzten damit alle Unterk&uuml;nfte die gleiche W&auml;hrung verwenden (z. B. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Einheitliches W&auml;hrungssymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponente gewrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Auf JA setzen wenn Module und Header nicht sichtbar sein sollen');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Nur Wochenenden');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Wochenend-Tage');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Tage f&uuml;r Wochenende einstellen. Tarife, die Wochenenden erlauben oder verbieten &uuml;bernehmen diese Einstellungen in die generierte Zimmerliste.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Land ausw&auml;hlen bevor die Unterkunft-Informationen eingeben werden.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', '&Auml;nderungen vor dem hochladen eines Unterkunftsbilds speichern.');
jr_define('_JOMRES_TARIFFSFROM', 'Preise ab ');
jr_define('_JOMRES_SEARCH_ALL', 'Alle');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Suche nach Land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Suche nach Region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Suche nach Stadt');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Suche Eigenschaft.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Suche');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Suchwort in die Textbox eingeben und den Button dr&uuml;cken.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Suchwort(e): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Gew&uuml;nschtes An- und Abreisedatum eingeben und den Button dr&uuml;cken um Unterk&uuml;nfte zu finden die frei Kapazit&auml;ten zum gew&uuml;nschten Zeitpunkt haben.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Unterkunft Typ');
jr_define('_JOMRES_SEARCH_RTYPES', 'Zimmertyp');
jr_define('_JOMRES_SEARCH_PROPERTYNAME', 'Bezeichnung');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Voreinstellung');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Unterkunft Name');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Unterkunft Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Unterkunft Stadt');
jr_define('_JOMRES_SORTORDER_STARS', 'Sterne');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Unterkunftsdetails');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Buchungsformular');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Adressangaben aktualisieren');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-check der Zimmer-Verf&uuml;gbarkeit<br/>(Zimmerauswahl wird zur&uuml;ckgesetzt)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-check der Verf&uuml;gbarkeit');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', '&Auml;nderung der optionalen Extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', '&Auml;nderung der Zimmerauswahl');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Aktualisierung der Adressangaben');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Leider sind eines oder mehrere Adressfelder fehlerhaft.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Zimmerbild');
jr_define('_JOMRES_CURRENCYFORMAT', 'W&auml;hrungsformat');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Suchoptionen');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Vorhandene Logs');
jr_define('JOMRES_COM_A_MESSAGE', 'Nachrichten');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Erweitert');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microverwaltung');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tarif-Konfiguration-Modus');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Warnung: Der Wechsel zwischen den verschiedenen Tariftypen kann zu Datenverlust f&uuml;hren. Bitte folgende Hinweise beachten.</b>.
<br/><br/>
Es gibt drei M&ouml;glichkeiten die Preisberechnung zu konfigurieren.<br/>
Normal: Ein f&uuml;r die n&auml;chsten 10 Jahre g&uuml;ltiger Preis f&uuml;r jeden Raumtyp.<br/>
Microverwaltung: F&uuml;r jeden Tag, jeden Raum-/Unterkunftstyp und alle Kombinationen daraus kann ein modifizierter Preis ausgegeben werden. <br/>
Erweitert: Die \"alte" Methode mit der Jomres die Preise berechnete. <br/>
<br/>
Die verschiedenen Preismodi erlauben eine Methode zur Preisgestaltung zu w&auml;hlen die die eigenen Anforderungen am besten umsetzt.<br/>
Der Normalmodus ist die einfachste und leicht verst&auml;ndlichste Methode, da sie nur Kreuzreferenzen zwischen Preisen und Raum-/Unterkunftstypen erstellt und erlaubt R&auml;ume und Preise auf der selben Seite zu konfigurieren.<br/>
Microverwaltung erlaubt die Preise auf einer t&auml;glichen Basis zu variieren ohne Unmengen von Tarifen zu erstellen. Es werden Kreuzreferenzen zwischen verschiedenen Tarifen erstellt. Daraus resultiert eine Anzahl von Tarifen die zur Abdeckung einer Zeitperiode dienen, sich aber nicht &uuml;berlappen k&ouml;nnen.<br/>
Der erweiterte Modus erlaubt einen Raum zu erstellen und mit einem Raumtyp zu verbinden. Es wird dann ein Tarif erstellt und DIESER mit einem Raumtyp verbunden. Diese Methode erlaubt jeden anderen Tarif zu "&uuml;berlagern", z.B. ein Raumtyp "Doppelbett" kann einen Preis f&uuml;r &Uuml;bernachtung und Fr&uuml;hst&uuml;ck haben und einen anderen Preis f&uuml;r &Uuml;bernachtung, Fr&uuml;hst&uuml;ck und Abendessen. Die erweiterte Methode erfordert etwas mehr Sorgfalt im Detail weil es m&ouml;glich ist einen Raum oder Tarif vom Raum-/Unterkunftstyp zu entkoppeln, oder ung&uuml;ltige G&uuml;ltigkeitszeitr&auml;ume zu erstellen. Sie bietet aber Konfigurationsm&ouml;glichkeiten die in den anderen Modi nicht gegeben sind.<br/>
<br/>
Da Normalmodus und Microverwaltung eine spezielle Konfiguration der R&auml;ume und Tarife ben&ouml;tigen um die Berechnungen durchzuf&uuml;hren kann es sein, dass das System einige Daten zur&uuml;cksetzen muss um die augenblickliche Konfiguration der Tarife mit dem aktiven Tarif-Editor kompatibel zu machen.
<br/>
<br/>
Normal -> Erweitert. Keine &Auml;nderung. Die vorhandenen Preise bleiben erhalten.<br/>
Normal -> Microverwaltung. Alle vorhandenen Preise werden gel&ouml;scht.<br/>
Erweitert -> Normal. Alle vorhandenen Preise werden gel&ouml;scht.<br/>
Erweitert -> Microverwaltung. Alle vorhandenen Preise werden gel&ouml;scht.<br/>
Microverwaltung -> Erweitert. Alle vorhandenen Referenzen zu den Preisen werden entfernt, aber die Preise selber bleiben bestehen.<br/>
Microverwaltung -> Normal. Alle vorhandenen Referenzen und Preise werden gel&ouml;scht.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Zimmerliste in Unterkunfsdetailsseite anzeigen?');
jr_define('JOMRES_PROPERTYTYPE', 'Unterkunftstyp');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max Personen pro Zimmer');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max Personen pro Buchung');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Notiz hinzuf&uuml;gen');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Notiz bearbeiten');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Notiz l&ouml;schen');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notiz anzeigen');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Notiz hinzuf&uuml;gen');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Notiz bearbeiten');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Notiz l&ouml;schen');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Buchungsliste');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Meine Buchungen');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Buchung anzeigen');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favoriten anzeigen');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Es sind noch keine Favoriten eingetragen.');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Unterkunftsart');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Lastminute');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktiv');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Dieses Plugin erm&ouml;glicht den Unterkunftspreis dynamisch zu generieren.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Die meisten Betriebe kalkulieren die Zimmerpreise einer bestimmten Kategorie im Verh&auml;ltnis zur Verf&uuml;gbarkeit zu einem bestimmten Zeitraum. Das bietet die M&ouml;glichkeit Nachl&auml;sse f&uuml;r schlecht gebuchte Zimmertypen einzur&auml;umen um die Belegung zu erh&ouml;hen.<br/>Wird dieses Plugin aktiviert k&ouml;nnen f&uuml;r bestimmte Tage und Zimmertypen von der Anzahl der verf&uuml;gbaren Zimmer abh&auml;ngige Preise gestaltet werden.<br/>Der Tages-Grenzwert definiert die Anzahl der Tage innerhalb deren das Ankunftstag liegen muss bevor die Zimmerpreise durch dieses Feature angepasst werden. Mit den Prozentwerten kann die Belegung der entsprechenden Zimmer konfiguriert werden ab der ein vorgegebener Nachlass angewendet wird.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Tagesgrenzwert (Anzahl Tage von heute bis Ankunft)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Prozent belegter R&auml;ume 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Prozent belegter R&auml;ume 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Prozent belegter R&auml;ume 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Prozent belegter R&auml;ume 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabatt %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ist erm&auml;ßigt ab ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' bis ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Raumpreis ist nicht erm&auml;ßigt ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google Map API Schl&uuml;ssel');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Google-Key verf&uuml;gbar auf <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Wenn hier der Google-Key eingegeben ist zeigt Jomres eine Karte in den Unterkunftsdetails.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last Minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiv?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Falls Ja sind Last Minute Angebote m&ouml;glich.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Grenzwert');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Bei einer Buchung innerhalb von N Tage bis zum Ankunftsdatum wird eine Erm&auml;ßigung gew&auml;hrt.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Erm&auml;ßigung');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In Prozent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'F&uuml;r diese Buchung wurde eine Erm&auml;ßigung berechnet!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Der Betrag dieses Aufenthalts wurde erm&auml;ßigt um ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'F&uuml;r diese Unterkunft ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% Erm&auml;ßigung wenn das Ankunftsdatum der Buchung vor ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% oder mehr Erm&auml;ßigung wenn das Ankunftsdatum vor ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Jetzt buchen, um den diesen Preis zu erhalten!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Ausf&uuml;hrliche Preisinformationen');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Falls Ja, werden weitere Preisinformationen in einem Popup Fenster angezeigt');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Konfigurationsoptionen begrenzen');
jr_define('_JOMCOMP_AMEND', 'Buchung anpassen - Auswahl Unterkunft');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Neue Unterkunft w&auml;hlen');
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Auftrag:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Anzahlung');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Ausstehende Anzahlung');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Korrigiert Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Korrigiert Anzahlung');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Abbrechen');
jr_define('_JRPORTAL_CPANEL', 'Konfiguration');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Standard Provision');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Die Standard Provision w&auml;hlen, die f&uuml;r den Fall angewendet wird, dass an keiner anderer Stelle eine Provision eingegeben wurde.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Liste der Provisionen');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Provisionen');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titel');
jr_define('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define('_JRPORTAL_CRATE_VALUE', 'Provision');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'W&auml;hrungscode');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Unterkunft anzeigen');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Unterkunftsname');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Unterkunftsadresse');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'F&uuml;r Unterk&uuml;nfte die Rot hinterlegt sind wurde die Provision noch nicht verbucht.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistik');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provision');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Buchungen auflisten');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Unterkunft NR.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Rechnung NR.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Gesamte Buchungen');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Archiviert Datum');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beschreibung');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Es k&ouml;nnen auch Unterkunft spezifische Sprachdateien in einem Unterordner angelegt werden, z.B. "Medienvermietung" indem die Sprachdatei in den Unterordner kopiert wird. Anschließend die Inhalte der Sprachdatei auf die zu vermietenden Objekte anpassen, z.B. DVDs, CDs etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Diese Unterkunft kann nicht gel&ouml;scht werden da sie die einzige ist auf die noch Zugriff besteht. Wenn diese Unterkunft nicht angezeigt werden soll, in der Statusleiste auf unver&ouml;ffentlicht setzen. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Unterkunft Total');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Nacht/N&auml;chte zum');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'pro Zimmer ');
/*
* @ignore
*/
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Extras Gesamt ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Preis Zusammenfassung ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Bitte lesen und Einverst&auml;ndnis erkl&auml;ren ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Im Folgenden eine Zusammenfassung Ihrer Buchung.<br /> Um &Auml;nderungen vorzunehmen, bitte auf den Knopf "Reservierung &auml;ndern" klicken. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Sollen die oben genannten Informationen ge&auml;ndert werden, dann bitte hier klicken');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Reservierung &auml;ndern.');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Besondere W&uuml;nsche bitte in das unten stehende Feld eingeben.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Ich best&auml;tige, dass die vorstehenden Angaben richtig sind und bin einverstanden mit den ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'pro Person pro Nacht ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'von');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Zur&uuml;ck');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Weiter');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Ende');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Ergebnis');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Bitte beachten Sie, dass dies kein Buchungsformular ist.<br/>Hier die Nachricht schreiben die &uuml;bermittelt werden soll, an: ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Unterkunft Anfrageformular ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Vielen Dank f&uuml;r Ihre Anfrage. Die Nachricht wurde an die entsprechende Kontaktadresse und an Ihre angegebene E-Mailadresse zur Kenntnisnahme geschickt. Ihr Anliegen wird schnellst m&ouml;glich bearbeitet.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' Betreff ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Anfrage');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'F&uuml;r diesen Zeitraum haben wir leider keine freien Pl&auml;tze!');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Bitte aus der Liste rechts die gew&uuml;nschte Unterkunft ausw&auml;hlen');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. R&auml;ume die gew&auml;hlt sind');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimale Anzahl der Zimmer die bereits vor Buchung in ausgew&auml;hlter Tarif-/Zimmerart-Kombination angeboten werden k&ouml;nnen. Erm&ouml;glicht Erm&auml;ßigungstarife auch wenn bereits mehr als N Zimmer ausgew&auml;hlt sind. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max. R&auml;ume bereits gew&auml;hlt');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximale Anzahl der Zimmer die bei der Buchung schon ausgew&auml;hlt sein d&uuml;rfen bevor die Tarif-/Zimmerart-Auswahlbox nicht mehr angezeigt wird. Erlaubt die Tarif-/Zimmerart nicht mehr anzubieten wenn bereits N Zimmer im Buchungsformular ausgew&auml;hlt sind. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Bitte beachten, dass Einzelzimmerzuschl&auml;ge die in der allgemeinen Konfiguration auf Ja gesetzt sind hier nicht verwendet werden. Die Einstellungen hier sind eine Alternative zu den Pauschals&auml;tzen. Die Betr&auml;ge werden nicht zu den pauschalen Unterkunftss&auml;tzen (SPS) addiert.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Frei');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Einige Buchungen');
jr_define('_JOMRES_AVLCAL_HALF', 'zur H&auml;lfte gebucht');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Oft gebucht');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Ausgebucht');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'pro Woche');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'pro Tag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'pro Buchung');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'pro Person pro Buchung');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'pro Person pro Tag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'pro Person pro Woche');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'pro Tag (min. Tage)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'pro Tag X R&auml;ume gew&auml;hlt');
jr_define('_JOMRES_REGISTRYREBUILD', 'Registrierung der Minikomponente neu aufbauen');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalerweise wird die Jomres Plugin Registrierung automatisch wieder hergestellt, wenn im Plugin-Manager ein Plugin hinzuf&uuml;gt oder entfernt wird. Es kommt vor, dass Sie dieser Automatismus, aus welchem Grund auch immer, nicht ausgel&ouml;st wird. Mit dieser Funktion kann die Wiederherstellung manuell ausgel&ouml;st werden. Wenn Zugriff auf den Plugin-Manager und die Upgrades Funktion beseht ist es unwahrscheinlich, dass diese Funktion jemals ben&ouml;tigt wird. Die Registrierung muss jedes Mal wiederhergestellt werden wenn eine neue Mini-Komponente hinzugef&uuml;gt wurde.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Die Registereintr&auml;ge wurden erfolgreich aktualisiert');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Es gab ein Fehler bei der Aktualisierung im Register der Minikomponente. Bitte den Jomres Fehlerreport &uuml;berpr&uuml;fen ob der Fehler verzeichnet ist.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Suche nach Preis.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Sie noch keine Buchungen get&auml;tigt!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Unterkunfts-Typ bearbeiten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'W&auml;hlen Sie Ihren Unterkunfts-Typ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ihre Frage...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Maximum Unterk&uuml;nfte in der Liste');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Anzahl Unterk&uuml;nfte die nach einer Suche pro Seite angezeigt werden sollen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'eingebaute Suchfunktion');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Die in Jomres integrierte Suchfunktion erm&ouml;glicht es den Nutzern, die Suche in den Unterk&uuml;nften von Jomres mit einer Reihe von Funktionen durchzuf&uuml;hren. Nutzern die bereits mit der Suchfunktionen von Jomres in Joomla gearbeitet haben wird der Umgang damit vertraut sein. <br/> Diese Funktion erm&ouml;glicht es, die Suche innerhalb von Jomres f&uuml;r die Benutzer anzubieten, die das Joomla Suchmodul nicht verwenden wollen, bzw. f&uuml;r Nutzer anderer CMS die keine Suchfunktion haben. <br/> Es ist anzumerken, dass bei einer Suche &uuml;ber einen Link (z.B nicht &uuml;ber das Drop-Down), andere Suchoptionen nicht inbegriffen sind, sondern nur das Element das mit dem geklickten Link korrespondiert.<br/> Das Layout dieser integrierten Suche ist nicht besonders sch&ouml;n, da im Template, das f&uuml;r das Aussehen verantwortlich ist, alle m&ouml;glichen und teilweise inkompatible Optionen ber&uuml;cksichtigt werden m&uuml;ssen.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Diese Funktion aktivieren?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ist diese Funktion aktiviert werden bei jedem Aufruf von Jomres mit Listendarstellung der Unterk&uuml;nfte auch die Suchoptionen angezeigt.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Zeilen verwenden');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Jede Suchoption, welche Sie als Link definiert haben (dort wo eindeutig erkennbar) wird als Spaltenauflistung angezeigt (f&uuml;r IE setze ein br am Ende des Links)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Suche nach der Region mittels Auswahlfeld');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Zeigen Sie das Such-Auswahlfeld zum Filtern von L&auml;nder/Regionen/St&auml;dten an. Falls Sie diese Funktion verwenden wollen, benutzen Sie lieber die unten aufgef&uuml;hrte Suche nach Region/Stadt nicht.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Suche nach Unterkunftsname');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Zeige Suchergebnis nach Eingabe des Unterkunftsnamens an.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Als Auswahlfeld anzeigen?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Suche nach Stadt/Region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Zeige Suchergebnis nach Region an');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Als Auswahlfeld anzeigen?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Suche nach Unterkunfts-Typ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Zeige Suchergebnis nach Unterkunfts-Typ an');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Als Auswahlfeld anzeigen?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Suche nach Raum-Typ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Zeige das Suchergebnis nach Raum-Typ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Als Auswahlliste anzeigen?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Suche nach Funktionen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Zeige das Suchergebnis nach Funktionen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Als Auswahlliste anzeigen?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Tooltipbild und Checkbox anzuzeigen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Suche nach dem Beschreibung');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Zeige das Suchergebnis nach dem Beschreibung');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Suche nach Verf&uuml;gbarkeit');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Zeige das Suchergebnis nach Verf&uuml;gbarkeit');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Suche nach Preisschritten');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Zeige das Suchergebnis nach Preisschritten');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Preisschritte');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres wird auf allen Werten der Tarifauflistung eine Reihe von Preisspannen hinzurechnen, aufgrund des Wertes, den Sie hier eingeben.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Per Voreinstellung f&uuml;hrt Jomres eine Suche durch wenn keine Unterkunft gew&auml;hlt ist. Wenn diese Suche nicht durch ein Suchmodul unterst&uuml;tzt wird werden (absichtlich) zuf&auml;llige Ergebnisse ausgegeben. Die Anzahl der ausgegebenen Unterk&uuml;nfte kann mit dieser Option begrenzt werden.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cronjob Einstellungen und Logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron-Job Information. Die Pseudocron Funktionalit&auml;t wird zur Rechnungsstellung und Provisionsberechnung ben&ouml;tigt.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installierte cron Minicomponenten. Zum Start eines individuellen cron job einen der unten spezifizierten Links ben&uuml;tzen. Die cron jobs produzieren keinerlei Ausgaben und es sind keine Informationen auf der Seite sichtbar. In den unten stehenden logs k&ouml;nnen die Daten &uuml;berpr&uuml;ft werden.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Methode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Falls Sie keine Cronjobs auf dem Server ausf&uuml;hren k&ouml;nnen auf Minikomponente stellen, andernfalls erstellen Sie einen Cronjob und geben Sie folgendes an:<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Zeige logging im Browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funktioniert nur, wenn auf Minikomponente gestellt ist.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging aktiviert');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ja, um das Logging zu aktivieren. Das Ergebnis der Logs wird unten angezeigt.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Logging verbergen');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Zuviele Logging Ausgaben');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Bearbeitung');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Eigene Felder');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Hier k&ouml;nnen einfache individuelle Felder definiert werden die im Buchungsformular erscheinen.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Feldname (ohne Abstand)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardwert');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beschreibung');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'ben&ouml;tigt');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Menge');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Falls die maximale Menge gr&ouml;ßer 1 ist wird ein Auswahlfeld mit der maximalen Anzahl f&uuml;r die Extras angezeigt.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'MwSt Betrag');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Steuersatz');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Ratenbeschreibung');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Dieser Steuersatz kann nicht gel&ouml;scht werden.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Satz');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Rechnungen');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Unbezahlte');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Bezahlt');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Storniert');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Ausstehend');
jr_define('_JRPORTAL_INVOICES_USER', 'Benutzer');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Erstellt');
jr_define('_JRPORTAL_INVOICES_DUE', 'F&auml;llig');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonnement');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Gesamtbetrag');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Mehrf. Zeitraum');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Wiederh. Tag d. M.');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'W&auml;hrungscode');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Belegpositionen');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Bez.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Beschr.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Basispreis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Basiszahl');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Nachlass Erstauftr.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Gesamt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Steuercode');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Steuer');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Satz');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Jomres Standard-Gateway-Einstellungen &uuml;berschreiben?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Meine Rechnungen anzeigen');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Rabatte');
jr_define('_JRPORTAL_COUPONS_DESC', 'Als Anreiz zur Buchung, k&ouml;nnen den G&auml;sten Rabattangebote gemacht werden. G&uuml;ltig f&uuml;r einem bestimmten Buchungszeitraum, nicht f&uuml;r das Datum einer Buchung selbst.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Rabatt Code');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'G&uuml;ltig von');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'G&uuml;ltig bis');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Rabattbetrag');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabatt in Prozent');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'nur Zimmer');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Bitte geben Sie den Couponcode ein und klicken Sie auf "Coupon speichern" um den Nachlass Ihrer Buchung gut zu schreiben.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Coupon speichern');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Nachlass vor der Buchung gespeichert');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon nicht gefunden');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Wert des Coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Verg&uuml;nstigte Buchung. Couponcode/-wert Einstellungen: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Sprache w&auml;hlen');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Im Auswahlfeld die Sprache w&auml;hlen.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Sprachauswahlfeld anzeigen?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sehr geehrte(r)');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', '<br>Vielen Dank f&uuml;r die Registrierung ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', '<br>Ihr Benutzername lautet: ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', '<br>Ihr Passwort lautet: ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', '<br>Um Ihre Buchungen anzusehen, loggen Sie sich bitte unter folgender Adresse ein: ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon gespeichert');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon gel&ouml;scht');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Benutzer');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Passwort');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API ID');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Handynummer f&uuml;r Benachrichtigungen');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Bitte verwenden Sie folgendes Fotmat "L&auml;nder Code, Handynumber". Die UK Nummerreihenfolge w&uuml;rde z.B so aussehen wie "447979123456". Lassen Sie dieses Feld leer, wenn Sie keine Benachrichtigung per SMS erhalten wollen.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', '
<b>Offenbar wollen Sie das auf Ihrem localhost ausprobieren. Sie k&ouml;nnen das aber nur auf einem "live" Server verwenden.</b>
<br/>
<br/>
Um den Clickatell-Gateway zu verwenden, ben&ouml;tigen Sie ein Clickatell Konto und mindestens eine registrierte Verbindung (API Unterproduktinstanz ) zwischen der Anwendung und unser Tor. Jede Verbindung
Verfahren wird als Teilprodukt bekannt. Hier ist wie:<br/>
<br/>
<b>Schritt 1 - er&ouml;ffnen Sie ein Clickatell Konto</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Schritt 2 - f&uuml;gen Sie die API Kennung ins Feld ein (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select "Manage my Products" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ("Add Connection").<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You\'ll need to set the IP callback to ' .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection\'s unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Raum Buchungsformular f&uuml;r Behinderte anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Raum Buchungsformular max. Personen anzeigen');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Bitte beachten Sie, dass die Zimmerpreise nur Sch&auml;tzungen sind und der effektive Buchungspreis nicht berechnet wird, bis Sie ein Zimmer oder mehrere Zimmer zu Ihrer Auswahl hizugef&uuml;gt haben.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnemente');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Name');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beschreibung');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Ver&ouml;ffentlicht');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Komplette Geb&uuml;hr');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Objekt Limit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Anmelden');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Verwenden Sie die Abonnierungs-Funktionalit&auml;t');
jr_define('_JOMRES_COM_NEWUSER', 'Erstelle bei der Buchung einen neuen Benutzer');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Bei der Buchung eines unregistrierten Benutzers automatisch ein Benutzerkonto erstellen.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klicken Sie hier, um Ihre Unterkunft zu registrieren');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Vielen Dank f&uuml;r Ihre Buchung - Die Benutzerdetails folgen in K&uuml;rze');
jr_define('_JOMRES_LATLONG_DESC', 'Bewegen Sie den Mauszeiger mit der Maus über die Karte und ziehen Sie ihn auf die Position Ihrer Immobilie, um den Breiten- und Längengrad einzustellen.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrollzentrum');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Rechnung anzeigen');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Rechnungen anzeigen');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Meine Unterkunft in dieses WEB einf&uuml;gen');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Warnung: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Leider wird diese Paket ID nicht erkannt.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sie haben bereits ein freies Paket abonniert und k&ouml;nnen das kein zweites mal tun.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Betriebsdaten');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Betriebsname');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Steuernummer');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Geb&auml;ude');
jr_define('_JOMRES_INVOICE_NUMBER', 'Rechnungsnummer ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Bitte Daten f&uuml;r die Blankobuchung festlegen. Wenn die passenden Daten gew&auml;hlt sind den "Anwenden" Knopf klicken um erneut die Verf&uuml;gbarkeit zu &uuml;berpr&uuml;fen. <br/>
<br/>
Falls f&uuml;r die Unterkunft eine oder mehrere Buchungen f&uuml;r den gew&auml;hlten Zeitraum vorliegen kann nur gebucht werden bevor die entsprechenden Buchungen / Blankobuchungen gel&ouml;scht oder ausgebucht sind.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Leider ist eine Blankobuchung dieser Unterkunft mit den gew&auml;hlten Daten nicht m&ouml;glich.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Eine Blankobuchung f&uuml;r diese Unterkunft mit den gew&auml;hlten Daten ist m&ouml;glich.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Die Unterkunft ist zur Rechnungsstellung pro Person und Nacht konfiguriert aber es ist noch kein Gasttyp eingerichtet bzw. publiziert. Bitte einen oder mehrere Gasttypen erstellen und publizieren. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'So lange noch kein Tarif konfiguriert ist k&ouml;nnen keine Buchungen f&uuml;r diese Unterkunft angenommen werden.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Editiermodus aktiviert');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Editiermodus deaktiviert');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Variable Vorsch&uuml;sse?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable Vorsch&uuml;sse erlauben den gesamten Vorschuss zu f&auml;llig zu stellen wenn der Ankunftstag der Buchung unterhalb von N Tagen von heute an liegen. Auf Ja setzen um die Option zu aktivieren und die Anzahl der Tage unten einstellen. Damit wird zum Beispiel der komplette Buchungsbetrag sofort f&auml;llig wenn der Ankunftstag innerhalb von 60 Tagen liegt, andernfalls die Anzahlung nach den festgelegten Kriterien.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Die Anzahl der Tage innerhalb derer der gesamte Buchungsbetrag als Anzahlung f&auml;llig wird.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Eine Best&auml;tigungs-Mail zur wurde gesendet. Das Fenster kann jetzt geschlossen werden.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Rechnung als bezahlt markieren');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Rechnung als bezahlt markiert');
jr_define('_JOMRES_APIKEY_REMAKE', 'Neuen API-Key erzeugen');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Einzelunterkunft-Installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Diese Option vereinfacht die Frontend-Ansicht f&uuml;r nicht autorisierte Anwender erheblich. Voreingestellt wird Jomres nicht mit einer Liste der Unterk&uuml;nfte sondern mit dem Buchungsformular der ersten Unterkunft im System aufgerufen. Auch Unterkunfts-Manager erhalten nicht die Auswahlkn&ouml;pfe f&uuml;r Unterkunft Eigenschaften und Hinzuf&uuml;gen. Das ist ideal wenn nur eine Unterkunft aufgelistet und Buchungen daf&uuml;r angenommen werden sollen.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Rechnungssaldo');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Hinweis! Sie ben&uuml;tzen den Edit-Mode w&auml;hrend der Globale Edit-Mode aktiviert ist. Das ist in Ordnung wenn Sie verstehen was Globaler Edit-Modus bedeutet. Falls nicht, k&ouml;nnten Sie sich selbst Probleme schaffen. Wenn Sie unsicher sind ob Sie Jomres auf diese Weise ben&uuml;tzen sollten, informieren Sie sich <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">zu diesem Thema im Handbuch</a>.');
jr_define('_JOMRES_SUPPORTKEY', 'Lizenzschl&uuml;ssel');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Die Support Lizenz Schl&uuml;ssel Nummer (auch als Lizenz Nummer bezeichnet). Es ist eine aktuelle Lizenz n&ouml;tig um Aktualisierungen und Plugins f&uuml;r Jomres laden zu k&ouml;nnen.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Individueller Preisnachlass');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Unterkunftsregistrierungen auf ein Land beschr&auml;nken?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ja, um Unterkunftsregistrierungen auf das Land zu beschr&auml;nken das im folgenden Feld ausgew&auml;hlt wird.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Unterk&uuml;nfte sind in diesem Land: ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery Thema');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Ein "jquery" Thema f&uuml;r die Darstellung der Unterkunfsteigenschaften ausw&auml;hlen.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Leider steht diese Unterkunft im Moment nicht zur Verf&uuml;gung.');
jr_define('_JOMRES_REVIEWS', 'Bewertungen');
jr_define('_JOMRES_REVIEWS_TITLE', 'Titel der Bewertung');
jr_define('_JOMRES_REVIEWS_DATE', 'verfasst am ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Bisher gibt es noch keine Bewertung f&uuml;r diese Unterkunft.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Wollen Sie als erster diese Unterkunft bewerten?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Durchschnitt der Stimmen: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Stimmen gesamt:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Neue Bewertung abgeben.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Um eine Bewertung abzugeben m&uuml;ssen Sie eingeloggt sein.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Teilen Sie uns Ihre Meinung zu dieser Unterkunft mit: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Dieser Gast teilte uns mit: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Zustimmung: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Ablehnung: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', '&Uuml;bermittelt am: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Sie haben diese Unterkunft bereits bewertet. Sie k&ouml;nnen keine zweite Bewertung dieser Unterkunft abgeben.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sie k&ouml;nnen leider keine Bewertungen in diesem WEB abgeben.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Klicken um die Bewertungen zu sehen');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' G&auml;ste stimmen dieser Bewertung zu. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' G&auml;ste stimmen dieser Bewertung nicht zu.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' Gast stimmt dieser Bewertung zu. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', ' Gast ist stimmt dieser Bewertung nicht zu.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Vielen Dank f&uuml;r die Teilnahme an dieser Bewertung.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Vielen Dank, aber Sie haben Ihre Meinung zu dieser Bewertung bereits mitgeteilt.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Bitte f&uuml;llen Sie alle Felder aus.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Bitte fassen Sie Ihre Bewertung in einem Titel zusammen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Bitte schreiben Sie eine ausf&uuml;hrlichere Bewertung in der Textbox');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Bitte teilen Sie uns Ihre positiven Erfahrungen mit die Sie als unser Gast hatten');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Bitte schildern Sie uns die negativen Eindr&uuml;cke bei Ihrem Aufenthalt');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Wurden Sie freundlich empfangen?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Gefielen Ihnen die R&auml;umlichkeiten?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Bitte beschreiben Sie die Sauberkeit der Unterkunft');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Empfanden Sie die Unterkunft als angenehm oder eher nicht?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Bitte bewerten Sie das Preis- Leistungsverh&auml;ltnis');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Bitte bewerten Sie den Service');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Zusammenfassung Bewertung');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ihre ausf&uuml;hrliche Bewertung');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Vielen Dank f&uuml;r Ihre Bewertung.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Vielen Dank f&uuml;r Ihre Bewertung. Sie wird bald m&ouml;glichst von einem unserer Moderatoren ver&ouml;ffentlicht.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Bewertungsfunktion von Jomres ben&uuml;tzen?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Bewertungen automatisch ver&ouml;ffentlichen?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Falls nein m&uuml;ssen Bewertungen manuell ver&ouml;ffentlicht werden.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Bewertungen in den Testmodus versetzen?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalerweise k&ouml;nnen Unterkunfts-Manager Unterk&uuml;nfte nicht bewerten. Im Testmodus ist das m&ouml;glich. Nat&uuml;rlich ist das in einem produktiven Umfeld nicht ideal.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Das ist eine Liste aller Unterk&uuml;nfte. Auf die Unterkunft klicken um deren Bewertungen zu sehen. Dort k&ouml;nnen die Bewertungen ver&ouml;ffentlicht und gel&ouml;scht werden.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Anzahl unver&ouml;ffentlichter Bewertungen');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Anzahl von Bewertungen');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Bewertung ver&ouml;ffentlichen/unver&ouml;ffentlichen');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Bewertung l&ouml;schen');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', '&Uuml;ber Bewertung berichten');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', '&Uuml;bersicht der Berichte');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Bitte geben Sie Ihren Bericht ein');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Finden Sie in dieser Bewertung objektive Fehler oder Ungenauigkeiten? Schicken Sie einen Bericht und wir &uuml;berpr&uuml;fen das f&uuml;r Sie.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Abschicken');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Bericht erstellt von ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Berichte werden von Benutzern erstellt die mit einer Bewertung nicht einverstanden sind. Die einzige M&ouml;glichkeit einen Bericht zu entfernen ist die beanstandete Bewertung zu l&ouml;schen.');
jr_define('_JOMRES_REVIEWS_RATING', 'Bewertung (1 = schlecht 10 = ausgezeichnet) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Freundlichkeit ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Situation ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Sauberkeit ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Unterkunft ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Preisw&uuml;rdig ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Service ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Bewertet von : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Bewertungen verstecken');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Buchungsformular in der Unterkunftsbechreibung anzeigen?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ja, um das Buchungsfomular in der Unterkunftsbeschreibung anzuzeigen. Mit Nein wird ein Link zum Formular statt des Formulars angezeigt.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Steuer inbegriffen?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ja, falls Steuer im Preis enthalten, sonst Nein.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras Steuer:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Die Wochentagsfelder bieten die M&ouml;glichkeit f&uuml;r jeden Tag der Woche einen speziellen Preis zu setzen. Ein Klick auf das entsprechende Feld setzt den Preis f&uuml;r diesen Wochentag im gesamten Zeitraum.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Die Datumsfelder und das Preisfeld bietet die M&ouml;glichkeit einen Preis f&uuml;r einen gegebenen Zeitraum fest zu legen. Nach der Auswahl von Anfangs- und Enddatum den Preis eingeben und "Preis setzen" klicken.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Beginn Zeitraum');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Ende Zeitraum');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Preis');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Preise setzen');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partner');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Zimmer ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'Gast(G&auml;ste). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Hier die Verteilung der G&auml;ste auf ihre Zimmer. Sollten Sie eine &Auml;nderung w&uuml;nschen k&ouml;nnen Sie das nach Abschluss der Buchnung im direkten Kontakt mit dem Unterkunftsgeber regeln. Beachten Sie, dass dadurch zus&auml;tzliche Kosten entstehen k&ouml;nnen.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Die Unterkunft ist nicht ver&ouml;ffentlicht, nur du kannst Sie aktuell sehen, aber niemand sonst.');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Standard Suchergebnis Sortierreihenfolge');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '&Auml;ndern Sie diese Option, um die Reihenfolge der standardm&auml;ßigen Pr&auml;sentation der Suchergebnisse zu &auml;ndern.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Zeige Suchergebnis-Sortierreihenfolge dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Zimmer Anzeigetyp Stil');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Wenn im Buchungsformular als Anzeigetyp „Klasisch“ gew&auml;hlt wurde, bieten Sie G&auml;sten einzelne Zimmer an. Beim Anzeigetyp „Zimmertypen“, w&auml;hlen G&auml;ste dagegen die Anzahl Zimmer vom Typ X (z.B. 2x Doppelzimmer).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klassisch');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Zimmertypen');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Kalender Wochenbeginn, Sonntag oder Montag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Nur Unterkunft G&auml;ste k&ouml;nnen rezensieren?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Setzen Sie diese auf Ja, wenn Sie Bewertungen nur von G&auml;sten erlauben m&ouml;chten, die bereits Gast in dieser Unterkunft waren.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Pro Zimmer');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'G&auml;ste pro Zimmer : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'G&auml;ste pro Buchung : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Anzahl der Zimmer');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Januar');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Februar');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'M&auml;rz');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Mai');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Juni');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Juli');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Oktober');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Dezember');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Setzen Sie dies auf Ja, um die Anzahl der verf&uuml;gbaren Optionen f&uuml;r Hausverwalter im Abschnitt der allgemeinen Konfiguration zu reduzieren. Dies ist n&uuml;tzlich, wenn Sie nicht m&ouml;chten, dass Hausverwalter an zu vielen Einstellungen rumspielen, stattdessen k&ouml;nnen sie die Datei jomres_config.php bearbeiten, um die Standard-Eigenschaft Optionen zu definieren.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Bitte w&auml;hlen Sie eine Option f&uuml;r Ihre Buchung');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Eigene Einstellungen');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Seitenvorschau');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partner Nachlass ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Suche Benutzer');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Geben Sie ein paar Zeichen ein, um einen Benutzer zu suchen.<br/> Wenn Sie einen Benutzer ausw&auml;hlen, so wird dieser automatisch als Partner hinzugef&uuml;gt und Sie werden auf die n&auml;chste Seite gef&uuml;hrt, auf der Sie dem Benutzer Unterk&uuml;nfte und Nachl&auml;sse zuordnen k&ouml;nnen.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Bestehende Partner');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'W&auml;hlen Sie einen Partner, welcher zur Partner-Administration-Seite gef&uuml;hrt werden soll.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Suche nach einer Unterkunft');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Geben Sie ein paar Zeichen des Namens der Unterkunft ein und w&auml;hlen Sie eine Unterkunft aus.<br/> Wenn Sie eine Unterkunft ausw&auml;hlen, wird diese dem Partner-Portfolio hinzugef&uuml;gt. Wie auch immer, werden die Partner jedoch keine Rabatte genießen, diese m&uuml;ssen Sie selbst einrichten.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuelle Objekte');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Klicken Sie auf eine Unterkunft um die Partner-Nachlass-Einstellungen f&uuml;r diese Unterkunft zu bearbeiten.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Dieses Konto wurde gesperrt, es ist derzeit nicht m&ouml;glich, Ihre Unterkunft(e) mit diesem Konto zu verwalten.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager Konto gesperrt');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager Konto wieder eingesetzt');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Hausverwalter Konto gesperrt wurde. So lange Ihr Konto gesperrt ist, sind Sie nicht in der Lage irgendeine Management-Funktion auszu&uuml;ben.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Manager Konto jetzt aktiv ist. Sie k&ouml;nnen nun damit fortfahren alle Unterkunfts-Management-Funktionen auszuf&uuml;hren. Bitte melden Sie sich mit Ihrem Konto an und stellen Sie sicher, dass alle entsprechenden Unterk&uuml;nfte aktiv sind. Danke.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Favoriten entfernen');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Buchungsdatenarchiv');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Das Buchungsdatenarchiv ist ein Roh-Daten-Auszug der Buchungsinformationen die nach dem Absenden des Formulars gespeichert wurden. Fahren Sie &uuml;ber ein Datum  um die Roh-Daten zu sehen. Die Informationen werden in der Tabelle XXX__jomres_booking_data_archive gespeichert.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Konto bearbeiten');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Bestehende Manager');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Suche nach G&auml;stezahlen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Zeige die Suche nach Anzahl-G&auml;ste Dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Suche nach Sternen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Zeige die Suche nach Anzahl-Sterne Dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Anzahl der G&auml;ste');
jr_define('_JOMRES_SEARCH_STARS', 'Anzahl der Sterne');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Anzahl der Unterk&uuml;nfte');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Lade Jomres jQuery Bibliothek?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Sie k&ouml;nnen dies auf NEIN setzten, wenn Sie eine Vorlage (Template) verwenden die jquery verwendet. Dies K&Ouml;NNTE jquery Konflikte bei einigen Vorlagen l&ouml;sen, aber nicht bei allen.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Vorschaubilder von hochgeladenen Bildern werden automatisch erstellt.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Kleine Vorschaubilder max. Breite (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Kleine Vorschaubilder werden in der Unterkunft-Listenansicht verwendet, w&auml;hrend mittelgroße Vorschaubilder im Unterkunfts-Kopf verwendet werden.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Kleine Vorschaubilder max. H&ouml;he (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Mittelgroße Vorschaubilder max. Breite (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Mittelgroße Vorschaubilder max. H&ouml;he (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Beschriftungs-&Uuml;bersetzung');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Provisions-Funktionalit&auml;t verwenden?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Setzen Sie dies auf Ja, um die Manager-Provision-Rechnungen zu zeigen, die bereits aufgesch&uuml;ttet wurden.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Provisionsabrechnungen f&uuml;r Manager-Buchungen erstellen?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Wenn ein Manager eine Buchung vornimmt, bedeutet das, dass auch eine Provisions-Rechnungsposition erstellt wird?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Soll ein Manager, bei Rechnungen die als ausstehend markiert sind, automatisch gesperrt werden?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatischer Sperr-Grenzwert');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Dieser Grenzwert betr&auml;gt die Anzahl an Tagen, die ein Manager Zeit hat um eine Rechnung zu bezahlen, bevor er gesperrt wird und seine Unterk&uuml;nfte deaktiviert werden.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Sprachkontext');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Benutzen Sie diese Option um den Sprachenkontext der Site zu &auml;ndern. Diese Funktionalit&auml;t erlaubt es Jomres Etiketten zu benutzen die dem aktuellen Fokus entsprechen. Wenn Sie z.B. ein Makler von Yachten sind, so erlaubt eine &Auml;nderung des Kontextes Jomres, das anzeigen von Etiketten aus einer anderen Sprachen-Datei. Zum Beispiel, wenn Sie den Kontext auf Yacht-Makler &auml;ndern, so wird Jomres zuerst versuchen die aktuelle Sprache zu finden, danach im Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages nach einem Unterverzeichnis mit dem Namen „yachtmakler“ suchen. Wenn die Datei der aktuellen Sprache existiert, so wird diese verwendet. Falls nicht, so versucht Jomres die englische Sprachdatei aus dem gleichen Verzeichnis zu verwenden. Falls dies fehlschl&auml;gt, so verwendet Jomres die Sprach-Datei der aktuell ausgew&auml;hlten Sprache aus dem Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Erweiterte Site Konfiguration');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Setzen Sie diese Option auf Ja, wenn Sie die erweiterten Website Konfigurationsm&ouml;glichkeiten nutzen m&ouml;chten. Wenn Sie gerade erst damit beginnen mit Jomres zu arbeiten, empfehlen wir Ihnen f&uuml;r das erste die Einstellung auf Nein zu belassen, da die Standard-Installation ausreichend genug ist um damit zu starten. Stattdessen sollten Sie Jomres dem Hauptmen&uuml; hinzuf&uuml;gen und sich als „admin“ im Frontend anmelden und beginnen Ihre Unterk&uuml;nfte zu konfigurieren. Bitte beachten Sie, dass viele der erweiterten Optionen nur Jomres Silver Installationen zur Verf&uuml;gung stehen. Jomres Lite Benutzer sind deshalb nicht in der Lage, den vollen Nutzen aus den Funktionen zu erhalten, die sie aktivieren.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Lade Jomres jQuery UI Bibliothek?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Preis (h&ouml;chster zuerst)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Preis (niedrigster zuerst)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Preis&uuml;bersicht und Sch&auml;tzungen sollten als: pro Nacht, pro Woche oder pro Monat bepreist werden?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', ' Pro Nacht');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', ' Pro Woche');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', ' Pro Monat');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', ' Pro Person');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'Woche(n) an ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'Monat(e) an ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Wie soll die Suchoption f&uuml;r die Anzahl Menschen arbeiten?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Betrifft alle Such-Module. Wenn Sie die Funktion „Suche nach Anzahl G&auml;ste“ nutzen, soll die Suchfunktion nach Unterk&uuml;nften suchen, deren Tarife Anzahl G&auml;ste kleiner gleich, exakte Anzahl Personen oder gr&ouml;ßer gleich entspricht? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Bitte warten Sie, Ihre Buchung wird bearbeitet und Sie werden auf die Paypal-Website umgeleitet.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Wenn Sie nicht innerhalb von 5 Sekunden automatisch zu Paypal weitergeleitet werden...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klicken Sie hier');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Buchung g&uuml;ltig ab');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Buchung g&uuml;ltig bis');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Gastname');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Gutscheincodes k&ouml;nnen generiert und an G&auml;ste gegeben werden, als Anreiz um Buchungen vorzunehmen.<br/>G&uuml;ltig von und bis Daten beziehen sich auf Daten an denen eine Buchung gemacht werden kann, w&auml;hrend Buchung g&uuml;ltig von/bis Daten, sich auf Daten beziehen, welche die Buchung abdecken muss, damit der Gutschein g&uuml;ltig ist. Wenn eine Buchung außerhalb dieses Zeitraums f&auml;llt, so gelten die normalen Tarife f&uuml;r die Tage die außerhalb des Zeitraumes liegen.<br/>Wenn Sie die Buchung einem bestimmten Gast zur Verf&uuml;gung stellen m&ouml;chten, w&auml;hlen Sie den Namen des Gastes aus der Dropdown-Liste aus, um den Gutschein auf diesen Gast zu begrenzen.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Mit Ihrem Gutschein, wurde diese Buchung reduziert von ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' auf ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Setzen Sie dies auf Nein, um das Laden der beiden jQuery UI Javascript und CSS-Dateien zu deaktivieren.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Lade Jomres jQuery UI CSS Bibliothek?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Setzen Sie dies auf Nein, um nur die jQuery UI CSS-Datei zu deaktivieren.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Gesamt inkl. MwSt.');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unver&ouml;ffentlichte Unterkunft');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Umwandlungsfunktion verwenden');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Verwenden Sie die Jomres Online-Conversion-Funktionalit&auml;t. Dies wird eine Konvertierung Dropdown bieten Benutzern Frontend, wo sie in der Lage sein wird, eine W&auml;hrung zu w&auml;hlen, die sie wollen, um Preise zu sehen angeboten in. Preis Ausgabe eingestellt wird, um die umgerechnete Preis von der Unterkunft gefolgt zu zeigen, die "native" Preis in Klammern.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Wir haben unsere besten Bem&uuml;hungen verwendet, um die genaueste und rechtzeitige Wechselkurse zu erhalten, die wir k&ouml;nnen. Unser Online-W&auml;hrungsumsrechnung Merkmal ist eine Dienstleistung zu Informationszwecken zur Verf&uuml;gung gestellt und ist nicht beabsichtigt, genaue Zahlen zu liefern. Dementsprechend k&ouml;nnen wir nicht garantieren, die Richtigkeit der Wechselkurse . Mit dieser Funktion sind Sie als vereinbart, dass jedes Vertrauen auf oder die Verwendung der Funktion Ratenkonvertierung erfolgt auf eigenes Risiko vollst&auml;ndig sein
.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'W&auml;hrungsumrechnung/W&auml;hrungscodes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Erkennung API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Um automatisch den W&auml;hrungscode Drop-Down-Set Jomres der Lage ist, einen kostenlosen Service zu nutzen IPinfoDB rief der Besuchers Land zu erfassen, jedoch m&uuml;ssen Sie f&uuml;r einen API-Schl&uuml;ssel zu registrieren unter <a href = "http://ipinfodb.com/register .php "target =" _ blank "> IPinfoDB </a> zuerst.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Fehlerbeseitigung');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Unterkunft exkl. Steuern');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Unterkunft inkl. Steuern');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Zimmer Steuern:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', '&Ouml;ffne das Buchungsformular');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Zur&uuml;ck zu den Unterkunftsdetails');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatsch ausgew&auml;hlt?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Restsumme (nach Anzahlung)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter Ressourcen nach ihren Eigenschaften.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Neueste Buchung vor');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'Sekunde');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'Minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'Stunde');
jr_define('_JOMRES_DATEPERIOD_DAY', 'Tag/e');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'Woche');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'Monat/e');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'Jahr/e');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'Dekade');
jr_define('_JOMRES_DATEPERIOD_S', 'n');
jr_define('_JOMRES_DATEPERIOD_AGO', 'erfolgt');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'ab jetzt');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Buchungen sind f&uuml;r den ganzen Tag?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Durch die System Buchungen Ressourcen aus der Nacht Standard, so eine Buchung aus dem ersten Januar'.date('Y', strtotime('next year')).' bis zum 2. Januar '.date('Y', strtotime('next year')).' deckt nur eine Nacht.Wenn Sie diese Option auf Ja, aber gesetzt ist, dann wird die Buchung ganze Tage decken statt, so dass eine Buchung an diesen Tagen an beiden Tagen abdecken w&uuml;rde und w&uuml;rde der Kunde f&uuml;r zwei Tage in Rechnung gestellt werden.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Pro Tag');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Pro Person pro Tag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Abholen');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'R&uuml;ckkehr');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'Tage (n) an');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Zur&uuml;ck Datum falsch');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Die Buchung ist zu kurz. Es muss zumindest diese viele Tage zwischen dem Pickup und R&uuml;ckkehrdaten zu sein:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pick-up / Return Mindestabstand');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Der minimale Abstand in das Buchungsformular zwischen der Abholung und dem Drop-off Termine. Ein Intervall von 1 bedeutet, dass kann die Abholung und R&uuml;ckgabe Daten auf den gleichen Tag festgelegt werden, was jedoch auf dem Mindestabstand noch abh&auml;ngig ist, die automatisch durch die Buchungsmaschine berechnet wird, wie er &uuml;berpr&uuml;ft die Tarife, die f&uuml;r den Buchungszeitraum g&uuml;ltig sind.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Preis&uuml;bersicht und Sch&auml;tzungen sollten pro Tag / pro Woche / pro Monat festgesetzt werden?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Pro Tag');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Wenige Tage vor dem Abholdatum');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Die Mindestanzahl der Tage, die von "heute", vor dem Abholtermin verstreichen muss,.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Setzen Sie dies auf yes, wenn Sie Vorbuchungen beschr&auml;nken m&ouml;chten (verwenden Sie das n&auml;chste Feld das Limit in Tagen zu setzen). Wenn Sie dies ja dann noch gesetzt, wenn der Benutzer mehr als n Tage im Voraus zu buchen versucht dann, ihre abholen Zeitpunkt wiederhergestellt werden, wird zu Tage Datum');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Zeige R&uuml;ckgabedatum Eingang?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Setzen Sie dies auf Nein, wenn Sie nicht die R&uuml;ckkehr Datum Eingabefeld zeigen wollen. Nur diese verwenden, wenn Sie wissen, was Sie tun, als das R&uuml;ckgabedatum der Buchungen werden immer an den Tag nach dem Abholdatum eingestellt werden.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Wenn Sie diese Option auf Ja gesetzt, dann werden Buchungen f&uuml;r einen festen Zeitraum eingenommen werden. Wenn dies auf Nein festgelegt ist, dann sicher, dass "Pick up Tag definiert" auf Ja nicht gesetzt ist (es sei denn, Sie speziell die Leute wollen zu zwingen, an einem bestimmten Tag der Woche abholen), sonst werden Sie nicht viele Links in der Verf&uuml;gbarkeit erhalten Kalender.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Vordefinierte abholen Tag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Nur an Standorten, feste Zeitbuchungen anbietet. W&auml;hlen Sie den Tag der Woche, die Pritschen muss gemacht werden, auf.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Feste abholen Tag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Feste abholen Daten wieder auftreten: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Ist die feste Abholtermine ausgew&auml;hlt werden, die Anzahl der Daten, die in den Daten der Dropdown-Liste angezeigt werden kann. Beachten Sie, dass die Liste der Daten wird keine Termine enthalten, wenn eine Buchung aufgrund fr&uuml;herer Buchungen nicht m&ouml;glich ist, und dass die Liste tats&auml;chlich doppelt so hoch sein wird, solange Ihre gew&auml;hlte Nummer, weil es eine &auml;hnliche Anzahl von historischen Daten haben (wo verf&uuml;gbar).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Pro Person, pro Tag');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'W&auml;hlen Sie Ja, wenn Sie pro Person pro Tag aufladen m&ouml;chten. Wenn nein, Kosten werden dann auf einer berechnet pro-Ressource-pro-Tag-Basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable Ablagerungen k&ouml;nnen Sie festlegen, ob Sie den vollen Betrag zu berechnen m&ouml;chte, wenn die Buchungen Datum abholen wird innerhalb von N Tagen ab "heute". Setzen Sie diese Option auf Ja, um die Funktion zu aktivieren, und geben Sie die Anzahl der Tage unten, so zum Beispiel, wenn der Pick-up Tag innerhalb von 60 Tagen, dann Betrag der Anzahlung wird der volle Betrag sein, sonst wird der Betrag auf der Grundlage Einzahlungsoptionen konfiguriert oben.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Die meisten Unternehmen werden Rohstoffpreise auf der Grundlage der Anzahl der Ressourcen einer erforderlichen Art neu zu berechnen, die zu einem bestimmten Zeitpunkt zur Verf&uuml;gung stehen. Dies erm&ouml;glicht es ihnen Rabatte auf eine Ressource / Branche anzubieten, die nicht besetzt w&auml;hrend eines bestimmten Zeitraums mit dem Ziel der Gewinnung von Unternehmen ist, die sonst &uuml;bersehen werden k&ouml;nnten. <br/> Aktivieren und konfigurieren Dieses Plugin erm&ouml;glicht es Ihnen einstellbare Preise anbieten basierend auf der Anzahl der Ressourcen eines ausgew&auml;hlten Typs sind im Gesch&auml;ft an einem bestimmten Tag zur Verf&uuml;gung. <br/> die Tage Schwelle die Anzahl der Tage festgelegt , dass die Abholtermin innerhalb sein muss, bevor Ressourcenpreise durch diese Funktion angepasst werden, dann sind die Prozents&auml;tze Optionen k&ouml;nnen Sie den Prozentsatz der Ressourcen zu konfigurieren, die zur Verf&uuml;gung stehen kann, bevor ein bestimmter Rabatt angewendet wird. Beachten Sie jedoch, wenn mehrere Ressourcen gebucht werden, dann wird die aktuelle H&ouml;he des Rabatts auf alle Ressourcen angewendet werden und wird nicht reduzieren, da mehr Ressourcen ausgew&auml;hlt werden.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (Anzahl der Tage zwischen abholen Datum und heute)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pick up Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'W&auml;hle heute');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Ausgew&auml;hlt');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Kehrt heute zur&uuml;ck');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Zur&uuml;ck &uuml;berf&auml;llig');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Hat nicht abgeholt');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Tage');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark eine Buchung abgeholt.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Markieren Sie eine Buchung zur&uuml;ck.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark eine Buchung abgeholt');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Markieren Sie eine Buchung zur&uuml;ck');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Kosten pro Tag: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Anzahl der Tage: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', '&Uuml;berschreibe den Gesamtpreis');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Speicher neuen Preis');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'E-Mail an neue Benutzer ihre Login-Daten?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Wenn der neue Benutzer anlegen Option auf Ja, Sie k&ouml;nnen diese Option auf Nein festgelegt , um sicherzustellen, dass sie ihre Login-Daten nicht per E-Mail, sobald der Benutzer erstellt wurde. Dies k&ouml;nnte n&uuml;tzlich sein, wenn Sie automatisch neue Benutzer zu einer Mailing-Liste hinzugef&uuml;gt werden, zum Beispiel, und wollen nicht wirklich Benutzer anmelden.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Zeigen Steuerausgang in das Buchungsformular Summen Zusammenfassung?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Verhindern Sie das Buchungsformular aus, welche die Steuerpreisfelder in der Summen&uuml;bersicht durch diese Option auf No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Stornierungs Threshold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Eingeloggt, registrierte G&auml;ste k&ouml;nnen ihre eigenen Buchungen stornieren. Hier k&ouml;nnen Sie den Schwellenwert festlegen, der in Tagen, wo die Buchung kann nicht nach einer bestimmten Anzahl von Tagen vor dem Ankunftsdatum storniert werden.');
jr_define('_JOMRES_EDIT_PROFILE', 'Editiere Profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Art der Unterkunft Beziehung');
jr_define('_JOMRES_IMAGE', 'Bild');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Klicken Sie auf einen Brief an alle Unternehmen mit diesem ersten Zeichen zu zeigen. Sobald Sie eine Liste von Eigenschaften haben, k&ouml;nnen Sie Provisionen auf diese Eigenschaften, oder klicken Sie auf den "Bearbeiten" Symbol zuweisen, die Unternehmen Statistiken anzeigen.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Bearbeiten Steuersatz');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Lizenz-Server-Passwort');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Lizenzserver Benutzername');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Wenn Sie einen Benutzernamen und ein Passwort auf dem Lizenzserver haben, geben Sie diese bitte hier. Dies wird Ihnen helfen Plugins zugreifen, die Sie berechtigt sind,. Wenn Sie eine g&uuml;ltige Support-Schl&uuml;ssel in das Feld oben eingegeben haben, dann ist es nicht notwendig, den Benutzernamen / Passwort hier zu liefern.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Diese Jomres Version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Die neueste Version Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Aufmerksam : Es gibt eine neue Version von Jomres zur Verf&uuml;gung, die Sie so bald wie m&ouml;glich beraten zu aktualisieren.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Willkommen in Jomres, wir w&uuml;nschen Ihnen viel Spaß mit Lieblings-Buchungssystem des Joomla. Wenn Sie m&ouml;chten, eine Jomres Starter, Business oder Enterprise-Lizenz erwerben, <a href="http://www.jomres.net/prices" target="_blank"> besuchen Sie bitte unsere Website</a> Informationen dar&uuml;ber, wie Sie aktualisieren k&ouml;nnen.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Dieses System ist ideal f&uuml;r jedes Szenario, sei es eine einfache Buchungsformular f&uuml;r eine einzelne Eigenschaft, bis hin zu einer Website, die mehrere Benutzer hat, in mehreren Sprachen, mit mehreren Eigenschaften. Bitte beachten Sie die "Hilfe" auf der linken Seite, einschließlich der "Getting Started" Seite, die Sie durch Ihre ersten Schritte leiten wird.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktive Unterkunft');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternative SMTP Einstellungen');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Setzen Sie diese Option auf Ja, diese Alternative SMTP-Einstellungen zu verwenden,. Eine zunehmende Anzahl von Web-Hosts erscheinen PHP Mail-Funktion zu blockieren, so k&ouml;nnen Sie w&auml;hlen, um die Mail-Einstellungen &uuml;bergehen , die Jomres von Ihrem Host nimmt CMS (in der Regel Joomla) und verwenden Sie die Einstellungen Ihrer Wahl hier.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternativer Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', '&Auml;ndere dies zu ihrem SMTP Mail Server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativer Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', '&Auml;ndere dies zu ihrem SMTP Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Abh&auml;ngig von Ihrem SMTP-Server-Einstellungen, m&uuml;ssen sie dieses Feld frei lassen, oder geben sie 'ssl' oder 'tls' ein. Fragen sie Ihren SMTP Provider wenn sie diese nicht wissen.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Benutze Authentifikation');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Wenn ihr SMTP Server einen Bentzer zum Login ben&ouml;tigt, setzen sie hier den Wert Ja. Der Benutzername und Passwort wird dann benutzt.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternativer Benutzername');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternatives Passwort');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Quick Info');
jr_define('_JOMRES_MENU_SHOW', 'Zeige');
jr_define('_JOMRES_MENU_HIDE', 'Verstecke');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Standart');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Jeder');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registriert');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Niemand');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Men&uuml; Zugangskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Diese Option erlaubt es zu definieren wer ein Plugin im Hauptmen&uuml; sehen darf. Typischerweise Benutzer Optionen 00009 sind sichtbar f&uuml;r regustrierte/ oder unregistrierte Seitenbesucher, 00010 Optionen sind generell f&uuml;r den Typ Reception und beinhalten Aktivit&auml;en die auf eine Tag zu Tag Basis dienen, w&auml;hrend 00011 Optionen f&uuml;r das Einrichten und Konfigurieren einer Unterkunft verwendet wird, weche aber nicht alzu oft erfolgen.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Rezeptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Volle Zugangskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Setzen Sie diese Option auf Ja, um die vollst&auml;ndige Zugriffskontrolle Funktion zu aktivieren, dann besuchen Sie die Access Control unter Systemwartung Zugriffskontrollen zu konfigurieren.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Beachten Sie jedoch, diese diese Einstellungen kontrollieren nicht die zugrunde liegenden Skripte, die sie eine Verbindung herstellen, so zum Beispiel, wenn Sie festgelegt <i>00009user_option_03_search</i> nach 'Manager'ein Benutzer, der Jomres noch kennt, kann anrufen j06000search.class.php durch Eingabe http://www.domain.com/index.php?option=com_jomres&task=search in der Adresszeile ihres Browsers. Dies ist beabsichtigt, da diese Men&uuml; Zugangskontrolle einfach kontrolliert, was im Jomres Hauptmen&uuml; zu sehen ist. Wenn Sie strengere Kontrollen m&uuml;ssen stellen Sie dann die Site Config -> Full Access Control-Option auf Ja und erneut die Men&uuml; Access Control.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Vollzugriffskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<stark>Diese Funktion ist nur f&uuml;r fortgeschrittene Benutzer. Wenn Sie nicht wissen, was es denn ist und nicht einen bestimmten Grund, es zu benutzen haben, kehren Sie zu Standortkonfiguration und stellen Sie die Full Access Control-Option auf Nein.</strong><br/>
	Mit dieser Funktion k&ouml;nnen Sie steuern, wer welche Mini-Komponenten zugreifen k&ouml;nnen (mit einigen Ausnahmen, die hart codiert in das System sind).Wenn die Zugriffsebene neben dem Namen des Skripts wird auf Standard eingestellt, dann mit dem Full Access Control Option auf Ja <strong>irgendjemand</strong> wenn Sie zugreifen k&ouml;nnen Skripte, die sie sollten daher nicht zugreifen k&ouml;nnen beabsichtigen, diese Funktion zu verwenden, m&uuml;ssen Sie die Zugriffskontrollpegel eingestellt f&uuml;r<stark>jeden</strong> Jomres Mini-Komponenten hier aufgelistet. Wenn Sie nicht wissen, was diese minicomponentes tun, dann raten wir Ihnen dringend, diese Funktion nicht zu verwenden, um alle.<br/>
	In Jomres folgen Zugriffsebenen eine Pyramide, so Super-Vermieter von mehr als Manager sind. Kurz gesagt: Super-Manager- > Manager > Receptionist > Eingetragen > nicht eingetragen. Also, wenn ein registrierter Benutzer Zugang zu einem minicomponente hat, tun dies Rezeptionisten, Manager und Super-Manager.<br/>
	Beachten Sie, dass Sie nicht &uuml;ber Administrator-Bereich minicomponentes steuern. Jeder im administrativen Bereich wird als ein vertrauensw&uuml;rdiger Benutzer, dass sein sie den Zugriff auf jedes Skript (vor allem diese) nicht blockiert werden sollen.
	');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warnung! Sie haben die volle Zugriffskontrolle aktiviert ist, jedoch haben wir die Zugriffskontrolleinstellungen gez&auml;hlt und verglichen sie mit der Anzahl der Mini-Komponenten, die kontrolliert werden sollten, und die beiden passen nicht auf, daher k&ouml;nnen Sie einige Skripte, die nicht kontrolliert werden. Dies k&ouml;nnte ein Sicherheitsproblem sein, und Sie werden aufgefordert , dies sofort zu beheben, indem Sie die Access Control-Funktion besuchen und &uuml;berpr&uuml;fen, ob die entsprechenden Ebenen angewendet wurden.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Benutzer mit Admin-Rechten auf diese Eigenschaft');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Ihre Mail Adresse');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta Title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta Beschreibung');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'F&uuml;ge Ihre Unterkunft hinzu : 2 von 2');
jr_define('_JOMRES_CART_TITLE', 'Meine Buchungsvorschl&auml;ge');
jr_define('_JOMRES_CART_INFO', 'Achtung, diese Buchungen sind noch nicht gespeichert. Wenn sie ausloggen oder ihre Session abgelaufen ist, sind diese verloren. Denken Sie daran, Ihre Buchungen zu best&auml;tigen!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Buchung(en) best&auml;tigen');
jr_define('_JOMRES_CART_OR', ' oder ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Speichere f&uuml;r sp&auml;ter');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Sie haben noch keine Buchungen gespeichert.');
jr_define('_JOMRES_CART_VIEWCART', 'Zeige View Korb');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Sprachdatei Unterverzeichnis');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standart Latitude Startpunkt');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Standart Longitude Startpunkt');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In der Google-Karte auf dem Grundst&uuml;ck bearbeiten Seite, bevor der Marker verschoben wurde, was sollte die Standard Breite / L&auml;nge Startpunkte ?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails werden von welcher Adresse gesendet?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Lassen Sie diese Option leer zu deaktivieren. Jomres die Hotels E-Mail-Adresse verwenden,(es) wenn E-Mails an G&auml;ste zu senden, aber Ihre E-Mail-Dienst kann keine E-Mails von beliebigen Adressen erlauben (das heißt sie nur E-Mails von einer autorisierten Adresse zulassen). Wenn das der Fall ist, dann k&ouml;nnen Sie diesen Eingang eine Adresse einzugeben, die als die FROM-Adresse f&uuml;r alle System-E-Mails zu sehen sein wird.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Listenansicht');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Fotoansicht');
jr_define('_JOMRES_COMPARE', 'Vergleiche');
jr_define('_JOMRES_REMOVE', 'Entferne');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Zur&uuml;ck zu den Suchresultaten');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Merken');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Von Merkliste entfernen');
jr_define('_JOMRES_VIEWSHORTLIST', 'Zeige Merkliste');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Wichtig: Cookie-Richtlinien');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Wir verwenden Cookies, um zu helfen unsere Website relevant und einfach zu bedienen.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Weiterlesen...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU-Gesetzgebung verlangt, dass alle Websites eindeutig festlegen, ob Cookies verwendet werden und deren Zweck.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'Die Such- und Buchungsmaschine von dieser Seite muss in der Lage sein, die M&ouml;glichkeiten zu erinnern, die Sie gew&auml;hlt haben auf h&ouml;chstem Niveau zu arbeiten. Um dies zu tun braucht es Informationen zu speichern, die mit einer kleinen Datei ein sogenannter zugeordnet ist "cookie" die Ihren Browser eindeutig identifiziert, und f&uuml;r uns, das zu tun, m&uuml;ssen Sie zustimmen, dass wir. Wenn Sie nicht &uuml;ber diese Cookie-Politik akzeptieren, dann werden Sie stark eingeschr&auml;nkt in dem, was Sie auf dieser Seite tun k&ouml;nnen.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Ja, ich akzeptiere die Verwendung von Cookies auf diese Weise.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Anzahlung ist erforderlich, Kosten f&uuml;r die erste Nacht?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Die Preise werden pro Nacht berechnet. Haben Sie die Anzahlung wollen eine Nacht aufladen zu sein? Wenn ja, k&ouml;nnen Sie die folgenden Optionen ignorieren.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Sie haben keine Produkte zu Ihren Favoriten hinzugef&uuml;gt.');
jr_define('_JOMRES_SAFEMODE', 'Aktivieren Sie den abgesicherten Modus?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Setzen Sie dies auf Ja, um den abgesicherten Modus ausl&ouml;sen. Dadurch werden alle Plugins deaktivieren, so dass Jomres nur seine Kernfunktionalit&auml;t verwenden.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'N&auml;chster');
jr_define('COMMON_CANCEL', 'Abbrechen');
jr_define('COMMON_SUBMIT', 'Senden');
jr_define('COMMON_SAVE', 'Speichern');
jr_define('COMMON_DELETE', 'L&ouml;schen');
jr_define('COMMON_RETURN', 'Zur&uuml;ck');
jr_define('COMMON_CLOSE', 'Schliessen');
jr_define('COMMON_BACK', 'Zur&uuml;ck');
jr_define('COMMON_HOME', 'Zuhause');
jr_define('COMMON_NEW', 'Neu');
jr_define('COMMON_SEND', 'Senden');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha wird verwendet, um sicherzustellen, dass der Client &uuml;ber Web-Formulare ist ein Mensch, und verwendet wird, von Vermieter zu verhindern, dass "spammed" durch Roboter auf dem Internet. Um den Kontakt Formular in Jomres verwenden, m&uuml;ssen Sie sich registrieren bei<a href="http://www.google.com/recaptcha" target="_blank">die Google reCaptcha</a> Homepage und stellen Sie Ihre Domain Ihre &ouml;ffentlichen und privaten Schl&uuml;ssel erhalten. Wenn Sie diese Schl&uuml;ssel erhalten haben, geben Sie diese bitte unten. Der reCaptcha Service ist ein kostenloser Service von Google bereitgestellt.');
jr_define('RECAPTCHA_PUBLIC_KEY', '&Ouml;ffentlicher Schl&uuml;ssel');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Privat Schl&uuml;ssel');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Um zu verhindern, die Gefahr der G&auml;ste Doppelbuchung Zimmer Jomres eine Lock-Datei verwendet einen Raum zu verhindern, dass der zur Verf&uuml;gung stehenden Zimmer Liste in das Buchungsformular hinzugef&uuml;gt werden, wenn jemand anderes hat bereits den Raum zu ihnen f&uuml;r den gleichen Zeitraum zugegeben. Standardm&auml;ssig wird Zeit, um diese Sperre in 3600 Sekunden heraus, oder eine Stunde. Sie k&ouml;nnen die Zeit &auml;ndern sie diese Sperre abl&auml;uft nimmt durch diese Zahl zu &auml;ndern.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Aktivieren Sie Jomres 'Bootstrap-Vorlagen und Funktionalit&auml;t?");
jr_define('COMMON_ACTION', 'Aktion');
jr_define('COMMON_VIEW', 'Anzeigen');
jr_define('BACKTOTOP', 'Zur&uuml;ck nach oben');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Schwach');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Stark');
jr_define('_JOMRES_INPUTFILTERING', 'Eingangsfilter');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Eingangsfilterstufe');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Die meisten Daten, die in das System eingegeben wird durch erste Stripping keine HTML-Tags hygienisiert wird, wenn PHP-Variable-Filterfunktion unter Verwendung der Daten sicher zu machen, bevor sie in die Datenbank eingegeben. Vielleicht m&ouml;chten Sie (die Texteingaben in der Objektdetails Seite zum Beispiel) bestimmte Eingaben zu erm&ouml;glichen, HTML aufzunehmen. Es gibt zwei Ebenen von Filtern Sie k&ouml;nnen diese Eingabe zu filtern, entweder schwach oder stark. Sie sollten nur die schwache Einstellung, wenn der Benutzer verwenden(s)Eingabe der Daten werden von Ihnen selbst vertraut, z.B. Kolleginnen und Systemadministratoren , sonst sollten Sie &uuml;berlassen es Stark gesetzt. Wenn zu stark eingestellt (empfohlen) k&ouml;nnen Sie noch angeben, welche durch die Bearbeitung der n&auml;chsten Einstellung zu erlauben Tags'HTMLPurifier erlaubten Tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Erlaubt Eingangs-Tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Sie k&ouml;nnen die Tags bearbeiten, die HTMLPurifier durch seine Filtersystem erm&ouml;glicht. Die Standardeinstellung ist 'p,b,stark,a[href],i' (i.e. Absatz, Fett gedruckt, Stark, Links und Kursiv). Weitere Informationen &uuml;ber die erlaubten Tags, bitte Dokumentation HTML Reinigern lesen an <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. W&auml;hrend Sie diese Einstellung &auml;ndern k&ouml;nnen, sollten Sie es auf den Standardwert zu verlassen.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'erlaubt Eing&auml;nge');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Sie k&ouml;nnen html die Formulareingaben definieren lassen wird diese Option bearbeiten, jeder Eingang zu dieser Liste hinzugef&uuml;gt werden durch HTML Purifier analysiert werden, anstatt alle HTML-Code mit gestrippt. Die Standardeinstellung ist : 'Eigentum_Beschreibung Eigentum_einchecken_mal Eigenschaft_Bereich_Aktivit&auml;ten Eigentum_Fahren_Richtungen Eigentum_Flugh&auml;fen Immobilien_andere Transporteigenschaft_Politik_Haftungsausschl&uuml;ssen'. F&uuml;gen Sie weitere Eingaben durch ihre von Namen Hinzuf&uuml;gen, durch ein Leerzeichen getrennt.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Einzelheiten in Tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Setzen Sie diese Option Objektdetails in Tabs zu zeigen,.Stellen Sie es nicht, um sie ohne Reiter zu zeigen,.');
jr_define('COMMON_PRINT', 'Drucken');
jr_define('COMMON_EDIT', 'Editieren');
jr_define('COMMON_COPY', 'Kopieren');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 enth&auml;lt Twitters Bootstrap Rahmen standardm&auml;ßig und Jomres hat Vorlagen und Funktionen, die diese Vorlagen verwenden. In der Standardeinstellung, wenn Sie Jomres auf Joomla 3 sind diese Schalter auf Ja ausgef&uuml;hrt werden, aber man kann sie auf Nein festgelegt , wenn dies gew&uuml;nscht(nicht empfohlen). Wenn Sie eine Version von Joomla niedriger als Joomla 3 ausgef&uuml;hrt wird, k&ouml;nnen Sie immer noch entscheiden, die Jomres Bootstrap-Vorlagen und Funktionalit&auml;t zu verwenden,,jedoch standardm&auml;ßig werden diese Optionen auf Nein.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Verwenden Sie Jomres Bootstrap-Vorlagen im Frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Hier sind einige Alternativen, die Sie in Betracht ziehen k&ouml;nnten.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Automatische Gast L&auml;ndercode Erkennung?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'Das System versucht das Land des Gastes automatisch zu erkennen, falls dieser nicht schon vorher gebucht hat. Sie k&ouml;nnen diese Option auch auf Nein stellen und das Land das sie im Buchungsformular bevorzugen in der n&auml;chsten Option angeben.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', '&Uuml;ber Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Hilfe');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Los gehts');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Zugangskontrolle');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Entwickler Tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'Sprachen');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Seiten Struktur');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Anleitung (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mein Konto (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Portal Funktionen');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin Manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'Integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Report/Statistiken');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Hilfe');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Aktualisierung');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'Bezahlungssysteme');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif Standart');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Dies gilt nur f&uuml;r neue Tarife');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Jahre zum anzeigen');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definiere die Anzahhl der Jahre die gezeigt werden soll wenn sie einen Tarif Typ editieren.');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Rechnungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Konto Details');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Suche');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Dashboard');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'Reserviere');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Rechnungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Einstellungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editiere Land');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Land id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Land Code');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Name des Landes');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editiere Region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Land Code');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Name der Region');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Liste L&auml;nder auf');
jr_define('_JOMRES_COM_LISTREGIONS', 'Liste Regionen auf');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportiere Definitionen');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Diese Option erlaubt es &Uuml;bersetzungen zu exportieren, die mit der Sprach&uuml;bersetzungsfunktion erstellt wurden. Es generiert ein Textfeld mit allen relevanten Textinhalten f&uuml;r eine neue Sprachendatei, benutzen sie kopieren und einf&uuml;gen um eine neue Sprachdatei f&uuml;r ihren Jomres Server zu erstellen. Sie haben eine neue Sprachdatei erstellt. Wenn sie die Jomres Community unterst&uuml;tzen wollen, senden sie uns Ihre neue Sprache. Danke!');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', '&Uuml;bersetze L&auml;nder');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '&Uuml;bersetze Sprachdatei');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Fehler, der von ihnen eingeloggte Benutzer ist kein Super Manager in Jomres, sie k&ouml;nnen diese Option nicht nutzen. Benutzen sie die Zeige Profil Option um sich selbst zum Manager und zum Super Manager zu machen. Dies ist eine Sicherheitsfunktion.');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Liste Standard Layout Eigenschaften');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Bleiben Sie f&uuml;r ein Minimum von');
jr_define('_JOMRES_NIGHTSFOR', ' N&auml;chten ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agent Details');
jr_define('_JOMRES_AGENT_LISTINGS', 'Agenten Liste');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatische Best&auml;tigung neuer Unterk&uuml;nfte');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Wenn sie diese Option auf Nein stellen, m&uuml;ssen sie alle neuen Unterk&uuml;nfte manuell pr&uuml;fen und best&auml;tigen. Solange eine Unterkunft nicht best&auml;tigt wurde, kann sie von einem Manager/Super Unterkunfts-Manager nicht ver&ouml;ffenlicht werden.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Best&auml;tigungen');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Die Unterkunft wurde noch nicht best&auml;tigt. Nur wenn diese best&auml;tigt wurde k&ouml;nnen sie sie ver&ouml;ffentlichen.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Entschuldigung, sie k&ouml;nnen diese Unterkunft noch nicht freigeben da sie noch nicht best&auml;tigt wurde.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Eine neue Unterkunft ben&ouml;tigt ihre Best&auml;tigung');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Eine Unterkunft wurde im System hinzugef&uuml;gt welches ihre Best&auml;tigung ben&ouml;tigt. Klicken sie den Link um die auf Best&auml;tigung wartenden Unterk&uuml;nfte anzuzeigen: ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Ihre Unterkunft wurde best&auml;tigt');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Herzlichen Gl&uuml;ckwunsch, ihre Unterkunft wurde best&auml;tigt, bitte klicken sie auf den folgenden Link um zum Unterkunfts Kontrollzentrum zu gelangen : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region Namen sind &uuml;bersetzbar');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Nur f&uuml;r schnelle Server andernfalls lassen sie hier die Option auf Nein. Anhand der großen Anzahl von Namen aller Regionen braucht die &Uuml;bersetzung viel Speicher und verlangsamt die Anzeige des Suchergebnisse.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gast ausgebucht.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Entschuldigung, diese e-Mail Adresse wird bereits benutzt. Wenn das Ihre e-Mail Adresse ist, bitte versichern sie sich, dass sie eingeloggt sind bevor sie buchen.');
jr_define('JOMRES_TAPTOCALL', 'Tippen Sie anrufen');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Neue Bewertung f&uuml;r ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Eine neue Beurteilung wurde gelassen ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Neuer Bericht');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Eine &Uuml;berpr&uuml;fung wurde berichtet, f&uuml;r ');
jr_define('JOMRES_SUPERIOR', '&Uuml;berlegen');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Gesamtsumme(ex Steuer) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Gesamtsumme (Inc.-Steuer) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total Steuer : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Gib die zwei W&ouml;rter ein: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Geben Sie, was Sie h&ouml;ren: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay die Audiospur ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Laden Sie die Spur im MP3-Format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'visuellen Modus');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio-Modus');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'auffrischen');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Hilfe');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, das war falsch. Bitte versuche es erneut.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google Kartenoptionen');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Holen Sie die Wetterlage?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Gebrauchte Transit Schicht?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Aktivieren Gmap Points of Interest(einschließlich m&ouml;glicherweise Ihre Konkurrenten)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scannen Sie diesen Code in das Telefon Richtungen zu uns.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'Die Mehrwertsteuer eingegebene Nummer erscheint nicht korrekt zu sein. Sie sollten etwas davon haben: BE805670816B01');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Ung&uuml;ltige Steuernummer. Bitte &uuml;berpr&uuml;fen Sie die G&uuml;ltigkeit Ihrer UID-Nummer mit der Europa-Steuernummer Validierung Web-Service(VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Herzliche Gl&uuml;ckw&uuml;nsche. Wir konnten Ihre Umsatzsteuer-Identifikationsnummer zu validieren.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Liste Steuervorschriften');
jr_define('_JOMRES_TAX_RULE', 'Steuerregel');
jr_define('_JOMRES_TAX_RULE_INFO', 'Steuerregeln werden verwendet, um unterschiedliche Steuerregeln f&uuml;r verschiedene Regionen etablieren. Diese Steuervorschriften wirken sich auf die Person, die die Buchung, wenn sie registriert, Verwendung angemeldet und haben ihr Konto gel&ouml;scht die "bearbeiten mein Konto" Seite.Der Zweck dieser Regeln ist Disponenten in diesen Bereichen unterzubringen , die Mehrwertsteuer befreit sind, k&ouml;nnen Sie feststellen, dass Sie nicht viele Regeln erstellen m&uuml;ssen, wenn &uuml;berhaupt.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import Steuers&auml;tze');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Wir k&ouml;nnen f&uuml;r Sie f&uuml;r die EU-Steuers&auml;tze importieren, wenn Sie w&uuml;nschen. beachten, Wenn Sie diese Funktion verwenden, dann alle vorhandenen Steuers&auml;tze werden entfernt.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Bearbeiten Steuerregel');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Die Umsatzsteuer-Identifikationsnummer f&uuml;r dieses Objekt.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Bitte geben Sie die Umsatzsteuer-Identifikationsnummer f&uuml;r diese Eigenschaft.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Umsatzsteuer-Identifikationsnummer Validierung.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Umsatzsteuer-Identifikationsnummer nicht validiert.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business Details hier eingegeben werden auf Provisionsbasis und Abonnements Rechnungen verwendet werden.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Sie scheinen noch nicht in Ihre Kontodaten gef&uuml;llt zu haben.Zur Liste Ihrer Immobilie auf der Website, Wir brauchen Sie, Ihre Kontodaten abgeschlossen ist, bevor wir weiter gehen k&ouml;nnen.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Produktion oder Entwicklung?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Wenn Sie diese Option auf Entwicklung gesetzt werden wir erm&ouml;glichen Fehlerberichterstattung, andernfalls, wenn auf Produktion eingestellt, die abgeschaltet werden. Wenn dies ein Live-Server ist, empfehlen wir, dass Sie diese Option auf "Produktion".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produktion');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Entwicklung');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Ressourcendetails');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarifdetails');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Nur');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '&uuml;brig!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Ressource-Funktion');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'K&ouml;nnen Sie diese Ressource-Funktion zu entfernen, es wird auf eine Ressource zugewiesen. Entfernen Sie die Funktion von dieser Ressource und versuchen Sie es erneut.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Bild hinzuf&uuml;gen');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Zimmer Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Hauptbild');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Diashow Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Liste L&ouml;schen');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop Dateien hier!');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'W&auml;hlen Sie die Ressource wollen Sie Bilder hochladen f&uuml;r.Wenn Sie Bilder f&uuml;r einzelne Ressourcen hochladen(e.g. Zimmer) Sie werden eine zweite Dropdown gegeben werden, um die spezifische Ressource zu w&auml;hlen. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Hast du mehrere Bilder, wird das 1. f&uuml;r das Hauptbild verwendet!');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Zeige Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'L&ouml;sche Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Hochladen');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Zimmerbilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property Funktionssymbole');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Lade alles hoch');
//8.0
jr_define('COMMON_PREV', 'Vorher');
jr_define('COMMON_MORE', 'mehr');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Heute');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Jahr');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Monat');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Woche');
jr_define('_JOMRES_DASHBOARD_DAY', 'Tag');
jr_define('_JOMRES_HLEGEND', 'Legende');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'Von');
jr_define('_JOMRES_HTO', 'Bis');
jr_define('_JOMRES_HNEW_BOOKING', 'Neue Buchung');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Zahlstatus');
jr_define('_JOMRES_HSTATUS_GUEST', 'G&auml;stestatus');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Buchungsstatus');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Rechnungsstatus');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Rechnungstyp');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Best&auml;tigt');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Objekt');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Zeige Buchungen f&uuml;r');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Zeige Rechnungen f&uuml;r');
jr_define('_JOMRES_STATUS_ANY', 'Alle');
jr_define('_JOMRES_STATUS_PAID', 'Zahlung');
jr_define('_JOMRES_STATUS_NOTPAID', 'Unbezahlt');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Ausgecheckt');
jr_define('_JOMRES_STATUS_ACTIVE', 'Aktiv');
jr_define('_JOMRES_STATUS_CANCELLED', 'Abgesagt');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Ver&ouml;ffentlicht');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Nicht ver&ouml;ffentlicht');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'G&auml;ste mit einer Aktiven Buchungen');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'G&auml;ste mit vergangenen Buchungen');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonnements');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Kommissionen');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Alle Unterk&uuml;nfte');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Als aktiv setzten');
jr_define('_JOMRES_ACTION_CHECKIN', 'Einchecken');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Auschecken');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'Unterkunft');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'G&auml;ste');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'G&auml;ste');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'G&auml;ste Auflisten');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Rechnungen auflisten');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Objekte');
jr_define('_JOMRES_HQUICK_BOOKING', 'Schnelles Buchen');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Datum der Buchung');
jr_define('_JOMRES_HTWO_WEEKS', '2 Wochen');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Diese Buchung wird storniert werden. Dr&uuml;cken Sie auf OK, um die Buchung zu stornieren.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Heutige Eincheckvorg&auml;nge');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Heutige Auscheckvorg&auml;nge');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Aktuelle G&auml;ste');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Position Navigationsleiste');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Standard (Inhaltsbereich)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixiert oben');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixiert unten');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Invertierte Navigationsleiste (Farbe &auml;ndern)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Buchungsnummer');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zeige G&auml;ste f&uuml;r');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Derzeit gilt das nur f&uuml;r das Frontend. Diese Option erlaubt es Ihnen zu w&auml;hlen, ob Jomres Templates die mit Bootstrap 2 oder Bootstrap 3 kompatibel sind, verwenden soll. Sofern Sie nicht sicher sind, ob Ihr Template mit Bootstrap 3 funktioniert, sollten Sie im Zweifel Bootstrap 2 verwenden.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zeige G&auml;ste f&uuml;r');
jr_define('_JOMRES_HFIXED_PERIODS', 'Feste Zeitr&auml;ume');
jr_define('_JOMRES_HDEPOSITS', 'Anzahlungen');
jr_define('_JOMRES_HBOOKING_FORM', 'Buchungsformular');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Erforderliche Felder');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Meine Straße');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Meine Stadt');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Mein Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Erweiterte Konfiguration');
jr_define('SIMPLE_CONFIGURATION', 'Einfache Konfiguration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Eigenschaften');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Typ');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Gasttyp bearbeiten');
jr_define('_JOMRES_HEDIT_COUPON', 'Coupon bearbeiten');
jr_define('_JOMRES_HEDIT_EXTRA', 'Extras bearbeiten');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Mehrere gleichzeitig Anlegen');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Jetzt Anlegen');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Wie viele?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Typ');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maximale G&auml;steanzahl');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Sollen wirklich alle gel&ouml;scht werden?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Bitte beachten Sie, dass Sie den Administrator-Bereich gerade mit Erweiterte Site Konfiguration auf Nein gesetzt betrachten. Um zus&auml;tzliche Optionen zu sehen, setzen Sie bitte Site Konfiguration -> Verschiedenes -> Erweiterte Site Konfiguration auf Ja.');
jr_define('DATATABLES_SINFO', 'Zeige _START_ bis _END_ von _TOTAL_ Eintr&auml;ge');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Die Genehmigung');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Ablehnen Buchungsanfrage');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Genehmigen Buchungsanfrage');
jr_define('_JOMRES_STATUS_APPROVED', 'Genehmigt');
jr_define('_JOMRES_STATUS_REJECTED', 'abgelehnt');
jr_define('_JOMRES_STATUS_INQUIRY', 'Anfrage');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Buchungen bed&uuml;rfen der Genehmigung oder die Verf&uuml;gbarkeit Best&auml;tigung?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Bei Ja, wenn eine Buchung erfolgt, es wird nicht auf die Verf&uuml;gbarkeit Kalender zeigen (und andere G&auml;ste k&ouml;nnen immer noch die Tage buchen und Ressourcen) bis der Immobilienmanager akzeptiert/best&auml;tigt Verf&uuml;gbarkeit f&uuml;r die Buchung.Nach der Best&auml;tigung,Buchung wird als vorl&auml;ufig eingef&uuml;hrt (wenn enthebt nicht andere Buchungen; andere G&auml;ste k&ouml;nnen die gleichen Daten nicht buchen mehr) und eine E-Mail an den Kunden geschickt, um die Zahlung zu leisten.');
jr_define('_JOMRES_ERROR', 'Fehler');
jr_define('_JOMRES_ERROR_MESSAGE', 'Entschuldigung! Ein Fehler beim Versuch, diese Funktion zu verarbeiten. Es wurde f&uuml;r Sie berichtet und wir werden es schauen.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Nachricht');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Datei');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Linie');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Spur');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-Mail-Vorlagen');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Bearbeiten E-Mail-Vorlage');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'E-Mail Betreff');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E-Mail-Typ');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'E-Mail Beschreibung');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Bitte sehen Sie diese Seite f&uuml;r Hilfe, um die E-Mails und eine Liste der verf&uuml;gbaren Ausgabe Customizing: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin Neue Buchung per E-Mail');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E-Mail gesendet an den Site-Administrator, wenn eine neue Buchung erfolgt, wenn die globale Paypal Gateway aktiviert ist');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Buchung per E-Mail');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E-Mail an Eigent&uuml;mer gesendet, wenn eine neue Buchung erfolgt');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Gast Neue Buchung per E-Mail');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-Mail an G&auml;ste verschickt, wenn eine neue Buchung erfolgt');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Gast Best&auml;tigungsschreiben');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Druck Brief oder E-Mail, die manuell durch den Vermieter gesendet werden k&ouml;nnen, um eine Buchung zu best&auml;tigen,');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Diese Buchung kann genehmigt werden. Alle ausgew&auml;hlten Ressourcen sind f&uuml;r die ausgew&auml;hlten Daten verf&uuml;gbar.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Diese Buchung kann nicht genehmigt werden, da einige der Ressourcen, die bereits f&uuml;r die ausgew&auml;hlten Daten gebucht werden. Sie m&uuml;ssen die Buchung zun&auml;chst zu &auml;ndern.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Zeigen des Powered by Jomres Link in der Fußzeile Jomres.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Verwenden Sie Budget-Funktion?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrap-Sites nur! Die Budget-Funktion ist ein Merkmal der Eigenschaftsliste , ein Gast f&uuml;r sie verwenden k&ouml;nnen Eigenschaften zu markieren whos Preis pro Nacht unter einer bestimmten Zahl ist. Das Feature hat einige Einschr&auml;nkungen, dass es nicht f&uuml;r einige Gebiete sinnvoll sein k&ouml;nnte, die viele verschiedene W&auml;hrungen verwenden. beachten, wenn Sie dies und das Feature-Anzeigen-Plugin verwenden, Ihren Eintrag Verpackung Klasse gekennzeichnet wird automatisch ge&auml;ndert'Panel-Prim&auml;r' wenn die Eigenschaft Liste angezeigt.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'F&uuml;r');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'Nacht-');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'N&auml;chte');
jr_define('_JOMRES_LIVE_SCROLLING', 'Verwenden Sie Live-Scrolling/Unendliche Scrollen in Eigenschaftsliste?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'M&auml;r');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Mai');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Okt');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dez');
jr_define('DATATABLES_SEMPTYTABLE', 'Keine Daten in der Tabelle vorhanden');
jr_define('DATATABLES_SINFO', '_START_ bis _END_ von _TOTAL_ Eintr&auml;gen');
jr_define('DATATABLES_SINFOEMPTY', '0 bis 0 von 0 Eintr&auml;gen');
jr_define('DATATABLES_SINFOFILTERED', '(gefiltert von _MAX_ Eintr&auml;gen)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', '_MENU_ Eintr&auml;ge anzeigen');
jr_define('DATATABLES_SLOADINGRECORDS', 'Wird geladen...');
jr_define('DATATABLES_SPROCESSING', 'Bitte warten...');
jr_define('DATATABLES_SSEARCH', 'Suchen');
jr_define('DATATABLES_SZERORECORDS', 'Keine Eintr&auml;ge vorhanden.');
jr_define('DATATABLES_SFIRST', 'Erste');
jr_define('DATATABLES_SLAST', 'Letzte');
jr_define('DATATABLES_SNEXT', 'N&auml;chste');
jr_define('DATATABLES_SPREVIOUS', 'Zur&uuml;ck');
jr_define('DATATABLES_SSORTASCENDING', ': aktivieren, um Spalte aufsteigend zu sortieren');
jr_define('DATATABLES_SSORTDESCENDING', ': aktivieren, um Spalte absteigend zu sortieren');
jr_define('DATATABLES_SHOWHIDE', 'Spalten &auml;ndern');
jr_define('_BOOKING_ONREQUEST', 'Buchung auf Anfrage');
jr_define('_BOOKING_INSTANT', 'Sofortbuchung');
jr_define('_JOMRES_COM_FONTAWESOME', 'F&uuml;gen Sie Font Super-Icon-Set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Setzen Sie diese Option auf Ja, wenn die Vorlage nicht enthalten Font Ehrf&uuml;rchtig.');
jr_define('_BOOKING_CALCQUOTE', 'Anfrage Buchung');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'sehr geehrter ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'W&auml;hlen Sie einen Standort');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU-Land?');
jr_define('_JOMRES_HLASTCHANGED', 'Zuletzt ge&auml;ndert');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel-Buchung Stornierung per E-Mail');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E-Mail gesendet an den Vermieter, wenn eine neue Buchung stornier');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Buchung Stornierung per E-Mail');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E-Mail an G&auml;ste verschickt, wenn eine neue Buchung storniert');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Test Email senden');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Dies ist ein Test E-Mail von Ihrem Reservierungssystem.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test-E-Mail erfolgreich gesendet');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test-E-Mail wurde nicht gesendet');
jr_define('_INVOICE_TRANSACTIONS', 'Transaktionen');
jr_define('_OPENEXCHANGE_API', 'Offene Wechselkurse API-Schl&uuml;ssel');
jr_define('_OPENEXCHANGE_API_DESC', 'Zur Umrechnung Preise zwischen den Diensten finden Sie eine Open-Wechselkurse API-Schl&uuml;ssel ben&ouml;tigen. Sie m&uuml;ssen einen API-Schl&uuml;ssel haben die Preise in Jomres korrekt angezeigt werden, Sie k&ouml;nnen jedoch f&uuml;r einen kostenlosen Schl&uuml;ssel registrieren Sie sich unter <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a>  (st&uuml;ndliche Updates, 1000 requests/month - no HTTPS, E-Mail-Support oder erweiterte Funktionen). Jomres Downloads Wechselkurse einmal t&auml;glich so lange, wie Sie sich auf nur eine Handvoll von Websites, um den Schl&uuml;ssel verwenden, Sie sind unwahrscheinlich, diese Grenzen zu &uuml;berschreiten. Vorherige 8,3 bis jomres verwendeten wir eine &auml;ltere,undokumentierte Yahoo Feature jedoch haben entdeckt, dass die Verwendung dieser Funktion ist im Widerspruch zu Yahoos Gesch&auml;ftsbedingungen.Als Ergebnis m&uuml;ssen wir davon ausgehen, dass die Funktion zu einem bestimmten Zeitpunkt in der Zukunft verschwinden,damit der Wechsel zu &ouml;ffnen Wechselkursen.');
jr_define('_JOMRES_COMMISSION', 'Kommission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Wenn Sie mehrere Bilder f&uuml;r die individuelle Sonderausstattungen laden, nur das erste Bild verwendet werden.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Bezahle jetzt');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Diese Rechnung ist jetzt f&auml;llig. Bitte klicken Sie auf die Schaltfl&auml;che, um die Zahlungsmethode zu w&auml;hlen.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', 'Hier ist eine Liste von einigen der großen Dinge, die Sie kaufen k&ouml;nnen, w&auml;hrend eine Reservierung in diesem Hotel machen. ');
jr_define('GATEWAYS_INSTRUCTIONS', 'Auf dieser Seite k&ouml;nnen Sie alle installierten Gateways konfigurieren. Mit diesen Optionen k&ouml;nnen Sie den Zahlungen f&uuml;r die Kommission oder Abonnement Rechnungen zu nehmen. Frontend-Einstellungen k&ouml;nnen nur von Paypal außer Kraft gesetzt werden, alle anderen Gateways m&uuml;ssen &uuml;ber die Eigenschaftskonfiguration konfiguriert werden -> Gateways Registerkarte, aber wenn ein Gateway in dieser Liste erscheint, dann sollten sie in der Lage sein, beide Anzahlung in H&ouml;he von Verarbeitung und Rechnungszahlungen.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in Objektdetails Seite?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Details der Immobilie Seiteneinstellungen');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Liegenschaftsverwaltung in Jomres wird nur von der Website Frontend cPanel gemacht. Auf dieser Seite finden Sie alle Objekte im System zur Liste der Lage sein, so k&ouml;nnen Sie Provisionss&auml;tze zuweisen und genehmigen/Genehmigung aufheben sie (wenn diese Funktionen aktiviert). So erstellen Sie eine neue Eigenschaft, vorhandene bearbeiten,Buchungen verwalten oder andere Eigenschaft Buchungen im Zusammenhang mit Aufgaben, Sie m&uuml;ssen auf die Website-Frontend anmelden und auf die Jomres Standardseite gehen. Dort finden Sie die Jomres Frontend cPanel sehen.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Zimmerfunktionssymbole');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Business-Funktionen Kategorien');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Bearbeiten Business-Funktion Kategorie');
jr_define('_JOMRES_HCATEGORY', 'Kategorie');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show-Business-Funktionen in Kategorien eingeteilt?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Setzen Sie diese Option auf YES die Eigenschaftsmerkmale in Kategorien zu trennen. Diese Option betrifft nur die Immobilie bietet auf der Objektdetails Seite angezeigt. Alle anderen Seiten angezeigt werden k&ouml;nnen, ohne dass sie in Kategorien aufteilen.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'R&uuml;ckg&auml;ngig Check-in');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'R&uuml;ckg&auml;ngig Kasse');
jr_define('_JOMRES_STATUS_UNISSUED', 'unver&ouml;ffentlicht');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Ihr Download und Support-Schl&uuml;ssel g&uuml;ltig ist, Sie werden in der Lage sein Plugins &uuml;ber den Plugin-Manager herunterladen.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Ihr Download und Support-Schl&uuml;ssel ist nicht g&uuml;ltig, Sie werden nicht in der Lage Plugins &uuml;ber den Plugin-Manager herunterladen.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Unterart');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', 'Sie haben noch nicht Ihr Eigentum Sub-Typ festgelegt. Dies ist, wo Sie es als so etwas wie eine Villa mit 5 Schlafzimmern oder 4-Zimmer-H&uuml;tte definieren und es hilft G&auml;ste, die suchen, um ihre Suche zu verfeinern.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Geben Sie Ihre Immobilie einen Subtyp');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-Mail-Vorlagen');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Kontakt Einstellungen');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Von hier aus k&ouml;nnen Sie alle Eigenschaften Kontaktdaten außer Kraft setzen (email, phone, fax)so die gesamte Kommunikation mit den G&auml;sten zu Ihnen und nicht auf die Hausbesitzer gesendet werden.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Außer Kraft setzen Listings Kontaktdaten?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', 'Wenn diese Option auf Ja gesetzt ist, dann Eigenschaft E-Mail-Adressen und Telefonnummern werden mit den in diesem Register gesetzt ersetzt werden. Dies zwingt alle Mitteilungen an Ihre angegebene E-Mail-Adresse gesendet werden, die sicherstellen, dass der Gast und Eigent&uuml;mer nicht die Buchungsmaschine umgehen kann und die Provisionen, die zur Folge haben wird. Es bedeutet auch, dass, wenn eine Eigenschaften Beschreibung der Eigenschaft ge&auml;ndert wird, wird auf Unapproved eingestellt werden(wenn die Zulassungen Funktion aktiviert ist) und Sie m&uuml;ssen manuell die Beschreibung &uuml;berpr&uuml;fen, um sicherzustellen, dass die Manager nicht eingegeben Telefon oder E-Mail-Daten in die Textfelder hat, bevor er wieder zur Genehmigung.');
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', '&Auml;nderungen an Auflistung Details erforderlich Site Admin &Uuml;berpr&uuml;fung. Wenn Sie neue Details merken, Ihren Eintrag wird nicht ver&ouml;ffentlicht und ein angemeldetes Siggy Genehmigung sein, bevor die Site-Besucher wieder sichtbar sein. Sie erhalten k&ouml;nnen, um Online-Buchungen nicht w&auml;hrend Ihren Eintrag nicht ver&ouml;ffentlicht ist und vorbehaltlich der Zustimmung.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Bewertung Buchungsanfrage');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Best&auml;tigen Buchungsanfrage');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend Buchungsanfrage');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark Rechnung als ausstehend');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Rechnung markiert als ausstehend');
jr_define('_JOMRES_TRACKING_ENABLE', 'Senden Sie anonyme Tracking-Daten?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'W&auml;hlen Sie Ja, um anonyme Tracking-Daten an Jomres.net senden uns helfen, besser zu verstehen, wie Sie das System nutzen.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Bitte stellen Sie sicher, dass Ihre Angaben sind auf dem Bearbeiten der Seite Mein Konto abgeschlossen ist, bevor Buchungen im Namen Ihrer Kunden zu machen.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', 'Gast Kontaktdaten');
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Neu G&auml;ste -- ');
jr_define('_JOMRES_CHARTS', 'Hitliste');
jr_define('_JOMRES_CHARTS_SELECT', 'W&auml;hlen Sie Diagramm...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Die Ertr&auml;ge von Jahr / Monat');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'Ok, Lassen Sie uns beginnen. Zuerst m&uuml;ssen Sie einige Zimmer f&uuml;r dieses Objekt zu erstellen.');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Erstellen Sie einige Zimmer jetzt');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Die Forschung hat bewiesen, dass die Eigenschaften mit vielen Bildern hoher Qualit&auml;t mehr Ansichten erzeugen. Laden eines Hauptbildes und einige Diashow Bilder Ihre Chancen, Buchungen zu verbessern.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Laden Sie ein Bild');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Erstellen Sie einige Tarife');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Was werden die G&auml;ste buchen?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Diese Eigenschaft ist ein Hotel Eigenschaft type Typ, wo Sie Zimmer in der Unterkunft vermieten, oder eine Villa Typ Eigentum, wo Sie mieten das gesamte Anwesen in einer Ausbuchung? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Die Zimmer in der Unterkunft');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Das gesamte Anwesen');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Beide'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Was werden die G&auml;ste buchen?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', 'Sie m&uuml;ssen Ihre Adressdaten zu vervollst&auml;ndigen, so dass Ihre G&auml;ste, die Sie finden k&ouml;nnen, wenn sie kommen zu bleiben.');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aktualisieren Sie Ihre Adresse');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hoppla, es sieht aus wie Sie alle Felder ausf&uuml;llen vielleicht vergessen haben.');
jr_define('_JOMRES_CONTANT_US', 'kontaktiere uns');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Willkommen in Ihrem neuen Online-Angebot f&uuml;r ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hallo und willkommen zu Ihrer neuen Immobilie auf ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Sie haben vor kurzem eine neue Eigenschaft auf unserer Website, und wir m&ouml;chten Sie auf die Familie zu begr&uuml;ßen.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Sie k&ouml;nnen Ihr neues Armaturenbrett sehen');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' Hier ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', 'Sobald Sie das Setup Ihrer Immobilie haben, k&ouml;nnen Sie sehen, wie es auf Website-Besucher sieht durch den Besuch ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' Ihre Titelseite.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', '(es wird nicht ver&ouml;ffentlicht, so Website-Besucher kann sie noch nicht sehen).');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', 'Am oberen Rand der Seite finden Sie eine Reihe von Nachrichten zu sehen.Die Tasten neben diesen Nachrichten f&uuml;hrt Sie zu den Seiten, die Sie besuchen m&uuml;ssen, um Ihre Immobilie auf unserer Website einrichten. Sobald Sie jede dieser Aufgaben ausgef&uuml;hrt haben, wird es viel einfacher f&uuml;r die Besucher auf unserer Seite sein, um Ihr Eigentum zu finden und Buchungen online zu verdienen.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Wenn Sie irgendwelche Fragen &uuml;berhaupt , bitte ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktiere uns');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', 'und wir werden uns freuen, alle Ihre Fragen zu beantworten.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, unser Team ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', 'Sie scheinen keine Touren zu haben, zu verkaufen. Erstellen Sie eine Tour-Profil, dann verwenden Sie die Schaltfl&auml;che Erzeugen einige Touren zu erstellen.');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', 'Lassen Sie uns einige Touren erstellen!');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap-W&auml;hrungssymbol Standort');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Verwenden Sie diese Option, um das W&auml;hrungssymbol bewegen von hinten von, an vor dem Preis Figur oder umgekehrt.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Geben Sie Ihre Facebook -Seite-ID, zum Beispiel "jomres".Lassen Sie dieses Feld leer, nichts zu zeigen. Kein Zutritt https://www.facebook.com oder etwas anderes.');
jr_define('COMMON_DOWNLOAD', 'Herunterladen');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Als n&auml;chstes m&uuml;ssen Sie einige Tarife hinzuf&uuml;gen. Dies sind Ihre Grundpreise.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap ist nicht aktiviert!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Achtung, die Sie nicht haben Bootstrap in Jomres Standortkonfiguration aktiviert-> Registerkarte Sonstiges. Bereitstellen <i>etwas</i> Funktionalit&auml;t Jomres derzeit seine alte, jQuery UI basierte Vorlagen verwenden, diese sind jedoch nicht in mehreren Jahren gearbeitet worden. Alle aktuellen Entwicklung und Verbesserung von Jomres Vorlagen( Layout-Dateien ) seine Bootstrap 3 Template-Dateien sind aus. Um das Beste aus Jomres bekommen, empfehlen wir Ihnen installieren Sie eine Bootstrap 3 basierend Theme f&uuml;r Wordpress oder Joomla. Sobald Sie getan haben, dass Sie Jomres Bootstrap-Vorlagen in der Site-Konfiguration aktivieren.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Ihre Unterst&uuml;tzung Schl&uuml;ssel g&uuml;ltig ist. Beachten Sie, dass diese Lizenz nicht erlaubt Plugin-Downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Ziehen Buchungen in diesem Bereich, sie zu stornieren');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Bitte stellen Sie sicher, dass Sie eine Wordpress -Seite erstellt haben, die enth&auml;lt [jomres:xx-XX] shortcode ( woher xx-XX Code ist die Sprache Ihrer Website, beispielsweise [jomres:en-GB] )sonst werden Sie nicht in der Lage sein Jomres von der Website-Frontend f&uuml;r den Zugriff auf Ihre Eigenschaften und Buchungen verwalten.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Bevor Sie einen Raumtyp erstellen,wir m&uuml;ssen wissen, ob es f&uuml;r einen Hoteltyp Eigenschaft ist, oder eine Villa Typ Eigentum.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Klicken Sie, um neue Raumtypen hinzuf&uuml;gen');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Achtung, Sie haben eine oder mehrere Immobilienarten ohne Zimmertypen. Eigenschaften m&uuml;ssen Zimmertypen, so dass Immobilienverwalter Tarife erstellen.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Verwenden Sie die oben Schaltfl&auml;che Neu Raumtypen zu erstellen.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Keine Buchungen / Immobilien(einfache Auflistung )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Speicherort der Protokolldatei');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres Protokolle der Systemaktivit&auml;t standardm&auml;ßig die'.JOMRES_SYSTEMLOG_PATH.' Lage. Da diese Datei vertrauliche Informationen enthalten k&ouml;nnen( api Tasten, Systempfade , Gateway-Informationen, G&auml;steinformation) Wir empfehlen Ihnen dringend, diesen Weg &uuml;ber Ihren Web-Dokument-Root zu einem &auml;ndern. Wenn Sie nicht verstehen, was das bedeutet, fragen Sie Ihren Web-Hosts f&uuml;r die Beratung, wie sie Ihre Dateisystem wissen.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres Protokolle Informationen &uuml;ber Ihr System detailliert, einschließlich API-Schl&uuml;ssel, Systempfade , Gateway und G&auml;steinformationen , von denen alle nicht auf den Rest des Internets sichtbar sein soll. Ihr Systemprotokoll Pfad nicht gesetzt ist, um Systemprotokolle werden derzeit auf die gespeicherte '.JOMRES_SYSTEMLOG_PATH.' Verzeichnis, das ist nicht ideal. Bitte besuchen Sie Site Configuration -> Debuggen und einen Pfad im Dateisystem festgelegt , die außerhalb des Web-Root ist. Im Zweifelsfall bitte Ihre Web-Hosts in Verbindung, wie sie in der Lage sein, Sie zu beraten.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Wenn Ihr KMS im Stammverzeichnis Ihrer Website installiert ist, dann k&ouml;nnte ein geeigneter Ort sein');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Sie verf&uuml;gen nicht &uuml;ber eine Google Maps Schl&uuml;sselsatz. Aufgrund der j&uuml;ngsten &Auml;nderungen in Google Maps, werden alle neuen Websites einen API-Schl&uuml;ssel m&uuml;ssen in der Lage sein Google Maps-Funktionen zu verwenden. Bitte <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>finden Sie auf unserer Hilfeseite auf, wie eine API-Schl&uuml;ssel zu erstellen</a> und speichern Sie die Schl&uuml;ssel in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map Farbschema');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', 'Richtig, fangen wir an, Ihre Immobilie zur Website hinzuzuf&uuml;gen. Wir m&uuml;ssen hier ein paar Informationen &uuml;ber Ihre Immobilie sammeln. Dies erm&ouml;glicht es uns, die Grundlagen Ihrer Immobilie aufzubauen. Sobald das erledigt ist, werden Sie durch zus&auml;tzliche R&auml;ume, Preise und Bilder gef&uuml;hrt.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Der Immobilientyp hilft Ihnen bei der Definition, wie die Immobilie gebucht wird, z.B. bei Hotels, die Sie nur ein oder zwei Zimmer auf einmal "verkaufen", w&auml;hrend Sie bei Villen die gesamte Immobilie anbieten.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'Beachten Sie, dass die E-Mail-Adresse nicht mit der E-Mail-Adresse &uuml;bereinstimmen muss, die Sie bei der Registrierung Ihres Kontos verwendet haben. Dies erm&ouml;glicht es Ihnen, verschiedene Adressen f&uuml;r verschiedene Eigenschaften zu haben.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Mindesteinzahlung');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Sie k&ouml;nnen die Mindesteinzahlungsbetrag konfigurieren geladen werden. Wenn Sie das tun, dann ist die "Anzahlung ist erforderlich, Kosten f&uuml;r die erste Nacht?" & "Anzahlung ist nicht erforderlich Prozentsatz?" Einstellungen in Eigenschaftskonfiguration kann nicht, stattdessen alle Hinterlegung Werte sind ein Prozentsatz konfiguriert werden, und zumindest die Zahl, die Sie hier definieren m&uuml;ssen.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Diese Zahl kann nicht kleiner sein als ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Bilder');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Wie lade ich Bilder hoch?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Zulassungsnummer');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Einige Länder schreiben vor, dass Sie eine Zulassungsnummer für Ihre Immobilie anzeigen müssen. Wenn Sie eine solche Nummer haben, geben Sie sie hier ein und sie wird in den Kopfbereich der Eigenschaft aufgenommen.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Touristensteuersatz');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Legen Sie den Touristensteuersatz fest. Die Kurtaxe wird erst nach der ersten Buchung berechnet und auf der Buchungsbestätigungsseite im Feld Zusatzleistungen hinzugefügt.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Ist Prozentsatz?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Stellen Sie dies auf Ja, wenn die Steuer ein Prozentsatz ist, oder Nein, wenn es sich um eine Pauschalgebühr handelt.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Beeinflusst den gesamten Buchungswert?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Stellen Sie dies auf Ja, wenn die Steuer den gesamten Wert der Buchung abdecken soll, also einen Prozentsatz sowohl der Unterkunft als auch der Extras, oder Nein, wenn sie nur auf der Grundlage des Wertes der gesamten Unterkunft berechnet wird. Wenn die Option'Ist Prozentsatz' oben auf Nein gesetzt ist, wird diese Option ignoriert.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Auf dieser Seite können Sie Bilder für Ihre Immobilie und die von Ihnen angebotenen Dinge hochladen. Es hat eine Haupttaste und eine zweite Taste, mit der Sie bestimmte Ressourcen auswählen können, für die Sie Bilder hochladen möchten. Das Haupteigenschaftsbild und die Diashow zeigen also nur eine Schaltfläche, aber wenn Sie z.B. optionale Extras oder Räume erstellt haben, sehen Sie eine zweite Schaltfläche, auf der Sie Bilder für diese spezifischen Ressourcen hochladen können.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Auf dieser Seite können Sie Bilder für Ihre Immobilie und die von Ihnen angebotenen Dinge hochladen. Es hat eine Haupttaste und eine zweite Taste, mit der Sie bestimmte Ressourcen auswählen können, für die Sie Bilder hochladen möchten. Das Haupteigenschaftsbild und die Diashow zeigen also nur eine Schaltfläche, aber wenn Sie optionale Extras erstellt haben, sehen Sie eine zweite Schaltfläche, auf der Sie Bilder für diese spezifischen Ressourcen hochladen können.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
<li>Wählen Sie zunächst das/die Bild(er), das/die Sie hochladen möchten, indem Sie auf Bild hinzufügen oder per Drag & Drop klicken. Diese werden in der Spalte auf der rechten Seite angezeigt.</li>
<li>Über diesem Bereich verwenden Sie die Schaltfläche \"Wählen Sie die Ressource\", um die Ressource auszuwählen, für die Sie Bilder hochladen möchten. Möglicherweise wird Ihnen die Option angeboten, eine bestimmte Ressource darunter auszuwählen. </li>
<li> Sobald Sie eine Ressource ausgewählt haben, können Sie dann auf die Schaltfläche Bild hochladen unter einem Bild klicken, um sie mit dieser Ressource zu verknüpfen. Sobald ein Bild hochgeladen wurde, verschwindet es aus der Spalte auf der rechten Seite und erscheint auf der linken Seite.</li>
<li>Verwenden Sie die Schaltfläche Papierkorb neben vorhandenen Bildern, um Bilder zu entfernen, die Sie nicht mehr anzeigen möchten.</li>
<li>Sie können die Reihenfolge, in der die Dateien in der Diashow angezeigt werden, ändern, indem Sie sie vor dem Hochladen umbenennen, da sie auf Seiten in alphabetischer Reihenfolge angezeigt werden.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Neben der Schaltfläche Ressource befindet sich eine Schaltfläche Vorschau. Wenn Sie darauf klicken, erscheint ein Popup, das Ihnen zeigt, wie die aktuell hochgeladenen Bilder auf einer Seite aussehen werden. Dies hilft Ihnen, eine Vorstellung davon zu bekommen, wie die Bilder bei Ihren Kunden aussehen werden.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Es gibt keine Begrenzung für die Anzahl der Bilder, die Sie hochladen können. Bilder werden beim Hochladen automatisch in der Größe angepasst. Sie können nur JPG- und PNG-Dateien hochladen.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealerweise sind alle Bilder, die du hochlädst, mindestens so groß wie die von dir selbst ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " Pixel Breite, sonst können sie nach dem Hochladen unscharf aussehen.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alle Bilder, die Sie hochladen, dürfen nicht mehr sein als ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in Größe.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Wählen Sie die Ressource, für die Sie Bilder hochladen möchten.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Spezifische Ressource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder, die bereits für diese Ressource hochgeladen wurden.");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Textformatierung');
jr_define('_JOMRES_MARKDOWN_DESC', 'Hier können Sie mit Hilfe der einfachen Abschriftenformatierung Text eingeben. Sie müssen kein HTML beherrschen, verwenden Sie einfach die Schaltflächen, um die Informationen so aussehen zu lassen, wie Sie es wünschen, oder formatieren Sie Text nach diesen Beispielen.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Betonung');
jr_define('_JOMRES_MARKDOWN_BOLD', 'Fett');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'Kursivschrift');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'Durchgestrichen');
jr_define('_JOMRES_MARKDOWN_HEADERS', "&Uuml;berschrift");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Liste");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabellen');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Spalte');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Externe Buchungsformular URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Hier können Sie eine externe URL festlegen, wenn Sie eine Website von Drittanbietern für Buchungen verwenden möchten. Alle Buchungsbuttons von jomres zeigen auf diese URL. Lassen Sie dieses Feld leer, wenn Sie das Jomres-Buchungsformular verwenden möchten.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Gebuchte Zimmer in Prozent");
jr_define('_JOMRES_SELECT_WIDGETS',"Widgets ausw&auml;hlen");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Stadt Bilder");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Eine &Auml;nderung des Immobilientyps l&ouml;scht alle R&auml;ume, Tarife, Grundeinstellungen und setzt die Verf&uuml;gbarkeit zur&uuml;ck..");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Bitte beachten Sie, dass Sie nach dem Update alle bereits installierten Jomres Plugins &uuml;ber den Jomres Plugin Manager aktualisieren m&uuml;ssen. Wenn Sie Core-Plugins installiert haben, aber keine g&uuml;ltige Jomres-Lizenz haben, dann empfehlen wir Ihnen <em>nicht</em>, Jomres zu aktualisieren, da &auml;ltere Plugins oft nicht mit neueren Versionen von Jomres funktionieren. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Bitte beachten Sie, dass Sie nach dem Update alle bereits installierten Jomres Plugins &uuml;ber den Jomres Plugin Manager aktualisieren m&uuml;ssen.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Wenn Sie Jomres und seine Plugins aktualisieren m&ouml;chten, ben&ouml;tigen Sie eine Verl&auml;ngerungslizenz. Bitte besuchen Sie <a href='https://www.jomres.net/pricing' target='_blank'>unsere Website</a> f&uuml;r weitere Informationen. In den meisten F&auml;llen betragen diese Lizenzen 50% des Preises einer Vollversion. Bitte stellen Sie sicher, dass Sie sich in unseren Shop eingeloggt haben, bevor Sie versuchen, eine Verl&auml;ngerung zu kaufen.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Zahlungsart : ");

jr_define('_JOMRES_PRICES',"Jomres kaufen");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Unterkunfts Kategorie' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Bearbeite Unterkunfts Kategorie' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'Wenn Eigenschaften in einer Liste angezeigt werden, versucht das System, einen gültigen Preis aus den konfigurierten Tarifen zu finden, entweder basierend auf dem heutigen Datum oder, wenn Daten in einer Suche verwendet wurden, basierend auf diesen Daten. Wenn dies nicht möglich ist, wird POA (Preis auf Anfrage) angezeigt, was bedeutet, dass der Gast Sie kontaktieren sollte, um einen Preis zu erhalten. Wenn Sie möchten, können Sie hier einen Preis konfigurieren, der anstelle des POA-Textes angezeigt wird. Diese Zahl wäre ein "Fallback"-Preis, der anzuzeigen wäre, wenn kein anderer Preis ermittelt werden kann.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Adresse verbergen?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "Wenn Sie diese Option auf Ja setzen, dann können nur Gäste, die bereits eine Buchung auf Ihrer Immobilie vorgenommen haben, die Straßenadresse der Immobilie sehen. Möglicherweise möchten Sie diese Einstellung verwenden, um den genauen Standort der Eigenschaft auszublenden, wenn sie z.B. routinemäßig unbeaufsichtigt bleibt.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Sichtbarkeit der Spalte');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Ihre Daten' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Einige Funktionen dieser Website m&uuml;ssen Informationen &uuml;ber Ihren Besuch speichern. Dies wird nur verwendet, um Ihnen einen Service zu bieten, wird niemals mit anderen Personen geteilt und wird gel&ouml;scht, wenn es nicht mehr ben&ouml;tigt wird.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ERTEILEN SIE UNS DIE ERLAUBNIS, DIESE INFORMATIONEN ZU SPEICHERN??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Im Detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Sie m&uuml;ssen damit einverstanden sein, dass wir diese Daten speichern, damit Sie Buchungen auf dieser Website vornehmen k&ouml;nnen. Unabh&auml;ngig davon, ob Sie mit der Speicherung Ihrer Daten einverstanden sind oder nicht, speichern wir ein Cookie auf Ihrem Computer, um uns mitzuteilen, ob Sie sich daf&uuml;r entschieden haben oder nicht. Dies hilft uns sicherzustellen, dass wir Sie nicht st&auml;ndig fragen, ob Sie sich an- oder abmelden m&ouml;chten oder nicht und dass sie keine personenbezogenen Daten (PII) enthalten. Wenn Sie Ihre Meinung &auml;ndern, k&ouml;nnen Sie die Seite "App-Berechtigungen" jederzeit besuchen, um sich ein- oder auszutragen.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Die Informationen werden f&uuml;r verschiedene Zeitr&auml;ume gespeichert, je nach Art Ihres Besuchs. Wenn Sie sich also nur umsehen, speichern wir ungef&auml;hre Informationen zur geografischen Lage (L&auml;nderebene). Wenn Sie Suchen durchf&uuml;hren, dann speichern wir die letzten Dinge, nach denen Sie gesucht haben, um die Suchformulare benutzerfreundlicher zu gestalten. Diese Informationen werden in der Regel f&uuml;r maximal 24 Stunden gespeichert und dienen nur dazu, Ihren Besuch angenehmer zu gestalten.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Wenn Sie eine Buchung bei uns vornehmen, werden bei Bedarf weitere Informationen gespeichert.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Die technischen Daten des Buchungsformulars werden erfasst und f&uuml;r maximal 60 Tage aufbewahrt. Dies ist erforderlich, damit Buchungen auf Anfrage in Vollbuchungen umgewandelt werden k&ouml;nnen, sobald eine Buchung genehmigt ist, und zur Analyse durch unsere Teams, falls es ein Problem mit einer Buchung gibt. Wenn Sie bei Ihrer Buchung nicht eingeloggt waren, senden wir Ihnen per E-Mail einen Benutzernamen und ein Passwort, damit Sie Ihre Buchungshistorie einsehen und Ihr Recht auf Vergessen (RTBF) aus&uuml;ben k&ouml;nnen, wenn Sie dies w&uuml;nschen.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Die in das Buchungsformular eingegebenen Daten, wie z.B. Name, E-Mail-Adresse, tats&auml;chliche Adresse, werden maximal 365 Tage nach dem Abreisedatum der Buchung gespeichert. Diese Informationen werden in verschl&uuml;sselter Form in unserer Datenbank gespeichert, so dass nur autorisierte Personen sie einsehen k&ouml;nnen. Wenn Sie eine Buchung vornehmen, m&uuml;ssen wir Ihre PII w&auml;hrend der G&uuml;ltigkeit der Buchung speichern. Sobald die Buchung abgeschlossen ist, entweder weil sie storniert wurde oder Sie ausgecheckt wurden, k&ouml;nnen Sie Ihre RTBF aus&uuml;ben, indem Sie sich einloggen und die Seite "Ihre Daten" besuchen. Rechnungsinformationen f&uuml;r abgeschlossene Buchungen werden weiterhin sicher in unserer Datenbank gespeichert, um sicherzustellen, dass wir die geltenden Steuergesetze einhalten, aber Sie k&ouml;nnen alle anderen PII nach Abschluss der Buchung entfernen.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Wenn Sie einer Speicherung Ihrer Daten wie oben beschrieben zustimmen, sind wir gesetzlich verpflichtet, diese Zustimmung in unserer Datenbank zu speichern. Zu diesen Informationen geh&ouml;ren Ihre IP-Nummer und der Inhalt des Opt-in-Formulars. Wir werden diese Einwilligungserkl&auml;rung auf unbestimmte Zeit aufbewahren (dies ist eine gesetzliche Verpflichtung).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'Sie haben uns noch nicht mitgeteilt, ob wir personenbezogene Daten &uuml;ber Sie erheben k&ouml;nnen.' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'Sie haben zugestimmt, dass wir die notwendigen personenbezogenen Daten sammeln, um Buchungen vornehmen zu k&ouml;nnen.' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App-Berechtigungen' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Gastdaten' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Dies sind die Details, die von den verschiedenen Eigenschaften f&uuml;r Sie gespeichert werden. Je nachdem, was Sie bei der Buchung eingegeben haben, k&ouml;nnen verschiedene Hotels unterschiedliche Datens&auml;tze aufweisen.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Sie haben in diesem System keine Daten von Hotels gespeichert.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profildaten' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Dies ist der Hauptdatensatz, den wir fuer Sie speichern, im Gegensatz zu denjenigen, die Sie mit anderen Eigenschaften geteilt haben.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Du hast keine Profilinformationen gespeichert.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Hier sind die personenbezogenen Daten, die wir auf dieser Website f&uuml;r Sie speichern. Es ist im JSON-Format (JavaScript Object Notation) aufgebaut, einem leichten Datenaustauschformat. Es ist f&uuml;r den Menschen leicht zu lesen und zu schreiben und f&uuml;r Maschinen leicht zu analysieren und zu generieren.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymisiert' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Ihre Daten' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Mit der Annahme dieser Nutzungsbedingungen (diese "Vereinbarung") erkl&auml;ren Sie sich damit einverstanden, dass:

<ul>
	<li>
		Sie sind berechtigt, &uuml;ber diese Website Hotels zu buchen;
	</li>
	<li>
		Du bist mindestens 18 Jahre alt;
	</li>
	<li>
		Sie verf&uuml;gen &uuml;ber die rechtliche Befugnis, eine verbindliche rechtliche Verpflichtung einzugehen;
	</li>
	<li>
		Sie werden die Website in &Uuml;bereinstimmung mit dieser Vereinbarung nutzen;
	</li>
	<li>
		Sie werden die Website nur nutzen, um legitime Reservierungen f&uuml;r sich selbst oder f&uuml;r eine andere Person vorzunehmen, f&uuml;r die Sie gesetzlich berechtigt sind zu handeln;
	</li>
	<li>
		Sie werden diese anderen Personen &uuml;ber diese Vereinbarung informieren, die f&uuml;r die Vorbehalte gilt, die ich in ihrem Namen gemacht habe, einschließlich aller Regeln und Einschr&auml;nkungen, die darauf anwendbar sind;
	</li>
	<li>
		Alle Informationen, die Sie der Website zur Verf&uuml;gung stellen, sind wahr, genau, aktuell und vollst&auml;ndig; und
	</li>
	<li>
		Sie werden Ihre Kontoinformationen sch&uuml;tzen und sind f&uuml;r jede Nutzung Ihres Kontos durch Sie und andere Personen außer Ihnen verantwortlich.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Sicherheit und Transparenz sind uns wichtig..' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'Wir nehmen unsere Verantwortung bei der Speicherung Ihrer Daten sehr ernst. Alle personenbezogenen Daten (PII) werden in unserer Datenbank mit Hilfe von Algorithmen nach Industriestandard verschl&uuml;sselt gespeichert, um sicherzustellen, dass nur autorisierte Benutzer diese Informationen einsehen k&ouml;nnen.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Sie k&ouml;nnen alle PII, die wir f&uuml;r Sie speichern, herunterladen.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Jetzt herunterladen' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Recht auf Vergessen zu werden (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'Wir glauben, dass Sie in der Lage sein sollten, Ihre <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personenbezogenen Daten</a> zu <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">l&ouml;schen</a>, wenn Sie wollen und wenn es praktikabel ist. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Du bist nicht auf dieser Seite registriert. Ihr allgemeiner Standort (Land) und Ihre IP-Nummer werden maximal 24 Stunden lang gespeichert und anschließend gel&ouml;scht.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Sie sind auf dieser Website nicht registriert und haben sich von der Datenerhebung ausgeschlossen. Wir haben Ihre PII nicht gespeichert.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Du bist auf der Seite registriert und hast keine offenen oder aktiven Buchungen. Wir k&ouml;nnen die meisten Informationen, die wir derzeit f&uuml;r Sie speichern, anonymisieren. W&uuml;rdest du das gerne tun? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Hinweis: Dadurch wird Ihr Konto nicht gel&ouml;scht, sondern lediglich unsere Datens&auml;tze anonymisiert, so dass Ihr Konto nicht mit Ihnen als Person in Verbindung gebracht werden kann. Nach dem Gesetz m&uuml;ssen wir Ihre PII weiterhin f&uuml;r Abrechnungszwecke speichern, jedoch werden wir alle G&auml;stes&auml;tze l&ouml;schen.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Vergiss mich!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Das kann nicht r&uuml;ckg&auml;ngig gemacht werden!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Deine Daten wurden gel&ouml;scht!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Es tut uns leid, Sie k&ouml;nnen keine Buchung vornehmen, da Ihre E-Mail-Adresse ung&uuml;ltig ist.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

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
