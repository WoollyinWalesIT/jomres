<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
			
		if (isset($componentArgs['property_uid']))
			$property_uid=$componentArgs['property_uid'];
		if (isset($componentArgs['property_uids']))
			$property_uids=$componentArgs['property_uids'];
		
		if (is_array($property_uids))
			{
			$relevant_properties = array();
			$g=genericOr($property_uids,'property_uid');
			$query="SELECT property_uid,akey,value FROM #__jomres_settings WHERE (`akey`='lastminuteactive' OR `akey` = 'wisepriceactive') AND ".$g." AND `value`='1'";
			$result = doSelectSql($query);
			if (count($result)>0)
				{
				foreach ($result as $r)
					{
					$relevant_properties[$r->property_uid]['discount_type']=$r->akey;
					$discounted_properties[] = $r->property_uid;
					}
				$g2=genericOr($discounted_properties,'property_uid');
				$query="SELECT property_uid,akey,value FROM #__jomres_settings WHERE (`akey`='wisepricethreshold' OR `akey` = 'wiseprice75discount' OR `akey` = 'lastminutethreshold' OR `akey` = 'lastminutediscount') AND ".$g2."";
				$result2 = doSelectSql($query);
				foreach ($result2 as $r)
					{
					if ($r->akey == 'wisepricethreshold')
						$relevant_properties[$r->property_uid]['wisepricethreshold']=$r->value;
					if ($r->akey == 'wiseprice75discount')
						$relevant_properties[$r->property_uid]['wiseprice75discount']=$r->value;
					if ($r->akey == 'lastminutethreshold')
						$relevant_properties[$r->property_uid]['lastminutethreshold']=$r->value;
					if ($r->akey == 'lastminutediscount')
						$relevant_properties[$r->property_uid]['lastminutediscount']=$r->value;
					}
				}
			set_showtime('propertylist_discounts',$relevant_properties);
			}
		else
			{
			$relevant_properties = get_showtime('propertylist_discounts');

			if (array_key_exists($property_uid,$relevant_properties))
				{
				if ($relevant_properties[$property_uid]['discount_type'] == "lastminuteactive" )   // Using last minute calculations
					{
					$this->returnValue=array();
					$lastminutethreshold = $relevant_properties[$property_uid]['lastminutethreshold'];
					$lastminutediscount = $relevant_properties[$property_uid]['lastminutediscount'];

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
				elseif ($relevant_properties[$property_uid]['discount_type'] == "wisepriceactive" )  // Using wiseprice calculations
					{
					$this->returnValue=array();
					
					$wisepricethreshold = $relevant_properties[$property_uid]['wisepricethreshold'];
					$wisepricediscount = $relevant_properties[$property_uid]['wiseprice75discount'];
					
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