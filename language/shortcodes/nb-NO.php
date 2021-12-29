<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'This is the property cpanel frontpage.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Dette er et bånddiagram over eiendommen som gir en oversikt over sanntidsbestillinger, tilgjengelighet og belegg på et øyeblikk.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Dette skriptet lar brukeren sammenligne flere eiendommer mot hverandre, opptil maksimalt 3 eiendommer.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'En kommaseparert liste over eiendomsgrensesnitt, f.eks. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Builds the contact owner form.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Send eiendommen uid for eiendommen du vil kontakte. Pass 0 (null) for i stedet å kontakte nettstedets administrator.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Viser bedriftsinformasjonssiden og henter detaljer fra eiendomsforvalterens feltet Firmainformasjon i eiendomskonfigurasjon. Detaljene i denne fanen vil vanligvis brukes til korrespondanse, slik at ledere kan ha både hotell-/leilighetsadressen og en egen adresse for forretningsformål. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Viser eiendommens kalender");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pass på eiendommen uid for eiendommen som skal vises.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Måneder å vise, standard er 24 hvis ikke annet er angitt. Ikke kompatibelt med varianten Vis bare måned.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Sett dette til 1 hvis du bare vil vise gjeldende måned på egen hånd. Innstillingene for måneder_til_visning vil bli ignorert hvis show_just_month brukes, så skal du ikke bruke den andre, men den andre skal ikke brukes, men den andre skal ikke brukes. samtidig.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Viser bare egenskapens beskrivelsestekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Viser bare egenskapens beskrivelsestekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Viser bare egenskapens funksjoner.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Viser bare egenskapens overskriftsmal.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Viser bare egenskapens romtyper.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Viser bare egenskapens hovedbilde.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID for eiendommen.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Viser bare eiendomskartet.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Viser egenskapen Mer info tekst.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR code that links to gmaps. This can be scanned into a phone using a qr code reading app that provides routings to the property.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Viser en eiendoms anmeldelser.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Viser oversikt over en eiendom.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Viser et individuelt rom.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID of the room.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Viser en eiendoms rom.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Viser en eiendoms rombilder som en lysbildefremvisning.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Viser egenskapens lysbildefremvisning.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Viser eiendomspriser.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Viser nettstedets forretningsadresse slik den er angitt i nettstedskonfigurasjon> Firmaets detaljer.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Viser eiendomsbetingelsene.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID of the property.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Viser eiendommens brukergrensesnittkalender, som er en annen kalender enn den store store kalenderen og er basert på Jquery UI -kalenderfunksjonaliteten.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pass på eiendommen uid for eiendommen som skal vises.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Sett dette til 1 for ikke å vise legenden.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Viser søkeresultatene, som kan forbedres ved å legge til søkeparametere. Vi anbefaler ikke at du bruker alle parametrene samtidig, fordi du vil ende opp med søkekriterier som er for begrensede. I stedet bør du begrense deg til bare en eller to parametere, f.eks. Søk etter land og antall stjerner. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Søk etter land, ved hjelp av ISO Alpha-2-koden, f.eks. GB eller DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Søk etter region. Siden regioner er lagret i databasen, må du bruke region -ID. Gå til Administrator> Jomres> Nettstedstruktur> Listeområder og hold markøren Rediger -koblingen, der vil du se regionens ID -nummer. . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Det fulle navnet på byen du vil søke etter.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Søk etter eiendommer med bestemte funksjoner. Funksjons -IDer finnes i Administrator> Jomres> Nettstedstruktur> Egenskapsfunksjoner.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Søk etter eiendommer med bestemte romtyper. Romtype -ID -er finnes i Administrator> Jomres> Nettstedstruktur> Romtyper.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Søk etter eiendommer for en bestemt eiendomstype. ID -er for eiendomstypene finner du i Administrator> Jomres> Nettstedstruktur> Egenskapstyper.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Søk etter eiendommer innenfor et bestemt prisklasse.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Søk etter eiendommer som tariffer tillater gjestetall på bestemte verdier, for eksempel parter på 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Søk etter egenskaper til N -stjerner.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Søk etter ankomstdato. Bør kombineres med parameteren departureDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Søk etter avreisedato. Bør kombineres med parameteren ankomstdato.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Søk etter eiendomskategori.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Vis en agentside. Du kan passere enten en eiendoms -ID, eller agentens ID selv, hvis du vet det.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "En egenskap uid, dette vil vise eiendommens agent.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Lederens database -ID, hvis den er kjent.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Viser de populære egenskapene, vanligvis brukt i modul- eller widgetposisjoner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Det maksimale antallet eiendommer som kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Vis bare egenskaper for disse spesifikke eiendomstypene.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Sett til 1 for å vise modulene optimalisert for en vertikal widget/modulposisjon.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Viser et tilfeldig utvalg av egenskaper, vanligvis brukt i modul- eller widgetposisjoner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Det maksimale antallet eiendommer som kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Vis bare egenskaper for disse spesifikke egenskapstypene.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Sett til 1 for å vise modulene optimalisert for en vertikal widget/modulposisjon.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Viser gjestenes nylig viste eiendommer, vanligvis brukt i modul- eller widgetposisjoner.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Det maksimale antallet eiendommer som kan vises.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Sett til 1 for å vise modulene optimalisert for en vertikal widget/modulposisjon.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Viser et antall egenskaper, vanligvis brukt i modul- eller widgetposisjoner.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Eiendoms -ID -ene til egenskapene du vil vise.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Sett til 1 for å vise modulene optimalisert for en vertikal widget/modulposisjon.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Viser rullegardinmenyen for valg av valuta.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Aktiver/deaktiver den alternative malutgangen. Denne utgangen er beregnet på bruk i Bootstrap verktøylinjer.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Viser siden Handlevogn.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Viser handlekurvmodulen/widgeten.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Viser hovedmenyen. Merk at hvis du kjører en tilpasset versjon av mainmenu_wrapper_alternate.html i for eksempel/templates/jr_leohtian/html/com_jomres må du kanskje bytte til_justering_til < /i> med MENU_LOCATION innpakket i krøllete seler. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Denne siden lar deg laste opp bilder for eiendommen din og tingene du tilbyr. Den har en hovedknapp og en andre knapp som lar deg velge spesifikke ressurser å laste opp bilder til. Så Hovedegenskapen bilde og lysbildefremvisningen vil bare vise en knapp, men hvis du har opprettet f.eks. valgfrie tillegg eller rom, vil du se en annen knapp der du kan laste opp bilder for de spesifikke ressursene. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Denne siden lar deg laste opp bilder for eiendommen din og tingene du tilbyr. Den har en hovedknapp og en andre knapp som lar deg velge spesifikke ressurser å laste opp bilder til. Så Hovedegenskapen bilde og lysbildeserien vil bare vise en knapp, men hvis du har opprettet valgfrie tillegg, vil du se en annen knapp der du kan laste opp bilder for de spesifikke ressursene. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Velg først bildene du vil laste opp ved å klikke Legg til bilde eller bruke Dra og slipp. Disse vises i kolonnen på høyre side. </li>
  <li> Over dette området bruker du \"Velg ressurs \" -knappen for å velge hvilken ressurs du vil laste opp bilder til. Du kan bli tilbudt muligheten til å velge en bestemt ressurs under. </li>
  <li> Når du har valgt en ressurs, kan du klikke på Last opp bilde -knappen under et bilde for å knytte den til den ressursen. Når et bilde er lastet opp, vil det forsvinne fra kolonnen på høyre side og vises til venstre. </li>
  <li> Bruk papirkurven -knappen ved siden av eksisterende bilder for å fjerne bilder du ikke lenger vil skal vises. </li>
  <li> Du kan endre rekkefølgen på hvilke filer som skal vises i lysbildeserien ved å gi dem nytt navn før du laster dem opp, ettersom de vises på sider i alfabetisk rekkefølge. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ved siden av ressursknappen kan det hende du ser en forhåndsvisningsknapp. Hvis du klikker på denne, vil du se en popup som viser deg hvordan de opplastede bildene vil se ut på en side. Dette hjelper deg med å gi deg en ide om hvordan bildene vil se ut for kundene dine. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Det er ingen grense for antall bilder du kan laste opp. Bilder endres automatisk når de lastes opp. Du kan bare laste opp JPG- og PNG -filer.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideelt sett vil alle bildene du laster opp være minst");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "piksler bredt, ellers kan de se uklare ut etter at de er lastet opp.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Bilder du laster opp kan ikke være mer enn");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "i størrelse.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Velg ressursen du vil laste opp bilder for");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Spesifikk ressurs");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder allerede lastet opp for denne ressursen");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Tekstformatering');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Du kan skrive inn tekst her ved hjelp av enkel Markdown -formatering. Du trenger ikke å kjenne noen HTML, bare bruk knappene for å få informasjonen til å se ut som du vil, eller formater tekst i henhold til disse eksemplene.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'fet');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'gjennomstreking');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Liten overskrift');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Lister");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nummerert listeelement');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Lenker');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst som skal vises');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Det kan spenne over flere linjer!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabeller');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Kolonne');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Hvis den er satt til ja, vil en lysbildefremvisning av egenskapens hovedbilder bli vist. Hvis den er satt til nei, vil det første egenskapens hovedbilde bli vist.');

