<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Rezervare rapida');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Arata profilurile');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configurare generala');
jr_define('_JOMRES_COM_MR_BACK', 'Inapoi');
jr_define('_JOMRES_COM_MR_YES', 'Da');
jr_define('_JOMRES_COM_MR_NO', 'Nu');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nou');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Unitate cazare noua');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Client nou');
jr_define('_JOMRES_COM_MR_SAVE', 'Salveaza');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nume');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Sosire');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Plecare');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Utilizator');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Nivel de acces');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Utilizator modificat');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Toate rezervarile');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editeaza rezervarile');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Sos/Ple');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Oaspete');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Camera');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Plata');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Prenume');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nume');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Cerinte speciale');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Luati la cunostinta ca cerintele speciale pot implica tarife suplimentare');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Anuleaza rezervarea');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Numarul la care locuiti');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Strada');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Oras');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Cod postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Tel fix');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nu puteti anula aceasta rezervare deoarece oaspetele este deja cazat');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Avans neplatit');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirma anularea');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervare anulata');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Zile pana la sosire');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tip rezervare');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Black');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Receptie');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Nume camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Etaj');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Acces persoane cu handicap?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Nr. maxim de persoane');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tip camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Descriere tip camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista facilitati camera');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Avans platit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introduceti avansul');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total de plata');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Nr. avans');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervare');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Avans');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Avans salvat');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Camere');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Unitate cazare');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tip camera');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Editeaza detaliile clientului');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Prenume');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Nume');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nr.');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Strada');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Oras');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Cod postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon fix');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telefon mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Alegeti');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'nopti');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Vezi panou configurare camere si unitati cazare');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Camere');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Facilitati camere');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Tipuri camere');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Unitate cazare');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Facilitati unitate cazare');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nume');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Numar');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Etaj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Nr. maxim de persoane');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Facilitati');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Editeaza');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Facilitati camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descriere');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Facilitate camera adaugata');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Facilitate camera actualizata');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Tip camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Prescurate facilitate camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Descriere Facilitate camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tip camera adugat');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editeaza');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nume');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Strada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Oras');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Judet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Tara');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Cod postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Facilitati');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Unitate de cazare actualizata');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Facilitati Unitate de cazare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Prescurtare Facilitate Unitate de cazare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descriere Facilitate Unitate de cazare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Facilitate unitate de cazare actualizata');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarife');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Nume tarif');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descriere');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Activ de la');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Activ pana la');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarif pe noapte');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minim zile');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maxim zile');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minim persoane');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maxim persoane');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tip camera');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignora PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permite weekenduri');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editeaza');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Cloneaza item');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarif sters');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editeaza tarif');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervare salvata');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Incepe cazare oaspete');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Termina cazare oaspete');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Listeaza rezervarile');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Dashboard');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Administrare clienti');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administrare unitati cazare');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verifica disponibilitatea');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Prenume');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nume');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Strada');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Oras');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Cod postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon fix');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Nu exista camere disponibile care sa intruneasca cerintele dvs.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Va multumim pentru rezervarea facuta si va dorim sedere placuta.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Incepe cazare client ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Client cazat ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Termina cazare client ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Tarife suplimentare');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarife & Monede');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload fisiere');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Tarife suplimentare pentru o singura persoana');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Asigurati-va ca este setat Da daca doriti sa percepeti tarife suplimentare pentru o singura peroana');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Tarif suplimentar pentru o singura persoana');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Avansul cerut este procent?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Avansul cerut este un procent din valoarea totala a rezervarii? Daca NU, avansul cerut va fi o suma fixa');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Valoare avans cerut');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Pe persoana, pe noapte');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Selectati Da daca doriti sa taxati pe-persoana-pe-noapte. Daca nu, costul va fi calculat pe-camera-pe-noapte');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Marimea fisierului');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Marimea maxima a imaginii in Kilobytes');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezervat');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detaliile rezervarii');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Va reamintim ca aceasta rezervare este un contract legal, asa ca daca din orice motiv va anulati sau scurtati rezervarea, trebuie sa platiti valoarea integrala a contractului.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Anularea rezervarii si taxele de anulare. </i> Daca doriti sa anulati rezervarea, trebuie sa confirmati in scris. Taxele de anulare sunt urmatoarele:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Inainte cu mai putin de 14 zile pana la sosire: ');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Tipareste scrisoarea de confirmare');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Tipareste chitanta');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Numar de nopti: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cost pe noapte: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Tipareste chitanta');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Adauga serviciu la factura');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descrierea serviciului');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Valoarea serviciului');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Alte servicii facturate');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Item adaugat la factura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload imagine');
jr_define('_JOMRES_FILE_UPLOAD', 'Upload fisier');
jr_define('_JOMRES_COM_A_ODDS', 'Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Arata erorile');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Seteaza Da pentru a vedea erorile');
jr_define('_JOMRES_FILE_DELETE', 'Sterge aceasta imagine');
jr_define('_JOMRES_FILE_DELETED', 'Fisier sters');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Sterge');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Aceasta camera nu poate fi stearsa pentru ca exista rezervari. Anulati rezervarile si incercati din nou.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Camera stearsa');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Sterge facilitate camera');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Aceasta facilitate nu poate fi stearsa deoarece este atribuita unor camere. Stergeti aceasta facilitate de la camerele respective si incercati din nou.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Facilitate camera stearsa');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Sterge facilitate proprietate');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Aceasta facilitate nu poate fi stearsa pentru ca este atribuita undei proprietati. Stergeti aceasta facilitate de la proprietatea respectiva si incercati din nou.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Facilitate proprietate stearsa');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Sterge tip camera');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tip camera sters');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Sterge proprietate');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Proprietate stearsa');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nu aveti dreptul sa stergeti aceasta proprietate.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Fullsize image width');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Harta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descrierea proprietatii');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Ora de cazare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Descrierea zonei');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Alte informatii/servicii');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Meta title');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Optiuni transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Termeni si conditii');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Vizitatorii pot face rezervari online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Seteati Da pentru a va asigura ca vizitatorii pot face rezervari online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervarile sunt pentru o perioada fixa?');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Daca setati Da, atunci rezervarile vor fi pentru o perioada fixa. Daca setati Nu, asigurati-va ca nu este setat Da pentru "Zi sosire predefinita"(doar daca nu doriti sa fortati oamenii sa soseasca doar intr-o anumita zi) altfel nu veti avea foarte multe linkuri din calendrul de disponibilitate.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Perioada de rezervare: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervare camere');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periods, eg 3x 7 booking periods = 21 days');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Aceasta este o proprietate ca un apartment?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Revizuieste rezervarea');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirma rezervarea');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Luni');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Marti');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Miercuri');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Joi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Vineri');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sambata');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Duminica');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'L');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'J');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'V');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'S');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'D');
jr_define('_JOMRES_COM_A_AVLCAL', 'Calendarul disponibilitatii.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Culoare ziua curenta ');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Culoarea zilelor din luna ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Font colour for days not in the display month');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cell bgcolour for days when property/room is available');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cell bgcolour for days not in display month');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cell bgcolour for occupied days');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cell bgcolour for provisionally booked rooms (bookings for which a deposit has not been taken)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cell bgcolour for dates in the past');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupat/Indisponibil');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponibil pentru rezervare');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Rezervari provizorii');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Data de sosire predefinita');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Doar pentru unitatile de czare care ofera rezervari pe perioada fixa. Alege ziua in care trebuie sa fie sosirile.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Data sosire predefinita');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Perioada de sedere (zile)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Arata calendarul disponibilitatilor?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Seteaza Da pentru a arata calendarul disponibilitatii.');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilitate');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Click pe o data libera pentru a vedea formularul de rezervare.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Rezervări negre');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'New Black booking');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Sterge oaspete');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Oaspete sters');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Acest client nu poate fi sters deoarece are rezervari. Stergeti rezervarile acestui client si incercati din nou.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Orice');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format ieșire calendar');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Format de introducere calendar');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'This allows the user to change the input format of dates within Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Perioadele fixe de rezervare permit pauze ');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Lungimea pauzelor');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicat');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'User (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtru data');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Urmeaza sa soseasca');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Sosesc azi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Ocupant actual');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Pleaca azi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Data de plecare depasita');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Nu a sosit');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Camera creata');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Camera actualizata');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Camera stearsa');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Caracteristică rm creată');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Caracteristică rm actualizată');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Funcție rm ștearsă');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Proprietate creată');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Proprietate actualizată');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Proprietate ștearsă');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Setări prop. editate');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Prop. publicată');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarif creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarif actualizat');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Adăugat svc. taxă');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Invitat rezervat în');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Depozit introdus');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Invitat creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Invitat actualizat');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervat o cameră');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'A creat un extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Actualizat un extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Șters un extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publicat în plus.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'A intrat rezervare neagră.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Rezervare neagră ștearsă.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extraoptiuni');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Descriere');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nume');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Detalii costuri');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extraoptiune actualizata');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editeaza item');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extraoptiune stearsa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Management extraoptiuni');
jr_define('_JOMRES_COM_A_EXTRAS', 'Arata extraoptiuni pe formularul de rezervare?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Selecteaza Da pentru a arata extraoptiunile pe care doriti sa le oferiti clientului');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Optionale');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Black booking start date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Service resumes date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Black bookings');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'A apărut o eroare la încercarea de a rezerva aceste camere, una sau mai multe dintre camerele pe care le-ați selectat nu sunt gratuite.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Camere incluse în rezervare neagră');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Fără rezervări negre de listat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Numar de stele');
jr_define('_JOMRES_COM_A_RESET', 'Reseteaza');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervare anulata');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Cauta:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Simbolul monedei');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Cod moneda');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Detalii');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Limiteaza rezervarile in avans?');
jr_define("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC", 'Setați acest lucru la da dacă doriți să limitați rezervările în avans (utilizați câmpul următor pentru a seta limita în termeni de zile). Dacă setați acest lucru la da, atunci dacă utilizatorul încearcă să rezerve mai mult de n cu zile în avans, apoi data sosirii lor va fi restabilită la data de azi ');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Zilele rezervărilor avansate limitate la:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Taxa de cazare');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Taxa de cazare');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Taxa fixa');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procent taxa');
jr_define('_JOMRES_COM_A_EUROTAX', 'TVA');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Procent TVA');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arhiveaza toate inregistrarile');
jr_define('_JOMRES_FRONT_TARIFFS', 'Tarifele noastre');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nume tarif');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Descriere tarif');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tip camera');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Valabil de la');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Valabil pana la');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Pe persoana pe noapte');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Pe noapte');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Nu include weekend-uri');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minim de zile');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maxim de zile');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Minim de persoane');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Maxim de persoane');
jr_define('_JOMRES_FRONT_PREVIEW', 'Previzualizare');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Mod de editare activ?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Updated custom text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Editeaza limba');
jr_define('_JOMRES_FRONT_PTYPE', 'Tip proprietate');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Listeaza tipurile proprietatii');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editeaza tipurile proprietatii');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tip proprietate');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descriere tip proprietate');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tip proprietate salvat');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipuri proprietate sterse.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Rest de plata');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Nu exista servicii suplimentare de adaugat la factura');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Avans');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Suma completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Suma facturata in momentul rezervarii');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Folositi aceasta optiune pentru a alege daca veti sa platiti la momentul rezervarii. Alegeti Avans daca doriti sa platiti avansul, sau Suma completa daca doriti sa platiti suma completa.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Cal luni de afișat');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'În disponibilitatea camerei, câte luni din calendar ar trebui afișat?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Gateway-uri de plată');
jr_define('_JOMRES_COM_A_CANCEL', 'Anuleaza');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Vă rugăm să alegeți camera (camerele) pe care doriți să o scoateți din funcțiune și datele relevante. <br> Dacă o cameră nu are o bifă, nu poate fi inclusă în rezervarea neagră până când rezervările restante nu au fost finalizate / anulate. <br/> După ce ați selectat datele corespunzătoare, faceți clic pe butonul albastru "aplicați" pentru a verifica din nou disponibilitatea camerei. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b> Se pare că Joomla v-a deconectat pentru inactivitate </b> Vă rugăm să vă conectați și să încercați din nou.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Motiv');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Folosiți gateway-uri de plată?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Selectati metoda de plata.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway activat?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Setare plugin modificată');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Setare plugin inserat');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Vizualizați site-ul acestei proprietăți');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Link extern');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Puneți un link către site-ul dvs. aici.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Editeaza cartea de credit');
jr_define('_JOMRES_COM_A_EDITICON', 'Edit icon size');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Show link to slideshows?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Show slideshow on Property Details page?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Arata link catre tarife?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups allowed?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Încărcați imagini de prezentare');
jr_define('_JOMRES_A_TABS_MISC', 'Diverse');
jr_define('_JOMRES_A', 'Configurare site');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Utilizați caracteristicile proprietății globale');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Pentru a atribui o imagine acestei funcții trebuie mai întâi să încărcați imaginile caracteristicilor companiei dvs. în folderul /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Selectați pluginul de căutare pe care doriți să îl utilizați.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Momentan nu exista oferte de cazare.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Sunteti sigur ca vreti sa faceti asta?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervare');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervare');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Arata tarife inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Informatii detaliate');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Click pntru camere si disponibilitate');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Show Address information below this link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Show detailed property info below this link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Show rooms and availability below this link');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarife fixe');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Tarife aproximative');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Celectati modelul de tarif pe care doriti sa-l folositi');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Aveți două opțiuni de metode de calcul al tarifelor. Prima, metoda tarif forfetar vă permite să oferiți o serie de tarife diferite pentru oaspeți, iar tariful pentru sejur este același pentru tot timpul . Acest lucru este util dacă doriți să oferiți mai multe tarife diferite pentru aceeași dată, de ex. Tarif pentru cazare și mic dejun și tarif pentru masă și seară. Alegeți tariful medii dacă doriți să vă ajustați prețurile în funcție de data în cauză. veți găsi toate tarifele pentru fiecare zi în rezervare, adăugați-le împreună apoi returnați rata medie pe parcursul perioadei ");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Arată introducerea datei de plecare?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Setați acest lucru la Nu dacă nu doriți să afișați caseta de introducere a datei de plecare. Utilizați acest lucru numai dacă știți ce faceți, deoarece data de depărtare în rezervări va fi întotdeauna setată la ziua respectivă după data sosirii. ");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limita de descriere');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Aceasta limitează numărul de caractere afișate în lista proprietăților atunci când se trage din descrierea proprietății.');
// v1.4g +
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Stilul formatului dat () folosit?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Click pentru publicare');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Click pentru nepublicare');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Utilizați tipuri de camere globale');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Pentru a atribui o imagine acestui tip de cameră, trebuie mai întâi să încărcați imaginile de tip cameră în folderul / images / stories / jomres / rmtypes / ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Culoare fundal eroare de intrare');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Țara implicită în formularul de rezervare');
jr_define('_JOMRES_JAVASCRIPT_', 'Campurile marcate cu steluta rosie sunt obligatorii.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Utilizatorii isi pot inregistra proprietatile?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Setați acest lucru la Da dacă doriți ca utilizatorii să își poată înregistra propriile proprietăți fără intervenția administratorului.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Campurile marcate cu steluta rosie sunt obligatorii.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Proprietate creata');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Arata calendarul de la inceputul anului?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Calendarul disponibilității arată de la începutul anului curent.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Numar disponibil de camere');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Inapoi la detaliile proprietatii');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Tipuri camere/Tip unitate');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limită de căutare aleatorie');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Afișați linkurile de conversie Google valutară în listarea tarifelor?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Curs valutar');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Permiteți utilizatorilor să editeze utilizând editori html?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', '<p>Folositi acest formular pentru a face rezervarea. Miscati mouse-ul deasupra butoanelor marcate cu "i" pentru mai multe informatii despre acea coloana. Alegeti data sosirii, data plecarii si numarul de persoane, apoi selectati camera dorita din lista celor disponibile. Dati click pe carema dorita pentru a o adauga la rezervare. Apoi, puteti alege serviciile suplimentare dorite si furnizati adresa dvs. Cand formularul va fi completat se va activa butonul Revizuieste Rezervarea, pentru ca dumneavoastra sa puteti revizui si confirma rezervarea.</p><br />');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', '<p>Folositi acest formular pentru a face rezervarea. Miscati mouse-ul deasupra butoanelor marcate cu "i" pentru mai multe informatii despre acea coloana. Alegeti data sosirii, data plecarii si numarul de persoane. Apoi, puteti alege serviciile suplimentare dorite si furnizati adresa dvs. Cand formularul va fi completat se va activa butonul Revizuieste Rezervarea, pentru ca dumneavoastra sa puteti revizui si confirma rezervarea.</p><br />');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Particularitatile rezervarii ');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Selectati datele cererii de rezervare');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilitate ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Selectati camerele dorite');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Uitati-va aici pentru a vedea daca proprietatea este disponibila intre datele alese de dvs.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Servicii suplimentare ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Selectati serviciile suplimentare pe care doriti sa le includeti in cererea de rezervare');
jr_define('_JOMRES_COM_PERDAY', 'Pe noapte');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Adresa dumneavoastra ');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Va rugam introduceti detaliile dvs. Toate campurile sunt obligatorii');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Camere disponibile');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Camere alese');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Cea mai recenta data de sosire posibila este: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Pe noapte:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Servicii suplimentare:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'TVA:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Reducere:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Oaspeti');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Click pentru a selecta aceasta camera in vederea rezervarii');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click pentru a sterge aceasta camera din lista celor selectate de dvs.');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipuri oaspeti');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Tip oaspete, ex Copil intre 5-10 ani, sau Student ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Note');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Note cu privire la tipul oaspetelui');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maxim');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Nr. maxim de oaspeti de acest tip care poate fi selectat in formularul de rezervare');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Este procent');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Cifra calculată este un procent din cifra de bază calculată pentru cameră. Dacă aceasta este setată la nu, atunci cifra pe care o specificați este pur și simplu adăugată sau scăzută din valoarea camerei de bază.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Adăugați varianță?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Cifra calculată este adăugată sau eliminată din cifra de bază calculată pentru cameră. Setați aceasta la Nu dacă doriți ca aceasta să fie o reducere din cifra de bază.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Varianță');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Cantitatea varianței');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Comandă de tip client modificată');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Tipul de client șters');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Tip client creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Tipul de client actualizat');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Tip oaspete actualizat');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Afișați linkul către lista camerelor în pagina de detalii a proprietății?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Arată <b> numai </b> Calendarul disponibilității / Lista de camere?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Comutați acest lucru la Da pentru a dezactiva afișarea antetului și detaliilor proprietății, astfel încât numai lista camerelor / calendarul disponibilității să poată fi vizualizat în secțiunea de detalii a proprietății. Destinate numai utilizatorilor care închiriază proprietăți cu o singură cameră (de ex. apartamente, cabane etc). ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Interval minim Arr-Dep');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Intervalul minim din formularul de rezervare între data sosirii și data plecării.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Formular de rezervare lista camerei arată numărul camerei');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Formular de rezervare lista camerei arată numele camerei');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Lista de camere din formularul de rezervare arată titlul tarifului');
jr_define('_JOMRES_ORDER', 'Sorteaza dupa');
jr_define('_JOMRES_REQUIREDFIELDS', 'Camp obligatoriu');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Zile inainte de sosire');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Numărul minim de zile care trebuie să treacă, de la "azi", înainte de data sosirii.');
jr_define('_JOMRES_DTV', 'Variații tip dată');
jr_define('_JOMRES_DTV_DOW', 'Zi a saptamanii');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tip invitat implicit');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Numărul implicit al primului tip de Guest afișat în formularul de rezervare .. Dacă utilizați tipuri de oaspeți, acesta este numărul implicit pe care primul tip de oaspeți din formularul de rezervare îl va seta.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Doar utilizatorii inregistrati pot face rezervari?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Ne pare rau, trebuie sa fiti inregistrat pentru a face rezervari. Click aici pentru a va inregistra pe acest site. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Culoare font pentru linkuri către rezervările curente');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Borduri de weekend');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Camera este rezervata');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Rezervare neagră');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Rotunjeste avansul pana la cel mai apropiat intreg?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Taxeaza avans?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarife tarifare stocate ca cifre săptămânale?');
jr_define("_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC", "Aveți opțiunea de a stoca tarifele tarifare fie în valori zilnice, fie săptămânale. Dacă le stocați ca săptămânal, TREBUIE să setați această opțiune la Da.");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Tarif pe saptamana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Datele fixe de sosire se repetă:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Când sunt selectate datele fixe de sosire, numărul de date care pot fi afișate în lista derulantă a datelor');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Data de sosire incorecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data de plecare incorecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervarea este prea surta. Numarul minim de zile care trebuie sa existe intre data sosirii si data plecarii:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Intervalul dvs este ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Varianta tip oaspete incorecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Selectati numarul/tipul oaspetilor');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Aveți prea mulți în partid pentru tarifele disponibile');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ati selectat mai multe camere decat oaspeti, click pe o camera pentru a o sterge din selectia dvs.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Prea multi oaspeti pentru numarul de paturi');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Trebuie sa alegeti mai multe camere');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Alegeti o camera');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Introduceti prenumele');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Introduceti numele');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Introduceti numarul casei/blocului');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Introduceti strada');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Introduceti orasul');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Introduceti regiunea/judetul');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Introduceti codul postal');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Introduceti tara');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Introduceti telefonul fix');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Introduceti telefonul mobil');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Introduceti adresa de email');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Avem disponibilitati!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nici o camera nu a fost selectata inca');
jr_define('_JOMRES_BOOKING_NUMBER', 'Nr. rezervare.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok pentru a rezerva, fundalul casetei de mesaje');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump șablon var?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Setați acest lucru pentru a activa o descărcare DHTML a variabilelor șablon pentru fiecare fișier șablon FRONTEND pe măsură ce pagina este vizualizată. Util dacă doriți să vedeți dacă un anumit element este disponibil pentru a fi utilizat într-un șablon dat.') ;
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figura este procentuală');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Setați acest lucru la Da dacă cifra de calcul a unei singure persoane este un procent. Dacă nu, atunci se va aplica ca sumă forfetară.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Camere disponibile/limita tarif');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Utilizați această intrare pentru a limita numărul de camere disponibile și tarifele care sunt listate în formularul de rezervare. Setați-l la zero dacă nu doriți ca limitarea să fie activată.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Nu avem nimic disponibil in aceasta perioada!');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Rezerva acum: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Mod de editare global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Aveți grijă cu această funcție. Dacă este setat la Da, atunci modul de editare va afecta textul personalizat pentru TOATE proprietățile din sistem pentru constanta pe care o editați.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Folosiți moneda globală?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Setați această opțiune pentru a forța toate proprietățile să utilizeze aceeași monedă.');
jr_define("_JOMRES_COM_JRCONFIG_GLOBALCURRENCY", "Simbol valutar global");
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Componentă împachetată');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Setați acest lucru la Da dacă doriți să forțați site-ul în vizualizarea pagină completă. Acest lucru ar putea fi util dacă intenționați să accesați site-ul prin iframe.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Numai in weekend-uri');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Zilele weekend-ului');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Setați-vă zilele de weekend. Tarifele care permit sau interzic weekendurile vor lua în considerare această setare la generarea listei de camere.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Selectati tara inainte de a introduce informatiile despre proprietate.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Save your property changes before uploading a property image');
jr_define('_JOMRES_TARIFFSFROM', 'Preturi incepand cu - ');
/*
 * @ignore
 */
