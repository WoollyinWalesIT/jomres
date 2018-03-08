<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002edit_email
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_getSingleton('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $ePointFilepath = get_showtime('ePointFilepath');
        $defaultProperty = getDefaultProperty();

        $siteConfig = jomres_getSingleton('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (!isset($jrConfig['allowHTMLeditor'])) {
            $jrConfig['allowHTMLeditor'] = '1';
        }

        $email_type = jomresGetParam($_REQUEST, 'email_type', '');
        if ($email_type == '') {
            return;
        }

        if (isset($MiniComponents->registeredClasses['03150'][$email_type])) {
            $MiniComponents->specificEvent('03150', $email_type);
        } else {
            return;
        }

        $email_default_html = file_get_contents($MiniComponents->miniComponentData['03150'][$email_type]['default_template']);

        $email_text = jr_gettext('_EMAIL_TEXT_'.$email_type, $email_default_html, false);

        $output = array();

        //email content
        $output['CONTENT'] = '';
        if ($jrConfig['allowHTMLeditor'] == '1') {
            $width = '95%';
            $height = '350';
            $col = '20';
            $row = '10';
            $output['EMAIL_TEXT'] = editorAreaText('email_text', $email_text, 'email_text', $width, $height, $col, $row);
        } else {
            $output['EMAIL_TEXT'] = '<textarea class="inputbox" cols="60" rows="6" name="email_text">'.$email_text.'</textarea>';
        }

        $output['HEMAIL_TEXT'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_TEXT', '_JOMRES_EMAIL_TEMPLATES_TEXT', false);

        //email title
        $output['HEMAIL_SUBJECT'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_SUBJECT', '_JOMRES_EMAIL_TEMPLATES_SUBJECT', false);
        $output['EMAIL_SUBJECT'] = jr_gettext('_EMAIL_SUBJECT_'.$email_type, '[PROPERTY_NAME] - [BOOKING_NUMBER]', false);

        $output['PAGETITLE'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_EDIT', '_JOMRES_EMAIL_TEMPLATES_EDIT', false);
        $output['INSTRUCTIONS'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', '_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', false);

        $jrtbar = jomres_getSingleton('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_email');
        $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_emails'), '');
        $jrtb .= $jrtbar->endTable();
        $output['JOMRESTOOLBAR'] = $jrtb;

        $output['EMAIL_TYPE'] = $email_type;

        $pageoutput = array();
        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->readTemplatesFromInput('edit_email.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
