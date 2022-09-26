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
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Αμεση Κράτηση');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Προφίλ');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Σκοπίμως Μαύρο');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Γενικές Παράμετροι');
jr_define('_JOMRES_COM_MR_BACK', 'Επιστροφή');
jr_define('_JOMRES_COM_MR_YES', 'ΝΑΙ');
jr_define('_JOMRES_COM_MR_NO', 'ΟΧΙ');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Νέος Τιμοκατάλογος');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Νέα ιδιοκτησία');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Νέος Πελάτης');
jr_define('_JOMRES_COM_MR_SAVE', 'Αποθήκευση');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Όνομα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Ημ/νια ’φιξης');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Ημ/νια Αναχώρησης');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Κενό');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Όνομα Χρήστη');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Επίπεδο Πρόσβασης');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Ο Χρήστης τροποποιήθηκε');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Όλες οι κρατήσεις');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Επεξεργασία Κρατήσης:');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Αφ/Αν');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Πελάτης');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Δωμάτιο');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Πληρωμή');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Όνομα');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Επίθετο');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Πρόσθετες Υπηρεσίες');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Προσοχή: Μερικές πρόσθετες υπηρεσίες μπορεί να έχουν έξτρα χρέωση');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Ακύρωση κράτησης');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Αρ. οικίας ή όνομα');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Οδός');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Πόλη');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'ΤΚ');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Αρ. Τηλ.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Κινητό');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'e-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Η κράτηση δεν μπορεί να ακυρωθεί επειδή ο επισκέπτης έχει ήδη κάνει check in');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Μη πληρωμή προκαταβολής');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Επιβεβαίωση ακύρωσης');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Η κράτηση ακυρώθηκε');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Ημέρες εως την άφιξη');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Τύπος κράτησης');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Μαύρο');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Υποδοχή');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Υπηρεσίες Διαδικτύου');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Όνομα δωματίου');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Αρ. Δωματίου');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Όροφος');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Πρόσβαση ΑΜΕΑ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Μεγ. Αρ. Ατόμων');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Τύπος δωματίου');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Περιγραφή τύπου δωματίου');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Υπηρεσίες δωματίου');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Προκαταβολή πληρώθηκε');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Εισαγωγή κατάθεσης προκαταβολής');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Συνολική χρέωση');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Αρ. Κατάθεσης');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Αρ. Κράτησης');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Κατάθεση');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Κατάθεση αποθηκεύτηκε');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Ελεύθερα Δωμάτια');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Ιδιοκτησία');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Τύπος δωματίου');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Επεξεργασία στοιχείων πελάτη');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Όνομα');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Επίθετο');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Οικία');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Οδός');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Πόλη');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'ΤΚ');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Τηλ.');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Κινητό');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Φαξ');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Επιλέξτε δωμάτιο');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Ημέρες διαμονής');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Σύνολο');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Προβολή παραμέτρων δωματίων & ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Δωμάτια');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Υπηρεσίες Δωματίου');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Τύποι Δωματίων');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Ιδιοκτησία');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Χαρακτηριστικά Ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Δωμάτιο');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Τύπος');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Όνομα');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Αριθμός');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Όροφος');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Μεγ. Αρ. Ατόμων');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Χαρακτηριστικά');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Επεξεργασία αντικειμένου');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Χαρακτηριστικά Δωματίου');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Περιγραφή Χαρακτηριστικού');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Το Χαρακτηριστικό δωματίου προσθέθηκε');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Το Χαρακτηριστικό δωματίου ενημερώθηκε');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Τύπος δωματίου');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Συντομογραφία τύπου δωματίου');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Περιγραφή τύπου δωματίου');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Ο Τύπος δωματίου προστέθηκε');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Επεξεργασία αντικειμένου');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Όνομα');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Όδός');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Πόλη');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Περιοχή');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Χώρα');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'ΤΚ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Τηλ.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Φαξ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'e-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Δικτυακός Τόπος');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Χαρακτηριστικά');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Η Ιδιοκτησία ενημερώθηκε');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Χαρακτηριστικά Ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Συντόμογραφία χαρακτηριστικού ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Πλήρης περιγραφή χαρακτηριστικών ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Το Χαρακτηριστικό ιδιοκτησίας ενημερώθηκε');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Τιμοκατάλογοι');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Όνομα Τιμοκαταλόγου');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Περιγραφή');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Ισχύει από');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Ισχύει εως');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Τιμή διανυκτέρευση');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Ελ. Αρ. Ημερών');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Μεγ. Αρ. Ημερών');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Ελ. Αρ. Ατόμων');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Μεγ. Αρ. Ατόμων');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Τύπος δωματίου');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Αγνόησε PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Σαβατοκύριακα επιτρέπονται');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Επεξεργασία αντικειμένου');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Αντιγραφή αντικειμένου');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Ο Τιμοκατάλογος διαγράφηκε');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Επεξεργασία τιμοκαταλόγου');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Η Κράτηση αποθηκεύτηκε');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Κράτηση δωματίου');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Check in πελάτη');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Check out πελάτη');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Κατάλογος κρατήσεων');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Αρχική Σελίδα');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Διαχείριση πελατών');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Διαχείριση ιδιοκτησίας');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Έλεγχος διαθεσιμότητας');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Όνομα');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Επίθετο');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Αρ. Οικίας');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Οδός');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Πόλη');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'ΤΚ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Αρ. Τηλ.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Κινητό');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Δεν υπάρχουν δωμάτια που να ικανοποιούν τα κριτήρια που θέσατε');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Σας ευχαριστούμε που μας προτιμήσατε και σας ευχόμαστε καλή διαμονή.<br><br> <b>Σας ενημερώνουμε ότι η κράτηση επιβεβαιώνεται και είναι σε ισχύ από τη στιγμή που λάβετε το e-mail που θα σας αποστείλουμε. Εως τότε είναι μόνο προ-κράτηση.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Check in πελάτη');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Ο Πελάτης έγινε check in');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Check out πελάτη');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Supplements');
jr_define('_JOMRES_COM_A_TARIFFS', 'Τιμοκατάλογοι και νομίσματα');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Ανέβασμα αρχείων');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Σuppliments ενός ατόμου');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Βεβαιωθείτε ότι έχει τη τιμή Ναι αν επιθυμείτε να χρεώσετε suppliments ενός ατόμου');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Χρέωση suppliment ενός ατόμου');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Ποσοστό προκαταβολής;');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Η προκαταβολή είναι ποσοστό επί της συνολικής χρέωσης κράτησης; Αν όχι, τότε η προκαταβολή είναι φιξ τιμή');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Ποσό προκαταβολής');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Ανά άτομο, ανά διανυκτέρευση');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Επιλέξτε ΝΑΙ, αν επιθυμείτε χρέωση ανά άτομο ανά διανυκτέρευση. Αν  επιλέξετε ΟΧΙ,  τότε η χρέωση υπολογίζεται ανά δωμάτιο ανά διανυκτέρευση');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Μέγεθος αρχείου');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Μεγ. Μέγεθος αρχείου εικόνας (KB)');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Κρατήθηκε');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Λεπτομέρειες κράτησης');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Σας υπενθυμίζουμε ότι η κράτηση αποτελεί συμβόλαιο, έτσι αν για οποιοδήποτε λόγο επιθυμείτε να ακυρώσετε την κράτησή σας ή να μειώσετε το χρόνο διαμονής σας, πάλι θα πληρώσετε όλο το ποσόν.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Χρέωση σε περίπτωση ακύρωσης και περικοπής</i> Σε περίπτωση ακύρωσης της κράτησής σας θα γίνεται εγγράφως.. Οι χρεώσεις ακύρωσης είναι:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', '14 ημέρες πριν και μέχρι την ημερομηνία άφιξης');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Εκτύπωση επιστολής επιβεβαίωσης');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Εκτύπωση απόδειξης');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Αριθμός διανυκτερεύσεων:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Τιμή ανά διανυκτέρευση:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Ολικό Σύνολο');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Εκτύπωση απόδειξης');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Προσθήκη υπηρεσίας στη χρέωση');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Περιγραφή υπηρεσίας');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Αξία υπηρεσίας');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Αλλες χρεώσεις:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Αντικείμενο προστέθηκε στην χρέωση');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Ανέβασμα εικόνας');
jr_define('_JOMRES_FILE_UPLOAD', 'Ανέβασμα αρχείου');
jr_define('_JOMRES_COM_A_ODDS', 'Odds and τέλη');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Διαγραφή εικόνας');
jr_define('_JOMRES_FILE_DELETED', 'Το Αρχείο διαγράφηκε');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Διαγραφή');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Αδύνατη η διαγραφή δωματίου. Υπάρχουν κρατήσεις για αυτό το δωμάτιο. Ακυρώστε τις κρατήσεις για το δωμάτιο και ξαναπροσπαθήστε.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Το Δωμάτιο διαγράφηκε');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Διαγραφή χαρακτηριστικού δωματίου');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Αδύνατη διαγραφή χαρακτηριστικού δωματίου επειδή γίνεται χρήση του σε άλλα δωμάτια. Διαγράψτε το πρώτα από τα δωμάτια που εμφανίζεται και ξαναπροσπαθήστε.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Το Χαρακτηριστικό δωματίου διαγράφηκε');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Διαγραφή χαρακτηριστικού ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Αδύνατη διαγραφή χαρακτηριστικού ιδιοκτησίας επειδή γίνεται χρήση του σε υπάρχουσα ιδιοκτησία. Διαγράψτε το πρώτα από την ιδιοκτησία που εμφανίζεται και ξαναπροσπαθήστε.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Το Χαρακτηριστικό ιδιοκτησίας διαγράφηκε');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Διαγραφή τύπου δωματίου');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Το Χαρακτηριστικό δωματίου διαγράφηκε');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Διαγραφή ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', ' Η Ιδιοκτησία διαγράφηκε');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Δεν έχετε δικαίωμα διαγραφής της ιδιοκτησίας.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Πλάτος πλήρους εικόνας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Κλικ για χάρτη');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Περιγραφή ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Χρόνοι check in');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Δραστηριότητες περιοχής');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Κατευθύνσεις όταν έρθετε οδηγώντας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Αεροδρόμια');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Αλλα μεταφορικά μέσα');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Policies & disclaimers');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Διεύθυνση');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Οι επισκέπτες μπορούν να κάνουν κράτηση online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Επιλέξτε ΝΑΙ ώστε οι επισκέπτες να μπορούν να κάνουν κρατήσεις online');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Οι κρατήσεις είναι για συγκεκριμένη περίοδο');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Εάν επιλέξτε ΝΑΙ, οι κρατήσεις θα γίνονται για συγκεκριμένη περίοδο. Εάν επιλέξτε ΟΧΙ, βεβαιωθείτε ότι η προκαθορισμένη ημερομηνία άφιξης δεν είναι ΝΑΙ (εκτός κι αν επιθυμείτε να υποχρεώνετε τους πελάτες να κάνουν άφιξη μία συγκεκριμένη ημέρα) διαφορετικά δεν θα υπάρχουν πολλά links στο ημερολόγιο διαθεσιμότητας.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Περίοδος κράτησης:');
jr_define('_JOMRES_COM_A_BOOKING', 'Κράτηση δωματίων');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Μέγιστη περίοδος, π.χ. 3x7 περίοδοι κρατήσεων = 21 ημέρες');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Είναι διαμέρισμα/αγρόκτημα/βίλα;');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Ανασκόπηση κράτησης');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Επιβεβαίωση κράτησης');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Δευτέρα');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Τρίτη');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Τετάρτη');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Πέμπτη');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Παρασκευή');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Σάββατο');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Κυριακή');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Δευ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Τρι');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Τετ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Πεμ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Παρ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Σαβ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Κυρ');
jr_define('_JOMRES_COM_A_AVLCAL', 'Ημερολόγιο Διαθεσιμότητας');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Χρώμα γραμματοσειράς τρέχουσας ημέρας');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Χρώμα γραμματοσειράς ημερών προβολής μήνα');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Χρώμα γραμματοσειράς ημερών εκτός προβολής μήνα');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Χρώμα φόντου κελιού ημερών όταν υπάρχει διαθέσιμη ιδιοκτησία/δωμάτιο');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Χρώμα φόντου ημερών εκτός προβολής μήνα');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Χρώμα φόντου δεσμευμένων ημερών');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Χρώμα φόντου εκκρεμών κρατήσεων (κράτησεις για τις οποίες δεν έχει γίνει καμία κατάθεση)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Χρώμα φόντου παρελθόντων ημερών');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Κατηλειμμένο/Μη διαθέσιμο');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Διαθέσιμο για κράτηση');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Εκκρεμείς Κρατήσεις');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Προκαθορισμένη ημέρα άφιξης');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Μόνο για δικτυακούς τόπους που προσφέρουν κρατήσεις συγκεκριμένης περιόδου. Επιλέξτε την ημέρα που πρέπει να αρχίζει η άφιξη.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Προκαθορισμένη ημέρα άφιξης');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Περίοδος διαμονής ');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Προβολή ημερολογίων διαθεσιμότητας;');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'ΝΑΙ για προβολή ημερολογίων διαθεσιμότητας');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Διαθεσιμότητα');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Κλικ σε ελεύθερη ημέρα για προβολή φόρμας κρατήσεων');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Μαύρες κρατήσεις');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Νέα Μαύρη κράτηση');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Διαγραφή πελάτη');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Ο Πελάτης διαγράφηκε');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Αδύνατη διαγραφή πελάτη καθώς υπάρχουν ήδη κρατήσεις στο όνομά του. Ακυρώστε τις κρατήσεις του και προσπαθήστε ξανά.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Αδιάφορο');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Μορφή εξόδου ημερολογίου');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Μορφή εισόδου ημερολογίου');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Επιτρέπει στο χρήστη να αλλάξει το τρόπο εισαγωγής ημερομηνιών μέσα από την εφαρμογή');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Σε περίπτωση κλειστής περιόδου κρατήσεων να επιτρέπονται μικρές διακοπές');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Διάστημα μικρής διακοπής');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Δημοσιεύθηκε');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Έλεγχος Χρέωσης Συμφωνίας');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Ημέρα');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Όνομα χρήστη');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Φίλτρο ημερομηνίας');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Κατάσταση');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Αναμονή άφιξης');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Αφιξη σήμερα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Τρέχων ένοικος');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Αναχωρεί σήμερα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Καθυστερημένη Αναχώρηση');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Δεν έχει αφιχθεί');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Το Δωμάτιο καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Το Δωμάτιο ανανεώθηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Το Δωμάτιο διαγράφηκε');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Το Χαρακτηριστικό δωματίου καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Το Χαρακτηριστικό δωματίου ενημερώθηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Το Χαρακτηριστικό δωματίου διαγράφηκε');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Η Ιδιοκτησία καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Η Ιδιοκτησία ενημερώθηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Η Ιδιοκτησία διαγράφηκε');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Οι παράμετροι ιδιοκτησίας διορθώθηκαν');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Η Ιδιοκτησία δημοσιεύτηκε');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Ο τιμοκατάλογος καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Ο τιμοκατάλογος ενημερώθηκε');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Χρέωση πρόσθετης υπηρεσίας');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Ο πελάτης έγινε check in');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Κατάθεση προκαταβολής εισήχθη');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Ο πελάτης καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Ο πελάτης ενημερώθηκε');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Έγινε κράτηση δωματίου');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Το extra καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Το extra ενημερώθηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Το extra διαγράφηκε');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Το extra δημοσιεύτηκε');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Εισήχθη μαύρη κράτηση.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Διαγράφηκε μαύρη κράτηση.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Extras');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Περιγραφή');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Όνομα');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Τιμή');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Extra ενημερώθηκε');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Επεξεργασία αντικειμένου');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Extra διαγράφηκε');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Διαχείριση extras');
jr_define('_JOMRES_COM_A_EXTRAS', 'Προβολή extras κατά το χρόνο κράτησης;');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Επιλέξτε ΝΑΙ για προβολή extras που πιθανόν επιθυμείτε να προσφέρετε στον πελάτη');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Προαιρετικά extras.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Ημέρα έναρξης μαύρης κράτησης');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Ημερομηνία υπηρεσίας αναφορών');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Διαχείριση μαύρων κρατήσεων');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Υπήρξε σφάλμα κατά τη διαδικασία κράτησης των δωματίων που επιλέξατε, ένα ή περισσότερα δωμάτια είναι ήδη κρατημένα.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Δωμάτια συμπεριλαμβάνονται στις μαύρες κρατήσεις');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Δεν υπάρχουν μαύρες κρατήσεις για προβολή');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Αριθμός αστεριών');
jr_define('_JOMRES_COM_A_RESET', 'Επαναφορά');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Κράτηση ακυρώθηκε');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Αναζήτηση εδώ για:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Σύμβολο νομίσματος');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Κωδικός συμβόλου νομίσματος');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Κλικ για περισσότερες πληροφορίες');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Να περιορίζονται οι ημερομηνίες που θα επιτρέπονται κρατήσεις;');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Επιλέξτε ΝΑΙ αν θέλετε να περιορίζετε τις ημερομηνίες πριν από τις οποίες να μην επιτρέπονται οι κρατήσεις (χρησιμοποιήστε το επόμενο πεδίο σε ημέρες).Εάν επιλέξτε ΝΑΙ τότε όταν ο χρήστης προσπαθεί να κάνει κράτηση περισσότερες από ν μέρες πριν, η ημερομηνία άφιξης θα επανέρχεται στη σημερινή');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Οι μέρες πριν από τις οποίες επιτρέπονται κρατήσεις είναι:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Φόρος');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Φόρος δωματίου');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Προκαθορισμένο ποσό φόρου');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Ποσοστιαία τιμή φόρου');
jr_define('_JOMRES_COM_A_EUROTAX', 'Φόρος');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Ποσοστιαία τιμή φόρου');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Αρχειοθέτηση όλων των εγγραφών');
jr_define('_JOMRES_FRONT_TARIFFS', 'Οι Τιμοκατάλογοί μας');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Όνομα τιμοκαταλόγου');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Περιγραφή τιμοκαταλόγου');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Τύπος δωματίου');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Έγκυρο από');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Έγκυρο εως');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Ανά άτομο ανά διανυκτέρευση');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Ανά διανυκτέρευση');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Δεν συμπεριλαμβάνονται Σαββατοκύριακα');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Ελάχιστες ημέρες');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Μέγιστες ημέρες');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Ελ. Αρ. Ατόμων');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Μεγ. Αρ. Ατόμων');
jr_define('_JOMRES_FRONT_PREVIEW', 'Προεπισκόπηση');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Κατάσταση Επεξεργασίας ενεργή;');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Κείμενο ενημερώθηκε.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Επεξεργασία γλώσσας');
jr_define('_JOMRES_FRONT_PTYPE', 'Τύπος ιδιοκτησίας');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Λίστα τύπων ιδιοκτησιών');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Επεξεργασία τύπου ιδιοκτησιών');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Τύπος ιδιοκτησίας');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Περιγραφή τύπου ιδιοκτησίας');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Ο Τύπος ιδιοκτησίας αποθηκεύτηκε');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Τύπος/οι ιδιοκτησίας διαγράφηκαν');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Υπενθύμιση πληρωμής');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Καμία extra χρέωση');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Προκαταβολή');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Συνολικό ποσό');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Πληρωθέν ποσό κατά τη κράτηση');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Χρησιμοποιήστε την επιλογή αυτή για το ποια θα είναι η χρέωση όταν γίνεται κράτηση. Επιλέξτε προκαταβολή ή συνολικό ποσό.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Αριθμός μηνών που θα προβάλονται στο ημερολόγιο');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Στη διαθεσιμότητα δωματίων, πόσοι μήνες θα εμφανίζονται στο ημερολόγιο;');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Πύλες');
jr_define('_JOMRES_COM_A_CANCEL', '’κυρο');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Παρακαλώ επιλέξτε τα δωμάτια που θέλετε να θεωρούνται εκτός λειτουργίας, και τις αντίστοιχες ημερομηνίες. <br>Αν ένα δωμάτιο δεν είναι τσεκαρισμένο, δεν μπορεί να συμπεριληφθεί στη μαύρη κράτηση έως ότου όλες οι κρατήσεις έχουν ολοκληρωθεί/ακυρωθεί.<br/> Όταμ επιλέξετε τις κατάλληλες ημερομηνίες, κάντε κλικ στο μπλέ "Εφαρμογή" κουμπί για να ξαναελέγξετε τη διαθεσιμότητα του δωματίου. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Φαίνεται πως ο ιστοχώρος σας έχει αποσυνδέσει λόγω αδράνειας</b> Παρακαλώ δοκιμάστε να εισέλθετε στο σύστημα ξανά.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Αιτία');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Να χρησιμοποιηθούν πύλες πληρωμών;?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Παρακαλώ επιλέξτε τρόπο πληρωμής.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Ενεργοποιημένες πύλες;');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Οι ρυθμίσεις του plugin τροποποιήθηκαν');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Καταχωρήθηκαν ρυθμίσεις στο plugin');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Διόρθωση Πιστωτικής');
jr_define('_JOMRES_COM_A_EDITICON', 'Διόρθωση μεγέθους εικονιδίου');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slideshows');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Να εμφανίζονται οι σύνδεσμοι σε slideshows?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Να εμφανίζονται τα slideshow εσωτερικά (inline);');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Να εμφανίζονται σύνδεσμοι στους τιμοκαταλόγους;');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Να επιτρέπονται αναδυόμενα παράθυρα (Popups);');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Μαζικό ανέβασμα εικόνων');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Χρησιμοποιήστε αυτή τη φόρμα για να ανεβάζετε πολλές εικόνες της ιδιοκτησίας ταυτόχρονα.<br/><b>Σημειώστε</b> πως εικόνες με το ίδιο όνομα θα διαγραφούν. Επίσης σημειώστε πως με τη φόρμα δεν ανεβάζετε συγκεκριμένες εικόνες που αφορούν δωμάτια. Πρέπει να ανεβάσετε τις εικόνες αυτές από το Τμήμα Διαχείρισης ιδιοκτησίας.<br/><b>Σημειώστε επίσης πως</b> οι εικόνες που ανεβάζονται εδώ αποθηκεύονται στο φάκελο /images/stories/jomres/*property_uid* . Εάν ο φάκελος δεν υπάρχει δημιουργείται εκτός βέβαια και αν ορίσετε διαφορετικό φάκελο κατά τη ρύθμιση παραμέτρων.');
jr_define('_JOMRES_A_TABS_MISC', 'Διάφορα');
jr_define('_JOMRES_A', 'Παράμετροι ιστοχώρου');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Να χρησιμοποιούνται καθολικά χαρακτηριστικά ιδιοκτησίας');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Εικονίδιο');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Επιέξτε το plugin αναζήτησης που θέλετε να χρησιμοποιήσετε.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Λυπούμαστε αλλά η αναζήτησή σας δεν έφερε αποτελέσματα. Παρακαλώ αλλάξτε τα κριτήρια και δοκιμάστε ξανά.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Είστε σίγουροι;');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Κράτηση Ιδιοκτησίας');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Να εμφανίζονται οι τιμοκατάλογοι εσωτερικά;');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Διεύθυνση');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Λεπτομέρειες');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Κάντε κλικ για Δωμάτια και διαθεσιμότητα');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Πληροφορίες Διεύθυνσης κάτω από αυτό το σύνδεσμο');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Λεπτομέρειες για την ιδιοκτησία κάτω από αυτό το σύνδεσμο');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Δωμάτια και διαθεσιμότητα κάτω από αυτό το σύνδεσμο');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Φιξ τιμοκατάλογοι');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Μέσοι όροι');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Επιλέξτε το μοντέλο χρέωσης που επιθυμείτε');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Έχετε δύο επιλογές για τον υπολογισμό των χρεώσεων. Η πρώτη, η μέθοδος των φιξ τιμοκαταλόγων, σας επιτρέπει να παρέχετε διαφορετικούς τιμοκαταλόγους στους πελάτες και οι όροι συμφωνίας είναι οι ίδιοι για όλη την κράτηση. Αυτό είναι χρήσιμο αν θέλετε να παρέχετε διαφορετικά πακέτα όρων συμφωνίας π.χ. RR BB HB FB. Επιλέξτε τους μέσους όρους εάν θέλετε να ρυθμίσετε τις τιμές ανάλογα με τις ημερομηνίες. Η εφαρμογή θα βρει τους τιμοκαταλόγους που αφορούν κάθε μέρα της κράτησης, θα τους προσθέσει και θα επιστρέψει το μέσο όρο για όλη την περίοδο');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Να εμφανίζεται η εισαγωγή ημερομηνίας αναχώρισης;');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Επιλέξτε ΟΧΙ αν δεν θέλετε να εμφανίζεται το πεδίο ημερομηνίας αναχώρισης. Χρησιμοποιείστε το μόνο αν είστε σίγουροι καθώς η ημερομηνία αναχώρισης στις κρατήσεις θα είναι πάντα η επόμενη της άφιξης.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Όριο περιγραφής');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Περιορίζει τον αριθμό χαρακτήρων που εμφανίζεται στον κατάλογο ιδιοκτησιών.');
// v1.4g
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Να χρησιμοποιείται διάταξη date() ;');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Κάντε κλικ για δημοσίευση');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Κάντε κλικ για να ακυρωθεί η δημοσίευση');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Χρώμα φόντου σφάλματος εισαγωγής');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Προεπιλεγμένη χώρα στην φόρμα κράτησης');
jr_define('_JOMRES_JAVASCRIPT_', 'Τα στοιχεία που είναι σημειωμένα με κόκκινο αστεράκι είναι απαραίτητα.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Οι χρήστες μπορούν να καταχωρούν τις ιδιοκτησίες τους;');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Επιλέξτε ΝΑΙ αν θέλετε οι χρήστες να μπορούν να καταχωρούν τις ιδιοκτησίες τους χωρίς την παρέμβαση του διαχειριστή.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Τα στοιχεία που είναι σημειωμένα με κόκκινο αστεράκι είναι απαραίτητα.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Η ιδιοκτησία καταχωρήθηκε');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Το ημερολόγιο να δείχνει από την αρχή του έτους;');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Το ημερολόγιο διαθεσιμότητας δείχνει από την αρχή του τρέχοντος έτους.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Αριθμός διαθέσιμων δωματίων');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Πίσω στις λεπτομέρειες ιδιοκτησίας');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Τύποι δωματίων');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Χρησιμοποιείστε αυτήν τη φόρμα για να καταχωρήσετε την κράτησή σας. Φέρτε τον δείκτη του ποντικιού πάνω από τα "i" για περισσότερες πληροφορίες για τη στήλη. Τροποποιήστε τα στοιχεία της κράτησής σας όπως ημερομηνίες άφιξης και αναχώρησης και αριθμό ατόμων και επιλέξτε το/τα δωμάτιο/α που θέλετε από τη λίστα των διαθέσιμων. Κάντε κλικ σε οποιοδήποτε διαθέσιμο δωμάτιο και αυτό θα προστεθεί στην κράτησή σας. Όταν τελειώσετε, μπορείτε να προσθέσετε όποιες πρόσθετες υπηρεσίες χρειάζεστε και να συμπληρώσετε τα στοιχεία της διεύθυνσής σας. Όταν η φόρμα έχει αρκετές πληροφορίες θα εμφανιστεί ένα κουμπί Καταχώρηση ώστε να επιβεβαιώσετε την κράτησή σας.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Χρησιμοποιείστε αυτήν τη φόρμα για να καταχωρήσετε την κράτησή σας. Φέρτε τον δείκτη του ποντικιού πάνω από τα "i" για περισσότερες πληροφορίες για τη στήλη. Τροποποιήστε τα στοιχεία της κράτησής σας όπως ημερομηνίες άφιξης και αναχώρησης και αριθμό ατόμων. Όταν τελειώσετε, μπορείτε να προσθέσετε όποιες πρόσθετες υπηρεσίες χρειάζεστε και να συμπληρώσετε τα στοιχεία της διεύθυνσής σας. Όταν η φόρμα έχει αρκετές πληροφορίες θα εμφανιστεί ένα κουμπί Καταχώρηση ώστε να επιβεβαιώσετε την κράτησή σας.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Στοιχεία κράτησης');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Επιλέξτε της λεπτομέρειες της επιθυμητής κράτησής σας');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Διαθεσιμότητα ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Επιλέξτε τα δωμάτια που θέλετε');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Δείτε εδώ αν η ιδιοκτησία είναι διαθέσιμη.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Επιλογή (προαιρετικών) πρόσθετων υπηρεσιών');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Επιλέξτε όποιες πρόσθετες υπηρεσίες θέλετε να συμπεριλάβετε στην κράτησή σας');
jr_define('_JOMRES_COM_PERDAY', 'Ανά διανυκτέρευση');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Η διεύθυνσή σας');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Παρακαλώ συμπληρώστε τα στοιχεία σας. Σημειώστε πως όλα τα πεδία είναι απαραίτητα εκτός του κινητού σας');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Διαθέσιμα δωμάτια');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Επιλεγμένα δωμάτια');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Η συντομότερη δυνατή ημερομηνία άφιξης είναι: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Ανά διανυκτέρευση:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Σύνολα:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Πρόσθετα:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Φόρος:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Έκπτωση:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Γενικό Σύνολο:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '’τομα');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Κάντε κλικ για να προστεθεί το δωμάτιο στις επιλογές σας');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Κάντε κλικ για να αφαιρεθεί το δωμάτιο από τις επιλογές σας');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Τύποι ατόμων');
jr_define('_JOMRES_VARIANCES_TYPE', 'Τύπος');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Ο τύπος του πελάτη π.χ. παιδιά 5-10, φοιτητές, έφηβοι κλπ. ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Σημειώσεις');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Σημειώσεις που μπορείτε να κρατήσετε σχετικά με αυτόν τον τύπο πελάτη');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Μέγιστος αριθμός');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Ο μέγιστος αριθμός πελατών τέτοιου τύπου που μπορεί να επιλεγούν στη φόρμα κράτησης');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Είναι ποσοστό');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Ο αριθμός που υπολογίζεται είναι ποσοστό του βασικού ποσού που υπολογίστηκε για το δωμάτιο. Εάν επιλέξετε ΟΧΙ τότε ο αριθμός που προσδιορίζετε απλά προστίθεται ή αφαιρείται στη βασική αξία του δωματίου.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Πρόσθεση;');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Ο αριθμός που υπολογίζεται προστίθεται ή αφαιρείται από το βασικό ποσό που υπολογίστηκε για το δωμάτιο. Επιλέξτε ΟΧΙ αν θέλετε το ποσό να είναι έκπτωση. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Διαφορά');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Το ποσό της διαφοράς');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Η σειρά των τύπων πελατών τροποιήθηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Ο τύπος πελάτη διαγράφηκε');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Ο τύπος πελάτη καταχωρήθηκε');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Ο τύπος πελάτη ενημερώθηκε');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Τύπος πελάτη ενημερώθηκε');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Να εμφανίζεται σύνδεσμος για τον κατάλογο δωματίων στη σελίδα λεπτομερειών της ιδιοκτησίας;');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Να φαίνεται <b>μόνο</b> Το ημερολόγιο Διαθεσιμότητας/Κατάλογος δωματίων;');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Επιλέξτε ΝΑΙ για να μην εμφανίζονται λεπτομέρειες της ιδιοκτησίας ώστε μόνο το ημερολόγιο Διαθεσιμότητας/Κατάλογος δωματίων να εμφανίζονται στο τμήμα λεπτομερειών της ιδιοκτησίας. Στην ουσία προορίζεται για χρήστες που νοικιάζουν διαμερίσματα/βίλλες κλπ.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Ελάχιστο διάστημα μεταξύ άφιξης - αναχώρισης');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Η ελάχιστη διαμονή στη φόρμα κράτησης.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει τον αριθμό του δωματίου');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει το όνομα του δωματίου');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει το όνομα του τιμοκαταλόγου');
jr_define('_JOMRES_ORDER', 'Σειρά');
jr_define('_JOMRES_REQUIREDFIELDS', 'Απαιτείται');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Ημέρες πριν την άφιξη');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Ελάχιστος αριθμός ημερών που πρέπει να περάσουν από σήμερα, πριν την ημερομηνία άφιξης.');
jr_define('_JOMRES_DTV', 'Τύποι ημερομηνιών');
jr_define('_JOMRES_DTV_DOW', 'Μέρα της εβδομάδας');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Προεπιλεγμένος αριθμός του τύπου του πρώτου πελάτη');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Προεπιλογή του αριθμού του τύπου του πρώτου πελάτη. Αν χρησιμοποιείτε τύπους πελατών, αυτός είναι ο προεπιλεγμένος αριθμός πελατών που θα ανατεθεί στον τύπο του πρώτου πελάτη της φόρμας κράτησης.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Μόνο εγγεγραμμένοι χρήστες μπορούν να κάνουν κράτηση online;');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Λυπούμαστε αλλά πρέπει να είστε εγγεγραμμένος χρήστης για να κάνετε κράτηση. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Χρώμα γραμματοσειράς για τους συνδέσμους στις τρέχουσες κρατήσεις');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Πλαίσια στα σαββατοκύριακα');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Έχει γίνει κράτηση για το δωμάτιο');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Μαύρη κράτηση');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Να στρογγυλοποιείται η προκαταβολή στον πλησιέστερο μεγαλύτερο ακέραιο;');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Να χρεώνονται οι προκαταβολές;');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Οι τιμοκατάλογοι αφορούν εβδομαδιαία χρήση;');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Μπορείτε να επιλέξετε αν οι τιμοκατάλογοι αφορούν ημερήσια ή εβδομαδιαία χρήση. Αν θέλετε να χρησιμοποιήσετε εβδομαδιαία χρέωση, πρέπει να επιλέξετε ΝΑΙ.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Χρέωση ανά εβδομάδα');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Περιοδικότητα Σταθερών ημερομηνιών άφιξης: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Αν έχετε επιλέξει σταθερές ημερομηνίες άφιξης, ο αριθμός επανάληψης των ημερομηνιών που φαίνεται στη λίστα ημερομηνιών');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Λάθος ημερομηνία άφιξης');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Λάθος ημερομηνία αναχώρισης');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Η κράτηση είναι πολύ μικρή. Η ελάχιστη διαμονή σε μέρες πρέπει να είναι:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Το διάστημα παραμονής σας είναι ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Λάθος τύπος πελάτη');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Επιλέξτε τον αριθμό/τύπο ατόμων');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Είστε περισσότεροι από όσους επιτρέπουν οι υπάρχοντες τιμοκατάλογοι');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Έχετε επιλέξει περισσότερα δωμάτια από τον αριθμό ατόμων');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Περισσότερα άτομα από τις διαθέσιμες κλίνες');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Πρέπει να επιλέξετε περισσότερα δωμάτια');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Επιλέξτε ένα δωμάτιο');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Το όνομα απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Το επώνυμο απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Ο αριθμός οικίας/όνομα σπιτιού απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Η οδός απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Η πόλη απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Η περιοχή απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Ο ΤΚ απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Η χώρα απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Ο αριθμός τηλεφώνου (σταθερό) απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Ο αριθμός κινητού τηλεφώνου απαιτείται');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Η διεύθυνση email απαιτείται');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Υπάρχει διαθεσιμότητα!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Δεν έχουν επιλεχθεί δωμάτια');
jr_define('_JOMRES_BOOKING_NUMBER', 'Α/Α κράτησης');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Φόντο πλαισίου επιβεβαίωσης κράτησης');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Αντίγραφο μεταβλητών του template;');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Επιλέξτε για να ενεργοποιήσετε αντίγραφο DHTML των μεταβλητών του template για κάθε αρχείο FRONTEND template όπως φαίνεται αυτή η σελίδα. Χρήσιμο αν θέλετε να δείτε αν κάποιο αντικείμενο είναι διαθέσιμο για χρήση σε κάποιο template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Είναι ποσοστό;');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Επιλέξτε ΝΑΙ αν η υπολογισμένη χρέωση ατόμου είναι ποσοστό. Εάν ΟΧΙ τότε θα προστεθεί σαν ποσό στο σύνολο.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Όριο Διαθεσίμων δωματίων/Τιμοκαταλόγων');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Χρησιμοποιήστε το πεδίο για να περιορίσετε τον αριθμό των διαθεσίμων δωματίων και τιμοκαταλόγων που θα φαίνονται στη φόρμα κράτησης. Βάλτε μηδέν αν δε θέλετε περιορισμούς. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Δεν υπάρχει διαθεσιμότητα!');
// Translate from here
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Κάντε κράτηση τώρα:');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Καθολικός τρόπος επεξεργασίας;');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Προσέξτε αυτήν τη λειτουργία. Αν οριστεί σε Ναι, τότε η λειτουργία επεξεργασίας θα επηρεάσει το προσαρμοσμένο κείμενο για ΟΛΕΣ τις ιδιότητες του συστήματος για τη σταθερά που επεξεργάζεστε.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Σύμβολο παγκόσμιου νομίσματος');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Ορίστε το σε Ναι, εάν θέλετε να επιβάλλετε τον ιστότοπο σε προβολή Πλήρους σελίδας. Αυτό μπορεί να είναι χρήσιμο εάν σκοπεύετε να αποκτήσετε πρόσβαση στον ιστότοπο μέσω iframes.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Σαββατοκύριακα μόνο');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Μέρες Σαββατοκύριακου');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Ορίστε τις ημέρες του Σαββατοκύριακου. Τα τιμολόγια που επιτρέπουν ή απαγορεύουν τα Σαββατοκύριακα θα λάβουν υπόψη αυτήν τη ρύθμιση κατά τη δημιουργία της λίστας δωματίων.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Επιλέξτε τη χώρα σας πριν προσθέσετε οποιαδήποτε πληροφορία ιδιοκτησίας');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Αποθηκεύστε τις αλλαγές της ιδιοκτησίας σας πριν ανεβάσετε μια εικόνα ιδιοκτησίας');
jr_define('_JOMRES_TARIFFSFROM', 'Τιμές από -');
jr_define('_JOMRES_SEARCH_ALL', 'Όλα');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Χώρα');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Περιοχή');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Πόλη');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Χαρακτηριστικά');
jr_define('_JOMRES_SEARCH_BUTTON', 'Αναζήτηση');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Όρος αναζήτησης');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Αναζήτηση λέξεων (λέξεων):');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Εισαγάγετε τις ημερομηνίες άφιξης και αναχώρησης που επιθυμείτε και πατήστε το κουμπί για να βρείτε ακίνητα που διαθέτουν καταλύματα στις ημερομηνίες που επιλέξατε.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Λίστα όλων των ιδιοτήτων κατά τύπο ιδιότητας');
jr_define('_JOMRES_SEARCH_RTYPES', 'Λίστα όλων των ιδιοτήτων κατά τύπο δωματίου');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Προεπιλογή');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Όνομα ιδιοκτησίας');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Περιοχή ιδιοκτησίας');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Property Town');
jr_define('_JOMRES_SORTORDER_STARS', 'Stars');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Στοιχεία ιδιοτήτων');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Φόρμα κράτησης');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Ενημερώστε τα στοιχεία της διεύθυνσής σας');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Επανέλεγχος διαθεσιμότητας δωματίου <br/> (Θα γίνει επαναφορά της επιλογής δωματίου)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Επανέλεγχος διαθεσιμότητας');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Τροποποίηση των προαιρετικών σας πρόσθετων');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Αλλαγή επιλογής δωματίου');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Ενημέρωση των στοιχείων της διεύθυνσής σας');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Λυπούμαστε, ένα ή περισσότερα πεδία διευθύνσεων είναι εσφαλμένα.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Εικόνα δωματίου');
jr_define('_JOMRES_CURRENCYFORMAT', 'Μορφή νομίσματος');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Επιλογές αναζήτησης');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Αρχεία καταγραφής');
jr_define('JOMRES_COM_A_MESSAGE', 'Message');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Advanced');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Μικροδιαχείριση');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tariff Configuration Mode');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Προειδοποίηση: Η εναλλαγή μεταξύ διαφορετικών τύπων τιμολογίων μπορεί να οδηγήσει σε απώλεια δεδομένων. Δείτε την παρακάτω σημείωση σχετικά με αυτό </b>.
<br/> <br/>
Έχετε τρεις επιλογές για τον τρόπο διαμόρφωσης των τιμολογίων σας. <br/>
Κανονική λειτουργία: Θα έχετε ένα τιμολόγιο για κάθε τύπο δωματίου που ισχύει για τα επόμενα 10 χρόνια. <br/>
Μικροδιαχείριση: Μπορείτε να τροποποιήσετε την τιμή για κάθε μέρα για κάθε δωμάτιο/τύπο ακινήτου. <br/>
Για προχωρημένους: Η \"παλιά \" μέθοδος Jomres για τη διαχείριση των τιμολογίων. <br/>
<br/>
Οι διαφορετικοί τρόποι τιμολόγησης σάς επιτρέπουν να επιλέξετε τη μέθοδο διαμόρφωσης τιμολογίων που σας ταιριάζει καλύτερα. <br/>
Η κανονική λειτουργία είναι η πιο απλοϊκή, αλλά είναι η πιο εύκολη στην κατανόηση, διότι θα διασχίζει τα δωμάτια αναφοράς και τα τιμολόγια στους τύπους δωματίων/ιδιοκτησιών και σας επιτρέπει να διαμορφώσετε δωμάτια και τιμές στην ίδια σελίδα. <br/>
Η μικροδιαχείριση σάς επιτρέπει να μεταβάλλετε τις τιμές σε καθημερινή βάση χωρίς να χρειάζεται να διαχειρίζεστε τις τιμές των τιμολογίων, αυτό γίνεται με τη διασταύρωση πολλών διαφορετικών τιμολογίων μεταξύ τους. Αυτό έχει ως αποτέλεσμα μια σειρά τιμολογίων να δημιουργούνται για εσάς που καλύπτουν μια χρονική περίοδο, αλλά δεν μπορείτε να στρώσετε τιμολόγια το ένα πάνω στο άλλο. <br/>
Η προηγμένη λειτουργία σάς επιτρέπει να δημιουργήσετε ένα δωμάτιο και να το συσχετίσετε με έναν τύπο δωματίου. Στη συνέχεια, δημιουργείτε ένα τιμολόγιο και συσχετίζετε αυτό με έναν τύπο δωματίου. Χρησιμοποιώντας αυτήν τη μέθοδο, μπορείτε να \"στρώσετε \" τιμολόγια το ένα πάνω στο άλλο, για παράδειγμα ένας τύπος δωματίου \"διπλό κρεβάτι \" μπορεί να έχει ένα τιμολόγιο για bed and breakfast και ένα άλλο για κρεβάτι, πρωινό και βραδινό γεύμα. Η προηγμένη μέθοδος απαιτεί λίγη περισσότερη προσοχή στη λεπτομέρεια, επειδή είναι δυνατόν να αποσυνδεθεί ένα δωμάτιο ή μια τιμή από έναν τύπο δωματίου/ιδιοκτησίας ή να οριστεί εσφαλμένα έγκυρη από και μέχρι ημερομηνίες, αλλά σας δίνει επιλογές διαμόρφωσης στις άλλες λειτουργίες μην προσφέρετε. <br/>
<br/>
Επειδή οι λειτουργίες Κανονική και Μικροδιαχείριση απαιτούν συγκεκριμένη ρύθμιση δωματίων και τιμολόγια για να λειτουργήσει ο τρόπος τιμολόγησης, το σύστημα μπορεί να χρειαστεί να επαναφέρει ορισμένα δεδομένα για να καταστήσει τις τρέχουσες διαμορφώσεις τιμολογίων συμβατές με την τρέχουσα λειτουργία επεξεργασίας τιμολογίων. <br/>
<br/>
Κανονικό -> Για προχωρημένους. Καμία αλλαγή. Τα υπάρχοντα τιμολόγια διατηρούνται. <br/>
Κανονικό -> Μικροδιαχείριση. Όλα τα υπάρχοντα τιμολόγια καταργούνται. <br/>
Προηγμένο -> Κανονικό. Όλα τα υπάρχοντα τιμολόγια καταργούνται. <br/>
Advanced -> Micromanage. Όλα τα υπάρχοντα τιμολόγια καταργούνται. <br/>
Micromanage -> Advanced. Όλες οι υπάρχουσες παραπομπές μεταξύ των τιμολογίων καταργούνται, αλλά τα ίδια τα τιμολόγια θα παραμείνουν. <br/>
Μικροδιαχείριση -> Κανονικό. Όλες οι υπάρχουσες παραπομπές και τιμολόγια καταργούνται. <br/> ");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Εμφάνιση λίστας δωματίων στη σελίδα λεπτομερειών ακινήτου;');
jr_define('JOMRES_PROPERTYTYPE', 'Τύπος ιδιότητας');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Μέγ. άτομα ανά δωμάτιο');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Μέγ. άτομα στην κράτηση');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Προσθήκη σημείωσης');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Επεξεργασία σημείωσης');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Διαγραφή σημείωσης');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Προβολή σημειώσεων');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Προστέθηκε νέα σημείωση');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Επεξεργασμένη σημείωση');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Διαγραμμένη σημείωση');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'List Bookings');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'My Bookings');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Προβολή κράτησης');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Προβολή αγαπημένων');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Δεν έχετε προσθέσει ακόμα αγαπημένα!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Τύπος ιδιοκτησίας');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Σοφή τιμή');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Active');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Αυτό το πρόσθετο σάς επιτρέπει να ενεργοποιείτε και να διαμορφώνετε δυναμικά τις τιμές των δωματίων σας.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Οι περισσότερες επιχειρήσεις θα υπολογίσουν εκ νέου τις τιμές των δωματίων με βάση τον αριθμό των απαιτούμενων δωματίων που είναι διαθέσιμα σε μια δεδομένη ημερομηνία. Αυτό τους επιτρέπει να προσφέρουν εκπτώσεις σε έναν τύπο δωματίου που δεν είναι απασχολημένος κατά τη διάρκεια μιας δεδομένης περίοδο με στόχο την προσέλκυση επιχειρήσεων που διαφορετικά θα μπορούσαν να χαθούν. <br/> Η ενεργοποίηση και η διαμόρφωση αυτού του πρόσθετου σάς επιτρέπει να προσφέρετε προσαρμόσιμη τιμολόγηση βάσει του αριθμού των δωματίων ενός επιλεγμένου τύπου που είναι διαθέσιμα στο κατάλυμα μια δεδομένη ημέρα. <br /> The threashold των ημερών καθορίζει τον αριθμό των ημερών που πρέπει να είναι η ημερομηνία άφιξης πριν από την προσαρμογή των τιμών των δωματίων με αυτήν τη δυνατότητα και, στη συνέχεια, οι επιλογές ποσοστών σάς επιτρέπουν να διαμορφώσετε το ποσοστό των δωματίων που θα είναι διαθέσιμα πριν από την εφαρμογή μιας δεδομένης έκπτωσης. ');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (αριθμός ημερών μεταξύ της ημερομηνίας άφιξης και σήμερα)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Ποσοστό δωματίων 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Ποσοστό δωματίων καταλαμβάνεται 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Ποσοστό δωματίων 50%');
jr_define("_JOMCOMP_WISEPRICE_PERCENTAGE75", "Ποσοστό δωματίων καταλαμβάνεται 75%");
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Έκπτωση %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'έχει μειωθεί από');
jr_define('_JOMCOMP_WISEPRICE_TO', 'to');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Η τιμή δωματίου δεν έχει έκπτωση');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Μπορείτε να λάβετε κλειδί API για χάρτες Google από <a href = "https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target ="_blank"> Χάρτες Google </a>. Μόλις εισαγάγετε το κλειδί του χάρτη σας εδώ, ο Jomres θα εμφανίσει τον χάρτη στη σελίδα Λεπτομέρειες ιδιοκτησίας. ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Τελευταία στιγμή');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Ενεργό;');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Ορίστε το σε Ναι εάν θέλετε να προσφέρετε προσφορές τελευταίας στιγμής.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Εάν πραγματοποιηθεί κράτηση και η ημερομηνία άφιξης είναι μόνο N ημέρες από την ημερομηνία κράτησης, τότε μπορεί να εφαρμοστεί η έκπτωση');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Έκπτωση');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Σε ποσοστό');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Έχει εφαρμοστεί έκπτωση σε αυτήν την κράτηση!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Το κόστος της διαμονής έχει μειωθεί κατά');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Αυτή η ιδιότητα προσφέρει έκπτωση τελευταίας στιγμής');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'ποσοστό εάν κάνετε κράτηση για να φτάσετε πριν');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', 'τοις εκατό ή περισσότερο εάν κάνετε κράτηση για να φτάσετε πριν');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Κάντε κράτηση τώρα για να αξιοποιήσετε στο έπακρο αυτήν την προσφορά!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Λεπτομέρειες τιμολογίων');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Ορίστε το σε Ναι για να εμφανίζονται πιο λεπτομερείς πληροφορίες τιμολογίου στα στοιχεία ιδιοτήτων/αναδυόμενο τιμολόγιο');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Ελαχιστοποίηση επιλογών διαμόρφωσης');
jr_define('_JOMCOMP_AMEND', 'Τροποποίηση κράτησης - επιλογή ιδιοκτησίας');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Select Property');
jr_define('_JOMCOMP_AMEND_HEADER', 'Αρχικό συμβόλαιο:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Καταβολή επί πληρωμή');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Η κατάθεση δεν έχει πληρωθεί');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Παράκαμψη κατάθεσης');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Cancel');
jr_define('_JRPORTAL_CPANEL', 'Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Προκαθορισμένο επιτόκιο προμήθειας');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Επιλέξτε το προεπιλεγμένο επιτόκιο προμήθειας που θα εφαρμοστεί σε ένα ακίνητο σε περίπτωση που δεν καθοριστεί διαφορετικά άλλη προμήθεια.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Λίστα τιμών προμήθειας');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Τιμές προμήθειας');
jr_define('_JRPORTAL_CRATE_TITLE', 'Title');
jr_define('_JRPORTAL_CRATE_TYPE', 'Type');
jr_define('_JRPORTAL_CRATE_VALUE', 'Ποσοστό προμήθειας');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Κωδικός νομίσματος');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Ιδιότητες λίστας');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Όνομα ιδιοτήτων');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Διεύθυνση ιδιοκτησίας');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Οι ιδιότητες των οποίων το χρώμα φόντου είναι κόκκινο δεν έχουν ακόμη εφαρμόσει προμήθεια σε αυτές.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Στατιστικά');
jr_define("_JRPORTAL_PROPERTIES_COMMISSIONRATE", "Ποσοστό προμήθειας");
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Λίστα κρατήσεων');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Αναγνωριστικό ιδιοκτησίας');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Αναγνωριστικό τιμολογίου');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Σύνολο κρατήσεων');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Ημερομηνία αρχειοθέτησης');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Περιγραφή');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Μπορείτε να έχετε συγκεκριμένα αρχεία γλώσσας τύπου ιδιοτήτων, ορίζοντας την περιγραφή στο όνομα ενός υποφακέλου, π.χ. πληκτρολογήστε έτσι ώστε τα δωμάτια να γίνουν, για παράδειγμα, DVD, κλπ. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Δεν μπορείτε να διαγράψετε αυτήν την ιδιότητα καθώς είναι η μόνη ιδιότητα στην οποία έχετε πρόσβαση. Εάν θέλετε να την απενεργοποιήσετε, χρησιμοποιήστε τη δυνατότητα κατάργησης δημοσίευσης στη γραμμή εργαλείων σας.');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Σύνολο καταλύματος');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'νύχτα (ες)');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'ανά δωμάτιο');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Enhance Your Stay Total');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Summary Price');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Διαβάστε και συμφωνήστε');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Μια περίληψη της κράτησής σας εμφανίζεται παρακάτω. <br /> Για να κάνετε οποιεσδήποτε αλλαγές, κάντε κλικ στο κουμπί Τροποποίηση κράτησης.');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Εάν πρέπει να αλλάξετε οποιαδήποτε από τις παραπάνω πληροφορίες, κάντε κλικ εδώ');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Τροποποίηση κράτησης');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Εισαγάγετε τυχόν ειδικά αιτήματα στο παρακάτω πλαίσιο.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Επιβεβαιώνω ότι οι παραπάνω πληροφορίες είναι σωστές και συμφωνώ με το');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'ανά άτομο ανά διανυκτέρευση');
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'του');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Αρχή');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Προηγούμενος');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Επόμενο');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'Τέλος');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Αποτελέσματα');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Σημειώστε ότι αυτό δεν είναι μια φόρμα κράτησης, αλλά στέλνετε ένα email. <br/> Εισαγάγετε το μήνυμα στο οποίο θα θέλατε να στείλετε');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Επικοινωνήστε με το ξενοδοχείο');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Ερώτηση ακινήτου από');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Σας ευχαριστούμε για την ερώτησή σας, το μήνυμά σας έχει σταλεί στη διεύθυνση ηλεκτρονικού ταχυδρομείου επικοινωνίας της ιδιοκτησίας και αντιγράφηκε στη δική σας διεύθυνση για τα αρχεία σας. Θα σας απαντήσουν το συντομότερο δυνατό με την απάντησή τους . ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'σχετικά');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Επιλέξτε το απαιτούμενο κατάλυμά σας από τη λίστα στα δεξιά');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Ελάχιστα ήδη επιλεγμένα δωμάτια');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Ελάχιστος αριθμός δωματίων που έχουν ήδη επιλεγεί κατά την κράτηση πριν από την προσφορά συνδυασμού τιμολόγησης/τύπου δωματίου. Σας επιτρέπει να έχετε μειωμένα τιμολόγια όταν έχουν ήδη επιλεγεί περισσότερα από N δωμάτια.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Μέγιστα ήδη επιλεγμένα δωμάτια');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Ο μέγιστος αριθμός δωματίων που έχουν ήδη επιλεγεί κατά την κράτηση πριν από το συνδυασμό τιμολόγησης/δωματίου δεν προσφέρεται πλέον. Σας επιτρέπει να σταματήσετε να προσφέρετε αυτόν τον συνδυασμό τύπου/τιμολόγησης δωματίου μόλις επιλεγούν N δωμάτια στη φόρμα κράτησης.');

jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Available');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Ορισμένες κρατήσεις');
jr_define('_JOMRES_AVLCAL_HALF', 'Half booked');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Κυρίως κρατημένο');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Πλήρης κράτηση');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Ανά εβδομάδα');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Ανά ημέρα');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Ανά κράτηση');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Ανά άτομο ανά κράτηση');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Ανά άτομο ανά ημέρα');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Ανά άτομο την εβδομάδα');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Ανά ημέρες (λεπτά ημερών)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Ανά ημέρα Χ επιλεγμένα δωμάτια');
jr_define('_JOMRES_REGISTRYREBUILD', 'Αναδημιουργία μητρώου μικροσυστατικών & ανασυγκρότηση της προσωρινής μνήμης');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Συνήθως το μητρώο προσθηκών Jomres ανακατασκευάζεται αυτόματα κάθε φορά που βλέπετε τον διαχειριστή προσθηκών και προσθέτετε ή αφαιρείτε ένα πρόσθετο, ωστόσο είναι πιθανό να μην μπορείτε να χρησιμοποιήσετε αυτές τις δυνατότητες για κάποιο λόγο, επομένως μπορείτε να χρησιμοποιήσετε αυτήν τη λειτουργία για να ξαναχτίσετε το μητρώο μη αυτόματα. Εάν έχετε πρόσβαση στη λειτουργία Διαχείριση προσθηκών και αναβαθμίσεις τότε είναι απίθανο να χρειαστεί να χρησιμοποιήσετε αυτήν τη λειτουργία. Θα χρειαστεί να ξαναχτίσετε το μητρώο προσθηκών κάθε φορά που προσθέτετε ένα νέο μίνι στοιχείο και δεν χρησιμοποιείτε τη Διαχείριση προσθηκών για να το προσθέσετε. ");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Το μητρώο ανακατασκευάστηκε με επιτυχία');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Παρουσιάστηκε σφάλμα κατά την ανακατασκευή του μητρώου των μικροσυστατικών. Θα πρέπει να ελέγξετε το αρχείο καταγραφής σφαλμάτων Jomres για να δείτε αν υπάρχει εγγραφή για το τι προκάλεσε το σφάλμα.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Τιμή');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Δεν έχετε κάνει ακόμη κράτηση!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Επεξεργασία τύπου ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Επιλέξτε τον τύπο ιδιοκτησίας σας');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Το ερώτημά σας ...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Όριο λίστας ιδιοτήτων');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Ο αριθμός ιδιοτήτων που εμφανίζονται σε μια σελίδα μετά από αναζήτηση');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Ολοκληρωμένη λειτουργία αναζήτησης');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Η ενσωματωμένη δυνατότητα αναζήτησης Jomres επιτρέπει στους χρήστες σας να πραγματοποιούν αναζήτηση σε ιδιότητες Jomres σύμφωνα με ένα σύνολο λειτουργιών. Εάν έχετε ήδη χρησιμοποιήσει τις δυνατότητες αναζήτησης του Jomres στο Joomla θα είστε εξοικειωμένοι με αυτές τις ρυθμίσεις. <br/ > Αυτή η λειτουργία μας επιτρέπει να προσφέρουμε χειρισμό αναζήτησης στο Jomres για εκείνους τους χρήστες που δεν θέλουν να χρησιμοποιήσουν μονάδες αναζήτησης Joomla ή για άλλους χρήστες CMS που το CMS δεν διαθέτει τις δικές του μονάδες αναζήτησης Jomres. <br/> Απλώς θυμηθείτε ότι εάν επιλέξετε να αναζητήσετε κάτι μέσω συνδέσμου (δηλαδή όχι αναπτυσσόμενο μενού), τότε δεν θα εφαρμοστούν άλλες επιλογές αναζήτησης, παρά μόνο το στοιχείο που αντιστοιχεί στον σύνδεσμο στον οποίο κάνατε κλικ. <br/> Σημειώστε ότι από προεπιλογή, η διάταξη αυτής της ολοκληρωμένης αναζήτησης δεν είναι πολύ όμορφη. Αυτό συμβαίνει επειδή το αρχείο προτύπου που εκτελεί τη διάταξη πρέπει να περιλαμβάνει όλες τις πιθανές επιλογές, μερικές από τις οποίες δεν είναι συμβατές. ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Ενεργοποίηση αυτής της λειτουργίας;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Εάν αυτή η δυνατότητα είναι ενεργοποιημένη, τότε οποιαδήποτε κλήση στο Jomres που εμφανίζει τη λίστα ιδιοτήτων σημαίνει ότι εμφανίζονται και οι επιλογές αναζήτησης.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Χρήση στηλών');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Οποιαδήποτε επιλογή αναζήτησης που ορίσατε ως τύπος συνδέσμου (όπου είναι σχετικό) θα εμφανίζεται ως στήλες (ΙΕ br στο τέλος του συνδέσμου)') ;
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Αναζήτηση περιοχής με επιλεγμένο αναπτυσσόμενο μενού');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Προσφέρετε ένα αναπτυσσόμενο μενού αναζήτησης για φιλτράρισμα χωρών/περιοχών/πόλεων. Εάν πρόκειται να χρησιμοποιήσετε αυτήν τη λειτουργία, τότε καλύτερα να μην χρησιμοποιείτε τις παρακάτω αναζητήσεις περιοχής/πόλης παρακάτω.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Αναζήτηση κατά όνομα ιδιοκτησίας');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Εμφάνιση της αναζήτησης με εισαγωγή ονόματος ιδιότητας.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Εμφάνιση ως αναπτυσσόμενο μενού;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Ορίστε το σε όχι για να εμφανίζεται η λίστα ως σύνδεσμοι');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Πόλη/περιοχή');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Εμφάνιση της εισόδου περιοχής');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Εμφάνιση ως αναπτυσσόμενο μενού;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Ορίστε το σε όχι για να εμφανιστεί η λίστα ως σύνδεσμοι');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Αναζήτηση ανά τύπο ιδιότητας');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Εμφάνιση της αναζήτησης κατά είσοδο τύπου ιδιοτήτων');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Εμφάνιση ως αναπτυσσόμενο μενού;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Ορίστε το σε όχι για να εμφανίζεται η λίστα ως σύνδεσμοι');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Αναζήτηση ανά τύπο δωματίου');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Εμφάνιση της αναζήτησης ανά είσοδο τύπου δωματίου');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Εμφάνιση ως αναπτυσσόμενο μενού;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Ορίστε το σε όχι για να εμφανιστεί η λίστα ως σύνδεσμοι');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Χαρακτηριστικά');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Εμφάνιση της αναζήτησης με εισαγωγή χαρακτηριστικών');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Εμφάνιση ως αναπτυσσόμενο μενού;');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Ορίστε το σε όχι για να εμφανίζεται η λίστα ως εικόνες και πλαίσια ελέγχου');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Αναζήτηση με περιγραφή');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Εμφάνιση της αναζήτησης κατά εισαγωγή περιγραφής');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Αναζήτηση βάσει διαθεσιμότητας');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Εμφάνιση της αναζήτησης με βάση τη διαθεσιμότητα');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Αναζήτηση ανά εύρος τιμών');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Εμφάνιση της αναζήτησης κατά εισαγωγή εύρους τιμών');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Αύξηση εύρους τιμών');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Ο Jomres θα εξετάσει όλες τις τιμές στα τιμολόγια και στη συνέχεια θα επεξεργαστεί μια σειρά εύρους τιμών με βάση την τιμή προσαυξήσεων που ορίζετε εδώ.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Από προεπιλογή, εάν μια ιδιότητα δεν είναι επιλεγμένη στο Jomres θα πραγματοποιήσει αναζήτηση. Εάν αυτή η αναζήτηση δεν ενεργοποιήθηκε από μια ενότητα αναζήτησης, τότε η αναζήτηση θα παράγει τυχαία αποτελέσματα (σκόπιμα). Αυτή η επιλογή σας επιτρέπει να περιορίστε τον αριθμό των επιστροφών σε αυτήν την τυχαία αναζήτηση. ');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Πληροφορίες εργασίας ψευδοκρονίου. Η λειτουργικότητα του ψευδοκρονίου απαιτείται με την τιμολόγηση και το χειρισμό της προμήθειας.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Εμφάνιση καταγραφής στο πρόγραμμα περιήγησης');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Λειτουργεί μόνο εάν η μέθοδος έχει οριστεί σε Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Η καταγραφή ενεργοποιήθηκε');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ορίστε το σε Ναι για ενεργοποίηση της καταγραφής. Τα αποτελέσματα των αρχείων καταγραφής θα εξάγονται παρακάτω.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Λεκτική καταγραφή');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Πολλή έξοδος καταγραφής');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Προσαρμοσμένα πεδία');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Εδώ μπορείτε να ορίσετε απλά προσαρμοσμένα πεδία που θα εμφανίζονται στη φόρμα κράτησης.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Όνομα πεδίου (χωρίς κενά)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Προεπιλεγμένη τιμή');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Περιγραφή');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Απαιτείται');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Εάν η Μέγιστη ποσότητα έχει οριστεί σε μεγαλύτερη από 1, τότε θα προσφέρεται στους επισκέπτες ένα αναπτυσσόμενο μενού για να επιλέξουν την ποσότητα των πρόσθετων που απαιτούνται.');
	jr_define('_JRPORTAL_TAXRATES_TITLE', 'Φορολογικοί συντελεστές');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Φορολογικός κωδικός');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Βαθμολόγηση περιγραφής');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Δεν μπορείτε να διαγράψετε αυτόν τον φορολογικό συντελεστή.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Τιμολόγια');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Απλήρωτο');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Πληρωμένο');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Ακυρώθηκε');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Σε εκκρεμότητα');
jr_define('_JRPORTAL_INVOICES_USER', 'User');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Κατάσταση');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Λόγω');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Συνδρομή');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Εξαιρετικό σύνολο');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Επαναλαμβανόμενη συχνότητα');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Επαναλαμβανόμενη ημέρα του μήνα');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Κωδικός νομίσματος');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Στοιχεία γραμμής');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Όνομα');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Περιγραφή');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Αρχική τιμή');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Αρχική ποσότητα');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Αρχική έκπτωση');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Αρχικό σύνολο');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Φορολογικός κωδικός');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Περιγραφή φόρου');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Φορολογικός συντελεστής');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Παράκαμψη τυπικών ρυθμίσεων πύλης Jomres;');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Εμφάνιση των τιμολογίων μου');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Εκπτωτικά κουπόνια');
jr_define('_JRPORTAL_COUPONS_DESC', 'Οι κωδικοί έκπτωσης μπορούν να δημιουργηθούν και να μεταβιβαστούν στους επισκέπτες ως κίνητρο για την πραγματοποίηση κρατήσεων. Ισχύει από και μέχρι τις ημερομηνίες που αναφέρονται στις ημερομηνίες στις οποίες μπορεί να πραγματοποιηθεί κράτηση, όχι στις ημερομηνίες της ίδιας της κράτησης.');
	jr_define('_JRPORTAL_COUPONS_CODE', 'Κωδικός κουπονιού');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Ισχύει από');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Ισχύει για');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Έκπτωση ποσό');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Η έκπτωση είναι ποσοστό');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Μόνο δωμάτιο');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Εάν έχετε κωδικό κουπονιού, εισαγάγετε τον στο πλαίσιο και κάντε κλικ στο σύνδεσμο "Αποθήκευση κουπονιού" για να αποθηκεύσετε τα στοιχεία του κουπονιού στην κράτησή σας.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Αποθήκευση κουπονιού');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Το κουπόνι αποθηκεύτηκε έναντι κράτησης');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Ο αριθμός κουπονιού δεν βρέθηκε');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Εκπτωτική αξία κουπονιού');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Κράτηση με έκπτωση. Κωδικός κουπονιού/τιμή έκπτωσης/ρυθμίσεις κουπονιού:');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Επιλέξτε γλώσσες');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Επιλέξτε τις επιλογές γλώσσας που θα εμφανίζονται στο αναπτυσσόμενο μενού αλλαγής γλώσσας.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Εμφάνιση του αναπτυσσόμενου μενού επιλογής γλώσσας;');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Αγαπητέ');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Σας ευχαριστούμε για την εγγραφή');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Το όνομα χρήστη σας είναι:');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ο κωδικός πρόσβασής σας είναι:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Συνδεθείτε για να δείτε τις κρατήσεις σας');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Το κουπόνι αποθηκεύτηκε');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Το κουπόνι διαγράφηκε');
// Δεν χρησιμοποιείται ακόμη
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> SMS Clickatell');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Όνομα χρήστη');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Κωδικός πρόσβασης');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Ειδοποιητικός αριθμός κινητού');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Χρησιμοποιήστε τη μορφή \" Κωδικός χώρας, αριθμός κινητού \". Για παράδειγμα, ένας αριθμός κινητού με έδρα το Ηνωμένο Βασίλειο θα ήταν κάτι σαν\" 447979123456 \". Αφήστε αυτό το κενό αν δεν θέλετε να σταλούν μηνύματα ειδοποίησης στο κινητό σας τηλέφωνο.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Προφανώς, δεν μπορείτε να χρησιμοποιήσετε/δοκιμάσετε αυτήν την πύλη από το localhost, θα πρέπει να το κάνετε σε έναν \"ζωντανό\" διακομιστή. </b>
<br/>
<br/>
Για να χρησιμοποιήσετε την πύλη Clickatell χρειάζεστε έναν λογαριασμό Clickatell και τουλάχιστον μία καταχωρημένη σύνδεση (παρουσία υποπροϊόντος API) μεταξύ της εφαρμογής σας και της πύλης μας. Κάθε σύνδεση
η μέθοδος είναι γνωστή ως υπο-προϊόν. Δείτε πώς: <br/>
<br/>
<b> Βήμα 1 - εγγραφή για λογαριασμό Clickatell </b> <br/>
Εάν δεν έχετε ήδη λογαριασμό Clickatell, πρέπει να εγγραφείτε για έναν σύμφωνα με τα παρακάτω. Διαφορετικά, προχωρήστε στο Βήμα 2. <br/>
* Μεταβείτε στη διεύθυνση http://www.clickatell.com/products/sms_gateway.php και επιλέξτε το κατάλληλο υποπροϊόν API (μέθοδος σύνδεσης) που θέλετε να χρησιμοποιήσετε (Clickatell Central (API)) <br/>
* Κάντε κλικ στον υπερσύνδεσμο εγγραφής. <br/>
* Συμπληρώστε τη φόρμα εγγραφής. <br/>
Αφού υποβάλετε επιτυχώς τη φόρμα, θα συνδεθείτε αυτόματα στον νέο σας λογαριασμό και θα μεταφερθείτε σε μια σελίδα όπου μπορείτε να προσθέσετε τη σύνδεση API που έχετε επιλέξει. <br/>
<b> Βήμα 2 - προσθέστε μια καταχωρημένη σύνδεση API (υπο -προϊόν) </b> <br/>
Εάν δεν έχετε συνδεθεί ήδη στον λογαριασμό σας, τότε πρέπει να το κάνετε στη διεύθυνση http://www.clickatell.com/login.php <br/>
* Επιλέξτε \"Διαχείριση των προϊόντων μου \" από το επάνω μενού. <br/>
* Επιλέξτε τον τύπο σύνδεσης API που θέλετε να χρησιμοποιήσετε (API HTTP) από το αναπτυσσόμενο μενού (\"Προσθήκη σύνδεσης\"). <br/>
* Συμπληρώστε τη φόρμα. Βεβαιωθείτε ότι εισάγετε το κλειδωμένο IP (το IP αυτού του διακομιστή), ορίστε την επιστροφή κλήσης σε HTTP POST. Θα πρέπει να ορίσετε την επανάκληση IP σε ".get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback και όνομα χρήστη και κωδικό πρόσβασης. <br/>
Εάν καταχωρίσετε περισσότερες από μία συνδέσεις API, το όνομα περιγραφής που εισάγετε για κάθε ένα πρέπει να είναι μοναδικό - δεν μπορείτε να έχετε πολλά API με το ίδιο όνομα. <br/>
Μετά την επιτυχή υποβολή της φόρμας, θα εμφανίζονται τα στοιχεία ελέγχου ταυτότητας, συμπεριλαμβανομένου του μοναδικού API ID κάθε σύνδεσης (api_id). Αυτές οι λεπτομέρειες ελέγχου ταυτότητας απαιτούνται όταν συνδέεστε στην πύλη Clickatell για να στείλετε ένα μήνυμα. <br/>
<br/>
Χρησιμοποιήστε το όνομα χρήστη, τον κωδικό πρόσβασης και το api_id για να συμπληρώσετε τα παραπάνω πεδία. <br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Φόρμα κράτησης στη λίστα δωματίων εμφανίζει πρόσβαση με ειδικές ανάγκες');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Φόρμα κράτησης στη λίστα δωματίων δείχνει τα μέγιστα άτομα');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Λάβετε υπόψη ότι οι τιμές των δωματίων που αναφέρονται είναι εκτιμήσεις και η πλήρης τιμή της κράτησης δεν θα υπολογιστεί μέχρι να προσθέσετε ένα δωμάτιο ή δωμάτια στην επιλογή σας.');
	jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Συνδρομητικά πακέτα');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Όνομα');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Περιγραφή');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Δημοσιεύθηκε');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Πλήρες ποσό');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Όριο ιδιοτήτων');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Εγγραφή');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Χρήση λειτουργιών χειρισμού συνδρομών');
jr_define('_JOMRES_COM_NEWUSER', 'Δημιουργία νέου χρήστη κατά την κράτηση');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Δημιουργία νέου λογαριασμού χρήστη σε μη καταχωρημένες κρατήσεις χρηστών.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Κάντε κλικ εδώ για να καταχωρίσετε την ιδιοκτησία σας');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Νέα στοιχεία χρήστη');
jr_define('_JOMRES_LATLONG_DESC', 'Χρησιμοποιήστε το ποντίκι σας για να μετακινηθείτε στον χάρτη και σύρετε τον δείκτη στη θέση της ιδιοκτησίας σας για να ορίσετε το γεωγραφικό πλάτος και γεωγραφικό μήκος.');
jr_define('_JOMRES_CONTROLPANEL', 'Πίνακας ελέγχου');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Εμφάνιση τιμολογίου');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Εμφάνιση τιμολογίων');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Προσθήκη της ιδιοκτησίας μου σε αυτόν τον ιστότοπο');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Λυπούμαστε, αλλά το αναγνωριστικό πακέτου δεν αναγνωρίζεται.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Συγγνώμη, έχετε ήδη εγγραφεί σε ένα δωρεάν πακέτο, δεν μπορείτε να εγγραφείτε ξανά σε αυτό το πακέτο.');
	jr_define('_JOMRES_COM_YOURBUSINESS', 'Τα στοιχεία της επιχείρησής σας');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'όνομα επιχείρησης');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'ΑΦΜ');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Αριθμός κτιρίου');
