<?php
/**
#
 * Mini-component core file:
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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000chooseLanguages
	{
	function j16000chooseLanguages()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$output=array();
		$output['PAGETITLE']=_JOMRES_COM_CHOOSELANGUAGES;
		$output['INFO']=_JOMRES_COM_CHOOSELANGUAGES_INFO;
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$jomreslang= new jomres_language();
		$languagesArray = $jomreslang->define_langfile_to_languages_array();
	
		$rows=array();
		foreach ($languagesArray as $key=>$val)
			{
			$r=array();
			$r['SHORTCODE']=$key;
			$r['LONGCODE']=$val;
			$r['CHECKBOX']='<input type="checkbox" id="cb'.$key.'" name="idarray[]" value="'.$key.'">';
			$rows[]=$r;
			}
		
		$jrtbar = new jomres_toolbar();
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