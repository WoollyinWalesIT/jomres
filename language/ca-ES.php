<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Reserves ràpides');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Mostrar perfils');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Deixat en blanc intencionadament');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuració general');
jr_define('_JOMRES_COM_MR_BACK', 'Endarrere');
jr_define('_JOMRES_COM_MR_YES', 'Sí');
jr_define('_JOMRES_COM_MR_NO', 'No');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nou');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nova propietat');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Hoste nou');
jr_define('_JOMRES_COM_MR_SAVE', 'Guardar');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nom');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', "Data d'arribada");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Data de sortida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Blanc');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', "Nom de l'usuari");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', "Nivell d'accés");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Usuari modificat');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Totes les reserves');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editar reserves: ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Arribades/Sortides');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Hoste');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Habitació');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pagament');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nom');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Cognom');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Requisits especials');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Observi si us plau que alguns requisits especials poden incurrir en recàrrecs.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Canceli la reserva');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'El número o nom de la casa');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Carrer');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Codi postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telèfon');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Número mòvil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Direcció electrònica');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', "No pot cancelar aquesta reserva, perquè l'hoste ha confirmat l'entrada");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Dipòsit no pagat');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmar cancelació');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Reserva cancelada');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dies per arribar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipus de reserva');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Negre');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepció');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', "Nom de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', "Número de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Pis');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Accés denegat');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Màxim de clients');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', "Tipus d'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', "Descripció de l'habitació");
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', "Llista de característiques de l'habitación");
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Dipòsit pagat');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introduïr dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total a pagar');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Ref. de Dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Número de Reserva');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Dipòsit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Dipòsit salvat');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Habitacions disponibles');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Propietat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', "Tipus d'habitació");
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', "Editar detalls d'hoste");
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nom');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Cognom');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Casa');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Carrer');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ciutat');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Codi Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telèfon');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mòvil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleccioni una habitació');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', "Dies d'estancia");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Vegi habitacions i configuració de les característiques');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Habitació');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Hb característiques');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Hb tipus');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Propietats');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Prop. característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Habitació');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipus');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Número');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Pis');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Màx. de persones');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', "Editar l'article");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Hb característiques');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descripció de la característica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Característica del lloc afegida');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Característica del lloc actualitzada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Hb tipus');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tipus abreviatura del lloc');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', "Descripció de tipus de l'habitació");
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipus de habitació afegida');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Carrer');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ciutat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Regió');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'País');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Codi Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telf.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Característiques');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Propietat actualitzada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Característica de la propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Característica de la propietat abrev.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descripció completa de característica de la propietat ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Característica de la propietat actualitzada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Títol de tarifa');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Vàlid de');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Vàlid fins a');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa per nit');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Dies mínims');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Dies màxims');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Persones mínimes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Persones màximes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', "Tipus de l'Hb");
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorar PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permetre caps de setmana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Copiar article idèntic');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa borrada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editar la tarifa');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Reserva guardada');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar una habitació');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', "Entrada d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', "Sortida d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Llistar les reserves');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'I N I C I');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', "Administració d'hoste");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administració de propietat');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verifiqui la disponibilitat');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Nom');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Cognom');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Número de la Casa');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Carrer');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciutat');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Codi Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telèfon');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mòvil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'No hi ha habitacions disponibles capaces de satisfer els paràmetres especificats');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Gràcies per fer la seva reserva amb nosaltres. Esperem que vostè disfruti de la seva permanència.<br><br> <b>Si us plau, noti que això és només una reserva preliminar, i no serà confirmada fins que vosté rebi el seu email de confirmació per part nostra.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', "Entrada d'hoste ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', "Entrada d'hoste");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', "Sortida d'hoste");
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suplements');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifes & Moneda');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Fitxers pujats');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Només suplements per persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Recordi marcar "Sí" si vosté vol carregar només suplements de persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Només carregar suplement de persona');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'El Dipòsit requereix percentatge?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'El dipòsit és un percentatge de la suma de la reserva? Si no, el dipòsit aplicat és un valor fix');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'El dipòsit va requerir el valor');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Per persona, per nit');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Esculli "Sí" si vosté vol càrrecs per persona-per-nit. Si no, llavors els costos es calcularan en base a habitació-per-nit');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Mida de la carpeta');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Màx. Mida de carpeta en Kilobytes');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Reservat');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalls de la reserva ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Se li recorda que una reserva és un contracte legalment obligatori, si per alguna raó vostè ha de cancel·lar o acurtar la seva reserva llavors serà encara responsable de pagar la quantitat completa.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', "<i>La cancel·lació i l'acortament es carreguen al seu compte</i> Si vostè cancel·la les seves vacances, la cancelació ha de ser confirmada per escrit. Els càrrecs pr cancel·lació són:");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', "La data de l'arribada a 14 dies");
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Imprimeixi la carta de confirmació');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Impressió de la factura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Número de nits: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cost per nit: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Suma total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Imprimir factura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Afegeixi el servei per facturar');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descripció del servei');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Valor del Servei');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Altres articles facturats');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Article afegit a la factura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Pujar imatge ');
jr_define('_JOMRES_FILE_UPLOAD', 'Arxiu pujat');
jr_define('_JOMRES_COM_A_ODDS', 'Probabilitats i termes');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Cridar llista de Minicomponents');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Marqui aquesta opció a Si per veure un log dels minicomponents utilitzats al final de la fulla després de que Jomres completi la seva execució. És útil si estàs intentant identificar que Minicomponents estan portant a cap certs serveis.');
jr_define('_JOMRES_FILE_DELETE', 'Borri aquesta imatge');
jr_define('_JOMRES_FILE_DELETED', "El fitxer s'ha borrat");
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Borrar');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', "Incapaç d'eliminar aquesta habitació, ja hi ha reservs. Cancel·li aquestes reserves i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_ROOM_DELETED', "Carcaterística d'habitació eliminada");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', "Borri la característica de l'habitació");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', "Impossible eliminar aquesta característica de l'habitació, està assignada o ocupada. Elimini la característica d'aquestes habitacions i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', "Característica de l'habitació borrada");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Borrar la característica de la propietat');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', "Impossible eliminar aquesta característica de la propietat, está assignada. Elimini la característica d'aquesta propietat i torni a intentar-ho.");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', "La característica de la propiedad s'ha borrat.");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', "Borri tipus de l'habitació");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', "Tipus d'habitació borrada");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Borri la propietat');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', "La propietat s'ha borrat");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Vosté no té els permisos per a borrar aquesta propietat.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', "Amplada d'imatge gran");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Fagi click per a veure el mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descripció de la propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', "Horari d'entrada");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', "Activitats de l'àrea");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Direccions');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeroports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Altres transports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Polítiques i reclamacions');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Direcció');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Visitants poden reservar online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Posi això a "SI" per assegurar que els visitants puguin reservar una habitació online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Reserves per a un període fix');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "Si posa això en 'SI' les reserves seran per un període fix. Si es posa en 'NO', llavors assegúris que el 'día predefinit d'arribada' es va posar en 'SI' (si no vol forçar al client a arribar un día específic) en aquest cas no aconseguirá moltes entrades al calendari de disponibilitat");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Període de Reserves: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Reservar una Hb');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Màx. períodes, p.e. 3x7 períodes = 21 dies');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Es una habitació per a solters?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Reservar');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmar la reserva');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Dilluns');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Dimarts');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Dimecres');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Dijous');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Divendres');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Dissabte');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Diumenge');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Dl');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Dm');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Dc');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Dj');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Dv');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Db');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Dg');
jr_define('_JOMRES_COM_A_AVLCAL', 'calendari de disponibilitat.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'El color del tipus de lletra per a la data actual');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'El color del tipus de lletra per dies en el mes de desplegament');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'El color del tipus de lletra per dies no en el mes de desplegament');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Color de fons per dies quan la propietat/espai està disponible');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Color de fons per dies quan no es mostra mes');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Color de fons per dies ocupats');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', "Color de fons per a reservar provisionalment els espais (reserves per a un dipòsit que no s'ha près)");
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Color de fons per a dates endarrerides');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupat/no disponible');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponible per a reserves');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Reserves provisionals');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', "Dia predefinit d'arribada");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Només per als llocs que ofereixen les reserves fixes del període. Esculli el dia en que han de començar les arribades.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', "Dia fix d'arribada");
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', "Període de l'estància (dies)");
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Mostrar la disponibilitat?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Posi això a "Sí" per a mostrar els calendaris de disponibilitat');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilitat');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Click en una data lliure per a veure el formulari de reserves.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Reserves negres');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Noves Reserves negres ');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Borrar hoste');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Hoste borrat');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Incapaç de borrar aquest hoste ja que té reserves obertes. Cancel·li les reserves i provi un altre cop.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'No importa');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format de sortida del Calendari');
jr_define('_JOMRES_COM_CALENDARINPUT', "Format d'entrada del Calendari");
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', "Això permet canviar el format d'entrada de les dades");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Les reserves fixes del període permeten interrupcions curtes');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', "Longitud d'interrupció curta");
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicat');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Auditoría');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', "Usuari (Nom d'usuari)");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtre en la data');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Estat');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Arribada Pendent');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Arribades avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Resident actual');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Surt avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Sortida endarrerida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'No haarribat');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Habitació creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Habitació actualitzada');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Habitació borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', "Característica creada d'Hb");
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', "Característica actualitzada d'Hb");
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', "Característica borrada d'Hb");
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Propietat creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Propietat actualitzada');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Propietat borrada');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Configuració de propietat editada');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Propietats publicades');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa actualitzada');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Afegir càrrecs per serveis');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Hoste Entrada');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Dipòsit ingressat');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Hoste creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Hoste actualitzat');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Habitació reservada');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Extra creat');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Extra Actualitzat');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Extra Borrat');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra Extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Reserva negra introduïda.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Reserva negra borrada.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Descripció');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nom');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Preu');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra actualitzat');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editar article');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra borrat');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', "Administració d'extres");
jr_define('_JOMRES_COM_A_EXTRAS', 'Mostrar els extres en el moment de reservar?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', "Posi això a 'Sí' per a mostrar qualsevol extra que vostè desitgi oferir a l'hoste");
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extres opcionals.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', "Dia d'inici de Reserva negra");
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Serveis actuals resumits');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Administració de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Error al reservar aquestes habitacions, una o més de les habitacions que vostè ha escollit no estan lliures.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Habitacions incluïdes en Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No hi ha Reserva negra en la llista');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', "Número d'estrelles");
jr_define('_JOMRES_COM_A_RESET', 'Reposar');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Reserva cancel·lada');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Busqui aquí per a:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Símbol de moneda');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Codi de moneda');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Fagi click per a més informació');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '¿Limitar les reserves anticipades?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', "Posi això a 'Sí' si vostè vol limitar les reserves anticipades (utilitzar el pròxim camp per a posar el límit en termes de dies). Si vostè posa això a sí llavors si l'usuario intenta reservar més de n dies llavors la seva data d'arribada serà restaurada a la data d'avui");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dies de reserves anticipades estan limitats a:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Impost');
jr_define('_JOMRES_COM_A_ROOMTAX', "IVA de l'habitació");
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Impost fix ');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', "Percentatge d'impost");
jr_define('_JOMRES_COM_A_EUROTAX', 'Impost');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', "Percentatge d'impostos");
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Arxivar tots els registres');
jr_define('_JOMRES_FRONT_TARIFFS', 'Les nostres tarifes');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nom de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Descripció de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', "Tipus d'habitació");
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Vàlid desde');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Vàlid fins a');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Per persona per nit');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Per nit');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'No inclou caps de setmana');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Dies mínims');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Dies màxims');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Persones mínimes');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Persones màximes');
jr_define('_JOMRES_FRONT_PREVIEW', 'Inspecció previa');
jr_define('_JOMRES_COM_A_EDITINGMODEON', "Mode d'edició activat?");
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Text actualitzat.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', "Corregeixi l'idioma");
jr_define('_JOMRES_FRONT_PTYPE', 'Tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Llista de propietats');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editar tipus de propietats');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descripció de tipus de propietat');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tipus de propietat grabat');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipus de propietat borrats');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Recordi pagar');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ningún servei extra per a facturar');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Dipòsit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Quantitat completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Quantitat carregada en temps de la reserva');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', "Utilitzi aquesta opció per a decidir el que s'ha de carregar al reservar. Esculli el dipòsit si el dipòsit s'ha de carregar, o la quantitat completa si la quantitat completa s'ha de carregar.");
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Mesos del Cal. a mostrar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', "En la disponibilitat de les habitacions, quants mesos del calendari s'haurien de mostrar?");
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Pasarel·les');
jr_define('_JOMRES_COM_A_CANCEL', 'Cancelar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', "Esculli si us plau les habitacion(s) que vostè desitja tenir fora de servei, i les dates relevants. <br>Si una habitació no té una marca, no es pot incluir en la Reserva negra fins que totes les reserves estiguin completes/cancel·lades.<br/> Quan vostè hagi escollit les dates apropiades, fer click en el botó blau 'aplica' per a reexaminar la disponibilitat de l'habitació. ");
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Si us plau entrar un altre cop.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Raó');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Utilitzar pasarel·les de Pagaments en Línea?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Esculli si us plau el seu mètode de pagament.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Pasarel·les de Pagaments en Línea permès?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin modificat');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin insertat');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Veure la web de la propietat');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Link Extern');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Posi el link del seu website aquí.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Editar Tarjeta de crèdit');
jr_define('_JOMRES_COM_A_EDITICON', "Editar la mida de l'icona");
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diapositives');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Mostrar enllaç a Diapositives?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Mostrar diapositives en línea?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Imatge de la propietat');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Mostrar enllaç a Tarifes?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popups permesos?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Carregar les imatges en sèrie');
jr_define('_JOMRES_A_TABS_MISC', 'Miscel·lani');
jr_define('_JOMRES_A', 'Configuració de la pàgina');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Utilitzi les característiques globals de la propietat');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Esculli el plugin de la cerca que vostè desitgi utilitzar.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Ho sento, la seva cerca no ha trobat resultats. Modifiqui si us plau la seva cerca i provi un altre cop.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Segur que vostè desitja fer això?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Reservar una propietat');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Mostrar Tarifes?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Direcció');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Informació detallada');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Click per a habitacions i disponibilitats');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', "Mostrar informació de direcció a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', "Mostrar detalls de la propietat a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', "Mostrar habitacions i disponibilitats a sota d'aquest enllaç");
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifa simple');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Promitjos');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Seleccioni el model de tarifa a utilitzar');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Vostè té disponible dos mètodes de calcular les tarifes. Primer, el mètode de 'tarifa simple' el qual permet ofertar diferents tarifes a l'hoste i el càlcul per estada és el mateix per a tota la estancia completa. Això és útil quan volem oferir diferents tarifes per a una mateixa data. Esculli l'altre mètode, 'tarifa promig' si desitja ajustar els preus dependents de la data. El sistema trobarà totes les tarifes per a cada dia de reserva i retornarà el promig de tot el período desitjat");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrar data de sortida escollida');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Posar a SI si desitja mostrar el camp data de sortida. Només utilitzi si sap què fer, la data de sortida sempre s'activarà el dia després de l'arribada.");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Límit de descripció');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Això limita la quantidad de caràcters mostrats quan es descriu una propietat.');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', '¿Format date() utilitzat?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicar');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Despublicar');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Error en entrada de color de fons');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'País per defecte en formulari de reserva');
jr_define('_JOMRES_JAVASCRIPT_', 'Camps marcats amb * vermell són requerits.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Els usuaris poden registrar les seves propietats?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', "Posar a 'SI' si desitja que els usuaris estiguin habilitats per a registrar les seves propietats sense intervenció de l'administrador.");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Camps marcats amb * vermell són requerits.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Propietat creada');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', "Mostrar calendari desde l'inici de l'any?");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', "El calendari de disponibilitat es mostrarà desde l'inici de l'any actual.");
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Habitacions disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Tornar a detalls de la propietat');
jr_define('_JOMRES_FRONT_ROOMTYPES', "Tipus d'habitació");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Límit de cerca aleatoria');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Mostrar enllaç a Google Currency Conversion en el llistat de tarifes?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Convertir preu a :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Permetre als usuaris editar utilitzant editors HTML?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', "Utilitzi aquest formulari per a fer la seva reserva. Mogui el cursor sobre les imtges de 'i' per a més informació sobre la columna. Modifiqui els seus detalls del registre com la data d'arribada i sortida i el número d'hostes, llavors seleccioni la habitació que desitgi de la llista de disponibilitat. Premi sobre qualsevol habitació disponible per a agregar-la a la seva reserva. Quan ho hagi fet, vostè pot afegir qualsevol extra optatiu, també pot proporcionar els seus detalls de direcció. Quan el formulari estigui complet utilitzi el botó per a confirmar el seu registre.");
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', "Utilitzi aquest formulari per a fer la seva reserva. Mogui el cursor sobre les imatges de 'i' per a més informació sobre la columna. Modifiqui els seus detalls del registre com la data d'arribada i sortida i el número d'hostes, llavors seleccioni l'habitació que desitja de la llista de disponibilitat. Premi sobre Qualsevol habitació disponible per a afegir-la a la seva reserva. Quan ho hagi fet, vostè pot afegir qualsevol extra optatiu, també pot proporcionar els seus detalls de direcció. Quan el formulari estigui complet utilitzi el botó per a confirmar el seu registre.");
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Particularitats de reserva');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleccioni els detalls requerits de la seva reserva');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilitat ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', "Seleccioni l'habitació que desitja");
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Mirar si la propietat està disponible per aquesta data.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Extres opcionals');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleccioni quin extra opcional desitja incluïr en la reserva');
jr_define('_JOMRES_COM_PERDAY', 'Per nit');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Direcció');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Si us plau ingressi els detalls.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Habitacions disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Habitacions seleccionades');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', "<br>La possible data d'arribada més propera és: ");
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Per nit:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extres:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'impostos:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Descomptes:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total Final:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hostes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Click per a afegir aquesta habitació a la seva reserva');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click per a eliminar aquesta habitació de la seva reserva');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', "Tipus d'hostes");
jr_define('_JOMRES_VARIANCES_TYPE', 'Tipus');
jr_define('_JOMRES_VARIANCES_TYPE_TT', "Tipus d'hoste, Ex: Nens 5-10, o estudiants ");
jr_define('_JOMRES_VARIANCES_NOTES', 'Notes');
jr_define('_JOMRES_VARIANCES_NOTES_TT', "Notes del que vostè pot voler fer respecte a aquest tipus d'hoste");
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Màxim');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', "Màxim número d'aquest tipus d'hoste que pot ser seleccionat en la reserva");
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'És percentatge');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', "La figura calculada és un percentatge de la figura BASE calculada per a l'habitació. Si això es posa a 'NO' llavors la figura que vostè especifica simplement s'afegeix o substraeix del valor BASE de l'habitació.");
jr_define('_JOMRES_VARIANCES_POSNEG', 'Afegir variància?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', "La figura calculada s'afegeix o elimina de la figura BASE calculada per a l'habitació. Posi això a 'NO' si vostè vol això per a un descompte de la figura BASE.");
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Variància');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Quantitat a variar');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', "Modificat tipus d'ordre d'hoste");
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', "Eliminat tipus d'hoste");
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', "Creat tipus d'hoste");
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', "Actualitzat tipus d'hoste");
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', "Actualitzat tipus d'hoste");
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', "Mostrar enllaç a llistat d'habitacions en la pàgina de detalls de la propietat?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', "¿Mostrar <b>només</b> llistat de disponibilitat d'habitacions per calendari?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', "Canvïi això a 'Sí' per a desactivar desplegament del títol de propietat i detalls, per a que només el calendari de disponibilitat d'habitacions sigui vist en la secció de detalls de la propietat. Pensat per a usuaris que alquilen les habitacions de les propietats.");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Interval mínim de Arribada-Sortida');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', "L'interval mínim en la reserva entre les dates d'arribada i sortida.");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', "Llistat d'habitacions en la reserva mostra número d'habitació");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', "Llistat d'habitacions en la reserva mostra nom d'habitació");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', "Llistat d'habitacions en la reserva mostra llistat de tarifes");
jr_define('_JOMRES_ORDER', 'Ordre');
jr_define('_JOMRES_REQUIREDFIELDS', 'Requerit');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', "Dies abans de l'arribada");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', "Lapse mínim de dies entre avui i el dia de l'arribada.");
jr_define('_JOMRES_DTV', 'Variacions del tipus de data');
jr_define('_JOMRES_DTV_DOW', 'Dia de la setmana');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', "Tipus d'hoste per defecte");
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', "Número per defecte del primer tipus d'hoste a mostrar, si utilitza diferents tipus d'hostes.");
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Només els usuaris registrats poden reservar en línea?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Ho sentim, per a reservar en línea ha de ser un usuari registrat. Click aquí per a registrar-se en el lloc.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Color de text per a enllaços en reserves');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Vores cap de setmana');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Habitació reservada');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Reserva negra');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Arrodonir dipòsit a número enter?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '¿Carregar dipòsits?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Càrrecs de tarifes desats com figures setmanals?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', "Té l'opció de desar els càrrecs per tarifa en valors diaris i setmanals.");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Preu per setmana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', "Dates d'arribada arreglades: ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Quan aquesta opció és seleccionada, els números de les dates són mostradas en el menú desplegable');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', "Data d'arribada incorrecta");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Data de sortida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', "La reserva és molt curta. Es necessiten diversos dies entre l'arribada i la sortida:");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', "L'interval és");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', "Variant tipus d'hoste incorrecta");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', "Seleccioni el tipus d'hoste");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Masses opcions per a la llista de tarifes');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ha escollit més habitacions que hostes, click en una habitació per a eliminar-la de la seva selecció');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Masses hostes per als llits disponibles');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Necessita més habitacions');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Esculli una habitació');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Nom requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Cognom requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'No. casa requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Carrer requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Poble requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Regió requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Codi postal requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'País requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telèfon requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Mòvil requerit');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email requerit');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Tenim VACANTS!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'No hi ha habitacions seleccionades');
jr_define('_JOMRES_BOOKING_NUMBER', 'Reserva no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok per a reservar, missatge de fons');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Baixar variables de plantilla?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Activar això per a baixar variables de la plantilla per a cada vista. Útil si desitja veure si cert element està disponible per a ser utilitzat en una plantilla determinada.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figura és percentatge');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', "Posi això a 'Sí' si la figura de càlcul de persones és un percentatge. Si no llavors s'aplicarà com una xifra fixa.");
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Límit en habitacions/tarifes disponibles');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', "Utilitzi això per a limitar el número d'habitacions disponibles i aranzels que es llisten en el formulari de reserva. Posi'l a zero si vostè no vol habilitar limitacions. ");
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'NO hi ha VACANTS!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Reservi ara: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', "Mode d'edició Global?");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', "Vagi amb compte amb aquesta funció. Si s'estableix en Sí, el mode d'edició afectarà el text a mesura per a totes les propietats en el sistema per a la constant que s'està editant.");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Símbol Global de moneda');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Plegat de Components');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Posi això a Sí, si el componente està plegat de manera que les àrees del mòdul i de capçalera no són visibles');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Només caps de Setmana');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Dies de cap de setmana');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', "Estableixi els seus dies de cap de setmana. Tarifes que permetin o no caps de setmana tindran aquesta opció en compte al generar la llista d'habitacions.");
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', "Seleccioni el seu país abans d'afegir altra informació de la propietat");
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Grabi els seus canvis abans de pujar imatges de la propietat');
jr_define('_JOMRES_TARIFFSFROM', 'Preus desde - ');
jr_define('_JOMRES_SEARCH_ALL', 'Tot');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Cerca per país');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Cerca per regió');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Cerca per ciutat');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Funció de cerca.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Buscar');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Escrigui una paraula en el quadre i premi el botó.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Paraules de cerca: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Si us plau, introdueixi la seva arribada prevista i la data de sortida i premi el botó per a buscar habitacions disponibles en les dates escollides.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Llistar propietats per tipus de propietat');
jr_define('_JOMRES_SEARCH_RTYPES', "Llistar propietats per tipus d'habitació");
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Per defecte');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nom Propietat');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Regió Propietat');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Ciutat Propietat');
jr_define('_JOMRES_SORTORDER_STARS', 'Estrelles');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalls Propietat - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formulari de Reserva');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualitzi la seva direcció');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', "Revisar disponibilitat<br/>(La selecció d'habitació es resetejarà)");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Revisar disponibilitat');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifiqui els seus extres opcionals');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', "Canvii la seva selecció d'habitació");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Actualitzi la seva direcció');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Ho sentim una o més dades de direcció són incorrectes');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imatge Habitació');
jr_define('_JOMRES_CURRENCYFORMAT', 'Format de moneda');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opcions de cerca');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Logs Disponibles');
jr_define('JOMRES_COM_A_MESSAGE', 'Missatge');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Avançat');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micro gestió');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Mode configuració tarifes');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Compte: Canviar entre diferents tipus de tarifes pot originar pèrdua de dades. Vegi les notes a continuació respecte a això</b>.
<br/><br/>
Té tres opcions per a configurar les tarifes.<br/>
Mode Normal: Pots tenir una tarifa per cada tipus d'habitació, això és vàlid per als següents 10 anys.<br/>
Micro gestió: Pots canviar el preu per cada día i habitació/propietat<br/>
Avançat: L'antic mètode Jomres de generar tarifes<br/>
<br/>
Els diferents modes de tarifes li permeten escollir el mètode de configuració de les tarifes que més li convingui. <br/>
El mode normal és el més simplista, però és més fàcil d'entendre, ja que creuarà referència d'habitacions i tarifes a tipus d'habitació/propietat i li permet configurar les habitacions i els preus en la mateixa pàgina. <br/>
Micro gestió li permet variar els tipus en el día a día sense haver de gestionar un munt de tarifes, que es realitza per lots de referències creuades de tarifes diferents entre sí. Això dóna lloc a una sèrie de tarifes que s'han creat per a que abarquin un període de temps, però no es poden aplicar una tarifa sobre una altra. <br/>
Mode avançat li permet crear una habitació i asociar-la amb un tipus d'habitació. A continuació, crea una tarifa que s'associa amb un tipus d'habitació. L'ús d'aquest mètode és possible aplicar una tarifa sobre una altra, per exemple, un tipus d'habitació \"Doble llit\" pot tenir una tarifa d'allotjament i esmorzar, y una altra per al llit, esmorzar i sopar. El mètode avançat requereix una mica més d'atenció als detalls, ja que és posible desassociar una habitació o tarifa d'un tipus d'habitació/propietat o configurar-la incorrectament vàlida desde i fins les dates, però dóna opcions de configuració que els altres modes no ofereixen. <br/>
<br/>
Degut a que els modes Normal i Micro gestió requereixen una posada a punt específica d'habitacions i tarifes per al mode de treballar el sistema pot ser necessari tornar a situar algunes dades per a fer les configuracions de l'actual compatible amb el mode d'edició actual tarifa. <br/>
<br/>
Normal -> Avançat. Sense canvis. Les tarifes vigents es mantenen. <br/>
Normal -> Micro gestió. Totes les tarifes existents s'eliminen. <br/>
Avançat -> Normal. Totes les tarifes existents s'eliminen. <br/>
Avançat -> Micro gestió. Totes les tarifes existents s'eliminen. <br/>
Micro gestió -> Avançat. Totes les referències creuades existents entre les tarifes s'eliminen, però les tarifes es mantenen. <br/>
Micro gestió -> Normal. Totes les referpencies creuades existents i les tarifes s'eliminen.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', "Mostrar la llista d'habitacions en el full de detall?");
jr_define('JOMRES_PROPERTYTYPE', 'Tipus de propietat');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Persones màximes per habitació');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Persones màximes en la reserva');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Afegir nota');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Veure notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Afegir nova nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Llistat de reserves');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Les meves reserves');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Veure reserves');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Veure preferits');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'No té cap preferit afegir encara!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipus de propieta');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Actiu');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Aquest plugin permet activar i configurar els preus de les seves habitacions dinàmicament.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', "La majoría de les empreses recalculen els preus de les habitacions en funció del número d'habitacions d'un tipus requerit que estan disponibles en una data determinada. Això els permet oferir descomptes en el tipus d'habitació que no està ocupada durant un període determinat amb l'objetiu d'atreure als clients que d'una altra manera podrien perdre's. <br/> L'activació i configuració d'aquest plugin li permet oferir preus ajustables basats en el número d'habitacions d'un tipus seleccionat que estan disponibles en la propietat en un dia determinat. <br/> Threashold defineix el número de dies que desde la data actual fins la data d'arribada permet activar aquesta característica, ens permet la possibilitat d'ajustar el percentatge d'habitacions que poden estar disponibles abans de que un determinat descompte s'apliqui.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', "Threashold (número de dies entre l'arribada i la data actual)");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', "Percentatge d'habitacions ocupades  10%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', "Percentatge d'habitacions ocupades  25%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', "Percentatge d'habitacions ocupades  50%");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', "Percentatge d'habitacions ocupades  75%");
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Descompte %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ha sigut descomptat de  ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' a ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', " Preu d'habitació no descomptat ");
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Pots obtenir google maps API key desde <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Un cop tingui introduït el seu map key aquí, Jomres mostrar el mapa en la seva pàgina de detall de la propietat.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Últim minut');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Actiu?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', "Posar a Sí si vol oferir ofertes d'últim minut.");
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', "Si es fa la reserva i la data d'arribada és només N dies desde la data de reserva, el descompte pot ser aplicat");
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Descompte');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'En percentatge');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Un descompte ha sigut aplicat a aquesta reserva!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', "El cost de l'estancia ha sigut reduït en  ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', "Aquesta propietat ofereix un descompte d'últim minut de ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', " per cent si la seva data d'arribada és anterior a ");
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', " per cent o més si la seva data d'arribada és abans de ");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Reservi ara per a disfrutar de la millor oferta!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Informació detallada de tarifa');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', "Posar a Sí per a veure l'informació detallada en els detalls de propietat/tarifa");
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Reduïr al mínim les opcions de configuració');
jr_define('_JOMCOMP_AMEND', 'Modificar reserva - Selecció de propietat');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleccionar nova propietat');
jr_define('_JOMCOMP_AMEND_HEADER', 'Contracte Original:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Dipòsit Pagat');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Dipòsit No Pagat');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Anulació Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Anulació de Dipòsit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cance·llar');
jr_define('_JRPORTAL_CPANEL', 'Panell de Control');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Tipus de Comissió predeterminada');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Esculli la comissió predeterminada que serà aplicada a la propietat en cas de que no sigui seleccionada una altra.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Llista de tips de comissió');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Tipus de comissió');
jr_define('_JRPORTAL_CRATE_TITLE', 'Títol');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tipus');
jr_define('_JRPORTAL_CRATE_VALUE', 'Tipus de comissió');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Codi de moneda');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Llista de propietats');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nom propietat');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Direcció propietat');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Les propietats que tinguin color de fons vermell encara no tenen un tipus de comissió aplicat.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Estadístiques');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tipus de comissió');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Llista de reserves');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Propietat id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Factura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Reserves total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data arxivada');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', "Pot tenir arxius específics d'idioma mitjançant l'ajust del nom de la subcarpeta, ex. 'yachtbrokerage' i copiar un arxiu de subllenguatge en la subcarpeta. Pot modificar aquell arxiu de llenguatges per aquell tipus de propietat per a convertir-se en habitacions, ex DVDs, ect.");
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', "No es pot eliminar aquesta propietat, ja que és la única propietat a la que té accés. Si desitja desactivar-la, si us plau utilitzi la característica de despublicar en la seva barra d'eines. ");
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Allotjament Total');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'nit(s) de ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'per habitació ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Augmentar la duració de l'estància ");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Resum de preu ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Si us plau llegir i acceptar ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Un resum de su reserva es mostra a continuació. <br /> Per a fer qualsevol canvi, si us plau fagi clic en el botó Modificar reserva. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Si necessita canviar qualsevol informació anterior, si us plau fagi clic aquí');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modificar Reserva');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Si us plau, introdueixi qualsevol sol·licitud especial en el quadre següent.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Confirmo que la informació anterior és correcta i d'acord amb la ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'per persona per nit ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'de');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Començament');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Anterior');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Següent');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Fi');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Resultats');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Tingui en compte que això no és un formulari de reserva, en el seu lloc està enviant un correu electrònic. <br/> Si us plau, introdueixi el missatge que li agradaria enviar a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contactar amb Hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Consulta de la propietat de  ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Gràcies por la seva consulta, el seu missatge ha sigut enviat a la direcció de contacte de la propietat, amb còpia al seu propi correu electrònic per als seus arxius. Se li contestarà tan aviat com sigui possible');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' amb respecte a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Consulta');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', "Si us plau seleccioni l'allotjament desitjat en la llista de la dreta");
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Habitacions mínimes ja seleccionades');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', "Número mínim d'habitacions prèviament seleccionades en la reserva abans de mostrar el combo de tipu d'habitació/tarifa que poden ser oferides. Li permet tenir les tarifes de descompte, quan més de N habitacions estan ja seleccionades. ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', "Número màxim d'habitacions ja seleccionades ");
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', "El número màxim d'habitacions ja seleccionades en la reserva abans de que el combo tarifes/habitació ja no s'ofereixi. Li permet deixar d'oferir aquest tipus de combinació de tarifes/habitació un cop que N habitacions hagin sigut seleccionats en el formulari de reserva. ");
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', "Tingui en compte que Suplement per persona no serà utilitzada si Suplement per persona s'estableix en Sí en la Configuració General. Aquests ajusts són una alternativa a tenir tarifes planes Suplement per persona, no una addició a la tarifa plana SPS.");
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponible');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Algunes reservas');
jr_define('_JOMRES_AVLCAL_HALF', 'Ocupació mitja');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Ocupació alta');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Complet');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per setmana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per dia');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per persona per reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per persona per dia');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per persona per setmana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per dia (Mínim dies)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per dies X habitacions seleccionades');
jr_define('_JOMRES_REGISTRYREBUILD', 'Reconstruir registre');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normalment, el Jomres plugin Registro es reconstrueix automàticament cada vegada que veu que l'administrador de plugins afegeix o treu un plugin, però és possible que vostè no pugui utilitzar aquestes característiques, per alguna raó, per tant vostè pot utilitzar aquesta funció per a reconstruir el Registro manualment. Si vostè té accés a la funció de l'administrador de complements i actualitzacions, llavors és poc probable que vostè hagi d'utilitzar aquesta funció. Haurà de reconstruir del plugin de registro sempre que afegeixi un nou mini-component i no utilitzi l'Administrador de complements per a afegir-lo.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registre reconstruït amb èxit');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', "Hi ha hagut un error amb la reconstrucció del registro de minicomponents. Vostè ha de verificar el seu registre d'errors Jomres per a veure si hi ha un registre que ha provocat l'error.");
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Buscar per rang de preu.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'No té ninguna reserva encara!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Editar el seu tipus propietat');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleccionar el seu tipus propietat');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'La seva consulta...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Límit llista propietats');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', "El número de propietats per a mostrar en una pàgina després d'una cerca");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Funció de cerca integrada');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "La característica cerca integrada Jomres permet als usuaris buscar a través de Jomres Propietats d' acord amb un conjunt de funcions. Si ja ha utilitzat les funcions de cerca de Jomres en Joomla vostè estarà familiaritzat amb aquests ajusts. <br/> Aquesta característica ens permet oferir el maneig de la cerca en Jomres per a aquells usuaris que no desitgen utilitzar mòduls de cerca de Joomla, o per a altres usuaris de CMS que no tenen els seus propis mòduls de cerca Jomres. <br/> Només recordi que si decideix buscar alguna cosa a través d'un enllaç (és a dir, no un menú desplegable), llavors les opcions de cerca no es duràn a terme, només l'element que es correspon amb l'enllaç que ha fet clic. <br/> Noti que per defecte el disseny d'aquesta cerca integrada no és molt bonic. Això és perque l'arxiu de plantilla que construeix el disseny ha d'incluïr totes les opcions possibles, algunes de les quals són incompatibles.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activar aquesta funció?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Si aquesta funció està habilitada, qualsevol crida a Jomres que mostri la llista de propietats mostrarà també les opcions de cerca.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Utilitzar columnes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Qualsevol opció de cerca que hagi definit com enllaç (quan sigui el cas) es mostrarà com columnes (IE posa br al final de l'enllaç)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Cerca per regió seleccionant combo desplegable');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Ofereix un menú desplegable de cerca per a filtrar a través de països/regions/ciutats. Si va a utilitzar aquesta funció, llavors serà millor que no utilitzi la cerca per regió o ciutat que segueix.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Buscar per nom Propietat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Mostrar la cerca pel nom de propietat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Buscar per ciutat/regió');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Mostrar la cerca per la regió introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Buscar per tipus de propietat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Mostrar la cerca per tipus de propietat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Buscar per tipus d'habitació");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Mostrar la cerca pel tipus d'habitació introduïda");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Buscar per característiques');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Mostrar la cerca per la característica introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Mostrar com un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Canvïi això a No per a mostrar la llista d'enllaços com a descripció d'imatges i caselles de verificació");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Buscar per descripció');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Mostrar la cerca per la descripció introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Buscar per disponibilitat');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Mostrar la cerca per la disponibilitat introduïda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Buscar per rang de preu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Mostrar la cerca per rang de preu introduït');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Buscar per increments de rang de preu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres mirarà en tots els valors de les tarifes a continuació, calcularà una sèrie de rangs de preus basat en els increments de valor que ha establert aquí.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', "Per defecto, si una propietat no està seleccionada en Jomres es realitza una cerca. Si aquesta cerca no ha sigut provocada per un mòdul de cerca, llavors la cerca originarà resultats a l'atzar (deliberadament). Aquesta opció li permet limitar el nombre de resultats en aquesta cerc a l'atzar.");
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Ajustos de treball per a Cron i registre');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron informació del treball. La funcionalitat pseudocron és necessària per a la facturació i maneig de la comissió.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', "Instal·lat minicomponents cron. Per a executar una tasca de cron individual utilitzi els enllaços que s'especifiquen a continuació. Tingui en compte que el cron jobs no produeix ningún resultat pel que no veurà ninguna informació en la pàgina. En canvi, es refereix a les anotacions de treball referides a continuació.");

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Mètode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', "Si vostè no té accés a cron jobs, activi aquest minicomponent, del contrari crei una tasca programada i dígali que s'executi<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Mostrar el registre en el navegador');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', "Només funciona si el mètode s'estableix en minicomponent.");
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Registre habilitat');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', "Posi això en Sí per a que el registre estigui habilitat. Els resultats dels registres s'emitiràn a continuació");
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Registre detallat');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots de registre de sortida');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edició de plantilla');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Camps personalitzats');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Aquí pot definir camps simples personalitzats que es mostraràn en el formulari de reserva.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nom de camp (sense espais)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valor per defecte');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descripció');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requerit');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Quantitat màxima');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', "Si la quantitat màxima s'estableix en més de 1 , als hostes se'ls oferirà un menú desplegable per a escollir la quantitat dels extres que necessiten.");
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Impost');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Codi Impost');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Descripció Impost');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'No pot borrar aquest Impost.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Tasa');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Factures');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'No pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Cancel·lada');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Pendent');
jr_define('_JRPORTAL_INVOICES_USER', 'Usuari');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Estat');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Plantejat');
jr_define('_JRPORTAL_INVOICES_DUE', 'Deguda');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Suscripció');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Total pendent de pagament');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Freqüència repetició');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Dia del mes recurrents');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Codi de moneda');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Línies de comanda');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nom');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Descripció');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Preu inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Quantitat inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Descompte inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Total inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Codi d'impost");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Descripció d'impost");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Tasa impositiva');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Reemplaçar els ajustos estàndar de la pasarel·la Jomres? ');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Mostrar les meves factures');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Cupons descompte');
jr_define('_JRPORTAL_COUPONS_DESC', 'Els codis de descompte es poden generar i enviar ​​als clients com un incentiu per a fer reserves. Vàlid desde i fins les dates es refereix a les dates en que la reserva es pot fer en endavant, no a la data de la propia reserva.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Codi de cupó');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Vàlid desde');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Vàlid fins');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Import de descompte');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'El descompte és un percentatge');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Només habitació');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', "Si té un codi de cupó, si us plau escrigui'l en el quadre i fagi clic en 'Guardar cupó' per a guardar els detalls de cupó en la seva reserva.");
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Guardar cupó');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupó guardat en reserva');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Número de cupó no trobat');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valor de cupó de descompte');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Descompte de reserva. Codi de Descompte vàlid/valor dels descomptes/configuració de cupó: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Escollir idioma');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', "Trïi les opcions d'idioma que es mostra en el menú desplegable");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', "Mostrar el menú desplegable de selecció d'idioma?");
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Estimat/da');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Gràcies per registrar-se ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', "El seu nom d'usuari és : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'La seva contrasenya és : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Si us plau inicïi sessió per a veure les seves reserves ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupó guardat');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupó borrat');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Usuari');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Contrasenya');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Número de telèfon notificacions');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Si us plau utilitzi el format 'codi del país, número de mòvil'. Per exemple, el número de mòvil en el Regne Unit sería per exemple '447979123456'. Deixi en blanc si no desitja que ninguna notificació de correu electrònic sigui enviada al teu telèfon mòvil.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviament, no es pot utilitzar/provar aquesta pasarel·la desde localhost, haurà de fer-ho desde un servidor en funcionament.</b>
<br/>
<br/>
Per utilitzar la pasarel·la Clickatell necessita un compte de Clickatell i almenys una connexió registrada (API instància sub-producte) entre la seva aplicació i nostra porta d'enllaç. Cada mètode de connexió és conegut com un sub-producte. He aquí com:<br/>
<br/>
<b>Paso 1 - registrar un compte Clickatell </ b> <br/>
Si encara no té un compte de Clickatell, és necessari registrar-se per obtenir un com el que segueix. Del contrari vagi al pas 2. <br/>
* Anar a la http://www.clickatell.com/products/sms_gateway.php, i escollir el sub-producte adequat de la API (mètode de connexió) que desitja utilitzar (Clickatell Central (API)) <br/>
* Fagi clic en l'enllaç de registre. <br/>
* Ompli el formulari d'inscripció. <br/>
Un cop superat amb èxit l'enviament del formulari automàticament ingressarà en el seu nou compte i serà portat a una pàgina on vostè pot escollir els seus API connection. <br/>
<b> Pas 2 - afegir un registre API connection (sub-producte) </ b> <br/>
Si no està ja connectat al seu compte, ha de fer-ho en <br/> http://www.clickatell.com/login.php
* Seleccioni\"Administrar els meus productes\" en el menú superior. <br/>
* Seleccioni el tipus de connexió de la API que desitgi utilitzar (API HTTP) del menú desplegable ('Add Connection'). <br/>
* Completar el formulari. Asseguri's de que introdueix la IP bloquejada (la IP d'aquest servidor), ajustar Callback a HTTP POST. Haurà d'establir la devolució de trucada IP " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback i un identificador d'usuari i contrasenya. <br/>
Si es registra més d'una connexió de la API, el nom de la descripció que ha introduït per a cada un ha de ser únic - no es pot tenir múltiples APIs amb el mateix nom <br/>.
Després d'enviar el formulari, les seves dades d'autenticació es mostraràn, incluïda la identificació única de cada connexió de la API (api_id). Aquestes dades d'autenticació es requereixen quan es connecta a la pasarel·la Clickatell per a enviar un missatge. <br/>
<br/>
Utilitzi el seu nom d'usuari, contrasenya i api_id per a omplir els camps anteriors.
<br/>
<br/>
");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Utilitzar moneda global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Posi això en sí per forçar totes les propietats que utilitzin la mateixa moneda (ex. & # 8 3 6 4 ;) ');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', "Mostrar el formulari Llista de reserva de l'habitació accessible");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Mostrar el formulari Llista de reserva Màxims ocupants');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Tingui en compte que els preus d'habitació indicats són estimacions i el preu total de la reserva no es calcularà fins que hagi afegit una habitació o habitacions a la seva selecció.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Suscripció paquets');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nom');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Descripció');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicat');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Import total');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Límit propietats');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Subscriure's");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Utilitzi la funcionalitat de maneig de subscripcions');
jr_define('_JOMRES_COM_NEWUSER', 'Crear nou usuari en reserva');
jr_define('_JOMRES_COM_NEWUSER_DESC', "Crear nou compte d'usuari en usuaris no registrats.");
jr_define('_JOMRES_CLICKTOREGISTER', 'Fagi clic aquí per a registrar la seva propietat');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', "Gràcias per la seva reserva - segueixi nous detalls d'usuari");
jr_define('_JOMRES_LATLONG_DESC', 'Utilitzi el seu ratolí per desplaçar-se pel mapa, i arrossegui el punter a la localització de la seva propietat per a indicar la seva latitud i longitud.');
jr_define('_JOMRES_CONTROLPANEL', 'Panell de control');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Mostrar Factura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Mostrar Factures');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Adegir la meva propietat a aquest lloc');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Alerta : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Ho sentim, però aquest ID de paquet no es reconeix.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Ho sentim, vostè ja està subscrit a un paquet gratuït, vostè no pot subscriure el paquet de nou.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Les dades del seu negoci');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nom negoci');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Número VAT');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Edifici número');
jr_define('_JOMRES_INVOICE_NUMBER', 'Factura No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleccioni les dates en que desitja aplicar la reserva negra. Quan hagi seleccionat les dates apropiades, fagi clic en el botó "Aplicar" per a comprovat la disponibilitat. <br/> 
<br/> 
Si la propietat té una o més reserves per al període desitjat, llavors vostè no serà capaç de fer la reserva negra fins que les altres reserves/reserves negres, hagin sigu cancel·lades/retirades.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Ho sentim, no pot fer reserva negra en aquesta propietat aquestes dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Pot fer reserves negres per a aquestes dates');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', "La seva propietat està configurada per a carregar per persona per nit, però vostè no té cap tipus d'evaluació creada o publicada, si us plau, crear i publicar un o més tipus d'hostes. ");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'No té cap tarifa configurada encara, vostè no podrà realitzar cap tipus de reserva per a la seva propietat.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Mode edició actiu');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Mode edició desactivat');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Carregar dipòsit variable?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', "Dipòsits variables permet definir si li agradaria cobrar la totalitat de la reserva si la data d'arribada està a N dies de 'avui'. Estableixi aquesta opció en Sí per activar la funció, e introdueixi el número de dies més endavant, així per exemple si el día d'arribada és en el termini de 60 dies, llavors com quantitat del dipòsit serà carregat l'import total, del contrari la quantitat es basarà en el dipòsit de les opcions configurades anteriorment.");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', "El número de dies, en el que l'import total serà cobrat com dipòsit.");
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Email de confirmació ha sigut enviat. Vostè pot tancar aquesta finestra ara.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', "Contacte amb l'agent");
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Marcar factura com pagada');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Factura marcada com pagada');
jr_define('_JOMRES_APIKEY_REMAKE', 'Fer nova API Key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', "És una instal·lació d'una sola propietat?");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', "Si aquesta opció està establida en Sí, l'interfaz Jomres a usuaris no autoritzats es simplifica enormement. Per defecte les crides a Jomres, en comptes de ser donades com una llista de les característiques, només portarà al client a la central de reserves per a la primera propietat en el sistema. Administradors de la propietat tampoc podran veure el botó Detalls de la propietat de vista prèvia o el botó Afegir nova propietat. Ideal si només vol una llista de béns i tenir reserves per a elles.<br/>");
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balanç de pagaments');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', "Tingui en compte vostè està utilitzant el mode d'edició amb el mode global d'edició habilitat. Això està bé si vostè sap el que significa el mode d'edició global. Si no està segur si ha d'utilitzar Jomres d'aquesta manera, si us plau, consulti <a href='http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode' target='_blank'>el mode d'edició de pàgina del manual</a> per a obtenir més informació sobre aquest tema.");
jr_define('_JOMRES_SUPPORTKEY', 'Clau de Suport');
jr_define('_JOMRES_SUPPORTKEY_DESC', '.El seu número clau de suport (també conegut com el número de llicència). Vostè necessitarà una llicència actualitzada per a poder descarregar les actualitzacions i complements per a Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Descompte personal');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Registrar propietats limitades a un sol país?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', "Pot assegurar-se que els registres de la propietat es limiten a un sol país mitjançant l'establiment d'aquesta opció en Sí i establir el país en la següent opció.");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Les propietats estan localitzades en aquest país : ');
jr_define('_JOMRES_JQUERYTHEME', 'Tema Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Trïi un tema jQuery per a utilitzar per a les pestanyes dels detalls de propietat.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Ho sentim, però la propietat no està disponible actualment.');
jr_define('_JOMRES_REVIEWS', 'Comentaris');
jr_define('_JOMRES_REVIEWS_TITLE', 'Títol comentaris');
jr_define('_JOMRES_REVIEWS_DATE', 'Publicat en ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Encara no hi ha comentaris per aquesta propietat.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Li agradaria ser el primer en fer un comentario sobre aquesta propietat?');
jr_define('_JOMRES_REVIEWS_IAGREE', "Estic d'acord amb aquest comentari");
jr_define('_JOMRES_REVIEWS_IDISAGREE', "No estic d'acord amb aquest comentari");
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Valoració mitja: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Vots totals:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Afegir un nou comentari.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Necessita estar registrat per enviar un comentari.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', "Digui'ns què opina d'aquest establiment : ");
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Aquest client ens va dir: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pors: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Contres: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Enviat el: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Vostè ja ha realitzat un comentari sobre aquesta propietat, no pot publicar un altre comentari sobre ella.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ho sentim, però no es permet publicar comentaris en aquest lloc.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Click per mostrar comentaris');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', " usuaris d'acord amb aquest comentari. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' usuaris en desacord amb aquest comentari.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', " usuari d'acord amb aquest comentari. ");
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'usuari en desacord amb aquest comentari.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', "Gràcies per compartir la seva opinió d'aquest comentari.");
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', "Gràcies, però ja ha compartit l'opinió d'aquest comentari.");
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', "Si us plau assegúri's de que tots els camps estan correctament complimentats");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Si us plau, resumeixi el seu comentari introduïnt un títol');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Si us plau, introdueixi un comentari més complet en el quadre de descripció');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', "Si us plau, introdueixi les experiències positives com a client d'aquest establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', "Si us plau, introdueixi qualsevol experiència negativa que s'hagi trobat");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', "Si ua plau, qualifiqui l'amabilidad que ha rebut per part del personal");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', "Si us plau, quina és la seva valoració de l'establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', "Si us plau, quina és la seva opinió sobre la netedat de l'establiment");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', "Si us plau, qualifiqui l'allotjament. Era còmode o incòmode");
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Si us plau, proporcioni la seva opinió sobre la relació Qualitat-Preu');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Si us plau, valori els serveis oferits');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Revisió del comentari');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'La seva experiència en major detall');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Gràcies per enviar-nos la seva opinió.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Gràcies per enviar-nos la seva opinió. Serà publicada en breu per un dels nostres moderadors.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Utilitzar la funció de comentaris de Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Publicar automàticament els comentaris?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', "Si s'estableix No haurà de publicar manualment els comentaris");
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Ajustar el mode test en els comentaris?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalment els Administradors de Propietat no poden fer comentaris. Naturalment això no és lo ideal en un lloc en funcionament.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', "Aquesta és una llista de totes les propietats. Per a veure els comentaris d'una propietat premi en ella. Desde aquí podrà publicar o borrar comentaris.");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Número de comentaris no publicats');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total comentaris');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicar/Despublicar comentari');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Borrar comentari');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Informe de comentari');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revisió dels comentaris');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Si us plau, introdueixi el seu informe');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', "Veu alguna cosa en aquest comentari que sigui qüestionable o inexacte? Informi'ns i veurem què podem fer per vostè.");
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Enviar');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Informe creat per ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', "Els informes són publicats pels usuaris que poden estar en desacord amb el contingut d'un comentari. L'única manera d'eliminar un informe és eliminar la revisió.");
jr_define('_JOMRES_REVIEWS_RATING', 'Valoracions (1 = escàs 10 = excel·lent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitalitat  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Localització ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Netedat ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Allotjament ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Relació qualitat-preu ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Serveis ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Comentat per : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Amagar comentaris');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Mostrar Formulari de reserva en la pàgina de detalls de la propietat?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', "Posi això en Sí per mostrar el formulari de reserva en la pàgina de detalls de la propietat. Si s'estableix en No, apareixerà un enllaç en la pàgina de detalls de la propietat apuntant al formulari de reserva.");
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Els preus inclouen impostos?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Els preus són impostos incluïts? Si els seus preus inclouen impostos seleccioni Si. Si no estan incluïts seleccioni No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'IVA extres:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', "El camp de día de la setmana li permet establir una tasa per a un determinat día de la setmana, un cop que fagi clic en el botó de día de la setmana tots els días de la setmana s'ajustaran a aquesta tasa.");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', "Els selectors de data i la tarifa d'entrada li permeten establir un preu per a un interval de temps donat. Trïi una data d'inici i fi, introdueixi un preu, i fagi clic en el botó de fixació de tarifes.");
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Inici interval');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Fi interval');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tarifa');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Fixar les tarifes');
jr_define('_JOMRES_PARTNERS_TITLE', 'Socis');
jr_define('_JOMRES_CALENDAR_RTL', 'fals');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Habitació ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'hoste(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', "Hem assignat el número d'hostes a les seves habitacions. Si desitja canviar aquesta assignació, haurà de contactar amb l\'hotel després de fer la reserva. Es poden aplicar càrrecs extra si canvia les assignacions.");
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Tingui en compte que la seva propietat no s'ha publicat encara, només es pot veure la propietat, els visitants del lloc no la veuran");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Ordre de resultats predeterminat per a cerca per defecte');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', "Canviar aquesta opció per canviar l'ordre en que els resultats de la cerca són presentats de forma predeterminada.");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostrar resultat de la cerca per menú desplegable');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Estil de llista habitacions');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', "En el formulari de reserva, utilitzant l'estil 'Clàssic', l'estil de llista d'habitacions li ofereix habitacions individuals per als clients. Amb l'estil 'Tipus d'habitació', els hostes trien el número d'habitacions de tipus X (per exemple, 2 x dobles) en lloc");
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Clàssic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipus habitacions');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendari de la setmana comença el día, Diumenge Dilluns');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', "Només els clients de l'establiment poden fer comentaris?");
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Establir en Sí si desitja restringir comentaris només a aquells usuaris que hagin sigut hostes en aquest establiment.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per habitació');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hostes per habitació : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hoestes per reserva : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', "Número d'habitacions");
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Gener');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Febrer');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Març');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Abril');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maig');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Juny');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Juliol');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Agost');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Septembre');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Octubre');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Novembre');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Desembre');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', "Posi això en Sí per a reduïr el número d'opcions disponibles per als administradors de la propietat en la secció Configuració General. Això és útil si no vol que els administradors de propietats disposin de molts ajustos, en el seu lloc pot editar jomres_config.php per a definir les opcions per defecte de l'establiment.");
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Si us plau, seleccioni una opció per a la seva reserva');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Vista d'administració De Propietat");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Vista previa Lloc');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Descompte Associat ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Buscar usuari');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Introdueixi alguns caràcters per a buscar un usuari.<br/> Quand seleccioni un usuari automàticament s'afegirà com Associat i el portarà a la pàgina següent on pot assignar propietats i descomptes per a l'usuari.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Associats existents');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Trïi un Associat per a ser portat a la seva pàgina d'administració.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Associat :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Buscar per una propietat');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Introdueixi alguns caràcters del nom de propietat i seleccioni una propietat.<br/> Quan vostè seleccioni la propietat s'afegirà a la cartera de l'Associat, però encara no disfrutarà dels descomptes, serà necessari que els configuri vostè mateix.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Propietats actuals');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Fagi clic en una propietat per a modificar la configuració de descompte de l'Associat per aquesta propietat.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Aquest compte ha sigut suspès, no és possible administrar la seva Propietat(s) amb aquest compte.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Compte d'Administrador suspès");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Compte d'Administrador rehabilitat");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Tingui en compte que el seu compte d'Administrador de la propietatd ha sigut suspès. Vostè no serà capaç de realitzar les funcions de gestió de la propietat fins que el compte hagi sigut restaurat.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Tingui en compte que el seu compte d'Administrador de propietat ja està actiu. Vostè pot seguir exercint les funcions d'administració de propietats. Si us plau, ingressi en compte i assegúri's de que la Propietat(s) correcta han sigut publicades. Gràcies.");
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Eliminar preferits');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Arxiu de dades de Reserves');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', "L'arxiu de reserva de dades és un volcat de la informació de la reserva, la informació és capturada després de confirmar la reserva fent clic. Passi el ratolí sobre una data per veure el volcat de les dades en brut. La informació és emagatzemada en la taula XXX__jomres_booking_data_archive.");
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Editar compte');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Per afegir un usuari com a administrador de propietats, introduïu primer els primers caràcters del seu nom d'usuari al camp anterior. Quan s'hagi trobat l'usuari correcte, feu clic a aquest nom per seleccionar-lo i, a continuació, trieu quines propietats haurien de ser gestores. L'usuari <em> ja ha de ser usuari del CMS </em>");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Actuals Administradors');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Buscar per número d'hostes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Mostrar la cerca número d'hostes en menú desplegable");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Buscar per número d'estrelles");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Mostrar la cerca número d'estrelles en menú desplegable");
jr_define('_JOMRES_SEARCH_GUESTNUMBER', "Número d'hostes");
jr_define('_JOMRES_SEARCH_STARS', "Número d'estrelles");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Número de propietats');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Carregar Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Pot establir això a NO si vostè té una plantilla que utilitza jQuery. Això pot resoldre els problemes de conflicte jquery en algunes plantilles, però no tots.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Les miniatures es creen automàticament per a les imatges carregadas.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ample màxim de miniatures petites (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', "Les miniatures petites s'utilitzen en la llista de propietats, mentre que les miniatures de mida mitjana s'utilitzen en la capçalera de propietat.");
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Altura màxim de miniatures petites (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ample màxim de miniatures mitjes (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Altura màxima de miniatures mitjes (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Traducció etiquetes');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Utilitzar la funcionalitat de Comissionista?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Posi això en Sí per mostrar el resultat de les factures de la comissió que s'han plantejat.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Administrador de les reserves crea factures de comissió?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Si un Administrador fa una reserva, això també crea una línia en factura de la comissió?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspendre als administradors quan les factures són marcades com pendents?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Umbral per a la autosuspensió');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Aquest umbral és el número de dies que un administrador té per pagar una factura abans de que sigui suspès i no publicades les seves propietats.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Idioma de context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Aquesta característica permet a Jomres l'ús d'etiquetes que són apropiades per al seu enfocament actual, pel que si el seu interès es centra en una Yacht Brokerage (Venta de yats), canviar el context permetrà Jomres presentar les etiquetes d'un arxiu d'idioma diferent. Per exemple, si estableix el context per a 'Yacht Brokerage', llavors Jomres primer es troba el llenguatge actual, a continuació, buscarà en /'.JOMRES_ROOT_DIRECTORY.'/languages un sub-directori anomenat 'yachtbrokerage'. Si l'arxiu existeix en el llenguatge actual, l'arxiu serà utilitzat. Si no, llavors Jomres buscarà un arxiu d'idioma Inglés en aquest mateix directori. Si no es troba, Jomres utilitzarà l'arxiu d'idioma per l'idioma seleccionat en el directori /'.JOMRES_ROOT_DIRECTORY.'/languages.");
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuració avançada del lloc');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Estableixi aquesta opció a Sí si desitja utilitzar les opcions avançades de configuració del lloc. Si vostè acaba de començar amb Jomres, llavors li recomanem, que per ara deixi això en No, ja que la instal·lació per defecte és suficient per a començar, ha d'afegir Jomres al menú principal i accedir a l'interfaç com 'admin' i començar a configurar la seva propietat(s). Tingui en compte que moltes de les opcions avançades només seran aplicables a les instal·lacions de Jomres Silver, els usuaris Jomres Lite no seran capaços de treure el màxim profit de la totalitat de les característiques permeses.");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Carregar Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Preu (descendent)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Preu (ascendent)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'El resum de preus i estimacions ha de ser un preu per nit/setmana/mes?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per nit');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per setmana');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per mes');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per persona');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'setmana(s) en ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mes(os) en ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', "Com ha de treballar l'opció de cerca per número de persones?");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afecta a totes les cerques. Quan utilitzem la funció de cerca número de convidats, buscarem propietats les tarifes de les quals permetin allotjar un número major o igual al número escollit. Número igual o mayor? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Si us plau esperi, la seva sol·licitud està en procés i serà redirigit a la pàgina web de Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Si no és automàticament dirigit a Paypal en 5 segons ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click aquí');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Reserva vàlida a partir de');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Reserva vàlida fins ');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nom Hoste');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Els codis de descompte poden ser generats i passats ​als clients com un incentiu per a fer les reserves.<br/>Dates Vàlides desde/fins per a referir-se a les dates en que pot ser una reserva feta, mentres que Data Reserva vàlida desde/fins es refereix a les dates en que la reserva que ha de cobrir el cupó sigui vàlida. Si la reserva es troba fora d'aquest període les tarifes normals s'aplicaran als dies fora d'aquest període.<br/>Si desitja que la reserva estigui disponible per a uns hostes específics, trïi el nom dels hostes en el menú desplegable per a limitar el cupó només a aquells hostes.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Amb el seu cupó, aquesta reserva ha sigut rebaixada de ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' a ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', "Posi això en No per a desactivar la càrrega tant de Jquery UI javascript com d'arxius CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Carregar Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Posi No només per a desactivar l'arxiu jquery UI CSS.");
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc impost');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Despublicar Propietat');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Utilitzar Funcionalitat de Conversió');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Utilitza la funcionalitat de conversió online de jomres.. Això ofereix un desplegable de conversió als usuaris de la pàgina, on podran escollir la moneda en la que volen veure els preus ofertats. La presentació del preu s'ajusta per a monstrar el preu convertit, seguit pel preu 'natiu' de la propietat entre parèntesis..");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "Hem posat els nostres millors esforços en obtenir el més precís i més ràpid sistema de canvi de divisa que podem. El nostre servei de conversió de divises online està destinat a informació i no pretén reflexar canvis exactes. D'acord amb lo exposat anteriorment, no garantitzem l'exactitud dels canvis de divisa. Utilitzant aquest servei acceptes que l'ús de la mateixa corre pel teu compte i risc.");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Conversió de moneda/codi de moneda');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'Detecció de IP, clau API');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', "Per a fixar automàticament en el desplegable de canvi de moneda, Jomres utilitza un servri gratuït anomenar IpinfoBB per a detectar el país del visitant, no obstant haurà d'obtenir primer una clau API en: <a href='https://www.ipinfodb.com/login' target='_blank'>IPinfoDB</a>.");
jr_define('_JOMRES_DEBUGGING_TAB', 'Depuració');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Allotjament iva excluït ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Allotjament iva incluït');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'IVA Allotjament:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Obrir el formulari de Reserves');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Tornar als detalls de la propietat');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Seleccionat automàticament?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balanç (després del pagament del dipòsit)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrar recurss basats en les seves característiques.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Últimes Reserves');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'Segon');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'Minut');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'Hora');
jr_define('_JOMRES_DATEPERIOD_DAY', 'Dia');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'setmana');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mes');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'any');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'dècada');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'fa');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'desde ara');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Les reserves són per a dies enters?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Per defecte els recursos de reserves de sistema estan apagats per la nit pel que una reserva del primer de Gener'.date('Y', strtotime('next year')).' al segon de Gener '.date('Y', strtotime('next year')).' només cobreix una nit. Però si canvia aquesta opció a Si, llavors la reserva cubrirà dies enters, pel que una reserva en aquests dies cubrirà ambdós dies i al client se li facturaran dos dies.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per día');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per persona i día');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Entrada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Sortida');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dia(s) en');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Data de Sortida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', "La reserva és molt curta. Ha d'haver almenys aquests dies entre l'entrada i la sortida:");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Mínim interval entre Entrada/Sortida ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "L'interval mínim en el formulari de reserva entre les dates d'entrada i sortida. Un interval de 1 significa que las dates d'entrada i sortida poden establir-se en el mateix día, però això depèn encara de l'interval mínim que és calculat automàticament pel motor de reserva, ja que comprova les tarifes vàlides pel període de reserva.");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', "El preu resumit i l'estimat ha de ser facturat per día/per setmana/per mes?");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per día');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', "Dies abans de l'entrada.");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', "El número mínim de dies ha d'abarcar desde 'hoy' fins la data d'entrada.");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Canvïi això a Sí, si vol limitar reserves avançades (utilitzi el següent camp per a fixar el límit en termes de dies). Si canvia aquest camp a Sí, llavors si l'usuari intenta reservar més de x dies per adelantat, llavors el seu día d'entrada es fixarà en la data del día d'avui.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Mostrar camp de data de sortida?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Marqui això No si no vol mostrar el camp de data de sortida. Només utilitzi això si sap el que fa, ja que la data de sortida en les reserves es mostarà sempre com el día posterior a l'entrada.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "Si marca això com Sí, llavors les reserves es prendran per un període prefixat. Si es marca com No, assegúri's de que el camp \"dia d'entrada definit\" no està marcat com Sí (a no ser que específicament vulguis forçar als clients a sortir en un día de la setmana que vulguis) d'una altra manera no tindrà molts links en el calendari de disponibilitat.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', "Día d'entrada predefinit");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', "Només per a llocs que ofereixen períodes fixes de reserves. Trïi el día de la setmana en el que ha de ser realitzada l'entrada.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', "Día d'entrada prefixat");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', "Dies d'entrada prefixats repetits:");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', "Quan les dateas prefixades d'entrada estan seleccionades, el número de dates que es poden veure en la llista desplegable. Fíxi's que la llista de dates no incluirà ninguna data si la reserva no és possible degut a reserves anteriors, i que la llista serà de fet el doble de llarga que el seu número seleccionat ja que tindrà un número similar de dates històriques (on sigui possible).");
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per persona, per día');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Seleccioni Sí si vol canviar per-persona per-día. Si no, llavors els costos es calcularan en base a per-recurs-per-día.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Els dipòsits variables li permeten definir si li agradaria carregar la quantitat sencera a la data de l'entrada de la reserva en x dies desde avui. Marqui aquesta opció com Sí per activar aquesta característica e introdueixi més avall el número de dies, així per exemple si el día d'entrada està dins dels 60 dies, el dipòsit es carregarà per la totalitat de la reserva, en cas contrari la quantitat es basarà en les opcions de dipòsit configurades més amunt.");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "La majoría dels negocis recalcularan els preus del recurs basat en el número de recursos d'un tipus requerit que estan disponibles en la data donada. Això els permet oferir descomptes en un tipus de recurs/negoci que no està ocupat durant el período donat, amb l'avantatge d'atreure a negocis que d'una altra forma es podrien perdre.<br/> Activant i configurant aquest plugin podrà oferir preus ajustables en base al número de recursos d'un tipus escollit que estan disponibles en el negoci el día estipulat.<br/> L'umbral de dies, defineix el número de dies entre els que ha d'estar la data d'entrada abans de que els preus del recurs s'ajustin a aquesta característica, llavors les opcions de percentatges li permetràn configurar el percentatge de recursos que poden estar disponibles després de que se'ls apliqui un descompte donat. Fíxi's però que si múltiples recursos són reservats, el nivell actual de descompte s'aplicarà a tots els recursos i no es reduïrà a mesura que es seleccionin més recursos.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', "Umbral (número de dies entre la data d'entrada i avui.)");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Entrada pendent');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Entrada Avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Entrada realitzada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Sortides Avui');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Sortides Finalitzades');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'No ha entrat');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dies');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Marcar una reserva com entrada realitzada.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marcar com reserva retornada.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marcar una reserva com entrada reservada ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marcar una reserva com retornada');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per día: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Número de dies: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', "Anul·lació total d'Allotjaments");
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Guardar la Anul·lació');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', "Enviar als nous usuaris les seves dades d'accés?");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', "Si l'opció de crear nou usuari est marcada com Sí, pot canviar aquesta opció a No per assegurar-se de que no se'ls envia els seus detalls d'accés un cop que s'ha creat l'usuari. Això pot ser útil si està afegint automàticament usuaris a una llista de correu, per exemple, i no vol que els usuaris es loguejin.");
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Mostrar impostos en el resum de totals del formulari de reserva?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', "Evitar que el formulari de reserva mostre els camps d'impostos en el resum de totals marcant aquesta opció com NO.");
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Umbral de cancel·lació');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', "Conectat, els usuaris registrats poden cancel·lar les seves pròpies reserves. Aquí pot fixar l'umbral en dies, en els que la reserva no pot ser cancel·lada després d'un cert número de dies abans del día d'arribada.");
jr_define('_JOMRES_EDIT_PROFILE', 'Editar Perfil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'tipus de relació amb la propietat');
jr_define('_JOMRES_IMAGE', 'Imatge');
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Premi sobre una lletra per a mostrar tots els negocis que comencen per aquesta lletra. Un cop que té una llista de propietats pot assignar tases de comissió a aquestes propietats o prémer sobre els seus icones d'edició per a veure les estadístiques dels negocis.");
jr_define('_JRPORTAL_TAX_RATE_EDIT', "Editar percentatge d'impostos");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Editar camps personalitzats');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Clau de llicència del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Usuari de llicència del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', "Si vostè té un nom d'usuario i contrasenya en el servidor de llicència, si us plau introdueixi'ls. Això l'ajudarà a accedir als plugins als que està subscrit. Si ha ingressat una clau vàlida de suport en el camp de més avall, no és necessari insertar l'usuari i contrasenya aquí.");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Versió Actual de Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Última versió de Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alerta : Hi ha una nova versió de Jomres disponible, se li recomana actualitzar quan pugui.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Benvingut a Jomres, esperem que disfruti utilitzant el sistema de reserves preferit de Joomla. Si desitja comprar llicències de Jomres Plata u Or , <a href="http://www.jomres.net/prices" target="_blank"> Si us plau, visiti la nostra pàgina</a> per a obtenir informació sobre la millora.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', "Aquest sistema és ideal per a qualsevol escenari, pot ser un sistema simple de reserva d'una sola propietat fins un lloc amb múltiples usuaris, en diferents idiomes amb múltiples propietats. Sius plau vegi la secció \"Ayuda\" a l'esquerra, incluïnt la pàgina de \"Como començar\" que el pot ajudar amb els primers passos.");
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Propietat Activa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternatives de configuració SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Marqui aquesta opció com Sí per utilitzar configuracions de SMTP alternatives. Un creixent número d'allotjaments web sembla que estan bloquejant la funcionalitat de PHP mail, pel que pot escollir anul·lar les configuracions que Jomres adopta del seu allotjament CMS (joomla) i utilitzar les configuracions al seu gust. .");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Allotjament Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Canvïi això al seu servidor de mail SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Port alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'canviar això al seu port smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocol Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depenent de la seva configuració del seu servidor smtp, ha de deixar aquesta en blanc, o introduïr 'ssl' o 'tls'. Pregunti al seu proveïdor smtp si el desconeix.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Utilitzar autenticació');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "si el seu servidor smtp requereix que els clients es connectin marqui Sí. S'utilitzarà llavors el nom d'usuari i contrasenya..");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Usuari Alternatiu');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Contrasenya Alternativa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Informació Ràpida');
jr_define('_JOMRES_MENU_SHOW', 'Mostrar');
jr_define('_JOMRES_MENU_HIDE', 'Ocultar');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Per defecte');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Qualsevol');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrats');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Gestor');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Gesto');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ningú');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', "Menu de control d'Accés");
jr_define('_JOMRES_ACCESS_CONTROL_DESC', "Aquesta característica li permet controlar qui podrà veure un plugin en el menú principal. Les opcions 00009 són visibles pels usuaris registrats i no registrats, les 00010 normalment són per a les activitats de recepció que s'utlitzen habitualment en el dia a dia, les 00011 s'utilitzen per a definir i configurar una propietat però s'utilitzen menys.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepcionista');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Control d'Accés Total");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Marqui aquesta opció com Sí per activar la característica de control d'accés total, després visita l'opció de Control d'Accés a sota de Manteniment del sistema per poder configurar els controls d'accés.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Observi, però, que aquests ajustos no controlen els scripts subratllats als que connecten, així per exemple si assigna <i>00009user_option_03_search</i> al 'Gestor', un usuari que coneixi jomres pot encara fer una trucada a j06000search.class.php introduïnt http://www.domain.com/index.php?option=com_jomres&task=search en la seva barra de navegacions. Això es fa intencionadament, ja que aquest Control d'Accés a Menú simplement controla el que pot ser vist en el Menú Principal de Jomres. Si necessita controls més ajustats, marqui Si l'opció de Control d'Accés Total en la Configuració del Lloc i torni a entrar en el Menú de Control d'Accés .");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Control Total d'Accés");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Aquesta característica és per a usuaris avançats només. Si no sap per a què s'utilitza, i no té una raó específica per utilitzar-lo, si us plau torni a la configuració del lloc i marqui No en la casella de Control d'Accés Total.</strong><br/>
	Aquesta opció li permet controlar qui pot accedir als minicomponents (els qual amb alguna excepció estan insertats en el nucli dur del sistema). Si el nivell d'accés més pròxim al nom d'un script està fixat per defecte, llavors l'opcio de Control d'Accés Total estarà definit com Si <strong>qualsevol</strong> pote accedir als scripts que no podrien accedir i per tant, si pretens utilitzar aquesta funció HAS DE MARCAR el nivell de control d'accés per a <strong>tots</strong> els minicomponentes de Jomres llistats aquí. Si no sap el que fan aquests minicomponents, li recomanem encaridament que no utilitzi de ninguna manera aquesta funcionalitat.<br/>
	En Jomres, els nivells d'accés segueixen una piràmide, pel que els Super Managers són més grans que els Managers. En resum Super Manager>Manager>Recepcionista>Registrats>Sense Registre. Pel que si un usuari registrat té accés a un minicomponent, també el tenen el recepcionista, el manager i el super manager.<br/>
	Observi que no pot controlar l'àrea d'administrador dels minicomponents. Tot el món en el área d'administrador és considerat com un usuari de confiança i no se'ls impedeix l'accés a ningún script (especialment aquest).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Precaució! Té activat el control d'accés total, però hem tingut en compte les opcions del control d'accés i les hem comparat amb el número de minicomponents que han de ser controlats, i les dos no coincideixen, per tant deu tenir scripts que no estan sota control. Això pot ser un problema de seguretat i se li insta a resoldre'l urgentement visitant la característica de Control d'Accés i comprovar que els nivells apropiats han sigut aplicats.");
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Usuaris amb drets d'administració d'aquesta propietat");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'la seva direcció e-mail');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Paràmetres');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Força');
jr_define('_JOMRES_METATITLE', 'Meta títol');
jr_define('_JOMRES_METADESCRIPTION', 'Meta descripció');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Afegeixi la seva propietat : Pas 2 de 2');
jr_define('_JOMRES_CART_TITLE', 'Les meves reserves proposades');
jr_define('_JOMRES_CART_INFO', 'Observi, aquestes reserves encara no han sigut guardades. Si es desconecta o la seva sessió expira ese perdrà. Recordi confirmar les seves reserves!!!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmar reserva(s)');
jr_define('_JOMRES_CART_OR', ' o ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Guardar per a més tard');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'No té reserves guardades encara.');
jr_define('_JOMRES_CART_VIEWCART', 'Veure carret');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', "Subdirectori d'arxius d'idiomes");
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', "Punt d'inici de la Latitud per defecte");
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', "Punt d'inici de la Longitud per defecte");
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', "Quina ha de ser la longitud/latitud per defecte en el mapa de Google en la pàgina d'editar propietats, abans de que la marca hagia sigut moguda?");
jr_define('_JOMRES_SYSTEM_EMAILS', "Desde quina direcció s'envien els e-mails?");
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Deixi aquesta opció en blanc per a desactivar-la. Jomres utilitzarà la direcció(ns) de l\'hotel quan envïi emails als clients, però el seu servei d'email pot no acceptar emails desde direccions arbitràries (ex. només admeten mails d'una direcció autoritzada). En aquest cas pot utilitzar aquest camp per introduïr una direcció que s'introduïrà en el camp DESDE per a tots els emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Veure com llista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Veure com Foto');
jr_define('_JOMRES_COMPARE', 'Comparar');
jr_define('_JOMRES_REMOVE', 'Borrar');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Tornar als resultats de cerca');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Afegir a Llista resumida');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Borrar de llista resumida');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vegi la seva Llista resumida');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Política de Cookies');
jr_define('_JOMRES_COOKIEPOLICY_2', "Utilitzem cookies per ajudar a mantenir el nostre lloc relevant i fàcil d'utilitzar.");
jr_define('_JOMRES_COOKIEPOLICY_3', 'Llegir més...');
jr_define('_JOMRES_COOKIEPOLICY_4', "La legislació Europea requereix que totes les webs especifiquin clarament si s'uyilitzan cookies i el propòsit d'aquestes.");
jr_define('_JOMRES_COOKIEPOLICY_5', 'El motor de reserves i cerca de la pàgina necessita ser capaç de recordar les opcions que has escollit per poder treballar de la millor manera possible. Per això, necessita emmagatzemar informació que està associada a un petit arxiu anomenat "cookie" que únicament identifica el seu navegador, i per poder fer-ho, necessitem que accepte que podem utilizar-la. Si no accepta aquesta política de cookies llavors es veurà severament limitat en el que pot fer en la pàgina.');
jr_define('_JOMRES_COOKIEPOLICY_6', "Sí, accepto l'ús de cookies segons lo exposat.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'El dipòsit requerit és el cost de la primera nit?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Els preus es calculen en base a per nit. ¿Vol que el dipòsit sigui el càrrec per una nit?. Si és així, pot ignorar les següents opcions.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'No ha afegit cao article a la seva llista resumida.');
jr_define('_JOMRES_SAFEMODE', 'Activar mode segur?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Marqui Sí per canviar a mode segur. Desactivarà tots els plugins i Jomres només utilitzarà les funcionalitats del nucli.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'PEA');
jr_define('COMMON_NEXT', 'Següent');
jr_define('COMMON_CANCEL', 'Cancel·lar');
jr_define('COMMON_SUBMIT', 'Enviar');
jr_define('COMMON_SAVE', 'Guardar');
jr_define('COMMON_DELETE', 'Borrar');
jr_define('COMMON_RETURN', 'Tornar');
jr_define('COMMON_CLOSE', 'Tancar');
jr_define('COMMON_BACK', 'Endarrere');
jr_define('COMMON_HOME', 'Inici');
jr_define('COMMON_NEW', 'Nou');
jr_define('COMMON_SEND', 'Enviar');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', "Captcha s'utilitza per assegurar-se de que el cliente que utilitza els formularis web és humana, i s'utilitza per evitar que als gestors de la propietat els omplin de Spam robots d'internet. Per utilitzar el formulari de contacte de Jomres hauràs de registrar-te en <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> i configurar el teu domini per rebre la clau pública i privada. Quan rebia aquestes claus, si us plau introdueixi-les més avall. El servei reCapcha és gratuït i el proveeix Google.");
jr_define('RECAPTCHA_PUBLIC_KEY', 'Clau Pública');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Clau Privada');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', "Temps d'espera de bloqueig d'arxiu");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "Per evitar el perill de que els usuaris fagin una reserva doble, Jomres utilitza un fitxer de bloqueig per evitar que una habitació sigui afegida a la llista d'habitacions disponibles en el formulari de reserva si algú més ha afegit tal habitació al seu la mateixa data. Per defecte aquest bloqueih es desactivarà en 3600 segons o una hora. Pot canviar el temps d'aquest fitxer de bloqueig canviant aquesta casella.");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "'Activar les plantilles bootstrap de Jomres' i les seves funcionalitats?");
jr_define('COMMON_ACTION', 'Acció');
jr_define('COMMON_VIEW', 'Vista');
jr_define('BACKTOTOP', 'Tornar amunt');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Dèbil');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Fort');
jr_define('_JOMRES_INPUTFILTERING', "Filtrat d'Entrades");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Nivell de filtrat d'Entrades");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "La majoría de les dades introduïdes en el sistema es neteja primer traient les etiquetes html, després utilitzant la funcionalitat de filtrat de variables PHP per fer les dades més segures abans de que s'introdueixin en la base de dades. Vostè po voler permetre certes entrades (per exemple entrades de text en els detalls de pàgina de la propietat) per incluïr HTML. Hi ha dos nivells de filtrat que pot utilitzar en aquesta entrada, bé dèbil o fort. Només haurà d'utilitzar l'opció Dèbil si l'usuari que introdueix dades és de confiança, com companys administradors de sistema, d'altra manera ha de deixar aquesta opció com fort. Quan el marqui com fort (recomanat) pot especificar quines etiquetes permetre editant la següent opció 'Purificador HTML d'etiquetes permeses'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Etiquetes d'Entrada permeses");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Poy editar les etiquetes que el purificador de html acceptarà a través del seu sistema de filtrat. Per defecte són 'p,b,strong,a[href],i' (per ejemple. Pàrraf, Negreta, Marcat, Enllaços i Cursives). Per a més informació d'etiquetes permeses, si us plau llegeixi la documentació del purificador HTML en<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Pot canviar aquesta opció, però li recomanem que deixi la que ve per defecte.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Entrads permeses');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Pot definir quines entrades de formularis permetran html editant aquesta opció, qualsevol entrada afegida a aquesta llista serà analitzada a través del purificador HTML en lloc de tenir tot l'Html separat. Per defecte és: 'descripcio_propietat hores_entrada_propietat _activitats_area_propietat direccio_conduint_propietat aeroports_propietat altrestransports_propietat politiquesreclamacio_propietat'. Afegeixi més entrades afegint el seu nom de formulari separat per un espai.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Detalls de la propietat en pestanyes?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Marqui aquesta opció per mostrar els detalls de la propietat en pestanyes. Marqui No si les vol visualitzar sense pestanye.');
jr_define('COMMON_PRINT', 'Imprimir');
jr_define('COMMON_EDIT', 'Editar');
jr_define('COMMON_COPY', 'Copiar');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 inclou el bootstrap de twitter per defecte, i Jomres té plantilles i funcionalitats que utilitzaran aquestes plantilles. Per defecte si utilitza Homres en joomla 3 pot encara optar per utilitzar les plantilles Bootstrap de Jomres i les seves funcionalitats, però per defecte aquestes opcions estan marcades com NO.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Utilitzar plantilles Jomres Bootstrap en el frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Aquí estan algunes alternatives que potser vulgui considerar.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Auto-detectar el país dels clients?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'El sistema intentarà automàticament detectar el país dels clients si no ha reservat abans. Pot marcar aquesta opció No i definir quin país prefereix que apareixi per defecte en el formulari de reserva en la següent opció.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Sobre Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ajuda');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Com començar');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', "Control d'Accés");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Eines per a desenvolupadors');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'idiomes');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', "generació d'ingressos");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'estructura del lloc');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'El meu compte (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Funcionalitat del portal');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Gestor de plugins');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integració');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Informes/estadístiques');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ajuda');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Millores');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'mètodes de pagament');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarifa per defecte');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', "això només s'aplica a noves tarifes");
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Anys a mostrar');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', "Defineix el número d'anys a mostrar quan edita un tipus de tarifa.");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'rebuts');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'detalls de compte');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Accés');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Desconexió');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'buscar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'panell de control');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserva');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'factures');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Ajustos');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'miscel·lànea');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editar país');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id de país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Codi del país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nom del País');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editar Regió');
jr_define('_JOMRES_EDIT_REGION_ID', 'id de Regió');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Codi de la regió');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nombre de la región');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Llistar Paísos');
jr_define('_JOMRES_COM_LISTREGIONS', 'Llistar regions');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportar definicions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', "Aquesta característica li permet exportar les traduccions que han sigut creades utilitzant la característica de Traducció d'Idioma. Crearà un camp de text amb totes les dades requerides per construïr un nou arxiu d'idioma, tot el que has de fer és copiar i enganxar això en un nou arxiu d'idioma que pots posar en un nou servidor basat en Jomres, o si vols contribuïr a la comunitat Jomres.");
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Traduïr locals');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', "Traduïr les cadenes d'arxius d'idioma");
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, l'usuari amb el que estàs accedint no és un super usuari en Jomres, no podràs utilitzar aquesta característica fins que hagis utilitzat la funcionalitat de Mostrar Perfil per fer-te tant gestor i super gestor. Això és una funcialitat de seguretat.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Disseny per defecte del llistat de propietats');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Estància per un mínim de');
jr_define('_JOMRES_NIGHTSFOR', ' Nits per ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', "Detalls de l'Agent");
jr_define('_JOMRES_AGENT_LISTINGS', "Anuncis de l'Agent");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Aprovar automàticament noves propietats');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', "Si marca aquesta opció com No entonces haurà d'aprovar manualment les novas propietats. Fins que una propietat no sigui aprovada no podrà ser publicada per un Gestor/Super Gestor de la Propietat.");
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Aprovacions');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Aquesta Propiedad encara no ha siguto aprovada. Un cop que ho sigui seràs capaç de publicar-la.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Ho sentim, no pots publicar aquesta propietat ja que no ha sigut aprovada encara.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Una nova propietat requereix aprovació');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "S'ha afegit una propietat al sistema que requereix la seva aprobació. Premi sobre l'enllaç per a veure la llista de propietats pendents d'aprovació :  ");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'La seva propietat ha sigut aprovada');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Felicitats, la seva propietat ha sigut aprovada, si us plau premi el següent enllaç per veure el panell de control de la propietat : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Els noms de les regions són traduïbles');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Si no té un servidor molt ràpid li aconsellem deixar marcat aquesta opció com NO. Degut a l'ampli número de noms de regions, la traducció de tals noms ocupa una gran quantitat de memòria que pot ralentitzar els seus resultats de cerca.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Convidat reservat.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', "Ho sentim, aquesta adreça email ja es troba en ús. Si aquesta és la seva adreça email, si us plau assegúri's d'haver-se loguejat abans d'intentar reservar.");
jr_define('JOMRES_TAPTOCALL', 'Premi per trucar');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nova revisió per ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Una nova revisió ha sigut deixada per ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nou Informe');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Una nova revisió ha sigut informada per ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Paraules clau');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Escaneja aquest codi al telèfon per obtenir indicacions.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "El número d'IVA que heu introduït no sembla ser correcte. Hauríeu de tenir alguna cosa així: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Número d\'IVA no vàlid. Comproveu la validesa del vostre número d\'IVA amb el servei web de validació del número d\'IVA Europa (VIES)');
jr_define ("_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Enhorabona. Hem pogut validar el vostre número d'IVA.");
jr_define ('_JOMRES_TAX_RULES_LIST', 'Llista de regles fiscals');
jr_define ('_JOMRES_TAX_RULE', 'Regla tributària');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Les normes fiscals s\'utilitzen per establir diferents normes fiscals per a diferents regions. Aquestes normes fiscals afecten la persona que fa la reserva, si està registrada, ha iniciat la sessió i ha editat el seu compte mitjançant la pàgina "edita el meu compte" . El propòsit d\'aquestes normes és donar cabuda a les persones que reservin aquelles àrees exemptes d\'IVA, és possible que no necessiteu crear moltes regles, si n\'hi ha cap. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Importar taxes imposables');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', "Si voleu, podem importar-vos tipus impositius per a la UE. Tingueu en compte que, si utilitzeu aquesta funció, se suprimiran tots els tipus impositius existents.");
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Edita regla fiscal');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'El número d\'IVA d\'aquesta propietat.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Introduïu el número d\'IVA d\'aquesta propietat.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Número d\'IVA validat');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Número d\'IVA no validat.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Les dades comercials introduïdes aquí s\'utilitzaran a les factures de comissions i subscripcions.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Sembla que encara no heu omplert els detalls del compte. Per incloure la vostra propietat al lloc, necessitem que completeu els detalls del compte abans que puguem anar més enllà.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Producció o desenvolupament?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Si configureu aquesta opció a Desenvolupament, habilitarem l\'informe d\'errors; en cas contrari, quan estigueu desactivat a Producció. Si es tracta d\'un servidor actiu, us recomanem que configureu aquesta opció a "producció". ' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Producció');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Desenvolupament');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Detalls del recurs');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Detalls de la tarifa');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Només');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Funció de recursos');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', "No es pot eliminar aquesta característica de recurs, està assignada a un recurs. Traieu la característica d'aquest recurs i torneu-ho a provar.");
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Afegeix imatges');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Imatges de la sala');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Imatge principal de la propietat');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Imatges de presentació de diapositives');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Esborra llista');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Arrossega i deixa anar fitxers aquí');
jr_define ("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS", "Trieu el recurs per al qual voleu carregar imatges. Si podeu carregar imatges per a recursos individuals (per exemple, habitacions), se us proporcionarà un segon menú desplegable per triar el recurs específic.");
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Si pengeu diverses imatges com a "Imatge principal de la propietat", s\'utilitzaran a la llista de propietats. Les imatges de la presentació es mostraran a la pàgina de detalls de la propietat.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Veure la vostra imatge');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Suprimeix imatge');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Penja imatge');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Icones tipus d\'habitació');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Icones de característiques de propietat');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Penja tots els fitxers');
//8.0
jr_define ('COMMON_PREV', 'Anterior');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Avui');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Any');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Mes');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Setmana');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Dia');
jr_define ('_JOMRES_HLEGEND', 'Llegenda');
jr_define ('_JOMRES_HFILTER', 'Filtre');
jr_define ('_JOMRES_HFROM', 'De');
jr_define ('_JOMRES_HTO', 'To');
jr_define ('_JOMRES_HNEW_BOOKING', 'Reserva nova');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Estat de dipòsit');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Estat de convidat');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Estat de la reserva');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Estat de publicació');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Estat de la factura');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Tipus de factura');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Aprovat');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Empresa actual');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Mostra reserves de');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Mostrar factures per');
jr_define ('_JOMRES_STATUS_ANY', 'Qualsevol');
jr_define ('_JOMRES_STATUS_PAID', 'Pagat');
jr_define ('_JOMRES_STATUS_NOTPAID', 'No pagat');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Sortida');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Actiu');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Cancel·lat');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Publicat');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'No publicat');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Convidats amb reserves actives');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Convidats amb reserves anteriors');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Reserves');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscripcions');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Comissions');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Tots els meus negocis');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Estableix com a actual');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Fes una ullada');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'reserves');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'propietats');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'convidats');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'informes');
jr_define ('_JOMRES_HLIST_GUESTS', 'Convidats');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Llista de convidats');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Llista de factures');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Propietats');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Reserva ràpida');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Data de reserva');
jr_define ('_JOMRES_HTWO_WEEKS', 'Dues setmanes');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Aquesta reserva es cancel·larà. Premeu OK per cancel·lar la reserva.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Registres d\'avui');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Caixes d\'avui');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Residents actuals');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Ubicació de la barra de navegació');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Per defecte (àrea de contingut)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Barra de navegació invertida (canvi de color)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Número de reserva');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Mostrar convidats per');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Versió d\'arrencada');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres inclou els seus propis conjunts de plantilles, un per a cada versió compatible de Bootstrap. Les plantilles / temes de Joomla i Wordpress que es basen en Bootstrap oferiran una versió específica de Bootstrap, de manera que heu d'assegurar-vos que l'opció que trieu aquí és compatible amb la vostra plantilla / tema. Si el vostre tema no proporciona cap codi d'arrencada, configureu aquesta opció com a No hi ha cap arrencada al tema i Jomres inclourà automàticament fitxers Bootstrap 3 per al seu ús propi. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Mostrar convidats per');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Períodes fixats');
jr_define ('_JOMRES_HDEPOSITS', 'Dipòsits');
jr_define ('_JOMRES_HBOOKING_FORM', 'Formulari de reserva');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Camps obligatoris');
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
jr_define ('EXTENDED_CONFIGURATION', 'Configuració ampliada');
jr_define ('SIMPLE_CONFIGURATION', 'Configuració simple');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Característiques del recurs');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Tipus de recurs');
jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Edita el tipus de convidat');
jr_define ('_JOMRES_HEDIT_COUPON', 'Edita el cupó');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Edita extra');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Crea diversos recursos');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generar recursos');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Quants recursos?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Tipus de recursos');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Màxim convidats per recurs');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Voleu eliminar tots els recursos existents?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Tingueu en compte que actualment esteu visualitzant l\'àrea d\'administrador amb Configuració avançada del lloc configurada com a No. Si voleu veure més opcions, configureu Configuració del lloc -> Misc -> Configuració avançada del lloc a Sí.');
jr_define ('DATATABLES_SINFO', 'Mostrant _START_a _END_de _TOTAL_entrades');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Aprovació');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Rebutja la consulta de reserva');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Aprova la consulta de reserva');
jr_define ('_JOMRES_STATUS_APPROVED', 'Aprovat');
jr_define ('_JOMRES_STATUS_REJECTED', 'Rebutjat');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Consulta');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Les reserves requereixen aprovació o confirmació de disponibilitat?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Si s\'estableix en sí, quan es faci una reserva, no apareixerà als calendaris de disponibilitat (i la resta de convidats poden reservar aquests dies i recursos) fins que l\'administrador de la propietat accepti / confirmi la disponibilitat de la reserva . Un cop confirmada, la reserva s\'insereix com a provisional (si no anul·la altres reserves; els altres convidats ja no poden reservar les mateixes dates) i s\'envia un correu electrònic al client per fer el pagament. ');
jr_define ('_JOMRES_ERROR', 'Error');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Ho sentim! S\'ha produït un error en intentar processar aquesta funció. S\'ha informat de vosaltres i ho examinarem.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Missatge');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Fitxer');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Línia');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Plantilles de correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edita la plantilla de correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Assumpte del correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Text per correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Tipus de correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'Nom del correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'Descripció del correu electrònic');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Consulteu aquesta pàgina per obtenir ajuda per personalitzar els correus electrònics i una llista de la sortida disponible: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target ="_blank"> Ajuda de les plantilles de correu electrònic </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Adreça de correu electrònic de nova reserva de l\'administrador del lloc');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', "Correu electrònic enviat a l\'administrador del lloc quan es fa una nova reserva, si la passarel·la global de Paypal està habilitada");
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Correu electrònic de reserva nova de l\'hotel');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Correu electrònic enviat al propietari quan es fa una nova reserva');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Correu electrònic de reserva de convidat');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Correu electrònic enviat al client quan es fa una nova reserva');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Carta de confirmació de convidat');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Carta o correu electrònic imprimible que el propietari pot enviar manualment per confirmar la reserva');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Aquesta reserva es pot aprovar. Tots els recursos seleccionats estan disponibles per a les dates seleccionades.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Aquesta reserva no es pot aprovar perquè alguns dels recursos ja estan reservats per a les dates seleccionades. Primer haurà de modificar la reserva.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Mostra l\'enllaç Powered by Jomres al peu de pàgina de Jomres.');
jr_define ('GUEST_BUDGET', 'Pressupost');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Utilitzeu la funció Pressupost?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Només llocs arrencats! La funció Pressupost és una característica de la llista de propietats que un hoste pot utilitzar per ressaltar les propietats que tenen un preu per nit inferior a una xifra determinada. La funció té algunes limitacions en què podria no és adequat per a alguns llocs que utilitzen moltes monedes diferents. Tingueu en compte que si utilitzeu aquest complement i el complement Llistats destacats, la vostra classe d'ajust de llistes destacades es canviarà automàticament a \"panell-principal\" quan es mostri la llista de propietats. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nom:');
jr_define ('_JOMRES_FOR', 'Per');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'nit');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nits');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Utilitzeu el desplaçament directe / Desplaçament continu a la llista de propietats?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'Maig');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'Set');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define ('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Mostrant de _START_a _END_de _TOTAL_registres');
jr_define('DATATABLES_SINFOEMPTY', 'Mostrant de 0 a 0 de 0 registres');
jr_define('DATATABLES_SINFOFILTERED', '(filtrat de _MAX_total registres)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', 'Mostra _MENU_registres');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Processant...');
jr_define('DATATABLES_SSEARCH', 'Filtrar:');
jr_define('DATATABLES_SZERORECORDS', "No s'han trobat registres.");
jr_define('DATATABLES_SFIRST', 'Primer');
jr_define('DATATABLES_SLAST', 'Últim');
jr_define('DATATABLES_SNEXT', 'Següent');
jr_define('DATATABLES_SPREVIOUS', 'Anterior');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'Canvia columnes');
jr_define ('_BOOKING_ONREQUEST', 'Reserva a petició');
jr_define ('_BOOKING_INSTANT', 'Reserva instantània');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Inclou el conjunt d\'icones de tipus de lletra impressionant?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Estableix-ho en Sí si la plantilla no inclou Font Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'Sol·licita reserva');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Benvolgut');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Selecciona un lloc');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Identificador del lloc');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'País de la UE?');
jr_define ('_JOMRES_HLASTCHANGED', 'Última modificació');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Correu electrònic de cancel·lació de reserva d\'hotel');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Correu electrònic enviat al propietari quan es cancel·la una nova reserva');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Correu electrònic de cancel·lació de la reserva de convidats');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Correu electrònic enviat al client quan es cancel·la una nova reserva');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Enviar correu electrònic de prova');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Prova de correu electrònic');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Aquest és un correu electrònic de prova del vostre sistema de reserva.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Missatge de prova enviat correctament');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'El correu electrònic de prova no s\'ha enviat');
jr_define ('_INVOICE_TRANSACTIONS', 'Transaccions');
jr_define ('_OPENEXCHANGE_API', 'Clau API API de tipus de canvi obert');
jr_define ('_OPENEXCHANGE_API_DESC', 'Per convertir preus entre serveis, necessitareu una clau API de tipus d\'intercanvi obert. Necessiteu tenir una clau API per mostrar els preus correctament a Jomres, però podeu <a href = "https://openexchangerates.org/signup/free" target ="_blank"> registreu-vos per obtenir una clau gratuïta </a> (actualitzacions per hora, 1000 sol·licituds al mes, sense HTTPS, assistència de correu electrònic ni funcions avançades). Jomres descarrega els tipus de canvi un cop al dia sempre que només utilitzeu la clau en un grapat de llocs, és probable que no supereu aquests límits. Anteriorment a Jomres 8.3, hem utilitzat una funció de Yahoo antiga i sense papers, però hem descobert que utilitzar aquesta funció és en contradicció amb els termes i condicions de Yahoo. Condicions. Com a resultat, hem de suposar que la característica pot desaparèixer en algun moment del futur, d’aquí el canvi a l’ús de tipus de canvi oberts. ');
jr_define ('_JOMRES_COMMISSION', 'Commission');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Si pengeu diverses imatges per a extres opcionals individuals, només s\'utilitzarà la primera imatge.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Paga ara');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Aquesta factura està pendent. Feu clic al botó per seleccionar la forma de pagament.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Aquí teniu una llista d'algunes coses fantàstiques que podeu comprar mentre feu una reserva en aquesta propietat.");
jr_define ("GATEWAYS_INSTRUCTIONS", "En aquesta pàgina podeu configurar qualsevol passarel·la instal·lada. Aquestes opcions us permeten fer pagaments per a qualsevol factura de comissió o subscripció. Els paràmetres de frontend només poden ser anul·lats per Paypal, la resta de passarel·les hauran de configurar-se mitjançant el Configuració de la propietat -> pestanya Passarel·les, però, si apareix una passarel·la en aquesta llista, hauria de ser capaç de processar tant els pagaments de dipòsits de reserva com els pagaments de factures. ");
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Mostrar a la pàgina de detalls de la propietat?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Configuració de la pàgina Detalls de la propietat');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'La gestió de propietats a Jomres només es fa des del panell frontal del lloc. En aquesta pàgina podreu llistar totes les propietats del sistema, de manera que podeu assignar tarifes de comissions i aprovar-les / aprovar-les (si aquestes les funcions estan habilitades). Per crear una propietat nova, editar-ne d’altres ja existents, gestionar les reserves o qualsevol altra tasca relacionada amb la propietat o les reserves, haureu d’iniciar sessió al frontend del lloc i anar a la pàgina predeterminada de Jomres. Allà veureu Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Icones de funcions de l\'habitació');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Categories de funcions de propietat');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edita la categoria de funcions de propietat');
jr_define ('_JOMRES_HCATEGORY', 'Categoria');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', '¿Mostra les característiques de la propietat separades en categories?');
jr_define ("_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC", "Establiu-ho en SÍ per separar les característiques de la propietat en categories. Aquesta opció només afecta les funcions de propietat que es mostren a la pàgina de detalls de la propietat. La resta de pàgines les mostraran sense dividir-les en categories.");
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Desfer checkin');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Desfés el pagament');
jr_define ('_JOMRES_STATUS_UNISSUED', 'No publicat');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'La vostra clau de descàrrega i suport és vàlida, podreu descarregar connectors mitjançant el gestor de connectors.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'La vostra clau de descàrrega i suport NO és vàlida, NO podreu descarregar connectors mitjançant el gestor de connectors.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Subtipus');
jr_define ("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "Encara no heu definit el subtipus de la vostra propietat. Aquí és on el definiu com una casa de cinc habitacions o una casa rural de 4 habitacions i ajuda els clients que cerquen a refinar les seves cerques.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Doneu a la vostra propietat un subtipus');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Plantilles de correu electrònic');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Configuració de contacte');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Des d\'aquí podeu anul·lar totes les dades de contacte de les propietats (correu electrònic, telèfon, fax), de manera que tota la comunicació amb els convidats us serà enviada i no als propietaris.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Voleu anul·lar les dades de contacte de les llistes?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Si aquesta opció s'estableix en Sí, les adreces de correu electrònic i els números de telèfon de la propietat se substituiran pels que es defineixen en aquesta pestanya. Això obliga a enviar totes les comunicacions a la vostra adreça de correu electrònic designada per garantir que el client i la propietat el propietari no pot passar per alt el motor de reserva i les comissions que se’n derivaran. També vol dir que cada vegada que es canviï la descripció d’una propietat, s’establirà com a No aprovada (si la funció d’aprovacions està activada) i haureu de comprovar-la manualment. per assegurar-se que els gestors no hagin introduït dades de telèfon o correu electrònic als camps de text abans d'aprovar-los de nou. ");
jr_define ("_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Els canvis realitzats als detalls de la llista requereixen verificació de l'administrador del lloc. Si deseu els detalls nous, la vostra fitxa no serà publicada i quedarà pendent l'aprovació de l'administrador del lloc abans de tornar a ser visible per als visitants del lloc. No podreu rebre en línia reserves mentre la vostra fitxa no s'ha publicat i està pendent d'aprovació.");
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Revisa la sol·licitud de reserva');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirmar sol·licitud de reserva');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Modificar sol·licitud de reserva');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Marca la factura com a pendent');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Factura marcada com a pendent');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Voleu enviar dades de seguiment anònimes?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Seleccioneu Sí per enviar dades de seguiment anònimes a Jomres.net per ajudar-nos a entendre millor com utilitzeu el sistema.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Assegureu-vos que les vostres dades s\'han completat a la pàgina Edita el meu compte abans d\'intentar fer reserves en nom dels vostres clients.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Dades de contacte del convidat");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', '- Nou convidat -');
jr_define ('_JOMRES_CHARTS', 'Gràfics');
jr_define ('_JOMRES_CHARTS_SELECT', 'Selecciona gràfic ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Ingressos per any / mes');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "D'acord, comencem. Primer heu de crear algunes habitacions per a aquesta propietat.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Crea algunes habitacions ara');
jr_define ("_JOMRES_IMAGES_EXIST_SANITY_CHECK", "La investigació ha demostrat que les propietats amb moltes imatges d'alta qualitat generen més visualitzacions. Pengeu una imatge principal i algunes imatges de presentacions de diapositives per millorar les vostres possibilitats de fer reserves.");
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Penja una imatge');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Crea algunes tarifes');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Què reservaran els hostes?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', "Aquest tipus de propietat és una propietat tipus hotel, on es lloguen habitacions a la propietat o una propietat tipus xalet, on es lloga tota la propietat en una reserva?");
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Habitacions a la propietat');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'La propietat sencera');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Tots dos'); // Aquest és un paràmetre provisional que proporciona compatibilitat amb els usuaris existents que encara no han actualitzat els seus tipus de propietats. No es podrà seleccionar
jr_define ("_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Què reservaran els hostes?");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Haureu de completar les dades de l'adreça perquè els vostres convidats us puguin trobar quan vinguin a quedar-se.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Actualitzeu la vostra adreça');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Vaja, sembla que hauríeu oblidat completar tots els camps.');
jr_define ('_JOMRES_CONTANT_US', 'Contacteu amb nosaltres');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Benvingut a la vostra nova fitxa en línia de');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hola i benvingut a la vostra nova propietat a');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Recentment heu afegit una propietat nova al nostre lloc web i ens agradaria donar-li la benvinguda a la família.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Podeu veure el vostre nou tauler');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'aquí');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Un cop hàgiu configurat la vostra propietat, podreu veure com es veu als visitants del lloc visitant");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'la vostra pàgina principal');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(no està publicat, de manera que els visitants del lloc encara no el poden veure).");
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_6", "A la part superior de la pàgina veureu diversos missatges. Els botons que hi ha al costat d'aquests missatges us guiaran a les pàgines que heu de visitar per configurar la vostra propietat al nostre lloc. Un cop hàgiu definit He realitzat cadascuna d'aquestes tasques, serà més fàcil per als visitants del nostre lloc trobar la vostra propietat i fer reserves en línia. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Si teniu alguna pregunta, si us plau');
jr_define ("_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "contacteu amb nosaltres");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "i estarem encantats de respondre a totes les vostres preguntes.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Tot el millor, el nostre equip a');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Sembla que no teniu cap excursió per vendre. Creeu un perfil de la visita i, a continuació, utilitzeu el botó Genera per crear algunes visites.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Creem algunes excursions!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Canvia la ubicació del símbol de moneda');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Utilitzeu aquesta opció per moure el símbol de moneda des de darrere de, al davant de la xifra de preus, o viceversa.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Introduïu l\'identificador de la vostra pàgina de facebook, per exemple "jomres". Deixeu-ho en blanc per no mostrar res. No introduïu https://www.facebook.com ni res més.');
jr_define ('COMMON_DOWNLOAD', 'Descarregar');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'A continuació, haureu d\'afegir algunes tarifes. Aquests són els vostres preus bàsics.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap no està habilitat!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Atenció, no teniu habilitat Bootstrap a la configuració del lloc de Jomres -> pestanya Misc. Tanmateix, no s\'han treballat en alguns anys. Tot el desenvolupament i les millores actuals de les plantilles Jomres (fitxers de disseny) es fan als fitxers de plantilla Bootstrap 3. Per treure el màxim profit de Jomres, us recomanem que instal·leu un Bootstrap 3 basat en tema per a Wordpress o Joomla. Un cop fet això, podeu habilitar les plantilles de Bootstrap de Jomres a la configuració del lloc. ');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'La vostra clau d\'assistència és vàlida. Tingueu en compte que aquesta llicència no permet la descàrrega de connectors.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Arrossegueu les reserves a aquesta àrea per cancel·lar-les');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Assegureu-vos que heu creat una pàgina de WordPress que contingui el codi curt [jomres: xx-XX] (on xx-XX és el codi d\'idioma del lloc, per exemple [jomres: en-GB] o [ jomres: ca-US]) en cas contrari, no podreu accedir a Jomres des del frontend per gestionar les vostres propietats i reserves.');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Abans de poder crear un tipus d'habitació, hem de saber si es tracta d'una propietat tipus hotel o d'una propietat tipus vila.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Feu clic per afegir nous tipus d\'habitació');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Atenció, teniu un o més tipus de propietat sense tipus d\'habitació. Les propietats necessiten tipus d\'habitacions perquè els administradors de propietats puguin crear tarifes.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Utilitzeu el botó Nou per crear nous tipus d\'habitacions.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Sense reserves / Béns immobles (llistat senzill)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Ubicació del fitxer de registre');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres registra l\'activitat del sistema per defecte a la ubicació' .JOMRES_SYSTEMLOG_PATH. "Com que aquest fitxer pot contenir informació confidencial (claus API, rutes del sistema, informació de la passarel·la, informació dels convidats), us recomanem que canvieu aquest camí a un que hi ha a sobre de l'arrel del vostre document web. Si no enteneu què vol dir això, demaneu consell als vostres amfitrions, ja que coneixeran el vostre sistema de fitxers. ");
jr_define ("_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres registra informació detallada sobre el vostre sistema, incloses les claus API, camins del sistema, passarel·la i informació de convidats, que no haurien de ser visibles a la resta d'Internet. El vostre camí de registre del sistema no està definit, de manera que els registres del sistema s'estan desant actualment al directori ".JOMRES_SYSTEMLOG_PATH.", que no és ideal. Visiteu Configuració del lloc -> Depuració i configureu un camí al vostre sistema de fitxers que no sigui de l'arrel web. Si teniu dubtes, poseu-vos en contacte amb els vostres amfitrions web. ja que us podran assessorar. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Si el vostre CMS està instal·lat al directori arrel del vostre lloc web, hi hauria una ubicació adequada');
jr_define ("_JOMRES_CONFIG_GMAP_KEY_WARNING", "No teniu cap conjunt de claus de Google Maps. A causa dels canvis recents a Google Maps, tots els llocs nous necessitaran una clau API per poder utilitzar les funcions de Google Maps. <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank'> consulteu la nostra pàgina de manual sobre com crear una clau API < / a> i deseu la clau a Jomres. ");
jr_define ("JOMRES_GOOGLE_MAP_STYLE", "Esquema de colors del mapa de Google");
jr_define ("JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE", "Bé, comencem a afegir la vostra propietat al lloc web. Hem de recopilar una mica d'informació sobre la vostra propietat aquí. Això ens permetrà configurar els ossos de la vostra propietat. Un cop fet això, llavors Es guiarà afegint habitacions, preus i imatges. ");
jr_define ("JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1", 'El tipus de propietat us ajuda a definir com es reservarà la propietat, per exemple, amb hotels que\' veneu \'només una o dues habitacions a la vegada, mentre que amb les vil·les oferiu tota la propietat.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Tingueu en compte que l'adreça de correu electrònic no ha de ser la mateixa que vau fer servir per registrar el vostre compte. Això us permet tenir adreces diferents per a diferents propietats.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Dipòsit mínim');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Podeu configurar l\'import mínim del dipòsit que s\'ha de carregar. Si ho feu, llavors no es poden configurar els paràmetres "El dipòsit requerit és el cost de la primera nit?" i "El dipòsit requerit és el percentatge?" , en canvi, tots els valors de dipòsit són un percentatge i han de ser com a mínim la xifra que definiu aquí. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Aquesta xifra no pot ser inferior a');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Port Syslog');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Si voleu enviar missatges de registre del sistema a un servidor syslog, podeu establir aquí el nom de l'amfitrió o l'IP (per exemple, 192.168.0.2) i el port (per exemple, 514). Tingueu en compte si el lloc està configurat a\" Desenvolupament \"s'enviaran missatges DEBUG. Si s'estableix a\" Producció \", només s'enviaran missatges de nivell INFO i missatges superiors. Per desactivar el registre al servidor remot, buideu els camps de l'amfitrió i del port.");
jr_define ("_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED", "PHP no té permís per accedir a les funcions PHP\" openlog \"i\" syslog \". Aquesta és una configuració del servidor, si voleu que Jomres enviï missatges a un servidor syslog, consulteu els vostres amfitrions i confirmeu si PHP té permís per accedir a aquestes funcions. Un cop activat, podreu configurar la configuració del servidor syslog aquí. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Enviar un correu electrònic a l\'administrador del lloc quan es produeixi un error?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Històricament els problemes que s'haurien d'investigar s'han enviat per correu electrònic als propietaris del lloc. Això pot ser fantàstic per vigilar el funcionament del vostre sistema, ja que té una gran quantitat de parts mòbils i és difícil fer un seguiment de Malauradament, les aranyes i els robots que rastregen els vostres llocs (fins i tot els que són amigables) poden desencadenar erròniament errors fatals i això pot fer que el nombre de missatges que rebeu sigui aclaparador. Si és el cas, configureu aquesta opció a No. Jomres envia registre missatges a un conjunt de fitxers de registre i a un servidor syslog (si la vostra configuració específica de PHP ho permet, si no us plau poseu-vos en contacte amb el vostre amfitrió). Podeu analitzar manualment els fitxers si cerqueu alguna cosa específica (per exemple, si esteu desenvolupant una passarel·la i voleu fer servir la trucada a la funció gateway_log ().), però hi ha molta informació que cal arrossegar, de manera que és millor fer servir un analitzador de fitxers syslog. Si esteu desenvolupant a Linux, hi ha un munt d’eines disponibles, si al Windows, una eina senzilla que podeu utilitzar és http://maxbelkov.github.io/visualsyslog/. En aquesta pàgina, configureu l’amfitrió Syslog a 127.0.0.1 i Port 'a 514 per veure els missatges connectats a aquesta eina. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Gestiona propietats');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "No teniu cap conjunt de claus API de detecció d'IP. Això és necessari per permetre al sistema detectar automàticament la ubicació de l'usuari i configurar la seva moneda i país automàticament. Si us plau, <a href = 'http://www.jomres.net / manual/site-managers-guide/35-panel-control/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> consulteu el nostre manual pàgina sobre com crear una clau d'API de detecció d'IP </a> i desar-la a Jomres> Configuració del lloc> Conversions de moneda / Codis de moneda. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "No teniu un conjunt de claus API de tipus d'intercanvi obert. Això és necessari per permetre que el sistema baixi i utilitzi automàticament els tipus de canvi de moneda. Si us plau, <a href = 'http://www.jomres.net/manual/site-managers-guide/35-panel-control/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab ' target ='_blank'> consulteu la nostra pàgina de manual sobre com creeu una clau d'API de detecció d'IP </a> i deseu-la a Jomres> Configuració del lloc> Conversions de divises / Codis de divises. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Número de permís');
jr_define ("_JOMRES_PERMIT_NUMBER_DESCRIPTION", "Alguns països estableixen que heu de mostrar un número de permís per a la vostra propietat. Si en teniu, introduïu-lo aquí i s'afegirà a la secció de capçalera de la propietat.");
jr_define ('_JOMRES_SHORTCODES', 'Codis curts');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "El connector <strong> plg_content_jomres_asamodule_mambot </strong> EL Jomres Asamodule Mambot s'ha d'instal·lar i habilitar perquè aquests codis curts funcionin. Es pot trobar al Gestor de connectors Jomres. Si aquest lloc es va crear amb un de Quickstarts, probablement ja estigui instal·lat. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Heu d'assegurar-vos que el connector <strong> 'Jomres Shortcodes' </strong> estigui habilitat. Es pot trobar al Gestor de connectors de Jomres. Si aquest lloc es va crear amb un dels inicis ràpids, probablement sigui ja instal·lat. ");
jr_define ('SHORTCODE_TASK', 'Tasca');
jr_define ('SHORTCODE_DESCRIPTION', 'Descripció');
jr_define ('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define ('SHORTCODE_EXAMPLE', 'Exemple');
jr_define ('INTEGRITY_CHECK', 'Comprovació d\'integritat del sistema de fitxers');
jr_define ("INTEGRITY_CHECK_DESC", "Aquesta característica us permet comprovar que el sistema de fitxers coincideix amb el subministrat a la versió actual de Jomres. Això és útil per assegurar-vos que tots els fitxers s'han actualitzat correctament després de la instal·lació / actualització. Falten fitxers en vermell, hi ha fitxers a Les taronges existeixen però són diferents de les subministrades a la versió actual. Només es mostraran aquí els fitxers que tinguin problemes potencials. ");
jr_define ('INTEGRITY_CHECK_FILENAME', 'Comprovació d\'integritat del sistema de fitxers');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Hash local');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Versió hash');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Increïble! No s\'han trobat problemes.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Marcador de Google Maps');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Llegir més');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Llegir menys');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Impost turístic');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Tipus d\'impostos turístics');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Estableix la taxa de l\'impost turístic. L\'impost turístic només es calcula després de generar la reserva inicial i s\'afegeix a la pàgina de confirmació de la reserva, al quadre de serveis addicionals.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'És percentatge?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Establiu-ho a Sí si l'impost és un percentatge o No si es tracta d'una tarifa plana.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', "Afecta tot el valor de la reserva?");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Establiu-ho a Sí si l'impost vol cobrir tot el valor de la reserva, de manera que és un percentatge de l'allotjament més els extres, o No si només es calcula basant-se només en el valor de el total de l'allotjament. Si l'opció 'És percentatge' anterior es defineix en No, aquesta opció s'ignora. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Tingueu en compte que s\'afegirà un impost turístic a aquesta reserva. Podreu veure l\'impost a la pàgina de reserva de ressenyes.');
jr_define ('NO_LICENSE_MESSAGE', "No heu desat cap número de llicència a la configuració del lloc, per tant no podreu descarregar connectors. Un cop tingueu una clau de llicència vàlida, podreu instal·lar els connectors que figuren com a Connectors bàsics. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Sembla que utilitzeu un número de llicència que no és vàlid o ha caducat. Quan tingueu una clau de llicència vàlida desada, podreu instal·lar els connectors que figuren com a connectors bàsics.");
jr_define ('VALID_LICENSE_MESSAGE', "Enhorabona, utilitzeu un número de llicència vàlid i podeu instal·lar connectors bàsics mitjançant el gestor de connectors Jomres.");
jr_define ("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP", "Aquesta pàgina us permet carregar imatges per a la vostra propietat i les coses que oferiu. Té un botó principal i un segon botó que us permet seleccionar recursos específics per carregar imatges. Per tant, la propietat Principal image i la presentació de diapositives només mostraran un botó, però si heu creat algun, per exemple, extres o habitacions opcionals, veureu un segon botó on podeu penjar imatges d'aquests recursos específics.");
jr_define ("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP", "Aquesta pàgina us permet carregar imatges per a la vostra propietat i les coses que oferiu. Té un botó principal i un segon botó que us permet seleccionar recursos específics per carregar imatges. Per tant, la propietat Principal la imatge i la presentació de diapositives només mostraran un botó, però si heu creat alguns extres opcionals, veureu un segon botó on podeu penjar imatges d'aquests recursos específics. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Primer, trieu les imatges que vulgueu penjar fent clic a Afegeix una imatge o fent arrossegar i deixar anar. Aquests apareixeran a la columna de la part dreta. </li>
  <li> A sobre d'aquesta àrea, utilitzeu el botó \"Tria el recurs \" per triar per a quin recurs voleu penjar imatges. És possible que se us ofereixi l'opció de triar un recurs específic a sota. </li>
  <li> Un cop hàgiu triat un recurs, podeu fer clic al botó Carrega imatge que hi ha a sota d’una imatge per associar-lo a aquest recurs. Un cop s'hagi penjat una imatge, desapareixerà de la columna del lloc de la dreta i apareixerà a l'esquerra. </li>
  <li> Utilitzeu el botó Paperera al costat de les imatges existents per eliminar les imatges que ja no vulgueu que es mostrin. </li>
  <li> Podeu canviar l'ordre en què es mostren els fitxers a la presentació de diapositives canviant-ne el nom abans de penjar-los, ja que es mostren a les pàgines en ordre alfabètic. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Al costat del botó de recurs, podeu veure un botó de vista prèvia. Si feu clic a sobre, veureu una finestra emergent que us mostrarà les imatges carregades actualment en una pàgina. Això us ajudarà a obtenir una idea de com quedaran les imatges per als vostres clients. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "No hi ha límit per al nombre d'imatges que podeu penjar. Les imatges es redimensionen automàticament quan es carreguen. Només podeu carregar fitxers JPG i PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealment qualsevol imatge que pengeu seria com a mínim");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "píxels d'amplada, en cas contrari poden semblar difusos després de carregar-los.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Les imatges que pengeu no poden superar");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "de mida");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Trieu el recurs per al qual voleu penjar imatges");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurs específic");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imatges ja carregades per a aquest recurs");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Format de text');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Podeu introduir text aquí mitjançant un format de Markdown senzill. No necessiteu conèixer cap HTML, només cal que utilitzeu els botons per fer que la informació sembli tal com vulgueu o formatar text d\'acord amb aquests exemples.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Èmfasi');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'negreta');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'cursiva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'ratllat');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Capçaleres");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Capçalera gran');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Capçalera mitjana");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Capçalera petita');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Capçalera minúscula');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Llistes");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Element de llista genèric');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Element de llista numerat');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Enllaços');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Text a mostrar');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Cites');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Aquesta és una cita.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Pot abastar diverses línies!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Imatges');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Taules');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Columna');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mostrar imatges de propietats com a presentació de diapositives a la llista de propietats?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Si s\'estableix en sí, es mostrarà una presentació de diapositives de les imatges principals de la propietat. Si s\'estableix en no, es mostrarà la primera imatge principal de la propietat.');
