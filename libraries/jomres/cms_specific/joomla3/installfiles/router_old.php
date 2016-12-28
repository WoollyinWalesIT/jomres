<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

 // This is the old style router for those users who prefer the old style urls that were pre-Jomres 9.8.0. Should be removed sometime after June 2018

defined('_JEXEC') or die('');
jimport('joomla.filter.output');

if (!defined('_JOMRES_INITCHECK')) {
    define('_JOMRES_INITCHECK', 1);
}

if (!defined('JOMRES_ROOT_DIRECTORY')) {
    if (file_exists(dirname(__FILE__).'/../../jomres_root.php')) {
        require_once dirname(__FILE__).'/../../jomres_root.php';
    } else {
        define('JOMRES_ROOT_DIRECTORY', 'jomres');
    }
}

require_once JPATH_BASE.DIRECTORY_SEPARATOR.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'framework.php';

if (!class_exists('JomresRouter')) {
    class JomresRouter extends JComponentRouterBase
    {
        /**
         * Build the route for the com_jomres component.
         *
         * @param array &$query An array of URL arguments
         *
         * @return array The URL arguments to use to assemble the subsequent URL
         *
         * @since   3.3
         */
        public function build(&$query)
        {
            return $this->JomresBuildRoute($query);
        }

        /**
         * Parse the segments of a URL.
         *
         * @param array &$segments The segments of the URL to parse
         *
         * @return array The URL attributes to be used by the application
         *
         * @since   3.3
         */
        public function parse(&$segments)
        {
            return $this->JomresParseRoute($segments);
        }

        public function JomresBuildRoute(&$query)
        {
            static $items;
            $route_query = $query; // We need to work within this function with the $route_query variable, not $query. It seems to be that the assignation &$query on some servers means that once the property name query further down has been run, then Joomla's $query becomes whatever the sql query was. Don't know why, and I'm not going to dig around to find out. We'll work internally on $route_query, then set $query to $route_query at the end, that seems to fix it.

            global $thisJRUser;
            $jrConfig = getSiteSettings();
            $segments = array();

            $menu = JFactory::getApplication()->getMenu();
            // Get the menu items for this component.
            if (!$items) {
                $component = JComponentHelper::getComponent('com_jomres');
                $items = $menu->getItems('component_id', $component->id);
            }

            // if ($route_query['task'] == "dobooking" && isset($route_query['remus']) )
            // return array();

            if (isset($route_query[ 'property_uid' ]) || isset($route_query[ 'selectedProperty' ])) {
                if (isset($route_query[ 'selectedProperty' ])) {
                    $pid = $route_query[ 'selectedProperty' ];
                } else {
                    $pid = $route_query[ 'property_uid' ];
                }
            } else {
                $pid = getDefaultProperty();
            }

            if ($pid > 0) {
                $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
                $basic_property_details->get_property_name($pid);
                if (isset($basic_property_details->property_names[ $pid ])) {
                    $property_name = $basic_property_details->property_names[ $pid ];
                } else {
                    $sql = 'SELECT property_name FROM #__jomres_propertys WHERE propertys_uid = '.(int) $pid.' LIMIT 1';
                    $property_name = doSelectSql($sql, 1);
                }
            } else {
                $property_name = '';
            }

            switch ($route_query[ 'task' ]) {
                case 'viewproperty':
                    $segments[ ] = $route_query[ 'task' ];
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name));
                    $segments[ ] = $route_query[ 'property_uid' ];
                    //$segments[ ] = $route_query[ 'lang' ];
                    //if ( isset( $route_query[ 'lang' ] ) ) unset( $route_query[ 'lang' ] );
                    if (isset($route_query[ 'task' ])) {
                        unset($route_query[ 'task' ]);
                    }
                    if (isset($route_query[ 'property_uid' ])) {
                        unset($route_query[ 'property_uid' ]);
                    }
                    break;
                case 'dobooking':
                    $segments[ ] = 'dobooking';
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name));
                    $segments[ ] = $route_query[ 'selectedProperty' ];
                    //$segments[ ] = $route_query[ 'lang' ];
                    //if ( isset( $route_query[ 'lang' ] ) ) unset( $route_query[ 'lang' ] );
                    if (isset($route_query[ 'task' ])) {
                        unset($route_query[ 'task' ]);
                    }
                    if (isset($route_query[ 'selectedProperty' ])) {
                        unset($route_query[ 'selectedProperty' ]);
                    }
                    break;
                case 'showTariffs':
                    $segments[ ] = $route_query[ 'task' ];
                    $segments[ ] = $route_query[ 'property_uid' ];
                    $segments[ ] = $route_query[ 'op' ];
                    //$segments[ ] = $route_query[ 'lang' ];
                    //if ( isset( $route_query[ 'lang' ] ) ) unset( $route_query[ 'lang' ] );
                    if (isset($route_query[ 'task' ])) {
                        unset($route_query[ 'task' ]);
                    }
                    if (isset($route_query[ 'property_uid' ])) {
                        unset($route_query[ 'property_uid' ]);
                    }
                    if (isset($route_query[ 'op' ])) {
                        unset($route_query[ 'op' ]);
                    }
                    break;
                case 'slideshow':
                    $segments[ ] = $route_query[ 'task' ];
                    $segments[ ] = $route_query[ 'property_uid' ];
                    $segments[ ] = $route_query[ 'op' ];
                    //$segments[ ] = $route_query[ 'lang' ];
                    //if ( isset( $route_query[ 'lang' ] ) ) unset( $route_query[ 'lang' ] );
                    if (isset($route_query[ 'task' ])) {
                        unset($route_query[ 'task' ]);
                    }
                    if (isset($route_query[ 'property_uid' ])) {
                        unset($route_query[ 'property_uid' ]);
                    }
                    if (isset($route_query[ 'op' ])) {
                        unset($route_query[ 'op' ]);
                    }
                    if (isset($route_query[ 'popup' ])) {
                        unset($route_query[ 'popup' ]);
                    }
                    break;
                case 'showRoomsListing':
                    $segments[ ] = $route_query[ 'task' ];
                    $segments[ ] = $route_query[ 'property_uid' ];
                    $segments[ ] = $route_query[ 'op' ];
                    //$segments[ ] = $route_query[ 'lang' ];
                    //if ( isset( $route_query[ 'lang' ] ) ) unset( $route_query[ 'lang' ] );
                    if (isset($route_query[ 'task' ])) {
                        unset($route_query[ 'task' ]);
                    }
                    if (isset($route_query[ 'property_uid' ])) {
                        unset($route_query[ 'property_uid' ]);
                    }
                    if (isset($route_query[ 'op' ])) {
                        unset($route_query[ 'op' ]);
                    }
                    if (isset($route_query[ 'popup' ])) {
                        unset($route_query[ 'popup' ]);
                    }
                    break;
                }

            if (isset($route_query[ 'calledByModule' ])) {
                $segments[ ] = $jrConfig[ 'sef_task_alias_search' ];
                if (isset($route_query[ 'town' ])) {
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN, false));
                    $segments[ ] = jomres_cmsspecific_stringURLSafe($route_query[ 'town' ]);
                    unset($route_query[ 'town' ]);
                }
                if (isset($route_query[ 'region' ])) {
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION, false));
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(find_region_name($route_query[ 'region' ]));
                    unset($route_query[ 'region' ]);
                }
                if (isset($route_query[ 'country' ])) {
                    $segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY, false));
                    $segments[ ] = jomres_cmsspecific_stringURLSafe($route_query[ 'country' ]);
                    unset($route_query[ 'country' ]);
                }
                if (isset($route_query[ 'send' ])) {
                    unset($route_query[ 'send' ]);
                }
                if (isset($route_query[ 'calledByModule' ])) {
                    unset($route_query[ 'calledByModule' ]);
                }
            }
            $query = $route_query;

            return $segments;
        }

        // ******************************************************************************************************************************
        // ******************************************************************************************************************************
        // ******************************************************************************************************************************

        public function JomresParseRoute($segments)
        {
            if (!defined('_JOMRES_INITCHECK')) {
                define('_JOMRES_INITCHECK', 1);
            }
            global $thisJRUser;
            require_once JPATH_BASE.DIRECTORY_SEPARATOR.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'integration.php';
            $vars = array();
            $jrConfig = getSiteSettings();

            switch ($segments[ 0 ]) {
                case 'viewproperty':

                    $vars[ 'task' ] = 'viewproperty';
                    $vars[ 'property_uid' ] = $segments[ 2 ];
                    break;
                case 'dobooking':
                    require_once JOMRESCONFIG_ABSOLUTE_PATH.JRDS.JOMRES_ROOT_DIRECTORY.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS.'dobooking.class.php';
                    $vars[ 'task' ] = 'dobooking';
                    if (!$thisJRUser->userIsManager) {
                        $vars[ 'selectedProperty' ] = $segments[ 2 ];
                    }
                    break;
                case $jrConfig[ 'sef_task_alias_search' ]:
                    $searchParam = $segments[ 1 ];
                    $vars[ 'send' ] = 'Search';
                    $vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
                    if ($searchParam == jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN, false))) {
                        $searchParam = 'town';
                    }
                    if ($searchParam == jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY, false))) {
                        $searchParam = 'country';
                    }
                    if ($searchParam == jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION, false))) {
                        $searchParam = 'region';
                    }
                    $vars[ $searchParam ] = jomres_cmsspecific_stringURLSafe($segments[ 2 ]);
                    break;
                case 'showTariffs':
                    $vars[ 'task' ] = 'showTariffs';
                    $vars[ 'property_uid' ] = $segments[ 1 ];
                    $vars[ 'op' ] = $segments[ 2 ];
                    break;
                case 'slideshow':
                    $vars[ 'task' ] = 'slideshow';
                    $vars[ 'property_uid' ] = $segments[ 1 ];
                    $vars[ 'op' ] = $segments[ 2 ];
                    break;
                case 'showRoomsListing':
                    $vars[ 'task' ] = 'showRoomsListing';
                    $vars[ 'property_uid' ] = $segments[ 1 ];
                    $vars[ 'op' ] = $segments[ 2 ];
                    break;
                }

            //set the request vars back to jinput for later use
            $jinput = JFactory::getApplication()->input;
            foreach ($vars as $k => $v) {
                $jinput->set($k, $v);
            }

            return $vars;
        }
    }
}
