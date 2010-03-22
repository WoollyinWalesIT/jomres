<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000showplugins
	{
	function j16000showplugins()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		if (function_exists('jr_import'))
			{
			jr_import('minicomponent_registry');
			$MiniComponents =jomres_getSingleton('mcHandler');
			}
		else
			global $MiniComponents;

		$registry = new minicomponent_registry(true);
		$registry->regenerate_registry();
		
		
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$installed_plugins=array();
		$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
		$third_party_plugins = array();
		if (!is_dir($jrePath) )
			{
			if (!@mkdir($jrePath))
				{
				echo "Error, unable to make folder ".$jrePath." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server";
				exit;
				}
			}

		jr_import('jomres_check_support_key');
		$key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN."&task=showplugins");
		$this->key_valid = $key_validation->key_valid;
		
		$remote_plugins=array();
		$remote_plugins_data=queryUpdateServer("","r=dp&cms="._JOMRES_DETECTED_CMS."&key=".$key_validation->key_hash);
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
					if (file_exists($jrePath.$entry.JRDS."plugin_info.php"))
						{
						include($jrePath.$entry.JRDS."plugin_info.php");
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
			foreach ($installed_plugins as $key=>$val)
				{
				if (!array_key_exists($key,$remote_plugins ) )
					{
					$third_party_plugins[$key]=$val;
					}
				}
			}
		
		////////////////////////////////////////////////////// Third party plugins
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
				<th class="jomres_title" colspan="6">Third party plugins</th>
			</tr>
			<tr>
				<th class="jomres_title">Name</th>
				<th class="jomres_title">Your Version</th>
				<th class="jomres_title">Description</th>
				<th class="jomres_title">Author</th>
				<th class="jomres_title">Author email</th>
				<th class="jomres_title">Remove plugin</th>
			</tr>';
		$uninstall_text="Uninstall";
		$externalPluginTypes=array("component","module","mambot");
		
		foreach ($third_party_plugins as $tpp)
			{
			$type=$tpp['type'];
			$n=$tpp['name'];
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
				}

			$uninstallLink="";
			if (!in_array($rp['type'],$externalPluginTypes) )
				$uninstallLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=removeplugin&no_html=1&plugin='.$n.'">'.$uninstallAction.'</a>';

			$local_version=$installed_plugins[$n]['version'];
			if (!array_key_exists($n,$installed_plugins ) )
				$local_version="N/A";
			echo
			"<tr class=\"".$row_class."\">
				<td>".$tpp['name']."</td>
				<td>".$local_version."</td>
				<td>".stripslashes($tpp['description'])."</td>
				<td>".stripslashes($tpp['author'])."</td>
				<td><a href=\"mailto:".stripslashes($tpp['authoremail'])."?subject=".$tpp['name']."\">".stripslashes($tpp['authoremail'])."</a> </td>
				<td>".$uninstallLink."</td>
			</tr>";
			}
		echo '</table>
			<form enctype="multipart/form-data" action="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=addplugin&thirdparty=1" method="post">
			<input type="hidden" name="no_html" value="1" />
			<table class="jradmin_innerwrapper">
				<tr>
					<td>
						<table class="jradmin_table">
							<tr>
								<td colspan="2" class="jradmin_subheader_ca">Install third party plugin</td>
							</tr>
							<tr>
								<td class="jradmin_field_ca"><input type="file" name="pluginfile"/></td>
								<td class="jradmin_field_ca"><input type="submit" value="Install" class="button" /></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
		<br/>
		<br/>
		
		';
		
		////////////////////////////////////////////////////// Remote plugins
		
		echo '
		<table class="jradmin_table" border="0">
			<tr>
				<th class="jomres_title" colspan="7">Jomres.net plugins</th>
			</tr>
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

			$installLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=addplugin&no_html=1&plugin='.$n.'">'.$installAction.'</a>';

			$uninstallLink="";
			if (!in_array($rp['type'],$externalPluginTypes) )
				$uninstallLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=removeplugin&no_html=1&plugin='.$n.'">'.$uninstallAction.'</a>';

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

