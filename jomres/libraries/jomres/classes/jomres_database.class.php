<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


// Good ol' 1and1
$tmp    = substr( strstr( get_showtime( 'host' ), ':' ), 1 );
$port   = null;
$socket = null;
$host   = '';
if ( !empty( $tmp ) )
	{
	// Get the port number or socket name
	if ( is_numeric( $tmp ) )
		{
		$port = $tmp;
		}
	else
		{
		$socket = $tmp;
		}
	// Extract the host name only
	$host = substr( get_showtime( 'host' ), 0, strlen( get_showtime( 'host' ) ) - ( strlen( $tmp ) + 1 ) );
	}

// This will take care of the following notation: ":3306"
if ( $host == '' )
	{
	$host = get_showtime( 'host' );
	}
set_showtime( 'host', $host );
set_showtime( 'port', $port );
set_showtime( 'socket', $socket );

class jomres_database
	{
	function __construct()
		{
		// Check if magic_quotes_runtime is active
		if ( get_magic_quotes_runtime() )
			{
			// Deactivate
			@set_magic_quotes_runtime( false );
			}
		
		$this->system_tables = array ();
		$this->error         = null;
		$this->stmt			 = null;
		$this->result		 = null;
		
		$this->dbtype        = get_showtime( 'dbtype' );
		$this->db_prefix	 = get_showtime( 'dbprefix' );
		
		if ((string)$this->dbtype == '')
			$this->dbtype = 'mysqli';
			
		if (defined( 'AUTO_UPGRADE'))
			$this->dbtype = 'mysqli';
		
		if ( !this_cms_is_wordpress() )
			{
			$this->_init();
			}
		}
	
	function _init()
		{
		switch($this->dbtype) 
			{
			case "mysqli" :
				if ( get_showtime( "socket" ) == '/tmp/mysql5.sock' ) 
					$this->link = mysqli_connect( get_showtime( 'host' ), get_showtime( 'user' ), get_showtime( 'password' ), null, get_showtime( 'port' ), get_showtime( 'socket' ) ) or die( 'Could not connect ' . mysqli_error( $this->link ) );
				else
					$this->link = mysqli_connect( get_showtime( 'host' ), get_showtime( 'user' ), get_showtime( 'password' ) ) or die( 'Could not connect ' . mysqli_error( $this->link ) );
				
				mysqli_select_db( $this->link, get_showtime( 'db' ) ) or die( 'Could not select database' );
				mysqli_query( $this->link, "SET CHARACTER SET utf8" );
				mysqli_query( $this->link, "SET NAMES utf8" );
				
				$this->error = mysqli_error( $this->link );
				break;
			
			case "mysql":
				$this->link = mysql_connect( get_showtime( 'host' ), get_showtime( 'user' ), get_showtime( 'password' ) ) or die( 'Could not connect ' . mysql_error() );
				mysql_select_db( get_showtime( 'db' ) ) or die( 'Could not select database' );
				mysql_query( "SET CHARACTER SET utf8" );
				mysql_query( "SET NAMES utf8" );
				
				$this->error = mysql_error();
				break;
			
			case "pdomysql":
				try {
					$this->PDOdb = new PDO("mysql:host=".get_showtime( 'host' ).";dbname=".get_showtime( 'db' ), get_showtime( 'user' ), get_showtime( 'password' ));
					$this->PDOdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} 
				catch(PDOException $e) 
					{
					output_fatal_error( $e );
					}
				$this->PDOdb->exec( "SET CHARACTER SET utf8" );
				$this->PDOdb->exec( "SET NAMES utf8" );

				$this->error = $this->PDOdb->errorInfo();
				break;
			
			default:
				break;
			}
		}
	
	function close()
		{
		switch($this->dbtype) 
			{
			case "mysqli" :
				mysqli_close($this->link);
				break;
			case "pdomysql" :
				$this->PDOdb = null;
				break;
			default:
				break;
			}
		}
	
	function query()
		{
		if ( this_cms_is_wordpress() )
			{
			global $wpdb;
			
			$this->result = $wpdb->query( $this->query );
			
			if ( $this->result !== false )
				{
				$this->last_id = false;
				
				if ( $wpdb->insert_id > 0 )
					$this->last_id = $wpdb->insert_id;
				
				if ((int)$this->result == 0)
					return true;
				else
					return $this->result;
				}
			else
				{
				if ( $wpdb->last_error !== '' )
					{
					$this->error = $wpdb->last_result;
					}
				}
			
			return false;
			}
		else
			{
			switch($this->dbtype) 
				{
				case "mysqli" :
					$this->result = mysqli_query( $this->link, $this->query );
					break;
				case "mysql" :
					$this->result = mysql_query( $this->query );
					break;
				case "pdomysql" :
					try  {
						$this->result = $this->PDOdb->exec( $this->query );
						}
					catch(PDOException $e) 
						{
						output_fatal_error( $e );
						}
					break;
				default:
					break;
				}
			
			if ( $this->result !== false )
				{
				$this->last_id = false;

				switch($this->dbtype) 
					{
					case "mysqli" :
						$last_id = mysqli_insert_id( $this->link );
						break;
					case "mysql" :
						$last_id = mysql_insert_id();
						break;
					case "pdomysql" :
						$last_id = $this->PDOdb->lastInsertId();
						break;
					default:
						break;
					}
				
				if ( $last_id > 0 )
					$this->last_id = $last_id;

				if ((int)$this->result == 0)
					return true;
				else
					return $this->result;
				}
			else
				{
				switch($this->dbtype) 
					{
					case "mysqli" :
						$this->error = mysqli_error( $this->link );
						break;
					case "mysql" :
						$this->error = mysql_error();
						break;
					case "pdomysql" :
						$this->error = $this->PDOdb->errorInfo();
						break;
					default:
						break;
					}

				return false;
				}
			}
		}

	function setQuery( $query )
		{
		if ( this_cms_is_wordpress() )
			{
			global $wpdb;
			
			$q = str_replace( "#__", "{$wpdb->prefix}", $query );
			$this->query = $q;
			}
		else
			{
			$performance_monitor = jomres_singleton_abstract::getInstance( 'jomres_performance_monitor' );
			$performance_monitor->set_sqlquery_log( "" . whereCalled() . " <br/>" . $query . "<br/>" );
			$q = str_replace( "#__", $this->db_prefix, $query );
			$this->query = $q;
			}
		}

	function loadObjectList()
		{
		if ( strlen( $this->query ) == 0 )
			{
			return null;
			}
		
		$this->stmt = null;
		$this->result = array();
		
		if ( this_cms_is_wordpress() )
			{
			global $wpdb;
			
			$this->result = $wpdb->get_results( $this->query, OBJECT );
			}
		else
			{
			switch($this->dbtype) 
				{
				case "mysqli" :
					$this->stmt = mysqli_query( $this->link, $this->query );
					break;
				case "mysql" :
					$this->stmt = mysql_query( $this->query );
					break;
				case "pdomysql" :
					try {
						$this->stmt = $this->PDOdb->query( $this->query, PDO::FETCH_OBJ);
						}
					catch(PDOException $e) 
						{
						output_fatal_error( $e );
						}
					break;
				default:
					break;
				}
			
			if ( $this->stmt )
				{
				switch($this->dbtype) 
					{
					case "mysqli" :
						while ( $row = mysqli_fetch_object( $this->stmt ) )
							{
							$this->result[] = $row;
							}
						mysqli_free_result( $this->stmt );
						break;
					case "mysql" :
						while ( $row = mysql_fetch_object( $this->stmt ) )
							{
							$this->result[] = $row;
							}
						mysql_free_result( $this->stmt );
						break;
					case "pdomysql" :
						$this->result = $this->stmt->fetchAll(PDO::FETCH_OBJ);
						$this->stmt->closeCursor();
						break;
					default:
						break;
					}
				}
			}

		return $this->result;
		}

	function unsetResult()
		{
		$this->stmt = null;
		$this->result = array();
		}
	}

function whereCalled()
	{
	$trace     = debug_backtrace();
	$file1_arr = explode( JRDS, $trace[ 2 ][ 'file' ] );
	$file1     = $file1_arr[ count( $file1_arr ) - 1 ];
	$file2_arr = explode( JRDS, $trace[ 3 ][ 'file' ] );
	$file2     = $file2_arr[ count( $file2_arr ) - 1 ];

	return "on line " . $trace[ 2 ][ 'line' ] . " of  \n(in <b>" . $file1 . "</b>) for line " . $trace[ 3 ][ 'line' ] . " " . $file2;
	}

