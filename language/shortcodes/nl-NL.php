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
##################################################################
defined('_JOMRES_INITCHECK') or die('');
##################################################################

jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Dit is de eigenschap cpanel frontpage.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Dit is de vastgoedtape die in één oogopslag een overzicht geeft van realtime boekingen, beschikbaarheid en bezetting.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Met dit script kan de gebruiker verschillende eigenschappen met elkaar vergelijken, tot een maximum van 3 eigenschappen.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Een door komma\'s gescheiden lijst van eigenschap-UIDS, bijv. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Bouwt het contact eigenaar formulier. ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Geef de property-uid door van de property waarmee contact moet worden opgenomen. Geef 0 (nul) door om in plaats daarvan contact op te nemen met de sitebeheerder. ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Toont de bedrijfsinfo-pagina met details uit het veld Uw bedrijfsgegevens van de property manager in Property Configuration. De details op dit tabblad worden doorgaans gebruikt voor correspondentie, zodat managers zowel het hotel-/appartementadres als een apart adres voor zakelijke doeleinden.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID van het pand.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Toont de kalender van de eigenschap");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Geef de eigenschap uid door van de te tonen eigenschap. ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Maanden om weer te geven, standaard is 24 indien niet anders ingesteld. Niet compatibel met de variabele \'Alleen maand weergeven\'.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Stel dit in op 1 als u alleen de huidige maand wilt weergeven. De instelling months_to_show wordt genegeerd als show_just_month in dezelfde shortcode wordt gebruikt, dus u moet niet de ene of de andere gebruiken tegelijkertijd.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Toont alleen de eigenschapsbeschrijvingstekst.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Toont alleen de eigenschapsbeschrijvingstekst.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Toont alleen de eigenschappen van de eigenschap.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Toont alleen de eigenschap header-sjabloon.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Toont alleen de kamertypes van de accommodatie.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID van het pand.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Toont alleen de hoofdafbeelding van de eigenschap.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Toont alleen de eigenschappenkaart.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Toont de eigenschap Meer Info-tekst.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR-code die linkt naar gmaps. Dit kan in een telefoon worden gescand met behulp van een QR-code-leesapp die een routebeschrijving naar de accommodatie geeft.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Toont de beoordelingen van een accommodatie.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Toont het recensieoverzicht van een accommodatie.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Toont een individuele kamer.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID van de kamer.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Toont de kamers van een accommodatie.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID van het pand.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Toont de kamerafbeeldingen van een accommodatie als een diavoorstelling.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID van het pand.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Toont de eigenschap slideshow.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Toont de vastgoedtarieven.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Toont het bedrijfsadres van de site zoals ingevoerd in Siteconfiguratie > Uw bedrijfsgegevens.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Toont de algemene voorwaarden van het pand.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID van de eigenschap.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Toont de UI-agenda van de eigenschap, die een andere agenda is dan de grote grote agenda en is gebaseerd op de JQuery UI-agendafunctionaliteit.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Geef de eigenschap uid door van de eigenschap die moet worden getoond. ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Stel dit in op 1 om de legenda niet te tonen.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Toont de zoekresultaten, die kunnen worden verbeterd door zoekparameters toe te voegen. We raden u aan niet alle parameters tegelijk te gebruiken, omdat u dan te beperkte zoekcriteria krijgt. In plaats daarvan moet u zich beperken tot slechts één of twee parameters, bijvoorbeeld zoeken op land en aantal sterren.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Zoeken op land, met behulp van de ISO Alpha-2 code, bijv. GB of DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Zoeken op regio. Aangezien regio's in de database worden opgeslagen, moet u de regio-ID gebruiken. Ga naar Beheerder > Jomres > Sitestructuur > Lijstregio's en beweeg de Bewerken link, daar ziet u het ID-nummer van de regio .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'De volledige naam van de stad waarnaar u wilt zoeken.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Zoeken naar eigenschappen met bepaalde kenmerken. Functie-ID\'s zijn te vinden in Beheerder > Jomres > Sitestructuur > Eigenschappen van onroerend goed.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Zoeken naar eigenschappen met bepaalde kamertypes. Kamertype-ID\'s zijn te vinden in Beheerder > Jomres > Sitestructuur > Kamertypes.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Zoeken naar eigenschappen van een specifiek eigenschapstype. Eigenschapstype-id\'s zijn te vinden in Beheerder > Jomres > Sitestructuur > Propertytypes.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Zoeken naar woningen binnen een specifieke prijsklasse.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Zoek naar panden waarvan de tarieven gastennummers van bepaalde waarden toestaan, bijvoorbeeld groepen van 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Zoeken naar eigenschappen van N sterren.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Zoeken op aankomstdatum. Moet worden gecombineerd met de parameter vertrekDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Zoeken op vertrekdatum. Moet worden gecombineerd met de parameter arrivalDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Zoeken op eigenschapscategorie.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Bekijk de pagina van een agent. U kunt OFWEL een property-uid doorgeven, of de agent-id zelf, als u die weet.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Een property-uid, dit toont de agent van de property.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "De database-ID van de manager, indien bekend.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Toont de populaire eigenschappen, meestal gebruikt in module- of widgetposities.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Het maximum aantal eigenschappen dat kan worden weergegeven.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Toon alleen eigenschappen van dit specifieke eigenschapstype.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Stel in op 1 om de modules te tonen die zijn geoptimaliseerd voor een verticale widget/module-positie.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Geeft een willekeurige selectie van eigenschappen weer, meestal gebruikt in module- of widgetposities.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Het maximum aantal eigenschappen dat kan worden weergegeven.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Toon alleen eigenschappen van dit specifieke eigenschapstype.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Stel in op 1 om de modules te tonen die zijn geoptimaliseerd voor een verticale widget/module-positie.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Toont de meest recent bekeken eigenschappen van de gast, meestal gebruikt in module- of widgetposities.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Het maximum aantal eigenschappen dat kan worden weergegeven.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Stel in op 1 om de modules te tonen die zijn geoptimaliseerd voor een verticale widget/module-positie.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Toont een aantal eigenschappen, meestal gebruikt in module- of widgetposities.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'De eigenschap-ID\'s van de eigenschappen die u wilt weergeven.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Stel in op 1 om de modules te tonen die zijn geoptimaliseerd voor een verticale widget/module-positie.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Geeft de vervolgkeuzelijst voor valutaselectie weer.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Activeer/deactiveer de alternatieve sjabloonuitvoer. Deze uitvoer is bedoeld voor gebruik in Bootstrap-werkbalken.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Toont de winkelwagenpagina.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Geeft de winkelwagen module/widget weer.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Geeft het hoofdmenu weer. Let op, als u een aangepaste versie van mainmenu_wrapper_alternate.html gebruikt in bijvoorbeeld /templates/jr_leohtian/html/com_jomres, moet u deze mogelijk wijzigen om <i>_jomrespositional_jomresposition_jomresposition_jomres_jomres /i> met MENU_LOCATION verpakt in accolades.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Op deze pagina kunt u afbeeldingen uploaden voor uw eigendom en de dingen die u aanbiedt. Het heeft één hoofdknop en een tweede knop waarmee u specifieke bronnen kunt selecteren om afbeeldingen voor te uploaden. Dus de hoofdeigenschap afbeelding en de diavoorstelling zullen slechts één knop tonen, maar als u bijvoorbeeld optionele extra\'s of kamers heeft gemaakt, ziet u een tweede knop waar u afbeeldingen voor die specifieke bronnen kunt uploaden.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Op deze pagina kunt u afbeeldingen uploaden voor uw eigendom en de dingen die u aanbiedt. Het heeft één hoofdknop en een tweede knop waarmee u specifieke bronnen kunt selecteren om afbeeldingen voor te uploaden. Dus de hoofdeigenschap afbeelding en de diavoorstelling tonen slechts één knop, maar als u optionele extra\'s heeft gemaakt, ziet u een tweede knop waar u afbeeldingen voor die specifieke bronnen kunt uploaden.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Kies eerst de afbeelding(en) die u wilt uploaden door op Afbeelding toevoegen te klikken of door slepen en neerzetten te gebruiken. Deze verschijnen in de kolom aan de rechterkant.</li>
  <li>Gebruik boven dit gebied de knop \"Kies de bron\" om te kiezen voor welke bron je afbeeldingen wilt uploaden. Mogelijk wordt u de optie aangeboden om een ​​specifieke bron hieronder te kiezen. </li>
  <li> Nadat je een bron hebt gekozen, kun je op de knop Afbeelding uploaden onder een afbeelding klikken om deze aan die bron te koppelen. Zodra een afbeelding is geüpload, verdwijnt deze uit de kolom aan de rechterkant en verschijnt deze aan de linkerkant.</li>
  <li>Gebruik de prullenbak naast bestaande afbeeldingen om afbeeldingen te verwijderen die u niet langer wilt laten zien.</li>
  <li>Je kunt de volgorde waarin bestanden worden weergegeven in de diavoorstelling wijzigen door ze te hernoemen voordat je ze uploadt, aangezien ze in alfabetische volgorde op pagina's worden weergegeven.</li>
