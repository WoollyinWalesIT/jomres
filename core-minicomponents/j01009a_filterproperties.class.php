<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * Core Minicomponent.
	 *
	 * 
	 */

class j01009a_filterproperties
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$data_only = false;
		if (defined('JOMRES_NOHTML') && JOMRES_NOHTML == 1) {
			$data_only = true;
		}
		if (isset($_REQUEST[ 'dataonly' ])) {
			$data_only = true;
		}
		$propertys_uids = $componentArgs[ 'propertys_uids' ];

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		if (!isset($_REQUEST[ 'jomsearch_sortby' ]) && isset($tmpBookingHandler->user_settings[ 'jomsearch_sortby' ])) {
			$sortid = $tmpBookingHandler->user_settings[ 'jomsearch_sortby' ];
		} else {
			if (isset($_REQUEST[ 'jomsearch_sortby' ])) {
				$sortid = intval(jomresGetParam($_REQUEST, 'jomsearch_sortby', 1));
			} else {
				$sortid = $jrConfig[ 'search_order_default' ];
			}
		}
		$tmpBookingHandler->user_settings[ 'jomsearch_sortby' ] = $sortid;

		switch ($sortid) {
			//########################################################################################
			case '1':
				$this->propertys_uids = $propertys_uids;
				break;
			//########################################################################################
			case '2':
				$query = 'SELECT propertys_uid, property_name FROM #__jomres_propertys WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ORDER BY property_name';
				$uids = doSelectSql($query);
				foreach ($uids as $u) {
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			case '3':
				$query = 'SELECT propertys_uid, property_region FROM #__jomres_propertys WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ';
				$regions = doSelectSql($query);
				foreach ($regions as $r) {
					if (is_numeric($r->property_region)) {
						$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
						$r->property_region = jr_gettext('_JOMRES_CUSTOMTEXT_REGIONS_'.$r->property_region, $jomres_regions->get_region_name($r->property_region), false);
					} else {
						$r->property_region = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION', $r->property_region, false);
					}
				}

				if( !function_exists('cmp') ) {
					function cmp($a, $b) {
						return strcmp($a->property_region, $b->property_region);
					}
				}

				usort($regions, 'cmp');

				foreach ($regions as $u) {
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			case '4':
				$query = 'SELECT propertys_uid, property_town FROM #__jomres_propertys WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ORDER BY property_town';
				$uids = doSelectSql($query);
				foreach ($uids as $u) {
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			case '5':
				$query = 'SELECT propertys_uid, stars FROM #__jomres_propertys WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ORDER BY stars DESC';
				$uids = doSelectSql($query);
				foreach ($uids as $u) {
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			// Many thanks Derek B from Adonis Media Ltd
			case '6':
				$query = 'SELECT p.propertys_uid, rr.roomrateperday FROM #__jomres_propertys AS p LEFT JOIN #__jomres_rates AS rr ON p.propertys_uid = rr.property_uid WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ORDER BY rr.roomrateperday ASC';
				$uids = doSelectSql($query);
				foreach ($uids as $u) {
					//if ( (float)$u->roomrateperday > 0)
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			// Many thanks Derek B from Adonis Media Ltd
			case '7':
				$query = 'SELECT p.propertys_uid, rr.roomrateperday FROM #__jomres_propertys AS p LEFT JOIN #__jomres_rates AS rr ON p.propertys_uid = rr.property_uid WHERE propertys_uid IN ('.jomres_implode($propertys_uids).') ORDER BY rr.roomrateperday DESC';
				$uids = doSelectSql($query);
				foreach ($uids as $u) {
					$this->propertys_uids[ ] = $u->propertys_uid;
				}
				break;
			//########################################################################################
			default:
				$this->propertys_uids = $propertys_uids;
				break;
		}

		//we`ll set the property uids array to showtime so we can further filter them if necessary in other j01009 minicomponents
		set_showtime('filtered_property_uids', $this->propertys_uids);

		$sortArray = array();

		$sortArray[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_SORTORDER_DEFAULT', '_JOMRES_SORTORDER_DEFAULT', false, false));
		$sortArray[ ] = jomresHTML::makeOption('2', jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME', '_JOMRES_SORTORDER_PROPERTYNAME', false, false));
		$sortArray[ ] = jomresHTML::makeOption('3', jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION', '_JOMRES_SORTORDER_PROPERTYREGION', false, false));
		$sortArray[ ] = jomresHTML::makeOption('4', jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN', '_JOMRES_SORTORDER_PROPERTYTOWN', false, false));
		$sortArray[ ] = jomresHTML::makeOption('5', jr_gettext('_JOMRES_SORTORDER_STARS', '_JOMRES_SORTORDER_STARS', false, false));
		//$sortArray[]=jomresHTML::makeOption("6", jr_gettext('_JOMRES_SORTORDER_PRICE_ASC','_JOMRES_SORTORDER_PRICE_ASC',false,false));
		//$sortArray[]=jomresHTML::makeOption("7", jr_gettext('_JOMRES_SORTORDER_PRICE_DESC','_JOMRES_SORTORDER_PRICE_DESC',false,false));

		$order[ 'HORDER' ] = jr_gettext('_JOMRES_ORDER', '_JOMRES_ORDER');

		$order[ 'ORDER' ] = jomresHTML::selectList($sortArray, 'sortby', 'onchange="generic_reload(\'jomsearch_sortby\',this.value);" size="1"', 'value', 'text', $sortid);
		$sortorder = array();
		$sortorder[ ] = $order;

		if (!$data_only && $jrConfig[ 'show_search_order' ] == '1') {
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('order.html');
			$tmpl->addRows('sort_order', $sortorder);
			set_showtime('order_dropdown', $tmpl->getParsedTemplate());
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_SORTORDER_DEFAULT', '_JOMRES_SORTORDER_DEFAULT');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME', '_JOMRES_SORTORDER_PROPERTYNAME');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION', '_JOMRES_SORTORDER_PROPERTYREGION');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN', '_JOMRES_SORTORDER_PROPERTYTOWN');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_STARS', '_JOMRES_SORTORDER_STARS');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_PRICE_ASC', '_JOMRES_SORTORDER_PRICE_ASC');
		$output[ ] = jr_gettext('_JOMRES_SORTORDER_PRICE_DESC', '_JOMRES_SORTORDER_PRICE_DESC');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return $this->propertys_uids;
	}
}
