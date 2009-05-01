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
		global $jomresAdminPath,$jomresConfig_live_site;
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0">';
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
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$propertyFeature->hotel_features_uid.'" onClick="jomres_isChecked(this.checked);">';
			$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'">'.$editIcon.'</a>';
			$r['LINKTEXTCLONE']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&propertyFeatureUid='.$propertyFeature->hotel_features_uid.'&clone=1">'.$cloneIcon.'</a>';
			$r['PFEATURETITLE']=$propertyFeature->hotel_feature_abbv;
			$r['PFEATUREDESCRIPTION']=$propertyFeature->hotel_feature_full_desc;
			$r['IMAGE']=$jomresConfig_live_site.'/'.$propertyFeature->image;
			$rows[]=$r;
			}
		$output['COUNTER']=count($rows);
		$output['TOTALINLISTPLUSONE']=count($rows)+1;

		$jrtbar = new jomres_toolbar();
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
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
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