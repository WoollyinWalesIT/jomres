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

class j16000jomres_system_info
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
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;
		
		$output     = array ();
		$pageoutput = array ();
		
		//advanced site config set to no warning
		$output['ADVANCED_SITE_CONFIG_WARNING']='';
		$output['ADVANCED_SITE_CONFIG_WARNING_HIGHLIGHT']='';
		if ($jrConfig['advanced_site_config'] == "0")
			{
			$output['ADVANCED_SITE_CONFIG_WARNING']= jr_gettext( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', false );
			$output['ADVANCED_SITE_CONFIG_WARNING_HIGHLIGHT']="alert alert-warning";
			}
		
		//max input vars set to 1000 warning only if micromanage is enabled
		$output[ 'MAX_INPUT_VARS_CHECK' ] = max_input_vars_test();
		
		//max get vars set to 512 or less warning for datatables
		$output[ 'SUHOSIN_GET_MAX_VARS_CHECK' ] = suhosin_get_max_vars_test();
		
		//jomres version
		$configfile = JOMRESPATH_BASE . JRDS . "jomres_config.php"; // This is to pull in the Jomres version from mrConfig
		include( $configfile );
		
		$this_version = get_jomres_current_version();
		$latest_version = get_latest_jomres_version();
		
		if ( empty( $latest_version ) ) 
			{
			$output[ 'LATEST_JOMRES_VERSION' ] .= "Sorry, could not get latest version of Jomres, is there a firewall preventing communication with http://updates.jomres4.net ?<p>";
			}
		else
			{
			$current_version_is_uptodate   = check_jomres_version();
			
			$output[ 'HIGHLIGHT' ] = "";
			$output[ 'ALERT' ]     = "";
			$output[ 'EFFECT' ]    = "";
			
			if ( !$current_version_is_uptodate )
				{
				$output[ 'HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
				$output[ 'ALERT' ]     = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN . '&task=updates" >'. jr_gettext( '_JOMRES_VERSIONCHECK_VERSIONWARNING', '_JOMRES_VERSIONCHECK_VERSIONWARNING', false ).'</a>';
				$output[ 'EFFECT' ]    = "<script>jomresJquery(document).ready(function() { jomresJquery( \"#version_check_warning\" ).effect( 'highlight' ); });</script> ";
				}

			$output[ '_JOMRES_VERSIONCHECK_THISJOMRESVERSION' ]   = jr_gettext( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', false );
			$output[ '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION' ] = jr_gettext( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', false );


			$output[ 'LATEST_JOMRES_VERSION' ] = $latest_version;
			$output[ 'THIS_JOMRES_VERSION' ]   = $this_version;
			}

		//recommended plugins not installed warning
		$output[ 'PLUGIN_CHECK' ] = plugin_check();
		
		//license key not entered warning
		if ( trim( $jrConfig['licensekey'] ) == "" )
			{
			$output[ '_JOMRES_PRODUCT_INFORMATION' ]  = jr_gettext( '_JOMRES_PRODUCT_INFORMATION', '_JOMRES_PRODUCT_INFORMATION', false );
			$output[ '_JOMRES_PRODUCT_INFORMATION2' ] = jr_gettext( '_JOMRES_PRODUCT_INFORMATION2', '_JOMRES_PRODUCT_INFORMATION2', false );
			}

		//full access control enabled warning
		$output[ 'ACCESS_CONTROL_HIGHLIGHT' ] = '';
		$output[ 'ACCESS_CONTROL_ALERT' ]     = '';
		$access_control_check                 = jomresAccessControlSanityCheck();
		if ( !$access_control_check[ 'result' ] )
			{
			$output[ 'ACCESS_CONTROL_HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
			$output[ 'ACCESS_CONTROL_ALERT' ]     = $access_control_check[ 'message' ];
			}
		
		//wordpress Page with [jomres:xx-XX] not created yet
		$output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = '';
		$output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ]     = '';
		if ( this_cms_is_wordpress() && (int)get_showtime('itemid') == 0 )
			{
			$output[ 'JOMRES_DEFAULT_SHORTCODE_HIGHLIGHT' ] = ( using_bootstrap() ? "alert alert-error" : "ui-state-error" );
			$output[ 'JOMRES_DEFAULT_SHORTCODE_ALERT' ] = jr_gettext('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'JOMRES_DEFAULT_SHORTCODE_ALERT', false);
			}
		
		//review text
		if (this_cms_is_wordpress() )
			{
			$output['REVIEW_SITE_URL'] = 'https://wordpress.org/support/view/plugin-reviews/jomres';
			$output['REVIEW_SITE_TEXT'] = 'Wordpress Plugins site';
			}
		else
			{
			$output['REVIEW_SITE_URL'] = 'http://extensions.joomla.org/extensions/extension/vertical-markets/booking-a-reservations/jomres';
			$output['REVIEW_SITE_TEXT'] = 'Joomla! Extensions Directory';
			}
		
		$output['CAPTERRA_REVIEW_SITE_URL'] = 'http://www.capterra.com/reservations-software/reviews/134469/Jomres/Woollyinwales%20IT/new';
		$output['CAPTERRA_REVIEW_SITE_TEXT'] = 'Capterra';
		
		// Property type checks //
		// We have a situation where a property type needs to be cross-referenced with room types, this check will ascertain if any property types are missing room types
		
		$output['PROPERTY_TYPE_WARNING'] = '';
		$property_types_requiring_attention = array();
		
		$query = "SELECT room_classes_uid FROM #__jomres_room_classes";
		$room_types = doSelectSql($query);

 		$roomtype_propertytype_xref = array();
		$query = "SELECT roomtype_id , propertytype_id FROM #__jomres_roomtypes_propertytypes_xref ";
		$result = doSelectSql( $query );
		if (count($result)>0)
			{
			foreach ($result as $r)
				{
				$all_property_types_that_have_room_types[] = $r->propertytype_id;
				}
			}

		if (count($room_types)>0)
			{
			$query = "SELECT `id`,`ptype`,`mrp_srp_flag` FROM #__jomres_ptypes ORDER BY `order` ASC";
			$ptypeList = doSelectSql( $query );
			if (count($ptypeList) > 0)
				{
				foreach ( $ptypeList as $ptype)
					{
					if ($ptype->mrp_srp_flag == "0" || $ptype->mrp_srp_flag == "1")
						{
						if (!in_array($ptype->id,$all_property_types_that_have_room_types))
							{
							$property_types_requiring_attention[] = array ("ptype_abbv"=>$ptype->ptype , "process" => $ptype->mrp_srp_flag);
							}
						}
					}
				}
			
			if (count($property_types_requiring_attention)>0)
				{
				$o=array();
				$po=array();
				$rows=array();
				$o['_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES'] = jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES',false);
				$o['HPTYPE']= jr_gettext( '_JOMRES_FRONT_PTYPE', '_JOMRES_FRONT_PTYPE', false );
				$o[ '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD' ]=jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', '_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD',false );
				$o['LINK'] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN . '&task=listGlobalroomTypes'.'" class="btn btn-primary">'.jr_gettext('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT','_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT',false).'</a>';

				foreach ($property_types_requiring_attention as $property_type)
					{
					$r=array();
					$r['PROPERTY_TYPE'] = $property_type['ptype_abbv'];
					if ( $property_type['process'] == "0")
						$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '_JOMRES_PROPERTYTYPE_FLAG_HOTEL',false );
					else
						$r['MANAGEMENT_PROCESS'] =  jr_gettext( '_JOMRES_PROPERTYTYPE_FLAG_VILLA', '_JOMRES_PROPERTYTYPE_FLAG_VILLA',false );
					$rows[]=$r;
					}
				
				$po[ ] = $o;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->addRows( 'pageoutput', $po );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->readTemplatesFromInput( 'list_ptypes_without_room_types.html' );
				$output['PROPERTY_TYPE_WARNING'] = $tmpl->getParsedTemplate();
				}
			}
		
		// End property type checks //
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->readTemplatesFromInput( 'jomres_system_info.html' );
		
		if ( $output_now )
			$tmpl->displayParsedTemplate();
		else
			$this->retVals = $tmpl->getParsedTemplate();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
