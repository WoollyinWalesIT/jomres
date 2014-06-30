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

// Newer function for finding dates
function get_periods( $start, $end, $interval = null )
	{
	$bang = explode("/",$start);
	$start = $bang[1]."/".$bang[0]."/".$bang[2];
	$bang = explode("/",$end);
	$end = $bang[1]."/".$bang[0]."/".$bang[2];
	
	$start = new DateTime( $start );
	$end   = new DateTime( $end );
	if ( is_null( $interval ) ) $interval = new DateInterval( 'P1D' );

	$period = new DatePeriod( $start, $interval, $end );
	$dates  = array ();
	foreach ( $period as $date )
		{
		$d        = $date->format( 'Y/m/d' );
		$dates[ ] = $d;
		}

	return $dates;
	}

function output_fatal_error($e)
	{
	$siteConfig        = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig          = $siteConfig->get();
	
	$cms_files_we_are_not_interested_in = jomres_cmsspecific_error_logging_cms_files_to_not_backtrace();
	$rows = array();
	$backtrace = debug_backtrace();

	foreach ( $backtrace as $trace )
		{
		$r = array();
		$file     = $trace[ 'file' ];
		$bang     = explode( JRDS, $file );
		$filename = $bang[ count( $bang ) - 1 ];
		if ( $filename != 'patTemplate.php' && $filename != 'index.php' &&  !in_array( $filename,$cms_files_we_are_not_interested_in) )
			{
			$r['FILES'] = " " . $filename . " on line ".$trace['line']."<br/>";
			$rows[]=$r;
			}
		}

	$output = array(
		"MESSAGE" => $e->getMessage(),
		"FILE"  => $e->getFile(),
		"LINE"  => $e->getLine(),
		"TRACE"  => $e->getTraceAsString(),
		'_JOMRES_ERROR_DEBUGGING_MESSAGE'=>jr_gettext("_JOMRES_ERROR_DEBUGGING_MESSAGE", _JOMRES_ERROR_DEBUGGING_MESSAGE, false ) ,
		'_JOMRES_ERROR_DEBUGGING_FILE'=>jr_gettext("_JOMRES_ERROR_DEBUGGING_FILE", _JOMRES_ERROR_DEBUGGING_FILE, false ) ,
		'_JOMRES_ERROR_DEBUGGING_LINE'=>jr_gettext("_JOMRES_ERROR_DEBUGGING_LINE", _JOMRES_ERROR_DEBUGGING_LINE, false ) ,
		'_JOMRES_ERROR_DEBUGGING_TRACE'=>jr_gettext("_JOMRES_ERROR_DEBUGGING_TRACE", _JOMRES_ERROR_DEBUGGING_TRACE, false ) ,
		 ); 
		
	$pageoutput[] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( $path );
	$tmpl->readTemplatesFromInput( "error_developer.html" );
	$tmpl->addRows( 'rows', $rows );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$error_html = $tmpl->getParsedTemplate();

	$log_path = JOMRES_SYSTEMLOG_PATH . "error_logs";
	
	if ( !is_dir( $log_path ) )
		{
		mkdir ( $log_path );
		}
	
	$filename = generateJomresRandomString( 30 ).".html";
	
	file_put_contents (  $log_path . JRDS . $filename , $error_html );

	if ($jrConfig['development_production'] == 'development')
		{
		echo $error_html;
		}
	else
		{
		$pageoutput = array(array ( "_JOMRES_ERROR"=>jr_gettext("_JOMRES_ERROR", _JOMRES_ERROR, false ) , "_JOMRES_ERROR_MESSAGE"=>jr_gettext("_JOMRES_ERROR_MESSAGE", _JOMRES_ERROR_MESSAGE, false ) ));
		$tmpl          = new patTemplate();
		$tmpl->setRoot( $path );
		$tmpl->readTemplatesFromInput( "error_production.html" );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		echo $tmpl->getParsedTemplate();
		}
	
	$url = '<a href = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=show_logfile&logfile='.$filename.'"> Logfile </a>' .
	$error_html
	;
	
	sendAdminEmail( "Error logged ".$output['MESSAGE'], $url);
	}

function this_cms_is_wordpress()
	{
	if ( _JOMRES_DETECTED_CMS != "wordpress3" )
		{
		return false;
		}
	
	return true;
	}

// url is the remote url that will be called
// text of the button.
// task. The task of the called page
// Extra. Any extra
// Title. What the title of the modal will be set to.

function make_modal_button( $text , $task, $extra = '' , $title , $button_colour = 'btn-default' )
	{
	$pageoutput = array();

	$pageoutput[0][ 'RANDOM_IDENTIFIER' ]		= generateJomresRandomString( 10 );
	$pageoutput[0][ 'TEXT' ]					= $text;
	$pageoutput[0][ 'TASK' ]					= $task;
	$pageoutput[0][ 'EXTRA' ]					= $extra;
	$pageoutput[0][ 'MODAL_TITLE' ]				=  urlencode( $title );
	$pageoutput[0][ 'BUTTON_COLOUR' ]			= $button_colour;

	$tmpl          = new patTemplate();
	$tmpl->setRoot( $path );
	$tmpl->readTemplatesFromInput( "modal_button.html" );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	return $tmpl->getParsedTemplate();
	}


// A quick way to ouput data that's stored in a Jomres template but doesn't require any conditions or rows.
// Due to the way Bootstrap 3 demands that returned data be wrapped in <div class="modal-content"> <div class="modal-header"> </div></div> we need to create new output that wraps 
// the content we wish to return. As we may want to add modal popups to other pages in the future we needed to add a new request variable "modal_wrap" which then allows us to
// wrap the resulting output in these divs. As we don't want to change the code every time a new modal syntax appears it's preferable to add this modal wrap via a template file. The template file itself doesn't 
// demand any special conditions, so we've created this quick template output function to allow us to quickly access a template file that contains some simple html.

// One string allows us to pass just one variable to the template for inclusion in output (in case, for example, the modal needs a title)

function simple_template_output($path = '' , $template = '' ,$one_string = '' )
	{
	$pageoutput = array(array ( "TITLE"=>$one_string));
	$tmpl          = new patTemplate();
	$tmpl->setRoot( $path );
	$tmpl->readTemplatesFromInput( $template );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	return $tmpl->getParsedTemplate();
	}

function calc_rating_progressbar_colour($percentage)
	{
	if ( $percentage >= 60 )
		$colour = 'progress-bar-success';
	if ( $percentage < 60 && $percentage  >= 50 )
		$colour = 'progress-bar-info';
	if ( $percentage < 50 && $percentage>= 30 )
		$colour = 'progress-bar-warning';
	if ( $percentage < 30 )
		$colour = 'progress-bar-danger';
	return $colour;
	}

function jomres_bootstrap_version()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	if (!isset($jrConfig[ 'bootstrap_version' ]))
		$jrConfig[ 'bootstrap_version' ] = "";
	
	if ($jrConfig[ 'bootstrap_version' ] == "")
		{
		$bootstrap_version = "2";
		}
	else // Leaves us room to manouver in the future when newer versions are created
		{
		$bootstrap_version = $jrConfig[ 'bootstrap_version' ];
		}
		
	return $bootstrap_version;
	}

function find_plugin_template_directory()
	{
	$template_dir = "jquery_ui";
	if ( using_bootstrap())
		{
		$template_dir = "bootstrap";
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if (!isset($jrConfig[ 'bootstrap_version' ]))
			$jrConfig[ 'bootstrap_version' ] = "";
		
		if ($jrConfig[ 'bootstrap_version' ] != "")
			{
			$template_dir = $template_dir.jomres_bootstrap_version();
			}
		}
	return $template_dir;
	}

function findDateRangeForDates( $d1, $d2 )
	{
	$days            = (int) findDaysForDates( $d1, $d2 );
	$dateRangeArray  = array ();
	$currentDay      = $d1;
	$date_elements   = explode( "/", $currentDay );
	$unixCurrentDate = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
	for ( $i = 0, $n = $days; $i <= $n; $i++ )
		{
		$currentDay        = date( "Y/m/d", $unixCurrentDate );
		$dateRangeArray[ ] = $currentDay;
		$date_elements     = explode( "/", $currentDay );
		$unixCurrentDate   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ] + 1, $date_elements[ 0 ] );
		}

	return $dateRangeArray;
	}

function findDaysForDates( $d1, $d2 )
	{
	$diff = dateDiff( '', $d1, $d2 );

	return $diff;
	}

function import_images_to_media_centre_directories()
	{
	// We are going to move any property images, slideshow images and room images into the new media centre's resource directories.
	$query                 = "SELECT propertys_uid,published FROM #__jomres_propertys";
	$properties            = doSelectSql( $query );
	$all_propertys         = array();
	foreach ( $properties as $p )
		{
		$all_propertys[ ] = $p->propertys_uid;
		}
	
	$resource_types = array();
	$resource_types[] = array ( "resource_type" => "rooms" , "resource_id_required" => true , "name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', _JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM, false ) );
	$resource_types[] = array ( "resource_type" => "slideshow" , "resource_id_required" => false , "name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', _JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW, false ) );
	$resource_types[] = array ( "resource_type" => "property" , "resource_id_required" => false , "name" => jr_gettext( '_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', _JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY, false ) , "notes" => jr_gettext( '_JOMRES_MEDIA_CENTRE_NOTES_CORE', _JOMRES_MEDIA_CENTRE_NOTES_CORE, false )  );
	
	if (count($resource_types)>0 && count($all_propertys) > 0)
		{
		foreach ($all_propertys as $property_id)
			{
			$base_path = JOMRES_IMAGELOCATION_ABSPATH . $property_id . JRDS;
			
			if ( !is_dir($base_path) )
				{
				mkdir ( $base_path );
				}
			
			
			if (is_dir($base_path.'joomla'))
				{
				emptyDir($base_path.'joomla');
				rmdir($base_path.'joomla');
				}
			
			$all_types = array();
			foreach ($resource_types as $type)
				{
				if ( !is_dir($base_path . $type['resource_type']) )
					{
					mkdir ( $base_path . $type['resource_type'] );
					}
				}

				if (!is_dir ($base_path . "property" . JRDS .  "0" ))
					{
					mkdir ($base_path . "property" . JRDS .  "0");
					}
				if (!is_dir ($base_path . "property" . JRDS .  "0" . JRDS . "thumbnail"))
					{
					mkdir ($base_path . "property" . JRDS .  "0" . JRDS . "thumbnail");
					}
				if (!is_dir ($base_path . "property" . JRDS .  "0" . JRDS . "medium"))
					{
					mkdir ($base_path . "property" . JRDS .  "0" . JRDS . "medium");
					}
			
			// Let's start with the property image
			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . ".jpg" ) )
				{
				rename (
					JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . ".jpg",
					$base_path . "property" . JRDS . "0". JRDS . $property_id . "_property_" . $property_id . ".jpg"
					);
				}
			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . "_thumbnail.jpg" ) )
				{
				rename (
					JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . "_thumbnail.jpg",
					$base_path . "property" . JRDS . "0". JRDS . "thumbnail" . JRDS . $property_id . "_property_" . $property_id . ".jpg"
					);
				}
			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . "_thumbnail_med.jpg" ) )
				{
				rename (
					JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $property_id . "_property_" . $property_id . "_thumbnail_med.jpg",
					$base_path . "property" . JRDS . JRDS . "0". JRDS . "medium" . JRDS . $property_id . "_property_" . $property_id . ".jpg"
					);
				}
				
			
			// Now any slideshow images
			$slideshow_images = scandir_getfiles( $base_path );

			if (count($slideshow_images)>0)
				{
				if (!is_dir ($base_path . "slideshow" . JRDS .  "0" ))
					{
					mkdir ($base_path . "slideshow" . JRDS .  "0");
					}
				if (!is_dir ($base_path . "slideshow" . JRDS .  "0" . JRDS . "thumbnail"))
					{
					mkdir ($base_path . "slideshow" . JRDS .  "0" . JRDS . "thumbnail");
					}
				if (!is_dir ($base_path . "slideshow" . JRDS .  "0" . JRDS . "medium"))
					{
					mkdir ($base_path . "slideshow" . JRDS .  "0" . JRDS . "medium");
					}

				foreach ($slideshow_images as $image)
					{
					// The slideshow image files directly under /N/ have the pattern filename/filename_thumbnail/filename_thumbnail_med, so we need to find the main file, then move it's medium/thumbnails over afterwards
					if ( !strstr ( "_thumbnail" , $image) )
						{
						$image_name_array =explode ( "." , $image );
						unset($image_name_array[count($image_name_array)-1]);
						$image_name = implode($image_name_array);
						
						rename (
							$base_path . $image_name.".jpg",
							$base_path . "slideshow" . JRDS . "0". JRDS . $image_name . ".jpg"
							);
						rename (
							$base_path . $image_name."_thumbnail.jpg",
							$base_path . "slideshow" . JRDS . "0". JRDS . "thumbnail" . JRDS .$image_name . ".jpg"
							);
						rename (
							$base_path . $image_name."_thumbnail_med.jpg",
							$base_path . "slideshow" . JRDS . "0". JRDS . "medium" . JRDS . $image_name . ".jpg"
							);
						}
					}
				}
			
			// Finally we'll look for room images
			$room_images = scandir_getfiles( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS );
			if (count($room_images)>0)
				{
				$pattern = $property_id . "_room";
				foreach ($room_images as $image)
					{
					$pos1 = strpos ($image , "_thumbnail"  );
					if ( $pos1 === false )
						{
						$pos2 = strpos ($image , $pattern );
						if ( $pos2 === 0 )
							{
							$image_name_array =explode ( "." , $image );
							unset($image_name_array[count($image_name_array)-1]);
							$image_name = implode($image_name_array);
							$bang = explode( "_" , $image_name);
							$resource_id = $bang[2];
							
							if (!is_dir ($base_path . "rooms" . JRDS . $resource_id ))
								{
								mkdir ($base_path . "rooms" . JRDS . $resource_id);
								}
							if (!is_dir ($base_path . "rooms" . JRDS . $resource_id . JRDS . "thumbnail"))
								{
								mkdir ($base_path . "rooms" . JRDS . $resource_id . JRDS . "thumbnail");
								}
							if (!is_dir ($base_path . "rooms" . JRDS . $resource_id . JRDS . "medium"))
								{
								mkdir ($base_path . "rooms" . JRDS . $resource_id . JRDS . "medium");
								}
					
							rename (
								JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $image_name.".jpg",
								$base_path . "rooms" . JRDS . $resource_id. JRDS . $image_name . ".jpg"
								);
							rename (
								JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $image_name."_thumbnail.jpg",
								$base_path . "rooms" . JRDS . $resource_id. JRDS . "thumbnail" . JRDS .$image_name . ".jpg"
								);
							rename (
								JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "uploadedimages" . JRDS . $image_name."_thumbnail_med.jpg",
								$base_path . "rooms" . JRDS . $resource_id. JRDS . "medium" . JRDS . $image_name . ".jpg"
								);
							}
						}
					}
				}
			}
		}
	}
	
	
function jomres_formatBytes($bytes, $precision = 2) 
	{
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    return round($bytes, $precision) . ' ' . $units[$pow]; 
	} 
	
/*
An output filter.
*/

function jomres_decode( $string )
	{
	$string = str_replace( "&#34;", '&ldquo;', $string );
	$string = str_replace( "&#38;", "&", $string );
	$string = str_replace( "&#39;", "&#96;", $string );
	$string = str_replace( "&#60;x&#62;", "", $string ); // Older versions of Jomres used to add <x> to strings to make them safe. We don't need that any more, however if we don't add this line then some older installations may show <x> in, for example, the property details.
	$string = str_replace( "&#60;", "<", $string );
	$string = str_replace( "&#62;", ">", $string );
	$string = str_replace( "&lt;", "<", $string );
	$string = str_replace( "&gt;", ">", $string );

	$string = str_replace( "\xe2\x80\xa8", '', $string ); // Strip out some naughty little ascii line seperators that are absolute devils to remove if you're not looking for them. They'll break your javascript.
	return $string;
	}


/* 
The above function should suffice for most circumstances, however we may find later that some users will want more freedom to enter data that shows up in output, later on. If that's the case we'll swap the above function to this one.
*/

/*
function jomres_decode( $string )
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	if ( $jrConfig[ 'input_filtering' ] == "weak" )
		{
		$string = html_entity_decode( $string, ENT_QUOTES );
		}
	else
		{
		$string = str_replace( "&#34;", '&ldquo;', $string );
		$string = str_replace( "&#38;", "&", $string );
		$string = str_replace( "&#39;", "&#96;", $string );
		$string = str_replace( "&#60;x&#62;", "", $string ); // Older versions of Jomres used to add <x> to strings to make them safe. We don't need that any more, however if we don't add this line then some older installations may show <x> in, for example, the property details.
		$string = str_replace( "&#60;", "<", $string );
		$string = str_replace( "&#62;", ">", $string );
		$string = str_replace( "&lt;", "<", $string );
		$string = str_replace( "&gt;", ">", $string );
		}

	$string = str_replace( "\xe2\x80\xa8", '', $string ); // Strip out some naughty little ascii line seperators that are absolute devils to remove if you're not looking for them. They'll break your javascript.
	return $string;
	}
*/


function echo_backtrace()
	{
	$trace     = debug_backtrace();
	foreach ($trace as $t)
		{
		$file_arr = explode( JRDS, $t[ 'file' ] );
		$file     = $file_arr[ count( $file_arr ) - 1 ];
		if ($file == "helper.php") break;
		$line     = $t[ 'line' ];
		echo "Line : ".$line." for file ".$file." </br>";
		}
	}

function make_gmap_url_for_property_uid( $property_uid )
	{
	if ( $property_uid < 1 ) return false;
	$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
	$current_property_details->gather_data( $property_uid );

	$dest_address = $current_property_details->property_name . "," . $current_property_details->property_street . "," . $current_property_details->property_town . "," . $current_property_details->property_region . "," . $current_property_details->property_country . "," . $current_property_details->property_postcode;

	return 'https://maps.google.com/maps?daddr=' . $dest_address;
	}

function jomres_make_qr_code( $string = "", $format = "text" )
	{
	jr_import( 'jomres_qr_code' );
	if ( !class_exists( 'QRcode' ) ) // Triggers the importing of the qrcode library.
		{
		$qr = new jomres_qr_code();
		}
	if ( $string == "" ) return false;
	$filename = md5( $string );
	if ( !file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'qr_code_' . $filename . '.png' ) ) QRcode::png( $string, JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'qr_code_' . $filename . '.png', 'L', 4, 2 );

	return array ( "relative_path" => get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/temp/" . 'qr_code_' . $filename . '.png', "absolute_path" => JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'temp' . JRDS . 'qr_code_' . $filename . '.png' );
	}


function genericLike( $idArray, $fieldToSearch, $idArrayisInteger = true )
	{
	$newArr = array ();
	foreach ( $idArray as $id )
		{
		$newArr[ ] = $id;
		}
	$idArray = $newArr;
	$txt     = " ( `" . $fieldToSearch . "` LIKE ";
	for ( $i = 0, $n = count( $idArray ); $i < $n; $i++ )
		{
		if ( $idArrayisInteger ) $id = (int) $idArray[ $i ];
		else
		$id = $idArray[ $i ];
		$txt .= " '%$id%' ";
		if ( $i < count( $idArray ) - 1 ) $txt .= " OR `" . $fieldToSearch . "` LIKE ";
		}
	$txt .= " ) ";

	return $txt;
	}

function get_number_of_items_requiring_attention_for_menu_option( $task )
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	if ( jomres_cmsspecific_areweinadminarea() )
		{
		if ( $MiniComponents->eventSpecificlyExistsCheck( "07020", $task ) ) return $MiniComponents->specificEvent( '07020', $task );
		else
		return 0;
		}
	elseif ( $MiniComponents->eventSpecificlyExistsCheck( "07030", $task ) ) return $MiniComponents->specificEvent( '07030', $task );
	else
	return 0;
	}


function find_region_name( $region_id )
	{
	if ( !is_numeric( $region_id ) ) // It's already NOT numeric
	return $region_id;

	$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );
	return $jomres_regions->regions[$region_id]['regionname'];
	}

function find_region_id( $region )
	{
	if ( is_numeric( $region ) ) // It's already numeric
		return $region;
	else
		$region=jomres_cmsspecific_stringURLSafe($region);

	$jomres_regions = jomres_singleton_abstract::getInstance( 'jomres_regions' );
	foreach ( $jomres_regions->regions as $r )
		{
		if ( strcasecmp( jomres_cmsspecific_stringURLSafe( $r[ 'regionname' ] ), $region ) == 0 )
			{
			return (int) $r[ 'id' ];
			}
		}

	return null;
	}


function build_property_manager_xref_array()
	{
	$arr = array ();
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$jomres_managers_propertys_xref=$c->retrieve('jomres_managers_propertys_xref');
	
	if (true===is_array($jomres_managers_propertys_xref))
		{
		$arr=$jomres_managers_propertys_xref;
		}
	else
		{
		$query = "SELECT property_uid,manager_id FROM #__jomres_managers_propertys_xref";
		$managersToPropertyList = doSelectSql( $query );
		if ( count( $managersToPropertyList ) > 0 )
			{
			foreach ( $managersToPropertyList as $x )
				{
				if ( !array_key_exists( $x->property_uid, $arr ) ) 
					$arr[ $x->property_uid ] = $x->manager_id;
				}
			}
		$c->store('jomres_managers_propertys_xref',$arr);
		}
	set_showtime( 'property_manager_xref', $arr );

	return $arr;
	}

function make_agent_link( $property_id = 0 )
	{
	$property_manager_xref = get_showtime( 'property_manager_xref' );
	if ( is_null( $property_manager_xref ) )
		{
		$property_manager_xref = build_property_manager_xref_array();
		}

	if ( !array_key_exists( $property_id, $property_manager_xref ) )
		{
		return '';
		}

	if ( $property_id == 0 ) return '';

	$output     = array ();
	$pageoutput = array ();

	$manager_id = $property_manager_xref[ $property_id ];

	$output[ 'IMAGE' ] = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage.gif";
	if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . 'userimages' . JRDS . "userimage_" . (int) $manager_id . "_thumbnail.jpg" ) ) $output[ 'IMAGE' ] = JOMRES_IMAGELOCATION_RELPATH . 'userimages/userimage_' . (int) $manager_id . '_thumbnail.jpg';

	$output[ 'URL' ] = jomresURL( JOMRES_SITEPAGE_URL . "&task=view_agent&id=" . $manager_id );

	$pageoutput[ ] = $output;
	$tmpl          = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->readTemplatesFromInput( 'agent_link.html' );

	return $tmpl->getParsedTemplate();
	}

function make_agent_info( $manager_id )
	{

	}

function translation_user_check()
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( !$thisJRUser->userIsManager || !$thisJRUser->superPropertyManager )
		{
		if ( using_bootstrap() ) echo '<div class="alert alert-error">' . jr_gettext( "_JOMRES_COM_NOTAMANAGER", _JOMRES_COM_NOTAMANAGER, false ) . '</div>';
		else
		echo '<div class="ui-state-error">' . jr_gettext( "_JOMRES_COM_NOTAMANAGER", _JOMRES_COM_NOTAMANAGER, false ) . '</div>';

		return false;
		}

	return true;
	}

function no_search_results()
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

	return $MiniComponents->specificEvent( '06000', 'no_search_results' );
	}

function jomres_makeTooltip( $div, $hover_title = "", $hover_content = "", $div_content = "", $class = "", $type = "", $type_arguments = array (), $url = "#" )
	{
	// Uncomment the following line to tell Jomres to show the images and descriptions side by side, instead of using the jquery tooltip.
	//$type_arguments['use_javascript']=false;
	$jomres_tooltips = jomres_singleton_abstract::getInstance( 'jomres_tooltips' );

	//$jomres_tooltips = new jomres_tooltips();
	return $jomres_tooltips->generate_tooltip( $div, $hover_title, $hover_content, $div_content, $class, $type, $type_arguments, $url );
	}

function endrun()
	{
	if ( file_exists( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . 'cms_specific_endrun.php' ) ) require_once( _JOMRES_DETECTED_CMS_SPECIFIC_FILES . 'cms_specific_endrun.php' );
	}

function using_bootstrap()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	if ( !isset( $jrConfig[ 'use_bootstrap_in_frontend' ] ) )
		{
		if ( _JOMRES_DETECTED_CMS == "joomla30" || _JOMRES_DETECTED_CMS == "joomla31" || _JOMRES_DETECTED_CMS == "joomla32" || _JOMRES_DETECTED_CMS == "joomla33")
			{
			$jrConfig[ 'use_bootstrap_in_admin' ]    = "1";
			$jrConfig[ 'use_bootstrap_in_frontend' ] = "1";
			}
		else
			{
			$jrConfig[ 'use_bootstrap_in_admin' ]    = "0";
			$jrConfig[ 'use_bootstrap_in_frontend' ] = "0";
			}
		}

	if ( jomres_cmsspecific_areweinadminarea() )
		{
		if ( $jrConfig[ 'use_bootstrap_in_admin' ] == "1" ) return true;
		else
		return false;
		}
	else
		{
		if ( $jrConfig[ 'use_bootstrap_in_frontend' ] == "1" ) return true;
		else
		return false;
		}

	return false;
	}

function init_javascript()
	{
	if ( !AJAXCALL )
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		$MiniComponents->triggerEvent( '00004' );
		}
	}


function add_gmaps_source( $sensor = 0 )
	{
	if ( defined( 'JOMRES_NOHTML' ) ) return;
	if ( !defined( 'GMAPS_SOURCE_ADDED' ) && !AJAXCALL)
		{
		define( 'GMAPS_SOURCE_ADDED', 1 );
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		$site_lang  = get_showtime( 'lang' );
		$lang       = explode( '-', $site_lang );
		$shortcode  = $lang[ 0 ];
		$s          = "false";
		if ( $sensor == 1 ) $s = "true";

		$libraries = '';

		if ( !isset( $jrConfig[ 'gmap_layer_weather' ] ) )
			{
			$jrConfig[ 'gmap_layer_weather' ]   = "1";
			$jrConfig[ 'gmap_layer_panoramio' ] = "0";
			$jrConfig[ 'gmap_layer_transit' ]   = "0";
			$jrConfig[ 'gmap_layer_traffic' ]   = "0";
			$jrConfig[ 'gmap_layer_bicycling' ] = "0";
			}

		if ( $jrConfig[ 'gmap_layer_weather' ] == "1" ) $libraries .= 'weather,';
		if ( $jrConfig[ 'gmap_layer_panoramio' ] == "1" ) $libraries .= 'panoramio';

		if ( $libraries != '' ) $libraries = '&libraries=' . $libraries;

		jomres_cmsspecific_addheaddata('javascript' , 'http://maps.googleapis.com/maps/api/js?sensor=' . $s . '&language=' . $shortcode . $libraries , '&key=' . $jrConfig[ 'google_maps_api_key' ], $includeVersion = false );
		}
	}


// Used by components to dynamically add elements to the new Jomres mainmenu. Process.png is a neat way to indicate that this menu option's dynamically added
function add_menu_option( $task_and_args, $image, $title, $path = null, $category, $external = false, $disabled = false )
	{
	$jomres_mainmenu_category_images                            = get_showtime( 'jomres_mainmenu_category_images' );
	$jomres_mainmenu_category_images[ strtolower( $category ) ] = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/process.png';
	set_showtime( 'jomres_mainmenu_category_images', $jomres_mainmenu_category_images );
	$option                                             = jomres_mainmenu_option( $task_and_args, "process.png", $title, $path, $category, $external, $disabled );
	$jomres_mainmenu_thirdparty_options                 = get_showtime( 'jomres_mainmenu_thirdparty_options' );
	$jomres_mainmenu_thirdparty_options[ ][ 'OPTIONS' ] = $option;
	set_showtime( 'jomres_mainmenu_thirdparty_options', $jomres_mainmenu_thirdparty_options );
	}


// Builds the button link information that's later passed to the menu generator
function jomres_mainmenu_option( $link, $image = '', $text, $path = "/JOMRES_ROOT_DIRECTORY/images/jomresimages/small/", $category = null, $external = false, $disabled = false )
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$siteConfig     = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig       = $siteConfig->get();
	$link           = jomresURL( $link );
	$link           = jomresValidateUrl( $link );
	
	if ( $jrConfig[ 'development_production' ] == 'production' && $category == jr_gettext( "_JOMRES_SEARCH_BUTTON", _JOMRES_SEARCH_BUTTON, false, false ) )
		{
		return;
		}
	
	if ( $image == '' ) $image = 'Prompt.png';

	if ( !file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'images' . JRDS . 'jomresimages' . JRDS . 'small' . JRDS . $image ) ) $path = get_showtime( 'eLiveSite' );
	else
	$path = get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/jomresimages/small/';

	if ( !isset( $category ) ) $category = 'misc';

	if ( !strstr( $image, "blank.png" ) && strlen( $link ) > 0 && strlen( $text ) > 0 ) return array ( "link" => $link, "image" => $image, "menu_name" => $text, "image_path" => $path, "category" => $category, "external" => $external, "disabled" => $disabled );
	else
	return;
	}

function jomres_make_image_popup( $title = "", $image = "", $image_rel_path = "", $arguments = array (), $thumbnail = "", $thumbnail_rel_path = "" )
	{
	if ( $image == "" ) return false;

	$width  = "";
	$height = "";
	if ( $thumbnail == "" )
		{
		$width     = "width='45px'";
		$height    = "height='45px'";
		$thumbnail = $image;
		}

	$id = generateJomresRandomString( 10 );

	$sizes = getimagesize( $image_rel_path . $image );
	if ( !$sizes ) // allow_url_fopen is disabled, therefore getimagesize will not work and $sizes will be "false".
		{
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $image_rel_path . $image );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_USERAGENT, 'Jomres' );
		$data        = curl_exec( $ch );
		$resource    = imagecreatefromstring( $data );
		$modal_width = imagesx( $resource ) + 30;
		if ( $modal_width == 30 || !$modal_width ) // Yet another security setting stopping PHP from doing it's job, let's fall back to the maxwidth config setting.
			{
			$siteConfig  = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig    = $siteConfig->get();
			$max_width   = $jrConfig[ 'maxwidth' ];
			$modal_width = $max_width + 30;
			}
		}
	else
	$modal_width = $sizes[ 0 ] + 30;

	$title           = str_replace( "'", "", $title );
	$close_dialog_js = 'jomresJquery(".ui-widget-overlay").live("click", function() {jomresJquery("#' . $id . '").dialog("close");});';
	$onClick         = "onClick='jomresJquery( \"#" . $id . "\" ).dialog({dialogClass:\"\",width:" . $modal_width . ",modal:true,title:\"" . $title . "\"});" . $close_dialog_js . "'";
	$link            = '<a href="javascript:void(0);" ' . $onClick . ' ><img src="' . $thumbnail_rel_path . $thumbnail . '" ' . $width . ' ' . $height . ' alt="' . $title . '" ></a>';
	$image_div       = '<div id="' . $id . '" style="display:none;"><img src="' . $image_rel_path . $image . '"></div>';

	return $image_div . $link;
	}