jr_define('_JOMRES_SEARCH_ALL', 'Toate');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Cauta dupa tara');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Cauta dupa regiune');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Oras');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Cauta facilitati.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Cauta');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Introduceti un cuvant de cautat si apasati butonul');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Cauta cuvintele: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Va rugam introduceti data sosirii si data plecarii si apasati butonul pentru a gasi spatii de cazare disponibile in perioada aleasa.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Cazare la');
jr_define('_JOMRES_SEARCH_RTYPES', 'Camere/Paturi');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Normal');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nume proprietate');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Regiune proprietate');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Oras proprietate');
jr_define('_JOMRES_SORTORDER_STARS', 'Stele');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalii - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formular rezervare');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualizati detaliile de contact');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-verificare disponibilitate camera<br/>(Camera selectata va fi stearsa)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-verificare disponibilitate');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modificare optiuni extra');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Schimbare camera selectata');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Update detalii de contact');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Ne pare rau, unul sau mai multe campuri din detaliiile de contact sunt incorecte.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imagine camera');
jr_define('_JOMRES_CURRENCYFORMAT', 'Format suma');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Cauta optiuni');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Log files');
jr_define('JOMRES_COM_A_MESSAGE', 'Mesaj');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avansat');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanagement');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Mod configurare tarif');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Avertisment: comutarea între diferite moduri de editare a tarifelor poate duce la pierderea datelor. Consultați nota de mai jos referitoare la acest lucru.</b>.
<br/><br/>
Aveți două opțiuni cu privire la modul în care vă configurați tarifele.<br/>
Micromanage: Puteți modifica prețul pentru fiecare zi pentru fiecare cameră/tip de proprietate. <br/>
Avansat: puteți crea un set de tarife care nu sunt legate între ele. <br/>
<br/>
Micromanage vă permite să variați tarifele de la o zi la alta, fără a fi nevoit să gestionați o mulțime de tarife, se realizează prin compararea mai multor tarife diferite între ele. Acest lucru duce la crearea unui număr de tarife pentru dvs. care acoperă o perioadă de timp, dar nu puteți suprapune tarifele unul peste altul.<br/>
Modul avansat vă permite să creați tarife care nu sunt legate de alte tarife. Acest lucru vă permite să creați prețuri pentru proprietatea dvs. pe care altfel nu le puteți crea în modul Micromanage. Este mai laborios de utilizat, deoarece trebuie să vă asigurați că fiecare tarif valabil de la/până se potrivește perfect, dar vă permite să creați tarife mai complicate.<br/>
<br/>
Dacă treceți de la Advanced la Micromanage, toate tarifele existente vor fi eliminate.<br/>
<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Arata lista de camere in pagina cu detalii a unitatii de cazare?');
jr_define('JOMRES_PROPERTYTYPE', 'Tip unitate de cazare');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Nr. maxim de persoane in camera');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Nr. maxim de persoane in rezervare');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Adauga memo');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Editeaza memo');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Sterge memo');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Vezi memo-uri');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Memo nou adaugat');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Memo editat');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Memo sters');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Arata rezervari');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Rezervarile mele');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Vezi rezervare');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Vezi unitati de cazare favorite');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Nu ati adaugat unitati de cazare favorite!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tip unitate cazare');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Activ');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Acest plugin va permite configurarea de preturi dinamice pentru camere.');
jr_define("_JOMCOMP_WISEPRICE_TITLE_DESC_FULL", "Majoritatea companiilor vor recalcula prețurile camerelor pe baza numărului de camere de un tip necesar, care sunt disponibile la o dată dată. Acest lucru le permite să ofere reduceri la un tip de cameră / proprietate care nu este ocupat în timpul o anumită perioadă cu scopul de a atrage afaceri care altfel ar putea fi ratate. <br/> Activarea și configurarea acestui plugin vă permit să oferiți prețuri ajustabile în funcție de numărul de camere ale unui tip selectat care sunt disponibile în proprietate într-o zi dată. <br/> Pragul de zile definește numărul de zile în care trebuie să se încadreze data sosirii înainte ca prețurile camerelor să fie ajustate de această caracteristică, apoi opțiunile procentuale vă permit să configurați procentul de camere care pot fi disponibile înainte de aplicarea unei reduceri date Rețineți totuși, dacă sunt rezervate mai multe camere, atunci nivelul actual de reducere se va aplica tuturor camerelor și nu se va reduce pe măsură ce sunt selectate mai multe camere. ");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Interval (Numarul de zile minim de azi pana la rezervare)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Grad de ocupare al camerelor de 10% sau mai putin');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Grad de ocupare al camerelor de 25% sau mai putin');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Grad de ocupare al camerelor de 50% sau mai putin');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Grad de ocupare al camerelor de 75% sau mai putin');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Discount %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' a fost redus de la ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' la ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Pretul camerei nu include discount ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Cheie API Google');
jr_define("JOMRES_COM_A_MAPSKEY_DESC", "Puteți obține o cheie API Google Maps de la <a href =\"https://console.cloud.google.com/projectselector2/google/maps-apis/credentials\" target=\"_blank\"> Google maps </a>. Odată ce ați introdus cheia hartă aici, Jomres va afișa harta în pagina Detalii proprietate. ");
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Ultimul moment');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Activ?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Seteaza Da daca vrei sa oferi oefrte de ultim moment.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Interval');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Daca o rezervare este facuta cu doar N zile inainte de data sosirii, atunci va fi aplicat un discount');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Reducere');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In procente');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Un discount a fost aplicat acestei rezervari!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Costul sederii a fost redus cu ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% discount daca sosirea este inainte de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Fa o rezervare acum pentru a profita de aceasta oferta!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% sau mai mult discount daca data sosirii este inainte de ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Informatii detaliate trife?');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Seteaz Da ca sa arati informatii detaliate despre tarife');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options');
jr_define('_JOMCOMP_AMEND', 'Modifica rezervarea - Selectare unitate cazare');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Selecteaza unitate cazare');
jr_define('_JOMCOMP_AMEND_HEADER', 'Valoare initiala contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Avans platit');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Avans neplatit');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Modifica total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Modifica avans');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Anulare');
jr_define('_JRPORTAL_CPANEL', 'Panou de control');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Comision');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Alegeți rata de comision implicită care va fi aplicată unei proprietăți în cazul în care o altă rată de comision nu este stabilită altfel.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Arata comisioanele');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Comisioane');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titlu');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tip');
jr_define('_JRPORTAL_CRATE_VALUE', 'Valoare comision');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Cod moneda');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Arata unitati cazare');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nume unitate cazare');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adresa');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Prooprietatile de pe fond rosu nu au nici un comision asociat');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistici');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Comision');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Arata rezervarile');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'ID Unitate cazare');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Factura nr.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Total rezervare');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date arhivate');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descriere');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Puteți avea fișiere de limbă specifice tipului de proprietate setând descrierea în numele unui subdirector, de ex. "yachtbrokerage" și copiând un fișier de limbă în acel subfolder. Puteți apoi modifica fișierul de limbă pentru această proprietate tastați astfel încât camerele să devină, de exemplu, DVD-uri etc. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Nu puteți șterge această proprietate deoarece este singura proprietate la care aveți acces. Dacă doriți să o dezactivați, vă rugăm să utilizați caracteristica de publicare din bara de instrumente.');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Total cazare');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'nopti la');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'pe camera ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Total optiuni extra ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Pret ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Va rugm cititi si acceptati ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Mai jos aveti detaliile rezervarii.<br /> Pentru a face modificari, apasati pe butonul Modifica Rezervare. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Daca doriti sa modificati informatiile de mai sus, va rugam dati click aici');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modifica Rezervarea');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Va rugam introduceti cerintele speciale in casuta de mai jos.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Confirm ca informatiile de mai sus sunt corecte si sunt de acord cu ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'pe persoana pe noapte ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'din');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Precedent');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Urmator');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'Sfarsit');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Rezultate');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Acesta nu este un formular de rezervare. Prin acest formular puteti trimite un mesaj proprietarului unitatii de cazare.<br/>Va rugam introduceti mesajul pe care doriti sa-l trimiteti proprietarului unitatii ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'a lua legatura');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Cerere de informatii ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Mesajul dumneavoastra a fost trimis pe adresa de email a proprietarului unitatii de cazare. O copie a mesajului a fost trimisa si pe adresa dvs. de email. Veti primi raspuns in cel mai scurt timp posibil.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' in legatura cu ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Mesaj');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Please select your required accommodation from the list on the right');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Camere minime deja selectate');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Numărul minim de camere deja selectate în rezervare înainte de a putea fi oferit combo tarif / tip cameră. Vă permite să aveți tarife reduse atunci când sunt deja selectate mai mult de N camere. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Numărul maxim de camere deja selectate');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Numărul maxim de camere deja selectate în rezervare înainte de combo tarif / cameră nu mai este oferit. Vă permite să nu mai oferiți acest tip de cameră / combinație tarifară după ce au fost selectate N camere în formularul de rezervare. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Rețineți că suplimentele pentru o singură persoană setate aici nu vor fi utilizate dacă Suplimentele pentru o singură persoană sunt setate la Da în configurația generală. Setările de aici sunt o alternativă la a avea tarife forfetare Suplimentare pentru o singură persoană, nu o adăugare la plata rata SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponibil');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Unele rezervări');
jr_define('_JOMRES_AVLCAL_HALF', 'Jumătate rezervat');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Cel mai mult rezervat');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Complet rezervat');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Pe săptămână');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Pe zi');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per rezervare');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per persoană pe rezervare');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'De persoană pe zi');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'De persoană pe săptămână');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Pe zile (zile min)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Pe zile X camere selectate');
jr_define('_JOMRES_REGISTRYREBUILD', 'Reconstruiți registrul minicomponent și reconstruiți memoria cache');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "În mod normal, registrul pluginului Jomres este reconstruit automat ori de câte ori vizualizați managerul de pluginuri și adăugați sau eliminați un plugin, totuși este posibil să nu puteți utiliza aceste caracteristici dintr-un anumit motiv, prin urmare puteți utiliza această funcție pentru a reconstrui registru manual. Dacă aveți acces la funcția Plugin Manager și Upgrades, este puțin probabil să utilizați această funcție. Va trebui să reconstruiți registrul de pluginuri ori de câte ori adăugați o nouă mini-componentă și nu ați folosit Managerul de pluginuri să-l adăugați. ");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registrul reconstruit cu succes');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'A apărut o eroare la reconstruirea registrului de minicomponenți. Ar trebui să verificați jurnalul de erori Jomres pentru a vedea dacă există o înregistrare a ceea ce a declanșat eroarea.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Preț');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Nu ați făcut încă nicio rezervare!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Editați tipul de proprietate');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Selectați tipul de proprietate');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Întrebarea ta ...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limita listei de proprietăți');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Numărul de proprietăți de afișat pe o pagină după o căutare');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Funcție de căutare integrată');
jr_define("_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC", "Funcția de căutare integrată Jomres permite utilizatorilor să caute prin proprietățile Jomres în funcție de un set de funcții. Dacă ați utilizat deja funcțiile de căutare ale Jomres în Joomla, veți fi familiarizați cu aceste setări. <br / > Această caracteristică ne permite să oferim gestionarea căutării în cadrul Jomres pentru acei utilizatori care nu doresc să utilizeze module de căutare Joomla sau pentru alți utilizatori CMS care nu au CMS propriile module de căutare Jomres. <br/> Rețineți că, dacă alegeți să căutați ceva printr-un link (adică nu printr-un meniu derulant), atunci nu vor fi implementate alte opțiuni de căutare, doar elementul care corespunde cu linkul pe care ați făcut clic. <br/> Rețineți că în mod implicit, aspectul acestei căutări integrate nu este foarte frumos. Asta pentru că fișierul șablon care realizează aspectul trebuie să includă toate opțiunile posibile, dintre care unele sunt incompatibile. ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activați această caracteristică?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Dacă această caracteristică este activată, atunci orice apel către Jomres care afișează lista de proprietăți va însemna că sunt afișate și opțiunile de căutare.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Folosiți coloane');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Orice opțiune de căutare pe care ați definit-o ca tip de link (acolo unde este relevant) va fi afișată ca coloane (IE br pus la sfârșitul link-ului)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Căutare regiune după selectarea listei combinate');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Oferiți o listă de căutare pentru a filtra prin țări / regiuni / orașe. Dacă intenționați să utilizați această caracteristică, este mai bine să nu utilizați căutările de regiune / oraș de mai jos.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Căutare după numele proprietății');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Arată căutarea după introducerea numelui proprietății.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Arată ca listă derulantă?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Setați această opțiune la nu pentru a afișa lista ca legături');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Oraș / regiune');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Arată intrarea regiunii');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Arată ca listă derulantă?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Setați această opțiune la nu pentru a afișa lista ca legături');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Căutare după tipul de proprietate');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Arată căutarea după tipul de proprietate introdus');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Arată ca listă derulantă?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Setați această opțiune la nu pentru a afișa lista ca legături');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Căutare după tip de cameră');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Arată căutarea după tipul de cameră introdus');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Arată ca listă derulantă?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Setați această opțiune la nu pentru a afișa lista ca legături');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Caracteristici');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Arată căutarea după introducerea caracteristicii');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Arată ca listă derulantă?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Setați această opțiune la nu pentru a afișa lista ca imagini de tip tooltip și casete de selectare');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Căutare după descriere');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Arată căutarea după introducerea descrierii');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Căutare după disponibilitate');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Arată căutarea după introducerea disponibilității');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Căutare după intervale de preț');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Arată căutarea în funcție de intervalele de preț introduse');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Incremente de interval de preț');
jr_define("_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC", "Jomres va analiza toate valorile din tarife, apoi va elabora o serie de intervale de prețuri pe baza valorilor incrementale setate aici.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'În mod implicit, dacă o proprietate nu este selectată în Jomres va efectua o căutare. Dacă această căutare nu a fost declanșată de un modul de căutare atunci căutarea va produce rezultate aleatorii (în mod deliberat). Această opțiune vă permite să limitați numărul de returnări în acea căutare aleatorie. ');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron setări și jurnale de lucrări');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Informații despre jobul Pseudocron. Funcționalitatea pseudocron este necesară prin facturare și gestionarea comisioanelor.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Minicomponente cron instalate. Pentru a rula un job cron individual utilizați linkurile specificate mai jos. Rețineți că joburile cron nu produc nicio ieșire, deci nu veți vedea nicio informație pe pagină. În schimb, consultați jobul jurnalul de mai jos. ');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metodă');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Dacă nu aveți acces la joburile cron, setați acest lucru la Minicomponent, altfel creați un job cron și spuneți-i să ruleze <br /> <i> curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime("tmplcomponent").'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Afișare înregistrare în browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funcționează numai dacă metoda este setată la Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Jurnal activat');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Setați acest lucru la Da pentru ca jurnalul să fie activat. Rezultatele jurnalelor vor fi afișate mai jos.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'O mulțime de ieșiri de înregistrare');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Editarea șabloanelor');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Câmpuri personalizate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Aici puteți defini câmpuri personalizate simple care vor fi afișate în formularul de rezervare.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nume câmp (fără spații)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valoare implicită');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descriere');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obligatoriu');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Cantitate maximă');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Dacă cantitatea maximă este setată la mai mult de 1, atunci oaspeților li se va oferi un meniu derulant pentru a alege cantitatea de extras de care au nevoie.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Cote de impozitare');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Cod fiscal');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Descrierea ratei');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Nu puteți șterge această rată de impozitare.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Facturi');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Neplătit');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Plătit');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Anulat');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'În așteptare');
jr_define('_JRPORTAL_INVOICES_USER', 'Utilizator');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Scadent');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonament');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Total remarcabil');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Frecvență recurentă');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ziua recurentă a lunii');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Cod valutar');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Elementele rând');
jr_define("_JRPORTAL_INVOICES_LINEITEMS_NAME", "Nume");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Descriere');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Preț inițial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Cantitate inițială');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Reducere inițială');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Total inițial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Cod fiscal');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Descriere fiscală');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Cota de impozitare');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Anulați setările standard ale gateway-ului Jomres?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Arată facturile mele');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Cupoane de reducere');
jr_define("_JRPORTAL_COUPONS_DESC", "Codurile de reducere pot fi generate și transmise clienților ca stimulent pentru a face rezervări. Valabil de la și până la date se referă la datele în care se poate face o rezervare, nu la datele rezervării în sine.") ;
jr_define('_JRPORTAL_COUPONS_CODE', 'Cod cupon');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Valid de la');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Valabil pentru');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Suma de reducere');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Reducerea este un procent');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Doar cameră');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Dacă aveți un cod de cupon, vă rugăm să îl introduceți în casetă și să faceți clic pe linkul "Salvați cuponul" pentru a salva detaliile cuponului din rezervare.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Salvare cupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupon salvat la rezervare');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Număr cupon nu a fost găsit');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valoarea reducerii cuponului');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervare redusă. Cod cupon / valoare reducere / setări cupon:');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Alegeți limbile');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Show the language selection dropdown?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Dear');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Thank you for registering ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Your user name is : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Your password is : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Please log in to view your bookings ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon saved');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon deleted');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Username');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notification mobile number');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Lista de camere a formularului de rezervare arată accesul dezactivat');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Lista de camere pentru formularul de rezervare arată numărul maxim de persoane');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Vă rugăm să rețineți că prețurile camerelor enumerate sunt estimate și că prețul complet al rezervării nu va fi calculat până când nu ați adăugat o cameră sau camere la selecția dvs.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Pachete de abonament');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nume');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Descriere');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicat');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Suma completă');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Limită de proprietate');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abonare');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Utilizați funcționalitatea de gestionare a abonamentelor');
jr_define('_JOMRES_COM_NEWUSER', 'Creați un utilizator nou la rezervare');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Creați un cont de utilizator nou la rezervarea utilizatorului neînregistrat.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Faceți clic aici pentru a vă înregistra proprietatea');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Detalii noi utilizator');
jr_define('_JOMRES_LATLONG_DESC', 'Folosiți mouse-ul pentru a vă deplasa pe hartă și trageți indicatorul la locația proprietății dvs. pentru a seta latitudinea și longitudinea.');
jr_define('_JOMRES_CONTROLPANEL', 'Panou de control');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Afișare factură');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Afișare facturi');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Adaugă proprietatea mea pe acest site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Ne pare rău, dar ID-ul acel pachet nu este recunoscut.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Ne pare rău, sunteți deja abonat la un pachet gratuit, nu vă puteți abona din nou la acel pachet.');
jr_define("_JOMRES_COM_YOURBUSINESS", "Detaliile companiei dvs.");
jr_define("_JOMRES_COM_YOURBUSINESS_NAME", "numele companiei");
jr_define("_JOMRES_COM_YOURBUSINESS_VATNO", "număr TVA");
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Numărul clădirii');
jr_define('_JOMRES_INVOICE_NUMBER', 'Nr. factură');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Selectați datele pentru care doriți să aplicați rezervarea neagră. Când ați selectat datele corespunzătoare, faceți clic pe butonul "aplicați" pentru a verifica din nou disponibilitatea. <br/>
<br/>
Dacă proprietatea are una sau mai multe rezervări pentru perioada selectată, atunci nu veți putea să o rezervați până când celelalte rezervări / rezervări negre nu vor fi anulate / rezervate. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Ne pare rău, nu puteți rezerva această proprietate în negru pentru acele date.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Puteți rezerva această proprietate pentru acele date.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Proprietatea dvs. este configurată să taxeze pe persoană pe noapte, dar nu aveți niciun tip de invitat creat sau publicat, vă rugăm să creați și să publicați unul sau mai multe tipuri de oaspeți.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Nu aveți încă niciun tarif configurat, nu veți putea face rezervări pentru proprietatea dvs.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Mod editare etichete activat');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Mod editare etichete dezactivat');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Încărcați depozite variabile?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Depozitele variabile vă permit să definiți dacă doriți să percepeți suma totală dacă data sosirii rezervării este în termen de N zile de la "azi". Setați această opțiune la Da pentru a activa funcția , și introduceți numărul de zile de mai jos, astfel încât, de exemplu, dacă ziua de sosire este în termen de 60 de zile, atunci suma depusă va fi suma totală, altfel suma se va baza pe opțiunile de depunere configurate mai sus. ');
jr_define("_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS", "Numărul de zile, în care suma totală va fi percepută ca depozit.");
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'E-mail de confirmare a fost trimis. Puteți închide această fereastră acum.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Marcați factura ca plătită');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Factură marcată ca plătită');
jr_define('_JOMRES_APIKEY_REMAKE', 'Creați o nouă cheie API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Este o instalare cu o singură proprietate?');
jr_define("_JOMRES_SINGLEPROPERTYINSTALLATION_DESC", "Dacă această opțiune este setată la Da, atunci vizualizarea frontend a Jomres către utilizatorii neautorizați este mult simplificată. Apelurile implicite către Jomres dintr-o opțiune de meniu, în loc să primească o listă de proprietăți, ia doar oaspetele la formularul de rezervare pentru prima proprietate din sistem. De asemenea, administratorii de proprietăți nu vor vedea butonul de previzualizare a detaliilor proprietății sau butonul Adăugați o proprietate nouă. Ideal dacă doriți doar să listați o proprietate și să faceți rezervări pentru aceasta. <br /> ");
jr_define("_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT", "Plata soldului");
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Notă, utilizați modul de editare cu modul de editare global activat. Este bine dacă înțelegeți ce înseamnă modul de editare globală, totuși, dacă nu sunteți, vă puteți provoca probleme. Dacă nu sunteți sigur dacă ar trebui să utilizați Jomres în acest mod, consultați <a href = "https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank"> pagina manualului modului de editare </a> pentru mai multe informații despre acest subiect. ');
jr_define('_JOMRES_SUPPORTKEY', 'Cheie de asistență');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Numărul cheii dvs. de licență de asistență (cunoscut și ca numărul dvs. de licență). Veți avea nevoie de o licență actualizată pentru a putea descărca pluginuri pentru Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Reducere personală');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limitați înregistrarea proprietății la o singură țară?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Vă puteți asigura că înregistrările de proprietăți sunt limitate la o singură țară setând această opțiune la Da și setând țara în următoarea opțiune.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Proprietățile sunt situate în această țară:');
jr_define('_JOMRES_JQUERYTHEME', 'Tema Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Alegeți o temă jquery de utilizat pentru filele cu detalii despre proprietate.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Ne pare rău, dar acea proprietate nu este disponibilă în prezent.');
jr_define('_JOMRES_REVIEWS', 'Recenzii');
jr_define('_JOMRES_REVIEWS_TITLE', 'Titlul recenziei');
jr_define('_JOMRES_REVIEWS_DATE', 'postat pe');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Nu există încă recenzii pentru această proprietate.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Doriți să fiți primul care recenzează această proprietate?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Sunt de acord cu această recenzie');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Nu sunt de acord cu această recenzie');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Rating mediu:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Total voturi:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Adaugă o nouă recenzie.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Trebuie să fiți conectat pentru a posta o recenzie.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Spuneți-ne ce părere aveți despre această proprietate:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Acest examinator ne-a spus:');
jr_define('_JOMRES_REVIEWS_PROS', 'Pro:');
jr_define('_JOMRES_REVIEWS_CONS', 'Contra:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Trimis la:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Ați examinat deja această proprietate, nu puteți posta o altă recenzie despre aceasta.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ne pare rău, dar nu aveți permisiunea de a posta recenzii pe acest site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Afișează recenziile');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'clienții sunt de acord cu această recenzie.');
jr_define("_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW", "oaspeții nu sunt de acord cu această recenzie.");
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'invitatul este de acord cu această recenzie.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'invitatul nu este de acord cu această recenzie.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Vă mulțumim că ați împărtășit opinia dvs. despre această recenzie.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Mulțumesc, dar v-ați împărtășit deja părerea dvs. despre această recenzie.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Vă rugăm să vă asigurați că toate câmpurile au fost completate.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Vă rugăm să rezumați recenzia introducând un titlu');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Vă rugăm să introduceți o recenzie mai completă în caseta de descriere');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Vă rugăm să introduceți părțile bune ale experienței dvs. de a fi oaspete la această proprietate');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Vă rugăm să introduceți orice gânduri negative pe care le-ați putea avea despre experiența dvs.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Vă rugăm să evaluați hostpitalitatea pe care ați primit-o de la personal');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Vă rugăm să evaluați opinia dvs. despre localizarea proprietății');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Vă rugăm să furnizați opinia dvs. despre curățenia proprietății');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Vă rugăm să evaluați unitatea de cazare. A fost confortabil sau discordant');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Vă rugăm să furnizați părerea dvs. dacă a fost raport calitate / preț');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Vă rugăm să evaluați serviciile');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Rezumat revizuire');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Experiența dvs. în detaliu');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Vă mulțumim că ați trimis recenzia dvs.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Vă mulțumim că ați trimis recenzia dvs. Acesta va fi publicat în curând de unul dintre moderatorii noștri care lucrează din greu.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Folosiți funcționalitatea de revizuire Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publică automat recenzii?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Dacă setați acest lucru la Nu, va trebui să publicați manual recenziile');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Setați recenziile în modul de testare?');
jr_define("_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC", "În mod normal, administratorii de proprietăți nu pot revizui proprietățile. Cu modul de testare activat, pot. În mod natural, acest lucru nu este ideal într-un mediu de producție.");
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Aceasta este o listă cu toate proprietățile. Pentru a vedea recenziile unei proprietăți, faceți clic pe acea proprietate. De acolo veți putea publica sau șterge o recenzie.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Numărul de recenzii nepublicate');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Numărul total de recenzii');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicare / Anularea recenziei');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Șterge recenzia');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Raportare revizuire');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revizuirea rapoartelor');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Vă rugăm să introduceți raportul');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Vedeți ceva în această recenzie care este obiecțional sau inexact? Raportați-l și îl vom analiza pentru dvs.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Raport creat de');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Rapoartele sunt postate de utilizatori care pot să nu fie de acord cu conținutul unei recenzii. Singurul mod de a elimina un raport este să ștergeți recenzia.');
jr_define('_JOMRES_REVIEWS_RATING', 'Evaluări (1 = slab 10 = excelent)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Ospitalitate');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Locație');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Curățenie');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Cazare');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Raport calitate-preț');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Servicii');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Revizuit de:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Ascunde recenziile');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Afișați formularul de rezervare în pagina de detalii a proprietății?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Setați acest lucru pentru Da pentru a afișa formularul de rezervare în pagina cu detalii despre proprietate. Dacă îl setați pe Nu, atunci va apărea un link în pagina de detalii a proprietății în loc să indice formularul de rezervare.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Prețurile sunt stabilite cu taxe incluse?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prețurile setate sunt incluse? Dacă prețurile dvs. includ taxe, selectați Da. Dacă nu sunt, selectați Nu');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Taxe suplimentare:');
jr_define("_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK", "Câmpurile din ziua săptămânii vă permit să setați o rată pentru o anumită zi a săptămânii, după ce faceți clic pe butonul zilei săptămânii, toate zilele săptămânii vor fi setate la acea rată.");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Selectorul de date și introducerea tarifului vă permit să setați un preț pentru un anumit interval de date. Alegeți o dată de începere și de sfârșit, introduceți un preț și faceți clic pe butonul Set Rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rate');
jr_define('_JOMRES_PARTNERS_TITLE', 'Parteneri');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Cameră');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'guest (s).');
jr_define("_JOMRES_ROOMALLOCATIONS_INFORMATION", "Așa ne-am atribuit numerele de oaspeți camerelor lor. Dacă doriți să modificați această alocare, va trebui să contactați hotelul după efectuarea rezervării. Se pot aplica taxe suplimentare dacă vă schimbați sarcinile. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Rețineți că proprietatea dvs. nu este încă publicată, doar dvs. puteți vedea proprietatea, vizitatorii site-ului nu o vor vedea");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordinea implicită a rezultatelor căutării');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Schimbați această opțiune pentru a modifica ordinea în care rezultatele căutării sunt prezentate în mod implicit.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Afișează lista derulantă a rezultatelor căutării');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Stil listă camere');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'În formularul de rezervare, folosind stilul listei de camere \"clasice\", le oferi oaspeților camere individuale. Cu vizualizarea tipului de cameră, oaspeții aleg numărul de camere de tip X (de exemplu, 2 x duble) ');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipuri de cameră');
jr_define("_JOMRES_COM_CALENDAR_STARTDAY", "Ziua de începere a săptămânii calendaristice, duminică sau luni");
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Numai oaspeții proprietății pot evalua?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Setați acest lucru la Da dacă doriți să restrângeți recenziile numai acelor utilizatori care au fost deja oaspeți în această proprietate.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per cameră');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Oaspeți pe cameră:');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Oaspeți pe rezervare:');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Număr de camere');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'ianuarie');
jr_define("_JRPORTAL_MONTHS_LONG_1", "februarie");
jr_define('_JRPORTAL_MONTHS_LONG_2', 'March');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Mai');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'June');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'July');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'septembrie');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'octombrie');
jr_define("_JRPORTAL_MONTHS_LONG_10", "noiembrie");
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Decembrie');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Setați acest lucru la Da pentru a reduce numărul de opțiuni disponibile administratorilor de proprietăți în secțiunea General Configuration. Acest lucru este util dacă nu doriți ca administratorii de proprietăți să se joace cu prea multe setări, în schimb puteți edita jomres_config .php pentru a defini opțiunile de proprietate implicite. ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Vă rugăm să selectați o opțiune pentru rezervarea dvs.');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Dacă această opțiune este setată la Da, atunci managerii vor putea vedea editorul html furnizat împreună cu CMS și vor introduce HTML în descriere. Acesta este un risc potențial de securitate, deoarece există un posibilitatea de a introduce HTML nedorit sau Javascript. În plus, dacă introduc HTML slab formatat, designul paginii ar putea fi compromis. Este mai bine să lăsați această opțiune setată la Nu ori de câte ori este posibil. </p> <p> Dacă toți administratorii sunt utilizatori de încredere (de ex. dvs.), îl puteți lăsa setat la Da și modificați diferitele etichete HTML pe care li se permite să le introducă în fila Filtrare intrări din Configurarea site-ului. </p> <p> Dacă, pe de altă parte, Folosiți Jomres ca portal unde invitați utilizatorii să adauge și să își administreze propriile proprietăți, atunci aceasta nu este configurația ideală. În schimb, ar trebui să lăsați această opțiune setată la Nu. poate utiliza pentru a introduce formatarea de bază care ar trebui să fie suficient pentru majoritatea utilizatorilor. </p> ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Vizualizare ecran complet');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Vizualizare normală');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Discount partener');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Căutare utilizator');
jr_define("_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS", "Introduceți câteva caractere pentru a căuta un utilizator. <br/> Când selectați un utilizator, le veți adăuga automat ca partener și veți fi condus la pagina următoare unde puteți atribui proprietăți și reduceri către utilizator. ");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Parteneri existenți');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Alegeți un partener care să fie dus la pagina de administrare a partenerului.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partener:');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Căutați o proprietate');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Introduceți câteva caractere din numele proprietății și selectați o proprietate. <br/> Când selectați proprietatea, o veți adăuga în portofoliul partenerului, totuși nu vor beneficia încă de reduceri, veți avea nevoie de să-i stabiliți pe voi înșivă. ");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Proprietăți actuale');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Faceți clic pe o proprietate pentru a edita setările de reducere ale partenerului pentru acea proprietate.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Acest cont a fost suspendat, momentan nu este posibil să vă administrați proprietatea (proprietățile) folosind acest cont.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Cont de manager suspendat');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Cont de manager restabilit');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Vă rugăm să rețineți că contul de administrator de proprietate a fost suspendat. Nu veți putea efectua nicio funcție de administrare a proprietății până când contul nu va fi restaurat.');
jr_define("_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL", "Vă rugăm să rețineți că contul dvs. de administrator de proprietate este acum activ. Puteți continua să efectuați orice funcții de administrare a proprietății. Vă rugăm să vă conectați la contul dvs. și să vă asigurați că proprietățile adecvate au fost publicate. Vă mulțumim.");
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Eliminați favoritul');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arhivă date rezervare');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Arhiva de date de rezervare este o stocare brută de informații despre rezervare capturate după ce se face clic pe butonul de confirmare a rezervării. Plasați cursorul peste o dată pentru a vedea stocarea de date brute. Informațiile sunt stocate în tabelul XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Editați contul');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Pentru a adăuga un utilizator ca administrator de proprietate, mai întâi introduceți primele caractere ale numelui de utilizator în câmpul de mai sus. Când a fost găsit utilizatorul corect, faceți clic pe numele respectiv pentru al selecta, apoi alegeți ce proprietate ( s) ar trebui să fie un manager al. Utilizatorul <em> trebuie să fie deja un utilizator în CMS </em> ');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Managerii existenți');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Afișează căutarea după numărul de clienți drop-down');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stele');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Arată meniul derulant Stele');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_SEARCH_STARS', 'Număr de stele');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Număr de proprietăți');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Încarcă biblioteca Jomres jQuery?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Puteți seta acest lucru la NU dacă aveți un șablon care utilizează jQuery. Acest lucru POATE rezolva problemele de conflict jQuery pe unele șabloane, dar nu pe toate.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Activarea acestei opțiuni vă permite să vedeți comutatorul de limbă în ecranul Fullscreen din frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Miniaturile sunt create automat pentru imaginile încărcate.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Miniaturi mici lățime maximă (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Miniaturi mici sunt utilizate în lista de proprietăți, în timp ce miniaturi de dimensiuni medii sunt utilizate în antetul proprietății.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Miniaturi mici înălțimea maximă (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Miniatură medie lățime maximă (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Miniatură medie înălțime maximă (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Traduceri de etichete');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Folosiți funcționalitatea comisionului?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Setați acest lucru la Da pentru a afișa facturile de comision manager care au fost ridicate.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Rezervările managerului creează facturi de comision?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Dacă un manager face o rezervare, creează și un element rând de factură de comision?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Suspendarea automată a managerilor în care facturile sunt marcate ca În așteptare?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Suspensie automată a pragului');
jr_define("_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC", "Această limită este numărul de zile în care un manager trebuie să plătească o factură înainte ca acestea să fie suspendate și proprietățile lor nepublicate.");
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Contextul limbii');
jr_define("_JOMRES_COM_LANGUAGE_CONTEXT_DESC", "Utilizați această opțiune pentru a schimba contextul lingvistic al site-ului. Această caracteristică îi permite lui Jomres să utilizeze etichete adecvate pentru modul în care utilizați Jomres, așa că, dacă vă concentrați pe un brokeraj de iahturi, atunci schimbarea contextului va permite Jomres să prezinte etichete adecvate iahturilor. De exemplu, dacă setați contextul la „Yacht Brokerage”, atunci Jomres va găsi mai întâi limba curentă, apoi va căuta în baza de date de text personalizat șirurile salvate cu un context de limbă „yachtbrokerage”. Dacă există șiruri personalizate pentru limba și contextul curent, atunci acestea vor fi folosite. Dacă nu, atunci Jomres va reveni la definițiile de limbă utilizate de fișierele de limbă Core.");
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Setați această opțiune la Da dacă doriți să utilizați opțiunile avansate de configurare a site-ului. Dacă abia începeți cu Jomres, vă recomandăm să lăsați acest lucru la Nu pentru moment, deoarece instalarea implicită este suficient pentru a începe, în schimb, ar trebui să adăugați Jomres la meniul principal și să vă conectați la frontend ca "administrator" și să începeți să vă configurați proprietățile. Vă rugăm să rețineți că multe dintre opțiunile avansate ar putea să nu fie disponibile dacă nu nu aveți instalate plugin-urile corespunzătoare. Utilizatorii sistemului gratuit de bază nu vor putea profita din plin de caracteristicile pe care le activează. ');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Încarcă biblioteca UI Jomres jQuery?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Preț (cel mai mare primul)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Preț (cel mai mic primul)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Rezumatul prețului și estimările ar trebui să aibă prețul pe noapte / pe săptămână / pe lună?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Pe noapte');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Pe săptămână');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Pe lună');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per persoană');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'săptămâni la');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'luna (lunile) la');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Cum ar trebui să funcționeze opțiunea de căutare pentru numerele de persoane?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afectează toate modulele de căutare. Când se utilizează funcția de căutare a numărului de oaspeți, funcția de căutare trebuie să caute proprietăți ale căror tarife vor susține numerele de oaspeți în sus și egală cu numărul ales, exact egal cu numărul ales sau numărul ales și mai mare? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Vă rugăm să așteptați, comanda dvs. este în curs de procesare și veți fi redirecționat către site-ul Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Dacă nu sunteți redirecționat automat către Paypal în decurs de 5 secunde ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Faceți clic aici');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezervare valabilă de la');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervare valabilă la');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Numele oaspeților');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Codurile de reducere pot fi generate și transmise clienților ca stimulent pentru a face rezervări. <br/>
Valabil de la și până la date se referă la datele în care se poate face o rezervare, în timp ce rezervarea valabilă de la / până la date se referă la datele pe care rezervarea trebuie să le acopere pentru ca cuponul să fie valid. Dacă o rezervare se încadrează în afara perioadei respective, atunci se vor aplica tarife normale pentru zilele din afara perioadei respective. <br/>
Dacă doriți ca rezervarea să fie disponibilă pentru un anumit oaspete, alegeți numele acelui oaspete în meniul derulant pentru a limita cuponul numai la acel invitat. ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Cu cuponul dvs., această rezervare a fost redusă de la');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'la');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Setați acest lucru la Nu pentru a dezactiva încărcarea atât a fișierelor Javery UI javascript, cât și a fișierelor CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Încărcați biblioteca Jomres jQuery UI CSS?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Setați această opțiune la Nu pentru a dezactiva numai fișierul CSI jquery UI.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Taxă totală totală');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Proprietate nepublicată');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Utilizați funcționalitatea de conversie');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Utilizați funcționalitatea de conversie online Jomres. Aceasta va oferi o listă de conversie pentru utilizatorii frontend, unde vor putea alege moneda în care doresc să vadă prețurile oferite. Prețul de ieșire este ajustat pentru a afișa conversia preț urmat de prețul \"nativ\" al proprietății între paranteze. ");
jr_define("_JOMRES_CONVERSION_DISCLAIMER", "Am depus toate eforturile pentru a obține cele mai exacte și la timp rate de schimb pe care le putem. Funcția noastră de conversie valutară online este un serviciu furnizat doar în scop informativ și nu este destinat să furnizeze cifre exacte. În consecință, nu garantăm acuratețea cursurilor de schimb. Folosind această caracteristică, se consideră că ați fost de acord că orice dependență sau utilizare a funcției de conversie a ratei va fi în întregime pe propria răspundere. ");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Conversie valutară / coduri valutare');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection IP Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Pentru a seta automat meniul derulant al codului valutar Jomres poate utiliza un serviciu gratuit numit IPinfoDB pentru a detecta țara vizitatorului, totuși trebuie să vă înregistrați pentru o cheie API la <a href = "https://www.ipinfodb.com/login" target="_blank"> IPinfoDB </a> mai întâi. ');
jr_define('_JOMRES_DEBUGGING_TAB', 'Depanare');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Cazare fără taxe');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Cazare inc taxă');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Taxă camere:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Deschideți formularul de rezervare');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Înapoi la detaliile proprietății');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Selectat automat?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Sold (după depunere plătită)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrează resursele pe baza caracteristicilor lor.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ultima rezervare');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'second');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'oră');
jr_define('_JOMRES_DATEPERIOD_DAY', 'zi');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'săptămână');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'lună');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'an');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decade');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'în urmă');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'de acum');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezervările sunt pentru zile întregi?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'În mod implicit, rezervările de sistem resurse până noaptea, deci o rezervare de la primul ianuarie' .date('Y', strtotime('anul viitor')). 'până la 2 ianuarie' .date("Y", strtotime("anul viitor")). "acoperă doar o noapte. Dacă setați această opțiune la Da, totuși, atunci rezervarea va acoperi zile întregi, deci o rezervare în acele zile ar acoperi ambele zile, iar clientul va fi facturat pentru două zile. ");
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Pe zi');
jr_define("_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY", "De persoană pe zi");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'zile la');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Data returnării este incorectă');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervarea este prea scurtă. Trebuie să existe cel puțin multe zile între datele de preluare și returnare:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Interval minim de preluare / returnare');
jr_define("_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY", "Intervalul minim din formularul de rezervare între datele de preluare și returnare. Un interval de 1 înseamnă că datele de preluare și returnare pot fi setate în aceeași zi, totuși acest lucru depinde în continuare de minimul interval calculat automat de motorul de rezervare, deoarece verifică tarifele valabile pentru perioada de rezervare. ");
jr_define("_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY", "Rezumatul prețului și estimările ar trebui să aibă un preț zilnic / săptămânal / lunar?");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Pe zi');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Zile înainte de data ridicării');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Numărul minim de zile care trebuie să treacă, de la "azi", înainte de data ridicării.');
jr_define("_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY", "Setați acest lucru la da dacă doriți să limitați rezervările în avans (utilizați câmpul următor pentru a seta limita în termeni de zile). Dacă setați acest lucru la da, atunci dacă utilizatorul încearcă să rezerve mai mult de n cu zile în avans, apoi data preluării lor va fi restabilită la data de astăzi ");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Arată introducerea datei de returnare?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Setați acest lucru la Nu dacă nu doriți să afișați caseta de introducere a datei de returnare. Utilizați acest lucru numai dacă știți ce faceți, deoarece data de returnare în rezervări va fi întotdeauna setată la ziua respectivă după data ridicării. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Dacă setați acest lucru la Da, atunci rezervările vor fi luate pentru o perioadă fixă. Dacă acest lucru este setat la Nu, atunci asigurați-vă că "ziua de preluare definită" nu este setată la Da (cu excepția cazului în care specificați în mod specific) doriți să forțați oamenii să ridice într-o anumită zi a săptămânii) altfel nu veți primi multe linkuri în calendarul de disponibilitate. ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Ziua de predare predefinită');
jr_define("_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY", "Numai pentru site-urile care oferă rezervări pe perioadă fixă. Alegeți ziua săptămânii pe care trebuie să le efectuați preluările.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Ziua de ridicare fixă');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Datele fixe de preluare se repetă:');
jr_define("_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY", "Când sunt selectate datele fixe de preluare, numărul de date care poate fi afișat în lista derulantă a datelor. Rețineți că lista de date nu va include nicio dată dacă o rezervare nu este posibilă din cauza rezervărilor anterioare, și că lista va fi de două ori mai lungă decât numărul selectat, deoarece va avea un număr similar de date istorice (acolo unde este disponibil). ");
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'De persoană, pe zi');
jr_define("_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY", "Selectați Da dacă doriți să taxați pe persoană pe zi. Dacă nu, costurile vor fi calculate pe bază de resurse pe zi");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Depozitele variabile vă permit să definiți dacă doriți să percepeți suma totală dacă data de preluare a rezervării este în termen de N zile de la "astăzi". Setați această opțiune la Da pentru a activa caracteristica , și introduceți numărul de zile de mai jos, deci, de exemplu, dacă ziua de ridicare este în termen de 60 de zile, atunci suma depusă va fi suma totală, altfel suma se va baza pe opțiunile de depunere configurate mai sus. ');
jr_define("_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY", "Majoritatea companiilor vor recalcula prețurile resurselor pe baza numărului de resurse de un tip necesar care sunt disponibile la o dată dată. Acest lucru le permite să ofere reduceri la o resursă / tip de afacere care nu este ocupat în timpul o perioadă dată cu scopul de a atrage afaceri care altfel ar putea fi ratate. <br/> Activarea și configurarea acestui plugin vă permit să oferiți prețuri ajustabile în funcție de numărul de resurse de un tip selectat, care sunt disponibile în companie într-o zi dată. <br/> Pragul de zile definește numărul de zile în care trebuie să se încadreze data preluării înainte ca prețurile resurselor să fie ajustate de această caracteristică, apoi opțiunile procentuale vă permit să configurați procentul de resurse care poate fi disponibil înainte de aplicarea unei reduceri date Rețineți, însă, dacă sunt rezervate mai multe resurse, atunci nivelul actual de actualizare se va aplica tuturor resurselor și nu se va reduce pe măsură ce sunt selectate mai multe resurse. ");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Prag (numărul de zile între data ridicării și astăzi)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Preluare în așteptare');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Ridicat');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Revine azi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return returned');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Nu a preluat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Zile');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Marcați o rezervare ridicată.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marcați o rezervare returnată.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marcați o rezervare ridicată');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marcați o rezervare returnată');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost pe zi:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Număr de zile:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Înlocuiți totalul locurilor de cazare');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Salvare suprascriere');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Trimiteți prin e-mail utilizatorilor noștri detaliile de autentificare?');
jr_define("_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC", "Dacă opțiunea Creare utilizator nou este setată la Da, puteți seta această opțiune la Nu pentru a vă asigura că nu li se trimit prin e-mail detaliile de conectare odată ce utilizatorul a fost creat. Acest lucru ar putea fi util dacă sunteți automat adăugarea de noi utilizatori la o listă de corespondență, de exemplu, și nu doresc ca utilizatorii să se conecteze efectiv. ");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Afișează rezultatul impozitului în rezumatul totalului formularului de rezervare?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Împiedicați formularul de rezervare să afișeze câmpurile de prețuri fiscale în rezumatul totalurilor setând această opțiune la No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Limita de anulare');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Conectați, oaspeții înregistrați își pot anula rezervările. Aici puteți seta pragul, în zile, în care rezervarea nu poate fi anulată după un anumit număr de zile înainte de data sosirii.');
jr_define('_JOMRES_EDIT_PROFILE', 'Editare profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Relație tip proprietate');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Faceți clic pe o literă pentru a afișa toate companiile cu primul caracter. Odată ce aveți o listă de proprietăți, puteți atribui tarife de comision acelor proprietăți sau faceți clic pe pictograma lor editați pentru a vedea afacerea \' statistici. ');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Editați rata de impozitare');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Editare câmp personalizat');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Parola serverului de licență');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Nume utilizator server licență');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Dacă aveți un nume de utilizator și o parolă pe serverul de licențe, vă rugăm să le introduceți aici. Acest lucru vă va ajuta să accesați pluginurile la care aveți dreptul. Dacă ați introdus o cheie de asistență validă în câmpul de mai sus, atunci nu este necesar să furnizați aici numele de utilizator / parola. ');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Această versiune Jomres:');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Ultima versiune Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alertă: Există o nouă versiune a Jomres disponibilă, vă recomandăm să faceți upgrade cât mai curând posibil.');
jr_define("_JOMRES_PRODUCT_INFORMATION", 'Bine ați venit la Jomres. Sistemul de bază este gratuit, dar poate fi îmbunătățit prin instalarea pluginurilor. Pentru a accesa aceste pluginuri, veți avea nevoie de o licență de descărcare și de asistență. Dacă doriți să achiziționați un Jomres Starter , Licență Business sau Enterprise, <a href="https://www.jomres.net/prices" target="_blank"> vă rugăm să vizitați site-ul nostru </a> pentru informații despre cum puteți face upgrade. ');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Acest sistem este ideal pentru orice scenariu, fie că este un simplu formular de rezervare pentru o singură proprietate, până la un site care are mai mulți utilizatori, în mai multe limbi, cu mai multe proprietăți. Vă rugăm să consultați "Ajutor") secțiunea din meniu, inclusiv pagina "Noțiuni introductive" care vă va ghida în primii pași. ');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Proprietate activă');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Setări e-mail');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Setați această opțiune la Da pentru a utiliza aceste setări SMTP alternative. Un număr din ce în ce mai mare de gazde web pare să blocheze funcționalitatea de e-mail PHP, astfel încât să puteți alege să treceți peste setările de e-mail pe care Jomres le adoptă de la gazda dvs. CMS (de obicei Joomla) și utilizați aici setările la alegere. ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Gazdă alternativă');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Schimbați-l pe serverul dvs. de e-mail smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Port alternativ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Schimbați acest lucru în portul dvs. SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocol alternativ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "În funcție de setările serverului dvs. smtp, trebuie să lăsați acest spațiu necompletat sau introduceți ssl sau tls . Întrebați furnizorul dvs. SMTP dacă nu știți.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Utilizați autentificarea');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Dacă serverul dvs. SMTP solicită clienților să se autentifice, setați acest lucru la Da. Va fi folosit atunci numele de utilizator și parola.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Nume utilizator alternativ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Parolă alternativă');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Informații rapide');
jr_define('_JOMRES_MENU_SHOW', 'Show');
jr_define('_JOMRES_MENU_HIDE', 'Ascunde');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Implicit');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Oricine');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Înregistrat');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nimeni');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Control acces meniu');
jr_define("_JOMRES_ACCESS_CONTROL_DESC", "Această caracteristică vă permite să controlați cine va putea vedea un plugin în meniul principal. De obicei, opțiunile utilizatorului 00009 sunt vizibile de către / sau de către vizitatorii site-ului neînregistrați, 00010 opțiuni se referă în general la activități de tip recepție care sunt utilizate zilnic, întrucât 00011 opțiuni sunt utilizate pentru configurarea și configurarea unei proprietăți, dar sunt accesate mai rar.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepționist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Control acces complet');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Setați această opțiune la Da pentru a activa funcția de control al accesului complet, apoi vizitați opțiunea Control acces din Întreținerea sistemului pentru a configura controalele de acces.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Rețineți, totuși, aceste setări nu controlează scripturile de bază la care se conectează, deci, de exemplu, dacă setați <i> 00009user_option_03_search </i> la Manager, un utilizator care știe Jomres poate încă apelați j06000search.class.php introducând http://www.domain.com/index.php?option=com_jomres&task=search în bara de adrese a browserului lor. Acest lucru este intenționat, deoarece acest control acces meniu controlează pur și simplu ceea ce poate fi văzut în Meniul principal Jomres. Dacă aveți nevoie de controale mai stricte, setați opțiunea Configurare site -> Control acces complet la Da și reveniți la opțiunea Control acces meniu. ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Control acces complet');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Această caracteristică este destinată numai utilizatorilor avansați. Dacă nu știți la ce folosește și nu aveți un motiv specific pentru ao utiliza, reveniți la Configurarea site-ului și setați Accesul complet Opțiunea de control la nr. </strong> <br/>
Această caracteristică vă permite să controlați cine poate accesa ce minicomponente (cu unele excepții care sunt codate în sistem). Dacă nivelul de acces de lângă numele unui script este setat la Implicit, atunci cu opțiunea Control acces complet setat la Da <strong> oricine </strong> poate accesa scripturi la care nu ar trebui să poată accesa, prin urmare, dacă intenționați să utilizați acest lucru caracteristică TREBUIE să setați nivelul de control al accesului pentru <strong> fiecare </strong> minicomponentă Jomres listată aici. Dacă nu știți ce fac acești minicomponenți, vă recomandăm să nu utilizați deloc această funcție. <br/>
În nivelurile de acces Jomres urmează o piramidă, deci Super Managerii de proprietăți sunt mai mari decât Managerii. Pe scurt Super Manager> Manager> Recepționer> Înregistrat> Neînregistrat. Deci, dacă un utilizator înregistrat are acces la o minicomponentă, la fel au recepționisti, manageri și super manageri. <br/>
Rețineți că nu puteți controla minicomponenții zonei administratorului. Oricine din zona administratorului este considerat a fi un utilizator de încredere în sensul că nu ar trebui să i se blocheze accesul la niciun script (în special acesta).
");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Atenție! Aveți controlul accesului complet activat, cu toate acestea am numărat setările de control al accesului și le-am comparat cu numărul de minicomponenți care ar trebui controlați, iar cei doi nu se potrivesc, prin urmare este posibil să aveți unele scripturi care nu sunt controlate. Aceasta ar putea fi o problemă de securitate și sunteți îndemnat să rezolvați acest lucru imediat vizitând funcția Control acces și verificând dacă s-au aplicat nivelurile corespunzătoare. ');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Utilizatori cu drepturi de administrator la această proprietate');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Adresa ta de e-mail');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta descriere');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Adăugați proprietatea: Pasul 2 din 2');
jr_define('_JOMRES_CART_TITLE', 'Rezervările mele propuse');
jr_define('_JOMRES_CART_INFO', 'Rețineți, aceste rezervări nu au fost încă salvate. Dacă vă deconectați sau sesiunea expiră, acestea se vor pierde. Nu uitați să confirmați rezervările!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmați rezervarea (rezervările)');
jr_define('_JOMRES_CART_OR', 'sau');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Salvare pentru mai târziu');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Nu aveți încă rezervări salvate.');
jr_define('_JOMRES_CART_VIEWCART', 'View cart');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Subdirector fișier limbă');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Punct de start longitudinal implicit');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'În harta Google de pe pagina de editare a proprietății, înainte ca marcatorul să fie mutat, care ar trebui să fie punctele de pornire implicite pentru latitudine / longitudine?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'E-mailuri trimise de la ce adresă?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Lăsați această opțiune necompletată pentru a o dezactiva. Jomres va folosi adresa de e-mail a hotelului atunci când trimite e-mailuri către oaspeți, totuși serviciul dvs. de e-mail POATE să nu permită e-mailuri de la adrese arbitrare (adică numai acestea pot permite e-mailuri de la o adresă autorizată). Dacă acesta este cazul, puteți utiliza această intrare pentru a introduce o adresă care va fi văzută ca adresa FROM pentru toate e-mailurile de sistem. ");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Vizualizare listă');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Vizualizare foto');
jr_define('_JOMRES_COMPARE', 'Compare');
jr_define('_JOMRES_REMOVE', 'Remove');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Reveniți la rezultatele căutării');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Adaugă la favorite');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Șterge din favorite');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vezi lista ta scurtă');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Politica privind cookie-urile');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Folosim cookie-uri pentru a ajuta la menținerea site-ului nostru relevant și ușor de utilizat.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Citiți mai multe ...');
jr_define("_JOMRES_COOKIEPOLICY_4", "legislația UE impune ca toate site-urile web să specifice în mod clar dacă sunt utilizate cookie-urile și scopul lor.");
jr_define('_JOMRES_COOKIEPOLICY_5', "Motorul de căutare și rezervare a acestui site trebuie să poată aminti opțiunile pe care le-ați ales pentru a lucra cel mai bine. Pentru a face acest lucru, trebuie să stocheze informații care sunt asociate cu un fișier mic numit a cookie care vă identifică în mod unic browserul și, pentru ca noi să facem acest lucru, trebuie să fiți de acord că putem. Dacă nu acceptați această politică privind cookie-urile, veți fi extrem de limitat în ceea ce puteți face pe acest site. ");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Da, accept utilizarea cookie-urilor în acest mod.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Depozitul necesar este costul primei nopți?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prețurile sunt calculate pe noapte. Doriți ca depozitul să fie taxat pentru o noapte? Dacă da, puteți ignora următoarele opțiuni.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "Nu ați adăugat niciun element la favorite.");
jr_define('_JOMRES_SAFEMODE', 'Activați modul sigur?');
jr_define('_JOMRES_SAFEMODE_DESC', "Setați acest lucru la Da pentru a declanșa modul sigur. Acest lucru va dezactiva toate pluginurile, astfel încât Jomres să folosească doar funcționalitatea sa de bază.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Next');
jr_define('COMMON_CANCEL', 'Cancel');
jr_define('COMMON_SUBMIT', 'Submit');
jr_define('COMMON_SAVE', 'Save');
jr_define('COMMON_DELETE', 'Delete');
jr_define('COMMON_RETURN', 'Return');
jr_define('COMMON_CLOSE', 'Close');
jr_define('COMMON_BACK', 'Back');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Trimite');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha este utilizat pentru a se asigura că clientul care utilizează formulare web este o ființă umană și este utilizat pentru a împiedica administratorii de proprietăți să fie "spam" de roboți pe internet. Pentru a utiliza formularul Contactați-ne în Jomres, va trebui să vă înregistrați la <a href="http://www.google.com/recaptcha" target="_blank"> pagina de pornire Google reCaptcha </a> și să vă setați domeniul să primească cheile dvs. publice și private. Când ați primit aceste chei, vă rugăm să le introduceți mai jos. Serviciul reCapcha este un serviciu gratuit furnizat de Google. ');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Cheie publică');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Cheie privată');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Timeout fișier blocare');
jr_define("_JOMRES_BOOKINGFORM_LOCK_DESC", "Pentru a preveni pericolul rezervării de camere duble pentru oaspeți, Jomres folosește un fișier de blocare pentru a preveni adăugarea unei camere la lista de camere disponibile din formularul de rezervare dacă altcineva a adăugat deja camera la a lor pentru aceleași date . În mod implicit, această blocare va expira în 3600 de secunde sau o oră. Puteți schimba timpul necesar expirării acestei blocări modificând această cifră. ");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Activați șabloanele și funcționalitatea Bootstrap Jomres?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'View');
jr_define('BACKTOTOP', 'Înapoi sus');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Slab');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Filtrare intrare');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Nivel de filtrare de intrare');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Majoritatea datelor introduse în sistem sunt igienizate prin eliminarea mai întâi a oricăror etichete html, apoi folosirea funcționalității de filtrare a variabilelor PHP pentru a face datele sigure înainte de a fi introduse în baza de date. Este posibil să doriți să permiteți anumite intrări (de exemplu, intrările de text din pagina cu detalii despre proprietate) pentru a include HTML. Există două niveluri de filtrare pe care le puteți utiliza pentru a filtra această intrare, fie slab, fie puternic. Trebuie să utilizați setarea slab doar dacă utilizatorul datele sunt de încredere de dvs., de exemplu, alți administratori de sistem, altfel ar trebui să o lăsați setată la Putere. Când este setată la puternic (recomandat) puteți specifica în continuare ce etichete să permiteți editând următoarea setare Etichete permise de purificatorul HTML.") ;
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Etichete de intrare permise');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Puteți edita etichetele pe care purificatorul html le va permite prin sistemul său de filtrare. Implicit este 'p, b, puternic, a [href], i' (adică Paragraf, Bold, Strong, Link-uri și Italic) ). Pentru mai multe informații despre etichetele permise, citiți documentația purificatorului HTML la <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. În timp ce puteți modifica această setare, sunt sfătuiți să îl lăsați setat la valoarea implicită. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Intrări permise');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Puteți defini ce intrări de formular vor permite html modificând această opțiune, orice intrare adăugată la această listă va fi analizată prin purificator HTML în loc să fie dezbrăcate toate html. Implicit este: 'property_description property_checkin_times property_area_activ_ports_portities property_policies_disclaimers '. Adăugați mai multe intrări adăugându-le din nume, separate printr-un spațiu. ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Detalii proprietate în file?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Setați această opțiune pentru a afișa detaliile proprietății în file. Setați-o la nu pentru a le afișa fără file.');
jr_define('COMMON_PRINT', 'Print');
jr_define('COMMON_EDIT', 'Edit');
jr_define('COMMON_COPY', 'Copy');
jr_define("_JOMRES_BOOTSTRAPSWITCH_INFO", "Jomres este conceput pentru a funcționa atât în ​​cadrul Bootstrap 2, fie Bootstrap 3. După ce ați instalat o temă sau șablonul BS2 sau BS3, setați acest comutator pentru a alege care dintre aromele Bootstrap doriți să funcționeze Jomres cu.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Folosiți șabloanele Bootstrap Jomres în frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Iată câteva alternative pe care ați putea dori să le luați în considerare.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Detectarea automată a țării oaspeților?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistemul va încerca să detecteze automat țara oaspeților, dacă nu au rezervat înainte. Puteți seta această opțiune la Nu și puteți defini țara în care ați prefera să apară în formularul de rezervare, în următoarea opțiune. ");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Despre Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Noțiuni introductive');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Control acces');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'instrumente pentru dezvoltatori');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'limbi');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generare de venituri');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'structura site-ului');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Contul meu (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funcționalitate portal');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Manager plugin');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integrare');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'rapoarte / statistici');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Actualizări');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'metode de plată');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif implicit');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Acest lucru se aplică numai noilor tarife');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Ani de afișat');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definește numărul de ani de afișat la editarea unui tip tarifar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'facturi');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'detalii cont');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Deconectare');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'căutare');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'tablou de bord');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezervă');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'facturi');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'setări');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editează țara');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'ID țară');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Cod țară');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nume țară');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editează regiunea');
jr_define('_JOMRES_EDIT_REGION_ID', 'ID regiune');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Cod țară');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nume regiune');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Lista țărilor');
jr_define('_JOMRES_COM_LISTREGIONS', 'Listează regiunile');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definiții');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Această caracteristică vă permite să exportați traducerile care au fost construite folosind funcția Traducere limbă. Va construi un câmp text cu toate datele necesare pentru a construi un fișier de limbă nouă, tot ce trebuie să faceți este copierea și lipirea acestui rezultat într-un fișier de limbă nou pe care îl puteți pune pe un nou server bazat pe Jomres sau dacă doriți să contribuiți înapoi la comunitatea Jomres. ');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Traducere locale');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Traducere șiruri de fișiere lang');
jr_define('_JOMRES_COM_NOTAMANAGER', "Eroare, utilizatorul la care sunteți conectat nu este super manager în cadrul Jomres, nu veți putea utiliza această caracteristică până când nu veți utiliza funcția Administratori de proprietăți pentru a vă face AMBI manager și un super manager. Aceasta este o caracteristică de securitate. ");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Aspectul implicit al listei de proprietăți');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Rămâneți minimum');
jr_define('_JOMRES_NIGHTSFOR', 'nopți pentru');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Detalii agent');
jr_define('_JOMRES_AGENT_LISTINGS', "Listele agentului");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Aproba automat proprietăți noi');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Dacă setați această opțiune la Nu, va trebui să aprobați manual noi proprietăți. Până când o proprietate nu va fi aprobată nu poate fi publicată de un Manager / Super manager de proprietate.');
jr_define("_JOMRES_APPROVALS_MENU_NAME", "Aprobări");
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Această proprietate nu a fost încă aprobată. Odată ce a fost aprobată, o veți putea publica.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Ne pare rău, nu puteți publica această proprietate deoarece nu a fost încă aprobată.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'O nouă proprietate necesită aprobare');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'O proprietate a fost adăugată la sistem care necesită aprobarea dvs. Faceți clic pe link pentru a vizualiza proprietățile care așteaptă lista de aprobare:');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Proprietatea dvs. a fost aprobată');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Felicitări, proprietatea dvs. a fost aprobată, faceți clic pe următorul link pentru a vizualiza panoul de control al proprietății:");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Numele regiunilor sunt traductibile');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Cu excepția cazului în care rulați un server foarte rapid, vi se recomandă să lăsați acest set pe No. Datorită numărului mare de nume de regiuni, traducerea numelor de regiuni ocupă multă memorie, ceea ce vă poate încetini rezultatele căutării jos.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Invitat rezervat.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Ne pare rău, adresa de e-mail este deja utilizată. Dacă aceasta este adresa dvs. de e-mail, vă rugăm să vă asigurați că v-ați conectat înainte de a încerca să rezervați.');
jr_define('JOMRES_TAPTOCALL', 'Atingeți pentru a apela');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Revizuire nouă pentru');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'O nouă recenzie a fost lăsată pentru');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Raport nou');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'O revizuire a fost raportată pentru');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Total total (fără taxă):');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Total total (impozit inclus):');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Impozit total:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Tastați cele două cuvinte:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Introduceți ceea ce auziți:');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Descărcați piesa în format MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Mod vizual');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Mod audio');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Reîmprospătare');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Ne pare rău, a fost incorect. Încercați din nou.');
jr_define('JOMRES_GOOGLE_MAPS', 'Opțiuni harta Google');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Folosiți stratul meteo?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Folosiți stratul de tranzit?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Activați punctele de interes Gmap (inclusiv eventualii concurenți)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scanați acest cod în telefon pentru a vă orienta spre noi.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Numărul de TVA introdus nu pare a fi corect. Ar trebui să aveți așa ceva: BE805670816B01");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Număr TVA nevalid. Verificați validitatea numărului dvs. de TVA cu serviciul web de validare a numărului de TVA Europa (VIES)");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Felicitări. Am putut să vă validăm numărul de TVA.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Listează regulile fiscale');
jr_define('_JOMRES_TAX_RULE', 'Regula impozitului');
jr_define('_JOMRES_TAX_RULE_INFO', 'Regulile fiscale sunt utilizate pentru a stabili reguli fiscale diferite pentru diferite regiuni. Aceste reguli fiscale afectează persoana care face rezervarea, dacă este înregistrată, autentificată și și-a editat contul folosind pagina "Editați contul meu" Scopul acestor reguli este de a găzdui rezervatorii din acele zone care sunt scutite de TVA, este posibil să constatați că nu este nevoie să creați multe reguli, dacă este cazul. ');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import rate de impozitare');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Putem importa cote de impozitare pentru UE, dacă doriți. Rețineți, dacă utilizați această caracteristică, toate cotele de impozitare existente vor fi eliminate.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Editați regula fiscală');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Numărul de TVA pentru această proprietate.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Vă rugăm să introduceți numărul de TVA pentru această proprietate.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Număr TVA validat.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Număr TVA nevalidat.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Detaliile companiei introduse aici vor fi utilizate pe facturile de comision și abonamente.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Se pare că nu ați completat încă detaliile contului dvs. Pentru a afișa proprietatea pe site, trebuie să completați detaliile contului înainte de a putea merge mai departe.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Producție sau dezvoltare?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Dacă setați această opțiune la Dezvoltare, vom activa raportarea erorilor, în caz contrar, când setați la Producție, care va fi oprit. Dacă acesta este un server live, vă recomandăm să setați această opțiune la "producție".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Producție');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Dezvoltare');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Detalii despre resurse');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Detalii tarifare');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Numai');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Caracteristică resursă');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Nu se poate elimina această caracteristică a resursei, este atribuită unei resurse. Eliminați caracteristica din această resursă și reîncercați.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Adaugă imagini');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Imagini de cameră');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Imagine principală a proprietății');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Imagini Slideshow');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Șterge lista');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop fișiere aici');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Alegeți resursa pentru care doriți să încărcați imagini. Dacă puteți încărca imagini pentru resurse individuale (de ex. camere) vi se va oferi un al doilea meniu derulant pentru a alege resursa specifică.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Dacă încărcați mai multe imagini ca "Imagine principală a proprietății" acestea vor fi utilizate în Lista de proprietăți. Imaginile prezentării vor fi afișate în pagina cu detalii despre proprietate.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Vezi imaginea ta');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Șterge imaginea');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Încărcare imagine');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Pictograme tip camere');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Pictograme ale caracteristicilor proprietății');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Încărcați toate fișierele');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Azi');
jr_define('_JOMRES_DASHBOARD_YEAR', 'An');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Luna');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Săptămâna');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legendă');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'Rezervare nouă');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Stare depozit');
jr_define('_JOMRES_HSTATUS_GUEST', 'Statutul de invitat');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Starea rezervării');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Starea publicării');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Starea facturii');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Tipul facturii');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Aprobat');
jr_define("_JOMRES_HSTATUS_CURRENT", "Afaceri curente");
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Afișează rezervările pentru');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Afișează facturi pentru');
jr_define('_JOMRES_STATUS_ANY', 'Orice');
jr_define('_JOMRES_STATUS_PAID', 'Plătit');
jr_define('_JOMRES_STATUS_NOTPAID', 'Neplătit');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Verificat');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Anulat');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Publicat');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Nepublicat');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Oaspeți cu rezervări active');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Oaspeți cu rezervări anterioare');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Rezervări');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonamente');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Comisioane');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Toate afacerile mele');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Setați ca curent');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'proprietăți');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'invitați');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'rapoarte');
jr_define('_JOMRES_HLIST_GUESTS', 'Invitați');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Listează oaspeții');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Listează facturi');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Rezervare rapidă');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Data rezervării');
jr_define('_JOMRES_HTWO_WEEKS', 'Două săptămâni');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Această rezervare va fi anulată. Apăsați OK pentru a anula rezervarea.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Verificări de azi');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Checkouts Today');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Rezidenți actuali');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Locație bară de navigare');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Implicit (zona de conținut)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Navbar inversat (schimbare culoare)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Număr rezervare');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Afișează oaspeții pentru');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Versiune bootstrap');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres include propriile seturi de șabloane, câte unul pentru fiecare versiune acceptată de Bootstrap. Șabloanele / temele Joomla și Wordpress care se bazează pe Bootstrap vor oferi o versiune specifică a Bootstrap, deci trebuie să vă asigurați că opțiunea pe care o alegeți aici este compatibil cu șablonul / tema dvs. Dacă tema dvs. nu furnizează niciun cod Bootstrap setați această opțiune la Fără bootstrap în temă și apoi Jomres va include automat fișierele Bootstrap 3 pentru propria utilizare. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Afișează oaspeții pentru');
jr_define('_JOMRES_HFIXED_PERIODS', 'Perioade fixe');
jr_define('_JOMRES_HDEPOSITS', 'Depozite');
jr_define('_JOMRES_HBOOKING_FORM', 'Formular de rezervare');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Câmpuri obligatorii');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Configurare extinsă');
jr_define('SIMPLE_CONFIGURATION', 'Configurare simplă');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Caracteristici ale resurselor');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Tip de resursă');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Editare tip invitat');
jr_define('_JOMRES_HEDIT_COUPON', 'Editează cuponul');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Creați mai multe resurse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generați resurse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Câte resurse?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Tip resurse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Număr maxim de invitați pe resursă');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Ștergeți toate resursele existente?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Vă rugăm să rețineți, vizualizați în prezent zona de administrator cu Advanced Site Config setat pe No. Dacă doriți să vedeți mai multe opțiuni, setați Configurarea site-ului -> Diverse -> Advanced Site Config la Da.');
jr_define('DATATABLES_SINFO', 'Afișarea _START_ la _END_ din _TOTAL_ intrări');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Aprobare');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Respinge cererea de rezervare');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Aprobarea cererii de rezervare');
jr_define('_JOMRES_STATUS_APPROVED', 'Aprobat');
jr_define('_JOMRES_STATUS_REJECTED', 'Respins');
jr_define('_JOMRES_STATUS_INQUIRY', 'Anchetă');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezervările necesită aprobare sau confirmare disponibilitate?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Dacă este setat la da, atunci când se face o rezervare, aceasta nu va apărea în calendarele de disponibilitate (iar alți oaspeți pot rezerva în continuare acele zile și resurse) până când administratorul proprietății nu acceptă / confirmă disponibilitatea pentru rezervare . Odată confirmată, rezervarea este inserată ca provizorie (dacă nu anulează alte rezervări; ceilalți oaspeți nu mai pot rezerva aceleași date) și un e-mail este trimis clientului pentru a efectua plata. ');
jr_define('_JOMRES_ERROR', 'Eroare');
jr_define('_JOMRES_ERROR_MESSAGE', 'Ne pare rău! A apărut o eroare în timp ce încercați să procesați această funcție. A fost raportată pentru dvs. și o vom analiza.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Mesaj');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Fișier');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Linie');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Șabloane de e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Editați șablonul de e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Subiect de e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Text prin e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Tipul de e-mail');
jr_define("_JOMRES_EMAIL_TEMPLATES_NAME", "Nume e-mail");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Descriere e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Vă rugăm să consultați această pagină pentru ajutor la personalizarea e-mailurilor și o listă a rezultatelor disponibile: <a href = "https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank"> Help Templates Help </a> ');
jr_define("_JOMRES_ADMIN_NEWBOOKING_EMAILNAME", "Adresă de e-mail pentru rezervare nouă");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E-mail trimis administratorului site-ului la efectuarea unei noi rezervări, dacă gateway-ul Paypal global este activat');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Adresa de e-mail pentru rezervare nouă la hotel');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E-mail trimis proprietarului proprietății când se face o nouă rezervare');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Email de rezervare pentru oaspeți noi');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-mail trimis oaspeților când se face o nouă rezervare');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Scrisoare de confirmare pentru oaspeți');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Scrisoare tipărită sau e-mail care poate fi trimisă manual de către proprietarul proprietății pentru a confirma rezervarea');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Această rezervare poate fi aprobată. Toate resursele selectate sunt disponibile pentru datele selectate.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Această rezervare nu poate fi aprobată deoarece unele dintre resurse sunt deja rezervate pentru datele selectate. Va trebui să modificați mai întâi rezervarea.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Afișați linkul Powered by Jomres în subsolul Jomres.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Folosiți funcția Buget?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Doar site-uri bootstrappate! Funcția Buget este o caracteristică a listei de proprietăți pe care un oaspete o poate folosi pentru a le evidenția proprietățile care au un preț pe noapte sub o anumită cifră. Funcția are unele limitări în sensul că ar putea nu este adecvat pentru unele site-uri care utilizează mai multe valute diferite. Rețineți, dacă utilizați acest plugin și pluginul Featured Listings, clasa de împachetare a listelor recomandate se schimbă automat în panel-primary atunci când este afișată lista de proprietăți. ");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nume:');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'noapte');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nopți');
jr_define('_JOMRES_LIVE_SCROLLING', 'Folosiți derularea live / derulați în lista de proprietăți?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Mai');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Afisate de la _START_ la _END_ din _TOTAL_ inregistrari');
jr_define('DATATABLES_SINFOEMPTY', 'Afisate de la 0 la 0 din 0 inregistrari');
jr_define('DATATABLES_SINFOFILTERED', '(filtrate dintr-un total de _MAX_ inregistrari)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Afiseaza _MENU_ inregistrari pe pagina');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Proceseaza...');
jr_define('DATATABLES_SSEARCH', 'Cauta:');
jr_define('DATATABLES_SZERORECORDS', 'Nu am gasit nimic - ne pare rau');
jr_define('DATATABLES_SFIRST', 'Prima');
jr_define('DATATABLES_SLAST', 'Ultima');
jr_define('DATATABLES_SNEXT', 'Urmatoarea');
jr_define('DATATABLES_SPREVIOUS', 'Precedenta');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Change column');
jr_define('_BOOKING_ONREQUEST', 'Rezervare la cerere');
jr_define('_BOOKING_INSTANT', 'Rezervare instantanee');
jr_define('_JOMRES_COM_FONTAWESOME', 'Includeți setul de pictograme Awesome Font?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Setați acest lucru la Da dacă șablonul dvs. nu include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Solicitați rezervare');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dragă');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Selectează un site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'ID site');
jr_define('_JOMRES_IS_EU_COUNTRY', 'Țara UE?');
jr_define('_JOMRES_HLASTCHANGED', 'Ultima modificare');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E-mail de anulare rezervare hotel');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E-mail trimis proprietarului proprietății când o nouă rezervare este anulată');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E-mail de anulare a rezervării oaspeților');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E-mail trimis oaspeților când o nouă rezervare este anulată');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Trimite e-mail de testare');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Testare e-mail');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Acesta este un e-mail de testare din sistemul dvs. de rezervare.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testare e-mail trimisă cu succes');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'E-mailul de testare nu a fost trimis');
jr_define('_INVOICE_TRANSACTIONS', 'Tranzacții');
jr_define('_OPENEXCHANGE_API', 'cheie API Open Rate Rate');
jr_define('_OPENEXCHANGE_API_DESC', 'Pentru a converti prețurile între servicii veți avea nevoie de o cheie API Open Rate Rate. TREBUIE să aveți o cheie API pentru a afișa corect prețurile în Jomres, cu toate acestea puteți <a href="https://openexchangerates.org/signup/free" target="_blank"> înregistrați-vă pentru o cheie gratuită </a> (actualizări orare, 1000 de cereri / lună - fără HTTPS, asistență prin e-mail sau funcții avansate). Jomres descarcă ratele de schimb o dată pe zi, atât timp cât folosiți cheia doar pe o mână de site-uri, este puțin probabil să depășiți aceste limite. Înainte de Jomres 8.3 am folosit o funcție Yahoo mai veche, nedocumentată, totuși am descoperit că utilizarea acestei funcții este în contradicție cu Termenii și condițiile Yahoo Condiții. Prin urmare, trebuie să presupunem că funcția poate dispărea la un moment dat în viitor, de unde schimbarea utilizării cursurilor de schimb deschise. ');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Dacă încărcați mai multe imagini pentru extra opționale individuale, va fi utilizată doar prima imagine.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Plătește acum');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Această factură este acum scadentă. Faceți clic pe buton pentru a selecta metoda de plată.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Iată o listă cu câteva dintre lucrurile extraordinare pe care le puteți achiziționa în timp ce faceți o rezervare la această proprietate.");
jr_define("GATEWAYS_INSTRUCTIONS", "Pe această pagină puteți configura orice gateway-uri instalate. Aceste opțiuni vă permit să efectuați plăți pentru orice factură de comisie sau abonament. Setările frontendului pot fi suprascrise doar de Paypal, toate celelalte gateway-uri vor trebui configurate prin intermediul Configurarea proprietății -> fila Gateway-uri, totuși, dacă un gateway apare în această listă, atunci ar trebui să fie capabil să proceseze atât plățile pentru depozitele rezervării, cât și plățile facturilor. ");
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Arată în pagina cu detalii despre proprietate?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Setări pagină Detalii proprietate');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Managementul proprietății în Jomres se face numai din panoul frontal al site-ului. Pe această pagină veți putea lista toate proprietățile din sistem, astfel încât să le puteți atribui tarife de comision și să le aprobați / să le aprobați (dacă acestea sunt funcțiile sunt activate). Pentru a crea o proprietate nouă, a le edita pe cele existente, a gestiona rezervările sau orice alte sarcini legate de proprietate / rezervări, va trebui să vă conectați la frontend-ul site-ului și să accesați pagina implicită Jomres. Acolo veți vedea Jomres frontend cpanel. ');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Pictogramele caracteristicilor camerei');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Categorii de caracteristici ale proprietății');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Editați categoria de caracteristici a proprietății');
jr_define('_JOMRES_HCATEGORY', 'Categorie');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Arată caracteristicile proprietății separate în categorii?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Setați acest lucru la YES pentru a separa caracteristicile proprietății în categorii. Această opțiune afectează numai caracteristicile proprietății afișate în pagina de detalii a proprietății. Toate celelalte pagini le vor afișa fără a le împărți în categorii.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Anulați plata');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Cheia dvs. de descărcare și asistență este validă, veți putea descărca pluginuri prin intermediul managerului de pluginuri.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Cheia dvs. de descărcare și asistență NU este validă, NU veți putea descărca pluginuri prin intermediul managerului de pluginuri.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Subtip');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Nu ați stabilit încă subtipul proprietății dvs. Acesta este locul unde îl definiți ca o vilă cu 5 dormitoare sau o căsuță cu 4 dormitoare și îi ajută pe oaspeții care caută să își perfecționeze căutările.") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Dă proprietății tale un subtip');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Șabloane de e-mail');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Setări de contact');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'De aici puteți suprascrie toate detaliile de contact ale proprietăților (e-mail, telefon, fax), astfel încât toate comunicările cu oaspeții să vă fie trimise și nu proprietarilor proprietății.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Anulați detaliile de contact ale listărilor?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Dacă această opțiune este setată la Da, atunci adresele de e-mail și numerele de telefon ale proprietății vor fi înlocuite cu cele setate în această filă. Acest lucru obligă toate comunicările să fie trimise la adresa dvs. de e-mail nominalizată, asigurându-vă că oaspetele și proprietatea proprietarul nu poate ocoli motorul de rezervare și comisioanele care vor rezulta. De asemenea, înseamnă că ori de câte ori este modificată descrierea unei proprietăți, proprietatea va fi setată la Neaprobat (dacă este activată funcția de aprobare) și va trebui să verificați manual descrierea să se asigure că managerii nu au introdus detalii despre telefon sau e-mail în câmpurile de text înainte de a le aproba din nou. ");
jr_define("_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Modificările aduse detaliilor listării necesită verificarea administratorului site-ului. Dacă salvați detalii noi, înregistrarea dvs. va fi nepublicată și va fi în așteptarea aprobării administratorului site-ului înainte de a fi din nou vizibilă pentru vizitatorii site-ului. Nu veți putea primi online rezervări în timp ce înregistrarea dvs. este nepublicată și în așteptarea aprobării. ");
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Revizuirea cererii de rezervare');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirmați cererea de rezervare');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Modificare cerere rezervare');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Marcați factura ca fiind în așteptare');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Factură marcată ca fiind în așteptare');
jr_define('_JOMRES_TRACKING_ENABLE', 'Trimiteți date de urmărire anonime?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Selectați Da pentru a trimite date de urmărire anonime către Jomres.net pentru a ne ajuta să înțelegem mai bine cum utilizați sistemul.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Vă rugăm să vă asigurați că detaliile dvs. au fost completate pe pagina Editați contul meu înainte de a încerca să efectuați rezervări în numele clienților dvs.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Detaliile de contact ale oaspeților");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', '- Invitat nou -');
jr_define('_JOMRES_CHARTS', 'Grafice');
jr_define('_JOMRES_CHARTS_SELECT', 'Select diagram ...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Venituri după an / lună');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, să începem. Mai întâi trebuie să creați câteva camere pentru această proprietate.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Creați câteva camere acum');
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Cercetările au dovedit că proprietățile cu o mulțime de imagini de înaltă calitate generează mai multe vizualizări. Încărcați o imagine principală și câteva imagini de prezentare pentru a vă îmbunătăți șansele de a obține rezervări.");
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Încărcați o imagine');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Creați niște tarife');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Ce vor rezerva oaspeții?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Este acest tip de proprietate o proprietate de tip hotel, unde închiriați camere în proprietate sau o proprietate de tip vilă, unde închiriați întreaga proprietate într-o singură rezervare?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Camere în proprietate');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Întreaga proprietate');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Ambele'); // Aceasta este o setare intermediară care oferă compatibilitate înapoi pentru utilizatorii existenți care nu și-au actualizat încă tipurile de proprietate. Nu va fi selectabil
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Ce vor rezerva oaspeții?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Va trebui să completați detaliile adresei dvs., astfel încât oaspeții dvs. să vă poată găsi când vor veni să rămână.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Actualizează-ți adresa');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hopa, se pare că ai uitat să completezi toate câmpurile.');
jr_define('_JOMRES_CONTANT_US', 'Contactați-ne');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Bine ați venit la noua dvs. listare online pentru');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Bună ziua și bun venit la noua dvs. proprietate pe');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Ați adăugat recent o nouă proprietate pe site-ul nostru web și dorim să vă urez bun venit în familie.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Puteți vedea noul dvs. tablou de bord');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'aici');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Odată ce v-ați configurat proprietatea, puteți vedea cum arată vizitatorii site-ului vizitând");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'prima dvs. pagină.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(nu este publicat, astfel încât vizitatorii site-ului nu îl pot vedea încă).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "În partea de sus a paginii veți vedea o serie de mesaje. Butoanele de lângă aceste mesaje vă vor îndruma către paginile pe care trebuie să le vizitați pentru a vă configura proprietatea pe site-ul nostru. Odată ce ați făcut acest lucru Am efectuat fiecare dintre aceste sarcini, vizitatorilor de pe site-ul nostru le va fi mult mai ușor să vă găsească proprietatea și să facă rezervări online. ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Dacă aveți întrebări, vă rog');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contactați-ne');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "și vom fi încântați să vă răspundem la toate întrebările.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Toate cele bune, echipa noastră la');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Se pare că nu aveți tururi de vânzare. Creați un profil turistic, apoi utilizați butonul Generați pentru a crea câteva tururi.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Să creăm câteva tururi!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Schimbați locația simbolului valutar');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Utilizați această opțiune pentru a muta simbolul monedei din spatele, în fața cifrei prețului sau invers.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Introduceți ID-ul paginii dvs. de facebook, de exemplu "jomres". Lăsați acest spațiu necompletat pentru a nu arăta nimic. Nu introduceți https://www.facebook.com sau orice altceva.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'În continuare va trebui să adăugați câteva tarife. Acestea sunt prețurile dvs. de bază.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap nu este activat!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Atenție, nu aveți Bootstrap activat în Jomres Site Configuration -> fila Diverse. Pentru a furniza <i> unele </i> funcționalități, Jomres folosește în prezent vechile șabloane bazate pe interfața jQuery, cu toate acestea, acestea nu au fost lucrate de câțiva ani. Toate dezvoltările și îmbunătățirile actuale ale șabloanelor Jomres (fișierele de aspect) sunt făcute în fișierele de șabloane Bootstrap 3. Pentru a beneficia la maximum de Jomres, vă recomandăm să instalați un Bootstrap 3 bazat pe temă pentru Wordpress sau Joomla. După ce ați făcut acest lucru, puteți activa șabloanele Jomres \ Bootstrap în Configurarea site-ului. ');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Cheia dvs. de asistență este validă. Rețineți că această licență nu permite descărcarea pluginurilor.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Trageți rezervările în această zonă pentru a le anula');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Vă rugăm să vă asigurați că ați creat o pagină WordPress care conține codul scurt [jomres: xx-XX] (unde xx-XX este codul limbii site-ului dvs., de exemplu [jomres: en-GB] sau [ jomres: en-US]) altfel nu veți putea accesa Jomres din frontend pentru a vă gestiona proprietățile și rezervările.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Înainte de a putea crea un tip de cameră, trebuie să știm dacă este pentru o proprietate de tip hotel sau pentru o proprietate de tip vilă.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Faceți clic pentru a adăuga noi tipuri de camere');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Atenție, aveți unul sau mai multe tipuri de proprietăți fără tipuri de cameră. Proprietățile au nevoie de tipuri de camere, astfel încât administratorii de proprietăți să poată crea tarife.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Utilizați butonul Nou pentru a crea noi tipuri de cameră.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Fără rezervări / proprietăți imobiliare (listare simplă)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Locația fișierului jurnal');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres înregistrează implicit activitatea sistemului în locația' .JOMRES_SYSTEMLOG_PATH. ' Deoarece acest fișier poate conține informații sensibile (chei API, căi de sistem, informații despre gateway, informații pentru oaspeți) vă recomandăm să modificați această cale la unul deasupra rădăcinii documentului dvs. web. Dacă nu înțelegeți ce înseamnă acest lucru, vă rugăm să cereți sfaturi gazdelor dvs. web, deoarece vă vor cunoaște sistemul de fișiere. ');
jr_define("_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres înregistrează informații detaliate despre sistemul dvs., inclusiv chei API, căi de sistem, gateway și informații despre oaspeți, care nu ar trebui să fie vizibile pentru restul internetului. Calea jurnalului sistemului nu este setată, deci jurnalele de sistem sunt în prezent salvate în directorul '.JOMRES_SYSTEMLOG_PATH.' care nu este ideal. Vă rugăm să vizitați Configurarea site-ului -> Depanare și setați o cale în sistemul de fișiere care se află în afara rădăcinii web. Dacă aveți dubii, vă rugăm să contactați gazdele dvs. web deoarece ei vă vor putea sfătui. ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Dacă CMS-ul dvs. este instalat în directorul rădăcină al site-ului dvs. web, atunci ar fi o locație adecvată');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nu aveți set de chei Google Maps. Datorită modificărilor recente în Google Maps, toate site-urile noi vor avea nevoie de o cheie API pentru a putea utiliza caracteristicile hărții Google. Vă rugăm să <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'> consultați pagina noastră manuală despre cum să creați o cheie API < / a> și salvați cheia în Jomres. ");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Schema de culori Google map');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Așa, să începem să adăugăm proprietatea dvs. pe site-ul web. Trebuie să colectăm aici câteva informații despre proprietatea dvs. Aceasta ne va permite să configurăm oasele goale ale proprietății dvs. Odată ce ați terminat, atunci veți Voi fi ghidat prin adăugarea de camere, prețuri și imagini. ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Tipul proprietății vă ajută să definiți cum va fi rezervată proprietatea, de exemplu la hotelurile pe care le "vindeți" doar una sau două camere la un moment dat, în timp ce cu vile oferiți întreaga proprietate.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Rețineți că adresa de e-mail nu trebuie să fie aceeași cu cea pe care ați folosit-o la înregistrarea contului dvs. Acest lucru vă permite să aveți adrese diferite pentru proprietăți diferite.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Depozit minim');
jr_define("_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC", "Puteți configura suma minimă a depozitului care va fi debitat. Dacă faceți acest lucru, atunci setările Depozitul necesar este costul primei nopți & Depozitul necesar este procent din Configurarea proprietății nu pot fi configurate , în schimb, toate valorile depozitului sunt un procent și trebuie să fie cel puțin cifra pe care o definiți aici. ");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Această cifră nu poate fi mai mică de');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Dacă doriți să trimiteți mesaje de înregistrare a sistemului către un server syslog, puteți seta numele gazdei sau IP (ex. 192.168.0.2) și portul (ex. 514) aici. Notă, dacă site-ul este setat la Dezvoltare, apoi vor fi trimise mesaje DEBUG. Dacă este setat la Producție, atunci vor fi trimise numai mesaje de nivel INFO și mesaje superioare. Pentru a dezactiva înregistrarea pe serverul de la distanță, goliți câmpurile gazdă și port.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP nu are permisiunea de a accesa funcțiile PHP 'openlog' și 'syslog'. Aceasta este o setare pe partea serverului, dacă doriți ca Jomres să trimită mesaje către un server syslog, vă rugăm să consultați gazdele și confirmați dacă PHP are permisiunea de a accesa aceste funcții. Odată activat, veți putea configura setările serverului dvs. syslog aici. ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Trimiteți un e-mail administratorului site-ului când apare o eroare?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Istoric, problemele care ar trebui investigate au fost trimise prin e-mail proprietarilor de site-uri. Acest lucru poate fi excelent pentru a urmări funcționarea sistemului dvs., deoarece are o mulțime de piese în mișcare și este dificil de urmărit Din păcate, Spiderii și roboții care accesează cu crawlere site-urile dvs. (chiar și cele prietenoase) pot declanșa din greșeală erori fatale și acest lucru poate face ca numărul de mesaje primite să fie copleșitor. Dacă este cazul, setați această opțiune la Nu. Jomres trimite înregistrarea mesaje atât către un set de fișiere de înregistrare, cât și către un server syslog (dacă setările PHP specifice permit acest lucru, dacă nu vă rugăm să contactați gazda dvs.) Puteți analiza manual fișierele dacă căutați ceva anume (de exemplu, dacă dezvolți un gateway și vrei să folosești funcția gateway_log ().) dar asta este o mulțime de informații pe care trebuie să le treci, deci este mai bine să folosești ceva de genul unui analizator de fișiere syslog. Dacă te dezvolți pe Linux, atunci există o mulțime de instrumente disponibile, dacă pe Windows, atunci un instrument simplu pe care îl puteți utiliza este http://maxbelkov.github.io/visualsyslog/ Pe această pagină setați Syslog host la 127.0.0.1 și Port la 514 pentru a vedea mesajele conectate în acel instrument. ");
	
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nu aveți un set de chei API de detecție IP. Acest lucru este necesar pentru a permite sistemului să detecteze automat locația utilizatorului și să stabilească moneda și țara în mod automat. Vă rugăm să <a href = 'https://www.jomres.net / manual/site-managers-guide/35-panel-control/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> consultați manualul nostru pagină despre cum să creați o cheie API de detectare IP </a> și să salvați cheia în Jomres> Configurare site> Conversii valutare / Coduri valutare. ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nu aveți un set de chei API Open Rate Rate. Acest lucru este necesar pentru a permite sistemului să descarce și să utilizeze automat ratele de schimb valutar. Vă rugăm să <a href = 'https://www.jomres.net/manual/site-managers-guide/35-panel-control/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> consultați pagina noastră de manual despre cum să creați o cheie API de detectare IP </a> și salvați cheia în Jomres> Configurare site> Conversii valutare / Coduri valutare. ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Număr permis');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Unele țări reglementează faptul că trebuie să afișați un număr de permis pentru proprietatea dvs. Dacă aveți un astfel de număr, introduceți-l aici și va fi adăugat la secțiunea antetului proprietății.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "Pluginul <strong> plg_content_jomres_asamodule_mambot </strong> pluginul Jomres Asamodule Mambot TREBUIE să fie instalat și activat pentru ca aceste coduri scurte să funcționeze. Acest lucru poate fi găsit în Jomres Plugin Manager. Dacă acest site a fost construit folosind unul din Quickstarts, probabil că este deja instalat. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Trebuie să vă asigurați că pluginul <strong> 'Jomres Shortcodes' </strong> este activat. Acesta poate fi găsit în Jomres Plugin Manager. Dacă acest site a fost construit folosind unul dintre Quickstarts, probabil că este deja instalat.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Descriere');
jr_define('SHORTCODE_ARGUMENTS', 'Argumente');
jr_define('SHORTCODE_EXAMPLE', 'Exemplu');
jr_define('INTEGRITY_CHECK', 'Verificare integritate sistem de fișiere');
jr_define('INTEGRITY_CHECK_DESC', 'Această caracteristică vă permite să verificați dacă sistemul de fișiere se potrivește cu cel furnizat în versiunea curentă de Jomres. Acest lucru este util pentru a vă asigura că toate fișierele au fost actualizate corect după instalare / actualizare. Fișierele în roșu lipsesc, fișierele în Orange există, dar sunt diferite de cele furnizate în versiunea curentă. Numai fișierele cu potențiale probleme vor fi listate aici. ');
jr_define('INTEGRITY_CHECK_FILENAME', 'Verificare integritate sistem de fișiere');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Hash local');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Versiune hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Minunat! Nu s-au găsit probleme.');
jr_define("_JOMRES_PROPERTYTYPE_MARKER", "Marker Google Maps");
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Citiți mai multe');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Citește mai puțin');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Taxă turistică');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Rata impozitului turistic');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Setați rata impozitului turistic. Impozitul turistic este calculat numai după generarea rezervării inițiale și este adăugat la pagina de confirmare a rezervării, în caseta de servicii suplimentare.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Este procent?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Setați acest lucru la Da dacă taxa este un procent sau Nu dacă este o taxă unică.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Afectează întreaga valoare a rezervării?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Setați acest lucru la Da dacă taxa trebuie să acopere întreaga valoare a rezervării, deci este un procent atât din spațiul de cazare plus orice extra, fie Nu dacă este calculat numai pe baza valorii totalul de cazare. Dacă opțiunea Este procentual de mai sus este setată la Nu, atunci această opțiune este ignorată. ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Vă rugăm să rețineți că la această rezervare se va adăuga o taxă turistică. Veți putea vedea taxa în pagina de rezervare a recenziilor.');
jr_define('NO_LICENSE_MESSAGE', "Nu ați salvat un număr de licență în Configurarea site-ului, prin urmare nu veți putea descărca pluginuri. După ce ați salvat o cheie de licență validă, veți putea instala orice plugin care este listat ca Pluginuri de bază. ");
jr_define('INVALID_LICENSE_MESSAGE', "Se pare că utilizați un număr de licență care este nevalid sau a expirat. Odată ce ați salvat o cheie de licență validă, veți putea instala orice plugin care este listat ca plugin de bază.");
jr_define('VALID_LICENSE_MESSAGE', "Felicitări, utilizați un număr de licență valid și puteți instala pluginuri Core prin intermediul managerului de pluginuri Jomres.");
jr_define("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP", "Această pagină vă permite să încărcați imagini pentru proprietatea dvs. și lucrurile pe care le oferiți. Are un buton principal și un al doilea buton care vă permite să selectați resurse specifice pentru care să încărcați imagini. Deci, proprietatea principală imagine și prezentarea de diapozitive vor afișa un singur buton, dar dacă ați creat, de exemplu, opțiuni suplimentare sau camere, atunci veți vedea un al doilea buton în care puteți încărca imagini pentru resursele respective. ");
jr_define("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP", "Această pagină vă permite să încărcați imagini pentru proprietatea dvs. și lucrurile pe care le oferiți. Are un buton principal și un al doilea buton care vă permite să selectați resurse specifice pentru care să încărcați imagini. Deci, proprietatea principală imagine și prezentarea de diapozitive vor afișa un singur buton, dar dacă ați creat opțiuni suplimentare opționale, veți vedea un al doilea buton în care puteți încărca imagini pentru resursele respective. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Mai întâi alegeți imaginile pe care doriți să le încărcați făcând clic pe Adăugare imagine sau folosind Drag and Drop. Acestea vor apărea în coloana din partea dreaptă. </li>
  <li> Deasupra acestei zone, utilizați butonul Alegeți resursa pentru a alege pentru ce resursă doriți să încărcați imagini. Vi se poate oferi opțiunea de a alege o anumită resursă dedesubt. </li>
  <li> După ce ați ales o resursă, puteți face clic pe butonul Încărcare imagine de sub o imagine pentru a o asocia cu resursa respectivă. Odată ce o imagine a fost încărcată, aceasta va dispărea din coloana din site-ul din dreapta și va apărea în stânga. </li>
  <li> Utilizați butonul Coș de gunoi de lângă imaginile existente pentru a elimina imaginile pe care nu mai doriți să le afișeze. </li>
  <li> Puteți modifica ordinea afișării fișierelor în prezentarea de diapozitive redenumindu-le înainte de a le încărca, deoarece acestea sunt afișate în pagini în ordine alfabetică. </li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "În dreptul butonului Resurse, puteți vedea un buton Previzualizare. Dacă faceți clic pe acesta, veți vedea un pop-up care vă arată cum vor arăta imaginile încărcate în prezent într-o pagină. Acest lucru vă ajută să vă idee despre cum vor arăta imaginile clienților dvs. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Nu există nicio limită la numărul de imagini pe care le puteți încărca. Imaginile sunt redimensionate automat atunci când sunt încărcate. Puteți încărca numai fișiere JPG și PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "În mod ideal, orice imagine pe care o încărcați ar fi cel puțin");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixeli lățime, altfel pot părea neclare după ce au fost încărcate.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Orice imagine pe care o încărcați nu poate depăși");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "în mărime.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Alegeți resursa pentru care doriți să încărcați imagini");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Resursă specifică");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imagini încărcate deja pentru această resursă");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Formatare text');
