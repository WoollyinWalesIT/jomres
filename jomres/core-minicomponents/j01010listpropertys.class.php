<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Lists the properties, according to property uids passed from a search function
 #
* @package Jomres
#
 */
class j01010listpropertys {
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j01010listpropertys($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$MiniComponents->triggerEvent('01008',$componentArgs); // optional
		$data_only=false;
		if (isset($_REQUEST['dataonly']))
			$data_only=true;
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');

		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$customTextObj =jomres_singleton_abstract::getInstance('custom_text');
		
		if (is_null($tmpBookingHandler->tmpsearch_data['current_property_list_layout']))
			$tmpBookingHandler->tmpsearch_data['current_property_list_layout'] = $jrConfig['property_list_layout_default'];

		$property_list_layouts = get_showtime('property_list_layouts');
		if (count($property_list_layouts) ==1)
			{
			$default_layout = array_keys($property_list_layouts);
			$tmpBookingHandler->tmpsearch_data['current_property_list_layout'] = $default_layout[0];
			}
		
		$layout_rows = array();
		$all_layouts = array();
		if ( (JOMRES_NOHTML != 1 ||  get_showtime('task') == "ajax_search_filter" ) && count($property_list_layouts) > 1)
			{
			foreach ($property_list_layouts as $key=>$layouts)
				{
				$all_layouts[] = $key;
				$r = array();
				$r['TITLE']=$layouts["title"];
				$r['LINK']=jomresURL( JOMRES_SITEPAGE_URL."&amp;task=listProperties&amp;layout=".$key);
				$layout_rows[]=$r;
				}
			}

		if (isset($_REQUEST['layout']) && in_array($_REQUEST['layout'],$all_layouts) )
			{
			$tmpBookingHandler->tmpsearch_data['current_property_list_layout'] = $_REQUEST['layout'];
			}
		$layout = $tmpBookingHandler->tmpsearch_data['current_property_list_layout'];
		
		$propertys_uids=$componentArgs['propertys_uid'];
		if (!isset($componentArgs['live_scrolling_enabled']))
			$live_scrolling_enabled = true;
		else
			$live_scrolling_enabled = (bool)$componentArgs['live_scrolling_enabled'];
		
		if ($propertys_uids=="")
			$propertys_uids=array();

		if (!@session_start())
			{
			@ini_set('session.save_handler', 'files');
			session_start();
			}
		
		// Added to prevent out of memory messages.
		// Modified for 4.5.3 as the previous loop wasn't taking missing keys into account.
		$maximumProperties=100; // Limits the maximum number of properties that can be returned in a search
		if (count($propertys_uids) >$maximumProperties)
			{
			$counter=1;
			$tmpArray=array();
			foreach ($propertys_uids as $key=>$val)
				{
				$tmpArray[]=$propertys_uids[$key];
				$counter++;
				if ($counter == $maximumProperties)
					break;
				}
			$propertys_uids=$tmpArray;
			}
		
		if ( !AJAXCALL || get_showtime('task') == "ajax_search_filter")
			{
			$propertys_uids=$MiniComponents->triggerEvent('01009',array('propertys_uids'=>$propertys_uids) ); // Pre list properties parser. Allows us to to filter property lists if required
			$tmpBookingHandler->tmpsearch_data['ajax_list_search_results'] = $propertys_uids;
			}

		if (isset($property_list_layouts[$layout]["custom_task"]))
			{
			$new_task = $property_list_layouts[$layout]["custom_task"];
			set_showtime('task',$new_task);
			echo $MiniComponents->specificEvent('06000',$new_task,array("layout_rows"=>$layout_rows,"property_uids"=>$componentArgs['propertys_uid']));
			}
		else
			{
			$shortlist_items = $tmpBookingHandler->tmpsearch_data['shortlist_items'];
			$layout_template = $property_list_layouts[$layout]["layout"];

			if (is_null($property_list_layouts[$layout]["path"]))
				$layout_path_to_template = JOMRES_TEMPLATEPATH_FRONTEND;
			else
				$layout_path_to_template = $property_list_layouts[$layout]["path"];
				
			if (is_null($layout_template))
				$layout_template = "list_properties.html";
			
			jomres_cmsspecific_addheaddata("javascript",'jomres/javascript/',"jquery.livequery.js");

			if ($jrConfig['is_single_property_installation']=="1")
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$propertys_uids[0]), "" );

