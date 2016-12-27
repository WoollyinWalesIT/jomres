<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.22
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
date_default_timezone_set('UTC');

if (isset($_REQUEST[ 'autoupgrade' ])) {
    define('AUTO_UPGRADE', true);
} else {
    define('AUTO_UPGRADE', false);
    includeCDN();
    showheader();
    showTop();
}

// Set this to "development" to prevent the installer from setting the site to production and therefore deleting this file on run.
define('PROD_DEV', 'production');
// define ("PROD_DEV" , "development");

// Useful for testing installer changes, uncomment to prevent redirection after run
// define ( "ERRORS_SHOWN_NO_REDIRECT" , 1 );

$functionChecksPassed = true;
$folderChecksPassed = true;

error_reporting(E_ERROR);

$info = phpversion();
$v_arr = explode('-', $info);
$version = (float) $v_arr[ 0 ];

if ($version < 5.4) {
    output_message("Oops, it looks like you're running a version of PHP lower than 5.4. Jomres requires at least PHP5.4 and will not run on earlier versions", 'danger');
    $functionChecksPassed = false;
}

define('_JOMRES_INITCHECK', 1);
define('_JEXEC', 1);

define('JOMRES_TEMPLATEPATH_FRONTEND', 'BLANK'); // Just to prevent a notice

@ini_set('display_errors', 1);
@ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

if (jomres_create_location_file()) {
    include_location_file();
}

if (!defined('JRDS')) {
    $detect_os = strtoupper($_SERVER[ 'SERVER_SOFTWARE' ]); // converted to uppercase
    $isWin32 = strpos($detect_os, 'WIN32');
    $IIS = strpos($detect_os, 'IIS');
    if (isset($_SERVER[ 'SERVER_SIGNATURE' ])) {
        $signature = strtoupper($_SERVER[ 'SERVER_SIGNATURE' ]);
        $apacheSig = strpos($signature, 'APACHE');
    }
    $dir = dirname(realpath(__FILE__));
    if (strpos($dir, ':\\')) {
        define('JRDS', '\\');
    } else {
        if ($isWin32 === false || $apacheSig == true) {
            define('JRDS', '/');
        } else {
            define('JRDS', '\\');
        }
    }
}

$path = str_replace($_SERVER[ 'SCRIPT_NAME' ], '', dirname(realpath(__FILE__)));

define('JOMRESINSTALLPATH_BASE', $path);

if (!file_exists('integration.php')) {
    output_message('Error, cannot find the new Jomres integration script, you might not have downloaded Jomres v4 yet.', 'danger');
}

require_once 'integration.php';

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'registry.php')) {
    @unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'registry.php');
}

global $lkey;

if (isset($_GET[ 'forceMigrate' ]) && $_GET[ 'forceMigrate' ] == '1') {
    jomres_migrate();
}

if (componentsIntegrationExists()) {
    jomres_migrate();
}

if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php')) {
    require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_pre_installation.php';
}

if (!function_exists('import_countries')) {
    output_message("Error, the Jomres function import_countries does not exist.</h1><br/> This means that you've probably got a customised version of the Jomres file countries.php in your /".JOMRES_ROOT_DIRECTORY.'/remote_plugins/custom_code directory. Jomres has new country and region handling functionality, which makes your customised version of countries.php obsolete, please delete it then reload this page.', 'danger');
    $functionChecksPassed = false;
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'sessions'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'sessions'.JRDS)) {
        output_message('Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'sessions'.JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS)) {
        output_message('Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'cache'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'cache'.JRDS)) {
        output_message('Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'cache'.JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'updates'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'updates'.JRDS)) {
        output_message('Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'updates'.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'remote_plugins'.JRDS)) {
        output_message('Error, unable to make folder '.'remote_plugins'.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'core-plugins'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'core-plugins'.JRDS)) {
        output_message('Error, unable to make folder '.'core-plugins'.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages')) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages')) {
        output_message('Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes')) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes')) {
        output_message('Error, unable to make folder '.'uploadedimages'.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.JRDS.'rmtypes'." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures')) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures')) {
        output_message('Error, unable to make folder '.'uploadedimages'.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.JRDS.'pfeatures'." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.", 'danger');
        $folderChecksPassed = false;
    }
}

// Have to do this automatically otherwise Jomres will never run when upgrading from v2.5 to v3.x of joomla
if (this_cms_is_joomla()) {
    $result = true;
    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php')) {
        $result = unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php');
    }
    if (!$result) {
        output_message('Error, tried to delete <strong>'.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php'.'</strong> however file permissions prevent this from happening. You MUST delete this file before you can continue with the upgrade. This file is not used by Joomla 3.x+', 'danger');
        $folderChecksPassed = false;
    }
}

if ($folderChecksPassed && $functionChecksPassed) {
    $trashtables = jomresGetParam($_POST, 'trashtables', 0, 'integer');
    $manual_install_confirmation = jomresGetParam($_POST, 'manual_install_confirmation', '');
    if (!AUTO_UPGRADE) {
        if ($manual_install_confirmation == 'install') {
            define('ACTION', 'Install');
        }
        if ($manual_install_confirmation == 'upgrade') {
            define('ACTION', 'Upgrade');
        }
    } else {
        $_POST[ 'go' ] = 'GO >>';
        define('ACTION', 'Upgrade');
    }

    if ((!isset($_POST[ 'go' ]) || $_POST[ 'go' ] != 'GO >>') && $trashtables < 1) {
        if (!AUTO_UPGRADE) {
            proceed();
        }
    } else {
        if ($trashtables == 1) {
            trashTables();
        } else {
            if (!defined('ACTION')) {
                checkPropertyTableExists();
            }

            if (ACTION == 'Install') { // Installing
                //output_message ( "Creating Jomres tables if they don't already exist.");
                createJomresTables();
                add_api_tables();
                //output_message ( "Inserting sample data");
                insertSampleData();
                //output_message ( "Importing configuration settings to database");
                importSettings(0);
                //output_message ( "Creating images folders<br>" );
                copyImages();

                insertPortalTables();

                import_countries();
                import_regions();
                insert_pfeature_categories();
                
                require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_installation.php';
                showCompletedText();
            } elseif (ACTION == 'Upgrade') { // Upgrading
                $registry = jomres_singleton_abstract::getInstance('minicomponent_registry');
                $registry->regenerate_registry();

                $javascript_files_in_temp_dir = scandir_getfiles(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS, $extension = 'js');
                foreach ($javascript_files_in_temp_dir as $file) {
                    unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.$file);
                }

                //output_message ( "Data already installed, no need to re-create it");
                doTableUpdates();

                removeCronJob('invoice');
                removeCronJob('optimise');
                removeCronJob('exchangerates');

                addCronJob('session_files_cleanup', 'D', '');

                updateImages();

                import_countries();
                import_regions();

                import_images_to_media_centre_directories();

                require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_upgrade.php';
                showCompletedText();
            }
            track_installation_upgrade();
            updateMrConfig();
            updatePluginSettings();
            installCronjobs();
            createExtraIndexs();
        }
    }
}

if (!AUTO_UPGRADE) {
    showfooter();
}
if (PROD_DEV == 'production') {
    if (AUTO_UPGRADE) {
        jomresRedirect(jomres_installer_get_admin_url());
    }
}

// This function added to help us to understand installation success/failure to see if there are any changes needed to improve the behaviour of the installer.
// We are only interested in tracking that the installation completed successfully, so there's no need to trigger this on upgrade
function track_installation_upgrade()
{
    if (ACTION == 'Install') {
        PiwikTracker::$URL = 'http://analytics.jomres.net/';
        $piwikTracker = new PiwikTracker($idSite = 2);
        // Sends Tracker request via http
        $piwikTracker->doTrackGoal($idGoal = 2);
    }
}

// For Jomres 6.6.5, see if we need to copy large,medium and thumb images to a joomla subdirectory. Allows the use of Joomla gallery plugins.
function updateImages()
{
    if (!this_cms_is_joomla()) {
        return true;
    }

    $docs = scandir_getdirectories(JOMRES_IMAGELOCATION_ABSPATH);
    foreach ($docs as $dir) {
        if (is_dir(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.'joomla')) { // The directory already has a "joomla" subdir, therefore we will believe that this system has already been updated so we'll just drop out.
        return true;
        }
    }

    //output_message ( "Preparing to copy images and thumbs to a subdirectory to support Joomla gallery plugins.");
    //output_message ( "Scanning " . JOMRES_IMAGELOCATION_ABSPATH );
    foreach ($docs as $dir) {
        $large_images_array = array();
        $medium_images_array = array();
        $small_images_array = array();

        if (is_numeric($dir)) {
            // First we'll sort files into an appropriate corresponding array.
            $directory_files = scandir_getfiles(JOMRES_IMAGELOCATION_ABSPATH.$dir);
            foreach ($directory_files as $file) {
                if (strstr($file, 'thumbnail.jpg')) {
                    $small_images_array[ ] = $file;
                } elseif (strstr($file, 'thumbnail_med.jpg')) {
                    $medium_images_array[ ] = $file;
                } else {
                    $large_images_array[ ] = $file;
                }
            }
            // Next, we're going to look for thumbnails that don't have a corresponding larger image. This is because previous versions of Jomres didn't clean up thumbnails properly when main images were deleted
            //output_message ( "Cleaning up " . JOMRES_IMAGELOCATION_ABSPATH . $dir . ", deleting any images that do not have a corresponding main image file.");
            foreach ($small_images_array as $key => $small_image) {
                $main_filename = str_replace('_thumbnail.jpg', '.jpg', $small_image);
                if (!file_exists(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$main_filename)) {
                    unlink(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$small_image);
                    //output_message ( "Deleting " . JOMRES_IMAGELOCATION_ABSPATH . $dir . JRDS . $small_image );
                    unset($small_images_array[ $key ]);
                }
            }
            foreach ($medium_images_array as $key => $medium_image) {
                $main_filename = str_replace('_thumbnail_med.jpg', '.jpg', $medium_image);
                if (!file_exists(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$main_filename)) {
                    unlink(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$medium_image);
                    //output_message ( "Deleting " . JOMRES_IMAGELOCATION_ABSPATH . $dir . JRDS . $medium_image );
                    unset($medium_images_array[ $key ]);
                }
            }
        }
    }
}

function doTableUpdates()
{

    // Might not need this, commented out for now
    if (checkExtraServicesTableNeedsRenaming()) {
        renameExtraServicesTable();
    }

    update_property_features_images_paths();
    update_room_type_images_paths();

    if (!checkInvoicesPropertyuidColExists()) {
        alterInvoicesPropertyuidCol();
    }
    if (!checkInvoicesContractuidColExists()) {
        alterInvoicesContractuidCol();
    }
    createClickatellMessagesTable();
    if (!checkPropertysTimestampColExists()) {
        alterPropertysTimestampCol();
    }
    if (!checkCustomTemplatesTimestampColExists()) {
        alterCustomTemplatesTimestampCol();
    }
    if (!checkSubscriptionsTablesExist()) {
        createSubscriptionsTables();
    }
    alterPropertyLatLongToChar12();
    if (!checkExtrasTaxrateColExists()) {
        alterExtrasTaxrateCol();
    }

    if (!checkSubscribersSubscriptionPackageIdColExists()) {
        alterSubscribersSubscriptionPackageIdCol();
    }
    if (!checkSubscriptionExpirationDateColExists()) {
        doV9subscriptionUpdates();
    }

    if (!checkPfeaturesPtypeidColExists()) {
        alterPfeaturesPtypeidCol();
    }
    if (!checkContractsInvoiceColExists()) {
        alterContractsInvoice();
    }
    if (!checkGuestsDiscountColExists()) {
        alterGuestsDiscountCol();
    }
    if (!checkReviewsTablesExist()) {
        createReviewsTables();
    }
    if (!checkReviewDetailTableExists()) {
        createReviewDetailTable();
    }
    if (!checkBookingdataArchiveTableExists()) {
        createBookingdataArchiveTable();
    }
    if (!checkRoomtypePropertytypeXrefTableExists()) {
        createRoomtypePropertytypeXrefTable();
    }
    if (!checkPartnerTablesExist()) {
        createPartnerTables();
    }
    if (!checkManagerTimezoneColExists()) {
        alterManagerTimezoneCol();
    }
    if (!checkManagerSuspendedColExists()) {
        alterManagerSuspendedCol();
    }
    if (!checkInvoicesIsCommisionColExists()) {
        alterInvoicesIsCommisionCol();
    }
    if (!checkGuestProfileTableExists()) {
        createGuestProfileTable();
    }
    //if ( !checkExtraServicesTableExists() ) createExtraServicesTable(); // Disabled in Jomres 8.1
    if (!checkExtraServicesTaxColExists()) {
        alterExtraServicesTaxCol();
    }

    if (!checkCouponsBookingValidColsExists()) {
        alterCouponsBookingValidCols();
    }
    if (!checkLineitemsInclusiveColExists()) {
        alterLineitemsInclusiveCol();
    }
    if (!checkExtrasAutoselectColExists()) {
        alterExtrasAutoSelectCol();
    }
    if (!checkPtypesOrderColExists()) {
        alterPtypesOrderCol();
    }
    if (!checkAccessControlTableExists()) {
        createAccessControlTable();
    }
    if (!checkInvoicesGuestidColExists()) {
        alterInvoicesGuestidCol();
    }
    if (!checkExtraServicesTaxtax_codeColExists()) {
        alterExtraServicesTaxtax_codeCol();
    }
    if (!checkCountriesTableExists()) {
        createCountriesTable();
    }
    if (!checkCustomtemplatesPtypeidColExists()) {
        alterCustomtemplatesPtypeidCol();
    }

    migrate_region_names();

    if (!checkPropertysApprovedColExists()) {
        alterPropertysApprovedCol();
    }
    if (!checkPropertysSuperiorColExists()) {
        alterPropertysSuperiorCol();
    }
    if (!checkPropertysMetakeywordsColExists()) {
        alterPropertysMetakeywordsCol();
    }
    if (!checkGuestsVatcodeColExists()) {
        alterGuestsVatcodeCol();
    }
    if (!checkTaxRulesTableExists()) {
        createTaxRulesTable();
    }
    if (!checkInvoicesVATFlagColExists()) {
        alterInvoicesVATFlagCol();
    }
    if (!checkCratesTaxRateColExists()) {
        alterCratesTaxRateCol();
    }
    if (!checkPTypeXrefColExists()) {
        alterPTypeXrefCol();
    }
    if (!checkContractsChannelManagerBookingColExists()) {
        alterContractsChannelManagerBookingCol();
    }
    if (!checkManagerSimpleconfigColExists()) {
        alterManagerSimpleconfigCol();
    }
    if (!checkTarifftypesDescriptionColExists()) {
        alterTarifftypesDescriptionCol();
    }
    if (!checkContractsApprovedColExists()) {
        alterContractsApproved();
    }
    if (!checkCustomertypesIsChildColExists()) {
        alterCustomertypesIsChildCol();
    }

    checkLineitemsInitqtyColFloat();

    if (!checkContractsBookingdataarchiveColExists()) {
        alterContractsBookingdataarchiveCol();
    }
    if (!checkBookingdataarchiveContractidColExists()) {
        alterBookingdataarchiveContractid();
    }

    if (!checkContractsLangColExists()) {
        alterContractsLang();
    }

    if (!checkPropertysSiteIdColExists()) {
        alterPropertysSiteIdCol();
    }
    if (!checkTaxratesEUColExists()) {
        alterTaxratesEUCol();
    }
    if (!checkManagerLastactiveColExists()) {
        alterManagerLastactiveCol();
    }
    if (!checkContractsLastchangedColExists()) {
        alterContractsLastchangedCol();
    }
    if (!checkPropertysLastchangedColExists()) {
        alterPropertysLastchangedCol();
    }
    if (!checkLineitemsIspaymentColExists()) {
        alterLineitemsIspaymentCol();
    }

    drop_portal_bookings_table();
    drop_portal_users_table();

    if (ACTION != 'Install') {
        move_license_key_to_site_settings();
    }

    save_configuration_file();

    if (!checkInvoicePaymentXrefTableExists()) {
        createInvoicePaymentXrefTable();
    }
    if (!checkExtrasValidfromColExists()) {
        alterExtrasValidfromCol();
    }
    if (!checkExtrasIncludeinlistsColExists()) {
        alterExtrasIncludeinlistsCol();
    }
    if (!checkRfeaturesImageColExists()) {
        alterRfeaturesImageCol();
    }
    if (!checkPfeaturesCategoriesTableExists()) {
        createPfeaturesCategoriesTable();
    }
    if (!checkPfeaturesCategoryColExists()) {
        alterPfeaturesCategoryCol();
    }
    if (checkRoomSmokingColExists()) {
        alterRoomsSmokingCol();
    }
    if (checkContractsSmokingColExists()) {
        alterContractsSmokingCol();
    }
    if (!checkExtraservicesQtyColExists()) {
        alterExtraservicesQtyCol();
    }
    if (!checkPartnerBookingsTableExists()) {
        createPartnerBookingsTable();
    }
    if (!checkGuestsPartnerIdColExists()) {
        alterGuestsPartnerIdCol();
    }

    if (!checkExtrasLimitedtoroomtypeColExists()) {
        alterExtrasLimitedtoroomtypeCol();
    }

    if (!checkContractsReferrerColExists()) {
        alterContractsReferrerCol();
    }
    if (!checkPtypesMrpsrpFlagColExists()) {
        alterPtypesMrpsrpFlagCol();
    }

    if (checkRtypesSrpOnlyFlagColExists()) {
        dropRtypesSrpOnlyFlagCol();
    }
    if (!checkPropertysPermitColExists()) {
        alterPropertysPermitCol();
    }

    if (checkManagersUsernameColExists()) {
        doUserRolesUpdates();
    }

    change_default_date_value_for_subscriptions_table();

    if (!checkPtypesMarkerColExists()) {
        alterPtypesMarkerCol();
    }

    drop_orphan_line_items_table();
    drop_room_images_table();
    add_api_tables();
    updateSiteSettings('update_time', time());
    
}


function add_api_tables() {
    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_clients (
        client_id VARCHAR(80) NOT NULL, 
        client_secret VARCHAR(80), 
        redirect_uri VARCHAR(2000) NOT NULL, 
        grant_types VARCHAR(80), 
        scope VARCHAR(1000), 
        user_id VARCHAR(80), 
        CONSTRAINT clients_client_id_pk 
        PRIMARY KEY (client_id)
        )";
    doInsertSql($query,"");

    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_access_tokens (access_token VARCHAR(40) NOT NULL, client_id VARCHAR(80) NOT NULL, user_id VARCHAR(255), expires TIMESTAMP NOT NULL, scope VARCHAR(2000), CONSTRAINT access_token_pk PRIMARY KEY (access_token))";
    doInsertSql($query,"");

    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_authorization_codes (authorization_code VARCHAR(40) NOT NULL, client_id VARCHAR(80) NOT NULL, user_id VARCHAR(255), redirect_uri VARCHAR(2000), expires TIMESTAMP NOT NULL, scope VARCHAR(2000), CONSTRAINT auth_code_pk PRIMARY KEY (authorization_code))";
    doInsertSql($query,"");

    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_refresh_tokens (refresh_token VARCHAR(40) NOT NULL, client_id VARCHAR(80) NOT NULL, user_id VARCHAR(255), expires TIMESTAMP NOT NULL, scope VARCHAR(2000), CONSTRAINT refresh_token_pk PRIMARY KEY (refresh_token))";
    doInsertSql($query,"");


    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_users (username VARCHAR(255) NOT NULL, password VARCHAR(2000), first_name VARCHAR(255), last_name VARCHAR(255), CONSTRAINT username_pk PRIMARY KEY (username))";
    doInsertSql($query,"");


    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_scopes (scope TEXT, is_default BOOLEAN)";
    doInsertSql($query,"");

    $query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_jwt (client_id VARCHAR(80) NOT NULL, subject VARCHAR(80), public_key VARCHAR(2000), CONSTRAINT jwt_client_id_pk PRIMARY KEY (client_id))";
    doInsertSql($query,"");

    // We need to see if there's a "system" user in the database, if there's not we'll create them. This is a once only action
    $query = "SELECT client_id,scope FROM #__jomres_oauth_clients WHERE client_id = 'system' LIMIT 1";
    $result = doSelectSql($query);
    if (count($result)==0) {
        $query = "INSERT INTO #__jomres_oauth_clients 
        (`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id`) 
        VALUES 
        ('system','".createNewAPIKey()."','',null,'*',99999999999999999999)";
        if ( !doInsertSql( $query, jr_gettext( '_OAUTH_CREATED', '_OAUTH_CREATED', false ) ) )
            throw new Exception("Unable to update oauth client details, mysql db failure");
    }
}

function checkManagersUsernameColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'username' ";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function doUserRolesUpdates()
{
    //output_message ( "Updating user role for super property managers");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 90 WHERE `pu` = 1 ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to update super property manager access level', 'danger');
    }

    //output_message ( "Updating user role for property managers");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 70 WHERE `access_level` = 2 ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to update property manager access level', 'danger');
    }

    //output_message ( "Updating user role for receptionist");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 50 WHERE `access_level` = 1 ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to update receptionist access level', 'danger');
    }

    //output_message ( "Editing __jomres_managers table dropping property uid column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `property_uid` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop property uid column from __jomres_managers table', 'danger');
    }

    //output_message ( "Editing __jomres_managers table dropping username column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `username` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop username column from __jomres_managers table', 'danger');
    }

    //output_message ( "Editing __jomres_managers table dropping property uid column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `pu` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop pu column from __jomres_managers table', 'danger');
    }
}

