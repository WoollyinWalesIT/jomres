<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

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