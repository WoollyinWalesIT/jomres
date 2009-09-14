<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC',"Afficher les arrivées prévues aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC',"Afficher les départs prévus aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Afficher les demandes de réservations');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Afficher les autres demandes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Réservation rapide');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Lister les réservations en cours');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Afficher les profils');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Langues');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Configuration Générale');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Configuration des remises');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Configuration Chambres/Etablissements');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC',"Configuration de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Configuration des taux');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Retour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Revenir sur la liste des réservations de Mos Residents');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Configuration');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC',"Charger des données servant d'exemples");

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Oui');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Non');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Nouveau');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Nouvelle chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Nouvel équipement de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Nouveau type de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Nouvel établissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE',"Nouvel équipement  d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Nouveau client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Sauvegarder');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',"Arrivée");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Départ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE',"Assigner des fonctions d'administration aux utilisateurs");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME',"Nom d'utilisateur");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Actuellement autorisé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Etablissement par Défaut');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Modifier');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL',"Niveau d'accès");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Utilisateur modifié');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL',"Changer d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL',"Changer le niveau d'accès");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Réception');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN',"Responsable de l'établissement");

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Toutes les réservations');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nouvelles réservations (Dépôt impayé)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Editer la  réservation : ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Arr./Dép.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Paiement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Prénom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL',"Notre client(e) est prévu(e) pour aujourd'hui. Cliquer sur ce boutton si celui ci est arrivé");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Notes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Besoin(s) spécifique(s)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Certains besoins spécifiques peuvent être facturés.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS',"Nombre d'Adultes(s)");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN',"Nombre d'enfant(s)");

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Annuler la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL',"ID de l'utilisateur sur le site internet");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Numéro');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Rue');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ville');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Code Postal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Numéro de téléphone');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Numéro de portable');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Numéro de fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Adresse email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Préférences');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL',"Plaque d'immatriculation de la voiture");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Client annulé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Etablissement annulé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Sélectionner le motif de la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE',"Jours restant avant l'arrivée");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE',"<b>Les charges d'annulation restent due</b>");

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Nous ne pouvons pas annuler cette réservation car le client occupe déjà sa réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','La réservation a été payé, aucun reste à payer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID',"La réservation n'a pas été réglée, le paiement reste à percevoir");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Réservation en partie réglée, 50% du contrat total reste à percevoir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Réservation en partie réglée, 50% du contrat total reste à percevoir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Réservation réglée, 100% du contrat total reste à percevoir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Réservation impayée, 50% du contrat total reste à percevoir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','reste à percevoir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','La réservation n\a pas été réglée');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON',"Confirmez l'annulation");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Réservation annulée');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL',"jours avant l'arrivée");

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Type de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Noir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Réception');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nom de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Numéro de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Accès aux personnes à mobilité réduite ?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Max. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Type de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Description des types de chambres');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Liste des équipements de la chambre');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','Livres');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Règle des taux de change');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Acompte payé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',"Entrez le montant de l'acompte");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Total à régler');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF',"Référence de l'acompte");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Référence du réglement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Numéro de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Acompte');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Acompte sauvegardé');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Attention...</FONT></h1><BR><B>Vous devez modifier le chmod de votre fichier de langue à 766 afin que le système gérant les langues puisse être mis-à-jour</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Réservation rapide : sélectionnez les types de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Cocher la case');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS',"Nombre d'adulte(s)");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN',"Nombre d'enfant(s)");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Cot a exiger ?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Alternativement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Entrer AU CHOIX le nombre de nuits pévue par le client, ou la date de départ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Nombre de nuits');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS',"Veuillez sélectionner le type de chambre désirée, la date d'arrivée du client et le nombre de nuits durant le séjour ou la date de départ. Enfin, entrez le nombre d'adulte(s) & d'enfant(s).");

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Disponibilités :');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Numéro');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Accès personnes à mobilité réduite ?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Max. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Details');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Etablissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Type de la Chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Désolé, Mais nos chambres disponibles ne peuvent pas prendre en charge autant de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE',"<font color='red' face='arial' size='3'>Désolé, l'établissement ne peux pas offrir de réservation pour cette période. Veuillez revenir sur le calendrier et vérifier les disponibilités affichées.</font>");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Veuillez sélectionner votre choix dans le menu déroulant');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST',"Sélectionner l'hôte");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Liste des clients');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ERROR: There was an error in your choice of dates.<br>Press the back button & re-enter your data.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ERREUR: Il y a une erreur dans votre choix de date.<br>Appuyer sur le bouton retour et modifiez votre choix de date.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ERREUR: vous devez renseigner au moins une personne pour réaliser une réservation.<br>Appuyer sur le bouton retour et modifiez vos données.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED',"<font color='red' face='arial' size='4'>ERREUR: Vous n'avez pas sélectionné le type de chambre.<br>Appuyer sur le bouton retour et modifiez vos données.</font>");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED',"<font color='red' face='arial' size='4'>ERREUR: La date de réservation choisie est prévue pour aujourd'hui ou précédemment.<br>Appuyer sur le bouton retour et modifiez vos données.</font>");

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Entrer les détails du client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Confirmer les détails  du client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Editer les details du client');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Prénom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Numéro');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Rue');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Ville');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Code Postal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Téléphone');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Téléphone portable');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','E-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO',"Numéro d'enregistrement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Numéro de Carte de Crédit');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS',"Date d'émission");
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Votre carte expire le');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO',"Numéro d'émission");
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Nom sur la carte');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Réservez');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Choisir');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Tarif Desc.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Min. de jours');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Max. de jours');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Min. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Max. personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Séjour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Tarif journalier');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS',"Nombre d'Hôtes");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Total');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Un acompte');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Un jour, au moins, se situe dans la plage des vacances scolaires.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS',"Désolé, Aucun tarif correspondant aux critères que vous avez spécifiés n'a été trouvé. Cependant, il est possible que nous ayons besoin d'adapter notre offre à vos besoins spécifiques. Veuillez essayer à nouveau en modifiant le nombre de jours de votre séjour. Vous pouvez aussi contacter l'établissement et réserver une chambre par téléphone.");

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Afficher la configuration des chambres & des établissements');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Chambres');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Propriété Ch.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Types Ch.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Etablissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','propriété du dispositif');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Etablissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Numéro');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Etage');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Accès mobilité réduite ?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Max. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Equipements');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Chambre ajoutée');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Chambre mise-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT',"Cliquez sur l'id de la chambre pour éditer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT',"Editer l\'élément");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Dispositif Ch.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Description des propriétés');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT',"Cliquez sur les propriété de la chambre pour éditer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Propriété de la chambre ajoutée');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Propriété de la chambre mise-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT',"Editer l'élément");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Type Ch.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Abréviation du type de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Description du type de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT',"Cliquez sur l'uid du type de la chambre pour éditer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Type de chambre ajouté');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Type de chambre mis-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT',"Editer l'élément");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Etablissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Rue');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Ville');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Région');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Pays');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Code Postal');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Tel.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','email');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Site Internet');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Equipements');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT',"Cliquez sur le numéro de l'établissement pour éditer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Etablissement ajouté');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Etablissement mis-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT',"Editer l'élément");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK',"Equipement  de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV',"Abbréviation des dispositifs de l'établissement.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC',"Description complète de l'équipement de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT',"Cliquez sur le numéro de l'équipement  de l'établissement pour éditer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT',"Equipement de l'établissement ajouté");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE',"Equipement l'établissement mis-à-jour");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT',"Editer l'élément");

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Tarifs');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Titre du Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Valide du');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO',"Valide jusqu'à");
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Prix');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Min. de jours');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Max. de jours');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Min. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Max. de personnes');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Type de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorer le PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Autoriser les vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Autoriser les Week-Ends');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Cliquez sur le lien éditer pour modifier le tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Tarif ajouté');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Tarif Mis-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT',"Editer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE',"Cloner l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Supprimer le Tarif');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Tarif supprimé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Editer le tarif');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP',"La fin de la période de vacances scolaires devrait être la dernière nuit  pour laquelle vous avez l'intention de facturer l'hôte au tarif de vacances scolaires.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Editer les vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Débute');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Se termine');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Nouvelle date de vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Cliquez sur le lien éditer pour modifier les vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Vacances scolaires ajoutées');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Vacances scolaires mise-à-jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT',"Editer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE',"Cloner l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Effacer les vacances scolaires');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Vacances scolaires effacées');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Réservation enregistrée');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Veuillez vous assurer que le formulaire est rempli correctement.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Seul les membres enregistrés peuvent effectuer une réservation en ligne');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Veuillez vous enregistrer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Réservation offline');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Mes détails');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Mes réservations');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Gérer');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Réserver une chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',"Entrer la réservation d'un client");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',"Retirer la réservation d'un client");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lister les réservations');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Lister les NOUVELLES réservations');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Récapitulatif');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Administration des clients');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Administration des établissements');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Administration des Tarifs');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Administration des réductions');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Administration des vacances scolaires');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS',"Veuillez sélectionner le type de chambre désiré, la date d'arrivée de l'hôte et le nombre de nuits durant le séjour ou la date de départ. Enfin, entrez le nombre d'adulte(s) & d'enfant(s).");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1',"Veuillez entrer vos détails. Vous n'aurez besoin de l'éxecuter qu'une seule fois, notre système vous reconnaîtra lors de vos prochaines visites.");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Veuillez sélectionner la chambre que vous désirez.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2',"Veuillez renseigner tous les champs. Informations obligatoires à l'exception de votre numéro de portable.");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Vérifier la disponibilité');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Je désire cette chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Sélectioner un hôte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Confirmez vos informations');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Choisissez votre contrat');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Sélectioner le type de chambre');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Prénom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nom');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Numéro');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Rue');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Ville');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Code Postal');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Téléphone');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Numéro de Portable');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Numéro de Fax');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE',"Il n'y a aucune chambre suceptible de satisfaire les paramètres de votre recherche");

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Entrez vos détails');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Confirmez vos informations');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE',"<center>Nous vous remercions d'avoir effectué votre réservation en utilisant nos services, nous vous souhaitons un excellent séjour.<br><br> <b>Veuillez cependant noter que vous venez d'effectuer une pré-réservation, et que celle-ci sera confirmée lorsque vous recevrez la lettre de confirmation que nous allons vous faire parvenir dans les plus bref délais.</center>");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE',"Réservation réalisée pour l'établissement : ");

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Réservation réalisée pour la chambre : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS',"Nombre d'adulte(s) : ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN',"Nombre d'enfant(s) : ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Arrivée : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Départ : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Nombre de nuits: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID',"L'id de l'hôte: ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nom: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Téléphone : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Portable : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Tarif : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Le montant de votre contrat est de : ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Un Acompte est requis : ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Désolé, Mais nous avons besoins que vous mettiez à jour vos détails afin de pouvoir procéder à la réservation. Veuillez cliquer sur le lien "Fournissez vos informations personelles" et complétez les informations relatives à votre adresse. Nous vous remercions.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Nous vous remercions, vos informations ont bien été sauvegardées.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Bienvenu visiteur. Avant de pouvoir réserver une chambre, vous devez mettre à jours vos détails personnels dans la rubrique "Fournissez vos informations personelles".');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Bienvenu à nouveau ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Réserver un hôte ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Sélectionner un hôte ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN',"Réservation d'hôte effectuée ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN',"Aucune arrivée d'hôte n'est prévue aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE',"Retirer la réservation d'un hôte ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT',"La réservation de l'hôte a été retirée ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Confirmez la sortie de la réservation');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT',"Aucun départ d'hôte n'est prévue aujourd'hui");

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE',"Arrivée d'hôte prévue aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART',"L'hôte s'en va aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','La chambre est occupée');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Nouvelles réservations');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE',"Afficher l'usage de la chambre depuis:");

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Suppléments');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Tarifs & Devises');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Réduction');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION',"Politique d'annulation. NON ACTIVÉE");
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Charger un fichier');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Paramètre actuel');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Explication');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2006');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Réservation offline?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Choisissez la réservation offline si vous ne souhaitez pas effectuer de réservention en ligne.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Offres de réduction disponible ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC',"Les offres de réductions sont diponibles pour ceux qui souhaitent mettre à disposition de la clientèle des réductions par rapport au nombre d'hôte lors de réservations groupées. Parce-que ce système opère sur le nombre d'hôte, il n'est pas recommandé de l'utiliser si vous ne facturez pas sur une base Par personne - Par nuit.");
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Niveau 1 seuil');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Niveau 2 seuil');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Niveau 3 seuil');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Niveau 4 seuil');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Niveau 1 montant de la réduction');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Niveau 2 montant de la réduction');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Niveau 3 montant de la réduction');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Niveau 4 montant de la réduction');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Suppléments pour personne seule');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Assurez vous de sélectionner OUI si vous facturez un supplément pour les personnes seules');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Montant du supplément pour les personnes seules');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Cot suppléments.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Assurez vous de sélectionner OUI si vous facturez un montant pour supplying a cot');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Montant du supplément cot');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Un acompte requis en pourcentage?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC',"L'acompte doit il être un pourcentage de la somme totale ? Si cela n'est pas le cas, vous devez alors indiquer le montant d'un acompte fixe");
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Montant requis pour le Un acompte');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Par personne - Par nuit');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC',"Sélectionner OUI si vous souhaitez facturer Par personne - Par nuit. Si cela n'est pas le cas, Le montant doit être calculé sur une base Par chambre - Par nuit");
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Le montant forfaitaire peut être remboursé ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC',"Sélectionner OUI si vous souhaitez que le montant forfaitaire perçue puisse être utilisé par le client après l'annulation de sa réservation pour une future réservation. ");
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Le fichier existe');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Types de fichiers');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Specifiez quel type de fichiers sont autorisés a être chargé. Utilisez des virgules et des minuscules sans espaces pour construire la liste. Exemple: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Poids du fichier');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Poids Max. du fichier Image en Kilobyte');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE',"Cliquer pour afficher l'usage hebsomadaire de la chambre à partir d'aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Cliquez sur la chambre réservé pour voir la réservation');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','ou Sélectionnez la date qui vous interesses');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Réservé');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Gratuit');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY',"<br>Les chambres possédant un arrière plan de couleur bleu sont déjà réservées, Cependant<br> si une chambre est affichée en rouge, cela signifie que l'acompte n'a pas été réglé.<br> Lorsqu'une étoile est affichée devant \"Réservé\" cela signifie que l'hôte est attendu aujourd'hui.<br> Si la chambre est affichée en jaune, cela signifie que l'hôte occupe actuellement la chambre.");

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Lettre de Confirmation');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Cher(e) ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Coût par nuit - par chambre');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Détail de votre réservation');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Nous vous remercions pour votre réservation avec');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2',". Vous trouverez, à suivre, le résumé de votre réservation. Veuillez vérifier que nous avons enregistré correctement toutes les informations necessaires à votre réservation, si toutefois vous constatiez une erreur, n'hésitez pas à nous contacter.");
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN',"Votre chambre sera tenue jusqu'à votre arrivée, vous pourrez alors en disposer après 14h.");
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Nous nous réjouissons de vous accueillir le');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Nous espérons que vous avez passé un excellent séjour.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Veuillez considérer les lignes suivant.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Nous vous rappellons que la réservation fait office de contrat, aussi, si pour toutes raisons, vous deviez annuler ou racourcir la durée de votre séjour, vous resterez redevable de la totalité de la somme.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE',"Aucun remboursement ne peut être réalisé sur les repas non consommés ou pour les chambres non occupées sur toute la période de la réservation. Gardez cette information à l'esprit, Afin d'éviter tout désagrément nous vous recommandons l'utilisation d'une police d'assurance pour vos vacances.");
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO',"<i>Montant de l'annulation et de la terminaison du contrat</i> Si vous deviez annuler votre séjour, la confirmation d'annulation doit se faire par écrit. Le montant des charges d'annulation sont de :");
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 jours ou plus');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Un acompte seulement.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 à 30 jours');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% du contrat total.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Arrivée prévue dans les 14 prochains jours');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% du contrat total.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','La taxe de 19.6% est comprise dans tous nos tarifs. Toute augmentation ou modification sera facturée.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Imprimer une lettre de confirmation');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Impression de la facture');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Chèr(e) ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Coût par nuit - par chambre ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Nombre de nuit: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Contrat initiallement accepté : ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Coût par nuit : ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Total');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Détails de votre facture');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Remerciement pour votre client à');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Nous espérons vous revoir bientôt.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','La taxe de 19.6% est comprise dans tous nos tarifs. Toute augmentation ou modification sera facturée.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Imprimer la facture');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Ajouter le service à la note');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Description du service ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Valeur du service');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Ajouter à la note');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Autres éléments facturés');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Autres éléments facturés, Pour un total de : ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Elément ajouté à la note');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND',"<h1><font color=red>L'établissement par défaut n'a pas été trouvé</h1><br>Nous ne pouvons pas continuer. Contactez L'administrateur du site.</font>");


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Sélectionnez le fichier image à joindre');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Téléchargez une image');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Télécharger');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Charger un fichier');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES',"Votre fichier peut être d'un format - Poids max.");
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Soumettre un nouveau fichier à charger');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE',"Vous n'êtes pas autorisé à charger des fichier de type:\n");
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY',"Veuillez sélectionner un fichier avant d'effectuer le chargement");
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME',"Le nom de fichier ne doit contenir que des caractères alphanumériques et pas d'espace, merci.");
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE',"Le poids du fichier dépasse le poids maximum fixé par l'administrateur du site.");
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Un fichier avec ce nom existe déjà. Veuillez modifier le nom du fichier avant de le recharger.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Votre fichier a été chargé.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED',"Le fichier N'A PAS été chargé.");
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Votre fichier a bien été mis-à-jour.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Choisissez dans le réseau de jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Si vous souhaitez choisir cette propriété dans le réseau de jomres, celle ci sera alors inséré sur le site jomres.net. Veuillez noter que nous considérerons votre établissement comme en activité. Jomres.net ne peut en aucun cas être tenue responsable pour votre établissement. Vous devez vous assurer de la validité des informations transmisent.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Calendrier');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Fichier de langue pour JS Calendrier');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC',"Choisissez le fichier de language qui sera utiliser par le calendrier Javascript. Veuillez noter que certains fichier peuvent comporter des erreurs, Pour plus d'informations http://sourceforge.net/");
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','Fichier de CSS pour JS Calendrier');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Choisissez le fichier CSS Qui devra être utilisé pour le calendrier Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Vérifiez les plages de vacances scolaires ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC',"Si vous sélectionner OUI, Vous devez vous assurer que vous avez bien séparé les tarifs/taux applicables durant les vacances scolaires de ceux applicables tout au long de l'année. Sélectionner NON Si vous souhaitez appliquer un montant identique pour toutes les périodes.");
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Divers');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');

