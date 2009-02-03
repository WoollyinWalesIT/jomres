<?php
/**
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */
 
global $my,$database,$jomresConfig_absolute_path;

if (!defined('JRDS'))
	{
	$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]); // converted to uppercase
	$isWin32 = strpos($detect_os, "WIN32");
	$IIS = strpos($detect_os, "IIS");
	$signature = strtoupper($_SERVER["SERVER_SIGNATURE"]);
	$apacheSig = strpos($signature, "APACHE");
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
/*
echo dirname(realpath(__FILE__)) ;
echo "<br>";
echo JRDS;
exit;
*/
$path =  str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) ) ;
/*
//define('JOMRESINSTALLPATH_BASE', str_replace( $_SERVER['SCRIPT_NAME'], "", dirname(realpath(__FILE__)) )).JRDS ;

if ( strpos($path,"/",1) && JRDS == "\\" )  // If the first element in the path is /, but JRDS is \\
	{
	//echo "Substituting / in $path<br/>";
	$path=str_replace(JRDS,"/",$path);
	//$path=str_replace("/",JRDS,$path);
	}
*/
//echo JRDS;exit;

define('JOMRESINSTALLPATH_BASE',$path);

define('JOMRESPATH_BASE',JOMRESINSTALLPATH_BASE.JRDS."components".JRDS."com_jomres");

if (@file_exists(JOMRESINSTALLPATH_BASE .JRDS.'includes'.JRDS.'defines.php') )
	{
	define( '_JEXEC', 1 );
	}
else
	{
	define( '_VALID_MOS', 1 );
	}
define( '_JOMRESEXEC', 1 );

define ('_JOM_COMPONENTNAME',"com_jomres");

if (!file_exists(JOMRESINSTALLPATH_BASE.JRDS.'configuration.php') )
	{
	showheader();
	echo "<h1>Error. Cannot detect ".JOMRESINSTALLPATH_BASE.JRDS.'configuration.php'."</h1>";
	echo "Please ensure that you are installing Jomres into the root of your Joomla/Mambo installation, and that indeed Joomla or Mambo is installed.";
	showfooter();
	exit;
	}

if (file_exists(JOMRESINSTALLPATH_BASE .JRDS.'includes'.JRDS.'defines.php') )
	{
	define('JPATH_BASE', dirname(__FILE__) );
	}
else
	{
	if (is_readable(JOMRESINSTALLPATH_BASE.JRDS.'globals.php') )
		include_once( JOMRESINSTALLPATH_BASE.JRDS.'globals.php' );
	require_once( JOMRESINSTALLPATH_BASE.JRDS.'configuration.php' );
	if (is_readable(JOMRESINSTALLPATH_BASE .JRDS.'includes/joomla.php') )
		require_once( JOMRESINSTALLPATH_BASE.JRDS.'includes/joomla.php' );
	else
		{
		//require_once( JOMRESPATH_BASE.'/includes/mambo.php' );
		}
	}

if (!is_writable(JOMRESINSTALLPATH_BASE.JRDS.'media') )
	{
	echo "<h1>Error. The /media folder is not writable. Please correct this and reload this page. </h1><br>";
	exit;
	}
//copySiteConfig(JOMRESPATH_BASE."/administrator/components/com_jomres");  // Doesn't work because /com_jomres/ folder isn't writable by the web server. Left in in case I want to revisit this in the future.
require_once( JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'integration.php' );

global $jomres_systemLog_path,$jomresConfig_absolute_path,$jrConfig,$lkey;
$jomres_systemLog_path=$jomresConfig_absolute_path.$jrConfig['jomres_systemLog_path'];

