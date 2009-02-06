<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000showplugins
	{
	function j16000showplugins()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		
		$registry = new minicomponent_registry(true);
		$registry->regenerate_registry();
		
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site;
		$installed_plugins=array();
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.'/jomres/remote_plugins/';
		if (!is_dir($jrePath) )
			{
			if (!@mkdir($jrePath))
				{
				echo "Error, unable to make folder ".$jrePath." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		$remote_plugins=array();
		$remote_plugins_data=queryUpdateServer("","r=dp");
		$rp_array=explode("<br/>",$remote_plugins_data);
		foreach ($rp_array as $rp)
			{
			$rp_string=explode("^",$rp);
			$cname=addslashes($rp_string[1]);
			$name=htmlentities($rp_string[1], ENT_QUOTES, 'UTF-8') ;
			if ($cname!="")
				{
				$remote_plugins[$cname]=array(
					"name"=>trim(addslashes($name)),
					"version"=>(float)$rp_string[2],
					"lastupdate"=>addslashes($rp_string[3]),
					"description"=>addslashes($rp_string[4])
					);
				if (isset($rp_string[5]) )
					$remote_plugins[$cname]['type']=$rp_string[5];
				else
					$remote_plugins[$cname]['type']="internal";
				}
			}

		$d = @dir($jrePath);
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					if (file_exists($jrePath.$entry."/plugin_info.php"))
						{
						include($jrePath.$entry."/plugin_info.php");
						$cname= "plugin_info_".$entry;
						if (class_exists($cname))
							{
							$info = new $cname();
							$installed_plugins[$info->data['name']]=$info->data;
							}
							/*
						else
							{

							emptyDir($jrePath.$entry);
							rmdir($jrePath.$entry);
							echo "Error finding classname ".$cname." Possible installation error. For safety reasons, the plugin and folder has been removed.<br/>";

							//echo "Error finding classname ".$cname." Possible installation error. <br/>";
							}
							*/
						}
					}
				}
			}
		echo '
			<style type="text/css">
			tr.availablefordownload td {
				background-color: #ffffc8; color: black;
			}
			tr.alreadyinstalled td {
				background-color: #c8c8ff; color: black;
			}
			tr.upgradeavailable td {
				background-color: #fc0000; color: black;
			}
			</style>

		<table class="jradmin_table" border="0">
			<tr>
				<th class="jomres_title">Name</th>
				<th class="jomres_title">Your Version</th>
				<th class="jomres_title">Current Version</th>
				<th class="jomres_title">Last updated</th>
				<th class="jomres_title">Description</th>
				<th class="jomres_title">Add/reinstall/upgrade plugin</th>
				<th class="jomres_title">Remove plugin</th>
			</tr>';
		$install_text="Install";
		$reinstall_text="Reinstall";
		$upgrade_text="Upgrade";
		$uninstall_text="Uninstall";
		$externalPluginTypes=array("component","module","mambot");
		foreach ($remote_plugins as $rp)
			{

			$type=$rp['type'];
			$n=$rp['name'];
			$row_class='availablefordownload';
			$installAction=$install_text;
			$uninstallAction=" ";

			if (array_key_exists($n,$installed_plugins ) )
				{
				$uninstallAction=$uninstall_text;
				$installAction=$reinstall_text;
				$row_class='alreadyinstalled';
				$action="Reinstall";
				$uninstall="<a href=\"".$uninstallLink."\">".$uninstallText."</a>";
				if ($rp['version'] > $installed_plugins[$n]['version'])
					{
					$installAction=$upgrade_text;
					$row_class='upgradeavailable';
					}
				}



			$installLink='<a href="'.$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index2.php?option=com_jomres&task=addplugin&plugin='.$n.'">'.$installAction.'</a>';

			$uninstallLink="";
			if (!in_array($rp['type'],$externalPluginTypes) )
				$uninstallLink='<a href="'.$jomresConfig_live_site.'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index2.php?option=com_jomres&task=removeplugin&plugin='.$n.'">'.$uninstallAction.'</a>';

			$local_version=$installed_plugins[$n]['version'];
			if (!array_key_exists($n,$installed_plugins ) )
				$local_version="N/A";
			echo
			"<tr class=\"".$row_class."\">
				<td>".$rp['name']."</td>
				<td>".$local_version."</td>
				<td>".$rp['version']."</td>
				<td>".$rp['lastupdate']."</td>
				<td>".stripslashes($rp['description'])."</td>
				<td>".$installLink."</td>
				<td>".$uninstallLink."</td>
			</tr>";

			}
		echo '</table>
		<br/><br/><br/><br/><br/><br/>
		<table class="jradmin_table" border="0">
			<tr>
				<th class="jomres_title" align="center">Legend</td>
			</tr>
			<tr class="availablefordownload">
				<td align="center">Available from Jomres.net</td>
			</tr>
			<tr class="alreadyinstalled">
				<td align="center">Already installed</td>
			</tr>
			<tr class="upgradeavailable">
				<td  align="center">Upgrade is available</td>
			</tr>
		</table>

		';
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

