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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################



class custom_text
	{
	private static $configInstance;
	private static $internal_debugging;

	public function __construct() 
		{
		self::$internal_debugging = false;
		$this->xcustom_text();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new custom_text();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	function xcustom_text() 
		{
		$this->lang=get_showtime('lang');
		$this->global_custom_text=array();
		$this->property_uids_custom_text=array();
		$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = 0 AND language = '".$this->lang."'";
		$customTextList=doSelectSql($query);
		if (count($customTextList))
			{
			$customTextArray=array();
			foreach ($customTextList as $text)
				{
				$theConstant=str_replace("sc<x>ript","script",$text->constant);
				$this->global_custom_text[$theConstant]=stripslashes($text->customtext);
				}
			}
		}

	function get_custom_text_for_property($property_uid)
		{
		if ($property_uid > 0)
			$this->property_uid = $property_uid;
		if (!isset($this->property_uids_custom_text[(int)$this->property_uid]))
			{
			$current_custom_text=$this->global_custom_text;
			$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = '".(int)$property_uid."' AND language = '".$this->lang."'";
			
			$customTextList=doSelectSql($query);
			if (count($customTextList))
				{
				$customTextArray=array();
				foreach ($customTextList as $text)
					{
					$theConstant=str_replace("sc<x>ript","script",$text->constant);
					$current_custom_text[$theConstant]=stripslashes($text->customtext);
					//echo $theConstant." - ".$text->customtext."<br>
					//";
					}
				//echo $property_uid." ".$current_custom_text."  CUSTOM<br>";
				$this->property_uids_custom_text[(int)$property_uid]= $current_custom_text;
				}
			}
		else
			{
			$current_custom_text=$this->property_uids_custom_text[$property_uid];
			}
		return $current_custom_text;
		}

	function get_custom_text()
		{
		$property_specific_text = array();
		if (isset($this->property_uids_custom_text[(int)$this->property_uid]))
			$property_specific_text = $this->property_uids_custom_text[(int)$this->property_uid];
		$result = array_merge ($this->global_custom_text,$property_specific_text);
		return $result;
		}
	}

?>