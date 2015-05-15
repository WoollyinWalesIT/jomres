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

class jomres_tooltips
	{
	/**
	#
	 * xxxx
	#
	 */
	function __construct()
		{
		$this->divs = array ();
		}

	function generate_tooltip( $div, $hover_title, $hover_content, $div_content, $class, $type, $type_arguments, $url )
		{
		$hover_content     = filter_var( $hover_content, FILTER_SANITIZE_SPECIAL_CHARS );
		$keeplooking       = true;
		$beautyTip_opacity = .9;
		// Just in the off-chance that we supply the same div name twice
		//$div="jrTooltip".preg_replace('/[^A-Za-z0-9_-]+/', "", $div);
		$div = generateJomresRandomString( 10 );
		while ( $keeplooking ):
			if ( !array_key_exists( $div, $this->divs ) ) $keeplooking = false;
			else
			$div = $div . mt_rand( 10000000, 99999999 );
		endwhile;

		$this->divs[ $div ] = $div;

		$div_string = '';

		switch ( $type )
		{
			case "ajaxpage":
				$url = $type_arguments[ "url" ];

				$output     = array ();
				$pageoutput = array ();

				$output[ 'TITLE' ]       = $div_content;
				$output[ 'DESCRIPTION' ] = $div_content;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_ajaxpage.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string = $tmpl->getParsedTemplate();
				break;
			case "infoimage":
				$output     = array ();
				$pageoutput = array ();

				$output[ 'TITLE' ]  = $hover_content;
				$output[ 'IMAGE' ]  = '/'.JOMRES_ROOT_DIRECTORY.'/images/SymbolInformation.png';
				$output[ 'WIDTH' ]  = $width;
				$output[ 'HEIGHT' ] = $height;
				$output[ 'BORDER' ] = $border;


				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_infoimage.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string = $tmpl->getParsedTemplate();

				break;
			case "warning":
				$output     = array ();
				$pageoutput = array ();

				$output[ 'THUMBNAIL' ] = $imagethumb;
				$output[ 'WARNING' ]   = $hover_content;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_warning.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string = $tmpl->getParsedTemplate();

				break;
			case "imageonly":
				$imagethumb = false;
				if ( isset( $type_arguments[ "imagethumb" ] ) ) $imagethumb = $type_arguments[ "imagethumb" ];

				$output     = array ();
				$pageoutput = array ();

				$output[ 'THUMBNAIL' ] = $imagethumb;
				$output[ 'IMAGE' ]     = $hover_content;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_imageonly.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string = $tmpl->getParsedTemplate();
				break;
			case "room_type":
				if ( !isset( $type_arguments[ "use_javascript" ] ) ) $type_arguments[ "use_javascript" ] = true;
				$use_javascript = $type_arguments[ "use_javascript" ];
				if ( $use_javascript )
					{
					$output     = array ();
					$pageoutput = array ();

					$output[ 'TITLE' ]       = $hover_title;
					$output[ 'DESCRIPTION' ] = $hover_content;
					$output[ 'IMAGE' ]       = $div_content;


					$pageoutput[ ] = $output;
					$tmpl          = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'tooltip_room_type.html' );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$div_string = $tmpl->getParsedTemplate();
					}
				else
					{
					$div_string .= '<div id="' . $div . '"';
					if ( strlen( $class ) > 0 ) $div_string .= ' class="' . $class . '" >';
					else
					$div_string .= ' class="jomres_bt_tooltip_features" >';
					$div_string .= '<img src="' . get_showtime( 'live_site' ) . "/" . $div_content . '" /><b>' . $hover_title . '</b></div>';
					}
				break;
			case "property_feature":
				if ( !isset( $type_arguments[ "use_javascript" ] ) ) $type_arguments[ "use_javascript" ] = true;
				$use_javascript = $type_arguments[ "use_javascript" ];
				if ( $use_javascript )
					{
					$output     = array ();
					$pageoutput = array ();

					$output[ 'TITLE' ]       = $hover_title;
					$output[ 'DESCRIPTION' ] = $hover_content;
					$output[ 'IMAGE' ]       = $div_content;

					$pageoutput[ ] = $output;
					$tmpl          = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'tooltip_property_feature.html' );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$div_string = $tmpl->getParsedTemplate();
					}
				else
					{
					$div_string .= '<div id="' . $div . '"';
					if ( strlen( $class ) > 0 ) $div_string .= ' class="' . $class . '" >';
					else
					$div_string .= ' class="jomres_bt_tooltip_features" >';
					$div_string .= '<img src="' . get_showtime( 'live_site' ) . "/" . $div_content . '" /><b>' . $hover_title . '</b></div>';

					}
				break;
			case "dashboard_tooltip":
				if ( !isset( $type_arguments[ "use_javascript" ] ) ) $type_arguments[ "use_javascript" ] = true;
				$use_javascript = $type_arguments[ "use_javascript" ];
				if ( $use_javascript )
					{
					$output     = array ();
					$pageoutput = array ();

					$output[ 'TEXT' ]    = $div_content;
					$output[ 'CONTENT' ] = $hover_content;
					$output[ 'URL' ]     = $url;

					$pageoutput[ ] = $output;
					$tmpl          = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'tooltip_dashboard.html' );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$div_string = $tmpl->getParsedTemplate();
					}
				else
					{
					$div_string .= '<div id="' . $div . '"';
					if ( strlen( $class ) > 0 ) $div_string .= ' class="' . $class . '" >';
					else
					$div_string .= ' class="jomres_bt_tooltip_features" >';
					$div_string .= '<img src="' . get_showtime( 'live_site' ) . "/" . $div_content . '" /><b>' . $hover_title . '</b></div>';

					}
				break;
			default:
				$output     = array ();
				$pageoutput = array ();

				$output[ 'TEXT' ]    = $div_content;
				$output[ 'CONTENT' ] = $hover_content;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string = $tmpl->getParsedTemplate();
				break;
		}

		return $div_string;
		}


	/*
		function get_javascript($div)
			{
			$javascript="<script>";
			if (count($this->divs)>0)
				{
				foreach ($this->divs as $div)
					{
					$javascript.="jomresJquery(".$div['id']."').bt();";
					}
				}
			$javascript.="</script>";
			return $javascript;
			}
	*/
	}


?>