jr_define ('EDIT_CMS_USER', 'Edita l\'usuari CMS');
jr_define ('BOOKING_MADE_BY', 'Reserva feta per');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Serveis');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Tipus d\'habitacions');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL del formulari de reserva extern');
jr_define ("_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC", "Aquí podeu establir un URL extern si voleu fer servir un lloc web de tercers per fer reserves. Tots els botons de reserva de jomres apuntaran a aquest URL. Deixeu aquest camp en blanc si voleu utilitzar el formulari de reserva de Jomres .");
jr_define ('_JOMRES_ROOM_TAGLINE', 'Lema (descripció de la sala curta / subtítol)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Descripció de l\'habitació');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Llista negra de convidats');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Si aquest hoste apareix a la llista negra, ja no podrà fer reserves en aquesta propietat.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Gestor de sessions');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Desa els fitxers de sessió de jomres al disc o a la base de dades. Recomanat: base de dades');
jr_define ('_JOMRES_MAP_HEIGHT', "Alçada del mapa (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Nivell de zoom del mapa");
jr_define ('_JOMRES_MAP_MAPTYPE', "Tipus de mapa");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Administrador de substitució de plantilles");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Els paquets de plantilles són connectors que poden proporcionar plantilles de substitució per a diversos fitxers de plantilla Jomres bàsics.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Aquesta pàgina llista tots els fitxers de plantilla que puguin anul·lar els fitxers de plantilla d'un paquet de plantilles. Si voleu substituir un determinat fitxer de plantilla, feu clic al botó d'edició d'aquest fitxer, a la pàgina següent apareixerà podeu escollir amb quina versió voleu anul·lar. Tingueu en compte que aquestes substitucions tenen prioritat tant sobre Jomres Core com sobre qualsevol tema / plantilla de Wordpress o Joomla. Podeu desactivar una substitució suprimint-la a la pàgina Anul·lacions de plantilles de llista. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nom de la plantilla");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Camí actual");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "No s'ha substituït");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Podeu triar quin fitxer de plantilla voleu substituir els fitxers de plantilla bàsics canviant el menú desplegable");
jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentatge d'habitacions reservades");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentatge d'habitacions reservades");
jr_define ('_JOMRES_SELECT_WIDGETS', "Selecciona ginys");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Cronologia");
jr_define ('_JOMRES_CPANEL_GRID', "Disseny inicial del tauler de control");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Seleccioneu el disseny de la quadrícula de la pàgina d'inici del tauler de control de gestió de propietats del frontal.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Marcadors de mapes de Google");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Imatges de la ciutat");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Si canvieu el tipus de propietat, se suprimiran totes les habitacions, les tarifes, la configuració de la propietat i es restablirà la disponibilitat.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Tingueu en compte que, després d\'actualitzar, heu d\'actualitzar els connectors Jomres que ja estiguin instal·lats a través del gestor de complements Jomres. Si teniu instal·lats connectors Core, però no teniu una llicència Jomres vàlida, llavors <em> ho fem no </em> recomanem que actualitzeu Jomres, ja que els connectors antics sovint no funcionen amb versions més recents de Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Tingueu en compte que, després d\'actualitzar, haureu d\'actualitzar els connectors Jomres que ja estiguin instal·lats a través del gestor de connectors Jomres.');
jr_define ("_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS", "Si voleu actualitzar Jomres i els seus connectors, necessitareu una llicència de renovació. Visiteu <a href='https://www.jomres.net/pricing' target='_blank'> el nostre site </a> per obtenir més informació. En la majoria dels casos, aquestes llicències representen el 50% del preu d'una llicència completa. Assegureu-vos que hàgiu iniciat la sessió a la nostra botiga abans d'intentar comprar una renovació. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Forma de pagament:");

