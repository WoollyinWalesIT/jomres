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
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( "_JOMRES_COM_MR_QUICKRESDESC", "Prenotazione rapida" );
jr_define( "_JOMRES_COM_MR_SHOWPROFILES", "Mostra profili" );
jr_define( "_JOMRES_COM_MR_QUICK______DESC", "Spazi lasciati vuoti intenzionalmente" );
jr_define( "_JOMRES_COM_MR_GENERALCONFIGDESC", "Configurazione generale" );
jr_define( "_JOMRES_COM_MR_BACK", "Indietro" );
jr_define( "_JOMRES_COM_MR_YES", "Si" );
jr_define( "_JOMRES_COM_MR_NO", "No" );
jr_define( "_JOMRES_COM_MR_NEWTARIFF", "Nuova" );
jr_define( "_JOMRES_COM_MR_NEWPROPERTY", "Aggiungi Struttura" );
jr_define( "_JOMRES_COM_MR_NEWPROPERTYFEATURE", "Aggiungi Caratteristica (Struttura)" );
jr_define( "_JOMRES_COM_MR_NEWGUEST", "Check-in ospite" );
jr_define( "_JOMRES_COM_MR_SAVE", "Salva" );
// Visualizza prenotazioni
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME", "Nome" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL", "Data d'arrivo" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE", "Data di partenza" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_BLANK", "Spazi vuoti" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_TITLE", "Assegna privilegi d' amministratore utenti" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_ID", "ID" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_NAME", "Nome" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_USERNAME", "Nome utente" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER", "Autorizzato" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL", "struttura predefinita" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS", "Cambia" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL", "Livello di accesso" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", "Utente modificato" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE", "non applicabile" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION", "Reception" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN", "Manager" );
// Modificare prenotazioni
jr_define( "_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE", "Tutte le prenotazioni" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS", "Nuove Prenotazioni" );
jr_define( "_JOMRES_COM_MR_EDITBOOKINGTITLE", "Modifica prenotazione: " );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL", "Arrivi/Partenze" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST", "Ospite" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM", "Camera" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT", "Pagamento" );
jr_define( "_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL", "Nome" );
jr_define( "_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL", "Cognome" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ", "Richieste speciali" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER", "Nota bene: è possibile che alcune richieste necessitino di pagamenti aggiuntivi." );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING", "Annulla prenotazione" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL", "Numero civico" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL", "Indirizzo" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL", "Città" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL", "CAP" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL", "Numero di telefono" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL", "Numero cellulare" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL", "E-Mail" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN", "Non è possibile anullare questa prenotazione perchè l'ospite è arrivato" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT", "Cauzione non pagata" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON", "Conferma l'annullamento" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLED", "Prenotazione annullata" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL", "N° Giorni all'arrivo" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL", "Tipo di prenotazione" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK", "Nero" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION", "Reception" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET", "Internet" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_NAME", "Nome della camera" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_NUMBER", "Camera numero" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_FLOOR", "Piano" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_DISABLED", "Accesso per disabili" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE", " Massimo occupanti consentito" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV", "Tipo di camera" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_CLASS_DESC", "Descrizione tipo camera" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST", "Elenco dei servizi in camera" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID", "Acconto pagato" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE", "Inserire acconto" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL", "Totale da pagare" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF", "Rif. cauzione" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER", "Numero prenotazione" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED", "Acconto" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE", "Acconto salvato" );
// Modificare lingua
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_TITLE", "Camere disponibili" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME", "struttura" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE", "Tipo d camera" );
//Mostrare form  ospite
jr_define( "_JOMRES_COM_MR_DISPGUEST_EDITDETAILS", "Modifica i dati dell' ospite" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_FIRSTNAME", "Nome" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_SURNAME", "Cognome" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_HOUSE", "Via" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_STREET", "Via" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_TOWN", "Città" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_POSTCODE", "CAP" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_LANDLINE", "Telefono" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_MOBILE", "Cellulare" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_FAX", "Fax" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDNO", "Numero di carta di credito" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDISS", "Emissione" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE", "Scadenza" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARISSNO", "Numero emessione" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDNAME", "Nome che appare sulla carta" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_TITLE", "Seleziona una camera" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS", "Durata soggiorno" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS", "N° ospiti" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE", "Totale" );
// Scheda camere
jr_define( "_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE", "Camere e struttura" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOM", "Camere" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES", "Servizi in camera" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES", "Tipo di camera" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_PROPERTYS", "Struttura" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES", "Servizi inclusi" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK", "Camera" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE", "Tipo" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME", "Nome" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER", "Numero" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR", "Piano" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS", "Accesso per disabili" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE", "Massimo occupanti consetito" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES", "Servizi" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT", "Camera aggiunta" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT", "Modifica elemento:" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK", "Servizi in camera" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT", "Descrizione della caratteristica" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT", "Servizio aggiunto" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE", "Servizio aggiornato" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK", "Tipo di camera" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV", "Abbreviazione tipo di camera" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC", "Descrizione tipo di camera" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT", "Tipo di camera aggiunto" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE", "Tipo di camera aggiornato" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT", "Modifica elemento:" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME", "Nome" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET", "Indirizzo" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN", "Cap Città" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION", "Regione" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY", "Paese" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE", "P.iva" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE", "Telefono" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX", "Fax" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL", "E-Mail" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE", "Sito Web" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES", "Servizi" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT", "struttura aggiunta" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE", "struttura aggiornata" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK", "Servizi inclusi" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV", "Abbreviazione dei servizi inclusi" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC", "Descrizione dei servizi offerti dalla struttura" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT", "Servizio aggiunto" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE", "Servizio aggiornato" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_TITLE", "Tariffe" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_RATETITLE", "Nome tariffa" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION", "Descrizione" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_VALIDFROM", "Valido da" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_VALIDTO", "Valido fino" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY", "Tariffa per notte" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MINDAYS", "Minimo  giorni" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MAXDAYS", "Massimo giorni " );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE", "Minimo occupanti consentito" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE", "Massimo occupanti consentito" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS", "Tipo di camera" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN", "Ignorare TPN" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ALLOWWE", "Permetti fine settimana" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT", "Tariffa aggiunta" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE", "Tariffa aggiornata" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_LINKTEXT", "Modificare elemento" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE", "Clonare elemento" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_DELETED", "Tariffa eliminata" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT", "Modifica tariffa" );
jr_define( "_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE", "Festività" );
jr_define( "_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE", "Prenotazione salvata" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN", "Check-in ospite " );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT", "Check-out ospite" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS", "Elenco prenotazioni" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS", "Elenco nuove prenotazioni" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_HOME", "Pannello Amministrazione" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN", "Amministra  ospiti" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN", "Amministra struttura" );
jr_define( "_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY", "Controlla la disponibilità" );
jr_define( "_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS", "Conferma tuoi dati" );
jr_define( "_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME", "Nome" );
jr_define( "_JOMRES_FRONT_MR_DISPGUEST_SURNAME", "Cognome" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL", "N° civico" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL", "Indirizzo" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL", "Città" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL", "CAP" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL", "Telefono" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL", "Cellulare" );
jr_define( "_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE", "Non c'è nessuna camera disponibile per i parametri specificato" );
jr_define( "_JOMRES_FRONT_MR_BOOKINGMADE", "<center>Grazie per la tua prenotazione, ti auguriamo un piacevole soggiorno. La  prenotazione ti sarà confermata tramite mail al più presto possibile.</center>" );








jr_define( "_JOMRES_FRONT_MR_BOOKIN_TITLE", "Check-in ospite " );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON", "Seleziona ospite" );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN", "Ospite registrato " );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN", "Non c'è nessun ospite che arriva oggi." );
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_TITLE", "Check-out  ospite " );
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT", "Non c'è nessun ospite che parte oggi." );
//Pannello di configurazione
jr_define( "_JOMRES_COM_A_SUPPLIMENTS", "Supplemento" );
jr_define( "_JOMRES_COM_A_TARIFFS", "Tariffe e valute" );
jr_define( "_JOMRES_COM_A_DISCOUNTS", "Scontistica" );
jr_define( "_JOMRES_COM_A_FILE_UPLOADS", "Carica file " );
jr_define( "_JOMRES_COM_A_CURRENT_SETTINGS", "Impostazione attuale" );
jr_define( "_JOMRES_COM_A_EXPLANATION", "Spiegazione" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON", "Supplemento persona" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC", "Assicurati di impostare SI se vuoi cambiare il suplemento  persona." );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST", "Costo supplemento a persona" );
jr_define( "_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE", "Deposito richiesto in percentuale" );
jr_define( "_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC", "Se impostato in SI, viene richiesto il deposito in percentuale del totale della prenotazione altrimenti si applica un valore fisso." );
jr_define( "_JOMRES_COM_A_DEPOSIT_VALUE", "Deposito richiesto" );
jr_define( "_JOMRES_COM_A_TARIFFS_PER", "Per persona, per notte" );
jr_define( "_JOMRES_COM_A_TARIFFS_PER_DESC", "Seleziona SI se vuoi chiedere il pagamento per persona a notte, NO  per camera a notte." );
jr_define( "_JOMRES_COM_A_UPLOADS_FILESIZE", "dimensione del file" );
jr_define( "_JOMRES_COM_A_UPLOADS_FILESIZE_DESC", "dimensione massima del file  immagine in kilobyte" );
jr_define( "_JOMRES_FRONT_MR_BOOKED", "Occupato" );



jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS", "Dati della prenotazione" );






jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT", "Ricorda che una prenotazione è un contratto giuridicamante vincolante,in caso dovessi annullare o abbreviare il tuo soggiorno ti sarà trattenuta la caparra come penale." );

jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO", "<i>Penalità per anullamento o riduzione del periodo di soggiorno:" );




jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS", " 14 giorni" );


