<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Αυτή είναι η αρχική σελίδα cpanel ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Αυτό είναι το γράφημα κασέτας ιδιοτήτων που παρέχει μια επισκόπηση των κρατήσεων σε πραγματικό χρόνο, της διαθεσιμότητας και της πληρότητας με μια ματιά.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Αυτό το σενάριο επιτρέπει στο χρήστη να συγκρίνει διάφορες ιδιότητες μεταξύ τους, έως 3 ιδιότητες το πολύ.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Μια λίστα διαχωρισμένων με κόμμα uid ιδιοτήτων, π.χ. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Δημιουργεί τη φόρμα κατόχου επαφής.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Περάστε το uid της ιδιοκτησίας της ιδιοκτησίας με την οποία θα επικοινωνήσετε. Περάστε 0 (μηδέν) για να επικοινωνήσετε με τον διαχειριστή του ιστότοπου.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Δείχνει τη σελίδα πληροφοριών εταιρείας, αντλώντας λεπτομέρειες από το πεδίο Στοιχεία εταιρείας του διαχειριστή ιδιοκτησίας στη Διαμόρφωση ιδιοκτησίας. Οι λεπτομέρειες σε αυτήν την καρτέλα θα χρησιμοποιηθούν συνήθως για αντιστοιχία, επιτρέποντας στους διαχειριστές να έχουν και τη διεύθυνση του ξενοδοχείου/του διαμερίσματος και ξεχωριστή διεύθυνση για επαγγελματικούς σκοπούς. ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Εμφανίζει το ημερολόγιο της ιδιοκτησίας");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Περάστε το uid ιδιοκτησίας της ιδιότητας που θα εμφανιστεί.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Months to show, default είναι 24 αν δεν έχει οριστεί διαφορετικά. Δεν είναι συμβατό με τη μεταβλητή Show Just Month').
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Ρυθμίστε το σε 1 αν θέλετε απλώς να εμφανίσετε τον τρέχοντα μήνα. Η ρύθμιση months_to_show θα αγνοηθεί εάν το show_just_month χρησιμοποιείται για το ίδιο shortcode, Την ίδια στιγμή.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Εμφανίζει μόνο το κείμενο περιγραφής ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Εμφανίζει μόνο το κείμενο περιγραφής ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID του ακινήτου.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Εμφανίζει μόνο τις δυνατότητες ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID του ακινήτου.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Εμφανίζει μόνο το πρότυπο κεφαλίδας ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Εμφανίζει μόνο τους τύπους δωματίων ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Εμφανίζει μόνο την κύρια εικόνα της ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Εμφανίζει μόνο τον χάρτη ιδιοκτησίας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Εμφανίζει την ιδιότητα Περισσότερες πληροφορίες κειμένου.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Κωδικός QR που συνδέεται με gmaps. Αυτό μπορεί να σαρωθεί σε ένα τηλέφωνο χρησιμοποιώντας μια εφαρμογή ανάγνωσης κώδικα qr που παρέχει οδηγίες προς την ιδιότητα.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Εμφανίζει τις κριτικές ενός ακινήτου.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Εμφανίζει περίληψη ανασκόπησης ενός ακινήτου.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Εμφανίζει ένα μεμονωμένο δωμάτιο.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID του δωματίου.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Εμφανίζει τα δωμάτια ενός ακινήτου.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID της ιδιότητας');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Εμφανίζει τις εικόνες του δωματίου ενός ακινήτου ως παρουσίαση διαφανειών.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Εμφανίζει την παρουσίαση της ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Εμφανίζει τα τιμολόγια ιδιοκτησίας.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID του ακινήτου.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Εμφανίζει τη διεύθυνση επιχείρησης του ιστότοπου όπως έχει εισαχθεί στη Διαμόρφωση τοποθεσίας> Στοιχεία της εταιρείας σας.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Εμφανίζει τους όρους και τις προϋποθέσεις της ιδιότητας.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID της ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Εμφανίζει το ημερολόγιο διεπαφής χρήστη της ιδιοκτησίας, το οποίο είναι διαφορετικό ημερολόγιο από το κύριο μεγάλο ημερολόγιο και βασίζεται στη λειτουργία ημερολογίου διεπαφής χρήστη Jquery");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Περάστε το uid ιδιοκτησίας της ιδιότητας που θα εμφανιστεί.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Ορίστε αυτό στο 1 για να μην εμφανίζεται ο θρύλος.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Εμφανίζει τα αποτελέσματα αναζήτησης, τα οποία μπορούν να ενισχυθούν με την προσθήκη παραμέτρων αναζήτησης. Δεν συνιστούμε να χρησιμοποιείτε όλες τις παραμέτρους ταυτόχρονα, επειδή θα καταλήξετε με πολύ περιορισμένα κριτήρια αναζήτησης. Αντ 'αυτού, πρέπει να περιοριστείτε σε μία ή δύο παραμέτρους, π.χ. αναζήτηση ανά χώρα και αριθμό αστέρων. ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Αναζήτηση ανά χώρα, χρησιμοποιώντας τον κωδικό ISO Alpha-2, π.χ. GB ή DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Αναζήτηση ανά περιοχή. Καθώς οι περιοχές αποθηκεύονται στη βάση δεδομένων, πρέπει να χρησιμοποιείτε το αναγνωριστικό περιοχής. Επισκεφθείτε τον Διαχειριστή> Jomres> Δομή ιστότοπου> Λίστα περιοχών και τοποθετήστε το δείκτη του συνδέσμου Επεξεργασία, εκεί θα δείτε τον αριθμό ID της περιοχής . ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Το πλήρες όνομα της πόλης που θέλετε να αναζητήσετε.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Αναζήτηση ιδιοτήτων με συγκεκριμένες δυνατότητες. Αναγνωριστικά χαρακτηριστικών μπορείτε να βρείτε στο Διαχειριστής> Jomres> Δομή ιστότοπου> Λειτουργίες ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Αναζήτηση ιδιοκτησιών με συγκεκριμένους τύπους δωματίων. Τα αναγνωριστικά τύπου δωματίου μπορούν να βρεθούν στο Διαχειριστής> Jomres> Δομή ιστότοπου> Τύποι δωματίων.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Αναζήτηση ιδιοτήτων συγκεκριμένου τύπου ιδιοκτησίας. Αναγνωριστικά τύπου ιδιοτήτων μπορείτε να βρείτε στο Διαχειριστής> Jomres> Δομή ιστότοπου> Τύποι ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Αναζήτηση για ακίνητα εντός συγκεκριμένου εύρους τιμών.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Αναζήτηση για ακίνητα που τα τιμολόγια επιτρέπουν τον αριθμό επισκεπτών ορισμένων τιμών, για παράδειγμα πάρτι των 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Αναζήτηση ιδιοτήτων Ν αστέρων.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Αναζήτηση κατά την ημερομηνία άφιξης. Θα πρέπει να συνδυαστεί με την παράμετρο ημερομηνία αναχώρησης.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Αναζήτηση κατά ημερομηνία αναχώρησης. Θα πρέπει να συνδυαστεί με την παράμετρο ημερομηνία άφιξης.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Αναζήτηση κατά κατηγορία ιδιοκτησίας.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Μια ιδιότητα uid, αυτή θα εμφανίσει τον αντιπρόσωπο της ιδιοκτησίας.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Αναγνωριστικό βάσης δεδομένων διαχειριστή, εάν είναι γνωστό.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Εμφανίζει τις δημοφιλείς ιδιότητες, που χρησιμοποιούνται συνήθως σε θέσεις μονάδας ή γραφικού στοιχείου.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Ο μέγιστος αριθμός ιδιοτήτων που μπορούν να εμφανιστούν.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Εμφάνιση μόνο ιδιοτήτων των συγκεκριμένων τύπων ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Ορίστε στο 1 για να εμφανίζονται οι μονάδες βελτιστοποιημένες για κάθετη θέση widget/module.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Εμφανίζει μια τυχαία επιλογή ιδιοτήτων, που συνήθως χρησιμοποιούνται σε θέσεις μονάδας ή widget.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Ο μέγιστος αριθμός ιδιοτήτων που μπορούν να εμφανιστούν.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Εμφάνιση μόνο ιδιοτήτων των συγκεκριμένων τύπων ιδιοτήτων.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Ορίστε στο 1 για να εμφανίσετε τις ενότητες που έχουν βελτιστοποιηθεί για κάθετη θέση widget/module.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Εμφανίζει τις πιο πρόσφατες προβολές ιδιοτήτων του επισκέπτη, που χρησιμοποιούνται συνήθως σε θέσεις μονάδας ή γραφικού στοιχείου.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Ο μέγιστος αριθμός ιδιοτήτων που μπορούν να εμφανιστούν.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Ορίστε στο 1 για να εμφανίζονται οι μονάδες βελτιστοποιημένες για κάθετη θέση widget/module.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Εμφανίζει έναν αριθμό ιδιοτήτων, που χρησιμοποιούνται συνήθως σε θέσεις μονάδας ή γραφικού στοιχείου.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Τα αναγνωριστικά ιδιοτήτων των ιδιοτήτων που θέλετε να εμφανίζονται.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Ορίστε στο 1 για να εμφανίζονται οι μονάδες βελτιστοποιημένες για κάθετη θέση widget/module.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Εμφανίζει το αναπτυσσόμενο μενού επιλογής νομίσματος.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Ενεργοποίηση/απενεργοποίηση της εναλλακτικής εξόδου προτύπου. Αυτή η έξοδος προορίζεται για χρήση σε γραμμές εργαλείων Bootstrap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Εμφανίζει τη σελίδα του Καλαθιού Αγορών.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Εμφανίζει τη μονάδα/widget του Καλαθιού αγορών.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Εμφανίζει το κύριο μενού. Σημείωση, εάν χρησιμοποιείτε μια προσαρμοσμένη έκδοση του mainmenu_wrapper_alternate.html στο παράδειγμα/templates/jr_leohtian/html/com_jomres τότε μπορεί να χρειαστεί να το τροποποιήσετε /i> με MENU_LOCATION τυλιγμένο σε σγουρά σιδεράκια. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Αυτή η σελίδα σάς επιτρέπει να ανεβάζετε εικόνες για την ιδιοκτησία σας και τα πράγματα που προσφέρετε. Έχει ένα κύριο κουμπί και ένα δεύτερο κουμπί που σας επιτρέπει να επιλέξετε συγκεκριμένους πόρους για τη μεταφόρτωση εικόνων. Έτσι, η κύρια ιδιότητα Η εικόνα και το Slideshow θα εμφανίζει μόνο ένα κουμπί, αλλά εάν έχετε δημιουργήσει π.χ. Προαιρετικά Πρόσθετα ή Δωμάτια, τότε θα δείτε ένα δεύτερο κουμπί όπου μπορείτε να ανεβάσετε εικόνες για τους συγκεκριμένους πόρους. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Αυτή η σελίδα σάς επιτρέπει να ανεβάζετε εικόνες για την ιδιοκτησία σας και τα πράγματα που προσφέρετε. Έχει ένα κύριο κουμπί και ένα δεύτερο κουμπί που σας επιτρέπει να επιλέξετε συγκεκριμένους πόρους για τη μεταφόρτωση εικόνων. Έτσι, η κύρια ιδιότητα Η εικόνα και το Slideshow θα εμφανίζει μόνο ένα κουμπί, αλλά εάν έχετε δημιουργήσει κάποια Προαιρετική Πρόσθετα, θα δείτε ένα δεύτερο κουμπί όπου μπορείτε να ανεβάσετε εικόνες για τους συγκεκριμένους πόρους. ');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Αρχικά επιλέξτε τις εικόνες που θέλετε να ανεβάσετε κάνοντας κλικ στην επιλογή Προσθήκη εικόνας ή χρησιμοποιώντας την επιλογή Μεταφορά και απόθεση. Αυτά θα εμφανιστούν στη στήλη στη δεξιά πλευρά. </li>
  <li> Πάνω από αυτήν την περιοχή, χρησιμοποιήστε το κουμπί \"Επιλογή πόρου \" για να επιλέξετε για ποιον πόρο θέλετε να ανεβάσετε εικόνες. Ενδέχεται να σας προσφερθεί η επιλογή να επιλέξετε έναν συγκεκριμένο πόρο από κάτω. </li>
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
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Εάν αυτός ο επισκέπτης είναι στη μαύρη λίστα, δεν θα μπορεί πλέον να κάνει κρατήσεις σε αυτήν την ιδιοκτησία.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Αποθήκευση αρχείων jomres session στο δίσκο ή στη βάση δεδομένων. Συνιστάται: βάση δεδομένων');
jr_define('_JOMRES_MAP_HEIGHT', "Mapψος χάρτη (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Επίπεδο ζουμ χάρτη");
jr_define('_JOMRES_MAP_MAPTYPE', "Τύπος χάρτη");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Τα πακέτα προτύπων είναι πρόσθετα που μπορούν να παρέχουν παράκαμψη προτύπων για διάφορα βασικά αρχεία προτύπων Jomres.");

jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Όνομα προτύπου");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Τρέχουσα διαδρομή");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Δεν παρακάμπτεται");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Μπορείτε να επιλέξετε ποιο αρχείο προτύπου θα παρακάμψει τα βασικά αρχεία προτύπων αλλάζοντας το αναπτυσσόμενο μενού");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Ποσοστό κράτησης δωματίων");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Εμφανίζει τη φόρμα δημιουργίας νέας ιδιότητας.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Ζουμ χάρτη, 1: Κόσμος 5: Γη/ήπειρος 10: Πόλη 15: Οδοί 20: Κτήρια');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Αριθμός κριτικών προς εμφάνιση');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Ελάχιστη αξία κατάθεσης');


jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Εμφανίζει τη φόρμα συγκατάθεσης που συμμορφώνεται με τον GDPR.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Λίστα τύπων δωματίου ιδιοκτησίας');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Εμφάνιση τύπου δωματίου ιδιοκτησίας');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Εμφάνιση της φόρμας σύνδεσης');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Εμφάνιση λίστας δωματίων συγκεκριμένου τύπου δωματίου');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Αναγνωριστικό τύπου δωματίου');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Πίνακας ελέγχου');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Εμφανίζει μια λίστα κοινοπραξιών');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Ο αριθμός των κοινοποιημένων ιδιοτήτων προς εμφάνιση');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Αν θα εμφανίζονται MRP (ξενοδοχεία/ξενώνες) ή SRP (εξοχικές κατοικίες/διαμερίσματα/βίλες). Η προεπιλογή προσδιορίζεται από την τρέχουσα ιδιοκτησία, αν η Για να επιλέξετε έναν συγκεκριμένο τύπο, ορίστε αυτήν την τιμή σε 0 για srps ή 1 για mrps. ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Δείχνει τα αστέρια μιας ιδιότητας. Αυτά ορίζονται στη Διαμόρφωση ιδιοτήτων, εάν η ιδιότητα είναι MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'Αναγνωριστικό της ιδιότητας.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Προαιρετικό. Εάν το αναγνωριστικό ιδιότητας δεν έχει οριστεί, μπορείτε να περάσετε έναν αριθμό.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Προαιρετικό. Εναλλακτική διαδρομή προτύπου. Δεν μπορεί να περάσει μέσω url. Πρέπει να είναι απόλυτη.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Προαιρετικό. Εναλλακτικό όνομα προτύπου.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Δείχνει έξοδο τύπου λειτουργικής μονάδας για τοποθέτηση με σύντομους κώδικες. Η έξοδος της μονάδας ιδιότητας είναι ένα μικρό απόσπασμα λεπτομερειών ιδιοκτησίας που έχει σχεδιαστεί για να εμφανίζεται σε διάφορα σημεία της σελίδας.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Προαιρετικό. Αναγνωριστικό της ιδιότητας. Εάν δεν έχει οριστεί το αναγνωριστικό ιδιότητας, θα εμφανιστεί μια τυχαία δημοσιευμένη ιδιότητα.');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'Προαιρετικό. Εναλλακτικό όνομα προτύπου, χωρίς ".html". Το πρότυπο πρέπει να υπάρχει στον κατάλογο παράκαμψης προτύπου. Αυτό σας επιτρέπει να χρησιμοποιείτε προσαρμοσμένες εκδόσεις του "basic_module_output.html" σας σε διαφορετικές θέσεις.' );