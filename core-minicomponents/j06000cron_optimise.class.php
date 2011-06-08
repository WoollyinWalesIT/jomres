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

class j06000cron_optimise
	{
	function j06000cron_optimise ()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$jomresConfig_secret = get_showtime('secret');
		$secret = jomresGetParam($_REQUEST,"secret","");
		if ($secret == $jomresConfig_secret)
			{
			$foundTables=array();
			$query="SHOW TABLES";
			$result=doSelectSql($query);
			$string="Tables_in_".strtolower($jomresConfig_db);
			foreach ($result as $r)
				{
				if (strstr($r->$string, $jomresConfig_dbprefix.'jomres') || strstr($r->$string, $jomresConfig_dbprefix.'jomcomp')|| strstr($r->$string, $jomresConfig_dbprefix.'jomresportal'))
					{
					$foundTables[]=$r->$string;
					}
				}
			$query="OPTIMIZE TABLE";
			$tableCount=count($foundTables);
			$counter=0;
			foreach ($foundTables as $t)
				{
				$query.=" `".$t."`";
				$counter++;
				if ($counter<$tableCount)
					$query.=",";
				$query.=" ";
				}
			$result=doInsertSql($query,"");
			}
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}		
	}
	
?>