function alterPtypesMarkerCol()
{
    //output_message ( "Editing __jomres_ptypes table adding marker column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `marker` varchar( 255 ) DEFAULT 'free-map-marker-icon-red.png' AFTER `mrp_srp_flag`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_ptypes marker', 'danger');
    }
}

function checkPtypesMarkerColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'marker'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function change_default_date_value_for_subscriptions_table()
{
    $query = "ALTER TABLE `#__jomresportal_subscriptions` MODIFY COLUMN `raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01', MODIFY COLUMN `expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to modify __jomresportal_subscriptions raised_date and expiration_date columns default value', 'danger');
    }
}

function alterPropertysPermitCol()
{
    //output_message ( "Editing __jomres_propertys table adding permit_number column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `permit_number` varchar( 255 ) DEFAULT '' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys permit_number', 'danger');
    }
}

function checkPropertysPermitColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'permit_number'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function removeCronJob($job = '')
{
    if ($job == '') {
        return;
    }

    jr_import('jomres_cron');
    $cron = new jomres_cron();
    $cron->removeJob($job);
}

function addCronJob($job = '', $schedule = 'D', $params = '')
{
    if ($job == '') {
        return;
    }

    jr_import('jomres_cron');
    $cron = new jomres_cron();
    $cron->addJob($job, $schedule, $params);
}

function drop_orphan_line_items_table()
{
    $query = 'DROP TABLE IF EXISTS `#__jomresportal_orphan_lineitems` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop #__jomresportal_orphan_lineitems table', 'danger');
    }
}

function drop_room_images_table()
{
    $query = 'DROP TABLE IF EXISTS `#__jomres_room_images` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop #__jomres_room_images table', 'danger');
    }
}

function checkRtypesSrpOnlyFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_room_classes LIKE 'srp_only'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function dropRtypesSrpOnlyFlagCol()
{
    //output_message ( "Editing __jomres_room_classes table dropping srp_only column");
    $query = 'ALTER TABLE #__jomres_room_classes DROP COLUMN `srp_only` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop __jomres_room_classes srp_only column', 'danger');
    }
}

function alterPtypesMrpsrpFlagCol()
{
    //output_message ( "Editing __jomres_ptypes table adding mrp_srp_flag column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `mrp_srp_flag` TINYINT DEFAULT '2' AFTER `order`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_ptypes mrp_srp_flag', 'danger');
    }
}

function checkPtypesMrpsrpFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'mrp_srp_flag'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsReferrerCol()
{
    //output_message ( "Editing __jomres_contracts table adding referrer column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `referrer` varchar( 255 ) DEFAULT 'Jomres' AFTER `last_changed` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts referrer', 'danger');
    }
}

function checkContractsReferrerColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'referrer'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtrasLimitedtoroomtypeCol()
{
    //output_message ( "Editing __jomres_extras table adding limited_to_room_type column");
    $query = 'ALTER TABLE `#__jomres_extras` ADD `limited_to_room_type` INT(11) NOT NULL DEFAULT 0 NOT NULL AFTER `include_in_property_lists`';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras limited_to_room_type', 'danger');
    }
}

function checkExtrasLimitedtoroomtypeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'limited_to_room_type'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterGuestsPartnerIdCol()
{
    //output_message ( "Editing __jomres_guests table adding partner_id columns");
    $query = 'ALTER TABLE `#__jomres_guests` ADD `partner_id` INT(11) NOT NULL DEFAULT 0 NOT NULL AFTER `vat_number_validation_response` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guests partner_id', 'danger');
    }
}

function checkGuestsPartnerIdColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'partner_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createPartnerBookingsTable()
{
    //output_message ( "Creating _jomres_partner_bookings table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_partner_bookings` (
		`id` INT(11) auto_increment,
		`contract_uid` INT(11) NOT NULL DEFAULT 0,
		`partner_id` INT(11) NOT NULL DEFAULT 0,
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table _jomres_partner_bookings ', 'danger');
    }
}

function checkPartnerBookingsTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_partner_bookings')) {
            return true;
        }
    }

    return false;
}

function checkExtraservicesQtyColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices LIKE 'service_qty'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtraservicesQtyCol()
{
    //output_message ( "Editing __jomres_extraservices table adding services_qty column");
    $query = 'ALTER TABLE #__jomres_extraservices ADD `service_qty` FLOAT NOT NULL DEFAULT 1 AFTER `tax_code` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extraservices service_qty column', 'danger');
    }
}

function checkRoomSmokingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_rooms LIKE 'smoking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterRoomsSmokingCol()
{
    //output_message ( "Editing __jomres_rooms table dropping smoking, room_disabled_access columns");
    $query = 'ALTER TABLE #__jomres_rooms DROP COLUMN `smoking`, DROP COLUMN `room_disabled_access` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop __jomres_rooms smoking, room_disabled_access columns', 'danger');
    }
}

function checkContractsSmokingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'smoking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsSmokingCol()
{
    //output_message ( "Editing __jomres_contracts table dropping smoking column");
    $query = 'ALTER TABLE #__jomres_contracts DROP COLUMN `smoking` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop __jomres_contracts smoking column', 'danger');
    }
}

function checkPfeaturesCategoriesTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_hotel_features_categories')) {
            return true;
        }
    }

    return false;
}

function createPfeaturesCategoriesTable()
{
    //output_message ( "Creating jomres_hotel_features_categories table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features_categories` (
		`id` int(11) auto_increment,
		`title`  varchar(255) NOT NULL DEFAULT 0,
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table jomres_hotel_features_categories ', 'danger');
    } else {
        insert_pfeature_categories();
    }
}

function checkPfeaturesCategoryColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'cat_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPfeaturesCategoryCol()
{
    //output_message ( "Editing __jomres_hotel_features table adding cat_id column");
    $query = 'ALTER TABLE #__jomres_hotel_features ADD `cat_id` INT(11) NOT NULL DEFAULT 0 AFTER `ptype_xref` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_hotel_features cat_id', 'danger');
    }
}

function checkRfeaturesImageColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_room_features LIKE 'image'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterRfeaturesImageCol()
{
    //output_message ( "Editing __jomres_room_features table adding image column");
    $query = 'ALTER TABLE `#__jomres_room_features` ADD `image` VARCHAR(255) NULL DEFAULT NULL AFTER `ptype_xref`';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_room_features image column', 'danger');
    }
}

function alterExtrasIncludeinlistsCol()
{
    //output_message ( "Editing __jomres_extras table adding include_in_property_lists column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `include_in_property_lists` BOOL NOT NULL DEFAULT '1' AFTER `room_classes_uid`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras include_in_property_lists', 'danger');
    }
}

function checkExtrasIncludeinlistsColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'include_in_property_lists'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtrasValidfromCol()
{
    output_message('Editing __jomres_extras table adding validfrom column');
    $query = 'ALTER TABLE `#__jomres_extras` ADD `validfrom` DATETIME DEFAULT NULL AFTER `property_uid`';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras validfrom', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_extras` ADD `validto` DATETIME DEFAULT NULL AFTER `validfrom`';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras validto', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_extras` ADD `room_classes_uid` INTEGER AFTER `validto`';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras room_classes_uid', 'danger');
    }
}

function checkExtrasValidfromColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'validfrom'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createInvoicePaymentXrefTable()
{
    //output_message ( "Creating jomres_invoice_payment_ref table");
    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_invoice_payment_ref` (
		`id` int(11) auto_increment,
		`invoice_id`  int(11),
		`gateway` CHAR(255) NOT NULL DEFAULT '',
		`paid` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY	(`id`)
		) ";
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table __jomres_invoice_payment_ref ', 'danger');
    }
}

function checkInvoicePaymentXrefTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_invoice_payment_ref')) {
            return true;
        }
    }

    return false;
}

function move_license_key_to_site_settings()
{
    if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
        $query = "SELECT value FROM #__jomres_settings WHERE property_uid = 0 AND akey = 'jomres_licensekey' LIMIT 1";
        $license_key = doSelectSql($query, 1);
        if (trim($license_key) != '') {
            //output_message ( "Moving license key from settings table to site settings", "info" );
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $siteConfig->insert_new_setting('licensekey', $license_key);
            // now this query will remove the license key from jomres_settings
            $query = "DELETE FROM #__jomres_settings WHERE property_uid = 0 AND akey = 'jomres_licensekey'";
            doInsertSql($query, '');
        }
    }
}

function save_configuration_file()
{
    if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
        //output_message ( "Saving new configuration.php file which stores the site settings", "info" );
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $tmpConfig = $siteConfig->get();
        $tmpConfig['development_production'] = PROD_DEV;
        if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($tmpConfig, true).';
')) {
            output_message('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', 'danger');
        } else {
            if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) { // Triple check that the settings file has been created before we drop this table
                $query = 'DROP TABLE IF EXISTS #__jomres_site_settings';
                if (!doInsertSql($query, '')) {
                    output_message('Error dropping the _jomres_site_settings table', 'danger');
                } else {
                    output_message('Dropped the _jomres_site_settings table', 'info');
                }
            }
        }
    }
}

function drop_portal_bookings_table()
{
    $query = 'DROP TABLE IF EXISTS #__jomresportal_bookings';
    doInsertSql($query, '');
}

function drop_portal_users_table()
{
    $query = 'DROP TABLE IF EXISTS #__jomresportal_users';
    doInsertSql($query, '');
}

function checkLineitemsIspaymentColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'is_payment'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterLineitemsIspaymentCol()
{
    //output_message ( "Editing __jomresportal_lineitems table adding is_payment column");
    $query = 'ALTER TABLE `#__jomresportal_lineitems` ADD `is_payment`  TINYINT(1) DEFAULT 0 NOT NULL';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_lineitems is_payment', 'danger');
    }
    $query = 'ALTER TABLE #__jomresportal_lineitems MODIFY name varchar(255)';
    $result = doInsertSql($query);
}

function alterPropertysLastchangedCol()
{
    //output_message ( "Editing __jomres_propertys table adding last_changed column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys last_changed', 'danger');
    }
}

function checkPropertysLastchangedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'last_changed'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsLastchangedCol()
{
    //output_message ( "Editing __jomres_contracts table adding last_changed column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts last_changed', 'danger');
    }
}

function checkContractsLastchangedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'last_changed'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterManagerLastactiveCol()
{
    //output_message ( "Editing __jomres_managers table adding last_active column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `last_active` datetime default NULL AFTER `users_timezone` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_managers last_active', 'danger');
    }
}

function checkManagerLastactiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'last_active'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterTaxratesEUCol()
{
    //output_message ( "Editing __jomresportal_taxrates table adding is_eu_country column");
    $query = "ALTER TABLE `#__jomresportal_taxrates` ADD `is_eu_country` BOOL NOT NULL DEFAULT '0' AFTER `rate` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_taxrates is_eu_country', 'danger');
    }
}

function checkTaxratesEUColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomresportal_taxrates LIKE 'is_eu_country'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertysSiteIdCol()
{
    //output_message ( "Editing __jomres_propertys table adding property_site_id column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `property_site_id` varchar(255) NULL AFTER `approved` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys property_site_id', 'danger');
    }
}

function checkPropertysSiteIdColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'property_site_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsLang()
{
    //output_message ( "Editing __jomres_contracts table adding booking_language column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `booking_language` CHAR(5) NOT NULL DEFAULT 'en-GB' AFTER `secret_key_used` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts booking_language', 'danger');
    }
}

function checkContractsLangColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'booking_language'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function checkCustomertypesIsChildColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_customertypes LIKE 'is_child'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterCustomertypesIsChildCol()
{
    //output_message ( "Editing __jomres_customertypes table adding is_child column");
    $query = "ALTER TABLE `#__jomres_customertypes` ADD `is_child` BOOL NULL DEFAULT '0' AFTER `order` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_customertypes is_child', 'danger');
    }
}

// In Jomres 8.1 we're offering the ability to use a different path to the Jomres root directory due to requirements of the wordpress repository. As a result, we need to change the paths to the property feature and room type images.

function update_room_type_images_paths()
{
    $query = 'SELECT  `room_classes_uid` , `image` FROM #__jomres_room_classes';
    $room_types = doSelectSql($query);
    if (count($room_types) > 0) {
        foreach ($room_types as $room_type) {
            $bang = explode('/', $room_type->image);
            if (count($bang) > 1) { // hasn't been updated yet.
                $image = end($bang);
                $query = "UPDATE #__jomres_room_classes SET `image`='".$image."' WHERE room_classes_uid = ".$room_type->room_classes_uid;
                doInsertSql($query);
            }
        }
    }
}

function update_property_features_images_paths()
{
    $query = 'SELECT  `hotel_features_uid` , `image` FROM #__jomres_hotel_features';
    $features = doSelectSql($query);
    if (count($features) > 0) {
        foreach ($features as $feature) {
            $bang = explode('/', $feature->image);
            if (count($bang) > 1) { // hasn't been updated yet.
                $image = end($bang);
                $query = "UPDATE #__jomres_hotel_features SET `image`='".$image."' WHERE hotel_features_uid = ".$feature->hotel_features_uid;
                doInsertSql($query);
            }
        }
    }
}

function renameExtraServicesTable()
{
    $query = 'RENAME TABLE `#__jomres_extraServices` TO `#__jomres_temp`';
    $result = doSelectSql($query);

    $query = 'RENAME TABLE `#__jomres_temp` TO `#__jomres_extraservices`';
    $result = doSelectSql($query);

    //output_message ( "Renamed `#__jomres_extraServices to #__jomres_extraservices");
}

function checkExtraServicesTableNeedsRenaming()
{
    $query = "SHOW VARIABLES LIKE 'lower_case_table_names';";
    $case_sensitivity = doSelectSql($query, 1);
    if ($case_sensitivity == 0) {
        output_message('Warning, Jomres attempted to check for the existance of the jomres_extraServices table, however your lower_case_table_names setting in mySql is set to 0 (zero) so we cannot test for this table name as mySql will return the table name as jomres_extraservices, even if it\'s stored as jomres_extraServices.<br/> Please check your table names (using a tool such as phpMyAdmin) and if the table is named xxxx_jomres_extraServices rename it manually to xxx_jomres_extraservices.  If you have already done this in the past you can ignore this warning.', 'warning');

        return false;
    }

    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');

    foreach ($result as $r) {
        if (strstr($r->$string, 'jomres_extraServices')) {
            return true;
        }
    }

    return false;
}

function alterBookingdataarchiveContractid()
{
    //output_message ( "Editing __jomres_booking_data_archive table adding contract_uid column");
    $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD `contract_uid` INT DEFAULT 0 NOT NULL AFTER `date` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_booking_data_archive contract_uid', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD `tag` varchar(255) NULL AFTER `contract_uid` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_booking_data_archive tag', 'danger');
    }
}

function checkBookingdataarchiveContractidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_booking_data_archive LIKE 'contract_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsBookingdataarchiveCol()
{
    //output_message ( "Editing __jomres_contracts table adding booking_data_archive_id column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `booking_data_archive_id` INT DEFAULT '0' NOT NULL AFTER `approved` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts booking_data_archive_id', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `secret_key` CHAR(100) AFTER `booking_data_archive_id` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts secret_key', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `secret_key_used` TINYINT DEFAULT 0 NOT NULL AFTER `secret_key` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts secret_key_used', 'danger');
    }
}

function checkContractsBookingdataarchiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'booking_data_archive_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function checkLineitemsInitqtyColFloat()
{
    $query = 'DESCRIBE #__jomresportal_lineitems';
    $result = doSelectSql($query);
    foreach ($result as $field) {
        if ($field->Field == 'init_qty' && $field->Type == 'int(11)') {
            $query = 'ALTER TABLE #__jomresportal_lineitems MODIFY init_qty FLOAT';
            $result = doInsertSql($query);
        }
    }
}

function alterContractsApproved()
{
    //output_message ( "Editing __jomres_contracts table adding approved column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `approved` TINYINT( 1 ) DEFAULT 1 NOT NULL AFTER `channel_manager_booking` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts approved', 'danger');
    }
}

function checkContractsApprovedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'approved'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterTarifftypesDescriptionCol()
{
    //output_message ( "Editing __jomcomp_tarifftypes table adding description column");
    $query = 'ALTER TABLE `#__jomcomp_tarifftypes` ADD `description` VARCHAR(3000) DEFAULT NULL AFTER `name` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomcomp_tarifftypes description', 'danger');
    }
}

function checkTarifftypesDescriptionColExists()
{
    $query = "SHOW COLUMNS FROM #__jomcomp_tarifftypes LIKE 'description'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterManagerSimpleconfigCol()
{
    //output_message ( "Editing __jomres_managers table adding simple_configuration column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `simple_configuration` tinyint( 1 ) default 1 AFTER `suspended` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_managers simple_configuration', 'danger');
    }
}

function checkManagerSimpleconfigColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'simple_configuration'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsChannelManagerBookingCol()
{
    //output_message ( "Editing __jomres_contracts table adding channel_manager_booking column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `channel_manager_booking` BOOL NOT NULL DEFAULT '0' AFTER `invoice_uid` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts channel_manager_booking', 'danger');
    }
}

function checkContractsChannelManagerBookingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'channel_manager_booking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function checkPTypeXrefColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'ptype_xref'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPTypeXrefCol()
{
    //output_message ( "Editing __jomres_hotel_features table renaming ptype_id column");
    $query = 'ALTER TABLE `#__jomres_hotel_features` CHANGE COLUMN ptype_id ptype_xref text NULL DEFAULT NULL';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_hotel_features ptype_xref', 'danger');
    }

    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, 'jomres_custom_property_fields_fields')) {
            $query = 'ALTER TABLE `#__jomres_custom_property_fields_fields` ADD `ptype_xref` text NULL DEFAULT NULL AFTER `order` ';
            if (!doInsertSql($query, '')) {
                if (!AUTO_UPGRADE) {
                    output_message('Error, unable to add __jomres_custom_property_fields_fields column ptype_xref', 'danger');
                }
            }
        }
    }

    $query = 'ALTER TABLE `#__jomres_room_features` ADD `ptype_xref` text NULL DEFAULT NULL AFTER `property_uid` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_room_features ptype_xref', 'danger');
    }

    $query = 'ALTER TABLE `#__jomres_custom_fields` ADD `ptype_xref` text NULL DEFAULT NULL AFTER `required` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_custom_fields ptype_xref', 'danger');
    }
}

function checkCratesTaxRateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_c_rates LIKE 'tax_rate'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterCratesTaxRateCol()
{
    //output_message ( "Editing __jomresportal_c_rates table adding tax_rate column");
    $query = "ALTER TABLE `#__jomresportal_c_rates` ADD `tax_rate` INT NULL DEFAULT '1' AFTER `archived_date` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_c_rates tax_rate', 'danger');
    }
}

function checkInvoicesVATFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'vat_will_be_charged'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterInvoicesVATFlagCol()
{
    //output_message ( "Editing __jomresportal_invoices table adding vat_will_be_charged column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `vat_will_be_charged` BOOL NOT NULL DEFAULT '1' AFTER `is_commission` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_invoices vat_will_be_charged', 'danger');
    }
}

function createTaxRulesTable()
{
    //output_message ( "Creating jomres_tax_rules table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_tax_rules` (
		`id` int(11) auto_increment,
		`tax_rate_id`  int(11),
		`country_id` int(11),
		`region_id` int(11),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table jomres_tax_rules ', 'danger');
    }
}

function checkTaxRulesTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_tax_rules')) {
            return true;
        }
    }

    return false;
}

function alterGuestsVatcodeCol()
{
    //output_message ( "Editing __jomres_guests table adding vat_number/vat_number_validated columns");
    $query = "ALTER TABLE `#__jomres_guests` ADD `vat_number` CHAR (25) DEFAULT '' NOT NULL AFTER `discount` "; // Most I could find was up to possibly 15 chars. Adding 10 to be on the safe side.
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guests vat_number', 'danger');
    }
    $query = "ALTER TABLE `#__jomres_guests` ADD `vat_number_validated` BOOL NOT NULL DEFAULT '0' AFTER `vat_number` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guests vat_number_validated', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_guests` ADD `vat_number_validation_response` TEXT NULL AFTER `vat_number_validated` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guests vat_number_validation_response', 'danger');
    }

    $query = "ALTER TABLE `#__jomres_guest_profile` ADD `vat_number` CHAR (25) DEFAULT '' NOT NULL AFTER `email` "; // Most I could find was up to possibly 15 chars. Adding 10 to be on the safe side.
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guest_profile vat_number', 'danger');
    }
    $query = "ALTER TABLE `#__jomres_guest_profile` ADD `vat_number_validated` BOOL NOT NULL DEFAULT '0' AFTER `vat_number` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guest_profile vat_number_validated', 'danger');
    }
    $query = 'ALTER TABLE `#__jomres_guest_profile` ADD `vat_number_validation_response` TEXT NULL AFTER `vat_number_validated` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guest_profile vat_number_validation_response', 'danger');
    }
}

function checkGuestsVatcodeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'vat_number'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertysMetakeywordsCol()
{
    //output_message ( "Editing __jomres_propertys table adding metakeywords column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `metakeywords` TEXT NULL AFTER `metadescription` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys metakeywords', 'danger');
    }
}

function checkPropertysMetakeywordsColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'metakeywords'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertysSuperiorCol()
{
    //output_message ( "Editing __jomres_propertys table adding superior column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `superior` TINYINT( 1 ) DEFAULT '0' NOT NULL AFTER `stars` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys superior', 'danger');
    }
}

function checkPropertysSuperiorColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'superior'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertysApprovedCol()
{
    //output_message ( "Editing __jomres_propertys table adding approved column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `approved`  BOOL NOT NULL DEFAULT '1' AFTER `timestamp` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys approved', 'danger');
    }
}

function checkPropertysApprovedColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'approved'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/*
Added a new "migrate region names to region ids" function, but will leave it disabled for now. New Jomres functionality forces us to store region names as the database region ids, however we don't want this new functionality to negatively impact users with existing data so search functionality has been updated to search both region names and region ids in the jomres_propertys table. For now we BELIEVE that this will be sufficient to provide a painless upgrade, however we'll keep this migration function in our back pockets in case we find that users benefit from migrating their properties to region ids.
*/
function migrate_region_names()
{
    $query = 'SELECT propertys_uid,property_region FROM #__jomres_propertys';
    $result = doSelectSql($query);
    if (count($result) > 0) {

        /*
        UPDATE #__jomres_propertys
            SET property_region = CASE propertys_uid
                WHEN 1 THEN 3
                WHEN 2 THEN 4
                WHEN 3 THEN 5
            END
        WHERE propertys_uid IN (1,2,3)
        */
        $query = '
		UPDATE #__jomres_propertys
			SET property_region = CASE propertys_uid
				';
        $property_uids_array = array();
        foreach ($result as $property) {
            if (!is_numeric($property->property_region)) {
                $region_id = installer_find_region_id($property->property_region);
                if (!is_null($region_id)) {
                    $query .= 'WHEN '.(int) $property->propertys_uid.' THEN '.(int) $region_id.'
			';

                    $property_uids_array[ ] = $property->propertys_uid;
                }
            }
        }
        if (count($property_uids_array) > 0) {
            $in_str = ' 
			END
				WHERE propertys_uid IN (';
            foreach ($property_uids_array as $id) {
                $in_str .= $id.',';
            }
            $in_str = substr($in_str, 0, -1).')';
            if (doInsertSql($query.$in_str, '')) {
                output_message('Updated property regions to property region ids');
            } else {
                output_message('Failed to update property regions to property region ids', 'danger');
            }
        }
    }
}

// The functions.php version of this function has recently had a call to a Joomla function added. This creates a problem during installation. Rather than making the find_region_id ALWAYS check for the existence of the CMS specific function every time it's run, we'll duplicate the function here instead. find_region_id has the potential to be called many times, so the fewer calls we can make to check if a function exists when 99.99999% if the time it does, the less load we're creating.

function installer_find_region_id($region)
{
    if (is_numeric($region)) { // It's already numeric
    return $region;
    }

    $jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
    foreach ($jomres_regions->regions as $r) {
        if (strcasecmp($r[ 'regionname' ], $region) == 0) {
            return (int) $r[ 'id' ];
        }
    }

    return null;
}

function alterCustomtemplatesPtypeidCol()
{
    //output_message ( "Editing __jomres_custom_templates table adding ptype_id column");
    $query = "ALTER TABLE `#__jomres_custom_templates` ADD `ptype_id` INT( 11 ) DEFAULT '0' NOT NULL AFTER `value` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_custom_templates ptype_id', 'danger');
    }
}

function checkCustomtemplatesPtypeidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_custom_templates LIKE 'ptype_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createCountriesTable()
{
    //output_message ( "Creating _jomres_countries table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_countries` (
		`id` int(11) auto_increment,
		`countrycode` VARCHAR(2),
		`countryname` VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table _jomres_countries ', 'danger');
    }

    //output_message ( "Creating _jomres_regions table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_regions` (
		`id` int(11) auto_increment,
		`countrycode` VARCHAR(2),
		`regionname` VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table _jomres_countries ', 'danger');
    }
}

function checkCountriesTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_countries') || strstr($r->$string, '_jomres_regions')) {
            return true;
        }
    }

    return false;
}

function checkExtraServicesTaxtax_codeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices LIKE 'tax_code'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtraServicesTaxtax_codeCol()
{
    //output_message ( "Editing __jomres_extraservices table adding tax_code column");
    $query = "ALTER TABLE `#__jomres_extraservices` ADD `tax_code` CHAR (10) DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extraservices tax_code', 'danger');
    }
}

function checkInvoicesGuestidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'guest_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterInvoicesGuestidCol()
{
    //output_message ( "Editing __jomresportal_invoices table adding guest_id column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `guest_id` int(11) NOT NULL DEFAULT '0' AFTER `cms_user_id` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_invoices guest_id', 'danger');
    }
}

function createAccessControlTable()
{
    //output_message ( "Creating __jomres_access_control table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_access_control` (
		`id` int(11) auto_increment,
		`scriptname` VARCHAR(255),
		`access_level` CHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table __jomres_access_control ', 'danger');
    }
}

function checkAccessControlTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_access_control')) {
            return true;
        }
    }

    return false;
}

function alterPtypesOrderCol()
{
    //output_message ( "Editing __jomres_ptypes table adding order column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `order` INT NULL DEFAULT '0' AFTER `published`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_ptypes order', 'danger');
    }
}

function checkPtypesOrderColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'order'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtrasAutoSelectCol()
{
    //output_message ( "Editing __jomres_extras table adding auto_select column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `auto_select` INT NULL DEFAULT '0' AFTER `price`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras auto_select', 'danger');
    }
}

function checkExtrasAutoselectColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'auto_select'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function checkLineitemsInclusiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'init_total_inclusive'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterLineitemsInclusiveCol()
{
    //output_message ( "Editing __jomresportal_lineitems table adding init_total_inclusive column");
    $query = "ALTER TABLE `#__jomresportal_lineitems` ADD `init_total_inclusive` float NOT NULL default '0' AFTER `init_total`";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_lineitems init_total_inclusive', 'danger');
    }
}

function checkCouponsBookingValidColsExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_coupons  LIKE 'booking_valid_from'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterCouponsBookingValidCols()
{
    //output_message ( "Editing __jomres_coupons table adding booking_valid_from column");
    $query = 'ALTER TABLE `#__jomres_coupons` ADD `booking_valid_from` DATE AFTER rooms_only ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_coupons booking_valid_from', 'danger');
    }

    output_message('Editing __jomres_coupons table adding booking_valid_to column');
    $query = 'ALTER TABLE `#__jomres_coupons` ADD `booking_valid_to` DATE AFTER booking_valid_from ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_coupons booking_valid_to', 'danger');
    }

    output_message('Editing __jomres_coupons table adding guest_uid column');
    $query = "ALTER TABLE `#__jomres_coupons` ADD `guest_uid` INT NULL DEFAULT '0' AFTER booking_valid_to ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_coupons booking_valid_to', 'danger');
    }
}

function checkExtraServicesTaxColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices  LIKE 'tax_rate_val'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtraServicesTaxCol()
{
    //output_message ( "Editing __jomres_extraservices table adding tax_rate_val column");
    $query = "ALTER TABLE `#__jomres_extraservices` ADD `tax_rate_val` CHAR (10) DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extraservices tax_rate_val', 'danger');
    }
}

// An odd one, this. It seems that some upgrades haven't got this table, so we'll add it if needed
/* function createExtraServicesTable()
    {
    output_message ( "Creating __jomres_extraservices table");
    $query  = "CREATE TABLE IF NOT EXISTS `#__jomres_extraservices` (
        `extraservice_uid` int(11) auto_increment,
        `service_description` VARCHAR(255),
        `service_value` VARCHAR(255),
        `contract_uid` VARCHAR(11),
        `property_uid` VARCHAR(11),
        `tax_rate_val` CHAR (10) DEFAULT '0',
        `tax_code` CHAR (10) DEFAULT '0',
        `service_qty` FLOAT NOT NULL DEFAULT 1,
        PRIMARY KEY	(`extraservice_uid`)
        ) ";
    $result = doInsertSql( $query, "" );
    if ( !$result )
        {
        output_message ( "Error creating table table __jomres_extraservices ";
        }
    }

function checkExtraServicesTableExists()
    {

    $tablesFound = false;
    $query       = "SHOW TABLES";
    $result      = doSelectSql( $query, $mode = false );
    $string      = "Tables_in_" . get_showtime("db");
    foreach ( $result as $r )
        {
        if ( strstr( $r->$string, '_jomres_extraservices' ) )
            return true;
        }

    return false;
    } */

function createGuestProfileTable()
{
    //output_message ( "Creating _jomres_guest_profile table");
    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_guest_profile` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` VARCHAR(255) NULL,
		`firstname` VARCHAR(255) NULL,
		`surname` VARCHAR(255) NULL,
		`house` VARCHAR(255) NULL,
		`street` VARCHAR(255) NULL,
		`town` VARCHAR(255) NULL,
		`county` VARCHAR(255) NULL,
		`country` VARCHAR(255) NULL,
		`postcode` VARCHAR(45) NULL,
		`tel_landline` VARCHAR(255) NULL,
		`tel_mobile` VARCHAR(255) NULL,
		`tel_fax` VARCHAR(255) NULL,
		`preferences` TEXT NULL,
		`car_regno` VARCHAR(20) NULL,
		`ccard_no` BLOB,
		`ccard_issued` BLOB,
		`ccard_expiry` BLOB,
		`ccard_iss_no` BLOB,
		`ccard_name` BLOB,
		`ccv` BLOB,
		`type` BLOB,
		`email` VARCHAR(100) NULL,
		`vat_number` CHAR (25) DEFAULT '' NOT NULL,
		`vat_number_validated` BOOL NOT NULL DEFAULT '0',
		`vat_number_validation_response` TEXT NULL,
		PRIMARY KEY(id)
		) ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add _jomres_guest_profile table', 'danger');
    }
}

function checkGuestProfileTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_guest_profile')) {
            return true;
        }
    }

    return false;
}

function checkInvoicesIsCommisionColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'is_commission'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterInvoicesIsCommisionCol()
{
    //output_message ( "Editing __jomresportal_invoices table adding is_commission column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `is_commission` INT NULL DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_invoices is_commission', 'danger');
    }
}

function alterManagerSuspendedCol()
{
    //output_message ( "Editing __jomres_managers table adding suspended column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `suspended` tinyint( 1 ) default 0 AFTER `apikey` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_managers suspended', 'danger');
    }
}

function checkManagerSuspendedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'suspended'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createPartnerTables()
{
    //output_message ( "Creating __jomres_partners table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_partners table', 'danger');
    }

    //output_message ( "Creating __jomres_partners_discounts table");
    $query = "CREATE TABLE  IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`partner_id` int(11),
	`property_id` int(11),
	`valid_from` date default NULL ,
	`valid_to` date default NULL ,
	`discount` FLOAT NOT NULL DEFAULT '0.00',
	PRIMARY KEY ( `id` )
	)";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_partners_discounts table', 'danger');
    }
}

function checkPartnerTablesExist()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_partners')) {
            return true;
        }
    }

    return false;
}

function alterManagerTimezoneCol()
{
    //output_message ( "Editing __jomres_managers table adding users_timezone column");
    $query = "ALTER TABLE `#__jomres_managers` ADD `users_timezone` CHAR(100) DEFAULT 'Europe/Berlin' AFTER `apikey` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_managers users_timezone', 'danger');
    }
}

function checkManagerTimezoneColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'users_timezone'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createRoomtypePropertytypeXrefTable()
{
    //output_message ( "Creating room type/property type xref table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_roomtypes_propertytypes_xref table', 'danger');
    }
}

function checkRoomtypePropertytypeXrefTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_roomtypes_propertytypes_xref')) {
            return true;
        }
    }

    return false;
}

function createBookingdataArchiveTable()
{
    //output_message ( "Creating booking data archive tables");
    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	`contract_uid` INT  DEFAULT 0 NOT NULL ,
	`tag` varchar(255) NULL ,
	PRIMARY KEY ( `id` )
	)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add _jomres_booking_data_archive table', 'danger');
    }
}

function checkBookingdataArchiveTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_booking_data_archive')) {
            return true;
        }
    }

    return false;
}

function createReviewDetailTable()
{
    //output_message ( "Creating review detail tables");
    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating` int( 11 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add _jomres_reviews_ratings_detail table', 'danger');
    }
}

function checkReviewDetailTableExists()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_reviews_ratings_detail')) {
            return true;
        }
    }

    return false;
}

function createReviewsTables()
{
    //output_message ( "Creating reviews tables");
    $query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings` (
	`rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`review_title` varchar( 255 ) default NULL ,
	`review_description` text,
	`pros` text,
	`cons` text,
	`rating` tinyint( 4 ) default NULL ,
	`rating_ip` varchar( 20 ) default NULL ,
	`rating_date` datetime default NULL ,
	`published` BOOL NOT NULL DEFAULT '0',
	PRIMARY KEY ( `rating_id` )
	)";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_reviews_ratings table', 'danger');
    }

    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_confirm` (
	`confirm_rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`confirm_user_id` int( 11 ) default NULL ,
	`confirm` tinyint( 1 ) default NULL ,
	`confirm_ip` varchar( 20 ) default NULL ,
	`confirm_date` datetime default NULL ,
	PRIMARY KEY ( `confirm_rating_id` )
	)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_reviews_ratings_confirm table', 'danger');
    }

    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_reviews_reports table', 'danger');
    }
}

function checkReviewsTablesExist()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '_jomres_reviews_ratings')) {
            return true;
        }
    }

    return false;
}

function checkJoomlaComponentsTableInCaseJomresHasBeenUninstalled()
{
    require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_installation.php';
}

function alterGuestsDiscountCol()
{
    //output_message ( "Editing __jomres_guests table adding discount column");
    $query = "ALTER TABLE `#__jomres_guests` ADD `discount` INT( 11 ) DEFAULT '0' NOT NULL AFTER `email` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_guests discount', 'danger');
    }
}

function checkGuestsDiscountColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'discount'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterContractsInvoice()
{
    //output_message ( "Editing __jomres_contracts table adding invoice_uid column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `invoice_uid` INT( 11 ) DEFAULT '0' NOT NULL AFTER `bookedout_timestamp` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_contracts invoice_uid', 'danger');
    }
}

function checkContractsInvoiceColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'invoice_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPfeaturesPtypeidCol()
{
    //output_message ( "Editing __jomres_hotel_features table adding ptype_id column");
    $query = "ALTER TABLE `#__jomres_hotel_features` ADD `ptype_id` INT( 11 ) DEFAULT '0' NOT NULL AFTER `property_uid` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_hotel_features ptype_id', 'danger');
    }
}

function checkPfeaturesPtypeidColExists()
{
    // Jomres 7.3.3 changed the ptype_id column to ptype_xref. If we leave this function as-is, the ptype Id column will be added on subsequent installations so we'll need to double check for that.
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'ptype_xref'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true; // We'll lie about ptype_id existing if instead phtype_xref instead exists.
    }

    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'ptype_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterSubscribersSubscriptionPackageIdCol()
{
    //output_message ( "Editing __jomresportal_subscriptions table adding package_id column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `package_id` INT NULL DEFAULT '0' AFTER `gateway_subscription_id` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions package_id', 'danger');
    }
}

function doV9subscriptionUpdates()
{
    //output_message ( "Dropping __jomresportal_subscribers table ");
    $query = 'DROP TABLE IF EXISTS `#__jomresportal_subscribers` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop __jomresportal_subscribers table', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions table dropping gateway_subscription_id, name, description, frequency, trial_period, trial_amount, full_amount, rooms_limit, property_limit columns");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions` DROP COLUMN `gateway_subscription_id`, DROP COLUMN `name`, DROP COLUMN `description`, DROP COLUMN `frequency`, DROP COLUMN `trial_period`, DROP COLUMN `trial_amount`, DROP COLUMN `full_amount`, DROP COLUMN `rooms_limit`, DROP COLUMN `property_limit` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop gateway_subscription_id, name, description, frequency, trial_period, trial_amount, full_amount, rooms_limit, property_limit columns from the __jomresportal_subscriptions table', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions table adding expiration_date column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' AFTER `raised_date` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions expiration_date column', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions table adding invoice_id column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `invoice_id` INT(11) NOT NULL DEFAULT '0' AFTER `expiration_date` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions invoice_id column', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions_packages table dropping trial_amount, trial_period, rooms_limit, property_limit columns");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` DROP COLUMN `trial_amount`, DROP COLUMN `trial_period`, DROP COLUMN `rooms_limit`, DROP COLUMN `property_limit` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to drop trial_amount, trial_period, rooms_limit, property_limit columns from the __jomresportal_subscriptions_packages table', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions_packages table adding currencycode column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `currencycode` VARCHAR(11) NOT NULL DEFAULT 'GBP' AFTER `tax_code_id` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions_packages currencycode column', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions_packages table adding renewal_price column");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `renewal_price` FLOAT AFTER `currencycode` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions_packages renewal_price column', 'danger');
    }

    //output_message ( "Editing __jomresportal_subscriptions_packages table adding params column");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `params` TEXT AFTER `renewal_price` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_subscriptions_packages params column', 'danger');
    }

    //output_message ( "Changing frequency column in __jomresportal_subscriptions_packages table to int(5) default 365");
    $query = "ALTER TABLE `#__jomresportal_subscriptions_packages` MODIFY `frequency` INT(5) NOT NULL DEFAULT '365' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to change frequency column in __jomresportal_subscriptions_packages to int(5)', 'danger');
    }

    //output_message ( "Changing raised_date column in __jomresportal_subscriptions table to DATETIME NOT NULL DEFAULT 1970-01-01 00:00:01 ");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` MODIFY `raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to change raised_date column in __jomresportal_subscriptions to DATETIME NOT NULL DEFAULT 1970-01-01 00:00:01', 'danger');
    }

    //output_message ( "Altering table __jomresportal_subscriptions, creating new expiration_date index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'expiration_date' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX expiration_date ( expiration_date ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    //output_message ( "Altering table __jomresportal_subscriptions, creating new status index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'status' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX status ( status ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    //output_message ( "Altering table __jomresportal_subscriptions, creating new cms_user_id index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'cms_user_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX cms_user_id ( cms_user_id ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }
}

function checkSubscribersSubscriptionPackageIdColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_subscriptions LIKE 'package_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function checkSubscriptionExpirationDateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_subscriptions LIKE 'expiration_date'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterExtrasTaxrateCol()
{
    //output_message ( "Editing __jomres_extras table adding tax_rate column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `tax_rate` INT NULL DEFAULT '0' AFTER `price` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_extras tax_rate', 'danger');
    }
}

function checkExtrasTaxrateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'tax_rate'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertyLatLongToChar12()
{
    $query = 'ALTER TABLE #__jomres_propertys CHANGE `lat` `lat` VARCHAR( 12 ) NULL DEFAULT NULL  ';
    doInsertSql($query, '');
    $query = 'ALTER TABLE #__jomres_propertys CHANGE `long` `long` VARCHAR( 12 ) NULL DEFAULT NULL';
    doInsertSql($query, '');
}

function createSubscriptionsTables()
{
    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions_packages` (
	`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`name` VARCHAR( 100 ),
	`description` VARCHAR( 255 ),
	`published` BOOL NOT NULL DEFAULT '1',
	`frequency` int(5) DEFAULT '365',
	`full_amount` FLOAT,
	`tax_code_id` int(11) NOT NULL default '0',
	`currencycode` varchar(3) NOT NULL default 'GBP',
	`renewal_price` FLOAT,
	`params` TEXT
	)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions` (
	`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL DEFAULT '0',
	`package_id` INT NULL DEFAULT '0',
	`status` SMALLINT NOT NULL DEFAULT '0',
	`raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`invoice_id` int(11) NOT NULL DEFAULT '0'
	)";
    doInsertSql($query, '');
}

function checkSubscriptionsTablesExist()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, '__jomresportal_subscriptions')) {
            return true;
        }
    }

    return false;
}

function alterCustomTemplatesTimestampCol()
{
    //output_message ( "Editing __jomres_custom_templates table adding last_edited column");
    $query = 'ALTER TABLE `#__jomres_custom_templates` ADD `last_edited` DATETIME AFTER `value` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_custom_templates last_edited', 'danger');
    }
}

function checkCustomTemplatesTimestampColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_custom_templates LIKE 'last_edited'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterPropertysTimestampCol()
{
    //output_message ( "Editing __jomres_propertys table adding timestamp column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `timestamp` DATETIME AFTER `metadescription` ';
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomres_propertys timestamp', 'danger');
    }
}

function checkPropertysTimestampColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'timestamp'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function createClickatellMessagesTable()
{
    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_sms_clickatell_messages` (
	  id int(10) NOT NULL auto_increment,
	  username  varchar(20) NOT NULL default '',
	  number varchar(25) NOT NULL default '',
	  message varchar(160) NOT NULL default '',
	  property_uid int(10) NOT NULL default '0',
	  send_time datetime,
	  ack INT( 3 ) NULL DEFAULT '0',
	  apiMsgid VARCHAR( 255 ),
	  PRIMARY KEY  (id)
	)";
    $result = doInsertSql($query, '');

    return $result;
}

function checkInvoicesContractuidColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'contract_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterInvoicesContractuidCol()
{
    output_message('Editing __jomresportal_invoices table adding contract_id column');
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `contract_id` INT NULL DEFAULT '0' AFTER `subscription_id` ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_invoices contract_id', 'danger');
    }
}

function checkInvoicesPropertyuidColExists()
{
    $guestsTimestampInstalled = true;
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'property_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterInvoicesPropertyuidCol()
{
    //output_message ( "Editing __jomresportal_invoices table adding property_uid column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `property_uid` INT NULL DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        output_message('Error, unable to add __jomresportal_invoices property_uid', 'danger');
    }
}

function installCronjobs()
{
    //output_message ( "Installing cron jobs<br/>";
    jr_import('jomres_cron');
    $cron = new jomres_cron();
    $cron->addJob('error_logs_cleanup', 'D', '');
}

function trashTables()
{
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    foreach ($result as $r) {
        if (strstr($r->$string, 'jomres_') || strstr($r->$string, 'jomcomp_') || strstr($r->$string, 'jomresportal_')) {
            $query = 'DROP TABLE IF EXISTS '.$r->$string;
            output_message('Dropping table '.$r->$string);
            if (!doInsertSql($query, '')) {
                output_message('Error, unable to drop table '.$r->$string.'', 'danger');
            }
        }
    }
    //$query = "DELETE FROM #__extensions WHERE `element` = 'com_jomres'";
    //doInsertSql( $query, '' );

    return false;
}

function updateMrConfig()
{
    include 'jomres_config.php';
    $tempConfigArr = $mrConfig;
    $mrConfig = array();
    $query = 'SELECT akey,value FROM #__jomres_settings WHERE property_uid = 0';
    $settingsList = doSelectSql($query);
    if (count($settingsList) > 0) {
        foreach ($settingsList as $setting) {
            $akey = $setting->akey;
            $value = $setting->value;
            $mrConfig[ $akey ] = $value;
        }
    }
    foreach ($tempConfigArr as $k => $v) {
        if (!array_key_exists($k, $mrConfig)) {
            $query = "INSERT INTO #__jomres_settings (akey,value) VALUES ('".$k."','".$v."')";
            doInsertSql($query, '');
        }
    }
}

function updatePluginSettings()
{
    // Pseudocron settings
    $pluginConfig[ 'jomcompcronjobs' ][ 'method' ] = 'Minicomponent';
    $pluginConfig[ 'jomcompcronjobs' ][ 'displaylogging' ] = '0';
    $pluginConfig[ 'jomcompcronjobs' ][ 'logging' ] = '0';
    $pluginConfig[ 'jomcompcronjobs' ][ 'verbose' ] = '0';

    // Invoices backend paypal settings
    $pluginConfig[ 'backend_paypal_settings' ][ 'usesandbox' ] = '1';
    $pluginConfig[ 'backend_paypal_settings' ][ 'currencycode' ] = 'EUR';
    $pluginConfig[ 'backend_paypal_settings' ][ 'email' ] = '';
    $pluginConfig[ 'backend_paypal_settings' ][ 'override' ] = '0';

    $tempConfigArr = $pluginConfig;
    $pluginConfig = array();
    $query = 'SELECT plugin,setting,value FROM #__jomres_pluginsettings WHERE prid = 0';
    $settingsList = doSelectSql($query);
    if (count($settingsList) > 0) {
        foreach ($settingsList as $settings) {
            $plugin = $settings->plugin;
            $setting = $settings->setting;
            $value = $settings->value;
            $pluginConfig[ $plugin ][ $setting ] = $value;
        }
    }
    foreach ($tempConfigArr as $k => $v) {
        if (!array_key_exists($k, $pluginConfig)) {
            foreach ($v as $sett => $settVal) {
                $query = "INSERT INTO #__jomres_pluginsettings (prid,plugin,setting,value) VALUES (0,'".$k."','".$sett."','".$settVal."')";
                doInsertSql($query, '');
            }
        }
    }
}

function copyImages()
{
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'logo.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'logo.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Access.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Disabled_Access.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Disabled_Facilities.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Not_Permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Not_Permitted.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Permitted.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Information.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Information.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Internet.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Internet.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'24hour.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'24hour.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'air_conditioning.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'air_conditioning.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'airport_nearby.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'airport_nearby.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'baby_friendly.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'baby_friendly.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'xmas_partys.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'xmas_partys.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'wildlife.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wildlife.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'wifi.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wifi.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'whalewatching.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'whalewatching.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'weddings.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'weddings.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'wc.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wc.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'walking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'walking.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'visitor_centre.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'visitor_centre.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'valet_parking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'valet_parking.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'tv_in_room.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'tv_in_room.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'toilets.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'toilets.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'tennis.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'tennis.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'telephone.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'telephone.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'snorkelling.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'snorkelling.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'smokers_welcome.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'smokers_welcome.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'Skionsite.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'Skionsite.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'shuttle_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'shuttle_service.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'shower_only.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'shower_only.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'scuba.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'scuba.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'sailing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'sailing.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'room_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'room_service.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'restraunt.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'restraunt2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'ranger.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'ranger.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'pool.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'pool.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'picnic_area.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'picnic_area.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'pets_welcome.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'pets_welcome.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'parking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'parking.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'Ownermanaged.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'Ownermanaged.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'no_smoking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'no_smoking.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'mountain_bike.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'mountain_bike.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'meeting_room.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'meeting_room.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'medicare.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'medicare.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'laundry_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'laundry_service.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'language.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'language.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'jacuzzi.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'jacuzzi.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'iron.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'iron.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'internet.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'internet.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'information.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'information.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'info2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'info2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'in_room_teacoffee.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'in_room_teacoffee.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'hotel_safe.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hotel_safe.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'honeymoon_friendly.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'honeymoon_friendly.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'historichouses.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'historichouses.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'hiking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hiking.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'helicopterpad.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'helicopterpad.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'hairdryer.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hairdryer.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'hairdresser.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hairdresser.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'gym.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gym.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'gym2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gym2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'guided_tours.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'guided_tours.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'groups.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'groups.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'golf.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'golf.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'giftshop.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'giftshop.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'gastronomicrestaurant.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gastronomicrestaurant.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'gardens.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gardens.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fridge.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fridge.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fourwd_access.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fourwd_access.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'forrest_nearby.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'forrest_nearby.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fishing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fishing.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fishing2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fishing2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fireplace.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fireplace.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fees_pound.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees_pound.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fees_euro.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees_euro.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fees.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'elevator.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'elevator.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'DVDVideo.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'DVDVideo.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'drinking_water.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'drinking_water.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'dogs_permitted.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_not_permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'dogs_not_permitted.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'disco.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disco.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disabled_facilities.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_access.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disabled_access.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'cycle_paths.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'cycle_paths.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'conference_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'conference_facilities.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'concierge.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'concierge.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'cinema.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'cinema.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'CDplayer.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'CDplayer.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'casino.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'casino.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'caravan.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'caravan.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'canoeing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'canoeing.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_area.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'camping_area.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'campfire.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'campfire.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'bird_hide.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bird_hide.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'beach.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'beach.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'beach2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'beach2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'bbq_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bbq_facilities.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'bath_tub.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bath_tub.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'bar.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bar.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'bar2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bar2.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'balcony.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'balcony.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'zodiacexcursions.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'zodiacexcursions.png');

    // Many thanks jeyjey
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'microwaves.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'microwaves.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'garden.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'garden.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'double.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'double.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'fourposter.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'fourposter.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'single.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'single.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'twin.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'twin.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'1bedroom.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'1bedroom.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'2bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'2bedrooms.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'3bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'3bedrooms.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'4bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'4bedrooms.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'5bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'5bedrooms.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'6plusbedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'6plusbedrooms.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_1bivi_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_1bivi_pitch.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_2_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_2_man_tent_pitch.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_3_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_3_man_tent_pitch.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_4_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_4_man_tent_pitch.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_6_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_6_man_tent_pitch.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'camping_caravan_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_caravan_pitch.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_hatchback.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_hatchback.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_luxury.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_luxury.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_peoplecarrier.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_peoplecarrier.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_saloon.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_saloon.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_sportscar.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_sportscar.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_2_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_2_berth.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_4_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_4_berth.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_6_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_6_berth.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_8_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_8_berth.png');
}

function checkPropertyTableExists()
{
    global $jomresConfig_db, $jomresConfig_dbprefix, $jomresConfig_user;
    $tablesFound = false;
    $query = 'SHOW TABLES';
    $result = doSelectSql($query, $mode = false);
    $string = 'Tables_in_'.get_showtime('db');
    //output_message (  "Looking for ".get_showtime('dbprefix').'jomres_propertys<br>';
    $nullcounter = 0;
    foreach ($result as $r) {
        //output_message (  "Found ".$r->$string."<br/>";
        if (is_null($r->$string)) {
            $nullcounter++;
        }
    }
    if (count($result) == $nullcounter) {
        output_message('Number of tables '.count($result));
        output_message('Number of tables that could not be identified '.$nullcounter);
        showGetInstallUpgradeRequest();
        define('ACTION', 'Unknown');
    } else {
        foreach ($result as $r) {
            if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_propertys')) {
                if (!defined('ACTION')) {
                    define('ACTION', 'Upgrade');
                }
            }
        }
        if (!defined('ACTION')) {
            define('ACTION', 'Install');
        }
    }
}

function createJomresTables()
{
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_tax_rules` (
		`id` int(11) auto_increment,
		`tax_rate_id`  int(11),
		`country_id` int(11),
		`region_id` int(11),
		PRIMARY KEY	(`id`)
		) ';
    doInsertSql($query, '');

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_access_control` (
		`id` int(11) auto_increment,
		`scriptname` VARCHAR(255),
		`access_level` CHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_guest_profile` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` VARCHAR(255) NULL,
		`firstname` VARCHAR(255) NULL,
		`surname` VARCHAR(255) NULL,
		`house` VARCHAR(255) NULL,
		`street` VARCHAR(255) NULL,
		`town` VARCHAR(255) NULL,
		`county` VARCHAR(255) NULL,
		`country` VARCHAR(255) NULL,
		`postcode` VARCHAR(45) NULL,
		`tel_landline` VARCHAR(255) NULL,
		`tel_mobile` VARCHAR(255) NULL,
		`tel_fax` VARCHAR(255) NULL,
		`preferences` TEXT NULL,
		`car_regno` VARCHAR(20) NULL,
		`ccard_no` BLOB,
		`ccard_issued` BLOB,
		`ccard_expiry` BLOB,
		`ccard_iss_no` BLOB,
		`ccard_name` BLOB,
		`ccv` BLOB,
		`type` BLOB,
		`email` VARCHAR(100) NULL,
		`vat_number` CHAR (25) DEFAULT '' NOT NULL,
		`vat_number_validated` BOOL NOT NULL DEFAULT '0',
		`vat_number_validation_response` TEXT NULL,
		PRIMARY KEY(id)
		)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_sms_clickatell_messages` (
		id int(10) NOT NULL auto_increment,
		username  varchar(20) NOT NULL default '',
		number varchar(25) NOT NULL default '',
		message varchar(160) NOT NULL default '',
		property_uid int(10) NOT NULL default '0',
		send_time datetime,
		ack INT( 3 ) NULL DEFAULT '0',
		apiMsgid VARCHAR( 255 ),
		PRIMARY KEY  (id)
	)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_coupons` (
		`coupon_id` INT NOT NULL AUTO_INCREMENT ,
		`property_uid` INT,
		`coupon_code` VARCHAR( 255 ),
		`valid_from` DATE,
		`valid_to` DATE,
		`amount` FLOAT,
		`is_percentage` BOOL,
		`rooms_only` BOOL,
		`booking_valid_from` DATE,
		`booking_valid_to` DATE,
		`guest_uid` INT NULL DEFAULT '0',
		PRIMARY KEY ( `coupon_id` )
		)";
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table __jomres_coupons ', 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_custom_fields` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`fieldname` VARCHAR( 255 ) ,
		`default_value` VARCHAR( 255 ) ,
		`description` VARCHAR( 255 ) ,
		`required` BOOL NOT NULL DEFAULT '0',
		`ptype_xref` text NULL DEFAULT NULL,
		PRIMARY KEY ( `uid` )
		) ";
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table __jomres_custom_fields ', 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		`last_edited` datetime,
		PRIMARY KEY ( `uid` )
		) ";
    $result = doInsertSql($query, '');
    if (!$result) {
        output_message('Error creating table table __jomres_custom_templates ', 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices_transactions` (
		id int(10) NOT NULL auto_increment,
		invoice_id int(10) NOT NULL default '0',
		transaction_id int(10) NOT NULL default '0',
		time_added datetime ,
		gateway_id varchar(20) NOT NULL default '',
		payment_result text ,
		payment_currency varchar(20) NOT NULL default '',
		payment_amount float NOT NULL default '0',
		payment_fees float NOT NULL default '0',
		payment_ref varchar(100) NOT NULL default '',
		notes text,
		PRIMARY KEY  (id)
	)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`name` varchar(255),
		`description` varchar(255),
		`init_price` float NOT NULL default '0',
		`init_qty` float  NOT NULL default '0.00',
		`init_discount` float NOT NULL default '0',
		`init_total` float NOT NULL default '0',
		`init_total_inclusive` float NOT NULL default '0',
		`tax_code` char(10),
		`tax_description` char(200),
		`tax_rate` float NOT NULL default '0',
		`inv_id` int(11) NOT NULL COMMENT 'Invoice ID',
		`is_payment`  TINYINT DEFAULT 0 NOT NULL,
		PRIMARY KEY  (`id`)
	)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
		`guest_id` int(11) NOT NULL DEFAULT '0',
		`status` tinyint(4) NOT NULL default '0',
		`raised_date` datetime,
		`due_date` datetime,
		`paid` datetime,
		`subscription` tinyint(1) NOT NULL default '0',
		`init_total` float NOT NULL default '0',
		`recur_total` float NOT NULL default '0',
		`recur_frequency` tinyint(4) NOT NULL default '0',
		`recur_dayofmonth` tinyint(4) NOT NULL default '1',
		`currencycode` char(3),
		`subscription_id` int(11) NOT NULL default '0',
		`contract_id` int(11),
		`property_uid` INT NULL DEFAULT '0',
		`is_commission` INT NULL DEFAULT '0',
		`vat_will_be_charged` BOOL NOT NULL DEFAULT '1',
		PRIMARY KEY  (`id`)
	)";
    doInsertSql($query, '');

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
		`id` int(11) NOT NULL auto_increment,
		`code` char(20),
		`description` varchar(255),
		`rate` float NOT NULL default '0',
		`is_eu_country` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY  (`id`)
	)";
    doInsertSql($query, '');

    $query = "
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cron` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`job` char( 100 ) ,
		`schedule` char(2) not null ,
		`last_ran` int(12) not null ,
		`parameters` varchar(255) null,
		`locked` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `id` )
		);
		";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = '
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);
	';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
		`id` int(11) auto_increment,
		`property_uid` int,
		`guest_id` int,
		`affiliate_id` varchar(255),
		`invoice_id` int DEFAULT 0,
		`booking_total` float,
		`contract_id` int,
		`tag` varchar(255),
		`currency_code` char(3),
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		PRIMARY KEY(`id`)
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` int(11) AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` int(11) AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		`tax_rate` INT NULL DEFAULT '1',
		PRIMARY KEY(id)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_site_settings` (
		`id` int(11) auto_increment,
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`description` VARCHAR(3000),
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int not null,
		`tariff_id` int not null,
		`roomclass_uid` int not null,
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT,
		`model` INT,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT,
		PRIMARY KEY (`id`)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_mufavourites` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`my_id` INT,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`contract_uid` INT,
		`note` TEXT,
		`timestamp` datetime,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_customertypes` (
		`id` int(11) NOT NULL auto_increment,
		`type` VARCHAR(255) NULL,
		`notes` VARCHAR(255) NULL,
		`maximum` VARCHAR(255) NULL,
		`is_percentage` INT( 11 ) NOT NULL DEFAULT '0',
		`posneg` INT( 11 ) NOT NULL DEFAULT '0',
		`variance` DOUBLE,
		`published` TINYINT NOT NULL DEFAULT '1',
		`property_uid` VARCHAR(11),
		`order` INT( 11 ) NOT NULL DEFAULT '0',
		`is_child` BOOL NULL DEFAULT '0',
		PRIMARY KEY(id)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_pcounter` (
		`count` int ,
		`p_uid` int(11) NOT NULL PRIMARY KEY,
		`p_view` int(11)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_pluginsettings` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`prid` INT( 11 ),
		`plugin` VARCHAR( 255 ),
		`setting` TEXT NULL,
		`value` VARCHAR( 255 ),
		PRIMARY KEY (`id`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_ptypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`ptype` VARCHAR( 255 ),
		`ptype_desc` VARCHAR( 255 ),
		`published` TINYINT DEFAULT '1',
		`order` INT NULL DEFAULT '0',
		`mrp_srp_flag` TINYINT DEFAULT '2',
		`marker` varchar( 255 ) DEFAULT 'free-map-marker-icon-red.png',
		PRIMARY KEY (`id`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_custom_text` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`constant` VARCHAR( 255 ) ,
		`customtext` TEXT NULL,
		`property_uid` INT( 11 ),
		`language` VARCHAR( 255 ),
		`reserved` VARCHAR( 255 ),
		PRIMARY KEY ( `uid` )
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_extras` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`name` VARCHAR( 255 ),
		`desc` TEXT NULL,
		`price` DOUBLE DEFAULT '0',
		`auto_select` INT NULL DEFAULT '0',
		`tax_rate` INT NULL DEFAULT '0',
		`maxquantity` INT( 5 ) DEFAULT '1',
		`chargabledaily` BOOL NULL DEFAULT '0',
		`published` TINYINT DEFAULT '1',
		`property_uid` VARCHAR(11),
		`validfrom` DATETIME DEFAULT NULL,
		`validto` DATETIME DEFAULT NULL,
		`include_in_property_lists` BOOL NOT NULL DEFAULT '1',
		`limited_to_room_type` int( 11 ),
		PRIMARY KEY ( `uid` )
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_audit_archive` (
		`uid` int(11) auto_increment,
		`date` date,
		`time` time,
		`owner` int( 11 ),
		`op` VARCHAR(100),
		`args` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_audit` (
		`uid` int(11) auto_increment,
		`date` date,
		`time` time,
		`owner` int( 11 ),
		`op` VARCHAR(100),
		`args` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_settings` (
		`uid` int(11) auto_increment,
		`property_uid` int( 11 ),
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_extraservices` (
		`extraservice_uid` int(11) auto_increment,
		`service_description` VARCHAR(255),
		`service_value` VARCHAR(255),
		`contract_uid` VARCHAR(11),
		`property_uid` VARCHAR(11),
		`tax_rate_val` CHAR (10) DEFAULT '0',
		`tax_code` CHAR (10) DEFAULT '0',
		`service_qty` FLOAT NOT NULL DEFAULT 1,
		PRIMARY KEY	(`extraservice_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_contracts` (
		`contract_uid` int(11) auto_increment,
		`arrival` CHAR( 10 ) DEFAULT NULL,
		`departure` CHAR( 10 ) DEFAULT NULL,
		`rates_uid` INTEGER,
		`guest_uid` INTEGER NULL,
		`rate_rules` TEXT DEFAULT NULL,
		`rooms_tariffs` VARCHAR( 255 ),
		`deposit_paid` BOOL NULL,
		`contract_total` DOUBLE DEFAULT '0',
		`deposit_ref` TEXT NULL,
		`payment_ref` TEXT NULL,
		`special_reqs` TEXT NULL,
		`deposit_required` TEXT NULL,
		`newsletters` BOOL NULL,
		`currency` VARCHAR(20) NULL,
		`adults` INTEGER NULL,
		`children` INTEGER NULL,
		`date_range_string` TEXT NULL,
		`booked_in` TINYINT DEFAULT '0' NOT NULL,
		`booked_out` TINYINT DEFAULT '0' NOT NULL,
		`true_arrival` VARCHAR( 10 ) DEFAULT NULL,
		`property_uid` INTEGER,
		`cot_required` TINYINT DEFAULT '0' NOT NULL,
		`single_person_suppliment` VARCHAR( 11 ) DEFAULT '0',
		`multi_room_booking` TINYINT DEFAULT '0' NOT NULL,
		`extras` TEXT NULL,
		`extrasquantities` VARCHAR( 255 ),
		`extrasvalue` DOUBLE,
		`tax` DOUBLE( 11, 2 ) DEFAULT '0' NOT NULL,
		`tag` VARCHAR( 255 ),
		`timestamp` datetime,
		`room_total` float,
		`discount` float,
		`currency_code` CHAR(3) NULL,
		`cancelled` TINYINT DEFAULT '0' NOT NULL,
		`cancelled_timestamp` datetime,
		`cancelled_reason` CHAR( 255 ) NULL DEFAULT NULL,
		`discount_details` TEXT NULL,
		`username` VARCHAR(50) NULL,
		`coupon_id` INTEGER NULL,
		`bookedout` BOOL NOT NULL DEFAULT '0',
		`bookedout_timestamp` DATETIME,
		`invoice_uid` int(11),
		`channel_manager_booking` BOOL NOT NULL DEFAULT '0',
		`approved` TINYINT( 1 ) DEFAULT 1 NOT NULL,
		`booking_data_archive_id` INT DEFAULT '0' NOT NULL,
		`secret_key` CHAR(100),
		`secret_key_used` TINYINT DEFAULT 0 NOT NULL,
		`booking_language` CHAR( 5 ) DEFAULT 'en-GB' NOT NULL,
		`last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`referrer` varchar( 255 ) DEFAULT 'Jomres',
		PRIMARY KEY(`contract_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_rates` (
		`rates_uid` int(11) NOT NULL auto_increment,
		`rate_title` VARCHAR(255),
		`rate_description` TEXT NULL,
		`validfrom` varchar(10),
		`validto` varchar(10),
		`roomrateperday` DOUBLE DEFAULT '0',
		`mindays` INTEGER NULL,
		`maxdays` INTEGER NULL,
		`minpeople` INTEGER NULL,
		`maxpeople` INTEGER NULL,
		`roomclass_uid`	varchar(10),
		`ignore_pppn`BOOL,
		`allow_ph`BOOL DEFAULT '1' NOT NULL,
		`allow_we`BOOL DEFAULT '1' NOT NULL,
		`weekendonly`BOOL DEFAULT '0' NOT NULL,
		`validfrom_ts` DATE,
		`validto_ts` DATE,
		`dayofweek` INT( 1 ) DEFAULT '7' NOT NULL,
		`minrooms_alreadyselected` INT( 3 ) DEFAULT '0' NOT NULL,
		`maxrooms_alreadyselected` INT( 3 ) DEFAULT '100' NOT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`rates_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_guests` (
		`guests_uid` int(11) NOT NULL auto_increment,
		`contracts_contract_uid` TEXT NULL,
		`mos_userid` VARCHAR(255) NULL,
		`firstname` VARCHAR(255) NULL,
		`surname` VARCHAR(255) NULL,
		`house` VARCHAR(255) NULL,
		`street` VARCHAR(255) NULL,
		`town` VARCHAR(255) NULL,
		`county` VARCHAR(255) NULL,
		`country` VARCHAR(255) NULL,
		`postcode` VARCHAR(45) NULL,
		`tel_landline` VARCHAR(255) NULL,
		`tel_mobile` VARCHAR(255) NULL,
		`tel_fax` VARCHAR(255) NULL,
		`preferences` TEXT NULL,
		`car_regno` VARCHAR(20) NULL,
		`ccard_no` BLOB,
		`ccard_issued` BLOB,
		`ccard_expiry` BLOB,
		`ccard_iss_no` BLOB,
		`ccard_name` BLOB,
		`ccv` BLOB,
		`type` BLOB,
		`property_uid` VARCHAR(11),
		`email` VARCHAR(100) NULL,
		`discount` INT( 2 ) DEFAULT '0' NOT NULL,
		`vat_number` CHAR (25) DEFAULT '' NOT NULL,
		`vat_number_validated` BOOL NOT NULL DEFAULT '0',
		`vat_number_validation_response` TEXT NULL,
		`partner_id` INT(11) NOT NULL DEFAULT 0 NOT NULL,
		PRIMARY KEY(guests_uid)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_room_bookings` (
		`room_bookings_uid` int(11) NOT NULL auto_increment,
		`room_uid` INTEGER NULL,
		`date` VARCHAR(10) NULL,
		`contract_uid` INTEGER NULL,
		`black_booking` BOOL,
		`reception_booking` BOOL NULL,
		`internet_booking` BOOL NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`room_bookings_uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_room_classes` (
		`room_classes_uid` int(11) NOT NULL auto_increment,
		`room_class_abbv` VARCHAR(255) NULL,
		`room_class_full_desc` VARCHAR(255) NULL,
		`image` TEXT NULL,
		`property_uid` VARCHAR(11), 
		PRIMARY KEY(`room_classes_uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_rooms` (
		`room_uid` int(11) NOT NULL auto_increment,
		`room_classes_uid` INTEGER,
		`propertys_uid` INTEGER,
		`room_features_uid` VARCHAR(255) NULL,
		`room_name` TEXT NULL,
		`room_number` VARCHAR(255) NULL,
		`room_floor` VARCHAR(10) NULL,
		`max_people` INTEGER NULL,
		`singleperson_suppliment` DOUBLE DEFAULT '0',
		PRIMARY KEY(`room_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_room_features` (
		`room_features_uid` int(11) NOT NULL auto_increment,
		`feature_description` TEXT NULL,
		`property_uid` VARCHAR(11),
		`ptype_xref` text NULL DEFAULT NULL,
		`image` VARCHAR(255) NULL DEFAULT NULL, 
		PRIMARY KEY(`room_features_uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features` (
		`hotel_features_uid` int(11) NOT NULL auto_increment,
		`hotel_feature_abbv` VARCHAR(20) NULL,
		`hotel_feature_full_desc` TEXT NULL,
		`image` text,
		`property_uid` VARCHAR(11),
		`ptype_xref` text NULL DEFAULT NULL,
		`cat_id` varchar(244) NOT NULL DEFAULT 0,
		PRIMARY KEY(`hotel_features_uid`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features_categories` (
		`id` int(11) NOT NULL auto_increment,
		`title` VARCHAR(255) NULL,
		PRIMARY KEY(`id`)
		) ';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_managers` (
		`manager_uid` int(11) NOT NULL auto_increment,
		`userid` int(11),
		`access_level` int(2),
		`currentproperty` INT( 11 ) DEFAULT '0' NOT NULL,
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		`suspended` tinyint( 1 ) default 0,
		`simple_configuration` tinyint( 1 ) default 1,
		`users_timezone` CHAR(100) DEFAULT 'Europe/Berlin',
		`last_active` datetime default NULL,
		PRIMARY KEY	(`manager_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_propertys` (
		`propertys_uid` int(11) NOT NULL auto_increment,
		`property_name` VARCHAR(255),
		`property_street` VARCHAR(255) NULL,
		`property_town` VARCHAR(255) NULL,
		`property_region` VARCHAR(255) ,
		`property_country` VARCHAR(255) ,
		`property_postcode` VARCHAR(20) NULL,
		`property_tel` VARCHAR(255) NULL,
		`property_fax` VARCHAR(255) NULL,
		`property_email` VARCHAR(255) NULL,
		`property_features` VARCHAR(255),
		`property_mappinglink` TEXT NULL,
		`property_description` TEXT NULL,
		`property_checkin_times` TEXT NULL,
		`property_area_activities`TEXT NULL,
		`property_driving_directions` TEXT NULL,
		`property_airports` TEXT NULL,
		`property_othertransport` TEXT NULL,
		`property_policies_disclaimers`TEXT NULL,
		`property_key` VARCHAR( 255 ) NULL,
		`published` TINYINT( 1 ) DEFAULT '0' NOT NULL,
		`stars` int,
		`superior` TINYINT( 1 ) DEFAULT '0' NOT NULL,
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		`lat` VARCHAR(12) NULL,
		`long` VARCHAR(12) NULL,
		`metatitle` VARCHAR(150),
		`metadescription` VARCHAR(150),
		`metakeywords` TEXT NULL,
		`timestamp` DATETIME,
		`approved`  BOOL NOT NULL DEFAULT '1',
		`property_site_id` VARCHAR( 255 ) NULL,
		`last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`permit_number` varchar( 255 ) DEFAULT '',
		PRIMARY KEY(`propertys_uid`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions_packages` (
	`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`name` VARCHAR( 100 ),
	`description` VARCHAR( 255 ),
	`published` BOOL NOT NULL DEFAULT '1',
	`frequency` int(5) DEFAULT '365',
	`full_amount` FLOAT,
	`tax_code_id` int(11) NOT NULL default '0',
	`currencycode` varchar(3) NOT NULL default 'GBP',
	`renewal_price` FLOAT,
	`params` TEXT
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL DEFAULT '0',
	`package_id` INT NULL DEFAULT '0',
	`status` SMALLINT NOT NULL DEFAULT '0',
	`raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`invoice_id` int(11) NOT NULL DEFAULT '0'
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings` (
	`rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`review_title` varchar( 255 ) default NULL ,
	`review_description` text,
	`pros` text,
	`cons` text,
	`rating` tinyint( 4 ) default NULL ,
	`rating_ip` varchar( 20 ) default NULL ,
	`rating_date` datetime default NULL ,
	`published` BOOL NOT NULL DEFAULT '0',
	PRIMARY KEY ( `rating_id` )
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_confirm` (
	`confirm_rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`confirm_user_id` int( 11 ) default NULL ,
	`confirm` tinyint( 1 ) default NULL ,
	`confirm_ip` varchar( 20 ) default NULL ,
	`confirm_date` datetime default NULL ,
	PRIMARY KEY ( `confirm_rating_id` )
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating`  tinyint( 4 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS  `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	`contract_uid` INT DEFAULT 0 NOT NULL ,
	`tag` varchar(255) NULL,
	PRIMARY KEY ( `id` )
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`partner_id` int(11),
	`property_id` int(11),
	`valid_from` datetime,
	`valid_to` datetime,
	`discount` FLOAT NOT NULL DEFAULT '0.00',
	PRIMARY KEY ( `id` )
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_invoice_payment_ref` (
		`id` int(11) auto_increment,
		`invoice_id`  int(11),
		`gateway` CHAR(255) NOT NULL DEFAULT '',
		`paid` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY	(`id`)
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    if (!checkCountriesTableExists()) {
        createCountriesTable();
    }
    if (!checkPartnerBookingsTableExists()) {
        createPartnerBookingsTable();
    }

    //create the configuration file and drop _site_settings
    save_configuration_file();
}

function insertSampleData()
{
    global $jomresConfig_mailfrom;
    $today = date('Y/m/d');
    $date_elements = explode('/', $today);
    $unixTomorrowsDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ]);
    $gmtTomorrowsDate = date('Y/m/d', $unixTomorrowsDate);
    $tomorrow = $gmtTomorrowsDate;

    $result = doInsertSql('delete FROM `#__jomres_pluginsettings`', '');

    $result = doInsertSql('delete FROM `#__jomres_ptypes`', '');

    $result = doInsertSql('delete FROM `#__jomres_custom_text`', '');

    $result = doInsertSql('delete FROM `#__jomres_extras`', '');

    $result = doInsertSql('delete FROM `#__jomres_audit_archive`', '');

    $result = doInsertSql('delete FROM `#__jomres_audit`', '');

    $result = doInsertSql('delete FROM `#__jomres_settings`', '');

    $result = doInsertSql('delete FROM `#__jomres_extraservices`', '');

    $result = doInsertSql('delete FROM `#__jomres_contracts`', '');

    $result = doInsertSql('delete FROM `#__jomres_rates`', '');

    $result = doInsertSql('delete FROM `#__jomresportal_c_rates`', '');

    $result = doInsertSql('delete FROM `#__jomres_guests`', '');

    $result = doInsertSql('delete FROM `#__jomres_room_bookings`', '');

    $result = doInsertSql('delete FROM `#__jomres_room_classes`', '');

    $result = doInsertSql('delete FROM `#__jomres_rooms`', '');

    $result = doInsertSql('delete FROM `#__jomres_room_features`', '');

    $result = doInsertSql('delete FROM `#__jomres_hotel_features`', '');

    $result = doInsertSql('delete FROM `#__jomres_propertys`', '');

    $result = doInsertSql("INSERT INTO `#__jomresportal_c_rates` VALUES (1,'default',2,10,'GBP','2009-05-04 13:07:51',0,'1970-01-01 00:00:01',1)", '');

    $result = doInsertSql("INSERT INTO `#__jomres_hotel_features` (`hotel_features_uid`, `hotel_feature_abbv`, `hotel_feature_full_desc`, `image`, `property_uid`, `ptype_xref`) VALUES
			(3, 'Airport', 'Close to the airport', 'airport_nearby.png', '0', 0),
			(4, 'Minibar', 'Minibar in room', 'air_conditioning.png', '0', 1),
			(6, 'Family Friendly', 'Children Welcome', 'baby_friendly.png', '0', 1),
			(7, 'Balcony', 'Some rooms have balconies', 'balcony.png', '0', 1),
			(8, 'Waiter', 'Waiter Service', 'bar.png', '0', 1),
			(9, 'Bar', 'Licensed bar on premises', 'bar2.png', '0', 1),
			(10, 'Bath', 'Bath in every room', 'bath_tub.png', '0', 1),
			(11, 'Fireplace', 'Enjoy the ambiance of a natural fire', 'bbq_facilities.png', '0', 1),
			(12, 'Beach', 'Close to the beach', 'beach.png', '0', 0),
			(13, 'Birdwatching', 'Bird hide onsite or nearby', 'bird_hide.png', '0', 0),
			(15, 'Campfires', 'Campfires allowed', 'campfire.png', '0', 4),
			(17, 'Canoeing', 'Canoeing/Kayaking', 'canoeing.png', '0', 0),
			(18, 'Caravans', 'Caravanning facilities', 'caravan.png', '0', 4),
			(20, 'Casino', 'Casino on premesis', 'casino.png', '0', 1),
			(21, 'Clubbing', 'Nightclub onsite or nearby', 'CDplayer.png', '0', 1),
			(22, 'Safe', 'Safe available', 'hotel_safe.png', '0', 1),
			(23, 'Conference', 'Conference facilities', 'conference_facilities.png', '0', 1),
			(24, 'Cycle path', 'Cycle paths nearby', 'cycle_paths.png', '0', 0),
			(25, 'Disabled access', 'Disabled facilites available', 'disabled_access.png', '0', 1),
			(26, 'Disabled toilet faci', 'Disabled WC available', 'disabled_facilities.png', '0', 0),
			(27, 'No dogs', 'Dogs not welcome', 'dogs_not_permitted.png', '0', 0),
			(28, 'Dogs welcome', 'Dog friendly ', 'dogs_permitted.png', '0', 0),
			(29, 'DVD', 'Rooms have DVD players', 'DVDVideo.png', '0', 1),
			(30, 'Elevator', 'Elevator', 'elevator.png', '0', 1),
			(32, '24hr service', '24hr Room service', '24hour.png', '0', 1),
			(33, 'Bureau de change', 'Bureau de change available onsite', 'fees.png', '0', 1),
			(34, 'Bureau de change', 'Bureau de change available onsite', 'fees_euro.png', '0', 1),
			(35, 'Bureau de change', 'Bureau de change available onsite', 'fees_pound.png', '0', 1),
			(36, 'Fishing', 'Fishing available onsite or nearby', 'fishing.png', '0', 0),
			(37, 'Gourmet Restaurant', 'Gourmet Restraunt onsite', 'gastronomicrestaurant.png', '0', 1),
			(38, 'Golf', 'Golf course on site or nearby', 'golf.png', '0', 0),
			(39, 'Tours', 'Tours depart from this location', 'guided_tours.png', '0', 0),
			(40, 'Gym', 'Gymnasium onsite', 'gym2.png', '0', 1),
			(41, 'Hairdresser', 'Hairdresser onsite', 'hairdresser.png', '0', 1),
			(42, 'Hairdryer', 'Hair dryer in every room', 'hairdryer.png', '0', 1),
			(44, 'Helipad', 'Helicopter pad', 'helicopterpad.png', '0', 1),
			(45, 'Hiking', 'Popular hiking area', 'hiking.png', '0', 0),
			(46, 'Information', 'Information services available onsite', 'info2.png', '0', 0),
			(47, 'WWW', 'Internet access available', 'internet.png', '0', 1),
			(48, 'Beverages', 'Beverages in all rooms', 'in_room_teacoffee.png', '0', 1),
			(49, 'Iron', 'Iron in every room', 'iron.png', '0', 1),
			(50, 'Jacuzzi', 'Jacuzzi onsite', 'jacuzzi.png', '0', 1),
			(52, 'No smoking', 'Smoke free establishment', 'no_smoking.png', '0', 0),
			(53, 'Owner managed', 'Owner managed property', 'Ownermanaged.png', '0', 0),
			(54, 'Parking', 'Parking available', 'parking.png', '0', 1),
			(55, 'Pets welcome', 'Pet friendly', 'pets_welcome.png', '0', 0),
			(56, 'Picnic area', 'Picnicers welcome', 'picnic_area.png', '0', 0),
			(58, 'Pool', 'Swiming', 'pool.png', '0', 0),
			(60, 'Ranger', 'Ranger station here', 'ranger.png', '0', 0),
			(61, 'Restaurant', 'Restraunt onsite', 'restraunt2.png', '0', 1),
			(64, 'Water sports', 'Water sport facilities onsite or nearby', 'sailing.png', '0', 0),
			(65, 'Scuba', 'Scuba diving arranged', 'scuba.png', '0', 0),
			(67, 'Showers', 'showers in every room', 'shower_only.png', '0', 1),
			(68, 'Shuttle', 'Shuttle service to airport and nightclub district available', 'shuttle_service.png', '0', 1),
			(69, 'Winter Sports', 'Winter Sports facilities available', 'Skionsite.png', '0', 1),
			(70, 'Smoking', 'Smokers welcome', 'smokers_welcome.png', '0', 0),
			(71, 'Snorkelling', 'Snorkelling suitable here', 'snorkelling.png', '0', 0),
			(73, 'Tennis courts', 'Tennis court onsite or nearby', 'tennis.png', '0', 0),
			(74, 'Television', 'Television in every room', 'tv_in_room.png', '0', 1),
			(75, 'Weddings', 'Weddings catered for', 'weddings.png', '0', 1),
			(76, 'Whales', 'Whale watching', 'whalewatching.png', '0', 0),
			(77, 'Wifi', 'Wifi available', 'wifi.png', '0', 1),
			(78, 'Christmas', 'Christmas parties catered for', 'xmas_partys.png', '0', 1),
			(79, 'Zodiac Excursions', 'Zodiac excursions can be arranged from these premesis', 'zodiacexcursions.png', '0', 0),
			(80, 'Private Garden', 'Private garden for your enjoyment', 'garden.png', '0', 0),
			(81, 'Microwave', 'Property has a microwave that can be used by the residents', 'microwaves.png', '0', 1);");

    $result = doInsertSql("INSERT INTO `#__jomres_propertys` (
			`propertys_uid` ,`property_name` , `property_street` , `property_town` ,
			`property_region`,`property_country`,`property_postcode` , `property_tel` , `property_fax` , `property_email` ,
			`lat`,`long`,`property_features`,
			`property_mappinglink`,
			`property_description`,
			`property_checkin_times`,
			`property_area_activities`,
			`property_driving_directions`,
			`property_airports`,
			`property_othertransport`,
			`property_policies_disclaimers`,
			`published`,
			`stars`,
			`superior`,
			`ptype_id`
			 )
			VALUES
			( '1', 'Hotel Valle', 'Asheldon Rd', 'Torquay',
			'Devon','GB', 'TQ1 2QS', '01000 123456', '01000 654321', '$jomresConfig_mailfrom', 
			'51.5006800','-0.1431700','3,4,6,7,8,9,10,11,12',
			'http://www.map24.com',
			'My property description',
			'Any time from 2pm onwards',
			'Surfing, rock climbing, fishing & lazing in the sun.',
			'Second star to the right and straight on till morning.',
			'None for miles and miles and miles.',
			'Local buses once a day, taxis and if you\'re lucky a donkey.',
			'Requests for bed type and smoking preferences will be submitted to the hotel but are not guaranteed.',
			'1','1','3','1'
			)", '');

    $result = doInsertSql("INSERT INTO `#__jomres_room_features` ( `room_features_uid` , `feature_description`,`property_uid` )VALUES ('1', 'En-suite Bathroom','1'), ('2', 'Tea & Coffee Making facilities','1')", '');

    $result = doInsertSql("INSERT INTO `#__jomres_room_classes` (`room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image`, `property_uid`) VALUES
								(1, 'Room Double beds', '', 'double.png', '0'),
								(2, 'Room Twin beds', '', 'twin.png', '0'),
								(3, 'Room Single', '', 'single.png', '0'),
								(4, 'Room 4 Poster bed', '', 'fourposter.png', '0'),
								(5, '1 Bedroom', '', '1bedroom.png', '0'),
								(6, '2 Bedrooms', '', '2bedrooms.png', '0'),
								(7, '3 Bedrooms', '', '3bedrooms.png', '0'),
								(8, '4 Bedrooms', '', '4bedrooms.png', '0'),
								(9, '5 Bedrooms', '', '5bedrooms.png', '0'),
								(10, '6+ Bedrooms', '', '6plusbedrooms.png', '0'),
								(11, 'Tent pitch 1 person ', '', 'camping_1bivi_pitch.png', '0'),
								(12, 'Tent pitch 2 person ', '', 'camping_2_man_tent_pitch.png', '0'),
								(13, 'Tent pitch 3 person ', '', 'camping_3_man_tent_pitch.png', '0'),
								(14, 'Tent pitch 4 person ', '', 'camping_4_man_tent_pitch.png', '0'),
								(15, 'Tent pitch 6+ person', '', 'camping_6_man_tent_pitch.png', '0'),
								(16, 'Car rental Hatchback', '', 'car_rental_hatchback.png', '0'),
								(17, 'Car rental Luxury', '', 'car_rental_luxury.png', '0'),
								(18, 'Car rental Minivan', '', 'car_rental_peoplecarrier.png', '0'),
								(19, 'Car rental Saloon', '', 'car_rental_saloon.png', '0'),
								(20, 'Car rental Sportscar', '', 'car_rental_sportscar.png', '0'),
								(21, 'Tent pitch Caravan', '', 'camping_caravan_pitch.png', '0'),
								(22, 'Yacht 2 berth', '', 'yacht_2_berth.png', '0'),
								(23, 'Yacht 4 berth', '', 'yacht_4_berth.png', '0'),
								(24, 'Yacht 6 berth', '', 'yacht_6_berth.png', '0'),
								(25, 'Yacht 8+ berth', '', 'yacht_8_berth.png', '0')
			");

    // Hotel/Village cross reference
    $result = doInsertSql('INSERT INTO `#__jomres_roomtypes_propertytypes_xref` (`id`, `roomtype_id`, `propertytype_id`) VALUES
								(1, 11, 4),
								(2, 12, 4),
								(3, 13, 4),
								(4, 14, 4),
								(5, 15, 4),
								(6, 21, 4),
								(7, 24, 2),
								(8, 25, 2),
								(9, 16, 3),
								(10, 17, 3),
								(11, 19, 3),
								(12, 20, 3),
								(13, 22, 2),
								(14, 23, 2),
								(15, 18, 3),
								(16, 4, 1),
								(17, 4, 5),
								(18, 1, 1),
								(19, 1, 5),
								(20, 3, 1),
								(21, 3, 5),
								(22, 2, 1),
								(23, 2, 5),
								(24, 5, 6),
								(25, 5, 7),
								(26, 5, 8),
								(27, 6, 6),
								(28, 6, 7),
								(29, 6, 8),
								(30, 7, 6),
								(31, 7, 7),
								(32, 7, 8),
								(33, 8, 6),
								(34, 8, 7),
								(35, 8, 8),
								(36, 9, 6),
								(37, 9, 7),
								(38, 9, 8),
								(39, 10, 6),
								(40, 10, 7),
								(41, 10, 8)
			');

    //$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`property_uid`,`image` )VALUES ('3', 'D/B', 'Double Bed','0','/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/double.png'), ('4', 'T/B', 'Twin Beds','0','/'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/twin.png')","");

    $result = doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `max_people` )VALUES ('1', '3', '1', '1,2', 'The Pitt', '11', '1', '2')", '');

    $result = doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `max_people` )VALUES ('2', '3', '1', '1,2', 'The hole', '21', '2', '4')", '');

    $result = doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('5', 'Double rooms', '2014/04/28', '2024/04/28', '110', '1', '1000', '1', '4','3','0','1','1','1')", '');

    $result = doInsertSql("INSERT INTO `#__jomres_guests` ( `guests_uid` , `contracts_contract_uid` , `mos_userid` , `firstname` , `surname` , `house` , `street` , `town` , `county`,`postcode` , `tel_landline` , `tel_mobile` , `tel_fax` , `preferences` , `car_regno` , `ccard_no` , `ccard_issued` , `ccard_expiry` , `ccard_iss_no` , `ccard_name`,`property_uid`,`email` )VALUES ('1', '0', NULL , 'Major', 'Gowen', 'Watery Fowls', 'a Street', 'a Region','a Town','XXNN NXX', '01000 123456', '01777 123456', '01000 654321','A newspaper with uptodate cricket scores', '', '' , '', '','','','1','example@example.com')", '');

    $result = doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype`, `ptype_desc`, `published`, `order`, `mrp_srp_flag`) VALUES
								(1, 'Hotel', 'propertyrental', 1, 0, 0),
								(2, 'Yacht', 'yacht', 1, 0, 1),
								(3, 'Car', 'car', 1, 0, 1),
								(4, 'Camp Site', 'campsite', 1, 0, 0),
								(5, 'Bed and Breakfast', 'propertyrental', 1, 0, 0),
								(6, 'Villa', 'propertyrental', 1, 0, 1),
								(7, 'Apartment', 'propertyrental', 1, 0, 1),
								(8, 'Cottage', 'propertyrental', 1, 0, 1),
								(9, 'Tour', 'tour', 1, 0, 3),
								(10, 'For Sale', 'realestate', 1, 0, 4)
						", '');

    $query = "INSERT INTO `#__jomresportal_taxrates` (`id`, `code`, `description`, `rate`) VALUES (1, '01', 'VAT', 20)";
    doInsertSql($query, '');

    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0'.JRDS.'medium');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0'.JRDS.'thumbnail');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1'.JRDS.'medium');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1'.JRDS.'thumbnail');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2'.JRDS.'medium');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2'.JRDS.'thumbnail');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'slideshow');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'slideshow'.JRDS.'0');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'slideshow'.JRDS.'0'.JRDS.'medium');
    jr_installer_mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'slideshow'.JRDS.'0'.JRDS.'thumbnail');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0'.JRDS.'medium'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'property'.JRDS.'0'.JRDS.'medium'.JRDS.'jrhouse.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1'.JRDS.'medium'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'1'.JRDS.'medium'.JRDS.'jrhouse.png');

    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2'.JRDS.'medium'.JRDS.'jrhouse.png');
    $result = copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS.'jrhouse.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS.'1'.JRDS.'rooms'.JRDS.'2'.JRDS.'medium'.JRDS.'jrhouse.png');
}

function jr_installer_mkdir($dir)
{
    if (!is_dir($dir)) {
        mkdir($dir);
    }
}

function checkIfNewIndexRequired()
{
    $searchString = 'KEY `property_uid`';
    $query = 'SHOW CREATE TABLE #__jomres_custom_text';
    $result = doSelectSql($query, 2);
    $str = $result[ 'Create Table' ];
    if (stristr($str, $searchString)) {
        return false;
    }

    return true;
}

function createExtraIndexs()
{
    //output_message ( "Altering tables, creating new indexes if necessary");

    $query = "SHOW INDEX FROM `#__jomres_guest_profile` WHERE Key_name = 'cms_user_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_guest_profile` ADD INDEX cms_user_id ( cms_user_id ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_custom_text` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'language' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_custom_text` ADD INDEX `language` ( `language` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomresportal_invoices` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_invoices` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomresportal_lineitems` WHERE Key_name = 'inv_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_lineitems` ADD INDEX inv_id ( inv_id ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_booking_data_archive` WHERE Key_name = 'contract_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD INDEX contract_uid ( contract_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomcomp_notes` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomcomp_notes` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomcomp_notes` WHERE Key_name = 'contract_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomcomp_notes` ADD INDEX contract_uid ( contract_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_pluginsettings` WHERE Key_name = 'prid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_pluginsettings` ADD INDEX prid ( prid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_regions` WHERE Key_name = 'countrycode' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_regions` ADD INDEX `countrycode` ( `countrycode` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_extras` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_extras` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_guests` WHERE Key_name = 'mos_userid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_guests` ADD INDEX mos_userid ( mos_userid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_guests` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_guests` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_pcounter` WHERE Key_name = 'p_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_pcounter` ADD INDEX p_uid ( p_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_town' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_town` ( `property_town` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_region' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_region` ( `property_region` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_country' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_country` ( `property_country` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'published' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX published ( published ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'ptype_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX ptype_id ( ptype_id ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rates` WHERE Key_name = 'roomclass_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rates` ADD INDEX roomclass_uid ( roomclass_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rates` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rates` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rooms` WHERE Key_name = 'room_classes_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rooms` ADD INDEX room_classes_uid ( room_classes_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rooms` WHERE Key_name = 'propertys_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rooms` ADD INDEX propertys_uid ( propertys_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'room_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX room_uid ( room_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'date' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX `date` ( `date` ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_settings` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_settings` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    //output_message ( "Altering table __jomres_managers, creating new userid index if necessary");
    $query = "SHOW INDEX FROM `#__jomres_managers` WHERE Key_name = 'userid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_managers` ADD INDEX userid ( userid ) ';
        if (!doInsertSql($query)) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }
}

function insertPortalTables()
{
    $query = "CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT,
		`model` INT,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT,
	PRIMARY KEY (`id`)
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`description` VARCHAR(3000),
		`property_uid` int,
	PRIMARY KEY (`id`)
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int,
		`tariff_id` int,
		`roomclass_uid` int,
		`property_uid` int,
	PRIMARY KEY (`id`)
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
	`id` int(11) auto_increment,
	`property_uid` int,
	`guest_id` int,
	`affiliate_id` varchar(255),
	`invoice_id` int DEFAULT 0,
	`booking_total` float,
	`contract_id` int,
	`tag` varchar(255),
	`currency_code` char(3),
	`created` datetime,
	`archived` bool DEFAULT 0,
	`archived_date` datetime,
	PRIMARY KEY(`id`)
	)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		`tax_rate` INT NULL DEFAULT '1',
		PRIMARY KEY(id)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }
}

