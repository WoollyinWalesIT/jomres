<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','Quick reservation');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Visa profiler');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Business Configuration');
jr_define('_JOMRES_COM_MR_BACK','Tillbaka');
jr_define('_JOMRES_COM_MR_YES','Ja');
jr_define('_JOMRES_COM_MR_NO','Nej');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Ny');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Nya affärer');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Ny verksamhet har');
jr_define('_JOMRES_COM_MR_NEWGUEST','Ny gäst');
jr_define('_JOMRES_COM_MR_SAVE','Spara');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Namn');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ankomst');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Avgång');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Tilldela funktioner användaren admin');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','id');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Namn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Användarnamn');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Just nu godkännas (klicka för att de-godkänna användaren)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Default verksamhet');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Ändra den här');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Åtkomstnivå');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Användare modifierad');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N / A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Mottagning');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Business manager');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Alla bokningar');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','nya bokningar');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Redigera bokning');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr/Avd');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gäst');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Resurs');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Betalning');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Förnamn');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Efternamn');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', "Särskilda krav");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Observera att vissa speciella krav kan medföra extra avgifter.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Avbryt bokning');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Det husnummer eller namn');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Street');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Town');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Fast nummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilnummer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-postadress');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Kan inte avbryta denna bokning som gäst är redan bokad i');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Deposition betalas inte');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Bekräfta inställd flygning');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Bokning avbrutet');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dagar till ankomst');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','bokningstypen');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Svart');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Mottagning');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Resource namn');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Resurs');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', "golv");
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Disabled tillgänglig?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max människor');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Resurs / Verksamhetstyp');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Resurs / affärer Typ Beskrivning');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Resurs listan över funktioner');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Deposition betalas');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Enter insättning');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Totalt att betala');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Deposition ref');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Bokning');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Insättning');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Deposition sparad');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Våra resurser');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Business');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Resurs / affärer typ');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Redigera Details Guest');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Förnamn');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Efternamn');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Hus');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Gata');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Stad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Postnummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Fast');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Mobilnummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Kreditkort nej.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','kort utfärdat');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','kort ut');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Utfärdandenummer');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Namn på kort');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Gör ditt val');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Nights');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Antal gäster');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Totalt');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Visa resurser och verksamhet config');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Resurser');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Rm funktioner');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Rm typer');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Business');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Prop bedrifter');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Resurs');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','typ');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Namn');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Antal');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', "golv");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Handikappvänligt?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max människor');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Funktioner');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Resurs tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Redigera post');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Rm funktioner');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Funktion Beskrivning');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Resource funktion lagts');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Resource-funktionen uppdateras');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Resource typ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Resurs / affärer typ förkortningen');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Resurs / affärer Typ Beskrivning');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Resurs / verksamhetstyp tillagd');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Resurs / verksamhetstyp uppdateras');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Redigera post');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Namn');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Gata');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Stad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Fasta nummer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Postnummer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Funktioner');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Business tillagd');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Business uppdateras');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Business Funktioner');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Business har abbv.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Business har fullständig beskrivning');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Business funktion lagts');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Business-funktionen uppdateras');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tull');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Tulltaxan titel');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Beskrivning');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Gäller från');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Giltigt till');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','per natt');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','dagar Min');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max dagarna');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min människor');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max människor');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Resurs / affärer typ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorera PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Tillåt helger');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','tulltaxan tillagd');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','tulltaxan uppdateras');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Redigera post');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Clone posten');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','tulltaxan utgår');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Redigera tariff');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','helgdagar');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Bokning frälsta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Boka gäst i');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','bok GÄSTOMDÖMEN');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lista bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','nya bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Dashboard');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Gäst admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Business admin');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Kontrollera tillgänglighet');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','bekräfta dina uppgifter');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Förnamn');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Efternamn');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Hus nr.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Gata');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Stad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Postnummer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Fast nummer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Mobilnummer');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Det finns inga tillgängliga resurser som kan tillgodose de parametrar som anges');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center> Tack för att göra din bokning med oss ​​och vi hoppas att du njuta av din vistelse. <br> <b> Observera att detta endast är en preliminär bokning, och kommer inte att vara bekräftas tills du får din bekräftelse brev från oss) </ center>.');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','bokning som gjorts för företag:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Bokning görs för resurs:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Ankomst:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Avresa:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Namn:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Fast:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Mobil:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Värdet av kontraktet är:');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','bok i gäst');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Välj gäst');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Guest bokas i');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Inga gäster kommer att anlända idag');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','bok ut gäster');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Inga gäster beror att avvika dag');
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Kosttillskott');
jr_define('_JOMRES_COM_A_TARIFFS','tull och valuta');
jr_define('_JOMRES_COM_A_DISCOUNTS','Diskontering');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','inlagda fil');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Nuvarande inställning');
jr_define('_JOMRES_COM_A_EXPLANATION','Förklaring');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Ensamstående tillskott');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Kontrollera detta är inställt på Ja om du vill ladda enda person tillskott');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Ensamstående tillägg');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','deposition krävs är andelen?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Är den säkerhet som krävs för att vara en procentandel av den totala bokningen? Om Nej, då depositionen appliceras med vara en plan värde');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','deposition krävs värde');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Per person per natt');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Välj Ja om du vill ta betalt per-person per natt. Om nej, då kostnaderna kommer att beräknas på en per-resurs per natt basis');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Filstorlek');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max Image Filstorlek i kilobyte.');
jr_define('_JOMRES_FRONT_MR_BOOKED','bokade Resources');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','bekräftelsebrev');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Kära');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Kostnad per natt - per resurs');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Reservation detaljer');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Tack för att du bokar på');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Nedan följer en sammanfattning av din bokning detaljer. Kontrollera att vi har alla dina uppgifter korrekt och kontakta oss om det uppstår ett fel.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Din resurs kommer att hållas förrän din ankomst, och checka in är efter 02:00.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Vi ser fram emot att välkomna dig till');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Vi hoppas att du har en trevlig vistelse.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO', 'Nu måste vi ta med din uppmärksamhet på det finstilta.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Du påminns om att en bokning är ett juridiskt bindande avtal, så om du av någon anledning måste avbryta eller förkorta din bokning så är du fortfarande skyldig att betala hela beloppet.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','kan inga hänsyn tas till måltider som inte vidtagits eller för resurser som inte ockuperade under hela perioden för bokningen. Med detta i åtanke har vi rekommenderar starkt att du använder en anläggning reseförsäkringar.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>avbokning och avgifter reduceringar</ i> Om du avbryta din semester annullering måste bekräftas skriftligen. Avbokningskostnader är följande:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS', '30 dagar eller mer');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','insättning.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS', '15 till 30 dagar');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% av den totala kontrakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Ankomstdatum till 14 dagar');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','100% av det totala kontraktet.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','är VAT@17.5% i alla taxor. Varje ökning eller ändringar debiteras.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Print bekräftelsebrev');
jr_define('_JOMRES_COM_INVOICE_TITLE','Faktura utskrift');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Antal nätter:');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Kontrakt ursprungligen överenskomna:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Kostnad per natt:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Slutsumma');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Tack anpassade på');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Vi hoppas att vi kommer att se dig igen.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Skriv ut faktura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Lägg service till Bill');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Beskrivning av tjänsten');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','service värde');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Andra debiterade poster');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Övriga faktureras varor, totalt värde:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Artikel lades Bill');
jr_define('_JOMRES_UPLOAD_IMAGE','Ladda upp bild');
jr_define('_JOMRES_FILE_UPLOAD','Ladda upp fil');
jr_define('_JOMRES_FILE_ERROR_TYPE','är det endast tillåtet att ladda upp olika typer av typ: \ n');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Välj en fil innan uppladdning');
jr_define('_JOMRES_FILE_ERROR_NAME','Filen får endast innehålla alfanumeriska tecken och inga mellanslag tack.');
jr_define('_JOMRES_FILE_ERROR_SIZE','Filstorleken överskrider den högsta administratören har satt.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','Filen kunde inte laddas upp.');
jr_define('_JOMRES_FILE_UPDATED','Din fil har överförts.');
jr_define('_JOMRES_COM_A_JSCALENDAR','JS Calendar');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendar språkfil');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Välj språk fil som ska användas i Javascript kalendern. Observera att vissa av de kalendrar kan vara defekt, se http://sourceforge.net/tracker/?group_id=75569&atid=544287 för mer information');
jr_define('_JOMRES_COM_A_CALENDARCSS','JS Calendar CSS-fil');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Välj CSS-fil som ska användas i Javascript kalendern');
jr_define('_JOMRES_COM_A_ODDS','Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING','Lista minicomponent samtal');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Slå detta till Ja för att se en logg över de minicomponents kallas längst ner på sidan efter Jomres har avslutats. Det inaktiverar också den interna omdirigera funktionen. Detta är användbart om du försöker identifiera vilka minicomponents presterar vissa tjänster.');
jr_define('_JOMRES_FILE_DELETE','Radera denna bild');
jr_define('_JOMRES_FILE_DELETED','Fil (er) raderade');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Ta bort');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Kunde inte ta bort denna resurs finns bokningar mot det. Avbryt de bokningar sedan försöka igen.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Resurs bort');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Ta bort resurs funktion');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Kunde inte ta bort denna resurs funktionen delas det in i en resurs eller resurser. Ta bort funktionen från dessa resurser och försöka igen.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Resource-funktionen raderas');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Ta bort affärer funktion');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Kunde inte ta bort denna verksamhet funktionen delas det in i ett företag. Ta bort funktionen från denna verksamhet och försök igen.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Business-funktionen raderas');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Ta bort resurs / affärer typ');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Kunde inte ta bort denna resurs / affärer typ, delas det in i en resurs. Prova igen tilldela resursen till en annan resurs / verksamhetstyp och försök igen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Kunde inte ta bort denna resurs / affärer typ, delas det in i en tariff. Prova att tilldela tariffen till en annan resurs / verksamhetstyp och försök igen.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Resurs / verksamhetstyp bort');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Ta bort verksamhet');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','Business raderas');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Du har inte rätt att ta bort denna verksamhet.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Bildbredd efter Jomres ändrar storlek uppladdade bilder');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Karta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Verksamhetsbeskrivning');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Kontrollera i tider');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Area aktiviteter');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Köranvisningar');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Flygplatser');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Övrig transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','politik och friskrivningar');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Address');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Besökare kan boka online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Ställ till Ja för att besökarna kan boka resurser på nätet.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','bokningar för en viss tid');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Om du ställer in Ja, då bokningar tas för en bestämd tid. Om detta är inställt på Nej, och sedan se till att "definierad ankomstdag"  satt till Ja (om du inte specifikt vill tvinga folk att komma fram på en viss dag) annars kommer du inte få många länkar i tillgången kalendern.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','bokningsperiod:');
jr_define('_JOMRES_COM_A_BOOKING','Bokning resurser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','längsta, t.ex. 3x 7 bokning perioder = 21 dagar');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Är detta en lägenhet / stuga / villa?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','t.ex. om du hyr ut ett företag, snarare än resurser i verksamheten. Om så är fallet, måste du se till att du bara har en resurs registreras mot varje verksamhet.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Recension bokning');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Bekräfta bokning');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Måndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Tisdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Onsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Torsdag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Fredag ​​');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Lördag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Söndag');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Må');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ti');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','On');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','To');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Fr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Lö');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Sö');
jr_define('_JOMRES_COM_A_AVLCAL','Tillgänglighet kal.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Teckenfärg för aktuellt datum');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Teckenfärg för dagar i displayen månad');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Teckenfärg för ej i displayen månad');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Cell bgcolour för dagar när företag / resurs är tillgänglig');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Cell bgcolour för ej på displayen månad');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Cell bgcolour för ockuperade dagar');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Cell bgcolour för preliminärt bokat resurser (bokningar som en insättning inte har tagits)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Cell bgcolour för datum i det förflutna');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Occupied / Ej tillgänglig');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Tillgänglig för bokningar');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Preliminära bokningar');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Fördefinierad ankomstdag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Endast för webbplatser som erbjuder bestämd period bokningar. Välj den dag som ankomst måste börja på.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Fast ankomstdag');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Vistelse (dagar)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Visa tillgänglighet kalender inline?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ställ till yes för att visa tillgängliga kalendrar');
jr_define('_JOMRES_FRONT_AVAILABILITY','Tillgänglighet');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Klicka på en fri dag för att visa bokningsformuläret.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Black bokningar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','New Black bokning');
jr_define('_JOMRES_FRONT_DELETEGUEST','Ta bort gäster');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gäst bort');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Kunde inte ta bort denna gäst som de har bokningar öppna mot dem med ett annat företag.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Faktisk resurser kostnad:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hej');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Tack för att göra din bokning med');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','En sammanfattning av bokningen följer:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Om du har några frågor angående denna bokning eller någon annan tjänst, så tveka inte att kontakta oss.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Vårt telefonnummer är');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Alternativt kan du kontakta oss via e-post');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Smoking');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', "Alla");
jr_define('_JOMRES_COM_CALENDAROUTPUT','Kalender utdataformat');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','Detta tillåter användaren att ändra utdataformatet av datum i Jomres');
jr_define('_JOMRES_COM_CALENDARINPUT','Kalender indataformat');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Detta tillåter användaren att ändra ingången format datum i Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','bestämd period bokningar tillåter korta pauser');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Längd på kort paus');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publicerad');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Verifieringskedja');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Tid');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Användare (användarnamn)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operation');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Visa detaljer');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrera på datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtrera på användarnamn');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filter på drift');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','ankomst avvaktan');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Ankomst idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Nuvarande Resident');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Avgångar dagens');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Avgång försenad');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Har inte kommit');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Okänd användare');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Skapad resurs');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Uppdaterad resurs');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Deleted resurs');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Skapad resourcefeature');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Uppdaterad resourcefeature');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Deleted resourcefeature');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','insatt resourcetype');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Uppdaterad resourcetype');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Deleted resourcetype');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Skapad verksamhet');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Uppdaterad verksamhet');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Raderad affärshemlighet');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Skapad prop-funktionen.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Uppdaterad prop-funktionen.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Deleted prop funktionen.');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Redigerad prop inställningar.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','År prop.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Skapad tariff');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Uppdaterad tariff');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Deleted tariff');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Lade SVC avgift.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Bokad gäst i');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Bokad GÄSTOMDÖMEN');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Angivet insättning');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Skapad gäst');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Uppdaterad gäst');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Deleted gäst');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Bokade en resurs');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Skapat en extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Uppdaterad extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Deleted en extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','År extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Angivet svart bokning.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Deleted svart bokning.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Beskrivning');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Namn');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Pris');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra uppdaterad');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Redigera post');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED',' Extra bort');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Extra admin');
jr_define('_JOMRES_COM_A_EXTRAS','Visa extra vid bokning tid?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Ställ till yes för att visa något extra som du kanske vill erbjuda gästen');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','tillval.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Svart bokning startdatum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','service återupptas datum');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Black bokningar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Det uppstod ett fel försöker boka dessa resurser är en eller flera av de resurser du valde inte gratis.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','resurser som ingår i svart bokning');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Visa blackbooking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Inga svarta bokningar till lista');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Antal stjärnor');
jr_define('_JOMRES_COM_A_SMOKING','Visa rökning alternativ?');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Ställ till ja för att visa rökning alternativet.');
jr_define('_JOMRES_COM_A_RESET','Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Bokning avbrutet');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Sök här:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Default rökning alternativet');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Valuta symbol');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','T.ex. &pound; Observera att du bör använda HTML enheter koden för önskad symbol. För en lista över dessa enheter besök <a href="http://www.w3schools.com/tags/ref_entities.asp"> W3Schools </ a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Valutakod');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Eg GBP. Detta används i e-postmeddelandet till kunden bekräftar sin bokning.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Läs mer');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Begränsa förbokning?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ställ detta ja om du vill begränsa förbokning (använd nästa fält för att sätta gränsen när det gäller dagar). Om du ställer detta till ja då om användaren försöker boka mer än n dagar i förväg och sedan sin ankomst datum kommer att återställas till dagens datum');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Days förhandsbokningar begränsade till:');
jr_define('_JOMRES_COM_A_TAX_WARNING','<font color=red> OBS: Det rekommenderas inte att du ställer båda av följande alternativ till Ja, ska du bara använda en av de två skatteberäkningar tillgängliga för dig. (Typsnitt)');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Tax');
jr_define('_JOMRES_COM_A_ROOMTAX','Resource skatt');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Designad för den amerikanska marknaden. Dessa är de resurser skattebelopp som kommer att belasta gästen. Du kan ladda en kombination och / eller fasta och procentuella siffror. Observera att dessa skatter endast tillämpas på kostnaden för resursen.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Tax fast belopp');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','skatteprocenten');
jr_define('_JOMRES_COM_A_EUROTAX','Tax');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','skatteprocenten');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Arkivera alla dokument');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','records arkiveras');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer arkiverade journaler revision');
jr_define('_JOMRES_FRONT_TARIFFS','våra tariffer');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Tariff namn');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Tariff beskrivning');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Resurs / affärer typ');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Gäller från');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Giltigt til');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Per person per natt');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Per natt');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Inte inklusive helger');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minsta dagar');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximalt antal dagar');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min människor');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Max personer');
jr_define('_JOMRES_FRONT_PREVIEW','Förhandsgranska');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Redigering på?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','text');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Ny text');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Uppdaterad egen text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Redigera Språk');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Antal hämtas från användarminnet poster:');
jr_define('_JOMRES_FRONT_PTYPE','Business typ');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','Lista typer av företag');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Redigera företagsinformation typ');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Business typ');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Business Typ Beskrivning');
jr_define('_JOMRES_COM_PTYPES_SAVED','Verksamhetstyp sparad');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Kan inte ta bort verksamhetstyp. Verksamhetstyp tilldelas en eller flera verksamheter, ber vi tilldela dem innan du försöker att ta bort');
jr_define('_JOMRES_COM_PTYPES_DELETED','Business (er) raderade');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Återstår att betala');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Inga extra tjänster för att lägga till Bill');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Insättning');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','hela beloppet');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Belopp debiteras vid bokning tid');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Använd detta alternativ för att avgöra vad som ska debiteras vid bokning tid. Välj insättning om fyndigheten ska laddas, eller hela beloppet om hela beloppet skall tas ut.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Cal månader att visa');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'I resurstillgång, hur många månader av kalendern visas?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Undertecknad på uppdrag av');
jr_define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
jr_define('_JOMRES_COM_A_CANCEL','Avbryt');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Välj de datum som du vill tillämpa de svarta bokningar för. När du har valt rätt datum, klicka på "Apply"-knappen för att återställa kontrollera tillgänglighet. <br/>
<br/>
Välj den resurs (er) som du vill ta ur drift. <br> Om en resurs inte har en bock mot den, kan den inte med i den svarta bokning tills alla utestående bokningar har slutförts / annullerats <br/>)');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center> <b> Du har loggat ut för inaktivitet </ b> Logga in och försök igen.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Anledning');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Använd betalning gateways?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ställ till yes om du vill använda online betalning gateways <b> Obs:. </ b> Detta innebär inte stänga av fyndigheten beräkningen visade under bokningsprocessen. Att inaktivera den här kan du redigera de mallar som visar resurserna och linda de delar som avser insättningar inuti en klass eller egenföretagare teckensnitt och BG färg är desamma. ');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Välj din betalningsmetod.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway aktiverad?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Ändrad plugin inställningen');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'införas plugin inställningen');
jr_define('_JOMRES_FRONT_GALLERYLINK','Visa denna verksamhet hemsida');
jr_define('_JOMRES_COM_A_GALLERYLINK','Extern länk');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Sätt en länk till din hemsida här.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','visade kreditkort');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Uppdaterad kreditkort');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Redigera kreditkort');
jr_define('_JOMRES_COM_A_EDITICON','Redigera ikonstorlek');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Batch affärer bilduppladdning');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Bilder som redan i katalogen');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Bildspel');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Visa länk till bildspel?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Visa bildspel inline?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Bildspel miniatyr mål bredd');
jr_define('_JOMRES_FRONT_SLIDESHOW','Bildspel');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br /> Tyvärr, inga bilder tillgängliga för denna verksamhet. Vänligen ladda upp några bilder med satsen upp funktionen om du vill använda bildspelet funktionen.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Visa länk till tullar?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','popups tillåtet?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Om satt till nej, då länkar som normalt skulle ha öppnats i ett pop öppnas inline istället.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Ladda bildspelsbilder');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Använd detta formulär för att ladda upp flera bilder av denna verksamhet. <br/> <b> Obs </ b> att alla bilder med samma namn skrivs över. Observera också att denna form inte ladda resurs specifika bilder eller verksamheten header image, måste du ladda upp dem från Business Admin avsnittet. <br/> <b> Obs </ b> Bilder uppladdade här kommer att skrivas till / jomres / uploadedimages / * business_uid * mapp. Om mappen inte finns, kommer det att skapas, utom naturligtvis en alternativ katalog har angetts i konfigurationen.');
jr_define('_JOMRES_A_TABS_MISC','Diverse');
jr_define('_JOMRES_A','Webbplatskonfiguration');
jr_define('_JOMRES_A_GLOBALPFEATURES','Använd globala affärer funktioner');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Ställ till Ja om du vill tvinga alla företag att endast använda funktioner för företag definieras av webmaster.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','Om du vill tilldela en bild till den här funktionen måste du först ladda upp dina bilder företag har till / jomres / uploadedimages / pfeatures / mapp.');
jr_define('_JOMRES_A_ICON','Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Välj sökningen plugin som du vill använda.');
jr_define('_JOMRES_FRONT_NORESULTS','<b> Tyvärr gjorde din sökning gav inga resultat. Ändra din sökning och försök igen </ b>');
jr_define('_JOMRES_AREYOUSURE','Är du säker på att du vill göra detta?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Boka nu!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Boka nu!');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','personnummer');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Visa tariffer inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adress');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Detaljerad information');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Klicka för resurser och tillgänglighet');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Visa tariffer information ');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Visa adress Nedanstående information länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Visa detaljerad företagsinformation under denna länk');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Visa resurser och tillgänglighet under den här länken');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Visa klassificeringsbesked under den här länken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Schablonmässiga avgifter');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Medelvärden');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Välj avgifter modell du vill använda');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','Du har två val av metoder tullar beräkningsmetoder. Den första ger "schablonbelopp" metod du att erbjuda ett antal olika taxor till gästen och hastigheten för vistelsen är densamma för hela tiden. Detta är användbart om du vill erbjuda flera olika avgifter för samma datum, t.ex. Bed and Breakfast tulltaxe-och B & B och kväll måltid taxa. Välj de genomsnitt tariff om du vill justera dina priser beroende på tidpunkten i fråga. Jomres kommer att hitta alla de taxor för varje dag i bokningen, lägg ihop dem sedan tillbaka den genomsnittliga över perioden');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Visa avresedatum ingång?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC','Ställ in denna till Nej om du inte vill visa avgång rutan datum ingång. Använd endast detta om du vet vad du gör, eftersom avresedatum i bokningar alltid kommer att sättas till dagen efter ankomst.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Beskrivning gräns');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC','Detta begränsar antalet tecken som visas i företagsuppgifterna vid utarbetandet av verksamheten beskrivning.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Används date ()-format stil?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Publicera');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','avpublicera');
jr_define('_JOMRES_A_GLOBALROOMTYPES','Använd global resurs / affärer typer');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ställ till Ja om du vill tvinga alla företag att endast använda de resursmässiga / affärer definierade typer av webmaster. Du måste ställa in denna till Ja om du tänker tillåta sökning via resurs / affärer typer.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','Om du vill tilldela en bild till denna resurs / affärer typ måste du först ladda upp dina resurs / affärer typ bilder till / images / stories / jomres / rmtypes / mapp.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Inmatningsfel bakgrundsfärg');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','standardland i bokningsformuläret');
jr_define('_JOMRES_JAVASCRIPT_', 'Poster markerade med en röd stjärna är obligatoriska.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Användare kan registrera sina företag?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Ställ till Ja om du vill att användare ska kunna registrera sina egna företag utan admin ingripande.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Ange landet och regionen i din verksamhet.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Fyll i dina detaljer.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2", "markerade objekt krävs.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Skapad verksamhet');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', "Tyvärr, du kan inte skapa en verksamhet på det här systemet. Du måste vara inloggad registrerade användare innan du kan fortsätta. ");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Skapad företag:');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','För användaren:');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Visa kalender från årets början?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Tillgången kalendern visar från början av innevarande år.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Antal tillgängliga resurser');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Tillbaka till informationen om verksamheten');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Resurs / affärer typer');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','slumpmässig sökning gräns');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Visa länkar valutakonvertering i tariff lista?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Konvertera rate');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','Tillåt användare att redigera med HTML-redigerare?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Använd detta formulär för att placera din bokning. Ändra din bokning uppgifter som ankomst-och avresedatum och siffror gästrecensioner och välj resursen (s) du behöver från listan över de tillgängliga. Klicka alla tillgängliga resurser för att lägga till dem i din bokning. När du är klar kan du lägga till några tillval du kan behöva och lämna dina adressuppgifter. När formuläret har tillräckligt med information kommer det då att ge dig en skicka-knapp, så att du kan bekräfta din bokning.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Använd detta formulär för att placera din bokning. Ändra din bokning uppgifter som ankomst-och avresedatum och siffror gäst. När du är klar kan du lägga till några tillval du kan behöva och lämna dina adressuppgifter. När formuläret har tillräckligt med information kommer det då att ge dig en skicka-knapp, så att du kan bekräfta din bokning.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','uppgifter Bokning');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Välj detaljerna i din bokning krav');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Tillgänglighet');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Välj de resurser som du behöver');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Titta här för att se om verksamheten är tillgänglig just nu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Tjänster');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', "Tjänster");
jr_define('_JOMRES_COM_PERDAY','Per natt');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Dina uppgifter');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Fyll i dina uppgifter. Observera att alla fält med en röd stjärna är obligatoriska.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Tillgängliga resurser');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Vald resurser');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','så snart som möjligt ankomstdatum är:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Per natt:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Boende');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extra:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Tax:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Rabatt:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Totalsumma (inc skatt):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','gäster');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Lägg till ditt val');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Ta bort från ditt val');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Gäst typer');
jr_define('_JOMRES_VARIANCES_TYPE','typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Vilken typ av kund, t.ex. barn åldras 5-10, eller Student');
jr_define('_JOMRES_VARIANCES_NOTES','Anteckningar');
jr_define('_JOMRES_VARIANCES_NOTES_TT','anteckningar som du kanske vill göra om detta kundtyp');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Max');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Det maximala antalet av denna kundtyp som kan väljas i bokningsformuläret');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','Är andelen');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Siffran beräknas är en procentandel av bastalet beräknats för resursen. Om detta är satt till något då siffran du anger helt enkelt adderas eller subtraheras från basen resursen värdet.');
jr_define('_JOMRES_VARIANCES_POSNEG','Lägg variansen?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Siffran beräknas läggs till eller tas bort från bastalet beräknats för resursen. Ställ in denna till Nej om du vill att detta skall vara en rabatt från basen figuren.');
jr_define('_JOMRES_VARIANCES_VARIANCE','Varians');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Mängden variansen');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Ändrad kundtyp ordning');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publicerad kundtyp');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Deleted kundtyp');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Skapad kundtyp');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Uppdaterad kundtyp');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Uppdaterad kundtyp');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Visa länk till resurser lista sida i detaljer sida?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Visa <b> bara </ b> Tillgänglighetskalender?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Slå detta till Ja för att inaktivera visning av verksamheten huvudet och detaljer, så att endast Tillgänglighetskalender kan visas i branschen detaljer avsnittet. Egentligen bara avsedd för användare uthyrning av enstaka resurs företag (t.ex. lägenheter, stugor osv).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimiintervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Den Minsta intervall i bokningsformuläret mellan ankomstdatum och avresedatum.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Bokningsformulär resurslistan show resurs nummer');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Bokningsformulär resurslistan visar resursnamn');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Bokningsformulär resurslistan visar taxa titel');
jr_define('_JOMRES_ORDER','Beställ');
jr_define('_JOMRES_REQUIREDFIELDS','krävs');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','dagar före ankomst');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Det minsta antal dagar som måste förflyta från "idag", före ankomstdatum.');
jr_define('_JOMRES_DTV','datumtyp variationer');
jr_define('_JOMRES_DTV_DOW','Veckodag');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Gästtyp standard');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Standardnummer första första Gästtyp. Om du använder gästers typer, så detta är standard nummer som den första gästen typ i bokningsformuläret ställs in på.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Registrerade användare endast kan boka på nätet?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Du måste vara en registrerad användare för att boka online. Klicka här för att registrera dig på denna webbplats.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Teckenfärg för länkar till aktuella bokningar');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Weekend gränser');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Resurs är bokad');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Svart bokning');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Round insättning upp till närmaste heltal?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Charge insättningar?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','taxebundna kostnaderna lagrade som varje vecka siffror?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Du har möjlighet att lagra taxebundna kostnaderna i antingen dagligen eller varje vecka värden. Om att lagra dem som varje vecka måste du ställa detta alternativ på Ja.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','per vecka');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fast ankomst datum recurr:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','När fasta ankomst datum väljs, antalet datum som kan visas i datum listrutan. Observera att listan med datum inte kommer att innehålla några datum om en bokning inte är möjligt på grund av tidigare bokningar, och att listan kommer faktiskt vara dubbelt så lång som det valda numret eftersom det kommer att ha ett liknande antal historiska datum (om tillgängligt)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Smoking alternativet ogiltig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Ankomstdatum felaktiga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Avresedatum felaktiga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Bokningen är för kort. Det måste finnas minst så här många dagar mellan ankomst-och avresedatum:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Din intervall är');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Guesttype variant felaktiga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Välj dina gästers nummer / typ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Du har för många i partiet för tillgängliga taxor');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Du har valt mer resurser än du har gäster, klicka på en resurs namn för att ta bort den från ditt val');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','För många gäster för de tillgängliga sängar');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Du måste välja mer resurser');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Välj en resurs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Förnamn krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Efternamn krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Hus nr / namn behövs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Street krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Town krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Region krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Postnummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Land krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Fast nummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','mobilnummer krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','E-postadress krävs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','E-postadress är inte giltig');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Kunde inte bekräfta e-domän');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','<b> Vi har lediga!!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Inga resurser valde ändå');
jr_define('_JOMRES_BOOKING_NUMBER','Bokning nej.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','OK för att boka, meddelanderutan bakgrund');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Dump mall Vars?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Ställ in detta för att möjliggöra en DHTML dump av mall variabler för varje Frontend mallfil som sidan visas. Användbart om du vill se om ett visst element finns att användas i en given mall.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','figur är andelen');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ställ in till Ja om den enda person beräkning siffra är en procentsats. Om ingen kommer den att användas som en platt summa.');
jr_define('_JOMRES_COM_LIMITROOMSLIST','Tillgängliga resurser / taxa limit');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Använd denna ingång för att begränsa antalet tillgängliga resurser och tullar som anges i bokningsformuläret. Ställ in den till noll om du inte vill begränsa aktiverat.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Inga lediga just nu!');
jr_define('_JOMRES_BOOKITNOW','');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING',' Global redigeringsläge?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Var försiktig med denna funktion. Om du väljer Ja, då redigeringsläget kommer att påverka den egna texten för alla företag i systemet för konstant du redigerar.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Använd global valuta?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Ställ till yes för att tvinga alla företag att använda samma valuta (t.ex. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global valutasymbol');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component inslaget');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ställ till Ja om komponenten är insvept så att modul och header områden inte ses');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Business Manager');
jr_define('_JOMRES_COM_WEEKENDONLY','helgerna bara');
jr_define('_JOMRES_COM_WEEKENDDAYS','dagar Weekend');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Ange din helg dagar. Tariffer som tillåta eller inte tillåta helger tar den här inställningen i beaktande när genererar resurser listan.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Välj land innan du lägger all affärsinformation');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Spara din verksamhet förändras innan du laddar upp en verksamhet bild');
jr_define('_JOMRES_TARIFFSFROM','Priser från');
jr_define('_JOMRES_SEARCH_ALL','alla');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Sök efter land');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Sök efter region');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Sök på stad');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Feature sökning.');
jr_define('_JOMRES_SEARCH_BUTTON','Sök');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Ange ett sökord i rutan och tryck på knappen.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Sökord (er):');
jr_define('_JOMRES_SEARCH_AVL_INFO','Ange din avsedda ankomst-och avresedatum och tryck på knappen för att hitta företag som har boende tillgängligt på dina valda datum.');
jr_define('_JOMRES_SEARCH_PTYPES','Lista alla företag med verksamhet typ.');
jr_define('_JOMRES_SEARCH_RTYPES','Lista alla företag genom resurs / affärer typ.');
jr_define('_JOMRES_SORTORDER_DEFAULT','Default');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Företagets namn');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Business Region');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Business Town');
jr_define('_JOMRES_SORTORDER_STARS','stjärnor');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Business lista');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','informationen om verksamheten');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Bokningsformulär');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Uppdatera dina adressuppgifter');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-kontroll resurstillgänglighet <br/> (Resource urval kommer att återställas)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-kontroll tillgänglighet');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Ändra dina tillval');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Ändra din resurs val');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Uppdaterar dina adressuppgifter');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Ledsen, ett eller flera adressfält är felaktiga.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Resource bild');
jr_define('_JOMRES_CURRENCYFORMAT','Valuta format');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Visa Managers alternativ som bilder');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Sök alternativ');
jr_define('JOMRES_COM_A_AVAILABLELOGS','tillgängliga loggar');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','Inga loggposter inspelade ännu.');
jr_define('JOMRES_COM_A_MESSAGE','meddelande');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avancerat');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','detaljstyra');
jr_define('JOMRES_COM_A_TARIFFMODE','Tariff Konfigurationsläge');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Varning: Växla mellan olika taxor typer kan resultera i förlust av data. Se anmärkning nedan om detta </​​b>.
<br/><br/>
Du har tre alternativ för hur du konfigurerar taxor. <br/>
Normalläge:. Du kommer att ha en taxa för varje resurs typ som gäller för de kommande 10 åren <br/>
Detaljstyra: Du kan ändra priset för varje dag för varje resurs / verksamhetstyp. <br/>
Avancerat: Den \"gamla\" Jomres metoden att hantera taxor. <br/>
<br/>
De olika taxor lägen kan du välja metod för att konfigurera tariffer som passar dig bäst. <br/>
Normalläge är den enklaste, men det är det enklaste att förstå eftersom det kommer Korsreferens resurser och taxor resurs / affärer typer och ger dig möjlighet att konfigurera resurser och priser på samma sida. <br/>
Micro ledning kan du variera räntorna på en daglig basis utan att behöva hantera mängder av tullar är det gjort av korsreferenser massor av olika tariffer med varandra. Detta resulterar i ett antal taxor skapas för dig som omfattar en period, men du kan inte lager tariffer över varandra. <br/>
Avancerat läge kan du skapa en resurs och koppla det till en resurs typ. Du skapar då en tariff och associera det med en resurstyp. Med denna metod är det möjligt att \"lager\" tullar över varandra, till exempel en resurs typ \"Dubbelsäng\" kan ha en taxa för bed and breakfast, och en annan för säng, Frukost och kvällsmåltid. Den avancerade metoden kräver lite mer uppmärksamhet på detaljer eftersom det är möjligt att dis-associera en resurs eller tariff från en resurs / affärer typ, eller felaktigt inställd gälla från och till datum, men det ger dig konfigurationsalternativ som de andra lägena erbjuder inte. <br/>
<br/>
Eftersom Normal och detaljstyra lägen kräver en särskild uppsättning av resurser och avgifter för tull-läget för att arbeta i systemet kan behöva återställa vissa data för att göra de nuvarande taxor konfigurationer förenliga med det nuvarande taxa redigeringsläget. <br/>
<br/>
Normal -> Avancerat. Ingen förändring. Befintliga taxor behålls. <br/>
Normal -> detaljstyra. Alla befintliga taxor tas bort. <br/>
Avancerat -> Normal. Alla befintliga taxor tas bort. <br/>
Avancerat -> detaljstyra. Alla befintliga taxor tas bort. <br/>
Detaljstyra -> Avancerat. Alla befintliga hänvisningar mellan tullarna tas bort, men de taxor själva kommer att finnas kvar. <br/>
Detaljstyra -> Normal. Alla befintliga hänvisningar och taxor tas bort <br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Visa resurser lista på detaljer sida?');
jr_define('JOMRES_PROPERTYTYPE','Business typ');
jr_define('JOMRES_COM_A_SRPONLY','SRP enbart');
jr_define('JOMRES_MAXPEOPLEINROOM','Max personer per resurs');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Max personer i bokningen');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Lägg till anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Redigera anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Ta bort anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Visa anteckningar');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Lade ny anteckning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Redigerad anmärkning');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','bort Obs');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','mina alternativ');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lista Mina bokningar');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Mina bokningar');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Visa bokning');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Favoriter Visa');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Du tillflyktsort lagt till några favoriter ännu!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Lägg till i favoriter');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Business typ');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','företag på plats');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Wise pris');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','aktiv');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Denna plugin kan du aktivera och konfigurera resurs priser dynamiskt.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','De flesta företag kommer priserna räkna resurs baserad på antalet resurser en önskad typ som finns vid en viss tidpunkt. Det ger dem möjlighet att erbjuda rabatter på en resurs / affärer typ som  upptagen under en viss period i syfte att locka till sig företag som annars skulle missas. <br/> Aktivera och konfigurera denna plugin kan du erbjuda justerbar prissättning baserad på antalet resurser en vald typ finns i verksamheten på en viss dag. <br/> dagar tröskeln definierar antalet dagar som ankomstdatum måste vara inom innan resurser priserna justeras genom denna funktion, så de procentsatser alternativ kan du konfigurera den procentandel av medlen som kan vara tillgängliga innan en viss rabatt tillämpas. Notera dock om flera resurser bokas då den nuvarande rabatten kommer att tillämpas på alla resurser och kommer inte att minska eftersom fler resurser väljs.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Tröskel (antal dagar mellan ankomst-och idag)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Andel resurser ockuperade 10% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Andel resurser ockuperade 25% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Andel resurser ockuperade 50% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Andel resurser ockuperade 75% eller mindre');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabatt%');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED','har diskonterats från');
jr_define('_JOMCOMP_WISEPRICE_TO','till');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED','Wiseprice rabatt tillämpas inte');
jr_define('JOMRES_COM_A_MAPSKEY','Google Maps API-nyckel');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Get kan få en Google Maps API nyckel från <a href="http://www.google.com/apis/maps/signup.html" target="_blank"> Google Maps </ a >. När du har matat in din karta nyckeln här kommer Jomres visa kartan i verksamheten sidan.');
jr_define('JOMRES_COM_A_USE_SSL','Använd SSL i bokningsformuläret?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','Du måste se till att du har en giltig SSL-certifikat för');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Sista minuten');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','aktiv?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Ställ till Ja om du vill erbjuda sista minuten-erbjudanden.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Tröskel');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Om en bokning görs och ankomst är bara N dagar från bokningstillfället, då rabatten kan tillämpas');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabatt');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','I procent');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','En rabatt har tillämpats på denna bokning!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','har kostnaden för vistelsen minskat med');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','% rabatt om du bokar anländer före');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Boka nu för att göra det mesta av detta erbjudande!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE','% eller mer rabatt kan vara tillgänglig om ankomstdatum är före');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose taxa info');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Ställ till Ja för att visa mer detaljerad klassificeringsbesked i verksamheten / tull popup');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimera konfigurationsalternativ');
jr_define('_JOMCOMP_AMEND','Ändra bokning - Business Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Välj New Business');
jr_define('_JOMCOMP_AMEND_HEADER','ursprungliga kontraktet:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','deposition betalas');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Deposition ej betald');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Åsidosätt Totalt');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Åsidosätt Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Avbryt');
jr_define('_JRPORTAL_CPANEL','JRPortal Kontrollpanelen');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default kommissionen rate');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Välj den kurs som standard provision som kommer att tillämpas på ett företag i händelse av att en annan provisionssats inte annars är inställd.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','Lista provision');
jr_define('_JRPORTAL_CPANEL_PATETITLE','provisionssatser');
jr_define('_JRPORTAL_CRATE_TITLE','Titel');
jr_define('_JRPORTAL_CRATE_TYPE','typ');
jr_define('_JRPORTAL_CRATE_VALUE','missionsbefallningen rate');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Valutakod');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','Businesses List');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Företagets namn');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Business adress');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','företag som bakgrundsfärg är röd ännu inte har haft en provision som tillämpas på dem.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statistics');
jr_define('_JRPORTAL_STATS_STATTYPE','Statistik för:');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Businesses - klick');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','företag View');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','antal bokningar');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Värdet av bokningar');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','kommissionens uppskattning');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','kommissionen Betygsätt');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Lista bokningar');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','FO');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Gäst id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Faktura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Boka totalt');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Kontraktsnummer');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Valuta-kod');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Skapad');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Arkiverade');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Datum arkiveras');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Lägg i nBill');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager till faktura');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','associerad verksamhet (om tillämpligt)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','värde');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Beskrivning');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "framgångsrikt införd fakturering objekt i");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Visa order");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Misslyckades med att sätta fakturering post i");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Fel, du har inte ange ett värde för räkningen");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Du kan ha affärer typspecifika språkfiler genom att ställa in beskrivningen till namnet på en undermapp, t.ex. "yachtbrokerage" och kopiera ett språk fil till den undermappen. Du kan sedan ändra det språket filen för denna verksamhet typ så resurser blir till exempel DVD, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Du kan inte radera denna verksamhet eftersom det är det enda företag som du har tillgång till. Om du vill inaktivera det, använd icke-publicera funktion i verktygsfältet.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Om detta är en demo installation och du tänker uppgradera till Jomres Solo (en verksamhet endast gräns) så ska du skapa ett nytt företag först, sedan ta bort den här innan du ändrar din licensnyckel till Solo licensnyckel att du kommer att tilldelas på köpet.');
jr_define('_JOMRES_COM_EMAILERRORS','E fel loggmeddelanden?');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', "Ställ in denna till Ja om du vill kopiera jomres.net automatiskt när ett fel loggmeddelande skapas. Detta tillåter oss att vara proaktiva i vårt sätt att hantera eventuella problem, förhoppningsvis lösa eventuella problem innan du är ens medvetna om dem. Observera att denna funktion inaktiveras på 'localhost'. ");
jr_define('_JOMRES_COM_ISTHISANMRP', "Är denna verksamhet ett hotell / bed and breakfast / pensionat / pension? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', "Konfigurationsalternativ varierar beroende på om du hyr ut resurser i ett företag, eller själva företaget. Välj MRP om du erbjuder resurser, väljer SRP om du erbjuder hela verksamheten. ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', "Använd Jomres e-postadress checker? ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Upprätthåller en striktare kontroll av skickade e-postmeddelanden. Några säkra webbservrar kommer att kasta en 500 internt fel om du försöker skicka e-post till en icke-befintliga e-postadress. Slå detta på tillåter oss att använda checkdnsrr funktioner i PHP innan du försöker skicka e-post, förebygga dessa 500 fel. ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Boende Totalt");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Natt (er) på');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "per resurs");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Tjänster Totalt (inkl moms)");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', "Prisöversikt");
jr_define('_JOMRES_CONFIRMATION_ALERT', "Läs och godkänn");
jr_define('_JOMRES_CONFIRMATION_HEADER', "En sammanfattning av din bokning visas nedan. <br /> att göra några ändringar, klicka på Ändra bokning knappen. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', "Om du behöver ändra någon av ovanstående information vänligen klicka här");
jr_define('_JOMRES_CONFIRMATION_AMEND', "Ändra bokning");
jr_define('_JOMRES_CONFIRMATION_SPECIALS', "Ange speciella önskemål i rutan nedan.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Jag bekräftar att ovanstående uppgifter är korrekta och godkänner");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "per person per natt");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', "Standard språkfil");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Välj den fil standardspråk som Jomres bör använda om språket inte har fastställts av Joomfish.");
if (!defined('_PN_OF'))
	jr_define('_PN_OF','of');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Föregående');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Nästa');
