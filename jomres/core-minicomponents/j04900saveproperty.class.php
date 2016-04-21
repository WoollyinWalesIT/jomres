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

class j04900saveproperty
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		if ( !function_exists( 'jomres_singleton_abstract::getInstance' ) )
		global $MiniComponents;
		else
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$this->newpropertyId = 0;
		$propertyUid         = intval( jomresGetParam( $_POST, 'property_uid', 0 ) );

		if ( $propertyUid > 0 && !in_array( $propertyUid, $jrConfig->authorisedProperties ) ) $propertyUid = getDefaultProperty();
		if ( $jrConfig[ 'selfRegistrationAllowed' ] == "0" && $propertyUid == 0 ) $propertyUid = getDefaultProperty();

		$property_name   = trim( jomresGetParam( $_POST, 'property_name', "" ) );
		$property_street = jomresGetParam( $_POST, 'property_street', "" );
		$property_town   = jomresGetParam( $_POST, 'property_town', "" );
		$property_region = jomresGetParam( $_POST, 'region', "" );
		if ( $jrConfig[ 'limit_property_country' ] == "0" ) $property_country = jomresGetParam( $_POST, 'country', "" );
		else
		$property_country = $jrConfig[ 'limit_property_country_country' ];
		$property_postcode = jomresGetParam( $_POST, 'property_postcode', "" );
		$property_tel      = jomresGetParam( $_POST, 'property_tel', "" );
		$property_fax      = jomresGetParam( $_POST, 'property_fax', "" );
		$property_email    = jomresGetParam( $_POST, 'property_email', "" );
		$metatitle         = jomresGetParam( $_POST, 'metatitle', "" );
		$metadescription   = jomresGetParam( $_POST, 'metadescription', "" );
		$metakeywords      = jomresGetParam( $_POST, 'metakeywords', "" );
		$price             = convert_entered_price_into_safe_float(jomresGetParam( $_POST, 'price', '' ));

		$lat   = parseFloat( jomresGetParam( $_POST, 'lat', '' ) );
		$long  = parseFloat( jomresGetParam( $_POST, 'long', '' ) );
		
		$property_site_id				= jomresGetParam( $_POST, 'property_site_id', '' );
	
		$approved = 1;
		$published = 1;
		
		if ((int)$jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager)
			{
			$approved = 0;
			$published = 0;
			}

		if ( $jrConfig[ 'allowHTMLeditor' ] == "0" )
			{
			$property_description          = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_description', "" ) );
			$property_checkin_times        = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_checkin_times', "" ) );
			$property_area_activities      = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_area_activities', "" ) );
			$property_driving_directions   = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_driving_directions', "" ) );
			$property_airports             = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_airports', "" ) );
			$property_othertransport       = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_othertransport', "" ) );
			$property_policies_disclaimers = $this->convert_lessgreaterthans( jomresGetParam( $_POST, 'property_policies_disclaimers', "" ) );

			$property_description          = strip_tags( $property_description, "<p><br>" );
			$property_checkin_times        = strip_tags( $property_checkin_times, "<p><br>" );
			$property_area_activities      = strip_tags( $property_area_activities, "<p><br>" );
			$property_driving_directions   = strip_tags( $property_driving_directions, "<p><br>" );
			$property_airports             = strip_tags( $property_airports, "<p><br>" );
			$property_othertransport       = strip_tags( $property_othertransport, "<p><br>" );
			$property_policies_disclaimers = strip_tags( $property_policies_disclaimers, "<p><br>" );
			}
		else
			{
			$property_description          = jomresGetParam( $_POST, 'property_description', "" );
			$property_checkin_times        = jomresGetParam( $_POST, 'property_checkin_times', "" );
			$property_area_activities      = jomresGetParam( $_POST, 'property_area_activities', "" );
			$property_driving_directions   = jomresGetParam( $_POST, 'property_driving_directions', "" );
			$property_airports             = jomresGetParam( $_POST, 'property_airports', "" );
			$property_othertransport       = jomresGetParam( $_POST, 'property_othertransport', "" );
			$property_policies_disclaimers = jomresGetParam( $_POST, 'property_policies_disclaimers', "" );

			/* 			if ($jrConfig['use_jomres_own_editor'])
							{
							$property_description			= $this->convert_lessgreaterthans($property_description);
							$property_checkin_times			= $this->convert_lessgreaterthans($property_checkin_times);
							$property_area_activities		= $this->convert_lessgreaterthans($property_area_activities);
							$property_driving_directions	= $this->convert_lessgreaterthans($property_driving_directions);
							$property_airports				= $this->convert_lessgreaterthans($property_airports);
							$property_othertransport		= $this->convert_lessgreaterthans($property_othertransport);
							$property_policies_disclaimers	= $this->convert_lessgreaterthans($property_policies_disclaimers);

							$unwanted = array("<p><br></p>","<brb>","</brb>","<p></p>","<p> </p>","<p> 		</p>");
							$property_description 				= str_replace($unwanted,"",$property_description); // The Jomres editor adds stray spaces and <p> to the end, this will remove them
							$property_checkin_times 			= str_replace($unwanted,"",$property_checkin_times);
							$property_area_activities 			= str_replace($unwanted,"",$property_area_activities);
							$property_driving_directions 		= str_replace($unwanted,"",$property_driving_directions);
							$property_airports 					= str_replace($unwanted,"",$property_airports);
							$property_othertransport 			= str_replace($unwanted,"",$property_othertransport);
							$property_policies_disclaimers 		= str_replace($unwanted,"",$property_policies_disclaimers);

							$property_description			= $this->encode_lessgreaterthans($property_description);
							$property_checkin_times			= $this->encode_lessgreaterthans($property_checkin_times);
							$property_area_activities		= $this->encode_lessgreaterthans($property_area_activities);
							$property_driving_directions	= $this->encode_lessgreaterthans($property_driving_directions);
							$property_airports				= $this->encode_lessgreaterthans($property_airports);
							$property_othertransport		= $this->encode_lessgreaterthans($property_othertransport);
							$property_policies_disclaimers	= $this->encode_lessgreaterthans($property_policies_disclaimers);
							} */
			}

		$property_type     = jomresGetParam( $_POST, 'propertyType', 0 );
		$property_stars    = jomresGetParam( $_POST, 'stars', 0 );
		$property_superior = jomresGetParam( $_POST, 'superior', 0 );
		$features_list     = jomresGetParam( $_POST, 'features_list', "" );
		$pid               = jomresGetParam( $_POST, 'pid', array () );

		if ( $property_name == "" )
			{
			$current_property_details  = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$output[ 'PROPERTY_NAME' ] = $current_property_details->get_property_name( $propertyUid );
			}

		if ( !empty( $features_list ) ) $features_list = array_merge( $features_list, $pid );
		else
		$features_list = $pid;

		if ( count( $features_list ) > 1 ) $featuresList = implode( ",", $features_list );
		if ( count( $features_list ) == 1 )
			{
			$featuresList = $features_list[ 0 ];
			//$featuresList=$features_list;
			}
		$featuresList = "," . $featuresList . ",";

		if ( $propertyUid == 0 )
			{
			trigger_error("Something went wrong. Property uid not set when trying to save property.");
			}
		else
			{
			$apiclause = "";
			$query     = "SELECT apikey FROM #__jomres_propertys WHERE propertys_uid='" . (int) $propertyUid . "'";
			$apikey    = doSelectSql( $query, 1 );
			if ( strlen( $apikey ) == 0 )
				{
				$apikey    = createNewAPIKey();
				$apiclause = "`apikey`='" . $apikey . "',";
				}
			$saveMessage = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', false );

			$jomres_messaging = jomres_singleton_abstract::getInstance( 'jomres_messages' );
			$jomres_messaging->set_message( $saveMessage );

			$query = "UPDATE #__jomres_propertys SET
				`property_name`='$property_name',
				`property_street`='$property_street',
				`property_town`='$property_town',
				`property_region`='$property_region',
				`property_country`='$property_country',
				`property_postcode`='$property_postcode',
				`property_tel`='$property_tel',
				`property_fax`='$property_fax',
				`property_email`='$property_email',
				`property_features`='$featuresList',
				`property_key`='$property_key',
				`property_mappinglink`='$property_mappinglink',
				`property_description`='$property_description',
				`property_checkin_times`='$property_checkin_times',
				`property_area_activities`='$property_area_activities',
				`property_driving_directions`='$property_driving_directions',
				`property_airports`='$property_airports',
				`property_othertransport`='$property_othertransport',
				`property_policies_disclaimers`='$property_policies_disclaimers',
				`property_key`='" . (float) $price . "',
				`published`= " . $published . ",
				`lat`='$lat',
				`long`='$long',
				`metatitle`='$metatitle',
				`metadescription`='$metadescription',
				`metakeywords`='$metakeywords',
				`approved`=".$approved.",
				`stars`='" . (int) $property_stars . "',
				`superior`='" . (int) $property_superior . "',
				" . $apiclause . "
				`ptype_id`='" . (int) $property_type . "',
				`property_site_id`='".$property_site_id."'
				WHERE propertys_uid='" . (int) $propertyUid . "'";
			doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', false ) );

			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_NAME", $property_name, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_STREET", $property_street, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_TOWN", $property_town, true );

			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION", $property_description, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES", $property_checkin_times, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES", $property_area_activities, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS", $property_driving_directions, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS", $property_airports, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT", $property_othertransport, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS", $property_policies_disclaimers, true );

			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE", $metatitle, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION", $metadescription, true );
			updateCustomText( "_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS", $metakeywords, true );

			if ((int)$jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager)
				{
				$link = JOMRES_SITEPAGE_URL_ADMIN."&task=list_properties_awaiting_approval";
				$subject=jr_gettext("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT",'_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT',false);
				$message=jr_gettext("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT",'_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT',false).$link;
				sendAdminEmail($subject,$message);
				}
			
			jomresRedirect( jomresUrl(JOMRES_SITEPAGE_URL . "&task=editProperty&propertyUid=" . $propertyUid) );
			}

		}

	function encode_lessgreaterthans( $string )
		{
		$string = str_replace( "<", "&#60;", $string );
		$string = str_replace( ">", "&#62;", $string );

		return $string;
		}

	function convert_lessgreaterthans( $string )
		{
		$string = str_replace( "&#60;", "<", $string );
		$string = str_replace( "&#62;", ">", $string );

		return $string;
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
		if ( $this->newpropertyId > 0 ) return $this->newpropertyId;
		else
		return null;
		}
	}


?>