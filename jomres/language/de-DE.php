<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
// German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)
// German Translation Revision 2010 © Klaus Bogotz (http://klabog.de)
// Corrected tons of typos, completed and changed style to avoid - where possible - the German typical problem of formal and informal style
// I did my best to form the composed phrases in a good style but as if I'm not able to proof all responds there could be some rubbish.
// If you find anything that should be corrected (in the German language file) send it to apartment@gr7.org.
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Tarife im Rahmen, nicht als PopUp anzeigen?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adressinformation');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Kurzinformationen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Zimmer und Verfügbarkeit anzeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zeigt Preise an');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Adressinformation unter diesem Link anzeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Kurzinformationen unter diesem Link anzeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zimmer und Verfügbarkeit unter diesem Link anzeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Preise unter diesem Link anzeigen');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Statische Preise');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Durchschnittliche Preise');
define('_JOMRES_COM_A_TARIFFS_MODEL','Tarifmodell wählen');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/>Sind die entsprechenden Zeiträume ausgewählt, den blauen Button drücken um die Sperrung zu bestätigen.');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt.</b> Bitte neu einloggen.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Bemerkungen');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Online Zahlung?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','JA markieren um Online-Zahlungen zu akzeptieren. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Bitte Zahlungsweise wählen.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Zahlung aktiviert?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin-Einstellung geändert');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin-Einstellung eingefügt');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Kreditkarte gelesen');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Kreditkarte aktualisiert');
define('_JOMRES_MR_CREDITCARD_EDIT','Kreditkarte bearbeiten');
define('_JOMRES_COM_A_EDITICON','Icongröße bearbeiten');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unterkunftbilder hochladen');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Vorhandene Bilder');
define('_JOMRES_COM_A_SLIDESHOWS','Diaschau');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Link zur Diaschau anzeigen?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Diaschau in der Unterkunft eingebettet?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Höhe des Vorschaubilds');
define('_JOMRES_FRONT_SLIDESHOW','Diaschau');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Leider kein Bild für dieses Unterkunft verfügbar');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Link zu den Preisen anzeigen?');
define('_JOMRES_COM_A_POPUPSALLOWED','PopUps erlaubt?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Falls auf NEIN gesetzt, werden Links, die normalerweise in einem PopUp geöffnet werden, im aktuellen Rahmen der Seite geöffnet. TESTPHASE! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Upload von Bildern');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Dieses Formular benützen um mehrere Bilder von dieser Unterkunft hochzuladen.<br/><b>ACHTUNG:</b> Alle Bilder mit gleichen Namen werden überschrieben. Bitte beachten, dass Zimmer spezifische Bilder oder Logos der Unterkunft hier nicht hochgeladen werden können. Diese Bilder müssen über die Unterkunftadministration geladen werden (Unterkunft bearbeiten).<br/><b>Beachten Sie:</b> Die hier hochgeladenen Bilder werden im Verzeichnis /images/stories/jomres/*property_uid* gespeichert. Falls dieses Verzeichnis nicht existiert, wird es vom System angelegt außer in der Konfiguration wurde ein anderes Verzeichnis festgelegt.');
define('_JOMRES_A_TABS_MISC','Diverses');
define('_JOMRES_A','Konfiguration');
define('_JOMRES_A_GLOBALPFEATURES','Allgemeine Unterkünfteigenschaften benutzen');
define('_JOMRES_A_GLOBALPFEATURES_DESC','JA markieren, falls alle Unterkünfte die vom Webmaster voreingestellten Eigenschaften verwenden müssen.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Um ein Bild dieser Eigenschaft zuordnen zu können, müssen zuerst Bilder in folgendes Verzeichnis geladen werden: /images/stories/jomres/pfeatures/ (falls in der Konfiguration kein anderes festgelegt wurde)' );
define('_JOMRES_A_ICON','Icon');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Gewünschtes Such-Plugin auswählen.');
define('_JOMRES_FRONT_NORESULTS','<b>Die Suche zeigt leider kein Ergebnis. Eingabe ändern und erneut versuchen.</b>');
define('_JOMRES_AREYOUSURE','Sind Sie sicher?');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Buchen');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sicherheitscode');
define('_JOMRES_COM_MR_QUICKRESDESC','Schnellreservierung');
define('_JOMRES_COM_MR_SHOWPROFILES','Benutzerprofile anzeigen und Rechte setzen');
define('_JOMRES_COM_MR_QUICK______DESC','Leer lassen');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Allgemeine Einstellungen');
define('_JOMRES_COM_MR_BACK','Zurück');
define('_JOMRES_COM_MR_YES','Ja');
define('_JOMRES_COM_MR_NO','Nein');
define('_JOMRES_COM_MR_NEWTARIFF','Neuer Preis');
define('_JOMRES_COM_MR_NEWPROPERTY','Neue Unterkunft');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Neue Unterkünfteigenschaften');
define('_JOMRES_COM_MR_NEWGUEST','Neuer Gast');
define('_JOMRES_COM_MR_SAVE','Sichern');
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nachname');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ankunftsdatum');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Abreisedatum');
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Leer');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Benutzerrechte definieren');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Name');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Benutzername');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','momentan autorisiert');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Standardhotel');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','ändern');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Zugangsrechte');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Benutzer geändert');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Rezeption');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Hotelmanager');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Buchungs-Administration');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Buchung ändern für ');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Ankunft/Abreise');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gast');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Zimmer');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Bezahlung');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Vorname');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nachname');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Besondere Wünsche');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Bitte beachten Sie, dass manche Sonderwünsche Zusatzkosten verursachen können.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Buchung stornieren');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Straße');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ort');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PLZ');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-Mail-Adresse');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Tage bis zur Ankunft');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Buchung kann nicht storniert werden, da der Gast schon eingecheckt ist.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Diese Buchung stornieren.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Stornierung bestätigen');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Buchung storniert.');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Art der Buchung');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Verdeckt');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Rezeption');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Zimmername');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Zimmernummer');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Behindertengerecht?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. Pers.');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Zimmerkategorie');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Beschreibung Zimmerkategorie');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Liste Zimmereigenschaften');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Anzahlung geleistet');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Anzahlung eingeben');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Gesamtbetrag');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Anzahlung Ref.');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Buchungsnummer');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Anzahlung');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Anzahlung gespeichert');
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Freie Zimmer');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Unterkunft');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Art des Zimmers');
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Details Gast');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Vorname');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nachname');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr.');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Straße');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Ort');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','PLZ');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobil');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kreditkartennr.');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','gültig von');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','gültig bis');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Ausgabenummer (falls vorhanden)');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Inhaber der Kreditkarte');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Schnellauswahl Preise');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Anzahl Tage');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Anzahl Gäste');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Gesamt');
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Zimmer- und Unterkünfteinstellungen anzeigen');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Zimmer');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Eigenschaften');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Kategorien');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Unterkunft');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Unterkunft Eigenschaften');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Zimmer');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Art');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Name');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nummer');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Behindertengerecht?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. Belegung');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Eigenschaften');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Zimmer hinzugefügt');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Bearbeiten');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Zimmereigenschaften');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Beschreibung der Eigenschaften');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zimmereigenschaften hinzugefügt');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zimmereigenschaften aktualisiert');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Zimmer Kategorien');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Zimmerkategorie, Kurzfassung');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Beschreibung Zimmerkategorie');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zimmerkategorie hinzugefügt');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Zimmerkategorie aktualisiert');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Bearbeiten');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Name');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Straße');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Ort');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','PLZ');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-Mail');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Eigenschaften');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Unterkunft hinzugefügt');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Unterkunft aktualisiert');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Unterkunft Eigenschaften');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Unterkünfteigenschaften, Kurzfassung');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Beschreibung  der Unterkünfteigenschaften');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Unterkünfteigenschaften hinzugefügt');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Unterkünfteigenschaften aktualisiert');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Preise');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Preis');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Beschreibung');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Gültig von');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Gültig bis');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Preis pro Nacht');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Tage min.');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Tage max.');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. Belegung');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. Belegung');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Zimmerkategorie');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','pP/pN ignorieren');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Wochenenden erlauben');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif hinzugefügt');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif aktualisiert');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Bearbeiten');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Duplizieren');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif gelöscht');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Tarif bearbeiten');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Feiertage');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Buchung gespeichert');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Zimmer');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Gast einchecken');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Gast auschecken');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Buchungen auflisten');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Neue Buchungen auflisten');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Übersicht Gäste');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Unterkünfte bearbeiten');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Verfügbarkeit prüfen');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Daten bestätigen');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Vorname');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nachname');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr.');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Straße');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ort');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PLZ');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Leider sind keine Zimmer verfügbar, die den Kriterien entsprechen.');
define('_JOMRES_FRONT_MR_BOOKINGMADE','Vielen Dank für Ihre Buchung. Wir werden Sie in Kürze kontaktieren, um Ihre Zahlungsmethode zu bestätigen. <br><br> <b>Bitte beachten Sie, dass dies nur eine vorläufige Buchung ist. Diese ist abgeschlossen, sobald Sie eine schriftliche Bestätigung von uns erhalten haben. <br><br>Falls Sie Ihre Anzahlung per PayPal angewiesen haben, ist die Transaktion bereits abgeschlossen, und eine Einzahlungsbestätigung wurde an Ihre angegebene E-Mail-Adresse versandt. Sie können sich nun mit Ihren Zugangsdaten bei www.paypal.de einloggen, um die Details einzusehen. </b><br>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Internetbuchung für Unterkunft: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Buchung für Zimmer: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Ankunft: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Abreise: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Name: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobil: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Gesamtbetrag: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Gast einchecken');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Gast auswählen');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gast eingecheckt');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Heute kommen keine Gäste an.');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gast auschecken');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Heute reisen keine Gäste ab.');
define('_JOMRES_COM_A_SUPPLIMENTS','Zuschläge');
define('_JOMRES_COM_A_TARIFFS','Preise');
define('_JOMRES_COM_A_DISCOUNTS','Rabatte');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Datei-Upload');
define('_JOMRES_COM_A_CURRENT_SETTINGS','aktuelle Einstellung');
define('_JOMRES_COM_A_EXPLANATION','Erklärung');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Einzelzimmerzuschläge');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Hier Ja einstellen, wenn Einzelzimmerzuschläge berechnet werden sollen.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Einzelzimmerzuschlag');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Wird die Anzahlung prozentual berechnet?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Ist die Anzahlung ein prozentualer Anteil des Gesamtbetrages? Wenn NEIN, wird ein pauschaler Anzahlungsbetrag addiert.');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Preis Anzahlung');
define('_JOMRES_COM_A_TARIFFS_PER','Pro Person, pro Nacht');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Hier Ja einstellen, wenn die Preise pro Person / pro Nacht berechnet werden soll. Wenn NEIN, werden die Kosten pro Zimmer / pro Nacht berechnet.');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Dateigröße');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maximale Dateigröße in Kilobyte');
define('_JOMRES_FRONT_MR_BOOKED','Belegt');
define('_JOMRES_COM_CONFIRMATION_TITLE','Bestätigungsmail');
define('_JOMRES_COM_CONFIRMATION_DEAR','Sehr geehrte(r) ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Kosten pro Nacht - pro Zimmer ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservierungsdaten:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Vielen Dank für Ihre Buchung für');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Nachfolgend finden Sie eine Zusammenfassung Ihrer Reservierungsdaten. Bitte überprüfen Sie, ob alle Details korrekt sind und kontaktieren Sie uns falls Fehler enthalten sein sollten.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Ihr Zimmer wird bis zu Ihrer Ankunft für Sie reserviert. Check-In-Zeit bitte telefonisch vereinbaren.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Wir freuen uns darauf, Sie in unserem Hause am ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','begrüßen zu können und wünschen Ihnen schon jetzt einen angenehmen Aufenthalt.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Und hier das Kleingedruckte:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Wir möchten Sie darauf hinweisen, dass Sie mit dieser Buchung einen rechtsgültigen Vertrag eingehen. Sollten Sie also - aus welchem Grund auch immer - Ihre Buchung stornieren oder den Zeitraum Ihres Aufenthalts verkürzen müssen, könnten trotzdem die vollen Kosten fällig werden.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Für nicht eingenommene Mahlzeiten und nicht oder nur teilweise in Anspruch genommene Zimmer kann keine Aufwandsentschädigung geleistet werden. Aus diesem Grund empfehlen wir Ihnen dringend den Abschluss einer Reiserücktrittskostenversicherung.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stornierungs- und Kürzungsrichtlinien</i><br> Wenn Sie Ihren Urlaub absagen, muss diese Absage schriftlich bestätigt werden. Nachfolgend finden Sie eine Übersicht über die anfallenden Stornierungskosten:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 oder mehr Tage im Voraus');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' nur die bereits geleistete Anzahlung.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 bis 30 Tage im Voraus');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% des Gesamtbetrages.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Ab 14 Tagen im Voraus');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% des Gesamtbetrages.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','In allen Preisen sind 7% MwSt. enthalten.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Bestätigungsmail ausdrucken');
define('_JOMRES_COM_INVOICE_TITLE','Rechnungsausdruck');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Anzahl Nächte: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Vereinbarte Bedingungen: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Preis pro Nacht: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Gesamtbetrag');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Vielen Dank, dass Sie unser Kunde sind am');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Wir hoffen, Sie hatten einen angenehmen Aufenthalt.');
define('_JOMRES_COM_INVOICE_PRINT','Rechnung ausdrucken');
define('_JOMRES_COM_ADDSERVICE_TITLE','Extras zur Rechnung hinzufügen');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Beschreibung der Extras');
define('_JOMRES_COM_ADDSERVICE_VALUE','Preis Extras');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Weitere berechnete Posten');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Weitere berechnete Posten, Gesamtbetrag: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Posten zur Rechnung hinzugefügt');
define('_JOMRES_UPLOAD_IMAGE','Bild hochladen');
define('_JOMRES_FILE_UPLOAD','Datei hochladen');
define('_JOMRES_FILE_ERROR_TYPE','Nur Dateien der folgenden Formate dürfen hochgeladen werden:/n');
define('_JOMRES_FILE_ERROR_EMPTY','Bitte Datei auswählen.');
define('_JOMRES_FILE_ERROR_NAME','Der Dateiname darf nur alphanumerische Zeichen enthalten, bitte auch keine Leerzeichen verwenden.');
define('_JOMRES_FILE_ERROR_SIZE','Diese Datei überschreitet leider die erlaubte Maximalgröße');
define('_JOMRES_FILE_NOT_UPLOADED','Datei wurde NICHT hochgeladen.');
define('_JOMRES_FILE_UPDATED','Datei erfolgreich aktualisiert.');
define('_JOMRES_COM_A_JSCALENDAR','JS-Kalender');
define('_JOMRES_COM_A_CALENDARLANGUAGE','Sprachdatei für JS-Kalender');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Hier können Sie die Sprachdatei für den Javascript-Kalender auswählen. Bitte beachten Sie, dass es momentan Probleme mit diesen Sprachdateien gibt. Aus unerfindlichen Gründen scheinen bisher nur die englische und deutsche Version zu funktionieren. Für weitere Informationen besuchen Sie bitte <a href="http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse" target="_blank">die Website der Entwickler</a>.');
define('_JOMRES_COM_A_CALENDARCSS','CSS-Datei für JS-Kalender');
define('_JOMRES_COM_A_CALENDARCSS_DESC','CSS-Datei auswählen, die das Design des Javascript-Kalenders bestimmt.');
define('_JOMRES_COM_A_ODDS','Verschiedenes');
define('_JOMRES_COM_A_ERRORCHECKING','Fehlerüberprüfung ein?');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Hier JA einstellen, um das Script vor der Inbetriebnahme auf Fehler zu prüfen. Bitte im laufenden Betrieb auf NEIN stellen - Besuchern wird sonst ein Datenkauderwelsch angezeigt!');
define('_JOMRES_FILE_DELETE','Bild löschen');
define('_JOMRES_FILE_DELETED','Bild gelöscht');
define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Alle Unterkünfte');
define('_JOMRES_COM_MR_ROOM_DELETE','Zimmer löschen');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Dieses Zimmer kann nicht gelöscht werden, da hierfür bereits Buchungen vorliegen. Bitte diese Buchungen stornieren und erneut versuchen.');
define('_JOMRES_COM_MR_ROOM_DELETED','Zimmer gelöscht');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Zimmereigenschaften löschen');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Diese Zimmereigenschaft kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Eigenschaft bei diesen Zimmern entfernen und erneut versuchen.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Zimmereigenschaften gelöscht');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Unterkunft-Eigenschaften löschen');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Diese Unterkunft-Eigenschaft kann nicht gelöscht werden, da sie bereits einigen Unterkünften zugeordnet wurde. Bitte diese Eigenschaft bei diesen Unterkünften entfernen und erneut versuchen.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Unterkunft-Eigenschaft gelöscht');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Zimmerkategorien löschen');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Zimmer einer anderen Kategorie zuordnen und erneut versuchen.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einem Tarif zugeordnet wurde. Bitte den Tarif einer anderen Zimmerkategorie zuordnen und erneut versuchen.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Zimmerkategorie gelöscht');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Unterkunft löschen');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Unterkunft gelöscht');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Sie haben nicht die erforderlichen Zugriffsrechte, um dieses Unterkunft zu löschen.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Breite der großen Bilder');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Link zur Landkarte');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Unterkunft-Beschreibung');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check-In-Zeiten');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktivitäten in der Umgebung');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Sehenswürdigkeiten');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Flughäfen');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Weitere Verkehrsanbindungen');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Richtlinien, Haftungsausschluss usw.');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Besucher sollen online buchen können');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Hier JA einstellen, um sicherzustellen, dass die Besucher online Zimmer buchen können. Falls nicht erwünscht ist, dass Zimmer übers Internet gebucht werden können, bitte auf NEIN stellen.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Fixe Buchungszeiträume?');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Wenn hier JA eingestellt ist, werden die Zimmer für voreingestellte Zeiträume gebucht.');
define('_JOMRES_COM_A_FIXEDPERIOD','Buchungszeitraum: ');
define('_JOMRES_COM_A_BOOKING','Buchungen ');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximale Anzahl Buchungsperioden. Beispiel: 3 mal 7 Buchungsperioden = 21 Tage.');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Ist dies ein Ein-Zimmer-Unterkunft?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','JA einstellen, wenn z.B. statt einzelner Zimmer eine komplette Unterkunft vermietet werden soll.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Buchung überprüfen');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Buchung bestätigen');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Montag');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Dienstag');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Mittwoch');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Donnerstag');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Freitag');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Samstag');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Sonntag');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Mo');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Di');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mi');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Do');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','So');
define('_JOMRES_COM_A_AVLCAL','Kalender');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Schriftfarbe für den aktuellen Tag');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Schriftfarbe für Tage des aktuellen Monats');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Schriftfarbe für Tage des vorherigen und nächsten Monats');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Zellenfarbe für Tage des aktuellen Monats');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Zellenfarbe für Tage des vorherigen und nächsten Monats');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Zellenfarbe für belegte Tage');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Zellenfarbe für vorreservierte Zimmer (Buchungen, für die noch keine Anzahlung geleistet wurde)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Zellenfarbe für Tage in der Vergangenheit');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Belegt / nicht buchbar');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Frei und buchbar');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Vorreserviert'); 
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Voreingestellter Ankunftstag');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Nur für Seiten, die fixe Buchungszeiträume anbieten. Wochentag wählen, an dem angereist werden muss.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Voreingestellter Ankunftstag ist');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Buchungszeitraum (Tage');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Verfügbarkeitskalender anzeigen?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Hier JA einstellen, um den Verfügbarkeitskalender anzuzeigen.');
define('_JOMRES_FRONT_AVAILABILITY','Verfügbarkeit');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Um zum Buchungsformular zu kommen bitte auf ein freies Datum klicken.');
define('_JOMRES_FRONT_BLACKBOOKING','Blankobuchungen');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Neue Blankobuchung');
define('_JOMRES_FRONT_DELETEGUEST','Gast löschen');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gast gelöscht');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Dieser Gast konnte nicht gelöscht werden, weil noch Buchungen von ihm vorliegen. Buchungen stornieren und erneut versuchen.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Tatsächliche Zimmerkosten: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hallo');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Vielen Dank für Ihre Buchung bei');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Hier ist eine Zusammenfassung Ihrer Buchung:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Falls Sie Fragen zu dieser Buchung oder anderen Serviceleistungen haben, kontaktieren Sie uns bitte.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Unsere Telefonnummer ist');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternativ können Sie uns per E-Mail erreichen unter');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Raucher');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Egal');
define('_JOMRES_COM_CALENDAROUTPUT','Ausgabeformat Kalender');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Ausgabeformat für das Datum im Kalender ändern.');
define('_JOMRES_COM_CALENDARINPUT','Eingabeformat Kalender');
define('_JOMRES_COM_CALENDARINPUT_DESC','Eingabeformat für das Datum im Kalender ändern.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Bei fixen Buchungszeiträumen Kurzunterbrechungen erlauben');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Länge der Kurzunterbrechung (Tage)');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Veröffentlicht');
define('_JOMRES_COM_A_PAYPAL','PayPal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Änderungsprotokoll');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Uhrzeit');
define('_JOMRES_MR_AUDIT_LISTING_USER','Benutzer (Benutzername)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Arbeitsschritt');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Details anzeigen');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Nach Datum filtern');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Nach Benutzernamen filtern');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Nach Arbeitsschritt filtern');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Ankunft steht aus');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Reist heute an');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktueller Gast, anwesend');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Reist heute ab');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Abreise überfällig');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Ist nicht angekommen');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Unbekannter Benutzer');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Erstelltes Zimmer');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Aktualisiertes Zimmer');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Gelöschtes Zimmer');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Zimmereigenschaft erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Zimmereigenschaft aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Zimmereigenschaft gelöscht');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Zimmerkategorie erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Zimmerkategorie aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Zimmerkategorie gelöscht');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Unterkunft erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Unterkunft aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Unterkunft gelöscht');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Unterkunft-Eigenschaft erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Unterkunft-Eigenschaft aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Unterkunft-Eigenschaft gelöscht');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Unterkunft-Einstellungen bearbeitet');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Unterkunft veröffentlicht');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarif erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarif aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarif gelöscht');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Servicegebühren hinzugefügt');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Gast eingecheckt');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Gast ausgecheckt');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Anzahlung eingegeben');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Gast erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Gast aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Gast gelöscht');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Zimmer gebucht');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Zuschlag erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Zuschlag aktualisiert');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Zuschlag gelöscht');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Zuschlag veröffentlicht');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Blankobuchung getätigt');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Blankobuchung gelöscht');
define('_JOMRES_COM_MR_EXTRA_TITLE','Zuschläge');
define('_JOMRES_COM_MR_EXTRA_DESC','Beschreibung');
define('_JOMRES_COM_MR_EXTRA_NAME','Name');
define('_JOMRES_COM_MR_EXTRA_PRICE','Preis');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Zuschlag aktualisiert');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Zuschlag bearbeiten');
define('_JOMRES_COM_MR_EXTRA_DELETED','Zuschlag gelöscht');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Zuschläge bearbeiten');
define('_JOMRES_COM_A_EXTRAS','Zuschläge bei der Buchung anzeigen?');
define('_JOMRES_COM_A_EXTRAS_DESC','Hier JA einstellen, um eventuelle Zuschläge anzuzeigen, die dem Gast angeboten werden sollen.');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optionale Zuschläge.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdatum<br> Blankobuchnung - ab wann ist reserviert');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Enddatum<br> Blankobuchung - ab wann ist wieder frei');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Blankobuchungen bearbeiten');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Beim Versuch, dieses Zimmer zu buchen, ist ein Fehler aufgetreten. Eines oder mehrere der ausgewählten Zimmer sind nicht frei.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Zimmer enthalten in der Blankobuchung');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Blankobuchung anzeigen');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Keine Blankobuchungen vorhanden');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Anzahl Sterne');
define('_JOMRES_COM_A_SMOKING','Raucher/Nichtraucher anzeigen?');
define('_JOMRES_COM_A_SMOKING_DESC','Hier JA einstellen, um eine Auswahl Raucher/Nichtraucher anzuzeigen.');
define('_JOMRES_COM_A_RESET','Zurücksetzen');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Buchung storniert');
define('_JOMRES_FRONT_MR_SEARCH_HERE','Suchen nach:');
define('_JOMRES_COM_A_SMOKING_OPTION','Raucher / Nichtraucher Voreinstellung');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Währungssymbol');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','z.B. &amp;euro&#59; Bitte beachten, dass hier der korrekte HTML-Code für das Währungssymbol eingeben werden sollte. Für eine Liste dieser Codes bitte <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a> besuchen.');
define('_JOMRES_COM_A_CURRENCYCODE','Währungscode');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','z.B. GBP. Dies wird benötigt, wenn PayPal benutzt werden soll. Für eine Liste dieser Codes bitte <a href="http://www.xe.com/iso4217.htm">XE.com</a> besuchen.');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Information');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Vorausbuchungszeitraum einschränken?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Hier JA einstellen, wenn der Vorausbuchungszeitraum einschränkt werden soll. (Im nächsten Feld kann der maximale Vorausbuchungszeitraum in Tagen eingeben werden.) Wenn hier JA eingestellt ist, und ein Gast versucht, früher als x Tage im Voraus zu buchen, wird sein Ankunftsdatum auf das heutige Datum zurückgesetzt.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Vorausbuchungszeitraum eingeschränkt auf Tage:');
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>Hinweis: Es wird nicht empfohlen, beide der folgenden Optionen auf JA zu stellen. Es sollte nach Möglichkeit nur eine der beiden Steueroptionen benutzt werden. </FONT>');
define('_JOMRES_COM_FRONT_ROOMTAX','Steuern');
define('_JOMRES_COM_A_ROOMTAX','Steuern');
define('_JOMRES_COM_A_ROOMTAX_DESC','Entwickelt für den amerikanischen Markt. Diese Steuern werden dem Gast auf die Zimmer erhoben. Es kann zwischen Pauschalbeträgen, prozentualem Steuersatz oder einer Kombination aus beidem ausgewählt werden. Bitte beachten, dass sich diese Steuern nur auf die reinen Zimmerpreise beziehen.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Pauschalsteuer Betrag');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Steuer Prozentsatz');
define('_JOMRES_COM_A_EUROTAX','Pauschalsteuer');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Pauschalsteuer Betrag');
define('_JOMRES_MR_AUDIT_ARCHIVE','Alle Einträge archivieren');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Einträge archiviert');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Prüfer hat Einträge archiviert');
define('_JOMRES_FRONT_TARIFFS','Unsere Tarife');
define('_JOMRES_FRONT_TARIFFS_TITLE','Tarifbezeichnung');
define('_JOMRES_FRONT_TARIFFS_DESC','Tarifbeschreibung');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Zimmerkategorie');
define('_JOMRES_FRONT_TARIFFS_STARTS','Gültig von');
define('_JOMRES_FRONT_TARIFFS_ENDS','Gültig bis');
define('_JOMRES_FRONT_TARIFFS_PPPN','Pro Person / pro Nacht');
define('_JOMRES_FRONT_TARIFFS_PN','Pro Nacht');
define('_JOMRES_FRONT_TARIFFS_NOWEEKEND','ohne Wochenenden');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Tage min.');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Tage max.');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. Belegung');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. Belegung');
define('_JOMRES_FRONT_PREVIEW','Vorschau');
define('_JOMRES_COM_A_EDITINGMODEON','Bearbeiten ein?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktueller Text');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Neuer Text');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Text wurde aktualisiert.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Sprache bearbeiten');
define('_JOMRES_COM_A_AUDITING_SHOWING','Letzte 200 Einträge werden angezeigt ');
define('_JOMRES_FRONT_PTYPE','Unterkunft-Kategorie');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Unterkunft-Kategorien auflisten');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Unterkunft-Kategorien bearbeiten');
define('_JOMRES_COM_PTYPES_PTYPE','Unterkunft-Kategorie');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Beschreibung Unterkunft-Kategorie');
define('_JOMRES_COM_PTYPES_SAVED','Unterkunft-Kategorie gespeichert');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Unterkunft-Kategorie kann nicht gelöscht werden. Die Unterkunft-Kategorie ist bereits einem oder mehreren Unterkünften zugeordnet. Bitte vor dem löschen der Unterkunft-Kategorie diese Zuordnungen ändern.');
define('_JOMRES_COM_PTYPES_DELETED','Unterkunft-Kategorie(n) gelöscht');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Zahlungserinnerung');
define('_JOMRES_EXTRAS_NOEXTRAS','Keine Zuschläge zur Rechnung hinzufügen');
define('_JOMRES_COM_CHARGING_DEPOSIT','Anzahlung');
define('_JOMRES_COM_CHARGING_FULLAMT','kompletter Betrag');
define('_JOMRES_COM_CHARGING_CONFIG','Betrag, der bei der Buchung erhoben werden soll');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Hier einstellen, welcher Betrag bei der Buchung erhoben werden soll: Anzahlung, wenn nur die Anzahlung sofort erhoben werden soll, oder kompletter Betrag, wenn gleich der komplette Zimmerpreis in Rechnung gestellt werden soll.');
define('_JOMRES_COM_MONTHSTOSHOW','Kalendermonate anzeigen');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Wie viele Kalendermonate sollen bei den verfügbaren Zimmern angezeigt werden?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','unterzeichnet im Auftrag von ');
define('_JOMRES_COM_A_GATEWAYLIST','Zahlung');
define('_JOMRES_COM_A_CANCEL','Abbrechen');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Bitte die Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn die entsprechenden Zeiträume ausgewählt sind, den blauen Button drücken um die Sperrungen zu bestätigen. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt</b> Bitte erneut einloggen und erneut versuchen.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Bemerkungen');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Onlinezahlung akzeptieren?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','JA markieren, falls Online-Zahlungen akzeptiert werden sollwollen. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Bitte Zahlungsweise wählen.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Zahlung aktiviert?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin Einstellung geändert');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin Einstellung eingefügt');
define('_JOMRES_FRONT_GALLERYLINK','Webseite dieser Unterkunft anzeigen');
define('_JOMRES_COM_A_GALLERYLINK','Externer Link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Link zur eigenen Webseite hier einfügen.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Kreditkarte erfasst');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Kreditkartendetails ändern');
define('_JOMRES_MR_CREDITCARD_EDIT','Bearbeite Kreditkartendetails');
define('_JOMRES_COM_A_EDITICON','Icongröße bearbeiten');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unterkunftbilder hochladen');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Bild bereits im Verzeichnis vorhanden');
define('_JOMRES_COM_A_SLIDESHOWS','Diashows');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Link zur Diashow zeigen?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Diashows in Unterkunft eingebettet zeigen?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Höhe Vorschaubild');
define('_JOMRES_FRONT_SLIDESHOW','Diashow');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Leider kein Bild für diese Unterkunft verfügbar ');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Link zu den Tarifen zeigen?');
define('_JOMRES_COM_A_POPUPSALLOWED','Popups erlaubt?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Wenn auf NEIN gesetzt, werden die Links im Popup geöffnet anstatt innerhalb des Artikels. TESTPHASE! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Bilder hochladen');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Dieses Formular benützen um mehrere Bilder von dieser Unterkunft hochzuladen.<br/><b>ACHTUNG:</b> Alle Bilder mit gleichen Namen werden überschrieben. Zimmer-spezifische Bilder oder Logos der Unterkunft können hier nicht hochgeladen werden. Diese Bilder müssen über die Unterkunftadministration geladen werden (Unterkunft bearbeiten).<br/><b>Beachten:</b> Die hier hochgeladenen Bilder werden im Verzeichnis /images/stories/jomres/*property_uid* gespeichert. Falls dieses Verzeichnis nicht existiert, wird es vom System angelegt wenn kein anderes Verzeichnis in der Konfiguration festgelegt wurde.');
define('_JOMRES_A_TABS_MISC','Verschiedenes');
define('_JOMRES_A','Seitenkonfiguration');
define('_JOMRES_A_GLOBALPFEATURES','Die allgemeinen Einstellungen benützen');
define('_JOMRES_A_GLOBALPFEATURES_DESC','JA markieren, falls die Unterkunft Eigenschaften durch den Webmaster einheitlich voreingestellt werden.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Um ein Bild dieser Eigenschaft zuordnen zu können, müssen zuerst Bilder in folgendes Verzeichnis geladen werden: /images/stories/jomres/pfeatures/ (wenn kein anderes konfiguriert wurde)');
define('_JOMRES_A_ICON','Icon');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Such-Plugin wählen das verwendet werden soll.');
define('_JOMRES_FRONT_NORESULTS','<b>Leider ergibt die Suche kein Ergebnis. Bitte Eingabe ändern und erneut versuchen.</b>');
define('_JOMRES_AREYOUSURE','Sind Sie sicher?');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Zimmer');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Diese Unterkunft buchen');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sicherheitsnummer');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Tarife in Unterkunft eingebettet zeigen?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresse');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detailinformationen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Für Zimmer und Verfügbarkeit klicken');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Preisinformationen zeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Adressinformation unter diesem Link zeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Kurzinformation unter diesem Link zeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zimmer und Verfügbarkeit unter diesem Link zeigen');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Tarife unter diesem Link zeigen');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Statische Preise');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Durchschnittliche Preise');
define('_JOMRES_COM_A_TARIFFS_MODEL','Wählen Sie das gewünschte Tarifmodell');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Eingabefeld des Abreisetags anzeigen?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC','Auf NEIN setzen, wenn der Abreisetag nicht angezeigt werden soll. Diese Einstellung nur ändern falls wichtige Gründe vorliegen. Der Abreisetag in der Buchung wird dann automatisch der nächste Tag nach der Anreise sein.');
define('_JOMRES_COM_PROPERTYLISTDESC','Limit der Beschreibung');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC','Maximale Anzahl der Buchstaben festlegen die in der Unterkunftbeschreibung angezeigt werden sollen.');
define('_JOMRES_COM_A_DATEFORMATSTYLE','Kalenderformatierung benutzen?');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','JA wählen um die Datumsausgabe anzupassen. (Beispiel <a href="http://www.php.net/manual/en/function.date.php">hier</a>). Auf NEIN setzen um das strftime() Format zu benutzen. (Beispiel <a href="http://www.php.net/manual/en/function.strftime.php">hier</a>) zB. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Veröffentlichen');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Rückgängig veröffentlichen');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Mitteilungsbox: Hintergrundfarbe für Fehler');
define('_JOMRES_COM_CONFIGCOUNTRIES','Standardland für Buchungsformular');
define('_JOMRES_JAVASCRIPT_','Felder mit dem roten Stern, sind zwingend erforderlich.');
define('_JOMRES_COM_SELFREGISTRATION','Dürfen Benutzer eigene Unterkünfte veröffentlichen?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Hier JA einstellen, wenn den Benutzern erlaubt ist, eigene Unterkünfte zu veröffentlichen. Ohne Backend Admin-Einstellungen.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Land und Region für die Unterkunft wählen.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Unterkunftdetails ergänzen.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Felder mit dem roten Stern, sind zwingend erforderlich.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Unterkunft erfolgreich erstellt');
define('_JOMRES_REGISTRATION_NOTALLOWED','Leider können Sie kein Unterkunft erstellen. Sie müssen als registrierter Benutzer eingeloggt sein und Sie dürfen noch keine Unterkunft erstellt haben.');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Erstellte Unterkünfte: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Für Benutzer: ');
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Kalenderanzeige auf Jahresanfang?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Der Buchungskalender wird auf Anfang des laufenden Jahres gestellt.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Anzahl verfügbare Räume');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Zurück zu den Unterkunft-Details');
define('_JOMRES_FRONT_ROOMTYPES','Zimmer Typ');
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung die Sie noch bestätigen müssen.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie noch bestätigen müssen.');
define('_JOMRES_AJAXFORM_PARTICULARS','Buchungsdetails');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Einzelheiten zur Buchung wählen');
define('_JOMRES_AJAXFORM_AVAILABLE','Verfügbarkeit ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Bitte Zimmer auswählen/abwählen');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Prüfen, ob die Unterkunft während dieser Zeit verfügbar ist.');
define('_JOMRES_AJAXFORM_EXTRAS','Optionale Zuschläge');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wählen Sie die gewünschten Zuschläge, die Sie Ihrer Buchung hinzufügen wollen');
define('_JOMRES_COM_PERDAY','Pro Nacht');
define('_JOMRES_AJAXFORM_ADDRESS','Ihre Adresse');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Ihre persönlichen Angaben. Beachten Sie, dass sämtliche Felder außer die Handynummer benötigt werden');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Verfügbare Zimmer');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Gewählte Zimmer');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Der frühest mögliche Anreisetag ist: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Pro Nacht:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Zimmerpreis:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Zuschläge:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Steuer:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Ermäßigung:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Gesamtpreis:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gäste');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klicken Sie hier, um dieses Zimmer zu Ihrer Auswahl hinzuzufügen');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klicken Sie hier, um dieses Zimmer von Ihrer Auswahl zu entfernen');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gästetypen');
define('_JOMRES_VARIANCES_TYPE','Typ');
define('_JOMRES_VARIANCES_TYPE_TT','Gästetyp, zB. Kinder 5 bis 10 Jahre, oder Student ');
define('_JOMRES_VARIANCES_NOTES','Notizen');
define('_JOMRES_VARIANCES_NOTES_TT','Schreiben Sie hier Ihre Bemerkungen zu den verschiedenen Gästetypen');
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maximum der Personen, die pro Gastyp erfasst werden dürfen');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Prozentual');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Der berechnete Betrag wird als prozentualer Anteil des Tagesbetrags für dieses Zimmer berechnet. Wenn auf NEIN gesetzt, wird der vorgegebene Betrag zum Grundbetrag addiert oder subtrahiert.');
define('_JOMRES_VARIANCES_POSNEG','Addiere Abweichung?');
define('_JOMRES_VARIANCES_POSNEG_TT','Der berechnete Betrag wird zum Grundbetrag des Zimmers addiert oder subtrahiert. Auf /Minus/ setzen, wenn es als Rabatt vom Grundbetrag eingesetzt werden soll. ');
define('_JOMRES_VARIANCES_VARIANCE','Abweichung');
define('_JOMRES_VARIANCES_VARIANCE_TT','Betrag der Abweichung');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Gästetyp geändert');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Gästetyp veröffentlicht');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Gästetyp gelöscht');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Gästetyp erstellt');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Gästetyp aktualisiert');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Gästetyp aktualisiert');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Zeige Link zu den Zimmern in den Unterkunft-Details?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Zeige <b>nur</b> Verfügbarkeitskalender?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Wählen Sie JA, wenn Sie die Anzeige für Unterkunftstitel und Beschreibung deaktivieren möchten. Es ist dann nur der Verfügbarkeitskalender der Zimmerliste sichtbar. Diese Option ist nur für Benutzer gedacht die Einzimmer-Unterkünfte anbieten (zB. Wohnungen, Chalets etc).');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Ankunft/Abreisetag Mindest-Intervall');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimale Tagesanzahl zwischen Ankunfts- und Abreisetag.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Buchungsformular Zimmerliste Nummer anzeigen');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Buchungsformular Zimmerliste Name anzeigen');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Buchungsformular Zimmerliste Tariftitel anzeigen');
define('_JOMRES_ORDER','Anordnung');
define('_JOMRES_REQUIREDFIELDS','Benötigt ');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Anzahl Tage vor Ankunft');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Anzahl der Tage die von "heute" bis zum Ankunftstag gesperrt sind.');
define('_JOMRES_DTV','Datumsvariante');
define('_JOMRES_DTV_DOW','Wochentag');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Standard Gästetyp');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardwert für den ersten Gästetyp. Wenn mehrere Gästetypen verwenden werden ist dies der verwendete Standardwert im verschickten Buchungsformular falls der Gast keine Wahl getroffen hat.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Können nur registrierte Besucher online buchen?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Leider können nur registrierte Benutzer online buchen. Hier klicken um sich zu registrieren. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Schriftfarbe für Links der aktuellen Buchungen'); 
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Zellenfarbe für die Markierung der Wochenenden');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Zimmer ist gebucht'); 
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Verdeckte Buchung'); 
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Anzahlung auf die nächste Ganzzahl aufrunden?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Anzahlung verlangen?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Wochenpreis erheben?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Ist diese Funktion aktiviert, wird der Einheitspreis als Wochenpreis angezeigt und pro Woche statt als Tagessatz berechnet.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Preis pro Woche');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fester Ankunftstag: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Wenn feste Ankunftszeiten gewählt sind kann das Datum in der Dropdown-Liste ausgewählt werden');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Raucher Option ungültig');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Falsches Ankunftsdatum');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Falsches Abreisedatum');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Der Buchungszeitraum ist zu kurz. Mindestanzahl der Tage zwischen Ankunft und Abreise:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Ihr Intervall ist');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Gasttyp-Variante ungültig');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wählen Sie Anzahl Personen/Typ');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Zu große Anzahl für die verfügbaren Preise in der Gruppe');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Mehr Zimmer gebucht als Gäste vorhanden');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zu viele Gäste für die verfügbaren Betten');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Mehr Zimmer wählen');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Ein Zimmer wählen');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Vorname benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Nachname benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Haus Nr/Name benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Straße benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Ort benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postleitzahl benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefonnummer benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Handynummer benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','E-Mail-Adresse benötigt');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Die E-Mail-Adresse ist ungültig');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Das Überprüfen der E-Mail-Domain ist fehlgeschlagen');
define('_JOMRES_SRP_WEHAVEVACANCIES','Wir haben noch freie Plätze!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Kein Zimmer ausgewählt');
define('_JOMRES_BOOKING_NUMBER','Buchungs Nr.');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Mitteilungsbox: Hintergrundfarbe für erfolgreiche Buchung');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Template Variablen übernehmen?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Wenn diese Funktion aktiviert ist werden die DHTML Variablen von der FRONTEND Vorlage anstelle der Variablen dieser Seite übernommen. Nützlich, wenn bestimmte Elemente mit den Variablen der vorhandenen Vorlagen angezeigt werden sollen.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Prozentuale Abrechnung');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Auf JA stellen wenn der Preis für jede Person anteilig berechnet werden soll. Falls nein, wird ein Gesamtbetrag pro Buchung angezeigt.');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Link zur Währungs-Umrechnungstabelle in Preisliste anzeigen?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Währungsrechner, aktueller Tagessatz für:');
define('_JOMRES_A_GLOBALROOMTYPES','Einheitliche Zimmerkonfiguration');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Hier JA einstellen, wenn eine einheitliche Zimmerkonfiguration für alle Unterkünfte benutzt werden soll.');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Allgemeines Suchlimit');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Buchungs-Administration <br/> Neue Buchungen');
define('_JOMRES_COM_LIMITROOMSLIST','Maximum Anzahl Zimmer');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Hier festlegen wie viele Zimmer pro Unterkunft zur Verfügung stehen');
// Introduced in v2.5
define('_JOMRES_COM_ALLOWHTMLEDITOR','HTML-Editor für Benutzer erlauben?');
// Translate from here 2.6.2
// v2.6
define('_JOMRES_BOOKITNOW','Verfügbare Zimmer jetzt buchen: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Einheitlicher Editiermodus?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Vorsicht mit dieser Funktion. Falls JA betrifft es alle Textkonstanten systemweit. Einzelne Unterkünfte können dann keine eigenen Textkonstanten editieren.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Einheitliche Währung benutzen?');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Auf JA setzten damit alle Unterkünfte die gleiche Währung verwenden (z. B. & # 8 3 6 4 ;)');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Einheitliches Währungssymbol');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponente gewrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Auf JA setzen wenn Module und Header nicht sichtbar sein sollen');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Unterkunft Manager');
define('_JOMRES_COM_WEEKENDONLY','Nur Wochenenden');
define('_JOMRES_COM_WEEKENDDAYS','Wochenend-Tage');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Tage für Wochenende einstellen. Tarife, die Wochenenden erlauben oder verbieten übernehmen diese Einstellungen in die generierte Zimmerliste.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Land auswählen bevor die Unterkunft-Informationen eingeben werden.');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Änderungen vor dem hochladen eines Unterkunftsbilds speichern.');
define('_JOMRES_TARIFFSFROM','Preise von - ');
define('_JOMRES_SEARCH_ALL','Alle');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Suche nach Land');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Suche nach Region');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Suche nach Stadt');
define('_JOMRES_SEARCH_FEATURE_INFO','Suche Eigenschaft.');
define('_JOMRES_SEARCH_BUTTON','Suche');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Suchwort in die Textbox eingeben und den Button drücken.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Suchwort(e): ');
define('_JOMRES_SEARCH_AVL_INFO','Gewünschtes An- und Abreisedatum eingeben und den Button drücken um Unterkünfte zu finden die frei Kapazitäten zum gewünschten Zeitpunkt haben.');
define('_JOMRES_SEARCH_PTYPES','Unterkunft Typ');
define('_JOMRES_SEARCH_RTYPES','Zimmertyp');
define('_JOMRES_SORTORDER_DEFAULT','Voreinstellung');
define('_JOMRES_SORTORDER_PROPERTYNAME','Unterkunft Name');
define('_JOMRES_SORTORDER_PROPERTYREGION','Unterkunft Region');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Unterkunft Stadt');
define('_JOMRES_SORTORDER_STARS','Sterne');
define('_JOMRES_PATHWAY_PROPERTYLIST','Unterkunftliste');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Unterkunftsdetails');
define('_JOMRES_PATHWAY_BOOKINGFORM','Buchungsformular');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Adressangaben aktualisieren');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-check der Zimmer-Verfügbarkeit<br/>(Zimmerauswahl wird zurückgesetzt)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-check der Verfügbarkeit');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Änderung der optionalen Extras');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Änderung der Zimmerauswahl');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Aktualisierung der Adressangaben');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Leider sind eines oder mehrere Adressfelder fehlerhaft.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Zimmerbild');
define('_JOMRES_CURRENCYFORMAT','Währungsformat');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Manager-Optionen, als Icons anzeigen');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Suchoptionen');
define('JOMRES_COM_A_AVAILABLELOGS','Vorhandene Logs');
define('JOMRES_COM_A_LOGS_NOENTRIES','Keine Log Einträge vorhanden. Dies ist üblich. Sie müssen die jomres.php Datei anpassen um die Log-Einträge zu verändern');
define('JOMRES_COM_A_MESSAGE','Nachrichten');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Erweitert');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Microverwaltung');
define('JOMRES_COM_A_TARIFFMODE','Tarif-Konfiguration-Modus');
define('JOMRES_COM_A_TARIFFMODE_DESC','<b>Warnung: Der Wechsel zwischen den verschiedenen Tariftypen kann zu Datenverlust führen. Bitte folgende Hinweise beachten.</b>.
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
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Zimmerliste in Unterkunfsdetailsseite anzeigen?');
define('JOMRES_PROPERTYTYPE','Unterkunftstyp');
define('JOMRES_COM_A_SRPONLY','Nur eine SRP ');
define('JOMRES_MAXPEOPLEINROOM','Max Personen pro Zimmer');
define('JOMRES_MAXPEOPLEINBOOKING','Max Personen pro Buchung');
define('_JOMCOMP_BOOKINGNOTES_ADD','Notiz hinzufügen' );
define('_JOMCOMP_BOOKINGNOTES_EDIT','Notiz bearbeiten');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Notiz löschen');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Notiz anzeigen');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Notiz hinzufügen');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notiz bearbeiten');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notiz löschen');
define('_JOMCOMP_MYUSER_MENUTITLE','Meine Optionen');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Buchungsliste');
define('_JOMCOMP_MYUSER_MYBOOKINGS','Meine Buchungen');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Buchung anzeigen');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Favoriten anzeigen');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Es sind noch keine Favoriten eingetragen.');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Zu Favoriten hinzufügen');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Unterkunftsart');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Unterkünfte auf Seite');
define('_JOMCOMP_WISEPRICE_TITLE','Lastminute');
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktiv');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Dieses Plugin ermöglicht den Unterkunftspreis dynamisch zu generieren.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Die meisten Betriebe kalkulieren die Zimmerpreise einer bestimmten Kategorie im Verhältnis zur Verfügbarkeit zu einem bestimmten Zeitraum. Das bietet die Möglichkeit Nachlässe für schlecht gebuchte Zimmertypen einzuräumen um die Belegung zu erhöhen.<br/>Wird dieses Plugin aktiviert können für bestimmte Tage und Zimmertypen von der Anzahl der verfügbaren Zimmer abhängige Preise gestaltet werden.<br/>Der Tages-Grenzwert definiert die Anzahl der Tage innerhalb deren das Ankunftstag liegen muss bevor die Zimmerpreise durch dieses Feature angepasst werden. Mit den Prozentwerten kann die Belegung der entsprechenden Zimmer konfiguriert werden ab der ein vorgegebener Nachlass angewendet wird.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Tagesgrenzwert (Anzahl Tage von heute bis Ankunft)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Prozent belegter Räume < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Prozent belegter Räume < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Prozent belegter Räume < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Prozent belegter Räume < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabatt %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' ist ermäßigt ab ');
define('_JOMCOMP_WISEPRICE_TO',' bis ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Raumpreis ist nicht ermäßigt ');
define('JOMRES_COM_A_MAPSKEY','Google Map API Schlüssel');
define('JOMRES_COM_A_MAPSKEY_DESC','Google-Key verfügbar auf <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Wenn hier der Google-Key eingegeben ist zeigt Jomres eine Karte in den Unterkunftsdetails.');
define('JOMRES_COM_A_USE_SSL','Wird SSL im Buchungsformular verwendet?');
define('JOMRES_COM_A_USE_SSL_DESC','Es muss ein gültiges SSL Zertifikat vorliegen für ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last Minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktiv?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Falls Ja sind Last Minute Angebote möglich.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Grenzwert');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Bei einer Buchung innerhalb von N Tage bis zum Ankunftsdatum wird eine Ermäßigung gewährt.');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Ermäßigung');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In Prozent');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Für diese Buchung wurde eine Ermäßigung berechnet!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Der Betrag dieses Aufenthalts wurde ermäßigt um ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Für diese Unterkunft ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','% Ermäßigung wenn das Ankunftsdatum der Buchung vor ');
define('_JOMCOMP_LASTMINUTE_ORMORE','% oder mehr Ermäßigung wenn das Ankunftsdatum vor '); 
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Jetzt buchen, um den diesen Preis zu erhalten!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Ausführliche Preisinformationen');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Falls Ja, werden weitere Preisinformationen in einem Popup Fenster angezeigt');
define('JOMRES_COM_A_MINIMALCONFIG','Konfigurationsoptionen begrenzen');
define('_JOMCOMP_AMEND','Buchung anpassen - Auswahl Unterkunft');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Neue Unterkunft wählen');
define('_JOMCOMP_AMEND_HEADER','Original Auftrag:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Anzahlung');
define('_JOMCOMP_AMEND_DEPOSITDUE','Ausstehende Anzahlung');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Korrigiert Total');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Korrigiert Anzahlung');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Abbrechen');
define('_JRPORTAL_CPANEL','JRPortal Konfiguration');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Standard Provision');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Die Standard Provision wählen, die für den Fall angewendet wird, dass an keiner anderer Stelle eine Provision eingegeben wurde.');
define('_JRPORTAL_CPANEL_LISTCRATES','Liste der Provisionen');
define('_JRPORTAL_CPANEL_PATETITLE','Provisionen');
define('_JRPORTAL_CRATE_TITLE','Titel');
define('_JRPORTAL_CRATE_TYPE','Typ');
define('_JRPORTAL_CRATE_VALUE','Provision');
define('_JRPORTAL_CRATE_CURRENCYCODE','Währungscode');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Unterkunft anzeigen');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Unterkunftsname');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Unterkunftsadresse');
define('_JRPORTAL_PROPERTIES_LEGEND','Für Unterkünfte die Rot hinterlegt sind wurde die Provision noch nicht verbucht.');
define('_JRPORTAL_STATS_PATETITLE','Statistik');
define('_JRPORTAL_STATS_STATTYPE','Statistik für: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Unterkunft - Klicks');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Unterkunft anzeigen');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Anzahl Buchungen');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Beträge der Buchungen');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Geschätzte Provision ');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Provision');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Buchungen auflisten');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Unterkunft NR.');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gast NR.');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Rechnung NR.');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Gesamte Buchungen');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Vertrags Identifikation');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Vertragsnummer');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Währungscode');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Erstellt');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiviert');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Archiviert Datum');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Position zur Rechnung hinzufügen');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Verwaltung der Rechnungen');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Zugewiesene Unterkunft (sofern verfügbar)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Betrag');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Beschreibung');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS','Position erfolgreich eingefügt ');
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS','Buchungen anzeigen');
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE','Fehler beim Einfügen der Rechnungsposition ');
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE','Fehler, es wurde kein Betrag eingesetzt');
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Es können auch Unterkunft spezifische Sprachdateien in einem Unterordner angelegt werden, z.B. "Medienvermietung" indem die Sprachdatei in den Unterordner kopiert wird. Anschließend die Inhalte der Sprachdatei auf die zu vermietenden Objekte anpassen, z.B. DVDs, CDs etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Diese Unterkunft kann nicht gelöscht werden da sie die einzige ist auf die noch Zugriff besteht. Wenn diese Unterkunft nicht angezeigt werden soll, in der Statusleiste auf unveröffentlicht setzen. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Falls es sich hier um eine Demo-Installation handelt und beabsichtigt ist Jomres Solo (auf eine Unterkunft begrenzt) zu erwerben, sollte zuerst eine neue Unterkunft angelegt und diese Unterkunft gelöscht werden, noch bevor die Lizenz erworben wird. Der Schlüssel wird direkt nach dem Kauf zugewiesen. ');
define('_JOMRES_COM_EMAILERRORS','Fehler Meldungen mailen?');
define('_JOMRES_COM_EMAILERRORS_DESC','Auf Ja setzen wenn die generierten Fehlermeldungen automatisch an jomres.net übermittelt werden sollen. Dies ermöglicht auftretende Fehler sofort erkannt und ohne Mitwirkung des Nutzers behoben werden können. Hinweis: Diese Funktion ist auf "localhost" deaktiviert. ');
define('_JOMRES_COM_ISTHISANMRP','Ist diese Unterkunft ein Hotel/Pension oder Haus/Ferienwohnung? ');
define('_JOMRES_COM_ISTHISANMRP_DESC',' Die Konfiguration unterscheidet sich je nach dem, ob es sich um eine einzelne Immobilie oder mehrere Immobilien handelt. Wählen Sie MRP wenn Sie mehrere Räume anbieten und SRP wenn Sie eine Immobilie einzeln anbieten wollen. ');
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK','Jomres Mailpüfer verwenden? ');
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC','Erzwingt eine strengere Mailprüfung beim Versenden. Einige Webserver geben einen Serverfehler 500 ab, wenn versucht wird eine E-Mail auf eine ungültige E-Mailadresse zu senden. Wird diese Einstellung aktiviert benutzt das PHP Skript vor dem Versand die Funktion checkdnsrr und verhindert den Serverfehler. ');
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL','Unterkunft Total');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS','Nacht/Nächte zum');
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM','pro Zimmer ');
/*
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL','Extras Gesamt ');
define('_JOMRES_AJAXFORM_PRICE_SUMMARY','Preis Zusammenfassung ');
define('_JOMRES_CONFIRMATION_ALERT','Bitte lesen und Einverständnis erklären ');
define('_JOMRES_CONFIRMATION_HEADER','Im Folgenden eine Zusammenfassung Ihrer Buchung.<br /> Um Änderungen vorzunehmen, bitte auf den Knopf "Reservierung ändern" klicken. ');
define('_JOMRES_CONFIRMATION_AMENDTEXT','Sollen die oben genannten Informationen geändert werden, dann bitte hier klicken');
define('_JOMRES_CONFIRMATION_AMEND','Reservierung ändern.');
define('_JOMRES_CONFIRMATION_SPECIALS','Besondere Wünsche bitte in das unten stehende Feld eingeben.');
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT','Ich bestätige, dass die vorstehenden Angaben richtig sind und bin einverstanden mit den ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON','pro Person pro Nacht ');
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE','Standard Sprachdatei');
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC','Sprache wählen die Jomres als Standard verwenden soll wenn die Standardsprache nicht schon durch Joomfish festgelegt ist.');
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','von');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Zurück');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Weiter');
if (!defined('_PN_END'))
	define('_PN_END','Ende');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Ergebnis');
	
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Bitte beachten dass dies kein Buchungsformular ist. Es kann anstelle einer Email Mitteilung eingesetzt werden.<br/>Hier die Nachricht schreiben die übermittelt werden soll, an: ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Hotel kontaktieren');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Unterkunft Anfrageformular ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Vielen Dank für Ihre Anfrage. Die Nachricht wurde an die entsprechende Kontaktadresse und an Ihre angegebene E-Mailadresse zur Kenntnisnahme geschickt. Ihr Anliegen wird schnellst möglich bearbeitet.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' Betreff ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Schreiben Sie die angezeigten Buchstaben in die Box');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Kann die Buchstaben nicht lesen. Erstelle ein ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Absenden');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','neues Bild');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Anfrage');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Für diesen Zeitraum haben wir leider keine freien Plätze!');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Bitte aus der Liste rechts die gewünschte Unterkunft auswählen');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min. Räume die gewählt sind');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimale Anzahl der Zimmer die bereits vor Buchung in ausgewählter Tarif-/Zimmerart-Kombination angeboten werden können. Ermöglicht Ermäßigungstarife auch wenn bereits mehr als N Zimmer ausgewählt sind. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max. Räume bereits gewählt');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximale Anzahl der Zimmer die bei der Buchung schon ausgewählt sein dürfen bevor die Tarif-/Zimmerart-Auswahlbox nicht mehr angezeigt wird. Erlaubt die Tarif-/Zimmerart nicht mehr anzubieten wenn bereits N Zimmer im Buchungsformular ausgewählt sind. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Bitte beachten, dass Einzelzimmerzuschläge die in der allgemeinen Konfiguration auf Ja gesetzt sind hier nicht verwendet werden. Die Einstellungen hier sind eine Alternative zu den Pauschalsätzen. Die Beträge werden nicht zu den pauschalen Unterkunftssätzen (SPS) addiert.');
define('_JOMRES_AVLCAL_NOBOOKINGS','Frei'); 
define('_JOMRES_AVLCAL_QUARTER','Einige Buchungen');
define('_JOMRES_AVLCAL_HALF','zur Hälfte gebucht');
define('_JOMRES_AVLCAL_THREEQUARTER','Oft gebucht');
define('_JOMRES_AVLCAL_FULLYBOOKED','Ausgebucht');
define('_JOMRES_COM_SEF_URL_PREFIX','URL Präfix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Dies ist der erste Eintrag nach dem Domainnamen - Bitte anpassen - Bitte leer lassen wenn keine Namenserweiterung erwünscht ist.');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Alias der Unterkunft anzeigen');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Alias buchen');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Alias suchen');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Landesnamen in der URL ergänzen');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Region in der URL ergänzen');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Stadt in der URL ergänzen');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Unterkunfts-Typ in der URL ergänzen');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Unterkunftsnamen in der URL ergänzen');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','ID zum Unterkunftsnamen hinzufügen');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Falls Unterkunftsname auf Nein, keine Veränderung. Falls Ja, wird die URL Adresse etwa so aussehen: fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Such-URL - Land in der URL ergänzen');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC',' ');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Such-URL - Standard Land');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Wenn alle Unterkünfte im gleichen Land sind, wird das Land in der Suche nicht angezeigt - Falls das Land angezeigt werden soll das Standard-Land einfügen.');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Such-URL - Region in der URL ergänzen');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Such-URL - Standard Region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Wenn alle Unterkünfte in der gleichen Region sind, wird die Region in der Suche nicht angezeigt - Falls die Region angezeigt werden soll dort die Standard-Region einfügen.');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Such-URL - Stadt in der URL ergänzen');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Such-URL - Standard Stadt');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Such-URL - Unterkunfts-Typ');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Such-URL - Standard Unterkunfts-Typ');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Wird in der URL verwendet, wenn die Suche für alle Unterkunftstypen gelten soll');
define('_JOMRES_COM_SEF_NOTINSTALLED','Falls die 404sef Komponente nicht installiert ist, oder Sie sie noch nicht kopiert haben '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php nach '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Falls Sie die Komponente schon installiert haben, können Sie die URLs jetzt hier bearbeiten. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Javascript Kalendersprache automatisch erkennen');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Soll die automatische Erkennung der Sprache für den JavaScript-Kalender aktiviert werden? Falls die automatische Spracherkennung nicht funktioniert wird die unten eingestellte Sprache verwendet');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','pro Woche');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','pro Tag');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','pro Buchung');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','pro Person pro Buchung');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','pro Person pro Tag');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','pro Person pro Woche');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','pro Tag (min. Tage)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','pro Tag X Räume gewählt');
define('_JOMRES_REGISTRYREBUILD','Registrierung der Minikomponente neu aufbauen');
define('_JOMRES_REGISTRYREBUILD_NOTES','Normalerweise wird die Jomres Plugin Registrierung automatisch wieder hergestellt, wenn im Plugin-Manager ein Plugin hinzufügt oder entfernt wird. Es kommt vor, dass Sie dieser Automatismus, aus welchem Grund auch immer, nicht ausgelöst wird. Mit dieser Funktion kann die Wiederherstellung manuell ausgelöst werden. Wenn Zugriff auf den Plugin-Manager und die Upgrades Funktion beseht ist es unwahrscheinlich, dass diese Funktion jemals benötigt wird. Die Registrierung muss jedes Mal wiederhergestellt werden wenn eine neue Mini-Komponente hinzugefügt wurde.');
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Die Registereinträge wurden erfolgreich aktualisiert');
define('_JOMRES_REGISTRYREBUILD_FAILURE','Es gab ein Fehler bei der Aktualisierung im Register der Minikomponente. Bitte den Jomres Fehlerreport überprüfen ob der Fehler verzeichnet ist.');
define('_JOMRES_SEARCH_PRICERANGES','Suche nach Preis.');
define('JOMRES_WORD_SAVING','Speichere...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Werden die mehrstufigen Immobilien Details verwendet?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 führt die zusammengesetzte Ausgabe der Unterkunftsdetails ein. Die gesamten Ausgaben der Unterkunftsdetails erfolgen in ein Template (composite_property_details.html). Auf Nein stellen falls dies nicht gewünscht wird. (Nur geübte   Benutzer sollten hier Nein einstellen. Neue Benutzer sollten hier besser Ja wählen)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Dies ist eine Liste aller Benutzer des Systems. Nicht-Immobilien-Manager haben ein Gast-Symbol, Immobilien-Manager haben Empfang / Unterkunfts Manager / Super Immobilien-Manager-Symbole. <br/>Bei der ersten Installation von Jomres wird "admin" automatisch zum Unterkunfts-Manager und gilt als autorisierter Benutzer. <br/> Einem Nicht-Super-Manager muss mindestens ein Objekt zugeordnet werden da sonst beim Login eine Fehlermeldung angezeigt wird. <br/> Wenn ein Benutzer autorisiert ist kann sein Profil editiert und ihm verschiedene Objekte und Berechtigungen, auch Super-Unterkunfts-Manager, zugewiesen werden. <br/>Auf das rote Kreuz neben dem Namen eines Benutzers klicken um ihn zu autorisieren, bzw. auf den grünen Haken um ihm die Autorisierung zu entziehen. <br/> Um Benutzer auf bestimmte Unterkünfte bzw. Funktionen zu beschränken oder sie zu Super-Unterkunfts-Manager zu machen sind sie zu autorisieren und die Einstellungen über das Symbol "Bearbeiten" anzupassen (nur nach der Autorisierung des Benutzers sichtbar). Benutzer, die ihre Unterkünfte selber registriert haben, werden automatisch für das betreffende Objekt autorisiert. Der Super-Unterkunfts-Manager hat automatisch die Rechte über alle Eigenschaften und alle Konfigurations-Optionen, auch wenn die Konfigurations-Einstellungen in der Webseitenkonfiguration eingeschränkt sind.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Hier können einem Benutzer bestimmte Unterkünfte zugewiesen werden. Wird er nicht zum Super-Unterkunfts-Manager gemacht ist sicher zu stellen, dass ihm mindestens ein Objekt zugewiesen wird da sonst eine Fehlermeldung beim Login erfolgt. Soll ein Receptionist / Unterkunfts Manager nur Zugriff auf bestimmte Unterkünfte haben ist darauf zu achten, dass das Property Manager Dropdownfeld auf "Nein" steht.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Sie noch keine Buchungen getätigt!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Unterkunfts-Typ');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Unterkunfts-Typ bearbeiten');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Wählen Sie Ihren Unterkunfts-Typ');
define('_JOMRES_COM_LOGGING','Jomres Logging');
define('_JOMRES_COM_LOGGING_WARNING','Diese Funktion aktiviert/deaktiviert das Protokollieren mit Jomres. Das Fehlerprotokoll ist immer aktiviert, aber andere Protokolle wie Buchungen, Gateway, System und Anfragen können aktiviert und deaktiviert werden. Wir weisen darauf hin, dass <b>die Möglichkeit dieses zusätzlichen Protokolle zu aktivieren ausschließlich zur besseren Fehlersuche bereitgestellt wird, aber ein erhebliches Sicherheitsrisiko darstellt</b> da es für externe Benutzer sehr einfach diese Protokolle auszulesen. Daher raten wir dringlich diese Optionen weitgehend inaktiv zu belassen. Nach dem Abschalten unbedingt sicher stellen, dass folgende Verzeichnisse:  <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> keine alten Log-Files beinhalten. Außerdem verlangsamt die Protokollierung das System signifikant und sammelt sehr viele Daten.');
define('_JOMRES_COM_LOGGING_BOOKING','Buchungs Logs (Formular Logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway Logs (z.B. Paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Anfrage Log (alle eingehenden Serveranfragen)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (verschiedene Logs) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (vor allem für die Zusammenstellung der Provisionen, etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Ihre Frage...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Raumauflistung Buchungsformular nach Raumtyp-Bild angezeigt');
define('_JOMRES_COM_A_LISTLIMIT','Maximum Unterkünfte in der Liste');
define('_JOMRES_COM_A_LISTLIMIT_DESC','Anzahl Unterkünfte die nach einer Suche pro Seite angezeigt werden sollen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','eingebaute Suchfunktion');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Die in Jomres integrierte Suchfunktion ermöglicht es den Nutzern, die Suche in den Unterkünften von Jomres mit einer Reihe von Funktionen durchzuführen. Nutzern die bereits mit der Suchfunktionen von Jomres in Joomla gearbeitet haben wird der Umgang damit vertraut sein. <br/> Diese Funktion ermöglicht es, die Suche innerhalb von Jomres für die Benutzer anzubieten, die das Joomla Suchmodul nicht verwenden wollen, bzw. für Nutzer anderer CMS die keine Suchfunktion haben. <br/> Es ist anzumerken, dass bei einer Suche über einen Link (z.B nicht über das Drop-Down), andere Suchoptionen nicht inbegriffen sind, sondern nur das Element das mit dem geklickten Link korrespondiert.<br/> Das Layout dieser integrierten Suche ist nicht besonders schön, da im Template, das für das Aussehen verantwortlich ist, alle möglichen und teilweise inkompatible Optionen berücksichtigt werden müssen. Um das Layout zu verbessern und den eigenen Bedingungen anzupassen ist die Template-Datei <b>srch.html</b> im Ordner <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> zu bearbeiten. ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Diese Funktion aktivieren?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Ist diese Funktion aktiviert werden bei jedem Aufruf von Jomres mit Listendarstellung der Unterkünfte auch die Suchoptionen angezeigt.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Zeilen verwenden');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC','Jede Suchoption, welche Sie als Link definiert haben (dort wo eindeutig erkennbar) wird als Spaltenauflistung angezeigt (für IE setze ein br am Ende des Links)');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS','Zeilenfunktionen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC','Anzahl Funktions-Icons die angezeigt werden sollen bevovor das br eingefüht wird, um zur nächsten Zeile zu gehen.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO','Suche nach der Region mittels Auswahlfeld');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC','Zeigen Sie das Such-Auswahlfeld zum Filtern von Länder/Regionen/Städten an. Falls Sie diese Funktion verwenden wollen, benutzen Sie lieber die unten aufgeführte Suche nach Region/Stadt nicht.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME','Suche nach Unterkunftsname');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC','Zeige Suchergebnis nach Eingabe des Unterkunftsnamens an.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN','Als Auswahlfeld anzeigen?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC','Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION','Suche nach Stadt/Region');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC','Zeige Suchergebnis nach Region an');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN','Als Auswahlfeld anzeigen?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC','Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE','Suche nach Unterkunfts-Typ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC','Zeige Suchergebnis nach Unterkunfts-Typ an');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN','Als Auswahlfeld anzeigen?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC','Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE','Suche nach Raum-Typ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC','Zeige das Suchergebnis nach Raum-Typ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN','Als Auswahlliste anzeigen?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC','Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES','Suche nach Funktionen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC','Zeige das Suchergebnis nach Funktionen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN','Als Auswahlliste anzeigen?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC','Setzen Sie auf Nein, um die Auflistung als Tooltipbild und Checkbox anzuzeigen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION','Suche nach dem Beschreibung');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC','Zeige das Suchergebnis nach dem Beschreibung');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY','Suche nach Verfügbarkeit');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC','Zeige das Suchergebnis nach Verfügbarkeit');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES','Suche nach Preisschritten');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC','Zeige das Suchergebnis nach Preisschritten');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS','Preisschritte');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC','Jomres wird auf allen Werten der Tarifauflistung eine Reihe von Preisspannen hinzurechnen, aufgrund des Wertes, den Sie hier eingeben.');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Per Voreinstellung führt Jomres eine Suche durch wenn keine Unterkunft gewählt ist. Wenn diese Suche nicht durch ein Suchmodul unterstützt wird werden (absichtlich) zufällige Ergebnisse ausgegeben. Die Anzahl der ausgegebenen Unterkünfte kann mit dieser Option begrenzt werden.');
define('_JOMRES_COM_A_CRON_TITLE','Cronjob Einstellungen und Logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron-Job Information. Die Pseudocron Funktionalität wird zur Rechnungsstellung und Provisionsberechnung benötigt.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installierte cron Minicomponenten. Zum Start eines individuellen cron job einen der unten spezifizierten Links benützen. Die cron jobs produzieren keinerlei Ausgaben und es sind keine Informationen auf der Seite sichtbar. In den unten stehenden logs können die Daten überprüft werden.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Methode');
define('_JOMRES_COM_A_CRON_METHOD_DESC','Falls Sie keine Cronjobs auf dem Server ausführen können auf Minikomponente stellen, andernfalls erstellen Sie einen Cronjob und geben Sie folgendes an:<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl=component&no_html=1&secret='.$jomresConfig_secret.'> /dev/null</i> ');
define('_JOMRES_COM_A_CRON_LOGGING','Zeige logging im Browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Funktioniert nur, wenn auf Minikomponente gestellt ist.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging aktiviert');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ja, um das Logging zu aktivieren. Das Ergebnis der Logs wird unten angezeigt.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Logging verbergen');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Zuviele Logging Ausgaben');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Bearbeitung');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Diese Funktion ermöglicht das bearbeiten des Jomres Frontend Templates auf dem Server. Das Ergebnis wird in der Datenbank gespeichert. Seien Sie vorsichtig, beim Bearbeiten der erweiterten Einstellungen.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Wurde das Template angepasst?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Eigene Felder');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Hier können einfache individuelle Felder definiert werden die im Buchungsformular erscheinen.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Feldname (ohne Abstand)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Standardwert');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Beschreibung');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','benötigt');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Menge');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Falls die maximale Menge größer 1 ist wird ein Auswahlfeld mit der maximalen Anzahl für die Extras angezeigt.');
define('_JRPORTAL_INVOICES_ISSUE','Rechnungen erstellen');
define('_JRPORTAL_TAXRATES_TITLE','MwSt Betrag');
define('_JRPORTAL_TAXRATES_CODE','Steuersatz');
define('_JRPORTAL_TAXRATES_DESCRIPTION','Ratenbeschreibung');
define('_JRPORTAL_TAXRATES_CANNOTDELETE','Dieser Steuersatz kann nicht gelöscht werden.');
define('_JRPORTAL_TAXRATES_RATE','Satz');
define('_JRPORTAL_INVOICES_TITLE','Rechnungen');
define('_JRPORTAL_INVOICES_STATUS_UNPAID','Unbezahlte');
define('_JRPORTAL_INVOICES_STATUS_PAID','Bezahlt');
define('_JRPORTAL_INVOICES_STATUS_CANCELLED','Storniert');
define('_JRPORTAL_INVOICES_STATUS_PENDING','Ausstehend');
define('_JRPORTAL_INVOICES_USER','Benutzer');
define('_JRPORTAL_INVOICES_STATUS','Status');
define('_JRPORTAL_INVOICES_RAISED','Erstellt');
define('_JRPORTAL_INVOICES_DUE','Fällig');
define('_JRPORTAL_INVOICES_SUBSCRIPTION','Abonnement');
define('_JRPORTAL_INVOICES_INITTOTAL','Gesamtbetrag');
define('_JRPORTAL_INVOICES_RECUR_TOTAL','Mehrf. Zahlung');
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY','Mehrf. Zeitraum');
define('_JRPORTAL_INVOICES_RECUR_DOMONTH','Wiederh. Tag d. M.');
define('_JRPORTAL_INVOICES_CURRENCYCODE','Währungscode');
define('_JRPORTAL_INVOICES_LINEITEMS','Belegpositionen');
define('_JRPORTAL_INVOICES_LINEITEMS_NAME','Bez.');
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION','Beschr.');
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE','Basispreis');
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY','Basiszahl');
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT','Nachlass Erstauftr.');
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL','Gesamt');
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE','Mehrf. Preis');
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY','Mehrf. Anzahl');
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT','Mehrf. Nachlass');
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL','Mehrf. Gesamt');
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE','Steuercode');
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION','Steuer');
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE','Satz');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE','Paypal');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE','Währungscode (z.B. EUR)');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX','Sandbox benutzten?');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL','Meine Paypal E-Mail Adresse');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES','Hinweis: Bei Verwendung von PayPal müssen Sie in Ihrem PayPal-Konto das Autoreturn deaktivieren (Profile/Website Payment Preferences), und die IPN (Profile/Instant Payment Notification Preferences) auf die URL:<br/><b>&nbsp;'.$jomresConfig_live_site.'/index.php?option=com_jomres&task=completebk&Itemid='.$jrConfig['jomresItemid'].'&no_html=1');
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY','Diese Rechnung ist fällig. Bitte klicken Sie auf den Knopf, um zu PayPal weitergeleitet zu werden.');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE','Jomres Standard-Gateway-Einstellungen überschreiben?');
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC','Wenn die Einstellungen paypal Option auf Yes gesetzt wurde dann sind folgende Einstellungen gültig: Die allgemeine Konfiguration in der Gateway-Einstellungen wird nicht mehr angezeigt und wenn eine Buchung erfolgt wird die in der allgemeinen Konfiguration eingetragene Paypal E-Mail verwendet.');
define('_JRPORTAL_INVOICES_SHOWINVOICES','Meine Rechnungen anzeigen');
define('_JRPORTAL_COUPONS_TITLE','Rabatte');
define('_JRPORTAL_COUPONS_DESC','Als Anreiz zur Buchung, können den Gästen Rabattangebote gemacht werden. Gültig für einem bestimmten Buchungszeitraum, nicht für das Datum einer Buchung selbst.');
define('_JRPORTAL_COUPONS_CODE','Rabatt Code');
define('_JRPORTAL_COUPONS_VALIDFROM','Gültig von');
define('_JRPORTAL_COUPONS_VALIDTO','Gültig bis');
define('_JRPORTAL_COUPONS_AMOUNT','Rabattbetrag');
define('_JRPORTAL_COUPONS_ISPERCENTAGE','Rabatt in Prozent');
define('_JRPORTAL_COUPONS_ROOMONLY','nur Zimmer');
define('_JRPORTAL_COUPONS_ROOMONLY_DESC','Nachlass wird nur auf den Zimmerpreis angerechnet. Falls auf Nein gesetzt, wird der Nachlass auf den ganzen Buchungsbetrag angewendet.');
define('_JRPORTAL_COUPONS_SQLERROR','Sql Fehler beim löschen/einfügen der Coupon Daten');
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Bitte geben Sie den Couponcode ein und klicken Sie auf "Coupon speichern" um den Nachlass Ihrer Buchung gut zu schreiben.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Coupon verwenden');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Nachlass vor der Buchung gespeichert');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon nicht gefunden');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Wert des Coupon');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Vergünstigte Buchung. Couponcode/-wert Einstellungen: ');
define('_JOMRES_COM_CACHING','Die Jomres Cachefunktion verwenden?');
define('_JOMRES_COM_CACHING_DESC','Nein, wenn die Jomres Cache Funktion deaktiviert werden soll.');
define('_JOMRES_COM_CHOOSELANGUAGES','Sprache wählen');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Im Auswahlfeld die Sprache wählen.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Sprachauswahlfeld anzeigen?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Abgebuchte und annullierte Buchungen');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR','Sehr geehrte');
define('_JRPORTAL_NEWUSER_THANKYOU','\nVielen Dank für die Registrierung ');
define('_JRPORTAL_NEWUSER_USERNAME','\nIhr Benutzername lautet: ');
define('_JRPORTAL_NEWUSER_PASSWORD','\nIhr Passwort lautet: ');
define('_JRPORTAL_NEWUSER_LOG_IN','\nUm Ihre Buchungen anzusehen, loggen Sie sich bitte unter folgender Adresse ein: ');
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon gespeichert');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon gelöscht');
// Not used yet
define('_JOMRES_COM_GROWL','Verwende Jomres Nachrichtendienst');
define('_JOMRES_COM_GROWL_DESC','Viele Manager geben Ihre Rückmeldung in Form einer JavaScript-Nachricht aus, während dem die Seite neu geladen wird. Falls Sie diese Option verwenden wollen, aktivieren bzw. deaktivieren Sie diese Funktion.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE','Jomres -> Clickatell SMS');
define('_JRPORTAL_SMS_CLICKATELL_USERNAME','Benutzer');
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD','Passwort');
define('_JRPORTAL_SMS_CLICKATELL_APIID','API ID');
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER','Handynummer für Benachrichtigungen');
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC','Bitte verwenden Sie folgendes Fotmat "Länder Code, Handynumber". Die UK Nummerreihenfolge würde z.B so aussehen wie "447979123456". Lassen Sie dieses Feld leer, wenn Sie keine Benachrichtigung per SMS erhalten wollen.');
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE','SMS');
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS','
<b>Offenbar wollen Sie das auf Ihrem localhost ausprobieren. Sie können das aber nur auf einem "live" Server verwenden.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here\'s how:<br/>
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You\'ll need to set the IP callback to '.$jomresConfig_live_site.'/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection\'s unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Raum Buchungsformular für Behinderte anzeigen');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Raum Buchungsformular max. Personen anzeigen');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING','Bitte beachten Sie, dass die Zimmerpreise nur Schätzungen sind und der effektive Buchungspreis nicht berechnet wird, bis Sie ein Zimmer oder mehrere Zimmer zu Ihrer Auswahl hizugefügt haben.');
define('_JOMRES_LASTEDITED_DB','Datenbanktemplate letzte Änderung');
define('_JOMRES_LASTEDITED_DISK','Festplattentemplate letzte Änderung');
define('_JOMRES_LASTEDITED_WARNINGICON','Datenbanktemlate Warnung');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Das Datenbanktemplate ist abgelaufen');
define('_JOMRES_LASTEDITED_WARNING','Wenn es ein Symbol gibt, dass nicht ins Template passt, dann hat Joomres festgestellt, dass das Template in der Datenbank älter <strong><i>may</i></strong> älter sind, als das Template auf der Festplatte. In diesem Fall ist es möglich, dass das Template in eine neueren Version von Jomres zu aktualisieren. Wenn dies der Fall ist, dann ist es möglich, dass Ihr Template für die eine neuen Funktionen von Jomres nicht kompatibel ist. So sollten Sie die Datei auf der Festplatte entsprechend anpassen, um sicherzustellen, dass die neuen Funktionen nicht fehlen.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE','Abonnemente');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME','Name');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION','Beschreibung');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED','Veröffentlicht');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY','Häufigkeit');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD','Versuchs-Zeitraum');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT','Versuchs-Gebühr');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT','Komplette Gebühr');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT','Raum Limit'); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT','Objekt Limit');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC','Häufigkeit: M/Q/H/J Monatlich/Quartalsmässig/Halbjährlich/Jährlich');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC','Testzeitraum: Eingabe, 0 (null) für keine Angabe, 1 für einen Monat, 2 für zwei Monate usw.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE','Anmelden');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC','Bitte füllen Sie Ihre Benutzerinformation aus oder ergänzen Sie diese. Beachten Sie, dass sämtliche Felder benötigt werden.');
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME','Vorname');
define('_JRPORTAL_SUBSCRIBERS_SURNAME','Nachname');
define('_JRPORTAL_SUBSCRIBERS_ADDRESS','Addresse');
define('_JRPORTAL_SUBSCRIBERS_COUNTRY','Land');
define('_JRPORTAL_SUBSCRIBERS_POSTCODE','Postleitzahl');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1','Sie brauchen ein gültiges Abonnement, um neue Objekte zu erfassen. Im Moment haben Sie Abonnemente gezahlt für ');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2',' veröffentlichte Objekte. ');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3','Sie können die Anzahl Objekte erhöhen, indem Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">hier weitere Abonnemente kaufen.</a>');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4',' Sie haben ');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5',' Objektplätze verwendet. ');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6','Falls Sie eine Auflistung Ihrer Objekte ansehen möchten, klicken Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=listyourproperties">hier</a>. ');
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7','Um eine Auflistung der möglichen Abonnemente zu erhalten, klicken Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages">hier</a>. ');
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR','Sie können leider dieses Objekt nicht mehr erfassen, weil Sie die maximale Anzahl von Objekten erreicht haben.');
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED','Vielen Dank, dass Sie ein Abonnement auf unserem Server gelöst haben. Sobald die Rechnung als Bezahlt gekenntzeichnet ist (Es kann gelegentlich zu Verzögerungen bei PayPal kommen), können Sie<a href="'.JOMRES_SITEPAGE_URL.'&task=registerProp_step1">hier klicken, um mit der Erfassung Ihrer Objekte</a> fortzufahren.');
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE','Es tut uns leid, aber Sie haben sich noch nicht bei unserem Service registriert. Bitte lassen Sie es uns wissen, wenn wir Ihnen weiterhelfen können');
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH','Es tut uns leid, aber Sie haben die Anzahl möglichen Objekte, die Sie veröffentlichen können, erreicht. Sie können die Objktanzahl erhöhen, indem Sie <a href="'.JOMRES_SITEPAGE_URL.'&task=list_subscription_packages&Itemid='.$Itemid.'">hier weitere Abonnements-Pakete kaufen.</a> ');
define('_JRPORTAL_SUBSCRIPTIONS_USE','Verwenden Sie die Abonnierungs-Funktionalität');
define('_JOMRES_COM_NEWUSER','Erstelle bei der Buchung einen neuen Benutzer');
define('_JOMRES_COM_NEWUSER_DESC','Bei der Buchung eines unregistrierten Benutzers automatisch ein Benutzerkonto erstellen.');
define('_JOMRES_CLICKTOREGISTER','Klicken Sie hier, um Ihre Unterkunft zu registrieren');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE','Aktive Anmeldungen');
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID','Gateway Anmeldung ID');
define('_JRPORTAL_NEWUSER_SUBJECT','Vielen Dank für Ihre Buchung - Die Benutzerdetails folgen in Kürze');
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Kontrollzentrum');
define('_JOMRES_COM_FAUXHEADERS','Javascript Header im Body des HTML ausgeben?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Auf Ja setzen wenn Probleme mit Mootools und Jomres Abfragen im Internet Explorer auftreten. Damit wird die Ausgabe von JavaScript im Body des HTML statt im Head erzwungen. Das ist zwar kein valides HTML, scheint aber die Konflikte zwischen jQuery und Mootools zu lösen.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Rechnung anzeigen');
define('_JOMRES_MANAGER_SHOWINVOICES','Rechnungen anzeigen');
define('_JOMRES_USER_LISTMYPROPERTY','Meine Unterkunft in dieses WEB einfügen');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warnung: ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES','Auf Wunsch kann ein freies Paket auf dem System installiert werden indem sowohl der Testbetrag als auch der volle Betrag auf 0,00 gesetzt wird.');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID','Leider wird diese Paket ID nicht erkannt.');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE','Sie haben bereits ein freies Paket abonniert und können das kein zweites mal tun.');
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL',' Status <b>0:</b> Fällige Zahlung <b>1:</b> Erstellt <b>2:</b> Gelöscht <b>3:</b> Ablauf');
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS','Mein Konto');
define('_JOMRES_COM_YOURBUSINESS','Betriebsdaten');
define('_JOMRES_COM_YOURBUSINESS_NAME','Betriebsname');
define('_JOMRES_COM_YOURBUSINESS_VATNO','Steuernummer');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Gebäude');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: Die folgenden Steuerquoten sind für die Bedingungen des amerikanischen Markts entworfen. Wenn die Benutzung von festen Steuerquoten gewünscht sind (z.B. Mwst.) bitte eine Steuerquote in der folgenden Option wählen.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Rechnungsnummer ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Bitte Daten für die Blankobuchung festlegen. Wenn die passenden Daten gewählt sind den "Anwenden" Knopf klicken um erneut die Verfügbarkeit zu überprüfen. <br/> 
<br/> 
Falls für die Unterkunft eine oder mehrere Buchungen für den gewählten Zeitraum vorliegen kann nur gebucht werden bevor die entsprechenden Buchungen / Blankobuchungen gelöscht oder ausgebucht sind.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Leider ist eine Blankobuchung dieser Unterkunft mit den gewählten Daten nicht möglich.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Eine Blankobuchung für diese Unterkunft mit den gewählten Daten ist möglich.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Die Unterkunft ist zur Rechnungsstellung pro Person und Nacht konfiguriert aber es ist noch kein Gasttyp eingerichtet bzw. publiziert. Bitte einen oder mehrere Gasttypen erstellen und publizieren. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','So lange noch kein Tarif konfiguriert ist können keine Buchungen für diese Unterkunft angenommen werden.');
define('_JOMRES_EDITINGMODE_ON','Editiermodus aktiviert');
define('_JOMRES_EDITINGMODE_OFF','Editiermodus deaktiviert');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Variable Vorschüsse?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable Vorschüsse erlauben den gesamten Vorschuss zu fällig zu stellen wenn der Ankunftstag der Buchung unterhalb von N Tagen von heute an liegen. Auf Ja setzen um die Option zu aktivieren und die Anzahl der Tage unten einstellen. Damit wird zum Beispiel der komplette Buchungsbetrag sofort fällig wenn der Ankunftstag innerhalb von 60 Tagen liegt, andernfalls die Anzahlung nach den festgelegten Kriterien.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Die Anzahl der Tage innerhalb derer der gesamte Buchungsbetrag als Anzahlung fällig wird.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','E-Mails an den Besitzer an eine alternative Adresse richten?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Ja, falls E-Mails an den Besitzer an die unten stehende Adresse gehen sollen. Bei Nein gilt die im Unterkunfts-Konfigurationsbereich definierte Adresse.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative Adresse für E-Mails an den Besitzer.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Eine Bestätigungs-Mail zur wurde gesendet. Das Fenster kann jetzt geschlossen werden.');
define('_JOMRES_REALESTATE_TITLE','Immobilienverzeichnis');
define('_JOMRES_REALESTATE_YESNO','Ist diese Unterkunft Teil eines Immobilienverzeichnisses?');
define('_JOMRES_REALESTATE_YESNO_DESC','Ja, wenn die Unterkunft verkauft werden soll. Nein wenn es sich um ein Hotel/B&B/Gästehaus handelt, das, bzw. in dem, Räume zur Vermietung angeboten werden und dieses System für Buchungen verwendet werden soll.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Rechnung als bezahlt markieren');
define('_JOMRES_INVOICE_MARKEDASPAID','Rechnung als bezahlt markiert');
define('_JOMRES_APIKEY_REMAKE','Neuen API-Key erzeugen');
define('_JOMRES_AUTOTRANSLATE_TITLE','Google-Übersetzung initiieren?');
define('_JOMRES_AUTOTRANSLATE_DESC','Dieses Feature ist neu und experimentell. Benutzung auf eigenes Risiko. Der Zweck dieses Features ist, Googles Übersetzungstool zur automatischen Übersetzung einer bestimmten Unterkunft zu benützen. Es ist zu beachten, dass dieses Feature die gesamte Eingabe bearbeitet und wenn ein HTML-Editor zur Formatierung der Unterkunftseigenschaften benützt wurde geht die gesamte Formatierung verloren.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Einzelunterkunft-Installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Diese Option vereinfacht die Frontend-Ansicht für nicht autorisierte Anwender erheblich. Voreingestellt wird Jomres nicht mit einer Liste der Unterkünfte sondern mit dem Buchungsformular der ersten Unterkunft im System aufgerufen. Auch Unterkunfts-Manager erhalten nicht die Auswahlknöpfe für Unterkunft Eigenschaften und Hinzufügen. Das ist ideal wenn nur eine Unterkunft aufgelistet und Buchungen dafür angenommen werden sollen.<br/>');
define('_JOMRES_HTMP_PURIFIER','HTML Filterfunktion benutzen?');
define('_JOMRES_HTMP_PURIFIER_DESC','Hier die Nutzung der HTML-Filter-Bibliothek (http://htmlpurifier.org/) einschalten. Die Bibliothek wird als zusätzliche Sicherheitsmaßnahme bei der Verarbeitung von Ein- und Ausgabedaten benützt und es wird empfohlen sie zu aktivieren, obwohl sie mehr Speicher belegt.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Rechnungssaldo');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Saldo');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Hinweis! Sie benützen den Edit-Mode während der Globale Edit-Mode aktiviert ist. Das ist in Ordnung wenn Sie verstehen was Globaler Edit-Modus bedeutet. Falls nicht, könnten Sie sich selbst Probleme schaffen. Wenn Sie unsicher sind ob Sie Jomres auf diese Weise benützen sollten, informieren Sie sich <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">zu diesem Thema im Handbuch</a>.');
define('_JOMRES_SUPPORTKEY','Lizenzschlüssel');
define('_JOMRES_SUPPORTKEY_DESC','Die Support Lizenz Schlüssel Nummer (auch als Lizenz Nummer bezeichnet). Es ist eine aktuelle Lizenz nötig um Aktualisierungen und Plugins für Jomres laden zu können.');
define('_JOMRES_PERSONAL_DISCOUNT','Individueller Preisnachlass');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Unterkunftsregistrierungen auf ein Land beschränken?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Ja, um Unterkunftsregistrierungen auf das Land zu beschränken das im folgenden Feld ausgewählt wird.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Unterkünfte sind in diesem Land: ');
define('_JOMRES_JQUERYTHEME','Jquery Thema');
define('_JOMRES_JQUERYTHEME_DESC','Ein "jquery" Thema für die Darstellung der Unterkunfsteigenschaften auswählen.');
define('_JOMRES_PROPERTYNOTOUBLISHED','Leider steht diese Unterkunft im Moment nicht zur Verfügung.');
define('_JOMRES_REVIEWS','Bewertungen');
define('_JOMRES_REVIEWS_TITLE','Titel der Bewertung');
define('_JOMRES_REVIEWS_DATE','verfasst am ');
define('_JOMRES_REVIEWS_NOREVIEWS','Bisher gibt es noch keine Bewertung für diese Unterkunft.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Wollen Sie als erster diese Unterkunft bewerten?');
define('_JOMRES_REVIEWS_IAGREE','Ich bin mit dieser Bewertung nicht einverstanden');
define('_JOMRES_REVIEWS_IDISAGREE','Ich bin mit dieser Bewertung nicht einverstanden');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Durchschnitt der Stimmen: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Stimmen gesamt:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Neue Bewertung abgeben.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Um eine Bewertung abzugeben müssen Sie eingeloggt sein.');
define('_JOMRES_REVIEWS_REVIEWBODY','Teilen Sie uns Ihre Meinung zu dieser Unterkunft mit: ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Dieser Gast teilte uns mit: ');
define('_JOMRES_REVIEWS_PROS','Zustimmung: ');
define('_JOMRES_REVIEWS_CONS','Ablehnung: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Übermittelt am: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','Sie haben diese Unterkunft bereits bewertet. Sie können keine zweite Bewertung dieser Unterkunft abgeben.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sie können leider keine Bewertungen in diesem WEB abgeben.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Klicken um die Bewertungen zu sehen');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' Gäste stimmen dieser Bewertung zu. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' Gäste stimmen dieser Bewertung nicht zu.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' Gast stimmt dieser Bewertung zu. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR',' Gast ist stimmt dieser Bewertung nicht zu.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Vielen Dank für die Teilnahme an dieser Bewertung.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Vielen Dank, aber Sie haben Ihre Meinung zu dieser Bewertung bereits mitgeteilt.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Bitte füllen Sie alle Felder aus.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Bitte fassen Sie Ihre Bewertung in einem Titel zusammen');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Bitte schreiben Sie eine ausführlichere Bewertung in der Textbox');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Bitte teilen Sie uns Ihre positiven Erfahrungen mit die Sie als unser Gast hatten');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Bitte schildern Sie uns die negativen Eindrücke bei Ihrem Aufenthalt');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Wurden Sie freundlich empfangen?');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Gefielen Ihnen die Räumlichkeiten?');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Bitte beschreiben Sie die Sauberkeit der Unterkunft');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Empfanden Sie die Unterkunft als angenehm oder eher nicht?');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Bitte bewerten Sie das Preis- Leistungsverhältnis');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Bitte bewerten Sie den Service');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Zusammenfassung Bewertung');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Ihre ausführliche Bewertung');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Vielen Dank für Ihre Bewertung.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Vielen Dank für Ihre Bewertung. Sie wird bald möglichst von einem unserer Moderatoren veröffentlicht.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Bewertungsfunktion von Jomres benützen?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Bewertungen automatisch veröffentlichen?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Falls nein müssen Bewertungen manuell veröffentlicht werden.');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Bewertungen in den Testmodus versetzen?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalerweise können Unterkunfts-Manager Unterkünfte nicht bewerten. Im Testmodus ist das möglich. Natürlich ist das in einem produktiven Umfeld nicht ideal.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Das ist eine Liste aller Unterkünfte. Auf die Unterkunft klicken um deren Bewertungen zu sehen. Dort können die Bewertungen veröffentlicht und gelöscht werden.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Anzahl unveröffentlichter Bewertungen');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Anzahl von Bewertungen');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Bewertung veröffentlichen/unveröffentlichen');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Bewertung löschen');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Über Bewertung berichten');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Übersicht der Berichte');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Bitte geben Sie Ihren Bericht ein');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Finden Sie in dieser Bewertung objektive Fehler oder Ungenauigkeiten? Schicken Sie einen Bericht und wir überprüfen das für Sie.');
define('_JOMRES_REVIEWS_SUBMIT','Abschicken');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Bericht erstellt von ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Berichte werden von Benutzern erstellt die mit einer Bewertung nicht einverstanden sind. Die einzige Möglichkeit einen Bericht zu entfernen ist die beanstandete Bewertung zu löschen.');
define('_JOMRES_REVIEWS_RATING','Bewertung (1 = schlecht 10 = ausgezeichnet) ');
define('_JOMRES_REVIEWS_RATING_1','Freundlichkeit ');
define('_JOMRES_REVIEWS_RATING_2','Situation ');
define('_JOMRES_REVIEWS_RATING_3','Sauberkeit ');
define('_JOMRES_REVIEWS_RATING_4','Unterkunft ');
define('_JOMRES_REVIEWS_RATING_5','Preiswürdig ');
define('_JOMRES_REVIEWS_RATING_6','Service ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Bewertet von : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Bewertungen verstecken');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Buchungsformular in der Unterkunftsbechreibung anzeigen?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ja, um das Buchungsfomular in der Unterkunftsbeschreibung anzuzeigen. Mit Nein wird ein Link zum Formular statt des Formulars angezeigt.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Steuer inbegriffen?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Ja, falls Steuer im Preis enthalten, sonst Nein.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Steuer Extras:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Die Wochentagsfelder bieten die Möglichkeit für jeden Tag der Woche einen speziellen Preis zu setzen. Ein Klick auf das entsprechende Feld setzt den Preis für diesen Wochentag im gesamten Zeitraum.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Die Datumsfelder und das Preisfeld bietet die Möglichkeit einen Preis für einen gegebenen Zeitraum fest zu legen. Nach der Auswahl von Anfangs- und Enddatum den Preis eingeben und "Preis setzen" klicken.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Beginn Zeitraum');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Ende Zeitraum');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Preis');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Preise setzen');
define('_JOMRES_PARTNERS_TITLE','Partner');
define('_JOMRES_CALENDAR_TODAY','Heute');
define('_JOMRES_CALENDAR_PREV','Vorhergehender');
define('_JOMRES_CALENDAR_NEXT','Nächster');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Zimmer ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','Gast(Gäste). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Hier die Verteilung der Gäste auf ihre Zimmer. Sollten Sie eine Änderung wünschen können Sie das nach Abschluss der Buchnung im direkten Kontakt mit dem Unterkunftsgeber regeln. Beachten Sie, dass dadurch zusätzliche Kosten entstehen können.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED','Note that your property is not yet published, only you can see the property, site visitors will not see it');
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Standard Suchergebnis Sortierreihenfolge');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Ändern Sie diese Option, um die Reihenfolge der standardmäßigen Präsentation der Suchergebnisse zu ändern.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Zeige Suchergebnis-Sortierreihenfolge dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Zimmer Anzeigetyp Stil');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','Wenn im Buchungsformular als Anzeigetyp „Klasisch“ gewählt wurde, bieten Sie Gästen einzelne Zimmer an. Beim Anzeigetyp „Zimmertypen“, wählen Gäste dagegen die Anzahl Zimmer vom Typ X (z.B. 2x Doppelzimmer).');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Klassisch');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Zimmertypen');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','Verfügbarkeit (erneut) prüfen');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Wiederherstellung Freie Zimmer Liste');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Berechnung der Summen');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Abgeschlossene Aktualisierung');
define('_JOMRES_COM_CALENDAR_STARTDAY','Kalender Wochenbeginn, Sonntag oder Montag');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Nur Unterkunft Gäste können rezensieren?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Setzen Sie diese auf Ja, wenn Sie Bewertungen nur von Gästen erlauben möchten, die bereits Gast in dieser Unterkunft waren.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Pro Zimmer');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Gäste pro Zimmer : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Gäste pro Buchung : ');
define('_JOMRES_NUMBER_OF_ROOMS','Anzahl der Zimmer');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tarif Standard Preis');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC','Dies gilt nur für neue Tarife');
define('_JOMRES_MICROMANAGE_YEARSTOSHOW','Jahre die gezeigt werden');
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC','Definiert die Anzahl Jahre die angezeigt werden, bei der Bearbeitung eines "micromanage" Tarifes');
define('_JRPORTAL_MONTHS_LONG_0','Januar');
define('_JRPORTAL_MONTHS_LONG_1','Februar');
define('_JRPORTAL_MONTHS_LONG_2','März');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','Mai');
define('_JRPORTAL_MONTHS_LONG_5','Juni');
define('_JRPORTAL_MONTHS_LONG_6','Juli');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','Oktober');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','Dezember');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS','Property-Management-Prozess');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC','Es gibt verschiedene Management-Prozesse in Abhängigkeit von der Art und Weise wie sie ihre Immobilie/Firma anzeigen möchten.');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL','Vermietung');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC','Wählen sie die Vermiet-Option, wenn sie Zimmer in einer Immobilie vermieten (z.B. Hotel/B & B/Villa/Wohnung)');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE','Immobilien/einfache Auflistung');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC','Wählen Sie die Immobilien-Option, wenn sie überhaupt keine Buchungs-Funktionalität anbieten möchten (z.B. Verkauf eine Immobilie/von Produkten).');

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Setzen Sie dies auf Ja, um die Anzahl der verfügbaren Optionen für Hausverwalter im Abschnitt der allgemeinen Konfiguration zu reduzieren. Dies ist nützlich, wenn Sie nicht möchten, dass Hausverwalter an zu vielen Einstellungen rumspielen, stattdessen können sie die Datei jomres_config.php bearbeiten, um die Standard-Eigenschaft Optionen zu definieren.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Bitte wählen Sie eine Option für Ihre Buchung');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Schaltet die HTML-Editoren in der Detailseite Unterkunft, im Editiermodus, an. Darüber hinaus ist, wenn diese auf Nein gesetzt ist, dann werden alle html Tags außer P und BR aus dem eingegeben und dem angezeigten Text entfernt.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT','Property Management Anzeige');
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW','Seitenvorschau');
define('_JOMRES_COM_TIMEZONE_SWITCHER','Zeige den Zeitzonen-Wechsler in der Immobilienmanager Symbolleiste?');

define('_JOMRES_PARTNER_DISCOUNT','Partner Nachlass ');
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE','Suche Benutzer');
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS','Geben Sie ein paar Zeichen ein, um einen Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Partner hinzugefügt und Sie werden auf die nächste Seite geführt, auf der Sie dem Benutzer Unterkünfte und Nachlässe zuordnen können.');
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE','Bestehende Partner');
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS','Wählen Sie einen Partner, welcher zur Partner-Administration-Seite geführt werden soll.');

define('_JOMRES_PARTNER_SHOW_TITLE','Partner :');
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE','Suche nach einer Unterkunft');
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS','Geben Sie ein paar Zeichen des Namens der Unterkunft ein und wählen Sie eine Unterkunft aus.<br/> Wenn Sie eine Unterkunft auswählen, wird diese dem Partner-Portfolio hinzugefügt. Wie auch immer, werden die Partner jedoch keine Rabatte genießen, diese müssen Sie selbst einrichten.');
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES','Aktuelle Objekte');
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS','Klicken Sie auf eine Unterkunft um die Partner-Nachlass-Einstellungen für diese Unterkunft zu bearbeiten.');


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE','Gesperrt? <br/>(Auswählen um einen Manager zu sperren, dies deaktiviert dessen Unterkünfte.) ');
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO','Klicken Sie auf das Sperren-Symbol (das Symbol mit dem Mann und dem grünen Häkchen), um einen Manager zu sperren. Dies bedeutet, dass der Manager nicht in der Lage ist seine Unterkunft-Management-Funktionen ausführen, und alle seine Unterkünfte werden deaktiviert. „Super-Unterkunfts-Manager“ können nicht gesperrt werden.');
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED','Dieses Konto wurde gesperrt, es ist derzeit nicht möglich, Ihre Unterkunft(e) mit diesem Konto zu verwalten.');
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE','Manager Konto gesperrt');
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE','Manager Konto wieder eingesetzt');
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL','Bitte beachten Sie, dass Ihr Hausverwalter Konto gesperrt wurde. So lange Ihr Konto gesperrt ist, sind Sie nicht in der Lage irgendeine Management-Funktion auszuüben.');
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL','Bitte beachten Sie, dass Ihr Manager Konto jetzt aktiv ist. Sie können nun damit fortfahren alle Unterkunfts-Management-Funktionen auszuführen. Bitte melden Sie sich mit Ihrem Konto an und stellen Sie sicher, dass alle entsprechenden Unterkünfte aktiv sind. Danke.');
define('_JOMCOMP_MYUSER_REMOVE','Favoriten entfernen');
define('_JOMRES_DATA_ARCHIVE_TITLE','Buchungsdatenarchiv');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Das Buchungsdatenarchiv ist ein Roh-Daten-Auszug der Buchungsinformationen die nach dem Absenden des Formulars gespeichert wurden. Fahren Sie über ein Datum  um die Roh-Daten zu sehen. Die Informationen werden in der Tabelle XXX__jomres_booking_data_archive gespeichert.');
define('_JOMRES_MY_ACCOUNT_EDIT','Konto bearbeiten');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE','Benutzer suchen');
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS','Geben ein paar Zeichen des Benutzernamens ein, um nach einem Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Manager hinzugefügt und Sie werden auf die nächste Seite weitergeleitet, auf der Sie Eigenschaften und Zugriffsrechte für den Benutzer vergeben können.');
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE','Bestehende Manager');
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS','Wählen Sie einen Manager, der zur Manager Administrations-Seite genommen werden soll.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER','Suche nach Gästezahlen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC','Zeige die Suche nach Anzahl-Gäste Dropdown');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS','Suche nach Sternen');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC','Zeige die Suche nach Anzahl-Sterne Dropdown');
define('_JOMRES_SEARCH_GUESTNUMBER','Anzahl der Gäste');
define('_JOMRES_SEARCH_STARS','Anzahl der Sterne');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE','Kommissionsrechnungen');
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED','Anzahl der Unterkünfte');

// 4.6.1
define('_JOMRES_CONFIG_JQUERY','Lade Jomres jQuery Bibliothek?');
define('_JOMRES_CONFIG_JQUERY_DESC','Sie können dies auf NEIN setzten, wenn Sie eine Vorlage (Template) verwenden die jquery verwendet. Dies KÖNNTE jquery Konflikte bei einigen Vorlagen lösen, aber nicht bei allen.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Wenn Sie Joomfish verwenden, sollten Sie diese Option auf NEIN setzten und stattdessen den „Joomfish Language Switcher“ verwenden. Der Umschalter ist im Administrator-Bereich immer aktiviert, da er benötigt wird, wenn die Funktion der Label Übersetzungen benutzt wird.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Vorschaubilder von hochgeladenen Bildern werden automatisch erstellt.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Kleine Vorschaubilder max. Breite (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Kleine Vorschaubilder werden in der Unterkunft-Listenansicht verwendet, während mittelgroße Vorschaubilder im Unterkunfts-Kopf verwendet werden.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Kleine Vorschaubilder max. Höhe (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Mittelgroße Vorschaubilder max. Breite (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Mittelgroße Vorschaubilder max. Höhe (px).');
define('_JOMRES_TOUCHTEMPLATES','Beschriftungs-Übersetzung');

define('_JRPORTAL_ROI_TAB','ROI');
define('_JRPORTAL_INVOICES_COMMISSION_USE','Provisions-Funktionalität verwenden?');
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC','Setzen Sie dies auf Ja, um die Manager-Provision-Rechnungen zu zeigen, die bereits aufgeschüttet wurden.');
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS','Provisionsabrechnungen für Manager-Buchungen erstellen?');
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC','Wenn ein Manager eine Buchung vornimmt, bedeutet das, dass auch eine Provisions-Rechnungsposition erstellt wird?');
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT','Eine neue Provisions-Rechnung wurde erhoben');
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE','Eine neue Provisions-Rechnung wurde erhoben, die Ihre Aufmerksamkeit erfordert. Bitte klicken Sie auf den folgenden Link, um die Rechnung anzuzeigen (möglicherweise müssen Sie sich zuerst anmelden).');
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND','Soll ein Manager, bei Rechnungen die als ausstehend markiert sind, automatisch gesperrt werden?');
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD','Automatischer Sperr-Grenzwert');
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC','Dieser Grenzwert beträgt die Anzahl an Tagen, die ein Manager Zeit hat um eine Rechnung zu bezahlen, bevor er gesperrt wird und seine Unterkünfte deaktiviert werden.');

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Sprachkontext');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Benutzen Sie diese Option um den Sprachenkontext der Site zu ändern. Diese Funktionalität erlaubt es Jomres Etiketten zu benutzen die dem aktuellen Fokus entsprechen. Wenn Sie z.B. ein Makler von Yachten sind, so erlaubt eine Änderung des Kontextes Jomres, das anzeigen von Etiketten aus einer anderen Sprachen-Datei. Zum Beispiel, wenn Sie den Kontext auf Yacht-Makler ändern, so wird Jomres zuerst versuchen die aktuelle Sprache zu finden, danach im Ordner /jomres/languages nach einem Unterverzeichnis mit dem Namen „yachtmakler“ suchen. Wenn die Datei der aktuellen Sprache existiert, so wird diese verwendet. Falls nicht, so versucht Jomres die englische Sprachdatei aus dem gleichen Verzeichnis zu verwenden. Falls dies fehlschlägt, so verwendet Jomres die Sprach-Datei der aktuell ausgewählten Sprache aus dem Ordner /jomres/languages.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Erweiterte Site Konfiguration');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Setzen Sie diese Option auf Ja, wenn Sie die erweiterten Website Konfigurationsmöglichkeiten nutzen möchten. Wenn Sie gerade erst damit beginnen mit Jomres zu arbeiten, empfehlen wir Ihnen für das erste die Einstellung auf Nein zu belassen, da die Standard-Installation ausreichend genug ist um damit zu starten. Stattdessen sollten Sie Jomres dem Hauptmenü hinzufügen und sich als „admin“ im Frontend anmelden und beginnen Ihre Unterkünfte zu konfigurieren. Bitte beachten Sie, dass viele der erweiterten Optionen nur Jomres Silver Installationen zur Verfügung stehen. Jomres Lite Benutzer sind deshalb nicht in der Lage, den vollen Nutzen aus den Funktionen zu erhalten, die sie aktivieren.');

define('_JOMRES_CONFIG_JQUERY_UI','Lade Jomres jQuery UI Bibliothek?');

define('_JOMRES_SORTORDER_PRICE_DESC','Preis (höchster zuerst)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (niedrigster zuerst)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Preisübersicht und Schätzungen sollten als: pro Nacht, pro Woche oder pro Monat bepreist werden?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Pro Nacht');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Pro Woche');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Pro Monat');
define('_JOMRES_BOOKINGFORM_PERPERSON','Pro Person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','Woche(n) an ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','Monat(e) an ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Wie soll die Suchoption für die Anzahl Menschen arbeiten?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Betrifft alle Such-Module. Wenn Sie die Funktion „Suche nach Anzahl Gäste“ nutzen, soll die Suchfunktion nach Unterkünften suchen, deren Tarife Anzahl Gäste kleiner gleich, exakte Anzahl Personen oder größer gleich entspricht? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Bitte warten Sie, Ihre Buchung wird bearbeitet und Sie werden auf die Paypal-Website umgeleitet.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Wenn Sie nicht innerhalb von 5 Sekunden automatisch zu Paypal weitergeleitet werden...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Klicken Sie hier');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM','Buchung gültig ab');
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO','Buchung gültig bis');
define('_JRPORTAL_COUPONS_GUESTNAME','Gastname');
define('_JRPORTAL_COUPONS_DESC_478','Gutscheincodes können generiert und an Gäste gegeben werden, als Anreiz um Buchungen vorzunehmen.<br/>Gültig von und bis Daten beziehen sich auf Daten an denen eine Buchung gemacht werden kann, während Buchung gültig von/bis Daten, sich auf Daten beziehen, welche die Buchung abdecken muss, damit der Gutschein gültig ist. Wenn eine Buchung außerhalb dieses Zeitraums fällt, so gelten die normalen Tarife für die Tage die außerhalb des Zeitraumes liegen.<br/>Wenn Sie die Buchung einem bestimmten Gast zur Verfügung stellen möchten, wählen Sie den Namen des Gastes aus der Dropdown-Liste aus, um den Gutschein auf diesen Gast zu begrenzen.');
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK','Mit Ihrem Gutschein, wurde diese Buchung reduziert von ');
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO',' auf ');

define('_JOMRES_CONFIG_JQUERY_UI_DESC','Setzen Sie dies auf Nein, um das Laden der beiden jQuery UI Javascript und CSS-Dateien zu deaktivieren.');
define('_JOMRES_CONFIG_JQUERY_UI_CSS','Lade Jomres jQuery UI CSS Bibliothek?');
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC','Setzen Sie dies auf Nein, um nur die jQuery UI CSS-Datei zu deaktivieren.');

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX','Gesamt inkl. MwSt.');
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unveröffentlichte Unterkunft');

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

define('_JOMRES_MYPROPERTIES','My businesses');


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


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Twitter Bootstrap templates");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Joomla 2.5 only option. Setting this to Yes will tell Jomres to use it's bootstrap templates (frontend only). In Joomla 3 this option will be hidden and the switch is done automatically.");

define('COMMON_ACTION',"Action");
define('COMMON_VIEW',"View");

define('BACKTOTOP',"Back to top");
