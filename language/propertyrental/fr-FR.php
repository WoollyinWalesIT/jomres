<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net> 
* @version Jomres 7stable 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Translated to fr-FR by Mario Oliveira, Camara de Lobos, Madeira Island, Portugal, 14Oct2010 - www.marioliveira.net. Updated 21-Jun2011 for version 5 stable
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','réservation rapide');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Afficher les profils');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configuration Générale');
jr_define('_JOMRES_COM_MR_BACK','Retour');
jr_define('_JOMRES_COM_MR_YES','Oui');
jr_define('_JOMRES_COM_MR_NO','Non');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Nouveau');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Nouvel établissement');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE',"Nouvel équipement d'établissement");
jr_define('_JOMRES_COM_MR_NEWGUEST','Nouveau client');
jr_define('_JOMRES_COM_MR_SAVE','Sauvegarder');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nom');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',"Arrivée");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Départ');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE',"Assigner des fonctions d'administration aux utilisateurs");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nom');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME',"Nom d'utilisateur");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Actuellement autorisé');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Établissement par défaut');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Modifier');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL',"Niveau d'accès");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Utilisateur modifié');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Réception');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN',"Responsable de l'établissement");
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Toutes les réservations');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nouvelles réservations (Dépôt impayé)');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editer la réservation : ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr./Dép.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Client');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Chambre');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Paiement');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Prénom');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nom');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Besoin(s) spécifique(s)');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Certains besoins spécifiques peuvent être facturés.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Annuler la réservation');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Numéro');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Rue');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ville');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Code Postal');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Numéro de téléphone');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Numéro de portable');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Adresse email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nous ne pouvons pas annuler cette réservation car le client occupe déjà les installations');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','La réservation n\'a pas été réglée');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON',"Confirmez l'annulation");
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','réservation annulée');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL',"jours avant l'arrivée");
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Type de réservation');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Indisponibilité');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Réception');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Nom de la chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Numéro de la chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Étage');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Accès aux personnes à mobilité réduite ?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. de personnes');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Type de chambre');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Description des types de chambres');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Liste des équipements de la chambre');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Dépôt payé');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',"Entrez le montant de l'acompte");
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total à régler');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',"Référence de l'acompte");
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Numéro de réservation');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Acompte');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Acompte sauvegardé');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Disponibilités :');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Établissement');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Type de la Chambre');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Editer les détails du client');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Prénom');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nom');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Numéro');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Rue');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Ville');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Code Postal');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Téléphone');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Téléphone portable');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Numéro de Carte de Crédit');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS',"Date d'émission");
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Votre carte expire le');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO',"Numéro d'émission");
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Nom sur la carte');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Réservationz');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Séjour');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',"Nombre d'Hôtes");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Afficher la configuration des chambres & des établissements');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Chambres');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Propriété Ch.');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Types Ch.');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Établissement');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','propriété du dispositif');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nom');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Numéro');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Étage');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Accès mobilité réduite ?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. de personnes');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Equipements');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Chambre ajoutée');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT',"Editer l\'élément");
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Dispositif Ch.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Description des propriétés');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Propriété de la chambre ajoutée');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Propriété de la chambre mise-à-jour');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Types de Chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Abrégé du type de la chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Description du type de la chambre');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Type de chambre ajouté');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Type de chambre mis-à-jour');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT',"Editer l'élément");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nom');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Rue');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Ville');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Région');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Pays');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Code Postal');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Site Internet');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Equipements');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Établissement ajouté');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Établissement mis-à-jour');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',"Equipement  de l'établissement");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',"Abrégé des dispositifs de l'établissement.");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',"Description complète de l'équipement de l'établissement");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT',"Equipement de l'établissement ajouté");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE',"Equipement l'établissement mis-à-jour");
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarifs');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Titre du Tarif');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Description');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Valide du ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO',"Valide jusqu'àu ");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Prix');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min. de jours');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max. de jours');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. de personnes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. de personnes');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Type de chambre');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorer le PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Autoriser les Week-Ends');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif ajouté');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif Mis-à-jour');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT',"Editer l'élément");
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE',"Cloner l'élément");
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif supprimé');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Editer le tarif');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Vacances scolaires');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Réservation enregistrée');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Enlever réservation');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lister les réservations');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Lister les NOUVELLES réservations');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Récapitulatif');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Administration des clients');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Administration des établissements');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Vérifier la disponibilité');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirmez vos informations');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Prénom');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nom');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Numéro');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Rue');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ville');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Code Postal');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Téléphone');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Numéro de Portable');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE',"Il n'y a aucune chambre susceptible de satisfaire les paramètres de votre recherche");
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE',"<center>Nous vous remercions d'avoir effectué votre réservation en utilisant nos services, nous vous souhaitons un excellent séjour.<br><br> <b>Veuillez cependant noter que vous venez d'effectuer une pré-réservation, et que celle-ci sera confirmée lorsque vous recevrez la lettre de confirmation que nous allons vous faire parvenir dans les plus bref délais.</center>");
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE',"Réservation faite pour l'établissement : ");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','réservation réalisée pour la chambre : ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Arrivée : ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Départ : ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nom: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Téléphone : ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Portable : ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Le montant de votre contrat est de : ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Réservationr un hôte');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Sélectionner un hôte');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN',"Réservation d'hôte effectuée ");
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN',"Aucune arrivée d'hôte n'est prévue aujourd'hui");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE',"Retirer la réservation d'un hôte ");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT',"Aucun départ d'hôte n'est prévu aujourd'hui");
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Suppléments');
jr_define('_JOMRES_COM_A_TARIFFS','Tarifs & Devises');
jr_define('_JOMRES_COM_A_DISCOUNTS','Réduction');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Charger un fichier');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Paramètre actuel');
jr_define('_JOMRES_COM_A_EXPLANATION','Explication');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Suppléments pour personne seule');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Assurez vous de sélectionner OUI si vous facturez un supplément pour les personnes seules');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Montant du supplément pour les personnes seules');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Un acompte requis en pourcentage?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC',"L'acompte doit être un pourcentage de la somme totale ? Si cela n'est pas le cas, vous devez alors indiquer le montant d'un acompte fixe");
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Montant requis pour un acompte');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Par personne - Par nuit');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC',"Sélectionnez OUI si vous voulez facturer Par personne - Par nuit. Si cela n'est pas le cas, Le montant doit être calculé sur une base Par chambre - Par nuit");
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Taille du fichier');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Taille Max. du fichier Image en Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED','Réservé');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','Lettre de Confirmation');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Cher(e) ');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Coût par nuit - par chambre');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Détails de votre réservation');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Nous vous remercions pour votre réservation avec');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2',". Vous trouverez, à la suite, le résumé de votre réservation. Veuillez vérifier si nous avons enregistré correctement toutes les informations nécessaires à votre réservation, si vous remarquez une erreur, n'hésitez pas à nous contacter.");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN',"Votre chambre sera tenue jusqu'à votre arrivée, vous pourrez alors en disposer après 14h.");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Nous nous réjouissons de vous accueillir le ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Nous espérons que vous aurez un excellent séjour.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Veuillez considérer les lignes suivantes.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Nous vous rappelons que la réservation fait office de contrat, donc si par aucune raison vous deviez annuler ou raccourcir la durée de votre séjour, vous resterez redevable de la totalité de la somme.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE',"Aucun remboursement ne peut être réalisé sur les repas non consommés ou pour les chambres non occupées sur toute la période de la réservation. Compte tenu de cette disposition et afin d'éviter tout désagrément, nous vous recommandons l'utilisation d'une police d'assurance pour vos vacances.");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO',"<i>Montant de l'annulation et de la terminaison du contrat</i> Si vous deviez annuler votre séjour, la confirmation d'annulation doit être faite par écrit. Le montant des charges d'annulation est de :");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 jours ou plus');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Un acompte seulement.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 à 30 jours');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% du contrat total.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Arrivée prévue dans les 14 prochains jours');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% du contrat total.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','La taxe de 19,6% est comprise dans tous nos tarifs. Toute augmentation ou modification sera facturée.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Imprimer une lettre de confirmation');
jr_define('_JOMRES_COM_INVOICE_TITLE','Impression de la facture');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Nombre de nuits: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contrat initialement accepté : ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Coût par nuit : ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Remerciements de votre client à');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Nous espérons vous revoir bientôt.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Imprimer la facture');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Ajouter le service à la note');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Description du service ');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Valeur du service');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Autres éléments facturés');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Autres éléments facturés, pour un total de : ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Elément ajouté à la note');
jr_define('_JOMRES_UPLOAD_IMAGE','Téléchargez une image');
jr_define('_JOMRES_FILE_UPLOAD','Charger un fichier');
jr_define('_JOMRES_FILE_ERROR_TYPE',"Vous n'êtes pas autorisé à charger des fichiers de type:\n");
jr_define('_JOMRES_FILE_ERROR_EMPTY',"Veuillez sélectionner un fichier avant d'effectuer le chargement");
jr_define('_JOMRES_FILE_ERROR_NAME',"Le nom de fichier ne doit contenir que des caractères alphanumériques et pas d'espaces, merci.");
jr_define('_JOMRES_FILE_ERROR_SIZE',"Le poids du fichier dépasse le poids maximum fixé par l'administrateur du site.");
jr_define('_JOMRES_FILE_NOT_UPLOADED',"Le fichier n'a pas été chargé.");
jr_define('_JOMRES_FILE_UPDATED','Votre fichier a bien été mis-à-jour.');
jr_define('_JOMRES_COM_A_JSCALENDAR','Calendrier JS');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','Fichier de langue pour le Calendrier JS');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC',"Choisissez le fichier de langue qui sera utilisé par le calendrier Javascript. Veuillez remarquer que certains fichiers peuvent avoir des erreurs. Pour plus d'informations http://sourceforge.net/");
jr_define('_JOMRES_COM_A_CALENDARCSS','Fichier de CSS pour JS Calendrier');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Choisissez le fichier CSS qui devra être utilisé pour le calendrier Javascript');
jr_define('_JOMRES_COM_A_ODDS','Divers');
jr_define('_JOMRES_COM_A_ERRORCHECKING','Cataloguer appels aux minicomposants');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Changez vers Oui pour voir une liste des minicomposants appelés au fond de la page, après que Jomres a été exécuté. Il désactive aussi la fonction interne de redirection, ce qui est utile si vous essayez d\'identifier quels minicomposamts font quels services.');
jr_define('_JOMRES_FILE_DELETE','Effacer cette image');
jr_define('_JOMRES_FILE_DELETED','Fichier effacé');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Supprimer');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE',"Il n'est pas possible de supprimer cette chambre, il y a déjà des réservations assignées. Annulez ces réservations et recommencez.");
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Chambre supprimée');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Supprimer les équipements de la chambre');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE',"Il n'est pas possible de supprimer l'équipement de cette chambre, il est déjà assigné à d'autres chambres. Supprimez l'équipement de ces chambres et recommencez.");
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Equipement de la chambre supprimé');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE',"Supprimer l'équipement de l'établissement");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE',"Il n'est pas possible de supprimer cet équipement, il est déjà assigné à un établissement. Supprimez l'équipement de cet établissement et recommencez.");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED',"Équipement de l'établissement supprimé");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Effacer le type de chambre');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS',"Il n'est pas possible de supprimer le type de chambre, il est déjà assigné à une autre chambre. Essayez de réassigner la chambre à un autre type/chambre et recommencez.");
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS',"Il n'est pas possible de supprimer le type de la chambre, il est déjà assigné à un tarif. Essayez de réassigner le tarif à une autre chambre et recommencez.");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Type de chambre effacé');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Effacer établissement');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED',"L'établissement a été effacé");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS',"Vous n'êtes pas autorisé à supprimer cet établissement.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE',"Largeur de l'image");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',"Carte d'accès");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',"Description de l'établissement");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',"Horaires d'arrivée");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',"Zone d'activités");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Accès par route');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aéroports');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Autres formes de transport');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Normes et renonces');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Les visiteurs peuvent réservationr en ligne');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Sélectionner OUI si vous voulez que les visiteurs puissent réservationr une chambre en ligne.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Les réservations sont établies pour une période fixe');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC',"Si vous sélectionnez OUI, la réservation sera activée pour une période fixe. Si vous sélectionnez NON, rassurez vous que la fonction  \"Jour d'arrivée prédéfini\" n'est pas activée à OUI (à moins que vous souhaitiez imposer une date d'arrivée fixe à vos hôtes) Sinon vous n'obtiendrez pas beaucoup de liens de disponibilité sur le calendrier.");
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Période de réservation: ');
jr_define('_JOMRES_COM_A_BOOKING','réservation des chambres');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Périodes Maximum, Ex. 3 x 7 périodes de réservation = 21 jours');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','C\'est un établissement avec des chambres individuelles');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Ex. Vous louez un établissement plutôt que des chambres. Si c\'est le cas, veuillez vous assurer que vous avez une chambre enregistrée pour chaque établissement.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Vérifier la réservation');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirmer la réservation');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Lundi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Mardi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Mercredi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Jeudi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Vendredi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Samedi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Dimanche');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Lun');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Mar');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mer');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Jeu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Ven');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sam');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Dim');
jr_define('_JOMRES_COM_A_AVLCAL','Calendrier disponible');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Couleur des caractères pour la date actuelle');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Couleur des caractères pour les jours affichés dans le mois ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Couleur des caractères pour les jours qui ne sont pas affichés dans le mois');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR',"Couleur d'arrière plan de la cellule pour les jours où l'établissement/chambre est disponible");
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR',"Couleur d'arrière plan de la cellule pour les jours non affichés dans le mois en cours");
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR',"Couleur d'arrière plan de la cellule pour les jours occupés");
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR',"Couleur d'arrière plan de la cellule pour les réservations provisoires (réservations pour lesquelles un acompte n'a pas encore été perçu)");
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR',"Couleur d'arrière plan de la cellule pour les jours antérieurs");
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY',"Occupé/pas disponible");
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponible pour réservations');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','réservations provisoires');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO',"Date d'arrivée prédéfinie");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Uniquement pour les sites offrant des périodes de réservation fixe. Choisissez le jour dans lequel les arrivées doivent démarrer.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY',"Jour d'arrivé fixé");
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Durée du séjour (en jours)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Afficher les disponibilités sous forme de calendrier ?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Sélectionnez OUI si vous voulez afficher le calendrier des disponibilités');
jr_define('_JOMRES_FRONT_AVAILABILITY','Disponibilité');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Cliquer sur une date libre pour accéder au formulaire de réservation.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nouvelle entrée d\'indisponibilité');
jr_define('_JOMRES_FRONT_DELETEGUEST',"Supprimer l'hôte");
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED',"L'hôte a été supprimé");
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST',"Ce n\'est pas possible de supprimer cet hôte car il y a déjà une réservation en cours. Annulez la réservation et recommencez.");
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Coût actuel de la chambre: ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Bonjour');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',"Nous vous remercions d'avoir réservé avec ");
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','un email de réservation vient de vous être envoyé de part de: ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS',"Si vous avez des questions concernant la réservation ou tout autre service, n'hésitez pas à nous contacter.");
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Notre numéro de téléphone est ');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Vous pouvez par ailleurs nous contacter par e-mail à :');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumeur');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Aucune préférence');
jr_define('_JOMRES_COM_CALENDAROUTPUT','Format de sortie du calendrier');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC',"Ceci permet à l'utilisateur de modifier l'affichage des dates dans Jomres");
jr_define('_JOMRES_COM_CALENDARINPUT',"Format d'entrée du calendrier");
jr_define('_JOMRES_COM_CALENDARINPUT_DESC',"Ceci permet à l'utilisateur de modifier l'entrée des dates dans Jomres.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Les réservations à période fixe permettent des courts séjours');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Durée du séjour');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publié');
jr_define('_JOMRES_COM_A_PAYPAL','Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Vérification rétrospective');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Date');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Heure');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Nom (utilisateur)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Opération');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Afficher les détails');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrer sur la date');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME',"Filtrer sur l'utilisateur");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION',"Filtrer sur l'opération");
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Texte adapté mis à jour');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Statut');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Arrivée en attente');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY',"Arrive aujourd'hui");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Résident actuel');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY',"Départ aujourd'hui");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Départ en retard');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Indisponibilités');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE',"N'est pas arrivé");
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Utilisateur inconnu');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','La chambre a été créée');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','La chambre a été mise-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','La chambre a été supprimée');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE',"L'équipement de la chambre a été créé ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE',"L'équipement de la chambre a été mis-à-jour");
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE',"L'équipement de la chambre a été effacé");
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Le type de chambre a été créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Le type de chambre a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Le type de chambre a été effacé');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY',"L'établissement a été créé");
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY',"L'établissement a été mis-à-jour");
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY',"L'établissement a été effacé");
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE',"L'équipement de l'établissement a été créé ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE',"L'équipement de l'établissement a été mis-à-jour");
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE',"L'équipement de l'établissement a été effacé");
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',"Paramètre de l'équipement modifié");
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Equipement publié');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Le tarif a été créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','le tarif a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','le tarif a été supprimé');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Montant svc. créé');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Introduire la réservation');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','sortir la réservation');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Un compte enregistré');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST',"L'hôte a été créé");
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST',"L'hôte a été mis-à-jour");
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST',"L'hôte a été supprimé");
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Réservationr une chambre');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Un extra a été crée');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Un extra a été mis-à-jour');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Un extra a été effacé');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA',"l'extra a été publié.");
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Liste des indisponibilités entrées.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Liste des indisponibilités effacées.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Description');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Nom');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Prix');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra mis-à-jour');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT',"Editer l'élément");
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Extra supprimé');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Gérer les extras');
jr_define('_JOMRES_COM_A_EXTRAS','Afficher les extras au moment de la réservation?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC',"Sélectionner OUI pour afficher les extras que vous voulez proposer à l'hôte");
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Extra/option.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Date de début de l\'indisponibilité');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Date de reprise en service');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Indisponibilités');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Il y a eu une erreur lors de votre tentative de réservationr ces chambres, une ou plusieurs ne sont pas disponibles.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Chambres inclues dans la Liste d\'Indisponibilités');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Afficher les réservations de la Liste d\'Indisponibilités');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS',"Il n'y a pas de réservations sur la Liste d\'Indisponibilités à afficher");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS',"Nombre d'étoiles");
jr_define('_JOMRES_COM_A_SMOKING',"Afficher l'option destinée aux fumeurs?");
jr_define('_JOMRES_COM_A_SMOKING_DESC',"Indiquez oui pour afficher l'option fumeur.");
jr_define('_JOMRES_COM_A_RESET','Remise à zéro');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','réservation annulée');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','Rechercher ici pour: ');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Option fumeur par défaut');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Symbole de la devise');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC',"Ex &amp;pound&#59; Veuillez considérer l'utilisation des codes au format HTML correspondant au symbol approprié. Pour une liste de ces Codes vous pouvez visiter <a href=\"http://www.w3schools.com/tags/ref_entities.asp\">w3schools</a>");
jr_define('_JOMRES_COM_A_CURRENCYCODE','Code de la devise');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Ex. GBP. Vous avez besoin des codes si vous voulez utiliser paypal. Pour obtenir une liste de ces codes vous pouvez visiter <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION',"Renseignements additionnels");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO',"Limiter les réservations à l'avance ?");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC',"Sélectionner OUI si vous voulez limiter les réservations à l'avance (utilisez le champ suivant pour entrer la limite en nombre de jours). Si vous sélectionnez OUI alors l'utilisateur qui souhaitera réservationr avant n jours à l'avance sera enregistré à la date d'aujourd'hui");
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS',"Le nombre de jours pour la réservation à l'avance est limité à: ");
jr_define('_JOMRES_COM_A_TAX_WARNING',"<font color=red>REMARQUE: l'activation à OUI des deux options suivante n'est pas recommandée, Vous devriez utiliser uniquement l'une des deux méthodes de calcul de la taxe qui vous est proposée. </FONT>");
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Taxe');
jr_define('_JOMRES_COM_A_ROOMTAX','Taxe pour la chambre');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC',"Produit pour le marché Américain. Ce sont les montants des taxes par chambre qui seront facturés à l'hôte. Vous pouvez facturer selon une combinaison et/ou de montant fixe et de pourcentage. Remarquez que ces montants ne sont applicables que sur le coût de la chambre.");
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Montant des taxes fixes');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Pourcentage de la taxe');
jr_define('_JOMRES_COM_A_EUROTAX','Taxe');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Pourcentage de la taxe');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Archiver tous les enregistrements');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Enregistrements archivés');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer les enregistrements archivés');
jr_define('_JOMRES_FRONT_TARIFFS','Nos Tarifs');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Nom du Tarif');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Description du tarif');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Type de chambre');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Valide du');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','au');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Par personne et par nuit');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Par nuit');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',"N'inclue pas les week-ends");
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum de jours');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum de jours');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minimum de personnes');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maximum de personnes');
jr_define('_JOMRES_FRONT_PREVIEW','Afficher');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Edition ?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','texte actuel');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Nouveau texte');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Mettre à jour le texte personnalisé.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Editer la langue');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Numéro d\'enregistrements non archivés: ');
jr_define('_JOMRES_FRONT_PTYPE',"Type d'établissement");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE',"Lister les types d'établissement");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT',"Editer le type d'établissement");
jr_define('_JOMRES_COM_PTYPES_PTYPE',"Types d'établissement");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC',"Description du type d'établissement");
jr_define('_JOMRES_COM_PTYPES_SAVED',"Types d'établissements sauvegardés");
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE',"Impossible de supprimer le type d'établissement. I est assigné à un ou plusieurs établissements, veuillez les réassigner  avant d'essayer de les supprimer");
jr_define('_JOMRES_COM_PTYPES_DELETED',"type(s) d'établissement(s) supprimé(s)");
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Rappel de paiement');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Pas de services supplémentaires à ajouter à la note');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Un acompte');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Somme totale');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Montant enregistré au moment de la réservation');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC',"Utilisez cette option pour décider ce qui sera facturé lors de la réservation. Choisisez le Un acompte, si un acompte doit être perçu ou le montant total si c'est celui qui doit être perçu.");
jr_define('_JOMRES_COM_MONTHSTOSHOW','Mois du calendrier à afficher');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','Dans la mise à disposition des chambres, combien de mois le calendrier doit-il afficher ?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signé pour le compte de ');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
jr_define('_JOMRES_COM_A_CANCEL','Annulé');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC',"Veuillez choisir la/les chambre(s) que vous voulez prendre, et les dates appropriées. <br>si une chambre n'a pas de marque \"vérifiée\", celle-ci ne pourra pas être insérée dans la Liste d'Indisponibles avant la fin ou l'annulation de la réservation.<br/> Lorsque vous avez choisi les dates appropriées, cliquez sur le bouton bleu \"appliqué\" pour revérifier la disponibilité de la chambre. ");
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Il semblerait que Joomla vous a déconnecté par inactivité</b> Veuillez vous reconnecter et réessayer.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Raison');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Utiliser les gateways de paiement ?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC',"Sélectionner OUI si vous voulez utiliser les services de gateways de paiement. <b>Remarque:</b>Ceci n'annule pas le calcul d'un acompte nécessaire à la réservation. Pour le désactiver vous devez modifier le thème utilisé pour afficher les chambre et supprimer dans le code les éléments se référant à Un acompte.");
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Veuillez sélectionner votre méthode de paiement.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway activée?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Paramètres des <i>plugins</i> modifiés');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Insérer les paramètres des plugins ');
jr_define('_JOMRES_FRONT_GALLERYLINK','Voir le site internet de cette propriété');
jr_define('_JOMRES_COM_A_GALLERYLINK','Lien extérieur');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Introduisez ici un lien vers votre propriété.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Carte de crédit vue');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Carte de crédit mise-à jour');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Editer la carte de crédit');
jr_define('_JOMRES_COM_A_EDITICON',"Editer la taille de l'icone");
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD',"Chargement d'images de l'établissements par lots");
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Images existant déjà dans le répertoire');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Diaporama');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Afficher le lien vers les diaporamas ?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Afficher les diaporamas en ligne?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE',"Largeur de l'image du diaporama");
jr_define('_JOMRES_FRONT_SLIDESHOW',"Images de l'établissement");
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',"Désolé, il n'y a pas d'images pour cet établissement");
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Afficher le lien vers les tarifs?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Fenêtres <i>popup</i> autorisées ?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Si vous avez sélectionné NON, le lien qui normalement aurait du ouvrir une fenêtre <i>popup</i> ouvrira en ligne à sa place. EXPERIMENTAL! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Charger images par lots');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO',"Utilisez ce formulaire pour charger les images de l'établissement par lots<br/><b>Remarque</b> Chaque image possédant le même nom sera ré-écrite. Veuillez remarquer aussi que ce formulaire ne charge pas les images pour une chambre spécifique ou le <i>log</i> de l'établissement. Vous devrez les charger à partir du centre de contrôle administrateur de l'établissement.<br/><b>Remarque</b> Les images chargées par ce formulaire seront transférées pour le répertoire /images/stories/jomres/*property_uid*. Si ce répertoire n'existe pas, il sera créé, à moins que vous ayez spécifié un répertoire différent dans le centre de contrôle.");
jr_define('_JOMRES_A_TABS_MISC','Divers');
jr_define('_JOMRES_A','Configuration du site');
jr_define('_JOMRES_A_GLOBALPFEATURES',"Utiliser les dispositifs globaux de l'établissement");
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Sélectionner OUI si vous voulez forcer tous les établissements a utiliser uniquement les dispositifs définis par le <i>webmaster</i>.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO',"pour assigner une image à ce dispositif vous devez charger, par avance, l'image du dispositif dans le dossier des dispositif d'établissement à /images/stories/jomres/pfeatures/. ");
jr_define('_JOMRES_A_ICON','Icône');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Sélectionner le <i>plugin</i> de recherche que vous voulez utiliser.');
jr_define('_JOMRES_FRONT_NORESULTS',"<b>Désolé, votre recherche n'a pas retournée de résultats. Veuillez modifier les paramètres de votre recherche.</b>");
jr_define('_JOMRES_AREYOUSURE','Etes vous certain de vouloir réaliser cette action?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Réservationr une chambre');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Réservationz cette annonce');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Numéro de sécurité');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Voir les tarifs en ligne ?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresse');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Détail');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Cliquez pour voir les disponibilités');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Voir les tarifs');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE',"Voir l'adresse avec ce lien");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE',"Voir l'annonce avec ce lien");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Voir les disponibilités avec ce lien');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Voir les tarifs avec ce lien');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Pourcentage du tarif');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Moyenne');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Sélectionnez le modèle de tarif');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Vous avez 2 choix de calcul du tarif. Au premier, 'tarif unique', permet d'offrir une variété de tarifs différents à l'hôte à la même taxe pendant tout le séjour. Ceci est utile si vous voulez divers tarifs différents pour la même date, par exemple tarif lit et petit déjeuner, et tarif lit petit déjeuner et dîner. Choisissez le tarif 'moyennes' si vous voulez ajuster vos prix en fonction de la date en question. Jomres trouvera tous les tarifs pour chaque jour de la réservation, les groupe ensemble et retourne la taxe moyenne pour la période de séjour");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Voir les dates de départ?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Sélectionnez non si vous ne voulez pas voir apparaitre la date de départ dans une boite de sélection. Conseillable seulement si vous savez ce que vous faîtes, car la date de départ dans les réservations sera toujours ajustée au jour suivant l'arrivée.");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Paramètres des limites');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Limitation du nombre de caractères visibles.");
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Format et style de la date?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Cliquez oui pour utiliser l\'ordre de date() (voir <a href="http://www.php.net/manual/en/function.date.php">ici</a>). Cliquez sur non pour utiliser strftime() (voir <a href="http://www.php.net/manual/en/function.strftime.php">ici</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Publier');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Annuler publication');
jr_define('_JOMRES_A_GLOBALROOMTYPES','type de chambre');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Mettre oui pour forcer toutes les configurations par le <i>webmaster</i>.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','Pour assigner une image à cet établissement il faut d\'abord charger une image pour le type de chambre dans le répertoire /images/stories/jomres/rmtypes/ . ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','ERREUR - Couleur du fond ');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Langue par défaut');
jr_define('_JOMRES_JAVASCRIPT_','Les champs marqués par une étoile sont requis.');
jr_define('_JOMRES_COM_SELFREGISTRATION',"L'utilisateur peut enregistrer les paramètres ?");
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC',"Utilisez cette option si vous voulez que l'utilisateur s'enregistre sans intervention de l'administrateur.");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','SVP introduisez le pays et la région de votre propriété.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Complétez votre profil.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',"Les champs marqués par une étoile sont requis.");
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Créer le compte');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Désolé, vous ne pouvez créer un compte. Vous devez être enregistré et en <i>login</i> sur le site avant de continuer.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Création du profil : ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER',"Pour l'utilisateur : ");
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR',"Montrer le calendrier avec l'année?");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Disponibilités depuis le début de cette année.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Nombre de chambres disponibles');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Retour sur le détail');
jr_define('_JOMRES_FRONT_ROOMTYPES','Type de chambre');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','limitation de recherche');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Convertir la grille de tarif avec Google?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Conversion du taux :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR',"Autoriser l'éditeur HTML pour les utilisateurs ?");
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS',"Utilisez ce formulaire pour effectuer votre réservation. Déplacez votre souris sur l'image du \"i\" pour plus d'information sur la colonne. Modifiez les particularités des réservations comme les dates d'arrivée ou de départ et les numéros des hôtes, puis sélectionnez la ou les chambres voulues depuis la liste. Cliquez sur n'importe quelle chambre disponible pour l'ajouter à la liste des réservations possibles. Quand vous aurez terminé, vous pouvez ajouter des services supplémentaires (option) et remplir le nom, adresse etc. Quand le formulaire soit prêt, confirmez votre réservation en cliquant soumettre (submit).");
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP',"Utilisez ce formulaire pour votre réservation. Le \"i\" vous fournit d'avantage d'information sur la colonne. Vous pouvez modifier vos souhaits (arrivée, départ, nombre de personnes) à tout moment. Quand vous aurez terminé, vous pouvez ajouter s'il y a lieu des options ou services supplémentaires et confirmer avec le bouton soumettre (submit).");
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Options de réservation');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Sélection de vos détails de demande de réservation');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilité ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Choisissez la ou les chambre(s) que vous voulez');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Vérifiez si cela est possible en ce moment.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Services en option');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Ajouter une ou des option(s) à mon séjour');
jr_define('_JOMRES_COM_PERDAY','Par nuit');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Votre adresse');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC',"Merci de remplir vos détails. Veuillez remarquer les champs obligatoires.");
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Disponibles');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Chambres sélectionnées :');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE',"<br>La date d'arrivée au plus tôt est le: ");
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Par nuit :');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total :');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','option(s) retenue(s) :');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Faire une réservation');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Taxe:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Remise:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Total avec option(s):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hôtes');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Merci de confirmer en cliquant pour ajouter votre sélection');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE',"J'annule et retire cette sélection");
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Types des hôte(s)');
jr_define('_JOMRES_VARIANCES_TYPE','Type');
jr_define('_JOMRES_VARIANCES_TYPE_TT',"Type d'hôtes, ex. adultes, enfants entre 5-10 ans, ou étudiants, etc ");
jr_define('_JOMRES_VARIANCES_NOTES','Remarques');
jr_define('_JOMRES_VARIANCES_NOTES_TT',"Remarques que vous voulez formuler quant au type d'hôtes ?");
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT',"Le nombre maximum d'hôtes de ce type qui peut être sélectionné dans ce formulaire.");
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','est un pourcentage');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','ce résultat est un pourcentage calculé sur la valeur de la chambre. Si vous indiquez non, alors la valeur que vous indiquez est simplement ajoutée ou retranchée de la valeur de base de la chambre.');
jr_define('_JOMRES_VARIANCES_POSNEG','Ajoutez la différence ?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Le résultat est ajouté ou retranché de la valeur de base la chambre. Si vous indiquez non, le rabais sera appliqué sur la base. ');
jr_define('_JOMRES_VARIANCES_VARIANCE','Différence');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','La valeur de la différence');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Type d\'ordre client modifiée');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Type de client validé');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Type de client effacé');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Type de client créé');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Type de client mis à jour');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Type de client mis à jour');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Montrer le lien vers la liste de chambres dans les détails de la propriété?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Montrer <b>uniquement</b> les disponibilités pour le calendrier/la liste des chambres ?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC',"Cliquez Oui pour désactiver l'affichage de l'entête et des détails, de façon à n'avoir que le calendrier de disponibilités dans la page de détails de la propriété. Destiné vraiment aux utilisateurs qui louent des propriétés mono-chambre (maisons, appartements).");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Intervalle minimum Arrivée-Départ');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC',"intervalle minimum de réservation entre la date d'arrivée et la date de départ.");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Le formulaire de réservation montre le numéro de la chambre');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Le formulaire de réservation montre le nom de la chambre');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Le formulaire de réservation montre le titre du tarif');
jr_define('_JOMRES_ORDER','Ordre');
jr_define('_JOMRES_REQUIREDFIELDS','Infos client');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING',"jours avant l'arrivée");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC',"Le nombre minimum de jours qui doivent passer, à partir de \"aujourd'hui\", avant la date d'arrivée.");
jr_define('_JOMRES_DTV','variations par type de dates');
jr_define('_JOMRES_DTV_DOW','Jour de la semaine');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE',"Type d'hôte par défaut");
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Nombre de personnes par défaut pour le premier type de client montré. Si vous utilisez les types de client, ce chiffre est le nombre de personnes sélectionné par défaut pour le premier type de client dans le formulaire de réservation.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Seulement les utilisateurs enregistrés peuvent effectuer des réservations en ligne?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Désolé, vous devez être un utilisateur enregistré pour pourvoir réservationr en ligne. Cliquez ici pour vous logger sur le site !');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Couleur des caractères pour les liens aux réservations en cours');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Limites du weekend');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','réservation validée');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','réservation en liste d\'indisponibilités');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP',"Arrondir l'acompte à la valeur supérieure?");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Facturer un acompte?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Les tarifs sont par semaine?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC',"Vous avez la possibilité d'enregistrer les tarifs soit comme étant des valeurs par nuit soit par semaine. Si vous les enregistrez par semaine, vous DEVEZ basculer cette option sur OUI.");
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Tarif par semaine');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING',"Date d'arrivée récurrente: ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC',"Quand l'option DATE D'ARRIVEE FIXE est activée, le nombre de dates qui peut être affiché dans la liste déroulante. Remarquez que la liste de dates ne fait pas inclusion d'aucune date si une réservation n'est pas possible à cause de réservations précédentes, et que cette liste sera deux fois plus longue que votre chiffre sélectionné, car elle aura un nombre similaire de dates dans son historique (où applicable)");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID',"L'option fumeur/non fumeur sélectionnée n'est pas correcte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID',"La date d'arrivée n'est pas correcte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID',"La date de départ n'est pas correcte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Votre réservation est trop courte. Notre établissement fixe le minimum de nuits à :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Votre intervalle est de :');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT',"La variante type d'hôte n'est pas correcte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS',"Sélectionnez le nombre et le type d'hôtes");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Vous êtes trop nombreux pour les tarifs. Veuillez nous contacter par mail ou téléphone.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS',"Vous avez choisi plus de chambres que vous n'avez d'hôtes! Cliquez sur une chambre pour l'enlever de votre réservation");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS',"Il y a trop d'hôtes pour les lits disponibles");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Il faut choisir une chambre supplémentaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Sélectionner une chambre');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME',"Introduisez votre prénom");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME',"Introduisez votre Nom");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO',"Introduisez le n° de porte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET',"Introduisez votre rue, chemin, impasse, avenue, etc.");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN',"Introduisez votre ville !");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION',"Introduisez votre région");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE',"Introduisez votre code postal");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY',"Introduisez votre pays !");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Le numéro de téléphone fixe est nécessaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Le numéro de mobile est nécessaire');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL',"L'adresse email est nécessaire");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID',"L'adresse email n'est pas correcte");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL',"Le nom de domaine de votre adresse email n'est pas valable !");
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Nous avons des disponibilités!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Aucune sélection');
jr_define('_JOMRES_BOOKING_NUMBER','N° de réservation');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok pour lancer la réservation, messages en arrière-plan');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Vider les variables du thème?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','A remplir pour réaliser un dump DHTML (vidange) des variables du thème (<i>template</i>) de toutes les variables de chaque fichier FRONTEND (visibles en frontal). Utile si vous voulez voir si un élément est disponible dans un certain thème.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Le montant est un pourcentage');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Indiquez Oui si la majoration pour une personne seule est un pourcentage. Si Non, le montant appliqué sera ajouté ou retranché du montant global.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST','Disponibilités/Tarifs');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Utilisez cette entrée pour limiter le nombre de chambres et de tarifs disponibles listés dans le formulaire de réservation. Indiquez 0 si vous ne voulez pas activer cette limitation.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Aucune disponibilité dans cette période !');
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW','');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING',"Mode d'édition global?");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Attention sur cette fonction. Si le mode global est activé, les changes de texte affecteront TOUS les établissements dans le système pour la constante que vous éditez.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Symbole monétaire global');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Composant enveloppé');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Sélectionnez oui pour envelopper le composant de façon à ne pas afficher les espaces module et en-tête');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER',"Super Manager d'établissements");
jr_define('_JOMRES_COM_WEEKENDONLY','Weekends seulement');
jr_define('_JOMRES_COM_WEEKENDDAYS','Jours du weekend');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Sélectionnez vos jours de weekend. Les tarifs permettant ou pas les weekends ce baseront sur ce paramètre pour générer la liste des chambres.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY',"Sélectionnez votre pays avant d'ajouter des informations sur l'établissement.");
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD',"Gardez les changes sur l'établissement avant de charger son image.");
jr_define('_JOMRES_TARIFFSFROM','Prix à partir de - ');
jr_define('_JOMRES_SEARCH_ALL','Tous');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Recherche par pays');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Recherche par région');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Recherche par ville');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Recherche par caractéristique');
jr_define('_JOMRES_SEARCH_BUTTON','Recherche');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Entrez le texte à rechercher dans la boite et cliquez sur le bouton.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Texte à rechercher: ');
jr_define('_JOMRES_SEARCH_AVL_INFO','Introduisez les dates de votre séjour et cliquer sur le bouton pour trouver les chambres ayant des disponibilités pour cette période.');
jr_define('_JOMRES_SEARCH_PTYPES','Lister tous les établissements par type');
jr_define('_JOMRES_SEARCH_RTYPES','Lister tous les établissements par type de chambre');
jr_define('_JOMRES_SORTORDER_DEFAULT','Défaut');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME',"Nom de l'établissement");
jr_define('_JOMRES_SORTORDER_PROPERTYREGION',"Région de l'établissement");
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN',"Ville de l'établissement");
jr_define('_JOMRES_SORTORDER_STARS','Étoiles');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Liste des établissements');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Détails établissement - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Formulaire de réservation');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON',"Changer l'adresse");
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-vérification de la disponibilité<br/>(La sélection des chambres sera réinitialisée)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-vérification de la disponibilité');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modification de vos extras en option');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changement de votre sélection de chambres');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Changement de votre adresse');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Désolé, un ou plus des champs adresse sont incorrects.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Image de la chambre');
jr_define('_JOMRES_CURRENCYFORMAT','Format monétaire');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Afficher des images pour les options du gérant');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Options de recherche');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Journaux disponibles');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES',"Pas d'entrée dans le journal, ce qui est normal, vous devez modifier manuellement jomres.php pour activer le journal");
jr_define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avancé');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Microgéré');
jr_define('JOMRES_COM_A_TARIFFMODE','Mode de configuration tarifaire');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Attention: Changer entre les différents types de tarification peut résulter en perte de données. Lisez ci-dessous sur ce sujet.</b>.
<br/><br/>
Vous avez trois options pour configurer vos tarifs.<br/>
Mode normal: Vous aurez un tarif pour chaque type de chambre, que sera valide pour les dix prochaines années.<br/>
Microgéré: Vous pouvez modifier les prix jour à jour pour chaque type de chambre/établissement. <br/>
Avancé: La \"vielle\" méthode de tarification Jomres. <br/>
<br/>
Les différents modes de tarification vous permettent de choisir la méthode qui convienne le mieux à chaque établissement.<br/>
Le mode normal est le plus simple mais il est le plus facile à comprendre car il crééra des références croisées entre chambres et tarifs vers types de chambre/établissement et vous permettra de configurer les chambres et les prix sur la même page.<br/>
Le mode microgeré vous permet de faire varier les tarifs jour à jour sans devoir gérer des tonnes de tarifs différents, ceci est fait en créant des références croisées entre un grand nombre de tarifs. Le résultat est un nombre de tarifs créés pour vous couvrant une certaine période, mais vous ne pouvez pas \"empiler\" les tarifs.<br/>
Le mode avancé vous permet de créer une chambre et de l'associer à un type de chambre. Vous pouvez alors créér un tarif et l'associer au type de chambre. Utiliser cette méthode permet \"d'empiler\" les tarifs les uns sur les autres. Par exemple, un type de chambre \"lit double\" peut avoir un tarif pour lit et petit déjeuner, et un autre pour lit, petit déjeuner et dîner. La méthode avancée demande un peu plus d'attention aux détails car il est possible de dissocier une chambre ou un tarif d'un type de chambre/établissement, ou de définir des dates valides mais incorrectes. Il offre cependant des options de configuration que les autres modes n'offrent pas.<br/>
<br/>
Comme les modes Normal et Microgéré demandent un paramétrage spécifique des chambres et tarifs pour le mode tarifaire, le système peut devoir réinitialiser certaines données pour rendre les configurations tarifaires existantes compatibles avec le nouveau mode tarifaire choisi.<br/>
<br/>
Normal -> Avancé. Pas de change. Les tarifs existants sont conservés.<br/>
Normal -> Microgéré. Tous les tarifs existants sont effacés.<br/>
Advanced -> Normal. Tous les tarifs existants sont effacés.<br/>
Advanced -> Microgéré. Tous les tarifs existants sont effacés.<br/>
Microgéré -> Avancé. Tous les références croisées entre les tarifs sont effacées, mais les tarifs eux mêmes sont conservés.<br/>
Microgéré -> Normal. Tous les références croisées et les tarifs sont effacés.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS',"Afficher la liste des chambres dans la page de détails de l'établissement ?");
jr_define('JOMRES_PROPERTYTYPE',"Type d'établissement");
jr_define('JOMRES_COM_A_SRPONLY','SRP (<i>single room property</i>=établissement à une seule chambre) seulement');
jr_define('JOMRES_MAXPEOPLEINROOM','Max personnes par chambre');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Max personnes par réservation');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Ajouter note');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Editer note');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Effacer note');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Voir notes');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nouvelle note ajoutée');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Note éditée');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Note effacée');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','Mes options');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lister les réservations');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Mes réservations');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Voir réservation');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Voir favoris');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE',"Vous n'avez pas encore ajouté de favoris!");
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Ajouter aux favoris');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE',"Type d'établissement");
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Établissements publiés sur le site');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Tarification intelligente');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ce <i>plugin</i> vous permet de configurer vos prix dynamiquement.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL',"La plupart des établissements recalculent le prix de leurs chambres en fonction du nombre de chambres d'un certain type qui sont disponibles sur les dates demandées. Ceci permet d'offrir des réductions sur un type de chambre au taux de remplissage faible pendant une certaine période de l\'année, ayant comme objectif d'attirer affaires qui seraient autrement perdus.<br/>Activer et configurer ce <i>plugin</i> vous permet d'offrir des tarifs ajustables basés sur le nombre de chambres d'un certain type qui sont disponibles dans l'établissement sur un jour donné.<br/> L'écart de jours détermine le nombre maximum de jours jusqu'à de la date d'arrivée, avant que les prix soient ajustés par cette fonctionnalité. Les options de pourcentage vous permettent de configurer le pourcentage de chambres qui doivent être disponibles avant que la réduction donnée soit appliquée.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD',"Seuil (nombre de jours entre la date d'arrivée et aujourd'hui)");
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Pourcentage de chambres occupées 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Pourcentage de chambres occupées 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Pourcentage de chambres occupées 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Pourcentage de chambres occupées 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Réduction %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' à été réduit à partir de ');
jr_define('_JOMCOMP_WISEPRICE_TO',' vers ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Tarif de la chambre sans remise ');
jr_define('JOMRES_COM_A_MAPSKEY','Clé API Google maps');
jr_define('JOMRES_COM_A_MAPSKEY_DESC',"Vous pouvez récupérer une clé Google maps API sur <a href=\"http://www.google.com/apis/maps/signup.html\" target=\"_blank\">Google maps</a>. Un fois votre clé copiée ici, Jomres affichera la carte dans la page de détails de l'établissement.");
jr_define('JOMRES_COM_A_USE_SSL','Utiliser SSL dans le formulaire de réservation?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','Vous devez vérifier si vous avez un certificat SSL valable pour ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Dernière minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Activez cette option si vous voulez offrir des remises de dernière minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Écart');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC',"Si pour une réservation faite la date d'arrivée est à moins de N jours de la date de réservation, alors la remise peut être appliquée");
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Remise');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','En pourcentage');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Une remise a été appliquée à cette réservation!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Le coût du séjour a été réduit de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Cet établissement offre une réduction dernière minute de ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' pourcent si vous réservationz pour arriver avant le ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE',' pourcent ou plus si vous réservationz pour arriver avant le ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Réservationz maintenant pour bénéficier de cet offre!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Information tarifaires détaillées');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC',"Choisissez Oui pour afficher une information tarifaire plus détaillée dans le <i>popup</i> de détail des tarifs de l'établissement");
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimiser les options de configuration');
jr_define('_JOMCOMP_AMEND','Modifier réservation - Sélection d\'établissement');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Choisir un nouvel établissement');
jr_define('_JOMCOMP_AMEND_HEADER','Contrat original :');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Acompte payé');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Acompte non payé');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Dépasser total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Dépasser acompte');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','Annuler');
jr_define('_JRPORTAL_CPANEL','Tableau de contrôle JRPortal');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Taux de commission par défaut');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC',"Choisir le taux de commission qui sera appliqué par défaut à un établissement dans l'éventualité où un autre taux de commission n'a pas été défini.");
jr_define('_JRPORTAL_CPANEL_LISTCRATES','Liste Taux de commissions');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Taux de commissions');
jr_define('_JRPORTAL_CRATE_TITLE','Titre');
jr_define('_JRPORTAL_CRATE_TYPE','Type');
jr_define('_JRPORTAL_CRATE_VALUE','Taux de commission');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Code monétaire');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','Liste d\'établissements');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME',"Nom d'établissement");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS',"Adresse de l'établissement");
jr_define('_JRPORTAL_PROPERTIES_LEGEND',"Les établissements dont la couleur de fond est rouge n'ont pas encore de taux de commission appliqué.");
jr_define('_JRPORTAL_STATS_PATETITLE','Statistiques');
jr_define('_JRPORTAL_STATS_STATTYPE','Statistiques pour: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Établissements - Clics');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Vues d\'établissement');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Nombre de réservations');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valeur des réservations');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Estimation des commissions');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Taux de commission');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','Liste de réservations');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id de l\'établissement');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id client');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id affilié');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id facture');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Total réservation');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id contrat');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Numéro contrat');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Code monétaire');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Créé');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archivé');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date d\'archive');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Ajouter un élément à la facture');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Gérant à facturer');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Établissement associé (si applicable)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valeur');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Élément inséré avec succès dans ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Voir commandes");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Erreur lors de l'insertion de l'élément dans ");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Erreur, vous n'avez pas précisé aucun valeur pour la facture");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER',"Vous pouvez avoir des fichiers de langues spécifiques aux types d'établissements en donnant le nom d'un sous-dossier dans la description, i.e. \"locationbateaux\" et en copiant un fichier de langue dans ce sous-dossier. Vous pouvez alors modifier les messages pour ce type d'établissement de façom à ce que chambres devienne, par exemple DVDs, etc...");
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1',"Vous ne pouvez pas effacer cet établissement car il est le seul auquel vous ayez accès. Si vous voulez le désactiver, veuillez utiliser la fonctionnalité annuler publication dans votre barre d'outils. ");
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2',"Si vous êtes sur une installation demo et que vous voulez passer sur la licence Jomres Solo (limitée à un seul établissement) vous devriez commencer par créer un nouvel établissement, puis l'effacer avant de changer votre clé de licence pour la clé de licence Solo, qui vous sera assignée lors de l'achat. ");
jr_define('_JOMRES_COM_EMAILERRORS',"Envoyer le journal des erreurs par email ?");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Choisissez Oui if si vous voulez notifier jomres.net automatiquement quand un message d'erreur est créé dans le journal. Ceci nous permet d'être proactifs dans notre approche de gestion des problèmes potentiels, espérant résoudre les problèmes avant que vous n'ayez eu même pas le temps de les remarquer. Remarquez que cette fonctionalité est désactivée sur 'localhost'. ");
jr_define('_JOMRES_COM_ISTHISANMRP',"Est-ce un établissement comme un hôtel/lit et petit déjeuner/pension? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Les options de configuration diffèrent selon si vous louez des chambres dans un établissement ou tout l'établissement ensemble. Choisissez MRP (<i>Multi Room Property</i>) si vous offrez des chambres, SRP (<i>Single Room Property</i>) si vous offrez l'établissement. ");
// Jomres v3.0.6
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"Utiliser la vérification d'adresse email Jomres? ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Force une vérification stricte sur les emails envoyés. Certains serveurs sécurisés lanceront une erreur interne 500 si vous essayez d'envoyer un email à une adresse non-existante. Activer cette option nous permet d'utiliser les fonctionnalités checkdnsrr de php avant d'essayer d'envoyer un email, ce qui évite ces erreurs 500. ");
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL','Total en hébergement');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS'," nuit(s) à ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM'," par chambre ");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Total amélioration de votre séjour (inc. taxe)");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Détail du prix");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Veuillez lire et accepter ");
jr_define('_JOMRES_CONFIRMATION_HEADER',"Un résumé de votre réservation est affiché ci-dessous.<br /> Pour changer la réservation, veuillez cliquer sur le bouton Modifier réservation. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"Si vous devez modifier les informations ci-dessus, veuillez cliquer ici");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Modifier réservation");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"Veuillez entrer ci-dessous vos demandes particulières.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Je confirme que l'information ci dessus est correcte et accepte les ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON'," par personne par nuit ");
// Jomres 3.1.10
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Fichier de langue par défaut");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choisissez le fichier langue par défaut, que Jomres doit utiliser au cas où la langue n'est pas choisie à travers Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	jr_define('_PN_OF','de');
if (!defined('_PN_START'))
	jr_define('_PN_START','Début');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Antér.');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Prochain');
