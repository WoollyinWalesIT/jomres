<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

$info = phpversion();
$v_arr = explode("-",$info);
$version = (float) $v_arr[0];

if ( $version < 5.2 )
	{
	if (!AUTO_UPGRADE) echo  "Oops, it looks like you're running a version of PHP lower than 5.2. Jomres requires at least PHP5.2 and will not run on earlier versions";
	exit;
	}

define('_JOMRES_INITCHECK', 1 );
define('_JEXEC', 1 );
ini_set("display_errors",1);
ini_set('error_reporting', E_ALL);
if (isset($_REQUEST['autoupgrade']))
	define('AUTO_UPGRADE', true );
else
	define('AUTO_UPGRADE', false );

if (!defined('JRDS'))
	{
	$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
	$isWin32 = strpos($detect_os, "WIN32");
	$IIS = strpos($detect_os, "IIS");
	if (isset($_SERVER["SERVER_SIGNATURE"]))
		{
		$signature = strtoupper($_SERVER["SERVER_SIGNATURE"]);
		$apacheSig = strpos($signature, "APACHE");
		}
	$dir =  dirname(realpath(__FILE__));
	if ( strpos($dir,":\\" ) )
		define("JRDS" , "\\");
	else
		{
		if ( $isWin32 === false  || $apacheSig == true) 
			define("JRDS" , "/");
		else
			define("JRDS" , "\\");
		}
	}

$path =  str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;

define('JOMRESINSTALLPATH_BASE',$path);

if (!file_exists('integration.php') )
	{
	if (!AUTO_UPGRADE) echo  "Error, cannot find the new Jomres integration script, you might not have downloaded Jomres v4 yet.";
	exit;
	}

require_once( 'integration.php' );

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."registry.php") )
	@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."registry.php");
	
	
global $jomres_systemLog_path,$lkey;
$jomres_systemLog_path=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['jomres_systemLog_path'];

if (!AUTO_UPGRADE) showheader();

if ($_GET['forceMigrate'] == '1' )
	{
	migrate();
	}

if (componentsIntegrationExists())
	{
	migrate();
	}

	$folderChecksPassed=true;
	
	if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_pre_installation.php"))
		require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_pre_installation.php");

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."sessions".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."sessions".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."sessions".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
		if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."remote_plugins".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."remote_plugins".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder "."remote_plugins".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-plugins".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-plugins".JRDS)) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder "."core-plugins".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages")) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."rmtypes") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."rmtypes")) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder "."uploadedimages".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS."rmtypes"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."pfeatures") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."pfeatures")) 
			{
			if (!AUTO_UPGRADE) echo  "<h1>Error, unable to make folder "."uploadedimages".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS."pfeatures"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}

if ($folderChecksPassed && ACTION != "Migration") 
	{
	$trashtables=jomresGetParam($_POST,'trashtables',0,'integer');
	$manual_install_confirmation=jomresGetParam($_POST,'manual_install_confirmation',"");
	if (!AUTO_UPGRADE)
		{
		if ($manual_install_confirmation == "install")
			define('ACTION',"Install");
		if ($manual_install_confirmation == "upgrade")
			define('ACTION',"Upgrade");
		}
	else
		{
		$_POST['go'] = "GO!";
		define('ACTION',"Upgrade");
		}
	
	if ($_POST['go'] != "GO!" && $trashtables < 1 )
		{
		if (!AUTO_UPGRADE) showGetKeyInput();
		}
	else
		{
		if ($trashtables == 1)
			 trashTables();
		else
			{
			if (!defined("ACTION") )
				checkPropertyTableExists();

			if (ACTION == "Install")   // Installing
				{
				
				if (!AUTO_UPGRADE) echo  "Creating Jomres tables if they don't already exist.<br>";
				createJomresTables();
				if (!AUTO_UPGRADE) echo  "Inserting sample data<br>";
				insertSampleData();
				if (!AUTO_UPGRADE) echo  "Importing configuration settings to database<br>";
				importSettings(0);
				if (!AUTO_UPGRADE) echo  "Creating images folders<br>";
				copyImages();
				saveKey2db($lkey);
				insertPortalTables();
				//installCronjobs();
				require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_installation.php");
				showCompletedText();
				}
			elseif (ACTION == "Upgrade") // Upgrading
				{
				define('ACTION',"Upgrade");
				jr_import('minicomponent_registry');
				$registry = new minicomponent_registry(true);
				$registry->regenerate_registry();
				if (!AUTO_UPGRADE) echo  "Data already installed, no need to re-create it<br>";
				doTableUpdates();
				require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_upgrade.php");
				showCompletedText();
				}
			track_installation_upgrade();
			updateMrConfig();
			updatePluginSettings();
			installCronjobs();
			}
		}
	}

if (!AUTO_UPGRADE) showfooter();
if (AUTO_UPGRADE) echo "1";


// This function added to help us to understand installation success/failure to see if there are any changes needed to improve the behaviour of the installer. 
// We are only interested in tracking that the installation completed successfully, so there's no need to trigger this on upgrade
function track_installation_upgrade()
	{
	if (ACTION == "Install")
		{
		PiwikTracker::$URL = 'http://analytics.jomres.net/';
		$piwikTracker = new PiwikTracker( $idSite = 2 );
		// Sends Tracker request via http
		$piwikTracker->doTrackGoal($idGoal = 2);
		}
	}

function doTableUpdates()
	{
	if (!checkInvoicesPropertyuidColExists() )
		alterInvoicesPropertyuidCol();
	if (!checkInvoicesContractuidColExists() )
		alterInvoicesContractuidCol();
	createClickatellMessagesTable();
	if (!checkPropertysTimestampColExists() )
		alterPropertysTimestampCol();
	if (!checkCustomTemplatesTimestampColExists() )
		alterCustomTemplatesTimestampCol();
	if (!checkSubscriptionsTablesExist() )
		{
		createSubscriptionsTables();
		jr_import('jomres_cron');
		$cron = new jomres_cron($displayLog);
		$cron->addJob("subscriptions","D","");
		$query = "INSERT INTO #__jomres_site_settings (`value`,`akey`) VALUES ('0','useSubscriptions')";
		//if (!AUTO_UPGRADE) echo  "Setting $key to $val";if (!AUTO_UPGRADE) echo  "<br>";
		}
	alterPropertyLatLongToChar12();
	if (!checkExtrasTaxrateColExists() )
		alterExtrasTaxrateCol();
	if (!checkSubscribersSubscriptionPackageIdColExists() )
		alterSubscribersSubscriptionPackageIdCol();
		
	if (!checkPfeaturesPtypeidColExists() )
		alterPfeaturesPtypeidCol();
	if (!checkContractsInvoiceColExists() )
		alterContractsInvoice();
	if (!checkGuestsDiscountColExists() )
		alterGuestsDiscountCol();
	if (!checkReviewsTablesExist() )
		createReviewsTables();
	if (!checkReviewDetailTableExists() )
		createReviewDetailTable();
	if (!checkBookingdataArchiveTableExists() )
		createBookingdataArchiveTable();
	if (!checkRoomtypePropertytypeXrefTableExists() )
		createRoomtypePropertytypeXrefTable();
	if (!checkPartnerTablesExist() )
		createPartnerTables();
	if (!checkManagerTimezoneColExists() )
		alterManagerTimezoneCol();
	if (!checkManagerSuspendedColExists() )
		alterManagerSuspendedCol();
	if (!checkInvoicesIsCommisionColExists() )
		alterInvoicesIsCommisionCol();
	if (!checkGuestProfileTableExists() )
		createGuestProfileTable();
	if (!checkPropertyUIDInOrphanLineItemsColExists() )
		alterPropertyUIDInOrphanLineItemsCol();
	if (!checkExtraServicesTableExists() )
		createExtraServicesTable();
	if (!checkExtraServicesTaxColExists() )
		alterExtraServicesTaxCol();
		
	if (!checkCouponsBookingValidColsExists() )
		alterCouponsBookingValidCols();
	if (!checkLineitemsInclusiveColExists() )
		alterLineitemsInclusiveCol();
	if (!checkExtrasAutoselectColExists() )
		alterExtrasAutoSelectCol();
	if (!checkPtypesOrderColExists() )
		alterPtypesOrderCol();
	
	if (!checkAccessControlTableExists() )
		createAccessControlTable();
	
	if (_JOMRES_DETECTED_CMS == "joomla15" )
		checkJoomlaComponentsTableInCaseJomresHasBeenUninstalled();
	}

function createAccessControlTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating __jomres_access_control table<br>";
		$query="CREATE TABLE IF NOT EXISTS `#__jomres_access_control` (
		`id` int(11) auto_increment,
		`scriptname` VARCHAR(255),
		`access_level` CHAR(255),
		PRIMARY KEY	(`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error creating table table __jomres_access_control </b><br>";
		}
	}
	
function checkAccessControlTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_access_control') )
			return true;
		}
	return false;
	}
	
function alterPtypesOrderCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_ptypes table adding order column<br>";
	$query = "ALTER TABLE `#__jomres_ptypes` ADD `order` INT NULL DEFAULT '0' AFTER `published`";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_ptypes order</b><br>";
		}
	}

function checkPtypesOrderColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_ptypes LIKE 'order'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

	
function alterExtrasAutoSelectCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_extras table adding auto_select column<br>";
	$query = "ALTER TABLE `#__jomres_extras` ADD `auto_select` INT NULL DEFAULT '0' AFTER `price`";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_extras auto_select</b><br>";
		}
	}

function checkExtrasAutoselectColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_extras LIKE 'auto_select'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}


function checkLineitemsInclusiveColExists()
	{
	$query="SHOW COLUMNS FROM #__jomresportal_lineitems  LIKE 'init_total_inclusive'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterLineitemsInclusiveCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_lineitems table adding init_total_inclusive column<br>";
	$query = "ALTER TABLE `#__jomresportal_lineitems` ADD `init_total_inclusive` float NOT NULL default '0' AFTER `init_total`";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_lineitems init_total_inclusive</b><br>";
		}
	}
	
function checkCouponsBookingValidColsExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_coupons  LIKE 'booking_valid_from'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterCouponsBookingValidCols()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_coupons table adding booking_valid_from column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `booking_valid_from` DATE AFTER rooms_only ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_coupons booking_valid_from</b><br>";
		}

	if (!AUTO_UPGRADE) echo  "Editing __jomres_coupons table adding booking_valid_to column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `booking_valid_to` DATE AFTER booking_valid_from ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_coupons booking_valid_to</b><br>";
		}

	if (!AUTO_UPGRADE) echo  "Editing __jomres_coupons table adding guest_uid column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `guest_uid` INT NULL DEFAULT '0' AFTER booking_valid_to ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_coupons booking_valid_to</b><br>";
		}
	}
	
function checkExtraServicesTaxColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_extraServices  LIKE 'tax_rate_val'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterExtraServicesTaxCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_extraServices table adding tax_rate_val column<br>";
	$query = "ALTER TABLE `#__jomres_extraServices` ADD `tax_rate_val` CHAR (10) DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_extraServices tax_rate_val</b><br>";
		}
	}
	

// An odd one, this. It seems that some upgrades haven't got this table, so we'll add it if needed
function createExtraServicesTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating __jomres_extraServices table<br>";
		$query="CREATE TABLE IF NOT EXISTS `#__jomres_extraServices` (
		`extraservice_uid` int(11) auto_increment,
		`service_description` VARCHAR(255),
		`service_value` VARCHAR(255),
		`contract_uid` VARCHAR(11),
		`property_uid` VARCHAR(11),
		`tax_rate_val` CHAR (10) DEFAULT '0',
		PRIMARY KEY	(`extraservice_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error creating table table __jomres_extraServices </b><br>";
		}
	}
	
function checkExtraServicesTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_extraServices') || strstr($r->$string, '_jomres_extraservices') )
			return true;
		}
	return false;
	}
	

function checkPropertyUIDInOrphanLineItemsColExists()
	{
	$query="SHOW COLUMNS FROM #__jomresportal_orphan_lineitems  LIKE 'property_uid'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterPropertyUIDInOrphanLineItemsCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_orphan_lineitems table adding property_uid column<br>";
	$query = "ALTER TABLE `#__jomresportal_orphan_lineitems` ADD `property_uid` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_orphan_lineitems property_uid</b><br>";
		}
	}

function createGuestProfileTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating _jomres_guest_profile table<br>";
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_guest_profile` (
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
		PRIMARY KEY(id)
		) ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add _jomres_guest_profile table</b><br>";
		}
	}
	
function checkGuestProfileTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_guest_profile') )
			return true;
		}
	return false;
	}
	
function checkInvoicesIsCommisionColExists()
	{
	$query="SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'is_commission'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterInvoicesIsCommisionCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_invoices table adding is_commission column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `is_commission` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_invoices is_commission</b><br>";
		}
	}

function alterManagerSuspendedCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_managers table adding suspended column<br>";
	$query = "ALTER TABLE `#__jomres_managers` ADD `suspended` tinyint( 1 ) default 0 AFTER `apikey` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_managers suspended</b><br>";
		}
	}

function checkManagerSuspendedColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_managers LIKE 'suspended'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
	
	
function createPartnerTables()
	{
	if (!AUTO_UPGRADE) echo  "Creating __jomres_partners table<br>";
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_partners table</b><br>";
		}
	
	if (!AUTO_UPGRADE) echo  "Creating __jomres_partners_discounts table<br>";
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`partner_id` int(11),
	`property_id` int(11),
	`valid_from` date default NULL ,
	`valid_to` date default NULL ,
	`discount` FLOAT NOT NULL DEFAULT '0.00',
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_partners_discounts table</b><br>";
		}
	}	
	
function checkPartnerTablesExist()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_partners') )
			return true;
		}
	return false;
	}
	

function alterManagerTimezoneCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_managers table adding users_timezone column<br>";
	$query = "ALTER TABLE `#__jomres_managers` ADD `users_timezone` CHAR(100) DEFAULT 'Europe/Berlin' AFTER `apikey` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_managers users_timezone</b><br>";
		}
	}

function checkManagerTimezoneColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_managers LIKE 'users_timezone'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function createRoomtypePropertytypeXrefTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating room type/property type xref table<br>";
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_roomtypes_propertytypes_xref table</b><br>";
		}
	}
	
function checkRoomtypePropertytypeXrefTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_roomtypes_propertytypes_xref') )
			return true;
		}
	return false;
	}
		
function createBookingdataArchiveTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating booking data archive tables<br>";
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add _jomres_booking_data_archive table</b><br>";
		}
	}
	
function checkBookingdataArchiveTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_booking_data_archive') )
			return true;
		}
	return false;
	}


function createReviewDetailTable()
	{
	if (!AUTO_UPGRADE) echo  "Creating review detail tables<br>";
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating` int( 11 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add _jomres_reviews_ratings_detail table</b><br>";
		}
	}
	
function checkReviewDetailTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_reviews_ratings_detail') )
			return true;
		}
	return false;
	}
	
function createReviewsTables()
	{
	if (!AUTO_UPGRADE) echo  "Creating reviews tables<br>";
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
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_reviews_ratings table</b><br>";
		}

	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_confirm` (
	`confirm_rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`confirm_user_id` int( 11 ) default NULL ,
	`confirm` tinyint( 1 ) default NULL ,
	`confirm_ip` varchar( 20 ) default NULL ,
	`confirm_date` datetime default NULL ,
	PRIMARY KEY ( `confirm_rating_id` )
	)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_reviews_ratings_confirm table</b><br>";
		}
		
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_reviews_reports table</b><br>";
		}
	}

function checkReviewsTablesExist()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '_jomres_reviews_ratings') )
			return true;
		}
	return false;
	}

	
function checkJoomlaComponentsTableInCaseJomresHasBeenUninstalled()
	{
	require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_installation.php");
	}

function alterGuestsDiscountCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_guests table adding discount column<br>";
	$query = "ALTER TABLE `#__jomres_guests` ADD `discount` INT( 11 ) DEFAULT '0' NOT NULL AFTER `email` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_guests discount</b><br>";
		}
	}

function checkGuestsDiscountColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_guests LIKE 'discount'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
function alterContractsInvoice()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_contracts table adding invoice_uid column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `invoice_uid` INT( 11 ) DEFAULT '0' NOT NULL AFTER `bookedout_timestamp` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_contracts invoice_uid</b><br>";
		}
	}

function checkContractsInvoiceColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'invoice_uid'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
function alterPfeaturesPtypeidCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_hotel_features table adding ptype_id column<br>";
	$query = "ALTER TABLE `#__jomres_hotel_features` ADD `ptype_id` INT( 11 ) DEFAULT '0' NOT NULL AFTER `property_uid` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_subscriptions ptype_id</b><br>";
		}
	}

function checkPfeaturesPtypeidColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_hotel_features LIKE 'ptype_id'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
function alterSubscribersSubscriptionPackageIdCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_subscriptions table adding package_id column<br>";
	$query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `package_id` INT NULL DEFAULT '0' AFTER `gateway_subscription_id` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_subscriptions package_id</b><br>";
		}
	}

function checkSubscribersSubscriptionPackageIdColExists()
	{
	$query="SHOW COLUMNS FROM #__jomresportal_subscriptions LIKE 'package_id'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
	
function alterExtrasTaxrateCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_extras table adding tax_rate column<br>";
	$query = "ALTER TABLE `#__jomres_extras` ADD `tax_rate` INT NULL DEFAULT '0' AFTER `price` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_extras tax_rate</b><br>";
		}
	}

function checkExtrasTaxrateColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_extras LIKE 'tax_rate'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
	
function alterPropertyLatLongToChar12()
	{
	$query="ALTER TABLE #__jomres_propertys CHANGE `lat` `lat` VARCHAR( 12 ) NULL DEFAULT NULL  ";
	doInsertSql($query,'');
	$query="ALTER TABLE #__jomres_propertys CHANGE `long` `long` VARCHAR( 12 ) NULL DEFAULT NULL";
	doInsertSql($query,'');
	}

	
function createSubscriptionsTables()
	{
	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions_packages` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`name` VARCHAR( 100 ),
	`description` VARCHAR( 255 ),
	`published` BOOL NOT NULL DEFAULT '1',
	`frequency` CHAR(1) DEFAULT 'M',
	`trial_period` SMALLINT NOT NULL DEFAULT '0',
	`trial_amount` FLOAT NOT NULL DEFAULT '0.00',
	`full_amount` FLOAT,
	`rooms_limit` int(11) NOT NULL default '0',
	`property_limit` int(11) NOT NULL default '0',
	`tax_code_id` int(11) NOT NULL default '0'
	)";
	doInsertSql($query,"");

	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL default '0',
	`gateway_subscription_id` CHAR( 255 ),
	`package_id` INT NULL DEFAULT '0',
	`name` VARCHAR( 20 ),
	`description` VARCHAR( 255 ),
	`frequency` CHAR(1) DEFAULT 'M',
	`trial_period` SMALLINT NOT NULL DEFAULT '0',
	`trial_amount` FLOAT NOT NULL DEFAULT '0.00',
	`full_amount` FLOAT,
	`rooms_limit` int(11) NOT NULL default '0',
	`property_limit` int(11) NOT NULL default '0',
	`status` SMALLINT NOT NULL DEFAULT '0',
	`raised_date` datetime
	)";
	doInsertSql($query,"");

	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscribers` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL default '0',
	`firstname` VARCHAR( 255 ),
	`surname` VARCHAR( 255 ),
	`address` VARCHAR( 255 ),
	`country` VARCHAR( 255 ),
	`postcode` VARCHAR( 255 )
	)";
	doInsertSql($query,"");
	}

function checkSubscriptionsTablesExist()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomresportal_subscribers') )
			return true;
		}
	return false;
	}

function alterCustomTemplatesTimestampCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_custom_templates table adding last_edited column<br>";
	$query = "ALTER TABLE `#__jomres_custom_templates` ADD `last_edited` DATETIME AFTER `value` ";
	if (!doInsertSql($query,'') )
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_custom_templates last_edited</b><br>";
	}

function checkCustomTemplatesTimestampColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_custom_templates LIKE 'last_edited'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}
	
	
function alterPropertysTimestampCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomres_propertys table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `timestamp` DATETIME AFTER `metadescription` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomres_propertys timestamp</b><br>";
		}
	}


function checkPropertysTimestampColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_propertys LIKE 'timestamp'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
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
	$result=doInsertSql($query,'');
	return $result;
	}

function checkInvoicesContractuidColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'contract_id'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterInvoicesContractuidCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_invoices table adding contract_id column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `contract_id` INT NULL DEFAULT '0' AFTER `subscription_id` ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_invoices contract_id</b><br>";
		}
	}


function checkInvoicesPropertyuidColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomresportal_invoices LIKE 'property_uid'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterInvoicesPropertyuidCol()
	{
	if (!AUTO_UPGRADE) echo  "Editing __jomresportal_invoices table adding property_uid column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `property_uid` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error, unable to add __jomresportal_invoices property_uid</b><br>";
		}
	}
	

function installCronjobs()
	{
	if (!AUTO_UPGRADE) echo  "Installing cron jobs<br/>";
	jr_import('jomres_cron');
	$cron = new jomres_cron();
	$cron->addJob("optimise","D","");
	$cron->addJob("invoice","D","");
	$cron->addJob("exchangerates","D","");
	}

function trashTables()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		//if (!AUTO_UPGRADE) echo  $string;
		//if (!AUTO_UPGRADE) echo  $r->$string."<br>";
		if (strstr($r->$string, 'jomres_') || strstr($r->$string, 'jomcomp_') || strstr($r->$string, 'jomresportal_'))
			{
			$query= "DROP TABLE IF EXISTS ".$r->$string;
			if (!AUTO_UPGRADE) echo  "Dropping table ".$r->$string." <br>";
			if (!doInsertSql($query,'') )
				{
				if (!AUTO_UPGRADE) echo  "<b>Error, unable to drop table ".$r->$string."</b><br>";
				}
			}
		//	return true;
		}
	$query = "DELETE FROM #__components WHERE `option` = 'com_jomres'";
	doInsertSql($query,'');
	
	return false;
	}

function updateMrConfig()
	{
	include('jomres_config.php' );
	$tempConfigArr=$mrConfig;
	$mrConfig=array();
	$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = 0";
	$settingsList=doSelectSql($query);
	if (count($settingsList)>0)
		{
		foreach ($settingsList as $setting)
			{
			$akey=$setting->akey;
			$value=$setting->value;
			$mrConfig[$akey]=$value;
			}
		}
	foreach ($tempConfigArr as $k=>$v)
		{
		if (!array_key_exists($k,$mrConfig) )
			{
			
			$query="INSERT INTO #__jomres_settings (akey,value) VALUES ('".$k."','".$v."')";
			//if (!AUTO_UPGRADE) echo  $query."<br>";
			doInsertSql($query,'');
			}
		}
	}

function updatePluginSettings()
	{
	include('site_config.php' );
	$tempConfigArr=$pluginConfig;
	$pluginConfig=array();
	$query="SELECT plugin,setting,value FROM #__jomres_pluginsettings WHERE prid = 0";
	$settingsList=doSelectSql($query);
	if (count($settingsList)>0)
		{
		foreach ($settingsList as $settings)
			{
			$plugin=$settings->plugin;
			$setting=$settings->setting;
			$value=$settings->value;
			$pluginConfig[$plugin][$setting]=$value;
			}
		}
	foreach ($tempConfigArr as $k=>$v)
		{
		if (!array_key_exists($k,$pluginConfig) )
			{
			foreach ($v as $sett=>$settVal)
				{
				$query="INSERT INTO #__jomres_pluginsettings (prid,plugin,setting,value) VALUES (0,'".$k."','".$sett."','".$settVal."')";
				//if (!AUTO_UPGRADE) echo  $query."<br>";
				doInsertSql($query,'');
				}
			}
		}
	}

function copySiteConfig($adminPath) // Allows us to copy site_config-dist.php to the adminpath, makes it easily writable
	{
	if (!file_exists($adminPath.JRDS."site_config.php") )
		{
		if (is_readable($adminPath.JRDS."site_config-dist.php") )
			{ if (!AUTO_UPGRADE) echo  "It's readable";}
		else
			{ if (!AUTO_UPGRADE) echo  "It's not readable";}
		touch($adminPath.JRDS."site_config.php");
		copy ($adminPath.JRDS."site_config-dist.php",$adminPath.JRDS."site_config.php");
		}
	else
		{
		if (!AUTO_UPGRADE) echo  "It's already here";
		}
	}

function copyImages()
	{
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Access.png', JOMRESINSTALLPATH_BASE.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Disabled_Access.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Disabled_Facilities.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Not_Permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Not_Permitted.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Permitted.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Information.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Information.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Internet.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'facilities_Internet.png');

	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'24hour.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'24hour.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'air_conditioning.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'air_conditioning.png');

	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'airport_nearby.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'airport_nearby.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'allinc.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'allinc.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'baby_friendly.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'baby_friendly.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'xmas_partys.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'xmas_partys.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'world_heritage.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'world_heritage.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wildlife.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wildlife.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wifi.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wifi.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'whalewatching.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'whalewatching.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'weddings.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'weddings.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wc.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'wc.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'walking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'walking.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'visitor_centre.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'visitor_centre.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'valet_parking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'valet_parking.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'tv_in_room.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'tv_in_room.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'toilets.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'toilets.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'tennis.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'tennis.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'telephone.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'telephone.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'sunbed.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'sunbed.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'snorkelling.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'snorkelling.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'smokers_welcome.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'smokers_welcome.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'Skionsite.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'Skionsite.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'shuttle_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'shuttle_service.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'shower_only.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'shower_only.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'scuba.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'scuba.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'scenicviews.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'scenicviews.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'sailing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'sailing.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'room_telephone.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'room_telephone.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'room_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'room_service.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'riding.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'riding.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'restraunt.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'restraunt2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'ranger.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'ranger.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'quietlocation.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'quietlocation.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'pool.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'pool.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'play_area.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'play_area.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'picnic_area.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'picnic_area.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'pets_welcome.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'pets_welcome.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'parking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'parking.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'Ownermanaged.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'Ownermanaged.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'other_accommodation.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'other_accommodation.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'no_smoking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'no_smoking.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'nationaltrust.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'nationaltrust.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'mountain_bike.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'mountain_bike.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'meeting_room.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'meeting_room.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'medicare.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'medicare.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'laundry_service.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'laundry_service.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'language.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'language.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'jacuzzi.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'jacuzzi.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'iron.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'iron.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'internet.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'internet.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'information.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'information.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'info2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'info2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'in_room_teacoffee.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'in_room_teacoffee.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hotel_safe.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hotel_safe.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'honeymoon_friendly.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'honeymoon_friendly.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'historichouses.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'historichouses.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hiking.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hiking.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'helicopterpad.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'helicopterpad.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'haunted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'haunted.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hairdryer.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hairdryer.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hairdresser.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'hairdresser.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gym.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gym.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gym2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gym2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'guided_tours.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'guided_tours.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'groups.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'groups.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'golf.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'golf.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'giftshop.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'giftshop.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gastronomicrestaurant.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gastronomicrestaurant.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gardens.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'gardens.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fridge.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fridge.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fourwd_access.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fourwd_access.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'forrest_nearby.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'forrest_nearby.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fishing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fishing.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fishing2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fishing2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fireplace.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fireplace.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees_pound.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees_pound.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees_euro.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees_euro.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'fees.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'entrance_fees.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'entrance_fees.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'englishheritage.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'englishheritage.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'elevator.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'elevator.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'DVDVideo.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'DVDVideo.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'drinking_water.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'drinking_water.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'dogs_permitted.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_not_permitted.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'dogs_not_permitted.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disco.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disco.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disabled_facilities.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_access.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'disabled_access.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'cycle_paths.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'cycle_paths.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'croquet.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'croquet.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'conference_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'conference_facilities.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'concierge.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'concierge.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'cinema.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'cinema.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'CDplayer.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'CDplayer.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'casino.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'casino.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'caravan.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'caravan.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'car_rental.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'canoeing.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'canoeing.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_fees.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'camping_fees.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_area.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'camping_area.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'campfire.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'campfire.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'board_walk.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'board_walk.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bird_hide.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bird_hide.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'beach.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'beach.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'beach2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'beach2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bbq_facilities.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bbq_facilities.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bath_tub.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bath_tub.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bar.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bar.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bar2.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'bar2.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'balcony.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'balcony.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'zodiacexcursions.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'zodiacexcursions.png');

	// Many thanks jeyjey
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'microwaves.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'microwaves.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'garden.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS.'garden.png');
	
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'double.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'double.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fourposter.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'fourposter.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'single.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'single.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'twin.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'twin.png');

	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'1bedroom.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'1bedroom.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'2bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'2bedrooms.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'3bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'3bedrooms.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'4bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'4bedrooms.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'5bedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'5bedrooms.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'6plusbedrooms.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'6plusbedrooms.png');
	
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_1bivi_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_1bivi_pitch.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_2_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_2_man_tent_pitch.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_3_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_3_man_tent_pitch.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_4_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_4_man_tent_pitch.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_6_man_tent_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_6_man_tent_pitch.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_caravan_pitch.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'camping_caravan_pitch.png');
	
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_hatchback.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_hatchback.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_luxury.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_luxury.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_peoplecarrier.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_peoplecarrier.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_saloon.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_saloon.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental_sportscar.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'car_rental_sportscar.png');
	
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_2_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_2_berth.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_4_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_4_berth.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_6_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_6_berth.png');
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'yacht_8_berth.png', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'rmtypes'.JRDS.'yacht_8_berth.png');
	}


