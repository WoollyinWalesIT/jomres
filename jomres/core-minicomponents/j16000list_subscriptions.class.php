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