function admins_first_run( $manual_trigger = false )
	{
	$logfile   = JOMRES_SYSTEMLOG_PATH . 'admins_first_run.txt';
	$threshold = 25;

	if ( !file_exists( $logfile ) || $manual_trigger )
		{

		if ( !$manual_trigger )
			{
			touch( $logfile );
			$count = 0;
			}
		if ( !$manual_trigger )
			{
			echo '<div  class="modal" tabindex="-1" role="dialog" id="first_run" style="display:none" title="Welcome to Jomres, Joomla\'s favourite hotel booking system">';
			if ( using_bootstrap() )
				{
				echo '<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>Getting Started with Jomres</h3></div>';
				}
			else
				{
				echo '<h3>Getting Started with Jomres</h3>';
				}

			}
		else
		echo '<div id = "first_run" title="Welcome to Jomres, Joomla\'s favourite hotel booking system">';

		if ( !using_bootstrap() ) $class = "ui-state-highlight";
		else
		$class = "alert";

		if ( !$manual_trigger ) echo '<p class="' . $class . '">This appears to be the first time you\'ve used Jomres* so here is a little reading material you will probably want to look at.</p>';

		if ( !using_bootstrap() )
			{
			$class = "ui-widget-content ui-corner-all";
			$style = "margin-left:5px;margin-right:5px;";
			}
		else
			{
			$class = "";
			$style = "";
			}

		echo '
		<div class="modal-body">
		<div class="' . $class . '" style="width:100%;">
		<div style="' . $style . '">
		<h3 class="page-header">Introduction.</h3>
		<p>Firstly, a basic installation of Jomres, with absolutely no plugins, is a working booking extension for Joomla and Wordpress. Whilst this is sufficient for a small site with just one property you may quickly find that you want to add more functionality and features to the system, taking it from a simple booking system to a full online booking portal where you can gain revenue from listing properties on your site, earning commission, or taking booking deposits online.</p>
		<p>Unless you want to build the code yourself, the best source of additional functionality is usually the <a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=showplugins" target="_blank">Jomres Plugin Manager.</a> We have approximately <a href="http://manual.jomres.net/site_manager_s_guide.html?ms=AQAAAAAAAAAS&mw=MjQw&st=MA==&sct=MA==" target="_blank">70 plugins available</a> that extend the system and we\'ve worked hard to make the Plugin Manager extremely easy to use. If you have a <a href="http://www.jomres.net/my-account/buy" target="_blank">Solo</a>, <a href="http://www.jomres.net/my-account/buy" target="_blank">Silver</a> or <a href="http://www.jomres.net/my-account/buy" target="_blank">Gold</a> download and support key, then you will be able to download any plugins listed in the Plugin Manager, once you have entered your license number in the Support Key field in <a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=showSiteConfig" target="_blank">Site Configuration.</a> You may also want to checkout our <a href="http://www.jomres.net/support-mainmenu-209/partners" target="_blank">Partners page</a>, as they also develop plugins for Jomres and we work closely with them to this end.</p>
		<h3 class="page-header">First steps.</h3>
		<p>Now that you\'ve seen some of the extra features on offer, you are ready to start setting up your site. To begin with, we\'d like you to ignore the "administrator" area of Jomres altogether for the time being, a new installation of Jomres includes sample data that you can play around with later, but for now you should experiment with configuring your default property.
		<ol>
			<li>When Jomres is installed, the first thing it does is configure your "admin" user to be a Super Property Manager. Super Managers are akin to a Root user in linux, with super powers unavailable to normal Property Managers. If your administrator user is a different user you might need to add them as a Super Property Manager via the <a href="' . JOMRES_SITEPAGE_URL_ADMIN . '&task=managers_choose" target="_blank">Show Profiles</a> feature. View it now just to check that "admin" (or your chosen Joomla user\'s username) is listed and has a "ninja" icon under the Access Level column. If they haven\'t you will need to <a href="http://manual.jomres.net/show_profiles.html" target="_blank">add them</a> before you log into the frontend of your site.</li>
			';
			if ( this_cms_is_joomla())
				{
				echo '<li>Next, add Jomres to your <a href="' . get_showtime( 'live_site' ) . '/administrator/index.php?option=com_menus&view=items&menutype=mainmenu" target="_blank"> Main Menu</a>, as you would any other Joomla extension.</li>';
				echo '<li>Now go to the <a href="' . get_showtime( 'live_site' ) . '/index.php" target="_blank">public pages</a> of your site and log in as "admin". When you click on the <a href="' . get_showtime( 'live_site' ) . '/index.php?option=com_jomres" target="_blank">Main Menu link to Jomres</a>, as you are logged in, you will see the <a href="http://manual.jomres.net/your_toolbar_.html?ms=CQAAAAAAAAAiIA==&mw=MjQw&st=MA==&sct=MA==" target="_blank">Property Manager\'s toolbar</a>. Go to the button marked "Tariffs & Rooms" (under Settings) and click on it.</li>';
			
				}
			elseif (this_cms_is_wordpress())
				{
				echo '<li>Now you want to make sure that Jomres pages are visible to site visitors, so you will need to add the <i>[jomres]</i> shortcode to a post to display your Jomres pages in the frontend of Wordpress.</li>';

				echo '<li>Now go to the <a href="' . get_showtime( 'live_site' ) . '/index.php" target="_blank">public pages</a> of your site and log in as "admin". When you visit the post you added the shortcode to, as you are logged in, you will see the <a href="http://manual.jomres.net/your_toolbar_.html?ms=CQAAAAAAAAAiIA==&mw=MjQw&st=MA==&sct=MA==" target="_blank">Property Manager\'s toolbar</a>. Go to the button marked "Tariffs & Rooms" (under Settings) and click on it.</li>';
				}

			echo '<li>Here you will see a number of rooms and their prices. For now, don\'t make any changes, just click the Save icon (you must click Save on this first property). Now you are ready to play around with the booking form and generally get used to using Jomres.</li>
		</ol>
		</p>
		<h3 class="page-header">Further reading.</h3>
		<p>Jomres is fully documented in the <a href="http://manual.jomres.net/" target="_blank">online manual</a>. There is a wealth of information here, including the <a href="http://manual.jomres.net/site_manager_s_guide.html?ms=AQAAAAAAAAAS&mw=MjQw&st=MA==&sct=MA=="  target="_blank">plugin list</a>, but a good place to begin at is the <a href="http://manual.jomres.net/getting_started_1.html?ms=AQAAAAAAAAAS&mw=MjQw&st=MA==&sct=MA==" target="_blank">Getting Started</a> page.</p>
		<p>To learn how to configure your property(s) you should take a look at the <a href="http://manual.jomres.net/property_manager_s_guide.html?ms=AQAAAAAAAAAS&mw=MjQw&st=MA==&sct=MA==" target="_blank">Property Manager\'s guide.</a> This section of the manual is aimed at Property Managers themselves, and discusses among other things the <a href="http://manual.jomres.net/your_toolbar_.html?ms=AQAAAAAAAAAy&mw=MjQw&st=MA==&sct=MA==" target="_blank">Manager\'s Toolbar.</a> Note that the toolbar shows the manager\'s toolbar with all of the most commonly installed plugin\'s buttons, until you\'ve installed the relevant plugins your toolbar will not have as many icons.</p>
		</div></div></div>
		';

		if ( !using_bootstrap() ) $class = "ui-state-highlight";
		else
		$class = "alert alert-info";

		if ( !$manual_trigger ) echo ' <div class="' . $class . '">If you\'ve used Jomres before or are happy exploring the manual on your own just click the big X at the top right of this popup and we won\'t bother you again.</div>';

		echo '</div>
		';
		if ( !$manual_trigger )
			{
			if ( using_bootstrap() ) echo '<script>jomresJquery(document).ready(function() {jomresJquery(\'#first_run\').modal()});</script>';
			else
			echo '<script>jomresJquery( "#first_run" ).dialog({width:1024,modal:true});</script>';
			}
		}
	// else
	// {
	// $count = (int)file_get_contents ($logfile);

	// if (!using_bootstrap())
	// $class = "ui-state-highlight";
	// else
	// $class = "alert alert-info";

	// if ($count == $threshold)
	// {
	// echo '<div id = "jed" style="display:none;" title="Review Jomres on the Joomla Extension Directory">';
	// echo '<p>Please remember to post a review about Jomres on the <a href="http://extensions.joomla.org/extensions/vertical-markets/booking-a-reservations/booking/335" target="_blank">Joomla Extension Directory.</a> The JED is our primary source of business and we need your review!</p>';
	// echo '<p class="'.$class.'">This is the one and only time you will see this feedback request (unless you delete <i>"'.$logfile.'"</i>).</p>';
	// echo '</div>';
	// echo '<script>jomresJquery( "#jed" ).dialog({width:500,modal:true});</script>';

	// }
	// }

	// if ($count <= $threshold && !$manual_trigger && !isset($_REQUEST['no_html']) )
	// {
	// $count++;
	// $fp=fopen($logfile,'r+');
	// fwrite($fp, $count );
	// fclose($fp);
	// }
	}

/* function query_shop( $request = '' )
	{
	if ( $request == "" )
		{
		echo "Request not set";
		exit;
		}
	if ( !function_exists( "curl_init" ) ) return "Error, CURL not enabled on this server.";
	else
		{
		$curl_handle = curl_init();
		curl_setopt( $curl_handle, CURLOPT_URL, 'http://license-server.jomres.net/shop/index.php?' . $request );
		curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 );
		curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres' );
		curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, 1 );
		$response = curl_exec( $curl_handle );
		curl_close( $curl_handle );

		return json_decode( $response );
		}
	} */

// Adapted from http://uk.php.net/manual/en/function.time.php#89415
function nicetime( $date )
	{
	if ( empty( $date ) )
		{
		return "";
		}
	$periods = array ( jr_gettext( '_JOMRES_DATEPERIOD_SECOND', _JOMRES_DATEPERIOD_SECOND, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_MINUTE', _JOMRES_DATEPERIOD_MINUTE, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_HOUR', _JOMRES_DATEPERIOD_HOUR, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_DAY', _JOMRES_DATEPERIOD_DAY, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_WEEK', _JOMRES_DATEPERIOD_WEEK, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_MONTH', _JOMRES_DATEPERIOD_MONTH, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_YEAR', _JOMRES_DATEPERIOD_YEAR, false, false ), jr_gettext( '_JOMRES_DATEPERIOD_DECADE', _JOMRES_DATEPERIOD_DECADE, false, false ) );
	$lengths = array ( "60", "60", "24", "7", "4.35", "12", "10" );

	$now       = time();
	$unix_date = strtotime( $date );
	// check validity of date
	if ( empty( $unix_date ) )
		{
		return "";
		}

	// is it future date or past date
	if ( $now > $unix_date )
		{
		$difference = $now - $unix_date;
		$tense      = jr_gettext( '_JOMRES_DATEPERIOD_AGO', _JOMRES_DATEPERIOD_AGO, false, false );
		}
	else
		{
		$difference = $unix_date - $now;
		$tense      = jr_gettext( '_JOMRES_DATEPERIOD_FROMNOW', _JOMRES_DATEPERIOD_FROMNOW, false, false );
		}

	for ( $j = 0; $difference >= $lengths[ $j ] && $j < count( $lengths ) - 1; $j++ )
		{
		$difference /= $lengths[ $j ];
		}

	$difference = round( $difference );

	if ( $difference != 1 )
		{
		$periods[ $j ] .= jr_gettext( '_JOMRES_DATEPERIOD_S', _JOMRES_DATEPERIOD_S );
		}

	return "$difference $periods[$j] {$tense}";
	}


function get_remote_ip_number()
	{
	$dirty_ip = $_SERVER[ 'REMOTE_ADDR' ];
	$bang     = explode( ".", $dirty_ip );
	if ( count( $bang ) != 4 ) return "0.0.0.0";

	return (int) $bang[ 0 ] . "." . (int) $bang[ 1 ] . "." . (int) $bang[ 2 ] . "." . (int) $bang[ 3 ];
	}



function set_booking_number()
	{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	if (!isset($tmpBookingHandler->tmpbooking[ "booking_number" ]) || trim($tmpBookingHandler->tmpbooking[ "booking_number" ]) == "" || $tmpBookingHandler->tmpbooking[ "booking_number" ] ==0 )
		{
		$keeplooking       = true;
		while ( $keeplooking ):
			$cartnumber = mt_rand( 10000000, 99999999 );
			$query  = "SELECT contract_uid FROM #__jomres_contracts WHERE tag like '" . $cartnumber . "' LIMIT 1";
			$bklist = doSelectSql( $query );
			if ( count( $bklist ) == 0 ) $keeplooking = false;
		endwhile;
		$tmpBookingHandler->tmpbooking[ "booking_number" ] = $cartnumber;
		}
	else
		$cartnumber = $tmpBookingHandler->tmpbooking[ "booking_number" ];
	return $cartnumber;
	}

function get_booking_number()
	{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );

	return (int) $tmpBookingHandler->tmpbooking[ "booking_number" ];
	}

function get_all_super_property_managers()
	{
	$super_property_managers = array ();
	$query                   = "SELECT * FROM #__jomres_managers WHERE pu = 1";
	$result                  = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$super_property_managers[ $r->userid ][ 'manager_uid' ]     = $r->manager_uid;
			$super_property_managers[ $r->userid ][ 'userid' ]          = $r->userid;
			$super_property_managers[ $r->userid ][ 'username' ]        = $r->username;
			$super_property_managers[ $r->userid ][ 'access_level' ]    = $r->access_level;
			$super_property_managers[ $r->userid ][ 'currentproperty' ] = $r->currentproperty;
			$super_property_managers[ $r->userid ][ 'pu' ]              = $r->pu;
			$super_property_managers[ $r->userid ][ 'apikey' ]          = $r->apikey;
			$super_property_managers[ $r->userid ][ 'suspended' ]       = $r->suspended;
			$super_property_managers[ $r->userid ][ 'users_timezone' ]  = $r->users_timezone;
			}
		}

	return $super_property_managers;
	}

function get_all_suspended_managers()
	{
	$suspended_managers = array ();
	$query              = "SELECT * FROM #__jomres_managers WHERE suspended = 1";
	$result             = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$suspended_managers[ $r->userid ][ 'manager_uid' ]     = $r->manager_uid;
			$suspended_managers[ $r->userid ][ 'userid' ]          = $r->userid;
			$suspended_managers[ $r->userid ][ 'username' ]        = $r->username;
			$suspended_managers[ $r->userid ][ 'access_level' ]    = $r->access_level;
			$suspended_managers[ $r->userid ][ 'currentproperty' ] = $r->currentproperty;
			$suspended_managers[ $r->userid ][ 'pu' ]              = $r->pu;
			$suspended_managers[ $r->userid ][ 'apikey' ]          = $r->apikey;
			$suspended_managers[ $r->userid ][ 'suspended' ]       = $r->suspended;
			$suspended_managers[ $r->userid ][ 'users_timezone' ]  = $r->users_timezone;
			}
		}

	return $suspended_managers;
	}


function detect_property_uid()
	{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$thisJRUser        = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( isset( $_REQUEST[ 'selectedProperty' ] ) ) $property_uid = intval( jomresGetParam( $_REQUEST, 'selectedProperty', 0 ) );
	else
	$property_uid = intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );

	// Finding the property uid
	$numberOfPropertiesInSystem = (int) get_showtime( 'numberOfPropertiesInSystem');
	$all_properties_in_system=get_showtime( 'all_properties_in_system' );

	if ( $numberOfPropertiesInSystem == 1 )
		{
		if ( !$thisJRUser->userIsManager )
			{
			foreach ( $all_properties_in_system as $prop )
				{
				$property_uid = (int) $prop;
				}
			}
		else
			{
			$parray = array ();
			foreach ( $all_properties_in_system as $prop )
				{
				$parray[ ] = (int) $prop;
				}
			if ( in_array( $defaultProperty, $parray ) ) $property_uid = $defaultProperty;
			else
			$property_uid = $parray[ 0 ];
			}
		}
	else if ( $thisJRUser->userIsManager ) $property_uid = $defaultProperty;

	if ( get_showtime( 'task' ) == "showRoomDetails" )
		{
		$roomUid  = jomresGetParam( $_REQUEST, 'roomUid', 0 );
		$query    = "SELECT propertys_uid FROM #__jomres_rooms WHERE  room_uid  = '" . (int) $roomUid . "'";
		$roomList = doSelectSql( $query );
		if ( count( $roomList ) > 0 )
			{
			foreach ( $roomList as $room )
				{
				$property_uid = (int) $room->propertys_uid;
				}
			}
		}

	if ( ( get_showtime( 'task' ) == "handlereq" || get_showtime( 'task' ) == "completebk" || get_showtime( 'task' ) == "processpayment" ) && !$thisJRUser->userIsManager )
		{
		$property_uid = (int) $tmpBookingHandler->getBookingFieldVal( "property_uid" );
		}

	// Payment specific stuff.
	if ( get_showtime( 'task' ) == "completebk" || get_showtime( 'task' ) == "processpayment" || get_showtime( 'task' ) == "confirmbooking" )
		{
		if ( isset( $_POST[ 'specialReqs' ] ) )
			{
			$specialReqs = getEscaped( jomresGetParam( $_POST, 'specialReqs', "" ) );
			$tmpBookingHandler->updateBookingField( "error_log", $specialReqs );
			$tmpBookingHandler->saveBookingData();
			}
		}

	// Finish finding the property uid
	return $property_uid;

	}

function jomres_validate_gateway_plugin()
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $thisJRUser->userIsManager ) return "NA";

	$paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
	$paypal_settings->get_paypal_settings();
	$mrConfig          = getPropertySpecificSettings();
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$property_uid      = get_showtime( 'property_uid' );
	if ( ($mrConfig[ 'useOnlinepayment' ] == "1" || $paypal_settings->paypalConfigOptions[ 'override' ] == "1") && ((int)$mrConfig['requireApproval'] == 0 || $tmpBookingHandler->tmpbooking['secret_key_payment'] ))
		{
		if ( $paypal_settings->paypalConfigOptions[ 'override' ] == "1" ) return "paypal";

		if ( !isset( $_REQUEST[ 'plugin' ] ) || $_REQUEST[ 'plugin' ] == "" )
			{
			gateway_log( "Error, gateway name not sent, probable hack attempt" );
			trigger_error( "Error, gateway name not sent, probable hack attempt", E_USER_ERROR );
			die();
			}
		if ( !isset( $_REQUEST[ 'plugin' ] ) )
			{
			$plugin = $tmpBookingHandler->tmpbooking[ "gateway" ];
			}
		else
			{
			$plugin                                     = jomresGetParam( $_REQUEST, 'plugin', "" );
			$tmpBookingHandler->tmpbooking[ "gateway" ] = $plugin;
			}
		$query        = "SELECT id,plugin FROM #__jomres_pluginsettings WHERE prid = " . (int) $property_uid . " AND `plugin` = '" . (string) $plugin . "' AND setting = 'active' AND value = '1'";
		$gatewayDeets = doSelectSql( $query );
		if ( count( $gatewayDeets ) != 1 )
			{
			gateway_log( "Error, gateway passed either doesn't exist, or is not active, probable hack attempt" );
			trigger_error( "Error, gateway passed either doesn't exist, or is not active, probable hack attempt", E_USER_ERROR );
			die();
			}
		}
	else
		{
		$plugin = "NA";
		}

	return $plugin;
	}


function jomres_generate_tab_anchor( $string )
	{
	// Commented out code that tries to make the anchor of the tabs based on the name of the tab. Too many non-latin users were reporting problems with tabs.
	// Instead we'll just use the random string generator to create the anchor.
	/* 	$unwanted = array("'","\"",',');
	$string = str_replace($unwanted,"-",$string);
	if (function_exists('filter_var'))
		$anchor = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH);
	else
		$anchor = getEscaped($string);

	$anchor = str_replace(" ","_",$anchor);
	if (strlen($anchor)==0) // Give up trying to filter out unwanted chars, instead we'll just replace any spaces and return the string
		$anchor = str_replace(" ","_",$string); */

	$anchor = generateJomresRandomString( 15 );

	return $anchor;
	}



function get_showtime( $setting )
	{
	$showtime = jomres_singleton_abstract::getInstance( 'showtime' );
	//$showtime = jomres_singleton_abstract::getInstance('showtime');
	$result = $showtime->$setting;

	//var_dump ($setting." ".$result);
	return $result;
	}

function set_showtime( $setting, $value )
	{
	//echo $setting." - ".$value."<br>";
	$showtime = jomres_singleton_abstract::getInstance( 'showtime' );
	//$showtime = jomres_singleton_abstract::getInstance('showtime');
	if ( !$showtime->$setting = $value ) return false;

	return true;
	}


function get_plugin_settings( $plugin, $prop_id = 0 )
	{
	$settingArray = array ();
	$thisJRUser   = jomres_singleton_abstract::getInstance( 'jr_user' );

	if ( $thisJRUser->userIsManager )
		{
		$property_uid = (int) getDefaultProperty();
		}
	else
		{
		if ( $prop_id == 0 )
			{
			$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
			$property_uid      = (int) $tmpBookingHandler->getBookingPropertyId();
			}
		else
		$property_uid = (int) $prop_id;
		}

	if ( $property_uid == 0 )
		{
		return false;
		}
	$query        = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '" . (int) $property_uid . "' AND plugin = '" . $plugin . "' ";
	$settingsList = doSelectSql( $query );
	foreach ( $settingsList as $set )
		{
		$settingArray[ $set->setting ] = $set->value;
		}

	if ( $plugin == "paypal" )
		{
		$paypal_settings = jomres_singleton_abstract::getInstance( 'jrportal_paypal_settings' );
		$paypal_settings->get_paypal_settings();

		if ( $paypal_settings->paypalConfigOptions[ 'override' ] == "1" )
			{
			$settingArray[ 'usesandbox' ]      = $paypal_settings->paypalConfigOptions[ 'usesandbox' ];
			$settingArray[ 'currencycode' ]    = $paypal_settings->paypalConfigOptions[ 'currencycode' ];
			$settingArray[ 'paypalemail' ]     = $paypal_settings->paypalConfigOptions[ 'email' ];
			$settingArray[ 'pendingok' ]       = "0";
			$settingArray[ 'receiveIPNemail' ] = "1";
			$settingArray[ 'active' ]          = "1";
			}
		}

	return $settingArray;
	}

function jr_import( $class )
	{
	if ( class_exists( 'j00001start' ) ) // Wont init properly if we call this any time sooner than when j00001start has been set up
		{
		$MiniComponents     = jomres_singleton_abstract::getInstance( 'mcHandler' );
		$plugin_directories = $MiniComponents->miniComponentDirectories;
		}
	else
	$plugin_directories = false;
	if ( !class_exists( $class ) )
		{
		if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS . 'custom_code' . JRDS . $class . ".class.php" ) )
			{
			$result = require( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS . 'custom_code' . JRDS . $class . ".class.php" );
			}
		else
			{
			search_core_and_remote_dirs_for_classfiles();
			$classes = get_showtime( 'plugin_classes_paths' );
			if ( isset( $classes[ $class ] ) && file_exists( $classes[ $class ][ 'path' ] . $class . ".class.php" ) )
				{
				$result = require( $classes[ $class ][ 'path' ] . $class . ".class.php" );
				}
			else
				{
				if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'classes' . JRDS . $class . ".class.php" ) )
					{
					$result = require( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'classes' . JRDS . $class . ".class.php" );
					}
				else
					{
					if ( $plugin_directories )
						{
						foreach ( $plugin_directories as $directory )
							{
							if ( file_exists( $directory . $class . ".class.php" ) ) $result = require( $directory . $class . ".class.php" );
							}
						if ( !class_exists( $class ) ) // We'll echo and exit here. Assuming that we're a developer we'll want to see on the page that the class doesn't exist, rather than have an error triggered. Addition of this also means that the following trigger_error will never kick in if any plugins are installed
							{
							echo "Error, class " . $class . " doesn't exist.";
							exit;
							}
						}
					else
						{
						trigger_error( "Error, class file " . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'classes' . JRDS . $class . ".class.php" . " doesn't exist" );
						}
					}
				}
			}
		}
	}

function search_core_and_remote_dirs_for_classfiles()
	{
	$classes = get_showtime( 'plugin_classes_paths' );
	if ( is_null( $classes ) )
		{
		$core_plugins_directories  = array ();
		$remote_plugin_directories = array ();
		$core_plugins_directory    = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'core-plugins' . JRDS;
		$remote_plugin_directory   = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'remote_plugins' . JRDS;

		if ( is_dir( $core_plugins_directory ) )
			{
			$d = @dir( $core_plugins_directory );
			while ( false !== ( $entry = $d->read() ) )
				{
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$core_plugins_directories[ ] = $core_plugins_directory . $entry . JRDS;
					}
				}
			}

		if ( is_dir( $remote_plugin_directory ) )
			{
			$d = @dir( $remote_plugin_directory );
			while ( false !== ( $entry = $d->read() ) )
				{
				if ( substr( $entry, 0, 1 ) != '.' )
					{
					$remote_plugin_directories[ ] = $remote_plugin_directory . $entry . JRDS;
					}
				}
			}

		$all_directories = array_merge( $core_plugins_directories, $remote_plugin_directories );

		$classes = array ();
		foreach ( $all_directories as $directory )
			{
			$d = @dir( $directory );
			if ( $d )
				{
				while ( false !== ( $entry = $d->read() ) )
					{
					$filename = $entry;
					if ( substr( $entry, 0, 1 ) != '.' )
						{
						if ( strstr( $entry, '.class.php' ) )
							{
							if ( strlen( $filename ) > 8 )
								{
								$strippedName = str_replace( ".", "", $filename );
								$strippedName = substr( $strippedName, 0, -8 );
								}
							else
							$strippedName = $filename;
							$classfileEventPoint = substr( $strippedName, 1, 5 );
							if ( !is_numeric( $classfileEventPoint ) )
								{
								$classes[ $strippedName ] = array ( "path" => $directory, "class" => $strippedName );
								}
							}
						}
					}
				$d->close();
				}
			}
		set_showtime( 'plugin_classes_paths', $classes );
		}
	}

function jomresValidateUrl( $url )
	{
	$url = str_replace( "&amp;", "&", $url );
	$url = str_replace( "&", "&amp;", $url );

	return $url;
	}


function getIntegratedSearchModuleVals()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	$vals                    = array ();
	$vals[ 'useCols' ]       = $jrConfig[ 'integratedSearch_useCols' ];
	$vals[ 'featurecols' ]   = $jrConfig[ 'integratedSearch_featurecols' ];
	$vals[ 'geosearchtype' ] = $jrConfig[ 'integratedSearch_geosearchtype' ];
	$vals[ 'propertyname' ]  = $jrConfig[ 'integratedSearch_propertyname' ];
	$vals[ 'ptype' ]         = $jrConfig[ 'integratedSearch_ptype' ];
	$vals[ 'room_type' ]     = $jrConfig[ 'integratedSearch_room_type' ];

	$vals[ 'description' ]           = $jrConfig[ 'integratedSearch_description' ];
	$vals[ 'availability' ]          = $jrConfig[ 'integratedSearch_availability' ];
	$vals[ 'geosearch_dropdown' ]    = $jrConfig[ 'integratedSearch_geosearchtype_dropdown' ];
	$vals[ 'propertyname_dropdown' ] = $jrConfig[ 'integratedSearch_propertyname_dropdown' ];
	$vals[ 'ptype_dropdown' ]        = $jrConfig[ 'integratedSearch_ptype_dropdown' ];
	$vals[ 'room_type_dropdown' ]    = $jrConfig[ 'integratedSearch_room_type_dropdown' ];
	$vals[ 'features' ]              = $jrConfig[ 'integratedSearch_features' ];
	$vals[ 'features_dropdown' ]     = $jrConfig[ 'integratedSearch_features_dropdown' ];
	$vals[ 'priceranges' ]           = $jrConfig[ 'integratedSearch_priceranges' ];
	$vals[ 'pricerange_increments' ] = $jrConfig[ 'integratedSearch_pricerange_increments' ];
	$vals[ 'selectcombo' ]           = $jrConfig[ 'integratedSearch_selectcombo' ];

	$vals[ 'guestnumber' ] = $jrConfig[ 'integratedSearch_guestnumber' ];
	$vals[ 'stars' ]       = $jrConfig[ 'integratedSearch_stars' ];

	return $vals;
	}


function getThisMonthName( $monthNumber, $editable = true )
	{
	$monthNumber   = intval( $monthNumber - 1 );
	$mName         = jr_gettext( '_JRPORTAL_MONTHS_LONG_' . $monthNumber, '_JRPORTAL_MONTHS_LONG_' . $monthNumber );
	$thisMonthName = jr_gettext( '_JOMRES_CUSTOMTEXT_' . $monthNumber, $mName, $editable );

	return $thisMonthName;
	}