///////////////////////////////////////////////////////////////////////////////////////////// Migratiion //////////////////////////////////////////////////////////////

function jomres_migrate()
{
    if (!defined('ACTION')) {
        define('ACTION', 'Migration');
    }
    if (basicTemplatesExist()) {
        exit;
    }

    //output_message ( "<b>Migration under way. Once completed, please check for any errors and if everything looks ok you can go to your administrator area.</b><br/> Remember that this migrator will not import any of your remote plugins as all the plugins need to be checked before they can be passed as working in v4. If you have any Jomres modules installed you must uninstall them using the Joomla extension manager (back up any copies of srch.html you may have customised before doing this) then use the Jomres Plugin manager to install updated versions of those modules.");
    define(OLD_IMAGES_PATH, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'images'.JRDS.'stories'.JRDS.JOMRES_ROOT_DIRECTORY.JRDS);
    define(NEW_IMAGES_PATH, JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'uploadedimages'.JRDS);

    define(OLD_ROOMTYPES_IMAGES_PATH, 'images/stories/jomres/rmtypes/');
    define(NEW_ROOMTYPES_IMAGES_PATH, ''.JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/');
    define(OLD_PROPERTYFEATURE_IMAGES_PATH, 'images/stories/jomres/pfeatures/');
    define(NEW_PROPERTYFEATURE_IMAGES_PATH, ''.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/');

    updateRoomTypeImagePaths();
    updatePropertyFeaturePaths();

    copyImagesToNewPath();

    removepreV4JomresFiles();
    reinstallJomresJoomlaFiles();
    addNewTables();
    alterTables();
    dropOldTables();
    resetMRConfigSettings();
    resetJRConfigSettings();
    insertNewJRConfigSettings();
    insertPluginSettings();

    updateRatesTimestamps();

    doTableUpdates();
}

function updateRatesTimestamps()
{
    $query = 'SELECT rates_uid,validfrom,validto FROM #__jomres_rates';
    $result = doSelectSql($query);
    if (count($result) > 0) {
        foreach ($result as $rate) {
            $validfrom_ts = str_replace('/', '-', $rate->validfrom);
            $validto_ts = str_replace('/', '-', $rate->validto);
            $uid = (int) $rate->rates_uid;
            $query = "UPDATE #__jomres_rates SET 
					`validfrom_ts`='$validfrom_ts',
					`validto_ts`='$validto_ts' 
					WHERE rates_uid='".(int) $uid."'";
            if (!doInsertSql($query, '')) {
                output_message("Error, unable to run query $query", 'danger');
            }
        }
    }
}

function componentsIntegrationExists()
{
    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'integration.php')) {
        return true;
    }

    return false;
}

