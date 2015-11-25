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

class j16000show_charts
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$MiniComponents->triggerEvent( '13600' ); // All charting minicomponents

		$rows=array();
		foreach ($MiniComponents->miniComponentData['13600'] as $key => $minicomponent_data )
			{
			if ( isset($minicomponent_data) )
				{
				$r = array();
				$r['CHART']			= $MiniComponents->specificEvent( '16000', 'show_chart' , $minicomponent_data );
				$r['TITLE']			= $minicomponent_data['label'];
				$r['CHART_PARAMS']	= "&task=show_chart&".$minicomponent_data['chart_params'];
				$r['TITLE_CLASS']	= $minicomponent_data['title_class'];
				$r['MORE_INFO']	= $minicomponent_data['more_info'];
				$rows[] = $r;
				}
			}
		
 		if (count($rows)==0)
			return; 
		
		$output = array ( "PAGETITLE"=> jr_gettext( '_JRPORTAL_STATS_PATETITLE', _JRPORTAL_STATS_PATETITLE, false, false ) );
		
 		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->readTemplatesFromInput( 'admin_charts.html' );
		if ( isset($componentArgs['return_data']))
			$this->retVals=$tmpl->getParsedTemplate();
		else
			$tmpl->displayParsedTemplate();
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
