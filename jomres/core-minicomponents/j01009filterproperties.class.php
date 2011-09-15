<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Passed the property uids to be listed, will re-order those property uids. Allows us to create plugins (for example for the portal) which can create featured properties
 #
* @package Jomres
#
 */
class j01009filterproperties
	{
	function j01009filterproperties($componentArgs)
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
		$sortid = intval(jomresGetParam( $_REQUEST, 'jomsearch_sortby', $jrConfig['search_order_default']));
		switch ($sortid)
			{
			#########################################################################################
			case '1':
				$this->propertys_uids = $propertys_uids;
			break;
			#########################################################################################
			case '2':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT propertys_uid, property_name FROM #__jomres_propertys WHERE $gor ORDER BY property_name";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '3':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT propertys_uid, property_region FROM #__jomres_propertys WHERE $gor ORDER BY property_region";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '4':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT propertys_uid, property_town FROM #__jomres_propertys WHERE $gor ORDER BY property_town";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			case '5':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT propertys_uid, stars FROM #__jomres_propertys WHERE $gor ORDER BY stars DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			// Many thanks Derek B from Adonis Media Ltd
			case '6':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT p.propertys_uid, rr.roomrateperday FROM #__jomres_propertys AS p LEFT JOIN #__jomres_rates AS rr ON p.propertys_uid = rr.property_uid WHERE $gor ORDER BY rr.roomrateperday ASC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
					{
					//if ( (float)$u->roomrateperday > 0)
						$this->propertys_uids[] = $u->propertys_uid;
					}
			break;
			#########################################################################################
			// Many thanks Derek B from Adonis Media Ltd
			case '7':
				$gor=genericOr($propertys_uids,'propertys_uid');
				$query = "SELECT p.propertys_uid, rr.roomrateperday FROM #__jomres_propertys AS p LEFT JOIN #__jomres_rates AS rr ON p.propertys_uid = rr.property_uid WHERE $gor ORDER BY rr.roomrateperday DESC";
				$uids = doSelectSql($query);
				foreach ($uids as $u)
				$this->propertys_uids[] = $u->propertys_uid;
			break;
			#########################################################################################
			default:
				$this->propertys_uids = $propertys_uids;
			break;
			}
		$sortArray=array();

		$sortArray[]=jomresHTML::makeOption("1", jr_gettext('_JOMRES_SORTORDER_DEFAULT',_JOMRES_SORTORDER_DEFAULT,false,false));
		$sortArray[]=jomresHTML::makeOption("2", jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME',_JOMRES_SORTORDER_PROPERTYNAME,false,false));
		$sortArray[]=jomresHTML::makeOption("3", jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION',_JOMRES_SORTORDER_PROPERTYREGION,false,false));
		$sortArray[]=jomresHTML::makeOption("4", jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN',_JOMRES_SORTORDER_PROPERTYTOWN,false,false));
		$sortArray[]=jomresHTML::makeOption("5", jr_gettext('_JOMRES_SORTORDER_STARS',_JOMRES_SORTORDER_STARS,false,false));
		//$sortArray[]=jomresHTML::makeOption("6", jr_gettext('_JOMRES_SORTORDER_PRICE_ASC',_JOMRES_SORTORDER_PRICE_ASC,false,false));
		//$sortArray[]=jomresHTML::makeOption("7", jr_gettext('_JOMRES_SORTORDER_PRICE_DESC',_JOMRES_SORTORDER_PRICE_DESC,false,false));
		
		$order['HORDER']=jr_gettext('_JOMRES_ORDER',_JOMRES_ORDER);

		$order['ORDER']=jomresHTML::selectList( $sortArray, 'sortby', 'onchange="generic_reload(\'jomsearch_sortby\',this.value);" id="sortby" size="1"', 'value', 'text', $sortid );
		$sortorder=array();
		$sortorder[]=$order;

		if (!$data_only && $jrConfig['show_search_order'] =="1")
			{
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'order.html' );
			$tmpl->addRows( 'sort_order', $sortorder);
			$tmpl->displayParsedTemplate();
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_SORTORDER_DEFAULT',_JOMRES_SORTORDER_DEFAULT);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_PROPERTYNAME',_JOMRES_SORTORDER_PROPERTYNAME);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_PROPERTYREGION',_JOMRES_SORTORDER_PROPERTYREGION);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_PROPERTYTOWN',_JOMRES_SORTORDER_PROPERTYTOWN);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_STARS',_JOMRES_SORTORDER_STARS);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_PRICE_ASC',_JOMRES_SORTORDER_PRICE_ASC);
		$output[]		=jr_gettext('_JOMRES_SORTORDER_STARS',_JOMRES_SORTORDER_PRICE_DESC);
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->propertys_uids;
		}
	}
?>