jr_define('_JOMRES_INVOICE_NUMBER', 'Αριθμός τιμολογίου');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Επιλέξτε τις ημερομηνίες για τις οποίες θέλετε να εφαρμόσετε τη μαύρη κράτηση. Όταν επιλέξετε τις κατάλληλες ημερομηνίες, κάντε κλικ στο κουμπί "εφαρμογή" για να ελέγξετε ξανά τη διαθεσιμότητα. <br/>
<br/>
Εάν το κατάλυμα έχει μία ή περισσότερες κρατήσεις για την επιλεγμένη περίοδο, τότε δεν θα μπορείτε να κάνετε κράτηση έως ότου οι άλλες κρατήσεις/μαύρες κρατήσεις ακυρωθούν/κλείσουν. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Λυπούμαστε, δεν μπορείτε να κάνετε μαύρη κράτηση αυτής της ιδιότητας για αυτές τις ημερομηνίες.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Μπορείτε να κάνετε blackbook αυτήν την ιδιότητα για αυτές τις ημερομηνίες.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Η ιδιοκτησία σας έχει ρυθμιστεί να χρεώνεται ανά άτομο ανά διανυκτέρευση, αλλά δεν έχετε δημιουργήσει ή δημοσιεύσει τύπους επισκεπτών, δημιουργήστε και δημοσιεύστε έναν ή περισσότερους τύπους επισκεπτών.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Δεν έχετε ρυθμίσει ακόμη τιμολόγια, δεν θα μπορείτε να κάνετε κρατήσεις για το ακίνητό σας.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Label Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Label Editing mode off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Χρέωση μεταβλητών καταθέσεων;');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Οι μεταβλητές καταθέσεις σάς επιτρέπουν να καθορίσετε εάν θέλετε να χρεώσετε ολόκληρο το ποσό εάν η ημερομηνία άφιξης της κράτησης είναι εντός N ημερών από το "σήμερα". Ορίστε αυτήν την επιλογή σε Ναι για να ενεργοποιήσετε τη λειτουργία , και εισαγάγετε τον αριθμό των παρακάτω ημερών, για παράδειγμα εάν η ημέρα άφιξης είναι εντός 60 ημερών, τότε το ποσό της προκαταβολής που χρεώνεται θα είναι το πλήρες ποσό, διαφορετικά το ποσό θα βασίζεται στις επιλογές κατάθεσης που έχουν διαμορφωθεί παραπάνω. ');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Ο αριθμός των ημερών, εντός των οποίων θα χρεωθεί ολόκληρο το ποσό ως κατάθεση.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Το email επιβεβαίωσης έχει σταλεί. Μπορείτε να κλείσετε αυτό το παράθυρο τώρα.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Επικοινωνία με τον πράκτορα');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Επισήμανση τιμολογίου ως πληρωμένου');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Τιμολόγιο επισημασμένο ως πληρωμένο');
jr_define('_JOMRES_APIKEY_REMAKE', 'Δημιουργία νέου κλειδιού API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Πρόκειται για μια εγκατάσταση μεμονωμένης ιδιοκτησίας;');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Εάν αυτή η επιλογή έχει οριστεί σε Ναι, τότε η απρόσκοπτη προβολή του Jomres σε μη εξουσιοδοτημένους χρήστες απλοποιείται σε μεγάλο βαθμό. Οι προεπιλεγμένες κλήσεις προς Jomres από μια επιλογή μενού, αντί να λαμβάνουν μια λίστα ιδιοτήτων, αρκεί ο επισκέπτης στη φόρμα κράτησης για την πρώτη ιδιοκτησία στο σύστημα. Οι διαχειριστές ακινήτων επίσης δεν θα δουν το κουμπί προεπισκόπησης Λεπτομέρειες ιδιοκτησίας ή το κουμπί Προσθήκη νέας ιδιότητας. Ιδανικό εάν θέλετε να καταχωρίσετε μόνο μία ιδιοκτησία και να κάνετε κρατήσεις γι \'αυτήν. <br /> ');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Πληρωμή υπολοίπου');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Σημειώστε ότι χρησιμοποιείτε τη λειτουργία επεξεργασίας με ενεργοποιημένη τη λειτουργία καθολικής επεξεργασίας. Αυτό είναι καλό αν καταλαβαίνετε τι σημαίνει η λειτουργία καθολικής επεξεργασίας, ωστόσο αν δεν μπορείτε να δημιουργήσετε προβλήματα στον εαυτό σας. Εάν δεν είστε σίγουροι εάν πρέπει να χρησιμοποιείτε το Jomres με αυτόν τον τρόπο, δείτε <a href = "https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target ="_blank"> η σελίδα εγχειριδίου τρόπου επεξεργασίας </a> για περισσότερες πληροφορίες σχετικά με αυτό το θέμα. ');
jr_define('_JOMRES_SUPPORTKEY', 'Κλειδί υποστήριξης');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Ο αριθμός κλειδιού άδειας υποστήριξης (γνωστός και ως αριθμός άδειας). Θα χρειαστείτε μια ενημερωμένη άδεια για να μπορείτε να κάνετε λήψη πρόσθετων για το Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Προσωπική έκπτωση');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Περιορισμός εγγραφής ακινήτου σε μία χώρα;');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Μπορείτε να διασφαλίσετε ότι οι εγγραφές ακινήτων περιορίζονται σε μία μόνο χώρα, ορίζοντας αυτήν την επιλογή Ναι και ορίζοντας τη χώρα στην ακόλουθη επιλογή.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Τα ακίνητα βρίσκονται σε αυτήν τη χώρα:');
jr_define('_JOMRES_JQUERYTHEME', 'Θέμα Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Επιλέξτε ένα θέμα jquery για χρήση για τις καρτέλες λεπτομερειών ιδιοτήτων.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Λυπούμαστε, αλλά αυτή η ιδιότητα δεν είναι προς το παρόν διαθέσιμη.');
jr_define('_JOMRES_REVIEWS', 'Κριτικές');
jr_define('_JOMRES_REVIEWS_TITLE', 'Τίτλος κριτικής');
jr_define('_JOMRES_REVIEWS_DATE', 'δημοσιεύτηκε στο');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Δεν υπάρχουν ακόμη κριτικές για αυτήν την ιδιότητα.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Θα θέλατε να είστε ο πρώτος που θα αξιολογήσει αυτήν την ιδιότητα;');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Συμφωνώ με αυτήν την κριτική');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Διαφωνώ με αυτήν την κριτική');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Μέση βαθμολογία:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Σύνολο ψήφων:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Προσθήκη νέας κριτικής.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Πρέπει να είστε συνδεδεμένοι για να δημοσιεύσετε μια κριτική.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Πείτε μας τη γνώμη σας για αυτήν την ιδιότητα:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Αυτός ο κριτής μας είπε:');
jr_define('_JOMRES_REVIEWS_PROS', 'Πλεονεκτήματα:');
jr_define('_JOMRES_REVIEWS_CONS', 'Μειονεκτήματα:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Υποβλήθηκε στις:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Έχετε ήδη ελέγξει αυτήν την ιδιότητα, δεν μπορείτε \ να δημοσιεύσετε άλλη κριτική για αυτήν.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Λυπούμαστε, αλλά δεν επιτρέπεται να δημοσιεύετε κριτικές σε αυτόν τον ιστότοπο.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Εμφάνιση κριτικών');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'οι επισκέπτες συμφωνούν με αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'οι επισκέπτες δεν συμφωνούν με αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'ο επισκέπτης συμφωνεί με αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'ο επισκέπτης δεν συμφωνεί με αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Σας ευχαριστούμε που μοιραστήκατε τη γνώμη σας για αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Σας ευχαριστούμε, αλλά έχετε ήδη μοιραστεί τη γνώμη σας για αυτήν την κριτική.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Βεβαιωθείτε ότι έχουν συμπληρωθεί όλα τα πεδία.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Συνοψίστε την κριτική σας εισάγοντας έναν τίτλο');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Εισαγάγετε μια πιο ολοκληρωμένη κριτική στο πλαίσιο περιγραφής');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Εισαγάγετε τα καλά μέρη της εμπειρίας σας ως επισκέπτης σε αυτό το κατάλυμα');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Καταχωρίστε τυχόν αρνητικές σκέψεις για την εμπειρία σας');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Βαθμολογήστε την φιλοξενία που λάβατε από το προσωπικό');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Παρακαλούμε αξιολογήστε τη γνώμη σας για τις τοπικές ρυθμίσεις του ακινήτου');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Παρακαλώ δώστε τη γνώμη σας για την καθαριότητα του ακινήτου');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Βαθμολογήστε το κατάλυμα. comfortableταν άνετο ή με σπείρωμα');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Παρακαλώ δώστε τη γνώμη σας για το αν είχε σχέση ποιότητας / τιμής');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Παρακαλούμε αξιολογήστε τις υπηρεσίες');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Περίληψη κριτικής');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Η εμπειρία σας με περισσότερες λεπτομέρειες');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Σας ευχαριστούμε που υποβάλατε την κριτική σας.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Σας ευχαριστούμε που υποβάλατε την κριτική σας. Θα δημοσιευτεί σύντομα από έναν από τους σκληρά εργαζόμενους συντονιστές μας.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Χρήση της λειτουργίας ελέγχου Jomres;');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Αυτόματη δημοσίευση κριτικών;');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Αν το ορίσετε σε Όχι, θα χρειαστεί να δημοσιεύσετε χειροκίνητα κριτικές');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Ορισμός κριτικών σε δοκιμαστική λειτουργία;');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Συνήθως οι διαχειριστές ακινήτων δεν μπορούν να ελέγχουν ιδιότητες. Με ενεργοποιημένη τη λειτουργία δοκιμής, μπορούν. Φυσικά αυτό δεν είναι ιδανικό σε περιβάλλον παραγωγής.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Αυτή είναι μια λίστα με όλες τις ιδιότητες. Για να δείτε τις κριτικές μιας ιδιοκτησίας, κάντε κλικ σε αυτήν την ιδιότητα. Από εκεί θα μπορείτε να δημοσιεύσετε ή να διαγράψετε μια κριτική.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Αριθμός μη δημοσιευμένων κριτικών');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Συνολικός αριθμός κριτικών');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Δημοσίευση/Κατάργηση δημοσίευσης κριτικής');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Διαγραφή κριτικής');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Αναφορά κριτικής');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Αναφορές αναθεώρησης');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Παρακαλώ εισάγετε την αναφορά σας');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Δείτε κάτι σε αυτήν την κριτική που είναι απαράδεκτο ή ανακριβές; Αναφέρετέ το και θα το εξετάσουμε για εσάς.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Υποβολή');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Αναφορά δημιουργήθηκε από');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Οι αναφορές δημοσιεύονται από χρήστες που ενδέχεται να διαφωνούν με το περιεχόμενο μιας κριτικής. Ο μόνος τρόπος για να καταργήσετε μια αναφορά είναι να διαγράψετε την κριτική.');
jr_define('_JOMRES_REVIEWS_RATING', 'Αξιολογήσεις (1 = κακή 10 = εξαιρετική)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Φιλοξενία');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Τοποθεσία');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Καθαριότητα');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Διαμονή');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Value for money');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Υπηρεσίες');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Αξιολογήθηκε από:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Απόκρυψη κριτικών');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Εμφάνιση φόρμας κράτησης στη σελίδα λεπτομερειών του ακινήτου;');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ορίστε το σε Ναι για να εμφανιστεί η φόρμα κράτησης στη σελίδα λεπτομερειών ιδιοτήτων. Εάν το ορίσετε σε Όχι, τότε θα εμφανιστεί ένας σύνδεσμος στη σελίδα λεπτομερειών της ιδιοκτησίας αντί να δείχνει τη φόρμα κράτησης.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Ορίζονται οι τιμές συμπεριλαμβανομένου του φόρου;');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Οι τιμές που ορίζονται περιλαμβάνουν; Εάν οι τιμές σας περιλαμβάνουν φόρο, επιλέξτε Ναι. Αν δεν είναι, επιλέξτε Όχι');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Επιπλέον φόρος:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Τα πεδία ημέρας της εβδομάδας σάς επιτρέπουν να ορίσετε μια τιμή για μια δεδομένη ημέρα της εβδομάδας, μόλις κάνετε κλικ στο κουμπί ημέρας της εβδομάδας, όλες οι ημέρες της εβδομάδας θα ρυθμιστούν σε αυτήν την τιμή.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Οι επιλογείς ημερομηνιών και η τιμή εισαγωγής σάς επιτρέπουν να ορίσετε μία τιμή για ένα συγκεκριμένο εύρος ημερομηνιών. Επιλέξτε ημερομηνία έναρξης και λήξης, εισαγάγετε μια τιμή και κάντε κλικ στο κουμπί Ορισμός τιμών.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Εύρος έναρξης');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Τέλος εύρους');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Βαθμολογία');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Ορισμός τιμών');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Δωμάτιο');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'επισκέπτης (ες).');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Έτσι έχουμε αναθέσει τους αριθμούς των επισκεπτών σας στα δωμάτιά τους. Αν θέλετε να αλλάξετε αυτήν την κατανομή, θα χρειαστεί να επικοινωνήσετε με το ξενοδοχείο μετά την κράτηση. Ενδέχεται να ισχύουν επιπλέον χρεώσεις εάν αλλάξετε τις εργασίες σας. ');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Σημειώστε ότι η ιδιοκτησία σας δεν έχει δημοσιευτεί ακόμη, μόνο εσείς μπορείτε να δείτε την ιδιότητα, οι επισκέπτες του ιστότοπου δεν θα τη δουν');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Προεπιλεγμένη σειρά αποτελεσμάτων αναζήτησης');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Αλλάξτε αυτήν την επιλογή για να αλλάξετε τη σειρά εμφάνισης των αποτελεσμάτων αναζήτησης από προεπιλογή.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Εμφάνιση αναπτυσσόμενης σειράς αποτελεσμάτων αναζήτησης');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Στυλ λίστας δωματίων');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Στη φόρμα κράτησης, χρησιμοποιώντας το "κλασικό" στυλ λίστας δωματίων προσφέρετε μεμονωμένα δωμάτια στους επισκέπτες. Με την προβολή τύπου δωματίου, οι επισκέπτες επιλέγουν τον αριθμό των δωματίων τύπου X (π.χ. 2 x δίκλινα) ');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Τύποι δωματίων');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Ημερομηνία έναρξης εβδομάδας ημερολογίου, Κυριακή ή Δευτέρα');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Μόνο οι επισκέπτες της ιδιοκτησίας μπορούν να κάνουν κριτική;');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Ορίστε το σε Ναι εάν θέλετε να περιορίσετε τις κριτικές μόνο σε εκείνους τους χρήστες που έχουν ήδη φιλοξενηθεί σε αυτήν την ιδιότητα.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Ανά δωμάτιο');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Επισκέπτες ανά δωμάτιο:');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Επισκέπτες ανά κράτηση:');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Αριθμός δωματίων');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Ιανουάριος');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Φεβρουάριος');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Μάρτιος');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Απρίλιος');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Μάιος');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Ιούνιος');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Ιούλιος');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Αύγουστος');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Σεπτέμβριος');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Οκτώβριος');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Νοέμβριος');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Δεκέμβριος');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Ορίστε το σε Ναι για να μειώσετε τον αριθμό των διαθέσιμων επιλογών στους διαχειριστές ιδιοκτησίας στην ενότητα Γενικές ρυθμίσεις παραμέτρων. Αυτό είναι χρήσιμο εάν δεν θέλετε οι διαχειριστές ιδιοκτησίας να παίζουν με πάρα πολλές ρυθμίσεις, αλλά μπορείτε να επεξεργαστείτε το jomres_config.php για να ορίσετε προεπιλεγμένες επιλογές ιδιοκτησίας.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Επιλέξτε μια επιλογή για την κράτησή σας');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Εάν αυτή η επιλογή είναι Ναι, τότε οι διαχειριστές θα μπορούν να δουν τον επεξεργαστή html που παρέχεται με το CMS και να εισαγάγουν HTML στην περιγραφή. πιθανότητα να εισάγουν ανεπιθύμητο HTML ή Javascript. Επιπλέον, εάν εισάγουν κακώς μορφοποιημένο HTML, ο σχεδιασμός της σελίδας θα μπορούσε να παραβιαστεί. Είναι καλύτερα να αφήσετε αυτήν την επιλογή σε Όχι όπου είναι δυνατόν. </p> <p> Εάν όλοι οι διαχειριστές είναι έμπιστοι χρήστες (π.χ. ο εαυτός σας), τότε μπορείτε να το αφήσετε σε Ναι και να τροποποιήσετε τις διαφορετικές ετικέτες HTML που επιτρέπεται να εισαγάγουν στην καρτέλα Φιλτράρισμα εισόδου στη Διαμόρφωση τοποθεσίας. </p> <p> Αν, από την άλλη πλευρά, επαναχρησιμοποιώντας το Jomres ως πύλη όπου προσκαλείτε χρήστες να προσθέσουν και να διαχειριστούν τις δικές τους ιδιότητες, τότε αυτή δεν είναι η ιδανική διαμόρφωση. Αντ 'αυτού, θα πρέπει να αφήσετε αυτήν την επιλογή σε Όχι. Με τη ρύθμιση σε Όχι, οι διαχειριστές αντίθετα θα δουν έναν επεξεργαστή βαθμολόγησης που μπορεί να χρησιμοποιηθεί για την εισαγωγή βασικής μορφοποίησης που πρέπει να είναι επαρκής για την πλειοψηφία των χρηστών. </p> ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Προβολή πλήρους οθόνης');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Κανονική προβολή');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Έκπτωση συνεργάτη');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Αναζήτηση χρήστη');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Εισαγάγετε μερικούς χαρακτήρες για αναζήτηση χρήστη. <br/> Όταν επιλέξετε έναν χρήστη, θα τον προσθέσετε αυτόματα ως Συνεργάτη και θα μεταφερθείτε στην επόμενη σελίδα όπου μπορείτε να εκχωρήσετε ιδιότητες και εκπτώσεις στον χρήστη. ');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Υφιστάμενοι συνεργάτες');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Επιλέξτε έναν συνεργάτη που θα μεταφερθεί στη σελίδα διαχείρισης συνεργατών.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Αναζήτηση για μια ιδιότητα');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Εισαγάγετε μερικούς χαρακτήρες από το όνομα της ιδιοκτησίας και επιλέξτε μια επιχείρηση. <br/> Όταν επιλέξετε την ιδιότητα, θα την προσθέσετε στο χαρτοφυλάκιο του συνεργάτη, ωστόσο δεν θα απολαμβάνουν ακόμη εκπτώσεις, θα πρέπει να τις ορίσετε μόνοι σας.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Τρέχουσες ιδιότητες');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Κάντε κλικ σε μια ιδιότητα για να επεξεργαστείτε τις εκπτώσεις των συνεργατών για αυτήν την ιδιότητα");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Αυτός ο λογαριασμός έχει τεθεί σε αναστολή, προς το παρόν δεν είναι δυνατή η διαχείριση των ιδιοτήτων σας χρησιμοποιώντας αυτόν τον λογαριασμό.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Ο λογαριασμός διαχειριστή έχει τεθεί σε αναστολή');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Επαναφορά λογαριασμού διαχειριστή');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Λάβετε υπόψη ότι ο λογαριασμός διαχειριστή ιδιοκτησίας σας έχει τεθεί σε αναστολή. Δεν θα μπορείτε να εκτελείτε καμία λειτουργία διαχείρισης ιδιοκτησίας μέχρι να αποκατασταθεί ο λογαριασμός.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Λάβετε υπόψη ότι ο λογαριασμός διαχειριστή ακινήτου σας είναι πλέον ενεργός. Μπορείτε να συνεχίσετε να εκτελείτε οποιεσδήποτε λειτουργίες διαχείρισης ιδιοκτησίας. Συνδεθείτε στον λογαριασμό σας και βεβαιωθείτε ότι έχουν δημοσιευτεί οι αντίστοιχες ιδιότητες. Ευχαριστώ.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Κατάργηση αγαπημένου');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Κράτηση αρχείου δεδομένων');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Το αρχείο δεδομένων κράτησης είναι μια ακατέργαστη χωματερή πληροφοριών κράτησης που έχει καταγραφεί αφού πατηθεί το κουμπί επιβεβαίωσης κράτησης. Τοποθετήστε το δείκτη του ποντικιού σε μια ημερομηνία για να δείτε την χωματερή ακατέργαστων δεδομένων. Οι πληροφορίες αποθηκεύονται στον πίνακα XXX__jomres_booking_data_archive');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Επεξεργασία λογαριασμού');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Για να προσθέσετε έναν χρήστη ως διαχειριστή ιδιοτήτων, εισαγάγετε πρώτα τους πρώτους χαρακτήρες του ονόματος χρήστη στο παραπάνω πεδίο. Όταν βρεθεί ο σωστός χρήστης, κάντε κλικ στο όνομα για να το επιλέξετε και, στη συνέχεια, επιλέξτε σε ποιες ιδιότητες θα πρέπει να είναι διαχειριστής. Ο χρήστης <em> πρέπει να είναι ήδη χρήστης στο CMS </em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Υφιστάμενοι διαχειριστές');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Εμφάνιση αναζήτησης αναπτυσσόμενου αριθμού επισκέπτη');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Αστέρια');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Εμφάνιση του αναπτυσσόμενου μενού αστέρων');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_SEARCH_STARS', 'Αριθμός αστεριών');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Αριθμός ιδιοτήτων');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery βιβλιοθήκη;');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Μπορείτε να το ορίσετε σε ΟΧΙ εάν έχετε ένα πρότυπο που χρησιμοποιεί jquery. Αυτό μπορεί να επιλύσει ζητήματα διενέξεων jquery σε ορισμένα πρότυπα, αλλά όχι όλα.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Η ενεργοποίηση αυτής της επιλογής σάς επιτρέπει να βλέπετε τον εναλλάκτη γλώσσας στην προβολή πλήρους οθόνης στην πρόσοψη.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Οι μικρογραφίες δημιουργούνται αυτόματα για μεταφορτωμένες εικόνες.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Μικρές μικρογραφίες μέγιστο πλάτος (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Μικρές μικρογραφίες χρησιμοποιούνται στη λίστα ιδιοτήτων, ενώ μικρογραφίες μεσαίου μεγέθους χρησιμοποιούνται στην κεφαλίδα της ιδιότητας.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Μικρές μικρογραφίες μέγιστο ύψος (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Μεσαίες μικρογραφίες μέγιστο πλάτος (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Μεσαίες μικρογραφίες μέγιστο ύψος (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Χρήση λειτουργιών προμήθειας;');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Ορίστε το σε Ναι για να εμφανίζονται τα τιμολόγια προμήθειας διαχειριστή που έχουν συγκεντρωθεί.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Οι κρατήσεις διαχειριστών δημιουργούν τιμολόγια προμήθειας;');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Εάν ένας διαχειριστής κάνει κράτηση, αυτό δημιουργεί επίσης στοιχείο γραμμής τιμολογίου προμήθειας;');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Αυτόματη αναστολή διαχειριστών όταν τα τιμολόγια επισημαίνονται ως σε εκκρεμότητα;');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Αυτόματη αναστολή threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Αυτό το threash είναι ο αριθμός των ημερών που πρέπει να πληρώσει ένας διαχειριστής πριν από την αναστολή τους και τη μη δημοσίευσή τους.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Γλωσσικό πλαίσιο');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Χρησιμοποιήστε αυτήν την επιλογή για να αλλάξετε το γλωσσικό πλαίσιο του ιστότοπου. Αυτή η λειτουργία επιτρέπει στο Jomres να χρησιμοποιεί ετικέτες που είναι κατάλληλες για την τρέχουσα εστίασή σας, οπότε αν η εστίασή σας είναι ως Brokerging Yacht, τότε η αλλαγή του πλαισίου θα επιτρέψτε στον Jomres να παρουσιάσει ετικέτες από διαφορετικό αρχείο γλώσσας. Για παράδειγμα, εάν ορίσετε το πλαίσιο σε "Μεσίτη σκαφών", τότε ο Jomres θα βρει πρώτα την τρέχουσα γλώσσα και, στη συνέχεια, θα αναζητήσει τον /'.JOMRES_ROOT_DIRECTORY.'/languages ​​κατάλογο για έναν υπο-κατάλογο ονομάζεται "yachtbrokerage". Εάν το αρχείο υπάρχει για την τρέχουσα γλώσσα, τότε το αρχείο θα χρησιμοποιηθεί. Εάν όχι, τότε ο Jomres θα αναζητήσει ένα αρχείο αγγλικής γλώσσας στον ίδιο κατάλογο. Εάν αυτό δεν μπορεί να βρεθεί, ο Jomres θα χρησιμοποιήσει το αρχείο γλώσσας για την τρέχουσα επιλεγμένη γλώσσα στον κατάλογο /'.JOMRES_ROOT_DIRECTORY.'/languages. ');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Ορίστε αυτήν την επιλογή σε Ναι εάν θέλετε να χρησιμοποιήσετε τις προηγμένες επιλογές διαμόρφωσης ιστότοπου. Εάν ξεκινάτε μόλις με το Jomres, τότε σας συμβουλεύουμε να το αφήσετε στο Όχι προς το παρόν, καθώς η προεπιλεγμένη εγκατάσταση είναι αρκεί για να ξεκινήσετε, αντ \'αυτού, πρέπει να προσθέσετε το Jomres στο κύριο μενού και να συνδεθείτε στο frontend ως "διαχειριστής" και να ξεκινήσετε τη διαμόρφωση των ιδιοτήτων σας. Λάβετε υπόψη ότι πολλές από τις προηγμένες επιλογές ενδέχεται να μην είναι διαθέσιμες αν δεν Δεν έχουν εγκατασταθεί τα κατάλληλα πρόσθετα. Οι χρήστες του δωρεάν βασικού συστήματος δεν θα μπορούν να επωφεληθούν πλήρως από τις δυνατότητες που ενεργοποιούν. ');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery βιβλιοθήκη UI;');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Τιμή (υψηλότερη πρώτη)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Τιμή (πρώτα η χαμηλότερη)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Περίληψη τιμών και εκτιμήσεις θα πρέπει να τιμολογούνται ανά διανυκτέρευση/ανά εβδομάδα/ανά μήνα;');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Ανά διανυκτέρευση');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Ανά εβδομάδα');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'ανά μήνα');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Ανά άτομο');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'εβδομάδες (ες) σε');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'μήνας (-οι) σε');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Πώς πρέπει να λειτουργεί η επιλογή αναζήτησης για αριθμούς ατόμων;');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Επηρεάζει όλες τις ενότητες αναζήτησης. Όταν χρησιμοποιείτε τη λειτουργία αναζήτησης αριθμού επισκεπτών, εάν η λειτουργία αναζήτησης αναζητά ιδιότητες που τα τιμολόγια θα υποστηρίζουν τους αριθμούς επισκεπτών επάνω και θα ισοδυναμούν με τον επιλεγμένο αριθμό, ακριβώς ίσο με τον αριθμό που έχει επιλεγεί, ή ο αριθμός που επιλέχθηκε και μεγαλύτερος; ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Περιμένετε, η παραγγελία σας βρίσκεται υπό επεξεργασία και θα ανακατευθυνθείτε στον ιστότοπο του Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Εάν δεν ανακατευθυνθείτε αυτόματα στο Paypal εντός 5 δευτερολέπτων ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Κάντε κλικ εδώ');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Η κράτηση ισχύει από');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Η κράτηση ισχύει για');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Όνομα επισκέπτη');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Οι κωδικοί έκπτωσης μπορούν να δημιουργηθούν και να περάσουν στους επισκέπτες ως κίνητρο για κρατήσεις. <br/>
Ισχύει από και μέχρι ημερομηνίες αναφέρονται στις ημερομηνίες στις οποίες μπορεί να πραγματοποιηθεί κράτηση, ενώ η Κράτηση που ισχύει από/έως ημερομηνίες αναφέρεται στις ημερομηνίες που πρέπει να καλύψει η κράτηση για να είναι έγκυρο το κουπόνι. Εάν μια κράτηση πέσει εκτός αυτής της περιόδου, τότε θα ισχύσουν κανονικές τιμές για τις ημέρες εκτός αυτής της περιόδου. <br/>
Εάν θέλετε η κράτηση να είναι διαθέσιμη σε έναν συγκεκριμένο επισκέπτη, επιλέξτε το όνομα αυτού του επισκέπτη στο αναπτυσσόμενο μενού για να περιορίσετε το κουπόνι μόνο σε αυτόν τον επισκέπτη. ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Με το κουπόνι σας, αυτή η κράτηση έχει εκπτώσεις από');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'to');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Ορίστε αυτήν την τιμή σε Όχι για να απενεργοποιήσετε τη φόρτωση τόσο των javascript όσο και των αρχείων CSS του περιβάλλοντος εργασίας Jquery.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS Library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Ορίστε αυτήν την τιμή σε Όχι για να απενεργοποιήσετε μόνο το αρχείο CSS του περιβάλλοντος εργασίας jquery.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Συνολικός φόρος συμπερίληψης');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Μη δημοσιευμένη ιδιότητα');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Χρήση λειτουργιών μετατροπής');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Χρησιμοποιήστε τη λειτουργία μετατροπής Jomres online. Αυτό θα προσφέρει ένα αναπτυσσόμενο μενού μετατροπής σε απρόσκοπτους χρήστες, όπου θα μπορούν να επιλέξουν ένα νόμισμα στο οποίο επιθυμούν να δουν τις προσφερόμενες τιμές. Η τιμή τιμής προσαρμόζεται για να εμφανίζει τη μετατροπή τιμή ακολουθούμενη από την εγγενή τιμή του ακινήτου σε παρένθεση. ");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Έχουμε καταβάλει κάθε δυνατή προσπάθεια για να αποκτήσουμε τις πιο ακριβείς και έγκαιρες συναλλαγματικές ισοτιμίες που μπορούμε. Η λειτουργία μετατροπής νομισμάτων στο διαδίκτυο είναι μια υπηρεσία που παρέχεται μόνο για ενημερωτικούς σκοπούς και δεν προορίζεται για την παροχή ακριβών αριθμών. Δεν εγγυόμαστε την ακρίβεια των συναλλαγματικών ισοτιμιών. Χρησιμοποιώντας αυτήν τη δυνατότητα, θεωρείται ότι έχετε συμφωνήσει ότι οποιαδήποτε εξάρτηση ή χρήση της λειτουργίας μετατροπής του επιτοκίου θα γίνεται αποκλειστικά με δική σας ευθύνη. ');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Μετατροπή νομίσματος/κωδικοί νομίσματος');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection Key API');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Για αυτόματη ρύθμιση του αναπτυσσόμενου κωδικού νομίσματος, ο Jomres μπορεί να χρησιμοποιήσει μια δωρεάν υπηρεσία που ονομάζεται IPinfoDB για τον εντοπισμό της χώρας του επισκέπτη, ωστόσο πρέπει να εγγραφείτε για ένα κλειδί API στη διεύθυνση <a href ="https://www.ipinfodb.com/login" target ="_blank"> IPinfoDB </a> πρώτα. ');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Διαμονή χωρίς φόρο');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Φόρος καταλύματος με φόρο');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Φόρος δωματίων:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Άνοιγμα της φόρμας κράτησης');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Επιστροφή στα στοιχεία ιδιοκτησίας');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Αυτόματη επιλογή;');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Υπόλοιπο (μετά την πληρωμή της κατάθεσης)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Φιλτράρισμα πόρων με βάση τις δυνατότητές τους.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Τελευταία κράτηση');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'δεύτερος');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'λεπτό');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'ώρα');
jr_define('_JOMRES_DATEPERIOD_DAY', 'ημέρα');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'εβδομάδα');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'μήνας');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'έτος');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'δεκαετία');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'πριν');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'από τώρα');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Οι κρατήσεις είναι για ολόκληρες ημέρες;');
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings rooms out by the night, so a booking from the first of January '.date('Y', strtotime('next year')).' to the 2nd of January '.date('Y', strtotime('next year')).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Ανά ημέρα');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Ανά άτομο ανά ημέρα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Παραλαβή');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Επιστροφή');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'ημέρες (ες) σε') ;
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Η ημερομηνία επιστροφής είναι εσφαλμένη');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Η κράτηση είναι πολύ σύντομη. Πρέπει να υπάρχουν τουλάχιστον τόσες ημέρες μεταξύ των ημερομηνιών παραλαβής και επιστροφής:');
	jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Ελάχιστο διάστημα παραλαβής/επιστροφής');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Το ελάχιστο διάστημα στη φόρμα κράτησης μεταξύ των ημερομηνιών παραλαβής και αποβίβασης. Ένα διάστημα 1 σημαίνει ότι οι ημερομηνίες παραλαβής και επιστροφής μπορούν να οριστούν την ίδια ημέρα, ωστόσο αυτό εξακολουθεί να εξαρτάται από το ελάχιστο διάστημα που υπολογίζεται αυτόματα από τη μηχανή κρατήσεων, καθώς ελέγχει τα τιμολόγια που ισχύουν για την περίοδο της κράτησης. ');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Η περίληψη τιμών και οι εκτιμήσεις θα πρέπει να τιμολογούνται ανά ημέρα/ανά εβδομάδα/ανά μήνα;');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Ανά ημέρα');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Μέρες πριν την ημερομηνία παραλαβής');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Ο ελάχιστος αριθμός ημερών που πρέπει να παρέλθουν, από "σήμερα", πριν από την ημερομηνία παραλαβής. ');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Ορίστε το σε ναι εάν θέλετε να περιορίσετε τις προκαταβολικές κρατήσεις (χρησιμοποιήστε το επόμενο πεδίο για να ορίσετε το όριο σε ημέρες). Εάν το ορίσετε σε ναι, αν ο χρήστης προσπαθήσει να κάνει κράτηση περισσότερες από n ημέρες νωρίτερα, τότε η ημερομηνία παραλαβής τους θα επανέλθει στη σημερινή ημερομηνία');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Εμφάνιση εισαγωγής ημερομηνίας επιστροφής;');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Ορίστε το σε Όχι αν δεν θέλετε να εμφανίζεται το πλαίσιο εισαγωγής ημερομηνίας επιστροφής. Χρησιμοποιήστε το μόνο αν γνωρίζετε τι κάνετε, καθώς η ημερομηνία επιστροφής στις κρατήσεις θα ορίζεται πάντα την ημέρα μετά την ημερομηνία παραλαβής. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Εάν το ορίσετε σε Ναι, τότε οι κρατήσεις θα ληφθούν για ορισμένο χρονικό διάστημα. Εάν οριστεί σε Όχι, τότε βεβαιωθείτε ότι η "καθορισμένη ημέρα παραλαβής" δεν έχει οριστεί σε Ναι (εκτός εάν εσείς συγκεκριμένα θέλετε να αναγκάσετε τους ανθρώπους να παραλάβουν μια συγκεκριμένη ημέρα της εβδομάδας) διαφορετικά δεν θα λάβετε πολλούς συνδέσμους στο ημερολόγιο διαθεσιμότητας. ');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Προκαθορισμένη ημέρα παραλαβής');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Μόνο για ιστότοπους που προσφέρουν κρατήσεις σταθερής περιόδου. Επιλέξτε την ημέρα της εβδομάδας στην οποία πρέπει να γίνονται παραλαβές.');
	jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed day pickup');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Διορθώθηκαν ημερομηνίες παραλαβής:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Όταν επιλέγονται σταθερές ημερομηνίες παραλαβής, ο αριθμός των ημερομηνιών που μπορούν να εμφανιστούν στην αναπτυσσόμενη λίστα ημερομηνιών. Λάβετε υπόψη ότι η λίστα ημερομηνιών δεν θα περιλαμβάνει ημερομηνίες εάν η κράτηση δεν είναι δυνατή λόγω προηγούμενων κρατήσεων, και ότι ο κατάλογος θα είναι στην πραγματικότητα διπλάσιος από τον επιλεγμένο αριθμό, επειδή θα έχει παρόμοιο αριθμό ιστορικών ημερομηνιών (όπου διατίθεται). ');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Ανά άτομο, ανά ημέρα');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Επιλέξτε Ναι εάν θέλετε να χρεώνετε ανά άτομο ανά ημέρα. Εάν όχι, τότε το κόστος θα υπολογίζεται σε βάση ανά πόρο ανά ημέρα');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Οι μεταβλητές καταθέσεις σάς επιτρέπουν να ορίσετε εάν θέλετε να χρεώσετε ολόκληρο το ποσό εάν η ημερομηνία παραλαβής της κράτησης είναι εντός N ημερών από το "σήμερα". Ορίστε αυτήν την επιλογή Ναι για να ενεργοποιήσετε τη λειτουργία , και εισαγάγετε τον αριθμό των ημερών παρακάτω, για παράδειγμα εάν η ημέρα παραλαβής είναι εντός 60 ημερών, τότε το ποσό της κατάθεσης που χρεώνεται θα είναι το πλήρες ποσό, διαφορετικά το ποσό θα βασίζεται στις επιλογές κατάθεσης που έχουν διαμορφωθεί παραπάνω. ');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Οι περισσότερες επιχειρήσεις θα υπολογίσουν εκ νέου τις τιμές των πόρων με βάση τον αριθμό των πόρων ενός απαιτούμενου τύπου που είναι διαθέσιμοι σε μια δεδομένη ημερομηνία. Αυτό τους επιτρέπει να προσφέρουν εκπτώσεις σε έναν πόρο/τύπο επιχείρησης που δεν είναι απασχολημένος κατά τη διάρκεια μια δεδομένη περίοδο με στόχο την προσέλκυση επιχειρήσεων που διαφορετικά θα μπορούσαν να χαθούν. <br/> Η ενεργοποίηση και η διαμόρφωση αυτού του πρόσθετου σάς επιτρέπει να προσφέρετε προσαρμόσιμη τιμολόγηση με βάση τον αριθμό των πόρων ενός επιλεγμένου τύπου που είναι διαθέσιμοι στην επιχείρηση μια δεδομένη ημέρα. <br/> Το όριο ημερών καθορίζει τον αριθμό των ημερών που πρέπει να είναι η ημερομηνία παραλαβής πριν από την προσαρμογή των τιμών των πόρων από αυτήν τη δυνατότητα και, στη συνέχεια, οι επιλογές ποσοστών σάς επιτρέπουν να διαμορφώσετε το ποσοστό των πόρων που είναι διαθέσιμοι πριν από την εφαρμογή μιας δεδομένης έκπτωσης . Σημειώστε, ωστόσο, ότι για πολλούς πόρους, τότε το τρέχον επίπεδο έκπτωσης θα εφαρμοστεί σε όλους τους πόρους και δεν θα μειωθεί καθώς επιλέγονται περισσότεροι πόροι. ');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Όριο (αριθμός ημερών μεταξύ της ημερομηνίας παραλαβής και σήμερα)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Παραλαβή σε εκκρεμότητα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Παραλαβή σήμερα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Παραλήφθηκε');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Επιστρέφει σήμερα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Επιστροφή εκπρόθεσμα');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Δεν έχει παραληφθεί');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Επισήμανση κράτησης που έχει παραληφθεί.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Επισήμανση κράτησης επιστροφής.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Επισήμανση κράτησης που παραλήφθηκε');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Επισήμανση κράτησης επιστροφής');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Κόστος ανά ημέρα:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Αριθμός ημερών:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Αποθήκευση παράκαμψης');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Στείλτε email στους νέους χρήστες τα στοιχεία σύνδεσής τους;');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Εάν η επιλογή Δημιουργία νέου χρήστη έχει οριστεί σε Ναι, μπορείτε να ορίσετε αυτήν την επιλογή σε Όχι για να διασφαλίσετε ότι δεν θα αποσταλούν τα στοιχεία σύνδεσής τους όταν δημιουργηθεί ο χρήστης. Αυτό μπορεί να είναι χρήσιμο εάν είστε αυτόματα προσθήκη νέων χρηστών σε μια λίστα αλληλογραφίας, για παράδειγμα, και δεν θέλουν οι χρήστες να συνδεθούν πραγματικά. ');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Εμφάνιση συνολικού συνόλου της φόρμας κράτησης;');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Αποτρέψτε τη φόρμα κράτησης να εμφανίζει τα πεδία τιμής φόρου στη σύνοψη συνολικών, ορίζοντας αυτήν την επιλογή σε Νο.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Συνδεδεμένοι, οι εγγεγραμμένοι επισκέπτες μπορούν να ακυρώσουν τις δικές τους κρατήσεις. Εδώ μπορείτε να ορίσετε το threashold, σε ημέρες, όπου η κράτηση δεν μπορεί να ακυρωθεί μετά από ορισμένο αριθμό ημερών πριν την ημερομηνία άφιξης.');
