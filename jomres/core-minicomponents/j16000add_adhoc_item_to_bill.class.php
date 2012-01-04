<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000add_adhoc_item_to_bill
	{
	function j16000add_adhoc_item_to_bill()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$step=intval(jomresGetParam($_POST,"step",1));
		$output=array();

		switch ($step)
			{
			case "2": // Now we can choose the property and put in the value of the item

				$userid=jomresGetParam($_POST,"userid",0);
				jr_import('jrportal_property_functions');
				$propertyFunctions=new jrportal_property_functions();
				jr_import('jrportal_user_functions');
				$userFunctions=new jrportal_user_functions();
				$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
				$manager=$userFunctions->getJoomlaUserDetailsForJoomlaId($userid);
				$output['USERNAME']=$manager['username'];
				$output['PROPERTY_DROPDOWN']=$propertyFunctions->makePropertyDropdownForManagerId(array($userid));
				$output['JOS_ID']=$userid;
				$output['PROPERTY']=_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY;
				$output['VALUE']=_JRPORTAL_ADD_ADHOC_ITEM_VALUE;
				$output['DESCRIPTION']=_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION;

				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
				$link = JOMRES_SITEPAGE_URL_ADMIN;
				$jrtb .= $jrtbar->customToolbarItem('saveCrate',$link,$text="Next",$submitOnClick=true,$submitTask="add_adhoc_item_to_bill",$image);
				$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

				$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'adhocitem_step2.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();

			break;
			case "3":
				if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
				$property_uid			=jomresGetParam($_POST,"property_uid",0);
				$jos_id					=jomresGetParam($_POST,"jos_id",0);
				$nett					=jomresGetParam($_POST,"nett",0.00);
				$billing_description	=jomresGetParam($_POST,"description","");
				$username				=jomresGetParam($_POST,"username",0);
				$property_name=getPropertyName($property_uid);
				if ($nett > 0.00)
					{
					$componentArgs=array(
						'property_uid'=>$property_uid,
						'jos_id'=>$jos_id,
						'nett'=>$nett,
						'billing_description'=>$billing_description,
						'username'=>$username,
						'property_name'=>$property_name
						);
					$MiniComponents->specificEvent('16000','additemtobill',$componentArgs); // Custom task
					}
				else
					echo _JRPORTAL_ADD_ADHOC_ITEM_NOVALUE;
			break;
			default:  // First let's get the manager's id
				jr_import('jrportal_user_functions');
				$userFunctions=new jrportal_user_functions();
				$output['MANAGER_DROPDOWN']=$userFunctions->makeManagersDropdown();
				$output['MANAGER']=_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER;
				$jrtbar =jomres_getSingleton('jomres_toolbar');
				$jrtb  = $jrtbar->startTable();
				$image = $jrtbar->makeImageValid("/jomres/images/next.png");
				$link = JOMRES_SITEPAGE_URL_ADMIN;
				$jrtb .= $jrtbar->customToolbarItem('save',$link,$text="Next",$submitOnClick=true,$submitTask="add_adhoc_item_to_bill",$image);
				$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

				$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'adhocitem_step1.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->displayParsedTemplate();
			break;
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}