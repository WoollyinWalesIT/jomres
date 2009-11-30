<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','Εκκρεμείς Αφίξεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Εκκρεμείς Αναχωρήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Αλλα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Αμεση Κράτηση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Κατάλογος Κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Προφίλ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Γλώσσες');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICK______DESC','Σκοπίμως Μαύρο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Γενικές Παράμετροι');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Ρυθμίσεις Εκπτώσεων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Ρυθμίσεις Δωματίων/Ιδιοκτησίας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Παράμετροι Ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Όροι Συμφωνίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Επιστροφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Πίσω στο Mos Residents List bookings');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Παράμετροι');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Φόρτωση Δεδομένων Δείγματος');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','ΝΑΙ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','ΟΧΙ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Νέος Τιμοκατάλογος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Νέο Δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Νέο Χαρακτηριστικό Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Νέος τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Νέα ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Νέα χαρακτηριστικά ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Νέος Πελάτης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Αποθήκευση');


// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Ημ/νια ’φιξης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Ημ/νια Αναχώρησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Κενό');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Ανάθεση Αρμοδιοτήτων Διαχειριστή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','Κωδ.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Όνομα Χρήστη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Εξουσιοδότηση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Προεπιλεγμένη Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Αλλαγή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Επίπεδο Πρόσβασης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Ο Χρήστης τροποποιήθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','Μη Διαθέσιμο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Αλλαγή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Αλλαγή επιπέδου πρόσβασης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Υποδοχή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Διαχείριση ιδιοκτησίας');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Όλες οι κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Εκκρεμείς κρατήσεις (απλήρωτες)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Επεξεργασία Κρατήσης:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Αφ/Αν');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Πελάτης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Πληρωμή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Επίθετο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Η άφιξη είναι σήμερα. Πατήστε εδώ αν πραγματοποιήθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Σημειώσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Πρόσθετες Υπηρεσίες');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Προσοχή: Μερικές πρόσθετες υπηρεσίες μπορεί να έχουν έξτρα χρέωση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Αρ. Ενηλίκων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Αρ. Παιδιών');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Ακύρωση κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Κωδ. Χρήστη ιστοχώρου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Αρ. οικίας ή όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Οδός');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Πόλη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','ΤΚ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Αρ. Τηλ.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Κινητό');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Φαξ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','e-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Προτιμήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Αριθμός κυκλοφορίας οχήματος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Ο Πελάτης ακυρώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Το Ξενοδοχείο Ακυρώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Επιλέξτε αιτία ακύρωσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Ημέρες μέχρι την άφιξη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Χρέωση ακύρωσης λόγω</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Η κράτηση δεν μπορεί να ακυρωθεί επειδή ο επισκέπτης έχει ήδη κάνει check in');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Η προκαταβολή πληρώθηκε, καμία οφειλή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Δεν πληρώθηκε προκαταβολή, εκκρεμεί κατάθεση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Η προκαταβολή πληρώθηκε 50% της συνολικής χρέωσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Δεν πλρώθηκε προκαταβολή 50% της συνολικής χρέωσης ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Εξόφληση προκαταβολής 100% της συνολικής χρέωσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Μη πληρωμή προκαταβολής 100% της συνολικής χρέωσης ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Υπενθύμιση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Μη πληρωμή προκαταβολής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Επιβεβαίωση ακύρωσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Η κράτηση ακυρώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Ημέρες εως την άφιξη');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Τύπος κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Μαύρο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Υποδοχή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Υπηρεσίες Διαδικτύου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Όνομα δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Αρ. Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Όροφος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Πρόσβαση ΑΜΕΑ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Μεγ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Περιγραφή τύπου δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Υπηρεσίες δωματίου');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&euro;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Τρόποι Πληρωμής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Προκαταβολή πληρώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Εισαγωγή κατάθεσης προκαταβολής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Συνολική χρέωση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Αρ. Κατάθεσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Αρ. Πληρωμής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Αρ. Κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Κατάθεση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Κατάθεση αποθηκεύτηκε');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Προσοχή...</FONT></h1><BR><B>Πρέπει να αλλάξετε τις ιδιότητες του αρχείου γλώσσας σε chmod 766 ώστε να γίνει ενημέρωση γλώσσας</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Γρήγορη επιλογή τύπου δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Κουτί επιλογής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Αρ. Ενηλίκων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Αρ. Παιδιών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Απαιτείται Baby Cot;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Εναλλακτικά');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Δώσε είτε τον αρ. διανυκτερεύσεων, ή την Ημ/νία αναχώρησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Αρ. Διανυκτερεύσεων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Παρακαλώ επιλέξτε τον τύπο δωματίου που απαιτείται, την ημ/νία άφιξης και είτε τον αρ. διανυκτερεύσεων ή την ημ/νία αναχώρησης. Τέλος, εισάγετε τον αρ. Ενηλίκων και τον αρ. Παιδιών στα contingent');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Ελεύθερα Δωμάτια');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nb');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Όνομα Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Αρ. Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Όροφος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Πρόσβαση ΑΜΕΑ;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Μεγ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Λεπτομέρειες');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','Λυπούμαστε, αλλά δεν μπορούμε να εξυπηρετήσουμε τόσους πελάτες');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">Λυπούμαστε, η ιδιοκτησία δεν μπορεί αν προσφέρει κατάλυμα στην συγκεκριμένη περίοδο. Παρακαλώ επιστρέψτε στο ημερολόγιο και δείτε τη διαθεσιμότητα.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Παρακαλώ επιλέξτε από τη λίστα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Επιλογή Πελάτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Περιγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Λίστα Πελατών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ΣΦΑΛΜΑ: Υπήρξε λάθος στην επιλογή των ημερών.<br>Πατήστε ΕΠΙΣΤΡΟΦΗ και εισάγετε ξανά τα δεδομένα.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ΣΦΑΛΜΑ: Απαιτείται τουλάχιστον ένας πελάτης για να γίνει κράτηση.<br>Πατήστε ΕΠΙΣΤΡΟΦΗ και εισάγετε ξανά τα δεδομένα.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ΣΦΑΛΜΑ: Οι ημερομηνίες που επιλέχθηκαν είναι λάθος.<br>Πατήστε ΕΠΙΣΤΡΟΦΗ και εισάγετε ξανά τα δεδομένα.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ΣΦΑΛΜΑ: Δεν έγινε επιλογή τύπου δωματίου.<br>Πατήστε ΕΠΙΣΤΡΟΦΗ και εισάγετε ξανά τα δεδομένα.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ΣΦΑΛΜΑ: Η ημερομηνία κράτησης είναι σήμερα ή προηγούμενη της σημερινής<br>Πατήστε ΕΠΙΣΤΡΟΦΗ και εισάγετε ξανά τα δεδομένα.</font>');

// Display guest form



/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Εισαγωγή στοιχείων πελάτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Επιβεβαίωση στοιχείων πελάτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Επεξεργασία στοιχείων πελάτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Επίθετο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Οικία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Οδός');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Πόλη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','ΤΚ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Τηλ.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Κινητό');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Φαξ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','e-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Αρ. Κυκλοφορίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Αρ. Πιστωτικής Κάρτας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Ημ/νία έκδοσης κάρτας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Ημ/νία Λήξης κάρτας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Αριθμός έκδοσης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Όνομα Κάρτας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Επιλέξτε δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Επιλογή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Τιμοκατάλογος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Περιγραφή Τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Ελ. Αρ. Ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Μεγ. Αρ. Ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Έλαχ. αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Μέγ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Ημέρες διαμονής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Ημερήσια χρέωση δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Αρ. Πελατών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Σύνολο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Προκαταβολή');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','Μία τουλάχιστον ημέρα από τις επιλεγμένες πέφτει σε αργία');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Λυπούμαστε, αλλά δεν βρέθηκαν τιμοκατάλογοι που να ταιριάζουν με τα κριτήρια που ζητήσατε. Παρακαλούμε προσπαθήστε ξανά, τροποποιώντας τον αριθμό ημερών της κράτησης, ή εναλλακτικά επικοινωνήστε τηλεφωνικά με το ξενοδοχείο για να κάνετε την κράτησή σας.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Προβολή παραμέτρων δωματίων & ιδιοκτησίας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Δωμάτια');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Υπηρεσίες Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Τύποι Δωματίων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Χαρακτηριστικά Ιδιοκτησίας');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Τύπος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Τύπος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Αριθμός');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Όροφος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Πρόσβαση ΑΜΕΑ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Μεγ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Χαρακτηριστικά');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Το Δωμάτιο προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Το Δωμάτιο ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Κάντε κλικ στον κωδ. Δωματίου για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Επεξεργασία αντικειμένου');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Χαρακτηριστικά Δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Περιγραφή Χαρακτηριστικού');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Κάντε κλικ στο χαρακτηριστικά δωματίου για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Το Χαρακτηριστικό δωματίου προσθέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Το Χαρακτηριστικό δωματίου ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Επεξεργασία αντικειμένου');


