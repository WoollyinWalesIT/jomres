<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


	jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'This is the property cpanel frontpage.');

	jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'This is the property tape chart which which provides an overview of real-time bookings, availability and occupancy at a glance.');

	jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'This script allows the user to compare several properties against each other, up to a maximum of 3 properties.');
	jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'A comma separated list of property uids, eg. 12,8,7');

	jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Builds the contact owner form. ');
	jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Pass the property uid of the property to be contacted. Pass 0 (zero) to instead contact site admin. ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Shows the Company Info page pulling details from the property manager's 'Your company details' in Property Configuration. The details in this tab would typically be used for correspondance, allowing managers to have both the hotel/aparment address, and a separate address for business purposes.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Shows the property's calendar");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown. ');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Months to show, default is 24 if not otherwise set. Not compatible with the Show Just Month variable.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Set this to 1 if you just want to show the current month on it's own. The months_to_show setting will be ignored if show_just_month is used in the same shortcode, so you should use one or the other, not both at the same time.");

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Shows just the Property description text.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Shows just the Property description text.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Shows just the Property features.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Shows just the Property header template.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Shows just the Property room types.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Shows just the Property main image.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Shows just the Property map.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Shows the property More Info text.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR code that links to gmaps. This can be scanned into a phone using a qr code reading app that provides directions to the property.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Shows a property's reviews.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Shows a property's review summary.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID of the property.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Shows an individual room.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID of the room.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Shows a property's rooms.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID of the property.');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Muestra las imágenes de las habitaciones de una propiedad como una presentación de diapositivas.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propiedad.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Muestra la presentación de diapositivas de la propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propiedad.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Muestra las tarifas de la propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID de la propiedad.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Muestra la dirección comercial del sitio tal como se ingresó en Configuración del sitio > Detalles de su empresa.");

	jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Muestra los términos y condiciones de la propiedad');
	jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID de la propiedad.');

	jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Muestra el calendario de la interfaz de usuario de la propiedad, que es un calendario diferente al calendario grande principal y se basa en la funcionalidad del calendario de la interfaz de usuario de Jquery.");
	jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pasar el uid de propiedad de la propiedad a mostrar. ');
	jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Establézcalo en 1 para no mostrar la leyenda');

	jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Muestra los resultados de búsqueda, que se pueden mejorar agregando parámetros de búsqueda. No recomendamos que use todos los parámetros al mismo tiempo, porque terminará con criterios de búsqueda demasiado limitados. En su lugar, debe limitarse a uno o dos parámetros, por ejemplo, buscar por país y número de estrellas.");
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Buscar por país, utilizando el código ISO Alpha-2, por ejemplo, GB o DE.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Buscar por región. Como las regiones se guardan en la base de datos, debe usar la ID de la región. Visite Administrador > Jomres > Estructura del sitio > Listar regiones y desplace el enlace Editar, allí verá el número de ID de la región .");
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'El nombre completo de la ciudad que desea buscar.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Buscar propiedades con características particulares. Los ID de características se pueden encontrar en Administrador > Jomres > Estructura del sitio > Características de la propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Buscar propiedades con ciertos tipos de habitación. Los ID de tipo de habitación se pueden encontrar en Administrador > Jomres > Estructura del sitio > Tipos de habitación');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Buscar propiedades de un tipo de propiedad específico. Los identificadores de tipo de propiedad se pueden encontrar en Administrador > Jomres > Estructura del sitio > Tipos de propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Buscar propiedades dentro de un rango de precio específico.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Buscar propiedades cuyas tarifas permitan números de invitados de ciertos valores, por ejemplo grupos de 6.");
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Buscar propiedades de N estrellas.');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Buscar por fecha de llegada. Debe combinarse con el parámetro de fecha de salida');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Buscar por fecha de salida. Debe combinarse con el parámetro de fecha de llegada');
	jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Buscar por categoría de propiedad.');

	jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Ver la página de un agente. Puede pasar YA SEA un uid de propiedad, o la identificación del agente, si la conoce.");
	jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un uid de propiedad, esto mostrará el agente de la propiedad.");
	jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID de la base de datos del administrador, si se conoce.");

	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Muestra las propiedades populares, típicamente usadas en posiciones de módulos o widgets.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Mostrar solo propiedades de este tipo de propiedad específico.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Establézcalo en 1 para mostrar los módulos optimizados para una posición de widget/módulo vertical');

	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Muestra una selección aleatoria de propiedades, típicamente usadas en posiciones de módulos o widgets.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Mostrar solo propiedades de este tipo de propiedad específico.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Establézcalo en 1 para mostrar los módulos optimizados para una posición de widget/módulo vertical');

	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Muestra las propiedades vistas más recientemente del invitado, generalmente utilizadas en posiciones de módulos o widgets");
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'El número máximo de propiedades que se pueden mostrar.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Establézcalo en 1 para mostrar los módulos optimizados para una posición de widget/módulo vertical');

	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Muestra una serie de propiedades, normalmente usadas en posiciones de módulos o widgets.');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Los ID de propiedad de las propiedades que desea mostrar');
	jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Establézcalo en 1 para mostrar los módulos optimizados para una posición de widget/módulo vertical');

	jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Muestra el menú desplegable de selección de moneda');
	jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Habilitar/deshabilitar la salida de plantilla alternativa. Esta salida está diseñada para usarse en las barras de herramientas Bootstrap.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Muestra la página del carrito de compras.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Muestra el módulo/widget del carrito de compras.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Muestra el menú principal. Tenga en cuenta que si está ejecutando una versión personalizada de mainmenu_wrapper_alternate.html, por ejemplo, en /templates/jr_leohtian/html/com_jomres, es posible que deba modificarla para reemplazar <i>jomres_alternate_menu_position< /i> con MENU_LOCATION entre llaves.');
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Esta página le permite cargar imágenes para su propiedad y las cosas que ofrece. Tiene un botón principal y un segundo botón que le permite seleccionar recursos específicos para cargar imágenes. Entonces, la propiedad principal image y la presentación de diapositivas solo mostrarán un botón, pero si ha creado alguno, por ejemplo, Extras opcionales o Habitaciones, verá un segundo botón donde puede cargar imágenes para esos recursos específicos.');
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Esta página le permite cargar imágenes para su propiedad y las cosas que ofrece. Tiene un botón principal y un segundo botón que le permite seleccionar recursos específicos para cargar imágenes. Entonces, la propiedad Principal image y la presentación de diapositivas solo mostrarán un botón, pero si ha creado extras opcionales, verá un segundo botón donde puede cargar imágenes para esos recursos específicos.');


	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Primero, elija la(s) imagen(es) que desea cargar haciendo clic en Agregar imagen o usando Arrastrar y colocar. Estos aparecerán en la columna del lado derecho.</li>
  <li>Sobre esta área, use el botón \"Elegir el recurso\" para elegir el recurso para el que desea cargar imágenes. Es posible que se le ofrezca la opción de elegir un recurso específico debajo. </li>
  <li> Una vez que haya elegido un recurso, puede hacer clic en el botón Cargar imagen debajo de una imagen para asociarla con ese recurso. Una vez que se haya cargado una imagen, desaparecerá de la columna en el sitio de la derecha y aparecerá en la izquierda.</li>
  <li>Utilice el botón Papelera junto a las imágenes existentes para eliminar las imágenes que ya no desea que se muestren.</li>
  <li>Puede cambiar el orden en que se muestran los archivos en la presentación de diapositivas renombrándolos antes de cargarlos, ya que se muestran en las páginas en orden alfabético.</li>
