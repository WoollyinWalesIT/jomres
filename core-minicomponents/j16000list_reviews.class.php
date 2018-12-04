<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.15.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000list_reviews
{
	public function __construct()
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

		//get all properties in system
		$all_properties_in_system = get_showtime('all_properties_in_system');

		//get all property names
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->get_property_name_multi($all_properties_in_system);

		$output[ '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO' ] = jr_gettext('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', false);
		$output[ '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED' ] = jr_gettext('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', false);
		$output[ '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL' ] = jr_gettext('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', false);
		$output[ '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE' ] = jr_gettext('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', false);
		$output[ '_JOMRES_REVIEWS' ] = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false);
		$output[ 'HPROPERTYNAME' ] = jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', false);

		$editIcon = '<img src="'.JOMRES_IMAGES_RELPATH.'jomresimages/small/EditItem.png" border="0" alt="editicon" />';

		jr_import('jomres_reviews');
		$Reviews = new jomres_reviews();
		$all_reviews = $Reviews->get_all_reviews_index_by_property_uid();
		$all_reports = $Reviews->get_all_reports_index_by_rating_id();
		$total_number_of_reports = count($all_reports);

		foreach ($all_properties_in_system as $property_uid) {
			$r = array();
			$r[ 'PROPERTYNAME' ] = $basic_property_details->property_names[$property_uid];

			if (!using_bootstrap()) {
				$r[ 'VIEWLINK' ] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=view_property_reviews&property_uid='.(int) $property_uid.'">'.$editIcon.'</a>';
			} else {
				$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
				$toolbar->newToolbar();
				$toolbar->addItem('fa fa-list', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=view_property_reviews&property_uid='.$property_uid), jr_gettext('_JOMRES_REVIEWS_CLICKTOSHOW', '_JOMRES_REVIEWS_CLICKTOSHOW', false));

				$r['VIEWLINK'] = $toolbar->getToolbar();
			}

			$review_count = 0;
			$unpublished_count = 0;
			$report_count = 0;
			foreach ($all_reviews as $property_reviews) {
				foreach ($property_reviews as $review) {
					$rating_id = $review[ 'rating_id' ];
					if ($review[ 'property_uid' ] == $property_uid) {
						if (isset($all_reports[ $rating_id ])) {
							$report_count = count($all_reports[ $rating_id ]);
						}
						++$review_count;
						if ($review[ 'published' ] == 0) {
							$unpublished_count++;
						}
					}
				}
			}

			$r[ 'row_class' ] = '';
			if (!using_bootstrap()) {
				if ($review_count > 0) {
					$r[ 'row_class' ] = 'ui-state-highlight';
				}
				if ($unpublished_count > 0) {
					$r[ 'row_class' ] = 'ui-state-error';
				}
			} else {
				if ($review_count > 0) {
					$r[ 'row_class' ] = 'alert alert-info';
				}
				if ($unpublished_count > 0) {
					$r[ 'row_class' ] = 'alert';
				}
			}

			$r[ 'NUMBERUNPUBLISHED' ] = $unpublished_count;
			$r[ 'NUMBERTOTAL' ] = $review_count;
			$r[ 'REPORTTOTAL' ] = $report_count;

			$rows[ ] = $r;
		}

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_reviews_propertys.html');
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
