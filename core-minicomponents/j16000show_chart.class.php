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

class j16000show_chart
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		jomres_cmsspecific_addheaddata( "javascript",  JOMRES_ROOT_DIRECTORY."/javascript/", "Chart.js" );
		
		$mrConfig = getPropertySpecificSettings( $this->property_uid );

		$output = array();

		if (isset($_REQUEST['chart_params'])) // For passing parameters directly to the chart, allows us to show charts smaller and larger
			{
			//$parameters = parse_str ($_REQUEST['chart_params']);
			foreach ( $_REQUEST['chart_params']['labels'] as $key => $val )
				{
				$componentArgs['labels'][] = filter_var( $val, FILTER_SANITIZE_SPECIAL_CHARS );
				}
			foreach ( $_REQUEST['chart_params']['data'] as $key => $val )
				{
				$componentArgs['data'][] = filter_var( $val, FILTER_SANITIZE_SPECIAL_CHARS );
				}
			$componentArgs['label'] = filter_var( $_REQUEST['chart_params']['label'], FILTER_SANITIZE_SPECIAL_CHARS );
			}

		
		$output['label'] = $componentArgs['label'];
		$output['random_id'] = generateJomresRandomString( 30 );
		
		$output_labels = array();
		foreach ( $componentArgs['labels'] as $label )
			{
			$output_labels[] = array ( "label" => $label , "comma" => "," );
			}
		$count = count($output_labels);
		$output_labels [$count-1]['comma'] = '';
		

		$output_data = array();
		foreach ( $componentArgs['data'] as $data )
			{
			$output_data[] = array ( "data" => $data , "comma" => "," );
			}
		$count = count($output_data);
		$output_data [$count-1]['comma'] = '';
		
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->addRows( 'pageoutput',$pageoutput);
		$tmpl->addRows( 'output_labels',$output_labels);
		$tmpl->addRows( 'output_data',$output_data);
		$tmpl->readTemplatesFromInput( 'admin_chart.html' );
		$this->retVals = $tmpl->getParsedTemplate();
		if (isset($_REQUEST['chart_params']))
			echo $this->retVals;
		}

	function getRetVals()
		{
		return $this->retVals;
		}
	}
