<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

//German Translation since Jomres V2: Roger Perren (http://www.blueforce.ch)

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Zeige Tarife im Rahmen, nicht als PopUp?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adressinformation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Kurzinformationen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Zeige Zimmer und Verfügbarkeit');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zeige Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Zeige Adressinformation unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Zeige Kurzinformationen unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zeige Zimmer und Verfügbarkeit unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Zeige Tarife unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Feste Rate');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Durchnittliche Rate');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Wählen Sie das Tarifmodell');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Sie haben die Wahl zwischen zwei Kalkulationsmethoden. Die 'Feste Rate' erlaubt Ihnen verschiedene Tarife Ihren Gästen anzubieten. Die Rate ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn Sie verschiedene Tarife im gleichen Zeitraum anbieten wollen, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br> Wählen Sie 'Durchnittliche Rate' falls Ihr Tarif auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Tarife für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt eine durchschnittliche Rate über den Buchungszeitraum zurück.");
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Bitte wählen Sie die Zimmer und Zeiträume die Sie sperren möchten.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn Sie die entsprechenden Zeiträume ausgewählt haben, drücken Sie den blauen Button um die Sperrungen zu bestätigen.');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Sie sind wegen zu langer Inaktivität vom System ausgeloggt worden</b> Bitte loggen Sie sich ein und versuchen es erneut.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Bemerkungen');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Online Zahlung?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Markieren Sie JA, falls Sie Online-Zahlungen akzeptieren wollen. <b>ACHTUNG:</b> Dies deaktiviert nicht die Anzahlung, die während der Buchungen angezeigt wird. Um die Anzahlung zu deaktivieren müßen in den Templates die Anzeige für die Anzahlung entfernt werden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Bitte Zahlungsweise wählen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Zahlung aktiviert?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin-Einstellung geändert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin-Einstellung eingefügt');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Verschlüsselung');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Benutzen Sie mCrypt-Verschlüsselung?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Setzen Sie auf JA, falls mCrypt in PHP kompiliert ist.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Schlüssel');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Verschlüsselungs-Modus');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Algorythmus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Viewed credit card');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Updated credit card');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Edit credit card');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Icongröße bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Gemessen in Quadratpixel.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unterkunftbilder hochladen');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Vorhandene Bilder');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Diaschau');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Zeige Link zur Diaschau?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Diaschau im Unterkunft eingebettet?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Markieren Sie JA, falls Sie die Diaschau nicht als Popup, sondern im aktuellen Rahmen anzeigen wollen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Diaschau Höhe');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Höhe vom Vorschaubild');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Diaschau');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, kein Bild für dieses Unterkunft verfügbar');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','PopUp Fensterbreite');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','PopUp Fensterhöhe');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Bildverzeichnis');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Ändern Sie das Verzeichnis nur falls Sie wichtige Gründe dafür haben. Die Voreinstellung, falls nicht schon geändert, ist \'/images/stories/jomres/\' relativ zum CMS Rootverzeichnis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Zeige Link zu Tarifen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','PopUps erlaubt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Falls auf NEIN gesetzt, werden Links, die normalerweise in einem PopUp geöffnet werden, im aktuellen Rahmen der Seite geöffnet. TESTPHASE! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Bilder upload');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Benutzen Sie dieses Formular um mehrere Bilder von diesem Unterkunft hochzuladen.<br/><b>ACHTUNG:</b> Alle Bilder mit gleichen Namen werden überschrieben. Beachten Sie, dass zimmerspezifische Bilder oder Unterkunftlogos hier nicht hochgeladen werden können. Diese Bilder müssen über die Unterkunftadministration geladen werden (Unterkunft bearbeiten).<br/><b>Beachten Sie:</b> Die hier hochgeladenen Bilder werden im Verzeichnis /images/stories/jomres/*property_uid* gespeichert. Falls dieses Verzeichnis nicht existiert, wird es vom System angelegt außer in der Konfiguration wurde ein anderes Verzeichnis festgelegt.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Diverses');
/**
* @ignore
*/
define('_JOMRES_A','Konfiguration');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Benutzen Sie die allgemeinen Unterkunfteigenschaften');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Markieren Sie JA, falls alle Unterkunfte die vom Webmaster voreingestellten Eigenschaften verwenden müssen.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Um ein Bild dieser Eigenschaft zuordnen zu können, müssen Sie zuerst Ihre Bilder in folgendes Verzeichnis laden: /images/stories/jomres/pfeatures/');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wählen Sie das gewünschte Such-Plugin.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, Ihre Suche zeigt kein Ergebnis. Bitte ändern Sie Ihre Eingabe und versuchen es noch einmal.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Sind Sie sicher?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Buchen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sicherheitscode');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Ankünfte heute anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Abreisen heute anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Buchungsanfragen anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','andere Anfragen anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Schnellreservierung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Live-Buchungen auflisten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Benutzerprofile anzeigen und Rechte setzen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Sprachdatei bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICK______DESC','Leer lassen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Allgemeine Einstellungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Rabatt-Einstellungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Zimmereinstellungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Zimmer konfigurieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Preise konfigurieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Zurück');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Zurück zur Mos Residents Buchungsliste');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Konfiguration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Beispieldaten laden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Ja');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Nein');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Neu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Neues Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Neue Zimmereigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Neue Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Neue Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Neue Unterkunfteigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Neuer Gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Sichern');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nachname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ankunftsdatum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Abreisedatum');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Leer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Benutzerrechte definieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Benutzername');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','momentan autorisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Standardhotel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','ändern');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Zugangsrechte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Benutzer geändert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Hotel ändern');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Zugangsrechte ändern');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Rezeption');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Hotelmanager');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Buchungs-Administration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Buchung ändern für ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Ankunft/Abreise');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Bezahlung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Vorname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nachname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Der Gast wird heute anreisen. Bitte klicken Sie hier, sobald er eingetroffen ist.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Notizen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Besondere Anforderungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Bitte beachten Sie, dass manche besonderen Anforderungen Zusatzkosten verursachen können.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Anzahl Erwachsene');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Anzahl Kinder');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Buchung stornieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Website UserID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Straße');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ort');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PLZ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-Mail-Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Voreinstellungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Autokennzeichen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','vom Gast abgesagt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','vom Hotel abgesagt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Grund der Absage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Tage bis zur Ankunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Stornierungskosten, Grund:</b>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Buchung kann nicht storniert werden, da der Gast schon eingecheckt ist.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Anzahlung geleistet, keine offenen Beträge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Anzahlung geleistet, Anzahlung noch offen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Anzahlung geleistet, 50% des Gesamtbetrages offen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Anzahlung nicht geleistet, 50% des Gesamtbetrages offen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Anzahlung geleistet, 100% des Gesamtbetrages offen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Anzahlung nicht geleistet, 100% des Gesamtbetrages offen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Rest druch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Diese Buchung stornieren.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Stornierung bestätigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Buchung storniert.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Art der Buchung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Verdeckt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Rezeption');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Zimmername');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Zimmernr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Behindertengerecht?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. Pers.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Beschreibung Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Liste Zimmereigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&euro;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','EUR');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Tarifbedingungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Anzahlung geleistet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Anzahlung eingeben');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Gesamtbetrag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Anzahlung Ref.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Bezahlung Ref.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Buchungsnummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Anzahlung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Anzahlung gespeichert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Warnung...</FONT></h1><BR><B>Bitte ändern Sie die Zugriffsrechte der Sprachdatei in 766, um die Datei bearbeiten zu können.</B></center><BR><BR>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Schnellauswahl Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Auswahl');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Anzahl Erwachsene');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Anzahl Kinder');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Kinderbett benötigt?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Geben Sie entweder die Anzahl der Nächte ein, die der Gast bleiben wird, oder den Abreisetag.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Anzahl Nächte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Bitte wählen Sie eine Zimmerkategorie und das Ankunftsdatum des Gastes aus. Geben Sie ENTWEDER an, wieviele Nächte der Gast bleiben möchte oder das Abreisedatum. Dann tragen Sie bitte die Anzahl der Erwachsenen und Kinder ein.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Freie Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','Â ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Nummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Behindertengerecht?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Art des Zimmers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Zu viele Gäste für die Anzahl der freien Zimmer.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="4">Es sind leider keine Zimmer verfügbar, auf die die gewählten Eigenschaften zutreffen.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Bitte aus der Liste auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Gast auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Gästeliste');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">FEHLER bei der Datenauswahl.<br>Bitte klicken Sie auf zurück und versuchen Sie es erneut.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">FEHLER: Um zu buchen, brauchen Sie mindestens einen Gast.<br>Bitte klicken Sie auf zurück und versuchen Sie es erneut.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">FEHLER: Die ausgewählten Zeiträume sind fehlerhaft.<br>Bitte klicken Sie auf zurück und versuchen Sie es erneut.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">FEHLER: Sie haben keine Zimmerart angegeben.<br>Bitte klicken Sie auf zurück und versuchen Sie es erneut.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">FEHLER: Buchungsdatum liegt in der Vergangenheit oder ist heute.<br>Bitte klicken Sie auf zurück und versuchen Sie es erneut.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Daten des Gastes eingeben');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Daten des Gastes bestätigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Details Gast');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Vorname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nachname');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Strasse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Ort');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','PLZ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobil');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','E-Mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Registrierungsnr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kreditkartennr.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','gültig von');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','gültig bis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Ausgabenummer (falls vorhanden)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Inhaber der Kreditkarte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Schnellauswahl Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Auswahl');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Tage mindestens');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Tage maximal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Anzahl Tage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Preis pro Tag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Anzahl Gäste');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Gesamt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Anzahlung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY',"<b>Mindestens einer</b> der ausgewählten Tage ist ein offizieller Feiertag. Bitte beachten Sie: Falls Ihr Buchungszeitraum einen Feiertag enthält, müssen Sie mindestens 3 Nächte bleiben.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Leider wurden keine zu Ihrer Auswahl passenden Tarife gefunden.<br>Bitte geben Sie nicht auf - es kann vorkommen, dass Ihre Angaben geringfügig modifiziert werden müssen.<br>Bitte versuchen Sie es erneut und ändern dabei die Anzahl der Tage, die Sie bleiben möchten. Alternativ können Sie natürlich auch im Hotel anrufen und das Zimmer telefonisch buchen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Zimmer- und Unterkunfteinstellungen anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Kategorien');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Unterkunft Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Art');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Kategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nummer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Behindertengerecht?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Zimmer hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Zimmer aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Klicken Sie auf Bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Zimmereigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Beschreibung der Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Klicken Sie auf Bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zimmereigenschaften hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zimmereigenschaften aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Zimmer Kategorien');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Zimmerkategorie, Kurzfassung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Beschreibung Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Klicken Sie auf Bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zimmerkategorie hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Zimmerkategorie aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Strasse');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Ort');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Land');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','PLZ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-Mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Klicken Sie auf Bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Unterkunft hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Unterkunft aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Unterkunft Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Unterkunfteigenschaften, Kurzfassung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Beschreibung Unterkunfteigenschaften');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Klicken Sie auf Bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Unterkunfteigenschaften hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Unterkunfteigenschaften aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Gültig von');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Gültig bis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Preis pro Nacht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Tage min.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Tage max.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. Belegung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','pP/pN ignorieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Feiertage erlauben');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Wochenenden erlauben');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Klicken Sie auf Text bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Duplizieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Tarif löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Tarif bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Feiertage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Das Enddatum von mehreren zusammenhängenden Feiertagen sollte der letzten Nacht entsprechen, für die Sie Feiertagszuschlag berechnen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Feiertage bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Beginn');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Ende');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Neuer Feiertag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Klicken Sie auf Text bearbeiten, um Änderungen vorzunehmen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Feiertag hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Feiertag aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Duplizieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Feiertag löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Feiertag gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Buchung gespeichert');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Bitte stellen Sie sicher, dass das Formular korrekt ausgefüllt ist.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Nur registrierte Besucher können online buchen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Bitte erstellen Sie ein Benutzerkonto.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Offline buchen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Meine Daten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Meine Buchungen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Verwalten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Gast einchecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Gast auschecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Buchungen auflisten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Neue Buchungen auflisten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Übersicht Gäste');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Unterkunfte bearbeiten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Tarife bearbeiten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Rabatte bearbeiten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Feiertage bearbeiten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Bitte wählen Sie eine Zimmerkategorie und Ihr Ankunftsdatum aus und geben Sie an, wieviele Nächte Sie bleiben möchten. Dann tragen Sie bitte die Anzahl der Erwachsenen und Kinder ein.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Bitte geben Sie Ihre Daten ein. Dies müssen Sie nur einmalig tun, bei späteren Besuchen wird das System Sie automatisch erkennen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Bitte wählen Sie das gewünschte Zimmer aus.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Bitte geben Sie Ihre Daten ein. Bitte beachten Sie, dass (außer der Mobiltelefonnummer) alle Felder ausgefüllt werden müssen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Verfügbarkeit prüfen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Ja, dieses Zimmer buchen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Gast auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Daten bestätigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Diesen Tarif wählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Schnellauswahl Zimmerkategorien');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Vorname');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nachname');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Straße');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ort');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','PLZ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobil');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Leider sind keine Zimmer verfügbar, die Ihren Kriterien entsprechen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Daten eingeben');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Daten bestätigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','Vielen Dank für Ihre Buchung. Wir werden Sie in Kürze telefonisch kontaktieren, um Ihre Zahlungsmethode zu bestätigen. <br><br> <b>Bitte beachten Sie, dass dies nur eine vorläufige Buchung ist. Diese ist abgeschlossen, sobald Sie eine schriftliche Bestätigung von uns erhalten haben. <br><br>Falls Sie Ihre Anzahlung per PayPal angewiesen haben, ist die Transaktion bereits abgeschlossen, und eine Einzahlungsbestätigung wurde an Ihre angegebene E-Mail-Adresse versandt. Sie können sich nun mit Ihren Zugansdaten bei www.paypal.de einloggen, um die Details einzusehen. </b><br>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Internetbuchung für Unterkunft: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Buchung für Zimmer: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Anzahl Erwachsene: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Anzahl Kinder: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Ankunft: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Abreise: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Nächte: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Gast UID: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Name: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobil: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','gewählter Tarif: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Gesamtbetrag: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Nötiger Anzahlungsbetrag: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Achtung: Sie müssen zuerst Ihre Daten vervollständigen, bevor Sie buchen können. Bitte klicken Sie dazu oben auf den Link "Meine Daten" und geben Sie Ihre Adresse an. Vielen Dank.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Vielen Dank, Ihre Daten wurden gespeichert.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Willkommen, unbekannter Besucher. Um ein Zimmer buchen zu können, müssen Sie zuerst Ihre Daten unter "Meine Daten" vervollständigen.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Willkommen zurück, ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Gast einchecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Gast auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Gast eingecheckt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Heute kommen keine Gäste an.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Gast auschecken');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Gast ausgecheckt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Auschecken bestätigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Heute reisen keine Gäste ab.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Gäste kommen heute an');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Gäste reisen heute ab');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Belegte Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Neue Buchungen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','<br>Zimmerbelegung anzeigen ab:');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Zuschläge');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarife');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Rabatte');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Stornierungsrichtlinien');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Datei-Upload');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','aktuelle Einstellung');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Erklärung');
/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Powered by XX-web.de');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Offline-Buchungen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Wenn Sie keine Online-Buchungen zulassen möchten, können Sie diese Funktion hier deaktivieren.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Rabatt-Tabelle einsehbar?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Hier JA einstellen, wenn Sie Ihre Gästen ein Rabattsystem zur Verfügung stellen möchten. Jede Stufe legt fest, wieviele Buchungen getätigt werden müssen, damit die jeweilige Rabattstufe greift.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Stufe 1 bis');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Stufe 2 bis');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Stufe 3 bis');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Stufe 4 bis');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Rabattbetrag Stufe 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Rabattbetrag Stufe 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Rabattbetrag Stufe 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Rabattbetrag Stufe 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Einzelzimmerzuschläge');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Hier Ja einstellen, wenn Sie Einzelzimmerzuschläge berechnen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Einzelzimmerzuschlag');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Zuschlag Kinderbett');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Hier Ja einstellen, wenn die Bereitstellung eines Kinderbettes extra kostet.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Preis für Kinderbett');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Wird die Anzahlung prozentual berechnet?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Ist die Anzahlung ein prozentualer Anteil des Gesamtbetrages? Wenn NEIN, wird die ein pauschaler Anzahlungsbetrag hinzugerechnet.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Preis Anzahlung');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Pro Person, pro Nacht');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Hier Ja einstellen, wenn Sie Preise pro Person / pro Nacht berechnen möchten. Wenn NEIN, werden die Kosten pro Zimmer / pro Nacht berechnet.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Anzahlung gutschreiben?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Hier JA einstellen, wenn Sie bei einer Stornierung die Anzahlung für spätere Buchungen gutschreiben möchten. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Dateiformate');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Geben Sie hier an, welche Dateiformate hochgeladen werden dürfen. Trennen Sie die einzelnen Formate mit Kommata, und schreiben Sie alles klein und ohne Leerzeichen. Beispiel: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Dateigröße');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maximale Dateigröße in Kilobyte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Hier klicken für wöchentliche Belegungsanzeige ab heute');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Gebuchtes Zimmer anklicken, um die Belegung anzuzeigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','oder Datum auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Belegt');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Frei');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Blau hinterlegte Zimmer sind gebucht - wenn sie jedoch<br> roten Text haben, wurde noch keine Anzahlung geleistet.<br> Wenn neben "gebucht" ein Sternchen steht, wird der Gast an diesem Tag anreisen.<br> Bei gelbem Text ist der Gast bereits anwesend.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Bestätigungsmail');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Sehr geehrte(r) ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Kosten pro Nacht - pro Zimmer ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Reservierungsdaten:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Vielen Dank für Ihre Buchung für');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Nachfolgend finden Sie eine Zusammenfassung Ihrer Reservierungdsaten. Bitte überprüfen Sie, ob alle Details korrekt sind und kontaktieren Sie uns, falls Fehler enthalten sein sollten.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Ihr Zimmer wird bis zu Ihrer Ankunft für Sie reserviert. Unsere Check-In-Zeiten sind von 14.00 bis 18.00.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Wir freuen uns darauf, Sie in unserem Hause begrüßen zu können am ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Wir wünschen Ihnen jetzt schon einen angenehmen Aufenthalt.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Und hier das Kleingedruckte:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Wir möchten Sie darauf hinweisen, dass Sie mit dieser Buchung einen rechtsgültigen Vertrag eingehen. Sollten Sie also - aus welchem Grund auch immer - Ihre Buchung stornieren oder den Zeitraum Ihres Aufenthalts verkürzen müssen, können Sie trotzdem zur Zahlung der vollen Summe verpflichtet werden.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Für nicht eingenommene Mahlzeiten und nicht oder nur teilweise in Anspruch genommene Zimmer kann keine Aufwandsentschädigung geleistet werden. Aus diesem Grund empfehlen wir Ihnen dringend den Abschluss einer Reiserücktrittskostenversicherung.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Stornierungs- und Kürzungsrichtlinien</i><br> Wenn Sie Ihren Urlaub absagen, muss diese Absage schriftlich bestätigt werden. Nachfolgend finden Sie eine Übersicht über die anfallenden Stornierungskosten:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 oder mehr Tage im Voraus');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' nur die bereits geleistete Anzahlung.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 bis 30 Tage im Voraus');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% des Gesamtbetrages.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Ab 14 Tagen im Voraus');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% des Gesamtbetrages.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','In allen Tarifen sind 19% MwSt. enthalten.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Bestätigungsmail ausdrucken');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Rechnungsausdruck');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Sehr geehrte(r) ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Preis pro Nacht - pro Zimmer ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Anzahl Nächte: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Vereinbarte Bedingungen: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Preis pro Nacht: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Gesamtbetrag');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Rechnungsdetails');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Vielen Dank, dass Sie unser Kunde sind am');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Wir hoffen, Sie hatten einen angenehmen Aufenthalt.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','In allen Tarifen sind 19% MwSt. enthalten.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Rechnung ausdrucken');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Extra-Service zur Rechnung hinzufügen');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Beschreibung Extra-Service');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Preis Extra-Service');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Zur Rechung hinzufügen');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Weitere berechnete Posten');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Weitere berechnete Posten, Gesamtbetrag: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Posten zur Rechnung hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> StandardUnterkunft nicht gefunden</h1><br>Fortfahren nicht möglich. Bitte nehmen Sie Kontakt mit dem Administrator auf.</font>');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Ausgewählte Datei hochladen');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Bild hochladen');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Hochladen');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Datei hochladen');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Ihre Datei kann die folgenden Formate haben - max. GröÃ?e:');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Neue Datei hochladen');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Sie dürfen nur Dateien der folgenden Formate hochladen:n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Bitte wählen Sie eine Datei aus.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Der Dateiname darf nur alphanumerische Zeichen enthalten, bitte auch keine Leerzeichen verwenden.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Diese Datei überschreitet leider die erlaubte Maximalgröße');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Es existiert bereits eine Datei mit diesem Namen. Bitte benennen Sie die Datei um und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Datei wurde erfolgreich hochgeladen.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Datei wurde NICHT hochgeladen.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Datei erfolgreich aktualisiert.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Am JOMRES Network teilnehmen?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Wenn Sie sich entscheiden, mit diesem Unterkunft am JOMRES Network teilzunehmen, wird es auf JOMRES.net gelistet. Bitte beachten Sie, dass hier davon ausgegangen wird, dass Sie ein öffentliches Hotel o. ä. betreiben. JOMRES.net übernimmt keine Verantwortung für Ihr Unterkunft. Sie müssen sicherstellen, dass Ihre Daten und Einstellungen korrekt sind.');
/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS-Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Sprachdatei für JS-Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Hier können Sie die Sprachdatei für den Javascript-Kalender auswählen. Bitte beachten Sie, dass es momentan Probleme mit diesen Sprachdateien gibt. Aus unerfindlichen Gründen scheinen bisher nur die englische und deutsche Version zu funktionieren. Für weitere Informationen besuchen Sie bitte <a href="http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse" target="_blank">die Website der Entwickler</a>.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','CSS-Datei für JS-Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Hier können Sie die CSS-Datei auswählen, die das Design des Javascript-Kalenders bestimmt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Feiertage abgleichen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Wenn Sie hier JA einstellen, müssen Sie für Feiertage und normale Tage gesonderte Tarife definieren. Stellen Sie NEIN ein, wenn Sie an Feiertagen und normalen Tagen dieselben Tarife benutzen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Verschiedenes');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','Fehlerüberprüfung ein?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Hier JA einstellen, um das Script vor der Inbetriebnahme auf Fehler zu prüfen. Bitte im laufenden Betrieb auf NEIN stellen - Ihren Besuchern wird sonst ein Datenkauderwelsch angezeigt!');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Bild löschen');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Bild gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Feld für Abfahrtsdatum anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Hier JA einstellen, wenn ein Auswahlfeld für das Abfahrstdatum angezeigt werden soll. Es hat sich allerdings gezeigt, dass manche Browser Probleme mit diesem Javascript-Kalender haben. Stellen Sie hier also einfach NEIN ein, falls bei Ihnen auch Probleme auftreten oder Sie sichergehen möchten, dass Ihre Website auch mit ungewöhnlichen Browsern voll funktionsfähig ist.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Wählen Sie das Unterkunft aus, für das die verfügbaren Zimmer angezeigt werden sollen:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Alle Unterkunfte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Alle');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Unterkunft');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','SQL anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Hier JA einstellen, um die SQL-Befehle anzuzeigen. Bitte im laufenden Betrieb auf NEIN stellen!');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','SQL-Ergebnisse anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Hier JA einstellen, um die SQL-Daten returned und var_dumped anzuzeigen. Bitte im laufenden Betrieb auf NEIN stellen!');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Template auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','CSS ID für obere Buttons');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','CSS ID für Tabellen-Header');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Templates');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Zimmer löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Dieses Zimmer kann nicht gelöscht werden, da hierfür bereits Buchungen vorliegen. Bitte stornieren Sie diese Buchungen und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Zimmer gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Zimmereigenschaften löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Diese Zimmereigenschaft kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte entfernen Sie diese Eigenschaft bei diesen Zimmern und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Zimmereigenschaften gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Unterkunfteigenschaften löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Diese Unterkunfteigenschaft kann nicht gelöscht werden, da sie bereits einigen Unterkunften zugeordnet wurde. Bitte entfernen Sie diese Eigenschaft bei diesen Unterkunften und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Unterkunfteigenschaft gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Zimmerkategorien löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einigen Zimmern zugeordnet wurde. Bitte ordnen Sie diese Zimmer einer anderen Kategorie zu und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Diese Zimmerkategorie kann nicht gelöscht werden, da sie bereits einem Tarif zugeordnet wurde. Bitte ordnen Sie den Tarif einer anderen Zimmerkategorie zu und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Zimmerkategorie gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Unterkunft löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Dieses Unterkunft kann nicht gelöscht werden, es enthält Daten in der Tabelle: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Unterkunft gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Sie haben nicht die erforderlichen Zugriffsrechte, um dieses Unterkunft zu löschen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Dieses Unterkunft auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Zu welchem Unterkunft gehört dieses Zimmer?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Unterkunft auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Sie müssen ein Unterkunft auswählen');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Breite der kleinen Thumbnails');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Breite der mittelgroßen Thumbnails');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Breite der großen Bilder');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Link zur Landkarte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Unterkunftbeschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Check-In-Zeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Aktivitäten in der Umgebung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Sehenswürdigkeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Flughäfen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Weitere Verkehrsanbindungen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Richtlinen, Haftungsausschluss usw.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Ihr JOMRES.net Unterkunft-Schlüssel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Sind Sie bereit, Ihre Website öffentlich bekannt zu machen?<br>Dann besuchen Sie <a href="http://www.JOMRES.net" target="_blank">JOMRES.net</a> und fordern Sie Ihren persönlichen JOMRES.net Unterkunft-Schlüssel an. Hiermit können Sie Ihr Unterkunft im JOMRES Netzwerk auflisten lassen und somit den grösstmöglichen Kundenkreis erreichen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Unsere Unterkunfte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Besucher sollen online buchen können');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Hier JA einstellen, um sicherzustellen, dass Ihre Besucher online Zimmer buchen können. Falls Sie nicht möchten, dass Zimmer übers Internet gebucht werden können, bitte auf NEIN stellen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Fixe Buchungszeiträume?');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Wenn Sie hier JA einstellen, werden die Zimmer für voreingestellte Zeiträume gebucht.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Buchungszeitraum: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Buchungen ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Rahmenfarbe für Buchungstabelle');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Hier können Sie die Rahmenfarbe der Buchungsformulare ändern.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Hintergrundfarbe für Buchungstabelle');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Hier können Sie die Hintergrundfarbe der Buchungsformulare ändern.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Breite der Buchungstabelle');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maximale Anzahl Buchungsperioden. Beispiel: 3 mal 7 Buchungsperioden = 21 Tage.');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Anzahl der Gäste benötigt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Hier JA einstellen, um die Felder für die Anzahl der Gäste im Buchungsformular anzuzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Ist dies ein Ein-Zimmer-Unterkunft?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','JA einstellen, wenn Sie z.B. anstatt einzelner Zimmer ein komplettes Unterkunft vermieten möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Anzahl Erwachsene maximal');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Hier können Sie angeben, wieviele Erwachsene maximal in den Zimmern übernachten können.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Anzahl Kinder maximal');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Hier können Sie angeben, wieviele Kinder maximal in den Zimmern übernachten können.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Weiter');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Buchung überprüfen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Buchung bestätigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Rabatt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Achtung...</FONT></h1><BR><B>Sie müssen der Datei site_config.php die Rechte (chmod) 777 geben, um die Einstellungen ändern zu können.</B></center><BR><BR>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Montag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Dienstag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Mittwoch');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Donnerstag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Freitag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Samstag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Sonntag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Mo');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Di');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Do');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','So');
/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Schriftart für alle Texte');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Schriftgröße für alle Texte');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Zellenhöhe');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Zellenbreite');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Schriftfarbe für den aktuellen Tag');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Schriftfarbe für Tage des aktuellen Monats');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Schriftfarbe für Tage des vorherigen und nächsten Monats');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Zellenfarbe für Tage des aktuellen Monats');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Zellenfarbe für Tage des vorherigen und nächsten Monats');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Zellenfarbe für belegte Tage');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Zellenfarbe für vorreservierte Zimmer (Buchungen, für die noch keine Anzahlung geleistet wurde)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Zellenfarbe für Tage in der Vergangenheit');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Bedeutung der Hintergrundfarben:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Belegt / nicht buchbar');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Frei und buchbar');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Vorreserviert'); /**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Voreingestellter Ankunftstag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Nur für Seiten, die fixe Buchungszeiträume anbieten. Wählen Sie den Wochentag, an dem angereist werden muss.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Voreingestellter Ankunftstag ist');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Buchungszeitraum (Tage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Verfügbarkeitskalender anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Hier JA einstellen, um den Verfügbarkeitskalender anzuzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Auswahl bestätigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Verfügbarkeit');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Nächste Schritte: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','- Datum überprüfen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','- Anzahl Gäste überprüfen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','- Persönliche Daten angeben');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','- Zimmer auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','- Gewähltes Zimmer überprüfen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','- Buchung überprüfen. Wenn alle Angeben OK sind, bestätigen Sie bitte Ihre Buchung.');
/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Um zum Buchungsformular zu kommen, klicken Sie bitte auf ein freies Datum.');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Blankobuchungen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Keine Blankobuchungen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Neue Blankobuchung');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Blankobuchung für diese Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Gast löschen');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gast gelöscht');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Dieser Gast konnte nicht gelöscht werden, weil noch Buchungen von ihm vorliegen. Stornieren Sie die Buchungen und versuchen Sie es erneut.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Wochenüberblick im Adminbereich anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Hier JA einstellen, wenn Sie den Wochenüberblick anstelle des monatlichen Verfügbarkeitskalenders anzeigen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Tatsächliche Zimmerkosten: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','E-Mail-Adresse ist ungültig ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Dies ist eine E-Mail von');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hallo');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Vielen Dank für Ihre Buchung bei');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Hier ist eine Zusammenfassung Ihrer Buchung:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Falls Sie Fragen zu dieser Buchung oder anderen Serviceleistungen haben, kontaktieren Sie uns bitte.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Unsere Telefonnummer ist');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternativ können Sie uns per E-Mail erreichen unter');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Raucher');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Egal');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Ausgabeformat Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Hier können Sie das Ausgabeformat für das Datum im Kalender ändern.');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Eingabeformat Kalender');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Hier können Sie das Eingabeformat für das Datum im Kalender ändern.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Bei fixen Buchungszeiträumen Kurzunterbrechungen erlauben');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Länge der Kurzunterbrechung (Tage)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Veröffentlicht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Einstellungen');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','PayPal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Bezahlung per PayPal erlauben?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Paypal Sandbox (Testadresse) benutzen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Benötigt einen PayPal-Entwicklerzugang');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Ihre PayPal E-Mail-Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Hinweis: Wenn Sie PayPal benutzen möchten, loggen Sie sich bitte bei Ihrem PayPal-Account ein und aktivieren Sie dort die automatische Rückleitung. (Profil -> Website-Zahlungsoptionen) Automatische Rückleitung: Aktiviert, Rückleitungs-URL: http://www.ihredomain.com/index.php?option=com_JOMRES&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Fehler, die PayPal-E-Mail konnte nicht versandt werden.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Buchungsprotokoll');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Uhrzeit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Benutzer (Benutzername)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Arbeitsschritt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Unterkunft-Rechte');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Details anzeigen');
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
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Nach Datum filtern');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Nach Benutzernamen filtern');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Nach Arbeitsschritt filtern');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Ankunft steht aus');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Reist heute an');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktueller Gast, anwesend');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Reist heute ab');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Abreise überfällig');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Ist nicht angekommen');
/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filter');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Unbekannter Benutzer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Erstelltes Zimmer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Aktualisiertes Zimmer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Gelöschtes Zimmer');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Zimmereigenschaft erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Zimmereigenschaft aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Zimmereigenschaft gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Zimmerkategorie erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Zimmerkategorie aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Zimmerkategorie gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Unterkunft erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Unterkunft aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Unterkunft gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Unterkunfteigenschaft erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Unterkunfteigenschaft aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Unterkunfteigenschaft gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Unterkunfteinstellungen bearbeitet');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Unterkunft veröffentlicht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarif erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarif aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarif gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Feiertag erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Feiertag aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Feiertag gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Servicegebühren hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Buchung storniert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Gast eingecheckt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Gast ausgecheckt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Kreditkartendetails aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Anzahlung eingegeben');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Gast erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Gast aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Gast gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Neues Unterkunftfoto hochgeladen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Unterkunftfoto aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Bild gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Neues Zimmerfoto hochgeladen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Zimmerfoto aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Neues Resource-Foto hochgeladen');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Resource-Foto aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Zimmer gebucht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Zuschlag erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Zuschlag aktualisiert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Zuschlag gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Zuschlag veröffentlicht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Blankobuchung getätigt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Blankobuchung gelöscht');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Zuschläge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Zuschläge bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Name');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Preis');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Neuer Zuschlag');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Klicken Sie den Link an, um das Extra zu bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Zuschlag hinzugefügt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Zuschlag aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Zuschlag bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Unterkunft duplizieren');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Zuschlag löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Zuschlag gelöscht');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Zuschläge bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Zuschläge bei der Buchung anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Hier JA einstellen, um eventuelle Zuschläge anzuzeigen, die Sie dem Gast anbieten möchten.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Optionale Zuschläge.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Dieses Unterkunft auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Auswahl umkehren/alles auswählen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Startdatum<br> Blankobuchnung - ab wann ist geschlossen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Enddatum<br> Blankobuchung - ab wann ist wieder geöffnet');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Blankobuchungen bearbeiten');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Für eines oder mehrere der ausgewählten Zimmer liegen bereits Buchungen vor. Wenn Sie für diese Zimmer Blankobuchungen vornehmen möchten, müssen Sie zuerst die betreffenden Buchungen stornieren.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Beim Versuch, dieses Zimmer zu buchen, ist ein Fehler aufgetreten. Eines oder mehrere der ausgewählten Zimmer sind nicht frei.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Zimmer enthalten in der Blankobuchung');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Blankobuchung löschen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Blankobuchung anzeigen');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Keine Blankobuchungen vorhanden');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Anzahl Sterne');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Raucher/Nichtraucher anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Hier JA einstellen, um eine Auswahl Raucher/Nichtraucher anzuzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Zurücksetzen');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Der Status Ihrer PayPal-Zahlung wurde auf offen gesetzt. Sobald das Hotel den Erhalt Ihrer Zahlung bestätigt hat, wird Ihr Buchungsstatus in bestätigt geändert.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Buchung storniert');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Suchen nach:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Suchen! ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','PayPal Fehlerüberprüfung anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Zimmernamen anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Hier JA einstellen, um die Zimmernamen anzuzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Zimmerkategorien anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Hier JA einstellen, um die Zimmerkategorien anzuzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Raucher / Nichtraucher Voreinstellung');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Achtung: Wenn Sie hier JA als Voreinstellung wählen, aber alle Ihre Zimmer Nichtraucherzimmer sind, werden keine Zimmer in der Buchungsübersicht angezeigt!');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Währungssymbol');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','z.B. &amp;euro&#59; Bitte beachten Sie, dass Sie hier den korrekten HTML-Code für das Währungssymbol eingeben sollten. Für eine Liste dieser Codes besuchen Sie bitte <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Währungscode');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','z.B. GBP. Dies wird benötigt, wenn Sie PayPal nutzen möchten. Für eine Liste dieser Codes besuchen Sie bitte <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Information');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Achtung: Sie sind als Hotelmanager mit Rechten für alle Unterkunfte eingeloggt. Bitte beachten Sie, dass dies Probleme beim Ausführen einiger JOMRES-Funktionen verursachen kann.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Vorausbuchungszeitraum einschränken?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Hier JA einstellen, wenn Sie den Vorausbuchungszeitraum einschränken wollen.  (Im nächsten Feld können Sie den maximalen Vorausbuchungszeitraum in Tagen eingeben.) Wenn Sie hier JA einstellen, und ein Gast versucht, früher als x Tage im Voraus zu buchen, wird sein Ankunftsdatum auf das heutige Datum zurückgesetzt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Vorausbuchungszeitraum eingeschränkt auf Tage:');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>Hinweis: Es wird nicht empfohlen, beide der folgenden Optionen auf JA zu stellen. Sie sollten nach Möglichkeit nur eine der beiden Steueroptionen benutzen. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Steuern');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Steuern');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Entwickelt für den amerikanischen Markt. Diese Steuern werden dem Gast auf die Zimmer erhoben. Sie können zwischen Pauschalbeträgen, prozentualem Steuersatz oder einer Kombination aus beidem wählen. Beachten Sie bitte, dass sich diese Steuern nur auf die reinen Zimmerpreise beziehen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Pauschalsteuer Betrag');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Steuer Prozentsatz');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Pauschalsteuern');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Sinnvoll für Länder, in denen es Pauschalsteuern gibt (wie z.B. Value Added Tax in Großbritannien). ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Pauschalsteuer Betrag');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Alle Einträge achivieren');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Einträge archiviert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Prüfer hat Einträge archiviert');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Unsere Tarife');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Tarifbezeichnung');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Tarifbeschreibung');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Zimmerkategorie');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Gültig von');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Gültig  bis');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Pro Person / pro Nacht');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Pro Nacht');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOWEEKEND','ohne Wochenenden');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Tage min.');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Tage max.');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. Belegung');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max. Belegung');
/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Vorschau');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Bearbeiten ein?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktueller Text');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Neuer Text');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Text wurde aktualisiert.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Sprache bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Letzten 200 Einträge werden angezeigt');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Es gibt mehr als 200 Einträge im Buchungsprotokoll. Deshalb können die ausgeführten SQL-Aktivitäten nicht angezeigt werden. Wenn Sie trotzdem die SQL-Aktivitäten ansehen möchten, müssen Sie das direkt in der Datenbank-Tabelle "audit" tun. Wenn Sie diese Aktivitäten regelmäßig überprüfen möchten, empfehlen wir Ihnen, das Buchungsprotokoll regelmäßig zu archivieren.');
/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Unterkunftkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Unterkunftkategorien auflisten');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Unterkunftkategorien bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Unterkunftkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Beschreibung Unterkunftkategorie');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Unterkunftkategorie gespeichert');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Unterkunftkategorie kann nicht gelöscht werden. Die Unterkunftkategorie ist bereits einem oder mehreren Unterkunften zugeordnet. Bitte ändern Sie dies, bevor sie versuchen, die Unterkunftkategorie zu löschen.');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Unterkunftkategorie(n) gelöscht');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Fehler, Unterkunft hat keine Zimmer.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Fehler, Unterkunft hat keine Tarife.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Fehler, Unterkunft hat keine Zimmerkategorien.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Unterkunft wechseln');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Zahlungserinnerung');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Ihre PayPal-Transaktion wurde ausgeführt, und eine Zahlungsbestätigung wurde Ihnen per E-Mail zugesandt. Sie können sich nun unter www.paypal.com einloggen, um die Details einzusehen. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Keine Zuschläge zur Rechnung hinzufügen');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Anzahlung');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','kompletter Betrag');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Betrag, der bei der Buchung erhoben werden soll');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Hier können Sie einstellen, welcher Betrag bei der Buchung erhoben werden soll: Anzahlung, wenn nur die Anzahlung sofort erhoben werden soll, oder kompletter Betrag, wenn Sie gleich den kompletten Zimmerpreis in Rechnung stellen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Kalendermonate anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Wieviele Kalendermonate sollen bei den verfügbaren Zimmern angezeigt werden?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','unterzeichnet im Auftrag von ');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Zahlung');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Abbrechen');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Bitte wählen Sie die Zimmer und Zeiträume die Sie sperren möchten.<br>Falls an einem Zimmer keine Checkbox vorhanden ist, kann es nicht gesperrt werden bis bestehende Buchungen abgelaufen oder storniert sind.<br/> Wenn Sie die entsprechenden Zeiträume ausgewählt haben, drücken Sie den blauen Button um die Sperrungen zu bestätigen. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Sie sind wegen zu langer Inaktivität vom System ausgeloggt worden</b> Bitte loggen Sie sich ein und versuchen es erneut.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Bemerkungen');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Benutze Onlinezahlung?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Markieren Sie JA, falls Sie Online-Zahlungen akzeptieren wollen. <b>ACHTUNG:</b> Dies deaktiviert nicht die Anzahlung, die während der Buchungen angezeigt wird. Um die Anzahlung zu deaktivieren müssen in den Templates die Anzeige für die Anzahlung entfernt werden.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Bitte Zahlungsweise wählen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Zahlung aktiviert?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin Einstellung geändert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin Einstellung eingefügt');
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
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','Verschlüsselung');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Benützen Sie mCrypt Verschlüsselung?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Setzen Sie auf JA, falls mCrypt in PHP kompiliert ist.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Schlüssel');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Verschlüsselungs-Modus');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Algorythmus');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Kreditkarte erfasst');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Kreditkartendetails ändern');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Bearbeite Kreditkartendetails');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Icongröße bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Gemessen in Quadratpixeln.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Unterkunftbilder hochladen');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Bild bereits im Verzeichnis vorhanden');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Diashows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Zeige Link zur Diashow?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Zeige Diashows im Unterkunft eingebettet?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Hier JA einstellen, wenn Sie die Diashow innerhalb der Unterkunftbeschreibung anzeigen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Diashow gesamte Höhe');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Höhe Vorschaubild');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Diashow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Sorry, kein Bild für dieses Unterkunft verfügbar ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','PopUp Fensterbreite');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','PopUp Fensterhöhe');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Bildverzeichnis');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Ändern Sie das Verzeichnis nur falls Sie wichtige Gründe dafür haben. Die Voreinstellung, falls nicht schon geändert, ist \'/images/stories/jomres/\' relativ zum CMS Rootverzeichnis.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Zeige Link zu den Tarifen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popups erlaubt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Wenn auf NEIN gesetzt, werden die Links im Popup geöffnet anstatt innerhalb des Artikels. TESTPHASE! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Bilder hochladen');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Benutzen Sie dieses Formular um mehrere Bilder von diesem Unterkunft hochzuladen.<br/><b>ACHTUNG:</b> Alle Bilder mit gleichen Namen werden überschrieben. Beachten Sie, dass zimmerspezifische Bilder oder Unterkunftlogos hier nicht hochgeladen werden können. Diese Bilder müssen über die Unterkunftadministration geladen werden (Unterkunft bearbeiten).<br/><b>Beachten Sie</b> Die hier hochgeladenen Bilder werden im Verzeichnis /images/stories/jomres/*property_uid* gespeichert. Falls dieses Verzeichnis nicht existiert, wird es vom System angelegt außer in der Konfiguration wurde ein anderes Verzeichnis festgelegt.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Verschiedenes');
/**
* @ignore
*/
define('_JOMRES_A','Seitenkonfiguration');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Benutze die allgemeinen Einstellungen');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Markieren Sie JA, falls die Unterkunfteigenschaften durch den Webmaster einheitlich voreingestellt werden.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Um ein Bild dieser Eigenschaft zuordnen zu können, müssen Sie zuerst Ihre Bilder in folgendes Verzeichnis laden: /images/stories/jomres/pfeatures/ ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icon');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wählen Sie Ihr Such-Plugin das Sie verwenden möchten.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Sorry, Ihre Suche zeigt kein Ergebnis. Bitte ändern Sie Ihre Eingabe und versuchen es noch einmal.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Sind Sie sicher?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Zimmer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Diese Unterkunft buchen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Sicherheitsnummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Zeige Tarife im Unterkunft eingebettet?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detaillierte Information');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Klicke für Zimmer und Verfügbarkeit');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Zeige die Tarifinfos');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Zeige Adressinformation unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Zeige Kurzinfo unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Zeige Zimmer und Verfügbarkeit unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Zeige Tarife unter diesem Link');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Feste Rate');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Durchschnittliche Rate');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Wählen Sie das gewünschte Tarifmodell');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Sie haben die Wahl zwischen zwei Kalkulationsmethoden. Die 'Feste Rate' erlaubt Ihnen verschiedene Tarife Ihren Gästen anzubieten. Die Rate ist in diesem Fall während des ganzen Aufenthalts gültig. Das ist nützlich, wenn Sie verschiedene Tarife im gleichen Zeitraum anbieten wollen, z. B. Zimmer mit Frühstück, Halbpension oder Arrangements.<br> Wählen Sie 'Durchnittliche Rate' falls Ihr Tarif auf den Aufenthaltszeitraum bezogen ist. Jomres findet alle Tarife für jeden Tag oder Woche im Buchungszeitraum, addiert sie und gibt eine durchschnittliche Rate über den Buchungszeitraum zurück.");
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Benutze das Jomres Portal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Wahlen Sie JA, wenn Jomres eine Verbindung zur Jomres Portalsoftware aufbauen soll');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Zeige Eingabefeld vom Abreisetag?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Setzen Sie dies auf NEIN, wenn der Abreisetag nicht angezeigt werden soll. Ändern Sie diese Einstellung nur falls Sie wichtige Gründe dafür haben. Der Abreisetag in der Buchung wird dann automatisch der nächste Tag nach der Anreise sein.");
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Beschrieb Limit');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Legen Sie die maximale Anzahl Buchstaben fest, die im Unterkunftbeschrieb angezeigt werden sollen.");
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Tagesraten Multiplikator');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Dies ermöglicht dem Besucher, während dem Buchungsprozess der Unterkunft laufend die Multiplikation der wöchentlichen Raten anzuzeigen. (sehr prakisch bei der Anzeige von wöschentlichen Raten, zum Beispiel)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','PopUp Breite');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','PopUp Höhe');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Aktualisieren');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Klicke auf Aktualisieren, um die Verfügbarkeit zu überprüfen');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Kalenderformatierung benutzen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Wählen Sie JA, um die Datumsausgabe anzupassen. (Beispiel <a href="http://www.php.net/manual/en/function.date.php">hier</a>). Setze es auf NEIN um das strftime() Format zu benutzen. (Beispiel <a href="http://www.php.net/manual/en/function.strftime.php">hier</a>) zB. %b %d %Y ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Veröffentlichen');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Rückgängig veröffentlichen');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Bitte die folgenden Felder ergänzen: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Vielen Dank.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Eingabefehler Rahmenfarbe');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Mitteilungsbox: Hintergrundfarbe für Fehler');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Standardland fürs Buchungsformular');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Seitenhilfe verwenden?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Wählen Sie JA, wenn oberhalb der Suchleiste der Hilfetext angezeigt werden soll.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Bearbeiten Sie hier Ihr den Hilfetext.');
/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Felder mit dem roten Stern, sind zwingend erforderlich.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Dürfen Benutzer eigene Unterkunfte veröffentlichen?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Hier JA einstellen, wenn Sie den Benutzern erlauben, eigene Unterkunfte zu veröffentlichen. Ohne Backend Admineinstellungen.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Bitte wählen Sie ein Land und Region für Ihr Unterkunft.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Ergänzen Sie die Unterkunftdetails.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Felder mit dem roten Stern, sind zwingend erforderlich.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Unterkunft erfolgreich erstellt');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Sorry, Sie können kein Unterkunft erstellen. You must be a logged in, registered user, and you must not have already created a property.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Erstellte Unterkunfte: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Für Benutzer: ');
/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Tägliche Belastung?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Pro Tag');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Kalenderanzeige auf Jahresanfang?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Der Buchungskalender wird auf Anfang des laufenden Jahres gestellt.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Zimmerinfos anzeigen?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Falls auf Nein gestellt, wird Jomres während der Buchung die infos nicht anzeigen. Dafür wird die Verfügbarkeit angezeigt, sofern sie vorhanden ist.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Anzahl verfügbahre Räume');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Bitte wählen Sie die Anzahl Räume, die Sie benötigen.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Nummer benötigt');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Zurück zu den Unterkunftdetails');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Zimmer Typ');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Jomres Metadaten benutzen?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Wenn Sie JA wählen, wird Jomres die oft wiederholten Wörter aus Ihrem Unterkunftbeschrieb und Zimmerlisten die Metadaten (für Suchmaschinen) generieren. Die Wörter müssen durch ein Leerzeichen getrennt sein.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Blockierte Wörter');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Dies sind Wörter, die <i>nicht</i> in den Metadaten erscheinen sollen.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Andere Elemente die entfernt werden sollen');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Elemente die nicht in den Metadaten erscheinen sollen. Dies können Symbole sein wie, zB. Anführunsgzeichen, Kommas etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Wiederholrate');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Anzahl Wiederholungen, bis ein Wort in die Metadaten aufgenommen wird.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankufts- und Abreisesatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie dann noch bestätigen müssen.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Benutzen Sie dieses Formular, um ihre Buchung zu tätigen. Bewegen Sie die Maus über die i-Knöpfe um eine genaue Erklärung zu erhalten. Wählen Sie Ihre Buchungsangaben wie Ankufts- und Abreisesatum, Zimmerart. Anschließend wählen Sie ein Zimmer. Klicken Sie jedes Zimmer an, welches Sie zu Ihrer Buchung hinzufügen möchten. Im nächsten Schritt können Sie noch die optionalen Zuschläge Ihrer Buchung hinzufügen. Sobald Sie Ihre persönlichen Adressangaben vollständig ausgefüllt haben, können Sie die Buchung absenden. Sie erhalten dann eine Buchungszusammenfassung, die Sie dann noch bestätigen müssen.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Buchungsdetails');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Wählen Sie die Einzelheiten zu Ihrer Buchung');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Verfügbarkeit ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Bitte Zimmer auswählen/abwählen');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Schauen Sie hier, ob das Unterkunft während dieser Zeit verfügbar ist.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Optionale Zuschläge');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wählen Sie die gewünschten Zuschläge, die Sie Ihrer Buchung hinzufügen wollen');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Pro Nacht');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Ihre Adresse');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Ihre persönlichen Angaben. Beachten Sie, dass sämtliche Felder außer die Handynummer benötigt werden');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Verfügbare Zimmer');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Gewählte Zimmer');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Der frühest mögliche Anreisetag ist: ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Pro Nacht:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Zimmerpreis:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Zuschläge:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Taxe:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Rabatt:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Gesamtpreis:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gäste');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Klicken Sie hier, um dieses Zimmer zu Ihrer Auswahl hinzuzufügen');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Klicken Sie hier, um dieses Zimmer von Ihrer Auswahl zu entfernen');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gästetypen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Gästetyp, zB. Kinder 5 bis 10 Jahre, oder Student ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Notizen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Schreiben Sie hier Ihre Bemerkungen zu den verschiedenen Gästetypen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maximum der Personen, die pro Gastyp erfasst werden dürfen');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Prozentual');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Der berechnete Betrag wird dann als prozentualer Anteil des Tagesbetrags für dieses Zimmer berechnet. Wenn es auf NEIN gesetzt ist, wird der von Ihnen bestimmte Betrag vom Basisbetrag addiert oder subtrahiert.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Addiere Abweichung?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Der berechnete Betrag wird vom Basisbetrag des Zimmers addiert oder subtrahiert. Setzen Sie auf /Minus/, wenn Sie es als Rabatt vom Basisbetrag einsetzen wollen. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Abweichung');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Betrag der Abweichung');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Gästetyp geändert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Gästetyp veröffentlicht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Gästetyp gelöscht');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Gästetyp erstellt');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Gästetyp aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Gästetyp aktualisiert');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Zeige Zimmer in den Unterkunftdetails?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Zeige Link zu den Zimmern in den Unterkunftdetails?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Zeige <b>nur</b> Verfügbarkeitskalender?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Wählen Sie JA, wenn Sie die Anzeige für Unterkunfttitel und Beschrieb deaktivieren möchten, so dass nur der Verfügbarkeitskalender der Zimmerliste ersichtlich sind. Diese Option ist nur für Benutzer gedacht, die EinzimmerUnterkunfte anbieten (zB. Wohnungen, Chalets etc).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','Aktueller CSS Stil der Seite');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Ankunft/Abreisetag minimum Intervall');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimale Tagesanzahl zwischen Ankunfts- und Abreisetag.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Buchungsformular Zimmerliste zeige Nummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Buchungsformular Zimmerliste zeige Name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Buchungsformular Zimmerliste zeige Tariftitel');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Buchungsformular overlib zeige Titel');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Buchungsformular overlib zeige Beschrieb');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Buchungsformular overlib zeige Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Buchungsformular overlib zeige Start');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Buchungsformular overlib zeige Ende');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Buchungsformular overlib zeige minimum Tage');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Buchungsformular overlib zeige maximum Tage');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Buchungsformular overlib zeige minimum Personen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Buchungsformular overlib zeige maximum Personen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Buchungsformular overlib zeige Zimmernummer');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Buchungsformular overlib zeige Name');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Buchungsformular overlib zeige Typ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Buchungsformular overlib zeige Raucher');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Buchungsformular overlib zeige Behindertengerecht');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Buchungsformular overlib zeige Bodenbelag');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Buchungsformular overlib zeige maximum Personen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Buchungsformular overlib zeige Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_ORDER','Anordnung');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Sie haben Jomres als EinzimmerUnterkunft konfigriert. (zB. Wohung, Chalet, Villa) Sie haben aber mehr als ein Zimmer erstellt. Dies kann zu Fehler in Jomres führen. Möchten Sie Jomres als EinzimmerUnterkunft weiterführen, müssen sie alle Zimmer bis auf eines löschen. Bitte ändern Sie Ihre Konfiguration auf "NEIN". Wenn Sie es als EinzimmerUnterkunft weiterführen möchten, gehen Sie zur Obbjektadministration, um alle Zimmer bis auf eines zu löschen. Es darf in diesem Modus nur ein Zimmer pro Unterkunft zugeordnet werden.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Benötigt ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Anzahl Tage vor Ankunft');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Anzahl Tage die gesperrt sind, von "heute", bis zum Ankunftstag.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Pro Nacht:');
/**
* @ignore
*/
define('_JOMRES_DTV','Datumvariante');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Wochentag');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Zeitraum');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Aufenthaltstage');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Last Minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Wochentag');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Der Wochentag');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Eigene Tarifmodelle');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Dieses Dropdown erlaubt Ihnen eigene Tarifmodelle zu verwenden, die Sie selber kreiiert oder als eigenständige Joomla Komonente installiert haben. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Standard Gästetyp');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardwert für den ersten Gästetyp. Wenn Sie mehrere Gästetypen verwenden ist dies der Standardwert im Buchungsformular, der verschickt wird, wenn der Gast nichts spezielles auswählt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Können nur registrierte Besucher online buchen?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Sorry, Sie müssen registriert sein, um online buchen zu können. Klicken Sie hier, um sich zu registrieren. ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Schriftfarbe für Links der aktuellen Buchungen'); /**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Zellenfarbe für die Markierung der Wochenenden');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Welches Dashboard Plugin soll verwendet werden'); /**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Wenn Sie weitere Dashboard Plugins installiert haben, können Sie dieses hier auswählen anstelle des Standard Plugins.'); /**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Zimmer ist gebucht'); /**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Verdeckte Buchung'); /**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Aufrundung der Anzahlung auf die nächste Ganzzahl?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Anzahlung verlangen?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Wochenpreis erheben?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Wenn Sie diese Funktion aktiviert haben, wird der Einheitspreis als Wochenpreis angezeigt und pro Woche berechnet, anstatt als Tagesansatz.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Preis pro Woche');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fester Ankunftstag: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Wenn feste Ankunftszeiten gewählt sind, kann das Datum in der Dropdownliste ausgewählt werden');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Raucher Option ungültig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Falsches Ankunftsdatum');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Falsches Abreisedatum');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Der Buchungszeitraum ist zu kurz. Es braucht mindestens diese Anzahl Tage zwischen Ankunft und Abreise:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Ihr Intervall ist');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Gasttypvariante ungültig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wählen Sie Anzahl Personen/Typ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Sie haben zu viele in der Gruppe für die verfügbaren Tarife');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Sie haben mehr Zimmer gebucht als Gäste vorhanden sind');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zu viele Gäste für die verfügbaren Betten');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Sie müssen mehr Zimmer wählen');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Wähle ein Zimmer');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Vorname benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Nachname benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Haus Nr/Name benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Straße benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Ort benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postleitzahl benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Telefonnummer benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Handynummer benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','E-Mail-Adresse benötigt');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Die E-Mail-Adresse ist ungültig');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Das Überprüfen der E-Mail-Domain ist fehlgeschlagen');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Wir haben noch freie Plätze!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Kein Zimmer ausgewählt');
/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Buchungs Nr.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Mitteilungsbox: Hintergrundfarbe für erfolgreiche Buchung');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Übernehme Template Variabeln?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Wenn Sie diese Funktion aktivieren werden die DHTML Variabeln von der FRONTEND Vorlage anstelle der Variabeln dieser Seite übernommen. Nützlich, wenn Sie bestimmte Elemente mit den Variabeln der vorhandenen Vorlagen angezeigen möchten.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Prozentuale Abrechnung');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Stellen Sie auf JA, wenn der Preis für jede Person anteilmäßig berechnet werden soll. Falls nein, wird ein Gesamtbetrag pro Buchung angezeigt.');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Währungsrechner, aktueller Tagessatz für:');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Einheitliche Zimmerkonfiguration');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Hier JA einstellen, wenn Sie eine einheitliche Zimmerkonfiguration für alle Unterkunfte benutzen wollen.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Allgemeines Suchlimit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Buchungs-Administration <br/> Neue Buchungen');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Maximum Anzahl Zimmer');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Legen Sie hier fest, wie vele Zimmer pro Unterkunft zur Verfügung stehen');// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margin');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profit margin, in Prozent.');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','HTML-Editor für Benutzer erlauben?');
// Translate from here 2.6.2
// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Zeide die Admin Icons?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Stelen Sie auf Nein, wenn Sie die Links als Text sehen wollen.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Verfügbare Zimmer jetzt buchen: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Einheitlicher Editierungsmodus?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Vorsicht mit dieser Funktion. Falls JA betrifft es alle Textkonstanten systemweit. Einzelne Unterkunfte können dann keine eigenen Textkonstanten editieren.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Einheitliche Währung benutzen?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Auf JA setzten damit alle Unterkunfte die gleiche Währung verwenden (z. B. & # 8 3 6 4 ;)');
/**
* @ignore
*/define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Einheitliches Währungssymbol');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponente gewrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Auf JA setzen wenn Module und Header nicht sichtbar sein sollen');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Unterkunft Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Nur Wochenenden');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tarif ist nur gültig wenn die Aufenthaltsdauer einen Wochentag enthält.');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Wochenend-Tage');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Tage für Wochenende einstellen. Tarife, die Wochenenden erlauben oder verbieten übernehmen diese einstellungen in die generierte Zimmerliste.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Wählen Sie das Land aus bevor Sie die Unterkunftinformationen eingeben.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Speichern Sie die Änderungen bevor Sie ein Unterkunftbild hochladen.');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Preise von - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Alle');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO','Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES','Eigenschaften');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR','Beschreibung');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL','Verfügbarkeit');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE','Typ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Suche nach Land');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Suche nach Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Suche nach Stadt');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Suche Eigenschaft.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Suche');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Geben Sie ein Suchwort in die Textbox ein und drücken den Button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Suchwort(e): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Bitte geben Sie Ihr gewünschtes An- und Abreisedatum ein und drücken den Buttom um Unterkunfte zu finden die frei Kapazitäten zum gewünschten Zeitpunkt haben.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Unterkunfttyp');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Zimmertyp');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Voreinstellung');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Unterkunftname');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Unterkunft Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Unterkunft Stadt');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Sterne');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Unterkunftliste');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Unterkunftdetails - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Buchungsformular');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Aktualisieren Sie Ihre Adressangaben');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-check der Zimmer-Verfügbarkeit<br/>(Zimmerauswahl wird zurückgesetzt)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-check der Verfügbarkeit');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Änderung Ihre optionalen Extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Änderung Ihrer Zimmerauswahl');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Aktualisierung Ihrer Adressangaben');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, ein oder mehrere Adressfelder sind falsch.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Zimmerbild');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Währungsformat');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Zeige Manager \ s Optionen, als Icons an');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Suchoptionen');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Notiz! Diese Einstellung wirkt sich nur auf die Sprache in den Module aus. Um das Javascript Sprachformat zu ändern, bearbeiten Sie bitte die Javascript Kalender Optionen in den Unterkunftseinstellungen');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Vorhandene Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','Keine Log Einträge vorhanden. Dies ist üblich. Sie müssen die jomres.php Datei änpassen um die Log-Einträge zu verändern');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datum-Zeit');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Nachrichten');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Erweitert');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Microverwaltung');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tarif-Konfiguration-Modus');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warnung: Der Wechsel zwischen den verschiedenen Tariftypen kann zu Datenverlust führen. Bitte beachten Sie die Hinweise unten.</b>.
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
Normal -> Erweitert. Keine Änderung. Die vorhandenen Tarife bleiben.<br/>
Normal -> Microverwaltung. Alle vorhandenen Tarife werden gelöscht.<br/>
Erweitert -> Normal. Alle vorhandenen Tarife werden gelöscht.<br/>
Erweitert -> Microverwaltung. Alle vorhandenen Tarife werden gelöscht.<br/>
Microverwaltung -> Erweitert. Alle vorhandenen Referenzen zu den Tarifen werden entfernt, aber die Tarife selber bleiben bestehen.<br/>
Microverwaltung -> Normal. Alle vorhandenen Referenzen und Tarife werden gelöscht.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Zimmerliste in Unterkunfsdetailsseite anzeigen?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Unterkunftstype');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','Nur eine SRP ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max Personen pro Zimmer');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max Persoen pro Buchung');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Notiz hinzufügen' );
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Notiz bearbeiten');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Notiz löschen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Notiz anzeigen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Notiz hinzufügen');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notiz bearbeiten');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notiz löschen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Meine Optionen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','Sie sind nicht eingelogged. Sie können Ihre Buchungs informationen nur sehen, wenn Sie sich eingeloggt haben. ');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Buchungsliste');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Meine Buchungen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Liste der Buchungen die noch keine Anzahlung geleistet haben.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Zeige Buchung');

