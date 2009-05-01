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

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00020tagsearch {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00020tagsearch($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$defaultProperty=getDefaultProperty();
		$tag=$componentArgs['tag'];
		$query="SELECT contract_uid FROM #__jomres_contracts WHERE tag = '$tag' AND property_uid = '".(int)$defaultProperty."'";
		$contractList =doSelectSql($query);
		foreach ($contractList as $c)
			{
			$contract_uid=$c->contract_uid;
			}
		if (count($contractList)==1)
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=editBooking&contract_uid=".$contract_uid), "" );
		else
			{
			$query="SELECT c.contract_uid,c.tag, c.arrival, c.departure,c.booked_in,  g.guests_uid, g.firstname, g.surname, g.contracts_contract_uid, g.mos_userid
			FROM #__jomres_contracts c, #__jomres_guests g
			WHERE  tag LIKE '$tag%' AND ((c.guest_uid = g.guests_uid) OR (c.guest_uid = g.mos_userid)) AND c.property_uid = '".(int)$defaultProperty."'
			ORDER BY c.arrival";
			$contractsList =doSelectSql($query);
			$dates=array();
			if (count($contractsList)>0)
				{
				foreach($contractsList as $contract)
					{
					$arrivalDateArray[]=$contract->arrival;
					}
				if (!empty($arrivalDateArray))
					{
					$dates=array_unique($arrivalDateArray);
					asort($dates);
					}
				}
			$arrivaldateDropdown=filterForm('arrivalDates',$dates,"date");
			showLiveBookings( $contractsList,jr_gettext('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE',_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE,FALSE),$arrivaldateDropdown);
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