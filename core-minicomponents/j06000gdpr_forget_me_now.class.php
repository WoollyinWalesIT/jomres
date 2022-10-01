<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
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

class j06000gdpr_forget_me_now
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'gdpr_my_data',
				'info' => '_JOMRES_GDPR_MY_DATA',
				'arguments' => array()
				);

			return;
		}
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		jr_import('jomres_gdpr_personal_information_collections');
		$jomres_gdpr_personal_information_collections = new jomres_gdpr_personal_information_collections();
		$jomres_gdpr_personal_information_collections->set_id($thisJRUser->id);
		$result = $jomres_gdpr_personal_information_collections->can_redact_this_cms_user();
		if ($result['can_redact'] == false) {
			echo $result['reason'];
			return;
		}
		$jomres_gdpr_personal_information_collections->redact_pii();
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_my_account'), jr_gettext('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', false));
	}


	public function getRetVals()
	{
		return null;
	}
}
