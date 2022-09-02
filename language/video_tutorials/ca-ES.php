<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Tutorials de vídeo');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Tauler de control');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Aquest tutorial mostra com utilitzar el tauler de control de Gestió de propietats.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Cronologia');
jr_define ("_JOMRES_TUTORIAL_TIMELINE_DESC", "Com s'utilitza el calendari de la línia de temps. En aquest vídeo es crea un nou convidat introduint les seves dades a la finestra emergent, es poden tornar a utilitzar els convidats existents seleccionant el seu nom al menú desplegable de la finestra emergent.") ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Propietats de la llista');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Com utilitzar la pàgina Propietats de la llista per veure informació addicional, canviar columnes i buscar propietats específiques.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edita els detalls de la teva propietat');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Edició dels detalls de la propietat, inclòs arrossegament al mapa per definir la vostra ubicació.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Canvia el mode d\'edició de tarifes');
jr_define ("_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC", "El vostre mode d\'edició de tarifes determina el mètode que podeu utilitzar per fixar els preus de la vostra propietat. Ho feu a través de la pàgina Configuració de propietats.");


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Mode d\'edició de tarifes normal per a hotels, pensions, B & B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'El mode d\'edició de tarifes normal és una simple funció d\'edició de tarifes que us permet seleccionar el nombre d\'habitacions d\'una propietat, el preu de l\'habitació, el nombre de convidats que pot allotjar cada habitació i el nombre màxim de convidats en un partit. Quan es guardin, aquests preus seran vàlids durant els propers deu anys. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Edició de tarifes normals per a xalets i apartaments');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'El mode d\'edició de tarifes normal és una simple funció d\'edició de tarifes que us permet seleccionar el subtipus de propietat, el preu de la propietat per nit i el nombre màxim de convidats en una festa. Quan es guarden aquests preus són després vàlid durant els propers deu anys. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Mode d\'edició tarifària de microgestió (recomanat)');
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC", "El mode d\'edició de tarifes de Micromanage us permet configurar tant el preu com el nombre mínim de dies per als quals una estada pot ser vàlida per a tots els dies de l\'any. És una eina potent que us proporciona un control complet sobre preus. En aquest exemple, us mostrarem com crear diversos conjunts de preus per al mateix tipus d\'habitació, establir preus diferents per a períodes diferents i preus diferents per a dies específics de la setmana dins d\'un període. ");

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Mode d\'edició de tarifes de microgestió per a viles / apartaments (recomanat)');
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC", "El mode d\'edició de tarifes de Micromanage us permet configurar tant el preu com el nombre mínim de dies per als quals una estada pot ser vàlida per a tots els dies de l\'any. És una eina potent que us proporciona un control complet sobre preus. En aquest exemple, us mostrarem com crear diversos conjunts de preus. Establirem preus diferents per a períodes diferents i preus diferents per a dies específics de la setmana en un període. Un cop fet això, crearem diverses tarifes per al mateix. propietat, però amb números de convidats diferents que ens permeten controlar amb precisió els preus per a cada escenari. ");

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Tarifes diferents per a diferents números de convidats');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Podeu crear diverses tarifes per al mateix tipus d\'habitació, de manera que si voleu preus diferents per a un nombre diferent de convidats, podeu fer-ho.');

jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES", "Per persona i nit: tipus de convidats");
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC", "Per cobrar per persona i per nit hauràs de crear tipus de convidats. Els diferents tipus de convidats poden tenir diferències respecte al preu base d\'una habitació, de manera que els nens de diferents edats poden tenir descomptes diferents en funció de la seva edat. no cal carregar per persona i nit per utilitzar els tipus de convidats, també podeu utilitzar-los si cobreu una tarifa plana però voleu capturar el nombre de convidats o perquè voleu limitar el nombre de convidats a la reserva. " );


jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Centre multimèdia: càrrega d\'imatges');
jr_define ("_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC", "Totes les imatges es carreguen a través del centre multimèdia. En aquest vídeo penjarem la imatge de la propietat principal, algunes imatges de presentacions de diapositives, una petita selecció d\'imatges que es mostraran a la pàgina de resultats de cerca i imatges per a una de les les habitacions. ");

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Centre multimèdia: càrrega d\'imatges');
jr_define ("_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC", "Totes les imatges es carreguen a través del centre multimèdia. En aquest vídeo penjarem la imatge de propietat principal, una petita selecció d\'imatges que es mostraran a la pàgina de resultats de cerca i algunes imatges de presentació de diapositives.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Tauler de control de l\'administrador');
jr_define ("_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC", "Aquesta és la vostra pàgina de destinació predeterminada a l\'àrea d\'administrador. Podeu veure un resum de diverses estadístiques del lloc i veure quines propietats existeixen al sistema, quines s'han completat i quines s'han completat i estan pendents de revisió abans de l\'aprovació . Un cop s'ha aprovat una propietat, la pot publicar el gestor de la propietat. ");

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Gestor de connectors, instal·lació i ús');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC", "Aquest vídeo mostra com utilitzar el gestor de connectors, inclosa la instal·lació del gestor de connectors i, a continuació, la instal·lació i desinstal·lació d\'un connector. Si no teniu cap clau de llicència, se us demanarà que deseu al lloc Configuració abans d’instal·lar el gestor. Si no heu utilitzat el gestor de connectors abans, llavors aquesta llista inicialment estarà buida, en aquest exemple ja tinc instal·lats diversos connectors. ");

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Administradors de propietats');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC", "Els administradors de propietats s'afegeixen de dues maneres. Creen les propietats ells mateixos (es poden desactivar a la configuració del lloc) o l\'administrador del lloc pot assignar un gestor existent a determinades propietats. Els gestors només poden accedir a les propietats que tenen creats o assignats a. ");

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Control d\'accés');
jr_define ("_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC", "Podeu utilitzar la funció de control d\'accés per desactivar les opcions del menú, fent-les visibles només per a determinades classes d\'usuaris o fins i tot fent-les desaparèixer del tot. Si la barra de menú no té cap opció de menú per mostrar-la, desapareixerà completament, de manera que si no voleu que els visitants del lloc vegin cap opció, podeu configurar totes les opcions perquè siguin visibles per als usuaris que hagin iniciat la sessió, per exemple. ");

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tipus de propietat i d\'habitació');
jr_define ("_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC", "En aquest vídeo veureu dos conceptes importants. El primer és la creació de tipus de propietats i tipus d\'habitacions associats. També veureu que un usuari registrat que encara no és gestor crea la seva pròpia propietat i es converteix en un gestor (però només pot configurar la propietat que han creat). Els tipus de propietat i d\'habitació estan enllaçats; un cop hàgiu creat un tipus de propietat, heu d\'afegir un tipus d\'habitació, en cas contrari, els gestors de propietats veuran missatges d\'error en vermell quan intentin configurar-ne les propietats. ");



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Càrrega de marcadors de mapes');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Feu servir el Media Center per penjar marcadors de mapes. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Aquí es pot trobar una gran font de marcadors. < / a> El procediment per penjar funcions de propietats, funcions de l\'habitació, tipus d\'habitació i altres és el mateix. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Característiques de la propietat');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', "En aquest vídeo us mostrarem com crear funcions de propietats i penjar-ne imatges.");

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Codis curts');
jr_define ("_JOMRES_TUTORIAL_SHORTCODES_DESC", "Els codis curts són una característica excepcionalment potent de Jomres. El principi és el mateix tant per a Joomla com per a Wordpress. En aquest vídeo us mostrarem on veure els codis curts (aquesta llista canviarà en funció dels connectors que hi hagi) instal·lat) i com utilitzar-los. Podeu utilitzar els codis en articles o mòduls. ");
    
    
jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Fitxers de registre');
jr_define ("_JOMRES_TUTORIAL_LOGFILES_DESC", "Aquest vídeo us mostrarà com veure fitxers de registre. Es produeix un registre ampli quan s'executa el sistema. Quan en mode de producció (Configuració del lloc> Depuració) es generen menys registres, de manera que si proveu una nova funció, hauríeu de configurar el vostre lloc com a Desenvolupament. Si voleu afegir el vostre propi registre als vostres scripts Jomres, mireu <a href=\"http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres\" target =\"_blank\"> la nostra pàgina de manual sobre com fer-ho. </a> Aquí llançarem un error fals, a continuació, visualitzarem el fitxer de registre. Com que el lloc està configurat a Desenvolupament allà és molta informació, normalment només veieu un missatge que diu que hi ha hagut un error i que s'ha informat. ");

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traducció d\'etiquetes i altres cadenes');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Hi ha diverses maneres de traduir les cadenes d\'idioma a Jomres, podeu editar fitxers d\'idioma però es poden sobreescriure quan actualitzeu. En lloc d\'això, us recomanem que utilitzeu les eines de traducció integrades que són exclusives de la nostra Si la cadena és una cosa que s\'ha introduït en un formulari, com ara el nom d\'un tipus d\'habitació, podeu utilitzar la pàgina Edició d\'etiquetes. Si la cadena prové del fitxer d\'idioma, podeu utilitzar l\'eina d\'edició de fitxers d\'idioma. Només cal que utilitzeu l\'eina de cerca del navegador per trobar la cadena que voleu canviar i, a continuació, feu clic a l\'enllaç per canviar-la. Aquests canvis es desaran a la base de dades i, per tant, es poden actualitzar de manera segura. Podeu tenir etiquetes diferents per a diferents tipus de propietats, canvieu Propietat nova a Càmping nou, per exemple, canviant el menú desplegable Context d\'idioma a la part superior de la pàgina abans de canviar l\'etiqueta. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Addició de propietats');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> En aquesta etapa, Jomres s\'ha instal·lat al CMS i s\'ha afegit al menú frontal (o a Wordpress heu creat una pàgina i hi heu afegit el codi curt bàsic de Jomres). </ p>
<p> Aquí veureu com un usuari registrat que encara no és administrador de propietats a Jomres pot crear una propietat nova, configurar alguns paràmetres bàsics i publicar-la. </p>
<p> Al final, veureu que el gestor s\'ha configurat automàticament com a administrador de propietats, tot i que només poden configurar les seves pròpies propietats. </p>
<p> Tot i que la interfície de Wordpress té un aspecte diferent, el procés és exactament el mateix per a Joomla o Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Categories de propietats');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC", "Les categories de propietats són una característica senzilla que permet als administradors de propietats assignar les seves propietats a una categoria determinada. Els administradors de llocs poden crear codis curts que llistaran totes les propietats d\'una categoria, tal com es mostra en aquest vídeo.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Propietats de visualització de l\'administrador del lloc');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> No gestioneu propietats des d\'aquí, només podeu gestionar propietats des del frontend, però en aquesta llista podeu veure propietats pendents d\'aprovació (si la funció està habilitada) i qualsevol altra que sigui incompleta (per exemple, encara heu de penjar imatges, establir preus, etc.). Feu clic al nom de la propietat per accedir-hi al tauler de control de la propietat. A continuació, podreu utilitzar les seccions de la guia de la part superior de la pàgina per veure els passos que cal prendre per completar i publicar una propietat. </p> ');
    
