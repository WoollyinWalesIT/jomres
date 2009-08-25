<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );

#
/**
#
 * Backend control panel
#
 */

global $jomresConfig_absolute_path,$jomresConfig_live_site;
$configfile = JOMRESPATH_BASE.JRDS."jomres_config.php";  // This is just to pull in the Jomres version from mrConfig
include($configfile);

$foldersToTestForWritability=array();
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'sessions'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'temp'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'updates'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS;
$foldersToTestForWritability[]=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS;

$writabilityCheckPassImage=$jomresConfig_live_site."/jomres/images/writability_check_passed.png";
$writabilityCheckFailImage=$jomresConfig_live_site."/jomres/images/writability_check_failed.png";

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
	
//$query = "SELECT `guests_uid` FROM #__jomres_guests";
//$numberOfGuestsInSystem=count(doSelectSql($query));

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
						$link = 'http://manual.jomres.net" title="Manual (Online)" target="_blank';
						echo _quickiconButton( $link, 'Help.png', 'Read documentation (Online)', '/jomres/images/' );
						$link = 'http://tickets.jomres.net/index.php?_m=knowledgebase&amp;_a=view" title="Search (Online) knowledgebase" target="_blank';
						echo _quickiconButton( $link, 'FAQ.png', 'Search (Online) knowledgebase', '/jomres/images/' );
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
							<a href="http://www.jomres.net" target="_blank"><img src="<?php echo $jomresConfig_live_site; ?>/jomres/images/jrlogo.png" align="middle" border="0" alt="Jomres logo"/></a>
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
					<td bgcolor="#FFFFFF">&copy; 2005, 2006, 2007, 2008, 2009 Vince Wooll</td>
				</tr>
				<tr>
					<td bgcolor="#FFFFFF" style="text-align:center"><img src="<?php echo $jomresConfig_live_site; ?>/jomres/images/User_Ninja.png" width="48" height="48" align="middle" border="0" /></td>
					<td bgcolor="#FFFFFF">Thanks to Roger P for the German language file.</td>
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