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

class j16000list_reviews
	{
	function j16000list_reviews()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output = array();
		$pageoutput = array();
		$rows = array();
		
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();
		$jomresPropertyList=$propertyFunctions->getAllJomresProperties();

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		$output['_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO'] = _JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO;
		$output['_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED'] = _JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED;
		$output['_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL'] = _JOMRES_REVIEWS_ADMIN_NUMBERTOTAL;
		
		$editIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';

		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$all_reviews = $Reviews->get_all_reviews_index_by_property_uid();
		
		foreach ($jomresPropertyList as $key=>$val)
			{
			$r = array();
			$r['PROPERTYNAME']=$val['property_name'];
			$r['VIEWLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=view_property_reviews&property_uid='.(int)$key.'">'.$editIcon.'</a>';
			
			$review_count = 0;
			$unpublished_count=0;
			foreach ($all_reviews as $property_reviews)
				{
				foreach ($property_reviews as $review)
					{
					if ($review['property_uid'] == $key)
						{
						$review_count++;
						if ($review['published'] == 0)
							$unpublished_count++;
						}
					}
				}
				
			$r['row_class']='';
			if ($review_count > 0)
				$r['row_class']="ui-state-highlight";
			if ($unpublished_count > 0)
				$r['row_class']="ui-state-error";

			$r['NUMBERUNPUBLISHED']=$unpublished_count;
			$r['NUMBERTOTAL']=$review_count;
			
			$rows[]=$r;
			}
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_reviews_propertys.html');
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