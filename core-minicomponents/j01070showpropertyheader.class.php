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
 * Show the property header
 #
* @package Jomres
#
 */
class j01070showpropertyheader
	{
	/**
	#
	 * Constructor: Constructs and displays header details through the property header patTemplate file. Optionally, if a property header override file has been installed (allows different headers for SRPs and multirooms) then it will show that instead
	#
	 */
	function j01070showpropertyheader($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJomresPropertyDetails;
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$output=array();
		$pageoutput = array();

		$property_uid=(int)$componentArgs['property_uid'];
		jr_import('jomres_cache');
		$cache = new jomres_cache("property_header",$property_uid,false);
		$cacheContent = $cache->readCache();
		if ($cacheContent)
			echo $cacheContent;
		else
			{
			if (is_null($property_uid))
				$property_uid		= intval(jomresGetParam( $_REQUEST, 'property_uid', 0 ));
			if ($property_uid>0)
				{
				$stars=$thisJomresPropertyDetails['stars'];
				$starslink="<img src=\"".get_showtime('live_site')."/jomres/images/blank.png\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\" alt=\"blank\" />";
				if ($stars!="0")
					{
					$starslink="";
				  	for ($i=1;$i<=$stars;$i++)
			    		{
						$starslink.="<img src=\"".get_showtime('live_site')."/jomres/images/star.png\" border=\"0\" alt=\"star\" />";
						}
					$starslink.="";
					}
				$output['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);

				$output['MOSCONFIGLIVESITE']=get_showtime('live_site');

				$sizes=array('thwidth'=>$jrConfig['thumbnail_width'],'thheight'=>$jrConfig['thumbnail_width']);
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid."_property_".$property_uid.".jpg"))
					$sizes=getImagesSize(JOMRES_IMAGELOCATION_ABSPATH.$property_uid."_property_".$property_uid.".jpg");

				$output['TOOLTIP_PROPERTY_IMAGE']=jomres_makeTooltip("property_image","",$output['IMAGE'],$output['IMAGE'],"","imageonly",$type_arguments=array("width"=>$sizes['thwidth'],"height"=>$sizes['thheight'],"border"=>0));
				
				$propertyname= stripslashes($thisJomresPropertyDetails['property_name']);
				$propertyList =$thisJomresPropertyDetails['obj'];
				
				foreach ($propertyList as $pproperty)
					{
					$propertyFeaturesArray=explode(",",($pproperty->property_features));
					$output['COUNTRY']=getSimpleCountry($pproperty->property_country);
					$output['TOWN']=stripslashes($pproperty->property_town);
					}
					
				if (count($propertyFeaturesArray)>0)
					{
					$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
					$propertyFeaturesList= doSelectSql($query);
					foreach($propertyFeaturesList as $propertyFeature)
						{
						if (in_array(($propertyFeature->hotel_features_uid),$propertyFeaturesArray ))
							{
							//$propertyFeatureDescriptionsArray['FEATURE']=stripslashes($propertyFeature->hotel_feature_full_desc);
							$feature_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_ABBV'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_abbv),false,false);
							$feature_desc = jr_gettext('_JOMRES_CUSTOMTEXT_FEATURES_DESC'.(int)$propertyFeature->hotel_features_uid,		stripslashes($propertyFeature->hotel_feature_full_desc),false,false);
							$propertyFeatureDescriptionsArray['FEATURE']=jomres_makeTooltip($feature_abbv,$feature_abbv,$feature_desc,$propertyFeature->image,"","property_feature",array());
							$featureList[]=$propertyFeatureDescriptionsArray;
							}
						}
					}
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
							$output['HRTYPES']=jr_gettext('_JOMRES_FRONT_ROOMTYPES',_JOMRES_FRONT_ROOMTYPES);
							foreach ($roomTypeArray as $type)
								{
								$query="SELECT room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$type."'";
								$rtdeets= doSelectSql($query,2);
								$roomtype_abbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$type,		stripslashes($rtdeets['room_class_abbv']),false,false);
								$roomtype_desc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$type,		stripslashes($rtdeets['room_class_full_desc']),false,false);
								$rtRows['ROOM_TYPE']=jomres_makeTooltip($roomtype_abbv,$roomtype_abbv,$roomtype_desc,$rtdeets['image'],"","room_type",array());
								$roomtypes[]=$rtRows;
								}
							}
						}
					}
				if (strlen($thisJomresPropertyDetails['metatitle'])>0)
					jomres_cmsspecific_setmetadata("title",stripslashes($thisJomresPropertyDetails['metatitle']));
				else
					jomres_cmsspecific_setmetadata("title",stripslashes($thisJomresPropertyDetails['property_name']));

				jomres_cmsspecific_setmetadata('description',stripslashes($thisJomresPropertyDetails['metadescription']));
				jomres_cmsspecific_setmetadata('keywords',stripslashes($thisJomresPropertyDetails['property_town']).", ".stripslashes($thisJomresPropertyDetails['property_region']).", ".getSimpleCountry(stripslashes($thisJomresPropertyDetails['property_country'])));

				$output['STARS']=$starslink;
				$output['PROPERTY_NAME'] = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME'.(int)$property_uid,stripslashes($propertyname));
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();

				$mcOutput=$MiniComponents->getAllEventPointsData('01070');
				if (count($mcOutput)>0)
					{
					foreach ($mcOutput as $key=>$val)
						{
						$tmpl->addRows( 'customOutput_'.$key, array($val) );
						}
					}
				$componentArgs=array('tmpl'=>$tmpl);
				
				if ($mrConfig['singleRoomProperty'] == "0" && $MiniComponents->eventFileExistsCheck('00220') )
					{
					$templatePath=$MiniComponents->triggerEvent('00220',$componentArgs); //
					}
				elseif ($MiniComponents->eventFileExistsCheck('00222') )
					{
					$templatePath=$MiniComponents->triggerEvent('00222',$componentArgs); //
					}
				else
					{
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->addRows( 'featurelist', $featureList);
					$tmpl->addRows( 'roomtypes', $roomtypes);
					$tmpl->readTemplatesFromInput( 'property_header.html');
					$cachableContent = $tmpl->getParsedTemplate();
					$cache->setCache($cachableContent);
					unset($cache);
					echo $cachableContent;
					}

				if ($jrConfig['dumpTemplate']=="1")
					$tmpl->dump();
				}
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