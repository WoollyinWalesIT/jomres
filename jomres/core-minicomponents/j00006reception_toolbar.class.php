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


class j00006reception_toolbar {
	function j00006reception_toolbar($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		// Show the reception menu
		$thisJRUser=jomres_getSingleton('jr_user');
		$accessLevel=$thisJRUser->accesslevel;

		//$MiniComponents->triggerEvent('00010'); // Depreciated in v4a2
		jr_import('jomres_cache');
		$cache = new jomres_cache("reception_menu",0,true);
		$cacheContent = $cache->readCache();
		if ($cacheContent && !isset($_REQUEST['thisProperty']))
			{
			echo $cacheContent;
			}
		else
			{
			$rows		=array();
			$pageoutput	=array();
			$output=array();
			if (get_showtime('task') != "invoiceForm" && get_showtime('task') != "confirmationForm" && get_showtime('task') != "showRoomDetails" && get_showtime('task') != "editCustomText" && get_showtime('task') != "saveCustomText" && !$popup)
				{
				$propertyOptions=array();
				$initialsOptions=array();
				$propertyInitialFilter	= jomresGetParam( $_REQUEST, 'propertyInitialFilter', '' );
				foreach ($thisJRUser->authorisedPropertyDetails as $pn)
					{
					$initials[]=strtoupper(substr($pn['property_name'],0,1) );
					}
				if (count($initials) > 1)
					$initials=array_unique($initials);
				if (count($initials) >0)
					asort($initials);
				$initialsOptions[]=jomresHTML::makeOption( '', "&nbsp;" );
				if (count($initials) >0)
					{
					foreach ($initials as $initl )
						{
						$link=jomresURL(JOMRES_SITEPAGE_URL.'&propertyInitialFilter='.$initl.'');
						$initialsOptions[]=jomresHTML::makeOption( $link, $initl );
						}
					$filterDropdown=jomresHTML::selectList($initialsOptions, 'propertyInitialFilter', 'size="1" OnChange="location.href=propertyDropdown.propertyInitialFilter.options[selectedIndex].value"', 'value', 'text', jomresURL(JOMRES_SITEPAGE_URL."&propertyInitialFilter=".$propertyInitialFilter) );
					}
				if (strlen($propertyInitialFilter)>0)
					{
					$query="SELECT propertys_uid,property_name,property_othertransport FROM #__jomres_propertys WHERE property_name LIKE '$propertyInitialFilter%' ORDER BY property_name";
					$propertysList =doSelectSql($query);
					}
				else
					{
					// Rather than rewriting a whole bunch of the following code, we will make use of new data provided by the thisJRUser class, then refactor it to look like it came from a db query. v2.6.1
					$tmpArray = array();
					foreach ($thisJRUser->authorisedPropertyDetails as $key=>$val)
						{
						$obj = new stdClass();
						$obj->propertys_uid=$key;
						$basic_property_details =jomres_getSingleton('basic_property_details');
						$obj->property_name=$basic_property_details->get_property_name($key);
						//$obj->property_name=$val['property_name'];
						$tmpArray[]=$obj;
						}
					$propertysList =$tmpArray;
					}
				$counter=0;
				foreach ($propertysList as $property)
					{
					if ($counter==0)
						$thisProperty=$property->propertys_uid;
					$counter++;
					$pname=$property->property_name.' '.$property->propertys_uid;
					$link=jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.$property->propertys_uid);
					$propertyOptions[]=jomresHTML::makeOption( $link, stripslashes($pname) );
					}
				if ( $propertyInitialFilter && get_showtime('numberOfPropertiesInSystem') > 1 )
					{
					$thisJRUser->set_currentproperty($thisProperty);
					jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL),"");
					}
				$propertyDropdown= jomresHTML::selectList($propertyOptions, 'thisProperty', 'size="1" OnChange="location.href=propertyDropdown.thisProperty.options[selectedIndex].value"', 'value', 'text', jomresURL(JOMRES_SITEPAGE_URL.'&thisProperty='.get_showtime('property_uid')) );
				if (!JOMRES_SINGLEPROPERTY)
					$output['PROPERTYDROPDOWN']=''.$propertyDropdown.$filterDropdown.'';
				}

			$output['HTAGSEARCH']= jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,false);
			$query="SELECT count FROM #__jomres_pcounter WHERE `p_uid` = '".(int)get_showtime('property_uid')."' LIMIT 1 ";
			$clickList= doSelectSql($query);
			if (count($clickList)>0)
				{
				foreach ($clickList as $click)
					{
					$output['CLICKCOUNT']=$click->count;
					}
				}
			else
				$output['CLICKCOUNT']=0;
			$output['SEARCHIMAGE']='<img src="'.get_showtime('live_site').'/jomres/images/Find.png" width="20" height="20" align="middle" alt="'.$output['HTAGSEARCH'].'"  name="Find" border="0" title="'.$output['HTAGSEARCH'].'" />';
			$output['CLICKCOUNTIMAGE']='<img src="'.get_showtime('live_site').'/jomres/images/ChartTrend.png"  width="20" height="20" align="middle" alt="Clicks" name="bookGuestIn" border="0" title="Clicks" />';

			$MiniComponents->triggerEvent('00010'); //
			$mcOutput=$MiniComponents->getAllEventPointsData('00010');

			foreach ($mcOutput as $key=>$val)
				{
				$r=array();
				$r["OPTIONS"]=$val;
				$rows[]=$r;
				}

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			if ($management_view)
				$tmpl->readTemplatesFromInput('toolbar_reception_manager_view.html');
			else
				$tmpl->readTemplatesFromInput('toolbar_reception.html');

			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'rows',$rows);
			$cachableContent = $tmpl->getParsedTemplate();
			$cache->setCache($cachableContent);
			unset($cache);
			echo $cachableContent;
			$componentArgs=array();
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>