jr_define( "_JOMRES_COM_CONFIRMATION_PRINT", "Stampa la lettera di conferma." );
jr_define( "_JOMRES_COM_INVOICE_TITLE", "Stampa fattura" );
jr_define( "_JOMRES_COM_INVOICE_STAYNIGHTS", "Numero notti: " );
jr_define( "_JOMRES_COM_INVOICE_CONTRACTAGREED", "Totale (alla prenotazione): " );
jr_define( "_JOMRES_COM_INVOICE_COSTPERNIGHT", "Tariffa per notte: " );
jr_define( "_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL", "totale" );
jr_define( "_JOMRES_COM_INVOICE_LETTER_INTRO1", "Grazie per il suo soggiorno presso" );
jr_define( "_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY", "a presto." );
jr_define( "_JOMRES_COM_INVOICE_PRINT", "Stampa fattura" );
jr_define( "_JOMRES_COM_ADDSERVICE_TITLE", "Aggiungi servizio al conto" );
jr_define( "_JOMRES_COM_ADDSERVICE_DESCRIPTION", "Descrizione del servizio" );
jr_define( "_JOMRES_COM_ADDSERVICE_VALUE", "Costo del servizio" );
jr_define( "_JOMRES_COM_ADDSERVICE_BOOKINGDESC", "Altri elementi fatturati" );
jr_define( "_JOMRES_COM_ADDSERVICE_TOTALVALUE", "Altri elementi fatturati, valore totale: " );
jr_define( "_JOMRES_COM_ADDSERVICE_SAVEMESSAGE", "Elementi aggiunto al conto" );
jr_define( "_JOMRES_UPLOAD_IMAGE", "Carica immagine" );
jr_define( "_JOMRES_FILE_UPLOAD", "Carica file" );
jr_define( "_JOMRES_FILE_ERROR_TYPE", "Si possono caricare solo inseguenti tipi di file:\n" );
jr_define( "_JOMRES_FILE_ERROR_EMPTY", "Per favore seleziona un file prima di caricare." );
jr_define( "_JOMRES_FILE_ERROR_NAME", "La stringa può solamente contenere caratteri alfanumerici e non spazi, per favore." );
jr_define( "_JOMRES_FILE_ERROR_SIZE", "La dimensione del file eccede il massimo che consentito." );
jr_define( "_JOMRES_FILE_NOT_UPLOADED", "File NON caricato." );
jr_define( "_JOMRES_FILE_UPDATED", "Il tuo file è stato caricato." );
jr_define( "_JOMRES_COM_A_JSCALENDAR", "Calendario JS" );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE", "Lingua del calendario JS" );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE_DESC", "Scegliare la lingua del file utilizzata nel calendario Javascript. Si prega notare che è possibile che alcuni calendari contengano bugs, Vedi //sourceforge.net/per maggiori informazioni." );
jr_define( "_JOMRES_COM_A_CALENDARCSS", "File CSS di calendario JS" );
jr_define( "_JOMRES_COM_A_CALENDARCSS_DESC", "Scegli il file CSS che deve essere utilizzato nel calendario Javascript." );
jr_define( "_JOMRES_COM_A_ODDS", "Quotazioni." );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Elenca chiamate al minicomponente ' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Seleziona SI per vedere in fondo alla pagina il log dei minicomponenti chiamati al termine della esecuzione di Jomres. Disabilita anche la funzione interna di reindirizzamento. Funzione utile ad individuare quali minicomponenti stanno eseguendo determinati servizi.' );
jr_define( "_JOMRES_FILE_DELETE", "Elimina questa foto" );
jr_define( "_JOMRES_FILE_DELETED", "File eliminato" );
jr_define( "_JOMRES_COM_MR_ROOM_DELETE", "Elimina" );
jr_define( "_JOMRES_COM_MR_ROOM_UNABLETODELETE", "Non è possibile eliminare questo pulsante, ci sono prenotazioni." );
jr_define( "_JOMRES_COM_MR_ROOM_DELETED", "Camera eliminata" );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_DELETE", "Elimina la caratteristica della camera" );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE", "Non è possibile eliminare questa caratteristica della camera, perchè assegnata ad altre camere. Elimina la caratteristica da quelle camere e riprova." );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_DELETED", "Caratteristica della camera eliminata" );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_DELETE", "Elimina la caratteristica della struttura" );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE", "Non è possibile eliminare questa caratteristica della struttura, perchè è assegnata ad altre strutture. Elimina la caratteristica da quelle strutture e riprova." );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_DELETED", "Caratteristica della struttura eliminata" );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_DELETE", "Elimina il tipo di camera" );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS", "Non è possibile eliminare questo tipo di camera, perchè è stato assegnato ad altre camere." );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS", "Non è possibile eliminare questo tipo d camera, perchè è stato assegnato ad una tariffa." );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_DELETED", "Tipo di camera eliminato" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETE", "struttura eliminata" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETED", "struttura eliminata" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS", "Non puoi eliminare questa struttura." );
jr_define( "_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE", "Larghezza dell'immagine a grandezza naturale" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK", "Vedi Mappa" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION", "Descrizione" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES", "Orario di check-in" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES", "Attività della zona" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS", "Come aarivare" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS", "Aeroporti" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT", "Altri mezzi transporti" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS", "Politica e clausola esonerativa" );
jr_define( "_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS", "Indirizzo" );
jr_define( "_JOMRES_COM_A_VISITORSCANBOOKONLINE", "Permettere prenotazione diretta" );
jr_define( "_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC", "Imposta SI per permettere le prenotazioni on-line." );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS", "Prenotazioni  per un periodo fisso." );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC", 'Se imposti SI, la prenotazione sarà per un periodo fisso. Se imposti NO, controlla di non aver impostato in SI  "Giorno di arrivo predefinito" (a meno che si voglia forzare gli arrivi in un giorno predefinito) in altro modo non sarà posibile ottenere link multipli del calendario disponibilit&agrave;.' );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD", "Periodo di prenotazione: " );
jr_define( "_JOMRES_COM_A_BOOKING", "Camere prenotazione" );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS", "Periodo massimo, Esempio 3x7 periodo di prenotazione = 21 giorni" );
jr_define( "_JOMRES_COM_A_SINGLEROOMPROPERTY", "Struttura con una sola camera" );
jr_define( "_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC", "Es. Un'appartamento per vacanze. In questo caso, assicurarti di avere una sola camera registrata in ciascuna struttura." );
jr_define( "_JOMRES_FRONT_MR_REVIEWBOOKING", "Vedi prenotazione" );
jr_define( "_JOMRES_COM_MR_CONFIRMBOOKING", "Conferma prenotazione" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_MONDAY", "Lunedì" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_TUESDAY", "Martedì" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY", "Mercoledì" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", "Giovedì" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", "Venerdì" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", "Sabato" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", "Domenica" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR", "Lun" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR", "Mar" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR", "Mer" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR", "Gio" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR", "Ven" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR", "Sab" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR", "Dom" );
jr_define( "_JOMRES_COM_A_AVLCAL", "Calendario di disponibilità." );
jr_define( "_JOMRES_COM_AVLCAL_TODAYCOLOUR", "Colore delle carattere per la data attuale " );
jr_define( "_JOMRES_COM_AVLCAL_INMONTHFACE", "Colore delle carattere per i giorni nel mese mostrato " );
jr_define( "_JOMRES_COM_AVLCAL_OUTMONTHFACE", "Colore delle carattere per i giorni che non sono nel mese mostrato" );
jr_define( "_JOMRES_COM_AVLCAL_INBGCOLOUR", "Colore dello sfondo della casella per i giorni quando è disponibile la camera/struttura." );
jr_define( "_JOMRES_COM_AVLCAL_OUTBGCOLOUR", "Colore dello sfondo per i giorni che non stanno nel mese mostrato" );
jr_define( "_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR", "Sfondo della casella per giorni occupati" );
jr_define( "_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR", "Sfondo della casella per le camere con la prenotazione provvisoria (prenotazioni con nessun deposito fatto)" );
jr_define( "_JOMRES_COM_AVLCAL_PASTCOLOUR", "Fondo della casella per date  passate" );
jr_define( "_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY", "Occupata/ non disponibile" );
jr_define( "_JOMRES_COM_AVLCAL_INMONTHFACE_KEY", "Disponibile per la prenotazione" );
jr_define( "_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY", "Prenotazioni provvisorie" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO", "Giorno di arrivo predefinito" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC", "Solamente per strutture che offrono periodi fissi di prenotazione. Seleziona il giorno degli arrivi." );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY", "Giorno di arrivo fisso" );
jr_define( "_JOMRES_FRONT_MR_FIXEDPRIOD1", "Periodo di soggiorno (giorni)" );
jr_define( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR", "Mostrare calendario della disponibilità" );
jr_define( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC", "Colloca questo in SI  per mostrare il calendario della disponibilità." );
jr_define( "_JOMRES_FRONT_AVAILABILITY", "Disponibilità" );
jr_define( "_JOMRES_FRONT_CALENDAR_CLICKDATES", "Fai clic per  per vedere le date libere nel modulo di prenotazione." );
jr_define( "_JOMRES_FRONT_BLACKBOOKING", "Camere indisponibili" );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_NEW", "Nuova camera indisponiblie" );
jr_define( "_JOMRES_FRONT_DELETEGUEST", "Check-out  ospite" );
jr_define( "_JOMRES_FRONT_DELETEGUEST_GUESTDELETED", "Ospite eliminato" );
jr_define( "_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST", "Non è possibile eliminare questo ospite perchè ha delle prenotazioni aperte. " );
jr_define( "_JOMRES_COM_INVOICE_ACTUALROOMCOST", "Prezzo della camera: " );






jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING", "Fumatori" );
jr_define( "_JOMRES_FRONT_ROOMSMOKING_EITHER", "indifferente" );
jr_define( "_JOMRES_COM_CALENDAROUTPUT", "Formato del calendario" );
jr_define( "_JOMRES_COM_CALENDAROUTPUT_DESC", "Questo permette agli utenti di cambiare il formato delle date" );
jr_define( "_JOMRES_COM_CALENDARINPUT", "Formatto di immissione date nel calendario" );
jr_define( "_JOMRES_COM_CALENDARINPUT_DESC", "Questo permette al utenti cambiare il formato di immissione delle date." );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT", "Le prenotazioni per un periodo fisso permettono brevi pause" );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS", "Durata della pausa" );
jr_define( "_JOMRES_COM_MR_VRCT_PUBLISHED", "Pubblicato" );
jr_define( "_JOMRES_COM_A_PAYPAL", "Paypal" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL", "Tracce" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_DATE", "Data" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_TIME", "Ora" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_USER", "Utente (nome utente)" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_OPERATION", "Operazione" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_VIEWSQL", "Visualizza dati" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_DATE", "Filtro  data" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME", "Filtro nome utenti" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION", "Filtro operazione" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_STATUS", "Stato" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_PENDING", "Arrivi in sospeso" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY", "Arrivi di oggi" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT", "In casa" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY", "Partenze di oggi" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE", "Partenza scaduta" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_LATE", "Non  arrivato" );
jr_define( "_JOMRES_MR_AUDIT_UNKNOWNUSER", "Utente sconosciuto" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM", "Camera creata" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM", "Camera aggiornata" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM", "Camera eliminata" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE", "Caratteristica della camera creata" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE", "Caratteristica della camera aggiornata" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE", "Caratteristica della camera eliminata" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE", "Tipo di camera inserito" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE", "Tipo di camera aggiornato" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE", "Tipo di camera eliminato" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_PROPERTY", "struttura creata" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_PROPERTY", "struttura aggiornata" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_PROPERTY", "struttura eliminata" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE", "Caratteristica della struttura creata" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE", "Caratteristica della struttura aggiornata" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE", "Caratteristica della struttura eliminata" );
jr_define( "_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS", "Impostazione della struttura eliminata" );
jr_define( "_JOMRES_MR_AUDIT_PUBLISH_PROPERTY", "struttura pubblicata" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_TARIFF", "Tariffa creata" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_TARIFF", "Tariffa aggiornata" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_TARIFF", "Tariffa eliminata" );
jr_define( "_JOMRES_MR_AUDIT_ADDSERVICE", "Costo del servizio aggiunto" );
jr_define( "_JOMRES_MR_AUDIT_BOOKEDGUESTIN", "Check in ospite" );
jr_define( "_JOMRES_MR_AUDIT_BOOKEDGUESTOUT", "Check out ospite" );
jr_define( "_JOMRES_MR_AUDIT_ENTEREDDEPOSIT", "Immetti deposito " );
jr_define( "_JOMRES_MR_AUDIT_INSERT_GUEST", "Ospite aggiunto" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_GUEST", "Ospite aggiornato" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_GUEST", "Ospite eliminato" );
jr_define( "_JOMRES_MR_AUDIT_BOOKED_ROOM", "Prenotazione una camera" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_EXTRA", "Crea un extra" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_EXTRA", "Aggiorna un extra" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_EXTRA", "Elimina un extra" );
jr_define( "_JOMRES_MR_AUDIT_PUBLISH_EXTRA", "Extra pubblicato." );
jr_define( "_JOMRES_MR_AUDIT_BLACKBOOKING", "Immetti una prenotazione nera ." );
jr_define( "_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE", "Elimina prenotazione nera ." );
jr_define( "_JOMRES_COM_MR_EXTRA_TITLE", "Extra" );
jr_define( "_JOMRES_COM_MR_EXTRA_DESC", "Descrizione" );
jr_define( "_JOMRES_COM_MR_EXTRA_NAME", "Nome" );
jr_define( "_JOMRES_COM_MR_EXTRA_PRICE", "Costo" );
jr_define( "_JOMRES_COM_MR_EXTRA_SAVE_UPDATED", "Extra aggiornato" );
jr_define( "_JOMRES_COM_MR_EXTRA_LINKTEXT", "Modificare l'elemento" );
jr_define( "_JOMRES_COM_MR_EXTRA_DELETED", "Extra eliminato" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS", "Extra" );
jr_define( "_JOMRES_COM_A_EXTRAS", "Mostrare extras al momento della prenotazione" );
jr_define( "_JOMRES_COM_A_EXTRAS_DESC", "Imposta in SI per mostrare gli extra che vuoi offrire ai tuoi ospiti" );
jr_define( "_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP", "Extra facoltativi." );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS", "Data di inizio e di fine dell' indisponibilità" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES", "Motivazione" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS", "Camere Indisponibili" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR", "Errore durante la prenotazione, una o più  camere selezionate non sono libere." );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT", "Camere inclusa fra le indisponibili" );
jr_define( "_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING", "Camere indisponibili" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS", "Nessuna camera indisponibile da elencare" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS", "Numero di stelle" );
jr_define( "_JOMRES_COM_A_SMOKING", "Mostrare l'opzione fumatori" );
jr_define( "_JOMRES_COM_A_SMOKING_DESC", "Scegli SI  per mostrare l'opzione fumatori." );
jr_define( "_JOMRES_COM_A_RESET", "Reimpostare" );
jr_define( "_JOMRES_COM_A_PAYPAL_CANCELLED", "Prenotazione annullata" );
jr_define( "_JOMRES_FRONT_MR_SEARCH_HERE", "Ricerca quì per:" );
jr_define( "_JOMRES_COM_A_SMOKING_OPTION", "Opzione fumatori predefinita" );
jr_define( "_JOMRES_COM_A_CURRENCYSYMBOL", "Simbolo di valuta" );
jr_define( "_JOMRES_COM_A_CURRENCYSYMBOL_DESC", 'Es. , si prega notare che si devono utilizzare i codici degli enti HTML per il simbolo richiesto. Per vedere un elenco di questi visitare <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( "_JOMRES_COM_A_CURRENCYCODE", "Codice di valuta" );
jr_define( "_JOMRES_COM_A_CURRENCYCODE_DESC", 'Es. EUR. Questo è necessario se si utilizza  Paypal. Per vedere un elenco di questi codici visita <a href="http://www.xe.com/iso4217.htm">XE.com</a>"' );
jr_define( "_JOMRES_COM_A_CLICKFORMOREINFORMATION", "Dettagli" );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO", "Limitare prenotazione avanzata" );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC", "Imposta in  SI se vuoi limitare le prenotazioni anticipate (utilizza il campo di seguito per impostare  i giorni)." );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS", "Giorni di prenotazione avanzata limitati a:" );
jr_define( "_JOMRES_COM_A_TAX_WARNING", "<font color=red>NOTA: Non è raccomandato impostare le due opzioni qui di seguito in SI, devi utilizzare solamente uno due metodi di computazione dell' imposta disponibili. </FONT>" );
jr_define( "_JOMRES_COM_FRONT_ROOMTAX", "Imposta" );
jr_define( "_JOMRES_COM_A_ROOMTAX", "Imposta della camera" );
jr_define( "_JOMRES_COM_A_ROOMTAX_DESC", "Ex imposta di soggiorno. è possibile applicare un' importo  fisso o una percentuale da applicate al costo della camera." );
jr_define( "_JOMRES_COM_A_ROOMTAX_FIXED", "Importo fisso  (imposta)" );
jr_define( "_JOMRES_COM_A_ROOMTAX_PERCENTAGE", "Imposta percentuale" );
jr_define( "_JOMRES_COM_A_EUROTAX", "Imposta" );
jr_define( "_JOMRES_COM_A_EUROTAX_PERCENTAGE", "Imposta percentuale" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVE", "Archiviare tutte le registrazioni" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE", " Registrazione archiviate" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVED_AUDIT", "Audit registri verificati" );
jr_define( "_JOMRES_FRONT_TARIFFS", "Le nostre tariffe" );
jr_define( "_JOMRES_FRONT_TARIFFS_TITLE", "Tariffa" );
jr_define( "_JOMRES_FRONT_TARIFFS_DESC", "Descrizione della tariffa" );
jr_define( "_JOMRES_FRONT_TARIFFS_ROOMTYPE", "Tipo di camera" );
jr_define( "_JOMRES_FRONT_TARIFFS_STARTS", "Valida da" );
jr_define( "_JOMRES_FRONT_TARIFFS_ENDS", "Valida fino" );
jr_define( "_JOMRES_FRONT_TARIFFS_PPPN", "Per persona a notte" );
jr_define( "_JOMRES_FRONT_TARIFFS_PN", "a notte" );
jr_define( "_JOMRES_FRONT_TARIFFS_NOTWEEKEND", "Non includere fine settimana" );
jr_define( "_JOMRES_FRONT_TARIFFS_MINDAYS", "Durata minima della permanenza (gg)" );
jr_define( "_JOMRES_FRONT_TARIFFS_MAXDAYS", "Durata massima della permanenza (gg)" );
jr_define( "_JOMRES_FRONT_TARIFFS_MINPEEPS", "Minimo occupanti" );
jr_define( "_JOMRES_FRONT_TARIFFS_MAXPEEPS", "Massimo occupanti" );
jr_define( "_JOMRES_FRONT_PREVIEW", "Anteprima" );
jr_define( "_JOMRES_COM_A_EDITINGMODEON", "Modificare etichette" );
jr_define( "_JOMRES_COM_A_EDITING_CURRENTTEXT", "Testo attuale" );
jr_define( "_JOMRES_COM_A_EDITING_NEWTEXT", "Testo nuovo" );
jr_define( "_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT", "Aggiornare testo cliente." );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE", "Modifica lingua" );
jr_define( "_JOMRES_COM_A_AUDITING_SHOWING", "Mostrando ultimi 200 registri" );
jr_define( "_JOMRES_FRONT_PTYPE", "Tipo di struttura" );
jr_define( "_JOMRES_COM_PTYPES_LIST_TITLE", "Elencare tipi di struttura" );
jr_define( "_JOMRES_COM_PTYPES_LIST_TITLE_EDIT", "Modificare tipo di struttura" );
jr_define( "_JOMRES_COM_PTYPES_PTYPE", "Tipo di struttura" );
jr_define( "_JOMRES_COM_PTYPES_PTYPE_DESC", "Descrizione del tipo di struttura" );
jr_define( "_JOMRES_COM_PTYPES_SAVED", "Tipo di  struttura salvato" );
jr_define( "_JOMRES_COM_PTYPES_UNABLETO_DELETE", "Non è possibile eliminare il tipo di struttura. Il tipo di struttura è assegnato a una o più strutture, assegna di nuovo le strutture prima provare ad eliminare." );
jr_define( "_JOMRES_COM_PTYPES_DELETED", "Tipo di struttura eliminati" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY", "Memo del pagamento" );
jr_define( "_EXTRAS_NOEXTRAS", "Nessun servizio addizionale da aggiungere alla fattura" );
jr_define( "_JOMRES_COM_CHARGING_DEPOSIT", "Deposito" );
jr_define( "_JOMRES_COM_CHARGING_FULLAMT", "Quantità completa" );
jr_define( "_JOMRES_COM_CHARGING_CONFIG", "Costo applicato al momento della prenotazione" );
jr_define( "_JOMRES_COM_CHARGING_CONFIG_DESC", " Sceglie deposito se deve essere richiesta solo una caparra, altrimenti verrà richesto il pagamento della somma completa." );
jr_define( "_JOMRES_COM_MONTHSTOSHOW", "Mesi del calendario da mostrare" );
jr_define( "_JOMRES_COM_MONTHSTOSHOW_DESC", "Nella disponibità della camera, quanti mesi del calendario devono essere mostrati" );
jr_define( "_JOMRES_INVOICE_SIGNEDONBEHALFOF", "   " );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Gateways' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Cancella' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Seleziona la camera che desideri tenere fuori servizio, e le date. Se la camera non ha il ceck selezionato, non potr&agrave; essere inclusa nelle indisponibili fino a che la prenotazione non sar&agrave; cancellata.<br/> Quando hai selezionato le date appropriate, clicca il bottune blu applicare ricontrolla la disponibilit&agrave;. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Sembra che sei stato scollegato per inattivit&agrave;.Perfavore, esegui nuovamente il login.</b> Please log in and try again.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Ragione' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Usi dei gateway di pagamento' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Seleziona SI se usi il pagamento online.. <b>Nota:</b>Questo non disabilita il calcolo del deposito mostrato durante il processo di prenotazione. Per disabilitarlo puoi modificare i template che mostrano le camere e rimuovere gli elementi relativi ai depositi.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Seleziona un metodo di pagamento	.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway abilitato' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Modifica il dettaggio dei plug-in' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Settaggi plug-in inseriti' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Visualizza il sito di questa struttura' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Link esterno' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Inserisci qui un link al tuo sito.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Vedi Carta di credito' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Aggiorna Carta di credito' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Edita Carta di Credito' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Dimensione icone' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Caricamento gruppo di immagini' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Immagini gi&agrave; presenti nella cartella' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Slideshows' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Mostra link slideshows' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Mostra slideshow inline' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Larghezza miniatura Slideshow' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Slideshow' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Ci dispiace, nessuna immagine disponibile per questa struttura' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Mostra link alle tariffe' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Popups permessi' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Se impostato su NO i link che normalmente sarebbero stati aperti in una finestra popup verranno aperti in linea. SPERIMENTALE! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Carica foto' );
jr_define( '_JOMRES_A_TABS_MISC', 'Misc' );
jr_define( '_JOMRES_A', 'Configurazione Sito' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Usa le impostazioni di struttura globali' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Seleziona SI se vuoi forzare tutte le strutture ad usare solo le funzioni definite dal Webmaster.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Icona' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Seleziona il plugin di ricerca che vuoi usare.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>La tua ricerca non ha fornito risultati. Ti preghiamo di modificarne i parametri e provare ancora.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Confermi' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Prenota Subito!' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Prenota Subito!' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Numero di sicurezza' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Mostra tariffe in linea' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Mostra Indirizzo' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Mostra informazioni sulla struttura ricettiva' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Mostra disponibilità delle camere' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Tariffe' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Mostra le informazioni relative all indirizzo sotto questo link' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Mostra i dettagli della struttura sotto questo link' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Mostra le strutture e la disponibilita sotto questo link' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Mostra le tariffe sotto questo link' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Elenca le strutture ricettive per stato' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Elenca le strutture ricettive per regione' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Elenca le strutture ricettive per citt&agrave;' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Seleziona le caratteristiche che ti interessano e avvia la ricerca.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Cerca' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Inserisci i termini da cercare qui sotto e avvia la ricerca.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Termine/i da cercare: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Seleziona le date che ti interessano e avvia la ricerca..' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Elenca le strutture ricettive per tipologia' );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrare la data di partenza inserita?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Selezionare NO se non vuoi mostrare il box di selezione per la data di partenza. Utilizza NO solo se sai cosa stai facendo, cosi facendo la data di partenza selezionata sara sempre il giorno dopo quella di arrivo." );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Limite descrizione' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Limita il numero di caratteri delle descrizioni-struttura mostrate nell'elenco strutture ." );
// v1.4g
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tariffe Flat' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Media' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Seleziona il tipo di tariffa che vuoi utilizzare' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Hai due tipi di tariffe da utilizzare. La prima, il metodo 'tariffa flat' ti permette di offrire tariffe basate sul tipo di trattamento, ad esempio trattamento bed and breakfast, mezza pensione o pensione completa. Scegli la tariffa 'media' se vuoi regolare le tue tariffe in base al periodo della prenotazione, ad esempio, bassa stagione, media o alta. Il sistema trovera tutte le tariffe per ciascun giorno di prenotazione, facendo la media tariffaria del periodo" );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() formato data utilizzato?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Seleziona SI se vuoi formattare le date secondo la funzione php date() (Vedi <a href="http://www.php.net/manual/en/function.date.php">Qui</a>). Seleziona NO per usare la formattazione strftime() (Vedi <a href="http://www.php.net/manual/en/function.strftime.php">Qui</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Pubblica' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Sospendi' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Utilizza tipo camera globale' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Impostare su SI se vogliamo forzare le struttura ad utilizzare solo i tipi camera predefiniti dal webmaster.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'Per assegnare una foto a questo tipo di camera devi prima caricare una immagine nella cartella /images/stories/jomres/rmtypes/. ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Errore inserimento colore di sfondo' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Form predefinita per nazione' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Elementi evidenziati in rosso sono richiesti.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Gli utenti possono registrare le proprie strutture' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Impostare su SI se vogliamo che gli utenti siano in grado di registrare le proprie strutture senza il nostro intervento.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Inserire Regione e Nazione della vostra struttura.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Completare i dettagli della vostra struttura.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementi evidenziati in rosso sono richiesti.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Crea struttura' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Spiacente, non possiamo creare una struttura su questo sistema. Devi essere connesso come utente registrato." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Crea struttura: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Per utente: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Mostra calendario dall&acute;inizio dell&acute;anno?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Il calendario mostra dall&acute;inizio dell&acute;anno corrente.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Numero di camere disponibili' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Indietro ai dettagli struttura' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Tipo di camera' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limite di ricerca casuale' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Mostra collegamento convertitore valute di google nella lista tariffe?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Converti costo in :' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Permetti le modifiche utilizzando un editor HTML?' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Usare questo modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone, poi selezionare la camera desiderata dalla lista. Cliccare qualsiasi camera disponibile per aggiungerla alla prenotazione. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando il modulo avr&agrave; abbastanza informazioni troverai il pulsante per inviare la tua prenotazione e confermare.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Usare questa modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando la modulo avr&agrave; abbastanza dati informativi troverete il pulsante per inviare la vostra prenotazione.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Dati prenotazione' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleziona i dettagli della prenotazione' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilit&agrave; ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Seleziona la camera desiderata' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Vedi qui se la struttura &egrave; disponibile al momento.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Servizi Extra opzionali' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleziona un servizio aggiuntivo che volete includere nella prenotazione' );
jr_define( '_JOMRES_COM_PERDAY', 'Per notte' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Il tuo indirizzo' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Inserire i vostri dettagli. Nota che tutti i campi sono richiesti eccetto il numero di cellulare' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Camere disponibili' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Camere selezionate' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>La data possibile di arrivo pi&ugrave; vicina &egrave;: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Per notte:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Totale:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extra:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Tasse:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Sconto:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Totale generale:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Ospiti' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Aggiungi la camera selezionata' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Seleziona per rimuovere la camera' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipi di ospite' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Tipo' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Il genere di cliente, es Bambini  5-10 anni, o Studenti ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Note' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Tutte le informazioni riguardo il tipo cliente' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Massimo' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Il masimo numero  di tipi clienti che possono essere selezionati nella modulo di prenotazione' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'la percentuale' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'La Cifra calcolata &egrave; una percentuale sulla base di tariffe calcolate per la stanza. Se questa &egrave; impostata su NO la cifra &egrave; specificata semplicemente da aggiungere o sottrarre dalla base del valore della stanza.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Aggiungi variabile?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'La cifra calcolata &grave; aggiunta o rimossa dalla base della cifra calcolata per la stanza. Impostare questo su NO se vogliamo ci sia uno sconto dalla base della tariffa. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Variabili' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Il costo delle variabili' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modifica tipo ordine cliente' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Pubblica tipo cliente' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Cancella tipo cliente' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Crea tipo cliente' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Aggiorna tipo cliente' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Aggiorna tipo cliente' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Mostra collegamento alla lista delle stanze nella pagina dettagli struttura?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Mostra <b>solo</b> calendario disponibilit&agrave; /Lista camera?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Impostare su SI per disabilitare intestazione e dettagli, in questo modo vedremo solo le liste e il calendario nella sezione strutture.  (es appartamenti, cottage ecc).' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Arr-Part intervallo minimo' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Il minimo di giorni che deve intercorrere tra la data di partenza e di arrivo in fase di prenotazione.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Form prenotazione lista camere mostra il numero della camera' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Form prenotazione lista camere mostra il nome della camera' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Form prenotazione lista camere mostra il nome della tariffa' );
jr_define( '_JOMRES_ORDER', 'Ordine' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Richiesto' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Giorni prima dell&acute;arrivo' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Il minimo numero di giorni che devono passare, da "oggi", prima della data di arrivo.' );
jr_define( '_JOMRES_DTV', 'Tipo data variazioni' );
jr_define( '_JOMRES_DTV_DOW', 'Giorno della settimana' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tipo ospite predefinito' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Il numero predefinito del primo tipo ospite. Se utilizziaamo i tipi ospite, questo &egrave; il primo numero predefinito per il primo tipo opsite nella form di prenotazione che viene impostata.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Solo gli utenti registrati possono prenotare online?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Spiacente, dovete registrarvi per poter prenotare online. Cliccare qui per registrarsi al sito. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Colore font per attuali prenotazioni' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Bordo settimana' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Stanza prenotata' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Prenotazione fasulla' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Deposito pi&ugrave; vicino?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Richiedi una cauzione?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'La tariffa è settimanale?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Abbiamo questa opzione per storicizzare la tariffa caricata per ogni giorno  o valori settimanali. Se storicizziamo queste settimanalmente, bobbiamo impostare la opzione su SI.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Costo per settimana' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Date di arrivo fisse ricorrenti: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quando le date di arrivo fisse sono selezionate, viene mostrato il numero che appare nella lista a discesa per le date disponibili' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Opzione fumatori non valida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Data arrivo non corretta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data partenza non corretta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Il perido selezionato &grave; troppo breve. Dovete scegliere pi&grave; giorni tra la data di arrivo e quella di partenza:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Il vostro intervallo &egrave;' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Variante tipo ospite non corretta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Seleziona il numero di ospiti ed il tipo' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Siete troppi per la tariffa disponibile' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Hai scelto pi&ugrave, stanze che ospiti, clicca su un nome stanza per rimuoverlo dalla selezione' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Tropppi ospiti per i letti disponibili' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Desideri scegliere pi&ugrave; stanze' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Seleziona una stanza' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Il nome &egrave; richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Il cognome &egrave; richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Nome casa o numero richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Indirizzo richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Citt&agrave; richiesta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Regione richiesta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Codice postale richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Nazione richiesta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefono richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Cellulare richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Indirizzo Email richiesto' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Indirizzo Email non valido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Impossibile validare dominio email' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Abbiamo camere libere!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Non hai ancora selezionato una camera' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Prenotazione no.' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Si al colore di sfondo nel messaggio' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump vars del template?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Impostare questo per abilitare un dump DHTML delle variabili del template per ogni template FRONTEND  utile se volgliamo che certi elementi siano visibili con certi template.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figure a percentuale' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Impostare questo su SI se la singola persona ha un calcolo a figuara a percentuale. Oppure viene applicato il sistema flat rate.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Camere disponibili/limite tariffa' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Usa questo campo inserimento per inserire il numero di stanze disponibili e le tariffe che mostreremo nel modulo di prenotazione. Impostando su zero nessun limite viene praticato. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Non abbiamo camere disponibili al momento!' );
// Translate from here
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Prenota ora: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Modalità di modifica globale?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Fai attenzione. Se impostata su SI, editing mode agisce sul testo personalizzato per TUTTE le strutture nel sistema per la caratteristica che stai modificando.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbolo globale di valuta' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Componente wrapped' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Seleziona SI se il componente risulta wrapped, in questo modo le aree moduli e header non saranno visibili' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Property Manager' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Solo Weekend' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Giorni Weekend' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Seleziona i tuoi giorni weekend. Le tariffe che permettono o non permettono i weekend prenderanno in considerazione questa scelta nella generazione delle liste camere.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Seleziona la tua nazione prima di aggiungere qualsiasi informazione riguardo la struttura' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Salva i cambiamenti alla struttura prima di caricare le immagini' );
jr_define( '_JOMRES_TARIFFSFROM', 'Prezzi da - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'tutte' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Cerca per Nazione' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Cerca per Regione' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Cerca per comune' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Cerca per servizi.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Cerca' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Inserisci la parola nel box e invia.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Cerca parola(e): ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Inserisci le date di arrivo e partenza e clicca il pulsante per trovare tutte le strutture disponibili per i giorni selezionati.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Elenca tutte le strutture in base al tipo.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Elenca tutte le strutture in base al tipo di camera' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Standard' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Nome struttura' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Regione struttura' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Comune struttura' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Stelle' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Elenco strutture' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Scheda struttura - ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Form Prenotazione' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Aggiorna il tuo indirizzo' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ri-controllo disponibilita camere<br/>(La selezione della camera sara resettata)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Verifica disponibilita' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Attendi. modifica servizi extra' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Attendi. Modifica camera selezionata' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Attendi. Modifica indirizzo selezionato' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Uno o  pi&ugrave; dati indirizzo sono incorretti.' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'File uploads' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Usa valuta generale?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Seleziona SI per utilizzare la stessa moneta su TUTTE le strutture (e.g. & # 8 3 6 4 ;)' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Immagine Camera' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Formato valuta' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Mostra opzioni Managers\'s come immagini' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opzioni di ricerca' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Logs disponibili' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'No log entries. Questo e normale, devi modificare manualmente jomres.php per attivare il logging' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Messaggio' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normale' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avanzato' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microgestione' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Configurazione tariffe' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Attenzione: Cambiare spesso il metodo di gestione tariffe potrebbe causare una perdita di dati. Vedi la nota sotto a riguardo</b>.
<br/><br/>
Sono disponibili tre opzioni di configurazione delle tariffe.<br/>
Normale: Avrai una tariffa per ciascun tipo di camera che sara valido per i prossimi 10 anni.<br/>
Microgestione: E possibile modificare il prezzo singolarmente per ciascun giorno relativo a ogni singola camera/genere di struttura. <br/>
Avanzato: Il \"vecchio\" metodo Jomres di gestione tariffe. <br/>
<br/>
Ciascuna opzione di gestione permette di scegliere il metodo di configurazione che soddisfa al meglio le tue esigenze.<br/>
L'opzione Normale, la più semplicistica ma la più facile da capire, mette in corrispondenza camere e tariffe con il tipo di camera\"ad esempio matrimoniale\" e permette quindi di configurare camere e prezzi nella stessa pagina.<br/>
Microgestione permette di variare i prezzi giornalmente senza aver bisogno di gestire serie infinite di tariffe. Il risultato e un numero di tariffe per la gestione di un certo periodo di tempo, ma non puoi sovrapporre le tariffe tra di loro.<br/>
La gestione avanzata ti permette di creare una stanza e associarla con un tipo di camera. Quindi puoi creare una tariffa e associarla con un tipo di camera ad esempio \"matrimoniale\". Con questo metodo &egrave; possibile sovrapporre le tariffe tra loro, per esempio un tipo di camera \"matrimoniale\" puoi avere una tariffa per bed and breakfast, una per la mezza pensione e una per la pensione completa. La gestione avanzata richiede un pochino di attenzione ai dettagli in quanto possibile disassociare una camera o una tariffa da un tipo di camera, o inserire date errate per un determinato periodo, ad esempio alta stagione, ma questo tipo di configurazione rende possibili opzioni che gil metodi normale e microgestione non offrono. <br/>
<br/>
Siccome La gestione Normale e la MicroGestione richiedono una configurazione specifica delle camere e delle tariffe per far funzionare questi tipi di gestione il sistema potrebbe avere bisogno di resettare alcuni dati per rendere le opzioni sulle tariffe premodifica compatibili con il metodo di configurazione scelto.<br/>
<br/>
Normale -> Avanzato. Nessun Cambiamento. Le tariffe esistenti rimangono intatte.<br/>
Normale -> MicroGestione. Tutte le tariffe esistenti vengono rimosse.<br/>
Avanzato -> Normale. Tutte le tariffe esistenti vengono rimosse.<br/>
Avanzato -> MicroGestione. Tutte le tariffe esistenti vengono rimosse.<br/>
MicroGestione -> Avanzato. Tutte le corrispondenze tra le tariffe vengono rimosse, ma le tariffe rimangono intatte.<br/>
MicroGestione -> Normale. Tutte le corrispondenze tra le tariffe vengono rimosse.<br/>" );

jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Mostra la lista delle camere nella scheda della struttura?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Tipo struttura' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Solo SRP' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Capienza camera' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Max persone in prenotazione' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Aggiungi nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Modifica nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Elimina nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Vedi note' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Nuova nota aggiunta' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Nota modificata' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Nota Eliminata' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Le mie opzioni' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Elenca prenotazioni' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Le mie prenotazioni' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Vedi prenotazioni' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Vedi preferiti' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Non hai ancora aggiunto nessuna struttura ai preferiti!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Aggiungi ai preferiti' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipo struttura' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Strutture vicine' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Offerta' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Attivo' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Questo plugin ti permette di configurare i prezzi delle tue camere dinmicamente.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'La maggior parte delle strutture ricalcolano i prezzi delle camere in base al numero di camere disponibili in una data specifica. Questo consente di offrire sconti su tipi di camere non occupate in uno specifico periodo con lo scopo di attrarre ospiti che altrimenti non si avrebbero.<br/> Abilitare e configurare questo plugin consente di offrire prezzi variabili basandosi sul numero delle camere di un certo tipo, disponibili nella struttura nel periodo inserito.<br/> Days threashold definisce il periodo in cui la data di arrivo deve cadere prima che i prezzi siano modificati da questo plugin, quindi le opzioni percentuali permettono di configurare la percentuale di camere disponibili prima che lo sconto inserito sia applicato.' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentuale camere occupate  10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentuale camere occupate 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentuale camere occupate 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentuale camere occupate 75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Sconto %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' Scontata da ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' per ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Prezzo camera non scontato ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API key' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Trova una google maps API key su <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Una volta inserito il tuo map key qui, il sistema mostrera la mappa nella scheda della tua struttura.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Usa SSL nel modulo di prenotazione?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Hai bisogno di un valido certificato SSL per ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Attivo?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Seleziona SI se vuoi offrire offerte last minute.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Soglia' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Se una prenotazione risulta effettuata e il giorno di arrivo &egrave; solo N giorni dalla data di prenotazione, allora lo sconto puo essere applicato' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Sconto' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In percentuale' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Uno sconto &egrave; stato applicato su questa prenotazione!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Il costo della permaneza &egrave; stato ridotto di ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Questa struttura offre uno sconto last minute di  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' percentuale se prenoti il tuo arrivo prima ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' percentuale aggiuntiva se prenoti il tuo arrivo prima ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Prenota ora per avere il massimo da questa offerta!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Informazioni complete tariffa' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Seleziona SI per mostrare informazioni  pi&ugrave; dettagliate sulle tariffe nel popup dettagli/tariffe' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Minimizza opzioni di configurazione' );
jr_define( '_JOMCOMP_AMEND', 'Correggi Prenotazione - Seleziona struttura' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleziona nuova struttura' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Contratto originale:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Deposito pagato' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Deposito Non Pagato' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Correggi Totale' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Correggi Deposito' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Annulla' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal Control Panel' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Commissione standard' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Scegli la commissione standard che verra applicata su una struttura nel caso in cui nessun altra commissione sia stata configurata.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Lista commissioni prezzi' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Commissioni prezzi' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Titolo' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Tipo' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Percentuale commissione' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Currency code' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Elenco strutture' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nome struttura' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Indirizzo Struttura' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', ' Alle strutture con sfondo rosso non &egrave; stato ancora applicato un tasso di commissione.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Statistiche' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Statistiche per: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Click - Strutture' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Vista struttura' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Numero di prenotazioni' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Valore delle prenotazioni' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Stima commissioni' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tasso di commissione' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Elenco prenotazioni' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Codice struttura' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Codice ospite' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Codice affiliato' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Codice pagamento' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Totale prenotazioni' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Codice contratto' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Numero contratto' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Currency Code' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Creato' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archiviato' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data di archiviazione' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Add item to bill' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Manager to invoice' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Struttura associata (se applicabile)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Valore' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descrizione' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Elemento prenotazione inserito con successo " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Vedi gli ordini" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Elemento prenotazione non inserito " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Errore, non hai selezionato un valore sulla transazione " );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Puoi selezionare un file di linguaggio specifico per un tipo di struttura scegliendo come nome di una sottodirectory quello del tipo di struttura, ad esempio "bed and breakfast" e copiando il file di linguaggio dentro quella sottocartella. Puoi quindi modificare quel file di linguaggio per il tipo di struttura corrispondente in modo che le camere possano diventare, ad esempio, motoscafi, auto etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Non puoi eliminare questa struttura in quanto lunica a cui hai accesso. Se vuoi disabilitarla, usa il pulsante di disabilitazione nella barra degli strumenti. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Se questa &egrave; una installazione di prova e vuoi fare un upgrade alla versione Jomres Solo (gestione una struttura) allora dovresti creare prima una nuova struttura, quindi eliminarla prima di cambiare la chiave di licenza assegnata al momento dell acquisto. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Inviare Email con il log degli errori? " );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Seleziona SI se vuoi inviare a jomres.net automaticamente una copia dei messaggi di errore. Questo ci permette di attivarci nella risoluzione dei potenziali problemi in maniera più efficiente, sperando di risolvere ogni problema persino prima che voi ne siate a conoscenza. Nota, questa opzione risulta disabilitata in 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Questa struttura &egrave; un hotel/bed and breakfast/casa vacanze/pensione? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Le opzioni di configurazione differiscono tra loro se stai affittando camere di una struttura, o la struttura per intero. Seleziona MRP se stai offrendo camere, seleziona SRP se stai offrendo la struttura per intero. " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Usa il controllo mail di Jomres? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Forza un controllo accurato sulle email inviate. Certi web server sicuri risponderanno con un 500 internal error se provi ad inviare una mail ad un indirizzo inesistente. Questo ci permette di usare il comando php checkdnsrr prima di inviare una mail, eliminando questi errori 500. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Totale pernottamento " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "notte(i) a " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "per camera " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Totale servizi aggiuntivi" );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Riepilogo prezzo " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Prego Leggere ed accettare " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Riepilogo della tua prenotazione visualizzato in basso.<br />Per effettuare qualche cambiamento, cliccare nel pulsante di modifica prenotazione. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Se hai bisogno di cambiare qualsiasi informazione mostrata sopra clicca qui " );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Modifica prenotazione" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Inserire qualsiasi richiesta speciale nel box in basso. " );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Confermo che le informazioni sopra sono corrette e accetto il " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "per persona per notte " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "File linguaggio di default" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Cambia il linguaggio di default che Jomres dovrebbe usare se il linguaggio non è stato impostato su Joomfish." ); // Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'di' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Inizio' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Prec' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Pros' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Fine' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Risultati' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Nota che questo non &egrave; un modulo di prenotazione, ma stai inviando una email.<br/>Inserisci il messaggio, con le richieste che vuoi inviare a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contatta struttura' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Richiesta da ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Grazie per la tua richiesta, il tuo messaggio &egrave; stato inviato al contatto email della struttura, una copia &egrave; stata inviata sul tuo indirizzo email come promemoria. Verrai ricontattato dalla struttura il prima possibile.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' Oggetto ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Digita i caratteri che vedi, nel box sotto ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Non riesco a leggere i caratteri. Genera altri caratteri ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Invia' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'Nuova immagine' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Richiesta' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Seleziona il tipo di camera dalla lista sulla destra' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min camere gi&agrave; selezionato' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Numero minimo camere gi&agrave; selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere abilitata. Permette di avere tariffe scontate quando piu di N camere sono gi&agrave; state selezionate nel modulo di prenotazione. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max camere gia selezionato' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Numero massimo camere gia selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere disabilitata. Permette di fermare offerta di questa combinazione tipo camera/tariffa una volta che N camere sono gia state selezionate nel modulo di prenotazione. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Nota che i supplementi per persona singola impostati qui non saranno usati se sono gia stati impostati nella configurazione generale. Le impostazioni qui sono una alternativa ad avere tariffe flat sui supplementi per singola persona, non una aggiunta alla tariffa flat SPS.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Disponibile" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Qualche prenotazione" );
jr_define( '_JOMRES_AVLCAL_HALF', "meta prenotata" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Quasi tutta prenotata" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Esaurita" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Prefisso Url' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Questo &egrave; il primo elemento viasualizzato dopo il dominio - cambiare in cio che desideri - Se non vuoi utilizzarlo allora lascia lo spazio vuoto' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Vedi alias task struttura' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', 'Vedi alias descrizione della struttura' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'Vedi alias task effettua prenotazione' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', 'Vedi alias task descrizione prenotazione effettuata' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Cerca alias task' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Aggiungi nazione alla url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Aggiungi regione alla url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Aggiungi comune alla url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Aggiungi tipo struttura alla url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Aggiungi nome struttura alla url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Aggiungi codice struttura al nome della struttura' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Se il nome della struttura &egrave; impostato su NO il codice struttura non verra utilizzato. Se impostato su SI la Url verra visualizzata come fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Cerca schema Url - Aggiungi nazione alla url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Cerca schema Url - Nazione di default' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Se tutte le tue strutture sono in una sola nazione allora non avrai Nazione nella ricerca - inserisci la nazione di default qui se vuoi visualizzare un unica nazione' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Cerca schema Url - Aggiungi regione alla url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Cerca schema Url - Regione di default' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Se tutte le tue strutture sono in una regione allora non avrai regione nella ricerca - inserisci una regione di default se vuoi visulizzare solo una regione' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Cerca schema Url - Aggiungi comune alla url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Cerca schema Url - Comune di Default' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Cerca schema Url - Tipo Struttura' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Cerca schema Url - tipo struttura di default' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Usato nella url se la ricerca &egrave; per tutti i tipi di struttura' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autorileva linguaggio del calendario Javascript' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Abilita autorilevamento del linguaggio per i calendari Javascript? Se non possibile autorilevamento il linguaggio sara quello configurato subito sotto' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per settimana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per giorno' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per prenotazione' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per persona per prenotazione' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per persona per giorno' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per persona per settimana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per giorni (min giorni)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per giorni X camere selezionate' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Ricostruisci il registro minicomponente' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normalmente Il plugin jomres registry viene ricostruito automaticamente ogni volta che visualizzi il gestore plugin e aggiungi o rimuovi plugin, tuttavia &egrave; possibile che non si possano usare queste opzioni per qualsiasi motivo, quindi puoi usare questa funzione per ricostruire il registro manualmente. Se hai accesso al Gestore Plugin e alle opzioni di upgrade allora probabilmente non avrai bisogno di usare questa funzione. Dovrai ricostruire il registro plugin qualvolta tu aggiunga un minicomponente non utilizzando il gestore plugin per farlo." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registro ricostruito con successo' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'ERRORE di ricostruzione del registro dei minicomponenti. Controlla il log errori di Jomres per vedere se esiste un record relativo a cosa ha causato l errore of what triggered the error.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Cerca tramite fascia di prezzo.' );
jr_define( 'JOMRES_WORD_SAVING', 'Sto salvando...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Usa Dettagli struttura compositi?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduce i dettagli struttura compositi con cui ogni dettaglio struttura viene inviato ad un unico file di template (composite_property_details.html). Se non desideri usarla selezionare NO (solo ai vecchi utenti consigliamo di selezionare NO, i nuovi utenti vorranno sicuramente lasciare il SI)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Questa &egrave; una lista di tutti gli utenti del sistema. Non gestori-struttura avranno una iconcina Ospite, i gestori struttura avranno una icona di Reception/Gestore struttura/Super gestore struttura.<br/>Quando Jomres viene installato per la prima volta "admin" viene automaticamente aggiunto ai gestori struttura &egrave; considerato un utente autorizzato.<br/>Non-super gestori struttura dovranno avere in gestione almeno una struttura altrimenti vedranno un errore quando proveranno ad accedere e ad usare il sistema.<br/> Una volta che gli utenti vengono autorizzati poi &egrave; possibile modificare il profilo degli stessi, assegnare loro le strutture o dare loro i diritti di super gestore.<br/>Per autorizzare un utente, clicca sulla croce rossa a fianco al loro nome. Per revocare queste autorizzazioni clicca sulla spunta verde.<br/>Per assegnare a degli utenti solo alcune strutture, o dare loro diritti di super gestori struttura, autorizzarli &egrave; poi cliccare sul pulsante di modifica (il quale &egrave; visibile solamente una volta che sono stati autorizzati). Utenti che hanno registrato le loro strutture in autonomia verranno assegnati automaticamente alle stesse. I super gestori struttura hanno automaticamenti i diritti per tutte le strutture, e vedranno tutte le opzioni di configurazione anche se la opzione di configurazione ridotta &egrave; impostata nella configurazione del sito (Site Config).' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Qui puoi assegnare ad un Gestore determinate strutture. Assicurati, se si tratta di non super gestori struttura, che abbiano i diritti almeno per una struttura altrimenti vedranno un errore quando tenteranno di accedere al sistema. Per dare ad un receptionist/gestore struttura i diritti solo per certe strutture,assicurati che il menu a tendina del super gestore struttura non sia impostato su SI.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Non hai ancora effettuato nessuna prenotazione!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Tipo struttura' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Modifica il tuo tipo struttura' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleziona il tuo tipo struttura' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Queste opzioni ti permettono di abilitare/disabilitare il logging al sistema. Il logging di errore &egrave; sempre abilitato, altri log quali prenotazioni, Gateway, Sistema a richieste possono essere attivati o meno. Devi essere a conoscenza che <b>la possibilita di abilitare il logging &egrave; fornita solo come un modo per effettuare il debugging facilmente ma &egrave; rischioso dal punto di vista della sicurezza</b> infatti sara poi facile per utenti non autorizzati vedere i tuoi log quindi consigliamo fortemente di lasciarlo disabilitato la maggior parte del tempo. Se hai attivato il logging, quando lo disabiliti, devi assicurarti che la cartella <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> non contenga nessun vecchio file di log. Nota che abilitare il logging rallenta notevolmente il sistema in quanto registra moltissime informazioni.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Logging modulo di prenotazione (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (Es. paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Log richieste (tutte le richieste provenienti dal server)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Sistema (misc log) ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (principalmente per registrare le commissioni) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'La tua richiesta...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Form Prenotazione lista camere visualizza tipo camera immagine' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Limite elenco strutture' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'Il numero di pagine da mostrare in una pagina dopo una ricerca' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Opzione di ricerca integrata' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'La Opzione di ricerca integrata permette ai tuoi utenti di ricercare nel sistema le strutture in relazione ad una serie di funzioni. Se hai gia utilizzato le funzioni di ricerca di Jomres in Joomla sarai sicuramente abituato a queste impostazioni.<br/>Questa funzione ci permette di offrire la gestione della ricerca direttamente in jomres per quegli utenti che non vogliono utilizzare un modulo di ricerca di Joomla, o per utenti che utilizzano altri cms, CMS che non hanno un modulo di ricerca Jomres.<br/>Ricorda che se scegli di ricercare qualcosa tramite link (non menu a tendina) le altre opzioni di ricerca non saranno disponibili, verra cercato il solo elemento che corrisponde al link cliccato.<br/>Nota che di default il layout della ricerca integrata non &egrave; bellissimo. Questo perche il file del template che genera il layout deve includere tutte le opzioni possibili, alcune delle quali sono incompatibili. Per migliorare il layout e avere il look che desideri, devi modificare <b>srch.html</b> nella cartella <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Attivare questa opzione?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Se questa opzione &egrave; attiva, allora qualsiasi chiamata verso Jomres che mostra la lista strutture mostrera anche le opzioni di ricerca.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Usa colonne' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Qualsiasi opzione di ricerca che hai definito come link (dove pertinente) sara mostrata come colonna (IE br messo alla fine del link)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Colonne servizi offerti" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "Il numero di icone dei servizi offerti che puo essere mostrato prima che un br venga inserito per andare a capo." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Seleziona la regione tramite la combo menu a tendina" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offri un menu a tendina per effettuare la ricerca in base a Nazioni/Regioni/Comuni. Se vuoi usare questa opzione imposta su NO le opzioni di ricerca per province/comuni qui sotto." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Ricerca in base al nome struttura" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Visualizza la ricerca in base al nome struttura inserito." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Visualizza come menu a tendina?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Seleziona NO se vuoi visualizzare la lista come links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Ricerca in base al Comune/Regione" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Visualizza la ricerca in base alla Regione inserita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Visualizza come menu a tendina?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Seleziona NO se vuoi visualizzare la lista come links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Ricerca in base al tipo struttura" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Visualizza la ricerca in base al tipo struttura inserito" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Visualizza come menu a tendina?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Seleziona NO se vuoi visualizzare la lista come links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Ricerca in base al tipo camera" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Visualizza la ricerca in base al tipo camera inserito" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Visualizza come menu a tendina?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Seleziona NO se vuoi visualizzare la lista come links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Ricerca in base ai servizi offerti" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Visualizza la ricerca in base al tipo di servizio inserito" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Visualizza come menu a tendina?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Seleziona NO se vuoi visualizzare la lista come immagini tooltip e caselle di spunta" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Ricerca in base alla descrizione" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Visualizza la ricerca in base alla descrizione inserita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Ricerca in base alla disponibilita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Visualizza la ricerca in base alla disponibilita desiderata inserita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Ricerca in base alla fascia di prezzo " );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Visualizza la ricerca in base alla fascia di prezzo inserita" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Incrementi fascia di prezzo" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres cerchera tutti i valori delle tariffe che rientrano in una serie di fasce di prezzo basandosi sugli incrementi impostati qui." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Come default, se una struttura non &egrave; selezionata in Jomres eseguira una ricerca. Se questa ricerca non viene attivata da un modulo di ricerca allora produrra risultati completamente casuali. Questa opzione ti permette di limitare il numero di risultati della stessa ricerca casuale.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Impostazioni Cron job e logs' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Informazioni Pseudocron job. La funzionalita pseudocron e richiesta per invio pagamenti e gestione commissioni.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Minicomponenti cron installati. Per eseguire un cron job individuale usa il link specificato sotto. Nota che i cron jobs non producono nessun output quindi non vedrai nessuna informazione sulla pagina. Fanno riferimento invece al log dei job sotto.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Metodo' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Se non hai accesso ai cron jobs, Imposta questo come Minicomponente, altrimenti crea un cron job e fallo girare<br /> <i>curl -s http://" . JOMRES_SITEPAGE_URL_ADMIN . "&task=cronjobs&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Visualizza logging sul browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funziona solo se il metodo &egrave; impostato su Minicomponente.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging abilitato' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Seleziona SI per abilitare il logging. I risultati dei log verranno visualizzati sotto.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Modifica Template' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Questa Funzione ci permette di modificare i template del frontend di jomres sul server, salvando i risultati sul database. Funzione avanzata, fai attenzione.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Nome Template' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Il Template &egrave; stato modificato?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Campi personalizzati' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Qui puoi impostare semplici campi personalizzati che verranno mostrati nel modulo di prenotazione.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nome campo (niente spazi)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valore di default' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descrizione' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Richiesto' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantita massima' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Se la quantita massima &egrave; impostata su un numero maggiore di 1 allora verra visualizzato agli ospiti un menu a tendina da cui scegliere la quantita di extra che desiderano.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Issue invoices" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Percentuale Tassa" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Codice Tassa" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Descrizione Prezzo" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Non puoi eliminare questa Percentuale Tassa." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Prezzo" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Invoices" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Non Pagato" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Pagato" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Annullata" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "In sospeso" );
jr_define( '_JRPORTAL_INVOICES_USER', "Utente" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Stato" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Aumentata" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Scadenza" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Sottoscrizione" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Totale omnicomprensivo" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Totale ricorrente" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Frequenza ricorrente" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Giorno del mese ricorrente" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Currency code" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Elementi in linea" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Nome" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Descrizione" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Prezzo iniziale" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Quantita iniziale" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Sconto iniziale" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Totale iniziale" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Prezzo ricorrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Quantita ricorrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Sconto ricorrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Totale ricorrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Codice Tassa" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Descrizione Tassa" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Percentuale tassa" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Impostazioni Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Currency code (es EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Usa sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Il tuo indirizzo email paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Nota: Per usare paypal devi entrare nel tuo account paypal &egrave; disabilitare Autoreturn. (Profilo/Preferenze pagamenti), e selezionare IPN (Profilo/Preferenze di notifica pagamenti istantanei)nella URL di:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "Questo pagamento &egrave; in scadenza. Cliccare il pulsante per entrare in paypal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Sovrascrivi impostazioni standard gateway di Jomres?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Se le impostazioni di sovrascrittura di paypal sono impostate su SI avvengono svariate modifiche: La configurazione generale non mostra piu nessuna impostazione gateway. e due, quando viene effettuata una prenotazione le impostazioni usate qui vengono utilizzate in modo che quel pagamento venga inviato all indirizzo inserito qui, e non a quello precedentemente impostato nella Configurazione generale." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Visualizza i miei pagamenti" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Codici Sconto" );
jr_define( '_JRPORTAL_COUPONS_DESC', "I codici sconto possono essere creati &egrave; passati agli utenti come incentivi ad affettuare prenotazioni. Le date di validita da-al si riferiscono al giorno in cui la prenotazione viene effettuata, non alle date della effettiva prenotazione." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Codice Sconto" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Valido dal" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Valido sino al" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Ammontare sconto" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Lo sconto &egrave; una percentuale" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Solo camera" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Lo sconto viene applicato esclusivamente al costo della camera.Se selezionate No, allora lo sconto viene applicato al costo della prenotazione per intero." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Errore Sql di eliminazione/inserimento codice sconto" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Se hai un codice sconto, inseriscilo nel box e clicca il link "Salva codice sconto" per salvare i dettagli dello sconto nella tua prenotazione.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Salva codice sconto' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Codice sconto salvato' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Codice sconto non valido' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valore sconto' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Prenotazione scontata. Codice sconto/valore sconto/impostazioni codice sconto : ' );
jr_define( '_JOMRES_COM_CACHING', 'Usa la opzione caching di Jomres?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Seleziona NO per disabilitare la funzione caching di Jomres.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Scegli lingue' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Scegli le opzioni lingua da mostrare nel menu a tendina delle lingue.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Mostrare il menu a tendina delle lingue?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Ospite in partenza e prenotazioni annullate' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Caro" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Grazie per esserti registrato" );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Il tuo Nome Utente : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "La tua password : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Accedi per vedere le tue prenotazioni " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Codice sconto Salvato' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Codice sconto Eliminato' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Usa sistema di invio messaggi' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Molti aggiornamenti struttura forniscono feedback nella forma di un messaggio javascript quando la pagina viene ricaricata, usa questa opzione per abilitare/disabilitare questi messaggi.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Nome utente" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Password" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Numero mobile di notifica" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Usare il formato 'Codice nazione, numero mobile'. Per esempio un numero di cellulare italiano sarebbe qualcosa tipo '397979123456'. Lascia questo campo bianco se non vuoi che venga inviata nessuna notifica mail al tuo telefonino." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Ovviamente, non puoi usare questo gateway in locale, avrai bisogno di testarlo in un server 'live'.</b>
<br/>
<br/>
Per usare il gateway Clickatell hai bisogno di un account Clickatell e almeno una connesiione registrata (API sub-product instance) tra il tuo sistema &egrave; il nostro gateway. Ogni metodo
di connessione &egrave; noto come sub-product. Istruzioni:<br/>
<br/>
<b>Passo 1 - registrati per un accountClickatell</b><br/>
Se non hai ancora un account Clickatell, devi registrarti come illustrato sotto. Altrimenti procedi al passo 2.<br/>
* Vai su http://www.clickatell.com/products/sms_gateway.php, e scegli la API subproduct appropriata (metodo connessione) ti consigliamo di usare ( Clickatell Central (API) )<br/>
* Clicca sul link di registrazione.<br/>
* Riempi il modulo di registrazione.<br/>
Dopo esserti autenticato con successo inviando il modulo avrai automaticamente accesso al tuo account &egrave; trasferito alla pagina di scelta della tua connessione API.<br/>
<b>Passo 2 - aggiungi una Connessione API registrata (sub-product)</b><br/>
Se hai ancora acceduto al tuo account, devi farlo su  http://www.clickatell.com/login.php<br/>
* Seleziona \"Manage my Products\" dal menu in alto.<br/>
* Seleziona il tipo di connessione API che desideri utilizzare (HTTP API) dal menu a tendina ('Add Connection').<br/>
* Completa il modulo. Assicurati di aver inserito il locked IP(IP di questo server), imposta Callback to HTTP POST. Devi impostare IP callback to " .get_showtime("live_site") . "/index.php?option=com_jomres&task=sms_clickatell_callback il nome utente e la password.<br/>
Se registri piu di una connessione API, il nome della descrizione che inserisci per ognuna deve essere unico - Non puoi avere API multiple con lo stesso nome.<br/>
Dopo aver inviato il modulo con successo, i tuoi dettagli di autenticazione saranno visualizzati, compresi tutti gli API ID delle connessioni impostate (api_id). Questi dettagli di autenticazione sono necessari durante la connessione al gateway Clickatell per spedire un messaggio.<br/>
<br/>
Usa il tuo Nome Utente, password e api_id per completare i campi sopra.<br/>

<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Form Prenotazione lista camere mostra accesso disabilitato' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Form Prenotazione lista camere mostra max persone' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Notare che i prezzi delle camere sono stimati e che il prezzo pieno della prenotazione non verra calcolato fino a quando non avrai aggiunto una o piu camere alla tua selezione." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Database template Ultima modifica' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Disk template Ultima modifica' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Database template warning' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Database template potrebbe non essere aggiornato' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Se &egrave; presente un icona sul template, allora Jomres ha rilevato che il template presente nel database <strong><i>potrebbe</i></strong> essere piu vecchio di quello registrato sul disco, in questo caso &egrave; possibile che il template sia stato aggiornato con una nuova versione di Jomres. Se questo &egrave; il tuo caso, allora &egrave; possibile che il tuo template non stia beneficiando di qualche nuova funzione di Jomres, o che una funzione esistente non stia funzionando come dovrebbe, dovresti confrontare il file sul disco con la tua personalizzazione per assicurarti che non ti stia perdendo nuove funzioni.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Pacchetti di sottoscrizione" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Nome" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Descrizione" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Pubblicato" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frequenza" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Periodo di prova" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "ammontare periodo di prova" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Totale" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Limite camere" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Limite strutture" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frequenza: M/Q/B/A Mensile/Quadimestrale/Biannuale/Annuale" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Periodo di prova: Integer input, 0 (zero) per non impostato, 1 per un mese, 2 per due mesi etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Sottoscrivi" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Inserisci/aggiorna le informazioni relative alla tua sottoscrizione. Nota che tutti i campi sono obbligatori." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Nome" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Cognome" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Indirizzo" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Nazione" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "CAP" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Devi avere una sottoscrizione valida per creare nuove strutture. Sino ad ora, hai acuistato sottoscrizioni per " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " Strutture(a) pubblicate. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Puoi aumentare il numero di strutture che puoi creare <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>acquistando altri crediti qui.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Hai usato " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " crediti struttura. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Per vedere una lista aggiornata delle tue strutture clicca <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>qui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Per vedere una lista aggiornata dei pacchetti di sottoscrizione disponibili, clicca <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>qui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Sfortunatamente, non puoi pubblicare questa proprieta perche hai usato tutti i crediti disponibili per la creazione strutture." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Grazie per aver sottoscritto i nostri servizi di pubblicazione della tua struttura sui nostri server. Quando il tuo ordine risultera come pagato (potrebbe esserci un ritardo causa Paypal). <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>clicca qui per continuare con ad inserire la tua struttura(e).</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Ci dispiace molto che tu non abbia scelto di sottoscrivere i nostri servizi. Facci sapere se hai bisogno di ulteriori info o se possiamo aiutarti in qualsiasi modo a farlo" );

jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Usa la funzionalita di gestione sottoscrizione" );
jr_define( '_JOMRES_COM_NEWUSER', 'Crea nuovo utente alla prenotazione' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Crea un nuovo account utente su prenotazioni effettuate da utenti non registrati.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Clicca qui per inserire la tua struttura' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Sottoscrizioni attive" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Gateway subscription id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Grazie per la tua prenotazione - Seguono dettagli nuovo utente" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Pannello amministrazione' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Inserire Jomres javascript headers nel tag body HTML?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Seleziona SI se stai avendo conflitti tra mootools e Jquery utilizzato da joomres. Questo obblighera Jomres ad inserire le chiamate Javascript nel corpo della pagina invece che nella HEAD area, che anche se non &egrave; HTML valido, sembra risolvere i problemi con jquery e mootools in conflitto tra loro.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Mostra ordine' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Mostra ordini' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Inserisci la tua struttura' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Pericolo : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Puoi avere un pacchetto sottoscrizione gratuito se lo desideri, creando un pacchetto &egrave; impostando sia lammontare del periodo di prova che il prezzo totale su 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Ci dispiace, ma il codice pacchetto di sottoscrizione non risulta presente." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Ci dispiace, hai gia sottoscritto un pacchetto gratuito, non puoi sottoscriverlo ancora." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Stato <b>0:</b> Pagamento in sospeso <b>1:</b> Creato <b>2:</b> Annullato <b>3:</b> Termine del servizio" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Il mio Account" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'I tuoi dettagli commerciali' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Nome azienda' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'Partita Iva' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Indirizzo' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTA: Le seguenti aliquote sono valide per utilizzo nel mercato americano. Se vuoi usare una aliquota flat (es VAT) per le tue strutture, scegli una aliquota tra le opzioni mostrate sopra.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Ordine N. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleziona le date che vuoi riservare, o inibire al sistema causa lavori di manutenzione, chiusura, motivi personali. Quando avrai selezionato le date appropriate, clicca sul pulsante "applica" per controllare nuovamente la disponibilita. <br/> 
<br/> 
Se la struttura ha gia prenotazioni per le date selezionate, non sara possibile selezionare le stesse date fino a quando queste prenotazioni non verranno cancellate o gli ospiti risulteranno in partenza.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Non puoi prenotare la struttura per le date selezionate.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Puoi prenotare la struttura per le date selezionate.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'La tua struttura &egrave; configurata su di un pagamento a persona per notte ma non hai creato o pubblicato nessun tipo ospite, ti preghiamo di creare &egrave; pubblicare uno o piu tipi ospite. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Non hai ancora nessuna tariffa configurata, non &egrave; possibile ricevere nessuna prenotazione per la tua struttura.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Modifiche on' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Modifiche off' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Addebita depositi variabili?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'I depositi variabili ti consentono di stabilire se non vuoi addebitare completamente la prenotazione se l\'arrivo degli ospiti e\' previsto entro N giorni da "oggi". Seleziona si per abilitare questa opzione, e inserisci il numero di giorni qui sotto, se per esempio il giorno di arrivo risulta entro 60 giorni, allora la somma addebitata sara il totale della prenotazione, altrimenti sara stabilito in base alle opzioni di deposito stabilite sopra.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Il numero di giorni, entro i quali il totale prenotazione verra addebitato come deposito.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Invia le email di contatto della struttura all\'indirizzo alternativo' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Seleziona SI se vuoi che le email di contatto della struttura vengano inviate alla email indicata sotto. Lascia No per inviare le email all\'indirizzo email inserito nella sezione Configurazione struttura.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Indirizzo alternativo email di contatto della struttura .' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'La email di conferma &egrave; stata inviata. Ora puoi chiudere questa finestra.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Elenco immobiliare' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Questa scheda struttura e\' di tipo immobiliare?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Seleziona SI se stai vendendo la struttura, seleziona NO se &egrave; una struttura di tipo hotel/b&b/casa vacanze/villa dove offrirai la struttura o le singole camere in affitto per brevi periodi e utilizzerai il sistema per ricevere prenotazioni.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contatta agente' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Registra ordine come pagato' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Ordine registrato come pagato' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Crea una nuova chiave API' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Usa Google per le traduzioni iniziali?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Questa funzione &egrave; nuova e sperimentale, quindi usala a tuo rischio e pericolo. Lo scopo di questa funzione &egrave; interrogare google translate per tradurre automaticamente una data struttura. Nota che questa funzione azzera ogni input, quindi se usi un editor HTML per formattarre il testo dei dettagli struttura, questo rovinera quella formattazione.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Questa &egrave; una installazione per una singola struttura?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Selezionando SI, la visualizzazione del frontend di Jomres agli utenti non autorizzati sara grandemente semplificata. Le chiamate di default del menu verso Jomres, non restituiranno piu la lista delle strutture, ma reindirizzera il cliente verso il modulo di prenotazione della prima struttura nel sistema. I Gestori Struttura non vedranno il pulsante di visualizzazione anteprima o il pulsante di inserimento nuova struttura. Ideale se vuoi inserire una sola struttura e prendere le prenotazioni per la stessa.<br/>' );
/////////////////////////////////////////////////////////////////////////////////////////////////////


jr_define( '_JOMRES_HTMP_PURIFIER', 'Usare la funzione di pulizia automatica HTML?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Attivare per abilitare Jomres ad usare la libreria di pulizia automatica HTML (http://htmlpurifier.org/). La libreria &egrave; usata come un livello di sicurezza extra quando si ha a che fare con dati di input e output e ne &egrave; consigliato l&acute;utilizzo anche se utilizzer&agrave; pi&ugrave; memoria.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Pagamento saldo' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Saldo' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Nota, Stai usando Editing Mode con il Global Editing mode attivato. Va bene se si conosce cosa significa Global Editing, comunque se non conosci a fondo la cosa potresti causare problemi al sistema. Se non sei sicuro se usare Jomres in questo modo, vai su <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> per pi&ugrave; informazioni sull&acute;argomento.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Support key' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Il tuo numero di licenza. Avrai bisogno di un numero di licenza per poter scaricare gli aggiornamenti ed i plugin per Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Sconto personale' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limitare la registrazione delle strutture ad una Nazione?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ti puoi assicurare che le strutture registrate siano limitate ad una sola Nazione selezionando Si per questa opzione e configurando la Nazione nell&acute;opzione seguente.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Le strutture si trovano in questa Nazione : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery theme' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Scegli un jquery theme da usare per le schede dei dettagli-struttura.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Ci dispiace, ma la struttura non &egrave; al momento disponibile.' );
jr_define( '_JOMRES_REVIEWS', 'Recensioni' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Titolo recensione' );
jr_define( '_JOMRES_REVIEWS_DATE', 'Pubblicata il ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Non ci sono ancora recensioni per questa struttura.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Ti piacerebbe essere il primo a recensire questa struttura?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Sono d&acute;accordo con questa recensione' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Non sono d&acute;accordo con questa recensione' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Valutazione media: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Voti totali:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Aggiungi una nuova recensione.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Devi effettuare l&acute;accesso per inserire una recensione.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Dai il tuo parere su questa struttura : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Questo cliente ci ha detto che : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Pro: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Contro: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Inviata il: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Hai gi&agrave; recensito questa struttura, non puoi aggiungere un&acute;altra recensione.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Ci dispiace, ma non ti &egrave; permesso inviare scrivere recensioni su questo sito.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Clicca per visualizzare le recensioni' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' ospiti sono d&acute;accordo con questa recensione.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' ospiti non sono d&acute;accordo con questa recensione.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' ospite concorda con questa recensione. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'ospite non concorda con questa recensione.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Grazie per aver condiviso la tua opinione su questa recensione.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Grazie, ma hai gi&agrave; condiviso la tua opinione su questa recensione.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Assicurati di aver compilato tutti i campi.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Cataloga la tua recensione inserendo un titolo' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Ti preghiamo di inserire una recensione pi&ugrave; accurata nel box di descrizione' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Ti preghiamo di inserire i lati positivi della tua esperienza in questa struttura' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Ti preghiamo di inserire i lati negativi della tua esperienza in questa struttura' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Ti preghiamo di votare l&acute;ospitalit&agrave; dello staff' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Ti preghiamo di votare la qualit&agrave; dei locali' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Ti preghiamo di votare la pulizia della struttura' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Ti preghiamo di votare il pernottamento. Confortevole o no?' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Ti preghiamo di votare il rapporto qualit&agrave;/prezzo' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Ti preghiamo di votare il servizio' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Riepilogo recensione' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'La tua esperienza nel dettaglio' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Grazie per aver inviato la tua recensione.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Grazie per aver inviato la tua recensione. Verr&agrave; pubblicata al pi&ugrave; presto dai nostri moderatori.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Usare la Funzione recensioni di Jomres?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Pubblicare automaticamente le recensioni?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Se selezioni NO dovrai pubblicare manualmente le recensioni' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Configurare le recensioni su test mode?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalmente i gestori delle strutture non possono recensire le strutture. Con test mode attivo, possono. Naturalmente non &egrave; l&acute;ideale in un ambiente professionale.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Questa &egrave; una lista di tutte le strutture. Clicca su una struttura per vedere la recensione corrispondente. Da qui potrai pubblicare o eliminare una recensione.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Numero di recensioni non pubblicate' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Totale recensioni' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Pubblica/Sospendi recensione' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Elimina recensione' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Segnala recensione' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Esamina i report' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Inserisci la tua segnalazione' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Pensi che questa recensione sia non obiettiva o inaccurata? segnalacelo e esamineremo la cosa per te.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Invia' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Segnalazione creata da ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Le Segnalazioni sono inviate da utenti in disaccordo con il contenuto di una recensione. L&acute;unico modo di rimuovere una segnalazione &egrave; eliminare la recensione.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = pessimo 10 = eccellente) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Ospitalit&agrave;  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Posizione ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Pulizia ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Comodit&agrave; ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Rapporto qualita&agrave;/prezzo ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Servizi ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Recensione by : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Nascondi recensioni' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Visualizza il modulo di prenotazione nella scheda struttura?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Seleziona SI per visualizzare il modulo di prenotazione nella scheda struttura. Se selezioni No, un link apparir&Agrave; nella scheda della struttura invece che puntare al modulo di prenotazione.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Le tariffe sono comprensive di tasse?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Le tariffe sono Tasse-incluse? Seleziona SI o NO.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Tasse servizi:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Il campo giorno della settimana permette di fissare una tariffa per un dato giorno della settimana, una volta cliccato il pulsante del giorno della settimana tutti i giorni della stessa avranno la tariffa stabilita  in precedenza.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'I selettori data e l&acute;imput di tariffa permettono di fissare una tariffa per un determinato periodo. Scegli una data di inizio e una di fine, inserisci la tariffa e clicca il pulsante Configura Tariffe.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Data di inizio' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Data di fine' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tariffa' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Configura tariffe' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partners' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Oggi' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Precedente' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Successivo' );
jr_define( '_JOMRES_CALENDAR_RTL', 'falso' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Camera ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'Ospite(i). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Questo &egrave; il modo in cui abbiamo assegnato il numero dei tuoi ospiti alle loro camere. Se desideri cambiare l&acute;allocazione, devi contattare la struttura dopo aver prenotato. Ci potrebbero essere supplementi per i cambiamenti richiesti.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Nota che la tua struttura non &egrave; ancora stata pubblicata, solo tu puoi vederla, I visitatori del sito non la vedranno ancora" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordine dei risultati di ricerca di default' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Cambia questa opzione per cambiare l&acute;ordine in cui i risultati vengono visualizzati.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostra il men&ugrave; a tendina dell&acute;ordinamento risultati' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Style lista camere' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'Nel modulo di prenotazione, usando lo stile classico offrirai camere individuali ai tuoi ospiti. Invece con la tipologia tipo camera, gli ospiti possono scegliere il numero ed il tipo di camera (Es. 2 doppie)' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classico' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipo Camera' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Ri)controllo disponibilit&agrave;' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Ricreazione elenco camere disponibili' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Calcolo totali' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Aggiornamento modulo terminato' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Giorno di Inizio Settimana del calendario, Domenica o Luned&igrave;' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Solo gli ospiti possono inserire recensioni?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Seleziona SI se vuoi limitare le recensioni solo a quegli utenti che son gi&agrave; stati ospiti in questa struttura.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per camera' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Ospiti per camera : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Ospiti per prenotazione : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Numero di camere' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tariffe standard' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Solo per le nuove tariffe" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Anni da mostrare" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Stabilisce il numero di anni da mostrare durante la modifica delle tariffe di microgestione" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Gennaio' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Febbraio' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Marzo' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Aprile' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Maggio' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Giugno' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Luglio' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Agosto' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Settembre' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Ottobre' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Novembre' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Dicembre' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Processo di gestione struttura" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Ci sono diversi processi di gestione in relazione al modo in cui vuoi inserire la tua struttura/business." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Affitto" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Scegli l'opzione Affitto se stai offrendo camere in una struttura (es. Hotel/B&B/Villa/Appartamento)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Immobiliare/inserimento semplice" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Scegli l'opzione immobiliare se sei interessato solo alla vendita" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Seleziona SI per ridurre il numero di opzioni disponibili ai gestori delle strutture nella Sezione di Configurazione Generale. Questo &egrave; utile se on vuoi che i gestori delle strutture abbiano troppe opzioni da configurare, puoi comunque difinire la configurazione di default delle opzioni disponibili.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Seleziona un opzione per la tua prenotazione' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Cambia su HTML editor nella pagina di configurazione della struttura. Inoltre, Se selezioni NO, tutto l&acute;HTML eccetto p e br &egrave; estrapolato da tutto il testo inserito e visualizzato.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Gestione struttura" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Anteprima struttura" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Visualizzare il selettore di Timezone nella toolbar del gestore struttura?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Sconto Partner " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Cerca utente" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Inserisci un p&ograve; di caratteri per carcare un utente.<br/>Selezionato l&acute;utente lo aggiungerai automaticamente ai tuoi partner e verrai indirizzato alla prossima pagina dove potrai assegnare all&acute;utente strutture e sconti." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Partners presenti" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Seleziona un partner e sarai indirizzato alla pagina di amministrazione partners." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Partner :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Cerca una Struttura" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Inserisci un p&ograve; di caratteri del nome della struttura  e seleziona una struttura.<br/> Quando selezioni la struttura questa verr&agrave; automaticamente aggiunta al portfolio strutture del tuo partner, tuttavia non beneficeranno di nessuno sconto, fintanto che non ne stabilirai uno per quell&acute;utente." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Strutture Correnti" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Clicca su una struttura per modificare le impostazioni di sconto sui partner per quella struttura." );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "This account has been suspended, it is not currently possible to administer your propert(ies) using this account." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Manager account suspended" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Manager account reinstated" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Remove favourite' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Edit account' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Search users" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Existing managers" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a manager to be taken to the manager administration page." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Sleeps" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Show the search by guest number dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Stars" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Show the Stars dropdown" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Number of guests' );
jr_define( '_JOMRES_SEARCH_STARS', 'Number of stars' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Commission invoices" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Number of properties" );
// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Label Translations' );

jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Use commission functionality?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Set this to Yes to show the manager commission invoices which have been raised." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Manager bookings create commission invoices?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "If a manager makes a booking, does that also create a commission invoice line item?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "A new commission invoice has been raised" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto suspend managers where invoices are marked as Pending?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Auto suspend threashold" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished." );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Prezzo (più costosi)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Price (meno costosi)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'a notte' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'a settimana' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'al mese' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'a persona' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'settimana(e) a ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mese(i) a ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Attendere prego, la tua prenotazione è in fase di elaborazione e sarai reindirizzato sul sito di Paypal per effettuare il pagamento.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Se non visualizzi la pagina Paypal entro 5 secondi...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Clicca qui' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Prenotazione valida da" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Prenotazione valida fino a" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Nome ospite" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "With your coupon, this booking has been discounted from " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " a " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Set this to No to disable loading of both the Jquery UI javascript and CSS files." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Set this to No to disable only the jquery UI CSS file." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Totale tasse incl." );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Struttura non pubblicata' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "List historic and current guests" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Current guests only" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Soggiorno tasse escluse' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Soggiorno tasse incluse' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Tassa di soggiorno:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Torna ai dettagli' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Seleziona automaticamente?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Saldo da pagare' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ultima prenotazione' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'secondi' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'minuti' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'ore' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'giorni' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'settimane' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'mesi' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'anni' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'decade' );
jr_define( '_JOMRES_DATEPERIOD_S', ' ' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'fa' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'da ora' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Prenotazioni per notti?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per notte' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per persona per notte' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Arrivo' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Partenza' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "giorno(i) a" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Data di partenza errata' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Intervallo minimo tra arrivo e partenza' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per notte' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Giorni prima della partenza' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Mostra data di partenza?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per persona, per notte' );
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
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Giorni' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Prezzo per giorno: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Numero di giorni: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Sovrascrivi totale pernottamento' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Salva modifica' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Larghezza in pixel form di prenotazione' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Politica di cancellazione' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Modifica profilo' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Foto' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Modifica regole imposte" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Modifica campi personalizzati" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "This Jomres version : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Latest Jomres version" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Strutture attive" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Modifica struttura attiva" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Server SMTP alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Host alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Porta alternativa" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Protocollo alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Usa autenticazione" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );

jr_define( '_JOMRES_QUICK_INFO', "Quick Info" );

jr_define( '_JOMRES_MENU_SHOW', "Mostra" );
jr_define( '_JOMRES_MENU_HIDE', "Nascondi" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Usa menu alternativo?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Default" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Anybody" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registered" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nobody" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menu Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Full Access Control" );
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


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Oggetto' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Nome e Cognome' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Email' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Please describe your issue' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Properties found" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Inserisci la tua struttura : Step 1 di 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Inserisci la tua struttura : Step 2 di 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'My businesses' );


jr_define( '_JOMRES_CART_TITLE', 'My proposed bookings' );
jr_define( '_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)' );
jr_define( '_JOMRES_CART_OR', ' o ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Salva e conferma dopo' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.' );
jr_define( '_JOMRES_CART_VIEWCART', 'Vedi carrello' );

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

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Lista" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Foto" );

jr_define( '_JOMRES_COMPARE', "Compara" );
jr_define( '_JOMRES_REMOVE', "Rimuovi" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Torna ai risultati di ricerca" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Aggiungi alla tua lista" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Rimuovi dalla tua lista" );
jr_define( '_JOMRES_VIEWSHORTLIST', "Vedi la tua lista" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Importante: Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "We use cookies to help keep our site relevant and easy to use." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Altro..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Si, accetto l'utilizzo dei cookie." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'La cauzione è pari al costo di una notte?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "Nessuna struttura presente nella tua lista." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Impostazioni dispositivi mobile" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simula dispositivo mobile" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulazione IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Abilita safe mode?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "La modalità safe mode, disabilta tutti i plugin lasciando funzionare solo il componente Jomres." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Vuoi utilizzare l'editor di testo WYSIWYG? (raccomandato)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );

jr_define( 'COMMON_NEXT', "Successivo" );
jr_define( 'COMMON_CANCEL', "Annulla" );
jr_define( 'COMMON_SUBMIT', "Invia" );
jr_define( 'COMMON_SAVE', "Salva" );
jr_define( 'COMMON_DELETE', "Elimina" );
jr_define( 'COMMON_RETURN', "Indietro" );
jr_define( 'COMMON_CLOSE', "Chiudi" );
jr_define( 'COMMON_BACK', "Indietro" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "Nuovo" );

jr_define( 'COMMON_SEND', "Invia" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Azione" );
jr_define( 'COMMON_VIEW', "Vedi" );

jr_define( 'BACKTOTOP', "Torna su" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Debole" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Sicura" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Dettagli struttura in tab?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Stampa" );

jr_define( 'COMMON_EDIT', "Modifica" );
jr_define( 'COMMON_COPY', "Copia" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Here are some alternatives you might want to consider." );

jr_define( '_JOMRES_BEEZ_WARNING', "Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "aiuto" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Inizio" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "system maintenance" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Gestione permessi" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "strumenti sviluppo" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "lingue" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "prenotazioni" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site structure" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "gestione utenti" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manuale (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Il mio account (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "funzioni programmate" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "funzionalità portale" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integrazione" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "reports/statistiche" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "tasse" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "aiuto" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Aggiornamenti" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "metodo di pagamento" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tariffe default" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "Applicabile solo alle nuove tariffe" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Anni da mostrare" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a tariff type" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "fatture" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "dettagli account" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "cerca" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "pannello amministrazione" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "fatture" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "impostazioni" );
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
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature." );

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

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Soggiorni minimi di" );
jr_define( "_JOMRES_NIGHTSFOR", " ntti per " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property list images, show the property image as a gif if slideshow images are available." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Show as GIFs only if the property is a featured property." );

jr_define( "_JOMRES_AGENT", "Gestore" );
jr_define( "_JOMRES_AGENT_DETAILS", "Dettagli gestore" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agent's listings" );

jr_define( "_JOMRES_PROPERTY_LANG", "Lingua struttura" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "La lingua predefinita della struttura." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Approva automaticamente le nuove strutture" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Approvals" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Strutture in attesa di approvazione" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No properties are awaiting approval" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Approva struttura" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Recensioni struttura" );
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

jr_define( "JOMRES_TAPTOCALL", "Tap e chiama" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "New review for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "A new review has been left for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "New Report" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Utente non registrato" );

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
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Aggiorna" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Aiuto" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Sorry, that was incorrect. Please try again." );


jr_define( "JOMRES_GOOGLE_MAPS", "Google map" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Mostra meteo?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit or Celcius? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Mostra Panoramio?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Mostra tratte?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Mostra traffico?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Mostra perorso in bici?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Abilita punti d'interesse (potrebbe includere i tuoi concorrenti)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Parole chiavi" );

jr_define( "_JOMRES_PLEASE_PRINT", "Please print this email and present it on your arrival." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office use only" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Scan this code into your phone to get directions to us." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Use the built in VIES VAT validation feature?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Congratulations. We were able to validate your VAT number." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "VAT number wasn't entered." );
jr_define( "_JOMRES_TAX_RULES_LIST", "Lista regole tasse" );
jr_define( "_JOMRES_TAX_RULE", "Regole tasse" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the \"edit my account\" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Importa regole tasse" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Modifica regole tasse" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "Partita Iva struttura." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Please enter the VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "Partita Iva valida." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "Partita Iva non valida." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Business details entered here will be used on commission and subscriptions invoices." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Produzione o sviluppo?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to \"production\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Produzione" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Sviluppo" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Dettagli tariffe' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Solo' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'rimasta!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Gestione Foto");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Property image upload service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Aggiungi foto");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Foto camere");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Foto principale struttura");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Foto slideshow");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Elimina lista");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Trascina qui le tue foto");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"The maximum file size for uploads is ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Only JPG and PNG images are allowed.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" these will be used in the Property List . Slideshow images will be shown on the property details page.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Vedi foto");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Elimina foto");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Carica foto");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Icona tipo di camera");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Foto principale struttura");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Carica tutto");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Chiudi" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Benvenuto nella tua scheda" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Benvenuto nel tuo pannello di controllo. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "Il nome della tua struttura" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "Selettore della lingua." );
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

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Form di prenotazione." );
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

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "Link esterni." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellanea ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffe" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tassa di soggiorno." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Le tue strutture." );
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

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Numero di stelle." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Servizi struttura." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "Tutte le prenotazioni." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "Nuove prenotazioni." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "Vecchie prenotazioni." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "Lista ospiti." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particolari." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Servizi extra." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Servizi extra." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Dettagli ospite." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Camere e tariffe." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Camere e tariffe." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Tipo di ospite." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Servizi extra." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Fotogallery." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Foto caricate." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Finito!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "AIUTO" );

//8.0
jr_define('COMMON_PREV' , "Prec" );
jr_define('COMMON_MORE' , "Altro" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Oggi" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Anno" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Mese" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Settimana" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Giorno" );
jr_define('_JOMRES_HLEGEND' , "Legenda" );
jr_define('_JOMRES_HFILTER' , "Filtra" );
jr_define('_JOMRES_HFROM' , "Da" );
jr_define('_JOMRES_HTO' , "A" );
jr_define('_JOMRES_HNEW_BOOKING' , "Nuova prenotazione" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Cauzione" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Ospite" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Pronotazione" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Pubblicazione" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Fattura" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Stato fattura" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Approvato" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Struttura" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Show bookings for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Show invoices for" );
jr_define('_JOMRES_STATUS_ANY' , "Qualsiasi" );
jr_define('_JOMRES_STATUS_PAID' , "Pagato" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Da pagare" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Attivo" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Cancellate" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Pubblicato" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Sospese" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisional booking" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Confirmed booking" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Guests with active bookings" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Guests with past bookings" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Prenotazioni" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Subscriptions" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Commissioni" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "Tutte le mie strutture" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Set as current" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Check in" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Check out" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "prenotazioni" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "strutture" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "ospiti" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "statistiche" );
jr_define( "_JOMRES_HLIST_GUESTS", "Ospiti" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "Oospiti" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "Fatture" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Businesses" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Prenotazioni rapide" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Data di prenotazione" );
jr_define( "_JOMRES_HTWO_WEEKS", "Due settimane" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "This booking will be cancelled. Press OK to cancel the booking." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Current residents" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Impostazioni menu" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Posizionamento del menu" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (corpo pagina)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fisso al top" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fisso in basso" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Inverted navbar (colour change)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Numero prenotazione" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Periodi fissi" );
jr_define('_JOMRES_HDEPOSITS' , "Cauzioni" );
jr_define('_JOMRES_HBOOKING_FORM' , "Form di prenotazione" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Campi obbligatori" );

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

jr_define('EXTENDED_CONFIGURATION' , "Configurazione avanzata" );
jr_define('SIMPLE_CONFIGURATION' , "Configurazione semplice" );
 
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

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Prenotazioni." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "This tab allows you to modify how bookings are treated, plus various other settings." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Edit Guest." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "IVA." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "If a VAT number is entered here then it will be shown on the guest's invoice." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Sconto." );
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

jr_define('_JOMRES_ERROR',"Errore");
jr_define('_JOMRES_ERROR_MESSAGE',"Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Messaggio");
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

jr_define('_JOMRES_SHOW_POWEREDBY',"Mostra lin a Jomres nel footer.");


jr_define('GUEST_BUDGET',"Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Use Budget feature?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nome: ' );


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

jr_define('DATATABLES_SEMPTYTABLE'		, "Nessun dato presente nella tabella" );
jr_define('DATATABLES_SINFO'			, "Vista da _START_ a _END_ di _TOTAL_ elementi" );
jr_define('DATATABLES_SINFOEMPTY'		, "Vista da 0 a 0 di 0 elementi" );
jr_define('DATATABLES_SINFOFILTERED'	, "(filtrati da _MAX_ elementi totali)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "Visualizza _MENU_ elementi" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "Caricamento..." );
jr_define('DATATABLES_SPROCESSING'		, "Elaborazione..." );
jr_define('DATATABLES_SSEARCH'			, "Cerca:" );
jr_define('DATATABLES_SZERORECORDS'		, "La ricerca non ha portato alcun risultato." );
jr_define('DATATABLES_SFIRST'			, "Inizio" );
jr_define('DATATABLES_SLAST'			, "Fine" );
jr_define('DATATABLES_SNEXT'			, "Successivo" );
jr_define('DATATABLES_SPREVIOUS'		, "Precedente" );
jr_define('DATATABLES_SSORTASCENDING'	, ": attiva per ordinare la colonna in ordine crescente" );
jr_define('DATATABLES_SSORTDESCENDING'	, ": attiva per ordinare la colonna in ordine decrescente" );

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
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Most properties in Jomres have a rental management process. Hotels/B&Bs/Pensions rent out individual rooms, and cottages/villas/apartments rent out the entire property. This is invisible to the property manager, but for them to be able to create tariffs for their property you must first add room types that are appropriate for the property type.

For example, A hotel property type would normally need several room types ( double rooms, single rooms and twins ) whereas a villa can only have one room type, e.g. 2 Bedrooms, 5 bedrooms.

It is possible to create room types for properties like Tours. This allows customers to search for properties like tours only, but the Property manager will not create tariffs for this property type, so the Management Process is not relevant to them.
');

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the /jomres/temp/monolog location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the /jomres/temp/monolog directory, which is not secure. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );
