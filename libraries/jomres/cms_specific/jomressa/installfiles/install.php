<?php

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################



// First, let's ensure that /public_html is writable by the web server
if (!isset($_POST['host']) || !isset($_POST['database']) || !isset($_POST['username']) || !isset($_POST['password']) )
	{
	// Show the request database info form
	$writeTest = jomresSAtatusTestFolderIsWritable(JOMRESCONFIG_ABSOLUTE_PATH);
	if (!$writeTest['result'])
		{
		echo "Error : The folder ".JOMRESCONFIG_ABSOLUTE_PATH." isn't writable by the web server. Please modify the permissions (temporarily) for that folder and re-run this script.<br/>";
		echo $writeTest['message'];
		exit;
		}
	
	
	
	showheader();
	echo "Cannot find index.php in ".JOMRESCONFIG_ABSOLUTE_PATH.", so we're assuming that we're doing an installation of Jomres SA.<br/>";
	if (isset($_GET['message']) )
		echo '<font color="red" face="arial" size="2">'.$_GET['message'].'</font><br/>';

	?>
	<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="host">Mysql Host: (eg localhost)</label>
	<input type="text" name="host" size="20" value="<?php if (isset($_GET['host'])) echo $_GET['host']; else echo "localhost"; ?>"><br>
	<label for="host">Database</label>
	<input type="text" name="database" size="20" value="<?php if (isset($_GET['database'])) echo $_GET['database']; else echo "standalone";?>"><br>
	<label for="host">Username</label>
	<input type="text" name="username" size="20" value="<?php if (isset($_GET['username'])) echo $_GET['username']; else echo "root";?>"><br>
	<label for="host">Password</label>
	<input type="text" name="password" size="20" value="<?php if (isset($_GET['password'])) echo $_GET['password']; else echo "";?>"><br>
	<label for="host">Prefix (eg "jomres")</label>
	<input type="text" name="prefix" size="20" value="<?php if (isset($_GET['prefix'])) echo $_GET['prefix']; else echo "jomres";?>"><br>

	<br>
	<label for="host">Site Name</label>
	<input type="text" name="sitename" size="20" value="<?php if (isset($_GET['sitename'])) echo $_GET['sitename']; else echo "Jomres Standalone";?>"><br>

	<input type="submit" name="Submit" value="Perform Jomres Standalone Pre-install database and config file creation">
	</form>
	<?php
	}
else
	{
	// Perform the installation of the tables based on the posted data
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'jomres_database.class.php');
	global $jomresConfig_user,$jomresConfig_password,$jomresConfig_dbprefix,$jomresConfig_host,$jomresConfig_db;
	$jomresConfig_host = $_POST['host'];
	$jomresConfig_user = $_POST['username'];
	$jomresConfig_db = $_POST['database'];
	$jomresConfig_password = $_POST['password'];
	$jomresConfig_dbprefix = $_POST['prefix']."_";
	
	$db = new jomres_database();
	if (!$db->connection_result )
		{
		jomresSAInstallredirect("Sorry, I cannot connect to that database, please check the login details you supplied and try again.");
		}
	unset($db);

	
	$query = 
	"CREATE TABLE IF NOT EXISTS `#__users` (
		`id` int(11) NOT NULL auto_increment,
		`login` varchar(25) NOT NULL default '',
		`pw` varchar(32) NOT NULL default '',
		`real_name` varchar(32) NOT NULL default '',
		`extra_info` varchar(100) NOT NULL default '',
		`email` varchar(50) NOT NULL default '',
		`tmp_mail` varchar(50) NOT NULL default '',
		`access_level` tinyint(4) NOT NULL default '0',
		`active` enum('y','n','b') NOT NULL default 'n',
		PRIMARY KEY		(`id`),
		UNIQUE KEY `user` (`login`),
		UNIQUE KEY `mail` (`email`)
		)";
	if (!doInsertSql($query,'',true))
		{
		jomresSAInstallredirect("Sorry, there was an error creating the table ".$jomresConfig_dbprefix."_users. Please try again.");
		}
	
	$query = "INSERT INTO `#__users` VALUES (NULL, 'administrator', '40be4e59b9a2a2b5dffb918c0e86b3d7', 'The site administrator', '', 'my@mail.com', '', 10, 'y')";
	doInsertSql($query,'',true);
	/*
	if (!doInsertSql($query,'',true))
		{
		jomresSAInstallredirect("Sorry, there was an error adding the administrator user. Please try again.");
		}
	*/
	$query = 
	"CREATE TABLE `#__users_profile` (
	`id` int(11) NOT NULL auto_increment,
	`users_id` int(11) NOT NULL default '0',
	`language` char(2) NOT NULL default '',
	`address` varchar(50) NOT NULL default '',
	`postcode` varchar(15) NOT NULL default '',
	`city` varchar(50) NOT NULL default '',
	`country` char(2) NOT NULL default '',
	`phone` varchar(50) NOT NULL default '',
	`fax` varchar(50) NOT NULL default '',
	`homepage` varchar(100) NOT NULL default '',
	`notes` text NOT NULL,
	`user_1` varchar(100) NOT NULL default '',
	`user_2` varchar(100) NOT NULL default '',
	`user_3` varchar(100) NOT NULL default '',
	`user_4` varchar(100) NOT NULL default '',
	`user_5` varchar(100) NOT NULL default '',
	`user_6` varchar(100) NOT NULL default '',
	`last_change` datetime NOT NULL default '0000-00-00 00:00:00',
	PRIMARY KEY	(`id`),
	UNIQUE KEY `users_id` (`users_id`)
	)";
	if (!doInsertSql($query,'',true))
		{
		jomresSAInstallredirect("Sorry, there was an error creating the table ".$jomresConfig_dbprefix."__users_profile. Please try again.");
		}


	$query = 
	"CREATE TABLE #__sessions (
	ses_id varchar(32) NOT NULL default '',
	ses_time int(11) NOT NULL default '0',
	ses_start int(11) NOT NULL default '0',
	ses_value text NOT NULL,
	PRIMARY KEY	(ses_id)
	)";
	if (!doInsertSql($query,'',true))
		{
		jomresSAInstallredirect("Sorry, there was an error creating the table ".$jomresConfig_dbprefix."__sessions. Please try again.");
		}

	
	$configFile = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres_standalone_config.php';
	$live_site = curPageURL();
	$live_site =str_replace("/jomres/install_jomres.php","",$live_site);
	
	$configObjString = '
