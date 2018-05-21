<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.11.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_markdown_modal
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
        $this->retVals = '';

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output[ '_JOMRES_MARKDOWN_TITLE' ] = jr_gettext('_JOMRES_MARKDOWN_TITLE', '_JOMRES_MARKDOWN_TITLE');
        $output[ '_JOMRES_MARKDOWN_DESC' ] = jr_gettext('_JOMRES_MARKDOWN_DESC', '_JOMRES_MARKDOWN_DESC');
        $output[ '_JOMRES_MARKDOWN_EMPHASIS' ] = jr_gettext('_JOMRES_MARKDOWN_EMPHASIS', '_JOMRES_MARKDOWN_EMPHASIS');
        $output[ '_JOMRES_MARKDOWN_BOLD' ] = jr_gettext('_JOMRES_MARKDOWN_BOLD', '_JOMRES_MARKDOWN_BOLD');
        $output[ '_JOMRES_MARKDOWN_ITALICS' ] = jr_gettext('_JOMRES_MARKDOWN_ITALICS', '_JOMRES_MARKDOWN_ITALICS');
        $output[ '_JOMRES_MARKDOWN_STRIKETHROUGH' ] = jr_gettext('_JOMRES_MARKDOWN_STRIKETHROUGH', '_JOMRES_MARKDOWN_STRIKETHROUGH');
        $output[ '_JOMRES_MARKDOWN_HEADERS' ] = jr_gettext('_JOMRES_MARKDOWN_HEADERS', '_JOMRES_MARKDOWN_HEADERS');
        $output[ '_JOMRES_MARKDOWN_BIGHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_BIGHEADER', '_JOMRES_MARKDOWN_BIGHEADER');
        $output[ '_JOMRES_MARKDOWN_MEDIUMHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_MEDIUMHEADER', '_JOMRES_MARKDOWN_MEDIUMHEADER');
        $output[ '_JOMRES_MARKDOWN_SMALLHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_SMALLHEADER', '_JOMRES_MARKDOWN_SMALLHEADER');
        $output[ '_JOMRES_MARKDOWN_TINYHEADER' ] = jr_gettext('_JOMRES_MARKDOWN_TINYHEADER', '_JOMRES_MARKDOWN_TINYHEADER');
        $output[ '_JOMRES_MARKDOWN_LISTS' ] = jr_gettext('_JOMRES_MARKDOWN_LISTS', '_JOMRES_MARKDOWN_LISTS');
        $output[ '_JOMRES_MARKDOWN_GENERICLISTITEM' ] = jr_gettext('_JOMRES_MARKDOWN_GENERICLISTITEM', '_JOMRES_MARKDOWN_GENERICLISTITEM');
        $output[ '_JOMRES_MARKDOWN_NUMBEREDLISTITEM' ] = jr_gettext('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', '_JOMRES_MARKDOWN_NUMBEREDLISTITEM');
        $output[ '_JOMRES_MARKDOWN_LINKS' ] = jr_gettext('_JOMRES_MARKDOWN_LINKS', '_JOMRES_MARKDOWN_LINKS');
        $output[ '_JOMRES_MARKDOWN_LINKSTEXT' ] = jr_gettext('_JOMRES_MARKDOWN_LINKSTEXT', '_JOMRES_MARKDOWN_LINKSTEXT');
        $output[ '_JOMRES_MARKDOWN_IMAGES' ] = jr_gettext('_JOMRES_MARKDOWN_IMAGES', '_JOMRES_MARKDOWN_IMAGES');
        $output[ '_JOMRES_MARKDOWN_TABLE' ] = jr_gettext('_JOMRES_MARKDOWN_TABLE', '_JOMRES_MARKDOWN_TABLE');
        $output[ '_JOMRES_MARKDOWN_COLUMN' ] = jr_gettext('_JOMRES_MARKDOWN_COLUMN', '_JOMRES_MARKDOWN_COLUMN');

        $pageoutput = array();
        $pageoutput[] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->readTemplatesFromInput('markdown.html');
        $template = $tmpl->getParsedTemplate();
        if ($output_now) {
            echo $template;
        } else {
            $this->retVals = $template;
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
