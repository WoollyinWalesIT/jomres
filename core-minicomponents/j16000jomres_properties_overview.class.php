<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_properties_overview
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $pageoutput = array();

        //total properties
        $output['TOTAL_PROPERTIES'] = (int) get_showtime('numberOfPropertiesInSystem');
        $output['TOTAL_PROPERTIES_LABEL_CLASS'] = 'label-blue';

        //total published properties
        $output['TOTAL_PUBLISHED'] = count(get_showtime('published_properties_in_system'));
        $output['TOTAL_PUBLISHED_LABEL_CLASS'] = 'label-green';

        //total unpublished properties
        $output['TOTAL_UNPUBLISHED'] = (int) get_showtime('numberOfPropertiesInSystem') - count(get_showtime('published_properties_in_system'));
        if ($output['TOTAL_UNPUBLISHED'] > 0) {
            $output['TOTAL_UNPUBLISHED_LABEL_CLASS'] = 'label-orange';
        } else {
            $output['TOTAL_UNPUBLISHED_LABEL_CLASS'] = 'label-green';
        }

        //total approved and not approved properties
        $query = 'SELECT COUNT(`propertys_uid`) AS cnt FROM #__jomres_propertys WHERE `approved` = 0 ';
        $result = (int) doSelectSql($query, 1);

        $output['TOTAL_APPROVED'] = (int) get_showtime('numberOfPropertiesInSystem') - $result;
        $output['TOTAL_APPROVED_LABEL_CLASS'] = 'label-green';

        $output['TOTAL_NOTAPPROVED'] = $result;
        if ($output['TOTAL_NOTAPPROVED'] > 0) {
            $output['TOTAL_NOTAPPROVED_LABEL_CLASS'] = 'label-orange';
        } else {
            $output['TOTAL_NOTAPPROVED_LABEL_CLASS'] = 'label-green';
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('jomres_properties_overview.html');

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