jr_define ('_JOMRES_PRICES', "Connecteu-vos");


jr_define ('_OAUTH_TITLE', "Gestió de claus d'aplicacions");
jr_define ('_OAUTH_APPS', "Detalls del client de l'API REST");
jr_define ('_OAUTH_IDENTIFIER', "Identificador");
jr_define ('_OAUTH_APIKEY', "Identificador de client");
jr_define ('_OAUTH_SECRET', "Secret");
jr_define ('_OAUTH_CREATED', "Aplicació creada / actualitzada");
jr_define ('_OAUTH_CLIENT_ID_INFO', "L'identificador de client i el secret es creen per a vosaltres. L'identificador és perquè pugueu identificar fàcilment aquest parell de claus.");
jr_define ('_OAUTH_SCOPE_TITLE', "Permisos (què pot fer el client)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Permisos d'usuari");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Permisos de propietat");

jr_define ('API_DOCUMENTATION_TITLE', "Documentació de l'API REST de l'aplicació");

jr_define ('_OAUTH_CONFIG', "Configuració bàsica de l'API");

jr_define ('_OAUTH_CONFIG_SHOW', "¿Mostra les opcions de configuració del client API al menú principal de Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Podeu optar per no mostrar les opcions de configuració del client API a la secció\" El meu compte \"del menú principal de Jomres. En lloc d'això, podríeu decidir que voleu mostrar-les en altres pàgines mitjançant codis curts de Jomres.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Mostra la pàgina de documentació bàsica de l'API. El nucli API permet als usuaris crear clients API, que després s'utilitzen per accedir a la funcionalitat API que es descriu a la documentació bàsica API.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Mostra la pàgina d'administració principal de l'API, on els administradors de propietats poden configurar els clients de l'API. Tingueu en compte que es tracta d'una característica només per a usuaris registrats, de manera que els usuaris han d'estar registrats i iniciar la sessió abans de poder veure aquesta pàgina.");

