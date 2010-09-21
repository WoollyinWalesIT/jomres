<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000partner_show
	{
	function j16000partner_show()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$cms_userid	= (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		$output=array();
		
		$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&task=partners_property_find&no_html=1";
		
		$all_users = jomres_cmsspecific_getCMSUsers();

		$query = "SELECT id FROM #__jomres_partners WHERE cms_userid=".$cms_userid;
		$partner_id = doSelectSql($query,2);

		
		$output['USERNAME']=$all_users[$cms_userid]['username'];
		
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'partner_show.html' );
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