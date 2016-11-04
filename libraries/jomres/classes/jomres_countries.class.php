<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_countries
	{

	function __construct()
		{
		$this->countries = array ();
		$this->get_countries();
		}

	function get_countries()
		{
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$countries=$c->retrieve('countries');
		
		if ($countries)
			$this->countries=$countries;
		else
			{
			$query       = "SELECT id,countrycode,countryname FROM #__jomres_countries ORDER BY countryname";
			$countryList = doSelectSql( $query );
			if ( count( $countryList ) > 0 )
				{
				foreach ( $countryList as $country )
					{
					$this->countries[ $country->countrycode ] = array ( "id" => $country->id, "countrycode" => $country->countrycode, "countryname" => jr_gettext( "_JOMRES_CUSTOMTEXT_COUNTRIES_" . $country->id, $country->countryname, false, false ) );
					}
				}
			$c->store('countries',$this->countries);
			}

		return $this->countries;
		}

	function get_country_by_id( $id )
		{
		foreach ( $this->countries as $country )
			{
			if ( $country[ 'id' ] == $id ) return $country;
			}

		return false;
		}

	}
