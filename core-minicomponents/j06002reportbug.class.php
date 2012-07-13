<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06002reportbug {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06002reportbug($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $_VERSION;
		
		
		$jomresConfig_fromname=get_showtime('fromname');
		$jomresConfig_mailfrom=get_showtime('mailfrom');
		$jomresConfig_sitename=get_showtime('sitename');
		$jomresConfig_host=get_showtime('host');
		$jomresConfig_user=get_showtime('user');
		$jomresConfig_password=get_showtime('password');

		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->superPropertyManager)
			return;
		$mrConfig=getPropertySpecificSettings();
		$first_version = $mrConfig['version'];
		include(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_config.php');
		$current_version = $mrConfig['version'];

		//$showtime = jomres_singleton_abstract::getInstance('showtime');
		if ($thisJRUser->superPropertyManager)
			{
			$link = mysql_connect($jomresConfig_host, $jomresConfig_user, $jomresConfig_password);
			$serverinfo=mysql_get_server_info();
			$currentPage = jomresGetParam( $_REQUEST, 'currentPage', '' );
		    $s=parseConfiguration();

			$safemode=$s["PHP Core"]['safe_mode'][1];
			$image="/jomres/images/jomresimages/small/EmailSend.png";
			$sitename="Site name : ".$jomresConfig_sitename;
			$joomlaUrl="CMS url : ".get_showtime('live_site');
			
			$jomresFirstVersion="Jomres first version : ".$first_version;
			$jomresCurrentVersion="Jomres current version : ".$current_version;
			$license_key = "License key : ".$mrConfig['jomres_licensekey'];
			
			$joomlaVersion='';
			$sh404sef = '';
			$sef = '';
			$joomla_sef = '';
			
			if (_JOMRES_DETECTED_CMS == "joomla15" || _JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla16")
				{
				if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'version.php'))
					{
					$_VERSION = new JVersion();
					$joomlaVersion="CMS version : ".$_VERSION->PRODUCT.' '.$_VERSION->RELEASE.'.'.$_VERSION->DEV_LEVEL.' '.$_VERSION->DEV_STATUS;
					}
				if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'version.php'))
					{
					$_VERSION = new JVersion();
					$joomlaVersion="CMS version : ".$_VERSION->PRODUCT.' '.$_VERSION->RELEASE.'.'.$_VERSION->DEV_LEVEL.' '.$_VERSION->DEV_STATUS;
					}
				
				if (get_showtime('sef') =="1")
					$joomla_sef = 'Joomla SEF functionality is switched on';
				else
					$joomla_sef = 'Joomla SEF functionality is switched off';
				
				
				if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'))
					$sh404sef = 'The sh404sef component directory exists. Is this component enabled? Yes/No';
					
				if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sef'))
					$sef = 'The sef component directory exists. Is this component enabled? Yes/No';
				}
			
			$phpVersion="PHP Version : ".phpversion();
			$safeMode="Safe Mode : ".$safemode;
			$mySqlVersion="MySql version : ".$serverinfo;
			$userAgent="User agent : ".$_SERVER['HTTP_USER_AGENT'];
			$serverSoftware="Server software : ".$_SERVER['SERVER_SOFTWARE'];
			$opSys="Operating system : ".php_uname ();

			$currentPage="Report triggered at page : ".get_showtime('live_site')."/ -- ".$currentPage;
			$yourreport="Your bug report : ";
			$adminLogin="Admin userid : admin";
			$adminPassword="Admin password : ";
			$guestLogin="Guest login  :";
			$guestPassword="Guest password :";

			
			$xml_file = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS.'jomres_error_log.xml';
			
			$error_log = '';
			if (file_exists($xml_file) )
				{
				if (!($fp = fopen($xml_file, 'r')))
					{
					die("Could not open $xml_file for parsing!\n");
					}
				$xml="";
				while ($data = fgets($fp, 8192))
					{
					$xml.=$data;
					}

				jr_import('jomres_xml_parser');
				$p = new jomres_xml_parser($xml);
				$result=$p->getOutput($xml);
				$counter=0;
				$error_log = "\n\nError log last 5 lines : \n\n";
				for ($i=0;$i<5;$i++)
					{
					$error_log .= $result['errorlog'][$i]['datetime'];
					$error_log .= $result['errorlog'][$i]['task'];
					$error_log .= $result['errorlog'][$i]['message']."\n";
					}
				}

			
			
			$debug=$yourreport."\n";
			$debug.="\n";
			$debug.="\n";
			$debug.="\n";

			$debug.=$adminLogin."\n";
			$debug.=$adminPassword."\n";
			$debug.=$guestLogin."\n";
			$debug.=$guestPassword."\n";

			$debug.="\n";
			$debug.=$currentPage."\n";
			$debug.=$sitename."\n";
			$debug.=$joomlaUrl."\n";
			$debug.=$jomresFirstVersion."\n";
			$debug.=$jomresCurrentVersion."\n";
			$debug.=$license_key."\n";
			
			$debug.=$joomlaVersion."\n";
			$debug.=$sh404sef."\n";
			$debug.=$sef."\n";
			$debug.=$joomla_sef."\n";

			$debug.=$phpVersion."\n";
			$debug.=$safeMode."\n";
			$debug.=$mySqlVersion."\n";
			$debug.=$userAgent."\n";
			$debug.=$serverSoftware."\n";
			$debug.=$opSys."\n";
			$debug.=$error_log."\n";
			
			
			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->customToolbarItem("SEND",jomresURL(JOMRES_SITEPAGE_URL_NOSEF."&task=sendbug&currentPage=$currentPage"),$text="Send Bug",$submitOnClick=true,$submitTask="sendbug",$image);
			$jrtb .= $jrtbar->endTable();

			$output['SEND_URL']=JOMRES_SITEPAGE_URL."&task=sendbug&currentPage=$currentPage"; 
			$output['SENDBUTTON']=$jrtb;
			$output['DEBUGINFO']=$debug;
			$output['ADMINEMAIL']=$jomresConfig_mailfrom;
			$output['_JOMRES_DEBUGGING_SUBJECT']=_JOMRES_DEBUGGING_SUBJECT;
			$output['_JOMRES_DEBUGGING_FULLNAME']=_JOMRES_DEBUGGING_FULLNAME;
			$output['_JOMRES_DEBUGGING_YOUREMAIL']=_JOMRES_DEBUGGING_YOUREMAIL;
			$output['_JOMRES_DEBUGGING_ISSUE']=_JOMRES_DEBUGGING_ISSUE;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edit_bug.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>