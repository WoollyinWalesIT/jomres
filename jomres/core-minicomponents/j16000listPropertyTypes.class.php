<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listPropertyTypes
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$editIcon												= '<IMG SRC="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/EditItem.png" border="0">';
		$ptypeData												= array ();
		$output													= array ();
		$output[ 'PAGETITLE' ]									= jr_gettext( '_JOMRES_COM_PTYPES_LIST_TITLE', '_JOMRES_COM_PTYPES_LIST_TITLE',false );
		$output[ 'HPTYPE' ]										= jr_gettext( '_JOMRES_COM_PTYPES_PTYPE', '_JOMRES_COM_PTYPES_PTYPE',false );
		$output[ 'HPTYPE_DESC' ]								= jr_gettext( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR',false );
		$output[ 'HPUBLISHED' ]									= jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISHED', '_JOMRES_COM_MR_VRCT_PUBLISHED',false );
		$output[ '_JOMRES_ORDER' ]				 				= jr_gettext( '_JOMRES_ORDER', '_JOMRES_ORDER',false );
		$output[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ]		= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD',false );
		$output[ '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES' ]		= nl2br(jr_gettext( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES',false ));
		

		$query	  = "SELECT `id`,`ptype`,`ptype_desc`,`published`,`order` , `mrp_srp_flag` FROM #__jomres_ptypes ORDER BY `order` ASC";
		$ptypeList = doSelectSql( $query );
		$rowInfo	= "";
		$counter	= 0;
		foreach ( $ptypeList as $ptype )
			{
			$counter++;
			$ptypeData[ 'id' ]			= $ptype->id;
			$ptypeData[ 'ptype' ]		= $ptype->ptype;
			$ptypeData[ 'ptype_desc' ]	= $ptype->ptype_desc;
			$published					= $ptype->published;
			$mrp_srp_flag				= $ptype->mrp_srp_flag;
			
			if ( $published ) 
				$ptypeData[ 'published' ] = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Tick.png';
			else
				$ptypeData[ 'published' ] = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/Cancel.png';


			$r					 = array ();
			
			if ( $mrp_srp_flag == 3)
				$r[ 'MRP_SRP_FLAG' ]	= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_NEITHER', '_JOMRES_PROPERTYTYPE_FLAG_NEITHER',false );
			elseif ( $mrp_srp_flag == 2)
				$r[ 'MRP_SRP_FLAG' ]	= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_BOTH', '_JOMRES_PROPERTYTYPE_FLAG_BOTH',false );
			elseif ( $mrp_srp_flag == 1)
				$r[ 'MRP_SRP_FLAG' ]	= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
				else
					$r[ 'MRP_SRP_FLAG' ]	= jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
					
			$r[ 'COUNTER' ]	= $counter;
			$r[ 'ID' ]		  = $ptypeData[ 'id' ];
			
			$r[ 'EDITURL' ]	= JOMRES_SITEPAGE_URL_ADMIN . "&task=editPropertyType&id=" . $ptypeData[ 'id' ];
			$r[ 'EDITICON' ]  = $editIcon;
			
			$r[ 'PTYPE' ]	  = $ptypeData[ 'ptype' ];
			$r[ 'PTYPEDESC' ] = $ptypeData[ 'ptype_desc' ];

			$r[ 'PUBLISHURL' ]	= JOMRES_SITEPAGE_URL_ADMIN . "&task=publishPropertyType&id=" . $ptypeData[ 'id' ];
			$r[ 'PUBLISHIMAGE' ] = $ptypeData[ 'published' ];
			$r[ 'ORDER' ]		  = $ptype->order;
			
			if (!using_bootstrap())
				{
				$r['EDITLINK'] = '';
				}
			else
				{
				$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );
				$toolbar->newToolbar();
				
				if ((int)$published == 0)
					$toolbar->addItem( 'fa fa-times', 'btn btn-default', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=publishPropertyType' . '&id=' . $ptypeData[ 'id' ] ), jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISH', '_JOMRES_COM_MR_VRCT_PUBLISH', false ) );
				else
					$toolbar->addItem( 'fa fa-check', 'btn btn-success', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=publishPropertyType' . '&id=' . $ptypeData[ 'id' ] ), jr_gettext( '_JOMRES_COM_MR_VRCT_UNPUBLISH', '_JOMRES_COM_MR_VRCT_UNPUBLISH', false ) );

				$toolbar->addSecondaryItem( 'fa fa-pencil-square-o', '', '', jomresURL( JOMRES_SITEPAGE_URL_ADMIN . '&task=editPropertyType&id=' . $ptypeData[ 'id' ] ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
				
				$r['EDITLINK'] = $toolbar->getToolbar();
				}

			$rows[ ] = $r;
			}
		
		$output[ 'COUNTER' ]				= count( $rows );
		$output[ 'TOTALINLISTPLUSONE' ] = count( $rows ) + 1;

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb	= $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$image  = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/AddItem.png" );
		$link	= JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'editPropertyType', $link, jr_gettext( '_JOMRES_COM_MR_NEWTARIFF', '_JOMRES_COM_MR_NEWTARIFF',false ), $submitOnClick = true, $submitTask = "editPropertyType", $image );
		$image = $jrtbar->makeImageValid( "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/WasteBasket.png" );
		$link  = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'deletePropertyType', $link, jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE',false ), $submitOnClick = true, $submitTask = "deletePropertyType", $image );
		$jrtb .= $jrtbar->endTable();

		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl			 = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_ptypes.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();

		}

	function touch_template_language()
		{
		$output = array ();

		$query	  = "SELECT id,ptype FROM #__jomres_ptypes";
		$ptypeList = doSelectSql( $query );
		foreach ( $ptypeList as $ptype )
			{
			$output[ ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTYTYPES' . $ptype->id, $ptype->ptype );
			}

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}