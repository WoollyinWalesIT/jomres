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


class j00060toptemplate {
	function j00060toptemplate($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser=jomres_getSingleton('jr_user');
		
		$tz = $componentArgs['tz'];
		$jomreslang = $componentArgs['jomreslang'];
		
		
		if (_JOMRES_DETECTED_CMS == "joomla15" || _JOMRES_DETECTED_CMS == "joomla16" )
			{
			jr_import('jomres_management_view');
			$jomres_management_view = new jomres_management_view();
			if (isset($_POST['management_view']))
				{
				if ((bool)$_POST['management_view'] == false)
					$request = str_replace("tmpl=component","",$_SERVER["REQUEST_URI"]);
				if ((bool)$_POST['management_view'] == true)
					$request =  jomresURL($_SERVER["REQUEST_URI"]."&amp;tmpl=component");
					
				$jomres_management_view->set_view((bool)$_POST['management_view']);
				
				$tmpBookingHandler->close_jomres_session();
				jomresRedirect( $request,"");
				}
			$management_view = $jomres_management_view->get_view();
			}
		
		$popup				= intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
		
		if (!defined('JOMRES_NOHTML') && $popup != 1 )
			{
			$output=array();
			
			$output['editing_mode_dropdown']='';
			$editing_mode =jomres_getSingleton('jomres_editing_mode');
			$result = $editing_mode->make_editing_mode_dropdown();
			if ($result)
				$output['EDITING_MODE_DROPDOWN']=$result;
			
			if (_JOMRES_DETECTED_CMS == "joomla15" || _JOMRES_DETECTED_CMS == "joomla16" )
				{
				if ($thisJRUser->userIsManager)
					{
					if (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.png'))
						$output['LOGO_RELATIVE_URL']=JOMRES_IMAGELOCATION_RELPATH.'/logo.png';
					elseif (file_exists(JOMRES_IMAGELOCATION_ABSPATH.'logo.jpg'))
						$output['LOGO_RELATIVE_URL']=JOMRES_IMAGELOCATION_RELPATH.'/logo.jpg';
					else
						$output['LOGO_RELATIVE_URL']=get_showtime('live_site').'/jomres/images/jrlogo.png';
					$management_dropdown = $jomres_management_view->get_dropdown();
					$output['MANAGEMENT_VIEW_DROPDOWN']=$management_dropdown;
					if ($jrConfig['use_timezone_switcher'] == "1")
						{
						$output['TIMEZONE_DROPDOWN']=$tz->get_dropdown();
						$output['TIMEZONEBLURB']= outputDate(date("Y/m/d"))." ".date("H:i:s");
						}
					}
				}

			$output['NEXT']=jr_gettext('_PN_NEXT',_PN_NEXT,false,false);
			$output['PREVIOUS']=jr_gettext('_PN_PREVIOUS',_PN_PREVIOUS,false,false);
		
			$output['LANGDROPDOWN']=$jomreslang->get_languageselection_dropdown();
			$output['BACKLINK']='<a href="javascript:history.go(-1)">'.jr_gettext('_JOMRES_COM_MR_BACK',_JOMRES_COM_MR_BACK).'</a>';
			$output['LIVESITE']=get_showtime('live_site');
			$output['DATEPICKERLANG']=JOMRESDATEPICKERLANG;
			$messaging = array();
			$sticky_messaging = array();
			if ($jrConfig['useJomresMessaging'] == '1')
				{
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$messages = $jomres_messaging->get_messages();
				
				if (count($messages)>0)
					{
					foreach ($messages as $mes)
						{
						$m['MESSAGE']=$mes;
						$messaging[] = $m;
						}
					}
				$jomres_sticky_messaging =jomres_getSingleton('jomres_sticky_messages');
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