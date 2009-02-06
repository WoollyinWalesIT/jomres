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

class j16000listcrates
	{
	function j16000listcrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$indexphp;
		$rows=array();
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0">';

		$crateFunctions=new jrportal_crate_functions();

		$crateList=$crateFunctions->getAllUnarchivedCrates();

		$output['PAGETITLE']=_JRPORTAL_CPANEL_PATETITLE;
		$output['TOTALINLISTPLUSONE']=count($crateList);
		$output['HTITLE']=_JRPORTAL_CRATE_TITLE;
		$output['HTYPE']=_JRPORTAL_CRATE_TYPE;
		$output['HVALUE']=_JRPORTAL_CRATE_VALUE;
		$output['HCURRENCYCODE']=_JRPORTAL_CRATE_CURRENCYCODE;
		$counter=0;
		foreach($crateList as $crate)
			{
			//var_dump($crate);exit;
			$r=array();
			//class=""
			$counter++;
			 if ($counter % 2)
				$r['STYLE'] ="row0";
			else
				$r['STYLE'] ="row1";
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$crate['id'].'" onClick="isChecked(this.checked);">';
			$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'task=editcrate&id='.$crate['id'].'">'.$editIcon.'</a>';
			$r['TITLE']=$crate['title'];
			$crateType = new crateTypes();
			$crateType->id=$crate['type'];
			$r['TYPE']=$crateType->types[$crateType->id];
			$r['VALUE']=$crate['value'];

			$currency_codes = new currency_codes();
			$currency_codes->id=$crate['currencycode'];
			$r['CURRENCYCODE']=$currency_codes->getCode();
			$rows[]=$r;
			}

		$jrtbar = new jomres_toolbar();
		$jrtb  = $jrtbar->startTable();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/AddItem.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('editCrate',$link,$text="Add",$submitOnClick=true,$submitTask="editcrate",$image);
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,_JRPORTAL_CANCEL);
		$jrtb .= $jrtbar->spacer();
		$image = $jrtbar->makeImageValid("/jomres/images/jomresimages/small/WasteBasket.png");
		$link = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem('archiveCrates',$link,$text="Delete",$submitOnClick=true,$submitTask="archivecrates",$image);
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_crates.html');
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