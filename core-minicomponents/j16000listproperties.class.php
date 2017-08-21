<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.9
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000listproperties
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $published = (int) jomresGetParam($_POST, 'published', '2');
        $approved = (int) jomresGetParam($_POST, 'approved', '2');
        $ptype_id = (int) jomresGetParam($_POST, 'ptype', '0');

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        //we`ll show the table in a panel on admin cpanel frontpage
        $show_as_panel = false;
        if (isset($componentArgs['show_as_panel'])) {
            $show_as_panel = (bool) $componentArgs['show_as_panel'];
        }

        $output = array();
        $rows = array();

        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_HLIST_PROPERTIES', '_JOMRES_HLIST_PROPERTIES', false);
        $output[ 'WARNING' ] = jr_gettext('_JOMRES_HLIST_PROPERTIES_WARNING', '_JOMRES_HLIST_PROPERTIES_WARNING', false);
        $output[ 'HSTATUS' ] = jr_gettext('COMMON_EDIT', 'COMMON_EDIT');
        $output[ 'HPROPERTYUID' ] = 'Uid';
        $output[ 'HPROPERTYNAME' ] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME');
        $output[ 'HPROPERTY_STREET' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
        $output[ 'HPROPERTY_TOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
        $output[ 'HPROPERTY_REGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
        $output[ 'HPROPERTY_COUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
        $output[ 'HPROPERTY_POSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
        $output[ 'HPROPERTY_TEL' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
        $output[ 'HPROPERTY_EMAIL' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL');
        $output[ 'HPROPERTY_FAX' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX');
        $output[ 'HPROPERTY_STARS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS');
        $output[ 'HPROPERTY_SUPERIOR' ] = jr_gettext('JOMRES_SUPERIOR', 'JOMRES_SUPERIOR');
        $output[ 'HPROPERTY_LAT' ] = 'Lat';
        $output[ 'HPROPERTY_LONG' ] = 'Long';
        $output[ 'HAPPROVED' ] = jr_gettext('_JOMRES_HSTATUS_APPROVED', '_JOMRES_HSTATUS_APPROVED');
        $output[ 'HACTIVE' ] = jr_gettext('_JOMRES_HSTATUS_CURRENT', '_JOMRES_HSTATUS_CURRENT');
        $output[ 'HLASTCHANGED' ] = jr_gettext('_JOMRES_HLASTCHANGED', '_JOMRES_HLASTCHANGED', false);
        $output[ 'HCRATE' ] = jr_gettext('_JRPORTAL_PROPERTIES_COMMISSIONRATE', '_JRPORTAL_PROPERTIES_COMMISSIONRATE', false);
        $output[ 'HLEGEND' ] = jr_gettext('_JOMRES_HLEGEND', '_JOMRES_HLEGEND');
		$output[ 'HNOTCOMPLETED' ] = jr_gettext('JOMRES_INCOMPLETE', 'JOMRES_INCOMPLETE');
		$output[ 'HWAITINGAPPROVAL' ] = jr_gettext('JOMRES_WATING_APPROVAL', 'JOMRES_WATING_APPROVAL');

        //filters output
        $output['HFILTER'] = jr_gettext('_JOMRES_HFILTER', '_JOMRES_HFILTER', false);
        $output['HPUBLISHED_STATUS'] = jr_gettext('_JOMRES_HSTATUS_PUBLISHING', '_JOMRES_HSTATUS_PUBLISHING', false);
        $output['HPTYPE'] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false);

        $options = array();
        $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_STATUS_PUBLISHED', '_JOMRES_STATUS_PUBLISHED', false));
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_NOT_PUBLISHED', '_JOMRES_STATUS_NOT_PUBLISHED', false));
        $output['PUBLISHED_STATUS'] = jomresHTML::selectList($options, 'published', 'class="inputbox" size="1"', 'value', 'text', $published);

        $options = array();
        $options[] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));
        $options[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
        $output['APPROVED_STATUS'] = jomresHTML::selectList($options, 'approved', 'class="inputbox" size="1"', 'value', 'text', $approved);

        //property type filter
        $options = array();
        $options[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_STATUS_ANY', '_JOMRES_STATUS_ANY', false));

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

        foreach ($current_property_details->all_property_type_titles as $k => $v) {
            $options[] = jomresHTML::makeOption($k, $v);
        }

        $output['PTYPE'] = jomresHTML::selectList($options, 'ptype', 'class="inputbox" size="1"', 'value', 'text', $ptype_id);

        $output['AJAX_URL'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=listproperties_ajax&published='.$published.'&approved='.$approved.'&ptype='.$ptype_id;

        $pageoutput[ ] = $output;

        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        if (!$show_as_panel) {
            $tmpl->readTemplatesFromInput('admin_listproperties.html');
        } else {
            $tmpl->readTemplatesFromInput('admin_listproperties_panel.html');
        }
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);

        if (!$output_now) {
            $this->retVals = $tmpl->getParsedTemplate();
        } else {
            $this->retVals = '';
            $tmpl->displayParsedTemplate();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