			if (count($propertys_uids) >0)
				{
				$header_output = array();
				
				$header_output['ORDER_DROPDOWN'] 		= get_showtime("order_dropdown");
				$header_output['CLICKTOHIDE']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOHIDE',_JOMRES_REVIEWS_CLICKTOHIDE,false,false);
				$header_output['CLICKTOSHOW']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW',_JOMRES_REVIEWS_CLICKTOSHOW,false,false);
				$compare = array();
				if (JOMRES_NOHTML != 1 || get_showtime('task') == "ajax_search_filter")
					{
					$compare[]=array( '_JOMRES_COMPARE'		=>jr_gettext('_JOMRES_COMPARE',_JOMRES_COMPARE,false,false),'COMPARELINK'			=>'<script type="text/javascript">var compare_url = "'.jomresURL(JOMRES_SITEPAGE_URL."&task=compare").'";</script>' );
					if (get_showtime('task') != "show_shortlisted_properties")
						$shortlist[]=array( '_JOMRES_VIEWSHORTLIST'=>jr_gettext('_JOMRES_VIEWSHORTLIST',_JOMRES_VIEWSHORTLIST,false,false),'SHORTLISTLINK'=>jomresURL(JOMRES_SITEPAGE_URL."&amp;task=show_shortlisted_properties" ));
					}

				if (JOMRES_NOHTML != 1 && get_showtime('task') != "ajax_search_filter")
					{
					$output['JOMRES_SITEPAGE_URL_AJAX']="<script type=\"text/javascript\"> var live_site_ajax = '".JOMRES_SITEPAGE_URL_AJAX."'; </script>";
					jomres_cmsspecific_addheaddata("javascript",'jomres/javascript/',"list_properties.js",'',true);
					}
					
				$g=genericOr($propertys_uids,'propertys_uid');
				$query="SELECT propertys_uid,property_name,property_town,property_description,stars,property_features,ptype_id,property_key FROM #__jomres_propertys WHERE ";
				$query.=$g;
				$order = implode($propertys_uids,",");
				if ($live_scrolling_enabled)
					$limit = (int)$jrConfig['property_list_limit'];
				else
					$limit = count($propertys_uids);
				$query.=" ORDER BY FIELD(propertys_uid, $order) LIMIT ".$limit;
				$propertyDeets = @doSelectSql($query);

				if (count($propertyDeets) > 0)
					{
					$propertysToShow=array();
					foreach ($propertyDeets as $prop)
						{
						$propertysToShow[]=$prop->propertys_uid;
						}
					// Now we'll grab all of the room type/classes information for these properties. The will cut the number of queries performed by this room listing script considerably.
					// For historical reasons some tables in Jomres use propertys_uid and some use property_uid (note the 's') so g_pids is for those tables that use propertys_uid, while g_pid is for those without
					$g_pids=genericOr($propertysToShow,'propertys_uid');
					$g_pid =genericOr($propertysToShow,'property_uid');

					// Last booked
					$lastBookedArray = array();
					$query = "SELECT property_uid, max(timestamp) as ts FROM #__jomres_contracts WHERE ".$g_pid." AND `timestamp` IS NOT NULL GROUP BY property_uid ";
					$result = doSelectSql($query);
					if (count($result)>0)
						{
						foreach ($result as $r)
							{
							$date = nicetime($r->ts);
							if ($date != "")
								$lastBookedArray[$r->property_uid] = $date;
							}
						}

					// Tariffs
					// Believe this section is depreciated, however we'll leave it in-situ for now, as people may be using it. Will leave it for some months until we can be reasonably confident that people are now using the get_property_price_for_display_in_lists function instead.
					
					// Disabled for 7.2.11 on 21/2/2013
					
/* 					$pricesFromArray=array();
					$maxPeopleArray = array();
					$searchDate = date("Y/m/d");
					if (isset($_REQUEST['arrivalDate']))
						{
						$searchDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ));
						}
					$query = "SELECT property_uid, roomrateperday,maxpeople FROM #__jomres_rates WHERE ".$g_pid." AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' ";

					$tariffList = doSelectSql($query);
					if (count($tariffList) > 0)
						{
						foreach ($tariffList as $t)
							{
							if ( !isset($pricesFromArray[$t->property_uid]) )
								$pricesFromArray[$t->property_uid]=$t->roomrateperday;
							elseif ( isset($pricesFromArray[$t->property_uid]) && $pricesFromArray[$t->property_uid] > $t->roomrateperday )
								$pricesFromArray[$t->property_uid]=$t->roomrateperday;

							if (!isset($maxPeopleArray[$t->property_uid]))
								$maxPeopleArray[$t->property_uid]=$t->maxpeople;
							elseif ($maxPeopleArray[$t->property_uid] < $t->maxpeople)
								$maxPeopleArray[$t->property_uid]=$t->maxpeople;
							}
						} */

					// Room types
					$rtArray=array();
					$rt_idsArr=array();
					$query="SELECT propertys_uid,room_classes_uid FROM #__jomres_rooms WHERE ".$g_pids." ";
					$result= doSelectSql($query);
					foreach ($result as $r)
						{
						//echo $r->room_classes_uid;
						$rt_idsArr[]=$r->room_classes_uid;
						if (!is_array($rtArray[$r->propertys_uid]) )
							$rtArray[$r->propertys_uid]=array();
						if (!in_array($r->room_classes_uid,$rtArray[$r->propertys_uid]) )
						$rtArray[$r->propertys_uid][]=$r->room_classes_uid;
						}
					$rtDetailsArray=array();
					$temp=array_unique($rt_idsArr);
					$rt_idsArr=array_values($temp);

					$rt_ids =genericOr($rt_idsArr,'room_classes_uid');
					$query="SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE ".$rt_ids;
					$rtDetails=doSelectSql($query);
					foreach ($rtDetails as $rt)
						{
						$rtAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$rt->room_classes_uid, $rt->room_class_abbv,false,false );
						$rtDesc =  jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.$rt->room_classes_uid, $rt->room_class_full_desc,false,false );
						$rtDetailsArray[$rt->room_classes_uid]=array('room_class_abbv'=>$rtAbbv,'room_class_full_desc'=>$rtDesc,'image'=>$rt->image);

						}

