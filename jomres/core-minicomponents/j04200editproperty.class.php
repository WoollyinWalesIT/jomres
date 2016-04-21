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

class j04200editproperty
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		//global $selectedCountry;

		$thisJRUser     = jomres_singleton_abstract::getInstance( 'jr_user' );
		$mrConfig       = getPropertySpecificSettings();
		$siteConfig     = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig       = $siteConfig->get();
		$defaultText    = "Change Me!";
		$propertyRights = $thisJRUser->defaultproperty;
		
		$propertyUid = getDefaultProperty();

		$propertyRegion[ ]                = array ( "GB", "" );
		$ptypeid                          = "";
		$propertyFeatures                 = "";
		$output[ 'PROPERTY_DESCRIPTION' ] = '<textarea class="inputbox" cols="40" rows="3" name="property_description"></textarea>';
		if ( isset( $_REQUEST[ 'selectedCountry' ] ) && !empty( $_REQUEST[ 'selectedCountry' ] ) ) $selectedCountry = jomresGetParam( $_REQUEST, 'selectedCountry', '' );

		if ( isset( $propertyUid ) && $propertyUid != "" )
			{
			$query        = "SELECT propertys_uid,property_name,property_street,property_town,property_region,property_country,property_postcode,
			property_tel ,property_fax,property_email,property_features,property_key,
			property_description,property_checkin_times,
			property_area_activities,property_driving_directions,property_airports,
			property_othertransport,property_policies_disclaimers,stars,superior,ptype_id,`lat`,`long`,`metatitle`,`metadescription`,`metakeywords`,`property_site_id`
			FROM #__jomres_propertys WHERE  propertys_uid  = '" . (int) $propertyUid . "' LIMIT 1";
			$propertyList = doSelectSql( $query );
			foreach ( $propertyList as $property )
				{
				$stars_arr = array ();
				for ( $i = 0, $n = 7; $i <= $n; $i++ )
					{
					$stars_arr[ ] = jomresHTML::makeOption( $i, $i );
					}

				$starsDropDownList = jomresHTML::selectList( $stars_arr, 'stars', 'size="1" class="inputbox"', 'value', 'text', $property->stars );

				$ptypeid = $property->ptype_id;

				$current_property_details  = jomres_singleton_abstract::getInstance( 'basic_property_details' );
				$output[ 'PROPERTY_NAME' ] = $current_property_details->get_property_name( $propertyUid );

				$yesno                         = array ();
				$yesno[ ]                      = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false ) );
				$yesno[ ]                      = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false ) );
				$output[ 'SUPERIOR_DROPDOWN' ] = jomresHTML::selectList( $yesno, 'superior', 'class="inputbox" size="1"', 'value', 'text', $property->superior );
				$output[ 'HSUPERIOR' ]         = jr_gettext( 'JOMRES_SUPERIOR', JOMRES_SUPERIOR );

				//$output['PROPERTY_NAME']=jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME', getEscaped($property->property_name),false,false);
				$output[ 'PROPERTY_STREET' ]   = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_STREET', $property->property_street, false);
				$output[ 'PROPERTY_TOWN' ]     = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_TOWN', $property->property_town, false);
				$output[ 'PROPERTY_POSTCODE' ] = $property->property_postcode;
				$output[ 'PROPERTY_TEL' ]      = $property->property_tel;
				$output[ 'PROPERTY_FAX' ]      = $property->property_fax;
				$output[ 'PROPERTY_EMAIL' ]    = $property->property_email;

				if ( $property->lat != "" )
					{
					$output[ 'LAT' ]  = $property->lat;
					$output[ 'LONG' ] = $property->long;
					}
				else
					{
					$output[ 'LAT' ]  = $jrConfig[ 'default_lat' ];
					$output[ 'LONG' ] = $jrConfig[ 'default_long' ];
					}

				$componentArgs = array ( 'property_uid' => $propertyUid, "width" => '400', "height" => '400', "editing_map" => true );
				$MiniComponents->specificEvent( '01050', 'x_geocoder', $componentArgs );
				$output[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];

				$output[ 'PRICE' ]           = $property->property_key;
				$output[ 'METATITLE' ]       = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE', $property->metatitle, false, false );
				$output[ 'METADESCRIPTION' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION', $property->metadescription, false, false );
				$output[ 'METAKEYWORDS' ]    = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS', $property->metakeywords, false, false );

				if ( !isset( $jrConfig[ 'allowHTMLeditor' ] ) ) $jrConfig[ 'allowHTMLeditor' ] = "1";

				$property_description         = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION', trim($property->property_description ), false, false );
				$property_checkintimes        = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES', trim($property->property_checkin_times ), false, false );
				$property_areaactivities      = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES', trim($property->property_area_activities ), false, false );
				$property_drivingdirections   = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS', trim($property->property_driving_directions ), false, false );
				$property_airports            = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS', trim($property->property_airports ), false, false );
				$property_othertransport      = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT', trim($property->property_othertransport ), false, false );
				if ( $property->property_policies_disclaimers == "")
					$property_policiesdisclaimers = jr_gettext( 'DEFAULT_TERMS_AND_CONDITIONS', 'DEFAULT_TERMS_AND_CONDITIONS', false); 
				else
					$property_policiesdisclaimers = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS', trim($property->property_policies_disclaimers ), false, false );

				if ( $jrConfig[ 'allowHTMLeditor' ] == "1" )
					{
					$hiddenField                               = "property_description";
					$width                                     = "95%";
					$height                                    = "250";
					$col                                       = "20";
					$row                                       = "10";
					$output[ 'PROPERTY_DESCRIPTION' ]          = editorAreaText( 'property_description', $property_description, 'property_description', $width, $height, $col, $row );
					$output[ 'PROPERTY_CHECKIN_TIMES' ]        = editorAreaText( 'property_checkin_times', $property_checkintimes, 'property_checkin_times', $width, $height, $col, $row );
					$output[ 'PROPERTY_AREA_ACTIVITIES' ]      = editorAreaText( 'property_area_activities', $property_areaactivities, 'property_area_activities', $width, $height, $col, $row );
					$output[ 'PROPERTY_DRIVING_DIRECTIONS' ]   = editorAreaText( 'property_driving_directions', $property_drivingdirections, 'property_driving_directions', $width, $height, $col, $row );
					$output[ 'PROPERTY_AIRPORTS' ]             = editorAreaText( 'property_airports', $property_airports, 'property_airports', $width, $height, $col, $row );
					$output[ 'PROPERTY_OTHERTRANSPORT' ]       = editorAreaText( 'property_othertransport', $property_othertransport, 'property_othertransport', $width, $height, $col, $row );
					$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = editorAreaText( 'property_policies_disclaimers', $property_policiesdisclaimers, 'property_policies_disclaimers', $width, $height, $col, $row );
					}
				else
					{
					$output[ 'PROPERTY_DESCRIPTION' ]          = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_description">' . $property_description . '</textarea>';
					$output[ 'PROPERTY_CHECKIN_TIMES' ]        = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_checkin_times">' . $property_checkintimes . '</textarea>';
					$output[ 'PROPERTY_AREA_ACTIVITIES' ]      = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_area_activities">' . $property_areaactivities . '</textarea>';
					$output[ 'PROPERTY_DRIVING_DIRECTIONS' ]   = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_driving_directions">' . $property_drivingdirections . '</textarea>';
					$output[ 'PROPERTY_AIRPORTS' ]             = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_airports">' . $property_airports . '</textarea>';
					$output[ 'PROPERTY_OTHERTRANSPORT' ]       = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_othertransport">' . $property_othertransport . '</textarea>';
					$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = '<textarea class="inputbox form-control" cols="70" rows="5" name="property_policies_disclaimers">' . $property_policiesdisclaimers . '</textarea>';
					}
				$propertyFeatures = $property->property_features;

				if ( empty( $selectedCountry ) ) $selectedCountry = $property->property_country;

				if ( is_numeric( $property->property_region ) ) 
					$propertyRegion = jr_gettext( '_JOMRES_CUSTOMTEXT_REGIONNAMES_' . $selectedCountry . "_" . $property->property_region, $property->property_region, false, false );
				else
					$propertyRegion = $property->property_region;
				$property_site_id =  $property->property_site_id;
				}
			}
		else // Probably superfluous
			{
			if ( !isset( $jrConfig[ 'allowHTMLeditor' ] ) ) $jrConfig[ 'allowHTMLeditor' ] = "1";
			if ( $jrConfig[ 'allowHTMLeditor' ] == "1" )
				{
				$width                                     = "450";
				$height                                    = "250";
				$col                                       = "20";
				$row                                       = "10";
				$output[ 'PROPERTY_DESCRIPTION' ]          = editorAreaText( 'property_description', $defaultText, 'property_description', $width, $height, $col, $row );
				$output[ 'PROPERTY_CHECKIN_TIMES' ]        = editorAreaText( 'property_checkin_times', $defaultText, 'property_checkin_times', $width, $height, $col, $row );
				$output[ 'PROPERTY_AREA_ACTIVITIES' ]      = editorAreaText( 'property_area_activities', $defaultText, 'property_area_activities', $width, $height, $col, $row );
				$output[ 'PROPERTY_DRIVING_DIRECTIONS' ]   = editorAreaText( 'property_driving_directions', $defaultText, 'property_driving_directions', $width, $height, $col, $row );
				$output[ 'PROPERTY_AIRPORTS' ]             = editorAreaText( 'property_airports', $defaultText, 'property_airports', $width, $height, $col, $row );
				$output[ 'PROPERTY_OTHERTRANSPORT' ]       = editorAreaText( 'property_othertransport', $defaultText, 'property_othertransport', $width, $height, $col, $row );
				$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = editorAreaText( 'property_policies_disclaimers', jr_gettext( 'DEFAULT_TERMS_AND_CONDITIONS', 'DEFAULT_TERMS_AND_CONDITIONS', false), 'property_policies_disclaimers', $width, $height, $col, $row );
				}
			else
				{
				$output[ 'PROPERTY_DESCRIPTION' ]          = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_description">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_CHECKIN_TIMES' ]        = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_checkin_times">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_AREA_ACTIVITIES' ]      = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_area_activities">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_DRIVING_DIRECTIONS' ]   = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_driving_directions">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_AIRPORTS' ]             = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_airports">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_OTHERTRANSPORT' ]       = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_othertransport">' . $defaultText . '</textarea>';
				$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = '<textarea class="inputbox form-control" cols="40" rows="3" name="property_policies_disclaimers">' . jr_gettext( 'DEFAULT_TERMS_AND_CONDITIONS', 'DEFAULT_TERMS_AND_CONDITIONS', false) . '</textarea>';
				}

			$starsDropDownList = "<select class=\"inputbox\" name=\"stars\">";
			for ( $i = 0, $n = 7; $i <= $n; $i++ )
				{
				$starsDropDownList .= "<option value=\"" . $i . "\">" . $i . "</option>";
				}
			$starsDropDownList .= "</select>";
			}

		$output[ 'HPROPERTY_TYPE' ]         = jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE' );
		$output[ 'PROPERTY_TYPE_DROPDOWN' ] = getPropertyTypeDropdown( $ptypeid );
		$propertyFeaturesArray              = explode( ",", $propertyFeatures );


		$query = "SELECT  hotel_features_uid,hotel_feature_abbv,hotel_feature_full_desc,image,property_uid,ptype_xref FROM #__jomres_hotel_features WHERE property_uid = '0' ORDER BY hotel_feature_abbv ";
		$propertyFeaturesList = doSelectSql( $query );
		$counter              = 1;
		foreach ( $propertyFeaturesList as $propertyFeature )
			{
			if (!is_numeric($propertyFeature->ptype_xref))
				{
				$ptype_xref=unserialize($propertyFeature->ptype_xref);
				if (in_array ($property->ptype_id, $ptype_xref))
					{
					$r          = array ();
					$r[ 'PID' ] = $propertyFeature->hotel_features_uid;
					if ( in_array( $propertyFeature->hotel_features_uid, $propertyFeaturesArray ) ) $r[ 'ischecked' ] = "checked";
					//$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$retString=TRUE);
					$feature_abbv   = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_ABBV' . (int) $propertyFeature->hotel_features_uid, stripslashes( $propertyFeature->hotel_feature_abbv ), false, false );
					$feature_desc   = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_DESC' . (int) $propertyFeature->hotel_features_uid, stripslashes( $propertyFeature->hotel_feature_full_desc ), false, false );
					$r[ 'FEATURE' ] = jomres_makeTooltip( $feature_abbv, $feature_abbv, $feature_desc, JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$propertyFeature->image, "", "property_feature", array () );
					$r[ 'BR' ]      = "";
					if ( $counter == 8 )
						{
						$r[ 'BR' ] = "<br />";
						$counter   = 0;
						}
					$counter++;
					$globalPfeatures[ ] = $r;
					}
				}
			else //for backward compatibility
				{
				if ($property->ptype_id == $propertyFeature->ptype_xref || $propertyFeature->ptype_xref == 0)
					{
					$r          = array ();
					$r[ 'PID' ] = $propertyFeature->hotel_features_uid;
					if ( in_array( $propertyFeature->hotel_features_uid, $propertyFeaturesArray ) ) $r[ 'ischecked' ] = "checked";
					//$r['FEATURE']=makeFeatureImages($propertyFeature->image,$propertyFeature->hotel_feature_abbv,$propertyFeature->hotel_feature_full_desc,$retString=TRUE);
					$feature_abbv   = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_ABBV' . (int) $propertyFeature->hotel_features_uid, stripslashes( $propertyFeature->hotel_feature_abbv ), false, false );
					$feature_desc   = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATURES_DESC' . (int) $propertyFeature->hotel_features_uid, stripslashes( $propertyFeature->hotel_feature_full_desc ), false, false );
					$r[ 'FEATURE' ] = jomres_makeTooltip( $feature_abbv, $feature_abbv, $feature_desc, JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/'.$propertyFeature->image, "", "property_feature", array () );
					$r[ 'BR' ]      = "";
					if ( $counter == 8 )
						{
						$r[ 'BR' ] = "<br />";
						$counter   = 0;
						}
					$counter++;
					$globalPfeatures[ ] = $r;
					}
				}
			}

		if ( isset( $listTxt ) ) $output[ 'FEATURES' ] = $listTxt;
		$propertyImageLocation = "";

		$propImage             = getImageForProperty( "property", (int) $propertyUid, (int) $propertyUid );
		$propertyImageLocation = '<img src="' . $propImage . '" />';

		$output[ 'STARSDROPDOWN' ] = $starsDropDownList;
		
		
		if ( $jrConfig[ 'limit_property_country' ] == "0" )
			{
			$output[ 'COUNTRIESDROPDOWN' ] = createCountriesDropdown( $selectedCountry );
			$output[ 'REGIONDROPDOWN' ]    = setupRegions( $selectedCountry, $propertyRegion );
			
			$output[ 'AJAX_COUNTRIESDROPDOWN' ]	= createSimpleCountriesDropdown( $selectedCountry , "country" ) ;
			$output[ 'AJAX_REGIONDROPDOWN' ]	= setupRegions($selectedCountry , $propertyRegion , false , "region");
			}
		else
			{
			$output[ 'COUNTRIESDROPDOWN' ] = getSimpleCountry( $jrConfig[ 'limit_property_country_country' ] );
			$output[ 'REGIONDROPDOWN' ]    = setupRegions( $jrConfig[ 'limit_property_country_country' ], $propertyRegion );
			
			$output[ 'AJAX_COUNTRIESDROPDOWN' ]	= createSimpleCountriesDropdown( $jrConfig[ 'limit_property_country_country' ] , "country" ) ;
			$output[ 'AJAX_REGIONDROPDOWN' ]	= setupRegions($jrConfig[ 'limit_property_country_country' ] , $propertyRegion  , false , "region");
			}

		if ( $output[ 'LAT' ] == "" ) // Let's ask Auntie Google what the lat long should be.
			{
			$url = "https://maps-api-ssl.google.com/maps/api/geocode/json?address=" . urlencode( $output[ 'PROPERTY_NAME' ] ) . "," . urlencode( $output[ 'PROPERTY_STREET' ] ) . "," . urlencode( $output[ 'PROPERTY_TOWN' ] ) . "," . urlencode( $propertyRegion ) . "," . urlencode( $selectedCountry ) ;
			//$url = urlencode($url);
			//echo $url;exit;
			$curl_handle = curl_init();
			curl_setopt( $curl_handle, CURLOPT_URL, $url );
			curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 );
			curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, 1 );
			curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres' );
			$response = trim( curl_exec( $curl_handle ) );
			curl_close( $curl_handle );
			$decoded = json_decode( $response );
			if ( isset( $decoded->results[ 0 ]->geometry->location->lat ) )
				{
				$output[ 'LAT' ]  = $decoded->results[ 0 ]->geometry->location->lat;
				$output[ 'LONG' ] = $decoded->results[ 0 ]->geometry->location->lng;
				}
			}

		$multi=array();
		if(file_exists(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_multisites'.DS.'helpers'.DS.'utils.php'))
			{
			include_once( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_multisites'.DS.'helpers'.DS.'utils.php');
			if ( class_exists( 'MultisitesHelperUtils') && method_exists( 'MultisitesHelperUtils', 'getComboSiteIDs')) 
				{
				$comboSiteIDs = MultisitesHelperUtils::getComboSiteIDs( $property_site_id, 'property_site_id', jr_gettext( '_JOMRES_MULTISITES_SELECT_A_SITE', '_JOMRES_MULTISITES_SELECT_A_SITE', false, false ));
				if( !empty( $comboSiteIDs))
					{
					$multisites['LABEL'] = jr_gettext("_JOMRES_MULTISITES_MULTISITES_LABEL" , '_JOMRES_MULTISITES_MULTISITES_LABEL');
					$multisites['MULTISITES_SELECT'] = $comboSiteIDs;
					$multi = array($multisites);
					}
				}
			}
		
		
		$output[ '_JOMRES_REQUIREDFIELDS' ]   = jr_gettext( '_JOMRES_REQUIREDFIELDS', '_JOMRES_REQUIREDFIELDS' );
		
		$output[ 'APIKEY' ]     = $jrConfig[ 'google_maps_api_key' ];
		$output[ 'HCOUNTRY' ]   = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$output[ 'HREGION' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$output[ 'HNAME' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME' );
		$output[ 'HSTREET' ]    = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET' );
		$output[ 'HTOWN' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN' );
		$output[ 'HPOSTCODE' ]  = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE' );
		$output[ 'HTELEPHONE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE' );
		$output[ 'HFAX' ]       = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX' );
		$output[ 'HEMAIL' ]     = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL' );
		$output[ 'HSTARS' ]     = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS' );
		$output[ 'HPRICE' ]     = jr_gettext( '_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE' );

		$output[ 'HFEATURES' ]            = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES' );
		$output[ 'HPROPDESCRIPTION' ]     = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION' );
		$output[ 'HCHECKINTIMES' ]        = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES' );
		$output[ 'HAREAACTIVITIES' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES' );
		$output[ 'HDRIVINGDIRECTIONS' ]   = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS' );
		$output[ 'HAIRPORTS' ]            = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS' );
		$output[ 'HOTHERTRANSPORT' ]      = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT' );
		$output[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' );

		if ( $jrConfig[ 'limit_property_country' ] == "0" ) 
			$change_country_warning[] = array ( 'CHANGECOUNTRYWARNING' => jr_gettext( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', false ) );
		$output[ 'SAVEBEFOREUPLOADWARNING' ] = jr_gettext( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', false );
		$output[ '_JOMRES_METADESCRIPTION' ] = jr_gettext( '_JOMRES_METADESCRIPTION', '_JOMRES_METADESCRIPTION', false );
		$output[ '_JOMRES_METAKEYWORDS' ]    = jr_gettext( '_JOMRES_METAKEYWORDS', '_JOMRES_METAKEYWORDS', false );
		$output[ '_JOMRES_METATITLE' ]       = jr_gettext( '_JOMRES_METATITLE', '_JOMRES_METATITLE', false );
		$output[ 'LATLONG_DESC' ]            = jr_gettext( '_JOMRES_LATLONG_DESC', '_JOMRES_LATLONG_DESC', false );
		$output[ 'HLAT' ]            		 = jr_gettext( '_JOMRES_LAT', '_JOMRES_LAT', false );
		$output[ 'HLONG' ]            		 = jr_gettext( '_JOMRES_LONG', '_JOMRES_LONG', false );


		$output[ 'MOSCONFIGLIVESITE' ] = get_showtime( 'live_site' );
		$output[ 'PROPERTYUID' ]       = $propertyUid;

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL ), '' );
		if ( $jrConfig[ 'allowHTMLeditor' ] != "2" && $jrConfig[ 'allowHTMLeditor' ] != "3" ) 
			$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'saveProperty' );
		
		$usersProperties = $thisJRUser->authorisedPropertyDetails;

		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;
		$output[ 'CANCEL_URL' ] = jomresURL( JOMRES_SITEPAGE_URL."&task=dashboard" );

		$output[ 'PAGETITLE' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS' );
		$output[ 'IMAGE' ]     = $propertyImageLocation;

		$approval_warning[] = array('APPROVALWARNING' => jr_gettext( '_JOMRES_EDITPROPERTY_APPROVAL_WARNING', '_JOMRES_EDITPROPERTY_APPROVAL_WARNING', false ));

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) 
			$tmpl->readTemplatesFromInput( 'edit_property_realestate.html' );
		else
			$tmpl->readTemplatesFromInput( 'edit_property.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'change_country_warning', $change_country_warning );
		if ((int)$jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager)
			$tmpl->addRows( 'approval_warning', $approval_warning );
		$tmpl->addRows('multi',$multi);
		
		if ( $jrConfig[ 'useGlobalPFeatures' ] == "1" ) $tmpl->addRows( 'globalPfeatures', $globalPfeatures );
		$tmpl->displayParsedTemplate();
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT' );
		$output[ ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS' );
		$output[ ] = jr_gettext( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '_JOMRES_EDITPROPERTY_SELECTCOUNTRY' );
		$output[ ] = jr_gettext( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD' );
		$output[ ] = jr_gettext( '_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE' );
		$output[ ] = jr_gettext( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', '_JOMRES_EDITPROPERTY_CONNOTDELETE1' );
		$output[ ] = jr_gettext( '_JOMRES_LATLONG_DESC', '_JOMRES_LATLONG_DESC' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
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