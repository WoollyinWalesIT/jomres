<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.2.2
	 *
	 * @copyright	2005-2022 Vince Wooll
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

			$pdf_test_mode = false;

			if (isset($componentArgs['property_uid'])) {
				$property_uid = (int)$componentArgs['property_uid'];
			} else {
				$property_uid = intval(jomresGetParam($_REQUEST, 'property_uid', 0));
			}

			if (isset($componentArgs['as_pdf'])) {
				$as_pdf = (bool)$componentArgs['as_pdf'];
			} elseif ( isset($_REQUEST['as_pdf']) ) {
				$as_pdf = (bool)jomresGetParam($_REQUEST, 'as_pdf', false);
			} else {
				$as_pdf = false;
			}

			if ($pdf_test_mode == true ) {
				$as_pdf = true;
			}

			if (isset($componentArgs['output_now'])) {
				$output_now = (bool)$componentArgs['output_now'];
			} elseif ( isset($_REQUEST['output_now']) ) {
				$output_now = (bool)jomresGetParam($_REQUEST, 'output_now', false);
			} else {
				$output_now = false;
			}

			$this->retVals = '';

			jr_import('jomres_markdown');
			$jomres_markdown = new jomres_markdown();

			$query = "SELECT property_policies_disclaimers FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
			$property_policiesdisclaimers = doSelectSql($query, 1);

			$property_policiesdisclaimers = jomres_cmsspecific_parseByBots($jomres_markdown->get_markdown($property_policiesdisclaimers));

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

			if ($pdf_test_mode == true ) {
				$tmpl->readTemplatesFromInput('terms_pdf.html');
				$pdf = output_pdf($tmpl->getParsedTemplate() , $property[ 'HPOLICIESDISCLAIMERS' ] , true );
				header("Content-type:application/pdf");
				echo $pdf;
				exit;
			}

			if ($as_pdf) {
				$tmpl->readTemplatesFromInput('terms_pdf.html');
				$pdf = output_pdf($tmpl->getParsedTemplate() , $property[ 'HPOLICIESDISCLAIMERS' ] , true );
				$this->retVals = $pdf;
			} else {
				$tmpl->readTemplatesFromInput('terms.html');
				if (!isset($componentArgs['output_now']) || $componentArgs['output_now'] == true ) {
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
