<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * Constructs and displays edit tariff form
 #
* @package Jomres
#
 */
class j02213edittariff_micromanage {
	/**
	#
	 * Constructor: Constructs and displays edit tariff form
	#
	 */
	function j02213edittariff_micromanage()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$defaultProperty=getDefaultProperty();
	 	if ($jrConfig['useGlobalRoomTypes']=="1")
			$roomTypeSearchParameter="0";
		else
			$roomTypeSearchParameter=$defaultProperty;
		if (!isset($mrConfig['tariffsenhanceddefault']))
			$defaultTariffValue=100.55;
		else
			$defaultTariffValue=$mrConfig['tariffsenhanceddefault'];
		if (!isset($mrConfig['tariffsenhancedyearstoshow']))
			$numberOfYearsToGenerate=2;
		else
			$numberOfYearsToGenerate=$mrConfig['tariffsenhancedyearstoshow'];

		$tarifftypeid	= intval(jomresGetParam( $_REQUEST, 'tarifftypeid', 0 ) );
		$clone			= intval(jomresGetParam( $_REQUEST, 'clone', 0 ) );

		// security check
		if ($tarifftypeid > 0)
			{
			$query="SELECT `name` FROM #__jomcomp_tarifftypes WHERE id = '$tarifftypeid' AND property_uid = '$defaultProperty' ";
			$result=doSelectSql($query);
			if (count($result) == 0)
				trigger_error ("Unable to update tariff details, incorrect tarifftype id / property uid combination. Possible hack attempt", E_USER_ERROR);
			}
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE);
		$output['HMINDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS',_JOMRES_COM_MR_LISTTARIFF_MINDAYS);
		$output['HMAXDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS',_JOMRES_COM_MR_LISTTARIFF_MAXDAYS);
		$output['HMINPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE);
		$output['HMAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE);
		$output['HROOMTYPEDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
		$output['HIGNOREPPPNDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN);
		$output['HALLOWWEEKENDSDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',_JOMRES_COM_MR_LISTTARIFF_ALLOWWE);
		$output['HWEEKENDONLY']=jr_gettext('_JOMRES_COM_WEEKENDONLY',_JOMRES_COM_WEEKENDONLY);
		
		$output['PICKER_DAYSOFWEEK']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK',_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK);
		$output['PICKER_DATERANGES']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES',_JOMRES_MICROMANAGE_PICKER_DATERANGES);
		$output['PICKER_DATERANGES_START']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START',_JOMRES_MICROMANAGE_PICKER_DATERANGES_START);
		$output['PICKER_DATERANGES_END']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END',_JOMRES_MICROMANAGE_PICKER_DATERANGES_END);
		$output['PICKER_DATERANGES_RATE']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE',_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE);
		$output['PICKER_DATERANGES_SET']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET',_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET);
		
		$output['HMINROOMS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS',_JOMRES_COM_MR_EB_ROOM_MINROOMS);
		$output['HMAXROOMS']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS',_JOMRES_COM_MR_EB_ROOM_MAXROOMS);
		$output['MINROOMS_DESC']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC',_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC);
		$output['MAXROOMS_DESC']=jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC',_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC);
		
		$output['HFIXED_DAYOFWEEK']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL)." ".jr_gettext('_JOMRES_DTV_DOW',_JOMRES_DTV_DOW);
		
		$def_mindays=1;
		$def_maxdays=100;
		$def_minpeople=1;
		$def_maxpeople=100;
		$def_roomclass_uid=1;
		$def_tarifftypename="Change me";
		$def_we=1;
		$def_ignore_pppn=0;
		$def_minrooms_alreadyselected = 0;
		$def_maxrooms_alreadyselected = 100;
		$def_weekendonly=0;

		//$weekendsArray=array('monday'=>false,'tuesday'=>false,'wednesday'=>false,'thursday'=>false,'friday'=>false,'saturday'=>true,'sunday'=>true);
		$allow_we=$def_we;
		$ignore_pppn=$def_ignore_pppn;
		//Let's get the current tarifftype details, and find the first tariff of this type so that we can get the min & max people and min and max days
		if ($tarifftypeid > 0)
			{
			$query="SELECT `name` FROM #__jomcomp_tarifftypes WHERE id = '$tarifftypeid' AND property_uid = '$defaultProperty' ";
			$output['TARIFFTYPENAME']=doSelectSql($query,1);
			$rateIdArray=array();
			$query="SELECT tariff_id FROM #__jomcomp_tarifftype_rate_xref WHERE tarifftype_id = '$tarifftypeid'";
			$rateIds=doSelectSql($query);
			foreach ($rateIds as $r)
				{
				$rateIdArray[]=$r->tariff_id;
				}
			$gor=genericOr($rateIdArray,'rates_uid');
			$query="SELECT * FROM #__jomres_rates WHERE ".$gor."";
			$rates=doSelectSql($query);
			$rateDetails=array();
			foreach ($rates as $r)
				{
				$output['MINDAYS']=$r->mindays;
				$output['MAXDAYS']=$r->maxdays;
				$output['MINPEOPLE']=$r->minpeople;
				$output['MAXPEOPLE']=$r->maxpeople;
				$output['MINROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'minrooms_alreadyselected','class="inputbox" size="1"', $r->minrooms_alreadyselected);
				$output['MAXROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'maxrooms_alreadyselected','class="inputbox" size="1"', $r->maxrooms_alreadyselected);
				$ignore_pppn=$r->ignore_pppn;
				$allow_we=$r->allow_we;
				$weekendonly= $r->weekendonly;
				$roomclassid=$r->roomclass_uid;
				$rateDetails[$r->rates_uid]=array(
					'validFrom'=>$r->validfrom,
					'validTo'=>$r->validto,
					'roomrateperday'=>$r->roomrateperday,
					'mindays'=>$r->mindays,
					'maxdays'=>$r->maxdays,
					'minpeople'=>$r->minpeople,
					'maxpeople'=>$r->maxpeople,
					'roomclass_uid'=>$r->roomclass_uid,
					'ignore_pppn'=>$r->ignore_pppn,
					'allow_we'=>$r->allow_we
					);
				$fixed_dayofweek=$r->dayofweek;
				}
			$this->rateDetails=$rateDetails;
			}
		else
			{
			$output['TARIFFTYPENAME']=$def_tarifftypename;
			$output['MINDAYS']=$def_mindays;
			$output['MAXDAYS']=$def_maxdays;
			$output['MINPEOPLE']=$def_minpeople;
			$output['MAXPEOPLE']=$def_maxpeople;
			$output['MINROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'minrooms_alreadyselected','class="inputbox" size="1"', $def_minrooms_alreadyselected);
			$output['MAXROOMS_ALREADYSELECTED']=jomresHTML::integerSelectList( 0,100,1, 'maxrooms_alreadyselected','class="inputbox" size="1"', $def_maxrooms_alreadyselected);
			$roomclassid=$def_roomclass_uid;
			$weekendonly=$def_weekendonly;
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
		
		$output['IGNOREPPPNDROPDOWN']=$ignoreDropdown;
		$output['ALLOWWEEKENDSDROPDOWN']=$allowWEDropdown;
		$output['WEEKENDONLY']=$weekendonlyDropdown;
		
		$def_roomrateperday=$defaultTariffValue;

			$basic_property_details =jomres_getSingleton('basic_property_details');
			$basic_property_details->gather_data($defaultProperty);
			$property_type_id = $basic_property_details->ptype_id;
			
			$room_classes_array = array();
			if (count($basic_property_details->this_property_room_classes)>0)
				{
				foreach ( $basic_property_details->this_property_room_classes as $key=>$val )
					{
					$room_classes_array[]= $key;
					}
				$genericOrClasses = genericOr($room_classes_array,"room_classes_uid");
				}

			$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,property_uid FROM #__jomres_room_classes  WHERE property_uid = '0' AND ".$genericOrClasses." ORDER BY room_class_abbv ";
			$roomClasses =doSelectSql($query);
			
			$dropDownList ="<select class=\"inputbox\" name=\"roomClass\">";
			//$dropDownList .= "<option value=\"\"></option>";   // Disabled so that tariff _has_ to be associated with a room type. 
			foreach ($roomClasses as $roomClass)
				{
				$selected="";
				$room_classes_uid=$roomClass->room_classes_uid;
				$room_class_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_abbv),false,false);
				if ($room_classes_uid==$roomclass_uid)
					$selected="selected";
				$dropDownList .= "<option ".$selected." value=\"".$room_classes_uid."\">".$room_class_abbv."</option>";
				}
			$dropDownList.="</select>";
			$output['ROOMTYPEDROPDOWN']=$dropDownList;

		// Let's make our years/months/days array
		$dowInitArrays=array();
		$today = getdate();
		$firstYear=$today['year'];
		$firstMonth=$today['mon'];
		$todaysepoch=$today[0];
		$firstOfJan=strtotime("1 January $firstYear");
		$datesInyearsArray = array();
		$currdate=getdate($firstOfJan);
		$currMonth=1;
		date_default_timezone_set('UTC');
		for ($y = 0;$y <$numberOfYearsToGenerate;$y++)
			{
			$currYear=$firstYear+$y;
			for ($m = 1;$m <=12;$m++)
				{
				if ( ($m >= $firstMonth && $currYear ==$firstYear ) || $currYear >$firstYear )
					{
					$currMonth=date("m",mktime(0, 0, 0, $m,1,$currYear));
					$daysInMonth= date("t",mktime(0, 0, 0, $m,1,$currYear));

					for ($d = 1;$d <=$daysInMonth;$d++)
						{
						$day= date("d",mktime(0, 0, 0, $currMonth,$d,$currYear));
						$epoch=mktime(0,0,0,$currMonth,$day,$currYear);
						$dow=getdate($epoch);
						$dayofweek=$dow['weekday'];
						$fontcolour="black";

						if ($tarifftypeid > 0)
							{
							$datesInyearsArray[$currYear][$currMonth][$day]['value']=$this->getValueForTariffThisDate($epoch);
							}
						else
							{
							$datesInyearsArray[$currYear][$currMonth][$day]['value']=$defaultTariffValue;
							}
						if ($datesInyearsArray[$currYear][$currMonth][$day]['value'] != $defaultTariffValue)
							$fontcolour="red";
						if ($epoch<$todaysepoch)
							$fontcolour="grey";
						$dowInit=substr($dayofweek,0,2);
						switch ($dowInit)
							{
							case "Su": $dowInit = _JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR; break;
							case "Mo": $dowInit = _JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR; break;
							case "Tu": $dowInit = _JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR; break;
							case "We": $dowInit = _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR; break;
							case "Th": $dowInit = _JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR; break;
							case "Fr": $dowInit = _JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR; break;
							case "Sa": $dowInit = _JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR; break;
							}
						if ($dayofweek=="Saturday" || $dayofweek=="Sunday")
							$datesInyearsArray[$currYear][$currMonth][$day]['dom']='<font color="'.$fontcolour.'"><b>'.$dowInit.' '.$day.'</b></font>';
						else
							$datesInyearsArray[$currYear][$currMonth][$day]['dom']='<font color="'.$fontcolour.'">'.$dowInit.' '.$day.'</b></font>';
						$datesInyearsArray[$currYear][$currMonth][$day]['class']="jomres_te_".$dowInit;
						if (!in_array("jomres_te_".$dowInit,$dowInitArrays) )
							$dowInitArrays["jomres_te_".$dowInit]=array("class"=>"jomres_te_".$dowInit,"text"=>$dowInit,"dom"=>$datesInyearsArray[$currYear][$currMonth][$day]['dom']);
						$datesInyearsArray[$currYear][$currMonth][$day]['epoch']=$epoch;
						}
					}
				}
			}
		$def_validfrom=date("Y/m/d",$datesInyearsArray[$firstYear]['01']['01']['epoch']);
		$def_validto=date("Y/m/d",$datesInyearsArray[$currYear]['12']['31']['epoch']);
		$yearrows=array();

		// Let's generate our autofil buttons & inputs
		$prefills=array();
		$prefillbuttons=array();
		$styleinfo='style="padding: 1px; font-size: 9px;border:solid 1px #cccccc; background-color: #ffffff;"';

		foreach ($dowInitArrays as $dia)
			{
			$p=array();
			$pb=array();
			$pb["JS"]='<script>

			jQuery(document).ready(function(){
				jQuery("#set_'.$dia['class'].'").click(function () {
					var inputVal = jQuery("#'.$dia['text'].'").val();

					//alert (inputVal);
					jQuery(".'.$dia['class'].'").val(inputVal);
					jQuery(".'.$dia['class'].'").css("border","1px solid red");
					});
				});
			</script>';
			$pb["BUTTON"]='<input type="button" id="set_'.$dia['class'].'" value="'.$dia['text'].'"  />';
			$p["DOW"]=$dia['text'];
			$p["INPUT"]='<input class="'.$dia['class'].'" type="text" '.$styleinfo.' size="8"  id="'.$dia['text'].'" value="'.$defaultTariffValue.'" />';
			$p["CLASS"]=$dia['class'];
			//$p["DEFALTVAL"]=$defaultTariffValue;
			$prefills[]=$p;
			$prefillbuttons[]=$pb;

			}

		$output['PICKER_FROM']=generateDateInput("picker_from","");
		$output['PICKER_TO']=generateDateInput("picker_to","");
		$output['DATE_FORMAT']=$jrConfig['cal_input'];
		
		foreach ($datesInyearsArray as $ykey=>$y)
			{
			foreach ($y as $mkey=>$m)
				{
				$dr=array();
				$dr['YEAR']=$ykey;
				$dr['MONTH']=$mkey;
				//$counter++;
				//if ($counter % 2)
				//	$r['STYLE'] ="row0";
				//else
				//	$r['STYLE'] ="row1";
				$days1="";
				$inputs1="";
				$days2="";
				$inputs2="";
				foreach ($m as $dkey=>$d)
					{
					if ($dkey<=15)
						{
						$days1.='<td>'.$d['dom'].'</td>';
						$inputs1.='<td><input type="text" size="3" class="'.$d['class'].'" style="padding: 1px; font-size: 9px;border:solid 1px #cccccc; background-color: #ffffff;" name="tariffinput['.$d['epoch'].']" value="'.$d['value'].'" /></td>';
						}
					else
						{
						$days2.='<td>'.$d['dom'].'</td>';
						$inputs2.='<td><input type="text" size="3" class="'.$d['class'].'" style="padding: 1px; font-size: 9px;border:solid 1px #cccccc; background-color: #ffffff;" name="tariffinput['.$d['epoch'].']" value="'.$d['value'].'" /></td>';
						}
					}
				$dr['DAYS1']=$days1;
				$dr['INPUTS1']=$inputs1;
				$dr['DAYS2']=$days2;
				$dr['INPUTS2']=$inputs2;
				$daterows[]=$dr;
				}
			}
//var_dump($daterows);
		if ($clone < 1)
			$output['TARIFFTYPEID']	= $tarifftypeid;
		else
			$output['TARIFFTYPEID']	= 0;


		$cancelText=jr_gettext('_JOMRES_COM_A_CANCEL',_JOMRES_COM_A_CANCEL,FALSE);
		$deleteText=jr_gettext('_JOMRES_COM_MR_ROOM_DELETE',_JOMRES_COM_MR_ROOM_DELETE,FALSE);

		if (!isset($fixed_dayofweek))
			$fixed_dayofweek = 7;
		
		$weekDays=array();
		$weekDays[] = jomresHTML::makeOption(7, jr_gettext('_JOMRES_SEARCH_ALL',_JOMRES_SEARCH_ALL,false,false) );
		$weekDays[] = jomresHTML::makeOption(1, _JOMRES_COM_MR_WEEKDAYS_MONDAY);
		$weekDays[] = jomresHTML::makeOption(2, _JOMRES_COM_MR_WEEKDAYS_TUESDAY);
		$weekDays[] = jomresHTML::makeOption(3, _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY);
		$weekDays[] = jomresHTML::makeOption(4, _JOMRES_COM_MR_WEEKDAYS_THURSDAY);
		$weekDays[] = jomresHTML::makeOption(5, _JOMRES_COM_MR_WEEKDAYS_FRIDAY);
		$weekDays[] = jomresHTML::makeOption(6, _JOMRES_COM_MR_WEEKDAYS_SATURDAY);
		$weekDays[] = jomresHTML::makeOption(0, _JOMRES_COM_MR_WEEKDAYS_SUNDAY);
		$weekdayDropdown= jomresHTML::selectList($weekDays, 'fixed_dayofweek', 'class="inputbox" size="1"', 'value', 'text', $fixed_dayofweek);
		$output['FIXED_ARRIVAL_DAYOFWEEK']=$weekdayDropdown;

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save',jomresURL(JOMRES_SITEPAGE_URL."&task=saveTariff"),jr_gettext('_JOMRES_COM_MR_SAVE',_JOMRES_COM_MR_SAVE,FALSE),true,'saveTariff');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=propertyadmin"),$cancelText);
		if (!$clone && $tarifftypeid>0)
			$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteTariff".jomresURLToken()."&tarifftypeid=".$tarifftypeid),$deleteText);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL."&task=saveTariff";
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_micromanage_tariff.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'prefills',$prefills);
		$tmpl->addRows( 'prefilltitles',$prefilltitles);
		$tmpl->addRows( 'prefillbuttons',$prefillbuttons);
		$tmpl->addRows( 'daterows',$daterows);
		$tmpl->displayParsedTemplate();
		}

	function getValueForTariffThisDate($epoch)
		{
		foreach ($this->rateDetails as $r )
			{
			//var_dump($r);exit;
			$date_elements  = explode("/",$r['validFrom']);
			$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$date_elements  = explode("/",$r['validTo']);
			$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			//echo $r['validTo'];exit;
			if ($epoch >= $unixValidFromDate && $epoch <= $unixValidToDate )
				{
				return $r['roomrateperday'];
				}
			}
		return false;
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE',_JOMRES_COM_MR_LISTTARIFF_RATETITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS',_JOMRES_COM_MR_LISTTARIFF_MINDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS',_JOMRES_COM_MR_LISTTARIFF_MAXDAYS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',_JOMRES_COM_MR_LISTTARIFF_ALLOWWE);

		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN);
		$output[]		=jr_gettext('_JOMRES_COM_WEEKENDONLY',_JOMRES_COM_WEEKENDONLY);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK',_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES',_JOMRES_MICROMANAGE_PICKER_DATERANGES);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START',_JOMRES_MICROMANAGE_PICKER_DATERANGES_START);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END',_JOMRES_MICROMANAGE_PICKER_DATERANGES_END);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE',_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE);
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET',_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET);
		
		
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