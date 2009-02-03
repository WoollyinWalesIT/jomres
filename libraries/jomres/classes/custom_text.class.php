<?php
/**
#
 * JRPortal core file
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################



class custom_text
	{
	function custom_text() 
		{
		global $jomresConfig_lang;
		$this->lang=$jomresConfig_lang;
		$this->global_custom_text=array();
		$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = 0 AND language = '".$this->lang."'";
		$customTextList=doSelectSql($query);
		if (count($customTextList))
			{
			$customTextArray=array();
			foreach ($customTextList as $text)
				{
				$theConstant=strtoupper(str_replace("sc<x>ript","script",$text->constant));
				$this->global_custom_text[$theConstant]=stripslashes($text->customtext);
				}
			}

		}
		
	function get_custom_text_for_property($property_uid)
		{
		$current_custom_text=$this->global_custom_text;
		$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = '".(int)$property_uid."' AND language = '".$this->lang."'";
		$customTextList=doSelectSql($query);
		if (count($customTextList))
			{
			$customTextArray=array();
			foreach ($customTextList as $text)
				{
				$theConstant=strtoupper(str_replace("sc<x>ript","script",$text->constant));
				$current_custom_text[$theConstant]=stripslashes($text->customtext);
				}
			}
		return $current_custom_text;
		}
		
	}

?>