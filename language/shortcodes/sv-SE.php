<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Detta är egenskapens cpanel -försida.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Detta är fastighetstejpschemat som ger en överblick över realtidsbokningar, tillgänglighet och beläggning i en överblick.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Detta skript låter användaren jämföra flera egenskaper mot varandra, upp till högst 3 egenskaper.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'En kommaseparerad lista över fastighets -uids, t.ex. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Builds the contact owner form.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Skicka egendoms -uid för egenskapen som ska kontaktas. Skicka 0 (noll) för att istället kontakta webbplatsadministratör.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Visar företagsinformationssidan och hämtar information från fastighetsförvaltarens fält med ditt företagsinformation i fastighetskonfiguration. Informationen på den här fliken används vanligtvis för korrespondens, så att chefer kan ha både hotell-/lägenhetsadress och en separat adress för affärsändamål. ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'egenskapens ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Visar fastighetens kalender");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Månader att visa, standard är 24 om inte annat anges. Ej kompatibel med variabeln Visa bara månad.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Ställ in detta till 1 om du bara vill visa den aktuella månaden på egen hand. Inställningen månader_to_show kommer att ignoreras om show_just_month används så ska du inte använda samma, så ska du inte använda samma om du vill använda samma kort, inte den andra, eller om den andra inte ska användas på samma gång.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Visar bara egenskapens beskrivningstext.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Visar bara egenskapens beskrivningstext.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Visar bara egenskapens funktioner.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Visar bara egenskapens rubrikmall.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Visar bara egenskapens rumstyper.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Visar bara egenskapens huvudbild.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID för egendomen.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Visar bara egenskapskartan.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Visar egenskapen Mer informationstext.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR -kod som länkar till gmaps. Detta kan skannas in i en telefon med en qr -kodläsningsapp som ger vägbeskrivning till egendomen.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Visar en fastighets recensioner.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Visar en fastighets granskningssammanfattning.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Visar ett enskilt rum.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID för rummet.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Visar en fastighets rum.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Visar en fastighets rumsbilder som ett bildspel.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Visar egenskapens bildspel.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Visar fastighetstaxorna.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Visar webbplatsens företagsadress som angetts i webbplatskonfiguration> ditt företagsinformation.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Visar fastighetsvillkoren.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'egenskapens ID.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Visar egenskapens UI -kalender, som är en annan kalender än den stora stora kalendern och är baserad på Jquery UI -kalenderfunktionen.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Set this to 1 to not show the legend.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Visar sökresultaten som kan förbättras genom att lägga till sökparametrar. Vi rekommenderar inte att du använder alla parametrar samtidigt, eftersom du kommer att få alltför begränsade sökkriterier. Istället bör du begränsa dig till bara en eller två parametrar, t.ex. sök efter land och antal stjärnor. ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Sök efter land med ISO Alpha-2-koden, t.ex. GB eller DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Sök efter region. Eftersom regioner sparas i databasen måste du använda region -ID. Besök administratör> Jomres> Webbplatsstruktur> Lista regioner och sväng redigeringslänken, där ser du regionens ID -nummer. . ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Det fullständiga namnet på staden du vill söka efter.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Sök efter fastigheter med särskilda funktioner. Funktions -id finns i Administratör> Jomres> Webbplatsstruktur> Egenskapsfunktioner.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Sök efter fastigheter med vissa rumstyper. ID för rumstyp finns i Administratör> Jomres> Webbplatsstruktur> Rumstyper.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Sök efter egenskaper för en specifik egenskapstyp. Egenskaper för id -typ finns i Administratör> Jomres> Webbplatsstruktur> Egenskapstyper.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Sök efter fastigheter inom ett specifikt prisklass.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Sök efter fastigheter som har tariffer tillåter gästnummer för vissa värden, till exempel parter på 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Sök efter egenskaper för N -stjärnor.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Sök efter ankomstdatum. Bör kombineras med parametern för avgångsdatum');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Sök efter avresedatum. Bör kombineras med parametern ankomstDatum.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Sök efter egenskapskategori.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Visa en agentsida. Du kan skicka en egendom -UID, eller agentens ID själv, om du vet det.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "En egenskap uid, detta visar fastighetens agent.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Chefens databas -ID, om det är känt.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Visar de populära egenskaperna, som vanligtvis används i modul- eller widgetpositioner.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Det maximala antalet egenskaper som kan visas.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Visa endast egenskaper för denna specifika egenskapstyper.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Set to 1 to show the modules optimized for a vertical widget/module position.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Visar ett slumpmässigt urval av egenskaper, som vanligtvis används i modul- eller widgetpositioner.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Det maximala antalet egenskaper som kan visas.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Visa endast egenskaper för denna specifika egenskapstyper.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Set to 1 to show the modules optimized for a vertical widget/module position.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Visar gästens senast visade fastigheter, som vanligtvis används i modul- eller widgetpositioner.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Det maximala antalet egenskaper som kan visas.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Set to 1 to show the modules optimized for a vertical widget/module position.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Visar ett antal egenskaper som vanligtvis används i modul- eller widgetpositioner.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Egenskaps -id: n för de egenskaper du vill visa.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Set to 1 to show the modules optimized for a vertical widget/module position.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Visar valet för val av valuta.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Aktivera/inaktivera den alternativa mallutmatningen. Denna utgång är avsedd att användas i Bootstrap -verktygsfält.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Visar kundvagnens sida.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Visar kundvagnens modul/widget.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Visar huvudmenyn. Observera, om du kör en anpassad version av mainmenu_wrapper_alternate.html i exempelvis/templates/jr_leohtian/html/com_jomres kan du behöva byta till_justera_jämna_för_jämna_för_jämna_för_jämna_för_jämna_jämna_för att ändra /i> med MENU_LOCATION insvept i lockiga hängslen. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'På den här sidan kan du ladda upp bilder för din egendom och de saker du erbjuder. Den har en huvudknapp och en andra knapp som låter dig välja specifika resurser att ladda upp bilder för. Huvudfastigheten bild och bildspelet kommer bara att visa en knapp men om du har skapat t.ex. valfria tillägg eller rum, kommer du att se en andra knapp där du kan ladda upp bilder för de specifika resurserna. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'På den här sidan kan du ladda upp bilder för din egendom och de saker du erbjuder. Den har en huvudknapp och en andra knapp som låter dig välja specifika resurser att ladda upp bilder för. Huvudfastigheten bild och bildspelet kommer bara att visa en knapp men om du har skapat valfria tillägg så kommer du att se en andra knapp där du kan ladda upp bilder för de specifika resurserna. ');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', '<ol>
  <li> Välj först den eller de bilder du vill ladda upp genom att klicka på Lägg till bild eller använda Dra och släpp. Dessa visas i kolumnen till höger. </li>
  <li> Ovanför detta område använder du knappen "Välj resurs" för att välja vilken resurs du vill ladda upp bilder för. Du kanske erbjuds alternativet att välja en specifik resurs under. </li>
  <li> När du har valt en resurs kan du klicka på knappen Ladda upp bild under en bild för att associera den med den resursen. När en bild har laddats upp försvinner den från kolumnen på höger sida och visas till vänster. </li>
  <li> Använd papperskorgen bredvid befintliga bilder för att ta bort bilder som du inte längre vill ska visas. </li>
  <li> Du kan ändra den ordning som filer visas i bildspelet genom att byta namn på dem innan du laddar upp dem, eftersom de visas på sidor i alfabetisk ordning. </li>
