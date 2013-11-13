<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001bootstrap_dashboard
	{
	function j06001bootstrap_dashboard( $componentArgs )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$ePointFilepath = get_showtime('ePointFilepath');
		
		$property_uid = $componentArgs[ 'property_uid' ];
		if ( is_null( $property_uid ) ) $property_uid = getDefaultProperty();
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !in_array( $property_uid, $thisJRUser->authorisedProperties ) ) return;
		
		$mrConfig = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;
		
		$output=array();
		$r=array();
		$pageoutput=array();
		$roomsoutput=array();
		
		if (using_bootstrap())
			{
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.'/jomres/libraries/bootstrap_dashboard/javascript/language/'.get_showtime('lang').'.js'))
				jomres_cmsspecific_addheaddata("javascript",'jomres/libraries/bootstrap_dashboard/js/language/',get_showtime('lang').'.js',false);
			else
				jomres_cmsspecific_addheaddata("javascript",'jomres/libraries/bootstrap_dashboard/js/language/',"template.js",false);
			jomres_cmsspecific_addheaddata("javascript",'jomres/libraries/bootstrap_dashboard/components/underscore/',"underscore-min.js",false);
			jomres_cmsspecific_addheaddata("javascript",'jomres/libraries/bootstrap_dashboard/components/jstimezonedetect/',"jstz.js",false);
			jomres_cmsspecific_addheaddata("javascript",'jomres/libraries/bootstrap_dashboard/js/',"calendar.js",false);
			jomres_cmsspecific_addheaddata("css",'jomres/libraries/bootstrap_dashboard/css/','calendar.css',false);
			}
		else
			return;
		
		$output['AJAXURL']=JOMRES_SITEPAGE_URL_AJAX."&task=bootstrap_dashboard_ajax&property_uid=".$property_uid;
		$output['FIRST_DAY_OF_WEEK']='1';
		$output['LANG']=get_showtime('lang');
		$output['TMPL_PATH']=get_showtime('live_site').'/jomres/libraries/bootstrap_dashboard/tmpls/';
		$output['HBOOKINGS_LIST']=jr_gettext( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', _JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS,false );
		$output['NEXT'] = jr_gettext( 'COMMON_NEXT', COMMON_NEXT, false );
		$output['PREV'] = "Prev";
		$output['TODAY'] = "Today";
		$output['YEAR'] = "Year";
		$output['MONTH'] = "Month";
		$output['WEEK'] = "Week";
		$output['DAY'] = "Day";
		
		$output['HLEGEND']="Legend";
		$output['HPROVISIONALBOOKING']="Provisional booking";
		$output['HCONFIRMEDBOOKING']="Confirmed booking";
		$output['HBLACKBOOKING']=jr_gettext( '_JOMRES_COM_AVLCAL_BLACK_KEY', _JOMRES_COM_AVLCAL_BLACK_KEY,false );
		$output['HCURRENTRESIDENT']=jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', _JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT,false );
		$output['HBOOKEDOUT']="Booked out";

		if ($mrConfig[ 'singleRoomProperty' ]!='1')
			{
			$r['ROOMS_DROPDOWN']=$this->getPropertyRoomsDropdown($property_uid);
			$r['HROOMS_DROPDOWN']="Select room";
			$output['ROOMS_DROPDOWN_JS']="onBeforeEventsLoad: function (next) {
												var value = jomresJquery('#room_uids').val();
												value = value.length ? parseInt(value) : null;
												this.setOptions({events_url: '".$output['AJAXURL']."' + '&room_uid=' + value});
												next();
											},";
			}

		$pageoutput[]=$output;
		$roomsoutput[]=$r;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'roomsoutput',$roomsoutput);
		$tmpl->readTemplatesFromInput( 'bootstrap_dashboard.html');
		$tmpl->displayParsedTemplate();
		}
	
	function getPropertyRoomsDropdown($property_uid = 0)
		{
		if ($property_uid==0) return;
		$options=array();
		$roomDetails=array();
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $property_uid );
		
		$gor=genericOr($current_property_details->rooms, 'room_uid');
		$query="SELECT room_uid, room_classes_uid, room_name, room_number, max_people FROM #__jomres_rooms WHERE $gor AND propertys_uid = '".(int)$property_uid."' ";
		$roomDetailsList=doSelectSql($query);
		
		foreach ($roomDetailsList as $details)
			{
			$roomDetails[$details->room_uid]['abbv']=$current_property_details->all_room_types[ $details->room_classes_uid ][ 'room_class_abbv' ];
			$roomDetails[$details->room_uid]['room_name']=$details->room_name;
			$roomDetails[$details->room_uid]['room_number']=$details->room_number;
			$roomDetails[$details->room_uid]['max_people']=$details->max_people;
			}
		
		$options[] = jomresHTML::makeOption( '0', "All" );
		foreach ($current_property_details->rooms as $r_uid)
			{
			$option_text=$roomDetails[$r_uid]['room_number'] . ' - ' . $roomDetails[$r_uid]['abbv'];
			$options[] = jomresHTML::makeOption( $r_uid, $option_text );
			}
		
		$dropdown = jomresHTML::selectList( $options, 'room_uids', 'size="1" class="inputbox span12"', 'value', 'text', '0' );
		
		return $dropdown;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>