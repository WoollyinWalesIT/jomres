<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Video-tutorials');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Configuratiescherm');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Deze tutorial laat zien hoe je het Property Management controlepaneel gebruikt.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Tijdlijn');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Hoe de tijdlijnkalender te gebruiken. In deze video maken we een nieuwe gast aan door hun gegevens in de pop-up in te voeren, bestaande gasten kunnen opnieuw worden gebruikt door hun naam te selecteren in de vervolgkeuzelijst in de pop-up.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Lijsteigenschappen');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Hoe de Lijsteigenschappen-pagina te gebruiken om extra informatie te bekijken, kolommen te wijzigen en naar specifieke eigenschappen te zoeken.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Bewerk uw eigendomsgegevens');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Uw eigendomsdetails bewerken, inclusief slepen op de kaart om uw locatie in te stellen.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Wijzig tariefbewerkingsmodus');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Uw tariefbewerkingsmodus bepaalt de methode die u kunt gebruiken om prijzen voor uw eigendom in te stellen. U doet dit via de Property Configuration-pagina.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normale tariefbewerkingsmodus voor hotels, pensions, B&B\'s');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normale tariefbewerkingsmodus is een eenvoudige tariefbewerkingsfunctie waarmee u het aantal kamers in een accommodatie, de prijs van de kamer, het aantal gasten dat elke kamer kan ontvangen en het maximale aantal gasten kunt selecteren in een feest. Bij bewaring zijn deze prijzen dan geldig voor de volgende 10 jaar.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normale tariefbewerking voor villa\'s en appartementen');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normale tariefbewerkingsmodus is een eenvoudige tariefbewerkingsfunctie waarmee u het subtype van het onroerend goed, de prijs van het onroerend goed per nacht en het maximale aantal gasten in een feest kunt selecteren. Indien opgeslagen, zijn deze prijzen dan geldig voor de volgende 10 jaar.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariefbewerkingsmodus (aanbevolen)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Tariefbewerkingsmodus Micromanage stelt u in staat om zowel de prijs als het minimum aantal dagen dat een verblijf geldig kan zijn, te configureren voor elke dag van het jaar. Het is een krachtig hulpmiddel dat u volledige controle geeft in dit voorbeeld laten we u zien hoe u meerdere prijssets voor hetzelfde kamertype kunt maken, verschillende prijzen kunt instellen voor verschillende periodes en verschillende prijzen voor specifieke dagen van de week binnen een periode. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Microbeheer tariefbewerkingsmodus voor villa\'s/appartementen (aanbevolen)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Tariefbewerkingsmodus Micromanage stelt u in staat om zowel de prijs als het minimum aantal dagen dat een verblijf geldig kan zijn, te configureren voor elke dag van het jaar. Het is een krachtige tool die u volledige controle geeft overprijzen. In dit voorbeeld laten we u zien hoe u meerdere prijssets kunt maken. We zullen verschillende prijzen instellen voor verschillende periodes en verschillende prijzen voor specifieke dagen van de week binnen een periode. Zodra dat is gebeurd, zullen we meerdere tarieven voor dezelfde eigendom, maar met verschillende gastnummers waardoor we de prijzen voor elk scenario nauwkeurig kunnen controleren.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Verschillende tarieven voor verschillende gastnummers');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Je kunt meerdere tarieven maken voor hetzelfde kamertype, dus als je verschillende prijzen wilt voor verschillende aantallen gasten, dan kan dat.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per persoon per nacht - Gasttypes');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Om per persoon per nacht in rekening te brengen, moet u gasttypes maken. Verschillende gasttypes kunnen verschillen van de basisprijs van een kamer, dus kinderen van verschillende leeftijden kunnen verschillende kortingen krijgen op basis van hun leeftijd. hoef je niet per persoon per nacht in rekening te brengen voor het gebruik van Guest Types, je kunt ze ook gebruiken als je een vast tarief rekent maar toch het aantal gasten wilt vastleggen, of omdat je het aantal gasten in een boeking wilt beperken.' );

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Mediacentrum - Uploaden van afbeeldingen');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Alle afbeeldingen worden geüpload via het mediacentrum. In deze video uploaden we de afbeelding van het hoofdgebouw, enkele afbeeldingen in diavoorstellingen, een kleine selectie afbeeldingen die op de pagina met zoekresultaten moeten worden weergegeven en afbeeldingen voor een van de kamers.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Mediacentrum - Uploaden van afbeeldingen');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Alle afbeeldingen worden geüpload via het mediacentrum. In deze video uploaden we de afbeelding van het hoofdgebouw, een kleine selectie afbeeldingen die op de pagina met zoekresultaten moeten worden weergegeven, en enkele afbeeldingen in een diavoorstelling.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Beheerderspaneel');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Dit is uw standaard bestemmingspagina in het beheerdersgedeelte. U kunt een samenvatting zien van verschillende sitestatistieken en zien welke eigenschappen in het systeem aanwezig zijn, welke compleet zijn en welke zijn voltooid en wachten op beoordeling voor goedkeuring Als een woning eenmaal is goedgekeurd, kan deze worden gepubliceerd door de vastgoedbeheerder.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Pluginbeheer, installatie en gebruik');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Deze video laat zien hoe u de Plugin Manager gebruikt, inclusief de installatie van de plug-inmanager en vervolgens de installatie en verwijdering van een plug-in. Als u geen licentiesleutel hebt, wordt u gevraagd om op te slaan op de site Configuratie voordat u de manager kunt installeren Als u de plug-inmanager nog niet eerder hebt gebruikt, is deze lijst in eerste instantie leeg, in dit voorbeeld heb ik al verschillende plug-ins geïnstalleerd.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Vastgoedbeheerders');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Eigenschapbeheerders kunnen op twee manieren worden toegevoegd. Ofwel ze maken zelf eigenschappen aan (kan worden uitgeschakeld in Siteconfiguratie) of de sitebeheerder kan een bestaande beheerder toewijzen aan bepaalde eigenschappen. Managers hebben alleen toegang tot eigenschappen die ze hebben aangemaakt, of zijn toegewezen aan.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Toegangscontrole');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'U kunt de functie Toegangscontrole gebruiken om menu-opties uit te schakelen, ze alleen zichtbaar te maken voor bepaalde klassen gebruikers, of ze zelfs helemaal te laten verdwijnen. Als de menubalk geen menu-opties heeft om weer te geven, zal volledig verdwijnen, dus als u niet wilt dat sitebezoekers opties zien, kunt u bijvoorbeeld alle opties zo instellen dat ze zichtbaar zijn voor ingelogde gebruikers.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Eigendom en kamertypes');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'In deze video ziet u twee belangrijke concepten. De eerste is het maken van woningtypes en bijbehorende kamertypes. U ziet ook een geregistreerde gebruiker die nog geen beheerder is, maakt zijn eigen woning aan en wordt een beheerder (maar kan alleen de woning configureren die ze hebben gemaakt.) Woning- en kamertypes zijn gekoppeld, zodra u een woningtype hebt gemaakt, moet u een kamertype toevoegen, anders krijgen vastgoedbeheerders rode foutmeldingen wanneer ze proberen hun eigendommen te configureren. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Kaartmarkeringen uploaden');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'U gebruikt het Media Center om kaartmarkeringen te uploaden. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Een geweldige bron van markeringen vindt u hier.< /a> De procedure voor het uploaden van eigendomskenmerken, kamerkenmerken, kamertypes en andere is hetzelfde.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Eigenschapskenmerken');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'In deze video laten we u zien hoe u eigenschappen van onroerend goed kunt maken en afbeeldingen kunt uploaden.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes zijn een uitzonderlijk krachtige functie van Jomres. Het principe is hetzelfde voor zowel Joomla als Wordpress. In deze video laten we u zien waar u de korte codes kunt bekijken (deze lijst zal veranderen afhankelijk van welke plug-ins zijn geïnstalleerd) en hoe ze te gebruiken. U kunt de codes gebruiken in artikelen of modules.');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Logbestanden');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Deze video laat zien hoe u logbestanden kunt bekijken. Uitgebreide logboekregistratie vindt plaats wanneer het systeem wordt uitgevoerd. In de productiemodus (Site Config > Debugging) worden minder logs gegenereerd, dus als u een nieuwe functie test, u moet uw site op Ontwikkeling zetten. Als u uw eigen logboekregistratie aan uw Jomres-scripts wilt toevoegen, kijk dan op <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">onze handleiding pagina over hoe dit te doen.</a> Hier zullen we een valse foutmelding geven, en dan het logbestand bekijken. Omdat de site daar is ingesteld op Ontwikkeling is veel informatie, normaal gesproken ziet u alleen een bericht dat er een fout is opgetreden en dat deze is gemeld.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Labels en andere strings vertalen');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Er zijn een aantal manieren om taalreeksen in Jomres te vertalen. U kunt taalbestanden bewerken, maar ze kunnen worden overschreven wanneer u een upgrade uitvoert. In plaats daarvan raden we u aan de ingebouwde vertaalhulpmiddelen te gebruiken die uniek zijn voor onze software.Als de tekenreeks iets is dat in een formulier is ingevoerd, zoals de naam van een kamertype, kunt u de pagina Label bewerken gebruiken.Als de tekenreeks uit het taalbestand komt, kunt u de tool voor het bewerken van taalbestanden gebruiken. Gebruik de zoekfunctie van de browser om de tekenreeks te vinden die u wilt wijzigen en klik vervolgens op de link om deze te wijzigen. Deze wijzigingen worden opgeslagen in de database en zijn daarom veilig voor updates. U kunt verschillende labels hebben voor verschillende eigenschapstypen, zodat u verander Nieuwe Accommodatie in Nieuwe Camping, bijvoorbeeld door de Taal Context dropdown boven aan de pagina te wijzigen voordat u het label wijzigt.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Eigenschappen toevoegen');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>In dit stadium is Jomres geïnstalleerd in het CMS en is het toegevoegd aan het frontend-menu (of in Wordpress heeft u een pagina gemaakt en de basis Jomres-shortcode eraan toegevoegd).</ p>
<p>Hier ziet u hoe een geregistreerde gebruiker die nog geen property manager in Jomres is, een nieuwe property kan maken, enkele basisinstellingen kan configureren en deze kan publiceren.</p>
<p>Aan het einde zult u zien dat de beheerder automatisch is ingesteld als vastgoedbeheerder, maar ze kunnen alleen hun eigen eigendommen configureren.</p>
<p>Hoewel de interface in Wordpress er anders uitziet, is het proces precies hetzelfde voor Joomla of Wordpress.</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Eigendomscategorieën');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Eigendomcategorieën is een eenvoudige functie waarmee vastgoedbeheerders hun eigendommen aan een bepaalde categorie kunnen toewijzen. Sitebeheerders kunnen shortcodes maken die alle eigendommen in een categorie weergeven, zoals in deze video wordt getoond.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Sitebeheerder weergave-eigenschappen');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Van hieruit beheert u geen eigenschappen, u kunt alleen eigenschappen beheren vanaf de frontend, maar in deze lijst kunt u eigenschappen zien die wachten op goedkeuring (als de functie is ingeschakeld) en alle eigenschappen die dat wel zijn onvolledig (bijv. moet nog afbeeldingen uploaden, prijzen instellen, enz.) Klik op de naam van het onroerend goed om naar het dashboard voor dat onroerend goed te gaan. U kunt dan de gidssecties bovenaan de pagina gebruiken om de stappen te zien die die u moet nemen om een ​​eigenschap in te vullen en te publiceren.</p> ');


