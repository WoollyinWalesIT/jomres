<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
*
* Methods for cleaning up various sets of data, primarily for GDPR compliance
*
*/
class jomres_gdpr_optin_consent
{
    public function __construct()
    {
		$MiniComponents = jomres_getSingleton('mcHandler');
		
		$this->date_time = date('Y-m-d H-i-s');
		$this->ip = get_remote_ip_number();
		$consent_form = $MiniComponents->specificEvent('06000', 'show_consent_form' , array ('output_now' => false) );
		$this->optin_content =  filter_var($consent_form, FILTER_SANITIZE_SPECIAL_CHARS,FILTER_FLAG_STRIP_HIGH) ;
		$this->optedin = false;
		
    }
	
	public function user_consents_to_storage()
	{
		if(!isset($_COOKIE['jomres_gdpr_consent_form_processed']) ) {
			return false;
		}

		if( (int)$_COOKIE['jomres_gdpr_consent_form_processed'] == 0  ) {
			return false;
		}
		return true;
	}
	
	public function save_record()
	{
		$query = "INSERT INTO #__jomres_gdpr_optins
			(
				`date_time`,
				`ip`,
				`optin_content`,
				`optedin`
			)
			VALUES
			(
				'".$this->date_time."',
				'".$this->ip."',
				'".$this->optin_content."',
				'".$this->optedin."'
			)
		";
		doInsertSql($query);
		
		header('Set-Cookie: jomres_gdpr_consent_form_processed='.(int)$this->optedin.'; expires=Fri, 31-Dec-9999 23:59:59 GMT');
	}
}


/*
https://medium.com/@sagarag/how-to-design-gdpr-compliant-consent-b5d6cf28d0c5
			
Record tracking on consents
In order to demonstrate that you have consent from an individual, processing organizations should maintain following records.

Who consented - the name of the individual, or other identifier
When they consented - a copy of a dated document, or online records that include a timestamp.
What they were told at the time - a master copy of the document or data capture form containing the consent statement in use at that time, along with any separate privacy policy, including version numbers and dates matching the date consent was given. If consent was given orally, your records should include a copy of the script used at that time.
How they consented - for written consent, a copy of the relevant document or data capture form. If consent was given online, your records should include the data submitted as well as a timestamp to link it to the relevant version of the data capture form. If consent was given orally, you should keep a note of this made at the time of the conversation -it doesn’t need to be a full record of the conversation.
Whether they have withdrawn consent - and if so, when.
*/
			