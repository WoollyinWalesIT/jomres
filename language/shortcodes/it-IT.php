<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Questa è la pagina principale del cpanel delle proprietà.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Questo è il nastro della struttura che fornisce una panoramica delle prenotazioni in tempo reale, disponibilità e occupazione a colpo d\'occhio.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Questo script permette all\'utente di confrontare diverse proprietà tra loro, fino ad un massimo di 3 proprietà.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Un elenco separato da virgole di proprietà uid, es. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Costruisce il form del proprietario del contatto. ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Passa l\'uid dell\'immobile da contattare. Passa 0 (zero) per contattare invece l\'amministratore del sito. ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Mostra la pagina Informazioni azienda estraendo i dettagli dal campo Dettagli azienda del gestore della struttura in Configurazione proprietà. I ​​dettagli in questa scheda vengono generalmente utilizzati per la corrispondenza, consentendo ai gestori di avere sia l\'indirizzo dell\'hotel/appartamento, sia un indirizzo separato per scopi commerciali.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Mostra il calendario della proprietà");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Passa l\'uid della proprietà da mostrare. ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Mesi da mostrare, il valore predefinito è 24 se non diversamente impostato. Non compatibile con la variabile Show Just Month.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Imposta questo su 1 se vuoi solo mostrare il mese corrente da solo. L'impostazione mesi_da_mostrare sarà ignorata se show_just_month è usato nello stesso shortcode, quindi non dovresti usare l\'uno o l\'altro allo stesso tempo.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Mostra solo il testo della descrizione della Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Mostra solo il testo della descrizione della Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Mostra solo le caratteristiche della Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Mostra solo il modello di intestazione Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Mostra solo i tipi di stanze della Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Mostra solo l\'immagine principale della Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Mostra solo la mappa delle Proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Mostra il testo Ulteriori informazioni sulla proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Codice QR che si collega a gmap. Questo può essere scansionato in un telefono utilizzando un\'app di lettura del codice QR che fornisce indicazioni stradali per la proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Mostra le recensioni di una struttura.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Mostra il riepilogo delle recensioni di una proprietà.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Mostra una singola stanza.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID della stanza.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Mostra le stanze di una proprietà.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Mostra le immagini delle stanze di una proprietà come una presentazione.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID della proprietà.');
    
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Mostra la presentazione della proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Mostra le tariffe della struttura.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Mostra l\'indirizzo commerciale del sito come inserito in Configurazione sito > Dettagli della tua azienda.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Mostra i termini e le condizioni della proprietà.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID della proprietà.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Mostra il calendario dell\'interfaccia utente della proprietà, che è un calendario diverso dal calendario grande principale ed è basato sulla funzionalità del calendario dell\'interfaccia utente di Jquery.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Passa l\'uid della proprietà da mostrare. ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Imposta a 1 per non mostrare la legenda.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Mostra i risultati della ricerca, che possono essere migliorati aggiungendo parametri di ricerca. Ti sconsigliamo di utilizzare tutti i parametri contemporaneamente, perché ti ritroverai con criteri di ricerca troppo limitati. Invece dovresti limitarti a uno o due parametri, ad es. ricerca per paese e numero di stelle.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Cerca per paese, usando il codice ISO Alpha-2, es. GB o DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Cerca per regione. Poiché le regioni vengono salvate nel database, è necessario utilizzare l\'ID regione. Visita Amministratore > Jomres > Struttura sito > Elenca regioni e passa con il mouse sul collegamento Modifica, lì vedrai il numero ID della regione .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Il nome completo della città che vuoi cercare.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Cerca proprietà con caratteristiche particolari. Gli ID delle caratteristiche possono essere trovati in Amministratore > Jomres > Struttura del sito > Caratteristiche proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Cerca proprietà con determinati tipi di camera. Gli ID del tipo di camera possono essere trovati in Amministratore > Jomres > Struttura del sito > Tipi di camere.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Cerca proprietà di un tipo di proprietà specifico. Gli ID del tipo di proprietà possono essere trovati in Amministratore > Jomres > Struttura del sito > Tipi di proprietà.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Cerca immobili all\'interno di una specifica fascia di prezzo.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Cerca strutture le cui tariffe consentono numeri di ospiti di determinati valori, ad esempio gruppi di 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Cerca proprietà di N stelle.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Cerca per data di arrivo. Da abbinare al parametro data di partenza');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Cerca per data di partenza. Da abbinare al parametro ArrivalDate');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Cerca per categoria di proprietà.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Visualizza la pagina di un agente. Puoi passare SIA un uid di proprietà, sia l\'id stesso dell\'agente, se lo conosci.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un uid di proprietà, questo mostrerà l\'agente della proprietà.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID database del gestore, se noto.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Mostra le proprietà popolari, tipicamente usate nelle posizioni dei moduli o dei widget.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Il numero massimo di proprietà che possono essere mostrate.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Mostra solo le proprietà di questo specifico tipo di proprietà.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Imposta a 1 per mostrare i moduli ottimizzati per una posizione verticale di widget/moduli.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Mostra una selezione casuale di proprietà, tipicamente usata nelle posizioni di moduli o widget.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Il numero massimo di proprietà che possono essere mostrate.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Mostra solo le proprietà di questo specifico tipo di proprietà.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Imposta a 1 per mostrare i moduli ottimizzati per una posizione verticale di widget/moduli.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Mostra le proprietà visualizzate più di recente dell\'ospite, tipicamente usate nelle posizioni dei moduli o dei widget.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Il numero massimo di proprietà che possono essere mostrate.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Imposta a 1 per mostrare i moduli ottimizzati per una posizione verticale di widget/moduli.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Mostra un numero di proprietà, tipicamente usate nelle posizioni di moduli o widget.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Gli ID delle proprietà che vuoi mostrare.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Imposta a 1 per mostrare i moduli ottimizzati per una posizione verticale di widget/moduli.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Mostra il menu a tendina per la selezione della valuta.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Abilita/disabilita l\'output del modello alternativo. Questo output è destinato all\'uso nelle barre degli strumenti Bootstrap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Visualizza la pagina del carrello.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Mostra il modulo/widget Carrello.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Mostra il menu principale. Nota, se stai eseguendo una versione personalizzata di mainmenu_wrapper_alternate.html ad esempio /templates/jr_leohtian/html/com_jomres allora potresti doverlo modificare per sostituire <i>alternate_jomresmenu /i> con MENU_LOCATION racchiuso tra parentesi graffe.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Questa pagina ti consente di caricare immagini per la tua proprietà e le cose che offri. Ha un pulsante principale e un secondo pulsante che ti consente di selezionare risorse specifiche per le quali caricare immagini. Quindi, la proprietà principale image e lo Slideshow mostrerà solo un pulsante ma se hai creato ad es. Extra opzionali o Stanze, vedrai un secondo pulsante dove puoi caricare immagini per quelle risorse specifiche.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Questa pagina ti consente di caricare immagini per la tua proprietà e le cose che offri. Ha un pulsante principale e un secondo pulsante che ti consente di selezionare risorse specifiche per le quali caricare immagini. Quindi, la proprietà principale image e la presentazione mostreranno solo un pulsante ma se hai creato degli extra opzionali vedrai un secondo pulsante dove puoi caricare immagini per quelle risorse specifiche.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Per prima cosa scegli l\'immagine o le immagini che desideri caricare facendo clic su Aggiungi immagine o utilizzando il trascinamento della selezione. Questi appariranno nella colonna a destra.</li>
  <li>Sopra quest'area, usa il pulsante \"Scegli la risorsa\" per scegliere per quale risorsa vuoi caricare le immagini. Ti potrebbe essere offerta la possibilità di scegliere una risorsa specifica sotto. </li>
  <li> Una volta scelta una risorsa, puoi fare clic sul pulsante Carica immagine sotto un\'immagine per associarla a quella risorsa. Una volta che un\'immagine è stata caricata, scomparirà dalla colonna sul sito di destra e apparirà a sinistra.</li>
  <li>Usa il pulsante Cestino accanto alle immagini esistenti per rimuovere le immagini che non vuoi più mostrare.</li>
  <li>Puoi modificare l\'ordine in cui i file vengono mostrati nella presentazione rinominandoli prima di caricarli, poiché vengono visualizzati nelle pagine in ordine alfabetico.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Accanto al pulsante Risorsa, potresti vedere un pulsante Anteprima. Se fai clic su di esso vedrai un popup che mostra come appariranno le immagini attualmente caricate in una pagina. Questo ti aiuta a darti un idea di come appariranno le immagini ai tuoi clienti.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Non c'è limite al numero di immagini che puoi caricare. Le immagini vengono ridimensionate automaticamente quando vengono caricate. Puoi caricare solo file JPG e PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealmente qualsiasi immagine che carichi dovrebbe essere almeno ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " larghi in pixel, altrimenti potrebbero apparire sfocati dopo essere stati caricati.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Le immagini che carichi non possono essere più di ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " nelle dimensioni.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Scegli la risorsa per la quale vuoi caricare le immagini");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Risorsa specifica");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Immagini già caricate per questa risorsa");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Formattazione del testo');
