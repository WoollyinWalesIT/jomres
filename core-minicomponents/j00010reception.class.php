<?php
/**
#
 * Mini-component core file: Constructs and displays the receptionist's menu
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00010reception {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $jomresConfig_live_site,$thisJRUser,$Itemid,$task,$numberOfPropertiesInSystem,$popup,$jrConfig;
		//$accessLevel=$thisJRUser->accesslevel;
		//$property_uid=(int)$componentArgs['property_uid'];
		//$published=$componentArgs['published'];
		$property_uid=(int)getDefaultProperty();

		if ($thisJRUser->userIsManager )
			{
			if ($task != "invoiceForm" && $task != "confirmationForm" && $task != "showRoomDetails" && $task != "editCustomText" && $task != "saveCustomText" && !$popup)
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
						$link=jomresURL('index.php?option=com_jomres&propertyInitialFilter='.$initl.'&Itemid='.$Itemid);
						$initialsOptions[]=jomresHTML::makeOption( $link, $initl );
						}
					$filterDropdown=jomresHTML::selectList($initialsOptions, 'propertyInitialFilter', 'class="inputbox" size="1" OnChange="location.href=propertyDropdown.propertyInitialFilter.options[selectedIndex].value"', 'value', 'text', jomresURL("index.php?option=com_jomres&Itemid=$Itemid&propertyInitialFilter=".$propertyInitialFilter) );
					}

/*				$query="SELECT propertys_uid,property_name,property_othertransport FROM #__jomres_propertys WHERE property_name LIKE '$propertyInitialFilter%' ORDER BY property_name";
				$propertysList =doSelectSql($query);
*/
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
						$obj->property_name=$val['property_name'];
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
					$link=jomresURL('index.php?option=com_jomres&thisProperty='.$property->propertys_uid.'&Itemid='.$Itemid);
					$propertyOptions[]=jomresHTML::makeOption( $link, stripslashes($pname) );
					}
				if ( $propertyInitialFilter && $numberOfPropertiesInSystem > 1 )
					{
					$thisJRUser->set_currentproperty($thisProperty);
					jomresRedirect( jomresURL("index.php?option=com_jomres&Itemid=".$Itemid),"");
					}
				$propertyDropdown= jomresHTML::selectList($propertyOptions, 'thisProperty', 'class="inputbox" size="1" OnChange="location.href=propertyDropdown.thisProperty.options[selectedIndex].value"', 'value', 'text', jomresURL('index.php?option=com_jomres&thisProperty='.$property_uid.'&Itemid='.$Itemid) );
				if (!JOMRES_SINGLEPROPERTY)
					$output['PROPERTYDROPDOWN']=''.$propertyDropdown.$filterDropdown.'';
				}
			}

		$output['HTAGSEARCH']= jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER,false);
		$query="SELECT count FROM #__jomres_pcounter WHERE `p_uid` = '".(int)$property_uid."' LIMIT 1 ";
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
		$output['SEARCHIMAGE']='<img src="'.$jomresConfig_live_site.'/jomres/images/Find.png" width="20" height="20" align="middle" alt="'.$output['HTAGSEARCH'].'"  name="bookGuestIn" border="0" title="'.$output['HTAGSEARCH'].'" />';
		$output['CLICKCOUNTIMAGE']='<img src="'.$jomresConfig_live_site.'/jomres/images/ChartTrend.png"  width="20" height="20" align="middle" alt="Clicks" name="bookGuestIn" border="0" title="Clicks" />';

		$output['CURRENTPROPERTYNAME']=getPropertyName($property_uid).' UID: '.$property_uid;

		$output['HOMELINK']=jomresURL("index.php?option=com_jomres&Itemid=$Itemid");
		$output['HHOME']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_HOME',_JOMRES_FRONT_MR_MENU_ADMIN_HOME,false,true);
		$output['PREVIEWLINK']=jomresURL("index.php?option=com_jomres&task=preview&Itemid=$Itemid");
		$output['HPREVIEW']=jr_gettext('_JOMRES_FRONT_PREVIEW',_JOMRES_FRONT_PREVIEW,false,true);
		
		$output['BOOKAROOMLINK']="index.php?option=com_jomres&task=dobooking&Itemid=$Itemid";
		if ( $jrConfig['useSSLinBookingform'] == "1" )
			$output['BOOKAROOMLINK']=jomresURL($output['BOOKAROOMLINK'],1);
		else
			$output['BOOKAROOMLINK']=jomresURL($output['BOOKAROOMLINK']);
			
		$output['HBOOKAROOM']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,false,true) ;
		$output['BOOKAGUESTINLINK']=jomresURL("index.php?option=com_jomres&task=bookGuestIn&Itemid=$Itemid");
		$output['HBOOKAGUESTIN']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN,false,true) ;
		$output['BOOKGUESTOUTLINK']=jomresURL("index.php?option=com_jomres&task=bookGuestOut&Itemid=$Itemid");
		$output['HBOOKGUESTOUT']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT,false,true) ;
		$output['LISTLIVEBOOKINGSLINK']=jomresURL("index.php?option=com_jomres&task=listLiveBookings&Itemid=$Itemid");
		$output['HLISTLIVEBOOKINGS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS,false,true) ;
		$output['LISTNEWBOOKINGSLINK']=jomresURL("index.php?option=com_jomres&task=listNewBookings&Itemid=$Itemid");
		$output['HLISTNEWBOOKINGS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS,false,true) ;
		$output['LISTGUESTSLINK']=jomresURL("index.php?option=com_jomres&task=listguests&Itemid=$Itemid");
		$output['HLISTGUESTS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN,false,true) ;
		$output['LISTBLACKBOOKINGSLINK']=jomresURL("index.php?option=com_jomres&task=listBlackBookings&Itemid=$Itemid");
		$output['HLISTBLACKBOOKINGS']	=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS,false,true);
		
		if ($jrConfig['menusAsImages']=="1")
			{
			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->menubarItem('dashboard',$output['HOMELINK'],$output['HHOME']);
			$jrtb .= $jrtbar->menubarItem('preview',$output['PREVIEWLINK'],$output['HPREVIEW']);
			$jrtb .= $jrtbar->menubarItem('bookaroom',$output['BOOKAROOMLINK'],$output['HBOOKAROOM']);
			$jrtb .= $jrtbar->menubarItem('listbookings',$output['LISTLIVEBOOKINGSLINK'],$output['HLISTLIVEBOOKINGS']);
			$jrtb .= $jrtbar->menubarItem('listnewbookings',$output['LISTNEWBOOKINGSLINK'],$output['HLISTNEWBOOKINGS']);
			$jrtb .= $jrtbar->menubarItem('bookguestin',$output['BOOKAGUESTINLINK'],$output['HBOOKAGUESTIN']);
			$jrtb .= $jrtbar->menubarItem('bookguestout',$output['BOOKGUESTOUTLINK'],$output['HBOOKGUESTOUT']);
			$jrtb .= $jrtbar->menubarItem('guestadmin',$output['LISTGUESTSLINK'],$output['HLISTGUESTS']);
			$jrtb .= $jrtbar->menubarItem('blackbookings',$output['LISTBLACKBOOKINGSLINK'],$output['HLISTBLACKBOOKINGS']);
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;
			}
		else
			{
			$menubar='<a href="'.$output['HOMELINK'].'">'.$output['HHOME'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['PREVIEWLINK'].'">'.$output['HPREVIEW'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['BOOKAROOMLINK'].'">'.$output['HBOOKAROOM'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['LISTLIVEBOOKINGSLINK'].'">'.$output['HLISTLIVEBOOKINGS'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['LISTNEWBOOKINGSLINK'].'">'.$output['HLISTNEWBOOKINGS'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['BOOKAGUESTINLINK'].'">'.$output['HBOOKAGUESTIN'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['BOOKGUESTOUTLINK'].'">'.$output['HBOOKGUESTOUT'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['LISTGUESTSLINK'].'">'.$output['HLISTGUESTS'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['LISTBLACKBOOKINGSLINK'].'">'.$output['HLISTBLACKBOOKINGS'].'</a>&nbsp;&nbsp;&nbsp;';
			$output['JOMRESTOOLBAR']=$menubar;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
    	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'reception.html');
		global $MiniComponents;
		$mcOutput=$MiniComponents->getAllEventPointsData('00010');
		if (count($mcOutput)>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$tmpl->addRows( 'customOutput_'.$key, array($val) );
				}
			}
		$tmpl->addRows( 'reception',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output['HTAGSEARCH']= jr_gettext('_JOMRES_BOOKING_NUMBER',_JOMRES_BOOKING_NUMBER);
		$output['HHOME']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_HOME',_JOMRES_FRONT_MR_MENU_ADMIN_HOME);
		$output['HPREVIEW']=jr_gettext('_JOMRES_FRONT_PREVIEW',_JOMRES_FRONT_PREVIEW);
		$output['HBOOKAROOM']=jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM) ;
		$output['HBOOKAGUESTIN']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN) ;
		$output['HBOOKGUESTOUT']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT',_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT) ;
		$output['HLISTLIVEBOOKINGS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS) ;
		$output['HLISTNEWBOOKINGS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS) ;
		$output['HLISTGUESTS']=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN) ;
		$output['HLISTBLACKBOOKINGS']	=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS);
		
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