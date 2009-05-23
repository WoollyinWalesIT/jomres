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
class j00015viewproperty
	{
	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00015viewproperty($componentArgs)
		{
		global $mrConfig,$jomresConfig_live_site,$jomresConfig_lang,$jrConfig,$MiniComponents,$mainframe,$customTextArray;
		global $thisJomresPropertyDetails,$customTextObj;
		global $MiniComponents;

		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}

		$property_uid=(int)$componentArgs['property_uid'];
		$featureList=array();
		if (!isset($property_uid) || empty($property_uid) )
			$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		$mrConfig=getPropertySpecificSettings($property_uid);
		$userIsManager=checkUserIsManager();
		//if (!$userIsManager)
			propertyClicked($property_uid);
		$propertyList =$thisJomresPropertyDetails['obj'];

		foreach ($propertyList as $pproperty)
			{
			$customTextArray=$customTextObj->get_custom_text_for_property($property_uid);
			
			$pr_published=$pproperty->published;
			$property_street=stripslashes($pproperty->property_street);
			$property_town=stripslashes($pproperty->property_town);
			$property_region=stripslashes($pproperty->property_region);
			$property_country=stripslashes($pproperty->property_country);
			$property_postcode=stripslashes($pproperty->property_postcode);
			$property_tel=stripslashes($pproperty->property_tel);
			$property_fax=stripslashes($pproperty->property_fax);

			$property_description=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim(stripslashes($pproperty->property_description))));

			$property_checkintimes=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',trim(stripslashes($pproperty->property_checkin_times))));
			$property_areaactivities=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',trim(stripslashes($pproperty->property_area_activities))));
			$property_drivingdirections=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',trim(stripslashes($pproperty->property_driving_directions))));
			$property_airports=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',trim(stripslashes($pproperty->property_airports))));
			$property_othertransport=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',trim(stripslashes($pproperty->property_othertransport))));
			$property_policiesdisclaimers=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($pproperty->property_policies_disclaimers))));

			$mappinglink=$pproperty->property_mappinglink;
			$propertyFeaturesArray=explode(",",($pproperty->property_features));
			}

		if ( ($pr_published=="1" && !$userIsManager) || $userIsManager )
			{
			$property=array();
			$property_deets=$MiniComponents->triggerEvent('00040',array('property_uid'=>$property_uid ) );

			$stars=$thisJomresPropertyDetails['stars'];
			$starslink="<IMG SRC=\"".$jomresConfig_live_site."/jomres/images/blank.png\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\">";
			if ($stars!="0")
				{
				$starslink="";
			  	for ($i=1;$i<=$stars;$i++)
		    		{
					$starslink.="<IMG SRC=\"".$jomresConfig_live_site."/jomres/images/star.png\" border=\"0\">";
					}
				}
			$countryname=getSimpleCountry($property_country);

			if (count($propertyFeaturesArray)>0)
				{
				$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
				$propertyFeaturesList= doSelectSql($query);
				foreach($propertyFeaturesList as $propertyFeature)
					{
					if (in_array(($propertyFeature->hotel_features_uid),$propertyFeaturesArray ))
						{
						//$propertyFeatureDescriptionsArray['FEATURE']=stripslashes($propertyFeature->hotel_feature_full_desc);
						$propertyFeatureDescriptionsArray['FEATURE']=jomres_makeTooltip($propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$propertyFeature->image,"","property_feature",array());
						$featureList[]=$propertyFeatureDescriptionsArray;
						}
					}
				}
			if (count($featureList) > 0)
				$property['HFEATURES']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
			else
				$property['HFEATURES']	=	"";

			$rtRows=array();
			$roomtypes=array();
			if ($mrConfig['singleRoomProperty'] != "1")
				{
				$property['HRTYPES']	=	"";
				$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."' ";
				$roomtypes= doSelectSql($query);
				if (count($roomtypes)>0)
					{
					$roomTypeArray=array();
					foreach ($roomtypes as $roomtype)
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
							$query="SELECT room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$type."'";
							$rtdeets= doSelectSql($query,2);
							//$rtRows[]=makeFeatureImages($rtdeets['image'],$rtdeets['room_class_abbv'],$rtdeets['room_class_full_desc']);
							$rtRows['ROOM_TYPE']=jomres_makeTooltip($rtdeets['room_class_abbv'],$rtdeets['room_class_abbv'],$rtdeets['room_class_full_desc'],$rtdeets['image'],"","room_type",array());
							$roomtypes[]=$rtRows;
							}
						}
					}
				}

			//if ($mrConfig['showOnlyAvailabilityCalendar']=="0")
			//	property_header($property_uid);

			if ($mrConfig['showSlideshowInline']=="1" && ($jrConfig['slideshowLocation'] == 1 || $jrConfig['slideshowLocation'] == 3 ))
				{
				$componentArgs=array();
				$MiniComponents->triggerEvent('01060',array('property_uid'=>$property_uid )); // New location for slideshow images
				}

			$property['LIVE_SITE']=$jomresConfig_live_site;
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
			$property['TITLE_MOREINFO']				=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,false,false);
			$property['TITLE_AVAILABILITYCALENDAR']	=jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY',_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY,false,false);
			$property['TITLE_ROOMSLIST']			=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,false,false);
			$property['TITLE_SLIDESHOW']			=jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,false,false);
			$property['TITLE_MAP']					=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,false,false);
			$property['TITLE_TARIFF']				=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE',_JOMRES_COM_MR_LISTTARIFF_TITLE,false,false);

			$property['COM_A_BASICTEMPLATE_SHOWADDRESS']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS);
			$property['COM_A_BASICTEMPLATE_SHOWDETAILS']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS,$editable=true,$isLink=true);
			$property['COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE,FALSE);
			$property['COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE']=jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE',_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE,FALSE);

		    //$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=500,height=500,directories=no,location=no';
			//$link =$jomresConfig_live_site."/index2.php?option=com_jomres&task=showTariffs&popup=1&property_uid=$property_uid";
			//$link="<a href=\"javascript:void window.open('".$link."', 'win2', '".$status."');\" title=\"\">".jr_gettext('_JOMRES_FRONT_TARIFFS',_JOMRES_FRONT_TARIFFS)."</a>";
			//Template link arrays for buttons
			$tariffslink		=	array();
			$slideshowlink		=	array();
			$gallerylink		=	array();
			$mappinglink		=	array();
			$bookinglink		=	array();
			$roomslistlink		=	array();
			
			$output_now="&op=1";
			
			if ($mrConfig['showTariffsLink']=="1")
				{
				$link				=	array();
				$pagelink =	jomresURL(JOMRES_SITEPAGE_URL."&task=showTariffs&property_uid=$property_uid".$output_now);
				$link['TARIFFSLINK']=	jomres_makeTooltip('_JOMRES_FRONT_TARIFFS','','','<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_FRONT_TARIFFS',_JOMRES_FRONT_TARIFFS,$editable=false,$isLink=false).'</a>',"","ajaxpage",array('url'=>JOMRES_SITEPAGE_URL_NOHTML."&task=showTariffs&popup=1&no_html=1&property_uid=$property_uid".$output_now));
						
				$tariffslink[]		= 	$link;
				}
			if ($mrConfig['showSlideshowLink']=="1")
				{
				$link				=	array();
				$pagelink =	jomresURL(JOMRES_SITEPAGE_URL."&task=slideshow&popup=1&property_uid=$property_uid".$output_now);
				// Uncomment the following line to make the slideshow appear in a tooltip .
				//$link['SLIDESHOWLINK']=	jomres_makeTooltip('_JOMRES_FRONT_SLIDESHOW','','','<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,$editable=false,$isLink=false).'</a>',"","ajaxpage",array('url'=>JOMRES_SITEPAGE_URL_NOHTML."&task=slideshow&popup=1&no_html=1&property_uid=$property_uid".$output_now));
				$link['SLIDESHOWLINK']=	'<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,$editable=false,$isLink=false).'</a>';
				
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
					"'<a href=\"$1\" target=\"_blank\">$3</a>$4'",
					$mrConfig['galleryLink']
					);
				
				//$pagelink =	$mrConfig['galleryLink'];
				//$link['GALLERYLINK']=	jomres_makeTooltip('_JOMRES_FRONT_GALLERYLINK','','','<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_FRONT_GALLERYLINK',_JOMRES_FRONT_GALLERYLINK,$editable=false,$isLink=false).'</a>',"","ajaxpage",array('url'=>$mrConfig['galleryLink']));
				//$link['GALLERYLINK']=.$mrConfig['galleryLink'].'">'.jr_gettext('_JOMRES_FRONT_GALLERYLINK',_JOMRES_FRONT_GALLERYLINK,$editable=false,$isLink=false).'</a>';
				$gallerylink[]		= 	$link;
				}
			if (!empty($mappinglink))
				{
				$link				=	array();
				if(filter_var($mappinglink, FILTER_VALIDATE_URL) === TRUE)
					{
					//$link['MAPPINGLINK']=makePopupLink($mappinglink,jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,$editable=true,$isLink=true),FALSE );
					$pagelink =	jomresURL($mappinglink);
					$link['MAPPINGLINK']=	jomres_makeTooltip('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','','','<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,$editable=false,$isLink=false).'</a>',"","ajaxpage",array('url'=>$mappinglink));
					$mappinglink[]		= 	$link;
					}
				}

			$bookinglink = array();

			if ($mrConfig['visitorscanbookonline']=='1')
				{
				$link				=	array();
				$url=JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=$property_uid";
				if ( (($mrConfig['fixedArrivalDateYesNo']=='1'|| $mrConfig['fixedPeriodBookings']=='1')) && !isset($_COOKIE['jomsearch_availability']) ) // We'll add an invalid arrival date if the fixed arrival date setting is set to Yes. This way we can force the booking engine to see the arrival date is wrong and it'll rebuild the available rooms list, which it doesn't if the date is correct when coming from the Book a room link.
					$url.="&amp;arrivalDate=2009-01-01";
					
					
				//if ( $jrConfig['useSSLinBookingform'] == "1" )
				//	$link['BOOKINGLINK'] = str_replace("http://","https://",$property['BOOKINGLINK']);
				if ( $jrConfig['useSSLinBookingform'] == "1" )
					$url=jomresURL($url,1);
				else
					$url=jomresURL($url);
					
				$link['BOOKINGLINK']="<a href=\"".$url."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,$editable=true,$isLink=true)."</a>";
				if ($mrConfig['singleRoomProperty'] ==  '1')
					$link['BOOKINGLINK']="<a href=\"".$url."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,$editable=true,$isLink=true)."</a>";

				$bookinglink[]		= 	$link;
				}
			else
				{
				$link['BOOKINGLINK']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=$property_uid&amp;arrivalDate=2009-01-01")."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,$editable=true,$isLink=true)."</a>";
				$bookinglink[]		= 	$link;
				}

			if ( $mrConfig['showRoomsListingLink']=="1")
				{
				$link				=	array();
				//$link['ROOMSLISTLINK']=makePopupLink(JOMRES_SITEPAGE_URL."&task=showRoomsListing&popup=1&property_uid=$property_uid",jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,$editable=true,$isLink=true));
				$pagelink =	jomresURL(JOMRES_SITEPAGE_URL."&task=showRoomsListing&popup=1&property_uid=$property_uid".$output_now);
				$link['ROOMSLISTLINK']=	jomres_makeTooltip('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','','','<a href="'.$pagelink.'">'.jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,$editable=false,$isLink=false).'</a>',"","ajaxpage",array('url'=>JOMRES_SITEPAGE_URL_NOHTML."&task=showRoomsListing&popup=1&no_html=1&property_uid=$property_uid".$output_now));
				$roomslistlink[]	= 	$link;
				}

			$property['CONTACTUS']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=$property_uid")."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,$editable=true,$isLink=true)."</a>";
			$property['POSTCODE']=$property_postcode;
			$property['TELEPHONE']=$property_tel;
			$property['FAX']=$property_fax;

			$property['STREET']=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET'.$property_uid,$property_street );
			$property['TOWN']=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN'.$property_uid,$property_town );
			$property['REGION']=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION'.$property_uid,$property_region);
			$property['COUNTRY']=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY'.$property_uid,$countryname);

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

			$property_deets[]=$property;
			//if ($mrConfig['showOnlyAvailabilityCalendar']=="0")
			//	{
				$tmpl = new patTemplate();
				$tmpl->addRows( 'property_deets', $property_deets );
				$tmpl->addRows( 'featurelist', $featureList);
				$tmpl->addRows( 'roomtypes', $roomtypes);
				$tmpl->addRows( 'bookinglink', $bookinglink);
				$tmpl->addRows( 'slideshowlink', $slideshowlink);
				$tmpl->addRows( 'tariffslink', $tariffslink);
				$tmpl->addRows( 'gallerylink', $gallerylink);
				$tmpl->addRows( 'roomslistlink', $roomslistlink);
				$tmpl->addRows( 'mappinglink', $mappinklink);
				$mcOutput=$MiniComponents->getAllEventPointsData('00015');
				if (count($mcOutput)>0)
					{
					foreach ($mcOutput as $key=>$val)
						{
						$tmpl->addRows( 'customOutput_'.$key, array($val) );
						}
					}
				$componentArgs=array('tmpl'=>$tmpl);
				if ($mrConfig['singleRoomProperty'] == "0" && $MiniComponents->eventFileExistsCheck('00224'))
					{
					$MiniComponents->triggerEvent('00224',$componentArgs); //
					}
				elseif ($MiniComponents->eventFileExistsCheck('00226'))
					{
					$MiniComponents->triggerEvent('00226',$componentArgs); //
					}
				else
					{
					
					if ($jrConfig['composite_property_details']!="1")
						{
						$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
						$tmpl->readTemplatesFromInput( 'property_details.html');
						$tmpl->displayParsedTemplate();
						}
					else
						{
						$this->retVals['property_deets']=$property_deets;
						$this->retVals['featurelist']=$featureList;
						$this->retVals['roomtypes']=$roomtypes;
						$this->retVals['bookinglink']=$bookinglink;
						$this->retVals['slideshowlink']=$slideshowlink;
						$this->retVals['tariffslink']=$tariffslink;
						$this->retVals['gallerylink']=$gallerylink;
						$this->retVals['roomslistlink']=$roomslistlink;
						$this->retVals['mappinklink']=$mappinklink;
						$this->retVals['property_deets']=$property_deets;
						if (count($mcOutput)>0)
							{
							foreach ($mcOutput as $key=>$val)
								{
								$this->retVals['customOutput_'.$key]= array($val);
								}
							}
						}
					}

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
			//	}

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

			if ($jrConfig['dumpTemplate']=="1" && isset($tmpl) && $jrConfig['composite_property_details']!="1")
				$tmpl->dump();
			}
		}

	function touch_template_language()
		{
		$output=array();
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