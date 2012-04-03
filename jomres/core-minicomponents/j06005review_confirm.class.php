<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06005review_confirm
	{
	function j06005review_confirm()
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		$rating_id = (int)$_GET['rating_id'];
		$state = (int)$_GET['state'];

		if ($jrConfig['use_reviews'] == "1" && $rating_id > 0)
			{
			$string = '';
			
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$this_user_can_review = $Reviews->this_user_can_review();
			if ($this_user_can_review)
				{
				$property_uid = $Reviews->get_property_uid_for_rating_id($rating_id);
				if ($property_uid ==0) // This definately isn't right. Just return without doing anything else.
					return;
				$Reviews->property_uid = $property_uid;
				
				if ($Reviews->checkConfirmUniqueIp($rating_id) != 0)
					{
					echo "0";
					return;
					}
				if ($Reviews->checkConfirmUniqueUser($rating_id) != 0)
					{
					echo "0";
					return;
					}
				$Reviews->save_confirmation($rating_id,$state);
				echo "1";
				return;
				}
			echo "2";
			return;
			}
		}


	function getRetVals()
		{
		return $this->retVals;
		}
	}