function install_external_plugin( $plugin_name, $plugin_type, $mambot_type = '', $params = '', $remote_plugin_component_folder = "c", $remote_plugin_administrator_folder = "a", $remote_plugin_module_folder = "m", $remote_plugin_mambot_folder = "b" )
	{

	switch ( $plugin_type )
		{
		case 'widget': // Wordpress widgets
			$widget_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS;
			$widget_target = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "wp-content" . JRDS . "plugins" . JRDS . $plugin_name;
			if ( !test_and_make_directory( $widget_target ) )
				{
				error_logging( "Error, unable to write to " . $widget_target . " Please ensure that the parent path is writable by the web server " );
				return false;
				}
			
			$plugin_info_file = $widget_source . "plugin_info.php";
			$plugin_info_file_temp = JOMRES_SYSTEMLOG_PATH . "plugin_info.php";
			copy ($plugin_info_file , $plugin_info_file_temp);
			
			
			$widget_move_result     = dirmv( $widget_source, $widget_target, true, $funcloc = "/" );
			
			if ( $widget_move_result[ 'success' ] ) 
				{
				copy ($plugin_info_file_temp , $plugin_info_file);
				unlink ($plugin_info_file_temp);
				return true;
				}
			else
				{
				return false;
				}
			
		break;
		case 'module':
			$module_full_name = "mod_" . $plugin_name;
			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . 'plugin_info.php' ) )
				{
				$module_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . $remote_plugin_module_folder . JRDS;
				$module_xml_source = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . "xml" . JRDS . "1.5";
				}
			else
				{
				$module_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "remote_plugins" . JRDS . $plugin_name . JRDS . $remote_plugin_module_folder . JRDS;
				$module_xml_source = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "remote_plugins" . JRDS . $plugin_name . JRDS . "xml" . JRDS . "1.5";
				}

			$module_target = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "modules" . JRDS . $module_full_name;
			if ( !test_and_make_directory( $module_target ) )
				{
				error_logging( "Error, unable to write to " . $module_target . " Please ensure that the parent path is writable by the web server " );

				return false;
				}
			if ( !file_exists( $module_target . JRDS . $module_full_name . ".xml" ) )
				{
				$query  = "SELECT id FROM #__modules where title = '" . $plugin_name . "'";
				$result = doSelectSql( $query );
				if ( count( $result ) > 0 )
					{
					$query  = "DELETE FROM #__modules WHERE `title` = '" . $plugin_name . "'";
					$result = doInsertSql( $query, "" );
					}

				if ( _JOMRES_DETECTED_CMS == "joomla15" )
					{
					$query = "INSERT INTO #__modules
					(`title`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`numnews`,`access`,`showtitle`,`params`,`iscore`,`client_id`)
					VALUES
					('" . $plugin_name . "','','0','left','0','0000-00-00 00:00:00','0','mod_" . $plugin_name . "','0','0','1','" . $params . "','0','0')";
					}
				elseif ( _JOMRES_DETECTED_CMS == "joomla16" )
					{
					$query = "INSERT INTO #__modules
					(
					`title`,`note`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`access`,`showtitle`,`params`)
					VALUES
					('" . $plugin_name . "','','','0','position-0','0','0000-00-00 00:00:00','0','mod_" . $plugin_name . "','0','1','" . $params . "')";
					}
				elseif ( _JOMRES_DETECTED_CMS == "joomla17" )
					{
					$query = "INSERT INTO #__modules
					(
					`title`,`note`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`access`,`showtitle`,`params`)
					VALUES
					('" . $plugin_name . "','','','0','position-0','0','0000-00-00 00:00:00','0','mod_" . $plugin_name . "','0','1','" . $params . "')";
					}
				elseif ( _JOMRES_DETECTED_CMS == "joomla25" )
					{
					$query = "INSERT INTO #__modules
					(
					`title`,`note`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`access`,`showtitle`,`params`)
					VALUES
					('" . $plugin_name . "','','','0','position-0','0','0000-00-00 00:00:00','0','mod_" . $plugin_name . "','0','1','" . $params . "')";
					}
				elseif ( _JOMRES_DETECTED_CMS == "joomla30" || _JOMRES_DETECTED_CMS == "joomla31" || _JOMRES_DETECTED_CMS == "joomla32"  || _JOMRES_DETECTED_CMS == "joomla33")
					{
					$query = "INSERT INTO #__modules
					(
					`title`,`note`,`content`,`ordering`,`position`,`checked_out`,`checked_out_time`,`published`,`module`,`access`,`showtitle`,`params`)
					VALUES
					('" . $plugin_name . "','','','0','position-0','0','0000-00-00 00:00:00','0','mod_" . $plugin_name . "','0','1','" . $params . "')";
					}
				$result = doInsertSql( $query, "" );
				}
			else // Plugin has already been installed
				{
				$result = true;
				}

			if ( $result )
				{
				//echo "Moving contents of ".$module_xml_source." to ".$module_target."<br/>";
				$module_xml_move_result = dirmv( $module_xml_source, $module_target, true, $funcloc = "/" );
				$module_move_result     = dirmv( $module_source, $module_target, true, $funcloc = "/" );
				if ( $module_move_result[ 'success' ] && $module_xml_move_result[ 'success' ] ) return true;
				else
				return false;
				}
			else
				{
				return false;
				}
			break;
		case 'mambot':
			//$mambot_full_name=$plugin_name;

			if ( file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . 'plugin_info.php' ) )
				{
				if ( _JOMRES_DETECTED_CMS == "joomla15" )
					{
					$mambot_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . "b" . JRDS;
					$mambot_xml_source = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . "xml" . JRDS . "1.5" . JRDS;
					}
				else
					{
					$mambot_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . $remote_plugin_mambot_folder . JRDS;
					$mambot_xml_source = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name;
					}
				}
			else
				{
				$mambot_source     = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "remote_plugins" . JRDS . $plugin_name . JRDS . $remote_plugin_mambot_folder . JRDS;
				$mambot_xml_source = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "remote_plugins" . JRDS . $plugin_name;
				}


			if ( _JOMRES_DETECTED_CMS == "joomla15" ) $mambot_target = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "plugins" . JRDS . $mambot_type;
			else
			$mambot_target = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "plugins" . JRDS . $mambot_type . JRDS . $plugin_name;

			if ( !test_and_make_directory( $mambot_target ) )
				{
				error_logging( "Error, unable to write to " . $mambot_target . " Please ensure that the parent path is writable by the web server " );
				return false;
				}


			// Superceeded by Joomla's discover feature
			if ( _JOMRES_DETECTED_CMS == "joomla15" )
				{
				$table  = "#__plugins";
				$query  = "SELECT id FROM " . $table . " where name = '" . $plugin_name . "'";
				$result = doSelectSql( $query );
				if ( count( $result ) > 0 )
					{
					$query  = "DELETE FROM " . $table . " WHERE `name` = '" . $plugin_name . "'";
					$result = doInsertSql( $query, "" );
					}
				$query  = "INSERT INTO " . $table . "
				(`name`,`element`,`folder`,`access`,`ordering`,`published`,`iscore`,`client_id`,`checked_out`,`checked_out_time`,`params`)
				VALUES
				('" . $plugin_name . "','" . $plugin_name . "','" . $mambot_type . "','0','0','1','0','0','0','0000-00-00 00:00:00','" . $params . "')";
				$result = doInsertSql( $query, "" );
				}

			$mambot_xml_move_result = dirmv( $mambot_xml_source, $mambot_target, true, $funcloc = "/" );
			$mambot_move_result     = dirmv( $mambot_source, $mambot_target, true, "/" );

			if ( $mambot_xml_move_result[ 'success' ] && $mambot_move_result[ 'success' ] )
				{
				copy( $mambot_target . JRDS . "plugin_info.php", JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "core-plugins" . JRDS . $plugin_name . JRDS . 'plugin_info.php' );
				unlink( $mambot_target . JRDS . "plugin_info.php" );
				@unlink( $mambot_target . JRDS . "plugin_install.php" );

				return true;
				}
			else
				{
				return false;
				}

			break;
		}
	}

function test_and_make_directory( $dir )
	{
	if ( !is_dir( $dir ) )
		{
		if ( !@mkdir( $dir ) )
			{
			echo "Error, unable to make folder " . $dir . " automatically therefore cannot store booking session data. Please create the folder manually and ensure that it's writable by the web server";

			return false;
			}
		else
		return true;
		}
	else
		{
		if ( !is_writable( $dir ) ) return false;
		else
		return true;
		}
	}

if ( !function_exists( 'file_get_contents' ) )
	{
	function file_get_contents( $filename, $incpath = false, $resource_context = null )
		{
		if ( false === $fh = fopen( $filename, 'rb', $incpath ) )
			{
			trigger_error( 'file_get_contents() failed to open stream: No such file or directory', E_USER_WARNING );

			return false;
			}
		clearstatcache();
		if ( $fsize == @filesize( $filename ) )
			{
			$data = fread( $fh, $fsize );
			}
		else
			{
			$data = '';
			while ( !feof( $fh ) )
				{
				$data .= fread( $fh, 8192 );
				}
			}
		fclose( $fh );

		return $data;
		}
	}

function emptyDir( $dir, $root = null )
	{
	if ( $root == null ) $root = $dir;
	if ( !$dh = @opendir( $dir ) ) return false;
	while ( false !== ( $obj = readdir( $dh ) ) )
		{
		if ( $obj == '.' || $obj == '..' ) continue;
		if ( !@unlink( $dir . '/' . $obj ) ) emptyDir( $dir . '/' . $obj, $root );
		}
	closedir( $dh );
	if ( $dir != $root ) @rmdir( $dir );
	}

/*
Does what it says on the tin
*/
function dropPlugin( $pluginName )
	{
	$pluginPath = JOMRESPATH_BASE . JRDS . "remote_plugins" . JRDS . $pluginName;
	if ( file_exists( $pluginPath . JRDS . "plugin_uninstall.php" ) )
		{
		define ( "JOMRES_INSTALLER", 1 );
		include( $pluginPath . JRDS . "plugin_uninstall.php" );
		}
	emptyDir( $pluginPath );
	if ( rmdir( $pluginPath ) ) return true;
	else
		{
		$pluginPath = JOMRESPATH_BASE . JRDS . "core-plugins" . JRDS . $pluginName;
		if ( file_exists( $pluginPath . JRDS . "plugin_uninstall.php" ) )
			{
			define ( "JOMRES_INSTALLER", 1 );
			include( $pluginPath . JRDS . "plugin_uninstall.php" );
			}
		emptyDir( $pluginPath );
		if ( rmdir( $pluginPath ) ) return true;
		}

	return false;
	}

/*
Does what it says on the tin
*/
function queryUpdateServer( $script, $queryString, $serverType = "plugin" )
	{
	include( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'jomres_config.php' );
	$current_version = $mrConfig[ 'version' ];

	if ( $serverType == "plugin" ) $updateServer = "http://plugins.jomres4.net";
	else
	$updateServer = "http://updates.jomres4.net";

	if ( strlen( $script ) == 0 ) $script = "index.php";
	if ( !function_exists( "curl_init" ) )
		{
		$response = "Error, CURL is not enabled on this server. Please contact your hosts to enable it.";
		}
	else
		{
		$curl_handle = curl_init();
		curl_setopt( $curl_handle, CURLOPT_URL, $updateServer . "/" . $script . "?" . $queryString . "&jomresver=" . $current_version );
		curl_setopt( $curl_handle, CURLOPT_CONNECTTIMEOUT, 2 );
		//curl_setopt( $curl_handle, CURLOPT_TIMEOUT, 10 ); // If the plugin server/internet connection is slow and this is enabled an empty plugin list will be returned.
		curl_setopt( $curl_handle, CURLOPT_USERAGENT, 'Jomres' );
		curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, 1 );
		$response = trim( curl_exec( $curl_handle ) );
		curl_close( $curl_handle );
		}

	return $response;
	}


// http://www.php.net/manual/en/function.rename.php#61152
// Moves the contents of source dir to destination dir
function dircopy( $source, $dest, $overwrite = true, $funcloc = null )
	{
	global $copiedFileLog;
	$debugging     = true;
	$copiedFileLog = array ();
	//$success=true;
	/*
		if(is_null($funcloc))
			{
			$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
			$funcloc = '/';
			}
		*/
	if ( !is_dir( $dest . $funcloc ) ) mkdir( $dest . $funcloc ); // make subdirectory before subdirectory is copied
	//echo "Opening " . $source . $funcloc."<br/>";
	if ( $handle = opendir( $source . $funcloc ) )
		{ // if the folder exploration is sucsessful, continue
		//echo "Opened ". $source . $funcloc."<br/>";
		while ( false !== ( $file = readdir( $handle ) ) )
			{ // as long as storing the next file to $file is successful, continue
			if ( $file != '.' && $file != '..' )
				{
				$path  = $source . $funcloc . $file;
				$path2 = $dest . $funcloc . $file;

				if ( is_file( $path ) )
					{
					if ( !@copy( $path, $path2 ) )
						{
						$message = 'File ' . $path . ' could not be moved to '.$path2.', likely a permissions problem.';

						return array ( "success" => false, "errormsg" => $message );
						}
					}
				elseif ( is_dir( $path ) )
					{
					dircopy( $source, $dest, $overwrite, $funcloc . $file . JRDS ); //recurse!
					//rmdir( $path);
					}
				}
			}
		closedir( $handle );
		}
	if ( $debugging )
		{
		foreach ( $copiedFileLog as $m ) echo $m . "<br/>";
		}

	return array ( "success" => true, "errormsg" => '' );
	//echo "Finished upgrade <br/>";
	} // end of dircopy()


// http://www.php.net/manual/en/function.rename.php#61152
// Moves the contents of source dir to destination dir
function dirmv( $source, $dest, $overwrite = true, $funcloc = JRDS )
	{
	global $movedFileLog;
	$debugging    = false;
	$movedFileLog = array ();
	//$success=true;
	/*
		if(is_null($funcloc))
			{
			$dest .= '/' . strrev(substr(strrev($source), 0, strpos(strrev($source), null)));
			$funcloc = '/';
			}
		*/
	if ( !is_dir( $dest . $funcloc ) ) mkdir( $dest . $funcloc ); // make subdirectory before subdirectory is copied
	//echo "Opening " . $source . $funcloc."<br/>";
	if ( $handle = opendir( $source . $funcloc ) )
		{ // if the folder exploration is sucsessful, continue
		//echo "Opened ". $source . $funcloc."<br/>";
		while ( false !== ( $file = readdir( $handle ) ) )
			{ // as long as storing the next file to $file is successful, continue
			if ( $file != '.' && $file != '..' )
				{
				$path  = $source . $funcloc . $file;
				$path2 = $dest . $funcloc . $file;

				if ( is_file( $path ) )
					{
					if ( !is_file( $path2 ) )
						{
						if ( !@rename( $path, $path2 ) )
							{
							if (copy ($oldfile,$newfile)) 
								{
								unlink($oldfile);
								}
							else
								{
								echo 'File (' . $path . ') could not be moved to  '.$path2.', likely a permissions problem.';
								return array ( "success" => false, "errormsg" => 'File (' . $path . ') could not be moved, likely a permissions problem.' );
								}
							}
						}
					else if ( $overwrite )
						{
						if ( !@unlink( $path2 ) )
							{
							echo 'Unable to overwrite file ("' . $path2 . '"), likely to be a permissions problem.<br/>';

							return array ( "success" => false, "errormsg" => 'Unable to overwrite file ("' . $path2 . '"), likely to be a permissions problem.<br/>' );
							}
						else
							{
							if ( !@rename( $path, $path2 ) )
								{
								echo '<font color="red">File (' . $path . ') could not be moved while overwritting, likely a permissions problem.</font><br/>';

								return array ( "success" => false, "errormsg" => 'File (' . $path . ') could not be moved while overwritting, likely a permissions problem.<br/>' );
								}
							else
							$movedFileLog[ ] = "Moved " . $path . "<br/> to " . $path2 . "<br/>";
							}
						}
					else
						{
						echo "Not allowed to overwrite" . $path2 . "<br/>"; // Not technically an error message, just advisory
						}
					}
				elseif ( is_dir( $path ) )
					{
					dirmv( $source, $dest, $overwrite, $funcloc . $file . JRDS ); //recurse!
					rmdir( $path );
					}
				}
			}
		closedir( $handle );
		}
	if ( $debugging )
		{
		foreach ( $movedFileLog as $m ) echo $m . "<br/>";
		}

	return array ( "success" => true, "errormsg" => '' );
	//echo "Finished upgrade <br/>";
	} // end of dirmv()

function mailer_get_css()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	$themeArr = explode( "^", $jrConfig[ 'jquery_ui_theme_detected' ] );
	$subdir   = $themeArr[ 0 ];
	$filename = $themeArr[ 1 ];
	if ( isset( $themeArr[ 2 ] ) ) $themePath = $themeArr[ 2 ] . "/";
	else
	$themePath = JOMRES_ROOT_DIRECTORY.'/css/jquery_ui_themes/' . $subdir . '/';

	$jquery_ui_css_file = $themePath . JRDS . $filename;


	$css_file = JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . "css" . JRDS . "email.css";

	return "<style> " . file_get_contents( $css_file ) . file_get_contents( $jquery_ui_css_file ) . "</style>";
	}

/*
Allows us to work independantly of Joomla or Mambo's emailers
*/

function jomresMailer( $from, $jomresConfig_sitename, $to, $subject, $body, $mode = 1, $attachments = array () )
	{
	$jomresConfig_smtpauth = get_showtime( 'smtpauth' );
	$jomresConfig_smtphost = get_showtime( 'smtphost' );
	$jomresConfig_smtppass = get_showtime( 'smtppass' );
	$jomresConfig_smtpuser = get_showtime( 'smtpuser' );
	$jomresConfig_smtpport = get_showtime( 'smtpport' );
	$jomresConfig_mailer   = get_showtime( 'mailer' );
	$jomresConfig_debug    = true;
	$siteConfig            = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig              = $siteConfig->get();

	$emails = array ();
	if ( isset( $jrConfig[ 'useJomresEmailCheck' ] ) && $jrConfig[ 'useJomresEmailCheck' ] == "1" )
		{
		if ( is_array( $to ) )
			{
			foreach ( $to as $t )
				{
				if ( strlen( $t ) > 0 ) $emails[ ] = $t;
				}
			}
		else
			{
			if ( strpos( $to, "," ) ) // we've been passed a comma seperated list of emails, explode them then parse them
				{
				$addys = explode( ",", $to );
				foreach ( $addys as $t )
					{
					if ( strlen( $t ) > 0 ) $emails[ ] = $t;
					}
				}
			else
				{
				if ( strlen( $to ) > 0 ) $emails[ ] = $to;
				}
			}
		}
	else
		{
		if ( is_array( $to ) )
			{
			foreach ( $to as $t )
				{
				if ( strlen( $t ) > 0 ) $emails[ ] = $t;
				}
			}
		else
			{
			if ( strpos( $to, "," ) ) // we've been passed a comma seperated list of emails, explode them then parse them
				{
				$addys = explode( ",", $to );
				foreach ( $addys as $t )
					{
					if ( strlen( $t ) > 0 ) $emails[ ] = $t;
					}
				}
			else
				{
				if ( strlen( $to ) > 0 ) $emails[ ] = $to;
				}
			}
		}

	$mail            = new jomresPHPMailer();
	$mail->SMTPDebug = get_showtime( 'error_reporting' );
	if ( $mode == 1 ) $mail->IsHTML( true );
	$mail->Mailer = $jomresConfig_mailer;

	$body = preg_replace( "[\\\]", '', $body );


	if ( $mode == 1 && !strstr( $body, '<meta http-equiv="Content-Type" content="text/html; utf-8" />' ) )
		{
		//$body = preg_replace( '@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $body );
		}

	if ( get_showtime( 'smtpauth' ) == "1" )
		{
		$mail->SMTPAuth = "1";
		}
	// Need to change this before release?
	if ( get_showtime( 'mailer' ) == "smtp" )
		{
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Username = $jomresConfig_smtpuser;
		$mail->Password = $jomresConfig_smtppass;
		}


	$mail->Host = $jomresConfig_smtphost;
	if ( $jrConfig[ 'default_from_address' ] != "" ) $mail->From = $jrConfig[ 'default_from_address' ];
	else
	$mail->From = $from;
	$mail->CharSet  = 'UTF-8';
	$mail->FromName = $jomresConfig_sitename;
	$mail->Subject  = $subject;
	$mail->Port     = $jomresConfig_smtpport;

	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	if ( $jrConfig[ 'alternate_smtp_use_settings' ] == "1" )
		{
		$mail->Mailer     = 'smtp';
		$mail->Host       = trim( $jrConfig[ 'alternate_smtp_host' ] );
		$mail->Port       = trim( $jrConfig[ 'alternate_smtp_port' ] );
		$mail->SMTPSecure = trim( $jrConfig[ 'alternate_smtp_protocol' ] );
		$mail->SMTPAuth   = trim( $jrConfig[ 'alternate_smtp_authentication' ] );
		$mail->Username   = trim( $jrConfig[ 'alternate_smtp_username' ] );
		$mail->Password   = trim( $jrConfig[ 'alternate_smtp_password' ] );
		}

	//	$mail->AltBody		= "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test


	if ( count( $attachments ) > 0 )
		{
		foreach ( $attachments as $attachment )
			{
			switch ( $attachment[ 'type' ] ) // Use a switch as it allows us to expand this later if we wish
				{
				case 'image':
					$image_arr = explode(JRDS,$attachment[ 'image_path' ]);
					$image_name = $image_arr [ count($image_arr)-1 ] ;
					$image_path = $attachment[ 'image_path' ];
					$cid        = $attachment[ 'CID' ];
					$mail->AddEmbeddedImage( $image_path, $cid, $image_name );
					break;
				case 'pdf':
					$path = $attachment[ 'path' ];
					$name = $attachment[ 'filename' ];
					$mail->AddAttachment( $path, $name, 'base64', $type = 'application/pdf' );
					break;
				default:
					$path = $attachment[ 'path' ];
					$name = $attachment[ 'filename' ];
					$type = $attachment['type'];
					$mail->AddAttachment( $path, $name, 'base64', $type);
					break;
				}
			}
		}

	$mail->MsgHTML( $body );
	foreach ( $emails as $to )
		{
		if ( strlen( $to ) > 0 ) $mail->AddAddress( $to );
		}

	if ( !$mail->Send() )
		{
		error_logging( "Error sending mail. Error caught by mailer was : " . $mail->ErrorInfo, false );

		return false;
		}

	return true;
	}

/**
#
 * Returns the guest details for a booking
#
 */
function addBookingNote( $contract_uid, $property_uid, $message )
	{
	if ( $contract_uid > 0 && $property_uid > 0 && strlen( $message ) > 0 )
		{
		$dt     = date( "Y-m-d H-i-s" );
		$query  = "INSERT INTO #__jomcomp_notes (`contract_uid`,`note`,`timestamp`,`property_uid`) VALUES ('" . (int) $contract_uid . "','" . RemoveXSS( $message ) . "','$dt','" . (int) $property_uid . "')";
		$result = doInsertSql( $query, "" );

		return $result;
		}
	else
	return false;
	}

/**
#
 * Returns the guest details for a booking
#
 */
function getGuestDetailsForContract( $contract_uid )
	{
	$query       = "SELECT rate_rules FROM #__jomres_contracts WHERE contract_uid = " . (int) $contract_uid . " LIMIT 1";
	$bookingData = doSelectSql( $query );

	if ( count( $bookingData ) > 0 )
		{
		foreach ( $bookingData as $booking )
			{
			$guesttypeOutput = array ();
			$varianceArray   = explode( ",", $booking->rate_rules );
			foreach ( $varianceArray as $v )
				{
				$vDeets = explode( "_", $v );
				if ( $vDeets[ 0 ] == "guesttype" )
					{
					$vu = $vDeets[ 1 ];
					$vq = $vDeets[ 2 ];
					$vv = $vDeets[ 3 ];

					$query              = "SELECT `type` FROM #__jomres_customertypes where id = '" . (int) $vu . "' LIMIT 1 ";
					$vtitle             = doSelectSql( $query, 1 );
					$vtitle             = jr_gettext( '_JOMRES_CUSTOMTEXT_GUESTTYPE' . (int) $vu, $vtitle, false, false );
					$guesttypeOutput[ ] = array ( 'title' => $vtitle, 'qty' => $vq, 'value' => $vv );
					}
				}
			}
		if ( count( $guesttypeOutput ) > 0 ) sort( $guesttypeOutput );

		return $guesttypeOutput;
		}
	else
	return array ();
	}


/**
#
 * Cconstruct data from session variables
#
 */

function getCurrentBookingData( $jomressession = "" )
	{
	// Whilst this is a new function to construct data from session variables, we'll need to do a bunch of jiggery pokery with the nice simple data pulled from the sess vars so that the data is in a format that's understood by other functions that previously received data that had been pulled from the database
	//global $tmpBookingHandler;
	$tmpBookingHandler   = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$obj                 = new stdClass;
	$tempBookingDataList = array ();
	$userDeets           = $tmpBookingHandler->getGuestData();
	foreach ( $userDeets as $key => $val )
		{
		$guestDetails->$key = $val;
		}
	$bobj         = new stdClass;
	$bookingDeets = $tmpBookingHandler->getBookingData();
	foreach ( $bookingDeets as $key => $val )
		{
		$bobj->$key = $val;
		}
	$tempBookingDataList[ 0 ] = $bobj;
	$obj->guestDetails        = $guestDetails;
	$obj->tempBookingDataList = $tempBookingDataList;
	$arr                      = array ();
	$ob                       = $tempBookingDataList;
	if ( count( $ob ) > 0 )
		{
		foreach ( $ob as $k => $v )
			{
			$arr[ $k ] = $v;
			}
		}
	$obj->tempBookingDataArray = $arr;

	return $obj;
	}


/**
#
 * Returns the booking details from the tmpbooking session data
#
 */
function gettempBookingdata()
	{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$bookingDeets      = $tmpBookingHandler->getBookingData();

	return $bookingDeets;
	}

/**
#
 * Adds a property uid to the current managers list of properties
#
 */
function addPropertyUidToUsersProperties( $property_uid )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( !in_array( $property_uid, $thisJRUser->authorisedProperties ) )
		{
		$query = "INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ('" . (int) $thisJRUser->userid . "','" . (int) $property_uid . "')";
		doInsertSql( $query, '' );
		}
	}

/**
#
 * Adds a property uid to the manager's current list of properties
#
 */
function addPropertyUidToManagersProperties( $manager_id, $property_uid )
	{
	$managersPropertys = array ();
	$query             = "SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE manager_id = '" . (int) $manager_id . "'";
	$result            = doSelectSql( $query );
	foreach ( $result as $r )
		{
		$managersPropertys[ ] = $r->property_uid;
		}
	if ( $property_uid > 0 )
		{
		$managersPropertys[ ] = $property_uid;
		updateManagerIdToPropertyXrefTable( $manager_id, $managersPropertys );
		}
	}

/**
#
 * Inserts the property manager/property uid into the xref table. Receives a property uid array which is a list of the users current properties and updates the xref table to that effect
 * If the $property_uidArray is empty then the manager will loose all access to properties, so ensure that $property_uidArray contains all of the current properties that the manager has rights to before passing data to this function
#
 */
function updateManagerIdToPropertyXrefTable( $manager_id, $property_uidArray, $setCurrentPropertyToFirst = true )
	{
	$query                  = "SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '" . (int) $manager_id . "'";
	$managersToPropertyList = doSelectSql( $query );
	$currentProperties      = array ();
	if ( count( $managersToPropertyList ) > 0 )
		{
		foreach ( $managersToPropertyList as $x )
			{
			$currentProperties[ ] = $x->property_uid;
			}
		}
	$propertiesToBeRemovedArray = array ();
	foreach ( $currentProperties as $p )
		{
		if ( !in_array( $p, $property_uidArray ) ) $propertiesToBeRemovedArray[ ] = $p;
		}
	$propertiesToBeAddedArray = array ();
	foreach ( $property_uidArray as $p )
		{
		if ( !in_array( $p, $currentProperties ) ) $propertiesToBeAddedArray[ ] = $p;
		}

	if ( count( $propertiesToBeRemovedArray ) > 0 )
		{
		foreach ( $propertiesToBeRemovedArray as $p )
			{
			$query = "DELETE FROM #__jomres_managers_propertys_xref WHERE manager_id = '" . (int) $manager_id . "' AND property_uid = '" . (int) $p . "' ";
			doInsertSql( $query, '' );
			}
		}
	if ( count( $propertiesToBeAddedArray ) > 0 )
		{
		foreach ( $propertiesToBeAddedArray as $p )
			{
			$query = "INSERT INTO #__jomres_managers_propertys_xref (`manager_id`,`property_uid`) VALUES ('" . (int) $manager_id . "','" . (int) $p . "')";
			doInsertSql( $query, '' );
			}
		}
	if ( $setCurrentPropertyToFirst )
		{
		$query                  = "SELECT property_uid FROM #__jomres_managers_propertys_xref  WHERE manager_id = '" . (int) $manager_id . "'";
		$managersToPropertyList = doSelectSql( $query );
		$currentProperties      = array ();
		foreach ( $managersToPropertyList as $x )
			{
			$currentProperties[ ] = $x->property_uid;
			}
		$query = "UPDATE #__jomres_managers SET `currentproperty`='$currentProperties[0]' WHERE userid = '" . (int) $manager_id . "'";
		doInsertSql( $query, '' );
		}
	}

/**
#
 * Handles errors generated by the system, redirects the user to an error page
#
 */
function errorHandler( $errno, $errstr, $errfile, $errline, $errcontext )
	{
	switch ( $errno )
	{
		case E_USER_WARNING:
		case E_USER_NOTICE:
		case E_WARNING:
		case E_NOTICE:
		case E_CORE_WARNING:
		case E_COMPILE_WARNING:
			break;
		case E_USER_ERROR:
			recordError( $errno, $errstr, $errfile, $errline, $errcontext );
		case E_ERROR:
		case E_PARSE:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:
			recordError( $errno, $errstr, $errfile, $errline, $errcontext );
		default:
			break;
	} // switch
	} // errorHandler

function recordError( $errno, $errstr, $errfile, $errline, $errcontext )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );

	$errorstring = "Fatal Error: $errstr (# $errno).";
	//$errorstring .= "User id '$jrUser->username'&nbsp;&nbsp;.";
	$errorstring .= "Error in line $errline of file '$errfile'.";
	$errorstring .= "Script: '{$_SERVER['PHP_SELF']}'";
	if ( isset( $errcontext[ 'this' ] ) )
		{
		if ( is_object( $errcontext[ 'this' ] ) )
			{
			$classname   = get_class( $errcontext[ 'this' ] );
			$parentclass = get_parent_class( $errcontext[ 'this' ] );
			$errorstring .= "Object/Class: '$classname', Parent Class: '$parentclass'.";
			}
		}
	error_logging( $errorstring );
	if ( !@session_start() )
		{
		@ini_set( 'session.save_handler', 'files' );
		session_start();
		}
	session_unset();
	session_destroy();
	jomresRedirect( JOMRES_SITEPAGE_URL . "&task=error", "FATAL ERROR" );
	}

/**
#
 * Creates the error log settings, calls writexml
#
 */
function error_logging( $message, $emailMessage = true )
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	$logfile = JOMRES_SYSTEMLOG_PATH . 'jomres_error_log.xml';

	$log = "<![CDATA[" . $message . "]]>";
	writexml( $logfile, "errorlog", "errorlogentry", $log );
	}

/**
#
 * Creates the request log settings, calls writexml
#
 */
function request_log( $loggingRequest )
	{
	if ( LOGGINGREQUEST )
		{
		$logfile = JOMRES_SYSTEMLOG_PATH . 'jomres_request_log.xml';
		$log     = "";
		if ( count( $_REQUEST ) > 0 )
			{
			$log .= "<![CDATA[";
			foreach ( $_REQUEST as $key => $value )
				{
				$log .= $key . " " . $value . " --- \n";
				}
			$log .= "]]>\n";
			}
		// Write to log
		writexml( $logfile, "requestlog", "requestlogentry", $log );
		}
	}

/**
#
 * Creates the system log settings, calls writexml
#
 */
function system_log( $message )
	{
	if ( LOGGINGSYSTEM )
		{
		$logfile = JOMRES_SYSTEMLOG_PATH . 'jomres_system_log.xml';
		$log     = "<![CDATA[\n" . $message . "]]>";
		writexml( $logfile, "systemlog", "systemlogentry", $log );
		}
	}

/**
#
 * Creates the jomres portal log settings, calls writexml
#
 */