if (!defined('_PN_END'))
	jr_define('_PN_END','Slut');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Resultat');

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Ange det meddelande du vill skicka till');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact Hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Business förfrågan från');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Tack för din förfrågan, ditt meddelande har skickats till företaget kontakter e-postadress, och kopieras till din egen adress för din bokföring. De kommer att svara dig så snart som möjligt med deras svar.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING','om');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Skriv in de tecken du ser i rutan');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Jag kan inte läsa tecknen. Generera en');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Skicka');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','ny bild');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Förfrågan');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Välj din önskade boende från listan nedan genom att klicka på resursen.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min resurser som redan valts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','kan Minsta antal resurser som redan valts i bokning före tull / resurstyp combo erbjudas. Kan du ha rabatterade avgifter när mer än N resurser redan valts.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max resurser som redan valts');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','är maximalt antal resurser som redan valts i bokning före tull / resurs combo inte längre erbjuds. Gör att du kan sluta erbjuda denna resurs typ / taxa kombination när N resurser har valts i bokningsformuläret.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Notera att Ensamstående tillskott som här inte kommer att användas om enskild person Kosttillskott är inställda på Ja i allmänna konfigurationen. Inställningarna här är ett alternativ till att ha schablonbelopp Ensamstående Suppliements, inte ett tillägg till schablonbeloppet SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', "Tillgänglig");
jr_define('_JOMRES_AVLCAL_QUARTER', "Vissa bokningar");
jr_define('_JOMRES_AVLCAL_HALF', "Half bokad");
jr_define('_JOMRES_AVLCAL_THREEQUARTER', "Mestadels bokad");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED','Fullbokad');
jr_define('_JOMRES_COM_SEF_URL_PREFIX','URL-prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Detta är den första posten visas efter domänen - Byt till vad du behöver - Om du vill använda den sedan tomt ut');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Visa företag uppgift alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking uppgift alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','sökuppdrag alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Lägg land till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Lägg region till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Lägg stad till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Lägg verksamhetstyp till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Lägg firma till URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Bifoga FO till firma');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Om företagsnamnet är inställt på Nej då id inte kommer att användas. Om satt till ja då url kommer att se ut fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Sök URL Struktur - Lägg land till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Sök URL Struktur - Standardland');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Om alla dina företag är i ett land kommer du inte att ha land i sökning - ange ett standardland här om du vill visa ett land');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Sök URL Struktur - Lägg region till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Sök URL Struktur - Standard regionen');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Om alla dina företag är i en region kommer du inte att ha regionen i sökandet - ange en standard område här om du vill visa en region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Sök URL Struktur - Lägg stad till URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Sök URL Struktur - Standard stad');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Sök URL Struktur - Business typ');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Sök URL Struktur - Standard verksamhetstyp');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Används i URL om sökning är för alla typer av företag');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Joomla 1,5 bara. Antingen she404sef är inte installerad, eller om du tillflyktsort ännu kopieras ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS. "Jomres".JRDS. "Bibliotek".JRDS. "Jomres".JRDS. "Cms_specific".JRDS. "Joomla15".JRDS. "Other_component_files".JRDS. "Sh404sef".JRDS. "Com_jomres.php till".JOMRESCONFIG_ABSOLUTE_PATH.JRDS. "Komponenter".JRDS. "Com_sh404sef".JRDS. "Sef_ext. När du har installerat sh404sef och / eller kopieras filen över, då du kommer att kunna konfigurera SEF webbadresser härifrån. <br/> Observera, om du även använder Joomfish v2 kan du behöva se till att GZIP är avstängd i global konfiguration.');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Automatisk igenkänning Javascript kalender språk');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Aktivera automatisk identifiering av språk för javascript kalendrar? Om vi ​​inte kan autodetektera språket då kommer vi att falla tillbaka till det språk konfigurerats nedan');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per vecka');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','per dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','per bokning');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per bokning');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','per person och dag');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','per person och vecka');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dagar (min dagar)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dagar X resurser utvalda');
jr_define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent register');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normalt Jomres plugin registret byggs automatiskt när du visar plugin manager och lägga till eller ta bort en plugin, men det är möjligt att du inte kan använda dessa funktioner av någon anledning, därför kan du använda den här funktionen för att återuppbygga registret manuellt. Om du har tillgång till plugin Manager och uppgraderingar har så är det inte troligt att du kommer att behöva använda denna funktion. Du kommer att behöva bygga om plugin registret när du lägger till en ny mini-komponenten och inte använda plugin Manager lägga till den. ");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','kansli ombyggd framgångsrikt');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Det uppstod ett fel med ombyggnad registret av minicomponents. Du bör kontrollera din Jomres felloggen för att se om det finns ett register över vad som utlöst felet.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Sök efter prisklass.');
jr_define('JOMRES_WORD_SAVING','Saving ...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Använd Composite detaljer?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3,3 introducerar de sammansatta detaljer där alla detaljer utgången skickas till en mallfil (composite_business_details.html). Om du inte vill använda denna ställa in den på Nej (endast befintliga användare förväntas ange Nej, kommer nya användare förmodligen vill lämna det inställt på Ja)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', 'Detta är en lista över alla användare i systemet. Icke företagsledare har en gäst ikon kommer företagsledare att ha mottagning / Business Manager / Super affärer ikoner chef. <br/> När Jomres först installeras admin läggs automatiskt till som ett företag chef och anses vara en behörig användare. <br/> Icke super företagsledare måste tilldelas minst en verksamhet annars kommer de att se ett felmeddelande när de försöker logga in och använda Jomres. <br/> När en användare är auktoriserad kan du redigera sina profiler, tilldela dem till företag eller ge dem super rättigheter business manager. <br/> att godkänna en användare klickar på det röda krysset bredvid namnet. Att unauthrorise dem genom att klicka på grön bock. <br/> Att tilldela användare till specifika verksamheter endast, eller ge dem super rättigheter business manager, tillåta dem sedan på Redigera ikonen (som endast är synlig när de godkänts). Användare som registrerade sin verksamhet (er) kommer själva automatiskt tilldelas dessa företag. Super verksamhetschefer har automatiskt rätt över alla företag, och kommer att se alla konfigurationsalternativ även om den minimerade konfigurationen är inställt i Site Config.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Här kan du tilldela en chef till vissa företag. Se till, om de \ "inte åter kommer att bli en super affärschef, att de har rätt till minst en verksamhet annars kommer de att se ett felmeddelande när de loggar in För att ge en receptionist / business manager rättigheter till endast vissa företag, se till att Super Business Manager dropdown inte är inställd på Ja.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Du tillflyktsort gjort några bokningar ännu!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Business typ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Redigera ditt företag typ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Välj ditt företag typ');
jr_define('_JOMRES_COM_LOGGING','Jomres skogsavverkning');
jr_define('_JOMRES_COM_LOGGING_WARNING','Dessa alternativ kan du aktivera / inaktivera loggning i Jomres. Felloggning är alltid aktiverad, men andra loggar som bokning, Gateway, System och Begär loggar kan slås på och av. Du rekommenderas att <b> förmågan att möjliggöra detta loggning tillhandahålls enbart som ett sätt att göra felsökning enklare, men det innebär en stor säkerhetsrisk </ b> som det är lätt för utomstående användare att se dina loggar utan tillstånd därför du rekommenderas att lämna den avstängd för det mesta. Om du har aktiverat loggning, sedan när du har inaktiverat det, bör du också se till att <i> ".JOMRESPATH_BASE.JRDS. "Temp".JRDS. "</ I> mappen inte innehåller några gamla loggfiler. Observera att möjliggör loggning också signifikant kommer att bromsa din sytem ner som den samlar en hel del information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Bokningsformulär loggning (bokningsmotor loggar)');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Gateway loggar (t.ex. PayPal etc.)');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Begär Log (alla inkommande server förfrågningar)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log)');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (främst för inspelning provision etc)');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Din förfrågan ...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Bokningsformulär resurslistan visar resurstyp bild');
jr_define('_JOMRES_COM_A_LISTLIMIT','Business Lista gräns');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','Antalet företag att visa på en sida efter en sökning');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','integrerad sökfunktion');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','De Jomres integrerade sökfunktionen kan dina användare söka igenom Jomres företag enligt en uppsättning funktioner. Om du redan har använt sökfunktionerna i Jomres i Joomla kommer du att känna med dessa inställningar. <br/> Denna funktion gör att vi kan erbjuda sökning hantering inom Jomres för de användare som vill använda Joomla söka moduler, eller för andra CMS-användare soms CMS spelar har det egna Jomres sök moduler. <br/> kom bara ihåg att om du väljer att söka efter något via en länk (dvs inte en dropdown) än andra sökalternativ kommer inte att genomföras, bara den del som motsvarar den länken som du klickade. <br/> Observera att som standard layout av denna integrerad sökning mycket vackra. Det eftersom mallfilen som utför layouten måste innehålla alla möjliga alternativ, av vilka några är oförenliga. För att förbättra layouten och uppnå det utseende du önskar, måste du redigera <b> srch.html </ b> i mappen <b> ".JOMRES_TEMPLATEPATH_FRONTEND "</ b>');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Aktivera denna funktion?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Om denna funktion är aktiverad, då någon uppmaning till Jomres som visar verksamheten listan kommer att innebära att sökalternativ också visas.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Använd kolumner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Varje sökalternativ som du har definierat som länktyp (där relevant) visas som kolumner (IE br sätta på änden av länken)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Feature kolumner");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "Antalet funktionen ikoner som kan visas innan ett br sätts för att gå till nästa rad.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Sök område genom att välja combo dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Erbjud en sökning dropdown att filtrera genom länder / regioner / städer. Om du ska använda den här funktionen så är du bäst av att inte använda regionen / staden söker nedan. ");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Sök med firma");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Visa sök via företagsnamn ingång.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Visa som dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "ange Nej för att visa listan som länkar");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Sök efter stad / region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Visa sökning genom regionen ingång");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Visa som dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "ange Nej för att visa listan som länkar");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Sök efter verksamhetstyp");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Visa sökning genom verksamheten ingång av typen");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Visa som dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "ange Nej för att visa listan som länkar");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Sök efter resurstyp");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Visa sökning genom resurstyp ingång");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Visa som dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "ange Nej för att visa listan som länkar");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES','Sök efter funktioner');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Visa sök via funktionen input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Visa som dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "ange Nej för att visa listan som verktygstips bilder och kryssrutor");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Sök efter beskrivningen");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Visa sökning genom beskrivningen ingång");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Sök efter tillgänglighet");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Visa sök via tillgänglighet ingång");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Sök efter prisklasser");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Visa sökningen efter pris varierar ingång");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Prisklass steg");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres kommer att titta på alla värden i tarifferna sedan räkna ut en serie prisklasser baserat på steg värdesätter du anger här.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Som standard, om ett företag inte har valts i Jomres det kommer att utföra en sökning. Om denna sökning inte utlöstes av en sökning modul så att sökning kommer att ge slumpmässiga resultat (avsiktligt). Detta alternativ ger dig möjlighet att begränsa antalet returer i den slumpmässiga sökningen.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron jobbinställningar och loggar');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron jobbinformation. Den pseudocron funktionalitet behövs av fakturering och kommissionens hantering.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','installerat cron minicomponents. För att köra en enskild cron jobb använd länkarna nedan angivna. Observera att cron-jobb inte ger någon effekt så att du inte ser någon information på sidan. Istället, se jobbloggen nedan.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','metod');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', "Om du inte har tillgång till cron-jobb, ställa in detta på Minicomponent, annars skapa ett cron-jobb och berätta det att köra <br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Visa loggar i webbläsaren');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','fungerar bara om metoden är inställd på Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','loggning aktiverad');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ställ in denna till Ja för att logga är aktiverat. Resultaten av stockarna matas ut nedan.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','detaljerad loggning');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Massor av loggning utgång');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','mall Redigering');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','Denna funktion gör det möjligt för oss att redigera Jomres frontend mallar på servern, spara resultaten i databasen. Avancerad funktion, vara försiktig med det.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Mallnamn');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','mall har anpassats?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Egna fält');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Här kan du definiera enkla anpassade fält som ska visas i bokningsformuläret.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fältnamn (utan mellanslag)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Standardvärde');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Beskrivning');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','krävs');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Max antal');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Om Maximal kvantitet är satt till större än 1 så gästerna kommer att erbjudas en dropdown att välja quantiy de extrafunktioner som de behöver.');
jr_define('_JRPORTAL_INVOICES_ISSUE','fråga fakturor');
jr_define('_JRPORTAL_TAXRATES_TITLE',"Skattesatser");
jr_define('_JRPORTAL_TAXRATES_CODE',"skattelagen");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Betygsätt beskrivning");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Du kan inte ta bort denna skattesats.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Betygsätt");
jr_define('_JRPORTAL_INVOICES_TITLE',"Fakturor");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"obetalda");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Avbruten");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"I väntan");
jr_define('_JRPORTAL_INVOICES_USER',"Användare");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Raised");
jr_define('_JRPORTAL_INVOICES_DUE',"Tack");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Teckning");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding totalt");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Återkommande totalt");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Återkommande frekvens");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Återkommande dag i månaden");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Valutakod");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"artiklar");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Namn");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Beskrivning");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Startkurs");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Antal");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Första rabatt");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Totalt");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Återkommande pris");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Återkommande mängd");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Återkommande rabatt");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Återkommande totalt");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"skattelagen");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax beskrivning");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Skattesats");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal inställningar");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Valutakod (t.ex. euro)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Använd sandlåda?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"ditt Paypal e-postadress");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Om du vill använda paypal måste du gå till ditt PayPal-konto och avaktivera Autoreturn. (Profile / Hemsida Betalnings Inställningar), och ställ IPN (profil / Instant Payment Anmälan Inställningar) till På URL: <br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "Denna faktura är nu betalas. Klicka på knappen för att föras till paypal. ");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Åsidosätt standard Jomres gateway inställningar?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Om paypal inställningar åsidosätter alternativet är inställt på Ja och sedan flera saker hända: Allmän konfiguration inte längre visar några gateway-inställningar och två, när en bokning görs de inställningar som används här används så att betalningen skickas till den adress som anges här, inte som tidigare konfigurerats i allmänna konfigurationen. ");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', "Visa mina fakturor");
jr_define('_JRPORTAL_COUPONS_TITLE', "Rabattkuponger");
jr_define('_JRPORTAL_COUPONS_DESC', "rabatt koder kan genereras och skickas till gäster som ett incitament för att göra bokningar. Giltig från och till datum avser de datum som en bokning kan göras på, inte datum för bokningen själv. ");
jr_define('_JRPORTAL_COUPONS_CODE', "Kupongkod");
jr_define('_JRPORTAL_COUPONS_VALIDFROM', "Gäller från");
jr_define('_JRPORTAL_COUPONS_VALIDTO', "Giltig till");
jr_define('_JRPORTAL_COUPONS_AMOUNT', "rabatt mängd");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', "rabatt är en procentsats");
jr_define('_JRPORTAL_COUPONS_ROOMONLY', "Resurs bara");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', "är rabatt endast tillämpas på kostnaden för resursen. Om nej, så rabatten appliceras på hela kostnaden för bokningen. ");
jr_define('_JRPORTAL_COUPONS_SQLERROR', "SQL fel när du försöker ta bort / sätta en kupong");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Om du har en kupongkod, ange den i rutan och klicka på" Spara kupong "för att spara kupong detaljer mot din bokning.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Spara kupong');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Kupong sparas mot bokning');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Kupong nr finns ej');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','kupongen värde');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Bokning diskonteras. Kupongkod / rabatt värde / kupong inställningar:');
jr_define('_JOMRES_COM_CACHING','Använd Jomres cachelagring funktion?');
jr_define('_JOMRES_COM_CACHING_DESC','ange Nej för att inaktivera Jomres cachelagring funktionen.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Välj språk');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Välj de språkalternativ som ska visas på det språk växeln rullgardinsmenyn.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Visa språkval rullgardinsmenyn?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','fullbokad och Inställda bokningar');
jr_define('_JRPORTAL_NEWUSER_DEAR', "Kära");
jr_define('_JRPORTAL_NEWUSER_THANKYOU', "Tack för att du registrerat");
jr_define('_JRPORTAL_NEWUSER_USERNAME', "Ditt användarnamn är:");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', "Ditt lösenord är:");
jr_define('_JRPORTAL_NEWUSER_LOG_IN', "Logga in för att se dina bokningar");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kupong sparad');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kupong bort');
jr_define('_JOMRES_COM_GROWL','Använd Jomres meddelanden');
jr_define('_JOMRES_COM_GROWL_DESC','Många chef uppdateringar ger återkoppling i form av ett javascript meddelande när sidan laddas om, använda det här alternativet för att aktivera / inaktivera den funktionen.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', "Användarnamn");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Lösenord");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', "API-id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Anmälan mobilnummer");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Använd formatet 'Landskod, mobilnummer'. Till exempel ett brittiskt mobilnummer skulle vara något i stil med '447979123456 '. Lämna det här fältet tomt om du inte vill att några e-postmeddelanden som skickas till din mobiltelefon. ");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Självklart kan du inte använda/testa detta gateway från localhost, måste du göra det på en 'live'-server. </ b>
<br/>
<br/>
För att kunna använda Clickatell gatewayen behöver du ett Clickatell konto och minst en registrerad anslutning (API sub-produkt instans) mellan din applikation och vårt gateway. Varje anslutning
metod är känd som en sub-produkt. Så här gör du: <br/>
<br/>
<b> Steg 1 - registrera dig för ett Clickatell konto </ b> <br/>
Om du inte redan har ett Clickatell konto måste du registrera dig för ett enligt nedan. Annars går du vidare till steg 2. <br/>
* Gå till http://www.clickatell.com/products/sms_gateway.php och välja lämplig API subproduct (anslutningsmetod) du vill använda (Clickatell Central (API)) <br/>
* Klicka på registrering hyperlänken. <br/>
* Fyll i registreringsformuläret. <br/>
Efter att framgångsrikt skicka formuläret kommer du automatiskt att loggas in på ditt nya konto och fördes till en sida där du kan lägga din valda API-anslutning. <br/>
<b> Steg 2 - lägg en registrerad API-anslutning (sub-produkt) </b> <br/>
Om du inte redan är inloggad på ditt konto måste du göra det på http://www.clickatell.com/login.php <br/>
* Välj \"Hantera mina produkter\" från huvudmenyn. <br/>
* Välj API anslutningstyp du vill använda (HTTP API) från rullgardinsmenyn ('Lägg Connection). <br/>
* Fyll i formuläret. Se till att du anger den låsta IP (IP denna server), som Återuppringning på HTTP POST. Du måste ställa in IP återuppringning till ".get_showtime('live_site')."/index.php?Alternativet = com_jomres & uppgiften = sms_clickatell_callback och en användar-ID och lösenord. <br/>
Om du registrerar fler än ett API anslutning måste beskrivningen du anger för varje vara unikt - du kan inte ha flera API: er med samma namn <br/>.
Efter att framgångsrikt skicka formuläret kommer dina autentisering uppgifter visas, inklusive varje anslutning unika API-ID (api_id). Dessa autentisering uppgifter krävs vid anslutning till Clickatell porten för att skicka ett meddelande. <br/>
<br/>
Använd ditt användarnamn, lösenord och api_id att fylla fälten ovan. <br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Bokningsformulär resurs Listan funktionshindrade tillgång');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Bokningsformulär resurs lista Visa max folket');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Observera att resurs listade priser är uppskattningar och fullt pris för bokningen kommer inte att räknas förrän du har lagt till en resurs eller resurser till ditt val.");
jr_define('_JOMRES_LASTEDITED_DB','Databas mall Senast redigerad');
jr_define('_JOMRES_LASTEDITED_DISK','Disk mall Senast redigerad');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Databas mall varning');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Databas mall kan vara föråldrad');
jr_define('_JOMRES_LASTEDITED_WARNING','Om det finns en ikon mot en mall, sedan Jomres har upptäckt att mallen lagras i databasen <strong> <i> May </ i> </ strong> att vara äldre än så lagras på hårddisken, i vilket fall är det möjligt att mallen har uppdaterats i en nyare version av Jomres. Om så är fallet, så är det möjligt att din mall inte kan dra nytta av en ny funktion i Jomres eller att befintliga funktioner fungerar inte längre som förväntat, och du bör jämföra filen på disk till dina anpassningar så att du inte miste om nya funktioner.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Prenumeration paket");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Namn");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Beskrivning");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Publicerad");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frequency");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Prövotid");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Trial mängd");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "hela beloppet");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Resurser gräns"); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Business gräns");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frekvens: M / Q / B / A månad / kvartal / Bianually / Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Prövotid: Heltal ingång, 0 (noll) för att inte ställa, 1 för en månad, 2 för två månader etc.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Prenumerera");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Ange / uppdatera din abonnentinformation. Observera att alla fält är obligatoriska. ");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Förnamn");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME', "Efternamn");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS', "Adress");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY', "Land");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE', "Postnummer");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Du behöver ett giltigt abonnemang för att skapa nya företag. Vid denna tidpunkt, har du köpt abonnemang för ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', "<i> publicerade </ i> affärer (er). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Du kan öka antalet företag kan du skapa med <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'> köpa fler abonnemang paket här </ a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', "Du har använt");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', "business slots. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Att se en lista över aktuella företag klickar <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>ckages'>här</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Att se en lista över de aktuella abonnemang paket som finns tillgängliga, klicka på <<a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>här</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Tyvärr kan du inte publicera denna verksamhet eftersom du har nått din högsta antalet tillgängliga affärer platser.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED'," Tack för att skapa en prenumeration på lista ditt företag på vår server. När din faktura är markerad som betald (det kan finnas en fördröjning beroende på Paypal) du <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>klicka här för att fortsätta skapa ditt företag (s) </a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Vi är ledsen att du inte har valt att prenumerera på vår tjänst. Vänligen meddela oss om det finns något sätt som vi kan hjälpa dig vidare ");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH', "Vi är ledsna, men du har träffat gränsen för antalet företag som du kan ha publicerats på detta system åt gången. Du kan öka antalet företag som du kan publicera på <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>köpa fler abonnemang paket här </a>.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', "Använd funktionen prenumeration hantering");
jr_define('_JOMRES_COM_NEWUSER','Skapa ny användare på bokning');
jr_define('_JOMRES_COM_NEWUSER_DESC','Skapa nytt användarkonto på oregistrerad användare bokning. (Joomla endast)');
jr_define('_JOMRES_CLICKTOREGISTER','Klicka här för att registrera ditt företag');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Aktiva prenumerationer");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Gateway prenumeration id");
jr_define('_JRPORTAL_NEWUSER_SUBJECT', "Tack för din bokning - nya användaruppgifter följa");
jr_define('_JOMRES_LATLONG_DESC', "Använd musen för att flytta runt på kartan och dra pekaren till den plats på din fastighet för att ställa in latitud och longitud.");
jr_define('_JOMRES_CONTROLPANEL','Kontrollpanel');
jr_define('_JOMRES_COM_FAUXHEADERS','Utgång Jomres javascript rubriker i kroppen av html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Ställ till Ja om du har problem med MooTools och Jomres jQuery motstridiga i IE. Detta tvingar Jomres att mata ut javascript kallar i kroppen av sidan istället för HEAD område, som Valid HTML, men det verkar lösa probems med jQuery och MooTools står i konflikt med varandra.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Visa faktura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Visa fakturor');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Lägg min verksamhet till denna webbplats');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Varning:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Du kan ha en gratis paket på systemet om du vill, genom att skapa ett paket och ställa både rättegången beloppet och det fulla beloppet till 0,00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Tyvärr, men det paketet ID inte känns igen.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Tyvärr, du redan prenumererar på ett gratis paket kan du prenumerera inte på det paketet igen.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', "Status <b> 0: </ b> i avvaktan på utbetalning <b> 1: </ b> Skapad <b> 2: </ b> Inställd <b> 3: </ b> Slut Termen ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Mitt Konto");
jr_define('_JOMRES_COM_YOURBUSINESS','Din detaljer');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','firma');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','momsregistreringsnummer');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Byggnummer');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red> OBS! Följande skattesatser är designade för att användas av den amerikanska marknaden. Om du vill använda ett schablonbelopp skatt (t.ex. moms) för ditt boende, välj en skattesats på alternativet ovan.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Faktura nr:');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Välj de datum som du vill tillämpa den svarta bokning för. När du har valt rätt datum, klicka på "Apply"-knappen för att återställa kontrollera tillgänglighet. <br/>
<br/>
Om företaget har en eller flera bokningar för den valda perioden, kommer du inte att kunna boka det tills de andra bokningar / svarta bokningar, har annullerats / fullbokad.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Ledsen, du kan inte svarta bok denna verksamhet för dessa datum.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Du kan Blackbook denna verksamhet för dessa datum.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Ditt företag är konfigurerad för att ladda per person och natt, men du behöver inte ha några gästers typer skapats eller publicerats, vänligen skapa och publicera en eller flera gästers typer.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Du har några tariffer konfigurerats ännu, kommer du inte att kunna ta några bokningar för ditt företag.');
jr_define('_JOMRES_EDITINGMODE_ON','Redigera läge på');
jr_define('_JOMRES_EDITINGMODE_OFF','Redigera-läget');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Ladda variabla insättningar?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variabel insättningar kan du definiera om du vill ta ut hela beloppet om bokningen ankomst är inom n dagar från "idag". Ställ in detta alternativ till Yes för att aktivera funktionen och ange antalet dagar nedan, så till exempel om ankomstdagen är inom 60 dagar, sedan det insatta beloppet debiteras blir hela beloppet, annars beloppet kommer att baseras på depositionen alternativ konfigurerade ovan.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Antalet dagar inom vilken det fulla beloppet kommer att debiteras som en deposition.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Skicka e-post Kontakt ägare till alternativ adress?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Ställ in detta alternativ på Ja om du vill Kontakt Ägare e skickas till nedanstående ingången. Lämna det inställt på Nej för att skicka e-post till den e-postadress som anges i branschen konfigurationen området.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternativ adress för e-post Kontakt ägare.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','har e-postbekräftelse har skickats. Du kan stänga det här fönstret nu.');
jr_define('_JOMRES_REALESTATE_TITLE','Fastigheter lista');
jr_define('_JOMRES_REALESTATE_YESNO','Är detta företag en till salu notering?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Välj Ja om du säljer verksamheten, välj Nej om det är en lista där du kommer att erbjuda kort sikt lägenheter och kommer att använda det här systemet för att ta bokningar.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID','Markera fakturan som betald');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Faktura märkt betalas');
jr_define('_JOMRES_APIKEY_REMAKE','Gör ny API-nyckel');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Använd Google för första översättningar?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','Den här funktionen är ny och experimentell, så använd på egen risk. Syftet med funktionen är att söka på Google översättning verktyg för att automatiskt ställa in översättningar för en given verksamhet. Observera att den här funktionen sanerar all indata, så om du använder en HTML-editor för att formatera dina detaljer, då detta kommer att bryta den formatering <br/> ');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Är det en enda verksamhet installationen?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Om detta alternativ är inställt på Ja, då frontend syn på Jomres till icke-auktoriserade användare förenklas betydligt. Default samtal till Jomres från ett menyalternativ, i stället för att få en lista med företag, bara tar gästen till bokningsformuläret för den första verksamheten i systemet. Företagsledare kommer inte heller att se se detaljer Visa-knappen eller Lägg till nya affärer knappen. Perfekt om du bara vill lista en verksamhet och ta bokningar för den <br/>');
jr_define('_JOMRES_HTMP_PURIFIER','Använd HTML luftrenare funktionalitet?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Slå detta på att ge Jomres att använda html renaren biblioteket (http://htmlpurifier.org/). Biblioteket används som ett extra lager av säkerhet när man hanterar in-och utdata, och det är rekommenderas att du lämnar det aktiverat, men det kommer att använda mer minne.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','slutbetalning');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balans');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Notera använder du redigeringsläget med Global aktiverat redigeringsläget. Detta är bra om du förstår vad Global redigeringsläget innebär, men om du inte  du kan orsaka dig problem. Om du är osäker på om du ska använda Jomres på detta sätt, se <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank"> redigeringsläget manuell </ a> För mer information om detta ämne.');
jr_define('_JOMRES_SUPPORTKEY','Stöd nyckel');
jr_define('_JOMRES_SUPPORTKEY_DESC','Ditt stöd licensnyckel nummer (även känd som ditt licensnummer). Du behöver en up-to-date licens för att kunna ladda ned insticksprogram för Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','personlig rabatt');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Begränsa företagsregistrering till ett land?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Du kan se till att företag registreringar är begränsade till ett enda land genom att du väljer Ja och sätta landet i följande alternativ. ');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','företag finns i detta land:');
jr_define('_JOMRES_JQUERYTHEME','Jquery temat');
jr_define('_JOMRES_JQUERYTHEME_DESC','Välj en jQuery tema som ska användas för informationen om verksamheten flikarna.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Vi är ledsna, men att verksamheten finns för närvarande inte.');
jr_define('_JOMRES_REVIEWS','Recensioner');
jr_define('_JOMRES_REVIEWS_TITLE','Recensionens titel');
jr_define('_JOMRES_REVIEWS_DATE','publiceras på');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Det finns inga recensioner för denna verksamhet ännu.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Vill du vara först med att recensera den här verksamheten?');
jr_define('_JOMRES_REVIEWS_IAGREE','Jag håller med att det här omdömet');
jr_define('_JOMRES_REVIEWS_IDISAGREE','Jag håller inte med det här omdömet');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Betyg:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Totalt antal röster:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Lägg till en ny recension.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Du måste vara inloggad för att skriva en recension.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Berätta vad du tycker om denna verksamhet:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','den här personen berättade:');
jr_define('_JOMRES_REVIEWS_PROS','Fördelar:');
jr_define('_JOMRES_REVIEWS_CONS','Nackdelar:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Uppladdad den:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Du har redan granskat denna verksamhet kan du skicka en översyn om det.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Ledsen, men du får inte lägga recensioner på denna webbplats.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Klicka för att visa recensioner');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW','gästerna håller med denna översyn.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW','gästerna håller inte med om denna översyn.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR','gäst instämmer i denna översyn.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','gästen inte håller med denna översyn.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Tack för att du delar din åsikt om denna översyn.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Tack, men du har redan delat ditt omdöme om översyn.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Se till att alla fält har fyllts.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Sammanfatta din recension genom att ange en titel');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Ange ett mer komplett översyn i rutan Beskrivning');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Ange goda delarna av din upplevelse av att vara gäst på denna verksamhet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Ange alla negativa tankar du kan ha på din erfarenhet');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Bedöm hostpitality du fått från personalen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Var god din åsikt verksamheten \ s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Ange din åsikt av hygienen i verksamheten');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Var god boendet. Var det bekvämt eller nedsuttna');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Ange din åsikt om huruvida det var värde för pengarna');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Var god utvärdera den service');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Testsammanfattning');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Din erfarenhet närmare');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Tack för att du skickar in din recension.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Tack för att du skickar in din recension. Den kommer att publiceras inom kort av en av våra hårt arbetande moderatorer.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Använd Jomres recension funktionalitet?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','publicera automatiskt recensioner?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Om du ställer in Nej måste du manuellt publicera recensioner');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set recensioner för att testa läget?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalt företagsledare inte kan granska företagen. Med testläge aktiverat kan de. Naturligtvis är detta inte perfekt i en produktionsmiljö. ');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Detta är en lista över alla företag. Om du vill se en verksamhet recensioner, klicka på denna verksamhet. Därifrån kommer du att kunna att publicera eller ta bort en recension.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Antal opublicerade recensioner');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Totalt antal recensioner');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publicera / Unpublish recension');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Ta bort review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Rapport recension');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Granskningsrapporter');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Ange din rapport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','se något i denna genomgång, som är obehagliga eller felaktig? Rapportera det och vi kommer att undersöka saken åt dig.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Skicka');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Rapport skapad av');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', "Rapporter publiceras av användare som kanske inte instämmer i innehållet i en översyn. Det enda sättet att ta bort en rapport är att ta bort översyn. ");
jr_define('_JOMRES_REVIEWS_RATING','Betyg (1 = dålig 10 = utmärkt)');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitality');
jr_define('_JOMRES_REVIEWS_RATING_2','plats');
jr_define('_JOMRES_REVIEWS_RATING_3','renlighet');
jr_define('_JOMRES_REVIEWS_RATING_4','Boende');
jr_define('_JOMRES_REVIEWS_RATING_5','Valuta för pengarna');
jr_define('_JOMRES_REVIEWS_RATING_6', "Tjänster");
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Recenserad av:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Dölj recensioner');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Visa Bokningsformulär i näringslivet detaljer sida?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ställ till Ja för att visa bokningsformuläret i verksamheten detaljer sidan. Om du ställer in det till Nej, så en länk kommer att visas i detaljer sidan istället pekar på bokningsformuläret.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Priserna är brutto?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Om de priser du anger i systemet innefattar skatt och välj sedan Ja. Om de inte är (dvs Nett) väljer du Nej');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Tjänster skatt:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Dagen för veckan fält kan du ange en skattesats för en viss dag i veckan, när du klickar på veckodag knapp alla dagar i veckan kommer att sättas på denna kurs.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','De datumväljare och hastigheten ingången kan du ange ett pris för ett givet datumintervall. Välj en start-och slutdatum, mata in ett pris, och klicka fastställa priser knappen.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start intervall');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End sortiment');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Betygsätt');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','fastställa priser');
jr_define('_JOMRES_PARTNERS_TITLE','Partners');
jr_define('_JOMRES_CALENDAR_TODAY','Idag');
jr_define('_JOMRES_CALENDAR_PREV','Tidigare');
jr_define('_JOMRES_CALENDAR_NEXT','Nästa');
jr_define('_JOMRES_CALENDAR_RTL','falsk');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Resurs');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','gäst (er).');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Detta hur vi tilldelat dina gästers nummer till sina resurser. Om du vill ändra denna fördelning, måste du kontakta hotellet efter att bokningen. Extra avgifter kan tillkomma om du ändrar dina uppgifter.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Tänk på att ditt företag ännu inte är publicerad, bara du kan se verksamheten kommer besökarna inte se det");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default sökresultat för');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Ändra detta alternativ för att ändra den ordning som sökresultaten presenteras som standard.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Visa sökresultat ordning dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Resurser lista stil');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','i bokningsformuläret, med hjälp av "klassiska" resurser lista stil du har individuella resurser till gästerna. Med resurstyp vyn gästerna välja antalet resurser av typen X (t.ex. 2 x dubbel) i stället');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','typ resurs');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re) kontrollerar tillgängligheten');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Ombyggnation tillgängliga resurser lista');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Beräkna summorna');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','färdiga update');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','kalendervecka startdag, söndag eller måndag');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Bara affärsresenärer kan granska?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Ställ till Ja om du vill begränsa recensioner att endast de användare som varit gäst redan i den här branschen.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','per resurs');

jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Gäster per resurs:');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Gäster per bokning:');
jr_define('_JOMRES_NUMBER_OF_ROOMS','antal resurser');

jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff standard pris');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Detta gäller endast nya priser");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', "År för att visa");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Definierar antalet år att visa när du redigerar en detaljstyra taxa");

jr_define('_JRPORTAL_MONTHS_LONG_0','Januari');
jr_define('_JRPORTAL_MONTHS_LONG_1','Februari');
jr_define('_JRPORTAL_MONTHS_LONG_2','Mars');
jr_define('_JRPORTAL_MONTHS_LONG_3','April');
jr_define('_JRPORTAL_MONTHS_LONG_4','Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5','Juni');
jr_define('_JRPORTAL_MONTHS_LONG_6','Juli');
jr_define('_JRPORTAL_MONTHS_LONG_7','Augusti');
jr_define('_JRPORTAL_MONTHS_LONG_8','September');
jr_define('_JRPORTAL_MONTHS_LONG_9','Oktober');
jr_define('_JRPORTAL_MONTHS_LONG_10','November');
jr_define('_JRPORTAL_MONTHS_LONG_11','December');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', "Business management-processen");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Det finns olika styrprocesser beroende på hur du vill att lista ditt företag / verksamhet.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Uthyrning");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Välj hyra alternativet om du bokar ut resurser i ett företag (t.ex. Hotell / B & B / Villa / lägenhet) ");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Realestate / enkel lista");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Välj fastigheter alternativet om du inte erbjuder någon bokning funktionalitet alls, (t.ex. Ett företag / objekt för försäljning) ");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Ställ in denna till Ja för att minska antalet alternativ för företagsledare i den allmänna avsnittet Configuration. Detta är användbart om du inte vill att företagsledare att leka med för många inställningar, istället kan du redigera jomres_config.php att definiera standardalternativ affärer.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Välj ett alternativ för din bokning');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Slår på html redaktörer i verksamheten redigering sida. Dessutom, om det är inställt på Nej då alla html utom p och br bort från alla in och visad text.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Fullskärm utsikt");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normal vy");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', "Visa tidszon växlare i branschen chefens verktygsfält?");

