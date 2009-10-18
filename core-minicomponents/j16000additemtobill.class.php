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

class j16000additemtobill
	{
	function j16000additemtobill($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$jos_id					= $componentArgs['jos_id'];
		$username				= $componentArgs['username'];
		$property_uid			= $componentArgs['property_uid'];
		$nett					= $componentArgs['nett'];
		$property_name			= $componentArgs['property_name'];
		$billing_description	= $componentArgs['billing_description'];

		$recurrs				= $componentArgs['recurrs'];  // Optional
		$reccur_value 			= $componentArgs['reccur_value'];  // Optional
		$reccur_frequency 		= $componentArgs['reccur_frequency'];  // Optional

		$componentArgs=array(
			'jos_id'=>$jos_id,
			'username'=>$username,
			'property_uid'=>$property_uid,
			'nett'=>$nett,
			'property_name'=>$property_name,
			'billing_description'=>$billing_description,
			'recurrs'=>$recurrs,
			'reccur_value'=>$reccur_value,
			'reccur_frequency'=>$reccur_frequency
			);
		if ($MiniComponents->eventSpecificlyExistsCheck('00100',"jomcompnbill") )
			{
			$MiniComponents->specificEvent('00100',"jomcompnbill",$componentArgs);
			//$MiniComponents->triggerEvent('00100',$componentArgs);
			$results=$MiniComponents->getAllEventPointsData("00100");
			foreach ($results as $r)
				{
				if ($r['success'])
					{
					echo _JRPORTAL_ADD_ADHOC_ITEM_SUCCESS.$r['billingSystem']."<br>";
					echo '<a href="'.$r['orders_link'].'">'._JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS.'</a>';
					}
				else
					echo _JRPORTAL_ADD_ADHOC_ITEM_FAILURE.$r['billingSystem']."<br>";
				}
			}
		else
			echo "Jomres -> Nbill plugin does not exist";
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}