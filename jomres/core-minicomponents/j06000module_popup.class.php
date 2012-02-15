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

class j06000module_popup
	{
	function j06000module_popup()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$property_uid = (int)jomresGetParam($_REQUEST,"id",0);
		$result = '';
		if ($property_uid > 0)
			{
			$current_property_details =jomres_getSingleton('basic_property_details');
			$current_property_details->gather_data($property_uid);

			$inline_calendar = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property_uid,'return_calendar'=>"1",'noshowlegend'=>"1") );
			
			$mrConfig=getPropertySpecificSettings($property_uid);
			set_showtime('property_uid',$property_uid);
			$customTextObj =jomres_getSingleton('custom_text');
			$customTextObj->get_custom_text_for_property($property_uid);


			$pricesFromArray=array();
			$searchDate = date("Y/m/d");
			if (isset($_REQUEST['arrivalDate']))
				{
				$searchDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ));
				}
			$query = "SELECT property_uid, roomrateperday FROM #__jomres_rates WHERE property_uid = ".(int)$property_uid." AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' ";
			$tariffList = doSelectSql($query);
			if (count($tariffList) > 0)
				{
				foreach ($tariffList as $t)
					{
					if ( !isset($pricesFromArray[$t->property_uid]) )
						$pricesFromArray[$t->property_uid]=$t->roomrateperday;
					elseif ( isset($pricesFromArray[$t->property_uid]) && $pricesFromArray[$t->property_uid] > $t->roomrateperday )
						$pricesFromArray[$t->property_uid]=$t->roomrateperday;
					}
				}

			$property_image=get_showtime('live_site')."/jomres/images/jrhouse.png";
			if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS.$property_uid."_property_".$property_uid.".jpg") )
				$property_image=get_showtime('live_site')."/jomres/uploadedimages/".$property_uid."_property_".$property_uid.".jpg";
				
			$output = array();
			$output['THUMBNAIL']=getThumbnailForImage($property_image);
			if (!$output['THUMBNAIL'])
				$output['THUMBNAIL']=$property_image;

			if ($mrConfig['is_real_estate_listing']==0)
				{
				if (isset($pricesFromArray[$property_uid]))
					{
					if ($mrConfig['prices_inclusive']=="0")
						$price=output_price ($current_property_details->get_gross_accommodation_price($pricesFromArray[$property_uid],$property_uid));
					else
						$price=output_price ($pricesFromArray[$property_uid]);
					if ($mrConfig['tariffChargesStoredWeeklyYesNo'] == "1" && $mrConfig['tariffmode'] == "1")
						$price.="&nbsp;".jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK);
					else
						{
						if ($mrConfig['wholeday_booking'] == "1")
							{
							if ($mrConfig['perPersonPerNight']=="0" )
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY',_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY);
							else
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY',_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY);
							}
						else
							{
							if ($mrConfig['perPersonPerNight']=="0" )
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);
							else
								$price.="&nbsp;".jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN);
							}
						}
					$price = jr_gettext('_JOMRES_TARIFFSFROM',_JOMRES_TARIFFSFROM,false,false).$price;
					}
				else
					$price=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE). ": ".output_price($output['real_estate_property_price']);
				}
			else
				$price=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE). ": ".output_price($output['real_estate_property_price']);
			$output['PRICE']=$price;
			$output['PROPERTY_UID']=$property_uid;
			$output['RANDOM_IDENTIFIER'] = generateJomresRandomString(10);
			$output['JOMRES_SITEPAGE_URL_AJAX']=JOMRES_SITEPAGE_URL_AJAX;
			$output['LIVE_SITE']=get_showtime('live_site');
			$output['MOREINFORMATION']= jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,true) ;
			$output['MOREINFORMATIONLINK']=jomresURL( JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property_uid) ;
			$output['STARSIMAGES'] = '';
			for ($i=1;$i<=$current_property_details->stars;$i++)
				{
				$output['STARSIMAGES'].="<img src=\"".get_showtime('live_site')."/jomres/images/star.png\" alt=\"star\" border=\"0\" />";
				}
			
			$output['PROPERTY_STREET'] = $current_property_details->property_street;
			$output['PROPERTY_TOWN'] = $current_property_details->property_town;
			$output['PROPERTY_POSTCODE'] = $current_property_details->property_postcode;
			$output['PROPERTY_REGION'] = $current_property_details->property_region;
			$output['PROPERTY_COUNTRY'] = $current_property_details->property_country;
			$output['PROPERTY_COUNTRY_CODE'] = $current_property_details->property_country_code; 
			$output['PROPERTY_TEL'] = $current_property_details->property_tel;
			$output['PROPERTY_EMAIL'] = $current_property_details->property_email;
			$output['STARS'] = $current_property_details->stars;
			$output['LAT'] = $current_property_details->lat;
			$output['LONG'] = $current_property_details->long;
			$output['PROPERTY_DESCRIPTION'] = $current_property_details->property_description;
			$output['PROPERTY_CHECKIN_TIMES'] = $current_property_details->property_checkin_times;
			$output['PROPERTY_AREA_ACTIVITIES'] = $current_property_details->property_area_activities;
			$output['PROPERTY_DRIVING_DIRECTIONS'] = $current_property_details->property_driving_directions;
			$output['PROPERTY_AIRPORTS'] = $current_property_details->property_airports;
			$output['PROPERTY_OTHERTRANSPORT'] = $current_property_details->property_othertransport;
			$output['PROPERTY_POLICIES_DISCLAIMERS'] = $current_property_details->property_policies_disclaimers;
			
			
			$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."' ";
			$rt= doSelectSql($query);
			if (count($rt)>0)
				{
				$roomTypeArray=array();
				foreach ($rt as $roomtype)
					{
					$roomTypeArray[]=$roomtype->room_classes_uid;
					}

				if (count($roomTypeArray)>1)
					$roomTypeArray=array_unique($roomTypeArray);
				if (count($roomTypeArray)>0)
					{
					$output['HRTYPES']=jr_gettext('_JOMRES_FRONT_ROOMTYPES',_JOMRES_FRONT_ROOMTYPES);
					foreach ($roomTypeArray as $type)
						{
						$roomtype_abbv = $current_property_details->all_room_types[$type]['room_class_abbv'];
						$roomtype_desc = $current_property_details->all_room_types[$type]['room_class_full_desc'];
						$rtRows['ROOM_TYPE']=jomres_makeTooltip($roomtype_abbv,$roomtype_abbv,$roomtype_desc,$current_property_details->all_room_types[$type]['image'],"","room_type",array());
						$roomtypes[]=$rtRows;
						}
					}
				}

			$features=$current_property_details->features;
			$featureList = array();
			if (count($features) > 0)
				{
				foreach ($features as $f)
					{
					$propertyFeatureDescriptionsArray['FEATURE']=jomres_makeTooltip($f['abbv'],$f['abbv'],$f['desc'],$f['image'],"","property_feature",array());
					$featureList[]=$propertyFeatureDescriptionsArray;
					}
				$output['HFEATURES']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
				}
			else
				$output['HFEATURES']	=	"";
			
			$pageoutput = array($output);
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'pageoutput',$pageoutput);
			if (count($roomtypes)>0)
				$tmpl->addRows( 'room_types',$roomtypes);
			if (count($featureList)>0)
				$tmpl->addRows( 'property_features',$featureList);
			$tmpl->readTemplatesFromInput( 'module_popup_contents.html' );
			
			$result = $tmpl->getParsedTemplate();
			
			}
		echo $result;
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>