function jrportalquery_log( $message )
	{
	if ( LOGGINGPORTAL )
		{
		$logfile = JOMRES_SYSTEMLOG_PATH . 'jrportalquery_log.xml';
		$log     = "<![CDATA[" . $message . "]]>";
		writexml( $logfile, "jrportalquerylog", "jrportalquerylogentry", $log );
		}
	}

/**
#
 * Creates the gateway log settings, calls writexml
#
 */
function gateway_log( $message )
	{
	if ( LOGGINGGATEWAY )
		{
		$logfile = JOMRES_SYSTEMLOG_PATH . 'jomres_gateway_log.xml';
		$log     = "<![CDATA[" . $message . "]]>";
		writexml( $logfile, "gatewaylog", "gatewaylogentry", $log );
		}
	}


/**
#
 * Writes the xml file. Reads the data in, resorts it so that the most recent entry is at the top
#
 */
function writexml( $logfile, $rootelement, $entry, $newlines )
	{
	$task = get_showtime( 'task' );

	//if ($_REQUEST['option'] == "com_jomres")
	//	{
	$host             = gethostbyaddr( $_SERVER[ 'REMOTE_ADDR' ] );
	$dt               = date( "Y-m-d H:i:s (T)" );
	$rootElementStart = "<" . $rootelement . ">\n";
	$entryStart       = "\t<" . $entry . ">\n";
	$datetime         = "\t\t<datetime>" . $dt . "</datetime>\n";
	$session          = "\t\t<jomressession>" . get_showtime( 'jomressession' ) . "</jomressession>\n";
	$taskEntry        = "\t\t<task>" . $task . "</task>\n";
	$request          = "\t\t<requesturi><![CDATA[" . $task . " " . $ipstuff = getEscaped( $_SERVER[ 'REMOTE_ADDR' ] ) . " " . $host . "]]></requesturi>\n";
	$message          = "\t\t\t<message>" . $newlines . "</message>\n";
	$entryEnd         = "\t</" . $entry . ">\n";
	$rootElementEnd   = "</" . $rootelement . ">\n";

	if ( file_exists( $logfile ) ) $fp = fopen( $logfile, 'r+' );
	else
	$fp = fopen( $logfile, 'w' );
	$lines = file( $logfile );
	if ( is_array( $lines ) && count( $lines ) > 0 )
		{
		$l        = array_shift( $lines ); // Remove the first element
		$l        = array_pop( $lines ); // Remove the last element
		$oldlines = implode( "", $lines );
		}
	else
	$oldlines = "";
	//if (flock($fp, LOCK_EX)) { // do an exclusive lock
	fwrite( $fp, $rootElementStart );
	fwrite( $fp, $entryStart );
	fwrite( $fp, $datetime );
	fwrite( $fp, $session );
	fwrite( $fp, $taskEntry );
	fwrite( $fp, $request );
	fwrite( $fp, $message );
	fwrite( $fp, $entryEnd );
	fwrite( $fp, $oldlines );
	fwrite( $fp, $rootElementEnd );
	flock( $fp, LOCK_UN );
	//	}
	fclose( $fp ); // close file
	//}
	}

/**
#
 * Redirects to $url
#
 */
function jomresRedirect( $url, $msg = '' )
	{
	// msg depreciated now as we're using growl for feedback after redirect, however we'll leave it in-situ in case we want it back again sometime in the future.
	$MiniComponents =jomres_getSingleton('mcHandler');
	$MiniComponents->triggerEvent( '99994' );
	
	$url = str_replace( "&amp;", "&", $url );

 	jr_import( 'browser_detect' );
	$b       = new browser_detect();
	$browser = $b->getBrowser();

	if ( $browser == "Internet Explorer" ) 
		{
		echo '<script>document.location.href=\'' . $url . '\';</script>';
		}
	elseif ( $browser == "Safari" || $browser == "Chrome" ) // Webkit
		{
		echo '<meta http-equiv="refresh" content="0; url=' . $url . '"
			/>';
		}
	else
		{
		if (this_cms_is_wordpress() )
			echo '<script>document.location.href=\'' . $url . '\';</script>';
		else
			header( 'Location: ' . $url, true );
		} 
	

	
	exit;
	}


/**
#
 * Sanitises the overlib output
#
 */

function sanitiseOverlibOutput( $data )
	{
	$data = str_replace( "&#39;", "'", $data );
	$data = str_replace( "'", "\\&#39;", $data );

	return $data;
	}


//------------------------------------
//-C O N F I G	S E T T I N G S	 ----
//------------------------------------

/**
#
 * Constructs the standard configuration settings for display in the config panel, then triggers events to show same configuration panels.
#
 */
function hotelSettings()
	{

	//global $configurationPanel;
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

	$property_uid = (int) getDefaultProperty();
	$mrConfig     = getPropertySpecificSettings( $property_uid );
	$option       = "com_jomres";

	$componentArgs               = array ();
	$componentArgs[ 'mrConfig' ] = $mrConfig;
	$MiniComponents->triggerEvent( '0500', $componentArgs ); // Generate configuration options. Optional
	$gatewayNames = listGateways();

	// the default view
	$lists = array ();

	// make a standard yes/no list
	$yesno    = array ();
	$yesno[ ] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false ) );
	$yesno[ ] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false ) );

	$smokingOptions    = array ();
	$smokingOptions[ ] = jomresHTML::makeOption( '0', jr_gettext( '_JOMRES_COM_MR_NO', _JOMRES_COM_MR_NO, false ) );
	$smokingOptions[ ] = jomresHTML::makeOption( '1', jr_gettext( '_JOMRES_COM_MR_YES', _JOMRES_COM_MR_YES, false ) );
	$smokingOptions[ ] = jomresHTML::makeOption( '2', jr_gettext( '_JOMRES_FRONT_ROOMSMOKING_EITHER', _JOMRES_FRONT_ROOMSMOKING_EITHER, false ) );

	if ( $mrConfig[ 'newTariffModels' ] != "1" && $mrConfig[ 'newTariffModels' ] != "2" ) // backward compatablity for pre-2.5 users who haven't yet visited General Configuration and clicked Save
	$mrConfig[ 'newTariffModels' ] = "2";
	$tariffModels         = array ();
	$tariffModels[ ]      = jomresHTML::makeOption( 1, jr_gettext( "_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF", _JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF, false ) );
	$tariffModels[ ]      = jomresHTML::makeOption( 2, jr_gettext( "_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES", _JOMRES_COM_A_TARIFFS_MODEL_AVERAGES, false ) );
	$tariffModelsDropdown = jomresHTML::selectList( $tariffModels, 'cfg_newTariffModels', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'newTariffModels' ] );

	$weekDays    = array ();
	$weekDays[ ] = jomresHTML::makeOption( 1, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_MONDAY", _JOMRES_COM_MR_WEEKDAYS_MONDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 2, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_TUESDAY", _JOMRES_COM_MR_WEEKDAYS_TUESDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 3, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY", _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 4, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", _JOMRES_COM_MR_WEEKDAYS_THURSDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 5, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 6, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) );
	$weekDays[ ] = jomresHTML::makeOption( 0, jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", _JOMRES_COM_MR_WEEKDAYS_SUNDAY, false ) );

	$weekendDays    = array ();
	$weekendDays[ ] = jomresHTML::makeOption( "5", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "6", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "0", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", _JOMRES_COM_MR_WEEKDAYS_SUNDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "4,5", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", _JOMRES_COM_MR_WEEKDAYS_THURSDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "4,5,6", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", _JOMRES_COM_MR_WEEKDAYS_THURSDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "4,5,6,0", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", _JOMRES_COM_MR_WEEKDAYS_THURSDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", _JOMRES_COM_MR_WEEKDAYS_SUNDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "5,6", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "5,6,0", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", _JOMRES_COM_MR_WEEKDAYS_FRIDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", _JOMRES_COM_MR_WEEKDAYS_SUNDAY, false ) );
	$weekendDays[ ] = jomresHTML::makeOption( "6,0", jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", _JOMRES_COM_MR_WEEKDAYS_SATURDAY, false ) . ', ' . jr_gettext( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", _JOMRES_COM_MR_WEEKDAYS_SUNDAY, false ) );

	$jsInputDateFormats    = array ();
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%d/%m/%Y", "01/02/2006 - 1st February 2006" );
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%Y/%m/%d", "2006/02/01" );
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%m/%d/%Y", "02/01/2006" );
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%d-%m-%Y", "01-02-2006" );
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%Y-%m-%d", "2006-02-01" );
	$jsInputDateFormats[ ] = jomresHTML::makeOption( "%m-%d-%Y", "02-01-2006" );
	//$jsInputDateFormats[] =	jomresHTML::makeOption("%d.%m.%Y", "01.02.2006");
	$jsInputFormatDropdownList = jomresHTML::selectList( $jsInputDateFormats, 'cfg_cal_input', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'cal_input' ] );

	//$slideshowDropdownList= jomresHTML::selectList($slideshowNames, 'cfg_slideshow', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['slideshow']);
	$smokingOptionDropdownList = jomresHTML::selectList( $smokingOptions, 'cfg_defaultSmokingOption', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'defaultSmokingOption' ] );
	$weekdayDropdown           = jomresHTML::selectList( $weekDays, 'cfg_fixedArrivalDay', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDay' ] );
	$weekenddayDropdown        = jomresHTML::selectList( $weekendDays, 'cfg_weekenddays', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'weekenddays' ] );

	$depAmounts     = array ();
	$depAmounts[ ]  = jomresHTML::makeOption( '0', jr_gettext( "_JOMRES_COM_CHARGING_DEPOSIT", _JOMRES_COM_CHARGING_DEPOSIT, false ) );
	$depAmounts[ ]  = jomresHTML::makeOption( '1', jr_gettext( "_JOMRES_COM_CHARGING_FULLAMT", _JOMRES_COM_CHARGING_FULLAMT, false ) );
	$paymentAmounts = jomresHTML::selectList( $depAmounts, 'cfg_depAmount', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depAmount' ] );

	if ( !isset( $mrConfig[ 'tariffmode' ] ) ) $mrConfig[ 'tariffmode' ] = 1;
	$tariffMode    = array ();
	$tariffMode[ ] = jomresHTML::makeOption( '0', jr_gettext( "JOMRES_COM_A_TARIFFMODE_NORMAL", JOMRES_COM_A_TARIFFMODE_NORMAL, false ) );

	if ( isset( $MiniComponents->registeredClasses[ '06002edit_tariff_micromanage' ] ) )
		{
		$tariffMode[ ] = jomresHTML::makeOption( '2', jr_gettext( "JOMRES_COM_A_TARIFFMODE_TARIFFTYPES", JOMRES_COM_A_TARIFFMODE_TARIFFTYPES, false ) );
		$tariffMode[ ] = jomresHTML::makeOption( '1', jr_gettext( "JOMRES_COM_A_TARIFFMODE_ADVANCED", JOMRES_COM_A_TARIFFMODE_ADVANCED, false ) );
		}
	$tariffModeDD = jomresHTML::selectList( $tariffMode, 'cfg_tariffmode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffmode' ] );

	$iconsizes    = array ();
	$iconsizes[ ] = jomresHTML::makeOption( 'small', 'small' );
	$iconsizes[ ] = jomresHTML::makeOption( 'large', 'large' );
	$editIconSize = jomresHTML::selectList( $iconsizes, 'cfg_editiconsize', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'editiconsize' ] );

	if ( !isset( $mrConfig[ 'booking_form_rooms_list_style' ] ) ) $mrConfig[ 'booking_form_rooms_list_style' ] = "1";
	$booking_form_rooms_list       = array ();
	$booking_form_rooms_list[ ]    = jomresHTML::makeOption( '1', jr_gettext( "_JOMRES_ROOMMSLIST_STYLE_CLASSIC", _JOMRES_ROOMMSLIST_STYLE_CLASSIC, false ) );
	$booking_form_rooms_list[ ]    = jomresHTML::makeOption( '2', jr_gettext( "_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES", _JOMRES_ROOMMSLIST_STYLE_ROOMTYPES, false ) );
	$booking_form_rooms_list_style = jomresHTML::selectList( $booking_form_rooms_list, 'cfg_booking_form_rooms_list_style', 'size="1" class="inputbox"', 'value', 'text', $mrConfig[ 'booking_form_rooms_list_style' ] );

	$fixedArrivalDatesRecurring = jomresHTML::integerSelectList( 01, 208, 1, 'cfg_fixedArrivalDatesRecurring', 'size="1" class="inputbox"', $mrConfig[ 'fixedArrivalDatesRecurring' ], "%02d" );

	if ( !isset( $mrConfig[ 'booking_form_daily_weekly_monthly' ] ) ) $mrConfig[ 'booking_form_daily_weekly_monthly' ] = "D";
	$pricingOutput = array ();
	if ( $mrConfig[ 'wholeday_booking' ] == "1" ) $pricingOutput[ ] = jomresHTML::makeOption( 'D', jr_gettext( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY", _JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY, false ) );
	else
	$pricingOutput[ ] = jomresHTML::makeOption( 'D', jr_gettext( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY", _JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY, false ) );
	$pricingOutput[ ]                  = jomresHTML::makeOption( 'W', jr_gettext( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY", _JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY, false ) );
	$pricingOutput[ ]                  = jomresHTML::makeOption( 'M', jr_gettext( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY", _JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY, false ) );
	$booking_form_daily_weekly_monthly = jomresHTML::selectList( $pricingOutput, 'cfg_booking_form_daily_weekly_monthly', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'booking_form_daily_weekly_monthly' ] );

	//$lists['tariffmodel']= jomresHTML::selectList( $tariffmodels, 'cfg_tariffmodel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['tariffmodel'] );

	$lists[ 'showRoomTypeImageInBookingForm' ]    = jomresHTML::selectList( $yesno, 'cfg_showRoomTypeImageInBookingForm', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomTypeImageInBookingForm' ] );
	$lists[ 'showRoomImageInBookingFormOverlib' ] = jomresHTML::selectList( $yesno, 'cfg_showRoomImageInBookingFormOverlib', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomImageInBookingFormOverlib' ] );
	$lists[ 'singlePersonSuppliment' ]            = jomresHTML::selectList( $yesno, 'cfg_singlePersonSuppliment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singlePersonSuppliment' ] );
	$lists[ 'perPersonPerNight' ]                 = jomresHTML::selectList( $yesno, 'cfg_perPersonPerNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'perPersonPerNight' ] );
	$lists[ 'depositIsPercentage' ]               = jomresHTML::selectList( $yesno, 'cfg_depositIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsPercentage' ] );
	$lists[ 'errorCheckingShowSQL' ]              = jomresHTML::selectList( $yesno, 'cfg_errorCheckingShowSQL', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'errorCheckingShowSQL' ] );
	$lists[ 'errorCheckingShowSQLvardump' ]       = jomresHTML::selectList( $yesno, 'cfg_errorCheckingShowSQLvardump', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'errorCheckingShowSQLvardump' ] );
	$lists[ 'errorChecking' ]                     = jomresHTML::selectList( $yesno, 'cfg_errorChecking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'errorChecking' ] );
	$lists[ 'visitorscanbookonline' ]             = jomresHTML::selectList( $yesno, 'cfg_visitorscanbookonline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'visitorscanbookonline' ] );
	$lists[ 'fixedPeriodBookings' ]               = jomresHTML::selectList( $yesno, 'cfg_fixedPeriodBookings', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookings' ] );
	$lists[ 'singleRoomProperty' ]                = jomresHTML::selectList( $yesno, 'cfg_singleRoomProperty', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'singleRoomProperty' ] );
	$lists[ 'fixedArrivalDateYesNo' ]             = jomresHTML::selectList( $yesno, 'cfg_fixedArrivalDateYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedArrivalDateYesNo' ] );
	$lists[ 'showAvailabilityCalendar' ]          = jomresHTML::selectList( $yesno, 'cfg_showAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showAvailabilityCalendar' ] );
	$lists[ 'showAdminTapeview' ]                 = jomresHTML::selectList( $yesno, 'cfg_showAdminTapeview', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showAdminTapeview' ] );
	$lists[ 'fixedPeriodBookingsShortYesNo' ]     = jomresHTML::selectList( $yesno, 'cfg_fixedPeriodBookingsShortYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'fixedPeriodBookingsShortYesNo' ] );
	$lists[ 'showExtras' ]                        = jomresHTML::selectList( $yesno, 'cfg_showExtras', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showExtras' ] );
	$lists[ 'showSmoking' ]                       = jomresHTML::selectList( $yesno, 'cfg_showSmoking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSmoking' ] );
	$lists[ 'limitAdvanceBookingsYesNo' ]         = jomresHTML::selectList( $yesno, 'cfg_limitAdvanceBookingsYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'limitAdvanceBookingsYesNo' ] );
	$lists[ 'roomTaxYesNo' ]                      = jomresHTML::selectList( $yesno, 'cfg_roomTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomTaxYesNo' ] );
	$lists[ 'euroTaxYesNo' ]                      = jomresHTML::selectList( $yesno, 'cfg_euroTaxYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'euroTaxYesNo' ] );
	$lists[ 'editingOn' ]                         = jomresHTML::selectList( $yesno, 'cfg_editingOn', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'editingOn' ] );
	//$lists['popupsAllowed'] = jomresHTML::selectList( $yesno, 'cfg_popupsAllowed', 'class="inputbox" size="1"', 'value', 'text', $mrConfig['popupsAllowed'] );
	$lists[ 'showSlideshowLink' ]              = jomresHTML::selectList( $yesno, 'cfg_showSlideshowLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowLink' ] );
	$lists[ 'showSlideshowInline' ]            = jomresHTML::selectList( $yesno, 'cfg_showSlideshowInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showSlideshowInline' ] );
	$lists[ 'showTariffsInline' ]              = jomresHTML::selectList( $yesno, 'cfg_showTariffsInline', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsInline' ] );
	$lists[ 'showTariffsLink' ]                = jomresHTML::selectList( $yesno, 'cfg_showTariffsLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showTariffsLink' ] );
	$lists[ 'useOnlinepayment' ]               = jomresHTML::selectList( $yesno, 'cfg_useOnlinepayment', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'useOnlinepayment' ] );
	$lists[ 'showdepartureinput' ]             = jomresHTML::selectList( $yesno, 'cfg_showdepartureinput', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showdepartureinput' ] );
	$lists[ 'dateFormatStyle' ]                = jomresHTML::selectList( $yesno, 'cfg_dateFormatStyle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dateFormatStyle' ] );
	$lists[ 'calstartfrombeginningofyear' ]    = jomresHTML::selectList( $yesno, 'cfg_calstartfrombeginningofyear', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'calstartfrombeginningofyear' ] );
	$lists[ 'showGoogleCurrencyLink' ]         = jomresHTML::selectList( $yesno, 'cfg_showGoogleCurrencyLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showGoogleCurrencyLink' ] );
	$lists[ 'showRoomsInPropertyDetails' ]     = jomresHTML::selectList( $yesno, 'cfg_showRoomsInPropertyDetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsInPropertyDetails' ] );
	$lists[ 'showRoomsListingLink' ]           = jomresHTML::selectList( $yesno, 'cfg_showRoomsListingLink', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showRoomsListingLink' ] );
	$lists[ 'showOnlyAvailabilityCalendar' ]   = jomresHTML::selectList( $yesno, 'cfg_showOnlyAvailabilityCalendar', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'showOnlyAvailabilityCalendar' ] );
	$lists[ 'registeredUsersOnlyCanBook' ]     = jomresHTML::selectList( $yesno, 'cfg_registeredUsersOnlyCanBook', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'registeredUsersOnlyCanBook' ] );
	$lists[ 'roundupDepositYesNo' ]            = jomresHTML::selectList( $yesno, 'cfg_roundupDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roundupDepositYesNo' ] );
	$lists[ 'chargeDepositYesNo' ]             = jomresHTML::selectList( $yesno, 'cfg_chargeDepositYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'chargeDepositYesNo' ] );
	$lists[ 'tariffChargesStoredWeeklyYesNo' ] = jomresHTML::selectList( $yesno, 'cfg_tariffChargesStoredWeeklyYesNo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] );
	$lists[ 'roomslistinpropertydetails' ]     = jomresHTML::selectList( $yesno, 'cfg_roomslistinpropertydetails', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'roomslistinpropertydetails' ] );
	$lists[ 'verbosetariffinfo' ]              = jomresHTML::selectList( $yesno, 'cfg_verbosetariffinfo', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'verbosetariffinfo' ] );


	$lists[ 'bookingform_overlib_tariff_title_show' ]    = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_title_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_title_show' ] );
	$lists[ 'bookingform_overlib_tariff_desc_show' ]     = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_desc_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_desc_show' ] );
	$lists[ 'bookingform_overlib_tariff_rate_show' ]     = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_rate_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_rate_show' ] );
	$lists[ 'bookingform_overlib_tariff_starts_show' ]   = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_starts_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_starts_show' ] );
	$lists[ 'bookingform_overlib_tariff_ends_show' ]     = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_ends_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_ends_show' ] );
	$lists[ 'bookingform_overlib_tariff_mindays_show' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_mindays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_mindays_show' ] );
	$lists[ 'bookingform_overlib_tariff_maxdays_show' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_maxdays_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxdays_show' ] );
	$lists[ 'bookingform_overlib_tariff_minpeeps_show' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_minpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_minpeeps_show' ] );
	$lists[ 'bookingform_overlib_tariff_maxpeeps_show' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_tariff_maxpeeps_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_tariff_maxpeeps_show' ] );

	$lists[ 'bookingform_overlib_room_number_show' ]         = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_number_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_number_show' ] );
	$lists[ 'bookingform_overlib_room_name_show' ]           = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_name_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_name_show' ] );
	$lists[ 'bookingform_overlib_room_type_show' ]           = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_type_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_type_show' ] );
	$lists[ 'bookingform_overlib_room_smoking_show' ]        = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_smoking_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_smoking_show' ] );
	$lists[ 'bookingform_overlib_room_disabledaccess_show' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_disabledaccess_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_disabledaccess_show' ] );
	$lists[ 'bookingform_overlib_room_floor_show' ]          = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_floor_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_floor_show' ] );
	$lists[ 'bookingform_overlib_room_maxpeople_show' ]      = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_maxpeople_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_maxpeople_show' ] );
	$lists[ 'bookingform_overlib_room_features_show' ]       = jomresHTML::selectList( $yesno, 'cfg_bookingform_overlib_room_features_show', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_overlib_room_features_show' ] );

	$lists[ 'bookingform_roomlist_showroomno' ]      = jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showroomno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomno' ] );
	$lists[ 'bookingform_roomlist_showroomname' ]    = jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showroomname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showroomname' ] );
	$lists[ 'bookingform_roomlist_showtarifftitle' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showtarifftitle', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showtarifftitle' ] );
	$lists[ 'supplimentChargeIsPercentage' ]         = jomresHTML::selectList( $yesno, 'cfg_supplimentChargeIsPercentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'supplimentChargeIsPercentage' ] );
	$lists[ 'dumpTemplate' ]                         = jomresHTML::selectList( $yesno, 'cfg_dumpTemplate', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dumpTemplate' ] );

	$lists[ 'bookingform_requiredfields_name' ]     = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_name', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_name' ] );
	$lists[ 'bookingform_requiredfields_surname' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_surname', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_surname' ] );
	$lists[ 'bookingform_requiredfields_houseno' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_houseno', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_houseno' ] );
	$lists[ 'bookingform_requiredfields_street' ]   = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_street', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_street' ] );
	$lists[ 'bookingform_requiredfields_town' ]     = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_town', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_town' ] );
	$lists[ 'bookingform_requiredfields_postcode' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_postcode', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_postcode' ] );
	$lists[ 'bookingform_requiredfields_region' ]   = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_region', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_region' ] );
	$lists[ 'bookingform_requiredfields_country' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_country', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_country' ] );
	$lists[ 'bookingform_requiredfields_tel' ]      = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_tel', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_tel' ] );
	$lists[ 'bookingform_requiredfields_mobile' ]   = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_mobile', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_mobile' ] );
	$lists[ 'bookingform_requiredfields_email' ]    = jomresHTML::selectList( $yesno, 'cfg_bookingform_requiredfields_email', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_requiredfields_email' ] );

	$lists[ 'dtv_dow_monday_is_percentage' ]    = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_monday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_monday_is_percentage' ] );
	$lists[ 'dtv_dow_tuesday_is_percentage' ]   = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_tuesday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_tuesday_is_percentage' ] );
	$lists[ 'dtv_dow_wednesday_is_percentage' ] = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_wednesday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_wednesday_is_percentage' ] );
	$lists[ 'dtv_dow_thursday_is_percentage' ]  = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_thursday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_thursday_is_percentage' ] );
	$lists[ 'dtv_dow_friday_is_percentage' ]    = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_friday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_friday_is_percentage' ] );
	$lists[ 'dtv_dow_saturday_is_percentage' ]  = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_saturday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_saturday_is_percentage' ] );
	$lists[ 'dtv_dow_sunday_is_percentage' ]    = jomresHTML::selectList( $yesno, 'cfg_dtv_dow_sunday_is_percentage', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'dtv_dow_sunday_is_percentage' ] );

	$lists[ 'bookingform_roomlist_showdisabled' ]  = jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showdisabled', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showdisabled' ] );
	$lists[ 'bookingform_roomlist_showmaxpeople' ] = jomresHTML::selectList( $yesno, 'cfg_bookingform_roomlist_showmaxpeople', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'bookingform_roomlist_showmaxpeople' ] );

	$lists[ 'use_variable_deposits' ] = jomresHTML::selectList( $yesno, 'cfg_use_variable_deposits', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'use_variable_deposits' ] );

	$lists[ 'prices_inclusive' ]  = jomresHTML::selectList( $yesno, 'cfg_prices_inclusive', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'prices_inclusive' ] );
	$lists[ 'wholeday_booking' ]  = jomresHTML::selectList( $yesno, 'cfg_wholeday_booking', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'wholeday_booking' ] );
	$lists[ 'depositIsOneNight' ] = jomresHTML::selectList( $yesno, 'cfg_depositIsOneNight', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'depositIsOneNight' ] );
	
	$lists[ 'requireApproval' ] = jomresHTML::selectList( $yesno, 'cfg_requireApproval', 'class="inputbox" size="1"', 'value', 'text', (int)$mrConfig[ 'requireApproval' ] );

	if ( !isset( $mrConfig[ 'auto_detect_country_for_booking_form' ] ) ) $mrConfig[ 'auto_detect_country_for_booking_form' ] = "1";

	$lists[ 'auto_detect_country_for_booking_form' ] = jomresHTML::selectList( $yesno, 'cfg_auto_detect_country_for_booking_form', 'class="inputbox" size="1"', 'value', 'text', $mrConfig[ 'auto_detect_country_for_booking_form' ] );


	$componentArgs                                = array ();
	$componentArgs[ 'mrConfig' ]                  = $mrConfig;
	$componentArgs[ 'lists' ]                     = $lists;
	$componentArgs[ 'weekdayDropdown' ]           = $weekdayDropdown;
	$componentArgs[ 'jsInputFormatDropdownList' ] = $jsInputFormatDropdownList;
	$componentArgs[ 'smokingOptionDropdownList' ] = $smokingOptionDropdownList;
	$componentArgs[ 'weekenddayDropdown' ]        = $weekenddayDropdown;
	//$componentArgs['templateNamesDropdownList']=$templateNamesDropdownList;
	$componentArgs[ 'paymentAmounts' ]                    = $paymentAmounts;
	$componentArgs[ 'gatewayNames' ]                      = $gatewayNames;
	$componentArgs[ 'editIconSize' ]                      = $editIconSize;
	$componentArgs[ 'fixedArrivalDatesRecurring' ]        = $fixedArrivalDatesRecurring;
	$componentArgs[ 'tariffModelsDropdown' ]              = $tariffModelsDropdown;
	$componentArgs[ 'jomresConfig_live_site' ]            = get_showtime( 'live_site' );
	$componentArgs[ 'tariffModeDD' ]                      = $tariffModeDD;
	$componentArgs[ 'Itemid' ]                            = $Itemid;
	$componentArgs[ 'booking_form_rooms_list_style' ]     = $booking_form_rooms_list_style;
	$componentArgs[ 'booking_form_daily_weekly_monthly' ] = $booking_form_daily_weekly_monthly;


	ob_start();

	// The following javascript is for selecting currency codes
	?>

		<form action="<?php echo JOMRES_SITEPAGE_URL; ?>" method="post" name="adminForm">
			<h2 class="page-header"><?php echo jr_gettext( "_JOMRES_COM_MR_GENERALCONFIGDESC", _JOMRES_COM_MR_GENERALCONFIGDESC ); ?></h2>
			<?php

			$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb = $jrtbar->startTable();
			
			$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL . "" ), '' );
			$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_business_settings' );
			$jrtb .= $jrtbar->endTable();
			
			
			jr_import("jomres_frontend_configuration_level");
			$jomres_frontend_configuration_level = new jomres_frontend_configuration_level();
			
			$output[ 'JOMRESTOOLBAR_CONFIGURATION_LEVEL_BUTTONS' ] = $jomres_frontend_configuration_level->get_buttons();
			
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			echo '<div class="well clearfix"><div class="pull-left">' . $output[ 'JOMRESTOOLBAR' ] .'</div><div class="pull-right">'.  $output[ 'JOMRESTOOLBAR_CONFIGURATION_LEVEL_BUTTONS' ] . '</div></div>';
			
			if ( !using_bootstrap() )
				{
				$configurationPanel = jomres_singleton_abstract::getInstance( 'jomres_configpanel' );
				}
			else
				{
				$bs_version = jomres_bootstrap_version();
				if ( $bs_version == "2")
					{
					$configurationPanel = jomres_singleton_abstract::getInstance( 'jomres_configpanel' );
					}
				elseif ($bs_version=="3")
					{
					$configurationPanel = jomres_singleton_abstract::getInstance( 'jomres_configpanel_bootstrap3' );
					}
				}
			
			
			
			
			$componentArgs[ 'configurationPanel' ] = $configurationPanel;

			$configurationPanel->startTabs();

			$MiniComponents->triggerEvent( '0501', $componentArgs ); // Generate configuration options tabs

			$configurationPanel->endTabs();

			?>
			<input type="hidden" name="no_html" value="1">
			<input type="hidden" name="task" value="save_business_settings"/>
			<input type="hidden" name="option" value="<?php echo $option; ?>"/>
			<input type="hidden" name="cfg_version" value="<?php echo $mrConfig[ 'version' ]; ?>"/>
			<input type="hidden" name="cfg_jomresdotnet" value="<?php echo $mrConfig[ 'jomresdotnet' ]; ?>"/>
			<input type="hidden" name="property_uid" value="<?php echo $property_uid; ?>"/>
			<?php
			foreach ( $mrConfig as $k => $v )
				{
				echo '<input type="hidden" name="oldsetting_cfg_' . $k . '" value="' . $v . '" />';
				echo "";
				}
			?>
		</form>

	<?php
	ob_end_flush();
	}

