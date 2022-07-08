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

jr_define ('_JOMRES_FAQ', 'Vanlige spørsmål');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Hvordan oppretter jeg en eiendom?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Klikk på Egenskaper> Ny eiendom for å legge til en ny eiendom.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Hvordan kan jeg se hvordan eiendommen min ser ut for gjester?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Klikk på Egenskaper> Forhåndsvisning for å se hvordan eiendommen din ser ut for gjester.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Hvordan legger jeg til rom?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Hvordan du legger til rom, avhenger av din tariffredigeringsmodus. I normal tarifferedigeringsmodus trenger du ikke legge til rom, ettersom de automatisk legges til når du konfigurerer prisene. Hvis du bruker Micromanage eller Avansert tariffredigeringsmodus, deretter kan du i Innstillinger> Rom legge til, redigere og slette rom. Du kan også opprette romfunksjoner og tilordne disse funksjonene til disse rommene. I tillegg kan du laste opp bilder for individuelle rom som bruker Media Center. Når du oppretter rom, bør du prøve å sikre at de gjenspeiler de virkelige rommene i eiendommen din, da det vil gjøre dem lettere å administrere. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Hvordan setter jeg rompriser?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Dette avhenger av tarifferedigeringsmodus. Hvis du bruker redigeringsmodus for normal tariff (kategorien Egenskaper> Tariffredigeringsmoduser), kan du konfigurere antall rom du har, prisen, antall personer hvert rom har plass til og totalt antall personer du vil ha i hver bestilling. Denne modusen lar deg angi rompriser for de neste 10 årene. <br/> Hvis du bruker avanserte eller mikromanage -takstredigeringsmoduser, er du kan angi rompriser for hver dag i årene som kommer. Du kan også ha flere tariffer for samme romtype, for eksempel kan du ha en takst for Bed & Breakfast og en annen for seng, frokost og kveldsmåltid. Med mindre du har et spesifikt behov , anbefaler vi at du bruker Micromanage hele tiden, Advanced vil fungere på samme måte, men du må være forsiktig for å sikre at de forskjellige tariffens start- og sluttdatoer er påfølgende. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Hvordan lager jeg valgfrie tillegg?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Tillegg kan legges til i bestillinger og konfigureres i Innstillinger> Tillegg. Disse kan enten være valgfrie eller 'tvunget', med andre ord kan ikke gjesten velge bort dem i bestillingen. Du kan tilby forskjellige metoder av gebyr for tilleggsutstyr, og om de er vist på siden Eiendomsdetaljer eller ikke. Fordi tillegg kun kan vises hvis en bestilling er innenfor bestemte datoer (for eksempel for sesongens frukt), bør du sørge for at du har angitt datoene Gyldig fra og Til. Når du har opprettet valgfrie tillegg, kan du laste opp bilder for dem via Media Manager. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Hvordan kan jeg betale online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "For å ta betalinger online må du ha en konto hos en online betalingsleverandør, kalt en gateway. For å se de tilgjengelige gatewayene, gå til kategorien Eiendomskonfigurasjon> Gatewayer. Klikk på en gateways navn for å bli tatt til konfigurasjonssiden. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Kan jeg gi rabatter?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Det kan gis rabatter, det er en rekke forskjellige måter dette kan gjøres på. Hvis du foretar en bestilling på vegne av en kunde, kan du angi dine egne innskudds- og bestillingssummer i bestillingsskjemaet , ved å bruke feltene Overstyr overnatting totalt og Overstyr innskudd (gjester kan ikke bruke denne funksjonen). En annen måte å gi en gjest rabatt på er å opprette rabattkuponger, som kan konfigureres slik at de bare kan brukes mellom bestemte datoer (Gyldig fra/til) eller gjelder bare når bestillingen faller mellom bestemte datoer (booking gyldig fra/til). Disse rabattkupongene kan tildeles bare én gjest, eller hvis du vil kan du skrive ut kupongene. Utskriften inneholder en QR -kode som gjestene kan skanne til telefonene sine som tar dem til bestillingsskjemaet med rabattkoden som allerede gjelder. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Når jeg klikker Ny bestilling, blir jeg tatt til kontaktskjemaet, hvorfor?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Før du kan bestille online, må du først konfigurere noen priser (takster) for hver romtype du har i din virkelige eiendom. Når du har opprettet noen tariffer, kan du ta bestillinger . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Hva er Black Bookings?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Svarte bestillinger er bestillinger som er opprettet for å ta et rom eller rom ut av drift. De er ikke tilknyttet noen gjester og er nyttige, for eksempel hvis et rom må pusses opp.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Bilder');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Hvordan laster jeg opp bilder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "For å laste opp bilder må du gå til Innstillinger> Mediesenter -siden. På denne siden vil du se flere ruter. Øverst kan du se noen notater, og under dem vil du se en rullegardinmeny. Denne rullegardinmenyen lar deg velge hvilken ressurs du laster opp bilder for. <br/> Til høyre er en kolonne med Legg til bilder, Slett liste og Last opp alle. Klikk på Legg til bilder og velg noen bilder fra skrivebordet eller mobilenheten. Når du har gjort det, vil kolonnen endres til en liste over miniatyrbilder. Herfra kan du laste opp ett eller flere bilder for ressursene dine. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Hva er hovedbildet?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Hovedbildet er det som vises i søkeresultatene og i eiendomsoverskriften (området øverst på sidene som viser noe om eiendommen din). Du bør velge et bilde som viser eiendommen din i best mulig lys. For å laste opp et hovedbilde, må du kontrollere at Eiendomens hovedbilde er valgt i rullegardinlisten øverst til venstre, og deretter laste opp ett eller flere bilder. Hvis du laster opp mer enn ett bilde, blir alle bildene brukt i søket resultatsiden vises som en liten lysbildefremvisning. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Romfunksjoner kan opprettes av brukere av Micromanage eller Advanced tariffredigeringsmoduser. Disse kan kobles til ett eller flere rom, og vises i bestillingsskjemaet. Når du har opprettet en romfunksjon, kan du last opp et bilde for den funksjonen ved først å velge Romfunksjonsikoner i rullegardinmenyen i Media Center, og deretter velge romfunksjonens navn fra rullegardinmenyen som skal vises under. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Hvordan laster jeg opp rombilder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Rom kan opprettes av brukere av Micromanage eller Advanced tariffredigeringsmoduser. Når ett eller flere rom er opprettet, kan du laste opp flere bilder for hvert rom via Media Center (velg romnavn/nummer etter å velge Rombilder i rullegardinmenyen). Disse bildene kan sees i en lysbildefremvisning ved å se forhåndsvisningssiden og velge kategorien Våre rom og deretter klikke på Tilgjengelighet -lenken. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Hvordan laster jeg opp lysbildeseriebilder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Lysbildefremvisninger vises på siden Egenskapsdetaljer (forhåndsvisning), ved siden av knappen Bestill nå.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Hvordan laster jeg opp tilleggsbilder?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "I likhet med rom og romfunksjoner, må du opprette en ekstra først. Når det er gjort, kan du velge Tillegg øverst i rullegardinlisten. Når du har gjort det, må du velge navnet på ekstra fra rullegardinlisten nedenfor. Når navnet er valgt, kan du laste opp ett eller flere bilder for det ekstraet. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Noe gjestrelatert');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Hvordan lagrer jeg beskrivelser på flere språk?');
    
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "For å lagre beskrivelser på flere språk, gå først til Innstillinger> Eiendomsdetaljer -siden. Lagre beskrivelsen for eiendommen din der. Endre deretter språket du ser nettstedet på. Gå nå til Innstillinger Eiendomsdetaljer -siden igjen, og lagre detaljene igjen. Så hvis nettstedet er i stand til å vise både engelsk og spansk (eller andre) språk, ville du velge engelsk, angi beskrivelsen på engelsk og deretter klikke Lagre. Deretter endrer du det nåværende språk til spansk, lagre deretter den nye spanske beskrivelsen. Dette fungerer for alle innganger på den siden. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Kan jeg endre andre eiendommer på dette nettstedet?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nei, du kan ikke. Du kan bare administrere eiendommer du har opprettet eller blitt tildelt som eiendomsforvalter.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Kan jeg endre andre eiendommer på dette nettstedet?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ja du kan, du er en Super Property Manager og kan endre alle egenskapene som vises på siden Listeegenskaper.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Hva er gjestetyper/Hvordan endrer jeg per person per natt?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "I Innstillinger> Eiendomskonfigurasjon> Tariffer og valutaer kan du bestemme om du vil belaste per person per natt. Hvis du belaster per person per natt, må du opprette en eller flere gjestetyper. Du kan lage en enkel gjestetype, der du bare gir dem en beskrivelse (f.eks. Personer), eller du kan opprette flere forskjellige gjestetyper, for eksempel 'Voksne' og 'Barn under 10'. For barna, hvis du vil tilby en rabatt på 50% så setter du \"Er prosentandel\" til Ja, og variasjonsverdien til 50. Rom har grunnpriser, denne innstillingen lar deg justere prisen på rommet basert på gjestetypen. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Hva er romfunksjoner?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Romfunksjoner er ting som får rommet til å skille seg ut. Det kan være noe enkelt som te- og kaffefasiliteter, eller det kan være ting som virkelig får rommet til å heve seg over de andre, for eksempel\" Utsikt over bay \". Når du har opprettet en romfunksjon, kan du laste opp bilder for den funksjonen i Mediasenteret. Disse romfunksjonene kan vises på tilgjengelighetssiden for rom, og hvis du har konfigurert eiendommen din til å vise listen Klassiske rom. (hvor gjestene kan velge nøyaktig hvilket rom de vil bestille) så kan de bruke romfunksjonene til å filtrere ooms som vises i bestillingsskjemaet. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Betalinger');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Du kan ikke se betalingsgatewayen etter at du har gjort en bestilling.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Hvis du er logget inn som eiendomsforvalter, ser du ikke betalingsgatewayen, fordi du ikke betaler selv. Bare ikke-administratorer ser porten når du foretar bestillinger.");
    
