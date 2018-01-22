<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.18
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06001listyourproperties_ajax
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $ePointFilepath = get_showtime('ePointFilepath');
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $defaultProperty = getDefaultProperty();
        $lang = get_showtime('lang');

        $published = (int) jomresGetParam($_GET, 'published', '2');
        $approved = (int) jomresGetParam($_GET, 'approved', '2');
        $ptype_id = (int) jomresGetParam($_GET, 'ptype', '0');
		
		$authorisedProperties_count = count($thisJRUser->authorisedProperties);

        $rows = array();

        //set the table coulmns, in the exact order in which they`re displayed in the table
        $aColumns = array('published', 'propertys_uid', 'property_name', 'property_street', 'property_town', 'property_region', 'property_postcode', 'property_country', 'property_tel', 'property_fax', 'property_email', 'stars', 'superior', 'lat', 'long', 'approved', 'last_changed');

        //set columns count
		$n = count($aColumns);

        /*
         * Paging
         */
        $sLimit = '';
        if (isset($_GET['start']) && $_GET['start'] != '-1') {
            $sLimit = 'LIMIT '.(int)$_GET['start'].', '.(int)$_GET['length'];
        }

        /*
         * Ordering
         */
        $sOrder = '';
        if (isset($_GET['jr_order'])) {
            $sOrder = 'ORDER BY ';
			for ($i = 0; $i < $n; ++$i) {
				if (isset($_GET['jr_order'][$i]['column'])) {
					$column_id = (int)$_GET['jr_order'][$i]['column'];
					$sOrder .= '`'.$aColumns[$column_id].'` ' . ($_GET['jr_order'][$i]['dir'] === 'asc' ? 'ASC' : 'DESC') . ', ';
				}
			}
			if ($sOrder == 'ORDER BY ') {
				$sOrder = '';
			} else {
				$sOrder = rtrim($sOrder, ', ');
			}
        }

        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $sWhere = '';
		$search = jomresGetParam($_GET, 'jr_search', array());
        if (isset($search['value']) && $search['value'] != '') {
            $sWhere = 'AND (';
            for ($i = 0; $i < $n; ++$i) {
                $sWhere .= '`'.$aColumns[$i]."` LIKE '%".$search['value']."%' OR ";
            }
            $sWhere .= "b.customtext LIKE '%".$search['value']."%' ";
            $sWhere .= ')';
        }

        /*
         * Property uids clause
         */
        $clause = 'WHERE propertys_uid IN ('.jomres_implode($thisJRUser->authorisedProperties).') ';

        //published status
        if ($published == 1) {
            $clause .= "AND a.published = '1' ";
        } elseif ($published == 0) {
            $clause .= "AND a.published = '0' ";
        }

        //published status
        if ($approved == 1) {
            $clause .= "AND a.approved = '1' ";
        } elseif ($approved == 0) {
            $clause .= "AND a.approved = '0' ";
        }

        //property type
        if ($ptype_id > 0) {
            $clause .= "AND a.ptype_id = '".$ptype_id."' ";
        }

        /*
         * Build and execute the query
         */

        $query = 'SET SQL_BIG_SELECTS=1';
        doInsertSql($query);

        $query = "SELECT SQL_CALC_FOUND_ROWS 
						a.propertys_uid, 
						a.property_street, 
						a.property_town, 
						a.property_region, 
						a.property_postcode, 
						a.property_country, 
						a.property_tel, 
						a.property_fax, 
						a.property_email, 
						a.stars, 
						a.superior,
						a.lat, 
						a.long, 
						a.published, 
						a.approved,
						a.last_changed,
						a.completed,
						(CASE WHEN (a.propertys_uid = b.property_uid 
									AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_NAME' 
									AND b.language = '".$lang."' 
									AND b.language_context != '') 
							THEN b.customtext 
							ELSE a.property_name 
						END) AS property_name
					FROM #__jomres_propertys a 
						LEFT JOIN #__jomres_custom_text b ON (a.propertys_uid = b.property_uid 
																AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_NAME' 
																AND b.language = '".$lang."') "
                    .$clause
                    .' '.$sWhere
                    .' '.$sOrder
                    .' '.$sLimit;
        $jomresPropertyList = doSelectSql($query);

        /*
         * Total number of rows
         */
        $query = 'SELECT FOUND_ROWS()';
        $mp = (int) doSelectSql($query, 1);
        if ($mp == 0) {
            $output = array(
                'draw' => (int)$_GET['draw'],
                'recordsTotal' => 0,
                'recordsFiltered' => 0,
                'data' => array(),
                );
            echo json_encode($output);
            exit;
        }

        /*
         * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
         */
        $output = array(
            'draw' => (int)$_GET['draw'],
            'recordsTotal' => $mp,
            'recordsFiltered' => $mp,
            'data' => array(),
        );

        foreach ($jomresPropertyList as $p) {
            $r = array();

            //properties toolbar
            if (!using_bootstrap()) {
                $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
                $jrtb = $jrtbar->startTable();
                if ($thisJRUser->accesslevel > 50) { //higher than receptionist
                    if (!$p->published) {
                        $jrtb .= $jrtbar->toolbarItem('unpublish', jomresURL(JOMRES_SITEPAGE_URL.'&task=publish_property'.'&property_uid='.$p->propertys_uid), jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false));
                    } else {
                        $jrtb .= $jrtbar->toolbarItem('publish', jomresURL(JOMRES_SITEPAGE_URL.'&task=publish_property'.'&property_uid='.$p->propertys_uid), jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH', '_JOMRES_COM_MR_VRCT_UNPUBLISH', false));
                    }
                    $jrtb .= $jrtbar->toolbarItem('edit', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_property'.'&thisProperty='.$p->propertys_uid), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                    if ($authorisedProperties_count > 1) {
                        $jrtb .= $jrtbar->toolbarItem('delete', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_property'.'&thisProperty='.$p->propertys_uid), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
                    }
                }

                if ($p->propertys_uid != $defaultProperty) {
                    $jrtb .= $jrtbar->toolbarItem('apply', jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.$p->propertys_uid), jr_gettext('_JOMRES_ACTION_SET_CURRENT', '_JOMRES_ACTION_SET_CURRENT', false));
                }

                $r[] = $jrtb .= $jrtbar->endTable();
            } else {
                $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
                $toolbar->newToolbar();
                if ($thisJRUser->accesslevel > 50) { //higher than receptionist
                    if ($p->approved == 1) {
                        if (!$p->published) {
                            $toolbar->addItem('fa fa-times', 'btn btn-default', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=publish_property'.'&property_uid='.$p->propertys_uid), jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false));
                        } else {
                            $toolbar->addItem('fa fa-check', 'btn btn-success', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=publish_property'.'&property_uid='.$p->propertys_uid), jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH', '_JOMRES_COM_MR_VRCT_UNPUBLISH', false));
                        }
                    } else {
                        if (!$p->published) {
                            $toolbar->addItem('fa fa-times', 'btn btn-default disabled', '', 'javascript:void(0);', jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false));
                        } else {
                            $toolbar->addItem('fa fa-check', 'btn btn-success disabled', '', 'javascript:void(0);', jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH', '_JOMRES_COM_MR_VRCT_UNPUBLISH', false));
                        }
                    }
                }
                if ($p->propertys_uid != $defaultProperty) {
                    $toolbar->addSecondaryItem('fa fa-refresh', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.$p->propertys_uid), jr_gettext('_JOMRES_ACTION_SET_CURRENT', '_JOMRES_ACTION_SET_CURRENT', false));
                }
                if ($thisJRUser->accesslevel > 50) { //higher than receptionist
                    $toolbar->addSecondaryItem('fa fa-pencil-square-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_property'.'&thisProperty='.$p->propertys_uid), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
                    $url = get_property_details_url($p->propertys_uid);
                    $toolbar->addSecondaryItem('fa fa-arrows-alt', '', '', $url, jr_gettext('_JOMRES_FRONT_PREVIEW', '_JOMRES_FRONT_PREVIEW', false));
                    if ($authorisedProperties_count > 1) {
                        $toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_property'.'&thisProperty='.$p->propertys_uid), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
                    }
                }
                $r[] = $toolbar->getToolbar();
            }
            //end properties toolbar

            $r[] = $p->propertys_uid;
			
			if ($p->propertys_uid == $defaultProperty) {
				$r[] = '<span class="label label-blue">'.jomres_decode($p->property_name).'</span>';
			} else {
				if ($p->completed == 1) {
					if ($p->approved == 1) {
						$r[] = jomres_decode($p->property_name);
					} else {
						$r[] = '<span class="label label-orange">'.jomres_decode($p->property_name).'</span>';
					}
				} else {
					$r[] = '<span class="label label-red">'.jomres_decode($p->property_name).'</span>';
				}
			}

            $r[] = jomres_decode($p->property_street);
            $r[] = jomres_decode($p->property_town);
            $r[] = jomres_decode(find_region_name($p->property_region));
            $r[] = $p->property_postcode;
            $r[] = $p->property_country;
            $r[] = $p->property_tel;
            $r[] = $p->property_fax;
            $r[] = jomres_decode($p->property_email);

            $stars = '';
            for ($i = 1; $i <= (int) $p->stars; ++$i) {
                $stars .= '<img src="'.JOMRES_IMAGES_RELPATH.'star.png" border="0" alt="star" />';
            }
            $r[] = $stars;

            if ((int) $p->superior == 1) {
                $r[] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
            } else {
                $r[] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);
            }

            $r[] = $p->lat;
            $r[] = $p->long;

            if ((int) $p->approved == 1) {
                $r[] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
            } else {
                $r[] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);
            }

            $r[] = $p->last_changed;

            $output['data'][] = $r;
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