/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Effacer cette image');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Fichier effacé');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Afficher le champ lié au départ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC',"Sélectionnez OUI si vous souhaitez afficher le champ lié au départ. Il a été constaté que certains navigateurs ont du mal à afficher correctement le fonctions java du calendrier. Personnellement je laisse cette option désactivée car je considères que l'affichage de ce champs n'est pas esthétique.");

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY',"Choisissez l'établissement pour lequel vous souhaitez des informations sur la disponibilité des chambre");

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Tous');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Etablisement');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Afficher sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Activer cette option pour afficher le SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Afficher les résultats sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Activer cette option pour afficher les données SQL renvoyées et le var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Choisissez votre thème graphique');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','ID des Boutons css');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','ID des têtes de Table css');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Thème');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Supprimer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE',"Nous sommes dans l'incapacité de supprimer cette chambre, Il y a déjà des réservations dessus. Annulez ces réservations et recommencez.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Chambre supprimée');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Supprimer les équipements de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE',"Nous sommes dans l'incapacité de supprimer l'équipement de cette chambre, il est déjà assigné à d'autres chambres. Supprimez l'équipement de ces chambre et recommencez.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Equipement de la chambre supprimé');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE',"Supprimer l'équipement de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE',"Nous sommes dans l'incapacité de supprimer l'équipement de cet établissement. Supprimez l'équipement de cet établisssemnt et recommencez.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED',"Equipement de l'établissement supprimé");

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Effacer le type de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS',"Nous sommes dans l'incapacité de supprimer le type de la chambre, il est déjà assigné à une autre chambre. Essayez de réassigner le type de chambre à une autre chambre et recommencez.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS',"Nous sommes dans l'incapacité de supprimer le type de la chambre, il est déjà assigné à un tarif. Essayez de réassigner le tarif à une autre chambre et recommencez.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Type de chambre effacé');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE',"Effacer l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE',"Nous sommes dans l'impossibilité de supprimer cet établissement, il n'y a pas de donnée dans cette table: ");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED',"L'établissement a été effacé");
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS',"Vous n'avez pas l'autorisation de supprimer cet établissement.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Choisir cet établissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC',"Avec quel établissement cette chambre sera t'elle associée ?");
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Sélectionner un établissement');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Vous devez sélectionner un établissement');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Largeur de la petite imagette');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM',"Largeur de l'imagette moyenne");
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE',"Largeur de l'image");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',"Cliquer pour obtenir la carte d'accès");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',"Description de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',"Horaires d'arrivée");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',"Zone d'activités");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Accès par la route');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Aéroports');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Autres formes de transport');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Mentions légales');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY',"Votre clef d'établissement Jomres.net");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC',"Lorsque vous êtes prêt à lancer votre site web sur le net, visitez <a href=\"http://www.jomres.net\" target=\"_blank\">Jomres.net</a> pour obtenir votre Clef d'établissement Jomres. Avec cette clef, jomres pourra enregistrer votre établissement sur le réseau Jomres, vous assurant ainsi l'accès à une large audience pouvant être intéressée par votre activité.");

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Nos établissements');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Les visiteurs ont la possibilité de réserver en ligne');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Sélectionner OUI si vous souhaitez que les visiteurs puissent réserver une chambre en ligne.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Les réservations sont établies pour une période fixe');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC',"Si vous sélectionnez OUI, Alors la réservation sera activée pour une période fixe. Si vous sélectionnez  NON, Assurez vous que la fonction  \"Jour d'arrivée prédéfinie\" n'est pas activée à OUI (A moins que vous souhaitiez imposer une date d'arrivée fixe à vos hôtes) Sinon vous n'obtiendrez pas beaucoup de liens de disponibilité sur le calendrier.");
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Période de réservation: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Réservation des chambres');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Bordure de la table de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Changer la couleur des Bordure de la table de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Arrière plan de la table de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC',"Changer la couleur de l'arrière plan de la table de réservation");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Largeur de la table de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Périodes Maximum, Ex. 3x 7 période de réservation = 21 jours');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED',"Nombre d'hôtes désirés ?");
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC',"Sélectionner OUI pour afficher les champs correspondant au nombre d'hôtes dans le formulaire de réservation");
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Ceci est un établissement avec des chambres individuelles');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Ex. Vous louez un établissement plutôt que des chambres. Si cela est le cas, Veuillez vous assurer que vous avez uen chambre enregistrée pour chaque établissement.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS',"Nombre maximum d'adulte(s)");
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC',"Entrer le nombre maximum d'adulte(s) dans le formulaire de réservation");
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN',"Nombre maximum d'enfant(s)");
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC',"Entrer le nombre maximum d'enfant(s) dans le formulaire de réservation. Si vous le fixer à O  alors pour les en-têtes enfants et numéros ceux-ci ne seront pas montrés.");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Enregistrer la réservation');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Verifier la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Confirmer la réservation');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Réductions');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Attention...</FONT></h1><BR><B>Vous devez exécuter un chmod 777 sur le fichier site_config.php afin de rendre possible toute modification de la configuration</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Lundi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Mardi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Mercredi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Jeudi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Vendredi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Samedi');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Dimanche');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Lun');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Mar');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Mer');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Jeu');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Ven');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Sam');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Dim');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Calendrier disponible');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE',"Police d'affichage pour tout le texte");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Taille de la police');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Hauteur de la cellule');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Largeur de la cellule');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Couleur de la police pour la date actuelle');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Couleur de la police pour les jours affichés dans le mois ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Couleur de la police pour les jours qui ne sont pas affichés dans le mois');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR',"Couleur d'arrière plan de la cellule pour les jours où l'établissement /chambre est disponible");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR',"Couleur d'arrière plan de la cellule pour les jours non affichés dans le mois en cours");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR',"Couleur d'arrière plan de la cellule pour les jours occupés");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR',"Couleur d'arrière plan de la cellule pour les réservations provisoires (Réservations pour lesquelles un acompte n'a pas encore été perçu)");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR',"Couleur d'arrière plan de la cellule pour les jours antérieurs");

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Couleur de la clef :');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY',"Occupé/N'est pas disponible");
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Disponible à la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Réservations provisoires');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO',"Date d'arrivée prédéfinie");
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Uniquement pour les sites offrant des périodes de réservation fixe. Choisissez le jour ou les arrivées doivent démarrer.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY',"Jour d'arrivé fixé");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Durée du séjour (en jours)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Afficher les disponibilités sous forme de calendrier ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Sélectionnez OUI si vous souhaitez afficher le calendrier des disponibilités');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Confirmez votre sélection');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Disponibilité');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE',"Ce que vous avez besoin d'exécuter: ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Afficher votre choix de dates ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS',"Afficher vos numéros d'hôte ");
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Fournissez vos informations personelles');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Choisissez une chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Afficher votre choix de chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Afficher votre commande. Lorsque vous serez satisfait, vous pourrez confirmer votre réservation, merci!');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Cliquer sur une date libre pour accéder au formulaire de réservation.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Liste Noire de réservation');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Pas de réservations sur Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nouvelle réservation sur Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Intégrer ces chambres à la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST',"Supprimer l'hôte");
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED',"L'hôte a été supprimé");
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST',"Nous sommes dans l'incapacité de supprimer cet hôte car il a déjà une réservation en cours. Annulez la réservation et recommencez.");

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW',"Afficher le panneau d'admisnistration tape view");
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC',"Sélectionner OUI si vous souhaitez un affichage hebdomadaire, opposé à l'affichage mensuel des disponibilités.");
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Coût actuel de la chambre: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID',"Cet e-mail n'est pas valide ");
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Vous avez reçu un e-mail en provenance de');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Bonjour');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS',"Nous vous remercions d'avoir réaliser votre réservation avec");
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','un email de réservation vient de vous être envoyé de la part de :');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS',"Si vous avez des questions concernat la réservation ou tout autre servicee, n'hésitez pas à prendre nous contacter.");
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Notre numéro de téléphone est');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Vous pouvez par ailleurs nous contacter par e-mail à :');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Fumeur');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Aucune préférence');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Format de sortie du calendrier');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC',"Ceci permet à l'utilisateur de modifier l'affichage des dates dans Jomres");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT',"Format d'entrée du calendrier");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC',"Ceci permets à l'utilisateur de modifier l'entrée des dates dans Jomres.");

