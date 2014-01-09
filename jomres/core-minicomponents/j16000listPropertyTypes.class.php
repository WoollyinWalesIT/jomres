<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000listPropertyTypes
	{
	function j16000listPropertyTypes()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$editIcon                              = '<IMG SRC="' . get_showtime( 'live_site' ) . '/jomres/images/jomresimages/small/EditItem.png" border="0">';
		$ptypeData                             = array ();
		$output                                = array ();
		$output[ 'PAGETITLE' ]                 = jr_gettext( '_JOMRES_COM_PTYPES_LIST_TITLE', _JOMRES_COM_PTYPES_LIST_TITLE,false );
		$output[ 'HPTYPE' ]                    = jr_gettext( '_JOMRES_COM_PTYPES_PTYPE', _JOMRES_COM_PTYPES_PTYPE,false );
		$output[ 'HPTYPE_DESC' ]               = jr_gettext( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', _JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR,false );
		$output[ 'HPUBLISHED' ]                = jr_gettext( '_JOMRES_COM_MR_VRCT_PUBLISHED', _JOMRES_COM_MR_VRCT_PUBLISHED,false );
		$output[ '_JOMRES_ORDER' ]             = jr_gettext( '_JOMRES_ORDER', _JOMRES_ORDER,false );
		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$query     = "SELECT `id`,`ptype`,`ptype_desc`,`published`,`order` FROM #__jomres_ptypes ORDER BY `order` ASC";
		$ptypeList = doSelectSql( $query );
		$rowInfo   = "";
		$counter   = 0;
		foreach ( $ptypeList as $ptype )
			{
			$counter++;
			$ptypeData[ 'id' ]         = $ptype->id;
			$ptypeData[ 'ptype' ]      = $ptype->ptype;
			$ptypeData[ 'ptype_desc' ] = $ptype->ptype_desc;
			$published                 = $ptype->published;
			if ( $published ) $ptypeData[ 'published' ] = get_showtime( 'live_site' ) . '/jomres/images/jomresimages/small/Tick.png';
			else
			$ptypeData[ 'published' ] = get_showtime( 'live_site' ) . '/jomres/images/jomresimages/small/Cancel.png';


			$r                = array ();
			$r[ 'COUNTER' ]   = $counter;
			$r[ 'ID' ]        = $ptypeData[ 'id' ];
			$r[ 'EDITURL' ]   = JOMRES_SITEPAGE_URL_ADMIN . "&task=editPropertyType&id=" . $ptypeData[ 'id' ];
			$r[ 'EDITICON' ]  = $editIcon;
			$r[ 'PTYPE' ]     = $ptypeData[ 'ptype' ];
			$r[ 'PTYPEDESC' ] = $ptypeData[ 'ptype_desc' ];

			$r[ 'PUBLISHURL' ]   = JOMRES_SITEPAGE_URL_ADMIN . "&task=publishPropertyType&id=" . $ptypeData[ 'id' ];
			$r[ 'PUBLISHIMAGE' ] = $ptypeData[ 'published' ];
			$r[ 'ORDER' ]        = $ptype->order;

			$rows[ ] = $r;
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN, '' );
		$image  = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/AddItem.png" );
		$link   = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'editPropertyType', $link, jr_gettext( '_JOMRES_COM_MR_NEWTARIFF', _JOMRES_COM_MR_NEWTARIFF,false ), $submitOnClick = true, $submitTask = "editPropertyType", $image );
		$image = $jrtbar->makeImageValid( "/jomres/images/jomresimages/small/WasteBasket.png" );
		$link  = JOMRES_SITEPAGE_URL_ADMIN;
		$jrtb .= $jrtbar->customToolbarItem( 'deletePropertyType', $link, jr_gettext( '_JOMRES_COM_MR_ROOM_DELETE', _JOMRES_COM_MR_ROOM_DELETE,false ), $submitOnClick = true, $submitTask = "deletePropertyType", $image );
		$jrtb .= $jrtbar->endTable();

		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'list_ptypes.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();

		}

	function touch_template_language()
		{
		$output = array ();

		$query     = "SELECT id,ptype FROM #__jomres_ptypes";
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