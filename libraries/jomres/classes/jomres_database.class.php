<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

//debug_print_backtrace();

class jomres_database
	{
	function jomres_database()
		{
		$this->system_tables=array();
		$this->error = null;
		$this->result=null;
		$showtime = jomres_singleton_abstract::getInstance('showtime');
		$this->dbtype = get_showtime('dbtype');
		if ( $this->dbtype == "mysqli" )
			{
			$this->link = mysqli_connect(get_showtime('host'),get_showtime('user'),get_showtime('password')) or die('Could not connect ' . mysqli_error($this->link));
			mysqli_select_db($this->link, get_showtime('db')) or die('Could not select database');
			mysqli_query($this->link, "SET CHARACTER SET utf8");
			mysqli_query($this->link, "SET NAMES utf8");
			}
		else
			{
			$this->link = mysql_connect(get_showtime('host'),get_showtime('user'),get_showtime('password')) or die('Could not connect ' . mysql_error());
			mysql_select_db(get_showtime('db')) or die('Could not select database');
			mysql_query("SET CHARACTER SET utf8");
			mysql_query("SET NAMES utf8");
			}
		
		if ( $this->dbtype == "mysqli" )
			$this->error = mysqli_error($this->link);
		else
			$this->error = mysql_error();
		$this->db_prefix=get_showtime('dbprefix');
		}

	function query()
		{
		if ( $this->dbtype == "mysqli" )
			$this->result = mysqli_query($this->link, $this->query);
		else
			$this->result = mysql_query($this->query);
		if ($this->result)
			{
			if ( $this->dbtype == "mysqli" )
				$last_id = mysqli_insert_id($this->link);
			else
				$last_id = mysql_insert_id();
			$this->last_id = false;
			if ($last_id > 0)
				$this->last_id = $last_id;
			
			return $this->result;
			}
		else
			{
			if ( $this->dbtype == "mysqli" )
				$this->error = mysqli_error($this->link);
			else
				$this->error = mysql_error();
			return false;
			}
		}

	function setQuery($query)
		{
		$performance_monitor = jomres_singleton_abstract::getInstance('jomres_performance_monitor');
		$performance_monitor->set_sqlquery_log("".whereCalled()." <br/>".$query ."<br/>" );
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
		if ( $this->dbtype == "mysqli" )
			$this->result = mysqli_query($this->link, $this->query);
		else
			$this->result = mysql_query($this->query);
		if ($this->result)
			{
			if ( $this->dbtype == "mysqli" )
				{
				while ($row = mysqli_fetch_object( $this->result ))
					{
					$array[] = $row;
					}
				mysqli_free_result( $this->result );
				}
			else
				{
				while ($row = mysql_fetch_object( $this->result ))
					{
					$array[] = $row;
					}
				mysql_free_result( $this->result );
				}
			}
		return $array;
		}

	function loadResult()
		{
		if (!($this->result = $this->query())) {
			return null;
		}
		$retval = null;
		if ( $this->dbtype == "mysqli" )
			{
			if ($row = mysqli_fetch_row( $this->result )) 
				{
				$retval = $row[0];
				}
			mysqli_free_result( $this->result );
			}
		else
			{
			if ($row = mysql_fetch_row( $this->result )) 
				{
				$retval = $row[0];
				}
			mysql_free_result( $this->result );
			}
		return $retval;
		}

	function unsetResult()
		{
		unset($this->result);
		}
	}

function whereCalled() {
	$trace = debug_backtrace();
	$file1_arr = explode(JRDS,$trace[2]['file']);
	$file1 = $file1_arr[count($file1_arr)-1];
	$file2_arr = explode(JRDS,$trace[3]['file']);
	$file2 = $file2_arr[count($file2_arr)-1];
	
	return "on line ".$trace[2]['line']." of  \n(in <b>".$file1."</b>) for line ".$trace[3]['line']." ". $file2;
	}

?>