</ol>
 ');

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Bredvid Resurs -knappen kan du se en Förhandsgranskningsknapp. Om du klickar på den här visas en popup som visar hur de för närvarande överförda bilderna kommer att se ut på en sida. Detta hjälper dig att ge dig en idé om hur bilderna kommer att se ut för dina kunder. ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Det finns ingen gräns för antalet bilder du kan ladda upp. Bilderna ändras automatiskt när de laddas upp. Du kan bara ladda upp JPG- och PNG -filer.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Helst alla bilder du laddar upp skulle vara minst");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixlar breda, annars kan de se suddiga ut efter att de har laddats upp.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alla bilder du laddar upp får inte vara mer än");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i storlek.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Välj den resurs du vill ladda upp bilder för");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder som redan laddats upp för denna resurs");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Textformatering');
jr_define('_JOMRES_MARKDOWN_DESC', 'Du kan ange text här med enkel Markdown -formatering. Du behöver inte kunna någon HTML, använd bara knapparna för att få informationen att se ut som du vill, eller formatera text enligt dessa exempel.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Betoning');
jr_define('_JOMRES_MARKDOWN_BOLD', 'fet');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Rubriker");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Liten rubrik');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listor");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numrerad lista');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Länkar');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text att visa');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citat');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan sträcka sig över flera rader!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabeller');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolumn');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as diashow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Om det är inställt på ja visas ett bildspel med egenskapens huvudbilder. Om det är inställt på nej visas den första egenskapens huvudbild.');

