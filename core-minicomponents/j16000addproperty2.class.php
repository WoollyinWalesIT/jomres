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

class j16000addproperty2
	{
	function j16000addproperty2()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$property_region				= jomresGetParam( $_POST, 'region', "" );
		$property_country				= jomresGetParam( $_POST, 'country', "" );
		$crates							= jomresGetParam( $_POST, 'crates', array() );
		$userid							= jomresGetParam( $_POST, 'userid', 0 );
		$crate=$crates[0];
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

		$output['ISTHISANMRP_DROPDOWN']='<select id="mySelect">
			<option value="2" selected>MRP</option>
			<option value="showIfClicked">SRP</option>
			</select>
		<div id="showIfClicked">
			'.$dropDownList.'
		</div>';
		
		$output['ISTHISANMRP']=jr_gettext('_JOMRES_COM_ISTHISANMRP',_JOMRES_COM_ISTHISANMRP);
		$output['ISTHISANMRP_DESC']=jr_gettext('_JOMRES_COM_ISTHISANMRP_DESC',_JOMRES_COM_ISTHISANMRP_DESC);
		
		$starsDropDownList="<select class=\"inputbox\" name=\"stars\">";
		for ($i=0, $n=5; $i <= $n; $i++)
			{
			$starsDropDownList .= "<option value=\"".$i."\">".$i."</option>";
			}
		$starsDropDownList.="</select>";

		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid);
		$propertyFeaturesArray=explode(",",$propertyFeatures);

		if ($jrConfig['useGlobalPFeatures']=="1")
			{
			$query = "SELECT	hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid FROM #__jomres_hotel_features	WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList=doSelectSql($query);
			foreach($propertyFeaturesList as $propertyFeature)
				{
				$r=array();
				$r['PID']=$propertyFeature->hotel_features_uid;
				if (in_array($propertyFeature->hotel_features_uid,$propertyFeaturesArray) )
					$r['ischecked']="checked";
					
				$feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_abbv),false,false);
				$feature_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_full_desc),false,false);
				$r['FEATURE']=jomres_makeTooltip($feature_abbv,$feature_abbv,$feature_desc,get_showtime('live_site')."/".$propertyFeature->image,"","property_feature",array());

				//$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$retString=TRUE);
				$globalPfeatures[]=$r;
				}
			}
		else
			{
			$listTxt="";
			$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc FROM #__jomres_hotel_features WHERE property_uid = '$propertyUid' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList =doSelectSql($query);
			foreach($propertyFeaturesList as $propertyFeature)
				{
				$checked="";
				if (in_array(($propertyFeature->hotel_features_uid),$propertyFeaturesArray ))
			 			$checked="checked";
				$listTxt.="<input class=\"jomres_input\" type=\"checkbox\" name=\"features_list[]\" value=\"".($propertyFeature->hotel_features_uid)."\" ".$checked." >".($propertyFeature->hotel_feature_abbv)."<br>";
				}
			}
		if (isset($listTxt))
			$output['FEATURES']=$listTxt;
		$propertyImageLocation="";
		$query="SELECT filelocation FROM #__jomres_property_images WHERE propertyid = '$propertyUid'";
		$propertyImageList =doSelectSql($query);
		if (count($propertyImageList)>0)
			{
			foreach ($propertyImageList as $imageLocation)
				{
				$propertyImageLocation='<img src="'.get_showtime('live_site').'/'.$imageLocation->filelocation.'">';
				}
			}

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
		$output['CRATE']=$crate;
		$output['USERID']=$userid;

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('Save',$link,$text="Save",$submitOnClick=true,$submitTask="saveregisterprop",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'register_property2.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		if ($jrConfig['useGlobalPFeatures']=="1")
			$tmpl->addRows( 'globalPfeatures',$globalPfeatures);
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}