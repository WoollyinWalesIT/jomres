<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002edit_tariff_advanced 
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
		
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig['tariffmode'] != '1' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property'))
			return;
		
		$rates_uid	= (int)jomresGetParam( $_REQUEST, 'tariffUid', 0 );
		$clone		= (int)jomresGetParam( $_REQUEST, 'clone', 0 );

		$basic_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($defaultProperty);
		
		//check if this property type has room types assigned
        if (empty($basic_property_details->this_property_room_classes)) {
            throw new Exception('Error, there are no room types for this property type. You can assign room types to this property type by visiting Administrator -> Jomres -> Site Structure -> and editing the room/resource types.');
            return;
        }
		
		$tarifftype_id = 0;
		$output = array();
		$already_selected = array();
		
		//get all rates for tarifftype id
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;
		
		//get tarifftype id for this rates_uid
		if ($rates_uid > 0) {
			$tarifftype_id = $jrportal_rates->get_tarifftype_id($rates_uid);
		}
		
		if ($tarifftype_id > 0) {
			$jrportal_rates->tarifftype_id = $tarifftype_id;
			$jrportal_rates->get_rate();
		}
		
		//Let's get the current tarifftype details, and find the first tariff of this type so that we can get the min & max people and min and max days
		if (isset($jrportal_rates->rates[$tarifftype_id]) && !empty($jrportal_rates->rates[$tarifftype_id]))
			{
			foreach ($jrportal_rates->rates[$tarifftype_id] as $r)
				{
				$output['TARIFFTITLE'] = $r['rate_title'];
				$output['TARIFFDESC'] = $r['rate_description'];
				$output['RATEPERDAY'] = $r['roomrateperday'];
				$output['VALIDFROM'] = generateDateInput("validfrom",$r['validfrom']);
				$output['VALIDTO'] = generateDateInput("validto",$r['validto']);
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
			$output['TARIFFTITLE'] = $jrportal_rates->rates_defaults['rate_title'];
			$output['TARIFFDESC'] = $jrportal_rates->rates_defaults['rate_description'];
			$output['RATEPERDAY'] = $jrportal_rates->rates_defaults['roomrateperday'];
			$output['VALIDFROM'] = generateDateInput("validfrom",'');
			$output['VALIDTO'] = generateDateInput("validto",'');
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
			
			$output['ROOMTYPEDROPDOWN'] = jomresHTML::selectList($options, 'roomClass', 'class="inputbox" size="1"', 'value', 'text', $roomclassid);
			}

		$options = array();
		$options[] = jomresHTML::makeOption(7, jr_gettext('_JOMRES_SEARCH_ALL','_JOMRES_SEARCH_ALL',false,false) );
		$options[] = jomresHTML::makeOption(1, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_MONDAY",'_JOMRES_COM_MR_WEEKDAYS_MONDAY'));
		$options[] = jomresHTML::makeOption(2, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_TUESDAY",'_JOMRES_COM_MR_WEEKDAYS_TUESDAY'));
		$options[] = jomresHTML::makeOption(3, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY",'_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY'));
		$options[] = jomresHTML::makeOption(4, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_THURSDAY",'_JOMRES_COM_MR_WEEKDAYS_THURSDAY'));
		$options[] = jomresHTML::makeOption(5, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_FRIDAY",'_JOMRES_COM_MR_WEEKDAYS_FRIDAY'));
		$options[] = jomresHTML::makeOption(6, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SATURDAY",'_JOMRES_COM_MR_WEEKDAYS_SATURDAY'));
		$options[] = jomresHTML::makeOption(0, jr_gettext("_JOMRES_COM_MR_WEEKDAYS_SUNDAY",'_JOMRES_COM_MR_WEEKDAYS_SUNDAY'));
		
		$output['DAYOFWEEK'] = jomresHTML::selectList($options, 'fixed_dayofweek', 'class="inputbox" size="1"', 'value', 'text', $fixed_dayofweek);

		//labels
		$output['HTARIFFTITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','_JOMRES_COM_MR_LISTTARIFF_RATETITLE',false);
		$output['HTARIFFDESC']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION',false);
		$output['HVALIDFROM']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','_JOMRES_COM_MR_LISTTARIFF_VALIDFROM',false);
		$output['HVALIDTO']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','_JOMRES_COM_MR_LISTTARIFF_VALIDTO',false);
		$output['HMINDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','_JOMRES_COM_MR_LISTTARIFF_MINDAYS',false);
		$output['HMAXDAYS']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','_JOMRES_COM_MR_LISTTARIFF_MAXDAYS',false);
		$output['HMINPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE',false);
		$output['HMAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',false);
		$output['HROOMTYPEDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS',false);
		$output['HIGNOREPPPNDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN',false);
		$output['HALLOWWEEKENDSDROPDOWN']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','_JOMRES_COM_MR_LISTTARIFF_ALLOWWE',false);
		$output['HWEEKENDONLY']=jr_gettext('_JOMRES_COM_WEEKENDONLY','_JOMRES_COM_WEEKENDONLY',false);
		$output['HDAYOFWEEK']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL')." ".jr_gettext('_JOMRES_DTV_DOW','_JOMRES_DTV_DOW',false);
		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT',false);
		
		if ($mrConfig['tariffChargesStoredWeeklyYesNo']=="1")
			$output['HRATEPERDAY']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',false);
		else
			$output['HRATEPERDAY']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY',false);
		
		if ($mrConfig['singleRoomProperty'] ==  '0') 
			{
			$already_selected['HMINROOMS'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS','_JOMRES_COM_MR_EB_ROOM_MINROOMS',false);
			$already_selected['HMAXROOMS'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','_JOMRES_COM_MR_EB_ROOM_MAXROOMS',false);
			$already_selected['MINROOMS_DESC'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC',false);
			$already_selected['MAXROOMS_DESC'] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC',false);
			}
		
		if ($clone == 0) 
			{
			$output['RATESUID'] = $rates_uid;
			$output['TARIFFTYPEID'] = $tarifftype_id;
			}
		else
			{
			$output['RATESUID'] = 0;
			$output['TARIFFTYPEID'] = 0;
			}

		$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=list_tariffs_advanced"),jr_gettext('_JOMRES_COM_A_CANCEL','_JOMRES_COM_A_CANCEL',FALSE));
		$jrtb .= $jrtbar->toolbarItem('save',jomresURL(JOMRES_SITEPAGE_URL."&task=save_tariff_advanced"),jr_gettext('_JOMRES_COM_MR_SAVE','_JOMRES_COM_MR_SAVE',FALSE),true,'save_tariff_advanced');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR'] = $jrtb;
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_advanced_tariff.html');
		$tmpl->addRows( 'already_selected',array($already_selected));
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','_JOMRES_COM_MR_LISTTARIFF_RATETITLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','_JOMRES_COM_MR_LISTTARIFF_VALIDFROM');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','_JOMRES_COM_MR_LISTTARIFF_VALIDTO');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','_JOMRES_COM_MR_LISTTARIFF_MINDAYS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','_JOMRES_COM_MR_LISTTARIFF_MAXDAYS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN');
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','_JOMRES_COM_MR_LISTTARIFF_ALLOWWE');
		$output[]		=jr_gettext('_JOMRES_COM_WEEKENDONLY','_JOMRES_COM_WEEKENDONLY');

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
