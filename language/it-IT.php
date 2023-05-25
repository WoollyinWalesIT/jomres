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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Prenotazione rapida');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Mostra profili');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Spazi lasciati vuoti intenzionalmente');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configurazione generale');
jr_define('_JOMRES_COM_MR_BACK', 'Indietro');
jr_define('_JOMRES_COM_MR_YES', 'Si');
jr_define('_JOMRES_COM_MR_NO', 'No');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nuova');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Aggiungi Struttura');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Check-in ospite');
jr_define('_JOMRES_COM_MR_SAVE', 'Salva');
// Visualizza prenotazioni
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nome');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', "Data d'arrivo");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Data di partenza');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Spazi vuoti');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Nome utente');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Livello di accesso');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Utente modificato');
// Modificare prenotazioni
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Tutte le prenotazioni');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Modifica prenotazione: ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Arrivi/Partenze');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Ospite');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Camera');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pagamento');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nome');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Cognome');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Richieste speciali');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Nota bene: è possibile che alcune richieste necessitino di pagamenti aggiuntivi.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Annulla prenotazione');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Numero civico');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Indirizzo');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Città');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'CAP');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Numero di telefono');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Numero cellulare');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-Mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', "Non è possibile anullare questa prenotazione perchè l'ospite è arrivato");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Cauzione non pagata');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', "Conferma l'annullamento");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Prenotazione annullata');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', "N° Giorni all'arrivo");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipo di prenotazione');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Nero');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Ricezione');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Nome della camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Camera numero');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Piano');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Accesso per disabili');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', ' Massimo occupanti consentito');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tipo di camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Descrizione tipo camera');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Elenco dei servizi in camera');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Acconto pagato');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Inserire acconto');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Totale da pagare');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Rif. cauzione');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Numero prenotazione');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Acconto');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Acconto salvato');
// Modificare lingua
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Camere disponibili');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'struttura');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tipo d camera');
//Mostrare form  ospite
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', "Modifica i dati dell' ospite");
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nome');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Cognome');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Via');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Via');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Città');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'CAP');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefono');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Cellulare');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleziona una camera');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Durata soggiorno');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Totale');
// Scheda camere
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Camere e struttura');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Camere');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Servizi in camera');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Tipo di camera');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Struttura');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Servizi inclusi');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipo');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nome');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Numero');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Piano');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Massimo occupanti consetito');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Servizi');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Modifica elemento:');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Servizi in camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descrizione della caratteristica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Servizio aggiunto');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Servizio aggiornato');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Tipo di camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Abbreviazione tipo di camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Descrizione tipo di camera');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipo di camera aggiunto');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Modifica elemento:');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nome');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Indirizzo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Cap Città');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regione');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Paese');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'P.iva');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefono');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-Mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Sito Web');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Servizi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'struttura aggiornata');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Servizi inclusi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Abbreviazione dei servizi inclusi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descrizione dei servizi offerti dalla struttura');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Servizio aggiornato');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tariffe');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Nome tariffa');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descrizione');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Valido da');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Valido fino');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tariffa per notte');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minimo  giorni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Massimo giorni ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minimo occupanti consentito');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Massimo occupanti consentito');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tipo di camera');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorare TPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permetti fine settimana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Modificare elemento');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Clonare elemento');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tariffa eliminata');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Modifica tariffa');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Prenotazione salvata');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Check-in ospite ');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Check-out ospite');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Elenco prenotazioni');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Pannello Amministrazione');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Amministra  ospiti');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Amministra struttura');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Controlla la disponibilità');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Nome');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Cognome');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'N° civico');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Indirizzo');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Città');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'CAP');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefono');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Cellulare');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', "Non c'è nessuna camera disponibile per i parametri specificato");
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Grazie per la tua prenotazione, ti auguriamo un piacevole soggiorno. La  prenotazione ti sarà confermata tramite mail al più presto possibile.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Check-in ospite ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Ospite registrato ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Check-out  ospite ');
//Pannello di configurazione
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Supplemento');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tariffe e valute');
jr_define('_JOMRES_COM_A_FILE_UPLOADS', 'Carica file ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Supplemento persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Assicurati di impostare SI se vuoi cambiare il suplemento  persona.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Costo supplemento a persona');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Deposito richiesto in percentuale');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Se impostato in SI, viene richiesto il deposito in percentuale del totale della prenotazione altrimenti si applica un valore fisso.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Deposito richiesto');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Per persona, per notte');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Seleziona SI se vuoi chiedere il pagamento per persona a notte, NO  per camera a notte.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'dimensione del file');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'dimensione massima del file  immagine in kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Occupato');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Dati della prenotazione');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Ricorda che una prenotazione è un contratto giuridicamante vincolante,in caso dovessi annullare o abbreviare il tuo soggiorno ti sarà trattenuta la caparra come penale.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Penalità per anullamento o riduzione del periodo di soggiorno:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', ' 14 giorni');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Stampa la lettera di conferma.');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Stampa fattura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Numero notti: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Tariffa per notte: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'totale');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Stampa fattura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Aggiungi servizio al conto');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descrizione del servizio');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Costo del servizio');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Altri elementi fatturati');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Elementi aggiunto al conto');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Carica immagine');
jr_define('_JOMRES_FILE_UPLOAD', 'Carica file');
jr_define('_JOMRES_COM_A_ODDS', 'Quotazioni.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Elenca chiamate al minicomponente ');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Seleziona SI per vedere in fondo alla pagina il log dei minicomponenti chiamati al termine della esecuzione di Jomres. Disabilita anche la funzione interna di reindirizzamento. Funzione utile ad individuare quali minicomponenti stanno eseguendo determinati servizi.');
jr_define('_JOMRES_FILE_DELETE', 'Elimina questa foto');
jr_define('_JOMRES_FILE_DELETED', 'File eliminato');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Elimina');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Non è possibile eliminare questo pulsante, ci sono prenotazioni.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Camera eliminata');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Elimina la caratteristica della camera');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Non è possibile eliminare questa caratteristica della camera, perchè assegnata ad altre camere. Elimina la caratteristica da quelle camere e riprova.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Caratteristica della camera eliminata');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Elimina la caratteristica della struttura');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Non è possibile eliminare questa caratteristica della struttura, perchè è assegnata ad altre strutture. Elimina la caratteristica da quelle strutture e riprova.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Caratteristica della struttura eliminata');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Elimina il tipo di camera');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tipo di camera eliminato');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'struttura eliminata');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'struttura eliminata');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Non puoi eliminare questa struttura.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', "Larghezza dell'immagine a grandezza naturale");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Vedi Mappa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descrizione');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Orario di check-in');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Attività della zona');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Come aarivare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeroporti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Altri mezzi transporti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Politica e clausola esonerativa');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Indirizzo');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Permettere prenotazione diretta');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Imposta SI per permettere le prenotazioni on-line.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Prenotazioni  per un periodo fisso.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Se imposti SI, la prenotazione sarà per un periodo fisso. Se imposti NO, controlla di non aver impostato in SI  "Giorno di arrivo predefinito" (a meno che si voglia forzare gli arrivi in un giorno predefinito) in altro modo non sarà posibile ottenere link multipli del calendario disponibilit&agrave;.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Periodo di prenotazione: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Camere prenotazione');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Periodo massimo, Esempio 3x7 periodo di prenotazione = 21 giorni');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Struttura con una sola camera');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Vedi prenotazione');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Conferma prenotazione');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Lunedì');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Martedì');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Mercoledì');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Giovedì');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Venerdì');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sabato');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Domenica');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Lun');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Mar');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mer');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Gio');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Ven');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sab');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Dom');
jr_define('_JOMRES_COM_A_AVLCAL', 'Calendario di disponibilità.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Colore delle carattere per la data attuale ');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Colore delle carattere per i giorni nel mese mostrato ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Colore delle carattere per i giorni che non sono nel mese mostrato');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Colore dello sfondo della casella per i giorni quando è disponibile la camera/struttura.');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Colore dello sfondo per i giorni che non stanno nel mese mostrato');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Sfondo della casella per giorni occupati');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Sfondo della casella per le camere con la prenotazione provvisoria (prenotazioni con nessun deposito fatto)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Fondo della casella per date  passate');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Occupata/ non disponibile');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponibile per la prenotazione');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Prenotazioni provvisorie');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Giorno di arrivo predefinito');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Solamente per strutture che offrono periodi fissi di prenotazione. Seleziona il giorno degli arrivi.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Giorno di arrivo fisso');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Periodo di soggiorno (giorni)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Mostrare calendario della disponibilità');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Colloca questo in SI  per mostrare il calendario della disponibilità.');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilità');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Fai clic per  per vedere le date libere nel modulo di prenotazione.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Camere indisponibili');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nuova camera indisponiblie');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Check-out  ospite');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Ospite eliminato');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Non è possibile eliminare questo ospite perchè ha delle prenotazioni aperte. ');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'indifferente');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Formato del calendario');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Formatto di immissione date nel calendario');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Questo permette al utenti cambiare il formato di immissione delle date.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Le prenotazioni per un periodo fisso permettono brevi pause');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Durata della pausa');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Pubblicato');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Tracce');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Utente (nome utente)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtro  data');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stato');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Arrivi in sospeso');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Arrivi di oggi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'In casa');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Partenze di oggi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Partenza scaduta');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Non  arrivato');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Camera creata');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Camera aggiornata');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Camera eliminata');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Caratteristica della camera creata');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Caratteristica della camera aggiornata');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Caratteristica della camera eliminata');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'struttura creata');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'struttura aggiornata');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'struttura eliminata');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Impostazione della struttura eliminata');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'struttura pubblicata');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tariffa creata');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tariffa aggiornata');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Costo del servizio aggiunto');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Check in ospite');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Immetti deposito ');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Ospite aggiunto');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Ospite aggiornato');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Prenotazione una camera');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Crea un extra');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Aggiorna un extra');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Elimina un extra');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra pubblicato.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Immetti una prenotazione nera .');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Elimina prenotazione nera .');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Descrizione');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nome');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Costo');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra aggiornato');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', "Modificare l'elemento");
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra eliminato');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Extra');
jr_define('_JOMRES_COM_A_EXTRAS', 'Mostrare extras al momento della prenotazione');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Imposta in SI per mostrare gli extra che vuoi offrire ai tuoi ospiti');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extra facoltativi.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', "Data di inizio e di fine dell' indisponibilità");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Motivazione');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Camere Indisponibili');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Errore durante la prenotazione, una o più  camere selezionate non sono libere.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Camere inclusa fra le indisponibili');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nessuna camera indisponibile da elencare');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Numero di stelle');
jr_define('_JOMRES_COM_A_RESET', 'Reimpostare');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Prenotazione annullata');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Ricerca quì per:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Simbolo di valuta');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Codice di valuta');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Dettagli');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Limitare prenotazione avanzata');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Imposta in  SI se vuoi limitare le prenotazioni anticipate (utilizza il campo di seguito per impostare  i giorni).');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Giorni di prenotazione avanzata limitati a:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Imposta');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Imposta della camera');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Importo fisso  (imposta)');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Imposta percentuale');
jr_define('_JOMRES_COM_A_EUROTAX', 'Imposta');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Imposta percentuale');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Archiviare tutte le registrazioni');
jr_define('_JOMRES_FRONT_TARIFFS', 'Le nostre tariffe');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tariffa');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Descrizione della tariffa');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tipo di camera');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Valida da');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Valida fino');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Per persona a notte');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'a notte');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Non includere fine settimana');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Durata minima della permanenza (gg)');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Durata massima della permanenza (gg)');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Minimo occupanti');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Massimo occupanti');
jr_define('_JOMRES_FRONT_PREVIEW', 'Anteprima');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Modificare etichette');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Aggiornare testo cliente.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Modifica lingua');
jr_define('_JOMRES_FRONT_PTYPE', 'Tipo di struttura');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Elencare tipi di struttura');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Modificare tipo di struttura');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tipo di struttura');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descrizione del tipo di struttura');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tipo di  struttura salvato');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipo di struttura eliminati');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Memo del pagamento');
jr_define('_EXTRAS_NOEXTRAS', 'Nessun servizio addizionale da aggiungere alla fattura');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Deposito');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Quantità completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Costo applicato al momento della prenotazione');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', ' Sceglie deposito se deve essere richiesta solo una caparra, altrimenti verrà richesto il pagamento della somma completa.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mesi del calendario da mostrare');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Nella disponibità della camera, quanti mesi del calendario devono essere mostrati');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Payment Gateways');
jr_define('_JOMRES_COM_A_CANCEL', 'Cancella');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Seleziona la camera che desideri tenere fuori servizio, e le date. Se la camera non ha il ceck selezionato, non potr&agrave; essere inclusa nelle indisponibili fino a che la prenotazione non sar&agrave; cancellata.<br/> Quando hai selezionato le date appropriate, clicca il bottune blu applicare ricontrolla la disponibilit&agrave;. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Sembra che sei stato scollegato per inattivit&agrave;.Perfavore, esegui nuovamente il login.</b> Please log in and try again.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Ragione');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Usi dei gateway di pagamento');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Seleziona un metodo di pagamento	.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Gateway abilitato');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Modifica il dettaggio dei plug-in');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Settaggi plug-in inseriti');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Visualizza il sito di questa struttura');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Link esterno');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Inserisci qui un link al tuo sito.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Edita Carta di Credito');
jr_define('_JOMRES_COM_A_EDITICON', 'Dimensione icone');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Mostra link slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Mostra slideshow inline');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Mostra link alle tariffe');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups permessi');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Carica foto');
jr_define('_JOMRES_A_TABS_MISC', 'Misc');
jr_define('_JOMRES_A', 'Configurazione Sito');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Usa le impostazioni di struttura globali');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', "Per assegnare un'immagine a questa funzione è necessario prima caricare le funzionalità di business immagini per la /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages / caratteristiche / cartella. ");
jr_define('_JOMRES_A_ICON', 'Icona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Seleziona il plugin di ricerca che vuoi usare.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>La tua ricerca non ha fornito risultati. Ti preghiamo di modificarne i parametri e provare ancora.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Confermi');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Prenota Subito!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Prenota Subito!');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Mostra tariffe in linea');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Mostra Indirizzo');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Mostra informazioni sulla struttura ricettiva');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Mostra disponibilità delle camere');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Mostra le informazioni relative all indirizzo sotto questo link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Mostra i dettagli della struttura sotto questo link');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Mostra le strutture e la disponibilita sotto questo link');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Elenca le strutture ricettive per stato');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Elenca le strutture ricettive per regione');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Elenca le strutture ricettive per citt&agrave;');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Seleziona le caratteristiche che ti interessano e avvia la ricerca.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Cerca');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Inserisci i termini da cercare qui sotto e avvia la ricerca.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Termine/i da cercare: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Seleziona le date che ti interessano e avvia la ricerca..');
jr_define('_JOMRES_SEARCH_PTYPES', 'Elenca le strutture ricettive per tipologia');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrare la data di partenza inserita?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Selezionare NO se non vuoi mostrare il box di selezione per la data di partenza. Utilizza NO solo se sai cosa stai facendo, cosi facendo la data di partenza selezionata sara sempre il giorno dopo quella di arrivo.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Limite descrizione');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', "Limita il numero di caratteri delle descrizioni-struttura mostrate nell'elenco strutture .");
// v1.4g
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tariffe Flat');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Media');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Seleziona il tipo di tariffa che vuoi utilizzare');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Hai due tipi di tariffe da utilizzare. La prima, il metodo 'tariffa flat' ti permette di offrire tariffe basate sul tipo di trattamento, ad esempio trattamento bed and breakfast, mezza pensione o pensione completa. Scegli la tariffa 'media' se vuoi regolare le tue tariffe in base al periodo della prenotazione, ad esempio, bassa stagione, media o alta. Il sistema trovera tutte le tariffe per ciascun giorno di prenotazione, facendo la media tariffaria del periodo");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() formato data utilizzato?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Pubblica');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Sospendi');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Utilizza tipo camera globale');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Per assegnare una foto a questo tipo di camera devi prima caricare una immagine nella cartella /images/stories/jomres/rmtypes/. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Errore inserimento colore di sfondo');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Form predefinita per nazione');
jr_define('_JOMRES_JAVASCRIPT_', 'Elementi evidenziati in rosso sono richiesti.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Gli utenti possono registrare le proprie strutture');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Impostare su SI se vogliamo che gli utenti siano in grado di registrare le proprie strutture senza il nostro intervento.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Elementi evidenziati in rosso sono richiesti.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Crea struttura');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Mostra calendario dall&acute;inizio dell&acute;anno?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Il calendario mostra dall&acute;inizio dell&acute;anno corrente.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Numero di camere disponibili');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Indietro ai dettagli struttura');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Tipo di camera');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limite di ricerca casuale');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Mostra collegamento convertitore valute di google nella lista tariffe?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Converti costo in :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Permetti le modifiche utilizzando un editor HTML?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Usare questo modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone, poi selezionare la camera desiderata dalla lista. Cliccare qualsiasi camera disponibile per aggiungerla alla prenotazione. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando il modulo avr&agrave; abbastanza informazioni troverai il pulsante per inviare la tua prenotazione e confermare.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Usare questa modulo per fare le vostre prenotazioni. Portare il cursore del mouse sopra l&acute;immagine "i" per maggiori informazioni circa la colonna. Modificare i dati della vostra prenotazione come data di arrivo e partenza e numero di persone. Fatto questo, potrete aggiungere servizi extra  che potrebbero richiedere il vostro indirizzo. Quando la modulo avr&agrave; abbastanza dati informativi troverete il pulsante per inviare la vostra prenotazione.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Dati prenotazione');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleziona i dettagli della prenotazione');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilit&agrave; ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Seleziona la camera desiderata');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Vedi qui se la struttura &egrave; disponibile al momento.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Servizi Extra opzionali');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleziona un servizio aggiuntivo che volete includere nella prenotazione');
jr_define('_JOMRES_COM_PERDAY', 'Per notte');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Il tuo indirizzo');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Inserire i vostri dettagli. Nota che tutti i campi sono richiesti eccetto il numero di cellulare');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Camere disponibili');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Camere selezionate');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>La data possibile di arrivo pi&ugrave; vicina &egrave;: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Per notte:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Totale:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extra:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Tasse:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Sconto:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Totale generale:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Ospiti');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Aggiungi la camera selezionata');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Seleziona per rimuovere la camera');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipi di ospite');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tipo');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Il genere di cliente, es Bambini  5-10 anni, o Studenti ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Note');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Tutte le informazioni riguardo il tipo cliente');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Massimo');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Il masimo numero  di tipi clienti che possono essere selezionati nella modulo di prenotazione');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'la percentuale');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'La Cifra calcolata &egrave; una percentuale sulla base di tariffe calcolate per la stanza. Se questa &egrave; impostata su NO la cifra &egrave; specificata semplicemente da aggiungere o sottrarre dalla base del valore della stanza.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Aggiungi variabile?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'La cifra calcolata &grave; aggiunta o rimossa dalla base della cifra calcolata per la stanza. Impostare questo su NO se vogliamo ci sia uno sconto dalla base della tariffa. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Variabili');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Il costo delle variabili');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modifica tipo ordine cliente');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Cancella tipo cliente');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Crea tipo cliente');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Aggiorna tipo cliente');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Aggiorna tipo cliente');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Mostra collegamento alla lista delle stanze nella pagina dettagli struttura?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Mostra <b>solo</b> calendario disponibilit&agrave; /Lista camera?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Impostare su SI per disabilitare intestazione e dettagli, in questo modo vedremo solo le liste e il calendario nella sezione strutture.  (es appartamenti, cottage ecc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Arr-Part intervallo minimo');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Il minimo di giorni che deve intercorrere tra la data di partenza e di arrivo in fase di prenotazione.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Form prenotazione lista camere mostra il numero della camera');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Form prenotazione lista camere mostra il nome della camera');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Form prenotazione lista camere mostra il nome della tariffa');
jr_define('_JOMRES_ORDER', 'Ordine');
jr_define('_JOMRES_REQUIREDFIELDS', 'Richiesto');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Giorni prima dell&acute;arrivo');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Il minimo numero di giorni che devono passare, da "oggi", prima della data di arrivo.');
jr_define('_JOMRES_DTV', 'Tipo data variazioni');
jr_define('_JOMRES_DTV_DOW', 'Giorno della settimana');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tipo ospite predefinito');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Il numero predefinito del primo tipo ospite. Se utilizziaamo i tipi ospite, questo &egrave; il primo numero predefinito per il primo tipo opsite nella form di prenotazione che viene impostata.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Solo gli utenti registrati possono prenotare online?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Spiacente, dovete registrarvi per poter prenotare online. Cliccare qui per registrarsi al sito. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Colore font per attuali prenotazioni');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Bordo settimana');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Stanza prenotata');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Prenotazione fasulla');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Deposito pi&ugrave; vicino?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Richiedi una cauzione?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'La tariffa è settimanale?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Abbiamo questa opzione per storicizzare la tariffa caricata per ogni giorno  o valori settimanali. Se storicizziamo queste settimanalmente, bobbiamo impostare la opzione su SI.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Costo per settimana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Date di arrivo fisse ricorrenti: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quando le date di arrivo fisse sono selezionate, viene mostrato il numero che appare nella lista a discesa per le date disponibili');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Data arrivo non corretta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data partenza non corretta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Il perido selezionato &grave; troppo breve. Dovete scegliere pi&grave; giorni tra la data di arrivo e quella di partenza:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Il vostro intervallo &egrave;');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Variante tipo ospite non corretta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Seleziona il numero di ospiti ed il tipo');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Siete troppi per la tariffa disponibile');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Hai scelto pi&ugrave, stanze che ospiti, clicca su un nome stanza per rimuoverlo dalla selezione');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Tropppi ospiti per i letti disponibili');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Desideri scegliere pi&ugrave; stanze');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Seleziona una stanza');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Il nome &egrave; richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Il cognome &egrave; richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Nome casa o numero richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Indirizzo richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Citt&agrave; richiesta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Regione richiesta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Codice postale richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Nazione richiesta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefono richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Cellulare richiesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Indirizzo Email richiesto');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Abbiamo camere libere!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Non hai ancora selezionato una camera');
jr_define('_JOMRES_BOOKING_NUMBER', 'Prenotazione no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Si al colore di sfondo nel messaggio');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump vars del template?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Impostare questo per abilitare un dump DHTML delle variabili del template per ogni template FRONTEND  utile se volgliamo che certi elementi siano visibili con certi template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figure a percentuale');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Impostare questo su SI se la singola persona ha un calcolo a figuara a percentuale. Oppure viene applicato il sistema tasso fisso.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Camere disponibili/limite tariffa');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Usa questo campo inserimento per inserire il numero di stanze disponibili e le tariffe che mostreremo nel modulo di prenotazione. Impostando su zero nessun limite viene praticato. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Non abbiamo camere disponibili al momento!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Prenota ora: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Modalità di modifica globale?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Fai attenzione. Se impostata su SI, editing mode agisce sul testo personalizzato per TUTTE le strutture nel sistema per la caratteristica che stai modificando.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbolo globale di valuta');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Componente wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Seleziona SI se il componente risulta wrapped, in questo modo le aree moduli e header non saranno visibili');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Solo Weekend');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Giorni Weekend');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Seleziona i tuoi giorni weekend. Le tariffe che permettono o non permettono i weekend prenderanno in considerazione questa scelta nella generazione delle liste camere.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Seleziona la tua nazione prima di aggiungere qualsiasi informazione riguardo la struttura');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Salva i cambiamenti alla struttura prima di caricare le immagini');
jr_define('_JOMRES_TARIFFSFROM', 'Prezzi da - ');
jr_define('_JOMRES_SEARCH_ALL', 'tutte');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Cerca per Nazione');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Cerca per Regione');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Cerca per comune');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Cerca per servizi.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Cerca');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Inserisci la parola nel box e invia.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Cerca parola(e): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Inserisci le date di arrivo e partenza e clicca il pulsante per trovare tutte le strutture disponibili per i giorni selezionati.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Elenca tutte le strutture in base al tipo.');
jr_define('_JOMRES_SEARCH_RTYPES', 'Elenca tutte le strutture in base al tipo di camera');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Standard');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nome struttura');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Regione struttura');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Comune struttura');
jr_define('_JOMRES_SORTORDER_STARS', 'Stelle');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Scheda struttura - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Form Prenotazione');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Aggiorna il tuo indirizzo');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ri-controllo disponibilita camere<br/>(La selezione della camera sara resettata)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Verifica disponibilita');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Attendi. modifica servizi extra');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Attendi. Modifica camera selezionata');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Attendi. Modifica indirizzo selezionato');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Uno o  pi&ugrave; dati indirizzo sono incorretti.');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'File uploads');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Usa valuta generale?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Seleziona SI per utilizzare la stessa moneta su TUTTE le strutture.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Immagine Camera');
jr_define('_JOMRES_CURRENCYFORMAT', 'Formato valuta');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opzioni di ricerca');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Logs disponibili');
jr_define('JOMRES_COM_A_MESSAGE', 'Messaggio');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normale');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avanzato');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Microgestione');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Configurazione tariffe');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Avviso: il passaggio tra diverse modalità di modifica delle tariffe può comportare la perdita di dati. Vedi la nota qui sotto riguardo a questo.</b>.
<br/><br/>
Hai due opzioni su come configurare le tue tariffe.<br/>
Microgestione: puoi modificare il prezzo per ogni singolo giorno per ogni tipo di camera/proprietà. <br/>
Avanzato: puoi creare un set di tariffe non collegate tra loro. <br/>
<br/>
Micromanage ti consente di variare le tariffe su base giornaliera senza dover gestire risme di tariffe, è fatto incrociando tra loro molte tariffe diverse. Ciò si traduce nella creazione di una serie di tariffe per te che coprono un periodo di tempo, ma non puoi sovrapporre le tariffe l'una all'altra.<br/>
La modalità avanzata consente di creare tariffe non collegate ad altre tariffe. Ciò ti consente di creare prezzi per la tua proprietà che altrimenti non potresti creare in modalità Micromanage. È più laborioso da usare, perché devi assicurarti che le date valide da/a di ogni tariffa corrispondano perfettamente, ma ti permette di creare tariffe più complicate.<br/>
<br/>
Se passi da Advanced a Micromanage, tutte le tariffe esistenti verranno rimosse.<br/>
<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Mostra la lista delle camere nella scheda della struttura?');
jr_define('JOMRES_PROPERTYTYPE', 'Tipo struttura');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Capienza camera');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max persone in prenotazione');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Aggiungi nota');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Modifica nota');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Elimina nota');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Vedi note');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Nuova nota aggiunta');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Nota modificata');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Nota Eliminata');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Elenca prenotazioni');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Le mie prenotazioni');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Vedi prenotazioni');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Vedi preferiti');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Non hai ancora aggiunto nessuna struttura ai preferiti!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipo struttura');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Offerta');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Attivo');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Questo plugin ti permette di configurare i prezzi delle tue camere dinmicamente.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'La maggior parte delle strutture ricalcolano i prezzi delle camere in base al numero di camere disponibili in una data specifica. Questo consente di offrire sconti su tipi di camere non occupate in uno specifico periodo con lo scopo di attrarre ospiti che altrimenti non si avrebbero.<br/> Abilitare e configurare questo plugin consente di offrire prezzi variabili basandosi sul numero delle camere di un certo tipo, disponibili nella struttura nel periodo inserito.<br/> Days threashold definisce il periodo in cui la data di arrivo deve cadere prima che i prezzi siano modificati da questo plugin, quindi le opzioni percentuali permettono di configurare la percentuale di camere disponibili prima che lo sconto inserito sia applicato.');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentuale camere occupate  10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentuale camere occupate 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentuale camere occupate 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentuale camere occupate 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Sconto %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' Scontata da ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' per ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Prezzo camera non scontato ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Trova una google maps API key su <a href="https://console.cloud.google.com/projectselector2/google/maps-apis/credentials" target="_blank">Google maps</a>. Una volta inserito il tuo map key qui, il sistema mostrera la mappa nella scheda della tua struttura.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Attivo?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Seleziona SI se vuoi offrire offerte last minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Soglia');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Se una prenotazione risulta effettuata e il giorno di arrivo &egrave; solo N giorni dalla data di prenotazione, allora lo sconto puo essere applicato');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Sconto');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'In percentuale');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Uno sconto &egrave; stato applicato su questa prenotazione!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Il costo della permaneza &egrave; stato ridotto di ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Questa struttura offre uno sconto last minute di  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' percentuale se prenoti il tuo arrivo prima ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' percentuale aggiuntiva se prenoti il tuo arrivo prima ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Prenota ora per avere il massimo da questa offerta!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Informazioni complete tariffa');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Seleziona SI per mostrare informazioni  pi&ugrave; dettagliate sulle tariffe nel popup dettagli/tariffe');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimizza opzioni di configurazione');
jr_define('_JOMCOMP_AMEND', 'Correggi Prenotazione - Seleziona struttura');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleziona nuova struttura');
jr_define('_JOMCOMP_AMEND_HEADER', 'Contratto originale:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Deposito pagato');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Deposito Non Pagato');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Correggi Totale');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Correggi Deposito');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Annulla');
jr_define('_JRPORTAL_CPANEL', 'Pannello di controllo');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Commissione standard');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Scegli la commissione standard che verra applicata su una struttura nel caso in cui nessun altra commissione sia stata configurata.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Lista commissioni prezzi');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Commissioni prezzi');
jr_define('_JRPORTAL_CRATE_TITLE', 'Titolo');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tipo');
jr_define('_JRPORTAL_CRATE_VALUE', 'Percentuale commissione');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Codice valuta');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Elenco strutture');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nome struttura');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Indirizzo Struttura');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', ' Alle strutture con sfondo rosso non &egrave; stato ancora applicato un tasso di commissione.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistiche');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tasso di commissione');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Elenco prenotazioni');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Codice struttura');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Codice pagamento');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Totale prenotazioni');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data di archiviazione');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descrizione');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Puoi selezionare un file di linguaggio specifico per un tipo di struttura scegliendo come nome di una sottodirectory quello del tipo di struttura, ad esempio "bed and breakfast" e copiando il file di linguaggio dentro quella sottocartella. Puoi quindi modificare quel file di linguaggio per il tipo di struttura corrispondente in modo che le camere possano diventare, ad esempio, motoscafi, auto etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Non puoi eliminare questa struttura in quanto lunica a cui hai accesso. Se vuoi disabilitarla, usa il pulsante di disabilitazione nella barra degli strumenti. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Totale pernottamento ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'notte(i) a ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'per camera ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Totale servizi aggiuntivi');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Riepilogo prezzo ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Prego Leggere ed accettare ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Riepilogo della tua prenotazione visualizzato in basso.<br />Per effettuare qualche cambiamento, cliccare nel pulsante di modifica prenotazione. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Se hai bisogno di cambiare qualsiasi informazione mostrata sopra clicca qui ');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modifica prenotazione');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Inserire qualsiasi richiesta speciale nel box in basso. ');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Confermo che le informazioni sopra sono corrette e accetto il ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'per persona per notte ');
// Jomres 3.1.10
// Jomres 3.1.13
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'di');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Inizio');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Prec');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Pros');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'Fine');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Risultati');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Nota che questo non &egrave; un modulo di prenotazione, ma stai inviando una email.<br/>Inserisci il messaggio, con le richieste che vuoi inviare a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contatta struttura');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Richiesta da ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Grazie per la tua richiesta, il tuo messaggio &egrave; stato inviato al contatto email della struttura, una copia &egrave; stata inviata sul tuo indirizzo email come promemoria. Verrai ricontattato dalla struttura il prima possibile.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' Oggetto ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Richiesta');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Seleziona il tipo di camera dalla lista sulla destra');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min camere gi&agrave; selezionato');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Numero minimo camere gi&agrave; selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere abilitata. Permette di avere tariffe scontate quando piu di N camere sono gi&agrave; state selezionate nel modulo di prenotazione. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max camere gia selezionato');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Numero massimo camere gia selezionato nella prenotazione prima che la combinazione tariffe/camere possa essere disabilitata. Permette di fermare offerta di questa combinazione tipo camera/tariffa una volta che N camere sono gia state selezionate nel modulo di prenotazione. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Nota che i supplementi per persona singola impostati qui non saranno usati se sono gia stati impostati nella configurazione generale. Le impostazioni qui sono una alternativa ad avere tariffe flat sui supplementi per singola persona, non una aggiunta alla tariffa flat SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponibile');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Qualche prenotazione');
jr_define('_JOMRES_AVLCAL_HALF', 'meta prenotata');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Quasi tutta prenotata');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Esaurita');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per settimana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per giorno');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per prenotazione');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per persona per prenotazione');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per persona per giorno');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per persona per settimana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per giorni (min giorni)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per giorni X camere selezionate');
jr_define('_JOMRES_REGISTRYREBUILD', 'Ricostruisci il registro minicomponente');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalmente Il plugin jomres registry viene ricostruito automaticamente ogni volta che visualizzi il gestore plugin e aggiungi o rimuovi plugin, tuttavia &egrave; possibile che non si possano usare queste opzioni per qualsiasi motivo, quindi puoi usare questa funzione per ricostruire il registro manualmente. Se hai accesso al Gestore Plugin e alle opzioni di upgrade allora probabilmente non avrai bisogno di usare questa funzione. Dovrai ricostruire il registro plugin qualvolta tu aggiunga un minicomponente non utilizzando il gestore plugin per farlo.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registro ricostruito con successo');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'ERRORE di ricostruzione del registro dei minicomponenti. Controlla il log errori di Jomres per vedere se esiste un record relativo a cosa ha causato l errore of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Cerca tramite fascia di prezzo.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Non hai ancora effettuato nessuna prenotazione!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Modifica il tuo tipo struttura');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleziona il tuo tipo struttura');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'La tua richiesta...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limite elenco strutture');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Il numero di pagine da mostrare in una pagina dopo una ricerca');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Opzione di ricerca integrata');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'La Opzione di ricerca integrata permette ai tuoi utenti di ricercare nel sistema le strutture in relazione ad una serie di funzioni. Se hai gia utilizzato le funzioni di ricerca di Jomres in Joomla sarai sicuramente abituato a queste impostazioni.<br/>Questa funzione ci permette di offrire la gestione della ricerca direttamente in jomres per quegli utenti che non vogliono utilizzare un modulo di ricerca di Joomla, o per utenti che utilizzano altri cms, CMS che non hanno un modulo di ricerca Jomres.<br/>Ricorda che se scegli di ricercare qualcosa tramite link (non menu a tendina) le altre opzioni di ricerca non saranno disponibili, verra cercato il solo elemento che corrisponde al link cliccato.<br/>Nota che di default il layout della ricerca integrata non &egrave; bellissimo. Questo perche il file del template che genera il layout deve includere tutte le opzioni possibili, alcune delle quali sono incompatibili.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Attivare questa opzione?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Se questa opzione &egrave; attiva, allora qualsiasi chiamata verso Jomres che mostra la lista strutture mostrera anche le opzioni di ricerca.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Usa colonne');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Qualsiasi opzione di ricerca che hai definito come link (dove pertinente) sara mostrata come colonna (IE br messo alla fine del link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Seleziona la regione tramite la combo menu a tendina');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Offri un menu a tendina per effettuare la ricerca in base a Nazioni/Regioni/Comuni. Se vuoi usare questa opzione imposta su NO le opzioni di ricerca per province/comuni qui sotto.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Ricerca in base al nome struttura');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Visualizza la ricerca in base al nome struttura inserito.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Visualizza come menu a tendina?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Seleziona NO se vuoi visualizzare la lista come links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Ricerca in base al Comune/Regione');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Visualizza la ricerca in base alla Regione inserita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Visualizza come menu a tendina?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Seleziona NO se vuoi visualizzare la lista come links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Ricerca in base al tipo struttura');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Visualizza la ricerca in base al tipo struttura inserito');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Visualizza come menu a tendina?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Seleziona NO se vuoi visualizzare la lista come links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Ricerca in base al tipo camera');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Visualizza la ricerca in base al tipo camera inserito');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Visualizza come menu a tendina?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Seleziona NO se vuoi visualizzare la lista come links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Ricerca in base ai servizi offerti');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Visualizza la ricerca in base al tipo di servizio inserito');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Visualizza come menu a tendina?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Seleziona NO se vuoi visualizzare la lista come immagini tooltip e caselle di spunta');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Ricerca in base alla descrizione');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Visualizza la ricerca in base alla descrizione inserita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Ricerca in base alla disponibilita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Visualizza la ricerca in base alla disponibilita desiderata inserita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Ricerca in base alla fascia di prezzo ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Visualizza la ricerca in base alla fascia di prezzo inserita');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Incrementi fascia di prezzo');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres cerchera tutti i valori delle tariffe che rientrano in una serie di fasce di prezzo basandosi sugli incrementi impostati qui.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Come default, se una struttura non &egrave; selezionata in Jomres eseguira una ricerca. Se questa ricerca non viene attivata da un modulo di ricerca allora produrra risultati completamente casuali. Questa opzione ti permette di limitare il numero di risultati della stessa ricerca casuale.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Impostazioni Cron job e logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Informazioni Pseudocron job. La funzionalita pseudocron e richiesta per invio pagamenti e gestione commissioni.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Minicomponenti cron installati. Per eseguire un cron job individuale usa il link specificato sotto. Nota che i cron jobs non producono nessun output quindi non vedrai nessuna informazione sulla pagina. Fanno riferimento invece al log dei job sotto.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metodo');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Se non hai accesso ai cron jobs, Imposta questo come Minicomponente, altrimenti crea un cron job e fallo girare<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Visualizza logging sul browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funziona solo se il metodo &egrave; impostato su Minicomponente.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging abilitato');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Seleziona SI per abilitare il logging. I risultati dei log verranno visualizzati sotto.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Modifica Template');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Campi personalizzati');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Qui puoi impostare semplici campi personalizzati che verranno mostrati nel modulo di prenotazione.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nome campo (niente spazi)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valore di default');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descrizione');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Richiesto');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantita massima');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Se la quantita massima &egrave; impostata su un numero maggiore di 1 allora verra visualizzato agli ospiti un menu a tendina da cui scegliere la quantita di extra che desiderano.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Percentuale Tassa');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Codice Tassa');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Descrizione Prezzo');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Non puoi eliminare questa Percentuale Tassa.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Prezzo');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Invoices');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Non Pagato');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Pagato');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Annullata');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'In sospeso');
jr_define('_JRPORTAL_INVOICES_USER', 'Utente');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Stato');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Aumentata');
jr_define('_JRPORTAL_INVOICES_DUE', 'Scadenza');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Sottoscrizione');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Totale omnicomprensivo');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Frequenza ricorrente');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Giorno del mese ricorrente');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Codice valuta');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Elementi in linea');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nome');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Descrizione');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Prezzo iniziale');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Quantita iniziale');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Sconto iniziale');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Totale iniziale');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Codice Tassa');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Descrizione Tassa');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Percentuale tassa');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Sovrascrivi impostazioni standard gateway di Jomres?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Visualizza i miei pagamenti');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Codici Sconto');
jr_define('_JRPORTAL_COUPONS_DESC', 'I codici sconto possono essere creati &egrave; passati agli utenti come incentivi ad affettuare prenotazioni. Le date di validita da-al si riferiscono al giorno in cui la prenotazione viene effettuata, non alle date della effettiva prenotazione.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Codice Sconto');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Valido dal');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Valido sino al');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Ammontare sconto');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Lo sconto &egrave; una percentuale');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Solo camera');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Se hai un codice sconto, inseriscilo nel box e clicca il link "Salva codice sconto" per salvare i dettagli dello sconto nella tua prenotazione.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Salva codice sconto');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Codice sconto salvato');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Codice sconto non valido');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valore sconto');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Prenotazione scontata. Codice sconto/valore sconto/impostazioni codice sconto : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Scegli lingue');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Scegli le opzioni lingua da mostrare nel menu a tendina delle lingue.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Mostrare il menu a tendina delle lingue?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Caro');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Grazie per esserti registrato');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Il tuo Nome Utente : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'La tua password : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Accedi per vedere le tue prenotazioni ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Codice sconto Salvato');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Codice sconto Eliminato');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Nome utente');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Numero mobile di notifica');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Usare il formato 'Codice nazione, numero mobile'. Per esempio un numero di cellulare italiano sarebbe qualcosa tipo '397979123456'. Lascia questo campo bianco se non vuoi che venga inviata nessuna notifica mail al tuo telefonino.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Completa il modulo. Assicurati di aver inserito il locked IP(IP di questo server), imposta Callback to HTTP POST. Devi impostare IP callback to " .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback il nome utente e la password.<br/>
Se registri piu di una connessione API, il nome della descrizione che inserisci per ognuna deve essere unico - Non puoi avere API multiple con lo stesso nome.<br/>
Dopo aver inviato il modulo con successo, i tuoi dettagli di autenticazione saranno visualizzati, compresi tutti gli API ID delle connessioni impostate (api_id). Questi dettagli di autenticazione sono necessari durante la connessione al gateway Clickatell per spedire un messaggio.<br/>
<br/>
Usa il tuo Nome Utente, password e api_id per completare i campi sopra.<br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Form Prenotazione lista camere mostra accesso disabilitato');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Form Prenotazione lista camere mostra max persone');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Notare che i prezzi delle camere sono stimati e che il prezzo pieno della prenotazione non verra calcolato fino a quando non avrai aggiunto una o piu camere alla tua selezione.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Pacchetti di sottoscrizione');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nome');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Descrizione');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Pubblicato');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Totale');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Limite strutture');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Sottoscrivi');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Usa la funzionalita di gestione sottoscrizione');
jr_define('_JOMRES_COM_NEWUSER', 'Crea nuovo utente alla prenotazione');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Crea un nuovo account utente su prenotazioni effettuate da utenti non registrati.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Clicca qui per inserire la tua struttura');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Grazie per la tua prenotazione - Seguono dettagli nuovo utente');
jr_define('_JOMRES_LATLONG_DESC', 'Usa il mouse per scorrere la mappa, e trascinare il puntatore alla posizione della vostra proprietà per impostare la latitudine e la longitudine.');
jr_define('_JOMRES_CONTROLPANEL', 'Pannello amministrazione');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Mostra ordine');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Mostra ordini');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Inserisci la tua struttura');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Pericolo : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Ci dispiace, ma il codice pacchetto di sottoscrizione non risulta presente.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Ci dispiace, hai gia sottoscritto un pacchetto gratuito, non puoi sottoscriverlo ancora.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'I tuoi dettagli commerciali');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nome azienda');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Partita Iva');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Indirizzo');
jr_define('_JOMRES_INVOICE_NUMBER', 'Ordine N. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleziona le date che vuoi riservare, o inibire al sistema causa lavori di manutenzione, chiusura, motivi personali. Quando avrai selezionato le date appropriate, clicca sul pulsante "applica" per controllare nuovamente la disponibilita. <br/> 
<br/> 
Se la struttura ha gia prenotazioni per le date selezionate, non sara possibile selezionare le stesse date fino a quando queste prenotazioni non verranno cancellate o gli ospiti risulteranno in partenza.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Non puoi prenotare la struttura per le date selezionate.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Puoi prenotare la struttura per le date selezionate.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'La tua struttura &egrave; configurata su di un pagamento a persona per notte ma non hai creato o pubblicato nessun tipo ospite, ti preghiamo di creare &egrave; pubblicare uno o piu tipi ospite. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Non hai ancora nessuna tariffa configurata, non &egrave; possibile ricevere nessuna prenotazione per la tua struttura.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Modifiche on');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Modifiche off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Addebita depositi variabili?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'I depositi variabili ti consentono di stabilire se non vuoi addebitare completamente la prenotazione se l\'arrivo degli ospiti e\' previsto entro N giorni da "oggi". Seleziona si per abilitare questa opzione, e inserisci il numero di giorni qui sotto, se per esempio il giorno di arrivo risulta entro 60 giorni, allora la somma addebitata sara il totale della prenotazione, altrimenti sara stabilito in base alle opzioni di deposito stabilite sopra.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Il numero di giorni, entro i quali il totale prenotazione verra addebitato come deposito.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'La email di conferma &egrave; stata inviata. Ora puoi chiudere questa finestra.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contatta agente');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Registra ordine come pagato');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Ordine registrato come pagato');
jr_define('_JOMRES_APIKEY_REMAKE', 'Crea una nuova chiave API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Questa &egrave; una installazione per una singola struttura?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Selezionando SI, la visualizzazione del frontend di Jomres agli utenti non autorizzati sara grandemente semplificata. Le chiamate di default del menu verso Jomres, non restituiranno piu la lista delle strutture, ma reindirizzera il cliente verso il modulo di prenotazione della prima struttura nel sistema. I Gestori Struttura non vedranno il pulsante di visualizzazione anteprima o il pulsante di inserimento nuova struttura. Ideale se vuoi inserire una sola struttura e prendere le prenotazioni per la stessa.<br/>');
/////////////////////////////////////////////////////////////////////////////////////////////////////
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Pagamento saldo');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Nota, Stai usando Editing Mode con il Global Editing mode attivato. Va bene se si conosce cosa significa Global Editing, comunque se non conosci a fondo la cosa potresti causare problemi al sistema. Se non sei sicuro se usare Jomres in questo modo, vai su <a href="https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> per pi&ugrave; informazioni sull&acute;argomento.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Il tuo numero di licenza. Avrai bisogno di un numero di licenza per poter scaricare gli aggiornamenti ed i plugin per Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Sconto personale');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limitare la registrazione delle strutture ad una Nazione?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ti puoi assicurare che le strutture registrate siano limitate ad una sola Nazione selezionando Si per questa opzione e configurando la Nazione nell&acute;opzione seguente.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Le strutture si trovano in questa Nazione : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Scegli un jquery theme da usare per le schede dei dettagli-struttura.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Ci dispiace, ma la struttura non &egrave; al momento disponibile.');
jr_define('_JOMRES_REVIEWS', 'Recensioni');
jr_define('_JOMRES_REVIEWS_TITLE', 'Titolo recensione');
jr_define('_JOMRES_REVIEWS_DATE', 'Pubblicata il ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Non ci sono ancora recensioni per questa struttura.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Ti piacerebbe essere il primo a recensire questa struttura?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Sono d&acute;accordo con questa recensione');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Non sono d&acute;accordo con questa recensione');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Valutazione media: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Voti totali:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Aggiungi una nuova recensione.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Devi effettuare l&acute;accesso per inserire una recensione.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Dai il tuo parere su questa struttura : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Questo cliente ci ha detto che : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pro: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Contro: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Inviata il: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Hai gi&agrave; recensito questa struttura, non puoi aggiungere un&acute;altra recensione.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ci dispiace, ma non ti &egrave; permesso inviare scrivere recensioni su questo sito.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Clicca per visualizzare le recensioni');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' ospiti sono d&acute;accordo con questa recensione.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' ospiti non sono d&acute;accordo con questa recensione.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' ospite concorda con questa recensione. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'ospite non concorda con questa recensione.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Grazie per aver condiviso la tua opinione su questa recensione.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Grazie, ma hai gi&agrave; condiviso la tua opinione su questa recensione.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Assicurati di aver compilato tutti i campi.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Cataloga la tua recensione inserendo un titolo');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Ti preghiamo di inserire una recensione pi&ugrave; accurata nel box di descrizione');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Ti preghiamo di inserire i lati positivi della tua esperienza in questa struttura');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Ti preghiamo di inserire i lati negativi della tua esperienza in questa struttura');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Ti preghiamo di votare l&acute;ospitalit&agrave; dello staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Ti preghiamo di votare la qualit&agrave; dei locali');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Ti preghiamo di votare la pulizia della struttura');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Ti preghiamo di votare il pernottamento. Confortevole o no?');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Ti preghiamo di votare il rapporto qualit&agrave;/prezzo');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Ti preghiamo di votare il servizio');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Riepilogo recensione');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'La tua esperienza nel dettaglio');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Grazie per aver inviato la tua recensione.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Grazie per aver inviato la tua recensione. Verr&agrave; pubblicata al pi&ugrave; presto dai nostri moderatori.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Usare la Funzione recensioni di Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Pubblicare automaticamente le recensioni?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Se selezioni NO dovrai pubblicare manualmente le recensioni');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Configurare le recensioni su test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalmente i gestori delle strutture non possono recensire le strutture. Con test mode attivo, possono. Naturalmente non &egrave; l&acute;ideale in un ambiente professionale.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Questa &egrave; una lista di tutte le strutture. Clicca su una struttura per vedere la recensione corrispondente. Da qui potrai pubblicare o eliminare una recensione.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Numero di recensioni non pubblicate');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Totale recensioni');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Pubblica/Sospendi recensione');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Elimina recensione');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Segnala recensione');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Esamina i report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Inserisci la tua segnalazione');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Pensi che questa recensione sia non obiettiva o inaccurata? segnalacelo e esamineremo la cosa per te.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Invia');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Segnalazione creata da ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Le Segnalazioni sono inviate da utenti in disaccordo con il contenuto di una recensione. L&acute;unico modo di rimuovere una segnalazione &egrave; eliminare la recensione.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = pessimo 10 = eccellente) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Ospitalit&agrave;  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Posizione ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Pulizia ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Comodit&agrave; ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Rapporto qualita&agrave;/prezzo ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Servizi ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Recensione by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Nascondi recensioni');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Visualizza il modulo di prenotazione nella scheda struttura?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Seleziona SI per visualizzare il modulo di prenotazione nella scheda struttura. Se selezioni No, un link apparir&Agrave; nella scheda della struttura invece che puntare al modulo di prenotazione.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Le tariffe sono comprensive di tasse?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Le tariffe sono Tasse-incluse? Seleziona SI o NO.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Tasse servizi:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Il campo giorno della settimana permette di fissare una tariffa per un dato giorno della settimana, una volta cliccato il pulsante del giorno della settimana tutti i giorni della stessa avranno la tariffa stabilita  in precedenza.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'I selettori data e l&acute;imput di tariffa permettono di fissare una tariffa per un determinato periodo. Scegli una data di inizio e una di fine, inserisci la tariffa e clicca il pulsante Configura Tariffe.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Data di inizio');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Data di fine');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tariffa');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Configura tariffe');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_RTL', 'falso');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Camera ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'Ospite(i). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Questo &egrave; il modo in cui abbiamo assegnato il numero dei tuoi ospiti alle loro camere. Se desideri cambiare l&acute;allocazione, devi contattare la struttura dopo aver prenotato. Ci potrebbero essere supplementi per i cambiamenti richiesti.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Nota che la tua struttura non &egrave; ancora stata pubblicata, solo tu puoi vederla, I visitatori del sito non la vedranno ancora');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordine dei risultati di ricerca di default');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Cambia questa opzione per cambiare l&acute;ordine in cui i risultati vengono visualizzati.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostra il men&ugrave; a tendina dell&acute;ordinamento risultati');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Style lista camere');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Nel modulo di prenotazione, usando lo stile classico offrirai camere individuali ai tuoi ospiti. Invece con la tipologia tipo camera, gli ospiti possono scegliere il numero ed il tipo di camera (Es. 2 doppie)');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classico');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipo Camera');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Giorno di Inizio Settimana del calendario, Domenica o Luned&igrave;');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Solo gli ospiti possono inserire recensioni?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Seleziona SI se vuoi limitare le recensioni solo a quegli utenti che son gi&agrave; stati ospiti in questa struttura.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per camera');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Ospiti per camera : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Ospiti per prenotazione : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Numero di camere');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Gennaio');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Febbraio');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Marzo');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Aprile');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maggio');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Giugno');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Luglio');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Agosto');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Settembre');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Ottobre');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Novembre');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Dicembre');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Seleziona SI per ridurre il numero di opzioni disponibili ai gestori delle strutture nella Sezione di Configurazione Generale. Questo &egrave; utile se on vuoi che i gestori delle strutture abbiano troppe opzioni da configurare, puoi comunque difinire la configurazione di default delle opzioni disponibili.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Seleziona un opzione per la tua prenotazione');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Gestione struttura');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Anteprima struttura');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Sconto Partner ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Cerca utente');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Inserisci un p&ograve; di caratteri per carcare un utente.<br/>Selezionato l&acute;utente lo aggiungerai automaticamente ai tuoi partner e verrai indirizzato alla prossima pagina dove potrai assegnare all&acute;utente strutture e sconti.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Partners presenti');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Seleziona un partner e sarai indirizzato alla pagina di amministrazione partners.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'compagno:');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Cerca una Struttura');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Inserisci un p&ograve; di caratteri del nome della struttura  e seleziona una struttura.<br/> Quando selezioni la struttura questa verr&agrave; automaticamente aggiunta al portfolio strutture del tuo partner, tuttavia non beneficeranno di nessuno sconto, fintanto che non ne stabilirai uno per quell&acute;utente.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Strutture Correnti');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Clicca su una struttura per modificare le impostazioni di sconto sui partner per quella struttura.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Questo account è stato sospeso, al momento non è possibile somministrare le proprietà che utilizzano questo account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'account manager sospeso');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'account manager ripristinato');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Si prega di notare che il tuo account gestore di proprietà è stato sospeso. Non sarà in grado di svolgere tutte le funzioni di gestione della proprietà fino a quando l'account è stato ripristinato.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Si prega di notare che il tuo account manager proprietà è ora attiva. Si può continuare a svolgere le funzioni di gestione immobiliare.Si prega di accedere al tuo account e assicurarsi che le proprietà appropriate sono state pubblicate. Grazie.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'rimuovere preferito');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'archivio di dati di prenotazione');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', "L'archivio dei dati di prenotazione è un dump raw di prenotazione informazioni acquisite dopo che il pulsante di prenotazione di conferma viene cliccato. Passa il mouse sopra una data per vedere il dump di dati grezzi. Le informazioni sono memorizzate nella tabella XXX__jomres_booking_data_archive.");
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Modifica account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'i gestori esistenti');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Posti letto');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Mostra la ricerca in base al numero degli ospiti discesa');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stelle');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Mostra la discesa Stelle');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Numero di invitati');
jr_define('_JOMRES_SEARCH_STARS', 'Numero di stelle');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Numero di proprietà');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Caricare la libreria jQuery Jomres?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'È possibile impostare questo su NO se si dispone di un modello che utilizza jQuery. Questo può risolvere i problemi di conflitto jQuery su alcuni modelli, ma non tutti.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Enabling this option allows you to see the language switcher in the Jomres Administrator area pages.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Le miniature vengono creati automaticamente per le immagini caricate.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Piccole miniature larghezza massima (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', "Piccole miniature vengono utilizzate per la lista di proprietà, mentre le miniature di medie dimensioni sono utilizzati nell'intestazione di proprietà.");
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Piccole miniature altezza max (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'miniature di media larghezza massima (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'miniature media altezza max (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Etichetta Traduzioni');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Utilizzare la funzionalità commissione?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Impostare su Sì per mostrare le fatture responsabile della Commissione che sono stati sollevati.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'prenotazioni Manager Creare fatture della Commissione?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Se un manager fa una prenotazione, non che anche creare una voce di fattura Commissione?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto sospendere manager in cui fatture sono marcati come pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto sospendere soglia');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Questa soglia è il numero di giorni che un manager deve pagare una fattura prima che siano sospesi e le loro proprietà inedita.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'contesto lingua');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Utilizza questa opzione per modificare il contesto linguistico del sito. Questa funzione consente a Jomres di utilizzare etichette appropriate per il modo in cui stai utilizzando Jomres, quindi se il tuo focus è come brokeraggio di yacht, la modifica del contesto consentirà a Jomres di presentare etichette appropriate per gli yacht. Ad esempio, se imposti il contesto su "Yacht Brokerage", Jomres troverà prima la lingua corrente, quindi cercherà nel database di testo personalizzato le stringhe salvate con un contesto linguistico di "yachtbrokerage". Se esistono stringhe personalizzate per la lingua e il contesto correnti, verranno utilizzate quelle. In caso contrario, Jomres tornerà alle definizioni della lingua utilizzate dai suoi file di lingua Core.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'sito config avanzata');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Impostare questa opzione su Sì se si desidera utilizzare le opzioni di configurazione del sito avanzate. Se tu\'re solo a partire da Jomres, allora vi consigliamo di lasciare questo a No per ora, come l'installazione predefinita è sufficiente per iniziare, invece si dovrebbe aggiungere Jomres al menu principale e accedere al frontend come 'admin' e cominciare a configurare la vostra proprietà(s). Si prega di notare che molte delle opzioni avanzate potrebbero non essere disponibili se si don \ 't hanno il plug-in appropriato(s) installato. Gli utenti del sistema di base gratuito, non saranno in grado di sfruttare appieno le caratteristiche che consentono.");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Caricare la libreria jQuery UI Jomres?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Prezzo (più costosi)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Price (meno costosi)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Sommario di prezzo e le stime dovrebbero essere valutati come per notte / settimana / al mese?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'a notte');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'a settimana');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'al mese');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'a persona');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'settimana(e) a ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mese(i) a ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', "Come dovrebbe l'opzione di ricerca per il lavoro persone numeri?");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', "Colpisce tutti i moduli di ricerca. Quando si utilizza la funzione di ricerca numero di ospiti, se la funzione di ricerca cercare le proprietà che le tariffe \ 's sosterranno numero di persone e uguale al numero scelto, esattamente uguale al numero scelto, oppure il numero scelto e maggiore? ");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Attendere prego, la tua prenotazione è in fase di elaborazione e sarai reindirizzato sul sito di Paypal per effettuare il pagamento.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Se non visualizzi la pagina Paypal entro 5 secondi...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Clicca qui');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Prenotazione valida da');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Prenotazione valida fino a');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nome ospite');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'I codici sconto possono essere generati e trasmessi su ospiti come un incentivo a effettuare le prenotazioni.<br/>
Valido da e per le date si riferiscono alle date di prenotazione può essere fatta su, mentre la prenotazione valida, da / per le date si riferiscono alle date che la prenotazione deve coprire per il coupon sia valido. Se la prenotazione non rientra di quel periodo ai tassi normali si applicano ai giorni al di fuori di quel periodo.<br/>
Se si desidera che la prenotazione sia a disposizione di un ospite specifico, scegliere il nome che ospite nel menu a discesa per limitare il coupon a quello unico ospite.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Con il coupon, questa prenotazione è stato interrotto da ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' a ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Impostare su No per disabilitare il caricamento di entrambi i jQuery UI javascript e file CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Caricare la libreria jQuery UI Jomres CSS?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Impostare su No per disabilitare solo il file CSS UI jQuery.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Totale tasse incl.');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Struttura non pubblicata');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Utilizzare la funzionalità di conversione');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Utilizzare la funzionalità di conversione in linea Jomres. Questa offrirà una discesa di conversione per gli utenti frontend, dove saranno in grado di scegliere una moneta che desiderano vedere i prezzi offerti in. uscita prezzo è rettificato per il prezzo convertito seguito dalle proprietà 'native' dei prezzi tra parentesi.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "Abbiamo usato i nostri migliori sforzi per ottenere i tassi di cambio più accurati e tempestivi che possiamo.La nostra funzione di conversione di valuta online è un servizio fornito solo a scopo informativo e non è destinato a fornire cifre esatte. Di conseguenza, non garantiamo l'esattezza dei tassi di cambio. Utilizzando questa funzione, si ritiene che abbia accettato che qualsiasi dipendenza o l'uso della funzione di conversione della frequenza sarà interamente a proprio rischio.");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'conversione di valuta / codici di valuta');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP rilevamento API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Per impostare automaticamente il codice valuta discesa Jomres è in grado di utilizzare un servizio gratuito chiamato IPinfoDB per rilevare il paeses visitatore , tuttavia è necessario registrarsi per una chiave API a <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB', 'eliminare errori');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Soggiorno tasse escluse');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Soggiorno tasse incluse');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Tassa di soggiorno:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Torna ai dettagli');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Seleziona automaticamente?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Saldo da pagare');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ultima prenotazione');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'secondi');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minuti');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'ore');
jr_define('_JOMRES_DATEPERIOD_DAY', 'giorni');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'settimane');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mesi');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'anni');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decennio');
jr_define('_JOMRES_DATEPERIOD_S', ' ');
jr_define('_JOMRES_DATEPERIOD_AGO', 'fa');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'da ora');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Prenotazioni per notti?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Per impostazione predefinita le risorse di sistema di prenotazioni fuori dalla notte, quindi una prenotazione dal primo gennaio'.date('Y', strtotime("l'anno prossimo")).' al 2 gennaio '.date('Y', strtotime("l'anno prossimo")).' copre una sola notte. Se si imposta questa opzione su Sì, però, quindi la prenotazione sarà coprire intere giornate, invece, in modo da prenotare in quei giorni sarebbe coprire entrambi i giorni e il cliente sarebbe stato addebitato per due giorni.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per notte');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per persona per notte');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Arrivo');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Partenza');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'giorno(i) a');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Data di partenza errata');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'La prenotazione è troppo breve. Ci deve essere almeno questo numero di giorni tra il pick-up e tornare date:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Intervallo minimo tra arrivo e partenza');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "L'intervallo minimo nel modulo di prenotazione tra il pick-up e drop off date. Un intervallo di 1 significa che il pick-up e le date di ritorno possono essere impostati per lo stesso giorno, ma questo è ancora dipendente dalla intervallo minimo che \ 's calcolato automaticamente dal motore di prenotazione, in quanto controlla tariffe valide per il periodo di prenotazione.");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Sommario di prezzo e le stime dovrebbero essere valutati come al giorno / settimana / al mese?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per notte');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Giorni prima della partenza');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Il numero minimo di giorni che deve trascorrere, da "oggi", prima della data di ritiro.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Impostare su Sì se si desidera limitare prenotazioni anticipate (usare il campo successivo per impostare il limite in termini di giorni). Se si imposta questa yes allora se l'utentetries prenotare più di n giorni di anticipo allora non prendere data sarà ripristinato alla data odierna");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Mostra data di partenza?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Impostare su No se non si desidera visualizzare la casella di input data di ritorno.Utilizzare solo questo se si sa cosa si sta facendo, come la data di ritorno delle prenotazioni sarà sempre impostato per il giorno dopo la data di ritiro.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "Se si imposta questa Sì, quindi le prenotazioni saranno prese per un periodo determinato. If this is set to No, then ensure that 'definito giorno pick-up' Non è impostata su Sì (a meno che specificamente vuole costringere la gente a raccolta in un determinato giorno della settimana), altrimenti non sarà possibile ottenere molti collegamenti nel calendario disponibilità.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Predefiniti giorno pick-up");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Solo per i siti che offrono prenotazioni periodo fisso.Scegliere il giorno della settimana che pickup devono essere effettuate su.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed giorno pick-up');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'date fisse pick-up si ripetono: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', "Quando le date di prelievo fisse vengono selezionate, il numero di date che possono essere visualizzati nelle date DropDownList.Si noti che l'elenco di date non includerà alcuna data se la prenotazione non è possibile a causa previa prenotazione, e che l'elenco sarà effettivamente essere due volte fino a quando il numero selezionato perché avrà un numero simile di date storiche(dove disponibile).");
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per persona, per notte');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Selezionare Sì se si vuole far pagare per-persona-per-giorno. Se no, allora costi saranno calcolati su una base per-resource-per-giorno');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "depositi variabili consentono di definire se si desidera far pagare l'intero importo se la prenotazione s \ 'data di ritiro è entro N giorni dalla 'oggi'. Impostare questa opzione su Sì per abilitare la funzione, e inserire il numero di giorni di seguito, così per esempio se il giorno pick-up è entro 60 giorni, quindi l'importo del deposito addebitato sarà l'intero importo, altrimenti l'importo sarà basato sul deposito opzioni configurate in precedenza.");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "La maggior parte delle aziende si ricalcolare i prezzi delle risorse in base al numero di risorse di un tipo richiesto che sono disponibili in una determinata data. Questo permette loro di offrire sconti su un tipo di risorsa / business che non è occupato nel corso di un determinato periodo, con l'obiettivo di attrarre imprese che altrimenti potrebbero perdere.<br/>Attivazione e configurazione di questo plugin permette di offrire prezzi regolabile in base al numero di risorse di un tipo selezionato sono disponibili nel business in un dato giorno.<br/> La soglia giorni definisce il numero di giorni in cui la data di ritiro deve essere compresa prima prezzi delle risorse sono regolati da questa caratteristica, quindi le opzioni percentuali consentono di configurare la percentuale di risorse che possono essere disponibili prima di applicare un determinato sconto. Si noti comunque, se più risorse sono prenotati quindi l'attuale livello di sconto sarà applicato a tutte le risorse e non ridurranno come più risorse vengono selezionati.' );
jr_define( '_JOMCOMP_WISEPRICE_THRESHOLD_WHOLEDAY', 'Soglia (numero di giorni tra la data di prelievo e di oggi)");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pick Up attesa');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pick Up oggi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Raccolto');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'I ritorni oggi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Rientro in ritardo');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Non ha raccolto');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Giorni');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark una prenotazione raccolse.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark una prenotazione restituito.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark una prenotazione raccolse');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark una prenotazione restituito');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Prezzo per giorno: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Numero di giorni: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Sovrascrivi totale pernottamento');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Salva modifica');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', "Email nuovi utenti i propri dati d'accesso?");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', "Se l'opzione Crea nuovo utente è impostata su Sì, è possibile impostare questa opzione su No per garantire che essi non sono inviati via email i propri dati d'accesso una volta che l'utente è stato creato. Questo potrebbe essere utile se si sta aggiungendo automaticamente i nuovi utenti a una mailing list, per esempio, e non voglio agli utenti di accedere in realtà.");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Mostra di uscita fiscale nel riepilogo scheda di prenotazione totali?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Impedire il modulo di prenotazione di mostrare i campi di prezzo imposte nella sintesi totali impostando questa opzione su No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THRESHOLD', 'Politica di cancellazione');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THRESHOLD_DESC', 'Collegato, gli ospiti registrati possono annullare le proprie prenotazioni. Qui è possibile impostare la soglia, in giorni, in cui la prenotazione non può essere cancellata dopo un certo numero di giorni prima della data di arrivo.');
jr_define('_JOMRES_EDIT_PROFILE', 'Modifica profilo');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Tipo di proprietà rapporto');
jr_define('_JOMRES_IMAGE', 'Foto');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Clicca su una lettera di mostrare tutte le imprese con quel primo carattere. Una volta che avete un elenco di proprietà è possibile assegnare tassi di commissione di tali proprietà, oppure fare clic sul loro "Modifica" icona per visualizzare le statistiche delle imprese s \ .');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Modifica regole imposte');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Modifica campi personalizzati');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'password del server di licenza');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'nome utente server di licenza');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Se si dispone di un nome utente e una password sul server di licenza, inserisci qui. Questo vi aiuterà ad accedere plugin che si ha diritto a.Se avete inserito una chiave di supporto valido nel campo sopra, allora non è necessario fornire il nome utente / password qui.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Questa versione Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Ultima versione Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', "Mettere in guardia : C'è una nuova versione di Jomres disponibili, si consiglia di aggiornare al più presto.");
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Benvenuti a Jomres, ci auguriamo che con il sistema di prenotazione preferito Joomla. Se si desidera acquistare una licenza Jomres Starter, Business o Enterprise, <a href="https://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Questo sistema è ideale per qualsiasi scenario, sia esso un semplice modulo di prenotazione per una singola proprietà, fino a un sito che ha più utenti, in più lingue, con più proprietà. Si prega di consultare la "Aiuto" sezione a sinistra, compresa la "Iniziare" pagina, che vi guiderà attraverso i primi passi.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Strutture attive');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Server SMTP alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Impostare questa opzione su Sì per utilizzare queste impostazioni SMTP alternative. Un numero crescente di web host sembrano essere bloccando la funzionalità PHP elettronica, in modo da poter scegliere di un eccesso di cavalcare le impostazioni di posta elettronica che Jomres adotta dal tuo host CMS (tipicamente Joomla) e le impostazioni di uso della vostra scelta qui.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Host alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Modificare questo al vostro server di posta SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Porta alternativa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Cambiare questa alla porta SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocollo alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "A seconda delle impostazioni del server SMTP, è necessario lasciare questo vuoto, oppure immettere 'ssl' or 'tls'. Chiedi al tuo fornitore SMTP se non si conosce.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Usa autenticazione');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Se il server SMTP richiede ai clienti di effettuare il login, impostare questo a Sì. Il nome utente e password saranno poi utilizzati.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'nome utente alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'password alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Informazioni rapide');
jr_define('_JOMRES_MENU_SHOW', 'Mostra');
jr_define('_JOMRES_MENU_HIDE', 'Nascondi');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Predefinito');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'chiunque');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrato');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'gestore');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nessuno');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Controllo di accesso Menu');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', "Questa funzione consente di controllare chi sarà in grado di vedere un plugin nel menu principale.In genere le opzioni utente 00009 sono visualizzabili da una / o visitatori del sito non registrati, 00010 opzioni riferiscono in genere alle attività di tipo ricezione che vengono utilizzati in un giorno per giorno, mentre 00011 opzioni vengono utilizzate per l'impostazione e la configurazione di un immobile, ma si accede meno frequentemente
.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Controllo accesso completo');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Impostare questa opzione su Sì per attivare la funzione di controllo di accesso completo, quindi visitare l'opzione di controllo di accesso in Manutenzione del sistema per configurare i controlli di accesso.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Si noti, tuttavia, questa Queste impostazioni non controlla gli script di fondo che si collegano a, così per esempio se si imposta <i>00009user_option_03_search</i> a 'Manager' un utente che conosce Jomres può ancora chiamare j06000search.class.php inserendo http://www.domain.com/index.php?option=com_jomres&task=searchnella barra degli indirizzi del browser.Questo è intenzionale, in quanto questo controllo accessi Gestione dei menu semplicemente ciò che può essere visto nel menu principale Jomres. Se avete bisogno di controlli più severi quindi impostare la configurazione del sito - opzione> Controllo completo accesso al Sì e rivisitare l'opzione Access Control Menu.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Controllo accesso completo');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Questa funzione è solo per utenti esperti. Se non sai quello che è per, e non hanno un motivo specifico per usarlo, si prega di restituire alla configurazione sito e impostare l'opzione di controllo di pieno accesso a No.</strong><br/>
	Questa funzione permette di controllare chi può accedere a quali mini componenti (con alcune eccezioni che sono difficili codificati nel sistema). Se il livello di accesso accanto al nome di uno script è impostato di default, poi con l'opzione di controllo completo di accesso impostata su Sì <strong> chiunque </ strong> può accedere agli script che non dovrebbero essere in grado di accedere quindi se avete intenzione di usare questo funzione, è necessario impostare il livello di controllo di accesso per <strong> ogni </ strong> Jomres minicomponent elencati qui. Se non si sa che cosa questi minicomponentes fanno, allora vi consigliamo vivamente di non utilizzare questa funzione a tutti.<br/>
	In Jomres livelli di accesso seguono una piramide, così super Gestori di proprietà sono maggiori di gestori. In breve Super Manager> Manager> Receptionist> Registrato> Non registrato. Quindi, se un utente registrato ha accesso a un minicomponente, in modo da fare Receptionist, Manager e Responsabili Super.<br/>
	Si noti che non è possibile controllare minicomponentes zona amministratore.Chiunque nella zona amministrativa è considerato essere un utente attendibile in quanto non devono essere bloccate da accedere qualsiasi script (soprattutto questo).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Avvertimento! Si ha il controllo pieno accesso abilitato, tuttavia abbiamo contato le impostazioni di controllo di accesso e rispetto li al numero di minicomponents che dovrebbe essere controllato, e le due non corrispondono, pertanto, è possibile che alcuni script che non sono controllati.Questo potrebbe essere un problema di sicurezza e si sono invitati a risolvere questo in una sola volta visitando la funzione di controllo di accesso e di controllo che sono state applicate ai livelli appropriati.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Gli utenti con diritti di amministratore a questa proprietà');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Email');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'parametri');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Vigore');
