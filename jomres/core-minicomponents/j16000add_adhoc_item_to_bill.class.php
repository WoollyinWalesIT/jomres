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

class j16000add_adhoc_item_to_bill
	{
	function j16000add_adhoc_item_to_bill()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $htmlFuncs,$indexphp;
		$step=intval(jomresGetParam($_POST,"step",1));
		$output=array();

		switch ($step)
			{
			case "2": // Now we can choose the property and put in the value of the item

				$userid=jomresGetParam($_POST,"userid",0);
				$propertyFunctions=new jrportal_property_functions();
				$userFunctions=new jrportal_user_functions();
				$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';
				$manager=$userFunctions->getJoomlaUserDetailsForJoomlaId($userid);
				$output['USERNAME']=$manager['username'];
				$output['PROPERTY_DROPDOWN']=$propertyFunctions->makePropertyDropdownForManagerId(array($userid));
				$output['JOS_ID']=$userid;
				$output['PROPERTY']=_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY;
				$output['VALUE']=_JRPORTAL_ADD_ADHOC_ITEM_VALUE;
				$output['DESCRIPTION']=_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION;

				$jrtbar = new jomres_toolbar();
				$jrtb  = $jrtbar->startTable();
				$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
				$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/".$indexphp."?option=com_jomres";
				$jrtb .= $jrtbar->customToolbarItem('saveCrate',$link,$text="Next",$submitOnClick=true,$submitTask="add_adhoc_item_to_bill",$image);
				$jrtb .= $jrtbar->toolbarItem('cancel',$indexphp."?option=com_jomres",_JRPORTAL_CANCEL);
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

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
				$userFunctions=new jrportal_user_functions();
				$output['MANAGER_DROPDOWN']=$userFunctions->makeManagersDropdown();
				$output['MANAGER']=_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER;
				$jrtbar = new jomres_toolbar();
				$jrtb  = $jrtbar->startTable();
				$image = $jrtbar->makeImageValid("/jomres/images/next.png");
				$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/".$indexphp."?option=com_jomres";
				$jrtb .= $jrtbar->customToolbarItem('save',$link,$text="Next",$submitOnClick=true,$submitTask="add_adhoc_item_to_bill",$image);
				$jrtb .= $jrtbar->toolbarItem('cancel',$indexphp."?option=com_jomres",_JRPORTAL_CANCEL);
				$jrtb .= $jrtbar->endTable();
				$output['JOMRESTOOLBAR']=$jrtb;

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