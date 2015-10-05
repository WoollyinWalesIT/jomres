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

class j06000show_property_room_types
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}

		if ( isset($componentArgs[ 'property_uid' ]) )
			$property_uid = $componentArgs[ 'property_uid' ];
		else
			{
			if( isset($_REQUEST['property_uid']) )
				$property_uid = (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
			else
				$property_uid = get_showtime('property_uid');
			}
		
		if ( $property_uid == 0 ) 
			return;
		
		$output_now = true;
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = (bool)$componentArgs[ 'output_now' ];

		$mrConfig = getPropertySpecificSettings( $property_uid );
		
		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->gather_data( $property_uid );
		
		$output = array();

		if ( count($basic_property_details->room_types) > 0 )
			{
			$room_types = array();
			$output[ '_JOMRES_SEARCH_RTYPES' ] = jr_gettext( '_JOMRES_SEARCH_RTYPES', _JOMRES_SEARCH_RTYPES, false );
			
			foreach ( $basic_property_details->room_types as $key=>$val )
				{
				$room_type[ 'ROOM_TYPE' ] = jomres_makeTooltip( $basic_property_details->this_property_room_classes,  $basic_property_details->this_property_room_classes[$key]['abbv'],  $basic_property_details->this_property_room_classes[$key]['desc'], JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/'. $basic_property_details->this_property_room_classes[$key]['image'], "", "room_type", array () );
					$room_types[] = $room_type;
				}
				
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->addRows( 'room_types',$room_types);
			$tmpl->readTemplatesFromInput( 'show_property_room_types.html' );
			$features_template = $tmpl->getParsedTemplate();
			if ( $output_now )
				echo $features_template;
			else
				$this->retVals = $features_template;
			}
		else
			$output[ '_JOMRES_SEARCH_RTYPES' ] = '';
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
