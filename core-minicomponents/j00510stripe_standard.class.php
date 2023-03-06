<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2022 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################
	#[AllowDynamicProperties]
class j00510stripe_standard {
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$ePointFilepath = get_showtime('ePointFilepath');
		$eLiveSite = get_showtime('eLiveSite');
		$plugin="stripe_standard";
		$defaultProperty=getDefaultProperty();

		$settingArray=array();
		$settingArray['active']="0";
		$settingArray['test_mode']="1";
		$settingArray['test_publishable_key']="";
		$settingArray['test_secret_key']="";
		$settingArray['test_signing_secret']="";

		$settingArray['live_publishable_key']="";
		$settingArray['live_secret_key']="";
		$settingArray['live_signing_secret']="";

		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO','_JOMRES_COM_MR_NO',FALSE) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES','_JOMRES_COM_MR_YES',FALSE) );

		$output = [];

		$query="SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = '".(int)$defaultProperty."' AND plugin = '$plugin' ";
		$settingsList=doSelectSql($query);
		foreach ($settingsList as $set) {
			$settingArray[$set->setting]=$set->value;
		}

		$output['LOGO'] = JOMRES_IMAGES_RELPATH."j00510".$plugin.".png";

		$output['JR_GATEWAY_CONFIG_ACTIVE']	= jr_gettext('_JOMRES_CUSTOMTEXT_GATEWAY_CONFIG_ACTIVE'.$plugin,"Active");
		$output['ACTIVE']					= jomresHTML::selectList( $yesno, 'active', 'class="inputbox form-control" size="1"', 'value', 'text', $settingArray['active'] );

		$output['TEST_PUBLISHABLE_KEY']		= $settingArray['test_publishable_key'];
		$output['TEST_SECRET_KEY']			= $settingArray['test_secret_key'];
		$output['LIVE_PUBLISHABLE_KEY']		= $settingArray['live_publishable_key'];
		$output['LIVE_SECRET_KEY']			= $settingArray['live_secret_key'];

		$output['LIVE_SIGNING_SECRET']			= $settingArray['live_signing_secret'];
		$output['TEST_SIGNING_SECRET']			= $settingArray['test_signing_secret'];

		$output['TEST_MODE']				= jomresHTML::selectList( $yesno, 'test_mode', 'class="inputbox form-control" size="1"', 'value', 'text', $settingArray['test_mode']);

		$output['STRIPE_STANDARD_TITLE']					= jr_gettext('STRIPE_STANDARD_TITLE','STRIPE_STANDARD_TITLE');
		$output['STRIPE_STANDARD_MARKETING']				= jr_gettext('STRIPE_STANDARD_MARKETING','STRIPE_STANDARD_MARKETING');
		$output['STRIPE_STANDARD_API_TOKEN_DESC']		= jr_gettext('STRIPE_STANDARD_API_TOKEN_DESC','STRIPE_STANDARD_API_TOKEN_DESC');

		$output['STRIPE_STANDARD_API_TEST_MODE']	= jr_gettext('STRIPE_STANDARD_API_TEST_MODE','STRIPE_STANDARD_API_TEST_MODE');
		$output['STRIPE_STANDARD_API_TEST_MODE_DESC']		= jr_gettext('STRIPE_STANDARD_API_TEST_MODE_DESC','STRIPE_STANDARD_API_TEST_MODE_DESC');

		$output['STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE']			= jr_gettext('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE','STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE');
		$output['STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE']	= jr_gettext('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE','STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE');
		$output['STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE']			= jr_gettext('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE','STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE');
		$output['STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE']	= jr_gettext('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE','STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE');

		$output['COMMON_SUBMIT']				= jr_gettext('COMMON_SUBMIT','COMMON_SUBMIT');
		$output['GATEWAY']						= 'stripe_standard';

		$output['WEBHOOK_URL'] = JOMRES_SITEPAGE_URL_AJAX.'&task=stripe_standard_callback';
		$output['STRIPE_STANDARD_WEBHOOK_URL']	= jr_gettext('STRIPE_STANDARD_WEBHOOK_URL','STRIPE_STANDARD_WEBHOOK_URL');
		$output['STRIPE_STANDARD_WEBHOOK_URL_DESC']	= jr_gettext('STRIPE_STANDARD_WEBHOOK_URL_DESC','STRIPE_STANDARD_WEBHOOK_URL_DESC');


		$output['STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET']	= jr_gettext('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET','STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET');
		$output['STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET']	= jr_gettext('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET','STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET');
		$output['STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC']	= jr_gettext('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC','STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC');

		$pageoutput[]=$output;
		$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
		$tmpl->readTemplatesFromInput( 'stripe_standard_edit_gateway.html' );
		$tmpl->addRows( 'edit_gateway', $pageoutput );
		$tmpl->displayParsedTemplate();
	}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
