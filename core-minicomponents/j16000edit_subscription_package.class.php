<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000edit_subscription_package {
	function j16000edit_subscription_package()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$id		= intval(jomresGetParam( $_REQUEST, 'id', 0 ));
		
		jr_import('jrportal_subscriptions_packages');
		$package = new jrportal_subscriptions_packages();

		if ($id > 0)
			{
			$package->id = $id;
			$package->getSubscriptionPackage();
			}

		$output['PAGETITLE']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE;
		$output['HNAME']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME;
		$output['HDESCRIPTION']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION;
		$output['HPUBLISHED']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED;
		$output['HFREQUENCY']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY;
		$output['HTRIALPERIOD']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD;
		$output['HTRIALAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT;
		$output['HFULLAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT;
		$output['HROOMSLIMIT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT;
		$output['HPROPERTYLIMIT']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT;
		
		$output['FREQUENCY_DESC']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC;
		$output['TRIALPERIOD_DESC']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC;
		$output['FREEBIENOTES']	=_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES;


		$output['ID']				=$package->id;
		$output['NAME']				=$package->name;
		$output['DESCRIPTION']		=$package->description;
		$output['PUBLISHED']		=$package->published;
		$output['FREQUENCYDROPDOWN']=subscriptions_packages_makefrequencyDropdown($package->frequency);
		$output['TRIALPERIODDROPDOWN']=subscriptions_packages_maketrialperiodDropdown($package->trial_period);
		$output['TRIALAMOUNT']		=$package->trial_amount;
		$output['FULLAMOUNT']		=$package->full_amount;
		$output['ROOMSLIMIT']		=subscriptions_packages_makeroomslimitDropdown( $package->rooms_limit );
		$output['PROPERTYLIMIT']	=subscriptions_packages_makepropertylimitDropdown( $package->property_limit );
		$output['TAXCODEDROPDOWN']		=taxrates_makerateDropdown(array(),$package->tax_code_id);
			
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('save','','',true,'save_subscription_package');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=list_subscription_packages",'');
		if ($id > 0)
			$jrtb .= $jrtbar->toolbarItem('delete',JOMRES_SITEPAGE_URL_ADMIN."&task=delete_subscription_package".jomresURLToken()."&no_html=1&id=".$id,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$output['JOMRESTOKEN'] ='<input type="hidden" name="jomrestoken" value="'.jomresSetToken().'"><input type="hidden" name="no_html" value="1">';

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_subscription_package.html' );
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