jr_define ('API_METHODS_TITLE', "Mètodes API");
jr_define ("API_METHODS_DESCRIPTION", "Aquesta llista de mètodes es basa en els connectors de funcions d'API instal·lats i es genera automàticament. Si instal·leu o suprimiu un connector de funcions d'API, heu de visitar aquesta pàgina per reconstruir aquesta llista de mètodes d'API disponibles al vostre lloc. ");

jr_define ('_OAUTH_REDIRECT_URI', "URI de redirecció");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Doneu-me un nom que sigui significatiu per a vosaltres, com ara El meu telèfon");

jr_define ("_OAUTH_GRANT_TYPES", "Aquest sistema admet dos tipus de concessió, credencials de client i implícit. Si utilitzeu el flux <em> client_credentials </em>, necessitareu tant l'identificador de client com el secret del client. Si utilitzeu <em > implícit </em>, la vostra aplicació només enviaria l'identificador de client i inicieu la sessió al sistema per autoritzar explícitament aquesta aplicació. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Per utilitzar el flux de tipus de concessió <em> implícit </em>, haureu d'utilitzar aquesta url per autoritzar les vostres aplicacions. Quan es cridi aquesta URL i hagueu autoritzat l'aplicació, el sistema emetrà un testimoni que les vostres aplicacions utilitzaran per anomenar l'API d'aquest sistema ");
jr_define ('_OAUTH_AUTHORISATION_URL', "URL d'autorització");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Mostrar opcions de configuració de Webhook al menú principal de Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Podeu optar per no mostrar les opcions de configuració de Webhook a la secció\" El meu compte \"del menú principal de Jomres. Podeu decidir si voleu mostrar-les en altres pàgines mitjançant codis curts de Jomres.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "documentació de Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Mostra la pàgina de documentació bàsica de l'API. El nucli API permet als usuaris crear clients API, que després s'utilitzen per accedir a la funcionalitat API que es descriu a la documentació bàsica API.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Mostra la pàgina d'administració bàsica de l'API, on els administradors de propietats poden configurar els clients de l'API. Tingueu en compte que es tracta d'una característica només per a usuaris registrats, de manera que els usuaris han d'estar registrats i iniciar la sessió abans de poder veure aquesta pàgina.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Edita la integració');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'ID d\'integració');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL o nom');
jr_define ('WEBHOOKS_ENABLED', 'Activat');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Mètode d\'autenticació / Integració');

