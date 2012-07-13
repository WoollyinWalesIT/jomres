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

class j06000report_review
	{
	function j06000report_review()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsRegistered)
			{
			$MiniComponents->triggerEvent('02280');
			}
		else
			{
			$rating_id = jomresGetParam( $_REQUEST, 'rating_id', 0);

			if ($rating_id > 0)
				{
				jomres_cmsspecific_addheaddata("javascript",get_showtime('live_site').'/jomres/javascript/',"jquery.validate.min.js");
				
				$output['_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL']			=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL',_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL,false,false);
				$output['_JOMRES_REVIEWS_REPORT_REVIEW']					=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW',_JOMRES_REVIEWS_REPORT_REVIEW,false,false);
				$output['_JOMRES_REVIEWS_SUBMIT']							=jr_gettext('_JOMRES_REVIEWS_SUBMIT',_JOMRES_REVIEWS_SUBMIT,false,false);
				$output['_JOMRES_REVIEWS_REPORT_REVIEW_ERROR']				=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR',_JOMRES_REVIEWS_REPORT_REVIEW_ERROR,false,false);
				
				$output['JOMRES_SITEPAGE_URL']								=JOMRES_SITEPAGE_URL;
				
				$output['RATING_ID']=$rating_id;
				
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'report_review.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->displayParsedTemplate();
				}
			}
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}