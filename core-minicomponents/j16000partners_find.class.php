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

class j16000partners_find
	{
	function j16000partners_find()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$search_string	= strtolower(jomresGetParam( $_REQUEST, 'value', '' ));
		$all_users = jomres_cmsspecific_getCMSUsers();
		$results = array();
		foreach ($all_users as $user)
			{
			if (strlen(stristr(strtolower($user['username']),$search_string)) > 0)
				$results[]=$user;
			}
		if (count($results)==0)
			echo "No results";
		else
			{
			$return = '<table>';
			foreach ($results as $res)
				{
				$return .='<tr><td><a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=partner_show&id='.$res['id'].'">'.$res['username'].'</a></td></tr>';
				}
			$return .='</table>';
			echo $return;
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}