</ol>
 ");

	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Junto al botón Recurso, puede ver un botón Vista previa. Si hace clic en este, verá una ventana emergente que le muestra cómo se verán las imágenes cargadas actualmente en una página. Esto ayuda a darle una idea de cómo se verán las imágenes para sus clientes.");

	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "No hay límite para la cantidad de imágenes que puede cargar. Las imágenes cambian de tamaño automáticamente cuando se cargan. Solo puede cargar archivos JPG y PNG.");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealmente, cualquier imagen que cargue sería al menos ");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " píxeles de ancho, de lo contrario, pueden verse borrosos después de haber sido cargados.");

	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Cualquier imagen que cargue no puede tener más de ");
	jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " en tamaño.");

	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Elija el recurso para el que desea cargar imágenes");
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurso específico");
	jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imágenes ya cargadas para este recurso");


	jr_define('_JOMRES_MARKDOWN_TITLE', 'Formato de texto');
	jr_define('_JOMRES_MARKDOWN_DESC', 'Puede ingresar texto aquí usando el formato Markdown simple. No necesita saber nada de HTML, solo formatee el texto de acuerdo con estos ejemplos.');
	jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Énfasis');
	jr_define('_JOMRES_MARKDOWN_BOLD', 'negrita');
	jr_define('_JOMRES_MARKDOWN_ITALICS', 'cursiva');
	jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'tachado');
	jr_define('_JOMRES_MARKDOWN_HEADERS', "Encabezados");
	jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Encabezado grande');
	jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Encabezado medio");
	jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Pequeño encabezado');
	jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Pequeño encabezado');
	jr_define('_JOMRES_MARKDOWN_LISTS', "Listas");
	jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Elemento de lista genérico');
	jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Elemento de lista numerada');
	jr_define('_JOMRES_MARKDOWN_LINKS', 'Enlaces');
	jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Texto para mostrar');
	jr_define('_JOMRES_MARKDOWN_QUOTES', 'Cotizaciones');
	jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Esta es una cita');
	jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', '¡Puede abarcar varias líneas!');
	jr_define('_JOMRES_MARKDOWN_IMAGES', 'Imágenes');
	jr_define('_JOMRES_MARKDOWN_TABLE', 'Tablas');
	jr_define('_JOMRES_MARKDOWN_COLUMN', 'Columna');


	jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', '¿Mostrar imágenes de propiedades como presentación de diapositivas en la lista de propiedades?');
	jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Si se establece en sí, se mostrará una presentación de diapositivas de las imágenes principales de la propiedad. Si se establece en no, se mostrará la primera imagen principal de la propiedad.');

	jr_define('EDIT_CMS_USER', 'Editar usuario de CMS');

	jr_define('RESERVA_HECHA_POR', 'Reserva realizada por');

	jr_define('_JOMRES_ROUTER_FEATURES', 'Servicios');
	jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipos de habitaciones');

	jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL de formulario de reserva externa');
	jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Aquí puede establecer una URL externa si desea utilizar un sitio web de terceros para realizar reservas. Todos los botones de reserva de jomres apuntarán a esta URL. Deje este campo en blanco si desea utilizar el formulario de reserva de Jomres .');

	jr_define('_JOMRES_ROOM_TAGLINE', 'Eslogan (descripción corta de la habitación/subtítulo)');
	jr_define('_JOMRES_ROOM_DESCRIPTION', 'Descripción de la habitación');

	jr_define('_JOMRES_GUEST_BLACKLISTED', 'Invitado en la lista negra');
	jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Si este huésped está en la lista negra, ya no podrá hacer reservas en esta propiedad');
	jr_define('_JOMRES_SESSION_HANDLER', 'Manejador de sesión');
	jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Guardar archivos de sesión de jomres en el disco o en la base de datos. Recomendado: base de datos');
	jr_define('_JOMRES_MAP_HEIGHT', "Altura del mapa (px) ");
	jr_define('_JOMRES_MAP_ZOOMLEVEL', "Nivel de zoom del mapa");
	jr_define('_JOMRES_MAP_MAPTYPE', "Tipo de mapa");

	jr_define('_JOMRES_TEMPLATE_PACKAGES', "Administrador de anulación de plantillas");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Los paquetes de plantillas son complementos que pueden proporcionar plantillas anuladas para varios archivos de plantillas centrales de Jomres.");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Esta página enumera los archivos de plantilla que pueden ser anulados por los archivos de plantilla de un paquete de plantilla. Si desea anular un determinado archivo de plantilla, haga clic en el botón de edición de ese archivo, en la página siguiente se le puede elegir con qué versión desea anular. Tenga en cuenta que estas anulaciones tienen prioridad sobre Jomres Core y cualquier anulación de plantilla/tema de Wordpress o Joomla. Puede deshabilitar una anulación eliminándola en la página Lista de anulaciones de plantillas");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nombre de la plantilla");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Ruta actual");
	jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "No anulado");
	jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Puede elegir qué archivo de plantilla anular los archivos de plantilla Core cambiando el menú desplegable");


	jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Porcentaje de habitaciones reservadas");

	jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Muestra el formulario de creación de nueva propiedad.');

	jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Map zoom, 1: World 5: Landmass/continent 10: City 15: Streets 20: Buildings ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Número de reseñas para mostrar');

	jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Muestra las propiedades preseleccionadas de los usuarios. Si el usuario está registrado, estos son sus favoritos, si no ha iniciado sesión, solo aquellos elementos agregados a través del icono Favorito durante la visita.');

	jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínimo de depósito');
	jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Si el depósito calculado es menor que esta cifra, establezca el depósito en este valor en su lugar. Esta cifra podría anularse si no cumple con la configuración de depósito mínimo del sitio. Déjela configurada en 0 para no use la configuración.");

	jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Muestra el formulario de consentimiento compatible con GDPR.');

	jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Property room type list');
	jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mostrar un tipo de habitación de propiedad');

	jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Mostrar el formulario de inicio de sesión');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Mostrar una lista de habitaciones de un determinado tipo de habitación');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Id. de tipo de habitación');

	jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Tablero');

	jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Muestra una lista de propiedades sindicadas');
	jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'El número de propiedades sindicadas para mostrar');
	jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Si mostrar MRP (hoteles/bed & breakfast) o SRP (cabañas/apartamentos/villas). El valor predeterminado se determina a partir del UID de propiedad de la propiedad actual, si no está disponible, entonces los MRP son Para elegir un tipo específico, establezca este valor en 0 para srps o en 1 para mrps.');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Muestra las estrellas de una propiedad. Estas se establecen en Configuración de la propiedad, si la propiedad es un MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID de la propiedad.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Opcional. Si la identificación de la propiedad no está configurada, puede pasar un número en su lugar');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Opcional. Ruta de plantilla alternativa. No se puede pasar a través de url. Debe ser absoluta.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Opcional. Nombre de plantilla alternativo.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Muestra una salida de tipo de módulo de propiedad para colocar con códigos abreviados. La salida del módulo de propiedad es un pequeño fragmento de detalles de propiedad diseñado para mostrarse en varios lugares de la página.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Opcional. ID de la propiedad. Si la propiedad uid no está configurada, se mostrará una propiedad publicada al azar');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'Opcional. Nombre de plantilla alternativo, sin ".html". La plantilla debe existir en el directorio de anulación de plantilla. Esto le permite usar versiones personalizadas de "basic_module_output.html" en diferentes lugares de sus páginas. ' );