showheader();
$folderChecksPassed=true;
if (!is_dir(JOMRESPATH_BASE.JRDS."sessions".JRDS) )
	{
	if (!@mkdir(JOMRESPATH_BASE.JRDS."sessions".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESPATH_BASE.JRDS."sessions".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}

if (!is_dir(JOMRESPATH_BASE.JRDS."temp".JRDS) )
	{
	if (!@mkdir(JOMRESPATH_BASE.JRDS."temp".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESPATH_BASE.JRDS."temp".JRDS." automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}

	
	if (!is_dir(JOMRESPATH_BASE.JRDS."updates".JRDS) )
	{
	if (!@mkdir(JOMRESPATH_BASE.JRDS."updates".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESPATH_BASE.JRDS."updates".JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}
	
if (!is_dir(JOMRESPATH_BASE.JRDS."remote_plugins".JRDS) )
	{
	if (!@mkdir(JOMRESPATH_BASE.JRDS."remote_plugins".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESPATH_BASE.JRDS."remote_plugins".JRDS." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		}
	}
	
if (!is_dir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres") )
	{
	if (!@mkdir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}

if (!is_dir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."rmtypes") )
	{
	if (!@mkdir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."rmtypes")) 
		{
		echo "<h1>Error, unable to make folder ".$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."rmtypes"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}
	
if (!is_dir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."pfeatures") )
	{
	if (!@mkdir($jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."pfeatures")) 
		{
		echo "<h1>Error, unable to make folder ".$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."pfeatures"." automatically therefore cannot upload images. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}
if ($folderChecksPassed) 
	{
	$lkey=jomresGetParam($_POST,'lkey','','string');
	$trashtables=jomresGetParam($_POST,'trashtables',0,'integer');
	$manual_install_confirmation=jomresGetParam($_POST,'manual_install_confirmation',"");
	if ($manual_install_confirmation == "install")
		define('ACTION',"Install");
	if ($manual_install_confirmation == "upgrade")
		define('ACTION',"Upgrade");

	$domain=jomresGetDomain();
	if ($domain != 'localhost')
		$connectivityTestResult=doConnectivityTest();
	else
		{
		$connectivityTestResult=true;
		}

	if (!$connectivityTestResult)
		echo "<h1>Error when testing connectivity with the jomres.net license server. Please rectify the issue and try again.</h1><br>";
	else
		{
		
		deleteCurrentLicenseFiles();
		if (empty($lkey) )
			$lkey = false;
		if (!$lkey && $trashtables < 1 )
			{
			if ($domain == 'localhost')
				$lkey='X-XXXX-11-XXXXXXXXXX-XXXXXXXX';
			if (!function_exists ('gregoriantojd') )
				echo '<h3><font="red">Note: You need the function gregoriantojd, which does not appear to be available to this version of php. Please see <a href="http://support.jomres.net/?cmd=knowledgebase&p=view&qid=73" target="_blank">the Jomres knowledgebase</a> for more information.<br></font></h3> ';
			else
				showGetKeyInput($lkey);
			}
		else
			{
			if ($trashtables == 1)
				 trashTables();
			else
				{
				makeLicenseKeyfile($lkey);
				
				if (!defined("ACTION") )
					checkPropertyTableExists();
				createComponentTableData();

				if (ACTION == "Install")   // Installing
					{
					echo "Creating Jomres tables if they don't already exist.<br>";
					createJomresTables();
					createJomresPortalBookingsTable();
					createPropertyToManagersTable();
					echo "Inserting sample data<br>";
					insertSampleData();
					echo "Importing configuration settings to database<br>";
					importSettings(0);
					echo "Making <i>admin</i> a super property manager<br>";
					makeAdminPropertyManager();
					echo "Creating images folders<br>";
					copyImages();
					saveKey2db($lkey);
					if (checkIfNewIndexRequired())
						createExtraIndexs();
					//insertIntoMainMenu();
					updatePropertyManagersToSuperAdmins();
					if (!checkTariffsTimeStampColsExists() )
						alterTariffsTimeStampCols();
					insertPortalTables();
					showCompletedText();
					}
				elseif (ACTION == "Upgrade") // Upgrading
					{
					define('ACTION',"Upgrade");
					updateEditIconConfigSetting();
					if (!checkContractsCurrencyCodeColExists() )
						alterContractsCurrencyCodeCol();
					if (!checkContractsRoomTotalColExists() )
						alterContractsRoomTotalCol();
					if (!checkContractsDiscountColExists() )
						alterContractsDiscountCol();
					if (!checkContractsCancellationColExists() )
						alterContractsCancellationCodeCol();
					if (!checkContractsRoomstariffsColExists() )
						alterContractsRoomstariffsCol();
					if (!checkTariffsWeekendOnlyColExists() )
						alterTariffsWeekendOnlyCol();
					if (!checkTariffsDayOfWeekColExists() )
						alterTariffsDayOfWeekCol();
					if (!checkPropertyToManagersTableExists())
						{
						createPropertyToManagersTable();
						updatePropertyManagersToSuperAdmins();
						}
					if (checkIfNewIndexRequired())
						createExtraIndexs();
					if (!checkTariffsTimeStampColsExists() )
						alterTariffsTimeStampCols();
					if (!checkRoomtypesSRPonlyColExists() )
						alterRoomtypesSRPonlyCol();
					if (!checkContractNotesTableExists())
						createContractNotesTable();
					if (!checkMyUserTableExists())
						createMyUserTable();
					if (!checkExtraModelExists())
						createExtraModelTable();
					if (!checkTariffTypesXREFExists())
						createTariffTypesXREFTable();
					if (!checkTariffTypesExists())
						createTariffTypesTable();
					if (!checkExtramodelForceColExists() )
						alterExtramodelForceCol();
					if (!checkUserAPIKEYColExists() )
						alterUserAPIKEYCol();
					if (!checkUserAPIKEYColExists() )
						alterUserAPIKEYCol();
					if (!checkPropertyAPIKEYColExists() )
						alterPropertyAPIKEYCol();
					if (!checkPropertyLatLongColExists() )
						alterPropertyLatLongCol();
					if (!checkJomresPortalBookingsExists() )
						createJomresPortalBookingsTable();
					if (!checkSiteSettingsExists() )
						createSiteSettingsTable();
					if (!checkContractsDiscountDetailsColExists() )
						alterContractsDiscountDetailsCol();
					if (!checkTariffsMinMaxRoomsColsExist() )
						alterTariffsMinMaxRoomsCols();
					if (!checkRoomsSupplimentsColExists() )
						alterRoomsSupplimentsCol();
					if (!checkPropertysMetadataColsExists() )
						alterPropertysMetadataCols();
					if (!checkContractsUsernameColExists() )
						alterContractsUsernameCol();
						
						
					$registry = new minicomponent_registry(true);
					$registry->regenerate_registry();
					alterCurrencyCodeToChar3();
					insertPortalTables();
					// upgradeWarning();

					echo "Data already installed, no need to re-create it<br>";
					echo "Saving key<br>";
					saveKey2db($lkey);

					showCompletedText();
					}
				updateMrConfig();
				}
			}
		}
	}
showfooter();
// Script stops here
// ALTER TABLE `jos_jomres_contracts`  DROP `cot_required`;
 //

function checkContractsUsernameColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'username'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsUsernameCol()
	{
	echo "Editing __jomres_contracts table adding username column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `username` VARCHAR(50) NULL ";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts username</b><br>";
	}
	
	
function updateMrConfig()
	{
	include(JOMRESPATH_BASE.JRDS.'jomres_config.php' );
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
			echo $query."<br>";
			doInsertSql($query,'');
			}
		}
	}

function checkPropertysMetadataColsExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_propertys LIKE 'metatitle'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterPropertysMetadataCols()
	{
	echo "Editing __jomres_propertys table adding metatitle column<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `metatitle` VARCHAR(150) NOT NULL AFTER `long`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys metatitle</b><br>";
	echo "Editing __jomres_propertys table adding metadescription column<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `metadescription` VARCHAR(150) NOT NULL AFTER `metatitle`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys metadescription</b><br>";
	}
	
	
function checkRoomsSupplimentsColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_rooms LIKE 'singleperson_suppliment'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterRoomsSupplimentsCol()
	{
	echo "Editing __jomres_rooms table adding singleperson_suppliment column<br>";
	$query = "ALTER TABLE `#__jomres_rooms` ADD `singleperson_suppliment` DOUBLE DEFAULT '0' AFTER `smoking`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rooms singleperson_suppliment</b><br>";
	}
	
function checkTariffsMinMaxRoomsColsExist()
	{
	$query="SHOW COLUMNS FROM #__jomres_rates LIKE 'minrooms_alreadyselected'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTariffsMinMaxRoomsCols()
	{
	echo "Editing __jomres_rates table adding minrooms_alreadyselected column<br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `minrooms_alreadyselected` INT( 3 ) NOT NULL DEFAULT '0' AFTER `dayofweek`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rates minrooms_alreadyselected</b><br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `maxrooms_alreadyselected` INT( 3 ) NOT NULL DEFAULT '100' AFTER `minrooms_alreadyselected`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rates maxrooms_alreadyselected</b><br>";
	}

function checkContractsDiscountDetailsColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'discount_details'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsDiscountDetailsCol()
	{
	echo "Editing __jomres_contracts table adding discount_details column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `discount_details` TEXT AFTER `cancelled_timestamp`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts discount_details</b><br>";
	}

function checkContractsRoomstariffsColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'rooms_tariffs'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsRoomstariffsCol()
	{
	echo "Editing __jomres_contracts table adding rooms_tariffs column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `rooms_tariffs` VARCHAR( 255 ) AFTER `rate_rules`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts rooms_tariffs</b><br>";
	}
	
function checkContractsCancellationColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'cancelled'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsCancellationCodeCol()
	{
	echo "Editing __jomres_contracts table adding cancelled column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `cancelled` TINYINT DEFAULT '0' AFTER `currency_code`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts cancelled</b><br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `cancelled_timestamp` datetime AFTER `cancelled`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts cancelled_timestamp</b><br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `cancelled_reason` CHAR( 255 ) NULL DEFAULT NULL AFTER `cancelled_timestamp`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts cancelled_timestamp</b><br>";
	}
	
function checkTariffsDayOfWeekColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_rates LIKE 'dayofweek'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTariffsDayOfWeekCol()
	{
	echo "Editing __jomres_rates table adding dayofweek column<br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `dayofweek` INT( 1 ) NOT NULL DEFAULT '7' AFTER `weekendonly`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rates dayofweek</b><br>";
	}


 function createSiteSettingsTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_site_settings` (
		`id` int(11) auto_increment,
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`id`)
		) ";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkSiteSettingsExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomres_site_settings') )
			return true;
		}
	return false;
	}
	
function createJomresPortalBookingsTable()
	{
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
		`manager_uid` INTEGER NOT NULL,
		`jos_id` INTEGER NOT NULL,
		`portal_booking_id` INTEGER NOT NULL,
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
	return true;
	}

function checkJomresPortalBookingsExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomresportal_bookings') )
			return true;
		}
	return false;
	}
	
	
function checkPropertyLatLongColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_propertys LIKE 'lat'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterPropertyLatLongCol()
	{
	echo "Editing __jomres_propertys table adding lat long columns<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `lat` float NULL";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys lat</b><br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `long` float NULL";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys long</b><br>";
	}
 
function checkPropertyAPIKEYColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_propertys LIKE 'apikey'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterPropertyAPIKEYCol()
	{
	echo "Editing __jomres_propertys table adding apikey column<br>";
	$query = "ALTER TABLE `#__jomres_propertys` ADD `apikey` CHAR( 255 ) NULL DEFAULT NULL";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_propertys apikey</b><br>";
	upgradeCreatePropertyAPIKeys();
	}

function upgradeCreatePropertyAPIKeys()
	{
	$query="SELECT propertys_uid FROM #__jomres_propertys";
	$propertysList=doSelectSql($query);
	if (count($propertysList)  >0)
		{
		echo "Upgrading properties, creating API keys.<br>";
		foreach ($propertysList as $p)
			{
			$apikey=createNewAPIKey();
			$query="UPDATE #__jomres_propertys SET `apikey`= '".$apikey."' WHERE `propertys_uid` = ".$p->propertys_uid;
			doInsertSql($query,'Updated Property setting apikey to '.$apikey);
			}
		}
	}
	
function checkUserAPIKEYColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_managers LIKE 'apikey'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterUserAPIKEYCol()
	{
	echo "Editing __jomres_managers table adding apikey column<br>";
	$query = "ALTER TABLE `#__jomres_managers` ADD `apikey` CHAR( 255 ) NULL DEFAULT NULL";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_managers apikey</b><br>";
	upgradeCreateManagersAPIKeys();
	}

function upgradeCreateManagersAPIKeys()
	{
	$query="SELECT userid FROM #__jomres_managers";
	$managerList=doSelectSql($query);
	if (count($managerList)  >0)
		{
		echo "Upgrading managers, creating API keys.<br>";
		foreach ($managerList as $m)
			{
			$apikey=createNewAPIKey();
			$query="UPDATE #__jomres_managers SET `apikey`= '".$apikey."' WHERE `userid` = ".$m->userid;
			doInsertSql($query,'Updated Property Manager setting apikey to '.$apikey);
			}
		}
	}
	
function alterCurrencyCodeToChar3()
	{
	$query="ALTER TABLE `#__jomres_contracts` CHANGE `currency_code` `currency_code` CHAR( 3 ) NULL DEFAULT NULL";
	//echo $query;
	doInsertSql($query,'');
	}
 
function checkExtramodelForceColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomcomp_extrasmodels_models LIKE 'force'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterExtramodelForceCol()
	{
	echo "Editing __jomcomp_extrasmodels_models table adding force column<br>";
	$query = "ALTER TABLE `#__jomcomp_extrasmodels_models` ADD `force` BOOL NOT NULL DEFAULT '0'";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomcomp_extrasmodels_models force</b><br>";
	}

function createTariffTypesXREFTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` INT NOT NULL,
		`tariff_id` INT NOT NULL,
		`roomclass_uid` INT NOT NULL,
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkTariffTypesXREFExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomcomp_tarifftype_rate_xref') )
			return true;
		}
	return false;
	}

function createTariffTypesTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`name` CHAR(255),
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkTariffTypesExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomcomp_tarifftypes') )
			return true;
		}
	return false;
	}


function createExtraModelTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`extra_id` INT NOT NULL,
		`model` INT NOT NULL,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkExtraModelExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomcomp_extrasmodels_models') )
			return true;
		}
	return false;
	}

function createMyUserTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_mufavourites` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`my_id` INT NOT NULL,
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkMyUserTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomcomp_mufavourites') )
			return true;
		}
	return false;
	}

function createContractNotesTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`contract_uid` INT NOT NULL,
		`note` TEXT,
		`timestamp` datetime,
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkContractNotesTableExists()
	{
	global $jomresConfig_db;
	$tablesFound=false;
	$query="SHOW TABLES";
	$result=doSelectSql($query,$mode=FALSE);
	$string="Tables_in_".$jomresConfig_db;
	foreach ($result as $r)
		{
		if (strstr($r->$string, '__jomcomp_notes') )
			return true;
		}
	return false;
	}

function checkRoomtypesSRPonlyColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_room_classes LIKE 'srp_only'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterRoomtypesSRPonlyCol()
	{
	echo "Editing __jomres_room_classes table adding srp_only column<br>";
	$query = "ALTER TABLE `#__jomres_room_classes` ADD `srp_only` BOOL NOT NULL DEFAULT '0'";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_room_classes srp_only</b><br>";
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
	echo "Editing __jomres_rates table adding timestamp column<br>";
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


function updatePropertyManagersToSuperAdmins()
	{
	// This distinction will tell us if the database has already been upgraded for the new user handling. If pu has been set any where, then users have already been converted to the new user handling
	$query="SELECT userid FROM #__jomres_managers WHERE pu = '1'";
	$supermanagersList=doSelectSql($query);
	if (count($supermanagersList)  <1)
		{
		$query="SELECT propertys_uid FROM #__jomres_propertys";
		$propertysList=doSelectSql($query);
		$numberOfProperties=count($propertysList);
		$query="SELECT userid,username,currentproperty,property_uid FROM #__jomres_managers";
		$managersList=doSelectSql($query);
		$managersArray=array();
		foreach ($managersList as $m)
			{
			$isSuperManager=false;
			foreach ($propertysList as $p)
				{
				$query="INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ('".$m->userid."','".$p->propertys_uid."')";
				doInsertSql($query,'');
				if ($m->property_uid == "0")
					$isSuperManager=true;
				}
			if ($isSuperManager)
				{
				echo "Upgrading ".$m->username." to Super Property Manager<br>";
				$query = "UPDATE #__jomres_managers SET `pu` = '1' WHERE userid = '".$m->userid."'";
				doInsertSql($query,'Updated Super Property Manager setting to '.$isSuperPropertyManager);
				}
			}
		}
	}


	
function checkTariffsWeekendOnlyColExists()
	{
	$query="SHOW COLUMNS FROM #__jomres_rates LIKE 'weekendonly'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTariffsWeekendOnlyCol()
	{
	echo "Editing __jomres_rates table adding weekendonly column<br>";
	$query = "ALTER TABLE `#__jomres_rates` ADD `weekendonly` BOOL NOT NULL DEFAULT '0' AFTER `allow_we`";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_rates weekendonly</b><br>";
	}

function createPropertyToManagersTable()
	{
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
		`id` int(11) NOT NULL auto_increment,
		`manager_id` int(11) NOT NULL,
		`property_uid` int(11) NOT NULL,
		PRIMARY KEY(`id`)
		)";
	$result=doInsertSql($query,'');
	return $result;
	}

function checkPropertyToManagersTableExists()
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
		if (strstr($r->$string, 'jomres_managers_propertys_xref') )
			return true;
		}
	return false;
	}

function makeLicenseKeyfile($license_key)
	{
	$user_defined_string = '230a25e276da';
	validateLicensekeyFile($license_key);
	}

function insertIntoMainMenu()
	{
	echo "Adding Jomres to mainmenu<br>";
	$query="INSERT INTO #__menu (
	`menutype`,`name`,`link`,`type`,`published`,`parent`,`componentid`,`sublevel`,`ordering`,`checked_out`,`checked_out_time`,`pollid`,`browserNav`,`access`,`utaccess`
	)
	VALUES
	(
	'mainmenu','Jomres','index.php?option=com_jomres','components','1','0','19','0','2','0','0000-00-00 00:00:00','0','0','0','0'
	)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add Jomres to main menu".$errno."</b><br>";
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
	return false;
	}

function checkContractsCurrencyCodeColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'currency_code'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsCurrencyCodeCol()
	{
	echo "Editing __jomres_contracts table adding currency_code column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `currency_code` float";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts currency_code</b><br>";
	}

function checkContractsRoomTotalColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'room_total'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsRoomTotalCol()
	{
	echo "Editing __jomres_contracts table adding room_total column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `room_total` float";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts room_total</b><br>";
	}

function  checkContractsDiscountColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'discount'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsDiscountCol()
	{
	echo "Editing __jomres_contracts table adding discount column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `discount` float";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add __jomres_contracts discount</b><br>";
	}

/*
function checkminintervalColExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_tmpbooking LIKE 'mininterval'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterminintervalCol()
	{
	echo "Editing _jomres_tmpbooking table adding mininterval column<br>";
	$query = "ALTER TABLE `#__jomres_tmpbooking` ADD `mininterval` int(3)";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add tmpbooking mininterval</b><br>";
	}
*/
/*
function checkTmpGuestsTimeStampExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_tmpguests LIKE 'timestamp'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTmpGuestsAddTimeStamp()
	{
	echo "Adding tmpguests table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_tmpguests` ADD `timestamp` datetime ON UPDATE CURRENT_TIMESTAMP";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add tmpguests timestamp</b><br>";
	}
*/
/*
function checkTmpBookingTimeStampExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_tmpbooking LIKE 'timestamp'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterTmpBookingAddTimeStamp()
	{
	echo "Adding tmpbooking table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_tmpbooking` ADD `timestamp` datetime ON UPDATE CURRENT_TIMESTAMP";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add tmpbooking timestamp</b><br>";
	}
*/
/*
function checkContractsTimeStampExists()
	{
	$guestsTimestampInstalled=true;
	$query="SHOW COLUMNS FROM #__jomres_contracts LIKE 'timestamp'";
	$result=doSelectSql($query);
	if (count($result)>0)
		{
		return true;
		}
	return false;
	}

function alterContractsAddTimeStamp()
	{
	echo "Adding contracts table adding timestamp column<br>";
	$query = "ALTER TABLE `#__jomres_contracts` ADD `timestamp` datetime ON UPDATE CURRENT_TIMESTAMP";
	if (!doInsertSql($query,'') )
		echo "<b>Error, unable to add contracts timestamp</b><br>";
	}
*/

function updateEditIconConfigSetting()
	{
	/*
	$query="SELECT value FROM #__jomres_settings WHERE akey = 'editiconsize' LIMIT 1";
	$result=doSelectSql($query,1);
	if ($result=="small" || $result=="large")
		return;
	$query="UPDATE #__jomres_settings SET `value` = 'small' WHERE akey = 'editiconsize'";
	doInsertSql($query,'');
	return;
	*/
	}


function copyImages()
	{
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Access.png', JOMRESINSTALLPATH_BASE.'/images/stories/jomres/pfeatures/'.JRDS.'facilities_Disabled_Access.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Disabled_Facilities.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'facilities_Disabled_Facilities.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Not_Permitted.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Not_Permitted.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Dogs_Permitted.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'facilities_Dogs_Permitted.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Information.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'facilities_Information.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'facilities_Internet.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'facilities_Internet.png');

	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'24hour.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'24hour.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'air_conditioning.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'air_conditioning.png');

	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'airport_nearby.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'airport_nearby.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'allinc.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'allinc.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'baby_friendly.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'baby_friendly.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'xmas_partys.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'xmas_partys.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'world_heritage.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'world_heritage.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wildlife.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'wildlife.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wifi.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'wifi.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'whalewatching.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'whalewatching.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'weddings.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'weddings.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'wc.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'wc.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'walking.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'walking.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'visitor_centre.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'visitor_centre.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'valet_parking.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'valet_parking.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'tv_in_room.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'tv_in_room.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'toilets.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'toilets.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'tennis.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'tennis.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'telephone.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'telephone.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'sunbed.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'sunbed.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'snorkelling.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'snorkelling.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'smokers_welcome.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'smokers_welcome.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'Skionsite.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'Skionsite.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'shuttle_service.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'shuttle_service.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'shower_only.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'shower_only.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'scuba.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'scuba.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'scenicviews.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'scenicviews.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'sailing.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'sailing.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'room_telephone.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'room_telephone.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'room_service.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'room_service.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'riding.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'riding.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'restraunt.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'restraunt2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'restraunt2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'ranger.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'ranger.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'quietlocation.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'quietlocation.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'pool.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'pool.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'play_area.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'play_area.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'picnic_area.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'picnic_area.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'pets_welcome.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'pets_welcome.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'parking.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'parking.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'Ownermanaged.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'Ownermanaged.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'other_accommodation.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'other_accommodation.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'no_smoking.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'no_smoking.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'nationaltrust.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'nationaltrust.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'mountain_bike.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'mountain_bike.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'meeting_room.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'meeting_room.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'medicare.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'medicare.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'laundry_service.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'laundry_service.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'language.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'language.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'jacuzzi.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'jacuzzi.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'iron.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'iron.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'internet.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'internet.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'information.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'information.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'info2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'info2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'in_room_teacoffee.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'in_room_teacoffee.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hotel_safe.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'hotel_safe.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'honeymoon_friendly.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'honeymoon_friendly.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'historichouses.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'historichouses.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hiking.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'hiking.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'helicopterpad.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'helicopterpad.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'haunted.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'haunted.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hairdryer.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'hairdryer.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'hairdresser.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'hairdresser.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gym.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'gym.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gym2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'gym2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'guided_tours.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'guided_tours.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'groups.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'groups.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'golf.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'golf.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'giftshop.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'giftshop.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gastronomicrestaurant.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'gastronomicrestaurant.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'gardens.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'gardens.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fridge.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fridge.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fourwd_access.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fourwd_access.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'forrest_nearby.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'forrest_nearby.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fishing.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fishing.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fishing2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fishing2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fireplace.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fireplace.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees_pound.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fees_pound.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees_euro.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fees_euro.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fees.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'fees.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'entrance_fees.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'entrance_fees.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'englishheritage.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'englishheritage.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'elevator.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'elevator.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'DVDVideo.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'DVDVideo.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'drinking_water.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'drinking_water.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_permitted.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'dogs_permitted.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'dogs_not_permitted.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'dogs_not_permitted.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disco.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'disco.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_facilities.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'disabled_facilities.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'disabled_access.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'disabled_access.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'cycle_paths.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'cycle_paths.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'croquet.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'croquet.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'conference_facilities.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'conference_facilities.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'concierge.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'concierge.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'cinema.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'cinema.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'CDplayer.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'CDplayer.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'casino.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'casino.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'caravan.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'caravan.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'car_rental.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'car_rental.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'canoeing.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'canoeing.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_fees.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'camping_fees.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'camping_area.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'camping_area.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'campfire.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'campfire.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'board_walk.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'board_walk.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bird_hide.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'bird_hide.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'beach.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'beach.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'beach2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'beach2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bbq_facilities.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'bbq_facilities.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bath_tub.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'bath_tub.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bar.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'bar.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'bar2.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'bar2.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'balcony.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'balcony.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'zodiacexcursions.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'pfeatures'.JRDS.'zodiacexcursions.png');

	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'double.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'double.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'fourposter.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'fourposter.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'single.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'single.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'twin.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'twin.png');

	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'1bedroom.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'1bedroom.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'2bedrooms.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'2bedrooms.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'3bedrooms.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'3bedrooms.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'4bedrooms.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'4bedrooms.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'5bedrooms.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'5bedrooms.png');
	$result=copy(JOMRESINSTALLPATH_BASE.JRDS.'components'.JRDS.'com_jomres'.JRDS.'images'.JRDS.'icons'.JRDS.'6plusbedrooms.png', JOMRESINSTALLPATH_BASE.JRDS.'images'.JRDS.'stories'.JRDS.'jomres'.JRDS.'rmtypes'.JRDS.'6plusbedrooms.png');
	}


function showCompletedText()
	{
	global $jomresConfig_live_site;
	echo '<br>Thank you for installing Jomres. <a href="'.$jomresConfig_live_site.'/administrator/" target="_blank" >You may now go to your Joomla/Mambo backend and configure Jomres</a><br>';
	echo '<br>Please remember to delete the file <i>install_jomres.php</i> from your root folder<br>';
	echo '<br>If you wish you can go straight to your Jomres install and start editing your property.<a href="'.$jomresConfig_live_site.'/index.php?option=com_jomres" target="_blank" >To enable the property manager functionality simply log in as "admin"</a><br>';
	}


function saveKey2db($lkey)
	{
	$lkey = trim($lkey);
	$query="SELECT value FROM #__jomres_settings WHERE property_uid LIKE '0' AND akey LIKE 'jomres_licensekey'";
	$settingsList=doSelectSql($query);
	if (count($settingsList)==0)
		$query="INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('0','jomres_licensekey','$lkey')";
	else
		$query="UPDATE #__jomres_settings SET `value`='".$lkey."' WHERE property_uid LIKE '0' and akey LIKE 'jomres_licensekey'";
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
	$string="Tables_in_".strtolower($jomresConfig_db);
	echo "Looking for ".$jomresConfig_dbprefix.'jomres_propertys<br>';
	$nullcounter=0;
	foreach ($result as $r)
		{
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

function createComponentTableData()
	{
	$query="SELECT name FROM #__components WHERE `name` = 'Jomres' AND `link` = 'option=com_jomres'";
	$result=doSelectSql($query);
	if (count($result)==1)
		return true;
	
	$query="DELETE FROM #__components WHERE `option` = 'com_jomres'";
	$result=doInsertSql($query,"");
	$extraClause="";
	$extraClausePara="";
	if (_JOMRES_NEWJOOMLA == 1)
		{
		$extraClause=",`enabled`";
		$extraClausePara=",'1'";
		}
	$query="INSERT INTO #__components
	(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`".$extraClause.")
	VALUES
	('Jomres','option=com_jomres','0','0','option=com_jomres','Jomres','com_jomres','0','../components/com_jomres/images/jricon.png','0',' '".$extraClausePara.")
	";
	$result=doInsertSql($query,"");
	if ($result)
		{
		$parent=$result;
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Global Room types','','0','$parent','option=com_jomres&task=listGlobalroomTypes','Show Global Room types','com_jomres','4','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Global Property Features','','0','$parent','option=com_jomres&task=listPfeatures','Show Global Property Features','com_jomres','3','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Property types','','0','$parent','option=com_jomres&task=listPropertyTypes','Show Property types','com_jomres','2','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Profiles','','0','$parent','option=com_jomres&task=listMosUsers','Show Profiles','com_jomres','1','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Edit Site Configuration','','0','$parent','option=com_jomres&task=showSiteConfig','Edit Site Configuration','com_jomres','0','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Logs','','0','$parent','option=com_jomres&task=listLogs','Logs','com_jomres','0','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Plugins','','0','$parent','option=com_jomres&task=showplugins','Plugins','com_jomres','0','../components/com_jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		}
	else
		echo "Unable to create main Jomres admin menu option<br>";
	}

function createJomresTables()
	{
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
		`extra_id` INT NOT NULL,
		`model` INT NOT NULL,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		)";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_extrasmodels_models </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_mufavourites` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`my_id` INT NOT NULL,
		`property_uid` INT NOT NULL,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomcomp_mufavourites </b><br>";


	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`contract_uid` INT NOT NULL,
		`note` TEXT,
		`timestamp` datetime,
		`property_uid` INT NOT NULL,
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
		`variance` DOUBLE NOT NULL,
		`published` TINYINT NOT NULL DEFAULT '1',
		`property_uid` VARCHAR(11),
		`order` INT( 11 ) NOT NULL DEFAULT '0',
		PRIMARY KEY(id)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_customertypes </b><br>";
	/*
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_tmpguests` (
		`id` int(11) NOT NULL auto_increment,
		`guests_uid` INT( 11 ) NOT NULL DEFAULT '0',
		`mos_userid` INT( 11 ) NOT NULL DEFAULT '0',
		`existing_id` VARCHAR(255) NULL,
		`firstname` VARCHAR(255) NULL,
		`surname` VARCHAR(255) NULL,
		`house` VARCHAR(255) NULL,
		`street` VARCHAR(255) NULL,
		`town` VARCHAR(255) NULL,
		`region` VARCHAR(255) NULL,
		`country` VARCHAR(255) NULL,
		`postcode` VARCHAR(45) NULL,
		`tel_landline` VARCHAR(255) NULL,
		`tel_mobile` VARCHAR(255) NULL,
		`tel_fax` VARCHAR(255) NULL,
		`ccard_no`VARCHAR(45) NULL,
		`ccard_issued` VARCHAR(45) NULL,
		`ccard_expiry` VARCHAR(45) NULL,
		`ccard_iss_no` VARCHAR(45) NULL,
		`ccard_name` VARCHAR(45) NULL,
		`ccv` VARCHAR(45) NULL,
		`type` VARCHAR(45) NULL,
		`property_uid` VARCHAR(11),
		`email` VARCHAR(100) NULL,
		`tag` VARCHAR(255),
		`timestamp` datetime,
		PRIMARY KEY(id),
		INDEX(`tag`)
		) ";
	$result=doInsertSql($query,"");
	*/

	/*
	$query="CREATE TABLE IF NOT EXISTS `#__jomres_tmpbooking` (
		`id` int(11) auto_increment,
		`requestedRoom` VARCHAR(255),
		`rate_pernight` DOUBLE NOT NULL,
		`variancetypes`	MEDIUMTEXT NULL,
		`varianceuids`	MEDIUMTEXT NULL,
		`varianceqty` TEXT NULL,
		`variancevals` TEXT NULL,
		`coupon_id` VARCHAR(11),
		`coupon` TEXT NULL,
		`lastminute_id` VARCHAR(11),
		`agent_booking` INT(1),
		`arrivalDate` VARCHAR(255),
		`departureDate` VARCHAR(255),
		`stayDays` VARCHAR(255),
		`dateRangeString`MEDIUMTEXT NULL,
		`guests_uid` VARCHAR(255),
		`property_uid` VARCHAR(11),
		`rates_uid` VARCHAR(255),
		`tag` CHAR(255),
		`resource` VARCHAR(255),
		`single_person_suppliment` DOUBLE NOT NULL,
		`deposit_required` VARCHAR(6),
		`contract_total` DOUBLE NOT NULL,
		`smoking` INT(1) DEFAULT '0',
		`extrasvalue` DOUBLE NOT NULL,
		`extras` TEXT NULL,
		`total_discount` DOUBLE NOT NULL,
		`depositpaidsuccessfully` TINYINT DEFAULT '0',
		`tax` DOUBLE( 11, 2 ) DEFAULT '0' NOT NULL,
		`booker_class` VARCHAR(3),
		`ok_to_book`INT(1),
		`beds_available`int(11),
		`referrer` VARCHAR(255),
		`error_log` TEXT NULL,
		`total_in_party` int(11),
		`room_total` DOUBLE NOT NULL,
		`lang` VARCHAR(255),
		`timestamp` datetime,
		`mininterval` int(3),
		PRIMARY KEY	(`id`),
		INDEX(`tag`)
		) ";
	$result=doInsertSql($query,"");
	*/

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pcounter` (
		`count` int ,
		`p_uid` int(11) NOT NULL PRIMARY KEY,
		`p_view` int(11) NOT NULL
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_pcounter </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_pluginsettings` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`prid` INT( 11 ) NOT NULL ,
		`plugin` VARCHAR( 255 ) NOT NULL ,
		`setting` TEXT NULL,
		`value` VARCHAR( 255 ) NOT NULL ,
		PRIMARY KEY (`id`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_pluginsettings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_ptypes` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`ptype` VARCHAR( 255 ) NOT NULL ,
		`ptype_desc` VARCHAR( 255 ) NOT NULL ,
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
		`property_uid` INT( 11 ) NOT NULL ,
		`language` VARCHAR( 255 ) NOT NULL ,
		`reserved` VARCHAR( 255 ) NOT NULL ,
		PRIMARY KEY ( `uid` )
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_custom_text </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_extras` (
		`uid` INT( 11 ) NOT NULL AUTO_INCREMENT ,
		`name` VARCHAR( 255 ) NOT NULL ,
		`desc` TEXT NULL,
		`price` DOUBLE DEFAULT '0',
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
		`owner` int( 11 ) NOT NULL ,
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
		`owner` int( 11 ) NOT NULL ,
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
		`property_uid` int( 11 ) NOT NULL ,
		`akey`	VARCHAR(255),
		`value`	VARCHAR(255),
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_settings </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_room_images` (
		`uid` int(11) auto_increment,
		`roomid` int( 11 ) NOT NULL ,
		`filelocation` text NOT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_images </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_property_images` (
		`uid` int(11) auto_increment,
		`propertyid` int( 11 ) NOT NULL ,
		`filelocation` text NOT NULL,
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_property_images </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_tempBookingOut` (
		`uid` int(11) auto_increment,
		`contract_uid` int(11) NOT NULL,
		`contract_agreed_row` TEXT NULL,
		`extra_services_row` TEXT NULL,
		`grand_total_row` TEXT NULL,
		PRIMARY KEY	(`uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_tempBookingOut </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_extraServices` (
		`extraservice_uid` int(11) auto_increment,
		`service_description` VARCHAR(255),
		`service_value` VARCHAR(255),
		`contract_uid` VARCHAR(11),
		`property_uid` VARCHAR(11),
		PRIMARY KEY	(`extraservice_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_extraServices </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_contracts` (
		`contract_uid` int(11) auto_increment,
		`arrival` CHAR( 10 ) DEFAULT NULL,
		`departure` CHAR( 10 ) DEFAULT NULL,
		`rates_uid` INTEGER NOT NULL,
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
		`property_uid` INTEGER NOT NULL,
		`cot_required` TINYINT DEFAULT '0' NOT NULL,
		`single_person_suppliment` VARCHAR( 11 ) DEFAULT '0',
		`multi_room_booking` TINYINT DEFAULT '0' NOT NULL,
		`smoking` TINYINT DEFAULT '0' NOT NULL,
		`extras` TEXT NULL,
		`extrasvalue` DOUBLE NOT NULL,
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
		PRIMARY KEY(`contract_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_contracts </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_cancellations` (
		`cancellation_uid` int(11) NOT NULL auto_increment,
		`guest_uid` VARCHAR( 40 ) NOT NULL ,
		`forfeit_retained` BOOL NULL,
		`forfeit` TEXT NULL,
		`date_cancelled` VARCHAR( 10 ) DEFAULT NULL,
		`forfeit_redeemed`	TINYINT DEFAULT '0' NOT NULL,
		`date_forfeit_redeemed` VARCHAR( 10 ) DEFAULT NULL,
		`contract_uid` VARCHAR( 40 ) NOT NULL ,
		`reception_id`VARCHAR( 40 ) NOT NULL ,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`cancellation_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_cancellations </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_bookedout` (
		`bookout_uid` int(11) NOT NULL auto_increment,
		`guest_uid` VARCHAR( 40 ) NOT NULL ,
		`paid_in_full` BOOL NULL,
		`totalcharge` TEXT NULL,
		`items` TEXT NULL,
		`date_bookedout` VARCHAR( 10 ) DEFAULT NULL,
		`contract_uid` VARCHAR( 40 ) NOT NULL ,
		`reception_id`VARCHAR( 40 ) NOT NULL ,
		`room_uid`VARCHAR( 40 ) NOT NULL ,
		`property_uid` VARCHAR(11),
		PRIMARY KEY(`bookout_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_bookedout </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_rates` (
		`rates_uid` int(11) NOT NULL auto_increment,
		`rate_title` VARCHAR(255) NOT NULL,
		`rate_description` TEXT NULL,
		`validfrom` varchar(10),
		`validto` varchar(10),
		`roomrateperday` DOUBLE DEFAULT '0',
		`mindays` INTEGER NULL,
		`maxdays` INTEGER NULL,
		`minpeople` INTEGER NULL,
		`maxpeople` INTEGER NULL,
		`roomclass_uid`	varchar(10),
		`ignore_pppn`BOOL NOT NULL,
		`allow_ph`BOOL DEFAULT '1' NOT NULL,
		`allow_we`BOOL DEFAULT '1' NOT NULL,
		`weekendonly`BOOL DEFAULT '0' NOT NULL,
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
		`black_booking` BOOL NOT NULL,
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
		`room_class_abbv` VARCHAR(20) NULL,
		`room_class_full_desc` VARCHAR(255) NULL,
		`image` TEXT NULL,
		`property_uid` VARCHAR(11),
		`srp_only` BOOL NOT NULL,
		PRIMARY KEY(`room_classes_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_room_classes </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_rooms` (
		`room_uid` int(11) NOT NULL auto_increment,
		`room_classes_uid` INTEGER NOT NULL,
		`propertys_uid` INTEGER NOT NULL,
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
		PRIMARY KEY(`hotel_features_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_hotel_features </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_managers` (
		`manager_uid` int(11) NOT NULL auto_increment,
		`userid` int(11) NOT NULL,
		`username` VARCHAR(255),
		`property_uid` int(11),
		`access_level` int(2),
		`currentproperty` INT( 11 ) DEFAULT '0' NOT NULL,
		`pu` INT( 1 ) DEFAULT '0' NOT NULL,
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		PRIMARY KEY	(`manager_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_managers </b><br>";

	$query="CREATE TABLE IF NOT EXISTS `#__jomres_propertys` (
		`propertys_uid` int(11) NOT NULL auto_increment,
		`property_name` VARCHAR(255) NOT NULL,
		`property_street` VARCHAR(255) NULL,
		`property_town` VARCHAR(255) NULL,
		`property_region` VARCHAR(255) NOT NULL,
		`property_country` VARCHAR(255) NOT NULL,
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
		`stars` int NOT NULL,
		`ptype_id` INT( 11 ) DEFAULT '0' NOT NULL,
		`apikey` CHAR( 255 ) NULL DEFAULT NULL,
		`lat` float NULL,
		`long` float NULL,
		`metatitle` VARCHAR(150) NOT NULL,
		`metadescription` VARCHAR(150) NOT NULL,
		PRIMARY KEY(`propertys_uid`)
		) ";
	$result=doInsertSql($query,"");
	if (!$result )
		echo "<b>Error creating table table __jomres_propertys </b><br>";
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


		$result=doInsertSql("delete FROM `#__jomres_property_images`","");


		$result=doInsertSql("delete FROM `#__jomres_tempBookingOut`","");


		$result=doInsertSql("delete FROM `#__jomres_extraServices`","");


		$result=doInsertSql("delete FROM `#__jomres_contracts`","");


		$result=doInsertSql("delete FROM `#__jomres_cancellations`","");


		$result=doInsertSql("delete FROM `#__jomres_bookedout`","");


		$result=doInsertSql("delete FROM `#__jomres_rates`","");


		$result=doInsertSql("delete FROM `#__jomres_guests`","");


		$result=doInsertSql("delete FROM `#__jomres_room_bookings`","");


		$result=doInsertSql("delete FROM `#__jomres_room_classes`","");


		$result=doInsertSql("delete FROM `#__jomres_rooms`","");


		$result=doInsertSql("delete FROM `#__jomres_room_features`","");


		$result=doInsertSql("delete FROM `#__jomres_hotel_features`","");


		$result=doInsertSql("delete FROM `#__jomres_propertys`","");


		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (1, 'Sky', 'Sky TV in every room', NULL, '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (2, 'Disabled access', 'Disabled access available', 'images/stories/jomres/pfeatures/facilities_Disabled_Access.png', '1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (3, 'Airport', 'Close to the airport', 'images/stories/jomres/pfeatures/airport_nearby.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (4, 'Minibar', 'Minibar in room', 'images/stories/jomres/pfeatures/air_conditioning.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (5, 'All Inclusive', 'All inclusive rates available', 'images/stories/jomres/pfeatures/allinc.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (6, 'Family Friendly', 'Children Welcome', 'images/stories/jomres/pfeatures/baby_friendly.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (7, 'Balcony', 'Some rooms have balconies', 'images/stories/jomres/pfeatures/balcony.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (8, 'Waiter', 'Waiter Service', 'images/stories/jomres/pfeatures/bar.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (9, 'Bar', 'Licensed bar on premises', 'images/stories/jomres/pfeatures/bar2.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (10, 'Bath', 'Bath in every room', 'images/stories/jomres/pfeatures/bath_tub.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (11, 'Fireplace', 'Enjoy the ambiance of a natural fire', 'images/stories/jomres/pfeatures/bbq_facilities.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (12, 'Beach', 'Close to the beach', 'images/stories/jomres/pfeatures/beach.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (13, 'Birdwatching', 'Bird hide onsite or nearby', 'images/stories/jomres/pfeatures/bird_hide.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (14, 'Boardwalk', 'Boardwalk on site', 'images/stories/jomres/pfeatures/board_walk.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (15, 'Campfires', 'Campfires allowed', 'images/stories/jomres/pfeatures/campfire.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (16, 'Tents', 'Tents for hire', 'images/stories/jomres/pfeatures/camping_fees.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (17, 'Canoeing', 'Canoeing/Kayaking', 'images/stories/jomres/pfeatures/canoeing.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (18, 'Caravans', 'Caravanning facilities', 'images/stories/jomres/pfeatures/caravan.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (19, 'Car rental', 'Car rental can be arranged', 'images/stories/jomres/pfeatures/car_rental.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (20, 'Casino', 'Casino on premesis', 'images/stories/jomres/pfeatures/casino.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (21, 'Clubbing', 'Nightclub onsite or nearby', 'images/stories/jomres/pfeatures/CDplayer.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (22, 'Safe', 'Safe available', 'images/stories/jomres/pfeatures/hotel_safe.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (23, 'Conference', 'Conference facilities', 'images/stories/jomres/pfeatures/conference_facilities.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (24, 'Cycle path', 'Cycle paths nearby', 'images/stories/jomres/pfeatures/cycle_paths.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (25, 'Disabled access', 'Disabled facilites available', 'images/stories/jomres/pfeatures/disabled_access.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (26, 'Disabled toilet faci', 'Disabled WC available', 'images/stories/jomres/pfeatures/disabled_facilities.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (27, 'No dogs', 'Dogs not welcome', 'images/stories/jomres/pfeatures/dogs_not_permitted.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (28, 'Dogs welcome', 'Dog friendly ', 'images/stories/jomres/pfeatures/dogs_permitted.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (29, 'DVD', 'Rooms have DVD players', 'images/stories/jomres/pfeatures/DVDVideo.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (30, 'Elevator', 'Elevator ', 'images/stories/jomres/pfeatures/elevator.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (31, 'English Heritage', 'English Heritage sites nearby', 'images/stories/jomres/pfeatures/englishheritage.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (32, '24hr service', '24hr Room service', 'images/stories/jomres/pfeatures/24hour.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (33, 'Bureau de change', 'Bureau de change available onsite', 'images/stories/jomres/pfeatures/fees.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (34, 'Bureau de change', 'Bureau de change available onsite', 'images/stories/jomres/pfeatures/fees_euro.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (35, 'Bureau de change', 'Bureau de change available onsite', 'images/stories/jomres/pfeatures/fees_pound.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (36, 'Fishing', 'Fishing available onsite or nearby', 'images/stories/jomres/pfeatures/fishing.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (37, 'Gourmet Restaurant', 'Gourmet Restraunt onsite', 'images/stories/jomres/pfeatures/gastronomicrestaurant.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (38, 'Golf', 'Golf course on site or nearby', 'images/stories/jomres/pfeatures/golf.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (39, 'Tours', 'Tours depart from this location', 'images/stories/jomres/pfeatures/guided_tours.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (40, 'Gym', 'Gymnasium onsite', 'images/stories/jomres/pfeatures/gym2.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (41, 'Hairdresser', 'Hairdresser onsite', 'images/stories/jomres/pfeatures/hairdresser.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (42, 'Hairdryer', 'Hair dryer in every room', 'images/stories/jomres/pfeatures/hairdryer.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (43, 'Haunted', 'Ghoulies and Ghosties in the rafters', 'images/stories/jomres/pfeatures/haunted.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (44, 'Helipad', 'Helicopter pad', 'images/stories/jomres/pfeatures/helicopterpad.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (45, 'Hiking', 'Popular hiking area', 'images/stories/jomres/pfeatures/hiking.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (46, 'Information', 'Information services available onsite', 'images/stories/jomres/pfeatures/info2.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (47, 'WWW', 'Internet access available', 'images/stories/jomres/pfeatures/internet.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (48, 'Beverages', 'Beverages in all rooms', 'images/stories/jomres/pfeatures/in_room_teacoffee.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (49, 'Iron', 'Iron in every room', 'images/stories/jomres/pfeatures/iron.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (50, 'Jacuzzi', 'Jacuzzi onsite', 'images/stories/jomres/pfeatures/jacuzzi.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (51, 'National Trust', 'National Trust', 'images/stories/jomres/pfeatures/nationaltrust.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (52, 'No smoking', 'Smoke free establishment', 'images/stories/jomres/pfeatures/no_smoking.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (53, 'Owner managed', 'Owner managed property', 'images/stories/jomres/pfeatures/Ownermanaged.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (54, 'Parking', 'Parking available', 'images/stories/jomres/pfeatures/parking.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (55, 'Pets welcome', 'Pet friendly', 'images/stories/jomres/pfeatures/pets_welcome.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (56, 'Picnic area', 'Picnicers welcome', 'images/stories/jomres/pfeatures/picnic_area.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (57, 'Play area', 'Children''s play area onsite', 'images/stories/jomres/pfeatures/play_area.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (58, 'Pool', 'Swiming', 'images/stories/jomres/pfeatures/pool.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (59, 'Quiet/Rural ', 'Property is in a quiet and/or rural location', 'images/stories/jomres/pfeatures/quietlocation.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (60, 'Ranger', 'Ranger station here', 'images/stories/jomres/pfeatures/ranger.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (61, 'Restaurant', 'Restraunt onsite', 'images/stories/jomres/pfeatures/restraunt2.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (62, 'Pony Trekking', 'Pony trekking onsite or nearby', 'images/stories/jomres/pfeatures/riding.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (63, 'Telephone', 'Telephone in every room', 'images/stories/jomres/pfeatures/room_telephone.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (64, 'Water sports', 'Water sport facilities onsite or nearby', 'images/stories/jomres/pfeatures/sailing.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (65, 'Scuba', 'Scuba diving arranged', 'images/stories/jomres/pfeatures/scuba.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (66, 'Scenic views', 'Scenic views ', 'images/stories/jomres/pfeatures/scenicviews.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (67, 'Showers', 'showers in every room', 'images/stories/jomres/pfeatures/shower_only.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (68, 'Shuttle', 'Shuttle service to airport and nightclub district available', 'images/stories/jomres/pfeatures/shuttle_service.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (69, 'Winter Sports', 'Winter Sports facilities available', 'images/stories/jomres/pfeatures/Skionsite.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (70, 'Smoking', 'Smokers welcome', 'images/stories/jomres/pfeatures/smokers_welcome.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (71, 'Snorkelling', 'Snorkelling suitable here', 'images/stories/jomres/pfeatures/snorkelling.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (72, 'Sunbed', 'Sunbed onsite', 'images/stories/jomres/pfeatures/sunbed.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (73, 'Tennis courts', 'Tennis court onsite or nearby', 'images/stories/jomres/pfeatures/tennis.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (74, 'Television', 'Television in every room', 'images/stories/jomres/pfeatures/tv_in_room.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (75, 'Weddings', 'Weddings catered for', 'images/stories/jomres/pfeatures/weddings.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (76, 'Whales', 'Whale watching', 'images/stories/jomres/pfeatures/whalewatching.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (77, 'Wifi', 'Wifi available', 'images/stories/jomres/pfeatures/wifi.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (78, 'Christmas', 'Christmas parties catered for', 'images/stories/jomres/pfeatures/xmas_partys.png', '0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_hotel_features` VALUES (79, 'Zodiac Excursions', 'Zodiac excursions can be arranged from these premesis', 'images/stories/jomres/pfeatures/zodiacexcursions.png', '0')","");


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


		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`image`, `property_uid`,`srp_only`)VALUES ('1', 'D/B', 'Double Bed','images/stories/jomres/rmtypes/double.png','0','0'), ('2', 'T/B', 'Twin Beds','images/stories/jomres/rmtypes/twin.png','0','0')","");
		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`image`, `property_uid`,`srp_only`)VALUES ('3', 'S', 'Single','images/stories/jomres/rmtypes/single.png','0','0'), ('4', '4P', '4 Poster','images/stories/jomres/rmtypes/fourposter.png','0','0')","");
		
		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`image`, `property_uid`,`srp_only` )VALUES ('5', '1 Bedroom', '1 Bedroom','images/stories/jomres/rmtypes/1bedroom.png','0','1'), ('6', '2 Bedrooms', '2 Bedrooms','images/stories/jomres/rmtypes/2bedrooms.png','0','1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`image`, `property_uid`,`srp_only` )VALUES ('7', '3 Bedrooms', '3 Bedrooms','images/stories/jomres/rmtypes/3bedrooms.png','0','1'), ('8', '4 Bedrooms', '4 Bedrooms','images/stories/jomres/rmtypes/4bedrooms.png','0','1')","");
		$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`image`, `property_uid`,`srp_only` )VALUES ('9', '5 Bedrooms', '5 Bedrooms','images/stories/jomres/rmtypes/5bedrooms.png','0','1'), ('10', '6+ Bedrooms', '6+ Bedrooms','images/stories/jomres/rmtypes/6plusbedrooms.png','0','1')","");


		//$result=doInsertSql("INSERT INTO `#__jomres_room_classes` ( `room_classes_uid` , `room_class_abbv` , `room_class_full_desc`,`property_uid`,`image` )VALUES ('3', 'D/B', 'Double Bed','0','/images/stories/jomres/rmtypes/double.png'), ('4', 'T/B', 'Twin Beds','0','/images/stories/jomres/rmtypes/twin.png')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('1', '3', '1', '1,2', 'The Pitt', '11', '1', '0', '2','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rooms` ( `room_uid` , `room_classes_uid` , `propertys_uid` , `room_features_uid` , `room_name` , `room_number` , `room_floor` , `room_disabled_access` , `max_people`,`smoking` )VALUES ('2', '3', '1', '1,2', 'The hole', '21', '2', '0', '4','0')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('1', 'Low season 2004', '2004/10/01', '2005/04/30', '25', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('2', 'High season 2005', '2005/05/01', '2005/09/31', '100', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('3', 'Low season 2005', '2005/10/01', '2006/04/30', '30', '1', '1000', '1', '4','3','0','1','1','1')","");


			$result=doInsertSql("INSERT INTO `#__jomres_rates` ( `rates_uid` , `rate_description` , `validfrom` , `validto` , `roomrateperday` , `mindays` , `maxdays` , `minpeople` , `maxpeople`,`roomclass_uid`,`ignore_pppn`,`allow_ph`,`allow_we`,`property_uid` )VALUES ('4', 'High season 2006', '2006/05/01', '2009/09/31', '110', '1', '1000', '1', '4','3','0','1','1','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_guests` ( `guests_uid` , `contracts_contract_uid` , `mos_userid` , `firstname` , `surname` , `house` , `street` , `town` , `county`,`postcode` , `tel_landline` , `tel_mobile` , `tel_fax` , `preferences` , `car_regno` , `ccard_no` , `ccard_issued` , `ccard_expiry` , `ccard_iss_no` , `ccard_name`,`property_uid`,`email` )VALUES ('1', '0', NULL , 'Fred', 'Bassett', '10', 'The Yard', 'Bassettville','DogTown','Woof 001', '01000 123456', '01777 123456', '01000 654321','Plenty of dog biscuits & a fresh bowl of water outside the room every hour', 'K9', '' , '', '','','','1','$jomresConfig_mailfrom')","");


		$result=doInsertSql("INSERT INTO `#__jomres_contracts` ( `contract_uid` ,`arrival`,`departure`,`rates_uid` , `guest_uid` , `rate_rules` , `deposit_paid` , `contract_total` , `deposit_ref` , `payment_ref` , `special_reqs` , `deposit_required` , `newsletters` , `currency` , `adults` , `children`,`property_uid` )VALUES ('1','$today','$tomorrow', '1', '1', 'blahblahblah', '0', '300', '0', '0', 'Food', '10', '1', '&pound;', '2', '0','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_room_bookings` ( `room_bookings_uid` , `room_uid` , `date` , `contract_uid` , `black_booking` , `reception_booking` , `internet_booking`,`property_uid` )VALUES ('1', '2', '2005-03-14', '1', '0', '1', '0','1'), ('2', '2', '2005-03-15', '1', '0', '1', '0','1')","");


		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('1', 'Hotel/Villa/Apartment', 'hotel', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('2', 'Yacht Brokerage', 'yachtbrokerage', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('3', 'Vehicle Rental', 'vehiclerental', '1')","");

		$result=doInsertSql("INSERT INTO `#__jomres_ptypes` (`id`, `ptype` , `ptype_desc` , `published` )VALUES ('4', 'Camp Site', 'campsite', '1')","");


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

function doConnectivityTest()
	{
	$home_url_site = "license-server.jomres.net";
	$home_url_port = 80;
	$result=false;
	// Let's get some server information
	$thisSvrName=$_SERVER['SERVER_NAME'];
	$dmn=str_replace("http://","",$thisSvrName);
	$domain=strtolower(str_replace("www.","",$dmn));

	echo "<H3>Testing connectivity to Jomres.net license server at ".$home_url_site."</H3>";
	echo '<div class="connectivitybackground">';
	echo "<b>Current domain/servername: ".$domain." ";
	echo "on IP ".$_SERVER['SERVER_ADDR']."</b><br>";

	// Build request
	$request = '';
	$request = $home_url_site.'?'.$request;
	// Build HTTP header
	$header  = "GET $request HTTP/1.0\r\nHost: $home_url_site\r\nConnection: Close\r\nUser-Agent: testconnectivity (www.jomres.net)\r\n";
	$header .= "\r\n\r\n";

	// Some servers are configured to return very little information. We will parse phpinfo to try to find the value of the master Fopen settings (and hope that at least phpino is available).
	// If master Fopen is Off then Fopen is also disabled, we'll try to switch to CURL. Local fopen is not used here but we'll keep it in case we need it sometime in the future.
	$configSets=parseConfiguration();
	$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
	$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

	// Output the value of the master Fopen

	echo "Master fopen = ";print_r($masterFopen); echo "<br>";

	if ($masterFopen == "Off") // use CURL
		{
		echo "Attempting to use CURL to communicate with the license server<br>";
		$return=get_content_curl($home_url_site,$request,$header,null);
		if ($return)
			{
			echo "Connected successfully with license server<br>";
			$result = true;
			}
		else
			{
			echo "<b>Failed to connect to license server using CURL</b><br>";
			echo "<br>This may be because of a firewall or iptables preventing outgoing communications, or because this server is not connected to the internet</b><br>";
			$result = false;
			}
		}
	else // use Fopen
		{
		echo "Attempting to use fsock to communicate with the license server<br>";
		$fpointer = @fsockopen($home_url_site, $home_url_port, $errno, $errstr, 5);
		if ($fpointer)
			{
			echo "Connected successfully with license server<br>";
			$result = true;
			}
		else
			{
			echo "<b>Failed to connect to license server using fsock<br>";
			echo $errstr;
			echo "<br>This may be because of a firewall or iptables preventing outgoing communications, or because this server is not connected to the internet</b><br>";
			$result = false;
			}
		}
	echo '</div>';
	return $result;
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

function showGetKeyInput($lkey)
	{

	global $mrConfig,$lkey;
	if (!isset($lkey) || strlen($lkey)==0 || $lkey=="X-XXXX-11-XXXXXXXXXX-XXXXXXXX" )
		{
		$query="SELECT value FROM #__jomres_settings WHERE property_uid LIKE '0' AND akey LIKE 'jomres_licensekey'";
		$settingsList=doSelectSql($query);
		if (count($settingsList) >0)
			{
			foreach ($settingsList as $lk)
				{
				$lkey=$lk->value;
				}
			}
		}

	?>
	<form action="" method="post" name="adminForm">

	<h3><font="red">Please enter the license key for this installation in the field below and click Save Key to continue the installation:<br></font></h3>

	<input class="inputbox" type="text" name="lkey" value="<?php echo $lkey; ?>" size="50" />
	<input type="hidden" name="option" value="com_jomres" />
	<input type="hidden" name="task" value="saveLicenseKey" />
	<input type="submit" value="Save key" class="button" >
	</form>
	<h3><font="red">If you do not have a license key, please visit <a href="http://license-server.jomres.net/" target="_blank">Jomres.net</a> to get one. A demo license key <a href="http://license-server.jomres.net/order.php?cmd=products/licenses/view&license_id=17" target="_blank">can be ordered by ordering a free license key.</a> Alternatively, you can <a href="http://license-server.jomres.net/order.php?cmd=products/licenses/view&license_id=14" target="_blank">purchase a full license key here.</a><br></font></h3>
	<?php
	
	if (jomresGetDomain() == "localhost")
		echo "If you are running Jomres on localhost, then you can use the license key X-XXXX-11-XXXXXXXXXX-XXXXXXXX for testing purposes only. Live servers will still require a valid license key.";
	
	?>
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
	global $jomresConfig_live_site;

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

	  <p><img src="<?php echo $jomresConfig_live_site ;?>/components/com_jomres/images/jrlogo.png" width="287" height="70"></p>
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
		`extra_id` INT NOT NULL,
		`model` INT NOT NULL,
		`params` varchar(255),
		`force` BOOL NOT NULL DEFAULT '0',
		`property_uid` INT NOT NULL,
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
		`property_uid` int not null,
	PRIMARY KEY (`id`)
	)";
	if (!doInsertSql($query,'') )
		{
		echo $query;
		return false;
		}
	$query="CREATE TABLE IF NOT EXISTS `#__jomcomp_tarifftype_rate_xref` (
		`id` INT NOT NULL AUTO_INCREMENT,
		`tarifftype_id` int not null,
		`tariff_id` int not null,
		`roomclass_uid` int not null,
		`property_uid` int not null,
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
		`manager_uid` INTEGER NOT NULL,
		`jos_id` INTEGER NOT NULL,
		`portal_booking_id` INTEGER NOT NULL,
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
?>