function updateRoomTypeImagePaths()
{
    //output_message ( "Updating room type image paths in the __jomres_room_classes table.");

    $query = 'SELECT * FROM #__jomres_room_classes';
    $result = doSelectSql($query);
    if (count($result) > 0) {
        foreach ($result as $room_class) {
            $explodedPath = explode('/', $room_class->image);
            $ndx = count($explodedPath) - 1;
            $fileName = $explodedPath[ $ndx ];
            $query = "UPDATE #__jomres_room_classes SET `image` = '".NEW_ROOMTYPES_IMAGES_PATH.$fileName."' WHERE `room_classes_uid`=".$room_class->room_classes_uid;
            if (!doInsertSql($query, '')) {
                output_message("Error, unable to run query $query", 'danger');
            }
        }
    }
}

function updatePropertyFeaturePaths()
{
    //output_message ( "Updating property feature image paths in the __jomres_hotel_features table.");

    $query = 'SELECT * FROM #__jomres_hotel_features';
    $result = doSelectSql($query);
    if (count($result) > 0) {
        foreach ($result as $hotel_feature) {
            $explodedPath = explode('/', $hotel_feature->image);
            $ndx = count($explodedPath) - 1;
            $fileName = $explodedPath[ $ndx ];
            $query = "UPDATE #__jomres_hotel_features SET `image` = '".NEW_PROPERTYFEATURE_IMAGES_PATH.$fileName."' WHERE `hotel_features_uid`=".$hotel_feature->hotel_features_uid;
            if (!doInsertSql($query)) {
                output_message('Failed to run query: '.$query, 'danger');
            }
        }
    }
}

function basicTemplatesExist()
{
    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomcompbasictemplates'.JRDS.'j00001start.class.php')) {
        output_message("Sorry, before we can upgrade you must first uninstall the basic templates plugin as this is no longer compatible with Jomres. Please use the Joomla Extension manager to uninstall the basic templates plugin (back up any customised templates you have before doing so) then rerun this script. <br/>Once you've migrated Jomres, you'll need to go through any of your customised templates (those are the ones that you backed up) and use the new Jomres template editing feature to make any changes you need.", 'danger');

        return true;
    }

    return false;
}

// Table changes
function alterTables()
{
    //output_message ( "Altering tables.");

    //output_message (  "Editing __jomres_extras table adding maxquantity column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `maxquantity` INT( 5 ) DEFAULT '1' AFTER `price`";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Editing __jomres_contracts __jomres_contracts adding extrasquantities column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `extrasquantities` VARCHAR( 255 ) AFTER `extras`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Editing __jomres_contracts table adding coupon_id column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `coupon_id` INTEGER NULL';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Editing __jomres_contracts table adding bookedout column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `bookedout` BOOL NOT NULL DEFAULT '0' ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Editing __jomres_contracts table adding bookedout_timestamp column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `bookedout_timestamp` DATETIME';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    if (!checkTariffsTimeStampColsExists()) {
        alterTariffsTimeStampCols();
    }
}

function checkTariffsTimeStampColsExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_rates LIKE 'validfrom_ts'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

function alterTariffsTimeStampCols()
{
    //output_message (  "Editing __jomres_rates table adding timestamp column");
    $query = 'ALTER TABLE `#__jomres_rates` ADD `validfrom_ts` DATE AFTER `weekendonly` , ADD `validto_ts` DATE AFTER `validfrom_ts`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }
    $query = 'SELECT rates_uid,validfrom,validto FROM #__jomres_rates';
    $allRates = doSelectSql($query);
    foreach ($allRates as $r) {
        $validfrom_ts = str_replace('/', '-', $r->validfrom);
        $validto_ts = str_replace('/', '-', $r->validto);
        $query = "UPDATE #__jomres_rates SET `validfrom_ts`='$validfrom_ts',`validto_ts`='$validto_ts' WHERE rates_uid='$r->rates_uid'";
        doInsertSql($query, '');
    }
}

function dropOldTables()
{
    //output_message ( "Dropping old tables.");

    //output_message (  "Dropping __jomres_tmpguests table");
    $query = 'DROP TABLE IF EXISTS `#__jomres_tmpguests`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Dropping __jomres_tmpbooking table");
    $query = 'DROP TABLE IF EXISTS `#__jomres_tmpbooking`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Dropping __jomres_property_images table");
    $query = 'DROP TABLE IF EXISTS `#__jomres_property_images`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Dropping __jomres_tempBookingOut table");
    $query = 'DROP TABLE IF EXISTS `#__jomres_tempBookingOut`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    //output_message (  "Dropping __jomres_cancellations table");
    $query = 'DROP TABLE IF EXISTS `#__jomres_cancellations`';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }
}

function resetMRConfigSettings()
{
    //output_message ( "Resetting some mrConfig values to the Jomres v4 defaults.");

    $mrConfig = array();

    //$mrConfig['showSlideshowInline']="1";
    //$mrConfig['showTariffsInline']="1";
    $mrConfig[ 'returnRoomsLimit' ] = '1';

    foreach ($mrConfig as $key => $val) {
        $query = "UPDATE #__jomres_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
        //output_message ( "Updating $key to $val");

        $result = doInsertSql($query, '');
    }
}

function resetJRConfigSettings()
{
    //output_message ( "Resetting some jrConfig values to the Jomres v4 defaults.");

    $jrConfig = array();

    $jrConfig[ 'maxwidth' ] = '300';
    $jrConfig[ 'slideshow' ] = 'tooltips';
    $jrConfig[ 'ss_imageLocation' ] = ''.JOMRES_ROOT_DIRECTORY.'/uploadedimages/';
    $jrConfig[ 'composite_property_details' ] = '1';

    foreach ($jrConfig as $key => $val) {
        $query = "UPDATE #__jomres_site_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
        //output_message ( "Updating $key to $val");

        $result = doInsertSql($query, '');
    }
}

function insertNewJRConfigSettings()
{

    //output_message ( "Inserting new site settings");

    $jrConfig[ 'property_list_limit' ] = '5';
    $jrConfig[ 'integratedSearch_enable' ] = '1';
    $jrConfig[ 'integratedSearch_useCols' ] = '0';
    $jrConfig[ 'integratedSearch_featurecols' ] = '3';
    $jrConfig[ 'integratedSearch_selectcombo' ] = '1';
    $jrConfig[ 'integratedSearch_propertyname' ] = '0';
    $jrConfig[ 'integratedSearch_propertyname_dropdown' ] = '1';
    $jrConfig[ 'integratedSearch_geosearchtype' ] = '';
    $jrConfig[ 'integratedSearch_geosearchtype_dropdown' ] = '1';
    $jrConfig[ 'integratedSearch_ptype' ] = '0';
    $jrConfig[ 'integratedSearch_ptype_dropdown' ] = '1';
    $jrConfig[ 'integratedSearch_room_type' ] = '0';
    $jrConfig[ 'integratedSearch_room_type_dropdown' ] = '1';
    $jrConfig[ 'integratedSearch_features' ] = '0';
    $jrConfig[ 'integratedSearch_features_dropdown' ] = '1';
    $jrConfig[ 'integratedSearch_description' ] = '0';
    $jrConfig[ 'integratedSearch_availability' ] = '0';
    $jrConfig[ 'integratedSearch_priceranges' ] = '0';
    $jrConfig[ 'integratedSearch_pricerange_increments' ] = '20';
    $jrConfig[ 'useCaching' ] = '0';
    $jrConfig[ 'showLangDropdown' ] = '0';

    foreach ($jrConfig as $key => $val) {
        $query = "INSERT INTO #__jomres_site_settings (`value`,`akey`) VALUES ('".$val."','".$key."')";
        //output_message ( "Setting $key to $val");

        $result = doInsertSql($query, '');
    }
}

function insertPluginSettings()
{
    //output_message ( "Inserting new plugin settings if required.");

    // Pseudocron settings
    $pluginConfig[ 'jomcompcronjobs' ][ 'method' ] = 'Minicomponent';
    $pluginConfig[ 'jomcompcronjobs' ][ 'displaylogging' ] = '0';
    $pluginConfig[ 'jomcompcronjobs' ][ 'logging' ] = '0';
    $pluginConfig[ 'jomcompcronjobs' ][ 'verbose' ] = '0';

    // Invoices backend paypal settings
    $pluginConfig[ 'backend_paypal_settings' ][ 'usesandbox' ] = '1';
    $pluginConfig[ 'backend_paypal_settings' ][ 'currencycode' ] = 'EUR';
    $pluginConfig[ 'backend_paypal_settings' ][ 'email' ] = '';
    $pluginConfig[ 'backend_paypal_settings' ][ 'override' ] = '0';

    $tempConfigArr = $pluginConfig;
    $pluginConfig = array();
    $query = 'SELECT plugin,setting,value FROM #__jomres_pluginsettings WHERE prid = 0';
    $settingsList = doSelectSql($query);
    if (count($settingsList) > 0) {
        foreach ($settingsList as $settings) {
            $plugin = $settings->plugin;
            $setting = $settings->setting;
            $value = $settings->value;
            $pluginConfig[ $plugin ][ $setting ] = $value;
        }
    }
    foreach ($tempConfigArr as $k => $v) {
        if (!array_key_exists($k, $pluginConfig)) {
            foreach ($v as $sett => $settVal) {
                $query = "INSERT INTO #__jomres_pluginsettings (prid,plugin,setting,value) VALUES (0,'".$k."','".$sett."','".$settVal."')";
                doInsertSql($query, '');
            }
        }
    }
}

