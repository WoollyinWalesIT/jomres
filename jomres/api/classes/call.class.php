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

class call 
	{
	public function __construct() 
		{
		}
	
	public function call_server( $options )
		{
		if ( count ($options) == 0 )
			throw new Exception("Error, no request elements set ");
		
		$server		= $options['server'];
		$token		= $options['token']['access_token'];
		$method		= $options['method'];
		$request	= $options['request'];
		$data		= $options['data'];

		$ch = curl_init($server.$request);

		switch ( $method )
			{
			#########################################################################################
			case 'POST':
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
				break;
			case 'DELETE':
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
				break;
			case 'PUT':
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); 
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
				break;
			default :
				break;
			}
		
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Authorization: Bearer '.$token,
			'Accept: application/json',
			));
		
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$result=curl_exec ($ch);
		$status = curl_getinfo($ch); 
		$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		//if ($response_code != 200 && $response_code != 204)
			
		return array ("result" => $result , "status" => $status );
		}
	}