/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Συντομογραφία τύπου δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Περιγραφή τύπου δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Κάντε κλικ στην κατηγορία δωματίου για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Ο Τύπος δωματίου προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Ο Τύπος δωματίου ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Επεξεργασία αντικειμένου');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Όδός');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Πόλη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Περιοχή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Χώρα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','ΤΚ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Τηλ.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Φαξ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','e-mail');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Δικτυακός Τόπος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Χαρακτηριστικά');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Κάντε κλικ στον κωδ. ιδιοκτησίας για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Η Ιδιοκτησία προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Η Ιδιοκτησία ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Επεξεργασία αντικειμένου');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Χαρακτηριστικά Ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Συντόμογραφία χαρακτηριστικού ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Πλήρης περιγραφή χαρακτηριστικών ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Κάντε κλικ στον κωδ. Χαρακτηριστικών ιδιοκτησίας για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Το Χαρακτηριστικό ιδιοκτησίας προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Το Χαρακτηριστικό ιδιοκτησίας ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Επεξεργασία αντικειμένου');


/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Τιμοκατάλογοι');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Όνομα Τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Περιγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Ισχύει από');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Ισχύει εως');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Τιμή διανυκτέρευση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Ελ. Αρ. Ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Μεγ. Αρ. Ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Ελ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Μεγ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Αγνόησε PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Αργίες επιτρέπονται');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Σαβατοκύριακα επιτρέπονται');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Κάντε κλικ στο σύνδεσμο κειμένου για επεξεργασία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Ο Τιμοκατάλογος προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Ο Τιμοκατάλογος ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Επεξεργασία αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Αντιγραφή αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Διαγραφή τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Ο Τιμοκατάλογος διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Επεξεργασία τιμοκαταλόγου');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Αργίες');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Η τελευταία ημέρα της περιόδου αργίας θα πρέπει να είναι το τελευταίο βράδυ που σκοπεύετε να χρεώσετε τον πελάτη με χρέωση αργίας.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Επεξεργασία αργίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Περιγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Έναρξη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Λήξη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Νέα Αργία');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Κάντε κλικ στον σύνδεσμο κειμένου για επεξεργασία της Αργίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Η Αργία προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Η Αργία ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Επεξεργασία αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Αντιγραφή αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Διαγραφή αργίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Η Αργία διαγράφηκε');



