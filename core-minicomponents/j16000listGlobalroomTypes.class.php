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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listGlobalroomTypes
	{
	function j16000listGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$query = "SELECT room_classes_uid, room_class_abbv, room_class_full_desc,image FROM #__jomres_room_classes  WHERE property_uid = '0' ORDER BY room_class_abbv";
		$roomtypeList=doSelectSql($query);
		
		$query="SELECT * FROM #__jomres_ptypes";
		$ptypeList = doSelectSql($query);
		$all_ptypes = array();
		if (count($ptypeList) > 0)
			{
			foreach ($ptypeList as $ptype)
				{
				$all_ptypes[$ptype->id] = $ptype->ptype;
				}
			}
		
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
			$selected_ptype_rows = "";
			$query = "SELECT propertytype_id FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id =".(int)$roomtype->room_classes_uid;
			$rtxrefList =doSelectSql($query);
			if (count($rtxrefList)>0)
				{
				foreach ($rtxrefList as $ptype)
					{
					$selected_ptype_rows.=$all_ptypes[$ptype->propertytype_id]. " ";
					}
				}
			
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$roomtype->room_classes_uid.'" onClick="jomres_isChecked(this.checked);">';
			$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editGlobalroomTypes&rmTypeUid='.$roomtype->room_classes_uid.'">'.$editIcon.'</a>';
			$r['LINKTEXTCLONE']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editGlobalroomTypes&$rmTypeUid='.$roomtype->room_classes_uid.'&clone=1">'.$cloneIcon.'</a>';
			$r['RTTITLE']=$roomtype->room_class_abbv;
			$r['RTDESCRIPTION']=$roomtype->room_class_full_desc;
			$r['IMAGE']=get_showtime('live_site')."/".$roomtype->image;
			$r['PROPERTY_TYPES']=$selected_ptype_rows;
			$rows[]=$r;
			}
		$output['COUNTER']=count($rows);
		$output['TOTALINLISTPLUSONE']=count($rows)+1;

		$jrtbar =jomres_getSingleton('jomres_toolbar');
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
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'" />';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_room_types.html');
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