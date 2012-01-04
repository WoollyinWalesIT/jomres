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

class j16000editGlobalroomTypes
	{
	function j16000editGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$rmTypeUid 			= intval(jomresGetParam( $_REQUEST, 'rmTypeUid',	0 ));
		$clone				= intval( jomresGetParam( $_REQUEST, 'clone',	0 ) );
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		
		$query="SELECT * FROM #__jomres_ptypes";
		$ptypeList = doSelectSql($query);
		
		$selected_ptype_rows = array();
		if ($rmTypeUid>0)
			{
			$query = "SELECT propertytype_id FROM #__jomres_roomtypes_propertytypes_xref WHERE roomtype_id =".(int)$rmTypeUid;
			$rtxrefList =doSelectSql($query);
			if (count($rtxrefList)>0)
				{
				foreach ($rtxrefList as $ptype)
					{
					$selected_ptype_rows[]=$ptype->propertytype_id;
					}
				}
			
			$query = "SELECT room_class_abbv, room_class_full_desc,image,srp_only FROM #__jomres_room_classes WHERE room_classes_uid = '".(int)$rmTypeUid."' AND property_uid = '0'";
			$rtList =doSelectSql($query);
			foreach($rtList as $rt)
				{
				$output['CLASSABBV']=stripslashes($rt->room_class_abbv);
				$output['CLASSDESC']=stripslashes($rt->room_class_full_desc);
				$output['SRP_ONLY']=jomresHTML::selectList( $yesno, 'srp_only','class="inputbox" size="1"', 'value', 'text', $rt->srp_only);
				$image=$rt->image;
				}
			}
		else
			{
			$output['CLASSABBV']="";
			$output['CLASSDESC']="";
			$output['SRP_ONLY']=jomresHTML::selectList( $yesno, 'srp_only','class="inputbox" size="1"', 'value', 'text', 0);
			}
		if ($clone)
			$propertyFeatureUid=FALSE;

		
		$all_ptype_rows = array();
		if (count($ptypeList) > 0)
			{
			foreach ($ptypeList as $ptype)
				{
				$row=array();
				$row['propertytype_id'] = $ptype->id;
				$row['propertytype_desc']=$ptype->ptype;
				$row['checked'] = "";
				if (in_array( $ptype->id , $selected_ptype_rows) )
					$row['checked'] = " checked ";
				$all_ptype_rows[]=$row;
				}
			}

		$d = @dir(JOMRES_IMAGELOCATION_ABSPATH.'rmtypes'.JRDS);

		$docs = array();
		$rows=array();
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if(is_file(JOMRES_IMAGELOCATION_ABSPATH.'rmtypes'.JRDS.$filename) && substr($entry,0,1) != '.' && strtolower($entry) !== 'cvs')
					{
					$docs=array();
					$docs['ISCHECKED'] ="";
					$docs['IMAGEPATH'] ='jomres/uploadedimages/rmtypes/'.$filename;
					$docs['IMAGE'] =JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$filename;
					if (isset($image) && $docs['IMAGEPATH']==$image)
						$docs['ISCHECKED'] ="checked";
					$rows[]=$docs;
					}
				}
			$d->close();
			}
			//var_dump($rows);exit;
			
		$output['PROPERTYFEATUREINFO']=_JOMRES_A_GLOBALROOMTYPES_INFO;
		$output['ROOMCLASSUID']=$rmTypeUid;

		$output['INDEX']=JOMRES_SITEPAGE_URL_ADMIN;
		$output['TASK']='saveGlobalRoomClass';
		$output['HLINKTEXT']=_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT;
		$output['HLINKTEXTCLONE']=_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE;
		$output['HABBV']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV;
		$output['HDESC']=_JOMRES_COM_MR_EB_ROOM_CLASS_DESC;
		$output['HSRP_ONLY']=JOMRES_COM_A_SRPONLY;
		$output['MOSCONFIGLIVESITE']=get_showtime('live_site');
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK;
		$output['_JOMRES_PROPERTY_TYPE_ASSIGNMENT']=_JOMRES_PROPERTY_TYPE_ASSIGNMENT;
		$output['_JOMRES_IMAGE']=_JOMRES_IMAGE;
		
		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('saveGlobalRoomClass',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="saveGlobalRoomClass",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listGlobalroomTypes",'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_room_type.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->addRows( 'all_ptype_rows',$all_ptype_rows);
		$tmpl->displayParsedTemplate();
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}