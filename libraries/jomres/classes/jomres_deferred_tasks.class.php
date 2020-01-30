<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.4
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_deferred_tasks 
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( ) 
	{
		$this->queued_tasks_dir = JOMRES_TEMP_ABSPATH.JRDS.'deferred_tasks'.JRDS;
		
		$this->file_identifier = '';
		
		if (!is_dir($this->queued_tasks_dir)) {
			if (!mkdir($this->queued_tasks_dir)){
				throw new Exception('Error: Unable to create tasks queue directory in '.$this->queued_tasks_dir);
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function handle_message( $payload_source ) {
		if ( is_file($this->queued_tasks_dir.$payload_source) ) {
			$file_contents = file_get_contents($this->queued_tasks_dir.$payload_source);
			// logging::log_message("Deferred tasks handle message contents ".$file_contents , 'Core', 'DEBUG'  );
			$result = $this->process_trigger($file_contents);
			// logging::log_message("Deferred tasks handle message prcess result ".serialize($result) , 'Core', 'DEBUG'  );
			$siteConfig		= jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig		  = $siteConfig->get();
			if ($jrConfig['development_production'] != 'development') {
				 unlink($this->queued_tasks_dir.$payload_source);
			}
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function process_trigger( $message ) {
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		$message_contents = unserialize($message);
		
		if (!isset($message_contents->trigger_number)) {
			throw new Exception('Error: Received message with no trigger number');
		}
		if (!isset($message_contents->payload)) {
			throw new Exception('Error: Received message with no payload');
		}
		
		$complete_message = array ( "payload" => $message_contents->payload , "task" => $message_contents->task );

		if (isset($message_contents->minicomponent) && $message_contents->minicomponent != '' ) {
			if ( $MiniComponents->eventSpecificlyExistsCheck( $message_contents->trigger_number, $message_contents->minicomponent  ) ) {
				logging::log_message("Starting call to minicomponent ".$message_contents->trigger_number.$message_contents->minicomponent , 'Core', 'DEBUG' , $message_contents->payload );
				$MiniComponents->specificEvent($message_contents->trigger_number, $message_contents->minicomponent, $complete_message );
			}
			else {
				logging::log_message("Failed to find ".$message_contents->trigger_number.$message_contents->minicomponent, 'Core', 'WARNING');
			}
		} else {
			$MiniComponents->triggerEvent($message_contents->trigger_number , $complete_message );
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function construct_background_message( $trigger_number = '', $minicomponent = '', $payload = '' )  {
		if ($trigger_number == '' ) {
			throw new Exception('Error: trigger number not set ');
		}
		if ($minicomponent == '' ) {
			throw new Exception('Error: minicomponent not set ');
		}
		if ($payload == '' ) {
			throw new Exception('Error: payload not set ');
		}
		
		$randomstring = generateJomresRandomString(50);
		$message = new stdClass();
		$message->trigger_number = $trigger_number;
		$message->minicomponent = $minicomponent;
		$message->task = get_showtime('task'); // For example, the Beds24 plugin will not want to create bookings if they're from import functionality, therefore we need to allow the called script to filter out webhook actions based on tasks
		
		$message->payload = $payload;
		if ( file_put_contents( $this->queued_tasks_dir.$randomstring, serialize($message) ) ) {
			$this->file_identifier = $randomstring;
		} 
		else {
			throw new Exception('Error: failed to create '.$this->queued_tasks_dir.$randomstring);
		}
	}
		
	/**
	 * 
	 *
	 *
	 */

	// The dispatcher will receive a trigger, which is a minicomponent trigger *number*, an optional specific event , and the payload string. The string can contain anything required, xml, json, it doesn´t matter as the minicomponent called will use that information as it sees fit.
	public function dispatch_mesage(){
		if ( $this->file_identifier == '' ) {
			throw new Exception('Error: file_identifier not set. Have you run construct_background_message yet? ');
		}

		$url = JOMRES_SITEPAGE_URL_AJAX."&task=background_process&payload_source=".$this->file_identifier;
  
		/* $curl_options = array(
		 CURLOPT_URL => $url,
		 CURLOPT_POST => 0,
		 CURLOPT_HTTP_VERSION => 1.0,
		 CURLOPT_HEADER => 0,
		 CURLOPT_TIMEOUT => 1
		 );

		 $curl = curl_init();
		 curl_setopt_array( $curl, $curl_options );
		 $result = curl_exec( $curl );
		 curl_close( $curl ); */

		$disabled = explode(',', ini_get('disable_functions')); // A client was having slow communications using guzzle for this asynchronous call, for reasons I couldn't fathom. Here we check to see if exec is available, and if it is we will try to wget (which should be available on most Linux OSs) and if so we'll use this instead as it's much quicker.
		if ( !in_array('exec', $disabled) && strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN' ) {
			exec("wget -O /dev/null -o /dev/null " . $url . " --background");
		} else {
			try {
				$client = new GuzzleHttp\Client([
					'headers' => [
						'User-Agent' => 'Jomres/v1.0',
						'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
						'Accept-Encoding' => 'gzip, deflate, br',
					  ],
					'verify' => false
				]);

				$response = $client->get($url );
				$content = $response->getBody()->__toString();
			} catch (RequestException $e) {
				trigger_error($e->getMessage(), E_USER_ERROR);
			}
		}
		 
		logging::log_message("Sent deferred message ".$this->file_identifier." to ".$url , 'Core', 'DEBUG' , serialize($content)  );
	 }
	
}