jr_define('EDIT_CMS_USER', 'Redigera CMS -användare');

jr_define('BOOKING_MADE_BY', 'Bokning gjord av');

jr_define('_JOMRES_ROUTER_FEATURES', 'Bekvämligheter');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Rumstyper');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Extern bokningsblankett URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Här kan du ställa in en extern URL om du vill använda en tredjepartswebbplats för att göra bokningar. Alla jomres bokningsknappar pekar på denna URL. Lämna det här fältet tomt om du vill använda Jomres bokningsformulär . ');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Black blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Om den här gästen är svartlistad kommer de inte längre att kunna göra bokningar på den här egenskapen.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT', "Karthöjd (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Kartzoomnivå");
jr_define('_JOMRES_MAP_MAPTYPE', "Karttyp");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Mallpaket är plugins som kan tillhandahålla åsidosättande mallar för olika kärn Jomres -mallfiler.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Den här sidan visar alla mallfiler som kan åsidosättas av ett mallpakets mallfiler. Om du vill åsidosätta en viss mallfil klickar du på redigeringsknappen för den filen, på nästa sida kommer du att kan välja vilken version du vill åsidosätta med. Observera att dessa åsidosättningar prioriteras framför både Jomres Core och alla Wordpress- eller Joomla -tema-/mallöversättningar. Du kan inaktivera en åsidosättning genom att radera den på sidan Listmallöverträdelser. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Mallnamn");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Inte åsidosatt");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Du kan välja vilken mallfil du vill åsidosätta kärnmallfilerna genom att ändra rullgardinsmenyn");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Andel rum bokade");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Visar formuläret för att skapa ny egenskap.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Map zoom, 1: World 5: Landmass/continent 10: City 15: Streets 20: Buildings');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Antal recensioner att visa');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Visar användarnas listade egenskaper. Om användaren är registrerad är dessa deras favoriter, om de inte är inloggade läggs bara till de objekt som läggs till genom favoritikonen under besöket.');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minsta insättningsvärde');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Om den beräknade insättningen är mindre än den här siffran, ställ in insättningen till detta värde istället. Denna siffra kan i sig själv överskrida om den inte uppfyller webbplatsens minsta insättningsinställning. Ställ in den på 0 till använd inte inställningen. ");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Visar det samtyckesformulär som uppfyller GDPR.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lista över egendoms rumstyper');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Visa en fastighetens rumstyp');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Visa inloggningsformuläret');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Visa en lista över rum av en viss rumstyp');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Rumstyps -id');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Visar en lista över syndikerade egenskaper');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Antalet syndikerade egenskaper som ska visas');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Huruvida MRP -hotell (hotell/bed & breakfast) eller SRP (stugor/lägenheter/villor) ska visas. Standard är bestämt från den aktuella fastighetens egendom, då är ej tillgängligt för att välja en specifik typ, ställ in detta värde på 0 för srps eller 1 för mrps. ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Visar en egenskaps stjärnor. Dessa ställs in i egenskapskonfigurationen, om egenskapen är en MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'Id för egenskapen.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Valfritt. Om egenskaps-id inte är angivet kan du skicka ett nummer istället.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Valfritt. Alternativ mallsökväg. Kan inte skickas via url. Måste vara absolut.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Valfritt. Alternativt mallnamn.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Visar en egenskapsmodultyp utdata för placering med kortkoder. Egenskapsmodulutdata är ett litet utdrag av egenskapsdetaljer designat för att visas på olika ställen på sidan.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Valfritt. ID för egenskapen. Om egenskapens uid inte är inställt kommer en slumpmässig publicerad egenskap att visas.');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'Valfritt. Alternativt mallnamn, utan ".html". Mallen måste finnas i mallöverstyrningskatalogen. Detta gör att du kan använda anpassade versioner av "basic_module_output.html" på olika platser i dina sidor. ' );