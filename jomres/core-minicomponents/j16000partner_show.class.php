<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
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
		if (isset($_GET['name']))
			{
			$name	= jomresGetParam( $_GET, 'name', '' );
			$all_users = jomres_cmsspecific_getCMSUsers();
			foreach ($all_users as $user)
				{
				if (strtolower($user['username']) == strtolower($name) )
					$cms_userid	= (int)$user['id'];
				}
			}
		else
			$cms_userid	= (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		if ($cms_userid > 0)
			{
			$output=array();

			$output['_JOMRES_PARTNER_SHOW_TITLE']=_JOMRES_PARTNER_SHOW_TITLE;
			$output['_JOMRES_PARTNER_SHOW_SEARCHTITLE']=_JOMRES_PARTNER_SHOW_SEARCHTITLE;
			$output['_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS']=_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS;
			$output['_JOMRES_PARTNER_SHOW_TITLE']=_JOMRES_PARTNER_SHOW_TITLE;
			$output['_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES']=_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES;
			$output['_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS']=_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS;
			
			
			$query = "SELECT * FROM #__jomres_partners WHERE cms_userid = ".(int)$cms_userid;
			$result = doSelectSql($query);
			if (count($result)==0)
				{
				$query = "INSERT INTO #__jomres_partners (`cms_userid`) VALUES (".(int)$cms_userid.")";
				$result = doInsertSql($query,"");
				}
			elseif (count($result)>1) // Hmm, that aint right.
					return;
			
			$componentArgs=array();
			$componentArgs['cms_userid']=$cms_userid;
			$output['DISCOUNT_LIST']= $MiniComponents->specificEvent('16000','partner_list_discounts',$componentArgs);
			
			$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&no_html=1&task=";
			
			$all_users = jomres_cmsspecific_getCMSUsers();

			$query = "SELECT id FROM #__jomres_partners WHERE cms_userid=".$cms_userid;
			$partner_id = doSelectSql($query,2);

			
			$output['USERNAME']=$all_users[$cms_userid]['username'];
			$output['CMSUSERID']=$cms_userid;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'partner_show.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}