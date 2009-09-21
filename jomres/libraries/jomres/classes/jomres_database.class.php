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

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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