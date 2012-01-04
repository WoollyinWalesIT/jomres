<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Creates the Jomres currency format object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_custom_field_handler
	{
	/**
	#
	* Constructor. Sets the required curency format
	#
	*/
	function jomres_custom_field_handler($specific_path=false)
		{
		$this->custom_fields=array();
		$this->getAllCustomFields();
		}

	function getAllCustomFields()
		{
		$this->custom_fields = get_showtime('custom_field_handler_fields');
		if (is_null($this->custom_fields))
			{
			$query = "SELECT uid,fieldname,default_value,description,required FROM #__jomres_custom_fields";
			$fields = doSelectSql($query);
			if (count($fields)>0)
				{
				foreach ($fields as $t)
					{
					$this->custom_fields[$t->uid]=array('uid'=>$t->uid,'fieldname'=>$t->fieldname,'default_value'=>$t->default_value,'description'=>$t->description,'required'=>$t->required);
					}
				}
			set_showtime('custom_field_handler_fields',$this->custom_fields);
			}
		return $this->custom_fields;
		}
	}
	
?>