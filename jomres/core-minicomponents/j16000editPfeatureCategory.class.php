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

class j16000editPfeatureCategory
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

		$output[ 'ID' ]     = $id;
		$output[ 'TITLE' ] 	= '';
					
		if ( $id > 0 )
			{
			$query = "SELECT `id`, `title` FROM #__jomres_hotel_features_categories WHERE `id` = ".(int)$id;
			$result = doSelectSql( $query );
			
			if (count($result)>0)
				{
				foreach ( $result as $r )
					{
					$output[ 'ID' ]     = stripslashes( $r->id );
					$output[ 'TITLE' ] 	= stripslashes( $r->title );
					}
				}
			}

		$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT',false );
		$output[ 'HTITLE' ] = jr_gettext( '_JRPORTAL_CRATE_TITLE', '_JRPORTAL_CRATE_TITLE',false );

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/Save.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=listPfeaturesCategories", '' );
		$jrtb .= $jrtbar->customToolbarItem( 'savePfeatureCategory', $link, jr_gettext( '_JOMRES_COM_MR_SAVE','_JOMRES_COM_MR_SAVE',false ), $submitOnClick = true, $submitTask = "savePfeatureCategory", $image );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput    = array ();
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_property_feature_category.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}