/**
#
 * Takes settings from the configuration and saves (most of them) to the jomres_settings table
#
 */
function saveHotelSettings()
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$MiniComponents->triggerEvent( '00502', array() ); // This trigger allows plugins to check saves, for example to prevent future changes to a setting once it's been made.
	
	$property_uid = (int) getDefaultProperty();
	$mrConfig     = getPropertySpecificSettings( $property_uid );

	//$updateText="";
	$tariffmodeChange = false;
	if ( $_POST[ 'oldsetting_cfg_tariffmode' ] == "1" && $_POST[ 'cfg_tariffmode' ] == "2" ) // Advanced  -> micromanage
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs( $property_uid );
		$tariffmodeChange = true;
		}
	if ( $_POST[ 'oldsetting_cfg_tariffmode' ] == "0" && $_POST[ 'cfg_tariffmode' ] == "2" ) // Normal  -> micromanage
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs( $property_uid );
		$tariffmodeChange = true;
		}
	if ( $_POST[ 'oldsetting_cfg_tariffmode' ] == "2" && ( $_POST[ 'cfg_tariffmode' ] == "0" || $_POST[ 'cfg_tariffmode' ] == "1" ) ) // Micromanage  -> normal/advanced
		{
		echo "Deleting old tariffs";
		removeAllPropertyEnhanceTariffsXref( $property_uid );
		$tariffmodeChange = true;
		}
	if ( ( $_POST[ 'oldsetting_cfg_tariffmode' ] == "1" || $_POST[ 'oldsetting_cfg_tariffmode' ] == "2" ) && $_POST[ 'cfg_tariffmode' ] == "0" ) // Advanced/Micromanage  -> normal
		{
		echo "Deleting old tariffs";
		removeAllPropertyTariffs( $property_uid );
		removeAllPropertyEnhanceTariffsXref( $property_uid );
		$tariffmodeChange = true;
		}
	if ( $_POST[ 'oldsetting_cfg_tariffmode' ] == "0" && $_POST[ 'cfg_tariffmode' ] != "0" ) $tariffmodeChange = true;

	foreach ( $_POST as $k => $v )
		{
		if ( strpos( $k, 'cfg_' ) === 0 && $k != "cfg_jomres_licensekey" )
			{
			$v     = jomresGetParam( $_POST, $k, "" );
			$dirty = (string) $k;
			$k     = addslashes( $dirty );
			if ( !get_magic_quotes_gpc() )
				{
				$v = filter_var( $v, FILTER_SANITIZE_SPECIAL_CHARS );
				}

			if ( substr( $k, 4 ) == "encKey" )
				{
				//saveKey($v); // Commented out, the function is no longer available, however keeping the IF statement here allows to be absolutely sure that if encKey is set (by a very naughty person) then nothing is done.
				}
			else
				{
				$oldSettingKey = 'oldsetting_' . $k;
				$oldSettingVal = $_POST[ $oldSettingKey ];

				if ( $oldSettingVal != $v )
					{
					$query  = "SELECT uid FROM #__jomres_settings WHERE property_uid = '" . (int) $property_uid . "' and akey = '" . substr( $k, 4 ) . "'";
					$result = doSelectSql( $query );
					if ( count( $result ) == 0 ) 
						{
						$query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('" . (int) $property_uid . "','" . substr( $k, 4 ) . "','" . $v . "')";
						}
					else
						{
						$query = "UPDATE #__jomres_settings SET `value`='" . $v . "' WHERE property_uid = '" . (int) $property_uid . "' and akey = '" . substr( $k, 4 ) . "'";
						}
					doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', _JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS, false ) );
					}
				}
			}
		}
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$c->eraseAll();

	if( trim($_POST['cfg_property_vat_number']) != "")
		{
		jr_import( 'vat_number_validation' );
		$validation = new vat_number_validation( $property_uid , false );
		$validation->vies_check(filter_var( $_POST['cfg_property_vat_number'] , FILTER_SANITIZE_SPECIAL_CHARS ) );
		$validation->save_subject($type = "property", array( "property_uid"=>$property_uid ) );
		}
	
	jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=business_settings&property_uid=$property_uid" ), '' );
	}

function removeAllPropertyEnhanceTariffsXref( $property_uid )
	{
	$query = "DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE property_uid = " . (int) $property_uid;
	doInsertSql( $query, '' );
	$query = "DELETE FROM #__jomcomp_tarifftypes WHERE property_uid = " . (int) $property_uid;
	doInsertSql( $query, '' );

	}

function removeAllPropertyTariffs( $property_uid )
	{
	$query = "DELETE FROM #__jomres_rates WHERE property_uid = '" . (int) $property_uid . "'";
	doInsertSql( $query, '' );
	}


/**
#
 * User has been logged out (or has attempted to access functionality illegally)
#
 */
function userHasBeenLoggedOut()
	{
	echo '<center><img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Restricted.png" align="middle" border="0" />';
	echo '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Secured.png" align="middle" border="0" />';
	echo '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Restricted.png" align="middle" border="0" /></center><br />';
	echo '<h2>' . jr_gettext( '_JOMRES_JR_NOTLOGGEDIN', _JOMRES_JR_NOTLOGGEDIN ) . '</h2>';
	echo '<center><img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Restricted.png" align="middle" border="0" />';
	echo '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Secured.png" align="middle" border="0" />';
	echo '<img src="' . get_showtime( 'live_site' ) . '/'.JOMRES_ROOT_DIRECTORY.'/images/Restricted.png" align="middle" border="0" /></center><br />';


	//global $my;
	//trigger_error ("User attempted to view restricted functionality ".serialize($my), E_USER_ERROR);
	} // end of function



/**
#
 * Triggers the insert booking mini-comp 03020
#
 */
function insertInternetBooking( $jomressession = "", $depositPaid = false, $confirmationPageRequired = true, $customTextForConfirmationForm = "", $usejomressessionasCartid = false )
	{
	$jomressession     = get_showtime( 'jomressession' );
	$MiniComponents    = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );

	gateway_log( "insertInternetBooking: Attempting to insert booking jsid: " . get_showtime( 'jomressession' ) );
	if ( $tmpBookingHandler->getBookingFieldVal( "cart_payment" ) ) // I'm probably being lazy, creating this condition like this, but I'd rather keep things clear in my own mind atm, it can be tidied up later
		{
		$insert_failed = false;

		foreach ( $tmpBookingHandler->cart_data as $key => $cart_data )
			{
			$tmpBookingHandler->tmpbooking = $cart_data;
			$tmpBookingHandler->tmpguest   = $cart_data[ 'tmpguest' ];
			$componentArgs                 = array ( 'jomressession' => get_showtime( 'jomressession' ), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid );
			$result                        = $MiniComponents->triggerEvent( '03020', $componentArgs ); // Trigger the insert booking mini-comp
			gateway_log( "insertInternetBooking: " . serialize( $MiniComponents->miniComponentData[ '03020' ] ) );
			if ( !$MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ] ) $insert_failed = true;
			$tmpBookingHandler->resetTempBookingData();
			$tmpBookingHandler->resetTempGuestData();
			}

		gateway_log( "insertInternetBooking: Insert successful " );
		if ( $confirmationPageRequired && !$insert_failed )
			{
			gateway_log( "insertInternetBooking:Outputting confirmation page " );
			$property_uid  = (int) $tmpBookingHandler->getBookingFieldVal( "property_uid" );
			$componentArgs = array ( 'property_uid' => $property_uid );
			$componentArgs = array ( 'customText' => $customTextForConfirmationForm );
			$MiniComponents->triggerEvent( '03030', $componentArgs ); // Booking completed message
			$userIsManager = checkUserIsManager();
			if ( $userIsManager )
				{
				echo jr_gettext( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', _JOMRES_COM_MR_BOOKINGSAVEDMESSAGE ) . "<br />";
				$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
				$jrtb   = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem( 'editbooking', jomresURL( JOMRES_SITEPAGE_URL . "&task=editDeposit&contractUid=" . $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ] ), '' );
				$jrtb .= $jrtbar->endTable();
				echo $jrtb;
				}
			gateway_log( "<h2>Resetting temp booking data</h2>" );

			}
		$tmpBookingHandler->resetCart();
		return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
		}
	else
		{
		$userIsManager = checkUserIsManager();
		$componentArgs = array ( 'jomressession' => get_showtime( 'jomressession' ), 'depositPaid' => $depositPaid, 'usejomressessionasCartid' => $usejomressessionasCartid );
		$result        = $MiniComponents->triggerEvent( '03020', $componentArgs ); // Trigger the insert booking mini-comp
		gateway_log( "insertInternetBooking: " . serialize( $MiniComponents->miniComponentData[ '03020' ] ) );
		if ( $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ] )
			{
			gateway_log( "insertInternetBooking: Insert successful " );
			if ( $confirmationPageRequired )
				{
				gateway_log( "insertInternetBooking:Outputting confirmation page " );
				$property_uid  = (int) $tmpBookingHandler->getBookingFieldVal( "property_uid" );
				$componentArgs = array ( 'property_uid' => $property_uid );
				$componentArgs = array ( 'customText' => $customTextForConfirmationForm );
				$MiniComponents->triggerEvent( '03030', $componentArgs ); // Booking completed message
				if ( $userIsManager )
					{
					echo jr_gettext( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', _JOMRES_COM_MR_BOOKINGSAVEDMESSAGE ) . "<br />";
					//echo "<a href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=editDeposit&contractUid=$contract_uid")."\">".jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE',_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE)."</a>";
					$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
					$jrtb   = $jrtbar->startTable();
					$jrtb .= $jrtbar->toolbarItem( 'editbooking', jomresURL( JOMRES_SITEPAGE_URL . "&task=editDeposit&contractUid=" . $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'contract_uid' ] ), '' );
					$jrtb .= $jrtbar->endTable();
					echo $jrtb;
					}
				}

			gateway_log( "<h2>Resetting temp booking data</h2>" );
			$tmpBookingHandler->resetTempBookingData();

			return $MiniComponents->miniComponentData[ '03020' ][ 'insertbooking' ][ 'insertSuccessful' ];
			}
		else // If there's a failure at this point it shouldn't be because the guest cancelled at any stage. This is intended to trap errors that shouldn't be passed to the guest on the site
			{
			$subject = "Insert of booking failed. Likely caused by a database insert function failure.\n\n";
			gateway_log( $subject );
			}
		}

	return false;
	}

/**
#
 * Used during the insert internet booking phase. Takes guest data from the tmpbookings table and inserts it into the guests table (or updates same, depending on the value of $existing_id)
#
 */
