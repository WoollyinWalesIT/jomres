<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000subscribed
	{
	function j06000subscribed()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_singleton_abstract::getInstance('jr_user');
		
		echo jr_gettext('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',_JRPORTAL_SUBSCRIBERS_SUBSCRIBED,false);
		
		/*
		$package_id		= (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		$output=array();
		$pageoutput=array();
		
		$subscriber = new jrportal_subscribers();
		$user=subscribers_getSubscriberDetailsForJosId($thisJRUser->id);

		$output['PAGETITLE']=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE;
		$output['SUBMIT']=_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS;
		$output['DESC']=_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC;
		$output['HFIRSTNAME']=_JRPORTAL_SUBSCRIBERS_FIRSTNAME;
		$output['HSURNAME']=_JRPORTAL_SUBSCRIBERS_SURNAME;
		$output['HADDRESS']=_JRPORTAL_SUBSCRIBERS_ADDRESS;
		$output['HCOUNTRY']=_JRPORTAL_SUBSCRIBERS_COUNTRY;
		$output['HPOSTCODE']=_JRPORTAL_SUBSCRIBERS_POSTCODE;
	
		$output['FIRSTNAME']=$subscriber->firstname;
		$output['SURNAME']=$subscriber->surname;
		$output['ADDRESS']=$subscriber->address;
		$output['POSTCODE']=$subscriber->postcode;
		
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
		$output['COUNTRYDROPDOWN']=jomresHTML::selectList($thecountryCodes, 'country', ' class="inputbox"', 'value', 'text', $selectedCountry);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( get_showtime('ePointFilepath')."/templates" );
		$tmpl->readTemplatesFromInput( 'frontend_subscriber_register.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		*/
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}