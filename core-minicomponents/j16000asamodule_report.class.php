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

class j16000asamodule_report
	{
	function __construct()
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		jr_import("shortcode_parser");
		$parser = new shortcode_parser();
		$shortcodes = $parser->shortcodes;
		
		$output		=array();
		$rows		=array();
		$pageoutput	=array();
		
		if (count($shortcodes)>0)
			{
			$output[ 'PAGETITLE' ]				= jr_gettext( '_JOMRES_SHORTCODES', '_JOMRES_SHORTCODES',false );
			$output[ 'SHORTCODE_TRIGGER' ]		= jr_gettext( 'SHORTCODE_TRIGGER', 'SHORTCODE_TRIGGER',false );
			$output[ 'SHORTCODE_TASK' ]			= jr_gettext( 'SHORTCODE_TASK', 'SHORTCODE_TASK',false );
			$output[ 'SHORTCODE_DESCRIPTION' ]	= jr_gettext( 'SHORTCODE_DESCRIPTION', 'SHORTCODE_DESCRIPTION',false );
			$output[ 'SHORTCODE_ARGUMENTS' ]	= jr_gettext( 'SHORTCODE_ARGUMENTS', 'SHORTCODE_ARGUMENTS',false );
			$output[ 'SHORTCODE_EXAMPLE' ]		= jr_gettext( 'SHORTCODE_EXAMPLE', 'SHORTCODE_EXAMPLE',false );
			
			$rows=array();
			foreach ($shortcodes as $key=>$trigger )
				{
				if (count($trigger)>0)
					{
					foreach ($trigger as $task)
						{
						$r = array();
						
						$r['TRIGGER'] =$key;
						$r['TASK'] =$task['task'];
						$r['DESCRIPTION'] =jr_gettext( $task['info'], $task['info'],false );
						
						$r['ARGUMENTS'] ='';
						$arguments = array();
						
						if (count($task['arguments'])>0)
							{
							foreach ($task['arguments'] as $arg)
								{
								$o		=array();
								$po		=array();
								
								$o['ARGUMENT'] = $arg['argument'];
								$o['ARG_INFO'] = jr_gettext( $arg['arg_info'], $arg['arg_info'],false ); 
								$o['ARG_EXAMPLE'] = '';
								if ( isset($arg['arg_example'] ) )
									{
									$arguments[ $arg['argument'] ] = $arg['arg_example'] ;
									}
								
								$po[ ] = $o;
								$tmpl          = new patTemplate();
								$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
								$tmpl->readTemplatesFromInput( 'shortcode_snippet.html' );
								$tmpl->addRows( 'pageoutput', $po );
								$r['ARGUMENTS'] .= $tmpl->getParsedTemplate();
								}
							}

						$arg_str = '';
						if (count($arguments) > 0 )
							{
							foreach ($arguments as $key=>$example)
								{
								$arg_str .= '&'.$key.'='.$example;
								}
							
							if ( this_cms_is_wordpress() )
								$arg_str = 'params="'.$arg_str.'"';

							}
						
						if ( this_cms_is_wordpress() )
							{
							$r['EXAMPLE'] = '[jomres task="'.$r['TASK'].'" '.$arg_str.']';
							}
						else
							{
							$r['EXAMPLE'] = '{jomres '.$r['TASK'].' '.$arg_str.'}';
							}
						
						
						$rows[]=$r;
						}
					}
				}

			$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb   = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL_ADMIN ), '' );
			
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$pageoutput[ ] = $output;
			
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'list_shortcodes.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$tmpl->displayParsedTemplate();
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}