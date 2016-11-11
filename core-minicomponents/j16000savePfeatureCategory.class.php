<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000savePfeatureCategory
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

		$id      = jomresGetParam( $_POST, 'id', 0 );
		$title   = jomresGetParam( $_POST, 'title', "" );
		
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$c->eraseAll();
		
		if ($title != "")
			{
			if ( $id == 0 )
				{
				$query = "INSERT INTO #__jomres_hotel_features_categories (`title`) VALUES ('$title') ";
				if ( doInsertSql( $query, '' ) ) 
					jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories" ), '');
				}
			else
				{
				$query = "UPDATE #__jomres_hotel_features_categories SET `title`='$title' WHERE id = " . (int)$id;
				if ( doInsertSql( $query, '' ) ) 
					jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories"), '' );
				}
			}
		else
			{
			jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL_ADMIN . "&task=editPfeatureCategory"), 'Please enter a category title' );
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}