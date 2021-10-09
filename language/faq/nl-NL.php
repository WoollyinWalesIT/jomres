<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Eigenschappen');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Hoe maak ik een eigenschap aan?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Klik op Eigenschappen > Nieuwe eigenschap om een ​​nieuwe eigenschap toe te voegen.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Hoe kan ik zien hoe mijn accommodatie eruitziet voor gasten?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Klik op Eigenschappen > Voorbeeld om te zien hoe uw accommodatie eruitziet voor gasten.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Hoe voeg ik kamers toe?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Hoe u kamers toevoegt, hangt af van uw tariefbewerkingsmodus. In de normale tariefbewerkingsmodus hoeft u geen kamers toe te voegen, aangezien deze automatisch worden toegevoegd wanneer u uw prijzen configureert. Als u gebruikmaakt van Micromanage of Geavanceerde tariefbewerkingsmodus, dan kunt u in Instellingen > Kamers kamers toevoegen, bewerken en verwijderen. U kunt ook kamerfuncties maken en deze functies aan die kamers toewijzen. Bovendien kunt u afbeeldingen uploaden voor individuele kamers die gebruikmaken van het Mediacentrum. Wanneer u kamers maakt, moet u ervoor zorgen dat ze overeenkomen met uw echte kamers in uw eigendom, omdat ze dan gemakkelijker te beheren zijn.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Hoe stel ik kamerprijzen in?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Dit hangt af van uw tariefbewerkingsmodus. Als u de normale tariefbewerkingsmodus gebruikt ( Eigenschapsconfiguratie > tabblad Tariefbewerkingsmodi), kunt u het aantal kamers dat u heeft, de prijs, het aantal personen die elke kamer kan accommoderen en het totale aantal personen dat u in elke boeking wilt. Met deze modus kunt u kamerprijzen instellen voor de komende 10 jaar. <br/>Als u de geavanceerde of Micromanage-tariefbewerkingsmodi gebruikt, bent u in staat om de komende jaren voor elke dag kamerprijzen vast te stellen. U kunt ook meerdere tarieven hebben voor hetzelfde kamertype, u kunt bijvoorbeeld één tarief hebben voor Bed&Breakfast en een ander voor Bed, Breakfast & Avondmaaltijd. Tenzij u een specifieke behoefte heeft , we raden u aan om altijd Micromanage te gebruiken, Advanced zal op dezelfde manier werken, maar u moet ervoor zorgen dat de begin- en einddatums van uw verschillende tarieven opeenvolgend zijn.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Hoe maak ik optionele extra\'s?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extra's kunnen aan boekingen worden toegevoegd en worden geconfigureerd in Instellingen > Extra's. Deze kunnen optioneel of 'geforceerd' zijn, met andere woorden, de gast kan ze niet de-selecteren in de boeking. U kunt verschillende methoden aanbieden van het in rekening brengen van optionele extra's en of deze al dan niet worden weergegeven op uw pagina Accommodatiedetails. Omdat extra's kunnen worden gemaakt om alleen te laten zien als een boeking binnen bepaalde datums valt (bijvoorbeeld voor seizoensfruit), moet u ervoor zorgen dat u hebben de datums Geldig van en Tot ingesteld. Zodra u optionele extra's hebt gemaakt, kunt u afbeeldingen voor hen uploaden via de Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Hoe kan ik online betalingen aannemen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Om online betalingen te accepteren, moet u een account hebben bij een online betalingsprovider, een gateway genaamd. Om de beschikbare gateways te zien, gaat u naar Property Configuration > Gateways tab. Klik op de naam van een gateway die u wilt aannemen naar zijn configuratiepagina.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Kan ik kortingen geven?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Kortingen kunnen worden gegeven, er zijn een aantal verschillende manieren waarop dit kan worden gedaan. Als u een boeking maakt namens een klant, dan kunt u uw eigen aanbetalings- en boekingstotalen instellen in het boekingsformulier , met behulp van de velden Totaal accommodatie overschrijven en Aanbetaling negeren ( gasten kunnen deze functie niet gebruiken ). van/tot ) of alleen toegepast wanneer de boeking tussen bepaalde data valt ( Boeking geldig van/tot ). Deze kortingsbonnen kunnen worden toegewezen aan slechts één gast, of als u wilt kunt u de kortingsbonnen afdrukken. De afdruk bevat een QR-code welke gasten kunnen scannen in hun telefoon die hen naar uw boekingsformulier brengt met de kortingscode al van toepassing. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Boekingen');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Als ik op Nieuwe boeking klik, ga ik naar het contactformulier, waarom?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Voordat u online boekingen kunt maken, moet u eerst enkele prijzen (tarieven) configureren voor elk kamertype dat u in uw echte woning heeft. Nadat u enkele tarieven heeft gemaakt, kunt u boekingen aannemen .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Wat zijn Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Zwarte boekingen zijn boekingen die zijn gemaakt om een ​​kamer of kamers buiten gebruik te stellen. Ze zijn niet gekoppeld aan gasten en zijn bijvoorbeeld handig als een kamer moet worden opgeknapt.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Afbeeldingen');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Hoe upload ik afbeeldingen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Als u afbeeldingen wilt uploaden, moet u naar de pagina Instellingen > Media Center gaan. Op deze pagina ziet u verschillende vensters. Bovenaan ziet u mogelijk enkele opmerkingen en daaronder ziet u een vervolgkeuzelijst. Met deze vervolgkeuzelijst kunt u selecteren voor welke bron u afbeeldingen uploadt. <br/> Aan de rechterkant is een kolom met Afbeeldingen toevoegen, Lijst wissen en Alles uploaden. Klik op Afbeeldingen toevoegen en selecteer enkele afbeeldingen vanaf uw desktop of mobiele apparaat. Wanneer als je dat hebt gedaan, verandert de kolom in een lijst met miniaturen. Van hieruit kun je een of meer afbeeldingen uploaden voor je bronnen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Wat is de 'Hoofd'-afbeelding?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'De hoofdafbeelding is de afbeelding die wordt weergegeven in de zoekresultaten en in de koptekst van uw eigendom (het gebied bovenaan de pagina\'s die iets over uw eigendom laten zien). U moet een afbeelding kiezen die uw eigendom in de best mogelijke licht. Om een ​​hoofdafbeelding te uploaden, moet u ervoor zorgen dat Hoofdafbeelding Eigendom is geselecteerd in de vervolgkeuzelijst linksboven en vervolgens een of meer afbeeldingen uploaden. Als u meer dan één afbeelding uploadt, worden alle afbeeldingen gebruikt in de zoekopdracht resultatenpagina die wordt weergegeven als een kleine diavoorstelling.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Wat zijn pictogrammen voor kamerfuncties?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Kamerfuncties kunnen worden gemaakt door gebruikers van de Micromanage- of Advanced-tariefbewerkingsmodi. Deze kunnen worden gekoppeld aan een of meer kamers en worden weergegeven in het boekingsformulier. Nadat u een kamerfunctie hebt gemaakt, kunt u upload een afbeelding voor die functie door eerst Pictogrammen voor kamerfuncties te selecteren in de vervolgkeuzelijst in het Media Center en vervolgens de naam van de kamerfunctie te selecteren in de vervolgkeuzelijst die eronder verschijnt.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Hoe upload ik kamerafbeeldingen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Kamers kunnen worden gemaakt door gebruikers van de Micromanage- of Advanced-tariefbewerkingsmodi. Zodra een of meer kamers zijn gemaakt, kunt u meerdere afbeeldingen voor elke kamer uploaden via het Media Center (selecteer de kamernaam/-nummer na door Kamerafbeeldingen te selecteren in de vervolgkeuzelijst) Deze afbeeldingen kunnen worden bekeken in een diavoorstelling door de Preview-pagina te bekijken en het tabblad Onze kamers te selecteren en vervolgens op de link Beschikbaarheid te klikken.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Hoe upload ik afbeeldingen van diavoorstellingen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Diavoorstellingafbeeldingen worden weergegeven op de pagina Property Details ( Preview ), naast de knop Nu boeken.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Hoe upload ik extra afbeeldingen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Net als bij de kamers en kamerfuncties, moet je eerst een Extra maken. Als dat is gebeurd, kun je Extra's selecteren in de bovenste vervolgkeuzelijst. Als je dat hebt gedaan, moet je de naam van de Extra uit de vervolgkeuzelijst hieronder. Als de naam is geselecteerd, kunt u een of meer afbeeldingen voor die Extra uploaden.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Iets gastgerelateerd');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Hoe blablabla?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Jij blablabla');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Hoe bewaar ik beschrijvingen in meerdere talen?');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Om beschrijvingen in meerdere talen op te slaan, gaat u eerst naar de pagina Instellingen > Woningdetails. Sla de beschrijving voor uw woning daar op. Wijzig vervolgens de taal waarin u de site bekijkt. Ga nu naar de Instellingen Property Details-pagina opnieuw en sla de details opnieuw op. Dus als de site zowel Engels als Spaans (of een andere) talen kan weergeven, selecteert u Engels, voert u de beschrijving in het Engels in en klikt u op Opslaan. Wijzig vervolgens uw huidige taal naar Spaans en sla vervolgens de nieuwe Spaanse beschrijving op. Dit werkt voor alle invoer op die pagina.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Kan ik andere eigenschappen op deze site wijzigen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nee, dat kan niet. U kunt alleen panden beheren die u hebt gemaakt of waaraan u bent toegewezen als vastgoedbeheerder.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Kan ik andere eigenschappen op deze site wijzigen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ja dat kan, je bent een Super Property Manager en kunt alle eigenschappen wijzigen die worden weergegeven op de pagina Lijsteigenschappen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Wat zijn gasttypes/Hoe verander ik per persoon per nacht?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Instellingen > Accommodatieconfiguratie > tabblad Tarieven en valuta's kunt u beslissen of u per persoon per nacht wilt rekenen. Als u per persoon per nacht rekent, moet u een of meer gasttypes aanmaken. Je kunt een eenvoudig gasttype aanmaken, waarbij je ze gewoon een omschrijving geeft (bijv. Personen), of je kunt verschillende gasttypes aanmaken, bijvoorbeeld 'Volwassenen' en 'Kinderen onder de 10'. Voor de kinderen, als je wilt bieden een korting van 50% dan stelt u 'Is percentage' in op Ja en de variantiewaarde op 50. Kamers hebben basistarieven, met deze instelling kunt u de prijs van de kamer aanpassen op basis van het gasttype.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Wat zijn kamerfuncties?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Kamerkenmerken zijn dingen die de kamer doen opvallen. Ze kunnen iets eenvoudigs zijn, zoals thee- en koffiefaciliteiten, of het kunnen dingen zijn die de kamer echt boven de andere doen uitstijgen, zoals 'Uitzicht over de bay'. Nadat u een kamerfunctie hebt gemaakt, kunt u afbeeldingen voor die functie uploaden in het Mediacentrum. Deze kamerfuncties kunnen worden bekeken op de pagina met kamerbeschikbaarheid en als u uw accommodatie hebt geconfigureerd om de lijststijl Klassieke kamers weer te geven (waar gasten precies kunnen selecteren welke kamer ze willen boeken) dan kunnen ze de kamerfuncties gebruiken om kamers te filteren die in het boekingsformulier worden getoond.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Betalingen');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Je kunt de betalingsgateway niet zien nadat je een boeking hebt gemaakt.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Als u bent ingelogd als Property Manager, ziet u de betalingsgateway niet, omdat u niet zelf betaalt. Alleen niet-manager gebruikers zien de gateway bij het maken van boekingen.");


