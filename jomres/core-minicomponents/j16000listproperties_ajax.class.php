<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listproperties_ajax
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
		
		$ePointFilepath=get_showtime('ePointFilepath');
		$lang=get_showtime('lang');
		
		$published = (int)jomresGetParam($_GET,'published','2');
		$approved = (int)jomresGetParam($_GET,'approved','2');
		$ptype_id = (int)jomresGetParam($_GET,'ptype','0');
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$rows = array ();
		
		//set the table coulmns, in the exact order in which they`re displayed in the table
		$aColumns = array( 'propertys_uid','propertys_uid','property_name','property_street','property_town','property_region','property_postcode','property_country','property_tel','property_fax','property_email','stars','superior','lat','long','approved','last_changed','crate_id');
		
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
				$sWhere .= "`".$aColumns[$i]."` LIKE '%".jomresGetParam( $_GET, 'sSearch', '' )."%' OR ";
				}
			$sWhere .= "`customtext` LIKE '%".jomresGetParam( $_GET, 'sSearch', '' )."%' ";
			$sWhere .= ')';
			}
		
		/*
		 * Where clause
		 */
		$clause = "WHERE a.propertys_uid != 0 ";
		
		//published status
		if ($published == 1)
			$clause .= "AND a.published = '1' ";
		elseif ($published == 0)
			$clause .= "AND a.published = '0' ";
		
		//approved status
		if ($approved == 1)
			$clause .= "AND a.approved = '1' ";
		elseif ($approved == 0)
			$clause .= "AND a.approved = '0' ";
		
		//property type
		if ($ptype_id > 0)
			$clause .= "AND a.ptype_id = '".$ptype_id."' ";

		/*
		 * Build and execute the query
		 */

		$query = "SET SQL_BIG_SELECTS=1";
		doInsertSql($query);
		
		$query = "SELECT SQL_CALC_FOUND_ROWS 
						a.propertys_uid, 
						a.property_street, 
						a.property_town, 
						a.property_region, 
						a.property_postcode, 
						a.property_country, 
						a.property_tel, 
						a.property_fax, 
						a.property_email, 
						a.stars, 
						a.superior,
						a.lat, 
						a.long, 
						a.published, 
						a.approved,
						a.last_changed,
						(CASE WHEN (a.propertys_uid = b.property_uid 
									AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_NAME' 
									AND b.language = '".$lang."') 
							THEN b.customtext 
							ELSE a.property_name 
						END) AS property_name,
						c.crate_id,
						d.title
					FROM #__jomres_propertys a 
						LEFT JOIN #__jomres_custom_text b ON (a.propertys_uid = b.property_uid 
																AND b.constant = '_JOMRES_CUSTOMTEXT_PROPERTY_NAME' 
																AND b.language = '".$lang."') 
						LEFT JOIN #__jomresportal_properties_crates_xref c ON a.propertys_uid = c.property_id 
						LEFT JOIN #__jomresportal_c_rates d ON c.crate_id = d.id " 
					. $clause 
					. ' ' . $sWhere 
					. ' ' . $sOrder 
					. ' ' . $sLimit;
		$jomresPropertyList = doSelectSql( $query );
		
		/*
		 * Total number of rows
		 */
		$query = "SELECT FOUND_ROWS()";
		$mp=(int)doSelectSql( $query,1 );
		if ( $mp == 0 ) 
			{
			$output = array(
				"sEcho" => intval($_GET['sEcho']),
				"iTotalRecords" => 0,
				"iTotalDisplayRecords" => 0,
				"aaData" => array()
				);
			echo json_encode( $output );
			exit;
			}
		
		/*
		 * Start building the output array. The columns data should be built in the exact order in which they`ll be displayed in the table.
		 */
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
			"iTotalRecords" => $mp,
			"iTotalDisplayRecords" => $mp,
			"aaData" => array()
		);
		
		jr_import('jrportal_commissions');
		$jrportal_commissions = new jrportal_commissions();
		$jrportal_commissions->getAllCrates();
		
		foreach ( $jomresPropertyList as $p )
			{
			$r = array ();
			
			//properties toolbar
			if (!using_bootstrap())
				{
				$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
				$jrtb = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem( 'preview', jomresURL( JOMRES_SITEPAGE_URL_NOSEF . '&task=dashboard'  . '&thisProperty=' . $p->propertys_uid ), jr_gettext( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', false ) );
				$r[] = $jrtb .= $jrtbar->endTable();
				}
			else 
				{
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();

				$url = jomresURL( JOMRES_SITEPAGE_URL_NOSEF . "&task=dashboard&thisProperty=" . $p->propertys_uid );
				$toolbar->addItem( 'fa fa-tachometer', 'btn btn-info', '', $url, jr_gettext( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', false ), false, 'target="_blank"' );
				$toolbar->addSecondaryItem( 'fa fa-tachometer', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=view_property_reviews&property_uid=' . $p->propertys_uid ), jr_gettext( '_JOMRES_REVIEWS', '_JOMRES_REVIEWS', false ) );
				
				$r[]=$toolbar->getToolbar();
				}
			//end properties toolbar
			
			$r[] = $p->propertys_uid;
			$r[] = jomres_decode($p->property_name);			
			$r[] = jomres_decode( $p->property_street );
			$r[] = jomres_decode( $p->property_town );
			$r[] = jomres_decode( find_region_name( $p->property_region ) );
			$r[] = $p->property_postcode;
			$r[] = $p->property_country;
			$r[] = $p->property_tel;
			$r[] = $p->property_fax;
			$r[] = jomres_decode( $p->property_email );
			
			$stars='';
			for ( $i = 1; $i <= (int)$p->stars; $i++ )
				{
				$stars .= '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/star.png" border="0" alt="star" />';
				}
			$r[] = $stars;
			
			if ((int)$p->superior == 1)
				$r[] = jr_gettext( '_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false );
			else
				$r[] = jr_gettext( '_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false );
			
			$r[] = $p->lat;
			$r[] = $p->long;
			
			//approval dropdown
			$options = array ();
			$options[] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false ) );
			$options[] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false ) );
			$r[] = jomresHTML::selectList( $options, "approved", ' size="1" onchange="setApproval(\''.$p->propertys_uid.'\', this.value );"', 'value', 'text', $p->approved, false );
			
			$r[] = $p->last_changed;

			if ((int)$jrConfig['use_commission'] == 1)
				$r[] = $jrportal_commissions->makeCrateDropdown( $p->crate_id, null, array("property_uid" => $p->propertys_uid) );
			else
				$r[] = $p->title;
			
			$output['aaData'][] = $r;
			}
		
		/*
		 * Return the json encoded data to populate the table rows
		 */
		echo json_encode( $output );
		exit;
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
