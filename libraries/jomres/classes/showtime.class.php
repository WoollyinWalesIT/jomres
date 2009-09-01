<?php
// My little joke, "showtime" was my favourite server on Delta Force 2 when I used to play it back in the late nineties.

class showtime
	{
	// Store the single instance of Database
	private static $configInstance;
	private static $internal_debugging;
	
	
	public function __construct() 
		{
		self::$internal_debugging = false;
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new showtime();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function __set($setting,$value)
		{
		if (self::$internal_debugging)
			echo "Setting ".$setting." to ".$value." <br>";
		$this->$setting = $value;
		return true;
		}
		
	public function __get($setting)
		{
		if (self::$internal_debugging)
			echo "Getting ".$setting." which is ".$this->$setting."<br>";
		return $this->$setting;
		}
	}
?>