<?php
/**
#
 * Mini-component core file: Shows the property header
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
 * Show the property header
 #
* @package Jomres
#
 */
class j01070showpropertyheader
	{
	/**
	#
	 * Constructor: Constructs and displays header details through the property header patTemplate file. Optionally, if a property header override file has been installed (allows different headers for SRPs and multirooms) then it will show that instead
	#
	 */
	function j01070showpropertyheader($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig,$jomresConfig_live_site,$mainframe,$jrConfig,$task;
		global $thisJomresPropertyDetails;
		$property_uid=(int)$componentArgs['property_uid'];

		if (is_null($property_uid))
			$property_uid		= intval(jomresGetParam( $_REQUEST, 'property_uid', 0 ));
		if ($property_uid>0)
			{
			/*
			$query="SELECT stars FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."'";
			$starsList =doSelectSql($query);
			foreach ($starsList as $st)
				{
				$stars=$st->stars;
				}
			*/
			$stars=$thisJomresPropertyDetails['stars'];
			$starslink="<img src=\"".$jomresConfig_live_site."/images/M_images/blank.png\" border=\"0\" HEIGHT=\"1\" hspace=\"10\" VSPACE=\"1\" alt=\"star\" />";
			if ($stars!="0")
				{
				$starslink="";
			  	for ($i=1;$i<=$stars;$i++)
		    		{
					$starslink.="<img src=\"".$jomresConfig_live_site."/jomres/images/star.png\" border=\"0\" alt=\"star\" />";
					}
				$starslink.="";
				}
			$property_image['IMAGE']=getImageForProperty("property",$property_uid,$property_uid);

			$property_image['MOSCONFIGLIVESITE']=$jomresConfig_live_site;
			$property_image_ar[]=$property_image;

			$propertyname= stripslashes($thisJomresPropertyDetails['property_name']);
			//$propertyname=str_replace("&amp;","&",$propertyname);
			//$propertyname=str_replace("&#39;","'",$propertyname);
			//$propertyname=str_replace('&quot;','"',$propertyname);
			
			if (strlen($thisJomresPropertyDetails['metatitle'])>0)
				$mainframe->setPageTitle(stripslashes($thisJomresPropertyDetails['metatitle']));
			else
				$mainframe->setPageTitle(stripslashes($thisJomresPropertyDetails['property_name']));
				
			$mainframe->appendMetaTag( 'description', stripslashes($thisJomresPropertyDetails['metadescription']) );
			$mainframe->appendMetaTag( 'keywords', stripslashes($thisJomresPropertyDetails['property_town']).", ".stripslashes($thisJomresPropertyDetails['property_region']).", ".getSimpleCountry(stripslashes($thisJomresPropertyDetails['property_country'])) );

			if ($task=="viewproperty" || $task == "preview")
				{
				if ($mrConfig['showTariffsLink']=="1")
					{
					$link				=	array();
					$link['TARIFFSLINK']=	makePopupLink("?option=com_jomres&task=showTariffs&popup=1&property_uid=$property_uid",jr_gettext('_JOMRES_FRONT_TARIFFS',_JOMRES_FRONT_TARIFFS,$editable=true,$isLink=true));
					$tariffslink[]		= 	$link;
					}
				if ($mrConfig['showSlideshowLink']=="1")
					{
					if (isset($jrConfig['ss_popup_width']) and !empty($jrConfig['ss_popup_width']) && isset($jrConfig['ss_popup_height']) and !empty($jrConfig['ss_popup_height']) )
						{
						$w=$jrConfig['ss_popup_width'];
						$h=$jrConfig['ss_popup_height'];
						}
					else
						{
						$w=550;
						$h=500;
						}
					$link				=	array();
					$link['SLIDESHOWLINK']=makePopupLink("?option=com_jomres&task=slideshow&popup=1&property_uid=$property_uid&amp;Itemid=$Itemid",jr_gettext('_JOMRES_FRONT_SLIDESHOW',_JOMRES_FRONT_SLIDESHOW,$editable=true,$isLink=true),TRUE,$w,$h);
					$slideshowlink[]	= 	$link;
					}
				if ($mrConfig['galleryLink']!="")
					{
					$link				=	array();
					$link['GALLERYLINK']=	makePopupLink($mrConfig['galleryLink'],jr_gettext('_JOMRES_FRONT_GALLERYLINK',_JOMRES_FRONT_GALLERYLINK,$editable=true,$isLink=true),FALSE );
					$gallerylink[]		= 	$link;
					}
				if (!empty($mappinglink))
					{
					$link				=	array();
					$link['MAPPINGLINK']=makePopupLink($mappinglink,jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK,$editable=true,$isLink=true),FALSE );
					$mappinglink[]		= 	$link;
					}

				if ($mrConfig['visitorscanbookonline']=='1')
					{
					$link				=	array();
					$link['BOOKINGLINK']="<a href=\"".jomresURL("index.php?option=com_jomres&task=dobooking&amp;Itemid=$Itemid&amp;selectedProperty=$property_uid")."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKAROOM',_JOMRES_FRONT_MR_MENU_BOOKAROOM,$editable=true,$isLink=true)."</a>";

					if ($mrConfig['singleRoomProperty'] ==  '1')
						$link['BOOKINGLINK']="<a href=\"".jomresURL("index.php?option=com_jomres&task=dobooking&amp;Itemid=$Itemid&amp;selectedProperty=$property_uid")."\">".jr_gettext('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY',_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY,$editable=true,$isLink=true)."</a>";
					/*
					if ( $jrConfig['useSSLinBookingform'] == "1" )
						$link['BOOKINGLINK'] = str_replace("http://","https://",$property['BOOKINGLINK']);
					*/
					if ( $jrConfig['useSSLinBookingform'] == "1" )
						$link['BOOKINGLINK'] =jomresURL($property['BOOKINGLINK'],1);
					else
						$link['BOOKINGLINK'] =jomresURL($property['BOOKINGLINK']);
					$bookinglink[]		= 	$link;
					}

				if ( $mrConfig['showRoomsListingLink']=="1")
					{
					$link				=	array();
					$link['ROOMSLISTLINK']=makePopupLink("?option=com_jomres&task=showRoomsListing&popup=1&property_uid=$property_uid",jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE',_JOMRES_COM_MR_QUICKRES_STEP2_TITLE,$editable=true,$isLink=true));
					$roomslistlink[]	= 	$link;
					}
				}

			$tmpl = new patTemplate();
			//$tmpl->addVar( 'templatepath', 'templatepath',$templatepath);
		    $tmpl->addVar( 'stars', 'stars', $starslink);
			$tmpl->addVar( 'property_name', 'property_name',$propertyname);
			$tmpl->addRows( 'property_image', $property_image_ar );

			$tmpl->addRows( 'featurelist', $featureList);
			$tmpl->addRows( 'roomtypes', $rtRows);
			$tmpl->addRows( 'bookinglink', $bookinglink);
			$tmpl->addRows( 'slideshowlink', $slideshowlink);
			$tmpl->addRows( 'tariffslink', $tariffslink);
			$tmpl->addRows( 'gallerylink', $gallerylink);
			$tmpl->addRows( 'roomslistlink', $roomslistlink);
			$tmpl->addRows( 'mappinglink', $mappinklink);
			$mcOutput=$MiniComponents->getAllEventPointsData('01070');
			if (count($mcOutput)>0)
				{
				foreach ($mcOutput as $key=>$val)
					{
					$tmpl->addRows( 'customOutput_'.$key, array($val) );
					}
				}
			$componentArgs=array('tmpl'=>$tmpl);

			if ($mrConfig['singleRoomProperty'] == "0" && $MiniComponents->eventFileExistsCheck('00220') )
				{
				$templatePath=$MiniComponents->triggerEvent('00220',$componentArgs); //
				}
			elseif ($MiniComponents->eventFileExistsCheck('00222') )
				{
				$templatePath=$MiniComponents->triggerEvent('00222',$componentArgs); //
				}
			else
				{
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'property_header.html');
			    $tmpl->displayParsedTemplate();
				}

			if ($jrConfig['dumpTemplate']=="1")
				$tmpl->dump();
			}
		else
			echo "Property uid not set";
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