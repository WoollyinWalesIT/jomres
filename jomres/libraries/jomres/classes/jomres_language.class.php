<?php
/**
#
 * xxxxxxxxxxxxxxxxxx
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
		global $jomresConfig_lang,$jrConfig;
		// We'll specifically set the post and get routines here so that we don't end up saving the cookie/cms specific code every time if the cookie's the container for the lang
		if (isset($_POST['jomreslang']) )
			{
			$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_POST, 'jomreslang', "" ) );
			SetCookie("jomreslang", $jomresConfig_lang, time()+60*60);
			jomres_cmsspecific_setlanguage($jomresConfig_lang);
			}
		else
			{
			if (isset($_GET['jomreslang']) )
				{
				$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_GET, 'jomreslang', "" ) );
				SetCookie("jomreslang", $jomresConfig_lang, time()+60*60);
				jomres_cmsspecific_setlanguage($jomresConfig_lang);
				}
			else
				{
				if (isset($_COOKIE['jomreslang']) )
					{
					$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_COOKIE, 'jomreslang', "" ) );
					}
				else
					{
					if (isset($_REQUEST['lang']) )
						$jomresConfig_lang				=(string)RemoveXSS(jomresGetParam( $_REQUEST, 'lang', "" ));
					else
						{
						if (isset($_COOKIE['mbfcookie']) )
							$jomresConfig_lang				=(string)RemoveXSS($_COOKIE['mbfcookie']['lang']);
						else
							{
							if (isset($_COOKIE['jfcookie']) && file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_joomfish".JRDS."joomfish.php")  )
								$jomresConfig_lang				=(string)RemoveXSS($_COOKIE['jfcookie']['lang']);
							else
								$jomresConfig_lang				=substr($jrConfig['siteLang'], 0 ,strlen($jrConfig['siteLang'])-4) ;
							}
						}
					}
				}
			}
		$this->lang=$jomresConfig_lang;
		}
		
	function get_language($propertytype)
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
		$langfile_options = array();
		$langfile_crossref = $this->define_langfile_to_languages_array();
		$langfiles = $this->get_current_lang_files();
		if (count($langfiles)==0)
			return false;
			
		foreach ($langfiles as $filename)
			{
			$langfileexplode=explode(".",$filename);
			$langshortcode =  $langfileexplode[0];
			$langfile_options[] = jomresHTML::makeOption( $langshortcode , $langfile_crossref[$langshortcode]  );
			}
			$javascript = "onchange=\"this.form.submit();\"";
		$dropdown = jomresHTML::selectList( $langfile_options, 'jomreslang','class="inputbox" size="1" '.$javascript.'', 'value', 'text', $this->lang);
		
		$selecthtml = '<form action="" method="POST" name="jomreslang">';
		$selecthtml.= $dropdown;
		$selecthtml.= '</form>';
		return $selecthtml;
		}
		
	function define_langfile_to_languages_array()
		{
		// Some of these will be wrong. If you can advise me of the correct language string, please email vince and support@jomres.net and I'll correct this.
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
		$langs['sr-YU']="Yugslav";
		$langs['zh-CN']="Chinese";
		return $langs;
		}
	}


?>