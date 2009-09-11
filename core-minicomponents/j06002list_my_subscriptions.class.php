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

class j06002list_my_subscriptions
	{
	function j06002list_my_subscriptions()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$task 				= get_showtime('task');
		if (!$thisJRUser->superPropertyManager && $jrConfig['useSubscriptions']=="1")
			{
			if ($thisJRUser->accesslevel == 2)
				{
				$users_subscriptions=subscribers_getCurrentSubscriptionsForJosId($jrConfig->id);
				
				}
			else
				return;
			}
		else
			return;
			
		if (count($users_subscriptions) ==0)
			return;
			
		$output=array();
		$pageoutput=array();
		$rows=array();
		
		$currfmt = jomres_getSingleton('jomres_currency_format',2);
		
		$output['PAGETITLE']		=_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS;
		$output['HNAME']			=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME;
		$output['HDESCRIPTION']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION;
		$output['HFREQUENCY']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY;
		$output['HTRIALPERIOD']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD;
		$output['HTRIALAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT;
		$output['HFULLAMOUNT']		=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT;
		$output['HPROPERTYLIMIT']	=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT;
		$output['HSTATUS']			=_JOMRES_COM_MR_VIEWBOOKINGS_STATUS;
		$output['STATUSEXPL']		=_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL;
		
		foreach ($users_subscriptions as $users_subscription)
			{
			$r=array();
			$r['NAME']			=$users_subscription['name'];
			$r['DESCRIPTION']	=$users_subscription['description'];
			$r['FREQUENCY']		=$users_subscription['frequency'];
			$r['TRIALPERIOD']	=$users_subscription['trial_period'];
			$r['TRIALAMOUNT']	=$jrConfig['globalCurrency'].$currfmt->get_formatted($users_subscription['trial_amount']);
			$r['FULLAMOUNT']	=$jrConfig['globalCurrency'].$currfmt->get_formatted($users_subscription['full_amount']);
			$r['STATUS']		=$users_subscription['status']."  ";
			$r['PROPERTYLIMIT']	=$users_subscription['property_limit'];
			$rows[]=$r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_my_subscriptions.html');
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