jr_define('_JOMRES_EDIT_PROFILE', 'Επεξεργασία προφίλ');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Σχέση τύπου ιδιοτήτων');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Κάντε κλικ σε ένα γράμμα για να εμφανίσετε όλες τις επιχειρήσεις με αυτόν τον πρώτο χαρακτήρα. Αφού έχετε μια λίστα ιδιοτήτων, μπορείτε να εκχωρήσετε ποσοστά προμήθειας σε αυτές τις ιδιότητες ή να κάνετε κλικ στο εικονίδιο επεξεργασία για να δείτε τα στατιστικά στοιχεία της επιχείρησης.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Επεξεργασία συντελεστή φόρου');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Επεξεργασία προσαρμοσμένου πεδίου');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Κωδικός πρόσβασης διακομιστή αδειών');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Όνομα χρήστη διακομιστή άδειας χρήσης');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Εάν έχετε όνομα χρήστη και κωδικό πρόσβασης στο διακομιστή άδειας, παρακαλώ εισάγετέ τα εδώ. Αυτό θα σας βοηθήσει να αποκτήσετε πρόσβαση στα πρόσθετα που δικαιούστε. Εάν έχετε εισαγάγει ένα έγκυρο κλειδί υποστήριξης στο παραπάνω πεδίο, τότε δεν είναι απαραίτητο να δώσετε το όνομα χρήστη/τον κωδικό πρόσβασης εδώ. ');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Αυτή η έκδοση Jomres:');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Τελευταία έκδοση Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Προειδοποίηση: Υπάρχει μια νέα έκδοση του Jomres διαθέσιμη, σας συμβουλεύουμε να αναβαθμίσετε το συντομότερο δυνατό.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Καλώς ορίσατε στο Jomres. Το σύστημα Core είναι δωρεάν, αλλά μπορεί να ενισχυθεί μέσω της εγκατάστασης πρόσθετων. Για πρόσβαση σε αυτά τα πρόσθετα θα χρειαστείτε μια άδεια λήψης και υποστήριξης. Εάν θέλετε να αγοράσετε ένα Jomres Starter , Business or Enterprise license, <a href="https://www.jomres.net/prices" target="_blank"> επισκεφθείτε τον ιστότοπό μας </a> για πληροφορίες σχετικά με τον τρόπο με τον οποίο μπορείτε να αναβαθμίσετε. ');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Αυτό το σύστημα είναι ιδανικό για οποιοδήποτε σενάριο, είτε πρόκειται για μια απλή φόρμα κράτησης για μια ιδιοκτησία, μέχρι έναν ιστότοπο που έχει πολλούς χρήστες, σε πολλές γλώσσες, με πολλές ιδιότητες. Ανατρέξτε στη "Βοήθεια" ενότητα στο μενού, συμπεριλαμβανομένης της σελίδας "Ξεκινώντας" που θα σας καθοδηγήσει στα πρώτα σας βήματα. ');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Ενεργή ιδιότητα');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Ορίστε αυτήν την επιλογή σε Ναι για να χρησιμοποιήσετε αυτές τις εναλλακτικές ρυθμίσεις SMTP. Ένας αυξανόμενος αριθμός κεντρικών υπολογιστών Ιστού φαίνεται ότι αποκλείει τη λειτουργία αλληλογραφίας PHP, ώστε να μπορείτε να επιλέξετε να παρακάμπτετε τις ρυθμίσεις αλληλογραφίας που υιοθετεί ο Jomres από τον κεντρικό υπολογιστή σας CMS (συνήθως Joomla) και χρησιμοποιήστε τις ρυθμίσεις της δικής σας επιλογής εδώ. ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Εναλλακτικός κεντρικός υπολογιστής');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Αλλάξτε αυτό στον διακομιστή αλληλογραφίας smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Αλλάξτε αυτό στη θύρα smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Εναλλακτικό Πρωτόκολλο');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Ανάλογα με τις ρυθμίσεις του διακομιστή smtp, πρέπει να το αφήσετε κενό ή να εισαγάγετε  \" ssl \"ή\" tls \". Ρωτήστε τον πάροχο SMTP εάν δεν το γνωρίζετε.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Χρήση ελέγχου ταυτότητας');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Εάν ο διακομιστής SMTP απαιτεί από τους πελάτες να συνδεθούν, ορίστε το σε Ναι. Στη συνέχεια θα χρησιμοποιηθεί το όνομα χρήστη και ο κωδικός πρόσβασης.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Εναλλακτικό όνομα χρήστη');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Εναλλακτικός κωδικός πρόσβασης');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Quick Info');
jr_define('_JOMRES_MENU_SHOW', 'Show');
jr_define('_JOMRES_MENU_HIDE', 'Απόκρυψη');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Προεπιλογή');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Οποιοσδήποτε');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Εγγεγραμμένος');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Διευθυντής');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Κανείς');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Έλεγχος πρόσβασης μενού');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Αυτή η δυνατότητα σάς επιτρέπει να ελέγχετε ποιος θα μπορεί να δει μια προσθήκη στο κύριο μενού. Συνήθως οι επιλογές χρήστη 00009 είναι ορατές είτε από/είτε από μη εγγεγραμμένους επισκέπτες ιστότοπου, 00010 επιλογές γενικά αναφέρονται σε δραστηριότητες τύπου λήψης που είναι χρησιμοποιείται σε καθημερινή βάση, ενώ οι επιλογές 00011 χρησιμοποιούνται για τη δημιουργία και τη διαμόρφωση μιας ιδιοκτησίας, αλλά η πρόσβαση σε αυτές είναι σπανιότερη. ');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Πλήρης έλεγχος πρόσβασης');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Ορίστε αυτήν την επιλογή σε Ναι για να ενεργοποιήσετε τη λειτουργία ελέγχου πλήρους πρόσβασης και, στη συνέχεια, επισκεφτείτε την επιλογή Έλεγχος πρόσβασης στην ενότητα Συντήρηση συστήματος για να ρυθμίσετε τα στοιχεία ελέγχου πρόσβασης.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Σημειώστε, ωστόσο, ότι αυτές οι ρυθμίσεις δεν ελέγχουν τα υποκείμενα σενάρια στα οποία συνδέονται, έτσι για παράδειγμα αν ορίσετε <i> 00009user_option_03_search </i> έναν χρήστη που γνωρίζει τον Jomres μπορεί ακόμα καλέστε το j06000search.class.php εισάγοντας http://www.domain.com/index.php?option=com_jomres&task=search στη γραμμή διευθύνσεων του προγράμματος περιήγησής τους. Αυτό είναι σκόπιμο, καθώς αυτό το στοιχείο ελέγχου πρόσβασης μενού ελέγχει απλώς αυτό που φαίνεται στο Jomres Main Menu. Εάν χρειάζεστε αυστηρότερους ελέγχους, ορίστε την επιλογή Site Config -> Full Access Control σε Yes και επανεξετάστε την επιλογή του Menu Access Control. ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Έλεγχος πλήρους πρόσβασης');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Αυτή η λειτουργία προορίζεται μόνο για προχωρημένους χρήστες. Εάν δεν γνωρίζετε για ποιο λόγο προορίζεται και δεν έχετε συγκεκριμένο λόγο χρήσης, επιστρέψτε στη Διαμόρφωση ιστότοπου και ορίστε την Πλήρη πρόσβαση Επιλογή ελέγχου στο No. </strong> <br/>
Αυτή η δυνατότητα σάς επιτρέπει να ελέγχετε ποιος μπορεί να έχει πρόσβαση σε ποια μικροσυστατικά (με ορισμένες εξαιρέσεις που είναι σκληρά κωδικοποιημένες στο σύστημα). Εάν το επίπεδο πρόσβασης δίπλα στο όνομα ενός σεναρίου έχει οριστεί σε Προεπιλεγμένο, τότε με την επιλογή Πλήρης έλεγχος πρόσβασης που ορίζεται σε Ναι <strong> οποιοσδήποτε </strong> μπορεί να έχει πρόσβαση σε σενάρια στα οποία δεν θα πρέπει να έχει πρόσβαση, εάν σκοπεύετε να το χρησιμοποιήσετε λειτουργία ΠΡΕΠΕΙ να ορίσετε το επίπεδο ελέγχου πρόσβασης για <strong> κάθε </strong> μικρό συστατικό Jomres που παρατίθεται εδώ. Εάν δεν γνωρίζετε τι κάνουν αυτά τα μικροσυστατικά, τότε σας συνιστούμε ανεπιφύλακτα να μην χρησιμοποιείτε καθόλου αυτήν τη λειτουργία. <br/>
Στο Jomres τα επίπεδα πρόσβασης ακολουθούν μια πυραμίδα, οπότε οι Super Properties Managers είναι μεγαλύτεροι από τους Managers. Με λίγα λόγια Super Manager> Manager> Receptionist> Registered> Unregistered. Έτσι, εάν ένας εγγεγραμμένος χρήστης έχει πρόσβαση σε ένα μικρό συστατικό, το ίδιο κάνουν και οι ρεσεψιονίστ, οι διαχειριστές και οι υπερδιαχειριστές. <br/>
Λάβετε υπόψη ότι δεν μπορείτε να ελέγξετε τα μικροστοιχεία της περιοχής διαχειριστή. Οποιοσδήποτε στην περιοχή διαχειριστή θεωρείται αξιόπιστος χρήστης, καθώς δεν πρέπει να αποκλείεται η πρόσβαση σε οποιοδήποτε σενάριο (ειδικά αυτό).
");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Προσοχή! Έχετε ενεργοποιήσει τον πλήρη έλεγχο πρόσβασης, ωστόσο έχουμε μετρήσει τις ρυθμίσεις ελέγχου πρόσβασης και τις συγκρίνουμε με τον αριθμό των μικροσυστατικών που πρέπει να ελέγχονται και τα δύο δεν ταιριάζουν, επομένως μπορεί να έχετε μερικά δέσμες ενεργειών που δεν ελέγχονται. Αυτό μπορεί να είναι ζήτημα ασφάλειας και σας παροτρύνουμε να το επιλύσετε αμέσως επισκεπτόμενοι τη δυνατότητα ελέγχου πρόσβασης και ελέγχοντας ότι έχουν εφαρμοστεί τα κατάλληλα επίπεδα. ');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Χρήστες με δικαιώματα διαχειριστή σε αυτήν την ιδιότητα');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Η διεύθυνση ηλεκτρονικού ταχυδρομείου σας');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Προσθέστε την ιδιοκτησία σας: Βήμα 2 από 2');
jr_define('_JOMRES_CART_TITLE', 'Οι προτεινόμενες κρατήσεις μου');
jr_define('_JOMRES_CART_INFO', 'Σημείωση, αυτές οι κρατήσεις δεν έχουν αποθηκευτεί ακόμα. Εάν αποσυνδεθείτε ή λήξει η συνεδρία σας θα χαθούν. Θυμηθείτε να επιβεβαιώσετε τις κρατήσεις σας!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Επιβεβαίωση κράτησης (ες)');
jr_define('_JOMRES_CART_OR', 'ή');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Αποθήκευση για αργότερα');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Δεν έχετε αποθηκεύσει ακόμα κρατήσεις.');
jr_define('_JOMRES_CART_VIEWCART', 'Προβολή καλαθιού');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Υποκατάλογος αρχείου γλώσσας');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Προεπιλεγμένο σημείο εκκίνησης γεωγραφικού πλάτους');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Προεπιλεγμένο σημείο εκκίνησης γεωγραφικού μήκους');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Στον χάρτη Google στη σελίδα επεξεργασίας ιδιοτήτων, πριν μετακινηθεί ο δείκτης, ποια πρέπει να είναι τα προεπιλεγμένα σημεία έναρξης γεωγραφικού πλάτους/γεωγραφικού μήκους;');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Τα μηνύματα ηλεκτρονικού ταχυδρομείου αποστέλλονται από ποια διεύθυνση;');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Αφήστε αυτή την επιλογή κενή για να την απενεργοποιήσετε. Ο Jomres θα χρησιμοποιεί τη διεύθυνση ηλεκτρονικού ταχυδρομείου του ξενοδοχείου όταν στέλνει μηνύματα ηλεκτρονικού ταχυδρομείου στους επισκέπτες, ωστόσο η υπηρεσία ηλεκτρονικού ταχυδρομείου σας ΜΠΟΡΕΙ να μην επιτρέπει μηνύματα ηλεκτρονικού ταχυδρομείου από αυθαίρετες διευθύνσεις (δηλ. μπορούν να επιτρέπουν μόνο μηνύματα ηλεκτρονικού ταχυδρομείου από Εάν ισχύει κάτι τέτοιο, τότε μπορείτε να χρησιμοποιήσετε αυτήν την είσοδο για να εισαγάγετε μια διεύθυνση που θα εμφανίζεται ως διεύθυνση FROM για όλα τα μηνύματα ηλεκτρονικού ταχυδρομείου του συστήματος. ");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Προβολή λίστας');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Προβολή φωτογραφίας');
jr_define('_JOMRES_COMPARE', 'Σύγκριση');
jr_define('_JOMRES_REMOVE', 'Κατάργηση');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Επιστροφή στα αποτελέσματα αναζήτησης');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Προσθήκη στα αγαπημένα');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Κατάργηση από τα αγαπημένα');
jr_define('_JOMRES_VIEWSHORTLIST', 'Προβολή της σύντομης λίστας σας');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Σημαντικό: Πολιτική cookie');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Χρησιμοποιούμε cookies για να διατηρήσουμε τον ιστότοπό μας σχετικό και εύκολο στη χρήση.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Διαβάστε περισσότερα ...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'Η νομοθεσία της ΕΕ απαιτεί από όλους τους ιστότοπους να καθορίζονται σαφώς εάν χρησιμοποιούνται cookie και ο σκοπός τους.');
jr_define('_JOMRES_COOKIEPOLICY_5', "Η μηχανή αναζήτησης και κράτησης αυτού του ιστότοπου πρέπει να είναι σε θέση να θυμάται τις επιλογές που έχετε επιλέξει να λειτουργήσετε καλύτερα. Για να γίνει αυτό πρέπει να αποθηκεύσει πληροφορίες που σχετίζονται με ένα μικρό αρχείο που ονομάζεται \"cookie \" που προσδιορίζει μοναδικά το πρόγραμμα περιήγησής σας και για να το κάνουμε αυτό, πρέπει να συμφωνήσετε ότι μπορούμε. Εάν δεν αποδεχτείτε αυτήν την πολιτική cookie, τότε θα περιοριστείτε αυστηρά σε αυτό που μπορείτε να κάνετε σε αυτόν τον ιστότοπο. ");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Ναι, αποδέχομαι τη χρήση cookies με αυτόν τον τρόπο.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Η απαιτούμενη κατάθεση είναι το κόστος της πρώτης νύχτας;');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Οι τιμές υπολογίζονται ανά διανυκτέρευση. Θέλετε η προκαταβολή να χρεώνεται μία νύχτα; Αν ναι, μπορείτε να αγνοήσετε τις ακόλουθες επιλογές.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "Δεν έχετε προσθέσει κανένα στοιχείο στα αγαπημένα σας.");
jr_define('_JOMRES_SAFEMODE', 'Ενεργοποίηση ασφαλούς λειτουργίας;');
jr_define('_JOMRES_SAFEMODE_DESC', "Ορίστε το σε Ναι για ενεργοποίηση ασφαλούς λειτουργίας. Αυτό θα απενεργοποιήσει όλες τις προσθήκες έτσι ώστε ο Jomres να χρησιμοποιεί μόνο τις βασικές λειτουργίες του.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Next');
jr_define('COMMON_CANCEL', 'Cancel');
jr_define('COMMON_SUBMIT', 'Submit');
jr_define('COMMON_SAVE', 'Save');
jr_define('COMMON_DELETE', 'Delete');
jr_define('COMMON_RETURN', 'Επιστροφή');
jr_define('COMMON_CLOSE', 'Close');
jr_define('COMMON_BACK', 'Back');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Αποστολή');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Το Captcha χρησιμοποιείται για να διασφαλίσει ότι ο πελάτης που χρησιμοποιεί φόρμες ιστού είναι άνθρωπος και χρησιμοποιείται για να αποτρέψει τη διαχείριση ανεπιθύμητων μηνυμάτων από διαχειριστές ιδιοκτησίας από ρομπότ στο Διαδίκτυο. Για να χρησιμοποιήσετε τη φόρμα Επικοινωνήστε μαζί μας στο Jomres θα πρέπει να εγγραφεί στην <a href="http://www.google.com/recaptcha" target="_blank"> αρχική σελίδα της Google reCaptcha </a> και να ορίσει τον τομέα σας να λαμβάνει τα δημόσια και ιδιωτικά κλειδιά σας. Όταν έχετε λάβει αυτά τα κλειδιά, πληκτρολογήστε τα παρακάτω. Η υπηρεσία reCapcha είναι μια δωρεάν υπηρεσία που παρέχεται από την Google. ');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Δημόσιο κλειδί');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Για να αποφευχθεί ο κίνδυνος των επισκεπτών για κράτηση διπλών δωματίων, ο Jomres χρησιμοποιεί ένα αρχείο κλειδώματος για να αποτρέψει την προσθήκη ενός δωματίου στη λίστα διαθέσιμων δωματίων στη φόρμα κράτησης, αν κάποιος άλλος έχει ήδη προσθέσει το δωμάτιο στο δωμάτιό τους για τις ίδιες ημερομηνίες . Από προεπιλογή, αυτό το κλείδωμα θα λήξει σε 3600 δευτερόλεπτα ή μία ώρα. Μπορείτε να αλλάξετε το χρόνο που απαιτείται για να λήξει αυτή η κλειδαριά αλλάζοντας αυτό το σχήμα. ');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Ενεργοποίηση προτύπων και λειτουργικότητας Jomres 'Bootstrap;");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'Θέα');
jr_define('BACKTOTOP', 'Επιστροφή στην κορυφή');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Ισχυρό');
jr_define('_JOMRES_INPUTFILTERING', 'Εισαγωγή φιλτραρίσματος');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Εισαγωγή επιπέδου φιλτραρίσματος');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Τα περισσότερα δεδομένα που εισάγονται στο σύστημα απολυμαίνονται αφαιρώντας πρώτα όλες τις ετικέτες html και στη συνέχεια χρησιμοποιώντας τη λειτουργία μεταβλητής φιλτραρίσματος PHPs για να κάνουν τα δεδομένα ασφαλή πριν εισαχθούν στη βάση δεδομένων. mightσως θελήσετε να επιτρέψετε ορισμένες εισόδους (για παράδειγμα, οι εισαγωγές κειμένου στη σελίδα λεπτομερειών ιδιοτήτων) για να συμπεριλάβει HTML. Υπάρχουν δύο επίπεδα φιλτραρίσματος που μπορείτε να χρησιμοποιήσετε για να φιλτράρετε αυτήν την είσοδο, είτε Αδύναμο είτε Ισχυρό. Θα πρέπει να χρησιμοποιείτε τη Ρύθμιση αδύναμη μόνο εάν εισάγετε οι χρήστες τα δεδομένα είναι αξιόπιστα από εσάς, π.χ. συνάδελφοι διαχειριστές συστήματος, διαφορετικά θα πρέπει να τα αφήσετε στη θέση Ισχυρή. Όταν οριστεί σε ισχυρή (συνιστάται), μπορείτε ακόμα να καθορίσετε ποιες ετικέτες θα επιτρέπονται με την επεξεργασία της επόμενης ρύθμισης Επιτρέπονται ετικέτες καθαριστή HTML") ;
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Επιτρεπόμενες ετικέτες εισαγωγής');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Μπορείτε να επεξεργαστείτε τις ετικέτες που θα επιτρέψει ο καθαριστής html μέσω του συστήματος φιλτραρίσματος του. Η προεπιλογή είναι \" p, b, strong, a [href], i \"(δηλ. παράγραφος, έντονα, ισχυρά, σύνδεσμοι και πλάγια ). Για περισσότερες πληροφορίες σχετικά με τις επιτρεπόμενες ετικέτες, διαβάστε την τεκμηρίωση του καθαριστή HTML στη διεύθυνση <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Ενώ μπορείτε να αλλάξετε αυτήν τη ρύθμιση, συνιστάται να το αφήσετε στην προεπιλογή. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Επιτρεπόμενες εισόδους');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Μπορείτε να ορίσετε ποιες εισροές φόρμας θα επιτρέπουν το html με την επεξεργασία αυτής της επιλογής, κάθε είσοδος που θα προστεθεί σε αυτήν τη λίστα θα αναλυθεί μέσω του HTML Purifier αντί να αφαιρεθεί όλο το html. Προεπιλογή είναι: ' property_policies_disclaimers '. Προσθέστε περισσότερες εισόδους προσθέτοντας τα ονόματά τους, χωρισμένα με κενό. ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Στοιχεία ιδιοτήτων σε καρτέλες;');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Ορίστε αυτήν την επιλογή για να εμφανίζονται οι λεπτομέρειες της ιδιότητας σε καρτέλες. Ορίστε το σε όχι για να εμφανίζονται χωρίς καρτέλες.');
jr_define('COMMON_PRINT', 'Εκτύπωση');
jr_define('COMMON_EDIT', 'Edit');
jr_define('COMMON_COPY', 'Copy');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres έχει σχεδιαστεί για να λειτουργεί τόσο εντός των πλαισίων Bootstrap 2 όσο και Bootstrap 3. Αφού εγκαταστήσετε ένα θέμα ή πρότυπο BS2 ή BS3, ρυθμίστε αυτόν τον διακόπτη για να επιλέξετε ποια από τις γεύσεις του Bootstrap θέλετε να δουλεύει ο Jomres με.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Χρήση προτύπων Jomres Bootstrap στην πρόσοψη;');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Ακολουθούν μερικές εναλλακτικές λύσεις που μπορεί να θέλετε να λάβετε υπόψη.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Αυτόματος εντοπισμός της χώρας του επισκέπτη;");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Το σύστημα θα προσπαθήσει να εντοπίσει αυτόματα τη χώρα του επισκέπτη, αν δεν έχει κάνει κράτηση πριν. Μπορείτε να ορίσετε αυτήν την επιλογή σε Όχι και να ορίσετε τη χώρα που προτιμάτε να εμφανίζεται στη φόρμα κράτησης, η επόμενη επιλογή. ");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'About Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'βοήθεια');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Ξεκινώντας');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Access Control');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'εργαλεία προγραμματιστή');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'γλώσσες');
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "δημιουργία εισοδήματος");
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'δομή ιστότοπου');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Εγχειρίδιο (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Ο λογαριασμός μου (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'λειτουργικότητα πύλης');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'ολοκλήρωση');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'αναφορές/στατιστικά στοιχεία');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'βοήθεια');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Updates');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'τρόποι πληρωμής');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Αυτό ισχύει μόνο για νέα τιμολόγια');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Χρόνια εμφάνισης');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Καθορίζει τον αριθμό των ετών που θα εμφανίζονται κατά την επεξεργασία ενός τύπου τιμολογίου');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'τιμολόγια');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'στοιχεία λογαριασμού');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Σύνδεση');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Αποσύνδεση');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'αναζήτηση');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'ταμπλό');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'αποθεματικό');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'τιμολόγια');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'ρυθμίσεις');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Επεξεργασία χώρας');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Αναγνωριστικό χώρας');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Κωδικός χώρας');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Όνομα χώρας');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Επεξεργασία περιοχής');
jr_define('_JOMRES_EDIT_REGION_ID', 'Αναγνωριστικό περιοχής');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Κωδικός χώρας');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Όνομα περιοχής');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Λίστα χωρών');
jr_define('_JOMRES_COM_LISTREGIONS', 'Λίστα περιοχών');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Εξαγωγή ορισμών');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Αυτή η δυνατότητα σάς επιτρέπει να εξάγετε μεταφράσεις που έχουν δημιουργηθεί χρησιμοποιώντας τη λειτουργία Μετάφρασης γλώσσας. Θα δημιουργήσει ένα πεδίο κειμένου με όλα τα δεδομένα που απαιτούνται για τη δημιουργία ενός νέου αρχείου γλώσσας, το μόνο που χρειάζεται να κάνετε αντιγράφετε και επικολλάτε αυτό το αποτέλεσμα σε ένα νέο αρχείο γλώσσας που μπορείτε να τοποθετήσετε σε νέο διακομιστή που βασίζεται σε Jomres ή εάν θέλετε να συνεισφέρετε ξανά στην κοινότητα Jomres. ');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Μετάφραση τοπικών περιοχών');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Μετάφραση συμβολοσειρών αρχείων γλώσσας');
jr_define('_JOMRES_COM_NOTAMANAGER', "Σφάλμα, ο χρήστης στον οποίο είστε συνδεδεμένος δεν είναι super manager στο Jomres, δεν θα μπορείτε να χρησιμοποιήσετε αυτήν τη δυνατότητα μέχρι να χρησιμοποιήσετε τη λειτουργία \" Διαχειριστές ιδιοκτησίας \" για να γίνετε και οι δύο διαχειριστές και ένας Super Manager. Αυτό είναι ένα χαρακτηριστικό ασφαλείας. ");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Προεπιλεγμένη διάταξη λίστας ιδιοτήτων');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Μείνετε για τουλάχιστον');
jr_define('_JOMRES_NIGHTSFOR', 'νύχτες για');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Στοιχεία πράκτορα');
jr_define('_JOMRES_AGENT_LISTINGS', "Καταχωρήσεις πράκτορα");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Αυτόματη έγκριση νέων ιδιοτήτων');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Εάν ορίσετε αυτήν την επιλογή σε Όχι, τότε θα χρειαστεί να εγκρίνετε μη αυτόματα νέες ιδιότητες. Μέχρι να εγκριθεί μια ιδιότητα δεν μπορεί να δημοσιευθεί από έναν Διαχειριστή/Διαχειριστή Super ιδιοτήτων.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Εγκρίσεις');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Αυτή η ιδιότητα δεν έχει ακόμη εγκριθεί. Μόλις εγκριθεί, θα μπορείτε να τη δημοσιεύσετε.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Λυπούμαστε, δεν μπορείτε να δημοσιεύσετε αυτήν την ιδιότητα καθώς δεν έχει εγκριθεί ακόμη.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Μια νέα ιδιότητα απαιτεί έγκριση');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Προστέθηκε μια ιδιότητα στο σύστημα που απαιτεί την έγκρισή σας. Κάντε κλικ στον σύνδεσμο για να δείτε τις ιδιότητες που αναμένουν τη λίστα έγκρισης:');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Η ιδιοκτησία σας έχει εγκριθεί');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Συγχαρητήρια, η ιδιοκτησία σας έχει εγκριθεί, κάντε κλικ στον ακόλουθο σύνδεσμο για να δείτε τον πίνακα ελέγχου της ιδιοκτησίας:");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Τα ονόματα των περιοχών είναι μεταφράσιμα');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Εκτός εάν εκτελείτε έναν πολύ γρήγορο διακομιστή, σας συμβουλεύουμε να αφήσετε αυτό το σύνολο σε αριθ. Λόγω του μεγάλου αριθμού των ονομάτων περιοχής, η μετάφραση ονόματος περιοχής καταλαμβάνει μεγάλη μνήμη που μπορεί να επιβραδύνει τα αποτελέσματα αναζήτησης κάτω.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Ο επισκέπτης έχει κλείσει.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Λυπούμαστε, αυτή η διεύθυνση ηλεκτρονικού ταχυδρομείου χρησιμοποιείται ήδη. Εάν αυτή είναι η διεύθυνση ηλεκτρονικού ταχυδρομείου σας, βεβαιωθείτε ότι έχετε συνδεθεί πριν επιχειρήσετε να κάνετε κράτηση.');
jr_define('JOMRES_TAPTOCALL', 'Πατήστε για κλήση');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Νέα κριτική για');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Μια νέα κριτική έχει μείνει για');
	jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Έχει αναφερθεί μια κριτική για') ;
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Μεγάλο σύνολο (χωρίς φόρο):');
jr_define("JOMRES_GRANDTOTAL_INC_TAX", "Μεγάλο σύνολο (συμπεριλαμβανομένου του φόρου):");
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Συνολικός φόρος:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Πληκτρολογήστε τις δύο λέξεις:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Εισαγάγετε αυτό που ακούτε:');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Λήψη του κομματιού σε μορφή MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Λειτουργία ήχου');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Βοήθεια');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Συγγνώμη, αυτό ήταν λάθος. Προσπαθήστε ξανά.');
jr_define('JOMRES_GOOGLE_MAPS', 'Επιλογές χάρτη Google');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Χρήση στρώματος καιρού;');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Χρήση επιπέδου διέλευσης;');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Ενεργοποίηση σημείων ενδιαφέροντος Gmap (συμπεριλαμβανομένων πιθανώς των ανταγωνιστών σας);');
	jr_define('_JOMRES_METAKEYWORDS', 'Μετα λέξεις -κλειδιά');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Σάρωση αυτού του κωδικού στο τηλέφωνό σας για να λάβετε οδηγίες προς εμάς.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Ο αριθμός ΦΠΑ που καταχωρίσατε δεν φαίνεται να είναι σωστός. Θα πρέπει να έχετε κάτι τέτοιο: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Μη έγκυρος ΑΦΜ. Ελέγξτε την εγκυρότητα του Αριθμού ΦΠΑ σας με την υπηρεσία δικτύου επικύρωσης Αριθμού ΦΠΑ Ευρώπης (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Συγχαρητήρια. Μπορέσαμε να επικυρώσουμε τον αριθμό ΦΠΑ σας.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Λίστα κανόνων φορολογίας');
jr_define('_JOMRES_TAX_RULE', 'Φορολογικός κανόνας');
jr_define('_JOMRES_TAX_RULE_INFO', 'Οι φορολογικοί κανόνες χρησιμοποιούνται για τη θέσπιση διαφορετικών φορολογικών κανόνων για διαφορετικές περιοχές. Αυτοί οι φορολογικοί κανόνες επηρεάζουν το άτομο που κάνει την κράτηση, εάν είναι εγγεγραμμένο, συνδεδεμένο και έχει επεξεργαστεί τον λογαριασμό του χρησιμοποιώντας τη σελίδα "επεξεργασία του λογαριασμού μου" . Σκοπός αυτών των κανόνων είναι να φιλοξενήσουν τους αγοραστές σε εκείνους τους τομείς που απαλλάσσονται από τον ΦΠΑ, μπορεί να διαπιστώσετε ότι δεν χρειάζεται να δημιουργήσετε πολλούς κανόνες, εάν υπάρχουν. ');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Φορολογικοί συντελεστές εισαγωγής');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Μπορούμε να εισαγάγουμε φορολογικούς συντελεστές για την ΕΕ για εσάς, αν το επιθυμείτε. Σημειώστε, εάν χρησιμοποιείτε αυτήν τη δυνατότητα, τότε θα καταργηθούν όλοι οι υπάρχοντες φορολογικοί συντελεστές.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Επεξεργασία φορολογικού κανόνα');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Ο αριθμός ΦΠΑ για αυτήν την ιδιότητα.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Εισαγάγετε τον αριθμό ΦΠΑ για αυτήν την ιδιότητα.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Ο αριθμός ΦΠΑ επικυρώθηκε.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Ο αριθμός ΦΠΑ δεν έχει επικυρωθεί.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Τα στοιχεία της επιχείρησης που εισάγονται εδώ θα χρησιμοποιηθούν για τιμολόγια προμήθειας και συνδρομών.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Φαίνεται ότι δεν έχετε συμπληρώσει ακόμη τα στοιχεία του λογαριασμού σας. Για να καταχωρίσετε την ιδιοκτησία σας στον ιστότοπο, χρειαζόμαστε να συμπληρώσετε τα στοιχεία του λογαριασμού σας προτού προχωρήσουμε περαιτέρω.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Παραγωγή ή ανάπτυξη;');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Εάν ορίσετε αυτήν την επιλογή σε Ανάπτυξη, θα ενεργοποιήσουμε την αναφορά σφαλμάτων, διαφορετικά όταν οριστεί σε Παραγωγή που θα απενεργοποιηθεί. Εάν πρόκειται για διακομιστή ζωντανού, σας συνιστούμε να ορίσετε αυτήν την επιλογή σε "παραγωγή" ');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Παραγωγή');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Ανάπτυξη');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Λεπτομέρειες πόρων');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Στοιχεία τιμολογίου');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Μόνο');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'αριστερά!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Λειτουργία πόρων');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Δεν είναι δυνατή η κατάργηση αυτής της δυνατότητας πόρου, έχει εκχωρηθεί σε έναν πόρο. Καταργήστε τη λειτουργία από αυτόν τον πόρο και δοκιμάστε ξανά.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Προσθήκη εικόνων');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Εικόνες δωματίου');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Κύρια εικόνα ιδιοκτησίας');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Διαγραφή λίστας');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Σύρετε & Αποθέστε αρχεία εδώ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Επιλέξτε τον πόρο για τον οποίο θέλετε να ανεβάσετε εικόνες. Εάν μπορείτε να ανεβάσετε εικόνες για μεμονωμένους πόρους (π.χ. δωμάτια), θα σας δοθεί ένα δεύτερο αναπτυσσόμενο μενού για να επιλέξετε τον συγκεκριμένο πόρο.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Αν ανεβάσετε πολλαπλές εικόνες ως "Εικόνα κύριας ιδιότητας", αυτές θα χρησιμοποιηθούν στη Λίστα ιδιοτήτων. Οι εικόνες παρουσίασης διαφανειών θα εμφανίζονται στη σελίδα λεπτομερειών ιδιοτήτων.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Προβολή της εικόνας σας');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Διαγραφή εικόνας');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Μεταφόρτωση εικόνας');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Εικονίδια τύπων δωματίων');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Εικονίδια χαρακτηριστικών ιδιοτήτων');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Μεταφόρτωση όλων των αρχείων');
//8.0
jr_define('COMMON_PREV', 'Προηγούμενο');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Σήμερα');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Έτος');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Εβδομάδα');
jr_define('_JOMRES_DASHBOARD_DAY', 'Ημέρα');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'Προς');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Κατάθεση κατάστασης');
jr_define('_JOMRES_HSTATUS_GUEST', 'Κατάσταση επισκέπτη');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Κατάσταση κράτησης');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Κατάσταση τιμολογίου');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Τύπος τιμολογίου');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Εγκεκριμένο');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Τρέχουσα επιχείρηση');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Εμφάνιση κρατήσεων για');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Εμφάνιση τιμολογίων για');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Πληρωμένο');
jr_define('_JOMRES_STATUS_NOTPAID', 'Δεν πληρώνεται');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Ακυρώθηκε');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Δημοσιεύτηκε');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Μη δημοσιευμένο');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Επισκέπτες με ενεργές κρατήσεις');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Επισκέπτες με προηγούμενες κρατήσεις');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Κρατήσεις');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Συνδρομές');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Προμήθειες');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Όλες οι επιχειρήσεις μου');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'κρατήσεις');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'ιδιότητες');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'επισκέπτες');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'αναφορές');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Λίστα καλεσμένων');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Λίστα τιμολογίων');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Γρήγορη κράτηση');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Ημερομηνία κράτησης');
jr_define('_JOMRES_HTWO_WEEKS', 'Δύο εβδομάδες');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Αυτή η κράτηση θα ακυρωθεί. Πατήστε OK για ακύρωση της κράτησης.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkin');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Τρέχοντες κάτοικοι');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Θέση γραμμής πλοήγησης');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Προεπιλογή (περιοχή περιεχομένου)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Αντίστροφη γραμμή πλοήγησης (αλλαγή χρώματος)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Αριθμός κράτησης');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Εμφάνιση καλεσμένων για');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Το Jomres περιλαμβάνει τα δικά του σύνολα προτύπων, ένα για κάθε υποστηριζόμενη έκδοση του Bootstrap. Τα πρότυπα/θέματα Joomla και Wordpress που βασίζονται στο Bootstrap θα προσφέρουν μια συγκεκριμένη έκδοση του Bootstrap, ώστε να πρέπει να διασφαλίσετε ότι η επιλογή που επιλέγετε εδώ είναι συμβατό με το πρότυπο/το θέμα σας. Εάν το θέμα σας δεν παρέχει κώδικα Bootstrap ορίστε αυτήν την επιλογή σε No Bootstrap in Theme και τότε το Jomres θα περιλαμβάνει αυτόματα αρχεία Bootstrap 3 για δική του χρήση. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Εμφάνιση καλεσμένων για');
jr_define('_JOMRES_HFIXED_PERIODS', 'Σταθερές περίοδοι');
jr_define('_JOMRES_HDEPOSITS', 'Καταθέσεις');
jr_define('_JOMRES_HBOOKING_FORM', 'Φόρμα κράτησης');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Απαιτούμενα πεδία');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Λειτουργίες πόρων');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Τύπος πόρου');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Επεξεργασία τύπου επισκέπτη');
jr_define('_JOMRES_HEDIT_COUPON', 'Επεξεργασία κουπονιού');
jr_define('_JOMRES_HEDIT_EXTRA', 'Επεξεργασία επιπλέον');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Δημιουργία πολλαπλών πόρων');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Δημιουργία πόρων');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Πόσοι πόροι;');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Τύπος πόρων');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Μέγιστοι επισκέπτες ανά πόρο');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Διαγραφή όλων των υπαρχόντων πόρων;');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Σημειώστε ότι αυτή τη στιγμή βλέπετε την περιοχή διαχειριστή με το Advanced Site Config έχει οριστεί σε No.');
jr_define('DATATABLES_SINFO', 'Εμφάνιση _START_ έως _END_ από _TOTAL_ καταχωρήσεις');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Έγκριση');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Απόρριψη ερωτήσεων κράτησης');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Έγκριση αιτήματος κράτησης');
jr_define('_JOMRES_STATUS_APPROVED', 'Εγκεκριμένο');
jr_define('_JOMRES_STATUS_REJECTED', 'Απορρίφθηκε');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Οι κρατήσεις απαιτούν έγκριση ή επιβεβαίωση διαθεσιμότητας;');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Εάν οριστεί σε ναι, όταν πραγματοποιείται κράτηση, δεν θα εμφανίζεται στα ημερολόγια διαθεσιμότητας (και οι άλλοι επισκέπτες μπορούν να κάνουν κράτηση για αυτές τις ημέρες και πόρους) έως ότου ο διαχειριστής του ακινήτου αποδεχτεί/επιβεβαιώσει τη διαθεσιμότητα για την κράτηση . Μόλις επιβεβαιωθεί, η κράτηση εισάγεται ως προσωρινή (αν δεν παρακάμψει άλλες κρατήσεις · άλλοι επισκέπτες δεν μπορούν να κλείσουν πια τις ίδιες ημερομηνίες) και αποστέλλεται ένα email στον πελάτη για την πληρωμή. ');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Λυπούμαστε! Παρουσιάστηκε σφάλμα κατά την προσπάθεια επεξεργασίας αυτής της λειτουργίας. Σας έχει αναφερθεί και θα το εξετάσουμε.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Μήνυμα');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Αρχείο');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Γραμμή');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Πρότυπα ηλεκτρονικού ταχυδρομείου');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Επεξεργασία προτύπου email');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Θέμα ηλεκτρονικού ταχυδρομείου');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Όνομα email');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Περιγραφή email');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Ανατρέξτε σε αυτήν τη σελίδα για βοήθεια σχετικά με την προσαρμογή των μηνυμάτων ηλεκτρονικού ταχυδρομείου και μια λίστα με τη διαθέσιμη έξοδο: <a href="https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Νέα διεύθυνση ηλεκτρονικού ταχυδρομείου κράτησης διαχειριστή ιστότοπου');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου στον διαχειριστή του ιστότοπου όταν πραγματοποιείται νέα κράτηση, εάν είναι ενεργοποιημένη η καθολική πύλη Paypal');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Email New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου στον ιδιοκτήτη του ακινήτου όταν γίνεται νέα κράτηση');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Email New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Αποστολή email στον επισκέπτη όταν πραγματοποιείται νέα κράτηση');
	jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Επιστολή Επιβεβαίωσης Επισκέπτη');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Εκτυπώσιμη επιστολή ή email που μπορούν να σταλούν με μη αυτόματο τρόπο από τον ιδιοκτήτη του ακινήτου για επιβεβαίωση κράτησης');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Αυτή η κράτηση μπορεί να εγκριθεί. Όλοι οι επιλεγμένοι πόροι είναι διαθέσιμοι για τις επιλεγμένες ημερομηνίες.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Αυτή η κράτηση δεν μπορεί να εγκριθεί επειδή ορισμένοι από τους πόρους έχουν ήδη γίνει κράτηση για τις επιλεγμένες ημερομηνίες. Θα πρέπει πρώτα να τροποποιήσετε την κράτηση.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Προϋπολογισμός');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Χρήση της λειτουργίας προϋπολογισμού;');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Μόνο ιστότοποι με δυνατότητα εκκίνησης! Η λειτουργία Προϋπολογισμός είναι ένα χαρακτηριστικό της λίστας ιδιοτήτων που μπορεί να χρησιμοποιήσει ένας επισκέπτης για να του επισημάνει ποιες είναι η τιμή ανά διανυκτέρευση κάτω από ένα συγκεκριμένο αριθμό. Η δυνατότητα αυτή έχει κάποιους περιορισμούς δεν είναι κατάλληλο για ορισμένους ιστότοπους που χρησιμοποιούν πολλά διαφορετικά νομίσματα. Λάβετε υπόψη, εάν χρησιμοποιείτε αυτό και το πρόσθετο Επιλεγμένες καταχωρίσεις, η κατηγορία περιτυλίγματος με επιλεγμένες καταχωρίσεις αλλάζει αυτόματα σε \"κύριο πλαίσιο\" όταν εμφανίζεται η λίστα ιδιοτήτων. ");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Όνομα:');
