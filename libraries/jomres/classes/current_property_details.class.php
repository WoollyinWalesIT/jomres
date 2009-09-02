<?php
// My little joke, "showtime" was my favourite server on Delta Force 2 when I used to play it back in the late nineties.

class current_property_details
	{
	// Store the single instance of Database
	private static $configInstance;
	private static $internal_debugging;
	
	
	public function __construct() 
		{
		$this->property_uid = (int)get_showtime('property_uid');
		if ($this->property_uid === 0)
			{
			echo "Fatal Error, property uid not set, exiting";
			exit;
			}
		self::$internal_debugging = false;
		self::gather_data();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new current_property_details();
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
		
	public function gather_data()
		{
		$query="SELECT * FROM #__jomres_propertys WHERE propertys_uid = '".$this->property_uid."' LIMIT 1";
		$propertyData=doSelectSql($query);

		foreach ($propertyData as $data)
			{
			
			$this->property_name			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME'.(int)$this->property_uid,$data->property_name);
			$this->property_street			=$data->property_street;
			$this->property_town			=$data->property_town;
			$this->property_postcode		=$data->property_postcode;
			$this->property_region			=$data->property_region;
			$this->property_country			=$data->property_country;
			$this->property_tel				=$data->property_tel;
			$this->property_fax				=$data->property_fax;
			$this->property_email			=$data->property_email;
			$this->published				=(int)$data->published;
			$this->ptype_id					=(int)$data->ptype_id;
			$this->stars					=(int)$data->stars;
			$this->lat						=$data->lat;
			$this->long						=$data->long;
			$this->metatitle				=$data->metatitle;
			$this->metadescription			=$data->metadescription;
			$this->property_features		=$data->property_features;
			$this->property_mappinglink		=$data->property_mappinglink;

			$this->property_description		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim(stripslashes($data->property_description))));
			$this->property_checkin_times	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',trim(stripslashes($data->property_checkin_times))));
			$this->property_area_activities	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',trim(stripslashes($data->property_area_activities))));
			$this->property_driving_directions=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',trim(stripslashes($data->property_driving_directions))));
			$this->property_airports		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',trim(stripslashes($data->property_airports))));
			$this->property_othertransport	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',trim(stripslashes($data->property_othertransport))));
			$this->property_policies_disclaimers=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($data->property_policies_disclaimers))));
			$this->apikey					=$data->apikey;
			}

		$this->classAbbvs = array();
		$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes";
		$roomsClassList =doSelectSql($query);
		foreach ($roomsClassList as $roomClass)
			{
			$this->classAbbvs[(int)$roomClass->room_classes_uid]['abbv'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_abbv),false,false);
			$this->classAbbvs[(int)$roomClass->room_classes_uid]['desc'] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$roomClass->room_classes_uid,stripslashes($roomClass->room_class_desc),false,false);
			$this->classAbbvs[(int)$roomClass->room_classes_uid]['image'] = $roomClass->image;
			}
			
		$bang = explode (",",$this->property_features);
		$propertyFeaturesArray = array();
		foreach ($bang as $b)
			{
			if ((int)$b != 0)
				$propertyFeaturesArray[]=(int)$b;
			}

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
			
		$this->room_features = array();
		$query="SELECT room_features_uid,feature_description FROM #__jomres_room_features WHERE property_uid = '".$this->property_uid."'";
		$roomFeatures =doSelectSql($query);
		if (count($roomFeatures)>0)
			{
			foreach($roomFeatures as $f)
				{
				$this->room_features[(int)$f->room_features_uid]['desc'] =jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int)$f->room_features_uid,stripslashes($f->feature_description));
				}
			}
		}
	}
?>