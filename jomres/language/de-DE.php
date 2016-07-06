<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
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
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife im Rahmen, nicht als PopUp anzeigen?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adressinformation' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Kurzinformationen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Zimmer und Verfügbarkeit anzeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Zeigt Preise an' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link anzeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformationen unter diesem Link anzeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verfügbarkeit unter diesem Link anzeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Preise unter diesem Link anzeigen' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Tarifmodell wählen' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/>Sind die entsprechenden Zeiträume ausgewählt, den blauen Button drücken um die Sperrung zu bestätigen.' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt.</b> Bitte neu einloggen.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Online Zahlung?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'JA markieren um Online-Zahlungen zu akzeptieren. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise wählen.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin-Einstellung geändert' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin-Einstellung eingefügt' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Kreditkarte gelesen' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Kreditkarte aktualisiert' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Kreditkarte bearbeiten' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Icongröße bearbeiten' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Unterkunftbilder hochladen' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Vorhandene Bilder' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Diaschau' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diaschau anzeigen?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diaschau in der Unterkunft eingebettet?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Höhe des Vorschaubilds' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Diaschau' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Leider kein Bild für dieses Unterkunft verfügbar' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Preisen anzeigen?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'PopUps erlaubt?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Falls auf NEIN gesetzt, werden Links, die normalerweise in einem PopUp geöffnet werden, im aktuellen Rahmen der Seite geöffnet. TESTPHASE! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Upload von Bildern' );
jr_define( '_JOMRES_A_TABS_MISC', 'Diverses' );
jr_define( '_JOMRES_A', 'Konfiguration' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Allgemeine Unterkünfteigenschaften benutzen' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'JA markieren, falls alle Unterkünfte die vom Webmaster voreingestellten Eigenschaften verwenden müssen.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Icon' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Gewünschtes Such-Plugin auswählen.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Die Suche zeigt leider kein Ergebnis. Eingabe ändern und erneut versuchen.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Sind Sie sicher?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Sicherheitscode' );
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Schnellreservierung' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Benutzerprofile anzeigen und Rechte setzen' );
jr_define( '_JOMRES_COM_MR_QUICK______DESC', 'Leer lassen' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Allgemeine Einstellungen' );
jr_define( '_JOMRES_COM_MR_BACK', 'Zurück' );
jr_define( '_JOMRES_COM_MR_YES', 'Ja' );
jr_define( '_JOMRES_COM_MR_NO', 'Nein' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Neu' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Neue Unterkunft' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Neue Unterkünfteigenschaften' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Neuer Gast' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Sichern' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nachname' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ankunftsdatum' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Abreisedatum' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Leer' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Benutzerrechte definieren' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Name' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Benutzername' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'momentan autorisiert' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Standardhotel' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'ändern' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Zugangsrechte' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Benutzer geändert' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Rezeption' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Hotelmanager' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Buchungs-Administration' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Buchung ändern für ' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Ankunft/Abreise' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Gast' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Zimmer' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Bezahlung' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Vorname' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nachname' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Besondere Wünsche' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Bitte beachten Sie, dass manche Sonderwünsche Zusatzkosten verursachen können.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Buchung stornieren' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Straße' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ort' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PLZ' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-Mail-Adresse' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Tage bis zur Ankunft' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Buchung kann nicht storniert werden, da der Gast schon eingecheckt ist.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Diese Buchung stornieren.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Stornierung bestätigen' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Buchung storniert.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Art der Buchung' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Verdeckt' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Rezeption' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Zimmername' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Zimmernummer' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Etage' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Behindertengerecht?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. Pers.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Zimmerkategorie' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Beschreibung Zimmerkategorie' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Liste Zimmereigenschaften' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Anzahlung geleistet' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Anzahlung eingeben' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Gesamtbetrag' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Anzahlung Ref.' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Buchungsnummer' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Anzahlung' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Anzahlung gespeichert' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Freie Zimmer' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Unterkunft' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Art des Zimmers' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Details Gast' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Vorname' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Nachname' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nr.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Straße' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ort' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'PLZ' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kreditkartennr.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'gültig von' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'gültig bis' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Ausgabenummer (falls vorhanden)' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Inhaber der Kreditkarte' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Schnellauswahl Preise' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Anzahl Tage' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Anzahl Gäste' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Gesamt' );
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Zimmer- und Unterkünfteinstellungen anzeigen' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Zimmer' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Kategorien' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Unterkunft' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Unterkunft Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Zimmer' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Art' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Name' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nummer' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Etage' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Behindertengerecht?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. Belegung' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Zimmer hinzugefügt' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Bearbeiten' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Zimmereigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Beschreibung der Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Zimmereigenschaften hinzugefügt' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Zimmereigenschaften aktualisiert' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Zimmer Kategorien' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Zimmerkategorie, Kurzfassung' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Beschreibung Zimmerkategorie' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Zimmerkategorie hinzugefügt' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Zimmerkategorie aktualisiert' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Bearbeiten' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Name' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Straße' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ort' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Land' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'PLZ' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-Mail' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Unterkunft hinzugefügt' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Unterkunft aktualisiert' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Unterkunft Eigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Unterkünfteigenschaften, Kurzfassung' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Beschreibung  der Unterkünfteigenschaften' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Unterkünfteigenschaften hinzugefügt' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Unterkünfteigenschaften aktualisiert' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Preise' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Preis' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Beschreibung' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Gültig von' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Gültig bis' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Preis pro Nacht' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Tage min.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Tage max.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. Belegung' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. Belegung' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Zimmerkategorie' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'pP/pN ignorieren' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Wochenenden erlauben' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarif hinzugefügt' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarif aktualisiert' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Bearbeiten' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Duplizieren' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif gelöscht' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Tarif bearbeiten' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Feiertage' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Buchung gespeichert' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Gast einchecken' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Gast auschecken' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Buchungen auflisten' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Neue Buchungen auflisten' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Dashboard' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Übersicht Gäste' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Unterkünfte bearbeiten' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verfügbarkeit prüfen' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Daten bestätigen' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Vorname' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nachname' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Straße' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ort' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PLZ' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Leider sind keine Zimmer verfügbar, die den Kriterien entsprechen.' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', 'Vielen Dank für Ihre Buchung. Wir werden Sie in Kürze kontaktieren, um Ihre Zahlungsmethode zu bestätigen. <br><br> <b>Bitte beachten Sie, dass dies nur eine vorläufige Buchung ist. Diese ist abgeschlossen, sobald Sie eine schriftliche Bestätigung von uns erhalten haben. <br><br>Falls Sie Ihre Anzahlung per PayPal angewiesen haben, ist die Transaktion bereits abgeschlossen, und eine Einzahlungsbestätigung wurde an Ihre angegebene E-Mail-Adresse versandt. Sie können sich nun mit Ihren Zugangsdaten bei www.paypal.de einloggen, um die Details einzusehen. </b><br>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Gast einchecken' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Gast auswählen' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Gast eingecheckt' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Heute kommen keine Gäste an.' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Gast auschecken' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Heute reisen keine Gäste ab.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Zuschläge' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Preise' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Rabatte' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Datei-Upload' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'aktuelle Einstellung' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Erklärung' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Einzelzimmerzuschläge' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Hier Ja einstellen, wenn Einzelzimmerzuschläge berechnet werden sollen.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Einzelzimmerzuschlag' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Wird die Anzahlung prozentual berechnet?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Ist die Anzahlung ein prozentualer Anteil des Gesamtbetrages? Wenn NEIN, wird ein pauschaler Anzahlungsbetrag addiert.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Preis Anzahlung' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'Pro Person, pro Nacht' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Hier Ja einstellen, wenn die Preise pro Person / pro Nacht berechnet werden soll. Wenn NEIN, werden die Kosten pro Zimmer / pro Nacht berechnet.' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Dateigröße' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maximale Dateigröße in Kilobyte' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Belegt' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservierungsdaten:' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Wir möchten Sie darauf hinweisen, dass Sie mit dieser Buchung einen rechtsgültigen Vertrag eingehen. Sollten Sie also - aus welchem Grund auch immer - Ihre Buchung stornieren oder den Zeitraum Ihres Aufenthalts verkürzen müssen, könnten trotzdem die vollen Kosten fällig werden.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornierungs- und Kürzungsrichtlinien</i><br> Wenn Sie Ihren Urlaub absagen, muss diese Absage schriftlich bestätigt werden. Nachfolgend finden Sie eine Übersicht über die anfallenden Stornierungskosten:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Ab 14 Tagen im Voraus' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Bestätigungsmail ausdrucken' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Rechnungsausdruck' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Anzahl Nächte: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Vereinbarte Bedingungen: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Preis pro Nacht: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Gesamtbetrag' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Vielen Dank, dass Sie unser Kunde sind am' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Wir hoffen, Sie hatten einen angenehmen Aufenthalt.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Rechnung ausdrucken' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Extras zur Rechnung hinzufügen' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Beschreibung der Extras' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Preis Extras' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Weitere berechnete Posten' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Weitere berechnete Posten, Gesamtbetrag: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Posten zur Rechnung hinzugefügt' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Bild hochladen' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Datei hochladen' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Nur Dateien der folgenden Formate dürfen hochgeladen werden:/n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Bitte Datei auswählen.' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'Der Dateiname darf nur alphanumerische Zeichen enthalten, bitte auch keine Leerzeichen verwenden.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'Diese Datei überschreitet leider die erlaubte Maximalgröße' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'Datei wurde NICHT hochgeladen.' );
jr_define( '_JOMRES_FILE_UPDATED', 'Datei erfolgreich aktualisiert.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS-Kalender' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'Sprachdatei für JS-Kalender' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Hier können Sie die Sprachdatei für den Javascript-Kalender auswählen. Bitte beachten Sie, dass es momentan Probleme mit diesen Sprachdateien gibt. Aus unerfindlichen Gründen scheinen bisher nur die englische und deutsche Version zu funktionieren. Für weitere Informationen besuchen Sie bitte <a href="http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse" target="_blank">die Website der Entwickler</a>.' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'CSS-Datei für JS-Kalender' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'CSS-Datei auswählen, die das Design des Javascript-Kalenders bestimmt.' );
jr_define( '_JOMRES_COM_A_ODDS', 'Verschiedenes' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Fehlerüberprüfung ein?' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Hier JA einstellen, um das Script vor der Inbetriebnahme auf Fehler zu prüfen. Bitte im laufenden Betrieb auf NEIN stellen - Besuchern wird sonst ein Datenkauderwelsch angezeigt!' );
jr_define( '_JOMRES_FILE_DELETE', 'Bild löschen' );
jr_define( '_JOMRES_FILE_DELETED', 'Bild gelöscht' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY', 'Alle Unterkünfte' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Zimmer löschen' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Dieses Zimmer kann nicht gelöscht werden, da hierfür bereits Buchungen vorliegen. Bitte diese Buchungen stornieren und erneut versuchen.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Zimmer gelöscht' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Zimmereigenschaften löschen' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Diese Zimmereigenschaft kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Eigenschaft bei diesen Zimmern entfernen und erneut versuchen.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Zimmereigenschaften gelöscht' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Unterkunft-Eigenschaften löschen' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Diese Unterkunft-Eigenschaft kann nicht gelöscht werden, da sie bereits einigen Unterkünften zugeordnet wurde. Bitte diese Eigenschaft bei diesen Unterkünften entfernen und erneut versuchen.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Unterkunft-Eigenschaft gelöscht' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Zimmerkategorien löschen' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte diese Zimmer einer anderen Kategorie zuordnen und erneut versuchen.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einem Tarif zugeordnet wurde. Bitte den Tarif einer anderen Zimmerkategorie zuordnen und erneut versuchen.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Zimmerkategorie gelöscht' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Unterkunft löschen' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Unterkunft gelöscht' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Sie haben nicht die erforderlichen Zugriffsrechte, um dieses Unterkunft zu löschen.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Breite der großen Bilder' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Link zur Landkarte' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Unterkunft-Beschreibung' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-In Check-Out Zeiten' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivitäten in der Umgebung' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Anfahrt' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Flughäfen' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Weitere Verkehrsanbindungen' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Richtlinien, Haftungsausschluss usw.' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresse' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Besucher sollen online buchen können' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Hier JA einstellen, um sicherzustellen, dass die Besucher online Zimmer buchen können. Falls nicht erwünscht ist, dass Zimmer übers Internet gebucht werden können, bitte auf NEIN stellen.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Fixe Buchungszeiträume?' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Wenn hier JA eingestellt ist, werden die Zimmer für voreingestellte Zeiträume gebucht.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Buchungszeitraum: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Buchungen ' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximale Anzahl Buchungsperioden. Beispiel: 3 mal 7 Buchungsperioden = 21 Tage.' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Ist dies ein Ein-Zimmer-Unterkunft?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'JA einstellen, wenn z.B. statt einzelner Zimmer eine komplette Unterkunft vermietet werden soll.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Buchung überprüfen' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Buchung bestätigen' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Montag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Dienstag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Mittwoch' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Donnerstag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Freitag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Samstag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Sonntag' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Mo' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Di' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mi' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Do' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Fr' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sa' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'So' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Kalender' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Schriftfarbe für den aktuellen Tag' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Schriftfarbe für Tage des aktuellen Monats' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Schriftfarbe für Tage des vorherigen und nächsten Monats' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Zellenfarbe für Tage des aktuellen Monats' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Zellenfarbe für Tage des vorherigen und nächsten Monats' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Zellenfarbe für belegte Tage' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Zellenfarbe für vorreservierte Zimmer (Buchungen, für die noch keine Anzahlung geleistet wurde)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Zellenfarbe für Tage in der Vergangenheit' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Belegt / nicht buchbar' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Frei und buchbar' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Vorreserviert' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Voreingestellter Ankunftstag' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Nur für Seiten, die fixe Buchungszeiträume anbieten. Wochentag wählen, an dem angereist werden muss.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Voreingestellter Ankunftstag ist' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Buchungszeitraum (Tage)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Verfügbarkeitskalender anzeigen?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Hier JA einstellen, um den Verfügbarkeitskalender anzuzeigen.' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Verfügbarkeit' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Um zum Buchungsformular zu kommen bitte auf ein freies Datum klicken.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Blankobuchungen' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Neue Blankobuchung' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Gast löschen' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Gast gelöscht' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Dieser Gast konnte nicht gelöscht werden, weil noch Buchungen von ihm vorliegen. Buchungen stornieren und erneut versuchen.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Tatsächliche Zimmerkosten: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Raucher' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Egal' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Ausgabeformat Kalender' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Ausgabeformat für das Datum im Kalender ändern.' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Eingabeformat Kalender' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Eingabeformat für das Datum im Kalender ändern.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Bei fixen Buchungszeiträumen Kurzunterbrechungen erlauben' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Länge der Kurzunterbrechung (Tage)' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Veröffentlicht' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'PayPal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Änderungsprotokoll' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Uhrzeit' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Benutzer (Benutzername)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Arbeitsschritt' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Details anzeigen' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Nach Datum filtern' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Nach Benutzernamen filtern' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Nach Arbeitsschritt filtern' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ankunft steht aus' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Reist heute an' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktueller Gast, anwesend' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Reist heute ab' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Abreise überfällig' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Ist nicht angekommen' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Unbekannter Benutzer' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Erstelltes Zimmer' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualisiertes Zimmer' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Gelöschtes Zimmer' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Zimmereigenschaft erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Zimmereigenschaft aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Zimmereigenschaft gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Zimmerkategorie erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Zimmerkategorie aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Zimmerkategorie gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Unterkunft erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Unterkunft aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Unterkunft gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Unterkunft-Eigenschaft gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Unterkunft-Einstellungen bearbeitet' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Unterkunft veröffentlicht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarif erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarif aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Tarif gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Servicegebühren hinzugefügt' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Gast eingecheckt' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Gast ausgecheckt' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Anzahlung eingegeben' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Gast erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Gast aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Gast gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Zimmer gebucht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Zuschlag erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Zuschlag aktualisiert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Zuschlag gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Zuschlag veröffentlicht' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Blankobuchung getätigt' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Blankobuchung gelöscht' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Zuschläge' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Beschreibung' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Name' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Preis' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Zuschlag aktualisiert' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Zuschlag bearbeiten' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Zuschlag gelöscht' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Zuschläge bearbeiten' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Zuschläge bei der Buchung anzeigen?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Hier JA einstellen, um eventuelle Zuschläge anzuzeigen, die dem Gast angeboten werden sollen.' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Optionale Zuschläge.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Startdatum<br> Blankobuchnung - ab wann ist reserviert' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Enddatum<br> Blankobuchung - ab wann ist wieder frei' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Blankobuchungen bearbeiten' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Beim Versuch, dieses Zimmer zu buchen, ist ein Fehler aufgetreten. Eines oder mehrere der ausgewählten Zimmer sind nicht frei.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Zimmer enthalten in der Blankobuchung' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Blankobuchung anzeigen' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Keine Blankobuchungen vorhanden' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Anzahl Sterne' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Raucher/Nichtraucher anzeigen?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Hier JA einstellen, um eine Auswahl Raucher/Nichtraucher anzuzeigen.' );
jr_define( '_JOMRES_COM_A_RESET', 'Zurücksetzen' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Buchung storniert.' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Suchen nach:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Raucher / Nichtraucher Voreinstellung' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Währungssymbol' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'z.B. &amp;euro&#59; Bitte beachten, dass hier der korrekte HTML-Code für das Währungssymbol eingeben werden sollte. Für eine Liste dieser Codes bitte <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a> besuchen.' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Währungscode' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'z.B. GBP. Dies wird benötigt, wenn PayPal benutzt werden soll. Für eine Liste dieser Codes bitte <a href="http://www.xe.com/iso4217.htm">XE.com</a> besuchen.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Information' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Vorausbuchungszeitraum einschränken?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Hier JA einstellen, wenn der Vorausbuchungszeitraum einschränkt werden soll. (Im nächsten Feld kann der maximale Vorausbuchungszeitraum in Tagen eingeben werden.) Wenn hier JA eingestellt ist, und ein Gast versucht, früher als x Tage im Voraus zu buchen, wird sein Ankunftsdatum auf das heutige Datum zurückgesetzt.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Vorausbuchungszeitraum eingeschränkt auf Tage:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>Hinweis: Es wird nicht empfohlen, beide der folgenden Optionen auf JA zu stellen. Es sollte nach Möglichkeit nur eine der beiden Steueroptionen benutzt werden. </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Steuern' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Steuern' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Entwickelt für den amerikanischen Markt. Diese Steuern werden dem Gast auf die Zimmer erhoben. Es kann zwischen Pauschalbeträgen, prozentualem Steuersatz oder einer Kombination aus beidem ausgewählt werden. Bitte beachten, dass sich diese Steuern nur auf die reinen Zimmerpreise beziehen.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Pauschalsteuer Betrag' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Steuer Prozentsatz' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Pauschalsteuer' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Pauschalsteuer Betrag' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Alle Einträge archivieren' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' Einträge archiviert' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Prüfer hat Einträge archiviert' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Unsere Tarife' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifbezeichnung' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Tarifbeschreibung' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Zimmerkategorie' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Gültig von' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Gültig bis' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'Pro Person / pro Nacht' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'Pro Nacht' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOWEEKEND', 'ohne Wochenenden' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Tage min.' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Tage max.' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. Belegung' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. Belegung' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Vorschau' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Bearbeiten ein?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Aktueller Text' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Neuer Text' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Text wurde aktualisiert.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Sprache bearbeiten' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Letzte 200 Einträge werden angezeigt ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Unterkunft-Kategorie' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Unterkunft-Kategorien auflisten' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Unterkunft-Kategorien bearbeiten' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Unterkunft-Kategorie' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Beschreibung Unterkunft-Kategorie' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Unterkunft-Kategorie gespeichert' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Unterkunft-Kategorie kann nicht gelöscht werden. Die Unterkunft-Kategorie ist bereits einem oder mehreren Unterkünften zugeordnet. Bitte vor dem löschen der Unterkunft-Kategorie diese Zuordnungen ändern.' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Unterkunft-Kategorie(n) gelöscht' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Zahlungserinnerung' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Keine Zuschläge zur Rechnung hinzufügen' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Anzahlung' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'kompletter Betrag' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Betrag, der bei der Buchung erhoben werden soll' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Hier einstellen, welcher Betrag bei der Buchung erhoben werden soll: Anzahlung, wenn nur die Anzahlung sofort erhoben werden soll, oder kompletter Betrag, wenn gleich der komplette Zimmerpreis in Rechnung gestellt werden soll.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Kalendermonate anzeigen' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'Wie viele Kalendermonate sollen bei den verfügbaren Zimmern angezeigt werden?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'unterzeichnet im Auftrag von ' );
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Zahlung' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Abbrechen' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Bitte die Zimmer und Zeiträume wählen die gesperrt werden sollen.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn die entsprechenden Zeiträume ausgewählt sind, den blauen Button drücken um die Sperrungen zu bestätigen. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Benutzer wurde wegen zu langer Inaktivität vom System ausgeloggt</b> Bitte erneut einloggen und erneut versuchen.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Bemerkungen' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Onlinezahlung akzeptieren?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'JA markieren, falls Online-Zahlungen akzeptiert werden sollwollen. <b>ACHTUNG:</b> Dies deaktiviert nicht das Label der Anzahlung im Buchungsformular. Um das Label zu deaktivieren muss es in den Templates entfernt werden.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Bitte Zahlungsweise wählen.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Zahlung aktiviert?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin Einstellung geändert' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin Einstellung eingefügt' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Webseite dieser Unterkunft anzeigen' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Externer Link' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Link zur eigenen Webseite hier einfügen.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Kreditkarte erfasst' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Kreditkartendetails ändern' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Bearbeite Kreditkartendetails' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Icongröße bearbeiten' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Unterkunftbilder hochladen' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Bild bereits im Verzeichnis vorhanden' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Diashows' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Link zur Diashow zeigen?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Diashows in Unterkunft eingebettet zeigen?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Höhe Vorschaubild' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Diashow' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Leider kein Bild für diese Unterkunft verfügbar ' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Link zu den Tarifen zeigen?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Popups erlaubt?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Wenn auf NEIN gesetzt, werden die Links im Popup geöffnet anstatt innerhalb des Artikels. TESTPHASE! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Bilder hochladen' );
jr_define( '_JOMRES_A_TABS_MISC', 'Verschiedenes' );
jr_define( '_JOMRES_A', 'Seitenkonfiguration' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Die allgemeinen Einstellungen benützen' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'JA markieren, falls die Unterkunft Eigenschaften durch den Webmaster einheitlich voreingestellt werden.' );
jr_define( '_JOMRES_A_ICON', 'Icon' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Such-Plugin wählen das verwendet werden soll.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Leider ergibt die Suche kein Ergebnis. Bitte Eingabe ändern und erneut versuchen.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Sind Sie sicher?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Buchungsanfrage' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Buchungsanfrage' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Sicherheitsnummer' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarife in Unterkunft eingebettet zeigen?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresse' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailinformationen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Für Zimmer und Verfügbarkeit klicken' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Preisinformationen zeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Adressinformation unter diesem Link zeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Kurzinformation unter diesem Link zeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zimmer und Verfügbarkeit unter diesem Link zeigen' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Tarife unter diesem Link zeigen' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Statische Preise' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Durchschnittliche Preise' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Wählen Sie das gewünschte Tarifmodell' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Es stehen zwei Berechnungsmethoden zur Verfügung. "Statische Preise" bietet die Möglichkeit verschiedene Preis anzubieten. Der Preis ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn verschiedene Preise im gleichen Zeitraum angeboten werden, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br>"Durchnittliche Preise" wählen, wenn der Preis auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Preise für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt einen durchschnittlichen Preis für den Buchungszeitraum zurück.' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Eingabefeld des Abreisetags anzeigen?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Auf NEIN setzen, wenn der Abreisetag nicht angezeigt werden soll. Diese Einstellung nur ändern falls wichtige Gründe vorliegen. Der Abreisetag in der Buchung wird dann automatisch der nächste Tag nach der Anreise sein.' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Limit der Beschreibung' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Maximale Anzahl der Buchstaben festlegen die in der Unterkunftbeschreibung angezeigt werden sollen.' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Kalenderformatierung benutzen?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'JA wählen um die Datumsausgabe anzupassen. (Beispiel <a href="http://www.php.net/manual/en/function.date.php">hier</a>). Auf NEIN setzen um das strftime() Format zu benutzen. (Beispiel <a href="http://www.php.net/manual/en/function.strftime.php">hier</a>) zB. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Veröffentlichen' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Rückgängig veröffentlichen' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe für Fehler' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Standardland für Buchungsformular' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Felder mit dem roten Stern, sind zwingend erforderlich.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Dürfen Benutzer eigene Unterkünfte veröffentlichen?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Hier JA einstellen, wenn den Benutzern erlaubt ist, eigene Unterkünfte zu veröffentlichen. Ohne Backend Admin-Einstellungen.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Land und Region für die Unterkunft wählen.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Unterkunftdetails ergänzen.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Felder mit dem roten Stern, sind zwingend erforderlich.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Unterkunft erfolgreich erstellt' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', 'Leider können Sie kein Unterkunft erstellen. Sie müssen als registrierter Benutzer eingeloggt sein und Sie dürfen noch keine Unterkunft erstellt haben.' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Erstellte Unterkünfte: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Für Benutzer: ' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Kalenderanzeige auf Jahresanfang?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Der Buchungskalender wird auf Anfang des laufenden Jahres gestellt.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Anzahl verfügbare Räume' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Zurück zu den Unterkunft-Details' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Zimmer Typ' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung die Sie noch bestätigen müssen.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankunfts- und Abreisedatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie noch bestätigen müssen.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Buchungsdetails' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Einzelheiten zur Buchung wählen' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Verfügbarkeit ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Bitte Zimmer auswählen/abwählen' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Prüfen, ob die Unterkunft während dieser Zeit verfügbar ist.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Optionale Zuschläge' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Wählen Sie die gewünschten Zuschläge, die Sie Ihrer Buchung hinzufügen wollen' );
jr_define( '_JOMRES_COM_PERDAY', 'Pro Nacht' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Ihre Adresse' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Ihre persönlichen Angaben. Beachten Sie, dass sämtliche Felder außer die Handynummer benötigt werden' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Verfügbare Zimmer' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Gewählte Zimmer' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Der frühest mögliche Anreisetag ist: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Pro Nacht:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Zimmerpreis:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Zuschläge:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Steuer:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Ermäßigung:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Gesamtpreis:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Gäste' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klicken Sie hier, um dieses Zimmer zu Ihrer Auswahl hinzuzufügen' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klicken Sie hier, um dieses Zimmer von Ihrer Auswahl zu entfernen' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Gästetypen' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Typ' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Gästetyp, zB. Kinder 5 bis 10 Jahre, oder Student ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Notizen' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Schreiben Sie hier Ihre Bemerkungen zu den verschiedenen Gästetypen' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Maximum' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximum der Personen, die pro Gastyp erfasst werden dürfen' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Prozentual' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Der berechnete Betrag wird als prozentualer Anteil des Tagesbetrags für dieses Zimmer berechnet. Wenn auf NEIN gesetzt, wird der vorgegebene Betrag zum Grundbetrag addiert oder subtrahiert.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Addiere Abweichung?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'Der berechnete Betrag wird zum Grundbetrag des Zimmers addiert oder subtrahiert. Auf /Minus/ setzen, wenn es als Rabatt vom Grundbetrag eingesetzt werden soll. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Abweichung' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Betrag der Abweichung' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Gästetyp geändert' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Gästetyp veröffentlicht' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Gästetyp gelöscht' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Gästetyp erstellt' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Gästetyp aktualisiert' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Gästetyp aktualisiert' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zeige Link zu den Zimmern in den Unterkunft-Details?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zeige <b>nur</b> Verfügbarkeitskalender?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Wählen Sie JA, wenn Sie die Anzeige für Unterkunftstitel und Beschreibung deaktivieren möchten. Es ist dann nur der Verfügbarkeitskalender der Zimmerliste sichtbar. Diese Option ist nur für Benutzer gedacht die Einzimmer-Unterkünfte anbieten (zB. Wohnungen, Chalets etc).' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Ankunft/Abreisetag Mindest-Intervall' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimale Tagesanzahl zwischen Ankunfts- und Abreisetag.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Buchungsformular Zimmerliste Nummer anzeigen' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Buchungsformular Zimmerliste Name anzeigen' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Buchungsformular Zimmerliste Tariftitel anzeigen' );
jr_define( '_JOMRES_ORDER', 'Anordnung' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Benötigt ' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Anzahl Tage vor Ankunft' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Anzahl der Tage die von "heute" bis zum Ankunftstag gesperrt sind.' );
jr_define( '_JOMRES_DTV', 'Datumsvariante' );
jr_define( '_JOMRES_DTV_DOW', 'Wochentag' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Standard Gästetyp' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Standardwert für den ersten Gästetyp. Wenn mehrere Gästetypen verwenden werden ist dies der verwendete Standardwert im verschickten Buchungsformular falls der Gast keine Wahl getroffen hat.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Können nur registrierte Besucher online buchen?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Leider können nur registrierte Benutzer online buchen. Hier klicken um sich zu registrieren. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Schriftfarbe für Links der aktuellen Buchungen' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Zellenfarbe für die Markierung der Wochenenden' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Zimmer ist gebucht' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Verdeckte Buchung' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Anzahlung auf die nächste Ganzzahl aufrunden?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Anzahlung verlangen?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Wochenpreis erheben?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ist diese Funktion aktiviert, wird der Einheitspreis als Wochenpreis angezeigt und pro Woche statt als Tagessatz berechnet.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Preis pro Woche' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fester Ankunftstag: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Wenn feste Ankunftszeiten gewählt sind kann das Datum in der Dropdown-Liste ausgewählt werden' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Raucher Option ungültig' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Falsches Ankunftsdatum' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Falsches Abreisedatum' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Der Buchungszeitraum ist zu kurz. Mindestanzahl der Tage zwischen Ankunft und Abreise:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ihr Intervall ist' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Gasttyp-Variante ungültig' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Wählen Sie Anzahl Personen/Typ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Zu große Anzahl für die verfügbaren Preise in der Gruppe' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Mehr Zimmer gebucht als Gäste vorhanden' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Zu viele Gäste für die verfügbaren Betten' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Mehr Zimmer wählen' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Ein Zimmer wählen' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Vorname benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Nachname benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Haus Nr/Name benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Straße benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Ort benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Region benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Postleitzahl benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Land benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefonnummer benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Handynummer benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-Mail-Adresse benötigt' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Die E-Mail-Adresse ist ungültig' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Das Überprüfen der E-Mail-Domain ist fehlgeschlagen' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Wir haben noch freie Plätze!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Kein Zimmer ausgewählt' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Buchungs Nr.' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Mitteilungsbox: Hintergrundfarbe für erfolgreiche Buchung' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Template Variablen übernehmen?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Wenn diese Funktion aktiviert ist werden die DHTML Variablen von der FRONTEND Vorlage anstelle der Variablen dieser Seite übernommen. Nützlich, wenn bestimmte Elemente mit den Variablen der vorhandenen Vorlagen angezeigt werden sollen.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Prozentuale Abrechnung' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Auf JA stellen wenn der Preis für jede Person anteilig berechnet werden soll. Falls nein, wird ein Gesamtbetrag pro Buchung angezeigt.' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Link zur Währungs-Umrechnungstabelle in Preisliste anzeigen?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Währungsrechner, aktueller Tagessatz für:' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Einheitliche Zimmerkonfiguration' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Hier JA einstellen, wenn eine einheitliche Zimmerkonfiguration für alle Unterkünfte benutzt werden soll.' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Allgemeines Suchlimit' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Buchungs-Administration <br/> Neue Buchungen' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Maximum Anzahl Zimmer' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Hier festlegen wie viele Zimmer pro Unterkunft zur Verfügung stehen' );
// Introduced in v2.5
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'HTML-Editor für Benutzer erlauben?' );
// Translate from here 2.6.2
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Verfügbare Zimmer jetzt buchen: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Einheitlicher Editiermodus?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Vorsicht mit dieser Funktion. Falls JA betrifft es alle Textkonstanten systemweit. Einzelne Unterkünfte können dann keine eigenen Textkonstanten editieren.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Einheitliche Währung benutzen?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Auf JA setzten damit alle Unterkünfte die gleiche Währung verwenden (z. B. & # 8 3 6 4 ;)' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Einheitliches Währungssymbol' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponente gewrapped' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Auf JA setzen wenn Module und Header nicht sichtbar sein sollen' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Unterkunft Manager' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Nur Wochenenden' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Wochenend-Tage' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Tage für Wochenende einstellen. Tarife, die Wochenenden erlauben oder verbieten übernehmen diese Einstellungen in die generierte Zimmerliste.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Land auswählen bevor die Unterkunft-Informationen eingeben werden.' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Änderungen vor dem hochladen eines Unterkunftsbilds speichern.' );
jr_define( '_JOMRES_TARIFFSFROM', 'Preise ab' );
jr_define( '_JOMRES_SEARCH_ALL', 'Alle' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Suche nach Land' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Suche nach Region' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Suche nach Stadt' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Suche Eigenschaft.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Suche' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Suchwort in die Textbox eingeben und den Button drücken.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Suchwort(e): ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Gewünschtes An- und Abreisedatum eingeben und den Button drücken um Unterkünfte zu finden die frei Kapazitäten zum gewünschten Zeitpunkt haben.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Unterkunft Typ' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Zimmertyp' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Voreinstellung' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Unterkunft Name' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Unterkunft Region' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Unterkunft Stadt' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Sterne' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Unterkunftliste' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Unterkunftsdetails' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Buchungsformular' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Adressangaben aktualisieren' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-check der Zimmer-Verfügbarkeit<br/>(Zimmerauswahl wird zurückgesetzt)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-check der Verfügbarkeit' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Änderung der optionalen Extras' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Änderung der Zimmerauswahl' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Aktualisierung der Adressangaben' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Leider sind eines oder mehrere Adressfelder fehlerhaft.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Zimmerbild' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Währungsformat' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Manager-Optionen, als Icons anzeigen' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Suchoptionen' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Vorhandene Logs' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Keine Log Einträge vorhanden. Dies ist üblich. Sie müssen die jomres.php Datei anpassen um die Log-Einträge zu verändern' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Nachrichten' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Erweitert' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microverwaltung' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Tarif-Konfiguration-Modus' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', '<b>Warnung: Der Wechsel zwischen den verschiedenen Tariftypen kann zu Datenverlust führen. Bitte folgende Hinweise beachten.</b>.
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
Microverwaltung -> Normal. Alle vorhandenen Referenzen und Preise werden gelöscht.<br/>' );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Zimmerliste in Unterkunfsdetailsseite anzeigen?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Unterkunftstyp' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Nur eine SRP ' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Max Personen pro Zimmer' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Max Personen pro Buchung' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Notiz hinzufügen' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Notiz bearbeiten' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Notiz löschen' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Notiz anzeigen' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Notiz hinzufügen' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Notiz bearbeiten' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Notiz löschen' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Meine Optionen' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Buchungsliste' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Meine Buchungen' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Buchung anzeigen' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favoriten anzeigen' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Es sind noch keine Favoriten eingetragen.' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Zu Favoriten hinzufügen' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Unterkunftsart' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Unterkünfte auf Seite' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Lastminute' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Aktiv' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Dieses Plugin ermöglicht den Unterkunftspreis dynamisch zu generieren.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Die meisten Betriebe kalkulieren die Zimmerpreise einer bestimmten Kategorie im Verhältnis zur Verfügbarkeit zu einem bestimmten Zeitraum. Das bietet die Möglichkeit Nachlässe für schlecht gebuchte Zimmertypen einzuräumen um die Belegung zu erhöhen.<br/>Wird dieses Plugin aktiviert können für bestimmte Tage und Zimmertypen von der Anzahl der verfügbaren Zimmer abhängige Preise gestaltet werden.<br/>Der Tages-Grenzwert definiert die Anzahl der Tage innerhalb deren das Ankunftstag liegen muss bevor die Zimmerpreise durch dieses Feature angepasst werden. Mit den Prozentwerten kann die Belegung der entsprechenden Zimmer konfiguriert werden ab der ein vorgegebener Nachlass angewendet wird.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Tagesgrenzwert (Anzahl Tage von heute bis Ankunft)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Prozent belegter Räume 10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Prozent belegter Räume 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Prozent belegter Räume 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Prozent belegter Räume 75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabatt %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ist ermäßigt ab ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' bis ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Raumpreis ist nicht ermäßigt ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google Map API Schlüssel' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Google-Key verfügbar auf <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Wenn hier der Google-Key eingegeben ist zeigt Jomres eine Karte in den Unterkunftsdetails.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Wird SSL im Buchungsformular verwendet?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Es muss ein gültiges SSL Zertifikat vorliegen für ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Last Minute' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktiv?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Falls Ja sind Last Minute Angebote möglich.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Grenzwert' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Bei einer Buchung innerhalb von N Tage bis zum Ankunftsdatum wird eine Ermäßigung gewährt.' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Ermäßigung' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In Prozent' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Für diese Buchung wurde eine Ermäßigung berechnet!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Der Betrag dieses Aufenthalts wurde ermäßigt um ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Für diese Unterkunft ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% Ermäßigung wenn das Ankunftsdatum der Buchung vor ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', '% oder mehr Ermäßigung wenn das Ankunftsdatum vor ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Jetzt buchen, um den diesen Preis zu erhalten!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Ausführliche Preisinformationen' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Falls Ja, werden weitere Preisinformationen in einem Popup Fenster angezeigt' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Konfigurationsoptionen begrenzen' );
jr_define( '_JOMCOMP_AMEND', 'Buchung anpassen - Auswahl Unterkunft' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Neue Unterkunft wählen' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Original Auftrag:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Anzahlung' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Ausstehende Anzahlung' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Korrigiert Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Korrigiert Anzahlung' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Abbrechen' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal Konfiguration' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Standard Provision' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Die Standard Provision wählen, die für den Fall angewendet wird, dass an keiner anderer Stelle eine Provision eingegeben wurde.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Liste der Provisionen' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Provisionen' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Titel' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Typ' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Provision' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Währungscode' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Unterkunft anzeigen' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Unterkunftsname' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Unterkunftsadresse' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Für Unterkünfte die Rot hinterlegt sind wurde die Provision noch nicht verbucht.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Statistik' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Statistik für: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Unterkunft - Klicks' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Unterkunft anzeigen' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Anzahl Buchungen' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Beträge der Buchungen' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Geschätzte Provision ' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provision' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Buchungen auflisten' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Unterkunft NR.' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Gast NR.' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Affiliate id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Rechnung NR.' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Gesamte Buchungen' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Vertrags Identifikation' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Vertragsnummer' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Währungscode' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Erstellt' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archiviert' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Archiviert Datum' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Position zur Rechnung hinzufügen' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Verwaltung der Rechnungen' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Zugewiesene Unterkunft (sofern verfügbar)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Betrag' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Beschreibung' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'Position erfolgreich eingefügt ' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'Buchungen anzeigen' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'Fehler beim Einfügen der Rechnungsposition ' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', 'Fehler, es wurde kein Betrag eingesetzt' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Es können auch Unterkunft spezifische Sprachdateien in einem Unterordner angelegt werden, z.B. "Medienvermietung" indem die Sprachdatei in den Unterordner kopiert wird. Anschließend die Inhalte der Sprachdatei auf die zu vermietenden Objekte anpassen, z.B. DVDs, CDs etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Diese Unterkunft kann nicht gelöscht werden da sie die einzige ist auf die noch Zugriff besteht. Wenn diese Unterkunft nicht angezeigt werden soll, in der Statusleiste auf unveröffentlicht setzen. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Falls es sich hier um eine Demo-Installation handelt und beabsichtigt ist Jomres Solo (auf eine Unterkunft begrenzt) zu erwerben, sollte zuerst eine neue Unterkunft angelegt und diese Unterkunft gelöscht werden, noch bevor die Lizenz erworben wird. Der Schlüssel wird direkt nach dem Kauf zugewiesen. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', 'Fehler Meldungen mailen?' );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', 'Auf Ja setzen wenn die generierten Fehlermeldungen automatisch an jomres.net übermittelt werden sollen. Dies ermöglicht auftretende Fehler sofort erkannt und ohne Mitwirkung des Nutzers behoben werden können. Hinweis: Diese Funktion ist auf "localhost" deaktiviert. ' );
jr_define( '_JOMRES_COM_ISTHISANMRP', 'Ist diese Unterkunft ein Hotel/Pension oder Haus/Ferienwohnung? ' );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', ' Die Konfiguration unterscheidet sich je nach dem, ob es sich um eine einzelne Immobilie oder mehrere Immobilien handelt. Wählen Sie MRP wenn Sie mehrere Räume anbieten und SRP wenn Sie eine Immobilie einzeln anbieten wollen. ' );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', 'Jomres Mailpüfer verwenden? ' );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Erzwingt eine strengere Mailprüfung beim Versenden. Einige Webserver geben einen Serverfehler 500 ab, wenn versucht wird eine E-Mail auf eine ungültige E-Mailadresse zu senden. Wird diese Einstellung aktiviert benutzt das PHP Skript vor dem Versand die Funktion checkdnsrr und verhindert den Serverfehler. ' );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Unterkunft Total' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Nacht/Nächte zum' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'pro Zimmer ' );
/*
* @ignore
*/
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Extras Gesamt ' );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Preis Zusammenfassung ' );
jr_define( '_JOMRES_CONFIRMATION_ALERT', 'Bitte lesen und Einverständnis erklären ' );
jr_define( '_JOMRES_CONFIRMATION_HEADER', 'Im Folgenden eine Zusammenfassung Ihrer Buchung.<br /> Um Änderungen vorzunehmen, bitte auf den Knopf "Reservierung ändern" klicken. ' );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', 'Sollen die oben genannten Informationen geändert werden, dann bitte hier klicken' );
jr_define( '_JOMRES_CONFIRMATION_AMEND', 'Reservierung ändern.' );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', 'Besondere Wünsche bitte in das unten stehende Feld eingeben.' );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Ich bestätige, dass die vorstehenden Angaben richtig sind und bin einverstanden mit den ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'pro Person pro Nacht ' );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', 'Standard Sprachdatei' );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', 'Sprache wählen die Jomres als Standard verwenden soll wenn die Standardsprache nicht schon durch Joomfish festgelegt ist.' );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'von' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Start' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Zurück' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Weiter' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Ende' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Ergebnis' );

jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Bitte beachten dass dies kein Buchungsformular ist. Es kann anstelle einer Email Mitteilung eingesetzt werden.<br/>Hier die Nachricht schreiben die übermittelt werden soll, an: ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Unterkunft Anfrageformular ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Vielen Dank für Ihre Anfrage. Die Nachricht wurde an die entsprechende Kontaktadresse und an Ihre angegebene E-Mailadresse zur Kenntnisnahme geschickt. Ihr Anliegen wird schnellst möglich bearbeitet.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' Betreff ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Schreiben Sie die angezeigten Buchstaben in die Box' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Kann die Buchstaben nicht lesen. Erstelle ein ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Absenden' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'neues Bild' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Anfrage' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Für diesen Zeitraum haben wir leider keine freien Plätze!' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Bitte aus der Liste rechts die gewünschte Unterkunft auswählen' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. Räume die gewählt sind' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimale Anzahl der Zimmer die bereits vor Buchung in ausgewählter Tarif-/Zimmerart-Kombination angeboten werden können. Ermöglicht Ermäßigungstarife auch wenn bereits mehr als N Zimmer ausgewählt sind. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max. Räume bereits gewählt' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximale Anzahl der Zimmer die bei der Buchung schon ausgewählt sein dürfen bevor die Tarif-/Zimmerart-Auswahlbox nicht mehr angezeigt wird. Erlaubt die Tarif-/Zimmerart nicht mehr anzubieten wenn bereits N Zimmer im Buchungsformular ausgewählt sind. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Bitte beachten, dass Einzelzimmerzuschläge die in der allgemeinen Konfiguration auf Ja gesetzt sind hier nicht verwendet werden. Die Einstellungen hier sind eine Alternative zu den Pauschalsätzen. Die Beträge werden nicht zu den pauschalen Unterkunftssätzen (SPS) addiert.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', 'Frei' );
jr_define( '_JOMRES_AVLCAL_QUARTER', 'Einige Buchungen' );
jr_define( '_JOMRES_AVLCAL_HALF', 'zur Hälfte gebucht' );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', 'Oft gebucht' );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', 'Ausgebucht' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'URL Präfix' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Dies ist der erste Eintrag nach dem Domainnamen - Bitte anpassen - Bitte leer lassen wenn keine Namenserweiterung erwünscht ist.' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Alias der Unterkunft anzeigen' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'Alias buchen' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Alias suchen' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Landesnamen in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Region in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Stadt in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Unterkunfts-Typ in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Unterkunftsnamen in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'ID zum Unterkunftsnamen hinzufügen' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Falls Unterkunftsname auf Nein, keine Veränderung. Falls Ja, wird die URL Adresse etwa so aussehen: fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Such-URL - Land in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', ' ' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Such-URL - Standard Land' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Wenn alle Unterkünfte im gleichen Land sind, wird das Land in der Suche nicht angezeigt - Falls das Land angezeigt werden soll das Standard-Land einfügen.' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Such-URL - Region in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Such-URL - Standard Region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Wenn alle Unterkünfte in der gleichen Region sind, wird die Region in der Suche nicht angezeigt - Falls die Region angezeigt werden soll dort die Standard-Region einfügen.' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Such-URL - Stadt in der URL ergänzen' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Such-URL - Standard Stadt' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Such-URL - Unterkunfts-Typ' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Such-URL - Standard Unterkunfts-Typ' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Wird in der URL verwendet, wenn die Suche für alle Unterkunftstypen gelten soll' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Javascript Kalendersprache automatisch erkennen' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Soll die automatische Erkennung der Sprache für den JavaScript-Kalender aktiviert werden? Falls die automatische Spracherkennung nicht funktioniert wird die unten eingestellte Sprache verwendet' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'pro Woche' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'pro Tag' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'pro Buchung' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'pro Person pro Buchung' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'pro Person pro Tag' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'pro Person pro Woche' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'pro Tag (min. Tage)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'pro Tag X Räume gewählt' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Registrierung der Minikomponente neu aufbauen' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', 'Normalerweise wird die Jomres Plugin Registrierung automatisch wieder hergestellt, wenn im Plugin-Manager ein Plugin hinzufügt oder entfernt wird. Es kommt vor, dass Sie dieser Automatismus, aus welchem Grund auch immer, nicht ausgelöst wird. Mit dieser Funktion kann die Wiederherstellung manuell ausgelöst werden. Wenn Zugriff auf den Plugin-Manager und die Upgrades Funktion beseht ist es unwahrscheinlich, dass diese Funktion jemals benötigt wird. Die Registrierung muss jedes Mal wiederhergestellt werden wenn eine neue Mini-Komponente hinzugefügt wurde.' );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Die Registereinträge wurden erfolgreich aktualisiert' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Es gab ein Fehler bei der Aktualisierung im Register der Minikomponente. Bitte den Jomres Fehlerreport überprüfen ob der Fehler verzeichnet ist.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Suche nach Preis.' );
jr_define( 'JOMRES_WORD_SAVING', 'Speichere...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Werden die mehrstufigen Immobilien Details verwendet?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 führt die zusammengesetzte Ausgabe der Unterkunftsdetails ein. Die gesamten Ausgaben der Unterkunftsdetails erfolgen in ein Template (composite_property_details.html). Auf Nein stellen falls dies nicht gewünscht wird. (Nur geübte   Benutzer sollten hier Nein einstellen. Neue Benutzer sollten hier besser Ja wählen)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Dies ist eine Liste aller Benutzer des Systems. Nicht-Immobilien-Manager haben ein Gast-Symbol, Immobilien-Manager haben Empfang / Unterkunfts Manager / Super Immobilien-Manager-Symbole. <br/>Bei der ersten Installation von Jomres wird "admin" automatisch zum Unterkunfts-Manager und gilt als autorisierter Benutzer. <br/> Einem Nicht-Super-Manager muss mindestens ein Objekt zugeordnet werden da sonst beim Login eine Fehlermeldung angezeigt wird. <br/> Wenn ein Benutzer autorisiert ist kann sein Profil editiert und ihm verschiedene Objekte und Berechtigungen, auch Super-Unterkunfts-Manager, zugewiesen werden. <br/>Auf das rote Kreuz neben dem Namen eines Benutzers klicken um ihn zu autorisieren, bzw. auf den grünen Haken um ihm die Autorisierung zu entziehen. <br/> Um Benutzer auf bestimmte Unterkünfte bzw. Funktionen zu beschränken oder sie zu Super-Unterkunfts-Manager zu machen sind sie zu autorisieren und die Einstellungen über das Symbol "Bearbeiten" anzupassen (nur nach der Autorisierung des Benutzers sichtbar). Benutzer, die ihre Unterkünfte selber registriert haben, werden automatisch für das betreffende Objekt autorisiert. Der Super-Unterkunfts-Manager hat automatisch die Rechte über alle Eigenschaften und alle Konfigurations-Optionen, auch wenn die Konfigurations-Einstellungen in der Webseitenkonfiguration eingeschränkt sind.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Hier können einem Benutzer bestimmte Unterkünfte zugewiesen werden. Wird er nicht zum Super-Unterkunfts-Manager gemacht ist sicher zu stellen, dass ihm mindestens ein Objekt zugewiesen wird da sonst eine Fehlermeldung beim Login erfolgt. Soll ein Receptionist / Unterkunfts Manager nur Zugriff auf bestimmte Unterkünfte haben ist darauf zu achten, dass das Property Manager Dropdownfeld auf "Nein" steht.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Sie noch keine Buchungen getätigt!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Unterkunfts-Typ' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Unterkunfts-Typ bearbeiten' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Wählen Sie Ihren Unterkunfts-Typ' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres Logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Diese Funktion aktiviert/deaktiviert das Protokollieren mit Jomres. Das Fehlerprotokoll ist immer aktiviert, aber andere Protokolle wie Buchungen, Gateway, System und Anfragen können aktiviert und deaktiviert werden. Wir weisen darauf hin, dass <b>die Möglichkeit dieses zusätzlichen Protokolle zu aktivieren ausschließlich zur besseren Fehlersuche bereitgestellt wird, aber ein erhebliches Sicherheitsrisiko darstellt</b> da es für externe Benutzer sehr einfach diese Protokolle auszulesen. Daher raten wir dringlich diese Optionen weitgehend inaktiv zu belassen. Nach dem Abschalten unbedingt sicher stellen, dass folgende Verzeichnisse:  <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> keine alten Log-Files beinhalten. Außerdem verlangsamt die Protokollierung das System signifikant und sammelt sehr viele Daten.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Buchungs Logs (Formular Logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway Logs (z.B. Paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Anfrage Log (alle eingehenden Serveranfragen)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Verschiedene Logs' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (vor allem für die Zusammenstellung der Provisionen, etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ihre Frage...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Raumauflistung Buchungsformular nach Raumtyp-Bild angezeigt' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Maximum Unterkünfte in der Liste' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'Anzahl Unterkünfte die nach einer Suche pro Seite angezeigt werden sollen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'eingebaute Suchfunktion' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Die in Jomres integrierte Suchfunktion ermöglicht es den Nutzern, die Suche in den Unterkünften von Jomres mit einer Reihe von Funktionen durchzuführen. Nutzern die bereits mit der Suchfunktionen von Jomres in Joomla gearbeitet haben wird der Umgang damit vertraut sein. <br/> Diese Funktion ermöglicht es, die Suche innerhalb von Jomres für die Benutzer anzubieten, die das Joomla Suchmodul nicht verwenden wollen, bzw. für Nutzer anderer CMS die keine Suchfunktion haben. <br/> Es ist anzumerken, dass bei einer Suche über einen Link (z.B nicht über das Drop-Down), andere Suchoptionen nicht inbegriffen sind, sondern nur das Element das mit dem geklickten Link korrespondiert.<br/> Das Layout dieser integrierten Suche ist nicht besonders schön, da im Template, das für das Aussehen verantwortlich ist, alle möglichen und teilweise inkompatible Optionen berücksichtigt werden müssen. Um das Layout zu verbessern und den eigenen Bedingungen anzupassen ist die Template-Datei <b>srch.html</b> im Ordner <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> zu bearbeiten. ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Diese Funktion aktivieren?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ist diese Funktion aktiviert werden bei jedem Aufruf von Jomres mit Listendarstellung der Unterkünfte auch die Suchoptionen angezeigt.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Zeilen verwenden' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Jede Suchoption, welche Sie als Link definiert haben (dort wo eindeutig erkennbar) wird als Spaltenauflistung angezeigt (für IE setze ein br am Ende des Links)' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Zeilenfunktionen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'Anzahl Funktions-Icons die angezeigt werden sollen bevovor das br eingefüht wird, um zur nächsten Zeile zu gehen.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Suche nach der Region mittels Auswahlfeld' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Zeigen Sie das Such-Auswahlfeld zum Filtern von Länder/Regionen/Städten an. Falls Sie diese Funktion verwenden wollen, benutzen Sie lieber die unten aufgeführte Suche nach Region/Stadt nicht.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Suche nach Unterkunftsname' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Zeige Suchergebnis nach Eingabe des Unterkunftsnamens an.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Als Auswahlfeld anzeigen?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Suche nach Stadt/Region' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Zeige Suchergebnis nach Region an' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Als Auswahlfeld anzeigen?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Suche nach Unterkunfts-Typ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Zeige Suchergebnis nach Unterkunfts-Typ an' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Als Auswahlfeld anzeigen?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Suche nach Raum-Typ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Zeige das Suchergebnis nach Raum-Typ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Als Auswahlliste anzeigen?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Suche nach Funktionen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Zeige das Suchergebnis nach Funktionen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Als Auswahlliste anzeigen?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Setzen Sie auf Nein, um die Auflistung als Tooltipbild und Checkbox anzuzeigen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Suche nach dem Beschreibung' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Zeige das Suchergebnis nach dem Beschreibung' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Suche nach Verfügbarkeit' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Zeige das Suchergebnis nach Verfügbarkeit' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Suche nach Preisschritten' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Zeige das Suchergebnis nach Preisschritten' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Preisschritte' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres wird auf allen Werten der Tarifauflistung eine Reihe von Preisspannen hinzurechnen, aufgrund des Wertes, den Sie hier eingeben.' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Per Voreinstellung führt Jomres eine Suche durch wenn keine Unterkunft gewählt ist. Wenn diese Suche nicht durch ein Suchmodul unterstützt wird werden (absichtlich) zufällige Ergebnisse ausgegeben. Die Anzahl der ausgegebenen Unterkünfte kann mit dieser Option begrenzt werden.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Cronjob Einstellungen und Logs' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron-Job Information. Die Pseudocron Funktionalität wird zur Rechnungsstellung und Provisionsberechnung benötigt.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installierte cron Minicomponenten. Zum Start eines individuellen cron job einen der unten spezifizierten Links benützen. Die cron jobs produzieren keinerlei Ausgaben und es sind keine Informationen auf der Seite sichtbar. In den unten stehenden logs können die Daten überprüft werden.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Methode' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', 'Falls Sie keine Cronjobs auf dem Server ausführen können auf Minikomponente stellen, andernfalls erstellen Sie einen Cronjob und geben Sie folgendes an:<br /> <i>curl -s ' . JOMRES_SITEPAGE_URL_AJAX . '&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=' . base64_encode(get_showtime("secret")) . '> /dev/null</i> ' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Zeige logging im Browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funktioniert nur, wenn auf Minikomponente gestellt ist.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging aktiviert' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ja, um das Logging zu aktivieren. Das Ergebnis der Logs wird unten angezeigt.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Logging verbergen' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Zuviele Logging Ausgaben' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Bearbeitung' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Diese Funktion ermöglicht das bearbeiten des Jomres Frontend Templates auf dem Server. Das Ergebnis wird in der Datenbank gespeichert. Seien Sie vorsichtig, beim Bearbeiten der erweiterten Einstellungen.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Template Name' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Wurde das Template angepasst?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Eigene Felder' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Hier können einfache individuelle Felder definiert werden die im Buchungsformular erscheinen.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Feldname (ohne Abstand)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Standardwert' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Beschreibung' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'benötigt' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Menge' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Falls die maximale Menge größer 1 ist wird ein Auswahlfeld mit der maximalen Anzahl für die Extras angezeigt.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', 'Rechnungen erstellen' );
jr_define( '_JRPORTAL_TAXRATES_TITLE', 'MwSt Betrag' );
jr_define( '_JRPORTAL_TAXRATES_CODE', 'Steuersatz' );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', 'Ratenbeschreibung' );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', 'Dieser Steuersatz kann nicht gelöscht werden.' );
jr_define( '_JRPORTAL_TAXRATES_RATE', 'Satz' );
jr_define( '_JRPORTAL_INVOICES_TITLE', 'Rechnungen' );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', 'Unbezahlte' );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', 'Bezahlt' );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Storniert' );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', 'Ausstehend' );
jr_define( '_JRPORTAL_INVOICES_USER', 'Benutzer' );
jr_define( '_JRPORTAL_INVOICES_STATUS', 'Status' );
jr_define( '_JRPORTAL_INVOICES_RAISED', 'Erstellt' );
jr_define( '_JRPORTAL_INVOICES_DUE', 'Fällig' );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonnement' );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', 'Gesamtbetrag' );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', 'Mehrf. Zahlung' );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Mehrf. Zeitraum' );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Wiederh. Tag d. M.' );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', 'Währungscode' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', 'Belegpositionen' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Bez.' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Beschr.' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Basispreis' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Basiszahl' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Nachlass Erstauftr.' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Gesamt' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Mehrf. Preis' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Mehrf. Anzahl' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Mehrf. Nachlass' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Mehrf. Gesamt' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Steuercode' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Steuer' );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Satz' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'Paypal' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'Währungscode (z.B. EUR)' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Sandbox benutzten?' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Meine Paypal E-Mail Adresse' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Hinweis: Bei Verwendung von PayPal müssen Sie in Ihrem PayPal-Konto das Autoreturn deaktivieren (Profile/Website Payment Preferences), und die IPN (Profile/Instant Payment Notification Preferences) auf die URL:<br/><b>&nbsp;' . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', 'Diese Rechnung ist fällig. Bitte klicken Sie auf den Knopf, um zu PayPal weitergeleitet zu werden.' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Jomres Standard-Gateway-Einstellungen überschreiben?' );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'Wenn die Einstellungen paypal Option auf Yes gesetzt wurde dann sind folgende Einstellungen gültig: Die allgemeine Konfiguration in der Gateway-Einstellungen wird nicht mehr angezeigt und wenn eine Buchung erfolgt wird die in der allgemeinen Konfiguration eingetragene Paypal E-Mail verwendet.' );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', 'Meine Rechnungen anzeigen' );
jr_define( '_JRPORTAL_COUPONS_TITLE', 'Rabatte' );
jr_define( '_JRPORTAL_COUPONS_DESC', 'Als Anreiz zur Buchung, können den Gästen Rabattangebote gemacht werden. Gültig für einem bestimmten Buchungszeitraum, nicht für das Datum einer Buchung selbst.' );
jr_define( '_JRPORTAL_COUPONS_CODE', 'Rabatt Code' );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', 'Gültig von' );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', 'Gültig bis' );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', 'Rabattbetrag' );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabatt in Prozent' );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', 'nur Zimmer' );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', 'Nachlass wird nur auf den Zimmerpreis angerechnet. Falls auf Nein gesetzt, wird der Nachlass auf den ganzen Buchungsbetrag angewendet.' );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', 'Sql Fehler beim löschen/einfügen der Coupon Daten' );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Bitte geben Sie den Couponcode ein und klicken Sie auf "Coupon speichern" um den Nachlass Ihrer Buchung gut zu schreiben.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Coupon speichern' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Nachlass vor der Buchung gespeichert' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon nicht gefunden' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Wert des Coupon' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Vergünstigte Buchung. Couponcode/-wert Einstellungen: ' );
jr_define( '_JOMRES_COM_CACHING', 'Die Jomres Cachefunktion verwenden?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Nein, wenn die Jomres Cache Funktion deaktiviert werden soll.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Sprache wählen' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Im Auswahlfeld die Sprache wählen.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Sprachauswahlfeld anzeigen?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Abgebuchte und annullierte Buchungen' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', 'Sehr geehrte(r)' );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', '<br>Vielen Dank für die Registrierung ' );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', '<br>Ihr Benutzername lautet: ' );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', '<br>Ihr Passwort lautet: ' );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', '<br>Um Ihre Buchungen anzusehen, loggen Sie sich bitte unter folgender Adresse ein: ' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon gespeichert' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon gelöscht' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Verwende Jomres Nachrichtendienst' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Viele Manager geben Ihre Rückmeldung in Form einer JavaScript-Nachricht aus, während dem die Seite neu geladen wird. Falls Sie diese Option verwenden wollen, aktivieren bzw. deaktivieren Sie diese Funktion.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Benutzer' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Passwort' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', 'API ID' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Handynummer für Benachrichtigungen' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Bitte verwenden Sie folgendes Fotmat "Länder Code, Handynumber". Die UK Nummerreihenfolge würde z.B so aussehen wie "447979123456". Lassen Sie dieses Feld leer, wenn Sie keine Benachrichtigung per SMS erhalten wollen.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', '
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You\'ll need to set the IP callback to ' .get_showtime("live_site") . '/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection\'s unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Raum Buchungsformular für Behinderte anzeigen' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Raum Buchungsformular max. Personen anzeigen' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Bitte beachten Sie, dass die Zimmerpreise nur Schätzungen sind und der effektive Buchungspreis nicht berechnet wird, bis Sie ein Zimmer oder mehrere Zimmer zu Ihrer Auswahl hizugefügt haben.' );
jr_define( '_JOMRES_LASTEDITED_DB', 'Datenbanktemplate letzte Änderung' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Festplattentemplate letzte Änderung' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Datenbanktemlate Warnung' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Das Datenbanktemplate ist abgelaufen' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Wenn es ein Symbol gibt, dass nicht ins Template passt, dann hat Joomres festgestellt, dass das Template in der Datenbank älter <strong><i>may</i></strong> älter sind, als das Template auf der Festplatte. In diesem Fall ist es möglich, dass das Template in eine neueren Version von Jomres zu aktualisieren. Wenn dies der Fall ist, dann ist es möglich, dass Ihr Template für die eine neuen Funktionen von Jomres nicht kompatibel ist. So sollten Sie die Datei auf der Festplatte entsprechend anpassen, um sicherzustellen, dass die neuen Funktionen nicht fehlen.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonnemente' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Name' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Beschreibung' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Veröffentlicht' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', 'Häufigkeit' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', 'Versuchs-Zeitraum' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', 'Versuchs-Gebühr' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Komplette Gebühr' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', 'Raum Limit' ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Objekt Limit' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', 'Häufigkeit: M/Q/H/J Monatlich/Quartalsmässig/Halbjährlich/Jährlich' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', 'Testzeitraum: Eingabe, 0 (null) für keine Angabe, 1 für einen Monat, 2 für zwei Monate usw.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Anmelden' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', 'Bitte füllen Sie Ihre Benutzerinformation aus oder ergänzen Sie diese. Beachten Sie, dass sämtliche Felder benötigt werden.' );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', 'Vorname' );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', 'Nachname' );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', 'Addresse' );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', 'Land' );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', 'Postleitzahl' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', 'Sie brauchen ein gültiges Abonnement, um neue Objekte zu erfassen. Im Moment haben Sie Abonnemente gezahlt für ' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', ' veröffentlichte Objekte. ' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', 'Sie können die Anzahl Objekte erhöhen, indem Sie <a href="' . JOMRES_SITEPAGE_URL . '&task=list_subscription_packages">hier weitere Abonnemente kaufen.</a>' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', ' Sie haben ' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', ' Objektplätze verwendet. ' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', 'Falls Sie eine Auflistung Ihrer Objekte ansehen möchten, klicken Sie <a href="' . JOMRES_SITEPAGE_URL . '&task=listyourproperties">hier</a>. ' );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', 'Um eine Auflistung der möglichen Abonnemente zu erhalten, klicken Sie <a href="' . JOMRES_SITEPAGE_URL . '&task=list_subscription_packages">hier</a>. ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', 'Sie können leider dieses Objekt nicht mehr erfassen, weil Sie die maximale Anzahl von Objekten erreicht haben.' );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', 'Vielen Dank, dass Sie ein Abonnement auf unserem Server gelöst haben. Sobald die Rechnung als Bezahlt gekenntzeichnet ist (Es kann gelegentlich zu Verzögerungen bei PayPal kommen), können Sie<a href="' . JOMRES_SITEPAGE_URL . '&task=registerProp_step1">hier klicken, um mit der Erfassung Ihrer Objekte</a> fortzufahren.' );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', 'Es tut uns leid, aber Sie haben sich noch nicht bei unserem Service registriert. Bitte lassen Sie es uns wissen, wenn wir Ihnen weiterhelfen können' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', 'Verwenden Sie die Abonnierungs-Funktionalität' );
jr_define( '_JOMRES_COM_NEWUSER', 'Erstelle bei der Buchung einen neuen Benutzer' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Bei der Buchung eines unregistrierten Benutzers automatisch ein Benutzerkonto erstellen.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Klicken Sie hier, um Ihre Unterkunft zu registrieren' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', 'Aktive Anmeldungen' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', 'Gateway Anmeldung ID' );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', 'Vielen Dank für Ihre Buchung - Die Benutzerdetails folgen in Kürze' );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Kontrollzentrum' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Javascript Header im Body des HTML ausgeben?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Auf Ja setzen wenn Probleme mit Mootools und Jomres Abfragen im Internet Explorer auftreten. Damit wird die Ausgabe von JavaScript im Body des HTML statt im Head erzwungen. Das ist zwar kein valides HTML, scheint aber die Konflikte zwischen jQuery und Mootools zu lösen.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Rechnung anzeigen' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Rechnungen anzeigen' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Meine Unterkunft in dieses WEB einfügen' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Warnung: ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', 'Auf Wunsch kann ein freies Paket auf dem System installiert werden indem sowohl der Testbetrag als auch der volle Betrag auf 0,00 gesetzt wird.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Leider wird diese Paket ID nicht erkannt.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sie haben bereits ein freies Paket abonniert und können das kein zweites mal tun.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', ' Status <b>0:</b> Fällige Zahlung <b>1:</b> Erstellt <b>2:</b> Gelöscht <b>3:</b> Ablauf' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', 'Mein Konto' );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Betriebsdaten' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Betriebsname' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'Steuernummer' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Gebäude' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: Die folgenden Steuerquoten sind für die Bedingungen des amerikanischen Markts entworfen. Wenn die Benutzung von festen Steuerquoten gewünscht sind (z.B. Mwst.) bitte eine Steuerquote in der folgenden Option wählen.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Rechnungsnummer ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Bitte Daten für die Blankobuchung festlegen. Wenn die passenden Daten gewählt sind den "Anwenden" Knopf klicken um erneut die Verfügbarkeit zu überprüfen. <br/> 
<br/> 
Falls für die Unterkunft eine oder mehrere Buchungen für den gewählten Zeitraum vorliegen kann nur gebucht werden bevor die entsprechenden Buchungen / Blankobuchungen gelöscht oder ausgebucht sind.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Leider ist eine Blankobuchung dieser Unterkunft mit den gewählten Daten nicht möglich.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Eine Blankobuchung für diese Unterkunft mit den gewählten Daten ist möglich.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Die Unterkunft ist zur Rechnungsstellung pro Person und Nacht konfiguriert aber es ist noch kein Gasttyp eingerichtet bzw. publiziert. Bitte einen oder mehrere Gasttypen erstellen und publizieren. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'So lange noch kein Tarif konfiguriert ist können keine Buchungen für diese Unterkunft angenommen werden.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Editiermodus aktiviert' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Editiermodus deaktiviert' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Variable Vorschüsse?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable Vorschüsse erlauben den gesamten Vorschuss zu fällig zu stellen wenn der Ankunftstag der Buchung unterhalb von N Tagen von heute an liegen. Auf Ja setzen um die Option zu aktivieren und die Anzahl der Tage unten einstellen. Damit wird zum Beispiel der komplette Buchungsbetrag sofort fällig wenn der Ankunftstag innerhalb von 60 Tagen liegt, andernfalls die Anzahlung nach den festgelegten Kriterien.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Die Anzahl der Tage innerhalb derer der gesamte Buchungsbetrag als Anzahlung fällig wird.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'E-Mails an den Besitzer an eine alternative Adresse richten?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Ja, falls E-Mails an den Besitzer an die unten stehende Adresse gehen sollen. Bei Nein gilt die im Unterkunfts-Konfigurationsbereich definierte Adresse.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative Adresse für E-Mails an den Besitzer.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Eine Bestätigungs-Mail zur wurde gesendet. Das Fenster kann jetzt geschlossen werden.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Immobilienverzeichnis' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Ist diese Unterkunft Teil eines Immobilienverzeichnisses?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Ja, wenn die Unterkunft verkauft werden soll. Nein wenn es sich um ein Hotel/B&B/Gästehaus handelt, das, bzw. in dem, Räume zur Vermietung angeboten werden und dieses System für Buchungen verwendet werden soll.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Rechnung als bezahlt markieren' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Rechnung als bezahlt markiert' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Neuen API-Key erzeugen' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Google-Übersetzung initiieren?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Dieses Feature ist neu und experimentell. Benutzung auf eigenes Risiko. Der Zweck dieses Features ist, Googles Übersetzungstool zur automatischen Übersetzung einer bestimmten Unterkunft zu benützen. Es ist zu beachten, dass dieses Feature die gesamte Eingabe bearbeitet und wenn ein HTML-Editor zur Formatierung der Unterkunftseigenschaften benützt wurde geht die gesamte Formatierung verloren.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Einzelunterkunft-Installation?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Diese Option vereinfacht die Frontend-Ansicht für nicht autorisierte Anwender erheblich. Voreingestellt wird Jomres nicht mit einer Liste der Unterkünfte sondern mit dem Buchungsformular der ersten Unterkunft im System aufgerufen. Auch Unterkunfts-Manager erhalten nicht die Auswahlknöpfe für Unterkunft Eigenschaften und Hinzufügen. Das ist ideal wenn nur eine Unterkunft aufgelistet und Buchungen dafür angenommen werden sollen.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'HTML Filterfunktion benutzen?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Hier die Nutzung der HTML-Filter-Bibliothek (http://htmlpurifier.org/) einschalten. Die Bibliothek wird als zusätzliche Sicherheitsmaßnahme bei der Verarbeitung von Ein- und Ausgabedaten benützt und es wird empfohlen sie zu aktivieren, obwohl sie mehr Speicher belegt.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Rechnungssaldo' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Saldo' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Hinweis! Sie benützen den Edit-Mode während der Globale Edit-Mode aktiviert ist. Das ist in Ordnung wenn Sie verstehen was Globaler Edit-Modus bedeutet. Falls nicht, könnten Sie sich selbst Probleme schaffen. Wenn Sie unsicher sind ob Sie Jomres auf diese Weise benützen sollten, informieren Sie sich <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">zu diesem Thema im Handbuch</a>.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Lizenzschlüssel' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Die Support Lizenz Schlüssel Nummer (auch als Lizenz Nummer bezeichnet). Es ist eine aktuelle Lizenz nötig um Aktualisierungen und Plugins für Jomres laden zu können.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Individueller Preisnachlass' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Unterkunftsregistrierungen auf ein Land beschränken?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ja, um Unterkunftsregistrierungen auf das Land zu beschränken das im folgenden Feld ausgewählt wird.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Unterkünfte sind in diesem Land: ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery Thema' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Ein "jquery" Thema für die Darstellung der Unterkunfsteigenschaften auswählen.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Leider steht diese Unterkunft im Moment nicht zur Verfügung.' );
jr_define( '_JOMRES_REVIEWS', 'Bewertungen' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Titel der Bewertung' );
jr_define( '_JOMRES_REVIEWS_DATE', 'verfasst am ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Bisher gibt es noch keine Bewertung für diese Unterkunft.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Wollen Sie als erster diese Unterkunft bewerten?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Ich bin mit dieser Bewertung nicht einverstanden' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Durchschnitt der Stimmen: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Stimmen gesamt:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Neue Bewertung abgeben.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Um eine Bewertung abzugeben müssen Sie eingeloggt sein.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Teilen Sie uns Ihre Meinung zu dieser Unterkunft mit: ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Dieser Gast teilte uns mit: ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Zustimmung: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Ablehnung: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Übermittelt am: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Sie haben diese Unterkunft bereits bewertet. Sie können keine zweite Bewertung dieser Unterkunft abgeben.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Sie können leider keine Bewertungen in diesem WEB abgeben.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Klicken um die Bewertungen zu sehen' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' Gäste stimmen dieser Bewertung zu. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' Gäste stimmen dieser Bewertung nicht zu.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' Gast stimmt dieser Bewertung zu. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', ' Gast ist stimmt dieser Bewertung nicht zu.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Vielen Dank für die Teilnahme an dieser Bewertung.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Vielen Dank, aber Sie haben Ihre Meinung zu dieser Bewertung bereits mitgeteilt.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Bitte füllen Sie alle Felder aus.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Bitte fassen Sie Ihre Bewertung in einem Titel zusammen' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Bitte schreiben Sie eine ausführlichere Bewertung in der Textbox' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Bitte teilen Sie uns Ihre positiven Erfahrungen mit die Sie als unser Gast hatten' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Bitte schildern Sie uns die negativen Eindrücke bei Ihrem Aufenthalt' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Wurden Sie freundlich empfangen?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Gefielen Ihnen die Räumlichkeiten?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Bitte beschreiben Sie die Sauberkeit der Unterkunft' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Empfanden Sie die Unterkunft als angenehm oder eher nicht?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Bitte bewerten Sie das Preis- Leistungsverhältnis' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Bitte bewerten Sie den Service' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Zusammenfassung Bewertung' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ihre ausführliche Bewertung' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Vielen Dank für Ihre Bewertung.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Vielen Dank für Ihre Bewertung. Sie wird bald möglichst von einem unserer Moderatoren veröffentlicht.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Bewertungsfunktion von Jomres benützen?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Bewertungen automatisch veröffentlichen?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Falls nein müssen Bewertungen manuell veröffentlicht werden.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Bewertungen in den Testmodus versetzen?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalerweise können Unterkunfts-Manager Unterkünfte nicht bewerten. Im Testmodus ist das möglich. Natürlich ist das in einem produktiven Umfeld nicht ideal.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Das ist eine Liste aller Unterkünfte. Auf die Unterkunft klicken um deren Bewertungen zu sehen. Dort können die Bewertungen veröffentlicht und gelöscht werden.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Anzahl unveröffentlichter Bewertungen' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Anzahl von Bewertungen' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Bewertung veröffentlichen/unveröffentlichen' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Bewertung löschen' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Über Bewertung berichten' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Übersicht der Berichte' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Bitte geben Sie Ihren Bericht ein' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Finden Sie in dieser Bewertung objektive Fehler oder Ungenauigkeiten? Schicken Sie einen Bericht und wir überprüfen das für Sie.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Abschicken' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Bericht erstellt von ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Berichte werden von Benutzern erstellt die mit einer Bewertung nicht einverstanden sind. Die einzige Möglichkeit einen Bericht zu entfernen ist die beanstandete Bewertung zu löschen.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Bewertung (1 = schlecht 10 = ausgezeichnet) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Freundlichkeit ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Situation ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Sauberkeit ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Unterkunft ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Preiswürdig ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Service ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Bewertet von : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Bewertungen verstecken' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Buchungsformular in der Unterkunftsbechreibung anzeigen?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ja, um das Buchungsfomular in der Unterkunftsbeschreibung anzuzeigen. Mit Nein wird ein Link zum Formular statt des Formulars angezeigt.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Steuer inbegriffen?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ja, falls Steuer im Preis enthalten, sonst Nein.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras Steuer:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Die Wochentagsfelder bieten die Möglichkeit für jeden Tag der Woche einen speziellen Preis zu setzen. Ein Klick auf das entsprechende Feld setzt den Preis für diesen Wochentag im gesamten Zeitraum.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Die Datumsfelder und das Preisfeld bietet die Möglichkeit einen Preis für einen gegebenen Zeitraum fest zu legen. Nach der Auswahl von Anfangs- und Enddatum den Preis eingeben und "Preis setzen" klicken.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Beginn Zeitraum' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Ende Zeitraum' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Preis' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Preise setzen' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partner' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Heute' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Vorhergehender' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Nächster' );
jr_define( '_JOMRES_CALENDAR_RTL', 'false' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Zimmer ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'Gast(Gäste). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Hier die Verteilung der Gäste auf ihre Zimmer. Sollten Sie eine Änderung wünschen können Sie das nach Abschluss der Buchnung im direkten Kontakt mit dem Unterkunftsgeber regeln. Beachten Sie, dass dadurch zusätzliche Kosten entstehen können.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Die Unterkunft ist nicht veröffentlicht, nur du kannst Sie aktuell sehen, aber niemand sonst.' );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Standard Suchergebnis Sortierreihenfolge' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Ändern Sie diese Option, um die Reihenfolge der standardmäßigen Präsentation der Suchergebnisse zu ändern.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Zeige Suchergebnis-Sortierreihenfolge dropdown' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Zimmer Anzeigetyp Stil' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'Wenn im Buchungsformular als Anzeigetyp „Klasisch“ gewählt wurde, bieten Sie Gästen einzelne Zimmer an. Beim Anzeigetyp „Zimmertypen“, wählen Gäste dagegen die Anzahl Zimmer vom Typ X (z.B. 2x Doppelzimmer).' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klassisch' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Zimmertypen' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Verfügbarkeit (erneut) prüfen' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Wiederherstellung Freie Zimmer Liste' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Berechnung der Summen' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Abgeschlossene Aktualisierung' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Kalender Wochenbeginn, Sonntag oder Montag' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Nur Unterkunft Gäste können rezensieren?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Setzen Sie diese auf Ja, wenn Sie Bewertungen nur von Gästen erlauben möchten, die bereits Gast in dieser Unterkunft waren.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Pro Zimmer' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Gäste pro Zimmer : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Gäste pro Buchung : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Anzahl der Zimmer' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tarif Standard Preis' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', 'Dies gilt nur für neue Tarife' );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', 'Jahre die gezeigt werden' );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', 'Definiert die Anzahl Jahre die angezeigt werden, bei der Bearbeitung eines "micromanage" Tarifes' );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Januar' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Februar' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'März' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'April' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Mai' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Juni' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Juli' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'August' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'September' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Oktober' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'November' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Dezember' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', 'Property-Management-Prozess' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'Es gibt verschiedene Management-Prozesse in Abhängigkeit von der Art und Weise wie sie ihre Immobilie/Firma anzeigen möchten.' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'Vermietung' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', 'Wählen sie die Vermiet-Option, wenn sie Zimmer in einer Immobilie vermieten (z.B. Hotel/B & B/Villa/Wohnung)' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', 'Immobilien/einfache Auflistung' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', 'Wählen Sie die Immobilien-Option, wenn sie überhaupt keine Buchungs-Funktionalität anbieten möchten (z.B. Verkauf eine Immobilie/von Produkten).' );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Setzen Sie dies auf Ja, um die Anzahl der verfügbaren Optionen für Hausverwalter im Abschnitt der allgemeinen Konfiguration zu reduzieren. Dies ist nützlich, wenn Sie nicht möchten, dass Hausverwalter an zu vielen Einstellungen rumspielen, stattdessen können sie die Datei jomres_config.php bearbeiten, um die Standard-Eigenschaft Optionen zu definieren.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Bitte wählen Sie eine Option für Ihre Buchung' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Schaltet die HTML-Editoren in der Detailseite Unterkunft, im Editiermodus, an. Darüber hinaus ist, wenn diese auf Nein gesetzt ist, dann werden alle html Tags außer P und BR aus dem eingegeben und dem angezeigten Text entfernt.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Eigene Einstellungen' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Seitenvorschau' );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', 'Zeige den Zeitzonen-Wechsler in der Immobilienmanager Symbolleiste?' );

