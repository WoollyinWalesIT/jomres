<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Reservas rápidas');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Mostrar perfiles');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Dejado en blanco intencionadamente');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuración general');
jr_define('_JOMRES_COM_MR_BACK', 'Atrás');
jr_define('_JOMRES_COM_MR_YES', 'Sí');
jr_define('_JOMRES_COM_MR_NO', 'No');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nuevo');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nueva propiedad');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Huésped nuevo');
jr_define('_JOMRES_COM_MR_SAVE', 'Guardar');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nombre');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Fecha de llegada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Fecha de salida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Blanco');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Nombre del usuario');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Nivel de acceso');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Usuario modificado');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Todas las reservas');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editar reservas: ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Llegadas/Salidas');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Huésped');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Habitación');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pago');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nombre');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Apellido');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Requisitos especiales');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Observe por favor que algunos requisitos especiales pueden incurrir en recargos.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Cancele la reserva');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'El número o nombre de la casa');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Calle');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Código  postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de teléfono');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Número móvil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Dirección electrónica');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'No puede cancelar esa reserva, porque el huésped confirmó la entrada');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depósito no pagado');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmar cancelación');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Reserva cancelada');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Días para llegar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipo de reserva');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Negro');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepción');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Nombre de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Número de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Piso');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Acceso denegado');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Máximo de clientes');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tipo de habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Descripción de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista de características de la habitación');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depósito pagado');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introducir depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total a pagar');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Ref. de Depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Número de Reserva');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depósito salvado');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Habitaciones disponibles');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Propiedad');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tipo de habitación');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Editar detalles de huésped');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nombre');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Apellido');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Casa');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Calle');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ciudad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Código Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Teléfono');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Móvil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleccione una habitación');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Días de estancia');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Vea habitaciones y configuración de las características');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Habitación');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Hb características');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Hb tipo');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Propiedades');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Prop. características');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Habitación');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipo');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nombre');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Número');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Piso');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. de personas');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Características');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Editar el artículo');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Hb características');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descripción de la característica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Característica del sitio agregada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Característica del sitio actualizada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Hb tipo');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tipo abreviatura del sitio');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Descripción de tipo de la habitación');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipo de habitación agregada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editar artículo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nombre');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Calle');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ciudad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Región');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'País');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Codigo Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telf.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Características');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Propiedad actualizada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Característica de la propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Característica de la propiedad abrev.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descripción completa de característica de la propiedad ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Característica de la propiedad actualizada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Título de tarifa');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descripción');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Válido de');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Válido hasta');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa por noche');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Dias mínimos');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Dias máximos');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Personas mínimas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Personas máximas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tipo de la Hb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorar PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permitir fines de semana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editar artículo');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Copiar artículo idéntico');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa borrada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editar la tarifa');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Reserva guardada');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar una habitación');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Entrada de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Salida de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Listar las reservas');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'I N I C I O');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Administración de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administración de propiedad');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verifique la disponibilidad');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Nombre');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Apellido');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Número de la Casa');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Calle');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Código Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telefono');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Móvil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'No hay habitaciones disponibles capaces de satisfacer los parámetros especificados');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Gracias por hacer su reserva con nosotros. Esperamos que usted goce de su permanencia.<br><br> <b>Por favor, note que esto es sólo una  reserva preliminar, y no será confirmada hasta que usted reciba su email de confirmación por nuestra parte.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Entrada de huésped ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Huésped entrada');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Salida de huésped ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Suplementos');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifas & Moneda');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Carpetas uploads');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Solo suplementos por persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Cerciónese de marcar "Sí" si usted quiere cargar solo suplementos de persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Solo cargar suplemento de persona');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '¿El Depósito requiere porcentaje?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '¿El depósito es un porcentaje de la suma de la reserva? Si no, el depósito aplicado es un valor fijo');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'El depósito requirió el valor');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Por persona, por noche');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Escoja "Sí" si usted quiere cargos por persona-por-noche. Si no, entonces los costos se calcularán en base a habitación-por-noche');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Tamaño de la carpeta');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. Tamaño de carpeta en Kilobytes');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Reservado');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalles de la reserva ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Se le recuerda a que una reserva es un contrato legalmente obligatorio, si por alguna razón usted tiene que cancelar o acortar su reserva entonces será aún responsable de pagar la cantidad completa.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>La cancelación y el acortamiento se cargan a su cuenta</i> Si usted cancela sus vacaciones, la cancelación debe ser confirmada por escrito. Los cargos por cancelación son:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'La fecha de la llegada a 14 días');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Imprima la carta de confirmación');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Impresión de la factura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Número de noches: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Costo por noche: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Suma total');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Imprimir factura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Agregue el servicio para facturar');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descripción del servicio');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Valor del Servicio');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Otros artículos facturados');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Artículo agregado a la factura');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Subir imagen ');
jr_define('_JOMRES_FILE_UPLOAD', 'Archivo subido');
jr_define('_JOMRES_COM_A_ODDS', 'Probabilidades y términos');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Llamar lista de Minicomponentes');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Marque esta opción a Si para ver un log de los minicomponentes utilizados al final de la hoja después de que Jomres complete su ejecución. Es útil si estás intentando identificar que Minicomponentes están llevando a cabo ciertos servicios.');
jr_define('_JOMRES_FILE_DELETE', 'Borre esta imagen');
jr_define('_JOMRES_FILE_DELETED', 'El fichero se borró');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Borrar');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Incapaz de eliminar esta habitación, ya hay reservas. Cancele esas reservas y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Carcaterística de habitación eliminada');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Borre la característica de la habitación');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Imposible eliminar esta característica de la habitación, está asignada u ocupada. Elimine la característica de esas habitaciónes y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Característica de la habitación borrada');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Borrar la característica de la propiedad');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Imposible eliminar esta característica de la propiedad, está asignada. Elimine la característica de esta propiedad y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'La característica de la propiedad se borró');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Borre tipo de la habitación');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tipo de habitación borrada');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Borre la propiedad');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'La propiedad se borró');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Usted no tiene los permisos para borrar esta propiedad.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Anchura de imagen grande');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Haga click para ver el mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descripción de la propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'horario de entrada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Actividades del área');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Direcciones');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeropuertos');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Otros transportes');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Políticas y reclamaciones');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Dirección');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Visitantes pueden reservar online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Ponga esto a "SI" para asegurar que los visitantes puedan reservar una habitación online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Reservas para una período fijo');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Si pone esto en "SI" las reservas serán por un período fijo. Si se pone en "NO", entonces asegurese que el "día predefinido de llegada" se puso en "SI" (si no quiere forzar al cliente  a llegar un día específico) en este caso no conseguirá muchas entradas al calendario de disponibilidad');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Período de Reservas: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Reservar una Hb');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max. períodos, p.e. 3x7 períodos = 21 dias');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Es una habitación para solteros?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Reservar');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmar la reserva');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Lunes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Martes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Miércoles');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Jueves');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Viernes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sábado');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Domingo');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Lu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Ju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Vi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Do');
jr_define('_JOMRES_COM_A_AVLCAL', 'calendario de disponibilidad.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'El color del tipo de letra para la fecha actual');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'El color del tipo de letra por días en el mes de despliegue');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'El color del tipo de letra por días no en el mes de despliegue');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Color de fondo por días cuando la propiedad/espacio está disponible');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Color de fondo por días cuando no se muestra mes');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Color de fondo por días ocupados');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Color de fondo para reservar provisionalmente los espacios (reservas para un depósito que no se ha tomado)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Color de fondo para fechas atrasadas');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupado/no disponible');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponible para reservas');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Reservas provisionales');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Día predefinido de llegada');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Sólo para los sitios que ofrecen las reservas fijas del período. Escoja el día en que deben empezar las llegadas.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Día fijo de llegada');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Período de la estancia (días)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Mostrar la disponibilidad?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Ponga esto a "Sí" para mostrar los calendarios de disponibilidad');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Disponibilidad');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Click en una fecha libre para ver el formulario de reservas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Reservas negras');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nuevas Reservas negras ');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Borrar huésped');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Huésped borrado');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Incapaz de borrar a este huésped ya que tiene reservas abiertas. Cancele las reservas y pruebe otra vez.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'No importa');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Formato de salida del Calendario');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Formato de entrada del Calendario');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Eso permite cambiar el formato de entrada de los datos');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Las reservas fijas del período permiten interrupciones cortas');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Longitud de interrupción corta');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicado');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Auditoría');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Fecha');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Usuario (Nombre de usuario)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtre en la fecha');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Estado');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Llegada Pendiente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Llegadas hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Residente actual');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Sale hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Salida atrasada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'No ha llegado');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Habitación creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Habitación actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Habitación borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Característica creada de Hb');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Característica actualizada de Hb');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Característica borrada de Hb');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Propiedad creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Propiedad actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Propiedad borrada');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Configuración de propiedad editada');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Propiedades publicadas');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa actualizada');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Agregar cargos por servicios');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Huésped Entrada');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Depósito ingresado');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Huésped creado');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Huésped actualizado');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Habitación reservada');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Extra creado');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Extra Actualizado');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Extra Borrado');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra Extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Reserva negra introducida.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Reserva negra borrada.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Descripción');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nombre');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Precio');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra actualizado');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editar artículo');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra borrado');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Administración de extras');
jr_define('_JOMRES_COM_A_EXTRAS', '¿Mostrar los extra en el momento de reservar?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Ponga esto a "Sí" para mostrar cualquier extra que usted desee ofrecer al huésped');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extras opcionales.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Dia de comienzo de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Servicios actuales resumidos');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Administración de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Error al reservar estas habitationes, una o más de las habitaciones que usted escogió no están libres.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Habitaciones incluidas en Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No hay Reserva negra en la lista');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Número de estrellas');
jr_define('_JOMRES_COM_A_RESET', 'Reponer');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Reserva cancelada');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Busque aquí para:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Símbolo de moneda');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Código de moneda');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Haga click para más información');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '¿Limitar las reservas anticipadas?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ponga esto a "Sí" si usted quiere limitar las reservas anticipadas (utilizar el próximo campo para poner el límite en términos de días). Si usted pone esto a sí entonces si el usuario trata de reservar más de n días entonces su fecha de llegada será restaurada a la fecha de hoy');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Días de reservas anticipadas están limitados a:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Impuesto');
jr_define('_JOMRES_COM_A_ROOMTAX', 'IVA de la habitación');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Impuesto fijo ');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Porcentaje de impuesto');
jr_define('_JOMRES_COM_A_EUROTAX', 'Impuesto');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Porcentaje de impuestos');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Archivar todos los registros');
jr_define('_JOMRES_FRONT_TARIFFS', 'Nuestras tarifas');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nombre de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Descripción de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tipo de habitación');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Válido de');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Válido a');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Por persona por noche');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Por noche');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'No incluye fines de semana');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Días mínimos');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Días máximos');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Personas mínimas');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Personas maximas');
jr_define('_JOMRES_FRONT_PREVIEW', 'Inspección previa');
jr_define('_JOMRES_COM_A_EDITINGMODEON', '¿Modo de edición activado?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Texto actualizado.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Corrija el idioma');
jr_define('_JOMRES_FRONT_PTYPE', 'Tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Lista de propiedades');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editar tipo de propiedades');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descripción de tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Tipo de propiedad grabado');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Tipo(s) de propiedad borrados');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Recuerde  pagar');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ningún servicio extra para facturar');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depósito');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Cantidad completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Cantidad cargada en tiempo de la reserva');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Utilice esta opción para decidir lo que se debe cargar al reservar. Escoja el depósito si el depósito se debe cargar, o la cantidad completa si la cantidad completa se debe cargar.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Meses del Cal. a mostrar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'En la disponibilidad de los habitaciones, cuántos meses del calendario se deberian mostrar?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Pasarelas');
jr_define('_JOMRES_COM_A_CANCEL', 'Cancelar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Elija por favor los habitacion(es) que usted desea tener fuera de servicio, y las fechas relevantes. <br>Si una habitacion no tiene una marca, no se puede incluir en la Reserva negra hasta que todas los reservas estén completadas/canceladas.<br/> Cuándo usted haya escogido las fechas apropiadas, hacer click en el botón azul "aplica" para reexaminar la disponibilidad de la habitación. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Por favor entrar otra vez.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Razón');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', '¿Utilizar pasarelas de Pagos en Línea?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Escoja por favor su método de pago.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', '¿Pasarelas de Pagos en Línea permitido?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin modificado');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin insertado');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Ver la web de la propiedad');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Link Externo');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Ponga el link de su website aqui.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Editar Tarjeta de crédito');
jr_define('_JOMRES_COM_A_EDITICON', 'Editar el tamaño del icono');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Diapositivas');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', '¿Mostrar enlace a Diapositivas?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', '¿Mostrar diapositivas en línea?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Imagen de la propiedad');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', '¿Mostrar enlace a Tarifas?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', '¿Popups permitidos?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Cargar las imágenes en serie');
jr_define('_JOMRES_A_TABS_MISC', 'Misceláneo');
jr_define('_JOMRES_A', 'Configuración de la página');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Utilice las características globales de la propiedad');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Para asignar una imagen a esta característica, primero tiene que subir sus imágenes a la característica de negocios /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icono');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Escoja el plugin de la búsqueda que usted desee utilizar.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Lo siento, su búsqueda no devolvió resultados. Modifique por favor su búsqueda y pruebe otra vez.</b>');
jr_define('_JOMRES_AREYOUSURE', '¿Seguro que usted desea hacer esto?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Reservar una propiedad');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', '¿Mostrar Tarifas?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Dirección');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Información detallada');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Click para habitaciones y disponibilidades');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Mostrar información de dirección debajo de este enlace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Mostrar detalles de la propiedad debajo de este enlace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Mostrar habitaciones y disponibilidades debajo de este enlace');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifa simple');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Promedios');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Seleccione el modelo de tarifa a utilizar');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Ud. tiene disponible dos métodos de calcular las tarifas. Primero, el método de "tarifa simple" el cual permite ofertar diferentes tarifas al huésped y el cálculo por estadía es el mismo para todo la estancia completa. Esto es útil cuando queremos ofrecer diferentes tarifas para una misma fecha. Elija el otro método, "tarifa promedio" si desea ajustar los precios dependientes de la fecha. El sistema encontrará todas las tarifas para cada día de reserva y retornará el promedio de todo el período deseado');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrar fecha de salida escogida');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Poner a "SI" si desea mostrar el campo fecha de salida. Solo use si sabe que hacer, la fecha de salida siempre se activará el día después de la llegada.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Límite de descripción');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Esto limita la cantidad de caracteres mostrados cuando se describe una propiedad.');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', '¿Formato date() usado?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicar');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Despublicar');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Error en entrada de color de fondo');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'País por defecto en formulario de reserva');
jr_define('_JOMRES_JAVASCRIPT_', 'Campos marcados con * rojo son requeridos.');
jr_define('_JOMRES_COM_SELFREGISTRATION', '¿Los usuarios pueden registrar sus propiedades?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Poner a "SI" si desea que los usuarios estén habilitados para registrar sus propiedades sin intervención del administrador.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Campos marcados con * rojo son requeridos.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Propiedad creada');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Mostrar calendario desde el inicio del año?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'El calendario de disponibilidad se mostrará desde el inicio del año actual.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Habitaciones disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Regresar a detalles de la propiedad');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Tipos de habitación');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Límite de búsqueda aleatoria');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', '¿Mostrar enlace a Google Currency Conversion en el listado de tarifas?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Convertir precio a :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', '¿Permitir a los usuarios editar usando editores HTML?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Particularidades de reserva');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleccione los detalles requeridos de su reserva');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilidad ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Seleccione la habitación que desea');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Mirar si la propiedad está disponible para esta fecha.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Extras opcionales');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleccione que extra opcional desea incluir en la reserva');
jr_define('_JOMRES_COM_PERDAY', 'Por noche');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Dirección');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Por favor ingrese los detalles.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Habitaciones disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Habitaciones seleccionadas');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>La posible fecha de llegada más cercana es: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Por noche:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Alojamiento');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extras:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'impuestos:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Descuentos:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total Final:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Huéspedes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Click para añadir esta habitación a su reserva');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click para eliminar esta habitación de su reserva');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipos de huésped');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tipo');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Tipo de huésped, Ej: Niños 5-10, o estudiantes ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Notas');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Notas de lo que usted puede querer hacer con respecto a este tipo de huésped');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Máximo');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Máximo número de este tipo de huésped que puede ser seleccionado en la reserva');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Es porcentaje');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'La figura calculada es un porcentaje de la figura BASE calculada para la habitación. Si esto se pone a "NO" entonces la figura que usted especifica simplemente se agrega o substrae del valor BASE de la habitación.');
jr_define('_JOMRES_VARIANCES_POSNEG', '¿Añadir varianza?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'La figura calculada se agrega o elimina de la figura BASE calculada para la habitación. Ponga esto a "NO" si usted quiere esto para un descuento de la figura BASE.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Varianza');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Cantidad a variar');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modificado tipo de orden de huésped');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Eliminado tipo de huésped');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Creado tipo de huésped');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Actualizado tipo de huésped');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Actualizado tipo de huésped');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', '¿Mostrar enlace a listado de habitaciones en la página de detalles de la propiedad?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', '¿Mostrar <b>solo</b> listado de disponibilidad de habitaciones por calendario?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Cambie esto a "Sí" para desactivar despliegue del título de propiedad y detalles, para que sólo el calendario de disponibilidad de habitaciones sea visto en la sección de detalles de la propiedad. Pensado para usuarios que alquilan las habitaciones de las propiedades.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Intervalo mínimo de Llegada-Salida');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'El intervalo mínimo en la reserva entre las fechas de llegada y salida.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Listado de habitaciones en la reserva muestra número de habitación');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Listado de habitaciones en la reserva muestra nombre de habitación');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Listado de habitaciones en la reserva muestra listado de tarifas');
jr_define('_JOMRES_ORDER', 'Orden');
jr_define('_JOMRES_REQUIREDFIELDS', 'Requerido');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Días antes de la llegada');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Lapso mínimo de días entre hoy y el día de llegada.');
jr_define('_JOMRES_DTV', 'Variaciones del tipo de fecha');
jr_define('_JOMRES_DTV_DOW', 'Día de la semana');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tipo de huésped por defecto');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Número por defecto del primer tipo de huésped a mostrar, si usa diferentes tipos de huéspedes.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', '¿Solo los usuarios registrados pueden reservar en línea?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Lo sentimos, para reservar en línea debe ser un usuario registrado. Click aquí para registrarse en el sitio.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Color de texto para enlaces en reservas');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Bordes fin de semana');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Habitación reservada');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Reserva negra');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '¿Redondear depósito a número entero?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '¿Cargar depósitos?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '¿Cargos de tarifas almacenados como figuras semanales?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Tiene la opción de almacenar los cargos por tarifa en valores diarios y semanales.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Precio por semana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fechas de llegada arregladas: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Cuando esta opción es seleccionada, los números de las fechas son mostradas en el menú desplegable');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Fecha de llegada incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Fecha de salida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'La reserva es muy corta. Se necesitan varios días entre la llegada y la salida:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'El intervalo es');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Variante tipo de huésped incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Seleccione el tipo de huésped');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Demasiadas opciones para la lista de tarifas');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ha seleccionado más habitaciones que huéspedes, click en una habitación para eliminarla de su selección');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Demasiados huéspedes para las camas disponibles');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Necesita más habitaciones');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Seleccione una habitación');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Nombre requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Apellido requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'No. casa requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Calle  requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Pueblo requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Región requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Código postal requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'País requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Teléfono requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Móvil requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email requerido');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Tenemos VACANTES!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'No hay habitaciones seleccionadas');
jr_define('_JOMRES_BOOKING_NUMBER', 'Reserva no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok para reservar, mensaje de fondo');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', '¿Descargar variables de plantilla?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Activar esto para descargar variables de la plantilla para cada vista. Útil si desea ver si cierto elemento está disponible para ser usado en una plantilla determinada.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figura es porcentaje');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Ponga esto a "Sí" si la figura de cálculo de personas es un porcentaje. Si no entonces se aplicará como una cifra fija.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Límite en habitaciones/tarifas disponibles');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Use esto para limitar el número de cuartos disponibles y aranceles que se listan en el formulario de reservación. Póngalo a cero si usted no quiere habilitar limitaciones. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'NO hay VACANTES!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Reserve ahora: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', '¿Modo de edición Global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Tenga cuidado con esta función. Si se establece en Sí, el modo de edición afectará el texto a medida para todas las propiedades en el sistema para la constante que se está editando.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbolo Global de moneda');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Plegado de Componentes');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Ponga esto a Sí, si el componente está plegado de manera que las áreas del módulo y de cabecera no son visibles');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Solo fines de Semana');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Días de fin de semana');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Establezca sus días de fin de semana. Tarifas que permitan o no fines de semana tendrán esta opción en cuenta al generar la lista de habitaciones.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Seleccione su país antes de añadir otra información de la propiedad');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Grabe sus cambios antes subir imágenes de la propiedad');
jr_define('_JOMRES_TARIFFSFROM', 'Precios desde - ');
jr_define('_JOMRES_SEARCH_ALL', 'Todo');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Búsqueda por país');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Búsqueda por región');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Búsqueda por ciudad');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Función de búsqueda.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Buscar');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Escriba una palabra en el cuadro y pulse el botón.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Palabras de búsqueda: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Por favor, introduzca su llegada prevista y la fecha de salida y pulse el botón para buscar habitaciones disponibles en las fechas elegidas.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Listar propiedades por tipo de propiedad');
jr_define('_JOMRES_SEARCH_RTYPES', 'Listar propiedades por tipo de habitación');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Por defecto');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nombre Propiedad');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Región Propiedad');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Ciudad Propiedad');
jr_define('_JOMRES_SORTORDER_STARS', 'Estrellas');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalles Propiedad - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formulario de Reserva');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualice su dirección');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-chequear disponibilidad<br/>(La selección de habitación se reseteará)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-chequear disponibilidad');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifique sus extras opcionales');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Cambie su selección de habitación');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Actualice su dirección');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Lo sentimos uno o más datos de dirección son incorrectos');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imagen Habitación');
jr_define('_JOMRES_CURRENCYFORMAT', 'Formato de moneda');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opciones de búsqueda');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Logs Disponibles');
jr_define('JOMRES_COM_A_MESSAGE', 'Mensaje');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Modo configuración tarifas');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Cuidado: Cambiar entre diferentes tipos de tarifas puede originar pérdida de datos. Veánse las notas a continuación con respecto a esto</b>.
<br/><br/>
Tiene tres opciones para configurar las tarifas.<br/>
Normal mode: Puedes tener una tarifa por cada tipo de habitación, esto es válido para los siguientes 10 años.<br/>
Micromanage: Puedes cambiar el precio por cada día y habitación/propiedad<br/>
Advanced: El antiguo método Jomres de generar tarifas<br/>
<br/>
Los diferentes modos de tarifas le permiten elegir el método de configuración de las tarifas que más le convenga. <br/>
El modo normal es el más simplista, pero es más fácil de entender, ya que cruzará referencia de habitaciones y tarifas a tipos de habitación/propiedad y le permite configurar las habitaciones y los precios en la misma página. <br/>
Micro gestión le permite variar los tipos en el día a día sin tener que gestionar montones de las tarifas, que se realiza por lotes de referencias cruzadas de tarifas diferentes entre sí. Esto da lugar a una serie de tarifas que se han creado para que abarquen un período de tiempo, pero no se puede aplicar una tarifa sobre otra. <br/>
Modo avanzado le permite crear una habitacion y asociarla con un tipo de habitación. A continuación, crea una tarifa que se asocia con un tipo de habitación. El uso de este método es posible aplicar una tarifa sobre otra, por ejemplo, un tipo de habitación "Doble cama" puede tener una tarifa de alojamiento y desayuno, y otra para la cama, desayuno y cena. El método avanzado requiere un poco más de atención a los detalles, ya que es posible des-asociar una habitación o tarifa de un tipo de habitación/propiedad o configurarla incorrectamente válida desde y hasta las fechas, pero te da opciones de configuración que los otros modos no ofrecen. <br/>
<br/>
Debido a que los modos Normal y microgestión requieren una específica puesta a punto de habitaciones y tarifas para el modo de trabajar el sistema puede ser necesario volver a situar algunos datos para hacer las configuraciones de la actual compatible con el modo de edición actual tarifa. <br/>
<br/>
Normal -> Avanzado. Sin cambios. Las tarifas vigentes se mantienen. <br/>
Normal -> microgestión. Todas las tarifas existentes se eliminan. <br/>
Avanzado -> Normal. Todas las tarifas existentes se eliminan. <br/>
Avanzado -> microgestión. Todas las tarifas existentes se eliminan. <br/>
Microgestión -> Avanzado. Todas las referencias cruzadas existentes entre las tarifas se eliminan, pero las tarifas siguen se mantienen. <br/>
Microgestión -> Normal. Todas las referencias cruzadas existentes y las tarifas se eliminan.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', '¿Mostrar la lista de habitaciones en la hoja de detalle?');
jr_define('JOMRES_PROPERTYTYPE', 'Tipo de propiedad');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Personas máximas por habitación');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Personas máximas en la reserva');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Añadir nota');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Ver notas');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Añadir nueva nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Borrar nota');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Listado de reservas');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Mis reservas');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Ver reservas');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Ver favoritos');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', '¡No tiene ningún favorito añadido todavia!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipo de propiedad');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Activo');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Este plugin permite activar y configurar los precios de sus habitaciones dinámicamente.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'La mayoría de las empresas recalculan los precios de las habitaciones en función del número de habitaciones de un tipo requerido que están disponibles en una fecha determinada. Esto les permite ofrecer descuentos en el tipo de habitación que no está ocupada durante un período determinado con el objetivo de atraer a los clientes que de otro modo podrían perderse. <br/> La activación y configuración de este plugin le permite ofrecer precios ajustables basados en el número de habitaciones de un tipo seleccionado que están disponibles en la propiedad en un día determinado. <br/> Threashold define el número de días que desde la fecha actual hasta la fecha de llegada permite activar esta característica, nos permite la posibilidad de ajustar el porcentaje de habitaciones que pueden estar disponibles antes de que un determinado descuento se aplique.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (número de días entre la llegada y la fecha actual)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Porcentaje de habitaciones ocupadas  10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Porcentaje de habitaciones ocupadas  25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Porcentaje de habitaciones ocupadas  50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Porcentaje de habitaciones ocupadas  75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Descuento %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ha sido descontado de  ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' a ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Precio de habitación no descontado ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Puedes obtener google maps API key desde <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Una vez tenga introducido su map key aquí, Jomres mostrará el mapa en su página de detalle de la propiedad.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Último minuto');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', '¿Activo?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Poner a Si si quiere ofrecer ofertas de último minuto.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Si se hace la reserva y la fecha de llegada es sólo N días desde la fecha de reserva, el descuento puede ser aplicado');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Descuento');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'En porcentaje');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '¡Un descuento ha sido aplicado a esta reserva!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'El costo de la estancia a sido reducido en  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Está propiedad ofrece un descuento de último minuto de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' por ciento si su fecha de llegada es anterior a ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' por ciento o más si su fecha de llegada es antes de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. ¡Reserve ahora para disfrutar de la mejor oferta!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Información detallada de tarifa');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Poner a Si para ver la información detallada en los detalles de propiedad/tarifa');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Reducir al mínimo las opciones de configuración');
jr_define('_JOMCOMP_AMEND', 'Modificar reserva - Selección de propiedad');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleccionar nueva propiedad');
jr_define('_JOMCOMP_AMEND_HEADER', 'Contrato Original:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Depósito Pagado');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Depósito No Pagado');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Anulación Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Anulación de Depósito');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cancelar');
jr_define('_JRPORTAL_CPANEL', 'Panel de Control');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Tipo de Comisión predeterminada');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Elija la comisión predeterminada que será aplicada a la propiedad en caso de que no sea seleecionada otra.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Lista de tipos de comisión');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Tipos de comisión');
jr_define('_JRPORTAL_CRATE_TITLE', 'Título');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tipo');
jr_define('_JRPORTAL_CRATE_VALUE', 'Tipo de comisión');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Código de moneda');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Lista de propiedades');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nombre propiedad');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Dirección propiedad');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Las propiedades cuyo color de fondo es rojo todavía no tienen un tipo de comisión aplicado.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Estadísticas');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tipo de comisión');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Lista de reservas');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Propiedad id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Factura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Reservas total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Fecha archivada');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descripción');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Puede tener archivos específicos de idioma mediante el ajuste del nombre de la subcarpeta, ej. "yachtbrokerage" y copiar un archivo de sublenguaje en la subcarpeta. Puede modificar ese archivo de lenguajes para ese tipo de propiedad para convertirse en habitaciones, ej DVDs, ect.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'No se puede eliminar esta propiedad, ya que es la única propiedad a la que tiene acceso. Si desea desactivarla, por favor use la característica de despublicar en su barra de herramientas. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Alojamiento Total');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noche(s) de ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'por habitación ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Aumentar la duración de la estancia ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Resumen de precio ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Por favor leer y aceptar ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Un resumen de su reserva se muestra a continuación. <br /> Para hacer cualquier cambio, por favor haga clic en el botón Modificar reserva. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Si necesita cambiar cualquiera de la información anterior, por favor haga clic aquí');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Modificar Reserva');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Por favor, introduzca cualquier solicitud especial en el cuadro siguiente.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Confirmo que la información anterior es correcta y de acuerdo con la ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'por persona por noche ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'de');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Comienzo');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Anterior');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Siguiente');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'Fin');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Resultados');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Tenga en cuenta que esto no es un formulario de reserva, en su lugar está enviando un correo electrónico. <br/> Por favor, introduzca el mensaje que le gustaría enviar a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contactar con Hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Consulta de la propiedad de  ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Gracias por su consulta, su mensaje ha sido enviado a la dirección de contacto de la propiedad, con copia a su propio correo electrónico para sus archivos. Se le responderá tan pronto como sea posible');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' con respecto a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Consulta');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Por favor seleccione el alojamiento deseado en la lista de la derecha');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Habitaciones mínimas ya seleccionadas');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Número mínimo de habitaciones previamente seleccionadas en la reserva antes de mostrar el combo de tipo de habitación/tarifa que pueden ser ofrecidas. Le permite tener las tarifas de descuento, cuando más de N habitaciones están ya seleccionadas. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Número máximo de habitaciones ya seleccionadas ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'El número máximo de habitaciones ya seleccionadas en la reserva antes de que el combo tarifas/habitación ya no se ofrezca. Le permite dejar de ofrecer este tipo de combinación de tarifas/habitación una vez que N  habitaciones hayan sido seleccionados en el formulario de reserva. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Tenga en cuenta que Suplemento por persona no será usada si Suplemento por persona se establece en Sí en la Configuración General. Estos ajustes son una alternativa a tener tarifas planas Suplemento por persona, no una adición a la tarifa plana SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Disponible');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Algunas reservas');
jr_define('_JOMRES_AVLCAL_HALF', 'Ocupación media');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Ocupación alta');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Completo');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Por semana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Por día');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Por reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Por persona por reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Por persona por día');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Por persona por semana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Por día (Mínimo días)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Por días X habitaciones seleccionadas');
jr_define('_JOMRES_REGISTRYREBUILD', 'Reconstruir registro');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalmente, el Jomres plugin Registro se reconstruye automáticamente cada vez que ve que el administrador de plugins agrega o quita un plugin, sin embargo es posible que usted no pueda usar estas características, por alguna razón, por lo tanto usted puede utilizar esta función para reconstruir el Registro manualmente. Si usted tiene acceso a la función del administrador de complementos y actualizaciones, entonces es poco probable que usted tenga que utilizar esta función. Tendrá que reconstruir del plugin de registro siempre que agregue un nuevo mini-componente y no utilice el Administrador de complementos para agregarlo.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registro reconstruido con éxito');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Hubo un error con la reconstrucción del registro de minicomponentes. Usted debe verificar su registro de errores Jomres para ver si hay un registro que provocó el error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Buscar por rango de precio.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', '¡No tiene ninguna reserva todavía!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Editar su tipo propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleccionar su tipo propiedad');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Su consulta...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limite lista propiedades');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'El número de propiedades para mostrar en una página después de una búsqueda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Función de búsqueda integrada');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'La característica búsqueda integrada Jomres permite a los usuarios buscar a través de Jomres Propiedades de acuerdo con un conjunto de funciones. Si ya ha utilizado las funciones de búsqueda de Jomres en Joomla usted estará familiarizado con estos ajustes. <br/> Esta característica nos permite ofrecer el manejo de la búsqueda en Jomres para aquellos usuarios que no desean utilizar módulos de búsqueda de Joomla, o para otros usuarios de CMS que no tienen sus propios módulos de búsqueda Jomres. <br/> Sólo recuerde que si decide buscar algo a través de un enlace (es decir, no un menú desplegable), entonces las opciones de búsqueda no se llevarán a cabo, sólo el elemento que se corresponde con el enlace que ha hecho clic. <br/> Note que por defecto el diseño de esta búsqueda integrada no es muy bonito. Eso es porque el archivo de plantilla que construye el diseño tiene que incluir todas las opciones posibles, algunos de las cuales son incompatibles.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', '¿Activar esta función?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Si esta función está habilitada, cualquier llamada a Jomres que muestre la lista de propiedades mostrará también las opciones de búsqueda.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Usar columnas');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Cualquier opción de búsqueda que haya definido como enlace (cuando sea el caso) se mostrará como columnas (IE pone br al final del enlace)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Búsqueda por región seleccionando combo desplegable');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Ofrece un menú desplegable de búsqueda para filtrar a través de países/regiones/ciudades. Si va para utilizar esta función, entonces es mejor que no utilice la búsqueda por región o ciudad que sigue.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Buscar por nombre Propiedad');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Mostrar la búsqueda por el nombre de propiedad introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', '¿Mostrar como un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Cambie esto a no para mostrar la lista de enlaces');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Buscar por ciudad/región');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Mostrar la búsqueda por la región introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', '¿Mostrar como un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Cambie esto a no para mostrar la lista de enlaces');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Buscar por tipo de propiedad');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Mostrar la búsqueda por tipo de propiedad introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', '¿Mostrar como un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Cambie esto a no para mostrar la lista de enlaces');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Buscar por tipo de habitación');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Mostrar la búsqueda por el tipo de habitación introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', '¿Mostrar como un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Cambie esto a no para mostrar la lista de enlaces');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Buscar por caracteristicas');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Mostrar la búsqueda por la característica introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', '¿Mostrar como un desplegable?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Cambie esto a no para mostrar la lista de enlaces como descripción de imágenes y casillas de verificación');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Buscar por descripción');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Mostrar la búsqueda por la descripción introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Buscar por disponibilidad');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Mostrar la búsqueda por la disponibilidad introducida');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Buscar por rango de precio');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Mostrar la búsqueda por por rango de precio introducido');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Buscar por incrementos de rango de precio');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres mirará en todos los valores de las tarifas a continuación, calculará una serie de rangos de precios basado en los incrementos de valor que estableció aquí.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Por defecto, si una propiedad no está seleccionada en Jomres se realiza una búsqueda. Si esta búsqueda no fue provocada por un módulo de búsqueda, entonces la búsqueda originará resultados al azar (deliberadamente). Esta opción le permite limitar el número de resultados en esa búsqueda al azar.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Ajustes de trabajo para Cron y registro');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron información del trabajo. La funcionalidad pseudocron es necesaria para la facturación y manejo de la comisión.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Instalado minicomponents cron. Para ejecutar una tarea de cron individual utilice los enlaces que se especifican a continuación. Tenga en cuenta que el cron jobs no produce ningún resultado por lo que no verá ninguna información en la página. En cambio, se refiere a las anotaciones de trabajo referidas a continuación.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Método');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Si usted no tiene acceso a cron jobs, active este minicomponente, de lo contrario cree una tarea programada y dígale que se ejecute<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Mostrar el registro en el navegador');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Sólo funciona si el método se establece en minicomponente.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Registro habilitado');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ponga esto en Sí para que el registro esté habilitado. Los resultados de los registros se emitirán a continuación');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Registro detallado');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lotes de registro de salida');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edición de plantilla');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Campos personalizados');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Aquí puede definir campos simples personalizados que se mostrarán en el formulario de reserva.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nombre de campo (sin espacios)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valor por defecto');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descripción');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requerido');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Cantidad máxima');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Si la cantidad máxima se establece en más de 1 , a los huéspedes se les ofrecerá un menú desplegable para elegir la cantidad de los extras que necesitan.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Impuesto');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Código Impuesto');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Descripción Impuesto');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'No puede borrar este Impuesto.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Tasa');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Facturas');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'No pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Pagada');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Cancelada');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Pendiente');
jr_define('_JRPORTAL_INVOICES_USER', 'Usuario');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Estado');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Planteado');
jr_define('_JRPORTAL_INVOICES_DUE', 'Debida');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Suscripción');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Total pendiente de pago');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Frecuencia repetición');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Día del mes recurrentes');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Código de moneda');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Líneas de pedido');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nombre');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Descripción');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Precio inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Cantidad inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Descuento inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Total inicial');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Código de impuesto');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Descripción de impuesto');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Tasa impositiva');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', '¿Reemplazar los ajustes estándar de la pasarela Jomres? ');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Mostrar mis facturas');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Cupones descuento');
jr_define('_JRPORTAL_COUPONS_DESC', 'Los códigos de descuento se pueden generar y enviar ​​a los clientes como un incentivo para hacer reservas. Válido desde y hasta las fechas se refiere a las fechas en que la reserva se puede hacer en adelante, no a la fecha de la propia reserva.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Código de cupón');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Válido desde');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Válido hasta');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Importe de descuento');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'El descuento es un porcentaje');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Sólo habitación');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Si tiene un código de cupón, por favor escribalo en el cuadro y haga clic en "Guardar cupón"para guardar los detalles de cupón en su reserva.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Guardar cupón');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupón guardado en reserva');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Número de cupón no encontrado');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valor de cupón de descuento');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Descuento de reserva. Código de Descuento válido/valor de los descuentos/configuración de cupón: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Elegir idioma');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Elija las opciones de idioma que se muestra en el menú desplegable');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', '¿Mostrar el menú desplegable de selección de idioma?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Estimado/a');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Gracias por registrarse ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Su nombre de usuario es : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Su contraseña es : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Por favor inicie sesión para ver su reservas ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupón guardado');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupón borrado');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Usuario');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Contraseña');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Número de teléfono notificaciones');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Por favor utilice el formato 'código del país, número de móvil'. Por ejemplo, el número de móvil en el Reino Unido sería algo así como '447979123456'. Deje en blanco si no desea que ninguna notificación de correo electrónico sea enviada a tu teléfono móvil.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviamente, no se puede utilizar/probar esta pasarela desde localhost, tendrá que hacerlo desde un servidor en funcionamiento.</b>
<br/>
<br/>
Para utilizar la pasarela Clickatell necesita una cuenta de Clickatell y por lo menos una conexión registrada (API instancia sub-producto) entre su aplicación y nuestra puerta de enlace. Cada método de conexión es conocido como un sub-producto. He aquí cómo:<br/>
<br/>
<b>Paso 1 - registrar una cuenta Clickatell </ b> <br/>
Si aún no tiene una cuenta de Clickatell, es necesario registrarse para obtener una como la que sigue. De lo contrario vaya al paso 2. <br/>
* Ir a la http://www.clickatell.com/products/sms_gateway.php, y elegir el subproducto adecuado de la API (método de conexión) que desea utilizar (Clickatell Central (API)) <br/>
* Haga clic en el enlace de registro. <br/>
* Llene el formulario de inscripción. <br/>
Tras superar con éxito el envío del formulario automáticamente ingresará en su nueva cuenta y será llevado a una página donde usted puede elegir sus API connection. <br/>
<b> Paso 2 - agregar un registro API connection (sub-producto) </ b> <br/>
Si no está ya conectado a su cuenta, debe hacerlo en <br/> http://www.clickatell.com/login.php
* Seleccione\"Administrar mis productos\" en el menú superior. <br/>
* Seleccione el tipo de conexión de la API que desea utilizar (API HTTP) del menú desplegable ('Add Connection'). <br/>
* Completar el formulario. Asegúrese de que introduzce la IP bloqueada (la IP de este servidor), ajustar Callback a HTTP POST. Tendrá que establecer la devolución de llamada IP " .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback y un identificador de usuario y contraseña. <br/>
Si se registra más de una conexión de la API, el nombre de la descripción que ha introducido para cada una debe ser único - no se puede tener múltiples APIs con el mismo nombre <br/>.
Después de enviar el formulario, sus datos de autenticación se mostrarán, incluida la identificación única de cada conexión de la API (api_id). Estos datos de autenticación se requieren cuando se conecta a la pasarela Clickatell para enviar un mensaje. <br/>
<br/>
Utilice su nombre de usuario, contraseña y api_id para rellenar los campos anteriores.
<br/>
<br/>
');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '¿Usar moneda global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Ponga esto en sí para forzar todas las propiedades que utilicen la misma moneda (ej. & # 8 3 6 4 ;) ');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Mostrar el formulario Lista de reserva de la habitación accesible');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Mostrar el formulario Lista de reserva Máximos ocupantes');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Tenga en cuenta que los precios de habitación indicados son estimaciones y el precio total de la reserva no se calculará hasta que haya agregado una habitación o habitaciones a su selección.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Suscripción paquetes');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nombre');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Descripción');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publicado');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Importe total');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Límite propiedades');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Suscribirse');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Utilice la funcionalidad de manejo de suscripciónes');
jr_define('_JOMRES_COM_NEWUSER', 'Crear nuevo usuario en reserva');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Crear nueva cuenta de usuario en usuarios no registrados.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Haga clic aquí para registrar su propiedad');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Gracias por su reserva - siga nuevos detalles de usuario');
jr_define('_JOMRES_LATLONG_DESC', 'Utilizar el ratón para moverse por el mapa y arrastre el puntero a la ubicación de su propiedad para establecer la latitud y longitud.');
jr_define('_JOMRES_CONTROLPANEL', 'Panel de control');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Mostrar Factura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Mostrar Facturas');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Añadir mi propiedad a este sitio');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Cuidado : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Lo sentimos, pero este ID de paquete no se reconoce.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Lo sentimos, usted ya está suscrito a un paquete gratuito, usted no puede suscribir el paquete de nuevo.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Los datos de su negocio');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nombre negocio');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Edificio número');
jr_define('_JOMRES_INVOICE_NUMBER', 'Factura No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleccione las fechas en que desea aplicar la reserva negra. Cuando haya seleccionado las fechas apropiadas, haga clic en el botón "Aplicar" para rechequear la disponibilidad. <br/> 
<br/> 
Si la propiedad tiene una o más reservas para el periodo deseado, entonces usted no será capaz hacer la reserva negra hasta que las otras reservas/reservas negras, hayan sido canceladas/retiradas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Lo sentimos, no puede hacer reserva negra en esta propiedad esas fechas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Puede hacer reservas negras para esas fechas');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Su propiedad está configurada para cargar por persona por noche, pero usted no tiene ningún tipo de evaluación creada o publicada, por favor, crear y publicar uno o más tipos de huéspedes. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'No tiene ninguna tarifa configurada todavía, usted no podrá realizar ningún tipo de reservas para su propiedad.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Modo edicion activo');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Modo edicion desactivado');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '¿Cargar depósito variable?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Depósitos variables permite definir si le gustaría cobrar la totalidad de la reserva si la fecha de llegada está a N días de "hoy". Establezca esta opción en Sí para activar la función, e introduzca el número de días más adelante, así por ejemplo si el día de llegada es en el plazo de 60 días, entonces como cantidad del depósito será cargado el importe total, de lo contrario la cantidad se basará en el depósito de las opciones configuradas anteriormente.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'El número de días, en el que el importe total será cobrado como depósito.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Email de confirmación ha sido enviado. Usted puede cerrar esta ventana ahora.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contacte con el agente');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Marcar factura como pagada');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Factura marcada como pagada');
jr_define('_JOMRES_APIKEY_REMAKE', 'Hacer nueva API Key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', '¿Es una instalación de una sola propiedad?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Si esta opción está establecida en Sí, la interfaz Jomres a usuarios no autorizados se simplifica enormemente. Por defecto las llamadas a Jomres, en vez de ser dadas como una lista de las características, sólo llevará al cliente a la central de reservas para la primera propiedad en el sistema. Administradores de la propiedad tampoco podrán ver el botón Detalles de la propiedad de vista previa o el botón Agregar nueva propiedad. Ideal si sólo quiere una lista de bienes y tener reservas para ellas.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance de pagos');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Tenga en cuenta usted está utilizando el modo de edición con el modo global de edición habilitado. Esto está bien si usted sabe lo que significa el modo de edición global. Si no está seguro si debe utilizar Jomres de este modo, por favor, consulte <a href="https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">el modo de edición de página del manual</a> para obtener más información sobre este tema.');
jr_define('_JOMRES_SUPPORTKEY', 'Clave de Soporte');
jr_define('_JOMRES_SUPPORTKEY_DESC', '.Su número clave de soporte (también conocido como el número de licencia). Usted necesitará una licencia actualizada para poder descargar las actualizaciones y complementos para Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Descuento personal');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '¿Registrar propiedades limitadas a un solo país?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Puede asegurarse que los registros de la propiedad se limitan a un solo país mediante el establecimiento de esta opción en Sí y establecer el país en la siguiente opción.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Las propiedades están localizadas en este país : ');
jr_define('_JOMRES_JQUERYTHEME', 'Tema Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Elige un tema jQuery para usar para las pestañas de los detalles de propiedad.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Lo sentimos, pero que la propiedad no está disponible actualmente.');
jr_define('_JOMRES_REVIEWS', 'Comentarios');
jr_define('_JOMRES_REVIEWS_TITLE', 'Título comentarios');
jr_define('_JOMRES_REVIEWS_DATE', 'Publicado en ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Todavía no hay comentarios para esta propiedad.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '¿Le gustaría ser el primero en hacer un comentario sobre esta propiedad?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Estoy de acuerdo con este comentario');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'No estoy de acuerdo con este comentario');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Valoración media: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Votos totales:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Añadir un nuevo comentario.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Necesita estar registrado para enviar un comentario.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Diganos que opina de este establecimiento : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Este cliente nos dijo : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pros: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Contras: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Enviado el: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Usted ya ha realizado un comentario sobre esta propiedad, no puede publicar otro comentario sobre ella.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Lo sentimos, pero no se permite publicar comentarios en este sitio.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Click para mostrar comentarios');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' usuarios de acuerdo con este comentario. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' usuarios en desacuerdo con este comentario.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' usuario de acuerdo con este comentario. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'usuario en desacuerdo con este comentario.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Gracias por compartir su opinión de este comentario.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Gracias, pero ya ha compartido la opinión de este comentario.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Por favor asegúrese de que todos los campos están correctamente cumplimentados');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Por favor, resuma su comentario introduciendo un título');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Por favor, introduzca un comentario más completo en el cuadro de descripción');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Por favor, introduzca las experiencias positivas como cliente de este establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Por favor, introduzca cualquier experiencia negativa que haya encontrado');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Por favor, califique la amabilidad que recibió por parte del personal');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Por favor, cual es su valoración del establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Por favor, cual es su opinión sobre la limpieza del establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Por favor, califique el alojamiento. Era cómodo o incómodo');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Por favor, proporcione su opinión sobre la relación Calidad-Precio');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Por favor, valore los servicios ofrecidos');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Revisión del comentario');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Su experiencia en mayor detalle');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Gracias por enviarnos su opinión.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Gracias por enviarnos su opinión. Será publicada en breve por uno de nuestros moderadores.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', '¿Utilizar la función de comentarios de Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '¿Publicar automáticamente los comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Si se establece No tendrá que publicar manualmente los comentarios');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', '¿Ajustar el modo test en los comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalmente los Administradores de Propiedad no pueden hacer comentarios. Naturalmente esto no es lo ideal en un sitio en funcionamiento.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Esta es una lista de todas las propiedades. Para ver los comentarios de una propiedad pulse en ella. Desde aquí podrá publicar o borrar comentarios.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Número de comentarios no publicados');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total comentarios');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicar/Despublicar comentario');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Borrar comentario');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Informe de comentario');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revisión de los comentarios');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Por favor, introduzca su informe');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '¿Ve algo en este comentario que sea cuestionable o inexacto? Informenos y veremos que podemos hacer por usted.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Enviar');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Informe creado por ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Los informes son publicados por los usuarios que pueden estar en desacuerdo con el contenido de un comentario. La única manera de eliminar un informe es eliminar la revisión.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = escaso 10 = excelente) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitalidad  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Localización ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Limpieza ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Alojamiento ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Relación calidad-precio ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Servicios ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Comentado por : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Ocultar comentarios');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', '¿Mostrar Formulario de reserva en la página de detalles de la propiedad?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ponga esto en Sí para mostrar el formulario de reserva en la página de detalles de la propiedad. Si se establece en No, aparecerá un enlace en la página de detalles de la propiedad apuntando al formulario de reserva.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', '¿Los precios incluyen impuestos?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', '¿Los precios son impuestos incluidos? Si sus precios incluyen impuestos seleccione Si. Si no están incluidos seleccione No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'IVA extras:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'El campo de día de la semana le permite establecer una tasa para un determinado día de la semana, una vez que haga clic en el botón de día de la semana todos los días de la semana se ajustarán a esa tasa.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Los selectores de fecha y la tarifa de entrada le permiten establecer un precio para un intervalo de tiempo dado. Elija una fecha de inicio y fin, introduzca un precio, y haga clic en el botón de fijación de tarifas.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Inicio intervalo');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Fin intervalo');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tarifa');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Fijar las tarifas');
jr_define('_JOMRES_PARTNERS_TITLE', 'Socios');
jr_define('_JOMRES_CALENDAR_RTL', 'falso');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Habitación ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'huésped(es). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Hemos asignado el número de huéspedes a sus habitaciones. Si desea cambiar esta asignación, deberá contactar con el hotel después de hacer la reserva. Se pueden aplicar cargos extra si cambia de las asignaciones.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Tenga en cuenta que su propiedad no se ha publicado todavía, sólo se puede ver la propiedad, los visitantes del sitio no la verán');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Orden de resultados predeterminado para búsqueda por defecto');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Cambiar esta opción para cambiar la orden en que los resultados de la búsqueda son presentados de forma predeterminada.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostrar resultado de la búsqueda para menú desplegable');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Estilo de lista habitaciones');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'En el formulario de reserva, utilizando el estilo "Clásico", el estilo de lista de habitaciones le ofrece habitaciones individuales para los clientes. Con el estilo "Tipo de habitación", los huéspedes eligen el número de habitaciones de tipo X (por ejemplo, 2 x dobles) en lugar');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Clásico');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipo habitaciones');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendario de la semana comienza el día, Domingo o Lunes');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '¿Sólo los clientes del establecimiento pueden hacer comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Establecer en Sí si desea restringir comentarios sólo a aquellos usuarios que hayan sido huéspedes en este establecimiento.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Por habitación');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Huéspedes por habitación : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Huéspedes por reserva : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Número de habitaciones');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Enero');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Febrero');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Marzo');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Abril');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Mayo');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Junio');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Julio');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Agosto');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Septiembre');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Octubre');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Noviembre');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Diciembre');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Ponga esto en Sí para reducir el número de opciones disponibles para los administradores de la propiedad en la sección Configuración General. Esto es útil si no quiere que los administradores de propiedades dispongan de muchos ajustes, en su lugar puede editar jomres_config.php para definir las opciones por defecto del establecimiento.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Por favor, seleccione una opción para su reserva');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Vista de administración De Propiedad');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Vista previa Sitio');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Descuento Asociado ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Buscar usuario');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Introduzca algunos caracteres para buscar un usuario.<br/> Cuando seleccione un usuario automáticamente se añadirá como Asociado y le llevará a la página siguiente donde puede asignar propiedades y descuentos para el usuario.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Asociados existentes');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Elija un Asociado para ser llevado a su página de administración.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Asociado :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Buscar por una propiedad');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Introduzca algunos caracteres del nombre de propiedad y seleccione una propiedad.<br/> Cuando usted seleccione la propiedad se agregará a la cartera del Asociado, sin embargo, aún no disfrutará de los descuentos, será necesario que los configure usted mismo.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Propiedades actuales');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Haga clic en una propiedad para modificar la configuración de descuento del Asociado para esa propiedad.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Esta cuenta ha sido suspendida, no es posible administrar su Propiedad(es) con esta cuenta.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Cuenta de Administrador suspendida');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Cuenta de Administrador rehabilitada');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Tenga en cuenta que su cuenta de Administrador de la propiedad ha sido suspendida. Usted no será capaz de realizar las funciones de gestión de la propiedad hasta que la cuenta haya sido restaurada.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Tenga en cuenta que su cuenta de Administrador de propiedad ya está activa. Usted puede seguir desempeñando las funciones de administración de propiedades. Por favor, ingrese en cuenta y asegurese de que la Propiedad(es) correcta han sido publicadas. Gracias.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Eliminar favoritos');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Archivo de datos de Reservas');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'El archivo de reserva de datos es un volcado de la información de la reserva, la información es capturada después de confirmar la reserva haciendo clic. Pase el ratón sobre una de fecha para ver el volcado de los datos en bruto. La información es almacenada en la tabla XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Editar cuenta');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Actuales Administradores');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Buscar por número de huéspedes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Mostrar la búsqueda número de huéspedes en menú desplegable');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Buscar por número de estrellas');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Mostrar la búsqueda número de estrellas en menú desplegable');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Número de huéspedes');
jr_define('_JOMRES_SEARCH_STARS', 'Número de estrellas');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Número de propiedades');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', '¿Cargar Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Puede establecer esto a NO si usted tiene una plantilla que utiliza jQuery. Esto puede resolver los problemas de conflicto jquery en algunas plantillas, pero no todos.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Las miniaturas se crean automáticamente para las imágenes cargadas.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ancho máximo de miniaturas pequeñas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Las miniaturas pequeñas se utilizan en la lista de propiedades, mientras que las miniaturas de tamaño mediano se utilizan en la cabecera de propiedad.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Alto máximo de miniaturas pequeñas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ancho máximo de miniaturas medianas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Alto máximo de miniaturas medianas (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Traducción etiquetas');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', '¿Usar la funcionalidad de Comisionista?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Ponga esto en Sí para mostrar el resultado de las facturas de la comisión que se han planteado.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', '¿Administrador de las reservas crea facturas de comisión?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Si un Administrador hace una reserva, ¿eso también crea una línea  en factura de la comisión?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', '¿Auto suspender a los administradores cuando las facturas son marcadas como pendientes?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Umbral para la autosuspensión');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Este umbral es el número de días que un administrador tiene que pagar una factura antes de que sea suspendido y no publicadas sus propiedades.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Idioma de contexto');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Esta característica permite a Jomres el uso de etiquetas que son apropiadas para su enfoque actual, por lo que si su interés se centra en una Yacht Brokerage (Venta de yates), cambiar el contexto permitirá Jomres presentar las etiquetas de un archivo de idioma diferente. Por ejemplo, si establece el contexto para "Yacht Brokerage", entonces Jomres primero se encuentra el lenguaje actual, a continuación, buscará en /'.JOMRES_ROOT_DIRECTORY.'/languages un sub-directorio llamado "yachtbrokerage". Si el archivo existe en el lenguaje actual, el archivo será utilizado. Si no, entonces Jomres buscará un archivo de idioma Inglés en ese mismo directorio. Si no se encuentra, Jomres utilizará el archivo de idioma para el idioma seleccionado en el directorio /'.JOMRES_ROOT_DIRECTORY.'/languages.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuración avanzada del sitio');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Establezca esta opción a Sí si desea utilizar las opciones avanzadas de configuración del sitio. Si usted acaba de empezar con Jomres, entonces le recomendamos, que por ahora deje esto en No, ya que la instalación por defecto es suficiente para empezar, debe agregar Jomres al menú principal y acceder a la interfaz como "admin" y comenzar a configurar su propiedad(s). Tenga en cuenta que muchas de la opciones avanzadas sólo serán aplicables a las instalaciones de Jomres Silver, los usuarios Jomres Lite no serán capaces de sacar el máximo provecho de la totalidad de las características permitidas.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Cargar Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Precio (descendente)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Precio (ascendente)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '¿El resumen de precios y estimaciones debe ser un precio por noche/semana/mes?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Por noche');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Por semana');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Por mes');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Por persona');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'semana(s) en ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mes(es) en ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '¿Cómo debe trabajar la opción de búsqueda por número de personas??');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afecta a todas las búsquedas. Cuando usamos la función de búsqueda número de invitados, buscaremos propiedades cuyas tarifas permitan alojar un número mayor o igual al número elegido ¿Número igual o mayor? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Por favor espere, su solicitud está en proceso y será redirigido a la página web de Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Si no es automáticamente dirigido a Paypal en 5 segundos ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click aquí');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Reserva válida a partir de');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Reserva válida hasta');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nombre Huésped');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Los códigos de descuento pueden ser generados y pasados ​​a los clientes como un incentivo para hacer las reservas.<br/>Fechas Válidas desde/hasta para referirse a las fechas en que puede ser una reserva hecha, mientras que Fecha Reserva válida desde/hasta se refiere a las fechas en que la reserva que debe cubrir el cupón sea válida. Si la reserva se encuentra fuera de ese período las tarifas normales se aplicarán a los días fuera de ese período.<br/>Si desea que la reserva esté disponible para unos huéspedes específicos, elija el nombre de los huéspedes en el menú desplegable para limitar el cupón sólo a esos huéspedes.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Con su cupón, esta reserva ha sido rebajada de ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' a ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Ponga esto en No para desactivar la carga tanto de Jquery UI javascript como de archivos CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', '¿Cargar Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Ponga No sólo para desactivar el archivo jquery UI CSS.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc impuesto');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Despublicar Propiedad');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Usar Funcionalidad de Conversión');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Usa la funcionaliad de conversion online de jomres.. Esto ofrece un desplegable de conversión a los usuarios de la página, donde podrán elegir la moneda en la que quieren ver los precios ofertados. La presentación del precio se ajusta para monstrar el precio convertido, segido por el precio 'nativo' de la propiedad entre paréntesis..");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Hemos puesto nuestros mejores esfuerzos en obtener el mas preciso y más rápido sistema de cambio de divisa que podemos. Nuestro servicio de conversión de divisas online esta destinado a información y no pretende reflejar cambios exactos. De acuerdo con lo expuesto anteriormente, no garantizamos la exactitud de los cambios de divisa. Usando este servicio aceptas que el uso de la misma corre por tu cuenta y riesgo.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Conversión de moneda/código de moneda');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'Detección de IP, clave API');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para fijar automáticamente en el desplegable de cambio de moneda, Jomres usa un servicio gratuito llamado IpinfoBB para detectar el país del visitante, no obstante debera obtener primero una clave API en: <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a>.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Depuración');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Alojamiento iva excluido ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Alojamiento iva incluido');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'IVA Alojamiento:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Abrir el formulario de Reservas');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Volver a los detalles de la propiedad');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', '¿Seleccionado automáticamente?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (después del pago del depósito)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrar recursos basados en sus características.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ultimas Reservas');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'Segundo');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'Minuto');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'Hora');
jr_define('_JOMRES_DATEPERIOD_DAY', 'Dia');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'semana');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'mes');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'año');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decada');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'hace');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'desde ahora');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Las reservas son para dias enteros?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Por defecto los recursos de reservas de sistema estan apagados por la noche por lo que una reserva del primero de Enero'.date('Y', strtotime('next year')).' al segundo de Enero '.date('Y', strtotime('next year')).' solo cubre una noche. Pero si cambia esta opción a Si, entonces la reserva cubrirá dias enteros, por lo que una reserva en esos dias cubrirá ambos días y al cliente se le facturarán dos días.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Por día');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Por persona y día');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Entrada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Salida');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dia(s) en');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Fecha de Salida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'La reserva es muy corta. theme haber al menos estos días entre la entrada y la salida:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Mínimo intervalo entre Entrada/Salida ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'El intervalo mínimo en el formulario de reserva entre las fechas de entrada y salida. Un intervalo de 1 significa que las fechas de entrada y salida pueden establecerse en el mismo día, sin embargo esto depende aún del intervalo mínimo que es calculado automáticamente por el motor de reserva, ya que comprueba las tarifas válidas para el periodo de reserva.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '¿El precio resumido y el estimado debe ser facturado por día/por semana/por mes?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Por día');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dias antes de la entrada.');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'El número mínimo de días debe abarcar desde "hoy" hasta la fecha de entrada.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Cambie esto a Si, si quiere limitar reservas avanzadas (use el siguiente campo para fijar el límite en términos de días). Si cambia este campo a Si, entonces si el usuario intenta reservar más de x días por adelantado, entonce su día de entrada se fijará en la fecha del día de hoy.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', '¿Mostrar campo de fecha de salida?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Marque esto No si no quiere mostrar el campo de fecha de salida. Sólo use esto si sabe lo que hace, ya que la fecha de salida en las reservas se mostará siempre como el día posterior a la entrada.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Si marca esto como Si, entonces las reservas se tomará por un período prefijado. Si se marca como No, asegúrese de que el campo "dia de entrada definido" no está marcado como Si (a no ser que específicamente quieras forzar a los cliente a salir en un día de la semana que quieras) de otra forma no tendrá muchos links en el calendario de disponibilidad.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Día de entrada predefinido');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Sólo para sitios que ofrecen periodos fijos de reservas. Escoja el día de la semana en el que debe ser realizada la entrada.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Día de entrada prefijado');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Días de entrada prefijados repetidos:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Cuando las fechas prefijadas de entrada están seleccionadas, el número de fechas que se pueden ver en la lista desplegable. Fíjese que la lista de fechas no incluirá ninguna fecha si la reserva no es posible debido a reservas anteriores, y que la lista será de hecho el doble de larga que su número seleccionado ya que tendrá un número similar de fechas históricas (donde sea posible).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Por persona, por día');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Seleccione Si si quiere cambiar por-persona por-día. Si no, entonces los costes se calcularan en base a por-recurso-por-día.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Los depósitos variables le permiten definir si le gustarñia cargar la cantidad entera a la fecha de la entrada de la reserva en x días desde hoy. Marque esta opción como Si para activar esta característica e introduzca más abajo el número de días, así por ejemplo si el día de entrada esta detro de los 60 días, el depósito se cargará por la totalidad de la reserva, en caso contrario la cantidad se basará en las opciones de depósito configuradas más arriba.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'La mayoría de los negocios recalcularan los precios del recurso basado en el número de recursos de un tipo requerido que están disponibles en la fecha dada. Esto les permite ofrecer descuentos en un tipo de recurso/negocio que no está ocupado durante el periodo dado, con la ventaja de atraer a negocios que de otra forma se podría perder.<br/> Activando y configurando este plugin podrá ofrecer precios ajustables en base a el número de recursos de un tipo elegido que están disponibles en el negocio el día estipulado.<br/> El umbral de días, define el número de días entre los que debe estar la fecha de entrada antes de que los precios del recurse se ajusten a esta característica, entonces las opciones de porcetanjes le permitirán configurar el porcentaje de recursos que pueden estar disponibles despues de que se les aplique un descuento dado. Fíjese sin embargo que si múltiples recursos son reservados, el nivel actual de descuento se aplicarña a todos los recursos y no se reducirá a medida que se selecciones más recursos.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Umbral (número de días entre la fecha de entrada y hoy.)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Entrada pendiente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Entrada Hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Entrada realizada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Salidas Hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Salidas Finalizadas');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'No ha entrado');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Días');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Marcar una reserva como entrada realizada.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marcar como reserva devuelta.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marcar una reserva como entrada reservada ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marcar una reserva como devuelta');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Coste por día: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Número de días: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Anulación total de Alojamientos');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Guardar la Anulación');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '¿Enviar a los nuevos usuarios sus datos de acceso?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Si la opción de crear nuevo usuario esta marcada como Si, puede cambiar esta opcióna  No para asegurarse de que no se les envia sus detalles de acceso una vez que se ha creado el usuario. Esto puede ser útil si esta añadiendo automáticamente usuarios a una lista de correo, por ejemplo, y no quiere que los usuarios se logueen.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', '¿Mostrar impuestos en el resumen de totales del formulario de reserva?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Evitar que el formulario de reserva muestre los campos de impuestos en el resumen de totales marcando esta opcion como NO.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Umbral de cancelación');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Conectado, los usuarios registrados pueden cancelar sus propias reservas. Aqui puede fijar el umbral en dias, en los que la reserva no puede ser cancelada depués de un cierto número de días antes del día de llegada.');
jr_define('_JOMRES_EDIT_PROFILE', 'Editar Perfil');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'tipo de relación con la propiedad');
jr_define('_JOMRES_IMAGE', 'Imagen');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Pulse sobre una letra para mostrar todos los negocios que empiezan por esa latre. Una vez que tiene una lista de propiedades puede asignar tasas de comisión a dichas propiedades o pulsar sobre sus iconos de edición para ver las estadísticas de los negocios.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Editar porcentaje de impuestos');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Editar campos personalizados');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Clave de licencia del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Usuario de licencia del servidor');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Si usted tienen un nombre de usuario y contraseña en el servidor de licencia, por favor introdúzcalos. Esto le ayudará a acceder a los plugins a los que está suscrito. Si ha ingresado una clave válida de soporte en el campo de más abajo, no es necesario insertar el usuario y contraseña aqui.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Versión Actual de Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Última versión de Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alerta : Hay una nueva versión de Jomres disponible, se le recomienda actualizar cuando pueda.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Bienvenido a Jomres, esperamos que disfrute usando el sistema de reservas favorito de Joomla. Si desea comprar licencias de Jomres Plata u Oro , <a href="https://www.jomres.net/prices" target="_blank"> Por favor, visite nuestara página</a> para obtener información sobre la mejora.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Este sistema es ideal para cualquier escenario, puede ser un sistema simple de reserva de una sóla propiedad hasta un sitio con múltiples usuarios, en varios idiomas con múltiples propiedades. Por favor vea la sección "Ayuda" a la izquierda, incluyendo la página de "Cómo empezar" que le puede ayudar con los primeros pasos.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Propiedad Activa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternativas de configuración SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Marque esta opción como Si para usar configuraciones de SMTP alternativas. Un creciente número de alojamientos web parece que están bloqueando la funcionalidad de PHP mail, por lo que puede elegir anular las configuraciones que Jomres adopta de su alojamiento CMS (joomla) y usar las configuraciones a su gusto. .');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alojamiento Alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Cambie esto a su servidor de mail SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Puerto alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'cambiar esto a su puerto smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protocolo Alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Dependiendo de su configuración de su servidor smtp, debe dejar esta en blanco, o introducir 'ssl' o 'tls'. Pregunte a su proveedor smtp si lo desconoce.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Usar autenticación');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'si su servidor smtp requiere que los clientes se conecten marque Si. Se usará entonce el nombre de usuario y contraseña..');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Usuario Alternativo');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Contraseña Alternativa');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Información Rapida');
jr_define('_JOMRES_MENU_SHOW', 'Mostrar');
jr_define('_JOMRES_MENU_HIDE', 'Ocultar');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Por defecto');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Cualquiera');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registrados');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Gestor');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Gesto');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nadie');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Menu de control de Acceso');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Esta característica le permite controlar quien podra ver un plugin en el menu principal. Las opciones 00009 son visibles por los usuarios registrado y no registrados, las 00010 normalmente son para las actividades de recepción que se utlizan habitualmente en el dia a dia, las 00011 se usan para definir y configurar una propiedad pero se usan menos a menudo.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepcionista');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Control de Acceso Total');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Marque esta opción como Si para activar la característica de control de acceso total, luego visita ela opción de Control de Acceso debajo de Mantenimiento del sistema para poder configurar los controles de acceso.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Observe, sin embargo, que estos ajustes no controlan los scripts subrayados a los que conectan, así por ejemplo si asigna <i>00009user_option_03_search</i> al 'Gestor', un usuario que conozca jomres puede aún hacer una llamada a j06000search.class.php intruciendo http://www.domain.com/index.php?option=com_jomres&task=search en su barra de navegaciones. Esto se hace adrede, ya que este Control de Acceso a Menú simplemente controla lo que puede ser visto en el Menú Principal de Jomres. Si necesita controles más ajustados, marque Si la opción de Control de Acceso Total en la Configuración del Sitio y vuelva a entrar el el Menú de Control de Acceso .");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Control Total de Acceso');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<strong>Esta característica es para usuarios avanzados sólo. Si no sabe para que se utiliza, y no tiene una razón específica para utilizarlo, por favor regrese a la configuración del sitio y marque No en la casilla de Control de Acceso Total.</strong><br/>
	Esta opción le permite controlar quien puede acceder a los minicomponentes (los cuales con alguna excepción están insertados en el nucleo duro del sistema). Si el nivel de acceso más próximo al nombre de un script esta fijado por defecto, entonces la opcion de Control de Acceso Total estará definido como Si <strong>cualquiera</strong> puede acceder a los scripts que no podrían acceder y por lo tanto, si pretendes usar esta función DEBES marcar el nivel de control de acceso para <strong>todos</strong> los minicomponentes de Jomres listados aqui. Si no sabe lo que hacen estos minicomponentes, le recomendamos encarecidamente que no use de ninguna manera esta funcionalidad.<br/>
	En Jomres, los niveles de acceso siguen una pira,ide, por lo que los Super Managers son más grandes que los Managers. En resumen Siper Manager>Manager>Recepcionista>Registrados>Sin Registro. Por lo que si un usuario registrado tiene acceso a un minicomponente, también lo tienen el recepcionista, el manager y el super manager.<br/>
	Observe que no puede controlar el area de administrador de los minicomponentes. Todo el mundo el el área de administrador es considerado como un usuario de confianza y no se les impide el acceso a ningún script (especialmente este).
	');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Precaución! Tiene activado el control de acceso total, sin embargo hemos tomado en cuenta las opciones del control de acceso y las hemos comparado con el número de minicomponentes que deben ser controlado, y las dos no coinciden, por lo tanto debe tener scripts que no están bajo control. Esto puede ser un problema de seguridad y se le insta a resolverlo urgentemente visitando la característica de Control de Acceso y comprobar que los niveles apropiados han sido aplicados.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Usuarios con derechos de administración de esta propiedad');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'su dirección e-mail');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Modelo');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametros');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Fuerza');
