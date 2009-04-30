<?php
/**
#
 * Jomres core file
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

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################



class jomres_database
	{
	function jomres_database()
		{
		global $jomresConfig_user,$jomresConfig_password,$jomresConfig_dbprefix,$jomresConfig_host,$jomresConfig_db;
		$this->queryLoggingEnabled = false;
		$this->system_tables=array();
		$this->queryLog=array();
		$this->error = null;
		$this->result=null;
		mysql_connect($jomresConfig_host,$jomresConfig_user,$jomresConfig_password) or die('Could not connect ' . mysql_error());
		mysql_select_db($jomresConfig_db) or die('Could not select database');
		mysql_query("SET NAMES 'UTF8'");
		$this->db_prefix=$jomresConfig_dbprefix;
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
		$q = str_replace("#__",$this->db_prefix,$query);
		$this->query=$q;
		if ($this->queryLoggingEnabled)
			$this->queryLog[]=$q;
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