jr_define( '_JOMRES_PARTNER_DISCOUNT', 'Partner Nachlass ' );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Suche Benutzer' );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Geben Sie ein paar Zeichen ein, um einen Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Partner hinzugefügt und Sie werden auf die nächste Seite geführt, auf der Sie dem Benutzer Unterkünfte und Nachlässe zuordnen können.' );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Bestehende Partner' );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Wählen Sie einen Partner, welcher zur Partner-Administration-Seite geführt werden soll.' );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', 'Partner :' );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Suche nach einer Unterkunft' );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Geben Sie ein paar Zeichen des Namens der Unterkunft ein und wählen Sie eine Unterkunft aus.<br/> Wenn Sie eine Unterkunft auswählen, wird diese dem Partner-Portfolio hinzugefügt. Wie auch immer, werden die Partner jedoch keine Rabatte genießen, diese müssen Sie selbst einrichten.' );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuelle Objekte' );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Klicken Sie auf eine Unterkunft um die Partner-Nachlass-Einstellungen für diese Unterkunft zu bearbeiten.' );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', 'Gesperrt? <br/>(Auswählen um einen Manager zu sperren, dies deaktiviert dessen Unterkünfte.) ' );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', 'Klicken Sie auf das Sperren-Symbol (das Symbol mit dem Mann und dem grünen Häkchen), um einen Manager zu sperren. Dies bedeutet, dass der Manager nicht in der Lage ist seine Unterkunft-Management-Funktionen ausführen, und alle seine Unterkünfte werden deaktiviert. „Super-Unterkunfts-Manager“ können nicht gesperrt werden.' );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Dieses Konto wurde gesperrt, es ist derzeit nicht möglich, Ihre Unterkunft(e) mit diesem Konto zu verwalten.' );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager Konto gesperrt' );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager Konto wieder eingesetzt' );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Hausverwalter Konto gesperrt wurde. So lange Ihr Konto gesperrt ist, sind Sie nicht in der Lage irgendeine Management-Funktion auszuüben.' );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Bitte beachten Sie, dass Ihr Manager Konto jetzt aktiv ist. Sie können nun damit fortfahren alle Unterkunfts-Management-Funktionen auszuführen. Bitte melden Sie sich mit Ihrem Konto an und stellen Sie sicher, dass alle entsprechenden Unterkünfte aktiv sind. Danke.' );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Favoriten entfernen' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Buchungsdatenarchiv' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Das Buchungsdatenarchiv ist ein Roh-Daten-Auszug der Buchungsinformationen die nach dem Absenden des Formulars gespeichert wurden. Fahren Sie über ein Datum  um die Roh-Daten zu sehen. Die Informationen werden in der Tabelle XXX__jomres_booking_data_archive gespeichert.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Konto bearbeiten' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', 'Benutzer suchen' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Geben ein paar Zeichen des Benutzernamens ein, um nach einem Benutzer zu suchen.<br/> Wenn Sie einen Benutzer auswählen, so wird dieser automatisch als Manager hinzugefügt und Sie werden auf die nächste Seite weitergeleitet, auf der Sie Eigenschaften und Zugriffsrechte für den Benutzer vergeben können.' );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Bestehende Manager' );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', 'Wählen Sie einen Manager, der zur Manager Administrations-Seite genommen werden soll.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Suche nach Gästezahlen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Zeige die Suche nach Anzahl-Gäste Dropdown' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Suche nach Sternen' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Zeige die Suche nach Anzahl-Sterne Dropdown' );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Anzahl der Gäste' );
jr_define( '_JOMRES_SEARCH_STARS', 'Anzahl der Sterne' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', 'Kommissionsrechnungen' );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Anzahl der Unterkünfte' );

// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', 'Lade Jomres jQuery Bibliothek?' );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', 'Sie können dies auf NEIN setzten, wenn Sie eine Vorlage (Template) verwenden die jquery verwendet. Dies KÖNNTE jquery Konflikte bei einigen Vorlagen lösen, aber nicht bei allen.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Wenn Sie Joomfish verwenden, sollten Sie diese Option auf NEIN setzten und stattdessen den „Joomfish Language Switcher“ verwenden. Der Umschalter ist im Administrator-Bereich immer aktiviert, da er benötigt wird, wenn die Funktion der Label Übersetzungen benutzt wird.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Vorschaubilder von hochgeladenen Bildern werden automatisch erstellt.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Kleine Vorschaubilder max. Breite (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Kleine Vorschaubilder werden in der Unterkunft-Listenansicht verwendet, während mittelgroße Vorschaubilder im Unterkunfts-Kopf verwendet werden.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Kleine Vorschaubilder max. Höhe (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Mittelgroße Vorschaubilder max. Breite (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Mittelgroße Vorschaubilder max. Höhe (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Beschriftungs-Übersetzung' );

jr_define( '_JRPORTAL_ROI_TAB', 'ROI' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', 'Provisions-Funktionalität verwenden?' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Setzen Sie dies auf Ja, um die Manager-Provision-Rechnungen zu zeigen, die bereits aufgeschüttet wurden.' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Provisionsabrechnungen für Manager-Buchungen erstellen?' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Wenn ein Manager eine Buchung vornimmt, bedeutet das, dass auch eine Provisions-Rechnungsposition erstellt wird?' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', 'Eine neue Provisions-Rechnung wurde erhoben' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', 'Eine neue Provisions-Rechnung wurde erhoben, die Ihre Aufmerksamkeit erfordert. Bitte klicken Sie auf den folgenden Link, um die Rechnung anzuzeigen (möglicherweise müssen Sie sich zuerst anmelden).' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Soll ein Manager, bei Rechnungen die als ausstehend markiert sind, automatisch gesperrt werden?' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatischer Sperr-Grenzwert' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Dieser Grenzwert beträgt die Anzahl an Tagen, die ein Manager Zeit hat um eine Rechnung zu bezahlen, bevor er gesperrt wird und seine Unterkünfte deaktiviert werden.' );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Sprachkontext' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Benutzen Sie diese Option um den Sprachenkontext der Site zu ändern. Diese Funktionalität erlaubt es Jomres Etiketten zu benutzen die dem aktuellen Fokus entsprechen. Wenn Sie z.B. ein Makler von Yachten sind, so erlaubt eine Änderung des Kontextes Jomres, das anzeigen von Etiketten aus einer anderen Sprachen-Datei. Zum Beispiel, wenn Sie den Kontext auf Yacht-Makler ändern, so wird Jomres zuerst versuchen die aktuelle Sprache zu finden, danach im Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages nach einem Unterverzeichnis mit dem Namen „yachtmakler“ suchen. Wenn die Datei der aktuellen Sprache existiert, so wird diese verwendet. Falls nicht, so versucht Jomres die englische Sprachdatei aus dem gleichen Verzeichnis zu verwenden. Falls dies fehlschlägt, so verwendet Jomres die Sprach-Datei der aktuell ausgewählten Sprache aus dem Ordner /'.JOMRES_ROOT_DIRECTORY.'/languages.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Erweiterte Site Konfiguration' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Setzen Sie diese Option auf Ja, wenn Sie die erweiterten Website Konfigurationsmöglichkeiten nutzen möchten. Wenn Sie gerade erst damit beginnen mit Jomres zu arbeiten, empfehlen wir Ihnen für das erste die Einstellung auf Nein zu belassen, da die Standard-Installation ausreichend genug ist um damit zu starten. Stattdessen sollten Sie Jomres dem Hauptmenü hinzufügen und sich als „admin“ im Frontend anmelden und beginnen Ihre Unterkünfte zu konfigurieren. Bitte beachten Sie, dass viele der erweiterten Optionen nur Jomres Silver Installationen zur Verfügung stehen. Jomres Lite Benutzer sind deshalb nicht in der Lage, den vollen Nutzen aus den Funktionen zu erhalten, die sie aktivieren.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', 'Lade Jomres jQuery UI Bibliothek?' );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Preis (höchster zuerst)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Preis (niedrigster zuerst)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Preisübersicht und Schätzungen sollten als: pro Nacht, pro Woche oder pro Monat bepreist werden?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Pro Nacht' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Pro Woche' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Pro Monat' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Pro Person' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'Woche(n) an ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'Monat(e) an ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Wie soll die Suchoption für die Anzahl Menschen arbeiten?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Betrifft alle Such-Module. Wenn Sie die Funktion „Suche nach Anzahl Gäste“ nutzen, soll die Suchfunktion nach Unterkünften suchen, deren Tarife Anzahl Gäste kleiner gleich, exakte Anzahl Personen oder größer gleich entspricht? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Bitte warten Sie, Ihre Buchung wird bearbeitet und Sie werden auf die Paypal-Website umgeleitet.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Wenn Sie nicht innerhalb von 5 Sekunden automatisch zu Paypal weitergeleitet werden...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klicken Sie hier' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Buchung gültig ab' );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Buchung gültig bis' );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', 'Gastname' );
jr_define( '_JRPORTAL_COUPONS_DESC_478', 'Gutscheincodes können generiert und an Gäste gegeben werden, als Anreiz um Buchungen vorzunehmen.<br/>Gültig von und bis Daten beziehen sich auf Daten an denen eine Buchung gemacht werden kann, während Buchung gültig von/bis Daten, sich auf Daten beziehen, welche die Buchung abdecken muss, damit der Gutschein gültig ist. Wenn eine Buchung außerhalb dieses Zeitraums fällt, so gelten die normalen Tarife für die Tage die außerhalb des Zeitraumes liegen.<br/>Wenn Sie die Buchung einem bestimmten Gast zur Verfügung stellen möchten, wählen Sie den Namen des Gastes aus der Dropdown-Liste aus, um den Gutschein auf diesen Gast zu begrenzen.' );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Mit Ihrem Gutschein, wurde diese Buchung reduziert von ' );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' auf ' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', 'Setzen Sie dies auf Nein, um das Laden der beiden jQuery UI Javascript und CSS-Dateien zu deaktivieren.' );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', 'Lade Jomres jQuery UI CSS Bibliothek?' );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Setzen Sie dies auf Nein, um nur die jQuery UI CSS-Datei zu deaktivieren.' );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Gesamt inkl. MwSt.' );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unveröffentlichte Unterkunft' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Umwandlungsfunktion verwenden" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "Liste alte und aktuelle Gäste" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Nur aktuelle Gäste" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Währungsumrechnung/Währungscodes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Erkennung API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Unterkunft exkl. Steuern' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Unterkunft inkl. Steuern' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Zimmer Steuern:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Öffne das Buchungsformular' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Zurück zu den Unterkunftsdetails' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatsch ausgewählt?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Restsumme (nach Anzahlung)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter Ressourcen nach ihren Eigenschaften.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Neueste Buchung vor' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'Sekunde' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'Minute' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'Stunde' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'Tag/e' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'Woche' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'Monat/e' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'Jahr/e' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'Dekade' );
jr_define( '_JOMRES_DATEPERIOD_S', 'n' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'erfolgt' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'ab jetzt' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Buchungen sind für den ganzen Tag?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Pro Tag' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Pro Person pro Tag' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "days(s) at" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Wähle heute' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Ausgewählt' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Tage' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Kosten pro Tag: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Anzahl der Tage: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Überschreibe den Gesamtpreis' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Speicher neuen Preis' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Editiere Profil' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Bild' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Edit Tax rate" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Edit Custom field" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "This Jomres version : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Latest Jomres version" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Aktive Unterkunft" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Wechsel die aktive Unterkunft" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Alternative SMTP Einstellungen" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternativer Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Ändere dies zu ihrem SMTP Mail Server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternativer Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Ändere dies zu ihrem SMTP Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Abhängig von Ihrem SMTP-Server-Einstellungen, müssen sie dieses Feld frei lassen, oder geben sie 'ssl' oder 'tls' ein. Fragen sie Ihren SMTP Provider wenn sie diese nicht wissen." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Benutze Authentifikation" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "Wenn ihr SMTP Server einen Bentzer zum Login benötigt, setzen sie hier den Wert Ja. Der Benutzername und Passwort wird dann benutzt." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternativer Benutzername" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternatives Passwort" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warnung : Sie haben das Joomla System Cache plugin aktiviert. Wir empfehlen Ihnen, dieses Plugin zu deaktivieren, da die Ajax Rückgabewerte zum Buchungsformular zwischengespeichert werden, so dass sich Ihr System fehlerhaft verhalten könnte." );

jr_define( '_JOMRES_QUICK_INFO', "Quick Info" );

jr_define( '_JOMRES_MENU_SHOW', "Zeige" );
jr_define( '_JOMRES_MENU_HIDE', "Verstecke" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Benutze das alternative Menü Layout?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Standart" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Jeder" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registriert" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Niemand" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menü Zugangskontrolle" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "Diese Option erlaubt es zu definieren wer ein Plugin im Hauptmenü sehen darf. Typischerweise Benutzer Optionen 00009 sind sichtbar für regustrierte/ oder unregistrierte Seitenbesucher, 00010 Optionen sind generell für den Typ Reception und beinhalten Aktivitäen die auf eine Tag zu Tag Basis dienen, während 00011 Optionen für das Einrichten und Konfigurieren einer Unterkunft verwendet wird, weche aber nicht alzu oft erfolgen." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Volle Zugangskontrolle" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Full Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Users with admin rights to this property" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "List all user's invoices" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Thema' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Ihr voller Name' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Ihre Mail Adresse' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Bitte beschreiben sie ihren Fehler' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta Title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta Beschreibung' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Properties found" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Füge Ihre Unterkunft hinzu : 1 von 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Füge Ihre Unterkunft hinzu : 2 von 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'Mein Geschäft' );


jr_define( '_JOMRES_CART_TITLE', 'Meine Buchungsvorschläge' );
jr_define( '_JOMRES_CART_INFO', 'Achtung, diese Buchungen sind noch nicht gespeichert. Wenn sie ausloggen oder ihre Session abgelaufen ist, sind diese verloren. Denken Sie daran, Ihre Buchungen zu bestätigen!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Buchung(en) bestätigen' );
jr_define( '_JOMRES_CART_OR', ' oder ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Speichere für später' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'Sie haben noch keine Buchungen gespeichert.' );
jr_define( '_JOMRES_CART_VIEWCART', 'Zeige View Korb' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Sprachdatei Unterverzeichnis' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standart Latitude Startpunkt' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Standart Longitude Startpunkt' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?' );

jr_define( '_JOMRES_CLEARDATES', 'Ich habe noch kein Datum' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Emails werden von welcher Adresse gesendet?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Benutze css cache?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Listenansicht" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Fotoansicht" );

jr_define( '_JOMRES_COMPARE', "Vergleiche" );
jr_define( '_JOMRES_REMOVE', "Entferne" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Zurück zu den Suchresultaten" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Merken" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Von Merkliste entfernen" );
jr_define( '_JOMRES_VIEWSHORTLIST', "Zeige Merkliste" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Important: Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "We use cookies to help keep our site relevant and easy to use." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Read more..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Yes, I accept the use of cookies in this way." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Mobile device settings" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simulate mobile mode" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Enable safe mode?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );

jr_define( 'COMMON_NEXT', "Nächster" );
jr_define( 'COMMON_CANCEL', "Abbrechen" );
jr_define( 'COMMON_SUBMIT', "Senden" );
jr_define( 'COMMON_SAVE', "Speichern" );
jr_define( 'COMMON_DELETE', "Löschen" );
jr_define( 'COMMON_RETURN', "Zurück" );
jr_define( 'COMMON_CLOSE', "Schliessen" );
jr_define( 'COMMON_BACK', "Zurück" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "Neu" );

jr_define( 'COMMON_SEND', "Senden" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Aktion" );
jr_define( 'COMMON_VIEW', "Anzeigen" );

jr_define( 'BACKTOTOP', "Zurück nach oben" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Schwach" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Stark" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Property details in tabs?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Drucken" );

jr_define( 'COMMON_EDIT', "Editieren" );
jr_define( 'COMMON_COPY', "Kopieren" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Benutze Jomres Bootstrap template im Administratoren Bereich?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Hier sind einige Alternativen, die Sie in Betracht ziehen könnten." );

jr_define( '_JOMRES_BEEZ_WARNING', "Achtung, ihre Joomla Template ist auf Beez3 gesetzt. Bitte beachten sie das unser Template nicht mit Beez3 kompatibel ist. Wir empfehlen, dass sie ihre Seite auf ein Bootstrap template wie Protostar setzten." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Automatische Gast Ländercode Erkennung?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Das System versucht das Land des Gastes automatisch zu erkennen, falls dieser nicht schon vorher gebucht hat. Sie können diese Option auch auf Nein stellen und das Land das sie im Buchungsformular bevorzugen in der nächsten Option angeben." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "Über Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "Hilfe" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Los gehts" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "System Wartung" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Zugangskontrolle" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "Entwickler Tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "Sprachen" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "Konten" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "Buchungen" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "Seiten Struktur" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "Benutzer Management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Anleitung (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Mein Konto (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "CRON Aufgaben" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "Portal Funktionen" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin Manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "Integration" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "Report/Statistiken" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "Steuern" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "Hilfe" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Aktualisierung" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "Bezahlungssysteme" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tarif Standart" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "Dies gilt nur für neue Tarife" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Jahre zum anzeigen" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Definiere die Anzahhl der Jahre die gezeigt werden soll wenn sie einen Tarif Typ editieren." );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "Rechnungen" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "Konto Details" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "Suche" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "Dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "Reserviere" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "Management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "Rechnungen" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "Einstellungen" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Editiere Land" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "Land id" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Land Code" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Name des Landes" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Editiere Region" );
jr_define( "_JOMRES_EDIT_REGION_ID", "Region id" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Land Code" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Name der Region" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "Liste Länder auf" );
jr_define( "_JOMRES_COM_LISTREGIONS", "Liste Regionen auf" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Exportiere Definitionen" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "Diese Option erlaubt es Übersetzungen zu exportieren, die mit der Sprachübersetzungsfunktion erstellt wurden. Es generiert ein Textfeld mit allen relevanten Textinhalten für eine neue Sprachendatei, benutzen sie kopieren und einfügen um eine neue Sprachdatei für ihren Jomres Server zu erstellen. Sie haben eine neue Sprachdatei erstellt. Wenn sie die Jomres Community unterstützen wollen, senden sie uns Ihre neue Sprache. Danke!" );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Übersetze Länder" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Übersetze Sprachdatei" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Fehler, der von ihnen eingeloggte Benutzer ist kein Super Manager in Jomres, sie können diese Option nicht nutzen. Benutzen sie die Zeige Profil Option um sich selbst zum Manager und zum Super Manager zu machen. Dies ist eine Sicherheitsfunktion." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Liste Standard Layout Eigenschaften" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Bleiben Sie für ein Minimum von" );
jr_define( "_JOMRES_NIGHTSFOR", " Nächten " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Unterkunft Bilder Liste, zeigt das Unterkunftsbild als gif wenn Slideshow Bilder verfügbar sind." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Zeige als GIFs nur wenn die Unterkunft bevorzugt angezeigt werden soll." );

jr_define( "_JOMRES_AGENT", "Agent" );
jr_define( "_JOMRES_AGENT_DETAILS", "Agent Details" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agenten Liste" );

jr_define( "_JOMRES_PROPERTY_LANG", "Unterkunftssprache" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "Die voreingestellte Sprache für diese Unterkunft." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Automatische Bestätigung neuer Unterkünfte" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "Wenn sie diese Option auf Nein stellen, müssen sie alle neuen Unterkünfte manuell prüfen und bestätigen. Solange eine Unterkunft nicht bestätigt wurde, kann sie von einem Manager/Super Unterkunfts-Manager nicht veröffenlicht werden." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Bestätigungen" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Unterkünfte warten auf Bestätigung" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "Keine Unterkünfte warten auf Bestätigung" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Bestätige Unterkunft" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Zeige Unterkunft" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "Die Unterkunft wurde noch nicht bestätigt. Nur wenn diese bestätigt wurde können sie sie veröffentlichen." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Entschuldigung, sie können diese Unterkunft noch nicht freigeben da sie noch nicht bestätigt wurde." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "Eine neue Unterkunft benötigt ihre Bestätigung" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "Eine Unterkunft wurde im System hinzugefügt welches ihre Bestätigung benötigt. Klicken sie den Link um die auf Bestätigung wartenden Unterkünfte anzuzeigen: " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Ihre Unterkunft wurde bestätigt" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Herzlichen Glückwunsch, ihre Unterkunft wurde bestätigt, bitte klicken sie auf den folgenden Link um zum Unterkunfts Kontrollzentrum zu gelangen : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region Namen sind übersetzbar" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Nur für schnelle Server andernfalls lassen sie hier die Option auf Nein. Anhand der großen Anzahl von Namen aller Regionen braucht die Übersetzung viel Speicher und verlangsamt die Anzeige des Suchergebnisse." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Gast ausgebucht." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Entschuldigung, diese e-Mail Adresse wird bereits benutzt. Wenn das Ihre e-Mail Adresse ist, bitte versichern sie sich, dass sie eingeloggt sind bevor sie buchen.' );

jr_define( "JOMRES_TAPTOCALL", "Tap to call" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "New review for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "A new review has been left for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "New Report" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Non registered user" );

jr_define( "JOMRES_JQUERY18_2", "Use Jquery 2.x?" );
jr_define( "JOMRES_JQUERY18_2_DESC", "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. " );

jr_define( "JOMRES_SUPERIOR", "Superior" );
jr_define( "JOMRES_SUPERIOR_S", "(S)" );

jr_define( "JOMRES_GRANDTOTAL_EX_TAX", "Grand total (ex tax) : " );
jr_define( "JOMRES_GRANDTOTAL_INC_TAX", "Grand total (inc tax) : " );
jr_define( "JOMRES_GRANDTOTAL_TOTAL_TAX", "Total tax : " );

jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "Type the two words: " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Enter what you hear: " );
jr_define( "JOMRES_RECAPTCHA_PLAY_AGAIN", "Replay the audio track " );
jr_define( "JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Download the track in MP3 format" );
jr_define( "JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Visual mode" );
jr_define( "JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Audio mode" );
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Refresh" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Help" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Sorry, that was incorrect. Please try again." );


jr_define( "JOMRES_GOOGLE_MAPS", "Google map options" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Use weather layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit or Celcius? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Use Panoramio layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Use transit layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Use traffic layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Use bicycling layer?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Enable Gmap Points of Interest (including possibly your competitors)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Meta Keywords" );

jr_define( "_JOMRES_PLEASE_PRINT", "Please print this email and present it on your arrival." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office use only" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Scan this code into your phone to get directions to us." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Use the built in VIES VAT validation feature?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Congratulations. We were able to validate your VAT number." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "VAT number wasn't entered." );
jr_define( "_JOMRES_TAX_RULES_LIST", "List tax rules" );
jr_define( "_JOMRES_TAX_RULE", "Tax rule" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the \"edit my account\" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Import tax rates" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Edit tax rule" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "The VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Please enter the VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "VAT number validated." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "VAT number not validated." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Business details entered here will be used on commission and subscriptions invoices." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Production or Development?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to \"production\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Production" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Development" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Bilder");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Upload Service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Bild hinzufügen");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Zimmer Bilder");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Hauptbild");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Diashow Bilder");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Liste Löschen");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop Dateien hier!");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"Das Bild ist zu groß, maximal ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Nur JPG und PNG Bilder sind erlaubt.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"Hast du mehrere Bilder, wird das 1. für das Hauptbild verwendet!");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Zeige Bilder");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Lösche Bilder");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Hochladen");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Zimmerbilder");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature icons");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Lade alles hoch");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Dashboard, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Active property switch page." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "This is where your property names will show." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "This is your property header." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Your photo gallery." );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Main buttons." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Inline Calendar." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Rooms list tab" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Here you can see all rooms, and the availability of each room if you click on the availability button." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Reviews list." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Map tab." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Under this tab your guests can see your property in a zoomable map." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "More Information tab." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Booking Form." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Your guests can either go to a separate page, or they can use the booking form in this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Main Property Details." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "All current and future tariffs" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Local Events." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "Local Attractions." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "If there are any attractions near to you, like museums or amusement parks they will be listed here." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Available Auctions." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Your Business details." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "External links." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellaneous ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffs" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tourist Tax." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "The table." ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Property creation, step 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Property country." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "The property type." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast." );

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Property creation step 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP or SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Property name & address." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Please enter the property name and address in the following fields." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Number of stars." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Property features." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "List all bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "List new bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "List old bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "Gästeliste" );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particulars." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Gäste" );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Guest details." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Guest types." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Optional extras." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Media Centre." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Finished!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );

//8.0
jr_define('COMMON_PREV' , "Vorher" );
jr_define('COMMON_MORE' , "mehr" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Heute" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Jahr" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Monat" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Woche" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Tag" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "Von" );
jr_define('_JOMRES_HTO' , "Bis" );
jr_define('_JOMRES_HNEW_BOOKING' , "Neue Buchung" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Zahlstatus" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Gästestatus" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Buchungsstatus" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publishing status" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Rechnungsstatus" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Rechnungstyp" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Best&auml;tigt" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Objekt" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Zeige Buchungen f&uuml;r" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Zeige Rechnungen f&uuml;r" );
jr_define('_JOMRES_STATUS_ANY' , "Alle" );
jr_define('_JOMRES_STATUS_PAID' , "Zahlung" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Unbezahlt" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Ausgecheckt" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Aktiv" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Abgesagt" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Ver&ouml;ffentlicht" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Nicht ver&ouml;ffentlicht" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisorische Buchung" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Best&auml;tigte Buchung" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Gäste mit einer Aktiven Buchungen" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "G&auml;ste mit vergangenen Buchungen" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Buchungen" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Abonnements" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Kommissionen" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "Alle Unterkünfte" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Als aktiv setzten" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Einchecken" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Auschecken" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "Buchungen" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "Unterkunft" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "Gäste" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "reports" );
jr_define( "_JOMRES_HLIST_GUESTS", "Gäste" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "Gäste Auflisten" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "Rechnungen auflisten" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Objekte" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Schnelles Buchen" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Datum der Buchung" );
jr_define( "_JOMRES_HTWO_WEEKS", "2 Wochen" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "Diese Buchung wird storniert werden. Dr&uuml;cken Sie auf OK, um die Buchung zu stornieren." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Heutige Eincheckvorg&auml;nge" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Heutige Auscheckvorg&auml;nge" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Aktuelle G&auml;ste" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Einstellungen Navigationsleiste" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Position Navigationsleiste" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Standard (Inhaltsbereich)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fixiert oben" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fixiert unten" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Invertierte Navigationsleiste (Farbe &auml;ndern)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Buchungsnummer" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Zeige Gäste für" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Derzeit gilt das nur f&uuml;r das Frontend. Diese Option erlaubt es Ihnen zu w&auml;hlen, ob Jomres Templates die mit Bootstrap 2 oder Bootstrap 3 kompatibel sind, verwenden soll. Sofern Sie nicht sicher sind, ob Ihr Template mit Bootstrap 3 funktioniert, sollten Sie im Zweifel Bootstrap 2 verwenden." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Zeige Gäste für" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Feste Zeitr&auml;ume" );
jr_define('_JOMRES_HDEPOSITS' , "Anzahlungen" );
jr_define('_JOMRES_HBOOKING_FORM' , "Buchungsformular" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Erforderliche Felder" );

jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Tom" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Smith" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "My Street" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "My Town" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "My Hotel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "example@address.com" );

jr_define('EXTENDED_CONFIGURATION' , "Erweiterte Konfiguration" );
jr_define('SIMPLE_CONFIGURATION' , "Einfache Konfiguration" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Eigenschaften" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Typ" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Gasttyp bearbeiten" );
jr_define('_JOMRES_HEDIT_COUPON' , "Coupon bearbeiten" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Extras bearbeiten" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Mehrere gleichzeitig Anlegen" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Jetzt Anlegen" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "Wie viele?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Typ" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Maximale Gästeanzahl" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Sollen wirklich alle gelöscht werden?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Bitte beachten Sie, dass Sie den Administrator-Bereich gerade mit Erweiterte Site Konfiguration auf Nein gesetzt betrachten. Um zus&auml;tzliche Optionen zu sehen, setzen Sie bitte Site Konfiguration -> Verschiedenes -> Erweiterte Site Konfiguration auf Ja.' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Buchungs Konfiguration." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "Auf dieser Registerkarte k&ouml;nnen Sie das Aussehen und das Gef&uuml;hl des Buchungsformulars konfigurieren." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Buchungen." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "Auf dieser Registerkarte k&ouml;nnen Sie einstellen, wie Buchungen behandelt werden, sowie verschiedene andere Einstellungen." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Gast bearbeiten." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Hier k&ouml;nnen Sie die Adressdaten eines Gastes bearbeiten. Bitte beachten Sie, dass alle &Auml;nderungen, die Sie hier vornehmen, nur in diesem Datensatzsatz Anwendung finden. Hat der Gast Buchungen bei anderen Objekten vorgenommen, so werden diese &Auml;nderungen nicht auf anderen Objekten erscheinen." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "MwSt." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "Falls eine Steuernummer hier eingetragen wurde, so wird sie auf der Rechnung des Gastes ausgewiesen." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Rabatt." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "Sie k&ouml;nnen w&auml;hlen, diesem Gast automatischen einen Rabatt zu gew&auml;hren, wann immer auch der Gast eine Buchung t&auml;tigt." );


jr_define('DATATABLES_SINFO' , "Zeige _START_ bis _END_ von _TOTAL_ Eintr&auml;ge" );

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Approval");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Reject booking inquiry");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Approve booking inquiry");
jr_define('_JOMRES_STATUS_APPROVED',"Approved");
jr_define('_JOMRES_STATUS_REJECTED',"Rejected");
jr_define('_JOMRES_STATUS_INQUIRY',"Inquiry");

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Bookings require approval or availability confirmation?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.");

jr_define('_JOMRES_ERROR',"Error");
jr_define('_JOMRES_ERROR_MESSAGE',"Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Message");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"File");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Line");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Trace");


jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Email templates");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Edit email template");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Email subject");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Email text");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Email type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Email name");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Email description");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://manual.jomres.net/email_templates.html\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Site Admin New Booking Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Hotel New Booking Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Email sent to property owner when a new booking is made");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Guest New Booking Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Email sent to guest when a new booking is made");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Guest Confirmation Letter");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Printable letter or email that can be sent manually by the property owner to confirm a booking");


jr_define('_JOMRES_CAN_BE_APPROVED',"This booking can be approved. All selected resources are available for the selected dates.");
jr_define('_JOMRES_CANT_BE_APPROVED',"This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.");

jr_define('_JOMRES_SHOW_POWEREDBY',"Show the Powered by Jomres link in the Jomres footer.");


jr_define('GUEST_BUDGET',"Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Use Budget feature?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ' );


jr_define( '_JOMRES_FOR', 'For' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHT', 'night' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY', 'Show price overlay' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.' );

jr_define( '_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?' );

jr_define( "_JOMRES_ONLINE_PARTNERS", "Partners" );

jr_define( '_JRPORTAL_MONTHS_SHORT_0', 'Jan' );
jr_define( '_JRPORTAL_MONTHS_SHORT_1', 'Feb' );
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Mär' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Apr' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'Mai' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Jun' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Jul' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Aug' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Sep' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Okt' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Nov' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Dez' );


jr_define('DATATABLES_SEMPTYTABLE'		, "Keine Daten in der Tabelle vorhanden" );
jr_define('DATATABLES_SINFO'			, "_START_ bis _END_ von _TOTAL_ Einträgen" );
jr_define('DATATABLES_SINFOEMPTY'		, "0 bis 0 von 0 Einträgen" );
jr_define('DATATABLES_SINFOFILTERED'	, "(gefiltert von _MAX_ Einträgen)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "." );
jr_define('DATATABLES_SLENGTHMENU'		, "_MENU_ Einträge anzeigen" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "Wird geladen..." );
jr_define('DATATABLES_SPROCESSING'		, "Bitte warten..." );
jr_define('DATATABLES_SSEARCH'			, "Suchen" );
jr_define('DATATABLES_SZERORECORDS'		, "Keine Einträge vorhanden." );
jr_define('DATATABLES_SFIRST'			, "Erste" );
jr_define('DATATABLES_SLAST'			, "Letzte" );
jr_define('DATATABLES_SNEXT'			, "Nächste" );
jr_define('DATATABLES_SPREVIOUS'		, "Zurück" );
jr_define('DATATABLES_SSORTASCENDING'	, ": aktivieren, um Spalte aufsteigend zu sortieren" );
jr_define('DATATABLES_SSORTDESCENDING'	, ": aktivieren, um Spalte absteigend zu sortieren" );


jr_define('DATATABLES_SHOWHIDE'	, "Change columns" );

jr_define( '_BOOKING_ONREQUEST', 'Booking on request' );
jr_define( '_BOOKING_INSTANT', 'Instant booking' );

jr_define( '_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?' );
jr_define( '_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.' );

jr_define( '_BOOKING_CALCQUOTE', 'Request booking' );

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');

jr_define('_JOMRES_WORD_CACHING', 'Caching');


jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');

jr_define( '_JOMRES_HLASTCHANGED', 'Last changed' );

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Hotel Booking Cancellation Email");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"Email sent to the property owner when a new booking is cancelled");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Guest Booking Cancellation Email");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"Email sent to guest when a new booking is cancelled");

jr_define('_JOMRES_TEST_EMAIL_SEND',"Send test email");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Test email");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"This is a test email from your booking system.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Test email sent successfully");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Test email was not sent");


jr_define('_INVOICE_TRANSACTIONS',"Transactions");

jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API key");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at https://openexchangerates.org/signup/free (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION',"Commission");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"If you upload multiple images for individual optional extras, only the first image will be used.");
jr_define( '_JRPORTAL_INVOICES_PAYNOW', "Pay now" );
jr_define( '_JRPORTAL_INVOICES_PAYNOW_DESC', "This invoice in now due. Please click the button to select the payment method." );
jr_define('_JOMRES_EXTRAS_TEMPLATE',"Here's a list of some of the great things you can purchase while making a booking at this property. ");

jr_define( '_ASSIGN_COMMISSION_RATES', 'Assign commission rates' );


jr_define( 'GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.' );
jr_define( 'EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?' );

jr_define( 'PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings' );

jr_define( '_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.' );


jr_define( 'PROPERTY_STATS_SALES', 'Sales' );
jr_define( 'PROPERTY_STATS_SALES_DESC', 'This is when bookings were taken' );

jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS', 'Bookings (days)' );
jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Booking dates start and number of days.' );

jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Bookings (rooms x days)' );
jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Number of rooms booked out in a certain month.' );

jr_define( '_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons' );


jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Business Features Categories' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Business Feature Category' );
jr_define( '_JOMRES_HCATEGORY', 'Category' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show business features separated into categories?' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.' );

jr_define( '_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin' );
jr_define( '_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout' );

jr_define( '_JOMRES_STATUS_UNISSUED', 'Unissued' );

jr_define( 'DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accomodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

' );


jr_define( '_JOMRES_NUMBER_OF_BEDROOMS', 'Bedrooms' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.' );

jr_define( '_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type' );
jr_define( '_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.' );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches." );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Give your property a sub-type" );


jr_define( "_JOMRES_EMAIL_TEMPLATES_TITLE", "Email templates" );


jr_define( "_JOMRES_CONTACT_SETTINGS", "Contact settings" );
jr_define( "_JOMRES_CONTACT_SETTINGS_DESC", "From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners." );
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Override listings contact details?");
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again." );
jr_define( "_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.");


jr_define( '_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request' );


jr_define( '_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending' );
jr_define( '_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending' );

jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );

jr_define( '_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.' );
jr_define( '_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details" );
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- New Guest -- " );

jr_define( '_JOMRES_CHARTS', 'Charts' );
jr_define( '_JOMRES_CHARTS_SELECT', 'Select chart...' );
jr_define( '_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month' );

jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Ok, let's get started. First you need to create some rooms for this property." );
jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Create some rooms now" );

jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings." );
jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Upload an image" );

jr_define( "_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Create some tariffs" );

jr_define( "_JOMRES_PROPERTYTYPE_FLAG", "What will guests book?" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_DESC", "Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? " );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Rooms in the property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_VILLA", "The entire property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_NEITHER", "Other (Tours/Realestate)" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Both" ); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable 
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "What will guests book?" );

jr_define( "_JOMRES_ADDRESS_SANITY_CHECK", "You'll need to complete your address details so that your guests can find you when they come to stay." );
jr_define( "_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Update your address" );


jr_define( "_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED", "Oops, it looks like you might have forgotten to complete all the fields." );

jr_define( "_JOMRES_MANAGER_HAS_NO_PROPERTIES", "Error, this user is configured as a manager but has not been assigned to any properties" );

jr_define( "_JOMRES_CONTANT_US", "Contact us" );


jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Welcome to your new online listing for " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_1", "Hi, and welcome to your new property on " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_2", "You recently added a new property to our website, and we'd like to welcome you to the family." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3", "You can see your new dashboard " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", " here " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4", "Once you've setup your property you can see how it looks to site visitors by visiting " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", " your front page." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_5", "(it's not published, so site visitors can't see it yet)." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_6", "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7", "If you have any questions at all, please " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "contact us" );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_8", "and we'll be delighted to answer all your questions." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "All the best, our team at " );


jr_define( "_JOMRES_JINTOUR_SANITY_CHECK", "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours." );
jr_define( "_JOMRES_JINTOUR_SANITY_CHECK_LINK", "Let's create some tours!" );

jr_define( '_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location' );
jr_define( '_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.' );

jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.' );

jr_define( 'COMMON_DOWNLOAD', 'Download' );

jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.' );


jr_define( '_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them' );
jr_define( '_JOMRES_LAT', 'Lat (nn.nnnn)' );
jr_define( '_JOMRES_LONG', 'Long (nn.nnnn)' );

jr_define( '_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.' );
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the /jomres/logs location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the /jomres/logs directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );
