<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000show_property_weather
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}
		
		if (isset($componentArgs[ 'property_uid' ]))
			$this->property_uid = (int) $componentArgs[ 'property_uid' ];
		elseif ( isset ( $_REQUEST['property_uid'] ))
			$this->property_uid = (int) $_REQUEST['property_uid'];
		else 
			return;

		$template = $this->get_cache_file();

		$output_now = true;
		if (isset($componentArgs[ 'output_now' ]))
			$output_now = (bool)$componentArgs[ 'output_now' ];
		
		if ( $output_now )
			echo $template;
		else
			$this->retVals = $template;
		}
		

		/*
		["weather"]=>
			array(1) {
			  [0]=>
			  object(stdClass)#4473 (4) {
				["id"]=>
				int(800)
				["main"]=>
				string(5) "Clear"
				["description"]=>
				string(12) "sky is clear"
				["icon"]=>
				string(3) "01d"
			  }
			}
		*/
	
	function get_weather_live()
		{
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details -> gather_data( $this->property_uid );
		
		$url = "http://api.openweathermap.org/data/2.5/forecast?lat=".$current_property_details ->lat."&lon=".$current_property_details ->long."&lang=".get_showtime("lang");
		
		$curl_handle = curl_init();
		curl_setopt( $curl_handle, CURLOPT_URL, $url );
		curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 );
		curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres' );
		curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, 1 );
		$response = curl_exec( $curl_handle );
		curl_close( $curl_handle );
		
		$forecast = json_decode($response);

		// $image_path = '/'.JOMRES_ROOT_DIRECTORY.'/images/weather/'; // In case we decide to use icons instead of css weather.
		// $status_array = $this->get_weather_status_array();
		
		switch ( $forecast->list[0]->weather[0]->id )
			{
			case 800 ;
			case 801 ;
				$template = 'show_property_weather_sunny';
				break;
			case 200 ;
			case 201 ; 
			case 202 ; 
			case 210 ; 
			case 211 ;
			case 212 ;
			case 221 ; 
			case 230 ;
			case 231 ;
			case 232 ;
				$template = 'show_property_weather_storm';
				break;
			case 600 ; 
			case 601 ; 
			case 602 ; 
			case 611 ; 
			case 612 ; 
			case 615 ; 
			case 616 ; 
			case 620 ; 
			case 621 ; 
			case 622 ;
				$template = 'show_property_weather_snow';
				break;
			case 300 ; 
			case 301 ; 
			case 302 ; 
			case 310 ; 
			case 311 ; 
			case 312 ; 
			case 313 ; 
			case 314 ; 
			case 321 ; 
			case 500 ; 
			case 501 ; 
			case 502 ; 
			case 503 ; 
			case 504 ; 
			case 511 ; 
			case 520 ; 
			case 521 ; 
			case 522 ; 
			case 531 ;
				$template = 'show_property_weather_rain';
				break;
			case 802 ; 
			case 803 ; 
			case 804 ; 
			default ;
				$template = 'show_property_weather_cloudy';
				break;
			}

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( $template.'.html' );
		$output = array ( "WEATHER" => $tmpl->getParsedTemplate() );
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->readTemplatesFromInput( 'show_property_weather.html' );
		return $tmpl->getParsedTemplate();
		}
	
	function get_cache_file()
		{
		$siteConfig				= jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig				= $siteConfig->get();
		$timeout				= (int) $jrConfig[ 'lifetime' ];
		
		
		$cache_file_path = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS ."weather_cache".JRDS;
		if ( !is_dir( $cache_file_path ) )
			{
				if ( !@mkdir( $cache_file_path ) )
				{
				throw new Exception( "Error, unable to make directory " . $cache_file_path . " automatically therefore cannot write weather cache files. Please create the directory manually and ensure that it's writable by the web server" );
				}
			}
		$this->cache_file = $cache_file_path . "weather_".$this->property_uid.".html";
		
		$last_modified    = filemtime( $this->cache_file );
		$seconds_timediff = time() - $last_modified;
		if ( $seconds_timediff > $timeout ) 
			unlink( $this->cache_file );

		if ( !file_exists(  $this->cache_file ) )
			{
			$template = $this->get_weather_live();
			file_put_contents( $this->cache_file, $template );
			}
		else
			{
			$template = file_get_contents( $this->cache_file );
			}
		return $template;
		}
		
	function get_weather_status_array()
		{
		$weather_array = array (
			"200"=> array ("description"=>"thunderstorm with light rain", "icon"=>"11d.png"),
			"201"=> array ("description"=>"thunderstorm with rain", "icon"=>"11d.png"),
			"202"=> array ("description"=>"thunderstorm with heavy rain", "icon"=>"11d.png"),
			"210"=> array ("description"=>"light thunderstorm", "icon"=>"11d.png"),
			"211"=> array ("description"=>"thunderstorm", "icon"=>"11d.png"),
			"212"=> array ("description"=>"heavy thunderstorm", "icon"=>"11d.png"),
			"221"=> array ("description"=>"ragged thunderstorm", "icon"=>"11d.png"),
			"230"=> array ("description"=>"thunderstorm with light drizzle", "icon"=>"11d.png"),
			"231"=> array ("description"=>"thunderstorm with drizzle", "icon"=>"11d.png"),
			"232"=> array ("description"=>"thunderstorm with heavy drizzle", "icon"=>"11d.png"),
			"300"=> array ("description"=>"light intensity drizzle", "icon"=>"09d.png"),
			"301"=> array ("description"=>"drizzle", "icon"=>"09d.png"),
			"302"=> array ("description"=>"heavy intensity drizzle", "icon"=>"09d.png"),
			"310"=> array ("description"=>"light intensity drizzle rain", "icon"=>"09d.png"),
			"311"=> array ("description"=>"drizzle rain", "icon"=>"09d.png"),
			"312"=> array ("description"=>"heavy intensity drizzle rain", "icon"=>"09d.png"),
			"313"=> array ("description"=>"shower rain and drizzle", "icon"=>"09d.png"),
			"314"=> array ("description"=>"heavy shower rain and drizzle", "icon"=>"09d.png"),
			"321"=> array ("description"=>"shower drizzle", "icon"=>"09d.png"),
			"500"=> array ("description"=>"light rain", "icon"=>"10d.png"),
			"501"=> array ("description"=>"moderate rain", "icon"=>"10d.png"),
			"502"=> array ("description"=>"heavy intensity rain", "icon"=>"10d.png"),
			"503"=> array ("description"=>"very heavy rain", "icon"=>"10d.png"),
			"504"=> array ("description"=>"extreme rain", "icon"=>"10d.png"),
			"511"=> array ("description"=>"freezing rain", "icon"=>"13d.png"),
			"520"=> array ("description"=>"light intensity shower rain", "icon"=>"09d.png"),
			"521"=> array ("description"=>"shower rain", "icon"=>"09d.png"),
			"522"=> array ("description"=>"heavy intensity shower rain", "icon"=>"09d.png"),
			"531"=> array ("description"=>"ragged shower rain", "icon"=>"09d.png"),
			"600"=> array ("description"=>"light snow", "icon"=>"13d.png"),
			"601"=> array ("description"=>"snow", "icon"=>"13d.png"),
			"602"=> array ("description"=>"heavy snow", "icon"=>"13d.png"),
			"611"=> array ("description"=>"sleet", "icon"=>"13d.png"),
			"612"=> array ("description"=>"shower sleet", "icon"=>"13d.png"),
			"615"=> array ("description"=>"light rain and snow", "icon"=>"13d.png"),
			"616"=> array ("description"=>"rain and snow", "icon"=>"13d.png"),
			"620"=> array ("description"=>"light shower snow", "icon"=>"13d.png"),
			"621"=> array ("description"=>"shower snow", "icon"=>"13d.png"),
			"622"=> array ("description"=>"heavy shower snow", "icon"=>"13d.png"),
			"701"=> array ("description"=>"mist", "icon"=>"50d.png"),
			"711"=> array ("description"=>"smoke", "icon"=>"50d.png"),
			"721"=> array ("description"=>"haze", "icon"=>"50d.png"),
			"731"=> array ("description"=>"sand, dust whirls", "icon"=>"50d.png"),
			"741"=> array ("description"=>"fog", "icon"=>"50d.png"),
			"751"=> array ("description"=>"sand", "icon"=>"50d.png"),
			"761"=> array ("description"=>"dust", "icon"=>"50d.png"),
			"762"=> array ("description"=>"volcanic ash", "icon"=>"50d.png"),
			"771"=> array ("description"=>"squalls", "icon"=>"50d.png"),
			"781"=> array ("description"=>"tornado", "icon"=>"50d.png"),
			"800"=> array ("description"=>"clear sky", "icon"=>"01d.png"),
			"801"=> array ("description"=>"few clouds", "icon"=>"02d.png"),
			"802"=> array ("description"=>"scattered clouds", "icon"=>"03d.png"),
			"803"=> array ("description"=>"broken clouds", "icon"=>"04d.png"),
			"804"=> array ("description"=>"overcast clouds", "icon"=>"04d.png")
			);
		}

		
/*
 Weather condition codes
Thunderstorm
ID 	Meaning 	Icon
200 	thunderstorm with light rain", "icon"=>"11d.png"),
201 	thunderstorm with rain", "icon"=>"11d.png"),
202 	thunderstorm with heavy rain", "icon"=>"11d.png"),
210 	light thunderstorm", "icon"=>"11d.png"),
211 	thunderstorm", "icon"=>"11d.png"),
212 	heavy thunderstorm", "icon"=>"11d.png"),
221 	ragged thunderstorm", "icon"=>"11d.png"),
230 	thunderstorm with light drizzle", "icon"=>"11d.png"),
231 	thunderstorm with drizzle", "icon"=>"11d.png"),
232 	thunderstorm with heavy drizzle", "icon"=>"11d.png"),
Drizzle
ID 	Meaning 	Icon
300 	light intensity drizzle", "icon"=>"09d.png"),
301 	drizzle", "icon"=>"09d.png"),
302 	heavy intensity drizzle", "icon"=>"09d.png"),
310 	light intensity drizzle rain", "icon"=>"09d.png"),
311 	drizzle rain", "icon"=>"09d.png"),
312 	heavy intensity drizzle rain", "icon"=>"09d.png"),
313 	shower rain and drizzle", "icon"=>"09d.png"),
314 	heavy shower rain and drizzle", "icon"=>"09d.png"),
321 	shower drizzle", "icon"=>"09d.png"),
Rain
ID 	Meaning 	Icon
500 	light rain", "icon"=>"10d.png"),
501 	moderate rain", "icon"=>"10d.png"),
502 	heavy intensity rain", "icon"=>"10d.png"),
503 	very heavy rain", "icon"=>"10d.png"),
504 	extreme rain", "icon"=>"10d.png"),
511 	freezing rain", "icon"=>"13d.png"),
520 	light intensity shower rain", "icon"=>"09d.png"),
521 	shower rain", "icon"=>"09d.png"),
522 	heavy intensity shower rain", "icon"=>"09d.png"),
531 	ragged shower rain", "icon"=>"09d.png"),
Snow
ID 	Meaning 	Icon
600 	light snow", "icon"=>"13d.png"),
601 	snow", "icon"=>"13d.png"),
602 	heavy snow", "icon"=>"13d.png"),
611 	sleet", "icon"=>"13d.png"),
612 	shower sleet", "icon"=>"13d.png"),
615 	light rain and snow", "icon"=>"13d.png"),
616 	rain and snow", "icon"=>"13d.png"),
620 	light shower snow", "icon"=>"13d.png"),
621 	shower snow", "icon"=>"13d.png"),
622 	heavy shower snow", "icon"=>"13d.png"),
Atmosphere
ID 	Meaning 	Icon
701 	mist", "icon"=>"50d.png"),
711 	smoke", "icon"=>"50d.png"),
721 	haze", "icon"=>"50d.png"),
731 	sand, dust whirls", "icon"=>"50d.png"),
741 	fog", "icon"=>"50d.png"),
751 	sand", "icon"=>"50d.png"),
761 	dust", "icon"=>"50d.png"),
762 	volcanic ash", "icon"=>"50d.png"),
771 	squalls", "icon"=>"50d.png"),
781 	tornado", "icon"=>"50d.png"),
Clouds
ID 	Meaning 	Icon
800 	clear sky", "icon"=>"01d.png"), [[file:01n.png"),
801 	few clouds", "icon"=>"02d.png"), [[file:02n.png"),
802 	scattered clouds", "icon"=>"03d.png"), [[file:03d.png"),
803 	broken clouds", "icon"=>"04d.png"), [[file:03d.png"),
804 	overcast clouds", "icon"=>"04d.png"), [[file:04d.png"),
Extreme
ID 	Meaning
900 	tornado
901 	tropical storm
902 	hurricane
903 	cold
904 	hot
905 	windy
906 	hail
Additional
ID 	Meaning
951 	calm
952 	light breeze
953 	gentle breeze
954 	moderate breeze
955 	fresh breeze
956 	strong breeze
957 	high wind, near gale
958 	gale
959 	severe gale
960 	storm
961 	violent storm
962 	hurricane 
*/

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}