jr_define('_JOMRES_MARKDOWN_DESC', 'Puteți introduce text aici utilizând formatarea simplă Markdown. Nu trebuie să cunoașteți niciun cod HTML, pur și simplu folosiți butoanele pentru a face informațiile să arate așa cum doriți sau formatați textul conform acestor exemple.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Accent');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italic');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Anteturi");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Antet mare');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Antet mediu");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Antet mic');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Antet mic');
jr_define('_JOMRES_MARKDOWN_LISTS', "Liste");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Element generic din listă');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Element de listă numerotat');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Linkuri');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text de afișat');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citate');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Acesta este un citat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Poate acoperi mai multe linii!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Imagini');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabelele');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Coloană');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Afișați imaginile proprietăților ca prezentare în lista de proprietăți?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Dacă este setat la da, se va afișa o prezentare a imaginilor principale ale proprietății. Dacă este setată la nu, atunci va fi afișată prima imagine principală a proprietății.');
jr_define('EDIT_CMS_USER', 'Editare utilizator CMS');
jr_define('BOOKING_MADE_BY', 'Rezervare făcută de');
jr_define('_JOMRES_ROUTER_FEATURES', 'Dotări');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipuri de cameră');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL formular extern de rezervare');
jr_define("_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC", "Aici puteți seta o adresă URL externă dacă doriți să utilizați un site web terță parte pentru efectuarea rezervărilor. Toate butoanele de rezervare jomres vor indica această adresă URL. Lăsați acest câmp necompletat dacă doriți să utilizați formularul de rezervare Jomres. ");
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (descriere scurtă / subtitrare)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Descrierea camerei');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Lista neagră pentru oaspeți');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Dacă acest invitat este listat pe negru, atunci nu va mai putea face rezervări în această proprietate.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Salvați fișierele de sesiune jomres pe disc sau în baza de date. Recomandat: baza de date');
jr_define('_JOMRES_MAP_HEIGHT', "Înălțimea hărții (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Nivel zoom hartă");
jr_define('_JOMRES_MAP_MAPTYPE', "Tip hartă");
jr_define('_JOMRES_TEMPLATE_PACKAGES', "Manager suprascriere șablon");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Pachetele de șabloane sunt pluginuri care pot oferi șabloane de suprascriere pentru diferite fișiere de șabloane de bază Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Această pagină listează orice fișier șablon care poate fi suprascris de fișierele șablon ale unui pachet șablon. Dacă doriți să suprascrieți un anumit fișier șablon, faceți clic pe butonul de editare pentru acel fișier, pe pagina următoare veți fi puteți alege cu ce versiune doriți să suprascrieți. Rețineți că aceste suprascrieri au prioritate atât asupra Jomres Core, cât și asupra oricărei teme / șabloane Wordpress sau Joomla. Puteți dezactiva o suprascriere ștergând-o în pagina Lista ștergerilor șablonului. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Numele șablonului");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Calea curentă");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nu este suprascris");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Puteți alege ce fișier șablon să suprascrieți fișierele șablon de bază schimbând meniul derulant");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Procentaj camere rezervate");
jr_define('_JOMRES_SELECT_WIDGETS', "Selectați widget-uri");
jr_define('_JOMRES_INTERVAL', "Interval");
jr_define('_JOMRES_TIMELINE', "Cronologie");
jr_define('_JOMRES_CPANEL_GRID', "Aspectul principal al panoului de control");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Selectați aspectul grilei paginii de pornire a panoului de control al gestionării proprietăților frontendului.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Imagini din oraș");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Schimbarea tipului de proprietate va șterge toate camerele, tarifele, setările proprietății și va reseta disponibilitatea.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Vă rugăm să rețineți, după actualizare, trebuie să actualizați toate pluginurile Jomres care sunt deja instalate, prin intermediul managerului de pluginuri Jomres. Dacă aveți pluginuri Core instalate, dar nu aveți o licență Jomres validă, atunci <em> facem not </em> vă recomandăm să actualizați Jomres, deoarece pluginurile mai vechi de multe ori s-ar putea să nu funcționeze cu versiunile mai noi de Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Vă rugăm să rețineți, după actualizare, trebuie să actualizați toate pluginurile Jomres care sunt deja instalate, prin intermediul managerului de pluginuri Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Dacă doriți să actualizați Jomres și pluginurile sale, veți avea nevoie de o licență de reînnoire. Vă rugăm să vizitați <a href='https://www.jomres.net/pricing' target='_blank'> site </a> pentru mai multe informații. În majoritatea cazurilor, aceste licențe reprezintă 50% din prețul unei licențe complete. Vă rugăm să vă asigurați că v-ați conectat la magazinul nostru înainte de a încerca să cumpărați o reînnoire. ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Metoda de plată:");

