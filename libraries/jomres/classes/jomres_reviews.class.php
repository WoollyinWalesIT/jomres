<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.28
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

//Originally based on Xoriant Reviews by Manish Khanchandani http://www.phpclasses.org/browse/package/5542.html, it's been hugely rewritten for use in Jomres.

defined('_JOMRES_INITCHECK') or die('');

class jomres_reviews
{
    private static $instance;

    public function __construct()
    {
        $this->db_prefix = get_showtime('dbprefix');
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $this->ip = $this->processString($_SERVER[ 'REMOTE_ADDR' ]);
        $this->userid = $thisJRUser->id;
        $this->property_uid = 0;
        $this->review_fields_note = "Field 1 Hospitality , Field 2 Location , Field 3 Cleanliness , Field 4 Accommodation , Field 5 Value for money , Field 6 Services ";
    }

    public function this_user_can_report()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        if ($thisJRUser->userIsRegistered) {
            return true;
        }

        return false;
    }

    public function this_user_can_review()
    {
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $can_post = false;
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        // This test mode allows property managers to make reviews where normally they wouldn't be allowed to.
        if ($jrConfig[ 'reviews_test_mode' ] == '1') {
            if ($thisJRUser->userIsRegistered) {
                $can_post = true;
            }
        } else {
            if (!$thisJRUser->userIsManager && $thisJRUser->userIsRegistered) {
                $can_post = true;
            }
        }

        return $can_post;
    }

    public function this_user_can_review_this_property()
    {
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        // This test mode allows property managers to make reviews where normally they wouldn't be allowed to.
        if ($jrConfig[ 'reviews_test_mode' ] == '1' && $thisJRUser->userIsRegistered) {
            return true;
        }
        if ($this->property_uid == 0) {
            return false;
        }
        if (!$thisJRUser->userIsRegistered) {
            return false;
        }
        if ($thisJRUser->userIsManager) {
            return false;
        }

        if ($jrConfig[ 'only_guests_can_review' ] == '1') {
            $sql = 'SELECT count(guests_uid) FROM #__jomres_guests WHERE property_uid = '.(int) $this->property_uid.' and mos_userid = '.(int) $this->userid.' ';
            $guestcount = (int) doSelectSql($sql, 1);
            if ($guestcount != 1) {
                return false;
            }
        }

        $sql = 'SELECT count(rating_id) as cnt1 FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid." and rating_ip = '".$this->ip."' ";
        $sql .= 'UNION SELECT count(rating_id) as cnt2 FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid.' and user_id = '.(int) $this->userid.' ';
        $result = doSelectSql($sql);
        if (count($result == 0)) {
            return true;
        }

        return false;
    }

    public function save_confirmation($rating_id, $state)
    {
        $property_uid = $this->get_property_uid_for_rating_id($rating_id);
        if ($property_uid && $rating_id > 0) {
            $query = 'INSERT INTO #__jomres_reviews_ratings_confirm SET
				`item_id` = ' .(int) $this->property_uid.',
				`rating_id`=' .(int) $rating_id.',
				`confirm_user_id`=' .(int) $this->userid.',
				`confirm`=' .(int) $state.",
				`confirm_ip`='" .$this->ip."',
				`confirm_date`='" .date('Y-m-d H:i:s')."'
			";
            $result = doInsertSql($query);
            if ($result) {
                return $result;
            }
        }

        return false;
    }

    public function save_review($rating, $title, $description, $pros, $cons)
    {
        $published = 0;
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        if ($jrConfig[ 'autopublish_reviews' ] == '1') {
            $published = 1;
        }
        $query = "INSERT INTO #__jomres_reviews_ratings SET
			user_id='" .(int) $this->userid."',
			item_id='" .(int) $this->property_uid."',
			rating='" .(int) $rating."',
			rating_ip='" .$this->ip."',
			rating_date='" .date('Y-m-d H:i:s')."',
			review_title='" .trim($title)."',
			review_description='" .trim($description)."',
			pros='" .trim($pros)."',
			cons='" .trim($cons)."',
			published = " .$published.'
			';
        $result = doInsertSql($query, '');
        if ($result>0) {
            
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'review_saved';
            $webhook_notification->webhook_event_description    = 'Logs when a review is added.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->property_uid           = $this->property_uid;
            $webhook_notification->data->review_uid             = $result;
            add_webhook_notification($webhook_notification);
            
            return $result;
        }

        return false;
    }

    public function save_review_report($rating_id, $report)
    {
        $query = "INSERT INTO #__jomres_reviews_reports SET
			`rating_id`='" .(int) $rating_id."',
			`user_id`=" .(int) $this->userid.",
			`report`='" .(string) $report."',
			`report_date`='" .date('Y-m-d H:i:s')."'
			";
        $result = doInsertSql($query, '');
        if ($result) {
            return $result;
        }

        return false;
    }

    public function delete_review($rating_id)
    {
        if ((int) $rating_id > 0) {
            $query = 'DELETE FROM #__jomres_reviews_ratings WHERE `rating_id`='.(int) $rating_id.'';
            $result = doInsertSql($query, '');
            if ($result) {
                $query = 'DELETE FROM #__jomres_reviews_ratings_confirm WHERE `rating_id`='.(int) $rating_id.'';
                $result = doInsertSql($query, '');
                if ($result) {
                    $all_reports = $this->get_all_reports_index_by_rating_id();
                    if (isset($all_reports[ $rating_id ])) {
                        $query = 'DELETE FROM #__jomres_reviews_reports WHERE `rating_id`='.(int) $rating_id.'';
                        $result = doInsertSql($query, '');
                    }
                }
                $query = 'DELETE FROM #__jomres_reviews_ratings_detail WHERE `rating_id`='.(int) $rating_id.'';
                $result = doInsertSql($query, '');
                if ($result) {
                    
                    $webhook_notification                               = new stdClass();
                    $webhook_notification->webhook_event                = 'review_deleted';
                    $webhook_notification->webhook_event_description    = 'Logs when a review is added.';
                    $webhook_notification->webhook_event_plugin         = 'core';
                    $webhook_notification->data                         = new stdClass();
                    $webhook_notification->data->property_uid           = $this->property_uid;
                    $webhook_notification->data->review_uid             = $rating_id;
                    add_webhook_notification($webhook_notification);
            
                    return true;
                }
            }
        } else {
            return false;
        }
    }

    public function publish_review($rating_id)
    {
        $query = 'UPDATE #__jomres_reviews_ratings SET published = 1 WHERE rating_id = '.$rating_id;
        $result = doInsertSql($query, '');
        if ($result) {
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'review_published';
            $webhook_notification->webhook_event_description    = 'Logs when a review is added.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->property_uid           = $this->property_uid;
            $webhook_notification->data->review_uid              = $rating_id;
            add_webhook_notification($webhook_notification);
            return true;
        } else {
            return false;
        }
    }

    public function unpublish_review($rating_id)
    {
        $query = 'UPDATE #__jomres_reviews_ratings SET published = 0 WHERE rating_id = '.$rating_id;
        $result = doInsertSql($query, '');
        if ($result) {
            $webhook_notification                               = new stdClass();
            $webhook_notification->webhook_event                = 'review_unpublished';
            $webhook_notification->webhook_event_description    = 'Logs when a review is added.';
            $webhook_notification->webhook_event_plugin         = 'core';
            $webhook_notification->data                         = new stdClass();
            $webhook_notification->data->property_uid           = $this->property_uid;
            $webhook_notification->data->review_uid              = $rating_id;
            add_webhook_notification($webhook_notification);
            return true;
        } else {
            return false;
        }
    }

    private function processString($text)
    {
        return addslashes(stripslashes(trim($text)));
    }

    public function get_all_reviews_index_by_property_uid()
    {
        $reviews = array();
        $query = 'SELECT * FROM #__jomres_reviews_ratings ORDER BY rating_date';
        $result = DoSelectSql($query);
        if (count($result) > 0) {
            foreach ($result as $res) {
                $property_uid = $res->item_id;
                $reviews[ $property_uid ][ $res->rating_id ][ 'rating_id' ] = $res->rating_id;
                $reviews[ $property_uid ][ $res->rating_id ][ 'property_uid' ] = $res->item_id;
                $reviews[ $property_uid ][ $res->rating_id ][ 'user_id' ] = $res->user_id;
                $reviews[ $property_uid ][ $res->rating_id ][ 'review_title' ] = $res->review_title;
                $reviews[ $property_uid ][ $res->rating_id ][ 'review_description' ] = $res->review_description;
                $reviews[ $property_uid ][ $res->rating_id ][ 'pros' ] = $res->pros;
                $reviews[ $property_uid ][ $res->rating_id ][ 'cons' ] = $res->cons;
                $reviews[ $property_uid ][ $res->rating_id ][ 'rating' ] = $res->rating;
                $reviews[ $property_uid ][ $res->rating_id ][ 'rating_ip' ] = $res->rating_ip;
                $reviews[ $property_uid ][ $res->rating_id ][ 'rating_date' ] = $res->rating_date;
                $reviews[ $property_uid ][ $res->rating_id ][ 'published' ] = $res->published;
            }
        }

        return $reviews;
    }

    public function validateData($record)
    {
        if (!isset($record[ 'rating' ])) {
            throw new Exception('Rating is empty. ');
        }
        if (empty($record[ 'review_title' ])) {
            throw new Exception('Rating Title is empty. ');
        }

        return true;
    }

    public function checkRatingUniqueIp()
    {
        $sql = 'SELECT count(*) FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid." and rating_ip = '".$this->ip."'";
        $result = doSelectSql($sql, 1);

        return $result;
    }

    public function checkRatingUniqueUser()
    {
        $sql = 'SELECT count(*) as cnt FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid.' and user_id = '.(int) $this->userid.' ';
        $result = doSelectSql($sql, 1);

        return $result;
    }

    public function checkConfirmUniqueIp($rating_id)
    {
        $sql = 'SELECT count(*) as cnt FROM #__jomres_reviews_ratings_confirm WHERE item_id = '.(int) $this->property_uid." and confirm_ip = '".$this->ip."' and rating_id = '".(int) $rating_id."'";
        $result = doSelectSql($sql, 1);

        return $result;
    }

    public function checkConfirmUniqueUser($rating_id)
    {
        $sql = 'SELECT count(*) as cnt FROM #__jomres_reviews_ratings_confirm WHERE item_id = '.(int) $this->property_uid.' and confirm_user_id = '.$this->userid.' and rating_id = '.(int) $rating_id.' ';
        $result = doSelectSql($sql, 1);

        return $result;
    }

    public function getRatingsMulti($property_uids)
    {
        if (!isset($this->multi_query_result)) {
            $this->multi_query_result = array();
        }
        $sql = 'SELECT item_id, AVG(rating) as avg_rating, COUNT(rating) as counter, SUM(rating) as sumrating FROM #__jomres_reviews_ratings WHERE item_id IN ('.jomres_implode($property_uids).') AND published = 1 GROUP BY item_id';
        $result = doSelectSql($sql);
        $arr = array();
        if (count($result) > 0) {
            foreach ($result as $res) {
                $arr[ $res->item_id ][ 'property_uid' ] = $res->item_id;
                $arr[ $res->item_id ][ 'avg_rating' ] = $res->avg_rating;
                $arr[ $res->item_id ][ 'counter' ] = $res->counter;
                $arr[ $res->item_id ][ 'sumrating' ] = $res->sumrating;
            }
        }
        foreach ($property_uids as $property_uid) {
            if (isset($arr[ $property_uid ])) {
                $this->multi_query_result[ $property_uid ] = $arr[ $property_uid ];
            } else {
                $this->multi_query_result[ $property_uid ][ 'property_uid' ] = $property_uid;
                $this->multi_query_result[ $property_uid ][ 'avg_rating' ] = 0;
                $this->multi_query_result[ $property_uid ][ 'counter' ] = 0;
                $this->multi_query_result[ $property_uid ][ 'sumrating' ] = 0;
            }
        }
    }

    public function showRating($item_id)
    {
        if (!isset($this->multi_query_result[ $item_id ])) {
            $arr = array();
            $sql = 'SELECT item_id, AVG(rating) as avg_rating, COUNT(rating) as counter, SUM(rating) as sumrating FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid.' AND published = 1 GROUP BY item_id';
            $result = doSelectSql($sql);
            if (count($result) > 0) {
                foreach ($result as $res) {
                    $arr[ 'property_uid' ] = $res->item_id;
                    $arr[ 'avg_rating' ] = $res->avg_rating;
                    $arr[ 'counter' ] = $res->counter;
                    $arr[ 'sumrating' ] = $res->sumrating;
                }
            } else {
                $arr[ 'property_uid' ] = $this->property_uid;
                $arr[ 'avg_rating' ] = 0;
                $arr[ 'counter' ] = 0;
                $arr[ 'sumrating' ] = 0;
            }
        } else {
            $arr = $this->multi_query_result[ $item_id ];
        }

        return $arr;
    }

    public function showReviews($item_id, $max = -1, $pageNum = 0)
    {
        $return = array();
        $confirm = array();
        $arr = array();

        $sql = 'SELECT item_id, rating_id, AVG(confirm) as avg_rating, COUNT(confirm) as counter, SUM(confirm) as total FROM #__jomres_reviews_ratings_confirm WHERE item_id = '.(int) $this->property_uid.' GROUP BY rating_id';
        $rs = doSelectSql($sql);
        foreach ($rs as $r) {
            $confirm[ $r->rating_id ] = $r->rating_id;
        }

        $rating_details = array();
        $sql = 'SELECT rating_id, detail_rating FROM #__jomres_reviews_ratings_detail WHERE `item_id` = '.(int) $this->property_uid.' ';
        $rs = doSelectSql($sql);
        foreach ($rs as $r) {
            $rating_details[ $r->rating_id ][ ] = $r->detail_rating;
        }

        if ($max == '-1') {
            $sql = 'SELECT * FROM #__jomres_reviews_ratings WHERE item_id = '.(int) $this->property_uid.' AND published = 1 order by rating_date desc';
            $rs = doSelectSql($sql);

            $return[ 'totalRows' ] = count($rs);
            $return[ 'max' ] = $max;
            $return[ 'pageNum' ] = $pageNum;
            $startRow = $pageNum * $max;
            $return[ 'startRow' ] = $startRow;
            $totalPages = 0;
            $return[ 'totalPages' ] = $totalPages;
        }

        foreach ($rs as $r) {
            $arr = array();
            foreach ($r as $key => $val) {
                $arr[ $key ] = $val;
            }
            $rating_id = $r->rating_id;
            $return[ 'fields' ][ $arr[ 'rating_id' ] ] = $arr;
            if (isset($confirm[ $arr[ 'rating_id' ] ])) {
                $return[ 'confirm' ][ $arr[ 'rating_id' ] ] = $confirm[ $arr[ 'rating_id' ] ];
            } else {
                $return[ 'confirm' ][ $arr[ 'rating_id' ] ] = array();
            }

            $return[ 'rating_details' ][ $arr[ 'rating_id' ] ] = $rating_details[ $arr[ 'rating_id' ] ];
        }

        return $return;
    }

    public function showConfirm($rating_id)
    {
        $arr = array('agree' => 0, 'disagree' => 0, 'confirm_ips' => array());
        $sql = 'SELECT confirm,confirm_ip FROM #__jomres_reviews_ratings_confirm WHERE item_id = '.(int) $this->property_uid.' and rating_id = '.(int) $rating_id.' ';
        $result = doSelectSql($sql);
        foreach ($result as $res) {
            $arr[ 'confirm_ips' ][ ] = $res->confirm_ip;
            if ((int) $res->confirm == 1) {
                $arr[ 'agree' ]++;
            } else {
                $arr[ 'disagree' ]++;
            }
        }

        return $arr;
    }

    public function get_property_uid_for_rating_id($rating_id)
    {
        $query = 'SELECT item_id FROM #__jomres_reviews_ratings WHERE `rating_id` = '.(int) $rating_id.' LIMIT 1';

        return doSelectSql($query, 1);
    }

    public function get_all_reports_index_by_rating_id()
    {
        $reports = array();
        $query = 'SELECT * FROM #__jomres_reviews_reports';
        $result = doSelectSql($query);
        if (count($result) > 0) {
            foreach ($result as $res) {
                $rating_id = $res->rating_id;
                $reports[ $rating_id ][ $res->report_id ][ 'report_id' ] = $res->report_id;
                $reports[ $rating_id ][ $res->report_id ][ 'rating_id' ] = $res->rating_id;
                $reports[ $rating_id ][ $res->report_id ][ 'user_id' ] = $res->user_id;
                $reports[ $rating_id ][ $res->report_id ][ 'report' ] = $res->report;
                $reports[ $rating_id ][ $res->report_id ][ 'report_date' ] = $res->report_date;
            }
        }

        return $reports;
    }

    public function save_rating_detail($property_uid, $rating_id, $rating_1, $rating_2, $rating_3, $rating_4, $rating_5, $rating_6)
    {
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.', `rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_1.'';
        $result = doInsertSql($query, '');
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.',`rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_2.'';
        $result = doInsertSql($query, '');
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.',`rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_3.'';
        $result = doInsertSql($query, '');
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.',`rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_4.'';
        $result = doInsertSql($query, '');
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.',`rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_5.'';
        $result = doInsertSql($query, '');
        $query = 'INSERT INTO #__jomres_reviews_ratings_detail SET `item_id`='.(int) $property_uid.',`rating_id` = '.(int) $rating_id.',`detail_rating`='.(int) $rating_6.'';
        $result = doInsertSql($query, '');
    }

    // public function get_highest_rated_and_ratings($limit)
    // {
    // $query = "SELECT * FROM #__jomres_reviews_ratings ORDER BY item_id";
    // $result = doSelectSql($query);
    // if (count($result)>0)
    // {
    // foreach ($result as $res)
    // {

    // }
    // }
    // else
    // return false;
    // }
}
