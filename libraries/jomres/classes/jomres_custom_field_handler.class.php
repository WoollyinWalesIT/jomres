<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
		$query = "SELECT uid,fieldname,default_value,description,required FROM #__jomres_custom_fields";
		$fields = doSelectSql($query);
		if (count($fields)>0)
			{
			foreach ($fields as $t)
				{
				$this->custom_fields[$t->uid]=array('uid'=>$t->uid,'fieldname'=>$t->fieldname,'default_value'=>$t->default_value,'description'=>$t->description,'required'=>$t->required);
				}
			}
		return $this->custom_fields;
		}
	}
	
?>