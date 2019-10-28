<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000ajax_shortlist
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$property_uid = (int) jomresGetParam($_GET, 'property_uid', 0);
		$show_label = (int) jomresGetParam($_GET, 'show_label', 0);
		$result = '';

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$shortlist_items = array();
		if (isset($tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ])) {
			$shortlist_items = $tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ];
		}

		if (!in_array($property_uid, $shortlist_items)) {
			$shortlist_items[ ] = $property_uid;
			$tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ] = $shortlist_items;

			$output = array();
			$pageoutput = array();
			$output['TEXT'] = jr_gettext('_JOMRES_REMOVEFROMSHORTLIST', '_JOMRES_REMOVEFROMSHORTLIST', false, false);
			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			if ($show_label == 1) {
				$tmpl->readTemplatesFromInput('shortlilst_added_text.html');
			} else {
				$tmpl->readTemplatesFromInput('shortlilst_added.html');
			}
			$tmpl->addRows('pageoutput', $pageoutput);
			$result = $tmpl->getParsedTemplate();

			if ($thisJRUser->userIsRegistered) {
				$query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int) $property_uid."' AND `my_id` = '".(int) $thisJRUser->id."'";
				$propys = doSelectSql($query);

				if (empty($propys)) {
					$query = "INSERT INTO #__jomcomp_mufavourites (`my_id`,`property_uid`) VALUES ('".(int) $thisJRUser->id."','".(int) $property_uid."')";
					doInsertSql($query, '');
				}
			}
		} else { // Remove from shortlist
			$count = count($shortlist_items);
			if ($count > 0) {
				for ($i = 0; $i < $count; ++$i) {
					if ($shortlist_items[ $i ] == $property_uid) {
						array_splice($shortlist_items, $i, 1);
					}
				}
			}
			$tmpBookingHandler->tmpsearch_data[ 'shortlist_items' ] = $shortlist_items;

			$output = array();
			$pageoutput = array();
			$output['TEXT'] = jr_gettext('_JOMRES_ADDTOSHORTLIST', '_JOMRES_ADDTOSHORTLIST', false, false);
			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			if ($show_label == 1) {
				$tmpl->readTemplatesFromInput('shortlist_removed_text.html');
			} else {
				$tmpl->readTemplatesFromInput('shortlist_removed.html');
			}
			$tmpl->addRows('pageoutput', $pageoutput);
			$result = $tmpl->getParsedTemplate();

			if ($thisJRUser->userIsRegistered) {
				$query = "SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int) $property_uid."' AND `my_id` = '".(int) $thisJRUser->id."'";
				$propys = doSelectSql($query);
				if (count($propys) == 1) {
					$query = "DELETE FROM #__jomcomp_mufavourites WHERE `my_id`='".(int) $thisJRUser->id."' AND `property_uid`='".(int) $property_uid."'";
					doInsertSql($query, '');
				}
			}
		}

		echo $result;
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
