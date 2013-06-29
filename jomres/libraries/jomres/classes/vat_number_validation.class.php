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

class vat_number_validation
	{
	function __construct( $guest_id )
		{
		$this->euro_countries      = $this->get_euro_countries();
		$this->guest_id            = (int) $guest_id;
		$this->validation_messages = array ();
		}

	function validate_vat_number()
		{
		$query  = "SELECT `vat_number`,`vat_number_validated` FROM #__jomres_guest_profile WHERE cms_user_id = " . (int) $this->guest_id . " LIMIT 1";
		$result = doSelectSql( $query, 2 );

		$this->vat_number           = $result[ 'vat_number' ];
		$this->vat_number_validated = $result[ 'vat_number_validated' ];

		if ( $this->vat_number_validated == 0 )
			{
			$response = $this->vies_check( $this->vat_number );
			$messages = json_encode( $this->validation_messages );

			$this->vat_number = $this->validation_messages[ 'clean_vat_no' ];
			if ( $this->validation_messages[ 'result' ] )
				{
				$query = "UPDATE #__jomres_guests SET `vat_number`='" . $this->vat_number . "', `vat_number_validated`=1,`vat_number_validation_response`='" . $messages . "' WHERE `mos_userid`=" . (int) $this->guest_id;
				doInsertSql( $query, '' );

				$query = "UPDATE #__jomres_guest_profile SET `vat_number`='" . $this->vat_number . "',`vat_number_validated`=1,`vat_number_validation_response`='" . $messages . "' WHERE cms_user_id = " . (int) $this->guest_id;
				doInsertSql( $query, '' );
				}
			else
				{
				$query = "UPDATE #__jomres_guests SET `vat_number`='" . $this->vat_number . "',`vat_number_validated`=0,`vat_number_validation_response`='" . $messages . "' WHERE `mos_userid`=" . (int) $this->guest_id;
				doInsertSql( $query, '' );

				$query = "UPDATE #__jomres_guest_profile SET `vat_number`='" . $this->vat_number . "',`vat_number_validated`=0,`vat_number_validation_response`='" . $messages . "' WHERE cms_user_id = " . (int) $this->guest_id;
				doInsertSql( $query, '' );
				}
			}
		}

	function vies_check( $vat_number )
		{
		if ( $vat_number != '' )
			{
			$vatNumber   = str_replace( array ( ' ', '.', '-', ',', ', ' ), '', $vat_number );
			$countryCode = substr( $vatNumber, 0, 2 );
			$vatNumber   = substr( $vatNumber, 2, strlen( $vatNumber ) );

			if ( strlen( $countryCode ) != 2 || is_numeric( substr( $countryCode, 0, 1 ) ) || is_numeric( substr( $countryCode, 1, 2 ) ) )
				{
				$this->validation_messages = array ( 'result' => false, 'message' => jr_gettext( '_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', _JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX, false ), 'clean_vat_no' => $countryCode . $vatNumber );

				return false;
				}

			require_once( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'libraries' . JRDS . 'nusoap' . JRDS . 'nusoap.php' );

			$client = new nusoap_client( "http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl", 'wsdl' );
			$params = array ( 'countryCode' => $countryCode, 'vatNumber' => $vatNumber );
			$result = $client->call( 'checkVat', $params );

			$results = array ();
			foreach ( $result as $key => $val )
				{
				$key = filter_var( $key, FILTER_SANITIZE_SPECIAL_CHARS );
				$val = filter_var( $val, FILTER_SANITIZE_SPECIAL_CHARS );
				$val = str_replace( "&#10;", " ", $val );

				$results[ $key ] = $val;
				}

			if ( $result[ 'valid' ] != "true" )
				{
				$this->validation_messages = array ( 'result' => false, 'message' => jr_gettext( '_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', _JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE, false ), 'response_content' => $results, 'clean_vat_no' => $countryCode . $vatNumber );

				return false;
				}
			else
				{
				$this->validation_messages = array ( 'result' => true, 'message' => jr_gettext( '_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', _JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED, false ), 'response_content' => $results, 'clean_vat_no' => $countryCode . $vatNumber );

				return true;
				}
			}
		$this->validation_messages = array ( 'result' => false, 'message' => jr_gettext( '_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', _JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED, false ), 'clean_vat_no' => '' );

		return false;
		}


	function get_euro_countries()
		{
		return array ( "AT" => "Austria", "BE" => "Belgium", "CY" => "Cyprus", "CZ" => "Czech R.ublic", "DK" => "Denmark", "EE" => "Estonia", "FI" => "Finland", "FR" => "France", "DE" => "Germany", "GR" => "Greece", "HU" => "Hungary", "IE" => "Ireland", "IT" => "Italy", "LV" => "Latvia", "LT" => "Lithuania", "LU" => "Luxembourg", "MT" => "Malta", "NL" => "Netherlands", "PL" => "Poland", "PT" => "Portugal", "SK" => "Slovakia", "SI" => "Slovenia", "ES" => "Spain", "SE" => "Sweden", "GB" => "United Kingdom", "RO" => "Romania", "BG" => "Bulgaria" );
		}
	}

?>