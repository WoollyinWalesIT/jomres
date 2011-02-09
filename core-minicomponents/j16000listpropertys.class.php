<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listpropertys
	{
	function j16000listpropertys()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$rows=array();
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		//require_once(JOMRESCONFIG_ABSOLUTE_PATH.'/includes/pageNavigation.php');

		jr_import('jrportal_crate_functions');
		$crateFunctions=new jrportal_crate_functions();
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();

		$crateList=$crateFunctions->getAllUnarchivedCrates();
		$jomresPropertyList=$propertyFunctions->getAllJomresProperties();
		
		$portalPropertyList=$propertyFunctions->getAllPortalProperties();
		
		$portalXREFPropertyIds=array_keys($portalPropertyList);
		$portalPropertyIds=array();
		foreach ($portalPropertyList as $p)
			{
			$portalPropertyIds[]=$p['property_id'];
			}
		$output['PAGETITLE']=_JRPORTAL_CPANEL_LISTPROPERTIES;
		$output['TOTALINLISTPLUSONE']=count($crateList);
		$output['HPROPERTYNAME']=_JRPORTAL_PROPERTIES_PROPERTYNAME;
		$output['HPROPERTYADDRESS']=_JRPORTAL_PROPERTIES_PROPERTYADDRESS;
		$output['HCRATE_DROPDOWN']=_JRPORTAL_CRATE_VALUE;
		$output['LEGEND']=_JRPORTAL_PROPERTIES_LEGEND;
		$counter=0;
		
		foreach($jomresPropertyList as $k=>$p)
			{
			$r=array();
			$counter++;
			 if ($counter % 2)
				$r['STYLE'] ="row0";
			else
				$r['STYLE'] ="row1";

			if (!in_array($p['id'],$portalPropertyIds)  )
				$r['STYLE'] ="row2";
			else
				$r['STYLE'] ="jradmin_field_la";

			$background="";
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$p['id'].'" onClick="isChecked(this.checked);">';
			$r['VIEWLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=viewproperty&id='.$p['id'].'">'.$editIcon.'</a>';

			$r['PROPERTYNAME']=getPropertyName($p['id']);
			$r['PROPERTYADDRESS']=jomres_decode($p['property_street']).', '.jomres_decode($p['property_town']).', '.jomres_decode($p['property_region']).', '.jomres_decode($p['property_country']).', '.$p['property_postcode'];
			if (!in_array($p['id'],$portalPropertyIds) )
				$crid=$jrConfig['defaultCrate'];
			else
				{
				$id=$k;
				$crid=$portalPropertyList[$k]['crate_id'];
				}
			if (is_null($crid) || $crid==0)
				$r['STYLE'] ="row2";
			else
				$r['STYLE'] ="jradmin_field_la";
			$r['CRATE_DROPDOWN']=$crateFunctions->makeCrateDropdown($crid,$idx=$p['id']);
			$rows[]=$r;
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('saveCrates',$link,$text="Save",$submitOnClick=true,$submitTask="savecrates",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'admin_list_propertys.html');
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