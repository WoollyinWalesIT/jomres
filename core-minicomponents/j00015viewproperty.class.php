<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00015viewproperty
	{
	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00015viewproperty($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		
		$jrConfig=$siteConfig->get();
		$customTextObj =jomres_getSingleton('custom_text');
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}

		$property_uid=(int)$componentArgs['property_uid'];
		$featureList=array();
		if (!isset($property_uid) || empty($property_uid) )
			$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		$mrConfig=getPropertySpecificSettings($property_uid);
		if (!isset($jrConfig['show_booking_form_in_property_details']))
			$jrConfig['show_booking_form_in_property_details']="1";
		$userIsManager=checkUserIsManager();
		if (!$userIsManager)
			propertyClicked($property_uid);

		$current_property_details =jomres_getSingleton('basic_property_details');
		$current_property_details->gather_data($property_uid);

		$pr_published=$current_property_details->published;
		$property_street=$current_property_details->property_street;
		$property_town=$current_property_details->property_town;
		$property_region=$current_property_details->property_region;
		$property_country=$current_property_details->property_country;
		$property_postcode=$current_property_details->property_postcode;
		$property_tel=$current_property_details->property_tel;
		$property_fax=$current_property_details->property_fax;

		$property_description=$current_property_details->property_description;
		$property_checkintimes=$current_property_details->property_checkin_times;
		$property_areaactivities=$current_property_details->property_area_activities;
		$property_drivingdirections=$current_property_details->property_driving_directions;
		$property_airports=$current_property_details->property_airports;
		$property_othertransport=$current_property_details->property_othertransport;
		$property_policiesdisclaimers=$current_property_details->property_policies_disclaimers;
		
		if ( ($pr_published=="1" && !$userIsManager) || $userIsManager )
			{
			$property=array();
			$property_deets=$MiniComponents->triggerEvent('00040',array('property_uid'=>$property_uid ) );

			$stars=$current_property_details->stars;
			$starslink="<IMG SRC=\"".get_showtime('live_site')."/jomres/images/blank.png\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\">";
			if ($stars!="0")
				{
				$starslink="";
			  	for ($i=1;$i<=$stars;$i++)
		    		{
					$starslink.="<IMG SRC=\"".get_showtime('live_site')."/jomres/images/star.png\" border=\"0\">";
					}
				}

			$features=$current_property_details->features;
			if (count($features) > 0)
				{
				foreach ($features as $f)
					{
					$propertyFeatureDescriptionsArray['FEATURE']=jomres_makeTooltip($f['abbv'],$f['abbv'],$f['desc'],$f['image'],"","property_feature",array());
					$featureList[]=$propertyFeatureDescriptionsArray;
					}
				$property['HFEATURES']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
				}
			else
				$property['HFEATURES']	=	"";

			$rtRows=array();
			$roomtypes=array();
			if ($mrConfig['singleRoomProperty'] != "1")
				{
				
				$RoomClassAbbvs = array();
				$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes";
				$roomsClassList =doSelectSql($query);
				foreach ($roomsClassList as $roomClass)
					{
					$RoomClassAbbvs[(int)$roomClass->room_classes_uid] = array( 
						'abbv'=>
						jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_abbv),false,false),
						'desc'=>
						jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_full_desc),false,false),
						'image'=>
						$roomClass->image
						);
					}
				$property['HRTYPES']	=	"";
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
						$property['HRTYPES']=jr_gettext('_JOMRES_FRONT_ROOMTYPES',_JOMRES_FRONT_ROOMTYPES);
						foreach ($roomTypeArray as $type)
							{
							$roomtype_abbv = $RoomClassAbbvs[$type]['abbv'];
							$roomtype_desc = $RoomClassAbbvs[$type]['desc'];
							$rtRows['ROOM_TYPE']=jomres_makeTooltip($roomtype_abbv,$roomtype_abbv,$roomtype_desc,$RoomClassAbbvs[$type]['image'],"","room_type",array());
							$roomtypes[]=$rtRows;
							}
						}
					}
				}

			if ($mrConfig['showSlideshowInline']=="1" && ($jrConfig['slideshowLocation'] == 1 || $jrConfig['slideshowLocation'] == 3 ))
				{
				$componentArgs=array();
				$MiniComponents->triggerEvent('01060',array('property_uid'=>$property_uid )); // New location for slideshow images
				}

			$property['LIVE_SITE']=get_showtime('live_site');
			$property['HPROPERTYNAME']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
			$property['HSTREET']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
			$property['HTOWN']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
			$property['HREGION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
			$property['HCOUNTRY']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
			$property['HPOSTCODE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
			$property['HTELEPHONE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
			$property['HFAX']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
			$property['HMAPPINGLINK']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
			$property['HDESCRIPTION']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION,$editable=true,$isLink=true);
			$property['HCHECKINTIMES']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES);
			$property['HAREAACTIVITIES']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES);
			$property['HDRIVINGDIRECTIONS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS);
			$property['HAIRPORTS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS);
			$property['HOTHERTRANSPORT']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT);
			$property['HPOLICIESDISCLAIMERS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);

			
			$property['TITLE_PROPERTYDETAILS']		=jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS',_JOMRES_PATHWAY_PROPERTYDETAILS,false,false);
			$property['TITLE_PROPERTYDETAILS_ANCHOR']=jomres_generate_tab_anchor($property['TITLE_PROPERTYDETAILS']);
			$property['TITLE_MOREINFO']				=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,false,false);
			$property['TITLE_MOREINFO_ANCHOR']		=jomres_generate_tab_anchor($property['TITLE_MOREINFO']);

			$property['TITLE_AVAILABILITYCALENDAR']	=jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY',_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY,false,false);
			$property['TITLE_ROOMSLIST']			=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,false,false);
			$property['TITLE_SLIDESHOW']			=jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,false,false);
			$property['TITLE_MAP']					=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,false,false);
			$property['TITLE_TARIFF']				=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE',_JOMRES_COM_MR_LISTTARIFF_TITLE,false,false);

			$property['COM_A_BASICTEMPLATE_SHOWADDRESS']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS);
			$property['COM_A_BASICTEMPLATE_SHOWDETAILS']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS,$editable=true,$isLink=true);
			$property['COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE,FALSE);
			$property['COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE,FALSE);

			$tariffslink		=	array();
			$slideshowlink		=	array();
			$gallerylink		=	array();
			$mappinglink		=	array();
			$bookinglink		=	array();
			$roomslistlink		=	array();
			
			$output_now="&op=1";
			if ($mrConfig['is_real_estate_listing']==0)
				{
				if ($mrConfig['showTariffsLink']=="1")
					{
					$link				=	array();
					$link['LINK'] = jomresURL(JOMRES_SITEPAGE_URL."&task=showTariffs&property_uid=$property_uid".$output_now);
					$link ['TEXT']=jr_gettext('_JOMRES_FRONT_TARIFFS',_JOMRES_FRONT_TARIFFS,$editable=false,$isLink=false);
					$tariffslink[]		= 	$link;
					}
				}
			if ($mrConfig['showSlideshowLink']=="1")
				{
				$link				=	array();
				$link['LINK'] = jomresURL(JOMRES_SITEPAGE_URL."&task=slideshow&property_uid=$property_uid".$output_now);
				$link ['TEXT']=jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,$editable=false,$isLink=false);
				$slideshowlink[]	= 	$link;
				}
			if ($mrConfig['galleryLink']!="")
				{
				$link				=	array();
				// if(filter_var($mrConfig['galleryLink'], FILTER_VALIDATE_URL) === TRUE) Not using this as it doesn't seem to work
				if (function_exists('filter_var'))
					$mrConfig['galleryLink'] = filter_var($mrConfig['galleryLink'], FILTER_SANITIZE_URL);
				else
					$mrConfig['galleryLink'] = jomresURL($mrConfig['galleryLink']);

				$link['GALLERYLINK']= preg_replace("
					#((http|https|ftp)://(\S*?\.\S*?))(\s|\;|\)|\]|\[|\{|\}|,|\"|'|:|\<|$|\.\s)#ie",
					"'<a href=\"$1\" target=\"_blank\" class=\"fg-button ui-state-default ui-corner-all\">$3</a>$4'",
					$mrConfig['galleryLink']
					);
				$gallerylink[]		= 	$link;
				}
			if (!empty($mappinglink))
				{
				$link				=	array();
				if(filter_var($mappinglink, FILTER_VALIDATE_URL) === TRUE)
					{
					$link['LINK'] = jomresURL($mappinglink);
					$link ['TEXT']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,$editable=false,$isLink=false);
					$mappinglink[]		= 	$link;
					}
				}

			$bookinglink = array();

			if ($mrConfig['visitorscanbookonline']=='1' && $jrConfig['show_booking_form_in_property_details'] != "1")
				{
				$link				=	array();
				$url=JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=$property_uid";
				if ( (($mrConfig['fixedArrivalDateYesNo']=='1'|| $mrConfig['fixedPeriodBookings']=='1')) && !isset($tmpBookingHandler->tmpsearch_data['jomsearch_availability_departure']) ) // We'll add an invalid arrival date if the fixed arrival date setting is set to Yes. This way we can force the booking engine to see the arrival date is wrong and it'll rebuild the available rooms list, which it doesn't if the date is correct when coming from the Book a room link.
					$url.="&amp;arrivalDate=2009-01-01";
				if ( $jrConfig['useSSLinBookingform'] == "1" )
					$url=jomresURL($url,1);
				else
					$url=jomresURL($url);
					
				$link['LINK']=$url;
				$link['TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false);
				if ($mrConfig['singleRoomProperty'] ==  '1')
					{
					$link['TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false);
					}
				
				$bookinglink[]		= 	$link;
				}
			else
				{
				$link				=	array();
				$link['LINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=$property_uid&amp;arrivalDate=2009-01-01");
				$link['TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,false,false);
				$link['BOOKINGLINK']="<a href=\"".$link['LINK']."\" class=\"fg-button ui-state-default ui-corner-all\">".$link['TEXT']."</a>";
				$bookinglink[]		= 	$link;
				}
			if ($mrConfig['is_real_estate_listing']==0)
				{
				if ( $mrConfig['showRoomsListingLink']=="1")
					{
					$link				=	array();
					$link['LINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=showRoomsListing&property_uid=$property_uid".$output_now);
					$link['TEXT']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,$editable=false,$isLink=false);
					$roomslistlink[]	= 	$link;
					}
				}

			$link				=	array();
			$link['LINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=$property_uid");
			if ($mrConfig['is_real_estate_listing']==0)
				$link['TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,false,false);
			else
				$link['TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT',_JOMRES_FRONT_MR_MENU_CONTACT_AGENT,false,false);
			$contactuslink[]	= 	$link;
				
			$property['POSTCODE']=$property_postcode;
			$property['TELEPHONE']=$property_tel;
			$property['FAX']=$property_fax;

			$property['STREET']=$current_property_details->property_street;
			$property['TOWN']=$current_property_details->property_town ;
			$property['REGION']=$current_property_details->property_region;
			$property['COUNTRY']=$current_property_details->property_country;

			$property['HMAPPINGLINK']="";
			$property['DESCRIPTION']=$property_description;
			$property['CHECKINTIMES']=$property_checkintimes;
			if (empty($property['CHECKINTIMES']))
				$property['HCHECKINTIMES']="";
			$property['AREAACTIVITIES']=$property_areaactivities;
			if (empty($property['AREAACTIVITIES']))
				$property['HAREAACTIVITIES']="";
			$property['DRIVINGDIRECTIONS']=$property_drivingdirections;
			if (empty($property['DRIVINGDIRECTIONS']))
				$property['HDRIVINGDIRECTIONS']="";
			$property['AIRPORTS']=$property_airports;
			if (empty($property['AIRPORTS']))
				$property['HAIRPORTS']="";
			$property['OTHERTRANSPORT']=$property_othertransport;
			if (empty($property['OTHERTRANSPORT']))
				$property['HOTHERTRANSPORT']="";
			$property['POLICIESDISCLAIMERS']=$property_policiesdisclaimers;
			if (empty($property['POLICIESDISCLAIMERS']))
				$property['HPOLICIESDISCLAIMERS']="";
			
			$property['REAL_ESTATE_PROPERTY_PRICE']=output_price($current_property_details->real_estate_property_price);
			
			$property_deets[]=$property;
			
			$this->retVals['property_deets']=$property_deets;
			$this->retVals['featurelist']=$featureList;
			$this->retVals['roomtypes']=$roomtypes;
			$this->retVals['bookinglink']=$bookinglink;
			$this->retVals['slideshowlink']=$slideshowlink;
			$this->retVals['tariffslink']=$tariffslink;
			$this->retVals['gallerylink']=$gallerylink;
			$this->retVals['roomslistlink']=$roomslistlink;
			$this->retVals['mappinglink']=$mappinglink;
			$this->retVals['contactuslink']=$contactuslink;
			$this->retVals['property_deets']=$property_deets;

			if ($mrConfig['showSlideshowInline']=="1")
				{
				$componentArgs=array('property_uid'=>$property_uid );
				$MiniComponents->triggerEvent('01060',$componentArgs); //showSlideshows
				}

			$componentArgs=array('property_uid'=>$property_uid );
			$MiniComponents->triggerEvent('01050',$componentArgs);

			if ($mrConfig['showTariffsInline']=="1")
				{
				$componentArgs=array('showheader'=>false);
				$MiniComponents->triggerEvent('01020',$componentArgs); //showTariffs();
				}


			if (($mrConfig['showAvailabilityCalendar'] && $mrConfig['singleRoomProperty']) )
				showSingleRoomPropAvl($property_uid);
			elseif ($mrConfig['showRoomsInPropertyDetails'])
				{
				$componentArgs=array('all'=>"all",'property_uid'=>$property_uid);
				$MiniComponents->triggerEvent('00018',$componentArgs);
				}

			if ($mrConfig['roomslistinpropertydetails']=="1")
				{
				$componentArgs=array('all'=>"all",'property_uid'=>$property_uid);
				$MiniComponents->triggerEvent('01055',$componentArgs);
				}
			}
		}

	function touch_template_language()
		{
		$output=array();
		
		$output[]=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT',_JOMRES_FRONT_MR_MENU_CONTACT_AGENT);
		$output[]=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL);
		$output[]=jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS',_JOMRES_PATHWAY_PROPERTYDETAILS);
		$output[]=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION);
		$output[]=jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY',_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY);
		$output[]=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE);
		$output[]=jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
		$output[]=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE',_JOMRES_COM_MR_LISTTARIFF_TITLE);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);

		$output[]=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS);
		$output[]=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS);
		$output[]=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE);
		$output[]=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE);
		$output[]=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY);
		$output[]=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM);
		$output[]=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
		$output[]=jr_gettext('_JOMRES_FRONT_GALLERYLINK',_JOMRES_FRONT_GALLERYLINK);
		$output[]=jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW);
		$output[]=jr_gettext('_JOMRES_FRONT_TARIFFS',_JOMRES_FRONT_TARIFFS);
		
		$output[]=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS);


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
		return $this->retVals;
		}

	}
?>