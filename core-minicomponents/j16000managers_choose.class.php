<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000managers_choose
	{
	function j16000managers_choose()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$rows = array();
		$pageoutput=array();
		
		$tickIcon	= '<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/Tick.png" border="0">';
		$crossIcon	= '<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/Cancel.png" border="0">';
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$suspendedIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/user_suspended.png" border="0">';
		$activeIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/user_active.png" border="0">';
		
		$img_guest=get_showtime('live_site')."/jomres/images/Tourists.png";
		$img_reception=get_showtime('live_site')."/jomres/images/Services.png";
		$img_manager=get_showtime('live_site')."/jomres/images/User_Agent_Male.png";
		$img_superpropertymanager=get_showtime('live_site')."/jomres/images/User_Ninja.png";
				$output['KEY']='
		<img src = "'.$img_reception.'"  style="border:none;">'._JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION.'
		<img src = "'.$img_manager.'"  style="border:none;">'._JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN.'
		<img src = "'.$img_superpropertymanager.'"  style="border:none;">'._JOMRES_COM_USERIS_SUPERPROPERTYMANAGER.'
		';
		
		$img_output_guest='<img src = "'.$img_guest.'"  style="border:none;">';
		$img_output_reception='<img src = "'.$img_reception.'"  style="border:none;">';
		$img_output_manager='<img src = "'.$img_manager.'"  style="border:none;">';
		$img_output_superpropertymanager='<img src = "'.$img_superpropertymanager.'"  style="border:none;">';
		
		
		$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&no_html=1&task=";
		$output['LIVESITE']=JOMRES_SITEPAGE_URL_ADMIN."";

		$output['_JOMRES_MANAGER_CHOOSE_SEARCHTITLE']=_JOMRES_MANAGER_CHOOSE_SEARCHTITLE;
		$output['_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS']=_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS;
		$output['_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE']=_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE;
		$output['_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS']=_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS;
		$output['INSTRUCTIONS']=_JOMRES_PROFILELIST_INSTRUCTIONS;
		$output['SUSPENSIONS']=_JOMRES_SUSPENSIONS_MANAGERLIST_INFO;
		$output['_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED']=_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED;
		
		$output['HLINKTEXT']=	_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT;
		$output['HGRANTLINK']=	_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER;
		$output['HACCESSLEVEL']=_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL;
		$output['HUSERNAME']=_JOMRES_COM_MR_ASSIGNUSER_USERNAME;
		$output['HNUMBEROFPROPERTIES']='<img src="'.get_showtime('live_site').'/jomres/images/jomresimages/small/propertyTypes.png">';
		$output['HSUSPENSION']=_JOMRES_SUSPENSIONS_TITLE;

		$all_users = jomres_cmsspecific_getCMSUsers();
		

		$managers=array();
		$query="SELECT manager_uid,userid,currentproperty,access_level,pu,suspended FROM #__jomres_managers";
		$jomresUserList  = doSelectSql($query);
		if (count($jomresUserList)>0)
			{
			foreach ($jomresUserList as $manager)
				{
				$r=array();
				//$managers[$user->userid]=array('manager_uid'=>$user->manager_uid,'userid'=>$user->userid,'access_level'=>$user->access_level,'pu'=>$user->pu,'suspended'=>$user->suspended);
				$cms_userid = $manager->userid;
				$access_level= $manager->access_level;
				$pu = $manager->pu;// Pu, flag that defines if a user is a super property manager.

				if ($manager->access_level=="1")
					$accesslevel_img =$img_output_reception;
				else
					$accesslevel_img =$img_output_manager;
						
				if ($managerpu == "1")
					$accesslevel_img =$img_output_superpropertymanager;
					
				if ($manager->pu == "0")
					{
					if ($manager->suspended == "1")
						$r['SUSPENSIONLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=property_manager_unsuspend&no_html=1&userid='.$cms_userid.'">'.$suspendedIcon.'</a>';
					else
						$r['SUSPENSIONLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=property_manager_suspend&no_html=1&userid='.$cms_userid.'">'.$activeIcon.'</a>';
					}
				else
					{
					$r['SUSPENSIONLINK']='';
					$accesslevel_img =$img_output_superpropertymanager;
					}
						
						
				$query="SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE manager_id = '".(int)$cms_userid."'";
				$propertyList= doSelectSql($query);
				$numberOfProperties=count($propertyList);

				$r['ACCESSLEVELIMAGE']=$accesslevel_img;
				$r['GRANTLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=grantMosUser&no_html=1&userid='.$cms_userid.'&grantAct=n">'.$tickIcon.'</a>';
				if ($access_level>0)
					$r['LINKTEXT']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editProfile&id='.$cms_userid.'">'.$editIcon.'</a>';
				else
					$r['LINKTEXT']="&nbsp;";

				$r['USERNAME']=$all_users[$cms_userid]["username"];
				$r['NUMBEROFPROPERTIES']=$numberOfProperties;
				$r['LINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=manager_show&id='.$cms_userid.'">'.$all_users[$cms_userid]["username"].'</a><br/>';
				$rows[]=$r;
				}
			}
		unset($all_users);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'managers_choose.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();

		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}