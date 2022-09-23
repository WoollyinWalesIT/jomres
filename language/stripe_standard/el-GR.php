<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
jr_define('STRIPE_STANDARD_MARKETING',"Εκατομμύρια επιχειρήσεις όλων των μεγεθών – από startups έως μεγάλες επιχειρήσεις – χρησιμοποιούν το λογισμικό και τα API της Stripe για να δέχονται πληρωμές, να στέλνουν πληρωμές και να διαχειρίζονται τις επιχειρήσεις τους στο διαδίκτυο. " );

jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Εάν δεν έχετε ακόμη κλειδιά API, θα πρέπει πρώτα να επισκεφτείτε το Stripe και να λάβετε ένα διακριτικό API <a href='https://dashboard.stripe.com/developers' target='_blank'> Ζεύγος κλειδιών API</a>. Εάν δεν έχετε λογαριασμό Stripe, μπορείτε να δημιουργήσετε έναν νέο δωρεάν. Θα πρέπει πρώτα να δοκιμάσετε την ενσωμάτωσή σας ενεργοποιώντας τη λειτουργία δοκιμής και, στη συνέχεια, χρησιμοποιώντας τα κλειδιά δοκιμής στα πεδία που παρέχονται. είστε χαρούμενοι που όλα λειτουργούν, μπορείτε στη συνέχεια να μεταβείτε στη χρήση πλήκτρων Live και να ορίσετε τη λειτουργία δοκιμής εδώ σε Όχι.").

jr_define('STRIPE_STANDARD_API_TEST_MODE',"Δοκιμαστική λειτουργία");
jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Όταν οριστεί σε Ναι, τότε θα χρησιμοποιηθούν τα κλειδιά του Test API.");

jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Κλειδί Ζωντανής Δημοσίευσης");
jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Ζωντανό μυστικό κλειδί");

jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Δοκιμή Δημοσιεύσιμου κλειδιού");
jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Δοκιμαστικό μυστικό κλειδί");

jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Διεύθυνση URL Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Ρυθμίστε το <a href='https://dashboard.stripe.com/webhooks' target='_blank'> url webhook</a> σε αυτό το url, ώστε η Stripe να μπορεί να καλέσει πίσω και να επιβεβαιώσει την πληρωμή . Θα χρειαστεί να κάνετε κλικ στο Προσθήκη σημείου λήξης και να επικολλήσετε αυτήν τη διεύθυνση url στο πεδίο \"Διεύθυνση URL τέλους\". Ορίστε την έκδοση τελικού σημείου σε 2022-08-01. Επιτρέψτε του να στέλνει όλα τα συμβάντα. Όταν μεταβαίνετε από τη λειτουργία δοκιμής σε λειτουργία ζωντανής λειτουργίας στο Stripe, μπορεί να χρησιμοποιήσει το ίδιο τελικό σημείο.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Μυστικό Live Webhook Signing");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Δοκιμή μυστικού υπογραφής Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Όταν η Stripe καλεί τον διακομιστή πίσω για να επιβεβαιώσει την επιτυχή πληρωμή, στέλνει ένα μυστικό υπογραφής. Πρέπει να γνωρίζουμε αυτό το μυστικό υπογραφής, ώστε να καλέσουμε τον Stripe και να επιβεβαιώσουμε την εγκυρότητα του μηνύματος. Μπορείτε να δείτε το μυστικό υπογραφής από δημιουργώντας το webhook και, στη συνέχεια, στη σελίδα Webhook κάνοντας κλικ στη διεύθυνση url του webhook. Μόλις φτάσετε εκεί, μπορείτε να αποκαλύψετε το μυστικό της υπογραφής, το οποίο θα πρέπει να επικολλήσετε σε αυτό το πεδίο.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Η πληρωμή απέτυχε!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Δυστυχώς δεν μπορούμε να επιβεβαιώσουμε την επιτυχή πληρωμή. Επιστρέψτε στη φόρμα κράτησης και δοκιμάστε ξανά.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Επιστροφή στη Φόρμα Κράτησης");