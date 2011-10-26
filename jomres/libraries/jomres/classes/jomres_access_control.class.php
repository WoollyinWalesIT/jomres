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


class jomres_access_control
	{
	private static $configInstance;
	private static $internal_debugging;

	public function __construct() 
		{
		self::$internal_debugging = false;
		if (jomres_cmsspecific_areweinadminarea())
			$this->feature_enabled = false;
		else
			$this->feature_enabled = true;
		
		$this->limit_to_menus_only = true;
		
		$this->init();
		}

	
	// We're not going to get too fancy with this, it's clear that it's easy to get too carried away with having insane levels of access control so we're going to keep this working
	// more or less similar to how Jomres already works, with a sliding scale of users : unregistered -> registered -> manager -> supermanager, with a Nobody option tagged on,
	// supermanagers > managers > registered users > unregistered, as we already have it. After all, this feature's mainly designed to prevent options from showing without having to edit files, 
	// with a side benefit from ensuring that users cannot access some scripts even if they know the urls.
	
	function can_user_access_this_script($minicomp)
		{
		if (defined('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT'))
			{
			$this->levels = array ("default"=>_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT, "anybody"=>_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY,"registered"=>_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED,"manager"=>_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER,"supermanager"=>_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER,"nobody"=>_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY);
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (!is_null($thisJRUser))
			{
			if (!$this->feature_enabled) 
				return true;
			else
				{
				$user_can_access = false;
				$users_access_level = $this->get_this_users_access_level();
				if (!$users_access_level) // We cannot identify this user's level at all, should be at least "anybody" but we don't know, so we'll stop all running altogether
					exit;

				if (count($this->controlled	) > 0)
					{
					if (array_key_exists($minicomp,$this->controlled) )
						{
						//var_dump($minicomp." ".$this->controlled[$minicomp]['access_level']);exit;
						switch ($this->controlled[$minicomp]['access_level'])
							{
							case "anybody":
								$user_can_access = true;
								break;
							case "registered":
								if ($users_access_level == "supermanager" || $users_access_level == "manager" || $users_access_level == "registered")
									$user_can_access = true;
								break;
							case "manager":
								if ($users_access_level == "supermanager" || $users_access_level == "manager" )
									$user_can_access = true;
								break;
							case "supermanager":
								if ($users_access_level == "supermanager")
									$user_can_access = true;
								break;
							case "nobody":
							default :
								$user_can_access = false;
							}
						}
					else $user_can_access = true;
					}
				else $user_can_access = true;
					
				return $user_can_access;
				}
			}
		else return false;
		}

	private function init()
		{
		$this->controlled = array();
		$query = "SELECT id,scriptname,access_level FROM #__jomres_access_control";
		$scripts = doSelectSql($query);
		if (count($scripts)>0)
			{
			foreach ($scripts as $script)
				{
				$this->controlled[$script->scriptname] = array("scriptname" => $script->scriptname,"access_level"=>$script->access_level);
				}
			}
		}

	function generate_access_control_dropdown($minicomp)
		{
		$this->levels = array ("default"=>_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT, "anybody"=>_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY,"registered"=>_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED,"manager"=>_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER,"supermanager"=>_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER,"nobody"=>_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY);
		if (count($this->controlled) > 0)
			{
			if ( array_key_exists($minicomp,$this->controlled) )
				$current_level =$this->controlled['access_level'];
			else
				$current_level = "default"; // the access control system doesn't come into play here. Instead the existing access restrictions already built into the system may still prevent a user from running a script
			}
		else 
			$current_level = "default"; // the access control system doesn't come into play here. Instead the existing access restrictions already built into the system may still prevent a user from running a script

		
		$mode_options = array();
		$mode_options[] = jomresHTML::makeOption( 'anybody' ,		$this->levels['anybody']);
		$mode_options[] = jomresHTML::makeOption( 'registered' ,	$this->levels['registered']);
		$mode_options[] = jomresHTML::makeOption( 'manager' ,		$this->levels['manager']);
		$mode_options[] = jomresHTML::makeOption( 'supermanager' ,	$this->levels['supermanager']);
		$mode_options[] = jomresHTML::makeOption( 'nobody' ,		$this->levels['nobody']);

		$javascript = 'onChange="change_access_level(\''.$minicomp['eventPoint'].$minicomp['eventName'].'\',this.value)";';
		return jomresHTML::selectList( $mode_options, '',' AUTOCOMPLETE="OFF" class="inputbox" size="1" '.$javascript.'', 'value', 'text', $current_level);
		
		}
	
	private function get_this_users_access_level()
		{
		$access_level = false;
		$thisJRUser=jomres_getSingleton('jr_user');
		if ($thisJRUser->id == 0)
			$access_level = "anybody";
			elseif ($thisJRUser->id > 0 && !$thisJRUser->userIsManager)
				$access_level = "registered";
				elseif ($thisJRUser->userIsManager && !$thisJRUser->superPropertyManager)
					$access_level = "manager";
					elseif ($thisJRUser->superPropertyManager)
						$access_level = "supermanager";

		return $access_level;
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
		if (isset($this->$setting))
			return $this->$setting;
		return null;
		}
	
	}
	
?>