jr_define('_JOMRES_METATITLE', 'Meta titulo');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Añada su propiedad : Paso 2 de 2');
jr_define('_JOMRES_CART_TITLE', 'Mis reservas propuestas');
jr_define('_JOMRES_CART_INFO', 'Observe, estas reservas aún no ha sido guardadas. Si se ddesconecta o su sesión expira se perderá. Recuerde confirmar sus reservas!!!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmar reserva(s)');
jr_define('_JOMRES_CART_OR', ' o ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Guardar para más tarde');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'No tiene reservas guardadas aún.');
jr_define('_JOMRES_CART_VIEWCART', 'Ver carrito');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Subdirectorio de archivos de idiomas');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Punto de inicio de la Latitud por defecto');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Punto de inicio de la Longitud por defecto');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', '¿Cuál debe ser la longitud/latitud por defecto en el mapa de Google en la pagina de editar propiedades, antes de que la marca haya sido movida?');
jr_define('_JOMRES_SYSTEM_EMAILS', '¿Desde qué dirección se envian los e-mails?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Deje esta opción en blanco para desactivarla. Jomres usara la direccion (es) del hotel cuando envie emails a los clientes, sin embargo su servicio de email puede no aceptar emails desde direcciones arbitrarias (ej. sólo admiten mails de una dirección autorizada). En ese casom puede usar este campo para introducir una dirección que se introducirá en el campo DESDE para todos los emails.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Ver como lista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Ver como Foto');
jr_define('_JOMRES_COMPARE', 'Comparar');
jr_define('_JOMRES_REMOVE', 'Borrar');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Volver a los resultados de búsqueda');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Añadir a Lista resumida');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Borrar de lista resumida');
jr_define('_JOMRES_VIEWSHORTLIST', 'Vea su Lista resumida');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Importante: Política de Cookies');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Usamos cookies para ayudar a mantener nuestro sitio relevante y fácil de usar.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Leer más...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'La legislación Europea requiere que todas las webs especifiquen claramente si se usan cookies y el propósito de las mismas.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'El motor de reservas y búsqueda de la página necesita ser capaz de recordar las opciones que has elegido para poder trabajar de la mejor manera posible. Para ello, necesita almacenar información que está asociada a un pequeño archivo llamado "cookie" que únicamente identifica su navegador, y para poder hacerlo, necesitamos que acepte que podemos utilizarla. Si no acepta esta política de cookies entonces se verá severamente limitado en lo que puede hacer en la página.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Si, acepto el uso de cookies según lo expuesto.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', '¿El depósito requerido es el coste de la primera noche?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Los precios se calcula en base a por noche. ¿Quiere que el depósito sea el cargo por una noche?. Si es así, puede ignorar las siguientes opciones.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'YNo ha añadido ningún artículo a su lista resumida.');
jr_define('_JOMRES_SAFEMODE', '¿Activar modo seguro?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Marque Si para cambiar a modo seguro. Desactivará todos los plugins y Jomres sólo utilizará las funcionalidades del núcleo.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'PEA');
jr_define('COMMON_NEXT', 'Siguiente');
jr_define('COMMON_CANCEL', 'Cancelar');
jr_define('COMMON_SUBMIT', 'Enviar');
jr_define('COMMON_SAVE', 'Guardar');
jr_define('COMMON_DELETE', 'Borrar');
jr_define('COMMON_RETURN', 'Volver');
jr_define('COMMON_CLOSE', 'Cerrar');
jr_define('COMMON_BACK', 'Atrás');
jr_define('COMMON_HOME', 'Inicio');
jr_define('COMMON_NEW', 'Nuevo');
jr_define('COMMON_SEND', 'Enviar');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha se usa para asegurarse de que el cliente que usa los formularios web es humano, y se usa para evitar que a los gestores de la propiedad les llenen de Spam robots de internet. Para usar el formulario de contacto de Jomres deberás registrarte en <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> y configurar tu dominio para recibir la clave pública y privada. Cuando reciba estas claves, por favor introduzcalas más abajo. El servicio reCapcha es gratuito y lo provee Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Clave Pública');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Clave Privada');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Tiempo de espera de bloqueo de archivo');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Para evitar el peligro de que los usuarios hagan una reserva doble, Jomres usa un fichero de bloqueo para evitar que una habitación sea añadida a la lista de habitaciones disponibles en el formulario de reserva si alguien mñas ha añadido dicha habitación al suyo la misma fecha. Por defencto este bloqueo se desactivará en 3600 segundos o una hora. Puede cambiar el tiempo de este fichero de bloqueo cambiando esta casilla.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "¿'Activar las plantillas bootstrap de Jomres' y sus funcionalidades?");
jr_define('COMMON_ACTION', 'Acción');
jr_define('COMMON_VIEW', 'Vista');
jr_define('BACKTOTOP', 'Volver arriba');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Débil');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Fuerte');
jr_define('_JOMRES_INPUTFILTERING', 'Filtrado de Entradas');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Nivel de filtrado de Entradas');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "La mayoría de los datos introducidos en el sistema se limpia primero quitando las etiquetas html, luego usando la funcionalidad de filtrado de varibles PHP para hacer los datos más seguros antes de que se introduzcan en la base de datos. Usted puede querer permitir ciertas entradas (por ejemplo entradas de texto en los detalles de página de la propiedad) para incluir HTML. Hay dos niveles de filtrada que puede usar en esta entrada, bien débil o fuerte. Sólo deberá usar la opción Débil si el usuario que introduce datos es de confianza, como compañeros administradores de sistema, de otra manera debe dejar esta opción como fuerte. Cunado lo marque como fuerte (recomendado) puede especificar que etiquetas permitir editando la siguiente opción 'Purificador HTML de etiquetas permitidas'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Etiquetas de Entrada permitidas');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Puede editar las etiquetas que el purificador de html aceotará a través de su sistema de filtrado. Por defecto son'p,b,strong,a[href],i' (por ejemplo. Parrafo, Negrita, Marcado, Enlaces y Cursivas). Para más información de etiquetas permitidas, por favor lea la documentación del purificador HTML en<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Puede cambiar esta opción, pero le recomendamos que la deje la que viene por defecto.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Entradas permitidas');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Puede definir que entradas de formularios permitiran html editando esta opción, cualquier entrada añadida a esta lista será analizada a través del purificador HTML en lugar de tener todo el Html separado. Por defecto es: 'descripcion_propiedad horas_entrada_propiedad _actividades_area_propiedad direccion_conduciendo_propiedad aueropuertos_propiedad otrostransportes_propiedad politicasreclamacion_propiedad'. Añada más entradas añadiendo su nombre de formulario separado por un espacio.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', '¿Detalles de la propiedad en pestañas?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Marque esta opción para mostrar los detalles de la propiedad en pestañas. Marque No si las quiere visualizar sin pestañas.');
jr_define('COMMON_PRINT', 'Imprimir');
jr_define('COMMON_EDIT', 'Editar');
jr_define('COMMON_COPY', 'Copiar');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 iincluye el bootstrap de twitter por defecto,y Jomres tiene plantillas y funcionalidades que usarán estas plantillas. Por defecto si usa Homres en joomla 3 pude aún optar por usar las plantillas Bootstrap de Jomres y sus funcionalidades, sin embargo por defecto estas opciones están marcadas como NO.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Jomres utilizar plantillas de archivos de inicio en la interfaz?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Aqui están algunas alternativas que quizás quiera considerar.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', '¿Auto-detectar el país de los clientes?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'El sistema intentará automaticamente detectar el país de los clientes si no ha reservado antes. Puede marcar está opción No y definir que país prefiere que aparezca por defecto en el formulario de reserva en la siguiente opción.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Sobre Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ayuda');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Cómo empezar');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Control de Acceso');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Herramientas para desarrolladores');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'idiomas');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generaciónde ingresos');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'estructura del sitio');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Mi cuenta (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Funcionalidad del portal');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Gestor de plugins');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integracion');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Informes/estadísticas');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'ayuda');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Mejoras');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'métodos de pago');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarifa por defecto');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'esto sólo se aplica a nuevas tarifas');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Años a mostrar');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Define el número de años a mostrar cuando edita un tipo de tarifa.');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'recibos');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'detalles de cuenta');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Acceso');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Desconexión');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'buscar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'panel de control');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserva');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'facturas');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Ajustes');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'miscelanea');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Editar país');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id de país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Código del país');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nombre del País');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Editar Región');
jr_define('_JOMRES_EDIT_REGION_ID', 'id de Región');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Codigo del país');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nombre de la región');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Listar Países');
jr_define('_JOMRES_COM_LISTREGIONS', 'Listar regiones');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Exportar definiciones');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Esta característica le permite exportar las traducciones que han sido creadas usandao la característica de Traducción de Idioma. Creará un campo de texto con todos los datos requeridos para construir un nuevo archivo de idioma, todo lo que tienes que hacer es copiar y pegar esto en un nuevo archivo de idioma que puedes poner en un nuevo servidor basado en Jomres, o si quieres contribuir a la comunidad Jomres.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Traducir locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Traducir las cadenas de archivos de idioma');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Error, el usuario con el que estas accediendo no es un super usuario en Jomres, no podrás usar esta característica hasta que hayas usado la funcionalidad de Mostrar Perfil para hacerte tanto gestor y super gestor. Esto es una funcialidad de seguridad.');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Diseño por defecto del listado de propiedades');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Estancia por un mínimo de');
jr_define('_JOMRES_NIGHTSFOR', ' Noches para ');
jr_define('_JOMRES_AGENT', 'Agente');
jr_define('_JOMRES_AGENT_DETAILS', 'Detalles del Agente');
jr_define('_JOMRES_AGENT_LISTINGS', 'Anuncios del Agente');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Aprobar automáticamente nuevas propiedades');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Si marca esta opción como No entonces deberá aprobar manualmente las nuevas propiedades. Hasta que una propiedad no sea aprobada no podrá ser publicada por un Gestor/Super Gestor de la Propiedad.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Aprobaciones');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Esta Propiedad aún no ha sido aprobada. Una vez que lo sea serás capaz de publicarla.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Lo sentimos, no puedes publicar esta propiedad ya que no ha sido aprobada aún.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Una nueva propiedad requiere aprobación');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Se ha añadido una propiedad al sistema que requiere su aprobación. Pulse sobre el enlace para ver la lista de propiedades pendientes de aprobación :  ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Su propiedad ha sido aprobada');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Felicidades, su propiedad ha sido aprobada, por favor pulse el siguiente enlace para ver el panel de control de la propiedad : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Los nombres de las regiones son traducibles');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'A menos que tenga un servidor muy rápido le aconsejamos dejar marcado esta opción como NO. Debido a el amplio número de nombres de regiones, la traducción de dichos nombres ocupa una gran cantidad de memorios que puede ralentizar sus resultados de búsqueda.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Invitado reservado.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Lo sentimos, dirección de correo electrónico que ya está en uso. Si esta es tu dirección de correo electrónico, por favor asegúrese de que se haya conectado antes de intentar reservar.');
jr_define('JOMRES_TAPTOCALL', 'Toque para llamar');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Un nuevo comentario sobre
Google Translate for Business:Translator ToolkitWebsite TranslatorGlobal Market Finder
All languages Sort  
Your Phrasebook is empty. Click the star under a  ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Una nueva revisión se ha dejado para ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nuevo reporte');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Una revisión se ha informado de  ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Total general (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Total general (IVA incluído) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total impuestos : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Escribe las dos palabras: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Introduce lo que se escucha: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Reproducir la pista de audio ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Descargar la canción en formato MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'modo visual');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'modo de audio');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refrescar');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Ayuda');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Lo siento, fue incorrecta. Por favor, inténtelo de nuevo.');
jr_define('JOMRES_GOOGLE_MAPS', 'opciones de mapa de Google');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Usar capa clima?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celsius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'capa de paso utilizada?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Habilitar Gmap puntos de interés (incluyendo posiblemente sus competidores)?');
jr_define('_JOMRES_METAKEYWORDS', 'Palabras clave Meta');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Escanear este código en su teléfono para obtener direcciones para nosotros.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'El número de IVA que ha especificado no parece ser correcta. Usted debe tener algo como esto: BE805670816B01 ');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Número de IVA válido. Por favor, compruebe la validez de su IVA número con el número de IVA servicio de validación web Europa (VIES) ');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Felicitaciones. Hemos sido capaces de validar su número de IVA.');
jr_define('_JOMRES_TAX_RULES_LIST', 'normas fiscales lista');
jr_define('_JOMRES_TAX_RULE', 'norma fiscal');
jr_define('_JOMRES_TAX_RULE_INFO', 'Las normas fiscales se utilizan para establecer normas fiscales distintas para las diferentes regiones. Estas normas fiscales afectan a la persona que realiza la reserva, si están registrados, iniciado la sesión y han editado su cuenta utilizando el "editar mi cuenta " página. El propósito de estas reglas es para dar cabida a agentes de reserva en aquellas áreas que están exentas de IVA, es posible que usted no necesita crear muchas reglas, o ninguna en absoluto.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'las tasas de impuestos de importación');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Podemos importar los tipos impositivos de la UE para que, si lo desea. Tenga en cuenta, si se utiliza esta función, entonces todas sus tasas de impuestos existentes serán eliminados.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Editar norma fiscal');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'El número de IVA para esta propiedad.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Por favor, introduzca el número de IVA para esta propiedad.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'validación Número de IVA.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Número de IVA no validado.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Detalles del negocio aquí introducidos serán utilizados en la comisión y suscripciones facturas. ');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Usted no parece haber rellenado detalles de su cuenta todavía. Para mostrar su propiedad en el sitio, necesitamos que complete sus datos de cuenta antes de que podamos ir más allá.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Producción o Desarrollo?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Si se establece esta opción para el Desarrollo vamos a permitir que el informe de errores, de lo contrario cuando se establece en la producción que se apaga. Si esto es un servidor activo, se recomienda que se establece esta opción a "la producción ". ');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Producción');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Desarrollo');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'detalles de recursos');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'datos de la tarifa');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Solamente');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'quedado!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'función de recursos');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'No se puede eliminar esta función de recursos, se le asigna a un recurso. Quitar la característica de este recurso y vuelva a intentar. ');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Centro de Medios');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', '
Add images
Añadir imágenes');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'las imágenes de las habitaciones');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'imagen principal de la propiedad');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'imágenes de presentación de diapositivas');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Limpiar lista');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Arrastrar y soltar archivos aquí');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Seleccione el recurso que desea cargar imágenes para. Si puede subir imágenes para recursos individuales (por ejemplo, habitaciones) se le dará un segundo menú desplegable para elegir el recurso específico. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Si a subir varias imágenes como el " imagen característica principal "éstos serán utilizados en las imágenes Lista de propiedades. Presentación de diapositivas se mostrará en la página de detalles de la propiedad.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Ver su imagen');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Eliminar Imagen');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Cargar imagen');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Tipos de habitación iconos');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'los iconos de funciones de Propiedad');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Subir todos los archivos');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'Más');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Hoy');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Año');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Mes');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Semana');
jr_define('_JOMRES_DASHBOARD_DAY', 'Día');
jr_define('_JOMRES_HLEGEND', 'Leyenda');
jr_define('_JOMRES_HFILTER', 'Filtrar');
jr_define('_JOMRES_HFROM', 'De');
jr_define('_JOMRES_HTO', 'A');
jr_define('_JOMRES_HNEW_BOOKING', 'Nueva reserva');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'estado fuerte');
jr_define('_JOMRES_HSTATUS_GUEST', 'condición de invitado');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Estado de la reservación');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'estado de publicación');
jr_define('_JOMRES_HSTATUS_INVOICE', 'estado de la factura');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'tipo de factura');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Aprobado');
jr_define('_JOMRES_HSTATUS_CURRENT', 'negocio actual');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Mostrar reservas para');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Mostrar facturas de');
jr_define('_JOMRES_STATUS_ANY', 'Alguna');
jr_define('_JOMRES_STATUS_PAID', 'Pagado');
jr_define('_JOMRES_STATUS_NOTPAID', 'No pagado');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Controlado');
jr_define('_JOMRES_STATUS_ACTIVE', 'Activo');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelado');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Publicado');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'No publicado');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Los huéspedes con reservas activas');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Los huéspedes con reservas anteriores');
jr_define('_JOMRES_STATUS_BOOKINGS', 'reservas');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Suscripciones');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'comisiones');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Todos mis negocios');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Establecer como actual');
jr_define('_JOMRES_ACTION_CHECKIN', 'Registrarse');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Revisa');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'reservas');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'propiedades');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'los huéspedes');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'informes');
jr_define('_JOMRES_HLIST_GUESTS', 'Los huéspedes');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Lista de los huéspedes');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Lista de facturas');
jr_define('_JOMRES_HLIST_PROPERTIES', 'empresas');
jr_define('_JOMRES_HQUICK_BOOKING', 'reserva rápida');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Fecha de la reserva');
jr_define('_JOMRES_HTWO_WEEKS', 'Dos semanas');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Esta reserva será cancelada. Pulse OK para cancelar la reserva.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'compra de registro Hoy');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Hoy en día las cajas');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Los residentes actuales');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'ubicación barra de navegación');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Predeterminado (área de contenido)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fijo al principio');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fija a la parte inferior');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'navbar invertida (cambio de color)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Número de reserva');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Mostrar huéspedes para');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'versión de arranque');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'En la actualidad sólo se aplica a la interfaz. Esta opción le permite elegir si desea o no utilizar las plantillas jomres que son compatibles con Bootstrap 2 o Bootstrap 3. A menos que esté seguro de que su plantilla trabaja con Bootstrap 3 a continuación, se recomienda dejar este conjunto para arrancar 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Mostrar huéspedes para');
jr_define('_JOMRES_HFIXED_PERIODS', 'períodos fijos');
jr_define('_JOMRES_HDEPOSITS', 'depósitos');
jr_define('_JOMRES_HBOOKING_FORM', 'Formulario de reserva');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Campos requeridos');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Mi calle');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Mi ciudad');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Mi hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Configuración extendida');
jr_define('SIMPLE_CONFIGURATION', 'Configuración sencilla');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'características de recursos');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Tipo de recurso');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Editar tipo de invitados');
jr_define('_JOMRES_HEDIT_COUPON', 'Editar cupón');
jr_define('_JOMRES_HEDIT_EXTRA', 'editar adicional');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Crear varios recursos');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'generar recursos');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', '¿Cuántos recursos?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'tipo de recursos');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Número máximo de huéspedes por recurso');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Eliminar todos los recursos existentes?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Tenga en cuenta, que está viendo actualmente el área del administrador del sitio con Advanced Config establecido en No. Si usted quiere ver más opciones, por favor fijan Sitio Configuración -> Varios -> Avanzado Sitio Config para Sí.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Aprobación');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Rechazar solicitud de reserva');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Aprobar solicitud de reserva');
jr_define('_JOMRES_STATUS_APPROVED', 'Aprobado');
jr_define('_JOMRES_STATUS_REJECTED', 'Rechazado');
jr_define('_JOMRES_STATUS_INQUIRY', 'Investigación');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Las reservas requieren la aprobación o la confirmación de la disponibilidad?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Si se establece en sí, cuando se hace la reserva, no va a aparecer en los calendarios de disponibilidad (y otros huéspedes todavía puede reservar esos días y de recursos) hasta que el administrador de la propiedad acepta / confirma la disponibilidad para la reserva. Una vez confirmada, la reserva se inserta como provisional (si doesn `t de anulación otras reservas; otros huéspedes` t reserve las mismas fechas más) y un correo electrónico se envía al cliente para realizar el pago.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', '¡Lo siento! Se produjo un error al intentar procesar esta función. Se ha reportado para usted y vamos a ver en él.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Mensaje');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Archivo');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Línea');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Rastro');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Plantillas de correo electrónico');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Editar plantilla de correo electrónico');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Asunto del email');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'texto del correo electrónico');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'tipo de correo electrónico');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'nombre Correo');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Descripción de correo electrónico');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Por favor, consulte esta página para obtener ayuda personalización de los mensajes de correo electrónico y una lista de la salida disponibles: <a href="https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank"> Plantillas de Correo Electrónico Ayuda < / a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Administrador del sitio Nueva reservas E-mail');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Correo electrónico enviado al administrador del sitio cuando se hace una nueva reserva, si la puerta de enlace de Paypal mundial está habilitado');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New reservas E-mail');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Correo electrónico enviado al dueño de la propiedad cuando se hace una nueva reserva');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Invitado Nuevo reservas E-mail');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Correo electrónico enviado a los huéspedes cuando se hace una nueva reserva');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Carta de Confirmación de invitados');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'carta para imprimir o correo electrónico que se pueden enviar de forma manual por el dueño de la propiedad para confirmar la reserva');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Esta reserva puede ser aprobado. Todos los recursos seleccionados están disponibles para las fechas seleccionadas.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Esta reserva puede `t ser aprobado debido a que algunos de los recursos que ya están reservadas para las fechas seleccionadas. Tendrá que modificar la reserva primera.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Presupuesto');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Utiliza la función de Presupuesto?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', 'Sólo sitios bootstrap! La función del presupuesto es una característica de la lista de propiedades que un cliente puede utilizar para resaltar para ellos las propiedades que su precio por noche está bajo una cierta figura. La característica tiene algunas limitaciones ya que podría no ser apropiada para algunos sitios que usan muchas divisas diferentes. Tenga en cuenta, si usted está usando esto y la Listados plugin, su clase de lista de embalaje ofrecido se cambia automáticamente a "Panel-primaria" cuando se muestra la lista de propiedades.');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nombre: ');
jr_define('_JOMRES_FOR', 'para');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'noche');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noches');
jr_define('_JOMRES_LIVE_SCROLLING', 'Uso vivo Desplazamiento / Desplazamiento infinito en la lista de propiedades?');
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
jr_define('DATATABLES_SEMPTYTABLE', 'Ningún dato disponible en esta tabla');
jr_define('DATATABLES_SINFO', 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros');
jr_define('DATATABLES_SINFOEMPTY', 'Mostrando registros del 0 al 0 de un total de 0 registros');
jr_define('DATATABLES_SINFOFILTERED', '(filtrado de un total de _MAX_ registros)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Mostrar _MENU_ registros');
jr_define('DATATABLES_SLOADINGRECORDS', 'Cargando...');
jr_define('DATATABLES_SPROCESSING', 'Procesando...');
jr_define('DATATABLES_SSEARCH', 'Buscar:');
jr_define('DATATABLES_SZERORECORDS', 'No se encontraron resultados');
jr_define('DATATABLES_SFIRST', 'Primero');
jr_define('DATATABLES_SLAST', 'Último');
jr_define('DATATABLES_SNEXT', 'Siguiente');
jr_define('DATATABLES_SPREVIOUS', 'Anterior');
jr_define('DATATABLES_SSORTASCENDING', ': Activar para ordenar la columna de manera ascendente');
jr_define('DATATABLES_SSORTDESCENDING', ': Activar para ordenar la columna de manera descendente');
jr_define('DATATABLES_SHOWHIDE', 'modificar columnas');
jr_define('_BOOKING_ONREQUEST', 'Reserva bajo pedido');
jr_define('_BOOKING_INSTANT', 'reserva al instante');
jr_define('_JOMRES_COM_FONTAWESOME', 'Incluir fuentes icono conjunto impresionante?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Ajuste este parámetro en Sí si su plantilla no incluye fuente impresionante.');
jr_define('_BOOKING_CALCQUOTE', 'solicitud de reserva');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'querido ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Seleccionar un sitio');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Identificación del sitio');
jr_define('_JOMRES_IS_EU_COUNTRY', 'país de la UE?');
jr_define('_JOMRES_HLASTCHANGED', 'Último cambio');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Reserva de Hoteles de cancelación por correo electrónico');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Correo electrónico enviado al dueño de la propiedad, cuando una nueva reserva se cancela');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Huéspedes de cancelación de reserva por correo electrónico');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Correo electrónico enviado a los huéspedes cuando una nueva reserva se cancela');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Enviar correo electrónico de prueba');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'correo electrónico de prueba');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Este es un mensaje de prueba desde su sistema de reservas.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Prueba de correo electrónico enviado con éxito');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Prueba de correo electrónico no se ha enviado');
jr_define('_INVOICE_TRANSACTIONS', 'Actas');
jr_define('_OPENEXCHANGE_API', 'Abrir Cotizaciones clave de API');
jr_define('_OPENEXCHANGE_API_DESC', 'Para convertir los precios entre los servicios que necesitará una clave de API abierta Tasa de cambio. Usted debe tener una clave de API para visualizar los precios correctamente en Jomres, sin embargo, puede registrarse para obtener una clave gratuita en <a href="https://openexchangerates.org/signup/free" target="_blank">register for a free key</a>  (actualizaciones cada hora, 1000 peticiones / mes - sin HTTPS, soporte de correo electrónico o funciones avanzadas ). tipos de cambio jomres descargas una vez al día por lo que el tiempo que se utiliza la tecla de sólo un puñado de sitios, que son poco probable que supere estos límites. Anterior a Jomres 8.3 se utilizó una, indocumentado característica mayores Yahoo Sin embargo han descubierto que el uso de esta función está en contradicción con Yahoos Términos y Condiciones. Como resultado tenemos que asumir que la característica puede desaparecer en algún momento en el futuro, de ahí el cambio al uso Abiertas Tipo de Cambio.');
jr_define('_JOMRES_COMMISSION', 'Comisión');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Si a subir varias imágenes de los accesorios opcionales individuales, sólo se utilizará la primera imagen.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pague ahora');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Esta factura se debe ahora. Por favor, haga clic en el botón para seleccionar el método de pago.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', 'He aquí una lista de algunas de las grandes cosas que usted puede comprar al hacer una reserva en esta propiedad. ');
jr_define('GATEWAYS_INSTRUCTIONS', 'En esta página se puede configurar ninguna pasarelas instaladas. Estas opciones le permiten tomar el pago de ningún tipo de comisión de suscripción o facturas. frontend ajustes sólo pueden ser anulados por Paypal, tendrán que ser configurado a través de la configuración de la propiedad todas las demás puertas de enlace -> pestaña pasarelas, sin embargo, si una puerta de enlace aparece en esta lista, entonces debería ser capaz de procesar tanto los pagos de depósito de reserva y pagos de facturas.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Mostrar en página de detalles de la propiedad?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'configuración de la página Detalles de la propiedad');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'gestión de la propiedad en Jomres se hace sólo desde el cpanel sitio frontend. En esta página usted `ll ser capaz de enumerar todas las propiedades en el sistema, lo que puede asignar tasas de comisión y aprobar / anular la aprobación (si se habilitan estas características). Para crear una nueva propiedad, editar los ya existentes, administrar las reservas o cualquier tipo de reservas de propiedad / tareas relacionadas, `ll tiene que iniciar sesión en la interfaz web y vaya a la página por defecto Jomres. No le ll ver la interfaz de cPanel Jomres.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'los iconos de funciones de habitaciones');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Características de negocio Categorías');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Editar negocios Característica Categoría');
jr_define('_JOMRES_HCATEGORY', 'Categoría');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'características del mundo del espectáculo separados en categorías?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Establecer como Sí para separar las funciones de propiedad en categorías. Esta opción sólo afecta a las características de la propiedad que se muestran en la página de detalles de la propiedad. Todas las demás páginas se mostrarlos sin necesidad de dividirlos en categorías.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Deshacer el registro');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'deshacer desprotección');
jr_define('_JOMRES_STATUS_UNISSUED', 'no emitidas');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'El proceso de descarga y el apoyo clave es válida, usted será capaz de descargar plugins a través del administrador de plugins.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'El proceso de descarga y la clave de apoyo no es válida, no será capaz de descargar plugins a través del administrador de plugins.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'subtipo');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', 'Aún no se ha establecido su propiedad subtipo. Aquí es donde usted lo define como algo parecido a una villa de 5 dormitorios y 4 dormitorios casa y que le ayuda a los clientes que están buscando para refinar sus búsquedas.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Dar a su propiedad un subtipo');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Plantillas de correo electrónico');
jr_define('_JOMRES_CONTACT_SETTINGS', 'ajustes de los contactos');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Desde aquí se puede anular todos los detalles propiedades de contacto (correo electrónico, teléfono, fax) por lo que toda la comunicación con los clientes será enviado a usted y no a los dueños de propiedades.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Invalidar los datos de contacto listados?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', 'Si esta opción se establece en Sí y direcciones de correo electrónico y números de teléfono de propiedad serán reemplazadas con las que figuran en esta ficha. Esto obliga a que todas las comunicaciones que se envíen a su dirección de correo electrónico nominado asegurar que el huésped y el dueño de la propiedad no se pueden pasar por alto el motor de reservas y los gastos de comisión que resultarán. También significa que cada vez que se cambia una descripción de la propiedad del inmueble se ajustará a No aprobado (si las aprobaciones función está habilitada) y tendrá que comprobar manualmente la descripción para asegurarse de que los gerentes no han entrado teléfono o correo electrónico detalles en los campos de texto antes de aprobar de nuevo
.');
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Los cambios realizados en detalles del anuncio requieren la verificación del sitio de administración. Si guarda los nuevos detalles, su perfil será la aprobación del sitio de administración inéditos y de espera antes de que sea visible de nuevo para los visitantes del sitio. Usted `t sea capaz de recibir reservas en línea, mientras que su perfil es inédita ya la espera de aprobación.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'solicitud de revisión de reserva');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirmar solicitud de reserva');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Modificar solicitud de reserva');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Marcos factura como pendiente');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Factura aparece como pendiente');
jr_define('_JOMRES_TRACKING_ENABLE', 'Enviar datos de seguimiento anónimo?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Seleccione Sí para enviar datos de seguimiento anónimos para Jomres.net para ayudarnos a entender mejor cómo se utiliza el sistema de.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Por favor asegúrese de que sus datos se han completado en la página Editar mi cuenta antes de intentar hacer reservas en nombre de sus clientes.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', 'los datos de contacto de los huéspedes');
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- nueva huéspedes -- ');
jr_define('_JOMRES_CHARTS', 'Gráficas');
jr_define('_JOMRES_CHARTS_SELECT', 'Seleccionar tabla...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'El ingreso por año / mes');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'Ok, vamos a empezar. En primer lugar es necesario crear algunas habitaciones de esta propiedad.');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Crear algunas habitaciones ahora');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'La investigación ha demostrado que las propiedades con un montón de imágenes de alta calidad generan más puntos de vista. Sube una imagen principal y algunas diapositivas imágenes para mejorar sus posibilidades de conseguir reservas.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Subir una imagen');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Crear algunas tarifas');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Lo que se reserva los huéspedes?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Esta propiedad se escriba una propiedad tipo, donde alquilar habitaciones en la propiedad, o un tipo chalet, donde usted alquila toda la propiedad en una reserva? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Las habitaciones de la propiedad');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Toda la propiedad');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Ambos'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Lo que se reserva los huéspedes?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', 'Tendrá que completar detalles de su dirección para que sus clientes pueden encontrar que cuando vienen para quedarse.');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Actualizar su dirección');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Vaya, parece que se le haya olvidado para completar todos los campos.');
jr_define('_JOMRES_CONTANT_US', 'Contáctenos');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Bienvenido a su nueva lista en línea de ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hola y bienvenido a su nueva propiedad en');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Ha agregado recientemente una nueva propiedad en nuestro sitio web, y nos gustaría darle la bienvenida a la familia.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Se puede ver el nuevo tablero de instrumentos ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' aquí ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', 'Una vez que haya establecido su propiedad se puede ver cómo se ve a los visitantes del sitio visitando');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' su portada.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', '(No se publica, por lo que los visitantes del sitio no puede verlo aún).');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', 'En la parte superior de la página, verá una serie de mensajes. Los botones junto a estos mensajes que guiarán a las páginas que necesita para visitar a establecer su propiedad en nuestro sitio. Una vez que haya realizado cada una de estas tareas que va a ser mucho más fácil para los visitantes en nuestro sitio para encontrar su propiedad y hacer reservas en línea.
');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Si tiene alguna pregunta, por favor ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'Contáctenos');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', 'y estaremos encantados de responder a todas sus preguntas.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Todo lo mejor, nuestro equipo en ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', 'Usted no parece tener ninguna excursión para vender. Crear un perfil de recorrido, a continuación, utilice el botón Generar para crear algunas excursiones.');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', 'Vamos a crear algunas excursiones!');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'De Permuta de ubicación símbolo de moneda');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Utilice esta opción para mover el símbolo de moneda de detrás de, al frente de la figura precio, o viceversa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Introduzca su página de facebook de la identificación, por ejemplo "jomres". Dejar en blanco para mostrar nada. No entrar en https://www.facebook.com o cualquier otra cosa.');
jr_define('COMMON_DOWNLOAD', 'Descargar');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'A continuación, tendrá que añadir algunas tarifas. Estos son sus precios básicos.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap no está activado!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Advertencia, no tiene Bootstrap habilitada en Configuración del sitio Jomres -> pestaña Misc. Para proporcionar <i> algunos </ i> Jomres funcionalidad está utilizando sus plantillas antiguas, basadas jQuery UI, sin embargo, estos no han sido trabajados en varios años. Todo el desarrollo y la mejora de las plantillas jomres (archivos de diseño actual) se hacen para sus archivos de plantilla Bootstrap 3. Para sacar el máximo partido de Jomres le recomendamos que instale un tema basado Bootstrap 3 para Wordpress o Joomla. Una vez que haya hecho que puede habilitar las plantillas Jomres Bootstrap en Configuración del sitio.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Su clave de soporte es válido. Tenga en cuenta que esta licencia no permite descargas de plugins.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Arrastre reservas a esta área de cancelarlos');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Antes de crear un tipo de habitación, lo que necesitamos saber si se trata de una propiedad tipo, o un tipo bien chalet.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Haga clic para añadir nuevos tipos de habitación');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Advertencia, que tiene uno o más tipos de propiedad que no tienen tipos de habitación. Propiedades necesitan tipos de habitaciones para que los administradores de propiedades pueden crear tarifas.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Utilice el botón Nuevo anteriores para crear nuevos tipos de habitación.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No se hacen reservas / inmobiliaria (simple enumeración)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Ingrese la ubicación del archivo');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres registra la actividad del sistema por defecto para el '.JOMRES_SYSTEMLOG_PATH.' ubicación. Como este archivo puede contener información sensible (claves de la API, las rutas del sistema, información de puerta de enlace, información de los invitados) se recomienda encarecidamente que cambie este camino a uno por encima de la raíz del servidor. Si usted no entiende lo que esto significa, por favor preguntar a sus anfitriones de la tela de asesoramiento, ya que se conoce su sistema de archivos.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres registros detallados información sobre su sistema, incluyendo claves de la API, las rutas del sistema, la puerta de enlace e información de invitados, todos los cuales no deben ser visibles para el resto de Internet. Su ruta de registro del sistema no está configurado, por lo que los registros del sistema actualmente se están guardando en la '.JOMRES_SYSTEMLOG_PATH.' directorio, que no es ideal. Por favor, visite Configuración del sitio -> Depuración y establecer una ruta en el sistema de archivos que es OutSite de la raíz web. En caso de duda, póngase en contacto con sus anfitriones de la tela, ya que será capaz de aconsejarle.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Si sus KMS está instalado en el directorio raíz de su sitio web, a continuación, una ubicación adecuada podría ser');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "No es necesario que un conjunto clave de Google Maps. Debido a los recientes cambios en los mapas de Google, todos los sitios nuevos se necesita una clave de API para poder utilizar las funciones de Google mapa. Por favor, <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'> ver nuestra página del manual sobre cómo crear una clave de API </a> y guardar la llave en Jomres
.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'esquema de colores Google');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', 'Bien, vamos a empezar a añadir su propiedad a la página web. Tenemos que recoger un poco de información acerca de su propiedad aquí. Esto nos permitirá configurar el esqueleto de su propiedad. Una vez hecho esto, a continuación, se le guiará a través de la adición de estancias, los precios y las imágenes.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'El tipo de propiedad que ayuda a definir cómo se va a reservar la propiedad, por ejemplo, con los hoteles que vender sólo una o dos habitaciones a la vez, mientras que con villas que ofrece todo el edificio.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'Tenga en cuenta que la dirección de correo electrónico no tiene por qué ser el mismo que el que se utilizó cuando se registró su cuenta. Esto le permite tener diferentes direcciones para diferentes propiedades.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Depósito mínimo');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Puede configurar el monto mínimo de depósito que se cobrará. Si lo hace, entonces las opciones "¿El depósito requerido es el costo de la primera noche?" y "¿El depósito requerido es un porcentaje?" en la Configuración de la propiedad no se pueden configurar , en cambio, todos los valores de depósito son un porcentaje y deben ser al menos la cifra que defina aquí. ');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Esta cifra no puede ser inferior a');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Host de Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Puerto de Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Si desea enviar mensajes de registro del sistema a un servidor syslog, puede configurar el nombre de host o la IP (por ejemplo, 192.168.0.2) y el puerto (por ejemplo, 514) aquí. Tenga en cuenta que si el sitio está configurado en ' Desarrollo ', se enviarán los mensajes DEBUG. Si se establece en' Producción ', solo se enviarán mensajes de nivel INFO y superiores. Para deshabilitar el registro en el servidor remoto, vacíe los campos de host y puerto. ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP no puede acceder a las funciones PHP 'openlog' y 'syslog'. Esta es una configuración del lado del servidor, si desea que Jomres envíe mensajes a un servidor syslog, consulte a sus hosts y confirme si PHP tiene permiso para acceder a estas funciones. Una vez habilitado, podrá configurar los ajustes de su servidor syslog aquí. ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', '¿Enviar un correo electrónico al administrador del sitio cuando ocurre un error?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Históricamente, los problemas que deberían investigarse se enviaban por correo electrónico a los propietarios del sitio. Esto puede ser excelente para vigilar el funcionamiento de su sistema, ya que tiene una gran cantidad de partes móviles y es difícil realizar un seguimiento de todos. Desafortunadamente, las arañas y los bots que rastrean sus sitios (incluso los amigables) pueden desencadenar errores fatales inadvertidamente y esto puede hacer que la cantidad de mensajes que reciba sea abrumadora. Si ese es el caso, establezca esta opción en No. Jomres envía registros mensajes a un conjunto de archivos de registro y a un servidor syslog (si su configuración PHP específica lo permite, si no lo permite, comuníquese con su host). Puede analizar manualmente los archivos si está buscando algo específico (por ejemplo, si está desarrollando una puerta de enlace y desea usar la llamada a la función gateway_log ().) pero esa es mucha información para rastrear, por lo que es mejor usar algo como un analizador de archivos syslog. Si está desarrollando en Linux, entonces hay muchas herramientas disponibles para usted, si está en Windows, una herramienta simple que puede usar es http://maxbelkov.github.io/visualsyslog/ En esta página configure el 'host de Syslog' en '127.0.0.1' y el ' Port 'a 514 para ver los mensajes registrados en esa herramienta. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Administrar propiedades');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "No tiene configurada una clave de API de detección de IP. Esto es necesario para permitir que el sistema detecte automáticamente la ubicación del usuario y configure su moneda y país automáticamente. Por favor <a href ='http://www .jomres.net/manual/site-managers-guide/35-control-panel/main/ site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> consulte nuestro manual página sobre cómo crear una clave de API de detección de IP </a> y guardar la clave en Jomres> Configuración del sitio> Conversiones de moneda / Códigos de moneda. ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "No tiene configurada una clave API de tipos de cambio abiertos. Esto es necesario para permitir que el sistema descargue y utilice automáticamente los tipos de cambio de moneda. Por favor <a href = 'https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> consulte nuestra página de manual sobre cómo cree una clave de API de detección de IP </a> y guarde la clave en Jomres> Configuración del sitio> Conversiones de moneda / Códigos de moneda ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Número de permiso');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Algunos países legislan que debe mostrar un número de permiso para su propiedad. Si tiene tal número, ingréselo aquí y se agregará a la sección de encabezado de la propiedad.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "El complemento <strong> plg_content_jomres_asamodule_mambot </strong> de Jomres Asamodule Mambot DEBE estar instalado y habilitado para que estos códigos cortos funcionen. Se puede encontrar en el Administrador de complementos de Jomres. Quickstarts entonces probablemente ya esté instalado. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Debe asegurarse de que el complemento <strong> 'Jomres Shortcodes' </strong> esté habilitado. Puede encontrarlo en el Administrador de complementos de Jomres. Si este sitio se creó utilizando uno de los inicios rápidos, probablemente sea ya instalado.");
jr_define('SHORTCODE_TASK', 'Tarea');
jr_define('SHORTCODE_DESCRIPTION', 'Descripción');
jr_define('SHORTCODE_ARGUMENTS', 'Argumentos');
jr_define('SHORTCODE_EXAMPLE', 'Ejemplo');
jr_define('INTEGRITY_CHECK', 'Verificación de integridad del sistema de archivos');
jr_define('INTEGRITY_CHECK_DESC', 'Esta función le permite verificar que el sistema de archivos coincida con el suministrado en la versión actual de Jomres. Esto es útil para garantizar que todos los archivos se actualizaron correctamente después de la instalación / actualización. Faltan archivos en rojo, archivos en El naranja existe, pero es diferente de los suministrados en la versión actual. Aquí solo se enumerarán los archivos que sean problemas potenciales. ');
jr_define('INTEGRITY_CHECK_FILENAME', 'Verificación de integridad del sistema de archivos');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Hash local');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Hash de versión');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', '¡Genial! No se encontraron problemas.');
jr_define('_JOMRES_PROPERTYPE_MARKER', 'Marcador de mapas de Google');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Leer más');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Leer menos');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tasa turística');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tasa de impuesto turístico');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Establecer la tasa de impuesto turístico. El impuesto turístico solo se calcula después de que se genera la reserva inicial y se agrega a la página de confirmación de la reserva, en el cuadro de servicios adicionales.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', '¿Es porcentaje?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Establezca esto en Sí si el impuesto es un porcentaje o No si es una tarifa fija");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', '¿Afecta el valor total de la reserva?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Establezca esto en Sí si el impuesto debe cubrir el valor total de la reserva, por lo que es un porcentaje tanto del alojamiento más cualquier extra, o No si solo se calcula en base al valor de el total de acomodación. Si la opción 'Es porcentaje' anterior se establece en No, esta opción se ignora. ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Tenga en cuenta que se agregará un impuesto turístico a esta reserva. Podrá ver el impuesto en la página de reserva de revisión.');
jr_define('NO_LICENSE_MESSAGE', "No ha guardado un número de licencia en la Configuración del sitio, por lo tanto, no podrá descargar complementos. Una vez que tenga una clave de licencia válida guardada, podrá instalar cualquier complemento que se enumere como Complementos principales. ");
jr_define('INVALID_LICENSE_MESSAGE', "Parece que estás usando un número de licencia que no es válido o que ha caducado. Una vez que tengas una clave de licencia válida guardada, podrás instalar cualquier complemento que esté listado como Complemento Core.");
jr_define('VALID_LICENSE_MESSAGE', "Felicitaciones, está usando un número de licencia válido y puede instalar complementos Core a través del administrador de complementos de Jomres.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Esta página te permite subir imágenes para tu propiedad y las cosas que ofreces. Tiene un botón principal y un segundo botón que te permite seleccionar recursos específicos para subir imágenes. Entonces, la propiedad principal La imagen y la Presentación de diapositivas solo mostrarán un botón, pero si ha creado, por ejemplo, Extras opcionales o Salas, verá un segundo botón donde puede cargar imágenes para esos recursos específicos. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Esta página te permite subir imágenes para tu propiedad y las cosas que ofreces. Tiene un botón principal y un segundo botón que te permite seleccionar recursos específicos para subir imágenes. Entonces, la propiedad principal La imagen y la Presentación de diapositivas solo mostrarán un botón, pero si ha creado Extras opcionales, verá un segundo botón donde puede cargar imágenes para esos recursos específicos. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Primero, elija las imágenes que desea cargar haciendo clic en Agregar imagen o usando Arrastrar y soltar. Estos aparecerán en la columna del lado derecho. </li>
  <li> Por encima de esta área, use el botón \"Elija el recurso \" para elegir el recurso para el que desea cargar imágenes. Es posible que se le ofrezca la opción de elegir un recurso específico debajo. </li>
  <li> Una vez que haya elegido un recurso, puede hacer clic en el botón Cargar imagen debajo de una imagen para asociarlo con ese recurso. Una vez que se ha subido una imagen, desaparecerá de la columna del sitio de la derecha y aparecerá en el de la izquierda. </li>
  <li> Utilice el botón Papelera junto a las imágenes existentes para eliminar las imágenes que ya no desea que se muestren. </li>
  <li> Puede cambiar el orden en que se muestran los archivos en la presentación de diapositivas cambiándolos de nombre antes de cargarlos, ya que se muestran en páginas en orden alfabético. </li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Junto al botón Recurso, es posible que vea un botón Vista previa. Si hace clic en este, verá una ventana emergente que le muestra cómo se verán las imágenes cargadas actualmente en una página. idea de cómo se verán las imágenes a sus clientes. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "No hay límite en la cantidad de imágenes que puede cargar. Las imágenes cambian de tamaño automáticamente cuando se cargan. Solo puede cargar archivos JPG y PNG");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Lo ideal sería que cualquier imagen que subas sea al menos");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "píxeles de ancho, de lo contrario pueden verse borrosos después de haber sido cargados.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Las imágenes que subas no pueden tener más de");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "en tamaño");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Elija el recurso para el que desea cargar imágenes");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurso específico");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imágenes ya cargadas para este recurso");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Formato de texto');
jr_define('_JOMRES_MARKDOWN_DESC', 'Puede ingresar texto aquí usando un formato de Markdown simple. No necesita saber nada de HTML, solo use los botones para hacer que la información se vea como desea, o formatee el texto de acuerdo con estos ejemplos.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Énfasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'negrita');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'cursiva');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'tachado');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Encabezados");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Cabecera grande');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Encabezado medio");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Encabezado pequeño');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Encabezado pequeño');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listas");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Elemento de lista genérico');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Elemento de lista numerado');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Enlaces');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Texto para mostrar');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Cotizaciones');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Esto es una cita.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', '¡Puede abarcar varias líneas!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Imágenes');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tablas');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Columna');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', '¿Mostrar imágenes de propiedades como presentación de diapositivas en la lista de propiedades?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Si se establece en sí, se mostrará una presentación de diapositivas de las imágenes principales de la propiedad. Si se establece en no, se mostrará la primera imagen principal de la propiedad.');
jr_define('EDIT_CMS_USER', 'Editar usuario de CMS');
jr_define('BOOKING_MADE_BY', 'Reserva hecha por');
jr_define('_JOMRES_ROUTER_FEATURES', 'Servicios');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipos de habitaciones');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL del formulario de reserva externa');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Aquí puede establecer una URL externa si desea utilizar un sitio web de terceros para realizar reservas. Todos los botones de reserva de jomres apuntarán a esta URL. Deje este campo en blanco si desea utilizar el formulario de reserva de Jomres . ');
jr_define('_JOMRES_ROOM_TAGLINE', 'Lema (descripción / subtítulo breve de la habitación)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Descripción de la habitación');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Invitado en la lista negra');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Si este huésped está en la lista negra, entonces ya no podrá realizar reservas en esta propiedad.');
jr_define('_JOMRES_SESSION_HANDLER', 'Controlador de sesión');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Guardar archivos de sesión de jomres en el disco o en la base de datos. Recomendado: base de datos');
jr_define('_JOMRES_MAP_HEIGHT', "Altura del mapa (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Nivel de zoom del mapa");
jr_define('_JOMRES_MAP_MAPTYPE', "Tipo de mapa");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Administrador de anulación de plantillas");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Los paquetes de plantillas son complementos que pueden proporcionar plantillas de reemplazo para varios archivos de plantilla de Jomres principales.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Esta página enumera los archivos de plantilla que pueden ser anulados por los archivos de plantilla de un paquete de plantillas. Si desea anular un determinado archivo de plantilla, haga clic en el botón editar para ese archivo, en la página siguiente aparecerá puede elegir la versión con la que desea anular. Tenga en cuenta que estas anulaciones tienen prioridad sobre Jomres Core y cualquier anulación de tema / plantilla de Wordpress o Joomla. Puede desactivar una anulación eliminándola en la página Lista de anulaciones de plantillas. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nombre de plantilla");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Ruta actual");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "No anulado");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Puede elegir qué archivo de plantilla anular los archivos de plantilla Core cambiando el menú desplegable");

jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Porcentaje de habitaciones reservadas");
jr_define('_JOMRES_SELECT_WIDGETS', "Seleccionar widgets");
jr_define('_JOMRES_INTERVAL', "Intervalo");
jr_define('_JOMRES_TIMELINE', "Línea de tiempo");
jr_define('_JOMRES_CPANEL_GRID', "Diseño de inicio del panel de control");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Seleccione el diseño de cuadrícula de la página de inicio del panel de control de administración de propiedades de su interfaz.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Marcadores de mapas de Google");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Imágenes de la ciudad");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Cambiar el tipo de propiedad eliminará todas las habitaciones, tarifas, configuraciones de propiedad y restablecerá la disponibilidad.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Tenga en cuenta que después de la actualización debe actualizar todos los complementos de Jomres que ya estén instalados, a través del administrador de complementos de Jomres. Si tiene complementos Core instalados, pero no tiene una licencia válida de Jomres, entonces <em> lo hacemos no </em> recomendar que actualice Jomres ya que los complementos más antiguos a menudo pueden no funcionar con versiones más nuevas de Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Tenga en cuenta que después de la actualización debe actualizar todos los complementos de Jomres que ya estén instalados a través del administrador de complementos de Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Si desea actualizar Jomres y sus complementos, necesitará una licencia de renovación. Visite <a href='https://www.jomres.net/pricing' target='_blank'> nuestro site </a> para obtener más información. En la mayoría de los casos, estas licencias son el 50% del precio de una licencia completa. Asegúrese de haber iniciado sesión en nuestra tienda antes de intentar comprar una renovación. ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Método de pago:");

jr_define('_JOMRES_PRICES', "Conéctese");


jr_define('_OAUTH_TITLE', "Gestión de claves de aplicaciones");
jr_define('_OAUTH_APPS', "Detalles del cliente de la API REST");
jr_define('_OAUTH_IDENTIFIER', "Identificador");
jr_define('_OAUTH_APIKEY', "ID de cliente");
jr_define('_OAUTH_SECRET', "Secreto");
jr_define('_OAUTH_CREATED', "Aplicación creada / actualizada");
jr_define('_OAUTH_CLIENT_ID_INFO', "El ID de cliente y el secreto se crean para usted. El identificador es para que pueda identificar fácilmente este par de claves.");
jr_define('_OAUTH_SCOPE_TITLE', "Permisos (lo que el cliente puede hacer)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Permisos de usuario");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Permisos de propiedad");

jr_define('API_DOCUMENTATION_TITLE', "Documentación de la API REST de la aplicación");

jr_define('_OAUTH_CONFIG', "Configuración de API Core");

jr_define('_OAUTH_CONFIG_SHOW', "¿Mostrar las opciones de configuración del cliente API en el menú principal de Jomres?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Puede optar por no mostrar las opciones de configuración del cliente API en la sección 'Mi cuenta' del menú principal de Jomres. En su lugar, podría decidir que desea mostrarlas en otras páginas utilizando códigos cortos de Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Muestra la página de documentación de API Core. API Core permite a los usuarios crear clientes de API, que luego se utilizan para acceder a la funcionalidad de API que se describe en la documentación de API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Muestra la página de administración del núcleo de la API, donde los administradores de propiedades pueden configurar los clientes de la API. Tenga en cuenta que esta es una función solo para usuarios registrados, por lo que los usuarios deben registrarse e iniciar sesión antes de que puedan ver esta página.");

jr_define('API_METHODS_TITLE', "Métodos API");
jr_define('API_METHODS_DESCRIPTION', "Esta lista de métodos se basa en los complementos de funciones de API instalados y se genera automáticamente. Si instala o elimina un complemento de funciones de API, debe visitar esta página para reconstruir esta lista de métodos de API disponibles en su sitio. ");

jr_define('_OAUTH_REDIRECT_URI', "Redirigir URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dame un nombre que sea significativo para ti, como Mi teléfono");

jr_define('_OAUTH_GRANT_TYPES', "Este sistema admite dos tipos de concesión, Credenciales de cliente e Implícito. Si está utilizando el flujo <em> client_credentials </em>, necesitará tanto la identificación del cliente como el secreto del cliente. Si utiliza <em > implícito </em> entonces su aplicación enviaría solo la identificación del cliente y usted iniciaría sesión en el sistema para autorizar explícitamente esa aplicación. ");

jr_define('_OAUTH_IMPLICIT_NOTES', "Para utilizar el flujo de tipo de concesión <em> implícito </em>, deberá utilizar esta URL para autorizar sus aplicaciones. Cuando se llame a esta URL y haya autorizado la aplicación, el sistema emitirá un token que sus aplicaciones usarán para llamar a la API de este sistema ");
jr_define('_OAUTH_AUTHORISATION_URL', "URL de autorización");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "¿Mostrar opciones de configuración de Webhook en el menú principal de Jomres?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Puede optar por no mostrar las opciones de configuración de Webhook en la sección 'Mi cuenta' del menú principal de Jomres. En su lugar, podría decidir que desea mostrarlas en otras páginas utilizando códigos cortos de Jomres.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Documentación de Webhooks");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Muestra la página de documentación del núcleo de API. El núcleo de API permite a los usuarios crear clientes de API, que luego se utilizan para acceder a la funcionalidad de API que se describe en la documentación de núcleo de API.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Muestra la página de administración principal de API, donde los administradores de propiedades pueden configurar clientes API. Tenga en cuenta que esta es una función solo para usuarios registrados, por lo que los usuarios deben registrarse e iniciar sesión antes de poder ver esta página");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Editar integración');
jr_define('WEBHOOKS_INTEGRATION_ID', 'ID de integración');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL o nombre');
jr_define('WEBHOOKS_ENABLED', 'Habilitado');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Método de autenticación / Integración');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Los webhooks que cree no se activarán ya que no está asignado a ninguna propiedad. Los administradores de superpropiedades no suelen tener asignadas propiedades individuales, por lo que es posible que necesite un nuevo usuario para la creación de webhooks.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Cualquier webhook que cree se activará con las siguientes propiedades:');


jr_define('PORTAL_REVIEWS_LIMIT', 'Límite de reseñas');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Utilice esta configuración para limitar el número de reseñas que se muestran en la página de detalles de la propiedad.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Mostrar todas las reseñas');

jr_define('VIDEO_TUTORIALS', 'Tutoriales en video');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínimo de depósito');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Si el depósito calculado es menor que esta cifra, establezca el depósito en este valor. Esta cifra podría anularse si no satisface la configuración de depósito mínimo del sitio. Déjelo en 0 para no utilice el ajuste. ");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Para aumentar la velocidad de su sitio, recomendamos importar detalles del sitio existente y las imágenes de propiedades a la base de datos.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importar detalles de imágenes existentes a la base de datos');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Función experimental. Si está habilitada, las imágenes cargadas con la función del centro de medios también se copiarán a su bucket de Amazon S3 y se enviarán desde la URL de su bucket de Amazon S3. Cuando habilite esta función por primera vez, también se le solicita que importe las imágenes existentes a su bucket de S3. ');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'Dominio de CloudFront');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Reemplace su dominio predeterminado de Amazon S3 con su dominio de CloudFront');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Se recomienda habilitarlo. Solo para Windows y Mac OSX, si libcurl no se creó con soporte para Schannel o Secure Transport (las bibliotecas nativas de SSL incluidas en Windows y Mac OS X), debe configurarlo en No.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Ha habilitado la integración de Amazon S3, por lo que tendrá que copiar todas las imágenes existentes en su depósito de S3. Las imágenes ahora se muestran a los visitantes de su sitio desde su URL de Amazon S3, por lo que necesitará copiarlos primero en su depósito de S3; de lo contrario, no serán visibles para los visitantes de su sitio. ');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Una vez que haga clic en este botón, no interrumpa el proceso y espere un mensaje de éxito o error. Dependiendo de la velocidad del servidor, esto puede tardar un poco en completarse.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copiar imágenes existentes en el depósito de Amazon S3');


jr_define('JOMRES_INCOMPLETE', 'Incompleto');
jr_define('JOMRES_WATING_APPROVAL', 'Pendiente de aprobación');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Mapa de detalles de la propiedad');

jr_define('HAS_STARS_TITLE', '¿Permite la clasificación de estrellas?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Forzar reimportar detalles de la imagen a la base de datos');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Forzar la recarga de imágenes al depósito S3');
jr_define('_JOMRES_UNINSTALL_TABLES', '¿Eliminar todos los datos de Jomres al desinstalar?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Si se establece en sí, Jomres eliminará todas las tablas de su base de datos cuando se desinstale. Esto eliminará todos los datos de Jomres de la base de datos y no se puede deshacer.');

jr_define('TRANSACTION_IDS', 'ID de transacción');
jr_define('PAYMENT_METHOD', 'Método de pago');
jr_define('POA_DISPLAY_PRICE', 'Precio POA');
jr_define('POA_DISPLAY_PRICE_DESC', 'Cuando las propiedades se muestran en una lista, el sistema intentará encontrar un precio válido a partir de las tarifas configuradas en función de la fecha de hoy o si las fechas se usaron en una búsqueda, luego en función de esas fechas . Si no puede, entonces mostrará POA (Precio en la solicitud), lo que significa que el huésped debe contactarlo para obtener un precio. Si lo desea, puede configurar un precio aquí que se mostrará en lugar del texto de POA. Esta figura sería un precio "alternativo" para mostrar si no se puede determinar otro precio. ');

jr_define('PLUGINMANAGER_INSTALL', 'Necesitas instalar el administrador de complementos antes de poder instalar los complementos de Jomres, ¿te gustaría hacerlo ahora?');
jr_define('PLUGINMANAGER_REINSTALL', 'Necesita actualizar el administrador de complementos antes de poder actualizar los complementos instalados, ¿le gustaría hacerlo ahora?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "¡Hagamos esto!");

jr_define('INCLUDEINFILTERS', '¿Incluir en filtros?');
jr_define('INCLUDEINFILTERS_DESC', 'Los filtros de características de propiedad en Ajax Composite Search pueden ser muy largos, por lo que puede establecer esta opción en No para evitar que esta característica se muestre en la lista de características de propiedad.');

jr_define('REVIEW_REMINDER_PT1', "Tienes");
jr_define('REVIEW_REMINDER_PT2', "reserva (s) para las que aún no ha dejado una reseña. Deje una reseña");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Reservas en espera de revisión");
jr_define('REVIEW_NAG', "¿Molestar a los huéspedes por reseñas?");
jr_define('REVIEW_NAG_DESC', "Una vez que un huésped ha sido reservado desde una reserva, el sistema le recordará que publique una reseña de su reserva. Establezca esta opción en No para deshabilitar este recordatorio");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "¿Enviar copias de los correos electrónicos de reserva a los administradores del sitio?");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Cuando está habilitado, copias de los correos electrónicos de reserva enviados a los administradores de propiedades también se enviarán a todos los administradores del sitio");

jr_define('HIDDEN_ADDRESS_SETTING', "¿Ocultar dirección?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Si configura esta opción en Sí, solo los huéspedes que ya hayan realizado una reserva en su propiedad podrán ver la dirección postal de la propiedad. Es posible que desee utilizar esta configuración para ocultar la ubicación exacta de la propiedad si, por ejemplo, se deja habitualmente desatendido. ");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', '¿Optimizar imágenes al cargar?');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Cuando está habilitado, las imágenes se optimizarán para la web (el tamaño del archivo puede ser hasta un 75% más pequeño). Dependiendo del tipo de imagen cargada, su servidor debe tener una o más de estas bibliotecas instaladas por el hosting proveedor: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define('DATABASE_INTEGRITY_CHECK', 'Comprobación de la integridad de la base de datos');
jr_define('OBSOLETE_FILES_CHECK', 'Comprobación de archivos obsoletos');
jr_define('DATATABLES_COLVIS', 'Columna Visibilidad');

jr_define('API_TOKEN_LIFETIME', 'Vida útil del token API');
jr_define('API_TOKEN_LIFETIME_DESC', 'Cuánto tiempo permanece válido un token API, en segundos. 86400 = 1 día, 31536000 = 1 año');


jr_define('ENCRYPTION_TITLE', 'Cifrado');
jr_define('ENCRYPTION_FILE_LOCATION', 'Ubicación del archivo de cifrado');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** Nunca elimine el archivo de cifrado ** <br/> Los datos del usuario se almacenan cifrados en tablas para garantizar que los "datos en reposo" estén protegidos de forma segura, de acuerdo con las recomendaciones del RGPD. De forma predeterminada, la clave de cifrado se almacena en el archivo "encryption_key.class.php" en la raíz de su instalación de Jomres (normalmente / public_html / jomres). Puede cambiar dónde se almacena el archivo aquí. Si cambia la ubicación, debe MOVER el archivo, no espere a que Jomres cree una nueva versión, de lo contrario no podrá decodificar los detalles de sus invitados. ');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'La información que guarde aquí se utilizará en las facturas generadas para esta propiedad');

jr_define('_JOMRES_GDPR_POLICIES', 'Políticas GDPR');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Aquí puede configurar cuánto tiempo después de que se ha creado una reserva o factura se elimina del sistema para asegurarse de que cumple con el GDPR.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Período de retención de reserva (en días)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', '¿Cuántos días después de la fecha de salida de la reserva se debe eliminar la reserva? Cuando se elimina, se eliminan tanto la reserva como la factura. Un período de retención típico puede ser de 365 días.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Periodo de retención de facturas (sin reserva)');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Otras facturas, como las comisiones y las facturas de suscripción, no están vinculadas a las reservas. Como resultado, no se eliminarán cuando se eliminen las facturas de reserva y los contratos. Según su país y sus propias prácticas comerciales, deberá configurar un período de retención diferente. Un período de retención típico podría ser 3653 días, que es de 10 años. ');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Tus datos');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Algunas funciones de este sitio web necesitan almacenar información sobre su visita. Esto se usa solo para brindarle un servicio, nunca se comparte con nadie más y se elimina cuando ya no se necesita.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', '¿NOS OTORGA PERMISO PARA ALMACENAR ESTA INFORMACIÓN?');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'En detalle');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Debe darnos su consentimiento para que almacenemos estos datos para que pueda realizar reservas en este sitio. Independientemente de si acepta o no que se almacenen sus datos, almacenaremos una cookie en su computadora para informarle ya sea que haya optado por participar o no. Esto nos ayuda a asegurarnos de que no le preguntemos constantemente si desea participar o no y no contiene ninguna información de identificación personal (PII). Si cambia de opinión, puede visitar la página "Permisos de la aplicación" en cualquier momento para optar por participar o no. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'La información se almacena para diferentes períodos de tiempo dependiendo de la naturaleza de su visita. Por lo tanto, si solo está mirando, almacenaremos información de ubicación geográfica aproximada (nivel de país). Si realiza búsquedas, entonces Haga que los formularios de búsqueda sean más fáciles de usar, almacenaremos lo último que buscó. Esta información generalmente se almacena durante un máximo de 24 horas y solo se utiliza para hacer su visita más agradable. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Cuando haces una reserva con nosotros, por necesidad se almacena más información.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Los datos técnicos del formulario de reserva se capturan y conservan durante un máximo de 60 días. Esto es necesario para que las reservas bajo petición se puedan convertir en reservas completas una vez que se apruebe una reserva y para que nuestros equipos los analicen. en caso de que haya un problema con una reserva. Si no estaba conectado cuando hizo una reserva, le enviaremos un correo electrónico con un nombre de usuario y una contraseña para que pueda ver su historial de reservas y ejercer su derecho al olvido (RTBF) si deseo hacer eso. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Los datos ingresados ​​en el formulario de reserva, por ejemplo, nombre, dirección de correo electrónico, dirección real se almacenan durante un máximo de 365 días después de la fecha de salida de la reserva. Esta información se almacena de forma cifrada en nuestra base de datos para que solo las personas autorizadas puedan verlo. Si realiza una reserva, por ley debemos almacenar su PII mientras la reserva sea válida. Una vez que la reserva se haya completado, ya sea porque ha sido cancelada o porque ha salido, entonces podrá ejercer su RTBF iniciando sesión y visitando la página "Sus datos". La información de las facturas de las reservas completadas seguirá almacenada de forma segura en nuestra base de datos para garantizar que cumplimos con las leyes fiscales pertinentes, pero podrá eliminar todas las demás PII una vez completada la reserva. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Cuando da su consentimiento para que su información se almacene como se describe anteriormente, estamos legalmente obligados a almacenar este consentimiento en nuestra base de datos. Esta información incluirá su número de IP y el contenido del formulario de suscripción. conservar esta notificación de consentimiento de forma indefinida (esto es un requisito legal). ');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Aún no nos ha dicho si podemos recopilar información de identificación personal sobre usted');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Usted ha dado su consentimiento para que recopilemos la Información de identificación personal necesaria para realizar reservas');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Nos ha dicho que no recopilemos información de identificación personal');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'No nos ha dado permiso para recopilar sus datos privados');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Para que pueda realizar ciertas acciones en este sitio web, tenemos que recopilar información de identificación personal sobre usted, pero no nos ha dado permiso para hacerlo');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Cambie sus permisos');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continuar viendo propiedades');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Permisos de la aplicación');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Datos de invitado');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Estos son los detalles que las distintas propiedades almacenan para usted. Los diferentes hoteles pueden tener diferentes registros, dependiendo de lo que ingresó al hacer la reserva.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'No tiene ningún dato almacenado con ningún hotel en este sistema');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Datos de perfil');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Este es el conjunto de datos principal que tenemos para usted, distinto de los que ha compartido con diferentes propiedades.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'No ha guardado ninguna información de perfil');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Aquí está la información de identificación personal que almacenamos en este sitio web para usted. Está construida en formato JSON (JavaScript Object Notation), que es un formato ligero de intercambio de datos. Es fácil de leer y escribir y es fácil para las máquinas analizar y generar. ');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonimizado');

jr_define('_JOMRES_GDPR_MY_DATA', 'Tus datos');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Al aceptar estos Términos de uso del Acuerdo (este "Acuerdo"), usted acepta que:

<ul>
<li>
Está autorizado a reservar hoteles a través de este sitio web;
</li>
<li>
Tiene al menos 18 años de edad;
</li>
<li>
Posee la autoridad legal para crear una obligación legal vinculante;
</li>
<li>
Utilizará el Sitio de acuerdo con este Acuerdo;
</li>
<li>
Solo utilizará el Sitio para realizar reservas legítimas para usted o para otra persona por la que esté legalmente autorizado a actuar;
</li>
<li>
Informará a esas otras personas sobre este Acuerdo que se aplica a las reservas que he realizado en su nombre, incluidas todas las reglas y restricciones aplicables al mismo;
</li>
<li>
Toda la información proporcionada por usted al sitio web es verdadera, precisa, actual y completa; y
</li>
<li>
Protegerá la información de su cuenta y supervisará y será completamente responsable de cualquier uso que usted y cualquier otra persona haga de su cuenta.
</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'La seguridad y la transparencia son importantes para nosotros.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Nos tomamos muy en serio nuestras responsabilidades con respecto al almacenamiento de sus datos. Toda la información de identificación personal (PII) se almacena cifrada en nuestra base de datos utilizando algoritmos estándar de la industria para garantizar que solo los usuarios autorizados puedan ver esta información.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Puede descargar toda la PII que almacenamos para usted.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Descargar ahora');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Derecho al olvido (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Creemos que debería poder <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> eliminar </a> su < a href = "https://gdpr-info.eu/art-4-gdpr/" target="_blank" > Información de identificación personal </a> si lo desea y es posible. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISjected_OPTEDIN', 'No está registrado en este sitio. Su ubicación general (país) y número de IP se almacenarán durante un máximo de 24 horas y luego se eliminarán.');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISjected_OPTEDOUT', 'No está registrado en este sitio y ha optado por no participar en la recopilación de datos. No hemos almacenado su PII.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISjected_NOBOOKINGS', 'Está registrado en el sitio y no tiene ninguna reserva pendiente o activa. Podemos anonimizar la mayor parte de la información que tenemos actualmente para usted. ¿Le gustaría hacer eso?');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISjected_NOBOOKINGS_NOTE', 'Nota: Esto no elimina su cuenta, simplemente anonimiza nuestros registros para que su cuenta no se pueda asociar con usted como persona. Por ley, debemos continuar almacenando su PII para fines de facturación, sin embargo eliminar todos los registros de invitados. ');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISjected_FUTUREBOOKINGS', 'Está registrado en el sitio, sin embargo, tiene reservas pendientes y no podemos anonimizar sus datos en este momento. Estos datos se conservarán durante un máximo de un año después de que se haya completado la reserva, luego ser eliminado, si no decide eliminarlo antes de ese momento. ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISjected_PROPERTYMANAGERS', 'Debido a que usted es un administrador de propiedades en nuestro sitio, no podemos ofrecerle la posibilidad de eliminar sus datos automáticamente. En su lugar, comuníquese con nosotros directamente para que podamos asignar su (s) propiedad (s) a otro administrador. Una vez que hayamos hecho eso y eliminemos su estado como administrador de la propiedad, podrá eliminar automáticamente sus datos. ');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', '¡Olvídame!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', '¡Esto no se puede deshacer!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', '¡Tus datos han sido eliminados!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Lo sentimos, no puede hacer una reserva porque su dirección de correo electrónico no es válida');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Esta página le brinda la posibilidad de anonimizar a cualquier invitado que tenga su información almacenada en el sistema. Esto le permite cumplir con el GDPR, sin embargo, no puede editar ninguna otra información en esta página. Para ello debe iniciar sesión en la interfaz como administrador de la propiedad. Se supone que un huésped histórico se ha puesto en contacto con usted para solicitarle que le permita ejercer su derecho a ser olvidado. Si no puede iniciar sesión en la interfaz del sitio (tal vez un el usuario no fue creado para ellos cuando reservó), entonces puede usar esta área para anonimizarlos una vez que haya confirmado su identidad. ');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimizar invitado');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'PROPIEDAD BORRADA');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Datos de invitados anonimizados');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'No se puede anonimizar');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Necesitamos su permiso para almacenar su información antes de que pueda hacer una reserva. HAGA CLIC AQUÍ para darnos permiso.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', '¿Habilitar la funcionalidad compatible con GDPR?');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NO RECOMENDAMOS QUE DESHABILITE LA FUNCIONALIDAD DE CUMPLIMIENTO DEL RGPD. Jomres tiene funciones integradas que le ayudan a garantizar que la sección Jomres de su sitio cumpla con el RGPD. Si desactiva esta función (y no debería hacerlo si se encuentra en la UE o hace negocios con ciudadanos de la UE), entonces Jomres asumirá automáticamente que todos los visitantes del sitio han dado su permiso para habilitar sus datos personales. El permiso de la aplicación y las páginas de Mis datos no serán y no se les pedirá a los usuarios que den su permiso para que se recopilen los datos. ');


jr_define('EMPTY_TEMP_DIR', 'Directorio temporal vacío');
jr_define('EMPTY_TEMP_DIR_DONE', 'Archivos temporales eliminados');

jr_define('MACHINE_TRANSLATION', 'Traducciones automáticas');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Idioma de origen');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Es posible conectar la función de traducción automática. Esto le permite ingresar cadenas en un idioma y las traducciones se pueden extraer de servicios remotos. Tenga en cuenta que no todos los servicios de traducción son compatibles con todos los idiomas. Consulte esos servicios para mas detalle.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Tipos de habitaciones');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Nuevo tipo de habitación');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Puede crear y editar tipos de habitaciones en esta página. Estos tipos de habitaciones serán específicos de esta propiedad únicamente. Al configurar su propiedad, primero necesita algunos Tipos de habitaciones. Puede usar las tipologías de habitaciones creadas por el administrador, o puede agregar las suyas propias. Una vez que tenga uno o más tipos de habitación, puede crear habitaciones de ese tipo de habitación. Una vez que tenga habitaciones, puede crear tarifas (precios) para esas habitaciones porque las tarifas están vinculadas a los tipos de habitación . ');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', '¿Los gerentes pueden crear tipos de habitaciones?');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use esta opción para configurar si los gerentes pueden o no crear sus propios tipos de habitaciones en la interfaz. Le recomendamos que deje esta opción configurada en No cuando comience a usar Jomres por primera vez, especialmente si está creando una portal porque debe crear todos los tipos de habitaciones en el área del administrador. Los tipos de habitaciones creados por los administradores aparecerán en los formularios de búsqueda, pero debido a que estos tipos de habitaciones son específicos de propiedades individuales, solo se mostrará una propiedad en los resultados de búsqueda si se selecciona ese tipo de habitación durante las búsquedas. Si desea que solo los administradores de propiedades superiores puedan crear tipos de habitaciones, deje esta opción configurada en Sí y use el complemento de control de acceso para permitir que solo los administradores superiores vean la opción de menú "Configuración> Tipos de habitaciones". Solo las propiedades que alquilan Las habitaciones de la propiedad y el uso de los modos de edición de tarifas Avanzado o Micromanage pueden usar esta opción. Las propiedades de tipo villa / apartamento no podrán usarlo. ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tipo de habitación / propiedad actualizado');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Mostrar tipos de habitaciones en las opciones de búsqueda');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Si eliges permitir que los administradores de propiedades creen sus propios tipos de habitación, puedes elegir si mostrar o no esos tipos de habitación creados en las opciones de búsqueda donde has elegido mostrar los tipos de habitación.');
jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "No debe volver a utilizar la misma dirección de correo electrónico para cada reserva. <br/> Si tiene un dominio único (por ejemplo, no una dirección de correo electrónico de Gmail) para su empresa, utilice el número de teléfono del huésped como su dirección de correo electrónico. La dirección de correo electrónico se vería como 123456@midominio.com <br/> Esto garantizará que se cree un nuevo huésped cuando cree una reserva. ");

jr_define('_JOMRES_LOGIN_USERNAME', 'Dirección de correo electrónico');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Contraseña');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Estamos encantados de que quieras volver a reservar con nosotros. Para poder gestionar todas tus reservas juntas, es necesario que inicies sesión para que la reserva se pueda añadir a tu cuenta. Esto también garantiza que está autorizado a utilizar la dirección de correo electrónico proporcionada. ");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Si no conoce su contraseña, podemos enviarle un correo electrónico para restablecer la contraseña. Siga las instrucciones en ese correo electrónico para restablecer su contraseña.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', '¿Olvidó su contraseña?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', '¿Anonimizar su nombre?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Si elige anonimizar su nombre al revisar, usaremos sus iniciales en su lugar.');
jr_define('ANÓNIMO', 'Anónimo');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'dijo');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Responder a esta reseña');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Escriba su respuesta a esta reseña aquí.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Tu respuesta');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Revisión principal');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Respuesta de revisión guardada');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Antes de enviar una respuesta de revisión, debe leer lo siguiente. Al enviar una respuesta, confirma que acepta estos términos y condiciones.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', '¿Cuáles son nuestras pautas para una respuesta a una reseña?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Estás respondiendo a la revisión de tu propiedad. No debes </em> usar tu respuesta como un proceso de disputa comercial. Si necesitas informar una revisión, debes usar el "Informe Revisar "botón en la lista, y no esta página de respuesta de revisión. ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Una vez que haya dejado su respuesta no podrá editarla.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Permitido y animado');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Una respuesta completa a la reseña. </li>
    <li> Cortesía y honestidad. </li>
    <li> Respuestas sensatas a los problemas del revisor (recuerde, es posible que otros tengan problemas similares pero no aprovecharon la oportunidad para publicar una reseña). </li>
    <li> Anime al invitado a que se ponga en contacto con usted directamente para resolver problemas.
    <li> Recuerde siempre que los futuros huéspedes verán su respuesta. Asegúrese de ser profesional en todo momento. </li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'No permitido');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Disputas comerciales. </li>
    <li> Preguntas para el revisor u otras personas. </li>
    <li> Lenguaje cuestionable (incluidas las malas palabras). </li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Última ejecución');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Programación');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Números de factura');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', '¿Usar números de factura personalizados?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Puede configurar el sistema para usar números de factura personalizados. Solo se verán afectadas las facturas nuevas.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Número de inicio');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Los números se crean consecutivamente. ¿Cuál debería ser el primer número?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', '¿Qué formato debe tomar el número de factura?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure el formato del número de factura aquí. Un formato puede verse como {N} / {D} o {N} / {Y} donde N es el número generado automáticamente, D = fecha en el formato AAAAMMDD ( 20190131) o Y = YYYY (2019). Cualquier otro carácter alfanumérico que no esté entre llaves se dejará solo, por lo que un patrón que se parezca a {N} / {D} -L resultaría en un número de factura (21) que parece algo así como 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Recargo');
jr_define('_JOMRES_SURCHARGE_DESC', 'Un cargo adicional que se agregará a la habitación cuando se reserve (calculado por día)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');

jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', '¿Dar prioridad a las etiquetas de todo el sitio?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'El texto personalizado guardado en la edición de etiquetas o las páginas de cadenas de archivos de traducción de idioma se consideran etiquetas "en todo el sitio". Los administradores de propiedades también pueden personalizar las etiquetas para cada propiedad mediante la función de edición de etiquetas en la interfaz. Esto permite un administrador de la propiedad para tener diferentes textos para su propiedad, lo cual es útil si la propiedad es diferente a todas las demás propiedades en el sitio. <br/> Cuando el sistema busca textos de etiquetas, priorizará los textos de todo el sitio sobre la propiedad textos específicos, lo que significa que si existe un texto en todo el sitio para esa etiqueta, el sistema lo elegirá primero. Si configura esta opción en No, el sistema priorizará los textos específicos de la propiedad sobre los textos en todo el sitio. ');

jr_define('_JOMRES_REFERRER', 'Referente');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Esto podría cambiarse si se incluye en la lista blanca, por lo que el sitio "El mejor sitio de reservas del mundo" cambiaría esto a "WBBS" o similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Paquetes de biblioteca');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor y Node Modules son paquetes separados (gratuitos) para Jomres. Puedes reinstalar los paquetes en esta página.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Reinstalar paquetes de biblioteca');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'No se puede eliminar el tipo de propiedad porque algunas propiedades aún lo utilizan. Primero debe cambiar estas propiedades a otro tipo de propiedad antes de intentar eliminar esta. UID de propiedad que evitan la eliminación:');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'No se puede anular la publicación del tipo de propiedad porque algunas propiedades aún lo utilizan. Primero debe cambiar estas propiedades a otro tipo de propiedad antes de intentar anular la publicación. UID de propiedad que impiden el cambio:');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Direcciones de correo electrónico aleatorias');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Ofrecer correos electrónicos aleatorios');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Puede permitir que el sistema genere direcciones de correo electrónico aleatorias en la ventana emergente Reserva rápida en el panel de control. Esto permite a los gerentes y recepcionistas crear reservas para huéspedes para los que no tienen direcciones de correo electrónico y está previsto que funcione. como un ahorro de tiempo para sitios con muchos recepcionistas / gerentes que entienden que estos correos electrónicos aleatorios nunca se utilizarán para una comunicación real, el propósito es evitar el hecho de que en Jomres todos los invitados deben tener direcciones de correo electrónico. También DEBE proporcionar un dominio en el siguiente campo. ');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Dominio de correos electrónicos aleatorios');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Este no debería ser un dominio de correo electrónico normal, como gmail o outlook. En su lugar, puede ser su propio dominio o algo completamente distinto, como "misitio.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Área de carga');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Sin rol de usuario');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepcionista');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Administrador de propiedades');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Administrador de propiedades');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspendido');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Eliminado de CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Si le gusta Jomres, considere dejar una reseña en uno de estos sitios');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Soy una buena persona, ya he dejado una reseña');

jr_define('_LICENCE_PROMPT_DEAR', 'Estimado');
jr_define('_LICENCE_EXPIRED', ', su clave de licencia de Jomres ha caducado, por lo que se está perdiendo estas fantásticas funciones y beneficios!');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Actualizaciones de complementos y nuevas versiones de complementos');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Solo miembros exclusivos Soporte de correo electrónico / tickets');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Actualizaciones de Jomres Core sin preocupaciones');
jr_define('_LICENCE_EXPIRED_POST', 'Conéctese con nosotros para obtener soluciones de pago sin problemas y obtenga acceso a todos los complementos y servicios de soporte solo para miembros');
jr_define('_LICENCE_EXPIRED_RESTART', '¡Obtén acceso a todos los complementos ahora!');

jr_define('_LICENCE_INVALID_KEY', 'Desafortunadamente, parece que no está utilizando una clave de licencia válida de Jomres, por lo que se está perdiendo de estas fantásticas funciones y beneficios');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Complementos </a> que amplían enormemente la funcionalidad de Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Solo miembros exclusivos Soporte de correo electrónico / tickets');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Actualizaciones de Jomres Core sin preocupaciones');
jr_define('_LICENCE_INVALID_POST', 'Conéctese con nosotros para obtener soluciones de pago sin problemas y obtenga acceso a todos los complementos y servicios de soporte solo para miembros');
jr_define('_LICENCE_INVALID_START', '¡Obtenga acceso a todos los complementos ahora!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Panel de control');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Usuarios');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Comisión');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Suscripciones');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Facturas');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Traducciones');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Herramientas');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Informes');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Configuración');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Ayuda');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total de propiedades en el sistema');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Propiedades publicadas');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Propiedades no publicadas');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Propiedades aprobadas');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Propiedades que requieren aprobación');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total de revisiones');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Reseñas no publicadas');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Revisar informes');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Información del sistema Jomres');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "El tipo de propiedad de esta propiedad no está publicado, puede que no aparezca en los resultados de búsqueda. Comuníquese con el administrador del sitio para publicar el tipo de propiedad o cambie el tipo de propiedad en la página Editar propiedad.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Actualice su tipo de propiedad');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Ingresos (importes pagados)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'No se puede eliminar la característica de propiedad "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"porque lo utilizan las siguientes propiedades:');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Prueba de API REST');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Esta página realiza una prueba básica de la API REST utilizando la funcionalidad incorporada en Jomres. Llama a la API REST de Jomres para ver si recibe una respuesta válida.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'El servidor llamó a esta URL para ver si la respuesta es válida:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'La página recibió esta respuesta:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'La prueba pareció funcionar como se esperaba, probablemente no tendrá ningún problema para recibir solicitudes de API REST del resto de Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'La prueba falló, mire en el campo Respuesta, si parece mucho HTML, o si recibió un mensaje 404, entonces su servidor está redirigiendo las llamadas a otra URL. Esto evitará que reciba API llamadas. ');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Prueba de distribución');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'El servidor de la aplicación Jomres mantiene una lista de todos los sitios de Jomres. especialmente para sitios nuevos, para construir una presencia SEO en la Red. El objetivo es que todos los sitios de Jomres trabajen juntos, generando confianza en la red. No hay cargo por este servicio. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Tu sitio no se encuentra actualmente en el servidor de la aplicación Jomres, que es parte de la red de distribución. Este servidor intentará agregar este servidor a la red en las siguientes 6 páginas si se carga. pocas cargas de página, esto no cambia, verifique que la prueba de conectividad anterior pase las pruebas. Tenga en cuenta que los servidores localhost no se pueden agregar a la red. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Felicitaciones, su servidor está listado en el servidor de la aplicación Jomres.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Propiedades sindicadas');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Aquí hay algunas otras propiedades disponibles en nuestra red de propiedades');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Estadísticas de distribución');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Enhorabuena, su servidor está incluido en Jomres Syndication Network. Sus propiedades comenzarán a aparecer en otros sitios de Jomres pronto, si aún no se muestran.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Su instalación no es parte de Jomres Syndication Network, por lo tanto, sus propiedades no se muestran en otros sitios basados ​​en Jomres y no puede beneficiarse de esta publicidad gratuita.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Instalaciones activas de Jomres:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'El número total de instalaciones de Jomres que comparten las propiedades de la Red de distribución de Jomres en sus sitios.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total de propiedades:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Este es el número de propiedades disponibles en el JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property muestra:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'En total, todas las veces se ha vinculado una propiedad de Jomres desde otro sitio basado en Jomres.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) es una función gratuita disponible para todos los usuarios de Jomres. Su propósito es proporcionarle publicidad gratuita de sus propiedades en otros sitios basados ​​en Jomres. El objetivo es ayudar usted consigue que su sitio despegue rápidamente, ofreciendo publicidad gratuita para que sus propiedades sean reconocidas y confiables porque están vinculadas a sitios web de alta confianza y relevancia que ya son bien conocidos por los motores de búsqueda. Vea esto <a href = "https://www.jomres.net/features/jomres-syndication-network" target ="_blank"> artículo en nuestro sitio web </a> y <a href ="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank"> el manual </a> para obtener más información. ');


jr_define('GUEST_PROFILE_INFORMATION', 'Estos son los datos de su perfil de invitado, campos con este símbolo <i class = "fa fa-users" aria-hidden = "true"> </i>
 son públicamente visibles, mientras que los campos con este símbolo <i class = "fa fa-user-secret" aria-hidden = "true"> </i> solo pueden ser vistos por usted, sus anfitriones y los administradores del sitio. <br/> <br/> Los anfitriones solo pueden ver información privada si ya ha creado una reserva con ellos. <br/> <br/> Su información está cifrada de forma segura y almacenada en nuestra base de datos utilizando cifrado AES-256. ');

jr_define('GUEST_PROFILE_OPTIONAL', 'Estos campos son opcionales, sin embargo, los hosts pueden usar la información aquí para determinar si sienten que pueden confiar en usted, por lo tanto, es mejor agregar la información. Recuerde, está pidiendo permanecer en su propiedad, y pueden rechazarlo si sienten que no encaja bien o que su biografía no contiene suficiente información. ');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Permiso de conducir');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Número de pasaporte');
jr_define('GUEST_PROFILE_IBAN', 'Número IBAN');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Acerca de mí');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Esta sección "Acerca de mí" se puede ver públicamente, así que no ingrese ninguna información privada. Dicho esto, haga un esfuerzo por poner todo lo que se sienta cómodo para compartir, como sus pasiones, lo que para ganarte la vida, tus pasatiempos, etc. Puedes usar Markup para darle un toque de jazz. Los anfitriones querrán sentir que pueden confiar en ti con sus propiedades. Asegúrate de que tu imagen sea una imagen real de ti, no de tu perro o coche (sí, chicos, ¡estamos hablando con ustedes!). ');

jr_define('GUEST_PROFILE_PREFERENCES', 'Ingrese aquí cualquier requisito especial que pueda tener, como las necesidades de facilidad de acceso. No se mostrarán en su perfil público, pero se agregarán a la información de la reserva cuando realice una reserva.');

jr_define('VIEW_HOST_PROFILE', 'Perfil del host');

jr_define('GUEST_PROFILE_TITLE', 'Perfil de invitado');
jr_define('GUEST_PROFILE_TITLE_MY', 'Mi perfil');

jr_define('GUEST_PROFILE_WELCOME', 'Hola, déjame contarte un poco sobre mí');
jr_define('GUEST_PROFILE_MY_NAME', 'Mi nombre es');
jr_define('GUEST_PROFILE_I_COME_FROM', 'y yo vengo del');
jr_define('GUEST_PROFILE_IN', 'región en');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Mi información privada');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Hacemos nuestro mejor esfuerzo para validar la información del huésped y del anfitrión, sin embargo, debe hacer su propia diligencia y decidir por sí mismo si esta persona es de confianza o no.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Mis propiedades');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Mis reseñas');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Esto es lo que dije sobre esta propiedad:');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Le di a esta propiedad una puntuación de:');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Mis reseñas');
jr_define('GUEST_PROFILE_OF_ME', 'Lo que otras personas dicen de mí');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Lo que este anfitrión dijo sobre mí');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Revisar invitado');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Mi reseña de este invitado');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Aquí hay algunos ejemplos de comentarios de huéspedes para que empiece a rodar la pelota: <br/>

<ul>
<li> (nombre de los invitados) fue un placer ser el anfitrión. Dejaron el espacio limpio y en silencio durante todo el fin de semana. ¡Tuvieron una comunicación fluida y espero que se queden conmigo nuevamente! </li>
    <li> Me encantó tener a (nombre del invitado) porque pudieron tratar el lugar con respeto, pasar un buen rato y disfrutar de la zona. Fueron geniales alquilando el espacio y espero poder alojarlos nuevamente. </li>
    <li> Todas las reglas de mi casa se respetaron con (nombre del invitado) y pudieron entrar y salir con facilidad. Me encantó tenerlos allí porque eran respetuosos y tranquilos. ¡Se los recomiendo a otros! </li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Lo siento, no puedo encontrar a ese usuario. Lo más probable es que aún no hayan completado los detalles de su cuenta');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Invitado');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Anfitrión');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres está construido en el marco Bootstrap, por lo que debe usarlo en un tema basado en Bootstrap. Recomendamos uno basado en Bootstrap 3. Si no tiene acceso a un tema, le recomendamos que use el tema de Jomres Leohtian para Wordpress que puede <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneo-downloads/11-leohtian-for-wordpress" target ="_blank"> descargar desde aquí. </a> ');


jr_define('BOOKING_NOSHOW_MENU', 'Marcar como No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Reserva marcada como No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Reservas');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No se presenta');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Estadísticas JSN para este usuario');

jr_define('BOOKING_NOSHOW_INFO', 'La información de reservas y no presentarse se extrae de Jomres Syndicate Network en el momento de la reserva. Se toma de datos anónimos y puede ser utilizado por usted para decidir si este huésped corre el riesgo de no cumplir con la reserva. Si el sistema informa que los datos son desconocidos, probablemente se deba a que este sistema no es reconocido en la red. ');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Desconocido');

jr_define('CMF_CONFIG_TITLE', 'Marco de gestión de canales');
jr_define('CMF_CONFIG_KEY', 'Clave del marco de gestión de canales');
jr_define('CMF_CONFIG_KEY_DESC', 'La clave de licencia de Channel Management Framework. Deberá proporcionar esta clave para poder descargar los complementos de Channel Management Framework.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Su propiedad no ha sido aprobada');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Su propiedad no ha sido aprobada. Si cree que esto se hizo por error, comuníquese con nosotros.");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "¿Es este un tipo de invitado Niño?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Establezca esto en Sí si este tipo de invitado se clasificaría como un tipo de invitado Niño");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Si desea cobrar por persona por noche, deberá crear algunos tipos de invitados");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Puede crear tantos tipos de invitados como necesite, intente comenzar creando solo un tipo de invitado llamado 'Adulto'. Deje todas las configuraciones en sus valores predeterminados. A continuación, si, por ejemplo, desea Dar a los niños menores de 12 años un descuento del 50% crearía un nuevo tipo de huésped y lo llamaría \"Niños menores de 12 años\". Establezca la opción \"¿Agregar variación?\" en - (negativo) y establezca la \"Variación\" en 50. Esto significa cuando se agregan niños a una reserva, se les cobra el 50% del costo de la habitación. ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Fijar precios manualmente");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Establecer noches mínimas manualmente");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Establecer noches mínimas");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Establecer <em> precio por noche </em> por día de la semana");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Establecer <em> precio por noche </em> por rango de fechas");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Establecer <em> noches mínimas </em> por rango de fechas");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Los selectores de fechas y la entrada de tarifas le permiten establecer un precio para un rango de fechas determinado. Elija una fecha de inicio y finalización, ingrese un precio y haga clic en el botón Establecer precio por noche");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Los selectores de fechas y la entrada de noches mínimas le permiten establecer un valor para las noches mínimas para un rango de fechas determinado. Elija una fecha de inicio y finalización, ingrese un número para las noches mínimas y haga clic en 'Establecer noches mínimas '. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Use este menú desplegable para cambiar entre la configuración de precios para fechas individuales y la configuración de noches mínimas para fechas individuales. Puede usar el selector <em> por día de la semana </em>, el <em> por fecha selector de rango </em> o establezca los precios / noches mínimas editando manualmente las fechas. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Use este menú desplegable para cambiar entre la configuración de precios para fechas individuales o para establecer noches mínimas para fechas individuales. Puede usar el selector <em> por rango de fechas </em> o establecer los precios / noches mínimas por editar manualmente las fechas. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Fijar precios o noches mínimas");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Establecer <em> noches mínimas </em> por día de la semana");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Los campos del día de la semana le permiten establecer un número mínimo de noches para un día de la semana determinado, una vez que haga clic en el botón del día de la semana, todos los días de la semana se establecerán en esa configuración mínima de noches. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Fijar precios manualmente / noches mínimas");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Fijar precios");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Establecer noches mínimas");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Por noche");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Noches mínimas");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Noches máximas");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Aquí puedes crear tus tarifas, las cuales están asociadas a los tipos de habitación que tienes en tu propiedad.");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Opciones más utilizadas");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instrucciones");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Si desea agregar diferentes precios para diferentes números de huéspedes, entonces <em> puede crear más de varias tarifas para cada tipo de habitación </em> y tener diferentes valores mínimos / máximos de huéspedes en esas tarifas. ");

jr_define('_JOMRES_MICROMANAGE_INFO', "Asigne un nombre a la tarifa, defina el número máximo de noches y el número mínimo y máximo de huéspedes que se requieren en el formulario de reserva antes de ofrecer la tarifa. <br/> <br/> Uso el panel selector de fechas para agregar precios y configuraciones de noches mínimas a un rango de fechas, o editar las entradas directamente. Si no desea que se ofrezca la tarifa en ciertas fechas, deje el precio establecido en 0 (cero) el esas fechas. <br/> <br/> Puede tener diferentes noches mínimas en diferentes fechas, por lo que si desea reservas más largas durante las semanas de festivales / conferencias, puede configurar las noches mínimas para que sean más altas solo en esos períodos. <br / > <br/> Si cobra por persona por tarifa (PPPN), puede habilitar esa configuración en Configuración> Configuración de la propiedad> pestaña Tarifas y moneda, luego cree los tipos de huéspedes que necesite en Configuración> Tipos de invitados. ");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Opciones extra");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Estas son opciones adicionales que no se utilizan con tanta frecuencia, pero que, sin embargo, están disponibles para usted. <br/> <strong> Ignorar PPPN </strong> significa Ignorar por persona y noche. Puede tener varias tarifas diferentes para el mismo tipo de habitación, por ejemplo, una que cobra por persona por noche y otra que no. <br/> <strong> Permitir fines de semana </strong> La opción Permitir fines de semana te da la opción de hacer una tarifa que solo disponible durante los días de semana, por ejemplo, si desea una tarifa especial para viajeros de negocios. En ese caso, establecería la opción en No y las noches mínimas en 1 y las noches máximas, como máximo, 5. <br/> <strong> Fines de semana solo </strong> La opción Solo fines de semana es la inversa de la opción Permitir fines de semana. Lo que considera que son días de fin de semana se pueden configurar en la configuración de la propiedad. Esto le brinda la posibilidad de definir una tarifa solo de fin de semana que tal vez desee oferta para eventos especiales. <br/> <strong> Día de entrada de la semana </strong> Esta opción le brinda la posibilidad de forzar el registro para que solo se realice en ciertos días de la semana y se usa mejor junto con la Configuración de la propiedad> pestaña Reservas> Opciones de períodos fijos. La mayoría de los usuarios querrán dejar esta opción configurada en Todos. <br/> Las dos últimas opciones, <strong> Habitaciones mínimas ya seleccionadas </strong> y <strong> Habitaciones máximas ya seleccionadas </strong> son muy especializadas y útil para propiedades con tarifas extremadamente complicadas. <em> A menos que tenga una necesidad específica, debe dejar estas opciones. </em> Utilícelas si solo desea que se ofrezca esta tarifa cuando el huésped ya haya seleccionado N número de habitaciones en el formulario de reserva, por ejemplo podría tener una tarifa básica donde esas opciones se dejan en el valor predeterminado, y una segunda tarifa donde la opción de habitaciones mínimas ya seleccionadas se establece en 1, luego esta segunda tarifa se ofrecerá en el formulario de reserva una vez que se haya seleccionado una habitación ");
jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Puede crear varias tarifas para el mismo tipo de habitación, por lo que puede crear una tarifa para días mínimos / máximos de 1 a 7 y una segunda tarifa donde los días mínimos son 7, los días máximos 14 y así sucesivamente. Esto le permite crear esquemas de precios tan simples o tan complicados como necesite. También le permite crear múltiples tarifas con diferentes condiciones, para que pueda tener un segundo conjunto de tarifas donde el precio es más bajo para Bed & Breakfast, y otro conjunto de tarifas más caras para alojamiento, desayuno y cena ");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Establecer solo los días del selector de fecha");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Categorías de propiedad');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Editar categoría de propiedad');
jr_define('_JOMRES_STOP_READTHISFIRST1', "¡Alto!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Gracias por instalar Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "La administración de la propiedad se realiza en las páginas públicas, no en el área del administrador.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Si no está familiarizado con Jomres, visite la sección Ayuda> página de Inicio");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Únete al Sindicato de Jomres");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Una vez que haya configurado su sitio y esté listo para comenzar a recibir visitantes, únase al sindicato de Jomres.net y obtenga sus propiedades listadas en otros sitios de Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Necesitas al menos una habitación de uno de los siguientes tipos antes de poder crear una tarifa:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Vaya a Configuración> Habitaciones y cree una habitación primero, una vez que lo haya hecho, podrá crear una tarifa para ese tipo de habitación.");

jr_define('JOMRES_PLATFORM', "Plataforma Jomres");


jr_define('JOMRES_PLATFORM_CONNECTED', "Conectado");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Establezca esto en Sí si ya ha conectado su cuenta de Stripe con la Plataforma Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Número de cuenta de Stripe Live");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Este es el ID de su cuenta de Stripe que se puede encontrar en su Panel de control de Stripe en Configuración> Información de cuenta y se ve como acct_xxxxxxxxx) .Utilizaría este campo si tiene varias instalaciones de Jomres y desea usar la misma cuenta en todos los sitios y ya se ha conectado a nosotros. Si no se ha conectado a la Plataforma Jomres, no es suficiente con ingresar sus datos aquí. En su lugar, visite la opción de menú Conéctese en la barra de herramientas, en la sección Ayuda. Si lo desea para probar los pagos, en la pestaña Depuración de Configuración del sitio, configure su sitio de Producción a Desarrollo. ");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Clave secreta activa de Stripe");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Vaya a Desarrolladores> Claves API en su Panel de control de Stripe para encontrar sus claves secretas. El sistema las usa para verificar que los datos de reserva devueltos desde el formulario de pago sean válidos y que los depósitos se hayan pagado antes de guardar la reserva . ');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Stripe test secret key");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', ' ');


jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Modo de tarifa estándar');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Duerme');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', '¿Cuántas personas puede alojar esta propiedad?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'El número de invitados en su precio diario');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Precio adulto adicional');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Niños');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', '¿Por persona por noche?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'Modificador de 7 días');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Descuento en la tarifa diaria si la reserva es de 7 días o más. Deje este ajuste en cero si no desea que se aplique el descuento.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'Modificador de 30 días');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Descuento en la tarifa diaria si la reserva es de 30 días o más. Deje este valor en cero si no desea que se aplique el descuento.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adultos');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Precio basado en 2 adultos');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Reserva descontada desde');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'a');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'porque la reserva es mayor a 7 días.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'porque la reserva es superior a 30 días.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Impuestos municipales');
jr_define('JOMRES_CITY_TAX_VALUE', 'Valor del impuesto municipal');
jr_define('JOMRES_CITY_TAX_METHOD', 'Método de cálculo de impuestos');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Tarifa única');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Por noche');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Por invitado');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Por huésped por noche');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Porcentaje del valor de la reserva');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Tarifa de limpieza');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Costo de la tarifa de limpieza');


jr_define('JOMRES_COMPATABILITY_MODE', '¿Forzar modo de configuración de propiedad de compatibilidad?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "El modo de configuración de propiedad de compatibilidad obliga a que sucedan varias cosas. En versiones anteriores de Jomres, los administradores de propiedades podían elegir qué modo de edición de tarifas usar, y una variedad de otras configuraciones (algunas de las cuales pueden parecer confusas) pueden tener Habilitar la configuración de compatibilidad obliga a todas las propiedades nuevas a usar solo el modo de edición de tarifas estándar, que modela la funcionalidad de configuración de la propiedad de booking.com con respecto a los precios, precios para niños, etc. .0, esta opción debe establecerse en Sí, pero para instalaciones más antiguas depende de usted decidir si las nuevas propiedades deben establecerse automáticamente en el modo de compatibilidad cuando se crean. ");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', '¿Aceptan niños menores de 18 años?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Establezca esta opción en Sí si permite niños. Si es así, en el menú Configuración tendrá una opción llamada Políticas para niños donde puede editar configuraciones relacionadas con niños.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Políticas secundarias');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', '¿A qué edades se permiten los niños?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Por niño, por noche');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Por niño, por estadía');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Tarifas para niños');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nueva tarifa para niños');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Editar tarifa secundaria');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Cree aquí sus tarifas para niños gratuitas o pagadas. Las tarifas solo se aplicarán cuando haya creado niveles de ocupación para los tipos de habitación.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Edad desde');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Edad hasta');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', '¿por noche o por estancia?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Tarifa');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Si es cero o no, los niños de este rango de edad serán gratis.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Edades al registrarse');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Edades');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Niveles de ocupación');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Máximo de adultos');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Máximo de niños');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Ocupación máxima');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Editar nivel de ocupación para:');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edite los niveles de ocupación para este tipo de habitación. No incluya a los huéspedes que duerman en cunas (se agregan mediante la creación de un extra)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Por cada adulto adicional, ¿cuánto se les debe cobrar?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Adultos adicionales');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Aún no ha configurado las tarifas para niños.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Establecer tarifas de niños ahora');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Ha configurado su propiedad para permitir niños pero aún no ha establecido ningún nivel de ocupación para niños.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Establecer niveles de ocupación');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Cada vez que edite una habitación o su tipo de propiedad, debe verificar y actualizar los niveles de ocupación de su propiedad / habitaciones, ya que estos afectan la cantidad de huéspedes que pueden ser aceptados en el formulario de reserva');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adultos');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Niños');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Nivel de opciones de administrador');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres tiene muchas opciones de menú y configuración que puede usar al configurar su sitio. La gran mayoría de ellas nunca tendrá que cambiarlas, por lo que están ocultas por defecto. Puede elegir mostrar esas opciones configurando el nivel de Opciones de administrador. El nivel básico le muestra justo lo que necesita al configurar un sitio por primera vez. El nivel común le muestra las opciones que se modifican con mayor frecuencia, y Todo le muestra todas las opciones de configuración y menús posibles en el área de administrador. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Básico');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Común');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Todo');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', '¿Podemos recopilar información sobre cómo usa Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Nos gustaría recopilar información sobre cómo usa Jomres. No se almacenará información de identificación personal, el uso se anonimizará y solo se utilizará para ayudarnos a comprender cómo las personas usan Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Sí, eso está bien');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'No, no estoy de acuerdo');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', '¿Aceptará reservas para más de una propiedad?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres se puede utilizar para sitios de una o varias propiedades. Si va a realizar reservas para una sola propiedad, muchas opciones serán redundantes y potencialmente confusas. Puede cambiar esta configuración más adelante en Configuración> Sitio Configuración> pestaña de funcionalidad del portal. ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Solo una propiedad');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Enumeraré más de una propiedad');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "¿Qué versión del marco Bootstrap admite su plantilla / tema?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Cada versión del marco de Bootstrap requiere un marcado html ligeramente diferente. Jomres tiene tres conjuntos de conjuntos de plantillas compatibles con Bootstrap, uno para cada versión de Bootstrap. Debe asegurarse de configurarlo para usar el conjunto de plantillas apropiado. Si si no lo hace, los resultados como el diseño, los modales y los menús no funcionarán correctamente. Si decide usar una plantilla / tema más adelante con una versión diferente de Bootstrap, puede cambiar el conjunto de plantillas de Bootstrap que Jomres debe usar en Admin> Jomres> Configuración > Pestaña Misc. <br/> <br/> Joomla 3 se distribuye con Bootstrap 2 por defecto, Joomla 4 usará Bootstrap 5. La plantilla Jomres Leohtian (Joomla) y el tema (Wordpress) usan Bootstrap 3. Se pueden utilizar diferentes plantillas / temas. distribuidos con sus propios archivos Bootstrap, por lo que si tiene alguna duda, comuníquese con el desarrollador de su plantilla / tema. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', '¿Eliminar decimales de los precios de producción?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', '¿Aplicar grupo por arreglo?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Algunas instalaciones de mysql pueden tener un problema con las consultas de Jomres en la página Propiedades de lista, Lista de invitados y Lista de facturas. Si esas páginas dicen que están mostrando X de Y resultados pero no aparece nada en la lista, entonces configure esta opción a Sí puede solucionar el problema. No lo hará si está en un alojamiento compartido y el servicio de alojamiento no permite que su usuario de mysql emita el comando "SET GLOBAL sql_mode =". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Esta es una propiedad de canal, no se puede administrar localmente, visite la página del marco de gestión de canales para encontrar el enlace de administración remota de la propiedad');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Sin Bootstrap en el tema");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Enlaces a redes sociales');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Pon los nombres de tus cuentas de redes sociales aquí, por ejemplo, "jomres", no la URL completa');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Lista separada por comas de los idiomas que habla su organización');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Url al logotipo de su organización');
jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres actualizado');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Hay una nueva versión de Jomres disponible. Debe actualizar antes de poder continuar usando Jomres ya que las actualizaciones mejoran la funcionalidad y garantizan que su instalación permanezca segura.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Actualiza Jomres ahora');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Actualizaciones de complementos');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Hay nuevas versiones de complementos disponibles en el administrador de complementos. Debes actualizar todos los complementos antes de poder continuar usando Jomres, ya que las actualizaciones mejoran la funcionalidad y aseguran que tu instalación sea segura.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Complementos para actualizar');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Si su licencia ya no es válida, puede obtener una nueva clave de licencia en nuestro sitio web.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Actualizar complementos');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Obtener nueva clave');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Guardar nueva clave');

jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS', "Mostrar filtros");
jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS', "Ocultar filtros");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Imágenes de tipo de propiedad");

jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "¿Necesita ayuda para reservar?");
jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Llame a nuestro equipo de atención al cliente al número que aparece a continuación para hablar con uno de nuestros representantes que lo ayudará con todas sus necesidades navideñas.");

jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "¿Por qué reservar con nosotros?");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Ofrecemos las mejores tarifas de reserva");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Tenemos las propiedades con los mejores precios actualmente en el mercado.");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Sin gastos de reserva. ¡Ahorra dinero!");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Gran selección de propiedades");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " propiedades");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " reseñas de invitados");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Siempre estamos aquí");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Llámenos o envíenos un correo electrónico, en cualquier momento");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Obtenga soporte las 24 horas antes, durante y después de su viaje");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Redes sociales");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Encuéntrenos en las redes sociales");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Sobresaliente");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Excepcional");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Fabuloso");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Excelente");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantástico");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Muy bien");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "Bien");

jr_define('JOMRES_REVIEWS_NONE_NEW', "Nueva lista");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Con descuento");
jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', '¿A dónde quieres ir?');
jr_define('DATA_SOURCES_TITLE', "Actualizar fuentes de datos");
jr_define('DATA_SOURCES_TITLE_INFO', "Fuentes de datos actualizadas. Las fuentes de datos son utilizadas por los campos de entrada de autocompletar en el widget de búsqueda y generalmente se actualizan automáticamente, sin embargo, esta página obliga a que los datos se actualicen manualmente si es necesario");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Para enviar una solicitud de token, envíe la solicitud a esta URL");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "El script de propiedad de la vista principal");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "El uid de propiedad de la propiedad que se va a ver");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "La plantilla predeterminada es property_details.html, con este argumento puede definir una plantilla de detalles de propiedad diferente para mostrar.");

	jr_define('JOMRES_UPDATES_TITLE', 'Actualizaciones de Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Esta página puede descargar e instalar la versión más reciente de Jomres por usted. Utiliza su propia funcionalidad y no la del CMS host, por lo tanto, si ocurre un problema durante la actualización del CMS host, puede usar esta página para forzar una reinstalación de la versión más reciente de Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Los administradores de propiedades pueden usar el modo de edición en la interfaz para personalizar cadenas para cada propiedad, sin embargo, esto solo puede funcionar si su configuración de enlace permanente de WordPress está configurada en Normal (http://www.domain.com/? p = 123). Una vez que haya hecho eso, los usuarios de la interfaz podrán personalizar cadenas, como nombres de habitaciones y otras etiquetas, que son específicas de propiedades únicas. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Modo de edición de etiquetas');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Esta función se usa para cambiar las etiquetas de los elementos, generalmente a diferentes idiomas.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'El modo de edición le permite cambiar el nombre de etiquetas que son exclusivas de propiedades individuales. Cuando usa el modo de edición para cambiar el nombre de una etiqueta, el cambio solo aparecerá en la lista de esa propiedad. Por ejemplo, en una propiedad que desee para usar la palabra "Precios" y en otro la palabra "Tarifas". No todas las etiquetas se pueden cambiar, por ejemplo, los nombres de tipo de habitación son etiquetas para todo el sitio, por lo que no se pueden cambiar, pero generalmente cualquier cosa que sea única para una propiedad individual puede ser cambiado.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Si el sitio admite varios idiomas, al usar un idioma puede crear un elemento que sea único para una propiedad individual. Cuando cambie su idioma activo, puede usar el modo de edición para cambiar el nombre de esa etiqueta, ingresando una traducción adecuada en el idioma actual. Puede continuar cambiando el idioma activo para ingresar una traducción adecuada para esa etiqueta para cada idioma que admita el sitio.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Cambio de modo de edición de etiquetas');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'En esta captura de pantalla vemos el interruptor del modo de edición. El modo de edición está APAGADO y las etiquetas aparecen normalmente: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Modo de edición de etiquetas habilitado');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'En esta captura de pantalla vemos que, en el modo de edición, se resaltan las etiquetas que puede cambiar de nombre:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Seleccione el elemento a cambiar');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Cuando se selecciona una etiqueta, aparece una ventana emergente:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Cambiar la etiqueta');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Use el pequeño formulario para cambiar la etiqueta. Haga clic en la marca para terminar, o haga clic en la X para cancelar la edición:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Etiqueta cambiada');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Una vez que haya guardado el cambio, la etiqueta se actualizará en la página. Puede desactivar el modo de edición ahora:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Traducciones');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'En esta página puede traducir etiquetas de un idioma a otro. Cuando visite la página, verá cadenas que ya ha creado y su valor en cualquier idioma que esté usando actualmente. En la parte superior, configure el idioma de destino, luego, para las etiquetas que desea traducir, haga clic en la etiqueta y una ventana emergente le permitirá ingresar su nueva traducción. Para líneas de texto más largas, puede pegar el texto de otra fuente. Recuerde que cualquier HTML será eliminado .<br/>
Puede dejar el idioma de destino establecido en su idioma actual y usar esta página para cambiar el nombre de los elementos aquí, en lugar de visitar sus páginas individuales.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Idioma de destino');

	jr_define('API_CLIENTS_INFO', 'Los clientes de API son pares de claves de ID de cliente/secretas que permiten que los sistemas remotos usen funciones de API que usted les da permiso para usar. En esta página puede crear tantos pares de claves de cliente/secretas como necesite, cada uno con cualquier combinación de permisos que necesite.');
	jr_define('CLIENT_TOKEN', 'Token de acceso');
	jr_define('CLIENT_TOKEN_INFO', "Los tokens de acceso se pueden solicitar utilizando el ID y el secreto del Cliente. Es posible que algunos Clientes ya tengan un token de acceso creado para ellos, en cuyo caso puede usar este token de acceso. Si cree que el token puede haber sido comprometido, o simplemente desea cambiarlo, puede caducar los tokens del cliente. Todos los tokens asociados con el par cliente/secreto caducarán.");
	jr_define('DELETE_TOKEN', 'Caducar tokens');

	jr_define('JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Elija su moneda");
	jr_define('JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Elige tu idioma");
	jr_define('JOMRES_BS5_TOP_PANEL_REGISTER',"Registrarse");
	jr_define('JOMRES_BS5_TOP_PANEL_SIGN_IN', "Iniciar sesión");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Indique su propiedad");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Debe registrarse e iniciar sesión primero");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Mostrar filtros");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Ocultar filtros");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "El texto que se muestra en las páginas se almacena en archivos de idioma. El sistema Jomres de mostrar cadenas de idioma en la página significa que no necesita editar directamente estos archivos de idioma. En su lugar, puede editar esas cadenas en este página haciendo clic en el texto resaltado y colocando el nuevo texto que desea mostrar en el formulario de entrada que se abre. Cuando hace clic en la marca de verificación, ese cambio se guarda en la base de datos. Esto significa que todos sus cambios se almacenan y no se sobrescriben cuando actualiza Jomres. Si desea cambiar el texto para diferentes idiomas, use el menú desplegable de selección de idioma en la parte superior derecha para cambiar el idioma actual. Las cadenas de texto a veces se repiten en diferentes lugares en los archivos de idioma porque se usan en diferentes contextos, así que no olvide utilizar la función de búsqueda del navegador para asegurarse de haber editado la cadena correcta. ");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Toda la administración de propiedades se realiza en la interfaz de su sitio. Actualmente no ha iniciado sesión como administrador de propiedades, así que inicie sesión primero y luego podrá administrar sus propiedades.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Cuando Jomres se instala por primera vez, creará un Super Property Manager para el usuario administrador y agregará una nueva opción al menú principal llamada Reservas. No elimine este elemento del menú. Inicie sesión con el botón provisto y visite la página de Reservas para comenzar a administrar las propiedades. ");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'En esta página puede configurar a través de qué pasarelas de pago desea recibir pagos de depósitos. Necesitará una cuenta en la pasarela de pago. La página de configuración le proporcionará instrucciones sobre cómo configurar la pasarela. Si la puerta de enlace tiene un modo de prueba y si el modo de prueba está habilitado, usted, como administrador de la propiedad, podrá usar la pasarela de pago para probar su configuración. Cuando el modo de prueba está deshabilitado, solo los usuarios que no son administradores verán las pasarelas de pago durante el proceso de reserva .');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Modo de prueba");


	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "El modo de desarrollo está habilitado, por lo tanto, si usa esta función, actualizará su instalación de Jomres a la rama Nightly. Esta es la versión más reciente de Jomres y puede o no ser estable. Si lo hace no desea actualizar a Nightly, visite Admin > Jomres > Configuración > Configuración del sitio > pestaña Depuración y establezca la opción Producción/Desarrollo en Producción.");