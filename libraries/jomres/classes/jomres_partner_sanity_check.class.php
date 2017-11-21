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

class jomres_partner_sanity_check
{
    public function __construct($autorun = true)
    {
        if (get_showtime('no_html') == 1 || get_showtime('popup') == 1 || AJAXCALL) {
            return;
        }
        
		$this->warnings = '';
    }

    public function do_sanity_checks()
    {
        $this->warnings = $this->check_details_completed();

        return $this->warnings;
    }

    public function construct_warning($message_array)
    {
        $message = $message_array['MESSAGE'];
        $warning = '';
        $warning .= jr_gettext('_JOMRES_WARNINGS_DANGERWILLROBINSON', '_JOMRES_WARNINGS_DANGERWILLROBINSON', false);
        $warning .= $message;
        if (isset($message_array['LINK'])) {
            $pageoutput = array();
            $output = array();

            $output['LINK'] = $message_array['LINK'];
            $output['BUTTON_TEXT'] = $message_array['BUTTON_TEXT'];

            $pageoutput[ ] = $output;
            $tmpl = new patTemplate();
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('sanity_checks_button.html');
            $warning .= $tmpl->getParsedTemplate();
        }

        return '<p>'.$warning.'</p>';
    }

    public function check_details_completed()
    {
        if (get_showtime('task') != 'edit_my_account') {
            $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
            $partners = jomres_singleton_abstract::getInstance('jomres_partners');
            $details_complete = $partners->check_partner_details_complete($thisJRUser->id);

            if (!$details_complete) {
                $message = jr_gettext('_JOMRES_PARTNERS_PLEASE_COMPLETE', '_JOMRES_PARTNERS_PLEASE_COMPLETE', false);
                $link = jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account');
                $button_text = jr_gettext('_JOMRES_MY_ACCOUNT_EDIT', '_JOMRES_MY_ACCOUNT_EDIT', false);

                return $this->construct_warning(array('MESSAGE' => $message, 'LINK' => $link, 'BUTTON_TEXT' => $button_text));
            }
        }
    }
}
