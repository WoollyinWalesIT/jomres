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

class j00016composite_property_details
	{
	function __construct( $componentArgs )
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
		$property_uid = (int) $componentArgs[ 'property_uid' ];
		$mrConfig     = getPropertySpecificSettings( $property_uid );
		if ( !isset( $jrConfig[ 'show_booking_form_in_property_details' ] ) ) 
			$jrConfig[ 'show_booking_form_in_property_details' ] = "1";
		$componentArgs[ 'property_uid' ] = $property_uid;

		$MiniComponents->triggerEvent( '00015', $componentArgs );
		$output = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'property_deets' ][ 0 ];
		if ( $jrConfig[ 'show_booking_form_in_property_details' ] == "0" && $mrConfig[ 'is_real_estate_listing' ] == 0 ) 
			$bookinglink = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'bookinglink' ];
		$slideshowlink = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'slideshowlink' ];
		if ( get_showtime( 'include_room_booking_functionality' ) ) $tariffslink = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'tariffslink' ];
		$gallerylink   = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'gallerylink' ];
		$roomslistlink = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'roomslistlink' ];
		$mappinglink   = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'mappinglink' ];
		$contactuslink = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ][ 'contactuslink' ];

		$componentArgs[ 'viewproperty_data' ] = $MiniComponents->miniComponentData[ '00015' ][ 'viewproperty' ];
		$componentArgs[ 'currrent_output' ]   = $output;
		$MiniComponents->triggerEvent( '00035', $componentArgs );

		if ( $mrConfig[ 'showOnlyAvailabilityCalendar' ] == "1" )
			{
			if ( ( $mrConfig[ 'showAvailabilityCalendar' ] && $mrConfig[ 'singleRoomProperty' ] ) ) showSingleRoomPropAvl( $property_uid );
			elseif ( $mrConfig[ 'showRoomsInPropertyDetails' ] )
				{
				$componentArgs = array ( 'all' => "all", 'property_uid' => $property_uid );
				$MiniComponents->triggerEvent( '00018', $componentArgs );
				}

			return;
			}

		$output[ 'SLIDESHOW' ] = $MiniComponents->miniComponentData[ '01060' ][ 'slideshow' ][ 'slideshow' ];

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 && $mrConfig[ 'visitorscanbookonline' ] == '1' && !isset( $_REQUEST[ 'jr_printable' ] ) && $mrConfig[ 'showAvailabilityCalendar' ] )
			{
			$random_identifier = generateJomresRandomString( 10 );
			$output[ 'ARROW' ] = '<div id="sd" class="select-dates"></div>';

			$inline_calendar = $MiniComponents->specificEvent( '06000', 'ui_availability_calendar', array ( 'property_uid' => $property_uid, 'return_calendar' => "1", 'noshowlegend' => 1 ) );

			$output[ 'INLINE_CALENDAR_ARROW_OPENINGDIV' ] = '<div class="arrival-select" >';
			$output[ 'INLINE_CALENDAR' ]                  = $inline_calendar;
			$output[ 'INLINE_CALENDAR_ARROW_CLOSINGDIV' ] = '</div>';
			}
		else
			{
			$output[ 'ARROW' ]                            = '';
			$output[ 'INLINE_CALENDAR_SCRIPT' ]           = '';
			$output[ 'INLINE_CALENDAR_ARROW_OPENINGDIV' ] = '';
			$output[ 'INLINE_CALENDAR' ]                  = '';
			$output[ 'INLINE_CALENDAR_ARROW_CLOSINGDIV' ] = '';
			}

		$jomres_property_list_prices = jomres_singleton_abstract::getInstance( 'jomres_property_list_prices' );
		$jomres_property_list_prices->gather_lowest_prices_multi(array($property_uid));

		$output['PRICE_PRE_TEXT']	=$jomres_property_list_prices->lowest_prices[$property_uid]['PRE_TEXT'];
		$output['PRICE_PRICE']		=$jomres_property_list_prices->lowest_prices[$property_uid]['PRICE'];
		$output['PRICE_POST_TEXT']	=$jomres_property_list_prices->lowest_prices[$property_uid]['POST_TEXT'];

		$tmpl = new patTemplate();

		if ( !isset( $jrConfig[ 'property_details_in_tabs' ] ) ) 
			$jrConfig[ 'property_details_in_tabs' ] = "1";
		
		if ( $jrConfig[ 'property_details_in_tabs' ] == "0" && !isset( $_REQUEST[ 'jr_printable' ]) )
			{
			$standalone_elements = array (
				'TABCONTENT_01_MAIN_DETAILS',
				'TABCONTENT_01_MORE_INFO',
				'TABCONTENT_02_BOOKINGFORM',
				'TABCONTENT_02_MAP',
				'TABCONTENT_03_REVIEWS',
				'TABCONTENT_06_EXTRAS'
				);
			
			}
		
		if ( count( $MiniComponents->miniComponentData[ '00035' ] ) > 0 )
			{
			$tab_titles   = array ();
			$tab_contents = array ();
			$tab_active   = false;
			foreach ( $MiniComponents->miniComponentData[ '00035' ] as $key => $tabs )
				{
				if (!in_array( strtoupper($key) , $standalone_elements ) )
					{
					if ( $tabs[ 'TAB_ANCHOR' ] != "" && $tabs[ 'TAB_TITLE' ] != "" && $tabs[ 'TAB_CONTENT' ] != "" )
						{
						if ( !$tab_active )
							{
							$tab_class  = "active";
							$tab_active = true;
							}
						else
						$tab_class = "";
						$content                                       = $tabs[ 'TAB_CONTENT' ];
						$title                                         = $tabs[ 'TAB_TITLE' ];
						$tab_id                                        = $tabs[ 'TAB_ID' ];
						$tab_titles[ ]                                 = array ( "TAB_ANCHOR" => $tabs[ 'TAB_ANCHOR' ], "TAB_TITLE" => $title, "ACTIVE" => $tab_class, "TAB_ID" => $tab_id );
						$tab_contents[ ]                               = array ( "TAB_CONTENT" => $content, "TAB_TITLE" => $title, "TAB_ANCHOR" => $tabs[ 'TAB_ANCHOR' ], "ACTIVE" => $tab_class );
						$output[ strtoupper( $key . "_tabtitle" ) ]    = $title;
						$output[ strtoupper( $key . "_tab_content" ) ] = $content;
						}
					}
				else
					{
					$output [ strtoupper( $key )."_CONTENT" ] = $tabs[ 'TAB_CONTENT' ];
					$output [ strtoupper( $key )."_TITLE" ] = $tabs[ 'TAB_TITLE' ];
					$output [ strtoupper( $key )."_ANCHOR" ] = $tabs[ 'TAB_ANCHOR' ];
					}
				}
			$tmpl->addRows( 'tabs_titles', $tab_titles );
			$tmpl->addRows( 'tabs_content', $tab_contents );
			}

		$pageoutput[ ] = $output;
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'bookinglink', $bookinglink );
		$tmpl->addRows( 'slideshowlink', $slideshowlink );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 ) $tmpl->addRows( 'tariffslink', $tariffslink );
		$tmpl->addRows( 'gallerylink', $gallerylink );
		if ( $mrConfig[ 'singleRoomProperty' ] == "0" ) $tmpl->addRows( 'roomslistlink', $roomslistlink );
		$tmpl->addRows( 'mappinglink', $mappinglink );
		$tmpl->addRows( 'contactuslink', $contactuslink );

		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );

		if ( isset( $_REQUEST[ 'jr_printable' ] ) ) 
			$tmpl->readTemplatesFromInput( 'composite_property_details_printable.html' );
		else
			{


			if ( $jrConfig[ 'property_details_in_tabs' ] == "1" ) 
				$tmpl->readTemplatesFromInput( 'composite_property_details.html' );
			else
				$tmpl->readTemplatesFromInput( 'composite_property_details_notabs.html' );
			}

		$tmpl->displayParsedTemplate();
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 */
	function getRetVals()
		{
		return null;
		}
	}
