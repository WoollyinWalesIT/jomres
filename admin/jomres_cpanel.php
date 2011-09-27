<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


defined( '_JOMRES_INITCHECK' ) or die( '' );

#
/**
#
 * Backend control panel
#
 */

$configfile = JOMRESPATH_BASE.JRDS."jomres_config.php";  // This is just to pull in the Jomres version from mrConfig
include($configfile);

$foldersToTestForWritability=array();
if (_JOMRES_DETECTED_CMS == "joomla15")
	$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'sessions'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS;

$writabilityCheckPassImage=get_showtime('live_site')."/jomres/images/writability_check_passed.png";
$writabilityCheckFailImage=get_showtime('live_site')."/jomres/images/writability_check_failed.png";

$configSets=parseConfiguration();
$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

$thisVersion=$mrConfig['version'];

echo "This Jomres version: $thisVersion<br />";

if (function_exists("curl_init"))
	{
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,"http://updates.jomres4.net/versions.php");
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
	if (empty($buffer))
		print "Sorry, could not locate update script.<p>";
	else
		print $buffer;
	}
	
$MiniComponents =jomres_getSingleton('mcHandler');
$recommended_plugins = array();


$recommended_plugins['advanced_micromanage_tariff_editing_modes'] 	= array('minicomponent_name'=>'j02210listtariffs_advanced','message'=>'Offers the Advanced and Micromanage tariff editing modes, allowing property managers to construct much more detailed tariffs which mirror their real-world prices.');
$recommended_plugins['core_gateway_paypal'] 						= array('minicomponent_name'=>'j00605paypal','message'=>'Offers the ability for property managers to take payments online via paypal.');
$recommended_plugins['guest_types'] 								= array('minicomponent_name'=>'j02114listcustomertypes','message'=>'If a property manager wants to charge per person per night, or if they don\'t want to charge per person per night but need to know numbers of guests, you will need this plugin to create guest types.');
$recommended_plugins['optional_extras'] 							= array('minicomponent_name'=>'j02142listextras','message'=>'Optional extras can be added to bookings using the Optional Extras plugin. This provides the ability to create extras which can be charged using different models (e.g. per night, per booking, per guest etc).');
$recommended_plugins['property_creation_plugins'] 					= array('minicomponent_name'=>'j02300regprop1','message'=>'If you need to create more properties then you will need the Property Creation Plugin.');

$messages = '';
foreach ($recommended_plugins as $plugin_name=>$plugin)
	{
	$event_point = substr($plugin['minicomponent_name'],1,strlen($plugin['minicomponent_name']) );
	if (!array_key_exists($event_point,$MiniComponents->registeredClasses) )
		{
		$messages .= "<div class='ui-state-highlight'><strong> Recommended plugin </strong>: ".$plugin_name."<strong><br/> Functionality : </strong>".$plugin['message']."</div>";
		}
	}


?>

<table class="adminform">
	 <tr>
		<td width="55%" valign="top">
			<div id="cpanel">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="center">
					<?php
					require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'cpanel.class.php');
					$cpanel=new cpanel();
					?>
					</td>
				</tr>
				<tr>
					<td bgcolor="#f9f9f9">
						<?php
						$link = 'http://manual.jomres.net" title="Manual (Online)" target="_blank';
						echo _quickiconButton( $link, 'Help.png', 'Read documentation (Online)', '/jomres/images/' );
						$link = 'http://tickets.jomres.net/index.php" title="Submit support ticket (Online)" target="_blank';
						echo _quickiconButton( $link, 'Support_IT.png', 'Submit support ticket (Online)', '/jomres/images/');
						?>
					</td>
				</tr>
			</table>
			</div>
		</td>
		<td width="45%" valign="top" align="center" style="padding:10px;">
			<table border="1" width="100%" class="adminform">
				<tr>
					<th class="cpanel" colspan="2">Jomres Component</th>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="2">
						<br />
						<div style="width=100%" align="center">
							<a href="http://www.jomres.net" target="_blank"><img src="<?php echo get_showtime('live_site'); ?>/jomres/images/jrlogo.png" align="middle" border="0" alt="Jomres logo"/></a>
							<br /><br />
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<?php 
					if ($messages != "")
						echo "<p><div class='ui-state-highlight'><br/> <strong>Note, we have detected that several important plugins are not installed. These plugins are generally considered to be required if you wish to create a booking portal. You do not <i>need</i> these plugins to use the system but you may be missing functionality that you wish to use. You can use the Jomres Plugin Manager to install any plugins you need. If in doubt, check the manual link in the plugin's information panel to see more detailed information about that plugin. If you do not have a download and support key you can use the Plugin Shop in the Jomres Plugin Manager to purchase plugins.</strong></p>".$messages;

					?></td>
				</tr>
				<tr>
					<th class="cpanel" colspan="2">Writability check</th>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="2">
						<?php
						foreach ($foldersToTestForWritability as $folder)
							{
							$result=jomresStatusTestFolderIsWritable($folder);
							$message=$result['message'];
							if ($result['result'])
								$image='<img src="'.$writabilityCheckPassImage.'" border="0" alt="Pass" />';
							else
								$image='<img src="'.$writabilityCheckFailImage.'" border="0" alt="'.$result['message'].'" />';
								
							echo $image." ".$folder."<br/>";
							if ($result['message']!="Pass")
								echo $result['message']."<br/>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="2">
						If any of the above folders is not writable you may experience problems with running Jomres. It is recommended that you resolve any problems before attempting to use Jomres further. Whilst it is preferable that Jomres can write to the /jomres folders it is not vital (but it's better if it can because you can then use the updates feature) but folders such as the sessions and temp folders <i> have </i> to be writable for the system to work.
					</td>
				</tr>
				<tr>
					<td style="text-align:center" bgcolor="#FFFFFF"><strong><em>Copyright:</em></strong></td>
					<td bgcolor="#FFFFFF">&copy; 2005, 2006, 2007, 2008, 2009, 2010, 2011 Vince Wooll</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" style="text-align:center"><img src="<?php echo get_showtime('live_site'); ?>/jomres/images/User_Ninja.png" width="48" height="48" align="middle" border="0" /></td>
					<td bgcolor="#FFFFFF">Thanks to Piranha for your continuing help in providing support to Jomres users.</td>
				</tr>
			</table>
		</td>
	 </tr>
</table>
<?php

function jomresStatusTestFolderIsWritable($path)
	{
	$tmpFile="temp.txt";
	$tmpDir="jomres_test_dir";
	if (!is_dir($path) )
		return array("result"=>false,"message"=>"Directory ".$path." doesn't exist");
	if (!is_writable($path) )
		return array("result"=>false,"message"=>"Directory ".$path." isn't writable");
	if (!touch($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not write ".$path.$tmpFile);
	if (!file_exists($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not find ".$path.$tmpFile." after seeming to be able to create it.");
	if (!unlink($path.$tmpFile) )
		return array("result"=>false,"message"=>"Could not delete ".$path.$tmpFile);

	if (!mkdir($path.$tmpDir) )
		return array("result"=>false,"message"=>"Could not make temporary folder ".$path.$tmpDir);
	if (!rmdir($path.$tmpDir) )
		return array("result"=>false,"message"=>"Could not remove temporary folder ".$path.$tmpDir);
	return array("result"=>true,"message"=>"Pass");
	}
?>