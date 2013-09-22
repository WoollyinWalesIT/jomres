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

class j00004build_tour_strings
	{
	function j00004build_tour_strings( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		if (!using_bootstrap() || AJAXCALL )
			{
			return;
			}
		
		// Documentation http://bootstraptour.com/
		
		$testing = true;
		
		if ( !file_exists( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "jomres" . JRDS . "temp" . JRDS . "tour_strings_".get_showtime("lang").".js" ) || $testing )
			{
			$tour_items = array();
			
			$id = 'jomres_alternate_menu_position';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_property_name';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_timezone_dropdown';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_lang_dropdown';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_editing_mode_dropdown';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'right',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_content';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_switcher_active_property_initials';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'found_properties';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_property_header';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'gallerywrapper';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_property_details_buttons';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'top',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_inline_calendar';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_property_details_main_details';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_property_details_moreinfo';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_property_details_booking_form';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_property_details_map';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_reviews_list';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			$id = 'tour_target_rooms_list';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);

			$id = 'tour_target_property_details_tariffs';
			$tour_items [ $id ] = array(
				"id"                 => $id,
				"position"           => 'left',
				"title"              => jr_gettext ( "TOUR_ID_".strtoupper($id)."_TITLE" , '' , false ),
				"content"            => jr_gettext ( "TOUR_ID_".strtoupper($id)."_CONTENT" , '' , false )
				);
			
			
			
			
			$string = json_encode ($tour_items);
			$sanitised = str_replace( "'" , "&#34;" , $string );
			$tour_output = "
			var tour_next = '".jr_gettext("_PN_NEXT",_PN_NEXT,false)."';
			var tour_prev = '".jr_gettext("_PN_PREVIOUS",_PN_PREVIOUS,false)."';
			var tour_end = '".jr_gettext("END_TOUR",END_TOUR,false)."';
			
			
			var json_tour_strings = '" . $sanitised ."',
			 tour_strings = JSON.parse(json_tour_strings);";
			
			file_put_contents( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . "jomres" . JRDS . "temp" . JRDS . "tour_strings_".get_showtime("lang").".js", $tour_output );
			jomres_cmsspecific_addheaddata( "javascript", 'jomres/temp/', "tour_strings_".get_showtime("lang").".js" );
			
			}
		
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>