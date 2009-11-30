<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000chooseLanguages
	{
	function j16000chooseLanguages()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$output['PAGETITLE']=_JOMRES_COM_CHOOSELANGUAGES;
		$output['INFO']=_JOMRES_COM_CHOOSELANGUAGES_INFO;
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		$langDropdownFile = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS."langDropdown.php";
		if (file_exists($langDropdownFile) )
			{
			require_once ($langDropdownFile);
			$langfiles = getLangDropdownString();
			}
		else
			$langfiles = array();

		$jomreslang =jomres_getSingleton('jomres_language');
		$languagesArray = $jomreslang->define_langfile_to_languages_array();
	
		$rows=array();
		foreach ($languagesArray as $key=>$val)
			{
			$r=array();
			$selected="";
			if (in_array($key,$langfiles))
				$selected=' checked="yes" ';
			$r['SHORTCODE']=$key;
			$r['LONGCODE']=$val;
			$r['CHECKBOX']='<input type="checkbox" id="cb'.$key.'" name="idarray[]" value="'.$key.'" '.$selected.'>';
			$rows[]=$r;
			}
		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_languageChoiceSelection');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_languagechoices.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}