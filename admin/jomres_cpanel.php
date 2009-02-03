<?php
/**
#
 * Backend control panel
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

defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );

#
/**
#
 * Backend control panel
#
 */

global $jomresConfig_absolute_path,$jomresConfig_live_site;
$configfile = JOMRESPATH_BASE."/jomres_config.php";  // This is just to pull in the Jomres version from mrConfig
include($configfile);

$foldersToTestForWritability=array();
$foldersToTestForWritability[]=JOMRESPATH_BASE.JRDS;
$foldersToTestForWritability[]=JOMRESPATH_BASE.JRDS."sessions".JRDS;
$foldersToTestForWritability[]=JOMRESPATH_BASE.JRDS."temp".JRDS;
$foldersToTestForWritability[]=JOMRESPATH_BASE.JRDS."updates".JRDS;
$foldersToTestForWritability[]=JOMRESPATH_BASE.JRDS."remote_plugins".JRDS;
$foldersToTestForWritability[]=$jomresConfig_absolute_path.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS;
$foldersToTestForWritability[]=$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS;
$foldersToTestForWritability[]=$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."rmtypes".JRDS;
$foldersToTestForWritability[]=$jomresConfig_absolute_path.JRDS."images".JRDS."stories".JRDS."jomres".JRDS."pfeatures".JRDS;
$foldersToTestForWritability[]=$jomresConfig_absolute_path.JRDS."media".JRDS;


$writabilityCheckPassImage=$jomresConfig_live_site."/components/com_jomres/images/writability_check_passed.png";
$writabilityCheckFailImage=$jomresConfig_live_site."/components/com_jomres/images/writability_check_failed.png";

$configSets=parseConfiguration();
$localFopen=$configSets["PHP Core"]['allow_url_fopen'][0];
$masterFopen=$configSets["PHP Core"]['allow_url_fopen'][1];

$thisVersion=$mrConfig['version'];

echo "This Jomres version: $thisVersion<br />";

if (function_exists("curl_init"))
	{
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,"http://updates.jomres.net/versions.php");
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
	if (empty($buffer))
		print "Sorry, could not locate update script.<p>";
	else
		print $buffer;
	}
	
$query = "SELECT `guests_uid` FROM #__jomres_guests";
$numberOfGuestsInSystem=count(doSelectSql($query));

?>

<table class="adminform">
	 <tr>
		<td width="55%" valign="top">
			<div id="cpanel">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td align="center">
					<?php
					$cpanel=new cpanel();
					?>
					</td>
				</tr>
				<tr>
					<td bgcolor="#f9f9f9">
						<?php
						$link = 'http://manual.jomres.net" title="Manual (Online)" target="_blank"';
						echo _quickiconButton( $link, 'Help.png', 'Read documentation (Online)', '/components/com_jomres/images/' );
						$link = 'http://tickets.jomres.net/index.php?_m=knowledgebase&_a=view" title="Search (Online) knowledgebase" target="_blank"';
						echo _quickiconButton( $link, 'FAQ.png', 'Search (Online) knowledgebase', '/components/com_jomres/images/' );
						$link = 'http://tickets.jomres.net/index.php" title="Submit support ticket (Online)" target="_blank"';
						echo _quickiconButton( $link, 'Support_IT.png', 'Submit support ticket (Online)', '/components/com_jomres/images/');
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
							<a href="http://www.jomres.net" target="_blank"><img src="<?php echo $jomresConfig_live_site; ?>/components/com_jomres/images/jrlogo.png" align="middle" border="0" alt="Jomres logo"/></a>
							<br /><br />
						</div>
					</td>
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
								$image='<img src="'.$writabilityCheckPassImage.'" border="0" alt="Pass">';
							else
								$image='<img src="'.$writabilityCheckFailImage.'" border="0" alt="'.$result['message'].'">';
								
							echo $image." ".$folder."<br/>";
							if ($result['message']!="Pass")
								echo $result['message']."<br/>";
							}
						?>
					</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" colspan="2">
						If any of the above folders is not writable you may experience problems with running Jomres. It is recommended that you resolve any problems before attempting to use Jomres further. Whilst it is preferable that Jomres can write to the /components/com_jomres and /administrator/components/com_jomres folders it is not vital (but it's better if it can because you can then use the updates feature) but folders such as the sessions and media folders <i> have </i> to be writable for the system to work.
					</td>
				</tr>
				<tr>
					<td style="text-align:center" bgcolor="#FFFFFF"><strong><em>Copyright:</em></strong></td>
					<td bgcolor="#FFFFFF">&copy; 2005, 2006, 2007 Vince Wooll</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" style="text-align:center"><img src="<?php echo $jomresConfig_live_site; ?>/administrator/images/credits.png" width="48px" height="48px" align="middle" border="0" /></td>
					<td bgcolor="#FFFFFF">Special Edition thanks to Hazel Wilson for the Northendnairn templates</td>
				</tr>
			</table>
		</td>
	 </tr>
</table>
<?php

function jomresStatusTestFolderIsWritable($path)
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
?>