jr_define('_JOMRES_MARKDOWN_DESC', 'Puoi inserire il testo qui usando la semplice formattazione Markdown. Non hai bisogno di conoscere alcun HTML, usa semplicemente i pulsanti per dare l\'aspetto che desideri, o formatta il testo secondo questi esempi.' );
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Enfasi');
jr_define('_JOMRES_MARKDOWN_BOLD', 'grassetto');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'corsivo');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'barrato');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Intestazioni");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Intestazione grande');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Intestazione media");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Intestazione piccola');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Intestazione minuscola');
jr_define('_JOMRES_MARKDOWN_LISTS', "Liste");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Voce elenco generico');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Voce elenco numerato');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Collegamenti');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Testo da visualizzare');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citazioni');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Questa è una citazione.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Può occupare più righe!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Immagini');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabelle');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Colonna');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mostra immagini proprietà come presentazione nella lista proprietà?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Se impostato su yes, verrà visualizzata una presentazione delle immagini principali della proprietà. Se impostato su no, verrà visualizzata la prima immagine principale della proprietà.');

jr_define('EDIT_CMS_USER', 'Modifica utente CMS');

jr_define('BOOKING_MADE_BY', 'Prenotazione effettuata da');

jr_define('_JOMRES_ROUTER_FEATURES', 'Servizi');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Tipi di camera');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL modulo prenotazione esterno');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Qui puoi impostare un URL esterno se desideri utilizzare un sito Web di terze parti per effettuare prenotazioni. Tutti i pulsanti di prenotazione di Jomres punteranno a questo URL. Lascia vuoto questo campo se desideri utilizzare il modulo di prenotazione di Jomres .');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (breve descrizione/sottotitolo della stanza)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Descrizione stanza');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Ospite nella lista nera');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Se questo ospite è nella lista nera, non potrà più effettuare prenotazioni in questa proprietà.');
jr_define('_JOMRES_SESSION_HANDLER', 'Gestore di sessione');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Salva i file di sessione di jomres su disco o database. Consigliato: database');
jr_define('_JOMRES_MAP_HEIGHT',"Altezza mappa (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Livello di zoom della mappa ");
jr_define('_JOMRES_MAP_MAPTYPE',"Tipo mappa");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Gestione sostituzione modelli");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"I pacchetti di modelli sono plugin che possono fornire modelli di sostituzione per vari file modello di Jomres principali.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Questa pagina elenca tutti i file modello che possono essere sovrascritti dai file modello di un pacchetto modello. Se vuoi sovrascrivere un determinato file modello, fai clic sul pulsante di modifica per quel file, nella pagina successiva verrai in grado di scegliere con quale versione si desidera eseguire l\'override. Nota, queste sostituzioni hanno la priorità sia su Jomres Core che su qualsiasi sostituzione di temi/modelli di Wordpress o Joomla. Puoi disabilitare una sostituzione eliminandola nella pagina Elenca le sostituzioni dei modelli.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Nome modello");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Percorso corrente");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Non sovrascritto");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Puoi scegliere quale file modello sovrascrivere i file modello Core modificando il menu a discesa");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentuale Camere Prenotate");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Mostra il form di creazione nuova proprietà.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zoom mappa, 1: Mondo 5: Terra/continente 10: Città 15: Strade 20: Edifici ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Numero di recensioni da mostrare');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Mostra le proprietà selezionate dagli utenti. Se l\'utente è registrato questi sono i suoi preferiti, se non è loggato allora solo gli elementi aggiunti tramite l\'icona Preferiti durante la visita.');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valore minimo di deposito' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Se il deposito calcolato è inferiore a questa cifra, imposta invece il deposito su questo valore. Questa cifra potrebbe essere sovrascritta se non soddisfa l\'impostazione di deposito minimo del sito. Lascialo impostato su 0 per non utilizzare l\'impostazione." );

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Mostra il modulo di consenso conforme al GDPR.');

jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Elenco dei tipi di camere della struttura' );
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mostra un tipo di camera di proprietà' );

jr_define( '_JOMRES_SHORTCODE_LOGIN_FORM', 'Mostra il modulo di accesso' );

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Mostra un elenco di stanze di un certo tipo di stanza');
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID tipo di camera' );

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Mostra un elenco di proprietà sindacate');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Il numero di proprietà in syndication da mostrare');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Se mostrare MRP (hotel/bed & breakfast) o SRP (cottage/appartamenti/ville). L\'impostazione predefinita è determinata dall\'uid della proprietà corrente, se non è disponibile mostrato. Per scegliere un tipo specifico, imposta questo valore su 0 per srps o 1 per mrps.');

