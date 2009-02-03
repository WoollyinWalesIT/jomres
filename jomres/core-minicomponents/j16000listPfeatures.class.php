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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

class j16000listPfeatures
	{
	function j16000listPfeatures()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresAdminPath,$jomresConfig_absolute_path,$mrConfig,$jomresConfig_live_site;
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/components/com_jomres/images/jomresimages/small/EditItem.png" border="0">';
		$query = "SELECT  hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid FROM #__jomres_hotel_features  WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList=doSelectSql($query);
		$rows=array();

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
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$propertyFeature->hotel_features_uid.'" onClick="isChecked(this.checked);">';
			$r['LINKTEXT']='<a href="index2.php?option=com_jomres&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'">'.$editIcon.'</a>';
			$r['LINKTEXTCLONE']='<a href="index2.php?option=com_jomres&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'&clone=1">'.$cloneIcon.'</a>';
			$r['PFEATURETITLE']=$propertyFeature->hotel_feature_abbv;
			$r['PFEATUREDESCRIPTION']=$propertyFeature->hotel_feature_full_desc;
			$r['IMAGE']=$jomresConfig_live_site.'/'.$propertyFeature->image;
			$rows[]=$r;
			}
		$output['COUNTER']=count($rows);
		$output['TOTALINLISTPLUSONE']=count($rows)+1;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/AddItem.png");
		$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
		$jrtb .= $jrtbar->customToolbarItem('editPfeature',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="editPfeature",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',"index2.php?option=com_jomres",'');
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/WasteBasket.png");
		$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
		$jrtb .= $jrtbar->customToolbarItem('deletePfeature',$link,_JOMRES_COM_MR_ROOM_DELETE,$submitOnClick=true,$submitTask="deletePfeature",$image);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
		
		$pageoutput[]=$output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
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