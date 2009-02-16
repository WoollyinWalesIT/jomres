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

class j16000listGlobalroomTypes
	{
	function j16000listGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresAdminPath,$jomresConfig_absolute_path,$mrConfig,$jomresConfig_live_site;
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$query = "SELECT room_classes_uid, room_class_abbv, room_class_full_desc,image FROM #__jomres_room_classes  WHERE property_uid = '0' ORDER BY room_class_abbv";
		$roomtypeList=doSelectSql($query);
		$rows=array();

		$output['INDEX']="index2.php";
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK;
		$output['BACKLINK']='<a href="javascript:submitbutton(\'cpanel\')">'._JOMRES_COM_MR_BACK.'</a>';
		$output['HLINKTEXT']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV;
		$output['HLINKTEXTCLONE']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC;
		$output['HRTTITLE']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV;
		$output['HRTDESCRIPTION']=_JOMRES_COM_MR_EB_ROOM_CLASS_DESC;
		$output['HJOMRES_A_ICON']=_JOMRES_A_ICON;

		foreach($roomtypeList as $roomtype)
			{
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$roomtype->room_classes_uid.'" onClick="isChecked(this.checked);">';
			$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editGlobalroomTypes&rmTypeUid='.$roomtype->room_classes_uid.'">'.$editIcon.'</a>';
			$r['LINKTEXTCLONE']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editGlobalroomTypes&$rmTypeUid='.$roomtype->room_classes_uid.'&clone=1">'.$cloneIcon.'</a>';
			$r['RTTITLE']=$roomtype->room_class_abbv;
			$r['RTDESCRIPTION']=$roomtype->room_class_full_desc;
			$r['IMAGE']=$jomresConfig_live_site.'/'.$roomtype->image;
			$rows[]=$r;
			}
		$output['COUNTER']=count($rows);
		$output['TOTALINLISTPLUSONE']=count($rows)+1;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('editGlobalroomTypes',$link,_JOMRES_COM_MR_NEWTARIFF,$submitOnClick=true,$submitTask="editGlobalroomTypes",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/WasteBasket.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('deleteGlobalroomTypes',$link,_JOMRES_COM_MR_ROOM_DELETE,$submitOnClick=true,$submitTask="deleteGlobalroomTypes",$image);
		$jrtb .= $jrtbar->endTable();

		$output['JOMRESTOOLBAR']= $jrtb;
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'">';
		$pageoutput[]=$output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'list_rmtypes.html');
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