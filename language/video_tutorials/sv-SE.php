<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Videotutorials');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Kontrollpanelen');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Den här självstudien visar hur du använder kontrollpanelen för fastighetshantering.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Tidslinje');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Så här använder du tidslinjekalendern. I den här videon skapar vi en ny gäst genom att ange deras uppgifter i popup-fönstret, befintliga gäster kan återanvändas genom att välja deras namn från rullgardinsmenyn i popup-fönstret.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Så här använder du listan Egenskaper för att visa extra information, ändra kolumner och söka efter specifika egenskaper.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Redigera din fastighetsinformation');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Redigera din fastighetsinformation, inklusive att dra på kartan för att ställa in din plats.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Ändra tariffredigeringsläge');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ditt tarifferedigeringsläge bestämmer den metod du kan använda för att ange priser för din egendom. Du gör detta via egenskapskonfigurationssidan.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normal tax redigering för hotell, pensioner, B&B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal tariffredigeringsläge är en enkel tarifferedigeringsfunktion som låter dig välja antal rum i en fastighet, priset på rummet, antalet gäster som varje rum kan ta emot och det maximala antalet gäster i en fest. När de sparats gäller dessa priser sedan de kommande tio åren. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normal tariffredigering för villor och lägenheter');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tariffredigeringsläge är en enkel tariffredigeringsfunktion som låter dig välja egenskapens undertyp, priset på fastigheten per natt och det maximala antalet gäster i en fest. därefter giltig under de kommande tio åren. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariffredigeringsläge (rekommenderas)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tariffredigeringsläge låter dig konfigurera både priset och det minsta antal dagar som en vistelse kan vara giltig för varje dag året om. Det är ett kraftfullt verktyg som ger dig komplett kontroll över prissättning. I det här exemplet visar vi dig hur du skapar flera prissättningar för samma rumstyp, anger olika priser för olika perioder och olika priser för specifika veckodagar inom en period. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Micromanage tariffredigeringsläge för villor/lägenheter (rekommenderas)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tariffredigeringsläge låter dig konfigurera både priset och det minsta antal dagar som en vistelse kan vara giltig för varje dag året om. Det är ett kraftfullt verktyg som ger dig komplett kontroll överprissättning. I det här exemplet visar vi dig hur du skapar flera prissättningar. Vi kommer att fastställa olika priser för olika perioder och olika priser för specifika veckodagar inom en period. När det är gjort kommer vi att skapa flera tariffer för samma fastighet, men med olika gästnummer som gör att vi exakt kan kontrollera priserna för varje scenario. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Olika tariffer för olika gästnummer');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Du kan skapa flera avgifter för samma rumstyp, så om du vill ha olika priser för olika antal gäster kan du göra det.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per person per natt - Gästtyper');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'För att debitera per person och natt måste du skapa gästtyper. Olika gästtyper kan ha avvikelser från rumspriset så att barn i olika åldrar kan ha olika rabatter baserat på deras ålder. Du behöver inte debitera per person och natt för att använda gästtyper, du kan också använda dem om du tar ut en fast avgift men ändå vill fånga antalet gäster, eller för att du vill begränsa antalet gäster i en bokning. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Bildöverföring');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Alla bilder laddas upp via mediacentret. I den här videon laddar vi upp huvudbilden, några bildspel, ett litet urval av bilder som ska visas på sökresultatsidan och bilder för en av rummen.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - Bildöverföring');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Alla bilder laddas upp via mediacentret. I den här videon laddar vi upp huvudbilden, ett litet urval av bilder som ska visas på sökresultatsidan och några bildspel.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Detta är din standardmålsida i administratörsområdet. Du kan se en sammanfattning av olika webbplatsstatistik och se vilka egenskaper som finns i systemet, vilka är färdiga och som har slutförts och väntar på granskning innan godkännande . När en fastighet har godkänts kan den publiceras av fastighetsförvaltaren. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, installation och användning');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Den här videon visar hur du använder Plugin Manager, inklusive installation av pluginhanteraren och sedan installation och avinstallation av ett plugin. Om du inte har en licensnyckel uppmanas du att spara på webbplatsen Konfiguration innan du kan installera chefen. Om du inte har använt pluginhanteraren tidigare kommer listan från början att vara tom, i det här exemplet har jag redan installerat en mängd olika plugins. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Fastighetsförvaltare');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Fastighetsförvaltare läggs till på ett av två sätt. Antingen skapar de fastigheter själva (kan inaktiveras i platskonfiguration) eller så kan webbplatsadministratören tilldela en befintlig chef till vissa fastigheter. Chefer kan bara komma åt egenskaper som de har skapat eller har tilldelats. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Åtkomstkontroll');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Du kan använda funktionen åtkomstkontroll för att inaktivera menyalternativ, göra dem bara synliga för vissa klasser av användare eller till och med att försvinna helt. Om menyraden inte har några menyalternativ att visa då kommer att försvinna helt, så om du inte vill att webbplatsbesökare ska se några alternativ kan du bara ställa in att alla alternativ ska vara synliga för till exempel inloggade användare. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Egenskaper och rumstyper');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'I den här videon ser du två viktiga koncept. Det första är skapandet av fastighetstyper och tillhörande rumstyper. Du kommer också att se en registrerad användare som ännu inte är chef skapa sin egen egendom och bli en chef (men kan bara konfigurera den egendom de har skapat). Egendom och rumstyper är länkade, när du har skapat en egenskapstyp måste du lägga till en rumstyp annars ser fastighetsförvaltare röda felmeddelanden när du försöker konfigurera sina egenskaper. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Ladda upp kartmarkörer');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Du använder Media Center för att ladda upp kartmarkörer. <a href="https://mapicons.mapsmarker.com/" target="_blank"> En stor källa till markörer hittar du här. << /a> Proceduren för överföring av fastighetsfunktioner, rumsfunktioner, rumstyper och andra är densamma. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Egenskapsfunktioner');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'I den här videon visar vi hur du skapar fastighetsfunktioner och laddar upp bilder för dem.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Kortkoder är en exceptionellt kraftfull funktion i Jomres. Principen är densamma för både Joomla och Wordpress. I den här videon visar vi var du ska se kortkoderna (listan ändras beroende på vilka plugins som är installerad) och hur du använder dem. Du kan använda koder i artiklar eller moduler. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Log files');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Den här videon visar hur du visar loggfiler. Omfattande loggning sker när systemet körs. I produktionsläge (Site Config> Debugging) genereras mindre loggar så om du testar en ny funktion då du bör ställa in din webbplats till utveckling. Om du vill lägga till din egen loggning i dina Jomres-skript, ta en titt på <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> vår manuella sida om hur man gör. </a> Här kommer vi att kasta ett falskt fel och sedan se loggfilen. Eftersom webbplatsen är inställd på utveckling där är mycket information, normalt skulle du bara se ett meddelande som säger att det var ett fel och det har rapporterats. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Translating labels and other strings');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Det finns ett antal sätt att översätta språksträngar i Jomres, du kan redigera språkfiler men de kan skrivas över när du uppgraderar. Istället rekommenderar vi att du använder de inbyggda översättningsverktygen som är unika för våra programvara. Om strängen är något som har angetts i ett formulär, till exempel namnet på en rumstyp, kan du använda etikettredigeringssidan. Om strängen är från språkfilen kan du använda verktyget för redigering av språkfiler. Använd bara webbläsarens sökverktyg för att hitta strängen du vill ändra och klicka sedan på länken för att ändra den. Dessa ändringar sparas i databasen och är därför uppdateringssäkra. Du kan ha olika etiketter för olika egenskapstyper, så att du kan ändra ny egenskap till ny campingplats, till exempel genom att ändra rullgardinsmenyn Språkkontext högst upp på sidan innan du ändrar etiketten. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Lägga till egenskaper');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> I detta skede har Jomres installerats i CMS och det har lagts till i frontend -menyn (eller i Wordpress har du skapat en sida och lagt till den grundläggande Jomres -kortkoden till den). </ p>
<p> Här ser du hur en registrerad användare som ännu inte är fastighetsansvarig i Jomres kan skapa en ny egendom, konfigurera några grundläggande inställningar och publicera den. </p>
<p> I slutet kommer du att se att chefen automatiskt har ställts in som fastighetsförvaltare, men de kan bara konfigurera sina egna egenskaper. </p>
<p> Även om gränssnittet i Wordpress ser annorlunda ut är processen exakt densamma för Joomla eller Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Egenskapskategorier');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Egenskapskategorier är en enkel funktion som gör att fastighetsförvaltare kan tilldela sina fastigheter till en viss kategori. Webbplatsadministratörer kan skapa kortkoder som listar alla fastigheter i en kategori, som visas i den här videon.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Webbplatsadministratörs visningsegenskaper');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Du hanterar inte fastigheter härifrån, du kan bara hantera fastigheter från frontend, men i den här listan kan du se egenskaper som väntar på godkännande (om funktionen är aktiverad) och alla som är ofullständig (t.ex. behöver fortfarande ladda upp bilder, ange priser etc.). Klicka på egendomsnamnet för att gå till instrumentpanelen för den egendomen. Du kan sedan använda guidesektionerna högst upp på sidan för att se stegen som du måste ta för att slutföra och publicera en egendom. </p> ');


