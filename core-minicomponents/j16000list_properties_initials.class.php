<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000list_properties_initials
	{
	function j16000list_properties_initials()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output = array();
		$pageoutput = array();
		$rows = array();
		
		$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN.'&nofollowtmpl';
		$output['_JOMRES_CRATES_CLICKINITIAL'] = _JOMRES_CRATES_CLICKINITIAL;
		$output['_JRPORTAL_CPANEL_LISTCRATES'] = _JRPORTAL_CPANEL_LISTCRATES;
		
		
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();
		$jomresPropertyList=$propertyFunctions->getAllJomresProperties();

		$initials = array();
		foreach ($jomresPropertyList as $pn)
			{
			if (!array_key_exists( strtoupper(substr($pn['property_name'],0,1) ) , $initials))
				$initials[strtoupper(jr_substr($pn['property_name'],0,1) )]=1;
			else
				$initials[strtoupper(jr_substr($pn['property_name'],0,1) )]++;
			}
		
		ksort($initials);

		foreach ($initials as $key=>$val)
			{
			$r = array();
			$r['INITIAL'] = $key;
			$r['COUNT'] = $val;
			$rows[] = $r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'property_initials.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		echo $tmpl->getParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}