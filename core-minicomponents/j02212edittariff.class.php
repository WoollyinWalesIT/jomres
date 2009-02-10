<?php
/**
#
 * Mini-component core file: Constructs and displays edit tariff form
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

/**
#
 * Constructs and displays edit tariff form
 #
* @package Jomres
#
 */
class j02212edittariff {
	/**
	#
	 * Constructor: Constructs and displays edit tariff form
	#
	 */
	function j02212edittariff()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $clone,$mrConfig,$Itemid,$jrConfig;
		if ( $mrConfig['tariffmode']=="2")
			$MiniComponents->triggerEvent('02213'); //
		else
			{
			$defaultProperty=getDefaultProperty();
		 	if ($jrConfig['useGlobalRoomTypes']=="1")
				$roomTypeSearchParameter="0";
			else
				$roomTypeSearchParameter=$defaultProperty;

			$ignore_pppn="";
			$allow_we="";
			$rate_title="";
			$rate_description="";
			$validfrom="";
			$validto="";
			$roomrateperday="";
			$mindays="";
			$maxdays="";
			$minpeople="";
			$maxpeople="";
			$maxpeople="";
			$roomclass_uid="";
			$dayofweek=0;
			$minrooms_alreadyselected = 0;
			$maxrooms_alreadyselected = 100;

			$tariffUid	= intval(jomresGetParam( $_REQUEST, 'tariffUid', 0 ) );
			$clone		= intval(jomresGetParam( $_REQUEST, 'clone', 0 ) );
			$usersProperty=getDefaultProperty();
			if (isset($tariffUid) && !empty($tariffUid) )
				{
				$query = "SELECT rate_title,rate_description,validfrom,validto,roomrateperday,mindays,maxdays,minpeople,maxpeople,roomclass_uid,ignore_pppn,allow_ph,allow_we,weekendonly,dayofweek,minrooms_alreadyselected,maxrooms_alreadyselected,property_uid  FROM #__jomres_rates WHERE rates_uid = '".(int)$tariffUid."' AND property_uid = '".(int)$defaultProperty."'";
				$tariffList =doSelectSql($query);
				foreach($tariffList as $tariff)
					{
					$ignore_pppn=$tariff->ignore_pppn;
					$allow_we=$tariff->allow_we;
					$rate_title=$tariff->rate_title;
					$rate_description= $tariff->rate_description;
					$validfrom= $tariff->validfrom;
					$validto= $tariff->validto;
					$roomrateperday= $tariff->roomrateperday;
					$mindays= $tariff->mindays;
					$maxdays= $tariff->maxdays;
					$minpeople= $tariff->minpeople;
					$maxpeople= $tariff->maxpeople;
					$maxpeople= $tariff->maxpeople;
					$roomclass_uid= $tariff->roomclass_uid;
					$weekendonly= $tariff->weekendonly;
					$dayofweek = $tariff->dayofweek;
					$minrooms_alreadyselected= $tariff->minrooms_alreadyselected;
					$maxrooms_alreadyselected = $tariff->maxrooms_alreadyselected;
					
					}
				}
			else
				{
				$ignore_pppn="0";
				$allow_we="1";
				$dayofweek = "7";
				}

			$weekDays=array();
			$weekDays[] = jomresHTML::makeOption(7, jr_gettext('_JOMRES_SEARCH_ALL',_JOMRES_SEARCH_ALL,false,false) );
			$weekDays[] = jomresHTML::makeOption(1, _JOMRES_COM_MR_WEEKDAYS_MONDAY);
			$weekDays[] = jomresHTML::makeOption(2, _JOMRES_COM_MR_WEEKDAYS_TUESDAY);
			$weekDays[] = jomresHTML::makeOption(3, _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY);
			$weekDays[] = jomresHTML::makeOption(4, _JOMRES_COM_MR_WEEKDAYS_THURSDAY);
			$weekDays[] = jomresHTML::makeOption(5, _JOMRES_COM_MR_WEEKDAYS_FRIDAY);
			$weekDays[] = jomresHTML::makeOption(6, _JOMRES_COM_MR_WEEKDAYS_SATURDAY);
			$weekDays[] = jomresHTML::makeOption(0, _JOMRES_COM_MR_WEEKDAYS_SUNDAY);
			$weekdayDropdown= jomresHTML::selectList($weekDays, 'dayofweek', 'class="inputbox" size="1"', 'value', 'text', $dayofweek);

			if ($clone)
				$tariffUid=FALSE;
			//$query = "SELECT room_classes_uid,room_class_abbv,property_uid FROM #__jomres_room_classes WHERE property_uid = '".(int)$roomTypeSearchParameter."' ORDER BY room_class_abbv ";
			
			
			if ($mrConfig['singleRoomProperty'] ==  '1')
				$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid FROM #__jomres_room_classes  WHERE property_uid = '".(int)$roomTypeSearchParameter."' AND `srp_only` = '1' ORDER BY room_class_abbv ";
			else
				$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid FROM #__jomres_room_classes  WHERE property_uid = '".(int)$roomTypeSearchParameter."' AND `srp_only` = '0' ORDER BY room_class_abbv ";
			
			if ($mrConfig['singleRoomProperty']=="0")
				{
				$roomClasses=doSelectSql($query);
				$dropDownList ="<select class=\"inputbox\" name=\"roomClass\">";
				//$dropDownList .= "<option value=\"\"></option>";   // Disabled so that tariff _has_ to be associated with a room type. 
				foreach ($roomClasses as $roomClass)
					{
					$selected="";
					$room_classes_uid=$roomClass->room_classes_uid;
					$room_class_abbv=$roomClass->room_class_abbv;
					if ($room_classes_uid==$roomclass_uid)
						$selected="selected";
					$dropDownList .= "<option ".$selected." value=\"".$room_classes_uid."\">".$room_class_abbv."</option>";
					}
				$dropDownList.="</select>";
				$output['ROOMTYPEDROPDOWN']=$dropDownList;
				}
			else
				{
				$query = "SELECT room_classes_uid FROM #__jomres_rooms WHERE propertys_uid LIKE '".(int)$defaultProperty."'";
				
				$original_room_classes_uid =doSelectSql($query,1);

				$query = "SELECT room_class_abbv FROM #__jomres_room_classes WHERE `room_classes_uid` = '".$original_room_classes_uid."' ORDER BY room_class_abbv ";
				$room_class_abbv=doSelectSql($query,1);
				$output['ROOMTYPEDROPDOWN']='<input type="hidden" name="roomClass" value="'.$original_room_classes_uid.'" />'.$room_class_abbv;
				}
			$pppnOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$pppnOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
			$ignoreDropdown= jomresHTML::selectList($pppnOptions, 'ignore_pppn', 'class="inputbox" size="1"', 'value', 'text', $ignore_pppn);

			$weOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$weOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
			$allowWEDropdown= jomresHTML::selectList($weOptions, 'allow_we', 'class="inputbox" size="1"', 'value', 'text', $allow_we);

			$weoOptions[]=jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
			$weoOptions[]=jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE));
			$weekendonlyDropdown= jomresHTML::selectList($weoOptions, 'weekendonly', 'class="inputbox" size="1"', 'value', 'text', $weekendonly);

			$output['MINROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'minrooms_alreadyselected','class="inputbox" size="1"', $minrooms_alreadyselected);
			$output['MAXROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'maxrooms_alreadyselected','class="inputbox" size="1"', $maxrooms_alreadyselected);

			$output['TARIFFTITLE']=$rate_title ;
			$output['TARIFFDESC']=$rate_description ;
			$output['VALIDFROM']=generateDateInput("validfrom",$validfrom);
			$output['VALIDTO']=generateDateInput("validto",$validto);
			$output['RATEPERDAY']=$roomrateperday ;
			$output['CURRENCY']=$mrConfig['currency'];
			$output['MINDAYS']=$mindays ;
			$output['MAXDAYS']=$maxdays ;
			$output['MINPEOPLE']=$minpeople;
			$output['MAXPEOPLE']=$maxpeople;
			
			$output['IGNOREPPPNDROPDOWN']=$ignoreDropdown;
			$output['ALLOWWEEKENDSDROPDOWN']=$allowWEDropdown;
			$output['WEEKENDONLY']=$weekendonlyDropdown;
			$output['DAYOFWEEK']=$weekdayDropdown;

			$output['HTARIFFTITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE);
			$output['HTARIFFDESC']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION',_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION);
			$output['HVALIDFROM']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM',_JOMRES_COM_MR_LISTTARIFF_VALIDFROM);
			$output['HVALIDTO']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDTO',_JOMRES_COM_MR_LISTTARIFF_VALIDTO);
			$output['HRATEPERDAY']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY);
			$output['HMINDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS',_JOMRES_COM_MR_LISTTARIFF_MINDAYS);
			$output['HMAXDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS',_JOMRES_COM_MR_LISTTARIFF_MAXDAYS);
			$output['HMINPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE);
			$output['HMAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE);
			$output['HROOMTYPEDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
			$output['HIGNOREPPPNDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN);
			$output['HALLOWWEEKENDSDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',_JOMRES_COM_MR_LISTTARIFF_ALLOWWE);
			$output['HWEEKENDONLY']=jr_gettext('_JOMRES_COM_WEEKENDONLY',_JOMRES_COM_WEEKENDONLY);
			$output['HDAYOFWEEK']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL)." ".jr_gettext('_JOMRES_DTV_DOW',_JOMRES_DTV_DOW);

			$output['HMINROOMS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS',_JOMRES_COM_MR_EB_ROOM_MINROOMS);
			$output['HMAXROOMS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS',_JOMRES_COM_MR_EB_ROOM_MAXROOMS);
			$output['MINROOMS_DESC']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC',_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC);
			$output['MAXROOMS_DESC']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC',_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC);
			
			$output['tariffuid']=$tariffUid;

			$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
			$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);
			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('save',jomresURL(JOMRES_SITEPAGE_URL."&task=saveTariff&amp;Itemid=$Itemid"),jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE),true,'saveTariff');
			$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=propertyadmin&Itemid=$Itemid"),$cancelText);
			if (!$clone && $tariffUid)
				$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteTariff".jomresURLToken()."&tariffUid=".$tariffUid."Itemid=$Itemid"),$deleteText);
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$output['pagetitle']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT',_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT);
			$output['ITEMID']=$Itemid;

			$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'edittariff.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION',_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM',_JOMRES_COM_MR_LISTTARIFF_VALIDFROM);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDTO',_JOMRES_COM_MR_LISTTARIFF_VALIDTO);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS',_JOMRES_COM_MR_LISTTARIFF_MINDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS',_JOMRES_COM_MR_LISTTARIFF_MAXDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',_JOMRES_COM_MR_LISTTARIFF_ALLOWWE);
		$output[]		=jr_gettext('_JOMRES_COM_WEEKENDONLY',_JOMRES_COM_WEEKENDONLY);

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
		return null;
		}
	}

?>