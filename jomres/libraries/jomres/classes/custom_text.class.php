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



class custom_text
	{
	function custom_text() 
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
				$theConstant=strtoupper(str_replace("sc<x>ript","script",$text->constant));
				$this->global_custom_text[$theConstant]=stripslashes($text->customtext);
				}
			}
		}

	function get_custom_text_for_property($property_uid)
		{
		if ($property_uid > 0)
			$this->property_uid = $property_uid;
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
				//echo $theConstant." - ".$text->customtext."<br>
				//";
				}
			$this->property_uids_custom_text[(int)$property_uid]= $current_custom_text;
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