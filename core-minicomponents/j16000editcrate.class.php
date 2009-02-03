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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

class j16000editcrate
	{
	function j16000editcrate()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $indexphp;
		$id = jomresGetParam( $_REQUEST, 'id',	0 );

		$output['PAGETITLE']=_JRPORTAL_CPANEL_PATETITLE;
		$output['HTITLE']=_JRPORTAL_CRATE_TITLE;
		$output['HTYPE']=_JRPORTAL_CRATE_TYPE;
		$output['HVALUE']=_JRPORTAL_CRATE_VALUE;
		$output['HCURRENCYCODE']=_JRPORTAL_CRATE_CURRENCYCODE;

		$crateObj=new jrportal_crate();
		$crateObj->id=$id;
		if ($id>0)
			$crateObj->getCrate();

		$crateType = new crateTypes();
		$crateType->id=$crateObj->type;
		$output['ID']=$crateObj->id;
		$output['TITLE']=$crateObj->title;
		$crateType->id=$crateObj->type;
		$dd=$crateType->makeCrateTypeDropdown();
		$output['TYPE']=$dd;
		$output['VALUE']=$crateObj->value;
		$currency_codes = new currency_codes();
		$currency_codes->id=$crateObj->currencycode;
		$dd=$currency_codes->makeCodesDropdown();
		$output['CURRENCYCODE']=$dd;

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/components/com_jomres/images/jomresimages/small/Save.png");
		$link = $jomresConfig_live_site.JOMRES_ADMINISTRATORDIRECTORY."/".$indexphp."?option=com_jomres";
		$jrtb .= $jrtbar->customToolbarItem('saveCrate',$link,$text="Save",$submitOnClick=true,$submitTask="savecrate",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',$indexphp."?option=com_jomres&task=listcrates",_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_crate.html');
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