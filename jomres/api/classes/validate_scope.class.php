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

class validate_scope 
	{
	public function __construct($user_scopes) 
		{
		$this->user_scopes =$user_scopes;
		}
	
	public function validate($scope)
		{
		$scope_valid = false;
		if (in_array($scope , $this->user_scopes ) )
			$scope_valid = true;
		else
			Flight::halt(403, 'Client not allowed to access this feature : '.$scope);
		}
	}