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