jr_define('_JOMRES_PARTNER_DISCOUNT', "Partner rabatt");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Sök användare");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Skriv några tecken att söka efter en användare. <br/> När du väljer en användare som du automatiskt lägga till dem som en partner och du kommer att tas till nästa sida där du kan tilldela företag och rabatter till användaren. ");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "befintliga partners");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Välj en partner som skall vidtas för partnern administrationen sidan.");

jr_define('_JOMRES_PARTNER_SHOW_TITLE', "Partner");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Sök efter ett företag");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Skriv några tecken från firma och välj ett företag. <br/> När du väljer företag du kommer att lägga till partnerns portfölj, men de ännu inte kommer att njuta eventuella rabatter, behöver du att ställa dessa dig själv. ");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Aktuella företag");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Klicka på ett företag för att redigera partners rabatt inställningar för denna verksamhet.");

// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE', "Spärrad? <br/> (klicka för att skjuta en chef, det kommer automatiskt avpublicera alla sina företag) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Klicka på ikonen för avbrott (ikonen med mannen och den gröna bocken) för att avbryta en chef. Detta innebär att chefen inte kommer att kunna utföra funktioner företagsledning och alla deras företag kommer att opublicerat. Super företagsledare kan inte upphävas.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED'," Detta konto har stängts, är det inte möjligt för närvarande att administrera din propert (er) med detta konto. ");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Manager-konto tillfälligt");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Manager-konto återinföras");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Observera att ditt företag chef-konto har stängts. Du kommer inte att kunna utföra alla funktioner företagsledning tills kontot har återställts. ");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Observera att ditt företag chef-konto är nu aktivt. Du kan fortsätta att utföra alla funktioner företagsledning. Logga in på ditt konto och se till att approprite propert (er) har publicerats. Tack.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Ta bort favorit');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Boka dataarkiv');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Bokningen uppgifter arkiv är en rå dump av bokningsinformation fångas efter bekräftar bokningen klickar på knappen. Muspekaren över ett datum för att se rådata dumpa. Informationen lagras i XXX__jomres_booking_data_archive tabellen.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Redigera konto');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Sök användare");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Skriv några tecken från användarnamnet för att söka efter en användare. <br/> När du väljer en användare som du automatiskt lägga till dem som en chef och du kommer att tas till nästa sida där du kan tilldela företag och nyttjanderätt för användaren. ");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "dagens chefer");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Välj en chef som ska tas till Administration sidan.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Sök gäst nummer");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Visa sök via gästen nummer dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Sök efter stjärnor");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Visa sökning genom Stjärnor dropdown");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Antal gäster');
jr_define('_JOMRES_SEARCH_STARS','Antal stjärnor');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', "Kommissionen fakturor");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Antal företag");

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery biblioteket?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC', "Du kan ställa in detta till NEJ om du har en mall som använder jQuery. Detta kan lösa jquery konfliktfrågor på vissa mallar, men inte alla. ");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Om du använder Joomfish bör du ange Nej, och använda Joomfish\'s språk växlare. Växlaren är alltid aktiverad i administratören område eftersom det behövs när du använder Label Översättningar funktionen.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Miniatyrer skapas automatiskt för uppladdade bilder.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Små miniatyrer max bredd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','små miniatyrbilder används i verksamheten listan medan medelstora miniatyrer används i verksamheten huvudet.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Små miniatyrer max höjd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','mellan Tumnagelbilder max bredd (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','mellan Tumnagelbilder max höjd (px).');

