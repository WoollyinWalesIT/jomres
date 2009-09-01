<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j06000reportbug {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j06000reportbug($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_mailfrom,$jomresConfig_fromname,$jomresConfig_sitename;
		global $jomresConfig_host,$jomresConfig_user,$jomresConfig_password,$_VERSION;
		$thisJRUser=jomres_getSingleton('jr_user');
		$mrConfig=getPropertySpecificSettings();
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
			$jomresVersion="Jomres version : ".$mrConfig['version'];
			$joomlaVersion="CMS version : ".$_VERSION->PRODUCT.' '.$_VERSION->RELEASE.'.'.$_VERSION->DEV_LEVEL.' '.$_VERSION->DEV_STATUS;
			$phpVersion="PHP Version : ".phpversion();
			$safeMode="Safe Mode : ".$safemode;
			$mySqlVersion="MySql version : ".$serverinfo;
			$userAgent="User agent : ".$_SERVER['HTTP_USER_AGENT'];
			$serverSoftware="Server software : ".$_SERVER['SERVER_SOFTWARE'];
			$opSys="Operating system : ".php_uname ();

			$currentPage="Report triggered at page : ".get_showtime('live_site')."/".$currentPage;
			$yourreport="Your bug report : ";
			$adminLogin="Admin userid : admin";
			$adminPassword="Admin password : ";
			$guestLogin="Guest login  :";
			$guestPassword="Guest password :";

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
			$debug.=$jomresVersion."\n";
			$debug.=$joomlaVersion."\n";
			$debug.=$phpVersion."\n";
			$debug.=$safeMode."\n";
			$debug.=$mySqlVersion."\n";
			$debug.=$userAgent."\n";
			$debug.=$serverSoftware."\n";
			$debug.=$opSys."\n";

			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->customToolbarItem("SEND",jomresURL(JOMRES_SITEPAGE_URL."&task=sendbug&currentPage=$currentPage"),$text="Send Bug",$submitOnClick=true,$submitTask="sendbug",$image);
			$jrtb .= $jrtbar->endTable();

			$output['SENDBUTTON']=$jrtb;
			$output['DEBUGINFO']=$debug;
			$output['ADMINEMAIL']=$jomresConfig_mailfrom;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';

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