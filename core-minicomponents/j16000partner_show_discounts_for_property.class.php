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

class j16000partner_show_discounts_for_property
	{
	function j16000partner_show_discounts_for_property()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$partner_id	= (int)jomresGetParam( $_GET, 'partner_id', 0 );
		$property_id	= (int)jomresGetParam( $_GET, 'property_id', 0 );
		
		if ($partner_id > 0 && $property_id > 0)
			{
			$output=array();
			
			$output['_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID']=_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID;
			$output['_JOMRES_SORTORDER_PROPERTYNAME']=_JOMRES_SORTORDER_PROPERTYNAME;
			$output['_JOMRES_COM_MR_LISTTARIFF_VALIDFROM']=_JOMRES_COM_MR_LISTTARIFF_VALIDFROM;
			$output['_JOMRES_COM_MR_LISTTARIFF_VALIDTO']=_JOMRES_COM_MR_LISTTARIFF_VALIDTO;
			$output['_JOMRES_AJAXFORM_BILLING_DISCOUNT']=_JOMRES_AJAXFORM_BILLING_DISCOUNT;
			
			$query = "SELECT * FROM #__jomres_partners_discounts WHERE partner_id = ".(int)$partner_id." AND property_id =".(int)$property_id;
			$result = doSelectSql($query);

			$rows=array();
			foreach ($result as $res)
				{
				$r = array();
				$current_property_details =jomres_getSingleton('basic_property_details');
				$current_property_details->gather_data( (int)$res->property_id );

				$r['DISCOUNT_ID']	=$res->id;
				$r['PROPERTY_ID']	=$res->property_id;
				$r['PROPERTY_NAME']	=$current_property_details->property_name;
				
				$r['VALID_FROM']	=generateDateInput("valid_from_".$res->id,str_replace("-","/",$res->valid_from));
				$r['VALID_TO']		=generateDateInput("valid_to_".$res->id,str_replace("-","/",$res->valid_to));
				$r['DISCOUNT']		=$res->discount;
				$r['LIVESITE']	=get_showtime('live_site');
				$rows[]=$r;
				}
			
			$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&no_html=1&task=";
			
			
			$output['USERNAME']=$all_users[$cms_userid]['username'];
			$output['CMSUSERID']=$cms_userid;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'partner_show_discounts_for_property.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}