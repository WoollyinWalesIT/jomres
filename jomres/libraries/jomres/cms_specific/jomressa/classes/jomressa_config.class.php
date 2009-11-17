<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
class jomressa_config
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct() 
		{
		$this->config = array();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomressa_config();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
	}
?>