jr_define('_JOMRES_PRICES', "Conectați-vă");


jr_define('_OAUTH_TITLE', "Gestionarea cheii aplicației");
jr_define('_OAUTH_APPS', "detalii client REST API");
jr_define('_OAUTH_IDENTIFIER', "Identificator");
jr_define('_OAUTH_APIKEY', "ID client");
jr_define('_OAUTH_SECRET', "Secret");
jr_define('_OAUTH_CREATED', "Aplicație creată / actualizată");
jr_define('_OAUTH_CLIENT_ID_INFO', "ID-ul clientului și secretul sunt create pentru dvs. Identificatorul este astfel încât să puteți identifica cu ușurință această pereche de chei.");
jr_define('_OAUTH_SCOPE_TITLE', "Permisiuni (ce poate face clientul)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Permisiuni utilizator");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Permisiuni de proprietate");

jr_define("API_DOCUMENTATION_TITLE", "Documentație API REST pentru aplicații");

jr_define('_OAUTH_CONFIG', "Configurare API Core");

jr_define('_OAUTH_CONFIG_SHOW', "Arată opțiunile de configurare a clientului API în meniul principal Jomres?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Puteți alege să nu afișați opțiunile de configurare a clientului API în secțiunea Contul meu din meniul principal Jomres. Puteți decide în schimb că doriți să le afișați pe alte pagini folosind codurile scurte Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Afișează pagina de documentare de bază API. API Core permite utilizatorilor să creeze clienți API, care sunt apoi folosiți pentru a accesa funcționalitatea API care este prezentată în documentația API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Afișează pagina de administrare de bază API, unde administratorii de proprietăți pot configura clienții API. Rețineți că aceasta este o caracteristică numai pentru utilizatorii înregistrați, astfel încât utilizatorii trebuie să fie înregistrați și să se conecteze înainte de a putea vedea această pagină.");

