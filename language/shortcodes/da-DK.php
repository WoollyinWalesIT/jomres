<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Dette er ejendommen cpanel forsiden.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Dette er egenskabstape-diagrammet, der giver et overblik over realtidsbookinger, tilgængelighed og belægning på et øjeblik.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Dette script giver brugeren mulighed for at sammenligne flere ejendomme med hinanden, op til maksimalt 3 ejendomme.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'En kommasepareret liste over ejendomsværktøjer, f.eks. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Builds the contact owner form.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Videregiv ejendoms -uid\'en til den ejendom, der skal kontaktes. Pass 0 (nul) for i stedet at kontakte webstedets administrator.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Viser siden Firmaoplysninger, der henter detaljer fra ejendomsadministratorens Dit virksomhedsoplysningsfelt i egenskabskonfiguration. Oplysningerne i denne fane vil typisk blive brugt til korrespondance, så ledere kan have både hotel-/lejlighedsadressen og en separat adresse til forretningsformål. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Viser ejendommens kalender");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Videregiv ejendommen uid for den ejendom, der skal vises.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Måneder, der skal vises, standard er 24, hvis ikke andet er angivet. Ikke kompatibelt med varianten Vis bare måned.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Indstil dette til 1, hvis du bare vil vise den aktuelle måned på egen hånd. Indstillingerne for måneder_til_visning vil blive ignoreret, hvis show_just_month bruges, så skal du ikke bruge den samme, så skal du bruge den samme, eller ikke den anden, så den anden skal bruge den samme, eller ikke den anden, så skal du bruge den samme på samme tid.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Viser kun egenskabens beskrivelsestekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Viser kun egenskabens beskrivelsestekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Viser kun egenskabens funktioner.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Viser kun egenskabshovedskabelonen.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Viser kun egenskabets værelsestyper.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Viser kun egenskabets hovedbillede.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Viser kun ejendomskortet.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Viser ejendommen Mere info tekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR -kode, der linker til gmaps. Dette kan scannes til en telefon ved hjælp af en qr -kodeaflæsningsapp, der giver retninger til ejendommen.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Viser en ejendoms anmeldelser.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Viser en ejendoms bedømmelsesoversigt.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Viser et individuelt rum.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID for rummet.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Viser en ejendoms værelser.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Viser en ejendoms værelsebilleder som et diasshow.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID for ejendommen.');
    
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Viser egenskabets diasshow.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Viser ejendomsafgifter.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID for egenskaben.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Viser webstedets forretningsadresse som angivet i webstedskonfiguration> dine virksomhedsoplysninger.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Viser ejendommens vilkår og betingelser.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ejendommens ID.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Viser ejendommens brugergrænsefladekalender, som er en anden kalender end den store store kalender og er baseret på Jquery UI -kalenderfunktionen.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Videregiv ejendommen uid for den ejendom, der skal vises.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Indstil dette til 1 for ikke at vise forklaringen.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Viser søgeresultaterne, som kan forbedres ved at tilføje søgeparametre. Vi anbefaler ikke, at du bruger alle parametre på samme tid, fordi du ender med for begrænsede søgekriterier. I stedet bør du begrænse dig til kun en eller to parametre, f.eks. Søgning efter land og antal stjerner. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Søg efter land ved hjælp af ISO Alpha-2-koden, f.eks. GB eller DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Søg efter område. Da regioner er gemt i databasen, skal du bruge region -id. Besøg Administrator> Jomres> Webstedstruktur> Listeområder og hold markøren over redigeringslinket, der vil du se regionens id -nummer . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Det fulde navn på den by, du vil søge efter.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Søg efter ejendomme med bestemte funktioner. Funktions -id\'er findes i Administrator> Jomres> Webstedstruktur> Egenskabsfunktioner.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Søg efter ejendomme med bestemte rumtyper. Rumtype -id\'er findes i Administrator> Jomres> Webstedstruktur> Rumtyper.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Søg efter egenskaber for en bestemt ejendomstype. Egenskabstype -id\'er findes i Administrator> Jomres> Webstedstruktur> Ejendomstyper.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Søg efter ejendomme inden for et bestemt prisklasse.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Søg efter ejendomme, hvis takster tillader gæstetal for bestemte værdier, f.eks. parter på 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Søg efter egenskaber for N -stjerner.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Søg efter ankomstdato. Bør kombineres med parametret departureDate');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Søg efter afrejsedato. Bør kombineres med parametret ankomstdato.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Søg efter ejendomskategori.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Se en agentside. Du kan sende enten en ejendoms -id eller selve agentens id, hvis du kender den.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "En ejendoms -uid, dette viser ejendommens agent.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Managerens database -id, hvis det er kendt.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Viser de populære egenskaber, der typisk bruges i modul- eller widgetpositioner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Det maksimale antal ejendomme, der kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Vis kun egenskaber for denne specifikke ejendomstyper.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Indstil til 1 for at vise modulerne optimeret til en lodret widget/modulposition.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Viser et tilfældigt udvalg af egenskaber, der typisk bruges i modul- eller widgetpositioner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Det maksimale antal ejendomme, der kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Vis kun egenskaber for denne specifikke ejendomstyper.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Indstil til 1 for at vise modulerne optimeret til en lodret widget/modulposition.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Viser gæstens senest viste ejendomme, der typisk bruges i modul- eller widgetpositioner.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Det maksimale antal ejendomme, der kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Indstil til 1 for at vise modulerne optimeret til en lodret widget/modulposition.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Viser et antal egenskaber, der typisk bruges i modul- eller widgetpositioner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Ejendoms -id\'erne for de ejendomme, du vil vise.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Indstil til 1 for at vise modulerne optimeret til en lodret widget/modulposition.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Viser valget til valg af valuta.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Aktiver/deaktiver den alternative skabelonoutput. Denne output er beregnet til brug i Bootstrap værktøjslinjer.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Viser siden Indkøbskurv.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Viser indkøbsvognens modul/widget.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Viser hovedmenuen. Bemærk, hvis du kører en tilpasset version af mainmenu_wrapper_alternate.html i f.eks./templates/jr_leohtian/html/com_jomres, skal du muligvis_til_justere_til_justering_skal_justere_til /i> med MENU_LOCATION indpakket i krøllede seler. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Denne side giver dig mulighed for at uploade billeder til din ejendom og de ting, du tilbyder. Den har en hovedknap og en anden knap, der giver dig mulighed for at vælge specifikke ressourcer til at uploade billeder til. Så Hovedejendommen billede og diasshowet viser kun en knap, men hvis du har oprettet f.eks. ekstraudstyr eller lokaler, vil du se en anden knap, hvor du kan uploade billeder for de specifikke ressourcer. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Denne side giver dig mulighed for at uploade billeder til din ejendom og de ting, du tilbyder. Den har en hovedknap og en anden knap, der giver dig mulighed for at vælge specifikke ressourcer til at uploade billeder til. Så Hovedejendommen billede og diasshowet viser kun en knap, men hvis du har oprettet valgfrie ekstras, vil du se en anden knap, hvor du kan uploade billeder for de specifikke ressourcer. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Vælg først de eller de billeder, du vil uploade, ved at klikke på Tilføj billede eller bruge Træk og slip. Disse vises i kolonnen i højre side. </li>
  <li> Over dette område skal du bruge knappen \"Vælg ressource \" til at vælge, hvilken ressource du vil uploade billeder til. Du kan blive tilbudt muligheden for at vælge en bestemt ressource nedenunder. </li>
  <li> Når du har valgt en ressource, kan du derefter klikke på knappen Upload billede under et billede for at knytte den til den pågældende ressource. Når et billede er blevet uploadet, vil det forsvinde fra kolonnen på det højre websted og vises i venstre side. </li>
  <li> Brug knappen Papirkurv ved siden af ​​eksisterende billeder til at fjerne billeder, du ikke længere vil have vist. </li>
  <li> Du kan ændre den rækkefølge, som filer vises i diasshowet, ved at omdøbe dem, før de uploades, da de vises på sider i alfabetisk rækkefølge. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ved siden af ​​knappen Ressource kan du muligvis se en forhåndsvisningsknap. Hvis du klikker på dette, vil du se en popup, der viser dig, hvordan de aktuelt uploadede billeder vil se ud på en side. Dette hjælper med at give dig en idé om, hvordan billederne vil se ud for dine kunder. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Der er ingen grænse for antallet af billeder, du kan uploade. Billederne ændres automatisk, når de uploades. Du kan kun uploade JPG- og PNG -filer.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideelt set ville alle billeder, du uploader, være mindst");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixels wide, ellers kan de se uklare ud efter at de er blevet uploadet.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alle billeder, du uploader, må ikke være mere end");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i størrelse.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Vælg den ressource, du vil uploade billeder til");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifik ressource");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Billeder allerede uploadet til denne ressource");
    
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Tekstformatering');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Du kan indtaste tekst her ved hjælp af simpel Markdown -formatering. Du behøver ikke at kende nogen HTML, bare brug knapperne til at få oplysningerne til at se ud, eller formater tekst i henhold til disse eksempler.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Betoning');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'fed');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'gennemstregning');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Lister");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nummereret listeelement');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst til visning');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citater');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Dette er et citat.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan strække sig over flere linjer!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Billeder');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabeller');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Kolonne');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Hvis indstillet til ja, vises et diasshow med egenskabets hovedbilleder. Hvis det er indstillet til nej, vises det første ejendoms hovedbillede.');

