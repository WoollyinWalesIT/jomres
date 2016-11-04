<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_language
	{
	function __construct()
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );

		if ( isset( $_POST[ 'jomreslang' ] ) )
			{
			$jomresConfig_lang = (string) RemoveXSS( jomresGetParam( $_POST, 'jomreslang', "" ) );
			}
		elseif ( isset( $_GET[ 'jomreslang' ] ) )
			{
			$jomresConfig_lang = (string) RemoveXSS( jomresGetParam( $_GET, 'jomreslang', "" ) );
			}
		elseif ( !defined('AUTO_UPGRADE') )
			{
			$jomresConfig_lang = (string) RemoveXSS( jomres_cmsspecific_getcmslang() );
			}
		else
			$jomresConfig_lang = 'en-GB';

		$langfile_crossref         = $this->define_langfile_to_languages_array();
		$this->datepicker_crossref = $this->define_langfile_to_datepicker_files_array();
		
		if ( !array_key_exists( $jomresConfig_lang, $langfile_crossref ) ) 
			$jomresConfig_lang = $this->get_shortcode_to_longcode( $jomresConfig_lang );
		
		$tmpBookingHandler->tmplang[ 'jomreslang' ] = $jomresConfig_lang;

		jomres_cmsspecific_setlanguage( $jomresConfig_lang );
		
		$this->lang = $jomresConfig_lang;
		
		//set lang showtime, eg: en-GB
		set_showtime( 'lang', $jomresConfig_lang );
		
		//set lang shortcode showtime, eg: en
		$this->shortcodes = $this->get_shortcodes();
		$key = array_search( $jomresConfig_lang, $this->shortcodes ); 
		set_showtime( 'lang_shortcode', $key );
		}

	function get_language( $property_type = "" )
		{
		//load the property type specific language file. If it doesn`t exist, do nothing, so the default language strings will be used
		if ( $property_type != "" )
			{
			if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $property_type ) . JRDS . $this->lang . '.php' ) )
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $property_type ) . JRDS . $this->lang . '.php' );
				return true;
				}
			elseif ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $property_type ) . JRDS . 'en-GB.php' ) )
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . strtolower( $property_type ) . JRDS . 'en-GB.php' );
				return true;
				}
			else
				return false;
			}
		else
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig = $siteConfig->get();
			
			//load language context language file if no property type specific language file found above
			if ( $jrConfig[ 'language_context' ] != "" ) 
				{
				if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . $this->lang . '.php' ) )
					{
					require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . $this->lang . '.php' );
					return true;
					}
				elseif ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . 'en-GB.php' ) )
					{
					require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $jrConfig[ 'language_context' ] . JRDS . 'en-GB.php' );
					return true;
					}
				}
			
			//if still nothing found, load the default language file
			if ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' ) )
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . $this->lang . '.php' );
				return true;
				}
			elseif ( file_exists( JOMRESPATH_BASE . JRDS . 'language' . JRDS . 'en-GB.php' ) )
				{
				require_once( JOMRESPATH_BASE . JRDS . 'language' . JRDS . 'en-GB.php' );
				return true;
				}
			else
				return false;
			}
		
		return false;
		}

	function get_current_lang_files()
		{
		$langfiles = array ();

		$this->unWantedFolderContents = array ( '.', '..', 'cvs', '.svn', 'index.html' );
		$d = @dir( JOMRESPATH_BASE . JRDS . 'language' . JRDS );
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

		if ( $default_lang != '' && array_key_exists( $default_lang, $langfile_crossref ) ) 
			$lang = $default_lang;
		else
			$lang = $this->lang;

		$dropdown = jomresHTML::selectList( $langfile_options, $input_name, 'class="inputbox" size="1" ' . $javascript . '', 'value', 'text', $lang );

		$selecthtml = '';
		if ( !$config_option ) 
			$selecthtml = '<form action="" method="post" name="jomreslang">';
		$selecthtml .= $dropdown;
		if ( !$config_option ) 
			$selecthtml .= '</form>';

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
		$langs[ 'ja-JP' ] = "日本語";
		$langs[ 'uk-UA' ] = "Український";
		$langs[ 'fa-IR' ] = "فارسی";
		$langs[ 'az-AZ' ] = "Azərbaycan dili";
		$langs[ 'tr-TR' ] = "Türkçe";

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
		$langs = $this->get_shortcodes();
		
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

		if ( array_key_exists( $lang, $langs ) ) 
			return $langs[ $lang ];

		return "en-GB";
		}
	
	function get_shortcodes()
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
		$langs[ 'ja' ] = 'ja-JP';
		$langs[ 'uk' ] = 'uk-UA';
		$langs[ 'fa' ] = 'fa-IR';
		$langs[ 'az' ] = 'az-AZ';
		$langs[ 'tr' ] = 'tr-TR';
		return $langs;
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
		$langs[ 'zh-CN' ] = "zh-CN";
		$langs[ 'th-TH' ] = "th";
		$langs[ 'sv-SE' ] = "sv";
		$langs[ 'ar-AA' ] = "ar";
		$langs[ 'ca-ES' ] = "ca";
		$langs[ 'ja-JP' ] = "ja";
		$langs[ 'uk-UA' ] = "uk";
		$langs[ 'fa-IR' ] = "fa";
		$langs[ 'az-AZ' ] = "az";
		$langs[ 'tr-TR' ] = "tr";

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
