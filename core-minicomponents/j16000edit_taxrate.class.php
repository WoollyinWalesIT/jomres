<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000edit_taxrate {
	function j16000edit_taxrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));
		jr_import('jrportal_taxrate');
		$rate = new jrportal_taxrate();
		if ($id > 0)
			{
			$rate->id = $id;
			$rate->getTaxRate();
			}
		
		$output['PAGETITLE']=_JRPORTAL_TAX_RATE_EDIT;
		$output['HCODE']=_JRPORTAL_TAXRATES_CODE;
		$output['HDESCRIPTION']=_JRPORTAL_TAXRATES_DESCRIPTION;
		$output['HRATE']=_JRPORTAL_TAXRATES_RATE;
		
		$output['ID']=$rate->id;
		$output['CODE']=$rate->code;
		$output['DESCRIPTION']=$rate->description;
		$output['RATE']=$rate->rate;
		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_taxrate');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=list_taxrates",'');
		if ($id>0)
			$jrtb .= $jrtbar->toolbarItem('delete',JOMRES_SITEPAGE_URL_ADMIN."&task=delete_taxrate".jomresURLToken()."&no_html=1&id=".$id,'');
		else
			echo _JRPORTAL_TAXRATES_CANNOTDELETE;
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_taxrate.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>