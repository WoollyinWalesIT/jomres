<?php
/**
#
 * Creates the Jomres currency format object
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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