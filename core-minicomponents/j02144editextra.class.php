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

class j02144editextra {
	function j02144editextra()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$this->editExtra();
		}

	function editExtra()
		{
		$mrConfig=getPropertySpecificSettings();

		$uid		= intval(jomresGetParam( $_REQUEST, 'uid', 0 ));

		$defaultProperty=getDefaultProperty();

		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', _JOMRES_COM_MR_NO );
		$yesno[] = jomresHTML::makeOption( '1', _JOMRES_COM_MR_YES );

		$output['PAGETITLE']=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);
		$output['HEXNAME']=jr_gettext('_JOMRES_COM_MR_EXTRA_NAME',_JOMRES_COM_MR_EXTRA_NAME);
		$output['HEXDESC']=jr_gettext('_JOMRES_COM_MR_EXTRA_DESC',_JOMRES_COM_MR_EXTRA_DESC);
		$output['HEXPRICE']=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE);
		$output['HMAXQUANTITY']=jr_gettext('_JOMRES_COM_MR_EXTRA_QUANTITY',_JOMRES_COM_MR_EXTRA_QUANTITY);
		$output['HTAXRATE']=jr_gettext('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE);

		$output['HMAXQUANTITYINFO']=jr_gettext('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC',_JOMRES_COM_MR_EXTRA_QUANTITY_DESC);

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'saveExtra');
		$jrtb .= $jrtbar->toolbarItem('cancel',jomresURL(JOMRES_SITEPAGE_URL."&task=listExtras"),'');
		$jrtb .= $jrtbar->toolbarItem('delete',jomresURL(JOMRES_SITEPAGE_URL."&task=deleteExtra".jomresURLToken()."&no_html=1&uid=$uid"),'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['EXTRAID']= $uid;
		$output['CURRENCY']=$mrConfig['currency'];

		$output['EXTRAMODEL_PERWEEK_CHECKED']="";
		$output['EXTRAMODEL_PERDAYS_CHECKED']="";
		$output['EXTRAMODEL_PERBOOKING_CHECKED']="";
		$output['EXTRAMODEL_PERPERSONPERBOOKING_CHECKED']="";
		$output['EXTRAMODEL_PERPERSONPERDAY_CHECKED']="";
		$output['EXTRAMODEL_PERPERSONPERWEEK_CHECKED']="";
		$output['EXTRAMODEL_PERDAYSMINDAYS_CHECKED']="";
		$output['EXTRAMODEL_PERDAYSPERROOM_CHECKED']="";
		
		$force=0;
		$output['EXTRAMODEL_FORCE1']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE2']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE3']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE4']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE5']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE6']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE7']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );
		$output['EXTRAMODEL_FORCE8']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $force );

		
		$mindays = 1;
		if ($uid>0)
			{

			$query="SELECT model,params,`force` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '".(int)$uid."' LIMIT 1";
			$model=doSelectSql($query,2);
			if (!isset($model['model']))
				$model['model']=2;
			switch ($model['model'])
				{
				case '1':
					$output['EXTRAMODEL_PERWEEK_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE1']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '2':
					$output['EXTRAMODEL_PERDAYS_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE2']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '3':
					$output['EXTRAMODEL_PERBOOKING_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE3']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '4':
					$output['EXTRAMODEL_PERPERSONPERBOOKING_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE4']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '5':
					$output['EXTRAMODEL_PERPERSONPERDAY_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE5']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '6':
					$output['EXTRAMODEL_PERPERSONPERWEEK_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE6']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '7':
					$output['EXTRAMODEL_PERDAYSMINDAYS_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE7']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
					$mindays=$model['params'];
				break;
				case '8':
					$output['EXTRAMODEL_PERDAYSPERROOM_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE8']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				}

			$query = $query="SELECT `name`,`desc`,`price`,`tax_rate`,`maxquantity` FROM `#__jomres_extras` WHERE uid = '".(int)$uid."' AND property_uid = '".(int)$defaultProperty."'";
			$exList =doSelectSql($query);
			
			foreach($exList as $ex)
				{
				$output['EXDESCRIPTION']= stripslashes($ex->desc);
				$output['EXNAME']= stripslashes($ex->name);
				$output['EXPRICE']= number_format($ex->price,2, '.', '');
				$output['MAXQUANTITYDROPDOWN'] = jomresHTML::integerSelectList( 01, 1000, 1, "maxquantity", 'size="1" class="inputbox"', $ex->maxquantity, "%02d" );
				$output['TAXRATEDROPDOWN'] = taxrates_makerateDropdown( array(),$ex->tax_rate );
				}
			}
		else
			{
			$output['EXTRAMODEL_PERWEEK_CHECKED']="checked";
			$output['MAXQUANTITYDROPDOWN'] = jomresHTML::integerSelectList( 01, 1000, 1, "maxquantity", 'size="1" class="inputbox"', 1, "%02d" );
			$output['TAXRATEDROPDOWN'] = taxrates_makerateDropdown( array(),0 );
			$model['model']=2;
			$model['force']=0;
			switch ($model['model'])
				{
				case '1':
					$output['EXTRAMODEL_PERWEEK_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE1']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '2':
					$output['EXTRAMODEL_PERDAYS_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE2']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '3':
					$output['EXTRAMODEL_PERBOOKING_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE3']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '4':
					$output['EXTRAMODEL_PERPERSONPERBOOKING_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE4']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '5':
					$output['EXTRAMODEL_PERPERSONPERDAY_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE5']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '6':
					$output['EXTRAMODEL_PERPERSONPERWEEK_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE6']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				case '7':
					$output['EXTRAMODEL_PERDAYSMINDAYS_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE7']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
					$mindays=$model['params'];
				break;
				case '8':
					$output['EXTRAMODEL_PERDAYSPERROOM_CHECKED']="checked";
					$output['EXTRAMODEL_FORCE8']=jomresHTML::selectList( $yesno, 'force[]', 'class="inputbox" size="1"', 'value', 'text', $model['force'] );
				break;
				}
			
			}


		$output['MINDAYSDROPDOWN']= jomresHTML::integerSelectList( 1, 100, 1, 'mindays', 'size="1" class="inputbox"', $mindays, "" );

		$output['EXTRAMODEL_PERWEEK']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK);
		$output['EXTRAMODEL_PERDAYS']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS);
		$output['EXTRAMODEL_PERBOOKING']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING);
		$output['EXTRAMODEL_PERPERSONPERBOOKING']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING);
		$output['EXTRAMODEL_PERPERSONPERDAY']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY);
		$output['EXTRAMODEL_PERPERSONPERWEEK']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK);
		$output['EXTRAMODEL_PERDAYSMINDAYS']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS);
		$output['EXTRAMODEL_PERDAYSPERROOM']=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM',_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM);
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1"/>';
		$output['JOMRES_SITEPAGE_URL']=JOMRES_SITEPAGE_URL;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_extra.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_TITLE',_JOMRES_COM_MR_EXTRA_TITLE);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_NAME',_JOMRES_COM_MR_EXTRA_NAME);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_DESC',_JOMRES_COM_MR_EXTRA_DESC);
		$output[]		=jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE',_JOMRES_COM_MR_EXTRA_PRICE);
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Calculated per week');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Calculated per days');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Calculated per booking');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Calculated per person per booking');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Calculated per person per day');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Calculated per person per week');
		$output[]		=jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Calculated per days (min days)');

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>