function insertGuestDeets( $jomressession )
	{
	$thisJRUser          = jomres_singleton_abstract::getInstance( 'jr_user' );
	$tmpBookingHandler   = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$userIsManager       = checkUserIsManager();

	$xCustomers = $tmpBookingHandler->getGuestData();

	$guests_uid   = (int) $xCustomers[ 'guests_uid' ];
	$mos_userid   = (int) $xCustomers[ 'mos_userid' ];
	$existing_id  = (int) $xCustomers[ 'existing_id' ];
	$email        = $xCustomers[ 'email' ];
	$firstname    = $xCustomers[ 'firstname' ];
	$surname      = $xCustomers[ 'surname' ];
	$house        = $xCustomers[ 'house' ];
	$street       = $xCustomers[ 'street' ];
	$town         = $xCustomers[ 'town' ];
	$region       = $xCustomers[ 'region' ];
	$country      = $xCustomers[ 'country' ];
	$postcode     = $xCustomers[ 'postcode' ];
	$landline     = $xCustomers[ 'tel_landline' ];
	$mobile       = $xCustomers[ 'tel_mobile' ];
	$property_uid = (int) $tmpBookingHandler->getBookingPropertyId( $tmpBookingHandler );
	$defaultProperty = $property_uid;
	
	if ($mos_userid == 0)
		{
		if ( !$userIsManager && $thisJRUser->id > 0 )
			{
			$mos_userid      = $thisJRUser->id;
			}
		else if ( !$userIsManager && $thisJRUser->id == 0 )
			{
			$mos_userid      = 0;
			}
		}

	if ( $mos_userid > 0 )
		{
		$query         = "SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '" . (int) $mos_userid . "' AND `property_uid`= $property_uid LIMIT 1";
		$xistingGuests = doSelectSql( $query );
		if ( count( $xistingGuests ) > 0 )
			{
			foreach ( $xistingGuests as $g )
				{
				$guests_uid = $g->guests_uid;
				}
			}
		else
			{
			$guests_uid = 0;
			}
		}
	elseif ( $existing_id > 0 ) 
		{
		$guests_uid = $existing_id;
		}
	else
		{
		$guests_uid = 0;
		}
		
	if ( $guests_uid > 0 )
		{
		$query = "UPDATE	#__jomres_guests SET `firstname`='$firstname',`surname`='$surname',`house`='$house',`street`='$street',
		`town`= '$town',`county`= '$region',`country`= '$country',`postcode`= '$postcode',`tel_landline`= '$landline',`tel_mobile`= '$mobile',
		`property_uid`='" . (int) $property_uid . "',`email`='$email'
		WHERE guests_uid = '" . (int) $guests_uid . "'";
		doInsertSql( $query, false );
		$returnid = $guests_uid;
		}
	else
		{
		$query = "INSERT INTO #__jomres_guests
		(`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`property_uid`,`email`";
		$query .= ",`mos_userid`";
		$query .= ") VALUES ('$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$property_uid','$email'";
		$query .= ",'" . (int) $mos_userid . "'";
		$query .= ")";
		$returnid = doInsertSql( $query, false );
		}

	// New for 4.5.9. We need now to look in the new guest profile table and see if this user already exists. If they do not, we'll take these details and add them to the profile table too, then in future the profile table's data will be used as the primary source of this guest's information, continuing to ensure that guest details are not shared between properties. No property should ever be able to access a guest's details unless that guest has already booked with that property.
	// First, we'll look at this user's id. If it's the same as mos_userid above, then the user making the booking is a guest.
	if ( ( $thisJRUser->id == $mos_userid && $thisJRUser->id > 0 ) || ( $mos_userid > 0 && isset($_REQUEST['jsid']) ) ) // Either it's the guest making the booking, or it's a gateway call and the user's a registered user. Either way, we can update the profile table.
		{
		$query     = "SELECT id FROM #__jomres_guest_profile WHERE cms_user_id = '" . (int) $mos_userid . "' LIMIT 1";
		$guestData = doSelectSql( $query, 2 );
		if ( !$guestData ) // The guest doesn't have information in the profile table yet.
			{
			$query = "INSERT INTO #__jomres_guest_profile (`cms_user_id`,`firstname`,`surname`,`house`,`street`,`town`,`county`,`country`,`postcode`,`tel_landline`,`tel_mobile`,`email`) VALUES ('" . (int) $mos_userid . "','$firstname','$surname','$house','$street','$town','$region','$country','$postcode','$landline','$mobile','$email')";
			doInsertSql( $query, '' );
			}
		}

	if ( !$returnid )
		{
		echo "Error saving users details";
		exit;
		}

	return $returnid;
	}


/**
#
 * Receives a date yyyy/mm/dd from the system and converts it to the configured output format
#
 */
function outputDate( $thedate )
	{
	// Assumes the date $theDate comes from the system in the format YYYY/mm/dd

	if ( function_exists( 'jomres_cmsspecific_output_date' ) )
		{
		$thedate = str_replace( "/", "-", $thedate );

		$formattedDate = jomres_cmsspecific_output_date( $thedate );
		}
	else
		{
		$mrConfig      = getPropertySpecificSettings();
		$date_elements = explode( "/", $thedate );
		$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
		if ( $mrConfig[ 'dateFormatStyle' ] == "1" ) $formattedDate = date( $mrConfig[ 'cal_output' ], $unixDate );
		else
		$formattedDate = strftime( $mrConfig[ 'cal_output' ], $unixDate );
		}

	return $formattedDate;
	}

/**
#
 * Makes the date for display in the javascript calendar. Will receive a yyyy/mm/dd formatted string and output it in the format desired by configuration settings
#
 */
function JSCalmakeInputDates( $inputDate, $siteCal = false )
	{
	$mrConfig   = getPropertySpecificSettings();
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	// Lets make the calendar dates for display in the js calendar. will receive a Y/m/d formatted string &	output it in the desired format
	// m d y. Probably unneccesary, but we'll do it anyway, to be on the safe side.
	$date_elements = explode( "/", $inputDate );
	$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );

	$dateFormat = $jrConfig[ 'cal_input' ];
	switch ( $dateFormat )
	{
		case "%d/%m/%Y":
			$theDate = adodb_date( "d/m/Y", $unixDate );
			break;
		case "%Y/%m/%d":
			$theDate = adodb_date( "Y/m/d", $unixDate );
			break;
		case "%m/%d/%Y":
			$theDate = adodb_date( "m/d/Y", $unixDate );
			break;
		case "%d-%m-%Y":
			$theDate = adodb_date( "d-m-Y", $unixDate );
			break;
		case "%Y-%m-%d":
			$theDate = adodb_date( "Y-m-d", $unixDate );
			break;
		case "%m-%d-%Y":
			$theDate = adodb_date( "m-d-Y", $unixDate );
			break;
		case "%d.%m.%Y":
			$theDate = adodb_date( "d.m.Y", $unixDate );
			break;
		default:
			echo "Error in date format. Cannot continue. If you have just installed Jomres you should log into the frontend as a property manager. This will set up sufficient data so that you can proceed.";
			exit;
			break;
	}

	return $theDate;
	}

/**
#
 * Converts a date that was supplied by the javascript calendar into yyyy/mm/dd for the system to use
#
 */
function JSCalConvertInputDates( $inputDate, $siteCal = false )
	{
	// Lets convert the input calendar dates to Y/m/d
	$mrConfig   = getPropertySpecificSettings();
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	$dateFormat = $jrConfig[ 'cal_input' ];
	switch ( $dateFormat )
	{
		case "%d/%m/%Y":
			$date_elements = explode( "/", $inputDate );
			$unixDate      = @adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ] );
			break;
		case "%Y/%m/%d":
			$date_elements = explode( "/", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			break;
		case "%m/%d/%Y":
			$date_elements = explode( "/", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ] );
			break;
		case "%d-%m-%Y":
			$date_elements = explode( "-", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ] );
			break;
		case "%Y-%m-%d":
			$date_elements = explode( "-", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
			break;
		case "%m-%d-%Y":
			$date_elements = explode( "-", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 0 ], $date_elements[ 1 ], $date_elements[ 2 ] );
			break;
		case "%d.%m.%Y":
			$date_elements = explode( ".", $inputDate );
			$unixDate      = adodb_mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 0 ], $date_elements[ 2 ] );
			break;
		default:
			echo "Error in date format. Cannot continue.";
			exit;
			break;
	}
	$theDate = adodb_date( "Y/m/d", $unixDate );

	return $theDate;
	}


//--------------------------------------
//-E D I T	G A T E W A Y
//--------------------------------------


/**
#
 * Imports settings from jomres_config.php for new properties, or import settings into the db during install
#
 */
//--------------------------------------
//-I M P O R T	S E T T I N G S
//--------------------------------------

function importSettings( $property_uid, $source_property_uid = 0 )
	{
	$mrConfig = getPropertySpecificSettings();
	if ( $property_uid == 0 ) // We're installing, so all settings will be inserted from jomres_config.php into the database. We'll use property_uid 0 to create baseline settings that all other properties will use as their default when they call getPropertySpecificSettings
		{
		include( JOMRESPATH_BASE . JRDS . 'jomres_config.php' );
		foreach ( $mrConfig as $k => $v )
			{
			if ( !insertSetting( 0, $k, $v ) ) error_logging( "Error, couldn't import setting " . $k . " - " . $v . " for property uid 0 into the jomres_settings table " );
			}
		}
	else // We have created a new property and are inserting their default settings into the db by pulling the default settings from the 0 property uid list
		{
		$query        = "SELECT akey,value FROM #__jomres_settings WHERE property_uid = " . $source_property_uid . " AND akey = '" . $k . "'";
		$settingsList = doSelectSql( $query );
		foreach ( $settingsList as $set )
			{
			if ( !insertSetting( $property_uid, $set->akey, $set->value ) ) error_logging( "Error, couldn't import setting " . $set->akey . " - " . $set->value . " for property uid " . $property_uid . " into the jomres_settings table " );
			}
		}

	return;
	}

// Companion to the importSettings function above
function insertSetting( $property_uid, $k, $v )
	{
	$query        = "SELECT value FROM #__jomres_settings WHERE property_uid = '" . (int) $property_uid . "' AND akey = '" . $k . "'";
	$settingsList = doSelectSql( $query );
	if ( count( $settingsList ) == 0 ) $query = "INSERT INTO #__jomres_settings (property_uid,akey,value) VALUES ('" . (int) $property_uid . "','" . $k . "','" . $v . "')";
	else
	$query = "UPDATE #__jomres_settings SET `value`='" . $v . "' WHERE property_uid = '" . (int) $property_uid . "' and akey = '" . $k . "'";

	return doInsertSql( $query, '' );
	}

//-------------------------------
// G A T E W A Y	C O N F I G ---
//-------------------------------


/**
#
 * Saves a plugin's settings
#
 */
function savePlugin( $plugin )
	{
	$defaultProperty = getDefaultProperty();
	foreach ( $_POST as $k => $v )
		{
		$dirty = (string) $k;
		$k     = RemoveXSS( $dirty );
		if ( $k != 'task' && $k != 'plugin' ) $values[ $k ] = jomresGetParam( $_POST, $k, "" );
		}
	foreach ( $values as $k => $v )
		{
		$query       = "SELECT id FROM #__jomres_pluginsettings WHERE prid = '" . (int) $defaultProperty . "' AND plugin = '$plugin' AND setting = '$k'";
		$settingList = doSelectSql( $query );
		if ( count( $settingList ) > 0 )
			{
			/*
			foreach ($settingList as $set)
				{
				$id=$set->id;
				}
			*/
			$query = "UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = '" . (int) $defaultProperty . "' AND plugin = '$plugin' AND setting = '$k'";
			doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', _JOMRES_MR_AUDIT_PLUGINS_UPDATE, false ) );
			}
		else
			{
			$query = "INSERT INTO #__jomres_pluginsettings
				(`prid`,`plugin`,`setting`,`value`) VALUES
				('" . (int) $defaultProperty . "','$plugin','$k','$v')";
			doInsertSql( $query, jr_gettext( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', _JOMRES_MR_AUDIT_PLUGINS_INSERT, false ) );
			}
		}
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'plugin_save.html' );
	$tmpl->displayParsedTemplate();
	}

/**
#
 * depreciated
#
 */
function listGateways()
	{
	$listdir = JOMRESCONFIG_ABSOLUTE_PATH . "/administrator/".JOMRES_ROOT_DIRECTORY."/plugins/gateways/";
	$d       = @dir( $listdir );
	$folders = array ();
	if ( $d )
		{
		$folders = array ();
		//$docs = array();
		while ( false !== ( $entry = $d->read() ) )
			{
			$gateway_folder = $entry;
			if ( is_dir( $listdir . '/' . $gateway_folder ) && substr( $entry, 0, 1 ) != '.' && strtolower( $entry ) !== 'cvs' )
				{
				$folders[ ] = $gateway_folder;
				}
			}
		$d->close();
		}

	return $folders;
	}


//---------------------------------
//-P R O P E R T Y T Y P E S	 ----
//---------------------------------

/**
#
 * Shows the dropdown for selecting the property type in the edit property function
#
 */
function getPropertyTypeDropdown( $propertyType = "", $all = false, $empty_ok = false )
	{
	$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
	$ptypeOptions = array ();
	
	if ( $all ) 
		$ptypeOptions[ ] = jomresHTML::makeOption( 0, jr_gettext( '_JOMRES_SEARCH_ALL', _JOMRES_SEARCH_ALL, false, false ) );
	
	if ( $empty_ok ) 
		$ptypeOptions[ ] = jomresHTML::makeOption( 0, ' ' );

	foreach($current_property_details->all_property_type_titles as $k=>$v)
		{
		$ptypeOptions[] = jomresHTML::makeOption( $k, $v );
		}

	$ptypeDropDownList = jomresHTML::selectList( $ptypeOptions, 'propertyType', 'class="inputbox" size="1"', 'value', 'text', $propertyType );

	return $ptypeDropDownList;
	}

/**
#
 * Creates a filter dropdown
#
 */
function filterForm( $selectname, $value, $format, $task = "" )
	{
	$task       = get_showtime( 'task' );
	$selecthtml = "\n<form action=\"\" method=\"get\" name=\"jomresFilter" . $selectname . "\"><span class=\"inputbox_wrapper\"><select class=\"inputbox\" name=\"$selectname\" onchange=\"window.open(this.options[this.selectedIndex].value,'_top')\">";
	$selecthtml .= "\n<option value=\"" . jomresURL( JOMRES_SITEPAGE_URL . "&task=" . $task ) . "\"></option>";
	$selecthtml .= "\n<option value=\"" . jomresURL( JOMRES_SITEPAGE_URL . "&task=" . $task ) . "\">" . jr_gettext( '_JOMRES_COM_A_RESET', _JOMRES_COM_A_RESET, false ) . "</option>";
	if ( count( $value ) > 0 )
		{
		foreach ( $value as $v )
			{
			$v_output = $v;
			$selected = "";
			if ( $format == "date" ) $v_output = outputDate( $v_output );
			if ( $v == $defaultValue ) $selected = "selected";
			$selecthtml .= "\n<option value=\"" . jomresURL( JOMRES_SITEPAGE_URL . "&task=" . $task ) . "&" . $selectname . "=" . urlencode( $v ) . "\" " . $selected . ">" . $v_output . "</option>";
			}
		}
	$selecthtml .= "\n</select></span>
	</form>";

	return $selecthtml;
	}

/**
#
 * Receives a list of contract uids and generates a list of bookings based on those uids
#
 */
function showLiveBookings( $contractsList, $title, $arrivaldateDropdown )
	{
	$defaultProperty = getDefaultProperty();
	$mrConfig        = getPropertySpecificSettings();
	if ( $defaultProperty == "0" ) $defaultProperty = "%";
	$today           = date( "Y/m/d" );
	$pathToImages    = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images";
	$img_pending     = $pathToImages . "/pending.gif";
	$img_arrivetoday = $pathToImages . "/arrivetoday.gif";
	$img_resident    = $pathToImages . "/resident.gif";
	$img_departtoday = $pathToImages . "/departtoday.gif";
	$img_stillhere   = $pathToImages . "/stillhere.gif";
	$img_late        = $pathToImages . "/late.gif";

	$contract_ids = array ();

	foreach ( $contractsList as $c )
		{
		$contract_ids[ ] = $c->contract_uid;
		}

	$gor          = genericOr( $contract_ids, 'contract_uid' );
	$query        = "SELECT * FROM #__jomres_contracts WHERE property_uid = '" . (int) $defaultProperty . "' AND " . $gor;
	$booking_data = doSelectSql( $query );

	$output                      = array ();
	$output[ 'PAGETITLE' ]       = $title;
	$output[ 'IMG_PENDING' ]     = $img_pending;
	$output[ 'IMG_ARRIVETODAY' ] = $img_arrivetoday;
	$output[ 'IMG_RESIDENT' ]    = $img_resident;
	$output[ 'IMG_LATE' ]        = $img_late;
	$output[ 'IMG_DEPARTTODAY' ] = $img_departtoday;
	$output[ 'IMG_STILLHERE' ]   = $img_stillhere;

	$output[ 'TEXT_PENDING' ]     = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', _JOMRES_COM_MR_VIEWBOOKINGS_PENDING );
	$output[ 'TEXT_ARRIVETODAY' ] = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY );
	$output[ 'TEXT_RESIDENT' ]    = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', _JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT );
	$output[ 'TEXT_LATE' ]        = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', _JOMRES_COM_MR_VIEWBOOKINGS_LATE );
	$output[ 'TEXT_DEPARTTODAY' ] = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', _JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY );
	$output[ 'TEXT_STILLHERE' ]   = $mrConfig[ 'wholeday_booking' ] == "1" ? jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY ) : jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', _JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE );

	$output[ '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS' ]  = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', _JOMRES_COM_MR_VIEWBOOKINGS_STATUS );
	$output[ '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', _JOMRES_COM_MR_VIEWBOOKINGS_SURNAME );
	$output[ '_JOMRES_COM_MR_EDITBOOKINGTITLE' ]     = jr_gettext( '_JOMRES_COM_MR_EDITBOOKINGTITLE', _JOMRES_COM_MR_EDITBOOKINGTITLE );
	$output[ '_JOMRES_BOOKING_NUMBER' ]              = jr_gettext( '_JOMRES_BOOKING_NUMBER', _JOMRES_BOOKING_NUMBER, true, false );
	if ( $mrConfig[ 'wholeday_booking' ] == "1" )
		{
		$output[ 'ARRIVAL' ]   = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY );
		$output[ 'DEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', _JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY );
		}
	else
		{
		$output[ 'ARRIVAL' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', _JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL );
		if ( $mrConfig[ 'showdepartureinput' ] == "1" ) $output[ 'DEPARTURE' ] = jr_gettext( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', _JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE );
		else
		$output[ 'DEPARTURE' ] = "&nbsp;";
		}

	$rows = array ();
	for ( $i = 0, $n = count( $contractsList ); $i < $n; $i++ )
		{
		$r         = array ();
		$imgToShow = $img_pending;
		$row       = $contractsList[ $i ];
		$arrival   = $row->arrival;
		$departure = $row->departure;
		$bookedIn  = $row->booked_in;

		$date_elements = explode( "/", $today );
		$unixToday     = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
		$date_elements = explode( "/", $arrival );
		$unixArrival   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
		$date_elements = explode( "/", $departure );
		$unixDeparture = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
		if ( $unixArrival == $unixToday && $bookedIn != "1" ) $imgToShow = $img_arrivetoday;
		if ( $unixDeparture == $unixToday && $bookedIn == "1" ) $imgToShow = $img_departtoday;
		if ( $unixArrival < $unixToday && $bookedIn != "1" ) $imgToShow = $img_late;
		if ( $unixDeparture > $unixToday && $bookedIn == "1" ) $imgToShow = $img_resident;
		if ( $unixDeparture < $unixToday && $bookedIn == "1" ) $imgToShow = $img_stillhere;

		$r[ 'STATE_IMAGE' ] = $imgToShow;
		$r[ 'EDIT_LINK' ]   = '<a href="' . jomresURL( JOMRES_SITEPAGE_URL . "&task=editBooking&contract_uid=" . ( $row->contract_uid ) ) . '" class="btn btn-info"><i class="icon-edit icon-white"></i> ' . jr_gettext( '_JOMRES_COM_MR_EDITBOOKINGTITLE', _JOMRES_COM_MR_EDITBOOKINGTITLE, false ) . '</a>';
		$r[ 'EDIT_URL' ]    = jomresURL( JOMRES_SITEPAGE_URL . "&task=editBooking&contract_uid=" . ( $row->contract_uid ) );
		$r[ 'EDIT_TEXT' ]   = jr_gettext( '_JOMRES_COM_MR_EDITBOOKINGTITLE', _JOMRES_COM_MR_EDITBOOKINGTITLE, false );

		$r[ 'FIRSTNAME' ] = $row->firstname;
		$r[ 'SURNAME' ]   = $row->surname;

		$r[ 'BOOKING_NO' ]  = $row->tag;
		$r[ 'ARRIVALDATE' ] = outputDate( $row->arrival );
		if ( $mrConfig[ 'showdepartureinput' ] == "1" ) $r[ 'DEPARTURE' ] = outputDate( $row->departure );
		else
		$r[ 'DEPARTURE' ] = "&nbsp;";
		$rows[ ] = $r;
		}
	
	if ( get_showtime( "task" ) == "list_bookings")
		{
		$output[ 'TOUR_DIV_ID' ] = 'tour_target_listall_bookings';
		}
	
	$pageoutput[ ] = $output;

	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'list_property_bookings.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->addRows( 'rows', $rows );
	$tmpl->displayParsedTemplate();

	}

//end function showLiveBookings

/**
#
 * Receives a property uid, returns an array of data for that property
#
 */
function getPropertyAddressForPrint( $propertyUid )
	{
	$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
	$current_property_details->gather_data($propertyUid);

	$obj = new stdClass; // For use by queries that used to call mysql for this information, we'll just dress the data up as it used to come out of a query
	$obj->property_name     = $current_property_details->property_name;
	$obj->property_street   = $current_property_details->property_street;
	$obj->property_town     = $current_property_details->property_town;
	$obj->property_postcode = $current_property_details->property_postcode;
	$obj->property_region   = $current_property_details->property_region;
	$obj->property_country  = $current_property_details->property_country;
	$obj->property_tel      = $current_property_details->property_tel;
	$obj->property_features = $current_property_details->property_features;

	$obj->property_description          = $current_property_details->property_description;
	$obj->property_checkin_times        = $current_property_details->property_checkin_times;
	$obj->property_area_activities      = $current_property_details->property_area_activities;
	$obj->property_driving_directions   = $current_property_details->property_driving_directions;
	$obj->property_airports             = $current_property_details->property_airports;
	$obj->property_othertransport       = $current_property_details->property_othertransport;
	$obj->property_policies_disclaimers = $current_property_details->property_policies_disclaimers;

	$obj->property_email = $current_property_details->property_email;
	$obj->published      = (int) $current_property_details->published;
	$obj->ptype_id       = (int) $current_property_details->ptype_id;
	$obj->stars          = (int) $current_property_details->stars;
	$obj->propertys_uid  = (int) $propertyUid;

	$indexedPropertyDetails = array ( "property_name" => $current_property_details->property_name, 
									 "property_street" => $current_property_details->property_street, 
									 "property_town" => $current_property_details->property_town, 
									 "property_postcode" => $current_property_details->property_postcode, 
									 "property_region" => $current_property_details->property_region, 
									 "property_country" => $current_property_details->property_country, 
									 "property_tel" => $current_property_details->property_tel, 
									 "property_features" => $current_property_details->property_features, 
									 "property_email" => $current_property_details->property_email, 
									 "published" => (int) $current_property_details->published, 
									 "ptype_id" => (int) $current_property_details->ptype_id, 
									 "stars" => (int) $current_property_details->stars,
									 "property_description" => $current_property_details->property_description, 
									 "property_checkin_times" => $current_property_details->property_checkin_times, 
									 "property_area_activities" => $current_property_details->property_area_activities, 
									 "property_driving_directions" => $current_property_details->property_driving_directions, 
									 "property_airports" => $current_property_details->property_airports, 
									 "property_othertransport" => $current_property_details->property_othertransport, 
									 "property_policies_disclaimers" => $current_property_details->property_policies_disclaimers,
									 "lat" => $current_property_details->lat, 
									 "long" => $current_property_details->long, 
									 "metatitle" => $current_property_details->metatitle, 
									 "metadescription" => $current_property_details->metadescription,
									 "propertys_uid" => (int) $propertyUid, 
									 "obj" => array ( $obj ) );

	$propertyAddress   = array ( $current_property_details->property_name,
								$current_property_details->property_street,
								$current_property_details->property_town,
								$current_property_details->property_postcode,
								$current_property_details->property_region,
								$current_property_details->property_country_code );
	
	$propertyContact   = array ( $current_property_details->property_tel,
								$current_property_details->property_fax,
								$current_property_details->property_email,
								get_showtime( 'live_site' ) );
	
	$propertyDataArray = array ( $current_property_details->property_name,
								$propertyAddress,
								$propertyContact,
								$indexedPropertyDetails );

	return $propertyDataArray;
	}

/**
#
 * Receives a guest's uid, returns an array of guest data
#
 */
function getGuestForPrint( $guestUid )
	{
	$query     = "SELECT firstname,surname,house,street,town,postcode,county,country,email FROM #__jomres_guests WHERE guests_uid = '" . (int) $guestUid . "'";
	$guestData = doSelectSql( $query );
	foreach ( $guestData as $data )
		{
		$firstname = $data->firstname;
		$surname   = $data->surname;
		$house     = $data->house;
		$street    = $data->street;
		$town      = $data->town;
		$postcode  = $data->postcode;
		$region    = $data->county;
		$country   = $data->country;
		$email     = $data->email;
		}
	$guestAddress = array ( $firstname, $surname, $house, $street, $town, $postcode, $region, $country, $email );

	return $guestAddress;
	}


/**
#
 * Returns the property's name when passed a property uid
#
 */
function getPropertyName( $property_uid )
	{
	$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
	if ( (int) $property_uid == 0 ) return '';

	return $current_property_details->get_property_name( $property_uid );
	}

/**
#
 * Takes a url, indexed array and a postage method. For use by gateways to post data to payment services.
#
 */
function gatewayPostage( $outgoingURL, $postage, $method = "post" )
	{
	?>
		<script>
			toloadindex = toload.length + 1;
			toload[1] = "document.form.submit()";
		</script>
	<?php
	echo "<html>\n";
	echo "<head><title>" . jr_gettext( 'JOMRES_PHRASE_PROCESSING', JOMRES_PHRASE_PROCESSING, false ) . "</title></head>\n";
	echo "<body onLoad=\"document.form.submit();\">\n";
	echo "<center><h3>" . jr_gettext( 'JOMRES_PHRASE_PROCESSING', JOMRES_PHRASE_PROCESSING, false ) . "</h3></center>\n";
	echo "<form method=\"" . $method . "\" name=\"form\" action=\"" . $outgoingURL . "\">\n";
	foreach ( $postage as $name => $value )
		{
		echo "<input type=\"hidden\" name=\"$name\" value=\"$value\">";
		}
	echo "</form>\n";
	echo "</body></html>\n";
	}


/**
#
 * Works out the difference between two dates in days
#
 */
function dateDiff( $interval, $first_date, $second_date )
	{
	$first_date_ex  = explode( "/", $first_date );
	$second_date_ex = explode( "/", $second_date );
	$fd             = gregoriantojd( $first_date_ex[ 1 ], $first_date_ex[ 2 ], $first_date_ex[ 0 ] );
	$sd             = gregoriantojd( $second_date_ex[ 1 ], $second_date_ex[ 2 ], $second_date_ex[ 0 ] );
	$days           = $sd - $fd;

	return $days;
	}


function getImageForProperty( $imageType, $property_uid, $itemUid )
	{
	$fileLocation = false;
	switch ( $imageType )
	{
		case 'property':
			$default_image = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/jrlogo.png";
			if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . $property_uid . "_property_" . $itemUid . ".jpg" ) ) $fileLocation = JOMRES_IMAGELOCATION_RELPATH . $property_uid . "_property_" . $property_uid . ".jpg";
			else
			$fileLocation = $default_image;
			break;
		case 'room':
			$default_image = get_showtime( 'live_site' ) . "/".JOMRES_ROOT_DIRECTORY."/images/noimage.gif";
			if ( file_exists( JOMRES_IMAGELOCATION_ABSPATH . $property_uid . "_room_" . $itemUid . ".jpg" ) ) $fileLocation = JOMRES_IMAGELOCATION_RELPATH . $property_uid . "_room_" . $itemUid . ".jpg";
			else
			$fileLocation = $default_image;
			break;
		default :
			return false;
	}

	return $fileLocation;
	}

function getThumbnailForImage( $imagefullrelpath, $medium = false )
	{
	$filedata   = explode( "/", $imagefullrelpath );
	$count      = count( $filedata );
	$image_name = $filedata[ $count - 1 ];
	$filename   = explode( ".", $image_name );

	$filename = $filename[ 0 ];
	if ( !$medium ) $thumbnail_image_name = $filename . "_thumbnail.jpg";
	else
	$thumbnail_image_name = $filename . "_thumbnail_med.jpg";

	// Now we need to recombine the image path again. We already know parts of it.
	$path                    = str_replace( JOMRES_IMAGELOCATION_RELPATH, "", $imagefullrelpath );
	$pathdata                = explode( "/", $path );
	$thumbnail_image_abspath = JOMRES_IMAGELOCATION_ABSPATH;
	$thumbnail_image_relpath = JOMRES_IMAGELOCATION_RELPATH;
	if ( count( $pathdata ) > 1 )
		{
		//
		foreach ( $pathdata as $val )
			{
			if ( $val != $image_name )
				{
				$thumbnail_image_abspath .= $val . JRDS;
				$thumbnail_image_relpath .= $val . '/';
				}
			}
		$thumbnail_image_abspath .= $thumbnail_image_name;
		$thumbnail_image_relpath .= $thumbnail_image_name;
		}
	else
		{
		$thumbnail_image_abspath = JOMRES_IMAGELOCATION_ABSPATH . $thumbnail_image_name;
		$thumbnail_image_relpath = JOMRES_IMAGELOCATION_RELPATH . $thumbnail_image_name;
		}
	// We'll now test to see if the thumbnail image exists. If it doesn't, we'll simply pass back false. The calling script then decide to show the original image or the thumbnail
	if ( file_exists( $thumbnail_image_abspath ) ) return $thumbnail_image_relpath;
	else
	return false;

	}


/**
#
 * Constructs the mrConfig data when passed a property uid.
#
 */
function getPropertySpecificSettings( $property_uid = null )
	{
	global $mrConfig;
	$propertyConfig = jomres_singleton_abstract::getInstance( 'jomres_config_property_singleton' );
	if ( $propertyConfig->property_uid == 0 ) $propertyConfig->init( $property_uid );

	if ( $property_uid == null )
		{
		$mrConfig = $propertyConfig->get();
		}
	else
		{
		if ( (int) $property_uid != (int) $propertyConfig->property_uid )
			{
			$propertyConfig->load_property_config( $property_uid );
			$mrConfig = $propertyConfig->get();
			}
		else
		$mrConfig = $propertyConfig->get();
		}

	return $mrConfig;
	}


/**
#
 * Creates an array of country codes, countries and currency names
#
 */
function currencyCodesArray()
	{
	$codes[ "AED" ] = array ( 'country' => "United Arab Emirates", 'currencyname' => "Dirhams" );
	$codes[ "AFN" ] = array ( 'country' => "Afghanistan", 'currencyname' => "Afghanis" );
	$codes[ "ALL" ] = array ( 'country' => "Albania", 'currencyname' => "Leke" );
	$codes[ "AMD" ] = array ( 'country' => "Armenia", 'currencyname' => "Drams" );
	$codes[ "ANG" ] = array ( 'country' => "Netherlands Antilles", 'currencyname' => "Guilders/Florins" );
	$codes[ "AOA" ] = array ( 'country' => "Angola", 'currencyname' => "Kwanza" );
	$codes[ "ARS" ] = array ( 'country' => "Argentina", 'currencyname' => "Pesos" );
	$codes[ "AUD" ] = array ( 'country' => "Australia", 'currencyname' => "Dollars" );
	$codes[ "AWG" ] = array ( 'country' => "Aruba", 'currencyname' => "Guilders" );
	$codes[ "AZN" ] = array ( 'country' => "Azerbaijan", 'currencyname' => "New Manats" );
	$codes[ "BAM" ] = array ( 'country' => "Bosnia and Herzegovina", 'currencyname' => "Convertible Marka" );
	$codes[ "BBD" ] = array ( 'country' => "Barbados", 'currencyname' => "Dollars" );
	$codes[ "BDT" ] = array ( 'country' => "Bangladesh", 'currencyname' => "Taka" );
	$codes[ "BGN" ] = array ( 'country' => "Bulgaria", 'currencyname' => "Leva" );
	$codes[ "BHD" ] = array ( 'country' => "Bahrain", 'currencyname' => "Dinars" );
	$codes[ "BIF" ] = array ( 'country' => "Burundi", 'currencyname' => "Francs" );
	$codes[ "BMD" ] = array ( 'country' => "Bermuda", 'currencyname' => "Dollars" );
	$codes[ "BND" ] = array ( 'country' => "Brunei Darussalam", 'currencyname' => "Dollars" );
	$codes[ "BOB" ] = array ( 'country' => "Bolivia", 'currencyname' => "Bolivianos" );
	$codes[ "BRL" ] = array ( 'country' => "Brazil", 'currencyname' => "Brazil Real" );
	$codes[ "BSD" ] = array ( 'country' => "Bahamas", 'currencyname' => "Dollars" );
	$codes[ "BTN" ] = array ( 'country' => "Bhutan", 'currencyname' => "Ngultrum" );
	$codes[ "BWP" ] = array ( 'country' => "Botswana", 'currencyname' => "Pulas" );
	$codes[ "BYR" ] = array ( 'country' => "Belarus", 'currencyname' => "Rubles" );
	$codes[ "BZD" ] = array ( 'country' => "Belize", 'currencyname' => "Dollars" );
	$codes[ "CAD" ] = array ( 'country' => "Canada", 'currencyname' => "Dollars" );
	$codes[ "CDF" ] = array ( 'country' => "Congo/Kinshasa", 'currencyname' => "Congolese Francs" );
	$codes[ "CHF" ] = array ( 'country' => "Switzerland", 'currencyname' => "Francs" );
	$codes[ "CLP" ] = array ( 'country' => "Chile", 'currencyname' => "Pesos" );
	$codes[ "CNY" ] = array ( 'country' => "China", 'currencyname' => "Yuan Renminbi" );
	$codes[ "COP" ] = array ( 'country' => "Colombia", 'currencyname' => "Pesos" );
	$codes[ "CRC" ] = array ( 'country' => "Costa Rica", 'currencyname' => "Colones" );
	$codes[ "CSD" ] = array ( 'country' => "Serbia", 'currencyname' => "Dinars" );
	$codes[ "CUP" ] = array ( 'country' => "Cuba", 'currencyname' => "Pesos" );
	$codes[ "CVE" ] = array ( 'country' => "Cape Verde", 'currencyname' => "Escudos" );
	$codes[ "CYP" ] = array ( 'country' => "Cyprus", 'currencyname' => "Pounds" );
	$codes[ "CZK" ] = array ( 'country' => "Czech Republic", 'currencyname' => "Koruny" );
	$codes[ "DJF" ] = array ( 'country' => "Djibouti", 'currencyname' => "Francs" );
	$codes[ "DKK" ] = array ( 'country' => "Denmark", 'currencyname' => "Kroner" );
	$codes[ "DOP" ] = array ( 'country' => "Dominican Republic", 'currencyname' => "Pesos" );
	$codes[ "DZD" ] = array ( 'country' => "Algeria", 'currencyname' => "Algeria Dinars" );
	$codes[ "EEK" ] = array ( 'country' => "Estonia", 'currencyname' => "Krooni" );
	$codes[ "EGP" ] = array ( 'country' => "Egypt", 'currencyname' => "Pounds" );
	$codes[ "ERN" ] = array ( 'country' => "Eritrea", 'currencyname' => "Nakfa" );
	$codes[ "ETB" ] = array ( 'country' => "Ethiopia", 'currencyname' => "Birr" );
	$codes[ "EUR" ] = array ( 'country' => "Euro Member Countries", 'currencyname' => "Euro" );
	$codes[ "FJD" ] = array ( 'country' => "Fiji", 'currencyname' => "Dollars" );
	$codes[ "FKP" ] = array ( 'country' => "Falkland Islands (Malvinas)", 'currencyname' => "Pounds" );
	$codes[ "GBP" ] = array ( 'country' => "United Kingdom", 'currencyname' => "Pounds" );
	$codes[ "GEL" ] = array ( 'country' => "Georgia", 'currencyname' => "Lari" );
	$codes[ "GGP" ] = array ( 'country' => "Guernsey", 'currencyname' => "Pounds" );
	$codes[ "GHC" ] = array ( 'country' => "Ghana", 'currencyname' => "Cedis" );
	$codes[ "GIP" ] = array ( 'country' => "Gibraltar", 'currencyname' => "Pounds" );
	$codes[ "GMD" ] = array ( 'country' => "Gambia", 'currencyname' => "Dalasi" );
	$codes[ "GNF" ] = array ( 'country' => "Guinea", 'currencyname' => "Francs" );
	$codes[ "GTQ" ] = array ( 'country' => "Guatemala", 'currencyname' => "Quetzales" );
	$codes[ "GYD" ] = array ( 'country' => "Guyana", 'currencyname' => "Dollars" );
	$codes[ "HKD" ] = array ( 'country' => "Hong Kong", 'currencyname' => "Dollars" );
	$codes[ "HNL" ] = array ( 'country' => "Honduras", 'currencyname' => "Lempiras" );
	$codes[ "HRK" ] = array ( 'country' => "Croatia", 'currencyname' => "Kuna" );
	$codes[ "HTG" ] = array ( 'country' => "Haiti", 'currencyname' => "Gourdes" );
	$codes[ "HUF" ] = array ( 'country' => "Hungary", 'currencyname' => "Forint" );
	$codes[ "IDR" ] = array ( 'country' => "Indonesia", 'currencyname' => "Rupiahs" );
	$codes[ "ILS" ] = array ( 'country' => "Israel", 'currencyname' => "New Shekels" );
	$codes[ "IMP" ] = array ( 'country' => "Isle of Man", 'currencyname' => "Pounds" );
	$codes[ "INR" ] = array ( 'country' => "India", 'currencyname' => "Rupees" );
	$codes[ "IQD" ] = array ( 'country' => "Iraq", 'currencyname' => "Dinars" );
	$codes[ "IRR" ] = array ( 'country' => "Iran", 'currencyname' => "Rials" );
	$codes[ "ISK" ] = array ( 'country' => "Iceland", 'currencyname' => "Kronur" );
	$codes[ "JEP" ] = array ( 'country' => "Jersey", 'currencyname' => "Pounds" );
	$codes[ "JMD" ] = array ( 'country' => "Jamaica", 'currencyname' => "Dollars" );
	$codes[ "JOD" ] = array ( 'country' => "Jordan", 'currencyname' => "Dinars" );
	$codes[ "JPY" ] = array ( 'country' => "Japan", 'currencyname' => "Yen" );
	$codes[ "KES" ] = array ( 'country' => "Kenya", 'currencyname' => "Shillings" );
	$codes[ "KGS" ] = array ( 'country' => "Kyrgyzstan", 'currencyname' => "Soms" );
	$codes[ "KHR" ] = array ( 'country' => "Cambodia", 'currencyname' => "Riels" );
	$codes[ "KMF" ] = array ( 'country' => "Comoros", 'currencyname' => "Francs" );
	$codes[ "KPW" ] = array ( 'country' => "Korea (North)", 'currencyname' => "Won" );
	$codes[ "KRW" ] = array ( 'country' => "Korea (South)", 'currencyname' => "Won" );
	$codes[ "KWD" ] = array ( 'country' => "Kuwait", 'currencyname' => "Dinars" );
	$codes[ "KYD" ] = array ( 'country' => "Cayman Islands", 'currencyname' => "Dollars" );
	$codes[ "KZT" ] = array ( 'country' => "Kazakhstan", 'currencyname' => "Tenge" );
	$codes[ "LAK" ] = array ( 'country' => "Laos", 'currencyname' => "Kips" );
	$codes[ "LBP" ] = array ( 'country' => "Lebanon", 'currencyname' => "Pounds" );
	$codes[ "LKR" ] = array ( 'country' => "Sri Lanka", 'currencyname' => "Rupees" );
	$codes[ "LRD" ] = array ( 'country' => "Liberia", 'currencyname' => "Dollars" );
	$codes[ "LSL" ] = array ( 'country' => "Lesotho", 'currencyname' => "Maloti" );
	$codes[ "LTL" ] = array ( 'country' => "Lithuania", 'currencyname' => "Litai" );
	$codes[ "LVL" ] = array ( 'country' => "Latvia", 'currencyname' => "Lati" );
	$codes[ "LYD" ] = array ( 'country' => "Libya", 'currencyname' => "Dinars" );
	$codes[ "MAD" ] = array ( 'country' => "Morocco", 'currencyname' => "Dirhams" );
	$codes[ "MDL" ] = array ( 'country' => "Moldova", 'currencyname' => "Lei" );
	$codes[ "MGA" ] = array ( 'country' => "Madagascar", 'currencyname' => "Ariary" );
	$codes[ "MKD" ] = array ( 'country' => "Macedonia", 'currencyname' => "Denars" );
	$codes[ "MMK" ] = array ( 'country' => "Myanmar (Burma)", 'currencyname' => "Kyats" );
	$codes[ "MNT" ] = array ( 'country' => "Mongolia", 'currencyname' => "Tugriks" );
	$codes[ "MOP" ] = array ( 'country' => "Macau", 'currencyname' => "Patacas" );
	$codes[ "MRO" ] = array ( 'country' => "Mauritania", 'currencyname' => "Ouguiyas" );
	$codes[ "MTL" ] = array ( 'country' => "Malta", 'currencyname' => "Liri" );
	$codes[ "MUR" ] = array ( 'country' => "Mauritius", 'currencyname' => "Rupees" );
	$codes[ "MVR" ] = array ( 'country' => "Maldives (Maldive Islands)", 'currencyname' => "Rufiyaa" );
	$codes[ "MWK" ] = array ( 'country' => "Malawi", 'currencyname' => "Kwachas" );
	$codes[ "MXN" ] = array ( 'country' => "Mexico", 'currencyname' => "Pesos" );
	$codes[ "MYR" ] = array ( 'country' => "Malaysia", 'currencyname' => "Ringgits" );
	$codes[ "MZM" ] = array ( 'country' => "Mozambique", 'currencyname' => "Meticais" );
	$codes[ "NAD" ] = array ( 'country' => "Namibia", 'currencyname' => "Dollars" );
	$codes[ "NGN" ] = array ( 'country' => "Nigeria", 'currencyname' => "Nairas" );
	$codes[ "NIO" ] = array ( 'country' => "Nicaragua", 'currencyname' => "Cordobas" );
	$codes[ "NOK" ] = array ( 'country' => "Norway", 'currencyname' => "Krone" );
	$codes[ "NPR" ] = array ( 'country' => "Nepal", 'currencyname' => "Nepal Rupees" );
	$codes[ "NZD" ] = array ( 'country' => "New Zealand", 'currencyname' => "Dollars" );
	$codes[ "OMR" ] = array ( 'country' => "Oman", 'currencyname' => "Rials" );
	$codes[ "PAB" ] = array ( 'country' => "Panama", 'currencyname' => "Balboa" );
	$codes[ "PEN" ] = array ( 'country' => "Peru", 'currencyname' => "Nuevos Soles" );
	$codes[ "PGK" ] = array ( 'country' => "Papua New Guinea", 'currencyname' => "Kina" );
	$codes[ "PHP" ] = array ( 'country' => "Philippines", 'currencyname' => "Pesos" );
	$codes[ "PKR" ] = array ( 'country' => "Pakistan", 'currencyname' => "Rupees" );
	$codes[ "PLN" ] = array ( 'country' => "Poland", 'currencyname' => "Zlotych" );
	$codes[ "PYG" ] = array ( 'country' => "Paraguay", 'currencyname' => "Guarani" );
	$codes[ "QAR" ] = array ( 'country' => "Qatar", 'currencyname' => "Rials" );
	$codes[ "ROL" ] = array ( 'country' => "Romania", 'currencyname' => "Lei" );
	$codes[ "RON" ] = array ( 'country' => "Romania", 'currencyname' => "New Lei" );
	$codes[ "RUB" ] = array ( 'country' => "Russia", 'currencyname' => "Rubles" );
	$codes[ "RWF" ] = array ( 'country' => "Rwanda", 'currencyname' => "Rwanda Francs" );
	$codes[ "SAR" ] = array ( 'country' => "Saudi Arabia", 'currencyname' => "Riyals" );
	$codes[ "SBD" ] = array ( 'country' => "Solomon Islands", 'currencyname' => "Dollars" );
	$codes[ "SCR" ] = array ( 'country' => "Seychelles", 'currencyname' => "Rupees" );
	$codes[ "SDD" ] = array ( 'country' => "Sudan", 'currencyname' => "Dinars" );
	$codes[ "SEK" ] = array ( 'country' => "Sweden", 'currencyname' => "Kronor" );
	$codes[ "SGD" ] = array ( 'country' => "Singapore", 'currencyname' => "Dollars" );
	$codes[ "SHP" ] = array ( 'country' => "Saint Helena", 'currencyname' => "Pounds" );
	$codes[ "SIT" ] = array ( 'country' => "Slovenia", 'currencyname' => "Tolars" );
	$codes[ "SKK" ] = array ( 'country' => "Slovakia", 'currencyname' => "Koruny" );
	$codes[ "SLL" ] = array ( 'country' => "Sierra Leone", 'currencyname' => "Leones" );
	$codes[ "SOS" ] = array ( 'country' => "Somalia", 'currencyname' => "Shillings" );
	$codes[ "SPL" ] = array ( 'country' => "Seborga", 'currencyname' => "Luigini" );
	$codes[ "SRD" ] = array ( 'country' => "Suriname", 'currencyname' => "Dollars" );
	$codes[ "STD" ] = array ( 'country' => "São Tome and Principe", 'currencyname' => "Dobras" );
	$codes[ "SVC" ] = array ( 'country' => "El Salvador", 'currencyname' => "Colones" );
	$codes[ "SYP" ] = array ( 'country' => "Syria", 'currencyname' => "Pounds" );
	$codes[ "SZL" ] = array ( 'country' => "Swaziland", 'currencyname' => "Emalangeni" );
	$codes[ "THB" ] = array ( 'country' => "Thailand", 'currencyname' => "Baht" );
	$codes[ "TJS" ] = array ( 'country' => "Tajikistan", 'currencyname' => "Somoni" );
	$codes[ "TMM" ] = array ( 'country' => "Turkmenistan", 'currencyname' => "Manats" );
	$codes[ "TND" ] = array ( 'country' => "Tunisia", 'currencyname' => "Dinars" );
	$codes[ "TOP" ] = array ( 'country' => "Tonga", 'currencyname' => "Pa'anga" );
	$codes[ "TRY" ] = array ( 'country' => "Turkey", 'currencyname' => "New Lira" );
	$codes[ "TTD" ] = array ( 'country' => "Trinidad and Tobago", 'currencyname' => "Dollars" );
	$codes[ "TVD" ] = array ( 'country' => "Tuvalu", 'currencyname' => "Tuvalu Dollars" );
	$codes[ "TWD" ] = array ( 'country' => "Taiwan", 'currencyname' => "New Dollars" );
	$codes[ "TZS" ] = array ( 'country' => "Tanzania", 'currencyname' => "Shillings" );
	$codes[ "UAH" ] = array ( 'country' => "Ukraine", 'currencyname' => "Hryvnia" );
	$codes[ "UGX" ] = array ( 'country' => "Uganda", 'currencyname' => "Shillings" );
	$codes[ "USD" ] = array ( 'country' => "United States of America", 'currencyname' => "Dollars" );
	$codes[ "UYU" ] = array ( 'country' => "Uruguay", 'currencyname' => "Pesos" );
	$codes[ "UZS" ] = array ( 'country' => "Uzbekistan", 'currencyname' => "Sums" );
	$codes[ "VEB" ] = array ( 'country' => "Venezuela", 'currencyname' => "Bolivares" );
	$codes[ "VND" ] = array ( 'country' => "Viet Nam", 'currencyname' => "Dong" );
	$codes[ "VUV" ] = array ( 'country' => "Vanuatu", 'currencyname' => "Vatu" );
	$codes[ "WST" ] = array ( 'country' => "Samoa", 'currencyname' => "Tala" );
	$codes[ "XAF" ] = array ( 'country' => "Communauté Financière Africaine BEAC", 'currencyname' => "Francs" );
	$codes[ "XCD" ] = array ( 'country' => "East Caribbean", 'currencyname' => "Dollars" );
	$codes[ "XOF" ] = array ( 'country' => "Communauté Financière Africaine BCEAO", 'currencyname' => "Francs" );
	$codes[ "XPF" ] = array ( 'country' => "Comptoirs Français du Pacifique", 'currencyname' => "Francs" );
	$codes[ "YER" ] = array ( 'country' => "Yemen", 'currencyname' => "Rials" );
	$codes[ "ZAR" ] = array ( 'country' => "South Africa", 'currencyname' => "Rand" );
	$codes[ "ZMK" ] = array ( 'country' => "Zambia", 'currencyname' => "Kwacha" );
	$codes[ "ZWD" ] = array ( 'country' => "Zimbabwe", 'currencyname' => "Zimbabwe Dollars" );

	return $codes;
	}

/**
#
 * Generic or creation function. Pass a number of ids and the field you're searching on, will return ( `xyx`='1' OR `xyx`='2' OR`xyx`='3' ) etc.
#
 */
function genericOr( $idArray, $fieldToSearch, $idArrayisInteger = true )
	{
	$newArr = array ();
	foreach ( $idArray as $id )
		{
		$newArr[ ] = $id;
		}
	$idArray = $newArr;
	$txt     = " ( `" . $fieldToSearch . "`=";
	for ( $i = 0, $n = count( $idArray ); $i < $n; $i++ )
		{
		if ( $idArrayisInteger ) $id = (int) $idArray[ $i ];
		else
		$id = $idArray[ $i ];
		$txt .= " '$id' ";
		if ( $i < count( $idArray ) - 1 ) $txt .= " OR `" . $fieldToSearch . "`= ";
		}
	$txt .= " ) ";

	return $txt;
	}


/**
#
 * Returns the browser to the propertyadmin page after a save action
#
 */
function returnToPropertyConfig( $saveMessage = "" )
	{
	$mrConfig = getPropertySpecificSettings();
	if ( $mrConfig[ 'errorCheckingShowSQL' ] == "0" ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL ), $saveMessage );
	}

/**
#
 * Publish the user's property. Toggle action.
#
 */
function publishProperty()
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$MiniComponents->specificEvent( '02272', "publishprop" );
	}


//-----------------------------------------------------------------
//-E D I T	R O O M S	A N D	P R O P E R T Y	D E T A I L S
//-----------------------------------------------------------------

// Returns the editor area as a text string for inclusion in a template
function editorAreaText( $name, $content, $hiddenField, $width, $height, $col, $row )
	{
	return jomres_cmsspecific_getTextEditor( $name, $content, $hiddenField, $width, $height, $col, $row );
	}

/**
#
 * Triggers the search functionality, set's "$randomSearch" to true
#
 */
function jomresShowSearch()
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$MiniComponents->triggerEvent( '00030' ); //Search mini-comp
	}

/**
#
 * Creates data for displaying an image. If $retString is true it will return <img etc, if false then it will return the same text in an array variable for passing to patTemplate
#
 */
function makeFeatureImages( $image, $title, $description, $retString = false, $altLivesite = "" )
	{
	$mrConfig   = getPropertySpecificSettings();
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( !empty( $altLivesite ) ) set_showtime( 'live_site', $altLivesite );
	$title        = addslashes( $title );
	$description  = addslashes( $description );
	$defaultImage = "images/blank.png";
	if ( !isset( $image ) || empty( $image ) ) $image = $defaultImage;
	if ( !isset( $title ) || empty( $title ) ) $title = "Empty";
	if ( !isset( $description ) || empty( $description ) ) $description = "";
	$title       = htmlentities( $title );
	$description = htmlentities( $description );

	$captionpopup    = "";
	$descriptonpopup = "";

	$title       = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATUREBLURB_CAPTION' . strtoupper( $image ), stripslashes( $title ), false, false );
	$description = jr_gettext( '_JOMRES_CUSTOMTEXT_FEATUREBLURB_DESCRIPTION' . strtoupper( $image ), stripslashes( $description ), false, false );

	$title       = str_replace( "&#39;", "\&#39;", $title );
	$title       = str_replace( "'", "\'", $title );
	$description = str_replace( "&#39;", "\&#39;", $description );
	$description = str_replace( "'", "\'", $description );

	if ( $retString ) $r = '<img src="' . get_showtime( 'live_site' ) . '/' . $image . '" alt="" border="0" onmouseover="return overlib(\'' . $description . '\', CAPTION, \'' . $title . '\', BELOW, RIGHT);" onmouseout="return nd();" />';
	else
		{
		$r     = array ();
		$space = "";
		if ( $captionpopup != "" ) $space = "<br>";
		$r[ 'FEATURE' ] = $space . '<img src="' . get_showtime( 'live_site' ) . '/' . $image . '" alt="" border="0" onmouseover="return overlib(\'' . $description . '\', CAPTION, \'' . $title . '\', BELOW, RIGHT);" onmouseout="return nd();" />' . $captionpopup . ' ' . $descriptonpopup;
		}

	return $r;
	}


/**
#
 * Increments the pcounter table when a property clicked and sets a cookie to say that this user has clicked this property
#
 */
function propertyClicked( $p_uid )
	{
	//$sessionCookieName	= md5( 'site'.get_showtime('live_site'));
	$cookiename     = "jomresp$p_uid";
	$alreadyClicked = jomresGetParam( $_COOKIE, $cookiename, '0' );
	if ( !$alreadyClicked )
		{
		setcookie( $cookiename, '1', time() + 60 * 60 * 24 * 30 );
		$query = "INSERT INTO #__jomres_pcounter (count,p_uid) VALUES ('1', '".(int)$p_uid."') ON DUPLICATE KEY UPDATE count = count+1 ";

		if ( !doInsertSql( $query, "" ) )
			{
			echo "Mysql went byebyes";
			exit();
			}
		}
	}


/**
#
 * Makes a popup link
#
 */
function makePopupLink( $link, $text, $isLocalPage = true, $width = 550, $height = 500 )
	{
	$status = 'status=no,toolbar=yes,scrollbars=yes,titlebar=no,menubar=yes,resizable=yes,width=' . $width . ',height=' . $height . ',directories=no,location=no';
	$format = "";
	if ( defined( '_JOMRES_NEWJOOMLA' ) ) $format = '&tmpl='.get_showtime("tmplcomponent");

	if ( $jrConfig[ 'useSSLinBookingform' ] == 1 && $_REQUEST[ 'task' ] == "editGuest" )
		{
		set_showtime( 'live_site', str_replace( "http://", "https://", $link ) );
		}

	$thelink = "<a href=\"javascript:void window.open('" . $link . $format . "', 'win2', '" . $status . "');\" rel=\"nofollow\" title=\"\">" . $text . "</a>";

	$thelink = str_replace( "&amp;", "&", $thelink );
	$thelink = str_replace( "&", "&amp;", $thelink );

	return $thelink;
	}

/**
#
 * Calls the show availability function, which in turn triggers the show availability event trigger. Exists for historical reasons
#
 */
function showSingleRoomPropAvl( $property_uid )
	{
	$query    = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '" . (int) $property_uid . "' LIMIT 1";
	$roomList = doSelectSql( $query );
	foreach ( $roomList as $room )
		{
		$roomUid = $room->room_uid;
		}
	showAvailability( $roomUid, "", $property_uid, 12 );
	}


/**
#
 * Called by showSingleRoomPropAvl. Shows property availability calendars
#
 */
function showAvailability( $roomUid, $requestedDate = "", $property_uid, $showFullYear = 12, $room_avl_enquiry = false )
	{
	$MiniComponents                      = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$componentArgs                       = array ();
	$componentArgs[ 'roomUid' ]          = $roomUid;
	$componentArgs[ 'requestedDate' ]    = $requestedDate;
	$componentArgs[ 'property_uid' ]     = $property_uid;
	$componentArgs[ 'showFullYear' ]     = $showFullYear;
	$componentArgs[ 'room_avl_enquiry' ] = $room_avl_enquiry;
	$MiniComponents->triggerEvent( '0017', $componentArgs ); // Availability calendar
	}

/**
#
 * Triggers the property header event/mini-component
#
 */
function property_header( $property_uid )
	{
	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
	$MiniComponents->triggerEvent( '01070', array ( 'property_uid' => $property_uid ) ); // Call property header mini-component
	}

/**
#
 * Sends emails to admins
#
 */
function sendAdminEmail( $subject, $message, $send_post = false )
	{
	$jomresConfig_mailfrom = get_showtime( 'mailfrom' );
	$jomresConfig_fromname = get_showtime( 'fromname' );

	$m = "";
	if ( is_array( $message ) && count( $message ) > 0 )
		{
		foreach ( $message as $k => $v )
			{
			$m .= $k . ' - ' . $v . '\n';
			}
		$message = $m;
		}
	if ( is_object( $message ) )
		{
		$m       = print_r( $message );
		$message = $m;
		}

	if ( $send_post )
		{
		$message .= "\n\n\nPost details follow (may not be applicable to email) ";
		foreach ( $_POST as $key => $value )
			{
			$message .= "\n$key: $value";
			}
		}

	$admins = jomres_cmsspecific_getCMS_users_admin_getalladmins_ids( $id );
	foreach ( $admins AS $admin )
		{
		jomresMailer( $jomresConfig_mailfrom, $jomresConfig_fromname, $admin[ 'email' ], $subject, $message );
		}
	}


function makeJsGraphOutput( $graphLabels, $graphValues, $type = "hBar", $legend, $div = 'divGraph' )
	{
	$graphParams = '
	<script language="JavaScript"> <!--
	jomresJquery(document).ready(function() {createGraph("' . $graphLabels . '","' . $graphValues . '","' . $type . '","' . $legend . '","' . $div . '")});
	//--> </script>
	';

	return $graphParams;
	}

function getMonthName( $monthNo )
	{
	$monthNo = intval( $monthNo );

	return jr_gettext( '_JRPORTAL_MONTHS_LONG_' . $monthNo, '_JRPORTAL_MONTHS_LONG_' . $monthNo );
	}

function makeImageValid( $imageName = "" )
	{
	$image = str_replace( '+', '%20', $imageName );
	$image = str_replace( '%2F', '/', $image );

	return $image;
	}


function invoices_getalllineitems_forinvoice( $id )
	{
	$lineitems = array ();
	$query     = "SELECT * FROM #__jomresportal_lineitems WHERE `inv_id`=" . (int) $id;
	$result    = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$lineitems[ $r->id ][ 'id' ]                   = $r->id;
			$lineitems[ $r->id ][ 'name' ]                 = $r->name;
			$lineitems[ $r->id ][ 'description' ]          = $r->description;
			$lineitems[ $r->id ][ 'init_price' ]           = $r->init_price;
			$lineitems[ $r->id ][ 'init_qty' ]             = $r->init_qty;
			$lineitems[ $r->id ][ 'init_discount' ]        = $r->init_discount;
			$lineitems[ $r->id ][ 'init_total' ]           = $r->init_total;
			$lineitems[ $r->id ][ 'init_total_inclusive' ] = $r->init_total_inclusive;
			$lineitems[ $r->id ][ 'recur_price' ]          = $r->recur_price;
			$lineitems[ $r->id ][ 'recur_qty' ]            = $r->recur_qty;
			$lineitems[ $r->id ][ 'recur_discount' ]       = $r->recur_discount;
			$lineitems[ $r->id ][ 'recur_total' ]          = $r->recur_total;
			$lineitems[ $r->id ][ 'tax_code' ]             = $r->tax_code;
			$lineitems[ $r->id ][ 'tax_description' ]      = $r->tax_description;
			$lineitems[ $r->id ][ 'tax_rate' ]             = $r->tax_rate;
			$lineitems[ $r->id ][ 'inv_id' ]               = $r->inv_id;
			}
		}

	return $lineitems;
	}

function invoices_getalllineitems_forinvoice_ids( $ids = array () )
	{
	$lineitems = array ();
	if ( count( $ids ) == 0 ) return $lineitems;

	$gor    = genericOr( $ids, 'inv_id' );
	$query  = "SELECT * FROM #__jomresportal_lineitems WHERE " . $gor;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$lineitems[ $r->inv_id ][ $r->id ][ 'id' ]              = $r->id;
			$lineitems[ $r->inv_id ][ $r->id ][ 'name' ]            = $r->name;
			$lineitems[ $r->inv_id ][ $r->id ][ 'description' ]     = $r->description;
			$lineitems[ $r->inv_id ][ $r->id ][ 'init_price' ]      = $r->init_price;
			$lineitems[ $r->inv_id ][ $r->id ][ 'init_qty' ]        = $r->init_qty;
			$lineitems[ $r->inv_id ][ $r->id ][ 'init_discount' ]   = $r->init_discount;
			$lineitems[ $r->inv_id ][ $r->id ][ 'init_total' ]      = $r->init_total;
			$lineitems[ $r->inv_id ][ $r->id ][ 'recur_price' ]     = $r->recur_price;
			$lineitems[ $r->inv_id ][ $r->id ][ 'recur_qty' ]       = $r->recur_qty;
			$lineitems[ $r->inv_id ][ $r->id ][ 'recur_discount' ]  = $r->recur_discount;
			$lineitems[ $r->inv_id ][ $r->id ][ 'recur_total' ]     = $r->recur_total;
			$lineitems[ $r->inv_id ][ $r->id ][ 'tax_code' ]        = $r->tax_code;
			$lineitems[ $r->inv_id ][ $r->id ][ 'tax_description' ] = $r->tax_description;
			$lineitems[ $r->inv_id ][ $r->id ][ 'tax_rate' ]        = $r->tax_rate;
			$lineitems[ $r->inv_id ][ $r->id ][ 'inv_id' ]          = $r->inv_id;
			}
		}

	return $lineitems;
	}

function invoices_getallcommissioninvoices( $dec, $status = null )
	{
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = " WHERE `status` = " . (int) $status . " AND ";
	else
	$clause = " WHERE ";
	if ( $dec ) $clause .= "  is_commission = 1 ORDER BY raised_date DESC";
	$query = "SELECT * FROM #__jomresportal_invoices" . $clause;

	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}

function invoices_getallinvoices( $dec, $status = null )
	{
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = " WHERE `status` = " . (int) $status . " ";

	if ( $dec ) $clause .= " ORDER BY raised_date DESC";
	$query = "SELECT * FROM #__jomresportal_invoices" . $clause;
	//echo $query;exit;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'guest_id' ]         = $r->guest_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}

function invoices_getinvoicefor_contract_id( $contract_id = 0 )
	{
	if ( $contract_id == 0 ) return false;
	$invoice = array ();
	$clause  = "";
	$query   = "SELECT * FROM #__jomresportal_invoices WHERE `contract_id`=" . (int) $contract_id . " LIMIT 1";
	$result  = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoice[ 'id' ]               = $r->id;
			$invoice[ 'cms_user_id' ]      = $r->cms_user_id;
			$invoice[ 'status' ]           = $r->status;
			$invoice[ 'raised_date' ]      = $r->raised_date;
			$invoice[ 'due_date' ]         = $r->due_date;
			$invoice[ 'paid' ]             = $r->paid;
			$invoice[ 'subscription' ]     = $r->subscription;
			$invoice[ 'init_total' ]       = $r->init_total;
			$invoice[ 'recur_total' ]      = $r->recur_total;
			$invoice[ 'recur_frequency' ]  = $r->recur_frequency;
			$invoice[ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoice[ 'currencycode' ]     = $r->currencycode;
			$invoice[ 'property_uid' ]     = $r->property_uid;
			$invoice[ 'is_commission' ]    = $r->is_commission;
			$invoice[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoice;
	}

function invoices_getinvoicesfor_manager_allproperties( $status = 0, $property_uids = array () )
	{
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = " AND `status` = " . (int) $status . " ";
	$clause .= " ORDER BY raised_date DESC";
	$query  = "SELECT * FROM #__jomresportal_invoices WHERE " . genericOr( $property_uids, "property_uid" ) . " " . $clause;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}

function invoices_getinvoicesfor_juser( $juser = 0, $status = null )
	{
	if ( $juser == 0 ) return false;
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = " AND `status` = " . (int) $status . " ";
	$clause .= " ORDER BY raised_date DESC";
	$query  = "SELECT * FROM #__jomresportal_invoices WHERE `cms_user_id`='" . (int) $juser . "'" . $clause;
	$result = doSelectSql( $query );

	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}

function invoices_getinvoicesfor_jomresuserid_byproperty_uid( $mos_id = 0, $status = null, $property_uid = 0 )
	{
	if ( $property_uid == 0 ) return false;
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = "AND `status` = " . (int) $status . " ";
	$clause .= " ORDER BY raised_date DESC";
	$query  = "SELECT * FROM #__jomresportal_invoices WHERE `guest_id`='" . (int) $mos_id . "' AND property_uid = " . (int) $property_uid . " " . $clause;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}

function invoices_getinvoicesfor_juser_byproperty_uid( $juser = 0, $status = null, $property_uid = 0 )
	{
	if ( $property_uid == 0 ) return false;
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = "AND `status` = " . (int) $status . " ";
	$clause .= " ORDER BY raised_date DESC";
	$query  = "SELECT * FROM #__jomresportal_invoices WHERE `cms_user_id`='" . (int) $juser . "' AND property_uid = " . (int) $property_uid . " " . $clause;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;
			}
		}

	return $invoices;
	}


function invoices_getinvoicesfor_property_byproperty_uid( $status = null, $property_uid = 0 )
	{
	if ( $property_uid == 0 ) return false;
	$invoices = array ();
	$clause   = "";
	if ( isset( $status ) ) $clause = "AND `status` = " . (int) $status . " ";
	$clause .= " ORDER BY raised_date DESC";
	$query  = "SELECT * FROM #__jomresportal_invoices WHERE property_uid = " . (int) $property_uid . " " . $clause;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$invoices[ $r->id ][ 'id' ]               = $r->id;
			$invoices[ $r->id ][ 'cms_user_id' ]      = $r->cms_user_id;
			$invoices[ $r->id ][ 'status' ]           = $r->status;
			$invoices[ $r->id ][ 'raised_date' ]      = $r->raised_date;
			$invoices[ $r->id ][ 'due_date' ]         = $r->due_date;
			$invoices[ $r->id ][ 'paid' ]             = $r->paid;
			$invoices[ $r->id ][ 'subscription' ]     = $r->subscription;
			$invoices[ $r->id ][ 'init_total' ]       = $r->init_total;
			$invoices[ $r->id ][ 'recur_total' ]      = $r->recur_total;
			$invoices[ $r->id ][ 'recur_frequency' ]  = $r->recur_frequency;
			$invoices[ $r->id ][ 'recur_dayofmonth' ] = $r->recur_dayofmonth;
			$invoices[ $r->id ][ 'currencycode' ]     = $r->currencycode;
			$invoices[ $r->id ][ 'contract_id' ]      = $r->contract_id;
			$invoices[ $r->id ][ 'property_uid' ]     = $r->property_uid;
			$invoices[ $r->id ][ 'is_commission' ]    = $r->is_commission;
			$invoices[ $r->id ][ 'vat_will_be_charged' ] = $r->vat_will_be_charged;

			}
		}

	return $invoices;
	}



function invoices_makeInvoiceStatusDropdown( $selected = '0' )
	{
	$statusOptions  = array ();
	$statusDropdown = "";
	$statuses       = array ();
	$statuses[ 0 ]  = jr_gettext( "_JRPORTAL_INVOICES_STATUS_UNPAID", _JRPORTAL_INVOICES_STATUS_UNPAID );
	$statuses[ 1 ]  = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PAID", _JRPORTAL_INVOICES_STATUS_PAID );
	$statuses[ 2 ]  = jr_gettext( "_JRPORTAL_INVOICES_STATUS_CANCELLED", _JRPORTAL_INVOICES_STATUS_CANCELLED );
	$statuses[ 3 ]  = jr_gettext( "_JRPORTAL_INVOICES_STATUS_PENDING", _JRPORTAL_INVOICES_STATUS_PENDING );

	foreach ( $statuses as $key => $val )
		{
		$statusOptions[ ] = jomresHTML::makeOption( $key, $val );
		}
	$statusDropdown = jomresHTML::selectList( $statusOptions, 'status', 'class="inputbox" size="1"', 'value', 'text', $selected );

	return $statusDropdown;
	}

function subscribers_thisUserIsASubscriber( $id = 0 )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $id == 0 ) $id = $thisJRUser->id;
	$query  = "SELECT id FROM #__jomresportal_subscriptions WHERE cms_user_id =" . (int) $id . "";
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 ) return true;

	return false;
	}

function subscribers_unpublishNproperties( $numberOfPropertiesToUnpublish, $cms_user_id )
	{
	if ( $numberOfPropertiesToUnpublish > 0 && $cms_user_id > 0 )
		{
		$published_properties = subscribers_getManagersPublishedProperties( $cms_user_id );
		for ( $i = 0; $i < $numberOfPropertiesToUnpublish; $i++ )
			{
			$query  = "UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid = " . $published_properties[ $i ] . "";
			$result = doInsertSql( $query, "Unpublished by system" );
			}

		return true;
		}
	else
	return false;
	}


function subscribers_getManagersPublishedProperties( $cms_user_id )
	{
	$query                = "SELECT property_uid FROM #__jomres_managers_propertys_xref WHERE `manager_id` = '" . (int) $cms_user_id . "'";
	$managersProperties   = doSelectSql( $query );
	$mp                   = array ();
	$published_properties = array ();
	if ( count( $managersProperties ) > 0 )
		{
		foreach ( $managersProperties as $p )
			{
			$mp[ ] = (int) $p->property_uid;
			}
		}
	else
	return array ();
	$clause = "WHERE ";
	$clause .= genericOr( $mp, 'propertys_uid' ) . " AND published = 1";
	$query              = "SELECT propertys_uid FROM #__jomres_propertys " . $clause . " LIMIT " . count( $mp );
	$jomresPropertyList = doSelectSql( $query );
	if ( count( $jomresPropertyList ) > 0 )
		{
		foreach ( $jomresPropertyList as $p )
			{
			$published_properties[ ] = (int) $p->propertys_uid;
			}
		}

	return $published_properties;
	}

function subscribers_checkUserHasSubscriptionsToCreateNewProperty( $id = 0 )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $id == 0 ) $id = $thisJRUser->id;
	$allowedProperties  = subscribers_getAvailablePropertySlots( $id );
	$existingProperties = subscribers_getManagersPublishedProperties( $id );
	if ( $allowedProperties > count( $existingProperties ) ) return true;
	else
	return false;
	}

function subscribers_getAvailablePropertySlots( $id = 0 )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $id == 0 ) $id = $thisJRUser->id;
	$query = "SELECT property_limit FROM #__jomresportal_subscriptions WHERE cms_user_id ='" . (int) $id . "' AND `status` = 1";

	$result = doSelectSql( $query );

	$allowedProperties = 0;
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$c                 = $r->property_limit;
			$allowedProperties = $allowedProperties + $c;
			}
		}

	return $allowedProperties;
	}

function subscribers_getCurrentPropertiesNumbers( $id = 0 )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $id == 0 ) $id = $thisJRUser->id;
	$query              = "SELECT COUNT(`manager_id`)  FROM #__jomres_managers_propertys_xref WHERE manager_id ='" . (int) $id . "'";
	$existingProperties = doSelectSql( $query, 1 );

	if ( $existingProperties ) return $existingProperties;
	else
	return 0;
	}

function subscribers_getCurrentSubscriptionsForJosId( $id = 0 )
	{
	$users_subscriptions = array ();
	$thisJRUser          = jomres_singleton_abstract::getInstance( 'jr_user' );
	if ( $id == 0 ) $id = $thisJRUser->id;
	$query  = "SELECT * FROM #__jomresportal_subscriptions WHERE cms_user_id =" . (int) $id;
	$result = doSelectSql( $query );
	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$users_subscriptions[ $r->id ][ 'id' ]                      = (int) $r->id;
			$users_subscriptions[ $r->id ][ 'cms_user_id' ]             = (int) $r->cms_user_id;
			$users_subscriptions[ $r->id ][ 'gateway_subscription_id' ] = (string) $r->gateway_subscription_id;
			$users_subscriptions[ $r->id ][ 'package_id' ]              = (string) $r->package_id;
			$users_subscriptions[ $r->id ][ 'name' ]                    = (string) $r->name;
			$users_subscriptions[ $r->id ][ 'description' ]             = (string) $r->description;
			$users_subscriptions[ $r->id ][ 'frequency' ]               = (string) $r->frequency;
			$users_subscriptions[ $r->id ][ 'trial_period' ]            = (string) $r->trial_period;
			$users_subscriptions[ $r->id ][ 'trial_amount' ]            = (string) $r->trial_amount;
			$users_subscriptions[ $r->id ][ 'full_amount' ]             = (string) $r->full_amount;
			$users_subscriptions[ $r->id ][ 'rooms_limit' ]             = (string) $r->rooms_limit;
			$users_subscriptions[ $r->id ][ 'property_limit' ]          = (string) $r->property_limit;
			$users_subscriptions[ $r->id ][ 'status' ]                  = (string) $r->status;
			$users_subscriptions[ $r->id ][ 'raised_date' ]             = (string) $r->raised_date;
			}
		}

	return $users_subscriptions;
	}

function subscribers_getSubscriberDetailsForJosId( $id )
	{
	$user = array ();
	if ( $id > 0 )
		{
		$query  = "SELECT
			`id`,`cms_user_id`,`firstname`,`surname`,`address`,`country`,`postcode`
			FROM #__jomresportal_subscribers WHERE `cms_user_id`=" . (int) $id . " LIMIT 1";
		$result = doSelectSql( $query );
		if ( $result && count( $result ) == 1 )
			{
			foreach ( $result as $r )
				{
				$user[ 'id' ]          = (int) $r->id;
				$user[ 'cms_user_id' ] = (int) $r->cms_user_id;
				$user[ 'firstname' ]   = (string) $r->firstname;
				$user[ 'surname' ]     = (string) $r->surname;
				$user[ 'address' ]     = (string) $r->address;
				$user[ 'country' ]     = (string) $r->country;
				$user[ 'postcode' ]    = (string) $r->postcode;
				}

			return $user;
			}
		else
		return false;
		}
	else
	return false;
	}

function subscriptions_check_for_freebie_package( $all_packages = array () )
	{
	if ( count( $all_packages ) == 0 ) $all_packages = subscriptions_packages_getallpackages();
	if ( count( $all_packages ) == 0 ) return false;
	foreach ( $all_packages as $package )
		{
		if ( (float) $package[ 'trial_amount' ] == 0.00 && (float) $package[ 'full_amount' ] == 0.00 ) return $package[ 'id' ];
		}

	return false;
	}

function subscriptions_packages_getallpackages()
	{
	$packages = array ();
	$query    = "SELECT * FROM #__jomresportal_subscriptions_packages";
	$result   = doSelectSql( $query );

	if ( count( $result ) > 0 )
		{
		foreach ( $result as $r )
			{
			$packages[ $r->id ][ 'id' ]             = $r->id;
			$packages[ $r->id ][ 'name' ]           = $r->name;
			$packages[ $r->id ][ 'description' ]    = $r->description;
			$packages[ $r->id ][ 'published' ]      = $r->published;
			$packages[ $r->id ][ 'frequency' ]      = $r->frequency;
			$packages[ $r->id ][ 'trial_period' ]   = $r->trial_period;
			$packages[ $r->id ][ 'trial_amount' ]   = $r->trial_amount;
			$packages[ $r->id ][ 'full_amount' ]    = $r->full_amount;
			$packages[ $r->id ][ 'rooms_limit' ]    = $r->rooms_limit;
			$packages[ $r->id ][ 'property_limit' ] = $r->property_limit;
			$packages[ $r->id ][ 'tax_code_id' ]    = $r->tax_code_id;
			}
		}

	return $packages;
	}

function subscriptions_packages_makefrequencyDropdown( $selected = '1' )
	{
	$frequencyOptions  = array ();
	$frequencyDropdown = "";
	$frequencies       = array ( "M" => "M", "Q" => "Q", "B" => "B", "A" => "A" );
	if ( count( $frequencies > 0 ) )
		{
		foreach ( $frequencies as $k => $v )
			{
			$frequencyOptions[ ] = jomresHTML::makeOption( $k, $v );
			}
		$frequencyDropdown = jomresHTML::selectList( $frequencyOptions, 'frequency', 'class="inputbox" size="1"', 'value', 'text', $selected );
		}

	return $frequencyDropdown;
	}

function subscriptions_packages_maketrialperiodDropdown( $selected = '0' )
	{
	$periodOptions  = array ();
	$periodDropdown = "";
	$periods        = array ( "0" => "", "1" => "1", "2" => "2", "3" => "3" );
	if ( count( $periods > 0 ) )
		{
		foreach ( $periods as $k => $v )
			{
			$periodOptions[ ] = jomresHTML::makeOption( $k, $v );
			}
		$periodDropdown = jomresHTML::selectList( $periodOptions, 'trial_period', 'class="inputbox" size="1"', 'value', 'text', $selected );
		}

	return $periodDropdown;
	}

function subscriptions_packages_makepropertylimitDropdown( $selected = 0 )
	{
	$property_limitDropdown = jomresHTML::integerSelectList( 1, 1000, 1, 'property_limit', 'size="1" class="inputbox"', $selected );

	return $property_limitDropdown;
	}

function subscriptions_packages_makeroomslimitDropdown( $selected = 0 )
	{
	$rooms_limitDropdown = jomresHTML::integerSelectList( 1, 12, 1, 'rooms_limit', 'size="1" class="inputbox"', $selected );

	return $rooms_limitDropdown;
	}


function taxrates_getalltaxrates()
	{
	$rates = get_showtime( 'all_tax_rates' );
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$all_tax_rates=$c->retrieve('all_tax_rates');
	
	if ( is_null( $rates ) )
		{
		$rates  = array ();
		if (true===is_array($all_tax_rates))
			{
			$rates=$all_tax_rates;
			}
		else
			{
			$query  = "SELECT id,code,description,rate FROM #__jomresportal_taxrates";
			$result = doSelectSql( $query );
			if ( count( $result ) > 0 )
				{
				foreach ( $result as $r )
					{
					$rates[ $r->id ][ 'id' ]          = $r->id;
					$rates[ $r->id ][ 'code' ]        = $r->code;
					$rates[ $r->id ][ 'description' ] = $r->description;
					$rates[ $r->id ][ 'rate' ]        = $r->rate;
					}
				}
			$c->store('all_tax_rates',$rates);
			}
		set_showtime( 'all_tax_rates', $rates );
		}

	return $rates;
	}

function taxrates_makerateDropdown( $rates = array (), $selected = '0', $name = 'taxrate' )
	{
	$ratesOptions  = array ();
	$ratesDropdown = "";

	if ( count( $rates ) < 1 ) $rates = taxrates_getalltaxrates();

	//$ratesOptions[]=jomresHTML::makeOption( 0, '' ); // This would allow a blank option, i.e. allow users to set no tax rate. As, nowadays, internally the booking system NEEDS to know the tax rate when calculating the final price, we can't allow users to select a blank option any more.

	if ( count( $rates > 0 ) )
		{
		foreach ( $rates as $r )
			{
			$ratesOptions[ ] = jomresHTML::makeOption( $r[ 'id' ], $r[ 'code' ] . " " . $r[ 'description' ] );
			}
		$ratesDropdown = jomresHTML::selectList( $ratesOptions, $name, 'class="inputbox" size="1"', 'value', 'text', $selected );
		}

	return $ratesDropdown;
	}


function parseFloat( $ptString )
	{
	if ( strlen( $ptString ) == 0 )
		{
		return false;
		}

	$pString = str_replace( " ", "", $ptString );

	if ( substr_count( $pString, "," ) > 1 ) $pString = str_replace( ",", "", $pString );

	if ( substr_count( $pString, "." ) > 1 ) $pString = str_replace( ".", "", $pString );

	$pregResult = array ();

	$commaset = strpos( $pString, ',' );
	if ( $commaset === false )
		{
		$commaset = -1;
		}

	$pointset = strpos( $pString, '.' );
	if ( $pointset === false )
		{
		$pointset = -1;
		}

	$pregResultA = array ();
	$pregResultB = array ();

	if ( $pointset < $commaset )
		{
		preg_match( '#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#', $pString, $pregResultA );
		}
	preg_match( '#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#', $pString, $pregResultB );
	if ( ( isset( $pregResultA[ 0 ] ) && ( !isset( $pregResultB[ 0 ] ) || strstr( $preResultA[ 0 ], $pregResultB[ 0 ] ) == 0 || !$pointset ) ) )
		{
		$numberString = $pregResultA[ 0 ];
		$numberString = str_replace( '.', '', $numberString );
		$numberString = str_replace( ',', '.', $numberString );
		}
	elseif ( isset( $pregResultB[ 0 ] ) && ( !isset( $pregResultA[ 0 ] ) || strstr( $pregResultB[ 0 ], $preResultA[ 0 ] ) == 0 || !$commaset ) )
		{
		$numberString = $pregResultB[ 0 ];
		$numberString = str_replace( ',', '', $numberString );
		}
	else
		{
		return false;
		}
	$result = (float) $numberString;

	return $result;
	}


function scandir_getdirectories( $path )
	{
	$data = array ();
	foreach ( scandir( $path ) as $dir )
		{
		if ( is_dir( $path . $dir ) )
			{
			if ( $dir != "." && $dir != ".." )
				{
				$data[ ] = $dir;
				}
			}
		}

	return $data;
	}

function scandir_getfiles( $path, $extension = false )
	{
	$data = array ();
	foreach ( scandir( $path ) as $file )
		{
		if ( is_file( $path . JRDS . $file ) )
			{
			if ( !$extension ) $data[ ] = $file;
			else
				{
				$filename = strtolower( $file );
				$exts     = explode( ".", $filename );
				$n        = count( $exts ) - 1;
				$exts     = $exts[ $n ];
				if ( $exts == $extension ) $data[ ] = $file;
				}
			}
		}

	return $data;
	}

// Credit : http://www.php.net/manual/en/function.scandir.php#109140
function scandir_getfiles_recursive( $directory, $recursive = true, $listDirs = false, $listFiles = true, $exclude = '' )
	{
	$arrayItems    = array ();
	$skipByExclude = false;
	$handle        = opendir( $directory );
	if ( $handle )
		{
		while ( false !== ( $file = readdir( $handle ) ) )
			{
			preg_match( "/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu", $file, $skip );
			if ( $exclude )
				{
				preg_match( $exclude, $file, $skipByExclude );
				}
			if ( !$skip && !$skipByExclude )
				{
				if ( is_dir( $directory . DIRECTORY_SEPARATOR . $file ) )
					{
					if ( $recursive )
						{
						$arrayItems = array_merge( $arrayItems, scandir_getfiles_recursive( $directory . DIRECTORY_SEPARATOR . $file, $recursive, $listDirs, $listFiles, $exclude ) );
						}
					if ( $listDirs )
						{
						$file          = $directory . DIRECTORY_SEPARATOR . $file;
						$arrayItems[ ] = $file;
						}
					}
				else
					{
					if ( $listFiles )
						{
						$file          = $directory . DIRECTORY_SEPARATOR . $file;
						$arrayItems[ ] = $file;
						}
					}
				}
			}
		closedir( $handle );
		}

	return $arrayItems;
	}

function this_cms_is_joomla()
	{
	if ( 
		_JOMRES_DETECTED_CMS != "joomla15" && 
		_JOMRES_DETECTED_CMS != "joomla16" && 
		_JOMRES_DETECTED_CMS != "joomla17" && 
		_JOMRES_DETECTED_CMS != "joomla25" && 
		_JOMRES_DETECTED_CMS != "joomla30" && 
		_JOMRES_DETECTED_CMS != "joomla31" && 
		_JOMRES_DETECTED_CMS != "joomla32"  && 
		_JOMRES_DETECTED_CMS != "joomla33"
		) return false;

	return true;
	}




//----------------------------------------
//-T E X T	M O D I F I C A T I O N	 ----
//----------------------------------------


function editCustomText()
	{
	$siteConfig     = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig       = $siteConfig->get();
	$theConstant    = jomresGetParam( $_REQUEST, 'theConstant', '' );
	$defaultText    = jomresGetParam( $_REQUEST, 'defaultText', '', _MOS_ALLOWHTML );
	$property_uid   = (int) getDefaultProperty();
	$query          = "SELECT customtext FROM #__jomres_custom_text WHERE constant = '$theConstant' and property_uid = '0' AND language = '" . get_showtime( 'lang' ) . "'";
	$customTextList = doSelectSql( $query );
	$theText        = false;
	if ( count( $customTextList ) )
		{
		foreach ( $customTextList as $text )
			{
			$theText = stripslashes( $text->customtext );
			}
		}
	$query    = "SELECT customtext FROM #__jomres_custom_text WHERE constant = '$theConstant' and property_uid = '" . (int) $property_uid . "' AND language = '" . get_showtime( 'lang' ) . "'";
	$textList = doSelectSql( $query );
	if ( count( $textList ) == 1 )
		{
		foreach ( $textList as $text )
			{
			$theText = stripslashes( $text->customtext );
			}
		}
	if ( !$theText ) $theText = urldecode( $defaultText );

	if ( strlen( $theText ) == 0 ) $theText = stripslashes( constant( $theConstant ) );
	$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
	$jrtb   = $jrtbar->startTable();
	$jrtb .= $jrtbar->toolbarItem( 'cancel', 'javascript:window.close();', '' );
	if ( $jrConfig[ 'allowHTMLeditor' ] != "2" && $jrConfig[ 'allowHTMLeditor' ] != "3" ) 
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'saveCustomText' );
	$jrtb .= $jrtbar->endTable();
	$output[ 'JOMRESTOOLBAR' ]     = $jrtb;
	$output[ 'MOSCONFIGLIVESITE' ] = get_showtime( 'live_site' );
	$output[ 'HCURRENTTEXT' ]      = jr_gettext( "_JOMRES_COM_A_EDITING_CURRENTTEXT", _JOMRES_COM_A_EDITING_CURRENTTEXT );
	$output[ 'HNEWTEXT' ]          = jr_gettext( "_JOMRES_COM_A_EDITING_NEWTEXT", _JOMRES_COM_A_EDITING_NEWTEXT );
	$output[ 'PROPERTYUID' ]       = $property_uid;
	$output[ 'THECONSTANT' ]       = $theConstant;
	$output[ 'CURRENTTEXT' ]       = $theText;
	if ( $jrConfig[ 'allowHTMLeditor' ] == "1" || $jrConfig[ 'allowHTMLeditor' ] == "2" || $jrConfig[ 'allowHTMLeditor' ] == "3" )
		{
		if ( $jrConfig[ 'allowHTMLeditor' ] == "1" )
			{
			$width  = "450";
			$height = "250";
			$col    = "20";
			$row    = "10";
			$tmpTxt = editorAreaText( 'newtext', stripslashes( $theText ), 'newtext', $width, $height, $col, $row );
			}
		if ( $jrConfig[ 'allowHTMLeditor' ] == "2" || $jrConfig[ 'allowHTMLeditor' ] == "3" )
			{
			$tmpTxt = flashArea( 'newtext', stripslashes( $theText ) );
			}
		}
	else
		{
		$tmpTxt = '<textarea class="inputbox" cols="40" rows="6" name="newtext">' . $theText . '</textarea>';
		}

	$output[ 'NEWTEXT' ]     = $tmpTxt;

	$pageoutput[ ] = $output;

	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
	$tmpl->readTemplatesFromInput( 'edit_custom_text.html' );
	$tmpl->addRows( 'pageoutput', $pageoutput );
	$tmpl->displayParsedTemplate();
	}

function saveCustomText()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();
	$property_uid = (int) getDefaultProperty();
	if ( $jrConfig[ 'allowHTMLeditor' ] == "1" )
		{
		$customText  = jomresGetParam( $_POST, 'newtext', "", _MOS_ALLOWHTML );
		$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
		}
	else
		{
		$customText  = jomresGetParam( $_POST, 'newtext', '', 'string' );
		$theConstant = jomresGetParam( $_POST, 'theConstant', '' );
		}
	// Not currently used, but put into place if I decide that people are translating Yes to No in error too often
	//if ($theConstant == "_JOMRES_COM_MR_YES" || $theConstant == "_JOMRES_COM_MR_NO")
	//	return;
	$result = updateCustomText( $theConstant, $customText, true, $property_uid );
	if ( $result )
		{
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'save_custom_text.html' );
		$tmpl->displayParsedTemplate();
		}
	else
	echo "Error, no data to save";
	}

function updateCustomText( $theConstant, $theValue, $audit = true, $property_uid = null )
	{
	$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );

	$jrConfig = $siteConfig->get();
	$testStr  = trim( strip_tags_except( $theValue ) );
	$crsEtc   = array ( "\t", "\n", "\r" );
	$testStr  = str_replace( $crsEtc, "", $testStr );
	if ( 
		strlen( $testStr ) == 0 && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT" && 
		$theConstant != "_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS" &&
		$theConstant != "_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE" &&
		$theConstant != "_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION" &&
		$theConstant != "_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS"
		)
			{
			return false;
			}
	if ( !isset( $property_uid ) )
		{
		if ( $jrConfig[ 'editingModeAffectsAllProperties' ] == "1" && $thisJRUser->superPropertyManager == true ) 
			$property_uid = 0;
		else
			$property_uid = (int) getDefaultProperty();
		}
	//$theValue=htmlentities($theValue);
	$query    = "SELECT customtext FROM #__jomres_custom_text WHERE constant = '" . $theConstant . "' and property_uid = '" . (int) $property_uid . "' AND language = '" . get_showtime( 'lang' ) . "'";
	$textList = doSelectSql( $query );
	if ( strlen( $theValue ) == 0 )
		{
		$query = "DELETE FROM	#__jomres_custom_text WHERE constant = '" . $theConstant . "' AND property_uid = '" . (int) $property_uid . "' AND language = '" . get_showtime( 'lang' ) . "'";
		}
	else
		{
		if ( count( $textList ) < 1 ) 
			$query = "INSERT INTO #__jomres_custom_text (`constant`,`customtext`,`property_uid`,`language`) VALUES ('" . $theConstant . "','" . $theValue . "','" . (int) $property_uid . "','" . get_showtime( 'lang' ) . "')";
		else
			$query = "UPDATE #__jomres_custom_text SET `customtext`='" . $theValue . "' WHERE constant = '" . $theConstant . "' AND property_uid = '" . (int) $property_uid . "' AND language = '" . get_showtime( 'lang' ) . "'";
		}
	//echo $query;
	if ( $audit ) 
		$audit = jr_gettext( "_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT", _JOMRES_MR_AUDIT_UPDATECUSTOMTEXT );

	doInsertSql( $query, $audit );

	//$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '".$theConstant."' and property_uid = '".(int)$property_uid."' AND language = '".get_showtime('lang')."'";
	//echo doSelectSql($query,1);
	
	$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
	$c->eraseAll();
	
	return true;
	}


function jomresGetDomain()
	{
	$thisSvrName = $_SERVER[ 'SERVER_NAME' ];
	$dmn         = str_replace( "http://", "", $thisSvrName );

	//$domain=str_replace("www.","",$dmn);
	//echo "<H2>Found domain".$domain."</H2>";
	return strtolower( $dmn );
	}

function parseConfiguration()
	{
	ob_start();
	phpinfo( INFO_CONFIGURATION );
	$s = ob_get_contents();
	ob_end_clean();
	$s        = strip_tags( $s, '<h2><th><td>' );
	$s        = preg_replace( '/<th[^>]*>([^<]+)<\/th>/', "<info>\\1</info>", $s );
	$s        = preg_replace( '/<td[^>]*>([^<]+)<\/td>/', "<info>\\1</info>", $s );
	$vTmp     = preg_split( '/(<h2>[^<]+<\/h2>)/', $s, -1, PREG_SPLIT_DELIM_CAPTURE );
	$vModules = array ();
	for ( $i = 1; $i < count( $vTmp ); $i++ )
		{
		if ( preg_match( '/<h2>([^<]+)<\/h2>/', $vTmp[ $i ], $vMat ) )
			{
			$vName = trim( $vMat[ 1 ] );
			$vTmp2 = explode( "\n", $vTmp[ $i + 1 ] );
			foreach ( $vTmp2 AS $vOne )
				{
				$vPat  = '<info>([^<]+)<\/info>';
				$vPat3 = "/$vPat\s*$vPat\s*$vPat/";
				$vPat2 = "/$vPat\s*$vPat/";
				if ( preg_match( $vPat3, $vOne, $vMat ) )
					{ // 3cols
					$vModules[ $vName ][ trim( $vMat[ 1 ] ) ] = array ( trim( $vMat[ 2 ] ), trim( $vMat[ 3 ] ) );
					}
				elseif ( preg_match( $vPat2, $vOne, $vMat ) )
					{ // 2cols
					$vModules[ $vName ][ trim( $vMat[ 1 ] ) ] = trim( $vMat[ 2 ] );
					}
				}
			}
		}

	return $vModules;
	}


function createNewAPIKey()
	{
	$apikey      = generateJomresRandomString();
	$keeplooking = true;
	while ( $keeplooking ):
		$query = "SELECT propertys_uid FROM #__jomres_propertys WHERE apikey = '" . $apikey . "' LIMIT 1";
		$plist = doSelectSql( $query );
		$query = "SELECT manager_uid FROM #__jomres_managers WHERE apikey = '" . $apikey . "' LIMIT 1";
		$clist = doSelectSql( $query );
		if ( count( $plist ) == 0 && count( $clist ) == 0 ) $keeplooking = false;
		if ( $keeplooking ) $apikey = generateJomresRandomString();
	endwhile;

	return $apikey;
	}

function generateJomresRandomString( $length = 50 )
	{
	$str = "";
	// define possible characters
	//$possible = "0123456789bcdfghjkmnpqrstvwxyz";
	$possible = "abcdfghijklmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYZ";
	// set up a counter
	$i = 0;
	// add random characters to $str until $length is reached
	while ( $i < $length )
		{
		// pick a random character from the possible ones
		$char = substr( $possible, mt_rand( 0, strlen( $possible ) - 1 ), 1 );
		$str .= $char;
		$i++;
		}

	return $str;
	}


/**
#
 * Constructs the mrConfig data when passed a property uid. $mrConfig is read in first to set up mrConfig in the event that property settings haven't been configured previously (eg during an import)
#
 */
function getSiteSettings()
	{
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	return $jrConfig;
	}


/**
#
 * Alternative function for gregoriantojd
#
 */
if ( !function_exists( 'gregoriantojd' ) )
	{
	function gregoriantojd( $m, $d, $y )
		{
		$y = $m == 1 || $m == 2 ? --$y : $y;
		$m = $m == 1 || $m == 2 ? $m + 12 : $m;
		$a = intval( $y / 100 );
		$b = intval( $a / 4 );
		$c = 2 - $a + $b;
		$e = intval( 365.25 * ( $y + 4716 ) );
		$f = intval( 30.6001 * ( $m + 1 ) );

		return $c + $d + $e + $f - 1524.5 + 0.5;
		}
	}


/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 */
function checkUserIsManager()
	{
	$thisJRUser    = jomres_singleton_abstract::getInstance( 'jr_user' );
	$userIsManager = $thisJRUser->userIsManager;

	return $userIsManager;
	}

function getDefaultProperty()
	{
	$thisJRUser      = jomres_singleton_abstract::getInstance( 'jr_user' );
	$defaultProperty = $thisJRUser->currentproperty;

	return (int) $defaultProperty;
	}

function jomresURL( $link, $ssl = 2 )
	{
	$link = str_replace( "&amp;", '&', $link );
	
	$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
	$jrConfig   = $siteConfig->get();

	if ( !$jrConfig[ 'isInIframe' ] )
		{
		$link = jomres_cmsspecific_makeSEF_URL( $link );
		}
	return $link;
	}


class dummy_params_class
	{
	function get()
		{
		$a = 0;
		}
	}

/**
#
 * Returns the guest details from the tmpguests session data
#
 */
function getbookingguestdata()
	{
	$tmpBookingHandler = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
	$userDeets         = $tmpBookingHandler->getGuestData();

	return $userDeets;
	}

/*
function jomres_search_dir($path, $pattern)
	{
	global $jomres_dir_contents;
	$jomres_dir_contents = array();
	$path = rtrim(str_replace("\\",JRDS, $path), JRDS) . JRDS;
	$matches = Array();
	$entries = Array();
	$dir = dir($path);
	while (false !== ($entry = $dir->read()))
		{
		$entries[] = $entry;
		}
	$dir->close();
	foreach ($entries as $entry)
		{
		$fullname = $path . $entry;
		if ($entry != '.' && $entry != '..' && $entry != ".svn" && is_dir($fullname))
			{
			jomres_sdir($fullname, $pattern, $callback);
			}
		else if (is_file($fullname) && stristr($entry,$pattern ))
			{
			$jomres_dir_contents[] = $fullname;
			}
		}
	return $jomres_dir_contents;
	}
 */

// This function is used by jomresGetParam and is called after a parameter is called (typically an input string) has been sanitised. It allows us to reconvert some code, such as &lt;br/&gt; back to <br/>
// The string will already have been cleaned by filter var sanitize string.
/* function jomres_reconvertString($clean)
	{
	$clean = str_replace("&lt;br/&gt;", "<br>", $clean);
	$clean = str_replace("&#60;br /&#62;", "<br />", $clean);
	$clean = str_replace("&#60;p&#62;", "<p>", $clean);
	$clean = str_replace("&#60;/p&#62;", "</p>", $clean);
	$clean = str_replace(" & "," &amp; " , $clean);


	//var_dump($clean);
	return $clean;
	}
 */


/**
#
 *Tests to see if an email address is valid. Includes tests of the A and MX records.
#
 */
/* function jomres_check_email_address($email)
	{
	return true;
	} */

/* Depreciated
function jomres_check_email_address($email)
	{

	// Are we on windows? If so we can try to give our win user their own checkndsrr function. The exec might cause problems depending on how wamp/xamp/jsas is set up, but there's no harm in trying
	// http://uk2.php.net/manual/en/function.checkdnsrr.php#75158
	if(!function_exists('checkdnsrr'))
		{
		function checkdnsrr($hostName, $recType = '')
			{
			if(!empty($hostName))
				{
				if( $recType == '' ) $recType = "MX";
				@exec("nslookup -type=$recType $hostName", $result);
				// check each line to find the one that starts with the host name. If it exists then the function succeeded.
				foreach ($result as $line)
					{
					if(eregi("^$hostName",$line))
						{
						return true;
						}
					}
				// otherwise there was no mail handler for the domain
				return false;
				}
			return false;
			}
		}


	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
		{
		// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
		return false;
		}

	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++)
		{
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
			{
			return false;
			}
		}

	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1]))
		{ // Check if domain is IP. If not, it should be valid domain name
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2)
			{
			return false; // Not enough parts to domain
			}
		for ($i = 0; $i < sizeof($domain_array); $i++)
			{
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
				{
				return false;
				}
			}
		}
		//getmxrr($domain,$mxrecords)
	// DNS check of MX of the specified domainname
	if( !checkdnsrr($email_array[1], "MX") )
		{
		if( !checkdnsrr($email_array[1], "A"))
			{
			return false;
			}
		}
	return true;
	} */


/* function jomres_makeColourPickerInput($setting,$value)
	{
	$txt = '
		<input class="inputbox" id="cfg_'.$setting.'" name="cfg_'.$setting.'" size="7" value="'.$value.'" onChange="relateColor(\''.$setting.'\', this.value);">
				<a href="javascript:pickColor(\''.$setting.'\');"
				id="'.$setting.'" style="border: 1px solid '.$value.'; background:'.$value.'; font-family:Verdana; font-size:16px; text-decoration: none;">
				&nbsp;&nbsp;&nbsp;</a>';
	return $txt;
	}
 */

/**
#
 * depreciated
#
 */
/* function ValidateMail($Email) {
	$rBool=FALSE;
	if(preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $Email)){
		$rBool=TRUE;
	}
	return $rBool;
} // end of function */


/**
#
 * Generates the javascript used to update the departure date to 'whatever' date after arrival date. Shares the same function name as that used when creating the input, so that the basic script can be reused on the same page
#
 */

/*
function showArrivaldateJS($dformat,$javascriptFunctionName,$randomID)
	{
	if (isset($_REQUEST['dataonly']))
		return;
	global $jomresSearchFormname;
	if (isset($jomresSearchFormname) && !empty($jomresSearchFormname) )
		$formname=$jomresSearchFormname;
	else
		$formname="bookingForm";
	?>
	<script language="JavaScript" type="text/javascript">
		function <?php echo $javascriptFunctionName;?>(arrivalDate,thisform){
		var dformat="<?php echo trim($dformat); ?>"
		var newday=0
		var day=0
		var mon=0
		var year=0
		if (dformat=="%d/%m/%Y"){
			dateArray=arrivalDate.split("/")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
		if (dformat=="%Y/%m/%d"){
			dateArray=arrivalDate.split("/")
			day=dateArray[2]
			mon=dateArray[1]
			year=dateArray[0]
			}
		if (dformat=="%m/%d/%Y"){
			dateArray=arrivalDate.split("/")
			day=dateArray[1]
			mon=dateArray[0]
			year=dateArray[2]
			}
		if (dformat=="%d-%m-%Y"){
			dateArray=arrivalDate.split("-")
			day=dateArray[0]
			mon=dateArray[1]
			year=dateArray[2]
			}
		if (dformat=="%Y-%m-%d"){
			dateArray=arrivalDate.split("-")
			day=dateArray[2]
			mon=dateArray[1]
			year=dateArray[0]
			}
		if (dformat=="%m-%d-%Y"){
			dateArray=arrivalDate.split("-")
				day=dateArray[1]
			mon=dateArray[0]
			year=dateArray[2]
			}

		var d = new Date(year,mon-1,day); with (d) setDate(getDate()+1)
		sday=String(d.getDate());
		smonth=String(d.getMonth()+1);
		if (sday.length == 1)
			fday="0"+sday;
		else
			fday=sday;
		if (smonth.length == 1)
			fmonth="0"+smonth;
		else
			fmonth=smonth;
		if (dformat=="%d/%m/%Y"){
			dd=fday+"/"+fmonth+"/"+String(d.getFullYear())
			}
		if (dformat=="%Y/%m/%d"){
			dd=String(d.getFullYear())+"/"+fmonth+"/"+fday
			}
		if (dformat=="%m/%d/%Y"){
			dd=fmonth+"/"+fday+"/"+String(d.getFullYear())
			}
		if (dformat=="%d-%m-%Y"){
			dd=fday+"-"+fmonth+"-"+String(d.getFullYear())
			}
		if (dformat=="%Y-%m-%d"){
			dd= String(d.getFullYear())+"-"+fmonth+"-"+fday
			}
		if (dformat=="%m-%d-%Y"){
			dd=fmonth+"-"+ fday+"-"+String(d.getFullYear())
			}
		document.<?php echo $formname;?>.departureDate.value=dd;
		}
		</script>
	<?php
	}
 */


/**
#
 * Pass an image location, will construct a size optimised <img src=""> string back, based on the image's original size
#
 */
/* function showImage($imageLocation,$target)
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH."/".$imageLocation))
		{
		//get the image size of the picture and load it into an array
		$mysock = getimagesize($imageLocation);
		if ($mysock)
			{
			// http://www.sitepoint.com/article/image-resizing-php
			//takes the larger size of the width and height and applies the formula accordingly...this is so this script will work dynamically with any size image
			$width=$mysock[0];
			$height=$mysock[1];
			if ($width > $height)
				$percentage = ($target / $width);
			else
				$percentage = ($target / $height);
			//gets the new value and applies the percentage, then rounds the value
			$width = round($width * $percentage);
			$height = round($height * $percentage);
			$result=" width=\"$width\" height=\"$height\"";
			echo "<img src=\"".$imageLocation."\" border=\"0\" ".$result." />";
			}
		else
			echo "&nbsp;";
		}
	}
 */

/**
#
 * Validates a url passed from the configuration while saving
#
 */
/* function validateURL($url)
	{
	$url=urldecode($url);
	if (!strncasecmp($url,'javascript',10)) {
		$url="";
		}
	else
		{
		$url=strip_tags($url,'%26');
		}
	return $url;
	}
 */

/**
#
 * Creates and echos the calendar month dropdown
#
 */
/* function showCalandarMonthDropdown()
	{
	$currentMonth=date("Y/m/d");
	$dateElements=explode("/",$currentMonth);
	$nextMonth=strftime("%B %Y", mktime(0, 0, 0,$dateElements[1],1,$dateElements[0]));
	$nm= mktime(0, 0, 0,$dateElements[1],1,$dateElements[0]);
	echo "<table><tr>";
	for ($i=1;$i<=16;$i++)
		{
		$link="<td><a href=\"".sefRelToAbs(JOMRES_SITEPAGE_URL."&requestedMonth=$nm")."\"><font size=\"1\">|".$nextMonth."</font></a></td>";
		echo $link;
		$nextMonth=strftime("%B %Y", mktime(0, 0, 0,$dateElements[1]+$i,1,$dateElements[0]));
		$nm= mktime(0, 0, 0,$dateElements[1]+$i,1,$dateElements[0]);
		if ($i%8==0 and $i<16)
			echo "</tr><tr>";
		}
	echo "</tr></table>";
	}
 */

/**
#
 * Creates the javascript calendar language selection dropdown
#
 */
/* function createJSLanguageDropdown()
	{
	$mrConfig=getPropertySpecificSettings();
	$currentLangFile=$mrConfig['jscalendarLangfile'];
	$calendarFileNamesArray=array("calendar-en.js","calendar-af.js","calendar-al.js","calendar-bg.js","calendar-big5.js","calendar-big5-utf8.js","calendar-br.js","calendar-ca.js","calendar-cs-utf8.js","calendar-cs-win.js","calendar-da.js","calendar-de.js","calendar-du.js","calendar-el.js","calendar-es.js","calendar-fi.js","calendar-fr.js","calendar-he-utf8.js","calendar-hr.js","calendar-hr-utf8.js","calendar-hu.js","calendar-it.js","calendar-jp.js","calendar-ko.js","calendar-ko-utf8.js","calendar-lt.js","calendar-lt-utf8.js","calendar-lv.js","calendar-nl.js","calendar-no.js","calendar-pl.js","calendar-pl-utf8.js","calendar-pt.js","calendar-ro.js","calendar-ru.js","calendar-ru_win_.js","calendar-si.js","calendar-sk.js","calendar-sp.js","calendar-sv.js","calendar-tr.js","calendar-zh.js","cn_utf8.js");
	$listTxt = '<span><select id="cfg_jscalendarLangfile" class="inputbox" name="cfg_jscalendarLangfile">';
	//$listTxt="<select class=\"inputbox\" name=\"cfg_jscalendarLangfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentLangFile)
			$selected="selected";
		$listTxt .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$listTxt .="</select></span>";
	return $listTxt;
	}
 */

/**
#
 *  Creates the javascript calendar css selection dropdown
#
 */
/* function createJSCSSDropdown()
	{
	$mrConfig=getPropertySpecificSettings();
	$currentCSSFile=$mrConfig['jscalendarCSSfile'];
	$calendarFileNamesArray=array("calendar-win2k-cold-2.css","calendar-blue2.css","calendar-blue.css","calendar-brown.css","calendar-green.css","calendar-system.css","calendar-tas.css","calendar-win2k-1.css","calendar-win2k-2.css","calendar-win2k-cold-1.css");
	$listTxt = '<span><select id="cfg_jscalendarCSSfile" class="inputbox" name="cfg_jscalendarCSSfile">';
	//$listTxt="<select class=\"inputbox\" name=\"cfg_jscalendarCSSfile\">";
	foreach ($calendarFileNamesArray as $fileName)
		{
		$selected="";
		if ($fileName == $currentCSSFile)
			$selected="selected";
		$listTxt .= "<option ".$selected." value=\"".$fileName."\" >".$fileName."</option>/n";
		}
	$listTxt .="</select></span>";
	return $listTxt;
	}
 */

/**
 * This method creates a standard cpanel button
 *
 * @param unknown_type $link
 * @param unknown_type $image
 * @param unknown_type $text
 */
/* 	function _quickiconButton( $link, $image, $text, $path='/administrator/images/' ) {
		?>
		<div style="padding:0 2px 0 0;text-align:center;vertical-align:middle;float:left;width:120px;height:110px;">
			<div class="icon" align="center">
				<a href="<?php echo $link; ?>" style="text-decoration:none;">
				<img src="<?php echo get_showtime('live_site').$path.$image;?>" border="0" /><br />
				<span><?php echo $text; ?></span>
				</a>
			</div>
		</div>
		<?php
	} */


/* if (!function_exists('is_iPhone'))
	{
	function is_iPhone($agent='')
	{
	if(empty($agent)) $agent = $_SERVER['HTTP_USER_AGENT'];
	if(!empty($agent) and preg_match("~Mozilla/[^ ]+ \((iPhone|iPod); U; CPU [^;]+ Mac OS X; [^)]+\) AppleWebKit/[^ ]+ \(KHTML, like Gecko\) Version/[^ ]+ Mobile/[^ ]+ Safari/[^ ]+~",$agent,$match))
		{
		return "YES";
		} elseif(stristr($agent,'iphone') or stristr($agent,'ipod'))
			{
			return "MAYBE";
			}
			else
			{
			return "NO";
			}
		}
	}
 */

/* function editCustomTextAll()
	{
	$mrConfig=getPropertySpecificSettings();
	$mrConfig['editingOn']="1";
	$allDefinedContants=get_defined_constants();
	$jomresConstants=array();
	foreach ($allDefinedContants as $key=>$value)
		{
		if (substr($key,0,7)=="_JOMRES")
			$jomresConstants[$key]=$value;
		if (substr($key,0,7)=="_JOMCOMP")
			$jomresConstants[$key]=$value;
		}
	$mrConfig['editingOn']="1";
	foreach ($jomresConstants as $key=>$value)
		{
		if ( get_showtime('lang') == "en")
			echo jr_gettext($key,$value)."&nbsp;&nbsp;::&nbsp;&nbsp;".$key;
		else
			echo jr_gettext($key,$value,true,FALSE)."&nbsp;&nbsp;::&nbsp;&nbsp;".$key;
		echo "<br>";
		}
	}
*/

/**
#
 * Alternative function for str_ireplace
#
 */

/* if(!function_exists('str_ireplace'))
	{
	function str_ireplace($search,$replace,$subject)
		{
		$token = chr(1);
		$haystack = strtolower($subject);
		//$needle = strtolower($search);
		if (is_array($search) )
			{
			$count=count($search);
			for ($i=0;$i<$count;$i++)
				{
				//echo $search[$i];echo "<br/>";
				$search[$i]= strtolower($search[$i]);
				}
			$needle=$search;
			}
		else
			$needle = strtolower($search);
		while (($pos=strpos($haystack,$needle))!==FALSE)
			{
			$subject = substr_replace($subject,$token,$pos,strlen($search));
			$haystack = substr_replace($haystack,$token,$pos,strlen($search));
			}
		$subject = str_replace($token,$replace,$subject);
		return $subject;
		}
	}
 */

/* function mailJomresdotnet($message)
	{
	if (jomresGetDomain() != "localhost")
		{
		$to = "bugs@jomres.net ";
		$subject = "Error report from ".get_showtime('sitename');
		$from = get_showtime('mailfrom');

		$body = " on ".date('d/m/Y');
		$body .= " at ".date('g:i A')."\n\nDetails:\n";
		$body .= "Server details follow\n\n";
		$body .= "Livesite: ".get_showtime('live_site')."\n";
		$body .= "Site name: ".get_showtime('sitename')."\n";
		$body .= "Users email address: ".get_showtime('mailfrom')."\n";
		$body =	$message."\n";
		jomresMailer( $from, get_showtime('sitename'), $to, $subject, $body,0);
		}
	} */


?>