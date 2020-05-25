<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000terms
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'terms',
				'info' => '_JOMRES_SHORTCODES_06000TERMS',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					),
				);

			return;
		}
		$property_uid = intval(jomresGetParam($_REQUEST, 'property_uid', 0));
		
		if (isset($componentArgs['as_pdf'])) {
			$as_pdf = (bool)$componentArgs['as_pdf'];
		} elseif ( isset($_REQUEST['as_pdf']) ) {
			$as_pdf = (bool)jomresGetParam($_REQUEST, 'as_pdf', false);
		} else {
			$as_pdf = false;
		}
		
		if (isset($componentArgs['output_now'])) {
			$output_now = (bool)$componentArgs['output_now'];
		} elseif ( isset($_REQUEST['output_now']) ) {
			$output_now = (bool)jomresGetParam($_REQUEST, 'output_now', false);
		} else {
			$output_now = false;
		}
		
		$this->retVals = '';

		$query = "SELECT property_policies_disclaimers FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
		$property_policiesdisclaimers = doSelectSql($query, 1);

		$property_policiesdisclaimers = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',  $property_policiesdisclaimers, false, false);

		$property = array();
		$property[ 'LIVESITE' ] = get_showtime('live_site');
		$property[ 'HPROPERTYNAME' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME');
		$property[ 'HPOLICIESDISCLAIMERS' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS');

		$property[ 'POLICIESDISCLAIMERS' ] = $property_policiesdisclaimers;
		if (empty($property[ 'POLICIESDISCLAIMERS' ])) {
			$property[ 'HPOLICIESDISCLAIMERS' ] = '';
		}

		$property_deets[ ] = $property;

		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('property_deets', $property_deets);
		
		
		if ($as_pdf) {
			$tmpl->readTemplatesFromInput('terms_pdf.html');
			$pdf = output_pdf($tmpl->getParsedTemplate() , $property[ 'HPOLICIESDISCLAIMERS' ] , true ); 
			$this->retVals = $pdf;
		} else {
			$tmpl->readTemplatesFromInput('terms.html');
			if (!isset($componentArgs['return_template'])) {
				$tmpl->displayParsedTemplate();
			} else {
				$this->retVals = $tmpl->getParsedTemplate();
			}
		}
		

	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */

	public function getRetVals()
	{
		return $this->retVals;
	}
}
