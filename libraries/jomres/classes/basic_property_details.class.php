<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

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
		
	public function get_property_name($property_uid=0,$editable = true)
		{
		if ($property_uid ==0)
			$property_uid = $this->property_uid;
			
		$query="SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
		$property_name=doSelectSql($query,1);
		$customTextObj =jomres_getSingleton('custom_text');
		$customTextObj->get_custom_text_for_property($property_uid);
		$property_name=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$property_name,false,false);
		$property_name = str_replace("&#39;", "'", $property_name);
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
			
			$this->property_name			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME',$data->property_name,$editable,false);
			$this->property_street			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_STREET',$data->property_street,$editable,false);
			$this->property_town			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_TOWN',$data->property_town,$editable,false);
			$this->property_postcode		=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_POSTCODE',$data->property_postcode,$editable,false);
			$this->property_region			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$data->property_region,$editable,false);
			$this->property_country			=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_COUNTRY',$countryname,$editable,false);

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

			$this->property_description		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim(stripslashes($data->property_description)),$editable,false));
			$this->property_checkin_times	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',trim(stripslashes($data->property_checkin_times)),$editable,false));
			$this->property_area_activities	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',trim(stripslashes($data->property_area_activities)),$editable,false));
			$this->property_driving_directions=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',trim(stripslashes($data->property_driving_directions)),$editable,false));
			$this->property_airports		=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',trim(stripslashes($data->property_airports)),$editable,false));
			$this->property_othertransport	=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',trim(stripslashes($data->property_othertransport)),$editable,false));
			$this->property_policies_disclaimers=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',trim(stripslashes($data->property_policies_disclaimers)),$editable,false));
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
	}
?>