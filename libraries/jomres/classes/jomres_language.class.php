<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
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
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		// We'll specifically set the post and get routines here so that we don't end up saving the cookie/cms specific code every time if the cookie's the container for the lang.
		$this->showLangDropdown =$jrConfig['showLangDropdown'];
		$administrator_area=jomres_cmsspecific_areweinadminarea();

		if (isset($_POST['jomreslang']) )
			{
			$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_POST, 'jomreslang', "" ) );
			}
		else
			{
			if (isset($_GET['jomreslang']) )
				{
				$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_GET, 'jomreslang', "" ) );
				}
			else
				{
				if (isset($_GET['lang']) )
					{
					$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_GET, 'lang', "" ));
					}
				else
					{
					if (isset($_COOKIE['jfcookie']) && file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_joomfish".JRDS."joomfish.php") && !$administrator_area)
						{
						$jomresConfig_lang				=(string)RemoveXSS($_COOKIE['jfcookie']['lang']);
						}
					else
						{
						if ( isset($tmpBookingHandler->tmplang['jomreslang']))
							{
							$jomresConfig_lang				=(string)RemoveXSS($tmpBookingHandler->tmplang['jomreslang']);
							}
						else
							{
							if (isset($_COOKIE['mbfcookie']) )
								{
								$jomresConfig_lang				=(string)RemoveXSS($_COOKIE['mbfcookie']['lang']);
								}
							else
								{
								if (strlen($jomresConfig_lang)==0)
									{
									$jomresConfig_lang				=substr($jrConfig['siteLang'], 0 ,strlen($jrConfig['siteLang'])-4) ;
									}
								}
							}
						}
					}
				}
			}

		$langfile_crossref = $this->define_langfile_to_languages_array();
		$this->datepicker_crossref = $this->define_langfile_to_datepicker_files_array();
		if ( !array_key_exists($jomresConfig_lang,$langfile_crossref) )
			$jomresConfig_lang				= $this->get_shortcode_to_longcode($jomresConfig_lang);

		$tmpBookingHandler->tmplang['jomreslang']= $jomresConfig_lang;
		$tmpBookingHandler->close_jomres_session();
		
		jomres_cmsspecific_setlanguage($jomresConfig_lang);
		$this->lang=$jomresConfig_lang;
		set_showtime('lang',$jomresConfig_lang);
		}
		
	function get_language($propertytype = "")
		{
		
		if (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.strtolower($propertytype).JRDS.$this->lang.'.php'))
			{
			require(JOMRESPATH_BASE.JRDS.'language'.JRDS.strtolower($propertytype).JRDS.$this->lang.'.php');
			}
		else
			{
			if (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.$this->lang.'.php'))
				{
				require(JOMRESPATH_BASE.JRDS.'language'.JRDS.$this->lang.'.php');
				}
			else
				{
				
				if (file_exists(JOMRESPATH_BASE.JRDS.'language'.JRDS.'en-GB.php'))
					{
					require(JOMRESPATH_BASE.JRDS.'language'.JRDS.'en-GB.php');
					} //else no language file available... don't include it either...
				}
			}
		}
		
	function get_current_lang_files()
		{
		$langfiles = array();
		
		$this->unWantedFolderContents=array('.','..','cvs','.svn','index.html');
		$d = @dir(JOMRESPATH_BASE.JRDS.'language'.JRDS);
		if($d)
			{
			while (FALSE !== ($entry = $d->read()))
				{
				$filename = $entry;
				if( is_file(JOMRESPATH_BASE.JRDS.'language'.JRDS.$filename) && !in_array( strtolower($filename),$this->unWantedFolderContents) )
					{
					$langfiles[] = $filename;
					}
				}
			}
		return $langfiles;
		}
		
	function get_languageselection_dropdown()
		{
		$task = get_showtime('task');
		
		if ($this->showLangDropdown != "1" && $task != "touch_templates" )
			return "";
		$langDropdownFile = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."langDropdown.php";
		$langfile_crossref = $this->define_langfile_to_languages_array();
		
		if (file_exists($langDropdownFile) )
			{
			require_once ($langDropdownFile);
			$langfiles = getLangDropdownString();
			}
		else
			{
			$langfile_options = array();
			$langfiles = $this->get_current_lang_files();
			if (count($langfiles)==0)
				return false;
			}
		
		$tempOptions = array();
		foreach ($langfiles as $filename)
			{
			$langfileexplode=explode(".",$filename);
			$langshortcode =  $langfileexplode[0];
			$langlong=$langfile_crossref[$langshortcode];
			//if (!array_key_exists($langshortcode, $langfile_crossref))
			//	$langlong = $langshortcode;
			
			$tempOptions[$langshortcode]=$langlong;
			}
		natsort($tempOptions);
		foreach ($tempOptions as $key=>$val)
			{
			$langfile_options[] = jomresHTML::makeOption( $key , $val );
			}
		
		$javascript = "onchange=\"this.form.submit();\"";
		$dropdown = jomresHTML::selectList( $langfile_options, 'jomreslang','class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->lang);
		
		$selecthtml = '<form action="" method="post" name="jomreslang">';
		$selecthtml.= $dropdown;
		$selecthtml.= '</form>';
		return $selecthtml;
		}
		
	function define_langfile_to_languages_array()
		{
		// Some of these will be wrong. If you can advise me of the correct language string, please email vince at support@jomres.net and I'll correct this.
		$langs=array();
		$langs['en-GB']="English";
		$langs['cs-CZ']="Czech";
		$langs['da-DK']="Dansk";
		$langs['de-DE']="Deutsch";
		$langs['el-GR']="Ελληνικά";
		$langs['en-CA']="Canadian";
		$langs['en-US']="American";
		$langs['es-ES']="Español";
		$langs['fr-FR']="Français";
		$langs['he-IL']="עברית";
		$langs['hr-HR']="Croatian";
		$langs['hu-HU']="Hungarian";
		$langs['it-IT']="Italiano";
		$langs['nb-NO']="Norsk";
		$langs['nl-NL']="Nederlands";
		$langs['pl-PL']="Polski";
		$langs['pt-BR']="Português Brasileiro";
		$langs['pt-PT']="Português";
		$langs['ro-RO']="Romanian";
		$langs['ru-RU']="Russian";
		$langs['sk-SK']="Slovak";
		$langs['sl-SI']="Slovenian";
		$langs['sr-YU']="Srpski";
		$langs['zh-CN']="Chinese";
		return $langs;
		}
		
	function get_shortcode_to_longcode($lang)
		{
		// Some of these will be wrong. If you can advise me of the correct language string, please email vince at support@jomres.net and I'll correct this.
		$langs=array();
		$langs['en']='en-GB';
		$langs['cs']='cs-CZ';
		$langs['da']='da-DK';
		$langs['de']='de-DE';
		$langs['el']='el-GR';
		$langs['es']='es-ES';
		$langs['fr']='fr-FR';
		$langs['he']='he-IL';
		$langs['hr']='hr-HR';
		$langs['hu']='hu-HU';
		$langs['it']='it-IT';
		$langs['nb']='nb-NO';
		$langs['nl']='nl-NL';
		$langs['pl']='pl-PL';
		$langs['pt']='pt-BR';
		$langs['pt']='pt-PT';
		$langs['ro']='ro-RO';
		$langs['ru']='ru-RU';
		$langs['sk']='sk-SK';
		$langs['sl']='sl-SI';
		$langs['sr']='sr-YU';
		$langs['zh']='zh-CN';
		$langs['no']='nb-NO';
		if (array_key_exists($lang,$langs) )
			return $langs[$lang];
		return "en-GB";
		}
		
	function define_langfile_to_datepicker_files_array()
		{
		// Some of these will be wrong. If you can advise me of the correct language string, please email vince at support@jomres.net and I'll correct this.
		$langs=array();
		$langs['en-GB']="en-GB";
		$langs['cs-CZ']="cs";
		$langs['da-DK']="da";
		$langs['de-DE']="de";
		$langs['el-GR']="el";
		$langs['en-CA']="en-GB";
		$langs['en-US']="en-GB";
		$langs['es-ES']="es";
		$langs['fr-FR']="fr";
		$langs['he-IL']="he";
		$langs['hr-HR']="hr";
		$langs['hu-HU']="hu";
		$langs['it-IT']="it";
		$langs['nb-NO']="no";
		$langs['nl-NL']="nl";
		$langs['pl-PL']="pl";
		$langs['pt-BR']="pt-BR";
		$langs['pt-PT']="pt-BR";
		$langs['ro-RO']="ro";
		$langs['ru-RU']="ru";
		$langs['sk-SK']="sk";
		$langs['sl-SI']="sl";
		$langs['sr-YU']="sr";
		$langs['zh-CN']="";
		return $langs;
		}
	}


?>