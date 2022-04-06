<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Aquesta és la pàgina principal del cpanel de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Aquest és el gràfic de cintes de propietats que proporciona una visió general de les reserves en temps real, la disponibilitat i l\'ocupació d\'un cop d\'ull.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Aquest script permet a l\'usuari comparar diverses propietats entre si, fins a un màxim de 3 propietats.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Una llista separada per comes d\'úids de propietats, per exemple, 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Construeix el formulari del propietari del contacte');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Passar l\'identificador de propietat de la propietat amb la qual es vol contactar. Passeu 0 (zero) per posar-vos en contacte amb l\'administrador del lloc.');

jr_define ("_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS", "Mostra la pàgina Informació de l\'empresa extret detalls del camp Detalls de l\'empresa del gestor de propietats a Configuració de la propietat. Els detalls d\'aquesta pestanya normalment s'utilitzaran per correspondència, cosa que permetrà als administradors tenir l\'adreça de l\'hotel / apartament i una adreça separada per a fins comercials. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Mostra el calendari de la propietat");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Passar l\'idioma de propietat de la propietat que es mostrarà.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Mesos per mostrar, el valor per defecte és 24 si no es defineix d\'una altra manera. No és compatible amb la variable Mostra només el mes.');
jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH", "Establiu-ho a 1 si només voleu mostrar el mes actual. El paràmetre months_to_show s'ignorarà si show_just_month s'utilitza amb el mateix shortcode, al mateix temps.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Mostra només el text de la descripció de la propietat');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Mostra només el text de la descripció de la propietat');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID de la propietat');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Mostra només les característiques de la propietat.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Mostra només la plantilla de capçalera de propietat');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Mostra només els tipus d\'habitació de la propietat.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Mostra només la imatge principal de la propietat');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Mostra només el mapa de propietats.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Mostra el text Més informació de la propietat');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS", "codi QR que enllaça amb gmaps. Es pot escanejar en un telèfon mitjançant una aplicació de lectura de codi qr que proporciona indicacions per a la propietat.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Mostra les ressenyes d\'una propietat.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Mostra el resum de la revisió d\'una propietat.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Mostra una habitació individual.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID de la sala.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Mostra les habitacions d\'una propietat.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Mostra les imatges de l\'habitació d\'una propietat com a presentació de diapositives.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Mostra la presentació de diapositives.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Mostra les tarifes de la propietat.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Mostra l\'adreça comercial del lloc tal com s'ha introduït a Configuració del lloc> Detalls de la vostra empresa.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Mostra els termes i condicions de la propietat');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID de la propietat.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Mostra el calendari de la interfície d\'usuari de la propietat, que és un calendari diferent del calendari gran principal i es basa en la funcionalitat del calendari de la interfície d\'usuari de Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Passar l\'identificador de propietat de la propietat que es mostrarà.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Estableix-ho en 1 per no mostrar la llegenda.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Mostra els resultats de la cerca, que es poden millorar afegint paràmetres de cerca. No us recomanem que utilitzeu tots els paràmetres alhora, ja que acabareu amb criteris de cerca massa limitats. En lloc d\'això, heu de restringir-vos a només un o dos paràmetres, per exemple, cerca per país i nombre d\'estrelles. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Cerca per país, mitjançant el codi ISO Alpha-2, per exemple, GB o DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Cerca per regió. Com que les regions es guarden a la base de dades, heu d\'utilitzar l\'identificador de regió. Visiteu Administrador> Jomres> Estructura del lloc> Llista de regions i passeu el cursor a l\'enllaç Edita, allà veureu el número d\'identificació de la regió. . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'El nom complet de la ciutat que voleu cercar.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Cerca de propietats amb funcions particulars. Els identificadors de funcions es poden trobar a Administrador> Jomres> Estructura del lloc> Característiques de la propietat.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Cerca de propietats amb determinats tipus d\'habitació. Els identificadors de tipus d\'habitació es poden trobar a Administrador> Jomres> Estructura del lloc> Tipus d\'habitacions.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Cerca de propietats d\'un tipus de propietat específic. Els identificadors de tipus de propietat es poden trobar a Administrador> Jomres> Estructura del lloc> Tipus de propietats.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Cerca de propietats dins d\'un interval de preus específic.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Cerqueu propietats que tinguin tarifes per permetre el nombre de convidats de certs valors, per exemple grups de 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Cerca de propietats de N estrelles.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Cerca per data d\'arribada. S\'ha de combinar amb el paramètric DateDate de sortida');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Cerca per data de sortida. S\'ha de combinar amb el paramètric d\'arribadaData');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Cerca per categoria de propietat.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Visualitzeu la pàgina d\'un agent. Podeu passar TANT un uid de propietat, com l\'identificador de l\'agent en si mateix, si el coneixeu.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un uid de propietat, mostrarà l\'agent de la propietat.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Identificador de base de dades del gestor, si es coneix.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Mostra les propietats populars, que normalment s\'utilitzen a les posicions del mòdul o del widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'El nombre màxim de propietats que es poden mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Mostra només propietats d\'aquest tipus de propietats específiques.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Estableix a 1 per mostrar els mòduls optimitzats per a una posició vertical del giny / mòdul.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Mostra una selecció aleatòria de propietats, que normalment s\'utilitzen a les posicions del mòdul o del widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'El nombre màxim de propietats que es poden mostrar.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Mostra només propietats d\'aquest tipus de propietats específiques.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Estableix a 1 per mostrar els mòduls optimitzats per a una posició vertical del giny / mòdul.');

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
jr_define ("_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC", "Aquí podeu establir un URL extern si voleu fer servir un lloc web de tercers per fer reserves. Tots els botons de reserva de jomres apuntaran a aquest URL. Deixeu aquest camp en blanc si voleu utilitzar el formulari de reserva de Jomres . ");

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
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Aquesta pàgina llista tots els fitxers de plantilla que puguin anul·lar els fitxers de plantilla d\'un paquet de plantilles. Si voleu substituir un determinat fitxer de plantilla, feu clic al botó d\'edició d\'aquest fitxer, a la pàgina següent apareixerà podeu escollir amb quina versió voleu anul·lar. Tingueu en compte que aquestes substitucions tenen prioritat tant sobre Jomres Core com sobre qualsevol tema / plantilla de Wordpress o Joomla. Podeu desactivar una substitució suprimint-la a la pàgina Anul·lacions de plantilles de llista. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nom de la plantilla");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Camí actual");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "No anul·lat");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Podeu triar quin fitxer de plantilla voleu substituir els fitxers de plantilla bàsics canviant el menú desplegable");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentatge d\'habitacions reservades");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Mostra el formulari de creació de propietats.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zoom del mapa, 1: Món 5: Massa terrestre / continent 10: Ciutat 15: Carrers 20: Edificis');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Nombre de ressenyes per mostrar');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Mostra les propietats seleccionades dels usuaris. Si l\'usuari està registrat, aquestes són les seves preferides, si no hi ha iniciat la sessió, només s\'afegiran els elements a través de la icona Preferits durant la visita.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valor mínim de dipòsit');
    
jr_define ("_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC", "Si el dipòsit calculat és inferior a aquesta xifra, establiu el dipòsit a aquest valor. Aquesta xifra pot superar-se si no compleix la configuració mínima de dipòsit del lloc. Deixeu-la establerta a 0 a no utilitzeu la configuració. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Mostra el formulari de consentiment conforme al GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Llista de tipus de sala de propietats');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mostra un tipus d\'habitació de propietat');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Mostra el formulari d\'inici de sessió');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Mostra una llista d\'habitacions d\'un determinat tipus d\'habitació');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Identificador del tipus d\'habitació');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Mostra una llista de propietats sindicades');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'El nombre de propietats sindicades a mostrar');
jr_define ("_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP", "Si es mostren MRP (hotels / allotjament i esmorzar) o SRPs (cases rurals / apartaments / xalets). El valor per defecte es determina a partir de la propietat actual de la propietat actual, si hi ha Per triar un tipus específic, establiu aquest valor a 0 per a srps o 1 per a mrps. ");
