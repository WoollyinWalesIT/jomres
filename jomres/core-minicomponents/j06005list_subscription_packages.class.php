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

class j06005list_subscription_packages
	{
	function j06005list_subscription_packages()
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
			if ($thisJRUser->accesslevel == 2 && (strlen($task)==0 || $task=="list_subscription_packages" || $task == "listyourproperties" || $task == "publishProperty") )
				{
				$allowedProperties = subscribers_getAvailablePropertySlots($thisJRUser->id);
				$existingProperties = subscribers_getManagersPublishedProperties($thisJRUser->id);
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1.$allowedProperties._JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2;
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4.count($existingProperties)._JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5;
				if ($allowedProperties == $existingProperties)
					echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3;
				if ($task != "listyourproperties")
					echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6;
				if ($task != "list_subscription_packages")
				echo _JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7;
				}
			}
		$subscribeIcon	='<IMG SRC="'.get_showtime('live_site').'/jomres/images/jomresimages/small/EditItem.png" border="0" alt="editicon">';
		$packages=subscriptions_packages_getallpackages();
		$output=array();
		$pageoutput=array();
		$rows=array();
		
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
		
		foreach ($packages as $package)
			{
			$r=array();
			$r['ID']			=$package['id'];
			$r['NAME']			=jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_NAME'.$package['id'],stripslashes($package['name']),false,false );
			$r['DESCRIPTION']	=jr_gettext('_JOMRES_CUSTOMTEXT_SUBSCRIPTIONPACKAGES_DESC'.$package['id'],stripslashes($package['description']),false,false );
			$r['PUBLISHED']		=$package['published'];
			$r['FREQUENCY']		=$package['frequency'];
			$r['TRIALPERIOD']	=$package['trial_period'];
			$r['TRIALAMOUNT']	=$package['trial_amount'];
			$r['FULLAMOUNT']	=$package['full_amount'];
			$r['ROOMSLIMIT']	=$package['rooms_limit'];
			$r['PROPERTYLIMIT']	=$package['property_limit'];
			$r['SUBSCRIBE']		='<a href="'.JOMRES_SITEPAGE_URL.'&task=subscribe&id='.$package['id'].'">'._JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE.'</a>';
			$rows[]=$r;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_list_subscription_packages.html');
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