if (!defined('_PN_END'))
	jr_define('_PN_END','Fin');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Résultats');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Remarquez que ceci n\'est pas un formulaire de réservation, mais que vous n\'envoyez qu\'un email.<br/>Introduisez le message que vous aimeriez envoyer à ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contacter l\'hôtel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Formulaire d\'enquête d\'établissement');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Merci de votre enquête, le message a été envoyé à l\'adresse email de contact de l\'établissement et copié pour votre adresse pour votre connaissance. Vous aurez une réponse aussitôt que possible.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' concernant ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Introduisez les caractères que vous voyez dans l\'image');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Je ne peux pas lire les caractères. Affichez une ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Envoyer');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nouvel image');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquête');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Sélectionnez votre logement demandé à partir de la liste à droite');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min. de chambres déjà sélectionné');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Nombre minimum de chambres déjà sélectionné sur le formulaire avant qu\'il soit possible d\'offrir une combinaison tarif/type de chambre. Ceci vous permet d\'avoir tarifs rebattues quand plus de N chambres deviennent sélectionnées.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max. de chambres déjà sélectionné');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Nombre maximum de chambres déjà sélectionné sur le formulaire pour faire arrêter l\'offre d\'une combinaison tarif/type de chambre. Ceci vous permet de ne plus offrir des tarifs rebattues quand plus de N chambres deviennent sélectionnées.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Remarques que des suppléments pour une seule personne définis ici ne seront pas utilisés si les suppléments pour une seule personne ont été définis OUI dans la configuration générale. Les définitions ici contenues sont une alternative à avoir des taux uniques concernant suppléments pour personnes seules, pas une addition aux SPS à taux uniques.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Disponible"); 