jr_define('_JOMRES_TOUCHTEMPLATES','Translations Label');

jr_define('_JRPORTAL_ROI_TAB', "ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', "Använd provision funktionalitet?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Ställ till Ja för att visa de fakturor manager kommissionen som har tagits upp.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Chef bokningar skapar provision fakturor?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Om en chef gör en bokning, gör att också skapa en provision post fakturarad?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "En ny kommission faktura har höjts");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "har en ny kommission faktura höjts som kräver din uppmärksamhet. Klicka på följande länk för att se fakturan (du kan behöva logga in först). ");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto avbryta chefer där fakturorna är markerade som väntan?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Auto avbryta threashold");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Det här threashold är antalet dagar som en chef måste betala en faktura innan de suspenderas och sina företag opublicerade.");

// 4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Språk sammanhang');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Använd detta alternativ för att ändra platsen språk sammanhang. Denna funktion gör Jomres att använda etiketter som är lämpliga för din nuvarande fokus, så om ditt fokus är som en Yacht Brokerage, sedan ändra sammanhanget låter Jomres presentera etiketter från ett annat språk fil. Till exempel, om du ställer in sammanhanget "Yacht Brokerage" då Jomres kommer först hitta aktuellt språk, sedan söka på jomres språk katalog för en underkatalog som heter "yachtbrokerage". Om filen finns för det aktuella språket så att filen kommer att användas. Om inte, så Jomres söker efter en engelsk språkfil i samma katalog. Om det kan  hittas, kommer Jomres använda språket filen för det valda språket i / jomres / språk katalogen. Observera att om du skapar en ny fastighetstyp, sedan en kopia av den aktuella språket filen görs i en underkatalog under / jomres / språk med ett namn som speglar den nya typ av fastighet beskrivning.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Avancerad plats config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Ställ in detta alternativ på Ja om du vill använda de avancerade alternativen webbplatsen konfiguration. Om du \ är bara börjar med Jomres så vi råder dig att lämna detta till Nej för nu, som standard installationen är tillräckligt för att komma igång, istället bör du lägga Jomres till huvudmenyn och logga in i frontend som "admin "och börja konfigurera din fastighet (er). Observera att många av de avancerade alternativen endast är tillämplig på installationer av Jomres Silver kommer Jomres Lite användare inte att kunna dra full nytta av de funktioner som de gör.');

