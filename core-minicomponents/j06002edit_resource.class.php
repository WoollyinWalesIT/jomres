<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002edit_resource
{
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

		$defaultProperty = getDefaultProperty();

		$mrConfig = getPropertySpecificSettings();

		$roomUid = (int) jomresGetParam($_REQUEST, 'roomUid', 0);
		$clone = (int) jomresGetParam($_REQUEST, 'clone', 0);

		$output = array();
		$pageoutput = array();
		$max_max_people = 100;

		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($defaultProperty);

		$basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');

		$cancelText = jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false);
		$deleteText = jr_gettext('_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE', false);
		$saveText = jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE', false);

		if ($mrConfig[ 'singleRoomProperty' ] == '0') { //MRPs
		
			$room_features_uid		  = '';
			$room_name				  = '';
			$room_number				= '';
			$room_floor				 = '';
			$room_classes_uid		   = false;
			$max_people				 = '10';
			$singleperson_suppliment	= 0;
			$room_tagline	 			= '';
			$room_description		   = '';

			if ($roomUid > 0 && $basic_room_details->get_room($roomUid)) {

				$room_classes_uid		   = $basic_room_details->room['room_classes_uid'];
				$room_features_uid		  = $basic_room_details->room['room_features_uid'];
				$room_name				  = $basic_room_details->room['room_name'];
				$room_number				= $basic_room_details->room['room_number'];
				$room_floor				 = $basic_room_details->room['room_floor'];
				$max_people				 = $basic_room_details->room['max_people'];
				$singleperson_suppliment	= $basic_room_details->room['singleperson_suppliment'];
				$room_tagline	 			= $basic_room_details->room['tagline'];
				$room_description		   = $basic_room_details->room['description'];
				
			}

			//dropdown with room types assigned to this property type
			$classOptions = array();
			foreach ($basic_property_details->this_property_room_classes as $key => $roomClass) {
				if (!is_null($roomClass)) {
					$classOptions[] = jomresHTML::makeOption($key, $roomClass[ 'abbv' ]);
				}
			}
			$output[ 'TYPEDROPDOWN' ] = jomresHTML::selectList($classOptions, 'roomClasses', 'class="inputbox" size="1"', 'value', 'text', $room_classes_uid);

			//room features TODO: build a class for room features
			$ptype_id = $basic_property_details->ptype_id;

			if ($roomUid > 0) {
				$roomFeaturesArray = explode(',', $room_features_uid);
			} else {
				$roomFeaturesArray = array();
			}

			$featureListTxt = '';
			$query = "SELECT room_features_uid,feature_description,ptype_xref FROM #__jomres_room_features WHERE property_uid = '".(int) $defaultProperty."' OR property_uid = '0' ORDER BY feature_description ";
			$roomFeaturesList = doSelectSql($query);
			foreach ($roomFeaturesList as $roomFeature) {
				$checked = '';
				if ($roomFeature->ptype_xref) {
					$ptype_xref = unserialize($roomFeature->ptype_xref);
					if (in_array($ptype_id, $ptype_xref)) {
						if (in_array(($roomFeature->room_features_uid), $roomFeaturesArray)) {
							$checked = 'checked';
						}
						$featureListTxt .= '<input type="checkbox" name="features_list[]" value="'.($roomFeature->room_features_uid).'" '.$checked.' >'.jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $roomFeature->room_features_uid, stripslashes($roomFeature->feature_description), false, false).'<br>';
					}
				} else {
					if (in_array(($roomFeature->room_features_uid), $roomFeaturesArray)) {
						$checked = 'checked';
					}
					$featureListTxt .= '<input type="checkbox" name="features_list[]" value="'.($roomFeature->room_features_uid).'" '.$checked.' >'.jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $roomFeature->room_features_uid, stripslashes($roomFeature->feature_description), false, false).'<br>';
				}
			}

			$output[ 'MAXPEOPLE_DROPDOWN' ] = jomresHTML::integerSelectList(1, $max_max_people, 1, 'max_people', '', $max_people);

			$output[ 'ROOMNAME' ]				   = $room_name;
			$output[ 'ROOMNUMBER' ]				 = $room_number;
			$output[ 'ROOMFLOOR' ]				  = $room_floor;
			$output[ 'FEATURES' ]				   = $featureListTxt;
			$output[ 'SUPPLIMENT' ]				 = $singleperson_suppliment;
			$output[ 'ROOM_TAGLINE' ]	 			= $room_tagline;
			$output[ 'ROOM_DESCRIPTION' ]		   = $room_description;
			
			$output[ 'IMAGE' ] = '<img src="'.getImageForProperty('room', $defaultProperty, (int) $roomUid).'" />';

			$output[ 'HTYPE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', false, false);
			$output[ 'HNAME' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', false, false);
			$output[ 'HNUMBER' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', false, false);
			$output[ 'HFLOOR' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false, false);
			$output[ 'HMAXPEOPLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false, false);
			$output[ 'HFEATURES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', false, false);
			$output[ 'HSUPPLIMENT' ] = jr_gettext('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', false, false);
			$output[ 'SUPPLIMENT_DESC' ] = jr_gettext('_JOMRES_COM_SPS_EDITROOM_DESC', '_JOMRES_COM_SPS_EDITROOM_DESC', false, false);
			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_EB_HROOM_DETAILS', '_JOMRES_COM_MR_EB_HROOM_DETAILS', false);
			$output[ 'HROOM_TAGLINE' ] = jr_gettext('_JOMRES_ROOM_TAGLINE', '_JOMRES_ROOM_TAGLINE', false);
			$output[ 'HROOM_DESCRIPTION' ] = jr_gettext('_JOMRES_ROOM_DESCRIPTION', '_JOMRES_ROOM_DESCRIPTION', false);

			if ($jrConfig[ 'allowHTMLeditor' ] == '1') {
				$width = '95%';
				$height = '250';
				$col = '20';
				$row = '3';

				$output[ 'ROOM_DESCRIPTION' ] = editorAreaText('room_description', $room_description, 'room_description', $width, $height, $col, $row);
			} else {
				jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.js');
				jomres_cmsspecific_addheaddata('css', JOMRES_NODE_MODULES_RELPATH.'simple-cmeditor/dist/', 'simplemde.min.css');
				
				$output['SIMPLEMDE_JAVASCRIPT'] = '
					<script type="text/javascript">
					jomresJquery(document).ready(function () {
						var buttons =  ["bold", "italic", "heading", "strikethrough" , "|" , "unordered-list" , "ordered-list" , "clean-block" , "image" , "table" , "horizontal-rule" , "|", "preview" ];
						var simplemde = new SimpleMDE({ element: document.getElementById("room_description") ,toolbar: buttons, });
					});
					</script>';

				$output[ 'MARKDOWN_BUTTON' ] = $MiniComponents->specificEvent('06000', 'show_markdown_modal', array('output_now' => false));
				
				$output[ 'ROOM_DESCRIPTION' ] = '<textarea class="inputbox form-control" cols="70" rows="5" id="room_description" name="room_description">'.jomres_remove_HTML( $room_description , '').'</textarea>';
			}

			if ($clone > 0) {
				$output[ 'ROOMUID' ] = 0;
			} else {
				$output[ 'ROOMUID' ] = $roomUid;
			}

			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), $cancelText);
			$jrtb .= $jrtbar->toolbarItem('save', '', $saveText, true, 'save_resource');
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$pageoutput[] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('edit_resource.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->displayParsedTemplate();
		} else { //SRPs
			$room_classes_uid = false;
			$max_people = '10';

			if ($roomUid > 0 && $basic_room_details->get_room($roomUid)) {
				$room_classes_uid = $basic_room_details->room['room_classes_uid'];
				$max_people = $basic_room_details->room['max_people'];
			}

			//dropdown with room types assigned to this property type
			$classOptions = array();
			foreach ($basic_property_details->this_property_room_classes as $key => $roomClass) {
				if (!is_null($roomClass)) {
					$classOptions[] = jomresHTML::makeOption($key, $roomClass[ 'abbv' ]);
				}
			}
			$output[ 'DROPDOWNLIST' ] = jomresHTML::selectList($classOptions, 'roomClasses', 'class="inputbox" size="1"', 'value', 'text', $room_classes_uid);

			$output[ 'MAXPEOPLE_DROPDOWN' ] = jomresHTML::integerSelectList(1, $max_max_people, 1, 'max_people', '', $max_people);

			if ($clone > 0) {
				$output[ 'ROOMUID' ] = 0;
			} else {
				$output[ 'ROOMUID' ] = $roomUid;
			}

			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=list_resources'), $cancelText);
			$jrtb .= $jrtbar->toolbarItem('save', '', $saveText, true, 'save_resource');
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV');
			$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV');
			$output[ '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE');

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('edit_SRP_propertytype.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->displayParsedTemplate();
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN');
		$output[ ] = jr_gettext('_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_ROOM_DELETE', '_JOMRES_COM_MR_ROOM_DELETE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_SAVE', '_JOMRES_COM_MR_SAVE');
		$output[ ] = jr_gettext('_JOMRES_UPLOAD_IMAGE', '_JOMRES_UPLOAD_IMAGE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
