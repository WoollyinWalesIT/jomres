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

class j00012pathway
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
		if ( !this_cms_is_joomla() )
			return;
		
		$numberOfPropertiesInSystem = get_showtime( 'numberOfPropertiesInSystem' );
		
		if ( _JOMRES_DETECTED_CMS == "joomla15" ) // J1.5 pathways are not supported
			return;
		if ( AJAXCALL ) 
			return;

		// We can't show the pathway if editing mode is enabled,
		$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		if ( !isset( $tmpBookingHandler->user_settings[ 'editing_on' ] ) ) $tmpBookingHandler->user_settings[ 'editing_on' ] = false;

		if ( $tmpBookingHandler->user_settings[ 'editing_on' ] ) return;

		$jomresPathway = jomres_singleton_abstract::getInstance( 'jomres_pathway' );
		$siteConfig    = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig      = $siteConfig->get();

		$popup = intval( jomresGetParam( $_REQUEST, 'popup', 0 ) );
		$thisJRUser     = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( $popup == 0 && !JOMRES_SINGLEPROPERTY && $numberOfPropertiesInSystem > 1 )
			{
			$pathwayArray = array ();
			$task = get_showtime( 'task' );
			
			$property_uid = $componentArgs[ 'property_uid' ];
			if ( $thisJRUser->userIsManager ) 
				{
				$property_uid = (int) $thisJRUser->defaultproperty;
				}
			
			if ($property_uid > 0)
				{
				$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
				$current_property_details->gather_data( $property_uid );
				$property_type = $current_property_details->property_type_title;

				$tasks = array ();

				$tasks[ 'property_type' ] = array ( 'text' => $property_type, 'url' => jomresURL( JOMRES_SITEPAGE_URL . "&amp;task=search&amp;ptype=" . $current_property_details->ptype_id ) );
				$tasks[ 'country' ]      = array ( 'text' => $current_property_details->property_country, 'url' => JOMRES_SITEPAGE_URL . '&send=Search&calledByModule=mod_jomsearch_m0&country=' . $current_property_details->property_country_code );
				$tasks[ 'region' ]       = array ( 'text' => $current_property_details->property_region, 'url' => JOMRES_SITEPAGE_URL . "&send=Search&calledByModule=mod_jomsearch_m0&region=" . $current_property_details->property_region );
				$tasks[ 'town' ]         = array ( 'text' => $current_property_details->property_town, 'url' => JOMRES_SITEPAGE_URL . "&send=Search&calledByModule=mod_jomsearch_m0&town=" . $current_property_details->property_town );
				}
			
			$tasks[ 'viewproperty' ] = array ( 'text' => str_replace( "&#39;" , "'" ,getPropertyName( $property_uid )), 'url' => JOMRES_SITEPAGE_URL . '&task=viewproperty&amp;property_uid=' . $property_uid );
			$tasks[ 'showTariffs' ]  = array ( 'text' => jr_gettext( "_JOMRES_COM_MR_LISTTARIFF_TITLE", _JOMRES_COM_MR_LISTTARIFF_TITLE ) . " " . str_replace( "&#39;" , "'" ,getPropertyName( $property_uid )), 'url' => JOMRES_SITEPAGE_URL . '&task=showTariffs&amp;op=1&amp;property_uid=' . $property_uid );
			$tasks[ 'dobooking' ]    = array ( 'text' => jr_gettext( "_JOMRES_PATHWAY_BOOKINGFORM", _JOMRES_PATHWAY_BOOKINGFORM ), 'url' => JOMRES_SITEPAGE_URL . '&task=dobooking&amp;selectedProperty=' . $property_uid );
			$tasks[ 'slideshow' ]    = array ( 'text' => jr_gettext( "_JOMRES_FRONT_SLIDESHOW", _JOMRES_FRONT_SLIDESHOW ), 'url' => JOMRES_SITEPAGE_URL . '&task=slideshow&amp;op=1&amp;property_uid=' . $property_uid );

			switch ( $task )
			{
				case '':
				case 'extended_maps':
					//	$pathwayArray[]=$tasks['listProperties'];
					break;
				case 'viewproperty':
					$pathwayArray[ ] = $tasks[ 'country' ];
					$pathwayArray[ ] = $tasks[ 'region' ];
					$pathwayArray[ ] = $tasks[ 'town' ];
					$pathwayArray[ ] = $tasks[ 'viewproperty' ];
					break;
				case 'dobooking':
					$pathwayArray[ ] = $tasks[ 'country' ];
					$pathwayArray[ ] = $tasks[ 'region' ];
					$pathwayArray[ ] = $tasks[ 'town' ];
					$pathwayArray[ ] = $tasks[ 'viewproperty' ];
					$pathwayArray[ ] = $tasks[ 'dobooking' ];
					break;
				case 'showTariffs':
					$pathwayArray[ ] = $tasks[ 'country' ];
					$pathwayArray[ ] = $tasks[ 'region' ];
					$pathwayArray[ ] = $tasks[ 'town' ];
					$pathwayArray[ ] = $tasks[ 'viewproperty' ];
					$pathwayArray[ ] = $tasks[ 'showTariffs' ];
					break;
				case 'slideshow':
					$pathwayArray[ ] = $tasks[ 'country' ];
					$pathwayArray[ ] = $tasks[ 'region' ];
					$pathwayArray[ ] = $tasks[ 'town' ];
					$pathwayArray[ ] = $tasks[ 'viewproperty' ];
					$pathwayArray[ ] = $tasks[ 'slideshow' ];
					break;
			}

			foreach ( $pathwayArray as $p )
				{
				$app     = JFactory::getApplication();
				$pathway = $app->getPathway();
				$pathway->addItem( $p[ 'text' ], $p[ 'url' ] );
				}
			}
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

?>