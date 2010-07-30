<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000editPfeature
	{
	function j16000editPfeature()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$propertyFeatureUid = jomresGetParam( $_REQUEST, 'propertyFeatureUid',	0 );
		$clone				= intval( jomresGetParam( $_REQUEST, 'clone',	false ) );
		$ptypeid = 0;
		if ($propertyFeatureUid >0)
			{
			$query = "SELECT hotel_feature_abbv,hotel_feature_full_desc,image,property_uid,ptype_id FROM #__jomres_hotel_features WHERE hotel_features_uid  = '".(int)$propertyFeatureUid."' AND property_uid = '0'";
			$pFeatureList =doSelectSql($query);
			foreach($pFeatureList as $pFeature)
				{
				$output['FEATURE_ABBV']=stripslashes($pFeature->hotel_feature_abbv);
				$output['FEATURE_DESCRIPTION']=stripslashes($pFeature->hotel_feature_full_desc);
				$ptypeid = $pFeature->ptype_id;
				$image=$pFeature->image;
				}
			}
		if ($clone)
			$propertyFeatureUid=0;
		
		$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
		$output['PROPERTY_TYPE_DROPDOWN']=getPropertyTypeDropdown($ptypeid,true);
		
		$map=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS.'pfeatures'.JRDS;
		$mrp=get_showtime('live_site').'/jomres/uploadedimages/pfeatures/';
		$d = @dir($map);
		$docs = array();
		$rows=array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if(is_file($map.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
					{
					$docs=array();
					$docs['ISCHECKED'] ="";
					$docs['IMAGEPATH'] ='jomres/uploadedimages/pfeatures/'.$filename;
					$docs['IMAGE'] =$mrp.$filename;
					if (isset($image) && $docs['IMAGEPATH']==$image)
						$docs['ISCHECKED'] ="checked";
					$rows[]=$docs;
					}
				}
			$d->close();
			}
		$output['PROPERTYFEATUREINFO']=_JOMRES_A_GLOBALPFEATURES_INFO;
		$output['PROPERTYFEATUREUID']=$propertyFeatureUid;

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$output['HLINKTEXT']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK;
		$output['HLINKTEXTCLONE']=_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE;
		$output['HFEATUREABBV']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV;
		$output['HFEATUREDESCRIPTION']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC;
		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK;
		$output['BACKLINK']='<a href="javascript:submitbutton(\'cpanel\')">'._JOMRES_COM_MR_BACK.'</a>';

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('savePfeature',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="savePfeature",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listPfeatures",'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';

		HTML_jomres::editPfeature_html($output,$rows);
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}