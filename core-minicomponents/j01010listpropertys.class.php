<?php
/**
#
 * Mini-component core file: Constructs and displays one template of a property for each property uid passed to it
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Lists the properties, according to property uids passed from a search function
 #
* @package Jomres
#
 */
class j01010listpropertys {
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j01010listpropertys($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $mrConfig,$jomresConfig_live_site,$jomresConfig_lang,$method,$jrConfig,$jomresConfig_list_limit,$customTextArray;
		global $customTextObj;
		global $_MAMBOTS;
		$jrConfig=getSiteSettings();
		$maximumProperties=100; // Limits the maximum number of properties that can be returned in a search

		$propertys_uids=$componentArgs['propertys_uid'];
		$newSearch=false;
		if ($propertys_uids=="")
			$propertys_uids=array();
		if ( !isset($_REQUEST['page']) )
			$newSearch=true;
			
		$limit = jomresGetParam( $_REQUEST, 'limit', (int)$jomresConfig_list_limit);

		if (!@session_start())
			{
			@ini_set('session.save_handler', 'files');
			session_start();
			}

		if ($newSearch)
			{
			$property_id_string= implode($propertys_uids,",");
			$_SESSION['jomsearch_results']=$property_id_string;
			}
		else
			{
			$search_results=$_SESSION['jomsearch_results'];
			if ($search_results != '')
				$propertys_uids=explode(",",$search_results);
			$p=array();
			foreach ($propertys_uids as $pid)
				{
				$p[]=intval($pid);
				}
			$propertys_uids=$p;
			}

		if ($MiniComponents->eventFileExistsCheck('01009') )
			$propertys_uids=$MiniComponents->triggerEvent('01009',array('propertys_uids'=>$propertys_uids) ); // Pre list properties parser. Allows us to to filter property lists if required
		// Added to prevent out of memory messages. Note, this function means the if there are more than 100 returns only a 70 of those elements are saved for display
		if (count($propertys_uids) >$maximumProperties)
			{
			$counter=1;
			$tmpArray=array();
			while ($counter<=$maximumProperties)
				{
				$tmpArray[]=$propertys_uids[$counter];
				$counter++;
				}
			$propertys_uids=$tmpArray;
			}
		if ($limit<0)
			$limit=0;
		if ($limit > count($propertys_uids))
			$limit=count($propertys_uids);

		// Enable the following two lines if you want to do a search and be taken direct to a booking form if only one property is returned.
		//if (count($propertys_uids) == 1)
		//	jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&selectedProperty=".$propertys_uids[0]), "" );

		if (count($propertys_uids) >0)
			{
			$g=genericOr($propertys_uids,'propertys_uid');
			$query="SELECT propertys_uid,property_name,property_town,property_description,stars,property_features FROM #__jomres_propertys WHERE ";
			$query.=$g;
			$total_records=count($propertys_uids);
			$record_per_page=$limit;
			$scroll=5;
			$start=jomresGetParam( $_REQUEST, 'page', 0 );
			if (count($propertys_uids) <= $scroll)
				$start=0;
			$page=new JomresPage(); ///creating new instance of Class Page
			$page->set_page_data(JOMRES_SITEPAGE_URL,$total_records,$record_per_page,$scroll,true,true,true,$limit);

			$order = implode($propertys_uids,",");
			$page->set_qry_string('limit='.$limit);
			$query.=" ORDER BY FIELD(propertys_uid, $order)";
			$query=$page->get_limit_query($query,$start);

			$nav=array();
			$nav_output=array();
			$url=JOMRES_SITEPAGE_URL."";

			$url= "";
			$page->set_qry_string($url);
			$paging=$page->get_page_nav();
			$nav['WRITEPAGESLINKS'] = $paging;
			$nav['WRITEPAGESCOUNTER'] = $page->writePagesCounterJR();
			$nav_output[]=$nav;

			$propertyDeets = @doSelectSql($query);

			if (count($propertyDeets) > 0)
				{
				$propertysToShow=array();
				foreach ($propertyDeets as $prop)
					{
					$propertysToShow[]=$prop->propertys_uid;
					}
				// Now we'll grab all of the room type/classes information for these properties. The will cut the number of queries performed by this room listing script considerably.
				// For historical reasons some tables in Jomres use propertys_uid and some use property_uid (note the 's') so g_pids is for those tables that use propertys_uid, while g_pid is for those without
				$g_pids=genericOr($propertysToShow,'propertys_uid');
				$g_pid =genericOr($propertysToShow,'property_uid');

				// Tariffs
				$tariffsArray=array();
				$query = "SELECT property_uid,validfrom,validto,roomrateperday FROM #__jomres_rates WHERE ".$g_pid;

				$tariffList = doSelectSql($query);
				$ratesArray=array();
				if (count($tariffList) > 0)
					{
					foreach ($tariffList as $t)
						{
						$tariffsArray[][$t->property_uid]=array('validfrom'=>$t->validfrom,'validto'=>$t->validto,'roomrateperday'=>$t->roomrateperday);
						}
					}

				// Room types
				$rtArray=array();
				$rt_idsArr=array();
				$query="SELECT propertys_uid,room_classes_uid FROM #__jomres_rooms WHERE ".$g_pids." ";
				$result= doSelectSql($query);
				foreach ($result as $r)
					{
					//echo $r->room_classes_uid;
					$rt_idsArr[]=$r->room_classes_uid;
					if (!is_array($rtArray[$r->propertys_uid]) )
						$rtArray[$r->propertys_uid]=array();
					if (!in_array($r->room_classes_uid,$rtArray[$r->propertys_uid]) )
					$rtArray[$r->propertys_uid][]=$r->room_classes_uid;
					}
				$rtDetailsArray=array();
				$temp=array_unique($rt_idsArr);
				$rt_idsArr=array_values($temp);

				$rt_ids =genericOr($rt_idsArr,'room_classes_uid');
				$query="SELECT room_classes_uid,room_class_abbv,room_class_full_desc,image FROM #__jomres_room_classes WHERE ".$rt_ids;
				$rtDetails=doSelectSql($query);
				foreach ($rtDetails as $rt)
					{
					$rtDetailsArray[$rt->room_classes_uid]=array('room_class_abbv'=>$rt->room_class_abbv,'room_class_full_desc'=>$rt->room_class_full_desc,'image'=>$rt->image);
					}

				// Property features
				$featuresArray=array();
				$query = "SELECT hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
				$propertyFeaturesList= doSelectSql($query);
				foreach ($propertyFeaturesList as $f)
					{
					$featuresArray[$f->hotel_features_uid]=array('hotel_feature_abbv'=>$f->hotel_feature_abbv,'hotel_feature_full_desc'=>$f->hotel_feature_full_desc,'image'=>$f->image);
					}
				}
			}
		$templateCounter=1;

		if (!isset($_REQUEST['arrivalDate']) )
			{
			if (isset($_COOKIE['jomsearch_availability']))
				$arrivalDate	=jomresGetParam( $_COOKIE,'jomsearch_availability', '' );
			else
				$arrivalDate=date("Y/m/d");
			}
		else
			$arrivalDate	=JSCalConvertInputDates(jomresGetParam( $_REQUEST, 'arrivalDate', "" ),$siteCal=true);
		$date_elements  = explode("/",$arrivalDate);
		$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

		if (count($propertyDeets) >0)
			{
			$property_details=array();
			foreach ($propertyDeets as $property)
				{
				$customTextArray=$customTextObj->get_custom_text_for_property($property->propertys_uid);

				$property_deets=array();
				$property_deets=$MiniComponents->triggerEvent('00042',array('property_uid'=>$property->propertys_uid) );
				$mrConfig=getPropertySpecificSettings($property->propertys_uid);
				$featureList=array();
				$ptown=stripslashes($property->property_town);
				$stars=$property->stars;
				$propertyDesc=jomres_cmsspecific_parseByBots(jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', htmlspecialchars(trim(stripslashes($property->property_description)), ENT_QUOTES),false,false ));

				$property_image=$jomresConfig_live_site."/jomres/images/jrlogo.png";
				if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH."/images/stories/jomres/".$property->propertys_uid."_property_".$property->propertys_uid.".jpg") )
					$property_image=$jomresConfig_live_site."/images/stories/jomres/".$property->propertys_uid."_property_".$property->propertys_uid.".jpg";
				$starslink="<img src=\"".$jomresConfig_live_site."/images/M_images/blank.png\" alt=\"star\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\" />";
				if ($stars!="0")
					{
					$starslink="";
						for ($i=1;$i<=$stars;$i++)
			    		{
						$starslink.="<img src=\"".$jomresConfig_live_site."/jomres/images/star.png\" alt=\"star\" border=\"0\" />";
						}
					$starslink.="";
					}

				$propertyFeaturesArray=explode(",",($property->property_features));

				$rtRows="";
				$rArr=$rtArray[$property->propertys_uid];
				if (count($rArr)<1)
					$rtRows[]['feature']="Error, rooms found but not linked to room types. You will not be able to book a room from this property";
				else
					{
					foreach ($rArr as $rtd)
						{
						//$rtRows.=makeFeatureImages($rtDetailsArray[$rtd]['image'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$retString=true)."&nbsp;";
						$rtRows.=jomres_makeTooltip($rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_abbv'],$rtDetailsArray[$rtd]['room_class_full_desc'],$rtDetailsArray[$rtd]['image'],"","room_type",array());
							
						}
					}
				$property_deets['ROOMTYPES']=$rtRows;


				if (count($propertyFeaturesArray)>0)
					{
					$featureList="";
					$counter=0;
					foreach ($featuresArray as $k=>$v)
						{
						if (in_array($k,$propertyFeaturesArray ) )
							{
							if ( ($counter/10 )==0)
								$br="<br />";
							//$featureList.=makeFeatureImages($featuresArray[$k]['image'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$retString=true)."&nbsp;";
							$featureList.=jomres_makeTooltip($featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_abbv'],$featuresArray[$k]['hotel_feature_full_desc'],$featuresArray[$k]['image'],"","property_feature",array());
							$counter++;
							}
						}
					$property_deets['FEATURELIST']=$featureList;
					}

				$tArr=array();
				$ratesArray=array();

				foreach ($tariffsArray as $k=>$v)
					{
					$key=key($v);
					$val=$tariffsArray[$k][$key];
					if (key($v)==intval($property->propertys_uid))
						$tArr[]=$val;
					}
				foreach ($tArr as $t)
					{
					$date_elements	 = explode("/",$t['validfrom']);
					$unixValidfrom= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					$date_elements	 = explode("/",$t['validto']);
					$unixValidto= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
					if ( $unixValidfrom <= $unixTodaysDate && $unixValidto >= $unixTodaysDate )
						{
						$ratesArray[]=$t['roomrateperday'];
						}
					}
				if (count($ratesArray) >0)
					{
					sort($ratesArray,SORT_NUMERIC);
					$lowestPrice=$ratesArray[0];
					}
				else
					$lowestPrice="-";

				$currfmt = new jomres_currency_format();
				$price=$mrConfig['currency'].$currfmt->get_formatted($lowestPrice);

				$propertyAddressArray=getPropertyAddressForPrint($property->propertys_uid);
				$propertyContactArray=$propertyAddressArray[1];
				$propertyAddyArray=$propertyAddressArray[2];

				$property_deets['COUNTER']=$templateCounter;
				$templateCounter++;
				//$property_deets['PROP_TYPE']=$propertyAddressArray[3];

				if ($mrConfig['visitorscanbookonline'] == "1")
					{
					if ( $jrConfig['useSSLinBookingform'] == "1" )
						$url=jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=".$property->propertys_uid,1);
					else
						$url=jomresURL(JOMRES_SITEPAGE_URL."&task=dobooking&amp;selectedProperty=".$property->propertys_uid);
						
					$property_deets['LINKONLY']="<a href=\"".$url."\" title=\"".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,$editable=false,$isLink=true)."\">";
					if ($mrConfig['singleRoomProperty'] =="1")
						$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,false,false) ;
					else
						$property_deets['BOOKTHIS_TEXT']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,false) ;
					/*
					if ( $jrConfig['useSSLinBookingform'] == "1" )
						{
						$property_deets['LINKONLY'] = str_replace("http://","https://",$property_deets['LINKONLY']);
						}
					*/
					

					}
				else
					{
					$property_deets['BOOKTHIS_TEXT']="<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=contactowner&amp;selectedProperty=".$property->propertys_uid)."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL',_JOMRES_FRONT_MR_MENU_CONTACTHOTEL,$editable=true,$isLink=true)."</a>";
					$bookinglink[]		= 	$link;
					}

