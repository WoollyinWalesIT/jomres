<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.15
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_reviews
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;
            $this->shortcode_data = array(
                'task' => 'show_property_reviews',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS',
                'arguments' => array(
						array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID',
                        'arg_example' => '1',
                        ),
						array(
                        'argument' => 'reviews_limit',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT',
                        'arg_example' => '3',
                        ),
                    ),
                );

            return;
        }
        $this->retVals = '';

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $data_only = false;

        $task = jomresGetParam($_REQUEST, 'task', '');
		$modal_wrap = (int)jomresGetParam($_REQUEST, 'modal_wrap', 0);

        $just_added = 0;
        if (isset($_GET[ 'ja' ])) {
            $just_added = (int) $_GET[ 'ja' ];
        }

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int)$componentArgs[ 'property_uid' ];
        } else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
        }
		
		if ($property_uid == 0) {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        if ((int) $jrConfig[ 'use_reviews' ] == 0) {
            return;
        }

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($property_uid);

        $output = array();
        $pageoutput = array();
        $rows = array();
        $this_user_can_review = false;

        $itemReviews = array();
        $itemRating = array();

        $output[ '_JOMRES_REVIEWS' ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false, false);
        $output[ '_JOMRES_REVIEWS_AVERAGE_RATING' ] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING', false, false);
        $output[ '_JOMRES_REVIEWS_TOTAL_VOTES' ] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES', false, false);
        $output[ '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', false, false);
        $output[ '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', false, false);
        $output[ '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM' ] = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', false, false);
        $output[ '_JOMRES_REVIEWS_ALREADY_CONFIRMED' ] = jr_gettext('_JOMRES_REVIEWS_ALREADY_CONFIRMED', '_JOMRES_REVIEWS_ALREADY_CONFIRMED', false, false);
		
		$output[ 'PROPERTY_NAME' ] = $current_property_details->property_name;

        $output[ '_JOMRES_REVIEWS_THANKS_FOR_REVIEW' ] = '';
        $output[ 'SHOW_THANKS' ] = 'false';
        if ($just_added == 1) {
            if ($jrConfig[ 'autopublish_reviews' ] == '1') {
                $output[ '_JOMRES_REVIEWS_THANKS_FOR_REVIEW' ] = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', false, false);
            } elseif (!$thisJRUser->userIsManager) {
                $output[ '_JOMRES_REVIEWS_THANKS_FOR_REVIEW' ] = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', false, false);
            }
            $output[ 'CLASS' ] = 'ui-state-highlight';
            $output[ 'SHOW_THANKS' ] = 'true';
        }

        jr_import('jomres_reviews');
        $Reviews = new jomres_reviews();
        $Reviews->property_uid = $property_uid;
        $this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();
        $itemReviews = $Reviews->showReviews($property_uid);
        $itemRating = $Reviews->showRating($property_uid);
        $this_user_can_review = $Reviews->this_user_can_review();

        $output[ 'AJAXURL' ] = JOMRES_SITEPAGE_URL_AJAX;

        $thumb_up = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/thumb_up.png';
        $thumb_down = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/thumb_down.png';
        $star = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/star.png';
        $add_review_icon = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/add_review.png';

        if ($this_user_can_review_this_property) {
            $url = jomresURL(JOMRES_SITEPAGE_URL.'&task=add_review&amp;property_uid='.$property_uid);
            $output[ '_JOMRES_REVIEWS_ADD_REVIEW' ] = '<div class="align-center"><a href = "'.$url.'" class="btn btn-primary"><i class="icon-plus icon-white"></i> '.jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW', '_JOMRES_REVIEWS_ADD_REVIEW', false, false).'</a></div>';
        } else {
            if (!$thisJRUser->userIsRegistered) {
                $output[ '_JOMRES_REVIEWS_ADD_REVIEW' ] = '<div class="alert alert-info">'.jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', false, false).'</div>';
            } elseif (!$thisJRUser->userIsManager) {
                $output[ '_JOMRES_REVIEWS_ADD_REVIEW' ] = '<div class="alert">'.jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED', '_JOMRES_REVIEWS_ALREADYREVIEWED', false, false).'</div>';
            }
        }

        if ($itemReviews[ 'totalRows' ] > 0) {
            $output[ 'AVERAGE_RATING' ] = number_format($itemRating[ 'avg_rating' ], 1, '.', '');
            $output[ 'NUMBER_OF_REVIEWS' ] = $itemRating[ 'counter' ];
            $site_userids = jomres_cmsspecific_getCMSUsers();
            $review_details = $itemReviews[ 'rating_details' ];

            foreach ($itemReviews[ 'fields' ] as $review) {
                $r = array();
                $r[ '_JOMRES_REVIEWS_IAGREE' ] = jr_gettext('_JOMRES_REVIEWS_IAGREE', '_JOMRES_REVIEWS_IAGREE', false, false);
                $r[ '_JOMRES_REVIEWS_IDISAGREE' ] = jr_gettext('_JOMRES_REVIEWS_IDISAGREE', '_JOMRES_REVIEWS_IDISAGREE', false, false);
                $r[ '_JOMRES_REVIEWS_PROS' ] = jr_gettext('_JOMRES_REVIEWS_PROS', '_JOMRES_REVIEWS_PROS', false, false);
                $r[ '_JOMRES_REVIEWS_CONS' ] = jr_gettext('_JOMRES_REVIEWS_CONS', '_JOMRES_REVIEWS_CONS', false, false);
                $r[ '_JOMRES_REVIEWS_SUBMITTEDDATE' ] = jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE', '_JOMRES_REVIEWS_SUBMITTEDDATE', false, false);
                $r[ '_JOMRES_REVIEWS_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_TITLE', '_JOMRES_REVIEWS_TITLE', false, false);
                $r[ '_JOMRES_REVIEWS_REVIEWBODY_SAID' ] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY_SAID', '_JOMRES_REVIEWS_REVIEWBODY_SAID', false, false);
                $r[ '_JOMRES_REVIEWS_DATE' ] = jr_gettext('_JOMRES_REVIEWS_DATE', '_JOMRES_REVIEWS_DATE', false, false);
                $r[ '_JOMRES_REVIEWS_RATING' ] = jr_gettext('_JOMRES_REVIEWS_RATING', '_JOMRES_REVIEWS_RATING');
                $r[ '_JOMRES_REVIEWS_REPORT_REVIEW' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW', '_JOMRES_REVIEWS_REPORT_REVIEW', false, false);
                $r[ '_JOMRES_REVIEWS_REVIEWED_BY' ] = jr_gettext('_JOMRES_REVIEWS_REVIEWED_BY', '_JOMRES_REVIEWS_REVIEWED_BY', false, false);

                $r[ 'RATING_ID' ] = $review[ 'rating_id' ];
                $r[ 'USERNAME' ] = $site_userids[ $review[ 'user_id' ] ][ 'username' ];
                $r[ 'REVIEW_TITLE' ] = $review[ 'review_title' ];
                $r[ 'REVIEW_DESCRIPTION' ] = $review[ 'review_description' ];
                $r[ 'PROS' ] = $review[ 'pros' ];
                $r[ 'CONS' ] = $review[ 'cons' ];
                $r[ 'RATING' ] = $review[ 'rating' ];
                $r[ 'RATING_STARS' ] = '';
                for ($i = 1; $i <= $review[ 'rating' ]; ++$i) {
                    $r[ 'RATING_STARS' ] .= '<img src="'.$star.'"/>';
                }

                $r[ 'REPORT_REVIEWLINK' ] = '';
                //if ($thisJRUser->userIsRegistered)
                //{
                $r[ 'REPORT_REVIEWLINK' ] = '<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&task=report_review&amp;rating_id='.$r[ 'RATING_ID' ]).'">'.$r[ '_JOMRES_REVIEWS_REPORT_REVIEW' ].'</a>';
                $r[ 'REPORT_URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=report_review&amp;rating_id='.$r[ 'RATING_ID' ]);
                $r[ 'REPORT_TEXT' ] = $r[ '_JOMRES_REVIEWS_REPORT_REVIEW' ];
                //}

                $r[ 'PROPERTY_NAME' ] = $current_property_details->property_name;

                $confirm_states = $Reviews->showConfirm($review[ 'rating_id' ]);

                $rating_detail = array();
                if (array_key_exists($review[ 'rating_id' ], $review_details) && !is_null($review_details[ $review[ 'rating_id' ] ])) {
                    $r[ '_JOMRES_REVIEWS_RATING_1' ] = jr_gettext('_JOMRES_REVIEWS_RATING_1', '_JOMRES_REVIEWS_RATING_1', false, false);
                    $r[ '_JOMRES_REVIEWS_RATING_2' ] = jr_gettext('_JOMRES_REVIEWS_RATING_2', '_JOMRES_REVIEWS_RATING_2', false, false);
                    $r[ '_JOMRES_REVIEWS_RATING_3' ] = jr_gettext('_JOMRES_REVIEWS_RATING_3', '_JOMRES_REVIEWS_RATING_3', false, false);
                    $r[ '_JOMRES_REVIEWS_RATING_4' ] = jr_gettext('_JOMRES_REVIEWS_RATING_4', '_JOMRES_REVIEWS_RATING_4', false, false);
                    $r[ '_JOMRES_REVIEWS_RATING_5' ] = jr_gettext('_JOMRES_REVIEWS_RATING_5', '_JOMRES_REVIEWS_RATING_5', false, false);
                    $r[ '_JOMRES_REVIEWS_RATING_6' ] = jr_gettext('_JOMRES_REVIEWS_RATING_6', '_JOMRES_REVIEWS_RATING_6', false, false);

                    $r[ 'rating_1' ] = $review_details[ $review[ 'rating_id' ] ][ 0 ].'/10';
                    $r[ 'rating_1_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 0 ] * '10';
                    $r[ 'rating_1_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_1_percentage' ]);

                    $r[ 'rating_2' ] = $review_details[ $review[ 'rating_id' ] ][ 1 ].'/10';
                    $r[ 'rating_2_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 1 ] * '10';
                    $r[ 'rating_2_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_2_percentage' ]);

                    $r[ 'rating_3' ] = $review_details[ $review[ 'rating_id' ] ][ 2 ].'/10';
                    $r[ 'rating_3_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 2 ] * '10';
                    $r[ 'rating_3_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_3_percentage' ]);

                    $r[ 'rating_4' ] = $review_details[ $review[ 'rating_id' ] ][ 3 ].'/10';
                    $r[ 'rating_4_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 3 ] * '10';
                    $r[ 'rating_4_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_4_percentage' ]);

                    $r[ 'rating_5' ] = $review_details[ $review[ 'rating_id' ] ][ 4 ].'/10';
                    $r[ 'rating_5_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 4 ] * '10';
                    $r[ 'rating_5_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_5_percentage' ]);

                    $r[ 'rating_6' ] = $review_details[ $review[ 'rating_id' ] ][ 5 ].'/10';
                    $r[ 'rating_6_percentage' ] = $review_details[ $review[ 'rating_id' ] ][ 5 ] * '10';
                    $r[ 'rating_6_progressbar_colour' ] = calc_rating_progressbar_colour($r[ 'rating_6_percentage' ]);
                }
                //if (in_array($Reviews->ip,$confirm_states['confirm_ips']) && $this_user_can_review)

                if ($confirm_states[ 'agree' ] != 0) {
                    $r[ 'NUMBER_AGREE' ] = $confirm_states[ 'agree' ];
                    if ($confirm_states[ 'agree' ] == 1) {
                        $r[ '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', false, false);
                    } else {
                        $r[ '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', false, false);
                    }
                } else {
                    $r[ 'NUMBER_AGREE' ] = '0';
                    $r[ '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', false, false);
                }

                if ($confirm_states[ 'disagree' ] != 0) {
                    $r[ 'NUMBER_DISAGREE' ] = $confirm_states[ 'disagree' ];
                    if ($confirm_states[ 'disagree' ] == 1) {
                        $r[ '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', false, false);
                    } else {
                        $r[ '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', false, false);
                    }
                } else {
                    $r[ 'NUMBER_DISAGREE' ] = '0';
                    $r[ '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', false, false);
                }
                //if (!in_array($Reviews->ip,$confirm_states['confirm_ips']) && $this_user_can_review)
                //{
                $r[ 'THUMB_UP' ] = '<a href ="javascript:void(0);" title="'.$r[ '_JOMRES_REVIEWS_IAGREE' ].'"  onClick="confirm_review('.$review[ 'rating_id' ].',1);" class="btn btn"><img src="'.$thumb_up.'" width="14" height="14"/> '.$r[ 'NUMBER_AGREE' ].'</a>';
                $r[ 'THUMB_DOWN' ] = '<a href ="javascript:void(0);" title="'.$r[ '_JOMRES_REVIEWS_IDISAGREE' ].'"  onClick="confirm_review('.$review[ 'rating_id' ].',0);" class="btn"><img src="'.$thumb_down.'" width="14" height="14"/> '.$r[ 'NUMBER_DISAGREE' ].'</a>';
                //}

                $r[ 'RATING_DATE' ] = $review[ 'rating_date' ];

                // Rating Schema

                $r[ 'RATING_DATE_META' ] = date('Y-m-d', strtotime($review[ 'rating_date' ]));
                $r[ 'RATING_SCHEMA_WORSTRATING' ] = min($review_details[ $review[ 'rating_id' ] ]);
                $r[ 'RATING_SCHEMA_BESTRATING' ] = max($review_details[ $review[ 'rating_id' ] ]);
                $sum = array_sum($review_details[ $review[ 'rating_id' ] ]);
                $count = count($review_details[ $review[ 'rating_id' ] ]);
                $r[ 'RATING_SCHEMA_RATINGVALUE' ] = $sum / $count;

                $rows[ ] = $r;
            }

			if (!isset($_REQUEST['reviews_limit']) ) {
				if (!isset($jrConfig[ 'reviews_limit' ])) {
					$jrConfig[ 'reviews_limit' ] = 2;
				}
				$reviews_limit = $jrConfig[ 'reviews_limit' ];
			} else {
				$reviews_limit = (int)jomresGetParam($_REQUEST, 'reviews_limit', 0);
			}

			$showall = array();
			$show_fullpage_link = false;
			if ( $reviews_limit < count($rows) ) {
				
				$showall[] = array ( 
					"TEXT" => jr_gettext('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', false, false) ,
					"LINK" => jomresURL(JOMRES_SITEPAGE_URL."&task=show_property_reviews&property_uid=".$property_uid."&reviews_limit=". count($rows)) 
					);
			}

			$rows = array_slice($rows, 0, $reviews_limit);
			
            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
			$tmpl->addRows('showall', $showall);
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('show_property_reviews.html');
            $this->retVals = $tmpl->getParsedTemplate();
        } else {
            $output[ '_JOMRES_REVIEWS_NOREVIEWS' ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS', '_JOMRES_REVIEWS_NOREVIEWS', false, false);
            $output[ '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST' ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', false, false);

            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('no_reviews_yet.html');
            $this->retVals = $tmpl->getParsedTemplate();
        }
        if ($output_now) {
            echo $this->retVals;
        }
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_TITLE', '_JOMRES_REVIEWS_TITLE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_DATE', '_JOMRES_REVIEWS_DATE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING', '_JOMRES_REVIEWS_RATING');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS', '_JOMRES_REVIEWS_NOREVIEWS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_IAGREE', '_JOMRES_REVIEWS_IAGREE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_IDISAGREE', '_JOMRES_REVIEWS_IDISAGREE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_AVERAGE_RATING', '_JOMRES_REVIEWS_AVERAGE_RATING');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_TOTAL_VOTES', '_JOMRES_REVIEWS_TOTAL_VOTES');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW', '_JOMRES_REVIEWS_ADD_REVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY', '_JOMRES_REVIEWS_REVIEWBODY');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY_SAID', '_JOMRES_REVIEWS_REVIEWBODY_SAID');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_PROS', '_JOMRES_REVIEWS_PROS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_CONS', '_JOMRES_REVIEWS_CONS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE', '_JOMRES_REVIEWS_SUBMITTEDDATE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ALREADYREVIEWED', '_JOMRES_REVIEWS_ALREADYREVIEWED');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_CANNOTREVIEW', '_JOMRES_REVIEWS_CANNOTREVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '_JOMRES_REVIEWS_THANKS_FOR_REVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ALREADY_CONFIRMED', '_JOMRES_REVIEWS_ALREADY_CONFIRMED');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_COMPLETEALLFIELDS', '_JOMRES_REVIEWS_COMPLETEALLFIELDS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING', '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW', '_JOMRES_REVIEWS_REPORT_REVIEW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_SUBMIT', '_JOMRES_REVIEWS_SUBMIT');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW', '_JOMRES_REVIEWS_CLICKTOSHOW');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_1', '_JOMRES_REVIEWS_RATING_1');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_2', '_JOMRES_REVIEWS_RATING_2');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_3', '_JOMRES_REVIEWS_RATING_3');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_4', '_JOMRES_REVIEWS_RATING_4');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_5', '_JOMRES_REVIEWS_RATING_5');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_RATING_6', '_JOMRES_REVIEWS_RATING_6');
        $output[ ] = jr_gettext('_JOMRES_REVIEWS_REVIEWED_BY', '_JOMRES_REVIEWS_REVIEWED_BY');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
