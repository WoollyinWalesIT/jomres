<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_language_definitions
	{

	function jomres_language_definitions()
		{
		$this->definitions = array();
		$this->ptype ='';
		$this->lang ='en-GB';
		}
	
	function set_language($lang= 'en-GB')
		{
		$this->lang = $lang;
		}
	
	function set_property_type($ptype='')
		{
		if (is_null($ptype))
			$ptype = '';
		$this->ptype = $ptype;
		}
	
	function define($constant,$string)
		{
		$this->definitions[$this->lang][$this->ptype][$constant] = $string;
		}
		
	function get_defined($constant)
		{
		
		if (!isset($this->definitions[$this->lang][$this->ptype]))
			{
			if ($this->ptype == "")
				require(JOMRESPATH_BASE.JRDS.'language'.JRDS.$this->lang.'.php');
			elseif (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.strtolower($this->ptype).JRDS.$this->lang.'.php'))
				require(JOMRESPATH_BASE.JRDS.'language'.JRDS.strtolower($this->ptype).JRDS.$this->lang.'.php');
			else { echo "Oops, no lang file for that property type.";exit;}
			
			}
/* if ($constant == "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES")
	{
	var_dump( $this->definitions[$this->lang][$this->ptype][$constant]);exit;
	} */
	
		return $this->definitions[$this->lang][$this->ptype][$constant];
		}
	}


?>