/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Les réservations à période fixe permettent de court séjour');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Durée du séjour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Publié');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Paramètres');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Utiliser paypal ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Utiliser la sandbox de Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Necessite un compte de développeur PayPal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Votre e-mail paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC',"Note:pour utiliser paypal vous devez accéder à votre compte paypal et activer l'option de reroutage automatique. (Profile/Préférences de Paiement) Activer le reroutage: activé, utilisez le lien suivant : http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ");
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL',"Erreur, l'email paypal n'a pas été activé");

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Vérification rétrospective');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Pas de vérification rétrospective disponible');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Date');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Temps');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Nom (utilisateur)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Opération');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY',"Mentions légales de l'établissement");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Afficher les détails');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>tous</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtrer sur la date');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME',"Filtrer sur l'utilisateur");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION',"Filtrer sur l'opération");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Statut');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Arrivée en attente');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY',"Arrive aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Résident actuel');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY',"Départ aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Retard de départ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE',"N'est pas arrivé");

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Filtrer');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Utilisateur inconnu');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','La chambre a été créée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','La chambre a été mise-à-jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','La chambre a été supprimée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE',"L'équipement de la chambre a été créé ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE',"L'équipement de la chambre a été mis-à-jour");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE',"L'équipement de la chambre a été éffacé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Le type de chambre a été inséré');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Le type de chambre a été mis-à-jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Le type de chambre a été effacé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY',"L'établissement a été créé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY',"L'établissement a été mis-à-jour");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY',"L'établissement a été effacé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE',"L'équipement de l'établissement a été créé ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE',"L'équipement de l'établissement a été mis-à-jour");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE',"L'équipement de l'établissement a été effacé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS',"Paramètre de l'équipement modifié");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Equipement publié');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Le tarif a été créé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','le tarif a été mis à jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','le tarif a été supprimé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Pub. hol. créée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Pub. hol. mise-à-jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Pub. hol. effacée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Montant svc. créé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Réservation annulée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','entrer la réservation');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','sortir la réservation');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Détail cc mis-à jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Un acompte enregistré');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST',"L'Hôte a été créé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST',"L'Hôte a été mis à jour");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST',"L'Hôte a été supprimé");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE',"Nouvelle image de l'établissement chargée");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Image diff. et. chargée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Image supprimée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Charger une nouvelle image de la chambre');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Image diff ch. chargée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Nouvelle image rsrc chargée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','image diff. rsrc chargée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Réserver une chambre');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Un extra a été crée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Un extra a été mis-à-jour');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Un extra a été effacé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA',"l'extra a été publié.");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Liste Noire des réservations entrée.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Liste Noire des réservations effacée.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT',"Editer l'extra");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Description');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Nom');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Prix');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Nouvel extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT',"Cliquer sur le lien pour éditer l'extra");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Extra ajouté');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra mis à jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT',"Editer l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE',"Cloner l'élément");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA',"Supprimer l'extra");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra supprimé');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Gérer les extras');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Afficher les extras au moment de la réservation?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC',"Sélectionner OUI pour afficher les extras que vous souhaitez proposer à l'hôte");
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Extra/option.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Sélectionner cet établissement');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Inverser la sélection/marquer tous');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Date de départ de la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Date de reprise du service');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Administration de la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Une ou plusieurs chambres désirées sont déjà réservée. Si vous souhaitez les mettre sur la Liste Noire vous devez annuler les réservations au préalable.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Il y a eu une erreur lors de votre tentative de réservation de ces chambres, une ou plusieurs de ces chambres ne sont pas disponibles.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Chambres inclusent dans la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Supprimer les réservations de la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Afficher les réservations de la Liste Noire');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS',"Il n'y a pas de réservations sur la Liste Noire à afficher");

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS',"Nombre d'étoiles");
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING',"Afficher l'option destinée aux fumeurs?");
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC',"Indiquez oui pour afficher l'option fumeur.");
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Remise à zéro');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING',"Le statut de votre paiement avec notre partenaire PayPal est en attente. Dès que l'hôtel sera en mesure de confirmer la réception de votre paiement alors l'affichage de la réservation sera changer en \"confirmée\".");
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Réservation annulée');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Rechercher ici pour:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Rechercher ');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Afficher les informations de debugging PayPal ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Afficher les noms des chambres ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Sélectionner OUI pour afficher le nom des chambres ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Afficher le type de chambre?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Sélectionner OUI pour afficher le type des chambres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Option fumeur par défaut');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC',"ATTENTION: Si vous souhaitez que l'option par défaut soit OUI at que toutes vos chambres sont non-fumeur, vous ne pourrez pas afficher les chambres pour la réservation.");
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Symbole de la devise');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC',"Ex &amp;pound&#59; Veuillez considérer l'utilisation des codes au format HTML correspondant au symbol approprié. Pour une liste de ces Codes vous pouvez visiter <a href=\"http://www.w3schools.com/tags/ref_entities.asp\">w3schools</a>");

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Code de la devise');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Ex. GBP. Vous avez besoin des codes si vous souhaitez utiliser paypal. Pour obtenir une liste de ces codes vous pouvez visiter <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION',"Cliquer pour obtenir plus d'information");
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>ATTENTION...Vous êtes connecté en tant que manager avec tous les droits et privilègess. Soyez avertis que cela peux occasionner des problèmes sur certaines fonctions dans Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO',"Limiter les réservation à l'avance ?");
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC',"Sélectionner OUI si vous souhaitez limiter les réservations à l'avance (Utilisez le champ suivant pour rntrer la limite en nombre de jours). Si vous Sélectionnez OUI alors l'utilisateur qui souhaitera réserver avant n jours à l'avance sera enregistré à la date d'aujourd'hui");
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS',"Le nombre de jours pour la réservation à l'avance est limité à :");

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING',"<font color=red>NOTE: l'activation à OUI des deux options suivante n'est pas recommandée, Vous devriez utiliser uniquement l'une des deux méthodes de calcul de la taxe qui vous sont proposée. </FONT>");
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Taxe');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Taxe pour la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC',"Produit pour le marché Américain. Ce sont les montant des taxes par chambre qui seront facturé à l'hôte. Vous pouvez facturer selon une combinaison et/ou de montant fixe et de pourcentage. Notez que ces montants ne sont applicable que sur le coût de la chambre.");
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Montant des taxes fixes');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Pourcentage de la taxe');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Taxe');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Produit pour tous les marchés qui appliquent un taux à la couverture, ex. Taxe de la Valeur Ajoutée en France : ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Pourcentage de la Taxe');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Archiver tous les enregistrements');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Enregistrements archivés');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer les enregistrement archivés');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Nos Tarifs');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Nom du Tarif');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Description du tarif');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Type de chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Valide du');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','au');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Par personne et par nuit');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Par nuit');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',"N'inclue pas les week-ends");
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum de jours');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maximum de jours');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minimum de personnes');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maximum de personnes');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Afficher');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Edition ?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','texte actuel');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nouveau texte');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Mettre à jour le texte personalisé.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Editer la langue');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Afficher les derniers 200 enregistrements');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL',"Il y a plus de 200 enregistrements la vérification rétrospective, il n'est donc pas possible d'afficher le résultat de la requète SQL exécutée. Si vous souhaitez afficher le SQL, vous devrez analyser la table d'audit directement. Si vous souhaitez vérifier régulièrement la table SQL nous vous recommandons d'executer des sauvegarde régulière");

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE',"Type d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE',"Lister les types d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT',"Editer le type d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE',"Types d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC',"Description du type d'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED',"Types d'établissements sauvegardés");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE',"Impossible de supprimer le type d'établissement. le type d'établissement est assigné à un ou plus d'un établissement, veuillez les réassigner  avant de tenter de les supprimer");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED',"type(s) d'établissement(s) supprimé(s)");

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS',"<font color=red>Erreur, l'établissement n'a pas de chambres.</font>");
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS',"<font color=red>Erreur, l'établissement n'a pas de tarifs.</font>");
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES',"<font color=red>Erreur, l'établissement n'a pas de type de chambres.</font>");

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP',"Changer l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Rappel de paiement');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Votre transaction paypal a été complétée, un reçu de votre commande vous a été envoyé sur votre adresse e-mail. Vous pouvez à présent vous identifier sur votre compte à www.paypal.com pour vérifier les détails de cette transaction. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Pas de services suplémentaires à ajouter à la note');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Un acompte');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Somme totale');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Montant enregistré au moment de la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC',"Utilisez cette option pour décider ce qui sera facturé lors de la réservation. Choisisez le Un acompte, si un Un acompte doit être perçu ou le montant total si c'est le montant total qui doit être perçu.");

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Mois du calendrier à afficher');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Dans la mise à disposition des chambres, Combien de mois le calendrier doit il afficher ?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Signé pour le compte de ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Gateways');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Annulé');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC',"Veuillez choisir la/les chambre(s) que vous souhaitez prendre, et les dates appropriées. <br>si une chambre n'a pas de marque \"vérifiée\", celle ci ne pourra pas être insérée dans la Liste Noire avant la fin ou l'annulation de la réservation.<br/> Lorsque vous avez choisi les dates appropriées, cliquez sur le bouton bleu \"appliqué\" pour revérifier la disponibilité de la chambre. ");
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Il semblerait que Joomla vous ais déconnecté pour innactivité</b> Veuillez vous reconnecter et réessayer.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Raison');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Utiliser les gateways de paiement ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC',"Sélectionner OUI si vous souhaitez utiliser les services de gateways de paiement. <b>Note:</b>Ceci n'annule pas le calcul de Un acompte necessaire à la réservation. Pour le désactiver vous devez modifier le thème utilisé pour afficher les chambre et supprimer dans le code les éléments se référant au Un acompte.");
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Veuillez sélectionner votre méthode de paiement.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Gateway activée?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Paramètres des Plugins modifiés');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Insérer les paramétres des plugins ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','cryptage');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Utiliser le protocole de cryptage mCrypt?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Sélectioner oui SI mCrypt est compilé dans PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Clef de cryptage');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','mode de cryptage');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','algorithme de cryptage');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Carte de crédit vue');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Carte de crédit mise-à jour');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Editer la carte de crédit');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON',"Editer la taille de l'icone");
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Mesures en pixels.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD',"Chargement par lots des images de l'établissement");
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Les images déjà présentes dans le répertoire');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Diaporama');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Afficher le lien vers les diaporamas ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Afficher les diaporamas en ligne?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC',"Sélectionnez OUI si vous souhaitez afficher le diaporama en ligne avec les informations relatives à l'établissement.");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Largeur du diaporama');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE',"Largeur de l'imagette du diaporama");
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW',"Images de l'établissement");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES',"Désolé, il n'y a pas d'images pour cet établissement");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Largeur de la fenètre Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Hauteur de la fenètre Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION',"Location de l'image ");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC',"Changer cette fonction uniquement si vous avez besoins de sauvegarder les images jomres dans un autre répertoire. Par défaut celui-ci est \"/images/stories/jomres/\" en relation avec la racine de joomla!.");
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Afficher le lien vers les tarifs?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Fenètre Popups autorisées ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Si vous avez sélectioné NON, alors le lien qui normalement aurait du ouvrir une fenêtre POP-UP ouvrira en Inline à la place. EXPERIMENTAL! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Chargement des images par lots');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO',"Utilisez ce formulaire pour charger les images de l'établissement par lots<br/><b>Note</b> Chaque image possédant le même nom seront ré-écrite. Veuillez noter aussi que ce formulaire ne charge pas les images pour une chambre spécifique ou le log de l'établissement, vous devrez les charger depuis le centre de contrôle administrateur de l'établissement.<br/><b>Note</b> Les images chargées depuis ce formulaire seront transférées dans le répertoire /images/stories/jomres/*property_uid*. Si ce répertoire n'existe pas, il sera créé, à moins bien sur que vous ayez spécifié un répertoire différent dans le centre de contrôle.");
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Divers');
/**
* @ignore
*/
define('_JOMRES_A','Configuration du site');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES',"Utiliser les dispositifs globaux de l'établissement");
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Sélectionner OUI si vous souhaitez forcer tous les établissement a utiliser uniquement les dispositifs définis par le webmestre.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO',"pour assigner une image à ce dispositif vous devez charger, par avance, l'image de ce dispositif dans le dossier des dispositif d'établissement dans /images/stories/jomres/pfeatures/. ");
/**
* @ignore
*/
define('_JOMRES_A_ICON','Icone');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Sélectionner le plugin de recherche que vous souhaitez utiliser.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS',"<b>Désolé, votre recherche n'a pas retournée de résultats. Veuillez modifier les paramètres de votre recherche.</b>");
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Etes vous certain de vouloir réaliser cette action?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Réservez une chambre');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Réservez cette annonce');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Numéro de sécurité');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Voir les tarifs en ligne ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adresse');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Détail');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Cliquez pour voir les disponibilités');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Voir les tarifs');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE',"Voir l'adresse avec ce lien");
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE',"Voir l'annonce avec ce lien");
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Voir les disponibilités avec ce lien');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Voir les tarifs avec ce lien');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Pourcentage du tarif');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Moyenne');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Sélectionnez le modèle de tarif ');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"2 choix de calcul. La première, le pourcentage du tarif est appliqué pour le client. Si vous avez différentes prestations comme le petit déjeuné ou divers choisissez moyenne pour ajuster les tarifs en fonction des dates et prestations.");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Utilisez le portail de Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Utilisez cette option  si Jomres doit être utilisé avec le portail de jomres');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Voir les dates de départ ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Sélectionnez non si vous ne souhaitez pas voir apparaitre la date de départ dans une boite de séléction. Seulement si vous connaissez la date d'arrivée, renseignez lors du départ la date avec un jour en moins.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Paramétres des limites');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Limitation du nombre de caractères visibles.");

