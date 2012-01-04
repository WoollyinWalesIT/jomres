<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
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
		if (isset($_REQUEST['purchase']))
			{
			$items = "&items=".jomresGetParam( $_REQUEST, 'items', '' );
			$username = "&username=".jomresGetParam( $_REQUEST, 'username', '' );
			$password = "&password=".jomresGetParam( $_REQUEST, 'password', '' );
			jomresRedirect( JOMRES_SITEPAGE_URL_ADMIN.'&task=purchase_plugins'.$username.$password.$items, "" );
			exit;
			}
		$registry = new minicomponent_registry(true);
		$registry->regenerate_registry();
		jomres_cmsspecific_addheaddata("javascript",'jomres/javascript/',"shop.js",false);
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		include(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_config.php');
		$this_jomres_version = explode(".",$mrConfig['version']);
		
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
		
		//$this->key_valid = false; // for testing
		
		$developer_user = false;

		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$current_licenses = array();
		
		if ($this->key_valid)
			$developer_user = true;
		else
			{
			$request = "request=get_license_numbers&username=".$jrConfig['license_server_username']."&password=".$jrConfig['license_server_password'];
			$response = query_shop($request);
			if ($response->success)
				{
				foreach ($response->licenses as $license)
					{
					
					$current_licenses[$license->name]=$license->license_key;
					}
				
				}
			}

		//if (function_exists('json_decode'))
			$json = true;

		if ($json)
			$remote_plugins_data=queryUpdateServer("","r=dp&format=json&cms="._JOMRES_DETECTED_CMS."&key=".$key_validation->key_hash);
		else
			$remote_plugins_data=queryUpdateServer("","r=dp&cms="._JOMRES_DETECTED_CMS."&key=".$key_validation->key_hash);
		
		if ($json)
			{
			
			$rp_array=json_decode($remote_plugins_data);
			foreach ($rp_array as $rp)
				{
				$remote_plugins[trim(addslashes(@$rp->name))]=array(
					"name"					=>trim(addslashes(@$rp->name)),
					"version"				=>(float)@$rp->version,
					"lastupdate"			=>addslashes(@$rp->lastupdate),
					"description"			=>addslashes(@$rp->description),
					"type"					=>addslashes(@$rp->type),
					"min_jomres_ver"		=>addslashes(@$rp->min_jomres_ver),
					"price"					=>(float)@$rp->price,
					"manual_link"			=>addslashes(@$rp->manual_link),
					"change_log"			=>addslashes(@$rp->change_log),
					"highlight"				=>addslashes(@$rp->highlight),
					"image"					=>addslashes(@$rp->image),
					"demo_url"				=>addslashes(@$rp->demo_url),
					);
				}
			}
		else
			{
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

					if (isset($rp_string[6]))
						$remote_plugins[$cname]['min_jomres_ver']=$rp_string[6];
					}
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
			
		//////////////////////////////////////////////////////
		
		echo '<h2>Jomres Plugin Manager</h2>';
		echo '<table width="100%" border="0"><tr><td width="75%" valign="top">';
		if (!$developer_user)
			{
			echo '
			<div id="cart_wrapper" style="width:500px;">
			
				<div class="ui-widget-header ui-corner-all"><img src = "'.get_showtime('live_site').'/jomres/images/cart_red_transparent.png"/>Your shopping cart</div>
				<form id="cart">
				</form>
				<div class="ui-state-highlight ui-corner-all">Total <strong>&pound;<span id="total"></span></strong></div>
				<button id="purchase" class="fg-button ui-state-default ui-corner-all" onClick="purchase();">Order plugin(s)</button>
				<p>
				Note, if you have a Jomres Developer or Perpetual license number, please make sure you\'ve entered it in the <i>Site Configuration -> Misc tab -> Support key</i> field, otherwise you will not be able to download plugins that you are entitled to.
				</p>
			</div>
			<div id="username_input" style="display:none">
				<fieldset>
				Before you can purchase plugins, you need a Username and Password, which you can get by registering for free at <a href="http://www.jomres.net/my-account/register" target="_blank">Jomres.net</a>.<br/> If you already have a username and password please enter them here. When you\'ve done that, click the Purchase Plugins! button.<br/>
					<legend>Your details</legend>
						<ul>
							<li>
								<label for=name>Username</label>
								<input id=name name=name type=text placeholder="Your username" value="'.$jrConfig['license_server_username'].'" required autofocus>
							</li>
							<li>
								<label for=password>Password</label>
								<input id=password name=password type=password placeholder="Your password" value="'.$jrConfig['license_server_password'].'" required>
							</li>
						</ul>
				</fieldset>
				<small>Once you have paid your invoice, Jomres will automatically offer you an installation link next to your purchased plugin(s), click that link to install the plugin(s).</small><br/>
				<small>Note that purchase of a plugin download does not entitle you to support for Jomres. If you require support we would encourage you to purchase a Jomres Developer or Jomres Perpetual license.</small><br/>
				<div style="align:center;"><button class="fg-button ui-state-default ui-corner-all" id="purchase_button" onClick="sumbint();" style="width:275px" >Purchase plugins!</button></div>
			</div>
			<br/><br/><br/>
			';
			}
		
		////////////////////////////////////////////////////// Third party plugins
		if ($developer_user)
		echo '
		<h3>Please do not install all plugins with the hope that they will come in useful later. They are not all mutually exclusive, I.E. one plug may interfere with another, so it is recommended that you only install a plugin when you\'ve identified a requirement that the individual plugin fulfills. </h3><br/>Bold items in the core plugins list are generally essential when building a portal, and if you have upgraded from v4 you should consider installing those plugins to continue working as before.';
		
		echo '</td>';
		echo '<td width="25%" valign="top">
			<table width="100%" border="0">
			<tr>
				<th class="ui-widget-header ui-corner-tl ui-corner-tr" align="center">Legend</td>
			</tr>
			<tr class="ui-state-highlight">
				<td align="center">Already installed</td>
			</tr>
			<tr class="ui-state-error">
				<td  align="center">Upgrade is available</td>
			</tr>
            <tr>
				<td align="center" style="border-style:solid;border-color:#00ff00;border-width:1px;">Free plugin</td>
			</tr>
			<tr>
				<td align="center" class="ui-widget-content">Third party plugin</td>
			</tr>
		</table>
		</td></tr></table>
		';
		echo '<table width="100%" border="0">
			<tr>
				<th class="ui-widget-header ui-corner-tl ui-corner-tr" colspan="6">Third party plugins</th>
			</tr>
			<tr>
				<th class="ui-state-default">Name</th>
				<th class="ui-state-default">Your Version</th>
				<th class="ui-state-default">Description</th>
				<th class="ui-state-default">Author</th>
				<th class="ui-state-default">Author email</th>
				<th class="ui-state-default">Remove plugin</th>
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
			$already_installed = false;
			if (array_key_exists($n,$installed_plugins ) )
				{
				$already_installed = true;
				$uninstallAction=$uninstall_text;
				$installAction=$reinstall_text;
				$row_class='alreadyinstalled';
				$action="Reinstall";
				$uninstall="<a href=\"".$uninstallLink."\">".$uninstallText."</a>";
				}

			$uninstallLink="";
			
			$uninstallLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=removeplugin&no_html=1&plugin='.$n.'">'.$uninstallAction.'</a>';

			$local_version=$installed_plugins[$n]['version'];
			if (!array_key_exists($n,$installed_plugins ) )
				$local_version="N/A";
			echo
			"<tr class=\"".$row_class."\">
				<td class=\"ui-widget-content ui-corner-all\">".$tpp['name']."</td>
				<td class=\"ui-widget-content ui-corner-all\">".$local_version."</td>
				<td class=\"ui-widget-content ui-corner-all\">".stripslashes($tpp['description'])."</td>
				<td class=\"ui-widget-content ui-corner-all\">".stripslashes($tpp['author'])."</td>
				<td class=\"ui-widget-content ui-corner-all\"><a href=\"mailto:".stripslashes($tpp['authoremail'])."?subject=".$tpp['name']."\">".stripslashes($tpp['authoremail'])."</a> </td>
				<td class=\"ui-widget-content ui-corner-all\">".$uninstallLink."</td>
			</tr>";
			}
		echo '</table>
		';
		// echo '<script type="text/javascript">
			// jomresJquery(function() {
				// jomresJquery(\'tr\').hover(function() {
					// jomresJquery(this).contents(\'td\').css({\'border\': \'1px solid red\', \'border-left\': \'none\', \'border-right\': \'none\'});
					// jomresJquery(this).contents(\'td:first\').css(\'border-left\', \'1px solid red\');
					// jomresJquery(this).contents(\'td:last\').css(\'border-right\', \'1px solid red\');
				// },
				// function() {
					// jomresJquery(this).contents(\'td\').css(\'border\', \'none\');
				// });
			// });
			// </script>';
			
			echo '<br /><br /><form enctype="multipart/form-data" action="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=addplugin&thirdparty=1" method="post">
			<input type="hidden" name="no_html" value="1" />
			<table width="100%" border="0">
                <tr>
                    <th class="ui-widget-header ui-corner-tl ui-corner-tr">Install third party plugin</th>
                </tr>
                <tr>
                    <td class="ui-widget-content ui-corner-all"><input type="file" name="pluginfile" size="40"/> <input type="submit" value="Install" class="fg-button ui-state-default ui-corner-all" /></td>
                </tr>
			</table>
			</form>
		<br/>
		<br/>
		
		';
		
		////////////////////////////////////////////////////// Remote plugins
		$span = 12;
		if ($developer_user)
			$span=11;
		
		echo '<table width="100%" border="0">
			<tr>
				<td class="ui-widget-header ui-corner-tl ui-corner-tr" colspan="'.$span.'" align="center">Jomres.net plugins</td>
			</tr>
			<tr>
				<th class="ui-state-default">Name</th>
				<!-- <th class="ui-state-default">Image</th>  -->
				<th class="ui-state-default">Minimum Jomres version</th>
				<th class="ui-state-default">Your Version</th>
				<th class="ui-state-default">Current Version</th>
				<th class="ui-state-default">Last updated</th>
				<th class="ui-state-default">Description</th>
				<th class="ui-state-default">Changelog</th>
				<th class="ui-state-default">Warnings</th>
				<th class="ui-state-default">Add/reinstall/upgrade plugin</th>
				<th class="ui-state-default">Remove plugin</th>
				';
				if (!$developer_user)
					echo '<th class="ui-state-default">Plugin price<br/> (Click to add to your cart)</th>';
			echo '</tr>';
		$install_text="Install";
		$reinstall_text="Reinstall";
		$upgrade_text="Upgrade";
		$uninstall_text="Uninstall";
		$externalPluginTypes=array("component","module","mambot");
		$counter = 0;
		
		foreach ($remote_plugins as $rp)
			{
			$type=$rp['type'];
			$plugin_name = $rp['name'];
			if ($developer_user)
				$n=$rp['name'];
			elseif (array_key_exists($plugin_name,$current_licenses))
				$n=$plugin_name."&plugin_key=".$current_licenses[$plugin_name];
				else
					$n=$rp['name'];

			$min_jomres_ver = explode(".",$rp['min_jomres_ver']);
			
			$row_class='ui-widget-content ui-corner-all';
			$installAction=$install_text;
			$uninstallAction=" ";
			if (array_key_exists($rp['name'],$installed_plugins ) )
				{
				$uninstallAction=$uninstall_text;
				$installAction=$reinstall_text;
				$row_class='ui-state-highlight';
				$action="Reinstall";
				$uninstall="<a href=\"".$uninstallLink."\">".$uninstallText."</a>";
				if ($rp['version'] > $installed_plugins[$plugin_name]['version'])
					{
					$installAction=$upgrade_text;
					$row_class='ui-state-error';
					}
				}
				
			$strong1 = '';
			$strong2 = '';
			if (in_array($rp['name'],$this->main_plugins))
				{
				$strong1 = '<strong>';
				$strong2 = '</strong>';
				}
			
			$installLink='';
			if (array_key_exists($plugin_name,$current_licenses) || $developer_user)
				$installLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=addplugin&no_html=1&plugin='.$n.'">'.$installAction.'</a>';

			$uninstallLink="";
			if (!in_array($rp['type'],$externalPluginTypes) )
				$uninstallLink='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=removeplugin&no_html=1&plugin='.$n.'">'.$uninstallAction.'</a>';

			$local_version=$installed_plugins[$plugin_name]['version'];
			if (!array_key_exists($plugin_name,$installed_plugins ) )
				$local_version="N/A";
			

				
				
			$style = "";
			if ($rp['price'] == 0 && $row_class=='ui-widget-content ui-corner-all')
				{
				$row_class='';
				$style = 'style="border-style:solid;border-color:#00ff00;border-width:1px;" ';
				}
				
			$manual_link ='';
			if( isset($rp['manual_link']) && $rp['manual_link'] != '')
				$manual_link = '&nbsp;<a href="http://manual.jomres.net/'.$rp['manual_link'].'.html" target="_blank">Manual</a>';
				
			$demo_url ='';
			if( isset($rp['demo_url']) && $rp['demo_url'] != '')
				$demo_url = '&nbsp;<a href="'.$rp['demo_url'].'.html" target="_blank">Demo</a>';
			
			$changelog = '';
			if ($rp['change_log'] != '' )
				$changelog = jomres_makeTooltip($rp['name'],$hover_title="",$rp['change_log'],$rp['change_log'],$class="",$type="infoimage");
				
			$highlight = '';
			if ($rp['highlight'] != '' )
				$highlight = jomres_makeTooltip($rp['name']."_warning",$hover_title="",$rp['highlight'],$rp['highlight'],$class="",$type="warning");
			
			// $image = '';
			// if ($rp['image'] != '' )
				// $image = jomres_make_image_popup($rp['name'],$rp['image']);
			
			// old image showing html, removed because it slowed down the plugin list
			// <td class=\"ui-corner-all\" $style>".$image."</td>
			echo
			"<tr class=\"".$row_class." \" >
				<td class=\"ui-corner-all\" $style>".$strong1.$rp['name'].$strong2."</td>
				<td class=\"ui-corner-all\" $style>".$rp['min_jomres_ver']."</td>
				<td class=\"ui-corner-all\" $style>".$local_version."</td>
				<td class=\"ui-corner-all\" $style>".$rp['version']."</td>
				<td class=\"ui-corner-all\" $style>".$rp['lastupdate']."</td>
				<td class=\"ui-corner-all\" $style>".$strong1.stripslashes($rp['description']).$strong2.$manual_link." ".$demo_url."</td>
				<td class=\"ui-corner-all\" $style>".$changelog."</td>
				<td class=\"ui-corner-all\" $style>".$highlight."</td>
				";
				if ( count($min_jomres_ver) == 3 && count($this_jomres_version) == 3)
					{
					$min_major_version = $min_jomres_ver[0];
					$min_minor_version = $min_jomres_ver[1];
					$min_revis_version = $min_jomres_ver[2];
					
					$current_major_version = $this_jomres_version[0];
					$current_minor_version = $this_jomres_version[1];
					$current_revis_version = $this_jomres_version[2];
					

					if ( $current_major_version >= $min_major_version && $current_minor_version >= $min_minor_version && $current_revis_version >= $min_revis_version )
						echo "<td class=\"ui-corner-all\" $style>".$installLink."</td>";
					elseif ($current_major_version >= $min_major_version && $current_minor_version > $min_minor_version)
						echo "<td class=\"ui-corner-all\" $style>".$installLink."</td>";
					elseif ($current_major_version > $min_major_version) 
						echo "<td class=\"ui-corner-all\" $style>".$installLink."</td>";
					else 
						echo "<td class=\"ui-corner-all\" $style>Requires a later version of Jomres</td>";
					}
				else
					echo "<td class=\"ui-corner-all\" $style>".$installLink."</td>";

				echo "<td class=\"ui-corner-all\" $style>".$uninstallLink."</td>";
				$button = '';
				
				if ( !array_key_exists($rp['name'],$installed_plugins ) && !array_key_exists($rp['name'],$current_licenses ) )
					{
					$button ='Add to cart <button id="'.$rp['name'].'" class="fg-button ui-state-default ui-corner-all" onClick="addToCart(\''.$rp['name'].'\',\''.$rp['price'].'\');" >&pound;'.number_format($rp['price']).'</button>';
					//$button = '<button id="'.$rp['name'].'" class="fg-button ui-state-default ui-corner-all" onClick="addToCart(\''.$rp['name'].'\',\''.$rp['price'].'\');jomresJquery(\'#cart_wrapper\').effect( \'pulsate\',1000 );">&pound;'.number_format($rp['price']).'</button>';
					}
				if (!$developer_user)
					echo "<td class=\"ui-corner-all\" $style>".$button."</td>";
			echo "</tr>
			";
			$counter++;
			}
			
		echo '</table>
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
		$this->main_plugins[]="alternative_init";
		$this->main_plugins[]="jomres_asamodule";
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