jr_define ("WEBHOOKS_MANAGER_PROPERTIES_NONE", "Qualsevol webhooks que creeu no s'activarà ja que no se us assigna cap propietat. Els superadministradors de propietats no se solen assignar propietats individuals, de manera que és possible que necessiteu un usuari nou per a la creació de webhook.");
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Qualsevol webhooks que creeu s\'activarà contra les propietats següents:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Límit de ressenyes');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Utilitzeu aquesta configuració per limitar el nombre de ressenyes que es mostren a la pàgina de detalls de la propietat.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Mostra totes les ressenyes');

jr_define ('VIDEO_TUTORIALS', 'Tutorials de vídeo');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínim de dipòsit');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Si el dipòsit calculat és inferior a aquesta xifra, establiu el dipòsit a aquest valor. Aquesta xifra pot superar-se si no compleix la configuració mínima de dipòsit del lloc. Deixeu-la establerta a 0 a no utilitzeu la configuració. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', "Per augmentar la velocitat del vostre lloc, us recomanem que importeu a la base de dades els detalls del lloc i de les imatges de propietats existents");
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importar detalls d\'imatges existents a la base de dades');

jr_define ("_JOMRES_S3_ACTIVE_DESC", "Funció experimental. Si està activada, les imatges penjades mitjançant la funció del centre multimèdia també es copiaran al vostre dipòsit d'Amazon S3 i es publicaran des de l'URL del dipòsit d'Amazon S3. Si ho activeu per primera vegada, també serà es va comprometre a importar imatges existents al vostre dipòsit S3. ");
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'domini CloudFront');
jr_define ("_JOMRES_CLOUDFRONT_DMAIN_DESC", "Substituïu el vostre domini Amazon S3 per defecte pel vostre domini CloudFront");
jr_define ("_JOMRES_S3_SSLTLS_DESC", "Es recomana habilitar-lo. Només per a Windows i Mac OSX, si libcurl no s'ha construït amb suport Schannel o Transport segur (les biblioteques SSL natives incloses a Windows i Mac OS X), hauríeu d'establir-ho a No.");
jr_define ("_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING", "Heu activat la integració d'Amazon S3, de manera que haureu de copiar totes les imatges existents al vostre dipòsit S3. Les imatges ara es publiquen als visitants del lloc des de la vostra URL d'Amazon S3, de manera que necessitareu copiar-los primer al vostre dipòsit S3, en cas contrari, no seran visibles pels visitants del lloc. ");
jr_define ("_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2", "Un cop feu clic a aquest botó, no interrompreu el procés i espereu un missatge d'error o d'èxit. Depenent de la velocitat del servidor, pot trigar una estona a completar-se.");
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copia les imatges existents al dipòsit Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Incomplet');
jr_define ('JOMRES_WATING_APPROVAL', 'Pendent d\'aprovació');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Mapa de detalls de la propietat');

