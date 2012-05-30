<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j00060toptemplate {
	function j00060toptemplate($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (get_showtime('topoff'))
			return;
		
		$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		
		$tz = $componentArgs['tz'];
		$jomreslang = $componentArgs['jomreslang'];
		
		$management_view=jomresGetParam($_REQUEST,'tmpl',false);

		$popup				= intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
		
		
		if (!defined('JOMRES_NOHTML') && $popup != 1 )
			{
			$output=array();
			
			$output['EDITING_MODE_DROPDOWN']='';
			$editing_mode =jomres_singleton_abstract::getInstance('jomres_editing_mode');
			$result = $editing_mode->make_editing_mode_dropdown();
			if ($result)
				$output['EDITING_MODE_DROPDOWN']=$result;
			set_showtime("menuitem_editing_mode_dropdown",$output['EDITING_MODE_DROPDOWN']);
			if (_JOMRES_DETECTED_CMS == "joomla15" || _JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla17" || _JOMRES_DETECTED_CMS == "joomla25")
				{
				if ($thisJRUser->userIsManager)
					{
					$defaultProperty=getDefaultProperty();
					$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
					$output['PROPERTYNAME']= $current_property_details->get_property_name($defaultProperty);
					set_showtime("menuitem_propertyname",$output['PROPERTYNAME']);
					
					jr_import('jomres_management_view');
					$jomres_management_view = new jomres_management_view();
					$management_dropdown = $jomres_management_view->get_dropdown();
					$output['MANAGEMENT_VIEW_DROPDOWN']=$management_dropdown;
					set_showtime("menuitem_management_view_dropdown",$output['MANAGEMENT_VIEW_DROPDOWN']);
					
					$output['TIMEZONE_DROPDOWN'] = '';
					$output['TIMEZONEBLURB']= '';
					if ($jrConfig['use_timezone_switcher'] == "1")
						{
						$output['TIMEZONE_DROPDOWN']=$tz->get_dropdown();
						$date = new DateTime(null, new DateTimeZone($thisJRUser->users_timezone));
						$output['TIMEZONEBLURB']= outputDate(date_format($date, "Y/m/d"))." ".date_format($date, "H:i:s");
						}
					set_showtime("menuitem_timezone_dropdown",$output['TIMEZONE_DROPDOWN']);
					set_showtime("menuitem_timezoneblurb",$output['TIMEZONEBLURB']);
					}
				}
			
			if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.png'))
				$output['LOGO_RELATIVE_URL']=JOMRES_IMAGELOCATION_RELPATH.'/logo.png';
			elseif (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.jpg'))
				$output['LOGO_RELATIVE_URL']=JOMRES_IMAGELOCATION_RELPATH.'/logo.jpg';
			else
				$output['LOGO_RELATIVE_URL']=get_showtime('live_site').'/jomres/images/jrlogo.png';
			
			$output['SANITY_CHECKS']=get_showtime("sanity_check_warnings");
			$output['NEXT']=jr_gettext('_PN_NEXT',_PN_NEXT,false,false);
			$output['PREVIOUS']=jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS,false,false);
		
			$output['LANGDROPDOWN']=$jomreslang->get_languageselection_dropdown();
			set_showtime("menuitem_langdropdown",$output['LANGDROPDOWN']);
			$output['BACKLINK']='<a href="javascript:history.go(-1)">'.jr_gettext('_JOMRES_COM_MR_BACK',_JOMRES_COM_MR_BACK).'</a>';
			$output['LIVESITE']=get_showtime('live_site');
			$output['DATEPICKERLANG']=JOMRESDATEPICKERLANG;
			$messaging = array();
			$sticky_messaging = array();
			if ($jrConfig['useJomresMessaging'] == '1')
				{
				$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
				$messages = $jomres_messaging->get_messages();
				
				if (count($messages)>0)
					{
					foreach ($messages as $mes)
						{
						$m['MESSAGE']=$mes;
						$messaging[] = $m;
						}
					}
				$jomres_sticky_messaging =jomres_singleton_abstract::getInstance('jomres_sticky_messages');
				$sticky_messages = $jomres_sticky_messaging->get_messages();
				
				if (count($sticky_messages)>0)
					{
					foreach ($sticky_messages as $mes)
						{
						$m['MESSAGE']=$mes;
						$sticky_messaging[] = $m;
						}
					}
				}

			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			if ($management_view)
				$tmpl->readTemplatesFromInput( 'management_top.html');
			else
				$tmpl->readTemplatesFromInput( 'top.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'messages',$messaging);
			$tmpl->addRows( 'sticky_messages',$sticky_messaging);
			$tmpl->displayParsedTemplate();
			$pageoutput=array();
			$output=array();
			}

		}

	function touch_template_language()
		{
		$output=array();
		$output[]	=	jr_gettext('_PN_NEXT',_PN_NEXT);
		$output[]	=	jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS);
		$output[]	=	jr_gettext('_JOMRES_CONVERSION_DISCLAIMER',_JOMRES_CONVERSION_DISCLAIMER);

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
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>