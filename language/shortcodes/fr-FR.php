<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Translation to fr-FR by Stéphane Bernard, Valtari NumAgency, France - 03/07/2019 - https://www.valtari.fr
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Voici la page de gestion de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Il s’agit du diagramme d\'établissement qui fournit un aperçu des réservations en temps réel, de la disponibilité et de l’occupation.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Ce script permet à l\'utilisateur de comparer un maximum de 3 établissements.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Une liste séparant les établissements par des virgules, par exemple : 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Construit le formulaire de contact du propriétaire. ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Associe l\'UID de l\'établissement à contacter. Renseignez 0 (zéro) pour contacter l’administrateur du site. ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Affiche la page d'informations de la société extraites à partir de Information de votre société du gestionnaire de l'établissement dans la Configuration de l'établissement. Les informations de cet onglet sont généralement utilisés pour la correspondance, ce qui permet aux responsables de disposer à la fois de l'adresse de l'établissement et d'une adresse distincte à des fins commerciales.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID de l\'établissement. ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', 'Affiche le calendrier de l\'établissement');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Associe l\'UID de l\'établissement à afficher. ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Mois à afficher, la valeur par défaut est 24 si pas défini autrement. Non compatible avec la variable Show Just Month (affiche juste le mois).');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Définissez-le sur 1, si vous souhaitez simplement afficher le mois en cours seul. Le paramètre months_to_show sera ignoré si show_just_month est utilisé dans le même shortcode, vous devez donc utiliser l'un ou l'autre, et non les deux en même temps.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Affiche uniquement le texte de description de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Affiche uniquement les extras de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Affiche uniquement les équipements de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Affiche uniquement le header du template de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Affiche uniquement les types de chambres de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Affiche uniquement l\'image principale de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Affiche uniquement la carte de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Affiche le texte Plus d\'informations sur l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR Code qui relie à des cartes gmaps. Cela peut être numérisé dans un téléphone en utilisant une application de lecture de QR code qui fournissent des itinéraire ou des cartes de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Affiche les avis sur l'établissement.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Affiche un résumé des avis sur l'établissement.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Affiche une chambre de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID de la chambre.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Affiche les chambres l\'établissement.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Affiche les images de la chambre d'un établissement sous forme de diaporama.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Affiche le diaporama de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Affiche les tarifs de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Affiche l'adresse professionnelle du site telle que saisie dans Configuration du site > Informations de votre société.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'SAffiche les Conditions Générales de Vente de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID de l\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Affiche le calendrier de l'interface utilisateur de l'établissement, qui est un calendrier différent du grand calendrier principal et est basé sur la fonctionnalité de calendrier de Jquery UI.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Renseigner l\'UID de l\'établissement à afficher. ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Définissez ce paramètre sur 1 pour ne pas afficher la légende.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Affiche les résultats de la recherche, qui peuvent être améliorés en ajoutant des paramètres de recherche. Nous vous déconseillons d'utiliser tous les paramètres en même temps, car vous obtiendrez des critères de recherche trop limités. Au lieu de cela, vous devriez vous limiter à un ou deux paramètres : par exemple, recherche par pays et nombre d'étoiles.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Recherchez par pays en utilisant le code ISO Alpha-2 : par exemple GB ou FR ou DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Recherche par région. Les régions étant enregistrées dans la base de données, vous devez utiliser l'ID de région. Cliquez sur Administrateur > Jomres > Structure du site> Répertoriez les régions et cliquez sur le lien Modifier pour y afficher le numéro d'identification de la région.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Le nom complet de la ville que vous souhaitez rechercher.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Rechercher des établissements avec des caractéristiques/équipements/activités particuliers. Les IDs de fonction se trouvent dans Administrateur > Jomres > Structure du site > Caractéristiques de l\'établissement.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Rechercher des établissements avec certains types de chambres. Les IDs du type de chambres se trouvent dans Administrateur > Jomres > Structure du site> Types de chambres.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Rechercher des établissements d\'un type d\'établissement spécifique. Les IDs de types d\'établissements se trouvent dans Administrateur > Jomres > Structure du site > Types d\'établissements.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Rechercher des établissement dans une fourchette de prix spécifiques.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Recherchez les établissements dont les tarifs autorisent des nombres de clients d'une certaine valeur : par exemple des groupes de 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Recherchez les établissement avec X étoiles.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Recherche par date d\'arrivée. Devrait être combiné avec le paramètre DepartureDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Recherche par date de départ. Doit être combiné avec le paramètre arrivalDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Rechercher par catégorie d\'établissement.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Voir la page d'un agent (gestionnaire d'établissement). Vous pouvez transmettre SOIT un UID de propriété ou l'ID de l'agent lui-même, si vous le connaissez.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un UID d'établissement, cela montrera le gestionnaire (agent) de l'établissement");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "L'ID de la base de données du gestionnaire, s'il est connu.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Affiche les établissements populaires (fonction généralement utilisée dans les positions de modules ou de widgets).');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Le nombre maximum d\établissement pouvant être affichés.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Afficher uniquement les établissements de ces types d\'établissements.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Définissez la valeur sur 1 pour afficher les modules/widgets optimisés pour une position verticale .');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Affiche une sélection aléatoire d\'établissement (fonction généralement utilisée dans les positions de modules ou de widgets).');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Le nombre maximum d\établissement pouvant être affichés.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Afficher uniquement les établissements de ces types d\'établissements.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Définissez la valeur sur 1 pour afficher les modules/widgets optimisés pour une position verticale .');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Affiche les établissements les plus consultés récemment par les clients (fonction généralement utilisée dans les positions de modules ou de widgets).");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Le nombre maximum d\établissement pouvant être affichés.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Définissez la valeur sur 1 pour afficher les modules/widgets optimisés pour une position verticale .');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Affiche un certain nombre d\'établissements (fonction généralement utilisée dans les positions de modules ou de widgets).');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Les IDs des établissements que vous souhaitez afficher.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Définissez la valeur sur 1 pour afficher les modules/widgets optimisés pour une position verticale .');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Affiche le menu déroulant de sélection de devises.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Activer/Désactiver la sortie des données du template alternatif. Cette sortie de données est destinée à être utilisée dans les barres d’outils Bootstrap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Affiche la page du panier.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Affiche le module/widget Panier.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Affiche le menu principal. Notez que si vous exécutez une version personnalisée de mainmenu_wrapper_alternate.html dans, par exemple, /templates/jr_leohtian/html/com_jomres, vous devrez peut-être la modifier pour remplacer <i>jomres_alternate_menu_position </i> par MENU_LOCATION entourée d\'accolades.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Cette page vous permet de télécharger des images pour votre établissement et les choses que vous proposez. Il comporte un bouton principal et un second bouton qui vous permet de sélectionner des ressources spécifiques pour lesquelles télécharger des images. Ainsi, l\’image principale et le diaporama n\’afficheront qu’un bouton, mais si vous en avez créé un, par exemple extras ou chambres optionnels, vous verrez alors un deuxième bouton où vous pourrez télécharger des images pour ces ressources spécifiques.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Cette page vous permet de télécharger des images pour votre établissement et les choses que vous proposez. Il comporte un bouton principal et un second bouton qui vous permet de sélectionner des ressources spécifiques pour lesquelles télécharger des images. Ainsi, l\'image de l\'établissement principal et le diaporama afficheront un seul bouton, mais si vous avez créé des extras, vous verrez un deuxième bouton sur lequel vous pourrez télécharger des images pour ces ressources spécifiques.');

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol><li>Commencez par choisir les images que vous souhaitez télécharger en cliquant sur Ajouter une image ou en utilisant le glisser-déposer. Celles-ci apparaîtront dans la colonne à droite.</li><li>Au-dessus de cette zone, utilisez le bouton Choisissez la ressource pour choisir la ressource pour laquelle vous souhaitez télécharger des images. On vous proposera peut-être la possibilité de choisir une ressource spécifique en dessous. </li><li> Une fois que vous avez choisi une ressource, vous pouvez cliquer sur le bouton Télécharger une image sous une image pour l'associer à cette ressource. Une fois qu'une image a été téléchargée, elle disparaîtra de la colonne sur le site de droite et apparaîtra dans la gauche.</li><li>Utilisez le bouton Corbeille à côté des images existantes pour supprimer les images que vous ne souhaitez plus afficher.</li><li>Vous pouvez modifier l'ordre d'affichage des fichiers dans le diaporama en les renommant avant de les télécharger, car ils sont affichés dans l'ordre alphabétique.</li></ol>");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "À côté du bouton Ressource, vous pouvez voir un bouton Aperçu. Si vous cliquez dessus, vous verrez une fenêtre contextuelle vous montrer comment les images actuellement téléchargées apparaîtront dans une page. Cela vous donner une idée de la façon dont les images s'afficheront à vos clients.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Il n'y a pas de limite au nombre d'images que vous pouvez télécharger. Les images sont automatiquement redimensionnées lors de leur téléchargement. Vous pouvez uniquement télécharger des fichiers JPG et PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idéalement, toutes les images que vous téléchargez seront au moins de  ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels de large, sinon elles peuvent paraître floues ou pixelisées après leur téléchargement.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " de taille.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choisissez la ressource pour laquelle vous souhaitez télécharger des images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Ressource spécifique");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images déjà téléchargées pour cette ressource");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Mise en forme du texte');
jr_define('_JOMRES_MARKDOWN_DESC', 'Vous pouvez entrer du texte ici en utilisant le formatage simple Markdown. Vous n\’avez pas besoin de connaître le HTML, utilisez simplement les boutons pour donner l\’information que vous voulez, ou formatez le texte selon ces exemples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Accentuation');
jr_define('_JOMRES_MARKDOWN_BOLD', 'gras');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italique');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'barré');
jr_define('_JOMRES_MARKDOWN_HEADERS', "En-têtes");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Grand titre (h1)');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Titre moyen (h2)");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Titre petit (h3)');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Titre minuscule (h4)');
jr_define('_JOMRES_MARKDOWN_LISTS', "Puces");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Puces à points');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Puces à nombres');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Liens');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Texte à afficher');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Guillements');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ceci est un guillemet.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Il peut affecter plusieurs lignes !');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Colonne');

jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Afficher les images de l\'établissement sous forme de diaporama dans la liste des établissements ?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Si défini sur OUI, un diaporama des images principales de l\'établissement sera affiché. Si la valeur est NON, la première image principale de l\'établissement sera affichée.');

jr_define('EDIT_CMS_USER', 'Modifier l\'utilisateur du CMS');

jr_define('BOOKING_MADE_BY', 'Réservation faite par ');

jr_define('_JOMRES_ROUTER_FEATURES', 'Équipements');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Types de chambres');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL du formulaire de réservation externe');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Ici, vous pouvez définir une URL externe si vous souhaitez utiliser un site Web tiers pour effectuer des réservations. Tous les boutons de réservation Jomres pointeront vers cette URL. Laissez ce champ vide si vous souhaitez utiliser le formulaire de réservation Jomres.');

jr_define('_JOMRES_ROOM_TAGLINE', 'Slogan (description courte de la chambre/sous-titre)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Description de la chambre');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Cleint blacklisté');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Si ce client figure dans la liste noire, il ne pourra plus faire de réservation dans cet établissement.');
jr_define('_JOMRES_SESSION_HANDLER', 'Gestionnaire de session');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Enregistrez les fichiers de session Jomres sur le disque ou dans la base de données. Recommandé : base de données');
jr_define('_JOMRES_MAP_HEIGHT',"Hauteur de la carte (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Niveau de zoom de la carte ");
jr_define('_JOMRES_MAP_MAPTYPE',"Type de carte ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Gestionnaire de remplacement de template");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Les packages de templates sont des plugins pouvant fournir des templates de substitution pour divers fichiers de template principal de Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Cette page répertorie tous les fichiers de templates pouvant être remplacés par d'autres fichiers de templates. Si vous souhaitez remplacer un fichier de template, cliquez sur le bouton d’édition de ce fichier. Sur la page suivante, vous pourrez choisir la version à remplacer. Notez que ces remplacements ont priorité sur les remplacements du coeur (core) de Jomres, et tout thème/template Wordpress ou Joomla. Vous pouvez désactiver un remplacement en le supprimant dans la page Liste des remplacements de templates.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Nom du template");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Chemin actuel");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Non remplacé");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Vous pouvez choisir le fichier de template pour remplacer par les fichiers de template du coeur (core) de Jomres de base en utilisant la liste déroulante.");

jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Pourcentage de chambres réservées");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Affiche le formulaire de création d\'un nouvel établissement.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zoom de la carte : 1= Monde - 5=continent - 10=ville- 15=rue - 20=bâtiment');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Nombre d\'avis à afficher');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Affiche les établissements des utilisateurs sélectionnés. Si l\'utilisateur est enregistré, ce sont ses favoris. S\'il ne l\'est pas, seuls sont pris en compte les établissements ajoutés via l\'icône Favoris lors de la consultation du site.');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Valeur minimum de l\'acompte' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Si l'acompte calculé est inférieur à ce chiffre, définissez l'acompte sur cette valeur. Ce chiffre peut lui-même être dépassé, s'il ne satisfait pas le paramètre d'acompte minimum du site. Laissez-le défini sur 0 pour ne pas utiliser ce paramètre." );

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Affiche le formulaire de consentement conforme au RGPD.');

jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Liste des types de chambres de l\'établissement' );
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Afficher un type de chambre de l\'établissement' );

jr_define( '_JOMRES_SHORTCODE_LOGIN_FORM', 'Afficher le formulaire de connexion' );

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Afficher une liste de chambres d\'un certain type de chambres');
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID du type de chambres' );

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Tableau de bord général');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Shows a list of syndicated properties');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'The number of syndicated properties to show');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Whether to show MRPs (hotels/bed & breakfasts) or SRPs (cottages/apartments/villas). Default is determinded from the current property\'s property uid, if that is not available, then MRPs are shown. To choose a specific type, set this value to 0 for srps, or 1 for mrps.');