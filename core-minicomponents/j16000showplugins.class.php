<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
				return;
				}
			}
		
		$jrcPath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-plugins'.JRDS;
		$third_party_plugins = array();
		if (!is_dir($jrcPath) )
			{
			if (!@mkdir($jrcPath))
				{
				echo "Error, unable to make folder ".$jrcPath." automatically therefore cannot install plugins. Please create the folder manually and ensure that it's writable by the web server";
				return;
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
		
		$d = @dir($jrcPath);
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( substr($entry,0,1) != '.' )
					{
					if (file_exists($jrcPath.$entry.JRDS."plugin_info.php"))
						{
						include($jrcPath.$entry.JRDS."plugin_info.php");
						$cname= "plugin_info_".$entry;
						if (class_exists($cname))
							{
							$info = new $cname();
							$installed_plugins[$info->data['name']]=$info->data;
							}
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
		<h3>Please do not install all plugins with the hope that they will come in useful later. They are not all mutually exclusive, I.E. one plug may interfere with another, so it is recommended that you only install a plugin when you\'ve identified a requirement that the individual plugin fulfills. </h3><br/>You will only be able to install the plugins listed below if you have a valid download and support license.<br/>Bold items in the core plugins list are generally essential when building a portal, and if you have upgraded from v4 you should consider installing those plugins to continue working as before.
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
		$this->set_main_plugins();
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
				
			$strong1 = '';
			$strong2 = '';
			if (in_array($rp['name'],$this->main_plugins))
				{
				$strong1 = '<strong>';
				$strong2 = '</strong>';
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
				<td>".$strong1.$rp['name'].$strong2."</td>
				<td>".$local_version."</td>
				<td>".$rp['version']."</td>
				<td>".$rp['lastupdate']."</td>
				<td>".$strong1.stripslashes($rp['description']).$strong2."</td>
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

	function set_main_plugins()
		{
		$this->main_plugins = array();
		$this->main_plugins[]="advanced_micromanage_tariff_editing_modes";
		$this->main_plugins[]="black_bookings";
		$this->main_plugins[]="book_guest_in_out";
		$this->main_plugins[]="commission";
		$this->main_plugins[]="core_gateway_paypal";
		$this->main_plugins[]="coupons";
		$this->main_plugins[]="custom_fields";
		$this->main_plugins[]="guest_types";
		$this->main_plugins[]="lastminute_config_tab";
		$this->main_plugins[]="optional_extras";
		$this->main_plugins[]="partners";
		$this->main_plugins[]="property_creation_plugins";
		$this->main_plugins[]="sms_clickatell";
		$this->main_plugins[]="subscriptions";
		$this->main_plugins[]="template_editing";
		$this->main_plugins[]="wiseprice_config_tab";
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

