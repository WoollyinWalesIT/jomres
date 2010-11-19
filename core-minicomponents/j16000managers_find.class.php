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

class j16000managers_find
	{
	function j16000managers_find()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$search_string	= strtolower(jomresGetParam( $_REQUEST, 'term', '' ));
		$all_users = jomres_cmsspecific_getCMSUsers();
		
		$existing_managers = array();
		$query="SELECT userid FROM #__jomres_managers";
		$managerList  = doSelectSql($query);
		foreach ($managerList as $manager)
			{
			$existing_managers[]=$manager->userid;
			}
		
		$results = array();
		foreach ($all_users as $user)
			{
			if (strlen(stristr(strtolower($user['username']),$search_string)) > 0)
				$results[]=$user;
			}
		if (count($results)==0)
			echo "";
		else
			{
			$result_array=array();
			$count=count($results);
			
			for ($i=0;$i<=$count;$i++)
				{
				if ($results[$i]['username'] !== null && !in_array($results[$i]['id'],$existing_managers ) )
					$result_array[] =$results[$i]['username'];
				}
				
/* 			foreach ($results as $res)
				{
				$result_array[] =$res['username'];
				} */
			echo json_encode($result_array);
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}