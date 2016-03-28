<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
Spanish Translation by David Pintado.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Reservas rápidas' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Mostrar perfiles' );
jr_define( '_JOMRES_COM_MR_QUICK______DESC', 'Dejado en blanco intencionadamente' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Configuración general' );
jr_define( '_JOMRES_COM_MR_BACK', 'Atrás' );
jr_define( '_JOMRES_COM_MR_YES', 'Sí' );
jr_define( '_JOMRES_COM_MR_NO', 'No' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Nuevo' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Nueva propiedad' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Nueva característica de la propiedad' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Huésped nuevo' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Guardar' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Fecha de llegada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Fecha de salida' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Blanco' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Asignar las funciones del Administrador' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'Identificación' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Nombre del usuario' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Autorizado actual' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Propiedad predefinida' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Cambiar esto' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Nivel de acceso' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Usuario modificado' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'No está aplicado' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Recepción' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Administrador propietario' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Todas las reservas' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Nuevas reservas (depósitos sin pagar)' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editar reservas: ' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Llegadas/Salidas' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Huésped' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Habitación' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Pago' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Nombre' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Apellido' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Requisitos especiales' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Observe por favor que algunos requisitos especiales pueden incurrir en recargos.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Cancele la reserva' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'El número o nombre de la casa' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Calle' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Código  postal' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de teléfono' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Número móvil' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Dirección electrónica' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'No puede cancelar esa reserva, porque el huésped confirmó la entrada' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depósito no pagado' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Confirmar cancelación' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Reserva cancelada' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Días para llegar' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Tipo de reserva' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Negro' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepción' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Nombre de la habitación' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Número de la habitación' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Piso' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Acceso denegado' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Máximo de clientes' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Tipo de habitación' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Descripción de la habitación' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista de características de la habitación' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depósito pagado' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Introducir depósito' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Total a pagar' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Ref. de Depósito' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Número de Reserva' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depósito' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depósito salvado' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Habitaciones disponibles' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Propiedad' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Tipo de habitación' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Editar detalles de huésped' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Apellido' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Casa' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Calle' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Ciudad' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Código Postal' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Teléfono' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Móvil' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'No. de Tarjeta de Crédito' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Emisión de Tarjeta de Crédito' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Caducidad de Tarjeta de Crédito' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'No. emisión' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Titular de la Tarjeta de Crédito' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seleccione una habitación' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Días de estancia' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Número de huespedes' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Total' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Vea habitaciones y configuración de las características' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Habitación' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Hb características' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Hb tipo' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Propiedades' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Prop. características' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Habitación' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tipo' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Número' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Piso' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Acceso denegado?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. de personas' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Características' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Habitación agregada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Editar el artículo' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Hb características' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Descripción de la característica' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Característica del sitio agregada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Característica del sitio actualizada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Hb tipo' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Tipo abreviatura del sitio' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Descripción de tipo de la habitación' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Tipo de habitación agregada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Tipo de habitación actualizada' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Editar artículo' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Calle' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Ciudad' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Región' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'País' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Codigo Postal' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telf.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Características' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Propiedad agregada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Propiedad actualizada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Característica de la propiedad' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Característica de la propiedad abrev.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Descripción completa de característica de la propiedad ' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Característica de la propiedad agregada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Característica de la propiedad actualizada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Título de tarifa' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Descripción' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Válido de' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Válido hasta' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Tarifa por noche' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Dias mínimos' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Dias máximos' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Personas mínimas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Personas máximas' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Tipo de la Hb' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorar PPPN' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Permitir fines de semana' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarifa agregada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarifa actualizada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Editar artículo' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Copiar artículo idéntico' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarifa borrada' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Editar la tarifa' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Dias festivos' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Reserva guardada' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Reservar una habitación' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Entrada de huésped' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Salida de huésped' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Listar las reservas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Listar las NUEVAS reservas' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'I N I C I O' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Administración de huésped' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Administración de propiedad' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Verifique la disponibilidad' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Confirme sus datos' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Nombre' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Apellido' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Número de la Casa' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Calle' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Ciudad' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Código Postal' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Número de telefono' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Móvil' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'No hay habitaciones disponibles capaces de satisfacer los parámetros especificados' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Gracias por hacer su reserva con nosotros. Esperamos que usted goce de su permanencia.<br><br> <b>Por favor, note que esto es sólo una  reserva preliminar, y no será confirmada hasta que usted reciba su email de confirmación por nuestra parte.</center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Entrada de huésped ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Seleccionar huésped ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Huésped entrada' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Ningún huésped ha debido llegar hoy' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Salida de huésped ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Ningún huésped ha debido salir hoy' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Suplementos' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Tarifas & Moneda' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Descuentos' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Carpetas uploads' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Configuración Actual' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Explicación' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Solo suplementos por persona' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Cerciónese de marcar "Sí" si usted quiere cargar solo suplementos de persona' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Solo cargar suplemento de persona' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '¿El Depósito requiere porcentaje?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '¿El depósito es un porcentaje de la suma de la reserva? Si no, el depósito aplicado es un valor fijo' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'El depósito requirió el valor' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'Por persona, por noche' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Escoja "Sí" si usted quiere cargos por persona-por-noche. Si no, entonces los costos se calcularán en base a habitación-por-noche' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Tamaño de la carpeta' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. Tamaño de carpeta en Kilobytes' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Reservado' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detalles de la reserva ' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Se le recuerda a que una reserva es un contrato legalmente obligatorio, si por alguna razón usted tiene que cancelar o acortar su reserva entonces será aún responsable de pagar la cantidad completa.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>La cancelación y el acortamiento se cargan a su cuenta</i> Si usted cancela sus vacaciones, la cancelación debe ser confirmada por escrito. Los cargos por cancelación son:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'La fecha de la llegada a 14 días' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Imprima la carta de confirmación' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Impresión de la factura' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Número de noches: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Contrato inicialmente acordado: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Costo por noche: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Suma total' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Gracias en el' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Esperamos verle otra vez.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Imprimir factura' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Agregue el servicio para facturar' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Descripción del servicio' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Valor del Servicio' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Otros artículos facturados' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Otros artículos facturados, valor total: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Artículo agregado a la factura' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Subir imagen ' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Archivo subido' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Sólo se permiten cargar archivos de tipo::\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Por favor escoja un archivo antes de subir' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'Por favor el archivo debe contener sólo caracteres alfanuméricos y ningún espacio.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'El tamaño del archivo excede el máximo establecido por el Administrador.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'carpeta NO cargada.' );
jr_define( '_JOMRES_FILE_UPDATED', 'Su carpeta se ha cargado.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS Calendario' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Calendario carpeta de idioma' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Escoja el fichero del idioma que se debe utilizar en el calendario de Javascript. Por favor note que algunos de los calendarios pueden estar defectuosos. Vea http://sourceforge.net/ para más información' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS Calendario CSS' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Escoja el fichero de estilos CSS que se debe utilizar en el calendario de Javascript' );
jr_define( '_JOMRES_COM_A_ODDS', 'Probabilidades y términos' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Llamar lista de Minicomponentes' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Marque esta opción a Si para ver un log de los minicomponentes utilizados al final de la hoja después de que Jomres complete su ejecución. Es útil si estás intentando identificar que Minicomponentes están llevando a cabo ciertos servicios.' );
jr_define( '_JOMRES_FILE_DELETE', 'Borre esta imagen' );
jr_define( '_JOMRES_FILE_DELETED', 'El fichero se borró' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Borrar' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Incapaz de eliminar esta habitación, ya hay reservas. Cancele esas reservas y vuelva a intentarlo.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Carcaterística de habitación eliminada' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Borre la característica de la habitación' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Imposible eliminar esta característica de la habitación, está asignada u ocupada. Elimine la característica de esas habitaciónes y vuelva a intentarlo.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Característica de la habitación borrada' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Borrar la característica de la propiedad' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Imposible eliminar esta característica de la propiedad, está asignada. Elimine la característica de esta propiedad y vuelva a intentarlo.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'La característica de la propiedad se borró' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Borre tipo de la habitación' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Imposible eliminar este tipo de la habitación/propiedad, está asignada a una habitación. Pruebe a reasignarla a otro tipo de habitación/propiedad entonces pruebe otra vez.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Imposible eliminar este tipo de habitación, esta asignada a una tarifa. Pruebe a reasignar la tarifa a otro tipo de habitación/propiedad entonces pruebe otra vez.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Tipo de habitación borrada' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Borre la propiedad' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'La propiedad se borró' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Usted no tiene los permisos para borrar esta propiedad.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Anchura de imagen grande' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Haga click para ver el mapa' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Descripción de la propiedad' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'horario de entrada' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Actividades del área' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Direcciones' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Aeropuertos' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Otros transportes' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Políticas y reclamaciones' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Dirección' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Visitantes pueden reservar online' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Ponga esto a "SI" para asegurar que los visitantes puedan reservar una habitación online.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Reservas para una período fijo' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Si pone esto en "SI" las reservas serán por un período fijo. Si se pone en "NO", entonces asegurese que el "día predefinido de llegada" se puso en "SI" (si no quiere forzar al cliente  a llegar un día específico) en este caso no conseguirá muchas entradas al calendario de disponibilidad' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Período de Reservas: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Reservar una Hb' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max. períodos, p.e. 3x7 períodos = 21 dias' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Es una habitación para solteros?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'P.e. si estas alquilando una propiedad, y no hay habitaciones en esa propiedad. En esto caso hay que asegurar que ha registrado una habitación en esa propiedad.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Reservar' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Confirmar la reserva' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Lunes' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Martes' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Miércoles' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Jueves' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Viernes' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sábado' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Domingo' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Lu' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Ma' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Mi' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Ju' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Vi' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Sa' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Do' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'calendario de disponibilidad.' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'El color del tipo de letra para la fecha actual' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'El color del tipo de letra por días en el mes de despliegue' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'El color del tipo de letra por días no en el mes de despliegue' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Color de fondo por días cuando la propiedad/espacio está disponible' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Color de fondo por días cuando no se muestra mes' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Color de fondo por días ocupados' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Color de fondo para reservar provisionalmente los espacios (reservas para un depósito que no se ha tomado)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Color de fondo para fechas atrasadas' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Ocupado/no disponible' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Disponible para reservas' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Reservas provisionales' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Día predefinido de llegada' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Sólo para los sitios que ofrecen las reservas fijas del período. Escoja el día en que deben empezar las llegadas.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Día fijo de llegada' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Período de la estancia (días)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Mostrar la disponibilidad?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Ponga esto a "Sí" para mostrar los calendarios de disponibilidad' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Disponibilidad' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Click en una fecha libre para ver el formulario de reservas.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Reservas negras' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nuevas Reservas negras ' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Borrar huésped' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Huésped borrado' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Incapaz de borrar a este huésped ya que tiene reservas abiertas. Cancele las reservas y pruebe otra vez.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Costo actual de la habitación: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Fumar' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', 'No importa' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Formato de salida del Calendario' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Eso permite cambiar el formato de salida de los datos' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Formato de entrada del Calendario' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Eso permite cambiar el formato de entrada de los datos' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Las reservas fijas del período permiten interrupciones cortas' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Longitud de interrupción corta' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publicado' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Auditoría' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Fecha' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Tiempo' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Usuario (Nombre de usuario)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Operación' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Vea detalles' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtre en la fecha' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Filtre en el nombre de usuario' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Filtre en la operación' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Estado' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Llegada Pendiente' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Llegadas hoy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Residente actual' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Sale hoy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Salida atrasada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'No ha llegado' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Usuario desconocido' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Habitación creada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Habitación actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Habitación borrada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Característica creada de Hb' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Característica actualizada de Hb' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Característica borrada de Hb' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Tipo de Hb insertada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Tipo de Hb actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Tipo de Hb borrada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Propiedad creada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Propiedad actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Propiedad borrada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Característica de propiedad creada de propiedad' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Característica de propiedad actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Característica de propiedad borrada' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Configuración de propiedad editada' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Propiedades publicadas' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifa creada' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifa actualizada' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Tarifa borrada' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Agregar cargos por servicios' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Huésped Entrada' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Huésped Salida' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Depósito ingresado' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Huésped creado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Huésped actualizado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Huésped borrado' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Habitación reservada' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Extra creado' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Extra Actualizado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Extra Borrado' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Extra Extra.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Reserva negra introducida.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Reserva negra borrada.' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Extra' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Descripción' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Nombre' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Precio' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra actualizado' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Editar artículo' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Extra borrado' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Administración de extras' );
jr_define( '_JOMRES_COM_A_EXTRAS', '¿Mostrar los extra en el momento de reservar?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Ponga esto a "Sí" para mostrar cualquier extra que usted desee ofrecer al huésped' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Extras opcionales.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Dia de comienzo de Reserva negra' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Servicios actuales resumidos' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Administración de Reserva negra' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Error al reservar estas habitationes, una o más de las habitaciones que usted escogió no están libres.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Habitaciones incluidas en Reserva negra' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Ver Reserva negra' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No hay Reserva negra en la lista' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Número de estrellas' );
jr_define( '_JOMRES_COM_A_SMOKING', '¿Mostrar la opción fumador?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Ponga esto a "Sí" para mostrar la opción fumador.' );
jr_define( '_JOMRES_COM_A_RESET', 'Reponer' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Reserva cancelada' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Busque aquí para:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Opción preconfigurada de fumador' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Símbolo de moneda' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Por ejemplo &amp;pound&#59; Por favor note que debe utilizar las entidades que el protocolo HTTP codifica para el símbolo requerido. Para una lista de estas entidades <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Código de moneda' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'P.e. GBP. Usted necesita esto si utiliza Paypal. Para una lista de estos códigos visite <a href="http://www.xe.com/iso4217.htm">XE.com</a>' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Haga click para más información' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '¿Limitar las reservas anticipadas?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ponga esto a "Sí" si usted quiere limitar las reservas anticipadas (utilizar el próximo campo para poner el límite en términos de días). Si usted pone esto a sí entonces si el usuario trata de reservar más de n días entonces su fecha de llegada será restaurada a la fecha de hoy' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Días de reservas anticipadas están limitados a:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>NOTA: No se recomienda que usted ponga las dos opciones siguientes a Sí, usted debe utilizar sólo uno de los dos cálculos de impuesto disponibles. </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Impuesto' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'IVA de la habitación' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Diseñado para el mercado Americano. Estas son las cantidades del impuesto de la habitación que serán cargadas al huésped. Usted puede cargar una combinación y/o de fijo y porcentaje. Note que estos impuestos son sólo aplicados al costo de la habitación.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Impuesto fijo ' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Porcentaje de impuesto' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Impuesto' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Porcentaje de impuestos' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Archivar todos los registros' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' Registros archivados' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Auditor ha archivado registros de auditoría' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Nuestras tarifas' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Nombre de tarifa' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Descripción de tarifa' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Tipo de habitación' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Válido de' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Válido a' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'Por persona por noche' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'Por noche' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'No incluye fines de semana' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Días mínimos' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Días máximos' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Personas mínimas' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Personas maximas' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Inspección previa' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', '¿Modo de edición activado?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Texto actual' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Texto nuevo' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Texto actualizado.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Corrija el idioma' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Mostrar los últimos 200 expedientes' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Tipo de propiedad' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Lista de propiedades' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Editar tipo de propiedades' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Tipo de propiedad' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Descripción de tipo de propiedad' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Tipo de propiedad grabado' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Incapaz de borrar el tipo de propiedad. El tipo de propiedad está asignado a una o más propiedades, por favor reasigne antes de tratar de borrar' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Tipo(s) de propiedad borrados' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Recuerde  pagar' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Ningún servicio extra para facturar' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Depósito' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Cantidad completa' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Cantidad cargada en tiempo de la reserva' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Utilice esta opción para decidir lo que se debe cargar al reservar. Escoja el depósito si el depósito se debe cargar, o la cantidad completa si la cantidad completa se debe cargar.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Meses del Cal. a mostrar' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'En la disponibilidad de los habitaciones, cuántos meses del calendario se deberian mostrar?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Firmado a favor de ' );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Pasarelas' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Cancelar' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Elija por favor los habitacion(es) que usted desea tener fuera de servicio, y las fechas relevantes. <br>Si una habitacion no tiene una marca, no se puede incluir en la Reserva negra hasta que todas los reservas estén completadas/canceladas.<br/> Cuándo usted haya escogido las fechas apropiadas, hacer click en el botón azul "aplica" para reexaminar la disponibilidad de la habitación. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center>Por favor entrar otra vez.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Razón' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', '¿Utilizar pasarelas de Pagos en Línea?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Ponga esto a sí si usted quiere utilizar pasarelas de Pagos en Línea.  <b>Nota:</b>Esto no desconecta el cálculo del depósito mostrado durante el proceso de la reservación.  Para desactivar esto usted puede redactar las plantillas que muestran los espacios y quitar los elementos que se refieren a depósitos. ' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Escoja por favor su método de pago.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', '¿Pasarelas de Pagos en Línea permitido?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Plugin modificado' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Plugin insertado' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Ver la web de la propiedad' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Link Externo' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Ponga el link de su website aqui.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Tarjeta de crédito vista' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Tarjeta de crédito actualizada' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Editar Tarjeta de crédito' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Editar el tamaño del icono' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'carga las imagenes en serie' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Imágenes ya existen en directorio' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Diapositivas' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', '¿Mostrar enlace a Diapositivas?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', '¿Mostrar diapositivas en línea?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Anchura de Diapositivas' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Imagen de la propiedad' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', 'Lo siento, no hay imágenes disponibles para esta propiedad' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', '¿Mostrar enlace a Tarifas?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', '¿Popups permitidos?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Si se establece a no, entonces los enlaces que normalmente se habrian abierto en una ventana emergente se abrirán en su lugar. EXPERIMENTAL! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Cargar las imágenes en serie' );
jr_define( '_JOMRES_A_TABS_MISC', 'Misceláneo' );
jr_define( '_JOMRES_A', 'Configuración de la página' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Utilice las características globales de la propiedad' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Ponga esto a Sí si usted quiere forzar a todas las propiedades a utilizar sólo las características de propiedad definidas por el webmaster.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Icono' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Escoja el plugin de la búsqueda que usted desee utilizar.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Lo siento, su búsqueda no devolvió resultados. Modifique por favor su búsqueda y pruebe otra vez.</b>' );
jr_define( '_JOMRES_AREYOUSURE', '¿Seguro que usted desea hacer esto?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Reservar una propiedad' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Número de seguridad' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', '¿Mostrar Tarifas?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Dirección' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Información detallada' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Click para habitaciones y disponibilidades' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Mostrar información de Tarifas' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Mostrar información de dirección debajo de este enlace' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Mostrar detalles de la propiedad debajo de este enlace' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Mostrar habitaciones y disponibilidades debajo de este enlace' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Mostrar información de tarifas debajo de este enlace' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifa simple' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Promedios' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Seleccione el modelo de tarifa a utilizar' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Ud. tiene disponible dos métodos de calcular las tarifas. Primero, el método de "tarifa simple" el cual permite ofertar diferentes tarifas al huésped y el cálculo por estadía es el mismo para todo la estancia completa. Esto es útil cuando queremos ofrecer diferentes tarifas para una misma fecha. Elija el otro método, "tarifa promedio" si desea ajustar los precios dependientes de la fecha. El sistema encontrará todas las tarifas para cada día de reserva y retornará el promedio de todo el período deseado' );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Mostrar fecha de salida escogida' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Poner a "SI" si desea mostrar el campo fecha de salida. Solo use si sabe que hacer, la fecha de salida siempre se activará el día después de la llegada.' );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Límite de descripción' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Esto limita la cantidad de caracteres mostrados cuando se describe una propiedad." );
// v1.4g
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', '¿Formato date() usado?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Poner a "SI" para dar formato de salida a las fechas de acuerdo a la funcion date() (Ver <a href="http://www.php.net/manual/en/function.date.php">aquí</a>). Poner a "NO" para usar formato strftime() (Ver <a href="http://www.php.net/manual/en/function.strftime.php">aquí</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Publicar' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Despublicar' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Error en entrada de color de fondo' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'País por defecto en formulario de reserva' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Campos marcados con * rojo son requeridos.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', '¿Los usuarios pueden registrar sus propiedades?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Poner a "SI" si desea que los usuarios estén habilitados para registrar sus propiedades sin intervención del administrador.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'País y región de la propiedad.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Por favor complete los detalles de la propiedad.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Campos marcados con * rojo son requeridos.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Propiedad creada' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Lo sentimos, no puede crear una propiedad en este sistema. Para hacerlo Ud. debe estar registrado como usuario." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Propiedad creada: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Para el usuario: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Mostrar calendario desde el inicio del año?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'El calendario de disponibilidad se mostrará desde el inicio del año actual.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Habitaciones disponibles' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Regresar a detalles de la propiedad' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Tipos de habitación' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Límite de búsqueda aleatoria' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', '¿Mostrar enlace a Google Currency Conversion en el listado de tarifas?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Convertir precio a :' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', '¿Permitir a los usuarios editar usando editores HTML?' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Use este formulario hacer su reserva. Mueva el cursor sobre las imágenes de "i" para más información sobre la columna. Modifique sus detalles del registro como la fecha de llegada y la salida y el número de huéspedes, entonces seleccione la habitación que desea de la lista de disponibilidad. Pulse sobre cualquier habitación disponible para agregarla a su reserva. Cuando lo haya hecho, usted puede agregar cualquier extra optativo, también puede proporcionar sus detalles de dirección. Cuando el formulario este completo use el botón para confirmar su registro.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Particularidades de reserva' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Seleccione los detalles requeridos de su reserva' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Disponibilidad ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Seleccione la habitación que desea' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Mirar si la propiedad está disponible para esta fecha.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Extras opcionales' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Seleccione que extra opcional desea incluir en la reserva' );
jr_define( '_JOMRES_COM_PERDAY', 'Por noche' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Dirección' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Por favor ingrese los detalles.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Habitaciones disponibles' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Habitaciones seleccionadas' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>La posible fecha de llegada más cercana es: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Por noche:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Total:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Extras:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'impuestos:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Descuentos:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Total Final:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Huéspedes' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Click para añadir esta habitación a su reserva' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Click para eliminar esta habitación de su reserva' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Tipos de huésped' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Tipo' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Tipo de huésped, Ej: Niños 5-10, o estudiantes ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Notas' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Notas de lo que usted puede querer hacer con respecto a este tipo de huésped' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Máximo' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Máximo número de este tipo de huésped que puede ser seleccionado en la reserva' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Es porcentaje' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'La figura calculada es un porcentaje de la figura BASE calculada para la habitación. Si esto se pone a "NO" entonces la figura que usted especifica simplemente se agrega o substrae del valor BASE de la habitación.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', '¿Añadir varianza?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'La figura calculada se agrega o elimina de la figura BASE calculada para la habitación. Ponga esto a "NO" si usted quiere esto para un descuento de la figura BASE.' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Varianza' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Cantidad a variar' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modificado tipo de orden de huésped' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Publicado tipo de huésped' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Eliminado tipo de huésped' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Creado tipo de huésped' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Actualizado tipo de huésped' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Actualizado tipo de huésped' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', '¿Mostrar enlace a listado de habitaciones en la página de detalles de la propiedad?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', '¿Mostrar <b>solo</b> listado de disponibilidad de habitaciones por calendario?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Cambie esto a "Sí" para desactivar despliegue del título de propiedad y detalles, para que sólo el calendario de disponibilidad de habitaciones sea visto en la sección de detalles de la propiedad. Pensado para usuarios que alquilan las habitaciones de las propiedades.' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Intervalo mínimo de Llegada-Salida' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'El intervalo mínimo en la reserva entre las fechas de llegada y salida.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Listado de habitaciones en la reserva muestra número de habitación' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Listado de habitaciones en la reserva muestra nombre de habitación' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Listado de habitaciones en la reserva muestra listado de tarifas' );
jr_define( '_JOMRES_ORDER', 'Orden' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Requerido' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Días antes de la llegada' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Lapso mínimo de días entre hoy y el día de llegada.' );
jr_define( '_JOMRES_DTV', 'Variaciones del tipo de fecha' );
jr_define( '_JOMRES_DTV_DOW', 'Día de la semana' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Tipo de huésped por defecto' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Número por defecto del primer tipo de huésped a mostrar, si usa diferentes tipos de huéspedes.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', '¿Solo los usuarios registrados pueden reservar en línea?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Lo sentimos, para reservar en línea debe ser un usuario registrado. Click aquí para registrarse en el sitio.' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Color de texto para enlaces en reservas' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Bordes fin de semana' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Habitación reservada' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Reserva negra' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '¿Redondear depósito a número entero?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '¿Cargar depósitos?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '¿Cargos de tarifas almacenados como figuras semanales?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Tiene la opción de almacenar los cargos por tarifa en valores diarios y semanales.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Precio por semana' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Fechas de llegada arregladas: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Cuando esta opción es seleccionada, los números de las fechas son mostradas en el menú desplegable' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Opción Fumar no válida' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Fecha de llegada incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Fecha de salida incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'La reserva es muy corta. Se necesitan varios días entre la llegada y la salida:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'El intervalo es' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Variante tipo de huésped incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Seleccione el tipo de huésped' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Demasiadas opciones para la lista de tarifas' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ha seleccionado más habitaciones que huéspedes, click en una habitación para eliminarla de su selección' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Demasiados huéspedes para las camas disponibles' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Necesita más habitaciones' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Seleccione una habitación' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Nombre requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Apellido requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'No. casa requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Calle  requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Pueblo requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Región requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Código postal requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'País requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Teléfono requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Móvil requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email requerido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Email no válido' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Imposible validar Email' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Tenemos VACANTES!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'No hay habitaciones seleccionadas' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Reserva no.' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok para reservar, mensaje de fondo' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', '¿Descargar variables de plantilla?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Activar esto para descargar variables de la plantilla para cada vista. Útil si desea ver si cierto elemento está disponible para ser usado en una plantilla determinada.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Figura es porcentaje' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Ponga esto a "Sí" si la figura de cálculo de personas es un porcentaje. Si no entonces se aplicará como una cifra fija.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Límite en habitaciones/tarifas disponibles' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Use esto para limitar el número de cuartos disponibles y aranceles que se listan en el formulario de reservación. Póngalo a cero si usted no quiere habilitar limitaciones. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'NO hay VACANTES!' );
// Translate from here
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Reserve ahora: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', '¿Modo de edición Global?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Tenga cuidado con esta función. Si se establece en Sí, el modo de edición afectará el texto a medida para todas las propiedades en el sistema para la constante que se está editando.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Simbolo Global de moneda' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Plegado de Componentes' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Ponga esto a Sí, si el componente está plegado de manera que las áreas del módulo y de cabecera no son visibles' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super Administrador de Propiedad' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Solo fines de Semana' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Días de fin de semana' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Establezca sus días de fin de semana. Tarifas que permitan o no fines de semana tendrán esta opción en cuenta al generar la lista de habitaciones.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Seleccione su país antes de añadir otra información de la propiedad' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Grabe sus cambios antes subir imágenes de la propiedad' );
jr_define( '_JOMRES_TARIFFSFROM', 'Precios desde - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'Todo' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Búsqueda por país' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Búsqueda por región' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Búsqueda por ciudad' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Función de búsqueda.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Buscar' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Escriba una palabra en el cuadro y pulse el botón.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Palabras de búsqueda: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Por favor, introduzca su llegada prevista y la fecha de salida y pulse el botón para buscar habitaciones disponibles en las fechas elegidas.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Listar propiedades por tipo de propiedad' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Listar propiedades por tipo de habitación' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Por defecto' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Nombre Propiedad' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Región Propiedad' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Ciudad Propiedad' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Estrellas' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Lista Propiedades' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Detalles Propiedad - ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Formulario de Reserva' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Actualice su dirección' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Re-chequear disponibilidad<br/>(La selección de habitación se reseteará)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Re-chequear disponibilidad' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modifique sus extras opcionales' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Cambie su selección de habitación' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Actualice su dirección' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Lo sentimos uno o más datos de dirección son incorrectos' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Imagen Habitación' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Formato de moneda' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Mostrar opciones de Administradores como imágenes' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opciones de búsqueda' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Logs Disponibles' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'No hay entradas de registro. Esto es normal, necesita modificar manualmente jomres.php para activar el registro' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Mensaje' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Advanced' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Modo configuración tarifas' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Cuidado: Cambiar entre diferentes tipos de tarifas puede originar pérdida de datos. Veánse las notas a continuación con respecto a esto</b>.
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
Microgestión -> Normal. Todas las referencias cruzadas existentes y las tarifas se eliminan.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', '¿Mostrar la lista de habitaciones en la hoja de detalle?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Tipo de propiedad' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Solo SRP' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Personas máximas por habitación' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Personas máximas en la reserva' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Añadir nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Editar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Borrar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Ver notas' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Añadir nueva nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Editar nota' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Borrar nota' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Mis opciones' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Listado de reservas' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Mis reservas' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Ver reservas' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Ver favoritos' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', '¡No tiene ningún favorito añadido todavia!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Añadir a favoritos' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Tipo de propiedad' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Propiedades hotel' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Wise price' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Activo' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Este plugin permite activar y configurar los precios de sus habitaciones dinámicamente.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'La mayoría de las empresas recalculan los precios de las habitaciones en función del número de habitaciones de un tipo requerido que están disponibles en una fecha determinada. Esto les permite ofrecer descuentos en el tipo de habitación que no está ocupada durante un período determinado con el objetivo de atraer a los clientes que de otro modo podrían perderse. <br/> La activación y configuración de este plugin le permite ofrecer precios ajustables basados en el número de habitaciones de un tipo seleccionado que están disponibles en la propiedad en un día determinado. <br/> Threashold define el número de días que desde la fecha actual hasta la fecha de llegada permite activar esta característica, nos permite la posibilidad de ajustar el porcentaje de habitaciones que pueden estar disponibles antes de que un determinado descuento se aplique.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (número de días entre la llegada y la fecha actual)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Porcentaje de habitaciones ocupadas  10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Porcentaje de habitaciones ocupadas  25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Porcentaje de habitaciones ocupadas  50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Porcentaje de habitaciones ocupadas  75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Descuento %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' ha sido descontado de  ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' a ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Precio de habitación no descontado ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API key' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Puedes obtener google maps API key desde <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Una vez tenga introducido su map key aquí, Jomres mostrará el mapa en su página de detalle de la propiedad.' );
jr_define( 'JOMRES_COM_A_USE_SSL', '¿Usar SSL en sistema de reservas?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Tiene que estar seguro de que dispone de un certificado SSL válido para ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Último minuto' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', '¿Activo?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Poner a Si si quiere ofrecer ofertas de último minuto.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Si se hace la reserva y la fecha de llegada es sólo N días desde la fecha de reserva, el descuento puede ser aplicado' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Descuento' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'En porcentaje' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '¡Un descuento ha sido aplicado a esta reserva!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'El costo de la estancia a sido reducido en  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Está propiedad ofrece un descuento de último minuto de ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' por ciento si su fecha de llegada es anterior a ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' por ciento o más si su fecha de llegada es antes de ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. ¡Reserve ahora para disfrutar de la mejor oferta!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Información detallada de tarifa' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Poner a Si para ver la información detallada en los detalles de propiedad/tarifa' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Reducir al mínimo las opciones de configuración' );
jr_define( '_JOMCOMP_AMEND', 'Modificar reserva - Selección de propiedad' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Seleccionar nueva propiedad' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Contrato Original:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Depósito Pagado' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Depósito No Pagado' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Anulación Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Anulación de Depósito' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Cancelar' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal Panel de Control' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Tipo de Comisión predeterminada' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Elija la comisión predeterminada que será aplicada a la propiedad en caso de que no sea seleecionada otra.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Lista de tipos de comisión' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Tipos de comisión' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Título' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Tipo' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Tipo de comisión' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Código de moneda' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Lista de propiedades' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nombre propiedad' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Dirección propiedad' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Las propiedades cuyo color de fondo es rojo todavía no tienen un tipo de comisión aplicado.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Estadísticas' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Estadísticas para: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Propiedades - Clicks' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Vista de propiedad' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Número de reservas' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Valor de la reservas' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Comisión estimada' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Tipo de comisión' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Lista de reservas' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Propiedad id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Huésped id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Afiliado id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Factura id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Reservas total' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Contrato id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Contrato number' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Código moneda' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Creado' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archivado' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Fecha archivada' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Agregar artículo a la factura' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Gestor de la factura' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Propiedad asociada (si es aplicable)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Valor' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Descripción' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Artículo Insertado con éxito en la factura " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Ver órdenes" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Error al insertar artículo en la factura " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Error, no ha establecido un valor para la factura" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Puede tener archivos específicos de idioma mediante el ajuste del nombre de la subcarpeta, ej. "yachtbrokerage" y copiar un archivo de sublenguaje en la subcarpeta. Puede modificar ese archivo de lenguajes para ese tipo de propiedad para convertirse en habitaciones, ej DVDs, ect.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'No se puede eliminar esta propiedad, ya que es la única propiedad a la que tiene acceso. Si desea desactivarla, por favor use la característica de despublicar en su barra de herramientas. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Si se trata de una instalación de demostración y tiene la intención de actualizar a Jomres Solo (una única propiedad límite) entonces usted primero debe crear una propiedad nueva, a continuación, elimine ésta antes de cambiar su clave de licencia para la clave de licencia solo que se le asignará a la compra .' );
jr_define( '_JOMRES_COM_EMAILERRORS', "¿Registro de errores por email?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Establecer como Sí si desea copiar jomres.net automáticamente cuando un mensaje de registro de errores se crea. Esto nos permite ser proactivos en nuestro enfoque para hacer frente a posibles problemas, es de esperar la resolución de cualquier problema antes de que ni siquiera sean conscientes de ellos. Tenga en cuenta que esta función está deshabilitada en 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "¿Es esta propiedad un hotel o alojamiento y desayuno/hostal/pensión? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Las opciones de configuración difieren dependiendo de si usted está alquilando habitaciones en una propiedad, o la propiedad en sí. Seleccione MRP si está ofreciendo habitaciones, seleccione SRP si usted está ofreciendo toda la propiedad de todo el edificio. " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "¿Utilizar el chequeador de dirección de correo electrónico Jomres? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Aplica un control más estricto sobre los correos electrónicos enviados. Algunos servidores web seguros arrojarán un error 500 interno, si intenta enviar un correo electrónico a una dirección de correo electrónico inexistente. Cambiar de valores nos permite utilizar las características checkdnsrr de PHP antes de intentar enviar un correo electrónico, previniendo los errores tipo 500. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Alojamiento Total" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "noche(s) de " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "por habitación " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Aumentar la duración de la estancia " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Resumen de precio " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Por favor leer y aceptar " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Un resumen de su reserva se muestra a continuación. <br /> Para hacer cualquier cambio, por favor haga clic en el botón Modificar reserva. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Si necesita cambiar cualquiera de la información anterior, por favor haga clic aquí" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Modificar Reserva" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Por favor, introduzca cualquier solicitud especial en el cuadro siguiente." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Confirmo que la información anterior es correcta y de acuerdo con la " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "por persona por noche " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Archivo de lenguaje por defecto" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Elija el archivo de idioma por defecto que Jomres debe utilizar si el idioma no ha sido fijado por Joomfish. " );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'de' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Comienzo' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Anterior' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Siguiente' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Fin' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Resultados' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Tenga en cuenta que esto no es un formulario de reserva, en su lugar está enviando un correo electrónico. <br/> Por favor, introduzca el mensaje que le gustaría enviar a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contactar con Hotel' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Consulta de la propiedad de  ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Gracias por su consulta, su mensaje ha sido enviado a la dirección de contacto de la propiedad, con copia a su propio correo electrónico para sus archivos. Se le responderá tan pronto como sea posible' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' con respecto a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Introduzca los caracteres que ve en el cuadro' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'No puedo leer los caracteres. Generar un ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Enviar' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'nueva imagen' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Consulta' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Por favor seleccione el alojamiento deseado en la lista de la derecha' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Habitaciones mínimas ya seleccionadas' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Número mínimo de habitaciones previamente seleccionadas en la reserva antes de mostrar el combo de tipo de habitación/tarifa que pueden ser ofrecidas. Le permite tener las tarifas de descuento, cuando más de N habitaciones están ya seleccionadas. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Número máximo de habitaciones ya seleccionadas ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'El número máximo de habitaciones ya seleccionadas en la reserva antes de que el combo tarifas/habitación ya no se ofrezca. Le permite dejar de ofrecer este tipo de combinación de tarifas/habitación una vez que N  habitaciones hayan sido seleccionados en el formulario de reserva. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Tenga en cuenta que Suplemento por persona no será usada si Suplemento por persona se establece en Sí en la Configuración General. Estos ajustes son una alternativa a tener tarifas planas Suplemento por persona, no una adición a la tarifa plana SPS.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Disponible" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Algunas reservas" );
jr_define( '_JOMRES_AVLCAL_HALF', "Ocupación media" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Ocupación alta" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Completo" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Prefijo Url' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Este es el primer elemento que aparece después del dominio - Cambiar lo que usted requiera - Si usted no desea utilizarlo déjelo en blanco' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Ver los alias de tareas de propiedad' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking los alias de tareas de propiedad' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Buscar los alias de tareas de propiedad' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Añadir país a la url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Añadir región a la url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Añadir ciudad a la url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Añadir tipo de propiedad a la url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Añadir nombre de propiedad a la url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Añadir id de la propiedad al nombre de la propiedad' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Si el nombre de propiedad se establece en No entonces no se utilizará. Si se establece en sí, entonces la URL será similar a fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Estructura de búsqueda URL - Añadir país a url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Estructura de búsqueda URL - País por defecto' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Si todas sus propiedades se encuentran en un país, entonces no tiene país en la búsqueda - entrar en un país normal aquí si desea mostrar un país' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Estructura de búsqueda URL - Añadir región a url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Estructura de búsqueda URL - Región por defecto' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Si todas sus propiedades se encuentran en una región, entonces no tiene país en la búsqueda - entrar la región por defecto aquí si desea mostrar una región' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Estructura de búsqueda URL - Añadir ciudad a url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Estructura de búsqueda URL - Ciudad por defecto' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Estructura de búsqueda URL - Tipo de propiedad' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Estructura de búsqueda URL - Tipo de propiedad por defecto' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Usar en la URL si la búsqueda es por tipo de propiedad' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetectar el lenguaje de Javascript calendar' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', '¿Habilitar la detección automática del idioma de los calendarios de Javascript? Si no puede detectar automáticamente el idioma y entonces vamos a recurrir al lenguaje configurado por defecto' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Por semana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Por día' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Por reserva' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Por persona por reserva' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Por persona por día' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Por persona por semana' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Por día (Mínimo días)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Por días X habitaciones seleccionadas' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Reconstruir registro' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normalmente, el Jomres plugin Registro se reconstruye automáticamente cada vez que ve que el administrador de plugins agrega o quita un plugin, sin embargo es posible que usted no pueda usar estas características, por alguna razón, por lo tanto usted puede utilizar esta función para reconstruir el Registro manualmente. Si usted tiene acceso a la función del administrador de complementos y actualizaciones, entonces es poco probable que usted tenga que utilizar esta función. Tendrá que reconstruir del plugin de registro siempre que agregue un nuevo mini-componente y no utilice el Administrador de complementos para agregarlo." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registro reconstruido con éxito' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Hubo un error con la reconstrucción del registro de minicomponentes. Usted debe verificar su registro de errores Jomres para ver si hay un registro que provocó el error.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Buscar por rango de precio.' );
jr_define( 'JOMRES_WORD_SAVING', 'Guardando...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', '¿Usar Composite Property details?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 presenta los detalles de la propiedad, donde todos los elementos de la salida de la información de la propiedad se envían a un archivo de plantilla (composite_property_details.html). Si no desea utilizarla se establece en No (sólo los usuarios existentes se espera que pongan no, los nuevos usuarios probablemente van a querer dejar establecida en Sí)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Esta es una lista de todos los usuarios del sistema. Los no Administradores de propiedad tendrán un icono de huéspedes, administradores de la propiedad tendrán iconos de Recepción/Administradores de Propiedad/Super Administrador de la propiedad. <br/> Jomres Cuando se instala por primera vez, "admin" se agrega automáticamente como un Administrador de la propiedad y es considerado como un usuario autorizado. <br/> Los no-super administradores de la propiedad deben ser asignados a por lo menos una propiedad de lo contrario, aparecerá un error al intentar iniciar sesión y utilizar Jomres. <br/> Una vez que un usuario está autorizado déjelo, puede editar sus perfiles, asignar a Propiedades o darles derechos de Super Administrador de la Propiedad. <br/> Para autorizar a un usuario, haga clic en la Cruz roja junto a su nombre. Para desautorizarlos, haga clic en el símbolo verde. <br/> Para asignar usuarios a las propiedades específicas sólo, o darles derechos de Super Administrador de la propiedad, haga clic en el icono de edición (que sólo es visible una vez que ha sido autorizado). Los usuarios que ven registradas de sus bienes (s) se asignan automáticamente a los Propiedades. Los Super Administradores de propiedad automáticamente tienen derechos sobre todas las propiedades, y pueden ver todas las opciones de configuración, incluso si la opción de configuración se reduce al mínimo fijado en la web de configuración.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Desde aquí puede asignar un administrador a ciertas Propiedades. Asegúrese, si no van a ser un Super Administrador de la propiedad, que tienen derechos a por lo menos una propiedad de lo contrario, aparecerá un error al registrarse. Para dar a un Recepcionista/Administrador de Propiedad derechos sobre solo algunas propiedades, asegúrese que el desplegable Super Administrador de la Propiedad no está establecido en Sí.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', '¡No tiene ninguna reserva todavía!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Tipo propiedad' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Editar su tipo propiedad' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Seleccionar su tipo propiedad' );
jr_define( '_JOMRES_COM_LOGGING', 'Registro Jomres' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Estas opciones le permiten activar o desactivar el registro de Jomres. El Registro de errores siempre está habilitado, pero otros registros, tales como reservas, Puerta de enlace, Sistema y Solicitudes se pueden encender y apagar. Se le advierte que <b> la posibilidad de habilitar este registro se proporciona exclusivamente como una forma de hacer la depuración más fácil, pero conlleva un gran riesgo de seguridad </b> ya que es fácil para los usuarios externos poder ver sus registros sin haber sido autorizados, por lo tanto se aconseja dejarlo apagado la mayor parte del tiempo. Si ha habilitado el registro, cuando usted lo inhabilite, también debe asegurarse de que la carpeta <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> no contenga ningún archivo de registro antiguo. Tenga en cuenta que habilitar el registro también reduce significativamente la velocidad del sistema, ya que recoge una gran cantidad de información.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Registro de Formulario de Reserva (Registro de motor de reservas) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Registro Puerta de Enlace (ej paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Registro de solicitudes (todas las solicitudes de servidores entrantes)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Sistema (misc log) ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (principalmente para el registro de la comisón etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Su consulta...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Lista de Reserva de la habitación muestra imagen de tipo de habitación' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Limite lista propiedades' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'El número de propiedades para mostrar en una página después de una búsqueda' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Función de búsqueda integrada' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'La característica búsqueda integrada Jomres permite a los usuarios buscar a través de Jomres Propiedades de acuerdo con un conjunto de funciones. Si ya ha utilizado las funciones de búsqueda de Jomres en Joomla usted estará familiarizado con estos ajustes. <br/> Esta característica nos permite ofrecer el manejo de la búsqueda en Jomres para aquellos usuarios que no desean utilizar módulos de búsqueda de Joomla, o para otros usuarios de CMS que no tienen sus propios módulos de búsqueda Jomres. <br/> Sólo recuerde que si decide buscar algo a través de un enlace (es decir, no un menú desplegable), entonces las opciones de búsqueda no se llevarán a cabo, sólo el elemento que se corresponde con el enlace que ha hecho clic. <br/> Note que por defecto el diseño de esta búsqueda integrada no es muy bonito. Eso es porque el archivo de plantilla que construye el diseño tiene que incluir todas las opciones posibles, algunos de las cuales son incompatibles. Para mejorar el diseño y lograr la apariencia que desea, tendrá que editar <b>srch.html</b> en la carpeta <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', '¿Activar esta función?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Si esta función está habilitada, cualquier llamada a Jomres que muestre la lista de propiedades mostrará también las opciones de búsqueda.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Usar columnas' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Cualquier opción de búsqueda que haya definido como enlace (cuando sea el caso) se mostrará como columnas (IE pone br al final del enlace)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Característica columnas" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "El número de los iconos de funciones que se pueden mostrar antes de que un BR se inserte para ir a la siguiente fila." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Búsqueda por región seleccionando combo desplegable" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ofrece un menú desplegable de búsqueda para filtrar a través de países/regiones/ciudades. Si va para utilizar esta función, entonces es mejor que no utilice la búsqueda por región o ciudad que sigue." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Buscar por nombre Propiedad" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Mostrar la búsqueda por el nombre de propiedad introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "¿Mostrar como un desplegable?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Cambie esto a no para mostrar la lista de enlaces" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Buscar por ciudad/región" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Mostrar la búsqueda por la región introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "¿Mostrar como un desplegable?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Cambie esto a no para mostrar la lista de enlaces" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Buscar por tipo de propiedad" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Mostrar la búsqueda por tipo de propiedad introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "¿Mostrar como un desplegable?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Cambie esto a no para mostrar la lista de enlaces" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Buscar por tipo de habitación" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Mostrar la búsqueda por el tipo de habitación introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "¿Mostrar como un desplegable?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Cambie esto a no para mostrar la lista de enlaces" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Buscar por caracteristicas" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Mostrar la búsqueda por la característica introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "¿Mostrar como un desplegable?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Cambie esto a no para mostrar la lista de enlaces como descripción de imágenes y casillas de verificación" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Buscar por descripción" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Mostrar la búsqueda por la descripción introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Buscar por disponibilidad" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Mostrar la búsqueda por la disponibilidad introducida" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Buscar por rango de precio" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Mostrar la búsqueda por por rango de precio introducido" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Buscar por incrementos de rango de precio" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres mirará en todos los valores de las tarifas a continuación, calculará una serie de rangos de precios basado en los incrementos de valor que estableció aquí." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Por defecto, si una propiedad no está seleccionada en Jomres se realiza una búsqueda. Si esta búsqueda no fue provocada por un módulo de búsqueda, entonces la búsqueda originará resultados al azar (deliberadamente). Esta opción le permite limitar el número de resultados en esa búsqueda al azar.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Ajustes de trabajo para Cron y registro' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron información del trabajo. La funcionalidad pseudocron es necesaria para la facturación y manejo de la comisión.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Instalado minicomponents cron. Para ejecutar una tarea de cron individual utilice los enlaces que se especifican a continuación. Tenga en cuenta que el cron jobs no produce ningún resultado por lo que no verá ninguna información en la página. En cambio, se refiere a las anotaciones de trabajo referidas a continuación.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Método' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Si usted no tiene acceso a cron jobs, active este minicomponente, de lo contrario cree una tarea programada y dígale que se ejecute<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . $jomresConfig_secret . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Mostrar el registro en el navegador' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Sólo funciona si el método se establece en minicomponente.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Registro habilitado' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ponga esto en Sí para que el registro esté habilitado. Los resultados de los registros se emitirán a continuación' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Registro detallado' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lotes de registro de salida' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edición de plantilla' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Esta funcionalidad nos permite editar la interfaz de plantillas Jomres en el servidor, guardando los resultados en la base de datos. Característica avanzada, tenga cuidado con ella.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Nombre de la plantilla' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', '¿Plantilla se ha personalizado?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Campos personalizados' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Aquí puede definir campos simples personalizados que se mostrarán en el formulario de reserva.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nombre de campo (sin espacios)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Valor por defecto' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Descripción' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Requerido' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Cantidad máxima' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Si la cantidad máxima se establece en más de 1 , a los huéspedes se les ofrecerá un menú desplegable para elegir la cantidad de los extras que necesitan.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Emitir facturas" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Impuesto" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Código Impuesto" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Descripción Impuesto" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "No puede borrar este Impuesto." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Tasa" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Facturas" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "No pagada" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Pagada" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Cancelada" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Pendiente" );
jr_define( '_JRPORTAL_INVOICES_USER', "Usuario" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Estado" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Planteado" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Debida" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Suscripción" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Total pendiente de pago" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Total recurrente" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Frecuencia repetición" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Día del mes recurrentes" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Código de moneda" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Líneas de pedido" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Nombre" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Descripción" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Precio inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Cantidad inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Descuento inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Total inicial" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Precio recurrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Cantidad recurrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Descuento recurrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Total recurrente" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Código de impuesto" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Descripción de impuesto" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Tasa impositiva" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Ajustes Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Código de moneda (eg EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "¿Usar sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Su correo electrónico Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Nota: Para usar PayPal, usted debe ir a su cuenta de paypal y desactivar AutoReturn. (Perfil/Preferencias de pago Sitio Web), y establecer IPN (Perfil/Preferencias de Notificación de pago instantánea) para el URL:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', ".Esta factura ya está lista. Por favor haga clic en el botón para escoger paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "¿Reemplazar los ajustes estándar de la pasarela Jomres? " );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Si la opción de reemplazar los ajustes de PayPal se establece en Sí, entonces suceden varias cosas: Configuración general ya no muestra la configuración de pasarela, y dos, cuando se hace una reserva los ajustes utilizados aquí se utilizan para que el pago se envíe a la dirección ingresada aquí, no a la que previamente se configuro en Configuración General." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Mostrar mis facturas" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Cupones descuento" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Los códigos de descuento se pueden generar y enviar ​​a los clientes como un incentivo para hacer reservas. Válido desde y hasta las fechas se refiere a las fechas en que la reserva se puede hacer en adelante, no a la fecha de la propia reserva." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Código de cupón" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Válido desde" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Válido hasta" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Importe de descuento" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "El descuento es un porcentaje" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Sólo habitación" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Descuento sólo se aplica al costo de la habitación. Si no, el descuento se aplica al costo total de a la reserva." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Sql error cuando intenta crear/borrar un cupón" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Si tiene un código de cupón, por favor escribalo en el cuadro y haga clic en "Guardar cupón"para guardar los detalles de cupón en su reserva.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Guardar cupón' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Cupón guardado en reserva' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Número de cupón no encontrado' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Valor de cupón de descuento' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Descuento de reserva. Código de Descuento válido/valor de los descuentos/configuración de cupón: ' );
jr_define( '_JOMRES_COM_CACHING', '¿Usar la función de almacenamiento de caché Jomres?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Ponga esto en No para desactivar la función de almacenamiento de caché Jomres.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Elegir idioma' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Elija las opciones de idioma que se muestra en el menú desplegable' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', '¿Mostrar el menú desplegable de selección de idioma?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Reservas anticipadas y reservas canceladas' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Estimado/a" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Gracias por registrarse " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Su nombre de usuario es : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Su contraseña es : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Por favor inicie sesión para ver su reservas " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Cupón guardado' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Cupón borrado' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Usar mensajería Jomres' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Muchas actualizaciones proporcionan retroalimentación en forma de un mensaje de javascript cuando se vuelve a cargar la página, utilice esta opción para habilitar/deshabilitar esta característica.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Usuario" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Contraseña" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Número de teléfono notificaciones" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Por favor utilice el formato 'código del país, número de móvil'. Por ejemplo, el número de móvil en el Reino Unido sería algo así como '447979123456'. Deje en blanco si no desea que ninguna notificación de correo electrónico sea enviada a tu teléfono móvil." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Completar el formulario. Asegúrese de que introduzce la IP bloqueada (la IP de este servidor), ajustar Callback a HTTP POST. Tendrá que establecer la devolución de llamada IP " . $JomresConfig_live_site . "/index.php?option=com_jomres&task=sms_clickatell_callback y un identificador de usuario y contraseña. <br/>
Si se registra más de una conexión de la API, el nombre de la descripción que ha introducido para cada una debe ser único - no se puede tener múltiples APIs con el mismo nombre <br/>.
Después de enviar el formulario, sus datos de autenticación se mostrarán, incluida la identificación única de cada conexión de la API (api_id). Estos datos de autenticación se requieren cuando se conecta a la pasarela Clickatell para enviar un mensaje. <br/>
<br/>
Utilice su nombre de usuario, contraseña y api_id para rellenar los campos anteriores.

<br/>
<br/>
" );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '¿Usar moneda global?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Ponga esto en sí para forzar todas las propiedades que utilicen la misma moneda (ej. & # 8 3 6 4 ;) ' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Mostrar el formulario Lista de reserva de la habitación accesible' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Mostrar el formulario Lista de reserva Máximos ocupantes' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Tenga en cuenta que los precios de habitación indicados son estimaciones y el precio total de la reserva no se calculará hasta que haya agregado una habitación o habitaciones a su selección." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Última edición Plantilla de base de datos' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Última edición Plantilla Disco' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Base de datos de alerta plantilla' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Plantilla de base de datos puede estar fuera de fecha' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Si hay un icono contra una plantilla, entonces Jomres detectó que la plantilla almacenada en la base de datos <strong><i>puede</i></strong> Ser mayor de la que se almacena en el disco, en cuyo caso es posible que la plantilla se haya actualizado en una versión más reciente de Jomres. Si este es el caso, entonces es posible que su plantilla no se pueda beneficiar de una nueva característica de Jomres, o que la funcionalidad existente ya no puede funcionar como se esperaba, y usted debe comparar el archivo en el disco para su personalización para asegurarse de que no está perdiendo nuevas características.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Suscripción paquetes" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Nombre" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Descripción" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Publicado" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frecuencia" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Periodo de prueba" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Cantidad de prueba" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Importe total" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Límite habitaciones" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Límite propiedades" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frecuencia: M/Q/B/A Mensual/Cuatrimestral/Bianual/Anual" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Periodo de prueba: entrar entero, 0 (cero) no establecer, 1 para un mes, 2 para dos meses, etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Suscribirse" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Por favor, introduzca/actualice su información de suscriptor. Tenga en cuenta que todos los campos son obligatorios." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Nombre" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Apellidos" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Dirección" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "País" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Código Postal" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Se necesita una suscripción válida para crear nuevas propiedades. En este momento, usted ha comprado suscripciones para " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " Propiedad publicada(s). " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Puede aumentar el número de propiedades que puede crear por <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>comprando más paquetes de suscripción aquí.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Ha utilizado " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " paquetes de la propiedad. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Para ver una lista de sus propiedades actuales, haga clic <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>aqui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Para ver una lista de los paquetes de suscripción disponibles actualmente, haga clic <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>aqui</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Por desgracia, no se puede publicar esta propiedad usted ha alcanzado el número máximo de paquetes de propiedad disponibles." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Gracias por crear una suscripción para incluir su propiedad en nuestro servidor. Una vez que su factura esté marcada como pagada (puede haber un retraso en función de Paypal), por favor <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>pulse aquí para seguir creando su propiedad/es.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Lamentamos que no haya elegido suscribirse a nuestro servicio. Por favor, háganos saber si hay algún modo que podamos ayudarle más" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH', "Lo sentimos, pero usted ha llegado al límite de la cantidad de propiedades que se pueden publicar en este sistema en cualquier momento. Puede aumentar el número de propiedades que se pueden publicar por <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages&Itemid=" . $Itemid . "'>comprando más paquetes de suscripción aquí.</a> " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Utilice la funcionalidad de manejo de suscripciónes" );
jr_define( '_JOMRES_COM_NEWUSER', 'Crear nuevo usuario en reserva' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Crear nueva cuenta de usuario en usuarios no registrados.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Haga clic aquí para registrar su propiedad' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Suscripciones activas" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Id de suscripción Pasarela" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Gracias por su reserva - siga nuevos detalles de usuario" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Panel de control' );
jr_define( '_JOMRES_COM_FAUXHEADERS', '¿Salida Jomres encabezados Javascript en el cuerpo del html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Ponga esto a Sí, si usted está teniendo problemas con mootools y Jomres\'s jQuery en conflicto en el IE. Esto obligará a Jomres a llamar las salidas del Javascript dentro del cuerpo de la página en lugar de la zona del HEAD, que no es HTML válido, sin embargo, parece resolver el probema con jQuery y Mootools en conflicto entre sí.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Mostrar Factura' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Mostrar Facturas' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Añadir mi propiedad a este sitio' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Cuidado : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Usted puede tener un paquete de forma gratuita en el sistema si lo desea, mediante la creación de un paquete y establecer tanto la cantidad de prueba y la cantidad completa a 0,00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Lo sentimos, pero este ID de paquete no se reconoce." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Lo sentimos, usted ya está suscrito a un paquete gratuito, usted no puede suscribir el paquete de nuevo." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Status <b>0:</b> Pendiente de pago <b>1:</b> Creado <b>2:</b> Cancelado <b>3:</b> Fin de período" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Mi cuenta" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Los datos de su negocio' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Nombre negocio' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Edificio número' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTA: Los tipos impositivos siguientes están diseñados para su uso por el mercado americano. Si desea utilizar una tasa impositiva plana (por ejemplo IVA) a su alojamiento, por favor, elija un tipo impositivo de la opción anterior.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Factura No. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Seleccione las fechas en que desea aplicar la reserva negra. Cuando haya seleccionado las fechas apropiadas, haga clic en el botón "Aplicar" para rechequear la disponibilidad. <br/> 
<br/> 
Si la propiedad tiene una o más reservas para el periodo deseado, entonces usted no será capaz hacer la reserva negra hasta que las otras reservas/reservas negras, hayan sido canceladas/retiradas.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Lo sentimos, no puede hacer reserva negra en esta propiedad esas fechas.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Puede hacer reservas negras para esas fechas' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Su propiedad está configurada para cargar por persona por noche, pero usted no tiene ningún tipo de evaluación creada o publicada, por favor, crear y publicar uno o más tipos de huéspedes. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'No tiene ninguna tarifa configurada todavía, usted no podrá realizar ningún tipo de reservas para su propiedad.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Modo edicion activo' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Modo edicion desactivado' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '¿Cargar depósito variable?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Depósitos variables permite definir si le gustaría cobrar la totalidad de la reserva si la fecha de llegada está a N días de "hoy". Establezca esta opción en Sí para activar la función, e introduzca el número de días más adelante, así por ejemplo si el día de llegada es en el plazo de 60 días, entonces como cantidad del depósito será cargado el importe total, de lo contrario la cantidad se basará en el depósito de las opciones configuradas anteriormente.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'El número de días, en el que el importe total será cobrado como depósito.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', '¿Enviar mensajes de correo electrónico de contacto del propietario a la dirección alternativa?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Establezca esta opción a Sí si desea que los mensajes de correo electrónico de contacto del propietario se envien a la siguiente entrada. Establezca en No para enviar los mensajes de correo electrónico a la dirección de correo electrónico que se define en el área de configuración de la propiedad.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Dirección de correo electrónico Alternativa de contacto del propietario.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Email de confirmación ha sido enviado. Usted puede cerrar esta ventana ahora.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Listado de inmuebles en venta' );
jr_define( '_JOMRES_REALESTATE_YESNO', '¿Es esta propiedad una lista de Inmuebles en venta?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Seleccione Sí, si usted está vendiendo la propiedad, seleccione No si se trata de un hotel/Alojamiento Cama y Desayuno/hostal/propiedad tipo chalet, donde se le ofrece el alquiler o habitaciones en la propiedad para el alquiler a corto plazo y va a utilizar este sistema para la toma de reservas .' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contacte con el agente' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Marcar factura como pagada' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Factura marcada como pagada' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Hacer nueva API Key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', '¿Usar Google para la traducción inicial?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Esta función es nueva y experimental, así que use bajo su cuenta y riesgo. El propósito de la función es consultar la herramienta Google de traducción para configurar automáticamente las traducciones una determinada propiedad. Tenga en cuenta que esta característica sanea todas las entradas, así que si usted utiliza un editor HTML para dar formato a los datos de su propiedad, entonces esto va a romper ese formato.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', '¿Es una instalación de una sola propiedad?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Si esta opción está establecida en Sí, la interfaz Jomres a usuarios no autorizados se simplifica enormemente. Por defecto las llamadas a Jomres, en vez de ser dadas como una lista de las características, sólo llevará al cliente a la central de reservas para la primera propiedad en el sistema. Administradores de la propiedad tampoco podrán ver el botón Detalles de la propiedad de vista previa o el botón Agregar nueva propiedad. Ideal si sólo quiere una lista de bienes y tener reservas para ellas.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', '¿Usar la funcionalidad HTML purifier?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Active esto para que Jomres use librería html purifier (http://htmlpurifier.org/). La librería se utiliza como una capa extra de seguridad cuando se trata de datos de entrada y de salida y se recomienda que la deje habilitada, sin embargo, se utilizará más memoria.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance de pagos' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Balance' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Tenga en cuenta usted está utilizando el modo de edición con el modo global de edición habilitado. Esto está bien si usted sabe lo que significa el modo de edición global. Si no está seguro si debe utilizar Jomres de este modo, por favor, consulte <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">el modo de edición de página del manual</a> para obtener más información sobre este tema.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Clave de Soporte' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', '.Su número clave de soporte (también conocido como el número de licencia). Usted necesitará una licencia actualizada para poder descargar las actualizaciones y complementos para Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Descuento personal' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '¿Registrar propiedades limitadas a un solo país?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Puede asegurarse que los registros de la propiedad se limitan a un solo país mediante el establecimiento de esta opción en Sí y establecer el país en la siguiente opción.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Las propiedades están localizadas en este país : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Tema Jquery' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Elige un tema jQuery para usar para las pestañas de los detalles de propiedad.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Lo sentimos, pero que la propiedad no está disponible actualmente.' );
jr_define( '_JOMRES_REVIEWS', 'Comentarios' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Título comentarios' );
jr_define( '_JOMRES_REVIEWS_DATE', 'Publicado en ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Todavía no hay comentarios para esta propiedad.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '¿Le gustaría ser el primero en hacer un comentario sobre esta propiedad?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Estoy de acuerdo con este comentario' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'No estoy de acuerdo con este comentario' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Valoración media: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Votos totales:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Añadir un nuevo comentario.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Necesita estar registrado para enviar un comentario.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Diganos que opina de este establecimiento : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Este cliente nos dijo : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Pros: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Contras: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Enviado el: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Usted ya ha realizado un comentario sobre esta propiedad, no puede publicar otro comentario sobre ella.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Lo sentimos, pero no se permite publicar comentarios en este sitio.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Click para mostrar comentarios' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' usuarios de acuerdo con este comentario. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' usuarios en desacuerdo con este comentario.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' usuario de acuerdo con este comentario. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'usuario en desacuerdo con este comentario.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Gracias por compartir su opinión de este comentario.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Gracias, pero ya ha compartido la opinión de este comentario.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Por favor asegúrese de que todos los campos están correctamente cumplimentados' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Por favor, resuma su comentario introduciendo un título' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Por favor, introduzca un comentario más completo en el cuadro de descripción' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Por favor, introduzca las experiencias positivas como cliente de este establecimiento' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Por favor, introduzca cualquier experiencia negativa que haya encontrado' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Por favor, califique la amabilidad que recibió por parte del personal' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Por favor, cual es su valoración del establecimiento' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Por favor, cual es su opinión sobre la limpieza del establecimiento' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Por favor, califique el alojamiento. Era cómodo o incómodo' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Por favor, proporcione su opinión sobre la relación Calidad-Precio' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Por favor, valore los servicios ofrecidos' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Revisión del comentario' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Su experiencia en mayor detalle' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Gracias por enviarnos su opinión.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Gracias por enviarnos su opinión. Será publicada en breve por uno de nuestros moderadores.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', '¿Utilizar la función de comentarios de Jomres?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '¿Publicar automáticamente los comentarios?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Si se establece No tendrá que publicar manualmente los comentarios' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', '¿Ajustar el modo test en los comentarios?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalmente los Administradores de Propiedad no pueden hacer comentarios. Naturalmente esto no es lo ideal en un sitio en funcionamiento.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Esta es una lista de todas las propiedades. Para ver los comentarios de una propiedad pulse en ella. Desde aquí podrá publicar o borrar comentarios.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Número de comentarios no publicados' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total comentarios' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publicar/Despublicar comentario' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Borrar comentario' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Informe de comentario' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Revisión de los comentarios' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Por favor, introduzca su informe' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '¿Ve algo en este comentario que sea cuestionable o inexacto? Informenos y veremos que podemos hacer por usted.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Enviar' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Informe creado por ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Los informes son publicados por los usuarios que pueden estar en desacuerdo con el contenido de un comentario. La única manera de eliminar un informe es eliminar la revisión.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = escaso 10 = excelente) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Hospitalidad  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Localización ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Limpieza ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Alojamiento ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Relación calidad-precio ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Servicios ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Comentado por : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Ocultar comentarios' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', '¿Mostrar Formulario de reserva en la página de detalles de la propiedad?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ponga esto en Sí para mostrar el formulario de reserva en la página de detalles de la propiedad. Si se establece en No, aparecerá un enlace en la página de detalles de la propiedad apuntando al formulario de reserva.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', '¿Los precios incluyen impuestos?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', '¿Los precios son impuestos incluidos? Si sus precios incluyen impuestos seleccione Si. Si no están incluidos seleccione No.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'IVA extras:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'El campo de día de la semana le permite establecer una tasa para un determinado día de la semana, una vez que haga clic en el botón de día de la semana todos los días de la semana se ajustarán a esa tasa.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Los selectores de fecha y la tarifa de entrada le permiten establecer un precio para un intervalo de tiempo dado. Elija una fecha de inicio y fin, introduzca un precio, y haga clic en el botón de fijación de tarifas.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Inicio intervalo' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Fin intervalo' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Tarifa' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Fijar las tarifas' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Socios' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Hoy' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Anterior' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Siguiente' );
jr_define( '_JOMRES_CALENDAR_RTL', 'falso' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Habitación ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'huésped(es). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Hemos asignado el número de huéspedes a sus habitaciones. Si desea cambiar esta asignación, deberá contactar con el hotel después de hacer la reserva. Se pueden aplicar cargos extra si cambia de las asignaciones.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Tenga en cuenta que su propiedad no se ha publicado todavía, sólo se puede ver la propiedad, los visitantes del sitio no la verán" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Orden de resultados predeterminado para búsqueda por defecto' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Cambiar esta opción para cambiar la orden en que los resultados de la búsqueda son presentados de forma predeterminada.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Mostrar resultado de la búsqueda para menú desplegable' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Estilo de lista habitaciones' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'En el formulario de reserva, utilizando el estilo "Clásico", el estilo de lista de habitaciones le ofrece habitaciones individuales para los clientes. Con el estilo "Tipo de habitación", los huéspedes eligen el número de habitaciones de tipo X (por ejemplo, 2 x dobles) en lugar' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Clásico' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Tipo habitaciones' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re)Comprobar de la disponibilidad' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Actualizar la lista de habitaciones disponibles' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Calculando total' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Actualización terminada' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Calendario de la semana comienza el día, Domingo o Lunes' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '¿Sólo los clientes del establecimiento pueden hacer comentarios?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Establecer en Sí si desea restringir comentarios sólo a aquellos usuarios que hayan sido huéspedes en este establecimiento.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Por habitación' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Huéspedes por habitación : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Huéspedes por reserva : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Número de habitaciones' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tarifa de precios por defecto' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Esto solo se aplica a nuevas tarifas" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Años a mostrar" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Define el número de años a mostrar cuando se edita una tarifa microgestión" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Enero' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Febrero' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Marzo' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Abril' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Mayo' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Junio' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Julio' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Agosto' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Septiembre' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Octubre' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Noviembre' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Diciembre' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Proceso de gestión de Propiedad" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Hay diferentes procesos de gestión en función de la forma que desee listar su establecimiento o negocio." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Alquiler" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Elija la opción de alquiler si usted está reservando habitaciones de un establecimiento (por ejemplo, Hotel/B & B/Villa/Apartamento)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Inmobiliaria/listado simple" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Elija la opción de Inmobiliaria si no ofrece ninguna funcionalidad de reserva en todo el sitio, (por ejemplo, una establecimiento/artículo para la venta)" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Ponga esto en Sí para reducir el número de opciones disponibles para los administradores de la propiedad en la sección Configuración General. Esto es útil si no quiere que los administradores de propiedades dispongan de muchos ajustes, en su lugar puede editar jomres_config.php para definir las opciones por defecto del establecimiento.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Por favor, seleccione una opción para su reserva' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Activa editores HTML en la página de edición de detalles de propiedad. Además, si se establece en No, todos los html excepto p y br son despojados de todo lo introducido y se muestra texto.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Vista de administración De Propiedad" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Vista previa Sitio" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "¿Mostrar el selector de zona horaria en la barra de herramientas del administrador de propiedad?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Descuento Asociado " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Buscar usuario" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Introduzca algunos caracteres para buscar un usuario.<br/> Cuando seleccione un usuario automáticamente se añadirá como Asociado y le llevará a la página siguiente donde puede asignar propiedades y descuentos para el usuario." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Asociados existentes" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Elija un Asociado para ser llevado a su página de administración." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Asociado :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Buscar por una propiedad" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Introduzca algunos caracteres del nombre de propiedad y seleccione una propiedad.<br/> Cuando usted seleccione la propiedad se agregará a la cartera del Asociado, sin embargo, aún no disfrutará de los descuentos, será necesario que los configure usted mismo." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Propiedades actuales" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Haga clic en una propiedad para modificar la configuración de descuento del Asociado para esa propiedad." );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "¿Suspendido? <br/>(Haga clic para suspender a un Administrador, esto automáticamente anula la publicación de todas sus propiedades) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Haga clic en el icono de suspensión (el icono con el hombre y el marca verde) para suspender a un Administrador. Esto significa que el Administrador no será capaz de realizar funciones de gestión de la propiedad y todas sus propiedades serán despublicadas. Super Administradores de propiedad no puede ser suspendidos." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Esta cuenta ha sido suspendida, no es posible administrar su Propiedad(es) con esta cuenta." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Cuenta de Administrador suspendida" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Cuenta de Administrador rehabilitada" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Tenga en cuenta que su cuenta de Administrador de la propiedad ha sido suspendida. Usted no será capaz de realizar las funciones de gestión de la propiedad hasta que la cuenta haya sido restaurada." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Tenga en cuenta que su cuenta de Administrador de propiedad ya está activa. Usted puede seguir desempeñando las funciones de administración de propiedades. Por favor, ingrese en cuenta y asegurese de que la Propiedad(es) correcta han sido publicadas. Gracias." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Eliminar favoritos' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Archivo de datos de Reservas' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'El archivo de reserva de datos es un volcado de la información de la reserva, la información es capturada después de confirmar la reserva haciendo clic. Pase el ratón sobre una de fecha para ver el volcado de los datos en bruto. La información es almacenada en la tabla XXX__jomres_booking_data_archive.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Editar cuenta' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Búsqueda usuarios" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Introduzca algunos caracteres de su nombre de usuario para la búsqueda de un usuario. <br/> Cuando se selecciona un usuario usted automáticamente puede añadirlos como Administradores y se le llevará a la página siguiente donde puede asignar propiedades y derechos de acceso para dicho usuario ." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Actuales Administradores" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Elegir un Administrador para ser llevado a la página de administración del gestor." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Buscar por número de huéspedes" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Mostrar la búsqueda número de huéspedes en menú desplegable" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Buscar por número de estrellas" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Mostrar la búsqueda número de estrellas en menú desplegable" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Número de huéspedes' );
jr_define( '_JOMRES_SEARCH_STARS', 'Número de estrellas' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Facturas de Comisión" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Número de propiedades" );

// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "¿Cargar Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "Puede establecer esto a NO si usted tiene una plantilla que utiliza jQuery. Esto puede resolver los problemas de conflicto jquery en algunas plantillas, pero no todos." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Si utiliza Joomfish, debe establecerse a No, y usar  el selector de idiomas de Joomfish. El conmutador siempre está habilitado en el área del administrador, ya que se necesita cuando se utiliza la función de etiquetas de traducciones.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Las miniaturas se crean automáticamente para las imágenes cargadas.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ancho máximo de miniaturas pequeñas (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Las miniaturas pequeñas se utilizan en la lista de propiedades, mientras que las miniaturas de tamaño mediano se utilizan en la cabecera de propiedad.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Alto máximo de miniaturas pequeñas (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ancho máximo de miniaturas medianas (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Alto máximo de miniaturas medianas (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Traducción etiquetas' );

jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "¿Usar la funcionalidad de Comisionista?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Ponga esto en Sí para mostrar el resultado de las facturas de la comisión que se han planteado." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "¿Administrador de las reservas crea facturas de comisión?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Si un Administrador hace una reserva, ¿eso también crea una línea  en factura de la comisión?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Se ha creado una nueva factura de Comisión" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Se ha creado una nueva factura de Comisión la cual requiere su atención. Por favor, haga clic en el siguiente enlace para ver la factura (puede que tenga que estar conectado)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "¿Auto suspender a los administradores cuando las facturas son marcadas como pendientes?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Umbral para la autosuspensión" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Este umbral es el número de días que un administrador tiene que pagar una factura antes de que sea suspendido y no publicadas sus propiedades." );


//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Idioma de contexto' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Esta característica permite a Jomres el uso de etiquetas que son apropiadas para su enfoque actual, por lo que si su interés se centra en una Yacht Brokerage (Venta de yates), cambiar el contexto permitirá Jomres presentar las etiquetas de un archivo de idioma diferente. Por ejemplo, si establece el contexto para "Yacht Brokerage", entonces Jomres primero se encuentra el lenguaje actual, a continuación, buscará en /'.JOMRES_ROOT_DIRECTORY.'/languages un sub-directorio llamado "yachtbrokerage". Si el archivo existe en el lenguaje actual, el archivo será utilizado. Si no, entonces Jomres buscará un archivo de idioma Inglés en ese mismo directorio. Si no se encuentra, Jomres utilizará el archivo de idioma para el idioma seleccionado en el directorio /'.JOMRES_ROOT_DIRECTORY.'/languages.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Configuración avanzada del sitio' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Establezca esta opción a Sí si desea utilizar las opciones avanzadas de configuración del sitio. Si usted acaba de empezar con Jomres, entonces le recomendamos, que por ahora deje esto en No, ya que la instalación por defecto es suficiente para empezar, debe agregar Jomres al menú principal y acceder a la interfaz como "admin" y comenzar a configurar su propiedad(s). Tenga en cuenta que muchas de la opciones avanzadas sólo serán aplicables a las instalaciones de Jomres Silver, los usuarios Jomres Lite no serán capaces de sacar el máximo provecho de la totalidad de las características permitidas.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Cargar Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Precio (descendente)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Precio (ascendente)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '¿El resumen de precios y estimaciones debe ser un precio por noche/semana/mes?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Por noche' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Por semana' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Por mes' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Por persona' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'semana(s) en ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mes(es) en ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '¿Cómo debe trabajar la opción de búsqueda por número de personas??' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Afecta a todas las búsquedas. Cuando usamos la función de búsqueda número de invitados, buscaremos propiedades cuyas tarifas permitan alojar un número mayor o igual al número elegido ¿Número igual o mayor? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Por favor espere, su solicitud está en proceso y será redirigido a la página web de Paypal.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Si no es automáticamente dirigido a Paypal en 5 segundos ...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click aquí' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Reserva válida a partir de" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Reserva válida hasta" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Nombre Huésped" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Los códigos de descuento pueden ser generados y pasados ​​a los clientes como un incentivo para hacer las reservas.<br/>Fechas Válidas desde/hasta para referirse a las fechas en que puede ser una reserva hecha, mientras que Fecha Reserva válida desde/hasta se refiere a las fechas en que la reserva que debe cubrir el cupón sea válida. Si la reserva se encuentra fuera de ese período las tarifas normales se aplicarán a los días fuera de ese período.<br/>Si desea que la reserva esté disponible para unos huéspedes específicos, elija el nombre de los huéspedes en el menú desplegable para limitar el cupón sólo a esos huéspedes." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Con su cupón, esta reserva ha sido rebajada de " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " a " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Ponga esto en No para desactivar la carga tanto de Jquery UI javascript como de archivos CSS." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "¿Cargar Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Ponga No sólo para desactivar el archivo jquery UI CSS." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Total inc impuesto" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Despublicar Propiedad' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Usar Funcionalidad de Conversión" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Usa la funcionaliad de conversion online de jomres.. Esto ofrece un desplegable de conversión a los usuarios de la página, donde podrán elegir la moneda en la que quieren ver los precios ofertados. La presentación del precio se ajusta para monstrar el precio convertido, segido por el precio 'nativo' de la propiedad entre paréntesis.." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "Hemos puesto nuestros mejores esfuerzos en obtener el mas preciso y más rápido sistema de cambio de divisa que podemos. Nuestro servicio de conversión de divisas online esta destinado a información y no pretende reflejar cambios exactos. De acuerdo con lo expuesto anteriormente, no garantizamos la exactitud de los cambios de divisa. Usando este servicio aceptas que el uso de la misma corre por tu cuenta y riesgo." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Usar cache de Javascript?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Elije si usar o no usar el sistema de cahce javascript de Jomres. Funciona en la mayoría de servidores, pero no en todos. Si tienes problemas con errores Javascript que se muestran, por ejemplo en firebug, como 'cadena literal no terminada', debe poner esta opción en no. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "Muestra clientes acturales e históricos" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Solo Clientes actuales" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Conversión de moneda/código de moneda' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'Detección de IP, clave API' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para fijar automáticamente en el desplegable de cambio de moneda, Jomres usa un servicio gratuito llamado IpinfoBB para detectar el país del visitante, no obstante debera obtener primero una clave API en: <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a>.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Depuración' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', '¿Mostrar el formulario de reserva en una ventana emergente?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'Si la opción de mostar el formulario de reserva en los detalles de la propiedad está marcado como No, entonces cuando se abre la página del formulario Jomres puede mostrarlo en una ventana emergente. Esto permite incluir mucha mñas información en el formulario de reserva sin agobiar al cliente por tener demasiados elementos en la pantalla ya que están ocultos en dicha ventana emergente.' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Panel de localización de totales' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'En el formulario de reserva, los paneles de totales necesitan diversas configuraciones dependiendo de la plantilla. Por ejemplom en la platilla de Joomla de Jomres la configuración de 712 funciona perfectamente, sin embargo el ma Milkway un ajuste de 1500 es mejor, particularmente si no tienes activada la ventana emergente, lo más problable es que necesites experimentar diferentes ajustes para encontrar el que mejor encaje en tu plantilla elegida.' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Alojamiento iva excluido ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Alojamiento iva incluido' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'IVA Alojamiento:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Abrir el formulario de Reservas' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Volver a los detalles de la propiedad' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', '¿Seleccionado automáticamente?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (después del pago del depósito)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrar recursos basados en sus características.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ultimas Reservas' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'Segundo' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'Minuto' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'Hora' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'Dia' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'semana' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'mes' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'año' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'decada' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'hace' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'desde ahora' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Las reservas son para dias enteros?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'Por defecto los recursos de reservas de sistema estan apagados por la noche por lo que una reserva del primero de Enero' . date( "Y", strtotime( "next year" ) ) . ' al segundo de Enero ' . date( "Y", strtotime( "next year" ) ) . ' solo cubre una noche. Pero si cambia esta opción a Si, entonces la reserva cubrirá dias enteros, por lo que una reserva en esos dias cubrirá ambos días y al cliente se le facturarán dos días.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Por día' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Por persona y día' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Entrada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Salida' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "dia(s) en" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Fecha de Salida incorrecta' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'La reserva es muy corta. theme haber al menos estos días entre la entrada y la salida:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Mínimo intervalo entre Entrada/Salida ' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'El intervalo mínimo en el formulario de reserva entre las fechas de entrada y salida. Un intervalo de 1 significa que las fechas de entrada y salida pueden establecerse en el mismo día, sin embargo esto depende aún del intervalo mínimo que es calculado automáticamente por el motor de reserva, ya que comprueba las tarifas válidas para el periodo de reserva.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '¿El precio resumido y el estimado debe ser facturado por día/por semana/por mes?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Por día' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dias antes de la entrada.' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'El número mínimo de días debe abarcar desde "hoy" hasta la fecha de entrada.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Cambie esto a Si, si quiere limitar reservas avanzadas (use el siguiente campo para fijar el límite en términos de días). Si cambia este campo a Si, entonces si el usuario intenta reservar más de x días por adelantado, entonce su día de entrada se fijará en la fecha del día de hoy.' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', '¿Mostrar campo de fecha de salida?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Marque esto No si no quiere mostrar el campo de fecha de salida. Sólo use esto si sabe lo que hace, ya que la fecha de salida en las reservas se mostará siempre como el día posterior a la entrada." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Si marca esto como Si, entonces las reservas se tomará por un período prefijado. Si se marca como No, asegúrese de que el campo "dia de entrada definido" no está marcado como Si (a no ser que específicamente quieras forzar a los cliente a salir en un día de la semana que quieras) de otra forma no tendrá muchos links en el calendario de disponibilidad.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Día de entrada predefinido' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Sólo para sitios que ofrecen periodos fijos de reservas. Escoja el día de la semana en el que debe ser realizada la entrada.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Día de entrada prefijado' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Días de entrada prefijados repetidos:' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Cuando las fechas prefijadas de entrada están seleccionadas, el número de fechas que se pueden ver en la lista desplegable. Fíjese que la lista de fechas no incluirá ninguna fecha si la reserva no es posible debido a reservas anteriores, y que la lista será de hecho el doble de larga que su número seleccionado ya que tendrá un número similar de fechas históricas (donde sea posible).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Por persona, por día' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Seleccione Si si quiere cambiar por-persona por-día. Si no, entonces los costes se calcularan en base a por-recurso-por-día.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Los depósitos variables le permiten definir si le gustarñia cargar la cantidad entera a la fecha de la entrada de la reserva en x días desde hoy. Marque esta opción como Si para activar esta característica e introduzca más abajo el número de días, así por ejemplo si el día de entrada esta detro de los 60 días, el depósito se cargará por la totalidad de la reserva, en caso contrario la cantidad se basará en las opciones de depósito configuradas más arriba.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'La mayoría de los negocios recalcularan los precios del recurso basado en el número de recursos de un tipo requerido que están disponibles en la fecha dada. Esto les permite ofrecer descuentos en un tipo de recurso/negocio que no está ocupado durante el periodo dado, con la ventaja de atraer a negocios que de otra forma se podría perder.<br/> Activando y configurando este plugin podrá ofrecer precios ajustables en base a el número de recursos de un tipo elegido que están disponibles en el negocio el día estipulado.<br/> El umbral de días, define el número de días entre los que debe estar la fecha de entrada antes de que los precios del recurse se ajusten a esta característica, entonces las opciones de porcetanjes le permitirán configurar el porcentaje de recursos que pueden estar disponibles despues de que se les aplique un descuento dado. Fíjese sin embargo que si múltiples recursos son reservados, el nivel actual de descuento se aplicarña a todos los recursos y no se reducirá a medida que se selecciones más recursos.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Umbral (número de días entre la fecha de entrada y hoy.)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Entrada pendiente' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Entrada Hoy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Entrada realizada' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Salidas Hoy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Salidas Finalizadas' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'No ha entrado' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Días' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Marcar una reserva como entrada realizada.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Marcar como reserva devuelta.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Marcar una reserva como entrada reservada ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Marcar una reserva como devuelta' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Coste por día: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Número de días: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Anulación total de Alojamientos' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Guardar la Anulación' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Ancho del formulario de reserva en px' );

jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', '¿Permitir al panel de totales deslizarse hacia abajo del formulario de reserva?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'El panel de totales se deslizará hacia abajo del formulario cuando el usuario se desplace hacia abajo en el mismo.Puede activar/desactivar esta opción con este selector. Fijése que si el usuario visita la página a través de un dispositivo móvil, el desplazamiento se desactiva por defecto. ' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '¿Enviar a los nuevos usuarios sus datos de acceso?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Si la opción de crear nuevo usuario esta marcada como Si, puede cambiar esta opcióna  No para asegurarse de que no se les envia sus detalles de acceso una vez que se ha creado el usuario. Esto puede ser útil si esta añadiendo automáticamente usuarios a una lista de correo, por ejemplo, y no quiere que los usuarios se logueen.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', '¿Mostrar impuestos en el resumen de totales del formulario de reserva?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Evitar que el formulario de reserva muestre los campos de impuestos en el resumen de totales marcando esta opcion como NO.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Umbral de cancelación' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Conectado, los usuarios registrados pueden cancelar sus propias reservas. Aqui puede fijar el umbral en dias, en los que la reserva no puede ser cancelada depués de un cierto número de días antes del día de llegada.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Editar Perfil' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'tipo de relación con la propiedad' );
jr_define( '_JOMRES_IMAGE', 'Imagen' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Tipos de negocio que pueden mostrarse en esta característica' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Pulse sobre una letra para mostrar todos los negocios que empiezan por esa latre. Una vez que tiene una lista de propiedades puede asignar tasas de comisión a dichas propiedades o pulsar sobre sus iconos de edición para ver las estadísticas de los negocios.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Editar porcentaje de impuestos" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Editar campos personalizados" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "Clave de licencia del servidor" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "Usuario de licencia del servidor" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "Si usted tienen un nombre de usuario y contraseña en el servidor de licencia, por favor introdúzcalos. Esto le ayudará a acceder a los plugins a los que está suscrito. Si ha ingresado una clave válida de soporte en el campo de más abajo, no es necesario insertar el usuario y contraseña aqui." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "Versión Actual de Jomres : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Última versión de Jomres" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alerta : Hay una nueva versión de Jomres disponible, se le recomienda actualizar cuando pueda." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Bienvenido a Jomres, esperamos que disfrute usando el sistema de reservas favorito de Joomla. Si desea comprar licencias de Jomres Plata u Oro , <a href="http://www.jomres.net/prices" target="_blank"> Por favor, visite nuestara página</a> para obtener información sobre la mejora.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'Este sistema es ideal para cualquier escenario, puede ser un sistema simple de reserva de una sóla propiedad hasta un sitio con múltiples usuarios, en varios idiomas con múltiples propiedades. Por favor vea la sección "Ayuda" a la izquierda, incluyendo la página de "Cómo empezar" que le puede ayudar con los primeros pasos.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Propiedad Activa" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Cambiar la propiedad activa" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Pulse sobre una letra para mostra todas las propiedades que empiecen con esta letra. Una vez mostrados haga click sobre el nombre de la propiedad para cambiarla a propiedad activa." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Alternativas de configuración SMTP" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Marque esta opción como Si para usar configuraciones de SMTP alternativas. Un creciente número de alojamientos web parece que están bloqueando la funcionalidad de PHP mail, por lo que puede elegir anular las configuraciones que Jomres adopta de su alojamiento CMS (joomla) y usar las configuraciones a su gusto. ." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alojamiento Alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Cambie esto a su servidor de mail SMTP" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Puerto alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "cambiar esto a su puerto smtp" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Protocolo Alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Dependiendo de su configuración de su servidor smtp, debe dejar esta en blanco, o introducir 'ssl' o 'tls'. Pregunte a su proveedor smtp si lo desconoce." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Usar autenticación" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "si su servidor smtp requiere que los clientes se conecten marque Si. Se usará entonce el nombre de usuario y contraseña.." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Usuario Alternativo" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Contraseña Alternativa" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : Hemos detectado que su plugin de cache del sistema de joomla esta activado. Le recomendamos deshabilitar ese plugin ya que realizará cahce a las respuestas de ajax del formulario de reserva, haciendo que su sistema se comporte de forma errática." );

jr_define( '_JOMRES_QUICK_INFO', "Información Rapida" );

jr_define( '_JOMRES_MENU_SHOW', "Mostrar" );
jr_define( '_JOMRES_MENU_HIDE', "Ocultar" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "¿Usar la disposición alternatica del menú?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Marque esta opción como Si si quiere usar la opción de menú alternativo en la vista del usuario. Cuando este marcado como No el menú de Jomres se mostrará como un acordeón en la parte izquierda de la pñagida, con un botón para alargar el menú. Si está marcada como si,se usa el Menú alternativo principal cosistente en una barra de menú el la parte superior de la página a lo ancho de la misma. Ambos menús se deslizarán con el usuario. El munú acordeón se considera el mejor, sin embargo, puedes encontrar que no es apropiado para ti, es libre de escoger el menu alternativo si asi lo desea. Si ninguno le gusta, necesitará modificar el archivo mainmenu_wrapper.html para ajustarse a sus requisitos." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Por defecto" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Cualquiera" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registrados" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Gestor" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Gesto" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nadie" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menu de control de Acceso" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "Esta característica le permite controlar quien podra ver un plugin en el menu principal. Las opciones 00009 son visibles por los usuarios registrado y no registrados, las 00010 normalmente son para las actividades de recepción que se utlizan habitualmente en el dia a dia, las 00011 se usan para definir y configurar una propiedad pero se usan menos a menudo." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Recepcionista" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Control de Acceso Total" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Marque esta opción como Si para activar la característica de control de acceso total, luego visita ela opción de Control de Acceso debajo de Mantenimiento del sistema para poder configurar los controles de acceso." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Observe, sin embargo, que estos ajustes no controlan los scripts subrayados a los que conectan, así por ejemplo si asigna <i>00009user_option_03_search</i> al 'Gestor', un usuario que conozca jomres puede aún hacer una llamada a j06000search.class.php intruciendo http://www.domain.com/index.php?option=com_jomres&task=search en su barra de navegaciones. Esto se hace adrede, ya que este Control de Acceso a Menú simplemente controla lo que puede ser visto en el Menú Principal de Jomres. Si necesita controles más ajustados, marque Si la opción de Control de Acceso Total en la Configuración del Sitio y vuelva a entrar el el Menú de Control de Acceso ." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Control Total de Acceso" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Esta característica es para usuarios avanzados sólo. Si no sabe para que se utiliza, y no tiene una razón específica para utilizarlo, por favor regrese a la configuración del sitio y marque No en la casilla de Control de Acceso Total.</strong><br/>
	Esta opción le permite controlar quien puede acceder a los minicomponentes (los cuales con alguna excepción están insertados en el nucleo duro del sistema). Si el nivel de acceso más próximo al nombre de un script esta fijado por defecto, entonces la opcion de Control de Acceso Total estará definido como Si <strong>cualquiera</strong> puede acceder a los scripts que no podrían acceder y por lo tanto, si pretendes usar esta función DEBES marcar el nivel de control de acceso para <strong>todos</strong> los minicomponentes de Jomres listados aqui. Si no sabe lo que hacen estos minicomponentes, le recomendamos encarecidamente que no use de ninguna manera esta funcionalidad.<br/>
	En Jomres, los niveles de acceso siguen una pira,ide, por lo que los Super Managers son más grandes que los Managers. En resumen Siper Manager>Manager>Recepcionista>Registrados>Sin Registro. Por lo que si un usuario registrado tiene acceso a un minicomponente, también lo tienen el recepcionista, el manager y el super manager.<br/>
	Observe que no puede controlar el area de administrador de los minicomponentes. Todo el mundo el el área de administrador es considerado como un usuario de confianza y no se les impide el acceso a ningún script (especialmente este).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Precaución! Tiene activado el control de acceso total, sin embargo hemos tomado en cuenta las opciones del control de acceso y las hemos comparado con el número de minicomponentes que deben ser controlado, y las dos no coinciden, por lo tanto debe tener scripts que no están bajo control. Esto puede ser un problema de seguridad y se le insta a resolverlo urgentemente visitando la característica de Control de Acceso y comprobar que los niveles apropiados han sido aplicados." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Usuarios con derechos de administración de esta propiedad" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "Mostrar facturas de todos los usuarios" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Sujeto' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Su nombre completo' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'su dirección e-mail' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Por favor describa su problema' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Modelo' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametros' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Fuerza' );
jr_define( '_JOMRES_METATITLE', 'Meta titulo' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Propiedades Encontradas" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Añada su propiedad : Paso 1 de 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Añada su propiedad : Paso 2 de 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'Mis negocios' );


jr_define( '_JOMRES_CART_TITLE', 'Mis reservas propuestas' );
jr_define( '_JOMRES_CART_INFO', 'Observe, estas reservas aún no ha sido guardadas. Si se ddesconecta o su sesión expira se perderá. Recuerde confirmar sus reservas!!!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirmar reserva(s)' );
jr_define( '_JOMRES_CART_OR', ' o ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Guardar para más tarde' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'No tiene reservas guardadas aún.' );
jr_define( '_JOMRES_CART_VIEWCART', 'Ver carrito' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Subdirectorio de archivos de idiomas' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Punto de inicio de la Latitud por defecto' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Punto de inicio de la Longitud por defecto' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', '¿Cuál debe ser la longitud/latitud por defecto en el mapa de Google en la pagina de editar propiedades, antes de que la marca haya sido movida?' );

jr_define( '_JOMRES_CLEARDATES', 'No tengo ninguna fecha aún' );

jr_define( '_JOMRES_MOBILE_REDIRECT', '¿Redireccionar a pagina sin marcos en dispositivos móviles? ' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres incluye una característica que redirecciones a un usuario a una vista de joomla que no incluye ni módulos ni cabeceras cuando detecta que el navegador pertenece a un dispositivo móvil. Si su plantilla de joomla esta optimizada para dispositivos móviles, puede desactivar esta característica marcando la opción No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', '¿Desde qué dirección se envian los e-mails?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Deje esta opción en blanco para desactivarla. Jomres usara la direccion (es) del hotel cuando envie emails a los clientes, sin embargo su servicio de email puede no aceptar emails desde direcciones arbitrarias (ej. sólo admiten mails de una dirección autorizada). En ese casom puede usar este campo para introducir una dirección que se introducirá en el campo DESDE para todos los emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Usar cache css?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "¿Buscar calendarios muestra la casilla de borrar fechas?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Ver como lista' );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Ver como Foto' );

jr_define( '_JOMRES_COMPARE', "Comparar" );
jr_define( '_JOMRES_REMOVE', "Borrar" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Volver a los resultados de búsqueda" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Añadir a Lista resumida" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Borrar de lista resumida" );
jr_define( '_JOMRES_VIEWSHORTLIST', "Vea su Lista resumida" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Politica de Cookies" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "La legislación de Europa requiere que todas las páginas que usen cookies pidan permiso a los visitantes para almacenar dichas cookies.
<br/>
Jomres usa el cookie local de su CMS para construir su propio fichero de sesión donde la información sobre las búsquedas de los usuario y otras actividades puede ser guardado, para hacer más placentera la visita del usuario. Creemos que esta funcionalidad común de Jomres está probablemente cubierta por las provisiones en la legislación definidas como Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'El almacenamiento o acceso es estrictamente necesario para proveer un servicio de sociedad de la información solicitado por el subscritor o usuario'</i> (vea http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) Hemos incluido esta característica para darle la posibilidad de prevenir que los usuarios accedan a otras páginas que no sea la de búsqueda en caso de que el usuario no permita que la cookie sea usada de esta manera. <br/>
Si la activa, Jomres mostrará un link de opción donde el usuario puede elegir tener la cookie que se guarda para ellos para usarla de este modo. Si no eligen esta opción Jomres sólo mostrará páginas básicas (como los detalles de la propiedad, mostrar lista corta, resultados de búsqueda, etc). 
<br/>
Marque esta opción como Si para activar esta política." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Importante: Política de Cookies" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "Usamos cookies para ayudar a mantener nuestro sitio relevante y fácil de usar." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Leer más..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "La legislación Europea requiere que todas las webs especifiquen claramente si se usan cookies y el propósito de las mismas." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "El motor de reservas y búsqueda de la página necesita ser capaz de recordar las opciones que has elegido para poder trabajar de la mejor manera posible. Para ello, necesita almacenar información que está asociada a un pequeño archivo llamado \"cookie\" que únicamente identifica su navegador, y para poder hacerlo, necesitamos que acepte que podemos utilizarla. Si no acepta esta política de cookies entonces se verá severamente limitado en lo que puede hacer en la página." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Si, acepto el uso de cookies según lo expuesto." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', '¿El depósito requerido es el coste de la primera noche?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Los precios se calcula en base a por noche. ¿Quiere que el depósito sea el cargo por una noche?. Si es así, puede ignorar las siguientes opciones.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "YNo ha añadido ningún artículo a su lista resumida." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Opciones para dispositivos móviles" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simular modo móvil" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Marque esto Si para forzar a Jomres a cambiar siempre a modo móvil. De gran utilidad si está desarrollando plantillas para dispositivos móviles. Nota: necesitará un plugin de plantilla para móvil instalado." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulación de IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "YPuede configurar las opciones de simulación para que sólo fuerce esta vista si el usuario de la IP es igual a = xxx.xxx.xxx.xxx, asi por ejemplo si esta desarrollando en un servidor local, su numero de ip debe ser 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "¿Activar modo seguro?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Marque Si para cambiar a modo seguro. Desactivará todos los plugins y Jomres sólo utilizará las funcionalidades del núcleo." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "PEA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "¿Usar el editor WYSIWYG de Jomres? (Recomendado)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "Si ha activado el editor WYSIWYG, puede elegir entre usar el edito html de su CMS, o el que proveemos con Jomres. Éste esta optimizado para el uso de los Gestores de la Propiedad y se recomienda que elija usarlo." );

jr_define( 'COMMON_NEXT', "Siguiente" );
jr_define( 'COMMON_CANCEL', "Cancelar" );
jr_define( 'COMMON_SUBMIT', "Enviar" );
jr_define( 'COMMON_SAVE', "Guardar" );
jr_define( 'COMMON_DELETE', "Borrar" );
jr_define( 'COMMON_RETURN', "Volver" );
jr_define( 'COMMON_CLOSE', "Cerrar" );
jr_define( 'COMMON_BACK', "Atrás" );

jr_define( 'COMMON_HOME', "Inicio" );

jr_define( 'COMMON_NEW', "Nuevo" );

jr_define( 'COMMON_SEND', "Enviar" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha se usa para asegurarse de que el cliente que usa los formularios web es humano, y se usa para evitar que a los gestores de la propiedad les llenen de Spam robots de internet. Para usar el formulario de contacto de Jomres deberás registrarte en <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> y configurar tu dominio para recibir la clave pública y privada. Cuando reciba estas claves, por favor introduzcalas más abajo. El servicio reCapcha es gratuito y lo provee Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Clave Pública" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Clave Privada" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Tiempo de espera de bloqueo de archivo" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "Para evitar el peligro de que los usuarios hagan una reserva doble, Jomres usa un fichero de bloqueo para evitar que una habitación sea añadida a la lista de habitaciones disponibles en el formulario de reserva si alguien mñas ha añadido dicha habitación al suyo la misma fecha. Por defencto este bloqueo se desactivará en 3600 segundos o una hora. Puede cambiar el tiempo de este fichero de bloqueo cambiando esta casilla." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "¿'Activar las plantillas bootstrap de Jomres' y sus funcionalidades?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "Si usa una platilla activa bootstrap en la parte frontal de su página marque esta opción Si." );

jr_define( 'COMMON_ACTION', "Acción" );
jr_define( 'COMMON_VIEW', "Vista" );

jr_define( 'BACKTOTOP', "Volver arriba" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Débil" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Fuerte" );

jr_define( '_JOMRES_INPUTFILTERING', "Filtrado de Entradas" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Nivel de filtrado de Entradas" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "La mayoría de los datos introducidos en el sistema se limpia primero quitando las etiquetas html, luego usando la funcionalidad de filtrado de varibles PHP para hacer los datos más seguros antes de que se introduzcan en la base de datos. Usted puede querer permitir ciertas entradas (por ejemplo entradas de texto en los detalles de página de la propiedad) para incluir HTML. Hay dos niveles de filtrada que puede usar en esta entrada, bien débil o fuerte. Sólo deberá usar la opción Débil si el usuario que introduce datos es de confianza, como compañeros administradores de sistema, de otra manera debe dejar esta opción como fuerte. Cunado lo marque como fuerte (recomendado) puede especificar que etiquetas permitir editando la siguiente opción 'Purificador HTML de etiquetas permitidas'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Etiquetas de Entrada permitidas" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Puede editar las etiquetas que el purificador de html aceotará a través de su sistema de filtrado. Por defecto son'p,b,strong,a[href],i' (por ejemplo. Parrafo, Negrita, Marcado, Enlaces y Cursivas). Para más información de etiquetas permitidas, por favor lea la documentación del purificador HTML en<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Puede cambiar esta opción, pero le recomendamos que la deje la que viene por defecto." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Entradas permitidas" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "Puede definir que entradas de formularios permitiran html editando esta opción, cualquier entrada añadida a esta lista será analizada a través del purificador HTML en lugar de tener todo el Html separado. Por defecto es: 'descripcion_propiedad horas_entrada_propiedad _actividades_area_propiedad direccion_conduciendo_propiedad aueropuertos_propiedad otrostransportes_propiedad politicasreclamacion_propiedad'. Añada más entradas añadiendo su nombre de formulario separado por un espacio." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "¿Detalles de la propiedad en pestañas?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Marque esta opción para mostrar los detalles de la propiedad en pestañas. Marque No si las quiere visualizar sin pestañas." );

jr_define( 'COMMON_PRINT', "Imprimir" );

jr_define( 'COMMON_EDIT', "Editar" );
jr_define( 'COMMON_COPY', "Copiar" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 iincluye el bootstrap de twitter por defecto,y Jomres tiene plantillas y funcionalidades que usarán estas plantillas. Por defecto si usa Homres en joomla 3 pude aún optar por usar las plantillas Bootstrap de Jomres y sus funcionalidades, sin embargo por defecto estas opciones están marcadas como NO." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Aqui están algunas alternativas que quizás quiera considerar." );

jr_define( '_JOMRES_BEEZ_WARNING', "Observe que su plantilla de Joomla actualmente seleccionada es Beez3. Le avisamos que esta platilla no es compatible con nuestras plantillas y le recomendamos cambiar su plantilla a una Bootstrapped como Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "¿Auto-detectar el país de los clientes?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "El sistema intentará automaticamente detectar el país de los clientes si no ha reservado antes. Puede marcar está opción No y definir que país prefiere que aparezca por defecto en el formulario de reserva en la siguiente opción." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "Sobre Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "ayuda" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 principal" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Cómo empezar" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "mantenimiento del sistema" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Control de Acceso" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "Herramientas para desarrolladores" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModulo" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "idiomas" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "generaciónde ingresos" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "contabilidad" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "reservas" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "estructura del sitio" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "gestión de usuarios" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Mi cuenta (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "Tareas programadas" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "Funcionalidad del portal" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Gestor de plugins" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integracion" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "Informes/estadísticas" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "impuestos" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Recibos(online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "ayuda" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Mejoras" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "métodos de pago" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tarifa por defecto" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "esto sólo se aplica a nuevas tarifas" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Años a mostrar" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Define el número de años a mostrar cuando edita un tipo de tarifa." );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "recibos" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "detalles de cuenta" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Acceso" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Desconexión" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "buscar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "panel de control" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserva" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "gestión" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "facturas" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "Ajustes" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "miscelanea" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Editar país" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "id de país" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Código del país" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Nombre del País" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Editar Región" );
jr_define( "_JOMRES_EDIT_REGION_ID", "id de Región" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Codigo del país" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Nombre de la región" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "Listar Países" );
jr_define( "_JOMRES_COM_LISTREGIONS", "Listar regiones" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Exportar definiciones" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "Esta característica le permite exportar las traducciones que han sido creadas usandao la característica de Traducción de Idioma. Creará un campo de texto con todos los datos requeridos para construir un nuevo archivo de idioma, todo lo que tienes que hacer es copiar y pegar esto en un nuevo archivo de idioma que puedes poner en un nuevo servidor basado en Jomres, o si quieres contribuir a la comunidad Jomres." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Traducir locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Traducir las cadenas de archivos de idioma" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, el usuario con el que estas accediendo no es un super usuario en Jomres, no podrás usar esta característica hasta que hayas usado la funcionalidad de Mostrar Perfil para hacerte tanto gestor y super gestor. Esto es una funcialidad de seguridad." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Diseño por defecto del listado de propiedades" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres usa plantillas para construir su diseño. Si usted es un diseñador esto puede cambiar como ves y sientes Jomres de forma fácil, no necesitas editar ningun código sólo debes editar la plantilla de marcad. Esta opción de editar la plantilla te permite crear tus propias versiones personalizadas de estas plantillas Jomres. <br/>
<br/>
Cuando personalizas una plantillas, tienes la opción de hacer la personalización especificamente para todos los tipos de propiedades o para un tipo específico de propiedad. Por ejemplo el plugin NMG aleatorio usa el archivo basic_module_output.html para construir el diseño. como resultado puedes crear diferentes personalizaciones del archivo basic_module_output.html para diferentes tipos de propiedades.<br/>
<br/>
Si una plantilla no ha sido editada antes, entonces podrá crear una nueva personalización de plantilla seleccionando la opción NUEVA. Cuando pulsas en Nueva se te lleva a una nueva página donde puedes editar esta plantilla. La disposición inicial se toma de la plantilla almacenada en el direcorio /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend ,cuando le das a guardar entonces tus personalizaciones se guardan en la base de datos y cuando Jomres usa esta plantilla se usan los marcadores almacenados el la base de datos, no los almacenados en la plantilla  /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Esto asegura que las personalizaciones no son borradas cuando actialices tu instalación de Jomres..<br/>
<br/>
Una vez que una plantilla ha sido personalizada, usted tiene mñas opciones. Puede Crear una Nueva copia de la plantilla original,como más arriba, Puede Copiar una personalización a otra plantilla personalziada, o por ejemplo si ya ha personalizado el archivo basic_module_output.html para hoteles, puede copiar esta personalización para otros tipos de propiedad como los automóviles. Puede Editar una personalización existente o la puede Borrar. Cuando borra una personalización, suponiendo que no hay otra personalizacion de esa platilla, Jomres volverá a usar la plantilla en el directorio /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Esto es muy útil si has editado una platilla pero no te gustan los cambios que has hecho. Puedes borrar la personalización y volver a empezar de nuevo con la plantilla original.<br/>
<br/>
Jomres está evolucionando constantemente y las plantillas del nucleo se están continuamente actualizando/modificando. Si usa la funcionalidad de Editar Plantilla estas actualizaciones no sobreescribirán sus personalizaciones, sin embargo también supondrá que su plantilla no usará las nuevas características de la plantilla del núcleo, ya que no tenemos manera de analizar si sus personalizaciones benefician o no a estos cambios. La característica de Editar Plantillas tomará en cuenta las últimas fechas de modificación de los archivos en el directorio  /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend y si detecta que la fechad e última modificaciónde un archivo es más nueva que la plantilla almacenada en la base de datos, entoces Jomres te avisará de este hecho. Esto no significa necesariamente que debas actualziar tu personalización de la plantilla, sin embargo te toca a ti decidir sin necesitas hacerlo ' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Estancia por un mínimo de" );
jr_define( "_JOMRES_NIGHTSFOR", " Noches para " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Lista de imágenes de la Propiedad.Muestras las imágenes de la propiedad como un gif si las imagenes de presentación animada están disponibles." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Mostrar solo com Gifs si la propiedad es una propiedad destacada." );

jr_define( "_JOMRES_AGENT", "Agente" );
jr_define( "_JOMRES_AGENT_DETAILS", "Detalles del Agente" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Anuncios del Agente" );

jr_define( "_JOMRES_PROPERTY_LANG", "Idioma de la Propiedad" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "El idioma por defecto de la Propiedad." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Aprobar automáticamente nuevas propiedades" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "Si marca esta opción como No entonces deberá aprobar manualmente las nuevas propiedades. Hasta que una propiedad no sea aprobada no podrá ser publicada por un Gestor/Super Gestor de la Propiedad." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Aprobaciones" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Propiedad esperando ser aprobadas" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No hay propiedades esperando aprobación" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Aprobar propiedad" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Revisar la propiedad" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "Esta Propiedad aún no ha sido aprobada. Una vez que lo sea serás capaz de publicarla." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Lo sentimos, no puedes publicar esta propiedad ya que no ha sido aprobada aún." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "Una nueva propiedad requiere aprobación" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "Se ha añadido una propiedad al sistema que requiere su aprobación. Pulse sobre el enlace para ver la lista de propiedades pendientes de aprobación :  " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Su propiedad ha sido aprobada" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Felicidades, su propiedad ha sido aprobada, por favor pulse el siguiente enlace para ver el panel de control de la propiedad : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Los nombres de las regiones son traducibles" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "A menos que tenga un servidor muy rápido le aconsejamos dejar marcado esta opción como NO. Debido a el amplio número de nombres de regiones, la traducción de dichos nombres ocupa una gran cantidad de memorios que puede ralentizar sus resultados de búsqueda." );

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
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS,false) );

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


jr_define('DATATABLES_SEMPTYTABLE'		, "Ningún dato disponible en esta tabla" );
jr_define('DATATABLES_SINFO'			, "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros" );
jr_define('DATATABLES_SINFOEMPTY'		, "Mostrando registros del 0 al 0 de un total de 0 registros" );
jr_define('DATATABLES_SINFOFILTERED'	, "(filtrado de un total de _MAX_ registros)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "Mostrar _MENU_ registros" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "Cargando..." );
jr_define('DATATABLES_SPROCESSING'		, "Procesando..." );
jr_define('DATATABLES_SSEARCH'			, "Buscar:" );
jr_define('DATATABLES_SZERORECORDS'		, "No se encontraron resultados" );
jr_define('DATATABLES_SFIRST'			, "Primero" );
jr_define('DATATABLES_SLAST'			, "Último" );
jr_define('DATATABLES_SNEXT'			, "Siguiente" );
jr_define('DATATABLES_SPREVIOUS'		, "Anterior" );
jr_define('DATATABLES_SSORTASCENDING'	, ": Activar para ordenar la columna de manera ascendente" );
jr_define('DATATABLES_SSORTDESCENDING'	, ": Activar para ordenar la columna de manera descendente" );


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

jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Set this option to Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );

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

jr_define( "_JOMRES_PROPERTYTYPE_FLAG", "Which management process?" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_DESC", "Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? If the property type is intended for properties that don't offer room or property booking functionality ( like tours ) choose None." );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Rooms in property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_VILLA", "Entire property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_NEITHER", "None" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Both" ); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable 
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Management process" );

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

jr_define( '_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site forntend to manage your properties and bookings.' );
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Every property in Jomres has a rental management process. Hotels/B&Bs/Pensions rent out individual rooms, and cottages/villas/apartments rent out the entire property. This is invisible to the property manager, but for them to be able to create tariffs for their property you must first add room types that are appropriate for the property type.

For example, A hotel property type would normally need several room types ( double rooms, single rooms and twins ) whereas a villa can only have one room type, e.g. 2 Bedrooms, 5 bedrooms.

It is possible to create room types for properties like Tours. This allows customers to search for properties like tours only, but the Property manager will not create tariffs for this property type, so the Management Process is not relevant to them.
');

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );