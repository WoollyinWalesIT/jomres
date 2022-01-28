<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Video Tutorials');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Kontrollpanel');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Denne opplæringen viser deg hvordan du bruker kontrollpanelet for eiendomsadministrasjon.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Tidslinje');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Slik bruker du tidslinjekalenderen. I denne videoen oppretter vi en ny gjest ved å skrive inn detaljene i popup-vinduet, eksisterende gjester kan brukes på nytt ved å velge navn fra rullegardinmenyen i popup-vinduet.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'How to use the List Properties page to view extra information, change columns, and search for specific properties.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edit your property details');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Redigere eiendomsdetaljer, inkludert dra på kartet for å angi posisjonen din.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Endre tariffredigeringsmodus');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Tariffredigeringsmodusen din bestemmer metoden du kan bruke til å sette priser på eiendommen din. Du gjør dette via siden for eiendomskonfigurasjon.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normal tarifferedigeringsmodus for hoteller, pensjoner, B&B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal tariffredigeringsmodus er en enkel tarifferedigeringsfunksjon som lar deg velge antall rom i en eiendom, romprisen, antall gjester hvert rom kan romme og maksimalt antall gjester i en fest. Når de er lagret, er disse prisene deretter gyldige i de neste 10 årene. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normal tariffredigering for villaer og leiligheter');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tariffredigeringsmodus er en enkel tarifferedigeringsfunksjon som lar deg velge eiendomstypen, prisen på eiendommen per natt og maksimalt antall gjester i en fest. Når du har lagret disse prisene er deretter gyldig i de neste 10 årene. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariffredigeringsmodus (anbefalt)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tariffredigeringsmodus lar deg konfigurere både prisen og minimum antall dager et opphold kan være gyldig for hver dag i året. Det er et kraftig verktøy som gir deg fullstendig kontroll over pris. I dette eksemplet viser vi deg hvordan du oppretter flere prissett for samme romtype, angir forskjellige priser for forskjellige perioder og forskjellige priser for bestemte dager i uken innen en periode. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Micromanage tariffredigeringsmodus for villaer/leiligheter (anbefalt)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tariffredigeringsmodus lar deg konfigurere både prisen og minimum antall dager et opphold kan være gyldig for hver dag i året. Det er et kraftig verktøy som gir deg fullstendig kontroll over pris. I dette eksemplet viser vi deg hvordan du oppretter flere prissett. Vi setter forskjellige priser for forskjellige perioder og forskjellige priser for bestemte dager i uken i løpet av en periode. Når det er gjort, oppretter vi flere tariffer for det samme eiendom, men med forskjellige gjestetall slik at vi kan kontrollere prisene nøyaktig for hvert scenario. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Ulike tariffer for forskjellige gjestetall');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Du kan opprette flere tariffer for samme romtype, så hvis du vil ha forskjellige priser for forskjellige antall gjester, kan du gjøre det.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per person per natt - Gjestetyper');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'For å belaste per person per natt må du opprette gjestetyper. Ulike gjestetyper kan ha avvik fra grunnprisen for et rom, så barn i forskjellige aldre kan ha varierende rabatter basert på alder. Du trenger ikke å belaste per person per natt for å bruke gjestetyper, du kan også bruke dem hvis du tar en flat rate, men fortsatt vil fange antall gjester, eller fordi du vil begrense antall gjester i en bestilling. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Mediasenter - Bildeopplasting');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Alle bilder lastes opp via mediasenteret. I denne videoen vil vi laste opp hovedegenskapsbildet, noen lysbildeseriebilder, et lite utvalg bilder som skal vises på søkeresultatsiden, og bilder for en av rommene.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Mediasenter - Bildeopplasting');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Alle bilder lastes opp via mediesenteret. I denne videoen laster vi opp hovedegenskapsbildet, et lite utvalg bilder som skal vises på søkeresultatsiden, og noen lysbildeseriebilder.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Dette er standard landingsside i administratorområdet. Du kan se et sammendrag av ulike nettstedstatistikker og se hvilke eiendommer som finnes i systemet, som er fullstendige og som er fullført og venter på gjennomgang før godkjenning . Når en eiendom er godkjent, kan den publiseres av eiendomsforvalteren. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, installasjon og bruk');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Denne videoen viser deg hvordan du bruker Plugin Manager, inkludert installasjon av plugin -manager og deretter installasjon og avinstallering av et plugin. Hvis du ikke har en lisensnøkkel, blir du bedt om å lagre på Nettstedet. Konfigurasjon før du kan installere manageren. Hvis du ikke har brukt plugin -manageren før, vil denne listen i utgangspunktet være tom, i dette eksemplet har jeg allerede installert en rekke plugins. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Eiendomsforvaltere');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Eiendomsforvaltere legges til på en av to måter. Enten oppretter de eiendommer selv (kan deaktiveres i nettstedskonfigurasjon) eller så kan nettstedets administrator tilordne en eksisterende leder til bestemte eiendommer. Ledere kan bare få tilgang til eiendommer de har. opprettet, eller har blitt tildelt. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Adgangskontroll');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Du kan bruke tilgangskontrollfunksjonen til å deaktivere menyalternativer, slik at de bare blir synlige for bestemte klasser av brukere, eller til og med får dem til å forsvinne helt. Hvis menylinjen ikke har noen menyalternativer å vise, er det vil forsvinne helt, så hvis du ikke vil at besøkende skal se noen alternativer, kan du bare angi at alle alternativer skal være synlige for for eksempel innloggede brukere. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Egenskaper og romtyper');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'I denne videoen ser du to viktige konsepter. Den første er opprettelse av eiendomstyper og tilhørende romtyper. Du vil også se en registrert bruker som ennå ikke er leder, opprette sin egen eiendom og bli en manager (men bare i stand til å konfigurere eiendommen de har opprettet). Eiendom og romtyper er koblet sammen, når du har opprettet en eiendomstype, må du legge til en romtype, ellers vil eiendomsforvaltere se røde feilmeldinger når du prøver å konfigurere egenskapene sine. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Lasting Map Markers');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Du bruker Mediesenteret til å laste opp kartmarkører. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Her finner du en flott kilde til markører. << /a> Prosedyren for opplasting av eiendomsfunksjoner, romfunksjoner, romtyper og andre er den samme. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Egenskaper');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'I denne videoen viser vi deg hvordan du oppretter eiendomsfunksjoner og laster opp bilder for dem.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes are an exceptionally powerful feature of Jomres. Prinsippet er det samme for både Joomla og Wordpress. I denne videoen viser vi deg hvor du skal se de korte kodene (denne listen vil endres avhengig av hvilke plugins som er installert) og hvordan du bruker dem. Du kan bruke kodene i artikler eller moduler. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Log files');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Denne videoen viser deg hvordan du ser loggfiler. Omfattende logging skjer når systemet kjøres. Når det er i produksjonsmodus (nettstedskonfigurasjon> feilsøking) blir det generert færre logger, så hvis du tester en ny funksjon da du bør sette nettstedet ditt til Development. Hvis du vil legge til din egen logging i Jomres-skriptene dine, kan du ta en titt på <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> vår manuelle side om hvordan du gjør det. </a> Her vil vi kaste en falsk feil og deretter se loggfilen. Fordi siden er satt til utvikling der er mye informasjon, normalt vil du bare se en melding som sier at det var en feil og at det er blitt rapportert. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Oversette etiketter og andre strenger');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Det finnes en rekke måter å oversette språkstrenger i Jomres på. Du kan redigere språkfiler, men de kan bli overskrevet når du oppgraderer. I stedet anbefaler vi at du bruker de innebygde oversettelsesverktøyene som er unike for våre programvare. Hvis strengen er noe som er lagt inn i et skjema, for eksempel navnet på en romtype, kan du bruke etikettredigeringssiden. Hvis strengen er fra språkfilen, kan du bruke redigeringsverktøyet for språkfiler. Bare bruk nettleserens søkeverktøy for å finne strengen du vil endre, og klikk deretter på lenken for å endre den. Disse endringene lagres i databasen og er derfor oppdateringssikre. Du kan ha forskjellige etiketter for forskjellige eiendomstyper, slik at du kan endre Ny eiendom til Ny Campingplass, for eksempel ved å endre rullegardinmenyen Språkkontekst øverst på siden før du endrer etiketten. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Legge til eiendommer');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> På dette stadiet er Jomres installert i CMS og det er lagt til i frontend -menyen (eller i Wordpress har du opprettet en side og lagt til den grunnleggende Jomres -kortkoden til den). </ p>
<p> Her ser du hvordan en registrert bruker som ennå ikke er eiendomsforvalter i Jomres kan opprette en ny eiendom, konfigurere noen grunnleggende innstillinger og publisere den. </p>
<p> På slutten vil du se at lederen automatisk har blitt angitt som eiendomsforvalter, men de kan bare konfigurere sine egne eiendommer. </p>
<p> Selv om grensesnittet i Wordpress ser annerledes ut, er prosessen nøyaktig den samme for Joomla eller Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Eiendomskategorier');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Eiendomskategorier er en enkel funksjon som lar eiendomsforvaltere tilordne sine eiendommer til en bestemt kategori. Nettstedadministratorer kan opprette snarveier som viser alle eiendommer i en kategori, som vist i denne videoen.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Nettstedadministrator viser eiendommer');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Du administrerer ikke eiendommer herfra, du kan bare administrere eiendommer fra frontend, men i denne listen kan du se eiendommer som venter på godkjenning (hvis funksjonen er aktivert) og alle som er ufullstendig (f.eks. trenger du fortsatt å laste opp bilder, angi priser osv.). Klikk på eiendomsnavnet for å gå til oversikten for den eiendommen. Du vil da kunne bruke veiledningsseksjonene øverst på siden for å se trinnene som du må ta for å fullføre og publisere en eiendom. </p> ');

