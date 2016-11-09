<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Ātrā rezervācija' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Rādīt profilus' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Naktsmītnes konfigurācija' );
jr_define( '_JOMRES_COM_MR_BACK', 'Atpakaļ' );
jr_define( '_JOMRES_COM_MR_YES', 'Jā' );
jr_define( '_JOMRES_COM_MR_NO', 'Nē' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Jauns' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Jauna naktsmītne' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Jauna naktsmītnes papildus ekstra' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Jauns viesis' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Saglabāt' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Vārds' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ierodās' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Izbrauc' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Piešķirt lietotājam admin funkcijas' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Vārds' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Lietotājvārds' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Autorizēts (spiežiet, lai atceltu lietotāja autorizāciju)' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Galvenā naktsmītne' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Izmainīt' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Piekļuves līmenis' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Lietotājs modificēts' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Uzņemšana' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Naktsmītnes menedžeris' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Visas rezervācijas' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Jaunas rezervācijas' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Labot rezervāciju' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Iebr./Aizbr.' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Viesis' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Numurs' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Maksājums' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Vārds' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Uzvārds' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Īpašie pieprasījumi vai vēlmes' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Atcerieties, ka īpašie pieprasījumi var būt maksas pakalpojumi!' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Atcelt rezervāciju' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Mājas numurs vai nosaukums' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Iela' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Pilsēta' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pasta indekss' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fiksētā tālruņa numurs' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mob.tālruņa numurs' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-pasta adrese' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nevar atcelt šo rezervāciju, jo viesis jau ir ieradies.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depozīts nav samaksāts' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Apstiprināt atcelšanu' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervācija atcelta' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dienas līdz iebraukšanai' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Rezervācijas veids' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Pašu rezervācija' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Uzņemšana' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internets' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Numura nosaukums' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Numurs' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Stāvs' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Vai ir piekļuves iespēja invalīdiem?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maksimālais viesu skaits' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Numura tips' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Numura tipa apraksts' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Numura ekstru saraksts' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depozīts iemaksāts' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Ievadiet depozīta summu' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Kopā jāmaksā' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Depozīta izziņa' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervācija' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depozīts' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depozīts saglabāts' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Mūsu numuri' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Naktsmītne' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Naktsmītnes tips' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Labot klienta datus' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Vārds' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Uzvārds' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Māja/dzīvokļa numurs' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Iela' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Pilsēta' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Pasta indekss' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Fiks.tālruņa nr.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mob.tālruņa nr.' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Fakss' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kredītkartes numurs' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Karte izsniegta' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Kartes derīguma termiņš' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Issue number' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Vārds uz kartes' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Izvēlieties' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Diennaktis' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Viesu skaits' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Kopā' );
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Skatīt numura/naktsmītnes piedāvājumu.' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Numuri' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Numura aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Numura tips' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Naktsmītne' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Naktsmītnes aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Numurs' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tips' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nosaukums' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nr' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Stāvs' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Vai ir pieejams cilvēkiem ar īpašām vajadzībām?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max cilvēku skaits' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Numurs pievienots' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Labot ierakstu' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Numura aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Aprīkojuma apraksts' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Numura aprīkojums pievienots' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Numura aprīkojums rediģēts' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Numura tips' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Numura/naktsmītnes tipa abreviatūra' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Numura/naktsmītnes tipa apraksts' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Numura/naktsmītnes tips pievienots' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Numura/naktsmītnes tips rediģēts' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Rediģēt ierakstu' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nosaukums' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Iela, mājas nr./ vai māju nosaukums' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Apdzīvota vieta' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Novads' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Valsts' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Pasta indekss' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tālr.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fakss' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-pasts' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Weblapa' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Naktsmītne pievienota' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Naktsmītne rediģēta' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Naktsmītnes aprīkojums' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Aprīkojuma abreviatūra' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Naktsmītnes aprīkojuma pilns apraksts' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Naktsmītnes aprīkojums pievienots' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Naktsmītnes aprīkojums rediģēts' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Cenas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarifu saraksts' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Apraksts' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Derīgs no' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Derīgs līdz' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Cena par diennakti' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min dienu skaits' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max dienu skaits' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min cilvēku skaits' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max cilvēku skaits' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Numura/naktsmītnes tips' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorēt samaksu no cilvēka par nakti.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Rādīt brīvdienu tarifus' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarifs pievienots' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarifs atjaunots' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Labot ierakstu' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopēt ierakstu' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifs izdzēsts' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Labot tarifu' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Svētku dienas' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervācija saglabāta' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Viesis ieradies' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Viesis pavadīts' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Rezervāciju saraksts' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Jaunās rezervācijas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Kontrolpanelis' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Viesu administrēšana' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Naktsmītnes administrēšana' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Pārbaudīt pieejamību' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Apstipriniet savus datus' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Vārds' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Uzvārds' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Mājas nosaukums/dzīv.numurs' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Iela' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Apdzīvota vieta' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Pasta indekss' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Fiks.tālruņa numurs' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mob.tālruņa numurs' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Pēc šāda pieprasījuma nav pieejami numuri' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Paldies par Jūsu rezervāciju. Ceram, ka Jūsu atpūta būs lieliska.<br><br> <b>Lūdzu atcerieties, ka šī rezervācija tiks apstiprināta ar apstiprināšanas e-pastu no mums. Ja Jūs nesaņemat apstiprinājuma e-pastu, lūdzu sazinieties ar mums.</center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Viesis ieradies ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Izvēlieties viesi ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Viesis izmitināts ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Šodien nav viesi, kas ierodās' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Viesis jāpavada ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Šodien nav viesu, kas izbrauc.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Papildinājumi' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Cenas un valūta' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Atlaides' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Failu augšupielāde' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Dati uz šo brīdi' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Izskaidrojums' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Jāmaksā par papildus personu' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Pārliecinieties, ka šeit ir atzīmēts Jā, ja Jūs vēlaties iekasēt samaksu par papildus viesiem' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Cena par papildus personu' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Vai depozītu aprēķināt procentos?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Vai depozītu jāaprēķina procentuāli no rezervācijas summas? Ja Nē, tad jānorāda konkrēta depozīta summa.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Depozīta summa' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'No cilvēka par diennakti' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Izvēlieties Jā, ja cena jāaprēķina no cilvēka par nakti. Ja izvēlēsieties Nē, cena tiks aprēķināta no numura par nakti' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Failu izmērs' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. faila izmērs KB' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Resources booked' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Rezervācijas dati' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Rezervācija ir juridiski saistošs līgums, tāpēc, ja kāda iemesla dēļ Jūs atceļat vai saīsināt Jūsu rezervāciju, tad Jums vēl joprojām ir jāmaksā summa pilnā apmērā.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Rezervācijas atcelšanas maksas</i> Ja Jūs atceļat savu rezervāciju, anulācija jāapstiprina rakstveidā. Atcelšanas maksas ir šādas:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Arrival date to 14 days' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Drukāt apstiprinājuma vēstuli' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Rēķina izdruka' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Diennakšu skaits: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Līgums apstiprināts: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena par diennakti: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Kopsumma' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Thank you your custom at the' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'We hope that we will see you again.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Drukāt rēķinu' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Pievienot pakalpojumu rēķinam' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Pakalpojuma apraksts' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Pakalpojuma cena' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Citi pārdotie pakalpojumi' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Citi pārdotie pakalpojumi, kopsumma: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Pakalpojums pievienots rēķinam' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Augšupielādēt attēlu' );
jr_define( '_JOMRES_FILE_UPLOAD', 'faila augšupielāde' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'atļauts ielādēt tikai šādu tipu failus:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Lūdzu izvēlieties failu pirms augšupielādes' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'faila nosaukums drīkst saturēt tikai latīņu burtus un ciparus bez atstarpēm.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'faila izmērs pārsniedz maksimāli atļauto.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'augšupielāde neizdevās!' );
jr_define( '_JOMRES_FILE_UPDATED', 'Fails augšupielādēts' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS kalendārs' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS kalendāra valoda' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Izvēlieties valodu kalendāram. (http://sourceforge.net/tracker/?group_id=75569&atid=544287)' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS kalendāra CSS fails' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Izvēlieties CSS failu, kurš tiks lietots Javascript kalendāram' );
jr_define( '_JOMRES_COM_A_ODDS', 'Dažādi' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Rādīt minikomponentu vaicājumus' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.' );
jr_define( '_JOMRES_FILE_DELETE', 'Dzēst šo attēlu' );
jr_define( '_JOMRES_FILE_DELETED', 'Attēls izdzēsts' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Dzēst' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nevar dzēst šo numuru, jo uz to attiecas rezervācijas. Vispirms atceliet rezervācijas un mēģiniet vēlreiz.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Numurs dzēsts' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Dzēst numura papildus opciju' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nevar dzēst šo numura papildus opciju, jo tā ir piesaistīta arī citiem numuriem. Atiestatiet šo opciju no citiem numuriem un mēģiniet vēlreiz.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Numura papildus opcija izdzēsta' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Dzēst naktsmītnes papildus opciju' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nevar dzēst šo naktsmītnes papildus opciju, jo tā ir piesaistīta šai naktsmītnei. Atiestatiet šo opciju no naktsmītnes un mēģiniet vēlreiz.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Naktsmītnes papildus opcija izdzēsta' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Dzēst Numura/naktsmītnes tipu' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Nevar izdzēst numura/naktsmītnes tipu, tam ir piesaistīts kāds numurs.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Nevar izdzēst numura/naktsmītnes tipu, tam ir piesaistīts kāds tarifs.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Numura/naktsmītnes tips izdzēsts' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Izdzēst naktsmītni' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Naktsmītne izdzēsta' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Jums nav tiesību dzēst šo naktsmītni.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Attēla platums pēc attēla augšupielādes.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Karte' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Apraksts' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Ierašanās laiks' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivitātes apkārtnē' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Braukšanas norādījumi' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Lidostas' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Cits transports' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Saistošie noteikumi' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adrese' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Klienti var reģistrēt tiešsaistē' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Izvēlieties Jā, lai klienti varētu rezervēt numurus tiešsaistē.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervācijas ir fiksētam periodam' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ja Jūs izvēlieties Jā, tad rezervācijas būs iespējams veikt tikai uz fiksētu laika periodu. Ja norādāt Nē, tad pārliecinieties, ka nav norādīta "definēta iebraukšanas diena", citādi pieejamības kalendārs nerādīs daudz brīvo dienu!' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Rezervācijas periods: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Numuru rezervācija' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max periodu skaits, piemēram 3 periodi pa 7 rezervācijas dienām = 21 diena' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Vai Jūsu naktsmītne tiek izīrēta tikai vienai viesu grupai vienlaicīgi?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'Atzīmējiet Jā, ja Jūsu naktsmītne tiek izīrēta tikai vienai viesu grupai vienlaicīgi, tātad tiek izīrēta visa naktsmītne vienlaicīgi. Ja Jūsu naktsmītnē ir vairāki numuri un varat uzņemt vairākas viesu grupas vienlaicīgi, lūdzu izvēlieties Nē! Šeit nedrīkst kļūdīties, jo naktsmītnēm ir dažādas formas.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Pārskatīt rezervāciju' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Apstiprināt rezervāciju' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Pirmdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Otrdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Trešdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Ceturtdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Piektdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sestdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Svētdiena' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'P' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'O' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'T' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'C' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pt' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'S' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Sv' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Pieejamības kalendārs' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Fontu krāsa šodienas datumam' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Fontu krāsa tekošā mēneša dienām ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Fontu krāsa  ne tekošā mēneša dienām' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Fona krāsa dienām, kad numuri ir brīvi' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Fona krāsa  ne tekošā mēneša dienām' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Fona krāsa dienām, kad numuri ir aizņemti' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Fona krāsa dienām, kad numuri ir pagaidu rezervācijā (nav iemaksāts depozīts)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Fona krāsa pagājušajām dienām' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Aizņemts/nav pieejams' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Brīvs' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Pagaidu rezervācija' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Definēta iebraukšanas diena?' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Tikai tādā gadījumā, ja Jūsu naktsmītnē izmanto fiksētos rezervācijas periodus.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Definētā iebraukšanas diena' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Rezervācijas periods (dienās)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Rādīt pieejamības kalendāru iekšpusē?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Izvēlieties Jā, ja vēlaties lai formā rāda pieejamības kalendāru' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Pieejamība' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Noklikšķiniet uz brīvās dienas, lai atvērtu rezervācijas formu' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Pašu rezervācijas' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'jauna pašu rezervācija' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'dzēst viesi' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'viesis izdzēsts' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'nevar dzēst šo viesi, jo viņam ir citas rezervācijas' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'numura cena: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Smēķēšana' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "Jebkurš" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Kalendāra formāts' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'atļauj lietotājam mainīt kalendāra formātu' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Kalendāra ievades formāts' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'atļauj lietotājam mainīt kalendāra ievades formātu' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'atļaut "caurumus" fiksētajos rezervācijas periodos?' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', '"caurumu" ilgums dienās' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicēts' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Revīzija' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Datums' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Laiks' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Lietotājs (lietotājvārds)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Darbība' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Skatīt detalizētāk' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'atlasīt pēc datuma' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'atlasīt pēc lietotājvārda' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'atlasīt pēc darbības' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Statuss' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Gaida ierašanos' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Ierodas šodien' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'viesis šobrīd' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Izbrauc šodien' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'vēl atrodas naktsmītnē' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'kavē izbraukšanu!' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'nezināms lietotājs' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'pievienots numurs' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'atjaunota numura informācija' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'dzēsts numurs' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'pievienota numura papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'atjaunota numura papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'dzēsta numura papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'pievienots numura tips' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'atjaunots numura tips' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'dzēsts numura tips' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'pievienota naktsmītne' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'atjaunota naktsmītne' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'dzēsta naktsmītne' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'pievienota naktsmītnes papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'atjaunota naktsmītnes papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'dzēsta naktsmītnes papildus opcija' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'laboti naktsmītnes uzstādījumi' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'naktsmītne publicēta' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'pievienots tarifs' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'atjaunots tarifs' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'dzēsts tarifs' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'pievienots pakalpojums' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'viesis uzņemts' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'viesis pavadīts' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'iemaksāts depozīts' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'izveidots viesis' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'atjaunots viesis' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'dzēsts viesis' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'rezervēts numurs' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'pievienota ekstra' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'atjaunota ekstra' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'dzēsta ekstra' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'publicēta ekstra' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'pievienota pašu rezervācija' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'dzēsta pašu rezervācija' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Ekstras' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Apraksts' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Nosaukums' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'cena' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Ekstra atjaunota' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Labot ierakstu' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Ekstra izdzēsta' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Ekstra pakalpojumu administrācija' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Rādīt ekstras rezervācijas veikšanas laikā?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Norādiet Jā, ja vēlaties lai klients varētu izvēlēties papildus ekstras' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Iespējamās ekstras' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Pašu rezervācijas sākuma datums' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Pakalpojumu atjaunošanas datums' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Pašu rezervācijas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Kļūda! Daži no numuriem jau ir aizņemti!' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Numuri, kuri iekļauti pašu rezervācijā' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Skatīt pašu rezervāciju' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nav pašu rezervāciju' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Novērtējums' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Rādīt opciju Smēķēšana?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Norādiet Jā, lai rādītu opciju Smēķēšana.' );
jr_define( '_JOMRES_COM_A_RESET', 'Atjaunot' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervācija atcelta' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Meklēt šeit:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Opcija Smēķēšana pēc noklusējuma' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Valūtas simbols' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Piemēram &amp;pound&#59; Lūdzu atcerieties, ka Jums jālieto pareizs HTML valūtas kods. Tos var atrast: <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a> Iesakām lietot valūtu pēc noklusējuma - EIRO' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Valūtas kods' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'Piemēram EUR. Šis kods tiks lietots apstiprinājuma e-pastā klientam.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Vairāk info' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Noteikt maksimālo rezervācijas laiku?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Norādiet Jā, ja Jūs vēlaties ierobežot maksimālo rezervācijas dienu skaitu (dienu skaitu norādiet nākamajā lodziņā)' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Maksimālais rezervācijas laiks dienās:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>NOTE: Nerekomendējam abas sekojošās opcijas norādīt "Jā". Jūs varat lietot tikai vienu no nodokļa aprēķina metodēm! </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Nodoklis' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Room tax' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Room tax ir izstrādāts Amerikas tirgum!' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Nodoklis fiksēts' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Nodoklis procentuāls' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Nodoklis' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Nodoklis procentuāls' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Arhivēt ierakstus' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' ieraksti arhivēti' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Audita veicējs ir arhivējis datus' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Mūsu cenas' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Tarifa nosaukums' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Tarifa apraksts' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Numura tips' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Spēkā no' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Spēkā līdz' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'No personas par diennakti' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'par diennakti' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Neiekļaujot nedēļas nogali' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min dienas' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max dienas' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min cilvēku skaits' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max cilvēku skaits' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Priekšskatījums' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Labošanas režīms?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'pašreizējais teksts' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'jaunais teksts' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'teksts atjaunots.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'labot valodu' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'nearhivēto ierakstu skaits: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Naktsmītnes tips' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'rādīt naktsmītņu tipus' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'labot naktsmītņu tipus' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Naktsmītnes tips' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Naktsmītnes tipa apraksts' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Naktsmītnes tips saglabāts' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Nevar dzēst naktsmītnes tipu. Viena vai vairākas naktsmītnes ir piesaaistītas šim tipam.' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Naktsmītnes tips(i) izdzēsti' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Apmaksas atgādinājums' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Nav ekstra pakalpojumu, ko pievienot rēķinam.' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Depozīts' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Pilna summa' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Summa, kas samaksāta veicot rezervāciju:' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Lietojiet šo opciju, lai norādītu, kas klientam jāmaksā veicot rezervāciju. Ja daļēja priekšapmaksa - norādiet Depozīts, ja pilna apmaksa - norādiet Pilna summa.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Kalendāra mēneši, ko rādīt' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'cik mēnešus rādīt pieejamības kalendārā?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'vārdā parakstīja: ' );
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Apmaksas veidi' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Atcelt' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Izvēlieties dienas, kas attieksies uz pašu rezervāciju. Pēc tam spiežiet apstiprināt. <br/> 
<br/> Izvēlieties, kuri numuri attieksies uz pašu rezervāciju.' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Aktivitātes noildze, Jūs vairs neesat ielogojies.</b> Lūdzu ielogojieties un mēģiniet vēlreiz.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Iemesls' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Lietot tiešsaistes apmaksu?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Atzīmējiet Jā, ja vēlaties, lai klienti tiešsaistē apmaksā rezervācijas.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Izvēlieties apmaksas veidu.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Maksājumu veidi iespējoti?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'modificēti spraudņa uzstādījumi' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'ievietoti spraudņa uzstādījumi' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Skatīt naktsmītnes mājaslapu' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Ārējā saite' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Ievietojiet saiti uz savu mājaslapu šeit.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Skatīta kredītkarte' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'atjaunota kartes informācija' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'labot kartes informāciju' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Edit icon size' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Naktsmītnes attēlu augšupielāde (attēla max izmērs 0.5MB)' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Attēli direktorijā' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Galerijas' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Rādīt ārējo saiti uz galeriju?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Rādīt galeriju iekšpusē?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Slideshow thumbnail target width' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Galerija' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Atvainojiet, šai naktsmītnei nav pievienoti attēli.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Rādīt ārējo saiti uz tarifiem?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Uzlecošie logi atļauti?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'If set to no, then links that normally would have opened in a pop will open inline instead.' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Augšupielādēt attēlus galerijā' );
jr_define( '_JOMRES_A_TABS_MISC', 'Dažādi' );
jr_define( '_JOMRES_A', 'Saita konfigurācija' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Lietot globālos naktsmītņu uzstādījumus' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Set this to Yes if you want to force all businesses to use only the business features defined by the webmaster.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Ikona' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Izvēlieties meklēšanas spraudni, kuru vēlaties izmantot.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Atvainojiet, pēc Jūsu atlasītajiem kritērijiem nav rezultātu. Lūdzu mainiet kritērijus un meklējiet vēlreiz.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Vai Jūs esat pārliecināts?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervēt' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervēt' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Slepenais numurs' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Rādīt tarifus iekšpusē?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adrese' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detalizēta informācija' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Spiežiet, lai redzētu numurus un pieejamību.' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Rādīt tarifu informāciju' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Rādīt adreses informāciju zem šīs saites' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Rādīt naktsmītnes informāciju zem šīs saites' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Rādīt numurus un pieejamību zem šīs saites' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Rādīt tarifu informāciju zem šīs saites' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Likmes tarifs' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Vidējais tarifs' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Izvēlieties, kādu tarifu veidu gribat pielietot' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Jums ir pieejami divi tarifu kalkulācijas veidi. Pirmais <b>Likmes tarifs</b>. Piemēram Jums ir vairāki tarifi vienam un tam pašam numuram vienā dienā - nakšņošana + brokastis vai nakšņošana + vakariņas.<br/><br/> <b>Vidējais tarifs</b> domāts tarifu konfigurācijai, kad Jūs esat izvēlējies izmantot dažādas cenas dažādās nedēļas dienās (ar Micromanage). Tādā gadījumā, ja klients rezervācijā būs izvēlējies laika posmu ar dažādām cenām (piem: no trešdienas līdz sestdienai - trešdiena, ceturtdiena par vienu cenu un piektdiena, sestdiena par citu cenu), tad rezervācijas sistēma izrēķinās vidējo cenu par numuru, sareizinās ar rezervācijas dienām un kopējā cena būs korekti aprēķināta.<br/><b> Uzmanību!</b> <i>Ja Jūs lietojat cenu aprēķinu, kur dažādās dienās ir dažādas numuru cenas, tad obligāti jāizvēlas <b>Vidējais tarifs</b>, citādi rezervācijas sistēma cenu aprēķinās vadoties pēc dienu skaita un pirmās rezervācijas dienas cenas!!!</i><br/> " );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Rādīt izbraukšanas datuma ievadi?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date." );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Description limit' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "This limits the number of characters shown in the business listing when drawing from the business description." );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() format style?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Rādīt naktsmītni klientiem' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nerādīt naktsmītni klientiem' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Lietot globālos naktsmītņu tipus' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Set this to Yes if you want to force all businesses to use only the resource/business types defined by the webmaster. You need to set this to Yes if you intend to allow searching via resource/business types.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/jomres/rmtypes/ folder. ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input error background colour' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Valsts pēc noklusējuma rezervācijas formā' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Lauki ar sarkano zvaigznīti jāaizpilda obligāti!' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Vai lietotāji var reģistrēt savas naktsmītnes?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Set this to Yes if you want users to be able to register their own businesses without admin intervention.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Lūdzu norādiet Jūsu naktsmītnes valsti un novadu.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Lūdzu aizpildiet Jūsu  naktsmītnes detaļas.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Izceltie dati ir nepieciešami.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Naktsmītne izveidota' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "SAtvainojiet, lai izveidotu naktsmītni, Jums ir jāreģistrējas šajā sistēmā." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Izveidota naktsmītne: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Lietotājam: ' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Rādīt kalendāru no gada sākuma?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Brīvo numuru skaits' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Atpakaļ uz naktsmītnes sākumlapu' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Guļvietu tipi' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Random search limit' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Rādīt valūtas konvertācijas saiti tarifu skatā?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Pārrēķināt citā valūtā' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Allow users to edit using html editors?' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Lietojiet šo formu, lai veiktu vai modificētu savu rezervāciju. Izvēlieties vai labojiet rezervācijas datumus, viesu skaitu, numurus. Beigās pievienojiet papildus ekstras, ja nepieciešams un tad datus par sevi. Kad formai būs pietiekami daudz informācijas, tā piedāvās apstiprināt rezervāciju.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Lietojiet šo formu, lai veiktu vai modificētu savu rezervāciju. Izvēlieties vai labojiet rezervācijas datumus, viesu skaitu, numurus. Beigās pievienojiet papildus ekstras, ja nepieciešams un tad datus par sevi. Kad formai būs pietiekami daudz informācijas, tā piedāvās apstiprināt rezervāciju.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Kalendārs' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Izvēlieties Jums nepieciešamos rezervācijas datumus.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Pieejamība ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Izvēlieties Jums nepieciešamos numurus' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Skatiet šeit, vai norādītajos datumos naktsmītne ir brīva.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Papildus ekstras' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Izvēlieties papildus ekstras, kuras Jūs vēlaties iekļaut rezervācijā.' );
jr_define( '_JOMRES_COM_PERDAY', 'Par diennakti' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Jūsu dati' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Lūdzu ievadiet savus datus. Lauki, kas marķēti ar sarkanu zvaigznīti ir obligāti jāaizpilda.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Pieejamie numuri' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Izvēlētie numuri' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Ātrākais iespējamais ierašanās datums ir: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'par diennakti:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Jūsu izvēle:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Ekstras:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Nodoklis:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Atlaide:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Kopā (ar PVN):' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Klienti' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Pievienot Jūsu izvēlei' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Izņemt no Jūsu izvēles' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Viesu tipi' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Tips' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Klienta tips, piemēram, bērni no 5-10 gadi vai studenti.' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Piezīmes' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Piezīmes par šo klientu tipu.' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Max' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Max šā tipa klientu skaits rezervācijā.' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Procentuāli' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Ja atlaidi norādīsiet procentuāli, tad tā tiks rēķināta procentuāli no numura cenas. Ja nē, tad Jums jānorāda atlaides lielums Eiro. Piezīme: atlaide jānorāda ar mīnus zīmi!' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Pievienot atlaidi?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', '' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Atlaide' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Atlaides lielums' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modificēts lietotāju tips' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Publicēts lietotāju tips' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Dzēsts lietotāju tips' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Izveidots lietotāju tips' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Atjaunots lietotāju tips' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Atjaunots lietotāju tips' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Rādit saiti uz numuriem naktsmītnes detaļlapā?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Rādīt <b>tikai</b> pieejamības kalendāru?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Praktiski pielietojams tikai tām naktsmītnēm, kuras tiek iznomātas "vienā gabalā"' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Min rezervācijas intervāls' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Mazākais intervāls dienās rezervācijas formā no iebraukšanas līdz izbraukšanai.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Rezervācijas formas numuru skatā rādīt numura numuru' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Rezervācijas formas numuru skatā rādīt numura nosaukumu' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Rezervācijas formas numuru skatā rādīt tarifa nosaukumu' );
jr_define( '_JOMRES_ORDER', 'Šķirot pēc' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Obligāts' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'dienas pirms iebraukšanas' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Min dienu skaits no "šodienas" līdz ierašanās dienai.' );
jr_define( '_JOMRES_DTV', 'Datumu tipu variācijas' );
jr_define( '_JOMRES_DTV_DOW', 'nedēļas diena' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'viesu skaits rezervācijā pēc noklusējuma' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Ja Jūs lietojat vairākus viesu tipus, tad šeit norādiet cik viesi pēc noklusējuma pirmajā viesu tipā parādīsies rezervācijas formā, piem. pieaugušie -2.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Vai rezervēt tiešsaistē drīkst tikai reģistrējušies lietotāji?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Atvainojiet, Jums jābūt reģistrētam lietotājam, lai veiktu rezervāciju. Spiežiet šeit, lai reģistrētos vai ielogotos. Ja veiciet rezervāciju no citas mājaslapas, pēc reģistrācijas spiežiet refresh pogu, lai turpinātu rezervāciju. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Fonta krāsa saitei uz pašreizējām rezervācijām.' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Nedēļas nogales robeža' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Numurs rezervēts' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Pašu rezervācija' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Noapaļot depozītu līdz tuvākajam apaļajam ciparam?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Piemērot priekšapmaksu?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarifi tiek aprēķināti par nedēļu?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Jūs varat aprēķināt tarifus gan par dienu gan par nedēļu. Ja aprēķiniet par nedēļu, tad šeit jāatzīmē Jā.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'par nedēļu' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fiksētās iebraukšanas dienas: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Kad noteiktas ierašanās datumi ir izvēlēti, var norādīt datumus nolaižamajā sarakstā. Ņemiet vērā, ka datumu sarakstā neiekļauj datumus, ja rezervācija nav iespējama (iepriekš aizņemts, u.t.t.) ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Smēķešanas opcija nederīga' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'ierašanās diena nederīga' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'izbraukšanas datums nederīgs' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervācijas laiks ir par īsu. Mazākais iespējamais rezervācijas laiks dienās:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Jūsu intervāls ir:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Viesu tipu un skaita izvēle nederīga' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Izvēlieties viesu tipu un skaitu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Jūs esat izvēlējies pārāk daudz viesu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Jūs esat izvēlējies vairāk numuru nekā nepieciešams Jūsu izvēlētajam viesu skaitam. Varat izvēlēties izdzēst kādu numuru no rezervācijas.' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Pārāk daudz klientu pieejamajām guļvietām' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Jums jāizvēlas vairāk numuru' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Izvēlieties numuru' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ir jāievada vārds' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Ir jāievada uzvārds' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Ir jāievada mājas/dzīvokļa numurs/nosaukums' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Ir jāievada ielas nosaukums' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Ir jāievada apdzīvotas vietas nosaukums' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Ir jāievada reģiona/novada nosaukums' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Ir jāievada pasta indekss' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ir jāievada valsts nosaukums' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Ir jāievada fiksētā tālruņa numurs' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Ir jāievada mobilā tālruņa numurs' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Ir jāievada e-pasta adrese' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'E-pasta adrese nav derīga' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Nevar apstiprināt Jūsu e-pasta domēnu' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', '<b>Mums ir brīvas vietas!</b>' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nav izvēlēti numuri' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Rezervācijas nr.' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Rezervācijas paziņojuma lodziņa fona krāsa' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Iespējot izskata maiņu?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Maksa par papildus personu ir procentuāla?' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Norādiet Jā, ja vēlaties, lai maksa par papildus personu rezervācijā tiktu aprēķināta procentuāli. Ja Nē, tad cena tiks aprēķināta kā konkrēta summa.' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Brīvo numuru un tarifu limiti' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Lietojiet šo formu, lai norādītu limitu pieejamajiem numuriem un tarifiem, kas parādās rezervācijas formā. Ja nevēlaties norādīt limitus, tad šeit norādiet 0. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Šajā laikā nav brīvu vietu!' );
jr_define( '_JOMRES_BOOKITNOW', '' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL businesses in the system for the constant you are editing.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Use global currency?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Set this to yes to force all businesses to use the same currency.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Global currency symbol' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if if you want to force the site into Full Page view. This might be useful if you intend to access the site via iframes.' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Naktsmītņu Superadministrators' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Tikai nedēļas nogales' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Brīvdienas' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Norādiet, kuras nedēļas dienas ir brīvdienas.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Izvēlieties valsti, kur atrodas Jūsu naktsmītne, pirms pievienojat kādu informāciju par naktsmītni.' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Saglabājiet naktsmītnes izmaiņas pirms ielādējat naktsmītnes attēlu.' );
jr_define( '_JOMRES_TARIFFSFROM', 'Cenas no ' );
jr_define( '_JOMRES_SEARCH_ALL', 'jebkurš' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Valsts' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Novads' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Apdzīvota vieta' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Piedāvājuma info' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Meklēt' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Ievadiet meklējamo vārdu.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Meklēt vārdu(s): ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Lūdzu ievadiet plānotos ierašanās un izbraukšanas datumus, lai atrastu brīvos numurus.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'meklēt naktsmītnes pēc tipa' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'meklēt naktsmītnes pēc numuru tipa' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'noklusējums' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'nosaukums' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'novads' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'apdzīvota vieta' );
jr_define( '_JOMRES_SORTORDER_STARS', 'novērtējums' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Naktsmītņu saraksts' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detaļas ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervācijas forma' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Atjaunināt adresi' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Vēlreiz pārbaudīt pieejamību<br/>(numuru izvēle tiks dzēsta)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Vēlreiz pārbaudīt pieejamību' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modificēt papildus ekstras' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Izmainīt numuru izvēli' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'atjaunot Jūsu adreses informāciju' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Atvainojiet, kāds no adreses laukiem ir nekorekti aizpildīts' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'numura attēls' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'valūtas formāts' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Rādīt menedžeru opcijas kā attēlus' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Meklēšanas opcijas' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Pieejamās atskaites' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Pagaidām nav atskaišu ierakstu.' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Ziņojums' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Parasts' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Paplašināts' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Mikromanage' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Tarifu konfigurācijas veids' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Uzmanību: Pārslēgšanās starp tarifu tipiem var izraisīt datu zudumu!<br/> Ja neesat pārliecināts kādu tarifu veidu Jums vajag izvēlēties vai vēlāk, konfigurējot tarifus nesaprotat kā to darīt, lūdzu rakstiet mums uz e-pastu support@bookingpro.eu vai support@rezervacija.lv, aprakstiet savu cenu politiku un mēs Jums palīdzēsim izvēlēties pareizo variantu.</b>
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
Mikromanage -> Parasts. Visi esošie tarifi tiek dzēsti.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Rādīt numuru sarakstu naktsmītnes detaļu lapā?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Naktsmītnes tips' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Tikai SRP' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Max cilvēku skaits numurā' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Max cilvēku skaits rezervācijā' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Pievienot piezīmi' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Labot piezīmi' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Dzēst piezīmi' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Skatīt piezīmes' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Pievienota jauna piezīme' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Labota piezīme' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Dzēsta piezīme' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Manas opcijas' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Rādīt rezervācijas' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Manas rezervācijas' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Skatīt rezervāciju' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Skatīt favorītus' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Jūs neesat pievienojis nevienu favorītu!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Pievienot favorītiem' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Naktsmītnes tips' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'naktsmītnes sistēmā' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Dinamiskās cenas' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'aktīvas' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Šī opcija atļauj Jums iespējot un konfigurēt numuru cenas dinamiski.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Jūs varat konfigurēt atlaides numuru cenām automātiski. Atlaides piemērojas dinamiski, izejot no tā, cik numuri konkrētajā dienā ir aizņemti, norādot kāds ir maksimālais laika periods no rezervācijas veikšanas dienas līdz iebraukšanas dienai.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Sākuma diena (maksimālais dienu skaits no rezervācijas veikšanas dienas līdz iebraukšanas dienai)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Ja 10% vai mazāk numuri aizņemti' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Ja 25% vai mazāk numuri aizņemti' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Ja 50% vai mazāk numuri aizņemti' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Ja 75% vai mazāk numuri aizņemti' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Atlaide %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' atlaide tiek piemērota no ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' līdz ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Dinamiskā atlaide nav piemērota ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API key' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Business Details page.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Use SSL in booking form?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'You need to ensure that you have a valid SSL certificate for ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Pēdējā brīža atlaide' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktīva?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Atzīmējiet Jā, ja vēlaties piešķirt pēdējā brīža atlaides. ' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Sākuma diena' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Atlaide sāk darboties, ja līdz iebraukšanai palikušas N dienas. Norādiet dienu skaitu N.' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Atlaide' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Procentuāli' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Šai rezervācijai tiek piemērota atlaide!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Rezervācijas cena tiek samazināta par ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% atlaide, ja Jūs rezervāciju veicat dienas pirms iebraukšanas, ne vairāk  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezervējiet tagad, lai iegūtu šo atlaidi!' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', '% vai lielāka atlaide iespējama, ja iebraukšanas diena ir pirms  ' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Rādīt paplašinātu tarifu informāciju?' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Norādiet Jā, ja vēlaties, lai rādītu plašāku informāciju par tarifiem naktsmītnes aprakstā.' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Minimise configuration options' );
jr_define( '_JOMCOMP_AMEND', 'Labot rezervāciju - Naktsmītnes izvēli' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Izvēlieties jaunu naktsmītni' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Oriģinālais līgums:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Depozīts samaksāts' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Depozīts nav samaksāts' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Pārrakstīt kopsummu' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Pārrakstīt depozītu' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Atcelt' );
jr_define( '_JRPORTAL_CPANEL', 'Portāla Kontrolpanelis' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Komisijas procents pēc noklusējuma' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a business in the event that another commission rate is not otherwise set.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Rādīt komisijas procentus' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Komisijas procenti' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Nosaukums' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Tips' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Komisijas procenti' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Valūtas kods' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Naktsmītņu saraksts' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Naktsmītnes nosaukums' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Naktsmītnes adrese' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Businesses who\'s background colour is red have not yet had a commission rate applied to them.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Statistika' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Statistics for: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Businesses - Clicks' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Business view' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Rezervāciju skaits' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Rezervāciju summa' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'aprēķināta komisija' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'komisijas lielums' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Rādīt rezervācijas' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Naktsmītnes id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Viesa id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'partnera id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Rēķina nr.' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Rezervācija kopā' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Līguma id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Līguma numurs' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Valūtas kods' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Izveidots' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Arhivēts' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arhivācijas datums' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Pievienot rēķinam pakalpojumu' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Rēķina menedžeris' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Asociētā naktsmītne (ja ir vairākas)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Cena' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Apraksts' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Pakalpojums pievienots " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Skatīt pasūtījumus" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Neizdevās pievienot pakalpojumu " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Kļūda! nenorādījāt pakalpojuma cenu" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have business type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Jūs nevarat dzēst šo naktsmītni. Jūs vienīgi varat padarīt neredzamu klientiem, izmantojot opciju Rādīt - Slēpt savā kontroles joslā. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'If this is a demo installation and you intend to upgrade to Jomres Solo (one business only limit) then you should create a new business first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Email error log messages?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Vai šī ir naktsmītne ar vairākiem numuriem (MRP)? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Naktsmītne ar vairākiem numuriem (MRP), ja Jūs izīrējat numurus. Ja Jūs izīrējat visu naktsmītni, tad tā ir viena  numura naktsmītne (SRP). " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Use Jomres email address checker? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Rezervācijas cena:" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "diennakts(is)" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "par numuru " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Papildus ekstru summa: " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Summa kopā: " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Lūdzu izlasiet un apstipriniet " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Zemāk redzams Jūsu rezervācijas kopsavilkums.<br /> Lai veiktu izmaiņas, spiežiet uz [Labot rezervāciju] pogas. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Ja vēlaties izdarīt izmaiņas rezervācijā, spiežiet šeit" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Labot rezervāciju" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Jebkuru speciālu pieprasījumu lūdzu ievadiet teksta laukā zemāk." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Es apstiprinu, ka augstāk sniegtā informācija ir pareiza un piekrītu " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "no personas par diennakti " );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Default language file" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Choose the default language file that Jomres should use if the language hasn't been set by Joomfish." );
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'no' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Sākt' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Iepriekšējais' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Nākamais' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Beigas' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Rezultāti' );

jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Lūdzu ievadiet savu ziņas tekstu. ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Sazināties ar naktsmītni' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Izziņas pieprasījums no ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Paldies par Jūsu pieprasījumu, Jūsu ziņa ir nosūtīta uz naktsmītnes e-pasta adresi un kopija uz Jūsu e-pasta adresi. Naktsmītnes administrācija ar Jums sazināsies.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' attiecībā uz ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Ierakstiet logā redzamos simbolus' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Es nevaru saprast simbolus. Parādiet ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Sūtīt' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'jaunu attēlu' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Pieprasījums' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Lūdzu izvēlieties nepieciešamo naktsmītni no saraksta.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min numuru skaits ir izvēlēts' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of resources already selected in booking before tariff/resource type combo can be offered. Allows you to have discounted tariffs when more than N resources are already selected. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max numuru skaits ir izvēlēts' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of resources already selected in booking before tariff/resource combo is no longer offered. Allows you to stop offering this resource type/tariff combination once N resources have been selected in the booking form. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Brīvs" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Daži aizņemti" );
jr_define( '_JOMRES_AVLCAL_HALF', "Puse aizņemta" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Gandrīz aizņemts" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Nav vietu" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Url prefix' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View business task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Search task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Add country to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Add region to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Add town to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Add business type to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Add business name to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Append business id to business name' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'if business name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Search URL Structure - Add country to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Search URL Structure - Default country' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'If all your businesses are in one country then you will not have country in the search - enter a default country here if you want to display a country' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Search URL Structure - Add region to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Search URL Structure - Default region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'If all your businesses are in one region then you will not have region in the search - enter a default region here if you want to display a region' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Search URL Structure - Add town to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Search URL Structure - Default town' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Search URL Structure - Business type' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Default business type' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Used in url if search is for all business types' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetect Javascript calendar language' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'par nedēļu' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'par dienu' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'par rezervāciju' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'no personas rezervācijā' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'no personas par dienu' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'no personas par nedēļu' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'par dienām (min dienas)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'par dienām X numuru skaits' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Atjaunot reģistrus' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'meklēt pēc cenas' );
jr_define( 'JOMRES_WORD_SAVING', 'Saglabā...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Use Composite Business details?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduces the composite business details where all of the business details output is sent to one template file (composite_business_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'This is a list of all users on the system. Non-business managers will have a Guest icon, business managers will have Reception/Business Manager/Super business manager icons.<br/>When Jomres is first installed "admin" is automatically added as a business manager and is considered an authorised user.<br/>Non-super business managers must be assigned to at least one business otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to businesses or give them super business manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific businesses only, or give them super business manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their business(s) themselves will be automatically assigned to those businesses. Super business managers automatically have rights over all businesses, and will see all configuration options even if the minimised configuration option is set in Site Config.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Here you can assign a manager to certain businesses. Ensure, if they\'re not going to be a super business manager, that they have rights to at least one business otherwise they will see an error when they log in. To give a receptionist/business manager rights over only certain businesses, ensure that the Super Business Manager dropdown is not set to Yes.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Jums pašlaik nav nevienas rezervācijas' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Naktsmītnes tips' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Mainīt naktsmītnes tipu' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Izvēlieties Jūsu naktsmītnes tipu' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Booking form logging (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (eg paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Request log (all incoming server requests)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Misc ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Jūsu pieprasījums...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Rādīt numuru tipa attēlu rezervācijas formas numuru skatā' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Naktsmītņu saraksta limits' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of businesses to show on a page after a search' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the business list will mean that the search options are also shown.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Feature columns" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "The number of feature icons that can be shown before a br is inserted to go to next row." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Search region by select combo dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Property name" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Show the Property name input." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Town/region" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Show the Region input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Search by business type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Show the search by business type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Search by resource type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Show the search by resource type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Features" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Show the search by feature input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Set this to no to show the list as tooltip images and checkboxes" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Search by description" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Show the search by description input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Search by availability" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Show the search by availability input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Search by price ranges" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Show the search by price ranges input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Price range increments" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a business is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Method' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Izskatu labošana' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Šī funkcija atļauj Jums labot lapas izskatu, esiet ļoti uzmanīgi ar to!' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Parauga vārds' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Paraugs labots?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Papildus lauki' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Te Jūs varat definēt papildus laukus rezervācijas formai' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Lauka nosaukums (bez atstarpēm)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'vērtība pēc noklusējuma' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Apraksts' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Obligāts?' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Max daudzums' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ja max daudzums ir norādīts vairāk kā 1, tad viesiem tiks piedāvāts izvēlēties cik daudz šo ekstru viņiem vajag.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "izsniegtie rēķini" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "nodokļu likmes" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "nodokļa kods" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "likmes apraksts" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Jūs nevarat izdzēst šo nodokļa likmi." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Likme" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Rēķini" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Neapmaksāts" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Apmaksāts" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Atcelts" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Apstrādē" );
jr_define( '_JRPORTAL_INVOICES_USER', "Klients" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Statuss" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Izrakstīts" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Apmaksāt līdz" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Abonēšana" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Atlicis maksāt" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Recurring total" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Recurring frequency" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Recurring day of month" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Valūtas kods" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Posteņi" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Nosaukums" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Apraksts" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "cena bez PVN" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "daudzums" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "atlaide" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Cena ar PVN" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Recurring Price" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Recurring quantity" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Recurring discount" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Recurring total" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "PVN kods" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "PVN apraksts" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "PVN apmērs" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Paypal uzstādījumi" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Valūtas kods (piem. EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Lietot sandbox? Uzmanību! Domāts tikai pārbaudei" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Jūsu paypal e-pasta adrese" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Piezīme: Lai lietotu paypal, Jums ir jāielogojas savā paypal kontā un jāatzīmē 'disable Autoreturn'. Tad uzstādījumos (Profile/Website Payment Preferences),jānorāda IPN (Profile/Instant Payment Notification Preferences)uz sekojošu URL adresi:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk   Ja Jums šeit vajag papildus informāciju, rakstiet uz info@bookingpro.eu" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "Šis rēķins ir jāapmaksā. Lūdzu spiežiet uz pogas un veiciet apmaksu caur paypal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Override standard Jomres gateway settings?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Rādīt manus rēķinus" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Atlaižu kuponi" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Atlaižu kodi var tikt ģenerēti un izsūtīti Jūsu potenciālajiem klientiem, lai palielinātu Jūsu klientu skaitu. Kuponiem var norādīt derīguma laiku, tādējādi varat piesaistīt klientus tieši 'tukšajiem' periodiem." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Kupona kods" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Spēkā no" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Spēkā līdz" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Atlaides apmērs" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Atlaidi aprēķina procentuāli?" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Tikai numuram?" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Atlaide tiek aprēķināta tikai numura cenai. Ja <b>Nē</b>, tad atlaide tiek aprēķināta visai rezervācijai." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Datubāzes kļūda, mēģinot izveidot/izdzēst kuponu." );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ja Jums ir atlaižu kupona kods, lūdzu ierakstiet to lodziņā un spiežiet "Piemērot atlaidi", lai iegūtu atlaidi savai rezervācijai.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Piemērot atlaidi' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupona atlaide piemērota rezervācijai' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Šāds kupona numurs nav atpazīts' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupona atlaides apmērs' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervācijai piemērota atlaide. Kupona kods/atlaides apmērs/kupona uzstādījumi : ' );
jr_define( '_JOMRES_COM_CACHING', 'Lietot sistēmas caching opciju?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Norādiet Nē, lai noņemtu sistēmas caching opciju.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Izvēlieties valodas' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Izvēlieties valodas opcijas, ko rādīt' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Rādīt valodas izvēles lodziņu?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Pagājušās un atceltās rezervācijas' );
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Sveicināti, " );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Paldies par reģistrāciju " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Jūsu lietotājvārds ir : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Jūsu parole ir : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Lūdzu ielogojieties, lai redzētu savas rezervācijas " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupons saglabāts' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupons izdzēsts' );
jr_define( '_JOMRES_COM_GROWL', 'Use Jomres messaging' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Username" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Password" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Notification mobile number" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " . get_showtime( 'live_site' ) . "/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Rezervācijas formas numuru skatā rādīt Pieejams invalīdiem' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Rezervācijas formas numuru skatā rādīt max cilvēku skaits' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Pilna rezervācijas summa tiks aprēķināta, kad būsiet pievienojis numurus vai numuru pēc savas izvēles." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Database template Last edited' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Disk template Last edited' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Database template warning' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Database template may be out of date' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Abonēšanas paketes" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Nosaukums" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Apraksts" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Publicēta" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Periods" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Izmēģinājuma periods" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Izmēģinājuma cena (EUR)" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Pilna cena (EUR)" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Numuru limits" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Naktsmītņu limits" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Periodi: M/Q/B/A Mēnesis/Ceturksnis/Pusgads/Gads" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Izmēģinājuma periods: Ievade, 0 (nulle) nav, 1 - 1mēnesis, 2 - 2mēneši utt" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Abonēt" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Lūdzu ievadiet/atjaunojiet Jūsu abonenta informāciju. Atcerieties, ka visi lauki ir obligāti jāaizpilda." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Vārds" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Uzvārds" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Adrese" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Valsts" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Pasta indekss" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Jums jābūt derīgam abonementam, lai pievienotu jaunu naktsmītni. Uz šo brīdi Jūs esat iegādājies abonementu priekš " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " <i>published</i> naktsmītnes (ēm). " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Jūs varat palielināt naktsmītņu skaitu <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>nopērkot papildus abonementu šeit.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Jūs lietojiet " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " naktsmītņu vietas. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Lai redzētu Jūsu naktsmītņu sarakstu, <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>spiežiet šeit</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Lai redzētu pašlaik pieejamās abonēšanas paketes, <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>spiežiet šeit</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Jūs nevarat publicēt šo naktsmītni, jo esat pārsniedzis Jūsu abonementā pieļaujamo naktsmītņu skaitu." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Paldies, ka abonējāt naktsmītnes (-ņu) vietu uz mūsu servera. Tikko Jūsu rēķins uzrādīsies kā apmaksāts (var būt neliela aizture, kamēr informācija iziet caur PayPal), lūdzu <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>spiežiet šeit, lai pievienotu Jūsu naktsmītni (-es).</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Lietot funkciju Abonēšana?" );
jr_define( '_JOMRES_COM_NEWUSER', 'Izveidot lietotāja kontu rezervējot?' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Izveido jaunu lietotāja kontu pie rezervācijas veikšanas, ja klients nav reģistrējies sistēmā.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Spiežiet šeit, lai reģistrētu Jūsu naktsmītni' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Aktīvie abonementi" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Gateway subscription id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Paldies par Jūsu rezervāciju - Jūsu lietotāja dati tiks nosūtīti Jums uz e-pastu" );
jr_define( '_JOMRES_LATLONG_DESC', "Ar peli atzīmējiet uz kartes savas naktsmītnes atrašanās vietu, lai ievadītu ģeogrāfiskā garuma un platuma koordinātas.<br/> Lai Jūsu naktsmītne kartē parādītos pilnīgi precīzi, iesakām doties uz <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">itouchmap mājaslapu</a> , kartē atrast savas naktsmītnes vietu, norakstīt ģeogrāfisko platumu un garumu un pēc tam ievadīt šos lielumus paredzētajos laukos naktsmītnes lapā. Formātam jāizskatās piemēram tā:  <b>51.754564622</b> un <b>24.997314810</b>." );
jr_define( '_JOMRES_CONTROLPANEL', 'Kontrolpanelis' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Rādīt rēķinu' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Rādīt rēķinus' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Pievienot manu naktsmītni' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Brīdinājums : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Atvainojiet, paketes ID nav atpazīts." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Sorry, you are already subscribed to a free package, you cannot subscribe to that package again." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Statuss <b>0:</b> Maksājums apstrādē <b>1:</b> Izveidots <b>2:</b> Atcelts <b>3:</b> End of Term" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Mans konts" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Uzņēmuma informācija' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Uzņēmuma nosaukums' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'Reģistrācijas numurs' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Mājas nr.' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Rēķina Nr. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Izvēlieties dienas, kas attieksies uz pašu rezervāciju. Pēc tam spiežiet "piemērot" pogu, lai vēlreiz pārbaudītu pieejamību. <br/> 
<br/> 
Ja šajā periodā būs kāda cita rezervācija, tad, kamēr šī (s) rezervācijas nebūs atceltas, Jūs nevarēsiet veikt pašu rezervāciju.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Atvainojiet, šie datumi nav pieejami pašu rezervācijai.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Jūs variet veikt pašu rezervāciju šajos datumos.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Jūsu naktsmītne ir konfigurēta, lai klients maksātu no personas par nakti, bet Jums nav norādīts neviens klientu tips. Lūdzu izveidojiet vienu vai vairākus klientu tipus. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Jums nav konfigurēts neviens tarifs! Kamēr Jūs neizveidosiet vismaz vienu tarifu, nebūs iespējams veikt Jūsu naktsmītnes rezervēšanu!' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Labošana ieslēgta' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Labošana izslēgta' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Izmantot mainīgu depozītu?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Mainīgs depozīta lielums atļauj Jums norādīt dienu skaitu N kas ir dienu skaits no rezervēšanas datuma līdz iebraukšanas datumam. Dod iespēju par rezervācijām, kas veiktas pēdējā brīdī, iekasēt uzreiz pilnu maksu.<br/>
<br/><b>Piemērs, ja Jūs aktivizēsiet šo opciju: Dienu skaits - 15. 1) Klients rezervē naktsmītni 10 dienas pirms iebraukšanas datuma - klientam veicot rezervāciju jāmaksā uzreiz pilna summa nevis depozīts. 2) Klients rezervē naktsmītni 20 dienas pirms iebraukšanas datuma - klientam veicot rezervāciju jāmaksā depozīts, kāds konfigurēts iepriekš.</b>' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'No cik dienām pirms iebraukšanas sāk iekasēt pilnu samaksu depozīta vietā?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Send Contact Owner emails to Alternative address?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the business configuration area.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative address for Contact Owner emails.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Apstiprinājuma e-pasts nosūtīts. Jūs varat aizvērt šo logu.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Nekustamo īpašumu saraksts' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Vai šī naktsmītne ir izlikta "Pārdošanā"?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Izvēlieties Jā, ja Jūs pārdodat šo naktsmītni, izvēlieties Nē, ja Jūs lietojat šo sistēmu, lai klienti veiktu rezervācijas Jūsu naktsmītnē.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktpersona' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Atzīmēt rēķinu kā apmaksātu' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Rēķins apmaksāts' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Izveidot jaunu API atslēgu' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Lietot Google tulkotāju?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Šī opcija pagaidām ir eksperimentālā stadijā.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Vai šī ir vienas naktsmītnes instalācija?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of businesses, just takes the guest to the booking form for the first business in the system. Business managers also will not see see the Business Details preview button or the Add new business button. Ideal if you only want to list one business and take bookings for it.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Maksājuma bilance' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Bilance' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Support key' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Personal discount' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit business registration to one country?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that business registrations are limited to just one country by setting this option to Yes and setting the country in the following option.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Businesses are located in this country : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery theme' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the business details tabs.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Atvainojamies, šīs naktsmītnes dati vairs nav pieejami.' );
jr_define( '_JOMRES_REVIEWS', 'Atsauksmes' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Tēma:' );
jr_define( '_JOMRES_REVIEWS_DATE', 'pievienota ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Par šo naktsmītni vēl nav atsauksmju.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Vēlaties būt pirmais, kas pievieno atsauksmi?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Piekrītu šai atsauksmei.' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Nepiekrītu šai atsauksmei.' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Vidējais vērtējums: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Kopā balsis:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Pievienot jaunu atsauksmi.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Jums ir jābūt reģistrētam lietotājam, lai pievienotu atsauksmi.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Jūsu domas par šo naktsmītni: ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Šā vērtētāja atsauksme: ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Pros: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Cons: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Pievienots: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Jūs jau esat pievienojuši atsauksmi šai naktsmītnei.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Atvainojiet, Jums nav tiesību pievienot atsauksmes.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Rādīt atsauksmes' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' viesi piekrīt šai atsauksmei. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' viesi nepiekrīt šai atsauksmei.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' viesis piekrīt šai atsauksmei. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'viesis nepiekrīt šai atsauksmei.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Paldies par Jūsu viedokli!' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Paldies, bet Jūs jau vienreiz esat izteikuši savu viedokli šai atsauksmei.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Pārliecinieties, vai visi lauki ir aizpildīti.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Lūdzu ierakstiet atsauksmes tēmu.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Sīkāku atsauksmes izklāstu lūdzu rakstiet Apraksta laukā.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Kas bija pozitīvs Jūsu viesošanās laikā?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Kas bija negatīvs Jūsu viesošanās laikā?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Novērtējiet viesmīlību' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Novērtējiet naktsmītnes apkārtni' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Novērtējiet sakārtotību' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Novērtējiet naktsmītni. Vai tā ir komfortabla vai nolietojusies?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Novērtējiet cenas un pakalpojuma atbilstību' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Novērtējiet pakalpojumu kvalitāti' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Kopējais novērtējums.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Jūsu pieredze sīkāk:' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Paldies par atsauksmi!' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Paldies par Jūsu atsauksmi! Tā tiks publicēta pēc neilga laika, kad portāla moderators būs pārbaudījis, vai nav lietoti necenzēti vārdi.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Lietot atsauksmes?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automātiski publicēt atsauksmes?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally business managers cannot review businesses. With test mode enabled, they can. Naturally this is not ideal in a production environment.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all businesses. To see a business\'s reviews, click on that business. From there you will be able to publish or delete a review.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Report review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Apstiprināt' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Ziņojumu izveidojis: ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Ziņojumus ievieto lietotāji, kuri nepiekrīt atsauksmes saturam. Vienīgā iespēja kā izdzēst ziņojumu ir izdzēst atsauksmi.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Balles (1 = ļoti slikti 10 = lieliski) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Viesmīlība  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Apkārtne ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Sakārtotība ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Naktsmītne ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Cenas atbilstība ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Pakalpojumi ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Atsauksmi pievienojis: ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Slēpt atsauksmes' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Rādīt rezervācijas formu naktsmītnes detaļu lapā?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Norādiet JĀ, lai rādītu rezervācijas formu naktsmītnes lapā. Ja norādīsiet NĒ, tad naktsmītnes lapā būs redzama saite uz rezervācijas formu. ' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Cenas ar PVN?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ja cenas norādāt ar PVN, tad šeit atzīmējiet JĀ.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Pakalpojumu nodoklis:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Nedēļas dienas lauks ļauj Jums noteikt cenu konkrētai nedēļas dienai visam gadam.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Izvēlieties sākuma un beigu datumus, cenu un tad spiežiet "Piemērot cenu" ' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Sākuma datums' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Beigu datums' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Cena' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Piemērot cenu' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partneri' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Šodien' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Iepriekšējais' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Nākamais' );
jr_define( '_JOMRES_CALENDAR_RTL', 'kļūda' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Numurs ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'viesis(i). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Ar šo tiek noteikts viesu izvietojums pa numuriem. Ja Jūs vēlaties mainīt viesu izvietojumu, Jums jāsazinās ar naktsmītni pēc rezervācijas veikšanas.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Jūsu naktsmītne nav publicēta portālā, portāla apmeklētāji to neredz!" );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Meklēšanas rezultāti pēc noklusējuma' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Mainiet šo, lai mainītu meklēšanas opcijas pēc noklusējuma.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Rādīt meklēšanas veidus nolaižamajā lodziņā.' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Numuru saraksta stils' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'Lietojot "Klasisko" numuru saraksta stilu, klienti rezervācijas formā varēs izvēlēties visu Jūsu numurus, piemēram jebkuru no pieciem vienādiem divvietīgajiem numuriem. Lietojot "Numuru tipu" saraksta stilu, vienādie numuri parādīsies klientam kā viena izvēle ar norādi cik šādi numuri pieejami.' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasiskais' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Numuru tipu' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Pārbaudīt pieejamību' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Atjauno brīvo numuru sarakstu' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Aprēķina kopsummu' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Aprēķins pabeigts' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Nedēļas sākuma diena, Svētdiena vai Pirmdiena?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Tikai naktsmītnes viesi drīkst rakstīt atsauksmes?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Norādiet JĀ, ja gribat atļaut rakstīt atsauksmes tikai saviem viesiem.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Par numuru' );

jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Viesi numurā: ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Viesi rezervācijā: ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Numuru skaits' );

jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Cenu tarifs pēc noklusējuma' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Attiecas tikai uz jauniem tarifiem" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Cik gadus rādīt?" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Definē gadu skaitu, uz kuriem attieksies micromanage tarifi" );

jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Janvāris' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Februāris' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Marts' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Aprīlis' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Maijs' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Jūnijs' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Jūlijs' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Augusts' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Septembris' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Octobris' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Novembris' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Decembris' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Naktsmītnes izmantošanas veids" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', " " );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Īre" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Izvēlieties Īres funkciju, ja uzņemat tūristus." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Pārdošana/Informācija" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Izvēlieties Pārdošanas/Informācijas funkciju, ja gribat savu īpašumu pārdot vai nevēlaties izmantot rezervācijas sistēmu un portālu vēlaties izmantot tikai informatīviem mērķiem." );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to business managers in the General Configuration section. This is useful if you do not want business managers to play around with too many settings, instead you can edit jomres_config.php to define default business options.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Izvēlieties papildus opcijas Jūsu rezervācijai.' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in business details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Pilnekrāna skats" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Parasts skats" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Show the timezone switcher in the business manager's toolbar?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Partner discount " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Search user" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign businesses and discounts to the user." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Existing partners" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a partner to be taken to the partner administration page." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Partner :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Search for a business" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the business name and select a business.<br/> When you select the business you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Current businesses" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a business to edit the partner's discount settings for that business." );

// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their businesses ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform business management functions and all of their businesses will be unpublished. Super business managers cannot be suspended." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "This account has been suspended, it is not currently possible to administer your propert(ies) using this account." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Naktsmītnes administratora konts atspējots" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Naktsmītnes administratora konts iespējots" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Informējam, ka Jūsu naktsmītnes administratora konts ir atspējots. Jums nebūs iespējams pārvaldīt naktsmītnes funkcijas, kamēr administratora konts tiks iespējots!" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Informējam, ka Jūsu naktsmītnes administratora konts ir atspējots. Lūdzu ielogojieties portālā un pārbaudiet vai Jūsu naktsmītnes lapa funkcionē pareizi. Paldies!" );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Noņemt no favorītiem' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Rezervāciju datu arhīvs' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Labot profilu' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Meklēt lietotājus" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign businesses and access rights to the user." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Existing managers" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a manager to be taken to the manager administration page." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Meklēt pēc viesu skaita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Show the search by guest number dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Meklēt pēc novērtējuma" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Show the Stars dropdown" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Viesu skaits' );
jr_define( '_JOMRES_SEARCH_STARS', 'Novērtējums' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Komisijas rēķini" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Naktsmītņu skaits" );

// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the business list whereas medium sized thumbnails are used in the business header.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).' );

jr_define( '_JOMRES_TOUCHTEMPLATES', 'Label Translations' );

jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Use commission functionality?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Set this to Yes to show the manager commission invoices which have been raised." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Manager bookings create commission invoices?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "If a manager makes a booking, does that also create a commission invoice line item?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Jauns komisijas maksas rēķins Rezervācija.lv" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Labdien! Lai redzētu jauno rēķinu, spiežiet uz saites (pirms tam Jums jāielogojas portālā)" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto suspend managers where invoices are marked as Pending?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Auto suspend threashold" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "This threashold is the number of days that a manager has to pay an invoice before they are suspended and their businesses unpublished." );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'cena (augstākās vispirms)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'cena (zemākās vispirms)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Cenu aprēķina par diennakti/ par nedēļu/ par mēnesi?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Par diennakti' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Par nedēļu' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Par mēnesi' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'No personas' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'nedēļa(as) ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mēnesis(ši) ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Lūdzu uzgaidiet, Jūsu pasūtījums ir apstrādē un tiks pāradresēts uz PayPal weblapu.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ja automātiskā pāradresācija uz PayPal nenotiek 5 sekunžu laikā...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Spiežiet šeit' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Kupons derīgs no" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Kupons derīgs līdz" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Viesa vārds" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Atlaižu kuponi var tikt ģenerēti un izsūtīti viesiem. Datumi norāda atlaižu kuponu derīguma termiņus.<br/>
Ja Jūs vēlaties atlaidi dot konkrētam klientam, izvēlaties klienta vārdu, ja atlaižu kuponu saņemējs drīkst nodot citām personām, tad klienta vārdu atstājiet tukšu." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Ar šo kuponu Jūsu rezervācijas summa tika samazināta no " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " uz " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Set this to No to disable loading of both the Jquery UI javascript and CSS files." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Set this to No to disable only the jquery UI CSS file." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Kopā ar PVN" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Atpublicēta naktsmītne' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "Rādīt bijušos un esošos viesus" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Tikai esošos viesus" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Valūtas konvertācija/valūtu kodi' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Rādīt rezervācijas formu uzlecošajā logā?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', ' ' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Summa bez PVN' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Summa ar PVN' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'PVN nodoklis:' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Atvērt rezervācijas formu' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Atpakaļ uz naktsmītnes aprakstu' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automātiski pievienot?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Bilance (pēc depozīta iemaksas)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrēt numurus pēc to aprīkojuma.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Pēdējā rezervācija' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'sekundes' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'minūtes' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'stundas' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'dienas' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'nedēļas' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'mēnešus' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'gadus' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'dekādes' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'pirms' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'šā brīža' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Rezervācijas rēkina par sienām?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'Pēc noklusējuma, rezervācijas cenas tiek aprēķinātas par diennakti, piemēram no 1.janvāra līdz 2.janvārim tiek rēķināta 1 diennakts. Bet ir lietas, ko Jūs varētu vēlēties izīrēt rēķinot katru dienu, piemēram automašīnu, vai klients drīkst palikt naktsmītnē līdz nākošās dienas vakaram. Ja atzīmēsiet šeit JĀ, tad, piemēram, par rezervāciju no 1.janvāra līdz 2.janvārim klients maksās par divām dienām.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Par dienu' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'No personas par dienu' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Ierašanās' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Izbraukšana' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "diena(s)" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Izbraukšanas datums nepareizs' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervācija ir par īsu. Minimālais dienu skaits starp ierašanās un izbraukšanas datumiem jābūt vismaz:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Ierašanās/Izbraukšanas minimālais intervāls' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Minimālais intervāls starp ierašanās un izbraukšanas datumiem. 1 nozīmē, ka ierašanās datums sakrīt ar izbraukšanas datumu.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Cenu aprēķina par dienu/ par nedēļu/ par mēnesi?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Par dienu' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dienas pirms ierašanās datuma' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Minimālais dienu skaits pirms ierašanās datuma.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Rādīt izbraukšanas dienas ievadi?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'No personas par dienu' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Pārrakstīt kopsummu' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Saglabāt kopsummu' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Rādīt PVN informāciju rezervācijas kopsavilkumā?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Labot profilu' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Attēls' );
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

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Aktīvā naktsmītne" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Mainīt aktīvo naktsmītni" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Spiežiet uz rakstzīmes, lai redzētu visas naktsmītnes, kas sākas ar šo rakstzīmi. Pēc tam spiežiet uz naktsmītnes, lai to padarītu par aktīvo naktsmītni." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Email Settings" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternate Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternate Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Use authentication" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );

jr_define( '_JOMRES_QUICK_INFO', "Īsā informācija" );

jr_define( '_JOMRES_MENU_SHOW', "Rādīt" );
jr_define( '_JOMRES_MENU_HIDE', "Slēpt" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Use the alternate menu layout?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Default" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Anybody" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registered" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nobody" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Uzņemšana" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Pilna kontrole" );
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
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "Rādīt visu lietotāju rēķinus" );

jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Tēma' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Vārds, Uzvārds' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Jūsu e-pasta adrese' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Aprakstiet problēmu' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Modelis' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametri' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Atrastās naktsmītnes" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Pievienot Jūsu naktsmītni : Solis 1 no 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Pievienot Jūsu naktsmītni : Solis 2 no 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'Manas naktsmītnes' );

jr_define( '_JOMRES_CART_TITLE', 'Manas iecerētās rezervācijas' );
jr_define( '_JOMRES_CART_INFO', 'Atcerieties, ka šīs rezervācijas vēl nav saglabātas. Ja Jūs izlogosieties no portāla vai Jūsu sesijas laiks beigsies, rezervāciju dati nesaglabāsies. Neaizmirstiet apstiprināt savas rezervācijas!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Apstiprināt rezervāciju(as)' );
jr_define( '_JOMRES_CART_OR', ' vai ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'saglabāt vēlākai apstiprināšanai.' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'Jums nav saglabātu rezervāciju.' );
jr_define( '_JOMRES_CART_VIEWCART', 'Skatīt grozu' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?' );

jr_define( '_JOMRES_CLEARDATES', 'I don\'t have any dates yet' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Use css caching?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "List view" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Photo view" );

jr_define( '_JOMRES_COMPARE', "Compare" );
jr_define( '_JOMRES_REMOVE', "Remove" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Return to search results" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Add to favourites" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Remove from favourites" );
jr_define( '_JOMRES_VIEWSHORTLIST', "View your shortlist" );

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

jr_define( 'COMMON_NEXT', "Next" );
jr_define( 'COMMON_CANCEL', "Cancel" );
jr_define( 'COMMON_SUBMIT', "Submit" );
jr_define( 'COMMON_SAVE', "Save" );
jr_define( 'COMMON_DELETE', "Delete" );
jr_define( 'COMMON_RETURN', "Return" );
jr_define( 'COMMON_CLOSE', "Close" );
jr_define( 'COMMON_BACK', "Back" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "New" );

jr_define( 'COMMON_SEND', "Send" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Action" );
jr_define( 'COMMON_VIEW', "View" );

jr_define( 'BACKTOTOP', "Back to top" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Weak" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Strong" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Property details in tabs?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Print" );

jr_define( 'COMMON_EDIT', "Edit" );
jr_define( 'COMMON_COPY', "Copy" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Here are some alternatives you might want to consider." );

jr_define( '_JOMRES_BEEZ_WARNING', "Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Getting started" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "system maintenance" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "developer tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "languages" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site structure" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "user management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "My Account (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "scheduled tasks" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal functionality" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integration" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "reports/statistics" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "taxes" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Upgrades" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "payment methods" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tariff default" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "This only applies to new tariffs" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Years to show" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a tariff type" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "account details" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "settings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Edit country" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "Country id" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Country name" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Edit region" );
jr_define( "_JOMRES_EDIT_REGION_ID", "Region id" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Region name" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "List countries" );
jr_define( "_JOMRES_COM_LISTREGIONS", "List regions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Export definitions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Property list default layout" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Stay for a minimum of" );
jr_define( "_JOMRES_NIGHTSFOR", " nights for " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property list images, show the property image as a gif if slideshow images are available." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Show as GIFs only if the property is a featured property." );

jr_define( "_JOMRES_AGENT", "Agent" );
jr_define( "_JOMRES_AGENT_DETAILS", "Agent details" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agent's listings" );

jr_define( "_JOMRES_PROPERTY_LANG", "Property language" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "The default language of this property." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Automatically approve new properties" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Approvals" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Properties awaiting approval" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No properties are awaiting approval" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Approve property" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Review property" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "This property has not been approved yet. Once it has been approved you will be able to publish it." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Sorry, you cannot publish this property as it has not been approved yet." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "A new property requires approval" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Your property has been approved" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Congratulations, your property has been approved, please click the following link to view the property's control panel : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region names are translatable" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Guest booked out." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.' );

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

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Media Centre");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Property image upload service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Add images");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Room images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Property main image");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Slideshow images");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Clear list");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop files here");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"The maximum file size for uploads is ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Only JPG and PNG images are allowed.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" these will be used in the Property List . Slideshow images will be shown on the property details page.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"View your image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Delete image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Upload image");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Room types icons");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature icons");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Upload all files");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview." );

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

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "List guests." );
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
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
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
jr_define('COMMON_PREV' , "Prev" );
jr_define('COMMON_MORE' , "More" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Today" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Year" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Month" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Week" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Day" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "From" );
jr_define('_JOMRES_HTO' , "To" );
jr_define('_JOMRES_HNEW_BOOKING' , "New booking" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Deposit status" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Guest status" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Booking status" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publishing status" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Invoice status" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Invoice type" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Approved" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Current business" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Show bookings for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Show invoices for" );
jr_define('_JOMRES_STATUS_ANY' , "Any" );
jr_define('_JOMRES_STATUS_PAID' , "Paid" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Not paid" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Active" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Cancelled" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Published" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Not published" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisional booking" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Confirmed booking" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Guests with active bookings" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Guests with past bookings" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Bookings" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Subscriptions" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Commissions" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "All my businesses" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Set as current" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Check in" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Check out" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "properties" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "guests" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "reports" );
jr_define( "_JOMRES_HLIST_GUESTS", "Guests" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "List guests" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "List invoices" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Businesses" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Quick booking" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Date of booking" );
jr_define( "_JOMRES_HTWO_WEEKS", "Two weeks" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "This booking will be cancelled. Press OK to cancel the booking." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Current residents" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Navigation bar settings" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Navigation bar location" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (content area)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fixed to top" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fixed to bottom" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Inverted navbar (colour change)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Booking number" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Fixed periods" );
jr_define('_JOMRES_HDEPOSITS' , "Deposits" );
jr_define('_JOMRES_HBOOKING_FORM' , "Booking form" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Required fields" );

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

jr_define('EXTENDED_CONFIGURATION' , "Extended Configuration" );
jr_define('SIMPLE_CONFIGURATION' , "Simple Configuration" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Resource features" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Resource type" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Edit guest type" );
jr_define('_JOMRES_HEDIT_COUPON' , "Edit coupon" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Edit extra" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Create multiple resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Generate resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "How many resources?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Resources type" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Max guests per resource" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Delete all existing resources?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "On this tab you can configure the look and feel of the booking form." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Bookings." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "This tab allows you to modify how bookings are treated, plus various other settings." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Edit Guest." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "VAT." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "If a VAT number is entered here then it will be shown on the guest's invoice." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Discount." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "You can choose to give this guest an automatic discount which will be applied whenever they make a booking." );


jr_define('DATATABLES_SINFO' , "Showing _START_ to _END_ of _TOTAL_ entries" );

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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates\" target=\"_blank\">Email Templates Help</a>");
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
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Mar' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Apr' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'May' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Jun' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Jul' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Aug' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Sep' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Oct' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Nov' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Dec' );

jr_define('DATATABLES_SEMPTYTABLE'		, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SINFO'			, "Parādīti _START_. līdz _END_. no _TOTAL_ ierakstiem" );
jr_define('DATATABLES_SINFOEMPTY'		, "Nav ierakstu" );
jr_define('DATATABLES_SINFOFILTERED'	, "(atlasīts no pavisam _MAX_ ierakstiem)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SLENGTHMENU'		, "Rādīt _MENU_ ierakstus" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SPROCESSING'		, "Uzgaidiet..." );
jr_define('DATATABLES_SSEARCH'			, "Meklēt:" );
jr_define('DATATABLES_SZERORECORDS'		, "Nav atrasti vaicājumam atbilstoši ieraksti" );
jr_define('DATATABLES_SFIRST'			, "Pirmā" );
jr_define('DATATABLES_SLAST'			, "Pēdējā" );
jr_define('DATATABLES_SNEXT'			, "Nākošā" );
jr_define('DATATABLES_SPREVIOUS'		, "Iepriekšējā" );
jr_define('DATATABLES_SSORTASCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SSORTDESCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );

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
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

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


jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category' );
jr_define( '_JOMRES_HCATEGORY', 'Category' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?' );
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
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the ".JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the ".JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );

jr_define( "JOMRES_GOOGLE_MAP_STYLE", "Google map colour scheme" );

jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE", "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1", "The property type helps you to define how the property will be booked, for example with hotels you \"sell\" just one or two rooms at a time, whereas with villas you offer the entire property." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2", "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT", "Minimum Deposit" );
jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC", "You can configure the minimum deposit amount to be charged. If you do, then the \"Deposit required is cost of the first night?\" & \"Deposit required is percentage?\" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING", "This figure cannot be less than " );

jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST", "Syslog host" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_PORT", "Syslog Port" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC", "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED", "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");

jr_define( "_JOMRES_SEND_ERROR_EMAIL", "Send an email to site admin when an error occurs?" );
jr_define( "_JOMRES_SEND_ERROR_EMAIL_DESC", "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. " );


jr_define( "_JOMRES_FAQ", "Frequently asked questions" );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION", "Introduction" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES", "What is Jomres?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES", "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD", "Can users register on my Jomres site and add their own properties?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD", "Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES", "Properties" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES", "How do I add a new property?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES", "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES", "Can I import properties from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES", "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS", "Can I import bookings from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS", "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. " );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES", "Can I edit email templates?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES", "Property managers can edit email templates through their toolbar under Settings > Email Templates." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS", "Payments" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS", "How do I allow properties to take payments?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS", "You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY", "Which gateway should I use?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY", "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS", "When a guest makes a payment for a booking, who gets the money?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS", "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING", "Troubleshooting" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL", "Booking emails aren't being sent." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL", "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY", "You can't see the payment gateway after making a booking." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY", "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES", "Jomres License" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "After buying X license, am I forced to purchase renewals once the license has expired?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED", "My license has expired, can I upgrade Jomres anyway?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED", "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE", "What software license is Jomres released under?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE", "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets." );
 

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY", "Properties" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY", "How do I create a property?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY", "Click on Properties > New Property to add a new property." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW", "How can I see what my property looks like to guests?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW", "Click on Properties > Preview to see how your property looks to guests." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP", "How do I add rooms?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP", "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES", "How do I set room prices?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES", "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS", "How do I create optional extras?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS", "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS", "How can I take payments online?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS", "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS", "Can I give discounts?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS", "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. " );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS", "Bookings" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE", "When I click New booking, I am taken to the Contact form, why?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE", "Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK", "What are Black Bookings?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK", "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished." );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES", "Images" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO", "How do I upload images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO", "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN", "What is the 'Main' image?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN", "The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES", "What are room feature icons?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS", "How do I upload room images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW", "How do I upload slideshow images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW", "Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS", "How do I upload Extras Images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS", "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP", "How do I setup currency symbols?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP", "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES", "How do I enable multiple currencies?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES", "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. " );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES", "How do I save descriptions in multiple languages?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES", "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER", "How many properties can I list?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER", "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES", "No, you cannot. You can only administer properties you have created or been assigned to as a property manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER", "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES", "What are Guest Types/How do I change per person per night?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES", "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES", "What are Room Features?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES", "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form." );



jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES", "Can I make a user a property manager?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES", "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS", "Plugins" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS", "What is the Plugin Manager for?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS", "The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE", "Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE", "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION", "How do I install a plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION", "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE", "Site Structure" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO", "What does Site Structure mean?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO", "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES", "What are Property Types?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES", "In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES", "What are Property Features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES", "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "What are Property Feature Categories?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES", "What are Room features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES", "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES", "Why is there a page to edit countries/regions?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES", "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION", "Localisation/Translation" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO", "How do I translate things?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO", "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TOURS", "Tours" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO", "What are tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO", "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL", "How do I use Jomres to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL", "To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR", "What is the Jintour plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR", "Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING", "How do I sell tours and vacation rentals in the same booking?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING", "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS", "What about if I only want to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS", "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS", "How can I create a Tour/bookable resource that can be seen in all properties booking forms?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS", "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST", "Ok, I've installed Jomres, what next?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST", "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now." );

jr_define( "_JOMRES_MANAGE_PROPERTIES", "Manage Properties" );

jr_define( "_JOMRES_CONFIG_IPINFODB_KEY_WARNING", "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING", "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_PERMIT_NUMBER_TITLE", "Permit number" );
jr_define( "_JOMRES_PERMIT_NUMBER_DESCRIPTION", "Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section." );

jr_define( '_JOMRES_SHORTCODES', "Shortcodes" );

jr_define( '_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );
jr_define( '_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );

jr_define( 'SHORTCODE_TASK', "Task" );
jr_define( 'SHORTCODE_DESCRIPTION', "Description" );
jr_define( 'SHORTCODE_ARGUMENTS', "Arguments" );
jr_define( 'SHORTCODE_EXAMPLE', "Example" );

jr_define( 'INTEGRITY_CHECK', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_DESC', "This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here." );
jr_define( 'INTEGRITY_CHECK_FILENAME', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_LOCALHASH', "Local hash" );
jr_define( 'INTEGRITY_CHECK_BUILDHASH', "Version hash" );
jr_define( 'INTEGRITY_CHECK_NOPROBLEMS', "Awesome! No problems were found." );


jr_define('_JOMRES_PROPERTYTYPE_MARKER',"Google maps marker");

jr_define( '_JOMRES_JAVASCRIPT_READMORE', 'Read more' );
jr_define( '_JOMRES_JAVASCRIPT_READLESS', 'Read less' );
jr_define('_JOMRES_TOURIST_TAX_TITLE',"Tourist tax");

jr_define('_JOMRES_TOURIST_TAX_TAXRATE',"Tourist tax rate");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC',"Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO',"Is percentage?");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC',"Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO',"Affects the entire booking value?");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC',"Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE',"Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.");