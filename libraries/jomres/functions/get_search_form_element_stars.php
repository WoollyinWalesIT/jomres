<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

function get_search_form_element_stars()
{
	$lang = get_showtime('lang');
	jr_import('jomres_data_sources');
	$jomres_data_sources = new jomres_data_sources();
	$stars = array ( 0 => $jomres_data_sources->get_data( $lang , 'stars'));

	$stars_output = [];
	foreach ($stars[0] as $key => $val ) {
			if ($key == 0) {
				$stars_output[] = array (
					'VALUE' => $key ,
					'STARS' => jr_gettext('_JOMRES_SEARCH_ALL', '_JOMRES_SEARCH_ALL', false, false) ,
					'NUMBER_OF_PROPERTIES' => '' ,
					'PROPERTIES' => ''
				);
			} else {
				$stars_output[] = array (
					'VALUE' => $key ,
					'STARS' => $key ,
					'NUMBER_OF_PROPERTIES' => $val ,
					'PROPERTIES' => jr_gettext('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', false, false)
				);
			}

	}

	$pageoutput = [];
	$output = [];

	$output['LABEL'] =jr_gettext('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS','_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',false,false);

	$pageoutput[ ] = $output;
	$tmpl = new patTemplate();
	$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
	$tmpl->addRows('pageoutput', $pageoutput);
	$tmpl->addRows('stars', $stars_output);

	$tmpl->readTemplatesFromInput('search_form_element_stars.html');
	return $tmpl->getParsedTemplate();
}
