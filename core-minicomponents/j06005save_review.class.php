<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06005save_review
{
    public function __construct()
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($_GET[ 'property_uid' ])) {
            $property_uid = get_showtime('property_uid');
        } else {
            $property_uid = (int) $_POST[ 'property_uid' ];
        }
        //var_dump($_POST);exit;
        $rating_1 = (int) jomresGetParam($_POST, 'rating_1', 0);
        $rating_2 = (int) jomresGetParam($_POST, 'rating_2', 0);
        $rating_3 = (int) jomresGetParam($_POST, 'rating_3', 0);
        $rating_4 = (int) jomresGetParam($_POST, 'rating_4', 0);
        $rating_5 = (int) jomresGetParam($_POST, 'rating_5', 0);
        $rating_6 = (int) jomresGetParam($_POST, 'rating_6', 0);

        $review_title = jomresGetParam($_POST, 'review_title', '');
        $review_description = jomresGetParam($_POST, 'review_description', '');
        $pros = jomresGetParam($_POST, 'pros', '');
        $cons = jomresGetParam($_POST, 'cons', '');

        // We won't pass a message back, the only way the user will have got this far is if they've bypassed the javascript or don't have javascript enabled.
        // Either way, they've bypassed the methods we've built to guide them through the submission process. We can still take a valid submission, but we won't take invalid ones.
        if (($rating_1 < 1 || $rating_1 > 10) || ($rating_2 < 1 || $rating_2 > 10) || ($rating_3 < 1 || $rating_3 > 10) || ($rating_4 < 1 || $rating_4 > 10) || ($rating_5 < 1 || $rating_5 > 10) || ($rating_6 < 1 || $rating_6 > 10) || $review_title == '' || $review_description == '' || $pros == '' || $cons == '') {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=add_review&property_uid='.$property_uid), '');
        }

        //property_header($property_uid);

        if ($jrConfig[ 'use_reviews' ] == '1' && $property_uid > 0) {
            $output = array();
            $pageoutput = array();
            $rows = array();

            jr_import('jomres_reviews');
            $Reviews = new jomres_reviews();
            $Reviews->property_uid = $property_uid;

            $this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();

            if ($this_user_can_review_this_property) {
                $overall_rating = (int) ($rating_1 + $rating_2 + $rating_3 + $rating_4 + $rating_5 + $rating_6) / 6;

                $rating_id = $Reviews->save_review($overall_rating, $review_title, $review_description, $pros, $cons);
                $Reviews->save_rating_detail($property_uid, $rating_id, $rating_1, $rating_2, $rating_3, $rating_4, $rating_5, $rating_6);

                if ($jrConfig[ 'autopublish_reviews' ] == '1') {
                    $thanks = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', false, false);
                } else {
                    $thanks = jr_gettext('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', false, false);
                }

                $saveMessage = $thanks;
                $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');
                $jomres_messaging->set_message($saveMessage);

                $property_name = getPropertyName($property_uid);
                $subject = jr_gettext('JOMRES_NEWREVIEW_SUBJECT', 'JOMRES_NEWREVIEW_SUBJECT', false).' '.$property_name;
                $message = jr_gettext('JOMRES_NEWREVIEW_MESSAGE', 'JOMRES_NEWREVIEW_MESSAGE', false).' '.$property_name.'  '.JOMRES_SITEPAGE_URL_ADMIN.'&task=view_property_reviews&property_uid='.(int) $property_uid.' <br/><br/>';
                sendAdminEmail($subject, $message);

                jomresRedirect(get_property_details_url($property_uid), '');
                exit;
            } else {
                echo jr_gettext('_JOMRES_REVIEWS_CANNOTREVIEW', '_JOMRES_REVIEWS_CANNOTREVIEW');
            }
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
