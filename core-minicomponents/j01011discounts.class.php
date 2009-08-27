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
 * Constructs lastminute information for use in the property list page
 #
* @package Jomres
#
 */
class j01011discounts {
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j01011discounts($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$property_uid=$componentArgs['property_uid'];
		$mrConfig=getPropertySpecificSettings($property_uid);
		if ($mrConfig['singleRoomProperty'] == 1)  // Using last minute calculations
			{
			$this->returnValue=array();
			$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='lastminuteactive' AND `value`='1' LIMIT 1";
			$lastminSettings = doSelectSql($query);

			if (count($lastminSettings)>0)
				{
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='lastminutethreshold' LIMIT 1";
				$lastminutethreshold = doSelectSql($query,1);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='lastminutediscount' LIMIT 1";
				$lastminutediscount = doSelectSql($query,1);
				
				$todaysDate=date("Y/m/d");
				$date_elements	 = explode("/",$todaysDate);
				$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$lastminutethreshold,$date_elements[0]);
				$latestDate=JSCalmakeInputDates(date("Y/m/d",$unixTodaysDate));
				
				$text	=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE,false,true);
				$text	.=	$lastminutediscount;
				$text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID,false,true);
				$text	.=	$latestDate;
				$text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST,false,true);
				
				$this->returnValue=array('LASTMINUTE'=>$text,'LASTMINUTECLASS'=>'jomres_message');
				}
			}
		else // Using wiseprice calculations
			{
			$this->returnValue=array();
			$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='wisepriceactive' AND `value`='1' LIMIT 1";
			$lastminSettings = doSelectSql($query);

			if (count($lastminSettings)>0)
				{
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='wisepricethreshold' LIMIT 1";
				$wisepricethreshold = doSelectSql($query,1);
				$query="SELECT value FROM #__jomres_settings WHERE property_uid = '$property_uid' AND `akey`='wiseprice75discount' LIMIT 1";
				$wisepricediscount = doSelectSql($query,1);
				
				$todaysDate=date("Y/m/d");
				$date_elements	 = explode("/",$todaysDate);
				$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2]+$wisepricethreshold,$date_elements[0]);
				$latestDate=JSCalmakeInputDates(date("Y/m/d",$unixTodaysDate));
				
				$text	=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE,false,true);
				$text	.=	(float)$wisepricediscount.jr_gettext('_JOMCOMP_LASTMINUTE_ORMORE',_JOMCOMP_LASTMINUTE_ORMORE,false,true);
				$text	.=	$latestDate;
				$text	.=	jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST,false,true);
				
				$this->returnValue=array('LASTMINUTE'=>$text,'LASTMINUTECLASS'=>'jomres_message');
				}
			}
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST);
		$output[]		=jr_gettext('_JOMCOMP_LASTMINUTE_ORMORE',_JOMCOMP_LASTMINUTE_ORMORE);
		$output[]		=jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE',_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE);
		$output[]		=jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID);
		$output[]		=jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST',_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
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
		return $this->returnValue;
		}
	}

?>