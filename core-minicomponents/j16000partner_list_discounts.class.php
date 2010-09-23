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

class j16000partner_list_discounts
	{
	function j16000partner_list_discounts($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!isset($componentArgs['cms_userid']))
			$cms_userid	= (int)jomresGetParam( $_GET, 'id', 0 );
		else
			$cms_userid	= (int)$componentArgs['cms_userid'];
		
		if ($cms_userid > 0)
			{
			$query = "SELECT DISTINCT property_id FROM #__jomres_partners_discounts WHERE `partner_id` = ".(int)$cms_userid;
			$result = doSelectSql($query);
			$output=array();
			$rows=array();
			foreach ($result as $res)
				{
				$r=array();
				
				$current_property_details =jomres_getSingleton('basic_property_details');
				$current_property_details->gather_data( (int)$res->property_id );

				// $r['discount_id']	=$res->id;
				// $r['partner_id']	=$res->partner_id;
				$r['property_id']	=$res->property_id;
				$r['property_name']	='<a href="javascript:void(0);" onClick="show_property_discounts('.$res->property_id.')">'.$current_property_details->property_name.'</a>';
				// $r['valid_from']	=$res->valid_from;
				// $r['valid_to']		=$res->valid_to;
				// $r['discount']		=$res->discount;
				$rows[]=$r;
				}
			
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'partner_discounts_show.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows',$rows);
			if (!isset($componentArgs['cms_userid']))
				$tmpl->displayParsedTemplate();
			else
				$this->ret_vals=$tmpl->getParsedTemplate();

			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}	
	}