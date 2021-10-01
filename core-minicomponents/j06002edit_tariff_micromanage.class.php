<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002edit_tariff_micromanage 
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable = true; return;
			}
		
		date_default_timezone_set('UTC'); // Must be left in place, without it the date range selectors will not work properly on servers with different timezones.
		
		$ePointFilepath = get_showtime('ePointFilepath');
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig['tariffmode'] != '2' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property'))
			return;
		
		$this->rates = array();
		
		$tarifftype_id = (int)jomresGetParam( $_REQUEST, 'tarifftypeid', 0 );
		$clone = (int)jomresGetParam( $_REQUEST, 'clone', 0 );
		
		//get all property details
		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->gather_data($defaultProperty);
		
		//check if this property type has room types assigned
        if (empty($basic_property_details->this_property_room_classes)) {
            throw new Exception('Error, there are no room types for this property type. You can assign room types to this property type by visiting Administrator -> Jomres -> Site Structure -> and editing the room/resource types.');
            return;
        }
		
		//get all rates for tarifftype id
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;
		
		if ($tarifftype_id > 0) {
			$jrportal_rates->tarifftype_id = $tarifftype_id;
			$jrportal_rates->get_rate();
		
			//we need this duplicate for the functions that need to use this data...TODO make it better..
			$this->rates = $jrportal_rates->rates[$tarifftype_id];
		}
		
		//tariff default
		if (isset($mrConfig['tariffsenhanceddefault']))
			$jrportal_rates->rates_defaults['roomrateperday'] = $mrConfig['tariffsenhanceddefault'];
		
		//default number of years to show
		if (isset($mrConfig['tariffsenhancedyearstoshow']))
			$jrportal_rates->rates_defaults['years_to_show'] = $mrConfig['tariffsenhancedyearstoshow'];

		$output = array();
		$already_selected = array();

		//Let's get the current tarifftype details, and find the first tariff of this type so that we can get the min & max people and min and max days
		if (isset($jrportal_rates->rates[$tarifftype_id]) && !empty($jrportal_rates->rates[$tarifftype_id]))
			{
			foreach ($jrportal_rates->rates[$tarifftype_id] as $r)
				{
				$output['TARIFFTYPENAME'] = $r['rate_title'];
				$output['TARIFFTYPEDESC'] = $r['rate_description'];
				$output['MINDAYS'] = $r['mindays'];
				$output['MAXDAYS'] = $r['maxdays'];
				$output['MINPEOPLE'] = $r['minpeople'];
				$output['MAXPEOPLE'] = $r['maxpeople'];
				$already_selected['MINROOMS_ALREADYSELECTED'] = jomresHTML::integerSelectList( 0,100,1, 'minrooms_alreadyselected','class="inputbox" size="1"', $r['minrooms_alreadyselected']);
				$already_selected['MAXROOMS_ALREADYSELECTED'] = jomresHTML::integerSelectList( 0,100,1, 'maxrooms_alreadyselected','class="inputbox" size="1"', $r['maxrooms_alreadyselected']);
				
				$ignore_pppn = $r['ignore_pppn'];
				$allow_we = $r['allow_we'];
				$weekendonly = $r['weekendonly'];
				$roomclassid = $r['roomclass_uid'];
				$fixed_dayofweek = $r['dayofweek'];
				}
			}
		else
			{
			$output['TARIFFTYPENAME'] = $jrportal_rates->rates_defaults['rate_title'];
			$output['TARIFFTYPEDESC'] = $jrportal_rates->rates_defaults['rate_description'];
			$output['MINDAYS'] = $jrportal_rates->rates_defaults['mindays'];
			$output['MAXDAYS'] = $jrportal_rates->rates_defaults['maxdays'];
			$output['MINPEOPLE'] = $jrportal_rates->rates_defaults['minpeople'];
			$output['MAXPEOPLE'] = $jrportal_rates->rates_defaults['maxpeople'];
			$already_selected['MINROOMS_ALREADYSELECTED'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxrooms_alreadyselected'],1, 'minrooms_alreadyselected','class="inputbox" size="1"', $jrportal_rates->rates_defaults['minrooms_alreadyselected']);
			$already_selected['MAXROOMS_ALREADYSELECTED'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxrooms_alreadyselected'],1, 'maxrooms_alreadyselected','class="inputbox" size="1"', $jrportal_rates->rates_defaults['maxrooms_alreadyselected']);
			
			$ignore_pppn = $jrportal_rates->rates_defaults['ignore_pppn'];
			$allow_we = $jrportal_rates->rates_defaults['allow_we'];
			$weekendonly = $jrportal_rates->rates_defaults['weekendonly'];
			$roomclassid = $jrportal_rates->rates_defaults['roomclass_uid'];
			$fixed_dayofweek = $jrportal_rates->rates_defaults['dayofweek'];
			}
			
		$output['MINDAYS_DROPDOWN'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxdays'],1, 'mindays','', $output['MINDAYS']);
		$output['MAXDAYS_DROPDOWN'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxdays'],1, 'maxdays','', $output['MAXDAYS']);
		$output['MINPEOPLE_DROPDOWN'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxpeople'],1, 'minpeople','', $output['MINPEOPLE']);
		$output['MAXPEOPLE_DROPDOWN'] = jomresHTML::integerSelectList( 0,$jrportal_rates->rates_defaults['maxpeople'],1, 'maxpeople','', $output['MAXPEOPLE']);
		
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',FALSE) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',FALSE));
		
		$output['IGNOREPPPNDROPDOWN'] = jomresHTML::selectList($yesno, 'ignore_pppn', 'class="inputbox" size="1"', 'value', 'text', $ignore_pppn);
		$output['ALLOWWEEKENDSDROPDOWN'] = jomresHTML::selectList($yesno, 'allow_we', 'class="inputbox" size="1"', 'value', 'text', $allow_we);
		$output['WEEKENDONLY'] = jomresHTML::selectList($yesno, 'weekendonly', 'class="inputbox" size="1"', 'value', 'text', $weekendonly);

		//room classes for this property
		if (!empty($basic_property_details->this_property_room_classes)) 
			{
			$currentPropertyRoomClasses = array();
			
			//first let`s see what room types this property uses
			$query = "SELECT DISTINCT `room_classes_uid` FROM #__jomres_rooms WHERE `propertys_uid` = ".(int)$defaultProperty." AND `room_classes_uid` IN (".jomres_implode(array_keys($basic_property_details->this_property_room_classes)).") ";
			$result = doSelectSql($query);
			if (empty($result)) {
				$message = '<p class="alert alert-danger">';
				$message .= jr_gettext("_JOMRES_MICROMANAGE_CREATE_ROOM_1",'_JOMRES_MICROMANAGE_CREATE_ROOM_1',false);
				$message .= "<br/><ul>";

				foreach ($basic_property_details->this_property_room_classes as $room_type) {
					$message .= "<li>".$room_type['abbv']."</li>";
				}
				$message .= "</ul>";
				$message .= jr_gettext("_JOMRES_MICROMANAGE_CREATE_ROOM_2",'_JOMRES_MICROMANAGE_CREATE_ROOM_2',false);
				$message .= "</p>";
				echo $message;
				return;
			}

			foreach ($result as $r)
				{
				$currentPropertyRoomClasses[] = $r->room_classes_uid;
				}
			
			//for srps, there is only one room type, so we`ll make this one the default and selected room type
			if (count($currentPropertyRoomClasses) == 1)
				{
				$roomclassid = $currentPropertyRoomClasses[0];
				}

			//build the room types dropdown
			$options = array();
			foreach ($basic_property_details->this_property_room_classes as $k => $v)
				{
				if (in_array($k, $currentPropertyRoomClasses))
					{
					$options[] = jomresHTML::makeOption($k, $v['abbv']);
					}
				}
			
			$output['ROOMTYPEDROPDOWN'] = jomresHTML::selectList($options, 'roomClass', 'class="inputbox" size="1"', 'value', 'text', $roomclassid , false);
			}

		// Let's make our years/months/days array
		$dowInitArrays=array();
		$today = getdate();
		$firstYear = $today['year'];
		$firstMonth = $today['mon'];
		$todaysepoch = $today[0];
		$firstOfJan = strtotime("1 January ".$firstYear);
		$datesInyearsArray = array();
		$currdate = getdate($firstOfJan);
		$currMonth = 1;
		
		for ($y = 0; $y < $jrportal_rates->rates_defaults['years_to_show']; $y++)
			{
			$currYear = $firstYear+$y;
			
			for ($m = 1; $m <= 12; $m++)
				{
				if ( ($m >= $firstMonth && $currYear ==$firstYear ) || $currYear >$firstYear )
					{
					$currMonth = date("m",mktime(0, 0, 0, $m,1,$currYear));
					$daysInMonth = date("t",mktime(0, 0, 0, $m,1,$currYear));

					for ($d = 1; $d <= $daysInMonth; $d++)
						{
						$day = date("d",mktime(0, 0, 0, $currMonth,$d,$currYear));
						$epoch = mktime(0,0,0,$currMonth,$day,$currYear);
						$dow = getdate($epoch);
						$dayofweek = $dow['weekday'];
						$fontcolour = "black";

						if ($tarifftype_id > 0)
							{
							$datesInyearsArray[$currYear][$currMonth][$day]['value'] = $this->getValueForTariffThisDate($epoch);
							$datesInyearsArray[$currYear][$currMonth][$day]['mindays'] = $this->getMinintervalForTariffThisDate($epoch);
							}
						else
							{
							$datesInyearsArray[$currYear][$currMonth][$day]['value'] = $jrportal_rates->rates_defaults['roomrateperday'];
							$datesInyearsArray[$currYear][$currMonth][$day]['mindays'] = $jrportal_rates->rates_defaults['mindays'];
							}
						
						if ($datesInyearsArray[$currYear][$currMonth][$day]['value'] != $jrportal_rates->rates_defaults['roomrateperday'])
							$fontcolour = "red";
						
						if ($epoch < $todaysepoch)
							$fontcolour = "grey";
						
						$dowInit = substr($dayofweek,0,2);
						
						switch ($dowInit)
							{
							case "Su": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR',false); break;
							case "Mo": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR',false); break;
							case "Tu": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR',false); break;
							case "We": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR',false); break;
							case "Th": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR',false); break;
							case "Fr": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR',false); break;
							case "Sa": $dowInit = jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR",'_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR',false); break;
							}

						if ($dayofweek == "Saturday" || $dayofweek == "Sunday")
							$datesInyearsArray[$currYear][$currMonth][$day]['dom'] = '<font color="'.$fontcolour.'"><b>'.$dowInit.' '.$day.'</b></font>';
						else
							$datesInyearsArray[$currYear][$currMonth][$day]['dom'] = '<font color="'.$fontcolour.'">'.$dowInit.' '.$day.'</font>';
						
						$datesInyearsArray[$currYear][$currMonth][$day]['class'] = "jomres_te_".$dowInit;
						
						if (!in_array("jomres_te_".$dowInit,$dowInitArrays) )
							$dowInitArrays["jomres_te_".$dowInit] = array("class"=>"jomres_te_".$dowInit,"text"=>$dowInit,"dom"=>$datesInyearsArray[$currYear][$currMonth][$day]['dom']);
						
						$datesInyearsArray[$currYear][$currMonth][$day]['epoch'] = $epoch;
                        $datesInyearsArray[$currYear][$currMonth][$day]['date'] = date("Y-m-d",$epoch);
						}
					}
				}
			}

		$str_mon = sprintf('%02d', $firstMonth); // Need to convert the numeric first month to a string so that we can find it in the array
		$def_validfrom = date("Y/m/d",$datesInyearsArray[$firstYear][$str_mon]['01']['epoch']);
		$def_validto = date("Y/m/d",$datesInyearsArray[$currYear]['12']['31']['epoch']);
		$yearrows = array();

		// Let's generate our autofil buttons & inputs
		$prefills = array();
		$prefillbuttons = array();
		$styleinfo = 'style="padding: 1px; font-size: 9px;border:solid 1px #cccccc; background-color: #ffffff;"';

		foreach ($dowInitArrays as $dia)
			{
			$p = array();
			
			$p["BUTTON"] = '
				<input type="button" class="btn btn-default btn-light tariff_multi_input"  id="'.$dia['class'].'" value="'.$dia['text'].'" onClick="set_rates_by_dow(\''.$dia['class'].'\')" />
				<input type="button" class="btn btn-default btn-light mindays_multi_input" id="'.$dia['class'].'" value="'.$dia['text'].'" onClick="set_mindays_by_dow(\''.$dia['class'].'\')"  style="display:none" />
				';
			
			$p["DOW"] = $dia['text'];
			
			$p["INPUT"] = '
				<input class="'.$dia['class'].'_rates  form-control input-small tariff_multi_input form-control"  type="number" step="any" min="0" name="'.$dia['class'].'_rates" value="'.$jrportal_rates->rates_defaults['roomrateperday'].'" />
				<input class="'.$dia['class'].'_mindays form-control input-small mindays_multi_input form-control" type="number" step="any" min="0"  name="'.$dia['class'].'_mindays" value="'.$jrportal_rates->rates_defaults['mindays'].'"  style="display:none"/>
				';

			$prefills[] = $p;
			}

		$output['PICKER_FROM'] = generateDateInput("picker_from","");
		$output['PICKER_TO'] = generateDateInput("picker_to","");
		$output['PICKER_FROM_SMALL_VIEWPORT'] = generateDateInput("picker_from_smallviewport","" );
		$output['PICKER_TO_SMALL_VIEWPORT'] = generateDateInput("picker_to_smallviewport","" );
		$output['DATE_FORMAT'] = $jrConfig['cal_input'];

        $price_text = jr_gettext('_JOMRES_MICROMANAGE_PRICE','_JOMRES_MICROMANAGE_PRICE',false);
        $mindays_text = jr_gettext('_JOMRES_MICROMANAGE_MINDAYS','_JOMRES_MICROMANAGE_MINDAYS',false);
        
		$output['MININTERVAL'] = $mrConfig['minimuminterval'];
		
		foreach ($datesInyearsArray as $ykey => $y)
			{
			foreach ($y as $mkey => $m)
				{
				$dr=array();
				$dr['YEAR']=$ykey;
				$dr['MONTH']=strftime("%B", strtotime($ykey."-".$mkey."-01")); 
				$days1="";
				$inputs1="";
				$days2="";
				$inputs2="";
                
				foreach ($m as $dkey=>$d)
					{
                     if ($dkey == 1 ) {
						$days1.='<td>&nbsp;</td>';
							$inputs1.='
							<td style="width:10px">
								<small class="muted" style="word-break: keep-all">'. $price_text.'</small><br/>
								<small class="muted" style="word-break: keep-all">'. $mindays_text.'</small>
							</td>';
                        }
                     if ($dkey == 15 ) {
						$days2.='<td>&nbsp;</td>';
							$inputs2.='
							<td style="width:10px">
								<small class="muted" style="word-break: keep-all">'. $price_text.'</small><br/>
								<small class="muted" style="word-break: keep-all">'. $mindays_text.'</small>
							</td>';
                        }
					if ($dkey <= 15)
						{
						$days1.='<th class="setdate manual-input-table-col-widths"> <span style="display:none" data-date="'.$d['date'].'"></span><div class="btn btn-sm btn-default">'.$d['dom'].'</div></th>';
							$inputs1.='
							<td>
								<input type="number" class="'.$d['class'].'_rates  input-mini form-control " style="" id="tariffinput_'.$d['epoch'].'" name="tariffinput['.$d['epoch'].']" value="'.$d['value'].'" />
								<input type="number" class="'.$d['class'].'_mindays input-mini form-control " style="color:red;" id="mindaysinput_'.$d['epoch'].'" name="mindaysinput['.$d['epoch'].']" value="'.$d['mindays'].'" />
							</td>';
						}
					else
						{
						$days2.='<th class="setdate manual-input-table-col-widths"> <span style="display:none" data-date="'.$d['date'].'"></span><div class="btn btn-sm btn-default">'.$d['dom'].'</div></th>';
							$inputs2.='
							<td>
								<input type="number" class="'.$d['class'].'_rates input-mini form-control " style="" id="tariffinput_'.$d['epoch'].'" name="tariffinput['.$d['epoch'].']" value="'.$d['value'].'" />
								<input type="number" class="'.$d['class'].'_mindays input-mini form-control " style="color:red;" id="mindaysinput_'.$d['epoch'].'" name="mindaysinput['.$d['epoch'].']" value="'.$d['mindays'].'" />
							</td>';
						}
					}
				$dr['DAYS1']=$days1;
				$dr['INPUTS1']=$inputs1;
				$dr['DAYS2']=$days2;
				$dr['INPUTS2']=$inputs2;
        
				$daterows[]=$dr;
				}
			}
		if ($clone == 0)
			$output['TARIFFTYPEID']	= $tarifftype_id;
		else
			$output['TARIFFTYPEID']	= 0;

		$options = array();
		$options[] = jomresHTML::makeOption(7, jr_gettext('_JOMRES_SEARCH_ALL','_JOMRES_SEARCH_ALL',false,false) );
		$options[] = jomresHTML::makeOption(1, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_MONDAY",'_JOMRES_COM_MR_WEEKDAYS_MONDAY'));
		$options[] = jomresHTML::makeOption(2, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_TUESDAY",'_JOMRES_COM_MR_WEEKDAYS_TUESDAY'));
		$options[] = jomresHTML::makeOption(3, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY",'_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY'));
		$options[] = jomresHTML::makeOption(4, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_THURSDAY",'_JOMRES_COM_MR_WEEKDAYS_THURSDAY'));
		$options[] = jomresHTML::makeOption(5, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_FRIDAY",'_JOMRES_COM_MR_WEEKDAYS_FRIDAY'));
		$options[] = jomresHTML::makeOption(6, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SATURDAY",'_JOMRES_COM_MR_WEEKDAYS_SATURDAY'));
		$options[] = jomresHTML::makeOption(0, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SUNDAY",'_JOMRES_COM_MR_WEEKDAYS_SUNDAY'));
		
		$output['FIXED_ARRIVAL_DAYOFWEEK'] = jomresHTML::selectList($options, 'fixed_dayofweek', 'class="inputbox" size="1"', 'value', 'text', $fixed_dayofweek);
		
		//labels
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','_JOMRES_COM_MR_LISTTARIFF_RATETITLE',false);
		$output['HTARIFFDESC']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION',false);
		$output['HMINDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','_JOMRES_COM_MR_LISTTARIFF_MINDAYS',false);
		$output['HMAXDAYS']=jr_gettext('_JOMRES_MICROMANAGE_MAXDAYS','_JOMRES_MICROMANAGE_MAXDAYS',false);
		$output['HMINPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',false);
		$output['HMAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',false);
		$output['HROOMTYPEDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',false);
		$output['HIGNOREPPPNDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',false);
		$output['HALLOWWEEKENDSDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',false);
		$output['HWEEKENDONLY']=jr_gettext('_JOMRES_COM_WEEKENDONLY','_JOMRES_COM_WEEKENDONLY',false);
		$output['PICKER_DAYSOFWEEK']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK',false);
		$output['PICKER_DATERANGES']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES','_JOMRES_MICROMANAGE_PICKER_DATERANGES',false);
		$output['PICKER_DATERANGES_START']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','_JOMRES_MICROMANAGE_PICKER_DATERANGES_START',false);
		$output['PICKER_DATERANGES_END']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','_JOMRES_MICROMANAGE_PICKER_DATERANGES_END',false);
		$output['PICKER_DATERANGES_RATE']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE',false);
		$output['_JOMRES_MICROMANAGE_SET_PRICES']=jr_gettext('_JOMRES_MICROMANAGE_SET_PRICES','_JOMRES_MICROMANAGE_SET_PRICES',false,false);
		$output['_JOMRES_COM_MR_LISTTARIFF_LINKTEXT']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','_JOMRES_COM_MR_LISTTARIFF_LINKTEXT',false);
		$output['_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES']=jr_gettext('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES','_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES',false);
		$output['_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS']=jr_gettext('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS','_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS',false);
		$output['_JOMRES_MICROMANAGE_PICKER_SETMINDAYS']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS','_JOMRES_MICROMANAGE_PICKER_SETMINDAYS',false);
		$output['_JOMRES_MICROMANAGE_PICKER_TYPE_DOW']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW','_JOMRES_MICROMANAGE_PICKER_TYPE_DOW',false);
		$output['_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES','_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES',false);
		$output['_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS','_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS',false);
		$output['_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES','_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES',false);
		$output['_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS','_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS',false);
		$output['_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO']=jr_gettext('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO','_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO',false);
		$output['_JOMRES_MICROMANAGE_PICKERS_SELECTOR']=jr_gettext('_JOMRES_MICROMANAGE_PICKERS_SELECTOR','_JOMRES_MICROMANAGE_PICKERS_SELECTOR',false);
		$output['_JOMRES_MICROMANAGE_PICKER_BYDOW']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_BYDOW','_JOMRES_MICROMANAGE_PICKER_BYDOW',false);
		$output['_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO']=jr_gettext('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO','_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO',false);
		$output['HFIXED_DAYOFWEEK']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL')." ".jr_gettext('_JOMRES_DTV_DOW','_JOMRES_DTV_DOW',false);
        $output['_JOMRES_MICROMANAGE_MODAL_BUTTON']=jr_gettext('_JOMRES_MICROMANAGE_MODAL_BUTTON','_JOMRES_MICROMANAGE_MODAL_BUTTON',false);
        $output['_JOMRES_MICROMANAGE_EXTRAOPTIONS']=jr_gettext('_JOMRES_MICROMANAGE_EXTRAOPTIONS','_JOMRES_MICROMANAGE_EXTRAOPTIONS',false);
        $output['_JOMRES_MICROMANAGE_MANUALLY']=jr_gettext('_JOMRES_MICROMANAGE_MANUALLY','_JOMRES_MICROMANAGE_MANUALLY',false);
        $output['_JOMRES_MICROMANAGE_SET_MINDAYS']=jr_gettext('_JOMRES_MICROMANAGE_SET_MINDAYS','_JOMRES_MICROMANAGE_SET_MINDAYS',false);
        $output['_JOMRES_MICROMANAGE_BASIC_SETTINGS']=jr_gettext('_JOMRES_MICROMANAGE_BASIC_SETTINGS','_JOMRES_MICROMANAGE_BASIC_SETTINGS',false);
        $output['_JOMRES_MICROMANAGE_INTRO']=jr_gettext('_JOMRES_MICROMANAGE_INTRO','_JOMRES_MICROMANAGE_INTRO',false);
        $output['_JOMRES_MICROMANAGE_INFO']=jr_gettext('_JOMRES_MICROMANAGE_INFO','_JOMRES_MICROMANAGE_INFO',false);
        $output['_JOMRES_MICROMANAGE_EXTRA_OPTIONS']=jr_gettext('_JOMRES_MICROMANAGE_EXTRA_OPTIONS','_JOMRES_MICROMANAGE_EXTRA_OPTIONS',false);
        $output['_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS']=jr_gettext('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS','_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS',false);
        $output['_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT']=jr_gettext('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT','_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT',false);
		$output['_JOMRES_MICROMANAGE_USE_SELECTED_DATES']=jr_gettext('_JOMRES_MICROMANAGE_USE_SELECTED_DATES','_JOMRES_MICROMANAGE_USE_SELECTED_DATES',false);

		if ($mrConfig['singleRoomProperty'] ==  '0') 
			{
			$already_selected['HMINROOMS'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS','_JOMRES_COM_MR_EB_ROOM_MINROOMS',false);
			$already_selected['HMAXROOMS'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','_JOMRES_COM_MR_EB_ROOM_MAXROOMS',false);
			$already_selected['MINROOMS_DESC'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC',false);
			$already_selected['MAXROOMS_DESC'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC',false);
			}

		$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=list_tariffs_micromanage"), jr_gettext('_JOMRES_COM_A_CANCEL','_JOMRES_COM_A_CANCEL',FALSE));
		$jrtb .= $jrtbar->toolbarItem('save',jomresURL(JOMRES_SITEPAGE_URL."&task=save_tariff_micromanage"),jr_gettext('_JOMRES_COM_MR_SAVE','_JOMRES_COM_MR_SAVE',FALSE),true,'save_tariff_micromanage');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR'] = $jrtb;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_micromanage_tariff.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'prefills',$prefills);
		$tmpl->addRows( 'prefillbuttons',$prefillbuttons);
		$tmpl->addRows( 'daterows',$daterows);
		$tmpl->addRows( 'already_selected_rows',array($already_selected));
		$tmpl->displayParsedTemplate();
		}

	function getValueForTariffThisDate($epoch)
		{
		foreach ($this->rates as $r )
			{
			//var_dump($r);exit;
			$date_elements  = explode("/",$r['validfrom']);
			$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$date_elements  = explode("/",$r['validto']);
			$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			//echo $r['validTo'];exit;
			if ($epoch >= $unixValidFromDate && $epoch <= $unixValidToDate )
				{
				return $r['roomrateperday'];
				}
			}
		return false;
		}
	
	function getMinintervalForTariffThisDate($epoch)
		{
		foreach ($this->rates as $r )
			{
			//var_dump($r);exit;
			$date_elements  = explode("/",$r['validfrom']);
			$unixValidFromDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			$date_elements  = explode("/",$r['validto']);
			$unixValidToDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			//echo $r['validTo'];exit;
			if ($epoch >= $unixValidFromDate && $epoch <= $unixValidToDate )
				{
				return $r['mindays'];
				}
			}
		return false;
		}
	
	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','_JOMRES_COM_MR_LISTTARIFF_RATETITLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','_JOMRES_COM_MR_LISTTARIFF_MINDAYS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','_JOMRES_COM_MR_LISTTARIFF_MAXDAYS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','_JOMRES_COM_MR_LISTTARIFF_ALLOWWE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN');
		$output[]		=jr_gettext('_JOMRES_COM_WEEKENDONLY','_JOMRES_COM_WEEKENDONLY');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES','_JOMRES_MICROMANAGE_PICKER_DATERANGES');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','_JOMRES_MICROMANAGE_PICKER_DATERANGES_START');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','_JOMRES_MICROMANAGE_PICKER_DATERANGES_END');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE');
		$output[]		=jr_gettext('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET');

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
