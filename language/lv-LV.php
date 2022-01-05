<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Ātrā rezervācija');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Rādīt profilus');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Naktsmītnes konfigurācija');
jr_define('_JOMRES_COM_MR_BACK', 'Atpakaļ');
jr_define('_JOMRES_COM_MR_YES', 'Jā');
jr_define('_JOMRES_COM_MR_NO', 'Nē');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Jauns');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Jauna naktsmītne');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Jauns viesis');
jr_define('_JOMRES_COM_MR_SAVE', 'Saglabāt');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Vārds');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ierodās');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Izbrauc');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Lietotājvārds');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Piekļuves līmenis');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Lietotājs modificēts');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Visas rezervācijas');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Labot rezervāciju');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Iebr./Aizbr.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Viesis');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Numurs');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Maksājums');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Vārds');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Uzvārds');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Īpašie pieprasījumi vai vēlmes');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Atcerieties, ka īpašie pieprasījumi var būt maksas pakalpojumi!');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Atcelt rezervāciju');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Mājas numurs vai nosaukums');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Iela');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Pilsēta');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pasta indekss');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fiksētā tālruņa numurs');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mob.tālruņa numurs');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-pasta adrese');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nevar atcelt šo rezervāciju, jo viesis jau ir ieradies.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depozīts nav samaksāts');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Apstiprināt atcelšanu');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervācija atcelta');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dienas līdz iebraukšanai');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Rezervācijas veids');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Pašu rezervācija');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Uzņemšana');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internets');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Numura nosaukums');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Numurs');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Stāvs');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Vai ir piekļuves iespēja invalīdiem?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maksimālais viesu skaits');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Numura tips');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Numura tipa apraksts');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Numura ekstru saraksts');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depozīts iemaksāts');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Ievadiet depozīta summu');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Kopā jāmaksā');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Depozīta izziņa');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervācija');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depozīts');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depozīts saglabāts');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Mūsu numuri');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Naktsmītne');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Naktsmītnes tips');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Labot klienta datus');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Vārds');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Uzvārds');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Māja/dzīvokļa numurs');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Iela');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Pilsēta');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Pasta indekss');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Fiks.tālruņa nr.');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mob.tālruņa nr.');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fakss');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Izvēlieties');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Diennaktis');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Kopā');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Skatīt numura/naktsmītnes piedāvājumu.');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Numuri');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Numura aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Numura tips');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Naktsmītne');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Naktsmītnes aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Numurs');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tips');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nosaukums');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nr');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Stāvs');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max cilvēku skaits');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Labot ierakstu');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Numura aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Aprīkojuma apraksts');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Numura aprīkojums pievienots');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Numura aprīkojums rediģēts');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Numura tips');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Numura/naktsmītnes tipa abreviatūra');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Numura/naktsmītnes tipa apraksts');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Numura/naktsmītnes tips pievienots');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Rediģēt ierakstu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nosaukums');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Iela, mājas nr./ vai māju nosaukums');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Apdzīvota vieta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Novads');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Valsts');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Pasta indekss');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tālr.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fakss');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-pasts');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Weblapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Naktsmītne rediģēta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Naktsmītnes aprīkojums');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Aprīkojuma abreviatūra');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Naktsmītnes aprīkojuma pilns apraksts');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Naktsmītnes aprīkojums rediģēts');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Cenas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarifu saraksts');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Apraksts');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Derīgs no');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Derīgs līdz');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Cena par diennakti');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min dienu skaits');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max dienu skaits');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min cilvēku skaits');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max cilvēku skaits');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Numura/naktsmītnes tips');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorēt samaksu no cilvēka par nakti.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Rādīt brīvdienu tarifus');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Labot ierakstu');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopēt ierakstu');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifs izdzēsts');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Labot tarifu');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervācija saglabāta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Viesis ieradies');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Viesis pavadīts');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Rezervāciju saraksts');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Kontrolpanelis');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Viesu administrēšana');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Naktsmītnes administrēšana');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Pārbaudīt pieejamību');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Vārds');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Uzvārds');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Mājas nosaukums/dzīv.numurs');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Iela');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Apdzīvota vieta');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pasta indekss');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fiks.tālruņa numurs');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mob.tālruņa numurs');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Pēc šāda pieprasījuma nav pieejami numuri');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Paldies par Jūsu rezervāciju. Ceram, ka Jūsu atpūta būs lieliska.<br><br> <b>Lūdzu atcerieties, ka šī rezervācija tiks apstiprināta ar apstiprināšanas e-pastu no mums. Ja Jūs nesaņemat apstiprinājuma e-pastu, lūdzu sazinieties ar mums.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Viesis ieradies ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Viesis izmitināts ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Viesis jāpavada ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Papildinājumi');
jr_define('_JOMRES_COM_A_TARIFFS', 'Cenas un valūta');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Failu augšupielāde');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Jāmaksā par papildus personu');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Pārliecinieties, ka šeit ir atzīmēts Jā, ja Jūs vēlaties iekasēt samaksu par papildus viesiem');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Cena par papildus personu');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Vai depozītu aprēķināt procentos?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Vai depozītu jāaprēķina procentuāli no rezervācijas summas? Ja Nē, tad jānorāda konkrēta depozīta summa.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Depozīta summa');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'No cilvēka par diennakti');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Izvēlieties Jā, ja cena jāaprēķina no cilvēka par nakti. Ja izvēlēsieties Nē, cena tiks aprēķināta no numura par nakti');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Failu izmērs');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. faila izmērs KB');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Resources booked');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Rezervācijas dati');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Rezervācija ir juridiski saistošs līgums, tāpēc, ja kāda iemesla dēļ Jūs atceļat vai saīsināt Jūsu rezervāciju, tad Jums vēl joprojām ir jāmaksā summa pilnā apmērā.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Rezervācijas atcelšanas maksas</i> Ja Jūs atceļat savu rezervāciju, anulācija jāapstiprina rakstveidā. Atcelšanas maksas ir šādas:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Arrival date to 14 days');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Drukāt apstiprinājuma vēstuli');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Rēķina izdruka');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Diennakšu skaits: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena par diennakti: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Kopsumma');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Drukāt rēķinu');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Pievienot pakalpojumu rēķinam');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Pakalpojuma apraksts');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Pakalpojuma cena');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Citi pārdotie pakalpojumi');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Pakalpojums pievienots rēķinam');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Augšupielādēt attēlu');
jr_define('_JOMRES_FILE_UPLOAD', 'faila augšupielāde');
jr_define('_JOMRES_COM_A_ODDS', 'Dažādi');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Rādīt minikomponentu vaicājumus');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Dzēst šo attēlu');
jr_define('_JOMRES_FILE_DELETED', 'Attēls izdzēsts');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Dzēst');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nevar dzēst šo numuru, jo uz to attiecas rezervācijas. Vispirms atceliet rezervācijas un mēģiniet vēlreiz.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Numurs dzēsts');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Dzēst numura papildus opciju');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nevar dzēst šo numura papildus opciju, jo tā ir piesaistīta arī citiem numuriem. Atiestatiet šo opciju no citiem numuriem un mēģiniet vēlreiz.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Numura papildus opcija izdzēsta');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Dzēst naktsmītnes papildus opciju');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nevar dzēst šo naktsmītnes papildus opciju, jo tā ir piesaistīta šai naktsmītnei. Atiestatiet šo opciju no naktsmītnes un mēģiniet vēlreiz.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Naktsmītnes papildus opcija izdzēsta');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Dzēst Numura/naktsmītnes tipu');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Numura/naktsmītnes tips izdzēsts');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Izdzēst naktsmītni');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Naktsmītne izdzēsta');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Jums nav tiesību dzēst šo naktsmītni.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Attēla platums pēc attēla augšupielādes.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Karte');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Apraksts');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Ierašanās laiks');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivitātes apkārtnē');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Braukšanas norādījumi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Lidostas');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Cits transports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Saistošie noteikumi');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adrese');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Klienti var reģistrēt tiešsaistē');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Izvēlieties Jā, lai klienti varētu rezervēt numurus tiešsaistē.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervācijas ir fiksētam periodam');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ja Jūs izvēlieties Jā, tad rezervācijas būs iespējams veikt tikai uz fiksētu laika periodu. Ja norādāt Nē, tad pārliecinieties, ka nav norādīta "definēta iebraukšanas diena", citādi pieejamības kalendārs nerādīs daudz brīvo dienu!');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Rezervācijas periods: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Numuru rezervācija');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max periodu skaits, piemēram 3 periodi pa 7 rezervācijas dienām = 21 diena');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Vai Jūsu naktsmītne tiek izīrēta tikai vienai viesu grupai vienlaicīgi?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Pārskatīt rezervāciju');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Apstiprināt rezervāciju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Pirmdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Otrdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Trešdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Ceturtdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Piektdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sestdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Svētdiena');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'P');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'O');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'T');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'C');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'S');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Sv');
jr_define('_JOMRES_COM_A_AVLCAL', 'Pieejamības kalendārs');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Fontu krāsa šodienas datumam');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Fontu krāsa tekošā mēneša dienām ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Fontu krāsa  ne tekošā mēneša dienām');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Fona krāsa dienām, kad numuri ir brīvi');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Fona krāsa  ne tekošā mēneša dienām');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Fona krāsa dienām, kad numuri ir aizņemti');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Fona krāsa dienām, kad numuri ir pagaidu rezervācijā (nav iemaksāts depozīts)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Fona krāsa pagājušajām dienām');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Aizņemts/nav pieejams');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Brīvs');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Pagaidu rezervācija');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Definēta iebraukšanas diena?');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Tikai tādā gadījumā, ja Jūsu naktsmītnē izmanto fiksētos rezervācijas periodus.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Definētā iebraukšanas diena');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Rezervācijas periods (dienās)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Rādīt pieejamības kalendāru iekšpusē?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Izvēlieties Jā, ja vēlaties lai formā rāda pieejamības kalendāru');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Pieejamība');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Noklikšķiniet uz brīvās dienas, lai atvērtu rezervācijas formu');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Pašu rezervācijas');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'jauna pašu rezervācija');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'dzēst viesi');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'viesis izdzēsts');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'nevar dzēst šo viesi, jo viņam ir citas rezervācijas');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Jebkurš');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Kalendāra formāts');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Kalendāra ievades formāts');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'atļauj lietotājam mainīt kalendāra ievades formātu');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'atļaut "caurumus" fiksētajos rezervācijas periodos?');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', '"caurumu" ilgums dienās');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicēts');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Revīzija');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datums');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Lietotājs (lietotājvārds)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'atlasīt pēc datuma');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Statuss');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Gaida ierašanos');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Ierodas šodien');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'viesis šobrīd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Izbrauc šodien');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'vēl atrodas naktsmītnē');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'kavē izbraukšanu!');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'pievienots numurs');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'atjaunota numura informācija');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'dzēsts numurs');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'pievienota numura papildus opcija');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'atjaunota numura papildus opcija');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'dzēsta numura papildus opcija');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'pievienota naktsmītne');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'atjaunota naktsmītne');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'dzēsta naktsmītne');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'laboti naktsmītnes uzstādījumi');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'naktsmītne publicēta');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'pievienots tarifs');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'atjaunots tarifs');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'pievienots pakalpojums');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'viesis uzņemts');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'iemaksāts depozīts');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'izveidots viesis');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'atjaunots viesis');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'rezervēts numurs');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'pievienota ekstra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'atjaunota ekstra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'dzēsta ekstra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'publicēta ekstra');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'pievienota pašu rezervācija');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'dzēsta pašu rezervācija');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Ekstras');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Apraksts');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nosaukums');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Ekstra atjaunota');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Labot ierakstu');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Ekstra izdzēsta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Ekstra pakalpojumu administrācija');
jr_define('_JOMRES_COM_A_EXTRAS', 'Rādīt ekstras rezervācijas veikšanas laikā?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Norādiet Jā, ja vēlaties lai klients varētu izvēlēties papildus ekstras');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Iespējamās ekstras');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Pašu rezervācijas sākuma datums');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Pakalpojumu atjaunošanas datums');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Pašu rezervācijas');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Kļūda! Daži no numuriem jau ir aizņemti!');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Numuri, kuri iekļauti pašu rezervācijā');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nav pašu rezervāciju');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Novērtējums');
jr_define('_JOMRES_COM_A_RESET', 'Atjaunot');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervācija atcelta');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Meklēt šeit:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Valūtas simbols');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Valūtas kods');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Vairāk info');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Noteikt maksimālo rezervācijas laiku?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Norādiet Jā, ja Jūs vēlaties ierobežot maksimālo rezervācijas dienu skaitu (dienu skaitu norādiet nākamajā lodziņā)');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Maksimālais rezervācijas laiks dienās:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Nodoklis');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Room tax');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Nodoklis fiksēts');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Nodoklis procentuāls');
jr_define('_JOMRES_COM_A_EUROTAX', 'Nodoklis');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Nodoklis procentuāls');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arhivēt ierakstus');
jr_define('_JOMRES_FRONT_TARIFFS', 'Mūsu cenas');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifa nosaukums');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarifa apraksts');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Numura tips');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Spēkā no');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Spēkā līdz');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'No personas par diennakti');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'par diennakti');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Neiekļaujot nedēļas nogali');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min dienas');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max dienas');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min cilvēku skaits');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max cilvēku skaits');
jr_define('_JOMRES_FRONT_PREVIEW', 'Priekšskatījums');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Labošanas režīms?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'teksts atjaunots.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'labot valodu');
jr_define('_JOMRES_FRONT_PTYPE', 'Naktsmītnes tips');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'rādīt naktsmītņu tipus');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'labot naktsmītņu tipus');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Naktsmītnes tips');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Naktsmītnes tipa apraksts');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Naktsmītnes tips saglabāts');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Naktsmītnes tips(i) izdzēsti');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Apmaksas atgādinājums');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Nav ekstra pakalpojumu, ko pievienot rēķinam.');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depozīts');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Pilna summa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Summa, kas samaksāta veicot rezervāciju:');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Lietojiet šo opciju, lai norādītu, kas klientam jāmaksā veicot rezervāciju. Ja daļēja priekšapmaksa - norādiet Depozīts, ja pilna apmaksa - norādiet Pilna summa.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Kalendāra mēneši, ko rādīt');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'cik mēnešus rādīt pieejamības kalendārā?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Apmaksas veidi');
jr_define('_JOMRES_COM_A_CANCEL', 'Atcelt');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Izvēlieties dienas, kas attieksies uz pašu rezervāciju. Pēc tam spiežiet apstiprināt. <br/> 
<br/> Izvēlieties, kuri numuri attieksies uz pašu rezervāciju.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Aktivitātes noildze, Jūs vairs neesat ielogojies.</b> Lūdzu ielogojieties un mēģiniet vēlreiz.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Iemesls');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Lietot tiešsaistes apmaksu?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Izvēlieties apmaksas veidu.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Maksājumu veidi iespējoti?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'modificēti spraudņa uzstādījumi');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'ievietoti spraudņa uzstādījumi');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Skatīt naktsmītnes mājaslapu');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Ārējā saite');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Ievietojiet saiti uz savu mājaslapu šeit.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'labot kartes informāciju');
jr_define('_JOMRES_COM_A_EDITICON', 'Edit icon size');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Galerijas');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Rādīt ārējo saiti uz galeriju?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Rādīt galeriju iekšpusē?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Galerija');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Rādīt ārējo saiti uz tarifiem?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Uzlecošie logi atļauti?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Augšupielādēt attēlus galerijā');
jr_define('_JOMRES_A_TABS_MISC', 'Dažādi');
jr_define('_JOMRES_A', 'Saita konfigurācija');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Lietot globālos naktsmītņu uzstādījumus');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Izvēlieties meklēšanas spraudni, kuru vēlaties izmantot.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Atvainojiet, pēc Jūsu atlasītajiem kritērijiem nav rezultātu. Lūdzu mainiet kritērijus un meklējiet vēlreiz.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Vai Jūs esat pārliecināts?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervēt');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervēt');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Rādīt tarifus iekšpusē?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adrese');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detalizēta informācija');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Spiežiet, lai redzētu numurus un pieejamību.');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Rādīt adreses informāciju zem šīs saites');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Rādīt naktsmītnes informāciju zem šīs saites');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Rādīt numurus un pieejamību zem šīs saites');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Likmes tarifs');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Vidējais tarifs');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Izvēlieties, kādu tarifu veidu gribat pielietot');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Jums ir pieejami divi tarifu kalkulācijas veidi. Pirmais <b>Likmes tarifs</b>. Piemēram Jums ir vairāki tarifi vienam un tam pašam numuram vienā dienā - nakšņošana + brokastis vai nakšņošana + vakariņas.<br/><br/> <b>Vidējais tarifs</b> domāts tarifu konfigurācijai, kad Jūs esat izvēlējies izmantot dažādas cenas dažādās nedēļas dienās (ar Micromanage). Tādā gadījumā, ja klients rezervācijā būs izvēlējies laika posmu ar dažādām cenām (piem: no trešdienas līdz sestdienai - trešdiena, ceturtdiena par vienu cenu un piektdiena, sestdiena par citu cenu), tad rezervācijas sistēma izrēķinās vidējo cenu par numuru, sareizinās ar rezervācijas dienām un kopējā cena būs korekti aprēķināta.<br/><b> Uzmanību!</b> <i>Ja Jūs lietojat cenu aprēķinu, kur dažādās dienās ir dažādas numuru cenas, tad obligāti jāizvēlas <b>Vidējais tarifs</b>, citādi rezervācijas sistēma cenu aprēķinās vadoties pēc dienu skaita un pirmās rezervācijas dienas cenas!!!</i><br/> ');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Rādīt izbraukšanas datuma ievadi?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Description limit');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'This limits the number of characters shown in the business listing when drawing from the business description.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() format style?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Rādīt naktsmītni klientiem');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nerādīt naktsmītni klientiem');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Lietot globālos naktsmītņu tipus');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/jomres/rmtypes/ folder. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input error background colour');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Valsts pēc noklusējuma rezervācijas formā');
jr_define('_JOMRES_JAVASCRIPT_', 'Lauki ar sarkano zvaigznīti jāaizpilda obligāti!');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Vai lietotāji var reģistrēt savas naktsmītnes?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Set this to Yes if you want users to be able to register their own businesses without admin intervention.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Izceltie dati ir nepieciešami.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Naktsmītne izveidota');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Rādīt kalendāru no gada sākuma?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Brīvo numuru skaits');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Atpakaļ uz naktsmītnes sākumlapu');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Guļvietu tipi');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Random search limit');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Rādīt valūtas konvertācijas saiti tarifu skatā?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Pārrēķināt citā valūtā');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Allow users to edit using html editors?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Lietojiet šo formu, lai veiktu vai modificētu savu rezervāciju. Izvēlieties vai labojiet rezervācijas datumus, viesu skaitu, numurus. Beigās pievienojiet papildus ekstras, ja nepieciešams un tad datus par sevi. Kad formai būs pietiekami daudz informācijas, tā piedāvās apstiprināt rezervāciju.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Lietojiet šo formu, lai veiktu vai modificētu savu rezervāciju. Izvēlieties vai labojiet rezervācijas datumus, viesu skaitu, numurus. Beigās pievienojiet papildus ekstras, ja nepieciešams un tad datus par sevi. Kad formai būs pietiekami daudz informācijas, tā piedāvās apstiprināt rezervāciju.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Kalendārs');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Izvēlieties Jums nepieciešamos rezervācijas datumus.');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Pieejamība ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Izvēlieties Jums nepieciešamos numurus');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Skatiet šeit, vai norādītajos datumos naktsmītne ir brīva.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Papildus ekstras');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Izvēlieties papildus ekstras, kuras Jūs vēlaties iekļaut rezervācijā.');
jr_define('_JOMRES_COM_PERDAY', 'Par diennakti');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Jūsu dati');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Lūdzu ievadiet savus datus. Lauki, kas marķēti ar sarkanu zvaigznīti ir obligāti jāaizpilda.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Pieejamie numuri');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Izvēlētie numuri');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Ātrākais iespējamais ierašanās datums ir: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'par diennakti:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Jūsu izvēle:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Ekstras:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Nodoklis:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Atlaide:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Kopā (ar PVN):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Klienti');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Pievienot Jūsu izvēlei');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Izņemt no Jūsu izvēles');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Viesu tipi');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tips');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Klienta tips, piemēram, bērni no 5-10 gadi vai studenti.');
jr_define('_JOMRES_VARIANCES_NOTES', 'Piezīmes');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Piezīmes par šo klientu tipu.');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Max');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Max šā tipa klientu skaits rezervācijā.');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Procentuāli');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Ja atlaidi norādīsiet procentuāli, tad tā tiks rēķināta procentuāli no numura cenas. Ja nē, tad Jums jānorāda atlaides lielums Eiro. Piezīme: atlaide jānorāda ar mīnus zīmi!');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Pievienot atlaidi?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', '');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Atlaide');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Atlaides lielums');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modificēts lietotāju tips');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Dzēsts lietotāju tips');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Izveidots lietotāju tips');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Atjaunots lietotāju tips');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Atjaunots lietotāju tips');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Rādit saiti uz numuriem naktsmītnes detaļlapā?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Rādīt <b>tikai</b> pieejamības kalendāru?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Praktiski pielietojams tikai tām naktsmītnēm, kuras tiek iznomātas "vienā gabalā"');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Min rezervācijas intervāls');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Mazākais intervāls dienās rezervācijas formā no iebraukšanas līdz izbraukšanai.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Rezervācijas formas numuru skatā rādīt numura numuru');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Rezervācijas formas numuru skatā rādīt numura nosaukumu');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Rezervācijas formas numuru skatā rādīt tarifa nosaukumu');
jr_define('_JOMRES_ORDER', 'Šķirot pēc');
jr_define('_JOMRES_REQUIREDFIELDS', 'Obligāts');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'dienas pirms iebraukšanas');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Min dienu skaits no "šodienas" līdz ierašanās dienai.');
jr_define('_JOMRES_DTV', 'Datumu tipu variācijas');
jr_define('_JOMRES_DTV_DOW', 'nedēļas diena');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'viesu skaits rezervācijā pēc noklusējuma');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Ja Jūs lietojat vairākus viesu tipus, tad šeit norādiet cik viesi pēc noklusējuma pirmajā viesu tipā parādīsies rezervācijas formā, piem. pieaugušie -2.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Vai rezervēt tiešsaistē drīkst tikai reģistrējušies lietotāji?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Atvainojiet, Jums jābūt reģistrētam lietotājam, lai veiktu rezervāciju. Spiežiet šeit, lai reģistrētos vai ielogotos. Ja veiciet rezervāciju no citas mājaslapas, pēc reģistrācijas spiežiet refresh pogu, lai turpinātu rezervāciju. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Fonta krāsa saitei uz pašreizējām rezervācijām.');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Nedēļas nogales robeža');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Numurs rezervēts');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Pašu rezervācija');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Noapaļot depozītu līdz tuvākajam apaļajam ciparam?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Piemērot priekšapmaksu?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarifi tiek aprēķināti par nedēļu?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Jūs varat aprēķināt tarifus gan par dienu gan par nedēļu. Ja aprēķiniet par nedēļu, tad šeit jāatzīmē Jā.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'par nedēļu');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fiksētās iebraukšanas dienas: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Kad noteiktas ierašanās datumi ir izvēlēti, var norādīt datumus nolaižamajā sarakstā. Ņemiet vērā, ka datumu sarakstā neiekļauj datumus, ja rezervācija nav iespējama (iepriekš aizņemts, u.t.t.) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'ierašanās diena nederīga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'izbraukšanas datums nederīgs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervācijas laiks ir par īsu. Mazākais iespējamais rezervācijas laiks dienās:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Jūsu intervāls ir:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Viesu tipu un skaita izvēle nederīga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Izvēlieties viesu tipu un skaitu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Jūs esat izvēlējies pārāk daudz viesu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Jūs esat izvēlējies vairāk numuru nekā nepieciešams Jūsu izvēlētajam viesu skaitam. Varat izvēlēties izdzēst kādu numuru no rezervācijas.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Pārāk daudz klientu pieejamajām guļvietām');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Jums jāizvēlas vairāk numuru');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Izvēlieties numuru');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ir jāievada vārds');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Ir jāievada uzvārds');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Ir jāievada mājas/dzīvokļa numurs/nosaukums');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ir jāievada ielas nosaukums');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Ir jāievada apdzīvotas vietas nosaukums');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Ir jāievada reģiona/novada nosaukums');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Ir jāievada pasta indekss');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ir jāievada valsts nosaukums');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Ir jāievada fiksētā tālruņa numurs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Ir jāievada mobilā tālruņa numurs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Ir jāievada e-pasta adrese');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>Mums ir brīvas vietas!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nav izvēlēti numuri');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervācijas nr.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Rezervācijas paziņojuma lodziņa fona krāsa');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Iespējot izskata maiņu?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Maksa par papildus personu ir procentuāla?');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Norādiet Jā, ja vēlaties, lai maksa par papildus personu rezervācijā tiktu aprēķināta procentuāli. Ja Nē, tad cena tiks aprēķināta kā konkrēta summa.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Brīvo numuru un tarifu limiti');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Lietojiet šo formu, lai norādītu limitu pieejamajiem numuriem un tarifiem, kas parādās rezervācijas formā. Ja nevēlaties norādīt limitus, tad šeit norādiet 0. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Šajā laikā nav brīvu vietu!');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL businesses in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Use global currency?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Set this to yes to force all businesses to use the same currency.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Global currency symbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if if you want to force the site into Full Page view. This might be useful if you intend to access the site via iframes.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Tikai nedēļas nogales');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Brīvdienas');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Norādiet, kuras nedēļas dienas ir brīvdienas.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Izvēlieties valsti, kur atrodas Jūsu naktsmītne, pirms pievienojat kādu informāciju par naktsmītni.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Saglabājiet naktsmītnes izmaiņas pirms ielādējat naktsmītnes attēlu.');
jr_define('_JOMRES_TARIFFSFROM', 'Cenas no ');
jr_define('_JOMRES_SEARCH_ALL', 'jebkurš');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Valsts');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Novads');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Apdzīvota vieta');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Piedāvājuma info');
jr_define('_JOMRES_SEARCH_BUTTON', 'Meklēt');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Ievadiet meklējamo vārdu.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Meklēt vārdu(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Lūdzu ievadiet plānotos ierašanās un izbraukšanas datumus, lai atrastu brīvos numurus.');
jr_define('_JOMRES_SEARCH_PTYPES', 'meklēt naktsmītnes pēc tipa');
jr_define('_JOMRES_SEARCH_RTYPES', 'meklēt naktsmītnes pēc numuru tipa');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'noklusējums');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'nosaukums');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'novads');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'apdzīvota vieta');
jr_define('_JOMRES_SORTORDER_STARS', 'novērtējums');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detaļas ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervācijas forma');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Atjaunināt adresi');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Vēlreiz pārbaudīt pieejamību<br/>(numuru izvēle tiks dzēsta)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Vēlreiz pārbaudīt pieejamību');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modificēt papildus ekstras');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Izmainīt numuru izvēli');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'atjaunot Jūsu adreses informāciju');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Atvainojiet, kāds no adreses laukiem ir nekorekti aizpildīts');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'numura attēls');
jr_define('_JOMRES_CURRENCYFORMAT', 'valūtas formāts');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Meklēšanas opcijas');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Pieejamās atskaites');
jr_define('JOMRES_COM_A_MESSAGE', 'Ziņojums');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Parasts');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Paplašināts');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Mikromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tarifu konfigurācijas veids');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Uzmanību: Pārslēgšanās starp tarifu tipiem var izraisīt datu zudumu!<br/> Ja neesat pārliecināts kādu tarifu veidu Jums vajag izvēlēties vai vēlāk, konfigurējot tarifus nesaprotat kā to darīt, lūdzu rakstiet mums uz e-pastu support@bookingpro.eu vai support@rezervacija.lv, aprakstiet savu cenu politiku un mēs Jums palīdzēsim izvēlēties pareizo variantu.</b>
<br/><br/>
Jums ir trīs veidi kā konfigurēt tarifus.<br/><br/>
<b>Parasts:</b> Jums ir viens tarifa veids katram numuru tipam. Šādu konfigurāciju var izvēlēties, ja Jums numuru cenas ir nemainīgas (neatkarīgi no nedēļas dienas vai rezervācijas ilguma). Vai arī, ja Jūs cenu aprēķināt no personu skaita rezervācijā. Ir iespējams norādīt dažādas cenas viesu tipiem, piem: pieaugušie, bērni, pensionāri, u.t.t.  Ļoti vienkārši konfigurējams. Nav iespējams norādīt numuru nosaukumus un kurā stāvā atrodas. Ja Jums vienāda tipa numuriem ir dažādas cenas (piem: divvietīgs numurs ar skatu uz ielu un divvietīgs numurs ar skatu uz ezeru), tad šis tarifu konfigurācijas veids Jums nav piemērots. <br/><br/>
<b>Micromanage:</b> Konfigurācijas veids ar ļoti plašām cenu konfigurēšanas iespējām. Grūtāk apgūstams, bet ļoti elastīgs. Jūs varat norādīt cenu jebkuram numuru tipam jebkurā dienā. Norādiet nedēļas nogales cenas, svētku dienu cenas, mainiet cenas atkarībā no sezonas. Katram numuru tipam varat izveidot vairākus tarifus, piem: cena vienai dienai, cena vairākām dienām (varat norādīt min un max dienu skaitu, kad tarifs darbojās), cenu ar vai bez brokastīm, pusdienām, u.t.t. Var norādīt numura nosaukumu, stāvu, smēķešanas opciju, opciju pieejams invalīdiem vai nē. Var norādīt katram numuram aprīkojumu un pievienot numura attēlu. Ir iespējams aprēķināt cenu no personu daudzuma kā arī izveidot dažādas cenas dažādiem viesu tipiem. <br/><br/>
<b>Paplašināts:</b> Nav tik plašas iespējas kā Micromanage, tomēr vairāk iespēju nekā Parastajam veidam. Šeit var norādīt vairākus tarifus vienam numuru tipam, piemēram, <b>divvietīgs numurs ar brokastīm</b> vai <b>divvietīgs numurs ar brokastīm un vakariņām</b>, tāpat var norādīt dažādas cenas atkarībā no rezervācijas ilguma. Nav iespējams izveidot vienam numuram dažādas cenas dažādām nedēļas dienām. Var norādīt numura nosaukumu, stāvu, smēķešanas opciju, opciju pieejams invalīdiem vai nē.Var norādīt katram numuram aprīkojumu un pievienot numura attēlu. Ir iespējams aprēķināt cenu no personu daudzuma kā arī izveidot dažādas cenas dažādiem viesu tipiem.  <br/>
<br/>
Tarifu veidu saderība.<br/>
<br/>
Parasts -> Paplašināts. Nav izmaiņu.<br/>
Parasts -> Mikromanage. Visi esošie tarifi tiek dzēsti.<br/>
Paplašināts -> Parasts. Visi esošie tarifi tiek dzēsti.<br/>
Paplašināts -> Mikromanage. Visi esošie tarifi tiek dzēsti.<br/>
Mikromanage -> Paplašināts. Visi esošie tarifi tiek dzēsti.<br/>
Mikromanage -> Parasts. Visi esošie tarifi tiek dzēsti.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Rādīt numuru sarakstu naktsmītnes detaļu lapā?');
jr_define('JOMRES_PROPERTYTYPE', 'Naktsmītnes tips');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max cilvēku skaits numurā');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max cilvēku skaits rezervācijā');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Pievienot piezīmi');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Labot piezīmi');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Dzēst piezīmi');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Skatīt piezīmes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Pievienota jauna piezīme');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Labota piezīme');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Dzēsta piezīme');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Rādīt rezervācijas');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Manas rezervācijas');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Skatīt rezervāciju');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Skatīt favorītus');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Jūs neesat pievienojis nevienu favorītu!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Naktsmītnes tips');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Dinamiskās cenas');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'aktīvas');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Šī opcija atļauj Jums iespējot un konfigurēt numuru cenas dinamiski.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Jūs varat konfigurēt atlaides numuru cenām automātiski. Atlaides piemērojas dinamiski, izejot no tā, cik numuri konkrētajā dienā ir aizņemti, norādot kāds ir maksimālais laika periods no rezervācijas veikšanas dienas līdz iebraukšanas dienai.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Sākuma diena (maksimālais dienu skaits no rezervācijas veikšanas dienas līdz iebraukšanas dienai)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Ja 10% vai mazāk numuri aizņemti');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Ja 25% vai mazāk numuri aizņemti');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Ja 50% vai mazāk numuri aizņemti');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Ja 75% vai mazāk numuri aizņemti');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Atlaide %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' atlaide tiek piemērota no ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' līdz ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Dinamiskā atlaide nav piemērota ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Business Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Pēdējā brīža atlaide');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktīva?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Atzīmējiet Jā, ja vēlaties piešķirt pēdējā brīža atlaides. ');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Sākuma diena');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Atlaide sāk darboties, ja līdz iebraukšanai palikušas N dienas. Norādiet dienu skaitu N.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Atlaide');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Procentuāli');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Šai rezervācijai tiek piemērota atlaide!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Rezervācijas cena tiek samazināta par ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% atlaide, ja Jūs rezervāciju veicat dienas pirms iebraukšanas, ne vairāk  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezervējiet tagad, lai iegūtu šo atlaidi!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% vai lielāka atlaide iespējama, ja iebraukšanas diena ir pirms  ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Rādīt paplašinātu tarifu informāciju?');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Norādiet Jā, ja vēlaties, lai rādītu plašāku informāciju par tarifiem naktsmītnes aprakstā.');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options');
jr_define('_JOMCOMP_AMEND', 'Labot rezervāciju - Naktsmītnes izvēli');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Izvēlieties jaunu naktsmītni');
jr_define('_JOMCOMP_AMEND_HEADER', 'Oriģinālais līgums:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Depozīts samaksāts');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Depozīts nav samaksāts');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Pārrakstīt kopsummu');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Pārrakstīt depozītu');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Atcelt');
jr_define('_JRPORTAL_CPANEL', 'Portāla Kontrolpanelis');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Komisijas procents pēc noklusējuma');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a business in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Rādīt komisijas procentus');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Komisijas procenti');
jr_define('_JRPORTAL_CRATE_TITLE', 'Nosaukums');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tips');
jr_define('_JRPORTAL_CRATE_VALUE', 'Komisijas procenti');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Valūtas kods');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Naktsmītņu saraksts');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Naktsmītnes nosaukums');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Naktsmītnes adrese');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Businesses who\'s background colour is red have not yet had a commission rate applied to them.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistika');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'komisijas lielums');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Rādīt rezervācijas');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Naktsmītnes id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Rēķina nr.');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Rezervācija kopā');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arhivācijas datums');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Apraksts');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have business type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Jūs nevarat dzēst šo naktsmītni. Jūs vienīgi varat padarīt neredzamu klientiem, izmantojot opciju Rādīt - Slēpt savā kontroles joslā. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Rezervācijas cena:');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'diennakts(is)');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'par numuru ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Papildus ekstru summa: ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Summa kopā: ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Lūdzu izlasiet un apstipriniet ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Zemāk redzams Jūsu rezervācijas kopsavilkums.<br /> Lai veiktu izmaiņas, spiežiet uz [Labot rezervāciju] pogas. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ja vēlaties izdarīt izmaiņas rezervācijā, spiežiet šeit');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Labot rezervāciju');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Jebkuru speciālu pieprasījumu lūdzu ievadiet teksta laukā zemāk.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Es apstiprinu, ka augstāk sniegtā informācija ir pareiza un piekrītu ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'no personas par diennakti ');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'no');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Sākt');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Iepriekšējais');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Nākamais');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Beigas');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Rezultāti');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Lūdzu ievadiet savu ziņas tekstu. ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Sazināties ar naktsmītni');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Izziņas pieprasījums no ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Paldies par Jūsu pieprasījumu, Jūsu ziņa ir nosūtīta uz naktsmītnes e-pasta adresi un kopija uz Jūsu e-pasta adresi. Naktsmītnes administrācija ar Jums sazināsies.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' attiecībā uz ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Pieprasījums');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Lūdzu izvēlieties nepieciešamo naktsmītni no saraksta.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min numuru skaits ir izvēlēts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of resources already selected in booking before tariff/resource type combo can be offered. Allows you to have discounted tariffs when more than N resources are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max numuru skaits ir izvēlēts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of resources already selected in booking before tariff/resource combo is no longer offered. Allows you to stop offering this resource type/tariff combination once N resources have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Brīvs');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Daži aizņemti');
jr_define('_JOMRES_AVLCAL_HALF', 'Puse aizņemta');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Gandrīz aizņemts');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Nav vietu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'par nedēļu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'par dienu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'par rezervāciju');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'no personas rezervācijā');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'no personas par dienu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'no personas par nedēļu');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'par dienām (min dienas)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'par dienām X numuru skaits');
jr_define('_JOMRES_REGISTRYREBUILD', 'Atjaunot reģistrus');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'meklēt pēc cenas');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Jums pašlaik nav nevienas rezervācijas');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Mainīt naktsmītnes tipu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Izvēlieties Jūsu naktsmītnes tipu');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Jūsu pieprasījums...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Naktsmītņu saraksta limits');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of businesses to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the business list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Property name');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Show the Property name input.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Town/region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Show the Region input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Search by business type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by business type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Search by resource type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by resource type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Search by description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Search by availability');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Search by price ranges');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a business is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Izskatu labošana');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Papildus lauki');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Te Jūs varat definēt papildus laukus rezervācijas formai');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Lauka nosaukums (bez atstarpēm)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'vērtība pēc noklusējuma');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Apraksts');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obligāts?');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Max daudzums');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ja max daudzums ir norādīts vairāk kā 1, tad viesiem tiks piedāvāts izvēlēties cik daudz šo ekstru viņiem vajag.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'nodokļu likmes');
jr_define('_JRPORTAL_TAXRATES_CODE', 'nodokļa kods');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'likmes apraksts');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Jūs nevarat izdzēst šo nodokļa likmi.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Likme');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Rēķini');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Neapmaksāts');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Apmaksāts');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Atcelts');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Apstrādē');
jr_define('_JRPORTAL_INVOICES_USER', 'Klients');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Statuss');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Izrakstīts');
jr_define('_JRPORTAL_INVOICES_DUE', 'Apmaksāt līdz');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonēšana');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Atlicis maksāt');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Valūtas kods');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Posteņi');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nosaukums');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Apraksts');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'cena bez PVN');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'daudzums');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'atlaide');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Cena ar PVN');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'PVN kods');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'PVN apraksts');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'PVN apmērs');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Rādīt manus rēķinus');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Atlaižu kuponi');
jr_define('_JRPORTAL_COUPONS_DESC', "Atlaižu kodi var tikt ģenerēti un izsūtīti Jūsu potenciālajiem klientiem, lai palielinātu Jūsu klientu skaitu. Kuponiem var norādīt derīguma laiku, tādējādi varat piesaistīt klientus tieši 'tukšajiem' periodiem.");
jr_define('_JRPORTAL_COUPONS_CODE', 'Kupona kods');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Spēkā no');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Spēkā līdz');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Atlaides apmērs');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Atlaidi aprēķina procentuāli?');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Tikai numuram?');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ja Jums ir atlaižu kupona kods, lūdzu ierakstiet to lodziņā un spiežiet "Piemērot atlaidi", lai iegūtu atlaidi savai rezervācijai.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Piemērot atlaidi');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupona atlaide piemērota rezervācijai');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Šāds kupona numurs nav atpazīts');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupona atlaides apmērs');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervācijai piemērota atlaide. Kupona kods/atlaides apmērs/kupona uzstādījumi : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Izvēlieties valodas');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Izvēlieties valodas opcijas, ko rādīt');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Rādīt valodas izvēles lodziņu?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sveicināti, ');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Paldies par reģistrāciju ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Jūsu lietotājvārds ir : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Jūsu parole ir : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Lūdzu ielogojieties, lai redzētu savas rezervācijas ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupons saglabāts');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupons izdzēsts');
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
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Rezervācijas formas numuru skatā rādīt Pieejams invalīdiem');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Rezervācijas formas numuru skatā rādīt max cilvēku skaits');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Pilna rezervācijas summa tiks aprēķināta, kad būsiet pievienojis numurus vai numuru pēc savas izvēles.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonēšanas paketes');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nosaukums');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Apraksts');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicēta');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Pilna cena (EUR)');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Naktsmītņu limits');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abonēt');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Lietot funkciju Abonēšana?');
jr_define('_JOMRES_COM_NEWUSER', 'Izveidot lietotāja kontu rezervējot?');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Izveido jaunu lietotāja kontu pie rezervācijas veikšanas, ja klients nav reģistrējies sistēmā.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Spiežiet šeit, lai reģistrētu Jūsu naktsmītni');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Paldies par Jūsu rezervāciju - Jūsu lietotāja dati tiks nosūtīti Jums uz e-pastu');
jr_define('_JOMRES_LATLONG_DESC', 'Ar peli atzīmējiet uz kartes savas naktsmītnes atrašanās vietu, lai ievadītu ģeogrāfiskā garuma un platuma koordinātas.<br/> Lai Jūsu naktsmītne kartē parādītos pilnīgi precīzi, iesakām doties uz <a href="http://itouchmap.com/latlong.html" target="_blank">itouchmap mājaslapu</a> , kartē atrast savas naktsmītnes vietu, norakstīt ģeogrāfisko platumu un garumu un pēc tam ievadīt šos lielumus paredzētajos laukos naktsmītnes lapā. Formātam jāizskatās piemēram tā:  <b>51.754564622</b> un <b>24.997314810</b>.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrolpanelis');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Rādīt rēķinu');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Rādīt rēķinus');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Pievienot manu naktsmītni');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Brīdinājums : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Atvainojiet, paketes ID nav atpazīts.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Uzņēmuma informācija');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Uzņēmuma nosaukums');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Reģistrācijas numurs');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Mājas nr.');
jr_define('_JOMRES_INVOICE_NUMBER', 'Rēķina Nr. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Izvēlieties dienas, kas attieksies uz pašu rezervāciju. Pēc tam spiežiet "piemērot" pogu, lai vēlreiz pārbaudītu pieejamību. <br/> 
<br/> 
Ja šajā periodā būs kāda cita rezervācija, tad, kamēr šī (s) rezervācijas nebūs atceltas, Jūs nevarēsiet veikt pašu rezervāciju.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Atvainojiet, šie datumi nav pieejami pašu rezervācijai.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Jūs variet veikt pašu rezervāciju šajos datumos.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Jūsu naktsmītne ir konfigurēta, lai klients maksātu no personas par nakti, bet Jums nav norādīts neviens klientu tips. Lūdzu izveidojiet vienu vai vairākus klientu tipus. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Jums nav konfigurēts neviens tarifs! Kamēr Jūs neizveidosiet vismaz vienu tarifu, nebūs iespējams veikt Jūsu naktsmītnes rezervēšanu!');
jr_define('_JOMRES_EDITINGMODE_ON', 'Labošana ieslēgta');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Labošana izslēgta');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Izmantot mainīgu depozītu?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Mainīgs depozīta lielums atļauj Jums norādīt dienu skaitu N kas ir dienu skaits no rezervēšanas datuma līdz iebraukšanas datumam. Dod iespēju par rezervācijām, kas veiktas pēdējā brīdī, iekasēt uzreiz pilnu maksu.<br/>
<br/><b>Piemērs, ja Jūs aktivizēsiet šo opciju: Dienu skaits - 15. 1) Klients rezervē naktsmītni 10 dienas pirms iebraukšanas datuma - klientam veicot rezervāciju jāmaksā uzreiz pilna summa nevis depozīts. 2) Klients rezervē naktsmītni 20 dienas pirms iebraukšanas datuma - klientam veicot rezervāciju jāmaksā depozīts, kāds konfigurēts iepriekš.</b>');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'No cik dienām pirms iebraukšanas sāk iekasēt pilnu samaksu depozīta vietā?');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Apstiprinājuma e-pasts nosūtīts. Jūs varat aizvērt šo logu.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktpersona');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Atzīmēt rēķinu kā apmaksātu');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Rēķins apmaksāts');
jr_define('_JOMRES_APIKEY_REMAKE', 'Izveidot jaunu API atslēgu');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Vai šī ir vienas naktsmītnes instalācija?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of businesses, just takes the guest to the booking form for the first business in the system. Business managers also will not see see the Business Details preview button or the Add new business button. Ideal if you only want to list one business and take bookings for it.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Maksājuma bilance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define ('_JOMRES_SUPPORTKEY', 'Atbalsta atslēga');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'Jūsu atbalsta licences atslēgas numurs (pazīstams arī kā jūsu licences numurs). Lai varētu lejupielādēt Jomres spraudņus, jums būs nepieciešama atjaunināta licence.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'Personiskā atlaide');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Vai ierobežot uzņēmuma reģistrāciju tikai vienā valstī?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Jūs varat nodrošināt, ka uzņēmumu reģistrācija ir ierobežota tikai vienā valstī, iestatot šo opciju uz Jā un iestatot valsti nākamajā opcijā.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Uzņēmumi atrodas šajā valstī:');
jr_define ('_JOMRES_JQUERYTHEME', 'Jquery tēma');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'Izvēlieties jquery motīvu, ko izmantot uzņēmuma informācijas cilnēs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Atvainojamies, šīs naktsmītnes dati vairs nav pieejami.');
jr_define('_JOMRES_REVIEWS', 'Atsauksmes');
jr_define('_JOMRES_REVIEWS_TITLE', 'Tēma:');
jr_define('_JOMRES_REVIEWS_DATE', 'pievienota ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Par šo naktsmītni vēl nav atsauksmju.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Vēlaties būt pirmais, kas pievieno atsauksmi?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Piekrītu šai atsauksmei.');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Nepiekrītu šai atsauksmei.');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Vidējais vērtējums: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Kopā balsis:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Pievienot jaunu atsauksmi.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Jums ir jābūt reģistrētam lietotājam, lai pievienotu atsauksmi.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Jūsu domas par šo naktsmītni: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Šā vērtētāja atsauksme: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pros: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Pievienots: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Jūs jau esat pievienojuši atsauksmi šai naktsmītnei.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Atvainojiet, Jums nav tiesību pievienot atsauksmes.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Rādīt atsauksmes');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' viesi piekrīt šai atsauksmei. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' viesi nepiekrīt šai atsauksmei.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' viesis piekrīt šai atsauksmei. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'viesis nepiekrīt šai atsauksmei.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Paldies par Jūsu viedokli!');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Paldies, bet Jūs jau vienreiz esat izteikuši savu viedokli šai atsauksmei.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Pārliecinieties, vai visi lauki ir aizpildīti.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Lūdzu ierakstiet atsauksmes tēmu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Sīkāku atsauksmes izklāstu lūdzu rakstiet Apraksta laukā.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Kas bija pozitīvs Jūsu viesošanās laikā?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Kas bija negatīvs Jūsu viesošanās laikā?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Novērtējiet viesmīlību');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Novērtējiet naktsmītnes apkārtni');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Novērtējiet sakārtotību');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Novērtējiet naktsmītni. Vai tā ir komfortabla vai nolietojusies?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Novērtējiet cenas un pakalpojuma atbilstību');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Novērtējiet pakalpojumu kvalitāti');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Kopējais novērtējums.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Jūsu pieredze sīkāk:');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Paldies par atsauksmi!');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Paldies par Jūsu atsauksmi! Tā tiks publicēta pēc neilga laika, kad portāla moderators būs pārbaudījis, vai nav lietoti necenzēti vārdi.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Lietot atsauksmes?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automātiski publicēt atsauksmes?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Ja iestatāt šo vērtību Nē, atsauksmes būs jāpublicē manuāli');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Vai iestatīt atsauksmes testa režīmā?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Parasti uzņēmumu vadītāji nevar pārskatīt uzņēmumus. Ja ir iespējots testa režīms, viņi to var. Protams, ražošanas vidē tas nav ideāli.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Šis ir visu uzņēmumu saraksts. Lai skatītu uzņēmuma atsauksmes, noklikšķiniet uz šī uzņēmuma. No turienes varēsiet publicēt vai dzēst atsauksmi.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Nepublicēto atsauksmju skaits');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Kopējais atsauksmju skaits');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicēt/atcelt pārskatu');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Dzēst atsauksmi');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Pārskata pārskats');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Pārskatīt pārskatus');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Lūdzu, ievadiet savu pārskatu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Redzēt šajā pārskatā kaut ko iebilstamu vai neprecīzu? Ziņot par to, un mēs to izskatīsim jūsu vietā.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Apstiprināt');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Ziņojumu izveidojis: ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Ziņojumus ievieto lietotāji, kuri nepiekrīt atsauksmes saturam. Vienīgā iespēja kā izdzēst ziņojumu ir izdzēst atsauksmi.');
jr_define('_JOMRES_REVIEWS_RATING', 'Balles (1 = ļoti slikti 10 = lieliski) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Viesmīlība  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Apkārtne ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Sakārtotība ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Naktsmītne ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Cenas atbilstība ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Pakalpojumi ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Atsauksmi pievienojis: ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Slēpt atsauksmes');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Rādīt rezervācijas formu naktsmītnes detaļu lapā?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Norādiet JĀ, lai rādītu rezervācijas formu naktsmītnes lapā. Ja norādīsiet NĒ, tad naktsmītnes lapā būs redzama saite uz rezervācijas formu. ');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Cenas ar PVN?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ja cenas norādāt ar PVN, tad šeit atzīmējiet JĀ.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Pakalpojumu nodoklis:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Nedēļas dienas lauks ļauj Jums noteikt cenu konkrētai nedēļas dienai visam gadam.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Izvēlieties sākuma un beigu datumus, cenu un tad spiežiet "Piemērot cenu" ');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Sākuma datums');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Beigu datums');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Cena');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Piemērot cenu');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partneri');
jr_define('_JOMRES_CALENDAR_RTL', 'kļūda');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Numurs ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'viesis(i). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Ar šo tiek noteikts viesu izvietojums pa numuriem. Ja Jūs vēlaties mainīt viesu izvietojumu, Jums jāsazinās ar naktsmītni pēc rezervācijas veikšanas.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Jūsu naktsmītne nav publicēta portālā, portāla apmeklētāji to neredz!');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Meklēšanas rezultāti pēc noklusējuma');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Mainiet šo, lai mainītu meklēšanas opcijas pēc noklusējuma.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Rādīt meklēšanas veidus nolaižamajā lodziņā.');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Numuru saraksta stils');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Lietojot "Klasisko" numuru saraksta stilu, klienti rezervācijas formā varēs izvēlēties visu Jūsu numurus, piemēram jebkuru no pieciem vienādiem divvietīgajiem numuriem. Lietojot "Numuru tipu" saraksta stilu, vienādie numuri parādīsies klientam kā viena izvēle ar norādi cik šādi numuri pieejami.');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasiskais');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Numuru tipu');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Nedēļas sākuma diena, Svētdiena vai Pirmdiena?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Tikai naktsmītnes viesi drīkst rakstīt atsauksmes?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Norādiet JĀ, ja gribat atļaut rakstīt atsauksmes tikai saviem viesiem.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Par numuru');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Viesi numurā: ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Viesi rezervācijā: ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Numuru skaits');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Janvāris');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Februāris');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Marts');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Aprīlis');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maijs');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Jūnijs');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Jūlijs');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Augusts');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Septembris');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Octobris');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Novembris');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Decembris');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to business managers in the General Configuration section. This is useful if you do not want business managers to play around with too many settings, instead you can edit jomres_config.php to define default business options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Izvēlieties papildus opcijas Jūsu rezervācijai.');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Ja šī opcija ir iestatīta uz Jā, pārvaldnieki varēs redzēt HTML redaktoru, kas iekļauts CMS, un aprakstā ievadīt HTML. Tas ir potenciāls drošības risks, jo pastāv iespēja, ka viņi var ieviest nevēlamu HTML vai Javascript. Turklāt, ja tie ievada slikti formatētu HTML, lapas dizains var tikt apdraudēts. Labāk, ja vien iespējams, atstājiet šo opciju iestatītu uz Nē. </p> <p> Ja visi pārvaldnieki ir uzticami lietotāji (piemēram, jūs pats), varat atstāt to kā Jā un jūs maināt dažādus HTML tagus, kurus viņiem ir atļauts ievadīt. vietnes konfigurācijas cilnē Ievades filtrēšana. </p> <p> Ja, no otras puses, jūs izmantojat Jomres kā portālu, kurā jūs aicināt lietotājus pievienot un pārvaldīt savus īpašumus, šī nav ideālā konfigurācija . Tā vietā atstājiet šo opciju iestatītu uz Nē. Ja tā ir iestatīta uz Nav pārvaldnieku, tā vietā tiks parādīts atzīmju redaktors, ko viņi var izmantot, lai ievadītu pamata formatējumu, ar ko vajadzētu pietikt lielākajai daļai lietotāju. </p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Pilnekrāna skats');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Parasts skats');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'Partnera atlaide');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Meklēt lietotāju');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Ievadiet dažas rakstzīmes, lai meklētu lietotāju. <br/> Atlasot lietotāju, jūs automātiski pievienosit viņu kā partneri un tiksit novirzīts uz nākamo lapu, kur varēsit piešķirt uzņēmumus un atlaides lietotājam. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Esošie partneri');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Izvēlieties partneri, kas tiks novirzīts uz partneru administrācijas lapu.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partneris:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Meklēt uzņēmumu');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Ievadiet dažas rakstzīmes no uzņēmuma nosaukuma un atlasiet uzņēmumu. <br/> Izvēloties uzņēmumu, jūs to pievienosit partnera portfelim, taču tiem vēl nebūs pieejamas atlaides, lai tos uzstādītu pats. ");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Pašreizējie uzņēmumi');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Noklikšķiniet uz uzņēmuma, lai rediģētu partnera atlaides iestatījumus šim uzņēmumam.");

jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Šī konta darbība ir apturēta, pašlaik nevar pārvaldīt savus īpašumus, izmantojot šo kontu.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Naktsmītnes administratora konts atspējots');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Naktsmītnes administratora konts iespējots');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Informējam, ka Jūsu naktsmītnes administratora konts ir atspējots. Jums nebūs iespējams pārvaldīt naktsmītnes funkcijas, kamēr administratora konts tiks iespējots!');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Informējam, ka Jūsu naktsmītnes administratora konts ir atspējots. Lūdzu ielogojieties portālā un pārbaudiet vai Jūsu naktsmītnes lapa funkcionē pareizi. Paldies!');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Noņemt no favorītiem');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Rezervāciju datu arhīvs');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Rezervācijas datu arhīvs ir neapstrādāta rezervācijas informācijas izgāztuve, kas tiek uzņemta pēc tam, kad ir noklikšķināts uz pogas Apstiprināt rezervāciju. Virziet kursoru virs datuma, lai redzētu izejas datu izgāztuvi. Informācija tiek glabāta tabulā XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Labot profilu');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Lai pievienotu lietotāju kā īpašuma pārvaldnieku, iepriekšējā laukā vispirms ievadiet viņa lietotājvārda pirmās rakstzīmes. Kad ir atrasts pareizais lietotājs, noklikšķiniet uz šī vārda, lai to atlasītu, un pēc tam izvēlieties, kura īpašuma (-u) pārvaldniekam jābūt. Lietotājam <em> jau jābūt lietotājam SPS </em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Esošie vadītāji');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Meklēt pēc viesu skaita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Parādiet meklēšanu pēc viesa numura nolaižamās izvēlnes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Meklēt pēc novērtējuma');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Viesu skaits');
jr_define('_JOMRES_SEARCH_STARS', 'Novērtējums');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Naktsmītņu skaits');
// 4.6.1jr_define('_JOMRES_CONFIG_JQUERY', 'Vai ielādēt Jomres jQuery bibliotēku?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Varat iestatīt to uz NĒ, ja jums ir veidne, kas izmanto jquery. Tas var atrisināt jquery konflikta problēmas dažās veidnēs, bet ne visas.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Iespējojot šo opciju, priekšplānā var redzēt valodu pārslēdzēju pilnekrāna skatā.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Sīktēli tiek automātiski izveidoti augšupielādētajiem attēliem.');

jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Mazu sīktēlu maksimālais platums (pikseļi).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Mazie sīktēli tiek izmantoti uzņēmumu sarakstā, bet vidēja izmēra sīktēli tiek izmantoti biznesa galvenē.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Mazo sīktēlu maksimālais augstums (pikseļi).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Vidēja sīktēlu maksimālais platums (pikseļi).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Vidēja sīktēlu maksimālais augstums (pikseļi).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Vai izmantot komisijas funkcionalitāti?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Iestatiet šo uz Jā, lai parādītu pārziņa komisijas rēķinus, kas ir iekasēti.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Pārvaldnieku rezervācijas veido komisijas rēķinus?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ja pārvaldnieks veic rezervāciju, vai tas rada arī komisijas rēķina rindas elementu?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automātiski apturēt pārvaldniekus, ja rēķini ir atzīmēti kā gaidoši?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automātiski apturēt trešdaļu');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Šis trīskāršais skaitlis ir dienu skaits, cik ilgi vadītājam ir jāmaksā rēķins, pirms tiek apturēta uzņēmuma darbība un netiek publicēta viņa uzņēmējdarbība.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'Valodas konteksts');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Izmantojiet šo opciju, lai mainītu vietnes valodas kontekstu. Šī funkcija ļauj Jomres izmantot jūsu pašreizējai fokusam atbilstošas ​​etiķetes, tādēļ, ja jūsu uzmanības centrā ir jahtu brokeris, tad mainot kontekstu atļaut Jomres uzrādīt etiķetes no citas valodas faila. Piemēram, ja iestatāt kontekstu uz "Jahtu starpniecība", tad Jomres vispirms atradīs pašreizējo valodu, pēc tam meklēs /'.JOMRES_ROOT_DIRECTORY.'/languages ​​direktorijā apakšdirektoriju sauc par "yachtbrokerage". Ja fails pastāv pašreizējai valodai, tad šis fails tiks izmantots. Ja nē, tad Jomres meklēs failu angļu valodā tajā pašā direktorijā. Ja to nevar atrast, Jomres izmantos valodas fails pašlaik izvēlētajai valodai direktorijā /'.JOMRES_ROOT_DIRECTORY.'/languages. Ņemiet vērā: ja izveidojat jaunu rekvizītu veidu, pašreizējās valodas faila kopija tiek izveidota apakšdirektorijā zem /'.JOMRES_ROOT_DIRECTORY.'/ langua ge ar nosaukumu, kas atspoguļo jaunā īpašuma tipa aprakstu. ');

jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Papildu vietnes konfigurācija');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Iestatiet šo opciju uz Jā, ja vēlaties izmantot vietnes papildu konfigurācijas opcijas. Ja jūs tikko sākat ar Jomres, iesakām pagaidām atstāt to Nē, jo noklusējuma instalācija ir Tas ir pietiekami, lai sāktu darbu, tā vietā pievienojiet Jomres galvenajai izvēlnei un piesakieties priekšpusē kā "administrators" un sāciet konfigurēt savu īpašumu. Lūdzu, ņemiet vērā, ka daudzas papildu opcijas var nebūt pieejamas, ja t ir instalēts atbilstošs (-i) spraudnis (-i). Bezmaksas kodolsistēmas lietotāji nevarēs pilnībā izmantot iespējotās funkcijas. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Vai ielādēt Jomres jQuery UI bibliotēku?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'cena (augstākās vispirms)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'cena (zemākās vispirms)');

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Cenu aprēķina par diennakti/ par nedēļu/ par mēnesi?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Par diennakti');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Par nedēļu');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Par mēnesi');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'No personas');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'nedēļa(as) ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mēnesis(ši) ');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Kā vajadzētu darboties cilvēku numuru meklēšanas opcijai?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Ietekmē visus meklēšanas moduļus. Ja izmantojat viesu numuru meklēšanas funkciju, vai meklēšanas funkcijai vajadzētu meklēt rekvizītus, kuru tarifi atbalstīs viesu skaitu un būs vienādi ar izvēlēto, precīzi vienādu ar izvēlēto numuru, vai izvēlētais skaitlis un lielāks? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Lūdzu uzgaidiet, Jūsu pasūtījums ir apstrādē un tiks pāradresēts uz PayPal weblapu.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ja automātiskā pāradresācija uz PayPal nenotiek 5 sekunžu laikā...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Spiežiet šeit');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Kupons derīgs no');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Kupons derīgs līdz');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Viesa vārds');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Atlaižu kuponi var tikt ģenerēti un izsūtīti viesiem. Datumi norāda atlaižu kuponu derīguma termiņus.<br/>
Ja Jūs vēlaties atlaidi dot konkrētam klientam, izvēlaties klienta vārdu, ja atlaižu kuponu saņemējs drīkst nodot citām personām, tad klienta vārdu atstājiet tukšu.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Ar šo kuponu Jūsu rezervācijas summa tika samazināta no ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' uz ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Iestatiet to uz Nē, lai atspējotu gan Jquery UI javascript, gan CSS failu ielādi.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Vai ielādēt Jomres jQuery UI CSS bibliotēku?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Iestatiet šo uz Nē, lai atspējotu tikai jquery UI CSS failu.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Kopā ar PVN');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Atpublicēta naktsmītne');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'Izmantot reklāmguvumu funkcionalitāti');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Izmantojiet Jomres tiešsaistes reklāmguvumu funkcionalitāti. Tas piedāvās reklāmguvumu nolaižamo izvēlni priekšējiem lietotājiem, kur viņi varēs izvēlēties valūtu, kurā viņi vēlas redzēt piedāvātās cenas. Cenu izlaide tiek koriģēta, lai parādītu konvertēto cena, kam seko iekavās esošā īpašuma vietējā cena. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Mēs esam darījuši visu iespējamo, lai iegūtu pēc iespējas precīzākus un savlaicīgākus valūtas maiņas kursus. Mūsu tiešsaistes valūtas konvertēšanas funkcija ir pakalpojums, kas tiek sniegts tikai informatīviem nolūkiem un nav paredzēts precīzu skaitļu sniegšanai. mēs negarantējam valūtas maiņas kursu precizitāti. Izmantojot šo līdzekli, jūs uzskatāt, ka esat piekritis, ka jebkura paļaušanās uz kursa konvertēšanas funkciju vai tās izmantošana ir pilnībā atkarīga no jūsu riska. ');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Valūtas konvertācija/valūtu kodi');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP noteikšanas API atslēga');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Lai automātiski iestatītu valūtas koda nolaižamo izvēlni, Jomres var izmantot bezmaksas pakalpojumu IPinfoDB, lai noteiktu apmeklētāja valsti, tomēr jums ir jāreģistrējas API atslēgai vietnē <a href = "http: //ipinfodb.com/register.php target="_blank"> IPinfoDB </a> vispirms. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Atkļūdošana');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Summa bez PVN');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Summa ar PVN');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'PVN nodoklis:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Atvērt rezervācijas formu');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Atpakaļ uz naktsmītnes aprakstu');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automātiski pievienot?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Bilance (pēc depozīta iemaksas)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrēt numurus pēc to aprīkojuma.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Pēdējā rezervācija');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'sekundes');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minūtes');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'stundas');
jr_define('_JOMRES_DATEPERIOD_DAY', 'dienas');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'nedēļas');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mēnešus');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'gadus');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'dekādes');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'pirms');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'šā brīža');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezervācijas rēkina par sienām?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Pēc noklusējuma, rezervācijas cenas tiek aprēķinātas par diennakti, piemēram no 1.janvāra līdz 2.janvārim tiek rēķināta 1 diennakts. Bet ir lietas, ko Jūs varētu vēlēties izīrēt rēķinot katru dienu, piemēram automašīnu, vai klients drīkst palikt naktsmītnē līdz nākošās dienas vakaram. Ja atzīmēsiet šeit JĀ, tad, piemēram, par rezervāciju no 1.janvāra līdz 2.janvārim klients maksās par divām dienām.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Par dienu');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'No personas par dienu');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Ierašanās');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Izbraukšana');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'diena(s)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Izbraukšanas datums nepareizs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervācija ir par īsu. Minimālais dienu skaits starp ierašanās un izbraukšanas datumiem jābūt vismaz:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Ierašanās/Izbraukšanas minimālais intervāls');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Minimālais intervāls starp ierašanās un izbraukšanas datumiem. 1 nozīmē, ka ierašanās datums sakrīt ar izbraukšanas datumu.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Cenu aprēķina par dienu/ par nedēļu/ par mēnesi?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Par dienu');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dienas pirms ierašanās datuma');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Minimālais dienu skaits pirms ierašanās datuma.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Iestatiet šo uz jā, ja vēlaties ierobežot iepriekšējās rezervācijas (izmantojiet nākamo lauku, lai iestatītu ierobežojumu dienu izteiksmē). Ja to iestatāt uz jā, tad, ja lietotājs mēģina rezervēt vairāk nekā n dienas iepriekš, tad to saņemšanas datums tiks atjaunots līdz šodienas datumam ');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Rādīt izbraukšanas dienas ievadi?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Iestatiet to uz Nē, ja nevēlaties parādīt atgriešanās datuma ievades lodziņu. Izmantojiet to tikai tad, ja zināt, ko darāt, jo atgriešanās datums rezervējumos vienmēr tiks iestatīts uz dienu pēc saņemšanas datuma. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Ja iestatīsit šo opciju Jā, rezervācijas tiks veiktas uz noteiktu laiku. Ja tas ir iestatīts uz Nē, pārliecinieties, vai norādītā saņemšanas diena nav iestatīta uz Jā (ja vien neesat īpaši norādījis) vēlaties piespiest cilvēkus paņemt preces noteiktā nedēļas dienā) pretējā gadījumā pieejamības kalendārā nesaņemsiet daudz saišu. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Iepriekš noteikta saņemšanas diena');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Tikai vietnēm, kurās tiek piedāvātas rezervācijas uz noteiktu laiku. Izvēlieties nedēļas dienu, kurā ir jāveic saņemšana.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fiksēta saņemšanas diena');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fiksēti saņemšanas datumi:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Ja ir atlasīti fiksēti saņemšanas datumi, datumu skaits, ko var parādīt datumu nolaižamajā sarakstā. Ņemiet vērā, ka datumu sarakstā netiks iekļauti datumi, ja rezervācija nav iespējama iepriekšēju rezervāciju dēļ, un ka saraksts faktiski būs divreiz garāks par jūsu izvēlēto numuru, jo tajā būs līdzīgs skaits vēsturisko datumu (ja pieejams). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'No personas par dienu');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Izvēlieties Jā, ja vēlaties iekasēt maksu par personu dienā. Ja nē, tad izmaksas tiks aprēķinātas, pamatojoties uz katru resursu dienā');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Mainīgie noguldījumi ļauj jums noteikt, vai vēlaties iekasēt visu summu, ja rezervācijas saņemšanas datums ir N dienu laikā no šodienas. Lai iespējotu šo funkciju, iestatiet šo opciju uz Jā , un ievadiet zemāk esošo dienu skaitu, piemēram, ja, piemēram, saņemšanas diena ir 60 dienu laikā, tad iekasētā depozīta summa būs pilna summa, pretējā gadījumā summas pamatā būs iepriekš konfigurētās depozīta iespējas. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Lielākā daļa uzņēmumu pārrēķinās resursu cenas, pamatojoties uz noteiktā datumā pieejamo vajadzīgā veida resursu skaitu. Tas ļauj tiem piedāvāt atlaides resursiem/uzņēmējdarbības veidiem, kas nav aizņemti noteiktā laika posmā, lai piesaistītu biznesu, kas citādi varētu palaist garām. <br/> Iespējojot un konfigurējot šo spraudni, varat piedāvāt pielāgojamas cenas, pamatojoties uz konkrētā dienā pieejamā uzņēmuma veida resursu skaitu. <br/> Dienu slieksnis nosaka dienu skaitu, kurā jābūt saņemšanas datumam, pirms šī funkcija koriģē resursu cenas, pēc tam procentuālās opcijas ļauj konfigurēt to resursu procentuālo daudzumu, kas var būt pieejami pirms noteiktās atlaides piemērošanas. Tomēr ņemiet vērā, ja tiek rezervēti vairāki resursi, tad pašreizējais atlaides līmenis tiks piemērots visiem resursiem un netiks samazināts, jo tiks izvēlēti vairāk resursu. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Slieksnis (dienu skaits starp saņemšanas datumu un šodienu)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Saņemšana gaida');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Paņemts');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Atgriež šodien');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Atgriešanās kavēta');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Nav paņēmis');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dienas');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Atzīmēt rezervētu rezervāciju.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Atzīmēt rezervāciju kā atgrieztu.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Atzīmēt rezervāciju kā saņemtu');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Atzīmēt rezervāciju kā atgrieztu');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Maksa dienā:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Dienu skaits:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Pārrakstīt kopsummu');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Saglabāt kopsummu');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Nosūtīt e -pastu jauniem lietotājiem viņu pieteikšanās datus?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Ja opcija Izveidot jaunu lietotāju ir iestatīta uz Jā, varat iestatīt šo opciju uz Nē, lai nodrošinātu, ka pēc lietotāja izveides viņiem netiek nosūtīta e -pasta pieteikšanās informācija. Tas var būt noderīgi, ja esat automātiski jaunu lietotāju pievienošana, piemēram, adresātu sarakstam un nevēlas, lai lietotāji tiešām pieteiktos. ');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Rādīt PVN informāciju rezervācijas kopsavilkumā?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Neļaujiet rezervācijas veidlapai rādīt kopsummas kopsavilkuma nodokļu cenu laukus, iestatot šo opciju uz Nē');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Anulēšanas Threashold');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Pierakstījies, reģistrētie viesi var atcelt savas rezervācijas. Šeit jūs varat iestatīt trīs dienu skaitu, kad rezervāciju nevar atcelt pēc noteikta dienu skaita pirms ierašanās datuma.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Labot profilu');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Īpašuma veida attiecības');
jr_define ('_JOMRES_IMAGE', 'Attēls');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Noklikšķiniet uz vēstules, lai parādītu visus uzņēmumus ar pirmo rakstzīmi. Kad esat izveidojis īpašumu sarakstu, varat piešķirt šiem īpašumiem komisijas maksas vai noklikšķiniet uz to rediģēšanas ikonas, lai apskatītu uzņēmumu \' s statistika. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Rediģēt nodokļa likmi');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Rediģēt pielāgotu lauku');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'Licences servera parole');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Licences servera lietotājvārds');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Ja jums ir lietotājvārds un parole licences serverī, lūdzu, ievadiet tos šeit. Tas palīdzēs jums piekļūt spraudņiem, kas jums ir tiesības. Ja iepriekšējā laukā esat ievadījis derīgu atbalsta atslēgu, tad šeit nav jānorāda lietotājvārds/parole. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Šī Jomres versija:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Jaunākā Jomres versija');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Brīdinājums: ir pieejama jauna Jomres versija, ieteicams jaunināt pēc iespējas ātrāk.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Laipni lūdzam Jomres. Pamata sistēma ir bezmaksas, taču to var uzlabot, instalējot spraudņus. Lai piekļūtu šiem spraudņiem, jums būs nepieciešama lejupielādes un atbalsta licence. Ja vēlaties iegādāties Jomres starteri , Uzņēmējdarbības vai uzņēmuma licence, <a href="http://www.jomres.net/prices" target="_blank"> lūdzu, apmeklējiet mūsu vietni </a>, lai iegūtu informāciju par jaunināšanu. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Šī sistēma ir ideāli piemērota jebkuram scenārijam, vai tā būtu vienkārša rezervācijas veidlapa vienam īpašumam, līdz pat vietnei, kurai ir vairāki lietotāji, vairākās valodās un ar vairākiem īpašumiem. Lūdzu, skatiet "Palīdzība" izvēlnes sadaļu, ieskaitot lapu "Darba sākšana", kas palīdzēs jums veikt pirmās darbības. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktīvā naktsmītne');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'E -pasta iestatījumi');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Iestatiet šo opciju uz Jā, lai izmantotu šos alternatīvos SMTP iestatījumus. Šķiet, ka arvien vairāk tīmekļa mitinātāju bloķē PHP pasta funkcionalitāti, tāpēc varat izvēlēties pārspīlēt e-pasta iestatījumus, ko Jomres izmanto no jūsu resursdatora CMS (parasti Joomla) un izmantojiet šeit jūsu izvēlētos iestatījumus. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternatīvais saimniekdators');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Mainīt šo uz savu smtp pasta serveri');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternatīva osta');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Mainīt šo uz savu smtp portu');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternatīvais protokols');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Atkarībā no jūsu smtp servera iestatījumiem šis lauks jāatstāj tukšs vai jāievada 'ssl' vai 'tls'. Ja nezināt, jautājiet savam SMTP pakalpojumu sniedzējam");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Izmantot autentifikāciju');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Ja jūsu SMTP serveris pieprasa klientiem pieteikties, iestatiet to uz Jā. Pēc tam tiks izmantots lietotājvārds un parole.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternatīvs lietotājvārds');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternatīvā parole');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Īsā informācija');
jr_define('_JOMRES_MENU_SHOW', 'Rādīt');
jr_define('_JOMRES_MENU_HIDE', 'Slēpt');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Noklusējums');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Jebkurš');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Reģistrēts');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Pārvaldnieks');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super vadītājs');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Neviens');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Piekļuves kontrole');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Šī funkcija ļauj jums kontrolēt, kurš varēs redzēt spraudni galvenajā izvēlnē. Parasti lietotāja opcijas 00009 var redzēt vietnes apmeklētāji/vai nereģistrēti, 00010 opcijas parasti attiecas uz reģistratūras veida aktivitātēm. izmanto ikdienā, turpretim 00011 opcijas tiek izmantotas īpašuma iestatīšanai un konfigurēšanai, bet tām piekļūst retāk. ');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Uzņemšana');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Pilna kontrole');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Iestatiet šo opciju uz Jā, lai iespējotu pilnu piekļuves kontroles līdzekli, pēc tam apmeklējiet opciju Piekļuves kontrole sadaļā Sistēmas uzturēšana, lai konfigurētu piekļuves kontroles.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Tomēr ņemiet vērā, ka šie iestatījumi nekontrolē pamatā esošos skriptus, ar kuriem tie savienojas, tādēļ, piemēram, ja iestatāt <i> 00009user_option_03_search </i> uz Pārvaldnieks, lietotājs, kurš zina, ka Jomres joprojām var zvaniet j06000search.class.php, pārlūkprogrammas adreses joslā ievadot http://www.domain.com/index.php?option=com_jomres&task=search. Tas ir apzināti, jo šī izvēlnes piekļuves vadīkla vienkārši kontrolē to, kas redzams Jomres galvenā izvēlne. Ja jums nepieciešama stingrāka vadība, iestatiet opciju Vietnes konfigurācija -> Pilna piekļuves kontrole uz Jā un vēlreiz apmeklējiet izvēlnes piekļuves kontroles opciju. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Pilna piekļuves kontrole');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Šī funkcija ir paredzēta tikai pieredzējušiem lietotājiem. Ja nezināt, kam tā paredzēta, un jums nav konkrēta iemesla to izmantot, lūdzu, atgriezieties vietnes konfigurācijā un iestatiet pilnu piekļuvi Vadības opcija uz Nē </strong> <br/>
Šī funkcija ļauj jums kontrolēt, kurš var piekļūt kādiem minikomponentiem (ar dažiem izņēmumiem, kas sistēmā ir kodēti). Ja piekļuves līmenis blakus skripta nosaukumam ir iestatīts uz Noklusējums, tad, ja opcija Pilna piekļuves kontrole ir iestatīta uz Jā <strong> ikviens </strong> var piekļūt skriptiem, kuriem viņiem nevajadzētu piekļūt, tādēļ, ja plānojat to izmantot iezīme, jums IR jāiestata piekļuves kontroles līmenis <strong> katram </strong> šeit uzskaitītajam Jomres minikomponentam. Ja jūs nezināt, ko dara šīs minikomponentes, mēs ļoti iesakām šo funkciju vispār neizmantot. <br/>
Jomres piekļuves līmeņi seko piramīdai, tāpēc īpašumu pārvaldnieki ir lielāki par pārvaldniekiem. Īsāk sakot, Super vadītājs> Pārvaldnieks> Reģistratūra> Reģistrēts> Nereģistrēts. Tātad, ja reģistrētam lietotājam ir piekļuve minikomponentam, to dara arī reģistratūras darbinieki, vadītāji un superpārvaldnieki. <br/>
Ņemiet vērā, ka jūs nevarat kontrolēt administratora apgabala minikomponentus. Jebkurš administratora apgabalā tiek uzskatīts par uzticamu lietotāju, jo viņam nevajadzētu bloķēt piekļuvi nevienam skriptam (īpaši šim).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Brīdinājums! Jums ir iespējota pilna piekļuves kontrole, taču mēs esam saskaitījuši piekļuves kontroles iestatījumus un salīdzinājuši tos ar kontrolējamo minimālo komponentu skaitu, un abi nesakrīt, tāpēc jums var būt daži skripti, kas netiek kontrolēti. Tā varētu būt drošības problēma, un jūs tiekat aicināti to atrisināt uzreiz, apmeklējot piekļuves kontroles līdzekli un pārbaudot, vai ir piemēroti atbilstošie līmeņi. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Lietotāji ar administratora tiesībām uz šo īpašumu');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Jūsu e-pasta adrese');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Modelis');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Spēks');
jr_define ('_JOMRES_METATITLE', 'Meta nosaukums');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta apraksts');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Pievienot Jūsu naktsmītni : Solis 2 no 2');
jr_define('_JOMRES_CART_TITLE', 'Manas iecerētās rezervācijas');
jr_define('_JOMRES_CART_INFO', 'Atcerieties, ka šīs rezervācijas vēl nav saglabātas. Ja Jūs izlogosieties no portāla vai Jūsu sesijas laiks beigsies, rezervāciju dati nesaglabāsies. Neaizmirstiet apstiprināt savas rezervācijas!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Apstiprināt rezervāciju(as)');
jr_define('_JOMRES_CART_OR', ' vai ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'saglabāt vēlākai apstiprināšanai.');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Jums nav saglabātu rezervāciju.');
jr_define('_JOMRES_CART_VIEWCART', 'Skatīt grozu');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Latitude noklusējuma sākumpunkts');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Noklusējuma garuma sākumpunkts');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Google kartē īpašuma rediģēšanas lapā, pirms marķiera pārvietošanas jābūt noklusējuma platuma/garuma sākuma punktiem?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'No kuras adreses nosūtīti e -pasta ziņojumi?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Atstājiet šo opciju tukšu, lai to atspējotu. Jomres, nosūtot e -pastus viesiem, izmantos viesnīcas e -pasta adresi (-es), tomēr jūsu e -pasta pakalpojums VARĒTĪT neatļaut e -pastus no patvaļīgām adresēm (ti, var atļaut tikai e -pastus no) viena autorizēta adrese). Šādā gadījumā varat izmantot šo ievadi, lai ievadītu adresi, kas tiks uzskatīta par FROM adresi visiem sistēmas e -pastiem. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Saraksta skats');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Fotoattēla skats');
jr_define ('_JOMRES_COMPARE', 'Salīdzināt');
jr_define ('_JOMRES_REMOVE', 'Noņemt');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Atgriezties meklēšanas rezultātos');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Pievienot izlasei');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Noņemt no izlases');
jr_define ('_JOMRES_VIEWSHORTLIST', 'Skatīt savu sarakstu');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Svarīgi: sīkfailu politika');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Mēs izmantojam sīkfailus, lai mūsu vietne būtu atbilstoša un ērti lietojama.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Lasīt vairāk ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'ES tiesību akti paredz, ka visās vietnēs ir skaidri jānorāda, vai tiek izmantotas sīkdatnes un to mērķis.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Šīs vietnes meklēšanas un rezervēšanas dzinējam jāspēj atcerēties jūsu izvēlētās opcijas, lai tās vislabāk darbotos. Lai to izdarītu, tai ir jāsaglabā informācija, kas ir saistīta ar nelielu failu ar nosaukumu \"sīkfails\", kas unikāli identificē jūsu pārlūkprogrammu, un lai mēs to varētu izdarīt, jums jāpiekrīt, ka mēs to varam. Ja jūs nepieņemat šo sīkfailu politiku, jums būs stingri ierobežotas iespējas, ko varat darīt šajā vietnē. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Jā, es piekrītu sīkdatņu izmantošanai šādā veidā.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Nepieciešamais depozīts ir pirmās nakts maksa?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Cenas tiek aprēķinātas par nakti. Vai vēlaties, lai depozīts tiktu iekasēts par vienu nakti? Ja jā, varat ignorēt šādas iespējas.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Jūs neesat pievienojis nevienu vienumu saviem favorītiem.");
jr_define ('_JOMRES_SAFEMODE', 'Vai iespējot drošo režīmu?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Iestatiet šo uz Jā, lai aktivizētu drošo režīmu. Tādējādi tiks atspējoti visi spraudņi, lai Jomres izmantotu tikai tās pamatfunkcijas.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Atcelt');
jr_define ('COMMON_SUBMIT', 'Iesniegt');
jr_define ('COMMON_SAVE', 'Saglabāt');
jr_define ('COMMON_DELETE', 'Dzēst');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Aizvērt');
jr_define ('COMMON_BACK', 'Atpakaļ');
jr_define ('COMMON_HOME', 'Sākums');
jr_define ('COMMON_NEW', 'Jauns');
jr_define ('COMMON_SEND', 'Sūtīt');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha tiek izmantots, lai nodrošinātu, ka klients, kas izmanto tīmekļa veidlapas, ir cilvēks, un tiek izmantots, lai novērstu to, ka interneta pārvaldnieki roboti "nespammē" īpašuma pārvaldniekus. Lai izmantotu veidlapu Sazināties ar mums vietnē Jomres you būs jāreģistrējas <a href="http://www.google.com/recaptcha" target="_blank"> Google reCaptcha </a> sākumlapā un jāiestata, lai jūsu domēns saņemtu jūsu publiskās un privātās atslēgas. jūs esat saņēmis šīs atslēgas, lūdzu, ievadiet tās zemāk. Pakalpojums reCapcha ir bezmaksas pakalpojums, ko nodrošina Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Publiskā atslēga');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'Privātā atslēga');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Bloķēšanas faila noildze');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Lai novērstu viesu draudus divkārši rezervēt numurus, Jomres izmanto bloķēšanas failu, lai novērstu to, ka rezervācijas veidlapā pieejamo istabu saraksts tiek pievienots, ja kāds cits jau ir pievienojis istabu tiem pašiem datumiem . Pēc noklusējuma šī bloķēšana beigsies pēc 3600 sekundēm vai vienas stundas. Jūs varat mainīt laiku, kas nepieciešams šīs slēdzenes derīguma termiņa beigām, mainot šo skaitli. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Vai iespējot Jomres Bootstrap veidnes un funkcionalitāti?");
jr_define ('COMMON_ACTION', 'Darbība');
jr_define ('COMMON_VIEW', 'Skatīt');
jr_define ('BACKTOTOP', 'Atpakaļ uz augšu');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Vāja');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Spēcīgs');
jr_define ('_JOMRES_INPUTFILTERING', 'Ievades filtrēšana');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Ievades filtrēšanas līmenis');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Lielākā daļa sistēmā ievadīto datu tiek dezinficēti, vispirms noņemot visus html tagus, pēc tam izmantojot PHPs mainīgās filtrēšanas funkcionalitāti, lai padarītu datus drošus pirms to ievadīšanas datu bāzē. Iespējams, vēlēsities atļaut noteiktas ievades (piemēram, teksta ievades rekvizītu informācijas lapā), lai iekļautu HTML. Šīs ievades filtrēšanai varat izmantot divus filtrēšanas līmeņus - Vāja vai Spēcīga. Iestatījumu Vājais jāizmanto tikai tad, ja lietotājs (-i) ievada jūs uzticaties datiem, piemēram, citi sistēmas administratori, pretējā gadījumā atstājiet tos kā spēcīgus. Ja iestatīts uz spēcīgs (ieteicams), jūs joprojām varat norādīt, kurus tagus atļaut, rediģējot nākamo iestatījumu “HTML attīrītāja atļautie tagi.") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Atļautie ievades tagi');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Jūs varat rediģēt tagus, ko html attīrītājs atļaus caur tās filtrēšanas sistēmu. Noklusējums ir \" p, b, strong, a [href], i \" (ti, treknrakstā, spēcīgi, saites un slīpraksts ). Lai iegūtu plašāku informāciju par atļautajiem tagiem, lūdzu, izlasiet HTML attīrītāja dokumentāciju vietnē <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Lai gan varat mainīt šo iestatījumu, ieteicams atstāt to noklusējuma iestatījumu. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Atļautās ievades');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Jūs varat definēt, kuras veidlapas ievades atļaus html, rediģējot šo opciju, jebkura šim sarakstam pievienotā ievade tiks parsēta, izmantojot HTML attīrītāju, nevis visu html noņemšanu. Noklusējums ir: property_policies_disclaimers '. Pievienojiet vairāk datu, pievienojot to nosaukumus, atdalot ar atstarpi. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Īpašuma informācija cilnēs?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Iestatiet šo opciju, lai cilnēs tiktu rādīta rekvizītu informācija. Iestatiet to uz nē, lai tie netiktu rādīti bez cilnēm.');
jr_define ('COMMON_PRINT', 'Drukāt');
jr_define ('COMMON_EDIT', 'Rediģēt');
jr_define ('COMMON_COPY', 'Kopēt');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres ir paredzēts darbam gan Bootstrap 2, gan Bootstrap 3 ietvaros. Kad esat instalējis BS2 vai BS3 motīvu vai veidni, iestatiet šo slēdzi, lai izvēlētos, kuras Bootstrap garšas vēlaties, lai Jomres darbotos. ar. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Vai lietot priekšpusē Jomres Bootstrap veidnes?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Šeit ir dažas alternatīvas, kuras jūs varētu vēlēties apsvērt.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Vai automātiski noteikt viesa valsti?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistēma mēģinās automātiski noteikt viesa valsti, ja viņš to iepriekš nav rezervējis. Varat iestatīt šo opciju uz Nē un norādīt valsti, kuru vēlaties parādīt rezervācijas veidlapā, nākamā iespēja. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Par Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'palīdzība');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Darba sākšana');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Piekļuves kontrole');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'izstrādātāja rīki');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'valodas');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'ienākumu gūšana');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'vietnes struktūra');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Rokasgrāmata (tiešsaistē)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mans konts (tiešsaistē)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portāla funkcionalitāte');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Spraudņa pārvaldnieks');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integrācija');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'atskaites/statistika');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'palīdzība');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Atjauninājumi');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'maksājuma veidi');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarifa noklusējums');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Tas attiecas tikai uz jauniem tarifiem');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Gads parādīt');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Nosaka gadu skaitu, kas jāparāda, rediģējot tarifa veidu');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'rēķini');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'konta informācija');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Pieteikšanās');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Izrakstīties');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'meklēt');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'informācijas panelis');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezervēt');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'rēķini');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'iestatījumi');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'dažādi');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Rediģēt valsti');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'Valsts id');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Valsts kods');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Valsts nosaukums');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Rediģēt reģionu');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Reģiona id');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Valsts kods');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Reģiona nosaukums');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Sarakstīt valstis');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Sarakstīt reģionus');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Eksportēt definīcijas');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Šī funkcija ļauj eksportēt tulkojumus, kas izveidoti, izmantojot valodu tulkošanas funkciju. Tas izveidos teksta lauku ar visiem datiem, kas nepieciešami, lai izveidotu jaunu valodas failu, viss, kas jums jādara ir nokopēt un ielīmēt šo izvadi jaunā valodas failā, kuru varat ievietot jaunā Jomres serverī vai ja vēlaties atgriezties Jomres kopienā. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Tulkot lokalizācijas');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Tulkot lang failu virknes');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Kļūda, lietotājs, kurā esat pieteicies, nav super pārvaldnieks Jomresā, jūs nevarēsit izmantot šo funkciju, kamēr neesat izmantojis īpašumu pārvaldnieku funkciju, lai padarītu sevi gan par pārvaldnieku, gan super menedžeris. Šī ir drošības funkcija. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Īpašumu saraksta noklusējuma izkārtojums');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Palieciet vismaz');
jr_define ('_JOMRES_NIGHTSFOR', 'naktis');
jr_define ('_JOMRES_AGENT', 'aģents');
jr_define ('_JOMRES_AGENT_DETAILS', 'Aģenta informācija');
jr_define ('_JOMRES_AGENT_LISTINGS', "Aģenta saraksti");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automātiski apstiprināt jaunus rekvizītus');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Ja iestatāt šo opciju uz Nē, jums būs manuāli jāapstiprina jauni rekvizīti. Kamēr īpašums nav apstiprināts, pārvaldnieks/īpašumu pārvaldnieks to nevar publicēt.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Apstiprinājumi');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Šis īpašums vēl nav apstiprināts. Kad tas būs apstiprināts, jūs varēsit to publicēt.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Diemžēl šo īpašumu nevar publicēt, jo tas vēl nav apstiprināts.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Jaunam īpašumam nepieciešams apstiprinājums');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Sistēmai ir pievienots īpašums, kuram nepieciešams jūsu apstiprinājums. Noklikšķiniet uz saites, lai apskatītu apstiprinājumu sarakstu, kas gaida apstiprinājumu:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Jūsu īpašums ir apstiprināts');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Apsveicam, jūsu īpašums ir apstiprināts, lūdzu, noklikšķiniet uz šīs saites, lai apskatītu īpašuma vadības paneli:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Reģionu nosaukumi ir tulkojami');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Ja vien nedarbojat ļoti ātru serveri, ieteicams šo iestatījumu atstāt uz Nē. Lielā reģionu nosaukumu skaita dēļ reģiona nosaukumu tulkošana aizņem daudz atmiņas, kas var palēnināt jūsu meklēšanas rezultātus uz leju. ");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Viesis rezervēts.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Diemžēl šī e -pasta adrese jau tiek izmantota. Ja šī ir jūsu e -pasta adrese, lūdzu, pirms mēģināt rezervēt, lūdzu, esat pieteicies.');
jr_define ('JOMRES_TAPTOCALL', 'Pieskarieties, lai zvanītu');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Jauna atsauksme par');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Jauna atsauksme ir atstāta');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Jauns pārskats');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'Ziņots par pārskatu');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Kopējā summa (bez nodokļiem):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Kopējā summa (ar nodokļiem):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Kopējais nodoklis:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Ierakstiet divus vārdus:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Ievadiet dzirdēto:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Atskaņot audio celiņu');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Lejupielādēt ierakstu MP3 formātā');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizuālais režīms');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio režīms');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Atsvaidzināt');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Palīdzība');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Atvainojiet, tas bija nepareizi. Lūdzu, mēģiniet vēlreiz.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Google kartes opcijas');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Vai izmantot laika slāni?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celsijs');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fārenheits');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Vai izmantot tranzīta slāni?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Iespējot Gmap interesējošos punktus (ieskaitot, iespējams, jūsu konkurentus)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta atslēgvārdi');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Skenējiet šo kodu savā tālrunī, lai saņemtu norādes uz mums.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Ievadītais PVN numurs, šķiet, nav pareizs. Jums vajadzētu būt apmēram šādam: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Nederīgs PVN numurs. Lūdzu, pārbaudiet sava PVN numura derīgumu, izmantojot Eiropas PVN numura validācijas tīmekļa pakalpojumu (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Apsveicam! Mēs varējām apstiprināt jūsu PVN numuru.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Sarakstiet nodokļu noteikumus');
jr_define ('_JOMRES_TAX_RULE', 'Nodokļu noteikums');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Nodokļu noteikumi tiek izmantoti, lai izveidotu dažādus nodokļu noteikumus dažādiem reģioniem. Šie nodokļu noteikumi ietekmē rezervācijas veicēju, ja tas ir reģistrēts, pieteicies un rediģējis savu kontu, izmantojot lapu "rediģēt manu kontu" . Šo noteikumu mērķis ir izmitināt rezervētājus tajās zonās, kuras ir atbrīvotas no PVN, iespējams, ka jums nav jāizveido daudzi noteikumi, ja tādi vispār ir. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Importa nodokļa likmes');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Mēs varam jums importēt nodokļu likmes par jums, ja vēlaties. Ņemiet vērā: ja izmantojat šo funkciju, visas jūsu esošās nodokļu likmes tiks noņemtas.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Rediģēt nodokļu noteikumu');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'Šī īpašuma PVN numurs.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Lūdzu, ievadiet šī īpašuma PVN numuru.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'PVN numurs apstiprināts');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'PVN numurs nav apstiprināts');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Šeit ievadītā uzņēmuma informācija tiks izmantota komisijas un abonementa rēķinos.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Šķiet, ka jūs vēl neesat aizpildījis sava konta informāciju. Lai uzskaitītu savu īpašumu vietnē, mums ir jāaizpilda sava konta informācija, pirms varam doties tālāk.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Ražošana vai attīstība?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Ja iestatīsit šo opciju uz Attīstība, mēs iespējosim kļūdu ziņošanu, pretējā gadījumā, ja iestatīts uz Ražošana, kas tiks izslēgta. Ja tas ir aktīvs serveris, iesakām iestatīt šo opciju uz "ražošanu".' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Ražošana');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Attīstība');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Informācija par resursiem');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Informācija par tarifu');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Tikai');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'pa kreisi!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resursu līdzeklis');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Nevar noņemt šo resursa līdzekli, tas tiek piešķirts resursam. Noņemiet līdzekli no šī resursa un mēģiniet vēlreiz.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Multivides centrs');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Pievienot attēlus');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Istabas attēli');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Īpašuma galvenais attēls');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slaidrādes attēli');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Notīrīt sarakstu');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Velciet un nometiet failus šeit');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Izvēlieties resursu, kuram vēlaties augšupielādēt attēlus. Ja varat augšupielādēt attēlus atsevišķiem resursiem (piemēram, telpām), jums tiks dota otrā nolaižamā izvēlne, lai izvēlētos konkrēto resursu.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ja augšupielādējat vairākus attēlus kā galveno īpašuma attēlu, tie tiks izmantoti īpašumu sarakstā. Slaidrādes attēli tiks parādīti rekvizītu informācijas lapā.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Skatīt savu attēlu');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Dzēst attēlu');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Augšupielādēt attēlu');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Telpu veidu ikonas');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Īpašuma funkciju ikonas');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Augšupielādēt visus failus');
//8.0
jr_define ('COMMON_PREV', 'Iepriekšējais');
jr_define ('COMMON_MORE', 'Vēl');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Šodien');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Gads');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Mēnesis');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Nedēļa');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Diena');
jr_define ('_JOMRES_HLEGEND', 'Leģenda');
jr_define ('_JOMRES_HFILTER', 'Filtrs');
jr_define ('_JOMRES_HFROM', 'No');
jr_define ('_JOMRES_HTO', 'Kam');
jr_define ('_JOMRES_HNEW_BOOKING', 'Jauna rezervācija');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Depozīta statuss');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Viesa statuss');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Rezervācijas statuss');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Publicēšanas statuss');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Rēķina statuss');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Rēķina veids');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Apstiprināts');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Pašreizējais bizness');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Rādīt rezervācijas');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Rādīt rēķinus par');
jr_define ('_JOMRES_STATUS_ANY', 'Jebkurš');
jr_define ('_JOMRES_STATUS_PAID', 'Apmaksāts');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Nav samaksāts');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Izrakstīts');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Aktīvs');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Atcelts');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Publicēts');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Nav publicēts');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Viesi ar aktīvām rezervācijām');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Viesi ar iepriekšējām rezervācijām');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Rezervācijas');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonementi');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Komisijas');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Visi mani uzņēmumi');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Iestatīt kā pašreizējo');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Reģistrēties');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Izbraukšana');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'rezervācijas');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'rekvizīti');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'viesi');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'ziņojumi');
jr_define ('_JOMRES_HLIST_GUESTS', 'Viesi');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Sarakstīt viesus');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Rēķinu saraksts');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Rekvizīti');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Ātrā rezervēšana');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Rezervācijas datums');
jr_define ('_JOMRES_HTWO_WEEKS', 'Divas nedēļas');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Šī rezervācija tiks atcelta. Nospiediet OK, lai atceltu rezervāciju.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Šodien reģistrējas');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Šodien izrakstīšanās');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Pašreizējie iedzīvotāji');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Navigācijas joslas atrašanās vieta');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Noklusējums (satura apgabals)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fiksēts uz augšu');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fiksēts līdz apakšai');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Apgriezta navigācijas josla (krāsas maiņa)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Rezervācijas numurs');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Parādīt viesus');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap versija');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres ietver savas veidņu kopas, vienu katrai atbalstītajai Bootstrap versijai. Joomla un Wordpress veidnes/motīvi, kuru pamatā ir Bootstrap, piedāvās noteiktu Bootstrap versiju, tāpēc jums ir jāpārliecinās, ka izvēlētā opcija šeit ir saderīgs ar jūsu veidni/motīvu. Ja jūsu motīvs neparedz Bootstrap kodu, iestatiet šo opciju uz No Bootstrap in Theme un tad Jomres automātiski iekļaus Bootstrap 3 failus savai lietošanai. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Parādīt viesus');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Fiksēti periodi');
jr_define ('_JOMRES_HDEPOSITS', 'Noguldījumi');
jr_define ('_JOMRES_HBOOKING_FORM', 'Rezervācijas veidlapa');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Obligātie lauki');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Toms');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smits');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'Mana iela');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'Mana pilsēta');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'Mana viesnīca');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Paplašināta konfigurācija');
jr_define ('SIMPLE_CONFIGURATION', 'Vienkārša konfigurācija');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Resursu līdzekļi');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Resursa veids');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Rediģēt viesa veidu');
jr_define ('_JOMRES_HEDIT_COUPON', 'Rediģēt kuponu');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Rediģēt papildus');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Izveidot vairākus resursus');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Ģenerēt resursus');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Cik resursu?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resursu veids');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maksimālais viesu skaits uz resursu');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Vai dzēst visus esošos resursus?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Lūdzu, ņemiet vērā, ka jūs pašlaik skatāt administratora apgabalu ar iestatījumu Papildu vietnes konfigurācija uz Nē. Ja vēlaties redzēt vairāk iespēju, lūdzu, iestatiet Vietnes konfigurācija -> Dažādi -> Papildu vietnes konfigurācija uz Jā.');
jr_define ('DATATABLES_SINFO', 'Rāda no _START_ līdz _END_ no _TOTAL_ ierakstiem');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Apstiprināšana');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Noraidīt rezervācijas pieprasījumu');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Apstiprināt rezervācijas pieprasījumu');
jr_define ('_JOMRES_STATUS_APPROVED', 'Apstiprināts');
jr_define ('_JOMRES_STATUS_REJECTED', 'Noraidīts');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Izmeklēt');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezervācijām nepieciešams apstiprinājums vai pieejamības apstiprinājums?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ja iestatīts uz jā, rezervējuma veikšanas laikā tas netiks rādīts pieejamības kalendāros (un citi viesi joprojām var rezervēt šīs dienas un resursus), kamēr īpašuma pārvaldnieks nepieņems/apstiprinās rezervācijas pieejamību. . Pēc apstiprināšanas rezervācija tiek ievietota kā provizoriska (ja tā neatceļ citas rezervācijas; citi viesi vairs nevar rezervēt tos pašus datumus), un klientam tiek nosūtīts e -pasts, lai veiktu maksājumu. ');
jr_define ('_JOMRES_ERROR', 'Kļūda');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Atvainojiet! Mēģinot apstrādāt šo funkciju, radās kļūda. Par to tika ziņots jums, un mēs to izskatīsim.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Ziņojums');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Fails');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Līnija');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Izsekošana');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -pasta veidnes');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Rediģēt e -pasta veidni');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'E -pasta tēma');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'E -pasta teksts');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E -pasta veids');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'E -pasta nosaukums');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'E -pasta apraksts');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Lūdzu, skatiet šo lapu, lai saņemtu palīdzību e-pastu pielāgošanā un pieejamās izejas sarakstu: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates target="_blank"> E-pasta veidņu palīdzība </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Vietnes administratora jauns rezervācijas e -pasts');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Vietnes administratoram nosūtīts e -pasts, veicot jaunu rezervāciju, ja ir iespējota globālā Paypal vārteja');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Viesnīcas jaunās rezervācijas e -pasts');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Īpašnieka īpašniekam nosūtīts e -pasts, veicot jaunu rezervāciju');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Viesu jaunās rezervācijas e -pasts');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -pasts nosūtīts viesim, veicot jaunu rezervāciju');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Viesa apstiprinājuma vēstule');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Drukājama vēstule vai e -pasts, ko īpašuma īpašnieks var nosūtīt manuāli, lai apstiprinātu rezervāciju');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Šo rezervāciju var apstiprināt. Visi atlasītie resursi ir pieejami atlasītajiem datumiem.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Šo rezervāciju nevar apstiprināt, jo daži resursi jau ir rezervēti atlasītajiem datumiem. Vispirms jums būs jāmaina rezervācija.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Rādīt saiti Powered by Jomres Jomres kājenē.');
jr_define ('GUEST_BUDGET', 'Budžets');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Vai izmantot budžeta līdzekli?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Tikai sāknēšanas vietnes! Budžeta funkcija ir īpašumu saraksta iezīme, kuru viesis var izmantot, lai izceltu tiem īpašumus, kuru cena par nakti ir zemāka par noteiktu skaitli. Funkcijai ir daži ierobežojumi, jo tā var nav piemērots dažām vietnēm, kurās tiek izmantota daudz dažādu valūtu. Ņemiet vērā: ja izmantojat šo un piedāvāto ierakstu spraudni, kad tiek parādīts īpašumu saraksts, jūsu piedāvāto ierakstu ietīšanas klase tiek automātiski mainīta uz “paneļa primārā'. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nosaukums:');
jr_define ('_JOMRES_FOR', 'Par');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'nakts');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'naktis');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Vai īpašumu sarakstā izmantot ritināšanu reāllaikā/infinēt ritināšanu?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'februāris');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'marts');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'maijs');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'jūnijs');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'jūlijs');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'augusts');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'oktobris');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'decembris');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Parādīti _START_. līdz _END_. no _TOTAL_ ierakstiem');
jr_define('DATATABLES_SINFOEMPTY', 'Nav ierakstu');
jr_define('DATATABLES_SINFOFILTERED', '(atlasīts no pavisam _MAX_ ierakstiem)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Rādīt _MENU_ ierakstus');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Uzgaidiet...');
jr_define('DATATABLES_SSEARCH', 'Meklēt:');
jr_define('DATATABLES_SZERORECORDS', 'Nav atrasti vaicājumam atbilstoši ieraksti');
jr_define('DATATABLES_SFIRST', 'Pirmā');
jr_define('DATATABLES_SLAST', 'Pēdējā');
jr_define('DATATABLES_SNEXT', 'Nākošā');
jr_define('DATATABLES_SPREVIOUS', 'Iepriekšējā');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'Mainīt kolonnas');
jr_define ('_BOOKING_ONREQUEST', 'Rezervācija pēc pieprasījuma');
jr_define ('_BOOKING_INSTANT', 'Tūlītēja rezervācija');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Vai iekļaut satriecošo fontu ikonu kopu?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Iestatiet to uz Jā, ja jūsu veidnē nav ietverts Fonts Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'Pieprasīt rezervāciju');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Dārgais');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Atlasīt vietni');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Vietnes ID');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'ES valsts?');
jr_define ('_JOMRES_HLASTCHANGED', 'Pēdējo reizi mainīts');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Viesnīcas rezervācijas atcelšanas e -pasts');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Īpašnieka īpašniekam nosūtīts e -pasts, atceļot jaunu rezervāciju');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Viesu rezervācijas atcelšanas e -pasts');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -pasts nosūtīts viesim, kad tiek atcelta jauna rezervācija');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Sūtīt testa e -pastu');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Pārbaudīt e -pastu');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Šis ir pārbaudes e -pasts no jūsu rezervēšanas sistēmas.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testa e -pasts veiksmīgi nosūtīts');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testa e -pasts netika nosūtīts');
jr_define ('_INVOICE_TRANSACTIONS', 'Darījumi');
jr_define ('_OPENEXCHANGE_API', 'Open Exchange Rates API atslēga');
jr_define ('_OPENEXCHANGE_API_DESC', 'Lai konvertētu cenas starp pakalpojumiem, jums būs nepieciešama Open Exchange Rates API atslēga. Jums ir jābūt API atslēgai, lai pareizi parādītu cenas Jomres, tomēr varat <a href = "https://openexchangerates.org /signup/free "_target =" _ blank "> reģistrējieties bezmaksas atslēgai </a> (stundas atjauninājumi, 1000 pieprasījumi mēnesī - bez HTTPS, e -pasta atbalsta vai papildu funkcijām). Jomres lejupielādē valūtas kursu reizi dienā, kamēr ja izmantojat atslēgu tikai dažās vietnēs, jūs, visticamāk, nepārsniegsit šos ierobežojumus. Pirms Jomres 8.3 mēs izmantojām vecāku, bez dokumentiem reģistrētu Yahoo funkciju, tomēr atklājām, ka šīs funkcijas izmantošana ir pretrunā ar Yahoo noteikumiem un Tā rezultātā mums ir jāpieņem, ka šī funkcija kādā brīdī nākotnē var pazust, līdz ar to tiek mainīta atvērto valūtas kursu izmantošana. ');
jr_define ('_JOMRES_COMMISSION', 'Komisija');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ja augšupielādējat vairākus attēlus atsevišķām papildu iespējām, tiks izmantots tikai pirmais attēls.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Maksāt tūlīt');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Šis rēķins ir jāmaksā. Lūdzu, noklikšķiniet uz pogas, lai izvēlētos maksājuma veidu.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Šeit ir saraksts ar dažām lieliskām lietām, kuras varat iegādāties, veicot rezervāciju šajā īpašumā.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'Šajā lapā jūs varat konfigurēt visas instalētās vārtejas. Šīs opcijas ļauj veikt maksājumus par visiem Komisijas vai abonementa rēķiniem. Frontend iestatījumus var ignorēt tikai Paypal, visas pārējās vārtejas būs jākonfigurē, izmantojot Īpašuma konfigurācija -> cilne Vārtejas, tomēr, ja šajā sarakstā parādās vārteja, tai vajadzētu būt spējīgai apstrādāt gan rezervācijas depozīta maksājumus, gan rēķinu maksājumus. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Parādīt īpašuma informācijas lapā?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Īpašuma informācijas lapas iestatījumi');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Īpašumu pārvaldība Jomresā tiek veikta tikai no vietnes frontend cpanel. Šajā lapā jūs varēsit uzskaitīt visus sistēmas rekvizītus, lai jūs varētu piešķirt komisijas maksas un tos apstiprināt/neapstiprināt (ja šie funkcijas ir iespējotas). Lai izveidotu jaunu īpašumu, rediģētu esošos, pārvaldītu rezervācijas vai citus ar īpašumu/rezervācijām saistītus uzdevumus, jums būs jāpiesakās vietnes priekšgalā un jādodas uz Jomres noklusējuma lapu. Tur jūs redzēsit Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Istabas funkciju ikonas');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Īpašuma iezīmju kategorijas');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Rediģēt īpašuma objektu kategoriju');
jr_define ('_JOMRES_HCATEGORY', 'Kategorija');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Rādīt īpašību pazīmes, kas sadalītas kategorijās?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Iestatiet šo uz YES, lai īpašuma elementus iedalītu kategorijās. Šī opcija ietekmē tikai rekvizītu rekvizītus, kas tiek parādīti rekvizītu informācijas lapā. Visas pārējās lapas tos parādīs, nesadalot tos kategorijās.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Atsaukt reģistrēšanos');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Atsaukt izrakstīšanos');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Neizlaists');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Jūsu lejupielādes un atbalsta atslēga ir derīga, spraudņus varēsit lejupielādēt, izmantojot spraudņu pārvaldnieku.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Jūsu lejupielādes un atbalsta atslēga NAV derīga, jūs nevarēsit lejupielādēt spraudņus, izmantojot spraudņu pārvaldnieku.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Apakš tips');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Jūs vēl neesat iestatījis sava īpašuma apakštipu. Šeit jūs to definējat kā 5 guļamistabu villu vai 4 guļamistabu kotedžu, un tas palīdz viesiem, kuri meklē, uzlabot meklēšanu.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Piešķiriet savam īpašumam apakštipu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -pasta veidnes');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Kontaktpersonas iestatījumi');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'No šejienes jūs varat ignorēt visu rekvizītu kontaktinformāciju (e -pastu, tālruni, faksu), lai visa saziņa ar viesiem tiktu nosūtīta jums, nevis īpašuma īpašniekiem.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Vai ignorēt sarakstu kontaktinformāciju?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Ja šī opcija ir iestatīta uz Jā, īpašuma e -pasta adreses un tālruņa numuri tiks aizstāti ar šajā cilnē iestatītajiem. Tas liek visus paziņojumus nosūtīt uz jūsu norādīto e -pasta adresi, nodrošinot, ka viesis un īpašums īpašnieks nevar apiet rezervēšanas programmu un komisijas maksas, kas no tā izriet. Tas arī nozīmē, ka ikreiz, kad tiek mainīts īpašuma apraksts, īpašums tiks iestatīts uz Neapstiprināts (ja ir iespējota apstiprinājumu funkcija), un jums būs manuāli jāpārbauda apraksts lai nodrošinātu, ka vadītāji nav ievadījuši tālruņa vai e -pasta informāciju teksta laukos, pirms to vēlreiz apstiprina. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Ieraksta detaļu izmaiņām ir nepieciešama vietnes administratora pārbaude. Ja saglabāsit jaunu informāciju, jūsu ieraksts tiks publicēts un gaidīs vietnes administratora apstiprinājumu, pirms tas atkal būs redzams vietnes apmeklētājiem. Jūs nevarēsit saņemt tiešsaistē rezervācijas, kamēr jūsu ieraksts nav publicēts un gaida apstiprinājumu. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Pārskatīt rezervācijas pieprasījumu');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Apstiprināt rezervācijas pieprasījumu');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Grozīt rezervācijas pieprasījumu');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Atzīmēt rēķinu kā gaidošu');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Rēķins atzīmēts kā neapstiprināts');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Vai nosūtīt anonīmus izsekošanas datus?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Izvēlieties Jā, lai nosūtītu anonīmus izsekošanas datus uz vietni Jomres.net, lai palīdzētu mums labāk izprast, kā jūs izmantojat sistēmu.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Lūdzu, pirms mēģināt veikt rezervācijas savu klientu vārdā, lūdzu, pārliecinieties, vai lapā Rediģēt manu informāciju ir norādīta visa informācija.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Viesa kontaktinformācija");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - Jauns viesis -');
jr_define ('_JOMRES_CHARTS', 'Diagrammas');
jr_define ('_JOMRES_CHARTS_SELECT', 'Atlasīt diagrammu ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Ienākumi pēc gada/mēneša');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Labi, sāksim darbu. Vispirms jums ir jāizveido dažas telpas šim īpašumam.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Izveidot dažas telpas tūlīt');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Pētījumi ir pierādījuši, ka rekvizīti ar daudziem augstas kvalitātes attēliem rada vairāk skatījumu. Augstāk augšupielādējiet galveno attēlu un dažus slaidrādes attēlus, lai palielinātu jūsu iespējas iegūt rezervācijas.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Augšupielādēt attēlu');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Izveidot dažus tarifus');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Ko viesi rezervēs?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Vai šis īpašums ir viesnīcas tipa īpašums, kurā jūs izīrējat telpas īpašumā, vai villas tipa īpašums, kur jūs iznomājat visu īpašumu vienā rezervācijā?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Istabas īpašumā');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Viss īpašums');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Abi'); // Šis ir pagaidu iestatījums, kas nodrošina atpakaļsaderību esošajiem lietotājiem, kuri vēl nav atjauninājuši savus īpašumu veidus. Tas nebūs atlasāms
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Ko viesi rezervēs?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Jums būs jāaizpilda sava adreses informācija, lai viesi varētu jūs atrast, ierodoties palikt.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Atjauniniet savu adresi');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hmm, šķiet, ka, iespējams, esat aizmirsis aizpildīt visus laukus.');
jr_define ('_JOMRES_CONTANT_US', 'Sazinieties ar mums');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Laipni lūdzam jūsu jaunajā tiešsaistes ierakstā');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Labdien, un laipni lūdzam jūsu jaunajā īpašumā');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Jūs nesen pievienojāt jaunu īpašumu mūsu vietnei, un mēs vēlētos jūs sveikt ģimenē.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Jūs varat redzēt savu jauno informācijas paneli');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'šeit');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Kad esat iestatījis savu īpašumu, varat redzēt, kā tas izskatās vietnes apmeklētājiem, apmeklējot");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'jūsu sākumlapa.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(tas nav publicēts, tāpēc vietnes apmeklētāji to vēl nevar redzēt).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "Lapas augšdaļā redzēsit vairākus ziņojumus. Pogas, kas atrodas blakus šiem ziņojumiem, novirzīs jūs uz lapām, kuras jums jāapmeklē, lai iestatītu savu īpašumu mūsu vietnē. Kad jūs Veicot katru no šiem uzdevumiem, mūsu vietnes apmeklētājiem būs daudz vieglāk atrast jūsu īpašumu un veikt rezervāciju tiešsaistē. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ja jums vispār ir kādi jautājumi, lūdzu');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'sazinieties ar mums');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "un mēs ar prieku atbildēsim uz visiem jūsu jautājumiem.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Visu labu, mūsu komanda pie');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Šķiet, ka jums nav pārdodamu ekskursiju. Izveidojiet ekskursijas profilu, pēc tam izmantojiet pogu Ģenerēt, lai izveidotu dažas ekskursijas.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Izveidosim ekskursijas!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Apmainīt valūtas simbola atrašanās vietu');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Izmantojiet šo opciju, lai pārvietotu valūtas simbolu no cenas skaitļa aizmugures, uz priekšu vai otrādi.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Ievadiet sava facebook lapas ID, piemēram, "jomres". Atstājiet šo lauku tukšu, lai nekas netiktu rādīts. Neievadiet vietni https://www.facebook.com vai kaut ko citu.');
jr_define ('COMMON_DOWNLOAD', 'Lejupielādēt');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Tālāk jums būs jāpievieno daži tarifi. Tās ir jūsu pamata cenas.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap nav iespējots!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Brīdinājums, jums nav iespējota sāknēšanas funkcija cilnē Jomres Site Configuration -> Misc. Lai nodrošinātu <i> kādu </i> funkcionalitāti, Jomres pašlaik izmanto vecās, uz jQuery UI veidnes veidnes, tomēr tie nav izstrādāti vairākus gadus. Visa pašreizējā Jomres veidņu (izkārtojuma failu) izstrāde un uzlabojumi tiek veikti tā Bootstrap 3 veidņu failos. Lai vislabāk izmantotu Jomres, iesakām instalēt Bootstrap 3 tēma Wordpress vai Joomla. Kad esat to izdarījis, varat iespējot Jomres Bootstrap veidnes vietnes konfigurācijā.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Jūsu atbalsta atslēga ir derīga. Ņemiet vērā, ka šī licence neļauj lejupielādēt spraudņus.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Velciet rezervācijas uz šo apgabalu, lai tās atceltu');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Garš (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Lūdzu, pārliecinieties, vai esat izveidojis WordPress lapu, kurā ir īss kods [jomres: xx-XX] (kur xx-XX ir jūsu vietnes valodas kods, piemēram, [jomres: lv-GB] vai [ jomres: lv] ieteikt vienu, pamatojoties uz Bootstrap 3. Ja jums nav piekļuves motīvam, iesakām Wordpress izmantot Jomres Leohtian tēmu, kuru varat <a href = "https://www.jomres.net/download/free- downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress target="_blank"> lejupielādēt no šejienes. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Pirms jūs varat izveidot telpas tipu, mums jāzina, vai tas ir viesnīcas tipa īpašums vai villa tipa īpašums.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Noklikšķiniet, lai pievienotu jaunus telpu tipus');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Brīdinājums, jums ir viens vai vairāki īpašuma tipi bez istabu tipiem. Īpašumiem ir nepieciešami telpu tipi, lai īpašumu pārvaldnieki varētu izveidot tarifus.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Izmantojiet pogu Jauna, lai izveidotu jaunus telpu tipus.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Ekskursijas');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nav rezervāciju/Nekustamais īpašums (vienkāršs saraksts)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Žurnāla faila atrašanās vieta');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres pēc noklusējuma reģistrē sistēmas darbību' .JOMRES_SYSTEMLOG_PATH. ' Tā kā šajā failā var būt iekļauta sensitīva informācija (API atslēgas, sistēmas ceļi, vārtejas informācija, viesu informācija), mēs ļoti iesakām mainīt šo ceļu. uz vienu virs jūsu tīmekļa dokumenta saknes. Ja jūs nesaprotat, ko tas nozīmē, lūdzu, lūdziet padomu tīmekļa mitinātājiem, jo ​​viņi zinās jūsu failu sistēmu. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres reģistrē detalizētu informāciju par jūsu sistēmu, ieskaitot API atslēgas, sistēmas ceļus, vārtejas un viesu informāciju, kas nedrīkst būt redzama pārējam internetam. Jūsu sistēmas žurnāla ceļš nav iestatīts, tāpēc sistēmas žurnāli pašlaik tiek saglabāti direktorijā .JOMRES_SYSTEMLOG_PATH. kā viņi varēs jums ieteikt. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Ja jūsu CMS ir instalēta jūsu vietnes saknes direktorijā, tad piemērota vieta būtu');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Jums nav Google Maps atslēgu komplekta. Pēdējo izmaiņu dēļ pakalpojumā Google Maps visām jaunajām vietnēm būs nepieciešama API atslēga, lai varētu izmantot Google kartes funkcijas. Lūdzu, <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key 'target =' _ blank '> skatiet mūsu rokasgrāmatas lapu par to, kā izveidot API atslēgu < /a> un saglabājiet atslēgu Jomresā. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Google kartes krāsu shēma');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Pareizi, sāksim pievienot jūsu īpašumu vietnei. Mums šeit ir jāsavāc neliela informācija par jūsu īpašumu. Tas ļaus mums iestatīt jūsu īpašuma tukšos kaulus. Kad tas būs izdarīts, jūs 'tiks sniegta norāde, pievienojot telpas, cenas un attēlus. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Īpašuma veids palīdz noteikt, kā īpašums tiks rezervēts, piemēram, viesnīcās, kuras vienlaikus "pārdodat" tikai vienu vai divas istabas, bet villas - visu īpašumu. ');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Ņemiet vērā, ka e -pasta adresei nav jābūt vienādai ar to, kuru izmantojāt, reģistrējot savu kontu. Tādējādi dažādiem īpašumiem var būt dažādas adreses.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimālais depozīts');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Jūs varat konfigurēt minimālo depozīta summu, no kuras jāmaksā. Ja jūs to darāt, tad iestatījumus "Nepieciešamais depozīts ir pirmās nakts maksa?" un "Nepieciešamais depozīts ir procenti?" īpašuma konfigurācijas iestatījumus nevar konfigurēt. , tā vietā visas depozīta vērtības ir procentos, un tām ir jābūt vismaz šeit norādītajam skaitlim. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Šis skaitlis nevar būt mazāks par');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Sistēmas žurnāla resursdators');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Sistēmas žurnāla ports');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Ja vēlaties nosūtīt sistēmas reģistrēšanas ziņojumus uz sistēmas žurnāla serveri, šeit varat iestatīt resursdatora nosaukumu vai IP (piemēram, 192.168.0.2) un portu (piemēram, 514). Piezīme. Ja vietne ir iestatīta uz Izstrāde, tad tiks nosūtīti DEBUG ziņojumi. Ja iestatīts uz Production, tiks nosūtīti tikai INFO līmeņa un augstāki ziņojumi. Lai atspējotu reģistrēšanu attālajā serverī, iztukšojiet resursdatora un porta laukus.");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP nav atļauts piekļūt PHP funkcijām openlog un syslog. Šis ir servera puses iestatījums. Ja vēlaties, lai Jomres sūta ziņojumus uz sistēmas žurnāla serveri, lūdzu, sazinieties ar saviem saimniekiem un apstipriniet, vai PHP ir atļauts piekļūt šīm funkcijām. Kad tas būs iespējots, šeit varēsiet konfigurēt sava sistēmas žurnāla servera iestatījumus. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Vai nosūtīt e -pasta ziņojumu vietnes administratoram, ja rodas kļūda?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Vēsturiski problēmas, kas būtu jāizpēta, ir nosūtītas e -pastā vietņu īpašniekiem. Tas var lieliski sekot jūsu sistēmas darbībai, jo tajā ir šausmīgi daudz kustīgu detaļu un ir grūti izsekot diemžēl zirnekļi un robotprogrammatūras, kas pārmeklē jūsu vietnes (pat draudzīgas), var nejauši izraisīt letālas kļūdas, un tādējādi saņemto ziņojumu skaits var būt milzīgs. Ja tas tā ir, tad iestatiet šo opciju uz Nē. Jomres sūta reģistrēšanu ziņojumus gan reģistrācijas failu kopai, gan sistēmas žurnāla serverim (ja jūsu īpašie PHP iestatījumi to atļauj, ja tie nav, lūdzu, sazinieties ar savu saimnieku). Varat manuāli analizēt failus, ja meklējat kaut ko īpašu (piemēram, ja jūs izstrādājat vārteju un vēlaties izmantot gateway_log () funkcijas izsaukumu.), taču tas ir daudz informācijas, kas jāpārbauda, ​​tāpēc labāk ir izmantot kaut ko līdzīgu syslog failu analizatoram. Ja izstrādājat Linux, tad t šeit jums ir pieejami daudzi rīki, ja operētājsistēmā Windows, vienkāršs rīks, ko varat izmantot, ir http://maxbelkov.github.io/visualsyslog/ Šajā lapā iestatiet “Syslog host' uz “127.0.0.1' un Port 'uz 514, lai redzētu ziņojumus, kas pieteikti šajā rīkā. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Pārvaldīt rekvizītus');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Jums nav iestatīta IP noteikšanas API atslēga. Tas ir nepieciešams, lai sistēma varētu automātiski noteikt lietotāja atrašanās vietu un automātiski iestatīt valūtu un valsti. Lūdzu, <a href = 'http: // www .jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-kodus-tab 'target =' _ blank '> skatiet mūsu rokasgrāmatu lapu par to, kā izveidot IP noteikšanas API atslēgu </a> un saglabāt atslēgu sadaļā Jomres> Vietnes konfigurācija> Valūtas konvertēšana / Valūtas kodi. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Jums nav Open Exchange Rates API atslēgu komplekta. Tas ir nepieciešams, lai sistēma varētu automātiski lejupielādēt un izmantot valūtas maiņas kursus. Lūdzu, <a href = 'http: //www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-kodus-tab 'target =' _ blank '> skatiet mūsu rokasgrāmatas lapu, kā izveidojiet IP noteikšanas API atslēgu </a> un saglabājiet atslēgu sadaļā Jomres> Vietnes konfigurācija> Valūtas konvertēšana / Valūtas kodi. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Atļaujas numurs');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Dažas valstis nosaka, ka jums ir jāparāda atļaujas numurs savam īpašumam. Ja jums ir šāds numurs, ievadiet to šeit un tas tiks pievienots īpašuma galvenes sadaļai.');
jr_define ('_JOMRES_SHORTCODES', 'Īsie kodi');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "Plug_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot spraudnis JĀinstalē un jāiespējo, lai šie īsie kodi darbotos. To var atrast Jomres spraudņu pārvaldniekā. Ja šī vietne tika izveidota, izmantojot šo vietni. Ātrā iedarbināšana, iespējams, tas jau ir instalēts. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Jums jāpārliecinās, ka spraudnis <strong> 'Jomres Shortcodes' </strong> ir iespējots. To var atrast Jomres spraudņu pārvaldniekā. Ja šī vietne tika veidota, izmantojot kādu no ātrajiem startiem, iespējams, jau ir instalēts. ");
jr_define ('SHORTCODE_TASK', 'Uzdevums');
jr_define ('SHORTCODE_DESCRIPTION', 'Apraksts');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenti');
jr_define ('SHORTCODE_EXAMPLE', 'Piemērs');
jr_define ('INTEGRITY_CHECK', 'Failu sistēmas integritātes pārbaude');
jr_define ('INTEGRITY_CHECK_DESC', 'Šī funkcija ļauj pārbaudīt, vai failu sistēma atbilst pašreizējā Jomres versijā. Tas ir noderīgi, lai nodrošinātu, ka visi faili pēc instalēšanas/jaunināšanas ir pareizi atjaunināti. Failu sarkanā krāsā trūkst, faili atrodas Oranžie eksistē, bet atšķiras no tiem, kas tiek piegādāti pašreizējā būvē. Šeit tiks uzskaitīti tikai tie faili, kas ir potenciālas problēmas. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Failu sistēmas integritātes pārbaude');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Vietējā jaukšana');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Versijas jaukšana');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Lieliski! Netika atrasta neviena problēma.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Google karšu marķieris');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Lasīt vairāk');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Lasīt mazāk');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Tūrisma nodoklis');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Tūrisma nodokļa likme');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Iestatīt tūrisma nodokļa likmi. Tūrisma nodoklis tiek aprēķināts tikai pēc sākotnējās rezervācijas ģenerēšanas un tiek pievienots rezervācijas apstiprinājuma lapai, papildu pakalpojumu ailē.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Vai procenti?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Iestatiet šo uz Jā, ja nodoklis ir procents, vai Nē, ja tā ir fiksēta maksa.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Ietekmē visu rezervācijas vērtību?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Iestatiet šo uz Jā, ja nodoklis sedz visu rezervācijas vērtību, tātad tā ir procentuālā daļa no naktsmītnes plus jebkādas papildu iespējas, vai Nē, ja tā tiek aprēķināta tikai, pamatojoties uz kopējā izmitināšanas vieta. Ja iepriekš norādītā opcija “Ir procenti' ir iestatīta uz Nē, šī opcija tiek ignorēta. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Lūdzu, ņemiet vērā, ka šai rezervācijai tiks pievienots tūrisma nodoklis. Nodokli varēsiet skatīt pārskatīšanas rezervācijas lapā.');
jr_define ('NO_LICENSE_MESSAGE', "Jūs neesat saglabājis licences numuru vietnes konfigurācijā, tāpēc jūs nevarēsit lejupielādēt spraudņus. Kad būsiet saglabājis derīgu licences atslēgu, varēsit instalēt visus spraudņus, kas uzskaitīti kā Galvenie spraudņi. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Šķiet, ka izmantojat nederīgu licences numuru vai tā derīguma termiņš ir beidzies. Kad būsiet saglabājis derīgu licences atslēgu, varēsit instalēt visus spraudņus, kas norādīti kā galvenie spraudņi.");
jr_define ('VALID_LICENSE_MESSAGE', "Apsveicam! Jūs izmantojat derīgu licences numuru un varat instalēt Core spraudņus, izmantojot Jomres spraudņu pārvaldnieku.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Šī lapa ļauj augšupielādēt attēlus savam īpašumam un jūsu piedāvātajām lietām. Tajā ir viena galvenā poga un otra poga, kas ļauj atlasīt konkrētus resursus attēlu augšupielādei. Tātad, galvenais īpašums attēlā un slaidrādē būs redzama tikai viena poga, bet, ja esat izveidojis, piemēram, papildu piederumus vai telpas, jūs redzēsit otru pogu, kurā varēsit augšupielādēt attēlus par šiem konkrētajiem resursiem. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Šī lapa ļauj augšupielādēt attēlus savam īpašumam un jūsu piedāvātajām lietām. Tajā ir viena galvenā poga un otra poga, kas ļauj atlasīt konkrētus resursus attēlu augšupielādei. Tātad, galvenais īpašums attēls un slaidrāde parādīs tikai vienu pogu, bet, ja esat izveidojis papildu piederumus, jūs redzēsit otru pogu, kurā varēsit augšupielādēt attēlus šiem konkrētajiem resursiem. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Vispirms izvēlieties augšupielādējamo attēlu, noklikšķinot uz Pievienot attēlu vai izmantojot vilkšanas un nomešanas funkciju. Tie tiks parādīti kolonnā labajā pusē. </li>
  <li> Virs šī apgabala izmantojiet pogu \"Izvēlēties resursu\", lai izvēlētos resursu, kuram vēlaties augšupielādēt attēlus. Jums var tikt piedāvāta iespēja izvēlēties konkrētu resursu zemāk. </li>
  <li> Kad esat izvēlējies resursu, zem attēla noklikšķiniet uz pogas Augšupielādēt attēlu, lai to saistītu ar šo resursu. Kad attēls ir augšupielādēts, tas pazudīs no slejas labajā pusē un parādīsies kreisajā pusē. </li>
  <li> Izmantojiet pogu Atkritne blakus esošajiem attēliem, lai noņemtu attēlus, kurus vairs nevēlaties rādīt. </li>
  <li> Varat mainīt secību, kādā faili tiek parādīti slaidrādē, pirms augšupielādes tos pārdēvējot, jo tie tiek parādīti lapās alfabētiskā secībā. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Blakus pogai Resurss, iespējams, redzēsit pogu Priekšskatījums. Ja noklikšķināsit uz tā, tiks parādīts uznirstošais logs, kas parādīs, kā pašlaik augšupielādētie attēli izskatīsies lapā. Tas palīdzēs jums ideja par to, kā attēli izskatīsies jūsu klientiem. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Augšupielādējamo attēlu skaits nav ierobežots. Attēli tiek automātiski mainīti, kad tie tiek augšupielādēti. Jūs varat augšupielādēt tikai JPG un PNG failus.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideālā gadījumā visi augšupielādētie attēli būtu vismaz");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pikseļu platumā, pretējā gadījumā pēc augšupielādes tie var izskatīties izplūduši.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Visi augšupielādētie attēli nedrīkst pārsniegt");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "pēc izmēra");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Izvēlieties resursu, kuram vēlaties augšupielādēt attēlus");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Īpašs resurss");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Šim resursam jau augšupielādētie attēli");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Teksta formatēšana');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Šeit varat ievadīt tekstu, izmantojot vienkāršu Markdown formatējumu. Jums nav jāzina neviens HTML, vienkārši izmantojiet pogas, lai informācija izskatītos tāda, kādu vēlaties, vai formatējiet tekstu atbilstoši šiem piemēriem.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Uzsvars');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'treknraksts');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'slīpraksts');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'pārsvītrots');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Galvenes");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Liela galvene');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Vidēja galvene");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Maza galvene');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Saraksti");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Vispārīgs saraksta vienums');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numurēts saraksta vienums');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Saites');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Parādāmais teksts');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citāti');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Šis ir citāts.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Tas var aptvert vairākas rindas!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Attēli');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabulas');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Kolonna');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Rādīt īpašuma attēlus kā slaidrādi īpašumu sarakstā?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ja iestatīts uz jā, tiks parādīts rekvizītu galveno attēlu slaidrāde. Ja iestatīts uz nē, tiks parādīts pirmais rekvizīta galvenais attēls.');
