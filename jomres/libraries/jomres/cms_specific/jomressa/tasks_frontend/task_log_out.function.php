<?php
function task_log_out()
	{
	$JSAuser 		= 	jomressa_getSingleton('jomressa_access_user');
	$JSAuser->log_out();
	}
?>