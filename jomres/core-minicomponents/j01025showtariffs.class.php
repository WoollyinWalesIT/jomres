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

/**
#
 * Outputs tariff details - frontend
 #
* @package Jomres
#
 */
class j01025showtariffs {
	/**
	#
	 * Constructor: constructs and displays tariff information through the show_tariffs patTemplate file
	#
	 */
	function j01025showtariffs($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$property_uid = get_showtime('property_uid');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$mrConfig=getPropertySpecificSettings($property_uid);
		$pop=jomresGetParam( $_REQUEST, 'popup', '0' );
		
		$output_now=(bool)jomresGetParam( $_REQUEST, 'op', false );
		
		$ccodes= currencyCodesArray();
		$query="SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
			`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
			`ignore_pppn`,`allow_ph`,`allow_we`
			FROM #__jomres_rates WHERE property_uid = '".$property_uid."' ORDER BY rate_title,roomclass_uid,validto";
		$tariffsList = doSelectSql($query);
		$google_deets=array();
		$tariff_deets=array();
		$output=array();
		$output['HTITLE']=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE);
		$output['HDESC']=jr_gettext('_JOMRES_FRONT_TARIFFS_DESC',_JOMRES_FRONT_TARIFFS_DESC);
		$output['HROOMTYPE']=jr_gettext('_JOMRES_FRONT_TARIFFS_ROOMTYPE',_JOMRES_FRONT_TARIFFS_ROOMTYPE);
		$output['HSTARTS']=jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS',_JOMRES_FRONT_TARIFFS_STARTS);
		$output['HENDS']=jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS',_JOMRES_FRONT_TARIFFS_ENDS);
		$output['HMINDAYS']=jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS',_JOMRES_FRONT_TARIFFS_MINDAYS);
		$output['HMAXDAYS']=jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS',_JOMRES_FRONT_TARIFFS_MAXDAYS);
		$output['HMINPEEPS']=jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS',_JOMRES_FRONT_TARIFFS_MINPEEPS);
		$output['HMAXPEEPS']=jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS',_JOMRES_FRONT_TARIFFS_MAXPEEPS);
		$output['CONVERSIONBLURB']=jr_gettext('_JOMRES_CURRENCYCONVERSIONTEXT',_JOMRES_CURRENCYCONVERSIONTEXT);

		if (count($tariffsList)>0)
			{
			$today = date("Y/m/d");
			$date_elements  = explode("/",$today);
			$unixTodaysDate= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
			foreach ($tariffsList as $tariff)
				{
				$tariffRoomClass=$tariff->roomclass_uid;
			 	if ($tariffRoomClass!="")
					{
					$query="SELECT room_class_abbv, room_class_full_desc FROM #__jomres_room_classes WHERE room_classes_uid = '$tariffRoomClass'";
					$classList =doSelectSql($query);

					foreach($classList as $rclass)
						{
						$roomClassAbbv = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int)$tariffRoomClass,		stripslashes($rclass->room_class_abbv),false,false);
						$roomClassFullDesc = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int)$tariffRoomClass,		stripslashes($rclass->room_class_full_desc),false,false);
						}
			 		}
			 	else
					$roomClassAbbv="";
				$validfrom=$tariff->validfrom;
				$validto=$tariff->validto;
				$date_elements  = explode("/",$validfrom);
				$unixValidfrom= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);
				$date_elements  = explode("/",$validto);
				$unixValidto= mktime(0,0,0,$date_elements[1],$date_elements[2],$date_elements[0]);

			 	if ($unixTodaysDate<$unixValidto)
			 		{
					$r=array();
					//$output['title']=stripslashes($tariff->rate_title);
					$r['TITLE']=jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFTITLE'.$tariff->rates_uid,stripslashes($tariff->rate_title) );
					//$output['desc']=stripslashes($tariff->rate_description);
					$r['DESC']=jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tariff->rates_uid,stripslashes($tariff->rate_description) );
					$r['VALIDFROM']=outputDate($tariff->validfrom);
					$r['VALIDTO']=outputDate($tariff->validto);

					$r['MINDAYS']=$tariff->mindays;
					$r['MAXDAYS']=$tariff->maxdays;
					$r['MINPEOPLE']=$tariff->minpeople;
					$r['MAXPEOPLE']=$tariff->maxpeople;
					$r['ROOMCLASSABBV']=$roomClassAbbv;
					$r['ROOMCLASSFULLDESC']=$roomClassFullDesc;
					if (empty($mrConfig['ratemultiplier']) )
						$mrConfig['ratemultiplier']=1;
					else
						$mrConfig['ratemultiplier']+=0;

					$currfmt = jomres_getSingleton('jomres_currency_format');
					if ($tariff->ignore_pppn || $mrConfig['perPersonPerNight']=="0" )
						$r['ROOMRATEPERDAY']=$mrConfig['currency'].$currfmt->get_formatted($tariff->roomrateperday)." ".jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);
					else
						$r['ROOMRATEPERDAY']=$mrConfig['currency'].$currfmt->get_formatted($tariff->roomrateperday)." ".jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN);
					if ($mrConfig['tariffChargesStoredWeeklyYesNo']=="1")
						$r['ROOMRATEPERDAY']=$mrConfig['currency'].$currfmt->get_formatted($tariff->roomrateperday)." ".jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK);
					//$output['roomrateperday']=$mrConfig['currency'].number_format($tariff->roomrateperday,2)." ".jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);

					if ($tariff->allow_we=="0")
						$r['NOTWEEKENDS']=jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',_JOMRES_FRONT_TARIFFS_NOTWEEKEND);
					$theRate=number_format(($mrConfig['ratemultiplier']*$tariff->roomrateperday),2, '.', '');

					if ($mrConfig['showGoogleCurrencyLink']=="1")
						{
						$theLink='http://www.xe.com/pca/input.cgi?From='.$mrConfig['currencyCode'].'&Amount='.$theRate;
						$theText=jr_gettext('_JOMRES_CURRENCYCONVERSIONTEXT',_JOMRES_CURRENCYCONVERSIONTEXT);
						$r['GOOGLECURRENCYLINKS']='<a href='.$theLink.' target="_blank">'.$theText.'</a><br />';
						}
					$tariff_deets[]=$r;
					}
				}
			}
		$pageoutput[]=$output;
		$tmpl = new patTemplate();

		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'show_tariffs', $tariff_deets );
		$mcOutput=$MiniComponents->getAllEventPointsData('01020');
		if (count($mcOutput)>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$tmpl->addRows( 'customOutput_'.$key, array($val) );
				}
			}
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'te_show_tariffs.html' );
		$result='';
		
		if ($output_now)
			$tmpl->displayParsedTemplate();
		else
			$this->retVals=$tmpl->getParsedTemplate();
			
		if ($mrConfig['dumpTemplate']=="1" && $jrConfig['composite_property_details']!="1")
			$tmpl->dump();
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_CURRENCYCONVERSIONTEXT',_JOMRES_CURRENCYCONVERSIONTEXT);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_NOTWEEKEND',_JOMRES_FRONT_TARIFFS_NOTWEEKEND);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_PN',_JOMRES_FRONT_TARIFFS_PN);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_PPPN',_JOMRES_FRONT_TARIFFS_PPPN);
		$output[]		=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK',_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_TITLE',_JOMRES_FRONT_TARIFFS_TITLE);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_DESC',_JOMRES_FRONT_TARIFFS_DESC);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_ROOMTYPE',_JOMRES_FRONT_TARIFFS_ROOMTYPE);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_STARTS',_JOMRES_FRONT_TARIFFS_STARTS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_ENDS',_JOMRES_FRONT_TARIFFS_ENDS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_MINDAYS',_JOMRES_FRONT_TARIFFS_MINDAYS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_MAXDAYS',_JOMRES_FRONT_TARIFFS_MAXDAYS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_MINPEEPS',_JOMRES_FRONT_TARIFFS_MINPEEPS);
		$output[]		=jr_gettext('_JOMRES_FRONT_TARIFFS_MAXPEEPS',_JOMRES_FRONT_TARIFFS_MAXPEEPS);
		$output[]		=jr_gettext('_JOMRES_CURRENCYCONVERSIONTEXT',_JOMRES_CURRENCYCONVERSIONTEXT);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>