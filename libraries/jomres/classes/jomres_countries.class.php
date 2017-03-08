<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.27
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_countries
{
    public function __construct()
    {
        $this->countries = false;
        $this->get_countries();
    }

    public function get_countries()
    {
		if (is_array($this->countries)) {
			return true;
		}
		
		$this->countries = array();

        $c = jomres_singleton_abstract::getInstance('jomres_array_cache');

        if ($c->isCached('countries')) {
            $this->countries = $c->retrieve('countries');
        } else {
            $query = "SELECT `id`,`countrycode`,`countryname` FROM #__jomres_countries ORDER BY `countryname`";
            $result = doSelectSql($query);
            
			if (!empty($result)) {
                foreach ($result as $country) {
                    $this->countries[ strtoupper($country->countrycode) ] = array('id' => $country->id, 'countrycode' => strtoupper($country->countrycode), 'countryname' => jr_gettext('_JOMRES_CUSTOMTEXT_COUNTRIES_'.$country->id, $country->countryname, false, false));
                }
            }
			
			unset($result);
            
			$c->store('countries', $this->countries);
        }

        return true;
    }

    public function get_country_by_id($id)
    {
        foreach ($this->countries as $country) {
            if ($country[ 'id' ] == $id) {
                return $country;
            }
        }

        return false;
    }
}