jr_define ('EDIT_CMS_USER', 'Rediger CMS -bruker');

jr_define ('BOOKING_MADE_BY', 'Booking made by');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Fasiliteter');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Romtyper');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ekstern bestillingsskjema URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Her kan du angi en ekstern URL hvis du vil bruke et tredjeparts nettsted for å foreta bestillinger. Alle jomres bookingknapper peker til denne URL -en. La dette feltet stå tomt hvis du vil bruke Jomres bestillingsskjema . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Room Description');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gjeste svartelistet');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Hvis denne gjesten er svartlistet, vil de ikke lenger kunne bestille på denne eiendommen.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define ('_JOMRES_MAP_HEIGHT', "Karthøyde (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Kart zoom -nivå");
jr_define ('_JOMRES_MAP_MAPTYPE', "Karttype");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Mal Override Manager");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Malpakker er plugins som kan gi overstyringsmaler for forskjellige kjerne Jomres -malfiler.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Denne siden viser alle malfiler som kan overstyres av en malpakkes malfiler. Hvis du vil overstyre en bestemt malfil, klikker du på redigeringsknappen for den filen. På neste side vil du i stand til å velge hvilken versjon du vil overstyre med. Merk, disse overstyringene prioriteres både over Jomres Core og i alle Wordpress- eller Joomla -temaer/maloverstyringer. Du kan deaktivere en overstyring ved å slette den på siden List Overrides List. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Malnavn");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Current path");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ikke overstyrt");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Du kan velge hvilken malfil du vil overstyre kjernemalfilene ved å endre rullegardinmenyen");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Prosent rom bestilt");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Viser skjemaet for å lage ny egenskap.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Kartzoom, 1: Verden 5: Landmasse/kontinent 10: By 15: Gater 20: Bygninger');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Antall anmeldelser som skal vises');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Viser brukernes liste på listen. Hvis brukeren er registrert, er dette deres favoritter, hvis de ikke er logget inn, er det bare elementene som ble lagt til via favorittikonet under besøket.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hvis det beregnede innskuddet er mindre enn dette tallet, må du sette innskudd til denne verdien i stedet. Dette tallet kan i seg selv overskrides hvis det ikke tilfredsstiller nettstedets minste innskuddsinnstilling. La det stå til 0 til ikke bruk innstillingen. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Viser et samtykkeskjema som samsvarer med GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Romtypeliste for eiendom');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Show a property room type');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Vis påloggingsskjemaet');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Vis en liste over rom for en bestemt romtype');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Romtype -ID');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Viser en liste over syndikerte eiendommer');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Antall syndikerte eiendommer som skal vises');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Om MRP (hoteller/bed & breakfast) eller SRP (hytter/leiligheter/villaer) skal vises. Standard er bestemt fra gjeldende eiendom \' s eiendom u, er ikke eiendommen u, er eiendommen u, eiendommen er ikke for å velge en bestemt type, sett denne verdien til 0 for srps eller 1 for mrps. ');

