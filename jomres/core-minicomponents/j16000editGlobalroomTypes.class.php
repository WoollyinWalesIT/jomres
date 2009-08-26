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
		global $jomresAdminPath,$jomresConfig_live_site;
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
		$output['MOSCONFIGLIVESITE']=$jomresConfig_live_site;
		$output['PAGETITLE']=_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK;

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
		$tmpl->displayParsedTemplate();
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}