<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Esta es la propiedad cpanel frontpage.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Este es el gráfico de cinta de propiedades que proporciona una descripción general de las reservas en tiempo real, la disponibilidad y la ocupación de un vistazo.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Este script permite al usuario comparar varias propiedades entre sí, hasta un máximo de 3 propiedades.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Una lista separada por comas de uids de propiedad, p. ej. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Crea el formulario de contacto del propietario.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Pase el uid de propiedad de la propiedad a contactar. Pase 0 (cero) para contactar al administrador del sitio.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Muestra la página de información de la empresa extrayendo detalles del campo Detalles de su empresa del administrador de la propiedad en la Configuración de la propiedad. Los detalles en esta pestaña se usarían normalmente para la correspondencia, lo que permite a los administradores tener la dirección del hotel / apartamento y una dirección separada para fines comerciales. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Muestra el calendario de la propiedad");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pasar el uid de propiedad de la propiedad que se mostrará.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Meses para mostrar, el valor predeterminado es 24 si no se establece lo contrario. No es compatible con la variable Mostrar solo mes.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Establezca esto en 1 si solo desea mostrar el mes actual por sí solo. La configuración de meses_para_mostrar se ignorará si se usa show_just_month en el mismo código, por lo que no debe usar el mismo código corto. al mismo tiempo.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Muestra solo el texto de descripción de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Muestra solo el texto de descripción de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Muestra solo las características de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Muestra solo la plantilla de encabezado de propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Muestra solo los tipos de habitación de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Muestra solo la imagen principal de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Muestra solo el mapa de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Muestra el texto de la propiedad Más información.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Código QR que enlaza con gmaps. Esto se puede escanear en un teléfono usando una aplicación de lectura de código qr que proporciona direcciones a la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Muestra las reseñas de una propiedad");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Muestra el resumen de revisión de una propiedad.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Muestra una habitación individual.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID de la habitación.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Muestra las habitaciones de una propiedad.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Muestra las imágenes de la habitación de una propiedad como una presentación de diapositivas.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Muestra la presentación de diapositivas de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Muestra las tarifas de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Muestra la dirección comercial del sitio ingresada en Configuración del sitio> Detalles de su empresa");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Muestra los términos y condiciones de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID de la propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Muestra el calendario de la interfaz de usuario de la propiedad, que es un calendario diferente al calendario grande principal y se basa en la funcionalidad de calendario de la interfaz de usuario de Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pasar el uid de propiedad de la propiedad que se mostrará.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Establezca esto en 1 para no mostrar la leyenda.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Muestra los resultados de la búsqueda, que se pueden mejorar agregando parámetros de búsqueda. No recomendamos que use todos los parámetros al mismo tiempo, porque terminará con criterios de búsqueda demasiado limitados. En su lugar, debería limitarse a uno o dos parámetros, por ejemplo, buscar por país y número de estrellas. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Buscar por país, utilizando el código ISO Alpha-2, por ejemplo, GB o DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Buscar por región. A medida que las regiones se guardan en la base de datos, debe usar el ID de la región. Visite Administrador> Jomres> Estructura del sitio> Listar regiones y pase el cursor por el enlace Editar, allí verá el número de ID de la región . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'El nombre completo de la ciudad que desea buscar.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Buscar propiedades con características particulares. Los identificadores de características se pueden encontrar en Administrador> Jomres> Estructura del sitio> Características de la propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Buscar propiedades con ciertos tipos de habitación. Los identificadores de tipo de habitación se pueden encontrar en Administrador> Jomres> Estructura del sitio> Tipos de habitación.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Buscar propiedades de un tipo de propiedad específico. Los identificadores de tipo de propiedad se pueden encontrar en Administrador> Jomres> Estructura del sitio> Tipos de propiedad.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Buscar propiedades dentro de un rango de precios específico.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Buscar propiedades cuyas tarifas permitan un número de huéspedes de ciertos valores, por ejemplo, grupos de 6 personas");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Buscar propiedades de N estrellas.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Buscar por fecha de llegada. Debe combinarse con el parámetro de fecha de salida');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Buscar por fecha de salida. Debe combinarse con el parámetro de fecha de llegada');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Buscar por categoría de propiedad.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Ver la página de un agente. Puede pasar O bien un uid de propiedad o el id del agente en sí, si lo conoce.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un uid de propiedad, esto mostrará el agente de la propiedad.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID de la base de datos del administrador, si se conoce");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Muestra las propiedades populares, normalmente utilizadas en posiciones de módulo o widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Mostrar solo propiedades de este tipo de propiedad específico.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Establecer en 1 para mostrar los módulos optimizados para una posición vertical de módulo / widget.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Muestra una selección aleatoria de propiedades, normalmente utilizadas en posiciones de módulo o widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Mostrar solo propiedades de este tipo de propiedad específico.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Establecer en 1 para mostrar los módulos optimizados para una posición vertical de módulo / widget.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Muestra las propiedades visualizadas más recientemente por el huésped, normalmente utilizadas en posiciones de módulo o widget.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Establecer en 1 para mostrar los módulos optimizados para una posición vertical de módulo / widget.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Muestra una serie de propiedades, normalmente utilizadas en posiciones de módulo o widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Los identificadores de propiedad de las propiedades que desea mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Establecer en 1 para mostrar los módulos optimizados para una posición vertical de módulo / widget.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Muestra el menú desplegable de selección de moneda.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Habilitar / deshabilitar la salida de plantilla alternativa. Esta salida está pensada para su uso en barras de herramientas Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Muestra la página del carrito de compras.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Muestra el módulo / widget del carrito de la compra.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Muestra el menú principal. Tenga en cuenta que si está ejecutando una versión personalizada de mainmenu_wrapper_alternate.html en, por ejemplo, / templates / jr_leohtian / html / com_jomres, entonces puede que necesite modificar la posición de jomres_alterna. / i> con MENU_LOCATION entre llaves. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Esta página te permite subir imágenes para tu propiedad y las cosas que ofreces. Tiene un botón principal y un segundo botón que te permite seleccionar recursos específicos para subir imágenes. Entonces, la propiedad principal La imagen y la Presentación de diapositivas solo mostrarán un botón, pero si ha creado, por ejemplo, Extras opcionales o Salas, verá un segundo botón donde puede cargar imágenes para esos recursos específicos. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Esta página te permite subir imágenes para tu propiedad y las cosas que ofreces. Tiene un botón principal y un segundo botón que te permite seleccionar recursos específicos para subir imágenes. Entonces, la propiedad principal La imagen y la Presentación de diapositivas solo mostrarán un botón, pero si ha creado Extras opcionales, verá un segundo botón donde puede cargar imágenes para esos recursos específicos. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Primero, elija las imágenes que desea cargar haciendo clic en Agregar imagen o usando Arrastrar y soltar. Estos aparecerán en la columna del lado derecho. </li>
  <li> Por encima de esta área, use el botón \"Elija el recurso \" para elegir el recurso para el que desea cargar imágenes. Es posible que se le ofrezca la opción de elegir un recurso específico debajo. </li>
  <li> Una vez que haya elegido un recurso, puede hacer clic en el botón Cargar imagen debajo de una imagen para asociarlo con ese recurso. Una vez que se ha subido una imagen, desaparecerá de la columna del sitio de la derecha y aparecerá en el de la izquierda. </li>
  <li> Utilice el botón Papelera junto a las imágenes existentes para eliminar las imágenes que ya no desea que se muestren. </li>
  <li> Puede cambiar el orden en que se muestran los archivos en la presentación de diapositivas cambiándolos de nombre antes de cargarlos, ya que se muestran en páginas en orden alfabético. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Junto al botón Recurso, es posible que vea un botón Vista previa. Si hace clic en este, verá una ventana emergente que le muestra cómo se verán las imágenes cargadas actualmente en una página. idea de cómo se verán las imágenes a sus clientes. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "No hay límite en la cantidad de imágenes que puede cargar. Las imágenes cambian de tamaño automáticamente cuando se cargan. Solo puede cargar archivos JPG y PNG");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Lo ideal sería que cualquier imagen que subas sea al menos");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "píxeles de ancho, de lo contrario pueden verse borrosos después de haber sido cargados.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Las imágenes que subas no pueden tener más de");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "en tamaño");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Elija el recurso para el que desea cargar imágenes");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurso específico");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imágenes ya cargadas para este recurso");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Formato de texto');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Puede ingresar texto aquí usando un formato de Markdown simple. No necesita saber nada de HTML, solo use los botones para hacer que la información se vea como desea, o formatee el texto de acuerdo con estos ejemplos.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Énfasis');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'negrita');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'cursiva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'tachado');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Encabezados");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Cabecera grande');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Encabezado medio");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Encabezado pequeño');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Encabezado pequeño');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Listas");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Elemento de lista genérico');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Elemento de lista numerado');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Enlaces');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Texto para mostrar');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Cotizaciones');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Esto es una cita.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', '¡Puede abarcar varias líneas!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Imágenes');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tablas');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Columna');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', '¿Mostrar imágenes de propiedades como presentación de diapositivas en la lista de propiedades?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Si se establece en sí, se mostrará una presentación de diapositivas de las imágenes principales de la propiedad. Si se establece en no, se mostrará la primera imagen principal de la propiedad.');