jr_define('_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI bibliotek?");

jr_define('_JOMRES_SORTORDER_PRICE_DESC','Pris (högst först)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Pris (lägst först)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Prisöversikt och uppskattningar bör prissättas enligt per natt / per vecka / per månad?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per natt');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per vecka');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','per månad');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','vecka (er) vid');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','månad (er) på');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Hur ska söka alternativ för människor siffrorna arbete?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Påverkar alla sökord moduler. När du använder gäst funktionsnummer sökning bör sökfunktionen leta efter fastigheter som taxor kommer att stödja gäst nummer upp och motsvara antalet valda, exakt lika antal valda, eller antalet utvalda och större?');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Vänta, din beställning bearbetas och du kommer att omdirigeras till Paypal webbsida.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Om du inte automatiskt omdirigeras till Paypal inom 5 sekunder ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Klicka här');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Bokning gäller från");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Bokning giltigt till");
jr_define('_JRPORTAL_COUPONS_GUESTNAME', "Gäst namn");
jr_define('_JRPORTAL_COUPONS_DESC_478', "rabatt koder kan genereras och skickas till gäster som ett incitament för att göra bokningar. <br/>
Giltig från och till datum avser de datum som en bokning kan göras på, medan Boka gäller från / till datum hänvisas till de datum som bokningen måste täcka för kupongen ska vara giltig. Om en bokning faller utanför denna period då normala priser gäller för de dagar utanför denna period. <br/>
Om du vill att bokningen ska vara tillgänglig för en specifik gäst väljer att gästens namn i listrutan för att begränsa kupongen till att gäst bara. ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Med din kupong, har denna bokning diskonterats från");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', "till");

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', "ange Nej för att stänga av laddning av både jQuery UI javascript och CSS-filer.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', "Ladda Jomres jQuery UI CSS biblioteket?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "ange Nej för att stänga bara jQuery UI CSS-fil.");

// V5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Total inc skatt");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Opublicerad egendom');

// V5.2
jr_define('_JOMRES_CONVERSION_TITLE', "Använd konvertering functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Använd Jomres nätet konvertering funktionalitet. Detta kommer att ge en omvandling dropdown till frontend användare, där de kommer att kunna välja en valuta som de vill se priser som erbjuds i. Pris utgång justeras för att visa den konverterade priset följt av fastighetens 'native' pris inom parentes. ");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "Vi har använt vårt bästa för att få den mest exakta och aktuella växelkurser som vi kan. Vår online valuta convertion funktionen är en tjänst som tillhandahålls endast i informationssyfte och är inte avsedd att ge exakta siffror. Därför garanterar vi inte riktigheten av växelkurserna. Med den här funktionen, anses du ha kommit överens om att all tillit på eller användning av hastigheten konverteringsfunktionen ska vara helt på egen risk. ");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', "använda JavaScript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', "Välj om du vill använda Jomres Javascript caching funktionen. Fungerar på de flesta servrar, men inte på alla. Om du har problem med javascript fel som redovisas som 'oavslutad stränglitteral' i (exempelvis) Firebug bör du ställa detta till No ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', "Lista historiska och aktuella gäster");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', "Aktuella gäster endast");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','valutakonvertering / valuta koder');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API-nyckel');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','att automatiskt ställa in valutakod dropdown Jomres kan använda en gratis tjänst som kallas IPinfoDB att upptäcka besökaren land, men du måste registrera dig för en API nyckel vid <a href="http://ipinfodb.com/register.php" target ="_blank">IPinfoDB</a> först.');
jr_define('_JOMRES_DEBUGGING_TAB','Felsökning');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Visa bokningsformuläret i en modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','Om alternativet för att visa boka form i detaljer är inställt på Nej, då när bokningsformuläret sidan öppnas Jomres kan visa bokningsformuläret en modal popup. Detta gör att du kan inkludera mycket mer information i bokningsformuläret utan att tynga kunden genom att ha för många element på skärmen (som de \ är dold bakom popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totalt panel plats');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','i bokningsformuläret den uppgår panelen behöver olika inställningar beroende på mallen. Till exempel på Jomres Joomla mall inställningen 712 fungerar bra, men på Milkyway en inställning på cirka 1500 är mer suitablem, särskilt om du inte har modal popup-funktionen aktiverad. Det sannolikt att du måste experimentera med olika inställningar för att hitta något som fungerar bra i din valda mallen.');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Boende ex skatt');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Boende inc skatt');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Resource skatt:');

jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Öppna bokningsformuläret');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Tillbaka till informationen om verksamheten');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','automatiskt?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balans (efter deposition betalas)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resurser utifrån deras egenskaper.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Senaste bokningen');
jr_define('_JOMRES_DATEPERIOD_SECOND', "andra");
jr_define('_JOMRES_DATEPERIOD_MINUTE','minut');
jr_define('_JOMRES_DATEPERIOD_HOUR','timme');
jr_define('_JOMRES_DATEPERIOD_DAY','dag');
jr_define('_JOMRES_DATEPERIOD_WEEK','vecka');
jr_define('_JOMRES_DATEPERIOD_MONTH','månad');
jr_define('_JOMRES_DATEPERIOD_YEAR','år');
jr_define('_JOMRES_DATEPERIOD_DECADE','decennium');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','sedan');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','från och med nu');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bokning är för hela dagar?');
jr_define('_JOMRES_WHOLEDAY_DESC','Som standard systemet bokningar resurser ut av natten, så en bokning från den första januari. "datum (" Y ", strtotime (" nästa år "))." till 2 januari: . datum ("Y", strtotime ("nästa år")). "omfattar bara en natt. Om du ställer in det här alternativet på Ja, men då bokningen kommer att täcka hela dagar i stället, så en bokning på dessa dagar skulle täcka båda dagarna och kunden skulle faktureras för två dagar.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per dag');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','per person och dag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "dagar (er) på");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return datum felaktiga');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','Bokningen är för kort. Det måste finnas minst så här många dagar mellan pickup och datum avkastning:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup / Retur minimiintervall');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','Det Minsta intervall i bokningsformuläret mellan pickup och avhopp datum. Ett intervall av 1 betyder att pickup och återgå datum kan ställas in på samma dag, men detta är fortfarande beroende av det minsta intervall som automatiskt beräknas av bokningsmotor, eftersom den kontrollerar taxor som gäller för bokningsperiod .');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Prisöversikt och uppskattningar bör prissättas per dag / per vecka / per månad?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per dag');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','dagar före pickup dagen');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','Det minsta antal dagar som måste förflyta från "idag", före pickup datum.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Ställ detta ja om du vill begränsa förbokning (använd nästa fält för att sätta gränsen när det gäller dagar). Om du ställer detta till ja då om användaren försöker boka mer än n dagar i förväg och sedan deras pickup datum kommer att återställas till dagens dag');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Visa ingång återlämningsdatum?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Ställ in denna till Nej om du inte vill visa avkastningen rutan datum ingång. Använd endast detta om du vet vad du gör, eftersom avkastningen datum i bokningar alltid kommer att sättas till dagen efter pickup dagen. ");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','Om du ställer in Ja, då bokningar tas för en bestämd tid. Om detta är inställt på Nej, och sedan se till att "definierad pickup dag" satt till Ja (om du inte specifikt vill tvinga människor att pickup en viss dag i veckan) annars kommer du inte få många länkar i tillgången kalender.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Fördefinierad pickup dag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Endast för webbplatser som erbjuder bestämd period bokningar. Välj veckodag som mickar skall göras på.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fast pickup dag');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fast pickup datum recurr:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','När fasta pickup datum väljs antalet datum som kan visas i datum listrutan. Observera att listan med datum inte kommer att innehålla några datum om en bokning inte är möjligt på grund av tidigare bokningar, och att listan kommer faktiskt vara dubbelt så lång som det valda numret eftersom det kommer att ha ett liknande antal historiska datum (om tillgängligt) .');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','per person och dag');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Välj Ja om du vill ta betalt per-person per dag. Om nej, då kostnaderna kommer att beräknas på en per-resurs per dag basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variabel insättningar kan du definiera om du vill ta ut hela beloppet om bokningen pickup datum är inom n dagar från "idag". Ställ in detta alternativ till Yes för att aktivera funktionen och ange antalet dagar nedan, så till exempel om pickup dagen är inom 60 dagar, sedan det insatta beloppet debiteras blir hela beloppet, annars beloppet kommer att baseras på depositionen alternativ konfigurerade ovan.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','De flesta företag kommer priserna räkna resurs baserad på antalet resurser en önskad typ som finns vid en viss tidpunkt. Det ger dem möjlighet att erbjuda rabatter på en resurs / affärer typ som  upptagen under en viss period i syfte att locka till sig företag som annars skulle missas. <br/> Aktivera och konfigurera denna plugin kan du erbjuda justerbar prissättning baserad på antalet resurser en vald typ finns i verksamheten på en viss dag. <br/> dagar tröskeln definierar antalet dagar som pickup dagen måste vara inom innan resurser priserna justeras genom denna funktion, så de procentsatser alternativ kan du konfigurera den procentandel av medlen som kan vara tillgängliga innan en viss rabatt tillämpas. Notera dock om flera resurser bokas då den nuvarande rabatten kommer att tillämpas på alla resurser och kommer inte att minska eftersom fler resurser väljs.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Tröskel (antal dagar mellan pickup datum och idag)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup avvaktan');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup idag');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Plockade upp');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returnerar dagens');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return försenad');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Har inte plockas upp');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','dagar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Markera en bokning plockas upp.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Markera en bokning tillbaka.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Markera en bokning plockade upp');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Markera en bokning tillbaka');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Kostnad per dag:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Antal dagar:');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Åsidosätt Boende Totalt');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Spara överstyrning');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Bokningsformulär bredd i px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Låt uppgår panelen att glida ner bokningsformuläret?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','summorna Panelen kommer att glida ner bokningsformuläret som användaren rullar ned. Du kan aktivera / inaktivera den här funktionen med denna knapp. Observera, om användaren besöker via en mobil enhet \ webbläsare sedan skjuta inaktiveras automatiskt.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','E nya användare deras inloggningsuppgifter?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','Om Skapa ny användare är inställt på Ja, kan du ställa in detta alternativ till Ingen för att säkerställa att de inte skickas deras inloggningsuppgifter när användaren har skapats. Detta kan vara användbart om du automatiskt lägga till nya användare till en e-postlista, till exempel, och inte vill att användarna faktiskt logga in');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Visa skatt ut i bokningsformuläret uppgår sammanfattning?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Förhindra bokningsformuläret från att visa fälten skatt priset i totalsumman sammanfattningen genom att ställa detta alternativ på Nej');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Avbeställning Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Inloggad kan registrerade gäster avbryta sina egna bokningar. Här kan du ställa in threashold, i dagar, där bokning inte kan annulleras efter ett visst antal dagar före ankomstdatum.');

jr_define('_JOMRES_EDIT_PROFILE','Redigera profil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Typ av fastighet relation');
jr_define('_JOMRES_IMAGE','Bild');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business typer som kan visa den här funktionen');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Klicka på ett brev för att visa alla företag med den första bokstaven. När du har en lista med egenskaper som du kan tilldela provisionssatser till dessa egenskaper, eller klicka på deras "redigera" ikonen för att visa verksamheten statistik.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', "Redigera Skattesats");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Redigera anpassad fält");

jr_define('_JOMRES_LICENSESERVER_PASSWORD', "Licens serverlösenord");
jr_define('_JOMRES_LICENSESERVER_USERNAME', "Licens Server Användarnamn");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', "Om du har ett användarnamn och lösenord på licensservern, ange dem här. Detta kommer att hjälpa dig att komma åt plugins som du har rätt till. Om du har angett en giltig Support nyckel i fältet ovan, så är det inte nödvändigt att förse användarnamn / lösenord här. ");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "Detta Jomres version:");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Senaste Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert: Det finns en ny version av Jomres tillgängliga, bör du uppgradera så snabbt som möjligt.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Välkommen till Jomres, hoppas vi att du tycker om att använda Joomla \'s favorit bokningssystem. Om du vill köpa en Jomres Silver eller Jomres Gold licens, <a href="http://www.jomres.net/prices" target="_blank"> finns på vår webbplats </ a> för information om hur du kan uppgradera.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','Detta system är idealiskt för något scenario, det är en enkel bokningsformuläret för en enda egenskap, ända fram till en webbplats som har flera användare, på flera språk, med flera egenskaper. Se "Hjälp" i till vänster, inklusive "Komma igång" sida som guidar dig genom dina första steg.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active egendom");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Ändra din aktiva egendom");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Klicka på en karaktär för att visa alla egenskaper som börjar med det tecknet. När avslöjat, klicka på fastigheten namn för att ändra det till din aktiva fastighet. ");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Alternate SMTP-inställningar");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Ställ in detta alternativ på Ja för att använda dessa alternativa SMTP-inställningarna. Ett ökande antal webbhotell verkar blockera PHP postfunktioner, så att du kan välja att över-rida postinställningar som Jomres antar från din värd CMS (normalt Joomla) och använd inställningarna för ditt eget val här. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternate värd");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Ändra detta till din SMTP-server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Ändra detta till din SMTP-port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate protokollet");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Beroende på SMTP-servern inställningar, måste du lämna det tomt, eller ange 'SSL' eller 'TLS'. Fråga din SMTP-leverantör om du inte vet. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Använd autentisering");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "Om din SMTP-server kräver kunder att logga in, ställa in detta till Ja. Användarnamnet och lösenordet kommer sedan att användas. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Användarnamn");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate lösenord");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE', "Varning: Vi har upptäckt att din Joomla system Cache plugin är aktiverad. Vi råder dig att inaktivera plugin som det kommer cache Ajax svar bokningsformuläret, vilket systemet att uppföra sig oförutsägbart. ");

jr_define('_JOMRES_QUICK_INFO', "Quick info");

jr_define('_JOMRES_MENU_SHOW', "Visa");
jr_define('_JOMRES_MENU_HIDE', "Dölj");
jr_define('_JOMRES_MENU_SHOW_TITLE', "Använd alternativa menyn layouten?");
jr_define('_JOMRES_MENU_SHOW_DESC', "Ställ till Ja för att använda Alternativ-menyn alternativet i gränssnittet. När den är inställd på Nej för Jomres huvudmenyn visas som ett dragspel till vänster på sidan, med en knapp för att förstora menyn. När inställningen är Ja, Alternate huvudmenyn används, vilket resulterar i en menyrad längst upp på sidan. Båda menyerna kommer att glida med användaren, och dragspel menyn anses vara bättre menyn, men om du tycker att det inte är lämpligt för dig, är du fri att välja den alternativa. Om ingen av dessa menyer passar dig, då du kommer att behöva ändra mainmenu_wrapper.html och mainmenu_options.html att passa din specifika uppsättning krav. ");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Standard");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Vem som helst");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registrerad");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "chef");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Ingen");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE', "Åtkomstkontroll");
jr_define('_JOMRES_ACCESS_CONTROL_DESC', "Denna funktion gör att du kan styra vem som kommer att kunna se en plugin i huvudmenyn. Vanligtvis användaralternativ 00.009 kan visas antingen / eller oregistrerade besökare webbplatsen, 00010 optioner avser i allmänhet aktiviteter Reception typ som används på en daglig basis, medan 00.011 optioner används för att upprätta och konfigurera en fastighet, men nås mindre ofta. ");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Ställ in detta alternativ till Ja för att aktivera full åtkomstkontroll funktionen sedan besöka alternativet Access Control enligt Systemunderhåll att konfigurera åtkomstkontroller.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Observera dock gör detta dessa inställningar inte kontrollera de underliggande skript som de ansluter till, så till exempel om du ställer <i> 00009user_option_03_search </ i> till 'Manager' en användare som vet Jomres kan fortfarande ring j06000search.class.php genom att ange http://www.domain.com/index.php?option=com_jomres&task=search i webbläsarens adressfält. Detta är avsiktligt, eftersom detta Meny Åtkomstkontroll bara kontrollerar vad som kan ses i Jomres huvudmenyn. Om du behöver strängare kontroller sedan in webbplatsen Config -> Full åtkomstkontroll alternativet Ja och se över alternativet Meny Access Control ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Full Åtkomstkontroll");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Denna funktion är till för avancerade användare. Om du inte vet vad det är för, och inte har en särskild anledning att använda det, gå tillbaka till webbplatsen Configuration och ställ in alternativet Alla Åtkomstkontroll till Nej </ strong> <br/>
Denna funktion gör att du kan styra vem som kan komma åt vilka minicomponents (med vissa undantag som hårt är kodade i systemet). Om åtkomstnivå bredvid ett skript namn har angetts som standard, sedan med Full Access Control inställt på Ja <strong> någon </ strong> kan komma skript att de inte borde kunna komma åt därför om du tänker använda detta funktionen måste du ställa in åtkomstkontroll för <strong> varje </ strong> Jomres minicomponent listas här. Om du inte vet vad dessa minicomponents gör, då vi rekommenderar starkt att du inte använder den här funktionen alls. <br/>
I Jomres åtkomstnivåer följer en pyramid, så Super fastighetsförvaltare är större än chefer. Kort sagt Super Manager> Manager> Receptionist> Registrerade> Oregistrerad. Så, om en registrerad användare har tillgång till en minicomponent, så gör Receptionister, chefer och Super Managers. <br/>
Observera att du inte kan kontrollera minicomponents administratör område. Någon i administratören området anses vara en pålitlig användare att de inte bör blockeras från alla skript (särskilt här).
");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Varning! Du har full tillgång aktiverad, men vi har räknat åtkomstinställningar och jämfört dem med det antal minicomponents som skall styras, och två inte matchar, så du kan ha vissa skript som inte är kontrollerade. Detta kan vara ett säkerhetsproblem och du uppmanas att lösa detta på en gång genom att besöka funktionen Access Control och kontrollera att lämpliga nivåer har tillämpats. ");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Användare med admin rättigheter till den här egenskapen");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', "Lista alla användarens fakturor");

jr_define('_JOMRES_DEBUGGING_SUBJECT','Ämne');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Ditt fullständiga namn');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Din e-postadress');
jr_define('_JOMRES_DEBUGGING_ISSUE','Beskriv ditt problem');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','modell');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parametrar');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta titel');
jr_define('_JOMRES_METADESCRIPTION','Meta beskrivning');
jr_define('_JOMRES_FOUNDPROPERTIES', "hittade egenskaper");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', "Lägg din fastighet: Steg 1 av 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Lägg din fastighet: Steg 2 av 2");

jr_define('_JOMRES_MYPROPERTIES','My företag');

jr_define('_JOMRES_CART_TITLE','Mina förslag bokningar');
jr_define('_JOMRES_CART_INFO',', not har dessa bokningar inte sparats ännu. Om du loggar ut eller sessionen upphör att de kommer att gå förlorade. Kom ihåg att bekräfta din bokning!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Bekräfta bokning (er)');
jr_define('_JOMRES_CART_OR','eller');
jr_define('_JOMRES_CART_SAVEFORLATER','Spara till senare');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','Du har några bokningar sparade ännu.');
jr_define('_JOMRES_CART_VIEWCART','Visa kundvagnen');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Språkfil underkatalog');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude startpunkt');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitud startpunkt');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','I Google karta på fastigheten redigeringssidan, innan markören har flyttats, vad ska de förinställda latitud / longitud startpunkter vara?');

jr_define('_JOMRES_CLEARDATES','Jag har några datum ännu');

jr_define('_JOMRES_MOBILE_REDIRECT','Omdirigera till ramlösa när på mobila enheter?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres innehåller en funktion som dirigerar användaren till en vy av Joomla som inte innehåller moduler och rubriker när den upptäcker att webbläsaren tillhör en mobil enhet. Om du har en Joomla mall som redan är optimerad för mobila enheter, kan du stänga av denna funktion genom att sätta detta alternativ till Nej');