					// Property features
					$featuresArray=array();
					$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
					$propertyFeaturesList= doSelectSql($query);
					foreach ($propertyFeaturesList as $f)
						{
						$hotel_feature_abbv=jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$f->hotel_features_uid,stripslashes($f->hotel_feature_abbv),false,false);
						$hotel_feature_full_desc=jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$f->hotel_features_uid, stripslashes($f->hotel_feature_full_desc),false,false);
						$featuresArray[$f->hotel_features_uid]=array('hotel_feature_abbv'=>$hotel_feature_abbv,'hotel_feature_full_desc'=>$hotel_feature_full_desc,'image'=>$f->image);
						}
						
					if ($jrConfig['use_reviews'] =="1")
						{
						jr_import('jomres_reviews');
						$Reviews = new jomres_reviews();
						$Reviews->getRatingsMulti($propertysToShow);
						}
					}
				}
			$templateCounter=1;

			if (!isset($_REQUEST['arrivalDate']) )
				{
				if (isset($tmpBookingHandler->tmpsearch_data['jomsearch_availability']) && $tmpBookingHandler->tmpsearch_data['jomsearch_availability'] != "")
					$arrivalDate	=$tmpBookingHandler->tmpsearch_data['jomsearch_availability'];
				else
					$arrivalDate=date("Y/m/d");
				}
			else
				$arrivalDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ),$siteCal=true);

			$date_elements  = explode("/",$arrivalDate);
			$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

			$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
			$current_property_details->get_property_name_multi($propertys_uids);
			$current_property_details->gather_data_multi($propertys_uids);

			$query="SELECT id,ptype FROM #__jomres_ptypes";
			$ptypes = doSelectSql($query);
			$property_types = array();
			foreach ($ptypes as $p)
				{
				$property_types[$p->id] =jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTYTYPE'.(int)$p->id,$p->ptype,false,false);
				}
			$class_counter=0;
			
			$featured_properties = get_showtime("featured_properties");
			if (count($featured_properties)>0) // only store the featured properties if their count is > 0. That's because featured properties are only set in non-ajax calls. If it's an ajax called, we don't want to set the featured properties to null
				$tmpBookingHandler->tmpsearch_data['featured_properties'] = $featured_properties;
			
			if (count($propertyDeets) >0)
				{
				$property_details=array();
				$MiniComponents->triggerEvent('01011',array('property_uids'=>$propertys_uids) ); // Discount finding script uses this trigger. We'll send it an array of property uids to reduce the number of queries it performs.
				foreach ($propertyDeets as $property)
					{
					jr_import('jomres_cache');
					$cache = new jomres_cache("propertylist",$property->propertys_uid);

					$cacheContent = $cache->readCache();
					if ($cacheContent)
						{
						$property_deets = $cacheContent;
						}
					else
						{
						$property_deets=array();
						set_showtime('property_uid',$property->propertys_uid);
						
						$current_property_details->gather_data($property->propertys_uid); // This data should already have been collected by the multi query select that's already been run. We're doing this here to find the property type set we can set showtime property_type and import the property type specific language strings where available.
						set_showtime('property_type',$current_property_details->property_type);

						$customTextObj->get_custom_text_for_property($property->propertys_uid);

						$property_deets=$MiniComponents->triggerEvent('00042',array('property_uid'=>$property->propertys_uid) );
						$mrConfig=getPropertySpecificSettings($property->propertys_uid);

						$dobooking_task="dobooking";
						if ($mrConfig['registeredUsersOnlyCanBook'] == "1" && $thisJRUser->id == 0)
							$dobooking_task = "contactowner";

						$featureList=array();
						$ptown=stripslashes($property->property_town);
						$stars=$property->stars;
						$propertyDesc=strip_tags(jomres_decode(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION',$property->property_description,false,false )));
						
						if (in_array($property->propertys_uid))
							{
							if (!isset($jrConfig['featured_listings_emphasis']))
								$jrConfig['featured_listings_emphasis'] = "";
							$property_deets['FEATURED_LISTINGS_CLASS']=$jrConfig['featured_listings_emphasis'];
							}
						
						if ($jrConfig['use_reviews'] =="1")
							{
							$Reviews->property_uid = $property->propertys_uid;
							$itemRating = $Reviews->showRating($property->propertys_uid);
							$property_deets['AVERAGE_RATING']=number_format($itemRating['avg_rating'], 1, '.', '');
							$property_deets['NUMBER_OF_REVIEWS']=$itemRating['counter'];

							$property_deets['_JOMRES_REVIEWS_AVERAGE_RATING']		=jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING',_JOMRES_REVIEWS_AVERAGE_RATING,false,false);
							$property_deets['_JOMRES_REVIEWS_TOTAL_VOTES']			=jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES',_JOMRES_REVIEWS_TOTAL_VOTES,false,false);
							$property_deets['_JOMRES_REVIEWS']						=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,false,false);
							$property_deets['_JOMRES_REVIEWS_CLICKTOSHOW']			=jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW',_JOMRES_REVIEWS_CLICKTOSHOW,false,false);
							$property_deets['COLON'] 								= " : ";
							$property_deets['HYPHEN'] 								= " - ";
							//$property_deets['REVIEWS']								= $MiniComponents->specificEvent('06000',"show_property_reviews");
							}
						else
							{
							$property_deets['AVERAGE_RATING']='';
							$property_deets['NUMBER_OF_REVIEWS']='';
							$property_deets['_JOMRES_REVIEWS_AVERAGE_RATING']		='';
							$property_deets['_JOMRES_REVIEWS_TOTAL_VOTES']			='';
							$property_deets['_JOMRES_REVIEWS']						='';
							$property_deets['_JOMRES_REVIEWS_CLICKTOSHOW']			='';
							$property_deets['COLON'] 								='';
							$property_deets['HYPHEN'] 								='';
							$property_deets['REVIEWS']								='';
							}
						
						//$property_deets['AVAILABILITY_CALENDAR'] = $MiniComponents->specificEvent('06000','ui_availability_calendar',array('property_uid'=>$property->propertys_uid,'return_calendar'=>"1",'noshowlegend'=>1) );
						
						$no_image_image = get_showtime('live_site')."/jomres/images/noimage.gif";
						$property_image=get_showtime('live_site')."/jomres/images/noimage.gif";
						if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."uploadedimages".JRDS.$property->propertys_uid."_property_".$property->propertys_uid.".jpg") )
							$property_image=get_showtime('live_site')."/jomres/uploadedimages/".$property->propertys_uid."_property_".$property->propertys_uid.".jpg";
						$starslink="<img src=\"".get_showtime('live_site')."/jomres/images/blank.png\" alt=\"star\" border=\"0\" height=\"1\" hspace=\"10\" vspace=\"1\" />";
						if ($stars!="0")
							{
							$starslink="";
								for ($i=1;$i<=$stars;$i++)
								{
								$starslink.="<img src=\"".get_showtime('live_site')."/jomres/images/star.png\" alt=\"star\" border=\"0\" />";
								}
							$starslink.="";
							}

						$propertyFeaturesArray=explode(",",($property->property_features));

						$rtRows="";
						$rArr=$rtArray[$property->propertys_uid];
						if ($rArr[0] != 0)
							{
							foreach ($rArr as $rtd)
								{
								//$rtRows.=makeFeatureImages($rtDetailsArray[$rtd]['image'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$retString=true)."&nbsp;";
								$rtRows.=jomres_makeTooltip($rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$rtDetailsArray[$rtd]['image'],"","room_type",array());

								}
							}

						$property_deets['ROOMTYPES']=$rtRows;

						if (count($propertyFeaturesArray)>0)
							{
							$featureList="";
							$counter=0;
							foreach ($featuresArray as $k=>$v)
								{
								if (in_array($k,$propertyFeaturesArray ) )
									{
									if ( ($counter/10 )==0)
										$br="<br />";
									//$featureList.=makeFeatureImages($featuresArray[$k]['image'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$retString=true)."&nbsp;";
									$featureList.=jomres_makeTooltip($featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$featuresArray[$k]['image'],"","property_feature",array());
									$counter++;
									}
								}
							$property_deets['FEATURELIST']=$featureList;
							}

						// We need a way of offering a plugin the opportunity to take over the lowest price output generation. First we'll ask all possible plugins with a 07010 trigger if they want to recalculate this property's prices
						$price_output = get_property_price_for_display_in_lists($property->propertys_uid);
						$property_deets['PRICE_PRE_TEXT']	=	$price_output['PRE_TEXT'];
						$property_deets['PRICE_PRICE']		=	$price_output['PRICE'];
						$property_deets['PRICE_POST_TEXT']	=	$price_output['POST_TEXT'];

						if (array_key_exists($property->propertys_uid,$lastBookedArray))
							{
							$property_deets['LASTBOOKED'] = jr_gettext('_JOMRES_DATEPERIOD_LATESTBOOKING',_JOMRES_DATEPERIOD_LATESTBOOKING)." ".$lastBookedArray[$property->propertys_uid];
							$property_deets['LASTBOOKING_STYLE'] = 'ui-state-highlight ui-corner-all';
							}
						$propertyAddressArray=getPropertyAddressForPrint($property->propertys_uid);
						$propertyContactArray=$propertyAddressArray[1];
						$propertyAddyArray=$propertyAddressArray[2];

						$property_deets['COUNTER']=$templateCounter;
						$templateCounter++;
						//$property_deets['PROP_TYPE']=$propertyAddressArray[3];
						if ($mrConfig['is_real_estate_listing']==0)
							{
							if ($mrConfig['visitorscanbookonline'] == "1")
								{
								$url=jomresURL(JOMRES_SITEPAGE_URL."&task=".$dobooking_task."&amp;selectedProperty=".$property->propertys_uid);
								$property_deets['LINK']=$url;
								if ($mrConfig['singleRoomProperty'] =="1")
									$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,false,false) ;
								else
									$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false) ;

								if ($dobooking_task != "dobooking")
									$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,false,false);
								}
							else
								{
								$property_deets['LINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=".$property->propertys_uid);
								$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,false,false);
								}
							}
						else
							{
							$property_deets['LINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=".$property->propertys_uid);
							$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT',_JOMRES_FRONT_MR_MENU_CONTACT_AGENT,false,false);
							}

						$property_deets['PROP_NAME'] =$current_property_details->get_property_name($property->propertys_uid);
						$property_deets['LAT'] =$current_property_details->multi_query_result[$property->propertys_uid]['lat'];
						$property_deets['LONG'] =$current_property_details->multi_query_result[$property->propertys_uid]['long'];
						//var_dump($property_deets['PROP_NAME']);exit;
						$property_deets['PROP_STREET']=stripslashes($propertyContactArray[1]);
						$property_deets['PROP_TOWN']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&town='.html_entity_decode($propertyContactArray[2])).'">'.html_entity_decode($propertyContactArray[2]).'</a>';
						$property_deets['PROP_POSTCODE']=stripslashes($propertyContactArray[3]);
						$property_deets['PROP_REGION']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&region='.html_entity_decode($propertyContactArray[4])).'">'.html_entity_decode($propertyContactArray[4]).'</a>';
						$property_deets['PROP_COUNTRY']='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&send=Search&calledByModule=mod_jomsearch_m0&country='.html_entity_decode($propertyContactArray[5])).'">'.html_entity_decode(getSimpleCountry($propertyContactArray[5])).'</a>';

						$property_deets['LIVESITE']=get_showtime('live_site');
						$property_deets['UID']=$property->propertys_uid;
						$property_deets['MOREINFORMATION']= jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,true) ;
						$property_deets['MOREINFORMATIONLINK']=jomresURL( JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property->propertys_uid) ;
						$property_deets['MOREINFORMATIONLINK_AJAX']=JOMRES_SITEPAGE_URL_AJAX."&task=viewproperty&property_uid=".$property->propertys_uid;
						$property_deets['MOREINFORMATIONLINK_SEFSAFE']=JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property->propertys_uid;
						$property_deets['PROPERTYNAME']= $property_deets['PROP_NAME'] ;

						$property_deets['_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES']=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES);
						$property_deets['_JOMRES_FRONT_ROOMTYPES']=jr_gettext('_JOMRES_FRONT_ROOMTYPES',_JOMRES_FRONT_ROOMTYPES);
						$property_deets['JS_SAFE_PROPERTYNAME']= preg_replace('/[^A-Za-z0-9_-]+/', "", $property_deets['PROP_NAME']);
						$property_deets['PROPERTYTOWN']= html_entity_decode($ptown);
						$property_deets['PROPERTYREGION']= html_entity_decode(stripslashes($propertyContactArray[4]));
						$property_deets['PROPERTYCOUNTRY']= html_entity_decode(stripslashes(getSimpleCountry($propertyContactArray[5])));
						
						$property_deets['TELEPHONE_NUMBER']= html_entity_decode($current_property_details->property_tel);
						
						if (strlen($propertyDesc) > (int)$jrConfig['propertyListDescriptionLimit'])
							$property_deets['PROPERTYDESC']= jr_substr($propertyDesc,0,$jrConfig['propertyListDescriptionLimit'])."...";
						else
							$property_deets['PROPERTYDESC']= $propertyDesc;
						
						$property_deets['IMAGE']=$property_image;
						
						$property_deets['IMAGETHUMB']=getThumbnailForImage($property_deets['IMAGE']);
						if (!$property_deets['IMAGETHUMB'])
							$property_deets['IMAGETHUMB'] = $no_image_image;
						$property_deets['IMAGEMEDIUM']=getThumbnailForImage($property_deets['IMAGE'],true);
						if (!$property_deets['IMAGEMEDIUM'])
							$property_deets['IMAGEMEDIUM'] = $no_image_image;
						$property_deets['IMAGELARGE']=$property_image;
						//$property_deets['IMAGE_POPUP']=jomres_make_image_popup($property_deets['PROPERTYNAME'],$property_image,"",array(),$property_deets['IMAGETHUMB'],""); // disabled, we're not using it and it's taking about a second to run for each thumbnail that shows in the image list.
						$property_deets['_JOMRES_QUICK_INFO']=jr_gettext('_JOMRES_QUICK_INFO',_JOMRES_QUICK_INFO,false,false);
						$property_deets['REMOTE_URL']=$mrConfig['galleryLink'];
						$property_deets['RANDOM_IDENTIFIER'] = generateJomresRandomString(10);
						$property_deets['_JOMRES_COMPARE'] =jr_gettext('_JOMRES_COMPARE',_JOMRES_COMPARE,false,false);

						if (!in_array($property->propertys_uid,$shortlist_items))
							$property_deets['SHORTLIST'] =jr_gettext('_JOMRES_ADDTOSHORTLIST',_JOMRES_ADDTOSHORTLIST,false,false);
						else
							$property_deets['SHORTLIST'] =jr_gettext('_JOMRES_REMOVEFROMSHORTLIST',_JOMRES_REMOVEFROMSHORTLIST,false,false);
						
						add_gmaps_source(); // Needs to be included, regardless of the settings below because the module popup will not work without it.
						$showmaps = false;
						$layout=$tmpBookingHandler->tmpsearch_data['current_property_list_layout'];
						if (get_showtime('layout_showmaps') != null || $layout == "listwithmaps")
							{
							if (get_showtime('layout_mapwidth') == null)
								{
								$mapwidth = "119";
								$mapheight = "95";
								}
							else
								{
								$mapwidth = get_showtime('layout_mapwidth');
								$mapheight = get_showtime('layout_mapheight');
								}
							$args=array('property_uid'=>$property->propertys_uid,"width"=>$mapwidth,"height"=>$mapheight,"disable_ui"=>true);
							$MiniComponents->specificEvent('01050','x_geocoder',$args);
							$property_deets['MAP'] = $MiniComponents->miniComponentData['01050']['x_geocoder'];
							}
						
						$sizes=array('thwidth'=>$jrConfig['thumbnail_width'],'thheight'=>$jrConfig['thumbnail_width']);
						if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property->propertys_uid."_property_".$property->propertys_uid.".jpg"))
							$sizes=getImagesSize(JOMRES_IMAGELOCATION_ABSPATH.$property->propertys_uid."_property_".$property->propertys_uid.".jpg");

						$property_deets['PROPERTY_TYPE'] = $property_types[(int)$property->ptype_id];
						$property_deets['PROPERTY_TYPE_SEARCH_URL'] = jomresURL( JOMRES_SITEPAGE_URL."&amp;task=search&amp;ptype=".$property->ptype_id);
						
						if (!isset($jrConfig['make_gifs_from_slideshows']))
							$jrConfig['make_gifs_from_slideshows']="1";
						
						$property_deets['AGENT_LINK']=make_agent_link($property->propertys_uid);
						
						$property_deets['_JOMRES_AGENT']=jr_gettext("_JOMRES_AGENT",_JOMRES_AGENT);

						if ($jrConfig['make_gifs_from_slideshows'] =="1")
							{
							$result = gif_builder($property->propertys_uid);
							if ($result['SMALL'] != "")
								{
								$property_deets['IMAGETHUMB']=$result['SMALL'];
								$property_deets['IMAGEMEDIUM']=$result['MEDIUM'];
								}
							}
						
						
						$property_deets['TOOLTIP_IMAGE']=jomres_makeTooltip("property_image".$property->propertys_uid,"",$property_deets['IMAGE'],$property_deets['IMAGE'],"","imageonly",$type_arguments=array("imagethumb"=>$property_deets['IMAGETHUMB'],"width"=>$sizes['thwidth'],"height"=>$sizes['thheight'],"border"=>0));
						if ($output_lowest)
							$property_deets['LOWESTPRICE']=$price;
						else
							$property_deets['LOWESTPRICE']='';

						$property_deets['STARS']=$starslink;
						//$property_deets['TEMPLATEPATH']=$templatepath;
						
						if ($class_counter%2)
							$property_deets['ROWCLASS']="row-even";
						else
							$property_deets['ROWCLASS']="row-odd";
						
						$class_counter++;

						$MiniComponents->triggerEvent('01011',array('property_uid'=>$property->propertys_uid) ); // Optional
						$mcOutput=$MiniComponents->getAllEventPointsData('01011');
						if (count($mcOutput)>0)
							{
							foreach ($mcOutput as $key=>$val)
								{
								if (!is_null($val))
									{
									$result=array_merge($property_deets,$val);
									$property_deets=$result;
									}
								}
							}
						$cache->setCache($property_deets);
						unset($cache);
						}
					$property_details[]=$property_deets;
					$jomres_language_definitions =jomres_singleton_abstract::getInstance('jomres_language_definitions');
					$jomres_language_definitions->reset_lang_and_property_type();
					}

				if (!$data_only)
					{
					if (!AJAXCALL || get_showtime('task') == "ajax_search_filter")
						{
						$header_pageoutput[] = $header_output;
						$tmpl = new patTemplate();
						$tmpl->addRows( 'header_pageoutput', $header_pageoutput );
						$tmpl->addRows( 'layout_rows', $layout_rows );
						$tmpl->addRows( 'compare', $compare );
						$tmpl->addRows( 'shortlist', $shortlist );
						$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
						$tmpl->readTemplatesFromInput( "list_properties_header.html" );
						$output['HEADER'] = $tmpl->getParsedTemplate();
						}
					
					$pageoutput[] = $output;
					$tmpl = new patTemplate();
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$tmpl->addRows( 'property_details', $property_details );
					$tmpl->setRoot( $layout_path_to_template );
					$tmpl->readTemplatesFromInput( $layout_template );
					$tmpl->displayParsedTemplate();

					if ($jrConfig['dumpTemplate']=="1")
						$tmpl->dump();
					}
				else
					{
					include (JOMRES_TEMPLATEPATH_FRONTEND.JRDS.'main.php');
					$jomres_remote_xml = new SimpleXMLElement($xmlstr);
					foreach ($property_details as $property)
						{
						$xml_property = $jomres_remote_xml->addChild('property', $property['UID']);
						$xml_property->addChild('property_name', $property['PROP_NAME']);
						$xml_property->addChild('booking_link', $property['BOOKTHIS_TEXT']);
						$xml_property->addChild('prop_street', $property['PROP_STREET']);
						$xml_property->addChild('prop_town', $property['PROPERTYTOWN']);
						$xml_property->addChild('prop_postcode', $property['PROP_POSTCODE']);
						$xml_property->addChild('prop_region', $property['PROPERTYREGION']);
						$xml_property->addChild('prop_country', $property['PROPERTYCOUNTRY']);
						$xml_property->addChild('moreinformation', $property['MOREINFORMATION']);
						$xml_property->addChild('image', $property['IMAGE']);
						$xml_property->addChild('property_type', $property['PROPERTY_TYPE'] );
						$xml_property->addChild('description', $property['PROPERTYDESC'] );
						$xml_property->addChild('stars', $property['STARS'] );

						$xml_property->addChild('livesite', urlencode  (get_showtime('live_site') ));
						$xml_property->addChild('lowestprice', urlencode  ($property['LOWESTPRICE']) );
						$xml_property->addChild('moreinformationlink',urlencode  ( $property['MOREINFORMATIONLINK_SEFSAFE']));
						}

					$xmlString = $jomres_remote_xml->asXML(); // returns the SimpleXML object as a serialized XML string
					echo $xmlString;
					exit;
					}
				}
				//else
				//	echo jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS,$editable=true,$islink=false) ;		
			}

		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION) ;
		$output[]		=jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS);
		$output[]		=jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS);
		$output[]		=jr_gettext('_PN_NEXT',_PN_NEXT);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_SECOND',_JOMRES_DATEPERIOD_SECOND);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_MINUTE',_JOMRES_DATEPERIOD_MINUTE);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_DAY',_JOMRES_DATEPERIOD_DAY);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_HOUR',_JOMRES_DATEPERIOD_HOUR);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_WEEK',_JOMRES_DATEPERIOD_WEEK);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_MONTH',_JOMRES_DATEPERIOD_MONTH);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_YEAR',_JOMRES_DATEPERIOD_YEAR);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_DECADE',_JOMRES_DATEPERIOD_DECADE);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_S',_JOMRES_DATEPERIOD_S);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_AGO',_JOMRES_DATEPERIOD_AGO);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_FROMNOW',_JOMRES_DATEPERIOD_FROMNOW);
		$output[]		=jr_gettext('_JOMRES_DATEPERIOD_LATESTBOOKING',_JOMRES_DATEPERIOD_LATESTBOOKING);
		$output[]		=jr_gettext('_JOMRES_QUICK_INFO',_JOMRES_QUICK_INFO);
		$output[]		=jr_gettext('_JOMRES_COMPARE',_JOMRES_COMPARE);
		
		$output[]		=jr_gettext('_JOMRES_ADDTOSHORTLIST',_JOMRES_ADDTOSHORTLIST);
		$output[]		=jr_gettext('_JOMRES_REMOVEFROMSHORTLIST',_JOMRES_REMOVEFROMSHORTLIST);
		$output[]		=jr_gettext('_JOMRES_VIEWSHORTLIST',_JOMRES_VIEWSHORTLIST);
		
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