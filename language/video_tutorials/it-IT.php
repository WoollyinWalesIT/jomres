<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Video Tutorial');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Pannello di controllo');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Questo tutorial mostra come usare il pannello di controllo Gestione Proprietà.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Cronologia');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Come utilizzare il calendario della timeline. In questo video creiamo un nuovo ospite inserendo i loro dettagli nel popup, gli ospiti esistenti possono essere riutilizzati selezionando il loro nome dal menu a tendina nel popup.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Proprietà elenco');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Come utilizzare la pagina Proprietà elenco per visualizzare informazioni aggiuntive, modificare colonne e cercare proprietà specifiche.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Modifica i dettagli della tua proprietà');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Modifica i dettagli della tua proprietà, incluso il trascinamento sulla mappa per impostare la tua posizione.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Cambia modalità modifica tariffa');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'La tua modalità di modifica delle tariffe determina il metodo che puoi usare per impostare i prezzi per la tua proprietà. Puoi farlo attraverso la pagina Configurazione Proprietà.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normale modalità di modifica delle tariffe per hotel, pensioni, B&B');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'La modalità di modifica della tariffa normale è una semplice funzione di modifica della tariffa che ti permette di selezionare il numero di camere in una struttura, il prezzo della camera, il numero di ospiti che ogni camera può ospitare e il numero massimo di ospiti in una festa. Una volta salvati, questi prezzi sono validi per i prossimi 10 anni.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Modifica tariffa normale per ville e appartamenti');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'La modalità di modifica della tariffa normale è una semplice funzione di modifica della tariffa che ti consente di selezionare il sottotipo di proprietà, il prezzo della proprietà per notte e il numero massimo di ospiti in una festa. Quando vengono salvati questi prezzi sono quindi valido per i successivi 10 anni.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Modalità modifica tariffe Microgestione (consigliata)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'La modalità di modifica delle tariffe di Microgestione consente di configurare sia il prezzo, sia il numero minimo di giorni di validità di un soggiorno, per ogni giorno dell\'anno. È uno strumento potente che ti dà il controllo completo prezzi eccessivi. In questo esempio ti mostreremo come creare più set di prezzi per lo stesso tipo di camera, impostare prezzi diversi per periodi diversi e prezzi diversi per giorni specifici della settimana all\'interno di un periodo. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Modalità modifica tariffe microgestione per ville/appartamenti (consigliato)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'La modalità di modifica delle tariffe di Microgestione consente di configurare sia il prezzo, sia il numero minimo di giorni di validità di un soggiorno, per ogni giorno dell\'anno. È uno strumento potente che ti dà il controllo completo sopra i prezzi. In questo esempio ti mostreremo come creare più set di prezzi. Imposteremo prezzi diversi per periodi diversi e prezzi diversi per giorni specifici della settimana all\'interno di un periodo. Una volta fatto ciò, creeremo più tariffe per lo stesso proprietà, ma con diversi numeri di ospiti che ci consentono di controllare con precisione i prezzi per ogni scenario.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Diverse tariffe per diversi numeri di ospiti');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Puoi creare più tariffe per lo stesso tipo di camera, quindi se vuoi prezzi differenti per un diverso numero di ospiti, puoi farlo.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per persona per notte - Tipi di ospiti');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Per addebitare a persona a notte dovrai creare tipi di ospite. Diversi tipi di ospite possono variare rispetto al prezzo base di una camera, quindi i bambini di età diverse possono avere sconti variabili in base alla loro età. Tu non è necessario addebitare a persona a notte per utilizzare i tipi di ospite, è possibile utilizzarli anche se si addebita una tariffa fissa ma si desidera comunque acquisire il numero di ospiti o perché si desidera limitare il numero di ospiti in una prenotazione.' );

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Caricamento immagini');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Tutte le immagini vengono caricate tramite il media center. In questo video caricheremo l\'immagine della proprietà principale, alcune immagini di slideshow, una piccola selezione di immagini da mostrare nella pagina dei risultati di ricerca e immagini per una delle le stanze.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - Caricamento immagini');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Tutte le immagini sono caricate tramite il media center. In questo video caricheremo l\'immagine della proprietà principale, una piccola selezione di immagini da mostrare nella pagina dei risultati di ricerca, e alcune immagini della presentazione.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Pannello di controllo amministratore');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Questa è la tua pagina di destinazione predefinita nell\'area amministratore. Puoi vedere un riepilogo delle varie statistiche del sito e vedere quali proprietà esistono nel sistema, che sono complete e che sono state completate e sono in attesa di revisione prima dell\'approvazione .Una volta che una proprietà è stata approvata, può essere pubblicata dal gestore della proprietà.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, installazione e utilizzo');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Questo video mostra come usare Plugin Manager, inclusa l\'installazione del plugin manager e poi l\'installazione e la disinstallazione di un plugin. Se non hai una chiave di licenza ti verrà chiesto di salvare nel sito Configurazione prima di poter installare il gestore. Se non hai utilizzato il gestore dei plugin prima, questo elenco sarà inizialmente vuoto, in questo esempio ho già una varietà di plugin installati.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Gestori proprietà');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'I gestori di proprietà vengono aggiunti in due modi. O creano proprietà da soli (possono essere disabilitati in Configurazione sito) o l\'amministratore del sito può assegnare un gestore esistente a determinate proprietà. I ​​gestori possono accedere solo alle proprietà che hanno creato o a cui è stato assegnato.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Controllo accessi');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Puoi usare la funzione di controllo di accesso per disabilitare le opzioni di menu, rendendole visibili solo a determinate classi di utenti, o addirittura facendole sparire del tutto. Se la barra dei menu non ha opzioni di menu da mostrare, allora scomparirà completamente, quindi se non vuoi che i visitatori del sito vedano alcuna opzione, puoi semplicemente impostare tutte le opzioni in modo che siano visibili agli utenti che hanno effettuato l\'accesso, ad esempio.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tipi di proprietà e stanze');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'In questo video vedrai due concetti importanti. Il primo è la creazione di tipi di proprietà e tipi di camere associati. Vedrai anche un utente registrato che non è ancora un gestore creare la propria proprietà e diventare un manager (ma solo in grado di configurare la proprietà che hanno creato).I tipi di proprietà e di camera sono collegati, una volta creato un tipo di proprietà, è necessario aggiungere un tipo di camera altrimenti i gestori di proprietà vedranno messaggi di errore rossi quando cercheranno di configurare le loro proprietà. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Caricamento indicatori mappa');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Usi Media Center per caricare gli indicatori di mappa. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Qui puoi trovare un\'ottima fonte di indicatori.< /a> La procedura per caricare le caratteristiche della struttura, le caratteristiche delle camere, i tipi di camere e altro è la stessa.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Caratteristiche delle proprietà');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'In questo video ti mostreremo come creare caratteristiche di proprietà e caricare immagini per loro.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Codici brevi');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Gli shortcode sono una funzionalità eccezionalmente potente di Jomres. Il principio è lo stesso sia per Joomla che per Wordpress. In questo video ti mostreremo dove visualizzare i codici brevi (questo elenco cambierà a seconda di quali plugin sono installati) e come utilizzarli. Puoi utilizzare i codici negli articoli o nei moduli.');