/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Η Κράτηση αποθηκεύτηκε');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Παρακαλώ βεβαιωθείτε ότι η φόρμα έχει συμπληρωθεί σωστά');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Δικαίωμα κράτησης έχουν μόνο οι εγγεγραμμένοι χρήστες');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Παρακαλώ εγγραφείτε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Κρατήσεις εκτός σύνδεσης');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Κράτηση δωματίου');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Τα στοιχεία μου');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Οι κρατήσεις μου');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Διαχείριση');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Κράτηση δωματίου');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Check in πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Check out πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Κατάλογος κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Πρόσφατες κρατήσεις');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Αρχική Σελίδα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Διαχείριση πελατών');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Διαχείριση ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Διαχείριση τιμοκαταλόγων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Διαχείριση εκπτώσεων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Διαχείριση αργιών');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Παρακαλώ επιλέξτε τύπο δωματίου, την ημερομηνία άφιξης και τον αριθμό διανυκτερεύσεων. Τέλος, εισάγετε τον αριθμό ενηλίκων και παιδιών στο contingent.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Παρακαλώ εισάγετε τα στοιχεία σας. Η εισαγωγή στοιχείων απαιτείται από το σύστημα μόνο μία φορά. Το σύστημα θα σας αναγνωρίζει αυτόματα σε κάθε μελλοντική σας επίσκεψη.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Επιλέξτε το δωμάτιο που θέλετε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Εισάγετε τα στοιχεία σας. Η συμπλήρωση των όλων των πεδίων πλην του αρ. Κινητού τηλεφώνου είναι υποχρεωτική.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Έλεγχος διαθεσιμότητας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Θέλω αυτό το δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Επιλογή πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Επαλήθευση των στοιχείων σας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Επιλογή της συμφωνίας σας');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Επιλογή τύπων δωματίου');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Επίθετο');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Αρ. Οικίας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Οδός');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Πόλη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','ΤΚ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Αρ. Τηλ.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Κινητό');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Φαξ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Δεν υπάρχουν δωμάτια που να ικανοποιούν τα κριτήρια που θέσατε');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Εισαγωγή των στοιχείων σας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Επαλήθευση των στοιχείων σας');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Σας ευχαριστούμε που μας προτιμήσατε και σας ευχόμαστε καλή διαμονή.<br><br> <b>Σας ενημερώνουμε ότι η κράτηση επιβεβαιώνεται και είναι σε ισχύ από τη στιγμή που λάβετε το e-mail που θα σας αποστείλουμε. Εως τότε είναι μόνο προ-κράτηση.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Κράτηση έγινε για την ιδιοκτησία:');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Η κράτηση έγινε για το δωμάτιο:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Αρ. Ενηλίκων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Αρ. Παιδιών');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Αφιξη:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Αναχώρηση:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Αρ. Διανυκτερεύσεων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Κωδ. Πελάτη:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Όνομα:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Τηλ.: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Κινητό: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Τιμοκατάλογος: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Η αξία του συμβολαίου είναι: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Προκαταβολή: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Σας ζητούμε συγνώμη, αλλά απαιτείται να ενημερώσετε τα στοιχεία σας πριν προχωρήσουμε στην κράτηση. Κάντε κλικ στο σύνδεσμο Τα στοιχεία μου και συμπληρώστε τα στοιχεία διεύθυνσής σας. Ευχαριστούμε.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Ευχαριστούμε, τα στοιχεία σας αποθηκεύτηκαν.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Καλώς ήλθατε. Πριν κάνετε κράτηση δωματίου, παρακαλώ κάντε κλικ στο σύνδεσμο Τα στοιχεία μου για ενημέρωση');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Καλώς ήρθες');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Check in πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Επιλογή πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Ο Πελάτης έγινε check in');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Δεν υπάρχουν αφίξεις σήμερα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Check out πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Ο Πελάτης έγινε check out');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Επιβεβαίωση check out Πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Δεν υπάρχουν αναχωρήσεις σήμερα');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Αφίξεις πελατών σήμερα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Αναχωρήσεις πελατών σήμερα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Δεσμευμένα δωμάτια');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Νέες κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Προβολή χρήσης δωματίου από:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Supplements');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Τιμοκατάλογοι και νομίσματα');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Έκπτωση');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Πολιτική ακύρωσης κρατήσεων. ΔΕΝ ΕΧΕΙ ΥΛΟΠΟΙΗΘΕΙ');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Ανέβασμα αρχείων');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Τρέχουσα Ρύθμιση');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Επεξήγηση');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Κρατήσεις εκτός σύνδεσης;');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Αποσυνδέστε τις κρατήσεις αν θέλετε να μη γίνονται κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Υπάρχει έκπτωση;');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Η έκτπωση είναι για όσους επιθυμούν να προσφέρουν εκπτώσεις βάση του αριθμού πελατών σε ένα πάρτυ ή μία εκδήλωση. Επειδή λειτουργεί ανάλογα με τον αριθμό καλεσμένων, δεν συνίσταται η χρήση της σε περίπτωση που δεν χρεώνετε ανά άτομο ανά διανυκτέρευση.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Όριο Επιπέδου 1 ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Όριο Επιπέδου 2 ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Όριο Επιπέδου 3 ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Όριο Επιπέδου 4 ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Επίπεδο 1 αξία έκπτωσης');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Επίπεδο 2 αξία έκπτωσης');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Επίπεδο 3 αξία έκπτωσης');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Επίπεδο 4 αξία έκπτωσης');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Σuppliments ενός ατόμου');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Βεβαιωθείτε ότι έχει τη τιμή Ναι αν επιθυμείτε να χρεώσετε suppliments ενός ατόμου');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Χρέωση suppliment ενός ατόμου');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Cot suppliments.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Βεβαιωθείτε ότι έχει τη τιμή Ναι αν επιθυμείτε να χρεώσετε παροχή έξτρα cot');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Χρέωση Cot suppliment;');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Ποσοστό προκαταβολής;');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Η προκαταβολή είναι ποσοστό επί της συνολικής χρέωσης κράτησης; Αν όχι, τότε η προκαταβολή είναι φιξ τιμή');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Ποσό προκαταβολής');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','Ανά άτομο, ανά διανυκτέρευση');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Επιλέξτε ΝΑΙ, αν επιθυμείτε χρέωση ανά άτομο ανά διανυκτέρευση. Αν  επιλέξετε ΟΧΙ,  τότε η χρέωση υπολογίζεται ανά δωμάτιο ανά διανυκτέρευση');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Πολιτική Ακυρώσεων: Επιστροφή προκαταβολής;');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Επιλέξτε Ναι αν επιθυμείτε να επιστρέφονται οι προκαταβολές σε περίπτωση ακυρώσεων κρατήσεων στο μέλλον από τον πελάτη. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Το Αρχείο υπάρχει ήδη');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Τύποι αρχείων');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Προσδιορίστε τους τύπους αρχείων που επιτρέπονται για ανέβασμα. Χρησιμοποίησε λίστα με κόμματα με μικρούς χαρακτήρες. Παράδειγμα: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Μέγεθος αρχείου');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Μεγ. Μέγεθος αρχείου εικόνας (KB)');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Κάντε κλικ για ορισμό εβδομαδιαίας χρήσης δωματίου από σήμερα');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Κάντε κλικ σε δεσμευμένο δωμάτιο για προβολή κράτησης');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','Ή επίλέξτε την ημέρα που σας ενδιαφέρει');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Κρατήθηκε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Ελεύθερο');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Τα δωμάτια με μπλέ φόντο έχουν κρατηθεί, εντούτοις<br> αν ένα δωμάτιο έχει κόκκινο κείμενο, τότε δεν έχει γίνει πληρωμή προκαταβολής.<br> Όπου υπάρχει αστεράκι δίπλα Κρατημένο τότε ο πελάτης αναμένεται να αφιχθεί σήμερα.<br> Δωμάτια με κίτρινα γράμματα, είναι κατειλημμένα.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Επιστολή Επιβεβαίωσης Κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Αγαπητέ κύριε / κυρία');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Τιμή ανά διανυκτέρευση ανά δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Λεπτομέρειες κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Σας ευχαριστούμε που μας προτιμήσατε για την κράτηση σας στο');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Παρακάτω είναι μία περίληψη της κράτησής σας. Σε περίπτωση που τα στοιχεία σας είναι λάθος, παρακαλούμε επικοινωνήστε μαζί μας.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Το δωμάτιο σας θα κρατηθεί μέχρι την άφιξή σας, και το check in είναι μετά τις 12:00');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Σας περιμένουμε να σας υποδεχθούμε στον');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Σας ευχόμαστε να έχετε καλή διαμονή.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Τώρα δώστε σημασία στα ψιλά γράμματα.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Σας υπενθυμίζουμε ότι η κράτηση αποτελεί συμβόλαιο, έτσι αν για οποιοδήποτε λόγο επιθυμείτε να ακυρώσετε την κράτησή σας ή να μειώσετε το χρόνο διαμονής σας, πάλι θα πληρώσετε όλο το ποσόν.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Καμία έκπτωση δεν μπορεί να γίνει για γεύματα που δεν λήφθησαν ή για δωμάτια που δεν είναι κατειλημμένα για όλη τη περίοδο της κράτησης. Λαμβάνοντας αυτό υπόψιν σας, σας συνιστούμε ανεπιφύλακτα να χρησιμοποιήσετε υπηρεσία ασφάλειας διακοπών.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Χρέωση σε περίπτωση ακύρωσης και περικοπής</i> Σε περίπτωση ακύρωσης της κράτησής σας θα γίνεται εγγράφως.. Οι χρεώσεις ακύρωσης είναι:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Τριάντα ημέρες ή περισσότερο');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','Μόνο προκαταβολή.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 εως 30 ημέρες πριν');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% του συνολικού συμφωνηθέντος ποσού.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','14 ημέρες πριν και μέχρι την ημερομηνία άφιξης');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','100% του συμφωνηθέντος ποσού');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Συμπεριλαμβάνεται ΦΠΑ 19,00%. Αλλαγή ή αύξηση θα χρεωθεί.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Εκτύπωση επιστολής επιβεβαίωσης');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Εκτύπωση απόδειξης');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Αγαπητέ κύριε / κυρία');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Τιμή ανά διανυκτέρευση ανά δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Αριθμός διανυκτερεύσεων:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Αρχική Συμφωνία:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Τιμή ανά διανυκτέρευση:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Ολικό Σύνολο');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Λεπτομέρειες απόδειξης');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Σας Ευχαριστούμε ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Ελπίζουμε να σας ξαναδούμε σύντομα.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','Συμπεριλαμβάνεται ΦΠΑ 19,00%. Αλλαγή ή αύξηση θα χρεωθεί.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Εκτύπωση απόδειξης');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Προσθήκη υπηρεσίας στη χρέωση');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Περιγραφή υπηρεσίας');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Αξία υπηρεσίας');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Προσθήκη στη χρέωση');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Αλλες χρεώσεις:');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Αλλες χρεώσεις, συνολική αξία:');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Αντικείμενο προστέθηκε στην χρέωση');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Δεν βρέθηκε ξενοδοχείο</h1><br>Δεν μπορείς να συνεχίσεις. Επικοινώνησε με το διαχειριστή του συστήματος.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Επιλογή εικόνας για σύναψη');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Ανέβασμα εικόνας');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Ανέβασμα');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Ανέβασμα αρχείου');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Το αρχείο μπορεί να είναι τύπου  μεγ. Μέγεθος');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','Αποστολή νέου Αρχείου για Ανέβασμα');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Επιτρέπονται μόνο αρχεία τύπου:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Παρακαλώ Επιλέξτε αρχείο για ανέβασμα');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Το αρχείο πρέπει να περιέχει μόνο αλφαριθμητικούς χαρακτήρες και όχι κενά.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Το αρχείο έχει μέγεθος μεγαλύτερο από το όριο που έχει θέσει ο διαχειριστής του συστήματος.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Ένα αρχείο με το ίδιο όνομα υπάρχει ήδη. Δώστε ένα άλλο όνομα πριν το ανέβασμα.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Το αρχείο ανέβηκε επιτυχώς.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Το αρχείο ΔΕΝ ανέβηκε.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Το αρχείο ανέβηκε επιτυχώς.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Opt στο δίκτυο jomres;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Αν επιλέξετε να ενεργοποιήσετε τη δυνατότητα to opt την ιδιοκτησία σας στο jomres network, τότε θα συμπεριληφεί στη λίστα jomres.net. Σημειώστε ότι θα πρέπει να είναι ένα υπαρκτό ξενοδοχείο. Το δίκτυο Jomres.net δεν μπορεί να θεωρηθεί υπεύθυνο για την επιλογή σας αυτή. Θα πρέπει να είστε σίγουροι ότι όλα τα στοιχείας σας είνα έγκυρα.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','Ημερολόγιο JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','Γλώσσα Ημερολογίου JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Επιλέξτε τη γλώσσα που θα χρησιμοποιήσετε στο Ημερολόγιο JS. Σημείωση: μερικά μεταφράσεις ημερολογίου μπορεί να περιέχουν λάθη. Δείτε http://sourceforge.net/  για περισσότερες πληροφορίες');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','Ημερολόγιο JS αρχείο CSS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Επιλέξτε το αρχείο CSS που θα χρησιμοποιήσετε στο Ημερολόγιο JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Έλεγχος για εορτές / αργίες;');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Αν η επιλογή είναι ΝΑΙ, βεβαιωθείτε ότι υπάρχουν διαφορετικοί τιμοκατάλογοι/όροι συμφωνίας άλλες για τις αργίες / εορτές και άλλες για τις κανονικές ημέρες. Επίλεξε ΟΧΙ αν οι χρεώσεις αργιών και εορτών είναι ίδιες με τις χρεώσεις κανονικών ημερών.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Odds and τέλη');
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
define('_JOMRES_FILE_DELETE','Διαγραφή εικόνας');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Το Αρχείο διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Προβολή εισαγωγής πεδίου αναχώρησης');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Επιλέξτε ΝΑΙ αν θέλετε να προβάλλεται το πεδίο αναχώρησης. Έχει αναφερθεί ότι μερικοί φυλλομετρητές αδυνατούν να διαχειριστούν το ημερολόγιο JS. Προσωπικά επιλέγω ΟΧΙ επειδή πιστεύεω ότι το πεδίο στη συγκεκριμένη θέση είναι άσχημο.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Επιλέξτε την ιδιοκτησία για την οποία θέλετε πληροφορίες διαθεσιμότητας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Οποιοδήποτε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Ιδιοκτησία');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Προβολή sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','On για προβολή SQL');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Προβολή αποτελεσμάτων sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','On για προβολή δεδομένων SQL και var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Επιλογή θέματος');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','Ανω μενού css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','Επικεφαλίδες πινάκων css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Θέματα (Temπlates)');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Διαγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Αδύνατη η διαγραφή δωματίου. Υπάρχουν κρατήσεις για αυτό το δωμάτιο. Ακυρώστε τις κρατήσεις για το δωμάτιο και ξαναπροσπαθήστε.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Το Δωμάτιο διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Διαγραφή χαρακτηριστικού δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Αδύνατη διαγραφή χαρακτηριστικού δωματίου επειδή γίνεται χρήση του σε άλλα δωμάτια. Διαγράψτε το πρώτα από τα δωμάτια που εμφανίζεται και ξαναπροσπαθήστε.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Το Χαρακτηριστικό δωματίου διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Διαγραφή χαρακτηριστικού ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Αδύνατη διαγραφή χαρακτηριστικού ιδιοκτησίας επειδή γίνεται χρήση του σε υπάρχουσα ιδιοκτησία. Διαγράψτε το πρώτα από την ιδιοκτησία που εμφανίζεται και ξαναπροσπαθήστε.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Το Χαρακτηριστικό ιδιοκτησίας διαγράφηκε');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Διαγραφή τύπου δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Αδύνατη διαγραφή τύπου δωματίου επειδή γίνεται χρήση του σε δωμάτιο. Πρώτα αλλάξτε τον τύπο δωματίου και ξαναπροσπαθήστε.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Αδύνατη διαγραφή τύπου δωματίου επειδή γίνεται χρήση του σε τιμοκατάλογο. Πρώτα αναθέστε τον τιμοκατάλογο σε άλλον τύπο δωματίου και ξαναπροσπαθήστε.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Το Χαρακτηριστικό δωματίου διαγράφηκε');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Διαγραφή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Αδύνατη διαγραφή ιδιοκτησίας, υπάρχουν δεδομένα στον πίνακα:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED',' Η Ιδιοκτησία διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Δεν έχετε δικαίωμα διαγραφής της ιδιοκτησίας.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Επιλογή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','Το δωμάτιο με ποια ιδιοκτησία θα συσχετίζεται;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Επιλογή μίας ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Πρέπει να επιλέξετε ιδιοκτησία');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Μικρό πλάτος μικρογραφίας');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Μεσαίο πλάτος μικρογραφίας');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Πλάτος πλήρους εικόνας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Κλικ για χάρτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Περιγραφή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Χρόνοι check in');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Δραστηριότητες περιοχής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Κατευθύνσεις όταν έρθετε οδηγώντας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Αεροδρόμια');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Αλλα μεταφορικά μέσα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Policies & disclaimers');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Το δικό σου κλειδί Jomres.net');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Όταν είστε έτοιμοι να δημοσιεύσετε το δικτυακό σας τόπο, επισκεφθείτε το  <a href="http://www.jomres.net" target="_blank">Jomres.net</a> για να αποκτήσετε το δικό σας κλειδί ιδιοκτησίας. Με το κλειδί αυτό μπορείτε να εγγραφείτε στο Jomres Network, εξασφαλίζοντάς τη μεγαλύτερη δυνατή παρουσία της επιχείρησής σας.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Οι ιδιοκτησίες μας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Διεύθυνση');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Οι επισκέπτες μπορούν να κάνουν κράτηση online');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Επιλέξτε ΝΑΙ ώστε οι επισκέπτες να μπορούν να κάνουν κρατήσεις online');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Οι κρατήσεις είναι για συγκεκριμένη περίοδο');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Εάν επιλέξτε ΝΑΙ, οι κρατήσεις θα γίνονται για συγκεκριμένη περίοδο. Εάν επιλέξτε ΟΧΙ, βεβαιωθείτε ότι η προκαθορισμένη ημερομηνία άφιξης δεν είναι ΝΑΙ (εκτός κι αν επιθυμείτε να υποχρεώνετε τους πελάτες να κάνουν άφιξη μία συγκεκριμένη ημέρα) διαφορετικά δεν θα υπάρχουν πολλά links στο ημερολόγιο διαθεσιμότητας.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Περίοδος κράτησης:');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Κράτηση δωματίων');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Περίγραμμα πίνακα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Αλλαγή χρώματος του περιγράμματος πίνακα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Φόντο πίνακα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Αλλαγή χρώματος φόντου πίνακα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Πλάτος πίνακα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Μέγιστη περίοδος, π.χ. 3x7 περίοδοι κρατήσεων = 21 ημέρες');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Απαιτείται ο αριθμός επισκεπτών;');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Επιλέξτε ΝΑΙ για προβολή των πεδίων αριθμού επισκεπτών στη φόρμα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Είναι διαμέρισμα/αγρόκτημα/βίλα;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Π.χ. ενοικίαση μίας ιδιοκτησίας, παρά των δωματίων της ιδιοκτησίας. Αν συμβαίνει αυτό, τότε κάθε -μοναδικό- δωμάτιο θα πρέπει να αντιστοιχεί σε κάθε ιδιοκτησία.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Μεγ. Αρ. Ενηλίκων');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Ορισμός Μεγ. Αρ. Ενηλίκων για φόρμα κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Μεγ. Αρ. Παιδιών');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Ορισμός Μεγ. Αρ. Παιδιών για φόρμα κρατήσεων. Αν μηδέν (0) τότε οι επιλογές που αφορούν τα παιδιά δεν θα εμφανίζονται.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Συνέχεια');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Ανασκόπηση κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Επιβεβαίωση κράτησης');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Εκπτώσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Προσοχή...</FONT></h1><BR><B>Πρέπει να αλλάξεις τις ιδιότητες του αρχείου ρυθμίσεων site_config.php σε chmod 777 ώστε να γίνει είναι δυνατή η τροποποίηση των ρυθμίσεων της εφαρμογής</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Δευτέρα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Τρίτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Τετάρτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Πέμπτη');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Παρασκευή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Σάββατο');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Κυριακή');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Δευ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Τρι');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Τετ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Πεμ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Παρ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','Σαβ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Κυρ');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Ημερολόγιο Διαθεσιμότητας');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Γραμματοσειρά για όλα τα κείμενα');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Μέγεθος γραμματοσειράς για όλα τα κείμενα');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Ύψος κελιού');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Πλάτος κελιού');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Χρώμα γραμματοσειράς τρέχουσας ημέρας');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Χρώμα γραμματοσειράς ημερών προβολής μήνα');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Χρώμα γραμματοσειράς ημερών εκτός προβολής μήνα');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Χρώμα φόντου κελιού ημερών όταν υπάρχει διαθέσιμη ιδιοκτησία/δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Χρώμα φόντου ημερών εκτός προβολής μήνα');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Χρώμα φόντου δεσμευμένων ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Χρώμα φόντου εκκρεμών κρατήσεων (κράτησεις για τις οποίες δεν έχει γίνει καμία κατάθεση)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Χρώμα φόντου παρελθόντων ημερών');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Χρώμα κλειδιού:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Κατηλειμμένο/Μη διαθέσιμο');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Διαθέσιμο για κράτηση');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Εκκρεμείς Κρατήσεις');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Προκαθορισμένη ημέρα άφιξης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Μόνο για δικτυακούς τόπους που προσφέρουν κρατήσεις συγκεκριμένης περιόδου. Επιλέξτε την ημέρα που πρέπει να αρχίζει η άφιξη.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Προκαθορισμένη ημέρα άφιξης');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Περίοδος διαμονής ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Προβολή ημερολογίων διαθεσιμότητας;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','ΝΑΙ για προβολή ημερολογίων διαθεσιμότητας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Επιβεβαίωση επιλογής');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Διαθεσιμότητα');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Πράγματα που πρέπει να κάνετε:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Ελέγξτε τις επιλεγμένες ημέρες');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Ελέγξτε τους αριθμούς επισκεπτών');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Καταχωρήστε τα προσωπικά σας στοιχεία');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Επιλέξτε ένα δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Ελέγξτε το επιλεγμένο δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Ελέγξτε την παραγγελία. Όταν είστε ικανοποιημένοι, παρακαλώ επιβεβαιώστε τη κράτηση');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Κλικ σε ελεύθερη ημέρα για προβολή φόρμας κρατήσεων');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Μαύρες κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Όχι μαύρες κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Νέα Μαύρη κράτηση');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Μαύρη κράτηση των δωματίων αυτών');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Διαγραφή πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Ο Πελάτης διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Αδύνατη διαγραφή πελάτη καθώς υπάρχουν ήδη κρατήσεις στο όνομά του. Ακυρώστε τις κρατήσεις του και προσπαθήστε ξανά.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Ο πίνακας Διαχείρισης να δείχνει προβολή λωρίδας (tape view)');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Επιλέξτε ΝΑΙ για προβολή λωρίδας εβδομαδιαίου ημερολογίου, σε αντίθεση με μηνιαία προβολή διαθεσιμότητας.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Πραγματικό κόστος δωματίου:');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Η διεύθυνση e-mail δεν είναι έγκυρη');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Η αποστολή του e-mail έγινε από:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Γεια');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Σας ευχαριστούμε που μας προτιμήσατε για την κράτηση σας');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Ακολουθεί περίληψη της κράτησής σας:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Είμαστε στη διάθεσή σας να σας εξυπηρετήσουμε και να λύσουμε απορίες που μπορεί να έχετε σχετικά με την υπηρεσία κρατήσεων ή όποια άλλη υπηρεσία μας. Απλά, επικοινωνήστε μαζί μας.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Ο αριθμός τηλεφώνου μας είναι:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Εναλλακτικά μπορείτε να επικοινωνήσετε μαζί μας μέσω e-mail');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Κάπνισμα');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Αδιάφορο');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Μορφή εξόδου ημερολογίου');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Επιτρέπει στο χρήστη να αλλάξει το τρόπο προβολής ημερομηνιών μέσα από την εφαρμογή');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Μορφή εισόδου ημερολογίου');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Επιτρέπει στο χρήστη να αλλάξει το τρόπο εισαγωγής ημερομηνιών μέσα από την εφαρμογή');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Σε περίπτωση κλειστής περιόδου κρατήσεων να επιτρέπονται μικρές διακοπές');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Διάστημα μικρής διακοπής');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Δημοσιεύθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Ρυθμίσεις');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Χρήση paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Χρήση Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Απαιτείται λογαριασμός PayPal Developer');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Σημείωση: Για να χρησιμοποιήσεις την υπηρεσία paypal πρέπει να πας στο λογαριασμό σου paypal και να ενεργοποιήσεις το Autoreturn. (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Σφάλμα, το paypal email δεν απεστάλη');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Έλεγχος Χρέωσης Συμφωνίας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Να μη γίνεται έλεγχος Χρέωσης Συμφωνίας');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Ημέρα');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Ώρα');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Όνομα χρήστη');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Διεργασία');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Δικαιώματα ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Προβολή λεπτομερειών');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS','');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Οτιδήποτε</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Φίλτρο ημερομηνίας');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Φίλτρο χρήστη');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Φίλτρο διεργασίας');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Κατάσταση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Αναμονή άφιξης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Αφιξη σήμερα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Τρέχων ένοικος');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Αναχωρεί σήμερα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Καθυστερημένη Αναχώρηση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Δεν έχει αφιχθεί');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Φίλτρο');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Αγνωστος χρήστης');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Το Δωμάτιο καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Το Δωμάτιο ανανεώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Το Δωμάτιο διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Το Χαρακτηριστικό δωματίου καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Το Χαρακτηριστικό δωματίου ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Το Χαρακτηριστικό δωματίου διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Ο τύπος δωματίου καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Ο τύπος δωματίου ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Ο τύπος δωματίου διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Η Ιδιοκτησία καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Η Ιδιοκτησία ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Η Ιδιοκτησία διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Το Χαρακτηριστικό ιδιοκτησίας καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Το Χαρακτηριστικό ιδιοκτησίας ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Το Χαρακτηριστικό ιδιοκτησίας διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Οι παράμετροι ιδιοκτησίας διορθώθηκαν');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Η Ιδιοκτησία δημοσιεύτηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Ο τιμοκατάλογος καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Ο τιμοκατάλογος ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Ο τιμοκατάλογος διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Η Αργία καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Η Αργία ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Η Αργία διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Χρέωση πρόσθετης υπηρεσίας');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Η Κράτηση ακυρώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Ο πελάτης έγινε check in');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Ο πελάτης έγινε check out');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Λεπτομέρειες cc ενημερώθηκαν');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Κατάθεση προκαταβολής εισήχθη');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Ο πελάτης καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Ο πελάτης ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Οπελάτης διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Νέα εικόνα ιδιοκτησίας ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Διαφορετική εικόνα ιδιοκτησίας ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Η Εικόνα διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Νέα εικόνα δωματίου ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Διαφορετική εικόνα δωματίου ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Νέα εικόνα πόρων/πηγής ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Διαφορετική εικόνα πόρων/πηγής ανέβηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Έγινε κράτηση δωματίου');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Το extra καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Το extra ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Το extra διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Το extra δημοσιεύτηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Εισήχθη μαύρη κράτηση.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Διαγράφηκε μαύρη κράτηση.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Extras');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Επεξεργασία extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Περιγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Όνομα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Τιμή');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Νέο extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Κλικ στο σύνδεσμο διόρθωσης κειμένου extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Extra προστέθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Extra ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Επεξεργασία αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Αντίγραφο αντικειμένου');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Διαγραφή extra');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Extra διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Διαχείριση extras');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Προβολή extras κατά το χρόνο κράτησης;');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Επιλέξτε ΝΑΙ για προβολή extras που πιθανόν επιθυμείτε να προσφέρετε στον πελάτη');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Προαιρετικά extras.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Επιλογή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Αναστροφή επιλογής/επιλογή όλων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Ημέρα έναρξης μαύρης κράτησης');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Ημερομηνία υπηρεσίας αναφορών');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Διαχείριση μαύρων κρατήσεων');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Ένα ή περισσότερα από τα επιλεγμένα δωμάτια είναι ήδη κρατημένα. Αν επιθυμείτε να κάνετε μαύρη κράτηση στα δωμάτια αυτά θα πρέπει πρώτα να ακυρώσετε τις κρατήσεις που τα αφορούν.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Υπήρξε σφάλμα κατά τη διαδικασία κράτησης των δωματίων που επιλέξατε, ένα ή περισσότερα δωμάτια είναι ήδη κρατημένα.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Δωμάτια συμπεριλαμβάνονται στις μαύρες κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Διαγραφή μαύρης κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Προβολή μαύρης κράτησης');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Δεν υπάρχουν μαύρες κρατήσεις για προβολή');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Αριθμός αστεριών');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Προβολή επιλογής καπνίσματος;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Επιλέξτε ΝΑΙ για προβολή επιλογής καπνίσματος.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Επαναφορά');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Πληρωμή Paypal σε κατάσταση Εκκρεμής. Μόλις το ξενοδοχείο επιβεβαιώσει την απόδειξη πληρωμής η κράτηση θα αλλάξει σε Οριστική.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Κράτηση ακυρώθηκε');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Αναζήτηση εδώ για:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES','Αναζήτηση');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Προβολή πληροφοριών αποσφαλμάτωσης paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Προβολή ονομάτων δωματίων;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Επιλέξτε ΝΑΙ για προβολή ονομάτων δωματίων;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Προβολή τύπων δωματίων;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Επιλογή ΝΑΙ για προβολή τύπων δωματίων;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Προεπιλεγμένη τιμή καπνίσματος');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Προσοχή: Αν η προεπιλεγμένη τιμή καπνίσματος είναι ΝΑΙ και σε όλα τα δωμάτια η τιμή είναι ΟΧΙ, τότε δεν θα εμφανίζεται κανένα δωμάτιο στη λίστα κρατήσεων.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Σύμβολο νομίσματος');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Π.χ. &euro;&#8364; Παρακαλώ σημειώστε πως πρέπει να χρησιμοποιήσετε τις HTML οντότητες για το σύμβολο που επιθυμείτε. Για λίστα των οντοτήτων αυτών παρακαλώ επισκεφτείτε το <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Κωδικός συμβόλου νομίσματος');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Πχ EUR. Απαιτείται αν πρόκειται να χρησιμοποιήσεις paypal. Για λίστα κωδικών νομισμάτων <a href="http://www.xe.com/iso4217.htm">XE.com</a>');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Κλικ για περισσότερες πληροφορίες');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Προσοχή...Έχετε εισέλθει στο σύστημα ως διαχειριστής με δικαιώματα για όλες τις ιδιοκτησίες, Πιθανόν να προκαλέσετε προβλήματα κατά την εργασία σας με την εφαρμογή.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Να περιορίζονται οι ημερομηνίες που θα επιτρέπονται κρατήσεις;');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Επιλέξτε ΝΑΙ αν θέλετε να περιορίζετε τις ημερομηνίες πριν από τις οποίες να μην επιτρέπονται οι κρατήσεις (χρησιμοποιήστε το επόμενο πεδίο σε ημέρες).Εάν επιλέξτε ΝΑΙ τότε όταν ο χρήστης προσπαθεί να κάνει κράτηση περισσότερες από ν μέρες πριν, η ημερομηνία άφιξης θα επανέρχεται στη σημερινή');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Οι μέρες πριν από τις οποίες επιτρέπονται κρατήσεις είναι:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>ΣΗΜΕΙΩΣΗ: Σας συστήνουμε να χρησιμοποιήσετε μόνο ένα από τους δύο τρόπους υπολογισμού φόρου ανάλογα με τη περίπτωσή σας. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Φόρος');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Φόρος δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Σχεδιασμένο για την Αμερικάνικη αγορά. Παρακάτω είναι οι φόροι που πρέπει να πληρώσει ο πελάτης. Μπορεί να γίνει χρέωση προκαθορισμένη ή/και ποσοστιαία. Οι φόροι έχουν εφαρμογή στη τιμή δωματίου.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Προκαθορισμένο ποσό φόρου');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Ποσοστιαία τιμή φόρου');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Φόρος');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Για όποια αγορά εφαρμόζει σταθερή τιμή φόρου, πχ ΦΠΑ για την Ελλάδα. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Ποσοστιαία τιμή φόρου');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Αρχειοθέτηση όλων των εγγραφών');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','Εγγραφές αρχειοθετήθηκαν');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Auditer archived audit records');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Οι Τιμοκατάλογοί μας');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Όνομα τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Περιγραφή τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Τύπος δωματίου');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Έγκυρο από');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Έγκυρο εως');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','Ανά άτομο ανά διανυκτέρευση');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','Ανά διανυκτέρευση');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Δεν συμπεριλαμβάνονται Σαββατοκύριακα');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Ελάχιστες ημέρες');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Μέγιστες ημέρες');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Ελ. Αρ. Ατόμων');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Μεγ. Αρ. Ατόμων');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Προεπισκόπηση');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Κατάσταση Επεξεργασίας ενεργή;');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Τρέχων κείμενο');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Νέο κείμενο');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Κείμενο ενημερώθηκε.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Επεξεργασία γλώσσας');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Προβολή μη αρχειοθετημένων εγγραφών');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Υπάρχουν περισσότερες από 200 εγγραφές στον ενεργό έλεγχο χρέωσης, κατά συνέπεια δεν είναι δυνατή η εμφάνιση των δραστηριοτήτων SQL που εκτελέστηκαν. Αν επιθυμείτε να δείτε τις δραστηριότητες SQL, θα πρέπει να αναλύσετε το πίνακα ελέγχου απευθείας. Αν θέλετε να ελέγχετε συχνά τη βάση δεδομένων SQL, σας συστήνουμε να κάνετε τακτικά αρχειοθέτηση.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Τύπος ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Λίστα τύπων ιδιοκτησιών');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Επεξεργασία τύπου ιδιοκτησιών');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Τύπος ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Περιγραφή τύπου ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Ο Τύπος ιδιοκτησίας αποθηκεύτηκε');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Αδύνατον να διαγραφεί ο τύπος ιδιοκτησίας. Ο επιλεγμένος τύπος ιδιοκτησίας είναι συνδεδεμένος με μία ή περισσότερες ιδιοκτησίες. Αντιστοιχίστε πρώτα τις συνδεδεμένες ιδιοκτησίες σε νέο τύπο και στη συνέχεια προσπαθήστε ξανα.');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Τύπος/οι ιδιοκτησίας διαγράφηκαν');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Σφάλμα, η ιδιοκτησία δεν έχει δωμάτια.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Σφάλμα, η ιδιοκτησία δεν έχει τιμοκαταλόγους.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Σφάλμα, η ιδιοκτησία δεν έχει τύπους δωματίων.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Αλλαγή ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Υπενθύμιση πληρωμής');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Η συναλλαγή μέσω paypal ολοκληρώθηκε επιτυχών, η απόδειξη της συναλλαγής απεστάλη με ηλεκτρονικό ταχυδρομείο. Μπορείτε να μπείτε στο λογαριασμό σας paypal για να δείτε λεπτομέρειες σχετικά με τη συναλλαγή. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Καμία extra χρέωση');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Προκαταβολή');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Συνολικό ποσό');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Πληρωθέν ποσό κατά τη κράτηση');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Χρησιμοποιήστε την επιλογή αυτή για το ποια θα είναι η χρέωση όταν γίνεται κράτηση. Επιλέξτε προκαταβολή ή συνολικό ποσό.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','Αριθμός μηνών που θα προβάλονται στο ημερολόγιο');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Στη διαθεσιμότητα δωματίων, πόσοι μήνες θα εμφανίζονται στο ημερολόγιο;');

