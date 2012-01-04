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

class j16000listPfeatures
	{
	function j16000listPfeatures()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$query = "SELECT  hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid,ptype_id FROM #__jomres_hotel_features  WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList=doSelectSql($query);
		$rows=array();
		
		$ptypes=array();
		$query="SELECT id, ptype FROM #__jomres_ptypes";
		$ptypeList = doSelectSql($query);
		if (count($ptypeList)>0)
			{
			$output['HPROPERTY_TYPE']=jr_gettext('_JOMRES_FRONT_PTYPE',_JOMRES_FRONT_PTYPE);
			foreach($ptypeList as $type)
				{
				$ptypes[$type->id]=$type->ptype;
				}
			}
		
		$output['INDEX']="index2.php";
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK;
		$output['HLINKTEXT']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV;
		$output['HLINKTEXTCLONE']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC;
		//$output['PROPERTYFEATUREUID']=$propertyFeatureUid;
		$output['HPFEATURETITLE']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV;
		$output['HPFEATUREDESCRIPTION']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC;
		$output['HJOMRES_A_ICON']=_JOMRES_A_ICON;
		$output['BACKLINK']='<a href="javascript:submitbutton(\'cpanel\')">'._JOMRES_COM_MR_BACK.'</a>';

		foreach($propertyFeaturesList as $propertyFeature)
			{
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$propertyFeature->hotel_features_uid.'" onClick="jomres_isChecked(this.checked);">';
			$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'">'.$editIcon.'</a>';
			$r['LINKTEXTCLONE']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'&clone=1">'.$cloneIcon.'</a>';
			$r['PFEATURETITLE']=$propertyFeature->hotel_feature_abbv;
			$r['PFEATUREDESCRIPTION']=$propertyFeature->hotel_feature_full_desc;

			$r['PROPERTY_TYPE']=$ptypes[$propertyFeature->ptype_id];
			
			$r['IMAGE']=get_showtime('live_site').'/'.$propertyFeature->image;
			$rows[]=$r;
			}
		$output['COUNTER']=count($rows);
		$output['TOTALINLISTPLUSONE']=count($rows)+1;

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('editPfeature',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="editPfeature",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/WasteBasket.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('deletePfeature',$link,_JOMRES_COM_MR_ROOM_DELETE,$submitOnClick=true,$submitTask="deletePfeature",$image);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'" />';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_pfeatures.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}