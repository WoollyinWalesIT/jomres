<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.27
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001listguests_ajax
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $defaultProperty = getDefaultProperty();

        $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $basic_property_details->get_property_name_multi($thisJRUser->authorisedProperties);

        $historic = (int) jomresGetParam($_GET, 'historic', '2');
        $show_all = (int) jomresGetParam($_GET, 'show_all', '0');

        $rows = array();

        //set the table coulmns, in the exact orcer in which they`re displayed in the table
        $aColumns = array('a.guests_uid', 'a.guests_uid', 'a.firstname', 'a.surname', 'a.house', 'a.street', 'a.town', 'a.county', 'a.postcode', 'a.country', 'a.tel_landline', 'a.tel_mobile', 'a.email', 'a.vat_number', 'a.discount', 'a.property_uid');

        /*
         * Paging
         */
        $sLimit = '';
        if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
            $sLimit = 'LIMIT '.intval($_GET['iDisplayStart']).', '.intval($_GET['iDisplayLength']);
        }

        /*
         * Ordering
         */
        $sOrder = '';
        if (isset($_GET['iSortCol_0'])) {
            $sOrder = 'ORDER BY  ';
            for ($i = 0; $i < intval($_GET['iSortingCols']); ++$i) {
                if ($_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == 'true') {
                    $sOrder .= ''.$aColumns[ intval($_GET['iSortCol_'.$i]) ].' '.
                        ($_GET['sSortDir_'.$i] === 'asc' ? 'asc' : 'desc').', ';
                }
            }

            $sOrder = substr_replace($sOrder, '', -2);
            if ($sOrder == 'ORDER BY') {
                $sOrder = '';
            }
        }

        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $sWhere = '';
        if (isset($_GET['sSearch']) && $_GET['sSearch'] != '') {
            $sWhere = 'AND (';
            for ($i = 0; $i < count($aColumns); ++$i) {
                $sWhere .= ''.$aColumns[$i]." LIKE '%".jomresGetParam($_GET, 'sSearch', '')."%' OR ";
            }
            $sWhere = substr_replace($sWhere, '', -3);
            $sWhere .= ')';
        }

        /*
         * Prefilter
         */
        if ($show_all == 1) {
            $clause = 'WHERE a.property_uid IN ('.jomres_implode($thisJRUser->authorisedProperties).') ';
        } else {
            $clause = "WHERE a.property_uid = '".$defaultProperty."' ";
        }

        if ($historic == 0) {
            $clause .= "AND ( b.cancelled = '0' AND b.bookedout = '0' ) ";
        } elseif ($historic == 1) {
            $clause .= "AND ( b.cancelled = '1' OR b.bookedout = '1' ) ";
        }

        /*
         * Build and execute the query
         */

        $query = 'SET SQL_BIG_SELECTS=1';
        doInsertSql($query);

        $query = 'SELECT SQL_CALC_FOUND_ROWS 
						a.guests_uid, 
						a.firstname, 
						a.surname, 
						a.house, 
						a.street, 
						a.town, 
						a.county, 
						a.country, 
						a.postcode, 
						a.tel_landline, 
						a.tel_mobile, 
						a.email, 
						a.vat_number, 
						a.discount,
						a.property_uid 
					FROM #__jomres_guests a 
						LEFT JOIN #__jomres_contracts b ON a.guests_uid = b.guest_uid '
                    .$clause
                    .' '.$sWhere
                    .' GROUP BY a.guests_uid '
                    .$sOrder
                    .' '.$sLimit;
        $jomresGuestsList = doSelectSql($query);

        /*
         * Total number of rows
         */
        $query = 'SELECT FOUND_ROWS()';
        $mp = (int) doSelectSql($query, 1);
        if ($mp == 0) {
            $output = array(
                'sEcho' => intval($_GET['sEcho']),
                'iTotalRecords' => 0,
                'iTotalDisplayRecords' => 0,
                'aaData' => array(),
                );
            echo json_encode($output);
            exit;
        }

        /*
         * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
         */
        $output = array(
            'sEcho' => intval($_GET['sEcho']),
            'iTotalRecords' => $mp,
            'iTotalDisplayRecords' => $mp,
            'aaData' => array(),
        );
        foreach ($jomresGuestsList as $g) {
            $r = array();

            $thisProperty = '';
            if ($show_all == 1 && ((int) $g->property_uid != (int) $defaultProperty)) {
                $thisProperty = '&thisProperty='.$g->property_uid;
            }

            if (!using_bootstrap()) {
                $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
                $jrtb = $jrtbar->startTable();
                $jrtb .= $jrtbar->toolbarItem('', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_invoices&guest_id='.$g->guests_uid), jr_gettext('_JOMRES_MANAGER_SHOWINVOICES', '_JOMRES_MANAGER_SHOWINVOICES', false));
                $jrtb .= $jrtbar->toolbarItem('edit', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_guest&id='.$g->guests_uid.$thisProperty), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                $jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_guest&id='.$g->guests_uid.$thisProperty), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
                $r[] = $jrtb .= $jrtbar->endTable();
            } else {
                $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
                $toolbar->newToolbar();
                $toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_guest&id='.$g->guests_uid.$thisProperty), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                $toolbar->addSecondaryItem('fa fa-file-text', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_invoices&guest_id='.$g->guests_uid), jr_gettext('_JOMRES_MANAGER_SHOWINVOICES', '_JOMRES_MANAGER_SHOWINVOICES', false));
                $toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_guest&id='.$g->guests_uid.$thisProperty), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
                $r[] = $toolbar->getToolbar();
            }

            $r[] = $g->guests_uid;
            $r[] = jomres_decode($g->firstname);
            $r[] = jomres_decode($g->surname);
            $r[] = jomres_decode($g->house);
            $r[] = jomres_decode($g->street);
            $r[] = jomres_decode($g->town);
            $r[] = jomres_decode(find_region_name($g->county));
            $r[] = $g->postcode;
            $r[] = $g->country;
            $r[] = $g->tel_landline;
            $r[] = $g->tel_mobile;
            $r[] = $g->email;
            $r[] = $g->vat_number;
            $r[] = $g->discount.'%';
            $r[] = $basic_property_details->property_names[$g->property_uid];

            $output['aaData'][] = $r;
        }

        /*
         * Return the json encoded data to populate the table rows
         */
        echo json_encode($output);
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
