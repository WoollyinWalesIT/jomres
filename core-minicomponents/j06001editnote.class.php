<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06001editnote
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
			$this->template_touchable = true;

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		if (!$thisJRUser->userIsManager) {
			return;
		}
		$defaultProperty = getDefaultProperty();
		$pageoutput = array();
		$output = array();
		$note_id = jomresGetParam($_REQUEST, 'note_id', 0);
		$contract_uid = jomresGetParam($_REQUEST, 'contract_uid', 0);
		if ($note_id == 0) {
			return;
		}

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_booking&contract_uid='.$contract_uid), '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'savenote');
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$query = "SELECT `note` FROM #__jomcomp_notes WHERE `id`='".(int) $note_id."' AND `property_uid`='".(int) $defaultProperty."' LIMIT 1";
		$output[ 'NOTE' ] = doSelectSql($query, 1);
		$output[ 'HNEWTEXT' ] = jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT', '_JOMCOMP_BOOKINGNOTES_EDIT');
		$output[ 'NOTE_ID' ] = $note_id;

		$output[ 'JOMRES_SITEPAGE_URL' ] = JOMRES_SITEPAGE_URL;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('edit_note.html');
		$tmpl->displayParsedTemplate();
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMCOMP_BOOKINGNOTES_EDIT', '_JOMCOMP_BOOKINGNOTES_EDIT');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