jr_define('API_METHODS_TITLE', "Metode API");
jr_define('API_METHODS_DESCRIPTION', "Această listă de metode se bazează pe pluginurile de caracteristici API instalate și este generată automat. Dacă instalați sau ștergeți un plugin de caracteristici API, trebuie să vizitați această pagină pentru a reconstrui această listă de metode API disponibile pe site-ul dvs. ");

jr_define('_OAUTH_REDIRECT_URI', "Redirect URI");
jr_define("_OAUTH_IDENTIFIER_PLACEHOLDER", "Dă-mi un nume care să fie semnificativ pentru tine, cum ar fi Telefonul meu");

jr_define('_OAUTH_GRANT_TYPES', "Acest sistem acceptă două tipuri de granturi, acreditări client și implicite. Dacă utilizați fluxul <em> client_credentials </em>, atunci veți avea nevoie atât de codul clientului, cât și de secretul clientului. Dacă utilizați <em > implicit </em> atunci aplicația dvs. va trimite doar ID-ul clientului și vă veți conecta la sistem pentru a autoriza în mod explicit aplicația respectivă. ");

jr_define("_OAUTH_IMPLICIT_NOTES", "Pentru a utiliza fluxul de tip de acordare <em> implicit </em>, va trebui să utilizați această adresă URL pentru a vă autoriza aplicațiile. Când se apelează această adresă URL și ați autorizat aplicația, sistemul va emite un simbol pe care aplicațiile dvs. îl vor folosi apoi pentru a apela API-ul acestui sistem ");
jr_define('_OAUTH_AUTHORISATION_URL', "URL de autorizare");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "Afișați opțiunile de configurare Webhook în meniul principal Jomres?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Puteți alege să nu afișați opțiunile de configurare Webhook în secțiunea Contul meu din meniul principal Jomres. Puteți decide în schimb că doriți să le afișați pe alte pagini folosind Jomres Shortcodes.");
jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Documentație Webhooks");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Afișează pagina de documentare de bază API. API Core permite utilizatorilor să creeze clienți API, care sunt apoi folosiți pentru a accesa funcționalitatea API care este prezentată în documentația API Core.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Afișează pagina de administrare de bază API, unde administratorii de proprietăți pot configura clienții API. Rețineți că aceasta este o caracteristică numai pentru utilizatorii înregistrați, astfel încât utilizatorii trebuie să fie înregistrați și să se conecteze înainte de a putea vedea această pagină.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define('WEBHOOKS_INTEGRATION_ID', 'ID de integrare');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL sau Nume');
jr_define('WEBHOOKS_ENABLED', 'Enabled');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Metodă de autentificare / Integrare');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Orice webhook-uri pe care le creați nu vor fi declanșate deoarece nu sunteți atribuit niciunei proprietăți. Super-administratorii de proprietăți nu sunt de obicei atribuiți proprietăți individuale, deci este posibil să aveți nevoie de un nou utilizator pentru crearea webhook-urilor.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Orice webhook-uri pe care le creați vor fi declanșate împotriva următoarelor proprietăți:');


