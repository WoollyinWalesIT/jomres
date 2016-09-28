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

class j06000view_agent
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			$this->shortcode_data = array (
				"task" => "view_agent",
				"info" => "_JOMRES_SHORTCODES_06000VIEW_AGENT",
				"arguments" => array (
					array (
						"argument" => "property_uid",
						"arg_info" => "_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID",
						"arg_example" => "1",
						),
					array (
						"argument" => "id",
						"arg_info" => "_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID",
						"arg_example" => "1",
						)
					)
				);
			return;
			}
		$MiniComponents->triggerEvent( '01004', $componentArgs ); // optional
		$MiniComponents->triggerEvent( '01005', $componentArgs ); // optional
		$MiniComponents->triggerEvent( '01006', $componentArgs ); // optional
		$MiniComponents->triggerEvent( '01007', $componentArgs ); // optional

		$output     = array ();
		$this->retVals = '';
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$property_manager_xref = get_showtime( 'property_manager_xref' );
		if ( is_null( $property_manager_xref ) )
			{
			$property_manager_xref = build_property_manager_xref_array();
			}
		
		if ( isset($componentArgs['property_uid']) || $_REQUEST['property_uid'] )
			{
			if ( isset( $componentArgs['property_uid']) )
				{
				$property_uid = (int)$componentArgs['property_uid'];
				}
			elseif(isset($_REQUEST['property_uid']))
				{
				$property_uid = (int)$_REQUEST['property_uid'];
				}

			if ( array_key_exists( $property_uid ,  $property_manager_xref ) )
				{
				$manager_id =  $property_manager_xref[ $property_uid ];
				}
			else
				{
				return;
				}
			}
		else
			{
			$manager_id = jomresGetParam( $_REQUEST, 'id', 0 );
			}

		$query  = "SELECT manager_uid  FROM #__jomres_managers WHERE userid  = " . (int) $manager_id;
		$result = doSelectSql( $query, 1 );
		if ( !$result ) // this id doesn't correspond to a manager in the system, progress no further
			return;
		
		$output[ 'HFIRSTNAME' ]             = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME' );
		$output[ 'HSURNAME' ]               = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_SURNAME', '_JOMRES_COM_MR_DISPGUEST_SURNAME' );
		$output[ 'HHOUSE' ]                 = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_HOUSE', '_JOMRES_COM_MR_DISPGUEST_HOUSE' );
		$output[ 'HSTREET' ]                = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_STREET', '_JOMRES_COM_MR_DISPGUEST_STREET' );
		$output[ 'HTOWN' ]                  = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_TOWN', '_JOMRES_COM_MR_DISPGUEST_TOWN' );
		$output[ 'HREGION' ]                = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' );
		$output[ 'HCOUNTRY' ]               = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' );
		$output[ 'HPOSTCODE' ]              = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', '_JOMRES_COM_MR_DISPGUEST_POSTCODE' );
		$output[ 'HLANDLINE' ]              = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', '_JOMRES_COM_MR_DISPGUEST_LANDLINE' );
		$output[ 'HMOBILE' ]                = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_MOBILE', '_JOMRES_COM_MR_DISPGUEST_MOBILE' );
		$output[ 'HFAX' ]                   = jr_gettext( '_JOMRES_COM_MR_DISPGUEST_FAX', '_JOMRES_COM_MR_DISPGUEST_FAX' );
		$output[ 'HEMAIL' ]                 = jr_gettext( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL' );
		$output[ '_JOMRES_AGENT_DETAILS' ]  = jr_gettext( '_JOMRES_AGENT_DETAILS', '_JOMRES_AGENT_DETAILS' );
		$output[ '_JOMRES_AGENT_LISTINGS' ] = jr_gettext( '_JOMRES_AGENT_LISTINGS', '_JOMRES_AGENT_LISTINGS' );

		$query       = "SELECT firstname,surname,house,street,town,county,country,postcode,tel_landline,tel_mobile,email FROM #__jomres_guest_profile WHERE cms_user_id = " . (int) $manager_id . " LIMIT 1";
		$managerData = doSelectSql( $query );

		if ( count( $managerData ) > 0 )
			{
			foreach ( $managerData as $data )
				{
				$output[ 'FIRSTNAME' ] = $data->firstname;
				$output[ 'SURNAME' ]   = $data->surname;
				$output[ 'HOUSE' ]     = $data->house;
				$output[ 'STREET' ]    = $data->street;
				$output[ 'TOWN' ]      = $data->town;
				$output[ 'REGION' ]    = $data->county;
				if ( is_numeric( $data->county ) )
					{
					$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );
					$output[ 'REGION' ] = jr_gettext( "_JOMRES_CUSTOMTEXT_REGIONS_" . $data->county, $jomres_regions->regions[ $data->county ][ 'regionname' ], false, false );
					}
				else
					$output[ 'REGION' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_PROPERTY_REGION' . $data->county, $data->county, false, false );
				$output[ 'COUNTRY' ]   = getSimpleCountry( $data->country );
				$output[ 'POSTCODE' ]  = $data->postcode;
				$output[ 'LANDLINE' ]  = $data->tel_landline;
				$output[ 'MOBILE' ]    = $data->tel_mobile;
				$output[ 'EMAIL' ]     = jomres_hide_email($data->email);

				if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . 'userimages' . JRDS . "userimage_" . $manager_id . ".jpg" ) ) 
					$output[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH . 'userimages/userimage_' . $manager_id . '_thumbnail.jpg';
				}
			}
/* 		else
			{
			echo "Sorry, no manager data is available for that property";
			return;
			} */
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'view_agent.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$template = $tmpl->getParsedTemplate();
		
		if ( !isset($componentArgs[ 'output_now' ]))
			$componentArgs[ 'output_now' ] = true;

		if ($componentArgs[ 'output_now' ])
			echo $template;
		else
			$this->retVals = $template;

		if ( $componentArgs[ 'output_now' ] ) // We'll also include a list of the manager's properties.
			{
			$property_uids = array ();
			foreach ( $property_manager_xref as $property_id => $m_id )
				{
				if ( $m_id == $manager_id )
					{
					$property_uids[ ] = $property_id;
					}
				}
			
			$gOr = genericOr($property_uids , "propertys_uid");
			$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE approved = 1 AND `published` = 1 AND propertys_uid IN (".jomres_implode($property_uids).") ";
			$result = doSelectSql($query);

			$property_uids = array ();
			foreach ( $result as $property)
				{
				$property_uids[ ] = $property->propertys_uid ;
				}
			
			$componentArgs                    = array ();
			$componentArgs[ 'propertys_uid' ] = $property_uids;
			$MiniComponents->specificEvent( '01010', 'listpropertys', $componentArgs );
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}