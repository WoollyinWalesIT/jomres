<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Have to do this automatically otherwise Jomres will never run when upgrading from v2.5 to v3.x of joomla
if (this_cms_is_joomla()) {
    $result = true;
    if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php')) {
        if (!unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php')) {
			throw new Exception('Error, tried to delete '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS.'admin.jomres.php'.'. However, file permissions prevent this from happening, so you MUST delete this file before you can continue with the upgrade. This file is not used by Joomla 3.x+');
		}
    }
}

try {
	//do table updates, the legacy way
	doTableUpdates();

	//remove obsolete cron jobs
	removeCronJob('invoice');
	removeCronJob('optimise');
	removeCronJob('exchangerates');

	//for updates from Jomres v6.6.5.
	updateImages();

	//import countries and regions
	import_countries();
	import_regions();

	//for updates from Jomres v7 maybe?
	import_images_to_media_centre_directories();

	//add api and webhooks tables
	addApiAndWebhooksTables();

	//finishing touches
	updateMrConfig();
	updatePluginSettings();
	installCronjobs();
	createExtraIndexs();
} 
catch (Exception $e) {
	echo 'Error, something went wrong when running the legacy installer, Jomres may not be installed properly.';
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/

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
            //throw new Exception ( "Cleaning up " . JOMRES_IMAGELOCATION_ABSPATH . $dir . ", deleting any images that do not have a corresponding main image file.");
            foreach ($small_images_array as $key => $small_image) {
                $main_filename = str_replace('_thumbnail.jpg', '.jpg', $small_image);
                if (!file_exists(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$main_filename)) {
                    unlink(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$small_image);
                    unset($small_images_array[ $key ]);
                }
            }
            foreach ($medium_images_array as $key => $medium_image) {
                $main_filename = str_replace('_thumbnail_med.jpg', '.jpg', $medium_image);
                if (!file_exists(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$main_filename)) {
                    unlink(JOMRES_IMAGELOCATION_ABSPATH.$dir.JRDS.$medium_image);
                    unset($medium_images_array[ $key ]);
                }
            }
        }
    }
}


/**
 *
 * @package Jomres\Core\Database
 *
 * Add API and Webhook tables
 *
 **/
