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

class j16000editGlobalroomTypes
	{
	function j16000editGlobalroomTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jomresAdminPath,$jomresConfig_live_site,$Itemid,$jomresConfig_absolute_path;
		$rmTypeUid 			= intval(jomresGetParam( $_REQUEST, 'rmTypeUid',	0 ));
		$clone				= intval( jomresGetParam( $_REQUEST, 'clone',	0 ) );
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );
		
		if ($rmTypeUid>0)
			{
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

		$map=$jomresConfig_absolute_path.'/images/stories/jomres/rmtypes/';
		$mrp=$jomresConfig_live_site.'/images/stories/jomres/rmtypes/';
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
					$docs['IMAGEPATH'] ='images/stories/jomres/rmtypes/'.$filename;
					$docs['IMAGE'] =$mrp.$filename;
					if (isset($image) && $docs['IMAGEPATH']==$image)
						$docs['ISCHECKED'] ="checked";
					$rows[]=$docs;
					}
				}
			$d->close();
			}
		$output['PROPERTYFEATUREINFO']=_JOMRES_A_GLOBALROOMTYPES_INFO;
		$output['ROOMCLASSUID']=$rmTypeUid;

		$output['INDEX']="index2.php";
		$output['TASK']='saveGlobalRoomClass';
		$output['HLINKTEXT']=_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT;
		$output['HLINKTEXTCLONE']=_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE;
		$output['HABBV']=_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV;
		$output['HDESC']=_JOMRES_COM_MR_EB_ROOM_CLASS_DESC;
		$output['HSRP_ONLY']=JOMRES_COM_A_SRPONLY;
		$output['MOSCONFIGLIVESITE']=$jomresConfig_live_site;
		$output['ITEMID']=$Itemid;
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/index2.php?option=com_jomres";
		$jrtb .= $jrtbar->customToolbarItem('saveGlobalRoomClass',$link,_JOMRES_COM_MR_SAVE,$submitOnClick=true,$submitTask="saveGlobalRoomClass",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',"index2.php?option=com_jomres&task=listGlobalroomTypes",'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'editroomtype.html');
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