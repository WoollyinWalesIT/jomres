<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

//debug_print_backtrace();

class jomres_database
	{
	function jomres_database()
		{
		$this->system_tables=array();
		$this->error = null;
		$this->result=null;
		
		$showtime = jomres_getSingleton('showtime');
		$link = mysql_connect(get_showtime('host'),get_showtime('user'),get_showtime('password')) or die('Could not connect ' . mysql_error());
		mysql_select_db(get_showtime('db')) or die('Could not select database');
		$this->error = mysql_error();
		mysql_query("SET NAMES 'UTF8'");
		$this->db_prefix=get_showtime('dbprefix');
		}

	function query()
		{
		$this->result = mysql_query($this->query);
		if ($this->result)
			return $this->result;
		else
			{
			$this->error = mysql_error();
			return false;
			}
		}

	function setQuery($query)
		{
		$performance_monitor = jomres_getSingleton('jomres_performance_monitor');
		$performance_monitor->set_sqlquery_log($query);
		$q = str_replace("#__",$this->db_prefix,$query);
		$this->query=$q;
		}

	function loadObjectList()
		{
		if (strlen($this->query)==0)
			{
			return null;
			}
		$array = array();
		$this->result = mysql_query($this->query);
		if ($this->result)
			{
			while ($row = mysql_fetch_object( $this->result ))
				{
				$array[] = $row;
				}
			mysql_free_result( $this->result );
			}
		return $array;
		}

	function loadResult()
		{
		if (!($this->result = $this->query())) {
			return null;
		}
		$retval = null;
		if ($row = mysql_fetch_row( $this->result )) {
			$retval = $row[0];
		}
		mysql_free_result( $this->result );
		return $retval;
		}

	function unsetResult()
		{
		unset($this->result);
		}
	}


?>