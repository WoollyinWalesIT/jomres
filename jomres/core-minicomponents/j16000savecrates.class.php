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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000savecrates
	{
	function j16000savecrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$crates 				= jomresGetParam( $_POST, 'crates',array() );
		$tmpCrates=array();
		foreach ($_POST['crates'] as $k=>$v)
			{
			$key=intval($k);
			$value=intval($v);
			$tmpCrates[$key]=$value;
			}

		//var_dump($tmpCrates);exit;
		$crates=$tmpCrates;
		$propertyFunctions		= new jrportal_property_functions();
		$portalPropertyList		= $propertyFunctions->getAllPortalProperties();
		$portalPropertyIds		= array();
		foreach ($portalPropertyList as $p)
			{
			$portalPropertyIds[]=$p['property_id'];
			}
		$tr= new jrportal_transaction();
		foreach ($crates as $k=>$v)
			{
			$crate_id=$v;
			$property = new jrportal_property();
			if (!in_array($k,$portalPropertyIds) )
				{
				$property->property_id=$k;
				$property->crate_id=$v;
				$property->commitNewProperty(&$tr);
				}
			else
				{
				$property->getProperty();
				$property->property_id=$k;
				$property->crate_id=$v;
				$property->commitUpdatePropertyByPropertyid(&$tr);
				}
			}
		$result=$tr->commit($tr);
		if ($result)
			jomresRedirect(JOMRES_SITEPAGE_URL_ADMIN."&task=listproperties", '');
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}