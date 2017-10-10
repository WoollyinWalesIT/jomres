<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.14
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_reviews_overview
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
		$this->retVals = '';

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
		
		if ((int) $jrConfig['use_reviews'] != 1) {
			return;
		}

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $pageoutput = array();

		//reviews
		$query = 'SELECT COUNT(`rating_id`) AS reviews_count FROM #__jomres_reviews_ratings';
		$reviews_count = (int) doSelectSql($query, 1);
		
		$query = 'SELECT COUNT(`report_id`) AS report_count FROM #__jomres_reviews_reports';
		$report_count = (int) doSelectSql($query, 1);

		$query = 'SELECT COUNT(`rating_id`) AS unpublished_count FROM #__jomres_reviews_ratings WHERE `published` = 0 ';
		$unpublished_count = (int) doSelectSql($query, 1);
		
		$output['TOTAL_REVIEWS'] = $reviews_count;
		$output['TOTAL_REVIEWS_LABEL_CLASS'] = 'label-blue';
		
		$output['TOTAL_UNPUBLISHED_REVIEWS'] = $unpublished_count;
		if ($unpublished_count > 0) {
			$output['TOTAL_UNPUBLISHED_REVIEWS_LABEL_CLASS'] = 'label-orange';
		} else {
			$output['TOTAL_UNPUBLISHED_REVIEWS_LABEL_CLASS'] = 'label-green';
		}
		
		$output['TOTAL_REVIEW_REPORTS'] = $report_count;
		if ($report_count > 0) {
			$output['TOTAL_REVIEW_REPORTS_LABEL_CLASS'] = 'label-orange';
		} else {
			$output['TOTAL_REVIEW_REPORTS_LABEL_CLASS'] = 'label-green';
		}

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('jomres_reviews_overview.html');

        if ($output_now) {
            $tmpl->displayParsedTemplate();
        } else {
            $this->retVals = $tmpl->getParsedTemplate();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
