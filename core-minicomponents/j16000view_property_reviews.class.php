<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000view_property_reviews
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $output = array();
        $pageoutput = array();
        $rows = array();

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = $componentArgs[ 'property_uid' ];
        } else {
            $property_uid = jomresGetParam($_REQUEST, 'property_uid', 0);
        }

        $output[ 'PROPERTY_NAME' ] = getPropertyName($property_uid);

        jr_import('jomres_reviews');
        $Reviews = new jomres_reviews();
        $all_reviews = $Reviews->get_all_reviews_index_by_property_uid();

        if (is_array($all_reviews) && !empty($all_reviews)) {
            $property_reviews = $all_reviews[ $property_uid ];
            $all_reports = $Reviews->get_all_reports_index_by_rating_id();
            $all_users = jomres_cmsspecific_getCMSUsers();
        } else {
            $property_reviews = array();
            $all_reports = array();
            $all_users = array();
        }

        $unpublish_icon = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Tick.png';
        $publish_icon = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Cancel.png';
        $delete_icon = get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/WasteBasket.png';

        $output[ 'UNPUBLISH_IMAGE' ] = $unpublish_icon;
        $output[ 'PUBLISH_IMAGE' ] = $publish_icon;
        $output[ 'AJAXURL' ] = JOMRES_SITEPAGE_URL_ADMIN.'&format=raw&no_html=1';
        $output[ 'HPROPERTYNAME' ] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false);
        $output[ 'PROPERTY_UID' ] = $property_uid;

        $output[ '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW' ] = jr_gettext('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', false);
        $output[ '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW' ] = jr_gettext('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', false);
        $output[ '_JOMRES_MR_AUDIT_LISTING_USER' ] = jr_gettext('_JOMRES_MR_AUDIT_LISTING_USER', '_JOMRES_MR_AUDIT_LISTING_USER', false);
        $output[ '_JOMRES_REVIEWS_SUBMITTEDDATE' ] = jr_gettext('_JOMRES_REVIEWS_SUBMITTEDDATE', '_JOMRES_REVIEWS_SUBMITTEDDATE', false);
        $output[ '_JOMRES_REVIEWS_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_TITLE', '_JOMRES_REVIEWS_TITLE', false);
        $output[ '_JOMRES_REVIEWS_REVIEWBODY_SAID' ] = jr_gettext('_JOMRES_REVIEWS_REVIEWBODY_SAID', '_JOMRES_REVIEWS_REVIEWBODY_SAID', false);
        $output[ '_JOMRES_REVIEWS_PROS' ] = jr_gettext('_JOMRES_REVIEWS_PROS', '_JOMRES_REVIEWS_PROS', false);
        $output[ '_JOMRES_REVIEWS_CONS' ] = jr_gettext('_JOMRES_REVIEWS_CONS', '_JOMRES_REVIEWS_CONS', false);
        $output[ '_JOMRES_REVIEWS_RATING' ] = jr_gettext('_JOMRES_REVIEWS_RATING', '_JOMRES_REVIEWS_RATING', false);
        $output[ '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', false);
        $output[ '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', false);

        foreach ($property_reviews as $review) {
            $r = array();

            $r[ 'rating_id' ] = $review[ 'rating_id' ];
            $r[ 'user_id' ] = $all_users[ $review[ 'user_id' ] ][ 'username' ];
            $r[ 'review_title' ] = $review[ 'review_title' ];
            $r[ 'review_description' ] = $review[ 'review_description' ];
            $r[ 'pros' ] = $review[ 'pros' ];
            $r[ 'cons' ] = $review[ 'cons' ];
            $r[ 'rating' ] = $review[ 'rating' ];
            $r[ 'rating_date' ] = $review[ 'rating_date' ];
            $r[ 'published' ] = $review[ 'published' ];

            $r[ 'reports' ] = '';
            if (isset($all_reports[ $r[ 'rating_id' ] ])) {
                $review_reports = $all_reports[ $r[ 'rating_id' ] ];
                foreach ($review_reports as $report) {
                    $report_userid = $all_users[ $report[ 'user_id' ] ][ 'username' ];
                    $r[ 'reports' ] .= jr_gettext('_JOMRES_REVIEWS_REPORT_CREATED_BY', '_JOMRES_REVIEWS_REPORT_CREATED_BY', false).$report_userid.' '.$report[ 'report_date' ].'<br/>'.$report[ 'report' ];
                }
            }

            $r[ 'publish_icon' ] = $unpublish_icon;
            if ($r[ 'published' ] == 0) {
                $r[ 'publish_icon' ] = $publish_icon;
            }

            $r[ 'delete_icon' ] = $delete_icon;

            $r[ 'row_id' ] = 'rating_id'.$r[ 'rating_id' ];

            $rows[ ] = $r;
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('view_property_reviews.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
