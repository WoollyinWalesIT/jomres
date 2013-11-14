<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002listyourproperties_ajax
	{
	function j06002listyourproperties_ajax()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		
		$ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$rows = array ();
		
		//set the table coulmns, in the exact orcer in which they`re displayed in the table
		//in this case, the address is displayed in one column, so we can add town, region, country after the street column. They are not used as columns in the table, but will be useful later in case of filtering.
		$aColumns = array( 'published','property_name','property_street','property_town','property_region','property_country','property_postcode','property_tel','property_email');
		
		/*
		 * Paging
		 */
		$sLimit = "";
		if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
			{
			$sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".intval( $_GET['iDisplayLength'] );
			}
		
		/*
		 * Ordering
		 */
		$sOrder = "";
		if ( isset( $_GET['iSortCol_0'] ) )
			{
			$sOrder = "ORDER BY  ";
			for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
				{
				if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
					{
					$sOrder .= "`".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."` ".
						($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
					}
				}
			
			$sOrder = substr_replace( $sOrder, "", -2 );
			if ( $sOrder == "ORDER BY" )
				{
				$sOrder = "";
				}
			}
		
		/* 
		 * Filtering
		 * NOTE this does not match the built-in DataTables filtering which does it
		 * word by word on any field. It's possible to do here, but concerned about efficiency
		 * on very large tables, and MySQL's regex functionality is very limited
		 */
		$sWhere = "";
		if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
			{
			$sWhere = "AND (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
				{
				$sWhere .= "`".$aColumns[$i]."` LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
				}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
			}
		
		/*
		 * Property uids clause
		 */
		if ( $thisJRUser->superPropertyManager && $thisJRUser->superPropertyManagersAreGods )
			{
			$mp = array ();
			$mp = get_showtime('all_properties_in_system');
			$clause = "WHERE ";
			$clause .= genericOr( $mp, 'propertys_uid' );
			}
		else
			{
			$query              = "SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '" . $thisJRUser->id . "'";
			$managersProperties = doSelectSql( $query );
			$mp                 = array ();
			foreach ( $managersProperties as $p )
				{
				$mp[] = (int) $p->property_uid;
				}
			$clause = "WHERE ";
			$clause .= genericOr( $mp, 'propertys_uid' );
			}
		
		if ( count( $mp ) == 0 ) 
			return;
		
		/*
		 * Build and execute the query
		 */
		$query = "SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,property_tel,property_email,published,apikey FROM #__jomres_propertys " . $clause . ' ' . $sWhere . " " . $sOrder . ' ' . $sLimit;
		$jomresPropertyList = doSelectSql( $query );
		
		$current_page_property_uids=array();
		foreach ( $jomresPropertyList as $property )
			{
			$current_page_property_uids[]=$property->propertys_uid;
			}

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->get_property_name_multi($current_page_property_uids);
		
		/*
		 * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
		 */
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
			"iTotalRecords" => count($mp),
			"iTotalDisplayRecords" => count($mp),
			"aaData" => array()
		);
		foreach ( $jomresPropertyList as $p )
			{
			$r         = array ();
			$published = $p->published;
			$jrtbar    = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb      = $jrtbar->startTable();
			if ( !$published ) 
				$jrtb .= $jrtbar->toolbarItem( 'unpublish', jomresURL( JOMRES_SITEPAGE_URL . '&task=publishProperty' . '&property_uid=' . $p->propertys_uid ), jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISH', _JOMRES_COM_MR_VRCT_PUBLISH, false ) );
			else
				$jrtb .= $jrtbar->toolbarItem( 'publish', jomresURL( JOMRES_SITEPAGE_URL . '&task=publishProperty'  . '&property_uid=' . $p->propertys_uid ), jr_gettext( '_JOMRES_COM_MR_VRCT_UNPUBLISH', _JOMRES_COM_MR_VRCT_UNPUBLISH, false ) );

			$r[]     = $jrtb .= $jrtbar->endTable();
			$r[]     = '<a href="'.jomresURL( JOMRES_SITEPAGE_URL . '&thisProperty=' . $p->propertys_uid ).'">'.$current_property_details->property_names[$p->propertys_uid].'</a>';
			$r[] = jomres_decode( $p->property_street );
			$r[] = jomres_decode( $p->property_town );
			$r[] = jomres_decode( find_region_name( $p->property_region ) );
			$r[] = jomres_decode( $p->property_country );
			$r[] = $p->property_postcode;
			$r[] = $p->property_tel;
			$r[] = jomres_decode( $p->property_email );
			
			$output['aaData'][]                = $r;
			}
		
		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode( $output );
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>