<?php

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
	
class jomres_standalone_config
	{
	function jomres_standalone_config()
		{
		// Mysql connection information
		$showtime = jomres_getSingleton(\'showtime\');
		
		$showtime->host				= "'.$_POST['host'].'";
		$showtime->db				= "'.$_POST['database'].'";
		$showtime->user				= "'.$_POST['username'].'";
		$showtime->password			= "'.$_POST['password'].'";
		$showtime->dbprefix			= "'.$_POST['prefix'].'_";

		// EG http://www.domain.com
		$showtime->live_site		= "'.$live_site.'";
		$showtime->lang				= "en-GB";
		$showtime->offline			= "0";
		$showtime->sitename			= "'.$_POST['sitename'].'";
		
		// A random string used for all sorts of stuff
		$showtime->secret			= "'.generateJomresRandomString(25).'";
		
		// Session lifetime
		$showtime->lifetime="1500";
		
		// Use these settings if you are using an SMTP mailer instead of sendmail (the built in php mailer handling)
		$showtime->mailer			= "smtp";
		$showtime->mailfrom			= "";
		$showtime->fromname			= "";
		$showtime->sendmail			= "/usr/sbin/sendmail";
		$showtime->smtpauth			= "0";
		$showtime->smtpuser			= "";
		$showtime->smtppass			= "";
		$showtime->smtphost			= "";
		
		$showtime->error_reporting	="0";

		$showtime->MetaDesc			= "";
		$showtime->MetaKeys			= "";
		$showtime->MetaTitle		= "";
		$showtime->MetaAuthor		= "";
		
		$showtime->registration_forbidden = true; // Prevent visitors from registering
		}
	}';

	$fp=fopen($configFile,'w');
	fwrite($fp, $configObjString);
	fclose($fp);	// close file
	
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."index.php"))
		{
		jomresSAInstallredirect("<h1>Error, unable to copy "._JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.php to ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."index.php automatically, please do this manually through FTP</h1><br/>");
		}
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."admin.php"))
		{
		jomresSAInstallredirect("<h1>Error, unable to copy "._JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.php to ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."admin.php automatically, please do this manually through FTP</h1><br/>");
		}
		
	jomresSAInstallredirect("",true);
	}
showfooter();
exit;

function jomresSAtatusTestFolderIsWritable($path)
	{
	$tmpFile="temp.txt";
	if (!is_dir($path) )
		return array("result"=>false,"message"=>"Directory ".$path." doesn't exist");
	if (!is_writable($path) )
		return array("result"=>false,"message"=>"Directory ".$path." isn't writable");
	if (!touch($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not write ".$path.$tmpFile);
	if (!unlink($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not delete ".$path.$tmpFile);

	return array("result"=>true,"message"=>"Pass");
	}

function jomresSAInstallredirect($message,$continue=false)
	{
	if (!$continue)
		{
		$url = "?message=".$message.
			"&host=".$_POST['host'].
			"&database=".$_POST['database'].
			"&username=".$_POST['username'].
			"&password=".$_POST['password'].
			"&prefix=".$_POST['prefix'].
			"&sitename=".$_POST['sitename'];
		$url=str_replace("&amp;","&",$url);
		}
		
	echo "<script>document.location.href='$url';</script>\n";
	exit();
	}
	
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>