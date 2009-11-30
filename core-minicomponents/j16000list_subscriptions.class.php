<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000list_subscriptions
	{
	function j16000list_subscriptions()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		
		$jomresConfig_livesite=get_showtime('live_site');
		
		$deleteIcon = $jomresConfig_livesite."/jomres/images/jomresimages/small/WasteBasket.png";
		$output=array();
		$pageoutput=array();
		$rows=array();
								
		$output['PAGETITLE']		=_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE;
		
		/*
		$output['HNAME']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME;
		$output['HDESCRIPTION']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION;
		$output['HPUBLISHED']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED;
		$output['HFREQUENCY']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY;
		$output['HTRIALPERIOD']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD;
		$output['HTRIALAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT;
		$output['HFULLAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT;
		$output['HROOMSLIMIT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT;
		$output['HPROPERTYLIMIT']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT;
		

		*/
		
		$output['HNAME']					=_JOMRES_COM_MR_ASSIGNUSER_ID;
		$output['HCMS_USER_ID']				=_JOMRES_COM_MR_ASSIGNUSER_USERNAME;
		$output['HGATEWAY_SUBSCRIPTION_ID']	=_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID;
		$output['HNAME']					=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME;
		$output['HDESCRIPTION']				=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION;
		$output['HFREQUENCY']				=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY;
		$output['HTRIAL_PERIOD']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD;
		$output['HTRIAL_AMOUNT']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT;
		$output['HFULL_AMOUNT']				=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT;
		$output['HROOMS_LIMIT']				=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT;
		$output['HPROPERTY_LIMIT']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT;
		$output['HSTATUS']					=_JOMRES_COM_MR_VIEWBOOKINGS_STATUS;
		$output['HRAISED_DATE']				=_JOMRES_MR_AUDIT_LISTING_DATE;

		$query= " SELECT * FROM #__jomresportal_subscriptions WHERE status = 1";
		$subscriptionList = doSelectSql($query);
		
		
		foreach ($subscriptionList as $subscription)
			{
			$r=array();
			$r['ID']					=$subscription->id;
			$r['CMS_USER_ID']			=$subscription->cms_user_id;
			$r['GATEWAY_SUBSCRIPTION_ID']=$subscription->gateway_subscription_id;
			$r['NAME']					=$subscription->name;
			$r['DESCRIPTION']			=$subscription->description;
			$r['FREQUENCY']				=$subscription->frequency;
			$r['TRIAL_PERIOD']			=$subscription->trial_period;
			$r['TRIAL_AMOUNT']			=$subscription->trial_amount;
			$r['FULL_AMOUNT']			=$subscription->full_amount;
			$r['ROOMS_LIMIT']			=$subscription->rooms_limit;
			$r['PROPERTY_LIMIT']		=$subscription->property_limit;
			$r['STATUS']				=$subscription->status;
			$r['RAISED_DATE']			=$subscription->raised_date;
			$r['DELETELINK']		='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_subscription&no_html=1&id='.$subscription->id.'"><img src="'.$deleteIcon.'"/></a>';
			//$r['EDITLINK']		='<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_subscription_package&id='.$package['id'].'">'.$editIcon.'</a>';
			$rows[]=$r;
			}

		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		//$jrtb .= $jrtbar->toolbarItem('new',JOMRES_SITEPAGE_URL_ADMIN."&task=edit_subscription_package",'');
		$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN,'');
		$jrtb .= $jrtbar->endTable();
		$output['JOMRESTOOLBAR']=$jrtb;
		
		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_subscriptions.html');
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