				$property_deets['PROP_NAME']=stripslashes($propertyContactArray[0]);
				$property_deets['PROP_STREET']=stripslashes($propertyContactArray[1]);
				$property_deets['PROP_TOWN']=stripslashes($propertyContactArray[2]);
				$property_deets['PROP_POSTCODE']=stripslashes($propertyContactArray[3]);
				$property_deets['PROP_REGION']=stripslashes($propertyContactArray[4]);
				$property_deets['PROP_COUNTRY']=stripslashes(getSimpleCountry($propertyContactArray[5]));

				$property_deets['LIVESITE']=$jomresConfig_live_site;
				$property_deets['MOREINFORMATION']= jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,true) ;
				$property_deets['PRICESFROM']= jr_gettext('_JOMRES_TARIFFSFROM',_JOMRES_TARIFFSFROM,$editable=true,true) ;
				$property_deets['MOREINFORMATIONLINK']=jomresURL( JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property->propertys_uid) ;
				$property_deets['PROPERTYNAME']= stripslashes($propertyContactArray[0]);
				$property_deets['PROPERTYTOWN']= $ptown;
				$property_deets['PROPERTYDESC']= substr($propertyDesc,0,$jrConfig['propertyListDescriptionLimit'])."...";
				$property_deets['IMAGE']=$property_image;
				$property_deets['LOWESTPRICE']=$price;
				$property_deets['STARS']=$starslink;
				//$property_deets['TEMPLATEPATH']=$templatepath;
				$MiniComponents->triggerEvent('001011',array('property_uid'=>$property->propertys_uid) ); // Optional
				$mcOutput=$MiniComponents->getAllEventPointsData('01011');
				if (count($mcOutput)>0)
					{
					foreach ($mcOutput as $key=>$val)
						{
						$result=array_merge($property_deets,$val);
						$property_deets=$result;
						}
					}
				$property_details[]=$property_deets;
				}

			$tmpl = new patTemplate();
			$tmpl->addRows( 'property_details', $property_details );
			$tmpl->addRows( 'nav_output_top', $nav_output);
			$tmpl->addRows( 'nav_output_bottom', $nav_output);
			$mcOutput=$MiniComponents->getAllEventPointsData('01010');
			if (count($mcOutput)>0)
				{
				foreach ($mcOutput as $key=>$val)
					{
					$tmpl->addRows( 'customOutput_'.$key, array($val) );
					}
				}
			$componentArgs=array('tmpl'=>$tmpl);
			if ($MiniComponents->eventFileExistsCheck('00232'))
				{
				$MiniComponents->triggerEvent('00232',$componentArgs); //
				}
			else
				{
		    	$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		    	$tmpl->readTemplatesFromInput( 'list_properties.html' );
		    	$tmpl->displayParsedTemplate();
				}


			if ($jrConfig['dumpTemplate']=="1")
				$tmpl->dump();
	    	}
		else
			echo jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS,$editable=true,$islink=false) ;
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION) ;
		$output[]		=jr_gettext('_JOMRES_TARIFFSFROM',_JOMRES_TARIFFSFROM) ;
		$output[]		=jr_gettext('_JOMRES_FRONT_NORESULTS',_JOMRES_FRONT_NORESULTS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
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