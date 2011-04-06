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

class j16000miscdefinesfortouchtemplating
	{
	function j16000miscdefinesfortouchtemplating()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		
		// On it's own, this minicomponent doesn't do anything. It's a place holder for definitions that don't have a home in any other minicomponent.
		
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		= jr_gettext('_JOMRES_CLICKTOREGISTER',_JOMRES_CLICKTOREGISTER);
		$output[]		= jr_gettext('_JOMRES_SEARCH_PRICERANGES',_JOMRES_SEARCH_PRICERANGES);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE',_JOMRES_PAYPAL_REDIRECTMESSAGE);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED',_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED);
		$output[]		= jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE',_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE);
		
		
		$countryCodes=countryCodesArray();
		foreach ($countryCodes as $k=>$v)
			{
			$output[]		= jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRYNAMES_'.$k,$v);
			}
		
		$FIPS=regionNamesArray();
		foreach ($FIPS as $countryCode=>$v)
			{
			//echo getSimpleCountry($countryCode)."<br/>";
			sort($v);
			foreach ($v as $key=>$val)
				{
				$output[]		= jr_gettext('_JOMRES_CUSTOMTEXT_REGIONNAMES_'.$countryCode."_".$key,$val) ;
				}
			}
		
		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
			
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}