jr_define('_JOMRES_SYSTEM_EMAILS','mail som skickas från vilken adress?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Lämna det här alternativet blankt för att inaktivera den. Jomres kommer att använda hotellets e-postadress (er) när du skickar e-post till gäster, men din e-posttjänst inte kan tillåta e-post från godtyckliga adresser (dvs de endast kan tillåta e-post från en auktoriserad adress). Om så är fallet, kan du använda denna ingång för att ange en adress som kommer att ses som avsändaradress för alla systemets e-post. ");

jr_define('_JOMRES_CSS_CACHING_TITLE', "Använd css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC', "");

jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Sök kalendrar visar tydliga datum kryssrutan?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Listvy");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Foto view");

jr_define('_JOMRES_COMPARE', "Jämför");
jr_define('_JOMRES_REMOVE', "Ta bort");
jr_define('_JOMRES_RETURN_TO_RESULTS', "Tillbaka till sökresultaten");

jr_define('_JOMRES_ADDTOSHORTLIST', "Lägg till som favorit");
jr_define('_JOMRES_REMOVEFROMSHORTLIST', "Ta bort från kortlistan");
jr_define('_JOMRES_VIEWSHORTLIST', "Visa din lista");

jr_define('_JOMRES_COOKIEPOLICY_TITLE', "cookies");
jr_define('_JOMRES_COOKIEPOLICY_DESC', "EU: s lagstiftning kräver att alla webbplatser som använder cookies begära tillstånd från besökarna för att lagra kakor.
<br/>
Jomres använder värd CMS cookie för att bygga det egna sessionsfil där information om användarens sökresultat och andra aktiviteter kan sparas för att göra användarens besök trevligare. Även om vi tror att normala Jomres funktionalitet troligen omfattas av bestämmelser i den lagstiftning som anges i <i>sådan lagring eller åtkomst är absolut nödvändigt att tillhandahålla en av informationssamhällets tjänster som begärs av användaren eller abonnenten</ i> (se Vi har inkluderat denna funktion för att ge dig möjlighet att hindra användare från att komma åt andra sidor än söksidor i händelse av att användaren inte tillåter deras cookie som används på detta sätt. <br/>
Om aktiverade Jomres visar en \"opt-in\" länken där användarna kan välja att ha en cookie som lagras för dem används på detta sätt. Om de inte väljer att opt-in då Jomres endast visa dem några grundläggande sidor (liksom egenskaper detaljer, visar listan, sökresultat osv).
<br/>
Ställ in detta alternativ på Ja för att anta denna politik. ");

jr_define('_JOMRES_COOKIEPOLICY_1', "Viktigt: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2', "Vi använder cookies för att hålla vår webbplats relevant och lätt att använda.");
jr_define('_JOMRES_COOKIEPOLICY_3', "Läs mer ...");
jr_define('_JOMRES_COOKIEPOLICY_4', "EU: s lagstiftning kräver att alla webbplatser tydligt ange om cookies används och deras syfte.");
jr_define('_JOMRES_COOKIEPOLICY_5', "Sökandet och bokningsmotor av denna webbplats måste kunna komma ihåg de alternativ som du valt att arbeta när det är som bäst. För att göra detta måste den lagra information som är associerad med en liten fil som kallas en \"cookie\" som identifierar din webbläsare och för oss att göra det måste du komma överens om att vi kan. Om du inte accepterar den här cookien politik kommer du att starkt begränsad i vad du kan göra på denna webbplats. ");
jr_define('_JOMRES_COOKIEPOLICY_6', "Ja, jag accepterar användning av cookies på detta sätt.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposition krävs är kostnaden för den första natten?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Är Priserna beräknas per natt grund. Vill du deposition som en natt avgift? Om så är fallet, kan du ignorera följande alternativ.');

jr_define('_JOMRES_NOTHINGINSHORTLIST', "Du har inte lagt till några föremål i din lista.");

jr_define('_JOMRES_MOBILE_SETTINGS', "Mobile enhetsinställningar");
jr_define('_JOMRES_SIMULATE_MOBILE', "Simulera mobilläge");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', "Ställ till yes för att tvinga Jomres att alltid växla till mobil vy. Användbart om du utvecklar mallar som är för mobila enheter. OBS: Du behöver en mobil mall plugin installerad ");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulering IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "Du kan konfigurera simuleringen inställningen endast träda i kraft om användarens IP = xxx.xxx.xxx.xxx, så till exempel om du utvecklar på localhost, skulle du ställa in IP-nummer till 127.0.0.1. ");

jr_define('_JOMRES_SAFEMODE', "Aktivera felsäkert läge?");
jr_define('_JOMRES_SAFEMODE_DESC', "Ställ till Ja för att utlösa felsäkert läge. Detta kommer att inaktivera alla insticksmoduler för att Jomres kommer endast att använda sin kärnfunktioner. ");

jr_define('_JOMRES_PRICE_ON_APPLICATION', "POA");

jr_define('_JOMRES_USE_JOMRESEDITOR', "Använd Jomres' WYSIWYG editor? rekommenderat");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', "Om du har aktiverat den WYSIWYG editor, kan du välja att använda HTML-redigeraren (ar) tillgängliga för din CMS eller en medföljer Jomres. Den här är optimerad för användning av fastighetsförvaltare och det rekommenderas att du väljer att använda den. ");

jr_define('COMMON_NEXT', "Nästa");
jr_define('COMMON_CANCEL', "Avbryt");
jr_define('COMMON_SUBMIT', "Skicka");
jr_define('COMMON_SAVE', "Spara");
jr_define('COMMON_DELETE', "Ta bort");
jr_define('COMMON_RETURN', "Return");
jr_define('COMMON_CLOSE', "Stäng");
jr_define('COMMON_BACK', "Back");
jr_define('COMMON_HOME', "Home");
jr_define('COMMON_NEW', "New");

jr_define('COMMON_SEND', "Skicka");

jr_define('RECAPTCHA_TITLE', "reCaptcha");
jr_define('RECAPTCHA_INFO', "Captcha används för att säkerställa att kunden använder webbformulär är en människa och används för att hindra fastighetsförvaltare från att \" spam robotar på Internet. Om du vill använda formuläret Kontakta oss i Jomres måste du registrera dig på <a href=\"http://www.google.com/recaptcha\" target=\"_blank\"> Google reCaptcha </ a> hemsida och ställ din domän för att få dina publika och privata nycklar. När du har fått dessa nycklar, ange dem nedan. Den reCapcha tjänsten är en kostnadsfri tjänst som tillhandahålls av Google. ");
jr_define('RECAPTCHA_PUBLIC_KEY', "Offentlig nyckel");
jr_define('RECAPTCHA_PRIVATE_KEY', "Privat nyckel");

jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', "låsfil timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "För att förhindra risken för gäster dubbelbokning rum Jomres använder en låsfil för att förhindra ett rum från att läggas till den tillgängliga rum listan i bokningsformuläret om någon annan redan har lagt till rummet deras för samma datum . Som standard lås kommer tid i 3600 sekunder, eller en timme. Du kan ändra den tid det tar att gå ut här låset genom att ändra denna siffra. ");

jr_define('_JOMRES_BOOTSTRAPSWITCH', "Aktivera Jomres bootstrap mallar och funktionalitet? ");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', "Om du kör en bootstrap aktiverad mall i frontend av denna webbplats anger detta alternativ på Ja.");

jr_define('COMMON_ACTION', "Action");
jr_define('COMMON_VIEW', "Visa");

jr_define('BACKTOTOP', "Tillbaka till början");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', "svaga");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', "stark");

jr_define('_JOMRES_INPUTFILTERING',"Input filtrering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtrering nivå");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "är mest data som matats in i systemet saneras genom att först strippa någon HTML-taggar och sedan använda PHPs variabel filtrering funktioner för att göra data säkra innan den förs in i databasen. Du kanske vill tillåta vissa ingångar (till exempel text ingångarna i fastigheten detaljer sidan) för att inkludera HTML. Det finns två nivåer av filtrering kan du använda för att filtrera denna ingång, antingen svag eller stark.  Du bör endast använda den svaga inställning om användaren (s) in uppgifterna betrodd av dig själv, till exempel kolleger systemadministratörer, annars bör du lämna det inställt på stark. När den är inställd på stark (rekommenderas) kan du fortfarande ange vilka taggar så att genom att redigera nästa inställning 'HTML reningsverk tillåtna taggar'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "tillåtna ingång taggar");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Du kan redigera taggar som html luftrenare gör genom det filtersystem. Standardinställningen är 'p, b, stark, en [href], jag (dvs. punkt, Fet, starka, länkar och kursiv stil). För mer information om tillåtna taggar, läs HTML reningsverk s dokumentation som på <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </ a>. Medan du kan ändra denna inställning, bör du lämna den inställd på standard. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', "tillåtna ingångar");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Du kan definiera vilka bildar ingångar gör det möjligt html genom att redigera det här alternativet, läggs en ingång till denna lista kommer att analyseras via HTML reningsverk istället för att ha alla html avskalade. Standard är 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Lägg till fler ingångar genom att lägga sin från namn, separerade med ett mellanslag. ");

jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Information om objektet i flikar?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Ställ in detta alternativ för att visa detaljer i flikar. Ställ in den till någon att visa dem utan flikar. ");

jr_define('COMMON_PRINT', "Skriv ut");

jr_define('COMMON_EDIT', "Redigera");
jr_define('COMMON_COPY', "Kopiera");

jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 innehåller Twitters Bootstrap ramverk som standard och Jomres har mallar och funktioner som kommer att använda dessa mallar. Som standard, om du kör Jomres på Joomla 3 dessa växlar är inställd på Ja men du kan ställa dem till Nej om så önskas (rekommenderas inte). Om du kör en version av Joomla är lägre än Joomla 3 kan du fortfarande välja att använda Jomres bootstrap mallar och funktioner, men som standard dessa alternativ är inställda på No ");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND'," Använd Jomres bootstrap mallar i frontend? ");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Använd Jomres bootstrap mallar i administratören området?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Här är några alternativ som du kanske vill överväga.");

jr_define('_JOMRES_BEEZ_WARNING', ", not är din frontend mall för närvarande satt till Beez3. Observera att våra mallar är inte kompatibla med Beez3 och vi rekommenderar att du byter din webbplats mall till en bootstrapped mall som Protostar. ");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect gästens land?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Systemet kommer att försöka att automatiskt detektera gästens landet, om de inte har bokat tidigare. Du kan ställa in detta alternativ till Ingen, och definiera det land du föredrar att visas i bokningsformuläret, i nästa val. ");

jr_define("_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "Om Jomres");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "hjälp");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Komma igång");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "systemunderhåll");
jr_define("_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "Utvecklarverktyg");
jr_define("_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "språk");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "generera inkomster");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "redovisning");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bokningar");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "webbplatsens struktur");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "Användarhantering");
jr_define("_JOMRES_CUSTOMCODE_MANUAL", "Manuell (online)");
jr_define("_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Mitt konto (online)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "schemalagda aktiviteter");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portalen funktionalitet");
jr_define("_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integration");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "rapporter / statistik");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "skatter");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Biljetter (online)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "hjälp");
jr_define("_JOMRES_CUSTOMCODE_UPGRADES", "uppgraderingar");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "betalningsmetoder");

jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "tariff default");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "Detta gäller endast nya priser");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "År för att visa");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Anger antalet år att visa när du redigerar en tariff typ");

jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "fakturor");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "kontouppgifter");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Logga in");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logga ut");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "sök");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserv");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "fakturor");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "Inställningar");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc");
jr_define("_JOMRES_PROPERTYCONFIG_SRPS", "SRP: n");

jr_define("_JOMRES_EDIT_COUNTRY_TITLE", "Redigera land");
jr_define("_JOMRES_EDIT_COUNTRY_ID", "Land id");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Landskod");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Landets namn");

jr_define("_JOMRES_EDIT_REGION_TITLE", "Redigera region");
jr_define("_JOMRES_EDIT_REGION_ID", "Region id");
jr_define("_JOMRES_EDIT_REGION_COUNTRYCODE", "Landskod");
jr_define("_JOMRES_EDIT_REGION_REGIONNAME", "Region namn");



jr_define("_JOMRES_COM_LISTCOUNTRIES", "List länder");
jr_define("_JOMRES_COM_LISTREGIONS", "List regioner");
jr_define("_JOMRES_EXPORT_DEFINITIONS", "Exportera definitioner");
jr_define("_JOMRES_EXPORT_DEFINITIONS_INFO", "Denna funktion låter dig exportera översättningar som har byggts upp med hjälp av funktionen Language Translation. Det kommer att bygga upp ett textfält med alla de uppgifter som krävs för att bygga en ny språkfil, allt du behöver göra kopiera och klistra in denna utgång i en ny språkfil som du kan sätta på en ny Jomres baserad server, eller om du vill bidra tillbaka till Jomres samhället. ");

jr_define("_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "översätta locales");
jr_define("_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "översätta lang fil strängar");
jr_define("_JOMRES_COM_NOTAMANAGER", "Fel, den användare du är inloggad som inte är en super chef inom Jomres, kommer du inte att kunna använda den här funktionen tills du har använt Visa profiler funktionen att göra dig både en chef och en Super chef. Detta är en säkerhetsfunktion. ");

jr_define("_JOMRES_COM_LAYOUTS_DEFAULT", "Property lista standardlayout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres använder mallar för att bygga det produktion. Om du är en designer gör detta ändra utseendet och känslan av Jomres lätt, du don måste redigera någon av koden, behöver du bara redigera mallen \' s kod. Denna mall Redigerar funktionen kan du skapa dina egna anpassade versioner av dessa Jomres mallar. <br/>
<br/>
När du anpassar en mall har du möjlighet att göra anpassning specifik för alla fastighetstyper, eller en viss typ av fastighet. Till exempel NGM Random modulen plugin använder basic_module_output.html mall för att bygga layouten. Som ett resultat kan du skapa olika anpassningar av basic_module_output.html mall för olika fastighetstyper. <br/>
<br/>
Om en mall inte har redigerats tidigare, då kan du skapa en ny anpassning av mallen genom att välja alternativet Ny bredvid den. När du klickar på Nytt du \ är tagen till en ny sida där du kan redigera den mallen. Den initiala layouten tas från mallen lagras i / jomres / templates / xxx / frontend katalogen, när du klickar på Spara sedan dina anpassningar sparas till databasen och när Jomres använder den mallen kommer att använda kod som lagras i databasen, inte markeringen lagras i / jomres / templates / xxx / frontend mall. Detta säkerställer att anpassningar inte över när du uppgraderar Jomres installationen. <br/>
<br/>
När en mall har anpassats du har fler alternativ. Du kan skapa en ny kopia av den ursprungliga mallen (som ovan), kan du kopiera en anpassning till en ny mall anpassning, så till exempel om du ve redan anpassade basic_module_output.html för hotell, kan du kopiera den anpassning till en ny anpassning för en ny fastighetstyp, som bilar. Du kan redigera en befintlig anpassning, eller så kan du ta bort den. När du tar bort en anpassning, förutsatt att det annat anpassning av den mallen då Jomres kommer att gå tillbaka till att använda mallen i / jomres / templates / xxx / frontend. Detta är användbart om du redigerat en mall men don \' t som de ändringar som du har gjort. Du kan ta bort anpassningar och starta igen på den ursprungliga mallen. <br/>
<br/>
Jomres utvecklas ständigt och grundläggande mallar ofta uppdateras / ändras. Om du använder funktionen Mall Redigera dessa uppdaterade mallar kommer inte att skriva era anpassningar, men detta kan också innebära att dina anpassningar inte får använda nya funktioner i dessa centrala mallar. Eftersom vi har ingen möjlighet att analysera dina anpassningar du kan eller inte kan dra nytta av dessa förändringar. Mallen redigeringsfunktioner kommer att titta på de modifierade sista datum för filerna i / jomres / templates / xxx / frontend katalogen och om den upptäcker att en mallfil senast ändrades datumet är nyare än den mall du har lagrat i databasen då Jomres varnar om detta. Det spelar betyda att du behöver uppdatera din mall anpassning dock att \' s upp till dig att avgöra om du behöver göra det '); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define("_JOMRES_STAYFORAMINIMUMOF", "Stanna i minst");
jr_define("_JOMRES_NIGHTSFOR", "nätter för");

jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property Lista Bilder, visar egenskapen bilden som en gif om bildspel bilder är tillgängliga.");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Visa som GIF endast om fastigheten är presenterad egenskap.");

jr_define("_JOMRES_AGENT", "Agent");
jr_define("_JOMRES_AGENT_DETAILS", "Agent detaljer");
jr_define("_JOMRES_AGENT_LISTINGS", "agentens listor");

jr_define("_JOMRES_PROPERTY_LANG", "Property språk");
jr_define("_JOMRES_PROPERTY_LANG_DESC", "Standardspråket för den här egenskapen.");

jr_define("_JOMRES_APPROVALS_CONFIG_TITLE", "automatiskt godkänna nya egenskaper");
jr_define("_JOMRES_APPROVALS_CONFIG_DESC", "Om du ställer in detta alternativ till Ingen då måste du manuellt godkänna nya egenskaper. Tills en fastighet har godkänts kan det inte publiceras av en chef / Super fastighetsförvaltare. ");
jr_define("_JOMRES_APPROVALS_MENU_NAME", "Godkännanden");
jr_define("_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Egenskaper väntar på godkännande");
jr_define("_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "Inga fastigheter väntar på godkännande");
jr_define("_JOMRES_APPROVALS_APPROVE", "Godkänn egendom");
jr_define("_JOMRES_APPROVALS_REVIEW", "Granska egendom");
jr_define("_JOMRES_APPROVALS_NOT_APPROVED_YET", "har denna fastighet inte godkänts ännu. När det har blivit godkänd kommer du att kunna publicera det. ");
jr_define("_JOMRES_APPROVALS_CANNOT_PUBLISH", "Tyvärr, du kan inte publicera den här egenskapen eftersom det inte har godkänts ännu.");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "En ny egenskap kräver godkännande");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "har en egenskap lagts till i systemet som kräver ditt godkännande. Klicka på länken för att visa egenskaperna väntar på godkännande lista: ");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Din fastighet har godkänts");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Grattis, din egendom godkänts, vänligen klicka på följande länk för att visa fastigheten kontrollpanel:");

jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region namn är översättas");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Om du kör en mycket snabb server du uppmanas att lämna inställd på Nej På grund av det stora antalet regionen namn, tar regionnamnet översättning upp mycket minne som kan bromsa dina sökresultat ner. ");

jr_define("_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Gäst fullbokad.");

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Tyvärr, den e-postadressen används redan. Om detta är din e-postadress, se till att du har loggat in innan du försöker boka.');
