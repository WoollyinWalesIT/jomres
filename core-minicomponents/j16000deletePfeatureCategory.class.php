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

class j16000deletePfeatureCategory
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

		$id = jomresGetParam( $_REQUEST, 'id', 0 );
		
		if ( $id > 0 )
			{
			// First we need to check that the category isn't used for any property feature
			$query = "SELECT cat_id FROM #__jomres_hotel_features WHERE `cat_id` = ".(int)$id;
			$result = doSelectSql( $query );
			
			if ( count($result) < 1 )
				{
				$query = "DELETE FROM #__jomres_hotel_features_categories WHERE id = " . (int) $id;
				doInsertSql( $query, '' );
				
				$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
				$c->eraseAll();
		
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories" ), "Category deleted" );
				}
			else
				jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories" ), "Category is still assigned to some property features" );
			}
		else
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories" ), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}