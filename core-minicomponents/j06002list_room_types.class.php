<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06002list_room_types
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
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if ( $jrConfig[ 'frontend_room_type_editing_allowed' ] == 0 ) {
			return;
		}
		
		$property_uid = getDefaultProperty();
		
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();

		$output = array();
		$rows = array();

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', false);

		$output[ 'HLINKTEXT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', false);
		$output[ 'HRTTITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', false);
		$output[ '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD' ] = jr_gettext('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', false);

		if (!empty($jomres_room_types->property_specific_room_types[$property_uid])) {
			foreach ($jomres_room_types->property_specific_room_types[$property_uid] as $r) {
				$r[ 'RTTITLE' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$r['room_classes_uid'], stripslashes($r['room_class_abbv']), true ) ;
				$r[ 'RTDESCRIPTION' ] = $r['room_class_full_desc'];
				$r[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH.'rmtypes/'.$r['image'];


				if (!using_bootstrap()) {
					$editIcon = '<img src="'.JOMRES_IMAGES_RELPATH.'jomresimages/small/EditItem.png" border="0" />';
					$r[ 'EDITLINK' ] = '<a href="'.JOMRES_SITEPAGE_URL.'&task=edit_room_type&room_classes_uid='.$r['room_classes_uid'].'">'.$editIcon.'</a>';
				} else {
					$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
					$toolbar->newToolbar();
					$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_room_type&room_classes_uid='.$r['room_classes_uid']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
					$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=delete_room_type&room_classes_uid='.$r['room_classes_uid']), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));
					
					$r[ 'EDITLINK' ] = $toolbar->getToolbar();
				}

				$rows[] = $r;
			}
		}

		if (!using_bootstrap()) {
			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$text = jr_gettext('_JOMRES_PROPERTY_ROOM_TYPES_NEW', '_JOMRES_PROPERTY_ROOM_TYPES_NEW', false, true);
			$link = JOMRES_SITEPAGE_URL.'&task=edit_room_type';
			$targetTask = 'edit_room_type';
			$image = JOMRES_IMAGES_RELPATH.'jomresimages/'.$jrtbar->imageSize.'/guestAdd.png';
			$jrtb .= $jrtbar->customToolbarItem($targetTask, $link, $text, $submitOnClick = false, $submitTask = '', $image);
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		} else {
			$output[ 'NEW_ROOM_TYPE_URL' ] = jomresUrl(JOMRES_SITEPAGE_URL.'&task=edit_room_type');
			$output[ '_JOMRES_PROPERTY_ROOM_TYPES_NEW' ] = jr_gettext('_JOMRES_PROPERTY_ROOM_TYPES_NEW', '_JOMRES_PROPERTY_ROOM_TYPES_NEW', false, true);
		}

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('list_room_types.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
