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

class j06000show_property_reviews
	{
	function j06000show_property_reviews()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$thisJRUser = jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$data_only = false;
		
		$task 				= jomresGetParam( $_REQUEST, 'task', "" );
		
		$just_added = 0;
		if (isset($_GET['ja']))
			$just_added = (int)$_GET['ja'];
		
		
		
		if (!isset($_GET['property_uid']))
			{
			$property_uid = get_showtime('property_uid');
			$show_now = false;
			}
		else
			{
			$show_now = true;
			$property_uid = (int)$_GET['property_uid'];
			}
		
		if ($task == "viewproperty")
			$show_now = false;
		
		// Leaving this out for now, because it breaks the file path to this ePoint
		//if ($show_now && !$data_only)
		//	property_header($property_uid);
		
		if ($jrConfig['use_reviews'] == "1" && $property_uid > 0)
			{
			$output = array();
			$pageoutput = array();
			$rows = array();
			$this_user_can_review = false;
			
			$itemReviews = array();
			$itemRating = array();

			$output['_JOMRES_REVIEWS']						=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS,false,false);
			$output['_JOMRES_REVIEWS_AVERAGE_RATING']		=jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING',_JOMRES_REVIEWS_AVERAGE_RATING,false,false);
			$output['_JOMRES_REVIEWS_TOTAL_VOTES']			=jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES',_JOMRES_REVIEWS_TOTAL_VOTES,false,false);
			$output['_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW']	=jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW,false,false);
			$output['_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW']=jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW,false,false);
			$output['_JOMRES_REVIEWS_THANKS_FOR_CONFIRM']=jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM',_JOMRES_REVIEWS_THANKS_FOR_CONFIRM,false,false);
			$output['_JOMRES_REVIEWS_ALREADY_CONFIRMED']=jr_gettext('_JOMRES_REVIEWS_ALREADY_CONFIRMED',_JOMRES_REVIEWS_ALREADY_CONFIRMED);
			
			$output['_JOMRES_REVIEWS_THANKS_FOR_REVIEW']="";
			$output['SHOW_THANKS']="false";
			if ($just_added == 1)
				{
				if ($jrConfig['autopublish_reviews'] =="1")
					$output['_JOMRES_REVIEWS_THANKS_FOR_REVIEW']=jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW',_JOMRES_REVIEWS_THANKS_FOR_REVIEW,false,false);
				else
					$output['_JOMRES_REVIEWS_THANKS_FOR_REVIEW']=jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED',_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED,false,false);
				$output['SHOW_THANKS']="true";
				}
			
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$Reviews->property_uid = $property_uid;
			$this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();
			$itemReviews = $Reviews->showReviews($property_uid);
			$itemRating = $Reviews->showRating($property_uid);
			$this_user_can_review = $Reviews->this_user_can_review();
			
			$output['AJAXURL']=JOMRES_SITEPAGE_URL_NOHTML;
			
			$thumb_up = get_showtime('live_site')."/jomres/images/thumb_up.png";
			$thumb_down = get_showtime('live_site')."/jomres/images/thumb_down.png";
			$star = get_showtime('live_site')."/jomres/images/star.png";
			$add_review_icon = get_showtime('live_site')."/jomres/images/add_review.png";
			
			
			if ( $this_user_can_review_this_property)
				{
				$url=jomresURL(JOMRES_SITEPAGE_URL."&task=add_review&amp;property_uid=".$property_uid);
				$output['_JOMRES_REVIEWS_ADD_REVIEW']			='<a href = "'.$url.'"><img src="'.$add_review_icon.'"/>'.jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW',_JOMRES_REVIEWS_ADD_REVIEW,false,false).'</a>';
				}
			else 
				{
				if (!$thisJRUser->userIsRegistered) 
					$output['_JOMRES_REVIEWS_ADD_REVIEW']			=jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN',_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN,false,false);
				else
					$output['_JOMRES_REVIEWS_ADD_REVIEW']			=jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED',_JOMRES_REVIEWS_ALREADYREVIEWED,false,false);
				}
			
			if ($itemReviews['totalRows']>0)
				{
				$output['AVERAGE_RATING']=number_format($itemRating['avg_rating'], 1, '.', '');
				$output['NUMBER_OF_REVIEWS']=$itemRating['counter'];
				$site_userids =  jomres_cmsspecific_getCMSUsers();

				foreach ($itemReviews['fields'] as $review)
					{
					$r=array();
					$r['_JOMRES_REVIEWS_IAGREE']					=jr_gettext('_JOMRES_REVIEWS_IAGREE',_JOMRES_REVIEWS_IAGREE,false,false);
					$r['_JOMRES_REVIEWS_IDISAGREE']					=jr_gettext('_JOMRES_REVIEWS_IDISAGREE',_JOMRES_REVIEWS_IDISAGREE,false,false);
					$r['_JOMRES_REVIEWS_PROS']						=jr_gettext('_JOMRES_REVIEWS_PROS',_JOMRES_REVIEWS_PROS,false,false);
					$r['_JOMRES_REVIEWS_CONS']						=jr_gettext('_JOMRES_REVIEWS_CONS',_JOMRES_REVIEWS_CONS,false,false);
					$r['_JOMRES_REVIEWS_SUBMITTEDDATE']				=jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE',_JOMRES_REVIEWS_SUBMITTEDDATE,false,false);
					$r['_JOMRES_REVIEWS_TITLE']						=jr_gettext('_JOMRES_REVIEWS_TITLE',_JOMRES_REVIEWS_TITLE,false,false);
					$r['_JOMRES_REVIEWS_REVIEWBODY_SAID']			=jr_gettext('_JOMRES_REVIEWS_REVIEWBODY_SAID',_JOMRES_REVIEWS_REVIEWBODY_SAID,false,false);
					$r['_JOMRES_REVIEWS_DATE']						=jr_gettext('_JOMRES_REVIEWS_DATE',_JOMRES_REVIEWS_DATE,false,false);
					$r['_JOMRES_REVIEWS_RATING']					=jr_gettext('_JOMRES_REVIEWS_RATING',_JOMRES_REVIEWS_RATING);
					$r['_JOMRES_REVIEWS_REPORT_REVIEW']				=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW',_JOMRES_REVIEWS_REPORT_REVIEW,false,false);

					$r['RATING_ID']	=$review['rating_id'];
					$r['USERNAME']	=$site_userids[$review['user_id']]['username'];
					$r['REVIEW_TITLE']=$review['review_title'];
					$r['REVIEW_DESCRIPTION']=$review['review_description'];
					$r['PROS']=$review['pros'];
					$r['CONS']=$review['cons'];
					$r['RATING']=$review['rating'];
					$r['RATING_STARS']="";
					for ($i=1;$i<=$review['rating'];$i++)
						$r['RATING_STARS'].='<img src="'.$star.'"/>';
					
					$r['REPORT_REVIEWLINK'] = '<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&task=report_review&amp;rating_id='.$r['RATING_ID']).'">'.$r['_JOMRES_REVIEWS_REPORT_REVIEW'].'</a>';
					
					$confirm_states = $Reviews->showConfirm($review['rating_id']);

					if (!in_array($Reviews->ip,$confirm_states['confirm_ips']) && $this_user_can_review)
						{
						$r['THUMB_UP']=$thumb_up;
						$r['THUMB_DOWN']=$thumb_down;
						}

					if ($confirm_states['agree']!=0)
						{
						$r['NUMBER_AGREE']=$confirm_states['agree'];
						if ($confirm_states['agree'] == 1)
							$r['_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW']	=jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR,false,false);
						else
							$r['_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW']	=jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW,false,false);
						}
					if ($confirm_states['disagree']!=0)
						{
						$r['NUMBER_DISAGREE']=$confirm_states['disagree'];
						if ($confirm_states['disagree'] == 1)
							$r['_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW']=jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR',_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR,false,false);
						else
							$r['_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW']=jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW,false,false);
						}
					$r['RATING_DATE']=$review['rating_date'];
					$rows[]=$r;
					}
				
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'show_property_reviews.html');
				$this->retVals = $tmpl->getParsedTemplate();
				}
			else
				{
				$output['_JOMRES_REVIEWS_NOREVIEWS']			=jr_gettext('_JOMRES_REVIEWS_NOREVIEWS',_JOMRES_REVIEWS_NOREVIEWS,false,false);
				$output['_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST']	=jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST',_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST,false,false);
				
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'no_reviews_yet.html');
				$this->retVals = $tmpl->getParsedTemplate();
				}
			if ($show_now)
				echo $this->retVals;
				
			
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]						=jr_gettext('_JOMRES_REVIEWS',_JOMRES_REVIEWS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_TITLE',_JOMRES_REVIEWS_TITLE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_DATE',_JOMRES_REVIEWS_DATE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_RATING',_JOMRES_REVIEWS_RATING);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NOREVIEWS',_JOMRES_REVIEWS_NOREVIEWS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST',_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST',_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_IAGREE',_JOMRES_REVIEWS_IAGREE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_IDISAGREE',_JOMRES_REVIEWS_IDISAGREE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING',_JOMRES_REVIEWS_AVERAGE_RATING);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES',_JOMRES_REVIEWS_TOTAL_VOTES);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW',_JOMRES_REVIEWS_ADD_REVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_REVIEWBODY',_JOMRES_REVIEWS_REVIEWBODY);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_REVIEWBODY_SAID',_JOMRES_REVIEWS_REVIEWBODY_SAID);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_PROS',_JOMRES_REVIEWS_PROS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_CONS',_JOMRES_REVIEWS_CONS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE',_JOMRES_REVIEWS_SUBMITTEDDATE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED',_JOMRES_REVIEWS_ALREADYREVIEWED);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_CANNOTREVIEW',_JOMRES_REVIEWS_CANNOTREVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR',_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW',_JOMRES_REVIEWS_THANKS_FOR_REVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM',_JOMRES_REVIEWS_THANKS_FOR_CONFIRM);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ALREADY_CONFIRMED',_JOMRES_REVIEWS_ALREADY_CONFIRMED);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_COMPLETEALLFIELDS',_JOMRES_REVIEWS_COMPLETEALLFIELDS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE',_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION',_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS',_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS',_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING',_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY',_JOMRES_REVIEWS_ADDREVIEW_SUMMARY);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL',_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW',_JOMRES_REVIEWS_REPORT_REVIEW);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL',_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_SUBMIT',_JOMRES_REVIEWS_SUBMIT);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN',_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN);
		$output[]						=jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW',_JOMRES_REVIEWS_CLICKTOSHOW);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>
