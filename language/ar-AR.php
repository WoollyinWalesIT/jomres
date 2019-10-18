<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Gracias por hacer su reserva con nosotros. Esperamos que usted goce de su permanencia.<br><br> <b>Por favor, note que esto es sólo una  reserva preliminar, y no será confirmada hasta que usted reciba su email de confirmación por nuestra parte.</center>');
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
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center>Por favor entrar otra vez.');
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
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
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
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:');
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
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Estimado/a');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Gracias por registrarse ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Su nombre de usuario es : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Su contraseña es : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Por favor inicie sesión para ver su reservas ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupón guardado');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupón borrado');
// Not used yet
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
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
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
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Tenga en cuenta usted está utilizando el modo de edición con el modo global de edición habilitado. Esto está bien si usted sabe lo que significa el modo de edición global. Si no está seguro si debe utilizar Jomres de este modo, por favor, consulte <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">el modo de edición de página del manual</a> para obtener más información sobre este tema.');
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para fijar automáticamente en el desplegable de cambio de moneda, Jomres usa un servicio gratuito llamado IpinfoBB para detectar el país del visitante, no obstante debera obtener primero una clave API en: <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a>.');
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
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Bienvenido a Jomres, esperamos que disfrute usando el sistema de reservas favorito de Joomla. Si desea comprar licencias de Jomres Plata u Oro , <a href="http://www.jomres.net/prices" target="_blank"> Por favor, visite nuestara página</a> para obtener información sobre la mejora.');
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
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
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
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Pasajero ha hecho Chekout.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Disculpe, esta dirección de correo ya se encuentra en uso. Si es su dirección de correo, por favor asegurese de haber iniciado sesión para reservar.');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nuevo comentario para ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Se ha hecho un nuevo comentario para ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nuevo reporte');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Un comentario fue reportado para ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Total (Sin impuestos) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Total (Con impuestos) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'impuestos totales : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Escriba las dos palabras: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Escriba lo que escucha: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Reproduzca la pista de audio ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Descargue la pista de audio en formato mp3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Modo visual');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Modo audio');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Recargar');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Ayuda');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Disculpe, intente nuevamente.');
jr_define('JOMRES_GOOGLE_MAPS', 'Opciones de Google Maps');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Usar capa de Cliema?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Centígrados');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Usar capa de tránsito?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Habilitar GMaps Puntos de Interes (Incluyendo posiblemente tu competencia)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Escanea este código en tu Smartphone para saber cómo llegar.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Los detalles de la propiedad ingresados aquí serán usados en detalles de comisión y facturas de suscripción.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Parece que no has llenado los datos de tu cuenta todavía. Para publicar tu propiedad en el sitio, necesitamos que completes los detalles de tu cuenta.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Producción o Desarrollo?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Si colocas esta opción en Desarrollo, se habilitará el reporte de errores. De otra manera se dejará desactivado. Si esto es un servidor activo, recomendamos dejarlo en "producción".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Producción');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Desarrollo');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Detalles de la propiedad');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Detalle de tarifas');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'únicamente');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'quedan!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'característica de la propiedad');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Imposible eliminar esta carácteristica de la propiedad. Está asignada a una propiedad. Desasocie esta característica de la propiedad e intente nuevamente.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Centro Multimedia');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Añadir imágenes');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Imágenes de la propiedad');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Imágenes principales');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Imágenes de la galería');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Limpiar listado');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Arrastre y suelte imágenes aquí');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Elija la propiedad para la que quiere subir imágenes. En caso de que existan diferentes categorías para una misma propiedad, tendrá la opción de elegir. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Si usted sube varias imágenes como "Imágenes principales" solo la primera de ellas será usada.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Ver sus imágenes');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Borrar imágen');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Subir imágen');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Imágenes de tipo de habitación');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Imágenes de características de propiedad');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Subir todos los archivos');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');
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
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
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
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
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
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
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
jr_define('DATATABLES_SEMPTYTABLE', 'No data available in table');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('DATATABLES_SINFOEMPTY', 'Showing 0 to 0 of 0 entries');
jr_define('DATATABLES_SINFOFILTERED', '(filtered from _MAX_ total entries)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Show _MENU_ entries');
jr_define('DATATABLES_SLOADINGRECORDS', 'Loading...');
jr_define('DATATABLES_SPROCESSING', 'Processing...');
jr_define('DATATABLES_SSEARCH', 'Search:');
jr_define('DATATABLES_SZERORECORDS', 'No matching records found');
jr_define('DATATABLES_SFIRST', 'First');
jr_define('DATATABLES_SLAST', 'Last');
jr_define('DATATABLES_SNEXT', 'Next');
jr_define('DATATABLES_SPREVIOUS', 'Previous');
jr_define('DATATABLES_SSORTASCENDING', ': activate to sort column ascending');
jr_define('DATATABLES_SSORTDESCENDING', ': activate to sort column descending');
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
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
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

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Unable to unpublish property type because it is still be used by some properties. You must change these properties to another property type first before attempting to unpublish this one. Property UIDs that prevent the change : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');