function showCompletedText()
	{
	$fullurl = str_replace("/jomres/install_jomres.php","", $_SERVER['HTTP_REFERER']);
	
	if (strstr(JOMRES_SITEPAGE_URL_ADMIN,$fullurl))  // We'll add this because installing on SA the url is already set, whereas in Joomla it's not. as SA gets live site from the config and uses it
		$fullurl="";
	if (!AUTO_UPGRADE) echo  '<br>Thank you for installing Jomres. You may now go to your CMS\'s administrator area and configure Jomres<br>';
	if (!AUTO_UPGRADE) echo  '<br>Please remember to delete the file <i>install_jomres.php</i> from your jomres folder<br>';
	if (!AUTO_UPGRADE) echo  '<br>If you wish you can go straight to your Jomres install and start editing your property. To enable the property manager functionality log in as "admin" (for Joomla users) or "administrator" (for Standalone users) and go to your site profiles and assign a frontend user as a property manager.<br>';
	if (!AUTO_UPGRADE) echo  '<br><h3>Please remember, to configure your property you need to log into the frontend as the administrator user, you cannot configure propertys via the administrator area.</h3><br>';
	}


function saveKey2db($lkey)
	{
	$lkey = trim($lkey);
	$query="SELECT value FROM #__jomres_settings WHERE property_uid = '0' AND akey = 'jomres_licensekey'";
	$settingsList=doSelectSql($query);
	if (count($settingsList)==0)
		$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('0','jomres_licensekey','$lkey')";
	else
		$query="UPDATE #__jomres_settings SET `value`='".$lkey."' WHERE property_uid = '0' and akey = 'jomres_licensekey'";
	$result=doInsertSql($query,'');
	return $result;
	}

/*
function saveKey($lkey)
	{
	$lkey = trim($lkey);
	//Add code to check if licensekey file is writeable.
	$configfile = JOMRESPATH_BASE.'/media/jomres_licensekey.php';
	if ( strcmp( "Win", _CUR_OS ) == 1 && !is_writable($configfile))
		return false;
	else
		{
		$txt='<?php $license_key ="'.$lkey.'" ?>';
		if ($fp = fopen( $configfile, "w"))
			{
			fputs($fp, $txt, strlen($txt));
			fclose ($fp);
			@chmod ($configfile, 0700);
			return true;
			}
		else
			return false;
		}
	}
*/

function checkPropertyTableExists()
	{
	global $jomresConfig_db,$jomresConfig_dbprefix,$jomresConfig_user;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".get_showtime('db');
	//if (!AUTO_UPGRADE) echo  "Looking for ".get_showtime('dbprefix').'jomres_propertys<br>';
	$nullcounter=0;
	foreach ($result as $r)
		{
		//if (!AUTO_UPGRADE) echo  "Found ".$r->$string."<br/>";
		if (is_null($r->$string))
			$nullcounter++;
		}
	if (count($result) == $nullcounter)
		{
		if (!AUTO_UPGRADE) echo  "Number of tables ".count($result)."<br>";
		if (!AUTO_UPGRADE) echo  "Number of tables that could not be identified ".$nullcounter."<br>";
		showGetInstallUpgradeRequest();
		define('ACTION',"Unknown");
		}
	else
		{
		foreach ($result as $r)
			{
			if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_propertys') )
				{
				//if (!AUTO_UPGRADE) echo  " ".$jomresConfig_dbprefix.'jomres_propertys found. We are upgrading.<br>';
				define('ACTION',"Upgrade");
				}
			}
		define('ACTION',"Install");
		}
	}

/*
function makeAdminPropertyManager()
	{
	$query="INSERT INTO #__jomres_managers
	(`userid`,`username`,`property_uid`,`access_level`,`currentproperty`)
	VALUES
	('62','admin','0','2','1')";
	$result=doInsertSql($query,"");

	if ($result)
		if (!AUTO_UPGRADE) echo  "Inserted admin as manager<br>";
	else
		if (!AUTO_UPGRADE) echo  "Could not create admin as manager<br>";
	if ($result)
		return true;
	else
		return false;
	}
*/

function deleteCurrentLicenseFiles()
	{
	$licensefileDeleted=false;
	$keyfileDeleted=false;
	if (file_exists(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'jomres_licensekey.php') )
		$licensefileDeleted=@unlink(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'jomres_licensekey.php');
	else
		$licensefileDeleted=true;
	//if (!AUTO_UPGRADE) echo  JOMRESPATH_BASE.'/media/key.php';
	if (file_exists(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'key.php') )
		{
		//if (!AUTO_UPGRADE) echo  "Deleting existing key.php<br>";
		$keyfileDeleted=unlink(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'key.php');
		}
	else
		{
		//if (!AUTO_UPGRADE) echo  "File key.php does not exist<br>";
		$keyfileDeleted=true;
		}
	if (!$licensefileDeleted)
		{if (!AUTO_UPGRADE) echo  "Unable to delete license file<br>";}
	if (!$keyfileDeleted)
		{if (!AUTO_UPGRADE) echo  "Unable to delete key file<br>";}

	if ($licensefileDeleted && $keyfileDeleted)
		return true;
	else
		return false;
	}