// Added tables
function addNewTables()
{
    //output_message ( "Adding new tables if required.");

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_coupons` (
		`coupon_id` INT NOT NULL AUTO_INCREMENT ,
		`property_uid` INT,
		`coupon_code` VARCHAR( 255 ),
		`valid_from` DATE ,
		`valid_to` DATE,
		`amount` FLOAT,
		`is_percentage` BOOL,
		`rooms_only` BOOL,
		PRIMARY KEY ( `coupon_id` )
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_custom_fields` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`fieldname` VARCHAR( 255 ) ,
		`default_value` VARCHAR( 255 ) ,
		`description` VARCHAR( 255 ) ,
		`required` BOOL NOT NULL DEFAULT '0',
		`ptype_xref` text NULL DEFAULT NULL,
		PRIMARY KEY ( `uid` )
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		PRIMARY KEY ( `uid` )
		) ";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices_transactions` (
		id int(10) NOT NULL auto_increment,
		invoice_id int(10) NOT NULL default '0',
		transaction_id int(10) NOT NULL default '0',
		time_added datetime,
		gateway_id varchar(20) NOT NULL default '',
		payment_result text,
		payment_currency varchar(20) NOT NULL default '',
		payment_amount float NOT NULL default '0',
		payment_fees float NOT NULL default '0',
		payment_ref varchar(100) NOT NULL default '',
		notes text,
		PRIMARY KEY  (id)
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`name` varchar(20),
		`description` varchar(255),
		`init_price` float NOT NULL default '0',
		`init_qty` float  NOT NULL default '0.00',
		`init_discount` float NOT NULL default '0',
		`init_total` float NOT NULL default '0',
		`recur_price` float NOT NULL default '0',
		`recur_qty` int(11) NOT NULL default '0',
		`recur_discount` float NOT NULL default '0',
		`recur_total` float NOT NULL default '0',
		`tax_code` char(10),
		`tax_description` char(200),
		`tax_rate` float NOT NULL default '0',
		`inv_id` int(11) NOT NULL COMMENT 'Invoice ID',
		`is_payment`  TINYINT DEFAULT 0 NOT NULL,
		PRIMARY KEY  (`id`)
	)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
		`guest_id` int(11) NOT NULL DEFAULT '0',
		`status` tinyint(4) NOT NULL default '0',
		`raised_date` datetime,
		`due_date` datetime,
		`paid` datetime,
		`subscription` tinyint(1) NOT NULL default '0',
		`init_total` float NOT NULL default '0',
		`recur_total` float NOT NULL default '0',
		`recur_frequency` tinyint(4) NOT NULL default '0',
		`recur_dayofmonth` tinyint(4) NOT NULL default '1',
		`currencycode` char(3),
		`subscription_id` int(11) NOT NULL default '0',
		`contract_id` int(11),
		`property_uid` INT NULL DEFAULT '0',
		`is_commission` INT NULL DEFAULT '0',
		`vat_will_be_charged` BOOL NOT NULL DEFAULT '1',
		PRIMARY KEY  (`id`)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
		`id` int(11) NOT NULL auto_increment,
		`code` char(20),
		`description` varchar(255),
		`rate` float NOT NULL default '0',
		PRIMARY KEY  (`id`)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cron` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`job` char( 100 ) ,
		`schedule` char(2),
		`last_ran` int(12),
		`parameters` varchar(255) null,
		`locked` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `id` )
		);";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = '
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
		`id` int(11) auto_increment,
		`property_uid` int,
		`guest_id` int,
		`affiliate_id` varchar(255),
		`invoice_id` int DEFAULT 0,
		`booking_total` float,
		`contract_id` int,
		`tag` varchar(255),
		`currency_code` char(3),
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` int(11) AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = "CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` int(11) AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		`tax_rate` INT NULL DEFAULT '1',
		PRIMARY KEY(id)
		)";
    if (!doInsertSql($query)) {
        output_message('Failed to run query: '.$query, 'danger');
    }

    $query = 'CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)';
    if (!doInsertSql($query)) {
        if (!AUTO_UPGRADE) {
            output_message('Failed to run query: '.$query, 'danger');
        }
    }

    return true;
}

function removepreV4JomresFiles()
{
    //if ( !AUTO_UPGRADE ) output_message ( "Removing old /components/com_jomres and /administrator/components/com_jomres files." );

    emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS);
    emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS);
}

function reinstallJomresJoomlaFiles()
{
    //if ( !AUTO_UPGRADE ) output_message ( "Copying Jomres v4 /components/com_jomres and /administrator/components/com_jomres files." );
    $result = copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'admin.jomres.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php');
    $result = copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.xml');
    $result = copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'uninstall.jomres.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'uninstall.jomres.php');
    $result = copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.php');
}

function copyImagesToNewPath()
{
    //if ( !AUTO_UPGRADE ) output_message ( "Copying image files from " . OLD_IMAGES_PATH . " to " . NEW_IMAGES_PATH );
    $result = dircopy(OLD_IMAGES_PATH, NEW_IMAGES_PATH);
}

// Piwik tracking code included to help us to understand whether or not the installer worked as expected. As both jomres_webinstall.php and install_jomres.php are deleted after installation it makes sense to include the class here, instead of a library file.

/**
 * Piwik - Open source web analytics.
 *
 * Client to record visits, page views, Goals, Ecommerce activity (product views, add to carts, Ecommerce orders) in a Piwik server.
 * This is a PHP Version of the piwik.js standard Tracking API.
 * For more information, see http://piwik.org/docs/tracking-api/
 *
 * This class requires:
 *  - json extension (json_decode, json_encode)
 *  - CURL or STREAM extensions (to issue the http request to Piwik)
 *
 * @license released under BSD License http://www.opensource.org/licenses/bsd-license.php
 *
 * @version $Id: PiwikTracker.php 4787 2011-05-23 11:09:58Z matt $
 *
 * @link http://piwik.org/docs/tracking-api/
 *
 * @category Piwik
 */
class PiwikTracker
{
    /**
     * Piwik base URL, for example http://example.org/piwik/
     * Must be set before using the class by calling
     *  PiwikTracker::$URL = 'http://yourwebsite.org/piwik/';.
     *
     * @var string
     */
    public static $URL = '';

    /**
     * API Version.
     *
     * @ignore
     *
     * @var int
     */
    const VERSION = 1;

    /**
     * @ignore
     */
    public $DEBUG_APPEND_URL = '';

    /**
     * Visitor ID length.
     *
     * @ignore
     */
    const LENGTH_VISITOR_ID = 16;

    /**
     * Builds a PiwikTracker object, used to track visits, pages and Goal conversions
     * for a specific website, by using the Piwik Tracking API.
     *
     * @param int    $idSite Id site to be tracked
     * @param string $apiUrl "http://example.org/piwik/" or "http://piwik.example.org/"
     *                       If set, will overwrite PiwikTracker::$URL
     */
    public function __construct($idSite, $apiUrl = false)
    {
        $this->cookieSupport = true;
        $this->userAgent = false;
        $this->localHour = false;
        $this->localMinute = false;
        $this->localSecond = false;
        $this->hasCookies = false;
        $this->plugins = false;
        $this->visitorCustomVar = false;
        $this->pageCustomVar = false;
        $this->customData = false;
        $this->forcedDatetime = false;
        $this->token_auth = false;
        $this->attributionInfo = false;
        $this->ecommerceLastOrderTimestamp = false;
        $this->ecommerceItems = array();

        $this->requestCookie = '';
        $this->idSite = $idSite;
        $this->urlReferrer = @$_SERVER[ 'HTTP_REFERER' ];
        $this->pageUrl = self::getCurrentUrl();
        $this->ip = @$_SERVER[ 'REMOTE_ADDR' ];
        $this->acceptLanguage = @$_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ];
        $this->userAgent = @$_SERVER[ 'HTTP_USER_AGENT' ];
        if (!empty($apiUrl)) {
            self::$URL = $apiUrl;
        }
        $this->visitorId = substr(md5(uniqid(rand(), true)), 0, self::LENGTH_VISITOR_ID);
    }

    /**
     * Sets the current URL being tracked.
     *
     * @param string Raw URL (not URL encoded)
     */
    public function setUrl($url)
    {
        $this->pageUrl = $url;
    }

    /**
     * Sets the URL referrer used to track Referrers details for new visits.
     *
     * @param string Raw URL (not URL encoded)
     */
    public function setUrlReferrer($url)
    {
        $this->urlReferrer = $url;
    }

    /**
     * @deprecated
     * @ignore
     */
    public function setUrlReferer($url)
    {
        $this->setUrlReferrer($url);
    }

    /**
     * Sets the attribution information to the visit, so that subsequent Goal conversions are
     * properly attributed to the right Referrer URL, timestamp, Campaign Name & Keyword.
     *
     * This must be a JSON encoded string that would typically be fetched from the JS API:
     * piwikTracker.getAttributionInfo() and that you have JSON encoded via JSON2.stringify()
     *
     * @param string $jsonEncoded JSON encoded array containing Attribution info
     *
     * @see function getAttributionInfo() in http://dev.piwik.org/trac/browser/trunk/js/piwik.js
     */
    public function setAttributionInfo($jsonEncoded)
    {
        $decoded = json_decode($jsonEncoded, $assoc = true);
        if (!is_array($decoded)) {
            throw new Exception("setAttributionInfo() is expecting a JSON encoded string, $jsonEncoded given");
        }
        $this->attributionInfo = $decoded;
    }

    /**
     * Sets Visit Custom Variable.
     * See http://piwik.org/docs/custom-variables/.
     *
     * @param int Custom variable slot ID from 1-5
     * @param string Custom variable name
     * @param string Custom variable value
     * @param string Custom variable scope. Possible values: visit, page
     */
    public function setCustomVariable($id, $name, $value, $scope = 'visit')
    {
        if (!is_int($id)) {
            throw new Exception('Parameter id to setCustomVariable should be an integer');
        }
        if ($scope == 'page') {
            $this->pageCustomVar[ $id ] = array($name, $value);
        } elseif ($scope == 'visit') {
            $this->visitorCustomVar[ $id ] = array($name, $value);
        } else {
            throw new Exception("Invalid 'scope' parameter value");
        }
    }

    /**
     * Returns the currently assigned Custom Variable stored in a first party cookie.
     *
     * This function will only work if the user is initiating the current request, and his cookies
     * can be read by PHP from the $_COOKIE array.
     *
     * @param int Custom Variable integer index to fetch from cookie. Should be a value from 1 to 5
     * @param string Custom variable scope. Possible values: visit, page
     *
     * @return array|false An array with this format: array( 0 => CustomVariableName, 1 => CustomVariableValue )
     *
     * @see Piwik.js getCustomVariable()
     */
    public function getCustomVariable($id, $scope = 'visit')
    {
        if ($scope == 'page') {
            return isset($this->pageCustomVar[ $id ]) ? $this->pageCustomVar[ $id ] : false;
        } elseif ($scope != 'visit') {
            throw new Exception("Invalid 'scope' parameter value");
        }
        if (!empty($this->visitorCustomVar[ $id ])) {
            return $this->visitorCustomVar[ $id ];
        }
        $customVariablesCookie = 'cvar.'.$this->idSite.'.';
        $cookie = $this->getCookieMatchingName($customVariablesCookie);
        if (!$cookie) {
            return false;
        }
        if (!is_int($id)) {
            throw new Exception('Parameter to getCustomVariable should be an integer');
        }
        $cookieDecoded = json_decode($cookie, $assoc = true);
        if (!is_array($cookieDecoded) || !isset($cookieDecoded[ $id ]) || !is_array($cookieDecoded[ $id ]) || count($cookieDecoded[ $id ]) != 2) {
            return false;
        }

        return $cookieDecoded[ $id ];
    }

    /**
     * Sets the Browser language. Used to guess visitor countries when GeoIP is not enabled.
     *
     * @param string For example "fr-fr"
     */
    public function setBrowserLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;
    }

    /**
     * Sets the user agent, used to detect OS and browser.
     * If this function is not called, the User Agent will default to the current user agent.
     *
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * Tracks a page view.
     *
     * @param string $documentTitle Page title as it will appear in the Actions > Page titles report
     *
     * @return string Response
     */
    public function doTrackPageView($documentTitle)
    {
        $url = $this->getUrlTrackPageView($documentTitle);

        return $this->sendRequest($url);
    }

    /**
     * Records a Goal conversion.
     *
     * @param int $idGoal  Id Goal to record a conversion
     * @param int $revenue Revenue for this conversion
     *
     * @return string Response
     */
    public function doTrackGoal($idGoal, $revenue = false)
    {
        $url = $this->getUrlTrackGoal($idGoal, $revenue);

        return $this->sendRequest($url);
    }

    /**
     * Tracks a download or outlink.
     *
     * @param string $actionUrl  URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
     *
     * @return string Response
     */
    public function doTrackAction($actionUrl, $actionType)
    {
        // Referrer could be udpated to be the current URL temporarily (to mimic JS behavior)
        $url = $this->getUrlTrackAction($actionUrl, $actionType);

        return $this->sendRequest($url);
    }

    /**
     * Adds an item in the Ecommerce order.
     *
     * This should be called before doTrackEcommerceOrder(), or before doTrackEcommerceCartUpdate().
     * This function can be called for all individual products in the cart (or order).
     * SKU parameter is mandatory. Other parameters are optional (set to false if value not known).
     * Ecommerce items added via this function are automatically cleared when doTrackEcommerceOrder() or getUrlTrackEcommerceOrder() is called.
     *
     * @param string    $sku      (required) SKU, Product identifier
     * @param string    $name     (optional) Product name
     * @param string    $category (optional) Product category
     * @param float|int $price    (optional) Individual product price (supports integer and decimal prices)
     * @param int       $quantity (optional) Product quantity. If not specified, will default to 1 in the Reports
     */
    public function addEcommerceItem($sku, $name = false, $category = false, $price = false, $quantity = false)
    {
        if (empty($sku)) {
            throw new Exception('You must specify a SKU for the Ecommerce item');
        }
        $this->ecommerceItems[ $sku ] = array($sku, $name, $category, $price, $quantity);
    }

    /**
     * Tracks a Cart Update (add item, remove item, update item).
     *
     * On every Cart update, you must call addEcommerceItem() for each item (product) in the cart,
     * including the items that haven't been updated since the last cart update.
     * Items which were in the previous cart and are not sent in later Cart updates will be deleted from the cart (in the database).
     *
     * @param float $grandTotal Cart grandTotal (typically the sum of all items' prices)
     */
    public function doTrackEcommerceCartUpdate($grandTotal)
    {
        $url = $this->getUrlTrackEcommerceCartUpdate($grandTotal);

        return $this->sendRequest($url);
    }

    /**
     * Tracks an Ecommerce order.
     *
     * If the Ecommerce order contains items (products), you must call first the addEcommerceItem() for each item in the order.
     * All revenues (grandTotal, subTotal, tax, shipping, discount) will be individually summed and reported in Piwik reports.
     * Only the parameters $orderId and $grandTotal are required.
     *
     * @param string|int $orderId    (required) Unique Order ID.
     *                               This will be used to count this order only once in the event the order page is reloaded several times.
     *                               orderId must be unique for each transaction, even on different days, or the transaction will not be recorded by Piwik
     * @param float      $grandTotal (required) Grand Total revenue of the transaction (including tax, shipping, etc.)
     * @param float      $subTotal   (optional) Sub total amount, typically the sum of items prices for all items in this order (before Tax and Shipping costs are applied)
     * @param float      $tax        (optional) Tax amount for this order
     * @param float      $shipping   (optional) Shipping amount for this order
     * @param float      $discount   (optional) Discounted amount in this order
     */
    public function doTrackEcommerceOrder($orderId, $grandTotal, $subTotal = false, $tax = false, $shipping = false, $discount = false)
    {
        $url = $this->getUrlTrackEcommerceOrder($orderId, $grandTotal, $subTotal, $tax, $shipping, $discount);

        return $this->sendRequest($url);
    }

    /**
     * Sets the current page view as an item (product) page view, or an Ecommerce Category page view.
     *
     * This must be called before doTrackPageView() on this product/category page.
     * It will set 3 custom variables of scope "page" with the SKU, Name and Category for this page view.
     * Note: Custom Variables of scope "page" slots 3, 4 and 5 will be used.
     *
     * On a category page, you may set the parameter $category only and set the other parameters to false.
     *
     * Tracking Product/Category page views will allow Piwik to report on Product & Categories
     * conversion rates (Conversion rate = Ecommerce orders containing this product or category / Visits to the product or category)
     *
     * @param string $sku      Product SKU being viewed
     * @param string $name     Product Name being viewed
     * @param string $category Category being viewed. On a Product page, this is the product's category
     */
    public function setEcommerceView($sku = false, $name = false, $category = false)
    {
        if (!empty($sku)) {
            $this->pageCustomVar[ 3 ] = array('_pks', $sku);
        }
        if (!empty($name)) {
            $this->pageCustomVar[ 4 ] = array('_pkn', $name);
        }
        if (!empty($category)) {
            $this->pageCustomVar[ 5 ] = array('_pkc', $category);
        }
    }

    /**
     * Returns URL used to track Ecommerce Cart updates
     * Calling this function will reinitializes the property ecommerceItems to empty array
     * so items will have to be added again via addEcommerceItem().
     *
     * @ignore
     */
    public function getUrlTrackEcommerceCartUpdate($grandTotal)
    {
        $url = $this->getUrlTrackEcommerce($grandTotal);

        return $url;
    }

    /**
     * Returns URL used to track Ecommerce Orders
     * Calling this function will reinitializes the property ecommerceItems to empty array
     * so items will have to be added again via addEcommerceItem().
     *
     * @ignore
     */
    public function getUrlTrackEcommerceOrder($orderId, $grandTotal, $subTotal = false, $tax = false, $shipping = false, $discount = false)
    {
        if (empty($orderId)) {
            throw new Exception('You must specifiy an orderId for the Ecommerce order');
        }
        $url = $this->getUrlTrackEcommerce($grandTotal, $subTotal, $tax, $shipping, $discount);
        $url .= '&ec_id='.urlencode($orderId);
        $this->ecommerceLastOrderTimestamp = $this->getTimestamp();

        return $url;
    }

    /**
     * Returns URL used to track Ecommerce orders
     * Calling this function will reinitializes the property ecommerceItems to empty array
     * so items will have to be added again via addEcommerceItem().
     *
     * @ignore
     */
    protected function getUrlTrackEcommerce($grandTotal, $subTotal = false, $tax = false, $shipping = false, $discount = false)
    {
        if (!is_numeric($grandTotal)) {
            throw new Exception('You must specifiy a grandTotal for the Ecommerce order (or Cart update)');
        }

        $url = $this->getRequest($this->idSite);
        $url .= '&idgoal=0';
        if (!empty($grandTotal)) {
            $url .= '&revenue='.$grandTotal;
        }
        if (!empty($subTotal)) {
            $url .= '&ec_st='.$subTotal;
        }
        if (!empty($tax)) {
            $url .= '&ec_tx='.$tax;
        }
        if (!empty($shipping)) {
            $url .= '&ec_sh='.$shipping;
        }
        if (!empty($discount)) {
            $url .= '&ec_dt='.$discount;
        }
        if (!empty($this->ecommerceItems)) {
            // Removing the SKU index in the array before JSON encoding
            $items = array();
            foreach ($this->ecommerceItems as $item) {
                $items[ ] = $item;
            }
            $url .= '&ec_items='.urlencode(json_encode($items));
        }
        $this->ecommerceItems = array();

        return $url;
    }

    /**
     * @see doTrackPageView()
     *
     * @param string $documentTitle Page view name as it will appear in Piwik reports
     *
     * @return string URL to piwik.php with all parameters set to track the pageview
     */
    public function getUrlTrackPageView($documentTitle = false)
    {
        $url = $this->getRequest($this->idSite);
        if (!empty($documentTitle)) {
            $url .= '&action_name='.urlencode($documentTitle);
        }

        return $url;
    }

    /**
     * @see doTrackGoal()
     *
     * @param string $actionUrl  URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
     *
     * @return string URL to piwik.php with all parameters set to track the goal conversion
     */
    public function getUrlTrackGoal($idGoal, $revenue = false)
    {
        $url = $this->getRequest($this->idSite);
        $url .= '&idgoal='.$idGoal;
        if (!empty($revenue)) {
            $url .= '&revenue='.$revenue;
        }

        return $url;
    }

    /**
     * @see doTrackAction()
     *
     * @param string $actionUrl  URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
     *
     * @return string URL to piwik.php with all parameters set to track an action
     */
    public function getUrlTrackAction($actionUrl, $actionType)
    {
        $url = $this->getRequest($this->idSite);
        $url .= '&'.$actionType.'='.$actionUrl.'&redirect=0';

        return $url;
    }

    /**
     * Overrides server date and time for the tracking requests.
     * By default Piwik will track requests for the "current datetime" but this function allows you
     * to track visits in the past. All times are in UTC.
     *
     * Allowed only for Super User, must be used along with setTokenAuth()
     *
     * @see setTokenAuth()
     *
     * @param string Date with the format 'Y-m-d H:i:s', or a UNIX timestamp
     */
    public function setForceVisitDateTime($dateTime)
    {
        $this->forcedDatetime = $dateTime;
    }

    /**
     * Overrides IP address.
     *
     * Allowed only for Super User, must be used along with setTokenAuth()
     *
     * @see setTokenAuth()
     *
     * @param string IP string, eg. 130.54.2.1
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Forces the requests to be recorded for the specified Visitor ID
     * rather than using the heuristics based on IP and other attributes.
     *
     * This is typically used with the Javascript getVisitorId() function.
     *
     * Allowed only for Super User, must be used along with setTokenAuth()
     *
     * @see setTokenAuth()
     *
     * @param string $visitorId 16 hexadecimal characters visitor ID, eg. "33c31e01394bdc63"
     */
    public function setVisitorId($visitorId)
    {
        if (strlen($visitorId) != self::LENGTH_VISITOR_ID) {
            throw new Exception('setVisitorId() expects a '.self::LENGTH_VISITOR_ID.' characters ID');
        }
        $this->forcedVisitorId = $visitorId;
    }

    /**
     * If the user initiating the request has the Piwik first party cookie,
     * this function will try and return the ID parsed from this first party cookie (found in $_COOKIE).
     *
     * If you call this function from a server, where the call is triggered by a cron or script
     * not initiated by the actual visitor being tracked, then it will return
     * the random Visitor ID that was assigned to this visit object.
     *
     * This can be used if you wish to record more visits, actions or goals for this visitor ID later on.
     *
     * @return string 16 hex chars visitor ID string
     */
    public function getVisitorId()
    {
        if (!empty($this->forcedVisitorId)) {
            return $this->forcedVisitorId;
        }

        $idCookieName = 'id.'.$this->idSite.'.';
        $idCookie = $this->getCookieMatchingName($idCookieName);
        if ($idCookie !== false) {
            $visitorId = substr($idCookie, 0, strpos($idCookie, '.'));
            if (strlen($visitorId) == self::LENGTH_VISITOR_ID) {
                return $visitorId;
            }
        }

        return $this->visitorId;
    }

    /**
     * Returns the currently assigned Attribution Information stored in a first party cookie.
     *
     * This function will only work if the user is initiating the current request, and his cookies
     * can be read by PHP from the $_COOKIE array.
     *
     * @return string JSON Encoded string containing the Referer information for Goal conversion attribution.
     *                Will return false if the cookie could not be found
     *
     * @see Piwik.js getAttributionInfo()
     */
    public function getAttributionInfo()
    {
        $attributionCookieName = 'ref.'.$this->idSite.'.';

        return $this->getCookieMatchingName($attributionCookieName);
    }

    /**
     * Some Tracking API functionnality requires express authentication, using either the
     * Super User token_auth, or a user with 'admin' access to the website.
     *
     * The following features require access:
     * - force the visitor IP
     * - force the date & time of the tracking requests rather than track for the current datetime
     * - force Piwik to track the requests to a specific VisitorId rather than use the standard visitor matching heuristic
     *
     * @param string token_auth 32 chars token_auth string
     */
    public function setTokenAuth($token_auth)
    {
        $this->token_auth = $token_auth;
    }

    /**
     * Sets local visitor time.
     *
     * @param string $time HH:MM:SS format
     */
    public function setLocalTime($time)
    {
        list($hour, $minute, $second) = explode(':', $time);
        $this->localHour = (int) $hour;
        $this->localMinute = (int) $minute;
        $this->localSecond = (int) $second;
    }

    /**
     * Sets user resolution width and height.
     *
     * @param int $width
     * @param int $height
     */
    public function setResolution($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Sets if the browser supports cookies
     * This is reported in "List of plugins" report in Piwik.
     *
     * @param bool $bool
     */
    public function setBrowserHasCookies($bool)
    {
        $this->hasCookies = $bool;
    }

    /**
     * Will append a custom string at the end of the Tracking request.
     *
     * @param string $string
     */
    public function setDebugStringAppend($string)
    {
        $this->DEBUG_APPEND_URL = $string;
    }

    /**
     * Sets visitor browser supported plugins.
     *
     * @param bool $flash
     * @param bool $java
     * @param bool $director
     * @param bool $quickTime
     * @param bool $realPlayer
     * @param bool $pdf
     * @param bool $windowsMedia
     * @param bool $gears
     * @param bool $silverlight
     */
    public function setPlugins($flash = false, $java = false, $director = false, $quickTime = false, $realPlayer = false, $pdf = false, $windowsMedia = false, $gears = false, $silverlight = false)
    {
        $this->plugins = '&fla='.(int) $flash.'&java='.(int) $java.'&dir='.(int) $director.'&qt='.(int) $quickTime.'&realp='.(int) $realPlayer.'&pdf='.(int) $pdf.'&wma='.(int) $windowsMedia.'&gears='.(int) $gears.'&ag='.(int) $silverlight;
    }

    /**
     * By default, PiwikTracker will read third party cookies
     * from the response and sets them in the next request.
     * This can be disabled by calling this function.
     */
    public function disableCookieSupport()
    {
        $this->cookieSupport = false;
    }

    /**
     * @ignore
     */
    protected function sendRequest($url)
    {
        $timeout = 600; // Allow debug while blocking the request
        $response = '';

        if (!$this->cookieSupport) {
            $this->requestCookie = '';
        }
        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt_array($ch, array(CURLOPT_URL => $url, CURLOPT_USERAGENT => $this->userAgent, CURLOPT_HEADER => true, CURLOPT_TIMEOUT => $timeout, CURLOPT_RETURNTRANSFER => true, CURLOPT_HTTPHEADER => array('Accept-Language: '.$this->acceptLanguage, 'Cookie: '.$this->requestCookie)));
            ob_start();
            $response = @curl_exec($ch);
            ob_end_clean();
            $header = $content = '';
            if (!empty($response)) {
                list($header, $content) = explode("\r\n\r\n", $response, $limitCount = 2);
            }
        } elseif (function_exists('stream_context_create')) {
            $stream_options = array('http' => array('user_agent' => $this->userAgent, 'header' => 'Accept-Language: '.$this->acceptLanguage."\r\n".'Cookie: '.$this->requestCookie."\r\n", 'timeout' => $timeout// PHP 5.2.1
            ));
            $ctx = stream_context_create($stream_options);
            $response = file_get_contents($url, 0, $ctx);
            $header = implode("\r\n", $http_response_header);
            $content = $response;
        }
        // The cookie in the response will be set in the next request
        preg_match_all('/^Set-Cookie: (.*?);/m', $header, $cookie);
        if (!empty($cookie[ 1 ])) {
            // in case several cookies returned, we keep only the latest one (ie. XDEBUG puts its cookie first in the list)
            if (is_array($cookie[ 1 ])) {
                $cookie = end($cookie[ 1 ]);
            } else {
                $cookie = $cookie[ 1 ];
            }
            if (strpos($cookie, 'XDEBUG') === false) {
                $this->requestCookie = $cookie;
            }
        }

        return $content;
    }

    /**
     * Returns current timestamp, or forced timestamp/datetime if it was set.
     *
     * @return string|int
     */
    protected function getTimestamp()
    {
        return !empty($this->forcedDatetime) ? strtotime($this->forcedDatetime) : time();
    }

    /**
     * @ignore
     */
    protected function getRequest($idSite)
    {
        if (empty(self::$URL)) {
            throw new Exception('You must first set the Piwik Tracker URL by calling PiwikTracker::$URL = \'http://your-website.org/piwik/\';');
        }
        if (strpos(self::$URL, '/piwik.php') === false && strpos(self::$URL, '/proxy-piwik.php') === false) {
            self::$URL .= '/piwik.php';
        }

        $url = self::$URL.'?idsite='.$idSite.'&rec=1'.'&apiv='.self::VERSION.'&rand='.mt_rand().

            // PHP DEBUGGING: Optional since debugger can be triggered remotely
            (!empty($_GET[ 'XDEBUG_SESSION_START' ]) ? '&XDEBUG_SESSION_START='.@$_GET[ 'XDEBUG_SESSION_START' ] : '').(!empty($_GET[ 'KEY' ]) ? '&KEY='.@$_GET[ 'KEY' ] : '').

            // Only allowed for Super User, token_auth required
            (!empty($this->ip) ? '&cip='.$this->ip : '').(!empty($this->forcedVisitorId) ? '&cid='.$this->forcedVisitorId : '&_id='.$this->visitorId).(!empty($this->forcedDatetime) ? '&cdt='.urlencode($this->forcedDatetime) : '').(!empty($this->token_auth) ? '&token_auth='.urlencode($this->token_auth) : '').

            // These parameters are set by the JS, but optional when using API
            (!empty($this->plugins) ? $this->plugins : '').(($this->localHour !== false && $this->localMinute !== false && $this->localSecond !== false) ? '&h='.$this->localHour.'&m='.$this->localMinute.'&s='.$this->localSecond : '').(!empty($this->width) && !empty($this->height) ? '&res='.$this->width.'x'.$this->height : '').(!empty($this->hasCookies) ? '&cookie='.$this->hasCookies : '').(!empty($this->ecommerceLastOrderTimestamp) ? '&_ects='.urlencode($this->ecommerceLastOrderTimestamp) : '').

            // Various important attributes
            (!empty($this->customData) ? '&data='.$this->customData : '').(!empty($this->visitorCustomVar) ? '&_cvar='.urlencode(json_encode($this->visitorCustomVar)) : '').(!empty($this->pageCustomVar) ? '&cvar='.urlencode(json_encode($this->pageCustomVar)) : '').

            // URL parameters
            '&url='.urlencode($this->pageUrl).'&urlref='.urlencode($this->urlReferrer).

            // Attribution information, so that Goal conversions are attributed to the right referrer or campaign
            // Campaign name
            (!empty($this->attributionInfo[ 0 ]) ? '&_rcn='.urlencode($this->attributionInfo[ 0 ]) : ''). // Campaign keyword
            (!empty($this->attributionInfo[ 1 ]) ? '&_rck='.urlencode($this->attributionInfo[ 1 ]) : ''). // Timestamp at which the referrer was set
            (!empty($this->attributionInfo[ 2 ]) ? '&_refts='.$this->attributionInfo[ 2 ] : ''). // Referrer URL
            (!empty($this->attributionInfo[ 3 ]) ? '&_ref='.urlencode($this->attributionInfo[ 3 ]) : '').

            // DEBUG
            $this->DEBUG_APPEND_URL;
        // Reset page level custom variables after this page view
        $this->pageCustomVar = false;

        return $url;
    }

    /**
     * Returns a first party cookie which name contains $name.
     *
     * @param string $name
     *
     * @return string String value of cookie, or false if not found
     * @ignore
     */
    protected function getCookieMatchingName($name)
    {
        // Piwik cookie names use dots separators in piwik.js,
        // but PHP Replaces . with _ http://www.php.net/manual/en/language.variables.predefined.php#72571
        $name = str_replace('.', '_', $name);
        foreach ($_COOKIE as $cookieName => $cookieValue) {
            if (strpos($cookieName, $name) !== false) {
                return $cookieValue;
            }
        }

        return false;
    }

    /**
     * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
     * will return "/dir1/dir2/index.php".
     *
     * @return string
     * @ignore
     */
    protected static function getCurrentScriptName()
    {
        $url = '';
        if (!empty($_SERVER[ 'PATH_INFO' ])) {
            $url = $_SERVER[ 'PATH_INFO' ];
        } elseif (!empty($_SERVER[ 'REQUEST_URI' ])) {
            if (($pos = strpos($_SERVER[ 'REQUEST_URI' ], '?')) !== false) {
                $url = substr($_SERVER[ 'REQUEST_URI' ], 0, $pos);
            } else {
                $url = $_SERVER[ 'REQUEST_URI' ];
            }
        }
        if (empty($url)) {
            $url = $_SERVER[ 'SCRIPT_NAME' ];
        }

        if ($url[ 0 ] !== '/') {
            $url = '/'.$url;
        }

        return $url;
    }

    /**
     * If the current URL is 'http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
     * will return 'http'.
     *
     * @return string 'https' or 'http'
     * @ignore
     */
    protected static function getCurrentScheme()
    {
        if (isset($_SERVER[ 'HTTPS' ]) && ($_SERVER[ 'HTTPS' ] == 'on' || $_SERVER[ 'HTTPS' ] === true)) {
            return 'https';
        }

        return 'http';
    }

    /**
     * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
     * will return "http://example.org".
     *
     * @return string
     * @ignore
     */
    protected static function getCurrentHost()
    {
        if (isset($_SERVER[ 'HTTP_HOST' ])) {
            return $_SERVER[ 'HTTP_HOST' ];
        }

        return 'unknown';
    }

    /**
     * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
     * will return "?param1=value1&param2=value2".
     *
     * @return string
     * @ignore
     */
    protected static function getCurrentQueryString()
    {
        $url = '';
        if (isset($_SERVER[ 'QUERY_STRING' ]) && !empty($_SERVER[ 'QUERY_STRING' ])) {
            $url .= '?'.$_SERVER[ 'QUERY_STRING' ];
        }

        return $url;
    }

    /**
     * Returns the current full URL (scheme, host, path and query string.
     *
     * @return string
     * @ignore
     */
    protected static function getCurrentUrl()
    {
        return self::getCurrentScheme().'://'.self::getCurrentHost().self::getCurrentScriptName().self::getCurrentQueryString();
    }
}

