<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000usage_reporting_request
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $this->retVals = '';
        if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'temp'.JRDS.'usage_reporting_request.txt')) {
            return true;
        }

        $output = array();
        $pageoutput = array();

        $output['_JOMRES_TRACKING_ENABLE'] = jr_gettext('_JOMRES_TRACKING_ENABLE', '_JOMRES_TRACKING_ENABLE', false);
        $output['_JOMRES_TRACKING_ENABLE_DESC'] = jr_gettext('_JOMRES_TRACKING_ENABLE_DESC', '_JOMRES_TRACKING_ENABLE_DESC', false);

        $output['URL_YES'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=enable_usage_reporting&enable_usage=1';
        $output['URL_NO'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=enable_usage_reporting&enable_usage=0';

        $output['YES'] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
        $output['NO'] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('usage_reporting_request.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $this->retVals = $tmpl->getParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
