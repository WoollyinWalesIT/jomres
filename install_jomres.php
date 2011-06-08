<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

$info = phpversion();
$v_arr = explode("-",$info);
$version = (float) $v_arr[0];

if ( $version < 5.2 )
	{
	echo "Oops, it looks like you're running a version of PHP lower than 5.2. Jomres requires at least PHP5.2 and will not run on earlier versions";
	exit;
	}

define('_JOMRES_INITCHECK', 1 );
ini_set("display_errors",1);
ini_set('error_reporting', E_ALL);

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
	echo "Error, cannot find the new Jomres integration script, you might not have downloaded Jomres v4 yet.";
	exit;
	}
	
require_once( 'integration.php' );

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."registry.php") )
	@unlink(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."registry.php");
	
	
global $jomres_systemLog_path,$lkey;
$jomres_systemLog_path=JOMRESCONFIG_ABSOLUTE_PATH.$jrConfig['jomres_systemLog_path'];

showheader();

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
			echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."sessions".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS)) 
			{
			echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS)) 
			{
			echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."cache".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
		if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS)) 
			{
			echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."updates".JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."remote_plugins".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."remote_plugins".JRDS)) 
			{
			echo "<h1>Error, unable to make folder "."remote_plugins".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-plugins".JRDS) )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."core-plugins".JRDS)) 
			{
			echo "<h1>Error, unable to make folder "."core-plugins".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			}
		}

	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages")) 
			{
			echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."rmtypes") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."rmtypes")) 
			{
			echo "<h1>Error, unable to make folder "."uploadedimages".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS."rmtypes"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}
		
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."pfeatures") )
		{
		if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS."pfeatures")) 
			{
			echo "<h1>Error, unable to make folder "."uploadedimages".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS.JRDS."pfeatures"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
			$folderChecksPassed=false;
			}
		}

if ($folderChecksPassed && ACTION != "Migration") 
	{
	$trashtables=jomresGetParam($_POST,'trashtables',0,'integer');
	$manual_install_confirmation=jomresGetParam($_POST,'manual_install_confirmation',"");
	if ($manual_install_confirmation == "install")
		define('ACTION',"Install");
	if ($manual_install_confirmation == "upgrade")
		define('ACTION',"Upgrade");

	if ($_POST['go'] != "GO!" && $trashtables < 1 )
			{
			if (!function_exists ('gregoriantojd') )
				echo '<h3><font="red">Note: You need the function gregoriantojd, which does not appear to be available to this version of php. Please see <a href="http://support.jomres.net/?cmd=knowledgebase&p=view&qid=73" target="_blank">the Jomres knowledgebase</a> for more information.<br></font></h3> ';
			else
				showGetKeyInput();
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
					echo "Creating Jomres tables if they don't already exist.<br>";
					createJomresTables();
					echo "Inserting sample data<br>";
					insertSampleData();
					echo "Importing configuration settings to database<br>";
					importSettings(0);
					echo "Creating images folders<br>";
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
					echo "Data already installed, no need to re-create it<br>";
					doTableUpdates();
					require_once(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."cms_specific_upgrade.php");
					showCompletedText();
					}
				updateMrConfig();
				updatePluginSettings();
				installCronjobs();
				}
			}
		}

showfooter();

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
		//echo "Setting $key to $val";echo "<br>";
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
	if (_JOMRES_DETECTED_CMS == "joomla15" )
		checkJoomlaComponentsTableInCaseJomresHasBeenUninstalled();
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
	echo "Editing __jomres_coupons table adding booking_valid_from column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `booking_valid_from` DATE AFTER rooms_only ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_coupons booking_valid_from</b><br>";

	echo "Editing __jomres_coupons table adding booking_valid_to column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `booking_valid_to` DATE AFTER booking_valid_from ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_coupons booking_valid_to</b><br>";

	echo "Editing __jomres_coupons table adding guest_uid column<br>";
	$query = "ALTER TABLE `#__jomres_coupons` ADD `guest_uid` INT NULL DEFAULT '0' AFTER booking_valid_to ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_coupons booking_valid_to</b><br>";
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
	echo "Editing __jomres_extraServices table adding tax_rate_val column<br>";
	$query = "ALTER TABLE `#__jomres_extraServices` ADD `tax_rate_val` CHAR (10) DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_extraServices tax_rate_val</b><br>";
	}
	

