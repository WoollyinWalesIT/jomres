<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_properties_awaiting_approval
	{
	function j16000list_properties_awaiting_approval()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$rows=array();

		$query = "SELECT propertys_uid,property_street,property_town,property_region,property_country,property_postcode FROM #__jomres_propertys WHERE approved = 0 ORDER by property_name";
		$result = doSelectSql($query);
		foreach ($result as $r)
			{
			if (is_numeric($r->property_region))
				{
				$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
				$property_region=jr_gettext("_JOMRES_CUSTOMTEXT_REGIONS_".$r->property_region,$jomres_regions->regions[$r->property_region]['regionname'],$editable,false);
				}
			else
				$property_region=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION'.$r->property_region,$r->property_region,$editable,false);
			$jomresPropertyList[$r->propertys_uid] = array("id"=>$r->propertys_uid,"property_street"=>$r->property_street,"property_town"=>$r->property_town,"property_region"=>$property_region,"property_country"=>$r->property_country,"property_postcode"=>$r->property_postcode);
			}
		
		if (count($jomresPropertyList)==0)
			{
			echo jr_gettext("_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL");
			}
		else
			{
			$managers = array();
			$query = "SELECT * FROM #__jomres_managers";
			$result = doSelectSql($query);
			if (count($result)>0)
				{
				foreach ($result as $r)
					{
					$managers[$r->userid]=$r->username;
					}
				}
			
			
			$output['PAGETITLE']=jr_gettext("_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL",_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL);
			$output['TOTALINLISTPLUSONE']=count($crateList);
			$output['HPROPERTYNAME']=jr_gettext("_JRPORTAL_PROPERTIES_PROPERTYNAME",_JRPORTAL_PROPERTIES_PROPERTYNAME);
			$output['HPROPERTYADDRESS']=jr_gettext("_JRPORTAL_PROPERTIES_PROPERTYADDRESS",_JRPORTAL_PROPERTIES_PROPERTYADDRESS);
			$counter=0;
			
			foreach($jomresPropertyList as $k=>$p)
				{
				$r=array();

				$r['_JOMRES_APPROVALS_REVIEW']=jr_gettext("_JOMRES_APPROVALS_REVIEW");
				$r['_JOMRES_APPROVALS_APPROVE']=jr_gettext("_JOMRES_APPROVALS_APPROVE");

				$r['PROPERTYNAME']=getPropertyName($p['id']);
				$r['PROPERTY_UID']=$p['id'];
				$r['PROPERTYADDRESS']=jomres_decode($p['property_street']).', '.jomres_decode($p['property_town']).', '.jomres_decode($p['property_region']).', '.jomres_decode($p['property_country']).', '.$p['property_postcode'];
				
				$rows[]=$r;
				}

			$jrtbar =jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,jr_gettext("_JRPORTAL_CANCEL",_JRPORTAL_CANCEL));
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_properties_awaiting_approval.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows',$rows);
			$tmpl->displayParsedTemplate();
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}