/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Υπογραφή εκ μέρους του');


// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Πύλες');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','’κυρο');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Παρακαλώ επιλέξτε τα δωμάτια που θέλετε να θεωρούνται εκτός λειτουργίας, και τις αντίστοιχες ημερομηνίες. <br>Αν ένα δωμάτιο δεν είναι τσεκαρισμένο, δεν μπορεί να συμπεριληφθεί στη μαύρη κράτηση έως ότου όλες οι κρατήσεις έχουν ολοκληρωθεί/ακυρωθεί.<br/> Όταμ επιλέξετε τις κατάλληλες ημερομηνίες, κάντε κλικ στο μπλέ "Εφαρμογή" κουμπί για να ξαναελέγξετε τη διαθεσιμότητα του δωματίου. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Φαίνεται πως ο ιστοχώρος σας έχει αποσυνδέσει λόγω αδράνειας</b> Παρακαλώ δοκιμάστε να εισέλθετε στο σύστημα ξανά.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Αιτία');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Να χρησιμοποιηθούν πύλες πληρωμών;?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Επιλέξτε ΝΑΙ αν θέλετε να χρησιμοποιούνται online πύλες πληρωμών. <b>Σημείωση:</b> Έτσι δεν απενεργοποιείται ο υπολογισμός προκαταβολής κατά τη διαδικασία κράτησης. Για να τοναπενεργοποιήσετε τροποποιήστε το template που δείχνει τα δωμάτια και αφαιρέστε τα στοιχεία που αναφέρονται στις προκαταβολές.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Παρακαλώ επιλέξτε τρόπο πληρωμής.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Ενεργοποιημένες πύλες;');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Οι ρυθμίσεις του plugin τροποποιήθηκαν');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Καταχωρήθηκαν ρυθμίσεις στο plugin');
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
define('_JOMRES_COM_ENCRYPTION','Κρυπτογράφηση');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Να χρησιμοποιηθεί κρυπτογράφηση mCrypt;');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Επιλέξτε ΝΑΙ αν έχετε εγκαταστήσει mCrypt στην PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Κλειδί κρυπτογράφησης');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Κατάσταση κρυπτογράφησης');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Αλγόριθμος κρυπτογράφησης');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Είδατε την πιστωτική κάρτα');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Η πιστωτική κάρτα ανανεώθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Διόρθωση Πιστωτικής');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Διόρθωση μεγέθους εικονιδίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Μετρημένο σε pixels.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Μαζικό ανέβασμα φωτογραφιών ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Οι φωτογραφίες υπάρχουν ήδη στον κατάλογο');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Slideshows');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Να εμφανίζονται οι σύνδεσμοι σε slideshows?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Να εμφανίζονται τα slideshow εσωτερικά (inline);');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Επιλέξτε ΝΑΙ αν θέλετε να εμφανίζονται τα slideshow εσωτερικά με τις λεπτομέρειες της ιδιοκτησίας.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Πλήρες μέγεθος Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Ύψος Μικρογραφιών Slideshow');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Λυπούμαστε, αλλά δεν υπάρχουν διαθέσιμες φωτογραφίες της ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Πλάτος αναδυόμενου παραθύρου (Popup window)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Ύψος αναδυόμενου παραθύρου (Popup window)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Τοποθεσία Εικόνας');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Αλλάξτε το μόνο αν χρειάζετε οι εικόνες της εφαρμογής να βρίσκονται αλλού. Η προεπιλεγμένη τοποθεσία είναι \'/images/stories/jomres/\' σε σχέση με τον αρχικό κατάλογο του joomla.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Να εμφανίζονται σύνδεσμοι στους τιμοκαταλόγους;');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Να επιτρέπονται αναδυόμενα παράθυρα (Popups);');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Εάν επιλέξτε ΟΧΙ τότε οι σύνδεσμοι που κανονικά θα άνοιγαν με ανάδυση (popup) θα ανοίξουν εσωτερικά (inline). ΠΕΙΡΑΜΑΤΙΚΟ! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Μαζικό ανέβασμα εικόνων');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Χρησιμοποιήστε αυτή τη φόρμα για να ανεβάζετε πολλές εικόνες της ιδιοκτησίας ταυτόχρονα.<br/><b>Σημειώστε</b> πως εικόνες με το ίδιο όνομα θα διαγραφούν. Επίσης σημειώστε πως με τη φόρμα δεν ανεβάζετε συγκεκριμένες εικόνες που αφορούν δωμάτια. Πρέπει να ανεβάσετε τις εικόνες αυτές από το Τμήμα Διαχείρισης ιδιοκτησίας.<br/><b>Σημειώστε επίσης πως</b> οι εικόνες που ανεβάζονται εδώ αποθηκεύονται στο φάκελο /images/stories/jomres/*property_uid* . Εάν ο φάκελος δεν υπάρχει δημιουργείται εκτός βέβαια και αν ορίσετε διαφορετικό φάκελο κατά τη ρύθμιση παραμέτρων.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Διάφορα');
/**
* @ignore
*/
define('_JOMRES_A','Παράμετροι ιστοχώρου');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Να χρησιμοποιούνται καθολικά χαρακτηριστικά ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Επιλέξτε ΝΑΙ αν θέλετε όλες οι ιδιοκτησίες να χρησιμοποιούν τα χαρακτηριστικά που ορίζει ο διαχειριστής.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Για να αναθέσετε εικόνα στο χαρακτηριστικό πρέπει πρώτα να ανεβάσετε τις εικόνες των χαρακτηριστικών ιδιοκτησίας στο φάκελο /images/stories/jomres/pfeatures/ . ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Εικονίδιο');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Επιέξτε το plugin αναζήτησης που θέλετε να χρησιμοποιήσετε.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Λυπούμαστε αλλά η αναζήτησή σας δεν έφερε αποτελέσματα. Παρακαλώ αλλάξτε τα κριτήρια και δοκιμάστε ξανά.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Είστε σίγουροι;');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Κράτηση Ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Αριθμός ασφαλείας');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Να εμφανίζονται οι τιμοκατάλογοι εσωτερικά;');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Διεύθυνση');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Λεπτομέρειες');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Κάντε κλικ για Δωμάτια και διαθεσιμότητα');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Πληροφορίες Τιμοκαταλόγων');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Πληροφορίες Διεύθυνσης κάτω από αυτό το σύνδεσμο');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Λεπτομέρειες για την ιδιοκτησία κάτω από αυτό το σύνδεσμο');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Δωμάτια και διαθεσιμότητα κάτω από αυτό το σύνδεσμο');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Πληροφορίες τιμοκαταλόγων κάτω από αυτό το σύνδεσμο');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Φιξ τιμοκατάλογοι');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Μέσοι όροι');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Επιλέξτε το μοντέλο χρέωσης που επιθυμείτε');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Έχετε δύο επιλογές για τον υπολογισμό των χρεώσεων. Η πρώτη, η μέθοδος των φιξ τιμοκαταλόγων, σας επιτρέπει να παρέχετε διαφορετικούς τιμοκαταλόγους στους πελάτες και οι όροι συμφωνίας είναι οι ίδιοι για όλη την κράτηση. Αυτό είναι χρήσιμο αν θέλετε να παρέχετε διαφορετικά πακέτα όρων συμφωνίας π.χ. RR BB HB FB. Επιλέξτε τους μέσους όρους εάν θέλετε να ρυθμίσετε τις τιμές ανάλογα με τις ημερομηνίες. Η εφαρμογή θα βρει τους τιμοκαταλόγους που αφορούν κάθε μέρα της κράτησης, θα τους προσθέσει και θα επιστρέψει το μέσο όρο για όλη την περίοδο");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Να χρησιμοποιηθεί το Jomres portal;');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Επιλέξτε ΝΑΙ αν η εφαρμογή θα χρησιμοποιηθεί σε συνδυασμό με το Jomres portal');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Να εμφανίζεται η εισαγωγή ημερομηνίας αναχώρισης;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Επιλέξτε ΟΧΙ αν δεν θέλετε να εμφανίζεται το πεδίο ημερομηνίας αναχώρισης. Χρησιμοποιείστε το μόνο αν είστε σίγουροι καθώς η ημερομηνία αναχώρισης στις κρατήσεις θα είναι πάντα η επόμενη της άφιξης.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Όριο περιγραφής');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Περιορίζει τον αριθμό χαρακτήρων που εμφανίζεται στον κατάλογο ιδιοκτησιών.");

// v1.4g
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Πολλαπλασιαστής ημερήσιας χρέωσης');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Επιτρέπει το χρήστη να καταχωρήσει έναν πολλαπλασιαστή για την ημερήσια χρέωση που επιστρέφεται στην φόρμα κράτησης κατά τη διάρκεια της καταχώρισής της  (χρήσιμο π.χ. αν θέλετε να δείξετε την εβδομαδιαία χρέωση)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Πλάτος αναδυόμενου παραθύρου Slideshow');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Ύψος αναδυόμενου παραθύρου Slideshow');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Ενημέρωση');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Πατήστε το κουμπί Ενημέρωση για να ελέγξετε τη διαθεσιμότητα');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Να χρησιμοποιείται διάταξη date() ;');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Επιλέξτε ΝΑΙ αν θέλετε  οι ημερομηνίες να είναι σύμφωνα με τη μορφή date() (Δείτε <a href="http://www.php.net/manual/en/function.date.php">Εδώ</a>). Επιλέξτε ΟΧΙ για να χρησιμοποιήσετε τη μορφή strftime() (δείτε <a href="http://www.php.net/manual/en/function.strftime.php">εδώ</a> π.χ.. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Κάντε κλικ για δημοσίευση');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Κάντε κλικ για να ακυρωθεί η δημοσίευση');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Παρακαλώ συμπληρώστε τα ακόλουθα πεδία: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Ευχαριστούμε.');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Χρώμα πλαισίου σφάλματος εισαγωγής');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Χρώμα φόντου σφάλματος εισαγωγής');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Προεπιλεγμένη χώρα στην φόρμα κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Να εμφανίζεται η βοήθεια ιστοχώρου;?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Επιλέξτε ΝΑΙ αν θέλετε να εμφανίζεται το κείμενο βοήθειας πάνω από την μπάρα αναζήτησης.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Καταχωρήστε εδώ το κείμενο βοήθειας κρατήσεων.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Τα στοιχεία που είναι σημειωμένα με κόκκινο αστεράκι είναι απαραίτητα.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Οι χρήστες μπορούν να καταχωρούν τις ιδιοκτησίες τους;');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Επιλέξτε ΝΑΙ αν θέλετε οι χρήστες να μπορούν να καταχωρούν τις ιδιοκτησίες τους χωρίς την παρέμβαση του διαχειριστή.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Παρακαλώ δώστε χώρα και περιοχή της ιδιοκτησίας σας.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Παρακαλώ συμπληρώστε τις λεπτομέρειες της ιδιοκτησίας σας.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Τα στοιχεία που είναι σημειωμένα με κόκκινο αστεράκι είναι απαραίτητα.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Η ιδιοκτησία καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Λυπούμαστε αλλά δεν μπορείτε να καταχωρήστε ιδιοκτησία στο σύστημα. Πρέπει να είστε συνδεδεμένος και εγγεγραμμένος χρήστης και δεν πρέπει να έχετε ήδη δημιουργήσει μια ιδιοκτησία.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Δημιουργήθηκε η ιδιοκτησία: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Για τον χρήστη: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Να γίνεται ημερήσια χρέωση;');
/**
* @ignore
*/
define('_JOMRES_DAILY',' Ανά ημέρα');