// An odd one, this. It seems that some upgrades haven't got this table, so we'll add it if needed
function createExtraServicesTable()
	{
	echo "Creating __jomres_extraServices table<br>";
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
		echo "<b>Error creating table table __jomres_extraServices </b><br>";
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
	echo "Editing __jomresportal_orphan_lineitems table adding property_uid column<br>";
	$query = "ALTER TABLE `#__jomresportal_orphan_lineitems` ADD `property_uid` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_orphan_lineitems property_uid</b><br>";
	}

function createGuestProfileTable()
	{
	echo "Creating _jomres_guest_profile table<br>";
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
		echo "<b>Error, unable to add _jomres_guest_profile table</b><br>";
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
	echo "Editing __jomresportal_invoices table adding is_commission column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `is_commission` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_invoices is_commission</b><br>";
	}

function alterManagerSuspendedCol()
	{
	echo "Editing __jomres_managers table adding suspended column<br>";
	$query = "ALTER TABLE `#__jomres_managers` ADD `suspended` tinyint( 1 ) default 0 AFTER `apikey` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_managers suspended</b><br>";
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
	echo "Creating __jomres_partners table<br>";
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_partners table</b><br>";
	
	echo "Creating __jomres_partners_discounts table<br>";
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
		echo "<b>Error, unable to add __jomres_partners_discounts table</b><br>";
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
	echo "Editing __jomres_managers table adding users_timezone column<br>";
	$query = "ALTER TABLE `#__jomres_managers` ADD `users_timezone` CHAR(100) DEFAULT 'Europe/Berlin' AFTER `apikey` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_managers users_timezone</b><br>";
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
	echo "Creating room type/property type xref table<br>";
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_roomtypes_propertytypes_xref table</b><br>";
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
	echo "Creating booking data archive tables<br>";
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add _jomres_booking_data_archive table</b><br>";
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
	echo "Creating review detail tables<br>";
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating` int( 11 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add _jomres_reviews_ratings_detail table</b><br>";
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
	echo "Creating reviews tables<br>";
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
		echo "<b>Error, unable to add __jomres_reviews_ratings table</b><br>";

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
		echo "<b>Error, unable to add __jomres_reviews_ratings_confirm table</b><br>";
		
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_reviews_reports table</b><br>";
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
	echo "Editing __jomres_guests table adding discount column<br>";
	$query = "ALTER TABLE `#__jomres_guests` ADD `discount` INT( 11 ) DEFAULT '0' NOT NULL AFTER `email` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_guests discount</b><br>";
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
	echo "Editing __jomres_contracts table adding invoice_uid column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `invoice_uid` INT( 11 ) DEFAULT '0' NOT NULL AFTER `bookedout_timestamp` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts invoice_uid</b><br>";
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
	echo "Editing __jomres_hotel_features table adding ptype_id column<br>";
	$query = "ALTER TABLE `#__jomres_hotel_features` ADD `ptype_id` INT( 11 ) DEFAULT '0' NOT NULL AFTER `property_uid` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_subscriptions ptype_id</b><br>";
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
	echo "Editing __jomresportal_subscriptions table adding package_id column<br>";
	$query = "ALTER TABLE `#__jomresportal_subscriptions` ADD `package_id` INT NULL DEFAULT '0' AFTER `gateway_subscription_id` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_subscriptions package_id</b><br>";
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
	echo "Editing __jomres_extras table adding tax_rate column<br>";
	$query = "ALTER TABLE `#__jomres_extras` ADD `tax_rate` INT NULL DEFAULT '0' AFTER `price` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_extras tax_rate</b><br>";
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
	echo "Editing __jomres_custom_templates table adding last_edited column<br>";
	$query = "ALTER TABLE `#__jomres_custom_templates` ADD `last_edited` DATETIME AFTER `value` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_custom_templates last_edited</b><br>";
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
	echo "Editing __jomres_propertys table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `timestamp` DATETIME AFTER `metadescription` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys timestamp</b><br>";
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
	echo "Editing __jomresportal_invoices table adding contract_id column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `contract_id` INT NULL DEFAULT '0' AFTER `subscription_id` ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_invoices contract_id</b><br>";
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
	echo "Editing __jomresportal_invoices table adding property_uid column<br>";
	$query = "ALTER TABLE `#__jomresportal_invoices` ADD `property_uid` INT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomresportal_invoices property_uid</b><br>";
	}
	