jr_define('_JOMRES_METATITLE', 'titolo Meta');
jr_define('_JOMRES_METADESCRIPTION', 'descrizione Meta');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Inserisci la tua struttura : Step 2 di 2');
jr_define('_JOMRES_CART_TITLE', 'Le mie prenotazioni proposte');
jr_define('_JOMRES_CART_INFO', 'Nota, queste prenotazioni non sono state ancora salvate. Se ci si disconnette o la sessione scaduta saranno perduti. Ricordatevi di confermare le prenotazioni!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'confermare la prenotazione(s)');
jr_define('_JOMRES_CART_OR', ' o ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Salva e conferma dopo');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Non si dispone di tutte le prenotazioni ancora salvate.');
jr_define('_JOMRES_CART_VIEWCART', 'Vedi carrello');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'sottodirectory file di lingua');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Predefinito Latitudine Punto di partenza');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Predefinito Longitudine Punto di partenza');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Nella mappa di Google nella pagina delle proprietà di modifica, prima che il marcatore è stato spostato, quale dovrebbe essere il valore predefinito di latitudine / longitudine avvio punti siano?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Messaggi di posta elettronica inviati da quale indirizzo?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Lasciare vuota questa opzione per disattivarlo. Jomres utilizzerà l'indirizzo o gli indirizzi e-mail dell'hotel quando invierà e-mail agli ospiti, tuttavia il tuo servizio di posta elettronica POTREBBE non consentire e-mail da indirizzi arbitrari (ad es. possono consentire solo e-mail da un indirizzo autorizzato). Se questo è il caso, puoi utilizzare questo input per inserire un indirizzo che sarà visto come l'indirizzo FROM per tutte le email di sistema.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Lista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Foto');
jr_define('_JOMRES_COMPARE', 'Compara');
jr_define('_JOMRES_REMOVE', 'Rimuovi');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Torna ai risultati di ricerca');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Aggiungi alla tua lista');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Rimuovi dalla tua lista');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vedi la tua lista');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Importante: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Usiamo i cookie per aiutare a mantenere il nostro sito in questione e facile da usare.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Altro...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'legislazione europea richiede che tutti i siti web chiaramente specificare se vengono utilizzati i cookie e il loro scopo.');
jr_define('_JOMRES_COOKIEPOLICY_5', "La ricerca e la prenotazione del motore di questo sito deve essere in grado di ricordare le opzioni che hanno scelto di lavorare al suo meglio. Per fare questo ha bisogno di memorizzare le informazioni che è associato con un piccolo file chiamato \ 'cookie \', che identifica in modo univoco il browser, e per noi fare questo, è necessario accettare che possiamo. Se non si accetta questa politica dei cookie allora si sarà fortemente limitato in quello che si può fare su questo sito.");
jr_define('_JOMRES_COOKIEPOLICY_6', "Si, accetto l'utilizzo dei cookie.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'La cauzione è pari al costo di una notte?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', "I prezzi sono calcolati su una base per notte.Vuoi il deposito di essere responsabile di una notte \ 's? Se è così, è possibile ignorare le seguenti opzioni.");
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Nessuna struttura presente nella tua lista.');
jr_define('_JOMRES_SAFEMODE', 'Abilita modalità sicura?');
jr_define('_JOMRES_SAFEMODE_DESC', 'La modalità modalità sicura disabilta tutti i plugin lasciando funzionare solo il componente Jomres.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Successivo');
jr_define('COMMON_CANCEL', 'Annulla');
jr_define('COMMON_SUBMIT', 'Invia');
jr_define('COMMON_SAVE', 'Salva');
jr_define('COMMON_DELETE', 'Elimina');
jr_define('COMMON_RETURN', 'Indietro');
jr_define('COMMON_CLOSE', 'Chiudi');
jr_define('COMMON_BACK', 'Indietro');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'Nuovo');
jr_define('COMMON_SEND', 'Invia');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', "Captcha viene utilizzato per garantire che il cliente utilizza moduli web è un essere umano, ed è usato per prevenire Gestori di proprietà di essere \ '\ spammato' da robot su Internet. Per utilizzare il modulo Contattaci in Jomres è necessario registrarsi al <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page e impostare il dominio per ricevere le chiavi pubbliche e private.Dopo aver ricevuto le chiavi, inserisci qui sotto li. Il servizio reCaptcha è un servizio gratuito fornito da Google.");
jr_define('RECAPTCHA_PUBLIC_KEY', 'chiave pubblica');
jr_define('RECAPTCHA_PRIVATE_KEY', 'chiave privata');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'timeout file di lock');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "Per evitare il pericolo di ospiti camere doppie prenotazione Jomres utilizza un file di lock per impedire una stanza di essere aggiunto alla lista camere disponibili nel modulo di prenotazione se qualcun altro ha già aggiunto la stanza per loro per le stesse date. Per impostazione predefinita, questo blocco sarà timeout a 3600 secondi, o un'ora. È possibile modificare il tempo necessario per scadere questo blocco modificando questa figura.");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Abilita modelli Jomres 'bootstrap e funzionalità?");
jr_define('COMMON_ACTION', 'Azione');
jr_define('COMMON_VIEW', 'Vedi');
jr_define('BACKTOTOP', 'Torna su');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Debole');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Sicura');
jr_define('_JOMRES_INPUTFILTERING', 'filtraggio in ingresso');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'livello di filtraggio in ingresso');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "La maggior parte dei dati che vengono immessi nel sistema vengono sterilizzate per primo a nudo eventuali tag html, quando si utilizza la funzionalità di filtro variabile PHP per rendere i dati di sicurezza prima di essere inserita nel database. Si potrebbe voler consentire a determinati ingressi (ad esempio gli ingressi di testo nella pagina i dati della struttura) per includere HTML. Ci sono due livelli di filtraggio è possibile utilizzare per filtrare questo ingresso, sia debole o forte.  Si consiglia di utilizzare solo l'impostazione debole se l'utente (s) inserendo i dati sono attendibili da soli, ad esempio, gli amministratori di sistema compagni, altrimenti si dovrebbe lasciare impostato su Strong.Quando è impostato su forte (consigliato) è comunque possibile specificare quali tag per consentire modificando l'impostazione della prossima 'HTMLPurifier tag consentiti'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'tag input ammessi');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "È possibile modificare i tag che htmlpurifier permetterà attraverso il suo sistema di filtraggio. Il valore predefinito è 'p, b, forte, un [href], in' (vale a dire paragrafo, Grassetto, forti, Link e corsivo).Per ulteriori informazioni sui tag consentiti, si prega di leggere i documenti HTMLpurifier a <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>.Mentre è possibile modificare questa impostazione, si consiglia di lasciare impostato sul valore predefinito.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'ingressi ammessi');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "È possibile definire quali ingressi modulo permetterà HTML modificando questa opzione, qualsiasi input aggiunto a questa lista verrà analizzato tramite HTML Purifier invece di avere HTML messo a nudo.L'impostazione predefinita è: 'Descrizione proprietà property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport Condizioni della Proprietà disclaimer'.Aggiungere più ingressi aggiungendo loro dai nomi, separati da uno spazio.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Dettagli struttura in tab?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Impostare questa opzione per mostrare i dati della struttura in schede. Impostare a nessuno per mostrare loro senza linguette.');
jr_define('COMMON_PRINT', 'Stampa');
jr_define('COMMON_EDIT', 'Modifica');
jr_define('COMMON_COPY', 'Copia');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 comprende di Twitter Bootstrap quadro per impostazione predefinita e Jomres ha modelli e funzionalità che utilizzare questi modelli.Per impostazione predefinita, se si sta eseguendo Jomres su Joomla 3 questi switch sono impostati su Sì ma è possibile impostare su No se lo si desidera (non raccomandato). Se si sta eseguendo una versione di Joomla inferiore a Joomla 3 si può ancora scegliere di utilizzare i modelli Jomres Bootstrap e funzionalità, ma per default queste opzioni sono impostate su No.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Utilizzare i modelli Jomres Bootstrap nel frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Qui ci sono alcune alternative si potrebbe prendere in considerazione.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Auto-detect paese ospite?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Il sistema cercherà di rilevare automaticamente paese del cliente, se non l'hanno prenotato prima. È possibile impostare questa opzione su No, e definire il paese si preferisce apparire nel modulo di prenotazione, in opzione successiva.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'A proposito di Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'aiuto');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Inizio');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Gestione permessi');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'strumenti sviluppo');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'lingue');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generazione di reddito');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'struttura del sito');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manuale (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Il mio account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funzionalità portale');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integrazione');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'reports/statistiche');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'aiuto');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Aggiornamenti');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'metodo di pagamento');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariffe default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Applicabile solo alle nuove tariffe');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Anni da mostrare');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definisce il numero di anni per mostrare quando si modifica un tipo di tariffa');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fatture');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'dettagli account');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'cerca');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'pannello amministrazione');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'fatture');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'impostazioni');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Modifica paese');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'paese id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Prefisso internazionale');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nome del paese');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Modifica regione');
jr_define('_JOMRES_EDIT_REGION_ID', 'regione id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Prefisso internazionale');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'nome regione');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Elenco paesi');
jr_define('_JOMRES_COM_LISTREGIONS', 'regioni Elenco');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'definizioni Export');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Questa funzione consente traduzioni di esportazione che sono state costruite utilizzando la funzione di traduzione a. Si costruirà un campo di testo con tutti i dati necessari per costruire un nuovo file di lingua, tutto quello che dovete fare è copiare e incollare questo output in un nuovo file di lingua che si può mettere su un nuovo server Jomres base, o se si vuole contribuire alla comunità Jomres.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'tradurre locali');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Tradurre le stringhe di file lang');
jr_define('_JOMRES_COM_NOTAMANAGER', "Errore, l'utente che si è registrato in quanto non è un super Manager all'interno Jomres, non sarà in grado di utilizzare questa funzione fino a quando hai utilizzato i Mostra profili caratteristica per farsi SIA un manager e un Super Manager. Questa è una caratteristica di sicurezza.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Proprietà layout della lista predefinita');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Soggiorni minimi di');
jr_define('_JOMRES_NIGHTSFOR', ' ntti per ');
jr_define('_JOMRES_AGENT', 'Gestore');
jr_define('_JOMRES_AGENT_DETAILS', 'Dettagli gestore');
jr_define('_JOMRES_AGENT_LISTINGS', "Agent's listings");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Approva automaticamente le nuove strutture');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Se si imposta questa opzione su No, allora è necessario approvare manualmente nuove proprietà. Fino a quando una proprietà è stato approvato non può essere pubblicato da un Gestore / Super gestori di proprietà.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Approvazioni');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Questa proprietà non è stato ancora approvato. Una volta che è stato approvato si sarà in grado di pubblicarlo.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Siamo spiacenti, non è possibile pubblicare questa proprietà in quanto non è stato ancora approvato.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', "Una nuova proprietà richiede l'approvazione");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "Una proprietà è stato aggiunto al sistema che richiede l'approvazione. Clicca sul link per visualizzare le proprietà in attesa di approvazione lista : ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'La tua struttura è stata approvata');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Complimenti, la vostra proprietà è stato approvato, si prega di fare clic sul link per visualizzare il pannello delle proprietà di controllo : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'nomi delle regioni sono traducibili');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'A meno che non si sta eseguendo un server molto veloce si consiglia di lasciare questo insieme a No. A causa del gran numero di nomi delle regioni, la traduzione nome della regione occupa un sacco di memoria, che può rallentare i risultati della ricerca verso il basso.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Ospite al completo.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', "Siamo spiacenti, l'indirizzo e-mail è già in uso. Se questo è il tuo indirizzo e-mail, si prega di assicurarsi di aver effettuato l'accesso prima di tentare di prenotare.");
jr_define('JOMRES_TAPTOCALL', 'Tap e chiama');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Un nuovo articolo per ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Una nuova recensione è stata lasciata per ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nuovo rapporto');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Una revisione è stata riportata per ');
jr_define('JOMRES_SUPERIOR', 'Superiore');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Totale generale (ex fiscale) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Totale generale (tasse incl) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'totale imposte : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Digita le due parole: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Invio quello che si sente: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay la traccia audio ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Scarica il brano in formato MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'modalità visiva');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'modalità audio');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Aggiorna');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Aiuto');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Siamo spiacenti, non è corretto. Riprova.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Mostra meteo?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Mostra tratte?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', "Abilita punti d'interesse (potrebbe includere i tuoi concorrenti)?");
jr_define('_JOMRES_METAKEYWORDS', 'Parole chiavi');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scansione questo codice nel vostro telefono per ottenere indicazioni da noi.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'Il numero di partita IVA che hai inserito non sembra essere corretto. Si dovrebbe avere qualcosa di simile: BE805670816B01');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Partita IVA non valido. Si prega di verificare la validità del numero di partita IVA con il numero di partita IVA servizio di convalida web Europa (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Complimenti. Siamo stati in grado di convalidare il numero di partita IVA.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Lista regole tasse');
jr_define('_JOMRES_TAX_RULE', 'Regole tasse');
jr_define('_JOMRES_TAX_RULE_INFO', 'norme fiscali sono utilizzati per stabilire norme fiscali diverse per le diverse regioni. Queste norme fiscali influenzano la persona che effettua la prenotazione, se sono registrati, il login e disporre cancellato il loro account utilizzando il"modificare il mio conto" pagina. Lo scopo di queste norme è quello di accogliere bookers in quelle aree che sono esenti da IVA, si potrebbe scoprire che non è necessario creare molte regole, se non del tutto.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Importa regole tasse');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', "Siamo in grado di importare le aliquote fiscali per l'UE per voi, se lo si desidera. Nota, se si utilizza questa funzione, allora tutte le tariffe fiscali esistenti verranno rimossi.");
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Modifica regole tasse');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Partita Iva struttura.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Si prega di inserire il numero di partita IVA per questa proprietà.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Partita Iva valida.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Partita Iva non valida.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'dettagli commerciali inseriti qui saranno utilizzati su commissione e abbonamenti fatture.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Non mi sembra di aver compilato i dati dell'account ancora.Per elencare la vostra proprietà sul sito, abbiamo bisogno di completare i dettagli del conto prima di poter andare oltre.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Produzione o sviluppo?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Se si imposta questa opzione di sviluppo ci sarà abilitare la segnalazione degli errori, altrimenti se impostato su produzione che verrà spento. Se questo è un server di vivere si consiglia di impostare questa opzione su "produzione".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produzione');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Sviluppo');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Dettagli tariffe');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Solo');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'rimasta!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'funzione delle risorse');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Impossibile rimuovere questa funzionalità risorsa, viene assegnato a una risorsa. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Gestione Foto');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Aggiungi foto');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Foto camere');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Foto principale struttura');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Foto slideshow');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Elimina lista');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Trascina qui le tue foto');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Scegliere la risorsa che si desidera caricare le immagini per. Se è possibile caricare immagini per singole risorse (ad esempio camere) vi sarà data una seconda discesa per scegliere la specifica risorsa. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Se caricare più immagini come il "immagine proprietà principale" questi saranno utilizzati nel Property List . immagini della presentazione verranno visualizzati nella pagina i dati della struttura.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Vedi foto');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Elimina foto');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Carica foto');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Icona tipo di camera');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Foto principale struttura');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Carica tutto');
//8.0
jr_define('COMMON_PREV', 'Prec');
jr_define('COMMON_MORE', 'Altro');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Oggi');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Anno');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Mese');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Settimana');
jr_define('_JOMRES_DASHBOARD_DAY', 'Giorno');
jr_define('_JOMRES_HLEGEND', 'Legenda');
jr_define('_JOMRES_HFILTER', 'Filtra');
jr_define('_JOMRES_HFROM', 'Da');
jr_define('_JOMRES_HTO', 'A');
jr_define('_JOMRES_HNEW_BOOKING', 'Nuova prenotazione');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Cauzione');
jr_define('_JOMRES_HSTATUS_GUEST', 'Ospite');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Pronotazione');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Pubblicazione');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Fattura');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Stato fattura');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approvato');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Struttura');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Qualsiasi');
jr_define('_JOMRES_STATUS_PAID', 'Pagato');
jr_define('_JOMRES_STATUS_NOTPAID', 'Da pagare');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Attivo');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancellate');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Pubblicato');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Sospese');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Prenotazioni');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissioni');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Tutte le mie strutture');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'prenotazioni');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'strutture');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'ospiti');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'statistiche');
jr_define('_JOMRES_HLIST_GUESTS', 'Ospiti');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Oospiti');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Fatture');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Prenotazioni rapide');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Data di prenotazione');
jr_define('_JOMRES_HTWO_WEEKS', 'Due settimane');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Posizionamento del menu');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (corpo pagina)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fisso al top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fisso in basso');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Numero prenotazione');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres include i propri set di modelli, uno per ogni versione supportata di Bootstrap. I modelli/temi Joomla e Wordpress basati su Bootstrap offriranno una versione specifica di Bootstrap, quindi devi assicurarti che l'opzione che scegli qui sia compatibile con il tuo modello/tema. Se il tuo tema non fornisce alcun codice Bootstrap, imposta questa opzione su No Bootstrap in Theme e Jomres includerà automaticamente i file Bootstrap 3 per uso personale. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Periodi fissi');
jr_define('_JOMRES_HDEPOSITS', 'Cauzioni');
jr_define('_JOMRES_HBOOKING_FORM', 'Form di prenotazione');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Campi obbligatori');
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
jr_define('EXTENDED_CONFIGURATION', 'Configurazione avanzata');
jr_define('SIMPLE_CONFIGURATION', 'Configurazione semplice');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Caratteristiche delle risorse');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Tipo di risorsa');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Modifica tipo ospite');
jr_define('_JOMRES_HEDIT_COUPON', 'Modifica coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Modifica extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Crea più risorse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Genera risorse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Quante risorse?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Tipo di risorse');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Numero massimo di ospiti per risorsa');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Cancellare tutte le risorse esistenti?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Nota, stai attualmente visualizzando l\'area amministratore con Configurazione avanzata del sito impostata su No. Se vuoi vedere più opzioni imposta Configurazione del sito -> Varie -> Configurazione avanzata del sito su Sì.');
jr_define('DATATABLES_SINFO', 'Mostrato da _START_ a _END_ di _TOTAL_ voci');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approvazione');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Rifiuta richiesta prenotazione');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approva la richiesta di prenotazione');
jr_define('_JOMRES_STATUS_APPROVED', 'Approvato');
jr_define('_JOMRES_STATUS_REJECTED', 'Rifiutato');
jr_define('_JOMRES_STATUS_INQUIRY', 'Richiesta');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Le prenotazioni richiedono approvazione o conferma disponibilità?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Se impostato su sì, quando viene effettuata una prenotazione, non verrà visualizzata nei calendari di disponibilità (e altri ospiti possono ancora prenotare quei giorni e risorse) fino a quando il gestore della struttura non accetta/conferma la disponibilità per la prenotazione .Una volta confermata, la prenotazione viene inserita come provvisoria (se non prevale su altre prenotazioni; altri ospiti non possono più prenotare le stesse date) e viene inviata una mail al cliente per effettuare il pagamento.');
jr_define('_JOMRES_ERROR', 'Errore');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Messaggio');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Modelli email');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Modifica modello email');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Oggetto email');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Testo email');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Tipo di email');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Nome email');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Descrizione email');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Consultare questa pagina per assistenza nella personalizzazione delle e-mail e un elenco dell output disponibile: <a href="https://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates" target="_blank">Guida ai modelli di posta elettronica</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Email nuova prenotazione amministratore sito');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email inviata all\'amministratore del sito quando viene effettuata una nuova prenotazione, se il gateway globale Paypal è abilitato');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Email nuova prenotazione hotel');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email inviata al proprietario della struttura quando viene effettuata una nuova prenotazione');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Email nuova prenotazione ospite');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email inviata all\'ospite quando viene effettuata una nuova prenotazione');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Lettera di conferma ospite');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Lettera stampabile o email che può essere inviata manualmente dal proprietario della struttura per confermare una prenotazione');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Questa prenotazione può essere approvata. Tutte le risorse selezionate sono disponibili per le date selezionate.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Questa prenotazione non può essere approvata perché alcune risorse sono già prenotate per le date selezionate. Dovrai prima modificare la prenotazione.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Mostra lin a Jomres nel footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Solo siti bootstrap! La funzione Budget è una funzione dell'elenco delle proprietà che un ospite può utilizzare per evidenziare le proprietà il cui prezzo per notte è inferiore a una determinata cifra. La funzione presenta alcune limitazioni in quanto potrebbe non essere appropriata per alcuni siti che utilizzano molte valute diverse. Nota, se stai utilizzando questo e il plug-in Inserzioni in primo piano, la classe di avvolgimento dell'inserzione in primo piano viene automaticamente modificata in 'pannello-primario' quando viene visualizzato l'elenco delle proprietà.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nome: ');
jr_define('_JOMRES_FOR', 'Per');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'notte');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'notti');
jr_define('_JOMRES_LIVE_SCROLLING', 'Usa scorrimento live/scorrimento infinito nella lista delle proprietà?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Gen');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Febbraio');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Maggio');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Giu');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Luglio');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Ago');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Set');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Ott');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Novembre');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dic');
jr_define('DATATABLES_SEMPTYTABLE', 'Nessun dato presente nella tabella');
jr_define('DATATABLES_SINFO', 'Vista da _START_ a _END_ di _TOTAL_ elementi');
jr_define('DATATABLES_SINFOEMPTY', 'Vista da 0 a 0 di 0 elementi');
jr_define('DATATABLES_SINFOFILTERED', '(filtrati da _MAX_ elementi totali)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Visualizza _MENU_ elementi');
jr_define('DATATABLES_SLOADINGRECORDS', 'Caricamento...');
jr_define('DATATABLES_SPROCESSING', 'Elaborazione...');
jr_define('DATATABLES_SSEARCH', 'Cerca:');
jr_define('DATATABLES_SZERORECORDS', 'La ricerca non ha portato alcun risultato.');
jr_define('DATATABLES_SFIRST', 'Inizio');
jr_define('DATATABLES_SLAST', 'Fine');
jr_define('DATATABLES_SNEXT', 'Successivo');
jr_define('DATATABLES_SPREVIOUS', 'Precedente');
jr_define('DATATABLES_SSORTASCENDING', ': attiva per ordinare la colonna in ordine crescente');
jr_define('DATATABLES_SSORTDESCENDING', ': attiva per ordinare la colonna in ordine decrescente');
jr_define('DATATABLES_SHOWHIDE', 'Cambia colonne');
jr_define('_BOOKING_ONREQUEST', 'Prenotazione su richiesta');
jr_define('_BOOKING_INSTANT', 'Prenotazione immediata');
jr_define('_JOMRES_COM_FONTAWESOME', 'Includi set di icone Font Awesome?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Imposta questo su Sì se il tuo modello non include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Richiedi prenotazione');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Gentile ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Seleziona un sito');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'ID sito');
jr_define('_JOMRES_IS_EU_COUNTRY', 'Paese UE?');
jr_define('_JOMRES_HLASTCHANGED', 'Ultima modifica');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E-mail di cancellazione prenotazione hotel');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email inviata al proprietario della struttura quando viene cancellata una nuova prenotazione');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E-mail di cancellazione prenotazione ospite');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email inviata all\'ospite quando una nuova prenotazione viene cancellata');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Invia email di prova');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Email di prova');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Questa è una email di prova dal tuo sistema di prenotazione.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Email di prova inviata con successo');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Email di prova non inviata');
jr_define('_INVOICE_TRANSACTIONS', 'Transazioni');
jr_define('_OPENEXCHANGE_API', 'Chiave API dei tassi di cambio aperti');
jr_define('_OPENEXCHANGE_API_DESC', 'Per convertire i prezzi tra i servizi avrai bisogno di una chiave API Open Exchange Rates. DEVI avere una chiave API per visualizzare correttamente i prezzi in Jomres, tuttavia puoi <a href="https://openexchangerates.org /signup/free" target="_blank">registrati per una chiave gratuita</a> (aggiornamenti orari, 1000 richieste/mese - nessun HTTPS, supporto e-mail o funzionalità avanzate). Jomres scarica i tassi di cambio una volta al giorno, purché se usi la chiave solo su una manciata di siti, è improbabile che tu superi questi limiti.Prima di Jomres 8.3 usavamo una funzione Yahoo più vecchia e non documentata, tuttavia abbiamo scoperto che l\'utilizzo di questa funzione è in contraddizione con i Termini e Condizioni. Di conseguenza, dobbiamo presumere che la funzionalità potrebbe scomparire in futuro, da qui il passaggio all\'utilizzo dei tassi di cambio aperti.');
jr_define('_JOMRES_COMMISSION', 'Commissione');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Se carichi più immagini per singoli extra opzionali, verrà utilizzata solo la prima immagine.');
jr_define('_JOMRES_COMMISSION', 'Commissione');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Se carichi più immagini per singoli extra opzionali, verrà utilizzata solo la prima immagine.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Paga ora');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Questa fattura è in scadenza. Clicca sul pulsante per selezionare il metodo di pagamento.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Ecco un elenco di alcune delle fantastiche cose che puoi acquistare mentre effettui una prenotazione in questa struttura. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'In questa pagina puoi configurare qualsiasi gateway installato. Queste opzioni ti permettono di accettare pagamenti per qualsiasi fattura di Commissione o Abbonamento. Le impostazioni del frontend possono essere sovrascritte solo da Paypal, tutti gli altri gateway dovranno essere configurati tramite il Configurazione della proprietà -> scheda Gateway, tuttavia, se un gateway appare in questo elenco, allora dovrebbe essere in grado di elaborare sia i pagamenti degli acconti di prenotazione che i pagamenti delle fatture.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Mostra nella pagina dei dettagli della proprietà?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Impostazioni pagina Dettagli Proprietà');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'La gestione delle proprietà in Jomres è fatta solo dal cpanel del frontend del sito. In questa pagina potrai elencare tutte le proprietà nel sistema, così puoi assegnare le tariffe di commissione e approvarle/non approvarle (se queste funzioni sono abilitate). Per creare una nuova proprietà, modificare quelle esistenti, gestire le prenotazioni o qualsiasi altra attività relativa alla proprietà/prenotazioni, dovrai accedere al frontend del sito e andare alla pagina predefinita di Jomres. Lì vedrai il Pannello frontale di Jomres.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Icone caratteristiche stanza');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Categorie caratteristiche proprietà');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Modifica Categoria Caratteristica Proprietà');
jr_define('_JOMRES_HCATEGORY', 'Categoria');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Mostra le caratteristiche delle proprietà separate in categorie?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Impostalo su YES per separare le caratteristiche della proprietà in categorie. Questa opzione ha effetto solo sulle caratteristiche della proprietà visualizzate nella pagina dei dettagli della proprietà. Tutte le altre pagine le visualizzeranno senza dividerle in categorie.');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Annulla controllo');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Annulla checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Non rilasciato');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'La tua chiave di download e supporto è valida, potrai scaricare i plugin tramite il plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'La tua chiave di download e supporto NON è valida, NON potrai scaricare plugin tramite il gestore plugin.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sottotipo');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Non hai ancora impostato il sottotipo di proprietà. Qui è dove lo definisci come qualcosa come una villa con 5 camere da letto o un cottage con 4 camere da letto e aiuta gli ospiti che stanno cercando a perfezionare le loro ricerche.") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Assegna un sottotipo alla tua proprietà');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Modelli email');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Impostazioni contatti');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Da qui puoi sovrascrivere tutti i dettagli di contatto della struttura (e-mail, telefono, fax) così tutte le comunicazioni con gli ospiti saranno inviate a te e non ai proprietari.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Ignorare i contatti delle inserzioni?');

jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Se questa opzione è impostata su Sì, gli indirizzi e-mail e i numeri di telefono della proprietà verranno sostituiti con quelli impostati in questa scheda. Ciò impone l'invio di tutte le comunicazioni all'indirizzo e-mail indicato, assicurando che l'ospite e la proprietà il proprietario non può ignorare il motore di prenotazione e le spese di commissione che ne deriveranno. Significa anche che ogni volta che la descrizione di una proprietà viene modificata, la proprietà verrà impostata su Non approvata (se la funzione di approvazione è abilitata) e dovrai controllare manualmente la descrizione per assicurarsi che i responsabili non abbiano inserito i dettagli telefonici o e-mail nei campi di testo prima di approvarlo nuovamente.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Le modifiche apportate ai dettagli della scheda richiedono la verifica dell\'amministratore del sito. Se salvi nuovi dettagli, la tua scheda non sarà pubblicata e sarà in attesa dell\'approvazione dell\'amministratore del sito prima di essere nuovamente visibile ai visitatori del sito. Non potrai ricevere online prenotazioni mentre il tuo annuncio non è pubblicato e in attesa di approvazione.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Rivedi la richiesta di prenotazione');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Conferma richiesta di prenotazione');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Modifica richiesta di prenotazione');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Segna fattura come in sospeso');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Fattura contrassegnata come in sospeso');
jr_define('_JOMRES_TRACKING_ENABLE', 'Inviare dati di tracciamento anonimi?');

jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Seleziona Sì per inviare dati di tracciamento anonimi a Jomres.net per aiutarci a capire meglio come usi il sistema.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Assicurati che i tuoi dati siano stati completati nella pagina Modifica il mio account prima di tentare di effettuare prenotazioni per conto dei tuoi clienti.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Dettagli di contatto dell'ospite");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Nuovo ospite -- ');
jr_define('_JOMRES_CHARTS', 'Grafici');
jr_define('_JOMRES_CHARTS_SELECT', 'Seleziona grafico...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Reddito per anno/mese');

jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, iniziamo. Per prima cosa devi creare alcune stanze per questa proprietà.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Crea alcune stanze ora');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'La ricerca ha dimostrato che le proprietà con molte immagini di alta qualità generano più visualizzazioni. Carica un\'immagine principale e alcune immagini di slideshow per aumentare le tue possibilità di ottenere prenotazioni.');

jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Carica un\'immagine');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Crea alcune tariffe');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Cosa prenoteranno gli ospiti?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Questo tipo di proprietà è una proprietà di tipo hotel, dove si affittano stanze nella proprietà, o una proprietà di tipo villa, dove si affitta l\'intera proprietà in un\'unica prenotazione? ');

jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Camere nella proprietà');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'L\'intera proprietà');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Entrambi'); // Questa è un'impostazione provvisoria che offre compatibilità con le versioni precedenti per gli utenti esistenti che non hanno ancora aggiornato i loro tipi di proprietà. Non sarà selezionabile
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Cosa prenoteranno gli ospiti?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Dovrai completare i dettagli del tuo indirizzo in modo che i tuoi ospiti possano trovarti quando vengono a soggiornare.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aggiorna il tuo indirizzo');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, sembra che tu abbia dimenticato di completare tutti i campi.');
jr_define('_JOMRES_CONTANT_US', 'Contattaci');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Benvenuto nel tuo nuovo annuncio online per ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Ciao e benvenuto nella tua nuova proprietà su ');

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Recentemente hai aggiunto una nuova proprietà al nostro sito web e vorremmo darti il ​​benvenuto nella famiglia.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Puoi vedere la tua nuova dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'qui');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Una volta che hai impostato la tua proprietà puoi vedere come appare ai visitatori del sito visitando ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' la tua prima pagina.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(non è pubblicato, quindi i visitatori del sito non possono ancora vederlo).");

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Nella parte superiore della pagina vedrai una serie di messaggi. I pulsanti accanto a questi messaggi ti guideranno alle pagine che devi visitare per impostare la tua struttura sul nostro sito. Una volta che tu Dopo aver eseguito ciascuna di queste attività sarà molto più facile per i visitatori del nostro sito trovare la tua struttura ed effettuare prenotazioni online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Se hai qualche domanda, per favore');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contattaci');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "e saremo lieti di rispondere a tutte le tue domande.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Cordiali saluti, il nostro team di ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Sembra che tu non abbia tour da vendere. Crea un profilo del tour, quindi usa il pulsante Genera per creare alcuni tour.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Creiamo dei tour!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Cambia posizione simbolo valuta');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Usa questa opzione per spostare il simbolo della valuta da dietro, davanti alla cifra del prezzo, o viceversa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Inserisci l\'id della tua pagina facebook, ad esempio "jomres". Lascia questo campo vuoto per non mostrare nulla. Non inserire https://www.facebook.com o altro.');
jr_define('COMMON_DOWNLOAD', 'Scarica');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Poi dovrai aggiungere alcune tariffe. Questi sono i tuoi prezzi base.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap non abilitato!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Attenzione, Bootstrap non è abilitato in Configurazione sito di Jomres -> scheda Varie. Per fornire <i>alcune</i> funzionalità, Jomres sta attualmente utilizzando i suoi vecchi modelli basati sull\'interfaccia utente di jQuery, tuttavia questi non sono stati lavorati in diversi anni.Tutti gli attuali sviluppi e miglioramenti dei modelli Jomres (file di layout) sono fatti per i suoi file modello Bootstrap 3. Per ottenere il meglio da Jomres ti consigliamo di installare un Bootstrap 3 basato tema per Wordpress o Joomla. Una volta fatto, puoi abilitare i modelli Bootstrap di Jomres nella configurazione del sito.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'La tua chiave di supporto è valida. Nota che questa licenza non consente il download di plugin.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Trascina le prenotazioni in quest\'area per cancellarle');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Lungo (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Assicurati di aver creato una pagina WordPress che contenga lo shortcode [jomres:xx-XX] (dove xx-XX è il codice della lingua del tuo sito, ad esempio [jomres:en-GB] o [ jomres:en-US] ) altrimenti non sarai in grado di accedere a Jomres dal frontend per gestire le tue proprietà e le tue prenotazioni.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'La maggior parte delle proprietà a Jomres ha un processo di gestione degli affitti. Hotel/B&B/Pensioni affittano singole stanze e cottage/ville/appartamenti affittano l\'intera proprietà. Questo è invisibile al gestore della proprietà, ma per loro per poter creare le tariffe per la propria struttura è necessario prima aggiungere tipologie di camere adeguate alla tipologia di struttura.
Ad esempio, un tipo di struttura alberghiera normalmente necessita di diversi tipi di camera (camere doppie, singole e doppie) mentre una villa può avere solo un tipo di camera, ad es. 2 camere da letto, 5 camere da letto.
È possibile creare tipologie di camere per strutture come Tours. Ciò consente ai clienti di cercare solo proprietà come i tour, ma il gestore della proprietà non creerà tariffe per questo tipo di proprietà, quindi il processo di gestione non è rilevante per loro.
');

jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Clicca per aggiungere nuovi tipi di camera');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Attenzione, hai uno o più tipi di proprietà senza tipi di stanze. Le proprietà necessitano di tipi di stanze in modo che i gestori di proprietà possano creare le tariffe.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Usa il pulsante Nuovo per creare nuovi tipi di stanza.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tour');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nessuna prenotazione/Immobili (annuncio semplice)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Posizione file di registro');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres registra l\'attività di sistema per impostazione predefinita nella posizione '.JOMRES_SYSTEMLOG_PATH." Poiché questo file può contenere informazioni sensibili (chiavi API, percorsi di sistema, informazioni sul gateway, informazioni sugli ospiti) si consiglia vivamente di modificare questo percorso a uno sopra la radice del documento Web. Se non capisci cosa significa, chiedi consiglio ai tuoi host web in quanto conosceranno il tuo file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres registra informazioni dettagliate sul tuo sistema, incluse chiavi API, percorsi di sistema, gateway e informazioni sugli ospiti, che non dovrebbero essere visibili al resto di Internet. Il tuo percorso del registro di sistema non è impostato, quindi i registri di sistema vengono attualmente salvati nella directory ".JOMRES_SYSTEMLOG_PATH.", che non è l\'ideale. Visita Configurazione del sito -> Debug e imposta un percorso nel file system esterno alla radice Web. In caso di dubbio, contatta i tuoi host web come sapranno consigliarvi.');

jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Se il tuo CMS è installato nella directory principale del tuo sito web, allora una posizione adatta sarebbe ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Non hai un set di chiavi di Google Maps. A causa delle recenti modifiche a Google Maps, tutti i nuovi siti avranno bisogno di una chiave API per poter utilizzare le funzioni di Google Maps. Per favore <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>consulta la nostra pagina del manuale su come creare una chiave API< /a> e salva la chiave in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Schema colori mappa Google');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Bene, iniziamo ad aggiungere la tua proprietà al sito web. Abbiamo bisogno di raccogliere alcune informazioni sulla tua proprietà qui. Questo ci permetterà di impostare le ossa nude della tua proprietà. Una volta fatto, allora tu verrai guidato nell'aggiunta di camere, prezzi e immagini.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Il tipo di proprietà ti aiuta a definire come verrà prenotata la proprietà, ad esempio con gli hotel "vendi" solo una o due stanze alla volta, mentre con le ville offri l\'intera proprietà.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Nota che l\'indirizzo email non deve essere lo stesso che hai usato quando hai registrato il tuo account. Questo ti permette di avere indirizzi diversi per proprietà diverse.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Deposito minimo');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Puoi configurare l\'importo minimo del deposito da addebitare. In tal caso, le impostazioni "Deposito richiesto è il costo della prima notte?" & "Deposito richiesto è percentuale?" in Configurazione proprietà non possono essere configurate , invece tutti i valori di deposito sono una percentuale e devono essere almeno la cifra che definisci qui.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Questa cifra non può essere inferiore a ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Host Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Porta Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Se vuoi inviare messaggi di registrazione del sistema a un server syslog, puoi impostare il nome host o l'IP (es. 192.168.0.2) e la porta (es. 514) qui. Nota, se il sito è impostato su ' Sviluppo' quindi verranno inviati i messaggi di DEBUG. Se impostato su 'Produzione' verranno inviati solo i messaggi di livello INFO e superiori. Per disabilitare la registrazione al server remoto, svuota i campi host e porta.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP non è autorizzato ad accedere alle funzioni PHP 'openlog' e 'syslog'. Questa è un'impostazione lato server, se desideri che Jomres invii messaggi a un server syslog, consulta i tuoi host e conferma se PHP è autorizzato ad accedere a queste funzioni. Una volta abilitate, potrai configurare le impostazioni del tuo server syslog qui.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Invia un\'email all\'amministratore del sito quando si verifica un errore?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Storicamente i problemi che dovrebbero essere investigati sono stati inviati via email ai proprietari dei siti. Questo può essere ottimo per tenere d'occhio il funzionamento del tuo sistema in quanto ha moltissime parti mobili ed è difficile tenerne traccia tutti.Sfortunatamente, Spider e Bot che eseguono la scansione dei tuoi siti (anche quelli amichevoli) possono inavvertitamente innescare errori fatali e questo può causare un numero eccessivo di messaggi che ricevi. In questo caso, imposta questa opzione su No. Jomres invia la registrazione messaggi sia a un insieme di file di log che a un server syslog (se le tue impostazioni PHP specifiche lo consentono, in caso contrario contatta il tuo host).Puoi analizzare manualmente i file se stai cercando qualcosa di specifico (ad esempio, se stai sviluppando un gateway e vuoi usare la chiamata alla funzione gateway_log().) ma ci sono molte informazioni da esaminare, quindi è meglio usare qualcosa come un analizzatore di file syslog.Se stai sviluppando su Linux, allora ci sono molti strumenti a tua disposizione, se su Windows allora uno strumento semplice che puoi usare è http://maxbelkov.github.io/visualsyslog/ In questa pagina imposta \"host Syslog\" su \"127.0.0.1\" e  Port a 514 per vedere i messaggi registrati in quello strumento. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Gestisci proprietà');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Non hai impostato una chiave API di rilevamento IP. Ciò è necessario per consentire al sistema di rilevare automaticamente la posizione dell'utente e impostare automaticamente la valuta e il paese. Per favore <a href='http://www .jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>vedi il nostro manuale pagina su come creare una chiave API di rilevamento IP</a> e salvare la chiave in Jomres > Configurazione sito > Conversioni valuta/Codici valuta.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Non hai un set di chiavi API Open Exchange Rates. Ciò è necessario per consentire al sistema di scaricare e utilizzare automaticamente i tassi di cambio. Per favore <a href='https://www.jomres.net /manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>consulta la nostra pagina di manuale su come creare una chiave API di rilevamento IP</a> e salvare la chiave in Jomres > Configurazione sito > Conversioni valuta/Codici valuta.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Numero permesso');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Alcuni paesi leggono che devi mostrare un numero di permesso per la tua proprietà. Se hai un tale numero, inseriscilo qui e sarà aggiunto alla sezione di intestazione della proprietà.');
jr_define('_JOMRES_SHORTCODES', 'Codici brevi');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "Il plugin <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot DEVE essere installato e abilitato affinché questi shortcode funzionino. Questo può essere trovato nel Jomres Plugin Manager utilizzando uno di questi siti Quickstart quindi probabilmente è già installato.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Devi assicurarti che il plug-in <strong>'Jomres Shortcodes'</strong> sia abilitato. Questo può essere trovato nel Jomres Plugin Manager. Se questo sito è stato creato utilizzando uno dei Quickstart, probabilmente è già installato.");
jr_define('SHORTCODE_TASK', 'Compito');
jr_define('SHORTCODE_DESCRIPTION', 'Descrizione');
jr_define('SHORTCODE_ARGUMENTS', 'Argomenti');
jr_define('SHORTCODE_EXAMPLE', 'Esempio');
jr_define('INTEGRITY_CHECK', 'Verifica integrità filesystem');
jr_define('INTEGRITY_CHECK_DESC', 'Questa funzione ti permette di verificare che il filesystem corrisponda a quello fornito nella versione corrente di Jomres. Questo è utile per assicurarti che tutti i file siano stati aggiornati correttamente dopo l\'installazione/aggiornamento. Mancano i file in rosso, i file in Gli Orange esistono ma sono diversi da quelli forniti nella build corrente. Qui verranno elencati solo i file che presentano potenziali problemi.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Verifica integrità filesystem');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Hash locale');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Hash versione');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Fantastico! Nessun problema riscontrato.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Indicatore Google Maps');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Leggi di più');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Leggi meno');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Imposta di soggiorno');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Aliquota tassa di soggiorno');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Imposta l\'aliquota della tassa di soggiorno. La tassa di soggiorno viene calcolata solo dopo che è stata generata la prenotazione iniziale, e viene aggiunta alla pagina di conferma della prenotazione, nel riquadro dei servizi extra.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'La percentuale è?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Imposta questo su Sì se la tassa è una percentuale o No se è una tariffa fissa.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Influisce sull\'intero valore della prenotazione?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Impostalo su Sì se l'imposta deve coprire l'intero valore della prenotazione, quindi è una percentuale di entrambe le sistemazioni più eventuali extra, o No se viene calcolata solo in base al valore di il totale dell'alloggio. Se l'opzione 'È percentuale' sopra è impostata su No, questa opzione viene ignorata.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Tieni presente che a questa prenotazione verrà aggiunta una tassa di soggiorno. Potrai vedere la tassa nella pagina di prenotazione della recensione.');
jr_define('NO_LICENSE_MESSAGE', "Non hai salvato un numero di licenza in Configurazione sito, quindi non potrai scaricare plugin. Una volta salvata una chiave di licenza valida potrai installare tutti i plugin elencati come Plugin principali.");
jr_define('INVALID_LICENSE_MESSAGE', "Sembra che tu stia utilizzando un numero di licenza non valido o scaduto. Una volta salvata una chiave di licenza valida, sarai in grado di installare qualsiasi plugin elencato come plugin Core.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulazioni, stai utilizzando un numero di licenza valido e puoi installare i plugin Core tramite il gestore plugin di Jomres.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Questa pagina ti consente di caricare immagini per la tua proprietà e le cose che offri. Ha un pulsante principale e un secondo pulsante che ti consente di selezionare risorse specifiche per le quali caricare immagini. Quindi, la proprietà principale image e lo Slideshow mostrerà solo un pulsante ma se hai creato ad es. Extra opzionali o Stanze, vedrai un secondo pulsante dove puoi caricare immagini per quelle risorse specifiche.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Questa pagina ti consente di caricare immagini per la tua proprietà e le cose che offri. Ha un pulsante principale e un secondo pulsante che ti consente di selezionare risorse specifiche per le quali caricare immagini. Quindi, la proprietà principale image e la presentazione mostreranno solo un pulsante ma se hai creato degli extra opzionali vedrai un secondo pulsante dove puoi caricare immagini per quelle risorse specifiche.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Per prima cosa scegli l'immagine o le immagini che desideri caricare facendo clic su Aggiungi immagine o utilizzando il trascinamento della selezione. Questi appariranno nella colonna a destra.</li>
  <li>Sopra quest'area, usa il pulsante \"Scegli la risorsa\" per scegliere per quale risorsa vuoi caricare le immagini. Ti potrebbe essere offerta la possibilità di scegliere una risorsa specifica sotto. </li>
  <li> Una volta scelta una risorsa, puoi fare clic sul pulsante Carica immagine sotto un'immagine per associarla a quella risorsa. Una volta che un'immagine è stata caricata, scomparirà dalla colonna sul sito di destra e apparirà a sinistra.</li>
  <li>Usa il pulsante Cestino accanto alle immagini esistenti per rimuovere le immagini che non vuoi più mostrare.</li>
  <li>Puoi modificare l'ordine in cui i file vengono mostrati nella presentazione rinominandoli prima di caricarli, poiché vengono visualizzati nelle pagine in ordine alfabetico.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Accanto al pulsante Risorsa, potresti vedere un pulsante Anteprima. Se fai clic su di esso vedrai un popup che mostra come appariranno le immagini attualmente caricate in una pagina. Questo ti aiuta a darti un idea di come appariranno le immagini ai tuoi clienti.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Non c'è limite al numero di immagini che puoi caricare. Le immagini vengono ridimensionate automaticamente quando vengono caricate. Puoi caricare solo file JPG e PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealmente qualsiasi immagine che carichi dovrebbe essere almeno ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " larghi in pixel, altrimenti potrebbero apparire sfocati dopo essere stati caricati.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Le immagini che carichi non possono essere più di ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " nelle dimensioni.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Scegli la risorsa per la quale vuoi caricare le immagini");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Risorsa specifica");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Immagini già caricate per questa risorsa");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Formattazione del testo');
