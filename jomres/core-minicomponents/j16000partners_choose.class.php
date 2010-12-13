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

class j16000partners_choose
	{
	function j16000partners_choose()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();

		$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&no_html=1&task=";
		$output['LIVESITE']=JOMRES_SITEPAGE_URL_ADMIN."";

		$output['_JOMRES_PARTNER_CHOOSE_SEARCHTITLE']=_JOMRES_PARTNER_CHOOSE_SEARCHTITLE;
		$output['_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS']=_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS;
		$output['_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE']=_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE;
		$output['_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS']=_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS;
		
		$all_users = jomres_cmsspecific_getCMSUsers();
		$rows = array();
		$query = "SELECT id,cms_userid FROM #__jomres_partners";
		$existing = doSelectSql($query);
		if (count($existing)>0)
			{
			foreach ($existing as $partner)
				{
				$row = array();
				$cms_userid = $partner->cms_userid;
				$row['LINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=partner_show&id='.$cms_userid.'">'.$all_users[$cms_userid]["username"].'</a>';
				$row['DELETELINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=partner_delete&no_html=1&id='.$cms_userid.'"><img src="'.get_showtime('live_site').'/jomres/images/jomresimages/small/WasteBasket.png" /></a><br/>';
				
				$rows[]=$row;
				}
			}
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'partners_choose.html' );
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