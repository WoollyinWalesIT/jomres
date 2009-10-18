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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**
#
 *
 #
* @package Jomres
#
 */
class j02310regprop2 {
	/**
	#
	 * Constructor:
	#
	 */
	function j02310regprop2()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if (!subscribers_checkUserHasSubscriptionsToCreateNewProperty() && !$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1" )
			jomresRedirect( JOMRES_SITEPAGE_URL."&task=list_subscription_packages","");

		if ($jrConfig['selfRegistrationAllowed']=="0" && !$thisJRUser->superPropertyManager)
			return;

		$output=array();

		$property_region				= jomresGetParam( $_POST, 'region', "" );
		$property_country				= jomresGetParam( $_POST, 'country', "" );
		$realestate						= (int)jomresGetParam( $_POST, 'realestate', 0 );

		$propertyFeatures="";

		$query = "SELECT room_classes_uid,room_class_abbv FROM #__jomres_room_classes WHERE property_uid = 0 AND `srp_only` = '1' ORDER BY room_class_abbv ";
		$roomClasses=doSelectSql($query);
		$dropDownList ="<select class=\"inputbox\" name=\"roomClass\">";
		$dropDownList .= "<option value=\"\"></option>";
		foreach ($roomClasses as $roomClass)
			{
			$selected="";
			$room_classes_uid=$roomClass->room_classes_uid;
			$room_class_abbv=$roomClass->room_class_abbv;
			$dropDownList .= "<option ".$selected." value=\"".$room_classes_uid."\">".$room_class_abbv."</option>";
			}
		$dropDownList.="</select>";

		$output['ISTHISANMRP_DROPDOWN']='<select id="mySelect" name="mrpsrp">
			<option value="MRP" selected>MRP</option>
			<option value="showIfClicked">SRP</option>
			</select>
		<div id="showIfClicked">
			'.$dropDownList.'
		</div>';
		
		$output['ISTHISANMRP']=jr_gettext('_JOMRES_COM_ISTHISANMRP',_JOMRES_COM_ISTHISANMRP);
		$output['ISTHISANMRP_DESC']=jr_gettext('_JOMRES_COM_ISTHISANMRP_DESC',_JOMRES_COM_ISTHISANMRP_DESC);
		
		

		$starsDropDownList="<select class=\"inputbox\" name=\"stars\">";
		for ($i=0, $n=7; $i <= $n; $i++)
			{
			$starsDropDownList .= "<option value=\"".$i."\">".$i."</option>";
			}
		$starsDropDownList.="</select>";

		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid);
		$propertyFeaturesArray=explode(",",$propertyFeatures);

		$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid FROM #__jomres_hotel_features	WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList=doSelectSql($query);
		if (count($propertyFeaturesList)>0)
			{
			foreach($propertyFeaturesList as $propertyFeature)
				{
				$r=array();
				$r['PID']=$propertyFeature->hotel_features_uid;
				if (in_array($propertyFeature->hotel_features_uid,$propertyFeaturesArray) )
					$r['ischecked']="checked";
				//$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$retString=TRUE);
				$r['FEATURE']=jomres_makeTooltip($propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$propertyFeature->image,"","property_feature",array());
				$globalPfeatures[]=$r;
				}
			}
		if (isset($listTxt))
			$output['FEATURES']=$listTxt;

		$output['STARSDROPDOWN']=$starsDropDownList;

		$output['PROPERTY_NAME']					="";
		$output['PROPERTY_STREET']					="";
		$output['PROPERTY_TOWN']					="";
		$output['PROPERTY_POSTCODE']				="";
		$output['PROPERTY_TEL']						="";
		$output['PROPERTY_FAX']						="";
		$output['PROPERTY_EMAIL']					="";
		$output['PROPERTY_MAPPINGLINK']				="";
		$output['PROPERTY_DESCRIPTION']				="";
		$output['PROPERTY_CHECKIN_TIMES']			="";
		$output['PROPERTY_AREA_ACTIVITIES']			="";
		$output['PROPERTY_DRIVING_DIRECTIONS']		="";
		$output['PROPERTY_AIRPORTS']				="";
		$output['PROPERTY_OTHERTRANSPORT']			="";
		$output['PROPERTY_POLICIES_DISCLAIMERS']	="";
		$output['PROPERTY_REGION']					=$property_region;
		$output['PROPERTY_COUNTRY']					=$property_country;

		$output['INPUTBOXERRORBORDER']				=$mrConfig['inputBoxErrorBorder'];
		$output['INPUTBOXERRORBACKGROUND']			=$mrConfig['inputBoxErrorBackground'];
		$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2);
		$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2_BUTTON']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2,false,false);
		$output['JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1']				=jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1);

		$output['HNAME']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
		$output['HSTREET']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output['HTOWN']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output['HPOSTCODE']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output['HTELEPHONE']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output['HFAX']					=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output['HEMAIL']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL);
		$output['HSTARS']				=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS);
		$output['HFEATURES']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
		$output['HMAPPINGLINK']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
		$output['HPROPDESCRIPTION']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION);
		$output['HCHECKINTIMES']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES);
		$output['HAREAACTIVITIES']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES);
		$output['HDRIVINGDIRECTIONS']	=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS);
		$output['HAIRPORTS']			=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS);
		$output['HOTHERTRANSPORT']		=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT);
		$output['HPOLICIESDISCLAIMERS']	=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);
		$output['MOSCONFIGLIVESITE']	=get_showtime('live_site');

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);

		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		if ($realestate ==1)
			$tmpl->readTemplatesFromInput( 'register_property2_realestate.html');
		else
			$tmpl->readTemplatesFromInput( 'register_property2.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		if ($jrConfig['useGlobalPFeatures']=="1")
			$tmpl->addRows( 'globalPfeatures',$globalPfeatures);
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]			= jr_gettext('_JOMRES_COM_ISTHISANMRP',_JOMRES_COM_ISTHISANMRP);
		$output[]			= jr_gettext('_JOMRES_COM_ISTHISANMRP_DESC',_JOMRES_COM_ISTHISANMRP_DESC);
		$output[]			= jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2);
		$output[]			= jr_gettext('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1',_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);
		$output[]			= jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);

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