/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Zeige Favoriten');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Sie haben noch keine Favoriten eingtragen.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','zu Favoriten hinzufügen');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Unterkunftart');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Unterkunfte auf Seite');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Lastminute');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktiv');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Dieses Plugin ermöglich Ihnen, den Unterkunftspreis dynamisch zu generieren.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Abgrenzung (Anzahl Tage von der Ankunft bis heute)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Prozentual belegte Räume < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Prozentual belegte Räume < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Prozentual belegte Räume < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Prozentual belegte Räume < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabatt %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Raumtyp ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' ist vergünstigt ab ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' bis ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Raumpreis ist nicht vergünstigt ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google Map API Schlüssel');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Sie erhalten einen Karten-Schlüssel auf <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Wenn Sie hier den Google Schlüssel eingegeben haben, wird Ihnen Jomres eine Karte in den Unterkunftsdetails anzeigen.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Wird SSL im Buchungsformular verwendet?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Sie müssen sich vergewissern, dass sie ein gültiges SSL Zertifikat haben für ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max Anzahl Personen, die der Unterkunft zugeordnet werden können');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last Minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktiv?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Falls es auf Ja gestellt ist, ermöglicht es Last Minute Angebote.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Abgrenzung');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Wenn eine Buchung gemacht ist und N Anzahl Tage nach der Buchung, wird der Rabatt angerechnet');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabatt');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In Prozent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','An diese Buchung wurde ein Rabatt angerechnet!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Der Betrag dieses Aufenthalts wurde verringert ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Diese Unterkunft hat ein Rabatt-Angebot  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' Prozent, wenn Sie früher buchen ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' Prozent oder mehr, wenn Sie früher buchen ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Buchen Sie jetzt, um das beste aus dem Angebot herus zu holen!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','Diese Unterkunft bietet Rabattmöglichkeiten von  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' Prozent,, wenn Sie früher buchen ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Buchen Sie jetzt, um das beste aus dem Angebot herus zu holen!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Detaillierte Tarifinformationen');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Falls auf Ja gestellt, werden noch weitere tarifinformationen in einem Popup Fenster angezeigt');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Konfiguration minimieren');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Wenn auf Ja gestellt, werden die Grundeinstellungen im Unterkunftsmanager eingeschränkt angezeigt. Dies ist nützlich, wenn Sie nicht möchten, dass die Unterkunfts-Admin zuviel an den Einstellungen herumhantieren. Sie können die Einstellungen nach wie vor in der jomres_config.php Datei bearbeiten.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Buchung anpassen - Auswahl Unterkunft');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Neue Unterkunft wählen');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Auftrag:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Anzahlung');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Ausstehende Anzahlung');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Korrigiert Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Korrigiert Anzahlung');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Abbrechen');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Konfiguration');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Konfiguration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Standard Provisions Raten');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Provisions Raten Liste');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Provision Raten');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Titel');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Typ');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Anteil Kommission');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Währungs code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Unterkunkt anzeigen');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Unterkunftsname');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Unterkunftsadresse');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Unterkünfte, die Rot hinterlegt sind, wurde die Kommission noch nicht vebrucht.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','Lizenznummer');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Ihre Lizenznummer für das Portalplugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistik');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistik für: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Zeitraum: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Unterkunfts - Klicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Unterkunft anzeigen');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','Januar');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','Februar');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','März');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','Mai');
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
define('_JRPORTAL_MONTHS_LONG_7','August');
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
define('_JRPORTAL_MONTHS_LONG_11','Dezember');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Anzahl Buchungen');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Beträge der Buchungen');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Zimmerbelegung');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Geschätze Provision ');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Provisionsrate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Buchungen auflisten');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Unterkunfts NR.');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gast NR.');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Rechungs NR.');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Gesamte Buchungen');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Vertrags Identifikation');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Vertragsnummer');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Währungs Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Erstellt');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiviert');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Archiviert Datum');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Unterkunft hinzufügen');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Quelle : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Ist diese eine Mehrzimmer Unterkunft?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Ist die Unterkunft ein Hotel/bed and breakfast/Pension? Falls ja, wählen Sie Ja. Ist es eine Unterkunft ohne vermietete Zimmer wie ein Haus/Ferienwohnung wählen Sie Nein.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Position zur Rechnung hinzufügen');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Verwaltung der Rechnungen');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Zugewiesene Unterkunft (sofern verfügbar)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Betrag');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Beschreibung');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Position erfolgreich eingefügt ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Bestellungen anzeigen");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Fehler beim Einfügen der Rechnungsposition ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Fehler, es wurde kein Betrag eingesetzt");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Sie können auch Unterkunftsspezifische Sprachdateien in einem Unterordner anlegen, z.B. "Medienvermietung" indem Sie die Sprachdatei in den Unterordner kopieren. Anschliessend können Sie die Inhalte der Sprachdatei auf die zu vermietenden Objekte anpassen, z.B. DVDs, CDs etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Sie können diese Unterkunft nicht löschen, da sie die einzige ist, auf die Sie noch Zugriff haben. Wenn Sie diese Unterkunft nicht anzeigen möchten, stellen Sie in der Statusleiste auf unveröffentlichen. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Falls es sich hier um eine Demo-Installation handelt und Sie beabsichtigen Jomres Solo (auf eine Unterkunft begrenzt) zu kaufen, sollten Sie zuerst eine neue Unterkunft anlegen und diese Unterkunft löschen, noch bevor Sie den Lizenz kaufen. Der Schlüssel wird direkt nach dem Kauf zugewiesen. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Fehler Meldungen mailen?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Setzen Sie auf Ja, wenn Sie die generierten Fehlermeldungen automatisch an jomres.net übermitteln möchten. Dies ermöglicht, dass auftretende Fehler sofort erkannt und behoben werden können, noch bevor Sie den Fehler formulieren und melden müssen. Hinweis: Diese Funktion ist auf 'localhost' deaktiviert. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Ist diese Unterkunt ein Hotel/Pension oder Haus/Ferienwohnung? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC'," Die Konfiguration unterscheidet sich je nach dem, ob es sich um eine einzelne Immobilie oder mehrere Immobilien handelt. Wählen Sie MRP wenn Sie mehrere Räume anbieten und SRP wenn Sie eine Immobilie einzeln anbieten wollen. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Jomres Mailpüfer verwenden? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Erzwingt eine strengere Mailprüfung beim Versenden. Einige Webserver geben einen Serverfehler 500 ab, wenn Sie versuchen, eine Email auf eine ungültige Emailadresse zu senden. Falls Sie diese Einstellung umschalten, verhindert das PHP Skript die Anzeige dieses Serverfehler 500. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Unterkunft Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"Nacht/Nächte zum");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"pro Zimmer ");
/*
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Verlängerung Aufenthalt Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Preis Zusammenfassung ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Bitte lesen und erklären sich damit einverstanden ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"Eine Zusammenfassung Ihrer Buchung sehen Sie untenhalb.<br /> Um Änderungen vorzunehmen, klicken Sie bitte auf den Knopf Reservierung ändern. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Wenn Sie die oben genannten Informationen ändern müssen, dann klicken Sie bitte hier");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Reservierung ändern.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Bitte geben Sie besondere Wünsche in das untenstehende Feld ein.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Ich bestätige, dass die vorstehenden Angaben richtig sind und bin einverstanden mit den ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover über ein Thumbnail für ein grösseres Bild");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Diashow anzeigen unterhalb oder oberhalb");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Oben");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Unten");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Beide");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"pro Person pro Nacht ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Standard Sprachdatei");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Wählen Sie die Sprache, welche Jomres als Standard verwenden soll, wenn die Standardsprache nicht schon durch Joomfish festgelegt ist.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"Der absolute Pfad für vorhandene Log-Einträge. Denken Sie daran, dass Sie nach wie vor die Fehlerreports (Errorlogs) aktivieren können, indem Sie die jomres.php Datei manuell anpassen. Obwohl die Fehlerreports alle gleichzeitig aktiviert werden, muss es von Ihnen aktiviert werden.");
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
	define('_PN_PAGE','Seite');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','von');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Zurück');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Weiter');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','Ende');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Anzeigen #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Ergebnis');
	
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Beachten Sie, dass dies kein Buchungsformular ist. Es kann anstelle einer Email Mitteilung eigesetzt werden.<br/>Bitte schreiben Sie hier die Nachricht, die Sie übermitteln wollen an: ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Hotel kontaktieren');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Unterkunft Anfrageformular ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Vielen Dank für Ihre Anfrage. Die Nachricht wurde an die entsprechende Kontaktadresse und an Ihre angegebene Emailadresse zur Kenntnis geschickt. Ihr Anliegen wird so schnell wie möglich bearbeitet.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' Betreff ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Schreiben Sie die angezeigten Buchstaben in die Box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Kann die Buchstaben nicht lesen. Erstelle ein ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Absenden');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','neues Bild');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Anfrage');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Zur Zeit gibt es keine offene Stellen!');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Bitte wählen Sie aus der Liste rechts Ihre gewünschte Unterkunft');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Mind. Räume die gewählt sind');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimale Anzahl Zimmer die bereits vor Buchung im ausgewählten Tarif/Zimmerart Kombination angeboten werden können. Ermöglicht Ihnen Discount-Tarife, auch wenn bereits mehr als N Zimmer ausgewählt sind. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max Räume bereits gewählt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximale Anzahl Zimmer die bereits vor Buchung im ausgewählten Tarif/Zimmerart Kombination nicht mehr länger angeboten werden können.  Stoppt die Möglichkeit Ihne Discount-Tarife, auch wenn bereits mehr als N Zimmer ausgewählt sind, anzuwählen. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Beachten Sie, dass alleinstehende Unterkünfte hier nicht verwendet werden, wenn alleinstehende Unterkünfte in der allgemeinen Konfiguration auf "Ja" gestellt sind. Die Einstellungen hier sind eine Alternative zu den Pauschalsätzen. Die Beträge werden nicht zu den pauschalen Unterkunftssätzen (SPS) hinzugerechnet.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Frei"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Einige Buchungen");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"zur Hälfte gebucht");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Oft gebucht");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Ausgebucht");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url Präfix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Dies ist der erste Eintrag nach dem Domainnamen - Bitte nach Ihren Wünschen anpassen - Bitte leer lassen, wenn Sie keine Namenserweiterung wünschen.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Zeige Unterkunftsbegriff Alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking Begriff Alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Suchbegriff Alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Ergänze den Landesnamen in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Ergänze die Region in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Ergänze die Stadt in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Ergänze den Unterkunfts-Typ in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Ergänze den Unterkunftsnamen in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Füge die ID zum Unterkunftsnamen hinzu');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Falls der Unterkunftsnamen auf Nein gestellt ist, wird nichts verändert. Falls auf Ja gestellt, wird die URL Adresse etwa so aussehen: fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Struktur Such-URL - Ergänze das Land in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC',' ');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Struktur Such-URL - Standard Land');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Wenn alle Unterkünfte im gleichen Land sind, wird das Land in der Suche nicht angezeigt - Falls Sie das Land angezeigt haben wollen, fügen Sie dort das Standard-Land ein.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Struktur Such-URL - Ergänze die Region in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Struktur Such-URL - Standard Region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Wenn alle Unterkünfte in der gleichen Region sind, wird die Region in der Suche nicht angezeigt - Falls Sie die Region angezeigt haben wollen, fügen Sie dort die Standard-Region ein.');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Struktur Such-URL - Ergänze die Stadt in der Url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Struktur Such-URL - Standard Stadt');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Struktur Such-URL - Unterkunfts-Typ');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Struktur Such-URL - Standard unterkunfts-Typ');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Wird in der URL verwendet, wenn die Suche für alle Unterkunftstypen gelten soll');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Falls die 404sef Komponente nicht installiert ist, oder Sie sie noch nicht kopiert haben '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php nach '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Falls Sie die Komponente schon installiert haben, können Sie die URLs jetzt hier bearbeiten. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Javascript Kalendersprache automatisch erkennen');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Wollen Sie die automatische Erkennung der Sprache für den JavaScript-Kalender aktivieren? Fall die Sprache nicht automatisch erkannt werden kann, dann wird die unten eingestellte Sprache verwendet');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','pro Woche');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','pro Tag');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','pro Buchung');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','pro Person pro Buchung');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','pro Person pro Tag');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','pro Person pro Woche');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','pro Tag (min. Tage)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','pro Tag X Räume gewählt');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Registrierung der Minikomponente neu aufbauen');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalerweise werden die Jomres Plugin Registrierung automatisch wieder hergestellt, wenn Sie im Plugin-Manager ein Plugin hinzufügen oder entfernen. Es ist möglich, dass Sie diese Herstellung nicht immer automatisch ausgelöst wird, aus welchem Grund auch immer. Daher können Sie mit dieser Funktion die Registrierung für den Wiederaufbau manuell eingeben. Wenn Sie Zugriff auf den Plugin-Manager und die Upgrades Funktion haben, dann ist es unwahrscheinlich, dass Sie  diese Funktion benötigen müssen. Sie müssen die Registrierung jedes Mal neu wiederherstellen lassen, wenn Sie eine neue Mini-Komponente hinzugefügt haben.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Die Registereinträge wurden erfolgreich aktualisiert');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','Es gab ein Fehler bei der Aktualisierung im Register der Minikomponente. Bitten schauen Sie im Jomres Fehlerreport nach um diesen Fehler ausfindig zu machen.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Suche nach Preis.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Speichere...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Verwenden Sie die mehrstufigen Immobilien Details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 ermöglicht Ihnen, die stufenweise Ausgabe der Unterkunftsdetails über eine Templatedatei (composite_property_details.html) zu regeln. Falls Sie diese Funktion nicht brauchen, stellen Sie auf Nein. (nur bereits vorhandene Benutzer können auf Nein stellen, wenn neue Benutzer selber wählen sollen, lassen Sie es auf Ja gestellt)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','Dies ist eine Liste aller Benutzer des Systems. Nicht-Immobilien-Manager haben ein Gast-Symbol, Immobilien-Manager haben Empfang / Unterkunfts Manager / Super Immobilien-Manager-Symbole. <br/> Wenn Jomres zuerst den "admin" installiert, dann wird er automatisch zum Property Manager und gilt als ein autorisierter Benutzer. <br/> Ein Nicht-Super-Manager muss es für mindestens ein Objekt geben, da sonst eine Fehlermeldung angezeigt wird, wenn sie versuchen, Jomres zu nutzen. <br/> Wenn ein Benutzer zugelassen ist, dann können Sie das Profile auf die verschiedenen Unterkünfte die Manager Rechte zuweisen. <br/>Klicken Sie auf das rote Kreuz neben dem Namen um ein Benutzer zu authorisieren. Um ein Benutzer zu deauthorisieren, klicken Sie auf den grünen Haken. <br/> Um Benutzer nur auf bestimmte Eigenschaften oder bestimmte Unterkünfte die Manager Rechte zu geben, klicken Sie auf das Symbol "Bearbeiten" (das ist nur sichtbar, wenn Sie dazu berechtigt sind). Benutzer, die ihre Unterkünfte selber registriert haben, werden automatisch für das betreffende Objekt autorisiert. Der Super Unterkunfts Manager hat automatisch die Rechte über alle Eigenschaften und alle Konfigurations-Optionen, auch wenn die Konfigurations-Einstellungen in der Webseitenkonfiguration eingeschränkt ist.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Hier können Sie ein Manager für bestimmte Unterkünfte zuweisen. Stellen Sie sicher, dass Sie für die Bearbeitung der rechte bei mindestens einem Objekt Super-Immobilien-Manager Rechte haben, da sie sonst eine Fehlermeldung angezeigt bekommen, wenn Sie sich anmelden. Um einem Receptionist / Unterkunfts Manager die Rechte nur über bestimmte Unterkünfte zu geben, dann stellen Sie das Property Manager Dropdownfeld auf "Nein".');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Bitte warten Sie, Ihre Bestellung wird verarbeitet...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Sie haben zur Zeit keine Buchungen getätigt!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Unterkunfts-Typ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Unterkunfts-Typ bearbeiten');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Wählen Sie Ihr Unterkunfts-Typ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres Anmeldung');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','Diese Funktion aktiviert/deaktiviert die Möglichkeit, sich mit Jomres anzumelden. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Buchungs Logs (Formular Logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway Logs (z.B. Paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Anfrage Log (alle eingehenden Serveranfragen)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (verschiedene Logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (vor allem für die Aufnahme der Kommission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Ihre Frage...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Raumauflistung Buchungsformular nach Raumtyp-Bild angezeigt');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Maximum Unterkünfte in der Liste');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','Anzahl Unterkünfte die nach einer Suche pro Seite angezeigt werden sollen');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','eingebaute Suchfunktion');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Die in Jomres integrierte Suchfunktion ermöglicht es Ihren Nutzern, die Suche von den Jomres Eigenschaften nach den eigenen Wünschen zu gestalten. Haben Sie schon mit der Suchfunktionen von Jomres in Joomla gearbeitet, werden Sie mit diesen Einstellungen vertraut sein. <br/> Diese Funktion ermöglicht es, Ihnen die Suche innerhalb der Jomres Handhabung für die Benutzer anzubieten, die das Joomla Suchmodul nicht verwenden möchten, oder das CMS für andere Benutzer, die in ihrem CMS keine eigene Jomres Suche haben. <br/> Denken Sie daran, dass, wenn Sie sich für die Suche nach etwas über einen Link (also nicht um eine Drop-Down-), dann andere Suchoptionen wird nicht durchgeführt werden, nur das Element, das mit dem Link, der Sie geklickt haben. <br/> Beachten Sie, dass das standardmässige Layout dieser integrierten Suche nicht sehr schön aussieht. Dafür gibt es die Template-Datei, in der das Layout mit allen möglichen Optionen angepasst werden kann. Um dieses Layout so zu verbessern, wie Sie sich das wünschen, müssen Sie die Datei <b> srch.html </ b> im Ordner <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> bearbeiten. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Diese Funktion aktivieren?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Falls diese Funktion aktiviert ist, wird Jomres jede Anfrage nach den gewählten Optionen absuchen und auch anzeigen.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Zeilen verwenden');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Jede Suchoption, welche Sie als Link definiert haben (dort wo eindeutig erkennbar) wird als Spaltenauflistung angezeigt (für IE setze ein br am Ende des Links)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Zeilenfunktionen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Anzahl Funktions-Icons die angezeigt werden sollen bevovor das br eingefüht wird, um zur nächsten Zeile zu gehen.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Suche nach der Region mittels Auswahlfeld");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Zeigen Sie das Such-Auswahlfeld zum Filtern von Länder/Regionen/Städten an. Falls Sie diese Funktion verwenden wollen, benutzen Sie lieber die unten aufgeführte Suche nach Region/Stadt nicht.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Suche nach Unterkunftsname");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Zeige Suchergebnis nach Eingabe des Unterkunftsnamens an.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Als Auswahlfeld anzeigen?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Suche nach Stadt/Region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Zeige Suchergebnis nach Region an");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Als Auswahlfeld anzeigen?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Suche nach Unterkunfts-Typ");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Zeige Suchergebnis nach Unterkunfts-Typ an");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Als Auswahlfeld anzeigen?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Suche nach Raum-Typ");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Zeige das Suchergebnis nach Raum-Typ");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Als Auswahlliste anzeigen?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Setzen Sie auf Nein, um die Auflistung als Link anzuzeigen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Suche nach Funktionen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Zeige das Suchergebnis nach Funktionen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Als Auswahlliste anzeigen?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Setzen Sie auf Nein, um die Auflistung als Tooltipbild und Checkbox anzuzeigen");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Suche nach dem Beschrieb");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Zeige das Suchergebnis nach dem Beschrieb");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Suche nach Verfügbarkeit");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Zeige das Suchergebnis nach Verfügbarkeit");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Suche nach Preisschritten");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Zeige das Suchergebnis nach Preisschritten");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Preisschritte");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres wird auf allen Werten der Tarifauflistung eine Reihe von Preisspannen hinzurechnen, aufgrund des Wertes, den Sie hier eingeben.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cronjob Einstellungen and Logs');
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
define('_JOMRES_COM_A_CRON_METHOD','Methode');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Falls Sie keine Crinjobs auf dem Server haben, dann setzen Sie es auf Minikomponente, andererseits erstellen Sie einen Cronjob und geben Sie folgendes an:<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Zeige logging im Browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Funktioniert nur, wenn auf Minikomponente gestellt ist.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging aktiviert');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Setze es auf Ja, um das Logging zu aktivieren. Das Ergebnis der Logs wird unten angezeigt.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verberge das Logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Zuviele Logging Ausgaben');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Bearbeitung');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Diese Funktion ermöglicht das bearbeiten des Jomres Frontend Templates auf dem Server. Das Ergebnis wird in der Datenbank gespeichert. Seien Sie vorsichtig, beim Bearbeiten der erweiterten Einstellungen.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Wurde das Template angepasst?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Eigene Felder');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Feldname (ohne Abstand)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Standardwert');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Beschrieb');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','benötigt');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Menge');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Falls die maximale Menge auf mehr als 1 gestellt ist, dann werden die Gäste ein Auswahlfeld mit der Menge der Extras angezeigt bekommen, die sie benötigen.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Rechnungen erstellen");

/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"MwSt Raten");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Steuersatz");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Ratenbeschreibung");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Sie können diesem Steuersatz nicht löschen.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Rechungen");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unbezahlte");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Bezahlt");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Storniert");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Ausstehend");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"Benutzer");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Erstellt");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Fällig");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Abonnement");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Gesamtbeitrag");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"wiederkehrende Zahlungen");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"wiederkehrende Zeitrau");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Wiederkehrende Tag des Monats");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Währungscode");

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
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Beschreibung");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Ausgangspreis");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Ausgangsanzahl");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Rabatt für Erstaufträge");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Gesamtbetrag");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"wiederkehrender Preis");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"wiederkehrender Anzahl");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"wiederkehrender Rabatt");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"wiederkehrender Gesamtbetrag");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Steuercode");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Steuerbeschreibung");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Steuersatz");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Währungscode (z.B. EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Sandbox benutzten?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Deine Paypal Email Adresse");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: Bei Verwendung von PayPal müssen Sie in Ihrem PayPal-Konto das Autoreturn deaktivieren (Profile/Website Payment Preferences), und die IPN (Profile/Instant Payment Notification Preferences)zur der URL of:<br/><b>&nbsp;".$jomresConfig_live_site."/index.php?option=com_jomres&task=completebk&Itemid=".$jrConfig['jomresItemid']."&no_html=1");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Diese Rechnung ist fällig. Bitte klicken Sie auf den Knopf, um zu PayPal weitergeleitet zu werden.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Jomres Standard-Gateway-Einstellungen überschreiben?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Wenn die Einstellungen paypal Option auf Yes gesetzt wurde dann sind folgende Einstellungen gültig: Die allgemeine Konfiguration in der Gateway-Einstellungen wird nicht mehr angezeigt und wenn eine Buchung erfolgt wird die Paypal email verwendet die Sie eingetragen haben in der allgemeinen Konfiguration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Meine Rechnungen anzeigen");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Rabatte");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Als Anreiz zur Buchung, können den Gästen Rabattangebote gemacht werden. Gültig für einem bestimmten Buchungszeitraum, nicht für das Datum einer Buchung selber.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Rabatt Code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Gültig von");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Gültig bis");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Rabattbetrag");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Rabatt in Prozent");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"nur Zimmer");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Rabatt wird nur am Zimmerpreis angerechnet. Falls auf Nein gesetzt, wird der Rabatt auf den ganzen Buchungsbetrag angewendet.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql Fehler beim löschen/einfügen der Coupon Daten");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Bitte geben Sie den Couponcode ein und klicken Sie auf "Coupon speichern" um den rabatt Ihrer Buchung anzurechnen.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Coupon speichern');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Rabatt vor der Buchung gespeichert');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Rabattnummer nicht gefunden');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Wert des Rabattcode');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Vergünstigte Buchung. Rabattcode/Rabattwert Einstellungen: ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Verwende die Jomres Cachefunktion?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Setzen Sie auf Nein, wenn Sie die Jomres Cache Funktion deaktivieren wollen.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Sprache wählen');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Wählen Sie aus den angezeigten Sprachoptionen die Sprache über das Auswahlfeld.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Das Sprachauswahlfeld anzeigen?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Abgebuchte und annulierte Buchungen');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Sehr geehrte");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Vielen Dank für die Registrierung ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Ihr Benutzername lautet : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Ihr Passwort lautet : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Um Ihre Buchungen anzusehen, melden Sie sich bitte an ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon gespeichert');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon gelöscht');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','Hier ist Ihre Verwaltung, wo sie eine Übersicht über die Verfügbarkeit aller Objekte haben. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Verwende Jomres Nachrichtendienst');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Viele Manager geben Ihre Rückmeldung in Form einer JavaScript-Nachricht aus, während dem die Seite neu geladen wird. Falls Sie diese Option verwenden wollen, aktivieren bzw. deaktivieren Sie diese Funktion.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Benutzer");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Passwort");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API ID");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Handynummer für Benachrichtigungen");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Bitte verwenden Sie folgendes Fotmat 'Länder Code, Handynumber'. Die UK Nummerreihenfolge würde z.B so aussehen wie '447979123456'. Lassen Sie dieses Feld leer, wenn Sie keine Benachrichtigung per SMS erhalten wollen.");
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
<b>Offenbar wollen Sie das auf Ihrem localhost ausprobieren. Sie können das aber nur auf einem 'live' Server verwenden.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Schritt 1 - eröffnen Sie ein Clickatell Konto</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Schritt 2 - fügen Sie die API Kennung ins Feld ein (sub-product)</b><br/>
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
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Raum Buchungsformular für Behinderte anzeigen');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Raum Buchungsformular max. Personen anzeigen');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Bitte beachten Sie, dass die Zimmerpreise nur Schätzungen sind und der effektive Buchungspreis nicht berechnet wird, bis Sie ein Zimmer oder mehrere Zimmer zu Ihrer Auswahl hizugefügt haben.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Datenbanktemplate letzte Änderung');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Festplattentemplate letzte Änderung');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Datenbanktemlate Warnung');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Das Datenbanktemplate ist abgelaufen');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','Wenn es ein Symbol gibt, dass nicht ins Template passt, dann hat Joomres festgestellt, dass das Template in der Datenbank älter <strong><i>may</i></strong> älter sind, als das Template auf der Festplatte. In diesem Fall ist es möglich, dass das Template in eine neueren Version von Jomres zu aktualisieren. Wenn dies der Fall ist, dann ist es möglich, dass Ihr Template für die eine neuen Funktionen von Jomres nicht kompatibel ist. So sollten Sie die Datei auf der Festplatte entsprechend anpassen, um sicherzustellen, dass die neuen Funktionen nicht fehlen.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Abonnemente");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Beschreibung");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Veröffentlicht");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Häufigkeit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Versuchs-Zeitraum");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Versuchs-Gebühr");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Komplette Gebühr");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Raum Limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Objekt Limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Häufigkeit: M/Q/H/J Monatlich/Quartalsmässig/Halbjährlich/Jährlich");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Testzeitraum: Eingabe, 0 (null) für keine Angabe, 1 für einen Monat, 2 für zwei Monate usw.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Anmelden");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Bitte füllen Sie Ihre Benutzerinformation aus oder ergänzen Sie diese. Beachten Sie, dass sämtliche Felder benötigt werden.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Vorname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Nachname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Addresse");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Land");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postleitzahl");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Sie brauchen ein gültiges Abonnement, um neue Objekte zu erfassen. Im Moment haben Sie Abonnemente gezahlt für ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," veröffentlichte Objekte. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Sie können die Anzahl Objekte erhöhen, indem Sie <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>hier weitere Abonnemente kaufen.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Sie haben ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," Objektplätze verwendet. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Falls Sie eine Auflistung Ihrer Objekte ansehen möchten, klicken Sie <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>hier</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Um eine Auflistung der möglichen Abonnemente zu erhalten, klicken Sie <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>hier</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Sie können leider dieses Objekt nicht mehr erfassen, weil Sie die maximale Anzahl von Objekten erreicht haben.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Vielen Dank, dass Sie ein Abonnement auf unserem Server gelöst haben. Sobald die Rechnung als Bezahlt gekenntzeichnet ist (Es kann gelegentlich zu Verzögerungen bei PayPal kommen), können Sie<a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>hier klicken, um mit der Erfassung Ihrer Objekte</a> fortzufahren.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Es tut uns leid, aber Sie haben sich noch nicht bei unserem Service registriert. Bitte lassen Sie es uns wissen, wenn wir Ihnen weiterhelfen können");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Es tut uns leid, aber Sie haben die Anzahl möglichen Objekte, die Sie veröffentlichen können, erreicht. Sie können die Objktanzahl erhöhen, indem Sie <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>hier weitere Abonnements-Pakete kaufen.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Verwenden Sie die Abonnierungs-Funktionalität");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Setzen Sie auf Ja, wenn Jomres den Abonnementsdienst verwenden soll.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Erstelle bei der Buchung einen neuen Benutzer');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Erstelle ein automatisch ein neues Benutzerkonto, bei der Buchung eines unregistrieten Benutzers.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Klicken Sie hier, um Ihre Unterkunft zu registrieren');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktive Anmeldungen");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway Anmeldung ID");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Vielen Dank für Ihre Buchung - Die Benutzerdetails folgen in Kürze");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres wird Ihre Adresse an Google übermitteln, um die Position auf der Karte in den Objektdetails anzeigen zu können. Wenn Google aus irgend einem Grund die Adresse nicht findet, können Sie stattdessen die Längen- und Breitengrade manuell ins Feld unten eingeben. Falls Sie die Längen- und Breitengrade manuell eingeben wollen, beachten Sie bitte, dass die Angaben aus Google Earth nicht verwendet werden können. Besuchen Sie stattdessen <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">die itouchmap Webseite</a> um die benötigten Längen- und Breitengrade herauszufinden. Die Angaben müssten in etwa so aussehen wie diese hier: '51.754564622' und '-4.997314810'.");

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

/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
/**
* @ignore
*/
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');

/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
/**
* @ignore
*/
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');

