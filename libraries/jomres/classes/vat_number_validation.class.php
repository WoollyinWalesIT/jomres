<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class vat_number_validation
{
    public function __construct()
    {
        $this->vat_number = '';
        $this->vat_number_validated = false;
        $this->validation_messages = array();
        $this->validation_messages[ 'result' ] = false;
        $this->validation_messages[ 'message' ] = 'VIES not yet called';
        $this->country = '';
		
		jr_import('jomres_encryption');
		$this->jomres_encryption = new jomres_encryption();
    }

    public function get_subject($type = '', $arguments = array())
    {

		
        switch ($type) {
            case 'guest_registered_byguest_id':
                    $id = $arguments['guest_id'];
                    $property_uid = $arguments['property_uid'];
                    $query = 'SELECT `enc_vat_number`,`vat_number_validated`,`country`,`vat_number_validation_response` FROM #__jomres_guests WHERE guests_uid = '.(int) $id.' AND property_uid = '.(int) $property_uid.' LIMIT 1';
                    $result = doSelectSql($query, 2);
                    if (!empty($result)) {
                        $this->vat_number = $this->jomres_encryption->decrypt($result[ 'enc_vat_number' ]);
                        $this->vat_number_validated = $result[ 'vat_number_validated' ];
                        $this->country = $result[ 'country' ];
                        $this->vat_number_validation_response = $result[ 'vat_number_validation_response' ];
                    } else {
                        $this->vat_number = '';
                        $this->vat_number_validated = false;
                        $this->country = false;
                        $this->vat_number_validation_response = false;
                    }
                break;

            case 'buyer_registered_byprofile_id':
                    $id = $arguments['profile_id'];
                    $query = 'SELECT `enc_vat_number`,`vat_number_validated`,`country`,`vat_number_validation_response` FROM #__jomres_guest_profile WHERE cms_user_id = '.(int) $id.' LIMIT 1';
                    $result = doSelectSql($query, 2);
                    if (!empty($result)) {
                        $this->vat_number = $this->jomres_encryption->decrypt($result[ 'enc_vat_number' ]);
                        $this->vat_number_validated = $result[ 'vat_number_validated' ];
                        $this->country = $result[ 'country' ];
                        $this->vat_number_validation_response = $result[ 'vat_number_validation_response' ];
                    } else {
                        $this->vat_number = '';
                        $this->vat_number_validated = false;
                        $this->country = false;
                        $this->vat_number_validation_response = false;
                    }
                break;

            case 'property':
                    $property_uid = $arguments['property_uid'];
                    $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');

                    $mrConfig = getPropertySpecificSettings($property_uid);
                    $current_property_details->gather_data($property_uid);
                    $this->vat_number = $mrConfig[ 'property_vat_number' ];
                    if (!isset($mrConfig[ 'vat_number_validated' ])) {
                        $mrConfig[ 'vat_number_validated' ] = false;
                    }

                    $this->vat_number_validated = $mrConfig[ 'vat_number_validated' ];
                    $this->country = $current_property_details->property_country_code;

                break;

            case 'site':
                    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
                    $jrConfig = $siteConfig->get();
                    $this->vat_number_validated = '1';
                    $this->vat_number = trim($jrConfig[ 'business_vat_number' ]);
                    $this->country = $this->get_adjusted_country_code(substr(trim($jrConfig['business_vat_number']), 0, 2));
                break;

            default:
                    $this->vat_number = $arguments['vat_number'];
                    $this->vat_number_validated = false;
                    $this->validation_messages = array();
                    $this->country = $this->get_adjusted_country_code(substr($arguments['vat_number'], 0, 2));
                break;
            }
    }

    public function save_subject($type = '', $arguments = array())
    {
        $messages = htmlspecialchars($this->validation_messages [ 'message' ], ENT_QUOTES);
        if ($this->validation_messages[ 'result' ] == true) {
            $validated = '1';
        } else {
            $validated = '0';
        }

        switch ($type) {
            case 'guest_registered_byguest_id':
                    $id = $arguments['guest_id'];
                    $property_uid = $arguments['property_uid'];
                    $query = "UPDATE #__jomres_guests SET `vat_number_validated`='".$validated."',`enc_vat_number`='".$this->jomres_encryption->encrypt($this->validation_messages[ 'clean_vat_no' ])."',`vat_number_validation_response`='".$messages."' WHERE guests_uid = '".(int) $id."' AND `property_uid` = ".(int) $property_uid;
                    if (!doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UPDATE_GUEST', '_JOMRES_MR_AUDIT_UPDATE_GUEST', false))) {
                        trigger_error('Unable to update guest details, mysql db failure', E_USER_ERROR);
                    }
                break;

            case 'guest_registered_byprofile_id':
                    $id = $arguments['profile_id'];
                    $query = "UPDATE #__jomres_guests SET `enc_vat_number`='".$this->jomres_encryption->encrypt($this->validation_messages[ 'clean_vat_no' ])."', `vat_number_validated`='".$validated."',`vat_number_validation_response`='".$messages."' WHERE `mos_userid`=".(int) $id;
                    doInsertSql($query, '');
                    $query = "UPDATE #__jomres_guest_profile SET `enc_vat_number`='".$this->jomres_encryption->encrypt($this->validation_messages[ 'clean_vat_no' ])."',`vat_number_validated`='".$validated."',`vat_number_validation_response`='".$messages."' WHERE cms_user_id = ".(int) $id;
                    doInsertSql($query, '');
                break;

            case 'property':
                    $property_uid = $arguments['property_uid'];
                    $query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' and akey = 'property_vat_number'";
                    $result = doSelectSql($query);
                    if (empty($result)) {
                        $query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','property_vat_number','".$this->validation_messages[ 'clean_vat_no' ]."')";
                    } else {
                        $query = "UPDATE #__jomres_settings SET `value`='".$this->validation_messages[ 'clean_vat_no' ]."' WHERE property_uid = '".(int) $property_uid."' and akey = 'property_vat_number'";
                    }
                    doInsertSql($query, '');
                    $query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $property_uid."' and akey = 'vat_number_validated'";
                    $result = doSelectSql($query);
                    if (empty($result)) {
                        $query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('".(int) $property_uid."','vat_number_validated','".$validated."')";
                    } else {
                        $query = "UPDATE #__jomres_settings SET `value`='".$validated."' WHERE property_uid = '".(int) $property_uid."' and akey = 'vat_number_validated'";
                    }
                    doInsertSql($query, '');
                break;

            case 'site':
                    // We don't (currently) validate Site VAT details, so we'll not offer a "save" option for site vat settings, as this is already covered by Site Config
                break;

            default:
                    $this->vat_number = '';
                    $this->vat_number_validated = false;
                    $this->validation_messages = array();
                    $this->country = '';
                break;
            }
    }

    public function vies_check($vat_number)
    {
        if ($vat_number != '') {
            $vat_number = filter_var($vat_number, FILTER_SANITIZE_SPECIAL_CHARS);
            $vatNumber = str_replace(array(' ', '.', '-', ',', ', '), '', $vat_number);
            $countryCode = substr($vatNumber, 0, 2);
            $vatNumber = substr($vatNumber, 2, strlen($vatNumber));

            if (strlen($countryCode) != 2 || is_numeric(substr($countryCode, 0, 1)) || is_numeric(substr($countryCode, 1, 2))) {
                $this->validation_messages = array('result' => false, 'message' => jr_gettext('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', '_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', false), 'clean_vat_no' => $countryCode.$vatNumber);
                $this->vat_number_validated = '0';

                return false;
            }

            $this->vat_number = $countryCode.$vatNumber;

            //require_once JOMRES_LIBRARIES_ABSPATH.'nusoap'.JRDS.'nusoap.php';

            $client = new nusoap_client('http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl', 'wsdl');
            $params = array('countryCode' => $countryCode, 'vatNumber' => $vatNumber);
            $result = $client->call('checkVat', $params);

            $results = array();

            if (!$result) { // Oddly, at least one valid vat number is returned as false, so we'll double check the response string to see if it contains <valid>true</valid>. If so, we'll manually set the response
                $xmltxt = trim(substr($client->response, strpos($client->response, '<soap:Envelope')));
                if (stristr($xmltxt, '<valid>true</valid>')) {
                    $results[ 'vat_number' ] = $this->vat_number;
                    $result[ 'valid' ] = true;
                }
            }

            foreach ($result as $key => $val) {
                $key = filter_var($key, FILTER_SANITIZE_SPECIAL_CHARS);
                $val = filter_var($val, FILTER_SANITIZE_SPECIAL_CHARS);
                $val = str_replace('&#10;', ' ', $val);

                $results[ $key ] = $val;
            }

            if ($result[ 'valid' ] != 'true') {
                $this->validation_messages = array('result' => false, 'message' => jr_gettext('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', '_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', false), 'response_content' => $results, 'clean_vat_no' => $countryCode.$vatNumber);
                $this->vat_number_validated = '0';

                return false;
            } else {
                $this->validation_messages = array('result' => true, 'message' => jr_gettext('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', '_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', false), 'response_content' => $results, 'clean_vat_no' => $countryCode.$vatNumber);
                $this->vat_number_validated = '1';

                return true;
            }
        }
        $this->validation_messages = array('result' => false, 'message' => '', 'clean_vat_no' => '');
        $this->vat_number_validated = '0';

        return false;
    }

    /**
     * What to do when the parser finds a start element.
     *
     * @param $parser object
     * @param $element_name string name of the element found
     */
    public function startElement($parser, $element_name, $attributes)
    {
        switch ($element_name) {
            case 'VALID': $this->output = true;
                break;
            default:
                $this->output = false;
                break;
        }
    }

    /**
     * What to do when the parser finds a closing element.
     *
     * @param $parser object
     * @param $element_name string name of the element found
     */
    public function endElement($parser, $element_name)
    {
    }

    /**
     * What to do when the parser finds data in the element.
     *
     * @param $parser object
     * @param $xml_data string data found in between tags
     */
    public function characterData($parser, $xml_data)
    {
        if ($this->output) {
            if ($xml_data) {
                if ($xml_data == 'false') {
                    $this->validvatid = false;
                } elseif ($xml_data == 'true') {
                    $this->validvatid = true;
                }
            }
            $this->output = false;
        }
    }
    // The purpose of this method is for it to be passed a country code that's been pulled from a VAT number, and to convert it to a country code that Jomres will recognise. Countries like Greece use EL instead of Jomres' GR, so we need to pass EL, cycle through the xref array until we find that code, then return the key, which would be GR
    public function get_adjusted_country_code($country_code)
    {
        $xref_array = $this->get_euro_country_xref();
        foreach ($xref_array as $jomres_country_code => $vat_number_country_code) {
            if ($country_code == $vat_number_country_code) {
                return $jomres_country_code;
            }
        }
    }

    public function get_euro_countries()
    {
        return array('AT' => 'Austria', 'BE' => 'Belgium', 'HR' => 'Croatia', 'CY' => 'Cyprus', 'CZ' => 'Czech R.ublic', 'DK' => 'Denmark', 'EE' => 'Estonia', 'FI' => 'Finland', 'FR' => 'France', 'DE' => 'Germany', 'GR' => 'Greece', 'HU' => 'Hungary', 'IE' => 'Ireland', 'IT' => 'Italy', 'LV' => 'Latvia', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MT' => 'Malta', 'NL' => 'Netherlands', 'PL' => 'Poland', 'PT' => 'Portugal', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'ES' => 'Spain', 'SE' => 'Sweden', 'GB' => 'United Kingdom', 'RO' => 'Romania', 'BG' => 'Bulgaria', 'HR' => 'Croatia');
    }

    public function get_euro_country_xref() // Greece use different codes, in our database they're GR, but for VAT numbers they're using EL, so we'll need a cross reference in case a new joiner creates the same situation in the future
    {
        return array('AT' => 'AT', 'BE' => 'BE', 'HR' => 'HR', 'CY' => 'CY', 'CZ' => 'CZ', 'DK' => 'DK', 'EE' => 'EE', 'FI' => 'FE', 'FR' => 'FR', 'DE' => 'DE', 'GR' => 'EL', 'HU' => 'HU', 'IE' => 'IE', 'IT' => 'IT', 'LV' => 'LV', 'LT' => 'LT', 'LU' => 'LU', 'MT' => 'MT', 'NL' => 'NL', 'PL' => 'PL', 'PT' => 'PT', 'SK' => 'SK', 'SI' => 'SI', 'ES' => 'ES', 'SE' => 'SE', 'GB' => 'GB', 'RO' => 'RO', 'BG' => 'BG', 'HR' => 'HR');
    }
}
