<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501js_calendar
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];
		$lists 							= $componentArgs[ 'lists' ];
		$jsInputFormatDropdownList		= $componentArgs[ 'jsInputFormatDropdownList' ];
		$calendarStartDaysDropdownList	= $componentArgs[ 'calendarStartDaysDropdownList' ];
		
		/* Not used anymore
		$currentLangFile = $jrConfig[ 'jscalendarLangfile' ];
		$calendarFileNamesArray = array ( "calendar-en.js", "calendar-af.js", "calendar-al.js", "calendar-bg.js", "calendar-big5.js", "calendar-big5-utf8.js", "calendar-br.js", "calendar-ca.js", "calendar-cs-utf8.js", "calendar-cs-win.js", "calendar-da.js", "calendar-de.js", "calendar-du.js", "calendar-el.js", "calendar-es.js", "calendar-fi.js", "calendar-fr.js", "calendar-he-utf8.js", "calendar-hr.js", "calendar-hr-utf8.js", "calendar-hu.js", "calendar-it.js", "calendar-jp.js", "calendar-ko.js", "calendar-ko-utf8.js", "calendar-lt.js", "calendar-lt-utf8.js", "calendar-lv.js", "calendar-nl.js", "calendar-no.js", "calendar-pl.js", "calendar-pl-utf8.js", "calendar-pt.js", "calendar-ro.js", "calendar-ru.js", "calendar-ru_win_.js", "calendar-si.js", "calendar-sk.js", "calendar-sp.js", "calendar-sv.js", "calendar-tr.js", "calendar-zh.js", "cn_utf8.js" );

		$jsCalLangfile = "<select class=\"inputbox\" name=\"cfg_jscalendarLangfile\">";
		foreach ( $calendarFileNamesArray as $fileName )
			{
			$selected = "";
			if ( $fileName == $currentLangFile ) 
				$selected = "selected";
			$jsCalLangfile .= "<option " . $selected . " value=\"" . $fileName . "\" >" . $fileName . "</option>/n";
			}
		$jsCalLangfile .= "</select>";

		$currentCSSFile = $jrConfig[ 'jscalendarCSSfile' ];
		$calendarFileNamesArray = array ( "calendar-win2k-cold-2.css", "calendar-blue2.css", "calendar-blue.css", "calendar-brown.css", "calendar-green.css", "calendar-system.css", "calendar-tas.css", "calendar-win2k-1.css", "calendar-win2k-2.css", "calendar-win2k-cold-1.css" );
		
		$jsCalCSSfile = "<select class=\"inputbox\" name=\"cfg_jscalendarCSSfile\">";
		foreach ( $calendarFileNamesArray as $fileName )
			{
			$selected = "";
			if ( $fileName == $currentCSSFile ) 
				$selected = "selected";
			$jsCalCSSfile .= "<option " . $selected . " value=\"" . $fileName . "\" >" . $fileName . "</option>/n";
			}
		$jsCalCSSfile .= "</select>";*/
		
						
		$configurationPanel->startPanel( jr_gettext( "_JOMRES_COM_A_JSCALENDAR", _JOMRES_COM_A_JSCALENDAR, false ) );

		$configurationPanel->setleft( jr_gettext( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', _JOMRES_JSCALENDAR_USECLEARCHECKBOX, false ) );
		$configurationPanel->setmiddle( $lists[ 'use_cleardate_checkbox' ] );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CALENDARINPUT', _JOMRES_COM_CALENDARINPUT, false ) );
		$configurationPanel->setmiddle( $jsInputFormatDropdownList );
		$configurationPanel->setright( jr_gettext( '_JOMRES_COM_CALENDARINPUT_DESC', _JOMRES_COM_CALENDARINPUT_DESC, false ) );
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( '_JOMRES_COM_CALENDAR_STARTDAY', _JOMRES_COM_CALENDAR_STARTDAY, false ) );
		$configurationPanel->setmiddle( $calendarStartDaysDropdownList );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
	
		$configurationPanel->endPanel();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
