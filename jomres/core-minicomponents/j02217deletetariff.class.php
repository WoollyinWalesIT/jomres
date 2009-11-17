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

/**
#
 * Deletes a tariff
 #
* @package Jomres
#
 */
class j02217deletetariff {
	/**
	#
	 * Constructor: Deletes a tariff
	#
	 */
	function j02217deletetariff()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		jr_import('jomres_cache');
		$cache = new jomres_cache();
		$cache->trashCacheForProperty($defaultProperty);
		$tarifftypeid		=intval(jomresGetParam( $_REQUEST, 'tarifftypeid', 0 ));
		if ($tarifftypeid > 0)
			{
			$saveMessage=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_DELETED',_JOMRES_COM_MR_LISTTARIFF_DELETED,FALSE);
			$jomres_messaging =jomres_getSingleton('jomres_messages');
			$jomres_messaging->set_message($saveMessage);
			// we need to find all the tariff uids that are associated with this tariff type
			$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id = '$tarifftypeid' AND property_uid = '$defaultProperty'";
			$rateIds=doSelectSql($query);
			if (count($rateIds) == 0)
				trigger_error ("Unable to update tariff details, incorrect tarifftype id / property uid combination. Possible hack attempt", E_USER_ERROR);
			$rates=array();
			foreach ($rateIds as $r)
				{
				$rates[]=$r->tariff_id;
				}

			// Now we can start trashing the tariff details
			$query="DELETE FROM #__jomcomp_tarifftypes WHERE id = '$tarifftypeid'";
			//echo $query."<br>";
			if (!doInsertSql($query,'') ) trigger_error ("Unable to delete tariff, mysql db failure", E_USER_ERROR);
			$gor=genericOr($rates,'rates_uid');
			// now we can remove the old tariffs
			if (count($rateIds)>0)
				{
				$query="DELETE FROM #__jomres_rates WHERE ".$gor."";
				//echo $query."<br>";
				if (!doInsertSql($query,'') ) trigger_error ("Unable to delete tariff, mysql db failure", E_USER_ERROR);
				}
			// delete the old __jomcomp_tarifftype_rate_xref records
			$gor=genericOr($rates,'tariff_id');
			if (count($rateIds)>0)
				{
				$query="DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE ".$gor."";
				//echo $query."<br>";
				//$result=doInsertSql($query,'');
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_DELETE_TARIFF',_JOMRES_MR_AUDIT_DELETE_TARIFF,FALSE)))
					returnToPropertyConfig($saveMessage);
				trigger_error ("Unable to delete tariff xref, mysql db failure", E_USER_ERROR);
				}
			returnToPropertyConfig($saveMessage);
			}
		}


	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>