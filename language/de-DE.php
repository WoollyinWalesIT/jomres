<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
// German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
// German Translation Revision 2010 © Klaus Bogotz (http://klabog.de)
// Corrected tons of typos, completed and changed style to avoid - where possible - the German typical problem of formal and informal style
// I did my best to form the composed phrases in a good style but as if I'm not able to proof all responds there could be some rubbish.
// If you find anything that should be corrected (in the German language file) send it to apartment@gr7.org.
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife im Rahmen, nicht als PopUp anzeigen?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adressinformation');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Kurzinformationen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Zimmer und Verfügbarkeit anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Zeigt Preise an');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformationen unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verfügbarkeit unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Preise unter diesem Link anzeigen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Tarifmodell wählen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/>Sind die entsprechenden Zeiträume ausgewählt, den blauen Button drücken um die Sperrung zu bestätigen.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt.</b> Bitte neu einloggen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Online Zahlung?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'JA markieren um Online-Zahlungen zu akzeptieren. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise wählen.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin-Einstellung geändert');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin-Einstellung eingefügt');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Kreditkarte gelesen');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Kreditkarte aktualisiert');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Kreditkarte bearbeiten');
jr_define('_JOMRES_COM_A_EDITICON', 'Icongröße bearbeiten');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Unterkunftbilder hochladen');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Vorhandene Bilder');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diaschau');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diaschau anzeigen?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diaschau in der Unterkunft eingebettet?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Höhe des Vorschaubilds');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Diaschau');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Leider kein Bild für dieses Unterkunft verfügbar');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Preisen anzeigen?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'PopUps erlaubt?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Falls auf NEIN gesetzt, werden Links, die normalerweise in einem PopUp geöffnet werden, im aktuellen Rahmen der Seite geöffnet. TESTPHASE! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload von Bildern');
jr_define('_JOMRES_A_TABS_MISC', 'Diverses');
jr_define('_JOMRES_A', 'Konfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Allgemeine Unterkünfteigenschaften benutzen');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'JA markieren, falls alle Unterkünfte die vom Webmaster voreingestellten Eigenschaften verwenden müssen.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Gewünschtes Such-Plugin auswählen.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Die Suche zeigt leider kein Ergebnis. Eingabe ändern und erneut versuchen.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Sind Sie sicher?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'Sicherheitscode');
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Schnellreservierung');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Benutzerprofile anzeigen und Rechte setzen');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Leer lassen');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Allgemeine Einstellungen');
jr_define('_JOMRES_COM_MR_BACK', 'Zurück');
jr_define('_JOMRES_COM_MR_YES', 'Ja');
jr_define('_JOMRES_COM_MR_NO', 'Nein');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Neu');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Neue Unterkunft');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Neue Unterkünfteigenschaften');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Neuer Gast');
jr_define('_JOMRES_COM_MR_SAVE', 'Sichern');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nachname');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ankunftsdatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Abreisedatum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Leer');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Benutzerrechte definieren');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Name');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Benutzername');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'momentan autorisiert');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Standardhotel');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'ändern');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Zugangsrechte');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Benutzer geändert');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Rezeption');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Hotelmanager');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Buchungs-Administration');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Buchung ändern für ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Ankunft/Abreise');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gast');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Zimmer');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Bezahlung');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Vorname');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nachname');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Besondere Wünsche');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Bitte beachten Sie, dass manche Sonderwünsche Zusatzkosten verursachen können.');
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
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Stornierung bestätigen');
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
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kreditkartennr.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'gültig von');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'gültig bis');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Ausgabenummer (falls vorhanden)');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Inhaber der Kreditkarte');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Schnellauswahl Preise');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Anzahl Tage');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Anzahl Gäste');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Gesamt');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Zimmer- und Unterkünfteinstellungen anzeigen');
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
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Behindertengerecht?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. Belegung');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Zimmer hinzugefügt');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Bearbeiten');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Zimmereigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Beschreibung der Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Zimmereigenschaften hinzugefügt');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Zimmereigenschaften aktualisiert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Zimmer Kategorien');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Zimmerkategorie, Kurzfassung');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beschreibung Zimmerkategorie');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Zimmerkategorie hinzugefügt');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Zimmerkategorie aktualisiert');
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
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Unterkunft hinzugefügt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Unterkunft aktualisiert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Unterkunft Eigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Unterkünfteigenschaften, Kurzfassung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Beschreibung  der Unterkünfteigenschaften');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Unterkünfteigenschaften hinzugefügt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Unterkünfteigenschaften aktualisiert');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Preise');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Preis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Beschreibung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Gültig von');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Gültig bis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Preis pro Nacht');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Tage min.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Tage max.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. Belegung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. Belegung');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Zimmerkategorie');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'pP/pN ignorieren');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Wochenenden erlauben');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarif hinzugefügt');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarif aktualisiert');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Bearbeiten');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Duplizieren');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif gelöscht');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Tarif bearbeiten');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Feiertage');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Buchung gespeichert');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Gast einchecken');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Gast auschecken');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Buchungen auflisten');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Neue Buchungen auflisten');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Dashboard');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Übersicht Gäste');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Unterkünfte bearbeiten');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verfügbarkeit prüfen');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Daten bestätigen');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Vorname');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nachname');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Straße');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ort');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PLZ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Leider sind keine Zimmer verfügbar, die den Kriterien entsprechen.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Vielen Dank für Ihre Buchung. Wir werden Sie in Kürze kontaktieren, um Ihre Zahlungsmethode zu bestätigen. <br><br> <b>Bitte beachten Sie, dass dies nur eine vorläufige Buchung ist. Diese ist abgeschlossen, sobald Sie eine schriftliche Bestätigung von uns erhalten haben. <br><br>Falls Sie Ihre Anzahlung per PayPal angewiesen haben, ist die Transaktion bereits abgeschlossen, und eine Einzahlungsbestätigung wurde an Ihre angegebene E-Mail-Adresse versandt. Sie können sich nun mit Ihren Zugangsdaten bei www.paypal.de einloggen, um die Details einzusehen. </b><br>');

jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Gast einchecken');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Gast auswählen');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gast eingecheckt');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Heute kommen keine Gäste an.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gast auschecken');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Heute reisen keine Gäste ab.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Zuschläge');
jr_define('_JOMRES_COM_A_TARIFFS', 'Preise');
jr_define('_JOMRES_COM_A_DISCOUNTS', 'Rabatte');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Datei-Upload');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS', 'aktuelle Einstellung');
jr_define('_JOMRES_COM_A_EXPLANATION', 'Erklärung');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Einzelzimmerzuschläge');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Hier Ja einstellen, wenn Einzelzimmerzuschläge berechnet werden sollen.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Einzelzimmerzuschlag');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Wird die Anzahlung prozentual berechnet?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Ist die Anzahlung ein prozentualer Anteil des Gesamtbetrages? Wenn NEIN, wird ein pauschaler Anzahlungsbetrag addiert.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Preis Anzahlung');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Pro Person, pro Nacht');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Hier Ja einstellen, wenn die Preise pro Person / pro Nacht berechnet werden soll. Wenn NEIN, werden die Kosten pro Zimmer / pro Nacht berechnet.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Dateigröße');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maximale Dateigröße in Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Belegt');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservierungsdaten:');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Wir möchten Sie darauf hinweisen, dass Sie mit dieser Buchung einen rechtsgültigen Vertrag eingehen. Sollten Sie also - aus welchem Grund auch immer - Ihre Buchung stornieren oder den Zeitraum Ihres Aufenthalts verkürzen müssen, könnten trotzdem die vollen Kosten fällig werden.');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornierungs- und Kürzungsrichtlinien</i><br> Wenn Sie Ihren Urlaub absagen, muss diese Absage schriftlich bestätigt werden. Nachfolgend finden Sie eine Übersicht über die anfallenden Stornierungskosten:');

jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Ab 14 Tagen im Voraus');

jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Bestätigungsmail ausdrucken');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Rechnungsausdruck');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Anzahl Nächte: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Vereinbarte Bedingungen: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Preis pro Nacht: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Gesamtbetrag');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Vielen Dank, dass Sie unser Kunde sind am');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Wir hoffen, Sie hatten einen angenehmen Aufenthalt.');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Rechnung ausdrucken');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Extras zur Rechnung hinzufügen');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Beschreibung der Extras');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Preis Extras');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Weitere berechnete Posten');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Weitere berechnete Posten, Gesamtbetrag: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Posten zur Rechnung hinzugefügt');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Bild hochladen');
jr_define('_JOMRES_FILE_UPLOAD', 'Datei hochladen');
jr_define('_JOMRES_FILE_ERROR_TYPE', 'Nur Dateien der folgenden Formate dürfen hochgeladen werden:/n');
jr_define('_JOMRES_FILE_ERROR_EMPTY', 'Bitte Datei auswählen.');
jr_define('_JOMRES_FILE_ERROR_NAME', 'Der Dateiname darf nur alphanumerische Zeichen enthalten, bitte auch keine Leerzeichen verwenden.');
jr_define('_JOMRES_FILE_ERROR_SIZE', 'Diese Datei überschreitet leider die erlaubte Maximalgröße');
jr_define('_JOMRES_FILE_NOT_UPLOADED', 'Datei wurde NICHT hochgeladen.');
jr_define('_JOMRES_FILE_UPDATED', 'Datei erfolgreich aktualisiert.');
jr_define('_JOMRES_COM_A_JSCALENDAR', 'JS-Kalender');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE', 'Sprachdatei für JS-Kalender');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Hier können Sie die Sprachdatei für den Javascript-Kalender auswählen. Bitte beachten Sie, dass es momentan Probleme mit diesen Sprachdateien gibt. Aus unerfindlichen Gründen scheinen bisher nur die englische und deutsche Version zu funktionieren. Für weitere Informationen besuchen Sie bitte <a href="http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse" target="_blank">die Website der Entwickler</a>.');
jr_define('_JOMRES_COM_A_CALENDARCSS', 'CSS-Datei für JS-Kalender');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC', 'CSS-Datei auswählen, die das Design des Javascript-Kalenders bestimmt.');
jr_define('_JOMRES_COM_A_ODDS', 'Verschiedenes');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Fehlerüberprüfung ein?');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Hier JA einstellen, um das Script vor der Inbetriebnahme auf Fehler zu prüfen. Bitte im laufenden Betrieb auf NEIN stellen - Besuchern wird sonst ein Datenkauderwelsch angezeigt!');
jr_define('_JOMRES_FILE_DELETE', 'Bild löschen');
jr_define('_JOMRES_FILE_DELETED', 'Bild gelöscht');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY', 'Alle Unterkünfte');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Zimmer löschen');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Dieses Zimmer kann nicht gelöscht werden, da hierfür bereits Buchungen vorliegen. Bitte diese Buchungen stornieren und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Zimmer gelöscht');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Zimmereigenschaften löschen');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Diese Zimmereigenschaft kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Eigenschaft bei diesen Zimmern entfernen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Zimmereigenschaften gelöscht');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Unterkunft-Eigenschaften löschen');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Diese Unterkunft-Eigenschaft kann nicht gelöscht werden, da sie bereits einigen Unterkünften zugeordnet wurde. Bitte diese Eigenschaft bei diesen Unterkünften entfernen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Unterkunft-Eigenschaft gelöscht');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Zimmerkategorien löschen');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Zimmer einer anderen Kategorie zuordnen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einem Tarif zugeordnet wurde. Bitte den Tarif einer anderen Zimmerkategorie zuordnen und erneut versuchen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Zimmerkategorie gelöscht');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Unterkunft löschen');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Unterkunft gelöscht');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Sie haben nicht die erforderlichen Zugriffsrechte, um dieses Unterkunft zu löschen.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Breite der großen Bilder');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Link zur Landkarte');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Unterkunft-Beschreibung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-In Check-Out Zeiten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivitäten in der Umgebung');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Anfahrt');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Flughäfen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Weitere Verkehrsanbindungen');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Richtlinien, Haftungsausschluss usw.');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Besucher sollen online buchen können');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Hier JA einstellen, um sicherzustellen, dass die Besucher online Zimmer buchen können. Falls nicht erwünscht ist, dass Zimmer übers Internet gebucht werden können, bitte auf NEIN stellen.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Fixe Buchungszeiträume?');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Wenn hier JA eingestellt ist, werden die Zimmer für voreingestellte Zeiträume gebucht.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Buchungszeitraum: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Buchungen ');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximale Anzahl Buchungsperioden. Beispiel: 3 mal 7 Buchungsperioden = 21 Tage.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Ist dies ein Ein-Zimmer-Unterkunft?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'JA einstellen, wenn z.B. statt einzelner Zimmer eine komplette Unterkunft vermietet werden soll.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Buchung überprüfen');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Buchung bestätigen');
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
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Schriftfarbe für den aktuellen Tag');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Schriftfarbe für Tage des aktuellen Monats');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Schriftfarbe für Tage des vorherigen und nächsten Monats');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Zellenfarbe für Tage des aktuellen Monats');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Zellenfarbe für Tage des vorherigen und nächsten Monats');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Zellenfarbe für belegte Tage');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Zellenfarbe für vorreservierte Zimmer (Buchungen, für die noch keine Anzahlung geleistet wurde)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Zellenfarbe für Tage in der Vergangenheit');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Belegt / nicht buchbar');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Frei und buchbar');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Vorreserviert');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Voreingestellter Ankunftstag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Nur für Seiten, die fixe Buchungszeiträume anbieten. Wochentag wählen, an dem angereist werden muss.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Voreingestellter Ankunftstag ist');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Buchungszeitraum (Tage)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Verfügbarkeitskalender anzeigen?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Hier JA einstellen, um den Verfügbarkeitskalender anzuzeigen.');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Verfügbarkeit');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Um zum Buchungsformular zu kommen bitte auf ein freies Datum klicken.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Blankobuchungen');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Neue Blankobuchung');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Gast löschen');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gast gelöscht');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Dieser Gast konnte nicht gelöscht werden, weil noch Buchungen von ihm vorliegen. Buchungen stornieren und erneut versuchen.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Tatsächliche Zimmerkosten: ');

jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Raucher');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Egal');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Ausgabeformat Kalender');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC', 'Ausgabeformat für das Datum im Kalender ändern.');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Eingabeformat Kalender');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Eingabeformat für das Datum im Kalender ändern.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Bei fixen Buchungszeiträumen Kurzunterbrechungen erlauben');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Länge der Kurzunterbrechung (Tage)');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Veröffentlicht');
jr_define('_JOMRES_COM_A_PAYPAL', 'PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Änderungsprotokoll');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME', 'Uhrzeit');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Benutzer (Benutzername)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Arbeitsschritt');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Details anzeigen');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Nach Datum filtern');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Nach Benutzernamen filtern');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Nach Arbeitsschritt filtern');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ankunft steht aus');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Reist heute an');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktueller Gast, anwesend');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Reist heute ab');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Abreise überfällig');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Ist nicht angekommen');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Unbekannter Benutzer');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Erstelltes Zimmer');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualisiertes Zimmer');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Gelöschtes Zimmer');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Zimmereigenschaft erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Zimmereigenschaft aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Zimmereigenschaft gelöscht');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Zimmerkategorie erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Zimmerkategorie aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Zimmerkategorie gelöscht');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Unterkunft erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Unterkunft aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Unterkunft gelöscht');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft gelöscht');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Unterkunft-Einstellungen bearbeitet');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Unterkunft veröffentlicht');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarif erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarif aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Tarif gelöscht');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Servicegebühren hinzugefügt');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Gast eingecheckt');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Gast ausgecheckt');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Anzahlung eingegeben');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Gast erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Gast aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST', 'Gast gelöscht');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Zimmer gebucht');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Zuschlag erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Zuschlag aktualisiert');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Zuschlag gelöscht');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Zuschlag veröffentlicht');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Blankobuchung getätigt');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Blankobuchung gelöscht');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Zuschläge');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Beschreibung');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Name');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Preis');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Zuschlag aktualisiert');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Zuschlag bearbeiten');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Zuschlag gelöscht');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Zuschläge bearbeiten');
jr_define('_JOMRES_COM_A_EXTRAS', 'Zuschläge bei der Buchung anzeigen?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Hier JA einstellen, um eventuelle Zuschläge anzuzeigen, die dem Gast angeboten werden sollen.');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Optionale Zuschläge.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Startdatum<br> Blankobuchnung - ab wann ist reserviert');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Enddatum<br> Blankobuchung - ab wann ist wieder frei');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Blankobuchungen bearbeiten');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Beim Versuch, dieses Zimmer zu buchen, ist ein Fehler aufgetreten. Eines oder mehrere der ausgewählten Zimmer sind nicht frei.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Zimmer enthalten in der Blankobuchung');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Blankobuchung anzeigen');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Keine Blankobuchungen vorhanden');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Anzahl Sterne');
jr_define('_JOMRES_COM_A_SMOKING', 'Raucher/Nichtraucher anzeigen?');
jr_define('_JOMRES_COM_A_SMOKING_DESC', 'Hier JA einstellen, um eine Auswahl Raucher/Nichtraucher anzuzeigen.');
jr_define('_JOMRES_COM_A_RESET', 'Zurücksetzen');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Buchung storniert.');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Suchen nach:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION', 'Raucher / Nichtraucher Voreinstellung');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Währungssymbol');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'z.B. &amp;euro&#59; Bitte beachten, dass hier der korrekte HTML-Code für das Währungssymbol eingeben werden sollte. Für eine Liste dieser Codes bitte <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a> besuchen.');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Währungscode');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC', 'z.B. GBP. Dies wird benötigt, wenn PayPal benutzt werden soll. Für eine Liste dieser Codes bitte <a href="http://www.xe.com/iso4217.htm">XE.com</a> besuchen.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Information');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Vorausbuchungszeitraum einschränken?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Hier JA einstellen, wenn der Vorausbuchungszeitraum einschränkt werden soll. (Im nächsten Feld kann der maximale Vorausbuchungszeitraum in Tagen eingeben werden.) Wenn hier JA eingestellt ist, und ein Gast versucht, früher als x Tage im Voraus zu buchen, wird sein Ankunftsdatum auf das heutige Datum zurückgesetzt.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Vorausbuchungszeitraum eingeschränkt auf Tage:');
jr_define('_JOMRES_COM_A_TAX_WARNING', '<font color=red>Hinweis: Es wird nicht empfohlen, beide der folgenden Optionen auf JA zu stellen. Es sollte nach Möglichkeit nur eine der beiden Steueroptionen benutzt werden. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Steuern');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Steuern');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC', 'Entwickelt für den amerikanischen Markt. Diese Steuern werden dem Gast auf die Zimmer erhoben. Es kann zwischen Pauschalbeträgen, prozentualem Steuersatz oder einer Kombination aus beidem ausgewählt werden. Bitte beachten, dass sich diese Steuern nur auf die reinen Zimmerpreise beziehen.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Pauschalsteuer Betrag');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Steuer Prozentsatz');
jr_define('_JOMRES_COM_A_EUROTAX', 'Pauschalsteuer');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Pauschalsteuer Betrag');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Alle Einträge archivieren');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' Einträge archiviert');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Prüfer hat Einträge archiviert');
jr_define('_JOMRES_FRONT_TARIFFS', 'Unsere Tarife');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifbezeichnung');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarifbeschreibung');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Zimmerkategorie');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Gültig von');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Gültig bis');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Pro Person / pro Nacht');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Pro Nacht');
jr_define('_JOMRES_FRONT_TARIFFS_NOWEEKEND', 'ohne Wochenenden');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Tage min.');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Tage max.');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. Belegung');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. Belegung');
jr_define('_JOMRES_FRONT_PREVIEW', 'Vorschau');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Bearbeiten ein?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Aktueller Text');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT', 'Neuer Text');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Text wurde aktualisiert.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Sprache bearbeiten');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING', 'Letzte 200 Einträge werden angezeigt ');
jr_define('_JOMRES_FRONT_PTYPE', 'Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Unterkunft-Kategorien auflisten');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Unterkunft-Kategorien bearbeiten');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Beschreibung Unterkunft-Kategorie');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Unterkunft-Kategorie gespeichert');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Unterkunft-Kategorie kann nicht gelöscht werden. Die Unterkunft-Kategorie ist bereits einem oder mehreren Unterkünften zugeordnet. Bitte vor dem löschen der Unterkunft-Kategorie diese Zuordnungen ändern.');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Unterkunft-Kategorie(n) gelöscht');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Zahlungserinnerung');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Keine Zuschläge zur Rechnung hinzufügen');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Anzahlung');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'kompletter Betrag');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Betrag, der bei der Buchung erhoben werden soll');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Hier einstellen, welcher Betrag bei der Buchung erhoben werden soll: Anzahlung, wenn nur die Anzahlung sofort erhoben werden soll, oder kompletter Betrag, wenn gleich der komplette Zimmerpreis in Rechnung gestellt werden soll.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendermonate anzeigen');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Wie viele Kalendermonate sollen bei den verfügbaren Zimmern angezeigt werden?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'unterzeichnet im Auftrag von ');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Zahlung');
jr_define('_JOMRES_COM_A_CANCEL', 'Abbrechen');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Bitte die Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn die entsprechenden Zeiträume ausgewählt sind, den blauen Button drücken um die Sperrungen zu bestätigen. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt</b> Bitte erneut einloggen und erneut versuchen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Onlinezahlung akzeptieren?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'JA markieren, falls Online-Zahlungen akzeptiert werden sollwollen. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise wählen.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin Einstellung geändert');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin Einstellung eingefügt');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Webseite dieser Unterkunft anzeigen');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Externer Link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Link zur eigenen Webseite hier einfügen.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Kreditkarte erfasst');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Kreditkartendetails ändern');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Bearbeite Kreditkartendetails');
jr_define('_JOMRES_COM_A_EDITICON', 'Icongröße bearbeiten');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Unterkunftbilder hochladen');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Bild bereits im Verzeichnis vorhanden');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diashows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diashow zeigen?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diashows in Unterkunft eingebettet zeigen?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Höhe Vorschaubild');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Diashow');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Leider kein Bild für diese Unterkunft verfügbar ');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Tarifen zeigen?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups erlaubt?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Wenn auf NEIN gesetzt, werden die Links im Popup geöffnet anstatt innerhalb des Artikels. TESTPHASE! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Bilder hochladen');
jr_define('_JOMRES_A_TABS_MISC', 'Verschiedenes');
jr_define('_JOMRES_A', 'Seitenkonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Die allgemeinen Einstellungen benützen');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'JA markieren, falls die Unterkunft Eigenschaften durch den Webmaster einheitlich voreingestellt werden.');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Such-Plugin wählen das verwendet werden soll.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Leider ergibt die Suche kein Ergebnis. Bitte Eingabe ändern und erneut versuchen.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Sind Sie sicher?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'Sicherheitsnummer');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife in Unterkunft eingebettet zeigen?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresse');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailinformationen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Für Zimmer und Verfügbarkeit klicken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Preisinformationen zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformation unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verfügbarkeit unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Tarife unter diesem Link zeigen');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Wählen Sie das gewünschte Tarifmodell');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Eingabefeld des Abreisetags anzeigen?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Auf NEIN setzen, wenn der Abreisetag nicht angezeigt werden soll. Diese Einstellung nur ändern falls wichtige Gründe vorliegen. Der Abreisetag in der Buchung wird dann automatisch der nächste Tag nach der Anreise sein.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limit der Beschreibung');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Maximale Anzahl der Buchstaben festlegen die in der Unterkunftbeschreibung angezeigt werden sollen.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Kalenderformatierung benutzen?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'JA wählen um die Datumsausgabe anzupassen. (Beispiel <a href="http://www.php.net/manual/en/function.date.php">hier</a>). Auf NEIN setzen um das strftime() Format zu benutzen. (Beispiel <a href="http://www.php.net/manual/en/function.strftime.php">hier</a>) zB. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Veröffentlichen');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Rückgängig veröffentlichen');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe für Fehler');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Standardland für Buchungsformular');
jr_define('_JOMRES_JAVASCRIPT_', 'Felder mit dem roten Stern, sind zwingend erforderlich.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Dürfen Benutzer eigene Unterkünfte veröffentlichen?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Hier JA einstellen, wenn den Benutzern erlaubt ist, eigene Unterkünfte zu veröffentlichen. Ohne Backend Admin-Einstellungen.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Land und Region für die Unterkunft wählen.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Unterkunftdetails ergänzen.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Felder mit dem roten Stern, sind zwingend erforderlich.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Unterkunft erfolgreich erstellt');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', 'Leider können Sie kein Unterkunft erstellen. Sie müssen als registrierter Benutzer eingeloggt sein und Sie dürfen noch keine Unterkunft erstellt haben.');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Erstellte Unterkünfte: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Für Benutzer: ');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Kalenderanzeige auf Jahresanfang?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Der Buchungskalender wird auf Anfang des laufenden Jahres gestellt.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Anzahl verfügbare Räume');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Zurück zu den Unterkunft-Details');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Zimmer Typ');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung die Sie noch bestätigen müssen.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie noch bestätigen müssen.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Buchungsdetails');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Einzelheiten zur Buchung wählen');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Verfügbarkeit ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Bitte Zimmer auswählen/abwählen');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Prüfen, ob die Unterkunft während dieser Zeit verfügbar ist.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Optionale Zuschläge');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Wählen Sie die gewünschten Zuschläge, die Sie Ihrer Buchung hinzufügen wollen');
jr_define('_JOMRES_COM_PERDAY', 'Pro Nacht');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Ihre Adresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Ihre persönlichen Angaben. Beachten Sie, dass sämtliche Felder außer die Handynummer benötigt werden');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Verfügbare Zimmer');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Gewählte Zimmer');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Der frühest mögliche Anreisetag ist: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Pro Nacht:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Zimmerpreis:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Zuschläge:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Steuer:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Ermäßigung:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Gesamtpreis:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gäste');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klicken Sie hier, um dieses Zimmer zu Ihrer Auswahl hinzuzufügen');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klicken Sie hier, um dieses Zimmer von Ihrer Auswahl zu entfernen');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Gästetypen');
jr_define('_JOMRES_VARIANCES_TYPE', 'Typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Gästetyp, zB. Kinder 5 bis 10 Jahre, oder Student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Notizen');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Schreiben Sie hier Ihre Bemerkungen zu den verschiedenen Gästetypen');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximum der Personen, die pro Gastyp erfasst werden dürfen');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Prozentual');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Der berechnete Betrag wird als prozentualer Anteil des Tagesbetrags für dieses Zimmer berechnet. Wenn auf NEIN gesetzt, wird der vorgegebene Betrag zum Grundbetrag addiert oder subtrahiert.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Addiere Abweichung?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Der berechnete Betrag wird zum Grundbetrag des Zimmers addiert oder subtrahiert. Auf /Minus/ setzen, wenn es als Rabatt vom Grundbetrag eingesetzt werden soll. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Abweichung');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Betrag der Abweichung');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Gästetyp geändert');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Gästetyp veröffentlicht');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Gästetyp gelöscht');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Gästetyp erstellt');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Gästetyp aktualisiert');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Gästetyp aktualisiert');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zeige Link zu den Zimmern in den Unterkunft-Details?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zeige <b>nur</b> Verfügbarkeitskalender?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Wählen Sie JA, wenn Sie die Anzeige für Unterkunftstitel und Beschreibung deaktivieren möchten. Es ist dann nur der Verfügbarkeitskalender der Zimmerliste sichtbar. Diese Option ist nur für Benutzer gedacht die Einzimmer-Unterkünfte anbieten (zB. Wohnungen, Chalets etc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Ankunft/Abreisetag Mindest-Intervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimale Tagesanzahl zwischen Ankunfts- und Abreisetag.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Buchungsformular Zimmerliste Nummer anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Buchungsformular Zimmerliste Name anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Buchungsformular Zimmerliste Tariftitel anzeigen');
jr_define('_JOMRES_ORDER', 'Anordnung');
jr_define('_JOMRES_REQUIREDFIELDS', 'Benötigt ');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Anzahl Tage vor Ankunft');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Anzahl der Tage die von "heute" bis zum Ankunftstag gesperrt sind.');
jr_define('_JOMRES_DTV', 'Datumsvariante');
jr_define('_JOMRES_DTV_DOW', 'Wochentag');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Standard Gästetyp');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardwert für den ersten Gästetyp. Wenn mehrere Gästetypen verwenden werden ist dies der verwendete Standardwert im verschickten Buchungsformular falls der Gast keine Wahl getroffen hat.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Können nur registrierte Besucher online buchen?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Leider können nur registrierte Benutzer online buchen. Hier klicken um sich zu registrieren. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Schriftfarbe für Links der aktuellen Buchungen');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Zellenfarbe für die Markierung der Wochenenden');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Zimmer ist gebucht');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Verdeckte Buchung');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Anzahlung auf die nächste Ganzzahl aufrunden?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Anzahlung verlangen?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Wochenpreis erheben?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ist diese Funktion aktiviert, wird der Einheitspreis als Wochenpreis angezeigt und pro Woche statt als Tagessatz berechnet.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Preis pro Woche');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fester Ankunftstag: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Wenn feste Ankunftszeiten gewählt sind kann das Datum in der Dropdown-Liste ausgewählt werden');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Raucher Option ungültig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Falsches Ankunftsdatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Falsches Abreisedatum');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Der Buchungszeitraum ist zu kurz. Mindestanzahl der Tage zwischen Ankunft und Abreise:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ihr Intervall ist');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Gasttyp-Variante ungültig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Wählen Sie Anzahl Personen/Typ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Zu große Anzahl für die verfügbaren Preise in der Gruppe');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Mehr Zimmer gebucht als Gäste vorhanden');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Zu viele Gäste für die verfügbaren Betten');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Mehr Zimmer wählen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Ein Zimmer wählen');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Vorname benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Nachname benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Haus Nr/Name benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Straße benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Ort benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postleitzahl benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Land benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefonnummer benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Handynummer benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-Mail-Adresse benötigt');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Die E-Mail-Adresse ist ungültig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Das Überprüfen der E-Mail-Domain ist fehlgeschlagen');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Wir haben noch freie Plätze!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Kein Zimmer ausgewählt');
jr_define('_JOMRES_BOOKING_NUMBER', 'Buchungs Nr.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe für erfolgreiche Buchung');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Template Variablen übernehmen?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Wenn diese Funktion aktiviert ist werden die DHTML Variablen von der FRONTEND Vorlage anstelle der Variablen dieser Seite übernommen. Nützlich, wenn bestimmte Elemente mit den Variablen der vorhandenen Vorlagen angezeigt werden sollen.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Prozentuale Abrechnung');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Auf JA stellen wenn der Preis für jede Person anteilig berechnet werden soll. Falls nein, wird ein Gesamtbetrag pro Buchung angezeigt.');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Link zur Währungs-Umrechnungstabelle in Preisliste anzeigen?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Währungsrechner, aktueller Tagessatz für:');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Einheitliche Zimmerkonfiguration');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC', 'Hier JA einstellen, wenn eine einheitliche Zimmerkonfiguration für alle Unterkünfte benutzt werden soll.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Allgemeines Suchlimit');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Buchungs-Administration <br/> Neue Buchungen');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Maximum Anzahl Zimmer');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Hier festlegen wie viele Zimmer pro Unterkunft zur Verfügung stehen');
// Introduced in v2.5
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'HTML-Editor für Benutzer erlauben?');
// Translate from here 2.6.2
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Verfügbare Zimmer jetzt buchen: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Einheitlicher Editiermodus?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Vorsicht mit dieser Funktion. Falls JA betrifft es alle Textkonstanten systemweit. Einzelne Unterkünfte können dann keine eigenen Textkonstanten editieren.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Einheitliche Währung benutzen?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Auf JA setzten damit alle Unterkünfte die gleiche Währung verwenden (z. B. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Einheitliches Währungssymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponente gewrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Auf JA setzen wenn Module und Header nicht sichtbar sein sollen');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Unterkunft Manager');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Nur Wochenenden');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Wochenend-Tage');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Tage für Wochenende einstellen. Tarife, die Wochenenden erlauben oder verbieten übernehmen diese Einstellungen in die generierte Zimmerliste.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Land auswählen bevor die Unterkunft-Informationen eingeben werden.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Änderungen vor dem hochladen eines Unterkunftsbilds speichern.');
jr_define('_JOMRES_TARIFFSFROM', 'Preise ab');
jr_define('_JOMRES_SEARCH_ALL', 'Alle');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Suche nach Land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Suche nach Region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Suche nach Stadt');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Suche Eigenschaft.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Suche');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Suchwort in die Textbox eingeben und den Button drücken.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Suchwort(e): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Gewünschtes An- und Abreisedatum eingeben und den Button drücken um Unterkünfte zu finden die frei Kapazitäten zum gewünschten Zeitpunkt haben.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Unterkunft Typ');
jr_define('_JOMRES_SEARCH_RTYPES', 'Zimmertyp');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Voreinstellung');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Unterkunft Name');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Unterkunft Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Unterkunft Stadt');
jr_define('_JOMRES_SORTORDER_STARS', 'Sterne');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST', 'Unterkunftliste');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Unterkunftsdetails');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Buchungsformular');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Adressangaben aktualisieren');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-check der Zimmer-Verfügbarkeit<br/>(Zimmerauswahl wird zurückgesetzt)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-check der Verfügbarkeit');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Änderung der optionalen Extras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Änderung der Zimmerauswahl');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Aktualisierung der Adressangaben');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Leider sind eines oder mehrere Adressfelder fehlerhaft.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Zimmerbild');
jr_define('_JOMRES_CURRENCYFORMAT', 'Währungsformat');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES', 'Manager-Optionen, als Icons anzeigen');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Suchoptionen');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Vorhandene Logs');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES', 'Keine Log Einträge vorhanden. Dies ist üblich. Sie müssen die jomres.php Datei anpassen um die Log-Einträge zu verändern');
jr_define('JOMRES_COM_A_MESSAGE', 'Nachrichten');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Erweitert');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microverwaltung');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tarif-Konfiguration-Modus');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Warnung: Der Wechsel zwischen den verschiedenen Tariftypen kann zu Datenverlust führen. Bitte folgende Hinweise beachten.</b>.
<br/><br/>
Es gibt drei Möglichkeiten die Preisberechnung zu konfigurieren.<br/>
Normal: Ein für die nächsten 10 Jahre gültiger Preis für jeden Raumtyp.<br/>
Microverwaltung: Für jeden Tag, jeden Raum-/Unterkunftstyp und alle Kombinationen daraus kann ein modifizierter Preis ausgegeben werden. <br/>
Erweitert: Die \"alte" Methode mit der Jomres die Preise berechnete. <br/>
<br/>
Die verschiedenen Preismodi erlauben eine Methode zur Preisgestaltung zu wählen die die eigenen Anforderungen am besten umsetzt.<br/>
Der Normalmodus ist die einfachste und leicht verständlichste Methode, da sie nur Kreuzreferenzen zwischen Preisen und Raum-/Unterkunftstypen erstellt und erlaubt Räume und Preise auf der selben Seite zu konfigurieren.<br/>
Microverwaltung erlaubt die Preise auf einer täglichen Basis zu variieren ohne Unmengen von Tarifen zu erstellen. Es werden Kreuzreferenzen zwischen verschiedenen Tarifen erstellt. Daraus resultiert eine Anzahl von Tarifen die zur Abdeckung einer Zeitperiode dienen, sich aber nicht überlappen können.<br/>
Der erweiterte Modus erlaubt einen Raum zu erstellen und mit einem Raumtyp zu verbinden. Es wird dann ein Tarif erstellt und DIESER mit einem Raumtyp verbunden. Diese Methode erlaubt jeden anderen Tarif zu "überlagern", z.B. ein Raumtyp "Doppelbett" kann einen Preis für Übernachtung und Frühstück haben und einen anderen Preis für Übernachtung, Frühstück und Abendessen. Die erweiterte Methode erfordert etwas mehr Sorgfalt im Detail weil es möglich ist einen Raum oder Tarif vom Raum-/Unterkunftstyp zu entkoppeln, oder ungültige Gültigkeitszeiträume zu erstellen. Sie bietet aber Konfigurationsmöglichkeiten die in den anderen Modi nicht gegeben sind.<br/>
<br/>
Da Normalmodus und Microverwaltung eine spezielle Konfiguration der Räume und Tarife benötigen um die Berechnungen durchzuführen kann es sein, dass das System einige Daten zurücksetzen muss um die augenblickliche Konfiguration der Tarife mit dem aktiven Tarif-Editor kompatibel zu machen.
<br/>
<br/>
Normal -> Erweitert. Keine Änderung. Die vorhandenen Preise bleiben erhalten.<br/>
Normal -> Microverwaltung. Alle vorhandenen Preise werden gelöscht.<br/>
Erweitert -> Normal. Alle vorhandenen Preise werden gelöscht.<br/>
Erweitert -> Microverwaltung. Alle vorhandenen Preise werden gelöscht.<br/>
Microverwaltung -> Erweitert. Alle vorhandenen Referenzen zu den Preisen werden entfernt, aber die Preise selber bleiben bestehen.<br/>
Microverwaltung -> Normal. Alle vorhandenen Referenzen und Preise werden gelöscht.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Zimmerliste in Unterkunfsdetailsseite anzeigen?');
jr_define('JOMRES_PROPERTYTYPE', 'Unterkunftstyp');
jr_define('JOMRES_COM_A_SRPONLY', 'Nur eine SRP ');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max Personen pro Zimmer');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max Personen pro Buchung');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Notiz hinzufügen');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Notiz bearbeiten');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Notiz löschen');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notiz anzeigen');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Notiz hinzufügen');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Notiz bearbeiten');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Notiz löschen');
jr_define('_JOMCOMP_MYUSER_MENUTITLE', 'Meine Optionen');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Buchungsliste');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Meine Buchungen');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Buchung anzeigen');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favoriten anzeigen');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Es sind noch keine Favoriten eingetragen.');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Zu Favoriten hinzufügen');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Unterkunftsart');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Unterkünfte auf Seite');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Lastminute');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktiv');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Dieses Plugin ermöglicht den Unterkunftspreis dynamisch zu generieren.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Die meisten Betriebe kalkulieren die Zimmerpreise einer bestimmten Kategorie im Verhältnis zur Verfügbarkeit zu einem bestimmten Zeitraum. Das bietet die Möglichkeit Nachlässe für schlecht gebuchte Zimmertypen einzuräumen um die Belegung zu erhöhen.<br/>Wird dieses Plugin aktiviert können für bestimmte Tage und Zimmertypen von der Anzahl der verfügbaren Zimmer abhängige Preise gestaltet werden.<br/>Der Tages-Grenzwert definiert die Anzahl der Tage innerhalb deren das Ankunftstag liegen muss bevor die Zimmerpreise durch dieses Feature angepasst werden. Mit den Prozentwerten kann die Belegung der entsprechenden Zimmer konfiguriert werden ab der ein vorgegebener Nachlass angewendet wird.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Tagesgrenzwert (Anzahl Tage von heute bis Ankunft)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Prozent belegter Räume 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Prozent belegter Räume 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Prozent belegter Räume 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Prozent belegter Räume 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabatt %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ist ermäßigt ab ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' bis ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Raumpreis ist nicht ermäßigt ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google Map API Schlüssel');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Google-Key verfügbar auf <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Wenn hier der Google-Key eingegeben ist zeigt Jomres eine Karte in den Unterkunftsdetails.');
jr_define('JOMRES_COM_A_USE_SSL', 'Wird SSL im Buchungsformular verwendet?');
jr_define('JOMRES_COM_A_USE_SSL_DESC', 'Es muss ein gültiges SSL Zertifikat vorliegen für ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last Minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiv?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Falls Ja sind Last Minute Angebote möglich.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Grenzwert');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Bei einer Buchung innerhalb von N Tage bis zum Ankunftsdatum wird eine Ermäßigung gewährt.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Ermäßigung');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In Prozent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Für diese Buchung wurde eine Ermäßigung berechnet!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Der Betrag dieses Aufenthalts wurde ermäßigt um ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Für diese Unterkunft ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% Ermäßigung wenn das Ankunftsdatum der Buchung vor ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% oder mehr Ermäßigung wenn das Ankunftsdatum vor ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Jetzt buchen, um den diesen Preis zu erhalten!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Ausführliche Preisinformationen');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Falls Ja, werden weitere Preisinformationen in einem Popup Fenster angezeigt');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Konfigurationsoptionen begrenzen');
jr_define('_JOMCOMP_AMEND', 'Buchung anpassen - Auswahl Unterkunft');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Neue Unterkunft wählen');
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Auftrag:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Anzahlung');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Ausstehende Anzahlung');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Korrigiert Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Korrigiert Anzahlung');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Abbrechen');
jr_define('_JRPORTAL_CPANEL', 'JRPortal Konfiguration');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Standard Provision');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Die Standard Provision wählen, die für den Fall angewendet wird, dass an keiner anderer Stelle eine Provision eingegeben wurde.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Liste der Provisionen');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Provisionen');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titel');
jr_define('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define('_JRPORTAL_CRATE_VALUE', 'Provision');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Währungscode');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Unterkunft anzeigen');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Unterkunftsname');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Unterkunftsadresse');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Für Unterkünfte die Rot hinterlegt sind wurde die Provision noch nicht verbucht.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistik');
jr_define('_JRPORTAL_STATS_STATTYPE', 'Statistik für: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Unterkunft - Klicks');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Unterkunft anzeigen');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Anzahl Buchungen');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Beträge der Buchungen');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Geschätzte Provision ');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provision');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Buchungen auflisten');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Unterkunft NR.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Gast NR.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Affiliate id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Rechnung NR.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Gesamte Buchungen');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Vertrags Identifikation');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Vertragsnummer');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Währungscode');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Erstellt');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archiviert');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Archiviert Datum');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Position zur Rechnung hinzufügen');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Verwaltung der Rechnungen');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Zugewiesene Unterkunft (sofern verfügbar)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Betrag');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beschreibung');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'Position erfolgreich eingefügt ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'Buchungen anzeigen');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'Fehler beim Einfügen der Rechnungsposition ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', 'Fehler, es wurde kein Betrag eingesetzt');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Es können auch Unterkunft spezifische Sprachdateien in einem Unterordner angelegt werden, z.B. "Medienvermietung" indem die Sprachdatei in den Unterordner kopiert wird. Anschließend die Inhalte der Sprachdatei auf die zu vermietenden Objekte anpassen, z.B. DVDs, CDs etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Diese Unterkunft kann nicht gelöscht werden da sie die einzige ist auf die noch Zugriff besteht. Wenn diese Unterkunft nicht angezeigt werden soll, in der Statusleiste auf unveröffentlicht setzen. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Falls es sich hier um eine Demo-Installation handelt und beabsichtigt ist Jomres Solo (auf eine Unterkunft begrenzt) zu erwerben, sollte zuerst eine neue Unterkunft angelegt und diese Unterkunft gelöscht werden, noch bevor die Lizenz erworben wird. Der Schlüssel wird direkt nach dem Kauf zugewiesen. ');
jr_define('_JOMRES_COM_EMAILERRORS', 'Fehler Meldungen mailen?');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', 'Auf Ja setzen wenn die generierten Fehlermeldungen automatisch an jomres.net übermittelt werden sollen. Dies ermöglicht auftretende Fehler sofort erkannt und ohne Mitwirkung des Nutzers behoben werden können. Hinweis: Diese Funktion ist auf "localhost" deaktiviert. ');
jr_define('_JOMRES_COM_ISTHISANMRP', 'Ist diese Unterkunft ein Hotel/Pension oder Haus/Ferienwohnung? ');
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', ' Die Konfiguration unterscheidet sich je nach dem, ob es sich um eine einzelne Immobilie oder mehrere Immobilien handelt. Wählen Sie MRP wenn Sie mehrere Räume anbieten und SRP wenn Sie eine Immobilie einzeln anbieten wollen. ');
// Jomres v3.0.6
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', 'Jomres Mailpüfer verwenden? ');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Erzwingt eine strengere Mailprüfung beim Versenden. Einige Webserver geben einen Serverfehler 500 ab, wenn versucht wird eine E-Mail auf eine ungültige E-Mailadresse zu senden. Wird diese Einstellung aktiviert benutzt das PHP Skript vor dem Versand die Funktion checkdnsrr und verhindert den Serverfehler. ');
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Unterkunft Total');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Nacht/Nächte zum');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'pro Zimmer ');
/*
* @ignore
*/
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Extras Gesamt ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Preis Zusammenfassung ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Bitte lesen und Einverständnis erklären ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Im Folgenden eine Zusammenfassung Ihrer Buchung.<br /> Um Änderungen vorzunehmen, bitte auf den Knopf "Reservierung ändern" klicken. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Sollen die oben genannten Informationen geändert werden, dann bitte hier klicken');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Reservierung ändern.');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Besondere Wünsche bitte in das unten stehende Feld eingeben.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Ich bestätige, dass die vorstehenden Angaben richtig sind und bin einverstanden mit den ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'pro Person pro Nacht ');
// Jomres 3.1.10
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', 'Standard Sprachdatei');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', 'Sprache wählen die Jomres als Standard verwenden soll wenn die Standardsprache nicht schon durch Joomfish festgelegt ist.');
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'von');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Zurück');
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

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Bitte beachten dass dies kein Buchungsformular ist. Es kann anstelle einer Email Mitteilung eingesetzt werden.<br/>Hier die Nachricht schreiben die übermittelt werden soll, an: ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Unterkunft Anfrageformular ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Vielen Dank für Ihre Anfrage. Die Nachricht wurde an die entsprechende Kontaktadresse und an Ihre angegebene E-Mailadresse zur Kenntnisnahme geschickt. Ihr Anliegen wird schnellst möglich bearbeitet.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' Betreff ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Schreiben Sie die angezeigten Buchstaben in die Box');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Kann die Buchstaben nicht lesen. Erstelle ein ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Absenden');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'neues Bild');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Anfrage');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Für diesen Zeitraum haben wir leider keine freien Plätze!');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Bitte aus der Liste rechts die gewünschte Unterkunft auswählen');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. Räume die gewählt sind');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimale Anzahl der Zimmer die bereits vor Buchung in ausgewählter Tarif-/Zimmerart-Kombination angeboten werden können. Ermöglicht Ermäßigungstarife auch wenn bereits mehr als N Zimmer ausgewählt sind. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max. Räume bereits gewählt');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximale Anzahl der Zimmer die bei der Buchung schon ausgewählt sein dürfen bevor die Tarif-/Zimmerart-Auswahlbox nicht mehr angezeigt wird. Erlaubt die Tarif-/Zimmerart nicht mehr anzubieten wenn bereits N Zimmer im Buchungsformular ausgewählt sind. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Bitte beachten, dass Einzelzimmerzuschläge die in der allgemeinen Konfiguration auf Ja gesetzt sind hier nicht verwendet werden. Die Einstellungen hier sind eine Alternative zu den Pauschalsätzen. Die Beträge werden nicht zu den pauschalen Unterkunftssätzen (SPS) addiert.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Frei');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Einige Buchungen');
jr_define('_JOMRES_AVLCAL_HALF', 'zur Hälfte gebucht');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Oft gebucht');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Ausgebucht');
jr_define('_JOMRES_COM_SEF_URL_PREFIX', 'URL Präfix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Dies ist der erste Eintrag nach dem Domainnamen - Bitte anpassen - Bitte leer lassen wenn keine Namenserweiterung erwünscht ist.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Alias der Unterkunft anzeigen');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'Alias buchen');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Alias suchen');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Landesnamen in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Region in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Stadt in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Unterkunfts-Typ in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Unterkunftsnamen in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'ID zum Unterkunftsnamen hinzufügen');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Falls Unterkunftsname auf Nein, keine Veränderung. Falls Ja, wird die URL Adresse etwa so aussehen: fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Such-URL - Land in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', ' ');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Such-URL - Standard Land');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Wenn alle Unterkünfte im gleichen Land sind, wird das Land in der Suche nicht angezeigt - Falls das Land angezeigt werden soll das Standard-Land einfügen.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Such-URL - Region in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION', 'Such-URL - Standard Region');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Wenn alle Unterkünfte in der gleichen Region sind, wird die Region in der Suche nicht angezeigt - Falls die Region angezeigt werden soll dort die Standard-Region einfügen.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Such-URL - Stadt in der URL ergänzen');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN', 'Such-URL - Standard Stadt');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Such-URL - Unterkunfts-Typ');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Such-URL - Standard Unterkunfts-Typ');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Wird in der URL verwendet, wenn die Suche für alle Unterkunftstypen gelten soll');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Javascript Kalendersprache automatisch erkennen');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Soll die automatische Erkennung der Sprache für den JavaScript-Kalender aktiviert werden? Falls die automatische Spracherkennung nicht funktioniert wird die unten eingestellte Sprache verwendet');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'pro Woche');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'pro Tag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'pro Buchung');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'pro Person pro Buchung');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'pro Person pro Tag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'pro Person pro Woche');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'pro Tag (min. Tage)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'pro Tag X Räume gewählt');
jr_define('_JOMRES_REGISTRYREBUILD', 'Registrierung der Minikomponente neu aufbauen');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalerweise wird die Jomres Plugin Registrierung automatisch wieder hergestellt, wenn im Plugin-Manager ein Plugin hinzufügt oder entfernt wird. Es kommt vor, dass Sie dieser Automatismus, aus welchem Grund auch immer, nicht ausgelöst wird. Mit dieser Funktion kann die Wiederherstellung manuell ausgelöst werden. Wenn Zugriff auf den Plugin-Manager und die Upgrades Funktion beseht ist es unwahrscheinlich, dass diese Funktion jemals benötigt wird. Die Registrierung muss jedes Mal wiederhergestellt werden wenn eine neue Mini-Komponente hinzugefügt wurde.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Die Registereinträge wurden erfolgreich aktualisiert');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Es gab ein Fehler bei der Aktualisierung im Register der Minikomponente. Bitte den Jomres Fehlerreport überprüfen ob der Fehler verzeichnet ist.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Suche nach Preis.');
jr_define('JOMRES_WORD_SAVING', 'Speichere...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Werden die mehrstufigen Immobilien Details verwendet?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 führt die zusammengesetzte Ausgabe der Unterkunftsdetails ein. Die gesamten Ausgaben der Unterkunftsdetails erfolgen in ein Template (composite_property_details.html). Auf Nein stellen falls dies nicht gewünscht wird. (Nur geübte   Benutzer sollten hier Nein einstellen. Neue Benutzer sollten hier besser Ja wählen)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', 'Dies ist eine Liste aller Benutzer des Systems. Nicht-Immobilien-Manager haben ein Gast-Symbol, Immobilien-Manager haben Empfang / Unterkunfts Manager / Super Immobilien-Manager-Symbole. <br/>Bei der ersten Installation von Jomres wird "admin" automatisch zum Unterkunfts-Manager und gilt als autorisierter Benutzer. <br/> Einem Nicht-Super-Manager muss mindestens ein Objekt zugeordnet werden da sonst beim Login eine Fehlermeldung angezeigt wird. <br/> Wenn ein Benutzer autorisiert ist kann sein Profil editiert und ihm verschiedene Objekte und Berechtigungen, auch Super-Unterkunfts-Manager, zugewiesen werden. <br/>Auf das rote Kreuz neben dem Namen eines Benutzers klicken um ihn zu autorisieren, bzw. auf den grünen Haken um ihm die Autorisierung zu entziehen. <br/> Um Benutzer auf bestimmte Unterkünfte bzw. Funktionen zu beschränken oder sie zu Super-Unterkunfts-Manager zu machen sind sie zu autorisieren und die Einstellungen über das Symbol "Bearbeiten" anzupassen (nur nach der Autorisierung des Benutzers sichtbar). Benutzer, die ihre Unterkünfte selber registriert haben, werden automatisch für das betreffende Objekt autorisiert. Der Super-Unterkunfts-Manager hat automatisch die Rechte über alle Eigenschaften und alle Konfigurations-Optionen, auch wenn die Konfigurations-Einstellungen in der Webseitenkonfiguration eingeschränkt sind.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Hier können einem Benutzer bestimmte Unterkünfte zugewiesen werden. Wird er nicht zum Super-Unterkunfts-Manager gemacht ist sicher zu stellen, dass ihm mindestens ein Objekt zugewiesen wird da sonst eine Fehlermeldung beim Login erfolgt. Soll ein Receptionist / Unterkunfts Manager nur Zugriff auf bestimmte Unterkünfte haben ist darauf zu achten, dass das Property Manager Dropdownfeld auf "Nein" steht.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Sie noch keine Buchungen getätigt!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Unterkunfts-Typ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Unterkunfts-Typ bearbeiten');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Wählen Sie Ihren Unterkunfts-Typ');
jr_define('_JOMRES_COM_LOGGING', 'Jomres Logging');
jr_define('_JOMRES_COM_LOGGING_WARNING', 'Diese Funktion aktiviert/deaktiviert das Protokollieren mit Jomres. Das Fehlerprotokoll ist immer aktiviert, aber andere Protokolle wie Buchungen, Gateway, System und Anfragen können aktiviert und deaktiviert werden. Wir weisen darauf hin, dass <b>die Möglichkeit dieses zusätzlichen Protokolle zu aktivieren ausschließlich zur besseren Fehlersuche bereitgestellt wird, aber ein erhebliches Sicherheitsrisiko darstellt</b> da es für externe Benutzer sehr einfach diese Protokolle auszulesen. Daher raten wir dringlich diese Optionen weitgehend inaktiv zu belassen. Nach dem Abschalten unbedingt sicher stellen, dass folgende Verzeichnisse:  <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> keine alten Log-Files beinhalten. Außerdem verlangsamt die Protokollierung das System signifikant und sammelt sehr viele Daten.');
jr_define('_JOMRES_COM_LOGGING_BOOKING', 'Buchungs Logs (Formular Logs) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY', 'Gateway Logs (z.B. Paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST', 'Anfrage Log (alle eingehenden Serveranfragen)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM', 'Verschiedene Logs');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (vor allem für die Zusammenstellung der Provisionen, etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ihre Frage...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Raumauflistung Buchungsformular nach Raumtyp-Bild angezeigt');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Maximum Unterkünfte in der Liste');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Anzahl Unterkünfte die nach einer Suche pro Seite angezeigt werden sollen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'eingebaute Suchfunktion');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Die in Jomres integrierte Suchfunktion ermöglicht es den Nutzern, die Suche in den Unterkünften von Jomres mit einer Reihe von Funktionen durchzuführen. Nutzern die bereits mit der Suchfunktionen von Jomres in Joomla gearbeitet haben wird der Umgang damit vertraut sein. <br/> Diese Funktion ermöglicht es, die Suche innerhalb von Jomres für die Benutzer anzubieten, die das Joomla Suchmodul nicht verwenden wollen, bzw. für Nutzer anderer CMS die keine Suchfunktion haben. <br/> Es ist anzumerken, dass bei einer Suche über einen Link (z.B nicht über das Drop-Down), andere Suchoptionen nicht inbegriffen sind, sondern nur das Element das mit dem geklickten Link korrespondiert.<br/> Das Layout dieser integrierten Suche ist nicht besonders schön, da im Template, das für das Aussehen verantwortlich ist, alle möglichen und teilweise inkompatible Optionen berücksichtigt werden müssen. Um das Layout zu verbessern und den eigenen Bedingungen anzupassen ist die Template-Datei <b>srch.html</b> im Ordner <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> zu bearbeiten. ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Diese Funktion aktivieren?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ist diese Funktion aktiviert werden bei jedem Aufruf von Jomres mit Listendarstellung der Unterkünfte auch die Suchoptionen angezeigt.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Zeilen verwenden');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Jede Suchoption, welche Sie als Link definiert haben (dort wo eindeutig erkennbar) wird als Spaltenauflistung angezeigt (für IE setze ein br am Ende des Links)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Zeilenfunktionen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'Anzahl Funktions-Icons die angezeigt werden sollen bevovor das br eingefüht wird, um zur nächsten Zeile zu gehen.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Suche nach der Region mittels Auswahlfeld');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Zeigen Sie das Such-Auswahlfeld zum Filtern von Länder/Regionen/Städten an. Falls Sie diese Funktion verwenden wollen, benutzen Sie lieber die unten aufgeführte Suche nach Region/Stadt nicht.');
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
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Suche nach Verfügbarkeit');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Zeige das Suchergebnis nach Verfügbarkeit');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Suche nach Preisschritten');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Zeige das Suchergebnis nach Preisschritten');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Preisschritte');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres wird auf allen Werten der Tarifauflistung eine Reihe von Preisspannen hinzurechnen, aufgrund des Wertes, den Sie hier eingeben.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Per Voreinstellung führt Jomres eine Suche durch wenn keine Unterkunft gewählt ist. Wenn diese Suche nicht durch ein Suchmodul unterstützt wird werden (absichtlich) zufällige Ergebnisse ausgegeben. Die Anzahl der ausgegebenen Unterkünfte kann mit dieser Option begrenzt werden.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cronjob Einstellungen und Logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron-Job Information. Die Pseudocron Funktionalität wird zur Rechnungsstellung und Provisionsberechnung benötigt.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installierte cron Minicomponenten. Zum Start eines individuellen cron job einen der unten spezifizierten Links benützen. Die cron jobs produzieren keinerlei Ausgaben und es sind keine Informationen auf der Seite sichtbar. In den unten stehenden logs können die Daten überprüft werden.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Methode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Falls Sie keine Cronjobs auf dem Server ausführen können auf Minikomponente stellen, andernfalls erstellen Sie einen Cronjob und geben Sie folgendes an:<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret='.base64_encode(get_showtime('secret')).'> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Zeige logging im Browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funktioniert nur, wenn auf Minikomponente gestellt ist.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging aktiviert');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ja, um das Logging zu aktivieren. Das Ergebnis der Logs wird unten angezeigt.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Logging verbergen');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Zuviele Logging Ausgaben');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Bearbeitung');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC', 'Diese Funktion ermöglicht das bearbeiten des Jomres Frontend Templates auf dem Server. Das Ergebnis wird in der Datenbank gespeichert. Seien Sie vorsichtig, beim Bearbeiten der erweiterten Einstellungen.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Template Name');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Wurde das Template angepasst?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Eigene Felder');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Hier können einfache individuelle Felder definiert werden die im Buchungsformular erscheinen.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Feldname (ohne Abstand)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardwert');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beschreibung');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'benötigt');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Menge');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Falls die maximale Menge größer 1 ist wird ein Auswahlfeld mit der maximalen Anzahl für die Extras angezeigt.');
jr_define('_JRPORTAL_INVOICES_ISSUE', 'Rechnungen erstellen');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'MwSt Betrag');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Steuersatz');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Ratenbeschreibung');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Dieser Steuersatz kann nicht gelöscht werden.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Satz');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Rechnungen');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Unbezahlte');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Bezahlt');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Storniert');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Ausstehend');
jr_define('_JRPORTAL_INVOICES_USER', 'Benutzer');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Erstellt');
jr_define('_JRPORTAL_INVOICES_DUE', 'Fällig');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonnement');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Gesamtbetrag');
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL', 'Mehrf. Zahlung');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Mehrf. Zeitraum');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Wiederh. Tag d. M.');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Währungscode');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Belegpositionen');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Bez.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Beschr.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Basispreis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Basiszahl');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Nachlass Erstauftr.');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Gesamt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Mehrf. Preis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Mehrf. Anzahl');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Mehrf. Nachlass');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Mehrf. Gesamt');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Steuercode');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Steuer');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Satz');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'Paypal');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'Währungscode (z.B. EUR)');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Sandbox benutzten?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Meine Paypal E-Mail Adresse');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Hinweis: Bei Verwendung von PayPal müssen Sie in Ihrem PayPal-Konto das Autoreturn deaktivieren (Profile/Website Payment Preferences), und die IPN (Profile/Instant Payment Notification Preferences) auf die URL:<br/><b>&nbsp;'.JOMRES_SITEPAGE_URL_AJAX.'&task=completebk');
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', 'Diese Rechnung ist fällig. Bitte klicken Sie auf den Knopf, um zu PayPal weitergeleitet zu werden.');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Jomres Standard-Gateway-Einstellungen überschreiben?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'Wenn die Einstellungen paypal Option auf Yes gesetzt wurde dann sind folgende Einstellungen gültig: Die allgemeine Konfiguration in der Gateway-Einstellungen wird nicht mehr angezeigt und wenn eine Buchung erfolgt wird die in der allgemeinen Konfiguration eingetragene Paypal E-Mail verwendet.');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Meine Rechnungen anzeigen');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Rabatte');
jr_define('_JRPORTAL_COUPONS_DESC', 'Als Anreiz zur Buchung, können den Gästen Rabattangebote gemacht werden. Gültig für einem bestimmten Buchungszeitraum, nicht für das Datum einer Buchung selbst.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Rabatt Code');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Gültig von');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Gültig bis');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Rabattbetrag');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabatt in Prozent');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'nur Zimmer');
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', 'Nachlass wird nur auf den Zimmerpreis angerechnet. Falls auf Nein gesetzt, wird der Nachlass auf den ganzen Buchungsbetrag angewendet.');
jr_define('_JRPORTAL_COUPONS_SQLERROR', 'Sql Fehler beim löschen/einfügen der Coupon Daten');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Bitte geben Sie den Couponcode ein und klicken Sie auf "Coupon speichern" um den Nachlass Ihrer Buchung gut zu schreiben.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Coupon speichern');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Nachlass vor der Buchung gespeichert');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon nicht gefunden');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Wert des Coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Vergünstigte Buchung. Couponcode/-wert Einstellungen: ');
jr_define('_JOMRES_COM_CACHING', 'Die Jomres Cachefunktion verwenden?');
jr_define('_JOMRES_COM_CACHING_DESC', 'Nein, wenn die Jomres Cache Funktion deaktiviert werden soll.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Sprache wählen');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Im Auswahlfeld die Sprache wählen.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Sprachauswahlfeld anzeigen?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Abgebuchte und annullierte Buchungen');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sehr geehrte(r)');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', '<br>Vielen Dank für die Registrierung ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', '<br>Ihr Benutzername lautet: ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', '<br>Ihr Passwort lautet: ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', '<br>Um Ihre Buchungen anzusehen, loggen Sie sich bitte unter folgender Adresse ein: ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon gespeichert');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon gelöscht');
// Not used yet
jr_define('_JOMRES_COM_GROWL', 'Verwende Jomres Nachrichtendienst');
jr_define('_JOMRES_COM_GROWL_DESC', 'Viele Manager geben Ihre Rückmeldung in Form einer JavaScript-Nachricht aus, während dem die Seite neu geladen wird. Falls Sie diese Option verwenden wollen, aktivieren bzw. deaktivieren Sie diese Funktion.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Benutzer');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Passwort');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API ID');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Handynummer für Benachrichtigungen');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Bitte verwenden Sie folgendes Fotmat "Länder Code, Handynumber". Die UK Nummerreihenfolge würde z.B so aussehen wie "447979123456". Lassen Sie dieses Feld leer, wenn Sie keine Benachrichtigung per SMS erhalten wollen.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', '
<b>Offenbar wollen Sie das auf Ihrem localhost ausprobieren. Sie können das aber nur auf einem "live" Server verwenden.</b>
<br/>
<br/>
Um den Clickatell-Gateway zu verwenden, benötigen Sie ein Clickatell Konto und mindestens eine registrierte Verbindung (API Unterproduktinstanz ) zwischen der Anwendung und unser Tor. Jede Verbindung
Verfahren wird als Teilprodukt bekannt. Hier ist wie:<br/>
<br/>
<b>Schritt 1 - eröffnen Sie ein Clickatell Konto</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Schritt 2 - fügen Sie die API Kennung ins Feld ein (sub-product)</b><br/>
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
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Raum Buchungsformular für Behinderte anzeigen');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Raum Buchungsformular max. Personen anzeigen');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Bitte beachten Sie, dass die Zimmerpreise nur Schätzungen sind und der effektive Buchungspreis nicht berechnet wird, bis Sie ein Zimmer oder mehrere Zimmer zu Ihrer Auswahl hizugefügt haben.');
jr_define('_JOMRES_LASTEDITED_DB', 'Datenbanktemplate letzte Änderung');
jr_define('_JOMRES_LASTEDITED_DISK', 'Festplattentemplate letzte Änderung');
jr_define('_JOMRES_LASTEDITED_WARNINGICON', 'Datenbanktemlate Warnung');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Das Datenbanktemplate ist abgelaufen');
jr_define('_JOMRES_LASTEDITED_WARNING', 'Wenn es ein Symbol gibt, dass nicht ins Template passt, dann hat Joomres festgestellt, dass das Template in der Datenbank älter <strong><i>may</i></strong> älter sind, als das Template auf der Festplatte. In diesem Fall ist es möglich, dass das Template in eine neueren Version von Jomres zu aktualisieren. Wenn dies der Fall ist, dann ist es möglich, dass Ihr Template für die eine neuen Funktionen von Jomres nicht kompatibel ist. So sollten Sie die Datei auf der Festplatte entsprechend anpassen, um sicherzustellen, dass die neuen Funktionen nicht fehlen.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnemente');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Name');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beschreibung');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Veröffentlicht');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', 'Häufigkeit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', 'Versuchs-Zeitraum');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', 'Versuchs-Gebühr');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Komplette Gebühr');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', 'Raum Limit'); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Objekt Limit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', 'Häufigkeit: M/Q/H/J Monatlich/Quartalsmässig/Halbjährlich/Jährlich');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', 'Testzeitraum: Eingabe, 0 (null) für keine Angabe, 1 für einen Monat, 2 für zwei Monate usw.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Anmelden');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', 'Bitte füllen Sie Ihre Benutzerinformation aus oder ergänzen Sie diese. Beachten Sie, dass sämtliche Felder benötigt werden.');
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME', 'Vorname');
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME', 'Nachname');
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS', 'Addresse');
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY', 'Land');
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE', 'Postleitzahl');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', 'Sie brauchen ein gültiges Abonnement, um neue Objekte zu erfassen. Im Moment haben Sie Abonnemente gezahlt für ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', ' veröffentlichte Objekte. ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', 'Sie können die Anzahl Objekte erhöhen, indem Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">hier weitere Abonnemente kaufen.</a>');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', ' Sie haben ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', ' Objektplätze verwendet. ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', 'Falls Sie eine Auflistung Ihrer Objekte ansehen möchten, klicken Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=listyourproperties">hier</a>. ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', 'Um eine Auflistung der möglichen Abonnemente zu erhalten, klicken Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">hier</a>. ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', 'Sie können leider dieses Objekt nicht mehr erfassen, weil Sie die maximale Anzahl von Objekten erreicht haben.');
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', 'Vielen Dank, dass Sie ein Abonnement auf unserem Server gelöst haben. Sobald die Rechnung als Bezahlt gekenntzeichnet ist (Es kann gelegentlich zu Verzögerungen bei PayPal kommen), können Sie<a href="'.JOMRES_SITEPAGE_URL.'&task=registerProp_step1">hier klicken, um mit der Erfassung Ihrer Objekte</a> fortzufahren.');
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', 'Es tut uns leid, aber Sie haben sich noch nicht bei unserem Service registriert. Bitte lassen Sie es uns wissen, wenn wir Ihnen weiterhelfen können');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Verwenden Sie die Abonnierungs-Funktionalität');
jr_define('_JOMRES_COM_NEWUSER', 'Erstelle bei der Buchung einen neuen Benutzer');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Bei der Buchung eines unregistrierten Benutzers automatisch ein Benutzerkonto erstellen.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klicken Sie hier, um Ihre Unterkunft zu registrieren');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', 'Aktive Anmeldungen');
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', 'Gateway Anmeldung ID');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Vielen Dank für Ihre Buchung - Die Benutzerdetails folgen in Kürze');
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrollzentrum');
jr_define('_JOMRES_COM_FAUXHEADERS', 'Javascript Header im Body des HTML ausgeben?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC', 'Auf Ja setzen wenn Probleme mit Mootools und Jomres Abfragen im Internet Explorer auftreten. Damit wird die Ausgabe von JavaScript im Body des HTML statt im Head erzwungen. Das ist zwar kein valides HTML, scheint aber die Konflikte zwischen jQuery und Mootools zu lösen.');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Rechnung anzeigen');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Rechnungen anzeigen');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Meine Unterkunft in dieses WEB einfügen');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Warnung: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', 'Auf Wunsch kann ein freies Paket auf dem System installiert werden indem sowohl der Testbetrag als auch der volle Betrag auf 0,00 gesetzt wird.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Leider wird diese Paket ID nicht erkannt.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sie haben bereits ein freies Paket abonniert und können das kein zweites mal tun.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', ' Status <b>0:</b> Fällige Zahlung <b>1:</b> Erstellt <b>2:</b> Gelöscht <b>3:</b> Ablauf');
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', 'Mein Konto');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Betriebsdaten');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Betriebsname');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Steuernummer');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Gebäude');
jr_define('_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: Die folgenden Steuerquoten sind für die Bedingungen des amerikanischen Markts entworfen. Wenn die Benutzung von festen Steuerquoten gewünscht sind (z.B. Mwst.) bitte eine Steuerquote in der folgenden Option wählen.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER', 'Rechnungsnummer ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Bitte Daten für die Blankobuchung festlegen. Wenn die passenden Daten gewählt sind den "Anwenden" Knopf klicken um erneut die Verfügbarkeit zu überprüfen. <br/> 
<br/> 
Falls für die Unterkunft eine oder mehrere Buchungen für den gewählten Zeitraum vorliegen kann nur gebucht werden bevor die entsprechenden Buchungen / Blankobuchungen gelöscht oder ausgebucht sind.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Leider ist eine Blankobuchung dieser Unterkunft mit den gewählten Daten nicht möglich.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Eine Blankobuchung für diese Unterkunft mit den gewählten Daten ist möglich.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Die Unterkunft ist zur Rechnungsstellung pro Person und Nacht konfiguriert aber es ist noch kein Gasttyp eingerichtet bzw. publiziert. Bitte einen oder mehrere Gasttypen erstellen und publizieren. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'So lange noch kein Tarif konfiguriert ist können keine Buchungen für diese Unterkunft angenommen werden.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Editiermodus aktiviert');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Editiermodus deaktiviert');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Variable Vorschüsse?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable Vorschüsse erlauben den gesamten Vorschuss zu fällig zu stellen wenn der Ankunftstag der Buchung unterhalb von N Tagen von heute an liegen. Auf Ja setzen um die Option zu aktivieren und die Anzahl der Tage unten einstellen. Damit wird zum Beispiel der komplette Buchungsbetrag sofort fällig wenn der Ankunftstag innerhalb von 60 Tagen liegt, andernfalls die Anzahlung nach den festgelegten Kriterien.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Die Anzahl der Tage innerhalb derer der gesamte Buchungsbetrag als Anzahlung fällig wird.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN', 'E-Mails an den Besitzer an eine alternative Adresse richten?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Ja, falls E-Mails an den Besitzer an die unten stehende Adresse gehen sollen. Bei Nein gilt die im Unterkunfts-Konfigurationsbereich definierte Adresse.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative Adresse für E-Mails an den Besitzer.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Eine Bestätigungs-Mail zur wurde gesendet. Das Fenster kann jetzt geschlossen werden.');
jr_define('_JOMRES_REALESTATE_TITLE', 'Immobilienverzeichnis');
jr_define('_JOMRES_REALESTATE_YESNO', 'Ist diese Unterkunft Teil eines Immobilienverzeichnisses?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC', 'Ja, wenn die Unterkunft verkauft werden soll. Nein wenn es sich um ein Hotel/B&B/Gästehaus handelt, das, bzw. in dem, Räume zur Vermietung angeboten werden und dieses System für Buchungen verwendet werden soll.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Rechnung als bezahlt markieren');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Rechnung als bezahlt markiert');
jr_define('_JOMRES_APIKEY_REMAKE', 'Neuen API-Key erzeugen');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE', 'Google-Übersetzung initiieren?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC', 'Dieses Feature ist neu und experimentell. Benutzung auf eigenes Risiko. Der Zweck dieses Features ist, Googles Übersetzungstool zur automatischen Übersetzung einer bestimmten Unterkunft zu benützen. Es ist zu beachten, dass dieses Feature die gesamte Eingabe bearbeitet und wenn ein HTML-Editor zur Formatierung der Unterkunftseigenschaften benützt wurde geht die gesamte Formatierung verloren.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Einzelunterkunft-Installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Diese Option vereinfacht die Frontend-Ansicht für nicht autorisierte Anwender erheblich. Voreingestellt wird Jomres nicht mit einer Liste der Unterkünfte sondern mit dem Buchungsformular der ersten Unterkunft im System aufgerufen. Auch Unterkunfts-Manager erhalten nicht die Auswahlknöpfe für Unterkunft Eigenschaften und Hinzufügen. Das ist ideal wenn nur eine Unterkunft aufgelistet und Buchungen dafür angenommen werden sollen.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER', 'HTML Filterfunktion benutzen?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC', 'Hier die Nutzung der HTML-Filter-Bibliothek (http://htmlpurifier.org/) einschalten. Die Bibliothek wird als zusätzliche Sicherheitsmaßnahme bei der Verarbeitung von Ein- und Ausgabedaten benützt und es wird empfohlen sie zu aktivieren, obwohl sie mehr Speicher belegt.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Rechnungssaldo');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Saldo');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Hinweis! Sie benützen den Edit-Mode während der Globale Edit-Mode aktiviert ist. Das ist in Ordnung wenn Sie verstehen was Globaler Edit-Modus bedeutet. Falls nicht, könnten Sie sich selbst Probleme schaffen. Wenn Sie unsicher sind ob Sie Jomres auf diese Weise benützen sollten, informieren Sie sich <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">zu diesem Thema im Handbuch</a>.');
jr_define('_JOMRES_SUPPORTKEY', 'Lizenzschlüssel');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Die Support Lizenz Schlüssel Nummer (auch als Lizenz Nummer bezeichnet). Es ist eine aktuelle Lizenz nötig um Aktualisierungen und Plugins für Jomres laden zu können.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Individueller Preisnachlass');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Unterkunftsregistrierungen auf ein Land beschränken?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ja, um Unterkunftsregistrierungen auf das Land zu beschränken das im folgenden Feld ausgewählt wird.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Unterkünfte sind in diesem Land: ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery Thema');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Ein "jquery" Thema für die Darstellung der Unterkunfsteigenschaften auswählen.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Leider steht diese Unterkunft im Moment nicht zur Verfügung.');
jr_define('_JOMRES_REVIEWS', 'Bewertungen');
jr_define('_JOMRES_REVIEWS_TITLE', 'Titel der Bewertung');
jr_define('_JOMRES_REVIEWS_DATE', 'verfasst am ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Bisher gibt es noch keine Bewertung für diese Unterkunft.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Wollen Sie als erster diese Unterkunft bewerten?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Durchschnitt der Stimmen: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Stimmen gesamt:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Neue Bewertung abgeben.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Um eine Bewertung abzugeben müssen Sie eingeloggt sein.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Teilen Sie uns Ihre Meinung zu dieser Unterkunft mit: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Dieser Gast teilte uns mit: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Zustimmung: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Ablehnung: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Übermittelt am: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Sie haben diese Unterkunft bereits bewertet. Sie können keine zweite Bewertung dieser Unterkunft abgeben.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sie können leider keine Bewertungen in diesem WEB abgeben.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Klicken um die Bewertungen zu sehen');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' Gäste stimmen dieser Bewertung zu. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' Gäste stimmen dieser Bewertung nicht zu.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' Gast stimmt dieser Bewertung zu. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', ' Gast ist stimmt dieser Bewertung nicht zu.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Vielen Dank für die Teilnahme an dieser Bewertung.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Vielen Dank, aber Sie haben Ihre Meinung zu dieser Bewertung bereits mitgeteilt.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Bitte füllen Sie alle Felder aus.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Bitte fassen Sie Ihre Bewertung in einem Titel zusammen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Bitte schreiben Sie eine ausführlichere Bewertung in der Textbox');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Bitte teilen Sie uns Ihre positiven Erfahrungen mit die Sie als unser Gast hatten');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Bitte schildern Sie uns die negativen Eindrücke bei Ihrem Aufenthalt');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Wurden Sie freundlich empfangen?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Gefielen Ihnen die Räumlichkeiten?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Bitte beschreiben Sie die Sauberkeit der Unterkunft');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Empfanden Sie die Unterkunft als angenehm oder eher nicht?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Bitte bewerten Sie das Preis- Leistungsverhältnis');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Bitte bewerten Sie den Service');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Zusammenfassung Bewertung');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ihre ausführliche Bewertung');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Vielen Dank für Ihre Bewertung.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Vielen Dank für Ihre Bewertung. Sie wird bald möglichst von einem unserer Moderatoren veröffentlicht.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Bewertungsfunktion von Jomres benützen?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Bewertungen automatisch veröffentlichen?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Falls nein müssen Bewertungen manuell veröffentlicht werden.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Bewertungen in den Testmodus versetzen?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalerweise können Unterkunfts-Manager Unterkünfte nicht bewerten. Im Testmodus ist das möglich. Natürlich ist das in einem produktiven Umfeld nicht ideal.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Das ist eine Liste aller Unterkünfte. Auf die Unterkunft klicken um deren Bewertungen zu sehen. Dort können die Bewertungen veröffentlicht und gelöscht werden.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Anzahl unveröffentlichter Bewertungen');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Anzahl von Bewertungen');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Bewertung veröffentlichen/unveröffentlichen');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Bewertung löschen');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Über Bewertung berichten');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Übersicht der Berichte');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Bitte geben Sie Ihren Bericht ein');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Finden Sie in dieser Bewertung objektive Fehler oder Ungenauigkeiten? Schicken Sie einen Bericht und wir überprüfen das für Sie.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Abschicken');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Bericht erstellt von ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Berichte werden von Benutzern erstellt die mit einer Bewertung nicht einverstanden sind. Die einzige Möglichkeit einen Bericht zu entfernen ist die beanstandete Bewertung zu löschen.');
jr_define('_JOMRES_REVIEWS_RATING', 'Bewertung (1 = schlecht 10 = ausgezeichnet) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Freundlichkeit ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Situation ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Sauberkeit ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Unterkunft ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Preiswürdig ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Service ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Bewertet von : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Bewertungen verstecken');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Buchungsformular in der Unterkunftsbechreibung anzeigen?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ja, um das Buchungsfomular in der Unterkunftsbeschreibung anzuzeigen. Mit Nein wird ein Link zum Formular statt des Formulars angezeigt.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Steuer inbegriffen?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ja, falls Steuer im Preis enthalten, sonst Nein.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras Steuer:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Die Wochentagsfelder bieten die Möglichkeit für jeden Tag der Woche einen speziellen Preis zu setzen. Ein Klick auf das entsprechende Feld setzt den Preis für diesen Wochentag im gesamten Zeitraum.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Die Datumsfelder und das Preisfeld bietet die Möglichkeit einen Preis für einen gegebenen Zeitraum fest zu legen. Nach der Auswahl von Anfangs- und Enddatum den Preis eingeben und "Preis setzen" klicken.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Beginn Zeitraum');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Ende Zeitraum');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Preis');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Preise setzen');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partner');
jr_define('_JOMRES_CALENDAR_TODAY', 'Heute');
jr_define('_JOMRES_CALENDAR_PREV', 'Vorhergehender');
jr_define('_JOMRES_CALENDAR_NEXT', 'Nächster');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Zimmer ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'Gast(Gäste). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Hier die Verteilung der Gäste auf ihre Zimmer. Sollten Sie eine Änderung wünschen können Sie das nach Abschluss der Buchnung im direkten Kontakt mit dem Unterkunftsgeber regeln. Beachten Sie, dass dadurch zusätzliche Kosten entstehen können.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Die Unterkunft ist nicht veröffentlicht, nur du kannst Sie aktuell sehen, aber niemand sonst.');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Standard Suchergebnis Sortierreihenfolge');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Ändern Sie diese Option, um die Reihenfolge der standardmäßigen Präsentation der Suchergebnisse zu ändern.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Zeige Suchergebnis-Sortierreihenfolge dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Zimmer Anzeigetyp Stil');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Wenn im Buchungsformular als Anzeigetyp „Klasisch“ gewählt wurde, bieten Sie Gästen einzelne Zimmer an. Beim Anzeigetyp „Zimmertypen“, wählen Gäste dagegen die Anzahl Zimmer vom Typ X (z.B. 2x Doppelzimmer).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klassisch');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Zimmertypen');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Verfügbarkeit (erneut) prüfen');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Wiederherstellung Freie Zimmer Liste');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Berechnung der Summen');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Abgeschlossene Aktualisierung');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Kalender Wochenbeginn, Sonntag oder Montag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Nur Unterkunft Gäste können rezensieren?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Setzen Sie diese auf Ja, wenn Sie Bewertungen nur von Gästen erlauben möchten, die bereits Gast in dieser Unterkunft waren.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Pro Zimmer');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Gäste pro Zimmer : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gäste pro Buchung : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Anzahl der Zimmer');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tarif Standard Preis');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', 'Dies gilt nur für neue Tarife');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', 'Jahre die gezeigt werden');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', 'Definiert die Anzahl Jahre die angezeigt werden, bei der Bearbeitung eines "micromanage" Tarifes');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Januar');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Februar');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'März');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Mai');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Juni');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Juli');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Oktober');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Dezember');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', 'Property-Management-Prozess');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'Es gibt verschiedene Management-Prozesse in Abhängigkeit von der Art und Weise wie sie ihre Immobilie/Firma anzeigen möchten.');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'Vermietung');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', 'Wählen sie die Vermiet-Option, wenn sie Zimmer in einer Immobilie vermieten (z.B. Hotel/B & B/Villa/Wohnung)');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', 'Immobilien/einfache Auflistung');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', 'Wählen Sie die Immobilien-Option, wenn sie überhaupt keine Buchungs-Funktionalität anbieten möchten (z.B. Verkauf eine Immobilie/von Produkten).');

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Setzen Sie dies auf Ja, um die Anzahl der verfügbaren Optionen für Hausverwalter im Abschnitt der allgemeinen Konfiguration zu reduzieren. Dies ist nützlich, wenn Sie nicht möchten, dass Hausverwalter an zu vielen Einstellungen rumspielen, stattdessen können sie die Datei jomres_config.php bearbeiten, um die Standard-Eigenschaft Optionen zu definieren.');

jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Bitte wählen Sie eine Option für Ihre Buchung');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Schaltet die HTML-Editoren in der Detailseite Unterkunft, im Editiermodus, an. Darüber hinaus ist, wenn diese auf Nein gesetzt ist, dann werden alle html Tags außer P und BR aus dem eingegeben und dem angezeigten Text entfernt.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Eigene Einstellungen');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Seitenvorschau');
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', 'Zeige den Zeitzonen-Wechsler in der Immobilienmanager Symbolleiste?');

jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partner Nachlass ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Suche Benutzer');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Geben Sie ein paar Zeichen ein, um einen Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Partner hinzugefügt und Sie werden auf die nächste Seite geführt, auf der Sie dem Benutzer Unterkünfte und Nachlässe zuordnen können.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Bestehende Partner');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Wählen Sie einen Partner, welcher zur Partner-Administration-Seite geführt werden soll.');

jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Suche nach einer Unterkunft');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Geben Sie ein paar Zeichen des Namens der Unterkunft ein und wählen Sie eine Unterkunft aus.<br/> Wenn Sie eine Unterkunft auswählen, wird diese dem Partner-Portfolio hinzugefügt. Wie auch immer, werden die Partner jedoch keine Rabatte genießen, diese müssen Sie selbst einrichten.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuelle Objekte');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Klicken Sie auf eine Unterkunft um die Partner-Nachlass-Einstellungen für diese Unterkunft zu bearbeiten.');

// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE', 'Gesperrt? <br/>(Auswählen um einen Manager zu sperren, dies deaktiviert dessen Unterkünfte.) ');
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', 'Klicken Sie auf das Sperren-Symbol (das Symbol mit dem Mann und dem grünen Häkchen), um einen Manager zu sperren. Dies bedeutet, dass der Manager nicht in der Lage ist seine Unterkunft-Management-Funktionen ausführen, und alle seine Unterkünfte werden deaktiviert. „Super-Unterkunfts-Manager“ können nicht gesperrt werden.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Dieses Konto wurde gesperrt, es ist derzeit nicht möglich, Ihre Unterkunft(e) mit diesem Konto zu verwalten.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager Konto gesperrt');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager Konto wieder eingesetzt');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Hausverwalter Konto gesperrt wurde. So lange Ihr Konto gesperrt ist, sind Sie nicht in der Lage irgendeine Management-Funktion auszuüben.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Manager Konto jetzt aktiv ist. Sie können nun damit fortfahren alle Unterkunfts-Management-Funktionen auszuführen. Bitte melden Sie sich mit Ihrem Konto an und stellen Sie sicher, dass alle entsprechenden Unterkünfte aktiv sind. Danke.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Favoriten entfernen');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Buchungsdatenarchiv');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Das Buchungsdatenarchiv ist ein Roh-Daten-Auszug der Buchungsinformationen die nach dem Absenden des Formulars gespeichert wurden. Fahren Sie über ein Datum  um die Roh-Daten zu sehen. Die Informationen werden in der Tabelle XXX__jomres_booking_data_archive gespeichert.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Konto bearbeiten');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', 'Benutzer suchen');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Geben ein paar Zeichen des Benutzernamens ein, um nach einem Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Manager hinzugefügt und Sie werden auf die nächste Seite weitergeleitet, auf der Sie Eigenschaften und Zugriffsrechte für den Benutzer vergeben können.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Bestehende Manager');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', 'Wählen Sie einen Manager, der zur Manager Administrations-Seite genommen werden soll.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Suche nach Gästezahlen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Zeige die Suche nach Anzahl-Gäste Dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Suche nach Sternen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Zeige die Suche nach Anzahl-Sterne Dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Anzahl der Gäste');
jr_define('_JOMRES_SEARCH_STARS', 'Anzahl der Sterne');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', 'Kommissionsrechnungen');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Anzahl der Unterkünfte');

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Lade Jomres jQuery Bibliothek?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Sie können dies auf NEIN setzten, wenn Sie eine Vorlage (Template) verwenden die jquery verwendet. Dies KÖNNTE jquery Konflikte bei einigen Vorlagen lösen, aber nicht bei allen.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Wenn Sie Joomfish verwenden, sollten Sie diese Option auf NEIN setzten und stattdessen den „Joomfish Language Switcher“ verwenden. Der Umschalter ist im Administrator-Bereich immer aktiviert, da er benötigt wird, wenn die Funktion der Label Übersetzungen benutzt wird.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Vorschaubilder von hochgeladenen Bildern werden automatisch erstellt.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Kleine Vorschaubilder max. Breite (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Kleine Vorschaubilder werden in der Unterkunft-Listenansicht verwendet, während mittelgroße Vorschaubilder im Unterkunfts-Kopf verwendet werden.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Kleine Vorschaubilder max. Höhe (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Mittelgroße Vorschaubilder max. Breite (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Mittelgroße Vorschaubilder max. Höhe (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Beschriftungs-Übersetzung');

jr_define('_JRPORTAL_ROI_TAB', 'ROI');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Provisions-Funktionalität verwenden?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Setzen Sie dies auf Ja, um die Manager-Provision-Rechnungen zu zeigen, die bereits aufgeschüttet wurden.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Provisionsabrechnungen für Manager-Buchungen erstellen?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Wenn ein Manager eine Buchung vornimmt, bedeutet das, dass auch eine Provisions-Rechnungsposition erstellt wird?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', 'Eine neue Provisions-Rechnung wurde erhoben');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', 'Eine neue Provisions-Rechnung wurde erhoben, die Ihre Aufmerksamkeit erfordert. Bitte klicken Sie auf den folgenden Link, um die Rechnung anzuzeigen (möglicherweise müssen Sie sich zuerst anmelden).');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Soll ein Manager, bei Rechnungen die als ausstehend markiert sind, automatisch gesperrt werden?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatischer Sperr-Grenzwert');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Dieser Grenzwert beträgt die Anzahl an Tagen, die ein Manager Zeit hat um eine Rechnung zu bezahlen, bevor er gesperrt wird und seine Unterkünfte deaktiviert werden.');

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Sprachkontext');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Benutzen Sie diese Option um den Sprachenkontext der Site zu ändern. Diese Funktionalität erlaubt es Jomres Etiketten zu benutzen die dem aktuellen Fokus entsprechen. Wenn Sie z.B. ein Makler von Yachten sind, so erlaubt eine Änderung des Kontextes Jomres, das anzeigen von Etiketten aus einer anderen Sprachen-Datei. Zum Beispiel, wenn Sie den Kontext auf Yacht-Makler ändern, so wird Jomres zuerst versuchen die aktuelle Sprache zu finden, danach im Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages nach einem Unterverzeichnis mit dem Namen „yachtmakler“ suchen. Wenn die Datei der aktuellen Sprache existiert, so wird diese verwendet. Falls nicht, so versucht Jomres die englische Sprachdatei aus dem gleichen Verzeichnis zu verwenden. Falls dies fehlschlägt, so verwendet Jomres die Sprach-Datei der aktuell ausgewählten Sprache aus dem Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Erweiterte Site Konfiguration');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Setzen Sie diese Option auf Ja, wenn Sie die erweiterten Website Konfigurationsmöglichkeiten nutzen möchten. Wenn Sie gerade erst damit beginnen mit Jomres zu arbeiten, empfehlen wir Ihnen für das erste die Einstellung auf Nein zu belassen, da die Standard-Installation ausreichend genug ist um damit zu starten. Stattdessen sollten Sie Jomres dem Hauptmenü hinzufügen und sich als „admin“ im Frontend anmelden und beginnen Ihre Unterkünfte zu konfigurieren. Bitte beachten Sie, dass viele der erweiterten Optionen nur Jomres Silver Installationen zur Verfügung stehen. Jomres Lite Benutzer sind deshalb nicht in der Lage, den vollen Nutzen aus den Funktionen zu erhalten, die sie aktivieren.');

jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Lade Jomres jQuery UI Bibliothek?');

jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Preis (höchster zuerst)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Preis (niedrigster zuerst)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Preisübersicht und Schätzungen sollten als: pro Nacht, pro Woche oder pro Monat bepreist werden?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Pro Nacht');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Pro Woche');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Pro Monat');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Pro Person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'Woche(n) an ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'Monat(e) an ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Wie soll die Suchoption für die Anzahl Menschen arbeiten?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Betrifft alle Such-Module. Wenn Sie die Funktion „Suche nach Anzahl Gäste“ nutzen, soll die Suchfunktion nach Unterkünften suchen, deren Tarife Anzahl Gäste kleiner gleich, exakte Anzahl Personen oder größer gleich entspricht? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Bitte warten Sie, Ihre Buchung wird bearbeitet und Sie werden auf die Paypal-Website umgeleitet.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Wenn Sie nicht innerhalb von 5 Sekunden automatisch zu Paypal weitergeleitet werden...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klicken Sie hier');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Buchung gültig ab');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Buchung gültig bis');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Gastname');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Gutscheincodes können generiert und an Gäste gegeben werden, als Anreiz um Buchungen vorzunehmen.<br/>Gültig von und bis Daten beziehen sich auf Daten an denen eine Buchung gemacht werden kann, während Buchung gültig von/bis Daten, sich auf Daten beziehen, welche die Buchung abdecken muss, damit der Gutschein gültig ist. Wenn eine Buchung außerhalb dieses Zeitraums fällt, so gelten die normalen Tarife für die Tage die außerhalb des Zeitraumes liegen.<br/>Wenn Sie die Buchung einem bestimmten Gast zur Verfügung stellen möchten, wählen Sie den Namen des Gastes aus der Dropdown-Liste aus, um den Gutschein auf diesen Gast zu begrenzen.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Mit Ihrem Gutschein, wurde diese Buchung reduziert von ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' auf ');

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Setzen Sie dies auf Nein, um das Laden der beiden jQuery UI Javascript und CSS-Dateien zu deaktivieren.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Lade Jomres jQuery UI CSS Bibliothek?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Setzen Sie dies auf Nein, um nur die jQuery UI CSS-Datei zu deaktivieren.');

//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Gesamt inkl. MwSt.');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unveröffentlichte Unterkunft');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Umwandlungsfunktion verwenden');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Verwenden Sie die Jomres Online-Conversion-Funktionalität. Dies wird eine Konvertierung Dropdown bieten Benutzern Frontend, wo sie in der Lage sein wird, eine Währung zu wählen, die sie wollen, um Preise zu sehen angeboten in. Preis Ausgabe eingestellt wird, um die umgerechnete Preis von der Unterkunft gefolgt zu zeigen, die "native" Preis in Klammern.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Wir haben unsere besten Bemühungen verwendet, um die genaueste und rechtzeitige Wechselkurse zu erhalten, die wir können. Unser Online-Währungsumsrechnung Merkmal ist eine Dienstleistung zu Informationszwecken zur Verfügung gestellt und ist nicht beabsichtigt, genaue Zahlen zu liefern. Dementsprechend können wir nicht garantieren, die Richtigkeit der Wechselkurse . Mit dieser Funktion sind Sie als vereinbart, dass jedes Vertrauen auf oder die Verwendung der Funktion Ratenkonvertierung erfolgt auf eigenes Risiko vollständig sein
.');
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', 'Verwenden Sie Javascript-Caching?');
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', "Wählen Sie, ob die Jomres Javascript-Cache-Funktion zu verwenden. Funktioniert auf den meisten Servern, aber nicht auf alle. Wenn Sie Probleme mit JavaScript-Fehler aufweisen, die als 'unterminated string literal' berichtet in (zum Beispiel) Firebug, sollten Sie dies auf Nein. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', 'Liste alte und aktuelle Gäste');
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', 'Nur aktuelle Gäste');

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Währungsumrechnung/Währungscodes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Erkennung API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Um automatisch den Währungscode Drop-Down-Set Jomres der Lage ist, einen kostenlosen Service zu nutzen IPinfoDB rief der Besuchers Land zu erfassen, jedoch müssen Sie für einen API-Schlüssel zu registrieren unter <a href = "http://ipinfodb.com/register .php "target =" _ blank "> IPinfoDB </a> zuerst.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Fehlerbeseitigung');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP', 'Zeigen Sie das Buchungsformular in einem modalen Popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'Wenn die Option zum Buchungsformular in den Objektdetails zeigen auf Nein festgelegt ist, dann, wenn das Buchungsformular Seite geöffnet Jomres kann das Buchungsformular in einem modalen Popup zeigen. Auf diese Weise können Sie viel mehr Informationen in das Buchungsformular zu schließen, ohne den Kunden zu überwältigen, indem Sie auf dem Bildschirm zu viele Elemente, die (wie sie hinter dem Popup versteckt sind)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals Plattenpositioniereinrichtung');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'Panel benötigt unterschiedliche Einstellungen je nach der Vorlage bei der Buchung die Summen bilden. Zum Beispiel auf der Jomres Joomla eine Einstellung von 712 Werken Vorlage gut, aber auf Milkyway eine Einstellung von circa 1500 besser geeignet ist, besonders wenn man die modale nicht Popup-Funktion aktiviert haben. Es ist wahrscheinlich, dass Sie mit verschiedenen Einstellungen experimentieren müssen, etwas zu finden, die gut in der gewählten Vorlage arbeitet
. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Unterkunft exkl. Steuern');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Unterkunft inkl. Steuern');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Zimmer Steuern:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Öffne das Buchungsformular');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Zurück zu den Unterkunftsdetails');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatsch ausgewählt?');
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

jr_define('_JOMRES_WHOLEDAY_TITLE', 'Buchungen sind für den ganzen Tag?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Durch die System Buchungen Ressourcen aus der Nacht Standard, so eine Buchung aus dem ersten Januar'.date('Y', strtotime('next year')).' bis zum 2. Januar '.date('Y', strtotime('next year')).' deckt nur eine Nacht.Wenn Sie diese Option auf Ja, aber gesetzt ist, dann wird die Buchung ganze Tage decken statt, so dass eine Buchung an diesen Tagen an beiden Tagen abdecken würde und würde der Kunde für zwei Tage in Rechnung gestellt werden.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Pro Tag');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Pro Person pro Tag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Abholen');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Rückkehr');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'Tage (n) an');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Zurück Datum falsch');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Die Buchung ist zu kurz. Es muss zumindest diese viele Tage zwischen dem Pickup und Rückkehrdaten zu sein:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pick-up / Return Mindestabstand');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Der minimale Abstand in das Buchungsformular zwischen der Abholung und dem Drop-off Termine. Ein Intervall von 1 bedeutet, dass kann die Abholung und Rückgabe Daten auf den gleichen Tag festgelegt werden, was jedoch auf dem Mindestabstand noch abhängig ist, die automatisch durch die Buchungsmaschine berechnet wird, wie er überprüft die Tarife, die für den Buchungszeitraum gültig sind.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Preisübersicht und Schätzungen sollten pro Tag / pro Woche / pro Monat festgesetzt werden?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Pro Tag');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Wenige Tage vor dem Abholdatum');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Die Mindestanzahl der Tage, die von "heute", vor dem Abholtermin verstreichen muss,.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Setzen Sie dies auf yes, wenn Sie Vorbuchungen beschränken möchten (verwenden Sie das nächste Feld das Limit in Tagen zu setzen). Wenn Sie dies ja dann noch gesetzt, wenn der Benutzer mehr als n Tage im Voraus zu buchen versucht dann, ihre abholen Zeitpunkt wiederhergestellt werden, wird zu Tage Datum');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Zeige Rückgabedatum Eingang?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Setzen Sie dies auf Nein, wenn Sie nicht die Rückkehr Datum Eingabefeld zeigen wollen. Nur diese verwenden, wenn Sie wissen, was Sie tun, als das Rückgabedatum der Buchungen werden immer an den Tag nach dem Abholdatum eingestellt werden.');

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Wenn Sie diese Option auf Ja gesetzt, dann werden Buchungen für einen festen Zeitraum eingenommen werden. Wenn dies auf Nein festgelegt ist, dann sicher, dass "Pick up Tag definiert" auf Ja nicht gesetzt ist (es sei denn, Sie speziell die Leute wollen zu zwingen, an einem bestimmten Tag der Woche abholen), sonst werden Sie nicht viele Links in der Verfügbarkeit erhalten Kalender.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Vordefinierte abholen Tag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Nur an Standorten, feste Zeitbuchungen anbietet. Wählen Sie den Tag der Woche, die Pritschen muss gemacht werden, auf.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Feste abholen Tag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Feste abholen Daten wieder auftreten: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Ist die feste Abholtermine ausgewählt werden, die Anzahl der Daten, die in den Daten der Dropdown-Liste angezeigt werden kann. Beachten Sie, dass die Liste der Daten wird keine Termine enthalten, wenn eine Buchung aufgrund früherer Buchungen nicht möglich ist, und dass die Liste tatsächlich doppelt so hoch sein wird, solange Ihre gewählte Nummer, weil es eine ähnliche Anzahl von historischen Daten haben (wo verfügbar).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Pro Person, pro Tag');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Wählen Sie Ja, wenn Sie pro Person pro Tag aufladen möchten. Wenn nein, Kosten werden dann auf einer berechnet pro-Ressource-pro-Tag-Basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable Ablagerungen können Sie festlegen, ob Sie den vollen Betrag zu berechnen möchte, wenn die Buchungen Datum abholen wird innerhalb von N Tagen ab "heute". Setzen Sie diese Option auf Ja, um die Funktion zu aktivieren, und geben Sie die Anzahl der Tage unten, so zum Beispiel, wenn der Pick-up Tag innerhalb von 60 Tagen, dann Betrag der Anzahlung wird der volle Betrag sein, sonst wird der Betrag auf der Grundlage Einzahlungsoptionen konfiguriert oben.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Die meisten Unternehmen werden Rohstoffpreise auf der Grundlage der Anzahl der Ressourcen einer erforderlichen Art neu zu berechnen, die zu einem bestimmten Zeitpunkt zur Verfügung stehen. Dies ermöglicht es ihnen Rabatte auf eine Ressource / Branche anzubieten, die nicht besetzt während eines bestimmten Zeitraums mit dem Ziel der Gewinnung von Unternehmen ist, die sonst übersehen werden könnten. <br/> Aktivieren und konfigurieren Dieses Plugin ermöglicht es Ihnen einstellbare Preise anbieten basierend auf der Anzahl der Ressourcen eines ausgewählten Typs sind im Geschäft an einem bestimmten Tag zur Verfügung. <br/> die Tage Schwelle die Anzahl der Tage festgelegt , dass die Abholtermin innerhalb sein muss, bevor Ressourcenpreise durch diese Funktion angepasst werden, dann sind die Prozentsätze Optionen können Sie den Prozentsatz der Ressourcen zu konfigurieren, die zur Verfügung stehen kann, bevor ein bestimmter Rabatt angewendet wird. Beachten Sie jedoch, wenn mehrere Ressourcen gebucht werden, dann wird die aktuelle Höhe des Rabatts auf alle Ressourcen angewendet werden und wird nicht reduzieren, da mehr Ressourcen ausgewählt werden.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (Anzahl der Tage zwischen abholen Datum und heute)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pick up Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Wähle heute');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Ausgewählt');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns heute');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Zurück überfällig');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Hat nicht abgeholt');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Tage');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark eine Buchung abgeholt.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Markieren Sie eine Buchung zurück.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark eine Buchung abgeholt');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Markieren Sie eine Buchung zurück');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Kosten pro Tag: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Anzahl der Tage: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Überschreibe den Gesamtpreis');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Speicher neuen Preis');

jr_define('_JOMRES_BOOKINGFORMWIDTH', 'Buchungsformular Breite in Pixel');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED', 'Lassen Sie die Summen Tafel das Buchungsformular nach unten rutschen?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'Die Summen-Panel wird nach unten rutschen das Buchungsformular , wenn der Benutzer nach unten scrollt. Sie können diese Funktion mit diesem Schalter aktivieren / deaktivieren. Beachten Sie, wenn der Benutzer besucht über einen mobilen Geräten Browser dann rutscht automatisch deaktiviert.');

jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'E-Mail an neue Benutzer ihre Login-Daten?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Wenn der neue Benutzer anlegen Option auf Ja, Sie können diese Option auf Nein festgelegt , um sicherzustellen, dass sie ihre Login-Daten nicht per E-Mail, sobald der Benutzer erstellt wurde. Dies könnte nützlich sein, wenn Sie automatisch neue Benutzer zu einer Mailing-Liste hinzugefügt werden, zum Beispiel, und wollen nicht wirklich Benutzer anmelden.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Zeigen Steuerausgang in das Buchungsformular Summen Zusammenfassung?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Verhindern Sie das Buchungsformular aus, welche die Steuerpreisfelder in der Summenübersicht durch diese Option auf No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Stornierungs Threshold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Eingeloggt, registrierte Gäste können ihre eigenen Buchungen stornieren. Hier können Sie den Schwellenwert festlegen, der in Tagen, wo die Buchung kann nicht nach einer bestimmten Anzahl von Tagen vor dem Ankunftsdatum storniert werden.');

jr_define('_JOMRES_EDIT_PROFILE', 'Editiere Profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Art der Unterkunft Beziehung');
jr_define('_JOMRES_IMAGE', 'Bild');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business-Typen, die diese Funktion zeigen können');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Klicken Sie auf einen Brief an alle Unternehmen mit diesem ersten Zeichen zu zeigen. Sobald Sie eine Liste von Eigenschaften haben, können Sie Provisionen auf diese Eigenschaften, oder klicken Sie auf den "Bearbeiten" Symbol zuweisen, die Unternehmen Statistiken anzeigen.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Bearbeiten Steuersatz');

jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');

jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Lizenz-Server-Passwort');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Lizenzserver Benutzername');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Wenn Sie einen Benutzernamen und ein Passwort auf dem Lizenzserver haben, geben Sie diese bitte hier. Dies wird Ihnen helfen Plugins zugreifen, die Sie berechtigt sind,. Wenn Sie eine gültige Support-Schlüssel in das Feld oben eingegeben haben, dann ist es nicht notwendig, den Benutzernamen / Passwort hier zu liefern.');

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Diese Jomres Version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Die neueste Version Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Aufmerksam : Es gibt eine neue Version von Jomres zur Verfügung, die Sie so bald wie möglich beraten zu aktualisieren.');

jr_define('_JOMRES_PRODUCT_INFORMATION', 'Willkommen in Jomres, wir wünschen Ihnen viel Spaß mit Lieblings-Buchungssystem des Joomla. Wenn Sie möchten, eine Jomres Starter, Business oder Enterprise-Lizenz erwerben, <a href="http://www.jomres.net/prices" target="_blank"> besuchen Sie bitte unsere Website</a> Informationen darüber, wie Sie aktualisieren können.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Dieses System ist ideal für jedes Szenario, sei es eine einfache Buchungsformular für eine einzelne Eigenschaft, bis hin zu einer Website, die mehrere Benutzer hat, in mehreren Sprachen, mit mehreren Eigenschaften. Bitte beachten Sie die "Hilfe" auf der linken Seite, einschließlich der "Getting Started" Seite, die Sie durch Ihre ersten Schritte leiten wird.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktive Unterkunft');
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', 'Wechsel die aktive Unterkunft');
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', 'Klicken Sie auf ein Zeichen, alle Eigenschaften zu zeigen, die mit diesem Zeichen beginnen. Einmal enthüllt, klicken Sie auf, daß die Immobilie Namen, um Ihre aktive Eigenschaft zu ändern.');

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternative SMTP Einstellungen');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Setzen Sie diese Option auf Ja, diese Alternative SMTP-Einstellungen zu verwenden,. Eine zunehmende Anzahl von Web-Hosts erscheinen PHP Mail-Funktion zu blockieren, so können Sie wählen, um die Mail-Einstellungen übergehen , die Jomres von Ihrem Host nimmt CMS (in der Regel Joomla) und verwenden Sie die Einstellungen Ihrer Wahl hier.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternativer Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Ändere dies zu ihrem SMTP Mail Server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativer Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Ändere dies zu ihrem SMTP Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Abhängig von Ihrem SMTP-Server-Einstellungen, müssen sie dieses Feld frei lassen, oder geben sie 'ssl' oder 'tls' ein. Fragen sie Ihren SMTP Provider wenn sie diese nicht wissen.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Benutze Authentifikation');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Wenn ihr SMTP Server einen Bentzer zum Login benötigt, setzen sie hier den Wert Ja. Der Benutzername und Passwort wird dann benutzt.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternativer Benutzername');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternatives Passwort');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');

jr_define('_JOMRES_WARNING_SYSTEM_CACHE', 'Warnung : Sie haben das Joomla System Cache plugin aktiviert. Wir empfehlen Ihnen, dieses Plugin zu deaktivieren, da die Ajax Rückgabewerte zum Buchungsformular zwischengespeichert werden, so dass sich Ihr System fehlerhaft verhalten könnte.');

jr_define('_JOMRES_QUICK_INFO', 'Quick Info');

jr_define('_JOMRES_MENU_SHOW', 'Zeige');
jr_define('_JOMRES_MENU_HIDE', 'Verstecke');
jr_define('_JOMRES_MENU_SHOW_TITLE', 'Benutze das alternative Menü Layout?');
jr_define('_JOMRES_MENU_SHOW_DESC', 'Setzen Sie dies auf Ja, um die Alternative Menüoption im Frontend zu verwenden. Die Einstellung Nein zeigt die Jomres Hauptmenü als ein Akkordeon auf der linken Seite, mit einer Taste, um das Menü zu vergrößern.Wenn auf Ja gesetzt, wird die Alternative Hauptmenü verwendet, die ganz oben auf der Seite in einer Menüleiste führt. Beide Menüs werden mit dem Anwender schieben, und das Akkordeon-Menü wird als das bessere Menü zu sein, aber wenn Sie feststellen, dass es nicht für Sie geeignet ist, bist du frei, die Alternative zu wählen. Wenn keine dieser Menüs zu Ihnen passen, dann müssen Sie mainmenu_wrapper.html zu ändern und mainmenu_options.html Ihre spezifischen Satz von Anforderungen zu entsprechen.');

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Standart');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Jeder');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registriert');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Niemand');

jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Menü Zugangskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Diese Option erlaubt es zu definieren wer ein Plugin im Hauptmenü sehen darf. Typischerweise Benutzer Optionen 00009 sind sichtbar für regustrierte/ oder unregistrierte Seitenbesucher, 00010 Optionen sind generell für den Typ Reception und beinhalten Aktivitäen die auf eine Tag zu Tag Basis dienen, während 00011 Optionen für das Einrichten und Konfigurieren einer Unterkunft verwendet wird, weche aber nicht alzu oft erfolgen.');

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Rezeptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Volle Zugangskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Setzen Sie diese Option auf Ja, um die vollständige Zugriffskontrolle Funktion zu aktivieren, dann besuchen Sie die Access Control unter Systemwartung Zugriffskontrollen zu konfigurieren.');

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Beachten Sie jedoch, diese diese Einstellungen kontrollieren nicht die zugrunde liegenden Skripte, die sie eine Verbindung herstellen, so zum Beispiel, wenn Sie festgelegt <i>00009user_option_03_search</i> nach 'Manager'ein Benutzer, der Jomres noch kennt, kann anrufen j06000search.class.php durch Eingabe http://www.domain.com/index.php?option=com_jomres&task=search in der Adresszeile ihres Browsers. Dies ist beabsichtigt, da diese Menü Zugangskontrolle einfach kontrolliert, was im Jomres Hauptmenü zu sehen ist. Wenn Sie strengere Kontrollen müssen stellen Sie dann die Site Config -> Full Access Control-Option auf Ja und erneut die Menü Access Control.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Vollzugriffskontrolle');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<stark>Diese Funktion ist nur für fortgeschrittene Benutzer. Wenn Sie nicht wissen, was es denn ist und nicht einen bestimmten Grund, es zu benutzen haben, kehren Sie zu Standortkonfiguration und stellen Sie die Full Access Control-Option auf Nein.</strong><br/>
	Mit dieser Funktion können Sie steuern, wer welche Mini-Komponenten zugreifen können (mit einigen Ausnahmen, die hart codiert in das System sind).Wenn die Zugriffsebene neben dem Namen des Skripts wird auf Standard eingestellt, dann mit dem Full Access Control Option auf Ja <strong>irgendjemand</strong> wenn Sie zugreifen können Skripte, die sie sollten daher nicht zugreifen können beabsichtigen, diese Funktion zu verwenden, müssen Sie die Zugriffskontrollpegel eingestellt für<stark>jeden</strong> Jomres Mini-Komponenten hier aufgelistet. Wenn Sie nicht wissen, was diese minicomponentes tun, dann raten wir Ihnen dringend, diese Funktion nicht zu verwenden, um alle.<br/>
	In Jomres folgen Zugriffsebenen eine Pyramide, so Super-Vermieter von mehr als Manager sind. Kurz gesagt: Super-Manager- > Manager > Receptionist > Eingetragen > nicht eingetragen. Also, wenn ein registrierter Benutzer Zugang zu einem minicomponente hat, tun dies Rezeptionisten, Manager und Super-Manager.<br/>
	Beachten Sie, dass Sie nicht über Administrator-Bereich minicomponentes steuern. Jeder im administrativen Bereich wird als ein vertrauenswürdiger Benutzer, dass sein sie den Zugriff auf jedes Skript (vor allem diese) nicht blockiert werden sollen.
	');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warnung! Sie haben die volle Zugriffskontrolle aktiviert ist, jedoch haben wir die Zugriffskontrolleinstellungen gezählt und verglichen sie mit der Anzahl der Mini-Komponenten, die kontrolliert werden sollten, und die beiden passen nicht auf, daher können Sie einige Skripte, die nicht kontrolliert werden. Dies könnte ein Sicherheitsproblem sein, und Sie werden aufgefordert , dies sofort zu beheben, indem Sie die Access Control-Funktion besuchen und überprüfen, ob die entsprechenden Ebenen angewendet wurden.');

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Benutzer mit Admin-Rechten auf diese Eigenschaft');
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', 'Liste aller Benutzer Rechnungen');

jr_define('_JOMRES_DEBUGGING_SUBJECT', 'Thema');
jr_define('_JOMRES_DEBUGGING_FULLNAME', 'Ihr voller Name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Ihre Mail Adresse');
jr_define('_JOMRES_DEBUGGING_ISSUE', 'Bitte beschreiben sie ihren Fehler');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta Title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta Beschreibung');
jr_define('_JOMRES_FOUNDPROPERTIES', 'Properties found');
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', 'Füge Ihre Unterkunft hinzu : 1 von 2');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Füge Ihre Unterkunft hinzu : 2 von 2');

jr_define('_JOMRES_MYPROPERTIES', 'Mein Geschäft');

jr_define('_JOMRES_CART_TITLE', 'Meine Buchungsvorschläge');
jr_define('_JOMRES_CART_INFO', 'Achtung, diese Buchungen sind noch nicht gespeichert. Wenn sie ausloggen oder ihre Session abgelaufen ist, sind diese verloren. Denken Sie daran, Ihre Buchungen zu bestätigen!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Buchung(en) bestätigen');
jr_define('_JOMRES_CART_OR', ' oder ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Speichere für später');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Sie haben noch keine Buchungen gespeichert.');
jr_define('_JOMRES_CART_VIEWCART', 'Zeige View Korb');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Sprachdatei Unterverzeichnis');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standart Latitude Startpunkt');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Standart Longitude Startpunkt');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In der Google-Karte auf dem Grundstück bearbeiten Seite, bevor der Marker verschoben wurde, was sollte die Standard Breite / Länge Startpunkte ?');

jr_define('_JOMRES_CLEARDATES', 'Ich habe noch kein Datum');

jr_define('_JOMRES_MOBILE_REDIRECT', 'Umleiten zu rahmenlosen , wenn auf mobilen Geräten?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres enthält eine Funktion, um einen Benutzer zu einer Ansicht von Joomla umleitet, die keine Module und Header nicht enthält, wenn es erkennt, dass der Browser auf einem mobilen Gerät gehört. Wenn Sie eine Joomla-Template, die bereits für mobile Geräte optimiert ist, können Sie diese Funktion deaktivieren, indem Sie die Option Keine Einstellung.');

jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails werden von welcher Adresse gesendet?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Lassen Sie diese Option leer zu deaktivieren. Jomres die Hotels E-Mail-Adresse verwenden,(es) wenn E-Mails an Gäste zu senden, aber Ihre E-Mail-Dienst kann keine E-Mails von beliebigen Adressen erlauben (das heißt sie nur E-Mails von einer autorisierten Adresse zulassen). Wenn das der Fall ist, dann können Sie diesen Eingang eine Adresse einzugeben, die als die FROM-Adresse für alle System-E-Mails zu sehen sein wird.');

jr_define('_JOMRES_CSS_CACHING_TITLE', 'Benutze css cache?');
jr_define('_JOMRES_CSS_CACHING_DESC', '');

jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', 'Suchen Kalender zeigen die Daten löschen Checkbox?');

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Listenansicht');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Fotoansicht');

jr_define('_JOMRES_COMPARE', 'Vergleiche');
jr_define('_JOMRES_REMOVE', 'Entferne');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Zurück zu den Suchresultaten');

jr_define('_JOMRES_ADDTOSHORTLIST', 'Merken');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Von Merkliste entfernen');
jr_define('_JOMRES_VIEWSHORTLIST', 'Zeige Merkliste');

jr_define('_JOMRES_COOKIEPOLICY_TITLE', 'Cookie-Richtlinien');
jr_define('_JOMRES_COOKIEPOLICY_DESC', "EU-Gesetzgebung verlangt, dass alle Websites, die Cookies Anfrage Erlaubnis von Website-Besucher verwenden Cookies zu speichern.
<br/>
Jomres verwendet das Cookie des Host-CMS auf seine eigene Session-Datei aufzubauen, wo Informationen über die Suchergebnisse des Benutzers und andere Aktivitäten gespeichert werden können, um den Besuch des Benutzers machen angenehmere.Während wir glauben, dass normale Jomres Funktionalität wahrscheinlich durch Bestimmungen in den Rechtsvorschriften fallen definiert als <i>'solche Speicherung oder dem Zugang nicht unbedingt erforderlich ist ein Dienst der Informationsgesellschaft durch den Teilnehmer oder Nutzer verlangt, um'</i> (sehen http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) Wir haben diese Funktion enthalten, um Ihnen die Möglichkeit zu geben, den Benutzern zu verhindern, dass andere Seiten als Suchseiten im Falle, dass der Benutzer den Zugriff nicht erlaubt, ihre Cookie auf diese Weise verwendet werden,. <br/>
Wenn diese Option aktiviert Jomres wird ein \"beitreten\" Link zeigen, wo Benutzer können wählen, das Cookie zu haben, die für sie in dieser Weise verwendet gespeichert wird. Wenn sie wählen, um zu zeigen, sie nicht Opt-in dann Jomres werden nur einige grundlegende Seiten (wie die Eigenschaften Details anzeigen, Suchergebnisse , etc.). 
<br/>
Setzen Sie diese Option auf Ja, diese Politik zu verordnen.");

jr_define('_JOMRES_COOKIEPOLICY_1', 'Wichtig: Cookie-Richtlinien');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Wir verwenden Cookies, um zu helfen unsere Website relevant und einfach zu bedienen.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Weiterlesen...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU-Gesetzgebung verlangt, dass alle Websites eindeutig festlegen, ob Cookies verwendet werden und deren Zweck.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'Die Such- und Buchungsmaschine von dieser Seite muss in der Lage sein, die Möglichkeiten zu erinnern, die Sie gewählt haben auf höchstem Niveau zu arbeiten. Um dies zu tun braucht es Informationen zu speichern, die mit einer kleinen Datei ein sogenannter zugeordnet ist "cookie" die Ihren Browser eindeutig identifiziert, und für uns, das zu tun, müssen Sie zustimmen, dass wir. Wenn Sie nicht über diese Cookie-Politik akzeptieren, dann werden Sie stark eingeschränkt in dem, was Sie auf dieser Seite tun können.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Ja, ich akzeptiere die Verwendung von Cookies auf diese Weise.');

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Anzahlung ist erforderlich, Kosten für die erste Nacht?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Die Preise werden pro Nacht berechnet. Haben Sie die Anzahlung wollen eine Nacht aufladen zu sein? Wenn ja, können Sie die folgenden Optionen ignorieren.');

jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Sie haben keine Produkte zu Ihren Favoriten hinzugefügt.');

jr_define('_JOMRES_MOBILE_SETTINGS', 'Mobilgeräteeinstellungen');
jr_define('_JOMRES_SIMULATE_MOBILE', 'Simulieren mobilen Modus');
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', 'Hier yes Jomres zu zwingen, immer auf mobile Ansicht wechseln. Nützlich, wenn Sie die Entwicklung Vorlagen, die für mobile Geräte sind. HINWEIS : Sie werden eine mobile Vorlage Plugin benötigen installiert.');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', 'Simulation IP');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', 'Sie können die Simulation nur Einstellung konfigurieren in Kraft treten, wenn die Benutzer IP = xxx.xxx.xxx.xxx, so zum Beispiel, wenn Sie die Entwicklung auf localhost , würde stellen Sie die IP-Nummer 127.0.0.1.');

jr_define('_JOMRES_SAFEMODE', 'Aktivieren Sie den abgesicherten Modus?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Setzen Sie dies auf Ja, um den abgesicherten Modus auslösen. Dadurch werden alle Plugins deaktivieren, so dass Jomres nur seine Kernfunktionalität verwenden.');

jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');

jr_define('_JOMRES_USE_JOMRESEDITOR', "Verwenden Sie Jomres 'WYSIWYG-Editor? (empfohlen)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', 'Wenn Sie den WYSIWYG-Editor aktiviert haben, können Sie den HTML-Editor verwenden(s) für Ihr CMS oder das mit Jomres geliefert. Dieser ist für den Einsatz von Vermieter optimiert und es wird empfohlen, dass Sie sich entscheiden, es zu benutzen.');

jr_define('COMMON_NEXT', 'Nächster');
jr_define('COMMON_CANCEL', 'Abbrechen');
jr_define('COMMON_SUBMIT', 'Senden');
jr_define('COMMON_SAVE', 'Speichern');
jr_define('COMMON_DELETE', 'Löschen');
jr_define('COMMON_RETURN', 'Zurück');
jr_define('COMMON_CLOSE', 'Schliessen');
jr_define('COMMON_BACK', 'Zurück');

jr_define('COMMON_HOME', 'Zuhause');

jr_define('COMMON_NEW', 'Neu');

jr_define('COMMON_SEND', 'Senden');

jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha wird verwendet, um sicherzustellen, dass der Client über Web-Formulare ist ein Mensch, und verwendet wird, von Vermieter zu verhindern, dass "spammed" durch Roboter auf dem Internet. Um den Kontakt Formular in Jomres verwenden, müssen Sie sich registrieren bei<a href="http://www.google.com/recaptcha" target="_blank">die Google reCaptcha</a> Homepage und stellen Sie Ihre Domain Ihre öffentlichen und privaten Schlüssel erhalten. Wenn Sie diese Schlüssel erhalten haben, geben Sie diese bitte unten. Der reCaptcha Service ist ein kostenloser Service von Google bereitgestellt.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Öffentlicher Schlüssel');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Privat Schlüssel');

jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Um zu verhindern, die Gefahr der Gäste Doppelbuchung Zimmer Jomres eine Lock-Datei verwendet einen Raum zu verhindern, dass der zur Verfügung stehenden Zimmer Liste in das Buchungsformular hinzugefügt werden, wenn jemand anderes hat bereits den Raum zu ihnen für den gleichen Zeitraum zugegeben. Standardmässig wird Zeit, um diese Sperre in 3600 Sekunden heraus, oder eine Stunde. Sie können die Zeit ändern sie diese Sperre abläuft nimmt durch diese Zahl zu ändern.');

jr_define('_JOMRES_BOOTSTRAPSWITCH', "Aktivieren Sie Jomres 'Bootstrap-Vorlagen und Funktionalität?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', 'Wenn Sie eine Bootstrap-aktivierte Vorlage im Frontend dieser Seite laufen diese Option auf Ja.');

jr_define('COMMON_ACTION', 'Aktion');
jr_define('COMMON_VIEW', 'Anzeigen');

jr_define('BACKTOTOP', 'Zurück nach oben');

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Schwach');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Stark');

jr_define('_JOMRES_INPUTFILTERING', 'Eingangsfilter');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Eingangsfilterstufe');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Die meisten Daten, die in das System eingegeben wird durch erste Stripping keine HTML-Tags hygienisiert wird, wenn PHP-Variable-Filterfunktion unter Verwendung der Daten sicher zu machen, bevor sie in die Datenbank eingegeben. Vielleicht möchten Sie (die Texteingaben in der Objektdetails Seite zum Beispiel) bestimmte Eingaben zu ermöglichen, HTML aufzunehmen. Es gibt zwei Ebenen von Filtern Sie können diese Eingabe zu filtern, entweder schwach oder stark. Sie sollten nur die schwache Einstellung, wenn der Benutzer verwenden(s)Eingabe der Daten werden von Ihnen selbst vertraut, z.B. Kolleginnen und Systemadministratoren , sonst sollten Sie überlassen es Stark gesetzt. Wenn zu stark eingestellt (empfohlen) können Sie noch angeben, welche durch die Bearbeitung der nächsten Einstellung zu erlauben Tags'HTMLPurifier erlaubten Tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Erlaubt Eingangs-Tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Sie können die Tags bearbeiten, die HTMLPurifier durch seine Filtersystem ermöglicht. Die Standardeinstellung ist 'p,b,stark,a[href],i' (i.e. Absatz, Fett gedruckt, Stark, Links und Kursiv). Weitere Informationen über die erlaubten Tags, bitte Dokumentation HTML Reinigern lesen an <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Während Sie diese Einstellung ändern können, sollten Sie es auf den Standardwert zu verlassen.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'erlaubt Eingänge');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Sie können html die Formulareingaben definieren lassen wird diese Option bearbeiten, jeder Eingang zu dieser Liste hinzugefügt werden durch HTML Purifier analysiert werden, anstatt alle HTML-Code mit gestrippt. Die Standardeinstellung ist : 'Eigentum_Beschreibung Eigentum_einchecken_mal Eigenschaft_Bereich_Aktivitäten Eigentum_Fahren_Richtungen Eigentum_Flughäfen Immobilien_andere Transporteigenschaft_Politik_Haftungsausschlüssen'. Fügen Sie weitere Eingaben durch ihre von Namen Hinzufügen, durch ein Leerzeichen getrennt.");

jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Einzelheiten in Tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Setzen Sie diese Option Objektdetails in Tabs zu zeigen,.Stellen Sie es nicht, um sie ohne Reiter zu zeigen,.');

jr_define('COMMON_PRINT', 'Drucken');

jr_define('COMMON_EDIT', 'Editieren');
jr_define('COMMON_COPY', 'Kopieren');

jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 enthält Twitters Bootstrap Rahmen standardmäßig und Jomres hat Vorlagen und Funktionen, die diese Vorlagen verwenden. In der Standardeinstellung, wenn Sie Jomres auf Joomla 3 sind diese Schalter auf Ja ausgeführt werden, aber man kann sie auf Nein festgelegt , wenn dies gewünscht(nicht empfohlen). Wenn Sie eine Version von Joomla niedriger als Joomla 3 ausgeführt wird, können Sie immer noch entscheiden, die Jomres Bootstrap-Vorlagen und Funktionalität zu verwenden,,jedoch standardmäßig werden diese Optionen auf Nein.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Verwenden Sie Jomres Bootstrap-Vorlagen im Frontend?');
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', 'Benutze Jomres Bootstrap template im Administratoren Bereich?');

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Hier sind einige Alternativen, die Sie in Betracht ziehen könnten.');

jr_define('_JOMRES_BEEZ_WARNING', 'Achtung, ihre Joomla Template ist auf Beez3 gesetzt. Bitte beachten sie das unser Template nicht mit Beez3 kompatibel ist. Wir empfehlen, dass sie ihre Seite auf ein Bootstrap template wie Protostar setzten.');

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Automatische Gast Ländercode Erkennung?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'Das System versucht das Land des Gastes automatisch zu erkennen, falls dieser nicht schon vorher gebucht hat. Sie können diese Option auch auf Nein stellen und das Land das sie im Buchungsformular bevorzugen in der nächsten Option angeben.');

jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Über Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Hilfe');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN', '1 main');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Los gehts');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE', 'System Wartung');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Zugangskontrolle');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Entwickler Tools');
jr_define('_JOMRES_CUSTOMCODE_ASAMODULE', 'ASAModule');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'Sprachen');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING', 'Konten');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Seiten Struktur');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT', 'Benutzer Management');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Anleitung (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mein Konto (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS', 'CRON Aufgaben');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Portal Funktionen');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin Manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'Integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Report/Statistiken');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES', 'Steuern');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_TICKETS', 'Tickets (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Hilfe');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Aktualisierung');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'Bezahlungssysteme');

jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif Standart');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Dies gilt nur für neue Tarife');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Jahre zum anzeigen');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definiere die Anzahhl der Jahre die gezeigt werden soll wenn sie einen Tarif Typ editieren.');

jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Rechnungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Konto Details');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Suche');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Dashboard');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'Reserviere');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS', 'Management');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Rechnungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Einstellungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_PROPERTYCONFIG_SRPS', 'SRPs');

jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editiere Land');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Land id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Land Code');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Name des Landes');

jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editiere Region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Land Code');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Name der Region');

jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Liste Länder auf');
jr_define('_JOMRES_COM_LISTREGIONS', 'Liste Regionen auf');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportiere Definitionen');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Diese Option erlaubt es Übersetzungen zu exportieren, die mit der Sprachübersetzungsfunktion erstellt wurden. Es generiert ein Textfeld mit allen relevanten Textinhalten für eine neue Sprachendatei, benutzen sie kopieren und einfügen um eine neue Sprachdatei für ihren Jomres Server zu erstellen. Sie haben eine neue Sprachdatei erstellt. Wenn sie die Jomres Community unterstützen wollen, senden sie uns Ihre neue Sprache. Danke!');

jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Übersetze Länder');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Übersetze Sprachdatei');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Fehler, der von ihnen eingeloggte Benutzer ist kein Super Manager in Jomres, sie können diese Option nicht nutzen. Benutzen sie die Zeige Profil Option um sich selbst zum Manager und zum Super Manager zu machen. Dies ist eine Sicherheitsfunktion.');

jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Liste Standard Layout Eigenschaften');

jr_define('_JOMRES_LASTEDITED_WARNING_72', 'Jomres verwendet Vorlagen, dessen Ausgang zu konstruieren. Wenn Sie ein Designer, die das Aussehen und das Gefühl von Jomres einfachen Wechsel, Sie müssen keine der Code zu bearbeiten, Sie müssen nur die Vorlagen-Markup bearbeiten. Diese Vorlage Edit-Funktion ermöglicht es Ihnen, Ihre eigene angepasste Versionen dieser Jomres Vorlagen erstellen. <br/>
<br/>
Wenn Sie eine Vorlage anpassen haben Sie die Möglichkeit, die individuell gestaltet werden spezifisch für alle Immobilienarten zu machen, oder eine bestimmte Art der Immobilie. Zum Beispiel verwendet das NGM Zufalls Modul-Plugin die basisch_Modul_Ausgabe.html Layout-Vorlage zu konstruieren. Als Ergebnis können Sie verschiedene Anpassungen des erstellen basisch_modul_Ausgabe.html Vorlage für verschiedene Immobilienarten.  <br/>
<br/>
Wenn eine Vorlage wurde nicht bearbeitet vor, dann können Sie durch Auswahl der Option Neu daneben eine neue Anpassung dieser Vorlage erstellen. Wenn Sie auf Neu klicken, werden Sie auf eine neue Seite weitergeleitet, wo Sie diese Vorlage bearbeiten. Die anfängliche Layout wird aus dem in die gespeicherte Vorlage genommen /'.JOMRES_ROOT_DIRECTORY.'/Vorlagen/xxx/Frontend-Verzeichnis, wenn Sie auf Speichern klicken Sie dann Ihre Anpassungen werden in der Datenbank gespeichert und wenn Jomres diese Vorlage verwendet, wird es das Markup in der Datenbank gespeichert verwenden, nicht das Markup in die gespeicherte /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. Dadurch wird sichergestellt, dass Anpassungen nicht überschrieben werden, wenn Sie Ihre Jomres Installation aktualisieren.<br/>
<br/>
Sobald eine Vorlage angepasst wurde haben Sie mehr Möglichkeiten. Sie können eine neue Kopie der Original-Vorlage erstellen (wie oben), Sie können eine Anpassung an eine neue Vorlage Anpassung kopieren, so zum Beispiel, wenn Sie bereits angepasst basic_modul_Ausgabe.html für Hotels,dann können Sie diese Anpassung an eine neue Anpassung für eine neue Art der Immobilie kopieren, wie Autos.Sie können eine vorhandene Anpassungs bearbeiten,oder Sie können es löschen. Wenn Sie eine Anpassung löschen, vorausgesetzt, es von dieser Vorlage nicht eine andere Anpassung wird dann in Jomres wird mit der Vorlage zurück /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Dies ist nützlich, wenn Sie eine Vorlage bearbeitet haben, aber nicht wie die Änderungen, die Sie gemacht haben,. Sie können die Anpassungen löschen und wieder an der ursprünglichen Vorlage beginnen.<br/>
<br/>
Jomres wird ständig weiterentwickelt und Kern-Vorlagen werden häufig aktualisiert/geändert. Wenn Sie die Vorlagenbearbeitung Funktion diese aktualisierten Vorlagen verwenden, werden Ihre Anpassungen überschreiben, jedoch kann dies auch bedeuten, dass Ihre Anpassungen keine neuen Funktionen in diesen Kernvorlagen verwenden. jedoch kann dies auch bedeuten, dass Ihre Anpassungen keine neuen Funktionen in diesen Kernvorlagen verwenden. Die Vorlagenbearbeitung Funktion wird auf die letzten geänderten Daten der Dateien in der Suche /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend Verzeichnis und wenn es feststellt , dass eine Vorlagendate\'sDatum der letzten Änderung ist neuer als die Vorlage, die Sie in der Datenbank gespeichert sind, dann werden Sie Jomres dieser Tatsache warnen. Es bedeutet nicht zwangsläufig, dass Sie jedoch Ihre Vorlage Anpassung aktualisieren müssen, das ist bis zu Ihnen zu entscheiden, ob Sie tun müssen, dass'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Bleiben Sie für ein Minimum von');
jr_define('_JOMRES_NIGHTSFOR', ' Nächten ');

jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS', 'Unterkunft Bilder Liste, zeigt das Unterkunftsbild als gif wenn Slideshow Bilder verfügbar sind.');
jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY', 'Zeige als GIFs nur wenn die Unterkunft bevorzugt angezeigt werden soll.');

jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agent Details');
jr_define('_JOMRES_AGENT_LISTINGS', 'Agenten Liste');

jr_define('_JOMRES_PROPERTY_LANG', 'Unterkunftssprache');
jr_define('_JOMRES_PROPERTY_LANG_DESC', 'Die voreingestellte Sprache für diese Unterkunft.');

jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatische Bestätigung neuer Unterkünfte');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Wenn sie diese Option auf Nein stellen, müssen sie alle neuen Unterkünfte manuell prüfen und bestätigen. Solange eine Unterkunft nicht bestätigt wurde, kann sie von einem Manager/Super Unterkunfts-Manager nicht veröffenlicht werden.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Bestätigungen');
jr_define('_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL', 'Unterkünfte warten auf Bestätigung');
jr_define('_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL', 'Keine Unterkünfte warten auf Bestätigung');
jr_define('_JOMRES_APPROVALS_APPROVE', 'Bestätige Unterkunft');
jr_define('_JOMRES_APPROVALS_REVIEW', 'Zeige Unterkunft');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Die Unterkunft wurde noch nicht bestätigt. Nur wenn diese bestätigt wurde können sie sie veröffentlichen.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Entschuldigung, sie können diese Unterkunft noch nicht freigeben da sie noch nicht bestätigt wurde.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Eine neue Unterkunft benötigt ihre Bestätigung');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Eine Unterkunft wurde im System hinzugefügt welches ihre Bestätigung benötigt. Klicken sie den Link um die auf Bestätigung wartenden Unterkünfte anzuzeigen: ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Ihre Unterkunft wurde bestätigt');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Herzlichen Glückwunsch, ihre Unterkunft wurde bestätigt, bitte klicken sie auf den folgenden Link um zum Unterkunfts Kontrollzentrum zu gelangen : ');

jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region Namen sind übersetzbar');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Nur für schnelle Server andernfalls lassen sie hier die Option auf Nein. Anhand der großen Anzahl von Namen aller Regionen braucht die Übersetzung viel Speicher und verlangsamt die Anzeige des Suchergebnisse.');

jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Gast ausgebucht.');

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Entschuldigung, diese e-Mail Adresse wird bereits benutzt. Wenn das Ihre e-Mail Adresse ist, bitte versichern sie sich, dass sie eingeloggt sind bevor sie buchen.');

jr_define('JOMRES_TAPTOCALL', 'Tippen Sie anrufen');

jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Neue Bewertung für ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Eine neue Beurteilung wurde gelassen ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Neuer Bericht');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Eine Überprüfung wurde berichtet, für ');

jr_define('JOMRES_NON_REGISTERED_USER', 'Nicht registrierte Benutzer');

jr_define('JOMRES_JQUERY18_2', 'Verwenden Sie JQuery 2.x?');
jr_define('JOMRES_JQUERY18_2_DESC', 'Jquery 2.x ist schneller als frühere Implementierungen von jQuery, jedoch fehlt es bestimmte Dinge, wie $.Browser und Unterstützung für IE6/7/8 und ältere Firefox und Safari-Browser. Wenn Sie JavaScript-Fehler auf Ihrer Seite sehen, oder wenn Sie Ihre Vorlage/andere Plugins (wie Diashows) verwenden ältere Versionen von jQuery dann sollten Sie diese Option auf Nein. ');

jr_define('JOMRES_SUPERIOR', 'Überlegen');
jr_define('JOMRES_SUPERIOR_S', '(S)');

jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Gesamtsumme(ex Steuer) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Gesamtsumme (Inc.-Steuer) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total Steuer : ');

jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Gib die zwei Wörter ein: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Geben Sie, was Sie hören: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay die Audiospur ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Laden Sie die Spur im MP3-Format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'visuellen Modus');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio-Modus');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'auffrischen');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Hilfe');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, das war falsch. Bitte versuche es erneut.');

jr_define('JOMRES_GOOGLE_MAPS', 'Google Kartenoptionen');
jr_define('JOMRES_GOOGLE_MAPS_INFO', 'Diese Schicht Optionen sind in erster Linie die spezifisch für Karten in Eigenschaftslisten und Objektdetails Seite. Wenn diese Option aktiviert, nur wird die Wetterlage in den erweiterten Karten dargestellt werden Plugin als zu viele Optionen auf einer größeren Karte einschließlich macht es extrem langsam.');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Holen Sie die Wetterlage?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD', 'Fahrenheit oder Celsius? ');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');

jr_define('JOMRES_GOOGLE_MAP_OPTION_PANORAMIO', 'Verwenden Panoramio-Ebene?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Gebrauchte Transit Schicht?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRAFFIC', 'Verwenden Sie Traffic-Ebene?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_BICYCLING', 'Verwenden Sie das Radfahren Schicht?');

jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Aktivieren Gmap Points of Interest(einschließlich möglicherweise Ihre Konkurrenten)?');

jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');

jr_define('_JOMRES_PLEASE_PRINT', 'Bitte drucken Sie diese E-Mail und präsentieren sie bei Ihrer Ankunft.');
jr_define('_JOMRES_OFFICE_USE_ONLY', 'nur für Bürogebrauch');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scannen Sie diesen Code in das Telefon Richtungen zu uns.');

jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'Verwenden Sie die integrierte in MIAS MwSt Validierungsfunktion ?');
jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'Neu in Jomres 7.3 ist eine Funktion, die Unternehmer und die Gäste können die Gültigkeit haben MwSt-Nummern ihre Daten eingeben und nicht die Mehrwertsteuer auf ihre Rechnungen angewandt haben gegebenenfalls. Diese Funktion soll von der EU ansässigen Immobilienverwalter verwendet werden.');

jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'Die Mehrwertsteuer eingegebene Nummer erscheint nicht korrekt zu sein. Sie sollten etwas davon haben: BE805670816B01');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Ungültige Steuernummer. Bitte überprüfen Sie die Gültigkeit Ihrer UID-Nummer mit der Europa-Steuernummer Validierung Web-Service(VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Herzliche Glückwünsche. Wir konnten Ihre Umsatzsteuer-Identifikationsnummer zu validieren.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', 'Umsatzsteuer-Identifikationsnummer wurde nicht eingegeben.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Liste Steuervorschriften');
jr_define('_JOMRES_TAX_RULE', 'Steuerregel');
jr_define('_JOMRES_TAX_RULE_INFO', 'Steuerregeln werden verwendet, um unterschiedliche Steuerregeln für verschiedene Regionen etablieren. Diese Steuervorschriften wirken sich auf die Person, die die Buchung, wenn sie registriert, Verwendung angemeldet und haben ihr Konto gelöscht die "bearbeiten mein Konto" Seite.Der Zweck dieser Regeln ist Disponenten in diesen Bereichen unterzubringen , die Mehrwertsteuer befreit sind, können Sie feststellen, dass Sie nicht viele Regeln erstellen müssen, wenn überhaupt.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import Steuersätze');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Wir können für Sie für die EU-Steuersätze importieren, wenn Sie wünschen. beachten, Wenn Sie diese Funktion verwenden, dann alle vorhandenen Steuersätze werden entfernt.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Bearbeiten Steuerregel');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Die Umsatzsteuer-Identifikationsnummer für dieses Objekt.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Bitte geben Sie die Umsatzsteuer-Identifikationsnummer für diese Eigenschaft.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Umsatzsteuer-Identifikationsnummer Validierung.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Umsatzsteuer-Identifikationsnummer nicht validiert.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business Details hier eingegeben werden auf Provisionsbasis und Abonnements Rechnungen verwendet werden.');

jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Sie scheinen noch nicht in Ihre Kontodaten gefüllt zu haben.Zur Liste Ihrer Immobilie auf der Website, Wir brauchen Sie, Ihre Kontodaten abgeschlossen ist, bevor wir weiter gehen können.');

jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Produktion oder Entwicklung?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Wenn Sie diese Option auf Entwicklung gesetzt werden wir ermöglichen Fehlerberichterstattung, andernfalls, wenn auf Produktion eingestellt, die abgeschaltet werden. Wenn dies ein Live-Server ist, empfehlen wir, dass Sie diese Option auf "Produktion".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produktion');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Entwicklung');

//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Ressourcendetails');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarifdetails');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Nur');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'übrig!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Ressource-Funktion');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Können Sie diese Ressource-Funktion zu entfernen, es wird auf eine Ressource zugewiesen. Entfernen Sie die Funktion von dieser Ressource und versuchen Sie es erneut.');

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', 'Upload Service');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Bild hinzufügen');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Zimmer Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Hauptbild');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Diashow Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Liste Löschen');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop Dateien hier!');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Wählen Sie die Ressource wollen Sie Bilder hochladen für.Wenn Sie Bilder für einzelne Ressourcen hochladen(e.g. Zimmer) Sie werden eine zweite Dropdown gegeben werden, um die spezifische Ressource zu wählen. ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', 'Das Bild ist zu groß, maximal '.jomres_formatBytes($jrConfig[ 'fileSize' ]).'. Nur JPG und PNG Bilder sind erlaubt.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Hast du mehrere Bilder, wird das 1. für das Hauptbild verwendet!');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Zeige Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Lösche Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Hochladen');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', 'Funktion und Zimmerkategorie Bilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Zimmerbilder');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property Funktionssymbole');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Lade alles hoch');

$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

jr_define('END_TOUR', 'schließen');

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', 'Willkommen in Ihrem Eigentum');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', 'Willkommen in Ihrem Dashboard. Dies ist Ihr Hauptmenü. So zeigen Sie Ihre Immobilie als Ihre Gäste werden es sehen, Klicken Sie auf Armaturenbrett, dann Vorschau.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', 'Dies ist Ihr Eigenschaftsnamen');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', 'Jedes Mal, wenn Sie sich als Hausverwalter angemeldet,Sie werden immer eine Eigenschaft Active haben,der Name, von denen man hier sehen kann. Dies ist die Eigenschaft, die Sie arbeiten an. Bitte denken Sie daran, dass Sie nur auf eine Eigenschaft zu einer Zeit arbeiten können, Sie können nicht zwei Registerkarten in Ihrem Browser geöffnet haben und gleichzeitig auf zwei verschiedenen Eigenschaften arbeiten.');

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', 'Dies ist die Zeitzone Drop-Down-Wähler.');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', 'Dies ist nützlich, wenn Sie in einer anderen Zeitzone zu Ihrem Server sind. Es hilft, Ihre Mitternacht und des Servers Mitternacht synchron zu halten.');

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', 'Dies ist die Sprachwahl.');
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', 'Sie können Ihre aktuelle Sprache ändern, um diese Wähler durch die Verwendung. Dies ist nützlich, wenn Sie Ihre Immobilie Beschreibung wollen in mehreren Sprachen verfügbar sein. Sie können auf die Details der Immobilie Seite gehen und die Beschreibung in der Sprache A eingeben, Mit diesem Selektor dann auf Sprache B zu ändern. jetzt, wenn Sie auf die Details der Immobilie gehen Seite einstellen können Sie Ihre Beschreibung in Sprache B eingeben.');

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', 'Dies ist der Editier-Modus-Wahl.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', 'Sie können durch das Einschalten der Bearbeitungsmodus die Etiketten auf dieser Seite anpassen. Sobald es aktiviert Etiketten, die Sie anpassen können, wird eine gepunktete Unterstrichen. Klicken Sie auf diesen Text, und Sie werden ein Pop-up sehen, wo Sie den neuen Text eingeben. Dies funktioniert auch für verschiedene Sprachen,so können Sie die Beschriftung in die Sprache zu ändern oder ändern, wechseln Sie dann auf Sprache B und den Text zu ändern wieder zu etwas, das Ihrem Geschmack entspricht.');

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', 'Dies ist Inhaltsbereich.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', 'In diesem Bereich finden Sie die Seite, die Sie gerade arbeiten,. Im Armaturenbrett finden Sie einen Kalender zu sehen, die zeigt, welche gebucht wurden Zimmer und den Zeitraum der Buchungen Spanne. Klicken Sie auf ein Datum eine neue Schnell Buchung zu erstellen,oder ziehen Sie mit der Maus mehr als einen Tag zu wählen.');

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', 'Eigenschaft Active Schalter Seite.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', 'Sie können Ihre aktive Eigenschaft ändern Sie den ersten Buchstaben aus dem Namen der Eigenschaft unten durch die Auswahl. Wenn Sie das tun, Sie erhalten eine Liste mit allen Eigenschaften, die Sie Rechte gegeben werden, um zu verwalten.');

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', 'Dies ist, wo Ihr Eigenschaftsnamen zeigen.');
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', 'Sobald Sie eine Eigenschaft Anfangs geklickt, Ihre Eigenschaften in diesem Bereich zeigen. Klicken Sie auf eine Immobilie zu dieser Eigenschaft zu wechseln. Diese Seite ist nützlich, wenn Sie eine Menge von Eigenschaften zu verwalten haben.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', 'Dies ist Ihr Eigentum Kopf.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', 'Dies ist für Ihre Immobilie auf jeden Gast nächsten Seite gezeigt. Es zeigt Ihre Eigenschaftsnamen, die Anzahl der Sterne (wenn überhaupt), ein optionaler Link zu einer anderen Website, und ein QR-Code. Der Code ermöglicht Ihre Gäste ihr Smartphone zu nutzen Standort Details zu Ihrer Adresse zu erhalten.');

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', 'Ihre Fotogalerie.');
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', 'Dies ist die Diashow Bereich. Sie können Fotos durch die Medienzentrum Seite unter den Einstellungen laden -> Medienzentrum Menüoption.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', 'Haupttasten.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', 'Welche Tasten sind hier hängt gezeigt auf welche Optionen Sie in den Details der Immobilie Einstellungen unter der Registerkarte gewählt haben -> Eigenschaftskonfiguration.');

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', 'Online-Kalender.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', 'Mit diesem Kalender können Ihre Gäste sehen, auf einen Blick,wie beschäftigt Sie zu einem bestimmten Zeitpunkt sind oder nicht und ob es irgendwelche offenen Stellen.Sie können auch auf die Pfeile über dem Kalender den Monat in diesem Kalender gesehen zu ändern.');

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', 'Zimmer Liste Registerkarte');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', 'Hier können Sie alle Zimmer sehen, und die Verfügbarkeit von jedem Zimmer, wenn Sie klicken Sie auf die Schaltfläche Verfügbarkeit.');

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', 'Bewertungen Liste.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', 'In diesem Register sind alle Bewertungen, die für Ihre Immobilie gelassen worden. Nur Benutzer, die durch das System gebucht wurden, können eine Überprüfung Ihrer Immobilie veröffentlichen.');

jr_define('TOUR_ID_MAPTAB_TITLE', 'Registerkarte Karte.');
jr_define('TOUR_ID_MAPTAB_CONTENT', 'Unter dieser Registerkarte Ihre Gäste können Ihre Immobilie in einer zoombaren Karte sehen.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', 'Weitere Informationen Registerkarte.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', 'Unter Einstellungen -> Einzelheiten können Sie Informationen über Ihre Immobilie eintragen, den Gäste von Interesse sein könnten, wie Check-in Zeiten, Aktivitäten in der Umgebung,Fahrtrichtung, Flughäfen, Weitere Transport & Richtlinien, Haftungsausschluss. Einmal eingegeben, dass Informationen auf dieser Registerkarte zu sehen.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', 'Buchungsformular.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', 'Ihre Gäste können entweder gehen zu einer anderen Seite, oder sie können das Buchungsformular auf dieser Registerkarte verwenden.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', 'Haupt Details der Immobilie.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', 'Unter Einstellungen -> Einzelheiten können Sie ein Formular ausfüllen Objektbeschreibung genannt. Dies ist die Registerkarte, die immer zuerst geöffnet wird, wenn ein Gast Besucher Ihrer Immobilie auf dieser Seite, so dass Sie sollten versuchen, etwas Text zu addieren, die sofort ihre Aufmerksamkeit erregen werden.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', 'Alle aktuellen und zukünftigen Tarife');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', 'Dies ist eine Liste aller aktuellen und zukünftigen Tarife. Sie können, indem Sie in Einstellungen, um das Aussehen der Liste ändern -> Eigenschaftskonfiguration und klicken auf die Registerkarte Objektdetails . Ändern Sie die Einstellung des Verbose Tarif info option.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', 'lokale Veranstaltungen.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', 'Wenn es irgendwelche Ereignisse, um Ihr Eigentum auftretenden lokalen sind, werden sie in dieser Liste zeigen. Es wird für Dinge wie den Festivals,Märkte usw..Ereignisse, die zu bestimmten Terminen auftreten.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', 'Folgende lokale Sehenswürdigkeiten.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', 'Wenn es irgendwelche Sehenswürdigkeiten in der Nähe zu Ihnen, wie Museen oder Freizeitparks werden sie hier aufgelistet.');

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', 'Verfügbare Auktionen.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', 'Wenn Ihre Immobilie keine Termine verfügbar für Auktion, als die Auktionen hier gezeigt werden.Auktionen sind ein nützlicher Weg, um Geschäfte zu Ihrer Immobilie während der Ruhezeiten des Fahrens.');

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', 'Buchung Konfiguration.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', 'Auf dieser Registerkarte können Sie Teile davon, wie Sie bei der Buchung Werke konfigurieren.Wenn Sie Zimmer in einer Immobilie vermieten, wie in einem Hotel oder B & B, dann können Sie Dinge wie die Zimmer Listenstil konfigurieren.');

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', 'Ihre Geschäftsdaten.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', 'Hier können Sie Ihre Geschäftsadresse und Umsatzsteuer-Identifikationsnummer eingeben, wenn Sie es haben. Diese Daten werden auf den Rechnungen angezeigt werden Ihre Gäste sehen, und alle Rechnungen, die von der Website für Sie generiert.');

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', 'Externe Links.');
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', 'Sie können einen Link zu einer anderen Website hinzufügen hier.');

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', 'Gateways.');
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', 'Gateways sind die Bezeichnung für Zahlungsdienste zu beschreiben. Wenn Sie ein Konto bei einer der Gateway-Dienste in diesem Register angezeigt Sie Ihre Kontodaten in dieser Registerkarte Zahlungen zu nehmen Online eingeben.');

jr_define('TOUR_ID_TAB_MISC_TITLE', 'Sonstiges .');
jr_define('TOUR_ID_TAB_MISC_CONTENT', 'Dieses Register ist für Einstellungen, die in einem anderen Reiter nicht passen.');

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', 'Einzelheiten Seite Einstellungen.');
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', 'Auf dieser Registerkarte können Sie verschiedene Optionen zu ändern, wie sie auf Details der Immobilie Seite angezeigt(Gehen Sie auf die Jomres Hauptmenü -> Armaturenbrett -> Vorschau, um zu sehen, dass die Seite).');

jr_define('TOUR_ID_TAB_REQUIRED_TITLE', 'Benötigte Gegenstände in das Buchungsformular.');
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', 'In diesem Register können Sie festlegen, welche Elemente in das Buchungsformular , die erforderlich sind oder optional.');