// v1.4i

/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Το ημερολόγιο να δείχνει από την αρχή του έτους;');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Το ημερολόγιο διαθεσιμότητας δείχνει από την αρχή του τρέχοντος έτους.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Να φαίνονται λεπτομερείς πληροφορίες για τα δωμάτια;');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Αν επιλέξετε ΟΧΙ η εφαρμογή δε θα επιχειρεί να δείχνει όλη τη διαθεσιμότητα κατά τη διάρκεια των κρατήσεων, απεναντίας απλά θα πληροφορεί ότι υπάρχει διαθεσιμότητα.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Αριθμός διαθέσιμων δωματίων');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Παρακαλώ επιλέξτε τον αριθμό και τον τύπο των δωματίων που θέλετε.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Αριθμός που θέλετε');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Πίσω στις λεπτομέρειες ιδιοκτησίας');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Τύποι δωματίων');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Να χρησιμοποιούνται τα metadata της εφαρμογής;');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Εάν επιλέξετε ΝΑΙ τότε η εφαρμογή θα χρησιμοποιεί κείμενο που επαναλαμβάνεται στις σελίδες περιγραφής ιδιοκτησίας και στις σελίδες καταλόγου ιδιοκτησιών για να παράγει metadata. Διαχωρίστε τις λέξεις με κενά.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','’κυρες λέξεις');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Αυτές είναι άκυρες λέξεις δηλαδή λέξεις που <i>δεν</i> θέλετε να εμφανίζονται στα metadata.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','’λλα στοιχεία για διαγραφή');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Είναι στοιχεία που πρέπει να απομακρυνθούν από τα metadata. Π.χ. σημεία στίξης κ.α.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Συχνότητα');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Ο αριθμός των φορών που μια λέξη πρέπει να επαναλαμβάνεται ώστε να συμπεριληφθεί στα metadata.');


// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Χρησιμοποιείστε αυτήν τη φόρμα για να καταχωρήσετε την κράτησή σας. Φέρτε τον δείκτη του ποντικιού πάνω από τα "i" για περισσότερες πληροφορίες για τη στήλη. Τροποποιήστε τα στοιχεία της κράτησής σας όπως ημερομηνίες άφιξης και αναχώρησης και αριθμό ατόμων και επιλέξτε το/τα δωμάτιο/α που θέλετε από τη λίστα των διαθέσιμων. Κάντε κλικ σε οποιοδήποτε διαθέσιμο δωμάτιο και αυτό θα προστεθεί στην κράτησή σας. Όταν τελειώσετε, μπορείτε να προσθέσετε όποιες πρόσθετες υπηρεσίες χρειάζεστε και να συμπληρώσετε τα στοιχεία της διεύθυνσής σας. Όταν η φόρμα έχει αρκετές πληροφορίες θα εμφανιστεί ένα κουμπί Καταχώρηση ώστε να επιβεβαιώσετε την κράτησή σας.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Χρησιμοποιείστε αυτήν τη φόρμα για να καταχωρήσετε την κράτησή σας. Φέρτε τον δείκτη του ποντικιού πάνω από τα "i" για περισσότερες πληροφορίες για τη στήλη. Τροποποιήστε τα στοιχεία της κράτησής σας όπως ημερομηνίες άφιξης και αναχώρησης και αριθμό ατόμων. Όταν τελειώσετε, μπορείτε να προσθέσετε όποιες πρόσθετες υπηρεσίες χρειάζεστε και να συμπληρώσετε τα στοιχεία της διεύθυνσής σας. Όταν η φόρμα έχει αρκετές πληροφορίες θα εμφανιστεί ένα κουμπί Καταχώρηση ώστε να επιβεβαιώσετε την κράτησή σας.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Στοιχεία κράτησης');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Επιλέξτε της λεπτομέρειες της επιθυμητής κράτησής σας');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Διαθεσιμότητα ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Επιλέξτε τα δωμάτια που θέλετε');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Δείτε εδώ αν η ιδιοκτησία είναι διαθέσιμη.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Επιλογή (προαιρετικών) πρόσθετων υπηρεσιών');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Επιλέξτε όποιες πρόσθετες υπηρεσίες θέλετε να συμπεριλάβετε στην κράτησή σας');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','Ανά διανυκτέρευση');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Η διεύθυνσή σας');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Παρακαλώ συμπληρώστε τα στοιχεία σας. Σημειώστε πως όλα τα πεδία είναι απαραίτητα εκτός του κινητού σας');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Διαθέσιμα δωμάτια');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Επιλεγμένα δωμάτια');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Η συντομότερη δυνατή ημερομηνία άφιξης είναι: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','Ανά διανυκτέρευση:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Σύνολα:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Πρόσθετα:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Φόρος:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Έκπτωση:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Γενικό Σύνολο:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','’τομα');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Κάντε κλικ για να προστεθεί το δωμάτιο στις επιλογές σας');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Κάντε κλικ για να αφαιρεθεί το δωμάτιο από τις επιλογές σας');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Τύποι ατόμων');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Τύπος');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Ο τύπος του πελάτη π.χ. παιδιά 5-10, φοιτητές, έφηβοι κλπ. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Σημειώσεις');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Σημειώσεις που μπορείτε να κρατήσετε σχετικά με αυτόν τον τύπο πελάτη');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Μέγιστος αριθμός');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Ο μέγιστος αριθμός πελατών τέτοιου τύπου που μπορεί να επιλεγούν στη φόρμα κράτησης');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Είναι ποσοστό');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Ο αριθμός που υπολογίζεται είναι ποσοστό του βασικού ποσού που υπολογίστηκε για το δωμάτιο. Εάν επιλέξετε ΟΧΙ τότε ο αριθμός που προσδιορίζετε απλά προστίθεται ή αφαιρείται στη βασική αξία του δωματίου.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Πρόσθεση;');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Ο αριθμός που υπολογίζεται προστίθεται ή αφαιρείται από το βασικό ποσό που υπολογίστηκε για το δωμάτιο. Επιλέξτε ΟΧΙ αν θέλετε το ποσό να είναι έκπτωση. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Διαφορά');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Το ποσό της διαφοράς');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Η σειρά των τύπων πελατών τροποιήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Ο τύπος πελάτη δημοσιεύτηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Ο τύπος πελάτη διαγράφηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Ο τύπος πελάτη καταχωρήθηκε');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Ο τύπος πελάτη ενημερώθηκε');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Τύπος πελάτη ενημερώθηκε');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Να φαίνεται ο κατάλογος δωματίων στη σελίδα λεπτομερειών της ιδιοκτησίας;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Να εμφανίζεται σύνδεσμος για τον κατάλογο δωματίων στη σελίδα λεπτομερειών της ιδιοκτησίας;');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Να φαίνεται <b>μόνο</b> Το ημερολόγιο Διαθεσιμότητας/Κατάλογος δωματίων;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Επιλέξτε ΝΑΙ για να μην εμφανίζονται λεπτομέρειες της ιδιοκτησίας ώστε μόνο το ημερολόγιο Διαθεσιμότητας/Κατάλογος δωματίων να εμφανίζονται στο τμήμα λεπτομερειών της ιδιοκτησίας. Στην ουσία προορίζεται για χρήστες που νοικιάζουν διαμερίσματα/βίλλες κλπ.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS που θα χρησιμοποιείται στην ιστοσελίδα');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Ελάχιστο διάστημα μεταξύ άφιξης - αναχώρισης');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Η ελάχιστη διαμονή στη φόρμα κράτησης.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει τον αριθμό του δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει το όνομα του δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Ο κατάλογος δωματίων στη φόρμα κράτησης εμφανίζει το όνομα του τιμοκαταλόγου');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Η φόρμα κράτησης εμφανίζει τίτλο');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Η φόρμα κράτησης εμφανίζει περιγραφή');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Η φόρμα κράτησης εμφανίζει όρους συμφωνίας/τιμοκαταλόγους');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Η φόρμα κράτησης εμφανίζει έναρξη');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Η φόρμα κράτησης εμφανίζει λήξη');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Η φόρμα κράτησης εμφανίζει ελάχιστο αριθμό  ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Η φόρμα κράτησης εμφανίζει μέγιστο αριθμό ημερών');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Η φόρμα κράτησης εμφανίζει ελάχιστο αριθμό ατόμων');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Η φόρμα κράτησης εμφανίζει μέγιστο αριθμό ατόμων');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Η φόρμα κράτησης εμφανίζει αριθμό δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Η φόρμα κράτησης εμφανίζει όνομα δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Η φόρμα κράτησης εμφανίζει τύπο δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Η φόρμα κράτησης εμφανίζει δωμάτιο που επιτρέπεται το κάπνισμα');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Η φόρμα κράτησης εμφανίζει δωμάτιο με πρόσβαση ΑΜΕΑ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Η φόρμα κράτησης εμφανίζει όροφο');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Η φόρμα κράτησης εμφανίζει μέγιστο αριθμό ατόμων δωματίου');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Η φόρμα κράτησης εμφανίζει χαρακτηριστικά δωματίου');

