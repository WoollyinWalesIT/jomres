<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Vanliga frågor');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Hur skapar jag en egendom?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Klicka på Egenskaper> Ny egendom för att lägga till en ny egendom.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Hur kan jag se hur min egendom ser ut för gästerna?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Klicka på Egenskaper> Förhandsgranska för att se hur din egendom ser ut för gäster.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Hur lägger jag till rum?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Hur du lägger till rum beror på ditt tariffredigeringsläge. I läget Normal tarifferedigering behöver du inte lägga till rum, eftersom de läggs till automatiskt när du konfigurerar dina priser. Om du använder priser Micromanage eller Advanced tariffredigeringsläge, sedan i Inställningar> Rum kan du lägga till, redigera och ta bort rum. Du kommer också att kunna skapa rumsfunktioner och tilldela dessa funktioner till dessa rum. Dessutom kan du ladda upp bilder för individuella rum med hjälp av Media Center. När du skapar rum bör du försöka se till att de speglar dina verkliga rum i din egendom eftersom det kommer att göra dem enklare att hantera. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Hur ställer jag in rumspriser?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Detta beror på ditt tarifferedigeringsläge. Om du använder redigeringsläget Normal tariff (Egenskapsinställning> Tariffredigeringslägen) kan du konfigurera antalet rum du har, priset, antalet personer som varje rum kan ta emot och det totala antalet personer du vill ha i varje bokning. Med det här läget kan du ställa in rumspriser för de kommande tio åren. <br/> Om du använder avgiftsredigeringslägena Avancerat eller Micromanage är du kan fastställa rumspriser för varje dag i kommande år. Du kan också ha flera avgifter för samma rumstyp, till exempel kan du ha en avgift för Bed & Breakfast och en annan för säng-, frukost- och kvällsmåltid. Om du inte har ett specifikt behov , vi rekommenderar att du använder Micromanage hela tiden, Advanced kommer att fungera på samma sätt men du måste vara försiktig så att dina olika tariffers start- och slutdatum är på varandra följande. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Hur skapar jag valfria tillbehör?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extra kan läggas till i bokningar och konfigureras i Inställningar> Extra. Dessa kan antingen vara valfria eller\" tvingade \", med andra ord kan gästen inte avmarkera dem i bokningen. Du kan erbjuda olika metoder av avgifter för valfria tillägg, och om de visas på din egendomsinformation -sida eller inte. Eftersom tillägg endast kan visas om en bokning är inom vissa datum (till exempel för säsongsbetonade frukter), bör du se till att du har ställt in giltiga från och till datum. När du har skapat valfria tillägg kan du ladda upp bilder för dem via Media Manager. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Hur kan jag ta emot betalningar online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "För att ta betalningar online måste du ha ett konto hos en online betalningsleverantör, kallad en gateway. För att se de tillgängliga gatewayerna, gå till egenskapskonfiguration> fliken Gateways. Klicka på en gateways namn för att tas till dess konfigurationssida. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Kan jag ge rabatter?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Rabatter kan ges, det finns ett antal olika sätt att göra detta. Om du gör en bokning på uppdrag av en kund kan du ange dina egna insättnings- och bokningssummor i bokningsformuläret , genom att använda fälten Override Accommodation Total och Override Deposit (gäster kan inte använda den här funktionen). Ett annat sätt att ge en gäst rabatt är att skapa rabattkuponger, som kan konfigureras så att de bara kan användas mellan vissa datum (Giltigt från/till) eller tillämpas endast när bokningen ligger mellan vissa datum (bokningen gäller från/till). Denna rabattkupong kan bara tilldelas en gäst, eller om du vill kan du skriva ut kupongerna. Utskriften innehåller en QR -kod som gäster kan skanna in i sina telefoner som tar dem till ditt bokningsformulär med rabattkoden gäller redan. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bokningar');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'När jag klickar på Ny bokning tas jag till kontaktformuläret, varför?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Innan du kan göra bokningar online måste du först konfigurera vissa priser (tariffer) för varje rumstyp du har i din verkliga fastighet. När du har skapat några tariffer kan du ta bokningar . ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Vad är Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Svarta bokningar är bokningar som har skapats för att ta bort ett eller flera rum. De är inte associerade med några gäster och är användbara, till exempel om ett rum behöver renoveras.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Bilder');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Hur laddar jag upp bilder?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "För att ladda upp bilder måste du besöka sidan Inställningar> Media Center. På den här sidan ser du flera rutor. Överst kan du se några anteckningar och under dem ser du en rullgardinsmeny. Med den här rullgardinsmenyn kan du välja vilken resurs du laddar upp bilder för. <br/> Till höger finns en kolumn med Lägg till bilder, Rensa lista och Ladda upp alla. Klicka på Lägg till bilder och välj några bilder från skrivbordet eller mobilenheten. När du har gjort det, kolumnen ändras till en lista med miniatyrbilder. Härifrån kan du ladda upp en eller flera bilder för dina resurser. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Vad är huvudbilden?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Huvudbilden är den som visas i sökresultaten och i din fastighetsrubrik (området högst upp på sidorna som visar något om din egendom). Du bör välja en bild som visar din egendom i bästa möjliga ljus. För att ladda upp en huvudbild, se till att egenskapens huvudbild är markerad i rullgardinsmenyn högst upp till vänster och ladda sedan upp en eller flera bilder. Om du laddar upp mer än en bild kommer alla bilder att användas i sökningen resultatsidan visas som ett litet bildspel. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Vad är ikoner för rumsfunktioner?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Rumsfunktioner kan skapas av användare av Micromanage eller Advanced tariffredigeringslägen. Dessa kan länkas till ett eller flera rum och visas i bokningsformuläret. När du har skapat en rumsfunktion kan du ladda upp en bild för den funktionen genom att först välja rumsfunktionsikoner i rullgardinsmenyn i Media Center och sedan välja rumsfunktionens namn från rullgardinsmenyn som visas nedan. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Hur laddar jag upp rumsbilder?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Rum kan skapas av användare av Micromanage eller Advanced tariffredigeringslägen. När ett eller flera rum har skapats kan du ladda upp flera bilder för varje rum via Media Center (välj rumets namn/nummer efter välja rumsbilder i rullgardinsmenyn). Dessa bilder kan ses i ett bildspel genom att titta på förhandsgranskningssidan och välja fliken Våra rum och klicka sedan på länken Tillgänglighet. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Hur laddar jag upp bildspel?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Bildspel visas på sidan Egenskapsinformation (förhandsvisning), bredvid knappen Boka nu.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Hur laddar jag upp extrabilder?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "I likhet med rum och rumsfunktioner måste du skapa en extra först. När det är klart kan du välja Extra i den nedre listrutan. När du har gjort det måste du välja namnet på Extra från rullgardinsmenyn nedan. När namnet är valt kan du ladda upp en eller flera bilder för det Extra. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Något gästrelaterat');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Hur gör jag blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Hur sparar jag beskrivningar på flera språk?');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Om du vill spara beskrivningar på flera språk besöker du först sidan Inställningar> Fastighetsinformation. Spara beskrivningen för din egendom där. Ändra sedan språket som du tittar på webbplatsen på. Gå nu till Inställningar Fastighetsinformation sidan igen och spara informationen igen. Så om webbplatsen kan visa både engelska och spanska (eller andra) språk, väljer du engelska, anger beskrivningen på engelska och klickar på Spara. Därefter ändrar du ditt nuvarande språk språk till spanska, spara sedan den nya spanska beskrivningen. Detta fungerar för alla inmatningar på den sidan. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Kan jag ändra andra egenskaper på den här webbplatsen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nej, det kan du inte. Du kan bara administrera fastigheter som du har skapat eller tilldelats som fastighetsförvaltare.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Kan jag ändra andra egenskaper på den här webbplatsen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ja det kan du, du är en Super Property Manager och kan ändra alla egenskaper som visas på sidan Listegenskaper.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Vad är gästtyper/Hur ändrar jag per person och natt?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "I fliken Inställningar> Fastighetskonfiguration> Tariffer och valutor kan du bestämma om du vill debitera per person och natt. Om du debiterar per person och natt måste du skapa en eller flera gästtyper. Du kan skapa en enkel gästtyp, där du bara ger dem en beskrivning (t.ex. Personer), eller så kan du skapa flera olika gästtyper, till exempel \"Vuxna\" och \"Barn under 10\". För barnen, om du vill erbjuda en rabatt på 50% så ställer du in \"Är procent\" till Ja, och variansvärdet till 50. Rum har baspriser, med den här inställningen kan du justera priset på rummet baserat på gästtyp. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Vad är rumsfunktioner?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Rumsfunktioner är saker som får rummet att sticka ut. Det kan vara något enkelt som te- och kaffefaciliteter, eller så kan de verkligen få rummet att stiga över de andra, som\" Utsikt över bay \". När du har skapat en rumsfunktion kan du ladda upp bilder för den funktionen i Media Center. Dessa rumsfunktioner kan ses på rumstillgänglighetssidan och om du har konfigurerat din egendom för att visa liststilen Classic Rooms (där gästerna kan välja exakt vilket rum de vill boka) sedan kan de använda rumsfunktionerna för att filtrera ooms som visas i bokningsformuläret. ");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Betalningar');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Du kan inte se betalningsporten efter att du gjort en bokning.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Om du är inloggad som fastighetsförvaltare ser du inte betalningsporten, eftersom du inte betalar själv. Bara användare som inte är ansvariga ser gatewayen när de gör bokningar.");
