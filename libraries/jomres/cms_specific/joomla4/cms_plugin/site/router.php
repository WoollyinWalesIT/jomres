<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
 
 	
	/**
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

defined('_JEXEC') or die('');

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

if (!class_exists('JomresRouter')) {
		
	/**
	 * 
	 *
	 *
	 */

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

			
		/**
		 * 
		 *
		 *
		 */

		public function JomresBuildRoute(&$query)
		{
			static $items;

			$route_query = $query; // We need to work within this function with the $route_query variable, not $query. It seems to be that the assignation &$query on some servers means that once the property name query further down has been run, then Joomla's $query becomes whatever the sql query was. Don't know why, and I'm not going to dig around to find out. We'll work internally on $route_query, then set $query to $route_query at the end, that seems to fix it.

			require_once dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'framework.php';

			$segments = array();

			$menu = JFactory::getApplication()->getMenu();
			// Get the menu items for this component.
			if (!$items) {
				$component = JComponentHelper::getComponent('com_jomres');
				$items = $menu->getItems('component_id', $component->id);
			}

			if (isset($route_query[ 'property_uid' ]) || isset($route_query[ 'selectedProperty' ])) {
				if (isset($route_query[ 'selectedProperty' ])) {
					$pid = $route_query[ 'selectedProperty' ];
				} elseif (isset($route_query[ 'property_uid' ])) {
					$pid = $route_query[ 'property_uid' ];
				}
			} else {
				$pid = getDefaultProperty();
			}
			
			$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

			if ($pid > 0) {
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

			if (isset($route_query[ 'task' ]) && $route_query[ 'task' ] != '') {
				switch ($route_query[ 'task' ]) {
					case 'viewproperty':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('COMMON_VIEW', 'COMMON_VIEW', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'property_uid' ])) {
							unset($route_query[ 'property_uid' ]);
						}
						break;
					case 'dobooking':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'selectedProperty' ])) {
							unset($route_query[ 'selectedProperty' ]);
						}
						break;
					case 'show_property_tariffs':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'property_uid' ])) {
							unset($route_query[ 'property_uid' ]);
						}
						break;
					case 'show_property_slideshow':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_SLIDESHOW', '_JOMRES_FRONT_SLIDESHOW', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'property_uid' ])) {
							unset($route_query[ 'property_uid' ]);
						}
						break;
					case 'show_property_rooms':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'property_uid' ])) {
							unset($route_query[ 'property_uid' ]);
						}
						break;
					case 'contactowner':
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jomres_decode($property_name)).'-'.$pid;
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', false));
						if (isset($route_query[ 'task' ])) {
							unset($route_query[ 'task' ]);
						}
						if (isset($route_query[ 'selectedProperty' ])) {
							unset($route_query[ 'selectedProperty' ]);
						}
						break;
				}
			}
			
			//for when we have joomla menus created for property details pages
			if (isset($route_query[ 'layout' ]) && $route_query[ 'layout' ] == 'propertydetails') {
				unset($route_query[ 'layout' ]);

				if (isset($route_query[ 'view' ])) {
					unset($route_query[ 'view' ]);
				}
				if (isset($route_query[ 'selected_property' ])) {
					unset($route_query[ 'selected_property' ]);
				}
			}

			//search urls
			if (isset($route_query[ 'calledByModule' ])) {
				$segments[ ] = 'search';
				if (isset($route_query[ 'town' ])) {
					$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false));
					$segments[ ] = jomres_cmsspecific_stringURLSafe($route_query[ 'town' ]);
					unset($route_query[ 'town' ]);
				}
				if (isset($route_query[ 'region' ])) {
					$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false));
					$segments[ ] = jomres_cmsspecific_stringURLSafe(find_region_name($route_query[ 'region' ]));
					unset($route_query[ 'region' ]);
				}
				if (isset($route_query[ 'country' ])) {
					$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false));
					$segments[ ] = jomres_cmsspecific_stringURLSafe($route_query[ 'country' ]);
					unset($route_query[ 'country' ]);
				}
				if (isset($route_query[ 'feature_uids' ])) {
					if ((int)$route_query[ 'feature_uids' ] > 0 && isset($basic_property_details->all_property_features[(int)$route_query[ 'feature_uids' ]]['abbv'])) {
						$feature_name = $basic_property_details->all_property_features[(int)$route_query[ 'feature_uids' ]]['abbv']; 
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_ROUTER_FEATURES', '_JOMRES_ROUTER_FEATURES', false));
						$segments[ ] = jomres_cmsspecific_stringURLSafe($feature_name).'-'.(int)$route_query[ 'feature_uids' ];
						unset($route_query[ 'feature_uids' ]);
					}
				}
				if (isset($route_query[ 'room_type' ])) {
					if ((int)$route_query[ 'room_type' ] > 0 && isset($basic_property_details->all_room_types[(int)$route_query[ 'room_type' ]]['room_class_abbv'])) {
						$room_type_name = $basic_property_details->all_room_types[(int)$route_query[ 'room_type' ]]['room_class_abbv'];
						$segments[ ] = jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_ROUTER_ROOMTYPES', '_JOMRES_ROUTER_ROOMTYPES', false));
						$segments[ ] = jomres_cmsspecific_stringURLSafe($room_type_name).'-'.(int)$route_query[ 'room_type' ];
						unset($route_query[ 'room_type' ]);
					}
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
	
		/**
		 * 
		 *
		 *
		 */

		public function JomresParseRoute($segments)
		{
			$vars = array();

			require_once dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.JOMRES_ROOT_DIRECTORY.DIRECTORY_SEPARATOR.'framework.php';

			switch ($segments[ 1 ]) {
				case jomres_cmsspecific_stringURLSafe(jr_gettext('COMMON_VIEW', 'COMMON_VIEW', false)):
					$vars[ 'task' ] = 'viewproperty';
					$vars[ 'property_uid' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', false)):
					$vars[ 'task' ] = 'dobooking';
					$vars[ 'selectedProperty' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false)):
					$vars[ 'task' ] = 'show_property_tariffs';
					$vars[ 'property_uid' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_SLIDESHOW', '_JOMRES_FRONT_SLIDESHOW', false)):
					$vars[ 'task' ] = 'show_property_slideshow';
					$vars[ 'property_uid' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false)):
					$vars[ 'task' ] = 'show_property_rooms';
					$vars[ 'property_uid' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', false)):
					$vars[ 'task' ] = 'contactowner';
					$vars[ 'selectedProperty' ] = substr($segments[ 0 ], strrpos($segments[ 0 ], '-') + 1);
					break;
				
				//search urls
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', false)):
					$searchParam = $segments[ 1 ];
					$vars[ 'send' ] = 'Search';
					$vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
					$vars[ 'town' ] = $segments[ 2 ];
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false)):
					$searchParam = $segments[ 1 ];
					$vars[ 'send' ] = 'Search';
					$vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
					$vars[ 'region' ] = find_region_id($segments[ 2 ]);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false)):
					$searchParam = $segments[ 1 ];
					$vars[ 'send' ] = 'Search';
					$vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
					$vars[ 'country' ] = $segments[ 2 ];
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_ROUTER_FEATURES', '_JOMRES_ROUTER_FEATURES', false)):
					$searchParam = $segments[ 1 ];
					$vars[ 'send' ] = 'Search';
					$vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
					$vars[ 'feature_uids' ] = substr($segments[ 2 ], strrpos($segments[ 2 ], '-') + 1);
					break;
				case jomres_cmsspecific_stringURLSafe(jr_gettext('_JOMRES_ROUTER_ROOMTYPES', '_JOMRES_ROUTER_ROOMTYPES', false)):
					$searchParam = $segments[ 1 ];
					$vars[ 'send' ] = 'Search';
					$vars[ 'calledByModule' ] = 'mod_jomsearch_m0';
					$vars[ 'room_type' ] = substr($segments[ 2 ], strrpos($segments[ 2 ], '-') + 1);
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
