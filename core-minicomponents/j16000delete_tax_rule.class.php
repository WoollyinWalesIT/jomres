<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
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

class j16000delete_tax_rule
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
		$id = jomresGetParam($_REQUEST, 'id', 0);
		if ($id > 1) {
			$query = 'DELETE FROM #__jomres_tax_rules WHERE id = '.$id;
			$result = doInsertSql($query);

			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_tax_rules'), $saveMessage);
		} else {
			echo jr_gettext('_JRPORTAL_TAXRATES_CANNOTDELETE', '_JRPORTAL_TAXRATES_CANNOTDELETE', false);
		}
	}

	/**
	 * Must be included in every mini-component.
	 #
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	 */
	public function getRetVals()
	{
		return null;
	}
}
