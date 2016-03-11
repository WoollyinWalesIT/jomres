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

class j16000show_license_message
	{
	function __construct($componentArgs)
		{
		jr_import( 'minicomponent_registry' );
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		
		return;
		
		if ( $MiniComponents->template_touch )
			{$this->template_touchable = false;return;}

		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;

		if (isset($componentArgs[ 'as_modal' ]))
			$as_modal = $componentArgs[ 'as_modal' ];
		else
			$as_modal = true;
	
		jr_import( 'jomres_check_support_key' );
		$key_validation  = new jomres_check_support_key( JOMRES_SITEPAGE_URL_ADMIN . "&task=showplugins" );
		
		$this->key_valid = $key_validation->key_valid;

		//$this->key_valid = false; // for testing
		
		if (!$this->key_valid)
			{
			$output=array();
			$output[ 'LICENSE_VALID' ] = "false";
			if ($key_validation->key_status == "Expired")
				{
				$output['TITLE'] = "Yikes, your license has expired!";
				}
			else
				{
				$output['TITLE'] = "Boo :( You do not have a Download and Support license!";
				}
			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			if ($as_modal)
				$tmpl->readTemplatesFromInput( 'license_warning_modal.html' );
			else
				$tmpl->readTemplatesFromInput( 'license_warning.html' );
			$modal_warning = $tmpl->getParsedTemplate();
			}
		else
			$modal_warning = '';
	
		if ( $output_now )
			echo $modal_warning;
		else
			$this->retVals = $modal_warning;

		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