jr_define('TOUR_ID_TAB_SRPS_TITLE', 'Villa/Wohnung spezifischen Einstellungen.');
jr_define('TOUR_ID_TAB_SRPS_CONTENT', 'Diese Registerkarte bietet Einstellungen, die von Villen und Wohnungen häufig verwendet werden,. ede Eigenschaft, wo Sie die gesamte Immobilie vermietet, nicht einzeln, sondern in einer Eigenschaft Zimmer. das gesagt, Diese Einstellungen können sowohl von Villa und Hoteltyp Eigenschaften verwendet werden.');

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', 'Einzelne Person Zuschläge.');
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', 'Einzelne Person Ergänzungen sind die Gebühren, die zu einer Buchung hinzugefügt werden, wenn ein Raum, der nur für zwei sorgen kann auf einzelne hält.');

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', 'Tarife');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', 'Auf dieser Seite können Sie festlegen, wie die Tarife und Einlagen berechnet werden.');

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', 'Kurtaxe.');
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', 'Wenn Ihr Land oder Stadt Gebühren Kurtaxe, Sie können sie hier konfigurieren.');

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', 'Mikromanagement -Einstellungen.');
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', 'Mikromanagement Tarif Editiermodus spezifische Einstellungen.');

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', 'Wise Preis Einstellungen.');
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', 'In diesem Register können Sie Ihre Zimmerpreise dynamisch aktivieren und konfigurieren,geben Ihnen die Möglichkeit, vergünstigte Preise der Belegung zu bieten, wenn die Buchung vorgenommen wird, ist gering.');

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Ihre Eigenschaften.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', 'Diese Seite zeigt Ihnen eine Liste der Eigenschaften, die Sie berechtigt sind, zu verwalten. Auf der linken Seite können Sie leicht, wenn sie veröffentlicht werden oder nicht. Der Eigenschaftsname ist auch ein Link, Wenn Sie auf diesen Link klicken, werden Sie sofort schalten Sie Ihre aktive Eigenschaft auf diese Eigenschaft. ');

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', 'Der Tisch.');
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', 'Ihre Daten werden als Tabellen-Layout präsentiert. Auf der linken Seite ist ein Dropdown, dass Sie die Anzahl der Elemente auf jeder Seite gezeigt ändern können. Als nächstes müssen Sie eine Reihe von Tasten, die es Ihnen ermöglichen, die Daten in der Tabelle auf dem lokalen Gerät zu exportieren.Sie können 1. Kopieren Sie die Daten in der Zwischenablage. 2. Exportieren Sie die Daten als CSV (Komma-getrennte Werte). 3. Export in einem Format, geeignet für die Verwendung in Excel. 4. Hier können Sie die Daten als PDF-Datei zu exportieren und 5 Drucken, welche das Layout wechseln, so dass Sie die Daten drucken kann. endlich, auf der rechten,ist ein Eingabefeld, in dem Sie ganz einfach für eine bestimmte Zeile oder Zeilen suchen.Über jeder Spalte gibt es Titel, wenn Sie auf den Titel klicken, können Sie die Spalte führen zu sortier, entweder aufsteigend oder absteigend, Nach dieser Spalten Inhalt.');

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Ihre Eigenschaften.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', 'Diese Seite zeigt Ihnen eine Liste der Eigenschaften, die Sie berechtigt sind, zu verwalten. Auf der linken Seite können Sie leicht, wenn sie veröffentlicht werden oder nicht. Der Eigenschaftsname ist auch ein Link, Wenn Sie auf diesen Link klicken, werden Sie sofort schalten Sie Ihre aktive Eigenschaft auf diese Eigenschaft. ');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', 'Objekterstellung, Schritt 1.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', 'Erstellen einer neuen Eigenschaft ist ein zweistufiger Prozess.Auf dieser ersten Seite finden Sie das Land und die Region Ihrer Immobilie wählen,wählen Sie den entsprechenden Objekttyp, und der Prozess wird verwenden Sie es zu verwalten.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', 'Immobilien Land.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', 'Hier finden Sie Ihr Eigentum Land aus einer Dropdown-Liste auswählen. Sobald Sie das Land die Seite wählen wird neu geladen, und Sie werden die Region für die Eigenschaft wählen können.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', 'Der Objekttyp.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', 'Aus dieser Drop-Down bitte Ihre Art der Immobilie wählen. Es kann so etwas wie eine Villa oder eine Wohnung sein, wenn Sie die gesamte Immobilie vermietet sind, oder wenn Sie vermietet Zimmer in der Unterkunft dann würden Sie wahrscheinlich wählen Hotel oder Bed & Breakfast.');

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'verwaltungs Prozess.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'Der Management-Prozess ist, wie Sie Ihr Eigentum wird von den Besuchern auf der Website verwendet werden,.Wenn Sie eine Immobilie vermietet,oder Zimmer in der Unterkunft dann würden Sie wählen Vermietung.Wenn Sie möchten, Touren anbieten/endliche Ressource Buchung (zum Beispiel Skier)die auf der gleichen Buchungsformular, dann würden Sie immer noch diese Option wählen. Wenn Sie bieten Touren/endlichen Ressourcen nur ohne Räume dann die Touren Option wählen. Wenn Sie bieten keine Art von Vermietung Funktionalität und fügen nur die Eigenschaft zu Informationszwecken, wählen dann Real Estate.');
} else {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'verwaltungs Prozess.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'Der Management-Prozess ist, wie Sie Ihr Eigentum wird von den Besuchern auf der Website verwendet werden,. Wenn Sie eine Immobilie vermietet,oder Zimmer in der Unterkunft dann würden Sie wählen Vermietung. Wenn Sie bieten keine Art von Vermietung Funktionalität und fügen nur die Eigenschaft zu Informationszwecken, wählen dann Real Estate.');
}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', 'Objekterstellung Schritt 2.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', 'Sie können nun Informationen über Ihre Immobilie eingeben. Sorge dich nicht um Bilder für jetzt, Sie können sie später durch Einstellungen laden ->Medienzentrum.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', 'MRP or SRP.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', 'Konfigurationsoptionen unterscheiden sich je nachdem, ob Sie die Vermietung von Zimmern in einem Objekt, oder die Immobilie selbst. Wählen Sie MRP, wenn Sie bietet Zimmer, wählen SRP, wenn Sie das gesamte Anwesen anbieten. Wenn es ein SRP ist, werden Sie eine neue Dropdown gewährt werden, wo Sie die Anzahl der Zimmer Alle auswählen. Sie müssen eine dieser Optionen wählen.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', 'Property Name und Adresse');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', 'Bitte geben Sie die Eigenschaft Name und Anschrift in den folgenden Bereichen.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', 'Anzahl der Sterne.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', 'Wenn Ihre Immobilie wurde auf einem anerkannten Standard eine Reihe von Sternen ausgezeichnet basierend, wählen Sie die Nummer aus der Dropdown. Einige Länder haben Rating einer einzigen öffentlichen Standard—Belgien, Dänemark, Griechenland, Italien, Malta, Niederlande, Portugal, Spanien und Ungarn haben Gesetze, die Definition der Hotelbewertungen. In Deutschland, Österreich und in der Schweiz, Die Bewertung wird von der jeweiligen Hotelbranchenverband definiert ein Fünf-Sterne-System — die deutschen Klassifikationen sind Tourist (*), Standard (**),Komfort (***),Erste Klasse (****) und Luxus (*****),mit der Marke Superior Flagge Extras über das Minimum in der Norm definiert.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', 'Mapping Lage.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', 'Auf dem Objektdetails Seite sehen Sie eine Karte. Sie konfigurieren Ihre Eigenschaften Standort hier entweder die Breiten- und Längen Eingänge oder durch Ziehen und Ablegen der Markierung in der Karte mit sich selbst.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', 'Objektmerkmale.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', 'Wählen Sie die Funktionen, die anwendbar sind, um Ihr Eigentum. Diese Funktionen werden in den Standorten Suchfunktion verwendet, so ist es wichtig, dass diese genau reflektieren Ihre Immobilie.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', 'Informationen der Immobilie.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', 'Sie haben eine Reihe von Feldern, hier, wo Sie Informationen über Ihre Immobilie eingeben. Die Beschreibung erscheint auf der ersten Registerkarte auf Details der Immobilie/Vorschauseite, so müssen Sie Ihre Aufmerksamkeit erregenden Text hier setzen.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', 'Richtlinien und rechtliche Hinweise.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', 'Hier können Sie Ihre Eigenschaften Politik setzen sollten, wie Stornogebühren usw.. Wann geht der Gast durch das Buchungsformular, bevor sie die Buchung abschließen können sie Ihre Bedingungen zu akzeptieren gezwungen sind und die Möglichkeit haben, auf einen Link klicken, der die Eigenschaften Begriffe zeigen. Wenn sie auf diesen Link klicken, die Informationen in diesen Eingang eingegeben wird in einem kleinen Fenster angezeigt.');

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', 'Liste aller Buchungen.');
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', 'Auf dieser Seite sehen Sie alle Buchungen, unabhängig davon, ob eine Anzahlung geleistet wurde. Klicken Sie auf das Bearbeiten-Symbol links von der Buchung der Buchungsdetails Seite zu sehen.');

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', 'Liste neue Buchungen.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', 'Diese Seite zeigt eine Liste aller neuen Buchungen, das ist,Buchung, wo eine Anzahlung für die Buchung noch nicht bezahlt wurde. Klicken Sie auf das Bearbeiten-Symbol links von der Buchung der Buchungsdetails Seite zu sehen.');

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', 'Liste alt Buchungen.');
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', 'Diese Seite listet alle historischen Buchungen, das ist, Buchungen, die entweder storniert haben oder der Gast gebucht wurde aus. Klicken Sie auf das Bearbeiten-Symbol links von der Buchung, um zu sehen, dass Buchungen Informationen.');

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', 'Gästeliste');
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', 'Auf dieser Seite können Sie alle Gäste für Ihre derzeit aktive Eigenschaft zur Liste. Standardmäßig werden nur Gäste, die sind oder werden die Gäste aufgeführt sind,Sie können jedoch historische Gäste aus einem Drop-Down wählen Gäste aufzunehmen, die gebucht haben oder haben ihre Buchungen sowie aktuelle Gäste abgesagt.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', 'Überschreibungen.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', 'Die Überschreibungen sind hier nur für Manager der Immobilie, Gäste können sie nicht sehen oder benutzen. Sie ermöglichen es, sowohl das letzte Zimmer Preis der Buchung außer Kraft zu setzen (Sonderausstattungen sind in diesem Überschreibung enthalten, sie sind immer noch zum vollen Preis berechnet) und der Wert der Kaution erforderlich.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', 'Gutscheine.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', 'Wenn Sie einige Gutscheincodes für dieses Objekt erstellt, Dieser Eingang wird zur Verfügung stehen und die Gäste können die Gutscheincodes hier eingeben, Rabatte auf den Wert ihrer Zimmerreservierung zu bekommen.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', 'Einzelheiten.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', 'eine dieser Optionen ändern, wird bewirken, dass die Zimmer wechseln Liste, weil die Liste wird auf der Grundlage der Länge der Buchung und anderen Variablen neu bewertet. Wenn Sie haben einige Gasttypen erstellt, dann wird der Disponent auch hier in der Lage, die Anzahl der Gäste für die Buchung ändern.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', 'Das Zimmer verfügt über Filter.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', 'Wenn Sie die Eigenschaft konfiguriert, um die Classic-Zimmer-Liste verwenden, Gäste können die spezifischen Raum wählen, dass sie buchen möchten, anstatt einfach einen Raum eines bestimmten Typs. Dies ist beliebt bei up-market Eigenschaften. Die Zimmer-Liste klickbare Bilder, die, wenn darauf geklickt wird mehr Informationen über die einzelnen Zimmer popup. Ein zusätzlicher Bonus von diesem Layout ist, dass, wenn Sie einige Zimmer Funktionen erstellt haben, und ein Zimmer markiert eine bestimmte Funktion als mit, dann kann der Disponent die Zimmer verfügt über die zur Verfügung stehenden Zimmer zu filtern, um sicherzustellen, dass sie genau das bekommen, was sie wollen. beachten,Sie können die Anzahl der Räume jeder Art ändern, die in der Raumliste durch die Einstellungen angezeigt -> Eigenschaftskonfiguration -> Buchung Zimmer tab, durch die Verfügbarkeit der Zimmer zu ändern/Tarifgrenze Option. Dies wird dann zeigen eine kleinere Liste der Zimmer für den Gast, sondern als Hausverwalter werden Sie immer noch die vollständige Liste der Zimmer sehen.');

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Optionale Extras.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', 'Sie können zwei Arten von Sonderausstattungen schaffen, die hier zeigen. Die erste Art ist eine Grund optional, die nach mehreren verschiedenen Modellen erstellt werden kann, e.g.Pro Nacht, Pro Person, Pro Person Pro Nacht etc.Diese sind nützlich, wenn Sie Gäste wollen Extras zur Buchung hinzufügen, aber diese Elemente sind nicht endlichen Ressourcen. damit, Zum Beispiel könnten Sie Blumenstrauß auf Ankunft hinzufügen, oder Flughafentransfer. Die andere Art von Extra wird von der Tour konfiguriert/Aktivitätsprofile Menü Management Option unter Einstellungen, und wird verwendet, um Elemente mit endlichen Ressourcen zu schaffen. dies ist für Dinge wie lokale Touren zu Museen und anderen Websites der Regel verwendet. Zusamenfassend, jede Art von Ressource, wo es zu einem bestimmten Zeitpunkt nur wenige Plätze frei ist.');
} else {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Optionale Extras.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', 'Sie können optionale Extras schaffen, die hier zeigen. Sie können nach mehreren verschiedenen Modellen erstellt werden, e.g. Per Night, Per Person, Per Person Per Night etc.Diese sind nützlich, wenn Sie Gäste wollen Extras zur Buchung hinzufügen,aber diese Elemente sind nicht endlichen Ressourcen. Damit,Zum Beispiel könnten Sie Blumenstrauß auf Ankunft oder Flughafentransfer hinzufügen.');
}

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', 'Gäste');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', 'Wenn Sie bereits einige Gäste haben eingegeben können Sie sie ihren Namen wählen, in einem Drop-Down, indem Sie das hier erscheint. Dies erspart Ihnen die Details der Zeit hinzufügen zu müssen und wieder. Wenn Sie regelmäßig Buchungen im Namen der gleichen Gäste machen, Sie sollten immer diese Dropdown verwenden, um sie auszuwählen sonst werden Sie mehrere Gäste mit den gleichen Namen am Ende die Schaffung, wenn Sie ihre Daten jedes Mal manuell eingeben.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', 'Gäste Details.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', 'Wenn Sie ändern möchten welche Felder benötigen Sie von einem Gast ausgefüllt werden, Sie können die Einstellungen gehen -> Eigenschaftskonfiguration -> Erforderliche Registerkarte.');

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Schwarz Buchungen.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', 'Schwarz Buchungen buchen, die vom Hotel, aber nicht immer für einen bestimmten Gast gemacht wurden. Sie sein kann, weil das Hotel auf seinen jährlichen Urlaub ist, oder weil ein Raum ist wegen Renovierungsarbeiten geschlossen.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', 'Informationen der Immobilie.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'Die Beschreibung erscheint auf der ersten Registerkarte auf Details der Immobilie/Vorschauseite, so müssen Sie Ihre Aufmerksamkeit erregenden Text hier setzen.');

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', 'Normal-Modus Tarife.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', 'Dies ist die einfachste Art und Weise Sie die Zimmerpreise eingeben.Wählen Sie die Anzahl der Zimmer eines bestimmten Typs, der Preis für die Zimmer, die Zahl der Gäste, dass das Zimmer unterbringen kann und die Gesamtzahl der Menschen, die Sie bereit sind, in einer Buchung zu unterhalten und klicken Sie auf Speichern.Die Preise werden dann für die nächsten zehn Jahre festgelegt werden. Wenn Sie mehr Kontrolle über die Preise gefallen, dann bitte Ihren Tarif Bearbeitungsmodus Advanced oder Mikromanagement ändern.');

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', 'Normal-Modus Tarife.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', 'Dies ist die einfachste Art und Weise Sie die Zimmerpreise eingeben.Wählen Sie Ihre Immobilie, geben Sie den Prinz und die maximale Anzahl von Personen in einer Buchung und klicken Sie auf Speichern. Die Preise werden dann für die nächsten zehn Jahre festgelegt werden. Wenn Sie mehr Kontrolle über die Preise gefallen, dann bitte Ihren Tarif Bearbeitungsmodus Advanced oder Mikromanagement ändern.');

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', 'Zimmer und Tarife.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', 'Auf dieser Seite können Sie Zimmer bearbeiten, Tarife und Zimmer Eigenschaften. Es gibt drei Registerkarten mit denen Sie die einzelnen Elemente zu bearbeiten. Bevor Sie beginnen, Zimmer oder Tarife Bearbeitung,Sie müssen verstehen, dass es eine Beziehung zwischen Zimmer, Zimmerarten und Tarife.In dem Buchungsformular, wenn Sie sehen, ein Zimmer Typ Drop-Down oder ein Klick, um einen Raum zu wählen, was passiert ist, dass Sie eigentlich die Auswahl einer Kombination von Raum und Tarif. Dieser Ansatz ermöglicht es Ihnen, verschiedene Tarife für das gleiche Zimmer zu schaffen/Zimmertypen, so zum Beispiel können Sie ein Tarif für Bed and Breakfast erstellen,und einen zweiten Tarif für Bed, Frühstück + Abendessen.Die Zimmer können individuelle Raum Funktionen haben. Wenn Ihr Zimmer Liste Klassisch festgelegt,dann können Sie Ihre Gäste die Zimmer Eigenschaften nutzen Zimmer im Buchungsformular zu filtern, um ein Zimmer mit einem bestimmten Satz von Eigenschaften zu finden, die sie wollen.');

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', 'Zimmer und Tarife.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', 'Auf dieser Seite können Sie Ihre Immobilie und Ihre Tarife bearbeiten.');

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', 'Gästetypen.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', 'Gästetypen sind ein wichtiger Teil Ihrer Einstellungen, wenn Sie pro Person zu berechnen pro Nacht, oder einfach, weil Sie müssen wissen, wie viele Menschen, die Sie kulant. Sie können jeden Gast Typ erstellen Sie, zum Beispiel Erwachsene, Jugendliche und Kinder. Gästetypen können so konfiguriert werden, um mehr oder weniger als dem Basiszinssatz zu kosten (die Rate Sie die Tarife Seite eingehen) entweder durch eine Flatrate, oder ein prozentualer. Auf diese Weise können Sie verschiedene Preise für verschiedene Arten von Gästen konfigurieren.Wenn Sie nicht geladen pro Person pro Nacht, dann können Sie die Einstellungen auf die Standardwerte lassen, wenn Sie den Gast-Typ erstellen.');

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', 'Gutscheine.');
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', 'Gutscheincodes sind eine nützliche Methode des Gebäudes Wiederholungsgeschäft, oder in neue Gewohnheit zu ziehen.Wenn Sie einen neuen Gutschein-Code erstellen, das System einen Zufallscode für Sie automatisch generieren, aber Sie brauchen nicht zu verwenden, wenn Sie möchten, Sie können Ihren eigenen Code erstellen. Wenn Sie den Gutschein-Code erstellen, Sie können ihn entweder zu Gast zuweisen, oder nicht. Codes, die für bestimmte Gäste nicht zugeordnet sind, kann von jedem verwendet werden, so dass diese Codes auf Marketing-Materialien verwendet werden,. Sie können auch die Daten zwischen definieren, wenn der Code sollte verwendet werden, und die Daten, dass die Buchung auf der Code sein muss wirksam werden. Sobald ein Gutschein-Code erstellt wurde werden Sie die Möglichkeit haben, eine druckbare Liste von Gutscheincodes anzuzeigen, so dass es leicht Codes an Gäste oder potentiellen Gästen zu Hand.Sie können dann scannen den QR-Code auf dem Ausdruck in ihrem Mobiltelefon/tablet PC. Der Code wird nehmen sie mit dem Rabattcode auf dem Buchungsformular direkt bereits angewendet.');

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', 'Optionale Extras.');
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', 'Sonderausstattungen sind zusätzliche Elemente, die zu einer Buchung hinzugefügt werden können,.Dies sind Elemente, die nicht durch die begrenzte Verfügbarkeit eingeschränkt, so gibt es keine Ressourcenverwaltung mit ihnen verbundenen.Wenn Sie ein optionales Extra schaffen, sind Sie in der Lage eine Vielzahl von Einstellungen zu wählen, zum Beispiel von ihnen die maximale Anzahl dieser kann zu einer Buchung hinzugefügt werden, und ob die zusätzliche sollte gezwungen. Dadurch, wir meinen, wenn sie automatisch in das Buchungsformular ausgewählt ist, und der Gast kann es nicht deaktivieren. Dies ist nützlich für die obligatorischen Zahlungen wie Handtücher oder eine Reinigungsgebühr. zusätzlich, Sie müssen ein Modell zu wählen,, was bedeutet, wie Zahlungen für die extra berechnet werden. Wenn Sie eine einzelne Gebühr werden soll angewendet (beispielsweise, für eine Flasche Champagner bei der Ankunft zur Verfügung stehen) dann würden Sie das Modell pro Buchung eingestellt. ob, jedoch wollte Sie etwas für jeden Tag in Rechnung, dann würden Sie die pro Tag Option wählen.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE', 'Medienzentrum.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT', 'Das Medienzentrum ermöglicht Ihnen die einfache Bilder Ihrer Immobilie laden. Standardmäßig können Sie eine Haupteigenschaft Bild hochladen (eigentlich, Sie können mehr laden,aber nur die erste in der Liste verwendet werden), eine unbegrenzte Anzahl von Bildern in der Diashow gezeigt werden, und eine unbegrenzte Anzahl von Bildern für jedes Zimmer.'.jr_gettext('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', false));

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', 'Ressourcen Picker.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', 'Dies ist der Ressourcen Kommissionierer. Es ermöglicht Ihnen, zu wählen, welche Art von Ressource, die Sie Bilder hochladen für(e.g.Diashow Bilder oder Zimmer) und wenn es einen Raum, dann, nachdem Sie Zimmer wählen, wird Ihnen die Möglichkeit gegeben werden, um auszuwählen, welche Zimmer Sie Bilder in einem anderen Dropdown hochladen möchten, Daneben. Auf diese Weise können Sie mehrere Bilder für jeden einzelnen Raum hochladen,wenn Sie wünschen. beachten, Zimmer Bild-Upload gilt nur in Form von Hotels zu Immobilien, B&Bs etc.Villen und Wohnungen nicht über diese Option.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', 'Vorhandene Bilder.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', 'Diese Spalte zeigt die Bilder, die bereits hochgeladen. Sie können wählen, wenn entweder um das Bild zu sehen, oder löschen. Jedes Mal, wenn die Ressource Zeit ändern diese Spalte aktualisiert wird, um die Bilder für diese bestimmte Ressource zu zeigen.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', 'hochladen von Kontrollen.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', 'Sie haben mehrere Kontrollen hier. Sie können die Bilder hinzufügen Taste verwenden, um die Bilder, die Sie hochladen möchten, wählen zu,oder Sie können Bilder in das Feld darunter ziehen. Die Clear-Taste löscht die Liste der Bilder bereit für das Hochladen. Sobald Sie die Bilder für den Upload ausgewählt haben, Sie können entweder laden Sie individuell, oder alle auf einmal.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', 'Ausgewählte Bilder.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', 'Diese Spalte zeigt die Bilder, die für den Upload bereit sind,oder dass Sie hochgeladen haben, seit Sie diese Seite besucht. ');

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', 'Fertig!');
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', 'Das ist das Ende dieser Seiten Informationen helfen.Wenn Sie weitere Fragen haben, Bitte zögern sie nicht, uns zu kontaktieren. ');

jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'HELP');

//8.0
jr_define('COMMON_PREV', 'Vorher');
jr_define('COMMON_MORE', 'mehr');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Heute');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Jahr');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Monat');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Woche');
jr_define('_JOMRES_DASHBOARD_DAY', 'Tag');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'Von');
jr_define('_JOMRES_HTO', 'Bis');
jr_define('_JOMRES_HNEW_BOOKING', 'Neue Buchung');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Zahlstatus');
jr_define('_JOMRES_HSTATUS_GUEST', 'Gästestatus');
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
jr_define('_JOMRES_STATUS_PROVISIONAL', 'Provisorische Buchung');
jr_define('_JOMRES_STATUS_CONFIRMED', 'Best&auml;tigte Buchung');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Gäste mit einer Aktiven Buchungen');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'G&auml;ste mit vergangenen Buchungen');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonnements');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Kommissionen');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Alle Unterkünfte');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Als aktiv setzten');
jr_define('_JOMRES_ACTION_CHECKIN', 'Einchecken');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Auschecken');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Buchungen');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'Unterkunft');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'Gäste');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Gäste');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Gäste Auflisten');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Rechnungen auflisten');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Objekte');
jr_define('_JOMRES_HQUICK_BOOKING', 'Schnelles Buchen');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Datum der Buchung');
jr_define('_JOMRES_HTWO_WEEKS', '2 Wochen');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Diese Buchung wird storniert werden. Dr&uuml;cken Sie auf OK, um die Buchung zu stornieren.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Heutige Eincheckvorg&auml;nge');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Heutige Auscheckvorg&auml;nge');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Aktuelle G&auml;ste');

jr_define('_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', 'Einstellungen Navigationsleiste');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Position Navigationsleiste');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Standard (Inhaltsbereich)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixiert oben');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixiert unten');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Invertierte Navigationsleiste (Farbe &auml;ndern)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Buchungsnummer');

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zeige Gäste für');

jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Derzeit gilt das nur f&uuml;r das Frontend. Diese Option erlaubt es Ihnen zu w&auml;hlen, ob Jomres Templates die mit Bootstrap 2 oder Bootstrap 3 kompatibel sind, verwenden soll. Sofern Sie nicht sicher sind, ob Ihr Template mit Bootstrap 3 funktioniert, sollten Sie im Zweifel Bootstrap 2 verwenden.');

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zeige Gäste für');
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
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maximale Gästeanzahl');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Sollen wirklich alle gelöscht werden?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Bitte beachten Sie, dass Sie den Administrator-Bereich gerade mit Erweiterte Site Konfiguration auf Nein gesetzt betrachten. Um zus&auml;tzliche Optionen zu sehen, setzen Sie bitte Site Konfiguration -> Verschiedenes -> Erweiterte Site Konfiguration auf Ja.');

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE', 'Buchungs Konfiguration.');
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT', 'Auf dieser Registerkarte k&ouml;nnen Sie das Aussehen und das Gef&uuml;hl des Buchungsformulars konfigurieren.');

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE', 'Buchungen.');
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT', 'Auf dieser Registerkarte k&ouml;nnen Sie einstellen, wie Buchungen behandelt werden, sowie verschiedene andere Einstellungen.');

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE', 'Gast bearbeiten.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT', 'Hier k&ouml;nnen Sie die Adressdaten eines Gastes bearbeiten. Bitte beachten Sie, dass alle &Auml;nderungen, die Sie hier vornehmen, nur in diesem Datensatzsatz Anwendung finden. Hat der Gast Buchungen bei anderen Objekten vorgenommen, so werden diese &Auml;nderungen nicht auf anderen Objekten erscheinen.');

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE', 'MwSt.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT', 'Falls eine Steuernummer hier eingetragen wurde, so wird sie auf der Rechnung des Gastes ausgewiesen.');

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE', 'Rabatt.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT', 'Sie k&ouml;nnen w&auml;hlen, diesem Gast automatischen einen Rabatt zu gew&auml;hren, wann immer auch der Gast eine Buchung t&auml;tigt.');

jr_define('DATATABLES_SINFO', 'Zeige _START_ bis _END_ von _TOTAL_ Eintr&auml;ge');

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Die Genehmigung');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Ablehnen Buchungsanfrage');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Genehmigen Buchungsanfrage');
jr_define('_JOMRES_STATUS_APPROVED', 'Genehmigt');
jr_define('_JOMRES_STATUS_REJECTED', 'abgelehnt');
jr_define('_JOMRES_STATUS_INQUIRY', 'Anfrage');

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Buchungen bedürfen der Genehmigung oder die Verfügbarkeit Bestätigung?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Bei Ja, wenn eine Buchung erfolgt, es wird nicht auf die Verfügbarkeit Kalender zeigen (und andere Gäste können immer noch die Tage buchen und Ressourcen) bis der Immobilienmanager akzeptiert/bestätigt Verfügbarkeit für die Buchung.Nach der Bestätigung,Buchung wird als vorläufig eingeführt (wenn enthebt nicht andere Buchungen; andere Gäste können die gleichen Daten nicht buchen mehr) und eine E-Mail an den Kunden geschickt, um die Zahlung zu leisten.');

jr_define('_JOMRES_ERROR', 'Fehler');
jr_define('_JOMRES_ERROR_MESSAGE', 'Entschuldigung! Ein Fehler beim Versuch, diese Funktion zu verarbeiten. Es wurde für Sie berichtet und wir werden es schauen.');

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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Bitte sehen Sie diese Seite für Hilfe, um die E-Mails und eine Liste der verfügbaren Ausgabe Customizing: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin Neue Buchung per E-Mail');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E-Mail gesendet an den Site-Administrator, wenn eine neue Buchung erfolgt, wenn die globale Paypal Gateway aktiviert ist');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Buchung per E-Mail');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E-Mail an Eigentümer gesendet, wenn eine neue Buchung erfolgt');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Gast Neue Buchung per E-Mail');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-Mail an Gäste verschickt, wenn eine neue Buchung erfolgt');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Gast Bestätigungsschreiben');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Druck Brief oder E-Mail, die manuell durch den Vermieter gesendet werden können, um eine Buchung zu bestätigen,');

jr_define('_JOMRES_CAN_BE_APPROVED', 'Diese Buchung kann genehmigt werden. Alle ausgewählten Ressourcen sind für die ausgewählten Daten verfügbar.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Diese Buchung kann nicht genehmigt werden, da einige der Ressourcen, die bereits für die ausgewählten Daten gebucht werden. Sie müssen die Buchung zunächst zu ändern.');

jr_define('_JOMRES_SHOW_POWEREDBY', 'Zeigen des Powered by Jomres Link in der Fußzeile Jomres.');

jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Verwenden Sie Budget-Funktion?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrap-Sites nur! Die Budget-Funktion ist ein Merkmal der Eigenschaftsliste , ein Gast für sie verwenden können Eigenschaften zu markieren whos Preis pro Nacht unter einer bestimmten Zahl ist. Das Feature hat einige Einschränkungen, dass es nicht für einige Gebiete sinnvoll sein könnte, die viele verschiedene Währungen verwenden. beachten, wenn Sie dies und das Feature-Anzeigen-Plugin verwenden, Ihren Eintrag Verpackung Klasse gekennzeichnet wird automatisch geändert'Panel-Primär' wenn die Eigenschaft Liste angezeigt.");

jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');

jr_define('_JOMRES_FOR', 'Für');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'Nacht-');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'Nächte');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY', 'Preis anzeigen Overlay');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In der Eigenschaftenliste ist es möglich, einen kumulativen Preis über das Objektbild zu zeigen, Verwenden Sie diese Einstellung, dass die Anzeige auszuschalten. Der kumulierte Preis wird aus den in der Ajax-Suche Composite-Plugin eingegeben Daten berechnet.');

jr_define('_JOMRES_LIVE_SCROLLING', 'Verwenden Sie Live-Scrolling/Unendliche Scrollen in Eigenschaftsliste?');

jr_define('_JOMRES_ONLINE_PARTNERS', 'Partners');

jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mär');
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
jr_define('DATATABLES_SINFO', '_START_ bis _END_ von _TOTAL_ Einträgen');
jr_define('DATATABLES_SINFOEMPTY', '0 bis 0 von 0 Einträgen');
jr_define('DATATABLES_SINFOFILTERED', '(gefiltert von _MAX_ Einträgen)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', '_MENU_ Einträge anzeigen');
jr_define('DATATABLES_SLOADINGRECORDS', 'Wird geladen...');
jr_define('DATATABLES_SPROCESSING', 'Bitte warten...');
jr_define('DATATABLES_SSEARCH', 'Suchen');
jr_define('DATATABLES_SZERORECORDS', 'Keine Einträge vorhanden.');
jr_define('DATATABLES_SFIRST', 'Erste');
jr_define('DATATABLES_SLAST', 'Letzte');
jr_define('DATATABLES_SNEXT', 'Nächste');
jr_define('DATATABLES_SPREVIOUS', 'Zurück');
jr_define('DATATABLES_SSORTASCENDING', ': aktivieren, um Spalte aufsteigend zu sortieren');
jr_define('DATATABLES_SSORTDESCENDING', ': aktivieren, um Spalte absteigend zu sortieren');

jr_define('DATATABLES_SHOWHIDE', 'Spalten ändern');

jr_define('_BOOKING_ONREQUEST', 'Buchung auf Anfrage');
jr_define('_BOOKING_INSTANT', 'Sofortbuchung');

jr_define('_JOMRES_COM_FONTAWESOME', 'Fügen Sie Font Super-Icon-Set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Setzen Sie diese Option auf Ja, wenn die Vorlage nicht enthalten Font Ehrfürchtig.');

jr_define('_BOOKING_CALCQUOTE', 'Anfrage Buchung');

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'sehr geehrter ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Wählen Sie einen Standort');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'EU-Land?');

jr_define('_JOMRES_WORD_CACHING', 'Caching');

jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Verwenden Sie patTemplates Caching?');

jr_define('_JOMRES_HLASTCHANGED', 'Zuletzt geändert');

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel-Buchung Stornierung per E-Mail');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E-Mail gesendet an den Vermieter, wenn eine neue Buchung stornier');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Buchung Stornierung per E-Mail');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E-Mail an Gäste verschickt, wenn eine neue Buchung storniert');

jr_define('_JOMRES_TEST_EMAIL_SEND', 'Test Email senden');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Dies ist ein Test E-Mail von Ihrem Reservierungssystem.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test-E-Mail erfolgreich gesendet');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test-E-Mail wurde nicht gesendet');

jr_define('_INVOICE_TRANSACTIONS', 'Transaktionen');

jr_define('_OPENEXCHANGE_API', 'Offene Wechselkurse API-Schlüssel');
jr_define('_OPENEXCHANGE_API_DESC', 'Zur Umrechnung Preise zwischen den Diensten finden Sie eine Open-Wechselkurse API-Schlüssel benötigen. Sie müssen einen API-Schlüssel haben die Preise in Jomres korrekt angezeigt werden, Sie können jedoch für einen kostenlosen Schlüssel registrieren Sie sich unter <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a>  (stündliche Updates, 1000 requests/month - no HTTPS, E-Mail-Support oder erweiterte Funktionen). Jomres Downloads Wechselkurse einmal täglich so lange, wie Sie sich auf nur eine Handvoll von Websites, um den Schlüssel verwenden, Sie sind unwahrscheinlich, diese Grenzen zu überschreiten. Vorherige 8,3 bis jomres verwendeten wir eine ältere,undokumentierte Yahoo Feature jedoch haben entdeckt, dass die Verwendung dieser Funktion ist im Widerspruch zu Yahoos Geschäftsbedingungen.Als Ergebnis müssen wir davon ausgehen, dass die Funktion zu einem bestimmten Zeitpunkt in der Zukunft verschwinden,damit der Wechsel zu öffnen Wechselkursen.');

jr_define('_JOMRES_COMMISSION', 'Kommission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Wenn Sie mehrere Bilder für die individuelle Sonderausstattungen laden, nur das erste Bild verwendet werden.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Bezahle jetzt');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Diese Rechnung ist jetzt fällig. Bitte klicken Sie auf die Schaltfläche, um die Zahlungsmethode zu wählen.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', 'Hier ist eine Liste von einigen der großen Dinge, die Sie kaufen können, während eine Reservierung in diesem Hotel machen. ');

jr_define('_ASSIGN_COMMISSION_RATES', 'Vergeben Provisionssätze');

jr_define('GATEWAYS_INSTRUCTIONS', 'Auf dieser Seite können Sie alle installierten Gateways konfigurieren. Mit diesen Optionen können Sie den Zahlungen für die Kommission oder Abonnement Rechnungen zu nehmen. Frontend-Einstellungen können nur von Paypal außer Kraft gesetzt werden, alle anderen Gateways müssen über die Eigenschaftskonfiguration konfiguriert werden -> Gateways Registerkarte, aber wenn ein Gateway in dieser Liste erscheint, dann sollten sie in der Lage sein, beide Anzahlung in Höhe von Verarbeitung und Rechnungszahlungen.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in Objektdetails Seite?');

jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Details der Immobilie Seiteneinstellungen');

jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Liegenschaftsverwaltung in Jomres wird nur von der Website Frontend cPanel gemacht. Auf dieser Seite finden Sie alle Objekte im System zur Liste der Lage sein, so können Sie Provisionssätze zuweisen und genehmigen/Genehmigung aufheben sie (wenn diese Funktionen aktiviert). So erstellen Sie eine neue Eigenschaft, vorhandene bearbeiten,Buchungen verwalten oder andere Eigenschaft Buchungen im Zusammenhang mit Aufgaben, Sie müssen auf die Website-Frontend anmelden und auf die Jomres Standardseite gehen. Dort finden Sie die Jomres Frontend cPanel sehen.');