jr_define('_JOMRES_TUTORIAL_LOGFILES', 'File di registro');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Questo video ti mostrerà come visualizzare i file di registro. Quando il sistema è in funzione, si verifica un\'ampia registrazione. Quando sei in modalità Produzione (Configurazione sito > Debug) vengono generati meno registri, quindi se stai testando una nuova funzione, allora dovresti impostare il tuo sito su Sviluppo. Se desideri aggiungere la tua registrazione ai tuoi script Jomres, dai un\'occhiata a <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">la nostra pagina di manuale su come farlo.</a> Qui lanceremo un falso errore, quindi visualizzeremo il file di registro. Perché il sito è impostato su Development lì sono molte informazioni, normalmente vedresti solo un messaggio che dice che c\'è stato un errore ed è stato segnalato.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traduzione etichette e altre stringhe');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Ci sono diversi modi per tradurre le stringhe di lingua in Jomres, puoi modificare i file di lingua ma potrebbero essere sovrascritti quando aggiorni. Ti consigliamo invece di utilizzare gli strumenti di traduzione incorporati che sono unici per il nostro software. Se la stringa è qualcosa che è stata inserita in un modulo, come il nome di un tipo di camera, è possibile utilizzare la pagina Modifica etichetta. Se la stringa proviene dal file di lingua, è possibile utilizzare lo strumento di modifica dei file di lingua. Basta utilizzare lo strumento di ricerca del browser per trovare la stringa che si desidera modificare e quindi fare clic sul collegamento per modificarla. Queste modifiche vengono salvate nel database e quindi sono sicure per l\'aggiornamento. È possibile avere etichette diverse per diversi tipi di proprietà, quindi è possibile cambia Nuova Proprietà in Nuovo Campeggio, ad esempio, modificando il menu a discesa del contesto della lingua nella parte superiore della pagina prima di modificare l\'etichetta.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Aggiunta proprietà');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>A questo punto Jomres è stato installato nel CMS ed è stato aggiunto al menu frontend (o in Wordpress hai creato una pagina e aggiunto lo shortcode di base di Jomres).</ p>
<p>Qui vedrai come un utente registrato che non è ancora un gestore di proprietà in Jomres può creare una nuova proprietà, configurare alcune impostazioni di base e pubblicarla.</p>
<p>Alla fine vedrai che il gestore è stato impostato automaticamente come gestore di proprietà, tuttavia possono solo configurare le proprie proprietà.</p>
<p>Sebbene l\'interfaccia in Wordpress abbia un aspetto diverso, il processo è esattamente lo stesso per Joomla o Wordpress.</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Categorie di proprietà');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Le categorie di proprietà sono una semplice funzionalità che consente ai gestori di proprietà di assegnare le proprie proprietà a una determinata categoria. Gli amministratori del sito possono creare shortcode che elencheranno tutte le proprietà in una categoria, come mostrato in questo video.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'L\'amministratore del sito visualizza le proprietà');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Non gestisci le proprietà da qui, puoi gestire solo le proprietà dal frontend, tuttavia in questo elenco puoi vedere le proprietà in attesa di approvazione (se la funzione è abilitata) e quelle che sono incompleto (ad es. è ancora necessario caricare immagini, impostare i prezzi, ecc.) Fare clic sul nome della proprietà per essere indirizzati alla dashboard per quella proprietà. Sarà quindi possibile utilizzare le sezioni della guida nella parte superiore della pagina per vedere i passaggi che devi prendere per completare e pubblicare una proprietà.</p> ');

