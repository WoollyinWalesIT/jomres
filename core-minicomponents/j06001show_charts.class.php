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

class j06001show_charts
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = true;return;}

		$MiniComponents->triggerEvent( '03600' ); // All charting minicomponents

		$rows=array();
		foreach ($MiniComponents->miniComponentData['03600'] as $key => $minicomponent_data )
			{
			if ( isset($minicomponent_data) )
				{
				$r = array();
				$r['CHART']			= $MiniComponents->specificEvent( '06001', 'show_chart' , $minicomponent_data );
				$r['TITLE']			= $minicomponent_data['label'];
				$r['CHART_PARAMS']	= "&task=show_chart&".$minicomponent_data['chart_params'];
				$r['TITLE_CLASS']	= $minicomponent_data['title_class'];
				$rows[] = $r;
				}
			}

 		if (count($rows)==0)
			return; 
		
 		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'rows',$rows);
		$tmpl->readTemplatesFromInput( 'charts.html' );
		echo $tmpl->getParsedTemplate();
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
