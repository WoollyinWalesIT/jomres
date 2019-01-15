<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Grazie per la tua prenotazione, ti auguriamo un piacevole soggiorno. La  prenotazione ti sarà confermata tramite mail al più presto possibile.</center>');
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
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Sembra che sei stato scollegato per inattivit&agrave;.Perfavore, esegui nuovamente il login.</b> Please log in and try again.');
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
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Attenzione: Cambiare spesso il metodo di gestione tariffe potrebbe causare una perdita di dati. Vedi la nota sotto a riguardo</b>.
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
MicroGestione -> Normale. Tutte le corrispondenze tra le tariffe vengono rimosse.<br/>");
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
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Trova una google maps API key su <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Una volta inserito il tuo map key qui, il sistema mostrera la mappa nella scheda della tua struttura.');
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
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Se non hai accesso ai cron jobs, Imposta questo come Minicomponente, altrimenti crea un cron job e fallo girare<br /> <i>curl -s http://'.JOMRES_SITEPAGE_URL_ADMIN.'&task=cronjobs&no_html=1> /dev/null</i> ');
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
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Nota, Stai usando Editing Mode con il Global Editing mode attivato. Va bene se si conosce cosa significa Global Editing, comunque se non conosci a fondo la cosa potresti causare problemi al sistema. Se non sei sicuro se usare Jomres in questo modo, vai su <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> per pi&ugrave; informazioni sull&acute;argomento.');
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
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.");
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
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.");
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
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Utilizzare questa opzione per modificare il sito\'s contesto linguistico.Questa funzione consente Jomres di utilizzare etichette che sono appropriati per la vostra attenzione corrente, quindi se il vostro obiettivo è come una società di intermediazione Yacht, quindi modificando il contesto permetterà Jomres per presentare le etichette da un file di lingua diversa.Ad esempio, se si imposta il contesto di"Yacht Brokerage" allora Jomres in primo luogo trovare il linguaggio corrente, quindi cercare il /'.JOMRES_ROOT_DIRECTORY.'/lingue directory per una sottodirectory chiamata"yachtbrokerage". Se il file esiste per la lingua corrente quando verrà utilizzato il file. Se no, allora Jomres cercherà un file di lingua inglese nella stessa directory. Se questo non può essere trovato, Jomres utilizzerà il file della lingua per la lingua correntemente selezionata nella/'.JOMRES_ROOT_DIRECTORY.'/directory lingue.');
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Per impostare automaticamente il codice valuta discesa Jomres è in grado di utilizzare un servizio gratuito chiamato IPinfoDB per rilevare il paeses visitatore , tuttavia è necessario registrarsi per una chiave API a <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
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
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Benvenuti a Jomres, ci auguriamo che con il sistema di prenotazione preferito Joomla. Se si desidera acquistare una licenza Jomres Starter, Business o Enterprise, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
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
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Lasciare vuota questa opzione per disattivarlo. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
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
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
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
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Errore');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Messaggio');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Mostra lin a Jomres nel footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nome: ');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
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
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Most properties in Jomres have a rental management process. Hotels/B&Bs/Pensions rent out individual rooms, and cottages/villas/apartments rent out the entire property. This is invisible to the property manager, but for them to be able to create tariffs for their property you must first add room types that are appropriate for the property type.
For example, A hotel property type would normally need several room types ( double rooms, single rooms and twins ) whereas a villa can only have one room type, e.g. 2 Bedrooms, 5 bedrooms.
It is possible to create room types for properties like Tours. This allows customers to search for properties like tours only, but the Property manager will not create tariffs for this property type, so the Management Process is not relevant to them.
');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
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
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

