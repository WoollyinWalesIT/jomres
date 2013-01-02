<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005subscribe
	{
	function j06005subscribe()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsRegistered)
			{
			$MiniComponents->triggerEvent('02280');
			}
		else
			{
			$package_id		= (int)jomresGetParam( $_REQUEST, 'id', 0 );
			
			$output=array();
			$pageoutput=array();
			
			jr_import('jrportal_subscribers');
			$subscriber = new jrportal_subscribers();
			$user=subscribers_getSubscriberDetailsForJosId($thisJRUser->id);
			//var_dump($user);exit;
			if ($user)
				{
				$subscriber->id	= $user['id'];
				$subscriber->getSubscriber();
				}
			if (isset($_REQUEST['firstname']) )
				{
				$subscriber->firstname		= jomresGetParam( $_REQUEST, 'firstname','');
				$subscriber->surname		= jomresGetParam( $_REQUEST, 'surname', '' );
				$subscriber->address		= jomresGetParam( $_REQUEST, 'address', '' );
				$subscriber->country		= jomresGetParam( $_REQUEST, 'country', '' );
				$subscriber->postcode		= jomresGetParam( $_REQUEST, 'postcode', '' );
				}

			$output['PACKAGE_ID']=$package_id;
			
			$output['PAGETITLE']=jr_gettext('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE,false);
			$output['SUBMIT']=jr_gettext('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS',_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS,false);
			$output['DESC']=jr_gettext('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC,false);
			$output['HFIRSTNAME']=jr_gettext('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',_JRPORTAL_SUBSCRIBERS_FIRSTNAME,false);
			$output['HSURNAME']=jr_gettext('_JRPORTAL_SUBSCRIBERS_SURNAME',_JRPORTAL_SUBSCRIBERS_SURNAME,false);
			$output['HADDRESS']=jr_gettext('_JRPORTAL_SUBSCRIBERS_ADDRESS',_JRPORTAL_SUBSCRIBERS_ADDRESS,false);
			$output['HCOUNTRY']=jr_gettext('_JRPORTAL_SUBSCRIBERS_COUNTRY',_JRPORTAL_SUBSCRIBERS_COUNTRY,false);
			$output['HPOSTCODE']=jr_gettext('_JRPORTAL_SUBSCRIBERS_POSTCODE',_JRPORTAL_SUBSCRIBERS_POSTCODE,false);
		
			$output['FIRSTNAME']=$subscriber->firstname;
			$output['SURNAME']=$subscriber->surname;
			$output['ADDRESS']=$subscriber->address;
			$output['POSTCODE']=$subscriber->postcode;
			//var_dump($subscriber->country);exit;
			if (!isset($subscriber->country) || strlen($subscriber->country) == 0)
				$subscriber->country="GB";

			$selectedCountry=strtoupper($subscriber->country);
			$countryNames=countryNameArray();
			$countryCodes=countryCodesArray();
			asort($countryCodes);
			foreach ($countryCodes as $k=>$v)
				{
				$thecountryCodes[]=jomresHTML::makeOption( $k, $v);
				}
			$output['COUNTRYDROPDOWN']=jomresHTML::selectList($thecountryCodes, 'country', ' class="inputbox"', 'value', 'text', $subscriber->country);
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'frontend_subscriber_register.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}