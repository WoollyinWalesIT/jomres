<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000save_tax_rule
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		
		
		$id          = intval( jomresGetParam( $_POST, 'id', 0 ) );
		$tax_rate        = jomresGetParam( $_POST, 'tax_rate', "" );
		$country = jomresGetParam( $_POST, 'guest_country', "" );
		$jomres_countries = jomres_singleton_abstract::getInstance( 'jomres_countries' );
		foreach ($jomres_countries->countries as $c)
			{
			if ($c['countrycode'] == $country)
				{
				$country_id = $c['id'];
				}
			}
		$region_id    = jomresGetParam( $_POST, 'region', 0 );
		
		if ($id == 0)
			{
			$query = "INSERT INTO #__jomres_tax_rules SET `tax_rate_id`='".(int)$tax_rate."',`country_id`='".(int)$country_id."',`region_id`='".(int)$region_id."'";
			doInsertSql( $query );
			}
		else
			{
			$query = "UPDATE #__jomres_tax_rules SET `tax_rate_id`='".(int)$tax_rate."',`country_id`='".(int)$country_id."',`region_id`='".(int)$region_id."' WHERE id=".(int)$id;
			doInsertSql( $query );
			}
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();

		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=list_tax_rules" ), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>