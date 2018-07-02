<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// Must do this here, because if we cannot create the encryption key, we cannot encode the user's data
try 
	{
	jr_import('jomres_encryption');
	$jomres_encryption = new jomres_encryption();
	}
	catch (Exception $e) 
	{
		echo $e->getMessage();
		return;
	}