jr_define ('HAS_STARS_TITLE', 'Permet classificar les estrelles?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Força la importació dels detalls de la imatge a la base de dades');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Força la pujada de les imatges al dipòsit S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Voleu suprimir totes les dades de Jomres en desinstal·lar-la?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Si s\'estableix en sí, Jomres suprimirà totes les seves taules de base de dades quan es desinstal·li. Això suprimirà totes les dades de Jomres de db i no es podrà desfer.');

jr_define ('TRANSACTION_IDS', 'Identificador de transacció');
jr_define ('PAYMENT_METHOD', 'Forma de pagament');
jr_define ('POA_DISPLAY_PRICE', 'Preu POA');
jr_define ("POA_DISPLAY_PRICE_DESC", "Quan es mostren les propietats en una llista, el sistema intentarà trobar un preu vàlid a partir de les tarifes configurades basant-se en la data d'avui, o si es van utilitzar les dates en una cerca, a partir d'aquestes dates Si no pot, es mostrarà el POA (preu a l'aplicació), el que significa que el client s'ha de posar en contacte amb vosaltres per obtenir un preu. Si voleu, podeu configurar un preu aquí que es mostrarà en lloc del text del POA. seria un preu \"alternatiu\" per mostrar si no es pot determinar cap altre preu.");

jr_define ('PLUGINMANAGER_INSTALL', 'Heu d\'instal·lar el gestor de connectors abans de poder instal·lar connectors de Jomres, voleu fer-ho ara?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Heu d\'actualitzar el gestor de connectors abans d\'actualitzar qualsevol connector instal·lat, voldríeu fer-ho ara?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Fem això!");

jr_define ('INCLUDEINFILTERS', 'Incloure als filtres?');
jr_define ('INCLUDEINFILTERS_DESC', 'Els filtres de característiques de propietats a la cerca composta d\'Ajax poden arribar a ser molt llargs, de manera que podeu establir aquesta opció a No per evitar que aquesta característica es mostri a la llista de característiques de propietats.');

jr_define ('REVIEW_REMINDER_PT1', "Teniu");
jr_define ('REVIEW_REMINDER_PT2', "reserva (s) per a la qual encara no heu deixat cap ressenya. Deixeu una ressenya.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Reserves en espera de ressenyes");
jr_define ('REVIEW_NAG', "No us convideu a rebre comentaris?");
jr_define ('REVIEW_NAG_DESC', "Un cop s'hagi reservat un convidat d'una reserva, el sistema els recordarà que publiqui una ressenya de la seva reserva. Establiu aquesta opció a No per desactivar aquest recordatori.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Voleu enviar còpies dels correus electrònics de reserva als administradors del lloc?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Quan estigui activat, les còpies dels correus electrònics de reserva enviats als administradors de propietats també s'enviaran a tots els administradors del lloc.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Amagar l'adreça?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Si configureu aquesta opció a Sí, només els clients que ja hagin fet una reserva a la vostra propietat podran veure l'adreça del carrer de la propietat. És possible que vulgueu utilitzar aquesta opció per amagar la ubicació exacta de la propietat si, per exemple, es deixa habitualment sense atendre. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimitzar imatges en pujar?');
jr_define ("_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC", "Quan estigui activat, les imatges s'optimitzaran per al web (la mida del fitxer pot ser fins a un 75% més petita). Segons el tipus d'imatge carregat, el servidor ha de tenir instal·lada una o més d'aquestes biblioteques per part de l'allotjament proveïdor: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle");
jr_define ('DATABASE_INTEGRITY_CHECK', 'Comprovació d\'integritat de la base de dades');
jr_define ('OBSOLETE_FILES_CHECK', 'Comprovació de fitxers obsolets');
jr_define ('DATATABLES_COLVIS', 'Visibilitat de la columna');

jr_define ('API_TOKEN_LIFETIME', 'Vida útil del testimoni API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Quant de temps segueix sent vàlid un testimoni API, en segons. 86400 = 1 dia, 31536000 = 1 any');

jr_define ('ENCRYPTION_TITLE', 'Xifratge');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Ubicació del fitxer de xifratge');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Mai no esborreu el fitxer de xifratge ** <br/> Les dades de l\'usuari s\'emmagatzemen xifrades en taules per garantir que les "dades en repòs" estiguin protegides de manera segura, d\'acord amb les recomanacions del GDPR. Per defecte, la clau de xifratge s\'emmagatzema al fitxer "encryption_key.class.php" a l\'arrel de la instal·lació de Jomres (normalment / public_html / jomres). Podeu canviar on s\'emmagatzema el fitxer aquí. Si canvieu la ubicació, heu de Moure el fitxer, no espereu que Jomres creï una nova versió, en cas contrari no podreu descodificar els detalls dels vostres convidats. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'La informació que deseu aquí s\'utilitzarà a les factures generades per aquesta propietat');

jr_define ('_JOMRES_GDPR_POLICIES', 'Polítiques GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Aquí podeu configurar el temps després que s\'hagi creat una reserva o una factura que s\'elimini del sistema per assegurar-vos que compliu el GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Període de conservació de la reserva (en dies)');
jr_define ("_JOMRES_GDPR_BOOKING_RETENTION_DESC", "Quants dies després de la data de sortida de la reserva s'hauria de suprimir la reserva? Quan s'esborra, tant la reserva com la factura s'eliminen. Un període de retenció típic pot ser de 365 dies.");

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Període de retenció de factures (sense reserva)');
jr_define ("_JOMRES_GDPR_INVOICE_RETENTION_DESC", "Altres factures, com ara les factures de comissió i subscripció, no estan lligades a les reserves. Com a resultat, no se suprimiran quan se suprimeixin les factures i els contractes. Segons el vostre país i les vostres pròpies pràctiques comercials, haureu de configurar un període de retenció diferent. Un període de retenció típic pot ser de 3653 dies, és a dir, de deu anys. ");
jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Les vostres dades');
jr_define ("_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES", "Algunes funcions d'aquest lloc web necessiten emmagatzemar informació sobre la vostra visita. S'utilitza només per proporcionar-vos servei, mai no es comparteix amb ningú i s'esborra quan ja no cal.");
jr_define ("_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST", "ENS DONEN PERMIS PER EMMAGATZAR AQUESTA INFORMACIÓ ??");
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'En detall');
jr_define ("_JOMRES_GDPR_CONSENT_FORM_COOKIE", "Heu de consentir que emmagatzemem aquestes dades perquè pugueu fer reserves en aquest lloc. Independentment de si accepteu o no que les vostres dades estiguin emmagatzemades, emmagatzemarem una cookie al vostre ordinador per informar-la nosaltres si heu optat o no. Això ens ajuda a assegurar-nos que no us preguntem constantment si voleu o no participar i que no contingui cap informació d'identificació personal (PII). Si canvieu d'opinió, pot visitar la pàgina \"Permisos d'aplicacions\" en qualsevol moment per activar-la o desactivar-la. ");
jr_define ("_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION", "La informació s'emmagatzema durant diferents períodes de temps en funció de la naturalesa de la vostra visita. Per tant, si només esteu mirant al voltant, emmagatzemarem informació aproximada sobre la ubicació geogràfica (a nivell de país). Si realitzeu cerques, perquè els formularis de cerca siguin més fàcils d'utilitzar, emmagatzemarem els darrers elements que heu cercat. Normalment, aquesta informació s'emmagatzema durant un màxim de 24 hores i només s'utilitza per fer la vostra visita més agradable.");
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Quan feu una reserva amb nosaltres, per necessitat s\'emmagatzema més informació.');
jr_define ("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1", "Els detalls tècnics del formulari de reserva es capturen i es conserven durant un màxim de 60 dies. Això és necessari perquè les reserves a petició es puguin convertir en reserves completes un cop aprovada la reserva i per als nostres equips analitzar-les en cas que hi hagi un problema amb la reserva. Si no vau iniciar la sessió quan vau fer la reserva, us enviarem un nom d’usuari i una contrasenya per correu electrònic perquè pugueu veure el vostre historial de reserves i exercir el vostre dret a l’oblit (RTBF) si vull fer-ho. ");
jr_define ("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2", "Les dades introduïdes al formulari de reserva, per exemple, el nom, l'adreça de correu electrònic i l'adreça real s'emmagatzemen durant un màxim de 365 dies després de la data de sortida de la reserva. Aquesta informació s'emmagatzema en forma xifrada a la nostra base de dades perquè només ho puguin veure les persones autoritzades. Si realitzeu una reserva, per llei, haurem d’emmagatzemar el vostre PII mentre la reserva sigui vàlida. Un cop finalitzada la reserva, ja sigui perquè s’ha cancel·lat o si ha estat retirada, podreu exercir el vostre RTBF iniciant la sessió i visitant la pàgina \"Les vostres dades\". La informació de les factures de les reserves completades encara es guardarà de manera segura a la nostra base de dades per garantir que respectem les lleis fiscals pertinents, però podreu eliminar totes les altres dades personals un cop finalitzada la reserva. ");
jr_define ("_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3", "Quan consentiu que la vostra informació s'emmagatzemi tal com es descriu anteriorment, estem obligats legalment a emmagatzemar aquest consentiment a la nostra base de dades. Aquesta informació inclourà el vostre número IP i el contingut del formulari de participació. conservar aquesta notificació de consentiment indefinidament (aquest és un requisit legal). ");

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', "Encara no ens heu dit si podem recopilar informació vostra d'identificació personal");
jr_define ("_JOMRES_GDPR_CONSENT_OPTED_IN", "Heu consentit que recollim la informació d'identificació personal necessària per fer reserves");
jr_define ("_JOMRES_GDPR_CONSENT_OPTED_OUT", "Ens heu dit que no recopilem informació d'identificació personal");

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'No ens heu donat permís per recopilar les vostres dades privades');
jr_define ("_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT", "Per tal que pugueu realitzar certes accions en aquest lloc web, hem de recopilar informació personal d'identificació vostra, però no ens heu donat permís per fer-ho.");
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Canvieu els vostres permisos');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continuar veient propietats');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Permisos d\'aplicacions');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Dades de convidats');
jr_define ("_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC", "Aquests són els detalls que les diferents propietats emmagatzemen. Diferents hotels poden tenir registres diferents, segons el que hàgiu introduït quan vau fer la reserva.");
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', "No teniu dades emmagatzemades en cap hotel d'aquest sistema");
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Dades del perfil');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Aquest és el conjunt de dades principal que tenim per a vosaltres, diferent dels que heu compartit amb diferents propietats.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'No heu desat cap informació de perfil');
jr_define ("_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT", "Aquí teniu la informació identificable personalment que emmagatzemem en aquest lloc web. Està construïda en format JSON (JavaScript Object Notation), que és un format d’intercanvi de dades lleuger. És fàcil llegir i llegir per als humans escriure i és fàcil per a les màquines analitzar i generar.");

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Anonimitzat');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Les vostres dades');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'En acceptar aquest Acord de condicions d\'ús (aquest "Acord"), accepteu que:

