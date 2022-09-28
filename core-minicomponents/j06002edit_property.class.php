<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
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

class j06002edit_property
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$mrConfig = getPropertySpecificSettings();

		$property_uid = getDefaultProperty();

		$output = array();
		$stars_arr = array();
		$globalPfeatures = array();
		$change_country_warning = array();
		$approval_warning = array();
		$defaultText = 'Change Me!';

		//TODO: may not be needed anymore
		if (!isset($jrConfig[ 'allowHTMLeditor' ])) {
			$jrConfig[ 'allowHTMLeditor' ] = '1';
		}

		//get current property details
		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($property_uid);
		
		//property types
		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');

		$output[ 'PROPERTY_NAME' ] = $current_property_details->property_name;
		$output[ 'PROPERTY_STREET' ] = $current_property_details->property_street;
		$output[ 'PROPERTY_TOWN' ] = $current_property_details->property_town;
		$output[ 'PROPERTY_POSTCODE' ] = $current_property_details->property_postcode;
		$output[ 'PROPERTY_TEL' ] = $current_property_details->property_tel;
		$output[ 'PROPERTY_FAX' ] = $current_property_details->property_fax;
		$output[ 'PROPERTY_EMAIL' ] = $current_property_details->property_email;
		$output[ 'PRICE' ] = $current_property_details->real_estate_property_price;
		$output[ 'METATITLE' ] = $current_property_details->metatitle;
		$output[ 'METADESCRIPTION' ] = $current_property_details->metadescription;
		$output[ 'METAKEYWORDS' ] = $current_property_details->metakeywords;
		$output[ 'APIKEY' ] = $jrConfig[ 'google_maps_api_key' ];
		$output[ 'PROPERTYUID' ] = $property_uid;
		$output[ 'PERMIT_NUMBER' ] = $current_property_details->permit_number;

		//property region and country
		$selectedCountry = jomresGetParam($_REQUEST, 'selectedCountry', '');
		if ($selectedCountry == '') {
			$selectedCountry = $current_property_details->property_country_code;
		}

		if ($jrConfig[ 'limit_property_country' ] == '0') {
			$output[ 'COUNTRIESDROPDOWN' ] = createCountriesDropdown($selectedCountry);
			$output[ 'REGIONDROPDOWN' ] = setupRegions($selectedCountry, $current_property_details->property_region);

			$output[ 'AJAX_COUNTRIESDROPDOWN' ] = createSimpleCountriesDropdown($selectedCountry, 'country');
			$output[ 'AJAX_REGIONDROPDOWN' ] = setupRegions($selectedCountry, $current_property_details->property_region, false, 'region');
		} else {
			$output[ 'COUNTRIESDROPDOWN' ] = getSimpleCountry($jrConfig[ 'limit_property_country_country' ]);
			$output[ 'REGIONDROPDOWN' ] = setupRegions($jrConfig[ 'limit_property_country_country' ], $current_property_details->property_region);

			$output[ 'AJAX_COUNTRIESDROPDOWN' ] = createSimpleCountriesDropdown($jrConfig[ 'limit_property_country_country' ], 'country');
			$output[ 'AJAX_REGIONDROPDOWN' ] = setupRegions($jrConfig[ 'limit_property_country_country' ], $current_property_details->property_region, false, 'region');
		}

		//property latitude and longitude
		if ($current_property_details->lat != '') {
			$output[ 'LAT' ] = $current_property_details->lat;
			$output[ 'LONG' ] = $current_property_details->long;
		} else {
			$output[ 'LAT' ] = $jrConfig[ 'default_lat' ];
			$output[ 'LONG' ] = $jrConfig[ 'default_long' ];
		}

		//if the lat/long are still empty, let's ask Auntie Google what the lat long should be.
		//TODO: is this still needed?
		if ($output[ 'LAT' ] == '') {
			$base_uri = 'https://maps-api-ssl.google.com/';
			$query_string = 'maps/api/geocode/json?address='.urlencode($current_property_details->property_name).','.urlencode($current_property_details->property_street).','.urlencode($current_property_details->property_town).','.urlencode($current_property_details->property_region).','.urlencode($selectedCountry);
			
			$response = '';
			
			try {
				$client = new GuzzleHttp\Client([
					'base_uri' => $base_uri
				]);

				logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
				
				$response = $client->request('GET', $query_string)->getBody()->getContents();
			} catch (Exception $e) {
				$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
				$jomres_user_feedback->construct_message(array('message'=>'Could not get map coordinates', 'css_class'=>'alert-danger alert-error'));
			}
			
			$decoded = json_decode($response);
			
			if (isset($decoded->results[ 0 ]->geometry->location->lat)) {
				$output[ 'LAT' ] = $decoded->results[ 0 ]->geometry->location->lat;
				$output[ 'LONG' ] = $decoded->results[ 0 ]->geometry->location->lng;
			}
		}

		//build the map
		if (trim($output[ 'APIKEY' ]) != '') {
			$componentArgs = array('property_uid' => $property_uid, 'width' => '400', 'height' => '400', 'editing_map' => true);
			$MiniComponents->specificEvent('01050', 'x_geocoder', $componentArgs);
			$output[ 'MAP' ] = $MiniComponents->miniComponentData[ '01050' ][ 'x_geocoder' ];
		} else {
			$output[ 'MAP' ] = "<div class='alert alert-danger'>Google Map API key not stored in Site Configuration > Integration tab so cannot show map.</div>";
		}


		//property policies and disclaimers
		if ($current_property_details->property_policies_disclaimers == '') {
			$property_policies_disclaimers = jr_gettext('DEFAULT_TERMS_AND_CONDITIONS', 'DEFAULT_TERMS_AND_CONDITIONS', false);
		} else {
			$property_policies_disclaimers = $current_property_details->property_policies_disclaimers;
		}

		//html editor fields (decription, area activities, etc)
		if ($jrConfig[ 'allowHTMLeditor' ] == '1') {
			$width = '95%';
			$height = '250';
			$col = '20';
			$row = '10';

			$output[ 'PROPERTY_DESCRIPTION' ] = editorAreaText('property_description', $current_property_details->property_description, 'property_description', $width, $height, $col, $row);
			$output[ 'PROPERTY_CHECKIN_TIMES' ] = editorAreaText('property_checkin_times', $current_property_details->property_checkin_times, 'property_checkin_times', $width, $height, $col, $row);
			$output[ 'PROPERTY_AREA_ACTIVITIES' ] = editorAreaText('property_area_activities', $current_property_details->property_area_activities, 'property_area_activities', $width, $height, $col, $row);
			$output[ 'PROPERTY_DRIVING_DIRECTIONS' ] = editorAreaText('property_driving_directions', $current_property_details->property_driving_directions, 'property_driving_directions', $width, $height, $col, $row);
			$output[ 'PROPERTY_AIRPORTS' ] = editorAreaText('property_airports', $current_property_details->property_airports, 'property_airports', $width, $height, $col, $row);
			$output[ 'PROPERTY_OTHERTRANSPORT' ] = editorAreaText('property_othertransport', $current_property_details->property_othertransport, 'property_othertransport', $width, $height, $col, $row);
			$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = editorAreaText('property_policies_disclaimers', $property_policies_disclaimers, 'property_policies_disclaimers', $width, $height, $col, $row);
		} else {
			jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.js');
			jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.css');
			
			$output['SIMPLEMDE_JAVASCRIPT'] = '
				<script type="text/javascript">
				jomresJquery(document).ready(function () {
					var buttons =  ["bold", "italic", "heading", "strikethrough" , "|" , "unordered-list" , "ordered-list" , "clean-block" , "image" , "table" , "horizontal-rule" , "|", "preview" ];
					var simplemde = new SimpleMDE({ element: document.getElementById("property_description") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_checkin_times") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_area_activities") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_driving_directions") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_airports") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_othertransport") ,toolbar: buttons, });
					var simplemde = new SimpleMDE({ element: document.getElementById("property_policies_disclaimers") ,toolbar: buttons, });
				});
				</script>';
			
			
			$output[ 'MARKDOWN_BUTTON' ] = $MiniComponents->specificEvent('06000', 'show_markdown_modal', array('output_now' => false));
			
			$output[ 'PROPERTY_DESCRIPTION' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_description" name="property_description">'.jomres_remove_HTML($current_property_details->property_description, '').'</textarea>';
			$output[ 'PROPERTY_CHECKIN_TIMES' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_checkin_times" name="property_checkin_times">'.jomres_remove_HTML($current_property_details->property_checkin_times, '').'</textarea>';
			$output[ 'PROPERTY_AREA_ACTIVITIES' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_area_activities" name="property_area_activities">'.jomres_remove_HTML($current_property_details->property_area_activities, '').'</textarea>';
			$output[ 'PROPERTY_DRIVING_DIRECTIONS' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_driving_directions" name="property_driving_directions">'.jomres_remove_HTML($current_property_details->property_driving_directions, '').'</textarea>';
			$output[ 'PROPERTY_AIRPORTS' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_airports" name="property_airports">'.jomres_remove_HTML($current_property_details->property_airports, '').'</textarea>';
			$output[ 'PROPERTY_OTHERTRANSPORT' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_othertransport" name="property_othertransport">'.jomres_remove_HTML($current_property_details->property_othertransport, '').'</textarea>';
			$output[ 'PROPERTY_POLICIES_DISCLAIMERS' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="property_policies_disclaimers" name="property_policies_disclaimers">'.jomres_remove_HTML($property_policies_disclaimers, '').'</textarea>';
		}

		//property type dropdown (extended version, with explanation about what will guests book in this property)
		$output[ 'HPROPERTY_TYPE' ] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE');
		$output[ 'PROPERTY_TYPE_DROPDOWN' ] = $jomres_property_types->getPropertyTypeDropdown($current_property_details->ptype_id, true);
		
		//property category dropdown
		$jomres_property_categories = jomres_singleton_abstract::getInstance('jomres_property_categories');
		$output[ 'PROPERTY_CATEGORIES_DROPDOWN' ] = $jomres_property_categories->getPropertyCategoriesDropdown($current_property_details->cat_id);
		$output[ 'HCATEGORY' ] = jr_gettext('_JOMRES_HCATEGORY', '_JOMRES_HCATEGORY');

		//property features
		$propertyFeaturesArray = explode(',', $current_property_details->property_features);

		$counter = 0;
		foreach ($current_property_details->all_property_features as $k => $v) {
			if (in_array($current_property_details->ptype_id, $v['ptype_xref']) || (isset($v['ptype_xref'][0]) && $v['ptype_xref'][0] == 0)) {
				$r = array();
				$r[ 'ischecked' ] = '';

				$r[ 'PID' ] = $k;

				if (in_array($k, $propertyFeaturesArray)) {
					$r[ 'ischecked' ] = 'checked';
				}

				$r[ 'FEATURE' ] = jomres_makeTooltip($v['abbv'], $v['abbv'], $v['desc'], JOMRES_IMAGELOCATION_RELPATH.'pfeatures/'.$v['image'], '', 'property_feature', array());

				$r['FEATURE_NAME'] = $v['abbv'];

				$r[ 'BR' ] = '';
				if ($counter == 8) {
					$r[ 'BR' ] = '<br />';
					$counter = 0;
				}

				++$counter;
				$globalPfeatures[] = $r;
			}
		}

		//multisites integration
		$multi = array();
		if (this_cms_is_joomla()) {
			if (file_exists(JPATH_ADMINISTRATOR.JRDS.'components'.JRDS.'com_multisites'.JRDS.'helpers'.JRDS.'utils.php')) {
				include_once JPATH_ADMINISTRATOR.JRDS.'components'.JRDS.'com_multisites'.JRDS.'helpers'.JRDS.'utils.php';
				if (class_exists('MultisitesHelperUtils') && method_exists('MultisitesHelperUtils', 'getComboSiteIDs')) {
					$comboSiteIDs = MultisitesHelperUtils::getComboSiteIDs($current_property_details->property_site_id, 'property_site_id', jr_gettext('_JOMRES_MULTISITES_SELECT_A_SITE', '_JOMRES_MULTISITES_SELECT_A_SITE', false, false));
					if (!empty($comboSiteIDs)) {
						$multisites['LABEL'] = jr_gettext('_JOMRES_MULTISITES_MULTISITES_LABEL', '_JOMRES_MULTISITES_MULTISITES_LABEL');
						$multisites['MULTISITES_SELECT'] = $comboSiteIDs;
						$multi = array($multisites);
					}
				}
			}
		}

		$sanitised_lat_long_hyphes = array ("&#38;#45;" , "&#45;" );
		$output[ 'LAT' ] = str_replace($sanitised_lat_long_hyphes, "-", $output[ 'LAT' ]) ;
		$output[ 'LONG' ] = str_replace($sanitised_lat_long_hyphes, "-", $output[ 'LONG' ]) ;
			
		//other language strings
		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS');
		$output[ '_JOMRES_REQUIREDFIELDS' ] = jr_gettext('_JOMRES_REQUIREDFIELDS', '_JOMRES_REQUIREDFIELDS');
		$output[ 'HCOUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ 'HREGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ 'HNAME' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME');
		$output[ 'HSTREET' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
		$output[ 'HTOWN' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
		$output[ 'HPOSTCODE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
		$output[ 'HTELEPHONE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
		$output[ 'HFAX' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', false);
		$output[ 'HEMAIL' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL');
		$output[ 'HPRICE' ] = jr_gettext('_JOMRES_COM_MR_EXTRA_PRICE', '_JOMRES_COM_MR_EXTRA_PRICE');
		$output[ 'HFEATURES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES');
		$output[ 'HPROPDESCRIPTION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION');
		$output[ 'HCHECKINTIMES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES');
		$output[ 'HAREAACTIVITIES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES');
		$output[ 'HDRIVINGDIRECTIONS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS');
		$output[ 'HAIRPORTS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS');
		$output[ 'HOTHERTRANSPORT' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT');
		$output[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');
		$output[ '_JOMRES_METADESCRIPTION'] = jr_gettext('_JOMRES_METADESCRIPTION', '_JOMRES_METADESCRIPTION', false);
		$output[ '_JOMRES_METAKEYWORDS' ] = jr_gettext('_JOMRES_METAKEYWORDS', '_JOMRES_METAKEYWORDS', false);
		$output[ '_JOMRES_METATITLE' ] = jr_gettext('_JOMRES_METATITLE', '_JOMRES_METATITLE', false);
		$output[ 'LATLONG_DESC' ] = jr_gettext('_JOMRES_LATLONG_DESC', '_JOMRES_LATLONG_DESC', false);
		$output[ 'HLAT' ] = jr_gettext('_JOMRES_LAT', '_JOMRES_LAT', false);
		$output[ 'HLONG' ] = jr_gettext('_JOMRES_LONG', '_JOMRES_LONG', false);
		$output[ '_JOMRES_PERMIT_NUMBER_TITLE' ] = jr_gettext('_JOMRES_PERMIT_NUMBER_TITLE', '_JOMRES_PERMIT_NUMBER_TITLE', false);
		$output[ '_JOMRES_PERMIT_NUMBER_DESCRIPTION' ] = jr_gettext('_JOMRES_PERMIT_NUMBER_DESCRIPTION', '_JOMRES_PERMIT_NUMBER_DESCRIPTION', false);
		$output[ 'PROPERTY_TYPE_DROPDOWN_WARNING' ] = jr_gettext('_JOMRES_PTYPE_CHANGE_WARNING', '_JOMRES_PTYPE_CHANGE_WARNING', false);

		if ($jrConfig[ 'limit_property_country' ] == '0') {
			$change_country_warning[] = array('CHANGECOUNTRYWARNING' => jr_gettext('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', false));
		}

		$stars = array();
		if ($jomres_property_types->property_types[$current_property_details->ptype_id]['has_stars'] == 1) {
			$s = array();
			
			$s[ 'HSTARS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS');
			//stars dropdown
			for ($i = 0, $n = 7; $i <= $n; ++$i) {
				$stars_arr[] = jomresHTML::makeOption($i, $i);
			}
			$s[ 'STARSDROPDOWN' ] = jomresHTML::selectList($stars_arr, 'stars', 'size="1" class="inputbox"', 'value', 'text', $current_property_details->stars);

			//superior dropdown
			$yesno = array();
			$yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
			$yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
			$s[ 'SUPERIOR_DROPDOWN' ] = jomresHTML::selectList($yesno, 'superior', 'class="inputbox" size="1"', 'value', 'text', $current_property_details->superior);
			$s[ 'HSUPERIOR' ] = jr_gettext('JOMRES_SUPERIOR', 'JOMRES_SUPERIOR');
			
			$stars[] = $s;
		}
		
		//toolbar
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL), '');
		if ($jrConfig[ 'allowHTMLeditor' ] != '2' && $jrConfig[ 'allowHTMLeditor' ] != '3') {
			$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_property');
		}
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'CANCEL_URL' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=cpanel');

		//approval warning
		$approval_warning[] = array('APPROVALWARNING' => jr_gettext('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', '_JOMRES_EDITPROPERTY_APPROVAL_WARNING', false));

		//display template
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);

		if ($mrConfig[ 'is_real_estate_listing' ] == 1) {
			$tmpl->readTemplatesFromInput('edit_property_realestate.html');
		} else {
			$tmpl->readTemplatesFromInput('edit_property.html');
		}

		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('change_country_warning', $change_country_warning);

		if ((int) $jrConfig['automatically_approve_new_properties'] == 0 && !$thisJRUser->superPropertyManager) {
			$tmpl->addRows('approval_warning', $approval_warning);
		}

		$tmpl->addRows('multi', $multi);

		if ($jrConfig[ 'useGlobalPFeatures' ] == '1') {
			$tmpl->addRows('globalPfeatures', $globalPfeatures);
		}
		
		$tmpl->addRows('stars', $stars);
		
		$tmpl->displayParsedTemplate();
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');
		$output[ ] = jr_gettext('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '_JOMRES_EDITPROPERTY_SELECTCOUNTRY');
		$output[ ] = jr_gettext('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD');
		$output[ ] = jr_gettext('_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE');
		$output[ ] = jr_gettext('_JOMRES_EDITPROPERTY_CONNOTDELETE1', '_JOMRES_EDITPROPERTY_CONNOTDELETE1');
		$output[ ] = jr_gettext('_JOMRES_LATLONG_DESC', '_JOMRES_LATLONG_DESC');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
