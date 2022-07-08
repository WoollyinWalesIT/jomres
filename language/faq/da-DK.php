<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Ofte stillede spørgsmål');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Egenskaber');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Hvordan opretter jeg en ejendom?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Klik på Egenskaber> Ny ejendom for at tilføje en ny ejendom.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Hvordan kan jeg se, hvordan min ejendom ser ud for gæster?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Klik på Egenskaber> Forhåndsvisning for at se, hvordan din ejendom ser ud for gæster.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Hvordan tilføjer jeg værelser?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Hvordan du tilføjer lokaler afhænger af din takstredigeringsfunktion. I normal tarifredigeringstilstand behøver du ikke tilføje lokaler, da de automatisk tilføjes, når du konfigurerer dine priser. Hvis du bruger Mikromanage eller Avanceret tarifredigeringstilstand, derefter kan du i Indstillinger> Rum tilføje, redigere og slette værelser. Du vil også kunne oprette rumfunktioner og tildele disse funktioner til disse rum. Derudover kan du uploade billeder til individuelle værelser ved hjælp af Media Center. Når du opretter værelser, skal du prøve at sikre, at de afspejler dine virkelige rum i din ejendom, da det vil gøre dem lettere at administrere. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Hvordan indstiller jeg værelsespriser?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Dette afhænger af din tarifredigeringstilstand. Hvis du bruger tilstanden Normal tarifredigering (egenskabskonfiguration> fane til redigering af tariffer), kan du konfigurere det antal værelser, du har, prisen, antallet af personer hvert værelse kan rumme og det samlede antal mennesker, du ønsker i hver booking. Denne tilstand giver dig mulighed for at indstille værelsespriser for de næste 10 år. <br/> Hvis du bruger avancerede eller mikromanage takstredigeringsmetoder, er du i stand til at fastsætte værelsespriser for hver dag i de kommende år. Du kan også have flere takster for den samme værelsestype, for eksempel kan du have en takst for Bed & Breakfast og en anden for seng, morgenmad og aftenmåltid. Medmindre du har et specifikt behov , anbefaler vi, at du bruger Micromanage hele tiden, Advanced fungerer på samme måde, men du skal være forsigtig med at sikre, at dine forskellige tarifs start- og slutdatoer er på hinanden følgende. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Hvordan opretter jeg ekstraudstyr?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Ekstra kan tilføjes til bookinger og konfigureres i Indstillinger> Ekstra. Disse kan enten være valgfri eller 'tvunget', med andre ord kan gæsten ikke fravælge dem i reservationen. Du kan tilbyde forskellige metoder af gebyrer for ekstraudstyr, og om de er vist på din ejendomsoplysningsside eller ej. Fordi ekstras kun kan få vist, hvis en reservation er inden for bestemte datoer (f.eks. for sæsonbetonede frugter), bør du sørge for, at du har angivet datoerne Gyldig fra og Til. Når du har oprettet ekstraudstyr, kan du uploade billeder til dem via Media Manager. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Hvordan kan jeg tage betalinger online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "For at tage betalinger online skal du have en konto hos en online betalingsudbyder, kaldet en gateway. For at se de tilgængelige gateways skal du gå til egenskabskonfiguration> faner Gateways. Klik på en gateways navn for at blive taget til dens konfigurationsside. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Kan jeg give rabatter?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Der kan gives rabatter, der er en række forskellige måder dette kan gøres på. Hvis du foretager en reservation på vegne af en kunde, kan du angive dine egne indbetalings- og bookingtotaler i reservationsformularen , ved hjælp af felterne Tilsidesæt indkvartering i alt og Tilsidesæt indbetaling (gæster kan ikke bruge denne funktion). En anden måde at give en gæst rabat på er at oprette rabatkuponer, som kan konfigureres, så de kun kan bruges mellem bestemte datoer (Gyldig fra/til) eller anvendes kun, når reservationen falder mellem bestemte datoer (Booking gyldig fra/til). Denne rabatkupon kan tildeles kun en gæst, eller hvis du vil, kan du udskrive kuponerne. Udskriften indeholder en QR -kode hvilke gæster kan scanne ind på deres telefoner, der tager dem til din bookingformular med rabatkoden, der allerede gælder. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Når jeg klikker på Ny booking, føres jeg til kontaktformularen, hvorfor?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Inden du kan foretage bookinger online, skal du først konfigurere nogle priser (takster) for hver værelsestype, du har i din ejendom i virkeligheden. Når du har oprettet nogle takster, kan du tage bookinger . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Hvad er sorte bookinger?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Sorte bookinger er bookinger, der er oprettet for at tage et eller flere rum ud af drift. De er ikke tilknyttet nogen gæster og er nyttige, f.eks. hvis et værelse skal renoveres.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Billeder');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Hvordan uploader jeg billeder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "For at uploade billeder skal du besøge siden Indstillinger> Mediecenter. På denne side vil du se flere ruder. Øverst kan du se nogle noter, og under dem vil du se en rullemenu. Denne rullemenu giver dig mulighed for at vælge, hvilken ressource du uploader billeder til. <br/> Til højre er en kolonne med Tilføj billeder, Ryd liste og Upload alle. Klik på Tilføj billeder, og vælg nogle billeder fra dit skrivebord eller din mobile enhed. Når du har gjort det, skifter kolonnen til en liste over miniaturebilleder. Herfra kan du uploade et eller flere billeder til dine ressourcer. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Hvad er 'Main' -billedet?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Hovedbilledet er det, der vises i søgeresultater og i din ejendomsoverskrift (området øverst på sider, der viser noget om din ejendom). Du skal vælge et billede, der viser din ejendom i bedst muligt lys. For at uploade et hovedbillede skal du sørge for, at Ejendoms hovedbillede er valgt i rullelisten øverst til venstre, og derefter uploade et eller flere billeder. Hvis du uploader mere end ét billede, bruges alle billeder i søgningen resultatsiden vises som et lille diasshow. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Hvad er rumfunktionsikoner?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Rumfunktioner kan oprettes af brugere af Micromanage eller Avancerede takstredigeringsmetoder. Disse kan forbindes til et eller flere rum og vises i reservationsformularen. Når du har oprettet en rumfunktion, kan du uploade et billede til denne funktion ved først at vælge Ikoner for rumfunktioner i rullemenuen i Media Center og derefter vælge rumfunktionens navn fra rullemenuen, der vises nedenfor. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Hvordan uploader jeg rumbilleder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Værelser kan oprettes af brugere af Micromanage eller Avancerede tarifferedigeringstilstande. Når et eller flere rum er oprettet, kan du uploade flere billeder for hvert værelse via Media Center (vælg rumnavn/nummer efter at vælge værelsebilleder i rullemenuen). Disse billeder kan ses i et diasshow ved at se siden Preview og vælge fanen Our Rooms og derefter klikke på linket Tilgængelighed. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Hvordan uploader jeg diasshowbilleder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Diasshowbilleder ses på ejendomsoplysningssiden (eksempel) ved siden af ​​knappen Book nu.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Hvordan uploader jeg ekstra billeder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "I lighed med værelser og rumfunktioner skal du først oprette en ekstra. Når det er gjort, kan du vælge Ekstra i øverste rullemenu. Når du har gjort det, skal du vælge navnet på ekstra fra rullelisten herunder. Når navnet er valgt, kan du uploade et eller flere billeder til det ekstra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Noget gæstrelateret');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Du blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Hvordan gemmer jeg beskrivelser på flere sprog?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "For at gemme beskrivelser på flere sprog skal du først besøge siden Indstillinger> Ejendomsoplysninger. Gem beskrivelsen for din ejendom der. Skift derefter det sprog, du ser webstedet på. Gå nu til Indstillinger Ejendomsoplysningssiden igen, og gem oplysningerne igen. Så hvis webstedet er i stand til at vise både engelsk og spansk (eller andre) sprog, ville du vælge engelsk, indtaste beskrivelsen på engelsk og derefter klikke på Gem. Dernæst ændrer du dit nuværende sprog til spansk, gem derefter den nye spanske beskrivelse. Dette fungerer for alle input på den side. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Kan jeg ændre andre ejendomme på dette websted?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nej, det kan du ikke. Du kan kun administrere ejendomme, du har oprettet eller er blevet tildelt som ejendomsadministrator.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Kan jeg ændre andre ejendomme på dette websted?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ja det kan du, du er en Super Property Manager og kan ændre alle egenskaber, der vises på siden Listeegenskaber.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Hvad er gæstetyper/Hvordan ændrer jeg mig pr. person pr. nat?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "I fanen Indstillinger> Ejendomskonfiguration> Tariffer og valutaer kan du beslutte, om du vil opkræve per person per nat. Hvis du opkræver per person per nat, skal du oprette en eller flere gæstetyper. Du kan oprette en simpel gæstetype, hvor du bare giver dem en beskrivelse (f.eks. Personer), eller du kan oprette flere forskellige gæstetyper, f.eks. 'Voksne' og 'Børn under 10'. For børnene, hvis du vil tilbyde en rabat på 50%, så ville du indstille \"Er procentdel\" til Ja, og variansværdien til 50. Værelserne har grundpriser, denne indstilling giver dig mulighed for at justere prisen på værelset baseret på gæstetypen. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Hvad er rumfunktioner?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Værelsesfunktioner er ting, der får rummet til at skille sig ud. Det kan være noget simpelt som te- og kaffefaciliteter, eller det kan være ting, der virkelig får rummet til at hæve sig over de andre, f.eks.\" Udsigt over bay \". Når du har oprettet en rumfunktion, kan du uploade billeder til denne funktion i Media Center. Disse rumfunktioner kan ses på værelsets tilgængelighedsside, og hvis du har konfigureret din ejendom til at vise klassiske værelselisteformater (hvor gæsterne kan vælge præcis hvilket værelse, de vil booke), så kan de bruge værelsesfunktionerne til at filtrere ooms vist i reservationsformularen. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Betalinger');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Du kan ikke se betalingsgatewayen efter at have foretaget en reservation.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Hvis du er logget ind som ejendomsadministrator, ser du ikke betalingsgatewayen, fordi du ikke betaler dig selv. Kun ikke-administratorer kan se gatewayen, når de foretager reservationer.");