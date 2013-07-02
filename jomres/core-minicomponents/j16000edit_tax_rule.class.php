<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000edit_tax_rule
	{
	function j16000edit_tax_rule()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$id = intval( jomresGetParam( $_REQUEST, 'id', 0 ) );
		
		$jomres_countries = jomres_singleton_abstract::getInstance( 'jomres_countries' );
		
		$output[ 'PAGETITLE' ] = jr_gettext( '_JRPORTAL_TAX_RULE_EDIT', _JRPORTAL_TAX_RULE_EDIT );
		$output[ '_JRPORTAL_TAXRATES_CODE' ] = jr_gettext( '_JRPORTAL_TAXRATES_CODE', _JRPORTAL_TAXRATES_CODE );
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY );
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' ] = jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', _JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION );
		$output[ '_JRPORTAL_TAXRATES_RATE' ] = jr_gettext( '_JRPORTAL_TAXRATES_RATE', _JRPORTAL_TAXRATES_RATE );
		
		if ($id > 0)
			{
			$query = "SELECT `tax_rate_id`,`country_id`,`region_id` FROM #__jomres_tax_rules WHERE id=".$id." LIMIT 1";
			$tax_rule = doSelectSql($query,2);
			$output[ 'ID' ]          = $id;
			foreach ($jomres_countries->countries as $c)
				{
				if ($c['id'] == $tax_rule[ 'country_id' ])
					{
					$output[ 'COUNTRY' ] = createSimpleCountriesDropdown($c[ 'countrycode' ]);
					break;
					}
				}
			$output[ 'REGION' ] = setupRegions($c[ 'countrycode' ],find_region_name( $tax_rule[ 'region_id' ]));
			
			$output[ 'TAX_RATE' ] = taxrates_makerateDropdown( array (), $tax_rule[ 'tax_rate_id' ], 'tax_rate' );
			}
		else
			{
			$siteConfig       = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig         = $siteConfig->get();
			$output[ 'COUNTRY' ] = createSimpleCountriesDropdown($jrConfig[ 'limit_property_country_country' ],"country",false);
			$output[ 'REGION' ] = setupRegions($jrConfig[ 'limit_property_country_country' ]);
			$output[ 'TAX_RATE' ] = taxrates_makerateDropdown( array (), 1, 'tax_rate' );
			}

		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_tax_rule' );
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_tax_rules", '' );
		$jrtb .= $jrtbar->toolbarItem( 'delete', JOMRES_SITEPAGE_URL_ADMIN . "&task=delete_tax_rule" . jomresURLToken() . "&no_html=1&id=" . $id, '' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$output[ 'JOMRES_SITEPAGE_URL_ADMIN' ] = JOMRES_SITEPAGE_URL_ADMIN;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_tax_rule.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->displayParsedTemplate();
		 
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>