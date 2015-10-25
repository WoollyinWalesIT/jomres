<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002edit_srp_room_type
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
		
		// In SRPs you need one, hidden, room. It needs to be invisible because it's not intuitive to villa/cottage etc owners that you need at least one room within the system to maintain availability. To remove confusion therefore we make it as invisible as possible.
		// Nevertheless, this room will need to have a room type.
		// We need to set the room type so that searches for, for example 1 Bedroom villas, will work, and that tariffs are associated with the correct room/resource type. Normally this is set when a property is created, however if you want to change the property from an mrp to an srp ( let's say you're using the Single Property Quickstart which is an MRP ) then we'll need this script to find the relevant room types and output them to a template so that the user can choose the correct resource type.
		// Once they've done that, then they'll be able to choose a room type. We will need to add a check to the sanity checks class so that the user is redirected to this script every time they visit Jomres if there are no rooms and the property is an SRP
		
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( $thisJRUser->id == 0 ) 
			return false;
		
		$property_uid = (int) getDefaultProperty();
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data( $property_uid );

		$query = "SELECT roomtype_id FROM #__jomres_roomtypes_propertytypes_xref WHERE `propertytype_id` = ".(int)$current_property_details->ptype_id;
		$property_type_room_types= doSelectSql($query);
		if (count($property_type_room_types) > 0 )
			{
			$all_room_types_for_this_property_type = array();
			foreach ($property_type_room_types as $room_type)
				{
				$classAbbv = $current_property_details->classAbbvs[$room_type->roomtype_id]['abbv'];
				$all_room_types_for_this_property_type[] = array ( "id"=>$room_type->roomtype_id , "name" => $classAbbv);
				}
			}
		else
			{
			$type_id = $current_property_details->ptype_id;
			$property_type = $current_property_details->all_property_type_titles[$type_id];
			throw new Exception("This property type does not have any room/resource types for SRPs. To fix this go to Administrator -> Jomres -> Resource types. Edit the relevant Resource/Business type for ".$property_type." and ensure that the SRP only flag is set.");
			}
		
		$max_guests = 8;
		$room_classes_uid = 0;
		if ( count ($current_property_details->room_types) > 0)
			{
			$query = "SELECT max_people,room_classes_uid FROM #__jomres_rooms WHERE propertys_uid = ".$property_uid." LIMIT 1";
			$result = doSelectSql($query , 2 );
			$max_guests = $result['max_people'];
			$room_classes_uid =  $result['room_classes_uid'];
			
			}

		$resourceOptions = array();
		foreach ($all_room_types_for_this_property_type as $resource)
			{
			$resourceOptions[] = jomresHTML::makeOption( $resource["id"],$resource["name"]);
			}
		$resourceDropdown= jomresHTML::selectList($resourceOptions, 'resource_type', '', 'value', 'text', $room_classes_uid , false );
		
		$output = array();
		$output['PROPERTY_UID'] = $property_uid;
		$output['RESOURCEDROPDOWN'] = $resourceDropdown;
		$output['_JOMRES_SRP_RESOURCE_TYPE'] = jr_gettext("_JOMRES_SRP_RESOURCE_TYPE",_JOMRES_SRP_RESOURCE_TYPE,false,false);
		$output['_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION'] = jr_gettext("_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION",_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION,false,false);
		$output['HMAXPEOPLE']=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE',_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE,false);
		$output['MAXPEOPLE_DROPDOWN']=jomresHTML::integerSelectList( 1,100,1, 'maxpeople','', $max_guests );

		
		$jrtbar =jomres_getSingleton('jomres_toolbar');
		$jrtb  = $jrtbar->startTable();
		// $jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "&task=editBooking&contract_uid=" . $contract_uid ), '' ); // Left commented out as the user REALLY shouldn't cancel until they've set the room/resource type
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_srp_room_type' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'edit_srp_resource_type.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->displayParsedTemplate();
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