// v1.4g
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Coeficient journalier');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Largeur de la fenêtre Diaporama');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Hauteur de la fenêtre Diaporama');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Continuer');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Cliquez sur continuer pour voir les disponibilités');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Format et style de la date ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Cliquez sur oui pour utiliser la commande date() (voir <a href="http://www.php.net/manual/en/function.date.php">ici</a>). Cliquez sur non pour utiliser strftime() (voir <a href="http://www.php.net/manual/en/function.strftime.php">ici</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Publier');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Dépublier');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','SVP complétez les champs suivants : ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Merci.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','type de chambre');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Mettre oui pour forcer toutes les configuration par le webmaster.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Pour mettre une image il faut mettre en premier une image pour le type de chambre dans le répertoire /images/stories/jomres/rmtypes/ . ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','ERREUR - Couleur de la bordure ');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','ERREUR - Couleur du fond ');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Langue par défaut');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP',"Site d'aide?");
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Cliquez sur oui si vous souhaitez que ça apparaisse dans la barre de recherche.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING',"Entrez le texte d'aide ici.");

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Les champs marqués par une étoile sont requis.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION',"L'utilisateur peut enregistrer les paramétres ?");
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC',"Utilisez cette option si vous souhaitez que l'utilisateur s'enregistre sans l'intervention de l'administrateur.");

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','SVP renseignez le pays et la région.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Complétez votre profil.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',"Les champs marqués d'une étoile sont requis.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Créer le compte');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Désolé, vous ne pouvez créer un compte. Vous devez être enregistré sur le site, sinon il vous faut créer un compte.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Creation du profil : ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER',"Pour l'utilisateur : ");

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Modification journalière ?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Par jour');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR',"Montrer le calendrier avec l'année ?");
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Disponibilités depuis le début de cette année.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Voir le detail ?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Si vous mettez non vous ne pourrez par voir le détail durant la réservation.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Nombre de chambre disponible');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Sélectionnez le nombre de chambre, et le type que vous souhaitez.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Nombre requis');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Retour sur le détail');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Type de chambre');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Utiliser les Meta de Jomres ?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC',"Cochez oui pour que Jomres s'occupe des descriptions et mot clés. Séparez les mots par un espace.");
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Arret des mots');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Cette option ajoute pour IE <i>don't</i> et ne permet pas l'affichage des mots clés.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Autres éléments supprimés');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Element que vous enlevez des Meta. Par exemple les symboles etc.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Fréquence');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Nombre de répétition des mots clés.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','limitation de recherche');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Convertir la grille de tarif avec google ?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Convertion du taux :');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR',"Autoriser l'éditeur HTML pour les utilisateurs ?");


// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS',"Utilisez ce formulaire pour effectuer votre réservation. Déplacer votre souris sur l'image du \"i\" pour plus d'information sur la colonne. Modifiez les particularités des réservations comme les dates d'arrivées ou de départ et les numéros des hôtes, puis sélectionner la ou les chambres désirées depuis la liste. Cliquez sur n'importe quelle chambre disponible pour l'ajouter à la liste des réservations possibles. Quand vous avez terminé, vous pouvez ajouter des services supplémentaires (option) et remplir nom, adresse etc. Quand le formulaire est prêt, confirmez votre réservation en cliquant soumettre ou submit.");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP',"Utilisez ce formulaire pour votre réservation. Le \"i\" vous fournit d'avantage d'information sur la colonne. Vous pouvez modifier vos souhaits (arrivée, départ, nombre de personnes) à tout moment. Quand vous avez terminé, vous pouvez ajouter s'il y a lieu des options ou services supplémentaires et confirmer avec le bouton submit ou soumettre.");

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Options de réservation');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Sélection de vos détails de demande de réservation');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Disponibilité ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Choisissez la ou les chambre(s) que vous désirez');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Vérifiez si cela est possible en ce moment.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Services en option');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Ajouter une ou des option(s) à mon séjour');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Par nuit');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Votre adresse');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC',"Merci de compléter tous les détails. Tous les champs sont nécessaires afin de pouvoir répondre correctement à votre demande, à l'exclusion de votre numéro de téléphone mobile.");

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Disponibles');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Chambres selectionnées :');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE',"<br>La date d'arrivée au plus tôt est le : ");

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Par nuit :');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Total :');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','option(s) retenue(s) :');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Taxe:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Remise:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Total avec option(s):');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Hôtes');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Merci de confirmer en cliquant pour ajouter votre sélection');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE',"J'annule et retire cette sélection");
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',"type d'hôte(s)");

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Type');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT',"Type d'hôtes, ex. enfants entre 5-10 ans, ou étudiants ");
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Remarques');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT',"Remarques que vous souhaitez formuler quant au type d'hôtes ?");
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Maximum');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT',"Le nombre maximum d'hôtes de ce type qui peut être sélectionné dans ce formulaire.");
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','est un pourcentage');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','ce résultat est un pourcentage calculé sur la valeur de la chambre. Si vous indiquez non, alors la valeur que vous indiquez est simplement ajoutée ou retranchée de la valeur de base de la chambre.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Ajoutez la différence ?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Le résultat est ajouté ou retranché de la valeur de base la chambre. Si vous indiquez non, le discount sera appliqué sur la base. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Différence');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','La valeur de la différence');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Type de commande client modifiée');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Type de client validé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Type de client détruit');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Type de client créé');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Type de client mise à jour');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Type de client mise à jour');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Montrer la liste des propriétés détaillées des chambres ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Montrer le lien de la liste des propriétés détaillées des chambres ?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Montrer <b>uniquement</b> les disponibilitées pour le calendrier/la liste des chambres ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC',"Cliquez sur Oui pour désactiver l'affichage de l'entête et des détails afin de ne plus avoir que  les disponibilités des chambres sous forme de listes et le calendrier de visible dans la section Détails des Propriétés. Réservé aux usagers loueurs de biens mono-chambre (maisons, appartements).");
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style à utiliser sur ce site');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Arr-Dep minimum interval');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC',"interval minimum de réservation entre la date d'arrivée et la date de départ.");

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Le formulaire de réservation de la liste des chambres montre le numéro de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Le formulaire de réservation de la liste des chambres montre le nom de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Le formulaire de réservation de la liste des chambres montre le titre du tarif');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Le formulaire de réservation overlib montre le titre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Le formulaire de réservation overlib montre la description');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Le formulaire de réservation overlib montre les prix & tarifs');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Le formulaire de réservation overlib montre le début de la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Le formulaire de réservation overlib montre la fin de la réservation');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Le formulaire de réservation overlib montre le nbre mini de jours du séjour');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Le formulaire de réservation overlib montre le nbre max de jours du séjour');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Le formulaire de réservation overlib montre le nbre mini de pers.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Le formulaire de réservation overlib montre le nbre max de pers.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Le formulaire de réservation overlib montre le n° de chambre.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Le formulaire de réservation overlib montre le nom de la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Le formulaire de réservation overlib montre le type de chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Le formulaire de réservation overlib montre si la chambre est de type fumeur');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Le formulaire de réservation overlib montre si la chambre est ouverte aux pers. à mobilité réduite ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR',"Le formulaire de réservation overlib montre l'étage de la chambre");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Le formulaire de réservation overlib montre le nbre max possible de pers. dans la chambre');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Le formulaire de réservation overlib montre les services de la chambre');