function Piwik_getUrlTrackPageView($idSite, $documentTitle = false)
{
    $tracker = new PiwikTracker($idSite);

    return $tracker->getUrlTrackPageView($documentTitle);
}

function Piwik_getUrlTrackGoal($idSite, $idGoal, $revenue = false)
{
    $tracker = new PiwikTracker($idSite);

    return $tracker->getUrlTrackGoal($idGoal, $revenue);
}

function updateSiteSettings($k, $v)
{
    if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
        $query = "SELECT id FROM #__jomres_site_settings WHERE akey = '".$k."'";
        $result = doSelectSql($query);
        if (count($result) == 0) {
            $query = "INSERT INTO #__jomres_site_settings (akey,value) VALUES ('".$k."','".$v."')";
        } else {
            $query = "UPDATE #__jomres_site_settings SET `value`='".$v."' WHERE akey = '".$k."'";
        }
        doInsertSql($query, '');
    } else {
        //output_message ( "Updating configuration.php ".$k." = ".$v, "info" );
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $tmpConfig = $siteConfig->get();

        $tmpConfig[$k] = (string) $v;
        $tmpConfig['development_production'] = PROD_DEV;
        if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($tmpConfig, true).';
')) {
            output_message('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.', 'danger');
        }
    }
}

function insert_pfeature_categories()
{
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (1, 'Activities')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (2, 'Amenities')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (3, 'Accessibility')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (4, 'Views')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (5, 'Living Area')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (6, 'Media & Technology')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (7, 'Food & Drink')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (8, 'Parking')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (9, 'Services')";
    doInsertSql($query, '');
    $query = "INSERT INTO #__jomres_hotel_features_categories (id,title) VALUES (10, 'Bathroom')";
    doInsertSql($query, '');
}

function include_location_file()
{
    if (!defined('JOMRES_ROOT_DIRECTORY')) {
        if (file_exists(dirname(__FILE__).'/../jomres_root.php')) {
            require_once dirname(__FILE__).'/../jomres_root.php';
        } else {
            define('JOMRES_ROOT_DIRECTORY', 'jomres');
        }
    }

    return true;
}

function jomres_create_location_file()
{
    $path = dirname(__FILE__);
    $dir = basename($path);

    $dir = basename($dir);

    $location = '<?php
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
if (!defined(\'JOMRES_ROOT_DIRECTORY\'))
	{
	define ( \'JOMRES_ROOT_DIRECTORY\' , "'.$dir.'" ) ;
	}
';
    if (!@file_put_contents('../jomres_root.php', $location)) {
        // No longer going to return False, instead we'll do define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" ) ; in the integration script if we can't make this file.
        return true;
        //output_message ("Error, unable to create jomres_root.php in your CMS's root directory. Please create it manually with the following contents : <br/> ".nl2br (htmlentities($location)) , "danger" );
        //return false;
    } else {
        return true;
    }
}

function output_message($message, $class_style = 'info')
{
    $class = 'alert-'.$class_style;
    if (!AUTO_UPGRADE && trim($message) != '') {
        echo '<p class="alert '.$class.'">'.$message.'</p>
		';
    }
    if ($class_style == 'danger') {
        define('ERRORS_SHOWN_NO_REDIRECT', 1);
    }
}

function showGetInstallUpgradeRequest()
{
    global $lkey; ?>
		<form action="" method="post" name="adminForm">
			<div class="alert alert-danger">
			<h3>Cannot identify existing tables therefore cannot determine auotmatically if we are
				installing or upgrading. Please advise:<br></h3>

				<div align="center"><br>
					<input type="radio" name="manual_install_confirmation" value="install"> This is a new installation of Jomres<br>
					<input type="radio" name="manual_install_confirmation" value="upgrade" checked>This is an upgrade of an existing Jomres installation<br>
				</div>
			</div>
			<input type="hidden" name="option" value="com_jomres"/>
			<input type="submit" value="Continue" class="button">
		</form>
	<?php

}

function includeCDN()
{
    ?>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
			<title>Jomres installation/upgrade</title>
			<style>
				.steps a {
					padding: 10px 12px 10px 25px;
					margin-right: 5px;
					background: #efefef;
					position: relative;
					display: inline-block;
					color:#000;
					text-decoration:none;
				}
				.steps a:hover {cursor: pointer; cursor: hand;}
				.steps a:before {
					width: 0;
					height: 0;
					border-top: 20px inset transparent;
					border-bottom: 20px inset transparent;
					position: absolute;
					content: "";
					top: 0;
					left: 0;
				}
				.steps a:after {
					width: 0;
					height: 0;
					border-top: 20px inset transparent;
					border-bottom: 20px inset transparent;
					border-left: 20px solid #efefef;
					position: absolute;
					content: "";
					top: 0;
					right: -20px;
					z-index: 2;
				}
				/*.steps a:last-child:after,*/
				.steps a:first-child:before {
					border: none;
				}
				.steps a:first-child {
					padding-left:15px;   
					-webkit-border-radius: 4px 0 0 4px;
					   -moz-border-radius: 4px 0 0 4px;
							border-radius: 4px 0 0 4px;
				}
				.steps a:last-child {
					-webkit-border-radius: 0 4px 4px 0;
					   -moz-border-radius: 0 4px 4px 0;
							border-radius: 0 4px 4px 0;
				}
				.steps .current {
					background: #007ACC;
					color: #fff;
				}
				.steps .current:after {
					border-left-color: #007ACC;
				}
			</style>
		</head>
		<body>
	<?php

}
function showheader()
{
    ?>
	<div class="container">
	<?php

}

function showTop()
{
    $current1 = '';
    $current2 = '';
    if (isset($_POST[ 'go' ])) {
        $current2 = ' class="current"';
    } else {
        $current1 = ' class="current"';
    } ?>
	
	<p>&nbsp;</p>
	
	<img src="http://www.jomres.net/images/jomres.png" class="img-responsive"/>
	
	<p>&nbsp;</p>
	
	<h2 class="page-header">Installation/upgrade stage</h2>

	<div class="visible-desktop steps">
		<a><span>Download Jomres</span></a>
		<a <?php echo $current1; ?>><span>Prepare installation</span></a>
		<a <?php echo $current2; ?>><span>Complete installation</span></a>
	</div>
	<p>&nbsp;</p>
	<?php

}

function proceed()
{
    $mrConfig = getPropertySpecificSettings();

    if (this_cms_is_joomla()) {
        $akeeba_backup_url = 'https://www.akeebabackup.com/products/akeeba-backup.html';
    }

    if (this_cms_is_wordpress()) {
        $akeeba_backup_url = 'https://www.akeebabackup.com/products/akeeba-backup-wordpress.html';
    } ?>
		<div class="alert alert-warning">
		You should always perform a backup before installing or upgrading Jomres (or, in fact any plugin), in the unlikely event that something goes wrong. If you haven't yet backed up we recommend that you consider installing <a href="<?php echo $akeeba_backup_url?>" target="_blank">Akeeba backup</a>
		</div>
		
		<form action="" method="post" name="adminForm">
			<p>Press the GO button when you are ready to proceed with installation/upgrade</p>
			<input type="submit" name="go" value="GO >>" class="btn btn-success btn-lg" />
		</form>

		<h3 class="page-header">Remove Jomres tables</h3>
		<div class="alert alert-danger">Please, do not use this button unless you're sure you want to remove all your current Jomres tables. This action is only recoverable by restoring a database backup. </div>
		<form action="" method="post" name="adminForm">
			<input type="hidden" name="option" value="com_jomres"/>
			<input type="hidden" name="trashtables" value="1"/>
			<input type="submit" name="remove_tables" value="Remove Jomres Tables" class="btn btn-danger btn-sm"/>
		</form>
	
	<?php

}

function showCompletedText()
{
    $administrator_url = jomres_installer_get_admin_url();

    output_message('Thank you for installing Jomres. We will now redirect you to your Jomres control panel', 'success');

    if (ACTION != 'Upgrade') {
        output_message('<br>If you wish you can go straight to your Jomres install and start editing your property. To enable the property manager functionality log in as your site <a href="'.$administrator_url.'" >administrator</a>, go to your site profiles and assign a frontend user as a property manager.', 'success');
    }

    if (this_cms_is_wordpress() && ACTION != 'Upgrade') {
        output_message('You must remember to Activate Jomres in the Wordpress plugin manager before you can use it.', 'warning');
    }

    if (ACTION != 'Upgrade') {
        output_message('Please remember, to configure your property you need to log into the frontend as the administrator user, you cannot configure propertys via the administrator area.', 'warning');
    }

    if (!defined('ERRORS_SHOWN_NO_REDIRECT') && PROD_DEV == 'production') {
        ?>
		<script type="text/javascript">
		setTimeout(function() {
		parent.jQuery('#jomres-installation-modal').modal('hide');
		parent.window.location.href = "<?php echo $administrator_url ?>";
		}, 5000);
		</script>
		<?php

    }
}

function jomres_installer_get_admin_url()
{
    $path = explode('?', $_SERVER[ 'REQUEST_URI' ]);
    $_URI = explode('/', $path[0]);

    array_shift($_URI);
    $_URI = array_slice($_URI, 0, count($_URI) - 2);
    array_unshift($_URI, $_SERVER[ 'SERVER_NAME' ]);

    if (this_cms_is_joomla()) {
        $administrator_url = 'http://'.implode('/', $_URI).'/administrator/index.php?option=com_jomres';
    } elseif (this_cms_is_wordpress()) {
        if (ACTION == 'Upgrade') {
            $administrator_url = JOMRES_SITEPAGE_URL_ADMIN;
        } else {
            $administrator_url = 'http://'.implode('/', $_URI).'/wp-admin/plugins.php';
        }
    } else {
        $administrator_url = JOMRES_SITEPAGE_URL_ADMIN;
    }

    return $administrator_url;
}

function showfooter()
{
    ?>
			</div> <!-- closes container div -->
		</body>
	</html>
	<?php
    checkPropertyTableExists();
    if (!defined('ACTION') && ACTION != 'Upgrade') {
        echo '<center>
		<iframe frameborder="no" width="800px" height="300px" src="http://analytics.jomres.net/index.php?module=CoreAdminHome&action=optOut&language=en"></iframe>
		<br/>
		</center>';
    }
}
