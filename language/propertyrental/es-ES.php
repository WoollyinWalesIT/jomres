<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
Spanish Translation by Vectorial, S.L.
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','Reservas rápidas');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Mostrar perfiles');
jr_define('_JOMRES_COM_MR_QUICK______DESC','IntencionadamenteDejado en blanco intencionadamente');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configuración general');
jr_define('_JOMRES_COM_MR_BACK','Atrás');
jr_define('_JOMRES_COM_MR_YES','Sí');
jr_define('_JOMRES_COM_MR_NO','No');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Nuevo');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Nueva propiedad');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nueva característica de la propiedad');
jr_define('_JOMRES_COM_MR_NEWGUEST','Huésped nuevo');
jr_define('_JOMRES_COM_MR_SAVE','Guardar');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nombre');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Fecha de llegada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Fecha de salida');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Blanco');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Asignar las funciones del Administrador');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','Identificación');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nombre');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Nombre del usuario');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Autorizado actual');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Propiedad predefinida');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Cambiar esto');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Nivel de acceso');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Usuario modificado');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','No está aplicado');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepción');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Administrador propietario');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Todas las reservas');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nuevas reservas (depósitos sin pagar)');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editar reservas: ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Llegadas/Salidas');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Huésped');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Habitación');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Pago');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Nombre');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Apellido');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Requisitos especiales');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Observe por favor que algunos requisitos especiales pueden incurrir en recargos.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Cancele la reserva');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','El número o nombre de la casa');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Calle');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ciudad');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Código  postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Número de teléfono');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Número móvil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Dirección electrónica');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','No puede cancelar esa reserva, porque el huésped confirmó la entrada');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Depósito no pagado');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Confirmar cancelación');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Reserva cancelada');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Días para llegar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Tipo de reserva');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Negro');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepción');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Nombre de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Número de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Piso');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Acceso denegado');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Máximo de clientes');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Tipo de habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Descripción de la habitación');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista de características de la habitación');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Depósito pagado');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Introducir depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total a pagar');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Ref. de Depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Número de Reserva');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Depósito');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Depósito salvado');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Habitaciones disponibles');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Propiedad');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Tipo de habitación');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Editar detalles de huésped');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Nombre');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Apellido');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Casa');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Calle');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Ciudad');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Código Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Teléfono');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Móvil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','No. de Tarjeta de Crédito');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Emisión de Tarjeta de Crédito');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Caducidad de Tarjeta de Crédito');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','No. emisión');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Titular de la Tarjeta de Crédito');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Seleccione una habitación');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Días de estancia');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Número de huespedes');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Vea habitaciones y configuración de las características');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Habitación');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Hb características');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Hb tipo');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Propiedades');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Prop. características');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Habitación');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Tipo');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nombre');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Número');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Piso');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Acceso denegado?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. de personas');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Características');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Habitación agregada');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Editar el artículo');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Hb características');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Descripción de la característica');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Característica del sitio agregada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Característica del sitio actualizada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Hb tipo');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Tipo abreviatura del sitio');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Descripción de tipo de la habitación');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Tipo de habitación agregada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Tipo de habitación actualizada');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Editar artículo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nombre');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Calle');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Ciudad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Región');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','País');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Codigo Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telf.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Características');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Propiedad agregada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Propiedad actualizada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Característica de la propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Característica de la propiedad abrev.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Descripción completa de característica de la propiedad ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Característica de la propiedad agregada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Característica de la propiedad actualizada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarifas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Título de tarifa');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Descripción');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Válido de');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Válido hasta');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Tarifa por noche');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Dias mínimos');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Dias máximos');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Personas mínimas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Personas máximas');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Tipo de la Hb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorar PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Permitir fines de semana');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarifa agregada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarifa actualizada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Editar artículo');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Copiar artículo idéntico');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarifa borrada');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Editar la tarifa');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Dias festivos');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Reserva guardada');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Reservar una habitación');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Entrada de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Salida de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Listar las reservas');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Listar las NUEVAS reservas');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','I N I C I O');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Administración de huésped');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Administración de propiedad');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Verifique la disponibilidad');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirme sus datos');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Nombre');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Apellido');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Número de la Casa');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Calle');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ciudad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Código Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Número de telefono');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Móvil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','No hay habitaciones disponibles capaces de satisfacer los parámetros especificados');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Gracias por hacer su reserva con nosotros. Esperamos que usted goce de su permanencia.<br><br> <b>Por favor, note que esto es sólo una  reserva preliminar, y no será confirmada hasta que usted reciba su email de confirmación por nuestra parte.</center>');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Reserva realizada para la propiedad: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Reserva del espacio: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Llegada: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Salida: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nombre: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Teléfono: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Móvil: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','El valor del contrato es: ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Entrada de huésped ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Seleccionar huésped ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Huésped entrada');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Ningún huésped ha debido llegar hoy');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Salida de huésped ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Ningún huésped ha debido salir hoy');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Suplementos');
jr_define('_JOMRES_COM_A_TARIFFS','Tarifas & Moneda');
jr_define('_JOMRES_COM_A_DISCOUNTS','Descuentos');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Carpetas uploads');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Configuración Actual');
jr_define('_JOMRES_COM_A_EXPLANATION','Explicación');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Solo suplementos por persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Cerciónese de marcar "Sí" si usted quiere cargar solo suplementos de persona');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Solo cargar suplemento de persona');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','¿El Depósito requiere porcentaje?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','¿El depósito es un porcentaje de la suma de la reserva? Si no, el depósito aplicado es un valor fijo');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','El depósito requirió el valor');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Por persona, por noche');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Escoja "Sí" si usted quiere cargos por persona-por-noche. Si no, entonces los costos se calcularán en base a habitación-por-noche');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Tamaño de la carpeta');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Max. Tamaño de carpeta en Kilobytes');
jr_define('_JOMRES_FRONT_MR_BOOKED','Reservado');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','Carta de confirmación');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Estimado ');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Costo por noche - por habitación ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Detalles de la reserva ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Gracias por reservar en el');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','.Resumen de detalles de la reserva. Por favor chequee que tenemos todos sus detalles, corríjalos y contáctenos si hay un error.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Su habitación se reservará hasta su llegada, la llegada es después de las 12pm.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Esperamos saludarlo personalmente ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Esperamos que tenga una agradable estancia.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Atención a la letra pequeña.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Se le recuerda a que una reserva es un contrato legalmente obligatorio, si por alguna razón usted tiene que cancelar o acortar su reserva entonces será aún responsable de pagar la cantidad completa.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Ninguna concesión puede hacerse para comidas no consumidas o para habitaciones no ocupadas para el período de la reserva. Con esta perspectiva nosotros recomendamos encarecidamente que use la facilidad de un seguro de vacaciones.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>La cancelación y el acortamiento se cargan a su cuenta</i> Si usted cancela sus vacaciones, la cancelación debe ser confirmada por escrito. Los cargos por cancelación son:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 días o más');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Depósito sólo.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 a 30 días');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% del contrato total.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','La fecha de la llegada a 14 días');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% de contrato total.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','El IVA@ 8% es incluido en todas las tarifas. Cualquier aumento o modificación se cargará.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Imprima la carta de confirmación');
jr_define('_JOMRES_COM_INVOICE_TITLE','Impresión de la factura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Número de noches: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contrato inicialmente acordado: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Costo por noche: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Suma total');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Gracias en el');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Esperamos verle otra vez.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Imprimir factura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Agregue el servicio para facturar');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Descripción del servicio');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Valor del Servicio');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Otros artículos facturados');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Otros artículos facturados, valor total: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Artículo agregado a la factura');
jr_define('_JOMRES_UPLOAD_IMAGE','Subir imagen ');
jr_define('_JOMRES_FILE_UPLOAD','Archivo subido');
jr_define('_JOMRES_FILE_ERROR_TYPE','Sólo se permiten cargar archivos de tipo::\n');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Por favor escoja un archivo antes de subir');
jr_define('_JOMRES_FILE_ERROR_NAME','Por favor el archivo debe contener sólo caracteres alfanuméricos y ningún espacio.');
jr_define('_JOMRES_FILE_ERROR_SIZE','El tamaño del archivo excede el máximo establecido por el Administrador.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','carpeta NO cargada.');
jr_define('_JOMRES_FILE_UPDATED','Su carpeta se ha cargado.');
jr_define('_JOMRES_COM_A_JSCALENDAR','JS Calendario');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Calendario carpeta de idioma');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Escoja el fichero del idioma que se debe utilizar en el calendario de Javascript. Por favor note que algunos de los calendarios pueden estar defectuosos. Vea http://sourceforge.net/ para más información');
jr_define('_JOMRES_COM_A_CALENDARCSS','JS Calendario CSS');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Escoja el fichero de estilos CSS que se debe utilizar en el calendario de Javascript');
jr_define('_JOMRES_COM_A_ODDS','Probabilidades y términos');
jr_define('_JOMRES_COM_A_ERRORCHECKING','Llamar lista de Minicomponentes');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Marque esta opción a Si para ver un log de los minicomponentes utilizados al final de la hoja después de que Jomres complete su ejecución. Es útil si estás intentando identificar que Minicomponentes están llevando a cabo ciertos servicios.');
jr_define('_JOMRES_FILE_DELETE','Borre esta imagen');
jr_define('_JOMRES_FILE_DELETED','El fichero se borró');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Borrar');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Incapaz de eliminar esta habitación, ya hay reservas. Cancele esas reservas y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Carcaterística de habitación eliminada');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Borre la característica de la habitación');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Imposible eliminar esta característica de la habitación, está asignada u ocupada. Elimine la característica de esas habitaciónes y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Característica de la habitación borrada');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Borrar la característica de la propiedad');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Imposible eliminar esta característica de la propiedad, está asignada. Elimine la característica de esta propiedad y vuelva a intentarlo.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','La característica de la propiedad se borró');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Borre tipo de la habitación');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Imposible eliminar este tipo de la habitación/propiedad, está asignada a una habitación. Pruebe a reasignarla a otro tipo de habitación/propiedad entonces pruebe otra vez.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Imposible eliminar este tipo de habitación, esta asignada a una tarifa. Pruebe a reasignar la tarifa a otro tipo de habitación/propiedad entonces pruebe otra vez.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Tipo de habitación borrada');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Borre la propiedad');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','La propiedad se borró');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Usted no tiene los permisos para borrar esta propiedad.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Anchura de imagen grande');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Haga click para un mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Descripción de la propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','horario de entrada');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Actividades del área');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Direcciones');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aeropuertos');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Otros transportes');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Políticas y reclamaciones');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Dirección');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Visitantes pueden reservar online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Ponga esto a "SI" para asegurar que los visitantes puedan reservar una habitación online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Reservas para una período fijo');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Si pone esto en "SI" las reservas serán por un período fijo. Si se pone en "NO", entonces asegurese que el "día predefinido de llegada" se puso en "SI" (si no quiere forzar al cliente  a llegar un día específico) en este caso no conseguirá muchas entradas al calendario de disponibilidad');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Período de Reservas: ');
jr_define('_JOMRES_COM_A_BOOKING','Reservar una Hb');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Max. períodos, p.e. 3x7 períodos = 21 dias');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Es una habitación para solteros?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','P.e. si estas alquilando una propiedad, y no hay habitaciones en esa propiedad. En esto caso hay que asegurar que ha registrado una habitación en esa propiedad.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Registro de reserva');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirmar la reserva');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Lunes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Martes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Miércoles');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Jueves');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Viernes');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sábado');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Domingo');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Lu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Ma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Ju');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Vi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Do');
jr_define('_JOMRES_COM_A_AVLCAL','calendario de disponibilidad.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','El color del tipo de letra para la fecha actual');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','El color del tipo de letra por días en el mes de despliegue');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','El color del tipo de letra por días no en el mes de despliegue');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Color de fondo por días cuando la propiedad/espacio está disponible');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Color de fondo por días cuando no se muestra mes');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Color de fondo por días ocupados');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Color de fondo para reservar provisionalmente los espacios (reservas para un depósito que no se ha tomado)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Color de fondo para fechas atrasadas');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Ocupado/no disponible');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponible para reservas');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Reservas provisionales');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Día predefinido de llegada');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Sólo para los sitios que ofrecen las reservas fijas del período. Escoja el día en que deben empezar las llegadas.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Día fijo de llegada');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Período de la estancia (días)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Mostrar la disponibilidad?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ponga esto a "Sí" para mostrar los calendarios de disponibilidad');
jr_define('_JOMRES_FRONT_AVAILABILITY','Disponibilidad');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Click en una fecha libre para ver el formulario de reservas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Reservas negras');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nuevas Reservas negras ');
jr_define('_JOMRES_FRONT_DELETEGUEST','Borrar huésped');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Huésped borrado');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Incapaz de borrar a este huésped ya que tiene reservas abiertas. Cancele las reservas y pruebe otra vez.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Costo actual de la habitación: ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Hola');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Gracias por hacer su reserva con');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Resumen de la reserva:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Si usted tiene cualquier pregunta con respecto a esta reserva o algún otro servicio, por favor contacte con nosotros.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nuestro número de teléfono es');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Usted puede econtactar con nosotros alternativamente por email en');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumar');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER','No importa');
jr_define('_JOMRES_COM_CALENDAROUTPUT','Formato de salida del Calendario');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','Eso permite cambiar el formato de salida de los datos');
jr_define('_JOMRES_COM_CALENDARINPUT','Formato de entrada del Calendario');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Eso permite cambiar el formato de entrada de los datos');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Las reservas fijas del período permiten interrupciones cortas');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Longitud de interrupción corta');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publicado');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Auditoría');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Fecha');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Tiempo');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Usuario (Nombre de usuario)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operación');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Vea detalles');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtre en la fecha');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtre en el nombre de usuario');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtre en la operación');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Estado');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Llegada Pendiente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Llegadas hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Residente actual');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Sale hoy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Salida atrasada');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','No ha llegado');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Usuario desconocido');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Habitación creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Habitación actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Habitación borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Característica creada de Hb');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Característica actualizada de Hb');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Característica borrada de Hb');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Tipo de Hb insertada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Tipo de Hb actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Tipo de Hb borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Propiedad creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Propiedad actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Propiedad borrada');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Característica de propiedad creada de propiedad');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Característica de propiedad actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Característica de propiedad borrada');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Configuración de propiedad editada');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Propiedades publicadas');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Tarifa creada');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Tarifa actualizada');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Tarifa borrada');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Agregar cargos por servicios');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Huésped Entrada');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Huésped Salida');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Depósito ingresado');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Huésped creado');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Huésped actualizado');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Huésped borrado');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Habitación reservada');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Extra creado');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Extra Actualizado');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Extra Borrado');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Extra Extra.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Reserva negra introducida.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Reserva negra borrada.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Extra');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Descripción');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Nombre');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Precio');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra actualizado');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Editar artículo');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Extra borrado');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Administración de extras');
jr_define('_JOMRES_COM_A_EXTRAS','¿Mostrar los extra en el momento de reservar?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Ponga esto a "Sí" para mostrar cualquier extra que usted desee ofrecer al huésped');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Extras opcionales.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Dia de comienzo de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Servicios actuales resumidos');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Administración de Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Error al reservar estas habitationes, una o más de las habitaciones que usted escogió no están libres.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Habitaciones incluidas en Reserva negra');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Ver Reserva negra');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','No hay Reserva negra en la lista');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Número de estrellas');
jr_define('_JOMRES_COM_A_SMOKING','¿Mostrar la opción fumador?');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Ponga esto a "Sí" para mostrar la opción fumador.');
jr_define('_JOMRES_COM_A_RESET','Reponer');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Reserva cancelada');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Busque aquí para:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Opción preconfigurada de fumador');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Símbolo de moneda');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Por ejemplo &amp;pound&#59; Por favor note que debe utilizar las entidades que el protocolo HTTP codifica para el símbolo requerido. Para una lista de estas entidades <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Código de moneda');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','P.e. GBP. Usted necesita esto si utiliza Paypal. Para una lista de estos códigos visite <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Haga click para más información');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','¿Limitar las reservas anticipadas?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ponga esto a "Sí" si usted quiere limitar las reservas anticipadas (utilizar el próximo campo para poner el límite en términos de días). Si usted pone esto a sí entonces si el usuario trata de reservar más de n días entonces su fecha de llegada será restaurada a la fecha de hoy');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Días de reservas anticipadas están limitados a:');
jr_define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTA: No se recomienda que usted ponga las dos opciones siguientes a Sí, usted debe utilizar sólo uno de los dos cálculos de impuesto disponibles. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Impuesto');
jr_define('_JOMRES_COM_A_ROOMTAX','Impuesto de la habitación');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Diseñado para el mercado Americano. Estas son las cantidades del impuesto de la habitación que serán cargadas al huésped. Usted puede cargar una combinación y/o de fijo y porcentaje. Note que estos impuestos son sólo aplicados al costo de la habitación.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Impuesto fijo ');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Porcentaje de impuesto');
jr_define('_JOMRES_COM_A_EUROTAX','Impuesto');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Porcentaje de impuestos');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Archivar todos los registros');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Registros archivados');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditor ha archivado registros de auditoría');
jr_define('_JOMRES_FRONT_TARIFFS','Nuestras tarifas');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Nombre de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Descripción de tarifa');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Tipo de habitación');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Válido de');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Válido a');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Por persona por noche');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Por noche');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','No incluye fines de semana');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Días mínimos');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Días máximos');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Personas mínimas');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Personas maximas');
jr_define('_JOMRES_FRONT_PREVIEW','Inspección previa');
jr_define('_JOMRES_COM_A_EDITINGMODEON','¿Modo de edición activado?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Texto actual');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Texto nuevo');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Texto actualizado.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Corrija el idioma');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Mostrar los últimos 200 expedientes');
jr_define('_JOMRES_FRONT_PTYPE','Tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','Lista de propiedades');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Editar tipo de propiedades');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Descripción de tipo de propiedad');
jr_define('_JOMRES_COM_PTYPES_SAVED','Tipo de propiedad grabado');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Incapaz de borrar el tipo de propiedad. El tipo de propiedad está asignado a una o más propiedades, por favor reasigne antes de tratar de borrar');
jr_define('_JOMRES_COM_PTYPES_DELETED','Tipo(s) de propiedad borrados');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Recuerde  pagar');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Ningún servicio extra para facturar');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Depósito');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Cantidad completa');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Cantidad cargada en tiempo de la reserva');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Utilice esta opción para decidir lo que se debe cargar al reservar. Escoja el depósito si el depósito se debe cargar, o la cantidad completa si la cantidad completa se debe cargar.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Meses del Cal. a mostrar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','En la disponibilidad de los habitaciones, cuántos meses del calendario se deberian mostrar?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Firmado a favor de ');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST','Pasarelas');
jr_define('_JOMRES_COM_A_CANCEL','Cancelar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Elija por favor los habitacion(es) que usted desea tener fuera de servicio, y las fechas relevantes. <br>Si una habitacion no tiene una marca, no se puede incluir en la Reserva negra hasta que todas los reservas estén completadas/canceladas.<br/> Cuándo usted haya escogido las fechas apropiadas, hacer click en el botón azul "aplica" para reexaminar la disponibilidad de la habitación. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center>Por favor entrar otra vez.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Razón');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','¿Utilizar pasarelas de Pagos en Línea?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ponga esto a sí si usted quiere utilizar pasarelas de Pagos en Línea.  <b>Nota:</b>Esto no desconecta el cálculo del depósito mostrado durante el proceso de la reservación.  Para desactivar esto usted puede redactar las plantillas que muestran los espacios y quitar los elementos que se refieren a depósitos. ');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Escoja por favor su método de pago.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','¿Pasarelas de Pagos en Línea permitido?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Plugin modificado');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Plugin insertado');
jr_define('_JOMRES_FRONT_GALLERYLINK','Ver la web de la propiedad');
jr_define('_JOMRES_COM_A_GALLERYLINK','Link Externo');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Ponga el link de su website aqui.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Tarjeta de crédito vista');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Tarjeta de crédito actualizada');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Editar Tarjeta de crédito');
jr_define('_JOMRES_COM_A_EDITICON','Editar el tamaño del icono');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','carga las imagenes en serie');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Imágenes ya existen en directorio');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Diapositivas');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','¿Mostrar enlace a Diapositivas?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','¿Mostrar diapositivas en línea?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Anchura de Diapositivas');
jr_define('_JOMRES_FRONT_SLIDESHOW','Imagen de la propiedad');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','Lo siento, no hay imágenes disponibles para esta propiedad');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','¿Mostrar enlace a Tarifas?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','¿Popups permitidos?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Si se establece a no, entonces los enlaces que normalmente se habrian abierto en una ventana emergente se abrirán en su lugar. EXPERIMENTAL! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Cargar las imágenes en serie');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Utilice esta forma para cargar múltiples imágenes de esta propiedad.<br/><b>Nota:</b> cualquier imagen con el mismo nombre será sobreescrita. También tome nota que de esta forma no carga las imágenes específicas de la propiedad ni la imagen principal de la propiedad, usted necesitará cargarlos desde la sección de Administración de Propiedad.<br/><b>Nota:</b> Las imágenes cargadas aquí serán copiadas a la carpeta /images/stories/jomres/*property_uid* . Si no existe esta carpeta, será creada, a menos que un directorio alternativo se haya especificado en la configuración.');
jr_define('_JOMRES_A_TABS_MISC','Misceláneo');
jr_define('_JOMRES_A','Configuración de la página');
jr_define('_JOMRES_A_GLOBALPFEATURES','Utilice las características globales de la propiedad');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Ponga esto a Sí si usted quiere forzar a todas las propiedades a utilizar sólo las características de propiedad definidas por el webmaster.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','Para asignar una imagen a esta característica, usted necesita primero cargar sus imágenes de la característica de la propiedad a la carpeta /images/stories/jomres/pfeatures/. ');
jr_define('_JOMRES_A_ICON','Icono');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Escoja el plugin de la búsqueda que usted desee utilizar.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Lo siento, su búsqueda no devolvió resultados. Modifique por favor su búsqueda y pruebe otra vez.</b>');
jr_define('_JOMRES_AREYOUSURE','¿Seguro que usted desea hacer esto?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Reservar una propiedad');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Número de seguridad');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','¿Mostrar Tarifas?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Dirección');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Información detallada');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Click para habitaciones y disponibilidades');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Mostrar información de Tarifas');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Mostrar información de dirección debajo de este enlace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Mostrar detalles de la propiedad debajo de este enlace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Mostrar habitaciones y disponibilidades debajo de este enlace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Mostrar información de tarifas debajo de este enlace');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Tarifa simple');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Promedios');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Seleccione el modelo de tarifa a utilizar');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','Ud. tiene disponible dos métodos de calcular las tarifas. Primero, el método de "tarifa simple" el cual permite ofertar diferentes tarifas al huésped y el cálculo por estadía es el mismo para todo la estancia completa. Esto es útil cuando queremos ofrecer diferentes tarifas para una misma fecha. Elija el otro método, "tarifa promedio" si desea ajustar los precios dependientes de la fecha. El sistema encontrará todas las tarifas para cada día de reserva y retornará el promedio de todo el período deseado');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Mostrar fecha de salida escogida');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC','Poner a "SI" si desea mostrar el campo fecha de salida. Solo use si sabe que hacer, la fecha de salida siempre se activará el día después de la llegada.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Límite de descripción');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Esto limita la cantidad de caracteres mostrados cuando se describe una propiedad.");
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','¿Formato date() usado?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Poner a "SI" para dar formato de salida a las fechas de acuerdo a la funcion date() (Ver <a href="http://www.php.net/manual/en/function.date.php">aquí</a>). Poner a "NO" para usar formato strftime() (Ver <a href="http://www.php.net/manual/en/function.strftime.php">aquí</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Publicar');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Despublicar');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Error en entrada de color de fondo');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','País por defecto en formulario de reserva');
jr_define('_JOMRES_JAVASCRIPT_','Campos marcados con * rojo son requeridos.');
jr_define('_JOMRES_COM_SELFREGISTRATION','¿Los usuarios pueden registrar sus propiedades?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Poner a "SI" si desea que los usuarios estén habilitados para registrar sus propiedades sin intervención del administrador.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','País y región de la propiedad.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Por favor complete los detalles de la propiedad.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Campos marcados con * rojo son requeridos.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Propiedad creada');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Lo sentimos, no puede crear una propiedad en este sistema. Para hacerlo Ud. debe estar registrado como usuario.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Propiedad creada: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Para el usuario: ');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Mostrar calendario desde el inicio del año?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','El calendario de disponibilidad se mostrará desde el inicio del año actual.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Habitaciones disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Regresar a detalles de la propiedad');
jr_define('_JOMRES_FRONT_ROOMTYPES','Tipos de habitación');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Límite de búsqueda aleatoria');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','¿Mostrar enlace a Google Currency Conversion en el listado de tarifas?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Convertir precio a :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','¿Permitir a los usuarios editar usando editores HTML?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Particularidades de reserva');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Seleccione los detalles requeridos de su reserva');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilidad ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Seleccione la habitación que desea');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Mirar si la propiedad está disponible para esta fecha.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Extras opcionales');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Seleccione que extra opcional desea incluir en la reserva');
jr_define('_JOMRES_COM_PERDAY','Por noche');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Dirección');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Por favor ingrese los detalles.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Habitaciones disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Habitaciones seleccionadas');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>La posible fecha de llegada más cercana es: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Por noche:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Extras:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','impuestos:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Descuentos:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Gran Total:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Huéspedes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Click para añadir esta habitación a su reserva');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Click para eliminar esta habitación de su reserva');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Tipos de huésped');
jr_define('_JOMRES_VARIANCES_TYPE','Tipo');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Tipo de huésped, Ej: Niños 5-10, o estudiantes ');
jr_define('_JOMRES_VARIANCES_NOTES','Notas');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Notas de lo que usted puede querer hacer con respecto a este tipo de huésped');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Máximo');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Máximo número de este tipo de huésped que puede ser seleccionado en la reserva');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','Es porcentaje');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','La figura calculada es un porcentaje de la figura BASE calculada para la habitación. Si esto se pone a "NO" entonces la figura que usted especifica simplemente se agrega o substrae del valor BASE de la habitación.');
jr_define('_JOMRES_VARIANCES_POSNEG','¿Añadir varianza?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','La figura calculada se agrega o elimina de la figura BASE calculada para la habitación. Ponga esto a "NO" si usted quiere esto para un descuento de la figura BASE.');
jr_define('_JOMRES_VARIANCES_VARIANCE','Varianza');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Cantidad a variar');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Modificado tipo de orden de huésped');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Publicado tipo de huésped');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Eliminado tipo de huésped');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Creado tipo de huésped');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Actualizado tipo de huésped');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Actualizado tipo de huésped');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','¿Mostrar enlace a listado de habitaciones en la página de detalles de la propiedad?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','¿Mostrar <b>solo</b> listado de disponibilidad de habitaciones por calendario?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Cambie esto a "Sí" para desactivar despliegue del título de propiedad y detalles, para que sólo el calendario de disponibilidad de habitaciones sea visto en la sección de detalles de la propiedad. Pensado para usuarios que alquilan las habitaciones de las propiedades.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Intervalo mínimo de Llegada-Salida');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','El intervalo mínimo en la reserva entre las fechas de llegada y salida.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Listado de habitaciones en la reserva muestra número de habitación');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Listado de habitaciones en la reserva muestra nombre de habitación');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Listado de habitaciones en la reserva muestra listado de tarifas');
jr_define('_JOMRES_ORDER','Orden');
jr_define('_JOMRES_REQUIREDFIELDS','Requerido');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Días antes de la llegada');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Lapso mínimo de días entre hoy y el día de llegada.');
jr_define('_JOMRES_DTV','Variaciones del tipo de fecha');
jr_define('_JOMRES_DTV_DOW','Día de la semana');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Tipo de huésped por defecto');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Número por defecto del primer tipo de huésped a mostrar, si usa diferentes tipos de huéspedes.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','¿Solo los usuarios registrados pueden reservar en línea?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Lo sentimos, para reservar en línea debe ser un usuario registrado. Click aquí para registrarse en el sitio.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Color de texto para enlaces en reservas');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Bordes fin de semana');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Habitación reservada');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Reserva negra');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','¿Redondear depósito a número entero?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','¿Cargar depósitos?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','¿Cargos de tarifas almacenados como figuras semanales?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Tiene la opción de almacenar los cargos por tarifa en valores diarios y semanales.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Precio por semana');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Fechas de llegada arregladas: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Cuando esta opción es seleccionada, los números de las fechas son mostradas en el menú desplegable');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opción Fumar no válida');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Fecha de llegada incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Fecha de salida incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','La reserva es muy corta. Se necesitan varios días entre la llegada y la salida:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','El intervalo es');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Variante tipo de huésped incorrecta');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Seleccione el tipo de huésped');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Demasiadas opciones para la lista de tarifas');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Ha seleccionado más habitaciones que huéspedes, click en una habitación para eliminarla de su selección');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Demasiados huéspedes para las camas disponibles');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Necesita más habitaciones');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Seleccione una habitación');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Nombre requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Apellido requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','No. casa requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Calle  requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Pueblo requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Región requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Código postal requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','País requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Teléfono requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Móvil requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Email requerido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Email no válido');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Imposible validar Email');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Tenemos VACANTES!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','No hay habitaciones seleccionadas');
jr_define('_JOMRES_BOOKING_NUMBER','Reserva no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok para reservar, mensaje de fondo');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','¿Descargar variables de plantilla?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Activar esto para descargar variables de la plantilla para cada vista. Útil si desea ver si cierto elemento está disponible para ser usado en una plantilla determinada.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Figura es porcentaje');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ponga esto a "Sí" si la figura de cálculo de personas es un porcentaje. Si no entonces se aplicará como una cifra fija.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST','Límite en habitaciones/tarifas disponibles');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Use esto para limitar el número de cuartos disponibles y aranceles que se listan en el formulario de reservación. Póngalo a cero si usted no quiere habilitar limitaciones. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','NO hay VACANTES!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW','Reserve ahora: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','¿Modo de edición Global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Tenga cuidado con esta función. Si se establece en Sí, el modo de edición afectará el texto a medida para todas las propiedades en el sistema para la constante que se está editando.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Simbolo Global de moneda');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Plegado de Componentes');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ponga esto a Sí, si el componente está plegado de manera que las áreas del módulo y de cabecera no son visibles');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Administrador de Propiedad');
jr_define('_JOMRES_COM_WEEKENDONLY','Solo fines de Semana');
jr_define('_JOMRES_COM_WEEKENDDAYS','Días de fin de semana');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Establezca sus días de fin de semana. Tarifas que permitan o no fines de semana tendrán esta opción en cuenta al generar la lista de habitaciones.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Seleccione su país antes de añadir otra información de la propiedad');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Grabe sus cambios antes subir imágenes de la propiedad');
jr_define('_JOMRES_TARIFFSFROM','Precios desde - ');
jr_define('_JOMRES_SEARCH_ALL','Todo');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Búsqueda por país');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Búsqueda por región');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Búsqueda por ciudad');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Función de búsqueda.');
jr_define('_JOMRES_SEARCH_BUTTON','Buscar');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Escriba una palabra en el cuadro y pulse el botón.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Palabras de búsqueda: ');
jr_define('_JOMRES_SEARCH_AVL_INFO','Por favor, introduzca su llegada prevista y la fecha de salida y pulse el botón para buscar habitaciones disponibles en las fechas elegidas.');
jr_define('_JOMRES_SEARCH_PTYPES','Listar propiedades por tipo de propiedad');
jr_define('_JOMRES_SEARCH_RTYPES','Listar propiedades por tipo de habitación.');
jr_define('_JOMRES_SORTORDER_DEFAULT','Por defecto');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Nombre Propiedad');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Región Propiedad');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Ciudad Propiedad');
jr_define('_JOMRES_SORTORDER_STARS','Estrellas');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Lista Propiedades');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Detalles Propiedad - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Formulario de Reserva');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Actualice su dirección');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-chequear disponibilidad<br/>(La selección de habitación se reseteará)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-chequear disponibilidad');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifique sus extras opcionales');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Cambie su selección de habitación');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Actualice su dirección');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Lo sentimos uno o más datos de dirección son incorrectos');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Imagen Habitación');
jr_define('_JOMRES_CURRENCYFORMAT','Formato de moneda');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Mostrar opciones de Administradores como imágenes');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opciones de búsqueda');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Logs Disponibles');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','No hay entradas de registro. Esto es normal, necesita modificar manualmente jomres.php para activar el registro');
jr_define('JOMRES_COM_A_MESSAGE','Mensaje');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE','Modo configuración tarifas');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Cuidado: Cambiar entre diferentes tipos de tarifas puede originar pérdida de datos. Veánse las notas a continuación con respecto a esto</b>.
<br/><br/>
Tiene tres opciones para configurar las tarifas.<br/>
Normal mode: Puedes tener una tarifa por cada tipo de habitación, esto es válido para los siguientes 10 años.<br/>
Micromanage: Puedes cambiar el precio por cada día y habitación/propiedad<br/>
Advanced: El antiguo método Jomres de generar tarifas<br/>
<br/>
Los diferentes modos de tarifas le permiten elegir el método de configuración de las tarifas que más le convenga. <br/>
El modo normal es el más simplista, pero es más fácil de entender, ya que cruzará referencia de habitaciones y tarifas a tipos de habitación/propiedad y le permite configurar las habitaciones y los precios en la misma página. <br/>
Micro gestión le permite variar los tipos en el día a día sin tener que gestionar montones de las tarifas, que se realiza por lotes de referencias cruzadas de tarifas diferentes entre sí. Esto da lugar a una serie de tarifas que se han creado para que abarquen un período de tiempo, pero no se puede aplicar una tarifa sobre otra. <br/>
Modo avanzado le permite crear una habitacion y asociarla con un tipo de habitación. A continuación, crea una tarifa que se asocia con un tipo de habitación. El uso de este método es posible aplicar una tarifa sobre otra, por ejemplo, un tipo de habitación \"Doble cama\" puede tener una tarifa de alojamiento y desayuno, y otra para la cama, desayuno y cena. El método avanzado requiere un poco más de atención a los detalles, ya que es posible des-asociar una habitación o tarifa de un tipo de habitación/propiedad o configurarla incorrectamente válida desde y hasta las fechas, pero te da opciones de configuración que los otros modos no ofrecen. <br/>
<br/>
Debido a que los modos Normal y microgestión requieren una específica puesta a punto de habitaciones y tarifas para el modo de trabajar el sistema puede ser necesario volver a situar algunos datos para hacer las configuraciones de la actual compatible con el modo de edición actual tarifa. <br/>
<br/>
Normal -> Avanzado. Sin cambios. Las tarifas vigentes se mantienen. <br/>
Normal -> microgestión. Todas las tarifas existentes se eliminan. <br/>
Avanzado -> Normal. Todas las tarifas existentes se eliminan. <br/>
Avanzado -> microgestión. Todas las tarifas existentes se eliminan. <br/>
Microgestión -> Avanzado. Todas las referencias cruzadas existentes entre las tarifas se eliminan, pero las tarifas siguen se mantienen. <br/>
Microgestión -> Normal. Todas las referencias cruzadas existentes y las tarifas se eliminan.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','¿Mostrar la lista de habitaciones en la hoja de detalle?');
jr_define('JOMRES_PROPERTYTYPE','Tipo de propiedad');
jr_define('JOMRES_COM_A_SRPONLY','Solo SRP');
jr_define('JOMRES_MAXPEOPLEINROOM','Personas máximas por habitación');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Personas máximas en la reserva');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Añadir nota');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Borrar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Ver notas');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Añadir nueva nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Editar nota');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Borrar nota');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','Mis opciones');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','Listado de reservas');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Mis reservas');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Ver reservas');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Ver favoritos');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','¡No tiene ningún favorito añadido todavia!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Añadir a favoritos');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Tipo de propiedad');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Propiedades hotel');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Activo');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','Este plugin permite activar y configurar los precios de sus habitaciones dinámicamente.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','La mayoría de las empresas recalculan los precios de las habitaciones en función del número de habitaciones de un tipo requerido que están disponibles en una fecha determinada. Esto les permite ofrecer descuentos en el tipo de habitación que no está ocupada durante un período determinado con el objetivo de atraer a los clientes que de otro modo podrían perderse. <br/> La activación y configuración de este plugin le permite ofrecer precios ajustables basados en el número de habitaciones de un tipo seleccionado que están disponibles en la propiedad en un día determinado. <br/> Threashold define el número de días que desde la fecha actual hasta la fecha de llegada permite activar esta característica, nos permite la posibilidad de ajustar el porcentaje de habitaciones que pueden estar disponibles antes de que un determinado descuento se aplique.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (número de días entre la llegada y la fecha actual)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Porcentaje de habitaciones ocupadas 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Porcentaje de habitaciones ocupadas 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Porcentaje de habitaciones ocupadas 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Porcentaje de habitaciones ocupadas 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Descuento %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' ha sido descontado de  ');
jr_define('_JOMCOMP_WISEPRICE_TO',' a ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Precio de habitación no descontado ');
jr_define('JOMRES_COM_A_MAPSKEY','Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Puedes obtener google maps API key desde <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Una vez tenga introducido su map key aquí, Jomres mostrará el mapa en su página de detalle de la propiedad.');
jr_define('JOMRES_COM_A_USE_SSL','¿Usar SSL en sistema de reservas?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','Tiene que estar seguro de que dispone de un certificado SSL válido para ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Último minuto');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','¿Activo?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Poner a Si si quiere ofrecer ofertas de último minuto.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Si se hace la reserva y la fecha de llegada es sólo N días desde la fecha de reserva, el descuento puede ser aplicado');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Descuento');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','En porcentaje');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','¡Un descuento ha sido aplicado a esta reserva!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','El costo de la estancia a sido reducido en  ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Está propiedad ofrece un descuento de último minuto de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' por ciento si su fecha de llegada es anterior a ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE',' por ciento o más si su fecha de llegada es antes de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. ¡Reserve ahora para disfrutar de la mejor oferta!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Información detallada de tarifa');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Poner a Si para ver la información detallada en los detalles de propiedad/tarifa');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Reducir al mínimo las opciones de configuración');
jr_define('_JOMCOMP_AMEND','Modificar reserva - Selección de propiedad');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Seleccionar nueva propiedad');
jr_define('_JOMCOMP_AMEND_HEADER','Contrato Original:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Depósito Pagado');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Depósito No Pagado');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Anulación Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Anulación de Depósito');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Cancelar');
jr_define('_JRPORTAL_CPANEL','JRPortal Panel de Control');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Tipo de Comisión predeterminada');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Elija la comisión predeterminada que será aplicada a la propiedad en caso de que no sea seleecionada otra.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','Lista de tipos de comisión');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Tipos de comisión');
jr_define('_JRPORTAL_CRATE_TITLE','Título');
jr_define('_JRPORTAL_CRATE_TYPE','Tipo');
jr_define('_JRPORTAL_CRATE_VALUE','Tipo de comisión');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Código de moneda');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','Lista de propiedades');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nombre propiedad');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Dirección propiedad');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Las propiedades cuyo color de fondo es rojo todavía no tienen un tipo de comisión aplicado.');
jr_define('_JRPORTAL_STATS_PATETITLE','Estadísticas');
jr_define('_JRPORTAL_STATS_STATTYPE','Estadísticas para: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Propiedades - Clicks');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Vista de propiedad');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Número de reservas');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valor de la reservas');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Comisión estimada');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Tipo de comisión');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','Lista de reservas');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Propiedad id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Huésped id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Afiliado id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Factura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Reservas total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contrato id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contrato number');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Código moneda');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Creado');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archivado');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Fecha archivada');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Agregar artículo a la factura');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Gestor de la factura');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Propiedad asociada (si es aplicable)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valor');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Descripción');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Artículo Insertado con éxito en la factura ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Ver órdenes");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Error al insertar artículo en la factura ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, no ha establecido un valor para la factura");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Puede tener archivos específicos de idioma mediante el ajuste del nombre de la subcarpeta, ej. "yachtbrokerage" y copiar un archivo de sublenguaje en la subcarpeta. Puede modificar ese archivo de lenguajes para ese tipo de propiedad para convertirse en habitaciones, ej DVDs, ect.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','No se puede eliminar esta propiedad, ya que es la única propiedad a la que tiene acceso. Si desea desactivarla, por favor use la característica de despublicar en su barra de herramientas. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Si se trata de una instalación de demostración y tiene la intención de actualizar a Jomres Solo (una única propiedad límite) entonces usted primero debe crear una propiedad nueva, a continuación, elimine ésta antes de cambiar su clave de licencia para la clave de licencia solo que se le asignará a la compra .');
jr_define('_JOMRES_COM_EMAILERRORS',"¿Registro de errores por email?");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Establecer como Sí si desea copiar jomres.net automáticamente cuando un mensaje de registro de errores se crea. Esto nos permite ser proactivos en nuestro enfoque para hacer frente a posibles problemas, es de esperar la resolución de cualquier problema antes de que ni siquiera sean conscientes de ellos. Tenga en cuenta que esta función está deshabilitada en 'localhost'. ");
jr_define('_JOMRES_COM_ISTHISANMRP',"¿Es esta propiedad un hotel o alojamiento y desayuno/hostal/pensión? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Las opciones de configuración difieren dependiendo de si usted está alquilando habitaciones en una propiedad, o la propiedad en sí. Seleccione MRP si está ofreciendo habitaciones, seleccione SRP si usted está ofreciendo toda la propiedad de todo el edificio. ");
// Jomres v3.0.6
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"¿Utilizar el chequeador de dirección de correo electrónico Jomres? ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Aplica un control más estricto sobre los correos electrónicos enviados. Algunos servidores web seguros arrojarán un error 500 interno, si intenta enviar un correo electrónico a una dirección de correo electrónico inexistente. Cambiar de valores nos permite utilizar las características checkdnsrr de PHP antes de intentar enviar un correo electrónico, previniendo los errores tipo 500. ");
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Alojamiento Total");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noche(s) de ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"por habitación ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Aumentar la duración de la estancia ");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Resumen de precio ");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Por favor leer y aceptar ");
jr_define('_JOMRES_CONFIRMATION_HEADER',"Un resumen de su reserva se muestra a continuación. <br /> Para hacer cualquier cambio, por favor haga clic en el botón Modificar reserva. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"Si necesita cambiar cualquiera de la información anterior, por favor haga clic aquí");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Modificar Reserva");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"Por favor, introduzca cualquier solicitud especial en el cuadro siguiente.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Confirmo que la información anterior es correcta y de acuerdo con la ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"por persona por noche ");
// Jomres 3.1.10
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Archivo de lenguaje por defecto");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Elija el archivo de idioma por defecto que Jomres debe utilizar si el idioma no ha sido fijado por Joomfish. ");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	jr_define('_PN_OF','de');
if (!defined('_PN_START'))
	jr_define('_PN_START','Comienzo');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Anterior');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Siguiente');
if (!defined('_PN_END'))
	jr_define('_PN_END','Fin');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Resultados');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Tenga en cuenta que esto no es un formulario de reserva, en su lugar está enviando un correo electrónico. <br/> Por favor, introduzca el mensaje que le gustaría enviar a ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contactar con Hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Consulta de la propiedad de  ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Gracias por su consulta, su mensaje ha sido enviado a la dirección de contacto de la propiedad, con copia a su propio correo electrónico para sus archivos. Se le responderá tan pronto como sea posible');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' con respecto a ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Introduzca los caracteres que ve en el cuadro');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','No puedo leer los caracteres. Generar un ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Enviar');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nueva imagen');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Consulta');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Por favor seleccione el alojamiento deseado en la lista de la derecha');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Habitaciones mínimas ya seleccionadas');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Número mínimo de habitaciones previamente seleccionadas en la reserva antes de mostrar el combo de tipo de habitación/tarifa que pueden ser ofrecidas. Le permite tener las tarifas de descuento, cuando más de N habitaciones están ya seleccionadas. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Número máximo de habitaciones ya seleccionadas ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','El número máximo de habitaciones ya seleccionadas en la reserva antes de que el combo tarifas/habitación ya no se ofrezca. Le permite dejar de ofrecer este tipo de combinación de tarifas/habitación una vez que N  habitaciones hayan sido seleccionados en el formulario de reserva. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Tenga en cuenta que Suplemento por persona no será usada si Suplemento por persona se establece en Sí en la Configuración General. Estos ajustes son una alternativa a tener tarifas planas Suplemento por persona, no una adición a la tarifa plana SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Disponible"); 
jr_define('_JOMRES_AVLCAL_QUARTER',"Algunas reservas");
jr_define('_JOMRES_AVLCAL_HALF',"Ocupación media");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Ocupación alta");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Completo");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Prefijo Url');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Este es el primer elemento que aparece después del dominio - Cambiar lo que usted requiera - Si usted no desea utilizarlo déjelo en blanco');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Ver los alias de tareas de propiedad');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking los alias de tareas de propiedad');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Buscar los alias de tareas de propiedad');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Añadir país a la url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Añadir región a la url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Añadir ciudad a la url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Añadir tipo de propiedad a la url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Añadir nombre de propiedad a la url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Añadir id de la propiedad al nombre de la propiedad');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Si el nombre de propiedad se establece en No entonces no se utilizará. Si se establece en sí, entonces la URL será similar a fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Estructura de búsqueda URL - Añadir país a url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Estructura de búsqueda URL - País por defecto');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Si todas sus propiedades se encuentran en un país, entonces no tiene país en la búsqueda - entrar en un país normal aquí si desea mostrar un país');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Estructura de búsqueda URL - Añadir región a url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Estructura de búsqueda URL - Región por defecto');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Si todas sus propiedades se encuentran en una región, entonces no tiene país en la búsqueda - entrar la región por defecto aquí si desea mostrar una región');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Estructura de búsqueda URL - Añadir ciudad a url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Estructura de búsqueda URL - Ciudad por defecto');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Estructura de búsqueda URL - Tipo de propiedad');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Estructura de búsqueda URL - Tipo de propiedad por defecto');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Usar en la URL si la búsqueda es por tipo de propiedad');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Cualquier she404sef no instalado o que todavía no tenga copiado '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Una vez que haya instalado sh404SEF y / o copiado el archivo otra vez, déjelo usted será capaz de configurar el SEF URLs desde aquí. ');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetectar el lenguaje de Javascript calendar');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','¿Habilitar la detección automática del idioma de los calendarios de Javascript? Si no puede detectar automáticamente el idioma y entonces vamos a recurrir al lenguaje configurado por defecto');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Por semana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Por día');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Por reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Por persona por reserva');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Por persona por día');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Por persona por semana');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Por día (Mínimo días)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Por días X habitaciones seleccionadas');
jr_define('_JOMRES_REGISTRYREBUILD','Reconstruir registro');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalmente, el Jomres plugin Registro se reconstruye automáticamente cada vez que ve que el administrador de plugins agrega o quita un plugin, sin embargo es posible que usted no pueda usar estas características, por alguna razón, por lo tanto usted puede utilizar esta función para reconstruir el Registro manualmente. Si usted tiene acceso a la función del administrador de complementos y actualizaciones, entonces es poco probable que usted tenga que utilizar esta función. Tendrá que reconstruir del plugin de registro siempre que agregue un nuevo mini-componente y no utilice el Administrador de complementos para agregarlo.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registro reconstruido con éxito');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Hubo un error con la reconstrucción del registro de minicomponentes. Usted debe verificar su registro de errores Jomres para ver si hay un registro que provocó el error.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Buscar por rango de precio.');
jr_define('JOMRES_WORD_SAVING','Guardando...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','¿Usar Composite Property details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 presenta los detalles de la propiedad, donde todos los elementos de la salida de la información de la propiedad se envían a un archivo de plantilla (composite_property_details.html). Si no desea utilizarla se establece en No (sólo los usuarios existentes se espera que pongan no, los nuevos usuarios probablemente van a querer dejar establecida en Sí)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','Esta es una lista de todos los usuarios del sistema. Los no Administradores de propiedad tendrán un icono de huéspedes, administradores de la propiedad tendrán iconos de Recepción/Administradores de Propiedad/Super Administrador de la propiedad. <br/> Jomres Cuando se instala por primera vez, "admin" se agrega automáticamente como un Administrador de la propiedad y es considerado como un usuario autorizado. <br/> Los no-super administradores de la propiedad deben ser asignados a por lo menos una propiedad de lo contrario, aparecerá un error al intentar iniciar sesión y utilizar Jomres. <br/> Una vez que un usuario está autorizado déjelo, puede editar sus perfiles, asignar a Propiedades o darles derechos de Super Administrador de la Propiedad. <br/> Para autorizar a un usuario, haga clic en la Cruz roja junto a su nombre. Para desautorizarlos, haga clic en el símbolo verde. <br/> Para asignar usuarios a las propiedades específicas sólo, o darles derechos de Super Administrador de la propiedad, haga clic en el icono de edición (que sólo es visible una vez que ha sido autorizado). Los usuarios que ven registradas de sus bienes (s) se asignan automáticamente a los Propiedades. Los Super Administradores de propiedad automáticamente tienen derechos sobre todas las propiedades, y pueden ver todas las opciones de configuración, incluso si la opción de configuración se reduce al mínimo fijado en la web de configuración.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Desde aquí puede asignar un administrador a ciertas Propiedades. Asegúrese, si no van a ser un Super Administrador de la propiedad, que tienen derechos a por lo menos una propiedad de lo contrario, aparecerá un error al registrarse. Para dar a un Recepcionista/Administrador de Propiedad derechos sobre solo algunas propiedades, asegúrese que el desplegable Super Administrador de la Propiedad no está establecido en Sí.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','¡No tiene ninguna reserva todavía!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Tipo propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Editar su tipo propiedad');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Seleccionar su tipo propiedad');
jr_define('_JOMRES_COM_LOGGING','Registro Jomres');
jr_define('_JOMRES_COM_LOGGING_WARNING','Estas opciones le permiten activar o desactivar el registro de Jomres. El Registro de errores siempre está habilitado, pero otros registros, tales como reservas, Puerta de enlace, Sistema y Solicitudes se pueden encender y apagar. Se le advierte que <b> la posibilidad de habilitar este registro se proporciona exclusivamente como una forma de hacer la depuración más fácil, pero conlleva un gran riesgo de seguridad </ b> ya que es fácil para los usuarios externos poder ver sus registros sin haber sido autorizados, por lo tanto se aconseja dejarlo apagado la mayor parte del tiempo. Si ha habilitado el registro, cuando usted lo inhabilite, también debe asegurarse de que la carpeta <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'<i> no contenga ningún archivo de registro antiguo. Tenga en cuenta que habilitar el registro también reduce significativamente la velocidad del sistema, ya que recoge una gran cantidad de información.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Registro de Formulario de Reserva (Registro de motor de reservas) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Registro Puerta de Enlace (ej paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Registro de solicitudes (todas las solicitudes de servidores entrantes)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Sistema (misc log) ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (principalmente para el registro de la comisón etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Su consulta...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Lista de Reserva de la habitación muestra imagen de tipo de habitación');
jr_define('_JOMRES_COM_A_LISTLIMIT','Limite lista propiedades');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','El número de propiedades para mostrar en una página después de una búsqueda');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Función de búsqueda integrada');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','La característica búsqueda integrada Jomres permite a los usuarios buscar a través de Jomres Propiedades de acuerdo con un conjunto de funciones. Si ya ha utilizado las funciones de búsqueda de Jomres en Joomla usted estará familiarizado con estos ajustes. <br/> Esta característica nos permite ofrecer el manejo de la búsqueda en Jomres para aquellos usuarios que no desean utilizar módulos de búsqueda de Joomla, o para otros usuarios de CMS que no tienen sus propios módulos de búsqueda Jomres. <br/> Sólo recuerde que si decide buscar algo a través de un enlace (es decir, no un menú desplegable), entonces las opciones de búsqueda no se llevarán a cabo, sólo el elemento que se corresponde con el enlace que ha hecho clic. <br/> Note que por defecto el diseño de esta búsqueda integrada no es muy bonito. Eso es porque el archivo de plantilla que construye el diseño tiene que incluir todas las opciones posibles, algunos de las cuales son incompatibles. Para mejorar el diseño y lograr la apariencia que desea, tendrá que editar <b>srch.html</b> en la carpeta <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','¿Activar esta función?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Si esta función está habilitada, cualquier llamada a Jomres que muestre la lista de propiedades mostrará también las opciones de búsqueda.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Usar columnas');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Cualquier opción de búsqueda que haya definido como enlace (cuando sea el caso) se mostrará como columnas (IE pone br al final del enlace)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Característica columnas");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"El número de los iconos de funciones que se pueden mostrar antes de que un BR se inserte para ir a la siguiente fila.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Búsqueda por región seleccionando combo desplegable");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Ofrece un menú desplegable de búsqueda para filtrar a través de países/regiones/ciudades. Si va para utilizar esta función, entonces es mejor que no utilice la búsqueda por región o ciudad que sigue.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Buscar por nombre Propiedad");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Mostrar la búsqueda por el nombre de propiedad introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"¿Mostrar como un desplegable?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Cambie esto a no para mostrar la lista de enlaces");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Buscar por ciudad/región");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Mostrar la búsqueda por la región introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"¿Mostrar como un desplegable?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Cambie esto a no para mostrar la lista de enlaces");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Buscar por tipo de propiedad");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Mostrar la búsqueda por tipo de propiedad introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"¿Mostrar como un desplegable?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Cambie esto a no para mostrar la lista de enlaces");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Buscar por tipo de habitación");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Mostrar la búsqueda por el tipo de habitación introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"¿Mostrar como un desplegable?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Cambie esto a no para mostrar la lista de enlaces");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Buscar por caracteristicas");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Mostrar la búsqueda por la característica introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"¿Mostrar como un desplegable?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Cambie esto a no para mostrar la lista de enlaces como descripción de imágenes y casillas de verificación");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Buscar por descripción");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Mostrar la búsqueda por la descripción introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Buscar por disponibilidad");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Mostrar la búsqueda por la disponibilidad introducida");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Buscar por rango de precio");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Mostrar la búsqueda por por rango de precio introducido");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Buscar por incrementos de rango de precio");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres mirará en todos los valores de las tarifas a continuación, calculará una serie de rangos de precios basado en los incrementos de valor que estableció aquí.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Por defecto, si una propiedad no está seleccionada en Jomres se realiza una búsqueda. Si esta búsqueda no fue provocada por un módulo de búsqueda, entonces la búsqueda originará resultados al azar (deliberadamente). Esta opción le permite limitar el número de resultados en esa búsqueda al azar.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Ajustes de trabajo para Cron y registro');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron información del trabajo. La funcionalidad pseudocron es necesaria para la facturación y manejo de la comisión.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Instalado minicomponents cron. Para ejecutar una tarea de cron individual utilice los enlaces que se especifican a continuación. Tenga en cuenta que el cron jobs no produce ningún resultado por lo que no verá ninguna información en la página. En cambio, se refiere a las anotaciones de trabajo referidas a continuación.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','Método');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Si usted no tiene acceso a cron jobs, active este minicomponente, de lo contrario cree una tarea programada y dígale que se ejecute<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Mostrar el registro en el navegador');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Sólo funciona si el método se establece en minicomponente.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Registro habilitado');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ponga esto en Sí para que el registro esté habilitado. Los resultados de los registros se emitirán a continuación');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Registro detallado');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lotes de registro de salida');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Edición de plantilla');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','Esta funcionalidad nos permite editar la interfaz de plantillas Jomres en el servidor, guardando los resultados en la base de datos. Característica avanzada, tenga cuidado con ella.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nombre de la plantilla');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','¿Plantilla se ha personalizado?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Campos personalizados');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Aquí puede definir campos simples personalizados que se mostrarán en el formulario de reserva.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nombre de campo (sin espacios)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Valor por defecto');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Descripción');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Requerido');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Cantidad máxima');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Si la cantidad máxima se establece en más de 1 , a los huéspedes se les ofrecerá un menú desplegable para elegir la cantidad de los extras que necesitan.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Emitir facturas");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Impuesto");
jr_define('_JRPORTAL_TAXRATES_CODE',"Código Impuesto");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Descripción Impuesto");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"No puede borrar este Impuesto.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Tasa");
jr_define('_JRPORTAL_INVOICES_TITLE',"Facturas");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"No pagada");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Pagada");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelada");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pendiente");
jr_define('_JRPORTAL_INVOICES_USER',"Usuario");
jr_define('_JRPORTAL_INVOICES_STATUS',"Estado");
jr_define('_JRPORTAL_INVOICES_RAISED',"Planteado");
jr_define('_JRPORTAL_INVOICES_DUE',"Debida");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Suscripción");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Total pendiente de pago");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Total recurrente");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Frecuencia repetición");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Día del mes recurrentes");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Código de moneda");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Líneas de pedido");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nombre");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Descripción");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Precio inicial");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Cantidad inicial");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Descuento inicial");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Total inicial");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Precio recurrente");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Cantidad recurrente");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Descuento recurrente");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Total recurrente");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Código de impuesto");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Descripción de impuesto");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tasa impositiva");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Ajustes Paypal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Código de moneda (eg EUR)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"¿Usar sandbox?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Su correo electrónico Paypal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Nota: Para usar PayPal, usted debe ir a su cuenta de paypal y desactivar AutoReturn. (Perfil/Preferencias de pago Sitio Web), y establecer IPN (Perfil/Preferencias de Notificación de pago instantánea) para el URL:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',".Esta factura ya está lista. Por favor haga clic en el botón para escoger paypal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"¿Reemplazar los ajustes estándar de la pasarela Jomres? ");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Si la opción de reemplazar los ajustes de PayPal se establece en Sí, entonces suceden varias cosas: Configuración general ya no muestra la configuración de pasarela, y dos, cuando se hace una reserva los ajustes utilizados aquí se utilizan para que el pago se envíe a la dirección ingresada aquí, no a la que previamente se configuro en Configuración General.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Mostrar mis facturas");
jr_define('_JRPORTAL_COUPONS_TITLE',"Cupones descuento");
jr_define('_JRPORTAL_COUPONS_DESC',"Los códigos de descuento se pueden generar y enviar ​​a los clientes como un incentivo para hacer reservas. Válido desde y hasta las fechas se refiere a las fechas en que la reserva se puede hacer en adelante, no a la fecha de la propia reserva.");
jr_define('_JRPORTAL_COUPONS_CODE',"Código de cupón");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Válido desde");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Válido hasta");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Importe de descuento");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"El descuento es un porcentaje");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Sólo habitación");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Descuento sólo se aplica al costo de la habitación. Si no, el descuento se aplica al costo total de a la reserva.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Sql error cuando intenta crear/borrar un cupón");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Si tiene un código de cupón, por favor escribalo en el cuadro y haga clic en "Guardar cupón"para guardar los detalles de cupón en su reserva.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Guardar cupón');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Cupón guardado en reserva');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Número de cupón no encontrado');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Valor de cupón de descuento');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Descuento de reserva. Código de Descuento válido/valor de los descuentos/configuración de cupón: ');
jr_define('_JOMRES_COM_CACHING','¿Usar la función de almacenamiento de caché Jomres?');
jr_define('_JOMRES_COM_CACHING_DESC','Ponga esto en No para desactivar la función de almacenamiento de caché Jomres.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Elegir idioma');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Elija las opciones de idioma que se muestra en el menú desplegable');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','¿Mostrar el menú desplegable de selección de idioma?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Reservas anticipadas y reservas canceladas');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR',"Estimado/a");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Gracias por registrarse ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Su nombre de usuario es : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Su contraseña es : ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Por favor inicie sesión para ver su reservas ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Cupón guardado');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Cupón borrado');
// Not used yet
jr_define('_JOMRES_COM_GROWL','Usar mensajería Jomres');
jr_define('_JOMRES_COM_GROWL_DESC','Muchas actualizaciones proporcionan retroalimentación en forma de un mensaje de javascript cuando se vuelve a cargar la página, utilice esta opción para habilitar/deshabilitar esta característica.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Usuario");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Contraseña");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Número de teléfono notificaciones");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Por favor utilice el formato 'código del país, número de móvil'. Por ejemplo, el número de móvil en el Reino Unido sería algo así como '447979123456'. Deje en blanco si no desea que ninguna notificación de correo electrónico sea enviada a tu teléfono móvil.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Completar el formulario. Asegúrese de que introduzce la IP bloqueada (la IP de este servidor), ajustar Callback a HTTP POST. Tendrá que establecer la devolución de llamada IP ".$JomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback y un identificador de usuario y contraseña. <br/>
Si se registra más de una conexión de la API, el nombre de la descripción que ha introducido para cada una debe ser único - no se puede tener múltiples APIs con el mismo nombre <br/>.
Después de enviar el formulario, sus datos de autenticación se mostrarán, incluida la identificación única de cada conexión de la API (api_id). Estos datos de autenticación se requieren cuando se conecta a la pasarela Clickatell para enviar un mensaje. <br/>
<br/>
Utilice su nombre de usuario, contraseña y api_id para rellenar los campos anteriores.

<br/>
<br/>
");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','¿Usar moneda global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Ponga esto en sí para forzar todas las propiedades que utilicen la misma moneda (ej. & # 8 3 6 4 ;) ');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Mostrar el formulario Lista de reserva de la habitación accesible');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Mostrar el formulario Lista de reserva Máximos ocupantes');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Tenga en cuenta que los precios de habitación indicados son estimaciones y el precio total de la reserva no se calculará hasta que haya agregado una habitación o habitaciones a su selección.");
jr_define('_JOMRES_LASTEDITED_DB','Última edición Plantilla de base de datos');
jr_define('_JOMRES_LASTEDITED_DISK','Última edición Plantilla Disco');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Base de datos de alerta plantilla');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Plantilla de base de datos puede estar fuera de fecha');
jr_define('_JOMRES_LASTEDITED_WARNING','Si hay un icono contra una plantilla, entonces Jomres detectó que la plantilla almacenada en la base de datos <strong><i>puede</i></strong> Ser mayor de la que se almacena en el disco, en cuyo caso es posible que la plantilla se haya actualizado en una versión más reciente de Jomres. Si este es el caso, entonces es posible que su plantilla no se pueda beneficiar de una nueva característica de Jomres, o que la funcionalidad existente ya no puede funcionar como se esperaba, y usted debe comparar el archivo en el disco para su personalización para asegurarse de que no está perdiendo nuevas características.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Suscripción paquetes");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nombre");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Descripción");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publicado");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frecuencia");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Periodo de prueba");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Cantidad de prueba");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Importe total");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Límite habitaciones"); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Límite propiedades");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frecuencia: M/Q/B/A Mensual/Cuatrimestral/Bianual/Anual");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Periodo de prueba: entrar entero, 0 (cero) no establecer, 1 para un mes, 2 para dos meses, etc");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Suscribirse");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Por favor, introduzca/actualice su información de suscriptor. Tenga en cuenta que todos los campos son obligatorios.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Nombre");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Apellidos");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Dirección");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"País");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Código Postal");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Se necesita una suscripción válida para crear nuevas propiedades. En este momento, usted ha comprado suscripciones para ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," Propiedad publicada(s). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Puede aumentar el número de propiedades que puede crear por <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>comprando más paquetes de suscripción aquí.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Ha utilizado ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," paquetes de la propiedad. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Para ver una lista de sus propiedades actuales, haga clic <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>aqui</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Para ver una lista de los paquetes de suscripción disponibles actualmente, haga clic <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>aqui</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Por desgracia, no se puede publicar esta propiedad usted ha alcanzado el número máximo de paquetes de propiedad disponibles.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Gracias por crear una suscripción para incluir su propiedad en nuestro servidor. Una vez que su factura esté marcada como pagada (puede haber un retraso en función de Paypal), por favor <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>pulse aquí para seguir creando su propiedad/es.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Lamentamos que no haya elegido suscribirse a nuestro servicio. Por favor, háganos saber si hay algún modo que podamos ayudarle más");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Lo sentimos, pero usted ha llegado al límite de la cantidad de propiedades que se pueden publicar en este sistema en cualquier momento. Puede aumentar el número de propiedades que se pueden publicar por <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>comprando más paquetes de suscripción aquí.</a> ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Utilice la funcionalidad de manejo de suscripciónes");
jr_define('_JOMRES_COM_NEWUSER','Crear nuevo usuario en reserva');
jr_define('_JOMRES_COM_NEWUSER_DESC','Crear nueva cuenta de usuario en usuarios no registrados.');
jr_define('_JOMRES_CLICKTOREGISTER','Haga clic aquí para registrar su propiedad');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Suscripciones activas");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id de suscripción Pasarela");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Gracias por su reserva - siga nuevos detalles de usuario");
jr_define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
jr_define('_JOMRES_CONTROLPANEL','Panel de control');
jr_define('_JOMRES_COM_FAUXHEADERS','¿Salida Jomres encabezados Javascript en el cuerpo del html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Ponga esto a Sí, si usted está teniendo problemas con mootools y Jomres\'s jQuery en conflicto en el IE. Esto obligará a Jomres a llamar las salidas del Javascript dentro del cuerpo de la página en lugar de la zona del HEAD, que no es HTML válido, sin embargo, parece resolver el probema con jQuery y Mootools en conflicto entre sí.');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Mostrar Factura');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Mostrar Facturas');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Añadir mi propiedad a este sitio');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Cuidado : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Usted puede tener un paquete de forma gratuita en el sistema si lo desea, mediante la creación de un paquete y establecer tanto la cantidad de prueba y la cantidad completa a 0,00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Lo sentimos, pero este ID de paquete no se reconoce.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Lo sentimos, usted ya está suscrito a un paquete gratuito, usted no puede suscribir el paquete de nuevo.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pendiente de pago <b>1:</b> Creado <b>2:</b> Cancelado <b>3:</b> Fin de período");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Mi cuenta");
jr_define('_JOMRES_COM_YOURBUSINESS','Los datos de su negocio');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','Nombre negocio');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Edificio número');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTA: Los tipos impositivos siguientes están diseñados para su uso por el mercado americano. Si desea utilizar una tasa impositiva plana (por ejemplo IVA) a su alojamiento, por favor, elija un tipo impositivo de la opción anterior.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Factura No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Seleccione las fechas en que desea aplicar la reserva negra. Cuando haya seleccionado las fechas apropiadas, haga clic en el botón "Aplicar" para rechequear la disponibilidad. <br/> 
<br/> 
Si la propiedad tiene una o más reservas para el periodo deseado, entonces usted no será capaz hacer la reserva negra hasta que las otras reservas/reservas negras, hayan sido canceladas/retiradas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Lo sentimos, no puede hacer reserva negra en esta propiedad esas fechas.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Puede hacer reservas negras para esas fechas');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Su propiedad está configurada para cargar por persona por noche, pero usted no tiene ningún tipo de evaluación creada o publicada, por favor, crear y publicar uno o más tipos de huéspedes. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','No tiene ninguna tarifa configurada todavía, usted no podrá realizar ningún tipo de reservas para su propiedad.');
jr_define('_JOMRES_EDITINGMODE_ON','Modo edicion activo');
jr_define('_JOMRES_EDITINGMODE_OFF','Modo edicion desactivado');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','¿Cargar depósito variable?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Depósitos variables permite definir si le gustaría cobrar la totalidad de la reserva si la fecha de llegada está a N días de "hoy". Establezca esta opción en Sí para activar la función, e introduzca el número de días más adelante, así por ejemplo si el día de llegada es en el plazo de 60 días, entonces como cantidad del depósito será cargado el importe total, de lo contrario la cantidad se basará en el depósito de las opciones configuradas anteriormente.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','El número de días, en el que el importe total será cobrado como depósito.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','¿Enviar mensajes de correo electrónico de contacto del propietario a la dirección alternativa?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Establezca esta opción a Sí si desea que los mensajes de correo electrónico de contacto del propietario se envien a la siguiente entrada. Establezca en No para enviar los mensajes de correo electrónico a la dirección de correo electrónico que se define en el área de configuración de la propiedad.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Dirección de correo electrónico Alternativa de contacto del propietario.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Email de confirmación ha sido enviado. Usted puede cerrar esta ventana ahora.');
jr_define('_JOMRES_REALESTATE_TITLE','Listado de inmuebles en venta');
jr_define('_JOMRES_REALESTATE_YESNO','¿Es esta propiedad una lista de Inmuebles en venta?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Seleccione Sí, si usted está vendiendo la propiedad, seleccione No si se trata de un hotel/Alojamiento Cama y Desayuno/hostal/propiedad tipo chalet, donde se le ofrece el alquiler o habitaciones en la propiedad para el alquiler a corto plazo y va a utilizar este sistema para la toma de reservas .');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contacte con el agente');
jr_define('_JOMRES_INVOICE_MARKASPAID','Marcar factura como pagada');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Factura marcada como pagada');
jr_define('_JOMRES_APIKEY_REMAKE','Hacer nueva API Key');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','¿Usar Google para la traducción inicial?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','Esta función es nueva y experimental, así que use bajo su cuenta y riesgo. El propósito de la función es consultar la herramienta Google de traducción para configurar automáticamente las traducciones una determinada propiedad. Tenga en cuenta que esta característica sanea todas las entradas, así que si usted utiliza un editor HTML para dar formato a los datos de su propiedad, entonces esto va a romper ese formato.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','¿Es una instalación de una sola propiedad?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Si esta opción está establecida en Sí, la interfaz Jomres a usuarios no autorizados se simplifica enormemente. Por defecto las llamadas a Jomres, en vez de ser dadas como una lista de las características, sólo llevará al cliente a la central de reservas para la primera propiedad en el sistema. Administradores de la propiedad tampoco podrán ver el botón Detalles de la propiedad de vista previa o el botón Agregar nueva propiedad. Ideal si sólo quiere una lista de bienes y tener reservas para ellas.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER','¿Usar la funcionalidad HTML purifier?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Active esto para que Jomres use librería html purifier (http://htmlpurifier.org/). La librería se utiliza como una capa extra de seguridad cuando se trata de datos de entrada y de salida y se recomienda que la deje habilitada, sin embargo, se utilizará más memoria.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance de pagos');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Tenga en cuenta usted está utilizando el modo de edición con el modo global de edición habilitado. Esto está bien si usted sabe lo que significa el modo de edición global. Si no está seguro si debe utilizar Jomres de este modo, por favor, consulte <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">el modo de edición de página del manual</a> para obtener más información sobre este tema.');
jr_define('_JOMRES_SUPPORTKEY','Clave de Soporte');
jr_define('_JOMRES_SUPPORTKEY_DESC','.Su número clave de soporte (también conocido como el número de licencia). Usted necesitará una licencia actualizada para poder descargar las actualizaciones y complementos para Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Descuento personal');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','¿Registrar propiedades limitadas a un solo país?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Puede asegurarse que los registros de la propiedad se limitan a un solo país mediante el establecimiento de esta opción en Sí y establecer el país en la siguiente opción.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Las propiedades están localizadas en este país : ');
jr_define('_JOMRES_JQUERYTHEME','Tema Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC','Elige un tema jQuery para usar para las pestañas de los detalles de propiedad.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Lo sentimos, pero que la propiedad no está disponible actualmente.');
jr_define('_JOMRES_REVIEWS','Comentarios');
jr_define('_JOMRES_REVIEWS_TITLE','Título comentarios');
jr_define('_JOMRES_REVIEWS_DATE','Publicado en ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Todavía no hay comentarios para esta propiedad.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','¿Le gustaría ser el primero en hacer un comentario sobre esta propiedad?');
jr_define('_JOMRES_REVIEWS_IAGREE','Estoy de acuerdo con este comentario');
jr_define('_JOMRES_REVIEWS_IDISAGREE','No estoy de acuerdo con este comentario');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Valoración media: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Votos totales:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Añadir un nuevo comentario.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Necesita estar registrado para enviar un comentario.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Diganos que opina de este establecimiento : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Este cliente nos dijo : ');
jr_define('_JOMRES_REVIEWS_PROS','Pros: ');
jr_define('_JOMRES_REVIEWS_CONS','Contras: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Enviado el: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Usted ya ha realizado un comentario sobre esta propiedad, no puede publicar otro comentario sobre ella.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Lo sentimos, pero no se permite publicar comentarios en este sitio.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Click para mostrar comentarios');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' usuarios de acuerdo con este comentario. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' usuarios en desacuerdo con este comentario.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' usuario de acuerdo con este comentario. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','usuario en desacuerdo con este comentario.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Gracias por compartir su opinión de este comentario.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Gracias, pero ya ha compartido la opinión de este comentario.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Por favor asegúrese de que todos los campos están correctamente cumplimentados');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Por favor, resuma su comentario introduciendo un título');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Por favor, introduzca un comentario más completo en el cuadro de descripción');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Por favor, introduzca las experiencias positivas como cliente de este establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Por favor, introduzca cualquier experiencia negativa que haya encontrado');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Por favor, califique la amabilidad que recibió por parte del personal');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Por favor, cual es su valoración del establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Por favor, cual es su opinión sobre la limpieza del establecimiento');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Por favor, califique el alojamiento. Era cómodo o incómodo');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Por favor, proporcione su opinión sobre la relación Calidad-Precio');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Por favor, valore los servicios ofrecidos');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Revisión del comentario');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Su experiencia en mayor detalle');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Gracias por enviarnos su opinión.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Gracias por enviarnos su opinión. Será publicada en breve por uno de nuestros moderadores.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','¿Utilizar la función de comentarios de Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','¿Publicar automáticamente los comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Si se establece No tendrá que publicar manualmente los comentarios');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','¿Ajustar el modo test en los comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalmente los Administradores de Propiedad no pueden hacer comentarios. Naturalmente esto no es lo ideal en un sitio en funcionamiento.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Esta es una lista de todas las propiedades. Para ver los comentarios de una propiedad pulse en ella. Desde aquí podrá publicar o borrar comentarios.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Número de comentarios no publicados');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total comentarios');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publicar/Despublicar comentario');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Borrar comentario');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Informe de comentario');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Revisión de los comentarios');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Por favor, introduzca su informe');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','¿Ve algo en este comentario que sea cuestionable o inexacto? Informenos y veremos que podemos hacer por usted.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Enviar');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Informe creado por ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Los informes son publicados por los usuarios que pueden estar en desacuerdo con el contenido de un comentario. La única manera de eliminar un informe es eliminar la revisión.');
jr_define('_JOMRES_REVIEWS_RATING','Ratings (1 = escaso 10 = excelente) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitalidad  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Localización ');
jr_define('_JOMRES_REVIEWS_RATING_3','Limpieza ');
jr_define('_JOMRES_REVIEWS_RATING_4','Alojamiento ');
jr_define('_JOMRES_REVIEWS_RATING_5','Relación calidad-precio ');
jr_define('_JOMRES_REVIEWS_RATING_6','Servicios ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Comentado por : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Ocultar comentarios');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','¿Mostrar Formulario de reserva en la página de detalles de la propiedad?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ponga esto en Sí para mostrar el formulario de reserva en la página de detalles de la propiedad. Si se establece en No, aparecerá un enlace en la página de detalles de la propiedad apuntando al formulario de reserva.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','¿Los precios incluyen impuestos?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','¿Los precios son impuestos incluidos? Si sus precios incluyen impuestos seleccione Si. Si no están incluidos seleccione No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Impuesto de extras:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','El campo de día de la semana le permite establecer una tasa para un determinado día de la semana, una vez que haga clic en el botón de día de la semana todos los días de la semana se ajustarán a esa tasa.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Los selectores de fecha y la tarifa de entrada le permiten establecer un precio para un intervalo de tiempo dado. Elija una fecha de inicio y fin, introduzca un precio, y haga clic en el botón de fijación de tarifas.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Inicio intervalo');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Fin intervalo');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Tarifa');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Fijar las tarifas');
jr_define('_JOMRES_PARTNERS_TITLE','Socios');
jr_define('_JOMRES_CALENDAR_TODAY','Hoy');
jr_define('_JOMRES_CALENDAR_PREV','Anterior');
jr_define('_JOMRES_CALENDAR_NEXT','Siguiente');
jr_define('_JOMRES_CALENDAR_RTL','falso');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Habitación ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','huésped(es). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Hemos asignado el número de huéspedes a sus habitaciones. Si desea cambiar esta asignación, deberá contactar con el hotel después de hacer la reserva. Se pueden aplicar cargos extra si cambia de las asignaciones.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Tenga en cuenta que su propiedad no se ha publicado todavía, sólo se puede ver la propiedad, los visitantes del sitio no la verán");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Orden de resultados predeterminado para búsqueda por defecto');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Cambiar esta opción para cambiar la orden en que los resultados de la búsqueda son presentados de forma predeterminada.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Mostrar resultado de la búsqueda para menú desplegable');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Estilo de lista habitaciones');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','En el formulario de reserva, utilizando el estilo "Clásico", el estilo de lista de habitaciones le ofrece habitaciones individuales para los clientes. Con el estilo "Tipo de habitación", los huéspedes eligen el número de habitaciones de tipo X (por ejemplo, 2 x dobles) en lugar');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Clásico');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Tipo habitaciones');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)Comprobar de la disponibilidad');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Actualizar la lista de habitaciones disponibles');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculando total');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Actualización terminada');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Calendario de la semana comienza el día, Domingo o Lunes');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','¿Sólo los clientes del establecimiento pueden hacer comentarios?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Establecer en Sí si desea restringir comentarios sólo a aquellos usuarios que hayan sido huéspedes en este establecimiento.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Por habitación');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Huéspedes por habitación : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Huéspedes por reserva : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Número de habitaciones');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tarifa de precios por defecto');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Esto solo se aplica a nuevas tarifas");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Años a mostrar");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Define el número de años a mostrar cuando se edita una tarifa microgestión");
jr_define('_JRPORTAL_MONTHS_LONG_0','Enero');
jr_define('_JRPORTAL_MONTHS_LONG_1','Febrero');
jr_define('_JRPORTAL_MONTHS_LONG_2','Marzo');
jr_define('_JRPORTAL_MONTHS_LONG_3','Abril');
jr_define('_JRPORTAL_MONTHS_LONG_4','Mayo');
jr_define('_JRPORTAL_MONTHS_LONG_5','Junio');
jr_define('_JRPORTAL_MONTHS_LONG_6','Julio');
jr_define('_JRPORTAL_MONTHS_LONG_7','Agosto');
jr_define('_JRPORTAL_MONTHS_LONG_8','Septiembre');
jr_define('_JRPORTAL_MONTHS_LONG_9','Octubre');
jr_define('_JRPORTAL_MONTHS_LONG_10','Noviembre');
jr_define('_JRPORTAL_MONTHS_LONG_11','Diciembre');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Proceso de gestión de Propiedad");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Hay diferentes procesos de gestión en función de la forma que desee listar su establecimiento o negocio.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Alquiler");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Elija la opción de alquiler si usted está reservando habitaciones de un establecimiento (por ejemplo, Hotel/B & B/Villa/Apartamento)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Inmobiliaria/listado simple");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Elija la opción de Inmobiliaria si no ofrece ninguna funcionalidad de reserva en todo el sitio, (por ejemplo, una establecimiento/artículo para la venta)");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Ponga esto en Sí para reducir el número de opciones disponibles para los administradores de la propiedad en la sección Configuración General. Esto es útil si no quiere que los administradores de propiedades dispongan de muchos ajustes, en su lugar puede editar jomres_config.php para definir las opciones por defecto del establecimiento.');

jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Por favor, seleccione una opción para su reserva');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Activa editores HTML en la página de edición de detalles de propiedad. Además, si se establece en No, todos los html excepto p y br son despojados de todo lo introducido y se muestra texto.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Vista de administración De Propiedad");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Vista previa Sitio");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"¿Mostrar el selector de zona horaria en la barra de herramientas del administrador de propiedad?");

jr_define('_JOMRES_PARTNER_DISCOUNT',"Descuento Asociado ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Buscar usuario");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduzca algunos caracteres para buscar un usuario.<br/> Cuando seleccione un usuario automáticamente se añadirá como Asociado y le llevará a la página siguiente donde puede asignar propiedades y descuentos para el usuario.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Asociados existentes");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Elija un Asociado para ser llevado a su página de administración.");

jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Asociado :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Buscar por una propiedad");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Introduzca algunos caracteres del nombre de propiedad y seleccione una propiedad.<br/> Cuando usted seleccione la propiedad se agregará a la cartera del Asociado, sin embargo, aún no disfrutará de los descuentos, será necesario que los configure usted mismo.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Propiedades actuales");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Haga clic en una propiedad para modificar la configuración de descuento del Asociado para esa propiedad.");


// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE',"¿Suspendido? <br/>(Haga clic para suspender a un Administrador, esto automáticamente anula la publicación de todas sus propiedades) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Haga clic en el icono de suspensión (el icono con el hombre y el marca verde) para suspender a un Administrador. Esto significa que el Administrador no será capaz de realizar funciones de gestión de la propiedad y todas sus propiedades serán despublicadas. Super Administradores de propiedad no puede ser suspendidos.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"Esta cuenta ha sido suspendida, no es posible administrar su Propiedad(es) con esta cuenta.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Cuenta de Administrador suspendida");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Cuenta de Administrador rehabilitada");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Tenga en cuenta que su cuenta de Administrador de la propiedad ha sido suspendida. Usted no será capaz de realizar las funciones de gestión de la propiedad hasta que la cuenta haya sido restaurada.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Tenga en cuenta que su cuenta de Administrador de propiedad ya está activa. Usted puede seguir desempeñando las funciones de administración de propiedades. Por favor, ingrese en cuenta y asegurese de que la Propiedad(es) correcta han sido publicadas. Gracias.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Eliminar favoritos');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Archivo de datos de Reservas');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','El archivo de reserva de datos es un volcado de la información de la reserva, la información es capturada después de confirmar la reserva haciendo clic. Pase el ratón sobre una de fecha para ver el volcado de los datos en bruto. La información es almacenada en la tabla XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Editar cuenta');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Búsqueda usuarios");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduzca algunos caracteres de su nombre de usuario para la búsqueda de un usuario. <br/> Cuando se selecciona un usuario usted automáticamente puede añadirlos como Administradores y se le llevará a la página siguiente donde puede asignar propiedades y derechos de acceso para dicho usuario .");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Actuales Administradores");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Elegir un Administrador para ser llevado a la página de administración del gestor.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Buscar por número de huéspedes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Mostrar la búsqueda número de huéspedes en menú desplegable");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Buscar por número de estrellas");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Mostrar la búsqueda número de estrellas en menú desplegable");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Número de huéspedes');
jr_define('_JOMRES_SEARCH_STARS','Número de estrellas');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Facturas de Comisión");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Número de propiedades");

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"¿Cargar Jomres jQuery library?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"Puede establecer esto a NO si usted tiene una plantilla que utiliza jQuery. Esto puede resolver los problemas de conflicto jquery en algunas plantillas, pero no todos.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Si utiliza Joomfish, debe establecerse a No, y usar  el selector de idiomas de Joomfish. El conmutador siempre está habilitado en el área del administrador, ya que se necesita cuando se utiliza la función de etiquetas de traducciones.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Las miniaturas se crean automáticamente para las imágenes cargadas.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Ancho máximo de miniaturas pequeñas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Las miniaturas pequeñas se utilizan en la lista de propiedades, mientras que las miniaturas de tamaño mediano se utilizan en la cabecera de propiedad.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Alto máximo de miniaturas pequeñas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Ancho máximo de miniaturas medianas (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Alto máximo de miniaturas medianas (px).');
jr_define('_JOMRES_TOUCHTEMPLATES','Traducción etiquetas');

jr_define('_JRPORTAL_ROI_TAB',"ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"¿Usar la funcionalidad de Comisionista?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Ponga esto en Sí para mostrar el resultado de las facturas de la comisión que se han planteado.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"¿Administrador de las reservas crea facturas de comisión?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Si un Administrador hace una reserva, ¿eso también crea una línea  en factura de la comisión?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Se ha creado una nueva factura de Comisión");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Se ha creado una nueva factura de Comisión la cual requiere su atención. Por favor, haga clic en el siguiente enlace para ver la factura (puede que tenga que estar conectado).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"¿Auto suspender a los administradores cuando las facturas son marcadas como pendientes?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Umbral para la autosuspensión");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Este umbral es el número de días que un administrador tiene que pagar una factura antes de que sea suspendido y no publicadas sus propiedades.");


//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Idioma de contexto');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Esta característica permite a Jomres el uso de etiquetas que son apropiadas para su enfoque actual, por lo que si su interés se centra en una Yacht Brokerage (Venta de yates), cambiar el contexto permitirá Jomres presentar las etiquetas de un archivo de idioma diferente. Por ejemplo, si establece el contexto para "Yacht Brokerage", entonces Jomres primero se encuentra el lenguaje actual, a continuación, buscará en /Jomres/languages un sub-directorio llamado "yachtbrokerage". Si el archivo existe en el lenguaje actual, el archivo será utilizado. Si no, entonces Jomres buscará un archivo de idioma Inglés en ese mismo directorio. Si no se encuentra, Jomres utilizará el archivo de idioma para el idioma seleccionado en el directorio /Jomres/languages.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Configuración avanzada del sitio');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Establezca esta opción a Sí si desea utilizar las opciones avanzadas de configuración del sitio. Si usted acaba de empezar con Jomres, entonces le recomendamos, que por ahora deje esto en No, ya que la instalación por defecto es suficiente para empezar, debe agregar Jomres al menú principal y acceder a la interfaz como "admin" y comenzar a configurar su propiedad(s). Tenga en cuenta que muchas de la opciones avanzadas sólo serán aplicables a las instalaciones de Jomres Silver, los usuarios Jomres Lite no serán capaces de sacar el máximo provecho de la totalidad de las características permitidas.');

jr_define('_JOMRES_CONFIG_JQUERY_UI',"Cargar Jomres jQuery UI library?");

jr_define('_JOMRES_SORTORDER_PRICE_DESC','Precio (descendente)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Precio (ascendente)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','¿El resumen de precios y estimaciones debe ser un precio por noche/semana/mes?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Por noche');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Por semana');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Por mes');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Por persona');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','semana(s) en ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','mes(es) en ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','¿Cómo debe trabajar la opción de búsqueda por número de personas??');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Afecta a todas las búsquedas. Cuando usamos la función de búsqueda número de invitados, buscaremos propiedades cuyas tarifas permitan alojar un número mayor o igual al número elegido ¿Número igual o mayor? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Por favor espere, su solicitud está en proceso y será redirigido a la página web de Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Si no es automáticamente dirigido a Paypal en 5 segundos ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click aquí');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Reserva válida a partir de");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Reserva válida hasta");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Nombre Huésped");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Los códigos de descuento pueden ser generados y pasados ​​a los clientes como un incentivo para hacer las reservas.<br/>Fechas Válidas desde/hasta para referirse a las fechas en que puede ser una reserva hecha, mientras que Fecha Reserva válida desde/hasta se refiere a las fechas en que la reserva que debe cubrir el cupón sea válida. Si la reserva se encuentra fuera de ese período las tarifas normales se aplicarán a los días fuera de ese período.<br/>Si desea que la reserva esté disponible para unos huéspedes específicos, elija el nombre de los huéspedes en el menú desplegable para limitar el cupón sólo a esos huéspedes.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Con su cupón, esta reserva ha sido rebajada de ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," a ");

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Ponga esto en No para desactivar la carga tanto de Jquery UI javascript como de archivos CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"¿Cargar Jomres jQuery UI CSS library?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Ponga No sólo para desactivar el archivo jquery UI CSS.");

//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND','second');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minute');
jr_define('_JOMRES_DATEPERIOD_HOUR','hour');
jr_define('_JOMRES_DATEPERIOD_DAY','day');
jr_define('_JOMRES_DATEPERIOD_WEEK','week');
jr_define('_JOMRES_DATEPERIOD_MONTH','month');
jr_define('_JOMRES_DATEPERIOD_YEAR','year');
jr_define('_JOMRES_DATEPERIOD_DECADE','decade');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','from now');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE','Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
jr_define('_JOMRES_IMAGE','Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

jr_define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

jr_define('_JOMRES_QUICK_INFO',"Quick Info");

jr_define('_JOMRES_MENU_SHOW',"Show");
jr_define('_JOMRES_MENU_HIDE',"Hide");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
jr_define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


jr_define('_JOMRES_DEBUGGING_SUBJECT','Subject');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
jr_define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta title');
jr_define('_JOMRES_METADESCRIPTION','Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES',"Properties found");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

jr_define('_JOMRES_MYPROPERTIES','My properties');


jr_define('_JOMRES_CART_TITLE','My proposed bookings');
jr_define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
jr_define('_JOMRES_CART_OR',' or ');
jr_define('_JOMRES_CART_SAVEFORLATER','Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART','View cart');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

jr_define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC',"");


jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

jr_define('_JOMRES_COMPARE',"Compare");
jr_define('_JOMRES_REMOVE',"Remove");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

jr_define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
jr_define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Read more...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
jr_define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
jr_define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE',"Enable safe mode?");
jr_define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");

jr_define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT',"Next");
jr_define('COMMON_CANCEL',"Cancel");
jr_define('COMMON_SUBMIT',"Submit");
jr_define('COMMON_SAVE',"Save");
jr_define('COMMON_DELETE',"Delete");
jr_define('COMMON_RETURN',"Return");
jr_define('COMMON_CLOSE',"Close");
jr_define('COMMON_BACK',"Back");

jr_define('COMMON_HOME',"Home");

jr_define('COMMON_NEW',"New");

jr_define('COMMON_SEND',"Send");

jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Public key");
jr_define('RECAPTCHA_PRIVATE_KEY',"Private key");


jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


jr_define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

jr_define('COMMON_ACTION',"Action");
jr_define('COMMON_VIEW',"View");

jr_define('BACKTOTOP',"Back to top");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

jr_define('_JOMRES_INPUTFILTERING',"Input filtering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

jr_define('COMMON_PRINT',"Print");

jr_define('COMMON_EDIT',"Edit");
jr_define('COMMON_COPY',"Copy");


jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");

jr_define('_JOMRES_BEEZ_WARNING',"Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "About Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , "1 main");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance");
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL" , "Access Control");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "developer tools");
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE" , "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "languages");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "income generation");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS" , "bookings");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "site structure");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT" , "user management");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (online)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "My Account (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS" , "scheduled tasks");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal functionality");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin manager");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integration");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "reports/statistics");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES" , "taxes");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS" , "Tickets (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Upgrades");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "payment methods");

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Tariff default");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "This only applies to new tariffs");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "Years to show");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Defines the number of years to show when editing a tariff type");

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logout");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "reserve");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , "management");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "misc");
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS" , "SRPs");

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Edit country");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Country id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Country name");

jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Edit region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Region name");


jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List countries");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Export definitions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.");

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Translate locales");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Translate lang file strings");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Property list default layout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Stay for a minimum of");
jr_define( "_JOMRES_NIGHTSFOR" , " nights for ");


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS" , "Property list images, show the property image as a gif if slideshow images are available.");
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY" , "Show as GIFs only if the property is a featured property.");

jr_define( "_JOMRES_AGENT" , "Agent");
jr_define( "_JOMRES_AGENT_DETAILS" , "Agent details");
jr_define( "_JOMRES_AGENT_LISTINGS" , "Agent's listings");