/**
* @ignore
*/
define('_JOMRES_ORDER','Commande');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR',"Vous avez configuré Jomres en tant qu'établissement mono-chambre (propriété que vous souhaitez louer dans son ensemble, villa, appartement par ex)age, villa). En revanche, vous avez créé(e) plus d'une chambre ! Cela risque de générer des erreurs par la suite dans le fonctionnement de jomres. Si tel est le cas (utlisation en location monochambre), suivez la procédure suivante: allez dans le menu configuration : Single Room Property = No, Property Admin supprimez toutes les chambres sauf une. Vérifiez également que les tarifs créés soit attachés à la chambre en question ! et tous les éléments bien publiés.");
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Infos client');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING',"jours avant l'arrivée");
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC',"Le nombre minimum de jours qui doit être écoulé, entre \"aujourd'hui\", avant la date d'arrivée.");

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','par nuitée');

/**
* @ignore
*/
define('_JOMRES_DTV','variations par type de dates');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Jour de la semaine');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','étendues des dates');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','jours du séjour');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Dernières minute');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Jour de la semaine');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Le jour de la semaine');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION',"sélection de l'élément de classe de tarif");
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC',"Cette liste vous permet de choisir une classe d'objet tarif personalisé que vous pouvez créer/telecharger et installer en tant que composant Joomla independant. ");

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE',"Type d'hôte par défaut");
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Nombre de personnes par defaut pour le premier type de client. Si vous utilisez les types de client, ce chiffre est le nombre de personnes selectionné par defaut pour le premier type de client dans le formulaire de réservation.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Seuls les utilisateurs enregistrés peuvent effectuer des réservations en ligne ?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Désolé, vous devez être un utilisateur enregistré pour effectuer une réservation en ligne. Cliquer ici pour vous logger sur le site !');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Couleur de la police pour les liens aux réservations en cours');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Limites du Weekend');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Quel pluging utiliser pour le récapitualtif');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Si vous avez installé des plugins de récapitulatif vous pouvez selectionner une alternative au récapitulatif par defaut.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Réservation validée');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Réservation en liste noire');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP',"Arrondir l'acompte à la valeur supérieure ?");
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Facturer un acompte ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Les tarifs sont à la semaine ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC',"Vous avez la possibilité d'enregistrer les tarifs soit comme étant des valeurs à la nuitée soit à la semaine. Si vous les enregistrez à la semaine, vous DEVEZ basculer cette option sur OUI.");
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Tarif à la semaine');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING',"Date d'arrivée récurrente : ");
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC',"Quand l'option DATE D'ARRIVEE FIXE est activée, le nombre de dates qui peut être affiché dans la liste déroulante :");

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID',"L'option fumeur/non fumeur sélectionnée n'est pas correcte");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID',"La date d'arrivée n'est pas correcte");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID',"La date de départ n'est pas correcte");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Votre réservation est trop courte. Notre établissement fixe le minimum de nuitées à :');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Votre intervalle est de :');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT',"La différence entre le type d'hôtes n'est pas correcte");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS',"Sélectionnez le nombre et le type d'hôtes");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Vous êtes trop nombreux pour les tarifs, le système ne trouve pas de solution, merci de nous contacter par mail ou par téléphone.');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS',"Vous avez choisi plus de chambres que vous n'avez d'hôtes !");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS',"Il y a trop d'hôtes pour les lits disponibles");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Il est nécéssaire de choisir une chambre supplémentaire');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Sélectionner une chambre');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME',"Merci d'indiquer votre prénom");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME',"Merci d'indiquer votre Nom");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO',"Merci d'indiquer le n°");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET',"Merci d'indiquer votre rue, chemin, impasse, avenue, etc.");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN',"Merci d'indiquer votre ville !");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION',"Merci d'indiquer votre région");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE',"Merci d'indiquer votre code postal");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY',"Merci d'indiquer votre pays !");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Le numéro de téléphone fixe est nécéssaire');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Le numéro de mobile est nécessaire');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL',"L'adresse email est nécessaire");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID',"L'adresse email n'est pas correcte");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL',"Le nom de domaine de votre adresse email n'est pas valable !");

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Nous avons des disponibilités !');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Aucune sélection');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','N° de réservation');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok pour lancer la réservation, messages en arrière-plan');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Videz les Variables ?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','A remplir pour réaliser un dump DHTML (vidage) des variables du template de toutes les variables de chaque fichier FRONTEND (visibles en frontal). Utile si vous souhaitez voir si un élément est disponible dans un template donné.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Le montant est un pourcentage');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Indiquez Oui si la majoration pour une personne seule est un pourcentage. Si Non, le montant appliqué sera ajouté ou retranché du montant global.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Disponibilités / Tarifs');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Utilisez cette entrée pour limiter le nombre de chambre et de tarifs disponibles listés dans le formulaire de réservation. Indiquez 0 si vous ne souhaitez pas activer cette limitation. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Aucune disponibilité à cette période !');


