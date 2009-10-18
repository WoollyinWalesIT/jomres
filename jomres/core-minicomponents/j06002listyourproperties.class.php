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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002listyourproperties
	{
	function j06002listyourproperties()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$rows=array();
		if ($thisJRUser->superPropertyManager && $thisJRUser->superPropertyManagersAreGods)
			{
			$query="SELECT propertys_uid FROM #__jomres_propertys";
			$managersProperties=doSelectSql($query);
			$mp=array();
			foreach ($managersProperties as $p)
				{
				$mp[]=(int)$p->propertys_uid;
				}
			$clause = "WHERE ";
			$clause .= genericOr($mp,'propertys_uid');
			}
		else
			{
			$query="SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '".$thisJRUser->id."'";
			$managersProperties=doSelectSql($query);
			$mp=array();
			foreach ($managersProperties as $p)
				{
				$mp[]=(int)$p->property_uid;
				}
			$clause = "WHERE ";
			$clause .= genericOr($mp,'propertys_uid');
			}
		if (count($mp) ==0)
			return;
		
		$query="SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,published,apikey
		FROM #__jomres_propertys ".$clause." LIMIT ".count($mp);
		$jomresPropertyList=doSelectSql($query);
		$output['PAGETITLE']=_JRPORTAL_CPANEL_LISTPROPERTIES;
		$output['TOTALINLISTPLUSONE']=count($crateList);
		$output['HPROPERTYNAME']=_JRPORTAL_PROPERTIES_PROPERTYNAME;
		$output['HPROPERTYADDRESS']=_JRPORTAL_PROPERTIES_PROPERTYADDRESS;
		$output['HCRATE_DROPDOWN']=_JRPORTAL_CRATE_VALUE;
		$output['LEGEND']=_JRPORTAL_PROPERTIES_LEGEND;
		foreach($jomresPropertyList as $p)
			{
			$r=array();
			$published=$p->published;
			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			if (!$published)
				$jrtb .= $jrtbar->toolbarItem('unpublish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken().'&property_uid='.$p->propertys_uid),jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false));
			else
				$jrtb .= $jrtbar->toolbarItem('publish',jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty'.jomresURLToken().'&property_uid='.$p->propertys_uid),jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false) );
			$r['PUBLISHLINK']=$jrtb .= $jrtbar->endTable();
			$r['PROPERTYNAME']=$p->property_name;
			$r['PROPERTYADDRESS']=$p->property_street.', '.$p->property_town.', '.$p->property_region.', '.$p->property_country.', '.$p->property_postcode;
			$rows[]=$r;
			}
			
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( get_showtime('ePointFilepath')."/templates" );
		$tmpl->readTemplatesFromInput( 'frontend_list_properties.html');
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