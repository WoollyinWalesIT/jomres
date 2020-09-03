<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06002webhooks_core {	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	function __construct() {
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ) {
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "webhooks_core",
				"info" => "_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN",
				"arguments" => array ()
				);
			return;
			}
		$ePointFilepath=get_showtime('ePointFilepath');
		
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		$manager_2_property_uid_xref_array = build_property_manager_xref_array();
		
		// We don't use the authorisedProperties variable in jrUser because super property managers contain the ids of all properties. When a webhook is triggered, the currently "assigned" manager's id is used to find webhook data, so here we have to find the actual assigned manager's ids and highlight to the user which properties will actually have the created webhoooks triggered for them.
		
		$manager_assigned_properties = array();
		
		 if ( !empty($manager_2_property_uid_xref_array) ) {
			foreach ( $manager_2_property_uid_xref_array as $property_uid => $manager_id ) {
				if ( $manager_id == $thisJRUser->id ) {
					 $manager_assigned_properties[] = $property_uid;
				}
			}
		}

		if ( empty($manager_assigned_properties) ) {
			$output = array();
			$pageoutput = array();
			$output['MANAGER_PROPERTIES_MESSAGE'] = jr_gettext('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'WEBHOOKS_MANAGER_PROPERTIES_NONE', false);
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND  );
			$tmpl->readTemplatesFromInput( 'manager_properties_none.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$manager_properties_template = $tmpl->getParsedTemplate();
		} else {
			
			
			$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
			$property_names = $current_property_details->get_property_name_multi($manager_assigned_properties);
			$rows = array();
			foreach ( $property_names as $property_name ) {
				$r = array();
				$r['PROPERTY_NAME'] = $property_name;
				$rows[]=$r;
			}
			
			$output = array();
			$pageoutput = array();
			$output['MANAGER_PROPERTIES_MESSAGE'] = jr_gettext('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', false);
			$output['_JRPORTAL_PROPERTIES_PROPERTYNAME'] = jr_gettext('_JRPORTAL_PROPERTIES_PROPERTYNAME', '_JRPORTAL_PROPERTIES_PROPERTYNAME', false);
			
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND  );
			$tmpl->readTemplatesFromInput( 'manager_properties.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$manager_properties_template = $tmpl->getParsedTemplate();
		}
		
		   
			
		$output = array();
		$pageoutput = array();
		
		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$all_webhooks = $webhooks->get_all_webhooks();

		$toolbar = jomres_singleton_abstract::getInstance( 'jomresItemToolbar' );

		$yesno = array();
		$yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
	
		$rows = array();
		if (!empty($all_webhooks)) {
			foreach ($all_webhooks as $webhook){
				if ($thisJRUser->id == $webhook['manager_id']) {
					$r=array();
					$r['INTEGRATION_ID']	= $webhook['id'];
					$r['URL']  = $webhook['settings']['url'];

					$r['ENABLED']  = jomresHTML::selectList($yesno, 'enabled', 'onchange="toggle_enabled('.$webhook['id'].');" size="1"', 'value', 'text', $webhook['enabled'] , false);
					$toolbar->newToolbar();
					$toolbar->addItem( 'fa fa-pencil-square-o', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL .'&task=edit_integration&id='.$r['INTEGRATION_ID'] ), jr_gettext( 'COMMON_EDIT', 'COMMON_EDIT', false ) );
					$r['EDITLINK']=$toolbar->getToolbar();
					$rows[]=$r;
				}
				// 
				

			}
		}

		$output['WEBHOOKS_INTEGRATION_URL']	 =jr_gettext('WEBHOOKS_INTEGRATION_URL', 'WEBHOOKS_INTEGRATION_URL', false);
		$output['WEBHOOKS_INTEGRATION_ID']	  =jr_gettext('WEBHOOKS_INTEGRATION_ID', 'WEBHOOKS_INTEGRATION_ID', false);

		$output['MANAGER_PROPERTIES']	  = $manager_properties_template;
		
		$toolbar->newToolbar();
		$toolbar->addItem( 'icon-edit', 'btn btn-info', '', jomresURL( JOMRES_SITEPAGE_URL . '&task=edit_integration&id=' ), jr_gettext( 'COMMON_NEW', 'COMMON_NEW', false ) );
		$output['JOMRESTOOLBAR']=$toolbar->getToolbar();

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND  );
		$tmpl->readTemplatesFromInput( 'list_integrations.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'rows', $rows );
		$tmpl->displayParsedTemplate();
	}



	function getRetVals() {
		return null;
	}
}