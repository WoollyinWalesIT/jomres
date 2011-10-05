<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000pseudocron
	{
	function j16000pseudocron()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$jomresConfig_secret = get_showtime('secret');
		$plugin="jomcompcronjobs";
		if (isset($_POST['method']) )
			$this->savecronconfigPlugin($plugin);

		$cronConfigOptions=$this->getcronconfig($plugin);

		$method = array();
		$method[] = jomresHTML::makeOption( 'Minicomponent', "Minicomponent" );
		$method[] = jomresHTML::makeOption( 'Cron', "Cron job" );
		$methodDropdown=jomresHTML::selectList( $method, 'method','class="inputbox" size="1"', 'value', 'text', $cronConfigOptions['method']);

		$displaylogging = array();
		$displaylogging[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		$displaylogging[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$displayloggingDropdown=jomresHTML::selectList( $displaylogging, 'displaylogging','class="inputbox" size="1"', 'value', 'text', $cronConfigOptions['displaylogging']);

		$logging = array();
		$logging[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		$logging[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$loggingDropdown=jomresHTML::selectList( $logging, 'logging','class="inputbox" size="1"', 'value', 'text', $cronConfigOptions['logging']);

		$verbose = array();
		$verbose[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		$verbose[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$verboseDropdown=jomresHTML::selectList( $verbose, 'verbose','class="inputbox" size="1"', 'value', 'text', $cronConfigOptions['verbose']);

		echo "<hr>";
		?>
			<form action="<?php echo JOMRES_SITEPAGE_URL_ADMIN; ?>" method="post" name="adminForm">
			<table class="ui-widget-content ui-corner-all"  width="75%" >
			<tr>
				<td width="100%" class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_A_CRON_TITLE; ?></td>
			</tr>
			<tr>
				<td width="100%" class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_A_CRON_DESC; ?></td>
			</tr>
			
			</table>
			<table class="ui-widget-content ui-corner-all"  width="75%" >
			<tr align="center" valign="middle">
				<th width="20%" class="ui-widget-header ui-corner-all"></th>
				<th width="20%" class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_A_CURRENT_SETTINGS; ?></th>
				<th width="60%" class="ui-widget-header ui-corner-all"><?php echo _JOMRES_COM_A_EXPLANATION; ?></th>
			</tr>
			<tr align="center" valign="middle">
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_METHOD; ?></td>
				<td class="ui-widget-content" valign="top"><?php echo $methodDropdown ;?></td>
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_METHOD_DESC; ?></td>
			</tr>
			
			<tr align="center" valign="middle">
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_LOGGING; ?></td>
				<td class="ui-widget-content" valign="top"><?php echo $displayloggingDropdown ;?></td>
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_LOGGING_DESC; ?></td>
			</tr>
			<tr align="center" valign="middle">
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_LOGGINGENABLED; ?></td>
				<td class="ui-widget-content" valign="top"><?php echo $loggingDropdown ;?></td>
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_LOGGINGENABLED_DESC; ?></td>
			</tr>
			<tr align="center" valign="middle">
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_VERBOSELOGS; ?></td>
				<td class="ui-widget-content" valign="top"><?php echo $verboseDropdown ;?></td>
				<td class="ui-widget-content" valign="top"><?php echo _JOMRES_COM_A_CRON_VERBOSELOGS_DESC; ?></td>
			</tr>
			<tr align="center" valign="middle">
				<th colspan="3">&nbsp;</th>
			</tr>
			</table>
			<input type="hidden" name="task" value="pseudocron" />
			<input type="hidden" name="option" value="com_jomres" />
			<input type="submit" value="submit" class="button" />
			</form>
		<?php
		echo "<hr>";echo "<hr>";
		echo _JOMRES_COM_A_CRON_IMMEDIATERUN."<br />";
		jr_import('jomres_cron');
		$cron = new jomres_cron($displayLog);
		foreach ($cron->allUnlockedJobs as $job)
			{
			echo '<a href="'.JOMRES_SITEPAGE_URL_NOHTML."&task=cron_".$job['job_name']."&secret=".$jomresConfig_secret.'" target="_blank" >'.$job['job_name'].'</a><br />';
			}

		echo "<hr>";echo "<hr>";
		echo "JOB LOGS";
		echo "<hr>";echo "<hr>";
		$query = "SELECT ";

		$query = "SELECT log_details FROM #__jomcomp_cronlog ORDER BY id DESC LIMIT 100";
		$logDetails = doSelectSql($query);
		foreach ($logDetails as $log)
			{
			echo $log->log_details;
			echo "<hr>";
			}
		}
	
	function getcronconfig($plugin)
		{
		$cronConfigOptions=array();
		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin'";
		$settingList=doSelectSql($query);
		
		foreach ($settingList as $s)
			{
			$cronConfigOptions[$s->setting]=$s->value;
			}
		return $cronConfigOptions;
		}
		
	function savecronconfigPlugin($plugin)
		{
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty="0";
		foreach ($_POST as $k=>$v)
			{
			$dirty = (string) $k;
			$k=addslashes($dirty);
			if ($k!='task' && $k!='plugin' && $k !="jomrestoken" && $k !="option" )
				$values[$k]=jomresGetParam( $_POST, $k, "" );
			}
		foreach ($values as $k=>$v)
			{
			$query="SELECT id FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
			$settingList=doSelectSql($query);
			if (count($settingList)>0)
				{
				foreach ($settingList as $set)
					{
					$id=$set->id;
					}
				$query="UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' AND setting = '$k'";
				doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE',_JOMRES_MR_AUDIT_PLUGINS_UPDATE,FALSE));
				}
			else
				{
				$query="INSERT INTO #__jomres_pluginsettings
					(`prid`,`plugin`,`setting`,`value`) VALUES
					('".(int)$defaultProperty."','$plugin','$k','$v')";
				doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT',_JOMRES_MR_AUDIT_PLUGINS_INSERT,FALSE));
				}
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>