jr_define ('EDIT_CMS_USER', 'Rediģēt CMS lietotāju');
jr_define ('BOOKING_MADE_BY', 'Rezervāciju veicis');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Ērtības');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Telpu tipi');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ārējās rezervācijas veidlapas URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Šeit jūs varat iestatīt ārēju URL, ja vēlaties rezervēšanai izmantot trešās puses vietni. Visas jomres rezervēšanas pogas norāda uz šo URL. Ja vēlaties izmantot Jomres rezervācijas veidlapu, atstājiet šo lauku tukšu. . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (īss telpas apraksts/apakšvirsraksts)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Istabas apraksts');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Viesu melnais saraksts');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ja šis viesis ir iekļauts melnajā sarakstā, viņš vairs nevarēs veikt rezervāciju šajā īpašumā.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Sesijas apstrādātājs');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Saglabāt jomres sesijas failus diskā vai datu bāzē. Ieteicams: datu bāze');
jr_define ('_JOMRES_MAP_HEIGHT', "Kartes augstums (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Kartes tālummaiņas līmenis");
jr_define ('_JOMRES_MAP_MAPTYPE', "Kartes tips");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Veidņu ignorēšanas pārvaldnieks");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Veidņu pakotnes ir spraudņi, kas var nodrošināt ignorēt veidnes dažādiem galvenajiem Jomres veidņu failiem.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Šajā lapā ir uzskaitīti visi veidņu faili, kurus var ignorēt veidņu pakotnes veidņu faili. Ja vēlaties ignorēt noteiktu veidnes failu, noklikšķiniet uz šī faila rediģēšanas pogas, nākamajā lapā var izvēlēties, kuru versiju vēlaties ignorēt. Ņemiet vērā, ka šie ignorējumi ir prioritāri gan pret Jomres Core, gan jebkuru Wordpress vai Joomla motīvu/veidņu ignorēšanu. Jūs varat atspējot ignorēšanu, izdzēšot to lapā Saraksta veidņu ignorēšana. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Veidnes nosaukums");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Pašreizējais ceļš");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nav ignorēts");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Jūs varat izvēlēties, kuru veidnes failu ignorēt Core veidnes failus, mainot nolaižamo izvēlni");

jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Rezervēto numuru procentuālā daļa");
jr_define ('_JOMRES_SELECT_WIDGETS', "Logrīku atlase");
jr_define ('_JOMRES_INTERVAL', "Intervāls");
jr_define ('_JOMRES_TIMELINE', "Laika skala");
jr_define ('_JOMRES_CPANEL_GRID', "Vadības paneļa mājas izkārtojums");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Atlasiet sava priekšgala īpašuma pārvaldības vadības paneļa mājas lapas režģa izkārtojumu.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google karšu marķieri");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Pilsētas attēli");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Mainot īpašuma veidu, tiks dzēsti visi numuri, tarifi, īpašuma iestatījumi un atiestatīta pieejamība.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Lūdzu, ņemiet vērā, ka pēc atjaunināšanas jums ir jāatjaunina visi jau instalētie Jomres spraudņi, izmantojot Jomres spraudņu pārvaldnieku. Ja jums ir instalēti Core spraudņi, bet jums nav derīgas Jomres licences, mēs <em> darām ne </em> iesaku atjaunināt Jomres, jo vecāki spraudņi bieži vien var nedarboties ar jaunākām Jomres versijām. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Lūdzu, ņemiet vērā, ka pēc atjaunināšanas jums ir jāatjaunina visi jau instalētie Jomres spraudņi, izmantojot Jomres spraudņu pārvaldnieku.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Ja vēlaties atjaunināt Jomres un tā spraudņus, jums būs nepieciešama atjaunošanas licence. Lūdzu, apmeklējiet <a href='https://www.jomres.net/pricing' target='_blank'> mūsu vietne </a>, lai iegūtu plašāku informāciju. Vairumā gadījumu šīs licences ir 50% no pilnas licences cenas. Lūdzu, pirms atjaunošanas iegādes pārliecinieties, vai esat pieteicies mūsu veikalā. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Maksājuma veids:");

jr_define ('_JOMRES_PRICES', "Get Connected");


jr_define ('_OAUTH_TITLE', "Lietotņu atslēgu pārvaldība");
jr_define ('_OAUTH_APPS', "REST API klienta informācija");
jr_define ('_OAUTH_IDENTIFIER', "Identifikators");
jr_define ('_OAUTH_APIKEY', "Klienta ID");
jr_define ('_OAUTH_SECRET', "Noslēpums");
jr_define ('_OAUTH_CREATED', "Izveidota/atjaunināta lietotne");
jr_define ('_OAUTH_CLIENT_ID_INFO', "Klienta ID un noslēpums ir izveidoti jums. Identifikators ir paredzēts, lai jūs varētu viegli identificēt šo atslēgu pāri.");
jr_define ('_OAUTH_SCOPE_TITLE', "Atļaujas (ko klients var darīt)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Lietotāja atļaujas");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Īpašuma atļaujas");

jr_define ('API_DOCUMENTATION_TITLE', "Lietotnes REST API dokumentācija");

jr_define ('_OAUTH_CONFIG', "API kodola konfigurācija");

jr_define ('_OAUTH_CONFIG_SHOW', "Rādīt API klienta konfigurācijas opcijas Jomres galvenajā izvēlnē?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Jūs varat izvēlēties nerādīt API klienta konfigurācijas opcijas Jomres galvenās izvēlnes sadaļā Mans konts . Tā vietā varat izlemt, ka vēlaties tās parādīt citās lapās, izmantojot Jomres Shortcodes.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Parāda API pamata dokumentācijas lapu. API kodols ļauj lietotājiem izveidot API klientus, kurus pēc tam izmanto, lai piekļūtu API funkcionalitātei, kas izklāstīta API pamatdokumentācijā.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Parāda API galveno administrēšanas lapu, kurā īpašumu pārvaldnieki var konfigurēt API klientus. Ņemiet vērā, ka šī ir tikai reģistrēta lietotāja funkcija, tāpēc lietotājiem ir jābūt reģistrētiem un jāpiesakās, lai viņi varētu redzēt šo lapu.");

jr_define ('API_METHODS_TITLE', "API metodes");
jr_define ('API_METHODS_DESCRIPTION', "Šis metožu saraksts ir balstīts uz jūsu instalētajiem API funkciju spraudņiem un tiek ģenerēts automātiski. Ja instalējat vai izdzēšat API līdzekļa spraudni, jums jāapmeklē šī lapa, lai atjaunotu šo jūsu vietnē pieejamo API metožu sarakstu. ");

jr_define ('_OAUTH_REDIRECT_URI', "Novirzīt URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dodiet man jums nozīmīgu vārdu, piemēram, Mans tālrunis");

jr_define ('_OAUTH_GRANT_TYPES', "Šī sistēma atbalsta divus dotāciju veidus - klienta akreditācijas datus un netiešo. Ja izmantojat plūsmu <em> client_credentials </em>, jums būs nepieciešams gan klienta ID, gan klienta noslēpums. Ja izmantojat <em > netieši </em> tad jūsu lietotne nosūtītu tikai klienta ID, un jūs piesakāties sistēmā, lai tieši atļautu šo lietotni. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Lai izmantotu <em> netiešā </em> piešķiršanas veida plūsmu, jums būs jāizmanto šis URL, lai autorizētu savas lietotnes. Kad šis URL tiks izsaukts un jūs būsiet autorizējis lietotni, ko sistēma izdos marķieris, ko jūsu lietotnes izmantos, lai izsauktu šīs sistēmas API ");
jr_define ('_OAUTH_AUTHORISATION_URL', "Autorizācijas URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );
jr_define ('_WEBHOOKS_CONFIG_SHOW', "Parādīt Webhook konfigurācijas opcijas Jomres galvenajā izvēlnē?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Jūs varat izvēlēties nerādīt Webhook konfigurācijas opcijas Jomres galvenās izvēlnes sadaļā Mans konts . Tā vietā varat izlemt, ka vēlaties tās parādīt citās lapās, izmantojot Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks dokumentācija");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Parāda API pamata dokumentācijas lapu. API kodols ļauj lietotājiem izveidot API klientus, kurus pēc tam izmanto, lai piekļūtu API funkcionalitātei, kas izklāstīta API kodola dokumentācijā.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Parāda API galveno administrēšanas lapu, kurā īpašumu pārvaldnieki var konfigurēt API klientus. Ņemiet vērā, ka šī ir tikai reģistrēta lietotāja funkcija, tāpēc lietotājiem ir jābūt reģistrētiem un jāpiesakās, lai viņi varētu redzēt šo lapu.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Rediģēt integrāciju');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integrācijas ID');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL vai nosaukums');
jr_define ('WEBHOOKS_ENABLED', 'Iespējots');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Autentifikācijas metode/integrācija');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Visi jūsu izveidotie tīmekļa āķi netiks aktivizēti, jo neesat piešķirts nevienam īpašumam. Īpašuma pārvaldniekiem parasti netiek piešķirti atsevišķi rekvizīti, tāpēc jums var būt nepieciešams jauns lietotājs tīmekļa āķa izveidei.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Visi jūsu izveidotie tīmekļa āķi tiks aktivizēti, ņemot vērā šādus rekvizītus:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Atsauksmju limits');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Izmantojiet šo iestatījumu, lai ierobežotu īpašuma informācijas lapā redzamo atsauksmju skaitu.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Rādīt visas atsauksmes');

jr_define ('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimālā depozīta vērtība');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ja aprēķinātais depozīts ir mazāks par šo skaitli, tad iestatiet depozītu uz šo vērtību. Ja šis skaitlis neatbilst vietnes minimālajam depozīta iestatījumam, šis skaitlis var tikt pārsniegts. Atstājiet to kā 0 līdz neizmantojiet iestatījumu. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Lai palielinātu vietnes ātrumu, iesakām datu bāzē importēt informāciju par esošo vietni un rekvizītu attēlus.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importēt esošo attēlu informāciju datu bāzē');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Eksperimentāla funkcija. Ja šī opcija ir iespējota, attēli, kas augšupielādēti, izmantojot multivides centra funkciju, tiks kopēti arī jūsu Amazon S3 segmentā un parādīti no jūsu Amazon S3 kopas URL. Iespējojot šo pirmo reizi, jūs arī piedāvāja importēt esošos attēlus jūsu S3 grupā. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domēns');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Aizstāt noklusējuma Amazon S3 domēnu ar savu CloudFront domēnu');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Ieteicams iespējot. Tikai operētājsistēmai Windows un Mac OSX, ja libcurl netika izveidots ar Schannel vai Secure Transport atbalstu (vietējās SSL bibliotēkas, kas iekļautas operētājsistēmā Windows un Mac OS X), iestatiet to uz Nē.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Jūs esat iespējojis Amazon S3 integrāciju, tāpēc jums būs jākopē visi esošie attēli savā S3 spainī. Attēli tagad tiek rādīti jūsu vietnes apmeklētājiem no jūsu Amazon S3 URL, tāpēc jums tas būs nepieciešams vispirms nokopējiet tos savā S3 segmentā, pretējā gadījumā tie nebūs redzami jūsu vietnes apmeklētājiem.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Kad noklikšķināsit uz šīs pogas, lūdzu, nepārtrauciet procesu un gaidiet, līdz tiek parādīts panākums vai kļūdas ziņojums. Atkarībā no servera ātruma tas var aizņemt kādu laiku.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopēt esošos attēlus uz Amazon S3 kausu');


jr_define ('JOMRES_INCOMPLETE', 'Nepabeigts');
jr_define ('JOMRES_WATING_APPROVAL', 'Gaida apstiprinājumu');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Īpašuma detaļu karte');

jr_define ('HAS_STARS_TITLE', 'Vai ļauj klasificēt zvaigznes?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Piespiest atkārtoti importēt attēla informāciju datu bāzē');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Piespiest atkārtoti augšupielādēt attēlus S3 spainī');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Vai dzēst visus Jomres datus, atinstalējot?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Ja iestatīts uz jā, Jomres izdzēsīs visas datubāzes tabulas, kad tas būs atinstalēts. Tas izdzēsīs visus Jomres datus no db un to nevarēs atsaukt.');

jr_define ('TRANSACTION_IDS', 'Darījuma ID');
jr_define ('PAYMENT_METHOD', 'Maksājuma veids');
jr_define ('POA_DISPLAY_PRICE', 'POA cena');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Kad īpašumi tiek parādīti sarakstā, sistēma mēģinās atrast derīgu cenu no konfigurētajiem tarifiem, pamatojoties uz šodienas datumu vai, ja meklēšanā tika izmantoti datumi, tad, pamatojoties uz šiem datumiem . Ja tas nav iespējams, tad tiks parādīts POA (cena uz pieteikuma), kas nozīmē, ka viesim jāsazinās ar jums, lai saņemtu cenu. Ja vēlaties, šeit varat konfigurēt cenu, kas tiks parādīta POA teksta vietā. Šis skaitlis būtu jāparāda rezerves cena, ja nevar noteikt citu cenu. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Pirms Jomres spraudņu instalēšanas ir jāinstalē spraudņu pārvaldnieks, vai vēlaties to darīt tagad?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Jums ir jāatjaunina spraudņu pārvaldnieks, pirms varat atjaunināt instalētos spraudņus. Vai vēlaties to darīt tagad?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Darīsim tā!");

jr_define ('INCLUDEINFILTERS', 'Iekļaut filtros?');
jr_define ('INCLUDEINFILTERS_DESC', 'Īpašuma objektu filtri Ajax saliktajā meklēšanā var kļūt ļoti gari, tāpēc varat iestatīt šo opciju uz Nē, lai novērstu šī līdzekļa parādīšanos īpašumu funkciju sarakstā.');

jr_define ('REVIEW_REMINDER_PT1', "Tev ir");
jr_define ('REVIEW_REMINDER_PT2', "rezervācija (-as), par kurām vēl neesat atstājis atsauksmi. Lūdzu, atstājiet atsauksmi.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Rezervācijas, kas gaida atsauksmes");
jr_define ('REVIEW_NAG', "Nag viesi atsauksmēm?");
jr_define ('REVIEW_NAG_DESC', "Kad viesis ir rezervēts no rezervācijas, sistēma atgādinās viņam publicēt atsauksmi par savu rezervāciju. Lai atspējotu šo atgādinājumu, iestatiet šo opciju uz Nē.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Vai nosūtīt rezervācijas e -pasta ziņojumu kopijas vietnes administratoriem?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Ja tas ir iespējots, rezervācijas e -pasta ziņojumu kopijas, kas nosūtītas īpašuma pārvaldniekiem, tiks nosūtītas arī visiem vietnes administratoriem.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Slēpt adresi?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Ja iestatījāt šo opciju uz Jā, tad tikai viesi, kuri jau ir veikuši rezervāciju jūsu īpašumā, varēs redzēt īpašuma adresi. Iespējams, vēlēsities izmantot šo iestatījumu, lai paslēptu īpašuma precīzo atrašanās vietu. ja, piemēram, tas tiek regulāri atstāts bez uzraudzības. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimizēt attēlus augšupielādējot?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Iespējojot, attēli tiks optimizēti tīmeklim (faila izmērs var būt līdz pat 75% mazāks). Atkarībā no augšupielādētā attēla veida jūsu serverī ir jābūt instalētai vienai vai vairākām šīm bibliotēkām pakalpojumu sniedzējs: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Datu bāzes integritātes pārbaude');
jr_define ('OBSOLETE_FILES_CHECK', 'Novecojušu failu pārbaude');
jr_define ('DATATABLES_COLVIS', 'Kolonnas redzamība');

jr_define ('API_TOKEN_LIFETIME', 'API marķiera kalpošanas laiks');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Cik ilgi API marķieris paliek derīgs sekundēs. 86400 = 1 diena, 31536000 = 1 gads');


jr_define ('ENCRYPTION_TITLE', 'Šifrēšana');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Šifrēšanas faila atrašanās vieta');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Nekad neizdzēsiet šifrēšanas failu ** <br/> Lietotāju dati tiek glabāti šifrēti tabulās, lai nodrošinātu, ka "dati miera stāvoklī" ir droši aizsargāti saskaņā ar VDAR ieteikumiem. Pēc noklusējuma šifrēšanas atslēga tiek saglabāts failā "encryption_key.class.php" Jomres instalācijas saknē (parasti /public_html /jomres). Šeit varat mainīt faila glabāšanas vietu. Ja maināt atrašanās vietu, fails ir jāpārvieto, negaidiet, kamēr Jomres izveidos jaunu versiju, pretējā gadījumā jūs nevarēsiet atšifrēt viesu datus. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Šeit saglabātā informācija tiks izmantota šim īpašumam sagatavotajos rēķinos');

