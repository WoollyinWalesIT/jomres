<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005save_review_report
	{
	function j06005save_review_report()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		$rating_id = (int)$_REQUEST['rating_id'];
		$report = jomresGetParam( $_REQUEST, 'report', '');

		if ($jrConfig['use_reviews'] == "1" && $rating_id > 0 && $report != "" )
			{
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$Reviews->save_review_report($rating_id,$report);
			$property_uid = $Reviews->get_property_uid_for_rating_id($rating_id);
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=viewproperty&property_uid=".$property_uid,"" ));
			exit;
			}
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}