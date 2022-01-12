<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Videotutorials');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Kontrolpanel');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Denne vejledning viser dig, hvordan du bruger kontrolpanelet til ejendomsadministration.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Tidslinje');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Sådan bruges tidslinjekalenderen. I denne video opretter vi en ny gæst ved at indtaste deres oplysninger i popup\'en, eksisterende gæster kan genbruges ved at vælge deres navn fra rullemenuen i popup\'en.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Sådan bruges siden Listeegenskaber til at se ekstra oplysninger, ændre kolonner og søge efter bestemte egenskaber.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Rediger dine ejendomsoplysninger');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Redigering af dine ejendomsoplysninger, herunder trækning på kortet for at angive din placering.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Change tariff editing mode');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Din takstredigeringsfunktion bestemmer den metode, du kan bruge til at indstille priser for din ejendom. Du gør dette via ejendomskonfigurationssiden.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normal takstredigeringstilstand for hoteller, pensioner, B&B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal takstredigeringsfunktion er en enkel takstredigeringsfunktion, der giver dig mulighed for at vælge antal værelser i en ejendom, rummets pris, antallet af gæster, hvert værelse kan rumme og det maksimale antal gæster i en fest. Når de er gemt, er disse priser derefter gældende i de næste 10 år. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normal takstredigering for villaer og lejligheder');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tarifferedigeringsfunktion er en simpel takstredigeringsfunktion, der giver dig mulighed for at vælge ejendommens undertype, ejendommens pris pr. nat og det maksimale antal gæster i en fest. Når disse priser er gemt, er disse priser derefter gyldig i de næste 10 år. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariffedigeringstilstand (anbefales)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tariffedigeringstilstand giver dig mulighed for at konfigurere både prisen og det mindste antal dage, som et ophold kan være gyldigt for, hver dag i året. Det er et kraftfuldt værktøj, der giver dig komplet kontrol over pris. I dette eksempel viser vi dig, hvordan du opretter flere prissæt for den samme værelsestype, angiver forskellige priser for forskellige perioder og forskellige priser for bestemte ugedage inden for en periode. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Micromanage tarifredigeringstilstand for villaer/lejligheder (anbefales)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tariffedigeringstilstand giver dig mulighed for at konfigurere både prisen og det mindste antal dage, som et ophold kan være gyldigt for, hver dag i året. Det er et kraftfuldt værktøj, der giver dig komplet kontrol over prissætning. I dette eksempel viser vi dig, hvordan du opretter flere prissæt. Vi fastsætter forskellige priser for forskellige perioder og forskellige priser for bestemte dage i ugen inden for en periode. Når det er gjort, opretter vi flere takster for det samme ejendom, men med forskellige gæstenumre, der giver os mulighed for præcist at kontrollere priserne for hvert scenario. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Forskellige takster for forskellige gæstetal');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Du kan oprette flere takster for den samme værelsestype, så hvis du vil have forskellige priser for forskellige antal gæster, kan du gøre det.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per person pr. nat - Gæstetyper');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'For at opkræve gebyr pr. person pr. nat skal du oprette gæstetyper. Forskellige gæstetyper kan have afvigelser fra grundprisen for et værelse, så børn i forskellige aldre kan have forskellige rabatter baseret på deres alder. Du ikke behøver at opkræve per person per nat for at bruge gæstetyper, du kan også bruge dem, hvis du opkræver en fast pris, men stadig vil fange antallet af gæster, eller fordi du vil begrænse antallet af gæster i en reservation. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Mediecenter - Upload af billeder');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Alle billeder uploades via mediecenteret. I denne video uploader vi hovedobjektet, nogle diasshowbilleder, et lille udvalg af billeder, der skal vises på søgeresultatsiden, og billeder til en af værelserne. ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Mediecenter - Upload af billeder');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Alle billeder uploades via mediecenteret. I denne video uploader vi hovedegenskabsbilledet, et lille udvalg af billeder, der skal vises på søgeresultatsiden, og nogle diasshowbilleder.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Dette er din standard landingsside i administratorområdet. Du kan se et resumé af forskellige webstatistikker og se, hvilke egenskaber der findes i systemet, som er fuldstændige, og som er afsluttet og afventer gennemgang før godkendelse . Når en ejendom er blevet godkendt, kan den offentliggøres af ejendomsadministratoren. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, installation og brug');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Denne video viser dig, hvordan du bruger Plugin Manager, herunder installation af plugin manager og derefter installation og afinstallation af et plugin. Hvis du ikke har en licensnøgle, bliver du bedt om at gemme på Site Konfiguration, før du kan installere manageren. Hvis du ikke har brugt plugin -manageren før, er denne liste i første omgang tom, i dette eksempel har jeg allerede installeret en række forskellige plugins. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Ejendomsadministratorer');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Ejendomsadministratorer tilføjes på en af ​​to måder. Enten opretter de egenskaber selv (kan deaktiveres i webstedskonfiguration) eller webstedsadministratoren kan tildele en eksisterende leder til bestemte ejendomme. Ledere kan kun få adgang til ejendomme, de har oprettet eller er blevet tildelt. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Adgangskontrol');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Du kan bruge funktionen Adgangskontrol til at deaktivere menuindstillinger, gøre dem kun synlige for bestemte klasser af brugere eller endda få dem til at forsvinde helt. Hvis menulinjen ikke har nogen menuindstillinger at vise, så er det vil forsvinde helt, så hvis du ikke vil have, at besøgende på webstedet skal se nogen muligheder, kan du f.eks. bare angive, at alle muligheder skal være synlige for loggede brugere. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Ejendoms- og værelsestyper');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'I denne video ser du to vigtige begreber. Den første er oprettelse af ejendomstyper og tilhørende rumtyper. Du vil også se en registreret bruger, der endnu ikke er leder, oprette sin egen ejendom og blive en manager (men kun i stand til at konfigurere den ejendom, de har oprettet). Ejendomme og værelsestyper er knyttet sammen, når du har oprettet en egenskabstype, skal du tilføje en værelsestype, ellers vil ejendomsadministratorer se røde fejlmeddelelser, når du prøver at konfigurere deres ejendomme. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Upload af kortmarkører');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Du bruger Media Center til at uploade kortmarkører. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Du finder en fantastisk kilde til markører her. << /a> Proceduren for upload af egenskabsfunktioner, værelsesfunktioner, værelsestyper og andre er den samme. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Egenskabsfunktioner');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'I denne video viser vi dig, hvordan du opretter egenskabsfunktioner og uploader billeder til dem.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes are an exceptionally powerful feature of Jomres. Princippet er det samme for både Joomla og Wordpress. I denne video viser vi dig, hvor du skal se de korte koder (denne liste vil ændre sig afhængigt af hvilke plugins der er installeret) og hvordan du bruger dem. Du kan bruge koderne i artikler eller moduler. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Log files');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Denne video viser dig, hvordan du ser logfiler. Omfattende logning forekommer, når systemet køres. I produktionstilstand (Site Config> Debugging) genereres der færre logfiler, så hvis du tester en ny funktion du bør indstille dit websted til Udvikling. Hvis du vil tilføje din egen logning til dine Jomres-scripts, kan du kigge på <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> vores manuelle side om, hvordan man gør det. </a> Her vil vi smide en falsk fejl og derefter se logfilen. Fordi webstedet er indstillet til udvikling der er mange oplysninger, normalt ville du bare se en meddelelse om, at der var en fejl, og at den er blevet rapporteret. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Oversættelse af etiketter og andre strenge');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Der er en række måder at oversætte sprogstrenge i Jomres, du kan redigere sprogfiler, men de kan blive overskrevet, når du opgraderer. I stedet anbefaler vi, at du bruger de indbyggede oversættelsesværktøjer, der er unikke for vores software. Hvis strengen er noget, der er indtastet i en formular, f.eks. navnet på en rumtype, kan du bruge etiketredigeringssiden. Hvis strengen er fra sprogfilen, kan du bruge redigeringsværktøjet til sprogfiler. Bare brug browsersøgeværktøjet til at finde den streng, du vil ændre, og klik derefter på linket for at ændre den. Disse ændringer gemmes i databasen og er derfor opdateringssikre. Du kan have forskellige etiketter til forskellige ejendomstyper, så du kan ændre ny ejendom til ny campingplads, f.eks. ved at ændre rullelisten Sprogkontekst øverst på siden, før du ændrer etiketten. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Tilføjelse af egenskaber');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> På dette stadium er Jomres blevet installeret i CMS, og det er blevet tilføjet til frontend -menuen (eller i Wordpress har du oprettet en side og tilføjet den grundlæggende Jomres -kortkode til den). </ p>
<p> Her kan du se, hvordan en registreret bruger, der endnu ikke er ejendomsadministrator i Jomres, kan oprette en ny ejendom, konfigurere nogle grundlæggende indstillinger og offentliggøre den. </p>
<p> I slutningen vil du se, at lederen automatisk er blevet angivet som ejendomsadministrator, men de kan kun konfigurere deres egne ejendomme. </p>
<p> Selvom grænsefladen i Wordpress ser anderledes ud, er processen nøjagtig den samme for Joomla eller Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Egenskabskategorier');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Ejendomskategorier er en enkel funktion, der gør det muligt for ejendomsadministratorer at tildele deres ejendomme til en bestemt kategori. Webstedsadministratorer kan oprette genveje, der viser alle ejendomme i en kategori, som vist i denne video.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Webstedsadministrator ser egenskaber');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Du administrerer ikke ejendomme herfra, du kan kun administrere ejendomme fra frontend, men på denne liste kan du se ejendomme, der afventer godkendelse (hvis funktionen er aktiveret) og alle, der er ufuldstændig (f.eks. stadig brug for at uploade billeder, angive priser osv.). Klik på ejendomsnavnet, der skal føres til instrumentbrættet for den pågældende ejendom. Du vil derefter kunne bruge vejledningsafsnittene øverst på siden for at se de trin, der du skal tage for at fuldføre og udgive en ejendom. </p> ');