jr_define('_JOMRES_FOR', 'Για');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'Νύχτα');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'νύχτες');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinity Scrolling στη λίστα ιδιοτήτων;');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Φεβρουάριος');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Μαρ');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Απρ');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Μάιος');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Ιούνιος');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Ιούλιος');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Οκτ');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Δεκ');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Δείχνοντας _START_ εως _END_ από _TOTAL_ εγγραφές');
jr_define('DATATABLES_SINFOEMPTY', 'Δείχνοντας 0 εως 0 από 0 εγγραφές');
jr_define('DATATABLES_SINFOFILTERED', '(φιλτραρισμένες από _MAX_ συνολικά εγγραφές)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Δείξε _MENU_ εγγραφές');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Επεξεργασία...');
jr_define('DATATABLES_SSEARCH', 'Αναζήτηση:');
jr_define('DATATABLES_SZERORECORDS', 'Δεν βρέθηκαν εγγραφές που να ταιριάζουν');
jr_define('DATATABLES_SFIRST', 'Πρώτη');
jr_define('DATATABLES_SLAST', 'Τελευταία');
jr_define('DATATABLES_SNEXT', 'Επόμενη');
jr_define('DATATABLES_SPREVIOUS', 'Προηγούμενη');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Αλλαγή στηλών');
jr_define('_BOOKING_ONREQUEST', 'Κράτηση κατόπιν αιτήματος');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome set icon?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Ορίστε το σε Ναι εάν το πρότυπό σας δεν περιλαμβάνει το Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Αίτηση κράτησης');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Αγαπητέ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Επιλογή ιστότοπου');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Αναγνωριστικό ιστότοπου');
jr_define('_JOMRES_IS_EU_COUNTRY', 'Χώρα ΕΕ;');
jr_define('_JOMRES_HLASTCHANGED', 'Τελευταία αλλαγή');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Email Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Αποστολή email στον ιδιοκτήτη του ακινήτου όταν ακυρώνεται μια νέα κράτηση');
	jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Email Ακύρωση Κράτησης Επισκεπτών');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Αποστολή email στον επισκέπτη όταν ακυρώνεται μια νέα κράτηση');
	jr_define('_JOMRES_TEST_EMAIL_SEND', 'Αποστολή δοκιμαστικού email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Αυτό είναι ένα δοκιμαστικό μήνυμα ηλεκτρονικού ταχυδρομείου από το σύστημα κρατήσεών σας.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Η δοκιμαστική διεύθυνση ηλεκτρονικού ταχυδρομείου στάλθηκε επιτυχώς');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Η δοκιμαστική διεύθυνση ηλεκτρονικού ταχυδρομείου δεν εστάλη');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates key API');
jr_define('_OPENEXCHANGE_API_DESC', 'Για τη μετατροπή των τιμών μεταξύ υπηρεσιών θα χρειαστείτε ένα κλειδί API Open Exchange Rates. ΠΡΕΠΕΙ να έχετε ένα κλειδί API για να εμφανίσετε σωστά τις τιμές στο Jomres, ωστόσο μπορείτε <a href = "https://openexchangerates.org/signup/free" target ="_blank"> εγγραφείτε για δωρεάν κλειδί </a> (ωριαίες ενημερώσεις, 1000 αιτήματα/μήνα - χωρίς HTTPS, υποστήριξη email ή προηγμένες δυνατότητες). Ο Jomres κατεβάζει τις συναλλαγματικές ισοτιμίες μία φορά την ημέρα, εφόσον χρησιμοποιείτε το κλειδί μόνο σε λίγους ιστότοπους, είναι απίθανο να ξεπεράσετε αυτά τα όρια. Πριν από το Jomres 8.3 χρησιμοποιήσαμε μια παλαιότερη, χωρίς έγγραφα δυνατότητα του Yahoo, ωστόσο ανακαλύψαμε ότι η χρήση αυτής της δυνατότητας είναι σε αντίθεση με τους Όρους της Yahoo και Συνθήκες. Ως αποτέλεσμα, πρέπει να υποθέσουμε ότι η λειτουργία μπορεί να εξαφανιστεί κάποια στιγμή στο μέλλον, επομένως η αλλαγή στη χρήση ανοικτών συναλλαγματικών ισοτιμιών. ');
jr_define('_JOMRES_COMMISSION', 'Επιτροπή');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Αν ανεβάσετε πολλές εικόνες για μεμονωμένα προαιρετικά πρόσθετα, θα χρησιμοποιηθεί μόνο η πρώτη εικόνα.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Πληρώστε τώρα');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Αυτό το τιμολόγιο έχει λήξει τώρα. Κάντε κλικ στο κουμπί για να επιλέξετε τον τρόπο πληρωμής.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Ακολουθεί μια λίστα με μερικά από τα καλύτερα πράγματα που μπορείτε να αγοράσετε ενώ κάνετε κράτηση σε αυτό το κατάλυμα.");
jr_define('GATEWAYS_INSTRUCTIONS', 'Σε αυτή τη σελίδα μπορείτε να διαμορφώσετε τυχόν εγκατεστημένες πύλες. Αυτές οι επιλογές σάς επιτρέπουν να λαμβάνετε πληρωμές για τυχόν τιμολόγια προμήθειας ή συνδρομής. Οι ρυθμίσεις Frontend μπορούν να παρακαμφθούν μόνο από το Paypal, όλες οι άλλες πύλες θα πρέπει να διαμορφωθούν μέσω της καρτέλας Διαμόρφωση ιδιοτήτων -> Πύλες, ωστόσο αν εμφανιστεί μια πύλη σε αυτήν τη λίστα, θα πρέπει να είναι σε θέση να επεξεργάζεται τόσο πληρωμές κατάθεσης Κράτησης όσο και πληρωμές τιμολογίων.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Εμφάνιση στη σελίδα λεπτομερειών ιδιοκτησίας;');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Ρυθμίσεις σελίδας Λεπτομέρειες ιδιοτήτων');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Η διαχείριση ακινήτων στο Jomres γίνεται μόνο από τον ιστότοπο frontend cpanel. Σε αυτή τη σελίδα θα μπορείτε να αναφέρετε όλες τις ιδιότητες στο σύστημα, ώστε να μπορείτε να αναθέσετε τιμές προμήθειας και να τις εγκρίνετε/μη εγκρίνετε (εάν αυτές Οι δυνατότητες είναι ενεργοποιημένες). Για να δημιουργήσετε μια νέα ιδιότητα, να επεξεργαστείτε υπάρχουσες, να διαχειριστείτε κρατήσεις ή άλλες εργασίες που σχετίζονται με ιδιότητες/κρατήσεις, θα πρέπει να συνδεθείτε στο προσκήνιο του ιστότοπου και να μεταβείτε στην προεπιλεγμένη σελίδα Jomres. Εκεί θα δείτε Jomres frontend cpanel. ');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Εικονίδια χαρακτηριστικών δωματίου');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Κατηγορίες χαρακτηριστικών ιδιοτήτων');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Επεξεργασία κατηγορίας χαρακτηριστικών ιδιοτήτων');
jr_define('_JOMRES_HCATEGORY', 'Κατηγορία');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Εμφάνιση χαρακτηριστικών ιδιοτήτων χωρισμένων σε κατηγορίες;');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Ορίστε το σε ΝΑΙ για να διαχωρίσετε τις ιδιότητες σε κατηγορίες. Αυτή η επιλογή επηρεάζει μόνο τις δυνατότητες που εμφανίζονται στη σελίδα λεπτομερειών ιδιοτήτων. Όλες οι άλλες σελίδες θα τις εμφανίζουν χωρίς να τις χωρίζουν σε κατηγορίες.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Το κλειδί λήψης και υποστήριξης είναι έγκυρο, θα μπορείτε να κάνετε λήψη πρόσθετων μέσω του διαχειριστή προσθηκών.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Το κλειδί λήψης και υποστήριξης ΔΕΝ είναι έγκυρο, ΔΕΝ θα μπορείτε να κάνετε λήψη πρόσθετων μέσω του διαχειριστή προσθηκών.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Δεν έχετε ορίσει ακόμα τον τύπο ιδιοκτησίας σας. Εδώ το ορίζετε ως κάτι σαν βίλα 5 υπνοδωματίων ή εξοχική κατοικία 4 υπνοδωματίων και βοηθά τους επισκέπτες που ψάχνουν να βελτιώσουν τις αναζητήσεις τους.") ;
	jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Δώστε έναν τύπο στην ιδιοκτησία σας');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Πρότυπα ηλεκτρονικού ταχυδρομείου');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Ρυθμίσεις επικοινωνίας');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Από εδώ μπορείτε να παρακάμψετε όλα τα στοιχεία επικοινωνίας ιδιοκτησίας (email, τηλέφωνο, φαξ), έτσι ώστε όλη η επικοινωνία με τους επισκέπτες να αποστέλλεται σε εσάς και όχι στους ιδιοκτήτες ακινήτων.');
	jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Παράκαμψη στοιχείων επικοινωνίας καταχωρίσεων;');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Εάν αυτή η επιλογή οριστεί σε Ναι, τότε οι διευθύνσεις ηλεκτρονικού ταχυδρομείου ιδιοκτησίας και οι αριθμοί τηλεφώνου θα αντικατασταθούν με αυτούς που έχουν οριστεί σε αυτήν την καρτέλα. Αυτό αναγκάζει όλες τις επικοινωνίες να αποστέλλονται στη διεύθυνση email που έχετε ορίσει, διασφαλίζοντας ότι ο επισκέπτης και η ιδιοκτησία ο ιδιοκτήτης δεν μπορεί να παρακάμψει τη μηχανή κράτησης και τις χρεώσεις προμήθειας που θα προκύψουν. Σημαίνει επίσης ότι κάθε φορά που αλλάζει η περιγραφή ενός ακινήτου, η ιδιότητα θα οριστεί σε Μη εγκεκριμένη (εάν είναι ενεργοποιημένη η δυνατότητα έγκρισης) και θα πρέπει να ελέγξετε χειροκίνητα την περιγραφή για να διασφαλιστεί ότι οι διαχειριστές δεν έχουν εισαγάγει στοιχεία τηλεφώνου ή ηλεκτρονικού ταχυδρομείου στα πεδία κειμένου πριν το εγκρίνουν ξανά. ");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Οι αλλαγές που έγιναν στις λεπτομέρειες της λίστας απαιτούν επαλήθευση διαχειριστή ιστότοπου. Εάν αποθηκεύσετε νέες λεπτομέρειες, η καταχώρισή σας θα είναι αδημοσίευτη και εκκρεμεί η έγκριση του διαχειριστή του ιστότοπου προτού εμφανιστεί ξανά στους επισκέπτες του ιστότοπου. Δεν θα μπορείτε να λαμβάνετε διαδικτυακά κρατήσεις ενώ η καταχώρισή σας είναι αδημοσίευτη και εκκρεμεί έγκριση. ');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Έλεγχος αιτήματος κράτησης');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Επιβεβαίωση αιτήματος κράτησης');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Τροποποίηση αιτήματος κράτησης');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Επισήμανση τιμολογίου ως εκκρεμή');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Τιμολόγιο επισημάνθηκε ως σε εκκρεμότητα');
jr_define('_JOMRES_TRACKING_ENABLE', 'Αποστολή ανώνυμων δεδομένων παρακολούθησης;');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Επιλέξτε Ναι για να στείλετε ανώνυμα δεδομένα παρακολούθησης στο Jomres.net για να μας βοηθήσετε να καταλάβουμε καλύτερα πώς χρησιμοποιείτε το σύστημα.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Βεβαιωθείτε ότι τα στοιχεία σας έχουν συμπληρωθεί στη σελίδα Επεξεργασία του λογαριασμού μου πριν επιχειρήσετε να κάνετε κρατήσεις για λογαριασμό των πελατών σας.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Στοιχεία επικοινωνίας επισκέπτη");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' - Νέος επισκέπτης -');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Επιλογή γραφήματος ...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Έσοδα ανά έτος/μήνα');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Εντάξει, ας ξεκινήσουμε. Πρώτα πρέπει να δημιουργήσετε μερικά δωμάτια για αυτήν την ιδιότητα.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Δημιουργήστε μερικά δωμάτια τώρα');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Έρευνες έχουν αποδείξει ότι οι ιδιότητες με πολλές εικόνες υψηλής ποιότητας δημιουργούν περισσότερες προβολές. Μεταφορτώστε μια κύρια εικόνα και μερικές εικόνες παρουσίασης για να βελτιώσετε τις πιθανότητές σας για κρατήσεις.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Μεταφόρτωση εικόνας');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Δημιουργία ορισμένων τιμολογίων');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Τι θα κλείσουν οι επισκέπτες;');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Αυτός ο τύπος ιδιοκτησίας είναι ιδιοκτησία τύπου ξενοδοχείου, όπου νοικιάζετε δωμάτια στο ακίνητο ή ιδιοκτησία τύπου βίλας, όπου νοικιάζετε ολόκληρο το ακίνητο σε μία κράτηση;');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Δωμάτια στο ακίνητο');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Ολόκληρη η ιδιοκτησία');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Και τα δύο'); // Αυτή είναι μια ενδιάμεση ρύθμιση που παρέχει συμβατότητα προς τα πίσω για υπάρχοντες χρήστες που δεν θα έχουν ακόμη ενημερώσει τους τύπους ιδιοκτησίας τους. Δεν θα είναι επιλέξιμο
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Τι θα κλείσουν οι επισκέπτες;');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Θα πρέπει να συμπληρώσετε τα στοιχεία της διεύθυνσής σας, έτσι ώστε οι καλεσμένοι σας να μπορούν να σας βρουν όταν πρόκειται να μείνουν.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Ενημέρωση της διεύθυνσής σας');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ωχ, φαίνεται ότι έχετε ξεχάσει να συμπληρώσετε όλα τα πεδία.');
jr_define('_JOMRES_CONTANT_US', 'Επικοινωνήστε μαζί μας');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Καλώς ορίσατε στη νέα σας ηλεκτρονική καταχώριση για');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Γεια, και καλώς ήρθατε στη νέα σας ιδιότητα');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Προσθέσατε πρόσφατα μια νέα ιδιότητα στον ιστότοπό μας και θα θέλαμε να σας καλωσορίσουμε στην οικογένεια.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Μπορείτε να δείτε τον νέο πίνακα ελέγχου σας');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'εδώ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Μόλις ρυθμίσετε την ιδιοκτησία σας, μπορείτε να δείτε πώς φαίνεται στους επισκέπτες του ιστότοπου όταν επισκέπτεστε");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'η πρώτη σελίδα σας.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(δεν έχει δημοσιευτεί, οπότε οι επισκέπτες του ιστότοπου δεν μπορούν να το δουν ακόμα).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Στο επάνω μέρος της σελίδας θα δείτε πολλά μηνύματα. Τα κουμπιά δίπλα σε αυτά τα μηνύματα θα σας καθοδηγήσουν στις σελίδες που πρέπει να επισκεφτείτε για να ρυθμίσετε την ιδιοκτησία σας στον ιστότοπό μας. Μόλις το κάνετε Έχοντας εκτελέσει κάθε μία από αυτές τις εργασίες, θα είναι πολύ πιο εύκολο για τους επισκέπτες στον ιστότοπό μας να βρουν την ιδιοκτησία σας και να κάνουν κρατήσεις online. ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Εάν έχετε απορίες, παρακαλώ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'επικοινωνήστε μαζί μας');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "και θα χαρούμε να απαντήσουμε σε όλες τις ερωτήσεις σας.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Όλα καλά, η ομάδα μας στο');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "Φαίνεται ότι δεν έχετε περιηγήσεις προς πώληση. Δημιουργήστε ένα προφίλ περιοδείας και, στη συνέχεια, χρησιμοποιήστε το κουμπί Δημιουργία για να δημιουργήσετε μερικές περιηγήσεις.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Ας δημιουργήσουμε μερικές περιηγήσεις!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Αντικατάσταση θέσης συμβόλου νομίσματος');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Χρησιμοποιήστε αυτήν την επιλογή για να μετακινήσετε το σύμβολο νομίσματος από πίσω, μπροστά από την τιμή ή αντίστροφα.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Εισαγάγετε το αναγνωριστικό της σελίδας σας στο facebook, για παράδειγμα "jomres". Αφήστε αυτό το κενό για να μην εμφανίζεται τίποτα. Μην εισάγετε https://www.facebook.com ή οτιδήποτε άλλο.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Στη συνέχεια θα χρειαστεί να προσθέσετε κάποια τιμολόγια. Αυτές είναι οι βασικές σας τιμές.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap δεν είναι ενεργοποιημένο!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Το κλειδί υποστήριξης είναι έγκυρο. Λάβετε υπόψη ότι αυτή η άδεια δεν επιτρέπει τη λήψη πρόσθετων.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Σύρετε κρατήσεις σε αυτήν την περιοχή για να τις ακυρώσετε');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Βεβαιωθείτε ότι έχετε δημιουργήσει μια σελίδα WordPress που περιέχει τον σύντομο κωδικό [jomres: xx-XX] (όπου xx-XX είναι ο κωδικός γλώσσας του ιστότοπού σας, για παράδειγμα [jomres: en-GB] ή [ jomres: el-US]) διαφορετικά δεν θα μπορείτε να έχετε πρόσβαση στο Jomres από το προσκήνιο για να διαχειριστείτε τις ιδιοκτησίες και τις κρατήσεις σας.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Πριν μπορέσετε να δημιουργήσετε έναν τύπο δωματίου, πρέπει να γνωρίζουμε αν πρόκειται για ιδιοκτησία τύπου ξενοδοχείου ή ιδιοκτησία τύπου βίλας.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Κάντε κλικ για προσθήκη νέων τύπων δωματίων');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Προσοχή, έχετε έναν ή περισσότερους τύπους ιδιοκτησίας χωρίς τύπους δωματίων. Οι ιδιότητες χρειάζονται τύπους δωματίων ώστε οι διαχειριστές ακινήτων να μπορούν να δημιουργούν τιμολόγια.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Χρησιμοποιήστε το κουμπί Νέο για να δημιουργήσετε νέους τύπους δωματίων.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Χωρίς κρατήσεις/Ακίνητα (απλή καταχώριση)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Καταγραφή θέσης αρχείου');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres καταγράφει τη δραστηριότητα του συστήματος από προεπιλογή στη θέση' .JOMRES_SYSTEMLOG_PATH. ". Καθώς αυτό το αρχείο μπορεί να περιέχει ευαίσθητες πληροφορίες (κλειδιά api, διαδρομές συστήματος, πληροφορίες πύλης, πληροφορίες επισκεπτών) συνιστούμε να αλλάξετε αυτήν τη διαδρομή σε ένα πάνω από τη ρίζα του εγγράφου ιστού σας. Εάν δεν καταλαβαίνετε τι σημαίνει αυτό, ζητήστε συμβουλές από τους οικοδεσπότες ιστού, καθώς θα γνωρίζουν το σύστημα αρχείων σας. ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Ο Jomres καταγράφει λεπτομερείς πληροφορίες σχετικά με το σύστημά σας, συμπεριλαμβανομένων των κλειδιών api, των διαδρομών του συστήματος, της πύλης και των επισκεπτών, τα οποία δεν πρέπει να είναι ορατά στο υπόλοιπο διαδίκτυο. Η διαδρομή καταγραφής του συστήματος σας δεν έχει οριστεί, τα αρχεία καταγραφής συστήματος αποθηκεύονται αυτήν τη στιγμή στον κατάλογο '.JOMRES_SYSTEMLOG_PATH. ", ο οποίος δεν είναι ιδανικός. Επισκεφτείτε τη Διαμόρφωση τοποθεσίας -> Αποσφαλμάτωση και ορίστε μια διαδρομή στο σύστημα αρχείων σας που βρίσκεται εκτός της ρίζας ιστού. Εάν έχετε αμφιβολίες, επικοινωνήστε με τους οικοδεσπότες ιστού σας όπως θα μπορούν να σας συμβουλεύσουν. ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Εάν το CMS σας είναι εγκατεστημένο στον ριζικό κατάλογο του ιστότοπού σας, τότε θα ήταν μια κατάλληλη τοποθεσία');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Δεν έχετε ορίσει κλειδί Χάρτες Google. Λόγω των πρόσφατων αλλαγών στους χάρτες Google, όλοι οι νέοι ιστότοποι θα χρειαστούν ένα κλειδί API για να μπορούν να χρησιμοποιούν τις δυνατότητες του χάρτη Google. <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank'> δείτε τη μη αυτόματη σελίδα μας για τον τρόπο δημιουργίας κλειδιού API < /a> και αποθηκεύστε το κλειδί στο Jomres. ");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map color color');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Σωστά, ας αρχίσουμε να προσθέτουμε την ιδιοκτησία σας στον ιστότοπο. Πρέπει να συλλέξουμε μερικές πληροφορίες σχετικά με την ιδιοκτησία σας εδώ. Αυτό θα μας επιτρέψει να δημιουργήσουμε τα γυμνά οστά της ιδιοκτησίας σας. Μόλις τελειώσετε, τότε εσείς θα καθοδηγηθείτε στην προσθήκη δωματίων, τιμών και εικόνων. ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Ο τύπος ιδιοκτησίας σάς βοηθά να καθορίσετε τον τρόπο κράτησης του ακινήτου, για παράδειγμα με ξενοδοχεία που "πουλάτε" μόνο ένα ή δύο δωμάτια τη φορά, ενώ με βίλες προσφέρετε ολόκληρο το ακίνητο. ');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Σημειώστε ότι η διεύθυνση ηλεκτρονικού ταχυδρομείου δεν χρειάζεται να είναι η ίδια με αυτήν που χρησιμοποιήσατε κατά την εγγραφή του λογαριασμού σας. Αυτό σας επιτρέπει να έχετε διαφορετικές διευθύνσεις για διαφορετικές ιδιότητες.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Ελάχιστη κατάθεση');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Μπορείτε να διαμορφώσετε το ελάχιστο ποσό κατάθεσης που θα χρεωθεί. Αν το κάνετε, τότε το "Απαιτείται κατάθεση είναι το κόστος της πρώτης νύχτας;" & "Η απαιτούμενη κατάθεση είναι ποσοστό;" Δεν είναι δυνατή η διαμόρφωση των ρυθμίσεων στο Property Configuration, αλλά όλες οι τιμές κατάθεσης είναι ένα ποσοστό και πρέπει να είναι τουλάχιστον το σχήμα που ορίζετε εδώ.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Αυτός ο αριθμός δεν μπορεί να είναι μικρότερος από');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Θύρα Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', 'Εάν θέλετε να στείλετε μηνύματα καταγραφής συστήματος σε διακομιστή syslog, μπορείτε να ορίσετε το όνομα κεντρικού υπολογιστή ή την IP (π.χ. 192.168.0.2) και τη θύρα (π.χ. 514) εδώ. Σημείωση, εάν ο ιστότοπος έχει οριστεί σε Ανάπτυξη τότε θα αποσταλούν μηνύματα DEBUG. Αν οριστεί σε \' Παραγωγή \', θα αποσταλούν μόνο μηνύματα INFO και υψηλότερα. Για να απενεργοποιήσετε την καταγραφή στον απομακρυσμένο διακομιστή, αδειάστε τα πεδία κεντρικού υπολογιστή και θύρας. ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "Δεν επιτρέπεται η πρόσβαση της PHP στις λειτουργίες PHP \" openlog \"και\" syslog \". Αυτή είναι μια ρύθμιση από την πλευρά του διακομιστή, εάν θέλετε να στείλει μηνύματα ο Jomres σε διακομιστή syslog, συμβουλευτείτε τους οικοδεσπότες σας και επιβεβαιώστε εάν επιτρέπεται η πρόσβαση της PHP σε αυτές τις λειτουργίες. Μόλις ενεργοποιηθεί, θα μπορείτε να διαμορφώσετε τις ρυθμίσεις του διακομιστή syslog εδώ. ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Αποστολή μηνύματος ηλεκτρονικού ταχυδρομείου στον διαχειριστή του ιστότοπου όταν προκύψει σφάλμα;');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Ιστορικά ζητήματα που πρέπει να διερευνηθούν έχουν αποσταλεί με email στους ιδιοκτήτες ιστότοπων. Αυτό μπορεί να είναι εξαιρετικό για να παρακολουθείτε τη λειτουργία του συστήματός σας καθώς έχει τρομερά πολλά κινούμενα μέρη και είναι δύσκολο να παρακολουθείτε Δυστυχώς, οι αράχνες και τα Bots που ανιχνεύουν τους ιστότοπούς σας (ακόμη και φιλικούς) μπορεί να προκαλέσουν ακούσια θανατηφόρα σφάλματα και αυτό μπορεί να προκαλέσει συντριπτικό αριθμό μηνυμάτων που λαμβάνετε. Εάν συμβαίνει αυτό, ορίστε αυτήν την επιλογή στο No. Jomres στέλνει αρχεία καταγραφής μηνύματα τόσο σε ένα σύνολο αρχείων καταγραφής όσο και σε έναν διακομιστή syslog (εάν το επιτρέπουν οι συγκεκριμένες ρυθμίσεις PHP, εάν δεν επικοινωνούν με τον κεντρικό υπολογιστή σας). Μπορείτε να αναλύσετε μη αυτόματα τα αρχεία εάν αναζητάτε κάτι συγκεκριμένο (για παράδειγμα, εάν αναπτύσσετε μια πύλη και θέλετε να χρησιμοποιήσετε την κλήση gateway_log ().) αλλά αυτές είναι πολλές πληροφορίες για να τραβήξετε, οπότε είναι καλύτερο να χρησιμοποιήσετε κάτι σαν αναλυτή αρχείων syslog. Εάν αναπτύσσεστε σε linux, τότε υπάρχουν πολλά διαθέσιμα εργαλεία, εάν στα Windows τότε ένα απλό εργαλείο που μπορείτε να χρησιμοποιήσετε είναι το http://maxbelkov.github.io/visualsyslog/ Σε αυτή τη σελίδα ορίστε το \"Syslog host\" σε \"127.0.0.1\" και το Θύρα στο 514 για να δείτε τα μηνύματα που είναι συνδεδεμένα σε αυτό το εργαλείο. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Διαχείριση ιδιοτήτων');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Δεν διαθέτετε κλειδί API ανίχνευσης IP. Αυτό απαιτείται για να επιτρέπει στο σύστημα να εντοπίζει αυτόματα την τοποθεσία του χρήστη και να ορίζει αυτόματα το νόμισμα και τη χώρα του. <a href = 'https://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> δείτε το εγχειρίδιό μας σελίδα σχετικά με τον τρόπο δημιουργίας ενός κλειδιού API ανίχνευσης IP </a> και αποθήκευσης του κλειδιού στο Jomres> Διαμόρφωση ιστότοπου> Μετατροπές νομισμάτων / Κωδικοί νομίσματος. ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Δεν έχετε ένα κλειδί API ανοικτής συναλλαγματικής ισοτιμίας. Αυτό απαιτείται για να επιτρέψει στο σύστημα να πραγματοποιεί αυτόματη λήψη και χρήση συναλλαγματικών ισοτιμιών. <a href = 'https://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> δείτε τη σελίδα του εγχειριδίου μας για το πώς δημιουργήστε ένα κλειδί API ανίχνευσης IP </a> και αποθηκεύστε το κλειδί στο Jomres> Site Configuration> Currency Conversions / Currency Codes. ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Αδειοδότηση');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Ορισμένες χώρες νομοθετούν ότι πρέπει να εμφανίζετε έναν αριθμό άδειας για την ιδιοκτησία σας. Εάν έχετε έναν τέτοιο αριθμό, εισαγάγετε τον εδώ και θα προστεθεί στην ενότητα κεφαλίδας ιδιοκτησίας.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "Το πρόσθετο <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot ΠΡΕΠΕΙ να εγκατασταθεί και να ενεργοποιηθεί για να λειτουργούν αυτοί οι σύντομοι κώδικες. Αυτό μπορεί να βρεθεί στο Jomres Plugin Manager. Quickstarts τότε είναι πιθανότατα ήδη εγκατεστημένο. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Πρέπει να διασφαλίσετε ότι είναι ενεργοποιημένη η προσθήκη <strong> 'Jomres Shortcodes' </strong>. Αυτό μπορείτε να το βρείτε στο Jomres Plugin Manager. Αν αυτός ο ιστότοπος δημιουργήθηκε χρησιμοποιώντας μία από τις Γρήγορες εκκινήσεις, τότε μάλλον είναι ήδη εγκατεστημένο.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Περιγραφή');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Παράδειγμα');
jr_define("INTEGRITY_CHECK", "Έλεγχος ακεραιότητας συστήματος αρχείων");
jr_define('INTEGRITY_CHECK_DESC', 'Αυτή η δυνατότητα σάς επιτρέπει να ελέγχετε ότι το σύστημα αρχείων ταιριάζει με την τρέχουσα έκδοση του Jomres. Αυτό είναι χρήσιμο για να διασφαλίσετε ότι όλα τα αρχεία ενημερώθηκαν σωστά μετά την εγκατάσταση/αναβάθμιση. Λείπουν αρχεία με κόκκινο χρώμα, αρχεία σε Πορτοκαλί υπάρχουν αλλά είναι διαφορετικά από αυτά που παρέχονται στην τρέχουσα έκδοση. Μόνο τα αρχεία που είναι πιθανά προβλήματα θα αναφέρονται εδώ. ');
jr_define('INTEGRITY_CHECK_FILENAME', 'Έλεγχος ακεραιότητας συστήματος αρχείων');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define("INTEGRITY_CHECK_BUILDHASH", "Έκδοση κατακερματισμού");
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Φοβερό! Δεν βρέθηκαν προβλήματα.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'δείκτης χαρτών Google');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Διαβάστε περισσότερα');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Διαβάστε λιγότερο');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Τουριστικός φόρος');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Τουριστικός φόρος');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Ορίστε τον συντελεστή τουριστικού φόρου. Ο τουριστικός φόρος υπολογίζεται μόνο μετά τη δημιουργία της αρχικής κράτησης και προστίθεται στη σελίδα επιβεβαίωσης κράτησης, στο πλαίσιο πρόσθετων υπηρεσιών.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Είναι ποσοστό;');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Ορίστε το σε Ναι εάν ο φόρος είναι ποσοστό ή Όχι αν είναι μια κατ 'αποκοπή αμοιβή.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Επηρεάζει ολόκληρη την αξία κράτησης;');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Ορίστε το σε Ναι εάν ο φόρος καλύπτει ολόκληρη την αξία της κράτησης, οπότε είναι ένα ποσοστό και των δύο καταλυμάτων συν τυχόν πρόσθετα, ή Όχι εάν υπολογίζεται μόνο βάσει της αξίας του Το σύνολο του καταλύματος. Εάν η επιλογή Είναι ποσοστό παραπάνω έχει οριστεί σε Όχι, τότε αυτή η επιλογή αγνοείται. ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Έχετε υπόψη ότι σε αυτήν την κράτηση θα προστεθεί τουριστικός φόρος. Θα μπορείτε να δείτε τον φόρο στη σελίδα κράτησης κριτικής.');
jr_define('NO_LICENSE_MESSAGE', "Δεν έχετε αποθηκεύσει αριθμό άδειας στη Διαμόρφωση ιστότοπου, επομένως δεν θα μπορείτε να κάνετε λήψη πρόσθετων. Μόλις αποθηκεύσετε ένα έγκυρο κλειδί άδειας χρήσης, θα μπορείτε να εγκαταστήσετε τυχόν πρόσθετα που αναφέρονται ως Βασικά πρόσθετα. ");
jr_define('INVALID_LICENSE_MESSAGE', "Φαίνεται ότι χρησιμοποιείτε έναν αριθμό άδειας που δεν είναι έγκυρος ή έχει λήξει. Μόλις αποθηκεύσετε ένα έγκυρο κλειδί άδειας χρήσης, θα μπορείτε να εγκαταστήσετε τυχόν πρόσθετα που αναφέρονται ως βασικά πρόσθετα.");
jr_define('VALID_LICENSE_MESSAGE', "Συγχαρητήρια, χρησιμοποιείτε έγκυρο αριθμό άδειας χρήσης και μπορείτε να εγκαταστήσετε πρόσθετα Core μέσω του διαχειριστή προσθηκών Jomres.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Αυτή η σελίδα σάς επιτρέπει να ανεβάζετε εικόνες για την ιδιοκτησία σας και τα πράγματα που προσφέρετε. Έχει ένα κύριο κουμπί και ένα δεύτερο κουμπί που σας επιτρέπει να επιλέξετε συγκεκριμένους πόρους για τη μεταφόρτωση εικόνων. Έτσι, η κύρια ιδιότητα Η εικόνα και το Slideshow θα εμφανίζει μόνο ένα κουμπί, αλλά εάν έχετε δημιουργήσει π.χ. Προαιρετικά Πρόσθετα ή Δωμάτια, τότε θα δείτε ένα δεύτερο κουμπί όπου μπορείτε να ανεβάσετε εικόνες για τους συγκεκριμένους πόρους. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Αυτή η σελίδα σάς επιτρέπει να ανεβάζετε εικόνες για την ιδιοκτησία σας και τα πράγματα που προσφέρετε. Έχει ένα κύριο κουμπί και ένα δεύτερο κουμπί που σας επιτρέπει να επιλέξετε συγκεκριμένους πόρους για τη μεταφόρτωση εικόνων. Έτσι, η κύρια ιδιότητα Η εικόνα και το Slideshow θα εμφανίζει μόνο ένα κουμπί, αλλά εάν έχετε δημιουργήσει κάποια Προαιρετική Πρόσθετα, θα δείτε ένα δεύτερο κουμπί όπου μπορείτε να ανεβάσετε εικόνες για τους συγκεκριμένους πόρους. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Αρχικά επιλέξτε τις εικόνες που θέλετε να ανεβάσετε κάνοντας κλικ στην επιλογή Προσθήκη εικόνας ή χρησιμοποιώντας την επιλογή Μεταφορά και απόθεση. Αυτά θα εμφανιστούν στη στήλη στη δεξιά πλευρά. </li>
  <li> Πάνω από αυτήν την περιοχή, χρησιμοποιήστε το κουμπί Επιλογή πόρου για να επιλέξετε για ποιον πόρο θέλετε να ανεβάσετε εικόνες. Ενδέχεται να σας προσφερθεί η επιλογή να επιλέξετε έναν συγκεκριμένο πόρο από κάτω. </li>
  <li> Αφού επιλέξετε έναν πόρο, μπορείτε στη συνέχεια να κάνετε κλικ στο κουμπί Μεταφόρτωση εικόνας κάτω από μια εικόνα για να το συσχετίσετε με αυτόν τον πόρο. Μόλις μεταφορτωθεί μια εικόνα, θα εξαφανιστεί από τη στήλη στον ιστότοπο της δεξιάς πλευράς και θα εμφανιστεί στην αριστερή. </li>
  <li> Χρησιμοποιήστε το κουμπί Κάδος απορριμμάτων δίπλα στις υπάρχουσες εικόνες για να καταργήσετε εικόνες που δεν θέλετε πλέον να εμφανίζονται. </li>
  <li> Μπορείτε να αλλάξετε τη σειρά εμφάνισης των αρχείων στην παρουσίαση μετονομάζοντάς τα πριν τα ανεβάσετε, καθώς εμφανίζονται σε σελίδες με αλφαβητική σειρά. </li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Δίπλα στο κουμπί πόρων, ενδέχεται να δείτε ένα κουμπί προεπισκόπησης. Εάν κάνετε κλικ σε αυτό, θα δείτε ένα αναδυόμενο παράθυρο που σας δείχνει πώς θα φαίνονται οι τρέχουσες εικόνες που έχουν μεταφορτωθεί σε μια σελίδα. Αυτό σας βοηθά να ιδέα για το πώς θα φαίνονται οι εικόνες στους πελάτες σας. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Δεν υπάρχει όριο στον αριθμό των εικόνων που μπορείτε να ανεβάσετε. Το μέγεθος των εικόνων αλλάζει αυτόματα όταν φορτώνεται. Μπορείτε να ανεβάσετε μόνο αρχεία JPG και PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ιδανικά όλες οι εικόνες που ανεβάζετε θα είναι τουλάχιστον");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "πλάτος εικονοστοιχείων, διαφορετικά μπορεί να φαίνονται θολά μετά τη μεταφόρτωση.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Οι εικόνες που ανεβάζετε δεν μπορούν να είναι περισσότερες από");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "σε μέγεθος.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Επιλέξτε τον πόρο για τον οποίο θέλετε να ανεβάσετε εικόνες");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Συγκεκριμένος πόρος");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Οι εικόνες έχουν ήδη μεταφορτωθεί για αυτόν τον πόρο");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Μορφοποίηση κειμένου');