jr_define ('EDIT_CMS_USER', 'Rediger CMS -bruger');

jr_define ('BOOKING_MADE_BY', 'Booking foretaget af');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Faciliteter');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Rumtyper');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ekstern reservationsformular URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Her kan du angive en ekstern URL, hvis du vil bruge et tredjepartswebsted til at foretage bookinger. Alle jomres bookingknapper peger på denne URL. Lad dette felt være tomt, hvis du vil bruge Jomres bookingformularen . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Room Description');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gæstesorteliste');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Hvis denne gæst er sortlistet, vil de ikke længere være i stand til at foretage reservationer på denne ejendom.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Gem jomres sessionsfiler på disk eller i database. Anbefalet: database');
jr_define ('_JOMRES_MAP_HEIGHT', "Korthøjde (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Kort zoomniveau");
jr_define ('_JOMRES_MAP_MAPTYPE', "Korttype");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Skabelonpakker er plugins, der kan tilvejebringe tilsidesættelsesskabeloner til forskellige centrale Jomres -skabelonfiler.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Denne side viser alle skabelonfiler, der kan tilsidesættes af en skabelonpakkes skabelonfiler. Hvis du vil tilsidesætte en bestemt skabelonfil, skal du klikke på redigeringsknappen for den pågældende fil, på den næste side vil du være i stand til at vælge, hvilken version du vil tilsidesætte med. Bemærk, at disse tilsidesættelser prioriteres frem for både Jomres Core og enhver Wordpress- eller Joomla -tema-/skabelonoverstyring. Du kan deaktivere en tilsidesættelse ved at slette den på siden Liste -skabelonoverstyringer. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Skabelonnavn");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuel sti");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ikke tilsidesat");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Du kan vælge, hvilken skabelonfil der skal tilsidesætte kerneskabelonfilerne ved at ændre rullemenuen");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procenterede værelser reserveret");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Viser oprettelse af ny ejendomsform.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Kortzoom, 1: Verden 5: Landmasse/kontinent 10: By 15: Gader 20: Bygninger');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Antal anmeldelser, der skal vises');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Viser brugernes shortlistede egenskaber. Hvis brugeren er registreret, er disse deres favoritter, hvis de ikke er logget ind, er det kun de elementer, der blev tilføjet via favoritikonet under besøget.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum indskudsværdi');
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hvis det beregnede indskud er mindre end dette tal, skal du indstille indbetalingen til denne værdi i stedet. Dette tal kan i sig selv blive overskredet, hvis det ikke opfylder webstedets minimumsindskud. Indstil det til 0 til ikke bruge indstillingen. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Viser den samtykkeerklæring, der er i overensstemmelse med GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Ejendoms værelsestypeliste');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Vis en ejendom værelsestype');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Vis loginformularen');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Vis en liste over værelser af en bestemt rumtype');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Værelsestype id');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Viser en liste over syndikerede egenskaber');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Antallet af syndikerede egenskaber, der skal vises');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Om MRP\'er (hoteller/bed & breakfasts) eller SRP\'er (hytter/lejligheder/villaer) skal vises. Standard er bestemt fra den aktuelle ejendoms ejendom vist. Hvis du vil vælge en bestemt type, skal du indstille denne værdi til 0 for srps eller 1 for mrps. ');
    
