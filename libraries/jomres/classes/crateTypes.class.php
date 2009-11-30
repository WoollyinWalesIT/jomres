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

class crateTypes
	{
	function crateTypes()
		{
		$this->id=0;
		$this->types=array('1'=>'Flat','2'=>'Percentage');
		}
	
	function makeCrateTypeDropdown()
		{
		$options = array();
		foreach ($this->types as $k=>$v)
			{
			$options[] = jomresHTML::makeOption( $k, $v );
			}
		return jomresHTML::selectList( $options, 'type','class="inputbox" size="1"', 'value', 'text', $this->id);
		}	
	
	function getCrate()
		{
		return $this->types[$this->id];
		}
	}

?>