jr_define ('EDIT_CMS_USER', 'Editar usuario de CMS');

jr_define ('BOOKING_MADE_BY', 'Reserva hecha por');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Servicios');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Tipos de habitaciones');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL del formulario de reserva externa');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Aquí puede establecer una URL externa si desea utilizar un sitio web de terceros para realizar reservas. Todos los botones de reserva de jomres apuntarán a esta URL. Deje este campo en blanco si desea utilizar el formulario de reserva de Jomres . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Lema (descripción / subtítulo breve de la habitación)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Descripción de la habitación');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Invitado en la lista negra');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Si este huésped está en la lista negra, entonces ya no podrá realizar reservas en esta propiedad.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Controlador de sesión');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Guardar archivos de sesión de jomres en el disco o en la base de datos. Recomendado: base de datos');
jr_define ('_JOMRES_MAP_HEIGHT', "Altura del mapa (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Nivel de zoom del mapa");
jr_define ('_JOMRES_MAP_MAPTYPE', "Tipo de mapa");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Administrador de anulación de plantillas");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Los paquetes de plantillas son complementos que pueden proporcionar plantillas de reemplazo para varios archivos de plantilla de Jomres principales.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Esta página enumera todos los archivos de plantilla que pueden ser reemplazados por los archivos de plantilla de un paquete de plantilla. Si desea reemplazar un archivo de plantilla determinado, haga clic en el botón editar para ese archivo, en la página siguiente aparecerá puede elegir la versión con la que desea anular. Tenga en cuenta que estas anulaciones tienen prioridad sobre Jomres Core y cualquier anulación de tema / plantilla de Wordpress o Joomla. Puede desactivar una anulación eliminándola en la página Lista de anulaciones de plantillas. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nombre de plantilla");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Ruta actual");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "No anulado");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Puede elegir qué archivo de plantilla anular los archivos de plantilla Core cambiando el menú desplegable");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Porcentaje de habitaciones reservadas");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Muestra el formulario de creación de nueva propiedad.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zoom del mapa, 1: Mundo 5: Tierra / continente 10: Ciudad 15: Calles 20: Edificios');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Número de reseñas para mostrar');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Muestra las propiedades preseleccionadas de los usuarios. Si el usuario está registrado, estas son sus favoritas, si no está registrado, solo los elementos agregados a través del icono Favorito durante la visita.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínimo de depósito');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Si el depósito calculado es menor que esta cifra, establezca el depósito en este valor. Esta cifra podría anularse si no satisface la configuración de depósito mínimo del sitio. Déjelo en 0 para no utilice el ajuste. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Muestra el formulario de consentimiento compatible con GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lista de tipos de habitación de propiedad');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mostrar un tipo de habitación de propiedad');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Mostrar el formulario de inicio de sesión');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Mostrar una lista de habitaciones de un determinado tipo de habitación');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Tipo de habitación id');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Panel de control');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Muestra una lista de propiedades sindicadas');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'El número de propiedades sindicadas para mostrar');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Ya sea para mostrar MRP (hoteles / bed & breakfast) o SRP (cabañas / apartamentos / villas). El valor predeterminado se determina a partir del uid de la propiedad actual, entonces los MRP no están disponibles. se muestra. Para elegir un tipo específico, establezca este valor en 0 para srps, o 1 para mrps. ');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Muestra las estrellas de una propiedad. Estas se establecen en Configuración de la propiedad, si la propiedad es un MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID de la propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Opcional. Si no se establece la identificación de la propiedad, puede pasar un número en su lugar');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Opcional. Ruta de plantilla alternativa. No se puede pasar a través de url. Debe ser absoluta.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Opcional. Nombre de plantilla alternativo.');