jr_define('_JOMRES_MARKDOWN_DESC', 'Puoi inserire il testo qui usando la semplice formattazione Markdown. Non hai bisogno di conoscere alcun HTML, usa semplicemente i pulsanti per dare l\'aspetto che desideri, o formatta il testo secondo questi esempi.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Enfasi');
jr_define('_JOMRES_MARKDOWN_BOLD', 'grassetto');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'corsivo');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'barrato');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Intestazioni");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Intestazione grande');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Intestazione media");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Intestazione piccola');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Intestazione minuscola');
jr_define('_JOMRES_MARKDOWN_LISTS', "Liste");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Voce elenco generico');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Voce elenco numerato');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Collegamenti');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Testo da visualizzare');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citazioni');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Questa è una citazione.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Può occupare più righe!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Immagini');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabelle');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Colonna');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mostra le immagini delle proprietà come presentazione nella lista delle proprietà?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Se impostato su yes, verrà visualizzata una presentazione delle immagini principali della proprietà. Se impostato su no, verrà visualizzata la prima immagine principale della proprietà.');
jr_define('EDIT_CMS_USER', 'Modifica utente CMS');
jr_define('BOOKING_MADE_BY', 'Prenotazione effettuata da');
jr_define('_JOMRES_ROUTER_FEATURES', 'Servizi');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipi di camera');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL modulo prenotazione esterno');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Qui puoi impostare un URL esterno se desideri utilizzare un sito Web di terze parti per effettuare prenotazioni. Tutti i pulsanti di prenotazione di Jomres punteranno a questo URL. Lascia vuoto questo campo se desideri utilizzare il modulo di prenotazione di Jomres .');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (breve descrizione/sottotitolo della stanza)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Descrizione stanza');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Ospite nella lista nera');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Se questo ospite è nella lista nera, non potrà più effettuare prenotazioni in questa proprietà.');
jr_define('_JOMRES_SESSION_HANDLER', 'Gestore di sessione');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Salva i file di sessione di jomres su disco o database. Consigliato: database');
jr_define('_JOMRES_MAP_HEIGHT', "Altezza mappa (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Livello di zoom della mappa ");
jr_define('_JOMRES_MAP_MAPTYPE', "Tipo mappa");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Gestione sostituzione modelli");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "I pacchetti di modelli sono plugin che possono fornire modelli di sostituzione per vari file modello di Jomres principali.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Questa pagina elenca tutti i file modello che possono essere sovrascritti dai file modello di un pacchetto modello. Se vuoi sovrascrivere un determinato file modello, fai clic sul pulsante di modifica per quel file, nella pagina successiva verrai in grado di scegliere con quale versione si desidera eseguire l'override. Nota, queste sostituzioni hanno la priorità sia su Jomres Core che su qualsiasi sostituzione di temi/modelli di Wordpress o Joomla. Puoi disabilitare una sostituzione eliminandola nella pagina Elenca le sostituzioni dei modelli.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nome modello");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Percorso corrente");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Non sovrascritto");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Puoi scegliere quale file modello sovrascrivere i file modello Core modificando il menu a discesa");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentuale Camere Prenotate");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentuale Camere Prenotate");
jr_define('_JOMRES_SELECT_WIDGETS', "Seleziona widget");
jr_define('_JOMRES_INTERVAL', "Intervallo");
jr_define('_JOMRES_TIMELINE', "Cronologia");
jr_define('_JOMRES_CPANEL_GRID', "Layout home pannello di controllo");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Seleziona il layout della griglia della home page del tuo pannello di controllo di gestione delle proprietà frontend.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Evidenziatori di Google Maps");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Immagini città");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Cambiando il tipo di proprietà cancellerai tutte le stanze, le tariffe, le impostazioni della proprietà e ripristinerà la disponibilità.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Nota, dopo l\'aggiornamento devi aggiornare tutti i plug-in Jomres che sono già installati, tramite il gestore plug-in Jomres. Se hai plug-in Core installati, ma non hai una licenza Jomres valida, <em> lo facciamo non</em> consiglia di aggiornare Jomres poiché i plug-in più vecchi spesso potrebbero non funzionare con le versioni più recenti di Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Nota, dopo l\'aggiornamento devi aggiornare tutti i plugin di Jomres che sono già installati, attraverso il gestore dei plugin di Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Se desideri aggiornare Jomres e i suoi plugin avrai bisogno di una licenza di rinnovo. Visita <a href='https://www.jomres.net/pricing' target='_blank'>il nostro sito</a> per ulteriori informazioni. Nella maggior parte dei casi queste licenze sono il 50% del prezzo di una licenza completa. Assicurati di aver effettuato l'accesso al nostro negozio prima di tentare di acquistare un rinnovo.");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Metodo di pagamento: ");
jr_define('_JOMRES_PRICES', "Connettiti");


jr_define('_OAUTH_TITLE', "Gestione chiavi app");
jr_define('_OAUTH_APPS', "Dettagli client API REST");
jr_define('_OAUTH_IDENTIFIER', "Identificatore");
jr_define('_OAUTH_APIKEY', "ID cliente");
jr_define('_OAUTH_SECRET', "Segreto");
jr_define('_OAUTH_CREATED', "App creata/aggiornata");
jr_define('_OAUTH_CLIENT_ID_INFO', "L'ID Cliente e il Segreto sono stati creati per te. L'Identificatore è così che tu possa facilmente identificare questa coppia di chiavi.");
jr_define('_OAUTH_SCOPE_TITLE', "Permessi (cosa può fare il client)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Permessi utente");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Permessi di proprietà");

jr_define('API_DOCUMENTATION_TITLE', "Documentazione dell'API REST dell'app");

jr_define('_OAUTH_CONFIG', "Configurazione API Core");

jr_define('_OAUTH_CONFIG_SHOW', "Mostra le opzioni di configurazione del client API nel menu principale di Jomres?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Puoi scegliere di non mostrare le opzioni di configurazione del client API nella sezione 'Il mio account' del menu principale di Jomres. Potresti invece decidere di mostrarle su altre pagine usando gli Shortcode di Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Visualizza la pagina della documentazione di base dell'API. API Core consente agli utenti di creare client API, che vengono quindi utilizzati per accedere alla funzionalità API delineata nella documentazione di API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Mostra la pagina di amministrazione principale dell'API, dove i gestori di proprietà possono configurare i client API. Nota che questa è una funzionalità riservata agli utenti registrati, quindi gli utenti devono essere registrati e aver effettuato l'accesso prima di poter vedere questa pagina.");

jr_define('API_METHODS_TITLE', "Metodi API");
jr_define('API_METHODS_DESCRIPTION', "Questo elenco di metodi si basa sui plug-in di funzionalità API installati e viene generato automaticamente. Se installi o elimini un plug-in di funzionalità API, devi visitare questa pagina per ricostruire questo elenco di metodi API disponibili sul tuo sito. ");

jr_define('_OAUTH_REDIRECT_URI', "URI di reindirizzamento");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dammi un nome che sia significativo per te, come ad esempio Il mio telefono");

jr_define('_OAUTH_GRANT_TYPES', "Questo sistema supporta due tipi di concessione, Credenziali client e Implicito. Se stai usando il flusso <em>client_credentials</em> allora avrai bisogno sia dell'ID client che del segreto client. Se usi <em >implicito</em> allora la tua app invierà solo l'id client e tu effettuerai l'accesso al sistema per autorizzare esplicitamente quell'app.");

jr_define('_OAUTH_IMPLICIT_NOTES', "Per utilizzare il flusso del tipo di concessione <em>implicito</em>, dovrai utilizzare questo URL per autorizzare le tue app. Quando questo URL viene chiamato e hai autorizzato l'app, il sistema emetterà un token che le tue app utilizzeranno quindi per chiamare l'API di questo sistema ");
jr_define('_OAUTH_AUTHORISATION_URL', "URL di autorizzazione");

jr_define('WEBHOOKS_CORE', 'Webhook');

jr_define('_WEBHOOKS_CONFIG_SHOW', "Mostra le opzioni di configurazione di Webhook nel menu principale di Jomres?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Puoi scegliere di non mostrare le opzioni di configurazione di Webhook nella sezione 'Il mio account' del menu principale di Jomres. Potresti invece decidere di mostrarle su altre pagine usando gli Shortcode di Jomres.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Documentazione webhooks");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Visualizza la pagina della documentazione di base dell'API. API Core consente agli utenti di creare client API, che vengono quindi utilizzati per accedere alla funzionalità API delineata nella documentazione di API Core.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Mostra la pagina di amministrazione principale dell'API, dove i gestori di proprietà possono configurare i client API. Nota che questa è una funzionalità riservata agli utenti registrati, quindi gli utenti devono essere registrati e aver effettuato l'accesso prima di poter vedere questa pagina.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Modifica integrazione');
jr_define('WEBHOOKS_INTEGRATION_ID', 'ID integrazione');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL o nome');
jr_define('WEBHOOKS_ENABLED', 'Abilitato');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Metodo di autenticazione/Integrazione');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Qualsiasi webhook che crei non verrà attivato in quanto non sei assegnato ad alcuna proprietà. Ai gestori di proprietà super non vengono generalmente assegnate proprietà individuali, quindi potresti aver bisogno di un nuovo utente per la creazione di webhook.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Qualsiasi webhook che crei verrà attivato sulle seguenti proprietà : ');


jr_define('PORTAL_REVIEWS_LIMIT', 'Limite di recensioni');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Utilizza questa impostazione per limitare il numero di recensioni mostrate nella pagina dei dettagli della struttura.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Mostra tutte le recensioni');

jr_define('VIDEO_TUTORIALS', 'Video Tutorial');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valore minimo di deposito');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Se il deposito calcolato è inferiore a questa cifra, imposta invece il deposito su questo valore. Questa cifra potrebbe essere sovrascritta se non soddisfa l'impostazione di deposito minimo del sito. Lascialo impostato su 0 per non utilizzare l'impostazione.");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Per aumentare la velocità del tuo sito, ti consigliamo di importare i dettagli del sito esistente e le immagini delle proprietà nel database.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importa i dettagli delle immagini esistenti nel database');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Funzionalità sperimentale. Se abilitata, le immagini caricate utilizzando la funzione Media Center verranno copiate anche nel tuo bucket Amazon S3 e servite dall\'URL del tuo bucket Amazon S3. Quando abiliti questa opzione per la prima volta, sarai anche richiesto di importare immagini esistenti nel tuo bucket S3.');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'Dominio CloudFront');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Sostituisci il tuo dominio Amazon S3 predefinito con il tuo dominio CloudFront');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Consigliato per essere abilitato. Solo per Windows e Mac OSX, se libcurl non è stato creato con il supporto Schannel o Secure Transport (le librerie SSL native incluse in Windows e Mac OS X), dovresti impostarlo su No.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Hai abilitato l\'integrazione Amazon S3, quindi dovrai copiare tutte le immagini esistenti nel tuo bucket S3. Le immagini vengono ora servite ai visitatori del tuo sito dal tuo URL Amazon S3, quindi avrai bisogno per copiarli prima nel tuo bucket S3, altrimenti non saranno visibili ai visitatori del tuo sito.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Dopo aver fatto clic su questo pulsante, non interrompere il processo e attendere un messaggio di successo o errore. A seconda della velocità del server, il completamento potrebbe richiedere del tempo.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copia immagini esistenti nel bucket Amazon S3');


jr_define('JOMRES_INCOMPLETE', 'Incompleto');
jr_define('JOMRES_WATING_APPROVAL', 'In attesa di approvazione');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Mappa dettagli proprietà');

jr_define('HAS_STARS_TITLE', 'Consente la classificazione delle stelle?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Forza reimportare i dettagli dell\'immagine nel database');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Forza il ricaricamento delle immagini nel bucket S3');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Cancellare tutti i dati di Jomres durante la disinstallazione?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Se impostato su yes, Jomres cancellerà tutte le sue tabelle del database quando disinstallato. Questo cancellerà tutti i dati di Jomres dal db e non potrà essere annullato.');

jr_define('TRANSACTION_IDS', 'ID transazione');
jr_define('PAYMENT_METHOD', 'Metodo di pagamento');
jr_define('POA_DISPLAY_PRICE', 'Prezzo POA');
jr_define('POA_DISPLAY_PRICE_DESC', 'Quando le proprietà vengono mostrate in un elenco, il sistema tenterà di trovare un prezzo valido dalle tariffe configurate in base alla data odierna, o se le date sono state utilizzate in una ricerca, quindi in base a tali date Se non è possibile, mostrerà POA (Prezzo su richiesta), il che significa che l\'ospite dovrebbe contattarti per ottenere un prezzo. Se lo desideri, puoi configurare un prezzo qui che verrà mostrato al posto del testo POA. Questa cifra sarebbe un prezzo "di riserva" da visualizzare se non è possibile determinare un altro prezzo.');

jr_define('PLUGINMANAGER_INSTALL', 'Devi installare il gestore dei plugin prima di poter installare i plugin di Jomres, vuoi farlo adesso?');
jr_define('PLUGINMANAGER_REINSTALL', 'Devi aggiornare il gestore dei plugin prima di poter aggiornare i plugin installati, vuoi farlo adesso?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Facciamolo!");

jr_define('INCLUDEINFILTERS', 'Includi nei filtri?');
jr_define('INCLUDEINFILTERS_DESC', 'I filtri delle caratteristiche delle proprietà in Ajax Composite Search possono diventare molto lunghi, quindi puoi impostare questa opzione su No per evitare che questa caratteristica venga mostrata nell\'elenco delle caratteristiche delle proprietà.');

jr_define('REVIEW_REMINDER_PT1', "Hai");
jr_define('REVIEW_REMINDER_PT2', " prenotazione/i per cui non hai ancora lasciato una recensione. Per favore lascia una recensione.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Prenotazioni in attesa di revisione");
jr_define('REVIEW_NAG', "Solleticare gli ospiti per le recensioni?");
jr_define('REVIEW_NAG_DESC', "Una volta che un ospite è stato escluso da una prenotazione, il sistema gli ricorderà di pubblicare una recensione per la sua prenotazione. Imposta questa opzione su No per disabilitare questo promemoria.");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Inviare copie delle email di prenotazione agli amministratori del sito?");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Quando abilitato, le copie delle email di prenotazione inviate ai gestori di proprietà verranno inviate anche a tutti gli amministratori del sito.");

jr_define('HIDDEN_ADDRESS_SETTING', "Nascondi indirizzo?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Se imposti questa opzione su Sì, solo gli ospiti che hanno già effettuato una prenotazione nella tua proprietà potranno vedere l\'indirizzo della proprietà. Potresti voler utilizzare questa impostazione per nascondere l\'esatta posizione della proprietà se, ad esempio, viene regolarmente lasciato incustodito.");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "NASCOSTO");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Ottimizzare le immagini al caricamento?');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Quando abilitato, le immagini saranno ottimizzate per il web (la dimensione del file può essere fino al 75% più piccola). A seconda del tipo di immagine caricata, il tuo server deve avere una o più di queste librerie installate dall\'hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define('DATABASE_INTEGRITY_CHECK', 'Verifica integrità database');
jr_define('OBSOLETE_FILES_CHECK', 'Verifica file obsoleti');
jr_define('DATATABLES_COLVIS', 'Visibilità colonna');

jr_define('API_TOKEN_LIFETIME', 'Durata del token API');
jr_define('API_TOKEN_LIFETIME_DESC', 'Per quanto tempo un token API rimane valido, in secondi. 86400 = 1 giorno, 31536000 = 1 anno');


jr_define('ENCRYPTION_TITLE', 'Crittografia');
jr_define('ENCRYPTION_FILE_LOCATION', 'Posizione file di crittografia');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '**Non eliminare mai il file di crittografia** <br/> I dati dell\'utente vengono archiviati crittografati in tabelle per garantire che i "dati a riposo" siano protetti in modo sicuro, in conformità con le raccomandazioni GDPR. Per impostazione predefinita la chiave di crittografia è memorizzato nel file "encryption_key.class.php" nella root della tua installazione di Jomres (tipicamente /public_html/jomres). Puoi cambiare dove è memorizzato il file qui. Se cambi la posizione, devi SPOSTARE il file, non aspettare che Jomres crei una nuova versione altrimenti non sarai in grado di decodificare i dettagli dei tuoi ospiti.');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Le informazioni salvate qui verranno utilizzate nelle fatture generate per questa proprietà');

jr_define('_JOMRES_GDPR_POLICIES', 'Politiche GDPR');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Qui puoi configurare quanto tempo dopo che una prenotazione o una fattura è stata creata viene rimossa dal sistema per assicurarti di essere conforme al GDPR.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Periodo di conservazione della prenotazione (in giorni)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Quanti giorni dopo la data di partenza della prenotazione deve essere cancellata la prenotazione? Quando viene cancellata, sia la prenotazione che la fattura vengono rimosse. Un tipico periodo di conservazione potrebbe essere di 365 giorni.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Periodo di conservazione della fattura (non prenotazione)');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Altre fatture, come commissioni e fatture di abbonamento, non sono legate alle prenotazioni. Di conseguenza non verranno eliminate quando le fatture di prenotazione e i contratti vengono eliminati. A seconda del tuo paese e delle tue pratiche commerciali, dovrai configurare un periodo di conservazione diverso. Un periodo di conservazione tipico potrebbe essere 3653 giorni, ovvero 10 anni.');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'I tuoi dati');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Alcune funzionalità di questo sito web necessitano di memorizzare informazioni sulla tua visita. Questo è usato solo per fornirti un servizio, non è mai condiviso con nessun altro e viene cancellato quando non è più necessario.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'CI DIAMO IL PERMESSO DI CONSERVARE QUESTE INFORMAZIONI??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In dettaglio');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Devi acconsentire alla memorizzazione di questi dati per poter effettuare prenotazioni su questo sito. Indipendentemente dal fatto che tu acconsenta o meno alla memorizzazione dei tuoi dati, memorizzeremo un cookie sul tuo computer per dire indipendentemente dal fatto che tu abbia aderito o meno. Questo ci aiuta a garantire che non ti chiediamo costantemente se desideri o meno aderire o meno e non contiene alcuna informazione di identificazione personale (PII). Se cambi idea, può visitare la pagina "Autorizzazioni app" in qualsiasi momento per attivare o disattivare.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Le informazioni vengono archiviate per periodi di tempo diversi a seconda della natura della tua visita. Quindi, se ti stai solo guardando intorno, memorizzeremo informazioni approssimative sulla posizione geografica (a livello di paese). Se esegui ricerche, allora per rendere i moduli di ricerca più facili da usare memorizzeremo le ultime cose su cui hai cercato. Queste informazioni sono in genere conservate per un massimo di 24 ore e vengono utilizzate solo per rendere la tua visita più piacevole.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Quando effettui una prenotazione con noi, per necessità vengono memorizzate più informazioni.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'I dati tecnici del modulo di prenotazione vengono acquisiti e conservati per un massimo di 60 giorni. Ciò è necessario affinché le prenotazioni su richiesta possano essere trasformate in prenotazioni complete una volta approvata la prenotazione e per l\'analisi da parte dei nostri team in caso di problemi con una prenotazione. Se non eri connesso al momento della prenotazione, ti invieremo un nome utente e una password in modo che tu possa visualizzare la cronologia delle tue prenotazioni ed esercitare il tuo diritto all\'oblio (RTBF) se desidera farlo.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'I dati inseriti nel modulo di prenotazione, ad esempio nome, indirizzo email, indirizzo reale vengono conservati per un massimo di 365 giorni dopo la data di partenza della prenotazione. Queste informazioni sono conservate in forma criptata nel nostro database in modo che solo le persone autorizzate possano visualizzarlo. Se effettui una prenotazione, per legge dobbiamo memorizzare le tue PII mentre la prenotazione è valida. Una volta completata la prenotazione, perché è stata cancellata o perché sei stato controllato, allora essere in grado di esercitare il tuo RTBF effettuando il login e visitando la pagina "I tuoi dati". Le informazioni sulla fattura per le prenotazioni completate saranno comunque archiviate in modo sicuro nel nostro database per garantire il rispetto delle leggi fiscali pertinenti, ma sarai in grado di rimuovere tutte le altre PII una volta completata la prenotazione.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Quando acconsenti all\'archiviazione delle tue informazioni come descritto sopra, siamo legalmente obbligati a memorizzare questo consenso nel nostro database. Queste informazioni includeranno il tuo numero IP e il contenuto del modulo di opt-in. conservare questa notifica di consenso a tempo indeterminato (questo è un requisito legale).');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Non ci hai ancora detto se possiamo raccogliere informazioni di identificazione personale su di te');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Ci hai acconsentito a raccogliere le informazioni di identificazione personale necessarie per accettare le prenotazioni');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Ci hai detto di non raccogliere informazioni di identificazione personale');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Non ci hai dato il permesso di raccogliere i tuoi dati privati');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Per poter eseguire determinate azioni su questo sito Web, dobbiamo raccogliere informazioni di identificazione personale su di te, ma non ci hai dato il permesso di farlo.');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Cambia i tuoi permessi');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continua a visualizzare le proprietà');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Autorizzazioni app');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Dati ospite');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Questi sono i dettagli che vengono memorizzati per te dalle varie proprietà. Hotel diversi possono contenere record diversi, a seconda di ciò che hai inserito al momento della prenotazione.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Non hai nessun dato memorizzato con nessun hotel in questo sistema');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Dati profilo');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Questo è il principale set di dati che conserviamo per te, distinto da quelli che hai condiviso con diverse proprietà.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Non hai salvato nessuna informazione del profilo');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Ecco le informazioni di identificazione personale che memorizziamo su questo sito Web per te. È costruito in formato JSON (JavaScript Object Notation) che è un formato di scambio dati leggero. È facile da leggere e scrivere ed è facile per le macchine analizzare e generare.');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonimato');

jr_define('_JOMRES_GDPR_MY_DATA', 'I tuoi dati');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Accettando i presenti Termini di utilizzo (questo "Accordo"), accetti che:

<ul>
<li>
Sei autorizzato a prenotare hotel tramite questo sito web;
</li>
<li>
Hai almeno 18 anni di età;
</li>
<li>
Possiedi l\'autorità legale per creare un obbligo legale vincolante;
</li>
<li>
Utilizzerai il Sito in conformità con il presente Accordo;
</li>
<li>
Utilizzerai il Sito solo per effettuare prenotazioni legittime per te stesso o per un\'altra persona per la quale sei legalmente autorizzato ad agire;
</li>
<li>
Informerai tali altre persone del presente Accordo che si applica alle prenotazioni che ho effettuato per loro conto, comprese tutte le regole e le restrizioni applicabili;
</li>
<li>
Tutte le informazioni fornite dall\'utente al sito Web sono vere, accurate, aggiornate e complete; e
</li>
<li>
Salvaguarderai le informazioni del tuo account e supervisionerai e sarai completamente responsabile per qualsiasi utilizzo del tuo account da parte tua e di chiunque altro oltre a te.
</li>
</ul>
');

jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'La sicurezza e la trasparenza sono importanti per noi.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Prendiamo molto seriamente le nostre responsabilità riguardo alla memorizzazione dei tuoi dati. Tutte le informazioni di identificazione personale (PII) sono memorizzate crittografate nel nostro database utilizzando algoritmi standard del settore per garantire che solo gli utenti autorizzati possano visualizzare queste informazioni.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Puoi scaricare tutte le PII che memorizziamo per te.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Scarica ora');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Diritto all\'oblio (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Riteniamo che dovresti essere in grado di <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">eliminare</a> il tuo < a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Informazioni di identificazione personale </a>se lo desideri e se è fattibile. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Non sei registrato su questo sito. La tua posizione generale (paese) e il numero IP verranno memorizzati per un massimo di 24 ore e poi cancellati.');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Non sei registrato su questo sito e hai rinunciato alla raccolta dati. Non abbiamo memorizzato le tue PII.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Sei registrato al sito e non hai prenotazioni in sospeso o attive. Possiamo anonimizzare la maggior parte delle informazioni che abbiamo attualmente per te. Ti piacerebbe farlo? ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Nota: questo non elimina il tuo account, ma semplicemente anonimizza i nostri record in modo che il tuo account non possa essere associato a te come persona. Per legge dobbiamo continuare a memorizzare le tue PII a fini di fatturazione, tuttavia lo faremo elimina tutti i record degli ospiti.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Sei registrato al sito, tuttavia hai delle prenotazioni in sospeso e non possiamo anonimizzare i tuoi dati in questo momento. Questi dati saranno conservati per un massimo di un anno dopo che la prenotazione è stata completata, poi sarà essere cancellato, se non scegli di rimuoverlo prima di quel momento.');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Poiché sei un gestore di proprietà sul nostro sito, non possiamo offrirti la possibilità di cancellare automaticamente i tuoi dati. Ti preghiamo di contattarci direttamente in modo che possiamo assegnare la tua proprietà a un altro gestore. Una volta fatto ciò e rimosso il tuo status di gestore di proprietà, potrai cancellare automaticamente i tuoi dati.');

jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Dimenticami!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Questo non può essere annullato!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'I tuoi dati sono stati cancellati!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Spiacente, non puoi effettuare una prenotazione perché il tuo indirizzo email non è valido');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Questa pagina ti dà la possibilità di rendere anonimi gli ospiti le cui informazioni sono memorizzate nel sistema. Ciò ti consente di essere conforme al GDPR, tuttavia non puoi modificare nessun\'altra informazione in questa pagina. Per farlo devi accedere al frontend come gestore della proprietà. Il presupposto è che un ospite storico ti abbia contattato chiedendoti di consentirgli di esercitare il suo diritto all\'oblio. Se non riesce ad accedere al frontend del sito (magari un l\'utente non è stato creato per loro quando hanno prenotato) allora puoi usare quest\'area per anonimizzare loro una volta che hai confermato la loro identità.');
jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimi ospite');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'PROPRIETÀ CANCELLATA');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Dati ospiti anonimizzati');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Impossibile anonimizzare');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Abbiamo bisogno del tuo permesso per memorizzare le tue informazioni prima di poter effettuare una prenotazione. CLICCA QUI per darci il permesso.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Abilitare la funzionalità conforme al GDPR?');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NON RACCOMANDIAMO DI DISABILITARE LA FUNZIONALITÀ CONFORME AL GDPR. Jomres ha funzionalità integrate che ti aiutano a garantire che la sezione Jomres del tuo sito sia conforme al GDPR. Se disabiliti questa funzione (e non dovresti se sei nell\'UE o fai affari con cittadini dell\'UE) allora Jomres presumerà automaticamente che ogni visitatore del sito abbia dato il permesso di abilitare i propri dati personali. Il permesso dell\'app e le pagine dei miei dati non saranno mostrato e agli utenti non verrà chiesto di dare il loro permesso alla raccolta dei dati.');


jr_define('EMPTY_TEMP_DIR', 'Vuota dir temp');
jr_define('EMPTY_TEMP_DIR_DONE', 'File temporanei cancellati');

jr_define('MACHINE_TRANSLATION', 'Traduzioni automatiche');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Lingua sorgente');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'È possibile agganciare la funzionalità di traduzione automatica. Ciò consente di inserire stringhe in una lingua e le traduzioni potrebbero essere estratte da servizi remoti. Tieni presente che non tutti i servizi di traduzione supportano tutte le lingue. Consulta questi servizi per più dettaglio.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipi di stanza');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Nuovo tipo di stanza');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Puoi creare e modificare i tipi di stanza in questa pagina. Questi tipi di stanza saranno specifici solo per questa proprietà. Quando imposti la tua proprietà devi prima avere alcuni tipi di stanza. Puoi usare entrambi i tipi di stanza creati da l\'amministratore, oppure puoi aggiungerne di tue.Una volta che hai uno o più tipi di camera puoi creare camere di quel tipo di camera.Dopo aver ottenuto le camere puoi creare le tariffe (prezzi) per quelle camere perché le tariffe sono legate ai tipi di camera .');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'I manager possono creare tipologie di stanze?');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Utilizza questa opzione per configurare se i gestori possono creare o meno i propri tipi di stanza nel frontend. Ti consigliamo vivamente di lasciare questa opzione impostata su No quando inizi a utilizzare Jomres per la prima volta, specialmente se stai creando un portale perché dovresti creare tutti i tipi di camera nell\'area amministratore. I tipi di camera creati dai gestori appariranno nei moduli di ricerca, ma poiché questi tipi di camera sono specifici per le singole proprietà, nei risultati di ricerca verrà mostrata solo una proprietà se quel tipo di camera è selezionato durante le ricerche. Se vuoi che solo i Super gestori di proprietà possano creare tipi di camere, lascia questa opzione impostata su Sì e utilizza il plug-in Controllo di accesso per consentire solo ai super gestori di visualizzare l\'opzione di menu "Impostazioni > Tipi di stanze". Solo le proprietà che affittano le stanze della proprietà e utilizzare le modalità di modifica delle tariffe Avanzate o Microgestione possono utilizzare questa opzione. Le proprietà di tipo Villa/Appartamento non potranno utilizzarla.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tipo di camera/proprietà aggiornato');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Mostra i tipi di camera nelle opzioni di ricerca');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Se scegli di consentire ai gestori di creare i propri tipi di stanza, puoi scegliere se mostrare o meno quei tipi di stanza creati nelle opzioni di ricerca dove hai scelto di mostrare i tipi di stanza.');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Non dovresti riutilizzare lo stesso indirizzo email per ogni prenotazione.<br/>Se hai un dominio univoco (es. non un indirizzo email Gmail) per la tua attività, usa il numero di telefono dell'ospite come indirizzo e-mail. L'indirizzo e-mail sarà quindi simile a 123456@miodominio.com<br/>Questo assicurerà che venga creato un nuovo ospite quando crei una prenotazione .");

jr_define('_JOMRES_LOGIN_USERNAME', 'Indirizzo email');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Password');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Siamo lieti che tu voglia prenotare di nuovo con noi. Per poter gestire tutte le tue prenotazioni insieme, è necessario che tu effettui il login in modo che la prenotazione possa essere aggiunta al tuo account. Anche questo garantisce di essere autorizzato a utilizzare l'indirizzo e-mail fornito.");
jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Se non conosci la tua password possiamo inviarti un\'e-mail di reimpostazione della password. Segui le istruzioni in quell\'e-mail per reimpostare la tua password.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Hai dimenticato la password?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonimizza il tuo nome?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Se scegli di rendere anonimo il tuo nome durante la revisione, utilizzeremo invece le tue iniziali.');
jr_define('ANONYMOUS', 'Anonimo');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'ha detto');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Rispondi a questa recensione');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Digita qui la tua risposta a questa recensione.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'La tua risposta');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Recensione principale');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Risposta di revisione salvata');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Prima di inviare una risposta alla recensione, devi leggere quanto segue. Inviando una risposta confermi di accettare questi termini e condizioni.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Quali sono le nostre linee guida per una risposta alla recensione?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Stai rispondendo alla recensione della tua proprietà. <em>Non devi</em> utilizzare la tua risposta come procedura di controversia commerciale. Se devi segnalare una recensione, devi utilizzare il "Segnala "Recensisci" nell\'elenco e non questa pagina di risposta alla recensione.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Una volta che hai lasciato la tua risposta non potrai più modificarla.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Consentito e incoraggiato');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>Una risposta completa alla recensione.</li>
    <li>Cortesia e Onestà.</li>
    <li>Risposte sensate ai problemi del revisore (ricorda, altri potrebbero avere problemi simili ma non hanno colto l\'occasione per pubblicare una recensione).</li>
    <li> Incoraggia l\'ospite a mettersi in contatto direttamente con te per risolvere i problemi.
    <li>Ricorda sempre che i futuri ospiti vedranno la tua risposta. Assicurati di essere sempre professionale.</li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Non consentito');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>Contenziosi commerciali.</li>
    <li>Domande al revisore o ad altri.</li>
    <li>Linguaggio discutibile (incluse le imprecazioni).</li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Ultima esecuzione');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Programma');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Numeri fattura');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Usi numeri di fattura personalizzati?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Puoi configurare il sistema per utilizzare numeri di fattura personalizzati. Saranno interessate solo le nuove fatture.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Numero di partenza');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'I numeri vengono creati consecutivamente. Quale dovrebbe essere il primo numero?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Che formato deve avere il numero di fattura?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configura qui il formato del numero di fattura. Un formato può essere {N}/{D} o {N}/{Y} dove N è il numero generato automaticamente, D = data nel formato AAAAMMGG ( 20190131) o Y = AAAA (2019). Qualsiasi altro carattere alfanumerico non racchiuso tra parentesi graffe verrà lasciato invariato, quindi un modello simile a {N}/{D}-L risulterà in un numero di fattura (21) che assomiglia a qualcosa come 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Sovrapprezzo');
jr_define('_JOMRES_SURCHARGE_DESC', 'Un supplemento che verrà aggiunto alla camera al momento della prenotazione (calcolato al giorno)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Dare priorità alle etichette a livello di sito?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Il testo personalizzato salvato nelle pagine di modifica delle etichette o delle stringhe di file di traduzione lang sono considerate etichette "a livello di sito". I gestori di proprietà possono anche personalizzare le etichette per ogni proprietà utilizzando la funzione di modifica delle etichette nel frontend. Ciò consente un gestore di proprietà di avere testi diversi per la sua proprietà, il che è utile se la proprietà è diversa da tutte le altre proprietà del sito.<br/> Quando il sistema cerca i testi delle etichette, darà la priorità ai testi a livello di sito rispetto alla proprietà testi specifici, il che significa che se esiste un testo a livello di sito per quell\'etichetta, il sistema sceglierà prima quello. Se imposti questa opzione su No, il sistema darà la priorità ai testi specifici della proprietà rispetto ai testi a livello di sito.');
jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Questo potrebbe essere cambiato in caso di whitelist, quindi il sito "Il miglior sito di prenotazione del mondo" lo modificherebbe in "WBBS" o simile.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Pacchetti libreria');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor e Node Modules sono pacchetti separati (gratuiti) per Jomres. Puoi reinstallare i pacchetti su questa pagina.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Reinstalla i pacchetti della libreria');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Impossibile eliminare il tipo di proprietà perché è ancora utilizzato da alcune proprietà. È necessario modificare queste proprietà in un altro tipo di proprietà prima di tentare di eliminare questo. UID proprietà che impediscono l\'eliminazione: ');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Impossibile annullare la pubblicazione del tipo di proprietà perché è ancora utilizzato da alcune proprietà. È necessario modificare queste proprietà in un altro tipo di proprietà prima di tentare di annullare la pubblicazione di questo. UID proprietà che impediscono la modifica: ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Indirizzi email casuali');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offri email casuali');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Puoi consentire al sistema di generare indirizzi e-mail casuali nel popup Prenotazione rapida nella dashboard. Ciò consente ai gestori e agli addetti alla reception di creare prenotazioni per gli ospiti per i quali non hanno indirizzi e-mail, è destinato a funzionare come risparmio di tempo per i siti con molti receptionist/gestori che capiscono che queste e-mail casuali non verranno mai utilizzate per comunicazioni reali, lo scopo è aggirare il fatto che in Jomres tutti gli ospiti devono avere indirizzi e-mail. È NECESSARIO fornire anche un dominio in il campo successivo.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Dominio Email Casuali');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Questo non dovrebbe essere un normale dominio di posta elettronica, come gmail o outlook. Invece può essere il tuo dominio, o qualcos\'altro, come "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Area di caricamento');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Nessun ruolo utente');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Gestore Proprietà');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Sospeso');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Cancellato da CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Se ti piace Jomres, considera di lasciare una recensione su uno di questi siti');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Sono una brava persona, ho già lasciato una recensione');

jr_define('_LICENCE_PROMPT_DEAR', 'Caro ');
jr_define('_LICENCE_EXPIRED', ', la tua chiave di licenza Jomres è scaduta, quindi ti mancano queste fantastiche funzionalità e vantaggi! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Aggiornamenti plugin e nuovi rilasci plugin');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Supporto email/biglietti solo per membri esclusivi');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Aggiornamenti Jomres Core senza preoccupazioni');
jr_define('_LICENCE_EXPIRED_POST', 'Connettiti a noi per soluzioni di pagamento senza problemi e accedi a tutti i plugin e ai servizi di supporto riservati ai membri.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Accedi subito a tutti i plugin!');

jr_define('_LICENCE_INVALID_KEY', 'Purtroppo sembra che tu non stia utilizzando una chiave di licenza Jomres valida, quindi ti mancano queste fantastiche funzionalità e vantaggi!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugin</a> che estendono notevolmente le funzionalità di Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Supporto email/biglietti solo per membri esclusivi');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Aggiornamenti Jomres Core senza preoccupazioni');
jr_define('_LICENCE_INVALID_POST', 'Connettiti a noi per soluzioni di pagamento senza problemi e accedi a tutti i plugin e ai servizi di supporto riservati ai membri.');
jr_define('_LICENCE_INVALID_START', 'Accedi subito a tutti i plugin!');
jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Utenti');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commissione');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abbonamenti');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Fatture');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portale');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Traduzioni');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Strumenti');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Rapporti');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Impostazioni');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Aiuto');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Proprietà totali nel sistema');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Proprietà pubblicate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Proprietà non pubblicate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Proprietà approvate');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Proprietà che richiedono approvazione');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Revisioni totali ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Recensioni non pubblicate ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Esamina i rapporti ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Informazioni sul sistema Jomres');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Il tipo di proprietà di questa proprietà non è pubblicato, potrebbe non essere visualizzato nei risultati di ricerca. Contatta l'amministratore del sito per pubblicare il tipo di proprietà o cambia il tipo di proprietà nella pagina Modifica proprietà.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Aggiorna il tuo tipo di proprietà');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Entrate (somme pagate)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Impossibile eliminare la caratteristica della proprietà "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" perché è utilizzato dalle seguenti proprietà: ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Test API REST');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Questa pagina esegue un test di base dell\'API REST utilizzando la funzionalità integrata in Jomres. Chiama l\'API REST di Jomres per vedere se riceve una risposta valida.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Il server ha chiamato questo URL per vedere se la risposta è valida: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'La pagina ha ricevuto questa risposta: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Il test sembra andare come previsto, probabilmente non avrai problemi a ricevere richieste API REST dal resto di Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Il test è fallito, guarda nel campo Response, se sembra molto html, o hai ricevuto un messaggio 404, allora il tuo server sta reindirizzando le chiamate a un altro URL. Questo ti impedirà di ricevere API chiamate.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Test di syndication');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Il server dell\'app Jomres mantiene un elenco di tutti i siti Jomres. Questo ci consente di creare una rete di syndication. Questa rete è progettata per consentire ai nostri utenti di visualizzare le proprietà di altri siti sui propri siti ed è utile, in particolare per i nuovi siti, per costruire una presenza SEO in rete. L\'obiettivo è che tutti i siti Jomres lavorino insieme, creando fiducia nella rete. Questo servizio è gratuito.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Il tuo sito non è attualmente elencato sul server dell\'app Jomres, che fa parte della rete di syndication. Questo server proverà di nuovo ad aggiungere questo server alla rete nelle prossime 6 pagine caricate. Se, dopo un pochi caricamenti di pagina, questo non cambia si prega di verificare che il test di connettività sopra superi i test. Nota, i server localhost non possono essere aggiunti alla rete.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulazioni, il tuo server è elencato sul server dell\'App Jomres.');
jr_define('_JOMRES_SYNDICATION_TITLE', 'Proprietà sindacate');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Ecco alcune altre proprietà disponibili dalla nostra rete di proprietà');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Statistiche syndication');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulazioni, il tuo server è elencato sul Jomres Syndication Network. Le tue proprietà inizieranno ad apparire presto su altri siti Jomres, se non sono già state mostrate.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'La tua installazione non fa parte di Jomres Syndication Network, quindi le tue proprietà non vengono mostrate su altri siti basati su Jomres e non puoi beneficiare di questa pubblicità gratuita.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Installazioni Jomres attive: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Il numero totale di installazioni Jomres che condividono le proprietà di Jomres Syndication Network sui loro siti. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Proprietà totali: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Questo è il numero di proprietà disponibili nel JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'La proprietà totale visualizza: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In totale, tutte le volte che una proprietà Jomres è stata collegata da un altro sito basato su Jomres.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Il Jomres Syndicate Network (JSN) è una funzione gratuita disponibile per tutti gli utenti di Jomres. Il suo scopo è quello di fornire pubblicità gratuita delle tue proprietà su altri siti basati su Jomres. L\'obiettivo è aiutare fai decollare il tuo sito velocemente, offrendo pubblicità gratuita in modo che le tue proprietà siano riconosciute e affidabili perché sono collegate a siti Web di alta fiducia e alta pertinenza che sono già ben noti ai motori di ricerca. Vedi questo <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">articolo sul nostro sito Web</a> e <a href="https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target="_blank">il manuale</a> per maggiori informazioni.');


jr_define('GUEST_PROFILE_INFORMATION', 'Questi sono i dati del tuo profilo ospite, campi con questo simbolo <i class="fa fa-users" aria-hidden="true"></i>
 sono pubblicamente visibili, mentre i campi con questo simbolo <i class="fa fa-user-secret" aria-hidden="true"></i> possono essere visti solo da te, dai tuoi host e dagli amministratori del sito.<br/> <br/>Gli host possono vedere le informazioni private solo se hai già creato una prenotazione con loro.<br/><br/>Le tue informazioni sono crittografate in modo sicuro e archiviate nel nostro database utilizzando la crittografia AES-256.');

jr_define('GUEST_PROFILE_OPTIONAL', 'Questi campi sono facoltativi, tuttavia gli host possono utilizzare le informazioni qui per determinare se ritengono di potersi fidare di te, quindi è meglio aggiungere le informazioni. Ricorda, stai chiedendo di rimanere nel loro proprietà e potrebbero rifiutarti se ritengono che tu non sia adatto o che la tua biografia non contenga informazioni sufficienti.');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Patente di guida');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Numero passaporto');
jr_define('GUEST_PROFILE_IBAN', 'Numero IBAN');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Su di me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Questa sezione "Su di me" è visibile pubblicamente quindi non inserire alcuna informazione privata. Detto questo, fai uno sforzo per mettere quanto ti senti a tuo agio nel condividere come le tue passioni, ciò che fai per vivere, i tuoi hobby, ecc. Puoi usare Markup per dargli un po\' di jazz. Gli host vorranno sentire che possono fidarsi di te con le loro proprietà. Assicurati che la tua foto sia una foto reale di te, non del tuo cane o macchina (sì, ragazzi, stiamo parlando con voi!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Inserisci qui eventuali requisiti speciali che potresti avere, come la facilità di accesso. Non verranno mostrati sul tuo profilo pubblico ma verranno aggiunti alle informazioni di prenotazione quando effettui una prenotazione.');

jr_define('VIEW_HOST_PROFILE', 'Profilo dell\'ospite');

jr_define('GUEST_PROFILE_TITLE', 'Profilo ospite');
jr_define('GUEST_PROFILE_TITLE_MY', 'Il mio profilo');

jr_define('GUEST_PROFILE_WELCOME', 'Ciao, lascia che ti parli un po\' di me.');
jr_define('GUEST_PROFILE_MY_NAME', 'Mi chiamo ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' e vengo dal ');
jr_define('GUEST_PROFILE_IN', ' regione in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Le mie informazioni private');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Facciamo del nostro meglio per convalidare le informazioni di ospiti e host, tuttavia dovresti fare la tua dovuta diligenza e decidere da solo se questa persona è affidabile o meno.');
jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Le mie proprietà');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Le mie recensioni');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Questo è quello che ho detto su questa proprietà: ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Ho assegnato a questa struttura un punteggio di : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Le mie recensioni');
jr_define('GUEST_PROFILE_OF_ME', 'Cosa dicono di me gli altri');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Cosa ha detto di me questo host');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Recensione ospite');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'La mia recensione di questo ospite');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Ecco alcuni esempi di recensioni degli ospiti per far girare la palla: <br/>

<ul>
<li>(nome degli ospiti) è stato un piacere ospitare! Hanno lasciato lo spazio pulito e sono stati tranquilli per tutto il fine settimana. Hanno avuto una comunicazione fluida e non vedo l\'ora di averli di nuovo con me!</li>
    <li>Mi è piaciuto molto avere (nome dell\'ospite) perché sono stati in grado di trattare il posto con rispetto, divertirsi e godersi la zona. Sono stati fantastici nell\'affittare lo spazio e spero di poterli ospitare di nuovo.</li>
    <li>Tutte le regole della mia casa sono state rispettate con (nome dell\'ospite) e sono stati in grado di entrare e uscire con facilità. Mi è piaciuto averli lì perché erano rispettosi e silenziosi. Li consiglio vivamente ad altri!</li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Spiacente, non riesco a trovare quell\'utente. Molto probabilmente non hanno ancora inserito i dettagli del loro account.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Ospite');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres è basato sul framework Bootstrap, quindi devi usarlo su un tema basato su Bootstrap. Ti consigliamo uno basato su Bootstrap 3. Se non hai accesso a un tema, ti consigliamo di utilizzare il tema Jomres Leohtian per Wordpress che puoi <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank ">scarica da qui.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Segna come No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Prenotazione contrassegnata come No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Prenotazioni');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Nessuna presentazione');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Statistiche JSN per questo utente');

jr_define('BOOKING_NOSHOW_INFO', 'Le informazioni su prenotazione e mancata presentazione sono estratte da Jomres Syndicate Network al momento della prenotazione. Sono prese da dati anonimi e possono essere utilizzate da te per decidere se questo ospite è a rischio di non soddisfare la prenotazione. Se il sistema segnala che i dati sono sconosciuti, probabilmente perché questo sistema non è riconosciuto sulla rete.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Sconosciuto');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Chiave del framework di gestione del canale');
jr_define('CMF_CONFIG_KEY_DESC', 'La chiave di licenza di Channel Management Framework. Dovrai fornire questa chiave per poter scaricare i plugin di Channel Management Framework.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'La tua proprietà non è stata approvata');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "La tua proprietà non è stata approvata. Se pensi che questo sia stato fatto per errore contattaci.");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Questo è un tipo di ospite Bambino?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Impostalo su Sì se questo tipo di ospite fosse classificato come tipo di ospite Bambino.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Se vuoi addebitare per persona a notte allora dovrai creare alcuni tipi di ospite.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Puoi creare tutti i tipi di ospite di cui hai bisogno, prova a iniziare creando un solo tipo di ospite chiamato 'Adulto'. Lascia tutte le impostazioni ai loro valori predefiniti. Quindi, se ad esempio vuoi dare ai bambini sotto i 12 anni uno sconto del 50% creeresti un nuovo tipo di ospite e chiamalo \"Bambini sotto i 12\" Imposta l'opzione \"Aggiungi varianza?\" su - (negativo) e imposta la \"Varianza\" su 50. Ciò significa quando si aggiungono bambini ad una prenotazione viene addebitato il 50% del costo della camera. ");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Imposta prezzi manualmente");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Imposta il numero minimo di notti manualmente");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Imposta notti minime");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Imposta <em>prezzo per notte</em> per giorno della settimana");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Imposta <em>prezzo per notte</em> per intervallo di date");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Imposta <em>notti minime</em> per intervallo di date");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "I selettori di date e l'input della tariffa ti consentono di impostare un prezzo per un dato intervallo di date. Scegli una data di inizio e di fine, inserisci un prezzo e fai clic sul pulsante Imposta prezzo per notte.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "I selettori di date e l'inserimento delle notti minime consentono di impostare un valore per le notti minime per un determinato intervallo di date. Scegli una data di inizio e di fine, inserisci un numero per le notti minime e fai clic su 'Imposta notti minime'.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Usa questo menu a discesa per passare dall'impostazione dei prezzi per le singole date all'impostazione dei pernottamenti minimi per le singole date. Puoi utilizzare il selettore <em>per giorno della settimana</em>, <em>per data range</em> o imposta i prezzi/notti minimi modificando manualmente le date.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Utilizza questo menu a discesa per passare dall'impostazione dei prezzi per le singole date all'impostazione dei pernottamenti minimi per le singole date. Puoi utilizzare il selettore <em>per intervallo di date</em> o impostare i prezzi/notti minime per modificando manualmente le date.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Imposta prezzi o notti minime");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Imposta <em>notti minime</em> per giorno della settimana");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "I campi del giorno della settimana ti consentono di impostare un numero minimo di notti per un determinato giorno della settimana, una volta che fai clic sul pulsante del giorno della settimana, tutti i giorni della settimana verranno impostati su quell'impostazione di notti minime. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Imposta manualmente prezzi/minimo notti");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Imposta prezzi");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Imposta notti minime");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Per notte");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Min notti");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Massimo notti");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Qui puoi creare le tue tariffe, che sono associate alle tipologie di camere che hai nella tua proprietà. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Opzioni più comunemente usate");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Istruzioni");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Se vuoi aggiungere prezzi diversi per diversi numeri di ospiti, <em>puoi creare più di diverse tariffe per ogni tipo di camera</em> e avere valori minimi/massimi per gli ospiti in quelle tariffe. ");

	jr_define('_JOMRES_MICROMANAGE_INFO', "Assegna un nome alla tariffa, definisci il numero massimo di notti e il numero minimo e massimo di ospiti richiesti nel modulo di prenotazione prima che la tariffa venga offerta.<br/><br/> Usa il pannello di selezione della data per aggiungere i prezzi e le impostazioni delle notti minime a un intervallo di date o modificare direttamente gli input. Se non desideri che la tariffa venga offerta in determinate date, lascia il prezzo impostato su 0 (zero) su quelle date. <br/><br/> Puoi avere notti minime diverse in date diverse, quindi se desideri prenotazioni più lunghe durante le settimane di festival/conferenze, puoi impostare le notti minime in modo che siano più alte solo in quei periodi.<br/ ><br/>Se addebiti per persona per persona (PPPN) puoi abilitare tale impostazione in Impostazioni > Configurazione struttura > Tariffe e valuta.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Opzioni extra");
jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Queste sono opzioni aggiuntive che non sono così comunemente usate, ma comunque disponibili per te. <br/><strong>Ignora PPPN</strong> Significa Ignora per persona per notte. Puoi avere diverse tariffe differenti per lo stesso tipo di camera, ad esempio uno dei quali addebita a persona per notte e uno no.<br/><strong>Consenti weekend</strong> L'opzione Consenti weekend ti dà la possibilità di fare una tariffa che è solo disponibile durante i giorni feriali, ad esempio se desideri una tariffa speciale per i viaggiatori d'affari, in tal caso imposteresti l'opzione su No e le notti minime su 1 e le notti massime, al massimo, 5. <br/><strong>Fine settimana solo</strong> L'opzione Solo fine settimana è l'opposto dell'opzione Consenti fine settimana. I giorni che consideri giorni del fine settimana possono essere configurati nelle impostazioni di Configurazione della proprietà. Questo ti dà la possibilità di definire una tariffa solo per il fine settimana che potresti voler offerta per eventi speciali.<br/><strong>Check-in Giorno della settimana </strong> Questa opzione ti dà la possibilità di forzare il check-in solo in determinati giorni della settimana e viene utilizzata al meglio in combinazione con la configurazione della struttura > scheda Prenotazioni > opzioni di periodi fissi. La maggior parte degli utenti vorrà lasciare questa opzione impostata su Tutti.<br/>Le ultime due opzioni, <strong>Mini sale già selezionate</strong> e <strong>Massimo sale già selezionate</strong> sono molto specializzate e utile agli immobili con tariffe estremamente complicate. <em>Se non hai un'esigenza specifica, dovresti lasciare queste opzioni da sole.</em> Usale se vuoi che questa tariffa sia offerta solo quando l'ospite ha già selezionato N numero di camere nel modulo di prenotazione, quindi ad esempio potresti avere una tariffa di base in cui tali opzioni sono lasciate al valore predefinito e una seconda tariffa in cui l'opzione di camere minime già selezionate è impostata su 1, quindi questa seconda tariffa verrà offerta nel modulo di prenotazione una volta selezionata una camera.");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Puoi creare più tariffe per lo stesso tipo di camera, così puoi creare una tariffa per i giorni min/max di 1 - 7 e una seconda tariffa dove i giorni minimi sono 7, i giorni massimi 14 e così via. Questo ti permette di creare schemi tariffari semplici o complicati a seconda delle tue esigenze. Ti permette anche di creare più tariffe con condizioni diverse, così puoi avere una seconda serie di tariffe dove il prezzo è più basso per Bed & Breakfast, e un'altra serie di tariffe più costose per pernottamento, colazione e cena.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Imposta solo i giorni di selezione della data");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Categorie di proprietà');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Modifica categoria proprietà');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Grazie per aver installato Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "La gestione delle proprietà viene eseguita nelle pagine pubbliche, non nell'area amministratore.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Se non hai familiarità con Jomres visita la sezione Aiuto > Pagina Iniziare.");

jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Unisciti al sindacato Jomres");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Una volta che hai configurato il tuo sito e sei pronto per iniziare a ricevere visitatori, unisciti al sindacato Jomres.net e fai in modo che le tue proprietà siano elencate su altri siti Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Devi avere almeno una camera di una delle seguenti tipologie prima di poter creare una tariffa:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Vai su Impostazioni > Stanze e crea prima una stanza, una volta fatto sarai in grado di creare una tariffa per quel tipo di stanza.");

jr_define('JOMRES_PLATFORM', "Piattaforma Jomres");


jr_define('JOMRES_PLATFORM_CONNECTED', "Connesso");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Impostalo su Sì se hai già connesso il tuo account Stripe alla piattaforma Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Numero di conto Stripe Live");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Questo è il tuo ID account Stripe che può essere trovato nella tua Dashboard Stripe in Impostazioni > Informazioni account e assomiglia a acct_xxxxxxxxx Utilizzerai questo campo se disponi di più installazioni Jomres e desideri utilizzare lo stesso account tutti i siti e ti sei già connesso a noi. Se non ti sei connesso alla Piattaforma Jomres, non è sufficiente inserire qui i tuoi dati. Visita invece l'opzione di menu Connettiti nella barra degli strumenti, nella sezione Aiuto. Se vuoi per testare i pagamenti, nella scheda Debug di Configurazione sito imposta il tuo sito da Produzione a Sviluppo.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Chiave segreta live Stripe");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Vai a Sviluppatori > Chiavi API nella tua Dashboard Stripe per trovare le tue chiavi segrete. Queste vengono utilizzate dal sistema per verificare che i dati della prenotazione restituiti dal modulo di pagamento siano validi e che i depositi siano stati pagati prima di salvare la prenotazione .');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Chiave segreta dello stripe test");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', ' ');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Modalità tariffaria standard');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Dormi');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Quante persone può ospitare questa struttura?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Il numero di ospiti nel tuo prezzo giornaliero');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Prezzo extra adulti ');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Bambini');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per persona per notte?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'Modificatore 7 giorni');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Sconto sulla tariffa giornaliera se la prenotazione è di 7 giorni o più. Lascia questo valore a zero se non vuoi applicare lo sconto.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'Modificatore 30 giorni');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Sconto sulla tariffa giornaliera se la prenotazione è di 30 giorni o più. Lascia questo valore a zero se non vuoi applicare lo sconto.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adulti');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Prezzo basato su 2 adulti');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Prenotazione scontata da ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'a');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'perché la prenotazione è superiore a 7 giorni.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'perché la prenotazione è superiore a 30 giorni.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Tasse comunali');
jr_define('JOMRES_CITY_TAX_VALUE', 'Valore tassa di soggiorno');
jr_define('JOMRES_CITY_TAX_METHOD', 'Metodo di calcolo delle tasse');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Tariffa unica');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per notte');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per ospite');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per ospite per notte');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Percentuale del valore della prenotazione');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Spese di pulizia');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Costo pulizia');


jr_define('JOMRES_COMPATABILITY_MODE', 'Force modalità configurazione proprietà Compatibilità?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "La modalità di configurazione della proprietà di compatibilità impone diverse cose. Nelle versioni precedenti di Jomres, i gestori di proprietà potevano scegliere quale modalità di modifica delle tariffe utilizzare e una varietà di altre impostazioni (alcune delle quali potrebbero sembrare confuse) potrebbero avere L'abilitazione della configurazione di compatibilità obbliga tutte le nuove proprietà a utilizzare solo la modalità di modifica delle tariffe Standard, che modella la funzionalità di configurazione della proprietà di booking.com rispetto a prezzi, prezzi per bambini, ecc. .0, questa opzione dovrebbe essere impostata su Sì, ma per le installazioni precedenti spetta a te decidere se le nuove proprietà devono essere automaticamente impostate sulla modalità di compatibilità quando vengono create.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Accettate bambini sotto i 18 anni?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Imposta questa opzione su Sì se permetti i bambini. Se sì, nel menu Impostazioni avrai un'opzione chiamata Criteri bambini dove puoi modificare le impostazioni relative ai bambini.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Politiche sui minori');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'A che età sono ammessi i bambini?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per bambino, per notte');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per bambino, per soggiorno');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Tariffe bambini');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nuova tariffa bambino');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Modifica tariffa bambini');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Crea qui le tue tariffe per bambini gratis oa pagamento. Le tariffe verranno applicate solo quando avrai creato i livelli di occupazione per i tipi di camera.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Età da');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Età fino a');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'a notte oa soggiorno?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Tariffa');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Se zero o non impostato, i bambini di questa fascia di età saranno liberi.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Età al momento del check-in');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Età');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Livelli di occupazione');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Massimo adulti');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Massimo bambini');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Occupazione massima');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Modifica livello di occupazione per: ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Modifica i livelli di occupazione per questa tipologia di camera. Non includere gli ospiti che dormono sulle culle (questi vengono aggiunti creando un Extra) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Per ogni adulto in più, quanto devono pagare?');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Non hai ancora configurato le tariffe per bambini.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Imposta ora la/e tariffa/e bambino/i');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Hai configurato la tua proprietà per consentire i bambini ma non hai ancora impostato alcun livello di occupazione per i bambini.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Imposta livelli di occupazione');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Ogni volta che modifichi una camera o il tuo tipo di struttura dovresti controllare e aggiornare i livelli di occupazione per la tua struttura/stanze poiché questi influiscono sul numero di ospiti che possono essere accettati nel modulo di prenotazione.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adulti');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Bambini');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Livello opzioni amministratore');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres ha molti menu e opzioni di configurazione che puoi usare quando configuri il tuo sito. La stragrande maggioranza di loro non dovrai mai cambiarli, quindi sono nascosti per impostazione predefinita. Puoi scegliere di mostrare queste opzioni impostando il livello Opzioni amministratore. Il livello base mostra esattamente ciò di cui hai bisogno quando configuri un sito per la prima volta. Il livello comune mostra le opzioni che vengono modificate più comunemente e Tutto mostra tutte le possibili impostazioni e opzioni di menu nell\'area amministratore. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Base');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Comune');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Tutto');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Possiamo raccogliere informazioni su come usi Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Vorremmo raccogliere informazioni su come usi Jomres. Nessuna informazione di identificazione personale verrà memorizzata, l\'utilizzo sarà reso anonimo e utilizzato solo per aiutarci a capire come le persone usano Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Sì, va bene ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'No, non sono d\'accordo ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Prenderai prenotazioni per più di una proprietà?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres può essere utilizzato per siti singoli o multiproprietà. Se accetterai prenotazioni per una sola proprietà, molte opzioni saranno ridondanti e potenzialmente confuse. Puoi modificare questa impostazione in seguito in Impostazioni > Sito Configurazione > scheda Funzionalità portale.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Solo una proprietà ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' Elencherò più di una proprietà ');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Quale versione del framework Bootstrap supporta il tuo template/tema?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Ogni versione del framework Bootstrap richiede markup html leggermente diverso. Jomres ha tre set di modelli compatibili con Bootstrap, uno per ogni versione Bootstrap. Devi assicurarti di configurarlo per utilizzare il set di modelli appropriato. Se non vengono quindi visualizzati output come layout, modali e menu non funzioneranno correttamente.Se decidi di utilizzare un modello/tema in un secondo momento con una versione Bootstrap diversa, puoi modificare il set di modelli Bootstrap che Jomres dovrebbe utilizzare in Admin> Jomres> Impostazioni > Scheda Misc. <br/><br/>Joomla 3 è distribuito con Bootstrap 2 per impostazione predefinita, Joomla 4 utilizzerà Bootstrap 5. Il template Jomres Leohtian (Joomla) e il tema (Wordpress) utilizzano Bootstrap 3. Diversi modelli/temi potrebbero essere distribuiti con i propri file Bootstrap, quindi in caso di dubbi, contattare lo sviluppatore del modello/tema.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Rimuovere i decimali dai prezzi di output?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Applica gruppo per correzione?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Alcune installazioni mysql potrebbero avere un problema con le query Jomres nella pagina Proprietà elenco, Elenco guest e Elenco fatture. Se quelle pagine dicono che stanno mostrando risultati X di Y ma non appare nulla nell\'elenco, allora imposta questa opzione su Sì può risolvere il problema.Non lo farà se sei su un hosting condiviso e il servizio di hosting non consente al tuo utente mysql di inviare il comando "SET GLOBAL sql_mode=". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Questa è una proprietà del canale, non può essere amministrata localmente, visita la pagina del framework di gestione del canale per trovare il link di amministrazione remota della proprietà');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Nessun Bootstrap nel tema");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Collegamenti ai social media');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Inserisci qui i nomi dei tuoi account di social media, ad esempio "jomres", non l\'intero URL');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Elenco separato da virgole delle lingue parlate dalla tua organizzazione');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url al logo della tua organizzazione');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres aggiornato');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'C\'è una nuova versione di Jomres disponibile. Devi aggiornare prima di poter continuare a usare Jomres poiché gli aggiornamenti migliorano la funzionalità e assicurano che la tua installazione rimanga sicura.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Aggiorna Jomres adesso');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Aggiornamenti plugin');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Ci sono nuove versioni di plugin disponibili nel gestore plugin. Devi aggiornare tutti i plugin prima di poter continuare a usare Jomres poiché gli aggiornamenti migliorano la funzionalità e assicurano che la tua installazione rimanga sicura.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Plugin da aggiornare');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Se la tua licenza non è più valida, puoi ottenere una nuova chiave di licenza dal nostro sito.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Aggiorna plugin');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Ottieni nuova chiave');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Salva nuova chiave');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Immagini di tipo proprietà");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Hai bisogno di aiuto per prenotare?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Chiama il nostro servizio clienti al numero qui sotto per parlare con uno dei nostri rappresentanti che ti aiuterà con tutte le tue esigenze di vacanza.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Perché prenotare con noi?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Offriamo le migliori tariffe di prenotazione");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Abbiamo le proprietà con il miglior prezzo attualmente sul mercato.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Nessun costo di prenotazione. Risparmia denaro!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Ottima selezione di proprietà");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " proprietà");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " recensioni degli ospiti");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Siamo sempre qui");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Chiamaci o inviaci un'e-mail, in qualsiasi momento");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Ottieni supporto 24 ore prima, durante e dopo il tuo viaggio");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Social media");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Trovaci sui social media");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Eccezionale");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Eccezionale");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Favoloso");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Superbo");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastico");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Molto bene");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Buono");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Nuovo elenco");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Scontato");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Dove vuoi andare?');
	jr_define('DATA_SOURCES_TITLE', "Aggiorna sorgenti dati");
	jr_define('DATA_SOURCES_TITLE_INFO', "Sorgenti dati aggiornate. Le origini dati vengono utilizzate dai campi di inserimento del completamento automatico nel widget di ricerca e di solito vengono aggiornate automaticamente, tuttavia questa pagina forza l'aggiornamento manuale dei dati, se necessario.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Per inviare una richiesta di token, invia la richiesta a questo URL");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Lo script delle proprietà della vista principale");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid della proprietà della proprietà da visualizzare");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Il template predefinito è property_details.html, con questo argomento puoi definire un diverso template dei dettagli della proprietà da mostrare.");

	jr_define('JOMRES_UPDATES_TITLE', 'Aggiornamenti Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Questa pagina può scaricare e installare la versione più recente di Jomres per te. Utilizza le proprie funzionalità e non quella del CMS host quindi se si verifica un problema durante l'aggiornamento del CMS host puoi usare questa pagina per forzare una reinstallazione della versione più recente di Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'I gestori di proprietà possono utilizzare la modalità di modifica nel frontend per personalizzare le stringhe per ogni proprietà, tuttavia questo può funzionare solo se l\'impostazione Permalink di WordPress è impostata su Plain (http://www.domain.com/?p=123). Una volta fatto ciò, gli utenti del frontend potranno personalizzare le stringhe, come i nomi delle stanze e altre etichette, che sono specifiche delle proprietà univoche. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Modalità di modifica delle etichette');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Questa funzione è usata per cambiare le etichette degli oggetti, di solito in lingue diverse.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'La modalità di modifica ti consente di rinominare le etichette che sono univoche per le singole proprietà. Quando usi la modalità di modifica per rinominare un\'etichetta, la modifica apparirà solo su quell\'elenco di proprietà. Ad esempio, su una proprietà che potresti desiderare utilizzare la parola "Prezzi" e in un\'altra la parola "Tariffe". Non tutte le etichette possono essere modificate, ad esempio i nomi dei tipi di camera sono etichette a livello di sito, quindi non possono essere modificate, ma di solito tutto ciò che è unico per una singola proprietà può essere cambiato.');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Se il sito supporta più lingue, mentre usi una lingua puoi creare un elemento unico per una singola proprietà. Quando poi cambi la tua lingua attiva, puoi usare la modalità di modifica per rinominare quell\'etichetta, inserendo una traduzione adeguata nella lingua corrente. Puoi continuare a cambiare la lingua attiva per inserire una traduzione adatta per quell\'etichetta per ciascuna lingua supportata dal sito.');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Cambia modalità modifica etichette');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'In questa schermata vediamo l\'interruttore della modalità di modifica. La modalità di modifica è disattivata e le etichette appaiono normalmente: ');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Modalità di modifica delle etichette abilitata');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'In questa schermata vediamo che, mentre sei in modalità Modifica, le etichette che puoi rinominare sono evidenziate:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Seleziona l\'elemento da modificare');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Quando viene selezionata un\'etichetta appare un popup:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Cambia l\'etichetta');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Usa il piccolo modulo per cambiare l\'etichetta. Clicca il segno di spunta per finire, o clicca la X per annullare la modifica:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Etichetta cambiata');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Una volta salvata la modifica, l\'etichetta viene aggiornata nella pagina. Ora puoi disabilitare la modalità di modifica:');
	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Traduzioni');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'In questa pagina puoi tradurre le etichette da una lingua all\'altra. Quando visiti la pagina vedrai le stringhe che hai già creato e il loro valore in qualunque lingua tu stia attualmente usando. In alto imposta il lingua di destinazione, quindi per le etichette che desideri tradurre, fai clic sull\'etichetta e un popup ti consentirà di inserire la tua nuova traduzione. Per righe di testo più lunghe puoi incollare il testo da un\'altra fonte. Ricorda che qualsiasi HTML verrà eliminato .<br/>
Puoi lasciare la lingua di destinazione impostata sulla tua lingua corrente e utilizzare questa pagina per rinominare gli elementi qui, invece di visitare le loro singole pagine.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Lingua di destinazione');

	jr_define('API_CLIENTS_INFO', 'I client API sono coppie di chiavi client/segrete che consentono ai sistemi remoti di utilizzare le funzioni API per le quali hai concesso loro i permessi per l\'uso. In questa pagina puoi creare tutte le coppie di chiavi client/segrete di cui hai bisogno, ciascuna con qualsiasi combinazione di autorizzazioni di cui hai bisogno.');
	jr_define('CLIENT_TOKEN', 'Token di accesso');
	jr_define('CLIENT_TOKEN_INFO', "I token di accesso possono essere richiesti utilizzando l'ID client e il segreto. Alcuni client potrebbero avere già creato un token di accesso, nel qual caso puoi utilizzare questo token di accesso. Se ritieni che il token possa essere stato compromesso, o vuoi semplicemente cambiarlo, puoi far scadere i token del client. Tutti i token associati alla coppia client/segreto saranno scaduti.");
	jr_define('DELETE_TOKEN', 'Token scaduti');

	jr_define('JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Scegli la tua valuta");
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Scegli la tua lingua" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Registrati" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Accedi");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Elenca la tua proprietà");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Devi prima registrarti e accedere");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Mostra filtri");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Nascondi filtri");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Il testo mostrato sulle pagine è memorizzato in file di lingua. Il sistema Jomres di mostrare le stringhe di lingua sulla pagina significa che non è necessario modificare direttamente questi file di lingua. Invece, puoi modificare quelle stringhe su questo pagina facendo clic sul testo evidenziato e inserendo il nuovo testo che si desidera visualizzare nel modulo di input che si apre. Quando si fa clic sul segno di spunta, la modifica viene salvata nel database. Ciò significa che tutte le modifiche vengono memorizzate e non vengono sovrascritti quando aggiorni Jomres. Se vuoi cambiare il testo per lingue diverse usa il menu a tendina di selezione della lingua in alto a destra, per cambiare la lingua corrente. Le stringhe di testo a volte vengono ripetute in posti diversi nei file di lingua perché sono usate in contesti quindi non dimenticare di utilizzare la funzione di ricerca del browser per assicurarti di aver modificato la stringa corretta. ");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Tutta la gestione delle proprietà viene eseguita nel frontend del tuo sito. Al momento non sei loggato come gestore della proprietà, quindi effettua prima il login e poi sarai in grado di amministrare le tue proprietà.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Quando Jomres viene installato per la prima volta, creerà un Super Property Manager per l'utente amministratore e aggiungerà una nuova opzione al menu principale chiamata Prenotazioni. Non eliminare questa voce di menu. Accedi utilizzando il pulsante fornito e visita la pagina Prenotazioni per iniziare ad amministrare le proprietà.");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'In questa pagina puoi configurare i gateway di pagamento attraverso i quali desideri ricevere i pagamenti di deposito. Avrai bisogno di un account sul gateway di pagamento. La pagina delle impostazioni ti fornirà le istruzioni su come configurare il gateway. Se il gateway ha una modalità test e se la modalità test è abilitata, tu come gestore della struttura potrai utilizzare il gateway di pagamento per testare la tua configurazione Quando la modalità test è disabilitata solo gli utenti non gestori vedranno i gateway di pagamento durante il processo di prenotazione .');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Modalità test");


	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "La modalità sviluppo è abilitata, quindi se usi questa funzione aggiornerai l'installazione di Jomres al ramo Nightly. Questa è la versione più recente di Jomres e potrebbe essere stabile o meno. Se lo fai non vuoi aggiornare a Nightly, visita Admin > Jomres > Settings > Site Configuration > Debugging e imposta l'opzione Production/Development su Production.");

	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN', "Includere i bambini nei controlli del livello di occupazione?");
	jr_define('JOMRES_POLICY_OCCUPANCY_LEVELS_INCLUDE_CHILDREN_DESC_MRP', "Quando gli ospiti effettuano prenotazioni, le camere hanno un numero massimo di ospiti che possono ospitare. Se il numero totale di ospiti supera il numero di ospiti che le camere selezionate possono ospitare, allora il modulo di prenotazione dirà loro che hanno bisogno di selezionare più camere.
 
  Se imposti questa opzione su Sì, il numero di bambini verrà incluso nel controllo del numero totale di ospiti. Se imposti questa opzione su No, il numero di bambini non sarà incluso nel controllo del numero totale di ospiti. Ciò significa che se imposti questa opzione su No, un gruppo di 4 persone, ad esempio 2 adulti e 2 bambini, potrà prenotare una camera doppia che può ospitare 2 adulti. ");


	jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_SRP', 'Seleziona Sì se vuoi addebitare per persona per notte.');

	jr_define('_JRPORTAL_FEATUREDLISTINGS_WORD_FEATURED',"In primo piano");

jr_define('_JOMRES_PROPERTYTYPE_FLAG_HIRE', 'Articolo a Noleggio');

jr_define('SHORTCODE_INFO_JOMRES_V_JOMRES_SCRIPT',"Gli shortcode devono essere racchiusi tra &#123;&#125; in Joomla o [] in Wordpress (BRACKETS). Ci sono tre modi in cui le pagine generate dagli shortcode possono essere visualizzate. Il primo è aggiungi uno shortcode a un articolo/pagina/modulo nel formato BRACKETjomres shortcode argumentsBRACKET. Il secondo è all'interno dei file template di Jomres, dove dovresti inserire BRACKETjomres_script shortcode argumentsBRACKET. L'ultimo modo è tramite l'url, quindi ad esempio in Joomla dovresti inserire www.domain.com/index.php?option=com_jomres&task=SHORTCODE&ARGUMENTS=ARGUMENTS. ");