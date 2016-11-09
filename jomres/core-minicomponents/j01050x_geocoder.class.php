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

class j01050x_geocoder
	{
	function __construct( $componentArgs = null )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig   = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig     = $siteConfig->get();
		
		if (isset($componentArgs[ 'property_uid' ]))
			$property_uid = (int) $componentArgs[ 'property_uid' ];
		else
			$property_uid = getDefaultProperty();
		
		$editing = false;
		if (isset($componentArgs[ 'editing_map' ]))
			$editing = $componentArgs[ 'editing_map' ];

		add_gmaps_source();

		$output     = array ();
		$pageoutput = array ();

		$output['MAP_STYLE'] = file_get_contents ( JOMRESCONFIG_ABSOLUTE_PATH .  JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS .'map_styles' . JRDS . $jrConfig['map_style'].'.style' );
		
		$output[ 'DISABLE_UI' ] = '';
		if ( isset( $componentArgs[ 'disable_ui' ] ) ) $output[ 'DISABLE_UI' ] = 'disableDefaultUI: true,';

		$output[ 'LATLONG_DESC' ] = jr_gettext( '_JOMRES_LATLONG_DESC', '_JOMRES_LATLONG_DESC', false );
		
		if (isset($_REQUEST['map-identifier']))
			$output[ 'RANDOM_IDENTIFIER' ] = filter_var($_REQUEST['map_identifier'],FILTER_SANITIZE_SPECIAL_CHARS);
		else
			$output[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString( 10 );
		
		$output[ 'MAP_WIDTH' ]			= 300;
		$output[ 'MAP_HEIGHT' ]			= 300;
		$output[ 'MARKER_PATH' ]		= '';
		if ( isset( $componentArgs[ 'width' ] ) )
			{
			$output[ 'MAP_WIDTH' ]  = (int) $componentArgs[ 'width' ];
			$output[ 'MAP_HEIGHT' ] = (int) $componentArgs[ 'height' ];
			}

		if ( $property_uid == 999999999 )
			{
			$output[ 'LAT' ]  = $jrConfig[ 'default_lat' ];
			$output[ 'LONG' ] = $jrConfig[ 'default_long' ];
			}
		else
			{
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$current_property_details->gather_data($property_uid);

			$jomres_property_types = jomres_singleton_abstract::getInstance( 'jomres_property_types' );
			$jomres_property_types->get_property_type($current_property_details->ptype_id);
			
			if (isset($jomres_property_types->property_type['marker_image']))
				$output[ 'marker_image'] = $jomres_property_types->property_type['marker_image'];

			
			$propertyData[ 'lat' ]  = $current_property_details->multi_query_result[ $property_uid ][ 'lat' ];
			$propertyData[ 'long' ] = $current_property_details->multi_query_result[ $property_uid ][ 'long' ];
			
			if ( $propertyData[ 'lat' ] != null )
				{
				$output[ 'LAT' ]  = $propertyData[ 'lat' ];
				$output[ 'LONG' ] = $propertyData[ 'long' ];
				}
			elseif ( $editing )
				{
				$output[ 'LAT' ]  = $jrConfig[ 'default_lat' ];
				$output[ 'LONG' ] = $jrConfig[ 'default_long' ];
				}
			else return; // If we're editing it's ok to use the default data. If we're not, it isn't and it's best to simply not show the map at all
			}

		if ( !isset( $jrConfig[ 'gmap_layer_weather' ] ) )
			{
			$jrConfig[ 'gmap_layer_transit' ]          = "0";
			}

			
		if ( $jrConfig[ 'gmap_layer_transit' ] == "1" ) $output[ 'TRANSIT_LAYER' ] = '
				var transitLayer = new google.maps.TransitLayer();
				transitLayer.setMap(map);
			';

		if ( $jrConfig[ 'gmap_pois' ] == "0" ) $output[ 'SUPPRESS_POIS' ] = '
			,
		styles:[{
			featureType:"poi",
			elementType:"labels",
			stylers:[{
				visibility:"off"
				}]
			}]
			';

		if ( $editing )
			{
			$output[ 'DRAGABLE' ]      = ',
		draggable: true,';
			$output[ 'DRAG_LISTENER' ] = '
		
		var postcodeInput = document.getElementById(\'property_postcode\');
		var townInput = document.getElementById(\'property_street\');
		var streetInput = document.getElementById(\'property_town\');

		
		google.maps.event.addDomListener(postcodeInput, \'change\', function() {
			var address = build_address();
			if (address != "") {
				codeAddress(address);
				}
			});
		google.maps.event.addDomListener(townInput, \'change\', function() {
			var address = build_address();
			if (address != "") {
				codeAddress(address);
				}
			});
		google.maps.event.addDomListener(streetInput, \'change\', function() {
			var address = build_address();
			if (address != "") {
				codeAddress(address);
				}
			});
			
			updateMarkerPosition(latLng);
			google.maps.event.addListener(marker, \'drag\', function() {
			updateMarkerPosition(marker.getPosition());
			});
			google.maps.event.addListener(marker, \'dragend\', function() {
			map.setCenter(marker.getPosition());
			});
				';

			if ( !defined( 'UPDATE_POSITION_FUNCTION_EXISTS' ) )
				{
				define( 'UPDATE_POSITION_FUNCTION_EXISTS', 1 );
				$output[ 'UPDATEMARKERPOSITION' ] = "function updateMarkerPosition(latLng) {
		jomresJquery('#lat').val(latLng.lat().toFixed(7));
		jomresJquery('#lng').val(latLng.lng(5).toFixed(7));
					}";
				}
			}

		// IE was playing silly boys and wouldn't load without using (window).load, however if we use that then the map will not run in module popups, so we need to change the loading trigger depending on the "task".
		$output['LOAD_TRIGGER'] = 'jomresJquery(window).load(function(){';
		if ($_REQUEST['task'] == 'module_popup' || $_REQUEST['task'] == 'ajax_list_properties' || $_REQUEST['task'] == 'ajax_search_filter')
			{
			$output['LOAD_TRIGGER'] = 'jomresJquery(document).ready(function(){';
			}
		
		set_showtime( "current_map_identifier", $output[ 'RANDOM_IDENTIFIER' ] );

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'geocoder_latlong.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );

		$this->retVals = $tmpl->getParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
