<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000list_taxrates
	{
	function j16000list_taxrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $ePointFilepath,$jomresConfig_live_site;
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		$rates=taxrates_getalltaxrates();
		$output=array();
		$pageoutput=array();
		$rows=array();
		
		$output['PAGETITLE']=_JRPORTAL_TAXRATES_TITLE;
		$output['HCODE']=_JRPORTAL_TAXRATES_CODE;
		$output['HDESCRIPTION']=_JRPORTAL_TAXRATES_DESCRIPTION;
		$output['HRATE']=_JRPORTAL_TAXRATES_RATE;
		
		foreach ($rates as $rate)
			{
			$r=array();
			$r['ID']=$rate['id'];
			$r['CODE']=$rate['code'];
			$r['DESCRIPTION']=$rate['description'];
			$r['RATE']=$rate['rate'];
			$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_taxrate&id='.$rate['id'].'">'.$editIcon.'</a>';
			$rows[]=$r;
			}

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('new',jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=edit_taxrate"),'');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL_ADMIN),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_taxrates.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->displayParsedTemplate();
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}