function installCronjobs()
	{
	echo "Installing cron jobs<br/>";
	jr_import('jomres_cron');
	$cron = new jomres_cron();
	$cron->addJob("optimise","D","");
	$cron->addJob("invoice","D","");
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
		//echo $string;
		//echo $r->$string."<br>";
		if (strstr($r->$string, 'jomres_') || strstr($r->$string, 'jomcomp_') || strstr($r->$string, 'jomresportal_'))
			{
			$query= "DROP TABLE IF EXISTS ".$r->$string;
			echo "Dropping table ".$r->$string." <br>";
		if (!doInsertSql($query,'') )
			echo "<b>Error, unable to drop table ".$r->$string."</b><br>";
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
			//echo $query."<br>";
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
				//echo $query."<br>";
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
			echo "It's readable";
		else
			echo "It's not readable";
		touch($adminPath.JRDS."site_config.php");
		copy ($adminPath.JRDS."site_config-dist.php",$adminPath.JRDS."site_config.php");
		}
	else
		{
		echo "It's already here";
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
	echo '<br>Thank you for installing Jomres. You may now go to your CMS\'s administrator area and configure Jomres<br>';
	echo '<br>Please remember to delete the file <i>install_jomres.php</i> from your jomres folder<br>';
	echo '<br>If you wish you can go straight to your Jomres install and start editing your property. To enable the property manager functionality log in as "admin" (for Joomla users) or "administrator" (for Standalone users) and go to your site profiles and assign a frontend user as a property manager.<br>';
	echo '<br><h3>Please remember, to configure your property you need to log into the frontend as the administrator user, you cannot configure propertys via the administrator area.</h3><br>';
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
	echo "Looking for ".get_showtime('dbprefix').'jomres_propertys<br>';
	$nullcounter=0;
	foreach ($result as $r)
		{
		//echo "Found ".$r->$string."<br/>";
		if (is_null($r->$string))
			$nullcounter++;
		}
	if (count($result) == $nullcounter)
		{
		echo "Number of tables ".count($result)."<br>";
		echo "Number of tables that could not be identified ".$nullcounter."<br>";
		showGetInstallUpgradeRequest();
		define('ACTION',"Unknown");
		}
	else
		{
		foreach ($result as $r)
			{
			if (strstr($r->$string, $jomresConfig_dbprefix.'jomres_propertys') )
				{
				echo " ".$jomresConfig_dbprefix.'jomres_propertys found. We are upgrading.<br>';
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
		echo "Inserted admin as manager<br>";
	else
		echo "Could not create admin as manager<br>";
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
	//echo JOMRESPATH_BASE.'/media/key.php';
	if (file_exists(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'key.php') )
		{
		//echo "Deleting existing key.php<br>";
		$keyfileDeleted=unlink(JOMRESINSTALLPATH_BASE.JRDS.'media'.JRDS.'key.php');
		}
	else
		{
		//echo "File key.php does not exist<br>";
		$keyfileDeleted=true;
		}
	if (!$licensefileDeleted)
		echo "Unable to delete license file<br>";
	if (!$keyfileDeleted)
		echo "Unable to delete key file<br>";

	if ($licensefileDeleted && $keyfileDeleted)
		return true;
	else
		return false;
	}


function createJomresTables()
	{
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
		echo "<b>Error creating table table __jomres_coupons </b><br>";

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
		echo "<b>Error creating table table __jomres_custom_fields </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		`last_edited` datetime,
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_custom_templates </b><br>";
		
		
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
		echo "Failed to run query: ".$query."<br/>";
	
	$query="
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);
	";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
		
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_site_settings` (
		`id` int(11) auto_increment,
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_site_settings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_tarifftypes </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int not null,
		`tariff_id` int not null,
		`roomclass_uid` int not null,
		`property_uid` int not null,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_tarifftype_rate_xref </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT,
		`model` INT,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_extrasmodels_models </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_mufavourites` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`my_id` INT,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_mufavourites </b><br>";


	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`contract_uid` INT,
		`note` TEXT,
		`timestamp` datetime,
		`property_uid` INT,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_notes </b><br>";


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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_customertypes </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pcounter` (
		`count` int ,
		`p_uid` int(11) NOT NULL PRIMARY KEY,
		`p_view` int(11)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_pcounter </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pluginsettings` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`prid` INT( 11 ),
		`plugin` VARCHAR( 255 ),
		`setting` TEXT NULL,
		`value` VARCHAR( 255 ),
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_pluginsettings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_ptypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`ptype` VARCHAR( 255 ),
		`ptype_desc` VARCHAR( 255 ),
		`published` TINYINT DEFAULT '1',
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_ptypes </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_text` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`constant` VARCHAR( 255 ) ,
		`customtext` TEXT NULL,
		`property_uid` INT( 11 ),
		`language` VARCHAR( 255 ),
		`reserved` VARCHAR( 255 ),
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_custom_text </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_extras` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`name` VARCHAR( 255 ),
		`desc` TEXT NULL,
		`price` DOUBLE DEFAULT '0',
		`tax_rate` INT NULL DEFAULT '0',
		`maxquantity` INT( 5 ) DEFAULT '1',
		`chargabledaily` BOOL NULL DEFAULT '0',
		`published` TINYINT DEFAULT '1',
		`property_uid` VARCHAR(11),
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_extras </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_audit_archive </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_audit </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_settings` (
		`uid` int(11) auto_increment,
		`property_uid` int( 11 ),
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_settings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_images` (
		`uid` int(11) auto_increment,
		`roomid` int( 11 ),
		`filelocation` text,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_images </b><br>";

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
		echo "<b>Error creating table table __jomres_extraServices </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_contracts </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_rates </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_guests </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_bookings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_classes` (
		`room_classes_uid` int(11) NOT NULL auto_increment,
		`room_class_abbv` VARCHAR(50) NULL,
		`room_class_full_desc` VARCHAR(255) NULL,
		`image` TEXT NULL,
		`property_uid` VARCHAR(11),
		`srp_only` BOOL,
		PRIMARY KEY(`room_classes_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_classes </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_rooms </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_features` (
		`room_features_uid` int(11) NOT NULL auto_increment,
		`feature_description` TEXT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`room_features_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_features </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features` (
		`hotel_features_uid` int(11) NOT NULL auto_increment,
		`hotel_feature_abbv` VARCHAR(20) NULL,
		`hotel_feature_full_desc` TEXT NULL,
		`image` text,
		`property_uid` VARCHAR(11),
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		PRIMARY KEY(`hotel_features_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_hotel_features </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_managers </b><br>";

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
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_propertys </b><br>";
		

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
		echo "<b>Error, unable to add __jomres_reviews_ratings table</b><br>";

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
		echo "<b>Error, unable to add __jomres_reviews_ratings_confirm table</b><br>";
		
	$query = "CREATE TABLE  IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`rating_id` int( 11 ) default NULL ,
	`user_id` int( 11 ) default NULL ,
	`report` text,
	`report_date` datetime default NULL ,
	PRIMARY KEY ( `report_id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_reviews_reports table</b><br>";

	$query = "CREATE TABLE IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`item_id` int( 11 ) default NULL ,
	`rating_id` int( 11 ) default NULL ,
	`detail_rating`  tinyint( 4 ) default NULL ,
	PRIMARY KEY ( `detail_id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add _jomres_reviews_ratings_detail table</b><br>";
		
	$query = "CREATE TABLE IF NOT EXISTS  `#__jomres_booking_data_archive` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`data` text,
	`date` datetime default NULL ,
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add _jomres_booking_data_archive table</b><br>";
	
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_roomtypes_propertytypes_xref` (
		`id` int(11) NOT NULL auto_increment,
		`roomtype_id` int(11),
		`propertytype_id` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_roomtypes_propertytypes_xref table</b><br>";
		
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_partners` (
		`id` int(11) NOT NULL auto_increment,
		`cms_userid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_partners table</b><br>";
		
	$query = "CREATE TABLE IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` int( 11 ) NOT NULL AUTO_INCREMENT ,
	`partner_id` int(11),
	`property_id` int(11),
	`valid_from` datetime,
	`valid_to` datetime,
	`discount` FLOAT NOT NULL DEFAULT '0.00',
	PRIMARY KEY ( `id` )
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_partners_discounts table</b><br>";
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
			(5, 'Villa/Apartment 1 Bedroom', '', 'jomres/uploadedimages/rmtypes/1bedroom.png', '0', 1),
			(6, 'Villa/Apartment 2 Bedrooms', '', 'jomres/uploadedimages/rmtypes/2bedrooms.png', '0', 1),
			(7, 'Villa/Apartment 3 Bedrooms', '', 'jomres/uploadedimages/rmtypes/3bedrooms.png', '0', 1),
			(8, 'Villa/Apartment 4 Bedrooms', '', 'jomres/uploadedimages/rmtypes/4bedrooms.png', '0', 1),
			(9, 'Villa/Apartment 5 Bedrooms', '', 'jomres/uploadedimages/rmtypes/5bedrooms.png', '0', 1),
			(10, 'Villa/Apartment 6+ Bedrooms', '', 'jomres/uploadedimages/rmtypes/6plusbedrooms.png', '0', 1),
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
			(5, 5, 5),
			(6, 6, 5),
			(7, 7, 5),
			(8, 8, 5),
			(9, 9, 5),
			(10, 10, 5),
			(11, 5, 1),
			(12, 6, 1),
			(13, 7, 1),
			(14, 8, 1),
			(15, 9, 1),
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
			(37, 25, 2);"
			);

		//$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`property_uid`,`image` )VALUES ('3', 'D/B', 'Double Bed','0','/jomres/uploadedimages/rmtypes/double.png'), ('4', 'T/B', 'Twin Beds','0','/jomres/uploadedimages/rmtypes/twin.png')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('1', '3', '1', '1,2', 'The Pitt', '11', '1', '0', '2','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('2', '3', '1', '1,2', 'The hole', '21', '2', '0', '4','0')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('1', 'Low season 2004', '2004/10/01', '2005/04/30', '25', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('2', 'High season 2005', '2005/05/01', '2005/09/31', '100', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('3', 'Low season 2005', '2005/10/01', '2006/04/30', '30', '1', '1000', '1', '4','3','0','1','1','1')","");


			$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('4', 'High season 2006', '2006/05/01', '2009/09/31', '110', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_guests` ( `guests_uid` , `contracts_contract_uid` , `mos_userid` , `firstname` , `surname` , `house` , `street` , `town` , `county`,`postcode` , `tel_landline` , `tel_mobile` , `tel_fax` , `preferences` , `car_regno` , `ccard_no` , `ccard_issued` , `ccard_expiry` , `ccard_iss_no` , `ccard_name`,`property_uid`,`email` )VALUES ('1', '0', NULL , 'Major', 'Gowen', 'Watery Fowls', 'a Street', 'a Region','a Town','XXNN NXX', '01000 123456', '01777 123456', '01000 654321','A newspaper with uptodate cricket scores', '', '' , '', '','','','1','example@example.com')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('1', 'Hotel/B&B/Villa/Cottage/Apartment', 'propertyrental', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('2', 'Yacht Brokerage', 'yachtbrokerage', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('3', 'Vehicle Rental', 'vehiclerental', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('4', 'Camp Site', 'campsite', '1')","");

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
	echo "Altering tables, creating new indexs<br>";
	$query="ALTER TABLE `#__jomres_custom_text` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_custom_text to add index property_uid </b><br>";

	$query="ALTER TABLE `#__jomres_extras` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_extras to add index property_uid </b><br>";

	$query="ALTER TABLE `#__jomres_guests` ADD INDEX ( `mos_userid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_guests to add index mos_userid </b><br>";

	$query="ALTER TABLE `#__jomres_guests` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_guests to add index property_uid </b><br>";

	$query="ALTER TABLE `#__jomres_pcounter` ADD INDEX ( `p_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_pcounter to add index p_uid </b><br>";

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_town` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_propertys to add index property_town </b><br>";

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_region` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_propertys to add index property_region </b><br>";

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `property_country` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_propertys to add index property_country </b><br>";

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `published` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_propertys to add index published </b><br>";

	$query="ALTER TABLE `#__jomres_propertys` ADD INDEX ( `ptype_id` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_propertys to add index ptype_id </b><br>";

	$query="ALTER TABLE `#__jomres_rates` ADD INDEX ( `roomclass_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_rates to add index roomclass_uid </b><br>";

	$query="ALTER TABLE `#__jomres_rates` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_rates to add index property_uid </b><br>";

	$query="ALTER TABLE `#__jomres_rooms` ADD INDEX ( `room_classes_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_rooms to add index room_classes_uid </b><br>";

	$query="ALTER TABLE `#__jomres_rooms` ADD INDEX ( `propertys_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_rooms to add index propertys_uid </b><br>";

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `room_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_room_bookings to add index room_uid </b><br>";

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `date` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_room_bookings to add index date </b><br>";

	$query="ALTER TABLE `#__jomres_room_bookings` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_room_bookings to add index property_uid </b><br>";

	$query="ALTER TABLE `#__jomres_settings` ADD INDEX ( `property_uid` ) ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, couldn't alter table __jomres_settings to add index property_uid </b><br>";

	//$query="ALTER TABLE `#__jomres_tmpbooking` ADD INDEX ( `tag` ) ";
	//if (!doInsertSql($query,'') )
	//	echo "<b>Error, couldn't alter table __jomres_tmpbooking to add index tag </b><br>";

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
	<input type="hidden" type="text" name="lkey" value="<?php echo $lkey; ?>"/>
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

	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` char(255),
		`property_uid` int,
	PRIMARY KEY (`id`)
	)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int,
		`tariff_id` int,
		`roomclass_uid` int,
		`property_uid` int,
	PRIMARY KEY (`id`)
	)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
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
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` INTEGER NOT NULL AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
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

	echo "<b>Migration under way. Once completed, please check for any errors and if everything looks ok you can go to your administrator area.</b><br/> Remember that this migrator will not import any of your remote plugins as all the plugins need to be checked before they can be passed as working in v4. If you have any Jomres modules installed you must uninstall them using the Joomla extension manager (back up any copies of srch.html you may have customised before doing this) then use the Jomres Plugin manager to install updated versions of those modules.<br/><br/>";
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
				echo "<b>Error, unable to run query $query</b><br>";
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
	echo "Updating room type image paths in the __jomres_room_classes table.";echo "<br>";
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
			//echo $query."<br/>";
			if (!doInsertSql($query,'') )
				echo "<b>Error, unable to run query $query</b><br>";
			}
		}
	}

function updatePropertyFeaturePaths()
	{
	echo "Updating property feature image paths in the __jomres_hotel_features table.";echo "<br>";
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
			//echo $query."<br/>";
			if (!doInsertSql($query,'') )
				echo "<b>Error, unable to run query $query</b><br>";
			}
		}
	}
	
	



function basicTemplatesExist()
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomcompbasictemplates'.JRDS.'j00001start.class.php') )
		{
		echo "Sorry, before we can upgrade you must first uninstall the basic templates plugin as this is no longer compatible with Jomres. Please use the Joomla Extension manager to uninstall the basic templates plugin (back up any customised templates you have before doing so) then rerun this script. <br/>Once you've migrated Jomres, you'll need to go through any of your customised templates (those are the ones that you backed up) and use the new Jomres template editing feature to make any changes you need.";
		return true;
		}
	return false;
	}
	
// Table changes
function alterTables()
	{
	echo "Altering tables.";echo "<br>";
	
	//echo "Editing __jomres_extras table adding maxquantity column<br>";
	$query = "ALTER TABLE `#__jomres_extras` ADD `maxquantity` INT( 5 ) DEFAULT '1' AFTER `price`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_extras maxquantity</b><br>";
	
	
	//echo "Editing __jomres_contracts __jomres_contracts adding extrasquantities column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `extrasquantities` VARCHAR( 255 ) AFTER `extras`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts extrasquantities</b><br>";
		
	//echo "Editing __jomres_contracts table adding coupon_id column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `coupon_id` INTEGER NULL";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts coupon_id</b><br>";
		
	//echo "Editing __jomres_contracts table adding bookedout column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `bookedout` BOOL NOT NULL DEFAULT '0' ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts bookedout</b><br>";
		
	//echo "Editing __jomres_contracts table adding bookedout_timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `bookedout_timestamp` DATETIME";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts bookedout_timestamp</b><br>";
		
		
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
	//echo "Editing __jomres_rates table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `validfrom_ts` DATE AFTER `weekendonly` , ADD `validto_ts` DATE AFTER `validfrom_ts`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rates weekendonly</b><br>";
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
	echo "Dropping old tables.";echo "<br>";
	
	//echo "Dropping __jomres_tmpguests table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tmpguests`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to drop __jomres_tmpguests </b><br>";
	
	//echo "Dropping __jomres_tmpbooking table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tmpbooking`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to drop __jomres_tmpbooking </b><br>";
		
	//echo "Dropping __jomres_property_images table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_property_images`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to drop __jomres_property_images </b><br>";
		
	//echo "Dropping __jomres_tempBookingOut table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_tempBookingOut`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to drop __jomres_tempBookingOut </b><br>";
		
	//echo "Dropping __jomres_cancellations table<br>";
	$query = "DROP TABLE IF EXISTS `#__jomres_cancellations`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to drop __jomres_cancellations </b><br>";
	}


function resetMRConfigSettings()
	{
	echo "Resetting some mrConfig values to the Jomres v4 defaults.";echo "<br>";
	$mrConfig = array();
	
	//$mrConfig['showSlideshowInline']="1";
	//$mrConfig['showTariffsInline']="1";
	$mrConfig['returnRoomsLimit']="1";
	
	foreach ($mrConfig as $key=>$val)
		{
		$query = "UPDATE #__jomres_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
		echo "Updating $key to $val";echo "<br>";
		$result=doInsertSql($query,'');
		}
	
	}

function resetJRConfigSettings()
	{
	echo "Resetting some jrConfig values to the Jomres v4 defaults.";echo "<br>";
	$jrConfig = array();
	
	$jrConfig['maxwidth']				='300';
	$jrConfig['slideshow']				='tooltips';
	$jrConfig['ss_imageLocation']		='/jomres/uploadedimages/';
	$jrConfig['composite_property_details']="1";

	foreach ($jrConfig as $key=>$val)
		{
		$query = "UPDATE #__jomres_site_settings SET `value`='".$val."' WHERE `akey` = '".$key."'";
		echo "Updating $key to $val";echo "<br>";
		$result=doInsertSql($query,'');
		}
	}


function insertNewJRConfigSettings()
	{
	
	echo "Inserting new site settings";echo "<br>";
	
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
		echo "Setting $key to $val";echo "<br>";
		$result=doInsertSql($query,'');
		}
	}

function insertPluginSettings()
	{
	echo "Inserting new plugin settings if required.";echo "<br>";
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
				//echo $query."<br>";
				doInsertSql($query,'');
				}
			}
		}
	}

// Added tables
function addNewTables()
	{
	echo "Adding new tables if required.";echo "<br>";
	
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
		echo "Failed to run query: ".$query."<br/>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_fields` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`fieldname` VARCHAR( 255 ) ,
		`default_value` VARCHAR( 255 ) ,
		`description` VARCHAR( 255 ) ,
		`required` BOOL NOT NULL DEFAULT '0',
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_custom_templates` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`template_name` VARCHAR( 255 ) ,
		`value` TEXT NULL,
		PRIMARY KEY ( `uid` )
		) ";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";
		

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
		echo "Failed to run query: ".$query."<br/>";

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
		echo "Failed to run query: ".$query."<br/>";

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
		echo "Failed to run query: ".$query."<br/>";
		
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
		echo "Failed to run query: ".$query."<br/>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
		`id` int(11) NOT NULL auto_increment,
		`code` char(20),
		`description` varchar(255),
		`rate` float NOT NULL default '0',
		PRIMARY KEY  (`id`)
		)";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";

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
		echo "Failed to run query: ".$query."<br/>";
	
	$query="
	CREATE TABLE IF NOT EXISTS `#__jomcomp_cronlog` (
		`id` int NOT NULL AUTO_INCREMENT ,
		`log_details` text null,
		PRIMARY KEY ( `id` )
		);";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11),
		`property_uid` int(11),
		PRIMARY KEY(`id`)
		)";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";
	
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
		echo "Failed to run query: ".$query."<br/>";
		
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
		echo "Failed to run query: ".$query."<br/>";
		
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
		echo "Failed to run query: ".$query."<br/>";
		
	$query="CREATE TABLE IF NOT EXISTS #__jomresportal_properties_crates_xref (
		`id` int(11) AUTO_INCREMENT,
		`property_id` int UNIQUE,
		`crate_id` int,
		PRIMARY KEY(id)
		)";
	if (!doInsertSql($query))
		echo "Failed to run query: ".$query."<br/>";

		
	return true;
	}

function removepreV4JomresFiles()
	{
	echo "Removing old /components/com_jomres and /administrator/components/com_jomres files.";echo "<br>";
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS);
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS);
	//echo "Pretending to empty dir ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."<br/>";
	//echo "Pretending to empty dir ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."<br/>";
	}
	
function reinstallJomresJoomlaFiles()
	{
	echo "Copying Jomres v4 /components/com_jomres and /administrator/components/com_jomres files.";echo "<br>";
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.jomres.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."admin.jomres.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.xml",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."jomres.xml");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."uninstall.jomres.php",	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."uninstall.jomres.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."jomres.php");
	}

function copyImagesToNewPath()
	{
	echo "Copying image files from ".OLD_IMAGES_PATH." to ".NEW_IMAGES_PATH."<br/>";
	$result=dircopy(OLD_IMAGES_PATH,NEW_IMAGES_PATH);
	}

	
?>