jr_define('PORTAL_REVIEWS_LIMIT', 'Limita recenziilor');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Utilizați această setare pentru a limita numărul de recenzii afișate în pagina cu detalii despre proprietate.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Afișează toate recenziile');

jr_define('VIDEO_TUTORIALS', 'Tutoriale video');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valoarea minimă a depozitului');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Dacă depozitul calculat este mai mic decât această cifră, atunci setați în schimb depozitul la această valoare. Această cifră ar putea fi însuși depășită dacă nu satisface setarea minimă a depozitului site-ului. Lăsați-o setată la 0 la nu utilizați setarea. ");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Pentru a crește viteza site-ului dvs., vă recomandăm să importați detalii despre site-ul existent și imaginile proprietăților în baza de date.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importați detaliile imaginilor existente în baza de date');

jr_define("_JOMRES_S3_ACTIVE_DESC", "Caracteristică experimentală. Dacă este activată, imaginile încărcate folosind funcția media center vor fi, de asemenea, copiate în cupa Amazon S3 și difuzate de pe adresa URL a cupei Amazon S3. Când o activați pentru prima dată, veți fi, de asemenea, promis să importați imagini existente în bucket-ul dvs. S3. ");
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define("_JOMRES_CLOUDFRONT_DMAIN_DESC", "Înlocuiți-vă domeniul implicit Amazon S3 cu domeniul CloudFront");
jr_define("_JOMRES_S3_SSLTLS_DESC", "Se recomandă să fie activat. Numai pentru Windows și Mac OSX, dacă libcurl nu a fost construit cu suport Schannel sau Secure Transport (bibliotecile native SSL incluse în Windows și Mac OS X), ar trebui să setați acest lucru la Nu.");
jr_define("_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING", "Ați activat integrarea Amazon S3, deci va trebui să copiați toate imaginile existente în cupa S3. Imaginile sunt acum trimise vizitatorilor site-ului dvs. de pe adresa URL S3 Amazon, deci veți avea nevoie să le copiați mai întâi în cupa S3, altfel nu vor fi vizibile pentru vizitatorii site-ului dvs. ");
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'După ce faceți clic pe acest buton, vă rugăm să nu întrerupeți procesul și să așteptați un mesaj de succes sau de eroare. În funcție de viteza serverului, acest lucru poate dura ceva timp.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copiați imaginile existente în cupa Amazon S3');


jr_define('JOMRES_INCOMPLETE', 'Incomplet');
jr_define('JOMRES_WATING_APPROVAL', 'Aprobare în așteptare');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Harta detaliilor proprietății');

jr_define('HAS_STARS_TITLE', 'Permite clasificarea stelelor?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Forțați reimportarea detaliilor imaginii în baza de date');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Forțați reîncărcarea imaginilor în cupa S3');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Ștergeți toate datele Jomres la dezinstalare?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Dacă este setat la da, Jomres va șterge toate tabelele bazei de date la dezinstalare. Aceasta va șterge toate datele Jomres din db și nu poate fi anulată.');

jr_define('TRANSACTION_IDS', 'ID tranzacție');
jr_define('PAYMENT_METHOD', 'Metoda de plată');
jr_define('POA_DISPLAY_PRICE', 'Preț POA');
jr_define('POA_DISPLAY_PRICE_DESC', 'Când proprietățile sunt afișate într-o listă, sistemul va încerca să găsească un preț valid din tarifele configurate, fie pe data de astăzi, fie dacă datele au fost utilizate într-o căutare, apoi pe baza acelor date Dacă nu se poate, va afișa POA (Preț la cerere), ceea ce înseamnă că oaspetele ar trebui să vă contacteze pentru a obține un preț. Dacă doriți, puteți configura aici un preț care va fi afișat în locul textului POA. Această figură ar fi un preț "alternativ" de afișat dacă nu se poate determina alt preț. ');

jr_define('PLUGINMANAGER_INSTALL', 'Trebuie să instalați managerul de pluginuri înainte de a putea instala pluginurile Jomres, doriți să faceți asta acum?');
jr_define('PLUGINMANAGER_REINSTALL', 'Trebuie să actualizați managerul de pluginuri înainte de a putea actualiza orice plugin instalat, doriți să faceți acest lucru acum?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Să facem asta!");

jr_define('INCLUDEINFILTERS', 'Includeți în filtre?');
jr_define('INCLUDEINFILTERS_DESC', 'Filtrele de caracteristici ale proprietății din Ajax Composite Search pot deveni foarte lungi, deci puteți seta această opțiune la Nu pentru a împiedica afișarea acestei caracteristici în lista de caracteristici a proprietăților.');

jr_define('REVIEW_REMINDER_PT1', "Ai");
jr_define('REVIEW_REMINDER_PT2', "rezervări pentru care nu ați lăsat încă o recenzie. Vă rugăm să lăsați o recenzie.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Rezervări în așteptarea recenziilor");
jr_define('REVIEW_NAG', "Încercați clienții pentru recenzii?");
jr_define('REVIEW_NAG_DESC', "Odată ce un invitat a fost rezervat dintr-o rezervare, sistemul îi va reaminti să posteze o recenzie pentru rezervarea sa. Setați această opțiune la Nu pentru a dezactiva acest memento.");

jr_define('HIDDEN_ADDRESS_SETTING', "Ascunde adresa?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Dacă setați această opțiune la Da, atunci numai oaspeții care au făcut deja o rezervare pe proprietatea dvs. vor putea vedea adresa străzii proprietății. Este posibil să doriți să utilizați această setare pentru a ascunde locația exactă a proprietății dacă, de exemplu, este lăsat în mod obișnuit nesupravegheat. ");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimizați imaginile la încărcare?');
jr_define("_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC", "Când este activată, imaginile vor fi optimizate pentru web (dimensiunea fișierului poate fi cu până la 75% mai mică). În funcție de tipul de imagine încărcat, serverul dvs. trebuie să aibă una sau mai multe dintre aceste biblioteci instalate de găzduire furnizor: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Verificarea integrității bazei de date");
jr_define('OBSOLETE_FILES_CHECK', 'Verificare fișiere învechite');
jr_define('DATATABLES_COLVIS', 'Vizibilitatea coloanei');

jr_define('API_TOKEN_LIFETIME', 'durata de viață a simbolului API');
jr_define('API_TOKEN_LIFETIME_DESC', 'Cât timp rămâne valabil un indicativ API, în secunde. 86400 = 1 zi, 31536000 = 1 an');


jr_define('ENCRYPTION_TITLE', 'Criptare');
jr_define('ENCRYPTION_FILE_LOCATION', 'Locația fișierului de criptare');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** Nu ștergeți niciodată fișierul de criptare ** <br/> Datele utilizatorului sunt stocate criptate în tabele pentru a vă asigura că "datele în repaus" sunt protejate în siguranță, în conformitate cu recomandările GDPR. În mod implicit, cheia de criptare este stocat în fișierul "encryption_key.class.php" din rădăcina instalării dvs. Jomres (de obicei / public_html / jomres). Puteți schimba unde este stocat fișierul aici. Dacă modificați locația, trebuie să MUȚI fișierul, nu așteptați ca Jomres să creeze o nouă versiune, altfel nu veți putea decoda detaliile oaspeților. ');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Informațiile salvate aici vor fi utilizate pe facturile generate pentru această proprietate');

jr_define("_JOMRES_GDPR_POLICIES", "Politici GDPR");
jr_define("_JOMRES_GDPR_POLICIES_DESC", "Aici puteți configura cât timp după crearea unei rezervări sau a unei facturi este eliminat din sistem pentru a vă asigura că respectați GDPR.");

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Perioada de păstrare a rezervării (în zile)');
jr_define("_JOMRES_GDPR_BOOKING_RETENTION_DESC", "Câte zile după data de plecare a rezervării ar trebui să fie ștearsă rezervarea? Când este ștearsă, atât rezervarea, cât și factura sunt eliminate. O perioadă tipică de păstrare ar putea fi de 365 de zile.");

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Perioada de păstrare a facturilor (fără rezervare)');
jr_define("_JOMRES_GDPR_INVOICE_RETENTION_DESC", "Alte facturi, cum ar fi facturile de comision și abonament, nu sunt legate de rezervări. Prin urmare, acestea nu vor fi șterse atunci când se șterg facturile și contractele. În funcție de țara dvs. și de propriile practici comerciale, va trebui să configurați o perioadă de păstrare diferită. O perioadă tipică de păstrare ar putea fi 3653 zile, adică 10 ani. ");

jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Datele dvs.');
jr_define("_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES", "Unele caracteristici ale acestui site web trebuie să stocheze informații despre vizita dvs. Acestea sunt utilizate doar pentru a vă oferi servicii, nu sunt partajate cu nimeni altcineva și sunt șterse când nu mai sunt necesare.");
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'NE DĂM PERMISIE DE A PĂSTRA ACESTE INFORMAȚII ??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'În detaliu');
jr_define("_JOMRES_GDPR_CONSENT_FORM_COOKIE", "Trebuie să consimțiți să stocăm aceste date pentru a putea face rezervări pe acest site. Indiferent dacă sunteți sau nu de acord cu stocarea datelor dvs., vom stoca un cookie pe computerul dvs. ne-ați ales dacă ați optat sau nu. Acest lucru ne ajută să ne asigurăm că nu vă întrebăm în mod constant dacă doriți sau nu să vă înscrieți sau nu și nu conține informații de identificare personală (PII). Dacă vă răzgândiți, vă poate vizita pagina Permisiuni pentru aplicații în orice moment pentru a vă înscrie sau a le renunța. ");
jr_define("_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION", "Informațiile sunt stocate pentru perioade de timp diferite în funcție de natura vizitei dvs. Prin urmare, dacă vă uitați în jur, vom stoca informații despre locația geografică aproximativă (la nivel de țară). Dacă efectuați căutări, atunci la faceți formularele de căutare mai ușor de utilizat, vom stoca ultimele lucruri pe care le-ați căutat. Aceste informații sunt de obicei stocate timp de maximum 24 de ore și sunt utilizate numai pentru a vă face vizita mai plăcută. ");
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Când faceți o rezervare la noi, prin necesitate sunt stocate mai multe informații.');
jr_define("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1", "Informațiile tehnice ale formularului de rezervare sunt capturate și reținute pentru maximum 60 de zile. Acest lucru este necesar, astfel încât rezervările la cerere să poată fi transformate în rezervări complete după aprobarea rezervării și pentru analiza de către echipele noastre în cazul în care există o problemă cu rezervarea. Dacă nu ați fost conectat atunci când ați făcut o rezervare, vă vom trimite prin e-mail un nume de utilizator și o parolă, astfel încât să puteți vizualiza istoricul rezervărilor și să vă exercitați dreptul de a fi uitat (RTBF) dacă doresc să fac asta. ");
jr_define("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2", "Datele introduse în formularul de rezervare, de exemplu numele, adresa de e-mail, adresa reală sunt stocate pentru maximum 365 de zile de la data plecării rezervării. Aceste informații sunt stocate în formă criptată în baza noastră de date astfel încât numai persoanele autorizate să o poată vizualiza. Dacă efectuați o rezervare, prin lege, trebuie să păstrăm datele dvs. personale în timp ce rezervarea este valabilă. După finalizarea rezervării, fie pentru că a fost anulată, fie pentru că ați fost verificat, atunci veți face acest lucru. să vă puteți exercita RTBF-ul conectându-vă și accesând pagina Datele dvs. Informațiile despre facturi pentru rezervările finalizate vor fi în continuare stocate în siguranță în baza noastră de date pentru a ne asigura că respectăm legislația fiscală relevantă, dar veți putea elimina toate celelalte informații personale după finalizarea rezervării.");
jr_define("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3", "Când sunteți de acord ca informațiile dvs. să fie stocate așa cum este descris mai sus, suntem obligați legal să stocăm acest consimțământ în baza noastră de date. Aceste informații vor include numărul dvs. de IP și conținutul formularului de înscriere. păstrați această notificare de consimțământ pe termen nedefinit (aceasta este o cerință legală).");

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Nu ne-ați spus încă dacă putem colecta informații de identificare personală despre dvs.');
jr_define("_JOMRES_GDPR_CONSENT_OPTED_IN", "Ați consimțit să colectăm informațiile de identificare personală necesare pentru efectuarea rezervărilor");
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Ne-ați spus să nu colectăm informații de identificare personală');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Nu ne-ați dat permisiunea de a colecta datele dvs. private');
jr_define("_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT", "Pentru a efectua anumite acțiuni pe acest site web, trebuie să colectăm informații de identificare personală despre dvs., dar nu ne-ați permis să facem acest lucru.");
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Schimbați permisiunile');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continuarea vizualizării proprietăților');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Permisiuni pentru aplicații');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Date oaspeți');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Acestea sunt detaliile stocate pentru dvs. de diferitele proprietăți. Diferite hoteluri pot deține înregistrări diferite, în funcție de ceea ce ați introdus când ați făcut rezervarea.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Nu aveți date stocate la niciun hotel din acest sistem');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Date profil');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Acesta este principalul set de date pe care îl deținem pentru dvs., distinct de cele pe care le-ați partajat cu proprietăți diferite.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Nu ați salvat nicio informație de profil');
jr_define("_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT", "Iată informațiile identificabile personal pe care le stocăm pe acest site web pentru dvs. Este construit în format JSON (JavaScript Object Notation), care este un format ușor de schimb de date. Este ușor de citit și de om pentru oameni scrie și este ușor pentru mașini să analizeze și să genereze.");

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonimizat');

jr_define('_JOMRES_GDPR_MY_DATA', 'Datele dvs.');
jr_define("_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE", "Prin acceptarea prezentului Acord privind Termenii și condițiile (prezentul Acord), sunteți de acord că:

<ul>
<li>
Sunteți autorizat să rezervați hoteluri prin intermediul acestui site web;
</li>
<li>
Ai cel puțin 18 ani;
</li>
<li>
Aveți autoritatea legală pentru a crea o obligație legală obligatorie;
</li>
<li>
Veți utiliza site-ul în conformitate cu prezentul acord;
</li>
<li>
Veți folosi Site-ul doar pentru a face rezervări legitime pentru dvs. sau pentru o altă persoană pentru care sunteți autorizat legal să acționeze;
</li>
<li>
Veți informa aceste alte persoane despre acest Acord care se aplică rezervărilor pe care le-am făcut în numele lor, inclusiv toate regulile și restricțiile aplicabile acestuia;
</li>
<li>
Toate informațiile furnizate de dvs. către site sunt adevărate, exacte, actuale și complete; și
</li>
<li>
Vă veți proteja informațiile despre cont și veți supraveghea și veți fi complet responsabil pentru orice utilizare a contului dvs. de către dvs. și de către oricine altul decât dvs.
</li>
</ul>
");
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Securitatea și transparența sunt importante pentru noi.');
jr_define("_JOMRES_GDPR_MY_DATA_INTRO", "Ne luăm foarte în serios responsabilitățile cu privire la stocarea datelor dvs. Toate informațiile de identificare personală (PII) sunt stocate criptate în baza noastră de date folosind algoritmi standard din industrie pentru a ne asigura că numai utilizatorii autorizați pot vizualiza aceste informații.");

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Puteți descărca toate informațiile PII pe care le stocăm pentru dvs.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Descărcați acum');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Dreptul de a fi uitat (RTBF)');
jr_define("_JOMRES_GDPR_MY_RTBF_INTRO", 'Credem că ar trebui să puteți <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> șterge </a> < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Informații de identificare personală </a> dacă doriți și dacă este posibil. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Nu sunteți înregistrat pe acest site. Locația dvs. generală (țara) și numărul IP vor fi stocate pentru maximum 24 de ore și apoi șterse.');
jr_define("_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT", "Nu sunteți înregistrat pe acest site și ați renunțat la colectarea datelor. Nu v-am stocat informațiile PII.");

jr_define("_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS", "Sunteți înregistrat pe site și nu aveți rezervări în așteptare sau active. Putem anonima cele mai multe informații pe care le deținem în prezent pentru dvs. Ați dori să faceți asta?");
jr_define("_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE", "Notă: Aceasta nu vă șterge contul, ci pur și simplu anonimizează înregistrările noastre, astfel încât contul dvs. să nu poată fi asociat cu dvs. ca persoană. Prin lege, trebuie să continuăm să vă stocați PII în scopuri de facturare, totuși vom face acest lucru ștergeți toate înregistrările oaspeților.");

jr_define("_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS", "Sunteți înregistrat pe site, totuși aveți rezervări restante și nu vă putem anonima datele în acest moment. Aceste date vor fi păstrate timp de cel mult un an după finalizarea rezervării, atunci acestea vor fi să fie șters, dacă nu alegeți să îl eliminați înainte de acel moment.");
jr_define("_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS", "Deoarece sunteți administrator de proprietăți de pe site-ul nostru, nu vă putem oferi posibilitatea de a vă șterge automat datele. În schimb, vă rugăm să ne contactați direct, astfel încât să vă putem atribui proprietățile către alt manager. După ce am făcut acest lucru și am eliminat statutul dvs. de administrator de proprietate, veți putea să ștergeți automat datele.");
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Uită-mă!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Acest lucru nu poate fi anulat!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Datele dvs. au fost șterse!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Ne pare rău, nu puteți face o rezervare deoarece adresa dvs. de e-mail este nevalidă');