jr_define ('_JOMRES_GDPR_POLICIES', 'VDAR politikas');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Šeit jūs varat konfigurēt, cik ilgi pēc rezervācijas vai rēķina izveides tas ir jānoņem no sistēmas, lai nodrošinātu atbilstību VDAR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Rezervācijas saglabāšanas periods (dienās)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Cik dienas pēc rezervācijas izlidošanas datuma rezervācija ir jāizdzēš? Kad tā tiek dzēsta, gan rezervācija, gan rēķins tiek noņemti. Tipisks saglabāšanas periods var būt 365 dienas.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Rēķina saglabāšanas (nerezervēšanas) periods');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Citi rēķini, piemēram, komisijas un abonementa rēķini, nav piesaistīti rezervācijām. Līdz ar to tie netiks dzēsti, dzēšot rezervācijas rēķinus un līgumus. Atkarībā no jūsu valsts un jūsu uzņēmējdarbības prakses, jums būs jākonfigurē cits saglabāšanas periods. Tipisks saglabāšanas periods varētu būt 3653 dienas, kas ir 10 gadi. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Jūsu dati');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Dažām šīs vietnes funkcijām ir jāglabā informācija par jūsu apmeklējumu. Tas tiek izmantots tikai, lai sniegtu jums pakalpojumus, nekad netiek kopīgots ar citiem un tiek izdzēsts, kad tas vairs nav vajadzīgs.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'VAI DODAT MUMS ATĻAUJU UZGLABĀT ŠO INFORMĀCIJU ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Detalizēti');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Jums ir jāpiekrīt, ka mēs glabājam šos datus, lai mēs varētu veikt rezervācijas šajā vietnē. Neatkarīgi no tā, vai jūs piekrītat savu datu glabāšanai, mēs jūsu datorā saglabāsim sīkfailu, lai pastāstītu mums, neatkarīgi no tā, vai esat to izvēlējies. Tas palīdz mums nodrošināt, ka mēs nepārtraukti nejautājam, vai vēlaties vai ne, un vai tajā nav nekādas personiski identificējamas informācijas (PII). Ja pārdomājat, jebkurā laikā var apmeklēt lapu "Lietotņu atļaujas", lai izvēlētos vai atteiktos. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informācija tiek saglabāta dažādos laika periodos atkarībā no jūsu apmeklējuma rakstura. Tātad, ja tikai skatāties apkārt, mēs saglabāsim aptuveno ģeogrāfiskās atrašanās vietas (valsts līmeņa) informāciju. Ja veicat meklēšanu, tad padarīt meklēšanas veidlapas lietotājam draudzīgākas, mēs saglabāsim pēdējās meklētās lietas. Šī informācija parasti tiek glabāta ne ilgāk kā 24 stundas un tiek izmantota tikai, lai padarītu jūsu apmeklējumu patīkamāku. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Veicot rezervāciju pie mums, nepieciešamības gadījumā tiek saglabāta vairāk informācijas.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Rezervācijas veidlapas tehniskie materiāli tiek uztverti un saglabāti ne ilgāk kā 60 dienas. Tas ir nepieciešams, lai pēc pieprasījuma rezervācijas pēc rezervācijas apstiprināšanas varētu pārvērst par pilnām rezervācijām un mūsu komandu veiktai analīzei. ja rodas problēmas ar rezervāciju. Ja, veicot rezervāciju, neesat pieteicies, mēs jums nosūtīsim e -pastu ar lietotājvārdu un paroli, lai jūs varētu apskatīt savu rezervāciju vēsturi un izmantot savas tiesības tikt aizmirstam (RTBF), ja gribu to darīt. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Rezervācijas veidlapā ievadītie dati, piemēram, vārds, e -pasta adrese, reālā adrese, tiek glabāti ne ilgāk kā 365 dienas pēc rezervācijas izbraukšanas datuma. Šī informācija tiek glabāta šifrētā veidā mūsu datu bāzē lai to redzētu tikai pilnvarotas personas. Ja veicat rezervāciju, tad saskaņā ar likumu mums ir jāglabā jūsu PII, kamēr rezervācija ir derīga. Kad rezervācija ir pabeigta vai nu tāpēc, ka tā ir atcelta, vai arī jūs esat izrakstījies, jūs varēsit izmantot savu RTBF, piesakoties un apmeklējot lapu "Jūsu dati". Rēķinu informācija par pabeigtajām rezervācijām joprojām tiks droši saglabāta mūsu datu bāzē, lai nodrošinātu, ka ievērojam attiecīgos nodokļu likumus, bet jūs varēsit noņemt visas citas PII pēc rezervācijas pabeigšanas. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Kad jūs piekrītat, ka jūsu informācija tiek glabāta, kā aprakstīts iepriekš, mums ir juridisks pienākums šo piekrišanu saglabāt mūsu datu bāzē. Šī informācija ietvers jūsu IP numuru un izvēles veidlapas saturu. Mēs saglabāt šo paziņojumu par piekrišanu bezgalīgi (tā ir juridiska prasība). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Jūs vēl neesat mums pateicis, vai mēs varam apkopot par jums personiski identificējamu informāciju');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Jūs esat piekritis, ka mēs apkopojam nepieciešamo personiski identificējamo informāciju rezervāciju veikšanai');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Jūs esat teicis mums nevākt personiski identificējamu informāciju');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Jūs neesat devis mums atļauju apkopot savus privātos datus');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Lai jūs varētu veikt noteiktas darbības šajā vietnē, mums ir jāapkopo personiski identificējama informācija par jums, bet jūs neesat devis mums atļauju to darīt.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Mainīt atļaujas');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Turpināt skatīt rekvizītus');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Lietotņu atļaujas');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Viesu dati');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Šī ir informācija, ko jums saglabā dažādi īpašumi. Dažādās viesnīcās var būt dažādi ieraksti atkarībā no tā, ko ievadījāt rezervācijas laikā.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Jums nav datu, kas saglabāti nevienā šīs sistēmas viesnīcā');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profila dati');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Šī ir galvenā datu kopa, kas jums ir pieejama, atšķirībā no tiem, kurus esat kopīgojis ar dažādiem rekvizītiem.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Jūs neesat saglabājis nekādu profila informāciju');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Šeit ir personiski identificējama informācija, ko mēs jums glabājam šajā vietnē. Tā ir veidota JSON (JavaScript Object Notation) formātā, kas ir viegls datu apmaiņas formāts. Cilvēkiem ir viegli lasīt un rakstīt, un mašīnām ir viegli parsēt un ģenerēt. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Anonimizēts');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Jūsu dati');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Piekrītot šiem lietošanas noteikumiem (šis "līgums"), jūs piekrītat, ka:

<ul>
<li>
Jūs esat pilnvarots rezervēt viesnīcas, izmantojot šo vietni;
</li>
<li>
Jūs esat vismaz 18 gadus vecs;
</li>
<li>
Jums ir juridiskas pilnvaras noteikt saistošu juridisku pienākumu;
</li>
<li>
Jūs izmantosit vietni saskaņā ar šo līgumu;
</li>
<li>
Jūs izmantosit vietni tikai, lai izdarītu likumīgas atrunas sev vai citai personai, kuras labā jūs esat likumīgi pilnvarots rīkoties;
</li>
<li>
Jūs informēsit šādas citas personas par šo Līgumu, kas attiecas uz atrunām, ko esmu izdarījis viņu vārdā, ieskaitot visus tam piemērojamos noteikumus un ierobežojumus;
</li>
<li>
Visa informācija, ko jūs sniedzat vietnei, ir patiesa, precīza, aktuāla un pilnīga; un
</li>
<li>
Jūs aizsargāsit sava konta informāciju, uzraudzīsiet un būsit pilnībā atbildīgs par jebkādu sava konta izmantošanu, ko veicat jūs un kāds cits, izņemot jūs.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Drošība un pārredzamība mums ir svarīga.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Mēs ļoti nopietni uztveram savus pienākumus attiecībā uz jūsu datu glabāšanu. Visa personiski identificējamā informācija (PII) tiek glabāta šifrētā veidā mūsu datu bāzē, izmantojot nozares standarta algoritmus, lai nodrošinātu, ka šo informāciju var skatīt tikai pilnvaroti lietotāji.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Jūs varat lejupielādēt visu PII, ko mēs jums glabājam.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Lejupielādēt tūlīt');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Tiesības tikt aizmirstam (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Mēs uzskatām, ka jums vajadzētu būt iespējai <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> izdzēst </a> savu < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Personiski identificējama informācija </a>, ja vēlaties un ja tas ir iespējams. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Jūs neesat reģistrēts šajā vietnē. Jūsu vispārējā atrašanās vieta (valsts) un IP numurs tiks saglabāti ne ilgāk kā 24 stundas un pēc tam izdzēsti.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Jūs neesat reģistrēts šajā vietnē un esat atteicies no datu vākšanas. Mēs neesam saglabājuši jūsu PII.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Jūs esat reģistrējies vietnē un jums nav neviena neapstiprināta vai aktīva rezervācija. Mēs varam anonimizēt lielāko daļu jūsu rīcībā esošās informācijas. Vai vēlaties to darīt?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Piezīme: tas neizdzēš jūsu kontu, tas vienkārši anonimizē mūsu ierakstus, lai jūsu kontu nevarētu saistīt ar jums kā personu. Saskaņā ar likumu mums ir jāturpina saglabāt jūsu PII rēķinu izrakstīšanas nolūkos, tomēr dzēst visus viesu ierakstus. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Jūs esat reģistrējies vietnē, taču jums ir neapmaksātas rezervācijas, un mēs šobrīd nevaram anonimizēt jūsu datus. Šie dati tiks saglabāti ne ilgāk kā vienu gadu pēc rezervācijas pabeigšanas. dzēst, ja neizvēlaties to noņemt pirms šī laika. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Tā kā jūs esat mūsu vietnes īpašuma pārvaldnieks, mēs nevaram piedāvāt iespēju automātiski izdzēst jūsu datus. Tā vietā, lūdzu, sazinieties ar mums tieši, lai mēs varētu piešķirt jūsu īpašumu (-us) citam pārvaldniekam. Kad būsim to izdarījuši un noņemsim jūsu kā īpašuma pārvaldnieka statusu, varēsit automātiski dzēst savus datus. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Aizmirsti mani!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Šo nevar atsaukt!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Jūsu dati ir izdzēsti!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Diemžēl jūs nevarat veikt rezervāciju, jo jūsu e -pasta adrese nav derīga');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Šī lapa sniedz iespēju anonimizēt visus viesus, kuru informācija ir saglabāta sistēmā. Tas ļauj jums nodrošināt atbilstību VDAR, taču jūs nevarat rediģēt citu informāciju šajā lapā. jums jāpiesakās priekšpusē kā īpašuma pārvaldniekam. Tiek pieņemts, ka vēsturisks viesis ir sazinājies ar jums, lūdzot ļaut viņiem izmantot savas tiesības tikt aizmirstam. Ja viņi nevar pieteikties vietnes priekšgalā (iespējams, kad lietotājs viņiem netika izveidots, kad viņi rezervēja), tad jūs varat izmantot šo apgabalu, lai padarītu viņus anonīmus, tiklīdz esat apstiprinājis viņu identitāti. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonīms viesis');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Viesa dati anonimizēti');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Nevar anonimizēt');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Mums ir nepieciešama jūsu atļauja, lai saglabātu jūsu informāciju, pirms varat veikt rezervāciju. Noklikšķiniet šeit, lai dotu mums atļauju.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Vai iespējot ar GDPR saderīgu funkcionalitāti?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'MĒS NEIETEICAM, KA JŪS IZSLĒDZAT GDPR ATBILSTOŠO FUNKCIONALITĀTI. Jomres ir iebūvētas funkcijas, kas palīdz nodrošināt, ka jūsu vietnes sadaļa Jomres atbilst šai VDAR funkcijai. Ja atspējojat jums nevajadzētu, ja atrodaties ES vai veicat darījumus ar ES pilsoņiem), tad Jomres automātiski pieņems, ka katrs vietnes apmeklētājs ir devis atļauju atļaut savus personas datus. Lietotnes atļauja un lapas Mani dati netiks un lietotāji netiks aicināti dot savu atļauju datu vākšanai. ');


jr_define ('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Pagaidu faili izdzēsti');

jr_define ('MACHINE_TRANSLATION', 'Mašīntulkojumi');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Avota valoda');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Ir iespējams savienot mašīntulkošanas funkcionalitāti. Tas ļauj ievadīt virknes vienā valodā un tulkojumus var izvilkt no attāliem pakalpojumiem. Ņemiet vērā, ka ne visi tulkošanas pakalpojumi atbalsta visas valodas. Skatiet šos pakalpojumus sīkāk. ');

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Telpu tipi');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Jauns istabas veids');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Jūs varat izveidot un rediģēt istabu veidus šajā lapā. Šie telpu tipi būs raksturīgi tikai šim īpašumam. Iestatot savu īpašumu, vispirms ir nepieciešami daži telpu tipi. Varat izmantot vai nu šos telpu tipus, ko izveidojis administrators, vai arī jūs varat pievienot savu. Kad esat ieguvis vienu vai vairākus istabu tipus, varat izveidot šāda tipa telpas. Pēc istabu iegūšanas varat izveidot tarifus (cenas) šīm telpām, jo ​​tarifi ir saistīti ar istabu veidiem . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Pārvaldnieki var izveidot telpu tipus?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Izmantojiet šo opciju, lai konfigurētu, vai pārvaldnieki priekšplānā var izveidot savus telpu tipus. Mēs iesakām atstāt šo opciju iestatītu uz Nē, kad sākat lietot Jomres, it īpaši, ja veidojat portālā, jo jums jāizveido visi telpu tipi administratora zonā. Pārvaldnieku izveidotie telpu tipi tiks parādīti meklēšanas veidlapās, bet, tā kā šie telpu tipi ir raksturīgi atsevišķiem īpašumiem, meklēšanas rezultātos tiks parādīts tikai viens īpašums, ja tiks izvēlēts šis telpas tips meklēšanas laikā. Ja vēlaties, lai telpu tipus varētu izveidot tikai īpašumu pārvaldnieki, atstājiet šo opciju kā Jā un izmantojiet spraudni Piekļuves kontrole, lai tikai lielākie pārvaldnieki varētu skatīt izvēlnes opciju Iestatījumi > Telpu veidi. ārā īpašumā esošās telpas un izmantojiet uzlaboto vai mikromenedžeru tarifu rediģēšanas režīmus, var izmantot šo iespēju. Villas/dzīvokļa tipa īpašumi to nevarēs izmantot. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Istabas/īpašuma veids atjaunināts');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Rādīt telpu tipus meklēšanas opcijās');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Ja izvēlaties atļaut īpašumu pārvaldniekiem izveidot savus istabu tipus, varat izvēlēties, vai parādīt izveidotos telpu tipus meklēšanas opcijās, kurās esat izvēlējies rādīt telpu tipus.');


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Katrai rezervācijai nevajadzētu atkārtoti izmantot vienu un to pašu e-pasta adresi. <br/> Ja jūsu uzņēmumam ir unikāls domēns (piemēram, nevis Gmail e-pasta adrese), izmantojiet viesa tālruņa numuru e -pasta adrese. Pēc tam e -pasta adrese izskatīsies aptuveni 123456@mydomain.com <br/> Tas nodrošinās, ka, veidojot rezervāciju, tiks izveidots jauns viesis. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'E -pasta adrese');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Parole');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Mēs esam priecīgi, ka vēlaties vēlreiz pie mums rezervēt. Lai varētu kopīgi pārvaldīt visas rezervācijas, jums jāpiesakās, lai rezervāciju varētu pievienot jūsu kontam. Tas arī nodrošina, ka esat pilnvarots izmantot norādīto e-pasta adresi. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Ja jūs nezināt savu paroli, mēs varam jums nosūtīt paroles atiestatīšanas e -pastu. Lūdzu, izpildiet šajā e -pastā sniegtos norādījumus, lai atiestatītu paroli.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Aizmirsāt paroli?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizēt savu vārdu?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ja pārskatīšanas laikā izvēlaties savu vārdu padarīt anonīmu, mēs tā vietā izmantosim jūsu iniciāļus.');
jr_define ('ANONĪMS', 'Anons');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'teica');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Atbildēt uz šo atsauksmi');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Ierakstiet savu atbildi uz šo atsauksmi šeit.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Tava atbilde');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Galvenā atsauksme');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Pārskata atbilde saglabāta');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Pirms atbildes atbildes iesniegšanas jums jāizlasa sekojošais. Iesniedzot atbildi, jūs apstiprināt, ka piekrītat šiem noteikumiem un nosacījumiem.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Kādas ir mūsu vadlīnijas atbildei uz atsauksmi?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Jūs atbildat uz sava īpašuma pārskatīšanu. Jūs <em> nedrīkst </em> izmantot savu atbildi kā komerciālu strīdu procesu. Ja jums ir jāziņo par atsauksmi, jāizmanto ziņojums Pārskatīt "pogu ierakstā, nevis šo atsauksmju atbildes lapu. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Kad būsiet atstājis savu atbildi, to vairs nevarēsit rediģēt.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Atļauts un iedrošināts');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Pilna atbilde uz atsauksmi. </li>
    <li> Pieklājība un godīgums. </li>
    <li> Saprātīgas atbildes uz recenzenta problēmām (atcerieties, ka citiem var būt līdzīgas problēmas, taču viņi neizmantoja iespēju publicēt atsauksmi). </li>
    <li> Mudiniet viesi tieši sazināties ar jums, lai atrisinātu problēmas.
    <li> Vienmēr atcerieties, ka nākamie viesi redzēs jūsu atbildi. Pārliecinieties, ka vienmēr esat profesionāls. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nav atļauts');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Komercstrīdi. </li>
    <li> Jautājumi recenzentam vai citiem. </li>
    <li> Apšaubāma valoda (ieskaitot lāstu). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Pēdējais skrējiens');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Grafiks');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Rēķina numuri');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Vai izmantot pielāgotus rēķinu numurus?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Jūs varat konfigurēt sistēmu izmantot pielāgotus rēķinu numurus. Tiks ietekmēti tikai jauni rēķini.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Sākuma numurs');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Skaitļi tiek veidoti secīgi. Kādam jābūt pirmajam skaitlim?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Kādā formātā jāizmanto rēķina numurs?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Konfigurējiet rēķina numura formātu šeit. Formāts var izskatīties kā {N}/{D} vai {N}/{Y}, kur N ir automātiski ģenerēts numurs, D = datums formātā GGGGGMDD ( Vai 2019 izskatās kaut kas līdzīgs 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'Piemaksa');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Papildu maksa, kas tiks pievienota istabai pēc rezervācijas (aprēķināta dienā)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Vai piešķirt prioritāti visas vietnes etiķetēm?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Iezīmju rediģēšanā saglabātais pielāgotais teksts vai tulkotās lang failu virkņu lapas tiek uzskatītas par "visas vietnes" etiķetēm. Īpašumu pārvaldnieki var arī pielāgot katra īpašuma etiķetes, izmantojot iezīmju rediģēšanas funkciju priekšpusē. Tas ļauj īpašuma pārvaldniekam, lai viņa īpašumam būtu dažādi teksti, kas ir noderīgi, ja īpašums atšķiras no visiem citiem vietnes rekvizītiem. <br/> Kad sistēma meklē iezīmju tekstus, tā priekšroku dod visas vietnes tekstiem, nevis īpašumam konkrēti teksti, kas nozīmē, ka, ja šai etiķetei ir pieejams visas vietnes teksts, sistēma vispirms izvēlēsies to. Ja iestatīsit šo opciju Nē, sistēma par īpašumu saistītiem tekstiem piešķirs priekšroku salīdzinājumā ar visas vietnes tekstiem. ');

jr_define ('_JOMRES_REFERRER', 'Novirzītājs');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // To varētu mainīt, ja tas tiktu iekļauts baltajā sarakstā, tāpēc vietne "Pasaules labākā rezervēšanas vietne" to mainītu uz "WBBS" vai līdzīgu.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Bibliotēkas pakotnes');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Pārdevēja un mezgla moduļi ir atsevišķas (bezmaksas) paketes Jomres. Jūs varat atkārtoti instalēt pakotnes šajā lapā.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Pārinstalēt bibliotēkas pakotnes');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nevar izdzēst rekvizīta tipu, jo to joprojām izmanto daži rekvizīti. Pirms mēģināt dzēst šo īpašumu, vispirms jāmaina šis īpašums. Īpašuma UID, kas neļauj dzēst:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Nevar atcelt rekvizīta tipa publicēšanu, jo to joprojām izmanto daži rekvizīti. Vispirms jāmaina šie rekvizīti uz cita veida īpašumu, pirms mēģināt atcelt šī īpašuma publicēšanu. Īpašuma UID, kas neļauj veikt izmaiņas:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Nejaušas e -pasta adreses');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Piedāvāt izlases e -pastus');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Jūs varat ļaut sistēmai ģenerēt nejaušas e -pasta adreses informācijas paneļa ātrās rezervēšanas uznirstošajā logā. Tas ļauj vadītājiem un reģistratūrām izveidot rezervācijas viesiem, kuriem viņiem nav e -pasta adrešu, tāpēc ir paredzēts strādāt kā laika ietaupījums vietnēm, kurās ir daudz reģistratūru/vadītāju, kuri saprot, ka šie nejaušie e -pasta ziņojumi nekad netiks izmantoti reālai saziņai, nolūks ir apiet faktu, ka Džomresā visiem viesiem ir jābūt e -pasta adresēm. Jums arī jānorāda domēns nākamais lauks. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Tam nevajadzētu būt normālam e -pasta domēnam, piemēram, gmail vai outlook. Tā vietā tas var būt jūsu domēns vai kaut kas cits, piemēram, "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Augšupielādes apgabals');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Nav lietotāja lomas');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Reģistratūra');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Īpašuma pārvaldnieks');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Īpašuma pārvaldnieks');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Apturēts');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Svītrots no CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Ja jums patīk Jomres, lūdzu, apsveriet iespēju atstāt atsauksmi kādā no šīm vietnēm');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Es esmu jauks cilvēks, es jau esmu atstājis atsauksmi');

jr_define ('_LICENCE_PROMPT_DEAR', 'Cien.');
jr_define ('_LICENCE_EXPIRED', ', jūsu Jomres licences atslēgai ir beidzies derīguma termiņš, tāpēc jums trūkst šo lielisko funkciju un priekšrocību!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Spraudņu atjauninājumi un jauni spraudņu izlaidumi');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Tikai ekskluzīviem dalībniekiem e -pasts/biļešu atbalsts');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Jomres Core atjauninājumi bez raizēm');
jr_define ('_LICENCE_EXPIRED_POST', 'Sazinieties ar mums, lai saņemtu bezmaksas problēmu risinājumus un piekļūtu visiem spraudņiem un tikai dalībnieku atbalsta pakalpojumiem.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Iegūstiet piekļuvi visiem spraudņiem tūlīt!');

jr_define ('_LICENCE_INVALID_KEY', 'Diemžēl šķiet, ka neizmantojat derīgu Jomres licences atslēgu, tāpēc jums trūkst šo lielisko iespēju un priekšrocību!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Spraudņi </a>, kas ievērojami paplašina Jomres funkcionalitāti');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Tikai ekskluzīviem dalībniekiem e -pasts/biļešu atbalsts');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Jomres Core atjauninājumi bez raizēm');
jr_define ('_LICENCE_INVALID_POST', 'Sazinieties ar mums, lai saņemtu bezmaksas maksājumu risinājumus un piekļūtu visiem spraudņiem un tikai dalībnieku atbalsta pakalpojumiem.');
jr_define ('_LICENCE_INVALID_START', 'Iegūstiet piekļuvi visiem spraudņiem tūlīt!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Informācijas panelis');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Lietotāji');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Komisija');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abonementi');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Rēķini');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portāls');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Tulkojumi');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Rīki');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Pārskati');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Iestatījumi');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Palīdzība');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Kopējie rekvizīti sistēmā');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publicētie rekvizīti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Nepublicēti rekvizīti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Apstiprinātie rekvizīti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Īpašumi, kuriem nepieciešams apstiprinājums');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Kopā atsauksmes');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Nepublicētas atsauksmes');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Pārskatu pārskati');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres sistēmas informācija');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Šī īpašuma rekvizītu veids nav publicēts, tas var netikt parādīts meklēšanas rezultātos. Lūdzu, sazinieties ar vietnes administratoru, lai publicētu rekvizīta veidu, vai mainiet rekvizīta veidu lapā Īpašuma rediģēšana.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Atjauniniet sava īpašuma veidu');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Ienākumi (samaksātās summas)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nevar izdzēst rekvizīta funkciju');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', ' jo to izmanto šāds (-i) īpašums (-i):');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API tests');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Šī lapa veic REST API pamata pārbaudi, izmantojot Jomres iebūvēto funkcionalitāti. Tā izsauc Jomres REST API, lai noskaidrotu, vai tā saņem derīgu atbildi.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Serveris izsauca šo URL, lai noskaidrotu, vai atbilde ir derīga:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Lapa saņēma šādu atbildi:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Šķiet, ka tests noritēja kā paredzēts, iespējams, jums nebūs nekādu problēmu, saņemot REST API pieprasījumus no pārējā interneta.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Pārbaude neizdevās, skatiet lauku Atbilde, ja izskatās, ka ir daudz HTML vai esat saņēmis 404 ziņojumu, jūsu serveris novirza zvanus uz citu URL. Tas neļaus jums saņemt API zvani. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Sindikācijas tests');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres lietotņu serveris saglabā visu Jomres vietņu sarakstu. Tas ļauj mums izveidot sindikācijas tīklu. Šis tīkls ir izveidots, lai ļautu mūsu lietotājiem parādīt citu vietņu īpašumus. īpaši jaunām vietnēm, lai izveidotu SEO klātbūtni tīklā. Mērķis ir panākt, lai visas Jomres vietnes sadarbotos, veidojot uzticību tīklam. Par šo pakalpojumu nav jāmaksā. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Jūsu vietne pašlaik nav iekļauta Jomres App serverī, kas ir sindikācijas tīkla daļa. Šis serveris mēģinās vēlreiz pievienot šo serveri tīklam, ja nākamā 6 lapa tiks ielādēta. dažas lapas ielādes, tas nemainās, lūdzu, pārbaudiet, vai iepriekš minētais savienojamības tests ir pārbaudīts. Piezīme. localhost serverus nevar pievienot tīklam. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Apsveicam, jūsu serveris ir iekļauts Jomres lietotņu serverī.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Sindicēti rekvizīti');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Šeit ir daži citi īpašumi, kas pieejami no mūsu īpašumu tīkla');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Sindikācijas statistika');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Apsveicam! Jūsu serveris ir iekļauts Jomres sindikācijas tīklā. Jūsu īpašums (-i) drīz sāks parādīties citās Jomres vietnēs, ja tie vēl netiek rādīti.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Jūs instalējat neietilpst Jomres sindikācijas tīklā, tāpēc jūsu īpašums (-i) netiek rādīts citās Jomres balstītās vietnēs, un jūs nevarat gūt labumu no šīs bezmaksas reklāmas.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktīvās Jomres instalācijas:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Kopējais Jomres instalāciju skaits, kas savās vietnēs koplieto Jomres sindikācijas tīkla rekvizītus.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Kopējie rekvizīti:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Šis ir JSN pieejamo īpašumu skaits.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Kopējais īpašums parāda:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Kopumā visas reizes, kad Jomres īpašums ir saistīts ar citu Jomres bāzētu vietni.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres sindikāta tīkls (JSN) ir bezmaksas funkcija, kas pieejama visiem Jomres lietotājiem. Tā mērķis ir nodrošināt jums bezmaksas jūsu nekustamo īpašumu reklāmu citās Jomres balstītās vietnēs. Mērķis ir palīdzēt jūs ātri sākat savu vietni, piedāvājot bezmaksas reklāmu, lai jūsu īpašumi tiktu atpazīti un uzticami, jo tie ir saistīti ar augstu uzticamību un augstas atbilstības vietnēm, kas jau ir labi zināmas meklētājprogrammām. Skatiet šo <a href = "https: //www.jomres.net/features/jomres-syndication-network target="_blank"> raksts mūsu vietnē </a> un <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network target="_blank"> rokasgrāmata </a>, lai iegūtu vairāk informācijas. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Šie ir jūsu viesu profila dati, lauki ar šo simbolu <i class = "fa fa-users" aria-hidden = "true"> </i>
 ir publiski redzami, turpretī laukus ar šo simbolu <i class = "fa fa-user-secret" aria-hidden = "true"> </i> var redzēt tikai jūs, jūsu saimnieki un vietņu administratori. <br/> <br/> Saimnieki var redzēt privātu informāciju tikai tad, ja esat jau izveidojis rezervāciju pie viņiem. <br/> <br/> Jūsu informācija ir droši šifrēta un saglabāta mūsu datu bāzē, izmantojot AES-256 šifrēšanu. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Šie lauki nav obligāti, tomēr saimnieki var izmantot šeit esošo informāciju, lai noteiktu, vai uzskata, ka var jums uzticēties, tāpēc labāk ir pievienot informāciju. Atcerieties, ka jūs lūdzat palikt savā īpašumu, un viņi var noraidīt jūs, ja uzskata, ka neesat piemērots vai jūsu biogrāfijā nav pietiekami daudz informācijas. ');
 
jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Vadītāja apliecība');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Pases numurs');
jr_define ('GUEST_PROFILE_IBAN', 'IBAN numurs');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Par mani');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Šī sadaļa "Par mani" ir publiski skatāma, tāpēc neievadiet nekādu privātu informāciju. Tomēr dariet visu iespējamo, lai kopīgotu informāciju, piemēram, par savām kaislībām. dariet sev iztiku, savus vaļaspriekus utt. Varat izmantot atzīmi, lai tai dotu mazliet džeza. Saimnieki vēlēsies justies, ka var uzticēt jums savus īpašumus. Pārliecinieties, ka jūsu attēls ir īsts jūsu, nevis jūsu suņa attēls vai automašīna (jā, puiši, mēs ar jums runājam!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Ievadiet visas īpašās prasības, kādas jums var būt, piemēram, ērtas piekļuves vajadzības šeit. Tās netiks rādītas jūsu publiskajā profilā, bet tiks pievienotas rezervācijas informācijai, veicot rezervāciju.');

jr_define ('VIEW_HOST_PROFILE', 'Saimnieka profils');

jr_define ('GUEST_PROFILE_TITLE', 'Viesa profils');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Mans profils');

jr_define ('GUEST_PROFILE_WELCOME', 'Sveiki, ļaujiet man mazliet pastāstīt par sevi.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Mans vārds ir');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'un es nāku no');
jr_define ('GUEST_PROFILE_IN', 'reģions');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Mana privātā informācija');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Mēs darām visu iespējamo, lai apstiprinātu viesu un saimniekdatoru informāciju, tomēr jums vajadzētu veikt savu pienācīgu pārbaudi un pašam izlemt, vai šī persona ir uzticama.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Mani rekvizīti');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Manas atsauksmes');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'To es teicu par šo īpašumu:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Es šim īpašumam piešķīru vērtējuma vērtējumu:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Manas atsauksmes');
jr_define ('GUEST_PROFILE_OF_ME', 'Ko citi par mani saka');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Ko šis saimnieks teica par mani');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Atsauksmes viesis');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Mana atsauksme par šo viesi');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Šeit ir daži viesu atsauksmju piemēri, lai panāktu bumbu: <br/>

<ul>
<li> (viesu vārds) bija prieks uzņemt! Viņi atstāja telpu tīru un nedēļas nogalē bija klusi. Viņiem bija raita komunikācija, un es ar nepacietību gaidu, kad viņi atkal paliks pie manis! </li>
    <li> Man patika (viesa vārds), jo viņi varēja ar cieņu izturēties pret šo vietu, lieliski pavadīt laiku un izbaudīt apkārtni. Viņi bija lieliski, nomājot telpu, un es ceru, ka man izdosies viņus atkal uzņemt. </li>
    <li> Visi mani mājas noteikumi tika ievēroti (viesa vārds), un viņi varēja viegli ienākt un iet. Man patika viņus tur turēt, jo viņi bija cieņpilni un klusi. Es ļoti iesaku tos citiem! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Diemžēl nevaru atrast šo lietotāju. Visticamāk, viņš vēl nav aizpildījis sava konta informāciju.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Viesis');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Saimnieks');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Administrators');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres ir veidots uz Bootstrap ietvara, tāpēc jums tas jāizmanto tēmai, kuras pamatā ir Bootstrap. Mēs iesakām tādu, kuras pamatā ir Bootstrap 3. Ja jums nav piekļuves motīvam, iesakām izmantot Jomres Leohtian tēma Wordpress, kuru varat <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> lejupielādēt no šejienes. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Atzīmēt kā nerādāmu');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervācija atzīmēta kā nerādāma');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Rezervācijas');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistika šim lietotājam');

jr_define ('BOOKING_NOSHOW_INFO', 'Booking and No Show informācija rezervēšanas laikā tiek izvilkta no Jomres sindikāta tīkla. Tā tiek ņemta no anonimizētiem datiem, un jūs varat to izmantot, lai izlemtu, vai šis viesis nevar izpildīt rezervāciju. sistēma ziņo, ka dati nav zināmi, iespējams, tāpēc, ka šī sistēma tīklā netiek atpazīta. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Nezināms');

jr_define ('CMF_CONFIG_TITLE', 'Kanālu pārvaldības sistēma');
jr_define ('CMF_CONFIG_KEY', 'Kanālu pārvaldības ietvara atslēga');
jr_define ('CMF_CONFIG_KEY_DESC', 'Kanālu pārvaldības sistēmas licences atslēga. Jums būs jānorāda šī atslēga, lai varētu lejupielādēt kanālu pārvaldības ietvara spraudņus.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Jūsu īpašums nav apstiprināts');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Jūsu īpašums ir neapstiprināts. Ja uzskatāt, ka tas tika darīts kļūdas dēļ, lūdzu, sazinieties ar mums.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Vai šis ir bērnu viesu veids?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Iestatiet šo uz Jā, ja šis viesu veids tiktu klasificēts kā bērnu viesu veids.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Ja vēlaties iekasēt maksu par personu par nakti, jums būs jāizveido daži viesu veidi.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Jūs varat izveidot tik daudz viesu veidu, cik nepieciešams, mēģiniet sākt, izveidojot tikai vienu viesa veidu Pieaugušais. Atstājiet visus iestatījumus noklusējuma vērtībās. Tālāk, ja vēlaties, piemēram, piešķiriet bērniem, kas jaunāki par 12 gadiem, 50% atlaidi, jūs izveidotu jaunu viesu veidu un sauktu to par “Bērni, kas jaunāki par 12 gadiem'. Iestatiet opciju “Vai pievienot dispersiju?' uz - (negatīvs) un iestatiet “Variants' uz 50. Tas nozīmē kad rezervējumam tiek pievienoti bērni, no viņiem tiek iekasēta 50% no numura cenas. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Iestatīt cenas manuāli");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Iestatīt minimālās naktis manuāli");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Iestatīt minimālās naktis");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Iestatīt <em> cenu par nakti </em> nedēļas dienā");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Iestatīt <em> cenu par nakti </em> pēc datumu diapazona");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Iestatīt <em> minimālās naktis </em> pēc datumu diapazona");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Datuma atlasītāji un likmes ievadīšana ļauj noteikt vienu cenu noteiktam datumu diapazonam. Izvēlieties sākuma un beigu datumu, ievadiet cenu un noklikšķiniet uz pogas Iestatīt cenu par nakti.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Datuma atlasītāji un minimālo nakšu ievade ļauj iestatīt vienu vērtību minimālajām naktīm noteiktā datumu diapazonā. Izvēlieties sākuma un beigu datumu, ievadiet minimālo nakšu skaitu un noklikšķiniet uz Iestatīt minimālās naktis. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Izmantojiet šo nolaižamo izvēlni, lai pārslēgtos starp cenu noteikšanu atsevišķiem datumiem un minimālo nakšu iestatīšanu atsevišķiem datumiem. Varat izmantot <em> pēc nedēļas dienas </em> atlasītāju, <em> pēc datuma diapazons </em> atlasītājs vai iestatiet cenas/minimālās naktis, manuāli rediģējot datumus. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Izmantojiet šo nolaižamo izvēlni, lai pārslēgtos starp cenu noteikšanu atsevišķiem datumiem, minimālo nakšu iestatīšanu atsevišķiem datumiem. Varat izmantot <em> pēc datumu diapazona </em> atlasītāju vai iestatīt cenas/minimālās naktis pēc manuāli rediģējot datumus. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Iestatīt cenas vai minimālās naktis");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Iestatīt <em> minimālās naktis </em> pēc nedēļas dienas");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Nedēļas dienas lauki ļauj iestatīt minimālo nakšu skaitu konkrētai nedēļas dienai, kad noklikšķināsit uz nedēļas dienas pogas, visas nedēļas dienas tiks iestatītas uz min min naktīm. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Manuāli noteiktas cenas/minimālās naktis");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Iestatīt cenas");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Iestatīt minimālās naktis");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Par nakti");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min naktis");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Maksimālais nakšu skaits");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Šeit jūs varat izveidot tarifus, kas ir saistīti ar jūsu īpašumā esošajiem telpu veidiem.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Visbiežāk izmantotās iespējas");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Norādījumi");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Ja vēlaties pievienot dažādas cenas dažādiem viesiem, <em> jūs varat izveidot vairāk nekā vairākus tarifus katram istabas tipam </em> un šajos tarifos ir atšķirīgas minimālo/maksimālo viesu vērtības. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Piešķiriet tarifam nosaukumu, definējiet maksimālo nakšu skaitu un minimālo un maksimālo viesu skaitu, kas nepieciešams rezervācijas veidlapā pirms tarifa piedāvājuma. <br/> <br/> Izmantojiet datumu atlasītāja paneli, lai datumu diapazonam pievienotu cenas un minimālo nakšu iestatījumus vai tieši rediģētu ievades datus. Ja nevēlaties, lai tarifs noteiktos datumos tiktu piedāvāts vispār, atstājiet cenu iestatītu uz 0 (nulle) šajos datumos. <br/> <br/> Dažādos datumos var būt dažādas minimālās naktis, tādēļ, ja vēlaties ilgākas rezervācijas festivāla/konferences nedēļu laikā, varat iestatīt, lai minētās naktis būtu lielākas tikai šajos periodos. <br/ > <br/> Ja iekasējat maksu par personu (PPN), varat iespējot šo iestatījumu cilnē Iestatījumi> Īpašuma konfigurācija> Cilne Tarifi un valūta, pēc tam izveidojiet nepieciešamos viesu veidus sadaļā Iestatījumi> Viesu veidi. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Papildu iespējas");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Šīs ir papildu iespējas, kuras netiek izmantotas tik bieži, bet tomēr ir pieejamas. <br/> <strong> Ignorēt PPPN </strong> Līdzekļi, ko ignorēt vienai personai par nakti. Jums var būt vairāki dažādi tarifi vienam un tam pašam istabas veidam, piemēram, viens maksā vienu personu par nakti, bet cits ne. <br/> <strong> Atļaut nedēļas nogales </strong> Izmantojot opciju Atļaut nedēļas nogales, varat noteikt tikai tādu tarifu pieejams darba dienās, piemēram, ja vēlaties īpašu tarifu biznesa ceļotājiem. Tādā gadījumā jūs iestatītu opciju Nē un minimālās naktis uz 1, bet maksimālās naktis - ne vairāk kā 5. <br/> <strong> Nedēļas nogales tikai </strong> opcija Tikai nedēļas nogales ir pretēja opcijai Atļaut nedēļas nogales. To, ko jūs uzskatāt par nedēļas nogales dienām, varat konfigurēt īpašumu konfigurācijas iestatījumos. Tas dod iespēju noteikt tikai nedēļas nogales cenu, ko varētu vēlēties piedāvājums īpašiem pasākumiem. <br/> <strong> Reģistrēšanās nedēļas dienā </strong> Šī opcija sniedz iespēju piespiest reģistrēties tikai noteiktās nedēļas dienās, un to vislabāk izmantot kopā ar opcijām Īpašuma konfigurācija> Cilne Rezervācijas> Noteiktu periodu opcijas. Lielākā daļa lietotāju vēlēsies atstāt šo opciju iestatītu uz Visi. <br/> Pēdējās divas iespējas - <strong> Jau atlasītās telpas minimums </strong> un <strong> Maksimālais jau atlasīto telpu skaits </strong> ir ļoti specializētas un noder īpašumiem ar ārkārtīgi sarežģītiem tarifiem. <em> Ja vien jums nav kādas īpašas vajadzības, atstājiet šīs iespējas mierā. </em> Izmantojiet tās, ja vēlaties, lai šis tarifs tiktu piedāvāts tikai tad, kad viesis rezervācijas veidlapā jau ir atlasījis N numuru skaitu, piemēram, jums varētu būt viens pamata tarifs, kur šīs opcijas ir atstātas pēc noklusējuma, un otrs tarifs, kurā jau izvēlētajām minimālajām istabām ir iestatīta vērtība 1, tad šis otrais tarifs tiks piedāvāts rezervācijas veidlapā, tiklīdz būs izvēlēta istaba. " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Jūs varat izveidot vairākus tarifus vienam un tam pašam istabas veidam, lai jūs varētu izveidot vienu tarifu min/max dienām no 1 līdz 7 un otru tarifu, ja min dienas ir 7, maksimālās dienas 14 un Tas ļauj jums izveidot tik vienkāršas vai tik sarežģītas cenu noteikšanas shēmas, cik jums nepieciešams. Tas arī ļauj jums izveidot vairākus tarifus ar dažādiem nosacījumiem, lai jūs varētu noteikt otru tarifu kopumu, kur cena par nakšņošanu un brokastīm ir zemāka, un cits dārgāku tarifu komplekts par gultas, brokastīm un vakara maltītēm. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Iestatīt tikai datuma atlasītāja dienas");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Īpašuma kategorijas');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Rediģēt īpašuma kategoriju');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Beidz!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Paldies, ka instalējāt Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Īpašuma pārvaldība tiek veikta publiski atvērtās lapās, nevis administratora zonā.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Ja jūs neesat pazīstams ar Jomres, lūdzu, apmeklējiet sadaļu Palīdzība> lapa Darba sākšana.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Pievienoties Džomresa sindikātam");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Kad esat iestatījis savu vietni un esat gatavs sākt apmeklētāju uzņemšanu, pievienojieties Jomres.net sindikātam un ievietojiet savus īpašumus citās Jomres vietnēs.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Lai izveidotu tarifu, jums ir nepieciešama vismaz viena istaba no viena no šiem veidiem:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Atveriet sadaļu Iestatījumi> Istabas un vispirms izveidojiet istabu, kad būsiet to izdarījis, varēsit izveidot tarifu šim telpas tipam.");

jr_define ('JOMRES_PLATFORM', "Jomres platforma");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Savienots");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Iestatiet to uz Jā, ja jau esat savienojis savu Stripe kontu ar Jomres platformu.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live konta numurs");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Šis ir jūsu Stripe konta ID, kas atrodams jūsu Stripe informācijas paneļa sadaļā Iestatījumi> Konta informācija un izskatās kā acct_xxxxxxxxx Jūs izmantotu šo lauku, ja jums ir vairākas Jomres instalācijas un vēlaties izmantot vienu un to pašu kontu visas vietnes un jūs jau esat izveidojis savienojumu ar mums. Ja neesat izveidojis savienojumu ar Jomres platformu, nepietiek ievadīt savus datus šeit. Tā vietā, lūdzu, apmeklējiet izvēlnes opciju Get Connected rīkjoslas sadaļā Palīdzība. Ja vēlaties lai pārbaudītu maksājumus, vietnes konfigurācijas cilnē Atkļūdošana iestatiet savu vietni no ražošanas uz izstrādi. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live slepenā atslēga");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Dodieties uz Izstrādātāji> API atslēgas savā Stripe informācijas panelī, lai atrastu slepenās atslēgas. Sistēma tos izmanto, lai pārbaudītu rezervācijas datus, kas atgriezti no maksājuma veidlapas, un vai tie ir samaksāti pirms rezervācijas saglabāšanas. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Svītru testa slepenā atslēga");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standarta tarifu režīms');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Guļ');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Cik cilvēku var izmitināt šajā īpašumā?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Viesu skaits jūsu ikdienas cenā');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Papildu pieaugušo cena');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Bērni');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Vienai personai par nakti?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 dienu modifikators');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Atlaide par dienas likmi, ja rezervējat 7 dienas vai ilgāk. Ja nevēlaties, lai tiktu piemērota atlaide, atstājiet šo nulli.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 dienu modifikators');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Atlaide par dienas likmi, ja rezervējat 30 dienas vai ilgāk. Ja nevēlaties, lai tiktu piemērota atlaide, atstājiet šo vērtību nulli.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Pieaugušie');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cena balstīta uz 2 pieaugušajiem');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervācija atlaide no');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'līdz');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'jo rezervācija ir ilgāka par 7 dienām.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'jo rezervācija ir ilgāka par 30 dienām.');

jr_define ('JOMRES_CITY_TAX_HEADING', 'Pilsētas nodokļi');
jr_define ('JOMRES_CITY_TAX_VALUE', 'Pilsētas nodokļa vērtība');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Nodokļa aprēķināšanas metode');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Viena maksa');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Par nakti');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Katrs viesis');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Katram viesim par nakti');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Rezervācijas vērtības procentuālā daļa');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Tīrīšanas maksa');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Tīrīšanas maksas maksa');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Piespiest saderības rekvizītu konfigurācijas režīmu?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Saderības rekvizītu konfigurācijas režīms liek notikt vairākām lietām. Vecākās Jomres versijās īpašuma pārvaldnieki varēja izvēlēties, kuru tarifu rediģēšanas režīmu izmantot, un dažādiem citiem iestatījumiem (daži no tiem var šķist mulsinoši). Iespējojot saderības konfigurāciju, visiem jaunajiem īpašumiem ir jāizmanto tikai standarta tarifu rediģēšanas režīms, kas modelē booking.com īpašuma konfigurācijas funkcionalitāti attiecībā uz cenām, pakārtotajām cenām utt. Ieteicams instalācijām, kas izveidotas pēc 9.22. .0, šai opcijai jābūt iestatītai uz Jā, bet vecākām instalācijām jums ir jāizlemj, vai jaunie rekvizīti to izveides laikā automātiski jāiestata saderības režīmā. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Vai jūs pieņemat bērnus līdz 18 gadu vecumam?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Iestatiet šo opciju uz Jā, ja atļaujat bērnus. Ja jā, tad izvēlnē Iestatījumi jums būs opcija ar nosaukumu Bērnu politikas, kur varēsit rediģēt ar bērniem saistītos iestatījumus.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Bērnu politika');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'Kādā vecumā bērni ir atļauti?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Par bērnu, par nakti');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Par bērnu, par uzturēšanos');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Bērnu likmes');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Jauna bērna likme');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Rediģēt bērnu likmi');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Izveidojiet bezmaksas vai maksas bērnu cenas šeit. Cenas tiks piemērotas tikai tad, ja būsiet izveidojis telpu tipu noslogojumu.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Vecums no');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Vecums līdz');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'par nakti vai par uzturēšanos?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Likme');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ja nulle vai nav iestatīta, šī vecuma diapazona bērni būs bez maksas.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Vecums reģistrējoties');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Vecums');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Aizņemtības līmeņi');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimālais pieaugušo skaits');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimālais bērnu skaits');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimālā noslodze');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Rediģēt noslogojuma līmeni:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Rediģēt šī numura tipa noslogojumu. Neiekļaujiet viesus, kas guļ bērnu gultiņās (tie tiek pievienoti, izveidojot papildu)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Cik jāmaksā par katru papildu pieaugušo?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Papildu pieaugušie');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Jūs vēl neesat konfigurējis bērnu likmes.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Iestatīt bērnu likmi (-es) tūlīt');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Jūs esat konfigurējis savu īpašumu, lai atļautu bērniem, bet vēl neesat iestatījis bērniem noslogojumu.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Iestatīt noslogojuma līmeņus');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Katru reizi, kad rediģējat istabu vai īpašuma tipu, jums jāpārbauda un jāatjaunina sava īpašuma/istabu noslogojums, jo tas ietekmē viesu skaitu, kurus var pieņemt rezervācijas veidlapā.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Pieaugušie');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Bērni');

jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Administratora opciju līmenis');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres ir daudz izvēlņu un konfigurācijas opciju, kuras varat izmantot, konfigurējot savu vietni. Lielāko daļu no tām jums nekad nevajadzēs mainīt, lai tās pēc noklusējuma būtu paslēptas. Varat izvēlēties parādīt šīs opcijas, iestatot administratora opciju līmenī. Pamata līmenis parāda tieši to, kas jums nepieciešams, pirmo reizi izveidojot vietni. Kopējais līmenis parāda tās iespējas, kuras visbiežāk tiek mainītas, un viss parāda visus iespējamos iestatījumus un izvēlņu opcijas administratora apgabalā. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Pamata');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Kopīgs');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Viss');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Vai mēs varam apkopot informāciju par to, kā jūs izmantojat Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Mēs vēlētos apkopot informāciju par to, kā jūs izmantojat Jomres. Personiski identificējama informācija netiks saglabāta, lietošana tiks anonimizēta un izmantota tikai, lai palīdzētu mums saprast, kā cilvēki izmanto Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Jā, tas ir labi');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nē, es nepiekrītu');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Vai jūs pieņemsiet rezervācijas vairāk nekā vienam īpašumam?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres var izmantot viena vai vairāku īpašumu vietnēm. Ja rezervēsit tikai vienu īpašumu, daudzas iespējas būs liekas un potenciāli mulsinošas. Šo iestatījumu varat mainīt vēlāk sadaļā Iestatījumi> Vietne Konfigurācija> cilne Portāla funkcionalitāte. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Tikai viens īpašums');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Es uzskaitīšu vairāk nekā vienu īpašumu');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Kuru Bootstrap ietvara versiju atbalsta jūsu veidne/motīvs?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Katrai Bootstrap ietvara versijai ir nepieciešams nedaudz atšķirīgs html marķējums. Jomres ir trīs ar Bootstrap saderīgu veidņu komplektu kopas, viena katrai Bootstrap versijai. Jums ir jākonfigurē tā, lai izmantotu atbilstošu veidņu kopu. tad jūs neizvadāt, piemēram, izkārtojumu, modālus un izvēlnes, nedarbosies pareizi. Ja vēlāk nolemjat izmantot veidni/motīvu ar citu Bootstrap versiju, varat mainīt Bootstrap veidņu kopu, kas Jomres jāizmanto sadaļā Administrēšana> Jomres> Iestatījumi > Cilne Dažādi. <br/> <br/> Joomla 3 pēc noklusējuma tiek izplatīta ar Bootstrap 2, Joomla 4 izmantos Bootstrap 5. Jomres Leohtian veidne (Joomla) un motīvs (Wordpress) izmanto Bootstrap 3. Var būt dažādas veidnes/motīvi. tiek izplatīti ar saviem Bootstrap failiem, tādēļ, ja jums rodas šaubas, lūdzu, sazinieties ar veidnes/motīva izstrādātāju. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Noņemiet decimāldaļas no izlaides cenām?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Lietot grupu pēc labojuma?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Dažām mysql instalācijām var būt problēmas ar Jomres vaicājumiem saraksta rekvizītos, viesu sarakstā un rēķinu sarakstā. Ja šajās lapās teikts, ka tajās tiek parādīti X rezultāti no Y, bet sarakstā nekas netiek parādīts, šī opcija uz Jā var atrisināt problēmu. Tas nenotiks, ja izmantojat dalītu mitināšanu un mitināšanas pakalpojums neļauj jūsu mysql lietotājam izdot komandu "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Šis ir kanāla īpašums, to nevar administrēt lokāli, apmeklējiet kanālu pārvaldības ietvara lapu, lai atrastu īpašuma attālās administrācijas saiti');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "No Bootstrap in theme");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Sociālo mediju saites');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Ievietojiet šeit savu sociālo mediju kontu nosaukumus, piemēram, "jomres", nevis visu url');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Komatatdalīts to valodu saraksts, kurās runā jūsu organizācija');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', "Jūsu organizācijas logotipa URL");
jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres atjaunināts');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Ir pieejama jauna Jomres versija. Jums ir jāatjaunina, lai varētu turpināt lietot Jomres, jo atjauninājumi uzlabo funkcionalitāti un nodrošina, ka instalācija ir droša.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Atjaunināt Jomres tūlīt');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Spraudņa atjauninājumi');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Spraudņu pārvaldniekā ir pieejamas jaunas spraudņu versijas. Lai turpinātu lietot Jomres, jums ir jāatjaunina visi spraudņi, jo atjauninājumi uzlabo funkcionalitāti un nodrošina instalācijas drošību.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Atjaunināmie spraudņi');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Ja jūsu licence vairs nav derīga, varat iegūt jaunu licences atslēgu mūsu vietnē.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Atjaunināt spraudņus');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Iegūt jaunu atslēgu');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Saglabāt jauno atslēgu');
