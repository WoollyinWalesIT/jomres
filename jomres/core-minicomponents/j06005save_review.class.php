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

class j06005save_review
	{
	function j06005save_review()
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();

		if (!isset($_GET['property_uid']))
			{
			$property_uid = get_showtime('property_uid');
			}
		else
			{
			$property_uid = (int)$_POST['property_uid'];
			}
		
		$rating = (int)jomresGetParam( $_POST, 'rating',0 );
		$review_title = jomresGetParam( $_POST, 'review_title','' );
		$review_description = jomresGetParam( $_POST, 'review_description', '' );
		$pros = jomresGetParam( $_POST, 'pros', '' );
		$cons = jomresGetParam( $_POST, 'cons', '' );
		
		// We won't pass a message back, the only way the user will have got this far is if they've bypassed the javascript or don't have javascript enabled. 
		// Either way, they've bypassed the methods we've built to guide them through the submission process. We can still take a valid submission, but we won't take invalid ones.
		if ( ($rating <1 || $rating > 10) || $review_title =="" || $review_description =="" || $pros =="" || $cons =="" )
			jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=add_review&property_uid=".$property_uid) ,"" );
			
		//property_header($property_uid);

		if ($jrConfig['use_reviews'] == "1" && $property_uid > 0 )
			{
			$output = array();
			$pageoutput = array();
			$rows = array();
			$this_user_can_review = false;
			
			jr_import('jomres_reviews');
			$Reviews = new jomres_reviews();
			$Reviews->property_uid = $property_uid;
			
			$this_user_can_review = $Reviews->this_user_can_review();
			$this_user_can_review_this_property = $Reviews->this_user_can_review_this_property();
			
			if ($this_user_can_review_this_property)
				{
				$rating_id = $Reviews->save_review($rating,$review_title,$review_description,$pros,$cons);
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=viewproperty&ja=1&property_uid=".$property_uid) ,"" );
				exit;
				}
			else
				{
				echo jr_gettext('_JOMRES_REVIEWS_CANNOTREVIEW',_JOMRES_REVIEWS_CANNOTREVIEW	);
				}
			}
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
?>