jr_define('_JOMRES_MARKDOWN_DESC', 'Μπορείτε να εισαγάγετε κείμενο εδώ χρησιμοποιώντας απλή μορφοποίηση Markdown. Δεν χρειάζεται να γνωρίζετε HTML, απλώς χρησιμοποιήστε τα κουμπιά για να κάνετε τις πληροφορίες να φαίνονται όπως θέλετε, ή να μορφοποιήσετε κείμενο σύμφωνα με αυτά τα παραδείγματα.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Έμφαση');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'πλάγια');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Μεγάλη κεφαλίδα');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Μεσαία κεφαλίδα");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Μικρή κεφαλίδα');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Λίστες");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Γενικό στοιχείο λίστας');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Αριθμημένο στοιχείο λίστας');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Κείμενο προς εμφάνιση');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Αυτό είναι ένα απόσπασμα.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Μπορεί να εκτείνεται σε πολλές γραμμές!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Εικόνες');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Πίνακες');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Στήλη');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Εμφάνιση εικόνων ιδιοτήτων ως παρουσίαση στη λίστα ιδιοτήτων;');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Εάν οριστεί σε ναι, θα εμφανιστεί μια παρουσίαση των κύριων εικόνων ιδιοτήτων. Εάν οριστεί σε όχι, τότε θα εμφανιστεί η πρώτη κύρια εικόνα της ιδιότητας.');
jr_define('EDIT_CMS_USER', 'Επεξεργασία χρήστη CMS');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Παροχές');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Τύποι δωματίων');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Εξωτερική διεύθυνση φόρμας κράτησης');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Εδώ μπορείτε να ορίσετε μια εξωτερική διεύθυνση URL εάν θέλετε να χρησιμοποιήσετε έναν ιστότοπο τρίτου μέρους για κρατήσεις. Όλα τα κουμπιά κράτησης jomres θα δείχνουν σε αυτήν τη διεύθυνση URL. Αφήστε αυτό το πεδίο κενό εάν θέλετε να χρησιμοποιήσετε τη φόρμα κράτησης Jomres . ');
jr_define('_JOMRES_ROOM_TAGLINE', 'Ετικέτα (σύντομη περιγραφή δωματίου/υπότιτλος)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Περιγραφή δωματίου');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Μαύρη λίστα επισκεπτών');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Εάν αυτός ο επισκέπτης είναι στη μαύρη λίστα, δεν θα μπορεί πλέον να κάνει κρατήσεις σε αυτήν την ιδιότητα.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Αποθήκευση αρχείων jomres session στο δίσκο ή στη βάση δεδομένων. Συνιστάται: βάση δεδομένων');
jr_define('_JOMRES_MAP_HEIGHT', "Mapψος χάρτη (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Επίπεδο ζουμ χάρτη");
jr_define('_JOMRES_MAP_MAPTYPE', "Τύπος χάρτη");
jr_define('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Τα πακέτα προτύπων είναι πρόσθετα που μπορούν να παρέχουν παράκαμψη προτύπων για διάφορα βασικά αρχεία προτύπων Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Αυτή η σελίδα παραθέτει τυχόν αρχεία προτύπων που μπορούν να παρακαμφθούν από τα πρότυπα αρχεία ενός πακέτου προτύπου. Εάν θέλετε να παρακάμψετε ένα συγκεκριμένο αρχείο προτύπου, κάντε κλικ στο κουμπί επεξεργασίας για αυτό το αρχείο, στην επόμενη σελίδα θα μπορείτε να επιλέξετε με ποια έκδοση θέλετε να παρακάμψετε. Σημείωση, αυτές οι παρακάμψεις έχουν προτεραιότητα τόσο στο Jomres Core όσο και σε κάθε παράκαμψη θέματος/προτύπου Wordpress ή Joomla. Μπορείτε να απενεργοποιήσετε μια παράκαμψη διαγράφοντάς τη στη σελίδα Παράκαμψη προτύπου λίστας.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Όνομα προτύπου");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Τρέχουσα διαδρομή");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Δεν παρακάμπτεται");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Μπορείτε να επιλέξετε ποιο αρχείο προτύπου θα παρακάμψει τα βασικά αρχεία προτύπων αλλάζοντας το αναπτυσσόμενο μενού");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Ποσοστό κράτησης δωματίων");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Ποσοστό κράτησης δωματίων");
jr_define('_JOMRES_SELECT_WIDGETS', "Επιλογή γραφικών στοιχείων");
jr_define('_JOMRES_INTERVAL', "Interval");
jr_define('_JOMRES_TIMELINE', "Timeline");
jr_define('_JOMRES_CPANEL_GRID', "Διάταξη οικιακού πίνακα ελέγχου");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Επιλέξτε τη διάταξη πλέγματος της αρχικής σελίδας του πίνακα ελέγχου διαχείρισης ιδιοκτησίας σας.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Εικόνες πόλης");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Η αλλαγή του τύπου ιδιοκτησίας θα διαγράψει όλα τα δωμάτια, τα τιμολόγια, τις ρυθμίσεις ιδιοκτησίας και θα επαναφέρει τη διαθεσιμότητα.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Σημειώστε, μετά την ενημέρωση πρέπει να ενημερώσετε τυχόν πρόσθετα Jomres που είναι ήδη εγκατεστημένα, μέσω του διαχειριστή προσθηκών Jomres. Εάν έχετε εγκατεστημένα Core plugins, αλλά δεν διαθέτετε έγκυρη άδεια Jomres, τότε <em> κάνουμε δεν </em> συνιστούμε να ενημερώσετε το Jomres, καθώς τα παλαιότερα πρόσθετα συχνά δεν λειτουργούν με νεότερες εκδόσεις του Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Σημειώστε, μετά την ενημέρωση πρέπει να ενημερώσετε τυχόν πρόσθετα Jomres που είναι ήδη εγκατεστημένα, μέσω του διαχειριστή πρόσθετων Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Εάν θέλετε να ενημερώσετε το Jomres και τα πρόσθετα του, θα χρειαστείτε άδεια ανανέωσης. Επισκεφτείτε τη διεύθυνση <a href='https://www.jomres.net/pricing' target='_blank'> μας ιστότοπος </a> για περισσότερες πληροφορίες. Στις περισσότερες περιπτώσεις αυτές οι άδειες είναι το 50% της τιμής μιας πλήρους άδειας. Βεβαιωθείτε ότι έχετε συνδεθεί στο κατάστημά μας πριν επιχειρήσετε να αγοράσετε ανανέωση. ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Τρόπος πληρωμής:");

jr_define('_JOMRES_PRICES', "Συνδεθείτε");


jr_define('_OAUTH_TITLE', "Διαχείριση κλειδιών εφαρμογής");
jr_define('_OAUTH_APPS', "REST API details client");
jr_define('_OAUTH_IDENTIFIER', "Identifier");
jr_define('_OAUTH_APIKEY', "Client ID");
jr_define('_OAUTH_SECRET', "Secret");
jr_define('_OAUTH_CREATED', "Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO', "Το αναγνωριστικό πελάτη και το μυστικό δημιουργούνται για εσάς. Το αναγνωριστικό είναι έτσι ώστε να μπορείτε εύκολα να προσδιορίσετε αυτό το ζεύγος κλειδιών.");
jr_define('_OAUTH_SCOPE_TITLE', "Δικαιώματα (τι μπορεί να κάνει ο πελάτης)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Δικαιώματα χρήστη");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Δικαιώματα ιδιοκτησίας");

jr_define('API_DOCUMENTATION_TITLE', "Τεκμηρίωση API REST API");

jr_define('_OAUTH_CONFIG', "Βασική διαμόρφωση API");

jr_define('_OAUTH_CONFIG_SHOW', "Εμφάνιση επιλογών διαμόρφωσης προγράμματος -πελάτη API στο κύριο μενού Jomres;");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Μπορείτε να επιλέξετε να μην εμφανίζονται οι επιλογές διαμόρφωσης του προγράμματος -πελάτη API στην ενότητα Ο λογαριασμός μου του κύριου μενού Jomres. Αντ 'αυτού, θα μπορούσατε να αποφασίσετε ότι θέλετε να εμφανίζονται σε άλλες σελίδες χρησιμοποιώντας συντομότερους κωδικούς Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Εμφανίζει τη σελίδα τεκμηρίωσης του βασικού API. Το API Core επιτρέπει στους χρήστες να δημιουργούν προγράμματα -πελάτες API, οι οποίοι στη συνέχεια χρησιμοποιούνται για πρόσβαση στη λειτουργικότητα API που περιγράφεται στην τεκμηρίωση του API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Εμφανίζει τη βασική σελίδα διαχείρισης API, όπου οι διαχειριστές ιδιοκτησίας μπορούν να διαμορφώσουν πελάτες API. Λάβετε υπόψη ότι πρόκειται για εγγεγραμμένη μόνο δυνατότητα χρήστη, οπότε οι χρήστες πρέπει να είναι εγγεγραμμένοι και συνδεδεμένοι πριν να δουν αυτήν τη σελίδα.");
jr_define('API_METHODS_TITLE', "API Methods");
jr_define('API_METHODS_DESCRIPTION', "Αυτή η λίστα μεθόδων βασίζεται στις εγκατεστημένες προσθήκες λειτουργιών API και δημιουργείται αυτόματα. Εάν εγκαταστήσετε ή διαγράψετε μια προσθήκη λειτουργιών API, πρέπει να επισκεφθείτε αυτήν τη σελίδα για να αναδημιουργήσετε αυτήν τη λίστα μεθόδων API που είναι διαθέσιμες στον ιστότοπό σας. ");

jr_define('_OAUTH_REDIRECT_URI', "Ανακατεύθυνση URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Δώστε μου ένα όνομα που έχει νόημα για εσάς, όπως το τηλέφωνό μου");

jr_define('_OAUTH_GRANT_TYPES', "Αυτό το σύστημα υποστηρίζει δύο τύπους επιχορήγησης, τα διαπιστευτήρια πελατών και τα σιωπηρά. Εάν χρησιμοποιείτε τη ροή <em> client_credentials </em> τότε θα χρειαστείτε τόσο το αναγνωριστικό πελάτη όσο και το μυστικό πελάτη. Εάν χρησιμοποιείτε <em> σιωπηρή </em> τότε η εφαρμογή σας θα στείλει μόνο το αναγνωριστικό πελάτη και θα συνδεθείτε στο σύστημα για να εξουσιοδοτήσετε ρητά αυτήν την εφαρμογή.");
jr_define('_OAUTH_AUTHORISATION_URL', "URL εξουσιοδότησης");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "Εμφάνιση επιλογών διαμόρφωσης Webhook στο κύριο μενού Jomres;");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Μπορείτε να επιλέξετε να μην εμφανίζονται οι επιλογές διαμόρφωσης του Webhook στην ενότητα Ο λογαριασμός μου του κύριου μενού Jomres. Αντ 'αυτού, θα μπορούσατε να αποφασίσετε ότι θέλετε να εμφανίζονται σε άλλες σελίδες χρησιμοποιώντας συντομογραφικούς κώδικες Jomres.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Τεκμηρίωση Webhooks");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Εμφανίζει τη σελίδα τεκμηρίωσης του βασικού API. Ο πυρήνας API επιτρέπει στους χρήστες να δημιουργούν πελάτες API, οι οποίοι στη συνέχεια χρησιμοποιούνται για πρόσβαση στη λειτουργικότητα API που περιγράφεται στην τεκμηρίωση του API Core.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Εμφανίζει τη βασική σελίδα διαχείρισης API, όπου οι διαχειριστές ιδιοκτησίας μπορούν να διαμορφώσουν πελάτες API. Λάβετε υπόψη ότι πρόκειται για εγγεγραμμένη μόνο λειτουργία χρήστη, οπότε οι χρήστες πρέπει να είναι εγγεγραμμένοι και συνδεδεμένοι πριν να δουν αυτήν τη σελίδα.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL ή Όνομα');
jr_define('WEBHOOKS_ENABLED', 'Enabled');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Μέθοδος ελέγχου ταυτότητας/ενσωμάτωση');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Οποιοσδήποτε webhooks που δημιουργείτε δεν θα ενεργοποιηθεί καθώς δεν έχετε εκχωρηθεί σε καμία ιδιότητα. Στους διαχειριστές Super ιδιοτήτων δεν εκχωρούνται συνήθως μεμονωμένες ιδιότητες, επομένως μπορεί να χρειαστείτε νέος χρήστης για δημιουργία webhook.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Τυχόν webhook που δημιουργείτε θα ενεργοποιούνται στις ακόλουθες ιδιότητες:');


jr_define('PORTAL_REVIEWS_LIMIT', 'Όριο κριτικών');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Χρησιμοποιήστε αυτήν τη ρύθμιση για να περιορίσετε τον αριθμό των κριτικών που εμφανίζονται στη σελίδα λεπτομερειών ιδιοτήτων.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Εμφάνιση όλων των κριτικών');

jr_define('VIDEO_TUTORIALS', 'Εκπαιδευτικά βίντεο');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Ελάχιστη αξία κατάθεσης');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Εάν η υπολογιζόμενη κατάθεση είναι μικρότερη από αυτόν τον αριθμό, τότε ορίστε την κατάθεση σε αυτήν την τιμή. Αυτό το ποσοστό μπορεί να είναι υπερβολικό εάν δεν ικανοποιεί τη ρύθμιση ελάχιστης κατάθεσης του ιστότοπου. Αφήστε το σε 0 για να μην χρησιμοποιήσετε τη ρύθμιση.");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Για να αυξήσετε την ταχύτητα του ιστότοπού σας, συνιστούμε την εισαγωγή λεπτομερειών των υφιστάμενων ιστοτόπων και εικόνων ιδιοτήτων στη βάση δεδομένων.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Εισαγωγή στοιχείων υπάρχουσας εικόνας στη βάση δεδομένων');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Πειραματικό χαρακτηριστικό. Εάν είναι ενεργοποιημένη, οι εικόνες που μεταφορτώνονται χρησιμοποιώντας τη λειτουργία του κέντρου πολυμέσων θα αντιγραφούν επίσης στον κάδο Amazon S3 και θα προβάλλονται από το url κάδου του Amazon S3. Όταν το ενεργοποιείτε αυτό για πρώτη φορά, θα σας υποσχεθεί επίσης να εισαγάγετε υπάρχουσες εικόνες στον κάδο S3.');

jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'τομέας CloudFront');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Αντικαταστήστε τον προεπιλεγμένο τομέα Amazon S3 με τον τομέα CloudFront');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Συνιστάται να είναι ενεργοποιημένο. Μόνο για Windows και Mac OSX, εάν το libcurl δεν έχει κατασκευαστεί με υποστήριξη Schannel ή Secure Transport (οι εγγενείς βιβλιοθήκες SSL που περιλαμβάνονται στα Windows και Mac OS X), πρέπει να το ορίσετε σε Οχι.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Έχετε ενεργοποιήσει την ενσωμάτωση του Amazon S3, οπότε θα πρέπει να αντιγράψετε όλες τις υπάρχουσες εικόνες στον κάδο S3. Οι εικόνες τώρα προβάλλονται στους επισκέπτες του ιστότοπού σας από το url του Amazon S3, οπότε θα χρειαστείτε για να τα αντιγράψετε πρώτα στον κάδο S3, διαφορετικά δεν θα είναι ορατά στους επισκέπτες του ιστότοπού σας. ');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Μόλις κάνετε κλικ σε αυτό το κουμπί, μην διακόψετε τη διαδικασία και περιμένετε ένα μήνυμα επιτυχίας ή σφάλματος. Ανάλογα με την ταχύτητα του διακομιστή, αυτό μπορεί να πάρει λίγο χρόνο για να ολοκληρωθεί.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Αντιγραφή υπαρχουσών εικόνων στον κάδο του Amazon S3');


jr_define("JOMRES_INCOMPLETE", "Incomplete");
jr_define('JOMRES_WATING_APPROVAL', 'Εκκρεμεί έγκριση');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Χάρτης λεπτομερειών ιδιοτήτων');

jr_define('HAS_STARS_TITLE', 'Επιτρέπει την ταξινόμηση αστεριών;');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Επιβολή επανεισαγωγής στοιχείων εικόνας στη βάση δεδομένων');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Αναγκαστική επαναφόρτωση εικόνων στον κάδο S3');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Διαγραφή όλων των δεδομένων Jomres κατά την απεγκατάσταση;');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Εάν οριστεί σε ναι, ο Jomres θα διαγράψει όλους τους πίνακες βάσης δεδομένων κατά την απεγκατάσταση. Αυτό θα διαγράψει όλα τα δεδομένα Jomres από το db και δεν θα μπορεί να αναιρεθεί.');

jr_define('TRANSACTION_IDS', 'Transaction id');
jr_define("PAYMENT_METHOD", "Τρόπος πληρωμής");
jr_define("POA_DISPLAY_PRICE", "POA Price");
jr_define('POA_DISPLAY_PRICE_DESC', 'Όταν οι ιδιότητες εμφανίζονται σε μια λίστα, το σύστημα θα προσπαθήσει να βρει μια έγκυρη τιμή από τις διαμορφωμένες τιμές βάσει είτε της σημερινής ημερομηνίας είτε εάν χρησιμοποιήθηκαν ημερομηνίες σε μια αναζήτηση, στη συνέχεια με βάση αυτές τις ημερομηνίες. Εάν δεν μπορεί, τότε θα εμφανίσει POA (Τιμή κατά εφαρμογή), που σημαίνει ότι ο επισκέπτης θα πρέπει να επικοινωνήσει μαζί σας για να λάβετε μια τιμή. Εάν θέλετε, μπορείτε να διαμορφώσετε μια τιμή εδώ που θα εμφανίζεται αντί του κειμένου POA. Αυτός ο αριθμός θα ήταν μια "εφεδρική" τιμή για να εμφανιστεί εάν δεν μπορεί να προσδιοριστεί άλλη τιμή.');
jr_define('PLUGINMANAGER_INSTALL', 'Πρέπει να εγκαταστήσετε τη διαχείριση προσθηκών προτού μπορέσετε να εγκαταστήσετε τις προσθήκες Jomres, θα θέλατε να το κάνετε τώρα;');
jr_define('PLUGINMANAGER_REINSTALL', 'Πρέπει να ενημερώσετε τον διαχειριστή προσθηκών προτού μπορέσετε να ενημερώσετε τυχόν εγκατεστημένες προσθήκες, θα θέλατε να το κάνετε τώρα;');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Ας το κάνουμε αυτό!");

jr_define('INCLUDEINFILTERS', 'Included in filter?');
jr_define('INCLUDEINFILTERS_DESC', 'Τα φίλτρα χαρακτηριστικών ιδιοτήτων στην Ajax Composite Search μπορούν να γίνουν πολύ μεγάλα, οπότε μπορείτε να ορίσετε αυτήν την επιλογή σε Όχι για να αποτρέψετε την εμφάνιση αυτής της δυνατότητας στη λίστα χαρακτηριστικών ιδιοτήτων.');

jr_define('REVIEW_REMINDER_PT1', "Έχετε");
jr_define('REVIEW_REMINDER_PT2', "κράτηση (ες) για τις οποίες δεν έχετε αφήσει ακόμα κριτική. Αφήστε μια κριτική.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Κρατήσεις που περιμένουν κριτικές");
jr_define('REVIEW_NAG', "Ναγκ επισκέπτες για κριτικές;");
jr_define('REVIEW_NAG_DESC', "Μόλις γίνει κράτηση ενός επισκέπτη από μια κράτηση, το σύστημα θα του υπενθυμίσει να δημοσιεύσει μια κριτική για την κράτησή του. Ορίστε αυτήν την επιλογή σε Όχι για να απενεργοποιήσετε αυτήν την υπενθύμιση.");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Αποστολή αντιγράφων των μηνυμάτων ηλεκτρονικού ταχυδρομείου κράτησης στους διαχειριστές του ιστότοπου;");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Όταν είναι ενεργοποιημένο, αντίγραφα των μηνυμάτων ηλεκτρονικού ταχυδρομείου κράτησης που αποστέλλονται στους διαχειριστές ιδιοκτησίας θα αποστέλλονται επίσης σε όλους τους διαχειριστές ιστότοπου.");

jr_define('HIDDEN_ADDRESS_SETTING', "Απόκρυψη διεύθυνσης;");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Εάν ορίσετε αυτήν την επιλογή σε Ναι, τότε μόνο οι επισκέπτες που έχουν κάνει ήδη κράτηση στο ακίνητό σας θα μπορούν να δουν τη διεύθυνση του ακινήτου. mightσως θέλετε να χρησιμοποιήσετε αυτήν τη ρύθμιση για να αποκρύψετε την ακριβή τοποθεσία της ιδιοκτησίας εάν, για παράδειγμα, παραμένει τακτικά χωρίς επίβλεψη. ");
jr_define("HIDDEN_ADDRESS_PLACEHOLDER", "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Βελτιστοποίηση εικόνων κατά τη μεταφόρτωση;');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Όταν είναι ενεργοποιημένες, οι εικόνες θα βελτιστοποιηθούν για τον ιστό (το μέγεθος του αρχείου μπορεί να είναι έως και 75% μικρότερο). Ανάλογα με τον τύπο εικόνας που έχει μεταφορτωθεί, ο διακομιστής σας πρέπει να έχει εγκαταστήσει μία ή περισσότερες από αυτές τις βιβλιοθήκες από τον πάροχο φιλοξενίας: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define("DATABASE_INTEGRITY_CHECK", "Έλεγχος ακεραιότητας βάσης δεδομένων");
jr_define('OBSOLETE_FILES_CHECK', 'Έλεγχος παρωχημένων αρχείων');
jr_define('DATATABLES_COLVIS', 'Column Visibility');

jr_define('API_TOKEN_LIFETIME', 'API token life');
jr_define('API_TOKEN_LIFETIME_DESC', 'Πόσο καιρό ένα διακριτικό API παραμένει σε ισχύ, σε δευτερόλεπτα. 86400 = 1 ημέρα, 31536000 = 1 έτος');


jr_define('ENCRYPTION_TITLE', 'Encryption');
jr_define('ENCRYPTION_FILE_LOCATION', 'Θέση αρχείου κρυπτογράφησης');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** Μην διαγράφετε ποτέ το αρχείο κρυπτογράφησης ** <br/> Τα δεδομένα χρήστη αποθηκεύονται κρυπτογραφημένα σε πίνακες για να διασφαλιστεί ότι τα "δεδομένα σε ηρεμία" προστατεύονται με ασφάλεια, σύμφωνα με τις συστάσεις του GDPR. Από προεπιλογή, το κλειδί κρυπτογράφησης αποθηκεύεται στο αρχείο "encryption_key.class.php" στη ρίζα της εγκατάστασης Jomres (συνήθως /public_html /jomres). Μπορείτε να αλλάξετε πού είναι αποθηκευμένο το αρχείο εδώ. Εάν αλλάξετε την τοποθεσία, πρέπει να μετακινήσετε το αρχείο, μην περιμένετε να δημιουργήσει η Jomres μια νέα έκδοση, διαφορετικά δεν θα μπορείτε να αποκωδικοποιήσετε τα στοιχεία των καλεσμένων σας.');
jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Οι πληροφορίες που αποθηκεύετε εδώ θα χρησιμοποιηθούν σε τιμολόγια που δημιουργούνται για αυτήν την ιδιότητα');

jr_define('_JOMRES_GDPR_POLICIES', 'GDPR Policies');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Εδώ μπορείτε να διαμορφώσετε πόσο καιρό αφότου δημιουργήθηκε μια κράτηση ή τιμολόγιο αφαιρείται από το σύστημα για να βεβαιωθείτε ότι συμμορφώνεστε με τον GDPR.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Περίοδος κράτησης κρατήσεων (σε ημέρες)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Πόσες ημέρες μετά την ημερομηνία αναχώρησης της κράτησης πρέπει να διαγραφεί η κράτηση; Όταν διαγραφεί, αφαιρούνται τόσο η κράτηση όσο και το τιμολόγιο. Μια τυπική περίοδος διατήρησης μπορεί να είναι 365 ημέρες.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Περίοδος διατήρησης τιμολογίου (χωρίς κράτηση)');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Άλλα τιμολόγια, όπως τιμολόγια προμήθειας και συνδρομής, δεν συνδέονται με κρατήσεις. Ως αποτέλεσμα, δεν θα διαγραφούν όταν διαγράφονται τιμολόγια και συμβάσεις. Ανάλογα με τη χώρα σας και τις δικές σας επιχειρηματικές πρακτικές, θα χρειαστεί να διαμορφώσετε διαφορετική περίοδο διατήρησης. Μια τυπική περίοδος διατήρησης μπορεί να είναι 3653 ημέρες, δηλαδή 10 χρόνια. ');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Τα δεδομένα σας');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Ορισμένες δυνατότητες αυτού του ιστότοπου πρέπει να αποθηκεύουν πληροφορίες σχετικά με την επίσκεψή σας. Αυτό χρησιμοποιείται μόνο για να σας παρέχει υπηρεσίες, δεν κοινοποιείται ποτέ σε κανέναν άλλο και διαγράφεται όταν δεν χρειάζεται πλέον.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ΜΑΣ ΔΙΝΕΙΣ ΑΔΕΙΑ ΓΙΑ ΤΗΝ ΑΠΟΘΗΚΕΥΣΗ ΑΥΤΩΝ ΤΩΝ ΠΛΗΡΟΦΟΡΙΩΝ ?');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Αναλυτικά');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Πρέπει να συναινέσετε να αποθηκεύσουμε αυτά τα δεδομένα για να μπορείτε να κάνετε κρατήσεις σε αυτόν τον ιστότοπο. Ανεξάρτητα από το αν συμφωνείτε ή όχι με την αποθήκευση των δεδομένων σας, θα αποθηκεύσουμε ένα cookie στον υπολογιστή σας μας έχετε επιλέξει ή όχι. Αυτό μας βοηθά να διασφαλίσουμε ότι δεν σας ρωτάμε συνεχώς εάν θέλετε ή όχι να συμμετάσχετε ή όχι και δεν περιέχει πληροφορίες προσωπικής ταυτοποίησης (PII). Εάν αλλάξετε γνώμη, μπορεί να επισκεφθεί τη σελίδα "Δικαιώματα εφαρμογής" ανά πάσα στιγμή για να συμμετάσχει ή να εξαιρεθεί. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Οι πληροφορίες αποθηκεύονται για διαφορετικές χρονικές περιόδους ανάλογα με τη φύση της επίσκεψής σας. Επομένως, αν κοιτάζετε γύρω θα αποθηκεύσουμε κατά προσέγγιση πληροφορίες γεωγραφικής θέσης (επίπεδο χώρας). Εάν πραγματοποιήσετε αναζητήσεις, στη συνέχεια Κάντε τις φόρμες αναζήτησης πιο φιλικές προς το χρήστη, θα αποθηκεύσουμε τα τελευταία πράγματα στα οποία αναζητήσατε. Αυτές οι πληροφορίες συνήθως αποθηκεύονται για μέγιστο 24 ώρες και χρησιμοποιούνται μόνο για να κάνουν την επίσκεψή σας πιο ευχάριστη. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Όταν κάνετε κράτηση μαζί μας, αναγκαστικά αποθηκεύονται περισσότερες πληροφορίες.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Οι τεχνικές λεπτομέρειες της φόρμας κράτησης καταγράφονται και διατηρούνται για μέγιστο 60 ημέρες. Αυτό απαιτείται ώστε οι κρατήσεις κατόπιν αιτήματος να μετατραπούν σε πλήρεις κρατήσεις μόλις εγκριθεί η κράτηση και για ανάλυση από τις ομάδες μας σε περίπτωση που υπάρχει πρόβλημα με μια κράτηση. Εάν δεν ήσασταν συνδεδεμένοι όταν κάνατε κράτηση, τότε θα σας στείλουμε email με όνομα χρήστη και κωδικό πρόσβασης, ώστε να μπορείτε να δείτε το ιστορικό κρατήσεών σας και να ασκήσετε το Δικαίωμά σας να ξεχαστείτε (RTBF) εάν επιθυμώ να το κάνω αυτό. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Τα δεδομένα που καταχωρούνται στη φόρμα κράτησης, για παράδειγμα όνομα, διεύθυνση ηλεκτρονικού ταχυδρομείου, η πραγματική διεύθυνση αποθηκεύονται το πολύ 365 ημέρες μετά την ημερομηνία αναχώρησης της κράτησης. Αυτές οι πληροφορίες αποθηκεύονται σε κρυπτογραφημένη μορφή στη βάση δεδομένων μας έτσι ώστε να μπορούν να το δουν μόνο εξουσιοδοτημένα άτομα. Εάν κάνετε κράτηση τότε από το νόμο πρέπει να αποθηκεύσουμε το PII σας ενώ η κράτηση είναι έγκυρη. Μόλις ολοκληρωθεί η κράτηση, είτε επειδή έχει ακυρωθεί είτε έχετε κάνει check out, τότε θα να είστε σε θέση να ασκήσετε το RTBF σας συνδέοντας και επισκεφτείτε τη σελίδα "Τα δεδομένα σας". Οι πληροφορίες τιμολογίου για τις ολοκληρωμένες κρατήσεις θα εξακολουθούν να αποθηκεύονται με ασφάλεια στη βάση δεδομένων μας για να διασφαλιστεί ότι τηρούμε τους σχετικούς φορολογικούς νόμους, αλλά θα μπορείτε να καταργήσετε όλα τα άλλα PII μετά την ολοκλήρωση της κράτησης. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Όταν συναινείτε να αποθηκεύονται οι πληροφορίες σας όπως περιγράφονται παραπάνω, είμαστε νομικά υποχρεωμένοι να αποθηκεύσουμε αυτήν τη συγκατάθεση στη βάση δεδομένων μας. Αυτές οι πληροφορίες θα περιλαμβάνουν τον αριθμό IP σας και το περιεχόμενο της φόρμας συμμετοχής. διατηρήσετε αυτήν την ειδοποίηση συναίνεσης επ αόριστον (πρόκειται για νομική απαίτηση). ');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Δεν μας έχετε πει ακόμη αν μπορούμε να συλλέξουμε Προσωπικά Στοιχεία Ταυτοποίησης για εσάς');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Συμφωνήσατε να συλλέξουμε τις απαραίτητες πληροφορίες προσωπικής ταυτοποίησης για να κάνετε κρατήσεις');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Μας είπατε να μην συλλέγουμε πληροφορίες προσωπικής ταυτοποίησης');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Δεν μας δώσατε άδεια να συλλέξουμε τα προσωπικά σας δεδομένα');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Για να εκτελέσετε ορισμένες ενέργειες σε αυτόν τον ιστότοπο, πρέπει να συλλέξουμε Προσωπικά αναγνωρίσιμα στοιχεία για εσάς, αλλά δεν μας έχετε δώσει άδεια να το κάνουμε.');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Αλλάξτε τα δικαιώματά σας');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Συνέχεια προβολής ιδιοτήτων');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Δικαιώματα εφαρμογής');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Δεδομένα επισκέπτη');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Αυτές είναι οι λεπτομέρειες που αποθηκεύονται για εσάς από τα διάφορα ακίνητα. Διαφορετικά ξενοδοχεία ενδέχεται να διατηρούν διαφορετικά αρχεία, ανάλογα με το τι καταχωρίσατε κατά την πραγματοποίηση της κράτησης.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Δεν έχετε αποθηκευμένα δεδομένα σε κανένα ξενοδοχείο σε αυτό το σύστημα') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Δεδομένα προφίλ');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Αυτό είναι το κύριο σύνολο δεδομένων που διατηρούμε για εσάς, διαφορετικό από αυτά που έχετε μοιραστεί με διαφορετικές ιδιότητες.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Δεν έχετε αποθηκεύσει πληροφορίες προφίλ');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Ακολουθούν οι Προσωπικά αναγνωρίσιμες πληροφορίες που αποθηκεύουμε σε αυτόν τον ιστότοπο για εσάς. Είναι κατασκευασμένο σε μορφή JSON (JavaScript Object Notation) που είναι μια ελαφριά μορφή ανταλλαγής δεδομένων. Είναι εύκολο να διαβάσουν και να γράφουν και είναι εύκολο για τις μηχανές να αναλύσουν και να δημιουργήσουν. ');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonymised');

jr_define('_JOMRES_GDPR_MY_DATA', 'Τα δεδομένα σας');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Αποδεχόμενοι αυτούς τους Όρους Χρήσης της Συμφωνίας (αυτή η "Συμφωνία"), συμφωνείτε ότι:

<ul>
<li>
Έχετε εξουσιοδότηση για κράτηση ξενοδοχείων μέσω αυτής της ιστοσελίδας.
</li>
<li>
Είστε τουλάχιστον 18 ετών.
</li>
<li>
Έχετε τη νομική εξουσία για τη δημιουργία δεσμευτικής νομικής υποχρέωσης.
</li>
<li>
Θα χρησιμοποιήσετε τον Ιστότοπο σύμφωνα με την παρούσα Συμφωνία.
</li>
<li>
Θα χρησιμοποιήσετε τον Ιστότοπο μόνο για να κάνετε νόμιμες επιφυλάξεις για τον εαυτό σας ή για ένα άλλο πρόσωπο για το οποίο είστε νόμιμα εξουσιοδοτημένος να ενεργεί.
</li>
<li>
Θα ενημερώσετε αυτά τα άλλα άτομα σχετικά με την παρούσα Συμφωνία που ισχύει για τις επιφυλάξεις που έκανα για λογαριασμό τους, συμπεριλαμβανομένων όλων των κανόνων και των περιορισμών που ισχύουν γι αυτήν.
</li>
<li>
Όλες οι πληροφορίες που παρέχετε από εσάς στον Ιστότοπο είναι αληθείς, ακριβείς, τρέχουσες και πλήρεις. και
</li>
<li>
Θα προστατεύσετε τα στοιχεία του λογαριασμού σας και θα επιβλέπετε και θα είστε πλήρως υπεύθυνοι για οποιαδήποτε χρήση του λογαριασμού σας από εσάς και οποιονδήποτε άλλο εκτός από εσάς.
</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Η ασφάλεια και η διαφάνεια είναι σημαντικά για εμάς.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Αναλαμβάνουμε τις ευθύνες μας σχετικά με την αποθήκευση των δεδομένων σας πολύ σοβαρά. Όλες οι προσωπικά αναγνωρίσιμες πληροφορίες (PII) αποθηκεύονται κρυπτογραφημένες στη βάση δεδομένων μας χρησιμοποιώντας τυπικούς αλγόριθμους του κλάδου για να διασφαλιστεί ότι μόνο εξουσιοδοτημένοι χρήστες μπορούν να δουν αυτές τις πληροφορίες.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Μπορείτε να κατεβάσετε όλο το PII που αποθηκεύουμε για εσάς.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Λήψη τώρα');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Δικαίωμα στη λήθη (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Πιστεύουμε ότι θα πρέπει να μπορείτε να <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> διαγράψετε </a> το < a href = "https://gdpr-info.eu/art-4-gdpr/" target="_blank" > Προσωπικά αναγνωρίσιμες πληροφορίες </a> αν θέλετε και εάν είναι εφικτό. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Δεν είστε εγγεγραμμένος σε αυτόν τον ιστότοπο. Η γενική τοποθεσία (χώρα) και ο αριθμός IP σας θα αποθηκευτούν για μέγιστο 24 ώρες και στη συνέχεια θα διαγραφούν.');
	jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Δεν έχετε εγγραφεί σε αυτόν τον ιστότοπο και έχετε εξαιρεθεί από τη συλλογή δεδομένων. Δεν έχουμε αποθηκεύσει το PII σας.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Είστε εγγεγραμμένοι στον ιστότοπο και δεν έχετε εκκρεμείς ή ενεργές κρατήσεις. Μπορούμε να ανωνυμοποιήσουμε τις περισσότερες πληροφορίες που διατηρούμε αυτήν τη στιγμή για εσάς. Θα θέλατε να το κάνετε αυτό;');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Σημείωση: Αυτό δεν διαγράφει τον λογαριασμό σας, απλώς ανωνυμοποιεί τα αρχεία μας, έτσι ώστε ο λογαριασμός σας να μην μπορεί να συσχετιστεί με εσάς ως άτομο. Σύμφωνα με το νόμο, πρέπει να συνεχίσουμε να αποθηκεύουμε το PII σας για σκοπούς τιμολόγησης, ωστόσο θα διαγράψουμε όλα τα αρχεία επισκεπτών.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Είστε εγγεγραμμένοι στον ιστότοπο, ωστόσο έχετε εξαιρετικές κρατήσεις και δεν μπορούμε να ανωνυμοποιήσουμε τα δεδομένα σας αυτήν τη στιγμή. Αυτά τα δεδομένα θα διατηρηθούν για ένα έτος το πολύ μετά την ολοκλήρωση της κράτησης, τότε θα να διαγραφεί, εάν δεν επιλέξετε να το αφαιρέσετε πριν από αυτό το χρονικό διάστημα. ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Επειδή είστε διαχειριστής ιδιοκτησίας στον ιστότοπό μας, δεν μπορούμε να σας προσφέρουμε τη δυνατότητα αυτόματης διαγραφής των δεδομένων σας. Αντ αυτού, παρακαλούμε επικοινωνήστε μαζί μας άμεσα ώστε να μπορούμε να εκχωρήσουμε τις ιδιοκτησίες σας σε έναν άλλο διαχειριστή Μόλις το κάνουμε αυτό και αφαιρέσουμε την κατάστασή σας ως διαχειριστή ιδιοκτησίας, θα μπορείτε να διαγράψετε αυτόματα τα δεδομένα σας. ');

jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Ξεχάστε με!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Αυτό δεν μπορεί να αναιρεθεί!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Τα δεδομένα σας έχουν διαγραφεί!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Δυστυχώς, δεν μπορείτε να κάνετε κράτηση καθώς η διεύθυνση email σας δεν είναι έγκυρη');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Αυτή η σελίδα σάς δίνει τη δυνατότητα να ανωνυμοποιήσετε όλους τους επισκέπτες που έχουν αποθηκευμένες τις πληροφορίες τους στο σύστημα. Αυτό σας επιτρέπει να συμμορφώνεστε με τον GDPR, ωστόσο δεν μπορείτε να επεξεργαστείτε άλλες πληροφορίες σε αυτήν τη σελίδα. Για να το κάνετε αυτό πρέπει να συνδεθείτε στο προσκήνιο ως διαχειριστής ιδιοκτησίας. Η υπόθεση είναι ότι ένας ιστορικός επισκέπτης έχει επικοινωνήσει μαζί σας ζητώντας να του επιτρέψετε να ασκήσει το δικαίωμά του να ξεχαστεί. Εάν δεν είναι σε θέση να συνδεθεί στο προσκήνιο του ιστότοπου (ίσως ο χρήστης δεν δημιουργήθηκε για αυτούς όταν έκανε κράτηση), τότε μπορείτε να χρησιμοποιήσετε αυτήν την περιοχή για να τον ανωνυμοποιήσετε μόλις επιβεβαιώσετε την ταυτότητά του. ');
jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Ανώνυμος επισκέπτης');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'ΔΙΑΓΡΑΦΗ ΙΔΙΟΤΗΤΑΣ');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Ανώνυμα δεδομένα επισκεπτών');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Δεν είναι δυνατή η ανωνυμοποίηση');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Χρειαζόμαστε την άδειά σας για να αποθηκεύσουμε τα στοιχεία σας πριν μπορέσετε να κάνετε κράτηση. ΠΑΤΗΣΤΕ ΕΔΩ για να μας δώσετε την άδεια.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Ενεργοποίηση συμβατότητας με τον GDPR;');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'ΔΕΝ ΣΥΝΙΣΤΟΥΜΕ ΟΤΙ ΑΠΕΝΕΡΓΟΠΟΙΕΙΤΕ ΤΗ ΣΥΜΠΛΗΡΩΜΑΤΙΚΗ ΛΕΙΤΟΥΡΓΙΑ ΤΟΥ GDPR. Το Jomres διαθέτει ενσωματωμένες δυνατότητες που σας βοηθούν να διασφαλίσετε ότι η ενότητα Jomres του ιστότοπού σας συμμορφώνεται με αυτήν τη λειτουργία GDPR ( δεν πρέπει αν βρίσκεστε στην ΕΕ ή κάνετε συναλλαγές με πολίτες της ΕΕ) τότε ο Jomres θα υποθέσει αυτόματα ότι κάθε επισκέπτης του ιστότοπου έχει δώσει την άδειά του να έχει ενεργοποιημένα τα προσωπικά του δεδομένα. Άδεια εφαρμογής και σελίδες My Data δεν θα είναι εμφανίζεται και δεν θα ζητηθεί από τους χρήστες να δώσουν την άδειά τους για τη συλλογή των δεδομένων. ');


jr_define('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define('EMPTY_TEMP_DIR_DONE', 'Προσωρινά αρχεία διαγράφηκαν');

jr_define('MACHINE_TRANSLATION', 'Μηχανικές μεταφράσεις');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Γλώσσα πηγής');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Είναι δυνατό να συνδεθείτε με τη λειτουργία αυτόματης μετάφρασης. Αυτό σας επιτρέπει να εισαγάγετε συμβολοσειρές σε μία γλώσσα και οι μεταφράσεις μπορούν να τραβηχτούν από απομακρυσμένες υπηρεσίες. Λάβετε υπόψη ότι δεν υποστηρίζουν όλες οι μεταφραστικές υπηρεσίες όλες τις γλώσσες. Δείτε αυτές τις υπηρεσίες για περισσότερη λεπτομέρεια.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Τύποι δωματίων');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Νέος τύπος δωματίου');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Μπορείτε να δημιουργήσετε και να επεξεργαστείτε τύπους δωματίων σε αυτήν τη σελίδα. Αυτοί οι τύποι δωματίων θα αφορούν μόνο αυτήν την ιδιότητα. Κατά τη ρύθμιση της ιδιοκτησίας σας χρειάζεστε πρώτα κάποιους τύπους δωματίων. Μπορείτε να χρησιμοποιήσετε είτε αυτά τα είδη δωματίων που δημιουργήθηκαν από ο διαχειριστής, ή μπορείτε να προσθέσετε το δικό σας. Μόλις έχετε έναν ή περισσότερους τύπους δωματίων, μπορείτε στη συνέχεια να δημιουργήσετε δωμάτια αυτού του τύπου δωματίου. Αφού έχετε δωμάτια, μπορείτε στη συνέχεια να δημιουργήσετε τιμολόγια (τιμές) για αυτά τα δωμάτια, επειδή τα τιμολόγια συνδέονται με τους τύπους δωματίων . ');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Οι διαχειριστές μπορούν να δημιουργήσουν τύπους δωματίων;');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Χρησιμοποιήστε αυτήν την επιλογή για να διαμορφώσετε εάν οι διαχειριστές μπορούν ή όχι να δημιουργήσουν τους δικούς τους τύπους δωματίων στην πρόσοψη. Σας συνιστούμε ανεπιφύλακτα να αφήσετε αυτήν την επιλογή σε Όχι όταν ξεκινάτε για πρώτη φορά τη χρήση του Jomres, ειδικά εάν δημιουργείτε ένα πύλη επειδή πρέπει να δημιουργήσετε όλους τους τύπους δωματίων στην περιοχή διαχειριστή. Οι τύποι δωματίων που δημιουργούνται από διαχειριστές θα εμφανίζονται σε φόρμες αναζήτησης, αλλά επειδή αυτοί οι τύποι δωματίων είναι συγκεκριμένοι για μεμονωμένες ιδιότητες, μόνο μία ιδιότητα θα εμφανίζεται στα αποτελέσματα αναζήτησης εάν επιλεγεί αυτός ο τύπος δωματίου κατά τη διάρκεια των αναζητήσεων. Εάν θέλετε έτσι ώστε μόνο οι Super Properties Managers να μπορούν να δημιουργούν τύπους δωματίων, αφήστε αυτήν την επιλογή σε Ναι και χρησιμοποιήστε την προσθήκη Access Control για να επιτρέψετε μόνο στους υπερ -διαχειριστές να βλέπουν την επιλογή μενού "Ρυθμίσεις> Τύποι δωματίων". Μόνο ακίνητα που ενοικιάζονται μπορείτε να χρησιμοποιήσετε αυτήν την επιλογή. Οι ιδιοκτησίες τύπου βίλας/διαμερίσματος δεν θα μπορούν να το χρησιμοποιήσουν. ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Ενημερώθηκε τύπος δωματίου/ιδιοκτησίας');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Εμφάνιση τύπων δωματίων στις επιλογές αναζήτησης');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Εάν επιλέξετε να επιτρέψετε στους διαχειριστές ιδιοκτησίας να δημιουργούν τους δικούς τους τύπους δωματίων, μπορείτε να επιλέξετε αν θα εμφανίζονται ή όχι αυτοί οι τύποι δωματίων που δημιουργήθηκαν στις επιλογές αναζήτησης όπου έχετε επιλέξει να εμφανίζονται τύποι δωματίων.');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Δεν πρέπει να χρησιμοποιείτε ξανά την ίδια διεύθυνση ηλεκτρονικού ταχυδρομείου για κάθε κράτηση. <br/> Εάν διαθέτετε έναν μοναδικό τομέα (π.χ. όχι μια διεύθυνση email gmail) για την επιχείρησή σας, χρησιμοποιήστε τον αριθμό τηλεφώνου του επισκέπτη ως διεύθυνση ηλεκτρονικού ταχυδρομείου. Η διεύθυνση ηλεκτρονικού ταχυδρομείου θα μοιάζει τότε με το 123456@mydomain.com <br/> Αυτό θα διασφαλίσει ότι δημιουργείται ένας νέος επισκέπτης όταν δημιουργείτε μια κράτηση. ");

jr_define('_JOMRES_LOGIN_USERNAME', 'Διεύθυνση ηλεκτρονικού ταχυδρομείου');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Κωδικός πρόσβασης');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Χαιρόμαστε που θα θέλατε να κάνετε ξανά κράτηση μαζί μας. Για να μπορέσετε να διαχειριστείτε όλες τις κρατήσεις σας μαζί, είναι απαραίτητο να συνδεθείτε για να προστεθεί η κράτηση στο λογαριασμό σας. Αυτό επίσης διασφαλίζει ότι έχετε εξουσιοδότηση για χρήση της παρεχόμενης διεύθυνσης ηλεκτρονικού ταχυδρομείου. ");
jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Εάν δεν γνωρίζετε τον κωδικό πρόσβασής σας, μπορούμε να σας στείλουμε ένα email επαναφοράς κωδικού πρόσβασης. Ακολουθήστε τις οδηγίες σε αυτό το email για να επαναφέρετε τον κωδικό πρόσβασής σας.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Ξεχάσατε τον κωδικό πρόσβασής σας;');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymousise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Εάν επιλέξετε να ανωνυμοποιήσετε το όνομά σας κατά τον έλεγχο, θα χρησιμοποιήσουμε τα αρχικά σας.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'είπε');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Απάντηση σε αυτήν την κριτική');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Πληκτρολογήστε την απάντησή σας σε αυτήν την κριτική εδώ.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Η απάντησή σας');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Κύρια κριτική');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Η απάντηση της κριτικής αποθηκεύτηκε');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Πριν υποβάλετε μια απάντηση κριτικής, πρέπει να διαβάσετε τα παρακάτω. Με την υποβολή απάντησης επιβεβαιώνετε ότι συμφωνείτε με αυτούς τους όρους και προϋποθέσεις.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Ποιες είναι οι οδηγίες μας για μια απάντηση κριτικής;');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Απαντάτε στον έλεγχο της ιδιοκτησίας σας. Δεν πρέπει <em> να </em> χρησιμοποιήσετε την απάντησή σας ως διαδικασία εμπορικής διαφοράς. Εάν πρέπει να αναφέρετε μια κριτική, πρέπει να χρησιμοποιήσετε την "Αναφορά Κουμπί "Αναθεώρηση" στη λίστα, και όχι αυτή η σελίδα απάντησης κριτικής. ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Μόλις αφήσετε την απάντησή σας, δεν θα μπορείτε να την επεξεργαστείτε.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Επιτρέπεται και ενθαρρύνεται');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Πλήρης απάντηση στην κριτική. </li>
    <li> Ευγένεια και ειλικρίνεια. </li>
    <li> Λογικές απαντήσεις στα ζητήματα του αναθεωρητή (θυμηθείτε, άλλοι μπορεί να αντιμετωπίζουν παρόμοια προβλήματα, αλλά δεν βρήκαν την ευκαιρία να δημοσιεύσουν μια κριτική). </li>
    <li> Ενθαρρύνετε τον επισκέπτη να έρθει σε άμεση επαφή μαζί σας για την επίλυση ζητημάτων.
    <li> Να θυμάστε πάντα ότι οι μελλοντικοί επισκέπτες θα δουν την απάντησή σας. Φροντίστε να είστε επαγγελματίες ανά πάσα στιγμή. </li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Δεν επιτρέπεται');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Εμπορικές διαφορές. </li>
    <li> Ερωτήσεις προς τον Αναθεωρητή ή άλλους. </li>
    <li> Αμφισβητήσιμη γλώσσα (συμπεριλαμβανομένης της κατάρας). </li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Τελευταίο τρέξιμο');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Προγραμματισμός');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Αριθμοί τιμολογίου');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Χρήση προσαρμοσμένων αριθμών τιμολογίου;');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Μπορείτε να διαμορφώσετε το σύστημα ώστε να χρησιμοποιεί προσαρμοσμένους αριθμούς τιμολογίων. Θα επηρεαστούν μόνο τα νέα τιμολόγια.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Αριθμός έναρξης');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Οι αριθμοί δημιουργούνται διαδοχικά. Ποιος πρέπει να είναι ο πρώτος αριθμός;');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Τι μορφή πρέπει να έχει ο αριθμός τιμολογίου;');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Διαμορφώστε τη μορφή αριθμού τιμολογίου εδώ. Μια μορφή μπορεί να μοιάζει με {N}/{D} ή {N}/{Y} όπου N είναι ο αριθμός που δημιουργείται αυτόματα, D = ημερομηνία με τη μορφή YYYYYMMDD ( 20190131) ή Y = YYYY (2019). Οποιοσδήποτε άλλος αριθμητικός χαρακτήρας άλφα που δεν περικλείεται σε σφιχτά στηρίγματα θα μείνει μόνος του, οπότε ένα μοτίβο που μοιάζει με {N}/{D} -L θα είχε ως αποτέλεσμα έναν αριθμό τιμολογίου (21) που μοιάζει με 21/2019-L ').

jr_define('_JOMRES_SURCHARGE_TITLE', 'Επιπρόσθετη χρέωση');
jr_define('_JOMRES_SURCHARGE_DESC', 'Μια επιπλέον χρέωση που θα προστεθεί στο δωμάτιο κατά την κράτηση (υπολογίζεται ανά ημέρα)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Προτεραιότητα στις ετικέτες σε όλο τον ιστότοπο');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Το προσαρμοσμένο κείμενο που αποθηκεύεται στην επεξεργασία ετικετών ή στις σελίδες συμβολοσειρών αρχείου lang μεταφράζονται θεωρούνται ετικέτες" σε όλο τον ιστότοπο ". Οι διαχειριστές ιδιοκτησίας μπορούν επίσης να προσαρμόσουν τις ετικέτες για κάθε ιδιότητα χρησιμοποιώντας τη δυνατότητα επεξεργασίας ετικετών στην πρόσοψη. Αυτό επιτρέπει σε έναν διαχειριστή ιδιοκτησίας να έχει διαφορετικά κείμενα για την ιδιοκτησία του, κάτι που είναι χρήσιμο εάν η ιδιότητα είναι διαφορετική από όλες τις άλλες ιδιότητες στον ιστότοπο. <br/> Όταν το σύστημα αναζητά κείμενα ετικέτας, θα δώσει προτεραιότητα σε κείμενα σε ολόκληρο τον ιστότοπο πάνω από κείμενα συγκεκριμένων ιδιοτήτων, που σημαίνει ότι εάν υπάρχει κείμενο σε ολόκληρο τον ιστότοπο για αυτήν την ετικέτα, το σύστημα θα επιλέξει πρώτα αυτό. Εάν ορίσετε αυτήν την επιλογή σε Όχι, το σύστημα θα δώσει προτεραιότητα σε κείμενα για συγκεκριμένες ιδιότητες έναντι κειμένων σε ολόκληρο τον ιστότοπο.');
jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Αυτό θα μπορούσε να αλλάξει εάν συμπεριληφθεί στη λίστα επιτρεπόμενων, οπότε ο ιστότοπος "Ο καλύτερος ιστότοπος κρατήσεων στον κόσμο" θα το άλλαζε σε "WBBS" ή παρόμοιο.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Οι μονάδες πωλητή και κόμβου είναι ξεχωριστά (δωρεάν) πακέτα για το Jomres. Μπορείτε να εγκαταστήσετε ξανά τα πακέτα σε αυτήν τη σελίδα.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Επανεγκατάσταση πακέτων βιβλιοθηκών');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Δεν είναι δυνατή η διαγραφή τύπου ιδιοκτησίας επειδή εξακολουθεί να χρησιμοποιείται από ορισμένες ιδιότητες. Πρέπει να αλλάξετε αυτές τις ιδιότητες σε άλλο τύπο ιδιότητας πριν επιχειρήσετε να διαγράψετε αυτήν. UID ιδιοτήτων που εμποδίζουν τη διαγραφή:');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Δεν είναι δυνατή η κατάργηση δημοσίευσης τύπου ιδιοκτησίας επειδή εξακολουθεί να χρησιμοποιείται από ορισμένες ιδιότητες. Πρέπει πρώτα να αλλάξετε αυτές τις ιδιότητες σε άλλον τύπο ιδιοτήτων πριν επιχειρήσετε να καταργήσετε τη δημοσίευση αυτού. UID ιδιοτήτων που εμποδίζουν την αλλαγή:');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Τυχαίες διευθύνσεις email');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Προσφορά τυχαίων μηνυμάτων ηλεκτρονικού ταχυδρομείου');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Μπορείτε να επιτρέψετε στο σύστημα να παράγει τυχαίες διευθύνσεις ηλεκτρονικού ταχυδρομείου στο αναδυόμενο παράθυρο Γρήγορη κράτηση. Αυτό επιτρέπει στους διαχειριστές και τους ρεσεψιονίστ να δημιουργούν κρατήσεις για επισκέπτες για τους οποίους δεν έχουν διευθύνσεις ηλεκτρονικού ταχυδρομείου, προορίζεται να λειτουργήσει ως εξοικονόμηση χρόνου για ιστότοπους με πολλούς ρεσεψιονίστ/διαχειριστές που καταλαβαίνουν ότι αυτά τα τυχαία μηνύματα ηλεκτρονικού ταχυδρομείου δεν θα χρησιμοποιηθούν ποτέ για πραγματική επικοινωνία, ο σκοπός είναι να αποφύγετε το γεγονός ότι στο Jomres όλοι οι επισκέπτες πρέπει να έχουν διευθύνσεις email. ΠΡΕΠΕΙ επίσης να παρέχετε έναν τομέα το επόμενο πεδίο. ');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Αυτό δεν πρέπει να είναι ένας κανονικός τομέας ηλεκτρονικού ταχυδρομείου, όπως το gmail ή το outlook. Αντ αυτού, μπορεί να είναι είτε ο δικός σας τομέας είτε κάτι άλλο εντελώς, όπως το "mysite.emails" ');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Μεταφόρτωση περιοχής');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Χωρίς ρόλο χρήστη');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Αναστολή');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Διαγράφηκε από το CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Αν σας αρέσει ο Jomres, σκεφτείτε να αφήσετε μια κριτική σε έναν από αυτούς τους ιστότοπους');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Είμαι ωραίος άνθρωπος, έχω αφήσει ήδη κριτική');

jr_define('_LICENCE_PROMPT_DEAR', 'Αγαπητέ');
jr_define('_LICENCE_EXPIRED', ', το κλειδί άδειας Jomres σας έχει λήξει, έτσι σας λείπουν αυτές οι εξαιρετικές δυνατότητες και οφέλη!');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Ενημερώσεις προσθηκών και νέες εκδόσεις προσθηκών');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Υποστήριξη ηλεκτρονικού ταχυδρομείου/εισιτηρίων μόνο για αποκλειστικά μέλη');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Ανησυχητικές ενημερώσεις Jomres Core');
jr_define('_LICENCE_EXPIRED_POST', 'Συνδεθείτε μαζί μας για λύσεις πληρωμών χωρίς προβλήματα και αποκτήστε πρόσβαση σε όλες τις προσθήκες και τις υπηρεσίες υποστήριξης μόνο για μέλη.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Αποκτήστε πρόσβαση σε όλες τις προσθήκες τώρα!');

jr_define('_LICENCE_INVALID_KEY', 'Δυστυχώς δεν φαίνεται να χρησιμοποιείτε έγκυρο κλειδί άδειας Jomres, επομένως δεν σας λείπουν αυτά τα εξαιρετικά χαρακτηριστικά και οφέλη!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Προσθήκες </a> που επεκτείνουν σημαντικά τη λειτουργικότητα του Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Υποστήριξη ηλεκτρονικού ταχυδρομείου/εισιτηρίων μόνο για αποκλειστικά μέλη');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Ενημερώσεις Jomres Core χωρίς ανησυχία');
jr_define('_LICENCE_INVALID_POST', 'Συνδεθείτε μαζί μας για λύσεις πληρωμών χωρίς προβλήματα και αποκτήστε πρόσβαση σε όλες τις προσθήκες και τις υπηρεσίες υποστήριξης μόνο για μέλη.');
jr_define('_LICENCE_INVALID_START', 'Αποκτήστε πρόσβαση σε όλες τις προσθήκες τώρα!');
jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Πίνακας ελέγχου');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Χρήστες');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Επιτροπή');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Συνδρομές');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Τιμολόγια');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Πύλη');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Μεταφράσεις');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Εργαλεία');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Αναφορές');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Ρυθμίσεις');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Βοήθεια');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Σύνολο ιδιοτήτων στο σύστημα');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Δημοσιευμένες ιδιότητες');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Μη δημοσιευμένες ιδιότητες');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Εγκεκριμένες ιδιότητες');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Ιδιότητες που απαιτούν έγκριση');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Σύνολο κριτικών');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Μη δημοσιευμένες κριτικές');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Έλεγχος αναφορών');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Ο τύπος ιδιότητας αυτής της ιδιότητας δεν είναι δημοσιευμένος, ενδέχεται να μην εμφανίζεται στα αποτελέσματα αναζήτησης. Επικοινωνήστε με τον διαχειριστή του ιστότοπου για να δημοσιεύσετε τον τύπο της ιδιότητας ή για να αλλάξετε τον τύπο της ιδιότητας στη σελίδα Επεξεργασία ιδιοκτησίας ");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Ενημέρωση τύπου ιδιοκτησίας');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Έσοδα (καταβληθέντα ποσά)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Δεν είναι δυνατή η διαγραφή της ιδιότητας ιδιότητας');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"επειδή χρησιμοποιείται από τις ακόλουθες ιδιότητες:');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Αυτή η σελίδα πραγματοποιεί μια βασική δοκιμή του REST API χρησιμοποιώντας ενσωματωμένη λειτουργικότητα στο Jomres. Καλεί το Jomres REST API για να δει αν λαμβάνει έγκυρη απάντηση.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Ο διακομιστής κάλεσε αυτήν τη διεύθυνση URL για να δει εάν η απάντηση είναι έγκυρη:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Η σελίδα έλαβε αυτήν την απάντηση:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Η δοκιμή φάνηκε να είναι όπως αναμενόταν, πιθανότατα δεν θα έχετε κανένα πρόβλημα να λαμβάνετε αιτήματα REST API από το υπόλοιπο Διαδίκτυο.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Η δοκιμή απέτυχε, κοιτάξτε στο πεδίο Απόκριση, εάν μοιάζει με πολλά html ή λάβατε ένα μήνυμα 404, τότε ο διακομιστής σας ανακατευθύνει κλήσεις σε άλλη διεύθυνση url. Αυτό θα σας εμποδίσει να λάβετε API κλήσεις. ');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Δοκιμή σύνταξης');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Ο διακομιστής Jomres App διατηρεί μια λίστα με όλους τους ιστότοπους Jomres. Αυτό μας επιτρέπει να δημιουργήσουμε ένα δίκτυο κοινοπραξίας. Αυτό το δίκτυο έχει σχεδιαστεί για να επιτρέπει στους χρήστες μας να εμφανίζουν ιδιότητες σε άλλους ιστότοπους ιδίως για νέους ιστότοπους, για να δημιουργήσουν μια παρουσία SEO στο διαδίκτυο. Ο στόχος είναι να συνεργαστούν όλοι οι ιστότοποι Jomres, δημιουργώντας εμπιστοσύνη στο δίκτυο. Δεν υπάρχει χρέωση για αυτήν την υπηρεσία. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Ο ιστότοπός σας δεν βρίσκεται προς το παρόν στον διακομιστή Jomres App, ο οποίος αποτελεί μέρος του δικτύου κοινοπραξίας. Αυτός ο διακομιστής θα προσπαθήσει ξανά να προσθέσει αυτόν τον διακομιστή στο δίκτυο στην επόμενη 6, λίγα φορτία σελίδων, αυτό δεν αλλάζει, βεβαιωθείτε ότι η παραπάνω δοκιμή συνδεσιμότητας περάσει τις δοκιμές. Σημείωση, οι διακομιστές localhost δεν μπορούν να προστεθούν στο δίκτυο. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Συγχαρητήρια, ο διακομιστής σας παρατίθεται στον διακομιστή της εφαρμογής Jomres.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Συνδικαλιστικές ιδιότητες');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Ακολουθούν ορισμένες άλλες ιδιότητες διαθέσιμες από το δίκτυο ιδιοκτησίας μας');

jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Statistic stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Συγχαρητήρια, ο διακομιστής σας είναι καταχωρισμένος στο Δίκτυο Συνδικαλιστικής Jomres. Οι ιδιοκτησίες σας θα αρχίσουν να εμφανίζονται σε άλλους ιστότοπους Jomres σύντομα, εάν δεν εμφανίζονται ήδη.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Η εγκατάστασή σας δεν ανήκει στο Δίκτυο Συνδικαλιστικής Jomres, επομένως οι ιδιοκτησίες σας δεν εμφανίζονται σε άλλους ιστότοπους που βασίζονται σε Jomres και δεν μπορείτε να επωφεληθείτε από αυτήν τη δωρεάν διαφήμιση.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Ενεργές εγκαταστάσεις Jomres:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Ο συνολικός αριθμός των εγκαταστάσεων Jomres που μοιράζονται τις ιδιότητες του δικτύου συνδικαλιστικής Jomres στους ιστότοπούς τους.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Σύνολο ιδιοτήτων:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Αυτός είναι ο αριθμός των διαθέσιμων ιδιοτήτων στο JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Εμφάνιση συνολικής ιδιότητας:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Συνολικά, όλες οι φορές που μια ιδιοκτησία Jomres έχει συνδεθεί με έναν άλλο ιστότοπο που βασίζεται στο Jomres.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Το Jomres Syndicate Network (JSN) είναι μια δωρεάν δυνατότητα που διατίθεται σε όλους τους χρήστες του Jomres. Σκοπός του είναι να σας παρέχει δωρεάν διαφήμιση των ακινήτων σας σε άλλους ιστότοπους που βασίζονται στο Jomres. Ο στόχος είναι να βοηθήσετε αναβαθμίζετε γρήγορα τον ιστότοπό σας, προσφέροντας δωρεάν διαφήμιση, έτσι ώστε τα ακίνητά σας να αναγνωρίζονται και να εμπιστεύονται, επειδή συνδέονται με ιστότοπους υψηλής εμπιστοσύνης, υψηλής συνάφειας που είναι ήδη πολύ γνωστοί στις μηχανές αναζήτησης. Δείτε αυτό <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank"> άρθρο στον ιστότοπό μας </a> και <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank"> το εγχειρίδιο </a> για περισσότερες πληροφορίες. ');


jr_define('GUEST_PROFILE_INFORMATION', 'Αυτά είναι τα δεδομένα του προφίλ των επισκεπτών σας, πεδία με αυτό το σύμβολο <i class = "fa fa-users" aria-hidden = "true"> </i>
 είναι δημόσια ορατά, ενώ τα πεδία με αυτό το σύμβολο <i class = "fa fa-user-secret" aria-hidden = "true"> </i> μπορείτε να τα δείτε μόνο εσείς, οι οικοδεσπότες σας και οι διαχειριστές ιστότοπου. <br/> <br/> Οι οικοδεσπότες μπορούν να δουν ιδιωτικές πληροφορίες μόνο εάν έχετε ήδη κάνει κράτηση μαζί τους. <br/> <br/> Οι πληροφορίες σας κρυπτογραφούνται με ασφάλεια και αποθηκεύονται στη βάση δεδομένων μας χρησιμοποιώντας κρυπτογράφηση AES-256. ');

jr_define('GUEST_PROFILE_OPTIONAL', 'Αυτά τα πεδία είναι προαιρετικά, ωστόσο οι οικοδεσπότες μπορούν να χρησιμοποιήσουν τις πληροφορίες εδώ για να καθορίσουν εάν πιστεύουν ότι μπορούν να σας εμπιστευτούν, επομένως είναι καλύτερα να προσθέσετε τις πληροφορίες. Θυμηθείτε, ζητάτε να παραμείνετε στο δικό τους ιδιοκτησίας και μπορεί να σας απορρίψουν εάν πιστεύουν ότι δεν ταιριάζετε ή ότι το βιογραφικό σας δεν περιέχει αρκετές πληροφορίες. ');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Άδεια οδήγησης');
jr_define("GUEST_PROFILE_PASSPORT_NUMBER", "αριθμός διαβατηρίου");
jr_define("GUEST_PROFILE_IBAN", "αριθμός IBAN");
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Αυτή η ενότητα "Σχετικά με εμένα" είναι δημόσια ορατή, ώστε να μην τοποθετείτε προσωπικές πληροφορίες. Τούτου λεχθέντος, προσπαθήστε να βάλετε όσο νιώθετε άνετα, όπως τα πάθη σας, ό, τι θέλετε ασχοληθείτε για τα προς το ζην, τα χόμπι σας κλπ. Μπορείτε να χρησιμοποιήσετε το Markup για να του δώσετε λίγη τζαζ. Οι οικοδεσπότες θα θέλουν να αισθάνονται ότι μπορούν να σας εμπιστευτούν τις ιδιότητές τους. Βεβαιωθείτε ότι η εικόνα σας είναι μια πραγματική εικόνα σας, όχι του σκύλου σας ή αυτοκίνητο (ναι, παιδιά, μιλάμε μαζί σας!). ');

jr_define('GUEST_PROFILE_PREFERENCES', 'Εισαγάγετε τυχόν ειδικές απαιτήσεις που μπορεί να έχετε, όπως ανάγκες ευκολίας πρόσβασης εδώ. Δεν θα εμφανίζονται στο δημόσιο προφίλ σας, αλλά θα προστεθούν στις πληροφορίες κράτησης όταν κάνετε κράτηση.');

jr_define('VIEW_HOST_PROFILE', 'Προφίλ κεντρικού υπολογιστή');

jr_define('GUEST_PROFILE_TITLE', 'Προφίλ επισκέπτη');
jr_define('GUEST_PROFILE_TITLE_MY', 'Το προφίλ μου');

jr_define('GUEST_PROFILE_WELCOME', 'Γεια, επιτρέψτε μου να σας πω λίγα λόγια για τον εαυτό μου.');
jr_define('GUEST_PROFILE_MY_NAME', 'Το όνομά μου είναι');
jr_define('GUEST_PROFILE_I_COME_FROM', 'και προέρχομαι από το');
jr_define('GUEST_PROFILE_IN', 'region in');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Οι προσωπικές μου πληροφορίες');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Κάνουμε ό, τι καλύτερο μπορούμε για να επικυρώσουμε τις πληροφορίες των επισκεπτών και των ξενιστών, ωστόσο θα πρέπει να κάνετε τη δική σας επιμέλεια και να αποφασίσετε μόνοι σας εάν αυτό το άτομο είναι αξιόπιστο ή όχι.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Οι ιδιότητες μου');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Οι κριτικές μου');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Αυτό είπα για αυτήν την ιδιότητα:');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Έδωσα σε αυτήν την ιδιότητα βαθμολογία βαθμολογίας:');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Οι κριτικές μου');
jr_define('GUEST_PROFILE_OF_ME', 'Τι λένε οι άλλοι για μένα');
	jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Τι είπε αυτός ο οικοδεσπότης για μένα');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Αξιολόγηση επισκεπτών');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Η κριτική μου για αυτόν τον επισκέπτη');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Ακολουθούν ορισμένα παραδείγματα κριτικών επισκεπτών για να κυλήσει η μπάλα: <br/>

<ul>
<li> (όνομα καλεσμένων) ήταν μια χαρά να φιλοξενήσω! Άφησαν τον χώρο καθαρό και ήταν ήσυχο όλο το Σαββατοκύριακο. Είχαν ομαλή επικοινωνία και ανυπομονώ να τους ξαναμείνω μαζί μου! </li>
    <li> Μου άρεσε να έχω (όνομα επισκέπτη) επειδή μπόρεσαν να αντιμετωπίσουν το μέρος με σεβασμό, να περάσουν υπέροχα και να απολαύσουν την περιοχή. Wereταν υπέροχοι με την ενοικίαση του χώρου και ελπίζω να τους φιλοξενήσω ξανά. </li>
    <li> Όλοι οι κανόνες του σπιτιού μου τηρήθηκαν (όνομα επισκέπτη) και μπόρεσαν να μπουν και να πάνε με ευκολία. Μου άρεσε να τα έχω εκεί καθώς ήταν σεβαστά και ήσυχα. Τα συστήνω ανεπιφύλακτα σε άλλους! </li>
</ul>

');

	jr_define('GUEST_PROFILE_UNKNOWN', 'Δυστυχώς, δεν μπορώ να βρω αυτόν τον χρήστη. Πιθανότατα δεν έχει συμπληρώσει ακόμα τα στοιχεία του λογαριασμού του.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Το Jomres είναι χτισμένο στο πλαίσιο Bootstrap, οπότε πρέπει να το χρησιμοποιήσετε σε ένα θέμα που βασίζεται στο Bootstrap. Σας προτείνουμε ένα που βασίζεται στο Bootstrap 3. Εάν δεν έχετε πρόσβαση σε ένα θέμα, σας συνιστούμε να χρησιμοποιήσετε το θέμα Jomres Leohtian για το Wordpress το οποίο μπορείτε <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank"> λήψη από εδώ. </a> ');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Η κράτηση επισημάνθηκε ως Μη εμφάνιση');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Στατιστικά JSN για αυτόν τον χρήστη');

jr_define('BOOKING_NOSHOW_INFO', 'Πληροφορίες κράτησης και μη εμφάνισης αντλούνται από το Δίκτυο Jomres Syndicate κατά την κράτηση. Λαμβάνονται από ανώνυμα δεδομένα και μπορούν να χρησιμοποιηθούν από εσάς για να αποφασίσετε εάν αυτός ο επισκέπτης κινδυνεύει να μην εκπληρώσει την κράτηση. Εάν το σύστημα αναφέρει ότι τα δεδομένα είναι άγνωστα, πιθανότατα επειδή αυτό το σύστημα δεν αναγνωρίζεται στο δίκτυο. ');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Key Management Framework Key');
jr_define("CMF_CONFIG_KEY_DESC", "Το κλειδί άδειας πλαισίου διαχείρισης καναλιού. Θα χρειαστεί να παράσχετε αυτό το κλειδί για να μπορείτε να κάνετε λήψη πρόσθετων πλαισίου διαχείρισης καναλιών.");

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Η ιδιοκτησία σας δεν έχει εγκριθεί');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Η ιδιοκτησία σας δεν έχει εγκριθεί. Εάν πιστεύετε ότι αυτό έγινε κατά λάθος, επικοινωνήστε μαζί μας.");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "This is a Child guest type;");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Ορίστε το σε Ναι, αν αυτός ο τύπος επισκέπτη θα ταξινομηθεί ως τύπος παιδιού επισκέπτη.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Εάν θέλετε να χρεώνετε ανά άτομο ανά διανυκτέρευση, τότε θα πρέπει να δημιουργήσετε μερικούς τύπους επισκεπτών.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Μπορείτε να δημιουργήσετε όσους τύπους επισκεπτών χρειάζεστε, δοκιμάστε να ξεκινήσετε δημιουργώντας μόνο έναν τύπο επισκέπτη που ονομάζεται Ενήλικας . Αφήστε όλες τις ρυθμίσεις στις προεπιλεγμένες τιμές τους. Στη συνέχεια, αν για παράδειγμα θέλετε δώστε στα παιδιά κάτω των 12 ετών έκπτωση 50% θα δημιουργήσετε έναν νέο τύπο επισκέπτη και θα τον ονομάσετε Παιδιά κάτω των 12 ετών. Ορίστε την επιλογή Προσθήκη διακύμανσης σε - (αρνητικό) και ορίστε την Διακύμανση σε 50. Αυτό σημαίνει όταν τα παιδιά προστίθενται σε μια κράτηση χρεώνονται το 50% του κόστους του δωματίου του δωματίου. ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Ορισμός τιμών χειροκίνητα");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Ορισμός ελάχιστων διανυκτερεύσεων χειροκίνητα");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Ορισμός ελάχιστων διανυκτερεύσεων");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Ορισμός <em> τιμής ανά διανυκτέρευση </em> ανά ημέρα της εβδομάδας");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Ορισμός <em> τιμής ανά διανυκτέρευση </em> ανά εύρος ημερομηνιών");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Ορισμός <em> ελάχιστων διανυκτερεύσεων </em> κατά εύρος ημερομηνιών");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Οι επιλογείς ημερομηνιών και η τιμή εισαγωγής σάς επιτρέπουν να ορίσετε μία τιμή για ένα συγκεκριμένο εύρος ημερομηνιών. Επιλέξτε ημερομηνία έναρξης και λήξης, εισαγάγετε μια τιμή και κάντε κλικ στο κουμπί Ορισμός τιμής ανά διανυκτέρευση.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Οι επιλογές ημερομηνίας και η εισαγωγή ελάχιστων διανυκτερεύσεων σάς επιτρέπουν να ορίσετε μία τιμή για τις ελάχιστες διανυκτερεύσεις για ένα συγκεκριμένο εύρος ημερομηνιών. Επιλέξτε ημερομηνία έναρξης και λήξης, εισαγάγετε έναν αριθμό για τις ελάχιστες διανυκτερεύσεις και κάντε κλικ στο Ορισμός ελάχιστες νύχτες ");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Χρησιμοποιήστε αυτό το αναπτυσσόμενο μενού για να αλλάξετε μεταξύ των τιμών για μεμονωμένες ημερομηνίες, για τον καθορισμό ελάχιστων διανυκτερεύσεων για μεμονωμένες ημερομηνίες. Μπορείτε να χρησιμοποιήσετε το <em> επιλογέα ανά ημέρα της εβδομάδας </em>, το <em> κατά ημερομηνία επιλέξτε </em> επιλέξτε ή ορίστε τις τιμές/ελάχιστες διανυκτερεύσεις με μη αυτόματη επεξεργασία των ημερομηνιών. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Χρησιμοποιήστε αυτό το αναπτυσσόμενο μενού για να αλλάξετε μεταξύ των τιμών για μεμονωμένες ημερομηνίες, για τον καθορισμό ελάχιστων διανυκτερεύσεων για μεμονωμένες ημερομηνίες. Μπορείτε να χρησιμοποιήσετε το <em> ανά εύρος ημερομηνιών </em> επιλογέα ή να ορίσετε τις τιμές/ελάχιστες διανυκτερεύσεις κατά χειροκίνητη επεξεργασία των ημερομηνιών. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Ορισμός τιμών ή ελάχιστων διανυκτερεύσεων");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Ορισμός <em> ελάχιστων διανυκτερεύσεων </em> ανά ημέρα της εβδομάδας");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Τα πεδία ημέρας της εβδομάδας σάς επιτρέπουν να ορίσετε έναν ελάχιστο αριθμό διανυκτερεύσεων για μια δεδομένη ημέρα της εβδομάδας, μόλις κάνετε κλικ στο κουμπί ημέρας της εβδομάδας, όλες οι ημέρες της εβδομάδας θα ρυθμιστούν σε αυτήν τη ρύθμιση ελάχιστων διανυκτερεύσεων. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Μη αυτόματες τιμές/ελάχιστες διανυκτερεύσεις");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Ορισμός τιμών");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Ορισμός ελάχιστων διανυκτερεύσεων");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Ανά διανυκτέρευση");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Ελάχιστες νύχτες");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Μέγιστες νύχτες");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Εδώ μπορείτε να δημιουργήσετε τιμές για εσάς, οι οποίες σχετίζονται με τους τύπους δωματίων που έχετε στην ιδιοκτησία σας.");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Οι πιο συχνά χρησιμοποιούμενες επιλογές");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Οδηγίες");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Εάν θέλετε να προσθέσετε διαφορετικές τιμές για διαφορετικό αριθμό επισκεπτών τότε <em> μπορείτε να δημιουργήσετε περισσότερα από πολλά τιμολόγια για κάθε τύπο δωματίου </em> και να έχετε διαφορετικές τιμές min/max επισκεπτών σε αυτές τις τιμές. ");