<ul>
<li>
Esteu autoritzat a reservar hotels a través d’aquest lloc web;
</li>
<li>
Teniu almenys 18 anys;
</li>
<li>
Vostè té l\'autoritat legal per crear una obligació legal vinculant;
</li>
<li>
Utilitzarà el lloc d’acord amb aquest Acord;
</li>
<li>
Únicament utilitzarà el lloc per fer reserves legítimes per a vostè o per a una altra persona per a qui està legalment autoritzat per actuar;
</li>
<li>
Informareu a altres persones d’aquest Acord que s’aplica a les reserves que he fet en nom seu, incloses totes les normes i restriccions que s’hi apliquin;
</li>
<li>
Tota la informació que proporcioneu al lloc web és veritable, exacta, actual i completa; i
</li>
<li>
Protegirà la informació del seu compte i supervisarà i serà completament responsable de qualsevol ús del vostre compte per part vostra i de qualsevol persona que no sigui vosaltres.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'La seguretat i la transparència són importants per a nosaltres.');
jr_define ("_JOMRES_GDPR_MY_DATA_INTRO", "Ens prenem molt seriosament les nostres responsabilitats quant a l'emmagatzematge de les vostres dades. Tota la informació d'identificació personal (PII) s'emmagatzema xifrada a la nostra base de dades mitjançant algoritmes estàndard de la indústria per garantir que només els usuaris autoritzats puguin veure aquesta informació.");

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', "Podeu descarregar tots els PII que guardem per a vosaltres.");
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Descarrega ara');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Dret a l\'oblit (RTBF)');
jr_define ("_JOMRES_GDPR_MY_RTBF_INTRO", "Creiem que hauríeu de ser capaç de <a href=\"https://gdpr-info.eu/art-17-gdpr/\" target=\"_blank\"> suprimir </a> el vostre < a href = \"https://gdpr-info.eu/art-4-gdpr/\" target = \"_blank\"> Informació d'identificació personal </a> si voleu i si és factible. ");
jr_define ("_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN", "No esteu registrat en aquest lloc. La vostra ubicació general (país) i el número IP es guardaran durant un màxim de 24 hores i se suprimiran.");
jr_define ("_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT", "No esteu registrat en aquest lloc i heu desactivat la recopilació de dades. No hem emmagatzemat el vostre PII.");
jr_define ("_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS", "Esteu registrat al lloc i no teniu cap reserva activa o pendent. Podem anonimitzar la majoria de la informació que tenim actualment. Voleu fer-ho?");
jr_define ("_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE", "Nota: Això no elimina el vostre compte, simplement anonima els nostres registres perquè el vostre compte no pugui associar-vos com a persona. Per llei, hem de continuar emmagatzemant el vostre PII a efectes de facturació, però ho farem suprimiu tots els registres de convidats. ");

jr_define ("_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS", "Esteu registrat al lloc, tot i que teniu reserves pendents i no podem anonimitzar les vostres dades en aquest moment. Aquestes dades es conservaran durant un màxim d'un any després de completar la reserva. se suprimirà, si no opteu per eliminar-lo abans d'aquest moment. ");
jr_define ("_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS", "Com que sou administrador de propietats al nostre lloc, no us podem oferir la possibilitat de suprimir les vostres dades automàticament. En lloc d'això, poseu-vos en contacte amb nosaltres directament perquè puguem assignar les vostres propietats a un altre gestor. Un cop ho hàgim fet i eliminem el vostre estat de gestor de propietats, podreu suprimir automàticament les vostres dades. ");

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Oblida\'m!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Això no es pot desfer!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Les vostres dades s\'han suprimit!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Ho sentim, no podeu fer una reserva ja que la vostra adreça de correu electrònic no és vàlida');

jr_define ("_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO", "Aquesta pàgina us permet anonimitzar els convidats que tinguin la seva informació emmagatzemada al sistema. Això us permet complir el GDPR, però no podeu editar cap altra informació en aquesta pàgina. Per fer-ho, heu d’iniciar sessió al frontend com a administrador de propietats. La suposició és que un hoste històric s’ha posat en contacte amb vosaltres sol·licitant-los que permeti exercir el seu dret a l’oblit. Si no poden iniciar sessió al frontend del lloc (potser l'usuari no va ser creat per a ells quan van fer la reserva), llavors podeu utilitzar aquesta àrea per anonimitzar-los un cop hàgiu confirmat la seva identitat.");

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anònim convidat');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'PROPIETAT SUPRIMIDA');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Dades de convidats anonimitzades');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'No es pot anonimitzar');

jr_define ("_JOMRES_GDPR_CONSENT_TRIGGER_FORM", "Necessitem el vostre permís per emmagatzemar la vostra informació abans de fer una reserva. Feu clic AQUÍ per donar-nos permís.");

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Voleu habilitar la funcionalitat compatible amb GDPR?');
jr_define ("_JOMRES_GDPR_CONFIG_ENABLE_DESC", "NO RECOMANEM QUE DESACTIVEU LA FUNCIONALITAT CUMPLENT DEL GDPR. Jomres té funcions integrades que us ajuden a garantir que la secció Jomres del vostre lloc compleixi el GDPR. Si desactiveu aquesta funció (i no ho hauríeu de fer si sou a la UE o si feu negocis amb ciutadans de la UE), Jomres assumirà automàticament que tots els visitants del lloc han donat el seu permís perquè les seves dades personals estiguin activades. es mostra i no es demanarà als usuaris que donin el seu permís perquè les dades es recopilin. ");


jr_define ('EMPTY_TEMP_DIR', 'Direcció temporal buida');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Arxius temporals suprimits');

jr_define ('MACHINE_TRANSLATION', 'Traduccions automàtiques');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Idioma d\'origen');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'És possible connectar la funcionalitat de traducció automàtica. Això us permet introduir cadenes en un idioma i les traduccions es podrien extreure de serveis remots. Tingueu en compte que no tots els serveis de traducció admeten tots els idiomes. Consulteu aquests serveis per més detall. ');

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipus d\'habitació');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Tipus d\'habitació nova');
jr_define ("_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD", "Podeu crear i editar tipus d'habitacions en aquesta pàgina. Aquests tipus d'habitacions només seran específics per a aquesta propietat. Quan configureu la vostra propietat, primer necessiteu alguns tipus d'habitacions. Podeu utilitzar qualsevol tipus d'habitació creada per l'administrador o podeu afegir-ne de propis. Un cop tingueu un o més tipus d'habitacions, podreu crear habitacions d'aquest tipus d'habitació. Després de tenir habitacions, podreu crear tarifes (preus) per a aquestes habitacions, ja que les tarifes estan vinculades als tipus d'habitació . ");
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Els administradors poden crear tipus d\'habitacions?');
jr_define ("_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC", "Utilitzeu aquesta opció per configurar si els gestors poden crear o no els seus propis tipus d'habitacions al frontend. Us recomanem que deixeu aquesta opció definida a No quan comenceu a utilitzar Jomres, especialment si esteu creant un portal perquè haureu de crear tots els tipus d'habitacions a l'àrea d'administrador. Els tipus d'habitacions creats pels administradors apareixeran als formularis de cerca, però com que aquests tipus d'habitacions són específics de propietats individuals, només es mostrarà una propietat als resultats de la cerca si es selecciona aquest tipus d'habitació durant les cerques. Si voleu que només els superadministradors de propietats puguin crear tipus d'habitacions, deixeu aquesta opció configurada a Sí i utilitzeu el connector de control d'accés per permetre que només els superadministradors visualitzin l'opció de menú \"Configuració> Tipus d'habitacions\". Només les propietats que lloguin les habitacions de la propietat i utilitzen els modes d’edició de tarifes Advanced o Micromanage poden utilitzar aquesta opció. Les propietats del tipus de vil·la / apartament no la podran utilitzar. ");
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tipus d\'habitació / propietat actualitzat');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Mostra els tipus d\'habitació a les opcions de cerca');
jr_define ("_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC", "Si decidiu permetre als administradors de propietats crear els seus propis tipus d'habitacions, podeu triar si voleu mostrar o no aquests tipus d'habitacions creades a les opcions de cerca on heu escollit mostrar els tipus d'habitacions.");
jr_define ("_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE", "No heu de tornar a utilitzar la mateixa adreça de correu electrònic per a cada reserva. <br/> Si teniu un domini únic (per exemple, no una adreça de correu electrònic de Gmail) per al vostre negoci, utilitzeu el número de telèfon del client com a adreça de correu electrònic. L'adreça de correu electrònic tindria un aspecte semblant a 123456@elmeudomini.com <br/> Això garantirà que es creï un nou convidat quan creeu una reserva. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'Adreça de correu electrònic');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Contrasenya');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Estem encantats de que vulgueu tornar a reservar amb nosaltres. Per poder gestionar totes les vostres reserves junts, cal que inicieu sessió per afegir la reserva al vostre compte. Això també garanteix que esteu autoritzat a utilitzar l'adreça de correu electrònic proporcionada. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', "Si no coneixeu la vostra contrasenya, us podem enviar un correu electrònic de restabliment de la contrasenya. Seguiu les instruccions d'aquest missatge per restablir la contrasenya.");
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Heu oblidat la vostra contrasenya?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonimitzeu el vostre nom?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Si decidiu anonimitzar el vostre nom en revisar-los, farem servir les vostres inicials.');
jr_define ('ANONNIM', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'dit');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Respon a aquesta revisió');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Escriviu aquí la vostra resposta a aquesta revisió.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'La vostra resposta');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Revisió principal');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Resposta de la ressenya desada');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Abans d\'enviar una resposta de revisió, heu de llegir el següent. En enviar una resposta, confirmeu que accepteu aquests termes i condicions.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Quines són les nostres directrius per a una resposta de revisió?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Esteu responent a la revisió de la vostra propietat. <em> No heu </em> d’utilitzar la vostra resposta com a procés de controvèrsia comercial. Si heu d’informar d’una revisió, heu d’utilitzar l’informe Reviseu el botó "de la fitxa i no aquesta pàgina de resposta de ressenyes. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Un cop hagueu deixat la resposta, no la podreu editar.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Permès i animat');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Una resposta completa a la revisió. </li>
    <li> Cortesia i honestedat. </li>
    <li> Respostes assenyades als problemes del revisor (recordeu que és possible que altres persones tinguin problemes similars, però no van aprofitar per publicar una ressenya). </li>
    <li> Animeu els convidats a contactar-vos directament per resoldre problemes.
    <li> Recordeu sempre que els futurs convidats veuran la vostra resposta. Assegureu-vos de ser professional en tot moment. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'No permès');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Conflictes comercials. </li>
    <li> Preguntes al revisor o a altres persones. </li>
    <li> Idioma qüestionable (inclosa la maledicció). </li>
</ul>
');
jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Darrera execució');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Programació');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Números de factura');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Voleu utilitzar números de factura personalitzats?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Podeu configurar el sistema per utilitzar números de factura personalitzats. Només es veuran afectades les factures noves.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Número inicial');
jr_define ("_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC", "Els números es creen consecutivament. Quin ha de ser el primer número?");

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Quin format ha de tenir el número de factura?');
jr_define ("_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC", "Configureu el format del número de factura aquí. Un format pot semblar a {N} / {D} o {N} / {Y} on N és el número generat automàticament, D = data en el format AAAAAMMDD ( 20190131) o S = AAAA (2019). Qualsevol altre caràcter alfanumèric que no estigui inclòs entre claus es deixarà sol, de manera que un patró que sembli {N} / {D} -L donaria lloc a un número de factura (21) es veu com el 21/2019-L ");

jr_define ('_JOMRES_SURCHARGE_TITLE', 'Recàrrec');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Un càrrec addicional que s\'afegirà a l\'habitació quan es reservi (calculat per dia)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritzar les etiquetes de tot el lloc?');
jr_define ("_JOMRES_COM_LABEL_PRIORITY_DESC", "El text personalitzat desat a l'edició d'etiquetes o a les pàgines de cadenes de fitxers de traducció de lang es considera etiquetes\" a tot el lloc \". Els gestors de propietats també poden personalitzar les etiquetes per a cada propietat mitjançant la funció d'edició d'etiquetes del frontend. Això permet un administrador de propietats tingui diferents textos per a la seva propietat, cosa que és útil si la propietat és diferent de la resta de propietats del lloc. <br/> Quan el sistema cerqui textos d’etiquetes, prioritzarà els textos de tot el lloc per sobre de la propietat. textos específics que vol dir que si existeix un text a tot el lloc per a aquesta etiqueta, el sistema en triarà primer. Si configureu aquesta opció a No, el sistema prioritzarà els textos específics de la propietat sobre els textos de tot el lloc.");

jr_define ('_JOMRES_REFERRER', 'Referrer');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Això es podria canviar si hi ha una llista blanca, de manera que el lloc "El millor lloc de reserves del món" canviaria això per "WBBS" o similar.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Paquets de biblioteca');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Els mòduls de proveïdor i de node són paquets separats (gratuïts) per a Jomres. Podeu tornar a instal·lar els paquets en aquesta pàgina.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Torna a instal·lar paquets de biblioteca');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'No es pot suprimir el tipus de propietat perquè algunes propietats encara l\'utilitzen. Primer heu de canviar aquestes propietats a un altre tipus de propietat abans d\'intentar suprimir-les. UID de propietats que impedeixen la supressió:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'No es pot anul·lar la publicació del tipus de propietat perquè algunes propietats encara l\'utilitzen. Primer heu de canviar aquestes propietats a un altre tipus de propietat abans de provar de publicar-les. UID de propietat que impedeixen el canvi:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Adreces de correu electrònic aleatòries');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Ofereix correus electrònics aleatoris');
jr_define ("_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION", "Podeu permetre que el sistema generi adreces de correu electrònic aleatòries a la finestra emergent de Reserva ràpida al tauler. Això permet als administradors i recepcionistes crear reserves per a convidats que no tinguin adreces de correu electrònic, ja que està pensat per funcionar com a estalvi de temps per a llocs amb molts recepcionistes / gestors que entenen que aquests correus electrònics aleatoris mai no s'utilitzaran per a una comunicació real, el propòsit és evitar que a Jomres tots els convidats hagin de tenir adreces de correu electrònic. També heu de proporcionar un domini a el següent camp. ");
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Domini de correus aleatoris');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'No hauria de ser un domini de correu electrònic normal, com ara Gmail o Outlook. En lloc d\'això, pot ser el vostre propi domini o qualsevol altra cosa, com ara "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Àrea de càrrega');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Sense rol d\'usuari');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepcionista');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Administrador de propietats');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Suspès');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Suprimit de CMS');

jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Si us agrada Jomres, considereu deixar una ressenya en algun d\'aquests llocs');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Sóc una persona agradable, ja he deixat una ressenya');

jr_define ('_LICENCE_PROMPT_DEAR', 'Estimat');
jr_define ('_LICENCE_EXPIRED', ', la vostra clau de llicència de Jomres ha caducat, de manera que us falten aquestes grans funcions i avantatges!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Actualitzacions de connectors i llançaments de connectors nous');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Només membres exclusius Assistència per correu electrònic / entrades');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Actualitzacions de Jomres Core sense preocupacions');
jr_define ('_LICENCE_EXPIRED_POST', 'Connecteu-vos per obtenir solucions de pagament sense problemes i accediu a tots els connectors i serveis d\'assistència només per a membres.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Obteniu accés a tots els connectors ara!');

jr_define ('_LICENCE_INVALID_KEY', 'Malauradament no sembla que estigueu utilitzant una clau de llicència Jomres vàlida, de manera que us falten aquestes funcions i avantatges fantàstics!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Connectors </a> que amplien molt la funcionalitat de Jomres');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Només membres exclusius Assistència per correu electrònic / entrades');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Actualitzacions de Jomres Core sense preocupacions');
jr_define ('_LICENCE_INVALID_POST', 'Connecteu-vos per obtenir solucions de pagament sense problemes i accediu a tots els connectors i serveis d\'assistència només per a membres.');
jr_define ('_LICENCE_INVALID_START', 'Obteniu accés a tots els connectors ara!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Usuaris');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Comissió');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscripcions');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Factures');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Traduccions');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Eines');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Informes');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Configuració');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Ajuda');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Propietats totals del sistema');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Propietats publicades');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Propietats no publicades');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Propietats aprovades');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Propietats que requereixen aprovació');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total de ressenyes');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Ressenyes no publicades');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Revisa els informes');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Informació del sistema Jomres');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "El tipus de propietat d'aquesta propietat no es publica, és possible que no aparegui als resultats de la cerca. Poseu-vos en contacte amb l'administrador del lloc per publicar el tipus de propietat o canvieu el tipus de propietat a la pàgina Edita la propietat.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Actualitzeu el tipus de propietat');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Ingressos (quantitats pagades)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'No es pot suprimir la característica de propietat "');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"perquè és utilitzat per les propietats següents:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Prova REST API');
jr_define ("_JOMRES_REST_API_CONNECTIVITY_TEST_INFO", "Aquesta pàgina realitza una prova bàsica de l'API REST mitjançant la funcionalitat integrada a Jomres. Crida a l'API REST de Jomres per veure si rep una resposta vàlida.");
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'El servidor ha cridat aquest URL per veure si la resposta és vàlida:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'La pàgina ha rebut aquesta resposta:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'La prova semblava anar tal com s\'esperava, probablement no tindreu cap problema en rebre sol·licituds d\'API REST de la resta d\'Internet.');
jr_define ("_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED", "La prova ha fallat, busqueu al camp Response, si sembla molt html o heu rebut un missatge 404, el servidor redirigeix ​​les trucades a una altra url. Això us impedirà rebre API trucades. ");
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Prova de sindicació');
jr_define ("_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO", "El servidor d'aplicacions Jomres manté una llista de tots els llocs de Jomres. Això ens permet crear una xarxa de sindicació. Aquesta xarxa està dissenyada per permetre als nostres usuaris mostrar propietats d'altres llocs als seus propis llocs, sobretot per als llocs nous, per crear una presència de SEO a la xarxa. L’objectiu és que tots els llocs de Jomres treballin junts, generant confiança a la xarxa. No hi ha cap càrrec per aquest servei. ");
jr_define ("_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED", "El vostre lloc no apareix actualment al servidor d'aplicacions Jomres, que forma part de la xarxa de sindicació. Aquest servidor tornarà a intentar afegir aquest servidor a la xarxa a les 6 pàgines següents. poques càrregues de pàgina, això no canvia si us plau, comproveu que la prova de connectivitat anterior supera les proves. Tingueu en compte que no es poden afegir servidors localhost a la xarxa. ");
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Enhorabona, el vostre servidor apareix al servidor de l\'aplicació Jomres');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Propietats sindicades');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Aquí hi ha algunes altres propietats disponibles a la nostra xarxa de propietats');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Estadístiques de sindicació');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Enhorabona, el vostre servidor apareix a la xarxa de sindicació Jomres. Les vostres propietats començaran a aparèixer aviat en altres llocs de Jomres, si encara no es mostren.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'La vostra instal·lació no forma part de la xarxa de sindicació de Jomres, per tant, les vostres propietats no es mostren en altres llocs basats en Jomres i no us podeu beneficiar d\'aquesta publicitat gratuïta.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Instal·lacions actives de Jomres:');
jr_define ("_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC", "El nombre total d'instal·lacions de Jomres que comparteixen propietats de la xarxa de sindicació de Jomres als seus llocs.");
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Propietats totals:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Aquest és el nombre de propietats disponibles al JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total de propietats:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'En total, totes les vegades que s\'ha relacionat una propietat de Jomres des d\'un altre lloc basat en Jomres.');
jr_define ("_JOMRES_SYNDICATION_STATS_BLURB", "The Jomres Syndicate Network (JSN)) és una funció gratuïta disponible per a tots els usuaris de Jomres. L'objectiu és proporcionar-vos publicitat gratuïta de les vostres propietats en altres llocs basats en Jomres. L'objectiu és ajudar obteniu el vostre lloc ràpidament, oferint publicitat gratuïta perquè les vostres propietats siguin reconegudes i confiades perquè estan vinculades a llocs web d’alta rellevància i confiança que ja són ben coneguts pels motors de cerca. Vegeu això <a href = \"https://www.jomres.net/features/jomres-syndication-network\" target=\"_blank\"> article del nostre lloc web </a> i <a href=\" https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network\" \"target=\"_blank\"> el manual </a> per obtenir més informació. ");


jr_define ('GUEST_PROFILE_INFORMATION', 'Aquestes són les dades del vostre perfil de convidat, camps amb aquest símbol <i class = "fa fa-users" aria-hidden = "true"> </i>
 són visibles públicament, mentre que els camps amb aquest símbol <i class = "fa fa-user-secret" aria-hidden = "true"> </i> només els podeu veure vosaltres, els vostres amfitrions i els administradors del lloc. <br/> <br/> Els amfitrions només poden veure informació privada si ja heu creat una reserva amb ells. <br/> <br/> La vostra informació es xifra de manera segura i s\'emmagatzema a la nostra base de dades mitjançant el xifratge AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Aquests camps són opcionals, tot i que els amfitrions poden utilitzar la informació aquí per determinar si creuen que poden confiar en vosaltres, per tant, és millor afegir la informació. Recordeu que esteu demanant que estigueu a propietat, i us poden rebutjar si consideren que no esteu bé o que la vostra biografia no conté prou informació. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Permís de conduir');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Número de passaport');
jr_define ('GUEST_PROFILE_IBAN', 'número IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Sobre mi');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Aquesta secció "Sobre mi" es pot veure públicament, de manera que no introduïu cap informació privada. Dit això, feu un esforç per posar tot el que us sembli còmode compartir, com ara les vostres passions, el que guanyar-se la vida, les seves aficions, etc. Podeu utilitzar Markup per donar-li una mica de jazz. Els amfitrions voldran sentir que poden confiar en vosaltres amb les seves propietats. Assegureu-vos que la vostra imatge sigui una imatge real de vosaltres, no del vostre gos o cotxe (sí, nois, us estem parlant!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Introduïu aquí qualsevol requisit especial, com ara les necessitats de facilitat d\'accés. No es mostraran al vostre perfil públic, però s\'afegiran a la informació de la reserva quan realitzeu una reserva.');

jr_define ('VIEW_HOST_PROFILE', 'Perfil de l\'amfitrió');

jr_define ('GUEST_PROFILE_TITLE', 'Perfil de convidat');
jr_define ('GUEST_PROFILE_TITLE_MY', 'El meu perfil');

jr_define ('GUEST_PROFILE_WELCOME', 'Hola, permeteu-me que us expliqui una mica sobre mi mateix');
jr_define ('GUEST_PROFILE_MY_NAME', 'El meu nom és');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'i vinc del');
jr_define ('GUEST_PROFILE_IN', 'regió a');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'La meva informació privada');
jr_define ("GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER", "Fem tot el possible per validar la informació dels hostes i dels hostes, però haureu de fer la vostra pròpia diligència i decidir per vosaltres mateixos si aquesta persona és fiable o no.");

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Les meves propietats');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Les meves ressenyes');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Això és el que he dit sobre aquesta propietat:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'He donat a aquesta propietat una puntuació de qualificació de:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Les meves ressenyes');
jr_define ('GUEST_PROFILE_OF_ME', 'El que altres persones diuen sobre mi');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'El que va dir aquest amfitrió sobre mi');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Revisa el convidat');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'La meva opinió sobre aquest convidat');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Aquí teniu alguns exemples de comentaris dels clients per fer rodar la pilota: <br/>

