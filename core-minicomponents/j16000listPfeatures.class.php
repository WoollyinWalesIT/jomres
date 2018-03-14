<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000listPfeatures
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
		$rows = array();
		$pageoutput = array();
		
		$jomres_property_features = jomres_singleton_abstract::getInstance('jomres_property_features');
		$jomres_property_features->get_all_property_features();

        $jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
        $jomres_property_types->get_all_property_types();

        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', false);
        $output[ 'HLINKTEXT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', false);
        $output[ 'HPFEATURETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', false);
        $output[ 'HPFEATUREDESCRIPTION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', false);
        $output[ 'HJOMRES_A_ICON' ] = jr_gettext('_JOMRES_A_ICON', '_JOMRES_A_ICON', false);
        $output[ 'HPROPERTY_TYPES' ] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false);
        $output[ 'HCATEGORY' ] = jr_gettext('_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY', false);
		$output[ 'INCLUDEINFILTERS' ] = jr_gettext('INCLUDEINFILTERS', 'INCLUDEINFILTERS', false);


        foreach ($jomres_property_features->property_features as $f) {
            $selected_ptype_rows = '';
            
			foreach ($f['ptype_xref'] as $ptype_id) {
                if (isset($jomres_property_types->property_types[ $ptype_id ]['ptype'])) {
                    $selected_ptype_rows .= $jomres_property_types->property_types[ $ptype_id ]['ptype'].', ';
                }
			}
			
			$selected_ptype_rows = rtrim($selected_ptype_rows, ', ');

			$r[ 'PROPERTYFEATUREUID' ] = $f['id'];
            $r[ 'CHECKBOX' ] = '<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$f['id'].'" onClick="jomres_isChecked(this.checked);">';
            $r[ 'PFEATURETITLE' ] = $f['abbv'];
            $r[ 'PFEATUREDESCRIPTION' ] = $f['desc'];
            $r[ 'PROPERTY_TYPES' ] = $selected_ptype_rows;
            $r[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH . 'pfeatures/' . $f['image'];
            $r[ 'CATEGORY' ] = $f['cat_title'];

			if ($f['include_in_filters'] == "1")
				$r[ 'INCLUDE_IN_FILTERS' ] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
			else
				$r[ 'INCLUDE_IN_FILTERS' ] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);
			
            $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
			$toolbar->newToolbar();
			$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=editPfeature&id='.$f['id']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));

            $r['EDITLINK'] = $toolbar->getToolbar();

            $rows[] = $r;
        }
        
		$output[ 'COUNTER' ] = count($rows);
        $output[ 'TOTALINLISTPLUSONE' ] = count($rows) + 1;

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN, '');
        $image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/AddItem.png');
        $link = JOMRES_SITEPAGE_URL_ADMIN;
        $jrtb .= $jrtbar->customToolbarItem('editPfeature', $link, jr_gettext('_JOMRES_COM_MR_NEWTARIFF', '_JOMRES_COM_MR_NEWTARIFF', false), $submitOnClick = true, $submitTask = 'editPfeature', $image);
        $jrtb .= $jrtbar->spacer();
        $image = $jrtbar->makeImageValid(JOMRES_IMAGES_RELPATH.'jomresimages/small/WasteBasket.png');
        $link = JOMRES_SITEPAGE_URL_ADMIN;
        $jrtb .= $jrtbar->customToolbarItem('deletePfeature', $link, jr_gettext('_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE', false), $submitOnClick = true, $submitTask = 'deletePfeature', $image);
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[] = $output;

        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('list_pfeatures.html');
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
