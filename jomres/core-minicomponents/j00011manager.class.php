<?php
/**
#
 * Mini-component core file: Constructs and displays the manager's menu
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

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00011manager {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00011manager($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $jomresConfig_live_site,$thisJRUser,$Itemid,$jrConfig,$thisJRUser;
		$published=$componentArgs['published'];

		$pageoutput=array();
		$output=array();

		$output['PROPERTYADMINLINK']	=JOMRES_SITEPAGE_URL."&task=propertyadmin&Itemid=$Itemid";
		$output['HPROPERTYADMIN']		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN,false,true);
		$output['CUSTOMERTYPEADMINLINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=listCustomerTypes&Itemid=$Itemid");
		$output['HCUSTOMERTYPEADMIN']	=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES,false,true);
		$output['SHOWAUDITTRAILLINK']	=jomresURL(JOMRES_SITEPAGE_URL."&task=showAuditTrail&Itemid=$Itemid");
		$output['HSHOWAUDITTRAIL']		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL',_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL,false,true);
		$output['LISTEXTRASLINK']		=jomresURL(JOMRES_SITEPAGE_URL."&task=listExtras&Itemid=$Itemid");
		$output['HLISTEXTRAS']			=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS',_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS,false,true);
		$output['LISTBLACKBOOKINGSLINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=listBlackBookings&Itemid=$Itemid");
		$output['HLISTBLACKBOOKINGS']	=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS,false,true);
		$output['EDITLANGLINK']			=jomresURL(JOMRES_SITEPAGE_URL."&task=editCustomTextAll&Itemid=$Itemid");
		$output['HEDITLANG']			=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE',_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE,false,true);
		$output['HBATCHUPLOADS']		=jr_gettext('_JOMRES_FRONT_IMAGEUPLOADS',_JOMRES_FRONT_IMAGEUPLOADS,false,true);
		$output['BATCHUPLOADSLINK']		=jomresURL(JOMRES_SITEPAGE_URL."&task=bUploadForm&Itemid=$Itemid");
		$output['HSTATS']				=jr_gettext('_JRPORTAL_STATS_PATETITLE',_JRPORTAL_STATS_PATETITLE,false,true);
		$output['STATSLINK']			=jomresURL(JOMRES_SITEPAGE_URL."&task=fe_stats&Itemid=$Itemid");


		if ($published)
			$pubmsg = jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false);
		else
			$pubmsg = jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false);

		$output['SETTINGSLINK']			='<a href="'.JOMRES_SITEPAGE_URL.'&task=hotelSettings&Itemid='.$Itemid.'" TITLE="'.jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC',_JOMRES_COM_MR_GENERALCONFIGDESC,FALSE).'"><img src="'.$jomresConfig_live_site.'/administrator/images/config.png" border="0" width="14" height="14" ></a>';
		$output['SETLINK']			= jomresURL(JOMRES_SITEPAGE_URL.'&task=hotelSettings&Itemid='.$Itemid);
		$output['SETTEXT']			= jr_gettext('_JOMRES_COM_MR_GENERALCONFIGDESC',_JOMRES_COM_MR_GENERALCONFIGDESC,FALSE);
   		if ( !function_exists('botJRHP') && ($jrConfig['selfRegistrationAllowed']=='1' || $thisJRUser->superPropertyManager) )
   			{
   			$output['NEWPROPERTYLINK']	= '<a href="'.jomresURL(JOMRES_SITEPAGE_URL."&task=registerProp_step1&Itemid=$Itemid").'" TITLE="'.jr_gettext('_JOMRES_COM_MR_NEWPROPERTY',_JOMRES_COM_MR_NEWPROPERTY,FALSE).'"><img src="'.$jomresConfig_live_site.'/administrator/images/new_f2.png" border="0" width="14" height="14" alt="'.jr_gettext('_JOMRES_COM_MR_NEWPROPERTY',_JOMRES_COM_MR_NEWPROPERTY,FALSE).'" ></a>';
			$output['NEWPROPLINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=registerProp_step1&Itemid=$Itemid");
			$output['NEWPROPTEXT']=jr_gettext('_JOMRES_COM_MR_NEWPROPERTY',_JOMRES_COM_MR_NEWPROPERTY,FALSE);
			$output['PROPDELETETEXT']=jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE',_JOMRES_COM_MR_PROPERTY_DELETE,FALSE);
			$output['PROPDELETELINK']=jomresURL(JOMRES_SITEPAGE_URL."&task=deleteProperty".jomresURLToken()."&Itemid=$Itemid");
   			}
		//$output['PUBLISHEDLINK']		='<a href="'.jomresURL(JOMRES_SITEPAGE_URL.'&task=publishProperty&Itemid='.$Itemid).'" TITLE="'.$pubmsg.'" ><img src="'.$pubimg.'" border="0" width="14" height="14" ></a>';
		$output['PUBLINK']=jomresURL(JOMRES_SITEPAGE_URL.'&no_html=1&task=publishProperty'.jomresURLToken().'&Itemid='.$Itemid);
		$output['PUBTEXT']=$pubmsg;
		if ($jrConfig['menusAsImages']=="1")
			{
			$jrtbar = new jomres_toolbar();
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->menubarItem('propertyadmin',$output['PROPERTYADMINLINK'],$output['HPROPERTYADMIN']);
			//$jrtb .= $jrtbar->menubarItem('blackbookings',$output['LISTBLACKBOOKINGSLINK'],$output['HLISTBLACKBOOKINGS']);
			$jrtb .= $jrtbar->menubarItem('audittrail',$output['SHOWAUDITTRAILLINK'],$output['HSHOWAUDITTRAIL']);
			$jrtb .= $jrtbar->menubarItem('guesttypes',$output['CUSTOMERTYPEADMINLINK'],$output['HCUSTOMERTYPEADMIN']);
			$jrtb .= $jrtbar->menubarItem('extras',$output['LISTEXTRASLINK'],$output['HLISTEXTRAS']);
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				$jrtb .= $jrtbar->menubarItem('editlanguage',$output['EDITLANGLINK'],$output['HEDITLANG']);
			$jrtb .= $jrtbar->menubarItem('slidwshowimages',$output['BATCHUPLOADSLINK'],$output['HBATCHUPLOADS']);
			$jrtb .= $jrtbar->menubarItem('stats',$output['STATSLINK'],$output['HSTATS']);
			$jrtb .= $jrtbar->spacer(32);
			if (!function_exists('botJRHP'))
				{
				if (!$published)
					$jrtb .= $jrtbar->menubarItem('unpublish',$output['PUBLINK'],$output['PUBTEXT']);
				else
					$jrtb .= $jrtbar->menubarItem('publish',$output['PUBLINK'],$output['PUBTEXT']);
				}
			$jrtb .= $jrtbar->menubarItem('configuration',$output['SETLINK'],$output['SETTEXT']);
			if (isset($output['NEWPROPERTYLINK']) && !JOMRES_SINGLEPROPERTY )
				{
				$jrtb .= $jrtbar->menubarItem('newproperty',$output['NEWPROPLINK'],$output['NEWPROPTEXT']);
				$jrtb .= $jrtbar->menubarItem('deleteproperty',$output['PROPDELETELINK'],$output['PROPDELETETEXT']);
				}
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;
			}
		else
			{
			$menubar='<a href="'.$output['PROPERTYADMINLINK'].'">'.$output['HPROPERTYADMIN'].'</a>&nbsp;&nbsp;&nbsp;';
			//$menubar.='<a href="'.$output['LISTBLACKBOOKINGSLINK'].'">'.$output['HLISTBLACKBOOKINGS'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['SHOWAUDITTRAILLINK'].'">'.$output['HSHOWAUDITTRAIL'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['CUSTOMERTYPEADMINLINK'].'">'.$output['HCUSTOMERTYPEADMIN'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['LISTEXTRASLINK'].'">'.$output['HLISTEXTRAS'].'</a>&nbsp;&nbsp;&nbsp;';
			if ($jrConfig['minimalconfiguration']!="1" || $thisJRUser->superPropertyManager)
				$menubar.='<a href="'.$output['EDITLANGLINK'].'">'.$output['HEDITLANG'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['BOOKGUESTOUTLINK'].'">'.$output['HBOOKGUESTOUT'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['BATCHUPLOADSLINK'].'">'.$output['HBATCHUPLOADS'].'</a>&nbsp;&nbsp;&nbsp;';
			$menubar.='<a href="'.$output['STATSLINK'].'">'.$output['HSTATS'].'</a>&nbsp;&nbsp;&nbsp;';
			if (!function_exists('botJRHP'))
				{
				if (!$published)
					$menubar.='<a href="'.$output['PUBLINK'].'">'.jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH,false,true).'&nbsp;&nbsp;&nbsp;';
				else
					$menubar.='<a href="'.$output['PUBLINK'].'">'.jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH,false,true).'&nbsp;&nbsp;&nbsp;';
				}


			$menubar.='<a href="'.$output['SETLINK'].'">'.$output['SETTEXT'].'</a>&nbsp;&nbsp;&nbsp;';
			if (isset($output['NEWPROPERTYLINK']) && !JOMRES_SINGLEPROPERTY )
				{
				$menubar.='<a href="'.$output['NEWPROPLINK'].'">'.$output['NEWPROPTEXT'].'</a>&nbsp;&nbsp;&nbsp;';
				$menubar.='<a href="'.$output['PROPDELETELINK'].'">'.$output['PROPDELETETEXT'].'</a>&nbsp;&nbsp;&nbsp;';
				}
			$output['JOMRESTOOLBAR']=$menubar;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
    	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'manager.html');
		$tmpl->addRows( 'manager',$pageoutput);
		global $MiniComponents;
		$mcOutput=$MiniComponents->getAllEventPointsData('00011');
		if (count($mcOutput)>0)
			{
			foreach ($mcOutput as $key=>$val)
				{
				$tmpl->addRows( 'customOutput_'.$key, array($val) );
				}
			}
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output=array();

		$output['HPROPERTYADMIN']		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN',_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN);
		$output['HCUSTOMERTYPEADMIN']	=jr_gettext('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES',_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES);
		$output['HSHOWAUDITTRAIL']		=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL',_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL);
		$output['HLISTEXTRAS']			=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS',_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS);
		$output['HLISTBLACKBOOKINGS']	=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS',_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS);
		$output['HEDITLANG']			=jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE',_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE);
		$output['HBATCHUPLOADS']		=jr_gettext('_JOMRES_FRONT_IMAGEUPLOADS',_JOMRES_FRONT_IMAGEUPLOADS);
		$output['HSTATS']				=jr_gettext('_JRPORTAL_STATS_PATETITLE',_JRPORTAL_STATS_PATETITLE);

		$output['P1'] = jr_gettext('_JOMRES_COM_MR_VRCT_UNPUBLISH',_JOMRES_COM_MR_VRCT_UNPUBLISH);
		$output['P2'] = jr_gettext('_JOMRES_COM_MR_VRCT_PUBLISH',_JOMRES_COM_MR_VRCT_PUBLISH);

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
		return null;
		}
	}
?>