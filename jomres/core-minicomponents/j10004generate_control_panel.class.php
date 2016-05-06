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

class j10004generate_control_panel
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$buttons  = $componentArgs[ 'control_panel_buttons_categorised' ];
		$button_o = array ();
		$i = 1;
		
		foreach ( $buttons as $category => $buts )
			{
			$rows = array ();
			$output = array ();
			
			foreach ( $buts as $key => $val )
				{
				$r               = $val;
				$r[ 'LIVESITE' ] = get_showtime( 'live_site' );
				$r[ 'TARGET' ]   = '';
				
				if ( $val[ 'external' ] ) 
					$r[ 'TARGET' ] = ' target="_blank" ';

				$r[ 'disabled_class' ] = '';
				if ( $r[ 'disabled' ] )
					{
					$r[ 'link' ] = '#';
					if ( !using_bootstrap() ) 
						$r[ 'disabled_class' ] = 'ui-state-error ui-state-disabled';
					else
						$r[ 'disabled_class' ] = 'disabled';
					}

				if ( get_showtime( "task" ) != "addplugin" )
					{
					$r[ 'BADGES' ]             = '';
					$bang                      = explode( "task=", $r[ 'link' ] );
					if (!isset($bang[ 1 ]))
						$bang[ 1 ] = 0;
					$items_requiring_attention = get_number_of_items_requiring_attention_for_menu_option( $bang[ 1 ] );
					if ( count( $items_requiring_attention ) > 0 )
						{
						foreach ( $items_requiring_attention as $colour => $number )
							{
							if ( $number > 0 )
								{
								$tmpl = new patTemplate();
								$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
								$tmpl->readTemplatesFromInput( 'menu_badge_' . $colour . '.html' );
								$tmpl->addRows( 'items_requiring_attention', array ( array ( "NUMBER" => $number ) ) );
								$r[ 'BADGES' ] .= $tmpl->getParsedTemplate();
								}
							}
						}
					}
				
				parse_str( $val[ 'link' ], $url_params );
				if(isset($url_params[ 'task' ]))
					{
					$button_task = $url_params[ 'task' ];
					if ( $button_task == get_showtime( 'task' ) )
						{
						if ( !using_bootstrap() ) 
							{
							$r[ 'ACTIVE' ] = "ui-state-active";
							}
						else
							{
							$r[ 'ACTIVE' ] = "active";
							$output[ 'COLLAPSE_IN' ] = "in";
							}
						}
					else
						{
						$r[ 'ACTIVE' ] = "";
						}
					}
				elseif (get_showtime('task') == '')
					{
					$r[ 'ACTIVE' ] = "active";
					$output[ 'COLLAPSE_IN' ] = "in";
					$r[ 'BADGES' ] = '';
					}
				else
					$r[ 'BADGES' ] = '';
				
				$rows[ ] = $r;
				}

			$pageoutput           = array ();
			$output[ 'CATEGORY' ] = jr_ucwords( $category );
			$output[ 'ID' ] = "cpanel-category-".$i;
			
			$pageoutput[ ]        = $output;
			$tmpl                 = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'control_panel_menu_options.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$button_o[ ][ 'DIV' ] = $tmpl->getParsedTemplate();
			
			$i++;
			}

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'control_panel_menu_wrapper.html' );
		$tmpl->addRows( 'button_output', $button_o );
		$this->ret_vals = $tmpl->getParsedTemplate();
		}


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
