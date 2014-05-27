<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_language
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function jomres_language()
		{
		global $jomresConfig_lang;
		$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig          = $siteConfig->get();
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		// We'll specifically set the post and get routines here so that we don't end up saving the cookie/cms specific code every time if the cookie's the container for the lang.
		$this->showLangDropdown = $jrConfig[ 'showLangDropdown' ];
		$administrator_area     = jomres_cmsspecific_areweinadminarea();

		$testing = false;

		if ( isset( $_POST[ 'jomreslang' ] ) )
			{
			if ( $testing && !AJAXCALL ) echo 'Used $_POST[\'jomreslang\'] to switch langs<br>';
			$jomresConfig_lang = (string) RemoveXSS( jomresGetParam( $_POST, 'jomreslang', "" ) );
			}
		else
			{
			if ( isset( $_GET[ 'jomreslang' ] ) )
				{
				if ( $testing && !AJAXCALL ) echo 'Used $_GET[\'jomreslang\'] to switch langs<br>';
				$jomresConfig_lang = (string) RemoveXSS( jomresGetParam( $_GET, 'jomreslang', "" ) );
				}
			else
				{
				if ( _JOMRES_DETECTED_CMS == "joomla16" || _JOMRES_DETECTED_CMS == "joomla17" || _JOMRES_DETECTED_CMS == "joomla25" || _JOMRES_DETECTED_CMS == "joomla30" || _JOMRES_DETECTED_CMS == "joomla31" || _JOMRES_DETECTED_CMS == "joomla32"  || _JOMRES_DETECTED_CMS == "joomla33")
					{
					$lang = JFactory::getLanguage();
					if ( $testing && !AJAXCALL ) echo 'Used $lang->getTag() to switch langs<br>';
					$jomresConfig_lang = (string) $lang->getTag();
					}
				else
					{
					if ( isset( $_GET[ 'lang' ] ) )
						{
						if ( $testing && !AJAXCALL ) echo 'Used $_GET[\'lang\'] to switch langs<br>';
						$jomresConfig_lang = (string) RemoveXSS( jomresGetParam( $_GET, 'lang', "" ) );
						}
					else
						{
						if ( this_cms_is_wordpress() && !isset($_GET[ 'lang' ]) )
							{
							if ( $testing && !AJAXCALL ) echo 'Used wordpress switch to change language.<br>';
							$jomresConfig_lang = $tmpBookingHandler->tmplang[ 'jomreslang' ];
							}
						elseif ( isset( $_COOKIE[ 'jfcookie' ] ) && file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "components" . JRDS . "com_joomfish" . JRDS . "joomfish.php" ) && !$administrator_area )
							{
							if ( $testing && !AJAXCALL ) echo 'Used $_COOKIE[\'jfcookie\'] to switch langs<br>';
							$jomresConfig_lang = (string) RemoveXSS( $_COOKIE[ 'jfcookie' ][ 'lang' ] );
							}
						else
							{
							if ( isset( $tmpBookingHandler->tmplang[ 'jomreslang' ] ) )
								{
								if ( $testing && !AJAXCALL ) echo 'Used $tmpBookingHandler->tmplang[\'jomreslang\'] to switch langs<br>';
								$jomresConfig_lang = (string) RemoveXSS( $tmpBookingHandler->tmplang[ 'jomreslang' ] );
								}
							elseif ( strlen( $jomresConfig_lang ) == 0 )
								{
								if ( $testing && !AJAXCALL ) echo 'Used $jrConfig[\'siteLang\'] to switch langs<br>';
								$jomresConfig_lang = substr( $jrConfig[ 'siteLang' ], 0, strlen( $jrConfig[ 'siteLang' ] ) - 4 );
								}
							}
						}
					}
				}
			}

		$langfile_crossref         = $this->define_langfile_to_languages_array();
		$this->datepicker_crossref = $this->define_langfile_to_datepicker_files_array();
		if ( !array_key_exists( $jomresConfig_lang, $langfile_crossref ) ) $jomresConfig_lang = $this->get_shortcode_to_longcode( $jomresConfig_lang );

		$tmpBookingHandler->tmplang[ 'jomreslang' ] = $jomresConfig_lang;

		jomres_cmsspecific_setlanguage( $jomresConfig_lang );
		$this->lang = $jomresConfig_lang;
		//system_log( 'Lang is finally set to ' . $jomresConfig_lang  . " for task ".$_REQUEST['task']);
		set_showtime( 'lang', $jomresConfig_lang );
		}

	function get_language( $propertytype = "" )
		{
		$language_plugins               = get_showtime( 'language_plugins' );
		$language_plugins_langfile_path = $language_plugins[ $this->lang ][ $propertytype ][ 'path' ];
		if ( $propertytype != "" && file_exists( $language_plugins_langfile_path . $this->lang . "_" . $propertytype . '.php' ) )
			{
			require( $language_plugins_langfile_path . $this->lang . "_" . $propertytype . '.php' );
			}
		else if ( $propertytype != "" && file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $propertytype ) . JRDS . $this->lang . '.php' ) )
			{
			require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $propertytype ) . JRDS . $this->lang . '.php' );
			}
		else
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			if ( $jrConfig[ 'language_context' ] != "" && file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . $this->lang . '.php' ) ) require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . $this->lang . '.php' );
			elseif ( $jrConfig[ 'language_context' ] != "" && file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . $this->lang . '.php' ) ) require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . 'en-GB.php' );
			elseif ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' ) )
				{
				require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' );
				}
			else
				{
				if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . 'en-GB.php' ) )
					{
					require( JOMRESPATH_BASE . JRDS . 'language' . JRDS . 'en-GB.php' );
					} //else no language file available... don't include it either...
				}
			}
		}

	function get_current_lang_files()
		{
		$langfiles = array ();

		$this->unWantedFolderContents = array ( '.', '..', 'cvs', '.svn', 'index.html' );
		$d                            = @dir( JOMRESPATH_BASE . JRDS . 'language' . JRDS );
		if ( $d )
			{
			while ( false !== ( $entry = $d->read() ) )
				{
				$filename = $entry;
				if ( is_file( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $filename ) && !in_array( strtolower( $filename ), $this->unWantedFolderContents ) )
					{
					$langfiles[ ] = $filename;
					}
				}
			}

		$language_plugins = get_showtime( 'language_plugins' );
		if ( count( $language_plugins ) > 0 )
			{
			foreach ( $language_plugins as $code => $propertytype )
				{
				$langfiles[ ] = $code;
				}
			}

		return $langfiles;
		}

	function get_languageselection_dropdown( $config_option = false, $default_lang = "" )
		{
		$task = get_showtime( 'task' );
		if ( $this->showLangDropdown != "1" && $task != "touch_templates" && !jomres_cmsspecific_areweinadminarea() ) return "";
		$langDropdownFile  = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "temp" . JRDS . "langDropdown.php";
		$langfile_crossref = $this->define_langfile_to_languages_array();

		if ( file_exists( $langDropdownFile ) )
			{
			require_once( $langDropdownFile );
			$langfiles = getLangDropdownString();
			}
		else
			{
			$langfile_options = array ();
			$langfiles        = $this->get_current_lang_files();
			if ( count( $langfiles ) == 0 ) return false;
			}

		$tempOptions = array ();
		foreach ( $langfiles as $filename )
			{
			$langfileexplode               = explode( ".", $filename );
			$langshortcode                 = $langfileexplode[ 0 ];
			$langlong                      = $langfile_crossref[ $langshortcode ];
			$tempOptions[ $langshortcode ] = $langlong;
			}

		natsort( $tempOptions );
		foreach ( $tempOptions as $key => $val )
			{
			$langfile_options[ ] = jomresHTML::makeOption( $key, $val );
			}


		if ( !$config_option )
			{
			$javascript = "onchange=\"this.form.submit();\"";
			$input_name = 'jomreslang';
			}
		else
			{
			$javascript = '';
			$input_name = 'cfg_property_language';
			}

		if ( $default_lang != '' && array_key_exists( $default_lang, $langfile_crossref ) ) $lang = $default_lang;
		else
		$lang = $this->lang;

		$dropdown = jomresHTML::selectList( $langfile_options, $input_name, 'class="inputbox navbar-form" size="1" ' . $javascript . '', 'value', 'text', $lang );

		$selecthtml = '';
		if ( !$config_option ) $selecthtml = '<form action="" method="post" name="jomreslang">';
		$selecthtml .= $dropdown;
		if ( !$config_option ) $selecthtml .= '</form>';

		return $selecthtml;
		}

	function define_langfile_to_languages_array()
		{
		$langs            = array ();
		$langs[ 'ar-AR' ] = "Argentino";
		$langs[ 'bg-BG' ] = "Bulgarian";
		$langs[ 'en-GB' ] = "English";
		$langs[ 'cs-CZ' ] = "Czech";
		$langs[ 'da-DK' ] = "Dansk";
		$langs[ 'de-DE' ] = "Deutsch";
		$langs[ 'el-GR' ] = "Ελληνικά";
		$langs[ 'en-CA' ] = "Canadian";
		$langs[ 'en-US' ] = "American";
		$langs[ 'es-ES' ] = "Español";
		$langs[ 'fr-FR' ] = "Français";
		$langs[ 'he-IL' ] = "עברית";
		$langs[ 'hr-HR' ] = "Croatian";
		$langs[ 'hu-HU' ] = "Hungarian";
		$langs[ 'it-IT' ] = "Italiano";
		$langs[ 'lv-LV' ] = "Latvian";
		$langs[ 'nb-NO' ] = "Norsk";
		$langs[ 'nl-NL' ] = "Nederlands";
		$langs[ 'pl-PL' ] = "Polski";
		$langs[ 'pt-BR' ] = "Português Brasileiro";
		$langs[ 'pt-PT' ] = "Português";
		$langs[ 'ro-RO' ] = "Romanian";
		$langs[ 'ru-RU' ] = "Russian";
		$langs[ 'sk-SK' ] = "Slovak";
		$langs[ 'sl-SI' ] = "Slovenian";
		$langs[ 'sr-YU' ] = "Srpski";
		$langs[ 'zh-CN' ] = "Chinese";
		$langs[ 'th-TH' ] = "Thai";
		$langs[ 'sv-SE' ] = "Svenska";
		$langs[ 'ar-AA' ] = "العربية الموحدة";
		$langs[ 'ca-ES' ] = "Catalan";

		$language_plugins = get_showtime( 'language_plugins' );
		if ( count( $language_plugins ) > 0 )
			{
			foreach ( $language_plugins as $code => $propertytype )
				{
				foreach ( $propertytype as $language_settings )
					{
					$langs[ $code ] = $language_settings[ 'langfile_to_languages' ];
					}
				}
			}

		return $langs;
		}

	function get_shortcode_to_longcode( $lang )
		{
		$langs         = array ();
		$langs[ 'ar' ] = 'ar-AR';
		$langs[ 'bg' ] = 'bg-BG';
		$langs[ 'en' ] = 'en-GB';
		$langs[ 'cs' ] = 'cs-CZ';
		$langs[ 'da' ] = 'da-DK';
		$langs[ 'de' ] = 'de-DE';
		$langs[ 'el' ] = 'el-GR';
		$langs[ 'es' ] = 'es-ES';
		$langs[ 'fr' ] = 'fr-FR';
		$langs[ 'he' ] = 'he-IL';
		$langs[ 'hr' ] = 'hr-HR';
		$langs[ 'hu' ] = 'hu-HU';
		$langs[ 'it' ] = 'it-IT';
		$langs[ 'lv' ] = 'lv-LV';
		$langs[ 'nb' ] = 'nb-NO';
		$langs[ 'nl' ] = 'nl-NL';
		$langs[ 'pl' ] = 'pl-PL';
		$langs[ 'br' ] = 'pt-BR';
		$langs[ 'pt' ] = 'pt-PT';
		$langs[ 'ro' ] = 'ro-RO';
		$langs[ 'ru' ] = 'ru-RU';
		$langs[ 'sk' ] = 'sk-SK';
		$langs[ 'sl' ] = 'sl-SI';
		$langs[ 'sr' ] = 'sr-YU';
		$langs[ 'zh' ] = 'zh-CN';
		$langs[ 'no' ] = 'nb-NO';
		$langs[ 'th' ] = 'th-TH';
		$langs[ 'sv' ] = 'sv-SE';
		$langs[ 'ar' ] = 'ar-AA';
		$langs[ 'ca' ] = 'ca-ES';

		$language_plugins = get_showtime( 'language_plugins' );
		if ( count( $language_plugins ) > 0 )
			{
			foreach ( $language_plugins as $code => $propertytype )
				{
				foreach ( $propertytype as $language_settings )
					{
					$shortcode           = $language_settings[ 'shortcode_to_longcode' ];
					$langs[ $shortcode ] = $code;
					}
				}
			}

		if ( array_key_exists( $lang, $langs ) ) return $langs[ $lang ];

		return "en-GB";
		}

	function define_langfile_to_datepicker_files_array()
		{
		$langs            = array ();
		$langs[ 'ar-AR' ] = "ar";
		$langs[ 'bg-BG' ] = "bg";
		$langs[ 'en-GB' ] = "en-GB";
		$langs[ 'cs-CZ' ] = "cs";
		$langs[ 'da-DK' ] = "da";
		$langs[ 'de-DE' ] = "de";
		$langs[ 'el-GR' ] = "el";
		$langs[ 'en-CA' ] = "en-GB";
		$langs[ 'en-US' ] = "en-GB";
		$langs[ 'es-ES' ] = "es";
		$langs[ 'fr-FR' ] = "fr";
		$langs[ 'he-IL' ] = "he";
		$langs[ 'hr-HR' ] = "hr";
		$langs[ 'hu-HU' ] = "hu";
		$langs[ 'it-IT' ] = "it";
		$langs[ 'lv-LV' ] = "lv";
		$langs[ 'nb-NO' ] = "no";
		$langs[ 'nl-NL' ] = "nl";
		$langs[ 'pl-PL' ] = "pl";
		$langs[ 'pt-BR' ] = "pt-BR";
		$langs[ 'pt-PT' ] = "pt-BR";
		$langs[ 'ro-RO' ] = "ro";
		$langs[ 'ru-RU' ] = "ru";
		$langs[ 'sk-SK' ] = "sk";
		$langs[ 'sl-SI' ] = "sl";
		$langs[ 'sr-YU' ] = "sr";
		$langs[ 'zh-CN' ] = "";
		$langs[ 'th-TH' ] = "th";
		$langs[ 'sv-SE' ] = "sv";
		$langs[ 'ar-AA' ] = "ar";
		$langs[ 'ca-ES' ] = "ca";

		$language_plugins = get_showtime( 'language_plugins' );
		if ( count( $language_plugins ) > 0 )
			{
			foreach ( $language_plugins as $code => $propertytype )
				{
				foreach ( $propertytype as $language_settings )
					{
					$langs[ $code ] = $language_settings[ 'langfile_to_datepicker' ];
					}
				}
			}

		return $langs;
		}
	}


?>