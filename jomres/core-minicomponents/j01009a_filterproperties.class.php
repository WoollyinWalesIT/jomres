<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j01009a_filterproperties
	{
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$data_only=false;
		if (JOMRES_NOHTML == 1)
			$data_only = true;
		if (isset($_REQUEST['dataonly']))
			$data_only=true;
		$propertys_uids=$componentArgs['propertys_uids'];
		
		// get sroting value
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		if (!isset($_REQUEST['jomsearch_sortby']) && isset($tmpBookingHandler->user_settings['jomsearch_sortby']) )
			$sortid = $tmpBookingHandler->user_settings['jomsearch_sortby'];
		else
			{
			if (isset($_REQUEST['jomsearch_sortby']) )
				$sortid = intval(jomresGetParam( $_REQUEST, 'jomsearch_sortby', 1));
			else
				$sortid = 14;
			}
		$tmpBookingHandler->user_settings['jomsearch_sortby'] = $sortid;
		 
		switch ($sortid)
			{
			#########################################################################################
			case '1':
				$this->propertys_uids = $propertys_uids;
			break;
			#########################################################################################
			case '2':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY property_name";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '3':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY property_name DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '4':
				$query = "SELECT propertys_uid, property_region FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ";
				$regions = doSelectSql($query);
				foreach ($regions as $r)
					{
					if (is_numeric($r->property_region))
						{
						$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
						$r->property_region=jr_gettext("_JOMRES_CUSTOMTEXT_REGIONS_".$r->property_region,$jomres_regions->regions[$r->property_region]['regionname'],$editable,false);
						}
					else
						$r->property_region=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$r->property_region,$editable,false);
					}
				function cmp_asc($a, $b)
					{
					return strcmp($a->property_region, $b->property_region);
					}
					
				usort($regions, "cmp_asc");
				
				foreach ($regions as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '5':
				$query = "SELECT propertys_uid, property_region FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ";
				$regions = doSelectSql($query);
				foreach ($regions as $r)
					{
					if (is_numeric($r->property_region))
						{
						$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
						$r->property_region=jr_gettext("_JOMRES_CUSTOMTEXT_REGIONS_".$r->property_region,$jomres_regions->regions[$r->property_region]['regionname'],$editable,false);
						}
					else
						$r->property_region=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_REGION',$r->property_region,$editable,false);
					}
				function cmp_desc($a, $b)
					{
					return strcmp($b->property_region, $a->property_region);
					}
					
				usort($regions, "cmp_desc");
				
				foreach ($regions as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '6':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY property_town";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '7':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY property_town DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '8':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY stars";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '9':
				$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE propertys_uid IN (".implode(',',$propertys_uids).") ORDER BY stars DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '10':
				$query = "SELECT p_uid AS propertys_uid FROM #__jomres_pcounter WHERE p_uid IN (".implode(',',$propertys_uids).") ORDER BY count";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '11':
				$query = "SELECT p_uid AS propertys_uid FROM #__jomres_pcounter WHERE p_uid IN (".implode(',',$propertys_uids).") ORDER BY count DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '12':
				$query = "SELECT MAX(maxpeople) AS maxpeople, property_uid AS propertys_uid FROM #__jomres_rates WHERE property_uid IN (".implode(',',$propertys_uids).") GROUP BY property_uid ORDER BY maxpeople ";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '13':
				$query = "SELECT MAX(maxpeople) AS maxpeople, property_uid AS propertys_uid FROM #__jomres_rates WHERE property_uid IN (".implode(',',$propertys_uids).") GROUP BY property_uid ORDER BY maxpeople DESC ";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '14':
				$searchDate = date("Y/m/d");
				if (isset($_REQUEST['arrivalDate']) && $_REQUEST['arrivalDate'] != '')
					{
					$searchDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ));
					}
				$query = "SELECT MIN(roomrateperday) AS roomrateperday, property_uid AS propertys_uid FROM #__jomres_rates WHERE property_uid IN (".implode(',',$propertys_uids).") AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' GROUP BY property_uid ORDER BY roomrateperday ";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '15':
				$searchDate = date("Y/m/d");
				if (isset($_REQUEST['arrivalDate']) && $_REQUEST['arrivalDate'] != '')
					{
					$searchDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ));
					}
				$query = "SELECT MIN(roomrateperday) AS roomrateperday, property_uid AS propertys_uid FROM #__jomres_rates WHERE property_uid IN (".implode(',',$propertys_uids).") AND DATE_FORMAT('".$searchDate."', '%Y/%m/%d') BETWEEN DATE_FORMAT(`validfrom`, '%Y/%m/%d') AND DATE_FORMAT(`validto`, '%Y/%m/%d') AND roomrateperday > '0' GROUP BY property_uid ORDER BY roomrateperday DESC ";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '16':
				shuffle($propertys_uids);
				$this->propertys_uids = $propertys_uids;
			break;
			#########################################################################################
			case '17':
				asort($propertys_uids);
				$this->propertys_uids = $propertys_uids;
			break;
			#########################################################################################
			case '18':
				arsort($propertys_uids);
				$this->propertys_uids = $propertys_uids;
			break;
			#########################################################################################
			default:
				$this->propertys_uids = $propertys_uids;
			break;
			}
		
		//we`ll set the property uids array to showtime so we can further filter them if necessary in other j01009 minicomponents
		set_showtime('filtered_property_uids',$this->propertys_uids);

		if (isset($_REQUEST['calledByModule']) || get_showtime('task') == "" )
			{
			$tmpBookingHandler->tmpsearch_data['ajax_list_search_results'] = $this->propertys_uids;
			unset($tmpBookingHandler->tmpsearch_data['ajax_list_properties_sets']);
			}
		
			
		$sortArray=array();

		$sortArray[]=jomresHTML::makeOption("1", jr_gettext('_JOMRES_SORTING_PLUGIN_DEFAULT',_JOMRES_SORTING_PLUGIN_DEFAULT,false,false));
		$sortArray[]=jomresHTML::makeOption("2", jr_gettext('_JOMRES_SORTING_PLUGIN_PROPERTYNAME',_JOMRES_SORTING_PLUGIN_PROPERTYNAME,false,false));
		$sortArray[]=jomresHTML::makeOption("3", jr_gettext('_JOMRES_SORTING_PLUGIN_PROPERTYNAME_DESC',_JOMRES_SORTING_PLUGIN_PROPERTYNAME_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("4", jr_gettext('_JOMRES_SORTING_PLUGIN_REGION',_JOMRES_SORTING_PLUGIN_REGION,false,false));
		$sortArray[]=jomresHTML::makeOption("5", jr_gettext('_JOMRES_SORTING_PLUGIN_REGION_DESC',_JOMRES_SORTING_PLUGIN_REGION_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("6", jr_gettext('_JOMRES_SORTING_PLUGIN_TOWN',_JOMRES_SORTING_PLUGIN_TOWN,false,false));
		$sortArray[]=jomresHTML::makeOption("7", jr_gettext('_JOMRES_SORTING_PLUGIN_TOWN_DESC',_JOMRES_SORTING_PLUGIN_TOWN_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("8", jr_gettext('_JOMRES_SORTING_PLUGIN_STARS',_JOMRES_SORTING_PLUGIN_STARS,false,false));
		$sortArray[]=jomresHTML::makeOption("9", jr_gettext('_JOMRES_SORTING_PLUGIN_STARS_DESC',_JOMRES_SORTING_PLUGIN_STARS_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("10", jr_gettext('_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS',_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS,false,false));
		$sortArray[]=jomresHTML::makeOption("11", jr_gettext('_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS_DESC',_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("12", jr_gettext('_JOMRES_SORTING_PLUGIN_GUESTS',_JOMRES_SORTING_PLUGIN_GUESTS,false,false));
		$sortArray[]=jomresHTML::makeOption("13", jr_gettext('_JOMRES_SORTING_PLUGIN_GUESTS_DESC',_JOMRES_SORTING_PLUGIN_GUESTS_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("14", jr_gettext('_JOMRES_SORTING_PLUGIN_PRICE',_JOMRES_SORTING_PLUGIN_PRICE,false,false));
		$sortArray[]=jomresHTML::makeOption("15", jr_gettext('_JOMRES_SORTING_PLUGIN_PRICE_DESC',_JOMRES_SORTING_PLUGIN_PRICE_DESC,false,false));
		$sortArray[]=jomresHTML::makeOption("16", jr_gettext('_JOMRES_SORTING_PLUGIN_RANDOMIZE',_JOMRES_SORTING_PLUGIN_RANDOMIZE,false,false));
		$sortArray[]=jomresHTML::makeOption("17", jr_gettext('_JOMRES_SORTING_PLUGIN_LISTING_AGE',_JOMRES_SORTING_PLUGIN_LISTING_AGE,false,false));
		$sortArray[]=jomresHTML::makeOption("18", jr_gettext('_JOMRES_SORTING_PLUGIN_LISTING_AGE_DESC',_JOMRES_SORTING_PLUGIN_LISTING_AGE_DESC,false,false));

		$order['HORDER']=jr_gettext('_JOMRES_ORDER',_JOMRES_ORDER);

		$order['ORDER']=jomresHTML::selectList( $sortArray, 'sortby', 'onchange="generic_reload(\'jomsearch_sortby\',this.value);" id="sortby" size="1"', 'value', 'text', $sortid );
		$sortorder=array();
		$sortorder[]=$order;
		
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;

		if (!$data_only && $jrConfig['show_search_order'] =="1")
			{
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'order.html' );
			$tmpl->addRows( 'sort_order', $sortorder);
			set_showtime("order_dropdown",$tmpl->getParsedTemplate());
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_DEFAULT',_JOMRES_SORTING_PLUGIN_DEFAULT);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_PROPERTYNAME',_JOMRES_SORTING_PLUGIN_PROPERTYNAME);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_PROPERTYNAME_DESC',_JOMRES_SORTING_PLUGIN_PROPERTYNAME_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_REGION',_JOMRES_SORTING_PLUGIN_REGION);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_REGION_DESC',_JOMRES_SORTING_PLUGIN_REGION_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_TOWN',_JOMRES_SORTING_PLUGIN_TOWN);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_TOWN_DESC',_JOMRES_SORTING_PLUGIN_TOWN_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_STARS',_JOMRES_SORTING_PLUGIN_STARS);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_STARS_DESC',_JOMRES_SORTING_PLUGIN_STARS_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS',_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS_DESC',_JOMRES_SORTING_PLUGIN_MOST_POPULAR_CLICKS_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_GUESTS',_JOMRES_SORTING_PLUGIN_GUESTS);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_GUESTS_DESC',_JOMRES_SORTING_PLUGIN_GUESTS_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_PRICE',_JOMRES_SORTING_PLUGIN_PRICE);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_PRICE_DESC',_JOMRES_SORTING_PLUGIN_PRICE_DESC);
		$output[]		=jr_gettext('_JOMRES_SORTING_PLUGIN_RANDOMIZE',_JOMRES_SORTING_PLUGIN_RANDOMIZE);
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	
	function genericIn($idArray,$idArrayisInteger=true)
	{
	$newArr=array();
	foreach ($idArray as $id)
		{
		$newArr[]=$id;
		}
	$idArray=$newArr;
	$txt=" ( ";
	for ($i=0, $n=count($idArray); $i < $n; $i++)
		{
		if ($idArrayisInteger)
			$id=(int)$idArray[$i];
		else
			$id=$idArray[$i];
		$txt .= "'$id'";
		if ($i < count($idArray)-1)
			$txt .= ",";
		}
	$txt .= " ) ";
	return $txt;
	}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->propertys_uids;
		}
	}
?>