</ol>
");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Naast de knop Bron ziet u mogelijk een knop Voorbeeld. Als u hierop klikt, ziet u een pop-up die u laat zien hoe de momenteel geüploade afbeeldingen eruit zullen zien op een pagina. Dit helpt u een idee van hoe de afbeeldingen eruit zullen zien voor uw klanten.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Er is geen limiet aan het aantal afbeeldingen dat u kunt uploaden. Afbeeldingen worden automatisch verkleind wanneer ze worden geüpload. U kunt alleen JPG- en PNG-bestanden uploaden.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealiter zijn alle afbeeldingen die u uploadt minimaal ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels breed, anders kunnen ze wazig lijken nadat ze zijn geüpload.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Elke afbeelding die u uploadt mag niet groter zijn dan ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in grootte.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Kies de bron waarvoor je afbeeldingen wilt uploaden");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifieke bron");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Afbeeldingen zijn al geüpload voor deze bron");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Tekstopmaak');
jr_define('_JOMRES_MARKDOWN_DESC', 'Je kunt hier tekst invoeren met behulp van eenvoudige Markdown-opmaak. Je hoeft geen HTML te kennen, gebruik gewoon de knoppen om de informatie eruit te laten zien zoals je wilt, of maak tekst op volgens deze voorbeelden.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Nadruk');
jr_define('_JOMRES_MARKDOWN_BOLD', 'vet');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'cursief');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'doorhalen');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Kopteksten");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Grote kop');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Gemiddelde kop");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Kleine kop');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Kleine koptekst');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lijsten");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Algemeen lijstitem');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Genummerd lijstitem');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Te tonen tekst');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citaten');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Dit is een citaat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Het kan meerdere regels beslaan!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Afbeeldingen');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabellen');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolom');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Toon eigenschapafbeeldingen als diavoorstelling in eigenschappenlijst?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Indien ingesteld op ja, wordt een diavoorstelling van de hoofdafbeeldingen van de eigenschap weergegeven. Indien ingesteld op nee, wordt de eerste hoofdafbeelding van de eigenschap weergegeven.');