jr_define("_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO", "Această pagină vă oferă posibilitatea de a anonima orice invitați care au informațiile stocate în sistem. Acest lucru vă permite să respectați GDPR, însă nu puteți edita alte informații pe această pagină. trebuie să vă conectați la frontend ca administrator de proprietate. Presupunerea este că un oaspete istoric v-a contactat solicitându-i să le permiteți să-și exercite dreptul de a fi uitați. Dacă nu pot să se conecteze la frontendul site-ului (poate un utilizatorul nu a fost creat pentru ei atunci când a rezervat) atunci puteți utiliza această zonă pentru a-i anonima după ce le-ați confirmat identitatea.");

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimizează oaspete');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'PROPRIETATE ȘTERGATĂ');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Datele clienților anonimizate');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Nu se poate anonima');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Avem nevoie de permisiunea dvs. pentru a stoca informațiile dvs. înainte de a putea face o rezervare. Faceți clic AICI pentru a ne acorda permisiunea.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Activați funcționalitatea conformă cu GDPR?');
jr_define("_JOMRES_GDPR_CONFIG_ENABLE_DESC", "NU RECOMANDĂM AȚI DEZACTIVA FUNCȚIONALITATEA CONFORMĂ GDPR. Jomres are funcții încorporate care vă ajută să vă asigurați că secțiunea Jomres a site-ului dvs. este conformă cu GDPR. Dacă dezactivați această caracteristică (și nu ar trebui să faceți acest lucru dacă sunteți în UE sau faceți afaceri cu cetățeni ai UE), atunci Jomres va presupune automat că fiecare vizitator al site-ului și-a dat permisiunea de a activa datele personale. Permisiunea aplicației și paginile mele de date nu vor fi afișate și utilizatorilor nu li se va solicita să își dea permisiunea de a colecta datele.");


jr_define('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define('EMPTY_TEMP_DIR_DONE', 'Fișiere temporare șterse');

jr_define('MACHINE_TRANSLATION', 'Traduceri automate');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Limba sursă');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Este posibil să conectați funcționalitatea de traducere automată. Acest lucru vă permite să introduceți șiruri într-o singură limbă și traducerile ar putea fi extrase din serviciile de la distanță. Rețineți că nu toate serviciile de traducere acceptă toate limbile. Consultați aceste servicii pentru mai multe detalii.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipuri de cameră');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Tip cameră nouă');
jr_define("_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD", "Puteți crea și edita tipuri de camere pe această pagină. Aceste tipuri de camere vor fi specifice numai acestei proprietăți. La configurarea proprietății aveți nevoie mai întâi de unele tipuri de camere. Puteți utiliza fie acele tipuri de camere create de administrator sau puteți adăuga propriul dvs. Odată ce aveți unul sau mai multe tipuri de cameră, puteți crea camere cu acel tip de cameră. După ce aveți camere, puteți crea tarife (prețuri) pentru acele camere, deoarece tarifele sunt legate de tipurile de cameră . ");
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managerii pot crea tipuri de cameră?');
jr_define("_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC", "Utilizați această opțiune pentru a configura dacă managerii își pot crea propriile tipuri de cameră în frontend. Vă recomandăm cu tărie să lăsați această opțiune setată la Nu când începeți să utilizați Jomres, mai ales dacă creați un portal, deoarece ar trebui să creați toate tipurile de camere în zona de administrator. Tipurile de camere create de manageri vor apărea în formularele de căutare, dar deoarece aceste tipuri de camere sunt specifice proprietăților individuale, o singură proprietate va fi afișată în rezultatele căutării dacă este selectat acel tip de cameră căutări de durată. Dacă doriți ca numai Super Managerii de proprietăți să poată crea tipuri de camere, lăsați această opțiune setată la Da și utilizați pluginul Control acces pentru a permite doar super managerilor să vizualizeze opțiunea meniului Setări > Tipuri de cameră. Doar proprietățile care închiriază sălile din proprietate și utilizarea modurilor de editare a tarifelor Advanced sau Micromanage pot folosi această opțiune. Proprietățile de tip vilă / apartament nu o vor putea folosi.");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tip cameră / proprietate actualizat');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Afișează tipurile de camere în opțiunile de căutare');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Dacă alegeți să permiteți administratorilor de proprietăți să își creeze propriile tipuri de camere, puteți alege dacă să afișați sau nu acele tipuri de camere create în opțiunile de căutare în care ați ales să afișați tipurile de camere.');

jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Nu ar trebui să reutilizați aceeași adresă de e-mail pentru fiecare rezervare. <br/> Dacă aveți un domeniu unic (de exemplu, nu o adresă de e-mail Gmail) pentru afacerea dvs., utilizați numărul de telefon al oaspetelui ca adresă de e-mail a acestora. Adresa de e-mail ar arăta așa cum ar fi 123456@mydomain.com <br/> Acest lucru vă va asigura că un nou oaspete este creat atunci când creați o rezervare. ");

jr_define('_JOMRES_LOGIN_USERNAME', 'Adresă de e-mail');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Parolă');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Suntem încântați că ați dori să rezervați din nou la noi. Pentru a vă putea gestiona toate rezervările împreună, este necesar să vă conectați, astfel încât rezervarea să poată fi adăugată în contul dvs. vă asigură că sunteți autorizat să utilizați adresa de e-mail furnizată. ");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Dacă nu știți parola, vă putem trimite un e-mail de resetare a parolei. Vă rugăm să urmați instrucțiunile din acel e-mail pentru a vă reseta parola.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Ți-ai uitat parola?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizează-ți numele?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Dacă alegeți să vă anonimizați numele în timpul revizuirii, vom folosi inițialele dvs. în loc.');
jr_define("ANONIM", "Anon");

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'said');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Răspunde la această recenzie');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Introduceți răspunsul la această recenzie aici.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Răspunsul tău');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Revizuire principală');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Răspunsul de examinare a fost salvat');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Înainte de a trimite un răspuns de recenzie, trebuie să citiți următoarele. Prin trimiterea unui răspuns confirmați că sunteți de acord cu acești termeni și condiții.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Care sunt ghidurile noastre pentru un răspuns de revizuire?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Răspundeți la revizuirea proprietății dvs. Nu trebuie să utilizați răspunsul ca proces de dispută comercială. Dacă trebuie să raportați o revizuire, trebuie să utilizați "Raportul" Revedeți butonul "din listă și nu această pagină de răspuns la recenzie. ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Odată ce ați părăsit răspunsul, nu îl veți putea edita.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Permis și încurajat');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Un răspuns complet la recenzie. </li>
    <li> Amabilitatea și onestitatea. </li>
    <li> Răspunsuri sensibile la problemele examinatorului (amintiți-vă, alții ar putea avea probleme similare, dar nu au profitat de ocazie pentru a posta o recenzie). </li>
    <li> Încurajați oaspetele să vă contacteze direct pentru a rezolva problemele.
    <li> Amintiți-vă întotdeauna că viitorii oaspeți vă vor vedea răspunsul. Asigurați-vă că sunteți profesionist în orice moment. </li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nu este permis');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Litigii comerciale. </li>
    <li> Întrebări adresate recenzorului sau altora. </li>
    <li> Limbă discutabilă (inclusiv blestemul). </li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last run');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Programare');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Numere facturi');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Folosiți numere de factură personalizate?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Puteți configura sistemul pentru a utiliza numere de factură personalizate. Numai facturile noi vor fi afectate.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Număr de start');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numerele sunt create consecutiv. Care ar trebui să fie primul număr?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Ce format ar trebui să ia numărul facturii?');
jr_define("_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC", "Configurați aici formatul numărului de factură. Un format poate arăta ca {N} / {D} sau {N} / {Y} unde N este numărul generat automat, D = data în format AAAAAAAAA ( 20190131) sau Y = AAAA (2019). Orice alte caractere alfanumerice care nu sunt încadrate în acolade vor fi lăsate în pace, așa că un model care arată ca {N} / {D} -L ar avea ca rezultat un număr de factură (21) care arata ceva de genul 21/2019-L ");
jr_define('_JOMRES_SURCHARGE_TITLE', 'Taxă suplimentară');
jr_define('_JOMRES_SURCHARGE_DESC', 'O taxă suplimentară care va fi adăugată în cameră la rezervare (calculată pe zi)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritizați etichetele la nivel de site?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'textul personalizat salvat în editarea etichetelor sau în paginile de șiruri ale fișierelor de traducere lang sunt considerate etichete la nivel de site. Administratorii de proprietăți pot personaliza, de asemenea, etichetele pentru fiecare proprietate utilizând funcția de editare a etichetelor din frontend. Acest lucru permite un administrator de proprietate să aibă texte diferite pentru proprietatea sa, ceea ce este util dacă proprietatea este diferită de toate celelalte proprietăți de pe site. <br/> Atunci când sistemul caută texte de etichetă, va acorda prioritate textelor de pe site în locul proprietății texte specifice, ceea ce înseamnă că, dacă există un text la nivelul întregului site pentru acea etichetă, sistemul îl va alege mai întâi pe acesta. Dacă setați această opțiune la Nu, sistemul va acorda prioritate textelor specifice proprietății în locul textelor la nivel de site. ');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Acest lucru ar putea fi schimbat dacă lista albă, așa că site-ul "Cel mai bun site de rezervare din lume" ar schimba acest lucru în "WBBS" sau similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Pachete de bibliotecă');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Modulele furnizor și nod sunt pachete separate (gratuite) pentru Jomres. Puteți reinstala pachetele pe această pagină.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Reinstalați pachetele bibliotecii');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Imposibil de șters tipul de proprietate deoarece este încă utilizat de unele proprietăți. Trebuie să schimbați mai întâi aceste proprietăți într-un alt tip de proprietate înainte de a încerca să o ștergeți. UID-urile de proprietăți care împiedică ștergerea:');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Adrese de e-mail aleatorii');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Oferă e-mailuri aleatorii');
jr_define("_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION", "Puteți permite sistemului să genereze adrese de e-mail aleatorii în fereastra pop-up Quick Booking din tabloul de bord. Acest lucru permite managerilor și recepționerilor să creeze rezervări pentru oaspeți pentru care nu au adrese de e-mail, este destinat să funcționeze ca economie de timp pentru site-urile cu numeroși recepționeri / manageri care înțeleg că aceste e-mailuri aleatorii nu vor fi folosite niciodată pentru o comunicare reală, scopul este de a evita faptul că în Jomres toți invitații trebuie să aibă adrese de e-mail. TREBUIE să furnizați și un domeniu în câmpul următor.");
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Domeniu de e-mailuri aleatorii');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Acesta nu ar trebui să fie un domeniu normal de e-mail, cum ar fi Gmail sau Outlook. În schimb, acesta poate fi fie propriul dvs. domeniu, fie altceva în întregime, cum ar fi mysite.emails');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Zona de încărcare');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Fără rol de utilizator');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepționist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Manager proprietate');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspendat');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Șters din CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Dacă vă place Jomres, vă rugăm să luați în considerare lăsarea unei recenzii pe unul dintre aceste site-uri');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Sunt o persoană drăguță, am lăsat deja o recenzie');

jr_define('_LICENCE_PROMPT_DEAR', 'Dragă');
jr_define('_LICENCE_EXPIRED', ', cheia dvs. de licență Jomres a expirat, așa că "vă lipsesc aceste caracteristici și beneficii extraordinare!');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Actualizări de pluginuri și lansări de pluginuri noi');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Numai membri exclusivi Asistență prin e-mail / bilete');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Actualizări Jomres Core fără griji');
jr_define('_LICENCE_EXPIRED_POST', 'Conectați-vă la noi pentru soluții de plată fără probleme și obțineți acces la toate pluginurile și serviciile de asistență numai pentru membri.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Obțineți acces la toate pluginurile acum!');

jr_define('_LICENCE_INVALID_KEY', 'Din păcate, nu pare să folosiți o cheie de licență Jomres validă, deci vă lipsesc aceste caracteristici și beneficii extraordinare!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Plugins </a> care extind mult funcționalitatea Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Numai membri exclusivi Asistență prin e-mail / bilete');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Actualizări Jomres Core fără griji');
jr_define('_LICENCE_INVALID_POST', 'Conectați-vă la noi pentru soluții de plată fără probleme și obțineți acces la toate pluginurile și serviciile de asistență numai pentru membri.');
jr_define('_LICENCE_INVALID_START', 'Obțineți acces la toate pluginurile acum!');
jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Utilizatori');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abonamente');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Facturi');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Traduceri');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Rapoarte');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Setări');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total proprietăți în sistem');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Proprietăți publicate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Proprietăți nepublicate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Proprietăți aprobate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Proprietăți care necesită aprobare');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total recenzii');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Recenzii nepublicate');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Revizuirea rapoartelor');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Tipul de proprietate al acestei proprietăți nu este publicat, este posibil să nu apară în rezultatele căutării. Contactați administratorul site-ului pentru a publica tipul de proprietate sau modificați tipul de proprietate în pagina Editați proprietatea.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Actualizați tipul de proprietate');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Venituri (sume plătite)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nu se poate șterge caracteristica de proprietate "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"deoarece este utilizat de următoarele proprietăți:');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Această pagină efectuează un test de bază al API-ului REST utilizând funcționalitatea încorporată în Jomres. Apelează API-ul REST Jomres pentru a vedea dacă primește un răspuns valid.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Serverul a apelat această adresă URL pentru a vedea dacă răspunsul este valid:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Pagina a primit acest răspuns:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Testul pare să funcționeze conform așteptărilor, probabil că nu veți avea nicio problemă la primirea cererilor API REST de la restul internetului.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Testul a eșuat, căutați în câmpul Răspuns, dacă arată mult html sau ați primit un mesaj 404, atunci serverul dvs. redirecționează apelurile către o altă adresă URL. Acest lucru vă va împiedica să primiți API apeluri. ');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Test de sindicalizare');
jr_define("_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO", "Serverul de aplicații Jomres menține o listă cu toate site-urile Jomres. Aceasta ne permite să construim o rețea de sindicalizare. Această rețea este concepută pentru a permite utilizatorilor noștri să afișeze proprietăți de pe alte site-uri, propriile site-uri, în special pentru site-urile noi, pentru a construi o prezență SEO pe net. Scopul este ca toate site-urile Jomres să lucreze împreună, creând încredere în rețea. Nu există nicio taxă pentru acest serviciu.");
jr_define("_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED", "Site-ul dvs. nu este în prezent listat pe serverul de aplicații Jomres, care face parte din rețeaua de sindicare. Acest server va încerca din nou să adauge acest server la rețea în următoarele 6 pagini. puține încărcări de pagini, acest lucru nu se modifică, vă rugăm să verificați dacă testul de conectivitate de mai sus trece testele. Notă, serverele localhost nu pot fi adăugate la rețea.");
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Felicitări, serverul dvs. este listat pe serverul aplicației Jomres.');
jr_define('_JOMRES_SYNDICATION_TITLE', 'Proprietăți sindicate');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Iată câteva alte proprietăți disponibile din rețeaua noastră de proprietăți');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Statistici de sindicare');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Felicitări, serverul dvs. este listat în rețeaua de sindicalizare Jomres. Proprietățile dvs. vor începe să apară în curând pe alte site-uri Jomres, dacă acestea nu sunt deja afișate.');
jr_define("_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED", "Instalarea dvs. nu face parte din Rețeaua de sindicalizare Jomres, prin urmare proprietățile dvs. nu sunt afișate pe alte site-uri bazate pe Jomres și nu puteți beneficia de această publicitate gratuită.");
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Instalații active Jomres:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Numărul total de instalații Jomres care partajează proprietățile Jomres Syndication Network pe site-urile lor.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Acesta este numărul de proprietăți disponibile în JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Properties afișează:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'În total, de câte ori o proprietate Jomres a fost legată de la un alt site bazat pe Jomres.');
jr_define("_JOMRES_SYNDICATION_STATS_BLURB", 'Rețeaua sindicală Jomres (JSN)) este o funcție gratuită disponibilă pentru toți utilizatorii Jomres. Scopul este de a vă oferi publicitate gratuită a proprietăților dvs. pe alte site-uri bazate pe Jomres. Scopul este de a vă ajuta vă scoateți site-ul rapid de pe teren, oferind publicitate gratuită, astfel încât proprietățile dvs. să fie recunoscute și de încredere deoarece sunt legate de site-uri web de înaltă încredere, cu relevanță ridicată, care sunt deja bine cunoscute de motoarele de căutare. Consultați acest lucru <a href = "https: //www.jomres.net/features/jomres-syndication-network" target="_blank"> articol de pe site-ul nostru </a> și <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target="_blank"> manualul </a> pentru mai multe informații. ');


jr_define('GUEST_PROFILE_INFORMATION', 'Acestea sunt datele profilului dvs. de oaspeți, câmpuri cu acest simbol <i class = "fa fa-users" aria-hidden = "true"> </i>
 sunt vizibile public, în timp ce câmpurile cu acest simbol <i class = "fa fa-user-secret" aria-hidden = "true"> </i> pot fi văzute doar de dvs., de gazdele dvs. și de administratorii site-ului. <br/> <br/> Gazdele pot vedea informații private numai dacă ați creat deja o rezervare cu acestea. <br/> <br/> Informațiile dvs. sunt criptate în siguranță și stocate în baza noastră de date folosind criptarea AES-256. ');

jr_define('GUEST_PROFILE_OPTIONAL', 'Aceste câmpuri sunt opționale, cu toate acestea gazdele pot folosi informațiile de aici pentru a stabili dacă au impresia că pot avea încredere în dvs., de aceea este mai bine să adăugați informațiile. Amintiți-vă, solicitați să rămâneți în proprietate și vă pot refuza dacă consideră că nu sunteți potrivit sau dacă biografia dvs. nu conține suficiente informații. ');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Permis de conducere');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Număr pașaport');
jr_define('GUEST_PROFILE_IBAN', 'numărul IBAN');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Despre mine');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Această secțiune "Despre mine" este vizibilă publicului, așa că nu introduceți nicio informație privată. Acestea fiind spuse, faceți un efort pentru a pune cât de mult vă simțiți confortabil, precum pasiunile, ceea ce face pentru a trăi, hobby-urile tale etc. Poți folosi Markup pentru a-i oferi un pic de jazz. Gazdele vor dori să simtă că pot avea încredere în tine cu proprietățile lor. Asigură-te că poza ta este o imagine reală a ta, nu câinele tău sau mașină (da, băieți, vorbim cu voi!). ');

jr_define('GUEST_PROFILE_PREFERENCES', 'Introduceți aici orice cerințe speciale, cum ar fi nevoile de ușurință a accesului. Nu vor fi afișate în profilul dvs. public, dar vor fi adăugate la informațiile de rezervare atunci când efectuați o rezervare.');

jr_define('VIEW_HOST_PROFILE', 'Profilul gazdei');

jr_define('GUEST_PROFILE_TITLE', 'Profil invitat');
jr_define('GUEST_PROFILE_TITLE_MY', 'Profilul meu');

jr_define('GUEST_PROFILE_WELCOME', 'Bună, permiteți-mi să vă spun puțin despre mine.');
jr_define('GUEST_PROFILE_MY_NAME', 'Numele meu este');
jr_define('GUEST_PROFILE_I_COME_FROM', 'și eu vin din');
jr_define('GUEST_PROFILE_IN', 'regiune în');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Informațiile mele private');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Facem tot posibilul să validăm informațiile despre oaspeți și gazde, totuși ar trebui să vă faceți propria diligență și să decideți personal dacă această persoană este sau nu de încredere.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Proprietățile mele');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Recenziile mele');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Iată ce am spus despre această proprietate:');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Am acordat acestei proprietăți un scor de:');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Recenziile mele');
jr_define('GUEST_PROFILE_OF_ME', 'Ce spun alții despre mine');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Ce a spus această gazdă despre mine');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Recenzia mea despre acest oaspete');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Iată câteva exemple de recenzii ale oaspeților pentru a muta mingea: <br/>

<ul>
<li> (numele oaspeților) a fost o plăcere de găzduit! Au lăsat spațiul curat și au fost liniștiți tot weekendul. Au avut o comunicare ușoară și aștept cu nerăbdare să-i rămână din nou cu mine! </li>
    <li> Mi-a plăcut să am (numele oaspeților) pentru că au reușit să trateze locul cu respect, să se distreze minunat și să se bucure de zonă. Au fost minunați cu închirierea spațiului și sper să-i găzduiesc din nou. </li>
    <li> Toate regulile mele de casă au fost respectate cu (numele oaspeților) și au putut intra și pleca cu ușurință. Mi-a plăcut să le am acolo, deoarece erau respectuoși și liniștiți. Le recomand cu tărie altora! </li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Ne pare rău, nu pot găsi acel utilizator. Cel mai probabil nu și-au completat încă detaliile contului.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Gazdă');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres este construit pe cadrul Bootstrap, deci trebuie să îl utilizați pe o temă bazată pe Bootstrap. Vă recomandăm una bazată pe Bootstrap 3. Dacă nu aveți acces la o temă, vă recomandăm să utilizați tema Jomres Leohtian pentru Wordpress pe care o poți <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> descărcați de aici. </a> ');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervare marcată ca No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Rezervări');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Fără spectacole');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'statistici JSN pentru acest utilizator');

jr_define("BOOKING_NOSHOW_INFO", "Informațiile privind rezervarea și lipsa afișării sunt extrase din rețeaua Jomres Syndicate Network la momentul rezervării. Sunt preluate din date anonimizate și pot fi utilizate de dvs. pentru a decide dacă acest oaspete riscă să nu îndeplinească rezervarea. Dacă sistemul raportează că datele sunt necunoscute, probabil că acest sistem nu este recunoscut în rețea.");

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Necunoscut');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Cheie cadru de gestionare a canalelor');
jr_define("CMF_CONFIG_KEY_DESC", "Cheia de licență Channel Management Framework. Va trebui să furnizați această cheie pentru a putea descărca pluginurile Channel Management Framework.");

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Proprietatea dvs. nu a fost aprobată');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Proprietatea dvs. a fost neaprobată. Dacă credeți că acest lucru a fost făcut din greșeală, vă rugăm să ne contactați.");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Este un tip de invitat copil?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Setați acest lucru la Da dacă acest tip de invitat ar fi clasificat ca tip de invitat copil.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Dacă doriți să taxați pe persoană pe noapte, va trebui să creați câteva tipuri de oaspeți.");
jr_define("_JOMRES_GUESTTYPES_INSTRUCTIONS", "Puteți crea oricâte tipuri de oaspeți aveți nevoie, încercați să începeți prin crearea unui singur tip de invitat numit Adult. Lăsați toate setările la valorile lor implicite. Apoi, dacă de exemplu doriți să acordați copiilor sub 12 ani o reducere de 50%, ați crea un nou tip de invitat și numiți-l Copii sub 12 ani. Setați opțiunea Adăugați varianță? la - (negativ) și setați Varianța la 50. Aceasta înseamnă atunci când copiii sunt adăugați la o rezervare, aceștia plătesc 50% din costul camerei. ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Setați prețurile manual");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Setează nopțile minime manual");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Setează nopțile minime");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Setați <em> prețul pe noapte </em> după ziua săptămânii");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Setați <em> prețul pe noapte </em> după intervalul de date");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Setați <em> nopți minime </em> după intervalul de date");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Selectorul de date și introducerea tarifului vă permit să setați un preț pentru un anumit interval de date. Alegeți o dată de început și de sfârșit, introduceți un preț și faceți clic pe butonul Setare preț pe noapte.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Selectorul de date și intrările minime de nopți vă permit să setați o valoare pentru nopțile minime pentru un anumit interval de date. Alegeți o dată de început și de sfârșit, introduceți un număr pentru nopțile minime și faceți clic pe Setare nopți minime '. ");

jr_define("_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO", "Utilizați această listă derulantă pentru a schimba între stabilirea prețurilor pentru datele individuale, pentru setarea nopților minime pentru datele individuale. Puteți utiliza selectorul <em> după ziua săptămânii </em>, selectorul <em> după dată range </em> picker sau setați prețurile / nopțile minime editând manual datele. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Utilizați această listă derulantă pentru a schimba între stabilirea prețurilor pentru date individuale, pentru setarea nopților minime pentru datele individuale. Puteți utiliza selectorul <em> după intervalul de date </em> sau puteți seta prețurile / nopțile minime până la editarea manuală a datelor. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Setați prețurile sau nopțile minime");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Setați <em> nopți minime </em> după ziua săptămânii");
jr_define("_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO", "Câmpurile din ziua săptămânii vă permit să setați un număr minim de nopți pentru o anumită zi a săptămânii, după ce faceți clic pe butonul zilei săptămânii, toate zilele săptămânii vor fi setate la setarea respectivă a nopților minime. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Prețuri fixate manual / nopți minime");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Setați prețurile");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Setează nopți minime");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Pe noapte");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Min nopți");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Max nopți");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Aici vă puteți crea tarife, care sunt asociate tipurilor de camere pe care le aveți în proprietatea dvs.");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Opțiunile cele mai frecvent utilizate");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instrucțiuni");

jr_define("_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS", "Dacă doriți să adăugați prețuri diferite pentru un număr diferit de oaspeți, atunci <em> puteți crea mai mult de mai multe tarife pentru fiecare tip de cameră </em> și aveți valori min / max ale oaspeților diferite în aceste tarife. ");

	jr_define('_JOMRES_MICROMANAGE_INFO', "Dați un nume tarifului, definiți numărul maxim de nopți și numărul minim și maxim de oaspeți necesari în formularul de rezervare înainte ca tariful să fie oferit.<br/><br/> Utilizați panoul de selectare a datei pentru a adăuga prețuri și setări minime de nopți la o serie de date sau pentru a edita direct intrările. Dacă nu doriți ca tariful să fie oferit deloc la anumite date, lăsați prețul setat la 0 (zero) pe acele date. <br/><br/> Puteți avea nopți minime diferite la date diferite, așa că dacă doriți rezervări mai lungi în timpul săptămânilor de festival/conferință, puteți seta nopți minime să fie mai mari doar în acele perioade.<br/ ><br/>Dacă taxați Per Person Per Pight (PPPN), puteți activa acea setare în Setări > Configurare proprietăți > fila Tarife și monedă.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Opțiuni suplimentare");
jr_define("_JOMRES_MICROMANAGE_EXTRA_OPTIONS", "Acestea sunt opțiuni suplimentare care nu sunt atât de frecvent utilizate, dar totuși disponibile pentru dvs. <br/> <strong> Ignorați PPPN </strong> înseamnă Ignorați pe persoană pe noapte. Puteți avea mai multe tarife diferite pentru același tip de cameră, de exemplu una dintre care se percepe pe persoană pe noapte și una care nu. <br/> <strong> Permiteți weekendurile </strong> Opțiunea Permiteți weekendurile vă oferă opțiunea de a face un tarif care este doar disponibil în timpul săptămânii, de exemplu, dacă doriți un tarif special pentru călătorii de afaceri. În acest caz, ați seta opțiunea la Nu și minul de nopți la 1 și maximul de nopți, cel mult 5. <br/> <strong> Weekend-uri numai </strong> Opțiunea Numai weekend este inversă opțiunii Permite weekenduri. Ceea ce considerați că sunt zile de weekend poate fi configurat în setările dvs. de configurare a proprietății. Acest lucru vă oferă posibilitatea de a defini o rată numai pentru weekend pe care ați putea dori să o ofertă pentru evenimente speciale. <br/> <strong> Check-in Ziua săptămânii </strong> Această opțiune vă oferă posibilitatea de a forța înregistrarea să se facă numai în anumite zile ale săptămânii și este utilizată cel mai bine împreună cu configurația proprietății> fila Rezervări> Opțiuni perioade fixe. Majoritatea utilizatorilor vor dori să lase această opțiune setată la Toate. <br/> Ultimele două opțiuni, <strong> Camerele minime deja selectate </strong> și <strong> Numărul maxim de camere deja selectate </strong> sunt foarte specializate și utile proprietăților cu tarife extrem de complicate. <em> Cu excepția cazului în care aveți o nevoie specifică, ar trebui să lăsați aceste opțiuni în pace. </em> Utilizați-le dacă doriți ca acest tarif să fie oferit numai atunci când oaspetele a selectat deja N număr de camere în formularul de rezervare, deci de exemplu ați putea avea un tarif de bază în cazul în care opțiunile respective sunt lăsate implicit și un al doilea tarif în cazul în care opțiunea de camere minime deja selectate este setată la 1, atunci acest al doilea tarif va fi oferit în formularul de rezervare după ce ați selectat o cameră. ");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Puteți crea tarife multiple pentru același tip de cameră, astfel încât să puteți crea un tarif pentru zilele min / max de 1 - 7 și un al doilea tarif în care zilele min sunt 7, zilele max 14 și așa mai departe. Acest lucru vă permite să creați scheme de prețuri atât de simple sau de complicate pe cât aveți nevoie. De asemenea, vă permite să creați tarife multiple cu condiții diferite, astfel încât să puteți avea un al doilea set de tarife în cazul în care prețul este mai mic pentru Bed & Breakfast și un alt set de tarife mai scumpe pentru pat, mic dejun și masă de seară. ");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Setați doar zilele de selecție a datei");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Categorii de proprietăți');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Editați categoria de proprietăți');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Vă mulțumim că ați instalat Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "Administrarea proprietății se efectuează în pagini orientate spre public, nu în zona administratorului.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Dacă nu sunteți familiarizați cu Jomres vă rugăm să vizitați secțiunea Ajutor> Pagina de pornire.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Alăturați-vă sindicatului Jomres");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Odată ce ați configurat site-ul și sunteți gata să începeți să primiți vizitatori, alăturați-vă sindicatului Jomres.net și afișați proprietățile dvs. pe alte site-uri Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Aveți nevoie de cel puțin o cameră dintr-unul dintre următoarele tipuri înainte de a putea crea un tarif:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Accesați Setări> Camere și creați mai întâi o cameră, după ce ați făcut acest lucru, veți putea crea un tarif pentru acel tip de cameră.");

jr_define('JOMRES_PLATFORM', "Platforma Jomres");


jr_define('JOMRES_PLATFORM_CONNECTED', "Conectat");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Setați acest lucru la Da dacă v-ați conectat deja contul Stripe la Platforma Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Acesta este ID-ul contului dvs. Stripe care poate fi găsit în tabloul de bord Stripe din Setări> Informații despre cont și arată ca acct_xxxxxxxxx Ați utiliza acest câmp dacă aveți mai multe instalații Jomres și doriți să utilizați același cont în toate toate site-urile și v-ați conectat deja la noi. Dacă nu v-ați conectat la Platforma Jomres, nu este suficient să introduceți detaliile dvs. aici. În schimb, vizitați opțiunea de meniu Conectați-vă din bara de instrumente, sub secțiunea Ajutor. Dacă doriți pentru a testa plățile, în fila Depanare din Configurarea site-ului setați site-ul dvs. de la producție până la dezvoltare. ");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe cheia secretă live");
jr_define("JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC", "Accesați Programatori> chei API din tabloul dvs. de bord Stripe pentru a găsi cheile secrete. Acestea sunt utilizate de sistem pentru a verifica datele de rezervare returnate din formularul de plată sunt valide și că depozitele au fost plătite înainte de salvarea rezervării . ");

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Cheie secretă de testare a benzii");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Mod tarifar standard');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Câți oameni poate găzdui această proprietate?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Numărul de oaspeți din prețul dvs. zilnic');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Preț suplimentar pentru adulți');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Copii');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'De persoană pe noapte?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 zile modificator');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Reducere la tariful zilnic dacă rezervarea este de 7 zile sau mai mult. Lăsați acest set la zero dacă nu doriți să se aplice reducerea.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 zile modificator');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Reducere la tariful zilnic dacă rezervarea este de 30 de zile sau mai mult. Lăsați acest set la zero dacă nu doriți să se aplice reducerea.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adulți');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Preț bazat pe 2 adulți');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervare redusă de la');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'la');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'deoarece rezervarea este mai mare de 7 zile.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'deoarece rezervarea este mai mare de 30 de zile.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Taxe municipale');
jr_define('JOMRES_CITY_TAX_VALUE', 'Valoarea taxei orașului');
jr_define('JOMRES_CITY_TAX_METHOD', 'Metoda de calcul al impozitelor');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Taxă unică');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Pe noapte');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per invitat');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per invitat pe noapte');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procentul valorii rezervării');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Taxă de curățare');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Costul taxei de curățare');


jr_define('JOMRES_COMPATABILITY_MODE', 'Modul de configurare a proprietății de forțare a compatibilității?');
jr_define("JOMRES_COMPATABILITY_MODE_DESC", "Modul de configurare a proprietății de compatibilitate impune să se întâmple mai multe lucruri. În versiunile mai vechi ale Jomres, administratorii de proprietăți ar putea alege modul de editare a tarifelor pe care să îl folosească și o varietate de alte setări (dintre care unele pot părea confuze) pot avea Activarea configurației de compatibilitate obligă toate proprietățile noi să utilizeze doar modul de editare a tarifelor standard, care modelează funcționalitatea de configurare a proprietății booking.com în ceea ce privește prețurile, prețurile pentru copii etc. Se recomandă ca pentru instalațiile care au fost create după 9.22. .0, această opțiune ar trebui să fie setată la Da, dar pentru instalațiile mai vechi depinde de dvs. să decideți dacă noile proprietăți trebuie setate automat în modul Compatibilitate atunci când sunt create. ");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Acceptați copii cu vârsta sub 18 ani?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Setați această opțiune la Da dacă permiteți copiii. Dacă da, atunci în meniul Setări veți avea o opțiune numită Politici pentru copii unde puteți edita setările legate de copii.");
jr_define('JOMRES_POLICIES_CHILDREN', 'Politici privind copilul');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'La ce vârste sunt permise copiii?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Pe copil, pe noapte');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Pe copil, pe sejur');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Tarife pentru copii');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Rată nouă pentru copii');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Editează rata copilului');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Creați aici tarifele gratuite sau plătite pentru copii. Tarifele se vor aplica numai atunci când ați creat niveluri de ocupare pentru tipurile de camere.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Age from');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Age to');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'pe noapte sau pe sejur?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Dacă este zero sau nu, copiii din acest interval de vârstă vor fi liberi.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Vârste la checkin');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Nivele de ocupare');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximum adulți');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum copii');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Ocupare maximă');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Editați nivelul de ocupare pentru:');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Editați nivelurile de ocupare pentru acest tip de cameră. Nu includeți oaspeții care dorm pe pătuțuri (acestea sunt adăugate prin crearea unui Extra)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Pentru fiecare adult suplimentar, cât ar trebui să fie taxați?');

jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Nu ați configurat încă ratele pentru copii.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Setați acum rata copilului');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Ați configurat proprietatea pentru a permite copiilor, dar nu ați stabilit încă niciun nivel de ocupare pentru copii.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Setați nivelurile de ocupare');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'De fiecare dată când editați o cameră sau tipul dvs. de proprietate ar trebui să verificați și să actualizați nivelurile de ocupare pentru proprietatea / camerele dvs. deoarece acestea afectează numărul de oaspeți care pot fi acceptați în formularul de rezervare.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adulți');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Copii');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Nivelul opțiunilor de administrare');
jr_define("_JOMRES_CONFIG_LEVEL_DESC", "Jomres are multe opțiuni de meniu și de configurare pe care le puteți folosi atunci când vă configurați site-ul. Majoritatea lor nu le va trebui niciodată să le schimbați, astfel încât acestea să fie ascunse în mod implicit. Puteți alege să afișați acele opțiuni prin setarea nivelul Opțiuni de administrare. Nivelul de bază vă arată exact ceea ce aveți nevoie atunci când configurați un site pentru prima dată. Nivelul comun vă arată acele opțiuni care sunt modificate cel mai frecvent, iar Totul vă arată toate setările și opțiunile meniurilor posibile din zona administratorului. ");
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Totul');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Putem colecta informații despre modul în care utilizați Jomres?');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE", "Am dori să colectăm informații despre modul în care utilizați Jomres. Nu vor fi stocate informații care pot fi identificate personal, utilizarea va fi anonimizată și utilizată doar pentru a ne ajuta să înțelegem modul în care oamenii folosesc Jomres.");
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Da, este în regulă');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nu, nu sunt de acord');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Vei face rezervări pentru mai multe proprietăți?');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE", "Jomres poate fi utilizat pentru site-uri cu o singură proprietate sau cu mai multe proprietăți. Dacă veți efectua rezervări pentru o singură proprietate, atunci multe opțiuni vor fi redundante și potențial confuze. Puteți modifica această setare ulterior în Setări> Site Configurare> Fila funcționalitate portal.");
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Doar o proprietate');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Voi afișa mai multe proprietăți');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Ce versiune a cadrului Bootstrap acceptă șablonul / tema dvs.?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Fiecare versiune a cadrului Bootstrap necesită marcaj html ușor diferit. Jomres are trei seturi de seturi de șabloane compatibile Bootstrap, unul pentru fiecare versiune Bootstrap. Trebuie să vă asigurați că îl configurați pentru a utiliza setul de șabloane adecvat. Dacă apoi nu ieșiți, cum ar fi aspectul, modurile și meniurile, nu vor funcționa corect. Dacă decideți să utilizați ulterior un șablon / temă cu o versiune Bootstrap diferită, puteți schimba setul de șabloane Bootstrap pe care Jomres ar trebui să îl utilizeze în Admin> Jomres> Setări > Fila Misc. <br/> <br/> Joomla 3 este distribuit în mod implicit cu Bootstrap 2, Joomla 4 va folosi Bootstrap 5. Șablonul Jomres Leohtian (Joomla) și tema (Wordpress) utilizează Bootstrap 3. Pot fi diferite șabloane / teme distribuite cu propriile fișiere Bootstrap, așa că, dacă aveți dubii, contactați dezvoltatorul șablonului / temei. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Decupați zecimale din prețurile de ieșire?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Aplicați grupul prin corecție?');
jr_define("_JOMRES_SEND_GROUP_BY_FIX_DESC", "Unele instalații mysql pot avea o problemă cu interogările Jomres în lista Proprietăți listă, Listează invitați și Listează facturi. Dacă acele pagini spun că afișează rezultatele X din Y, dar nu apare nimic în listă, atunci setarea această opțiune pentru Da poate rezolva problema. Nu va fi dacă vă aflați în găzduire partajată și serviciul de găzduire nu permite utilizatorului dvs. mysql să emită comanda SET GLOBAL sql_mode = ");
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Aceasta este o proprietate de canal, nu poate fi administrată local, vizitați pagina de cadru de gestionare a canalului pentru a găsi legătura de administrare la distanță a proprietății');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Fără bootstrap în temă");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Legături social media');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Pune aici numele contului tău de socializare, de exemplu "jomres", nu întreaga adresă URL');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Lista de limbi vorbite de organizația dvs., separată prin virgulă');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url la sigla organizației dvs.');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres actualizat');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Există o nouă versiune de Jomres disponibilă. Trebuie să actualizați înainte de a putea continua să utilizați Jomres, deoarece actualizările îmbunătățesc funcționalitatea și vă asigurați că instalarea rămâne sigură.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Actualizează Jomres acum');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Actualizări de plugin');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Există versiuni noi de pluginuri disponibile în managerul de pluginuri. Trebuie să actualizați toate pluginurile înainte de a putea continua să utilizați Jomres, deoarece actualizările îmbunătățesc funcționalitatea și vă asigurați că instalarea rămâne securizată.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Plugin-uri de actualizat');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Dacă licența dvs. nu mai este valabilă, puteți obține o nouă cheie de licență de pe site-ul nostru.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Actualizează pluginuri');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Obţine cheie nouă');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Salvează cheia nouă');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Imagini de tip de proprietate");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Aveți nevoie de ajutor pentru rezervare?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Apelați echipa noastră de servicii pentru clienți la numărul de mai jos pentru a vorbi cu unul dintre reprezentanții noștri care vă va ajuta cu toate nevoile dvs. de vacanță.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "De ce să rezervați cu noi?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Oferim cele mai bune tarife de rezervare");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Avem cele mai bune proprietăți la prețuri pe piață în prezent.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Fără taxe de rezervare. Economisiți bani!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "O mare selecție de proprietăți");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " proprietăți");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " recenzii oaspeților");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Suntem mereu aici");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Apelați-ne sau trimiteți-ne un e-mail, oricând");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Obțineți asistență 24 de ore înainte, în timpul și după călătoria dvs.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Resele sociale");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Găsiți-ne pe rețelele sociale");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Remarcabil");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Excepțional");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fabulous");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Superb");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastic");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Foarte bine");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Bine");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Înregistrare nouă");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Reducere");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Unde vrei să mergi?');
	jr_define('DATA_SOURCES_TITLE', "Actualizează sursele de date");
	jr_define('DATA_SOURCES_TITLE_INFO', "Sursele de date s-au reîmprospătat. Sursele de date sunt utilizate de câmpurile de introducere de completare automată din widgetul de căutare și sunt de obicei actualizate automat, totuși această pagină forțează actualizarea manuală a datelor dacă este necesar.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Pentru a trimite o cerere de simbol, trimiteți cererea la această adresă URL");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Scriptul de proprietate a vizualizării principale");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid-ul proprietății de vizualizat");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Șablonul implicit este property_details.html, cu acest argument puteți defini un alt șablon pentru detalii de proprietate de afișat.");

	jr_define('JOMRES_UPDATES_TITLE', 'Actualizări Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Această pagină poate descărca și instala cea mai recentă versiune de Jomres pentru dvs.. Folosește propria sa funcționalitate și nu pe cea a CMS-ului gazdă, prin urmare, dacă apare o problemă în timpul actualizării CMS-ului gazdă, puteți utiliza această pagină pentru forțați o reinstalare a celei mai recente versiuni de Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Administratorii de proprietăți pot folosi modul de editare din frontend pentru a personaliza șirurile pentru fiecare proprietate, totuși acest lucru poate funcționa numai dacă setarea dvs. de permalink WordPress este setată la Simplu (http://www.domain.com/?) p=123). După ce ați făcut acest lucru, utilizatorii de front-end vor putea personaliza șiruri, cum ar fi numele camerelor și alte etichete, care sunt specifice proprietăților unice. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Mod editare etichete');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Această caracteristică este folosită pentru a schimba etichetele articolelor, de obicei în diferite limbi.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Modul de editare vă permite să redenumiți etichetele care sunt unice pentru proprietăți individuale. Când utilizați modul Editare pentru a redenumi o etichetă, modificarea va apărea numai pe lista proprietăților respective. De exemplu, pe o proprietate pe care ați putea-o dori pentru a folosi cuvântul „Prețuri” și pe altul cuvântul „Prețuri”. Nu toate etichetele pot fi schimbate, de exemplu, numele tipurilor de cameră sunt etichete la nivelul întregului site, deci nu pot fi schimbate, dar de obicei orice este unic pentru o proprietate individuală poate fi schimbat.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Dacă site-ul acceptă mai multe limbi, în timp ce utilizați o singură limbă, puteți crea un articol care este unic pentru o proprietate individuală. Atunci când vă schimbați limba activă, puteți utiliza modul de editare pentru a redenumi eticheta respectivă, introducerea unei traduceri adecvate în limba curentă. Puteți continua să schimbați limba activă pentru a introduce o traducere adecvată pentru acea etichetă pentru fiecare limbă pe care o acceptă site-ul.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Comutator mod editare etichete');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'În această captură de ecran vedem comutatorul modului de editare. Modul de editare este OFF și etichetele apar ca în mod normal: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Modul de editare etichetă activat');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'În această captură de ecran vedem că, în modul Editare, etichetele pe care le poți redenumi sunt evidențiate:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Selectaţi elementul de modificat');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Când este selectată o etichetă apare o fereastră pop-up:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Schimbați eticheta');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Folosiți formularul mic pentru a schimba eticheta. Faceți clic pe Bifă pentru a finaliza sau faceți clic pe X pentru a anula editarea:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Etichetă schimbată');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Odată ce ați salvat modificarea, atunci eticheta este actualizată în pagină. Puteți dezactiva modul de editare acum:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Traduceri');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'Pe această pagină puteți traduce etichete dintr-o limbă în alta. Când vizitați pagina, veți vedea șirurile pe care le-ați creat deja și valoarea lor în orice limbă pe care o utilizați în prezent. În partea de sus setați limba țintă, apoi pentru etichetele pe care doriți să le traduceți, faceți clic pe etichetă și o fereastră pop-up vă va permite să introduceți noua traducere. Pentru rânduri mai lungi de text puteți lipi textul din altă sursă. Amintiți-vă că orice HTML va fi eliminat. .<br/>
Puteți lăsa limba țintă setată la limba dvs. curentă și puteți utiliza această pagină pentru a redenumi articolele aici, în loc să le vizitați paginile individuale.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Limba ţintă');

	jr_define('API_CLIENTS_INFO', 'Clienții API sunt perechi ID client/chei secrete care permit sistemelor la distanță să utilizeze caracteristici API pe care le acordați permisiunea de a le utiliza. Pe această pagină puteți crea câte perechi de chei Client/Secrete aveți nevoie, fiecare cu orice combinație de permisiuni de care aveți nevoie.');
	jr_define('CLIENT_TOKEN', 'Access Token');
	jr_define('CLIENT_TOKEN_INFO', "Jetonele de acces pot fi solicitate folosind ID-ul clientului și Secretul. Este posibil ca unii clienți să aibă deja un jeton de acces creat pentru acesta, caz în care puteți utiliza acest jeton de acces. Dacă credeți că jetonul ar fi fost compromis, sau vrei doar să-l schimbi, poți expira jetoanele clientului. Toate jetoanele asociate cu perechea client/secretă vor fi expirate.");
	jr_define('DELETE_TOKEN', 'Expirare Tokens');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Alege-ți moneda");
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Alegeți limba dvs.");
	jr_define('JOMRES_BS5_TOP_PANEL_REGISTER',"Înregistrare");
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Conectează-te");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Enumerați proprietatea dvs.");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Trebuie să vă înregistrați și să vă autentificați mai întâi");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Afișați filtrele");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Ascunde filtrele");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Textul afișat pe pagini este stocat în fișiere de limbă. Sistemul Jomres de afișare a șirurilor de limbă pe pagină înseamnă că nu trebuie să editați direct aceste fișiere de limbă. În schimb, puteți edita acele șiruri pe această pagină. făcând clic pe textul evidențiat și introducând noul text pe care doriți să îl afișați în formularul de introducere care se deschide. Când faceți clic pe bifa, atunci modificarea este salvată în baza de date. Aceasta înseamnă că toate modificările dvs. sunt stocate și nu sunt suprascrise atunci când actualizați Jomres. Dacă doriți să schimbați textul pentru diferite limbi, utilizați meniul derulant de selecție a limbii din dreapta sus, pentru a schimba limba curentă. Șirurile de text sunt uneori repetate în diferite locuri în fișierele de limbă, deoarece sunt folosite în diferite contexte, așa că nu uitați să utilizați funcția de căutare a browserului pentru a vă asigura că ați editat șirul corect.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Toate gestionarea proprietății se realizează în partea de front a site-ului dvs. În prezent nu sunteți autentificat ca administrator de proprietate, așa că vă rugăm să vă conectați mai întâi și apoi veți putea să vă administrați proprietățile.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Când Jomres este instalat pentru prima dată, acesta va crea un Super Property Manager pentru utilizatorul administrator și va adăuga o nouă opțiune la meniul principal numită Meniul principal. Nu accesați butonul de autentificare folosind acest meniu. pagina Rezervări pentru a începe administrarea proprietăților.");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'Pe această pagină puteți configura prin ce gateway-uri de plată doriți să primiți plăți de depozit. Veți avea nevoie de un cont pe gateway-ul de plată. Pagina de setări vă va oferi instrucțiuni despre cum să configurați gateway-ul. Dacă gateway-ul are un mod de testare și dacă modul de testare este activat, dvs., în calitate de administrator al proprietății, veți putea folosi gateway-ul de plată pentru a testa configurația dvs. Când modul de testare este dezactivat, numai utilizatorii care nu sunt Manager vor vedea gateway-urile de plată în timpul procesului de rezervare .');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Modul de testare");

	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "Modul de dezvoltare este activat, prin urmare, dacă utilizați această caracteristică, veți actualiza instalarea Jomres la filiala Nightly. Aceasta este cea mai recentă versiune de Jomres și poate fi sau nu stabilă. Dacă o faceți nu doriți să actualizați la Nightly, vă rugăm să vizitați Administrator > Jomres > Setări > Configurare site > fila Depanare și setați opțiunea Producție/Dezvoltare la Producție.");

	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN', "Includeți copiii în verificările nivelului de ocupare?");
	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN_DESC_MRP', "Atunci când oaspeții fac rezervări, camerele au un număr maxim de oaspeți pe care îi pot găzdui. Dacă numărul total de oaspeți depășește numărul de oaspeți pe care camerele selectate îi pot găzdui, atunci formularul de rezervare le va comunica. trebuie să aleagă mai multe camere.
 
  Dacă setați această opțiune la Da, atunci numărul de copii va fi inclus în numărul total de oaspeți. Dacă setați această opțiune la Nu, atunci numărul de copii nu va fi inclus în cecul pentru numărul total de oaspeți. Aceasta înseamnă că dacă setați această opțiune la Nu, atunci un grup de 4 persoane, de exemplu, 2 adulți și 2 copii, va putea rezerva o cameră dublă care poate găzdui 2 adulți. ");


	jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_SRP', 'Selectați Da dacă doriți să taxați per-persoană-pe-noapte.');

	jr_define('_JRPORTAL_FEATUREDLISTINGS_WORD_FEATURED',"Prezentate");

jr_define('_JOMRES_PROPERTYTYPE_FLAG_HIRE', 'Închiriere articole');

jr_define('SHORTCODE_INFO_JOMRES_V_JOMRES_SCRIPT',"Codurile scurte trebuie să fie împachetate în &#123;&#125; în Joomla sau [] în Wordpress (PARENTELE). Există trei moduri în care paginile generate de codurile scurte pot fi vizualizate. Prima este să adăugați un shortcode la un articol/pagină/modul în formatul BRACKETjomres shortcode argumentsBRACKET. Al doilea se află în fișierele șablon Jomres, unde ați pune BRACKETjomres_script shortcode argumentsBRACKET. Ultima modalitate este prin adresa URL, deci, de exemplu, în Joomla ați pune www. /domain.com/index.php?option=com_jomres&task=SHORTCODE&ARGUMENTS=ARGUMENTS. ");
