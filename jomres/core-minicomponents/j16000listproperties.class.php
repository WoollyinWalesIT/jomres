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

class j16000listproperties
	{
	function j16000listproperties()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$indexphp;
		global $jrportalConfig,$jomresConfig_list_limit;
		$rows=array();
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		//require_once(JOMRESCONFIG_ABSOLUTE_PATH.'/includes/pageNavigation.php');

		$crateFunctions=new jrportal_crate_functions();
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
			$r['VIEWLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'task=viewproperty&id='.$p['id'].'">'.$editIcon.'</a>';

			$r['PROPERTYNAME']=$p['property_name'];
			$r['PROPERTYADDRESS']=$p['property_street'].', '.$p['property_town'].', '.$p['property_region'].', '.$p['property_country'].', '.$p['property_postcode'];
			if (!in_array($p['id'],$portalPropertyIds) )
				$crid=$jrportalConfig['defaultCrate'];
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

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/Save.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('saveCrates',$link,$text="Save",$submitOnClick=true,$submitTask="savecrates",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_properties.html');
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