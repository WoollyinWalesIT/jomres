<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
  Translation to fr-FR by Stéphane Bernard, Valtari NumAgency, France - 02/07/2019 - https://www.valtari.fr
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
jr_define('VIDEO_TUTORALS_TITLE', 'Tutoriels vidéos');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Panneau de contrôle (Control panel)');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Ce didacticiel explique comment utiliser le panneau de configuration de la gestion des établissements.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Ligne du temps (Timeline)');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'How to use the timeline calendar. In this video we create a new guest by entering their details in the popup, existing guests can be re-used by selecting their name from the dropdown in the popup.');

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Liste des établissemnts');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Comment utiliser la page Liste des établissements pour afficher des informations supplémentaires, modifier des colonnes et rechercher des établissements spécifiques.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Modifier les informations de votre établissement');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Modification des informations de votre établissement, notamment en faisant glisser la carte pour définir votre localisation.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Mode d\'édition de vos changements tarifaires');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Le mode d’édition de votre tarif détermine la méthode que vous pouvez utiliser pour définir les prix de votre établissement. Vous le faites via la page de configuration des établissements.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Modification de tarif de base pour les hôtels, pensions, et chambres d\'hôtes');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'La modification de tarif de base est une simple fonctionnalité de modification de tarif qui vous permet de sélectionner le nombre de pièces d’un établissement, son prix, le nombre de personnes que chaque chambre peut accueillir et le nombre maximum de personne d’une activité. Une fois sauvegardés, ces prix sont valables pour les 10 prochaines années.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Modification des tarifs de base pour les villas et les appartements');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'La modification de tarif de base est une fonctionnalité simple de modification de tarif qui vous permet de sélectionner le sous-type d\'établissement, le prix de l\'hébergement par nuitée et le nombre maximum de personnes dans une activité. Une fois sauvegardés, ces prix sont valables pour les 10 prochaines années.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Modification du tarif en mode Micromanage ou avancé (recommandé)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'La modification du tarif en mode Micromanage (ou avancé) vous permet de configurer à la fois le prix et le nombre minimum de jours de validité d\'un séjour, pour chaque jour de l\'année. C\'est un outil puissant qui vous donne un contrôle complet sur les prix. Dans cet exemple, nous allons vous montrer comment créer plusieurs ensembles de prix pour le même type de chambre, définir des prix différents pour des périodes différentes et des prix différents pour des jours spécifiques de la semaine d\'une période.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Modification des tarifs en mode Micromanage ou avancé pour les villas et appartements (recommandé)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'La modification du tarif en mode Micromanage (ou avancé) vous permet de configurer à la fois le prix et le nombre minimum de jours de validité d\'un séjour, pour chaque jour de l\'année. C\'est un outil puissant qui vous donne un contrôle complet sur les prix. Dans cet exemple, nous allons vous montrer comment créer plusieurs ensembles de prix. Nous fixerons différents prix pour différentes périodes et différents prix pour des jours spécifiques de la semaine au cours d\'une période donnée. Une fois cela fait, nous allons créer plusieurs tarifs pour le même établissement, mais avec des nombres de personnes différents nous permettant de contrôler les prix avec précision pour chaque scénario.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Différents tarifs pour différents nombres de clients');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Vous pouvez créer plusieurs tarifs pour le même type de chambre. Par conséquent, si vous souhaitez des prix différents pour différents nombres de clients, vous pouvez le faire.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Par personne et par nuit - Types de clients');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Pour facturer par personne et par nuit, vous devrez créer des types de clients. Les différents types de clients peuvent varier selon le prix de base d’une chambre. Ainsi, les enfants de différents âges peuvent bénéficier de réductions différentes en fonction de leur âge. Vous n\'avez pas besoin de facturer par personne et par nuit pour utiliser les Types de clients, vous pouvez également les utiliser si vous facturez un tarif fixe, mais souhaitez tout de même connaître le nombre de personnes par chambre ou si vous souhaitez limiter le nombre de personne dans une réservation.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Gestion des médias - Téléchargement d\'images');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Toutes les images sont téléchargées via la Gestion des médias. Dans cette vidéo, nous allons télécharger l\'image de l\'établissement principal, des images du diaporama, une petite sélection d\'images à afficher dans la page de résultats de recherche et des images de l\'une des chambres.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Gestion des médias - Téléchargement d\'images');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Toutes les images sont téléchargées via la Gestion des médias. Dans cette vidéo, nous allons télécharger l\'image de l\'établissement principal, une petite sélection d\'images à afficher dans la page de résultats de recherche et certaines images du diaporama.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Panneau de configuration administrateur');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Ceci est votre page d\'accueil par défaut dans la zone de l\'administration. Vous pouvez voir un résumé des différentes statistiques du site et voir quels établissements existent dans le système, lesquels sont complets ou qui ont été complétés ou attendent d\'être examinées avant d\'être approuvées. Une fois qu\'un établissement a été approuvée, elle peut être publiée par le gestionnaire d\'établissements.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Gestion des plugins, installation et utilisation');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Cette vidéo vous montre comment utiliser le gestionnaire de plug-in, y compris l\'installation du gestionnaire de plug-in, puis l\'installation et la désinstallation d\'un plug-in. Si vous ne possédez pas de clé de licence, vous serez invité à vous enregistrer dans Configuration du site avant de pouvoir installer le gestionnaire. Si vous n\'avez pas utilisé le gestionnaire de plugins auparavant, cette liste sera initialement vide. Dans cet exemple, plusieurs plugins sont déjà installés.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Gestionnaires d\'établissements');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Les gestionnaires d\'établissements sont ajoutés de deux manières. Soit ils créent eux-mêmes des établissements (peuvent être désactivés dans la configuration du site), soit l\'administrateur du site peut affecter un gestionnaire existant à certains établissements. Les gestionnaires peuvent uniquement accéder aux établissements qu\ils ont créées ou auxquelles ils ont été affectés.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Gestion des accès');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Vous pouvez utiliser la Gestion des accès pour désactiver les options de menu, les rendre visibles uniquement pour certaines types d\'utilisateurs, ou même les faire disparaître complètement. Si la barre de menus ne contient aucune option de menu, elle disparaîtra complètement. Par exemple, si vous ne souhaitez pas que les visiteurs du site voient les options, vous pouvez simplement définir toutes les options comme visibles pour les utilisateurs connectés.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Types d\'établissements et de chambres');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Dans cette vidéo, vous verrez deux concepts importants. Le premier est la création de types d\'établissements et de types de chambres associés. Vous verrez également un utilisateur enregistré qui n\'est pas encore un gestionnaire créer son propre établissement et devenir un gestionnaire (mais uniquement capable de configurer l\'établissement qu\'il a créé). Les types d\'établissement et de chambres sont liés, une fois que vous avez créé un type d\'établissements, vous devez ajouter un type de chambres, sinon les gestionnaires d\'établissements verront des messages d\'erreur en rouge lors de la configuration de leurs établissements.');

jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Téléchargement de marqueurs de carte');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Vous utilisez la Gestion des médias pour télécharger des marqueurs de carte. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Vous trouverez ici une excellente source de marqueurs. </a> Vous verrez aussi la procédure de téléchargement des caractéristiques/équipements des établissement, des caractéristiques/équipements de chambres, des types de chambres et équivalents.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Équipements des établissements');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Dans cette vidéo, nous allons vous montrer comment créer des caractéristiques/équipements d\'établissements et télécharger des images pour eux.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes (codes courts)');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Les codes courts (Shortcodes) sont une fonctionnalité exceptionnellement puissante de Jomres. Le principe est le même pour Joomla et Wordpress. Dans cette vidéo, nous vous montrerons où voir les codes abrégés (cette liste changera en fonction des plugins installés) et comment les utiliser. Vous pouvez utiliser les codes dans des articles ou des modules.');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Fichiers des logs');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Cette vidéo vous montrera comment afficher les fichiers des logs. Une journalisation étendue des événements est générée lorsque le système est exécuté. En mode Production (Configuration du site > Débogage), moins de journaux sont générés. Par conséquent, si vous testez une nouvelle fonctionnalité, vous devez définir votre site sur Développement. Si vous souhaitez ajouter votre propre journalisation à vos scripts Jomres, consultez <a "https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres "target ="_blank"> notre page de manuel sur la façon de le faire. </a>Pour l\'exemple, nous allons lancer une fausse erreur, puis afficher le fichier des logs. Étant donné que le site est défini sur Développement, il y a beaucoup d\'informations, normalement, vous ne verrez qu\'un message indiquant qu\'il y a eu une erreur et qu\'elle a été rapportée.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traduire des étiquettes et autres chaînes de caractères');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Il existe plusieurs façons de traduire des chaînes de langue dans Jomres. Vous pouvez éditer des fichiers de langue, mais ils peuvent être écrasés lors de la mise à niveau. Au lieu de cela, si vous n\'êtes pas un expert, nous vous recommandons d\'utiliser les outils de traduction intégrés spécifiques à notre logiciel. Si la chaîne est quelque chose qui a été entrée dans un formulaire, tel que le nom d\'un type de chambre, vous pouvez utiliser la page Modification des étiquettes. Si la chaîne provient du fichier de langue, vous pouvez utiliser l\'outil d\'édition des fichiers de langue. Utilisez simplement l\'outil de recherche du navigateur pour trouver la chaîne que vous souhaitez modifier, puis cliquez sur le lien pour le changer. Ces modifications sont enregistrées dans la base de données et sont donc sécurisées pour la mise à jour. Vous pouvez avoir différentes étiquettes pour différents types d\'établissements. Ainsi, vous pouvez changer Nouvel établissement en Nouveau camping, par exemple, en modifiant le menu déroulant Contexte de langue en haut de la page avant de changer l\'étiquette.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Ajout d\'établissements');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>A ce stade, Jomres a été installé dans le CMS et ajouté au menu du site (ou dans Wordpress, vous avez créé une page et y a ajouté le shortcode Jomres de base).</p><p>Ici, vous verrez comment un utilisateur enregistré qui n\'est pas encore gestionnaire d\'établissements dans Jomres peut créer un nouvel établissement, configurer certains paramètres de base et le publier.</p><p>À la fin, vous verrez que le gestionnaire a été défini automatiquement en tant que gestionnaire d\'établissements, mais ils ne peuvent configurer que leurs propres établissements.</p><p>Bien que l\'interface dans Wordpress soit différente, le processus est exactement le même pour Joomla ou Wordpress.</p>  ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Catégories d\'établissements)');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Les catégories d\'établissements sont une fonctionnalité simple qui permet aux gestionnaires d\'établissements d\'affecter leurs établissements à une certaine catégorie. Les administrateurs de site (les supers gestionnaires) peuvent créer des codes abrégés qui répertorieront toutes les établissements d\'une catégorie, comme le montre cette vidéo.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Administrateur de site affichant les établissements');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Vous ne gérez pas les établissements à partir de l\'administration : vous ne pouvez que gérer les établissements depuis le site. Toutefois, dans cette liste, vous pouvez voir les établissements en attente d’approbation (si la fonctionnalité est activée) et ceux qui sont incomplets (par exemple, il faut encore télécharger des images, prix etc). Cliquez sur le nom de l\'établissement à afficher dans le tableau de bord de cette établissement. Vous pourrez ensuite utiliser les sections du guide en haut de la page pour voir les étapes à suivre pour compléter et publier un établissement.</p> ');
