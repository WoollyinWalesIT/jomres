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

class j16000view_property_reviews
	{
	function j16000view_property_reviews($componentArgs)
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
		
		$property_uid=$componentArgs['property_uid'];

		if (is_null($property_uid ) )
			$property_uid = jomresGetParam( $_REQUEST, 'property_uid',0);

		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();

		$propertyDetails=$propertyFunctions->getPropertyDetails(array($property_uid));
		$output['PROPERTY_NAME']=stripslashes($propertyDetails[$property_uid]['property_name']);
		
		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$all_reviews = $Reviews->get_all_reviews_index_by_property_uid();
		$property_reviews = $all_reviews[$property_uid];
		
		$all_users = jomres_cmsspecific_getCMSUsers();
		
		$unpublish_icon = get_showtime('live_site')."/jomres/images/jomresimages/small/tick.png";
		$publish_icon = get_showtime('live_site')."/jomres/images/jomresimages/small/Cancel.png";
		$delete_icon = get_showtime('live_site')."/jomres/images/jomresimages/small/WasteBasket.png";
		
		$output['NPUBLISH_IMAGE']=$unpublish_icon;
		$output['PUBLISH_IMAGE']=$publish_icon;
		$output['AJAXURL']=JOMRES_SITEPAGE_URL_ADMIN."&format=raw&no_html=1";
		$output['HPROPERTYNAME']=_JRPORTAL_PROPERTIES_PROPERTYNAME;
		$output['PROPERTY_UID']=$property_uid;
		
		$output['_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW']=_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW;
		$output['_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW']=_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW;
		$output['_JOMRES_MR_AUDIT_LISTING_USER']=_JOMRES_MR_AUDIT_LISTING_USER;
		$output['_JOMRES_REVIEWS_SUBMITTEDDATE']=_JOMRES_REVIEWS_SUBMITTEDDATE;
		$output['_JOMRES_REVIEWS_TITLE']=_JOMRES_REVIEWS_TITLE;
		$output['_JOMRES_REVIEWS_REVIEWBODY_SAID']=_JOMRES_REVIEWS_REVIEWBODY_SAID;
		$output['_JOMRES_REVIEWS_PROS']=_JOMRES_REVIEWS_PROS;
		$output['_JOMRES_REVIEWS_CONS']=_JOMRES_REVIEWS_CONS;
		$output['_JOMRES_REVIEWS_RATING']=_JOMRES_REVIEWS_RATING;



		foreach ($property_reviews as $review)
			{
			$r = array();
			
			$r['rating_id'] = $review["rating_id"];
			$r['user_id'] = $all_users[$review["user_id"]]['username'];
			$r['review_title'] = $review["review_title"];
			$r['review_description'] = $review["review_description"];
			$r['pros'] = $review["pros"];
			$r['cons'] = $review["cons"];
			$r['rating'] = $review["rating"];
			$r['rating_date'] = $review["rating_date"];
			$r['published'] = $review["published"];
			
			$r['publish_icon']=$unpublish_icon;
			if ($r['published']==0)
				$r['publish_icon']=$publish_icon;
				
			$r['delete_icon']=$delete_icon;

			$r['row_id']='rating_id'.$r['rating_id'];

			$rows[]=$r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'view_property_reviews.html');
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