<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
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

class j16000edit_taxrate
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
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$id = intval(jomresGetParam($_REQUEST, 'id', 0));

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		$output[ 'PAGETITLE' ] = jr_gettext('_JRPORTAL_TAX_RATE_EDIT', '_JRPORTAL_TAX_RATE_EDIT', false);
		$output[ 'HCODE' ] = jr_gettext('_JRPORTAL_TAXRATES_CODE', '_JRPORTAL_TAXRATES_CODE', false);
		$output[ 'HDESCRIPTION' ] = jr_gettext('_JRPORTAL_TAXRATES_DESCRIPTION', '_JRPORTAL_TAXRATES_DESCRIPTION', false);
		$output[ 'HRATE' ] = jr_gettext('_JRPORTAL_TAXRATES_RATE', '_JRPORTAL_TAXRATES_RATE', false);
		$output[ '_JOMRES_IS_EU_COUNTRY' ] = jr_gettext('_JOMRES_IS_EU_COUNTRY', '_JOMRES_IS_EU_COUNTRY', false);

		if ($id > 0) {
			$jrportal_taxrate->gather_data($id);
			$output[ 'ID' ] = $jrportal_taxrate->id;
			$output[ 'CODE' ] = $jrportal_taxrate->code;
			$output[ 'DESCRIPTION' ] = $jrportal_taxrate->description;
			$output[ 'RATE' ] = $jrportal_taxrate->rate;
			$selected = $jrportal_taxrate->is_eu_country;
		} else {
			$output[ 'ID' ] = '';
			$output[ 'CODE' ] = '';
			$output[ 'DESCRIPTION' ] = '';
			$output[ 'RATE' ] = '';
			$selected = 0;
		}

		$yesno = array();
		$yesno[ ] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[ ] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));
		$output[ 'IS_EU_COUNTRY' ] = jomresHTML::selectList($yesno, 'is_eu_country', 'class="inputbox" size="1"', 'value', 'text', $selected);

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_taxrates', '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_taxrate');

		if ($id > 0) {
			$jrtb .= $jrtbar->toolbarItem('delete', JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_taxrate'.'&no_html=1&id='.$id, '');
		} else {
			echo jr_gettext('_JRPORTAL_TAXRATES_CANNOTDELETE', '_JRPORTAL_TAXRATES_CANNOTDELETE', false);
		}
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_taxrate.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
