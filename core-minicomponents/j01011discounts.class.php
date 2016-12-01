<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.19
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j01011discounts
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;

            return;
        }
        $property_uids = '';

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = $componentArgs[ 'property_uid' ];
        }
        if (isset($componentArgs[ 'property_uids' ])) {
            $property_uids = $componentArgs[ 'property_uids' ];
        }

        $this->returnValue = array();

        $allPropertiesConfig = jomres_singleton_abstract::getInstance('jomres_config_property_singleton');

        if (is_array($property_uids)) {
            $relevant_properties = array();
            foreach ($property_uids as $property_uid) {
                $tmpConfig = $allPropertiesConfig->load_property_config($property_uid);
                if (isset($tmpConfig['lastminuteactive']) && $tmpConfig['lastminuteactive'] == '1') {
                    $relevant_properties[ $property_uid ][ 'discount_type' ] = 'lastminuteactive';
                    $relevant_properties[ $property_uid ][ 'lastminutethreshold' ] = $tmpConfig['lastminutethreshold'];
                    $relevant_properties[ $property_uid ][ 'lastminutediscount' ] = $tmpConfig['lastminutediscount'];
                } elseif (isset($tmpConfig['wisepriceactive']) && $tmpConfig['wisepriceactive'] == '1') {
                    $relevant_properties[ $property_uid ][ 'discount_type' ] = 'wisepriceactive';
                    $relevant_properties[ $property_uid ][ 'wisepricethreshold' ] = $tmpConfig['wisepricethreshold'];
                    $relevant_properties[ $property_uid ][ 'wiseprice75discount' ] = $tmpConfig['wiseprice75discount'];
                }
            }
            set_showtime('propertylist_discounts', $relevant_properties);
        } else {
            $relevant_properties = get_showtime('propertylist_discounts');

            if (array_key_exists($property_uid, $relevant_properties)) {
                if ($relevant_properties[ $property_uid ][ 'discount_type' ] == 'lastminuteactive') { // Using last minute calculations
                    $lastminutethreshold = $relevant_properties[ $property_uid ][ 'lastminutethreshold' ];
                    $lastminutediscount = $relevant_properties[ $property_uid ][ 'lastminutediscount' ];

                    $todaysDate = date('Y/m/d');
                    $date_elements = explode('/', $todaysDate);
                    $unixTodaysDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $lastminutethreshold, $date_elements[ 0 ]);
                    $latestDate = JSCalmakeInputDates(date('Y/m/d', $unixTodaysDate));

                    $text = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', false, true);
                    $text .= $lastminutediscount;
                    $text .= jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', false, true);
                    $text .= ' '.$latestDate;
                    $text .= jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', false, true);

                    $this->returnValue = array('LASTMINUTE' => $text, 'LASTMINUTECLASS' => 'jomres_message');
                } elseif ($relevant_properties[ $property_uid ][ 'discount_type' ] == 'wisepriceactive') { // Using wiseprice calculations
                    $wisepricethreshold = $relevant_properties[ $property_uid ][ 'wisepricethreshold' ];
                    $wisepricediscount = $relevant_properties[ $property_uid ][ 'wiseprice75discount' ];

                    $todaysDate = date('Y/m/d');
                    $date_elements = explode('/', $todaysDate);
                    $unixTodaysDate = mktime(0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + $wisepricethreshold, $date_elements[ 0 ]);
                    $latestDate = JSCalmakeInputDates(date('Y/m/d', $unixTodaysDate));

                    $text = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', false, true);
                    $text .= (float) $wisepricediscount.jr_gettext('_JOMCOMP_LASTMINUTE_ORMORE', '_JOMCOMP_LASTMINUTE_ORMORE', false, true);
                    $text .= ' '.$latestDate;
                    $text .= jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', false, true);
                    $this->returnValue = array('LASTMINUTE' => $text, 'LASTMINUTECLASS' => 'jomres_message');
                }
            }
        }
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST');
        $output[ ] = jr_gettext('_JOMCOMP_LASTMINUTE_ORMORE', '_JOMCOMP_LASTMINUTE_ORMORE');
        $output[ ] = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE');
        $output[ ] = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID');
        $output[ ] = jr_gettext('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->returnValue;
    }
}
