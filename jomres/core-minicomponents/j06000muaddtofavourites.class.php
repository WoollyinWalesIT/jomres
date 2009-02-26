<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


class j06000muaddtofavourites {
	function j06000muaddtofavourites()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $ePointFilepath,$jomresConfig_lang,$thisJRUser,$mrConfig,$jrConfig,$jomresConfig_live_site;
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