jr_define('PROPERTY_STATS_SALES', 'Der Umsatz');
jr_define('PROPERTY_STATS_SALES_DESC', 'Dies ist, wenn Buchungen genommen wurden');

jr_define('PROPERTY_STATS_BOOKINGS_DAYS', 'Buchungen (Tage)');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Buchungstermin starten und die Anzahl der Tage.');

jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Buchungen (Zimmer x Tage)');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Anzahl der Zimmer ausgebucht in einem bestimmten Monat.');

jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Zimmerfunktionssymbole');

jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Business-Funktionen Kategorien');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Bearbeiten Business-Funktion Kategorie');
jr_define('_JOMRES_HCATEGORY', 'Kategorie');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show-Business-Funktionen in Kategorien eingeteilt?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Setzen Sie diese Option auf YES die Eigenschaftsmerkmale in Kategorien zu trennen. Diese Option betrifft nur die Immobilie bietet auf der Objektdetails Seite angezeigt. Alle anderen Seiten angezeigt werden können, ohne dass sie in Kategorien aufteilen.');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Rückgängig Check-in');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Rückgängig Kasse');

jr_define('_JOMRES_STATUS_UNISSUED', 'unveröffentlicht');

jr_define('DEFAULT_TERMS_AND_CONDITIONS', 'Diese Allgemeinen Geschäftsbedingungen klären die Eigentümer Pflichten der Mieter, Die Mieter Verpflichtungen an den Eigentümer, und in dem sehr unwahrscheinlichen Fall von Streitigkeiten, wird als Grundlage für jede Auflösung verwendet werden. Bitte lesen Sie sie sorgfältig durch, bevor Sie Ihre Buchung bestätigt.

Check-In: Von [Zeit] / Check-Out: durch [Zeit] (Hochsaison Wöchentliche Mieten)

Für Nebensaison Wochenende und Mid-Week Rentals ein früherer Check-in und späten Check-out kann möglich sein (in der Regel in von[Zeit] und aus durch [Zeit])

Die Annahme dieser Allgemeinen Geschäftsbedingungen bindet einen Vertrag zwischen den folgenden zwei Parteien:

Die Vermietung Antragsteller (Der Mieter) und der Eigentümer (Der Besitzer)

 

 1.Gruppenmitglieder

Alle aufgelisteten Personen im Mietvertrag oder später von der Mieter hinzugefügt werden durch die Bedingungen dieser Vereinbarung gebunden zu sein. Belegung der Immobilie ist auf diesen Namen auf dem Vertrag oder hinzugefügt anschließend durch die Mieter aufgeführt eingeschränkt.   Die Vermietung Antragsteller wird als Lead-Mieter zu sein und die volle Verantwortung für alle Mitglieder der Rental Group in der gesamten Mietdauer übernehmen.   Informationen oder Anweisungen zu dieser Vermiet nur und nicht an Dritt Mitglied der Vermietung Gruppe der Vermietung Antragsteller mitgeteilt.

2.Zahlungen

Eine Reservierung wird durch den Eigentümer bestätigt werden, sobald der Antrag genehmigt wurde und erste oder vollständige Zahlung verarbeitet wurde.  Bei der Buchung von einer Woche oder mehr, Wenn die Reservierung 45 Tage oder mehr vor der Anmietung beginnt, eine erste Mietkaution Zahlung von [X%] der Mietgebühr wird zum Zeitpunkt der Buchung fällig. Wenn eine Reservierung weniger als 45 Tage vor der Anmietung beginnt,oder die Reservierung ist weniger als eine volle Wochen Dauer, die volle Miete muss zum Zeitpunkt der Buchung bezahlt werden. Im Falle einer Reservierung vom Eigentümer nicht akzeptiert, alle gezahlten Gebühren werden unverzüglich zurückerstattet. Für jede Buchung, die innerhalb von 10 Tagen nach Beginn der Mietzeit muss über PayPal in vollem Umfang mit Kreditkarte bezahlt werden, zertifizierten Scheck oder Zahlungsanweisung der Buchung an der Zeit. Keine Reservierung kann ohne vollständige Zahlung beginnen wird gelöscht.

Sobald eine Reservierung wird vom Eigentümer erhalten und akzeptiert, Der Mieter haftet für die Zahlung des Rest der Mietgebühr 45 Tage vor Belegung der Immobilie.Die Nichtzahlung bei Fälligkeit wird als Stornierung und die Anzahlung wird einbehalten behandelt werden.


3.Stornierungen & Ändern einer Buchung

Sobald eine Reservierung wurde angenommen und bestätigt, eine Kündigung kann nur mit den nachstehenden Bedingungen entsprechend vorgenommen werden:

- Ist die Dauer der Miete können erneut gebucht werden, eine Erstattung für den Zeitraum neu vermietet oder einen Teil davon, abzüglich einer Stornogebühr in Höhe von[Menge] wird ausgegeben werden.

- Wenn ein Teil der Mietzeit nicht wiederverwendet werden kann gebucht, wird der Mieter alle Gelder für diesen Zeitraum bezahlt verwirkt.

 4. Belegung der Immobilie

Unabhängig von der veröffentlichten maximale Anzahl von Personen kann eine Eigenschaft aufnehmen, die Zahl der Gäste, die Immobilie zu besetzen ist streng auf diejenigen an den Besitzer benachrichtigt im Mietvertrag oder jede spätere Änderung genannt beschränkt, schriftlich. Die angegebene und vereinbarte Belegung Zahl umfasst alle Personen, unabhängig von Alter, Tag und Übernachtungsgäste.

Eine Überschreitung der Zahl der angegebenen und vereinbarten Personen führt zur sofortigen Räumung ohne Rückerstattung führen,oder ein $ 100 pro Person pro Nacht Gebühr im Ermessen des Eigentümers.

 5. Zustand des Eigentums

Die Immobilie wird wurden vor der Besatzung inspiziert und daher der Mieter verpflichtet sich,:

-Benachrichtigen Sie den Eigentümer sofort im Hinblick auf eventuelle Schäden und/oder Wartungsprobleme , die Aufmerksamkeit erfordern.

-Halten Sie das Eigentum und alle Möbel, Ausstattung, Ausstattung, Mobilien und Effekte in oder über die Eigenschaft im gleichen Zustand der Reparatur und den Zustand wie zu Beginn der Vermietung gefunden.

 

- Wenn ein Reinigungsservice zur Verfügung gestellt; Der Mieter muss die Abfahrt Anweisungen durch den Eigentümer folgen.

- Wenn ein Reinigungsservice ist nicht vorgesehen; Der Mieter hat die Eigenschaft im gleichen Zustand der Sauberkeit und der allgemeinen Ordnung verlassen, in dem sie gefunden wurde.Geschieht dies nicht, so zur Zufriedenheit der Besitzer wird in einem Schaden führen / Reinigungsgebühren erhoben werden.

6. Die Nutzung von Telefon und Internet

Wenn ein Telefon als Teil der Miete zur Verfügung gestellt, Der Mieter muss alle Ferngespräche zu berechnen entweder eine Kredit / Telefonkarte oder rufen Sie sammeln, sofern nicht anders empfohlen. Wo Internet-Dienste werden zur Verfügung gestellt, kann es herunterladen Einschränkungen und Gebühren erhoben werden können, wenn diese überschritten werden. Es ist die Renters Verantwortung für Beschränkungen auf einer Internet-Gerät zu überprüfen, bevor von Download beginnen.

 7.Haustiere

Ein Hund ist erlaubt [zeigen keine Einschränkungen].Alle Beweise von PET-Besatzung muss aus dem Eigentum und das Grundstück am Ende der Mietzeit entfernt werden. Haustiere sind nicht auf jedem Möbelstück erlaubt, einschließlich Betten, und der Nachweis von Tierhaaren auf Möbel und Betten können zusätzliche Reinigung Gebühren anfallen.

ODER

Haustiere sind streng in diesem Hotel verboten. Jedes Anzeichen von PET-Besatzung wird in einem Verfall der Kaution in vollem Umfang zur Folge haben.

Der Eigentümer übernimmt keine Verantwortung für eine allergische Reaktion oder andere Bedingungen von Belegung der Immobilie entstehen. Die Ausweisung “Keine Haustiere” zu einem bestimmten Zeitpunkt auf dem Grundstück gibt nicht an, es habe keine Haustiere gewesen.

8. Rauchen

Das Rauchen ist in oder in der unmittelbaren Nähe des Anwesens nicht erlaubt.

9. Immobilien-Zugang während der Wintermonate

Das Anwesen ist für die Vermietung in den Wintermonaten angeboten und Straßenanbindung hat und erhält eine Schneeräumung Service von [anzuzeigen, kommunalen oder privaten Auftragnehmer]. aber, Renters werden darauf hingewiesen, dass nach jeder größeren Schneefall, Schneepflug -Anbieter unter Vertrag örtlichen Straßen in einer vorgegebenen Reihenfolge zu löschen. Folglich, auf einem Grundstück Pflügen kann für mehrere Stunden verzögert werden oder, bei schweren Gewittern, Tage. Im unwahrscheinlichen Fall, dass ein Mieter nicht in der Lage eine Immobilie an der geplanten Abreise zu verlassen, wird der Mieter für alle zusätzlichen Kosten für die Unterkunft nicht haftbar. Umgekehrt, ein Mangel an Schneeräumung sollte einen Mieter vom Erreichen einer Immobilie verhindern, der Mieter eine Rückerstattung der Mietgebühr für den Tag erhalten(s) das Hotel war nicht zugänglich. aber, Der Eigentümer wird verantwortlich für Verluste gehalten werden,Nebenkosten oder als Folge entstehen Strafen nicht in der Lage zu ankommen oder eine Eigenschaft der Zeit aufgrund der fehlenden Schneeräumung verlassen.Renters werden daran erinnert, auch dafür sorgen, dass sie und ihre Fahrzeuge entsprechend vorbereitet und ausgestattet, die in den Winterfahrbedingungen wahrscheinlich während ihres Besuchs in der Eigenschaft angetroffen werden.

10.   Geräte und Einrichtungen zur Verfügung gestellt

Ausstattung und Einrichtungen sind im Ermessen des Eigentümers zur Verfügung gestellt und während jeder Versuch unternommen wird, um sicherzustellen, dass diese Geräte ist, um für die Dauer der Mietzeit in Arbeit, sollte ein Zusammenbruch oder eine andere Situation eintreten, dass macht nicht wesentliche Element unbrauchbar,Eigentümer übernimmt keine Verantwortung für den Ersatz oder die Rückerstattung der Mieter für den Mangel an Gebrauch dieser Geräte oder Einrichtungen. Die Ausrüstung und Einrichtungen genannt sind(aber sind nicht auf) Elemente wie Wasserfahrzeug, Motoren,Fernseher, Videorekordern / DVDs, Whirlpools, Saunen und Whirlpools.

 

Der Mieter muss berichten jede funktionsunfähige oder defekte Geräte an den Eigentümer unverzüglich! Der Eigentümer wird alle zumutbaren Anstrengungen unternehmen, um Reparaturen so schnell wie möglich gemacht zu haben,; aber, gibt es begrenzte Auftragnehmer[Dein Gebiet].Während jeder Versuch wird, dass alle beworbenen Geräte zu gewährleisten gemacht werden und Geräte sind, um zu Beginn einer Mietdauer Arbeits, keine Minderung der Miete; Abzug; oder Erstattung wird für einen mechanischen Ausfall der Klimaanlage ausgestellt werden, Spülmaschine, Waschmaschine,Wäschetrockner,Fernseher oder andere Geräte.

 11.   Rückerstattungen

Bei einem Ausfall auf grundlegende Elemente wie Wassersystemen auftreten sollten,Sanitär- und Elektroanlagen, und wichtigen Geräte wie Herd oder Kühlschrank, jede Anstrengung repariert oder ersetzt gemacht werden, oder eine entsprechende Erstattung wird für die Unannehmlichkeiten gemacht werden verursacht. Dies gilt nicht, Zusammenbruch System durch Missbrauch verursacht,wie durch unsachgemäße Nutzung der sanitären Einrichtungen verursacht Sanitär-Blockierungen.

Der Eigentümer haftet nicht, noch wird eine Rückerstattung, für jede Unterbrechung der elektrischen Leistungen durch extreme Wetter oder andere Umstände, die er verursacht liefern.  Ähnlich, es wird keine Rückerstattung für schlechtes Wetter,Veränderungen in der Wasserspiegel, Bedingungen auf Nachbargrundstück,oder jede Belästigung durch die natürlichen Elemente des Standortes wie fliegende Insekten oder der Tierpopulation gewährte.

12. Andere AGB Buchung

Der Mieter wird von diesen Allgemeinen Geschäftsbedingungen der Vermietung und sonstige Anweisungen enthalten sind in den einzelnen Cottage Führer sowie zusätzliche Informationen und Anweisungen befolgen, wie er im Eigentum oder durch den Eigentümer versorgt werden.

 

HAFTUNGSAUSSCHLUSS: Der Mieter stellt, verdienen, bestätigt und stimmt mit der Besitzer, dass er/sie wird die Immobilie und ihrer Einrichtungen in Übereinstimmung mit den Bedingungen oben und zur Verfügung gestellten Informationen nutzen, und dass er/sie tut dies auf sein / ihr eigenes Risiko und dass er / sie schützt und speichert die Besitzer von der Haftung für Personenschäden, Krankheit oder Tod, Verlust oder Beschädigung, jedoch verursacht, an Personen oder Eigentum der Mieter, seine / ihre Familie, oder Gäste, vor während oder nach der Zeit der Belegung.Des Weiteren,er / sie übernimmt die volle Verantwortung für die Nutzung der Immobilie und die Freizeitgeräte wie Boote und Motoren, etc. und stimmen für Schäden der Ausrüstung zu bezahlen,andere als für normale Abnutzung. Der Mieter erkennt weiterhin an er / sie für die Gewährleistung alle Schifffahrtsregeln zuständig ist, beachtet werden, einschließlich in dem Wasserfahrzeug erforderliche Sicherheitsausrüstung mit, sowie aktuelle Betreiber Kompetenzanforderungen treffen.

');

jr_define('_JOMRES_NUMBER_OF_BEDROOMS', 'Schlafzimmer');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Ihr Download und Support-Schlüssel gültig ist, Sie werden in der Lage sein Plugins über den Plugin-Manager herunterladen.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Ihr Download und Support-Schlüssel ist nicht gültig, Sie werden nicht in der Lage Plugins über den Plugin-Manager herunterladen.');

jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Unterart');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'Sie müssen einen Subtyp wählen, bevor Sie die Tarife für diese Eigenschaft erstellen.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', 'Sie haben noch nicht Ihr Eigentum Sub-Typ festgelegt. Dies ist, wo Sie es als so etwas wie eine Villa mit 5 Schlafzimmern oder 4-Zimmer-Hütte definieren und es hilft Gäste, die suchen, um ihre Suche zu verfeinern.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Geben Sie Ihre Immobilie einen Subtyp');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-Mail-Vorlagen');

jr_define('_JOMRES_CONTACT_SETTINGS', 'Kontakt Einstellungen');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Von hier aus können Sie alle Eigenschaften Kontaktdaten außer Kraft setzen (email, phone, fax)so die gesamte Kommunikation mit den Gästen zu Ihnen und nicht auf die Hausbesitzer gesendet werden.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Außer Kraft setzen Listings Kontaktdaten?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', 'Wenn diese Option auf Ja gesetzt ist, dann Eigenschaft E-Mail-Adressen und Telefonnummern werden mit den in diesem Register gesetzt ersetzt werden. Dies zwingt alle Mitteilungen an Ihre angegebene E-Mail-Adresse gesendet werden, die sicherstellen, dass der Gast und Eigentümer nicht die Buchungsmaschine umgehen kann und die Provisionen, die zur Folge haben wird. Es bedeutet auch, dass, wenn eine Eigenschaften Beschreibung der Eigenschaft geändert wird, wird auf Unapproved eingestellt werden(wenn die Zulassungen Funktion aktiviert ist) und Sie müssen manuell die Beschreibung überprüfen, um sicherzustellen, dass die Manager nicht eingegeben Telefon oder E-Mail-Daten in die Textfelder hat, bevor er wieder zur Genehmigung.');
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Änderungen an Auflistung Details erforderlich Site Admin Überprüfung. Wenn Sie neue Details merken, Ihren Eintrag wird nicht veröffentlicht und ein angemeldetes Siggy Genehmigung sein, bevor die Site-Besucher wieder sichtbar sein. Sie erhalten können, um Online-Buchungen nicht während Ihren Eintrag nicht veröffentlicht ist und vorbehaltlich der Zustimmung.');

jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Bewertung Buchungsanfrage');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Bestätigen Buchungsanfrage');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend Buchungsanfrage');

jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark Rechnung als ausstehend');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Rechnung markiert als ausstehend');

jr_define('_JOMRES_TRACKING_ENABLE', 'Senden Sie anonyme Tracking-Daten?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Wählen Sie Ja, um anonyme Tracking-Daten an Jomres.net senden uns helfen, besser zu verstehen, wie Sie das System nutzen.');

jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Bitte stellen Sie sicher, dass Ihre Angaben sind auf dem Bearbeiten der Seite Mein Konto abgeschlossen ist, bevor Buchungen im Namen Ihrer Kunden zu machen.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', 'Gast Kontaktdaten');
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Neu Gäste -- ');

jr_define('_JOMRES_CHARTS', 'Hitliste');
jr_define('_JOMRES_CHARTS_SELECT', 'Wählen Sie Diagramm...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Die Erträge von Jahr / Monat');

jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'Ok, Lassen Sie uns beginnen. Zuerst müssen Sie einige Zimmer für dieses Objekt zu erstellen.');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Erstellen Sie einige Zimmer jetzt');

jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Die Forschung hat bewiesen, dass die Eigenschaften mit vielen Bildern hoher Qualität mehr Ansichten erzeugen. Laden eines Hauptbildes und einige Diashow Bilder Ihre Chancen, Buchungen zu verbessern.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Laden Sie ein Bild');

jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Erstellen Sie einige Tarife');

jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Was werden die Gäste buchen?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Diese Eigenschaft ist ein Hotel Eigenschaft type Typ, wo Sie Zimmer in der Unterkunft vermieten, oder eine Villa Typ Eigentum, wo Sie mieten das gesamte Anwesen in einer Ausbuchung? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Die Zimmer in der Unterkunft');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Das gesamte Anwesen');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_NEITHER', 'Andere (Tours / Immobilien)');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Beide'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Was werden die Gäste buchen?');

jr_define('_JOMRES_ADDRESS_SANITY_CHECK', 'Sie müssen Ihre Adressdaten zu vervollständigen, so dass Ihre Gäste, die Sie finden können, wenn sie kommen zu bleiben.');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aktualisieren Sie Ihre Adresse');

jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hoppla, es sieht aus wie Sie alle Felder ausfüllen vielleicht vergessen haben.');

jr_define('_JOMRES_MANAGER_HAS_NO_PROPERTIES', 'Fehler, dieser Benutzer als Manager konfiguriert wurde aber auf alle Eigenschaften, die nicht zugeordnet');

jr_define('_JOMRES_CONTANT_US', 'kontaktiere uns');

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Willkommen in Ihrem neuen Online-Angebot für ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hallo und willkommen zu Ihrer neuen Immobilie auf ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Sie haben vor kurzem eine neue Eigenschaft auf unserer Website, und wir möchten Sie auf die Familie zu begrüßen.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Sie können Ihr neues Armaturenbrett sehen');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' Hier ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', 'Sobald Sie das Setup Ihrer Immobilie haben, können Sie sehen, wie es auf Website-Besucher sieht durch den Besuch ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' Ihre Titelseite.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', '(es wird nicht veröffentlicht, so Website-Besucher kann sie noch nicht sehen).');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', 'Am oberen Rand der Seite finden Sie eine Reihe von Nachrichten zu sehen.Die Tasten neben diesen Nachrichten führt Sie zu den Seiten, die Sie besuchen müssen, um Ihre Immobilie auf unserer Website einrichten. Sobald Sie jede dieser Aufgaben ausgeführt haben, wird es viel einfacher für die Besucher auf unserer Seite sein, um Ihr Eigentum zu finden und Buchungen online zu verdienen.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Wenn Sie irgendwelche Fragen überhaupt , bitte ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktiere uns');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', 'und wir werden uns freuen, alle Ihre Fragen zu beantworten.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, unser Team ');

jr_define('_JOMRES_JINTOUR_SANITY_CHECK', 'Sie scheinen keine Touren zu haben, zu verkaufen. Erstellen Sie eine Tour-Profil, dann verwenden Sie die Schaltfläche Erzeugen einige Touren zu erstellen.');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', 'Lassen Sie uns einige Touren erstellen!');

jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap-Währungssymbol Standort');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Verwenden Sie diese Option, um das Währungssymbol bewegen von hinten von, an vor dem Preis Figur oder umgekehrt.');

jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Geben Sie Ihre Facebook -Seite-ID, zum Beispiel "jomres".Lassen Sie dieses Feld leer, nichts zu zeigen. Kein Zutritt https://www.facebooking.com oder etwas anderes.');

jr_define('COMMON_DOWNLOAD', 'Herunterladen');

jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Als nächstes müssen Sie einige Tarife hinzufügen. Dies sind Ihre Grundpreise.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Objektuntertyp');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Objektuntertyp');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap ist nicht aktiviert!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Achtung, die Sie nicht haben Bootstrap in Jomres Standortkonfiguration aktiviert-> Registerkarte Sonstiges. Bereitstellen <i>etwas</i> Funktionalität Jomres derzeit seine alte, jQuery UI basierte Vorlagen verwenden, diese sind jedoch nicht in mehreren Jahren gearbeitet worden. Alle aktuellen Entwicklung und Verbesserung von Jomres Vorlagen( Layout-Dateien ) seine Bootstrap 3 Template-Dateien sind aus. Um das Beste aus Jomres bekommen, empfehlen wir Ihnen installieren Sie eine Bootstrap 3 basierend Theme für Wordpress oder Joomla. Sobald Sie getan haben, dass Sie Jomres Bootstrap-Vorlagen in der Site-Konfiguration aktivieren.');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Ihre Unterstützung Schlüssel gültig ist. Beachten Sie, dass diese Lizenz nicht erlaubt Plugin-Downloads.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Ihre Lizenz unterstützt keine Plug-Downloads.');

jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Ziehen Buchungen in diesem Bereich, sie zu stornieren');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');

jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Bitte stellen Sie sicher, dass Sie eine Wordpress -Seite erstellt haben, die enthält [jomres:xx-XX] shortcode ( woher xx-XX Code ist die Sprache Ihrer Website, beispielsweise [jomres:en-GB] )sonst werden Sie nicht in der Lage sein Jomres von der Website-Frontend für den Zugriff auf Ihre Eigenschaften und Buchungen verwalten.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Bevor Sie einen Raumtyp erstellen,wir müssen wissen, ob es für einen Hoteltyp Eigenschaft ist, oder eine Villa Typ Eigentum.');

jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES', 'Welche Management-Prozess wird in dieser Zimmerkategorie sein für?');
jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC', 'Ist der Zimmertyp bei einem Hoteltyp Eigenschaft oder eine Villa Typ Eigentum?');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Klicken Sie, um neue Raumtypen hinzufügen');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Achtung, Sie haben eine oder mehrere Immobilienarten ohne Zimmertypen. Eigenschaften müssen Zimmertypen, so dass Immobilienverwalter Tarife erstellen.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Verwenden Sie die oben Schaltfläche Neu Raumtypen zu erstellen.');

jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Keine Buchungen / Immobilien(einfache Auflistung )');

jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Speicherort der Protokolldatei');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres Protokolle der Systemaktivität standardmäßig die'.JOMRES_SYSTEMLOG_PATH.' Lage. Da diese Datei vertrauliche Informationen enthalten können( api Tasten, Systempfade , Gateway-Informationen, Gästeinformation) Wir empfehlen Ihnen dringend, diesen Weg über Ihren Web-Dokument-Root zu einem ändern. Wenn Sie nicht verstehen, was das bedeutet, fragen Sie Ihren Web-Hosts für die Beratung, wie sie Ihre Dateisystem wissen.');

jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres Protokolle Informationen über Ihr System detailliert, einschließlich API-Schlüssel, Systempfade , Gateway und Gästeinformationen , von denen alle nicht auf den Rest des Internets sichtbar sein soll. Ihr Systemprotokoll Pfad nicht gesetzt ist, um Systemprotokolle werden derzeit auf die gespeicherte '.JOMRES_SYSTEMLOG_PATH.' Verzeichnis, das ist nicht ideal. Bitte besuchen Sie Site Configuration -> Debuggen und einen Pfad im Dateisystem festgelegt , die außerhalb des Web-Root ist. Im Zweifelsfall bitte Ihre Web-Hosts in Verbindung, wie sie in der Lage sein, Sie zu beraten.');

jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Wenn Ihr KMS im Stammverzeichnis Ihrer Website installiert ist, dann könnte ein geeigneter Ort sein');

jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Sie verfügen nicht über eine Google Maps Schlüsselsatz. Aufgrund der jüngsten Änderungen in Google Maps, werden alle neuen Websites einen API-Schlüssel müssen in der Lage sein Google Maps-Funktionen zu verwenden. Bitte <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>finden Sie auf unserer Hilfeseite auf, wie eine API-Schlüssel zu erstellen</a> und speichern Sie die Schlüssel in Jomres.");

jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map Farbschema');

jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', 'Richtig, lassen Sie uns beginnen Hinzufügen Ihrer Immobilie auf der Website. Wir brauchen ein wenig Informationen über Ihre Immobilie zu sammeln hier. Dies ermöglicht es uns, die nackten Knochen Ihrer Immobilie einzurichten. Sobald dies geschehen ist, dann werden Sie durch das Hinzufügen Zimmer, Preise und Bilder geführt werden.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Der Objekttyp hilft Ihnen, zu definieren, wie das Objekt gebucht werden, zum Beispiel mit Hotels, die Sie "verkaufen" nur ein oder zwei Zimmer zu einem Zeitpunkt, während mit Villen bieten Ihnen das gesamte Anwesen.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'Beachten Sie, dass die E-Mail-Adresse nicht die gleiche wie die zu sein braucht man verwendet, wenn Ihr Konto Registrierung. Auf diese Weise können Sie verschiedene Adressen für verschiedene Eigenschaften haben.');

jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Mindesteinzahlung');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Sie können die Mindesteinzahlungsbetrag konfigurieren geladen werden. Wenn Sie das tun, dann ist die "Anzahlung ist erforderlich, Kosten für die erste Nacht?" & "Anzahlung ist nicht erforderlich Prozentsatz?" Einstellungen in Eigenschaftskonfiguration kann nicht, stattdessen alle Hinterlegung Werte sind ein Prozentsatz konfiguriert werden, und zumindest die Zahl, die Sie hier definieren müssen.');

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

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
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

jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');

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

jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");


jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');

