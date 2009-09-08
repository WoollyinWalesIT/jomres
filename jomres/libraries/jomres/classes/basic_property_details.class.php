<?php

class basic_property_details
	{
	// Store the single instance of Database
	private static $configInstance;
	private static $internal_debugging;

	public function __construct() 
		{
		self::$internal_debugging = false;
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
		
		$no_html=get_showtime('no_html');
		$popup=get_showtime('popup');
		$editable = true;
		if ($no_html == "1" || $popup == "1")
			$editable = false;
		$query="SELECT * FROM #__jomres_propertys WHERE propertys_uid = '".$this->property_uid."' LIMIT 1";
		$propertyData=doSelectSql($query);

		$customTextObj =jomres_getSingleton('custom_text');
		foreach ($propertyData as $data)
			{
			$countryname=getSimpleCountry($data->property_country);
			$customTextObj->get_custom_text_for_property($this->property_uid);

			$countryname=getSimpleCountry($data->property_country);
			$this->property_name			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$data->property_name,false,$editable);
			$this->property_street			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET',$data->property_street,false,$editable);
			$this->property_town			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN',$data->property_town,false,$editable);
			$this->property_postcode		=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE',$data->property_postcode,false,$editable);
			$this->property_region			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$data->property_region,false,$editable);
			$this->property_country			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY',$countryname,false,$editable);

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

			$this->property_description		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim(stripslashes($data->property_description)),false,$editable));
			$this->property_checkin_times	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',trim(stripslashes($data->property_checkin_times)),false,$editable));
			$this->property_area_activities	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',trim(stripslashes($data->property_area_activities)),false,$editable));
			$this->property_driving_directions=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',trim(stripslashes($data->property_driving_directions)),false,$editable));
			$this->property_airports		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',trim(stripslashes($data->property_airports)),false,$editable));
			$this->property_othertransport	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',trim(stripslashes($data->property_othertransport)),false,$editable));
			$this->property_policies_disclaimers=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($data->property_policies_disclaimers)),false,$editable));
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