jr_define('EDIT_CMS_USER', 'CMS-gebruiker bewerken');

jr_define('BOOKING_MADE_BY', 'Boeking gemaakt door');

jr_define('_JOMRES_ROUTER_FEATURES', 'Voorzieningen');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Kamertypes');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Externe boekingsformulier URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Hier kunt u een externe URL instellen als u een website van een derde partij wilt gebruiken voor het maken van boekingen. Alle boekingsknoppen van jomres verwijzen naar deze URL. Laat dit veld leeg als u het Jomres boekingsformulier wilt gebruiken .');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (korte kamerbeschrijving/ondertitel)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Kamerbeschrijving');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Gast op de zwarte lijst');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Als deze gast op de zwarte lijst staat, kunnen ze geen boekingen meer maken in deze accommodatie.');
jr_define('_JOMRES_SESSION_HANDLER', 'Sessie-afhandeling');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Bewaar jomres-sessiebestanden op schijf of in database. Aanbevolen: database');
jr_define('_JOMRES_MAP_HEIGHT', "Kaarthoogte (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Zoomniveau kaart ");
jr_define('_JOMRES_MAP_MAPTYPE', "Kaarttype");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Sjabloonpakketten zijn plug-ins die sjablonen kunnen overschrijven voor verschillende core Jomres-sjabloonbestanden.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Deze pagina vermeldt alle sjabloonbestanden die kunnen worden overschreven door de sjabloonbestanden van een sjabloonpakket. Als u een bepaald sjabloonbestand wilt overschrijven, klikt u op de bewerkknop voor dat bestand, op de volgende pagina wordt u in staat om te kiezen met welke versie u wilt overschrijven. Let op, deze overschrijvingen hebben voorrang op zowel Jomres Core als eventuele Wordpress of Joomla thema-/sjabloonoverschrijvingen. U kunt een overschrijving uitschakelen door deze te verwijderen op de pagina Lijstsjabloonoverschrijvingen.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Sjabloonnaam");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Huidig ​​pad");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Niet overschreven");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "U kunt kiezen welk sjabloonbestand u wilt overschrijven van de Core-sjabloonbestanden door de vervolgkeuzelijst te wijzigen");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Percentage geboekte kamers");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Toont het formulier voor het maken van een nieuwe eigenschap.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Kaart zoom, 1: Wereld 5: Landmassa/continent 10: Stad 15: Straten 20: Gebouwen ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Aantal te tonen recensies');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Toont de eigenschappen op de shortlist van de gebruiker. Als de gebruiker is geregistreerd, zijn dit hun favorieten, als ze niet zijn ingelogd, dan alleen die items die tijdens het bezoek zijn toegevoegd via het pictogram Favoriet.');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimale stortingswaarde');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Als de berekende storting lager is dan dit cijfer, stelt u de storting in plaats daarvan in op deze waarde. Dit cijfer kan zelf worden overschreven als het niet voldoet aan de minimale stortingsinstelling van de site. Laat het ingesteld op 0 om gebruik de instelling niet.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Toont het AVG-conforme toestemmingsformulier.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lijst met kamertypes onroerend goed');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Toon een kamertype van een accommodatie');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Toon het inlogformulier');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Toon een lijst met kamers van een bepaald kamertype');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Kamertype-ID');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Toont een lijst met gesyndiceerde eigenschappen');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Het aantal gesyndiceerde eigenschappen dat moet worden weergegeven');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Of MRP\'s (hotels/bed & breakfasts) of SRP\'s (cottages/appartementen/villa\'s) moeten worden weergegeven. Standaard wordt bepaald op basis van de uid van de huidige eigendom, als die niet beschikbaar is, dan is Om een ​​specifiek type te kiezen, stelt u deze waarde in op 0 voor srps, of 1 voor mrps.');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Toont de sterren van een eigenschap. Deze worden ingesteld in Eigenschapconfiguratie, als de eigenschap een MRP is.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID van de eigenschap.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Optioneel. Als de property-ID niet is ingesteld, kunt u in plaats daarvan een nummer doorgeven.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Optioneel. Alternatief sjabloonpad. Kan niet worden doorgegeven via url. Moet absoluut zijn.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Optioneel. Alternatieve sjabloonnaam.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Toont een eigenschapsmodule-uitvoer voor plaatsing met shortcodes. De eigenschapsmodule-uitvoer is een klein fragment van eigenschapsdetails dat is ontworpen om op verschillende plaatsen op de pagina te worden weergegeven.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Optioneel. ID van de eigenschap. Als de eigenschap uid niet is ingesteld, wordt een willekeurig gepubliceerde eigenschap weergegeven.');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'Optioneel. Alternatieve sjabloonnaam, zonder ".html". De sjabloon moet in de sjabloonoverschrijvingsmap staan. Hierdoor kunt u aangepaste versies van "basic_module_output.html" op verschillende plaatsen in uw pagina\'s gebruiken. ' );