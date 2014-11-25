<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class jomres_property_payment_methods
	{
	private static $configInstance;
	
	public function __construct()
		{
		$this->multi_query_result          = array ();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_property_payment_methods();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}
		
	
	function get_gateways_multi($property_uids)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		
		// First we need to extract those uids that are not already in the $this->multi_query_result var, this (may) reduce the number of properties we need to query
		$temp_array = array ();
		foreach ( $property_uids as $id )
			{
			if ( !array_key_exists( $id, $this->multi_query_result ) ) 
				$temp_array[ ] = $id;
			}
		$property_uids = $temp_array;
		unset ( $temp_array );
			
		if (count($property_uids) > 0)
			{			
			$query        = "SELECT id,prid,plugin FROM #__jomres_pluginsettings WHERE setting = 'active' AND value = '1' AND prid IN (" . implode(',',$property_uids) .") ";
			$propertyData = doSelectSql( $query );
			foreach ( $propertyData as $data )
				{
				$result = $MiniComponents->specificEvent( '03108', $data->plugin, null );
				$tmpgatewaydir  = $result[ 'filepath' ];
				$gatewaydir      = str_replace( JOMRESCONFIG_ABSOLUTE_PATH, get_showtime( 'live_site' ).'/', $tmpgatewaydir );
				$gatewaydir      = str_replace( '\\', '/', $gatewaydir );

				$this->multi_query_result[ $data->prid ][] = array ("gateway" => $data->plugin, "gateway_name" => $result[ 'gatewayname' ], "gateway_image"=>$gatewaydir . 'j00510' . $data->plugin . '.gif');
				}
				
			}
		}
	
	function get_property_gateways( $property_uid)
		{
		$this->get_gateways_multi(array($property_uid));
		if ( isset($this->multi_query_result[ $property_uid ]) )
			{
			return $this->multi_query_result[ $property_uid ];
			}
		}
	}

?>