jr_define('_JOMRES_AVLCAL_QUARTER',"Quelques réservations");
jr_define('_JOMRES_AVLCAL_HALF',"Demi-réservé");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Majoritairement réservé");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Complètement réservé");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Préfix URL');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','Ceci est le premier item montré après le domaine - Changez pour ce que vous aimez le mieux - Si vous ne voulez pas l\'utiliser, laissez-le blanc');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Voir \'alias\' de l\'établissement');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','\'Alias\' de tâche de réservation');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','\'Alias\' de tâche de recherche');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Ajouter Pays à l\'URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Ajouter région à l\'URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Ajouter ville à l\'URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Ajouter type d\'établissement à l\'URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Ajouter nom de l\'établissement à l\'URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Annexer id de l\'établissement au nom de l\'établissement');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Si le nom de la propriété est défini vers NON, le id respectif ne sera pas utilisé. Si vous marques Oui, le URL semblera quelque chose comme fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Structure de recherche URL - Ajouter pays à l\'URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Structure de recherche URL - Pays par défaut');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Si tous vos établissement se trouvent dans un seul pays, vous ne voudrez pas le pays comme recherche - entrez un pays par défaut ici si vous voulez afficher un pays');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Structure de recherche URL - Ajouter région à l\'URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Structure de recherche URL - Région par défaut');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Si toutes vos propriétés se trouvent dans une seule région, vous n\'aurez pas la région dans la recherche - introduisez une région par défaut si vous voulez montrer une');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Structure de recherche URL - Ajouter ville à l\'URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Structure de recherche URL - Ville par défaut');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Structure de recherche URL - Type d\'établissement');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Structure de recherche URL - Type d\'établissement par défaut');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Utilisé à l\'URL si la recherche est faite pour tous les types de propriété');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Où she404sef n\'est pas installé, où bien vous n\'avez pas encore copié '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php vers '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Lorsque vous ayez installé sh404sef et/ou copié ce fichier, vous pourrez configurer vos URLs SEF à partir d\'ici. ');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Auto-détecter langue Javascript du calendrier');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Permettre l\'auto-détection de langue pour le calendrier Javascript? S\'il n\'est pas possible détecter la langue, il tombera sur la langue configurée ci-dessous');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Par semaine');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Par jour');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Par réservation');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Par personne par réservation');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Par personne par jour');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Par personne par semaine');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Par jours (min jours)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per jours X chambres sélectionnées');
jr_define('_JOMRES_REGISTRYREBUILD','Rétablir registre de minicomposants');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalement le registre des <i>plugins</i> Jomres est rétabli automatiquement toutes les fois que vous voyez le gérant de minicomposants et ajouter ou enlevez un <i>plugin</i>. Quand même, c'est possible que vous ne pouvez pas utiliser ces capacités par quelque raison. Vous pourrez donc utiliser cette fonction pour rétablir le registre manuellement. Si vous avez accès au gérant de <i>plugins</i> et de mises à jour, ce n'est pratiquement pas probable que vous aurez besoin de cette fonction. Vous aurez besoin de rétablir le registre de <i>plugins</i> chaque fois que vous ajoutez un mini-composant et n'ayez pas utilisé le Gérant de <i>Plugins</i> por le faire.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registre reconstruit avec succès');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Il y a eu un erreur en reconstruisant le registre de minicomposants. Vous devrez vérifier l\'erreur dans le <i>log</i> Jomres pour voir s\'il y a une référence de quoi a occasionné cet erreur.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Recherche par gamme de prix.');
jr_define('JOMRES_WORD_SAVING','Gardant...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Utiliser les détails combinés d\'établissement?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 a introduit les détails combinés d\'établissement, où toute la sortie de détails d\'établissements est envoyés vers un fichier de thème (composite_property_details.html). Si vous ne voulez pas utiliser cette capacité changez-la pour Non (seulement les utilisateurs éxistants devraient vouloir changer la définition comme ça, les nouveaux probablement voudront la laissez sur Oui)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','Celle-ci est une liste de tous les utilisateurs du système. Ceux qui ne sont pas gérants d\'établissement auront un icône d\'invité, les autres auront des icônes de réceptionniste/gérants/super-gérants d\'établissement.<br/>Quand Jomres est installé, "admin" est automatiquement ajouté comme gérant d\'établissement et considéré un utilisateurs autorisé.<br/>Non-super gérants d\'établissement doivent avoir au moins une propriété assignée, autrement ils verront un erreur quand ils essayent de se logger et utiliser Jomres.<br/>
À partir du moment où un utilisateur devient autorisé, vous pourrez éditer les profils, les assigner à des propriétés ou leur donner des privilèges de super-gérants.<br/>
Pour autoriser un utilisateur, cliquez sur la croix rouge près de son nom; pour leur enlever autorisation cliquez sur le signe de vérification vert.<br/>Pour assigner aux utilisateurs seulement des propriétés spécifiques ou privilèges de super-gérants, vous devez les donner autorisation, aprés cliquer sur le signe d\'édition (qui devient visible seulement après que vous leur ayez donné autorisations). Les utilisateurs qui auraient enregistré ses propriétés par eux-mêmes seront automatiquement assignés á ces propriétés. Super-Gérants d\'Établissement ont automatiquement privilèges sur toutes les propriétés, et il verront toutes les options de configuration même si l\'option de minimiser la configuration a été définie dans la Configuration do Site.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Ici vous pourrez associer un gérant à des propriétés. Rassurez-vous s\'il ne s\'agit pas d\'un super-gérant, que le gérant nommé aura au moins un établissement, autrement il y aura un erreur en se loggant. Pour donner à un réceptionniste/gérant de propriété des privilèges sur seulement quelques propriétés, rassurez-vous que l\'option Super-Gérant de propriété n\'est pas \'Oui\'.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Vous n\'avez pas encore fait aucune réservation encore!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Type de propriété');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Éditez le type de votre propriété');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Sélectionnez le type de votre propriété');
jr_define('_JOMRES_COM_LOGGING','Logging Jomres');
jr_define('_JOMRES_COM_LOGGING_WARNING','Ces options vous permettent d\'activer/désactiver logging dans Jomres. Erreurs en logging est toujours activé, mais autres <i>logs</i> tels que Réservations, <i>Gateway</i>, Système et Demandes peuvent être activés ou désactivés. Vous êtes alerté pour que <b>la capacité d\'activer ces loggings est données purement comme une façon de rendre <i>debugging</i> plus facile, mais comporte un risque de sécurité sérieux</b>, car c\'est facile pour des utilisateurs externes voir les <i>logs</i> sans être autorisés.  Vous êtes donc conseillé(e) de le laisser désactivé la plupart du temps. Si vous avez activé logging, lorsque vous l\'aurez désactivé vous devrez vous assurer que le directoire <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> ne contient pas aucun ficher de <i>log</i>. Remarquez que, activer logging signifie aussi ralentir considérablement votre système, car ceci rassemble une grande quantité d\'information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Logging de formulaires de réservation (Logs du moteur de réservations) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Logs de Gateway (par ex. paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Log de Demandes (toutes les demandes entrées au serveur)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Système (Log div.) ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','Portal JR (principalement pour enregistrer commission etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Votre enquête...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Liste de chambres du formulaire de réservation montre images des types de chambre');
jr_define('_JOMRES_COM_A_LISTLIMIT','Limite de Liste des Établissements/Propriétés');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','Nombre de propriétés à montrer dans la page après une recherche');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Service de recherche intégré');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Le service Jomres intégré de recherche permet aux utilisateurs rechercher parmi des propriétés selon une séquence de fonctions. Si vous avez déjà utilisé  les capacités de recherche Jomres dans Joomla vous serez à l\'aise avec ces définitions.<br/>Cette caractéristique nous permet d\'offrir recherche contenue dans Jomres, pour les utilisateurs qui, ou ne veulent pas utiliser des modules de recherche Joomla, ou utilisent autres systèmes de gestion de contenus qui n\'auraient pas des modules de recherche.<br/>Rappelez-vous que, si vous choisissez rechercher quelque chose à travers un lien (pas un <i>dropdown</i>) autres options de recherche ne seront pas établies, seulement l\'élément correspondant au lien où vous avez cliqué.<br/>Remarquez que, par défaut la disposition de cette recherche intégrée n\'est par très joli. Ceci parce que le fichier que fait la recherche doit agréger toutes les options possibles, quelques unes incompatibles. Pour améliorer la disposition et arriver à l\'aspect que vous désirez, vous aurez besoin d\'éditer le fichier <b>srch.html</b> au directoire <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activer cette caractéristique?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Si la caractéristique est activée, tous les demandes à Jomres qui montrent la liste d\'établissements signifient que les options de recherche sont aussi montrées.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Utiliser colonnes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Aucune option de recherche que vous ayez définie du type lien (tant qu\'applicable) seront montrées comme colonnes (ce qui veut dire, br mis à la fin du lien)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Colonnes de caractéristiques");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Le nombre de icônes de caractéristiques qui peut être vu avant qu\'un br est inséré vers la ligne suivante.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Rechercher région par <i>dropdown</i> de sélection combiné");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offrir un <i>dropdown</i> de recherche pour filtrer pays/régions/villes. Si vous allez utiliser cette option vous aurez mieux de ne pas utiliser la recherche région/ville ci-dessous.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Recherche par nom de propriété");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Montrer la recherche par nom de la propriété.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Montrer comme <i>dropdown</i>?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Sélectionnez Non pour montrer la liste comme liens");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Recherche par ville/région");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Montrer la recherche par région");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Montrer comme <i>dropdown</i>?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Sélectionnez Non pour montrer la liste comme liens");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Recherche par type de propriété");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Montrer la recherche par type de propriété");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Montrer comme <i>dropdown</i>?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Sélectionnez Non pour montrer la liste comme liens");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Recherche par type de chambre");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Montrer la recherche par type de chambre");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Montrer comme <i>dropdown</i>?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Sélectionnez Non pour montrer la liste comme liens");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Recherche par caractéristiques");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Montrer la recherche par caractéristiques");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Montrer comme <i>dropdown</i>?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Sélecter Non pour montrer la liste comme des images d\'outils et boîtes de vérification");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Recherche par description");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Montrer la recherche par description");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Recherche par disponibilité");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Montrer la recherche par disponibilité");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Montrer par gamme de prix");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Montrer la recherche par gamme de prix");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Accroissements de prix");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres regardera dans toutes les valeurs des tarifs et présentera une série d\'accroissements basés sur les spécifications définies ici.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Par défaut, si un établissement n\'est pas sélectionné à Jomres, une recherche est faite. Si cette recherche n\'a pas été déclanchée par un module de recherche, elle produira des résultats aléatoires (en le faisant exprès). Cette option permet de limiter le nombre de retours dans cette recherche aléatoire.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Définition el résultats des travaux automatiques (<i>cron jobs</i>)');
jr_define('_JOMRES_COM_A_CRON_DESC','Information de travail Pseudocron. La fonctionnalité pseudocron est nécessaire pour la manipulation de facturation et commissions.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Minicomposants <i>cron</i> installés. Pour un travail automatique individuel, utilisez les liens ci-dessous. Remarquez que les travaux automatiques (<i>cron jobs</i>) ne produisent aucune sortie de données, donc vous ne verrez pas aucune information sur la page. Référez-vous par contre à la liste de travaux ci-dessous.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','Méthode');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Si vous n\'avez pas accès aux travaux automatiques, définissez ceci comme minicomposant, autrement créez un travail automatique (<i>cron job</i>) et préparez-le pour exécuter <br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Montrer <i>logging</i> dans le <i>browser</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Fonctionne seulement si la méthode est définie comme minicomposant.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging activé');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Définissez Oui pour permettre logging. Les résultats seront affichés ci-dessous.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Logging verbeux');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Grandes quantités de sorties de logging');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Édition de thèmes');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','Cette fonctionnalité nous permet d\'éditer les thèmes de <i>frontend</i> Jomres sur le serveur, gardant les résultats dans la base de donnés. Caractéristique avancée, à utiliser de façon très soigneuse.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nom du thème');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Le thème a été adapté?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Champs adaptés');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Vous pouvez définir ici champs adaptés spécifiques qui seront affichés dans le formulaire de réservation.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','NomduChamp (sans espaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Valeur défaut');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Requis');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Quantité maximale');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Si la quantité maximale est définie de façon à être plus grande que 1, les hôtes verront un <i>dropdown</i> pour choisir la quantité d\'extras qu\'ils peuvent demander.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Émettre factures");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Taux");
jr_define('_JRPORTAL_TAXRATES_CODE',"Code du taux");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Description de taxe");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Vous ne pouvez pas éliminer ce taux.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Valeur du taux");
jr_define('_JRPORTAL_INVOICES_TITLE',"Factures");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Pas payées");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Payées");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Annulées");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Suspendues");
jr_define('_JRPORTAL_INVOICES_USER',"Utilisateur");
jr_define('_JRPORTAL_INVOICES_STATUS',"Statut");
jr_define('_JRPORTAL_INVOICES_RAISED',"Ramassées");
jr_define('_JRPORTAL_INVOICES_DUE',"En dette");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Souscription");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Total général");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Total renouvelé");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Fréquence de renouvellement");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Jour du mois, de renouvellement");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Code de devise");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Ligne d'articles");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nom");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Prix au départ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Quantité au départ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Rabais au départ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Total au départ");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Prix de renouvellement");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Quantité de renouvellement");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Rabais de renouvellement");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Total de renouvellement");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Code du taux");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Description du taux");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Valeur du taux");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Définitions Paypal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Code de devise (par éx. EUR)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Utiliser <i>sandbox</i>?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Votre adresse email Paypal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Remarque: Pour utiliser paypal vous devrez aller à votre compte Paypal et désactiver Autoreturn (Profil/Préférences de Paiement sur Website), et définir IPN (Profil/Préférences 'Instant Payment Notification')pour Activé sur l'URL:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Cette facture est en dette. Veuillez cliquer sur le bouton pour être emmené à Paypal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Surmonter les définitions standard du <i>gateway</i> Jomres?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Si l'option de surmonter les définitions standard Paypal est réglée pour Oui, plusieurs choses arrivent:  la Configuration Générale ne montre plus aucunes définitions <i>gateway</i>, et deuxièmement si une réservation est faite les définitions réglées ici sont les valables, donc le paiement est envoyé pour l'adresse introduit ici, pas pour le prédéfini sur la Configuration Générale.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Montrer ma facture");
jr_define('_JRPORTAL_COUPONS_TITLE',"Coupons de rabais");
jr_define('_JRPORTAL_COUPONS_DESC',"Codes de rabais peuvent être générés et passés aux les hôtes comme un stimulant pour faire plus de réservations. Valable dès et jusqu'au se réfèrent aux dates quand les réservations peuvent être acceptées, pas aux dates de la réservation elle-même.");
jr_define('_JRPORTAL_COUPONS_CODE',"Code de coupon");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Valable du");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Valable jusqu'au");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Montant du rabais");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Le rabais est en pourcentage");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Chambre seulement");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Le rabais s'applique seulement au prix de la chambre. Si défini Non, le rabais sera applicable au prix total de la réservation.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Erreur Sql quand essayant d'éliminer/ajouter un coupon");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Si vous avez un code de coupon, entrez-le ici et cliquez sur le lien "garder coupon" pour sauver les détails vis à vis votre réservation.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Garder coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon sauvé vis à vis la réservation');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Numéro de coupon pas trouvé');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Valeur du rabais du coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Réservation rabattue. Définition du code de coupon/valeur du rabais: ');
jr_define('_JOMRES_COM_CACHING','Utiliser la caractéristique de cache Jomres?');
jr_define('_JOMRES_COM_CACHING_DESC','Choisissez Non pour la désactiver.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Choisissez langues');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choisissez les options de langue à afficher sur le menu <i>dropdown</i>.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Afficher le <i>dropdown</i> de choix des langues?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Réservations échues et annulées');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR',"Cher(ère)");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Merci de votre enregistrement ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Votre nom d'utilisateur est: ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Votre mot de passe est: ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Veuillez vous logger pour voir vos réservations ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon gardé');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon éliminé');
// Not used yet
jr_define('_JOMRES_COM_GROWL','Utiliser messagerie Jomres');
jr_define('_JOMRES_COM_GROWL_DESC','Beaucoup de mises à jour gérant offrent <i>feedback</i> sous la forme d\'un message javascript quand la page est rechargée, utilisez cette option pour l\'activer/désactiver.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Nom d'utilisateur");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Mot de passe");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification ver le mobile numéro");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Utilisez le format 'code pays, numéro de mobile'. Par exemple, si vous avez un mobile utilisé en France ceci serait quelque chose comme '337979123456'. Laissez blanc si vous ne voulez pas recevoir des messages de nortification sur votre téléphone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Logiquement l'usage/test de ce <i>gateway</i> n'est pas possible avec un serveur privé (localhost), vous avez bsoin d'un serveur public actif.</b>
<br/>
<br/>
Pour utiliser le gateway Clickatell vous vez besoin d'un compte Clickatell et au moins une connexion enregistrée (API sub-product, ou sous-produit) entre votre application et le gateway. Chaque connexion est connue comme un sous-produit. Voici comment le faire:<br/>
<br/>
<b>Pas 1 - Enregistrez-vous pour un compte Clickatell</b><br/>
Si vous n'en avez pas encore, vous aurez besoin de vous enregistrer pour avoir un compte. Autrement, suivez directement vers le pas 2.<br/>
* Allez à http://www.clickatell.com/products/sms_gateway.php, et choisissez le sous-produit API approprié (méthode de connexion) que vous voulez utiliser (Central Clickatell (API))<br/>
* Clique sur l'hiper-lien enregistrer.<br/>
* Remplissez le formulaire d'enregistrement.<br/>
Après l'avoir soumis avec succès, vous serez automatiquement loggé dans votre nouveau compte et emmené à une page où vous pourrez ajouter votre connexion API.<br/>
<b>Pas 2 - Ajoutez une connexion API enregistrée (sous-produit)</b><br/>
Si vous n'êtes pas encore loggé à votre compte, vous devrez le faire à http://www.clickatell.com/login.php<br/>
* Sélectionnez \"Gérer mes produits\" dans le menu du sommet.<br/>
* Sélectionnez la connexion API que vous voulez utiliser (HTTP API) dans le menu <i>dropdown</i> ('Add Connection').<br/>
* Complétez le formulaire. Rassurez vous d'introduire l'IP bloqué(l'IP de ce serveur), définissez <i>Callback</i> comme HTTP POST. Vous aurez besoin de définir l'adresse callback comme ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback plus un nom d'utilisateur et un mot de passe.<br/>
Si vous avez enregistré plus d'une connexion API, le nom descriptif que vous introduisez pour chacune doit être unique - vous ne pouvez pas avoir plusieurs API avec le même nom.<br/>
Après avoir soumis le formulaire avec succès, les détails de votre autorisation seront affichés, y inclus l'ID API de chaque connexion. Ces détails d'authentification sont nécessaires quand vous vous connectez au gateway Clickatell pour envoyer un message.<br/>
<br/>
Utilisez votre nom d'utilisateur, mot de passe et api_id pour remplir les champs ci-dessus.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Liste de chambre du formulaire de réservation affiche accès indisponible');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Liste de chambre du formulaire de réservation affiche max. personnes');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Veuillez remarquer que les prix des chambre montrés sont estimatifs et que le prix total de la réservation ne sera calculé que quand vous aurez ajouté une ou plusieurs chambres dans votre sélection.");
jr_define('_JOMRES_LASTEDITED_DB','Thème de base de donnés édité la dernière fois');
jr_define('_JOMRES_LASTEDITED_DISK','Thème de disque édité la dernière fois');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Avis de thème de base de donnés');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Thème de base de donnés peut être démodé');
jr_define('_JOMRES_LASTEDITED_WARNING','S\'il y a un icône contre un thème, ceci signifie que Jomres a trouvé que le thème gardé dans la base de donnés <strong><i>peut</i></strong> être antérieur à celui gardé dans le disque, alors c\'est possible que le thème a été mis à jour par une nouvelle version de Jomres. Si c\'est le cas, c\'est possible que votre thème peut ne pas avoir des bénéfices introduites par la nouvelle version de Jomres, or que la fonctionnalité existante peut ne pas marcher comme attendu. Vous devrez comparer le fichier en disque avec vos changes pour vous assurer que vous ne ratez pas aucun perfectionnement.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Paquets de souscription");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nom");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Publié");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Fréquence");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Période expérimental");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Montant d'expérience");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Montant total");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Limite de chambres"); // Pas utilisé encore, gardé pour une opportunité future
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limite d'établissements");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Fréquence: M/T(Q)/B/A Mensuel/Trimestriel/Biannuel/Annuel");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Période d'expérience: Entrée d'un chiffre entier, 0 (zéro) pour ne pas définir, 1 pour un mois, 2 pour deux mois, etc");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Souscrire");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Introduisez/mettez à jour votre information de souscription. Remarquez que tous les champs sont obligatoires.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Prénom");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Nom");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adresse");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Pays");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Code postal");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Vous avez besoin d'une souscription valable pour créer des nouvelles propriétés. Jusqu'à présent vous avec acheté souscriptions pour ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," propriété(s) publiée(s). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Vous pourrez augmenter le nombre de propriétés que vous pouvez créer en <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>achetant plus de souscription ici</a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," Vous avez utilisé ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," emboîtures de propriété. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Pour voir une liste de vos propriétés courantes cliquez <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>ici</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Pour voir une liste des paquets de souscription disponibles à présent, cliquez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>ici</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Malheureusement, vous ne pouvez pas publier cette propriété, car vous avez atteint le numéro maximum de places pour introduire propriétés.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Merci de vous avoir souscrit pour afficher votre propriété dans notre serveur. Après que votre facture est reportée comme payée (ceci peut entraîner quelque délai dépendant de Paypal) veuillez <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>cliquer ici.</a>pour continuer à publier votre(vos) propriété(s)");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Nous regrettons que vous ayez décidé de ne pas souscrire notre service. Veuillez nous communiquer s'il y a quelque autre chose que nous pouvons faire pour vous aider");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Nous regrettons, mais vous avez atteint la limite du nombre de propriétés que vous pouvez afficher sur notre système à la fois. Vous pourrez augmenter le nombre de propriétés que vous pouvez publier <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>achetant des souscriptions additionnelles ici</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Utiliser la fonctionnalité de gérance de souscriptions");
jr_define('_JOMRES_COM_NEWUSER','Créez un nouveau utilisateur en réservant');
jr_define('_JOMRES_COM_NEWUSER_DESC','Créez un nouveau compte d\'utilisateur lors d\'une réservation par quelq\'un pas enregistré.');
jr_define('_JOMRES_CLICKTOREGISTER','Cliquez ici pour enregistrer votre propriété');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Souscriptions actives");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id de <i>gateway</i> souscription");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Merci de votre réservation - détails de nouveau utilisateur suivants");
jr_define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
jr_define('_JOMRES_CONTROLPANEL','Tableau de contrôle');
jr_define('_JOMRES_COM_FAUXHEADERS','Afficher les sorties des entêtes Jomres javascript dans le corps de l\'html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Définir Oui si vous avez des problèmes avec des conflits entre mootools et jQuery de Jomres à IE. Ceci force la sortie d\'appels Javascript dans le corps de la page au lieu de la zone d\'entête, qui semble résoudre le problème.');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Afficher facture');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Afficher factures');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Ajouter ma propriété à ce site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Avis: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Vous pourrez avoir un paquet gratuit sur le système si vous voulez, en créant un paquet et définissant le montant d'essai et le montant total comme 0.00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Nous regrettons, mais ce paquet n'est pas reconnu.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Nous regrettons, mais vous avez déjà souscrit un paquet gratuit, et vous ne pouvez pas le faire de nouveau.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Statut <b>0:</b> Paiement pendant <b>1:</b> Crée <b>2:</b> Annulé <b>3:</b> Echéance");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Mon Compte");
jr_define('_JOMRES_COM_YOURBUSINESS','Vos détails d\'affaires');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','Nom commercial');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','Nombre TVA');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Nr de porte');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>REMARQUE: Les taux suivants sont utilisés pour le marché américain. Si vous voulez utiliser un taux constant (par exemple TVA) pour votre établissement, veuillez choisir un taux à partir de l\'option ci-dessus.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Facture No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Sélectionez les dates dans lesquelles vous voulez appliquer l\'interdiction de réservationr. Après, cliquez sur le bouton "Appliquer" pour revérifier l\'indisponibilité. <br/> 
<br/> 
Si l\'établissement a un ou plusieurs réservations pour la période mentionnée, vous ne pourrez pas annuler la réservation jusqu\'à ce que les autres réservations/indisponibilités ont été annulés/remarquées.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Nous regrettons, vous ne pouvez pas faire cette propriété devenir indisponible pour les dates indiquées.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Vous pouvez faire cette propriété devenir indisponible pour ces dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Votre propriété est configurée pour charger par personne par nuit, mais vous n\'avez pas crée ou affiché encore aucun type d\'hôte. Veuillez créer e publier au moins un type d\'hôte. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Vous n\'avez pas encore aucun tarif configuré, donc vous ne pourrez pas avoir aucune réservation pour votre propriété.');
jr_define('_JOMRES_EDITINGMODE_ON','Mode d\'édition activé');
jr_define('_JOMRES_EDITINGMODE_OFF','Mode d\'édition désactivé');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charger dépôts variables?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Dépôts variables vous permettront de définir si vous aimeriez charger le montant total si la date d\'arrivée de la réservation tombe dans une période de N jours à partir d\'aujourd\'hui. Veuillez la définir Oui pour activer cette caractéristique, et introduisez le nombre de jours ci-dessous; par exemple, si l\'arrivée est dans 60 jours, alors le montant du dépôt chargé sera le total, autrement le montant sera basé sur les options de dépôt configurées ci-dessus.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Nombre de jours pendant lesquels le montant total sera chargé comme dépôt.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Envoyer emails de contact propriétaire pour adresse alternative?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Définissez Oui si vous voulez que les emails de contact avec le propriétaire soient envoyés pour l\'adresse ci-dessous. Autrement, ils seront envoyés vers l\'adresse défini dans la zona de configuration de l\'établissement.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Adresse alternative pour emails de contact avec le propriétaire.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Email de confirmation envoyé. Vous pouvez maintenant fermer cette fenêtre.');
jr_define('_JOMRES_REALESTATE_TITLE','Liste de propriétés pour vente');
jr_define('_JOMRES_REALESTATE_YESNO','Est cette propriété pour vente?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Sélectionnz Oui8 si vous voulez vendre cette propriété, Non s\'il s\'agît d\'un établissement du type hôtel/b&b/maison d\'hôtes/villa relativement à laquelle on offre des chambres à louer et qui utilise ce système pour accepter des réservations.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Agent de contact');
jr_define('_JOMRES_INVOICE_MARKASPAID','Marquer facture payée');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Facture marquée comme payée');
jr_define('_JOMRES_APIKEY_REMAKE','Obtenir nouveau clef API');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Utiliser Google pour traductions initiales?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','Cette caractéristique est nouvelle et encore expérimentale, donc utilisez-la à votre risque. L\'objectif de cette caractéristique et de demander à l\'outil spécifique Google de déclencher automatiquement des traductions pour un établissement. Remarquez que cette caractéristique purge toute entrée, donc si vous utilisez un éditeur html pour formater les détails de votre propriété, ce format deviendra sans effet.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Cette installation est pour une seule propriété?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Si cette option est définie comme Oui, la vue <i>front end</i> de Jomres aux utilisateurs non autorisés devient très simplifiée. Les demandes à Jomres par défaut à partir d\'une option de menu, au lieu d\'avoir comme réponse une liste de propriétés, simplement emmène l\'hôte au formulaire de réservation du système. Gérants de propriété ne verront pas aussi le bouton de prévision des détails de propriété ou le bouton d\'ajouter une nouvelle propriété. L\'idéal si vous ne voulez qu\'afficher une propriété et en accepter des réservations.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER','Utiliser la fonctionnalité de purifier l\'HTML?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Activez ceci pour permettre à Jomres utiliser la bibliothèque de purification d\'html (http://htmlpurifier.org/). La bibliothèque est utilisée comme une couche additionnelle de sécurité en ce qui concerne donnés d\'entrée et de sortie, est c\'est recommandé de la laisser active, malgré qu\'elle utilise plus de mémoire.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Solde en paiement');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Solde');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Remarquez, vous allez utiliser le Mode Édition ensemble avec le Mode Global d\'Édition actif. Ce qui est bon si vous savez ce que signifie le Mode Global d\'Édition, mais mauvais si vous n\'êtes pas au courant, ce qui peut occasionner des problèmes. Si vous n\'êtres pas sur d\'utiliser Jomres comme ça, veuillez voir <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">la page du manuel sur Mode d\'Édition</a> pour renseignements additionnels sur ce sujet.');
jr_define('_JOMRES_SUPPORTKEY','Clef de support');
jr_define('_JOMRES_SUPPORTKEY_DESC','Le numéro de clef de votre licence de support (ausi connu comme numéro de licence). Vous aurez besoin d\'une licence valable pour pouvoir décharger des mises-à-jour et <i>plugins</i> de Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Rabais personnel');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limiter l\'enregistrement de propriétés à un seul Pays?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Vous pouvez vous assurer que l\'enregistrement de propriétés soit limité à un seul Pays, en définissant cette option comme Oui et le Pays en question dans l\'option suivante.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Les propriétés sont localisées dans ce Pays: ');
jr_define('_JOMRES_JQUERYTHEME','Thème Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC','Choisissez un thème jQuery à utiliser dans les séparateurs de détails de propriété.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Nous regrettons, mais cette propriété n\'est pas couramment disponible.');
jr_define('_JOMRES_REVIEWS','Classification');
jr_define('_JOMRES_REVIEWS_TITLE','Revoir titre');
jr_define('_JOMRES_REVIEWS_DATE','émis le ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Il n\' y a pas de classification encore pour cette propriété.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Aimeriez-vous être le premier à donner une classification?');
jr_define('_JOMRES_REVIEWS_IAGREE','Je suis d\'accord avec cette classification');
jr_define('_JOMRES_REVIEWS_IDISAGREE','Je ne suis pas d\'accord avec cette classification');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Classification moyenne: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Total de votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Ajouter une classification.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Vous avez besoin d\'être en login pour donner une classification.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Dites-nous ce que vous pensez de cet établissement: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Cet hôte nous a dit: ');
jr_define('_JOMRES_REVIEWS_PROS','Faveur: ');
jr_define('_JOMRES_REVIEWS_CONS','Contre: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Soumis le: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Vous avez déjà classé cet établissement, donc vous ne pouvez pas le faire de nouveau.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Nous regrettons, mais vous n\'êtes pas autorisé à donner classifications sur ce site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Cliquez pour montrer classifications');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' hôtes sont d\'accord avec cette classification. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' hôtes ne sont pas d\'accord avec cette classification.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' hôte est d\'accord avec cette classification. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR',' hôte n\'est pas d\'accord avec cette classification.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Merci d\'avoir partagé votre opinion à travers cette classification.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Remerciements, mais vous avez déjà partagé votre opinion sur cette classification.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Rassurez-vous que tous les champs ont été remplis.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Veuillez abréger votre classification introduisant un titre');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Veuillez introduire une classification plus détaillée dans la boîte descriptive suivante');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Introduisez les bons morceaux d\'avoir été un hôte dans cet établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Introduisez aucune pensée négative que vous pourriez avoir eue de votre expérience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Classez l\'hospitalité que vous avez reçue du personnel');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Classez ce que vous pensez de la localisation de l\'établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Donnez votre opinion sur la netteté de l\'établissement');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Classez l\'hébergement. Était-il confortable ou seulement passable');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Donnez votre opinion s\'il a justifié l\'argent dépense');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Classez les services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Sommaire de la classification');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Votre expérience plus détaillée');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Merci de nous avoir livré votre classification.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Merci de nous avoir donné votre classification. Elle sera publiée bientôt par un de nos modérateurs en service.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Utiliser code de monnaie global?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Définissez Non pour forcer toutes les propriétés à utiliser le même code de monnaie (par ex., & # 8 3 6 4 ;)');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Utiliser la fonctionnalité de classification Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Publier automatiquement les classifications?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Si vous définissez comme Non, vous aurez besoin de publier les classifications manuellement');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Définir classifications comme en mode essai?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalement les gérants de propriété ne peuvent pas classer les établissements. Si le mode essai est activé, ils peuvent le faire. Naturellement, ceci n\'est pas l\'idéal dans un environnement de travail normal.');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Hôtes par chambre : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Hôtes par réservation : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Numéro de chambres');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Voici une liste de toutes les propriétés. Pour donner suite aux classifications d\'une propriété, cliquez sur cette propriété. À partir de ce point vous pourrez publier ou annuler une classification.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Numéro de classifications pas publiées');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total de classifications');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publier/Annuler la classification');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Éliminer classification');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Déférer la classification');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Revoir déferrements');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Introduisez votre déferrement');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Voyez-vous dans cette classifications quelque chose objective ou inexacte? Déférez-la et nous nous en occuperons.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Soumettre');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Déferrement crée par ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Déferrements sont émis par des utilisateurs qui peuvent ne pas être d\'accord avec le contenu d\'une classification. La seule façon d\'éliminer un déferrement est éliminer la classification.');
jr_define('_JOMRES_REVIEWS_RATING','Points (1 = pauvre 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitalité  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Localisation ');
jr_define('_JOMRES_REVIEWS_RATING_3','Netteté ');
jr_define('_JOMRES_REVIEWS_RATING_4','Ébergement ');
jr_define('_JOMRES_REVIEWS_RATING_5','Il vaut la peine ');
jr_define('_JOMRES_REVIEWS_RATING_6','Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Classé par : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Cacher classifications');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Afficher le formulaire de réservation dans la page de détails de l\'établissement?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Définissez Oui pour montrer le formulaire de réservation dans la page de détails de la propriété. Si vous marquez Non, un lien sera visible das cette page menant vers le formulaire.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Les prix comprennent le taux?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Les prix le comprennent? Si vos prix font inclusion du taux, sélectionnez Oui, autrement Non.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Taux sur extras:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Le champ jour de la semaine vous permet de définir une date pour un jour de semaine précis, quand vous cliquez sur le bouton jour de la semaine tous les jours de la semaine seront associés à ce taux.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Les sélecteurs de date et l\'introduction du taux vous permettent de définir un prix pour une séquence de dates précise. Choisissez une date de début et de fin, introduisez un prix, et appuyez sur le bouton Définir Taux.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Date de début');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Date de fin');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Taux');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Définir taux');
jr_define('_JOMRES_PARTNERS_TITLE','Partenaires');
jr_define('_JOMRES_CALENDAR_TODAY','Aujourd\'hui');
jr_define('_JOMRES_CALENDAR_PREV','Antérieur');
jr_define('_JOMRES_CALENDAR_NEXT','Suivant');
jr_define('_JOMRES_CALENDAR_RTL','faux');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Chambre ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','hôte(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','Voici comment nous avons associé vos hôtes aux chambres. Si vous aimeriez changer cette association, vous devrez contacter l\'hôtel après avoir complété la réservation. Ceci peut entraîner des frais extra.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Remarquez que votre propriété n\'est pas publiée encore; seulement vous pouvez la voir, pas les visiteurs du site");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Ordre par défaut de résultats de la recherche');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Changez cette option pour modifier l\'ordre après laquelle les résultats de la recherche seront présentés par défaut.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Montrer <i>dropdown</i> d\'ordre de résultats de recherche');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Type de liste des chambres');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','Dans le formulaire de réservation, utilisant le type de liste de chambre "classique" vous offrez aux hôtes chambres individuelles. Avec la vue par type de chambre, les hôtes choisissent le numéro de chambres du type X (par éx., 2 x doubles)');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classique');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Types de chambre');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)vérifier disponibilité');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Reconstruisant la liste de chambres disponibles');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculant totaux');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finissant mis-à-jour du formulaire');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Quel jour de calendrier pour commencer la semaine, Dimanche ou Lundi');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Seulement les hôtes de la propriété peuvent donner classification?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Définissez Oui si vous voulez limiter classifications seulement aux utilisateurs qui ont été hôtes dans la propriété.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Par chambre');
// v 4.5.7 - adicionado?
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Hôtes par chambre: ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Hôtes par réservation: ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Nombre de chambres');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tarif prix par défaut');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Ceci concerne seulement nouveaux tarifs");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Années à afficher");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Détermine le nombre d'années à voir lors de l'édition du tarif <i>micromanage</i>");
jr_define('_JRPORTAL_MONTHS_LONG_0','janvier');
jr_define('_JRPORTAL_MONTHS_LONG_1','février');
jr_define('_JRPORTAL_MONTHS_LONG_2','mars');
jr_define('_JRPORTAL_MONTHS_LONG_3','avril');
jr_define('_JRPORTAL_MONTHS_LONG_4','mai');
jr_define('_JRPORTAL_MONTHS_LONG_5','juin');
jr_define('_JRPORTAL_MONTHS_LONG_6','juillet');
jr_define('_JRPORTAL_MONTHS_LONG_7','août');
jr_define('_JRPORTAL_MONTHS_LONG_8','septembre');
jr_define('_JRPORTAL_MONTHS_LONG_9','octobre');
jr_define('_JRPORTAL_MONTHS_LONG_10','novembre');
jr_define('_JRPORTAL_MONTHS_LONG_11','décembre');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Procès de gérance de propriété");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Il y a des procès différents, en fonction de la façon d'afficher la liste de votre propriété/établissement.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Loyer");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choisissez l'option loyer si vous rendez des chambres disponibles dans une propriété (par éx., hôtel/B&B/Villa/Appartements)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Liste simple de vente");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choisissez l'option vente si vous n'offrez aucune chambre pour réservationr (par éx.,. une propriété/article pour vente)");
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Définissez Oui pour réduire le nombre d\'options disponibles aux gérants de propriété dans la section de Configuration Générale. Ceci est utile si vous ne voulez pas que les gérants de propriété voient trop de définitions, au lieu de ça vous pourrez éditer jomres_config.php pour définir des options de propriété par défaut.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Veuillez sélectionner une option pour votre réservation');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Déclenche les éditeurs html dans la page d\'édition des détails de propriété. En plus, si défini Non, tous les signes html à l\'exception de p et br sont purgés du texte introduit et montrés comme texte.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Vue de gérance de propriété");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Vue de prévision du site");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Montrer le choix de zone horaire dans la barre d\'outils du gérant de propriété?");
jr_define('_JOMRES_PARTNER_DISCOUNT',"Rabais de partenaire ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Rechercher utilisateur");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduisez quelques lettres pour rechercher un utilisateur.<br/> Quand vous sélectionnez un utilisateur vous l'ajouterez automatiquement comme Partenaire et vous serez emmené à la page suivante, où vous pourrez lui assigner propriétés et rabais.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Partenaires courants");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choisissez un partenaire pour être emmené à la page d'administration de partenaires.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partenaire :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Rechercher une propriété");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Introduisez quelques lettres du nom de la propriété et sélectionnez une.<br/> Après l'avoir sélectionnée vous l'ajouterez au portefeuille du partenaire, mais il n'aura pas encore aucun rabais, vous devrez le définir vous-même.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Propriétés courantes");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Cliquez sur une propriété pour éditer les définitions de rabais pour le partenaire concernant cette propriété.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Suspendu? <br/>(cliquez pour suspendre un gérant, ce qui fera devenir non-publiées toutes ses propriétés ) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Cliquez sur l'icône Suspension(ce qui montre l'homme et le symbole vert) pour suspendre um gérant. Ceci signifie qu'il ne pourra pas éxercer des fonctions de gestion et que ses propriétés deviendront pas publiées. Super-gérants de propriété ne peuvent pas être suspendus.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"Ce compte a été suspendu, vous ne pouvez plus administrer votre (vos) propriété(s) par ce compte.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Compte de gérant suspendu");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Compte de gérant réactivé");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Veuillez remarquer que votre compte de gérant de propriété a été suspendu. Vous ne pourrez pas accomplir aucune tâche de gérence jusuqu'à ce que le compte aura été rétabli.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Veuillez remarquer que votre compte de gérant de propriété est maintenant actif. Vous pourrez continuer à accomplir des fonctions de gérence. Veuillez vous logger dans votre compte et vérifier si votre(vos) propriété(s) ont été publiées. Merci.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Enlever favoris');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Archive de données de réservations');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Cet archive est le résultat brut d\'information de réservations capturtée après que le bouton confirmer r´serve a été actionné. Détenez la souris sure une date pour voir les données. Cette information est gardée dans la table XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Éditer compte');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Rechercher utilisateurs");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Introduisez quelques charactères du nom d\'utilisateur pour la recherche.<br/> Quand vous sélectionez un utilisateur vous l'ajouterez automatiquement comme Gérant et vous serez dirigé(e) vers la page suivante où vous pourrez imputer des propriétés et droits d\'accès à l\'utilisateur.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Gérants existants");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choisissez un gérant pour être dirigé(e) vers la page d\'administration.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Recherche par nombre d\'hôtes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Montrer la recherche par <i>dropdown</i> de nombre d\'hôtes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Recherche par étoiles");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Montrer la recherche par <i>dropdown</i> d\'étoiles");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Nombre d\'hôtes');
jr_define('_JOMRES_SEARCH_STARS','Nombre d\'étoiles');
jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Factures de commission");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Nombre de propriétés");
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"Charger bibliothèque Jomres jQuery?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"Vous pouvez choisir Non si vous avez un thème qui utilise jquery. Ceci PEUT résoudre quelques problèmes de conflits jquery dans quelques thèmes, mais pas dans tous les cas.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Si vous utilisez Joomfish, vous devrez choisir Non, et utiliser les commutateurs de langues Joomfish. Ce commutateur est toujours actif dans la zone d\'administration, car il est nécéssaire si on utilise la charactéristique de Traduction d\'Étiquettes.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Les images de référence sont automatiquement crées pour toutes les images chargées.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Largeur max. d\'image de référence (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Images de référence petittes sont utilisées dans la liste de propriétés, tandis que celles de taille moyenne sont utilisées dans l\'en-tête de chaque propriété.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Hauteur max. d\'images de référence (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Largeur max. d\'images de référence moyennes (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Hauteur max. d\'images de référence moyennes (px).');
jr_define('_JOMRES_TOUCHTEMPLATES','Traduction d\'Étiquettes');
jr_define('_JRPORTAL_ROI_TAB',"ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Utiliser la fonctionnalité commissions?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Choisissez Oui pour montrer au gérant les factures de commissions émises.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Réservations de gérant originent des factures de commission?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Si un gérant fait une réservation, ceci origine un article de ligne sur une facture de commissions?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Une nouvelle facture de commission a été originée");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Une nouvelle facture de commission a été originée ce qui demande votre attention. Cliquez sur le lien suivant pour voir la facture (peut-être vous aurez besoin de vous logger d\'abbord).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto-suspendre gérants qui ont des factures marquées comme pendantes?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Limite d\'auto-suspension");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Ce limite est le numéro de jours qu\'un gérant a pour paier une facture avant qu\'il soit suspendu et ses propriétés cessent d\'être publiées.");
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Contexte langue');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Utilisez cette option pour modifier le contexte de langage du site. Ceci permet à Jomres d\'utiliser étiquettes plus convenables pour votre encadrement courant, donc si cet enquadrement est location de yachts, changer le contexte permet à Jomres de montrer des étiquettes d\'un ficihier de langue différent. Par éxemple, si vous choisissez définir le contexte comme "Yacht brokerage", Jomres cherche premièrement la langue courante, après recherche le directoire /jomres/language par un directoire appelé "yachtbrokerage". Si ce fichier existe pour la langue en cours, ce fichier sera utilisé. Sinon, Jomres cherche le fichier de langue anglaise sur ce directoire. S\'il ne peut pas être trouvé, Jomrs utilisera le fichier de langue pour la langue choisie dans le directoire /jomres/languages.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Configuration avancée du site');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Choisissez Oui si vous voulez utiliser les options avancées de configuration. Si vous venez de commencer Jomres, vous êtes conseillé(e) à laisser l\'option Non, car l\'installation par défaut est suffisante pour vous permettre de commencer, donc il suffirait d\'ajouter Jomres au menu principal et vous logger comme "admin", en commencant à configurer votre (vos) propriété(s). Veuillez remarquer que plusieurs options de la configuration avancée sonmt applicables seulement à l\'installation Jomres Silver, et les utilisateurs Jomres Lite ne pourront prendre complètement avantage d\'une quantité de charactéristiques que l\'option permet.');
jr_define('_JOMRES_CONFIG_JQUERY_UI',"Charger bibliothèque Jomres jQuery UI?");
jr_define('_JOMRES_SORTORDER_PRICE_DESC','Prix (le plus haut d\'abbord)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Prix (le plus bas d\'abbord)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Le sommaire des prix et estimations doivent être évalués par nuit/par semaine/par mois?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Par nuit');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Par semaine');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Par mois');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Par personne');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','semaine(s) à ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','mois à ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Commewnt doit fonctionner l\'option de recherche par numéro d\'hôtes?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affecte tous les modules de recherche. En utilisant la charactéristique de recherche par nombre, doit cette charactéristique chercher propriétés dont le tarif supporte nombres d\'hôtes jusqu\'à et égal au nombre choisi, égal ao nombre choisi, ou égal et plus grand que ce nombre? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Attendez svp, votre réservation est en train d\'être processée et vous serez renvoyé(e) vers le site Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Si vous n\'êtes pas redirectionné(e) vers Paypal dans 5 secondes...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Cliquez ici');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Réservation valable du");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Réservation valable jusqu'au");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Nom de l\'hôte");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Des codes d\'escompte peuvent être produits et passés aux hôtes comme un stimulant pour réservationr.<br/>
Les dates de \'valable dès le et jusuqu\'au\' se réfèrent aux dates entre lesqueles un réservation peut être faite, tandis que des dates de validité de réservation dès le/jusqu\'au se réfèrent à la période pendant laquelle la réservation doit être faite pour que le coupon soit valable. Si une réservation tombe hors de cette période les taxes normales sont applicables pour les jours hors de la période définie.<br/>
Si vous voulez que la réservation soit disponible pour un hôte spécifique, choisissez son nom dans la liste <i>dropdown</i> pour limiter ce coupon a cet hôte en particulier.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Avec votre coupon, cette réservation a été rebattue de ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," pour ");
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Marquez Non pour déactiver la charge de Jquery UI javascript aussi bien que des fichiers CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Charger la bilbiothèque Jomres jQuery UI CSS?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Marquez Non pour déactiver seulement le fichier jquery UI CSS.");
//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc. taux");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND','second');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minute');
jr_define('_JOMRES_DATEPERIOD_HOUR','hour');
jr_define('_JOMRES_DATEPERIOD_DAY','day');
jr_define('_JOMRES_DATEPERIOD_WEEK','week');
jr_define('_JOMRES_DATEPERIOD_MONTH','month');
jr_define('_JOMRES_DATEPERIOD_YEAR','year');
jr_define('_JOMRES_DATEPERIOD_DECADE','decade');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','from now');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE','Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
jr_define('_JOMRES_IMAGE','Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

jr_define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

jr_define('_JOMRES_QUICK_INFO',"Quick Info");

jr_define('_JOMRES_MENU_SHOW',"Show");
jr_define('_JOMRES_MENU_HIDE',"Hide");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
jr_define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


jr_define('_JOMRES_DEBUGGING_SUBJECT','Subject');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
jr_define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta title');
jr_define('_JOMRES_METADESCRIPTION','Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES',"Properties found");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

jr_define('_JOMRES_MYPROPERTIES','My properties');


jr_define('_JOMRES_CART_TITLE','My proposed bookings');
jr_define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
jr_define('_JOMRES_CART_OR',' or ');
jr_define('_JOMRES_CART_SAVEFORLATER','Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART','View cart');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

jr_define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC',"");


jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

jr_define('_JOMRES_COMPARE',"Compare");
jr_define('_JOMRES_REMOVE',"Remove");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

jr_define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
jr_define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Read more...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
jr_define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
jr_define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE',"Enable safe mode?");
jr_define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");

jr_define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT',"Next");
jr_define('COMMON_CANCEL',"Cancel");
jr_define('COMMON_SUBMIT',"Submit");
jr_define('COMMON_SAVE',"Save");
jr_define('COMMON_DELETE',"Delete");
jr_define('COMMON_RETURN',"Return");
jr_define('COMMON_CLOSE',"Close");
jr_define('COMMON_BACK',"Back");

jr_define('COMMON_HOME',"Home");

jr_define('COMMON_NEW',"New");

jr_define('COMMON_SEND',"Send");

jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Public key");
jr_define('RECAPTCHA_PRIVATE_KEY',"Private key");


jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


jr_define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

jr_define('COMMON_ACTION',"Action");
jr_define('COMMON_VIEW',"View");

jr_define('BACKTOTOP',"Back to top");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

jr_define('_JOMRES_INPUTFILTERING',"Input filtering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

jr_define('COMMON_PRINT',"Print");

jr_define('COMMON_EDIT',"Edit");
jr_define('COMMON_COPY',"Copy");


jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");

jr_define('_JOMRES_BEEZ_WARNING',"Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "About Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , "1 main");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance");
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL" , "Access Control");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "developer tools");
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE" , "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "languages");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "income generation");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS" , "bookings");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "site structure");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT" , "user management");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (online)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "My Account (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS" , "scheduled tasks");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal functionality");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin manager");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integration");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "reports/statistics");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES" , "taxes");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS" , "Tickets (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Upgrades");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "payment methods");

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Tariff default");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "This only applies to new tariffs");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "Years to show");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Defines the number of years to show when editing a tariff type");

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logout");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "reserve");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , "management");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "misc");
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS" , "SRPs");

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Edit country");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Country id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Country name");

jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Edit region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Region name");


jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List countries");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Export definitions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.");

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Translate locales");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Translate lang file strings");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Property list default layout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Stay for a minimum of");
jr_define( "_JOMRES_NIGHTSFOR" , " nights for ");

