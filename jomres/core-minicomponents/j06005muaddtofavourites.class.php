<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


class j06005muaddtofavourites {
	function j06005muaddtofavourites()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if ($thisJRUser->userIsRegistered)
			{
			$property_uid = jomresGetParam( $_REQUEST, 'property_uid', 0 );
			$pageoutput=array();
			$output=array();
			$query="SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."'";
			$props=doSelectSql($query);
			if (count($props)>0)
				{
				$query="SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int)$property_uid."' AND `my_id` = '".(int)$thisJRUser->id."'";
				$propys=doSelectSql($query);
				if (count($propys)<1)
					{
					$query="INSERT INTO #__jomcomp_mufavourites (`my_id`,`property_uid`) VALUES ('".(int)$thisJRUser->id."','".(int)$property_uid."')";
					if (!doInsertSql($query,''))
						{
						$a=0;
						// There was an error, trigger the error script
						}
					}
				}
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=muviewfavourites"), '' );
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>