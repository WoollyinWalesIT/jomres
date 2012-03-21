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

class basic_property_details
	{
	// Store the single instance of Database
	private static $configInstance;
	private static $internal_debugging;
	private static $property_data;

	public function __construct() 
		{
		self::$internal_debugging = false;
		self::$property_data = array();
		$this->multi_query_result = array();
		$this->untranslated_property_names = array();
		$this->get_all_room_types();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new basic_property_details();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function __set($setting,$value)
		{
		if (self::$internal_debugging)
			echo "Setting ".$setting." to ".$value." <br>";
		$this->$setting = $value;
		return true;
		}
		
	public function __get($setting)
		{
		if (self::$internal_debugging)
			echo "Getting ".$setting." which is ".$this->$setting."<br>";
		return $this->$setting;
		}
		
	public function get_property_name($property_uid=0,$editable = true)
		{
		if ($property_uid ==0)
			$property_uid = $this->property_uid;
			
		if (!array_key_exists($property_uid,$this->property_names))
			{
			$original_property_uid = get_showtime('property_uid');
			set_showtime('property_uid',$property_uid);
			$query="SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
			$property_name=doSelectSql($query,1);
			$this->untranslated_property_names[$property_uid]=$property_name;
			$customTextObj =jomres_getSingleton('custom_text');
			$customTextObj->get_custom_text_for_property($property_uid);
			$property_name=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$property_name,false,false);
			$property_name = str_replace("&#39;", "'", $property_name);
			set_showtime('property_uid',$original_property_uid);
			}
		else
			$property_name = $this->property_names[$property_uid];
		
		return $property_name;
		}
	
	public function get_property_name_multi($property_uids=array(),$database_obj = false)
		{
		$performance_monitor =jomres_getSingleton('jomres_performance_monitor');
		$performance_monitor->set_point("pre-property name multi");
		
		$customTextObj =jomres_getSingleton('custom_text');
		
		if (!isset($this->property_names))
			$this->property_names = array();

		$original_property_uid = get_showtime('property_uid');
		if (count($property_uids) ==0)
			return false;
		
		// We've been passed a database object's search results, so we'll find the propertys_uids, dump them into an array and generate $gor from that.
		if ($database_obj)
			{
			$tmp_arr = array();
			foreach ($property_uids as $id)
				{
				$tmp_arr[] = $id->propertys_uid;
				}
			$gor= genericOr($tmp_arr,'propertys_uid');
			}
		else
			$gor= genericOr($property_uids,'propertys_uid');

		$query="SELECT property_name,propertys_uid FROM #__jomres_propertys WHERE ".$gor;
		$property_names=doSelectSql($query);
		if (!get_showtime('heavyweight_system'))
			{
			foreach ($property_names as $p)
				{
				// We need to set showtime here otherwise the jr_gettext function won't know which property's info we're looking for
				set_showtime('property_uid',$p->propertys_uid);
				$this->untranslated_property_names[$p->propertys_uid]=$p->property_name;
				$property_name=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$p->property_name,false,false);
				$property_name = str_replace("&#39;", "'", $property_name);
				$this->property_names[$p->propertys_uid] = $property_name;
				}
			}
		else
			{
			foreach ($property_names as $p)
				{
				$this->property_names[$p->propertys_uid] = $p->property_name;
				$this->untranslated_property_names[$p->propertys_uid]=$p->property_name;
				}
			}
		set_showtime('property_uid',$original_property_uid);
		$performance_monitor->set_point("post-property name multi");
		return $property_name;
		}
	
	
	public function gather_data($property_uid=0)
		{
		if ($this->property_uid === 0)
			{
			echo "Fatal Error, property uid not set, exiting";
			exit;
			}
		if ($property_uid == $this->property_uid) // No need to re-gather the info
			return true;
		$this->property_uid = (int)$property_uid;
		$customTextObj =jomres_getSingleton('custom_text');
		$customTextObj->get_custom_text_for_property($this->property_uid);
		
		if (array_key_exists($this->property_uid,$this->multi_query_result))
			{
				$this->property_name			=$this->multi_query_result[$this->property_uid]['property_name'];
				$this->property_street			=$this->multi_query_result[$this->property_uid]['property_street'];
				$this->property_town			=$this->multi_query_result[$this->property_uid]['property_town'];
				$this->property_postcode		=$this->multi_query_result[$this->property_uid]['property_postcode'];
				$this->property_region			=$this->multi_query_result[$this->property_uid]['property_region'];
				$this->property_country			=$this->multi_query_result[$this->property_uid]['property_country'];
				$this->property_country_code	=$this->multi_query_result[$this->property_uid]['property_country_code'];

				$this->property_tel				=$this->multi_query_result[$this->property_uid]['property_tel'];
				$this->property_fax				=$this->multi_query_result[$this->property_uid]['property_fax'];
				$this->property_email			=$this->multi_query_result[$this->property_uid]['property_email'];
				$this->published				=$this->multi_query_result[$this->property_uid]['published'];
				$this->ptype_id					=$this->multi_query_result[$this->property_uid]['ptype_id'];
				$this->stars					=$this->multi_query_result[$this->property_uid]['stars'];
				$this->lat						=$this->multi_query_result[$this->property_uid]['lat'];
				$this->long						=$this->multi_query_result[$this->property_uid]['long'];
				$this->metatitle				=$this->multi_query_result[$this->property_uid]['metatitle'];
				$this->metadescription			=$this->multi_query_result[$this->property_uid]['metadescription'];
				$this->property_features		=$this->multi_query_result[$this->property_uid]['property_features'];
				$this->property_mappinglink		=$this->multi_query_result[$this->property_uid]['property_mappinglink'];
				$this->real_estate_property_price = $this->multi_query_result[$this->property_uid]['real_estate_property_price'];

				$this->property_description		=$this->multi_query_result[$this->property_uid]['property_description'];
				$this->property_checkin_times	=$this->multi_query_result[$this->property_uid]['property_checkin_times'];
				$this->property_area_activities	=$this->multi_query_result[$this->property_uid]['property_area_activities'];
				$this->property_driving_directions=$this->multi_query_result[$this->property_uid]['property_driving_directions'];
				$this->property_airports		=$this->multi_query_result[$this->property_uid]['property_airports'];
				$this->property_othertransport	=$this->multi_query_result[$this->property_uid]['property_othertransport'];
				$this->property_policies_disclaimers=$this->multi_query_result[$this->property_uid]['property_policies_disclaimers'];
				$this->apikey					=$this->multi_query_result[$this->property_uid]['apikey'];
			}
		else
			{
			$no_html=get_showtime('no_html');
			$popup=get_showtime('popup');
			$editable = true;
			if ($no_html == "1" || $popup == "1")
				$editable = false;
			$query="SELECT * FROM #__jomres_propertys WHERE propertys_uid = '".$this->property_uid."' LIMIT 1";
			$propertyData=doSelectSql($query);

			
			foreach ($propertyData as $data)
				{
				//$countryname=getSimpleCountry($data->property_country);
				

				$countryname=getSimpleCountry($data->property_country);
				
				$this->untranslated_property_names[$this->property_uid]=$data->property_name;
				
				$this->property_name			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$data->property_name,$editable,false);
				$this->property_street			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET',$data->property_street,$editable,false);
				$this->property_town			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN',$data->property_town,$editable,false);
				$this->property_postcode		=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE',$data->property_postcode,$editable,false);
				$this->property_region			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$data->property_region,$editable,false);
				$this->property_country			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY',$countryname,$editable,false);
				$this->property_country_code	= $data->property_country;

				$this->property_tel				=$data->property_tel;
				$this->property_fax				=$data->property_fax;
				$this->property_email			=$data->property_email;
				$this->published				=(int)$data->published;
				$this->ptype_id					=(int)$data->ptype_id;
				$this->stars					=(int)$data->stars;
				$this->lat						=$data->lat;
				$this->long						=$data->long;
				$this->metatitle				=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE',$data->metatitle,false,false);
				$this->metadescription			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION',$data->metadescription,false,false);
				$this->property_features		=$data->property_features;
				$this->property_mappinglink		=$data->property_mappinglink;
				$this->real_estate_property_price = $data->property_key;

				$this->property_description		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim(stripslashes($data->property_description)),$editable,false));
				$this->property_checkin_times	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',trim(stripslashes($data->property_checkin_times)),$editable,false));
				$this->property_area_activities	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',trim(stripslashes($data->property_area_activities)),$editable,false));
				$this->property_driving_directions=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',trim(stripslashes($data->property_driving_directions)),$editable,false));
				$this->property_airports		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',trim(stripslashes($data->property_airports)),$editable,false));
				$this->property_othertransport	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',trim(stripslashes($data->property_othertransport)),$editable,false));
				$this->property_policies_disclaimers=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($data->property_policies_disclaimers)),$editable,false));
				$this->apikey					=$data->apikey;
				}
			}

		// $this->classAbbvs = array();
		// $query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes";
		// $roomsClassList =doSelectSql($query);
		// foreach ($roomsClassList as $roomClass)
			// {
			// $this->classAbbvs[(int)$roomClass->room_classes_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_abbv),false,false);
			// $this->classAbbvs[(int)$roomClass->room_classes_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_desc),false,false);
			// $this->classAbbvs[(int)$roomClass->room_classes_uid]['image'] = $roomClass->image;
			// }
		
		if (!isset($this->this_property_room_classes))
			{
			$this->this_property_room_classes = array();
			$query = "SELECT roomtype_id FROM #__jomres_roomtypes_propertytypes_xref WHERE propertytype_id =".(int)$this->ptype_id;
			$roomtypes =doSelectSql($query);
			foreach ($roomtypes as $roomClass)
				{
				$this->this_property_room_classes[(int)$roomClass->roomtype_id] = $this->classAbbvs[$roomClass->roomtype_id];
				}
			}
		
		$bang = explode (",",$this->property_features);
		$propertyFeaturesArray = array();
		foreach ($bang as $b)
			{
			if ((int)$b != 0)
				$propertyFeaturesArray[]=(int)$b;
			}

		if (!isset($this->features))
			{
			$this->features = array();
			if (count($propertyFeaturesArray)>0)
				{
				$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
				$propertyFeaturesList= doSelectSql($query);
				foreach($propertyFeaturesList as $propertyFeature)
					{
					if (in_array(($propertyFeature->hotel_features_uid),$propertyFeaturesArray ))
						{
						//$propertyFeatureDescriptionsArray['FEATURE']=stripslashes($propertyFeature->hotel_feature_full_desc);
						$this->features[(int)$propertyFeature->hotel_features_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_abbv),false,false);
						$this->features[(int)$propertyFeature->hotel_features_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_full_desc),false,false);
						$this->features[(int)$propertyFeature->hotel_features_uid]['image'] =$propertyFeature->image;
						}
					}
				}
			}

		// This array is only used by the showRoomDetails task. It's pointless constantly running this query when it's not used anywhere else.
		if (get_showtime('task')=="showRoomDetails")
			{
			if (!isset($this->room_features))
				$this->room_features = array();
			if (!isset($this->room_features[$this->property_uid]))
				{
				$query="SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE property_uid = '".$this->property_uid."'";
				$roomFeatures =doSelectSql($query);
				if (count($roomFeatures)>0)
					{
					foreach($roomFeatures as $f)
						{
						$this->room_features[$this->property_uid][(int)$f->room_features_uid]['desc'] =jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int)$f->room_features_uid,stripslashes($f->feature_description));
						}
					}
				}
			}

		$mrConfig=getPropertySpecificSettings($this->property_uid);
		$taxrates = taxrates_getalltaxrates();
		$cfgcode = $mrConfig['accommodation_tax_code'];
		$rate = $taxrates[$cfgcode];
		$this->accommodation_tax_rate=(float)$rate['rate'];
		}
		
	function get_gross_accommodation_price($nett_amount,$property_uid = 0)
		{
		$nett_amount = (float)$nett_amount;
		
		if ($property_uid != $this->property_uid )
			{
			$mrConfig=getPropertySpecificSettings($property_uid);
			$taxrates = taxrates_getalltaxrates();
			$cfgcode = $mrConfig['accommodation_tax_code'];
			$rate = $taxrates[$cfgcode];
			$accommodation_tax_rate=(float)$rate['rate'];
			}
		else
			{
			$accommodation_tax_rate=$this->accommodation_tax_rate;
			}
		
		$tax = ( $nett_amount / 100 )* $accommodation_tax_rate;
		$gross = $nett_amount + $tax;
		return $gross;
		}
		
		

	public function gather_data_multi( $property_uids=array() )
		{
		$no_html=get_showtime('no_html');
		$popup=get_showtime('popup');
		$editable = true;
		if ($no_html == "1" || $popup == "1")
			$editable = false;
		
		// First we need to extract those uids that are not already in the $this->multi_query_result var, this (may) reduce the number of properties we need to query
		$temp_array = array();
		foreach ($property_uids as $id)
			{
			if ( !array_key_exists($id,$this->multi_query_result) )
				$temp_array[] = $id;
			}
		$property_uids = $temp_array;
		unset ($temp_array);
		
		$taxrates = taxrates_getalltaxrates();
		
		if (count($property_uids) > 0)
			{
			$gor=genericOr($property_uids,'propertys_uid');
			
			$query="SELECT * FROM #__jomres_propertys WHERE ".$gor;
			
			$propertyData=doSelectSql($query);

			$customTextObj =jomres_getSingleton('custom_text');
			foreach ($propertyData as $data)
				{
				set_showtime('property_uid',$data->propertys_uid);
				$countryname=getSimpleCountry($data->property_country);
				$customTextObj->get_custom_text_for_property($data->propertys_uid);
				
				$this->untranslated_property_names[$data->propertys_uid]=$data->property_name;
				
				$this->multi_query_result[$data->propertys_uid]['propertys_uid'] 					= $data->propertys_uid;
				$this->multi_query_result[$data->propertys_uid]['property_name'] 					= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$data->property_name,$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_street']					= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET',$data->property_street,$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_town'] 					= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN',$data->property_town,$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_postcode']				= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE',$data->property_postcode,$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_region'] 					= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$data->property_region,$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_country'] 				= jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY',getSimpleCountry($data->property_country),$editable,false);
				$this->multi_query_result[$data->propertys_uid]['property_country_code'] 			= $data->property_country;

				$this->multi_query_result[$data->propertys_uid]['property_tel'] 					=$data->property_tel;
				$this->multi_query_result[$data->propertys_uid]['property_fax'] 					=$data->property_fax;
				$this->multi_query_result[$data->propertys_uid]['property_email']					=$data->property_email;
				$this->multi_query_result[$data->propertys_uid]['published'] 						=(int)$data->published;
				$this->multi_query_result[$data->propertys_uid]['ptype_id'] 						=(int)$data->ptype_id;
				$this->multi_query_result[$data->propertys_uid]['stars'] 							=(int)$data->stars;
				$this->multi_query_result[$data->propertys_uid]['lat']								=$data->lat;
				$this->multi_query_result[$data->propertys_uid]['long']								=$data->long;
				$this->multi_query_result[$data->propertys_uid]['metatitle']						=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE',$data->metatitle,false,false);
				$this->multi_query_result[$data->propertys_uid]['metadescription']					=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION',$data->metadescription,false,false);
				$this->multi_query_result[$data->propertys_uid]['property_features']				=$data->property_features;
				$this->multi_query_result[$data->propertys_uid]['property_mappinglink']				=$data->property_mappinglink;
				$this->multi_query_result[$data->propertys_uid]['real_estate_property_price']		=$data->property_key;

				$this->multi_query_result[$data->propertys_uid]['property_description']				=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', $data->property_description,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_checkin_times']			=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',$data->property_checkin_times,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_area_activities']			=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',$data->property_area_activities,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_driving_directions']		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',$data->property_driving_directions,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_airports']				=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',$data->property_airports,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_othertransport']			=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',$data->property_othertransport,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['property_policies_disclaimers']	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',$data->property_policies_disclaimers,$editable,false));
				$this->multi_query_result[$data->propertys_uid]['apikey']							=$data->apikey;
				}

			$temp_rooms = array();
			$gor=genericOr($property_uids,'propertys_uid');
			$query = "SELECT `room_uid`,`room_classes_uid`,`propertys_uid` FROM #__jomres_rooms WHERE ".$gor;
			$rooms =doSelectSql($query);
			foreach ($rooms as $room)
				{
				$this->multi_query_result[$room->propertys_uid]['room_types'][$room->room_classes_uid]['abbv']=$this->all_room_types[$room->room_classes_uid]['room_class_abbv'];
				$this->multi_query_result[$room->propertys_uid]['room_types'][$room->room_classes_uid]['desc']=$this->all_room_types[$room->room_classes_uid]['room_class_full_desc'];
				$this->multi_query_result[$room->propertys_uid]['room_types'][$room->room_classes_uid]['image']=get_showtime('live_site').'/'.$this->all_room_types[$room->room_classes_uid]['image'];
				}
			
			$gor=genericOr($property_uids,'property_uid');
			$this->room_features = array();
			$query="SELECT room_features_uid,feature_description,property_uid FROM #__jomres_room_features WHERE ".$gor;
			$roomFeatures =doSelectSql($query);
			if (count($roomFeatures)>0)
				{
				foreach($roomFeatures as $f)
					{
					$this->multi_query_result[$f->property_uid]['room_features'][$f->room_features_uid]['desc']=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int)$f->room_features_uid,stripslashes($f->feature_description));
					}
				}

			foreach ($property_uids as $id)
				{
				$mrConfig=getPropertySpecificSettings($id);
				$cfgcode = $mrConfig['accommodation_tax_code'];
				$rate = $taxrates[$cfgcode];
				//$this->accommodation_tax_rate=(float)$rate['rate'];
				$this->multi_query_result[$id]['accommodation_tax_rate']=(float)$rate['rate'];
				}
			}
		return $this->multi_query_result;
		}


	// Experimental code that isn't yet used
	private function get_all_room_types()
		{
		$this->classAbbvs = array();
		$this->all_room_types = array();
		$room_type_ids = array();
		$query = "SELECT `room_classes_uid`,`room_class_abbv`,`room_class_full_desc`,`image`,`srp_only` FROM #__jomres_room_classes WHERE property_uid =0 ";
		$roomtypes =doSelectSql($query);
		if (count($roomtypes)>0)
			{
			foreach ( $roomtypes as $rt )
				{
				$this->all_room_types[$rt->room_classes_uid]['room_classes_uid']=$rt->room_classes_uid ;
				$this->all_room_types[$rt->room_classes_uid]['room_class_abbv']=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$rt->room_classes_uid,stripslashes($rt->room_class_abbv),false,false); ;
				$this->all_room_types[$rt->room_classes_uid]['room_class_full_desc']=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$rt->room_classes_uid,stripslashes($rt->room_class_full_desc),false,false) ;
				$this->all_room_types[$rt->room_classes_uid]['image']=$rt->image ;
				$this->all_room_types[$rt->room_classes_uid]['srp_only']=$rt->srp_only ;
				$room_type_ids[]=$rt->room_classes_uid;
				
				// To a degree, this is a duplication of effort, however we don't know if other scripts are using the $this->classAbbvs variable, so we'll reuse this code from the previous gather_data method.
				$this->classAbbvs[(int)$rt->room_classes_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$rt->room_classes_uid,stripslashes($rt->room_class_abbv),false,false);
				$this->classAbbvs[(int)$rt->room_classes_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$rt->room_classes_uid,stripslashes($rt->room_class_full_desc),false,false);
				$this->classAbbvs[(int)$rt->room_classes_uid]['image'] = $rt->image;
				}
			}

		$this->roomtypes_propertytypes_xref = array();
		$query = "SELECT roomtype_id,propertytype_id FROM #__jomres_roomtypes_propertytypes_xref";
		$roomtypes =doSelectSql($query);
		foreach ($roomtypes as $roomClass)
			{
			$this->roomtypes_propertytypes_xref[(int)$roomClass->propertytype_id] = $this->classAbbvs[$roomClass->roomtype_id];
			}
		}
/* 		
		
	private function get_all_property_features()
		{
		$this->features = array();
		$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList= doSelectSql($query);
		foreach($propertyFeaturesList as $propertyFeature)
			{
			if (in_array(($propertyFeature->hotel_features_uid),$propertyFeaturesArray ))
				{
				//$propertyFeatureDescriptionsArray['FEATURE']=stripslashes($propertyFeature->hotel_feature_full_desc);
				$this->features[(int)$propertyFeature->hotel_features_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_abbv),false,false);
				$this->features[(int)$propertyFeature->hotel_features_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_full_desc),false,false);
				$this->features[(int)$propertyFeature->hotel_features_uid]['image'] =$propertyFeature->image;
				}
			}
		} */
		
	}
?>