<ul>
<li> (nom dels convidats) va ser un plaer allotjar-lo. Van deixar l\'espai net i van estar tranquils durant tot el cap de setmana. Tenien una comunicació fluida i espero que torni a estar amb mi. </li>
    <li> Em va encantar tenir (nom de convidat) perquè eren capaços de tractar el lloc amb respecte, passar-s’ho molt bé i gaudir de la zona. Van ser fantàstics llogar l’espai i espero que els pugui tornar a acollir. </li>
    <li> Totes les normes de casa meva es van respectar amb (nom del convidat) i van poder entrar i anar amb facilitat. Em va encantar tenir-los allà, ja que eren respectuosos i tranquils. Els recomano als altres! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Ho sento, no puc trobar aquest usuari. Probablement encara no hagi completat la informació del compte.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Convidat');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Amfitrió');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Administrador');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres està basat en el framework Bootstrap, de manera que l\'heu d\'utilitzar en un tema basat en Bootstrap. Us el recomanem basat en Bootstrap 3. Si no teniu accés a un tema, us recomanem que utilitzeu el tema Jomres Leohtian per a Wordpress que podeu <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank"> Baixa des d\'aquí. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Marca com a no presentat');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Reserva marcada com a No Show');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Reserves');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'Sense programes');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'Estadístiques JSN per a aquest usuari');

jr_define ('BOOKING_NOSHOW_INFO', 'La informació de reserves i sense espectacles es treu de la xarxa de sindicats de Jomres en el moment de fer la reserva. Es pren de dades anonimitzades i la podeu utilitzar per decidir si aquest client corre el risc de no complir la reserva. Si el sistema informa que es desconeixen les dades, probablement sigui perquè aquest sistema no es reconeix a la xarxa. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Desconegut');

jr_define ('CMF_CONFIG_TITLE', 'Marc de gestió de canals');
jr_define ('CMF_CONFIG_KEY', 'Clau del marc de gestió de canals');
jr_define ("CMF_CONFIG_KEY_DESC", "La clau de llicència de Channel Management Framework. Haureu de proporcionar aquesta clau per poder descarregar connectors de Channel Management Framework.");
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'La vostra propietat no ha estat aprovada');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "La vostra propietat no s'ha aprovat. Si creieu que es va fer per error, poseu-vos en contacte amb nosaltres.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "És un tipus de convidat infantil?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Estableix-ho a Sí si aquest tipus de convidat es classificaria com a tipus de convidat secundari.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Si voleu cobrar per persona i nit, haureu de crear alguns tipus de convidats.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Podeu crear tants tipus de convidats com necessiteu, proveu de començar creant només un tipus de convidat anomenat\" Adult \". Deixeu tots els paràmetres als valors predeterminats. A continuació, si per exemple voleu doneu als nens menors de 12 anys un descompte del 50% per crear un tipus de convidat nou i anomeneu-lo \"Nens ​​menors de 12 anys\". Establiu l'opció \"Afegir variació?\" a - (negatiu) i configureu la \"Variancia\" a 50. Això vol dir quan s'afegeixen nens a una reserva, se'ls cobra el 50% del cost de l'habitació de l'habitació. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Estableix els preus manualment");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Estableix les nits mínimes manualment");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Establir nits mínimes");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Estableix <em> preu per nit </em> per dia de la setmana");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Estableix <em> preu per nit </em> per interval de dates");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Estableix <em> nits mínimes </em> per interval de dates");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Els selectors de dates i l'entrada de tarifa us permeten establir un preu per a un interval de dates determinat. Trieu una data d'inici i finalització, introduïu un preu i feu clic al botó Estableix preu per nit.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Els selectors de dates i l'entrada mínima de nits us permeten establir un valor per a les nits mínimes per a un interval de dates determinat. Trieu una data d'inici i finalització, introduïu un número per a les nits mínimes i feu clic a\" Estableix nits mínimes '. ");

jr_define ("_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO", "Utilitzeu aquest menú desplegable per canviar entre la fixació de preus per a dates individuals, la configuració de nits mínimes per a dates individuals. Podeu utilitzar el selector <em> per dia de la setmana </em>, el selector <em> per data range </em> picker o establiu els preus / nits mínimes editant manualment les dates. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Utilitzeu aquest menú desplegable per canviar entre la fixació de preus per a dates individuals, per establir nits mínimes per a dates individuals. Podeu utilitzar el selector <em> per interval de dates </em> o establir els preus / nits mínimes per editant manualment les dates. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Establir preus o nits mínimes");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Estableix <em> nits mínimes </em> per dia de la setmana");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Els camps del dia de la setmana us permeten establir un nombre mínim de nits per a un dia de la setmana determinat, un cop feu clic al botó del dia de la setmana, tots els dies de la setmana es configuraran en aquesta configuració de nits mínimes.");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Establir manualment preus / nits mínimes");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Establir preus");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Establir nits mínimes");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Per nit");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Nits mínimes");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Nits màximes");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Aquí podeu crear tarifes associades als tipus d'habitacions que teniu a la vostra propietat.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Opcions més utilitzades");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instruccions");

jr_define ("_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS", "Si voleu afegir preus diferents per a un nombre diferent de convidats, llavors <em> podeu crear més de diverses tarifes per a cada tipus d'habitació </em> i tenir valors de convidats mínims / màxims diferents en aquestes tarifes. ");
jr_define ('_JOMRES_MICROMANAGE_INFO', "Doneu un nom a la tarifa, definiu el nombre màxim de nits i el nombre mínim i màxim de convidats que es requereixen al formulari de reserva abans que s'ofereixi la tarifa. <br/> <br/> Utilitzeu el tauler seleccionador de dates per afegir preus i configuracions mínimes de nits a un interval de dates o editar les entrades directament. Si no voleu que s'ofereixi la tarifa en determinades dates, deixeu el preu establert a 0 (zero) a aquestes dates. <br/> <br/> Podeu tenir nits mínimes diferents en dates diferents, de manera que si voleu reserves més llargues durant les setmanes del festival o conferència, podeu establir que les nits mínimes siguin més altes només en aquests períodes. <br / > <br/> Si cobreu per persona per despesa (PPPN), podeu habilitar aquesta configuració a Configuració> Configuració de propietats> Fitxa Tarifes i moneda i, a continuació, creeu els tipus de convidats que necessiteu a Configuració> Tipus de convidats. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Opcions addicionals");

jr_define ("_JOMRES_MICROMANAGE_EXTRA_OPTIONS", "Aquestes són opcions addicionals que no s'utilitzen tan habitualment, però que estan disponibles per a vosaltres. <br/> <strong> Ignora PPPN </strong> significa ignorar per persona i per nit. Podeu tenir diverses tarifes diferents per al mateix tipus d'habitació, per exemple, un dels quals cobra per persona i nit i un que no. <br/> <strong> Permetre caps de setmana </strong> L'opció Permetre caps de setmana us ofereix l'opció de fer una tarifa que només sigui disponible durant els dies laborables, per exemple, si voleu una tarifa especial per a viatgers de negocis. En aquest cas, definiu l'opció No i les nits mínimes a 1 i les nits màximes, com a màxim, 5. <br/> <strong> Caps de setmana només </strong> L'opció Només caps de setmana és la inversa de l'opció Permetre caps de setmana. El que considereu que són dies de cap de setmana es pot configurar a la configuració de la vostra configuració de propietats. Això us permet definir una tarifa només de cap de setmana que és possible que vulgueu. oferta per a esdeveniments especials. <br/> <strong> Dia de la setmana d’entrada </strong> Aquesta opció us permet forçar el registre només en determinats dies de la setmana i s’utilitza millor juntament amb la configuració de propietats> pestanya Reserves> Opcions de períodes fixats. La majoria d’usuaris voldran deixar aquesta opció configurada a Tots. <br/> Les dues opcions finals, <strong> Sales mínimes ja seleccionades </strong> i <strong> Nombre màximes d’habitacions ja seleccionades </strong> són molt especialitzades i útil per a propietats amb tarifes extremadament complicades. <em> A menys que tingueu una necessitat específica, heu de deixar aquestes opcions en pau. </em> Utilitzeu-les si només voleu que s'ofereixi aquesta tarifa quan el client ja hagi seleccionat N nombre d'habitacions al formulari de reserva, per exemple, podríeu tenir una tarifa bàsica si aquestes opcions es deixen per defecte i una segona tarifa en què l'opció d'habitacions mínimes ja seleccionades estigui 1, llavors aquesta segona tarifa s'oferirà al formulari de reserva un cop s'hagi seleccionat una habitació. " );

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Podeu crear diverses tarifes per al mateix tipus d'habitació, de manera que podeu crear una tarifa per als dies mínims / màxims d'1 a 7 i una segona tarifa on els dies mínims siguin 7, els dies màxims 14 i Això us permet crear esquemes de preus tan senzills o tan complicats com necessiteu. També us permet crear diverses tarifes amb condicions diferents, de manera que podeu tenir un segon conjunt de tarifes en què el preu sigui més baix per a Bed & Breakfast i un altre conjunt de tarifes més cares per al llit, l'esmorzar i el sopar. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Estableix només els dies del selector de dates");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Categories de propietats');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Edita la categoria de propietats');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Atura!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Gràcies per instal·lar Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "La gestió de propietats es realitza en pàgines orientades al públic, no a l'àrea d'administrador.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Si no esteu familiaritzat amb Jomres, visiteu la secció Ajuda> Pàgina d'inici.");

jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Uniu-vos al sindicat de Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Un cop hàgiu configurat el lloc i estigueu a punt per començar a rebre visitants, uniu-vos al sindicat Jomres.net i feu que les vostres propietats apareguin en altres llocs de Jomres.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Necessiteu almenys una habitació d'un dels tipus següents abans de poder crear una tarifa:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Aneu a Configuració> Habitacions i creeu primer una habitació, un cop hàgiu fet això, podreu crear una tarifa per a aquest tipus d'habitació.");

jr_define ('JOMRES_PLATFORM', "Plataforma Jomres");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Connectat");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Establiu-ho en Sí si ja heu connectat el vostre compte de Stripe amb la plataforma Jomres.");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Número de compte de Stripe Live");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Aquest és el vostre identificador de compte de Stripe que es pot trobar al tauler de control de Stripe a Configuració> Informació del compte i té aspecte de acct_xxxxxxxxx. Utilitzaríeu aquest camp si teniu diverses instal·lacions de Jomres i voleu utilitzar el mateix compte a través de tots els llocs i ja us heu connectat. Si no us heu connectat a la plataforma Jomres, no n’hi ha prou d’introduir les vostres dades aquí. En lloc d’això, visiteu l’opció de menú Connexió de la barra d’eines, a la secció Ajuda. Si voleu per provar els pagaments, a la pestanya Depuració de Configuració del lloc, configureu el lloc des de la producció fins al desenvolupament. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Ratlla la clau secreta en viu");
jr_define ("JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC", "Aneu a Desenvolupadors> Claus d'API al tauler de control de Stripe per trobar les vostres claus secretes. El sistema les utilitza per verificar que les dades de reserva retornades del formulari de pagament siguin vàlides i que s'hagin pagat els dipòsits abans de desar la reserva . ");

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Clau secreta de prova de ratlles");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');

jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Mode tarifari estàndard');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Quantes persones pot allotjar aquesta propietat?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'El nombre de convidats al vostre preu diari');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Preu addicional per a adults');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Nens');

jr_define ("JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT", "Per persona per nit?");
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'modificador de 7 dies');
jr_define ("JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC", "Descompte en la tarifa diària si la reserva és de 7 dies o més. Deixeu aquest valor a zero si no voleu que s'apliqui el descompte.");
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'modificador de 30 dies');
jr_define ("JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC", "Descompte en la tarifa diària si la reserva és de 30 dies o més. Deixeu aquest valor a zero si no voleu que s'apliqui el descompte.");
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adults');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Preu basat en 2 adults');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Reserva amb descompte a partir de');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'a');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'perquè la reserva és superior a 7 dies.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'perquè la reserva és superior a 30 dies.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'Impostos municipals');
jr_define ("JOMRES_CITY_TAX_VALUE", "Valor fiscal municipal");
jr_define ('JOMRES_CITY_TAX_METHOD', 'Mètode de càlcul de l\'impost');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Tarifa única');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per nit');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per convidat');
jr_define ("JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT", "Per convidat per nit");
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Percentatge del valor de la reserva');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Tarifa de neteja');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Cost de la neteja');
jr_define ('JOMRES_COMPATABILITY_MODE', 'Forçar el mode de configuració de propietats de compatibilitat?');
jr_define ("JOMRES_COMPATABILITY_MODE_DESC", "El mode de configuració de propietats de compatibilitat obliga a succeir diverses coses. En versions anteriors de Jomres, els administradors de propietats podien escollir quin mode d'edició de tarifes s'utilitzaran i diversos altres paràmetres (alguns dels quals poden semblar confusos) poden tenir L'habilitació de la configuració de compatibilitat obliga a totes les propietats noves a utilitzar només el mode d'edició de tarifes estàndard, que modela la funcionalitat de configuració de la propietat de booking.com pel que fa a preus, preus infantils, etc. Es recomana que per a les instal·lacions que es van crear després de les 9.22 .0, aquesta opció s'ha d'establir a Sí, però per a les instal·lacions anteriors correspon a vosaltres decidir si les noves propietats s'han d'establir automàticament al mode de compatibilitat quan es creen. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Accepteu menors de 18 anys?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Establiu aquesta opció a Sí si permeteu nens. Si és així, al menú Configuració tindreu una opció anomenada Polítiques infantils on podreu editar la configuració relacionada amb nens.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Polítiques infantils');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'A quines edats estan permesos els nens?');


jr_define ("JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT", "Per nen, per nit");
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per nen, per estada');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Tarifes infantils');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Tarifa infantil nova');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Edita la taxa secundària');
jr_define ("JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC", "Creeu aquí les vostres tarifes infantils gratuïtes o de pagament. Les tarifes només s'aplicaran quan hàgiu creat nivells d'ocupació per als tipus d'habitació.");
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Edat des de');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Edat fins a');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'per nit o per estada?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Tarifa');
jr_define ("JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC", "Si es defineix zero o no, els nens d'aquest interval d'edat seran lliures.");
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Edats al registre');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Edats');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Nivells d\'ocupació');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Nombre màxim d\'adults');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Nombre màxim de fills');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Ocupació màxima');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edita el nivell d\'ocupació de:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edita els nivells d\'ocupació per a aquest tipus d\'habitació. No incloguis els hostes que dormen en bressols (s\'afegeixen creant un extra)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Per a cada adult addicional, quant se\'ls hauria de cobrar?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Adults addicionals');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Encara no heu configurat les taxes secundàries.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Estableix ara les taxes filles');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Heu configurat la vostra propietat per permetre els nens, però encara no heu establert cap nivell d\'ocupació per a nens.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Establir nivells d\'ocupació');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Cada cop que editeu una habitació o el tipus de propietat, heu de comprovar i actualitzar els nivells d\'ocupació de la vostra propietat o habitacions, ja que afecten el nombre de convidats que es poden acceptar al formulari de reserva.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Adults');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Nens');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Nivell d\'opcions d\'administrador');
jr_define ("_JOMRES_CONFIG_LEVEL_DESC", "Jomres té moltes opcions de menú i configuració que podeu utilitzar quan configureu el vostre lloc. La gran majoria no les haureu de canviar, de manera que queden ocultes per defecte. Podeu triar mostrar aquestes opcions configurant el nivell d’Opcions d’administració. El nivell bàsic us mostra exactament el que necessiteu quan configureu un lloc per primera vegada. El nivell comú us mostra les opcions que més es canvien, i Tot mostra tots els paràmetres i opcions de menús possibles a l’àrea d’administrador.");
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Bàsic');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Comú');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Tot');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Podem recopilar informació sobre com utilitzeu Jomres?');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE", "Ens agradaria recopilar informació sobre com utilitzeu Jomres. No s'emmagatzemarà informació personal identificable, l'ús serà anonimitzat i només s'utilitzarà per ajudar-nos a entendre com la gent utilitza Jomres.");
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Sí, està bé');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'No, no estic d\'acord');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Voleu fer reserves per a més d\'una propietat?');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE", "Jomres es pot utilitzar per a llocs de propietat única o multipropietat. Si feu reserves per a una sola propietat, moltes opcions seran redundants i potencialment confuses. Podeu canviar aquesta configuració més endavant a Configuració> Lloc Configuració> Pestanya de funcionalitat del portal. ");
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Només una propietat');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Llistaré més d\'una propietat');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Quina versió del framework Bootstrap admet la vostra plantilla / tema?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Cada versió del marc Bootstrap requereix un marcatge html lleugerament diferent. Jomres té tres conjunts de conjunts de plantilles compatibles amb Bootstrap, un per a cada versió de Bootstrap. Heu de garantir que el configureu per utilitzar el conjunt de plantilles adequat. Si llavors no sortiu, com ara el disseny, els modals i els menús, no funcionaran correctament. Si decidiu utilitzar una plantilla / tema més endavant amb una versió Bootstrap diferent, podeu canviar el conjunt de plantilles Bootstrap que Jomres hauria d'utilitzar a Administrador> Jomres> Configuració > Pestanya Misc. <br/> <br/> Joomla 3 es distribueix amb Bootstrap 2 per defecte, Joomla 4 utilitzarà Bootstrap 5. La plantilla Jomres Leohtian (Joomla) i el tema (Wordpress) utilitzen Bootstrap 3. Es poden utilitzar diferents plantilles / temes es distribueixen amb els seus propis fitxers Bootstrap, de manera que si teniu cap dubte, poseu-vos en contacte amb el desenvolupador de la vostra plantilla / tema. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Eliminar els decimals dels preus de sortida?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Voleu aplicar el grup per correcció?');
jr_define ("_JOMRES_SEND_GROUP_BY_FIX_DESC", "Algunes instal·lacions mysql poden tenir un problema amb les consultes de Jomres a la pàgina Propietats de llista, Llista de convidats i Llista de factures. Si aquestes pàgines diuen que mostren resultats X de Y però no apareix res a la llista, aquesta opció a Sí pot solucionar el problema. No ho farà si feu allotjament compartit i el servei d'allotjament no permet al vostre usuari mysql emetre l'ordre \"SET GLOBAL sql_mode =\". ");
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Aquesta és una propietat de canal, no es pot administrar localment, visiteu la pàgina del marc de gestió de canals per trobar l\'enllaç d\'administració remota de la propietat');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "No hi ha Bootstrap al tema");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Enllaços a xarxes socials');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Poseu aquí els noms dels vostres comptes de xarxes socials, per exemple "jomres", no l\'URL sencer');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Llista separada per comes d\'idiomes que parla la vostra organització');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url del logotip de la vostra organització');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres actualitzat');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Hi ha una nova versió de Jomres disponible. Heu d\'actualitzar abans de poder continuar utilitzant Jomres, ja que les actualitzacions milloren la funcionalitat i assegureu-vos que la vostra instal·lació romangui segura.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Actualitza Jomres ara');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Actualitzacions del connector');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Hi ha noves versions de connectors disponibles al gestor de connectors. Heu d\'actualitzar tots els connectors abans de poder continuar utilitzant Jomres, ja que les actualitzacions milloren la funcionalitat i assegureu-vos que la vostra instal·lació es mantingui segura.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Connectors per actualitzar');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Si la vostra llicència ja no és vàlida, podeu obtenir una nova clau de llicència des del nostre lloc web.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Actualitza els connectors');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Obtén una clau nova');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Desa la clau nova');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Imatges de tipus de propietat");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Necessites ajuda per reservar?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Truqueu al nostre equip d'atenció al client al número següent per parlar amb un dels nostres representants que us ajudarà amb totes les vostres necessitats de vacances.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Per què reservar amb nosaltres?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Oferim les millors tarifes de reserva");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Tenim les propietats de millor preu actualment del mercat.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Sense comissions de reserva. Estalvieu diners!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Gran selecció de propietats");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," propietats");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," comentaris dels clients");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Sempre estem aquí");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Truca'ns o envia'ns un correu electrònic, en qualsevol moment");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Obtenir assistència les 24 hores abans, durant i després del viatge");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Xarxes socials");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Troba'ns a les xarxes socials");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Excel·lent");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Excepcional");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fabulós");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Excel·lent");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantàstic");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Molt bé");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Bo");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Nova llista");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Descomptat");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'On vols anar?');
	jr_define('DATA_SOURCES_TITLE', "Actualitza les fonts de dades");
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Fonts de dades actualitzades. Les fonts de dades s'utilitzen pels camps d'entrada d'emplenament automàtic del widget de cerca i normalment s'actualitzen automàticament, però aquesta pàgina obliga a actualitzar les dades manualment si és necessari." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Per enviar una sol·licitud de testimoni, envieu la sol·licitud a aquesta URL");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "L'script de propietat de la vista principal");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "L'ID de la propietat que s'ha de veure");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "La plantilla predeterminada és property_details.html, amb aquest argument podeu definir una plantilla de detalls de propietat diferent per mostrar.");

	jr_define('JOMRES_UPDATES_TITLE', 'Actualitzacions de Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Aquesta pàgina pot descarregar i instal·lar la versió més recent de Jomres per a vostè. Utilitza la seva pròpia funcionalitat i no la del CMS amfitrió, per tant, si es produeix un problema durant l'actualització del CMS amfitrió, podeu utilitzar aquesta pàgina per forçar una reinstal·lació de la versió més recent de Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Els administradors de propietats poden utilitzar el mode d\'edició a la interfície per personalitzar les cadenes per a cada propietat, però això només pot funcionar si la configuració de l\'enllaç permanent de WordPress està configurada en Plain (http://www.domain.com/?p=123). Un cop hàgiu fet això, els usuaris d\'interfície podran personalitzar les cadenes, com ara els noms de les sales i altres etiquetes, que són específiques de propietats úniques. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Mode d\'edició d\'etiquetes');
jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Aquesta característica s\'utilitza per canviar les etiquetes d\'elements, normalment a diferents idiomes.');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'El mode d\'edició us permet canviar el nom d\'etiquetes que són úniques per a propietats individuals. Quan feu servir el mode d\'edició per canviar el nom d\'una etiqueta, el canvi només apareixerà a la llista de propietats. Per exemple, en una propietat que vulgueu utilitzar la paraula "Preus" i en una altra la paraula "Preus". No totes les etiquetes es poden canviar, per exemple, els noms dels tipus d\'habitació són etiquetes de tot el lloc, de manera que no es poden canviar, però normalment qualsevol cosa que sigui exclusiva d\'una propietat individual. es pot canviar.');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Si el lloc admet diversos idiomes, mentre utilitzeu un idioma, podeu crear un element únic per a una propietat individual. Quan canvieu l\'idioma actiu, podeu utilitzar el mode d\'edició per canviar el nom d\'aquesta etiqueta, introduint una traducció adequada a l\'idioma actual. Podeu continuar canviant l\'idioma actiu per introduir una traducció adequada per a aquesta etiqueta per a cada idioma que admet el lloc.');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Canvi de mode d\'edició d\'etiquetes');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'En aquesta captura de pantalla veiem l\'interruptor del mode d\'edició. El mode d\'edició està DESACTIVAT i les etiquetes apareixen com a normal: ');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Mode d\'edició d\'etiquetes habilitat');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'En aquesta captura de pantalla veiem que, mentre esteu en mode d\'edició, les etiquetes que podeu canviar de nom es destaquen:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Seleccioneu l\'element a canviar');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Quan es selecciona una etiqueta apareix una finestra emergent:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Canvia l\'etiqueta');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Utilitzeu el formulari petit per canviar l\'etiqueta. Feu clic a la marca per acabar, o feu clic a la X per cancel·lar l\'edició:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Etiqueta canviada');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Un cop hagis desat el canvi, l\'etiqueta s\'actualitzarà a la pàgina. Ara pots desactivar el mode d\'edició:');