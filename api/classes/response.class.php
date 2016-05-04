<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class response 
	{
	public function __construct() 
		{
		$this->success	= false ;
		$this->data		= array() ;
		}
	
	public function set($var , $message )
		{
		if (!isset($this->$var))
			$this->$var = null;
		$this->$var = $message;
		}
	}