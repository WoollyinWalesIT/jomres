<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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