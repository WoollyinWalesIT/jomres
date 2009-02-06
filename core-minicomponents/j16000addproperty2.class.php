<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000addproperty2
	{
	function j16000addproperty2()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		global $jomresConfig_live_site,$thisJRUser,$jrConfig;

		$property_region				= jomresGetParam( $_POST, 'region', "" );
		$property_country				= jomresGetParam( $_POST, 'country', "" );
		$crates							= jomresGetParam( $_POST, 'crates', array() );
		$userid							= jomresGetParam( $_POST, 'userid', 0 );
		$crate=$crates[0];
		$propertyFeatures="";

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
			$query = "SELECT	hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid FROM #__jomres_hotel_features	WHERE property_uid LIKE '0' ORDER BY hotel_feature_abbv ";
			$propertyFeaturesList=doSelectSql($query);
			foreach($propertyFeaturesList as $propertyFeature)
				{
				$r=array();
				$r['PID']=$propertyFeature->hotel_features_uid;
				if (in_array($propertyFeature->hotel_features_uid,$propertyFeaturesArray) )
					$r['ischecked']="checked";
				$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$retString=TRUE);
				$globalPfeatures[]=$r;
				}
			}
		else
			{
			$listTxt="";
			$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc FROM #__jomres_hotel_features WHERE property_uid LIKE '$propertyUid' ORDER BY hotel_feature_abbv ";
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
		$query="SELECT filelocation FROM #__jomres_property_images WHERE propertyid LIKE '$propertyUid'";
		$propertyImageList =doSelectSql($query);
		if (count($propertyImageList)>0)
			{
			foreach ($propertyImageList as $imageLocation)
				{
				$propertyImageLocation='<img src="'.$jomresConfig_live_site.'/'.$imageLocation->filelocation.'">';
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
		$output['MOSCONFIGLIVESITE']	=$jomresConfig_live_site;
		$output['ITEMID']				=$Itemid;
		$output['CRATE']=$crate;
		$output['USERID']=$userid;

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS',_JOMRES_COM_MR_VRCT_TAB_PROPERTYS);

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/".$indexphp."?option=com_jomres";
		$jrtb .= $jrtbar->customToolbarItem('Save',$link,$text="Save",$submitOnClick=true,$submitTask="saveregisterprop",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',$indexphp."?option=com_jomres",_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

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