jr_define('_JOMRES_MICROMANAGE_INFO', "Δώστε όνομα στην ταρίφα, καθορίστε τον μέγιστο αριθμό διανυκτερεύσεων και τον ελάχιστο και μέγιστο αριθμό επισκεπτών που απαιτούνται στη φόρμα κράτησης πριν από την προσφορά του τιμολογίου. <br/> <br/> Χρήση το πλαίσιο επιλογής ημερομηνιών για να προσθέσετε τιμές και ελάχιστες ρυθμίσεις διανυκτερεύσεων σε μια σειρά ημερομηνιών ή να επεξεργαστείτε απευθείας τις εισόδους. Εάν δεν θέλετε να προσφέρεται καθόλου το τιμολόγιο σε συγκεκριμένες ημερομηνίες, αφήστε την τιμή να οριστεί σε 0 (μηδέν) αυτές τις ημερομηνίες. <br/> <br/> Μπορείτε να έχετε διαφορετικές ελάχιστες διανυκτερεύσεις σε διαφορετικές ημερομηνίες, οπότε αν θέλετε μεγαλύτερες κρατήσεις κατά τη διάρκεια εβδομάδων φεστιβάλ/συνεδρίων, τότε μπορείτε να ορίσετε τις ελάχιστες βραδιές να είναι υψηλότερες μόνο σε αυτές τις περιόδους. <br/ > <br/> Εάν χρεώνετε ανά άτομο ανά χρέωση (PPPN), μπορείτε να ενεργοποιήσετε αυτήν τη ρύθμιση στην καρτέλα Ρυθμίσεις> Διαμόρφωση ιδιοκτησίας> Τιμολόγια και νόμισμα και, στη συνέχεια, δημιουργήστε τους τύπους επισκεπτών που χρειάζεστε στις Ρυθμίσεις> Τύποι επισκεπτών. ");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Επιπλέον επιλογές");
jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Αυτές είναι πρόσθετες επιλογές που δεν χρησιμοποιούνται τόσο συχνά, αλλά παρόλα αυτά είναι διαθέσιμες σε εσάς. <br/> <strong> Αγνοήστε το PPPN </strong> Σημαίνει Αγνόηση ανά άτομο ανά Διανυκτέρευση. Μπορείτε να έχετε πολλές διαφορετικές χρεώσεις για τον ίδιο τύπο δωματίου, για παράδειγμα ένα από τα οποία χρεώνει ανά άτομο ανά διανυκτέρευση και ένα όχι. <br/> <strong> Επιτρέψτε τα Σαββατοκύριακα </strong> Η επιλογή Allow Weekends σας δίνει τη δυνατότητα να κάνετε μια χρέωση που είναι μόνο διατίθεται κατά τη διάρκεια των καθημερινών, για παράδειγμα, εάν θέλετε ένα ειδικό τιμολόγιο για επαγγελματίες ταξιδιώτες. Σε αυτήν την περίπτωση, θα ορίσετε την επιλογή σε Όχι και οι ελάχιστες νύχτες σε 1 και το μέγιστο βράδυ, το πολύ, 5. <br/> <strong> Σαββατοκύριακα μόνο </strong> Η επιλογή Μόνο για Σαββατοκύριακα είναι το αντίστροφο της επιλογής Να επιτρέπονται τα Σαββατοκύριακα. Αυτό που θεωρείτε ότι είναι ημέρες Σαββατοκύριακου μπορεί να διαμορφωθεί στις ρυθμίσεις διαμόρφωσης ιδιοκτησίας. Αυτό σας δίνει τη δυνατότητα να ορίσετε μια τιμή μόνο για το Σαββατοκύριακο που θα θέλατε προσφορά για ειδικές εκδηλώσεις. <br/> <strong> Check-in Ημέρα της εβδομάδας </strong> Αυτή η επιλογή σάς δίνει τη δυνατότητα να επιβάλλετε τον έλεγχο μόνο σε ορισμένες ημέρες της εβδομάδας και χρησιμοποιείται καλύτερα σε συνδυασμό με τη Διαμόρφωση ιδιοτήτων> καρτέλα Κρατήσεις> Επιλογές καθορισμένων περιόδων. Η πλειοψηφία των χρηστών θα θέλει να αφήσει αυτήν την επιλογή σε Όλες. <br/> Οι δύο τελευταίες επιλογές, <strong> Ελάχιστα επιλεγμένα δωμάτια </strong> και <strong> Μέγιστα ήδη επιλεγμένα δωμάτια </strong> είναι πολύ εξειδικευμένα και χρήσιμο σε ακίνητα με εξαιρετικά περίπλοκα τιμολόγια. <em> Εκτός εάν έχετε συγκεκριμένη ανάγκη, θα πρέπει να αφήσετε αυτές τις επιλογές μόνο. ​​</em> Χρησιμοποιήστε τις αν θέλετε να προσφέρεται αυτό το τιμολόγιο μόνο όταν ο επισκέπτης έχει ήδη επιλέξει Ν αριθμό δωματίων στη φόρμα κράτησης, για παράδειγμα θα μπορούσατε να έχετε ένα βασικό τιμολόγιο όπου αυτές οι επιλογές παραμένουν στην προεπιλογή και ένα δεύτερο τιμολόγιο όπου η ελάχιστη επιλεγμένη ελάχιστη αίθουσα έχει οριστεί σε 1, τότε αυτό το δεύτερο τιμολόγιο θα προσφέρεται στη φόρμα κράτησης μόλις επιλεγεί ένα δωμάτιο. ");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Μπορείτε να δημιουργήσετε πολλαπλά τιμολόγια για τον ίδιο τύπο δωματίου, ώστε να μπορείτε να δημιουργήσετε ένα τιμολόγιο για ελάχιστες/μέγιστες ημέρες 1 - 7 και ένα δεύτερο τιμολόγιο όπου οι ελάχιστες ημέρες είναι 7, οι μέγιστες ημέρες 14 και ούτω καθεξής. Αυτό σας επιτρέπει να δημιουργήσετε συστήματα τιμολόγησης τόσο απλά ή όσο περίπλοκα χρειάζεστε. Σας επιτρέπει επίσης να δημιουργήσετε πολλαπλά τιμολόγια με διαφορετικές συνθήκες, ώστε να μπορείτε να έχετε ένα δεύτερο σύνολο τιμολογίων όπου η τιμή είναι χαμηλότερη για το Bed & Breakfast, και μια άλλη σειρά ακριβότερων τιμολογίων για κρεβάτι, πρωινό και βραδινό γεύμα. ");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Ορισμός ημερών επιλογής ημερομηνιών μόνο");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Properties Categories');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Επεξεργασία κατηγορίας ιδιοκτησίας');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Σταμάτα!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Ευχαριστούμε για την εγκατάσταση του Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "Η διαχείριση ιδιοκτησίας πραγματοποιείται σε δημόσιες σελίδες, όχι στην περιοχή διαχειριστή.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Εάν δεν είστε εξοικειωμένοι με τον Jomres, επισκεφθείτε την ενότητα Βοήθεια> σελίδα Ξεκινώντας.");

jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Join the Jomres Syndicate");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Μόλις ρυθμίσετε τον ιστότοπό σας και είστε έτοιμοι να αρχίσετε να δέχεστε επισκέπτες, γίνετε μέλος του συνδικάτου Jomres.net και καταχωρίστε τις ιδιότητες σας σε άλλους ιστότοπους Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Χρειάζεστε τουλάχιστον ένα δωμάτιο ενός από τους ακόλουθους τύπους για να μπορέσετε να δημιουργήσετε μια τιμή:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Μεταβείτε στις Ρυθμίσεις> Δωμάτια και δημιουργήστε πρώτα ένα δωμάτιο, αφού το κάνετε αυτό, θα μπορείτε να δημιουργήσετε μια τιμή για αυτόν τον τύπο δωματίου.");

jr_define('JOMRES_PLATFORM', "Jomres Platform");

jr_define('JOMRES_PLATFORM_CONNECTED', "Συνδεδεμένο");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Ορίστε το σε Ναι, εάν έχετε ήδη συνδέσει τον λογαριασμό σας Stripe με την πλατφόρμα Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Αυτό είναι το αναγνωριστικό του λογαριασμού Stripe που μπορείτε να βρείτε στον πίνακα εργαλείων σας στις Ρυθμίσεις> Πληροφορίες λογαριασμού και μοιάζει με acct_xxxxxxxxx Θα χρησιμοποιούσατε αυτό το πεδίο εάν έχετε πολλές εγκαταστάσεις Jomres και θέλετε να χρησιμοποιείτε τον ίδιο λογαριασμό σε όλους όλους τους ιστότοπους και έχετε ήδη συνδεθεί με εμάς. Εάν δεν έχετε συνδεθεί με την πλατφόρμα Jomres, δεν αρκεί να εισαγάγετε τα στοιχεία σας εδώ. Αντ 'αυτού, επισκεφθείτε την επιλογή μενού Αποκτήστε σύνδεση στη γραμμή εργαλείων, στην ενότητα Βοήθεια. Εάν θέλετε για να δοκιμάσετε πληρωμές, στην καρτέλα Αποσφαλμάτωση της Διαμόρφωσης ιστότοπου ορίστε τον ιστότοπό σας από Παραγωγή σε Ανάπτυξη. ");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Μεταβείτε στους προγραμματιστές> κλειδιά API στον πίνακα εργαλείων σας για να βρείτε τα μυστικά κλειδιά σας. Αυτά χρησιμοποιούνται από το σύστημα για να επαληθεύσει ότι τα δεδομένα κράτησης που επιστρέφονται από τη φόρμα πληρωμής είναι έγκυρα και ότι οι καταθέσεις έχουν πληρωθεί πριν από την αποθήκευση της κράτησης . ');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Μυστικό κλειδί δοκιμής λωρίδας");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard Tariff Mode');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Πόσα άτομα μπορεί να φιλοξενήσει αυτή η ιδιοκτησία;');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Ο αριθμός των καλεσμένων στην ημερήσια τιμή σας');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Τιμή επιπλέον ενηλίκων');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Children');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Ανά άτομο ανά διανυκτέρευση;');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'τροποποιητής 7 ημερών');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Έκπτωση στην ημερήσια τιμή εάν η κράτηση είναι για 7 ημέρες ή περισσότερο. Αφήστε αυτό το μηδέν αν δεν θέλετε να εφαρμοστεί η έκπτωση.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'τροποποιητής 30 ημερών');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Έκπτωση στην ημερήσια τιμή εάν η κράτηση είναι για 30 ημέρες ή περισσότερο. Αφήστε αυτό το μηδέν αν δεν θέλετε να εφαρμοστεί η έκπτωση.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Ενήλικες');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Τιμή με βάση 2 ενήλικες');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Έκπτωση κράτησης από');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'έως');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'επειδή η κράτηση είναι μεγαλύτερη από 7 ημέρες.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'επειδή η κράτηση είναι μεγαλύτερη από 30 ημέρες.');


jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Ανά άτομο ανά διανυκτέρευση;');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'τροποποιητής 7 ημερών');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Έκπτωση στην ημερήσια τιμή εάν η κράτηση είναι για 7 ημέρες ή περισσότερο. Αφήστε αυτό το μηδέν αν δεν θέλετε να εφαρμοστεί η έκπτωση.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'τροποποιητής 30 ημερών');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Έκπτωση στην ημερήσια τιμή εάν η κράτηση είναι για 30 ημέρες ή περισσότερο. Αφήστε αυτό το μηδέν αν δεν θέλετε να εφαρμοστεί η έκπτωση.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Ενήλικες');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Τιμή με βάση 2 ενήλικες');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Έκπτωση κράτησης από');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'έως');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'επειδή η κράτηση είναι μεγαλύτερη από 7 ημέρες.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'επειδή η κράτηση είναι μεγαλύτερη από 30 ημέρες.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Δημοτικοί φόροι');
jr_define('JOMRES_CITY_TAX_VALUE', 'Αξία φόρου πόλης');
jr_define('JOMRES_CITY_TAX_METHOD', 'Μέθοδος υπολογισμού φόρου');
jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Ενιαίο τέλος');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Ανά διανυκτέρευση');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Ανά επισκέπτη');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Ανά επισκέπτη ανά διανυκτέρευση');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Ποσοστό αξίας κράτησης');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Τέλη καθαριότητας');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Κόστος τέλους καθαριότητας');


jr_define('JOMRES_COMPATABILITY_MODE', 'Force Compatability mode configuration mode?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Η λειτουργία ρύθμισης παραμέτρων ιδιοκτησίας συμβατότητας αναγκάζει πολλά πράγματα να συμβούν. Σε παλαιότερες εκδόσεις του Jomres, οι διαχειριστές ιδιοκτησίας μπορούσαν να επιλέξουν ποια μέθοδο επεξεργασίας τιμολογίου θα χρησιμοποιήσουν και μια ποικιλία άλλων ρυθμίσεων (μερικές από τις οποίες μπορεί να φαίνονται συγκεχυμένες) Η ενεργοποίηση της ρύθμισης παραμέτρων συμβατότητας αναγκάζει όλες τις νέες ιδιότητες να χρησιμοποιούν μόνο την τυπική λειτουργία επεξεργασίας τιμολογίων, η οποία μοντελοποιεί τη λειτουργικότητα διαμόρφωσης της ιδιοκτησίας booking.com σε σχέση με την τιμολόγηση, την τιμολόγηση παιδιών κ.λπ. Συνιστάται για εγκαταστάσεις που δημιουργήθηκαν μετά τις 9.22 .0, αυτή η επιλογή θα πρέπει να οριστεί σε Ναι, αλλά για παλαιότερες εγκαταστάσεις εναπόκειται σε εσάς να αποφασίσετε εάν οι νέες ιδιότητες θα πρέπει να ρυθμιστούν αυτόματα σε κατάσταση συμβατότητας όταν δημιουργηθούν. ");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Δέχεστε παιδιά κάτω των 18 ετών;');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Ορίστε αυτήν την επιλογή σε Ναι εάν επιτρέπετε παιδιά. Εάν ναι, τότε στο μενού Ρυθμίσεις θα έχετε μια επιλογή που ονομάζεται Πολιτικές παιδιών όπου μπορείτε να επεξεργαστείτε ρυθμίσεις που σχετίζονται με παιδιά.");

jr_define("JOMRES_POLICIES_CHILDREN", "Πολιτικές για παιδιά");

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'Σε ποια ηλικία επιτρέπονται τα παιδιά;');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Ανά παιδί, ανά διανυκτέρευση');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Ανά παιδί, ανά διαμονή');

jr_define("JOMRES_POLICIES_CHILDREN_CHILD_RATES", "Τιμές παιδιών");
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Νέα παιδική τιμή');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Επεξεργασία παιδικού ποσοστού');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Δημιουργήστε τις δωρεάν ή επί πληρωμή χρεώσεις για παιδιά εδώ. Οι τιμές θα ισχύουν μόνο όταν έχετε δημιουργήσει επίπεδα πληρότητας για τύπους δωματίων.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Ηλικία από');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Ηλικία έως');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'ανά διανυκτέρευση ή ανά διαμονή;');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Βαθμολογία');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Εάν μηδενιστεί ή δεν έχει οριστεί, τα παιδιά αυτής της ηλικιακής κατηγορίας θα είναι δωρεάν.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Ηλικίες κατά το checkin');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Επίπεδα πληρότητας');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Μέγιστοι ενήλικες');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Μέγιστα παιδιά');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Μέγιστη χωρητικότητα');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Επεξεργασία επιπέδου πληρότητας για:');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Επεξεργασία επιπέδων πληρότητας για αυτόν τον τύπο δωματίου. Μην συμπεριλάβετε τους επισκέπτες που κοιμούνται σε βρεφικές κούνιες (αυτές προστίθενται δημιουργώντας ένα Extra)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Για κάθε επιπλέον ενήλικα, πόσο πρέπει να χρεώνεται;');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Επιπλέον ενήλικες');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Δεν έχετε ρυθμίσει ακόμη τις τιμές παιδιών.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Ορισμός παιδικών ποσοστών τώρα');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Έχετε διαμορφώσει την ιδιοκτησία σας ώστε να επιτρέπει στα παιδιά, αλλά δεν έχετε ορίσει ακόμη κανένα επίπεδο πληρότητας για τα παιδιά.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Ορισμός επιπέδων πληρότητας');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Κάθε φορά που επεξεργάζεστε ένα δωμάτιο ή τον τύπο της ιδιοκτησίας σας θα πρέπει να ελέγχετε και να ενημερώνετε τα επίπεδα πληρότητας για το ακίνητο/τα δωμάτιά σας καθώς αυτά επηρεάζουν τον αριθμό των επισκεπτών που μπορούν να γίνουν αποδεκτοί στη φόρμα κράτησης.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Ενήλικες');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Children');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Επίπεδο επιλογών διαχειριστή');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Το Jomres έχει πολλές επιλογές μενού και διαμόρφωσης που μπορείτε να χρησιμοποιήσετε κατά τη διαμόρφωση του ιστότοπού σας. Η τεράστια πλειοψηφία τους δεν θα χρειαστεί ποτέ να αλλάξετε, ώστε να είναι κρυμμένες από προεπιλογή. Μπορείτε να επιλέξετε να εμφανίζονται αυτές οι επιλογές με ρύθμιση το επίπεδο επιλογών διαχειριστή. Το βασικό επίπεδο σας δείχνει ακριβώς ό, τι χρειάζεστε κατά τη δημιουργία μιας τοποθεσίας για πρώτη φορά. Το κοινό επίπεδο σας δείχνει αυτές τις επιλογές που αλλάζουν συχνότερα και τα πάντα σας δείχνουν όλες τις πιθανές ρυθμίσεις και επιλογές μενού στην περιοχή διαχειριστή. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Όλα');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Μπορούμε να συλλέξουμε πληροφορίες σχετικά με τον τρόπο χρήσης του Jomres;');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Θα θέλαμε να συλλέξουμε πληροφορίες σχετικά με τον τρόπο που χρησιμοποιείτε το Jomres. Δεν θα αποθηκευτούν προσωπικά αναγνωρίσιμες πληροφορίες, η χρήση θα ανωνυμοποιηθεί και θα χρησιμοποιηθεί μόνο για να μας βοηθήσει να καταλάβουμε πώς χρησιμοποιούν οι άνθρωποι το Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Ναι, αυτό είναι εντάξει');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Όχι, δεν συμφωνώ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Θα κάνετε κρατήσεις για περισσότερες από μία ιδιοκτησίες;');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Το Jomres μπορεί να χρησιμοποιηθεί για ιστότοπους μεμονωμένων ή πολλαπλών ιδιοκτησιών. Εάν κάνετε κρατήσεις για μία μόνο ιδιοκτησία, τότε πολλές επιλογές θα είναι περιττές και δυνητικά μπερδεμένες. Μπορείτε να αλλάξετε αυτήν τη ρύθμιση αργότερα στις Ρυθμίσεις> Ιστότοπος Διαμόρφωση> καρτέλα Λειτουργικότητα πύλης. ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Μόνο μία ιδιότητα');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Θα καταχωρίσω περισσότερες από μία ιδιότητες');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Ποια έκδοση του πλαισίου Bootstrap υποστηρίζει το πρότυπο/το θέμα σας;");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Κάθε έκδοση του πλαισίου Bootstrap απαιτεί ελαφρώς διαφορετική σήμανση html. Το Jomres διαθέτει τρία σύνολα σετ προτύπων συμβατά με Bootstrap, ένα για κάθε έκδοση Bootstrap. Πρέπει να διασφαλίσετε ότι το διαμορφώνετε. Εάν χρησιμοποιείτε το κατάλληλο πρότυπο Στη συνέχεια δεν εξάγετε, όπως η διάταξη, τα modal και τα μενού δεν θα λειτουργήσουν σωστά. Εάν αποφασίσετε να χρησιμοποιήσετε ένα πρότυπο/θέμα αργότερα με διαφορετική έκδοση Bootstrap, μπορείτε να αλλάξετε το σετ προτύπου Bootstrap που θα πρέπει να χρησιμοποιεί ο Jomres στο Admin> Jomres> Settings > Διάφορα καρτέλα. <br/> <br/> Το Joomla 3 διανέμεται με το Bootstrap 2 από προεπιλογή, το Joomla 4 θα χρησιμοποιεί το Bootstrap 5. Το πρότυπο Jomres Leohtian (Joomla) και το θέμα (Wordpress) χρησιμοποιεί το Bootstrap 3. Διαφορετικά πρότυπα/θέματα διανέμονται με τα δικά τους αρχεία Bootstrap, οπότε αν έχετε αμφιβολίες, επικοινωνήστε με τον προγραμματιστή του προτύπου/του θέματος. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Απογύμνωση δεκαδικών από τις τιμές εξόδου;');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Εφαρμογή ομάδας με διόρθωση;');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Ορισμένες εγκαταστάσεις mysql ενδέχεται να έχουν πρόβλημα με τα Jomres Queries στις Ιδιότητες λίστας, στη λίστα επισκεπτών και στη σελίδα τιμολογίων λίστας. Εάν οι σελίδες αυτές λένε ότι εμφανίζουν X από τα Y αποτελέσματα, αλλά τίποτα δεν εμφανίζεται στη λίστα, τότε η ρύθμιση αυτή η επιλογή Ναι μπορεί να διορθώσει το πρόβλημα. Δεν θα συμβεί εάν χρησιμοποιείτε κοινόχρηστη φιλοξενία και η υπηρεσία φιλοξενίας δεν επιτρέπει στον χρήστη mysql να εκδώσει την εντολή "SET GLOBAL sql_mode =". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Αυτή είναι μια ιδιότητα καναλιού, δεν μπορεί να διαχειριστεί τοπικά, επισκεφθείτε τη σελίδα πλαισίου διαχείρισης καναλιού για να βρείτε τον απομακρυσμένο σύνδεσμο διαχείρισης της ιδιότητας');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Δεν υπάρχει Bootstrap στο θέμα");

jr_define('_BOOKING_INSTANT', 'Άμεση κράτηση');
jr_define('_BOOKING_ONREQUEST', 'Κράτηση κατόπιν αιτήματος');

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Σύνδεσμοι μέσων κοινωνικής δικτύωσης');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Βάλτε τα ονόματα των λογαριασμών σας στα μέσα κοινωνικής δικτύωσης εδώ, για παράδειγμα "jomres", όχι ολόκληρο το url');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Λίστα γλωσσών διαχωρισμένων με κόμματα που μιλά ο οργανισμός σας');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Διεύθυνση URL στο λογότυπο του οργανισμού σας');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres ενημερώθηκε');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Υπάρχει διαθέσιμη μια νέα έκδοση του Jomres. Πρέπει να ενημερώσετε για να συνεχίσετε να χρησιμοποιείτε το Jomres καθώς οι ενημερώσεις βελτιώνουν τη λειτουργικότητα και διασφαλίζουν ότι η εγκατάστασή σας παραμένει ασφαλής.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Ενημέρωση Jomres τώρα');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Ενημερώσεις προσθηκών');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Υπάρχουν νέες εκδόσεις προσθηκών διαθέσιμες στη διαχείριση προσθηκών. Πρέπει να ενημερώσετε όλες τις προσθήκες για να συνεχίσετε να χρησιμοποιείτε το Jomres καθώς οι ενημερώσεις βελτιώνουν τη λειτουργικότητα και διασφαλίζουν ότι η εγκατάστασή σας παραμένει ασφαλής.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Προσθήκες για ενημέρωση');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Εάν η άδειά σας δεν είναι πλέον έγκυρη, μπορείτε να λάβετε ένα νέο κλειδί άδειας χρήσης από τον ιστότοπό μας.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Ενημέρωση προσθηκών');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Λήψη νέου κλειδιού');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Αποθήκευση νέου κλειδιού');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Εικόνες τύπου ιδιότητας");

jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Χρειάζεστε βοήθεια για την κράτηση;");
jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Καλέστε την ομάδα εξυπηρέτησης πελατών μας στον παρακάτω αριθμό για να μιλήσετε με έναν από τους εκπροσώπους μας που θα σας βοηθήσει με όλες τις ανάγκες των διακοπών σας.");

jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Γιατί να κάνετε κράτηση μαζί μας;");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Προσφέρουμε τις καλύτερες τιμές κράτησης");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Έχουμε τα ακίνητα με τις καλύτερες τιμές αυτήν τη στιγμή στην αγορά.");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Δεν υπάρχουν χρεώσεις κράτησης. Εξοικονομήστε χρήματα!");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Μεγάλη επιλογή ιδιοτήτων");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " ιδιότητες");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " κριτικές επισκεπτών");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Είμαστε πάντα εδώ");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Καλέστε ή στείλτε μας email ανά πάσα στιγμή");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Λάβετε 24ωρη υποστήριξη πριν, κατά τη διάρκεια και μετά το ταξίδι σας");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Μέσα κοινωνικής δικτύωσης");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Βρείτε μας στα μέσα κοινωνικής δικτύωσης");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Εξαιρετικό");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Εξαιρετικό");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Υπέροχο");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Εξαιρετικό");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Φανταστικό");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Πολύ καλό");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "Καλό");

jr_define('JOMRES_REVIEWS_NONE_NEW', "Νέα καταχώριση");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Με έκπτωση");

jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Πού θέλετε να πάτε;');
jr_define('DATA_SOURCES_TITLE', "Ανανέωση πηγών δεδομένων");
jr_define('DATA_SOURCES_TITLE_INFO', "Οι πηγές δεδομένων ανανεώθηκαν. Οι πηγές δεδομένων χρησιμοποιούνται από πεδία εισαγωγής αυτόματης συμπλήρωσης στο γραφικό στοιχείο αναζήτησης και συνήθως ενημερώνονται αυτόματα, ωστόσο αυτή η σελίδα αναγκάζει τα δεδομένα να ενημερώνονται χειροκίνητα, εάν απαιτείται.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Για να στείλετε ένα αίτημα διακριτικού, στείλτε το αίτημα σε αυτήν τη διεύθυνση url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Το σενάριο ιδιοτήτων κύριας προβολής");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Το uid ιδιοκτησίας της ιδιότητας προς προβολή");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Το προεπιλεγμένο πρότυπο είναι property_details.html, με αυτό το όρισμα μπορείτε να ορίσετε ένα διαφορετικό πρότυπο λεπτομερειών ιδιοκτησίας για εμφάνιση.");

	jr_define('JOMRES_UPDATES_TITLE', 'Ενημερώσεις Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Αυτή η σελίδα μπορεί να πραγματοποιήσει λήψη και εγκατάσταση της πιο πρόσφατης έκδοσης του Jomres για εσάς. Χρησιμοποιεί τη δική της λειτουργικότητα και όχι του κεντρικού CMS, επομένως εάν παρουσιαστεί πρόβλημα κατά την ενημέρωση του κεντρικού CMS, μπορείτε να χρησιμοποιήσετε αυτήν τη σελίδα για να αναγκάστε μια επανεγκατάσταση της πιο πρόσφατης έκδοσης του Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Οι διαχειριστές ιδιοτήτων μπορούν να χρησιμοποιήσουν τη λειτουργία επεξεργασίας στο frontend για να προσαρμόσουν τις συμβολοσειρές για κάθε ιδιοκτησία, ωστόσο αυτό μπορεί να λειτουργήσει μόνο εάν η ρύθμιση μόνιμης σύνδεσης WordPress έχει οριστεί σε Απλό (http://www.domain.com/?p=123). Μόλις το κάνετε αυτό, οι διεπαφές χρήστες θα μπορούν να προσαρμόσουν συμβολοσειρές, όπως ονόματα δωματίων και άλλες ετικέτες, που αφορούν μοναδικές ιδιότητες. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Λειτουργία επεξεργασίας ετικετών');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Αυτή η δυνατότητα χρησιμοποιείται για την αλλαγή των ετικετών στοιχείων, συνήθως σε διαφορετικές γλώσσες.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Η λειτουργία επεξεργασίας σάς επιτρέπει να μετονομάζετε ετικέτες που είναι μοναδικές για μεμονωμένες ιδιότητες. Όταν χρησιμοποιείτε τη λειτουργία επεξεργασίας για να μετονομάσετε μια ετικέτα, η αλλαγή θα εμφανίζεται μόνο σε αυτήν την καταχώριση ιδιοτήτων. Για παράδειγμα, σε μια ιδιότητα που μπορεί να θέλετε για να χρησιμοποιήσετε τη λέξη "Τιμές" και σε άλλη τη λέξη "Τιμές". Δεν μπορούν να αλλάξουν όλες οι ετικέτες, για παράδειγμα τα ονόματα των τύπων δωματίων είναι ετικέτες σε ολόκληρο τον ιστότοπο, επομένως δεν μπορούν να αλλάξουν, αλλά συνήθως οτιδήποτε είναι μοναδικό σε μια μεμονωμένη ιδιοκτησία μπορεί να αλλάξει.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Εάν ο ιστότοπος υποστηρίζει πολλές γλώσσες, ενώ χρησιμοποιείτε μία γλώσσα, μπορείτε να δημιουργήσετε ένα στοιχείο που είναι μοναδικό για μια μεμονωμένη ιδιότητα. Όταν αλλάξετε την ενεργή γλώσσα σας, μπορείτε να χρησιμοποιήσετε τη λειτουργία επεξεργασίας για να μετονομάσετε αυτήν την ετικέτα, εισαγωγή κατάλληλης μετάφρασης στην τρέχουσα γλώσσα. Μπορείτε να συνεχίσετε να αλλάζετε την ενεργή γλώσσα για να εισάγετε μια κατάλληλη μετάφραση για αυτήν την ετικέτα για κάθε γλώσσα που υποστηρίζει ο ιστότοπος.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Διακόπτης λειτουργίας επεξεργασίας ετικετών');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'Σε αυτό το στιγμιότυπο οθόνης βλέπουμε τον διακόπτη λειτουργίας επεξεργασίας. Η λειτουργία επεξεργασίας είναι απενεργοποιημένη και οι ετικέτες εμφανίζονται κανονικά: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Ενεργοποιημένη λειτουργία επεξεργασίας ετικετών');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'Σε αυτό το στιγμιότυπο οθόνης βλέπουμε ότι, ενώ βρίσκεστε σε λειτουργία επεξεργασίας, επισημαίνονται οι ετικέτες που μπορείτε να μετονομάσετε:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Επιλέξτε το στοιχείο για αλλαγή');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Όταν επιλέγεται μια ετικέτα εμφανίζεται ένα αναδυόμενο παράθυρο:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Αλλαγή ετικέτας');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Χρησιμοποιήστε τη μικρή φόρμα για να αλλάξετε την ετικέτα. Κάντε κλικ στο Tick για να τελειώσετε ή κάντε κλικ στο X για να ακυρώσετε την επεξεργασία:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Η ετικέτα άλλαξε');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Μόλις αποθηκεύσετε την αλλαγή, η ετικέτα ενημερώνεται στη σελίδα. Μπορείτε να απενεργοποιήσετε τη λειτουργία επεξεργασίας τώρα:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Μεταφράσεις');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'Σε αυτήν τη σελίδα μπορείτε να μεταφράσετε ετικέτες από μια γλώσσα σε άλλη. Όταν επισκέπτεστε τη σελίδα, θα δείτε συμβολοσειρές που έχετε ήδη δημιουργήσει και την τιμή τους σε οποιαδήποτε γλώσσα χρησιμοποιείτε αυτήν τη στιγμή. Στο επάνω μέρος ορίστε το γλώσσα-στόχος και, στη συνέχεια, για τις ετικέτες που θέλετε να μεταφράσετε, κάντε κλικ στην ετικέτα και ένα αναδυόμενο παράθυρο θα σας επιτρέψει να εισαγάγετε τη νέα σας μετάφραση. Για μεγαλύτερες γραμμές κειμένου μπορείτε να επικολλήσετε το κείμενο από άλλη πηγή. Να θυμάστε ότι τυχόν HTML θα αφαιρεθεί .<br/>
Μπορείτε να αφήσετε το σύνολο της γλώσσας-στόχου στην τρέχουσα γλώσσα σας και να χρησιμοποιήσετε αυτήν τη σελίδα για να μετονομάσετε τα στοιχεία εδώ, αντί να επισκεφτείτε τις μεμονωμένες σελίδες τους.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Γλώσσα-στόχος');

	jr_define('API_CLIENTS_INFO', 'API Clients είναι Client ID/Secret ζεύγη κλειδιών που επιτρέπουν στα απομακρυσμένα συστήματα να χρησιμοποιούν λειτουργίες API που τους δίνετε δικαιώματα για χρήση. Σε αυτήν τη σελίδα μπορείτε να δημιουργήσετε όσα ζεύγη Client/Secret χρειάζεστε, το καθένα με οποιονδήποτε συνδυασμό αδειών που χρειάζεστε.');
	jr_define('CLIENT_TOKEN', 'Access Token');
	jr_define('CLIENT_TOKEN_INFO', "Τα διακριτικά πρόσβασης μπορούν να ζητηθούν χρησιμοποιώντας το Client ID και Secret. Ορισμένοι πελάτες μπορεί να έχουν ήδη δημιουργηθεί ένα διακριτικό πρόσβασης, οπότε μπορείτε να χρησιμοποιήσετε αυτό το διακριτικό πρόσβασης. Εάν πιστεύετε ότι το διακριτικό μπορεί να έχει έχει παραβιαστεί ή απλά θέλετε να το αλλάξετε, μπορείτε να λήξετε τα διακριτικά του πελάτη. Όλα τα διακριτικά που σχετίζονται με το ζεύγος πελάτη/μυστικού θα λήξουν.");
	jr_define('DELETE_TOKEN', 'Expire Tokens');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Επιλέξτε το νόμισμά σας" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Επιλέξτε τη γλώσσα σας" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Εγγραφή" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Σύνδεση");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Καταχώριση της ιδιοκτησίας σας");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Πρέπει πρώτα να εγγραφείτε και να συνδεθείτε");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS' , "Εμφάνιση φίλτρων");
jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS' , "Απόκρυψη φίλτρων");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Το κείμενο που εμφανίζεται στις σελίδες αποθηκεύεται σε αρχεία γλώσσας. Το σύστημα Jomres για την εμφάνιση συμβολοσειρών γλώσσας στη σελίδα σημαίνει ότι δεν χρειάζεται να επεξεργαστείτε απευθείας αυτά τα αρχεία γλώσσας. Αντίθετα, μπορείτε να επεξεργαστείτε αυτές τις συμβολοσειρές σε αυτήν σελίδα κάνοντας κλικ στο επισημασμένο κείμενο και βάζοντας το νέο κείμενο που θέλετε να εμφανίζεται στη φόρμα εισαγωγής που ανοίγει. Όταν κάνετε κλικ στο σημάδι επιλογής, τότε αυτή η αλλαγή αποθηκεύεται στη βάση δεδομένων. Αυτό σημαίνει ότι όλες οι αλλαγές σας αποθηκεύονται και δεν αντικαθίστανται όταν ενημερώνετε το Jomres. Εάν θέλετε να αλλάξετε κείμενο για διαφορετικές γλώσσες, χρησιμοποιήστε το αναπτυσσόμενο μενού επιλογής γλώσσας επάνω δεξιά, για να αλλάξετε την τρέχουσα γλώσσα. Οι συμβολοσειρές κειμένου μερικές φορές επαναλαμβάνονται σε διαφορετικά σημεία στα αρχεία γλώσσας επειδή χρησιμοποιούνται σε διαφορετικά περιβάλλοντα, οπότε μην ξεχάσετε να χρησιμοποιήσετε τη δυνατότητα αναζήτησης του προγράμματος περιήγησης για να βεβαιωθείτε ότι έχετε επεξεργαστεί τη σωστή συμβολοσειρά. ");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Όλη η διαχείριση ιδιοκτησίας εκτελείται στο frontend του ιστότοπού σας. Δεν είστε συνδεδεμένοι ως διαχειριστής ιδιοκτησίας, επομένως συνδεθείτε πρώτα και μετά θα μπορείτε να διαχειριστείτε τις ιδιοκτησίες σας.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Όταν εγκατασταθεί για πρώτη φορά το Jomres, θα δημιουργήσει έναν Super Property Manager για τον χρήστη διαχειριστή και θα προσθέσει μια νέα επιλογή που θα ονομάζεται notlete Book στο μενού Main. τη σελίδα Κρατήσεις για να ξεκινήσετε τη διαχείριση ακινήτων. ");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'Σε αυτήν τη σελίδα μπορείτε να διαμορφώσετε τις πύλες πληρωμής μέσω των οποίων θέλετε να λαμβάνετε πληρωμές κατάθεσης. Θα χρειαστείτε έναν λογαριασμό στην πύλη πληρωμών. Η σελίδα ρυθμίσεων θα σας παρέχει οδηγίες για τη διαμόρφωση της πύλης.' );

jr_define('_JOMRES_COM_A_GATEWAYLIST_TESTINGINFO', "Έχετε συνδεθεί ως Super Property Manager. Κανονικά οι διαχειριστές ακινήτων δεν μπορούν να χρησιμοποιήσουν πύλες πληρωμής, ωστόσο εάν ορίσετε τον ιστότοπο σε λειτουργία Ανάπτυξης στην καρτέλα Διαχειριστής > Jomres > Ρυθμίσεις > Εντοπισμός σφαλμάτων, τότε θα μπορείτε να το επεξεργαστείτε μέσω μιας κράτησης και πρόσβαση στις πύλες πληρωμής όπως κάνει ένας επισκέπτης. Εάν δεν θέλετε να ρυθμίσετε τον ιστότοπο σε λειτουργία ανάπτυξης, τότε θα πρέπει είτε να αποσυνδεθείτε είτε να συνδεθείτε ως κανονικός εγγεγραμμένος χρήστης για να δοκιμάσετε τις κρατήσεις ως επισκέπτης. Οποιοδήποτε Οι ρυθμίσεις δοκιμαστικής λειτουργίας σε μεμονωμένες πύλες πληρωμής δεν επηρεάζονται από τη ρύθμιση Παραγωγής ή Ανάπτυξης του ιστότοπου. ");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Λειτουργία δοκιμής");