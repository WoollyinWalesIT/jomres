<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000listcrates
	{
	function j16000listcrates()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jomresConfig_live_site,$indexphp;
		$rows=array();
		$editIcon	='<IMG SRC="'.$jomresConfig_live_site.'/jomres/images/jomresimages/small/EditItem.png" border="0">';

		jr_import('jrportal_crate_functions');
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
			$r['CHECKBOX']='<input type="checkbox" id="cb'.count($rows).'" name="idarray[]" value="'.$crate['id'].'" onClick="jomres_isChecked(this.checked);">';
			$r['EDITLINK']='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=editcrate&id='.$crate['id'].'">'.$editIcon.'</a>';
			$r['TITLE']=$crate['title'];
			jr_import('crateTypes');
			$crateType = new crateTypes();
			$crateType->id=$crate['type'];
			$r['TYPE']=$crateType->types[$crateType->id];
			$r['VALUE']=$crate['value'];

			jr_import('currency_codes');
			$currency_codes = new currency_codes();
			$currency_codes->id=$crate['currencycode'];
			$r['CURRENCYCODE']=$currency_codes->getCode();
			$rows[]=$r;
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
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
		
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;

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