function addApiAndWebhooksTables() 
{
	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_clients (
		`client_id` VARCHAR(80) NOT NULL, 
		`client_secret` VARCHAR(80), 
		`redirect_uri` VARCHAR(2000) NOT NULL, 
		`grant_types` VARCHAR(80), 
		`scope` VARCHAR(1000), 
		`user_id` VARCHAR(80), 
		`identifier` VARCHAR(255),
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


	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_oauth_scopes (scope TEXT, is_default BOOLEAN)";
	doInsertSql($query,"");

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

	if (!isset($jrConfig[ 'api_core_show' ])) {
		$siteConfig->insert_new_setting('api_core_show', '0');
	}

	$query = "SHOW COLUMNS FROM #__jomres_oauth_clients LIKE 'identifier'";
	$colExists = doSelectSql( $query );
	if (count($colExists) < 1)
		{
		$query = "ALTER TABLE `#__jomres_oauth_clients` ADD `identifier` VARCHAR(255) ";
		doInsertSql($query,"");
		}

	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_webhooks_integrations (
		`id` INT(11) auto_increment, 
		`manager_id` int(11),
		`settings`  text null, 
		`enabled` BOOL NOT NULL DEFAULT '1',
		PRIMARY KEY	(`id`)
		)";
	doInsertSql($query,"");

	if ( !checkIntegrationsEnabledColExists() ) alterIntegrationsEnabledCol();

	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();
	
	// We need to see if there's a "system" user in the database, if there's not we'll create them. This is a once only action
    $query = "SELECT client_id,scope FROM #__jomres_oauth_clients WHERE client_id = 'system' LIMIT 1";
    $result = doSelectSql($query);
    if (empty($result)) {
        $query = "INSERT INTO #__jomres_oauth_clients 
        (`client_id`,`client_secret`,`redirect_uri`,`grant_types`,`scope`,`user_id`) 
        VALUES 
        ('system', '".createNewAPIKey()."', '', NULL, '*', '4294967295')";
        if ( !doInsertSql( $query, jr_gettext( '_OAUTH_CREATED', '_OAUTH_CREATED', false ) ) ) {
            throw new Exception('Unable to update oauth client details, mysql db failure');
		}
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy table updates
 *
 **/
function doTableUpdates()
{
    // Might not need this, commented out for now
    // Disabled 03/02/2017
    /* if (checkExtraServicesTableNeedsRenaming()) {
        renameExtraServicesTable();
    }
 */
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

    move_license_key_to_site_settings();

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

    if (!checkRoomDescriptionColExists()) {
        alterRoomsDescriptionCol();
    }
    
    change_default_date_value_for_subscriptions_table();

    if (!checkPtypesMarkerColExists()) {
        alterPtypesMarkerCol();
    }

    if (!checkGuestsBlacklistedColExists()) {
        alterGuestsBlacklistedCol();
    }
	
	if (!checkGuestsProfileParamsColExists()) {
        alterGuestsProfileParamsCol();
    }
    
	if (!checkPropertysCompletedColExists()) {
        alterPropertysCompletedCol();
    }
	
	if (!checkPropertysCatIdColExists()) {
        alterPropertysCatIdCol();
    }
	
	if (!checkPtypesHasStarsColExists()) {
        alterPtypesHasStarsCol();
    }
	
	if (!checkCustomtextLangContextColExists()) {
        alterCustomtextLangContextCol();
	}
 
	if (!checkLineitemsPaymentMethodColExists()) {
        alterLineitemsPaymentMethodCol();
	}
	
	if (!checkPropertyFeaturesFilterColExists()) {
        alterPropertyFeaturesFilterCol();
	}
	
	if (!checkReviewsRatingsContractUidColExists()) {
        alterReviewsRatingsContractUidCol();
	}
	
	alterCustomtextColsChangeDefaultVals();
	copy_default_property_type_markers();
    drop_orphan_line_items_table();
    drop_room_images_table();
	drop_cronlog_table();
	add_jomres_sessions_table();
	add_jomres_template_package_table();
	add_jomres_property_categories_table();
	add_jomres_images_table();	
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterReviewsRatingsContractUidCol()
{
    $query = "ALTER TABLE `#__jomres_reviews_ratings` ADD `contract_uid` int( 11 ) default NULL  ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_reviews_ratings contract_uid column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkReviewsRatingsContractUidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_reviews_ratings LIKE 'contract_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertyFeaturesFilterCol()
{
    $query = "ALTER TABLE `#__jomres_hotel_features` ADD `include_in_filters` TINYINT(1) NOT NULL DEFAULT 1 ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_hotel_features include_in_filters column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPropertyFeaturesFilterColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'include_in_filters'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkLineitemsPaymentMethodColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'payment_method'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterLineitemsPaymentMethodCol()
{
    //throw new Exception ( "Editing __jomresportal_lineitems table adding is_payment column");
    $query = 'ALTER TABLE `#__jomresportal_lineitems` ADD `payment_method`  VARCHAR(100) NOT NULL DEFAULT ""';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_lineitems is_payment');
    }
    $query = 'ALTER TABLE #__jomresportal_lineitems ADD `transaction_id`  VARCHAR(255) NOT NULL DEFAULT ""';
    $result = doInsertSql($query);
    $query = 'ALTER TABLE #__jomresportal_lineitems ADD `management_url`  VARCHAR(1000) NOT NULL DEFAULT ""';
    $result = doInsertSql($query);
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPtypesHasStarsCol()
{
    //throw new Exception ( "Editing __jomres_ptypes table adding has_stars column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `has_stars` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_ptypes has_stars column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPtypesHasStarsColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'has_stars'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function add_jomres_images_table()
{
	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_images (
		`id` INT(11) NOT NULL auto_increment,
        `property_uid` INT(11) NOT NULL DEFAULT 0,
		`resource_type` VARCHAR(100),
		`resource_id` VARCHAR(255),
		`filename` VARCHAR(255),
		`version` VARCHAR(20),
        PRIMARY KEY (`id`)
        )";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to create the __jomres_images table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterCustomtextColsChangeDefaultVals()
{
    $query = "ALTER TABLE `#__jomres_custom_text` CHANGE `constant` `constant` VARCHAR(100) NOT NULL DEFAULT '0', CHANGE `language` `language` CHAR(5) NOT NULL DEFAULT 'en-GB', CHANGE `language_context` `language_context` VARCHAR(50) NOT NULL DEFAULT '0' ";
	if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to alter __jomres_custom_text constant,language and language_context columns');
    }
	
	$query = "UPDATE #__jomres_custom_text SET `language_context` = '0' WHERE `language_context` = '' ";
	if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to update __jomres_custom_text language_context to 0 where language context is blank');
    }
	
	//add unique index to 4 columns to prevent future duplicates
	$query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'const_puid_lang_langcontext' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		//delete duplicate redords
		$query = "DELETE FROM #__jomres_custom_text USING #__jomres_custom_text INNER JOIN #__jomres_custom_text b WHERE #__jomres_custom_text.constant = b.constant AND #__jomres_custom_text.property_uid = b.property_uid AND #__jomres_custom_text.language = b.language AND #__jomres_custom_text.language_context = b.language_context AND #__jomres_custom_text.uid < b.uid";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to delete duplicates from __jomres_custom_text table');
		}
		
		//add unique index to 4 columns
		$query = "ALTER TABLE `#__jomres_custom_text` ADD UNIQUE `const_puid_lang_langcontext` (`constant`, `property_uid`, `language`, `language_context`)";
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterCustomtextLangContextCol()
{
    $query = "ALTER TABLE `#__jomres_custom_text` ADD `language_context` VARCHAR(100) NOT NULL DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_custom_text language_context column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkCustomtextLangContextColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_custom_text LIKE 'language_context'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysCatIdCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding permit_number column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `cat_id` BOOL NOT NULL DEFAULT 0 ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys cat_id');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPropertysCatIdColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'cat_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysCompletedCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding permit_number column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `completed` BOOL NOT NULL DEFAULT 0 ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys completed');
    }
	
	$query = "UPDATE `#__jomres_propertys` SET `completed` = 1 WHERE `published` = 1 ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to set completed flag to published properties');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPropertysCompletedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'completed'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterGuestsProfileParamsCol()
{
    $query = 'ALTER TABLE `#__jomres_guest_profile` ADD `params` TEXT';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_guest_profile params column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkGuestsProfileParamsColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guest_profile LIKE 'params'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function add_jomres_template_package_table()
{
	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_template_package_overrides (
		`id` INT(11) auto_increment,
        `template_name` VARCHAR(100) NOT NULL,
		`path` VARCHAR(1000) NOT NULL,
        PRIMARY KEY (`id`)
        )";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to create the __jomres_template_package_overrides table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function add_jomres_property_categories_table()
{
	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_property_categories (
		`id` INT(11) NOT NULL auto_increment,
        `title` VARCHAR(255),
		`description` TEXT,
        PRIMARY KEY (`id`)
        )";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to create the __jomres_property_categories table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function add_jomres_sessions_table()
{
	$query = "CREATE TABLE IF NOT EXISTS  #__jomres_sessions (
        `session_id` VARCHAR(50) NOT NULL, 
        `data` TEXT, 
        `last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
        PRIMARY KEY (`session_id`)
        )";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to create the __jomres_sessions table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterGuestsBlacklistedCol()
{
    $query = 'ALTER TABLE `#__jomres_guests` ADD `blacklisted` tinyint( 1 ) default 0 NOT NULL ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_guests blacklisted');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkGuestsBlacklistedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'blacklisted'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkRoomDescriptionColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_rooms LIKE 'description'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterRoomsDescriptionCol()
{
    $query = 'ALTER TABLE #__jomres_rooms ADD `tagline` VARCHAR(255)';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_rooms tagline column');
    }
    $query = 'ALTER TABLE #__jomres_rooms ADD `description` TEXT';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_rooms descriptions column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function drop_cronlog_table() {
	$query = 'DROP TABLE IF EXISTS `#__jomcomp_cronlog` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop #__jomcomp_cronlog table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function copy_default_property_type_markers() {
	$passed = true;
	if (!is_dir(JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS)) {
		if (!@mkdir(JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS)) {
			 throw new Exception("Error, unable to make folder ".JOMRES_IMAGELOCATION_ABSPATH."markers".JRDS." automatically therefore cannot copy the default property type markers. Please create the folder manually and ensure that it's writable by the web server.");
			$passed = false;
		}
	}

	if ($passed) {
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-blue.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-blue.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-blue-darker.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-blue-darker.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-dark.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-dark.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-green.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-green.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-green-darker.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-green-darker.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-orange.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-orange.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-pink.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-pink.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
		
		if (!copy(JOMRES_IMAGES_ABSPATH.JRDS.'markers'.JRDS.'free-map-marker-icon-red.png', JOMRES_IMAGELOCATION_ABSPATH.'markers'.JRDS.'free-map-marker-icon-red.png')) {
			throw new Exception("Error, unable to copy marker image");
		}
	}
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkManagersUsernameColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'username' ";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function doUserRolesUpdates()
{
    //throw new Exception ( "Updating user role for super property managers");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 90 WHERE `pu` = 1 ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to update super property manager access level');
    }

    //throw new Exception ( "Updating user role for property managers");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 70 WHERE `access_level` = 2 ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to update property manager access level');
    }

    //throw new Exception ( "Updating user role for receptionist");
    $query = 'UPDATE #__jomres_managers SET `access_level` = 50 WHERE `access_level` = 1 ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to update receptionist access level');
    }

    //throw new Exception ( "Editing __jomres_managers table dropping property uid column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `property_uid` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop property uid column from __jomres_managers table');
    }

    //throw new Exception ( "Editing __jomres_managers table dropping username column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `username` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop username column from __jomres_managers table');
    }

    //throw new Exception ( "Editing __jomres_managers table dropping property uid column");
    $query = 'ALTER TABLE #__jomres_managers DROP COLUMN `pu` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop pu column from __jomres_managers table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPtypesMarkerCol()
{
    //throw new Exception ( "Editing __jomres_ptypes table adding marker column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `marker` varchar( 255 ) DEFAULT 'free-map-marker-icon-red.png' AFTER `mrp_srp_flag`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_ptypes marker');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPtypesMarkerColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'marker'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function change_default_date_value_for_subscriptions_table()
{
    $query = "ALTER TABLE `#__jomresportal_subscriptions` MODIFY COLUMN `raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01', MODIFY COLUMN `expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to modify __jomresportal_subscriptions raised_date and expiration_date columns default value');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysPermitCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding permit_number column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `permit_number` varchar( 255 ) DEFAULT '' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys permit_number');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPropertysPermitColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'permit_number'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function removeCronJob($job = '')
{
    if ($job == '') {
        return;
    }

    jr_import('jomres_cron');
    $cron = new jomres_cron();
    $cron->removeJob($job);
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function addCronJob($job = '', $schedule = 'D', $params = '')
{
    if ($job == '') {
        return;
    }

    jr_import('jomres_cron');
    $cron = new jomres_cron();
    $cron->addJob($job, $schedule, $params);
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function drop_orphan_line_items_table()
{
    $query = 'DROP TABLE IF EXISTS `#__jomresportal_orphan_lineitems` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop #__jomresportal_orphan_lineitems table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function drop_room_images_table()
{
    $query = 'DROP TABLE IF EXISTS `#__jomres_room_images` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop #__jomres_room_images table');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkRtypesSrpOnlyFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_room_classes LIKE 'srp_only'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function dropRtypesSrpOnlyFlagCol()
{
    //throw new Exception ( "Editing __jomres_room_classes table dropping srp_only column");
    $query = 'ALTER TABLE #__jomres_room_classes DROP COLUMN `srp_only` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop __jomres_room_classes srp_only column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPtypesMrpsrpFlagCol()
{
    //throw new Exception ( "Editing __jomres_ptypes table adding mrp_srp_flag column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `mrp_srp_flag` TINYINT DEFAULT '2' AFTER `order`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_ptypes mrp_srp_flag');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPtypesMrpsrpFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'mrp_srp_flag'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsReferrerCol()
{
    //throw new Exception ( "Editing __jomres_contracts table adding referrer column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `referrer` varchar( 255 ) DEFAULT 'Jomres' AFTER `last_changed` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts referrer');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsReferrerColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'referrer'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtrasLimitedtoroomtypeCol()
{
    //throw new Exception ( "Editing __jomres_extras table adding limited_to_room_type column");
    $query = 'ALTER TABLE `#__jomres_extras` ADD `limited_to_room_type` INT(11) NOT NULL DEFAULT 0 NOT NULL AFTER `include_in_property_lists`';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras limited_to_room_type');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtrasLimitedtoroomtypeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'limited_to_room_type'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterGuestsPartnerIdCol()
{
    //throw new Exception ( "Editing __jomres_guests table adding partner_id columns");
    $query = 'ALTER TABLE `#__jomres_guests` ADD `partner_id` INT(11) NOT NULL DEFAULT 0 NOT NULL AFTER `vat_number_validation_response` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_guests partner_id');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkGuestsPartnerIdColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'partner_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createPartnerBookingsTable()
{
    //throw new Exception ( "Creating _jomres_partner_bookings table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_partner_bookings` (
		`id` INT(11) auto_increment,
		`contract_uid` INT(11) NOT NULL DEFAULT 0,
		`partner_id` INT(11) NOT NULL DEFAULT 0,
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table _jomres_partner_bookings ');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtraservicesQtyColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices LIKE 'service_qty'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtraservicesQtyCol()
{
    //throw new Exception ( "Editing __jomres_extraservices table adding services_qty column");
    $query = 'ALTER TABLE #__jomres_extraservices ADD `service_qty` FLOAT NOT NULL DEFAULT 1 AFTER `tax_code` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extraservices service_qty column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkRoomSmokingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_rooms LIKE 'smoking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterRoomsSmokingCol()
{
    //throw new Exception ( "Editing __jomres_rooms table dropping smoking, room_disabled_access columns");
    $query = 'ALTER TABLE #__jomres_rooms DROP COLUMN `smoking`, DROP COLUMN `room_disabled_access` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop __jomres_rooms smoking, room_disabled_access columns');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsSmokingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'smoking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsSmokingCol()
{
    //throw new Exception ( "Editing __jomres_contracts table dropping smoking column");
    $query = 'ALTER TABLE #__jomres_contracts DROP COLUMN `smoking` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop __jomres_contracts smoking column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createPfeaturesCategoriesTable()
{
    //throw new Exception ( "Creating jomres_hotel_features_categories table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features_categories` (
		`id` int(11) auto_increment,
		`title`  varchar(255) NOT NULL DEFAULT 0,
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table jomres_hotel_features_categories ');
    } else {
        $query = "
			INSERT INTO `#__jomres_hotel_features_categories` (`id`, `title`) VALUES
			(1, 'Activities'),
			(2, 'Amenities'),
			(3, 'Accessibility'),
			(4, 'Views'),
			(5, 'Living Area'),
			(6, 'Media & Technology'),
			(7, 'Food & Drink'),
			(8, 'Parking'),
			(9, 'Services'),
			(10, 'Bathroom')
			";

			if (!doInsertSql($query)) {
				throw new Exception('Error, unable to insert sample data in the #__jomres_hotel_features_categories table');
			}

    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPfeaturesCategoryColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'cat_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPfeaturesCategoryCol()
{
    //throw new Exception ( "Editing __jomres_hotel_features table adding cat_id column");
    $query = 'ALTER TABLE #__jomres_hotel_features ADD `cat_id` INT(11) NOT NULL DEFAULT 0 AFTER `ptype_xref` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_hotel_features cat_id');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkRfeaturesImageColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_room_features LIKE 'image'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterRfeaturesImageCol()
{
    //throw new Exception ( "Editing __jomres_room_features table adding image column");
    $query = 'ALTER TABLE `#__jomres_room_features` ADD `image` VARCHAR(255) NULL DEFAULT NULL AFTER `ptype_xref`';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_room_features image column');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtrasIncludeinlistsCol()
{
    //throw new Exception ( "Editing __jomres_extras table adding include_in_property_lists column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `include_in_property_lists` BOOL NOT NULL DEFAULT '1' AFTER `room_classes_uid`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras include_in_property_lists');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtrasIncludeinlistsColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'include_in_property_lists'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtrasValidfromCol()
{
    //throw new Exception('Editing __jomres_extras table adding validfrom column');
    $query = 'ALTER TABLE `#__jomres_extras` ADD `validfrom` DATETIME DEFAULT NULL AFTER `property_uid`';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras validfrom');
    }
    $query = 'ALTER TABLE `#__jomres_extras` ADD `validto` DATETIME DEFAULT NULL AFTER `validfrom`';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras validto');
    }
    $query = 'ALTER TABLE `#__jomres_extras` ADD `room_classes_uid` INTEGER AFTER `validto`';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras room_classes_uid');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtrasValidfromColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'validfrom'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createInvoicePaymentXrefTable()
{
    //throw new Exception ( "Creating jomres_invoice_payment_ref table");
    $query = "CREATE TABLE IF NOT EXISTS `#__jomres_invoice_payment_ref` (
		`id` int(11) auto_increment,
		`invoice_id`  int(11),
		`gateway` CHAR(255) NOT NULL DEFAULT '',
		`paid` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY	(`id`)
		) ";
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table __jomres_invoice_payment_ref ');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function move_license_key_to_site_settings()
{
    if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
        $query = "SELECT value FROM #__jomres_settings WHERE property_uid = 0 AND akey = 'jomres_licensekey' LIMIT 1";
        $license_key = doSelectSql($query, 1);
        if (trim($license_key) != '') {
            //throw new Exception ( "Moving license key from settings table to site settings" );
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $siteConfig->insert_new_setting('licensekey', $license_key);
            // now this query will remove the license key from jomres_settings
            $query = "DELETE FROM #__jomres_settings WHERE property_uid = 0 AND akey = 'jomres_licensekey'";
            doInsertSql($query, '');
        }
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function save_configuration_file()
{
    if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) {
        //throw new Exception ( "Saving new configuration.php file which stores the site settings" );
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $config_to_save = $siteConfig->get();
		
		//we won`t store the version in configuration.php (or BC _site_settings table), so it will always be loaded from site_config.php
		if (isset($config_to_save['version'])) {
			unset($config_to_save['version']);
		}
		
        if (!file_put_contents(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php',
'<?php
##################################################################
defined( \'_JOMRES_INITCHECK\' ) or die( \'\' );
##################################################################

$jrConfig = ' .var_export($config_to_save, true).';
')) {
            throw new Exception('ERROR: '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php'.' can`t be saved. Please solve the permission problem and try again.');
        } else {
            if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'configuration.php')) { // Triple check that the settings file has been created before we drop this table
                $query = 'DROP TABLE IF EXISTS #__jomres_site_settings';
                if (!doInsertSql($query, '')) {
                    throw new Exception('Error dropping the _jomres_site_settings table');
                }
            }
        }
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function drop_portal_bookings_table()
{
    $query = 'DROP TABLE IF EXISTS #__jomresportal_bookings';
    doInsertSql($query, '');
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function drop_portal_users_table()
{
    $query = 'DROP TABLE IF EXISTS #__jomresportal_users';
    doInsertSql($query, '');
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkLineitemsIspaymentColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'is_payment'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterLineitemsIspaymentCol()
{
    //throw new Exception ( "Editing __jomresportal_lineitems table adding is_payment column");
    $query = 'ALTER TABLE `#__jomresportal_lineitems` ADD `is_payment`  TINYINT(1) DEFAULT 0 NOT NULL';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_lineitems is_payment');
    }
    $query = 'ALTER TABLE #__jomresportal_lineitems MODIFY name varchar(255)';
    $result = doInsertSql($query);
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysLastchangedCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding last_changed column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys last_changed');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPropertysLastchangedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_propertys LIKE 'last_changed'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsLastchangedCol()
{
    //throw new Exception ( "Editing __jomres_contracts table adding last_changed column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts last_changed');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsLastchangedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'last_changed'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterManagerLastactiveCol()
{
    //throw new Exception ( "Editing __jomres_managers table adding last_active column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `last_active` datetime default NULL AFTER `users_timezone` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_managers last_active');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkManagerLastactiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'last_active'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterTaxratesEUCol()
{
    //throw new Exception ( "Editing __jomresportal_taxrates table adding is_eu_country column");
    $query = "ALTER TABLE `#__jomresportal_taxrates` ADD `is_eu_country` BOOL NOT NULL DEFAULT '0' AFTER `rate` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_taxrates is_eu_country');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysSiteIdCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding property_site_id column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `property_site_id` varchar(255) NULL AFTER `approved` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys property_site_id');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsLang()
{
    //throw new Exception ( "Editing __jomres_contracts table adding booking_language column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `booking_language` CHAR(5) NOT NULL DEFAULT 'en-GB' AFTER `secret_key_used` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts booking_language');
    }
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsLangColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'booking_language'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkCustomertypesIsChildColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_customertypes LIKE 'is_child'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}

/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterCustomertypesIsChildCol()
{
    //throw new Exception ( "Editing __jomres_customertypes table adding is_child column");
    $query = "ALTER TABLE `#__jomres_customertypes` ADD `is_child` BOOL NULL DEFAULT '0' AFTER `order` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_customertypes is_child');
    }
}

// In Jomres 8.1 we're offering the ability to use a different path to the Jomres root directory due to requirements of the wordpress repository. As a result, we need to change the paths to the property feature and room type images.
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function renameExtraServicesTable()
{
    $query = 'RENAME TABLE `#__jomres_extraServices` TO `#__jomres_temp`';
    $result = doSelectSql($query);

    $query = 'RENAME TABLE `#__jomres_temp` TO `#__jomres_extraservices`';
    $result = doSelectSql($query);

    //throw new Exception ( "Renamed `#__jomres_extraServices to #__jomres_extraservices");
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtraServicesTableNeedsRenaming()
{
    $query = "SHOW VARIABLES LIKE 'lower_case_table_names';";
    $case_sensitivity = doSelectSql($query, 1);
    if ($case_sensitivity == 0) {
        throw new Exception('Warning, Jomres attempted to check for the existance of the jomres_extraServices table, however your lower_case_table_names setting in mySql is set to 0 (zero) so we cannot test for this table name as mySql will return the table name as jomres_extraservices, even if it\'s stored as jomres_extraServices.<br/> Please check your table names (using a tool such as phpMyAdmin) and if the table is named xxxx_jomres_extraServices rename it manually to xxx_jomres_extraservices.  If you have already done this in the past you can ignore this warning.');

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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterBookingdataarchiveContractid()
{
    //throw new Exception ( "Editing __jomres_booking_data_archive table adding contract_uid column");
    $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD `contract_uid` INT DEFAULT 0 NOT NULL AFTER `date` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_booking_data_archive contract_uid');
    }
    $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD `tag` varchar(255) NULL AFTER `contract_uid` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_booking_data_archive tag');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkBookingdataarchiveContractidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_booking_data_archive LIKE 'contract_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsBookingdataarchiveCol()
{
    //throw new Exception ( "Editing __jomres_contracts table adding booking_data_archive_id column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `booking_data_archive_id` INT DEFAULT '0' NOT NULL AFTER `approved` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts booking_data_archive_id');
    }
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `secret_key` CHAR(100) AFTER `booking_data_archive_id` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts secret_key');
    }
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `secret_key_used` TINYINT DEFAULT 0 NOT NULL AFTER `secret_key` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts secret_key_used');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsBookingdataarchiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'booking_data_archive_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsApproved()
{
    //throw new Exception ( "Editing __jomres_contracts table adding approved column");
    $query = 'ALTER TABLE `#__jomres_contracts` ADD `approved` TINYINT( 1 ) DEFAULT 1 NOT NULL AFTER `channel_manager_booking` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts approved');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsApprovedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'approved'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterTarifftypesDescriptionCol()
{
    //throw new Exception ( "Editing __jomcomp_tarifftypes table adding description column");
    $query = 'ALTER TABLE `#__jomcomp_tarifftypes` ADD `description` VARCHAR(3000) DEFAULT NULL AFTER `name` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomcomp_tarifftypes description');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkTarifftypesDescriptionColExists()
{
    $query = "SHOW COLUMNS FROM #__jomcomp_tarifftypes LIKE 'description'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterManagerSimpleconfigCol()
{
    //throw new Exception ( "Editing __jomres_managers table adding simple_configuration column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `simple_configuration` tinyint( 1 ) default 1 AFTER `suspended` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_managers simple_configuration');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkManagerSimpleconfigColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'simple_configuration'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsChannelManagerBookingCol()
{
    //throw new Exception ( "Editing __jomres_contracts table adding channel_manager_booking column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `channel_manager_booking` BOOL NOT NULL DEFAULT '0' AFTER `invoice_uid` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts channel_manager_booking');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsChannelManagerBookingColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'channel_manager_booking'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPTypeXrefColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'ptype_xref'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPTypeXrefCol()
{
    //throw new Exception ( "Editing __jomres_hotel_features table renaming ptype_id column");
    $query = 'ALTER TABLE `#__jomres_hotel_features` CHANGE COLUMN ptype_id ptype_xref text NULL DEFAULT NULL';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_hotel_features ptype_xref');
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
                    throw new Exception('Error, unable to add __jomres_custom_property_fields_fields column ptype_xref');
                }
            }
        }
    }

    $query = 'ALTER TABLE `#__jomres_room_features` ADD `ptype_xref` text NULL DEFAULT NULL AFTER `property_uid` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_room_features ptype_xref');
    }

    $query = 'ALTER TABLE `#__jomres_custom_fields` ADD `ptype_xref` text NULL DEFAULT NULL AFTER `required` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_custom_fields ptype_xref');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkCratesTaxRateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_c_rates LIKE 'tax_rate'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterCratesTaxRateCol()
{
    //throw new Exception ( "Editing __jomresportal_c_rates table adding tax_rate column");
    $query = "ALTER TABLE `#__jomresportal_c_rates` ADD `tax_rate` INT NULL DEFAULT '1' AFTER `archived_date` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_c_rates tax_rate');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkInvoicesVATFlagColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'vat_will_be_charged'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterInvoicesVATFlagCol()
{
    //throw new Exception ( "Editing __jomresportal_invoices table adding vat_will_be_charged column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `vat_will_be_charged` BOOL NOT NULL DEFAULT '1' AFTER `is_commission` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_invoices vat_will_be_charged');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createTaxRulesTable()
{
    //throw new Exception ( "Creating jomres_tax_rules table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_tax_rules` (
		`id` int(11) auto_increment,
		`tax_rate_id`  int(11),
		`country_id` int(11),
		`region_id` int(11),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table jomres_tax_rules ');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterGuestsVatcodeCol()
{
    //throw new Exception ( "Editing __jomres_guests table adding vat_number/vat_number_validated columns");
    $query = "ALTER TABLE `#__jomres_guests` ADD `vat_number` CHAR (25) DEFAULT '' NOT NULL AFTER `discount` "; // Most I could find was up to possibly 15 chars. Adding 10 to be on the safe side.
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guests vat_number');
    }
    $query = "ALTER TABLE `#__jomres_guests` ADD `vat_number_validated` BOOL NOT NULL DEFAULT '0' AFTER `vat_number` ";
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guests vat_number_validated');
    }
    $query = 'ALTER TABLE `#__jomres_guests` ADD `vat_number_validation_response` TEXT NULL AFTER `vat_number_validated` ';
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guests vat_number_validation_response');
    }

    $query = "ALTER TABLE `#__jomres_guest_profile` ADD `vat_number` CHAR (25) DEFAULT '' NOT NULL AFTER `email` "; // Most I could find was up to possibly 15 chars. Adding 10 to be on the safe side.
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guest_profile vat_number');
    }
    $query = "ALTER TABLE `#__jomres_guest_profile` ADD `vat_number_validated` BOOL NOT NULL DEFAULT '0' AFTER `vat_number` ";
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guest_profile vat_number_validated');
    }
    $query = 'ALTER TABLE `#__jomres_guest_profile` ADD `vat_number_validation_response` TEXT NULL AFTER `vat_number_validated` ';
    if (!doInsertSql($query, '')) {
        //throw new Exception('Error, unable to add __jomres_guest_profile vat_number_validation_response');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkGuestsVatcodeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'vat_number'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysMetakeywordsCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding metakeywords column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `metakeywords` TEXT NULL AFTER `metadescription` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys metakeywords');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysSuperiorCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding superior column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `superior` TINYINT( 1 ) DEFAULT '0' NOT NULL AFTER `stars` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys superior');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysApprovedCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding approved column");
    $query = "ALTER TABLE `#__jomres_propertys` ADD `approved`  BOOL NOT NULL DEFAULT '1' AFTER `timestamp` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys approved');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
                //throw new Exception('Updated property regions to property region ids');
            } else {
                throw new Exception('Failed to update property regions to property region ids');
            }
        }
    }
}

// The functions.php version of this function has recently had a call to a Joomla function added. This creates a problem during installation. Rather than making the find_region_id ALWAYS check for the existence of the CMS specific function every time it's run, we'll duplicate the function here instead. find_region_id has the potential to be called many times, so the fewer calls we can make to check if a function exists when 99.99999% if the time it does, the less load we're creating.
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createCountriesTable()
{
    //throw new Exception ( "Creating _jomres_countries table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_countries` (
		`id` int(11) auto_increment,
		`countrycode` VARCHAR(2),
		`countryname` VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table _jomres_countries ');
    }

    //throw new Exception ( "Creating _jomres_regions table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_regions` (
		`id` int(11) auto_increment,
		`countrycode` VARCHAR(2),
		`regionname` VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table _jomres_countries ');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtraServicesTaxtax_codeColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices LIKE 'tax_code'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtraServicesTaxtax_codeCol()
{
    //throw new Exception ( "Editing __jomres_extraservices table adding tax_code column");
    $query = "ALTER TABLE `#__jomres_extraservices` ADD `tax_code` CHAR (10) DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extraservices tax_code');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkInvoicesGuestidColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'guest_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterInvoicesGuestidCol()
{
    //throw new Exception ( "Editing __jomresportal_invoices table adding guest_id column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `guest_id` int(11) NOT NULL DEFAULT '0' AFTER `cms_user_id` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_invoices guest_id');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createAccessControlTable()
{
    //throw new Exception ( "Creating __jomres_access_control table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_access_control` (
		`id` int(11) auto_increment,
		`scriptname` VARCHAR(255),
		`access_level` CHAR(255),
		PRIMARY KEY	(`id`)
		) ';
    $result = doInsertSql($query, '');
    if (!$result) {
        throw new Exception('Error creating table table __jomres_access_control ');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPtypesOrderCol()
{
    //throw new Exception ( "Editing __jomres_ptypes table adding order column");
    $query = "ALTER TABLE `#__jomres_ptypes` ADD `order` INT NULL DEFAULT '0' AFTER `published`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_ptypes order');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkPtypesOrderColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_ptypes LIKE 'order'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtrasAutoSelectCol()
{
    //throw new Exception ( "Editing __jomres_extras table adding auto_select column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `auto_select` INT NULL DEFAULT '0' AFTER `price`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras auto_select');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtrasAutoselectColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'auto_select'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkLineitemsInclusiveColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'init_total_inclusive'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterLineitemsInclusiveCol()
{
    //throw new Exception ( "Editing __jomresportal_lineitems table adding init_total_inclusive column");
    $query = "ALTER TABLE `#__jomresportal_lineitems` ADD `init_total_inclusive` float NOT NULL default '0' AFTER `init_total`";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_lineitems init_total_inclusive');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkCouponsBookingValidColsExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_coupons  LIKE 'booking_valid_from'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterCouponsBookingValidCols()
{
    //throw new Exception ( "Editing __jomres_coupons table adding booking_valid_from column");
    $query = 'ALTER TABLE `#__jomres_coupons` ADD `booking_valid_from` DATE AFTER rooms_only ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_coupons booking_valid_from');
    }

    //throw new Exception('Editing __jomres_coupons table adding booking_valid_to column');
    $query = 'ALTER TABLE `#__jomres_coupons` ADD `booking_valid_to` DATE AFTER booking_valid_from ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_coupons booking_valid_to');
    }

    //throw new Exception('Editing __jomres_coupons table adding guest_uid column');
    $query = "ALTER TABLE `#__jomres_coupons` ADD `guest_uid` INT NULL DEFAULT '0' AFTER booking_valid_to ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_coupons booking_valid_to');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtraServicesTaxColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extraservices  LIKE 'tax_rate_val'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtraServicesTaxCol()
{
    //throw new Exception ( "Editing __jomres_extraservices table adding tax_rate_val column");
    $query = "ALTER TABLE `#__jomres_extraservices` ADD `tax_rate_val` CHAR (10) DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extraservices tax_rate_val');
    }
}

// An odd one, this. It seems that some upgrades haven't got this table, so we'll add it if needed
/* function createExtraServicesTable()
    {
    throw new Exception ( "Creating __jomres_extraservices table");
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
        throw new Exception ( "Error creating table table __jomres_extraservices ";
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createGuestProfileTable()
{
    //throw new Exception ( "Creating _jomres_guest_profile table");
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
		`params` TEXT, 
		PRIMARY KEY(id)
		) ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add _jomres_guest_profile table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkInvoicesIsCommisionColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'is_commission'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterInvoicesIsCommisionCol()
{
    //throw new Exception ( "Editing __jomresportal_invoices table adding is_commission column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `is_commission` INT NULL DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_invoices is_commission');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterManagerSuspendedCol()
{
    //throw new Exception ( "Editing __jomres_managers table adding suspended column");
    $query = 'ALTER TABLE `#__jomres_managers` ADD `suspended` tinyint( 1 ) default 0 AFTER `apikey` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_managers suspended');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkManagerSuspendedColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'suspended'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createPartnerTables()
{
    //throw new Exception ( "Creating __jomres_partners table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_partners table');
    }

    //throw new Exception ( "Creating __jomres_partners_discounts table");
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
        throw new Exception('Error, unable to add __jomres_partners_discounts table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterManagerTimezoneCol()
{
    //throw new Exception ( "Editing __jomres_managers table adding users_timezone column");
    $query = "ALTER TABLE `#__jomres_managers` ADD `users_timezone` CHAR(100) DEFAULT 'Europe/Berlin' AFTER `apikey` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_managers users_timezone');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkManagerTimezoneColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_managers LIKE 'users_timezone'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createRoomtypePropertytypeXrefTable()
{
    //throw new Exception ( "Creating room type/property type xref table");
    $query = 'CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_roomtypes_propertytypes_xref table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createBookingdataArchiveTable()
{
    //throw new Exception ( "Creating booking data archive tables");
    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	`contract_uid` INT  DEFAULT 0 NOT NULL ,
	`tag` varchar(255) NULL ,
	PRIMARY KEY ( `id` )
	)';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add _jomres_booking_data_archive table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createReviewDetailTable()
{
    //throw new Exception ( "Creating review detail tables");
    $query = 'CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating` int( 11 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add _jomres_reviews_ratings_detail table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createReviewsTables()
{
    //throw new Exception ( "Creating reviews tables");
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
	`contract_uid` int( 11 ) default NULL ,
	PRIMARY KEY ( `rating_id` )
	)";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_reviews_ratings table');
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
        throw new Exception('Error, unable to add __jomres_reviews_ratings_confirm table');
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
        throw new Exception('Error, unable to add __jomres_reviews_reports table');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkJoomlaComponentsTableInCaseJomresHasBeenUninstalled()
{
    require_once _JOMRES_DETECTED_CMS_SPECIFIC_FILES.'cms_specific_installation.php';
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterGuestsDiscountCol()
{
    //throw new Exception ( "Editing __jomres_guests table adding discount column");
    $query = "ALTER TABLE `#__jomres_guests` ADD `discount` INT( 11 ) DEFAULT '0' NOT NULL AFTER `email` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_guests discount');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkGuestsDiscountColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_guests LIKE 'discount'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterContractsInvoice()
{
    //throw new Exception ( "Editing __jomres_contracts table adding invoice_uid column");
    $query = "ALTER TABLE `#__jomres_contracts` ADD `invoice_uid` INT( 11 ) DEFAULT '0' NOT NULL AFTER `bookedout_timestamp` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_contracts invoice_uid');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkContractsInvoiceColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_contracts LIKE 'invoice_uid'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPfeaturesPtypeidCol()
{
    //throw new Exception ( "Editing __jomres_hotel_features table adding ptype_id column");
    $query = "ALTER TABLE `#__jomres_hotel_features` ADD `ptype_id` INT( 11 ) DEFAULT '0' NOT NULL AFTER `property_uid` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_hotel_features ptype_id');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterSubscribersSubscriptionPackageIdCol()
{
    //throw new Exception ( "Editing __jomresportal_subscriptions table adding package_id column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `package_id` INT NULL DEFAULT '0' AFTER `gateway_subscription_id` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions package_id');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function doV9subscriptionUpdates()
{
    //throw new Exception ( "Dropping __jomresportal_subscribers table ");
    $query = 'DROP TABLE IF EXISTS `#__jomresportal_subscribers` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop __jomresportal_subscribers table');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions table dropping gateway_subscription_id, name, description, frequency, trial_period, trial_amount, full_amount, rooms_limit, property_limit columns");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions` DROP COLUMN `gateway_subscription_id`, DROP COLUMN `name`, DROP COLUMN `description`, DROP COLUMN `frequency`, DROP COLUMN `trial_period`, DROP COLUMN `trial_amount`, DROP COLUMN `full_amount`, DROP COLUMN `rooms_limit`, DROP COLUMN `property_limit` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop gateway_subscription_id, name, description, frequency, trial_period, trial_amount, full_amount, rooms_limit, property_limit columns from the __jomresportal_subscriptions table');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions table adding expiration_date column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `expiration_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' AFTER `raised_date` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions expiration_date column');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions table adding invoice_id column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `invoice_id` INT(11) NOT NULL DEFAULT '0' AFTER `expiration_date` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions invoice_id column');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions_packages table dropping trial_amount, trial_period, rooms_limit, property_limit columns");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` DROP COLUMN `trial_amount`, DROP COLUMN `trial_period`, DROP COLUMN `rooms_limit`, DROP COLUMN `property_limit` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to drop trial_amount, trial_period, rooms_limit, property_limit columns from the __jomresportal_subscriptions_packages table');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions_packages table adding currencycode column");
    $query = "ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `currencycode` VARCHAR(11) NOT NULL DEFAULT 'GBP' AFTER `tax_code_id` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions_packages currencycode column');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions_packages table adding renewal_price column");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `renewal_price` FLOAT AFTER `currencycode` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions_packages renewal_price column');
    }

    //throw new Exception ( "Editing __jomresportal_subscriptions_packages table adding params column");
    $query = 'ALTER TABLE `#__jomresportal_subscriptions_packages` ADD `params` TEXT AFTER `renewal_price` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_subscriptions_packages params column');
    }

    //throw new Exception ( "Changing frequency column in __jomresportal_subscriptions_packages table to int(5) default 365");
    $query = "ALTER TABLE `#__jomresportal_subscriptions_packages` MODIFY `frequency` INT(5) NOT NULL DEFAULT '365' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to change frequency column in __jomresportal_subscriptions_packages to int(5)');
    }

    //throw new Exception ( "Changing raised_date column in __jomresportal_subscriptions table to DATETIME NOT NULL DEFAULT 1970-01-01 00:00:01 ");
    $query = "ALTER TABLE `#__jomresportal_subscriptions` MODIFY `raised_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to change raised_date column in __jomresportal_subscriptions to DATETIME NOT NULL DEFAULT 1970-01-01 00:00:01');
    }

    //throw new Exception ( "Altering table __jomresportal_subscriptions, creating new expiration_date index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'expiration_date' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX expiration_date ( expiration_date ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    //throw new Exception ( "Altering table __jomresportal_subscriptions, creating new status index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'status' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX status ( status ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    //throw new Exception ( "Altering table __jomresportal_subscriptions, creating new cms_user_id index if necessary");
    $query = "SHOW INDEX FROM `#__jomresportal_subscriptions` WHERE Key_name = 'cms_user_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_subscriptions` ADD INDEX cms_user_id ( cms_user_id ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkSubscribersSubscriptionPackageIdColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_subscriptions LIKE 'package_id'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkSubscriptionExpirationDateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomresportal_subscriptions LIKE 'expiration_date'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterExtrasTaxrateCol()
{
    //throw new Exception ( "Editing __jomres_extras table adding tax_rate column");
    $query = "ALTER TABLE `#__jomres_extras` ADD `tax_rate` INT NULL DEFAULT '0' AFTER `price` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_extras tax_rate');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkExtrasTaxrateColExists()
{
    $query = "SHOW COLUMNS FROM #__jomres_extras LIKE 'tax_rate'";
    $result = doSelectSql($query);
    if (count($result) > 0) {
        return true;
    }

    return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertyLatLongToChar12()
{
    $query = 'ALTER TABLE #__jomres_propertys CHANGE `lat` `lat` VARCHAR( 12 ) NULL DEFAULT NULL  ';
    doInsertSql($query, '');
    $query = 'ALTER TABLE #__jomres_propertys CHANGE `long` `long` VARCHAR( 12 ) NULL DEFAULT NULL';
    doInsertSql($query, '');
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterPropertysTimestampCol()
{
    //throw new Exception ( "Editing __jomres_propertys table adding timestamp column");
    $query = 'ALTER TABLE `#__jomres_propertys` ADD `timestamp` DATETIME AFTER `metadescription` ';
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomres_propertys timestamp');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterInvoicesContractuidCol()
{
    throw new Exception('Editing __jomresportal_invoices table adding contract_id column');
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `contract_id` INT NULL DEFAULT '0' AFTER `subscription_id` ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_invoices contract_id');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterInvoicesPropertyuidCol()
{
    //throw new Exception ( "Editing __jomresportal_invoices table adding property_uid column");
    $query = "ALTER TABLE `#__jomresportal_invoices` ADD `property_uid` INT NULL DEFAULT '0' ";
    if (!doInsertSql($query, '')) {
        throw new Exception('Error, unable to add __jomresportal_invoices property_uid');
    }
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function installCronjobs()
{
    //throw new Exception ( "Installing cron jobs<br/>";
    jr_import('jomres_cron');
    $cron = new jomres_cron();
	$cron->addJob('session_files_cleanup', 'D', '');
    $cron->addJob('error_logs_cleanup', 'D', '');
	$cron->addJob('geolocation_cleanup', 'D', '');
	$cron->addJob("api_tokens_cleanup","D","");
	$cron->addJob('version_check', 'D', '');
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function updateMrConfig()
{
    include JOMRESPATH_BASE.'jomres_config.php';
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function updatePluginSettings()
{
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
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function checkIntegrationsEnabledColExists()
{
	$query  = "SHOW COLUMNS FROM #__jomres_webhooks_integrations LIKE 'enabled'";
	$result = doSelectSql( $query );
	if ( !empty( $result ))
		return true;
	return false;
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function alterIntegrationsEnabledCol()
{
	$query = "ALTER TABLE `#__jomres_webhooks_integrations` ADD `enabled` BOOLEAN NOT NULL DEFAULT TRUE AFTER `settings` ";
	doInsertSql( $query, '' );
}
/**
 *
 * @package Jomres\Core\Database
 *
 * Legacy update functions
 *
 **/
function createExtraIndexs()
{
    //throw new Exception ( "Altering tables, creating new indexes if necessary");

    $query = "SHOW INDEX FROM `#__jomres_guest_profile` WHERE Key_name = 'cms_user_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_guest_profile` CHANGE `cms_user_id` `cms_user_id` INT(11) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_guest_profile cms_user_id column');
		}
		
        $query = 'ALTER TABLE `#__jomres_guest_profile` ADD INDEX cms_user_id ( cms_user_id ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_custom_text` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'language' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_custom_text` CHANGE `language` `language` VARCHAR(10) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_custom_text language column');
		}
		
        $query = 'ALTER TABLE `#__jomres_custom_text` ADD INDEX `language` ( `language` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
	
	$query = "SHOW INDEX FROM `#__jomres_custom_text` WHERE Key_name = 'language_context' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_custom_text` CHANGE `language_context` `language_context` VARCHAR(100) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_custom_text language_context column');
		}
		
        $query = 'ALTER TABLE `#__jomres_custom_text` ADD INDEX `language_context` ( `language_context` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomresportal_invoices` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_invoices` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomresportal_lineitems` WHERE Key_name = 'inv_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomresportal_lineitems` ADD INDEX inv_id ( inv_id ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_booking_data_archive` WHERE Key_name = 'contract_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_booking_data_archive` ADD INDEX contract_uid ( contract_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

	$query = "SHOW INDEX FROM `#__jomres_contracts` WHERE Key_name = 'guest_uid' ";
	$indexExists = doSelectSql($query);
	if (count($indexExists) < 1) {
		$query = 'ALTER TABLE `#__jomres_contracts` ADD INDEX guest_uid ( guest_uid ) ';
		if (!doInsertSql($query)) {
			throw new Exception('Failed to run query: '.$query);
		}
	}

    $query = "SHOW INDEX FROM `#__jomcomp_notes` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomcomp_notes` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomcomp_notes` WHERE Key_name = 'contract_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomcomp_notes` ADD INDEX contract_uid ( contract_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_pluginsettings` WHERE Key_name = 'prid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_pluginsettings` ADD INDEX prid ( prid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_regions` WHERE Key_name = 'countrycode' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_regions` ADD INDEX `countrycode` ( `countrycode` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_extras` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_extras` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_guests` WHERE Key_name = 'mos_userid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_guests` CHANGE `mos_userid` `mos_userid` INT(11) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_guests mos_userid column');
		}
		
        $query = 'ALTER TABLE `#__jomres_guests` ADD INDEX mos_userid ( mos_userid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_guests` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_guests` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_pcounter` WHERE Key_name = 'p_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_pcounter` ADD INDEX p_uid ( p_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_town' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_propertys` CHANGE `property_town` `property_town` VARCHAR(100) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_propertys property_town column');
		}
		
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_town` ( `property_town` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_region' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_propertys` CHANGE `property_region` `property_region` VARCHAR(100) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_propertys property_region column');
		}
		
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_region` ( `property_region` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'property_country' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
		$query = "ALTER TABLE `#__jomres_propertys` CHANGE `property_country` `property_country` VARCHAR(100) NULL DEFAULT NULL";
		if (!doInsertSql($query, '')) {
			throw new Exception('Error, unable to alter __jomres_propertys property_country column');
		}
		
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX `property_country` ( `property_country` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'published' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX published ( published ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_propertys` WHERE Key_name = 'ptype_id' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_propertys` ADD INDEX ptype_id ( ptype_id ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rates` WHERE Key_name = 'roomclass_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rates` ADD INDEX roomclass_uid ( roomclass_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rates` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rates` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rooms` WHERE Key_name = 'room_classes_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rooms` ADD INDEX room_classes_uid ( room_classes_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_rooms` WHERE Key_name = 'propertys_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_rooms` ADD INDEX propertys_uid ( propertys_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'room_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX room_uid ( room_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'date' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX `date` ( `date` ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_room_bookings` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_room_bookings` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    $query = "SHOW INDEX FROM `#__jomres_settings` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_settings` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }

    //throw new Exception ( "Altering table __jomres_managers, creating new userid index if necessary");
    $query = "SHOW INDEX FROM `#__jomres_managers` WHERE Key_name = 'userid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_managers` ADD INDEX userid ( userid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
	
	//throw new Exception ( "Altering table __jomres_images, creating new property_uid index if necessary");
    $query = "SHOW INDEX FROM `#__jomres_images` WHERE Key_name = 'property_uid' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_images` ADD INDEX property_uid ( property_uid ) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
	
	//throw new Exception ( "Altering table __jomres_images, creating new resource_type index if necessary");
    $query = "SHOW INDEX FROM `#__jomres_images` WHERE Key_name = 'resource_type' ";
    $indexExists = doSelectSql($query);
    if (count($indexExists) < 1) {
        $query = 'ALTER TABLE `#__jomres_images` ADD INDEX resource_type (resource_type) ';
        if (!doInsertSql($query)) {
            throw new Exception('Failed to run query: '.$query);
        }
    }
}
