<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
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

class j06002save_email
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
		$MiniComponents = jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$email_subject = jomresGetParam($_POST, 'email_subject', '');
		$email_text = jomresGetParam($_POST, 'email_text', '');
		$email_type = jomresGetParam($_POST, 'email_type', '');

		if ($email_type == '' || $email_text == '' || $email_subject == '') {
			if ($email_type == '') {
				echo '<p class="alert alert-error">Error: Email type not valid.<p>';
			}
			if ($email_text == '') {
				echo '<p class="alert alert-error">Error: Email text can`t be blank.<p>';
			}
			if ($email_subject == '') {
				echo '<p class="alert alert-error">Error: Email subject can`t be blank.<p>';
			}
		} else {
			updateCustomText('_EMAIL_TEXT_'.$email_type, $email_text, true);
			updateCustomText('_EMAIL_SUBJECT_'.$email_type, $email_subject, true);

			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=list_emails'), '');
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