// Translate from here


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS',"Afficher des icones pour les options d'aministration?");
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Selectionnez non pour afficher les liens administrateurs en texte simple.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING',"Mode d'edition global?");
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Attention avec cette fonction. Si le mode global est activé, les changements de texte affecteront TOUS les établissements dans le system pour la constante que vous editez.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Symbole monétaire global');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Componsant enveloppé');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Selectionnez oui pour envelopper le composant de façon à ne pas afficher les espaces module et en-tête');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER',"Super Manager d'etablissements");
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends seulement');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tarif valide seulement si le sejour inclut un jour de weekend');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Jours du weekend');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Selectionnez vos jours de weekend. Les tariff permettant ou pas les weekends ce baseront sur ce paramètre pour generer la liste des chambres.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY',"Selectionnez votre pays avant d'ajouter des informations sur l'etablissement.");
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD',"Sauvez les changements sur l'etablissement avant d'uploader son image.");
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prix à partir de - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','Tous');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Région');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Prestations');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Disponibilité');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Recherche par pays');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Recherche par région');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Recherche par ville');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Recherche par prestations.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Recherche');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Entrez le texte à rechercher dans la boite et cliquez sur le bouton.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Texte à rechercher : ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Veuillez entrer les dates de votre séjour et cliquer sur le bouton pour trouver les chambres ayant des disponibilités pour cette periode.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','Lister tous les établissements par type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','Lister tous les établissements par type de chambre.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Defaut');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME',"Nom de l'établissement");
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION',"Région de l'établissement");
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN',"Ville de l'établissement");
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Etoiles');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Liste des établissements');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS',"Détails de l'établissement - ");
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Formulaire de réservation');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON',"Changer l'adresse");
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-vérification de la disponibilité<br/>(La selection des chambres sera réinitialisée)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-vérification de la disponibilité');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modification de vos extras en option');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changement de votre selection de chambres');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Changement de votre adresse');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Désolé, un ou plus des champs adresse est incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Image de la chambre');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Format monétaire');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Afficher des images pour les option du manager');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Options de recherche');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE',"Note! Ces options affecteront seulement le format de language dans les modules. Pour changer le format de language javascript pour un établissement donné, veuillez éditer les options du calendrier javascript à l'interieur de l'etablissement");
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Journaux disponibles');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES',"Pas d'entrée dans le journal, ce qui est normal, vous devez modifier manuellement jomres.php pour activer le journal");
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Dateheure');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Avançé');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Microgéré');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Mode de configuration tarifaire');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Attention: Changer entre les differents types de tarification peut résulter en perte de données. Voyez les notes ci dessous à ce sujet.</b>.
<br/><br/>
Vous avez trois options pour configurer vos tarifs.<br/>
Mode normal: Vous aurez un tarif pour chaque type de chambre qui sera valide pour les dix prochaines années.<br/>
Microgéré: Vous pouvez modifier les prix pour chaque jour pour chaque type de chambre/etablissement. <br/>
Avançé: La \"vielle\" methode de tarification Jomres. <br/>
<br/>
Les differents modes de tarification vous permettent de choisir la méthode qui conviennent le mieux à chaque établissement.<br/>
Le mode normal est le plus simpliste mais il est le plus facile à comprendre car il crééra des références croisées entre chambres et tarifs vers types de chambre/etablissement et vous permettra de configurer les chambres et les prix sur la même page.<br/>
Le mode microgeré vous permet de faire varier les tarifs au jour le jour sans avoir à gerer des tonnes de tarifs differents, ceci est réalisé en créant des references croisées entre un grand nombre de tarifs. Le résultat est un nombre de tarifs créés pour vous couvrant une periode donnée, mais vous ne pouvez pas \"empiler\" les tarifs.<br/>
Le mode avançé vous permet de créer une chambre et de l'associer à un type de chambre. Vous pouvez alors créér un tarif et l'associer au type de chambre. Utiliser cette méthode permet \"d'empiler\" les tarifs les uns sur les autres. Par exemple, un type de chambre \"lit double\" peut avoir un tarif pour le lit, le petit déjeuner et le dinner. La méthode avançée demande un peu plus d'attention aux détails car il est possible de dis-associer une chambre ou un tarif d'un type de chambre/etablissement, ou de selectionner des dates valides mais incorrectes. Il donne cependant des options de configuration que les autres modes n'offrent pas.<br/>
<br/>
Comme les modes Normal et Micromanagé demandent un paramétrage spécifique des chambres et tarifs pour le mode tarifaire, le système peut avoir à réinitialiser certaines données pour rendre les configurations tarifaires existantes compatibles avec le nouveau mode tarifaire choisi.<br/>
<br/>
Normal -> Avançé. Pas de changement. Les tarifs existants sont conservés.<br/>
Normal -> Microgéré. Tous les tarifs existants sont effaçés.<br/>
Advanced -> Normal. Tous les tarifs existants sont effaçés.<br/>
Advanced -> Microgéré. Tous les tarifs existants sont effaçés.<br/>
Microgéré -> Avançé. Tous les references croisées entre les tarifs sont effaçées, mais les tarifs eux mêmes sont conservés.<br/>
Microgéré -> Normal. Tous les references croisées et les tarifs sont effaçés.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS',"Afficher la liste des chambres dans la page de details de l'etablissement ?");
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE',"Type d'etablissement");
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP seulement');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max personnes par chambre');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max personnes par réservation');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Ajouter note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Editer note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Effacer note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','Voir notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Nouvelle note ajoutée');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Note éditée');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Note effaçée');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','Mes options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN',"Vous n'êtes pas identifé. Si vous vous identifiez / enregistrez sur ce site, vous pourrez acceder aux détails de vos réservations.");
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lister les réservations');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','Mes réservations');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','Lister les réservations, accompte non payé');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','Voir réservation');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Voir favoris');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE',"Vous n'avez pas encore ajouté de favoris!");
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Ajouter aux favoris');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE',"Type d'etablissement");
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Etablissements publiés sur le site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Tarification intelligente');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ce plugin vous permet de configurer vos prix dynamiquement.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL',"La plupart des etablissement recalculent le prix de leur chambres en fonction du nombre de chambres d'un certain type qui sont disponibles sur les dates demandées. Ceci permet d'offrir des réductions sur un type de chambre au taux de remplissage faible durant une certaine periode de l&#année avec pour objectif d'attirer des clients qui auraient pu êtres perdus sinon.<br/>Activer et configurer ce pluging vous permet d'offrir des tarifs ajustables basés sur le nombre de chambres d'un certain type qui sont disponibles dans l'etablissement sur un jour donné.<br/> Le seuil de déclenchement determine le nombre de jours maximum séparant de la date d'arrivée avant que les prix soient ajustés par cette fonctionalité. Les options de pourcentage vous permettent de configurer le pourcentage de chambres qui doivent être disponibles avant que la réduction donnée soit appliquée.");
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD',"Seuil de déclenchement (nombre de jours entre la date d'arrivée et aujourd'hui)");
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Pourcentage de chambres occupées < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Pourcentage de chambres occupées < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Pourcentage de chambres occupées < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Pourcentage de chambres occupées < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Réduction %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Type de chambre ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' à été réduit à partir de ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' vers ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Tarif de la chambre sans remise ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps clé API');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC',"Vous pouvez récuperer une clé google maps API sur <a href=\"http://www.google.com/apis/maps/signup.html\" target=\"_blank\">Google maps</a>. Un fois votre clé copiée ici, Jomres affichera la carte dans la page details de l'etablissement.");
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Utiliser SSL dans le formulaire de réservation ?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','Vous devez verifier que vous avez un certificat SSL valide pour ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Nombre maximum de personnes que cet etablissement peut heberger');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Dernière minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Activez cette option si vous voulez offrir des remises de dernière minute.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Seuil');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC',"Si une réservation est passée et que la date d'arrivée est à moins de N jours de la date de réservation, alors la remise peut être appliquée");
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Remise');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','En pourcentage');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Une remise à été appliquée à cette réservation!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Le coût du séjour à été réduit de ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Cet établissement offre une réduction dernière minute de ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' pourcent si vous reservez pour arriver avant le ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' pourcent ou plus si vous reservez pour arriver avant le ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Réservez maintenant pour beneficier du meilleur de cette offre!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','Cet établissement offre une réduction dernière minute de ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' pourcent si vous reservez pour arriver avant le ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Réservez maintenant pour beneficier du meilleur de cette offre!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Information tarifaires detaillées');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC',"Choisissez Oui pour afficher une information tarifaire plus detaillée dans le popup de detail des tarifs de l'etablissement");
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimiser les options de configuration');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC',"Choisissez Oui pour réduire le nombre d'options disponibles pour les managers d'etablissements dans la section de configuration genérale. Cette option est utile si vous ne voulez pas que les gérants d'etablissement ne jouent trop avec le paramétrage, à la place, vous pouvez éditer jomres_config.php pour définir les options d'etablissement par defaut.");
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Modifier réservation - Selection établissement');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Choisir un nouvel établissement');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Contrat original :');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Accompte payé');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Accompte non payé');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Ecraser total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Ecraser accompte');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Annuler');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Tableau de bord');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Taux de commission par defaut');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC',"Choisir le taux de commission par defaut qui sera appliqué à un établissement dans l'eventualité où un autre taux de commission n'a pas été définit.");
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','Liste Taux de commissions');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Taux de commissions');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Titre');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Taux de commission');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Code monétaire');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Liste etablissements');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME',"Nom d'etablissement");
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS',"Adresse de l'etablissement");
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND',"Les etablissements dont la couleur de fond est rouge n'ont pas encore de taux de commission qui leur est appliqué.");
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','Numéro de licence');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Votre numéro de licence pour le plugin portail.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistiques');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistiques pour: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Periode: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Etablissements - Clics');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Vue etablissement');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','Janvier');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','Fevrier');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','Mars');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','Avril');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','Mai');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','Juin');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','Juillet');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','Août');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','Septembre');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','Octobre');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','Novembre');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','Decembre');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Nombre de réservations');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Valeur des réservations');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Remplissage des chambres');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Estimation des commissions');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Taux de commission');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Liste réservations');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id de l&#etablissement');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id client');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id affilié');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id facture');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Total réservation');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id contrat');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Numéro contract');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Code monétaire');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Créé');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archivé');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archivé');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Ajouter établissement');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Est-ce un établissement à plusieurs chambres ?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC',"Est-ce un établissement comme un hotel/chambre d'hôtes et petit déjeuner/pension ? si oui, choisissez Oui. S'il s'agit d'un établissement loué d'un bloc comme une villa/appartement choisissez Non.");
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Ajouter un élément à la facture');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Gérant à facturer');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Etablissement associé (si applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Valeur');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Element inséré avec succès dans ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Voir commandes");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Erreur lors de l'insertion de l'element dans ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Erreur, vous n'avez pas précisé de valeur pour la facture");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER',"Vous pouvez avoir des fichiers de languages spécifiques aux types d'établissements en donnant le nom d'un sous dossier dans la description, i.e. \"locationbateaux\" et en copiant un fichier de language dans ce sous dossier. Vous pouvez alors modifier les messages pour ce type d'etablissement pour que chambres devienne, par exemple DVDs, etc...");
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1',"Vous ne pouvez pas effacer cet établissement car il est le seul auquel vous ayez accès. Si vous voulez le desactiver, veuillez utiliser la fonctionalité dépublier dans votre barre d'outils. ");
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2',"Si vous êtes sur une installation demo et que vous voulez passer sur la licence Jomres Solo (limitée à un seul établissement) vous devriez commencer par créer un nouvel établissement, puis effacer celui ci avant de changer votre clé de licence pour la clé de licence Solo qui vous sera assigné à l'achat. ");

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Envoyer le journal des erreurs par email ?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Choisissez Oui if si vous voulez notifier jomres.net automatiquement un message d'erreur est créé dans le journal. Ceci nous permet d'être proactif dans notre approche de gestion des problèmes potentiels, esperant résoudre les problèmes avant que vous n'ayez eu le temps de les remarquer. Note, cette fonctionalité est desactivée sur 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Est-ce un établissement comme un hotel/chambre d'hôtes et petit déjeuner/pension ? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Les options de configuration different selon si vous louez des chambres dans un établissement ou l'établissement lui même. Choisissez MRP si vous offrez des chambres, choisissez SRP si vous offrez l'établissement. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Utiliser la verification d'adresse email Jomres ? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Force une verification stricte sur les emails envoyés. Certains serveurs sécurisés lançeront une erreur interne 500 si vous essayez d'envoyer un email à une adresse non-existante. Activer cette option nous permet d'utiliser les fonctionalités checkdnsrr de php avant d'essayer d'envoyer un email, ce qui evite ces erreurs 500. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Total hébergement");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"nuit(s) à");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"par chambre ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Total amélioration de votre séjour");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Détail du prix");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Veuillez lire et accepter ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"Un résumé de votre réservation est affiché ci-dessous.<br /> Pour effectuer des changements sur la réservation, veuillez cliquer sur le bouton Modifier réservation. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"Si vous devez modifier les informations ci-dessus, veuillez cliquer ici");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Modifier réservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Veuillez entrer vos requetes particulières dans la zone ci-dessous.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Je confirme que l'information ci dessus est correcte et accepte les ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Survolez une miniature pour une image agrandie");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Afficher le diaporama au dessus des détails de l'établissement ou en dessous.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Haut");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bas");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Les deux");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"par personne par nuit ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"The absolute path to the available logs. Remember, you will still need to enable logging by editing jomres.php manually. although error logging is automatic all other logs must be switched on by yourself.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Page');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','End');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");


/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');