function createJomresTables()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_access_control` (
		`id` int(11) auto_increment,
		`scriptname` VARCHAR(255),
		`access_level` CHAR(255),
		PRIMARY KEY	(`id`)
		) ";
	doInsertSql($query,"");
	
	
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
		PRIMARY KEY(id)
		)";
	doInsertSql($query,"");
		
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
	doInsertSql($query,"");


	$query="CREATE TABLE IF NOT EXISTS `#__jomres_coupons` (
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
	$result=doInsertSql($query,"");
	if (!$result )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error creating table table __jomres_coupons </b><br>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_fields` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`fieldname` VARCHAR( 255 ) ,
		`default_value` VARCHAR( 255 ) ,
		`description` VARCHAR( 255 ) ,
		`required` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error creating table table __jomres_custom_fields </b><br>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		`last_edited` datetime,
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		{
		if (!AUTO_UPGRADE) echo  "<b>Error creating table table __jomres_custom_templates </b><br>";
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
	doInsertSql($query,"");

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_orphan_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
		`name` varchar(255) ,
		`description` varchar(255) ,
		`init_price` float default '0',
		`init_qty` int(11) default '0',
		`init_discount` float default '0',
		`recur_price` float default '0',
		`recur_qty` int(11) default '0',
		`recur_discount` float default '0',
		`tax_code_id` int(11),
		`property_uid` INT NULL DEFAULT '0',
		PRIMARY KEY  (`id`)
	)";
	doInsertSql($query,"");

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`name` varchar(20),
		`description` varchar(255),
		`init_price` float NOT NULL default '0',
		`init_qty` int(11) NOT NULL default '0',
		`init_discount` float NOT NULL default '0',
		`init_total` float NOT NULL default '0',
		`init_total_inclusive` float NOT NULL default '0',
		`recur_price` float NOT NULL default '0',
		`recur_qty` int(11) NOT NULL default '0',
		`recur_discount` float NOT NULL default '0',
		`recur_total` float NOT NULL default '0',
		`tax_code` char(10),
		`tax_description` char(200),
		`tax_rate` float NOT NULL default '0',
		`inv_id` int(11) NOT NULL COMMENT 'Invoice ID',
		PRIMARY KEY  (`id`)
	)";
	doInsertSql($query,"");

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
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
		PRIMARY KEY  (`id`)
	)";
	doInsertSql($query,"");

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
		`id` int(11) NOT NULL auto_increment,
		`code` char(20),
		`description` varchar(255),
		`rate` float NOT NULL default '0',
		PRIMARY KEY  (`id`)
	)";
	doInsertSql($query,"");

	
	
	$query="
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
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
	
	$query="
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);
	";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
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
	)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
	
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` int(11) AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
	
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` int(11) AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
	
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}
		
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_site_settings` (
		`id` int(11) auto_increment,
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int not null,
		`tariff_id` int not null,
		`roomclass_uid` int not null,
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT,
		`model` INT,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT,
		PRIMARY KEY (`id`)
		)";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_mufavourites` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`my_id` INT,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`contract_uid` INT,
		`note` TEXT,
		`timestamp` datetime,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_customertypes` (
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
		PRIMARY KEY(id)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pcounter` (
		`count` int ,
		`p_uid` int(11) NOT NULL PRIMARY KEY,
		`p_view` int(11)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pluginsettings` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`prid` INT( 11 ),
		`plugin` VARCHAR( 255 ),
		`setting` TEXT NULL,
		`value` VARCHAR( 255 ),
		PRIMARY KEY (`id`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_ptypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`ptype` VARCHAR( 255 ),
		`ptype_desc` VARCHAR( 255 ),
		`published` TINYINT DEFAULT '1',
		`order` INT NULL DEFAULT '0',
		PRIMARY KEY (`id`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_text` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`constant` VARCHAR( 255 ) ,
		`customtext` TEXT NULL,
		`property_uid` INT( 11 ),
		`language` VARCHAR( 255 ),
		`reserved` VARCHAR( 255 ),
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_extras` (
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
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_audit_archive` (
		`uid` int(11) auto_increment,
		`date` date,
		`time` time,
		`owner` int( 11 ),
		`op` VARCHAR(100),
		`args` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_audit` (
		`uid` int(11) auto_increment,
		`date` date,
		`time` time,
		`owner` int( 11 ),
		`op` VARCHAR(100),
		`args` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_settings` (
		`uid` int(11) auto_increment,
		`property_uid` int( 11 ),
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`uid`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_images` (
		`uid` int(11) auto_increment,
		`roomid` int( 11 ),
		`filelocation` text,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	if (!doInsertSql($query))
		{
		if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>";
		}

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_extraServices` (
		`extraservice_uid` int(11) auto_increment,
		`service_description` VARCHAR(255),
		`service_value` VARCHAR(255),
		`contract_uid` VARCHAR(11),
		`property_uid` VARCHAR(11),
		`tax_rate_val` CHAR (10) DEFAULT '0',
		PRIMARY KEY	(`extraservice_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_contracts` (
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
		`smoking` TINYINT DEFAULT '0' NOT NULL,
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
		PRIMARY KEY(`contract_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_rates` (
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
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_guests` (
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
		PRIMARY KEY(guests_uid)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_bookings` (
		`room_bookings_uid` int(11) NOT NULL auto_increment,
		`room_uid` INTEGER NULL,
		`date` VARCHAR(10) NULL,
		`contract_uid` INTEGER NULL,
		`black_booking` BOOL,
		`reception_booking` BOOL NULL,
		`internet_booking` BOOL NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`room_bookings_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_classes` (
		`room_classes_uid` int(11) NOT NULL auto_increment,
		`room_class_abbv` VARCHAR(255) NULL,
		`room_class_full_desc` VARCHAR(255) NULL,
		`image` TEXT NULL,
		`property_uid` VARCHAR(11),
		`srp_only` BOOL,
		PRIMARY KEY(`room_classes_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_rooms` (
		`room_uid` int(11) NOT NULL auto_increment,
		`room_classes_uid` INTEGER,
		`propertys_uid` INTEGER,
		`room_features_uid` VARCHAR(255) NULL,
		`room_name` TEXT NULL,
		`room_number` VARCHAR(255) NULL,
		`room_floor` VARCHAR(10) NULL,
		`room_disabled_access` BOOL NULL,
		`max_people` INTEGER NULL,
		`smoking` BOOL NULL,
		`singleperson_suppliment` DOUBLE DEFAULT '0',
		PRIMARY KEY(`room_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_features` (
		`room_features_uid` int(11) NOT NULL auto_increment,
		`feature_description` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`room_features_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features` (
		`hotel_features_uid` int(11) NOT NULL auto_increment,
		`hotel_feature_abbv` VARCHAR(20) NULL,
		`hotel_feature_full_desc` TEXT NULL,
		`image` text,
		`property_uid` VARCHAR(11),
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		PRIMARY KEY(`hotel_features_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers` (
		`manager_uid` int(11) NOT NULL auto_increment,
		`userid` int(11),
		`username` VARCHAR(255),
		`property_uid` int(11),
		`access_level` int(2),
		`currentproperty` INT( 11 ) DEFAULT '0' NOT NULL,
		`pu` INT( 1 ) DEFAULT '0',
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		`suspended` tinyint( 1 ) default 0,
		`users_timezone` CHAR(100) DEFAULT 'Europe/Berlin',
		PRIMARY KEY	(`manager_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_propertys` (
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
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		`lat` VARCHAR(12) NULL,
		`long` VARCHAR(12) NULL,
		`metatitle` VARCHAR(150),
		`metadescription` VARCHAR(150),
		`timestamp` DATETIME,
		PRIMARY KEY(`propertys_uid`)
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions_packages` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`name` VARCHAR( 100 ),
	`description` VARCHAR( 255 ),
	`published` BOOL NOT NULL DEFAULT '1',
	`frequency` CHAR(1) DEFAULT 'M',
	`trial_period` SMALLINT NOT NULL DEFAULT '0',
	`trial_amount` FLOAT NOT NULL DEFAULT '0.00',
	`full_amount` FLOAT,
	`rooms_limit` int(11) NOT NULL default '0',
	`property_limit` int(11) NOT NULL default '0',
	`tax_code_id` int(11) NOT NULL default '0'
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL default '0',
	`gateway_subscription_id` CHAR( 255 ),
	`package_id` INT NULL DEFAULT '0',
	`name` VARCHAR( 20 ),
	`description` VARCHAR( 255 ),
	`frequency` CHAR(1) DEFAULT 'M',
	`trial_period` SMALLINT NOT NULL DEFAULT '0',
	`trial_amount` FLOAT NOT NULL DEFAULT '0.00',
	`full_amount` FLOAT,
	`rooms_limit` int(11) NOT NULL default '0',
	`property_limit` int(11) NOT NULL default '0',
	`status` SMALLINT NOT NULL DEFAULT '0',
	`raised_date` datetime
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query = "CREATE TABLE IF NOT EXISTS `#__jomresportal_subscribers` (
	`id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`cms_user_id` int(11) NOT NULL default '0',
	`firstname` VARCHAR( 255 ),
	`surname` VARCHAR( 255 ),
	`address` VARCHAR( 255 ),
	`country` VARCHAR( 255 ),
	`postcode` VARCHAR( 255 ) 
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

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
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_confirm` (
	`confirm_rating_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`confirm_user_id` int( 11 ) default NULL ,
	`confirm` tinyint( 1 ) default NULL ,
	`confirm_ip` varchar( 20 ) default NULL ,
	`confirm_date` datetime default NULL ,
	PRIMARY KEY ( `confirm_rating_id` )
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query = "CREATE TABLE IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating`  tinyint( 4 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query = "CREATE TABLE IF NOT EXISTS  `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query = "CREATE TABLE IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`partner_id` int(11),
	`property_id` int(11),
	`valid_from` datetime,
	`valid_to` datetime,
	`discount` FLOAT NOT NULL DEFAULT '0.00',
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	}

function insertSampleData()
		{
		global $jomresConfig_mailfrom;
		$today = date("Y/m/d");
		$date_elements= explode("/",$today);
		$unixTomorrowsDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+1,$date_elements[0]);
		$gmtTomorrowsDate = date("Y/m/d", $unixTomorrowsDate);
		$tomorrow = $gmtTomorrowsDate;

		$result=doInsertSql("delete FROM `#__jomres_pluginsettings`","");


		$result=doInsertSql("delete FROM `#__jomres_ptypes`","");


		$result=doInsertSql("delete FROM `#__jomres_custom_text`","");


		$result=doInsertSql("delete FROM `#__jomres_extras`","");


		$result=doInsertSql("delete FROM `#__jomres_audit_archive`","");


		$result=doInsertSql("delete FROM `#__jomres_audit`","");


		$result=doInsertSql("delete FROM `#__jomres_settings`","");


		$result=doInsertSql("delete FROM `#__jomres_room_images`","");

		
		$result=doInsertSql("delete FROM `#__jomres_extraServices`","");


		$result=doInsertSql("delete FROM `#__jomres_contracts`","");



		$result=doInsertSql("delete FROM `#__jomres_rates`","");

		$result=doInsertSql("delete FROM `#__jomresportal_c_rates`","");

		$result=doInsertSql("delete FROM `#__jomres_guests`","");


		$result=doInsertSql("delete FROM `#__jomres_room_bookings`","");


		$result=doInsertSql("delete FROM `#__jomres_room_classes`","");


		$result=doInsertSql("delete FROM `#__jomres_rooms`","");


		$result=doInsertSql("delete FROM `#__jomres_room_features`","");


		$result=doInsertSql("delete FROM `#__jomres_hotel_features`","");


		$result=doInsertSql("delete FROM `#__jomres_propertys`","");

		$result=doInsertSql("INSERT INTO `#__jomresportal_c_rates` VALUES (1,'default',2,10,'GBP','2009-05-04 13:07:51',0,'0000-00-00 00:00:00')","");

		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` (`hotel_features_uid`, `hotel_feature_abbv`, `hotel_feature_full_desc`, `image`, `property_uid`, `ptype_id`) VALUES
			(3, 'Airport', 'Close to the airport', 'jomres/uploadedimages/pfeatures/airport_nearby.png', '0', 0),
			(4, 'Minibar', 'Minibar in room', 'jomres/uploadedimages/pfeatures/air_conditioning.png', '0', 1),
			(5, 'All Inclusive', 'All inclusive rates available', 'jomres/uploadedimages/pfeatures/allinc.png', '0', 0),
			(6, 'Family Friendly', 'Children Welcome', 'jomres/uploadedimages/pfeatures/baby_friendly.png', '0', 1),
			(7, 'Balcony', 'Some rooms have balconies', 'jomres/uploadedimages/pfeatures/balcony.png', '0', 1),
			(8, 'Waiter', 'Waiter Service', 'jomres/uploadedimages/pfeatures/bar.png', '0', 1),
			(9, 'Bar', 'Licensed bar on premises', 'jomres/uploadedimages/pfeatures/bar2.png', '0', 1),
			(10, 'Bath', 'Bath in every room', 'jomres/uploadedimages/pfeatures/bath_tub.png', '0', 1),
			(11, 'Fireplace', 'Enjoy the ambiance of a natural fire', 'jomres/uploadedimages/pfeatures/bbq_facilities.png', '0', 1),
			(12, 'Beach', 'Close to the beach', 'jomres/uploadedimages/pfeatures/beach.png', '0', 0),
			(13, 'Birdwatching', 'Bird hide onsite or nearby', 'jomres/uploadedimages/pfeatures/bird_hide.png', '0', 0),
			(14, 'Boardwalk', 'Boardwalk on site', 'jomres/uploadedimages/pfeatures/board_walk.png', '0', 4),
			(15, 'Campfires', 'Campfires allowed', 'jomres/uploadedimages/pfeatures/campfire.png', '0', 4),
			(16, 'Tents', 'Tents for hire', 'jomres/uploadedimages/pfeatures/camping_fees.png', '0', 4),
			(17, 'Canoeing', 'Canoeing/Kayaking', 'jomres/uploadedimages/pfeatures/canoeing.png', '0', 0),
			(18, 'Caravans', 'Caravanning facilities', 'jomres/uploadedimages/pfeatures/caravan.png', '0', 4),
			(19, 'Car rental', 'Car rental can be arranged', 'jomres/uploadedimages/pfeatures/car_rental.png', '0', 1),
			(20, 'Casino', 'Casino on premesis', 'jomres/uploadedimages/pfeatures/casino.png', '0', 1),
			(21, 'Clubbing', 'Nightclub onsite or nearby', 'jomres/uploadedimages/pfeatures/CDplayer.png', '0', 1),
			(22, 'Safe', 'Safe available', 'jomres/uploadedimages/pfeatures/hotel_safe.png', '0', 1),
			(23, 'Conference', 'Conference facilities', 'jomres/uploadedimages/pfeatures/conference_facilities.png', '0', 1),
			(24, 'Cycle path', 'Cycle paths nearby', 'jomres/uploadedimages/pfeatures/cycle_paths.png', '0', 0),
			(25, 'Disabled access', 'Disabled facilites available', 'jomres/uploadedimages/pfeatures/disabled_access.png', '0', 1),
			(26, 'Disabled toilet faci', 'Disabled WC available', 'jomres/uploadedimages/pfeatures/disabled_facilities.png', '0', 0),
			(27, 'No dogs', 'Dogs not welcome', 'jomres/uploadedimages/pfeatures/dogs_not_permitted.png', '0', 0),
			(28, 'Dogs welcome', 'Dog friendly ', 'jomres/uploadedimages/pfeatures/dogs_permitted.png', '0', 0),
			(29, 'DVD', 'Rooms have DVD players', 'jomres/uploadedimages/pfeatures/DVDVideo.png', '0', 1),
			(30, 'Elevator', 'Elevator', 'jomres/uploadedimages/pfeatures/elevator.png', '0', 1),
			(31, 'English Heritage', 'English Heritage sites nearby', 'jomres/uploadedimages/pfeatures/englishheritage.png', '0', 0),
			(32, '24hr service', '24hr Room service', 'jomres/uploadedimages/pfeatures/24hour.png', '0', 1),
			(33, 'Bureau de change', 'Bureau de change available onsite', 'jomres/uploadedimages/pfeatures/fees.png', '0', 1),
			(34, 'Bureau de change', 'Bureau de change available onsite', 'jomres/uploadedimages/pfeatures/fees_euro.png', '0', 1),
			(35, 'Bureau de change', 'Bureau de change available onsite', 'jomres/uploadedimages/pfeatures/fees_pound.png', '0', 1),
			(36, 'Fishing', 'Fishing available onsite or nearby', 'jomres/uploadedimages/pfeatures/fishing.png', '0', 0),
			(37, 'Gourmet Restaurant', 'Gourmet Restraunt onsite', 'jomres/uploadedimages/pfeatures/gastronomicrestaurant.png', '0', 1),
			(38, 'Golf', 'Golf course on site or nearby', 'jomres/uploadedimages/pfeatures/golf.png', '0', 0),
			(39, 'Tours', 'Tours depart from this location', 'jomres/uploadedimages/pfeatures/guided_tours.png', '0', 0),
			(40, 'Gym', 'Gymnasium onsite', 'jomres/uploadedimages/pfeatures/gym2.png', '0', 1),
			(41, 'Hairdresser', 'Hairdresser onsite', 'jomres/uploadedimages/pfeatures/hairdresser.png', '0', 1),
			(42, 'Hairdryer', 'Hair dryer in every room', 'jomres/uploadedimages/pfeatures/hairdryer.png', '0', 1),
			(43, 'Haunted', 'Ghoulies and Ghosties in the rafters', 'jomres/uploadedimages/pfeatures/haunted.png', '0', 0),
			(44, 'Helipad', 'Helicopter pad', 'jomres/uploadedimages/pfeatures/helicopterpad.png', '0', 1),
			(45, 'Hiking', 'Popular hiking area', 'jomres/uploadedimages/pfeatures/hiking.png', '0', 0),
			(46, 'Information', 'Information services available onsite', 'jomres/uploadedimages/pfeatures/info2.png', '0', 0),
			(47, 'WWW', 'Internet access available', 'jomres/uploadedimages/pfeatures/internet.png', '0', 1),
			(48, 'Beverages', 'Beverages in all rooms', 'jomres/uploadedimages/pfeatures/in_room_teacoffee.png', '0', 1),
			(49, 'Iron', 'Iron in every room', 'jomres/uploadedimages/pfeatures/iron.png', '0', 1),
			(50, 'Jacuzzi', 'Jacuzzi onsite', 'jomres/uploadedimages/pfeatures/jacuzzi.png', '0', 1),
			(51, 'National Trust', 'National Trust', 'jomres/uploadedimages/pfeatures/nationaltrust.png', '0', 0),
			(52, 'No smoking', 'Smoke free establishment', 'jomres/uploadedimages/pfeatures/no_smoking.png', '0', 0),
			(53, 'Owner managed', 'Owner managed property', 'jomres/uploadedimages/pfeatures/Ownermanaged.png', '0', 0),
			(54, 'Parking', 'Parking available', 'jomres/uploadedimages/pfeatures/parking.png', '0', 1),
			(55, 'Pets welcome', 'Pet friendly', 'jomres/uploadedimages/pfeatures/pets_welcome.png', '0', 0),
			(56, 'Picnic area', 'Picnicers welcome', 'jomres/uploadedimages/pfeatures/picnic_area.png', '0', 0),
			(57, 'Play area', 'Children''s play area onsite', 'jomres/uploadedimages/pfeatures/play_area.png', '0', 0),
			(58, 'Pool', 'Swiming', 'jomres/uploadedimages/pfeatures/pool.png', '0', 0),
			(59, 'Quiet/Rural ', 'Property is in a quiet and/or rural location', 'jomres/uploadedimages/pfeatures/quietlocation.png', '0', 0),
			(60, 'Ranger', 'Ranger station here', 'jomres/uploadedimages/pfeatures/ranger.png', '0', 0),
			(61, 'Restaurant', 'Restraunt onsite', 'jomres/uploadedimages/pfeatures/restraunt2.png', '0', 1),
			(62, 'Pony Trekking', 'Pony trekking onsite or nearby', 'jomres/uploadedimages/pfeatures/riding.png', '0', 0),
			(63, 'Telephone', 'Telephone in every room', 'jomres/uploadedimages/pfeatures/room_telephone.png', '0', 1),
			(64, 'Water sports', 'Water sport facilities onsite or nearby', 'jomres/uploadedimages/pfeatures/sailing.png', '0', 0),
			(65, 'Scuba', 'Scuba diving arranged', 'jomres/uploadedimages/pfeatures/scuba.png', '0', 0),
			(66, 'Scenic views', 'Scenic views ', 'jomres/uploadedimages/pfeatures/scenicviews.png', '0', 0),
			(67, 'Showers', 'showers in every room', 'jomres/uploadedimages/pfeatures/shower_only.png', '0', 1),
			(68, 'Shuttle', 'Shuttle service to airport and nightclub district available', 'jomres/uploadedimages/pfeatures/shuttle_service.png', '0', 1),
			(69, 'Winter Sports', 'Winter Sports facilities available', 'jomres/uploadedimages/pfeatures/Skionsite.png', '0', 1),
			(70, 'Smoking', 'Smokers welcome', 'jomres/uploadedimages/pfeatures/smokers_welcome.png', '0', 0),
			(71, 'Snorkelling', 'Snorkelling suitable here', 'jomres/uploadedimages/pfeatures/snorkelling.png', '0', 0),
			(72, 'Sunbed', 'Sunbed onsite', 'jomres/uploadedimages/pfeatures/sunbed.png', '0', 1),
			(73, 'Tennis courts', 'Tennis court onsite or nearby', 'jomres/uploadedimages/pfeatures/tennis.png', '0', 0),
			(74, 'Television', 'Television in every room', 'jomres/uploadedimages/pfeatures/tv_in_room.png', '0', 1),
			(75, 'Weddings', 'Weddings catered for', 'jomres/uploadedimages/pfeatures/weddings.png', '0', 1),
			(76, 'Whales', 'Whale watching', 'jomres/uploadedimages/pfeatures/whalewatching.png', '0', 0),
			(77, 'Wifi', 'Wifi available', 'jomres/uploadedimages/pfeatures/wifi.png', '0', 1),
			(78, 'Christmas', 'Christmas parties catered for', 'jomres/uploadedimages/pfeatures/xmas_partys.png', '0', 1),
			(79, 'Zodiac Excursions', 'Zodiac excursions can be arranged from these premesis', 'jomres/uploadedimages/pfeatures/zodiacexcursions.png', '0', 0),
			(80, 'Private Garden', 'Private garden for your enjoyment', 'jomres/uploadedimages/pfeatures/garden.png', '0', 0),
			(81, 'Microwave', 'Property has a microwave that can be used by the residents', 'jomres/uploadedimages/pfeatures/microwaves.png', '0', 1);"
			);

		$result=doInsertSql("INSERT INTO `#__jomres_propertys` (
			`propertys_uid` ,`property_name` , `property_street` , `property_town` ,
			`property_region`,`property_country`,`property_postcode` , `property_tel` , `property_fax` , `property_email` , `property_features`,
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
			`ptype_id`
			 )
			VALUES
			( '1', 'Fawlty Towers', 'Asheldon Rd', 'Torquay',
			'Devon','GB', 'TQ1 2QS', '01000 123456', '01000 654321', '$jomresConfig_mailfrom', ',1,2,',
			'http://www.map24.com',
			'My property description',
			'Any time from 2pm onwards',
			'Surfing, rock climbing, fishing & lazing in the sun.',
			'Second star to the right and straight on till morning.',
			'None for miles and miles and miles.',
			'Local buses once a day, taxis and if you\'re lucky a donkey.',
			'Requests for bed type and smoking preferences will be submitted to the hotel but are not guaranteed.',
			'1','3','1'
			)","");


			$result=doInsertSql("INSERT INTO `#__jomres_room_features` ( `room_features_uid` , `feature_description`,`property_uid` )VALUES ('1', 'En-suite Bathroom','1'), ('2', 'Tea & Coffee Making facilities','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` (`room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image`, `property_uid`, `srp_only`) VALUES
			(1, 'Room Double beds', '', 'jomres/uploadedimages/rmtypes/double.png', '0', 0),
			(2, 'Room Twin beds', '', 'jomres/uploadedimages/rmtypes/twin.png', '0', 0),
			(3, 'Room Single', '', 'jomres/uploadedimages/rmtypes/single.png', '0', 0),
			(4, 'Room 4 Poster bed', '', 'jomres/uploadedimages/rmtypes/fourposter.png', '0', 0),
			(5, '1 Bedroom', '', 'jomres/uploadedimages/rmtypes/1bedroom.png', '0', 1),
			(6, '2 Bedrooms', '', 'jomres/uploadedimages/rmtypes/2bedrooms.png', '0', 1),
			(7, '3 Bedrooms', '', 'jomres/uploadedimages/rmtypes/3bedrooms.png', '0', 1),
			(8, '4 Bedrooms', '', 'jomres/uploadedimages/rmtypes/4bedrooms.png', '0', 1),
			(9, '5 Bedrooms', '', 'jomres/uploadedimages/rmtypes/5bedrooms.png', '0', 1),
			(10, '6+ Bedrooms', '', 'jomres/uploadedimages/rmtypes/6plusbedrooms.png', '0', 1),
			(11, 'Tent pitch 1 person ', '', 'jomres/uploadedimages/rmtypes/camping_1bivi_pitch.png', '0', 0),
			(12, 'Tent pitch 2 person ', '', 'jomres/uploadedimages/rmtypes/camping_2_man_tent_pitch.png', '0', 0),
			(13, 'Tent pitch 3 person ', '', 'jomres/uploadedimages/rmtypes/camping_3_man_tent_pitch.png', '0', 0),
			(14, 'Tent pitch 4 person ', '', 'jomres/uploadedimages/rmtypes/camping_4_man_tent_pitch.png', '0', 0),
			(15, 'Tent pitch 6+ person', '', 'jomres/uploadedimages/rmtypes/camping_6_man_tent_pitch.png', '0', 0),
			(16, 'Car rental Hatchback', '', 'jomres/uploadedimages/rmtypes/car_rental_hatchback.png', '0', 0),
			(17, 'Car rental Luxury', '', 'jomres/uploadedimages/rmtypes/car_rental_luxury.png', '0', 0),
			(18, 'Car rental People Ca', '', 'jomres/uploadedimages/rmtypes/car_rental_peoplecarrier.png', '0', 0),
			(19, 'Car rental Saloon', '', 'jomres/uploadedimages/rmtypes/car_rental_saloon.png', '0', 0),
			(20, 'Car rental Sportscar', '', 'jomres/uploadedimages/rmtypes/car_rental_sportscar.png', '0', 0),
			(21, 'Tent pitch Caravan', '', 'jomres/uploadedimages/rmtypes/camping_caravan_pitch.png', '0', 0),
			(22, 'Yacht 2 berth', '', 'jomres/uploadedimages/rmtypes/yacht_2_berth.png', '0', 0),
			(23, 'Yacht 4 berth', '', 'jomres/uploadedimages/rmtypes/yacht_4_berth.png', '0', 0),
			(24, 'Yacht 6 berth', '', 'jomres/uploadedimages/rmtypes/yacht_6_berth.png', '0', 0),
			(25, 'Yacht 8+ berth', '', 'jomres/uploadedimages/rmtypes/yacht_8_berth.png', '0', 0)
			");
		
		
		
		// Hotel/Village cross reference
		$result=doInsertSql("INSERT INTO `#__jomres_roomtypes_propertytypes_xref` (`id`, `roomtype_id`, `propertytype_id`) VALUES
			(1, 4, 1),
			(2, 1, 1),
			(3, 3, 1),
			(4, 2, 1),
			(5, 5, 7),
			(6, 6, 7),
			(7, 7, 7),
			(8, 8, 7),
			(9, 9, 7),
			(10, 10, 7),
			(11, 5, 12),
			(12, 6, 12),
			(13, 7, 12),
			(14, 8, 12),
			(15, 9, 12),
			(16, 10, 1),
			(23, 16, 3),
			(24, 17, 3),
			(25, 18, 3),
			(26, 19, 3),
			(27, 20, 3),
			(28, 11, 4),
			(29, 12, 4),
			(30, 13, 4),
			(31, 14, 4),
			(32, 15, 4),
			(33, 21, 4),
			(34, 22, 2),
			(35, 23, 2),
			(36, 24, 2),
			(37, 25, 2),
			(38, 4, 6),
			(39, 1, 6),
			(40, 3, 6),
			(41, 2, 6),
			(42, 5, 8),
			(43, 6, 8),
			(44, 7, 8),
			(45, 8, 8),
			(46, 9, 8),
			(47, 10, 8),
			(48, 5, 9),
			(49, 6, 9),
			(50, 7, 9),
			(51, 8, 9),
			(52, 9, 9),
			(53, 10, 9),
			(54, 16, 10),
			(55, 17, 10),
			(56, 18, 10),
			(57, 19, 10),
			(58, 20, 10),
			(59, 22, 11),
			(60, 23, 11),
			(61, 24, 11),
			(62, 25, 11)
			;"
			);

		//$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`property_uid`,`image` )VALUES ('3', 'D/B', 'Double Bed','0','/jomres/uploadedimages/rmtypes/double.png'), ('4', 'T/B', 'Twin Beds','0','/jomres/uploadedimages/rmtypes/twin.png')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('1', '3', '1', '1,2', 'The Pitt', '11', '1', '0', '2','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('2', '3', '1', '1,2', 'The hole', '21', '2', '0', '4','0')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('1', 'Low season 2004', '2004/10/01', '2005/04/30', '25', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('2', 'High season 2005', '2005/05/01', '2005/09/31', '100', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('3', 'Low season 2005', '2005/10/01', '2006/04/30', '30', '1', '1000', '1', '4','3','0','1','1','1')","");


			$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('4', 'High season 2006', '2006/05/01', '2009/09/31', '110', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_guests` ( `guests_uid` , `contracts_contract_uid` , `mos_userid` , `firstname` , `surname` , `house` , `street` , `town` , `county`,`postcode` , `tel_landline` , `tel_mobile` , `tel_fax` , `preferences` , `car_regno` , `ccard_no` , `ccard_issued` , `ccard_expiry` , `ccard_iss_no` , `ccard_name`,`property_uid`,`email` )VALUES ('1', '0', NULL , 'Major', 'Gowen', 'Watery Fowls', 'a Street', 'a Region','a Town','XXNN NXX', '01000 123456', '01777 123456', '01000 654321','A newspaper with uptodate cricket scores', '', '' , '', '','','','1','example@example.com')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('1', 'Hotel', 'propertyrental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('2', 'Yacht Brokerage (EDIT THIS OUT -> yachts as rooms/resource types OR DELETE THIS TYPE ALTOGETHER)', 'yachtbrokerage', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('3', 'Vehicle Rental (EDIT THIS OUT -> cars as rooms/resource types OR DELETE THIS TYPE ALTOGETHER)', 'vehiclerental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('4', 'Camp Site', 'campsite', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('5', 'Tours', 'tours', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('6', 'B&B', 'propertyrental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('7', 'Villa', 'propertyrental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('8', 'Cottage', 'propertyrental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('9', 'Apartment', 'propertyrental', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('10', 'Car (EDIT THIS OUT -> cars as properties/businesses OR DELETE THIS TYPE ALTOGETHER)', 'car', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('11', 'Yacht (EDIT THIS OUT -> yachts as properties/businesses OR DELETE THIS TYPE ALTOGETHER)', 'yacht', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('12', 'For sale', 'propertyrental', '1')","");

		$query="INSERT INTO `#__jomresportal_taxrates` (`id`, `code`, `description`, `rate`) VALUES (1, '01', 'VAT', 17.5)";
		doInsertSql($query,"");
		}


function checkIfNewIndexRequired()
	{
	$searchString="KEY `property_uid`";
	$query="SHOW CREATE TABLE #__jomres_custom_text";
	$result=doSelectSql($query,2);
	$str=$result["Create Table"];
	if (stristr($str,$searchString) )
		return false;
	return true;
	}

function createExtraIndexs()
	{
	if (!AUTO_UPGRADE) echo  "Altering tables, creating new indexs<br>";
	$query="ALTER TABLE `#__jomres_custom_text` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_extras` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_guests` ADD INDEX ( `mos_userid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_guests` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_pcounter` ADD INDEX ( `p_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_town` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_region` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_country` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `published` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `ptype_id` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_rates` ADD INDEX ( `roomclass_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_rates` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_rooms` ADD INDEX ( `room_classes_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_rooms` ADD INDEX ( `propertys_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `room_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `date` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="ALTER TABLE `#__jomres_settings` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	//$query="ALTER TABLE `#__jomres_tmpbooking` ADD INDEX ( `tag` ) ";
	//if (!doInsertSql($query,'') )
	//	if (!AUTO_UPGRADE) echo  "<b>Error, couldn't alter table __jomres_tmpbooking to add index tag </b><br>";

	}


function showGetInstallUpgradeRequest()
	{
	global $lkey;
	?>
	<form action="" method="post" name="adminForm">

	<h3><font="red">Cannot identify existing tables therefore cannot determine auotmatically if we are installing or upgrading. Please advise:<br></font></h3>
	<div align="center"><br>
	<input type="radio" name="manual_install_confirmation" value="install"> This is a new installation of Jomres<br>
	<input type="radio" name="manual_install_confirmation" value="upgrade" checked>This is an upgrade of an existing Jomres installation<br>
	</div>
	<input type="hidden" type="text" name="lkey" value="<?php if (!AUTO_UPGRADE) echo  $lkey; ?>"/>
	<input type="hidden" name="option" value="com_jomres" />
	<input type="hidden" name="task" value="saveLicenseKey" />
	<input type="submit" value="Continue" class="button" >
	</form>
	<?php
	}

function showGetKeyInput()
	{
	$mrConfig=getPropertySpecificSettings();
	?>
	<form action="" method="post" name="adminForm">

	<h3><font="red">Press the GO button when you are ready to proceed with installation/upgrade<br></font></h3>
	<input type="submit" name="go" value="GO!" class="button" >
	</form>
	<hr>

	<form action="" method="post" name="adminForm">
	<h3><font="red">Remove Jomres tables<br></font></h3>
	<input type="hidden" name="option" value="com_jomres" />
	<input type="hidden" name="trashtables" value="1" />
	<input type="submit" value="Remove Jomres Tables" class="button" >
	</form>
	<font="red">Please, do not use this button unless you're sure you want to remove all your current Jomres tables. <br></font>
	<h4><font="red">This action is only recoverable by restoring a database backup. <br></font></h4>
	<br>
	<?php
	}

/*
function upgradeWarning()
	{
	?>
	<br><font color="red">As of version 2.7 Jomres has new code for managing tariffs that should make rooms/tariff configuration for new users much easier however it is by it's nature destructive, so if you already have tariffs configured (anything pre-Jomres 2.6.3RC1) before you do anything else you <b>are strongly advised to edit /components/com_jomres/jomres_config.php now and change the variable $mrConfig['tariffmode'] to "1"</b>. This will set your default rooms/tariff configuration methods to the method that you previously employed. Failing to make this change may severely damage your existing tariff configuration. If your first installation was from version 2.7 you do not need to do this. <br><br>
	Also note that due to the addition of the Extras models into the core code, if you are upgrading from below 2.7 you'll need to edit your optional extras to normalise them against the new tables (just go into each extra and click Save).
	</font><br><br><br>
	<?php
	}
*/

function showheader()
	{
	?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Jomres installation</title>
	<style type="text/css">
	<!--
	.pagebackground {
		background-color: #FF0000;
		text-align: center;
		position: relative;
		background-position: center center;
	}
	.connectivitybackground {
		background-color: #FFff00;
		text-align: center;
		position: relative;
		background-position: center center;
	}
	.panel {
		background-color: #FFFFFF;
		border: #FF0000;
		background-position: center center;
	}
	-->
	</style>
	<div class="pagebackground">
		<p align="center">&nbsp;</p>
	<div class= "panel">

		<p><img src="images/jrlogo.png" width="287" height="70"></p>
		<p><h1>Jomres installation</h1></p>
		<p>&nbsp;</p>
	<?php
	}

function showfooter()
	{
	?>
	</div>
	<p>&nbsp;</p>
	</div>
	</body>
	</html>
	<?php
	checkPropertyTableExists();
	if (!defined("ACTION") && ACTION != "Upgrade" )
		{
		echo '<center>
		<iframe frameborder="no" width="800px" height="300px" src="http://analytics.jomres.net/index.php?module=CoreAdminHome&action=optOut&language=en"></iframe>
		<br/>
		</center>';
		}
	}

function insertPortalTables()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT,
		`model` INT,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT,
	PRIMARY KEY (`id`)
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`property_uid` int,
	PRIMARY KEY (`id`)
	)";
		if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int,
		`tariff_id` int,
		`roomclass_uid` int,
		`property_uid` int,
	PRIMARY KEY (`id`)
	)";
		if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
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
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	}
	
///////////////////////////////////////////////////////////////////////////////////////////// Migratiion //////////////////////////////////////////////////////////////

function migrate()
	{
	if (!defined('ACTION') )
		define('ACTION',"Migration");
	if (basicTemplatesExist())
		{
		exit;
		}

	if (!AUTO_UPGRADE) echo  "<b>Migration under way. Once completed, please check for any errors and if everything looks ok you can go to your administrator area.</b><br/> Remember that this migrator will not import any of your remote plugins as all the plugins need to be checked before they can be passed as working in v4. If you have any Jomres modules installed you must uninstall them using the Joomla extension manager (back up any copies of srch.html you may have customised before doing this) then use the Jomres Plugin manager to install updated versions of those modules.<br/><br/>";
	define(OLD_IMAGES_PATH,JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS);
	define(NEW_IMAGES_PATH,JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);

	define(OLD_ROOMTYPES_IMAGES_PATH,'images/stories/jomres/rmtypes/');
	define(NEW_ROOMTYPES_IMAGES_PATH,'jomres/uploadedimages/rmtypes/');
	define(OLD_PROPERTYFEATURE_IMAGES_PATH,'images/stories/jomres/pfeatures/');
	define(NEW_PROPERTYFEATURE_IMAGES_PATH,'jomres/uploadedimages/pfeatures/');
	
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
	$query = "SELECT rates_uid,validfrom,validto FROM #__jomres_rates";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $rate)
			{
			$validfrom_ts=str_replace("/","-",$rate->validfrom);
			$validto_ts=str_replace("/","-",$rate->validto);
			$uid = (int)$rate->rates_uid;
			$query = "UPDATE #__jomres_rates SET 
					`validfrom_ts`='$validfrom_ts',
					`validto_ts`='$validto_ts' 
					WHERE rates_uid='".(int)$uid."'";
			if (!doInsertSql($query,'') )
				if (!AUTO_UPGRADE) echo  "<b>Error, unable to run query $query</b><br>";
			}
		}
	}
	
function componentsIntegrationExists()
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'integration.php') )
		{
		return true;
		}
	return false;
	}


function updateRoomTypeImagePaths()
	{
	if (!AUTO_UPGRADE) echo  "Updating room type image paths in the __jomres_room_classes table.";if (!AUTO_UPGRADE) echo  "<br>";
	$query = "SELECT * FROM #__jomres_room_classes";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $room_class)
			{
			$explodedPath = explode("/",$room_class->image);
			$ndx = count($explodedPath)-1;
			$fileName = $explodedPath[$ndx];
			$query = "UPDATE #__jomres_room_classes SET `image` = '".NEW_ROOMTYPES_IMAGES_PATH.$fileName."' WHERE `room_classes_uid`=". $room_class->room_classes_uid;
			//if (!AUTO_UPGRADE) echo  $query."<br/>";
			if (!doInsertSql($query,'') )
				if (!AUTO_UPGRADE) echo  "<b>Error, unable to run query $query</b><br>";
			}
		}
	}

function updatePropertyFeaturePaths()
	{
	if (!AUTO_UPGRADE) echo  "Updating property feature image paths in the __jomres_hotel_features table.";if (!AUTO_UPGRADE) echo  "<br>";
	$query = "SELECT * FROM #__jomres_hotel_features";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		foreach ($result as $hotel_feature)
			{
			$explodedPath = explode("/",$hotel_feature->image);
			$ndx = count($explodedPath)-1;
			$fileName = $explodedPath[$ndx];
			$query = "UPDATE #__jomres_hotel_features SET `image` = '".NEW_PROPERTYFEATURE_IMAGES_PATH.$fileName."' WHERE `hotel_features_uid`=". $hotel_feature->hotel_features_uid;
			if (!doInsertSql($query))
				{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
			}
		}
	}
	
	



function basicTemplatesExist()
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomcompbasictemplates'.JRDS.'j00001start.class.php') )
		{
		if (!AUTO_UPGRADE) echo  "Sorry, before we can upgrade you must first uninstall the basic templates plugin as this is no longer compatible with Jomres. Please use the Joomla Extension manager to uninstall the basic templates plugin (back up any customised templates you have before doing so) then rerun this script. <br/>Once you've migrated Jomres, you'll need to go through any of your customised templates (those are the ones that you backed up) and use the new Jomres template editing feature to make any changes you need.";
		return true;
		}
	return false;
	}
	
// Table changes
function alterTables()
	{
	if (!AUTO_UPGRADE) echo  "Altering tables.";if (!AUTO_UPGRADE) echo  "<br>";
	
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_extras table adding maxquantity column<br>";
	$query = "ALTER TABLE `#__jomres_extras` ADD `maxquantity` INT( 5 ) DEFAULT '1' AFTER `price`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_contracts __jomres_contracts adding extrasquantities column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `extrasquantities` VARCHAR( 255 ) AFTER `extras`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_contracts table adding coupon_id column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `coupon_id` INTEGER NULL";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_contracts table adding bookedout column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `bookedout` BOOL NOT NULL DEFAULT '0' ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_contracts table adding bookedout_timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `bookedout_timestamp` DATETIME";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
		
	if (!checkTariffsTimeStampColsExists() )
		alterTariffsTimeStampCols();
	}

function checkTariffsTimeStampColsExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_rates LIKE 'validfrom_ts'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTariffsTimeStampCols()
	{
	//if (!AUTO_UPGRADE) echo  "Editing __jomres_rates table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `validfrom_ts` DATE AFTER `weekendonly` , ADD `validto_ts` DATE AFTER `validfrom_ts`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	$query = "SELECT rates_uid,validfrom,validto FROM #__jomres_rates";
	$allRates=doSelectSql($query);
	foreach ($allRates as $r)
		{
		$validfrom_ts=str_replace("/","-",$r->validfrom);
		$validto_ts=str_replace("/","-",$r->validto);
		$query="UPDATE #__jomres_rates SET `validfrom_ts`='$validfrom_ts',`validto_ts`='$validto_ts' WHERE rates_uid='$r->rates_uid'";
		doInsertSql($query,'');
		}
	}
	
function dropOldTables()
	{
	if (!AUTO_UPGRADE) echo  "Dropping old tables.";if (!AUTO_UPGRADE) echo  "<br>";
	
	//if (!AUTO_UPGRADE) echo  "Dropping __jomres_tmpguests table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tmpguests`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	//if (!AUTO_UPGRADE) echo  "Dropping __jomres_tmpbooking table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tmpbooking`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Dropping __jomres_property_images table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_property_images`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Dropping __jomres_tempBookingOut table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tempBookingOut`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	//if (!AUTO_UPGRADE) echo  "Dropping __jomres_cancellations table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_cancellations`";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	}


function resetMRConfigSettings()
	{
	if (!AUTO_UPGRADE) echo  "Resetting some mrConfig values to the Jomres v4 defaults.";if (!AUTO_UPGRADE) echo  "<br>";
	$mrConfig = array();
	
	//$mrConfig['showSlideshowInline']="1";
	//$mrConfig['showTariffsInline']="1";
	$mrConfig['returnRoomsLimit']="1";
	
	foreach ($mrConfig as $key=>$val)
		{
		$query = "UPDATE #__jomres_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
		if (!AUTO_UPGRADE) echo  "Updating $key to $val";if (!AUTO_UPGRADE) echo  "<br>";
		$result=doInsertSql($query,'');
		}
	
	}

function resetJRConfigSettings()
	{
	if (!AUTO_UPGRADE) echo  "Resetting some jrConfig values to the Jomres v4 defaults.";if (!AUTO_UPGRADE) echo  "<br>";
	$jrConfig = array();
	
	$jrConfig['maxwidth']				='300';
	$jrConfig['slideshow']				='tooltips';
	$jrConfig['ss_imageLocation']		='/jomres/uploadedimages/';
	$jrConfig['composite_property_details']="1";

	foreach ($jrConfig as $key=>$val)
		{
		$query = "UPDATE #__jomres_site_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
		if (!AUTO_UPGRADE) echo  "Updating $key to $val";if (!AUTO_UPGRADE) echo  "<br>";
		$result=doInsertSql($query,'');
		}
	}


function insertNewJRConfigSettings()
	{
	
	if (!AUTO_UPGRADE) echo  "Inserting new site settings";if (!AUTO_UPGRADE) echo  "<br>";
	
	$jrConfig['property_list_limit']					='5';
	$jrConfig['integratedSearch_enable']				='1';
	$jrConfig['integratedSearch_useCols']				='0';
	$jrConfig['integratedSearch_featurecols']			='3';
	$jrConfig['integratedSearch_selectcombo']			='1';
	$jrConfig['integratedSearch_propertyname']			='0';
	$jrConfig['integratedSearch_propertyname_dropdown']	='1';
	$jrConfig['integratedSearch_geosearchtype']			='';
	$jrConfig['integratedSearch_geosearchtype_dropdown']='1';
	$jrConfig['integratedSearch_ptype']					='0';
	$jrConfig['integratedSearch_ptype_dropdown']		='1';
	$jrConfig['integratedSearch_room_type']				='0';
	$jrConfig['integratedSearch_room_type_dropdown']	='1';
	$jrConfig['integratedSearch_features']				='0';
	$jrConfig['integratedSearch_features_dropdown']		='1';
	$jrConfig['integratedSearch_description']			='0';
	$jrConfig['integratedSearch_availability']			='0';
	$jrConfig['integratedSearch_priceranges']			='0';
	$jrConfig['integratedSearch_pricerange_increments']	='20';
	$jrConfig['useCaching']		='0';
	$jrConfig['showLangDropdown']		='1';
	
	foreach ($jrConfig as $key=>$val)
		{
		$query = "INSERT INTO #__jomres_site_settings (`value`,`akey`) VALUES ('".$val."','".$key."')";
		if (!AUTO_UPGRADE) echo  "Setting $key to $val";if (!AUTO_UPGRADE) echo  "<br>";
		$result=doInsertSql($query,'');
		}
	}

function insertPluginSettings()
	{
	if (!AUTO_UPGRADE) echo  "Inserting new plugin settings if required.";if (!AUTO_UPGRADE) echo  "<br>";
	// Pseudocron settings
	$pluginConfig['jomcompcronjobs']['method']			='0';
	$pluginConfig['jomcompcronjobs']['displaylogging']	='0';
	$pluginConfig['jomcompcronjobs']['logging']			='0';
	$pluginConfig['jomcompcronjobs']['verbose']			='0';

	// Invoices backend paypal settings
	$pluginConfig['backend_paypal_settings']['usesandbox']	='1';
	$pluginConfig['backend_paypal_settings']['currencycode']='EUR';
	$pluginConfig['backend_paypal_settings']['email']		='';
	$pluginConfig['backend_paypal_settings']['override']	='0';

	$tempConfigArr=$pluginConfig;
	$pluginConfig=array();
	$query="SELECT plugin,setting,value FROM #__jomres_pluginsettings WHERE prid = 0";
	$settingsList=doSelectSql($query);
	if (count($settingsList)>0)
		{
		foreach ($settingsList as $settings)
			{
			$plugin=$settings->plugin;
			$setting=$settings->setting;
			$value=$settings->value;
			$pluginConfig[$plugin][$setting]=$value;
			}
		}
	foreach ($tempConfigArr as $k=>$v)
		{
		if (!array_key_exists($k,$pluginConfig) )
			{
			foreach ($v as $sett=>$settVal)
				{
				$query="INSERT INTO #__jomres_pluginsettings (prid,plugin,setting,value) VALUES (0,'".$k."','".$sett."','".$settVal."')";
				//if (!AUTO_UPGRADE) echo  $query."<br>";
				doInsertSql($query,'');
				}
			}
		}
	}

// Added tables
function addNewTables()
	{
	if (!AUTO_UPGRADE) echo  "Adding new tables if required.";if (!AUTO_UPGRADE) echo  "<br>";
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_coupons` (
		`coupon_id` INT NOT NULL AUTO_INCREMENT ,
		`property_uid` INT,
		`coupon_code` VARCHAR( 255 ),
		`valid_from` DATE ,
		`valid_to` DATE,
		`amount` FLOAT,
		`is_percentage` BOOL,
		`rooms_only` BOOL,
		PRIMARY KEY ( `coupon_id` )
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_fields` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`fieldname` VARCHAR( 255 ) ,
		`default_value` VARCHAR( 255 ) ,
		`description` VARCHAR( 255 ) ,
		`required` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		

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
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_orphan_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
		`name` varchar(20),
		`description` varchar(255),
		`init_price` float NOT NULL default '0',
		`init_qty` int(11) NOT NULL default '0',
		`init_discount` float NOT NULL default '0',
		`recur_price` float NOT NULL default '0',
		`recur_qty` int(11) NOT NULL default '0',
		`recur_discount` float NOT NULL default '0',
		`tax_code_id` int(11),
		`property_uid` INT NULL DEFAULT '0',
		PRIMARY KEY  (`id`)
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_lineitems` (
		`id` int(11) NOT NULL auto_increment,
		`name` varchar(20),
		`description` varchar(255),
		`init_price` float NOT NULL default '0',
		`init_qty` int(11) NOT NULL default '0',
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
		PRIMARY KEY  (`id`)
	)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_invoices` (
		`id` int(11) NOT NULL auto_increment,
		`cms_user_id` int(11) NOT NULL default '0',
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
		PRIMARY KEY  (`id`)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
		`id` int(11) NOT NULL auto_increment,
		`code` char(20),
		`description` varchar(255),
		`rate` float NOT NULL default '0',
		PRIMARY KEY  (`id`)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cron` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`job` char( 100 ) ,
		`schedule` char(2),
		`last_ran` int(12),
		`parameters` varchar(255) null,
		`locked` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `id` )
		);";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_bookings` (
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
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_users (
		`id` int(11) AUTO_INCREMENT,
		`manager_uid` INTEGER,
		`jos_id` INTEGER,
		`portal_booking_id` INTEGER,
		`username` varchar(255),
		`email` varchar(255),
		`created` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_c_rates (
		`id` int(11) AUTO_INCREMENT,
		`title` varchar(255),
		`type` int,
		`value` float,
		`currencycode` CHAR( 3 ) NOT NULL DEFAULT 'GBP',
		`created` datetime,
		`archived` bool DEFAULT 0,
		`archived_date` datetime,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		{ if (!AUTO_UPGRADE) echo  "Failed to run query: ".$query."<br/>"; }

		
	return true;
	}

function removepreV4JomresFiles()
	{
	if (!AUTO_UPGRADE) echo  "Removing old /components/com_jomres and /administrator/components/com_jomres files.";if (!AUTO_UPGRADE) echo  "<br>";
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS);
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS);
	//if (!AUTO_UPGRADE) echo  "Pretending to empty dir ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."<br/>";
	//if (!AUTO_UPGRADE) echo  "Pretending to empty dir ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."<br/>";
	}
	
function reinstallJomresJoomlaFiles()
	{
	if (!AUTO_UPGRADE) echo  "Copying Jomres v4 /components/com_jomres and /administrator/components/com_jomres files.";if (!AUTO_UPGRADE) echo  "<br>";
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.jomres.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."admin.jomres.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.xml",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."jomres.xml");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."uninstall.jomres.php",	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."uninstall.jomres.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."jomres.php");
	}

function copyImagesToNewPath()
	{
	if (!AUTO_UPGRADE) echo  "Copying image files from ".OLD_IMAGES_PATH." to ".NEW_IMAGES_PATH."<br/>";
	$result=dircopy(OLD_IMAGES_PATH,NEW_IMAGES_PATH);
	}


// Piwik tracking code included to help us to understand whether or not the installer worked as expected. As both jomres_webinstall.php and install_jomres.php are deleted after installation it makes sense to include the class here, instead of a library file.

/**
 * Piwik - Open source web analytics
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
 * @version $Id: PiwikTracker.php 4787 2011-05-23 11:09:58Z matt $
 * @link http://piwik.org/docs/tracking-api/
 *
 * @category Piwik
 * @package PiwikTracker
 */

/**
 * @package PiwikTracker
 */
class PiwikTracker
{
	/**
	 * Piwik base URL, for example http://example.org/piwik/
	 * Must be set before using the class by calling 
	 *  PiwikTracker::$URL = 'http://yourwebsite.org/piwik/';
	 * 
	 * @var string
	 */
	static public $URL = '';
	
	/**
	 * API Version
	 * 
	 * @ignore
	 * @var int
	 */
	const VERSION = 1;
	
	/**
	 * @ignore
	 */
	public $DEBUG_APPEND_URL = '';
	
	/**
	 * Visitor ID length
	 * 
	 * @ignore
	 */
	const LENGTH_VISITOR_ID = 16;
	
	/**
	 * Builds a PiwikTracker object, used to track visits, pages and Goal conversions 
	 * for a specific website, by using the Piwik Tracking API.
	 * 
	 * @param int $idSite Id site to be tracked
	 * @param string $apiUrl "http://example.org/piwik/" or "http://piwik.example.org/"
	 * 						 If set, will overwrite PiwikTracker::$URL
	 */
    function __construct( $idSite, $apiUrl = false )
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
    	$this->urlReferrer = @$_SERVER['HTTP_REFERER'];
    	$this->pageUrl = self::getCurrentUrl();
    	$this->ip = @$_SERVER['REMOTE_ADDR'];
    	$this->acceptLanguage = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    	$this->userAgent = @$_SERVER['HTTP_USER_AGENT'];
    	if(!empty($apiUrl)) {
    		self::$URL = $apiUrl;
    	}
    	$this->visitorId = substr(md5(uniqid(rand(), true)), 0, self::LENGTH_VISITOR_ID);
    }
    
    /**
     * Sets the current URL being tracked
     * 
     * @param string Raw URL (not URL encoded)
     */
	public function setUrl( $url )
    {
    	$this->pageUrl = $url;
    }

    /**
     * Sets the URL referrer used to track Referrers details for new visits.
     * 
     * @param string Raw URL (not URL encoded)
     */
    public function setUrlReferrer( $url )
    {
    	$this->urlReferrer = $url;
    }
    
    /**
     * @deprecated 
     * @ignore
     */
    public function setUrlReferer( $url )
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
     * @see function getAttributionInfo() in http://dev.piwik.org/trac/browser/trunk/js/piwik.js 
     */
    public function setAttributionInfo( $jsonEncoded )
    {
    	$decoded = json_decode($jsonEncoded, $assoc = true);
    	if(!is_array($decoded)) 
    	{
    		throw new Exception("setAttributionInfo() is expecting a JSON encoded string, $jsonEncoded given");
    	}
    	$this->attributionInfo = $decoded;
    }

    /**
     * Sets Visit Custom Variable.
     * See http://piwik.org/docs/custom-variables/
     * 
     * @param int Custom variable slot ID from 1-5
     * @param string Custom variable name
     * @param string Custom variable value
     * @param string Custom variable scope. Possible values: visit, page
     */
    public function setCustomVariable($id, $name, $value, $scope = 'visit')
    {
    	if(!is_int($id))
    	{
    		throw new Exception("Parameter id to setCustomVariable should be an integer");
    	}
    	if($scope == 'page')
    	{
    		$this->pageCustomVar[$id] = array($name, $value);
    	}
    	elseif($scope == 'visit')
    	{
    		$this->visitorCustomVar[$id] = array($name, $value);
    	}
    	else
    	{
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
     * @see Piwik.js getCustomVariable()
     */
    public function getCustomVariable($id, $scope = 'visit')
    {
    	if($scope == 'page')
    	{
    		return isset($this->pageCustomVar[$id]) ? $this->pageCustomVar[$id] : false;
    	}
    	else if($scope != 'visit')
    	{
    		throw new Exception("Invalid 'scope' parameter value");
    	}
    	if(!empty($this->visitorCustomVar[$id]))
    	{
    		return $this->visitorCustomVar[$id];
    	}
    	$customVariablesCookie = 'cvar.'.$this->idSite.'.';
    	$cookie = $this->getCookieMatchingName($customVariablesCookie);
    	if(!$cookie)
    	{
    		return false;
    	}
    	if(!is_int($id))
    	{
    		throw new Exception("Parameter to getCustomVariable should be an integer");
    	}
    	$cookieDecoded = json_decode($cookie, $assoc = true);
    	if(!is_array($cookieDecoded)
    		|| !isset($cookieDecoded[$id])
    		|| !is_array($cookieDecoded[$id])
    		|| count($cookieDecoded[$id]) != 2)
    	{
    		return false;
    	}
    	return $cookieDecoded[$id];
    }
    
    
    
    
    /**
     * Sets the Browser language. Used to guess visitor countries when GeoIP is not enabled
     * 
     * @param string For example "fr-fr"
     */
    public function setBrowserLanguage( $acceptLanguage )
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
     * Tracks a page view
     * 
     * @param string $documentTitle Page title as it will appear in the Actions > Page titles report
     * @return string Response
     */
    public function doTrackPageView( $documentTitle )
    {
    	$url = $this->getUrlTrackPageView($documentTitle);
    	return $this->sendRequest($url);
    } 
    
    /**
     * Records a Goal conversion
     * 
     * @param int $idGoal Id Goal to record a conversion
     * @param int $revenue Revenue for this conversion
     * @return string Response
     */
    public function doTrackGoal($idGoal, $revenue = false)
    {
    	$url = $this->getUrlTrackGoal($idGoal, $revenue);
    	return $this->sendRequest($url);
    }
    
    /**
     * Tracks a download or outlink
     * 
     * @param string $actionUrl URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
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
     * @param string $sku (required) SKU, Product identifier 
     * @param string $name (optional) Product name
     * @param string $category (optional) Product category
     * @param float|int $price (optional) Individual product price (supports integer and decimal prices)
     * @param int $quantity (optional) Product quantity. If not specified, will default to 1 in the Reports 
     */
    public function addEcommerceItem($sku, $name = false, $category = false, $price = false, $quantity = false)
    {
    	if(empty($sku))
    	{
    		throw new Exception("You must specify a SKU for the Ecommerce item");
    	}
    	$this->ecommerceItems[$sku] = array( $sku, $name, $category, $price, $quantity );
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
	 * @param string|int $orderId (required) Unique Order ID. 
	 * 				This will be used to count this order only once in the event the order page is reloaded several times.
	 * 				orderId must be unique for each transaction, even on different days, or the transaction will not be recorded by Piwik.
	 * @param float $grandTotal (required) Grand Total revenue of the transaction (including tax, shipping, etc.)
	 * @param float $subTotal (optional) Sub total amount, typically the sum of items prices for all items in this order (before Tax and Shipping costs are applied) 
	 * @param float $tax (optional) Tax amount for this order
	 * @param float $shipping (optional) Shipping amount for this order
	 * @param float $discount (optional) Discounted amount in this order
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
     * @param string $sku Product SKU being viewed
     * @param string $name Product Name being viewed
     * @param string $category Category being viewed. On a Product page, this is the product's category
     */
    public function setEcommerceView($sku = false, $name = false, $category = false)
    {
    	if(!empty($sku)) {
    		$this->pageCustomVar[3] = array('_pks', $sku);
    	}
    	if(!empty($name)) {
    		$this->pageCustomVar[4] = array('_pkn', $name);
    	}
    	if(!empty($category)) {
    		$this->pageCustomVar[5] = array('_pkc', $category);
    	}
    }
    
    /**
     * Returns URL used to track Ecommerce Cart updates
     * Calling this function will reinitializes the property ecommerceItems to empty array 
     * so items will have to be added again via addEcommerceItem()  
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
     * so items will have to be added again via addEcommerceItem()  
     * @ignore
     */
    public function getUrlTrackEcommerceOrder($orderId, $grandTotal, $subTotal = false, $tax = false, $shipping = false, $discount = false)
    {
    	if(empty($orderId))
    	{
    		throw new Exception("You must specifiy an orderId for the Ecommerce order");
    	}
    	$url = $this->getUrlTrackEcommerce($grandTotal, $subTotal, $tax, $shipping, $discount);
    	$url .= '&ec_id=' . urlencode($orderId);
    	$this->ecommerceLastOrderTimestamp = $this->getTimestamp();
    	return $url;
    }
    
    /**
     * Returns URL used to track Ecommerce orders
     * Calling this function will reinitializes the property ecommerceItems to empty array 
     * so items will have to be added again via addEcommerceItem()  
     * @ignore
     */
    protected function getUrlTrackEcommerce($grandTotal, $subTotal = false, $tax = false, $shipping = false, $discount = false)
    {
    	if(!is_numeric($grandTotal))
    	{
    		throw new Exception("You must specifiy a grandTotal for the Ecommerce order (or Cart update)");
    	}
    	
    	$url = $this->getRequest( $this->idSite );
    	$url .= '&idgoal=0';
    	if(!empty($grandTotal))
    	{
    		$url .= '&revenue='.$grandTotal;
    	}
    	if(!empty($subTotal))
    	{
    		$url .= '&ec_st='.$subTotal;
    	}
    	if(!empty($tax))
    	{
    		$url .= '&ec_tx='.$tax;
    	}
    	if(!empty($shipping))
    	{
    		$url .= '&ec_sh='.$shipping;
    	}
    	if(!empty($discount))
    	{
    		$url .= '&ec_dt='.$discount;
    	}
    	if(!empty($this->ecommerceItems))
    	{
    		// Removing the SKU index in the array before JSON encoding
    		$items = array();
    		foreach($this->ecommerceItems as $item)
    		{
    			$items[] = $item;
    		}
    		$url .= '&ec_items='. urlencode(json_encode($items));
    	}
    	$this->ecommerceItems = array();
    	return $url;
    }
    
    /**
     * @see doTrackPageView()
     * @param string $documentTitle Page view name as it will appear in Piwik reports
     * @return string URL to piwik.php with all parameters set to track the pageview
     */
    public function getUrlTrackPageView( $documentTitle = false )
    {
    	$url = $this->getRequest( $this->idSite );
    	if(!empty($documentTitle)) {
    		$url .= '&action_name=' . urlencode($documentTitle);
    	}
    	return $url;
    }
    
    /**
     * @see doTrackGoal()
     * @param string $actionUrl URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
     * @return string URL to piwik.php with all parameters set to track the goal conversion
     */
    public function getUrlTrackGoal($idGoal, $revenue = false)
    {
    	$url = $this->getRequest( $this->idSite );
		$url .= '&idgoal=' . $idGoal;
    	if(!empty($revenue)) {
    		$url .= '&revenue=' . $revenue;
    	}
    	return $url;
    }
        
    /**
     * @see doTrackAction()
     * @param string $actionUrl URL of the download or outlink
     * @param string $actionType Type of the action: 'download' or 'link'
     * @return string URL to piwik.php with all parameters set to track an action
     */
    public function getUrlTrackAction($actionUrl, $actionType)
    {
    	$url = $this->getRequest( $this->idSite );
		$url .= '&'.$actionType.'=' . $actionUrl .
				'&redirect=0';
		
    	return $url;
    }

    /**
     * Overrides server date and time for the tracking requests. 
     * By default Piwik will track requests for the "current datetime" but this function allows you 
     * to track visits in the past. All times are in UTC.
     * 
     * Allowed only for Super User, must be used along with setTokenAuth()
     * @see setTokenAuth()
     * @param string Date with the format 'Y-m-d H:i:s', or a UNIX timestamp
     */
    public function setForceVisitDateTime($dateTime)
    {
    	$this->forcedDatetime = $dateTime;
    }
    
    /**
     * Overrides IP address
     * 
     * Allowed only for Super User, must be used along with setTokenAuth()
     * @see setTokenAuth()
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
     * @see setTokenAuth()
     * @param string $visitorId 16 hexadecimal characters visitor ID, eg. "33c31e01394bdc63"
     */
    public function setVisitorId($visitorId)
    {
    	if(strlen($visitorId) != self::LENGTH_VISITOR_ID)
    	{
    		throw new Exception("setVisitorId() expects a ".self::LENGTH_VISITOR_ID." characters ID");
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
    	if(!empty($this->forcedVisitorId))
    	{
    		return $this->forcedVisitorId;
    	}
    	
    	$idCookieName = 'id.'.$this->idSite.'.';
    	$idCookie = $this->getCookieMatchingName($idCookieName);
    	if($idCookie !== false)
    	{
    		$visitorId = substr($idCookie, 0, strpos($idCookie, '.'));
    		if(strlen($visitorId) == self::LENGTH_VISITOR_ID)
    		{
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
     * Sets local visitor time
     * 
     * @param string $time HH:MM:SS format
     */
    public function setLocalTime($time)
    {
    	list($hour, $minute, $second) = explode(':', $time);
    	$this->localHour = (int)$hour;
    	$this->localMinute = (int)$minute;
    	$this->localSecond = (int)$second;
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
    public function setBrowserHasCookies( $bool )
    {
    	$this->hasCookies = $bool ;
    }
    
    /**
     * Will append a custom string at the end of the Tracking request. 
     * @param string $string
     */
    public function setDebugStringAppend( $string )
    {
    	$this->DEBUG_APPEND_URL = $string;
    }
    
    /**
     * Sets visitor browser supported plugins 
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
    	$this->plugins = 
    		'&fla='.(int)$flash.
    		'&java='.(int)$java.
    		'&dir='.(int)$director.
    		'&qt='.(int)$quickTime.
    		'&realp='.(int)$realPlayer.
    		'&pdf='.(int)$pdf.
    		'&wma='.(int)$windowsMedia.
    		'&gears='.(int)$gears.
    		'&ag='.(int)$silverlight
    	;
    }
    
    /**
     * By default, PiwikTracker will read third party cookies 
     * from the response and sets them in the next request.
     * This can be disabled by calling this function.
     * 
     * @return void
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

		if(!$this->cookieSupport)
		{
			$this->requestCookie = '';
		}
		if(function_exists('curl_init'))
		{
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_USERAGENT => $this->userAgent,
				CURLOPT_HEADER => true,
				CURLOPT_TIMEOUT => $timeout,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HTTPHEADER => array(
					'Accept-Language: ' . $this->acceptLanguage,
					'Cookie: '. $this->requestCookie,
				),
			));
			ob_start();
			$response = @curl_exec($ch);
			ob_end_clean();
			$header = $content = '';
			if(!empty($response))
			{
				list($header,$content) = explode("\r\n\r\n", $response, $limitCount = 2);
			}
		}
		else if(function_exists('stream_context_create'))
		{
			$stream_options = array(
				'http' => array(
					'user_agent' => $this->userAgent,
					'header' => "Accept-Language: " . $this->acceptLanguage . "\r\n" .
					            "Cookie: ".$this->requestCookie. "\r\n" ,
					'timeout' => $timeout, // PHP 5.2.1
				)
			);
			$ctx = stream_context_create($stream_options);
			$response = file_get_contents($url, 0, $ctx);
			$header = implode("\r\n", $http_response_header); 
			$content = $response;
		}
		// The cookie in the response will be set in the next request
		preg_match_all('/^Set-Cookie: (.*?);/m', $header, $cookie);
		if(!empty($cookie[1]))
		{
			// in case several cookies returned, we keep only the latest one (ie. XDEBUG puts its cookie first in the list)
			if(is_array($cookie[1]))
			{
				$cookie = end($cookie[1]);
			}
			else
			{
				$cookie = $cookie[1];
			}
			if(strpos($cookie, 'XDEBUG') === false)
			{
				$this->requestCookie = $cookie;
			}
		}

		return $content;
    }
    
    /**
     * Returns current timestamp, or forced timestamp/datetime if it was set
     * @return string|int
     */
    protected function getTimestamp()
    {
    	return !empty($this->forcedDatetime) 
    		? strtotime($this->forcedDatetime) 
    		: time();
    }
    
    /**
     * @ignore
     */
    protected function getRequest( $idSite )
    {
    	if(empty(self::$URL))
    	{
    		throw new Exception('You must first set the Piwik Tracker URL by calling PiwikTracker::$URL = \'http://your-website.org/piwik/\';');
    	}
    	if(strpos(self::$URL, '/piwik.php') === false
    		&& strpos(self::$URL, '/proxy-piwik.php') === false)
    	{
    		self::$URL .= '/piwik.php';
    	}
    	
    	$url = self::$URL .
	 		'?idsite=' . $idSite .
			'&rec=1' .
			'&apiv=' . self::VERSION . 
	        '&rand=' . mt_rand() .
    	
    		// PHP DEBUGGING: Optional since debugger can be triggered remotely
    		(!empty($_GET['XDEBUG_SESSION_START']) ? '&XDEBUG_SESSION_START=' . @$_GET['XDEBUG_SESSION_START'] : '') . 
	        (!empty($_GET['KEY']) ? '&KEY=' . @$_GET['KEY'] : '') .
    	 
    		// Only allowed for Super User, token_auth required
			(!empty($this->ip) ? '&cip=' . $this->ip : '') .
    		(!empty($this->forcedVisitorId) ? '&cid=' . $this->forcedVisitorId : '&_id=' . $this->visitorId) . 
			(!empty($this->forcedDatetime) ? '&cdt=' . urlencode($this->forcedDatetime) : '') .
			(!empty($this->token_auth) ? '&token_auth=' . urlencode($this->token_auth) : '') .
	        
			// These parameters are set by the JS, but optional when using API
	        (!empty($this->plugins) ? $this->plugins : '') . 
			(($this->localHour !== false && $this->localMinute !== false && $this->localSecond !== false) ? '&h=' . $this->localHour . '&m=' . $this->localMinute  . '&s=' . $this->localSecond : '' ).
	        (!empty($this->width) && !empty($this->height) ? '&res=' . $this->width . 'x' . $this->height : '') .
	        (!empty($this->hasCookies) ? '&cookie=' . $this->hasCookies : '') .
	        (!empty($this->ecommerceLastOrderTimestamp) ? '&_ects=' . urlencode($this->ecommerceLastOrderTimestamp) : '') .
	        
	        // Various important attributes
	        (!empty($this->customData) ? '&data=' . $this->customData : '') . 
	        (!empty($this->visitorCustomVar) ? '&_cvar=' . urlencode(json_encode($this->visitorCustomVar)) : '') .
	        (!empty($this->pageCustomVar) ? '&cvar=' . urlencode(json_encode($this->pageCustomVar)) : '') .
	        
	        // URL parameters
	        '&url=' . urlencode($this->pageUrl) .
			'&urlref=' . urlencode($this->urlReferrer) .
	        
	        // Attribution information, so that Goal conversions are attributed to the right referrer or campaign
	        // Campaign name
    		(!empty($this->attributionInfo[0]) ? '&_rcn=' . urlencode($this->attributionInfo[0]) : '') .
    		// Campaign keyword
    		(!empty($this->attributionInfo[1]) ? '&_rck=' . urlencode($this->attributionInfo[1]) : '') .
    		// Timestamp at which the referrer was set
    		(!empty($this->attributionInfo[2]) ? '&_refts=' . $this->attributionInfo[2] : '') .
    		// Referrer URL
    		(!empty($this->attributionInfo[3]) ? '&_ref=' . urlencode($this->attributionInfo[3]) : '') .

    		// DEBUG 
	        $this->DEBUG_APPEND_URL
        ;
    	// Reset page level custom variables after this page view
    	$this->pageCustomVar = false;
    	
    	return $url;
    }
    
    
    /**
     * Returns a first party cookie which name contains $name
     * 
     * @param string $name
     * @return string String value of cookie, or false if not found
     * @ignore
     */
    protected function getCookieMatchingName($name)
    {
    	// Piwik cookie names use dots separators in piwik.js, 
    	// but PHP Replaces . with _ http://www.php.net/manual/en/language.variables.predefined.php#72571
    	$name = str_replace('.', '_', $name);
    	foreach($_COOKIE as $cookieName => $cookieValue)
    	{
    		if(strpos($cookieName, $name) !== false)
    		{
    			return $cookieValue;
    		}
    	}
    	return false;
    }

	/**
	 * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
	 * will return "/dir1/dir2/index.php"
	 *
	 * @return string
     * @ignore
	 */
	static protected function getCurrentScriptName()
	{
		$url = '';
		if( !empty($_SERVER['PATH_INFO']) ) { 
			$url = $_SERVER['PATH_INFO'];
		} 
		else if( !empty($_SERVER['REQUEST_URI']) ) 	{
			if( ($pos = strpos($_SERVER['REQUEST_URI'], '?')) !== false ) {
				$url = substr($_SERVER['REQUEST_URI'], 0, $pos);
			} else {
				$url = $_SERVER['REQUEST_URI'];
			}
		} 
		if(empty($url)) {
			$url = $_SERVER['SCRIPT_NAME'];
		}

		if($url[0] !== '/')	{
			$url = '/' . $url;
		}
		return $url;
	}

	/**
	 * If the current URL is 'http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
	 * will return 'http'
	 *
	 * @return string 'https' or 'http'
     * @ignore
	 */
	static protected function getCurrentScheme()
	{
		if(isset($_SERVER['HTTPS'])
				&& ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] === true))
		{
			return 'https';
		}
		return 'http';
	}

	/**
	 * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
	 * will return "http://example.org"
	 *
	 * @return string
     * @ignore
	 */
	static protected function getCurrentHost()
	{
		if(isset($_SERVER['HTTP_HOST'])) {
			return $_SERVER['HTTP_HOST'];
		}
		return 'unknown';
	}

	/**
	 * If current URL is "http://example.org/dir1/dir2/index.php?param1=value1&param2=value2"
	 * will return "?param1=value1&param2=value2"
	 *
	 * @return string
     * @ignore
	 */
	static protected function getCurrentQueryString()
	{
		$url = '';	
		if(isset($_SERVER['QUERY_STRING'])
			&& !empty($_SERVER['QUERY_STRING']))
		{
			$url .= '?'.$_SERVER['QUERY_STRING'];
		}
		return $url;
	}
	
	/**
	 * Returns the current full URL (scheme, host, path and query string.
	 *  
	 * @return string
     * @ignore
	 */
    static protected function getCurrentUrl()
    {
		return self::getCurrentScheme() . '://'
			. self::getCurrentHost()
			. self::getCurrentScriptName() 
			. self::getCurrentQueryString();
	}
}

function Piwik_getUrlTrackPageView( $idSite, $documentTitle = false )
{
	$tracker = new PiwikTracker($idSite);
	return $tracker->getUrlTrackPageView($documentTitle);
}
function Piwik_getUrlTrackGoal($idSite, $idGoal, $revenue = false)
{
	$tracker = new PiwikTracker($idSite);
	return $tracker->getUrlTrackGoal($idGoal, $revenue);
}

?>