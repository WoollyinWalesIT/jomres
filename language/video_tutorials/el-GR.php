<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Video Tutorials');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Πίνακας ελέγχου');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Αυτό το σεμινάριο σάς δείχνει πώς να χρησιμοποιείτε τον πίνακα ελέγχου Διαχείριση ιδιοκτησίας');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Timeline');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Πώς να χρησιμοποιήσετε το ημερολόγιο χρονοδιαγράμματος. Σε αυτό το βίντεο δημιουργούμε έναν νέο επισκέπτη εισάγοντας τα στοιχεία του στο αναδυόμενο παράθυρο, οι υπάρχοντες επισκέπτες μπορούν να επαναχρησιμοποιηθούν επιλέγοντας το όνομά τους από το αναπτυσσόμενο μενού στο αναδυόμενο παράθυρο.') ;

	jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Ιδιότητες λίστας');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Πώς να χρησιμοποιήσετε τη σελίδα Ιδιότητες λίστας για να δείτε επιπλέον πληροφορίες, να αλλάξετε στήλες και να αναζητήσετε συγκεκριμένες ιδιότητες.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Επεξεργασία στοιχείων ιδιοκτησίας');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Επεξεργασία των στοιχείων της ιδιοκτησίας σας, συμπεριλαμβανομένης της μεταφοράς στο χάρτη για να ορίσετε την τοποθεσία σας.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Αλλαγή τρόπου επεξεργασίας τιμολογίων');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ο τρόπος επεξεργασίας των τιμολογίων σας καθορίζει τη μέθοδο που μπορείτε να χρησιμοποιήσετε για να ορίσετε τιμές για την ιδιοκτησία σας. Αυτό το κάνετε μέσω της σελίδας Διαμόρφωση ιδιοτήτων.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Κανονικός τρόπος επεξεργασίας τιμολογίων για ξενοδοχεία, συντάξεις, Β & Β');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Η κανονική λειτουργία επεξεργασίας τιμολογίων είναι μια απλή λειτουργία επεξεργασίας τιμολογίων που σας επιτρέπει να επιλέξετε τον αριθμό των δωματίων σε ένα ακίνητο, την τιμή του δωματίου, τον αριθμό των επισκεπτών που μπορεί να φιλοξενήσει κάθε δωμάτιο και τον μέγιστο αριθμό επισκεπτών Όταν αποθηκεύονται, αυτές οι τιμές ισχύουν για τα επόμενα 10 χρόνια. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Κανονική επεξεργασία τιμολογίων για βίλες και διαμερίσματα');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Ο κανονικός τρόπος επεξεργασίας τιμολογίων είναι μια απλή λειτουργία επεξεργασίας τιμολογίων που σας επιτρέπει να επιλέξετε τον υποτύπο ιδιοκτησίας, την τιμή του ακινήτου ανά διανυκτέρευση και τον μέγιστο αριθμό επισκεπτών σε ένα πάρτι. Όταν αποθηκεύονται αυτές οι τιμές τότε ισχύει για τα επόμενα 10 χρόνια. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Τροποποίηση μικροδιαχείρισης τιμολογίων (συνιστάται)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Η λειτουργία επεξεργασίας τιμολογίων μικροδιαχείρισης σάς επιτρέπει να διαμορφώνετε τόσο την τιμή όσο και τον ελάχιστο αριθμό ημερών για τις οποίες μπορεί να ισχύει μια διαμονή, για κάθε μέρα του έτους. Είναι ένα ισχυρό εργαλείο που σας δίνει πλήρη Σε αυτό το παράδειγμα θα σας δείξουμε πώς να δημιουργήσετε πολλαπλά σύνολα τιμών για τον ίδιο τύπο δωματίου, να ορίσετε διαφορετικές τιμές για διαφορετικές περιόδους και διαφορετικές τιμές για συγκεκριμένες ημέρες της εβδομάδας μέσα σε μια περίοδο. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Τροποποίηση μικροδιαχείρισης τιμολογίων για βίλες/διαμερίσματα (συνιστάται)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Η λειτουργία επεξεργασίας τιμολογίων μικροδιαχείρισης σάς επιτρέπει να διαμορφώνετε τόσο την τιμή όσο και τον ελάχιστο αριθμό ημερών για τις οποίες μπορεί να ισχύει μια διαμονή, για κάθε μέρα του έτους. Είναι ένα ισχυρό εργαλείο που σας δίνει πλήρη έλεγχο πάνω από την τιμολόγηση. Σε αυτό το παράδειγμα θα σας δείξουμε πώς να δημιουργήσετε πολλαπλά σύνολα τιμών. Θα ορίσουμε διαφορετικές τιμές για διαφορετικές περιόδους και διαφορετικές τιμές για συγκεκριμένες ημέρες της εβδομάδας μέσα σε μια περίοδο. Μόλις γίνει αυτό, θα δημιουργήσουμε πολλαπλά τιμολόγια για το ίδιο ιδιοκτησίας, αλλά με διαφορετικούς αριθμούς επισκεπτών που μας επιτρέπουν να ελέγχουμε με ακρίβεια τις τιμές για κάθε σενάριο. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Διαφορετικά τιμολόγια για διαφορετικούς αριθμούς επισκεπτών');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Μπορείτε να δημιουργήσετε πολλαπλές τιμές για τον ίδιο τύπο δωματίου, οπότε αν θέλετε διαφορετικές τιμές για διαφορετικό αριθμό επισκεπτών, μπορείτε να το κάνετε αυτό.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Ανά άτομο ανά διανυκτέρευση - Τύποι επισκεπτών');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Για χρέωση ανά άτομο ανά διανυκτέρευση θα χρειαστεί να δημιουργήσετε τύπους επισκεπτών. Διαφορετικοί τύποι επισκεπτών μπορεί να έχουν διαφορές από τη βασική τιμή ενός δωματίου, έτσι ώστε τα παιδιά διαφορετικών ηλικιών να έχουν διαφορετικές εκπτώσεις ανάλογα με την ηλικία τους. δεν χρειάζεται να χρεώνετε ανά άτομο ανά διανυκτέρευση για να χρησιμοποιήσετε Τύπους επισκεπτών, μπορείτε επίσης να τα χρησιμοποιήσετε αν χρεώνετε κατ \'αποκοπήν αλλά θέλετε να συλλάβετε τον αριθμό των επισκεπτών ή επειδή θέλετε να περιορίσετε τον αριθμό των επισκεπτών σε μια κράτηση.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Image uploading');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Όλες οι εικόνες μεταφορτώνονται μέσω του κέντρου πολυμέσων. Σε αυτό το βίντεο θα ανεβάσουμε την εικόνα κύριας ιδιότητας, μερικές εικόνες παρουσίασης, μια μικρή επιλογή εικόνων που θα εμφανίζονται στη σελίδα αποτελεσμάτων αναζήτησης και εικόνες για μία από αυτές τα δωμάτια.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Κέντρο πολυμέσων - Μεταφόρτωση εικόνας');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Όλες οι εικόνες μεταφορτώνονται μέσω του κέντρου πολυμέσων. Σε αυτό το βίντεο θα ανεβάσουμε την εικόνα κύριας ιδιότητας, μια μικρή επιλογή εικόνων που θα εμφανίζονται στη σελίδα αποτελεσμάτων αναζήτησης και μερικές εικόνες παρουσίασης.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Αυτή είναι η προεπιλεγμένη σελίδα προορισμού στην περιοχή διαχειριστή. Μπορείτε να δείτε μια περίληψη των διαφόρων στατιστικών στοιχείων ιστότοπου και να δείτε ποιες ιδιότητες υπάρχουν στο σύστημα, οι οποίες είναι πλήρεις και οι οποίες έχουν ολοκληρωθεί και αναμένουν τον έλεγχο πριν από την έγκριση . Μόλις εγκριθεί ένα ακίνητο, τότε μπορεί να δημοσιευθεί από τον διαχειριστή ακινήτου. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Διαχείριση προσθηκών, εγκατάσταση και χρήση');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Αυτό το βίντεο σάς δείχνει πώς να χρησιμοποιήσετε τη Διαχείριση προσθηκών, συμπεριλαμβανομένης της εγκατάστασης του διαχειριστή προσθηκών και, στη συνέχεια, εγκατάσταση και κατάργηση εγκατάστασης μιας προσθήκης. Εάν δεν έχετε κλειδί άδειας χρήσης, θα σας ζητηθεί να αποθηκεύσετε στον Ιστότοπο Διαμόρφωση προτού μπορέσετε να εγκαταστήσετε το διαχειριστή. Εάν δεν έχετε χρησιμοποιήσει τον διαχειριστή προσθηκών πριν, τότε αυτή η λίστα θα είναι αρχικά κενή, σε αυτό το παράδειγμα έχω ήδη εγκαταστήσει μια ποικιλία πρόσθετων. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Διαχειριστές ακινήτων');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Οι διαχειριστές ιδιοκτησίας προστίθενται με έναν από τους δύο τρόπους. Είτε δημιουργούν οι ίδιοι ιδιότητες (μπορούν να απενεργοποιηθούν στη Διαμόρφωση ιστότοπου) είτε ο διαχειριστής του ιστότοπου μπορεί να εκχωρήσει έναν υπάρχοντα διαχειριστή σε ορισμένες ιδιότητες. Οι διαχειριστές μπορούν να έχουν πρόσβαση μόνο σε ιδιότητες που έχουν δημιουργήθηκε ή έχει εκχωρηθεί. ');

	jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Access Control');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Μπορείτε να χρησιμοποιήσετε τη λειτουργία Access Control για να απενεργοποιήσετε τις επιλογές μενού, καθιστώντας τις ορατές μόνο σε ορισμένες κατηγορίες χρηστών ή ακόμη και να εξαφανιστούν εντελώς. Εάν η γραμμή μενού δεν έχει επιλογές μενού για εμφάνιση θα εξαφανιστεί εντελώς, οπότε αν δεν θέλετε οι επισκέπτες του ιστότοπου να βλέπουν επιλογές, μπορείτε απλώς να ορίσετε όλες τις επιλογές να είναι ορατές στους συνδεδεμένους χρήστες, για παράδειγμα. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Τύποι ιδιοκτησίας και δωματίου');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Σε αυτό το βίντεο θα δείτε δύο σημαντικές έννοιες. Η πρώτη είναι η δημιουργία τύπων ιδιοτήτων και συσχετισμένων τύπων δωματίων. Θα δείτε επίσης έναν εγγεγραμμένο χρήστη που δεν είναι διαχειριστής να δημιουργεί τη δική του ιδιοκτησία και να γίνεται διαχειριστής (αλλά μόνο σε θέση να διαμορφώσει την ιδιότητα που έχουν δημιουργήσει). Οι τύποι ιδιοτήτων και δωματίων συνδέονται, αφού δημιουργήσετε έναν τύπο ιδιοκτησίας, πρέπει να προσθέσετε έναν τύπο δωματίου, διαφορετικά οι διαχειριστές ιδιοκτησίας θα βλέπουν κόκκινα μηνύματα σφάλματος όταν προσπαθούν να διαμορφώσουν τις ιδιότητές τους. ');



	jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Μεταφόρτωση δεικτών χαρτών');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Χρησιμοποιείτε το Media Center για τη μεταφόρτωση δεικτών χάρτη. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Εδώ μπορείτε να βρείτε μια μεγάλη πηγή δεικτών. < /a> Η διαδικασία για τη μεταφόρτωση χαρακτηριστικών ιδιοκτησίας, χαρακτηριστικών δωματίου, τύπων δωματίων και άλλων είναι η ίδια. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Χαρακτηριστικά ιδιοτήτων');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Σε αυτό το βίντεο θα σας δείξουμε πώς να δημιουργείτε δυνατότητες ιδιοκτησίας και να ανεβάζετε εικόνες για αυτές.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Αρχεία καταγραφής');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Αυτό το βίντεο θα σας δείξει πώς να βλέπετε αρχεία καταγραφής. Εκτενής καταγραφή πραγματοποιείται όταν λειτουργεί το σύστημα. Όταν βρίσκεστε σε λειτουργία παραγωγής (Διαμόρφωση ιστότοπου> Αποσφαλμάτωση) δημιουργούνται λιγότερα αρχεία καταγραφής, οπότε αν δοκιμάζετε μια νέα λειτουργία πρέπει να ορίσετε τον ιστότοπό σας σε Ανάπτυξη. Εάν θέλετε να προσθέσετε τη δική σας καταγραφή στα σενάρια σας Jomres, ρίξτε μια ματιά στο <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> η σελίδα του εγχειριδίου μας για το πώς να το κάνουμε. </a> Εδώ θα ρίξουμε ένα ψεύτικο σφάλμα και μετά θα δούμε το αρχείο καταγραφής. Επειδή ο ιστότοπος έχει οριστεί σε Ανάπτυξη εκεί είναι πολλές πληροφορίες, κανονικά θα βλέπατε απλώς ένα μήνυμα που λέει ότι υπήρξε σφάλμα και έχει αναφερθεί. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Μετάφραση ετικετών και άλλων συμβολοσειρών');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Υπάρχουν διάφοροι τρόποι για να μεταφράσετε συμβολοσειρές γλώσσας στο Jomres, μπορείτε να επεξεργαστείτε αρχεία γλώσσας, αλλά ενδέχεται να αντικατασταθούν κατά την αναβάθμιση. Αντ\' αυτού, σας συνιστούμε να χρησιμοποιήσετε τα ενσωματωμένα εργαλεία μετάφρασης που είναι μοναδικά για εμάς λογισμικό. Εάν η συμβολοσειρά είναι κάτι που έχει εισαχθεί σε μια φόρμα, όπως το όνομα ενός τύπου δωματίου, μπορείτε να χρησιμοποιήσετε τη σελίδα Επεξεργασία ετικέτας. Εάν η συμβολοσειρά προέρχεται από το αρχείο γλώσσας, τότε μπορείτε να χρησιμοποιήσετε το εργαλείο επεξεργασίας αρχείων γλώσσας. Απλώς χρησιμοποιήστε το εργαλείο αναζήτησης του προγράμματος περιήγησης για να βρείτε τη συμβολοσειρά που θέλετε να αλλάξετε και, στη συνέχεια, κάντε κλικ στο σύνδεσμο για να την αλλάξετε. Αυτές οι αλλαγές αποθηκεύονται στη βάση δεδομένων και επομένως είναι ασφαλείς για ενημέρωση. Μπορείτε να έχετε διαφορετικές ετικέτες για διαφορετικούς τύπους ιδιοτήτων, ώστε να μπορείτε αλλάξτε τη νέα ιδιότητα σε νέο κάμπινγκ, για παράδειγμα, αλλάζοντας το αναπτυσσόμενο μενού Language Context στο επάνω μέρος της σελίδας πριν αλλάξετε την ετικέτα. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Προσθήκη ιδιοτήτων');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Κατηγορίες ακινήτων');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Οι κατηγορίες ιδιοτήτων είναι μια απλή δυνατότητα που επιτρέπει στους διαχειριστές ιδιοκτησίας να εκχωρούν τις ιδιότητές τους σε μια συγκεκριμένη κατηγορία. Οι διαχειριστές ιστότοπου μπορούν να δημιουργήσουν σύντομους κώδικες που θα εμφανίζουν όλες τις ιδιότητες σε μια κατηγορία, όπως φαίνεται σε αυτό το βίντεο.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Ιδιότητες προβολής διαχειριστή ιστότοπου');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Δεν διαχειρίζεστε ιδιότητες από εδώ, μπορείτε να διαχειρίζεστε μόνο ιδιότητες από το προσκήνιο, ωστόσο σε αυτήν τη λίστα μπορείτε να δείτε ιδιότητες που εκκρεμούν έγκριση (εάν η λειτουργία είναι ενεργοποιημένη) και οποιαδήποτε ελλιπής (π.χ. πρέπει ακόμα να ανεβάσετε εικόνες, να ορίσετε τιμές κ.λπ.). Κάντε κλικ στο όνομα ιδιοκτησίας για να μεταφερθείτε στον πίνακα ελέγχου για αυτήν την ιδιότητα. Στη συνέχεια, θα μπορείτε να χρησιμοποιήσετε τις ενότητες οδηγών στο επάνω μέρος της σελίδας για να δείτε τα βήματα που πρέπει να λάβετε για να συμπληρώσετε και να δημοσιεύσετε μια ιδιότητα. </p> ');