/**
* @ignore
*/
define('_JOMRES_ORDER','Σειρά');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Έχετε παραμετροποιήσει την εφαρμογή για ιδιοκτησία ενός δωματίου (π.χ. διαμέρισμα, αγρόκτημα, βίλλα κλπ.) όμως έχετε δημιουργήσει περισσότερα από ένα δωμάτια. Αυτό μπορεί να έχει σαν αποτέλεσμα σφάλματα στη λειτουργία της εφαρμογής γιαυτό αν συνεχίσετε να την χρησιμοποιείτε για να διαχειρίζεστε ένα μόνο δωμάτιο πρέπει να διαγράψετε όλα τα δωμάτια εκτός ενός. Παρακαλώ τροποποιήστε τις παραμέτρους έτσι ώστε  Είναι διαμέρισμα/αγρόκτημα/βίλα = OXI, και μετά πηγαίνετε στη Διαχείριση Ιδιοκτησίας και διαγράψτε όλα τα δωμάτια εκτός αυτού της ιδιοκτησίας.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Απαιτείται');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Ημέρες πριν την άφιξη');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Ελάχιστος αριθμός ημερών που πρέπει να περάσουν από σήμερα, πριν την ημερομηνία άφιξης.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','Ανά διανυκτέρευση:');

/**
* @ignore
*/
define('_JOMRES_DTV','Τύποι ημερομηνιών');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','Μέρα της εβδομάδας');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Διαστήματα μεταξύ ημερομηνιών');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Ημέρες παραμονής');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','Τελευταία στιγμή');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','Μέρα της εβδομάδας');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','Η μέρα της εβδομάδας');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Επιλογή component τάξης τιμοκαταλόγου');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Σας επιτρέπει να επιλέξετε προσαρμοσμένους τιμοκαταλόγους που δημιουργήσατε/κατεβάσατε και εγκαταστήσατε σαν ξεχωριστό component. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Προεπιλεγμένος αριθμός του τύπου του πρώτου πελάτη');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Προεπιλογή του αριθμού του τύπου του πρώτου πελάτη. Αν χρησιμοποιείτε τύπους πελατών, αυτός είναι ο προεπιλεγμένος αριθμός πελατών που θα ανατεθεί στον τύπο του πρώτου πελάτη της φόρμας κράτησης.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Μόνο εγγεγραμμένοι χρήστες μπορούν να κάνουν κράτηση online;');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Λυπούμαστε αλλά πρέπει να είστε εγγεγραμμένος χρήστης για να κάνετε κράτηση. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Χρώμα γραμματοσειράς για τους συνδέσμους στις τρέχουσες κρατήσεις');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Πλαίσια στα σαββατοκύριακα');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Ποιο plugin να χρησιμοποιηθεί στον πίνακα');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Αν εγκαταστήσατε κάποιο plugin για τον πίνακα της εφαρμογής μπορείτε εδώ να επιλέξετε κάποιο εναλλακτικό από το προεπιλεγμένο.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Έχει γίνει κράτηση για το δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Μαύρη κράτηση');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Να στρογγυλοποιείται η προκαταβολή στον πλησιέστερο μεγαλύτερο ακέραιο;');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Να χρεώνονται οι προκαταβολές;');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Οι τιμοκατάλογοι αφορούν εβδομαδιαία χρήση;');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Μπορείτε να επιλέξετε αν οι τιμοκατάλογοι αφορούν ημερήσια ή εβδομαδιαία χρήση. Αν θέλετε να χρησιμοποιήσετε εβδομαδιαία χρέωση, πρέπει να επιλέξετε ΝΑΙ.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Χρέωση ανά εβδομάδα');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Περιοδικότητα Σταθερών ημερομηνιών άφιξης: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Αν έχετε επιλέξει σταθερές ημερομηνίες άφιξης, ο αριθμός επανάληψης των ημερομηνιών που φαίνεται στη λίστα ημερομηνιών');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','’κυρη επιλογή καπνίσματος');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Λάθος ημερομηνία άφιξης');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Λάθος ημερομηνία αναχώρισης');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Η κράτηση είναι πολύ μικρή. Η ελάχιστη διαμονή σε μέρες πρέπει να είναι:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Το διάστημα παραμονής σας είναι ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Λάθος τύπος πελάτη');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Επιλέξτε τον αριθμό/τύπο ατόμων');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Είστε περισσότεροι από όσους επιτρέπουν οι υπάρχοντες τιμοκατάλογοι');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Έχετε επιλέξει περισσότερα δωμάτια από τον αριθμό ατόμων');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Περισσότερα άτομα από τις διαθέσιμες κλίνες');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Πρέπει να επιλέξετε περισσότερα δωμάτια');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Επιλέξτε ένα δωμάτιο');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Το όνομα απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Το επώνυμο απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Ο αριθμός οικίας/όνομα σπιτιού απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Η οδός απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Η πόλη απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Η περιοχή απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Ο ΤΚ απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Η χώρα απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Ο αριθμός τηλεφώνου (σταθερό) απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Ο αριθμός κινητού τηλεφώνου απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Η διεύθυνση email απαιτείται');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Η διεύθυνση email δεν είναι έγκυρη');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Δεν ήταν δυνατό να επιβεβαιωθεί το email domain');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Υπάρχει διαθεσιμότητα!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Δεν έχουν επιλεχθεί δωμάτια');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Α/Α κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Φόντο πλαισίου επιβεβαίωσης κράτησης');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Αντίγραφο μεταβλητών του template;');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Επιλέξτε για να ενεργοποιήσετε αντίγραφο DHTML των μεταβλητών του template για κάθε αρχείο FRONTEND template όπως φαίνεται αυτή η σελίδα. Χρήσιμο αν θέλετε να δείτε αν κάποιο αντικείμενο είναι διαθέσιμο για χρήση σε κάποιο template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Είναι ποσοστό;');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Επιλέξτε ΝΑΙ αν η υπολογισμένη χρέωση ατόμου είναι ποσοστό. Εάν ΟΧΙ τότε θα προστεθεί σαν ποσό στο σύνολο.');


//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Όριο Διαθεσίμων δωματίων/Τιμοκαταλόγων');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Χρησιμοποιήστε το πεδίο για να περιορίσετε τον αριθμό των διαθεσίμων δωματίων και τιμοκαταλόγων που θα φαίνονται στη φόρμα κράτησης. Βάλτε μηδέν αν δε θέλετε περιορισμούς. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Δεν υπάρχει διαθεσιμότητα!');


// Translate from here


// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Margin');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Profit margin, in percent.');
// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Show Jomres admin options as icons?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Set this to no if you want all the admin links shown as text.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Book it now: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariff only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any property information');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prices from - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','All');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Features');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Availability');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Search');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List all properties by property type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Default');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stars');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Property details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>(Room selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
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
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','You are not logged in. If you log in/register with this site then you will be able to view your bookings information.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','List Bookings, no deposit paid');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Room type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' to ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that property can accommodate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Cancel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Title');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Comission rate');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','License number');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Your license number for the portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistics');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Period: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','January');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','February');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','March');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','May');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','June');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','July');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','October');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Room usage');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add property');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multiroom property?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a property like a hotel/bed and breakfast/penzion? If so, select Yes. If it is a single room property like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover over a thumbnail for a larger image");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above property details or below.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Top");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bottom");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Both");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");

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
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
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
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
/**
* @ignore
*/
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_TITLE','Real estate listing');

/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
/**
* @ignore
*/
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
/**
* @ignore
*/
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
/**
* @ignore
*/
define('_JOMRES_APIKEY_REMAKE','Make new API key');
