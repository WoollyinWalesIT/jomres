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

class j06000subscribe
	{
	function j06000subscribe()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $thisJRUser;
		$package_id		= (int)jomresGetParam( $_REQUEST, 'id', 0 );
		
		$output=array();
		$pageoutput=array();
		
		jr_import('jrportal_subscribers');
		$subscriber = new jrportal_subscribers();
		$user=subscribers_getSubscriberDetailsForJosId($thisJRUser->id);
		
		if ($user)
			{
			$subscriber->id	= $user['id'];
			$subscriber->getSubscriber();
			/*
			$subscriber->cms_user_id	= $user['cms_user_id'];
			$subscriber->firstname		= $user['firstname'];
			$subscriber->surname		= $user['surname'];
			$subscriber->address		= $user['address'];
			$subscriber->country		= $user['country'];
			$subscriber->postcode		= $user['postcode'];
			*/
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
		$output['COUNTRYDROPDOWN']=jomresHTML::selectList($thecountryCodes, 'country', ' class="inputbox"', 'value', 'text', $selectedCountry);
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'frontend_subscriber_register.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		
		}
	
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}	
	}