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

class j06000add_review
	{
	function j06000add_review()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		if (!isset($_GET['property_uid']))
			{
			$property_uid = get_showtime('property_uid');
			}
		else
			{
			$property_uid = (int)$_GET['property_uid'];
			}
		
		jomres_cmsspecific_addheaddata("javascript",get_showtime('live_site').'/jomres/javascript/',"jquery.validate.min.js");
		
		
		//property_header($property_uid);

		if ($jrConfig['use_reviews'] == "1" && $property_uid > 0 )
			{
			$output = array();
			$pageoutput = array();
			$rows = array();
			$this_user_can_review = false;
			
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$this_user_can_review = $Reviews->this_user_can_review();
			$this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();
			if ($this_user_can_review_this_property)
				{
				$output['_JOMRES_REVIEWS']						=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,false,false);
				$output['_JOMRES_REVIEWS_TITLE']				=jr_gettext('_JOMRES_REVIEWS_TITLE',_JOMRES_REVIEWS_TITLE,false,false);
				$output['_JOMRES_REVIEWS_REVIEWBODY']			=jr_gettext('_JOMRES_REVIEWS_REVIEWBODY',_JOMRES_REVIEWS_REVIEWBODY,false,false);
				
				$output['_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE']			=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE',_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE,false,false);
				$output['_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION']			=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION',_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION,false,false);
				$output['_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS']			=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS',_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS,false,false);
				$output['_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS']			=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS',_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS,false,false);
				$output['_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING']			=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING',_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING,false,false);
				

				$output['_JOMRES_REVIEWS_ADDREVIEW_SUMMARY']				=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY',_JOMRES_REVIEWS_ADDREVIEW_SUMMARY,false,false);
				$output['_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL']				=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL',_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL,false,false);
				
				$output['_JOMRES_REVIEWS_RATING']				=jr_gettext('_JOMRES_REVIEWS_RATING',_JOMRES_REVIEWS_RATING,false,false);
				$output['_JOMRES_REVIEWS_PROS']					=jr_gettext('_JOMRES_REVIEWS_PROS',_JOMRES_REVIEWS_PROS,false,false);
				$output['_JOMRES_REVIEWS_CONS']					=jr_gettext('_JOMRES_REVIEWS_CONS',_JOMRES_REVIEWS_CONS,false,false);
				$output['_JOMRES_REVIEWS_ADD_REVIEW']			=jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW',_JOMRES_REVIEWS_ADD_REVIEW,false,false);
				$output['_JOMRES_REVIEWS_COMPLETEALLFIELDS']			=jr_gettext('_JOMRES_REVIEWS_COMPLETEALLFIELDS',_JOMRES_REVIEWS_COMPLETEALLFIELDS,false,false);
				$output['JOMRES_SITEPAGE_URL']					=JOMRES_SITEPAGE_URL;
				$output['PROPERTY_UID'] = $property_uid;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND);
				
				$tmpl->readTemplatesFromInput( 'add_review.html');
				$this->retVals = $tmpl->getParsedTemplate();
				echo $this->retVals;
				}
			else
				echo jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED',_JOMRES_REVIEWS_ALREADYREVIEWED,false,false);
			}
		}


	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>
