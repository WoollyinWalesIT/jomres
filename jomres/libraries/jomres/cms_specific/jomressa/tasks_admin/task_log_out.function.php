<?php
// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
// ################################################################
function task_log_out()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$JSAuser->log_out();
	}
?>