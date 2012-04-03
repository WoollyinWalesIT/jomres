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
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$mrConfig=getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
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
				$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data($property_uid);
				
				$stars=$current_property_details->stars;
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
				$output['IMAGETHUMB']=getThumbnailForImage($output['IMAGE'],true);
				
				$output['MOSCONFIGLIVESITE']=get_showtime('live_site');

				$sizes=array('thwidth'=>$jrConfig['thumbnail_width'],'thheight'=>$jrConfig['thumbnail_width']);
				if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.$property_uid."_property_".$property_uid.".jpg"))
					$sizes=getImagesSize(JOMRES_IMAGELOCATION_ABSPATH.$property_uid."_property_".$property_uid.".jpg");

				$output['TOOLTIP_PROPERTY_IMAGE']=jomres_makeTooltip("property_image","",$output['IMAGE'],$output['IMAGE'],"","imageonly",$type_arguments=array("imagethumb"=>$output['IMAGETHUMB'],"width"=>$sizes['thwidth'],"height"=>$sizes['thheight'],"border"=>0));
				
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				$rtRows=array();
				$roomtypes=array();
				if ($mrConfig['singleRoomProperty'] != "1")
					{
					$RoomClassAbbvs = array();
					$query = "SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes";
					$roomsClassList =doSelectSql($query);
					foreach ($roomsClassList as $roomClass)
						{
						$RoomClassAbbvs[(int)$roomClass->room_classes_uid] = array( 
							'abbv'=>
							jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$roomClass->room_classes_uid,jomres_decode($roomClass->room_class_abbv),false,false),
							'desc'=>
							jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$roomClass->room_classes_uid,jomres_decode($roomClass->room_class_full_desc),false,false),
							'image'=>
							$roomClass->image
							);
						}
					$property['HRTYPES']	=	"";
					$query="SELECT room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."' ";
					$rt= doSelectSql($query);
					if (count($rt)>0)
						{
						$roomTypeArray=array();
						foreach ($rt as $roomtype)
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
								$rtRows=array();
								$roomtype_abbv = $RoomClassAbbvs[$type]['abbv'];
								$roomtype_desc = $RoomClassAbbvs[$type]['desc'];
								$rtRows['ROOM_TYPE']=jomres_makeTooltip($roomtype_abbv,$roomtype_abbv,$roomtype_desc,$RoomClassAbbvs[$type]['image'],"","room_type",array());
								$roomtypes[]=$rtRows;
								}
							}
						}
					}
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				$features=$current_property_details->features;
				if (count($features) > 0)
					{
					foreach ($features as $f)
						{
						$propertyFeatureDescriptionsArray['FEATURE']=jomres_makeTooltip($f['abbv'],$f['abbv'],$f['desc'],$f['image'],"","property_feature",array());
						$featureList[]=$propertyFeatureDescriptionsArray;
						}
					}
				///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					
				if (strlen($current_property_details->metatitle)>0)
					jomres_cmsspecific_setmetadata("title",jomres_decode($current_property_details->metatitle));
				else
					{
					$property_name = $current_property_details->get_property_name($property_uid);
					$property_name = str_replace("<x>","",$property_name);
					jomres_cmsspecific_setmetadata("title",jomres_decode($property_name));
					}

				jomres_cmsspecific_setmetadata('description',stripslashes($current_property_details->metadescription));
				jomres_cmsspecific_setmetadata('keywords',$current_property_details->property_town.", ".$current_property_details->property_region.", ".$current_property_details->property_country);

				$output['STARS']=$starslink;
				$output['PROPERTY_NAME'] = $current_property_details->property_name;
				$output['STREET'] = $current_property_details->property_street;
				$output['TOWN'] = $current_property_details->property_town;
				$output['REGION'] = $current_property_details->property_region;
				$output['COUNTRY'] = $current_property_details->property_country;
				$output['POSTCODE'] = $current_property_details->property_postcode;
				$output['TELEPHONE']=$current_property_details->property_tel;
				$output['FAX']=$current_property_details->property_fax;
				if ($output['TELEPHONE']!="")
					$output['HTELEPHONE']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE).": ";
				if ($output['FAX']!="")
				$output['HFAX']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX).": ";
				
				if ($mrConfig['galleryLink']!="")
					{
					// if(filter_var($mrConfig['galleryLink'], FILTER_VALIDATE_URL) === TRUE) Not using this as it doesn't seem to work
					if (function_exists('filter_var'))
						$mrConfig['galleryLink'] = filter_var($mrConfig['galleryLink'], FILTER_SANITIZE_URL);
					else
						$mrConfig['galleryLink'] = jomresURL($mrConfig['galleryLink']);
	
					$output['GALLERYLINK']= preg_replace("
						#((http|https|ftp)://(\S*?\.\S*?))(\s|\;|\)|\]|\[|\{|\}|,|\"|'|:|\<|$|\.\s)#ie",
						"'<a href=\"$1\" target=\"_blank\">$3</a>$4'",
						$mrConfig['galleryLink']
						);
					}

				$pageoutput[]=$output;
				$tmpl = new patTemplate();

				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows('featurelist',$featureList);
				$tmpl->addRows('roomtypes',$roomtypes);
				$tmpl->readTemplatesFromInput( 'property_header.html');
				$cachableContent = $tmpl->getParsedTemplate();
				$cache->setCache($cachableContent);
				unset($cache);
				echo $cachableContent;

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