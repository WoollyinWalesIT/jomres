<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Used by j06000viewproperty.class.php to build tabs in the property details page. Builds reviews template output.
	 * 
	 */

class j00035tabcontent_03_reviews
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig = getPropertySpecificSettings($property_uid);
		$this->retVals ="";
		
		if ($jrConfig[ 'use_reviews' ] == '1') {
			$reviews = $MiniComponents->specificEvent('06000', 'show_property_reviews', array('output_now' => false, 'property_uid' => $property_uid));
			$reviews_title = jr_gettext('_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false, false);

			$anchor = jomres_generate_tab_anchor($reviews_title);
			$tab = array('TAB_ANCHOR' => $anchor, 'TAB_TITLE' => $reviews_title, 'TAB_CONTENT' => $reviews, 'TAB_ID' => 'tour_target_reviews_list');
			$this->retVals = $tab;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
