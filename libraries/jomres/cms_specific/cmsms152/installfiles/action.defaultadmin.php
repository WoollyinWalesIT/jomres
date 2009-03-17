<?php

// no direct access
if (!isset($gCms)) 
{
	exit(); 
}
// check login
check_login();

// only let people access module preferences if they have permission
if ($this->VisibleToAdminUser())
{
define('_JOMRES_INITCHECK', 1 );
define('_JOMRES_INITCHECK_ADMIN', 1 );

require_once(dirname(__FILE__).'/../../jomres/admin.php');
}
else
{
    $this->ShowError($this->Lang('access_denied'));
}

function GetFriendlyName()
	{
	}

?>